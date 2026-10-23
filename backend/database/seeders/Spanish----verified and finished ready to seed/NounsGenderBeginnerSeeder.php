<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class NounsGenderBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'nouns-gender')->firstOrFail();

        $quizzes = [
            [
                'title' => 'Les bases des noms et du genre en espagnol',
                'description' => 'Apprenez comment les noms espagnols sont classés selon leur genre grammatical et entraînez-vous avec des noms masculins et féminins courants.',
                'duration' => 15,
                'passing_score' => 50,
                'questions' => [
                    [
                        'question' => 'Quel nom est masculin ?',
                        'choices' => [
                            ['choice_text' => 'libro', 'is_correct' => true],
                            ['choice_text' => 'mesa', 'is_correct' => false],
                            ['choice_text' => 'casa', 'is_correct' => false],
                            ['choice_text' => 'ventana', 'is_correct' => false],
                        ],
                        'explanation' => '« Libro » est masculin, donc on dit normalement « el libro ». Les trois autres noms sont féminins.',
                    ],
                    [
                        'question' => 'Une débutante veut dire « la chaise ». Quelle expression est correcte ?',
                        'choices' => [
                            ['choice_text' => 'el silla', 'is_correct' => false],
                            ['choice_text' => 'la silla', 'is_correct' => true],
                            ['choice_text' => 'un silla', 'is_correct' => false],
                            ['choice_text' => 'los silla', 'is_correct' => false],
                        ],
                        'explanation' => '« Silla » est un nom féminin singulier, donc il prend « la » : « la silla ».',
                    ],
                    [
                        'question' => 'Quelle paire associe correctement le nom à son genre habituel ?',
                        'choices' => [
                            ['choice_text' => 'la coche — féminin', 'is_correct' => false],
                            ['choice_text' => 'el mesa — masculin', 'is_correct' => false],
                            ['choice_text' => 'la libro — féminin', 'is_correct' => false],
                            ['choice_text' => 'el coche — masculin', 'is_correct' => true],
                        ],
                        'explanation' => '« Coche » est masculin, donc « el coche » est la combinaison normale.',
                    ],
                    [
                        'question' => 'Quelle terminaison est souvent un indice utile qu’un nom est féminin ?',
                        'choices' => [
                            ['choice_text' => '-o', 'is_correct' => false],
                            ['choice_text' => '-or', 'is_correct' => false],
                            ['choice_text' => '-a', 'is_correct' => true],
                            ['choice_text' => '-ma', 'is_correct' => false],
                        ],
                        'explanation' => 'Beaucoup de noms féminins se terminent en « -a », comme « casa », « mesa » et « ventana ». C’est un indice, pas une règle parfaite.',
                    ],
                    [
                        'question' => 'Quel nom est masculin même s’il se termine en « -a » ?',
                        'choices' => [
                            ['choice_text' => 'carta', 'is_correct' => false],
                            ['choice_text' => 'ventana', 'is_correct' => false],
                            ['choice_text' => 'mapa', 'is_correct' => true],
                            ['choice_text' => 'camisa', 'is_correct' => false],
                        ],
                        'explanation' => '« Mapa » est masculin : « el mapa ». C’est une exception courante au schéma simple « -a égale féminin ».',
                    ],
                    [
                        'question' => 'Quel nom est féminin bien qu’il se termine en « -o » ?',
                        'choices' => [
                            ['choice_text' => 'libro', 'is_correct' => false],
                            ['choice_text' => 'mano', 'is_correct' => true],
                            ['choice_text' => 'gato', 'is_correct' => false],
                            ['choice_text' => 'zapato', 'is_correct' => false],
                        ],
                        'explanation' => '« Mano » est féminin : « la mano ». Voilà pourquoi les terminaisons doivent être traitées comme des indices, pas des règles absolues.',
                    ],
                    [
                        'question' => 'Quelle phrase utilise correctement le genre du nom ?',
                        'choices' => [
                            ['choice_text' => 'La problema es difícil.', 'is_correct' => false],
                            ['choice_text' => 'Una problema es difícil.', 'is_correct' => false],
                            ['choice_text' => 'Los problema es difícil.', 'is_correct' => false],
                            ['choice_text' => 'El problema es difícil.', 'is_correct' => true],
                        ],
                        'explanation' => '« Problema » est masculin malgré sa terminaison, donc « el problema » est correct.',
                    ],
                    [
                        'question' => 'Quel nom est féminin ?',
                        'choices' => [
                            ['choice_text' => 'flor', 'is_correct' => true],
                            ['choice_text' => 'día', 'is_correct' => false],
                            ['choice_text' => 'idioma', 'is_correct' => false],
                            ['choice_text' => 'papel', 'is_correct' => false],
                        ],
                        'explanation' => '« Flor » est féminin : « la flor ». « Día », « idioma » et « papel » sont masculins.',
                    ],
                    [
                        'question' => 'Quelle est l’habitude la plus sûre pour apprendre le genre des noms espagnols ?',
                        'choices' => [
                            ['choice_text' => 'Toujours deviner « la » en cas de doute.', 'is_correct' => false],
                            ['choice_text' => 'Toujours deviner « el » en cas de doute.', 'is_correct' => false],
                            ['choice_text' => 'Mémoriser le nom avec son article.', 'is_correct' => true],
                            ['choice_text' => 'Ignorer les articles jusqu’au niveau avancé.', 'is_correct' => false],
                        ],
                        'explanation' => 'Apprendre « el libro » ou « la mesa » comme une seule unité rend le nom et son genre plus faciles à retenir.',
                    ],
                    [
                        'question' => 'Quelle expression est correcte ?',
                        'choices' => [
                            ['choice_text' => 'el flor', 'is_correct' => false],
                            ['choice_text' => 'la flor', 'is_correct' => true],
                            ['choice_text' => 'un flor', 'is_correct' => false],
                            ['choice_text' => 'los flor', 'is_correct' => false],
                        ],
                        'explanation' => '« Flor » est féminin, donc l’article défini est « la ».',
                    ],
                    [
                        'question' => 'Une élève écrit « el casa ». Que faut-il changer ?',
                        'choices' => [
                            ['choice_text' => 'Changer « casa » en « caso ».', 'is_correct' => false],
                            ['choice_text' => 'Changer « el » en « los ».', 'is_correct' => false],
                            ['choice_text' => 'Changer « casa » en « casas ».', 'is_correct' => false],
                            ['choice_text' => 'Changer « el » en « la ».', 'is_correct' => true],
                        ],
                        'explanation' => '« Casa » est féminin singulier, donc l’expression correcte est « la casa ».',
                    ],
                    [
                        'question' => 'Quelle affirmation est la plus exacte ?',
                        'choices' => [
                            ['choice_text' => 'Les terminaisons des noms espagnols donnent des indices utiles, mais il existe des exceptions.', 'is_correct' => true],
                            ['choice_text' => 'Tout nom terminé en « -a » est féminin.', 'is_correct' => false],
                            ['choice_text' => 'Tout nom terminé en « -o » est masculin.', 'is_correct' => false],
                            ['choice_text' => 'Le genre d’un nom peut toujours se deviner d’après sa prononciation.', 'is_correct' => false],
                        ],
                        'explanation' => 'Les schémas courants aident les débutants, mais des mots comme « el mapa » et « la mano » montrent qu’il faut aussi apprendre les exceptions.',
                    ],
                ],
            ],
            [
                'title' => 'Schémas et exceptions de genre courants',
                'description' => 'Repérez des schémas de terminaison utiles tout en vous familiarisant avec des noms courants qui ne suivent pas la règle la plus simple.',
                'duration' => 20,
                'passing_score' => 60,
                'questions' => [
                    [
                        'question' => 'Quel nom correspond au schéma masculin courant en « -o » ?',
                        'choices' => [
                            ['choice_text' => 'libro', 'is_correct' => true],
                            ['choice_text' => 'nación', 'is_correct' => false],
                            ['choice_text' => 'pared', 'is_correct' => false],
                            ['choice_text' => 'flor', 'is_correct' => false],
                        ],
                        'explanation' => '« Libro » est masculin et se termine en « -o », un schéma masculin très courant.',
                    ],
                    [
                        'question' => 'Quel nom est féminin ?',
                        'choices' => [
                            ['choice_text' => 'cuaderno', 'is_correct' => false],
                            ['choice_text' => 'ventana', 'is_correct' => true],
                            ['choice_text' => 'zapato', 'is_correct' => false],
                            ['choice_text' => 'reloj', 'is_correct' => false],
                        ],
                        'explanation' => '« Ventana » est féminin et prend normalement « la ».',
                    ],
                    [
                        'question' => 'Quelle terminaison apparaît souvent dans les noms féminins ?',
                        'choices' => [
                            ['choice_text' => '-o', 'is_correct' => false],
                            ['choice_text' => '-ma', 'is_correct' => false],
                            ['choice_text' => '-ción', 'is_correct' => true],
                            ['choice_text' => '-aje', 'is_correct' => false],
                        ],
                        'explanation' => 'Les noms terminés en « -ción » sont souvent féminins, comme « la nación » et « la decisión ».',
                    ],
                    [
                        'question' => 'Quelle paire est correctement associée ?',
                        'choices' => [
                            ['choice_text' => 'el ciudad / el universidad', 'is_correct' => false],
                            ['choice_text' => 'la ciudad / el universidad', 'is_correct' => false],
                            ['choice_text' => 'el ciudad / la universidad', 'is_correct' => false],
                            ['choice_text' => 'la ciudad / la universidad', 'is_correct' => true],
                        ],
                        'explanation' => '« Ciudad » et « universidad » sont tous deux des noms féminins.',
                    ],
                    [
                        'question' => 'Une apprenante dit « el televisión ». Quelle est la correction ?',
                        'choices' => [
                            ['choice_text' => 'la televisión', 'is_correct' => true],
                            ['choice_text' => 'una televisións', 'is_correct' => false],
                            ['choice_text' => 'el televisiones', 'is_correct' => false],
                            ['choice_text' => 'los televisión', 'is_correct' => false],
                        ],
                        'explanation' => '« Televisión » est féminin, donc « la televisión » est correct.',
                    ],
                    [
                        'question' => 'Quel nom est masculin malgré sa terminaison en « -a » ?',
                        'choices' => [
                            ['choice_text' => 'familia', 'is_correct' => false],
                            ['choice_text' => 'semana', 'is_correct' => false],
                            ['choice_text' => 'carta', 'is_correct' => false],
                            ['choice_text' => 'idioma', 'is_correct' => true],
                        ],
                        'explanation' => '« Idioma » est masculin : « el idioma ».',
                    ],
                    [
                        'question' => 'Quelle paire montre deux noms féminins ?',
                        'choices' => [
                            ['choice_text' => 'el noche / la ciudad', 'is_correct' => false],
                            ['choice_text' => 'la noche / el ciudad', 'is_correct' => false],
                            ['choice_text' => 'la noche / la ciudad', 'is_correct' => true],
                            ['choice_text' => 'el noche / el ciudad', 'is_correct' => false],
                        ],
                        'explanation' => '« Noche » et « ciudad » sont tous deux féminins.',
                    ],
                    [
                        'question' => 'Un élève voit « color » et « pared ». Quelle affirmation est correcte ?',
                        'choices' => [
                            ['choice_text' => '« La color » est masculin, tandis que « el pared » est féminin.', 'is_correct' => false],
                            ['choice_text' => '« El color » est masculin, tandis que « la pared » est féminin.', 'is_correct' => true],
                            ['choice_text' => 'Les deux noms sont féminins.', 'is_correct' => false],
                            ['choice_text' => 'Les deux noms sont masculins.', 'is_correct' => false],
                        ],
                        'explanation' => '« Color » est masculin, tandis que « pared » est féminin ; leurs articles diffèrent donc.',
                    ],
                    [
                        'question' => 'Quel nom est féminin bien qu’il se termine en « -o » ?',
                        'choices' => [
                            ['choice_text' => 'libro', 'is_correct' => false],
                            ['choice_text' => 'gato', 'is_correct' => false],
                            ['choice_text' => 'cuaderno', 'is_correct' => false],
                            ['choice_text' => 'foto', 'is_correct' => true],
                        ],
                        'explanation' => '« Foto » est féminin : « la foto ».',
                    ],
                    [
                        'question' => 'Quel nom est masculin malgré sa terminaison en « -ma » ?',
                        'choices' => [
                            ['choice_text' => 'casa', 'is_correct' => false],
                            ['choice_text' => 'sistema', 'is_correct' => true],
                            ['choice_text' => 'mesa', 'is_correct' => false],
                            ['choice_text' => 'flor', 'is_correct' => false],
                        ],
                        'explanation' => 'Beaucoup de noms d’origine grecque en « -ma » sont masculins ; « el sistema » en est un exemple.',
                    ],
                    [
                        'question' => 'Quelle stratégie est la plus fiable face à un nom inconnu ?',
                        'choices' => [
                            ['choice_text' => 'Vérifier son article ou l’apprendre comme une paire nom-article.', 'is_correct' => true],
                            ['choice_text' => 'Supposer que « -a » signifie toujours féminin.', 'is_correct' => false],
                            ['choice_text' => 'Supposer que toute terminaison en consonne est masculine.', 'is_correct' => false],
                            ['choice_text' => 'Éviter d’utiliser le nom.', 'is_correct' => false],
                        ],
                        'explanation' => 'La terminaison peut aider, mais la forme de dictionnaire avec son article est plus fiable.',
                    ],
                    [
                        'question' => 'Quelle phrase est correcte ?',
                        'choices' => [
                            ['choice_text' => 'El decisión fue difícil.', 'is_correct' => false],
                            ['choice_text' => 'La decisión fueron difícil.', 'is_correct' => false],
                            ['choice_text' => 'La decisión fue difícil.', 'is_correct' => true],
                            ['choice_text' => 'Una decisión fue difíciles.', 'is_correct' => false],
                        ],
                        'explanation' => '« Decisión » est féminin singulier, donc « la decisión » est correct.',
                    ],
                    [
                        'question' => 'Quel groupe ne contient que des noms masculins ?',
                        'choices' => [
                            ['choice_text' => 'la papel, la reloj, la color', 'is_correct' => false],
                            ['choice_text' => 'la flor, el reloj, la pared', 'is_correct' => false],
                            ['choice_text' => 'el noche, la papel, el color', 'is_correct' => false],
                            ['choice_text' => 'el papel, el reloj, el color', 'is_correct' => true],
                        ],
                        'explanation' => '« Papel », « reloj » et « color » sont tous masculins.',
                    ],
                    [
                        'question' => 'Quelle affirmation sur les noms en « -e » est correcte ?',
                        'choices' => [
                            ['choice_text' => 'Les noms terminés en « -e » peuvent être masculins ou féminins.', 'is_correct' => true],
                            ['choice_text' => 'Tout nom en « -e » est masculin.', 'is_correct' => false],
                            ['choice_text' => 'Tout nom en « -e » est féminin.', 'is_correct' => false],
                            ['choice_text' => 'Les mots terminés en « -e » ne sont pas des noms.', 'is_correct' => false],
                        ],
                        'explanation' => 'Par exemple, « el coche » est masculin tandis que « la noche » est féminin ; la terminaison seule ne suffit donc pas.',
                    ],
                    [
                        'question' => 'Quelle phrase contient l’association de genre correcte ?',
                        'choices' => [
                            ['choice_text' => 'La mapa y el foto están aquí.', 'is_correct' => false],
                            ['choice_text' => 'El mapa y la foto están aquí.', 'is_correct' => true],
                            ['choice_text' => 'El mapa y el foto están aquí.', 'is_correct' => false],
                            ['choice_text' => 'La mapa y la foto están aquí.', 'is_correct' => false],
                        ],
                        'explanation' => '« Mapa » est masculin et « foto » est féminin, donc « el mapa » et « la foto » sont corrects.',
                    ],
                ],
            ],
            [
                'title' => 'Les personnes et les professions',
                'description' => 'Entraînez-vous sur le genre des noms désignant des personnes, des membres de la famille et des professions courantes, y compris les noms qui gardent la même forme.',
                'duration' => 20,
                'passing_score' => 60,
                'questions' => [
                    [
                        'question' => 'Quelle est la forme féminine courante de « profesor » ?',
                        'choices' => [
                            ['choice_text' => 'profesora', 'is_correct' => true],
                            ['choice_text' => 'profesoro', 'is_correct' => false],
                            ['choice_text' => 'profesore', 'is_correct' => false],
                            ['choice_text' => 'profesoras', 'is_correct' => false],
                        ],
                        'explanation' => 'La forme féminine courante est « profesora », tandis que « profesor » est masculin.',
                    ],
                    [
                        'question' => 'Quelle paire désigne correctement un homme et une femme ?',
                        'choices' => [
                            ['choice_text' => 'la médico / el médica', 'is_correct' => false],
                            ['choice_text' => 'el médica / la médico', 'is_correct' => false],
                            ['choice_text' => 'el médico / la médica', 'is_correct' => true],
                            ['choice_text' => 'la médica / el médica', 'is_correct' => false],
                        ],
                        'explanation' => '« Médico » et « médica » sont les formes masculine et féminine habituelles.',
                    ],
                    [
                        'question' => 'Quel nom peut désigner un homme ou une femme, l’article indiquant le genre ?',
                        'choices' => [
                            ['choice_text' => 'hermano', 'is_correct' => false],
                            ['choice_text' => 'hermana', 'is_correct' => false],
                            ['choice_text' => 'padre', 'is_correct' => false],
                            ['choice_text' => 'estudiante', 'is_correct' => true],
                        ],
                        'explanation' => '« El estudiante » et « la estudiante » utilisent la même forme de nom avec des articles différents.',
                    ],
                    [
                        'question' => 'Quelle phrase est correcte ?',
                        'choices' => [
                            ['choice_text' => 'Mi hermana es profesor.', 'is_correct' => false],
                            ['choice_text' => 'Mi hermana es profesora.', 'is_correct' => true],
                            ['choice_text' => 'Mi hermano es profesora.', 'is_correct' => false],
                            ['choice_text' => 'Mi hermana son profesora.', 'is_correct' => false],
                        ],
                        'explanation' => '« Hermana » et « profesora » sont des formes féminines singulières, et le verbe « es » s’accorde avec le sujet singulier.',
                    ],
                    [
                        'question' => 'Quelle paire utilise des formes de noms différentes pour le masculin et le féminin ?',
                        'choices' => [
                            ['choice_text' => 'actor / actriz', 'is_correct' => true],
                            ['choice_text' => 'estudiante / estudiante', 'is_correct' => false],
                            ['choice_text' => 'periodista / periodista', 'is_correct' => false],
                            ['choice_text' => 'artista / artista', 'is_correct' => false],
                        ],
                        'explanation' => '« Actor » devient « actriz » pour la forme féminine.',
                    ],
                    [
                        'question' => 'Une femme dit : « Soy periodista. » Comment la désigner normalement avec un article ?',
                        'choices' => [
                            ['choice_text' => 'el periodista', 'is_correct' => false],
                            ['choice_text' => 'la periodisto', 'is_correct' => false],
                            ['choice_text' => 'una periodisto', 'is_correct' => false],
                            ['choice_text' => 'la periodista', 'is_correct' => true],
                        ],
                        'explanation' => '« Periodista » garde la même forme pour les deux genres ; « la » marque ici la référence féminine.',
                    ],
                    [
                        'question' => 'Quelle phrase désigne correctement une ingénieure ?',
                        'choices' => [
                            ['choice_text' => 'Ella es ingeniero.', 'is_correct' => false],
                            ['choice_text' => 'Ella es ingeniera.', 'is_correct' => true],
                            ['choice_text' => 'Ella son ingeniera.', 'is_correct' => false],
                            ['choice_text' => 'Ella es un ingeniera.', 'is_correct' => false],
                        ],
                        'explanation' => '« Ingeniera » est la forme féminine de « ingeniero ».',
                    ],
                    [
                        'question' => 'Quelle paire contient un nom familial masculin et un nom familial féminin ?',
                        'choices' => [
                            ['choice_text' => 'padre / padre', 'is_correct' => false],
                            ['choice_text' => 'madre / madre', 'is_correct' => false],
                            ['choice_text' => 'hermano / hermana', 'is_correct' => true],
                            ['choice_text' => 'persona / persona', 'is_correct' => false],
                        ],
                        'explanation' => '« Hermano » est masculin et « hermana » est féminin.',
                    ],
                    [
                        'question' => 'Quel nom peut décrire un artiste homme ou femme sans changer de forme ?',
                        'choices' => [
                            ['choice_text' => 'actor', 'is_correct' => false],
                            ['choice_text' => 'artista', 'is_correct' => true],
                            ['choice_text' => 'actoría', 'is_correct' => false],
                            ['choice_text' => 'hermano', 'is_correct' => false],
                        ],
                        'explanation' => '« Artista » garde la même forme ; l’article peut indiquer le genre : « el artista » ou « la artista ».',
                    ],
                    [
                        'question' => 'Quelle phrase contient une incohérence de genre ?',
                        'choices' => [
                            ['choice_text' => 'Mi hermano es enfermera.', 'is_correct' => true],
                            ['choice_text' => 'Mi hermano es enfermero.', 'is_correct' => false],
                            ['choice_text' => 'Mi hermana es enfermera.', 'is_correct' => false],
                            ['choice_text' => 'La enfermera trabaja aquí.', 'is_correct' => false],
                        ],
                        'explanation' => '« Hermano » est masculin, donc la profession correspondante est « enfermero », pas « enfermera ».',
                    ],
                    [
                        'question' => 'Qu’est-ce qui change entre « el estudiante » et « la estudiante » ?',
                        'choices' => [
                            ['choice_text' => 'Le nom change de « estudiante » à « estudianta ».', 'is_correct' => false],
                            ['choice_text' => 'Seul le verbe change.', 'is_correct' => false],
                            ['choice_text' => 'L’article change, mais le nom reste le même.', 'is_correct' => true],
                            ['choice_text' => 'Rien ne change du tout.', 'is_correct' => false],
                        ],
                        'explanation' => '« Estudiante » est un nom à forme unique pour les deux genres ; l’article indique si la personne est un homme ou une femme.',
                    ],
                    [
                        'question' => 'Quelle phrase est naturelle ?',
                        'choices' => [
                            ['choice_text' => 'El doctora atiende a la paciente.', 'is_correct' => false],
                            ['choice_text' => 'La doctor atiende a la paciente.', 'is_correct' => false],
                            ['choice_text' => 'La doctora atienden a la paciente.', 'is_correct' => false],
                            ['choice_text' => 'La doctora atiende a la paciente.', 'is_correct' => true],
                        ],
                        'explanation' => '« Doctora » est la forme féminine, et « la paciente » désigne correctement une patiente ici.',
                    ],
                ],
            ],
            [
                'title' => 'Les articles et le genre en contexte',
                'description' => 'Choisissez le bon article défini ou indéfini en tenant compte du genre et du nombre du nom.',
                'duration' => 15,
                'passing_score' => 55,
                'questions' => [
                    [
                        'question' => 'Choisissez l’expression correcte pour « un livre ».',
                        'choices' => [
                            ['choice_text' => 'una libro', 'is_correct' => false],
                            ['choice_text' => 'un libro', 'is_correct' => true],
                            ['choice_text' => 'la libro', 'is_correct' => false],
                            ['choice_text' => 'un libros', 'is_correct' => false],
                        ],
                        'explanation' => '« Libro » est masculin singulier, donc l’article indéfini est « un ».',
                    ],
                    [
                        'question' => 'Quelle expression signifie « la ville » ?',
                        'choices' => [
                            ['choice_text' => 'el ciudad', 'is_correct' => false],
                            ['choice_text' => 'un ciudad', 'is_correct' => false],
                            ['choice_text' => 'la ciudad', 'is_correct' => true],
                            ['choice_text' => 'los ciudad', 'is_correct' => false],
                        ],
                        'explanation' => '« Ciudad » est féminin singulier, donc l’article défini est « la ».',
                    ],
                    [
                        'question' => 'Maria dit : « Necesito ___ mesa. » Quelle option convient ?',
                        'choices' => [
                            ['choice_text' => 'una', 'is_correct' => true],
                            ['choice_text' => 'un', 'is_correct' => false],
                            ['choice_text' => 'el', 'is_correct' => false],
                            ['choice_text' => 'los', 'is_correct' => false],
                        ],
                        'explanation' => '« Mesa » est féminin singulier, donc « una mesa » signifie « une table ».',
                    ],
                    [
                        'question' => 'Quelle phrase est correcte ?',
                        'choices' => [
                            ['choice_text' => 'Tengo una mapa.', 'is_correct' => false],
                            ['choice_text' => 'Tengo la mapa.', 'is_correct' => false],
                            ['choice_text' => 'Tengo un mapas.', 'is_correct' => false],
                            ['choice_text' => 'Tengo un mapa.', 'is_correct' => true],
                        ],
                        'explanation' => '« Mapa » est masculin singulier, donc « un mapa » est correct.',
                    ],
                    [
                        'question' => 'Quelle paire contient les bons articles défini et indéfini pour « flor » ?',
                        'choices' => [
                            ['choice_text' => 'el flor / un flor', 'is_correct' => false],
                            ['choice_text' => 'la flor / una flor', 'is_correct' => true],
                            ['choice_text' => 'la flor / un flor', 'is_correct' => false],
                            ['choice_text' => 'el flor / una flor', 'is_correct' => false],
                        ],
                        'explanation' => '« Flor » est féminin, donc il prend « la » et « una » au singulier.',
                    ],
                    [
                        'question' => 'Une apprenante dit « una problema ». Que faut-il corriger ?',
                        'choices' => [
                            ['choice_text' => 'Changer « problema » en « problemo ».', 'is_correct' => false],
                            ['choice_text' => 'Changer « una » en « la ».', 'is_correct' => false],
                            ['choice_text' => 'Changer « una » en « un ».', 'is_correct' => true],
                            ['choice_text' => 'Changer « problema » en « problemas ».', 'is_correct' => false],
                        ],
                        'explanation' => '« Problema » est masculin, donc l’article indéfini est « un » : « un problema ».',
                    ],
                    [
                        'question' => 'Quelle phrase utilise correctement « mano » ?',
                        'choices' => [
                            ['choice_text' => 'Tengo una mano pequeña.', 'is_correct' => true],
                            ['choice_text' => 'Tengo un mano pequeño.', 'is_correct' => false],
                            ['choice_text' => 'Tengo la mano pequeños.', 'is_correct' => false],
                            ['choice_text' => 'Tengo un mano pequeña.', 'is_correct' => false],
                        ],
                        'explanation' => '« Mano » est féminin singulier, donc « una mano » et l’adjectif féminin « pequeña » sont corrects.',
                    ],
                    [
                        'question' => 'Quelle expression est correcte pour « une professeure » quand le nom est « profesora » ?',
                        'choices' => [
                            ['choice_text' => 'un profesora', 'is_correct' => false],
                            ['choice_text' => 'una profesor', 'is_correct' => false],
                            ['choice_text' => 'el profesora', 'is_correct' => false],
                            ['choice_text' => 'una profesora', 'is_correct' => true],
                        ],
                        'explanation' => '« Profesora » est féminin singulier, donc l’article indéfini est « una ».',
                    ],
                    [
                        'question' => 'Quelle phrase a l’article correctement accordé ?',
                        'choices' => [
                            ['choice_text' => 'La reloj está aquí.', 'is_correct' => false],
                            ['choice_text' => 'El reloj está aquí.', 'is_correct' => true],
                            ['choice_text' => 'Una reloj está aquí.', 'is_correct' => false],
                            ['choice_text' => 'Los reloj está aquí.', 'is_correct' => false],
                        ],
                        'explanation' => '« Reloj » est masculin singulier, donc « el reloj » est correct.',
                    ],
                    [
                        'question' => 'Quelle option utilise correctement « universidad » ?',
                        'choices' => [
                            ['choice_text' => 'un universidad', 'is_correct' => false],
                            ['choice_text' => 'el universidad', 'is_correct' => false],
                            ['choice_text' => 'una universidad', 'is_correct' => true],
                            ['choice_text' => 'los universidad', 'is_correct' => false],
                        ],
                        'explanation' => '« Universidad » est féminin singulier, donc « una universidad » est correct.',
                    ],
                ],
            ],
            [
                'title' => 'Les exceptions à connaître',
                'description' => 'Gagnez en confiance avec des exceptions courantes et des cas particuliers que les débutants rencontrent souvent en espagnol réel.',
                'duration' => 25,
                'passing_score' => 65,
                'questions' => [
                    [
                        'question' => 'Quelle expression faut-il mémoriser pour « la main » ?',
                        'choices' => [
                            ['choice_text' => 'el mano', 'is_correct' => false],
                            ['choice_text' => 'una mano', 'is_correct' => false],
                            ['choice_text' => 'los mano', 'is_correct' => false],
                            ['choice_text' => 'la mano', 'is_correct' => true],
                        ],
                        'explanation' => '« Mano » est féminin même s’il se termine en « -o », donc l’expression standard est « la mano ».',
                    ],
                    [
                        'question' => 'Quelle expression est correcte pour « le jour » ?',
                        'choices' => [
                            ['choice_text' => 'la día', 'is_correct' => false],
                            ['choice_text' => 'el día', 'is_correct' => true],
                            ['choice_text' => 'una día', 'is_correct' => false],
                            ['choice_text' => 'el días', 'is_correct' => false],
                        ],
                        'explanation' => '« Día » est masculin, donc « el día » est correct.',
                    ],
                    [
                        'question' => 'Quel nom est masculin ?',
                        'choices' => [
                            ['choice_text' => 'flor', 'is_correct' => false],
                            ['choice_text' => 'noche', 'is_correct' => false],
                            ['choice_text' => 'problema', 'is_correct' => true],
                            ['choice_text' => 'mano', 'is_correct' => false],
                        ],
                        'explanation' => '« Problema » est masculin malgré sa terminaison en « -a » : « el problema ».',
                    ],
                    [
                        'question' => 'Quelle expression est correcte ?',
                        'choices' => [
                            ['choice_text' => 'el idioma', 'is_correct' => true],
                            ['choice_text' => 'la idioma', 'is_correct' => false],
                            ['choice_text' => 'una idioma', 'is_correct' => false],
                            ['choice_text' => 'los idioma', 'is_correct' => false],
                        ],
                        'explanation' => '« Idioma » est masculin, donc « el idioma » est l’expression standard au singulier.',
                    ],
                    [
                        'question' => 'Quel mot est féminin bien qu’il se termine en « -o » ?',
                        'choices' => [
                            ['choice_text' => 'mapa', 'is_correct' => false],
                            ['choice_text' => 'tema', 'is_correct' => false],
                            ['choice_text' => 'sistema', 'is_correct' => false],
                            ['choice_text' => 'foto', 'is_correct' => true],
                        ],
                        'explanation' => '« Foto » est féminin : « la foto ».',
                    ],
                    [
                        'question' => 'Pourquoi « el agua » est-il possible alors que « agua » est féminin ?',
                        'choices' => [
                            ['choice_text' => '« Agua » devient masculin au singulier.', 'is_correct' => false],
                            ['choice_text' => '« Agua » n’a pas de genre.', 'is_correct' => false],
                            ['choice_text' => 'Au singulier, « el » est utilisé devant le « a » initial accentué pour faciliter la prononciation.', 'is_correct' => true],
                            ['choice_text' => 'Les noms féminins prennent toujours « el ».', 'is_correct' => false],
                        ],
                        'explanation' => '« Agua » reste grammaticalement féminin, mais « el agua » s’utilise au singulier pour éviter une répétition maladroite du son « a ».',
                    ],
                    [
                        'question' => 'Quelle phrase est correcte ?',
                        'choices' => [
                            ['choice_text' => 'La agua está frío.', 'is_correct' => false],
                            ['choice_text' => 'El agua está fría.', 'is_correct' => true],
                            ['choice_text' => 'El agua están fría.', 'is_correct' => false],
                            ['choice_text' => 'El agua está frío.', 'is_correct' => false],
                        ],
                        'explanation' => 'Le nom est grammaticalement féminin, donc l’adjectif est « fría ». L’article singulier est « el » en raison de la règle de prononciation.',
                    ],
                    [
                        'question' => 'Quel nom est masculin même s’il se termine en « -a » ?',
                        'choices' => [
                            ['choice_text' => 'tema', 'is_correct' => true],
                            ['choice_text' => 'casa', 'is_correct' => false],
                            ['choice_text' => 'camisa', 'is_correct' => false],
                            ['choice_text' => 'ventana', 'is_correct' => false],
                        ],
                        'explanation' => '« Tema » est masculin : « el tema ».',
                    ],
                    [
                        'question' => 'Quelle paire contient deux noms dont le genre peut surprendre d’après leur terminaison ?',
                        'choices' => [
                            ['choice_text' => 'la mesa et la casa', 'is_correct' => false],
                            ['choice_text' => 'la mano et el mapa', 'is_correct' => true],
                            ['choice_text' => 'el libro et el coche', 'is_correct' => false],
                            ['choice_text' => 'la ventana et la silla', 'is_correct' => false],
                        ],
                        'explanation' => '« La mano » et « el mapa » sont des exceptions utiles, car leurs terminaisons peuvent tromper les débutants.',
                    ],
                    [
                        'question' => 'Quelle phrase utilise correctement un nom masculin en « -ma » ?',
                        'choices' => [
                            ['choice_text' => 'La sistema funciona bien.', 'is_correct' => false],
                            ['choice_text' => 'El sistema funcionan bien.', 'is_correct' => false],
                            ['choice_text' => 'Una sistema funciona bien.', 'is_correct' => false],
                            ['choice_text' => 'El sistema funciona bien.', 'is_correct' => true],
                        ],
                        'explanation' => '« Sistema » est masculin, et le verbe singulier « funciona » s’accorde avec le sujet singulier.',
                    ],
                    [
                        'question' => 'Quelle affirmation sur les exceptions est la plus utile pour un débutant ?',
                        'choices' => [
                            ['choice_text' => 'Ignorer les articles et mémoriser seulement l’orthographe.', 'is_correct' => false],
                            ['choice_text' => 'Changer la terminaison du nom quand elle semble inhabituelle.', 'is_correct' => false],
                            ['choice_text' => 'Apprendre les exceptions fréquentes avec leur article plutôt que de se fier à la dernière lettre pour deviner le genre.', 'is_correct' => true],
                            ['choice_text' => 'Utiliser « la » pour tout nom terminé par une voyelle.', 'is_correct' => false],
                        ],
                        'explanation' => 'L’article donne un indice de genre fiable, surtout pour les mots qui ne suivent pas les schémas de terminaison les plus simples.',
                    ],
                    [
                        'question' => 'Quelle paire contient une exception féminine et une exception masculine ?',
                        'choices' => [
                            ['choice_text' => 'la mano / el mapa', 'is_correct' => true],
                            ['choice_text' => 'la casa / el libro', 'is_correct' => false],
                            ['choice_text' => 'la mesa / la flor', 'is_correct' => false],
                            ['choice_text' => 'el coche / el reloj', 'is_correct' => false],
                        ],
                        'explanation' => '« Mano » est féminin malgré « -o », tandis que « mapa » est masculin malgré « -a ».',
                    ],
                    [
                        'question' => 'Une apprenante dit « la problema » parce que le mot se termine en « -a ». Quelle est la correction la plus utile ?',
                        'choices' => [
                            ['choice_text' => 'Dire que tous les mots en « -a » sont féminins.', 'is_correct' => false],
                            ['choice_text' => 'Changer « problema » en « problemosa ».', 'is_correct' => false],
                            ['choice_text' => 'Éviter le mot « problema ».', 'is_correct' => false],
                            ['choice_text' => 'Enseigner « el problema » comme une unité complète.', 'is_correct' => true],
                        ],
                        'explanation' => 'Mémoriser « el problema » aide l’apprenante à retenir ce nom comme une exception masculine.',
                    ],
                    [
                        'question' => 'Quel nom est féminin ?',
                        'choices' => [
                            ['choice_text' => 'mano', 'is_correct' => true],
                            ['choice_text' => 'idioma', 'is_correct' => false],
                            ['choice_text' => 'día', 'is_correct' => false],
                            ['choice_text' => 'mapa', 'is_correct' => false],
                        ],
                        'explanation' => 'Parmi ces mots, seul « mano » est féminin.',
                    ],
                    [
                        'question' => 'Quelle phrase est correcte ?',
                        'choices' => [
                            ['choice_text' => 'El foto es bonito.', 'is_correct' => false],
                            ['choice_text' => 'La foto es bonita.', 'is_correct' => true],
                            ['choice_text' => 'La foto es bonito.', 'is_correct' => false],
                            ['choice_text' => 'Un foto es bonita.', 'is_correct' => false],
                        ],
                        'explanation' => '« Foto » est féminin, donc « la foto » et « bonita » s’accordent correctement.',
                    ],
                    [
                        'question' => 'Quelle combinaison serait la plus utile à mémoriser ?',
                        'choices' => [
                            ['choice_text' => 'idioma, mano, mapa seulement', 'is_correct' => false],
                            ['choice_text' => 'la idioma, el mano, la mapa', 'is_correct' => false],
                            ['choice_text' => 'el idioma, la mano, el mapa', 'is_correct' => true],
                            ['choice_text' => 'un idioma, un mano, un mapa', 'is_correct' => false],
                        ],
                        'explanation' => 'Apprendre ces noms avec leurs articles donne un indice de genre clair et évite de se fier à des terminaisons trompeuses.',
                    ],
                    [
                        'question' => 'Quelle expression plurielle est correcte pour « les eaux » ?',
                        'choices' => [
                            ['choice_text' => 'los aguas', 'is_correct' => false],
                            ['choice_text' => 'las agua', 'is_correct' => false],
                            ['choice_text' => 'el aguas', 'is_correct' => false],
                            ['choice_text' => 'las aguas', 'is_correct' => true],
                        ],
                        'explanation' => '« Aguas » est pluriel et féminin, donc l’article pluriel est « las ».',
                    ],
                ],
            ],
            [
                'title' => 'Le genre des noms dans les descriptions',
                'description' => 'Utilisez le genre des noms dans de courtes phrases et descriptions, surtout quand un adjectif doit aussi s’accorder.',
                'duration' => 25,
                'passing_score' => 65,
                'questions' => [
                    [
                        'question' => 'Quelle phrase est correcte ?',
                        'choices' => [
                            ['choice_text' => 'La casa es grande.', 'is_correct' => true],
                            ['choice_text' => 'El casa es grande.', 'is_correct' => false],
                            ['choice_text' => 'La casa son grande.', 'is_correct' => false],
                            ['choice_text' => 'Un casa es grandes.', 'is_correct' => false],
                        ],
                        'explanation' => '« Casa » est féminin singulier, donc « la casa » est correct. « Grande » convient aux deux genres sous cette forme.',
                    ],
                    [
                        'question' => 'Quelle phrase décrit correctement un nom masculin ?',
                        'choices' => [
                            ['choice_text' => 'La coche es nueva.', 'is_correct' => false],
                            ['choice_text' => 'El coche es nueva.', 'is_correct' => false],
                            ['choice_text' => 'El coche es nuevo.', 'is_correct' => true],
                            ['choice_text' => 'Una coche es nuevo.', 'is_correct' => false],
                        ],
                        'explanation' => '« Coche » est masculin singulier, donc « el » et « nuevo » conviennent.',
                    ],
                    [
                        'question' => 'Quelle phrase utilise un adjectif féminin avec « noche » ?',
                        'choices' => [
                            ['choice_text' => 'La noche es tranquilo.', 'is_correct' => false],
                            ['choice_text' => 'El noche es tranquila.', 'is_correct' => false],
                            ['choice_text' => 'La noche son tranquila.', 'is_correct' => false],
                            ['choice_text' => 'La noche es tranquila.', 'is_correct' => true],
                        ],
                        'explanation' => '« Noche » est féminin, donc « tranquila » s’accorde avec lui.',
                    ],
                    [
                        'question' => 'Quelle expression est correcte ?',
                        'choices' => [
                            ['choice_text' => 'una día larga', 'is_correct' => false],
                            ['choice_text' => 'un día largo', 'is_correct' => true],
                            ['choice_text' => 'un día larga', 'is_correct' => false],
                            ['choice_text' => 'una día largo', 'is_correct' => false],
                        ],
                        'explanation' => '« Día » est masculin, donc « un » et « largo » s’accordent avec lui.',
                    ],
                    [
                        'question' => 'Quelle phrase décrit correctement « mesa » ?',
                        'choices' => [
                            ['choice_text' => 'El mesa es pequeño.', 'is_correct' => false],
                            ['choice_text' => 'La mesa es pequeña.', 'is_correct' => true],
                            ['choice_text' => 'La mesa es pequeño.', 'is_correct' => false],
                            ['choice_text' => 'Un mesa es pequeña.', 'is_correct' => false],
                        ],
                        'explanation' => '« Mesa » est féminin singulier, donc « la » et « pequeña » s’accordent avec lui.',
                    ],
                    [
                        'question' => 'Une élève sait que « libro » est masculin. Quelle expression suit naturellement ?',
                        'choices' => [
                            ['choice_text' => 'una libro nueva', 'is_correct' => false],
                            ['choice_text' => 'un libro nueva', 'is_correct' => false],
                            ['choice_text' => 'una libro nuevo', 'is_correct' => false],
                            ['choice_text' => 'un libro nuevo', 'is_correct' => true],
                        ],
                        'explanation' => '« Libro » est masculin, donc l’article et l’adjectif sont « un » et « nuevo ».',
                    ],
                    [
                        'question' => 'Quelle phrase met correctement en contraste deux noms ?',
                        'choices' => [
                            ['choice_text' => 'El cuaderno es nuevo y la carpeta es vieja.', 'is_correct' => true],
                            ['choice_text' => 'La cuaderno es nueva y el carpeta es viejo.', 'is_correct' => false],
                            ['choice_text' => 'El cuaderno es nueva y la carpeta es viejo.', 'is_correct' => false],
                            ['choice_text' => 'El cuaderno son nuevo y la carpeta son vieja.', 'is_correct' => false],
                        ],
                        'explanation' => '« Cuaderno » est masculin et « carpeta » est féminin, donc les adjectifs « nuevo » et « vieja » s’accordent avec chaque nom.',
                    ],
                    [
                        'question' => 'Quelle phrase est correcte avec « flor » ?',
                        'choices' => [
                            ['choice_text' => 'El flor es bonito.', 'is_correct' => false],
                            ['choice_text' => 'La flor es bonito.', 'is_correct' => false],
                            ['choice_text' => 'La flor es bonita.', 'is_correct' => true],
                            ['choice_text' => 'Un flor es bonita.', 'is_correct' => false],
                        ],
                        'explanation' => '« Flor » est féminin, donc « la flor » et « bonita » sont corrects.',
                    ],
                    [
                        'question' => 'Quelle phrase utilise correctement « mapa » avec un adjectif ?',
                        'choices' => [
                            ['choice_text' => 'La mapa es útil.', 'is_correct' => false],
                            ['choice_text' => 'El mapa es útiles.', 'is_correct' => false],
                            ['choice_text' => 'El mapa es útil.', 'is_correct' => true],
                            ['choice_text' => 'Una mapa es útiles.', 'is_correct' => false],
                        ],
                        'explanation' => '« Mapa » est masculin singulier. « Útil » a la même forme au singulier pour le masculin et le féminin.',
                    ],
                    [
                        'question' => 'Quelle option décrit correctement « la mano » ?',
                        'choices' => [
                            ['choice_text' => 'El mano está limpio.', 'is_correct' => false],
                            ['choice_text' => 'La mano está limpia.', 'is_correct' => true],
                            ['choice_text' => 'La mano están limpio.', 'is_correct' => false],
                            ['choice_text' => 'Un mano está limpia.', 'is_correct' => false],
                        ],
                        'explanation' => '« Mano » est féminin singulier, donc « la mano » et « limpia » s’accordent.',
                    ],
                    [
                        'question' => 'Quelle phrase est correcte ?',
                        'choices' => [
                            ['choice_text' => 'El universidad es grande.', 'is_correct' => false],
                            ['choice_text' => 'La universidad son grande.', 'is_correct' => false],
                            ['choice_text' => 'Una universidad son grandes.', 'is_correct' => false],
                            ['choice_text' => 'La universidad es grande.', 'is_correct' => true],
                        ],
                        'explanation' => '« Universidad » est féminin singulier, donc « la universidad » est correct.',
                    ],
                    [
                        'question' => 'Un élève dit « el problema nueva ». Quelle partie est incorrecte ?',
                        'choices' => [
                            ['choice_text' => 'L’adjectif devrait être masculin : « nuevo ».', 'is_correct' => true],
                            ['choice_text' => 'L’article devrait être « la ».', 'is_correct' => false],
                            ['choice_text' => 'Le nom devrait devenir « problemao ».', 'is_correct' => false],
                            ['choice_text' => 'Rien n’est incorrect.', 'is_correct' => false],
                        ],
                        'explanation' => '« Problema » est masculin, donc l’adjectif doit aussi être masculin : « el problema nuevo ».',
                    ],
                    [
                        'question' => 'Quelle description est grammaticalement naturelle ?',
                        'choices' => [
                            ['choice_text' => 'Un habitación pequeño.', 'is_correct' => false],
                            ['choice_text' => 'Una habitación pequeño.', 'is_correct' => false],
                            ['choice_text' => 'Un habitación pequeña.', 'is_correct' => false],
                            ['choice_text' => 'Una habitación pequeña.', 'is_correct' => true],
                        ],
                        'explanation' => '« Habitación » est féminin singulier, donc « una » et « pequeña » s’accordent avec lui.',
                    ],
                    [
                        'question' => 'Pourquoi « la mano pequeña » est-il correct ?',
                        'choices' => [
                            ['choice_text' => '« Mano » est masculin à cause du « -o ».', 'is_correct' => false],
                            ['choice_text' => '« Mano » est féminin, donc l’article et l’adjectif suivent le schéma féminin.', 'is_correct' => true],
                            ['choice_text' => 'Les adjectifs ne s’accordent jamais avec les noms.', 'is_correct' => false],
                            ['choice_text' => '« Pequeña » est un nom, pas un adjectif.', 'is_correct' => false],
                        ],
                        'explanation' => '« Mano » est une exception féminine, donc « la » et « pequeña » s’accordent correctement avec lui.',
                    ],
                    [
                        'question' => 'Un magasin a une nouvelle chaise et une nouvelle table. Quelle phrase est correcte ?',
                        'choices' => [
                            ['choice_text' => 'La silla es nueva y la mesa es nueva.', 'is_correct' => true],
                            ['choice_text' => 'El silla es nuevo y el mesa es nuevo.', 'is_correct' => false],
                            ['choice_text' => 'La silla es nuevo y la mesa es nueva.', 'is_correct' => false],
                            ['choice_text' => 'La silla son nueva y la mesa son nueva.', 'is_correct' => false],
                        ],
                        'explanation' => '« Silla » et « mesa » sont tous deux des noms féminins singuliers, donc « la » et « nueva » s’utilisent avec chacun.',
                    ],
                    [
                        'question' => 'Quelle phrase montre le mieux pourquoi le genre des noms est important ?',
                        'choices' => [
                            ['choice_text' => 'El profesora nuevo llega temprano.', 'is_correct' => false],
                            ['choice_text' => 'La profesora nuevo llega temprano.', 'is_correct' => false],
                            ['choice_text' => 'La profesora nueva llega temprano.', 'is_correct' => true],
                            ['choice_text' => 'La profesor nueva llega temprano.', 'is_correct' => false],
                        ],
                        'explanation' => 'Le genre affecte à la fois la forme du nom « profesora » et l’adjectif correspondant « nueva », rendant l’accord visible dans la phrase.',
                    ],
                ],
            ],
            [
                'title' => 'Révision mixte du genre des noms',
                'description' => 'Réunissez schémas, exceptions, articles et choix de phrases courtes dans une révision finale de niveau débutant.',
                'duration' => 20,
                'passing_score' => 65,
                'questions' => [
                    [
                        'question' => 'Quel nom est féminin ?',
                        'choices' => [
                            ['choice_text' => 'noche', 'is_correct' => true],
                            ['choice_text' => 'mapa', 'is_correct' => false],
                            ['choice_text' => 'día', 'is_correct' => false],
                            ['choice_text' => 'problema', 'is_correct' => false],
                        ],
                        'explanation' => '« Noche » est féminin : « la noche ».',
                    ],
                    [
                        'question' => 'Quelle expression est correcte ?',
                        'choices' => [
                            ['choice_text' => 'la libro', 'is_correct' => false],
                            ['choice_text' => 'una libro', 'is_correct' => false],
                            ['choice_text' => 'el libro', 'is_correct' => true],
                            ['choice_text' => 'los libro', 'is_correct' => false],
                        ],
                        'explanation' => '« Libro » est masculin singulier, donc « el libro » est correct.',
                    ],
                    [
                        'question' => 'Quel mot est un bon avertissement contre le fait de se fier seulement à la dernière lettre ?',
                        'choices' => [
                            ['choice_text' => 'casa', 'is_correct' => false],
                            ['choice_text' => 'mano', 'is_correct' => true],
                            ['choice_text' => 'libro', 'is_correct' => false],
                            ['choice_text' => 'mesa', 'is_correct' => false],
                        ],
                        'explanation' => '« Mano » se termine en « -o » mais est féminin, c’est donc un bon rappel que les terminaisons ne sont que des indices.',
                    ],
                    [
                        'question' => 'Quelle paire est correcte ?',
                        'choices' => [
                            ['choice_text' => 'el foto / la mapa', 'is_correct' => false],
                            ['choice_text' => 'la foto / la mapa', 'is_correct' => false],
                            ['choice_text' => 'el foto / el mapa', 'is_correct' => false],
                            ['choice_text' => 'la foto / el mapa', 'is_correct' => true],
                        ],
                        'explanation' => '« Foto » est féminin, tandis que « mapa » est masculin.',
                    ],
                    [
                        'question' => 'Une apprenante voit « universidad » pour la première fois. Quel article faut-il apprendre avec lui ?',
                        'choices' => [
                            ['choice_text' => 'el', 'is_correct' => false],
                            ['choice_text' => 'un', 'is_correct' => false],
                            ['choice_text' => 'la', 'is_correct' => true],
                            ['choice_text' => 'los', 'is_correct' => false],
                        ],
                        'explanation' => '« Universidad » est féminin singulier, donc « la universidad » est la combinaison standard.',
                    ],
                    [
                        'question' => 'Quelle phrase est correcte ?',
                        'choices' => [
                            ['choice_text' => 'La día es larga.', 'is_correct' => false],
                            ['choice_text' => 'El día es larga.', 'is_correct' => false],
                            ['choice_text' => 'Un día son largo.', 'is_correct' => false],
                            ['choice_text' => 'El día es largo.', 'is_correct' => true],
                        ],
                        'explanation' => '« Día » est masculin, donc « el » et « largo » s’accordent avec lui.',
                    ],
                    [
                        'question' => 'Quel nom de profession peut garder la même forme pour un homme et une femme ?',
                        'choices' => [
                            ['choice_text' => 'periodista', 'is_correct' => true],
                            ['choice_text' => 'profesor/profesora', 'is_correct' => false],
                            ['choice_text' => 'actor/actriz', 'is_correct' => false],
                            ['choice_text' => 'ingeniero/ingeniera', 'is_correct' => false],
                        ],
                        'explanation' => '« Periodista » s’utilise pour les deux genres ; l’article distingue « el periodista » de « la periodista ».',
                    ],
                    [
                        'question' => 'Quelle phrase décrit correctement une médecin ?',
                        'choices' => [
                            ['choice_text' => 'El doctora es amable.', 'is_correct' => false],
                            ['choice_text' => 'La doctora es amable.', 'is_correct' => true],
                            ['choice_text' => 'La doctor es amable.', 'is_correct' => false],
                            ['choice_text' => 'La doctora son amable.', 'is_correct' => false],
                        ],
                        'explanation' => '« Doctora » est féminin singulier, donc « la doctora » est correct.',
                    ],
                    [
                        'question' => 'Quelle affirmation sur les noms en « -a » est correcte ?',
                        'choices' => [
                            ['choice_text' => 'Tout nom en « -a » est féminin.', 'is_correct' => false],
                            ['choice_text' => 'Tout nom en « -a » est masculin.', 'is_correct' => false],
                            ['choice_text' => 'Beaucoup sont féminins, mais des mots comme « mapa » et « problema » sont masculins.', 'is_correct' => true],
                            ['choice_text' => 'La terminaison ne donne jamais d’information utile.', 'is_correct' => false],
                        ],
                        'explanation' => 'Le schéma « -a » est utile, mais des exceptions courantes signifient qu’il faut encore apprendre chaque nom avec attention.',
                    ],
                    [
                        'question' => 'Quel choix donne la stratégie d’étude la plus utile ?',
                        'choices' => [
                            ['choice_text' => 'Apprendre les noms difficiles avec leur article et repérer les schémas courants.', 'is_correct' => true],
                            ['choice_text' => 'Mémoriser seulement la dernière lettre de chaque nom.', 'is_correct' => false],
                            ['choice_text' => 'Utiliser « el » dès qu’on n’est pas sûr.', 'is_correct' => false],
                            ['choice_text' => 'Ne jamais apprendre les noms en contexte de phrase.', 'is_correct' => false],
                        ],
                        'explanation' => 'Combiner les schémas avec la mémorisation article-plus-nom donne aux débutants à la fois un indice utile et une référence fiable.',
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
