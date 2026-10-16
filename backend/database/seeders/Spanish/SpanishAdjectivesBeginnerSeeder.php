<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class SpanishAdjectivesBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'spanish-adjectives')->firstOrFail();

        $quizzes = [
            [
                'title' => 'L’accord des adjectifs : les bases',
                'description' => 'Entraînez-vous à faire correspondre des adjectifs espagnols courants avec des noms singuliers et pluriels, y compris les formes masculines et féminines de base.',
                'duration' => 15,
                'passing_score' => 50,
                'questions' => [
                    [
                        'question' => 'Ana a une petite maison. Quelle expression semble naturelle en espagnol ?',
                        'choices' => [
                            ['choice_text' => 'una casa pequeño', 'is_correct' => false],
                            ['choice_text' => 'un casa pequeña', 'is_correct' => false],
                            ['choice_text' => 'una casa pequeña', 'is_correct' => true],
                            ['choice_text' => 'una casas pequeña', 'is_correct' => false],
                        ],
                        'explanation' => 'Casa est féminin singulier, donc l’article et l’adjectif s’accordent tous deux : « una casa pequeña ».',
                    ],
                    [
                        'question' => 'Choisissez l’adjectif correct pour « un libro ___ » quand le livre est neuf.',
                        'choices' => [
                            ['choice_text' => 'nueva', 'is_correct' => false],
                            ['choice_text' => 'nuevas', 'is_correct' => false],
                            ['choice_text' => 'nuevos', 'is_correct' => false],
                            ['choice_text' => 'nuevo', 'is_correct' => true],
                        ],
                        'explanation' => 'Libro est masculin singulier, donc nuevo est la forme qui correspond.',
                    ],
                    [
                        'question' => 'Quelle expression est correcte pour « deux vieilles voitures » ?',
                        'choices' => [
                            ['choice_text' => 'dos coches viejo', 'is_correct' => false],
                            ['choice_text' => 'dos coches viejos', 'is_correct' => true],
                            ['choice_text' => 'dos coches viejas', 'is_correct' => false],
                            ['choice_text' => 'dos coche viejos', 'is_correct' => false],
                        ],
                        'explanation' => 'Coches est masculin pluriel, donc viejo devient viejos.',
                    ],
                    [
                        'question' => 'Un élève écrit « las ventanas blanco ». Que faut-il changer ?',
                        'choices' => [
                            ['choice_text' => '« blanco » devrait devenir « blancas ».', 'is_correct' => true],
                            ['choice_text' => '« las » devrait devenir « los ».', 'is_correct' => false],
                            ['choice_text' => '« ventanas » devrait être au singulier.', 'is_correct' => false],
                            ['choice_text' => 'Rien ; la phrase est déjà correcte.', 'is_correct' => false],
                        ],
                        'explanation' => 'Ventanas est féminin pluriel, donc l’adjectif de couleur doit aussi être au féminin pluriel : « las ventanas blancas ».',
                    ],
                    [
                        'question' => 'Quelle phrase utilise correctement l’accord des adjectifs ?',
                        'choices' => [
                            ['choice_text' => 'El perro negra corre rápido.', 'is_correct' => false],
                            ['choice_text' => 'La perro negro corre rápido.', 'is_correct' => false],
                            ['choice_text' => 'El perro negro corre rápido.', 'is_correct' => true],
                            ['choice_text' => 'El perros negro corre rápido.', 'is_correct' => false],
                        ],
                        'explanation' => 'Perro est masculin singulier, donc negro est aussi masculin singulier.',
                    ],
                    [
                        'question' => 'Marta a trois fleurs rouges. Quelle expression doit-elle utiliser ?',
                        'choices' => [
                            ['choice_text' => 'tres flores rojo', 'is_correct' => false],
                            ['choice_text' => 'tres flores rojas', 'is_correct' => true],
                            ['choice_text' => 'tres flor rojas', 'is_correct' => false],
                            ['choice_text' => 'tres flores roja', 'is_correct' => false],
                        ],
                        'explanation' => 'Flores est féminin pluriel, donc roja doit s’accorder en genre et en nombre : rojas.',
                    ],
                    [
                        'question' => 'Quelle forme d’adjectif convient à « una película ___ » si le film est intéressant ?',
                        'choices' => [
                            ['choice_text' => 'interesanta', 'is_correct' => false],
                            ['choice_text' => 'interesantes', 'is_correct' => false],
                            ['choice_text' => 'interesanto', 'is_correct' => false],
                            ['choice_text' => 'interesante', 'is_correct' => true],
                        ],
                        'explanation' => 'Interesante a la même forme au singulier pour le masculin et le féminin.',
                    ],
                    [
                        'question' => 'Quelle paire montre correctement l’adjectif qui change au pluriel ?',
                        'choices' => [
                            ['choice_text' => 'el libro nuevo → los libros nuevos', 'is_correct' => true],
                            ['choice_text' => 'el libro nuevo → los libros nuevo', 'is_correct' => false],
                            ['choice_text' => 'la mesa nueva → las mesas nueva', 'is_correct' => false],
                            ['choice_text' => 'el coche rojo → los coches roja', 'is_correct' => false],
                        ],
                        'explanation' => 'Quand le nom passe au pluriel, l’adjectif passe aussi au pluriel : nuevo → nuevos.',
                    ],
                    [
                        'question' => 'Pourquoi « la camisa blanca » est-il correct ?',
                        'choices' => [
                            ['choice_text' => 'Les adjectifs espagnols prennent toujours une terminaison féminine.', 'is_correct' => false],
                            ['choice_text' => 'Camisa est masculin mais blanc est féminin.', 'is_correct' => false],
                            ['choice_text' => 'L’adjectif ne s’accorde pas avec le nom.', 'is_correct' => false],
                            ['choice_text' => 'L’adjectif s’accorde en genre et en nombre avec le nom féminin singulier.', 'is_correct' => true],
                        ],
                        'explanation' => 'Camisa est féminin singulier, donc l’adjectif régulier blanco devient blanca.',
                    ],
                    [
                        'question' => 'Un café a deux cafés chauds sur le comptoir. Quelle description est correcte ?',
                        'choices' => [
                            ['choice_text' => 'dos café caliente', 'is_correct' => false],
                            ['choice_text' => 'dos cafés calientas', 'is_correct' => false],
                            ['choice_text' => 'dos cafés calientes', 'is_correct' => true],
                            ['choice_text' => 'dos café calientes', 'is_correct' => false],
                        ],
                        'explanation' => 'Cafés est masculin pluriel et caliente passe au pluriel : calientes.',
                    ],
                    [
                        'question' => 'Quelle phrase contient une erreur d’accord de l’adjectif ?',
                        'choices' => [
                            ['choice_text' => 'Las chicas son simpático.', 'is_correct' => true],
                            ['choice_text' => 'Las chicas son simpáticas.', 'is_correct' => false],
                            ['choice_text' => 'Los chicos son simpáticos.', 'is_correct' => false],
                            ['choice_text' => 'La chica es simpática.', 'is_correct' => false],
                        ],
                        'explanation' => 'Chicas est féminin pluriel, donc simpático doit être féminin pluriel : simpáticas.',
                    ],
                    [
                        'question' => 'Vous voulez décrire un nom masculin et un nom féminin. Quelle paire est correcte ?',
                        'choices' => [
                            ['choice_text' => 'un coche rápida y una bicicleta rápido', 'is_correct' => false],
                            ['choice_text' => 'un coche rápido y una bicicleta rápida', 'is_correct' => true],
                            ['choice_text' => 'un coche rápidos y una bicicleta rápidas', 'is_correct' => false],
                            ['choice_text' => 'un coche rápida y una bicicleta rápida', 'is_correct' => false],
                        ],
                        'explanation' => 'Rápido devient rápida car il s’accorde séparément avec chaque nom : coche est masculin, bicicleta est féminin.',
                    ],
                ],
            ],
            [
                'title' => 'Formes masculines, féminines et plurielles',
                'description' => 'Gagnez en confiance avec les terminaisons régulières des adjectifs et les changements nécessaires selon le genre et le nombre du nom.',
                'duration' => 20,
                'passing_score' => 60,
                'questions' => [
                    [
                        'question' => 'Quelle est la forme féminine de « alto » pour un nom singulier ?',
                        'choices' => [
                            ['choice_text' => 'alta', 'is_correct' => true],
                            ['choice_text' => 'altas', 'is_correct' => false],
                            ['choice_text' => 'altos', 'is_correct' => false],
                            ['choice_text' => 'alte', 'is_correct' => false],
                        ],
                        'explanation' => 'Un adjectif régulier terminé en -o devient -a pour un nom féminin singulier.',
                    ],
                    [
                        'question' => 'Quelle est la forme masculine plurielle de « pequeño » ?',
                        'choices' => [
                            ['choice_text' => 'pequeñas', 'is_correct' => false],
                            ['choice_text' => 'pequeñoes', 'is_correct' => false],
                            ['choice_text' => 'pequeña', 'is_correct' => false],
                            ['choice_text' => 'pequeños', 'is_correct' => true],
                        ],
                        'explanation' => 'Le masculin pluriel ajoute -s : pequeño → pequeños.',
                    ],
                    [
                        'question' => 'Choisissez l’expression correcte pour « quatre belles maisons ».',
                        'choices' => [
                            ['choice_text' => 'cuatro casas bonitos', 'is_correct' => false],
                            ['choice_text' => 'cuatro casas bonitas', 'is_correct' => true],
                            ['choice_text' => 'cuatro casa bonitas', 'is_correct' => false],
                            ['choice_text' => 'cuatro casas bonita', 'is_correct' => false],
                        ],
                        'explanation' => 'Casas est féminin pluriel, donc bonita devient bonitas.',
                    ],
                    [
                        'question' => 'Quelle paire nom-adjectif est correcte ?',
                        'choices' => [
                            ['choice_text' => 'un vestido negra', 'is_correct' => false],
                            ['choice_text' => 'una vestido negro', 'is_correct' => false],
                            ['choice_text' => 'un vestido negro', 'is_correct' => true],
                            ['choice_text' => 'unos vestido negro', 'is_correct' => false],
                        ],
                        'explanation' => 'Vestido est masculin singulier, donc un et negro prennent tous deux la forme masculine singulière.',
                    ],
                    [
                        'question' => 'Quelle paire change correctement un adjectif régulier du féminin singulier au féminin pluriel ?',
                        'choices' => [
                            ['choice_text' => 'nueva → nuevos', 'is_correct' => false],
                            ['choice_text' => 'nueva → nuevo', 'is_correct' => false],
                            ['choice_text' => 'nueva → nueves', 'is_correct' => false],
                            ['choice_text' => 'nueva → nuevas', 'is_correct' => true],
                        ],
                        'explanation' => 'La terminaison féminine reste -a et le pluriel ajoute -s : nueva → nuevas.',
                    ],
                    [
                        'question' => 'Un élève dit « los coches roja ». Quelle est la correction la plus directe ?',
                        'choices' => [
                            ['choice_text' => 'los coches rojos', 'is_correct' => true],
                            ['choice_text' => 'las coches rojas', 'is_correct' => false],
                            ['choice_text' => 'los coche rojo', 'is_correct' => false],
                            ['choice_text' => 'la coches roja', 'is_correct' => false],
                        ],
                        'explanation' => 'Coches est masculin pluriel, donc rojo doit devenir rojos.',
                    ],
                    [
                        'question' => 'Quel adjectif garde habituellement la même forme singulière pour le masculin et le féminin ?',
                        'choices' => [
                            ['choice_text' => 'alto', 'is_correct' => false],
                            ['choice_text' => 'bonito', 'is_correct' => false],
                            ['choice_text' => 'feliz', 'is_correct' => true],
                            ['choice_text' => 'cansado', 'is_correct' => false],
                        ],
                        'explanation' => 'Feliz a la même forme singulière pour les deux genres : un niño feliz et una niña feliz.',
                    ],
                    [
                        'question' => 'Quelle expression utilise correctement « feliz » avec un nom féminin ?',
                        'choices' => [
                            ['choice_text' => 'una niña feliza', 'is_correct' => false],
                            ['choice_text' => 'una niña feliz', 'is_correct' => true],
                            ['choice_text' => 'un niña feliz', 'is_correct' => false],
                            ['choice_text' => 'unas niña feliz', 'is_correct' => false],
                        ],
                        'explanation' => 'Feliz ne prend pas de terminaison féminine séparée, donc « una niña feliz » est correct.',
                    ],
                    [
                        'question' => 'Quelle phrase est correcte ?',
                        'choices' => [
                            ['choice_text' => 'Mis hermanas son altas.', 'is_correct' => true],
                            ['choice_text' => 'Mis hermanas son altos.', 'is_correct' => false],
                            ['choice_text' => 'Mis hermana son altas.', 'is_correct' => false],
                            ['choice_text' => 'Mi hermanas son altas.', 'is_correct' => false],
                        ],
                        'explanation' => 'Hermanas est féminin pluriel, donc altas doit aussi être féminin pluriel.',
                    ],
                    [
                        'question' => 'Qu’arrive-t-il à un adjectif terminé en -e quand le nom devient féminin ?',
                        'choices' => [
                            ['choice_text' => 'Il doit toujours devenir -a.', 'is_correct' => false],
                            ['choice_text' => 'Il doit devenir -o.', 'is_correct' => false],
                            ['choice_text' => 'Il devient automatiquement pluriel.', 'is_correct' => false],
                            ['choice_text' => 'Il reste souvent le même au singulier.', 'is_correct' => true],
                        ],
                        'explanation' => 'Beaucoup d’adjectifs terminés en -e ont la même forme pour les noms masculins et féminins singuliers, comme interesante.',
                    ],
                    [
                        'question' => 'Quelle expression convient à un nom masculin pluriel avec « joven » ?',
                        'choices' => [
                            ['choice_text' => 'los hombres jóven', 'is_correct' => false],
                            ['choice_text' => 'los hombres jóvenes', 'is_correct' => true],
                            ['choice_text' => 'las hombres jóvenes', 'is_correct' => false],
                            ['choice_text' => 'los hombres jóvenas', 'is_correct' => false],
                        ],
                        'explanation' => 'Joven ne change pas selon le genre, mais il forme un pluriel : jóvenes.',
                    ],
                    [
                        'question' => 'Un professeur écrit quatre expressions au tableau. Laquelle est incorrecte ?',
                        'choices' => [
                            ['choice_text' => 'los zapatos negros', 'is_correct' => false],
                            ['choice_text' => 'la camisa blanca', 'is_correct' => false],
                            ['choice_text' => 'las flores rojo', 'is_correct' => true],
                            ['choice_text' => 'el coche rápido', 'is_correct' => false],
                        ],
                        'explanation' => 'Flores est féminin pluriel, donc rojo doit être rojas.',
                    ],
                ],
            ],
            [
                'title' => 'Les adjectifs courants dans l’espagnol de tous les jours',
                'description' => 'Utilisez des adjectifs familiers pour les personnes, les objets, les lieux et les situations quotidiennes plutôt que de les apprendre seulement comme vocabulaire isolé.',
                'duration' => 15,
                'passing_score' => 55,
                'questions' => [
                    [
                        'question' => 'Vous voulez dire « une femme aimable ». Quelle expression est correcte ?',
                        'choices' => [
                            ['choice_text' => 'una mujer amable', 'is_correct' => true],
                            ['choice_text' => 'un mujer amable', 'is_correct' => false],
                            ['choice_text' => 'una mujer amabla', 'is_correct' => false],
                            ['choice_text' => 'una mujer amables', 'is_correct' => false],
                        ],
                        'explanation' => 'Amable a la même forme singulière pour le masculin et le féminin.',
                    ],
                    [
                        'question' => 'Quelle expression signifie « un examen difficile » ?',
                        'choices' => [
                            ['choice_text' => 'una examen difícil', 'is_correct' => false],
                            ['choice_text' => 'un examen difícila', 'is_correct' => false],
                            ['choice_text' => 'un exámenes difíciles', 'is_correct' => false],
                            ['choice_text' => 'un examen difícil', 'is_correct' => true],
                        ],
                        'explanation' => 'Examen est masculin singulier, et difícil est un adjectif singulier qui convient aux deux genres.',
                    ],
                    [
                        'question' => 'Un enfant n’est pas fatigué, mais son père l’est. Quelle phrase correspond à cette idée ?',
                        'choices' => [
                            ['choice_text' => 'El niño no está cansada, pero el padre está cansado.', 'is_correct' => false],
                            ['choice_text' => 'El niño no está cansado, pero el padre está cansado.', 'is_correct' => true],
                            ['choice_text' => 'El niño no están cansado, pero el padre está cansado.', 'is_correct' => false],
                            ['choice_text' => 'El niño no está cansado, pero el padre está cansada.', 'is_correct' => false],
                        ],
                        'explanation' => 'Niño et padre sont masculins singuliers, donc l’adjectif est cansado dans les deux cas.',
                    ],
                    [
                        'question' => 'Quelle description convient à « una ciudad » si la ville est très moderne ?',
                        'choices' => [
                            ['choice_text' => 'una ciudad moderno', 'is_correct' => false],
                            ['choice_text' => 'un ciudad moderna', 'is_correct' => false],
                            ['choice_text' => 'una ciudad moderna', 'is_correct' => true],
                            ['choice_text' => 'una ciudades modernas', 'is_correct' => false],
                        ],
                        'explanation' => 'Ciudad est féminin singulier, et moderna s’accorde avec lui.',
                    ],
                    [
                        'question' => 'Quelle phrase décrit deux voisins sympathiques ?',
                        'choices' => [
                            ['choice_text' => 'Mis vecinos son simpáticas.', 'is_correct' => false],
                            ['choice_text' => 'Mis vecinos son simpáticos.', 'is_correct' => true],
                            ['choice_text' => 'Mi vecinos son simpáticos.', 'is_correct' => false],
                            ['choice_text' => 'Mis vecino es simpático.', 'is_correct' => false],
                        ],
                        'explanation' => 'Vecinos est masculin pluriel, donc simpáticos est la forme qui correspond.',
                    ],
                    [
                        'question' => 'Quel adjectif complète le mieux « La película es ___ » si le film vous a beaucoup fait rire ?',
                        'choices' => [
                            ['choice_text' => 'divertido', 'is_correct' => false],
                            ['choice_text' => 'divertidas', 'is_correct' => false],
                            ['choice_text' => 'divertid', 'is_correct' => false],
                            ['choice_text' => 'divertida', 'is_correct' => true],
                        ],
                        'explanation' => 'Película est féminin singulier, donc l’adjectif est divertida.',
                    ],
                    [
                        'question' => 'Vous avez une chambre propre et deux fenêtres propres. Quelle option est correcte ?',
                        'choices' => [
                            ['choice_text' => 'una habitación limpia y dos ventanas limpias', 'is_correct' => true],
                            ['choice_text' => 'una habitación limpio y dos ventanas limpias', 'is_correct' => false],
                            ['choice_text' => 'una habitación limpia y dos ventanas limpio', 'is_correct' => false],
                            ['choice_text' => 'un habitación limpia y dos ventanas limpias', 'is_correct' => false],
                        ],
                        'explanation' => 'Les deux noms sont féminins, et limpia devient limpias pour le pluriel ventanas.',
                    ],
                    [
                        'question' => 'Quelle phrase semble naturelle ?',
                        'choices' => [
                            ['choice_text' => 'Tengo una mochila pesado.', 'is_correct' => false],
                            ['choice_text' => 'Tengo un mochila pesada.', 'is_correct' => false],
                            ['choice_text' => 'Tengo una mochila pesada.', 'is_correct' => true],
                            ['choice_text' => 'Tengo una mochilas pesada.', 'is_correct' => false],
                        ],
                        'explanation' => 'Mochila est féminin singulier, donc pesada s’accorde avec lui.',
                    ],
                    [
                        'question' => 'Quel adjectif décrit une personne pleine d’énergie ?',
                        'choices' => [
                            ['choice_text' => 'cerrado', 'is_correct' => false],
                            ['choice_text' => 'activo', 'is_correct' => true],
                            ['choice_text' => 'vacío', 'is_correct' => false],
                            ['choice_text' => 'oscuro', 'is_correct' => false],
                        ],
                        'explanation' => 'Activo signifie actif, c’est donc l’adjectif naturel pour quelqu’un qui a beaucoup d’énergie.',
                    ],
                    [
                        'question' => 'Quelle expression décrit correctement un nom féminin avec l’adjectif « serio » ?',
                        'choices' => [
                            ['choice_text' => 'una situación serio', 'is_correct' => false],
                            ['choice_text' => 'un situación seria', 'is_correct' => false],
                            ['choice_text' => 'una situaciones seria', 'is_correct' => false],
                            ['choice_text' => 'una situación seria', 'is_correct' => true],
                        ],
                        'explanation' => 'Situación est féminin singulier, donc serio devient seria.',
                    ],
                ],
            ],
            [
                'title' => 'La position de l’adjectif et son sens',
                'description' => 'Observez comment la position de l’adjectif peut influencer l’emphase ou le sens, tout en vous entraînant sur des phrases espagnoles simples et naturelles.',
                'duration' => 20,
                'passing_score' => 60,
                'questions' => [
                    [
                        'question' => 'Dans l’expression débutante « una casa grande », où apparaît normalement l’adjectif ?',
                        'choices' => [
                            ['choice_text' => 'Avant l’article', 'is_correct' => false],
                            ['choice_text' => 'À l’intérieur du nom', 'is_correct' => false],
                            ['choice_text' => 'Après le nom', 'is_correct' => true],
                            ['choice_text' => 'Seulement à la fin de la phrase', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans les descriptions ordinaires pour débutants, les adjectifs viennent généralement après le nom : « una casa grande ».',
                    ],
                    [
                        'question' => 'Quelle phrase est la façon la plus naturelle et simple de dire « j’ai une voiture rouge » ?',
                        'choices' => [
                            ['choice_text' => 'Tengo un rojo coche.', 'is_correct' => false],
                            ['choice_text' => 'Tengo un coche rojo.', 'is_correct' => true],
                            ['choice_text' => 'Tengo una coche roja.', 'is_correct' => false],
                            ['choice_text' => 'Tengo un coche roja.', 'is_correct' => false],
                        ],
                        'explanation' => 'Une description neutre de base place rojo après coche : « un coche rojo ».',
                    ],
                    [
                        'question' => 'Quelle expression est correcte ?',
                        'choices' => [
                            ['choice_text' => 'una redonda mesa', 'is_correct' => false],
                            ['choice_text' => 'un mesa redonda', 'is_correct' => false],
                            ['choice_text' => 'una mesa redondo', 'is_correct' => false],
                            ['choice_text' => 'una mesa redonda', 'is_correct' => true],
                        ],
                        'explanation' => 'L’ordre naturel de base est nom + adjectif, et redonda s’accorde avec le féminin singulier mesa.',
                    ],
                    [
                        'question' => 'Un apprenant dit « un viejo amigo ». Dans cette expression, que peut suggérer la position de « viejo » ?',
                        'choices' => [
                            ['choice_text' => 'Elle peut décrire un ami de longue date ou familier, selon le contexte.', 'is_correct' => true],
                            ['choice_text' => 'Elle signifie toujours que l’ami est âgé.', 'is_correct' => false],
                            ['choice_text' => 'Elle transforme amigo en verbe.', 'is_correct' => false],
                            ['choice_text' => 'Elle met la phrase au pluriel.', 'is_correct' => false],
                        ],
                        'explanation' => 'Certains adjectifs courants peuvent changer de nuance quand ils sont placés avant le nom. « Un viejo amigo » signifie souvent un ami de longue date.',
                    ],
                    [
                        'question' => 'Quelle option est une description simple d’un petit chien ?',
                        'choices' => [
                            ['choice_text' => 'una perro pequeña', 'is_correct' => false],
                            ['choice_text' => 'un perro pequeño', 'is_correct' => true],
                            ['choice_text' => 'un pequeño perroes', 'is_correct' => false],
                            ['choice_text' => 'un perro pequeña', 'is_correct' => false],
                        ],
                        'explanation' => 'Perro est masculin singulier et pequeño s’accorde avec lui. L’ordre neutre de base est nom + adjectif.',
                    ],
                    [
                        'question' => 'Quelle expression utilise naturellement la position de l’adjectif pour une description physique simple ?',
                        'choices' => [
                            ['choice_text' => 'blanca una camiseta', 'is_correct' => false],
                            ['choice_text' => 'una camiseta blanco', 'is_correct' => false],
                            ['choice_text' => 'una camiseta blanca', 'is_correct' => true],
                            ['choice_text' => 'un camiseta blanca', 'is_correct' => false],
                        ],
                        'explanation' => 'Pour une description de base, « camiseta » vient avant « blanca » : « una camiseta blanca ».',
                    ],
                    [
                        'question' => 'Quelle affirmation sur la position de l’adjectif est la plus sûre pour un débutant ?',
                        'choices' => [
                            ['choice_text' => 'Les adjectifs doivent toujours précéder le nom.', 'is_correct' => false],
                            ['choice_text' => 'Les adjectifs ne peuvent jamais précéder le nom.', 'is_correct' => false],
                            ['choice_text' => 'La position de l’adjectif n’affecte jamais le sens ni l’emphase.', 'is_correct' => false],
                            ['choice_text' => 'Les adjectifs viennent souvent après le nom dans les descriptions simples, bien que certains puissent le précéder.', 'is_correct' => true],
                        ],
                        'explanation' => 'Le placement après le nom est une référence utile pour débutant, mais l’espagnol utilise aussi des adjectifs antéposés pour certains schémas courants et nuances de sens.',
                    ],
                    [
                        'question' => 'Quelle phrase est correctement formée ?',
                        'choices' => [
                            ['choice_text' => 'Compré una camisa nueva.', 'is_correct' => true],
                            ['choice_text' => 'Compré un camisa nuevo.', 'is_correct' => false],
                            ['choice_text' => 'Compré una camisa nuevo.', 'is_correct' => false],
                            ['choice_text' => 'Compré unas camisa nueva.', 'is_correct' => false],
                        ],
                        'explanation' => 'Camisa est féminin singulier, donc « una camisa nueva » est l’expression naturelle.',
                    ],
                    [
                        'question' => 'Un ami dit « una buena idea ». Qu’est-ce que la position de l’adjectif vous apprend ?',
                        'choices' => [
                            ['choice_text' => '« Buena » est placé avant le nom dans une expression courante.', 'is_correct' => true],
                            ['choice_text' => '« Buena » doit toujours précéder tous les noms espagnols.', 'is_correct' => false],
                            ['choice_text' => '« Idea » est masculin.', 'is_correct' => false],
                            ['choice_text' => '« Buena » est une forme plurielle.', 'is_correct' => false],
                        ],
                        'explanation' => 'Buena est un adjectif courant qui peut naturellement apparaître avant un nom dans des expressions comme « una buena idea ».',
                    ],
                    [
                        'question' => 'Quelle phrase utilise naturellement un adjectif antéposé courant ?',
                        'choices' => [
                            ['choice_text' => 'Es un problema gran.', 'is_correct' => false],
                            ['choice_text' => 'Es una gran problema.', 'is_correct' => false],
                            ['choice_text' => 'Es un gran problema.', 'is_correct' => true],
                            ['choice_text' => 'Es un grande problema.', 'is_correct' => false],
                        ],
                        'explanation' => 'Gran est une forme raccourcie courante de grande devant un nom singulier : « un gran problema ».',
                    ],
                ],
            ],
            [
                'title' => 'Formes d’adjectifs particulières et exceptions utiles',
                'description' => 'Apprenez des formes adaptées aux débutants comme bueno, malo, grande, et des adjectifs qui ne changent pas selon le genre.',
                'duration' => 25,
                'passing_score' => 65,
                'questions' => [
                    [
                        'question' => 'Quelle expression est correcte ?',
                        'choices' => [
                            ['choice_text' => 'un bueno día', 'is_correct' => false],
                            ['choice_text' => 'una buen día', 'is_correct' => false],
                            ['choice_text' => 'un buena día', 'is_correct' => false],
                            ['choice_text' => 'un buen día', 'is_correct' => true],
                        ],
                        'explanation' => 'Bueno devient buen devant un nom masculin singulier : « un buen día ».',
                    ],
                    [
                        'question' => 'Quelle expression est correcte pour « une bonne femme » ?',
                        'choices' => [
                            ['choice_text' => 'una buen mujer', 'is_correct' => false],
                            ['choice_text' => 'una buena mujer', 'is_correct' => true],
                            ['choice_text' => 'un buena mujer', 'is_correct' => false],
                            ['choice_text' => 'una bueno mujer', 'is_correct' => false],
                        ],
                        'explanation' => 'Devant un nom féminin singulier, bueno prend la forme féminine complète buena.',
                    ],
                    [
                        'question' => 'Quelle expression est correcte ?',
                        'choices' => [
                            ['choice_text' => 'un malo día', 'is_correct' => false],
                            ['choice_text' => 'una mal día', 'is_correct' => false],
                            ['choice_text' => 'un mal día', 'is_correct' => true],
                            ['choice_text' => 'un mala día', 'is_correct' => false],
                        ],
                        'explanation' => 'Malo devient mal devant un nom masculin singulier : « un mal día ».',
                    ],
                    [
                        'question' => 'Quelle phrase utilise correctement grande devant un nom singulier ?',
                        'choices' => [
                            ['choice_text' => 'Es una gran ciudad.', 'is_correct' => true],
                            ['choice_text' => 'Es una grande ciudad.', 'is_correct' => false],
                            ['choice_text' => 'Es un gran ciudad.', 'is_correct' => false],
                            ['choice_text' => 'Es una grandes ciudad.', 'is_correct' => false],
                        ],
                        'explanation' => 'Grande se raccourcit souvent en gran devant un nom singulier : « una gran ciudad ».',
                    ],
                    [
                        'question' => 'Quelle expression est correcte si vous voulez dire « une grande maison » ?',
                        'choices' => [
                            ['choice_text' => 'una grande casa', 'is_correct' => false],
                            ['choice_text' => 'un casa grande', 'is_correct' => false],
                            ['choice_text' => 'una casa grande', 'is_correct' => true],
                            ['choice_text' => 'una casa grandes', 'is_correct' => false],
                        ],
                        'explanation' => 'Quand grande vient après le nom dans cette description simple, il garde sa forme complète : « una casa grande ».',
                    ],
                    [
                        'question' => 'Quel adjectif a la même forme pour les noms masculins et féminins singuliers ?',
                        'choices' => [
                            ['choice_text' => 'bueno', 'is_correct' => false],
                            ['choice_text' => 'fácil', 'is_correct' => true],
                            ['choice_text' => 'blanco', 'is_correct' => false],
                            ['choice_text' => 'pequeño', 'is_correct' => false],
                        ],
                        'explanation' => 'Fácil reste identique au singulier : un ejercicio fácil et una tarea fácil.',
                    ],
                    [
                        'question' => 'Quelle phrase est correcte ?',
                        'choices' => [
                            ['choice_text' => 'La tarea es fácila.', 'is_correct' => false],
                            ['choice_text' => 'El tarea es fácil.', 'is_correct' => false],
                            ['choice_text' => 'La tareas es fácil.', 'is_correct' => false],
                            ['choice_text' => 'La tarea es fácil.', 'is_correct' => true],
                        ],
                        'explanation' => 'Tarea est féminin singulier, tandis que fácil a la même forme pour les deux genres au singulier.',
                    ],
                    [
                        'question' => 'Pourquoi dit-on « un buen profesor » plutôt que « un bueno profesor » ?',
                        'choices' => [
                            ['choice_text' => 'Bueno se raccourcit en buen devant un nom masculin singulier.', 'is_correct' => true],
                            ['choice_text' => 'Bueno est féminin dans cette expression.', 'is_correct' => false],
                            ['choice_text' => 'Profesor est pluriel.', 'is_correct' => false],
                            ['choice_text' => 'Buen est la forme plurielle de bueno.', 'is_correct' => false],
                        ],
                        'explanation' => 'Bueno devient habituellement buen quand il précède un nom masculin singulier.',
                    ],
                    [
                        'question' => 'Un apprenant veut dire « une mauvaise idée ». Quelle expression fonctionne ?',
                        'choices' => [
                            ['choice_text' => 'una mala idea', 'is_correct' => true],
                            ['choice_text' => 'una mal idea', 'is_correct' => false],
                            ['choice_text' => 'un mala idea', 'is_correct' => false],
                            ['choice_text' => 'una malo idea', 'is_correct' => false],
                        ],
                        'explanation' => 'Malo devient mala pour un nom féminin singulier comme idea.',
                    ],
                    [
                        'question' => 'Quelle phrase est naturelle ?',
                        'choices' => [
                            ['choice_text' => 'Tenemos buen amigos.', 'is_correct' => false],
                            ['choice_text' => 'Tenemos buenas amigos.', 'is_correct' => false],
                            ['choice_text' => 'Tenemos bueno amigos.', 'is_correct' => false],
                            ['choice_text' => 'Tenemos buenos amigos.', 'is_correct' => true],
                        ],
                        'explanation' => 'Devant un nom masculin pluriel, bueno garde sa forme plurielle buenos.',
                    ],
                    [
                        'question' => 'Quelle expression est correcte pour « de bonnes amies » quand le groupe est entièrement féminin ?',
                        'choices' => [
                            ['choice_text' => 'buen amigas', 'is_correct' => false],
                            ['choice_text' => 'buenos amigas', 'is_correct' => false],
                            ['choice_text' => 'buenas amigas', 'is_correct' => true],
                            ['choice_text' => 'bueno amigas', 'is_correct' => false],
                        ],
                        'explanation' => 'Amigas est féminin pluriel, donc bueno devient buenas.',
                    ],
                    [
                        'question' => 'Quelle paire montre correctement la différence entre « grand » avant un nom et l’adjectif complet après ?',
                        'choices' => [
                            ['choice_text' => 'un grande libro / un libro gran', 'is_correct' => false],
                            ['choice_text' => 'un gran libro / un libro grande', 'is_correct' => true],
                            ['choice_text' => 'una gran libro / una libro grande', 'is_correct' => false],
                            ['choice_text' => 'un gran libro / una libro grande', 'is_correct' => false],
                        ],
                        'explanation' => 'Grande peut se raccourcir en gran devant un nom singulier, tandis qu’après le nom il reste grande.',
                    ],
                    [
                        'question' => 'Quelle phrase utilise correctement un adjectif invariable en genre ?',
                        'choices' => [
                            ['choice_text' => 'El examen es difícil y la tarea también es difícil.', 'is_correct' => true],
                            ['choice_text' => 'El examen es difícila y la tarea también es difícil.', 'is_correct' => false],
                            ['choice_text' => 'El examen es difícil y la tarea también es difícila.', 'is_correct' => false],
                            ['choice_text' => 'El examen es difíciles y la tarea también es difícil.', 'is_correct' => false],
                        ],
                        'explanation' => 'Difícil garde la même forme singulière pour les noms masculins et féminins.',
                    ],
                    [
                        'question' => 'Quelle option montre un accord d’adjectif correct après le passage du nom au pluriel ?',
                        'choices' => [
                            ['choice_text' => 'una buena idea → unas bueno ideas', 'is_correct' => false],
                            ['choice_text' => 'una buena idea → unos buenas ideas', 'is_correct' => false],
                            ['choice_text' => 'una buena idea → unas buenas ideas', 'is_correct' => true],
                            ['choice_text' => 'una buena idea → unas buena idea', 'is_correct' => false],
                        ],
                        'explanation' => 'Le nom et l’adjectif passent tous deux au féminin pluriel : buena → buenas et idea → ideas.',
                    ],
                    [
                        'question' => 'Un débutant voit « un gran restaurante ». Que doit-il comprendre ?',
                        'choices' => [
                            ['choice_text' => 'Gran signifie que le restaurant est au pluriel.', 'is_correct' => false],
                            ['choice_text' => 'Gran est la forme féminine de grande.', 'is_correct' => false],
                            ['choice_text' => 'Restaurante est féminin parce que gran se termine par une consonne.', 'is_correct' => false],
                            ['choice_text' => 'Gran est une forme raccourcie de grande utilisée devant ce nom singulier.', 'is_correct' => true],
                        ],
                        'explanation' => 'Devant un nom singulier, grande se raccourcit couramment en gran dans cette position.',
                    ],
                ],
            ],
            [
                'title' => 'Décrire des personnes, des lieux et des choses',
                'description' => 'Utilisez l’accord des adjectifs dans de courtes descriptions réelles impliquant des personnes, des maisons, le temps, la nourriture, les commerces et des objets quotidiens.',
                'duration' => 25,
                'passing_score' => 65,
                'questions' => [
                    [
                        'question' => 'Votre amie Marta est très organisée. Quelle phrase convient ?',
                        'choices' => [
                            ['choice_text' => 'Marta es muy organizado.', 'is_correct' => false],
                            ['choice_text' => 'Marta son muy organizada.', 'is_correct' => false],
                            ['choice_text' => 'Marta es muy organizada.', 'is_correct' => true],
                            ['choice_text' => 'Marta es muy organizadas.', 'is_correct' => false],
                        ],
                        'explanation' => 'Marta est féminin singulier, donc organizada est la forme correcte.',
                    ],
                    [
                        'question' => 'Une famille a deux enfants calmes. Quelle expression est correcte ?',
                        'choices' => [
                            ['choice_text' => 'dos niños tranquilos', 'is_correct' => true],
                            ['choice_text' => 'dos niños tranquila', 'is_correct' => false],
                            ['choice_text' => 'dos niñas tranquilos', 'is_correct' => false],
                            ['choice_text' => 'dos niño tranquilos', 'is_correct' => false],
                        ],
                        'explanation' => 'Niños est masculin pluriel, donc tranquilos s’accorde avec lui.',
                    ],
                    [
                        'question' => 'Quelle phrase décrit correctement un après-midi chaud ?',
                        'choices' => [
                            ['choice_text' => 'La tarde es cálido.', 'is_correct' => false],
                            ['choice_text' => 'El tarde es cálida.', 'is_correct' => false],
                            ['choice_text' => 'La tarde son cálida.', 'is_correct' => false],
                            ['choice_text' => 'La tarde es cálida.', 'is_correct' => true],
                        ],
                        'explanation' => 'Tarde est féminin singulier, donc cálida s’accorde avec lui.',
                    ],
                    [
                        'question' => 'Quelle expression utiliseriez-vous pour deux restaurants chers ?',
                        'choices' => [
                            ['choice_text' => 'dos restaurantes caras', 'is_correct' => false],
                            ['choice_text' => 'dos restaurantes caros', 'is_correct' => true],
                            ['choice_text' => 'dos restaurante caros', 'is_correct' => false],
                            ['choice_text' => 'dos restaurantes caro', 'is_correct' => false],
                        ],
                        'explanation' => 'Restaurantes est masculin pluriel, donc caro devient caros.',
                    ],
                    [
                        'question' => 'Un professeur décrit un livre comme très intéressant. Quelle phrase est correcte ?',
                        'choices' => [
                            ['choice_text' => 'El libro es muy interesanta.', 'is_correct' => false],
                            ['choice_text' => 'El libro es muy interesante.', 'is_correct' => true],
                            ['choice_text' => 'La libro es muy interesante.', 'is_correct' => false],
                            ['choice_text' => 'El libro son muy interesante.', 'is_correct' => false],
                        ],
                        'explanation' => 'Interesante garde la même forme singulière pour le masculin et le féminin.',
                    ],
                    [
                        'question' => 'Quelle option décrit une cuisine propre et une salle de bain propre ?',
                        'choices' => [
                            ['choice_text' => 'una cocina limpio y un baño limpia', 'is_correct' => false],
                            ['choice_text' => 'un cocina limpia y una baño limpio', 'is_correct' => false],
                            ['choice_text' => 'una cocina limpias y un baño limpios', 'is_correct' => false],
                            ['choice_text' => 'una cocina limpia y un baño limpio', 'is_correct' => true],
                        ],
                        'explanation' => 'Cocina est féminin et baño est masculin, donc limpia et limpio correspondent chacun à leur nom.',
                    ],
                    [
                        'question' => 'Vous décrivez une plage de sable blanc. Quelle expression est correcte ?',
                        'choices' => [
                            ['choice_text' => 'una playa de arena blanco', 'is_correct' => false],
                            ['choice_text' => 'un playa de arena blanca', 'is_correct' => false],
                            ['choice_text' => 'una playa de arena blanca', 'is_correct' => true],
                            ['choice_text' => 'una playa de arena blancas', 'is_correct' => false],
                        ],
                        'explanation' => 'Arena est féminin singulier, donc blanca s’accorde avec lui.',
                    ],
                    [
                        'question' => 'Quelle phrase décrit correctement deux petites maisons jaunes ?',
                        'choices' => [
                            ['choice_text' => 'dos casas pequeñas y amarillas', 'is_correct' => true],
                            ['choice_text' => 'dos casas pequeños y amarillos', 'is_correct' => false],
                            ['choice_text' => 'dos casa pequeñas y amarillas', 'is_correct' => false],
                            ['choice_text' => 'dos casas pequeña y amarilla', 'is_correct' => false],
                        ],
                        'explanation' => 'Casas est féminin pluriel, donc les deux adjectifs doivent être au féminin pluriel : pequeñas et amarillas.',
                    ],
                    [
                        'question' => 'Quelle phrase est correcte à propos d’un restaurant très fréquenté ?',
                        'choices' => [
                            ['choice_text' => 'La restaurante está llena.', 'is_correct' => false],
                            ['choice_text' => 'El restaurante están lleno.', 'is_correct' => false],
                            ['choice_text' => 'El restaurante está llena.', 'is_correct' => false],
                            ['choice_text' => 'El restaurante está lleno.', 'is_correct' => true],
                        ],
                        'explanation' => 'Restaurante est masculin singulier, donc lleno s’accorde avec lui.',
                    ],
                    [
                        'question' => 'Une élève décrit ses deux sœurs comme intelligentes. Quelle phrase fonctionne ?',
                        'choices' => [
                            ['choice_text' => 'Mis hermanas son inteligentas.', 'is_correct' => false],
                            ['choice_text' => 'Mis hermanas son inteligentes.', 'is_correct' => true],
                            ['choice_text' => 'Mi hermanas son inteligentes.', 'is_correct' => false],
                            ['choice_text' => 'Mis hermanas es inteligentes.', 'is_correct' => false],
                        ],
                        'explanation' => 'Inteligente garde la même forme pour le masculin et le féminin, mais passe au pluriel : inteligentes.',
                    ],
                    [
                        'question' => 'Quelle expression décrit correctement une pomme fraîche et deux oranges fraîches ?',
                        'choices' => [
                            ['choice_text' => 'una manzana fresca y dos naranjas frescas', 'is_correct' => true],
                            ['choice_text' => 'una manzana fresco y dos naranjas frescas', 'is_correct' => false],
                            ['choice_text' => 'un manzana fresca y dos naranja frescas', 'is_correct' => false],
                            ['choice_text' => 'una manzana fresca y dos naranjas fresco', 'is_correct' => false],
                        ],
                        'explanation' => 'Les deux noms sont féminins ; fresca passe au pluriel pour naranjas : frescas.',
                    ],
                    [
                        'question' => 'Quelle description utiliseriez-vous pour une longue rue ?',
                        'choices' => [
                            ['choice_text' => 'una calle largo', 'is_correct' => false],
                            ['choice_text' => 'un calle larga', 'is_correct' => false],
                            ['choice_text' => 'una calle larga', 'is_correct' => true],
                            ['choice_text' => 'una calles largas', 'is_correct' => false],
                        ],
                        'explanation' => 'Calle est féminin singulier, donc larga est la forme qui s’accorde correctement.',
                    ],
                    [
                        'question' => 'Un responsable décrit deux nouveaux employés, un homme et une femme. Quelle expression mixte est naturelle ?',
                        'choices' => [
                            ['choice_text' => 'dos empleados nuevas', 'is_correct' => false],
                            ['choice_text' => 'dos empleadas nuevos', 'is_correct' => false],
                            ['choice_text' => 'dos empleados nuevos', 'is_correct' => true],
                            ['choice_text' => 'dos empleado nueva', 'is_correct' => false],
                        ],
                        'explanation' => 'Pour un groupe mixte, la forme plurielle traditionnelle utilise le nom et l’adjectif au masculin pluriel : empleados nuevos.',
                    ],
                ],
            ],
            [
                'title' => 'Révision des adjectifs et choix de la vie réelle',
                'description' => 'Réunissez l’accord, la position, les formes d’adjectifs courantes et les descriptions pratiques dans une révision finale adaptée aux débutants.',
                'duration' => 25,
                'passing_score' => 65,
                'questions' => [
                    [
                        'question' => 'Vous choisissez entre deux chemises : une blanche et une noire. Quelle phrase est correcte ?',
                        'choices' => [
                            ['choice_text' => 'Tengo un camisa blanco y una camisa negra.', 'is_correct' => false],
                            ['choice_text' => 'Tengo una camisa blanca y una camisa negra.', 'is_correct' => true],
                            ['choice_text' => 'Tengo una camisa blanco y una camisa negro.', 'is_correct' => false],
                            ['choice_text' => 'Tengo unas camisa blancas y una camisa negra.', 'is_correct' => false],
                        ],
                        'explanation' => 'Camisa est féminin singulier dans les deux expressions, donc blanca et negra s’accordent avec lui.',
                    ],
                    [
                        'question' => 'Quelle phrase utiliseriez-vous à propos de deux enfants heureux ?',
                        'choices' => [
                            ['choice_text' => 'Los niños están contentas.', 'is_correct' => false],
                            ['choice_text' => 'Las niños están contentos.', 'is_correct' => false],
                            ['choice_text' => 'Los niños están contentos.', 'is_correct' => true],
                            ['choice_text' => 'Los niño están contentos.', 'is_correct' => false],
                        ],
                        'explanation' => 'Niños est masculin pluriel, donc contentos est la forme d’adjectif qui correspond.',
                    ],
                    [
                        'question' => 'Quelle expression est correcte pour « une question facile » ?',
                        'choices' => [
                            ['choice_text' => 'una pregunta fácila', 'is_correct' => false],
                            ['choice_text' => 'un pregunta fácil', 'is_correct' => false],
                            ['choice_text' => 'una preguntas fáciles', 'is_correct' => false],
                            ['choice_text' => 'una pregunta fácil', 'is_correct' => true],
                        ],
                        'explanation' => 'Pregunta est féminin singulier, tandis que fácil garde la même forme singulière pour les deux genres.',
                    ],
                    [
                        'question' => 'Un serveur dit qu’il y a deux soupes chaudes. Quelle expression est correcte ?',
                        'choices' => [
                            ['choice_text' => 'dos sopas calientes', 'is_correct' => true],
                            ['choice_text' => 'dos sopas caliente', 'is_correct' => false],
                            ['choice_text' => 'dos sopa calientes', 'is_correct' => false],
                            ['choice_text' => 'dos sopas calienteses', 'is_correct' => false],
                        ],
                        'explanation' => 'Sopas est féminin pluriel, donc caliente devient calientes.',
                    ],
                    [
                        'question' => 'Quelle phrase utilise correctement un adjectif raccourci devant un nom ?',
                        'choices' => [
                            ['choice_text' => 'Mi hermano es un bueno estudiante.', 'is_correct' => false],
                            ['choice_text' => 'Mi hermano es una buen estudiante.', 'is_correct' => false],
                            ['choice_text' => 'Mi hermano es un buena estudiante.', 'is_correct' => false],
                            ['choice_text' => 'Mi hermano es un buen estudiante.', 'is_correct' => true],
                        ],
                        'explanation' => 'Bueno devient buen devant un nom masculin singulier comme estudiante dans cette expression.',
                    ],
                    [
                        'question' => 'Quelle phrase utilise la position de l’adjectif dans une expression courante ?',
                        'choices' => [
                            ['choice_text' => 'Tuvimos una comida buena.', 'is_correct' => false],
                            ['choice_text' => 'Tuvimos una buena comida.', 'is_correct' => true],
                            ['choice_text' => 'Tuvimos un buena comida.', 'is_correct' => false],
                            ['choice_text' => 'Tuvimos una bueno comida.', 'is_correct' => false],
                        ],
                        'explanation' => 'Buena se place couramment avant le nom dans des expressions comme « una buena comida ».',
                    ],
                    [
                        'question' => 'Un élève doit décrire un grand parc. Quelle expression est correcte ?',
                        'choices' => [
                            ['choice_text' => 'una parque grande', 'is_correct' => false],
                            ['choice_text' => 'un parque grandes', 'is_correct' => false],
                            ['choice_text' => 'un parque grande', 'is_correct' => true],
                            ['choice_text' => 'un parque granda', 'is_correct' => false],
                        ],
                        'explanation' => 'Parque est masculin singulier, et grande reste grande après le nom.',
                    ],
                    [
                        'question' => 'Quelle option décrit correctement trois livres intéressants ?',
                        'choices' => [
                            ['choice_text' => 'tres libros interesantes', 'is_correct' => true],
                            ['choice_text' => 'tres libros interesante', 'is_correct' => false],
                            ['choice_text' => 'tres libro interesantes', 'is_correct' => false],
                            ['choice_text' => 'tres libras interesantes', 'is_correct' => false],
                        ],
                        'explanation' => 'Libros est masculin pluriel et interesante passe au pluriel : interesantes.',
                    ],
                    [
                        'question' => 'Quelle affirmation sur « feliz » et « felices » est vraie ?',
                        'choices' => [
                            ['choice_text' => 'Feliz est singulier ; felices est pluriel pour les deux genres.', 'is_correct' => true],
                            ['choice_text' => 'Feliz est masculin et felices est féminin.', 'is_correct' => false],
                            ['choice_text' => 'Feliz est féminin singulier et felices est uniquement masculin pluriel.', 'is_correct' => false],
                            ['choice_text' => 'Feliz et felices ont des sens différents.', 'is_correct' => false],
                        ],
                        'explanation' => 'Feliz ne change pas selon le genre, mais il prend -es au pluriel : feliz → felices.',
                    ],
                    [
                        'question' => 'Quelle phrase décrit correctement une bonne idée et une mauvaise idée ?',
                        'choices' => [
                            ['choice_text' => 'Es un buen idea, no una mal idea.', 'is_correct' => false],
                            ['choice_text' => 'Es una buena idea, no una mala idea.', 'is_correct' => true],
                            ['choice_text' => 'Es una bueno idea, no una malo idea.', 'is_correct' => false],
                            ['choice_text' => 'Es una buenas idea, no una malas idea.', 'is_correct' => false],
                        ],
                        'explanation' => 'Idea est féminin singulier, donc bueno et malo deviennent buena et mala.',
                    ],
                    [
                        'question' => 'Une famille a une nouvelle maison, une nouvelle voiture et de nouveaux vélos. Quelle expression garde l’accord cohérent ?',
                        'choices' => [
                            ['choice_text' => 'una casa nuevo, un coche nueva y unas bicicletas nuevo', 'is_correct' => false],
                            ['choice_text' => 'un casa nueva, un coche nuevo y unas bicicletas nuevas', 'is_correct' => false],
                            ['choice_text' => 'una casa nuevas, un coche nuevos y unas bicicletas nueva', 'is_correct' => false],
                            ['choice_text' => 'una casa nueva, un coche nuevo y unas bicicletas nuevas', 'is_correct' => true],
                        ],
                        'explanation' => 'Nueva correspond au féminin singulier casa, nuevo au masculin singulier coche, et nuevas au féminin pluriel bicicletas.',
                    ],
                    [
                        'question' => 'Quel choix explique le mieux pourquoi « dos mujeres inteligentes » est correct ?',
                        'choices' => [
                            ['choice_text' => 'Inteligentes est uniquement masculin pluriel.', 'is_correct' => false],
                            ['choice_text' => 'Mujeres est masculin pluriel.', 'is_correct' => false],
                            ['choice_text' => 'Mujeres est féminin pluriel, et inteligentes est un adjectif pluriel qui ne change pas selon le genre.', 'is_correct' => true],
                            ['choice_text' => 'L’adjectif n’a aucun lien avec le nom.', 'is_correct' => false],
                        ],
                        'explanation' => 'Inteligente a une seule forme non marquée par le genre, mais change selon le nombre, donc le pluriel mujeres prend inteligentes.',
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
