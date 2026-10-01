<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class SpanishLiteratureBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'spanish-literature')->firstOrFail();

        $quizzes = [
            [
                'title' => 'Spanish Literature Foundations',
                'description' => 'Learn basic literary vocabulary, genres, and concepts used when discussing Spanish-language literature.',
                'settings' => ['duration' => 18, 'passing_score' => 50],
                'questions' => [
                    [
                        'question' => 'What does “literatura” mean in English?',
                        'choices' => [
                            ['choice_text' => 'literature', 'is_correct' => true],
                            ['choice_text' => 'grammar', 'is_correct' => false],
                            ['choice_text' => 'library', 'is_correct' => false],
                            ['choice_text' => 'history', 'is_correct' => false],
                        ],
                        'explanation' => '“Literatura” means literature: written or oral creative works such as poems, stories, and novels.',
                    ],
                    [
                        'question' => 'Which genre normally tells a fictional story in prose?',
                        'choices' => [
                            ['choice_text' => 'la narrativa', 'is_correct' => true],
                            ['choice_text' => 'la poesía', 'is_correct' => false],
                            ['choice_text' => 'la gramática', 'is_correct' => false],
                            ['choice_text' => 'la biografía', 'is_correct' => false],
                        ],
                        'explanation' => 'Narrative literature tells a story, usually through prose and characters.',
                    ],
                    [
                        'question' => 'Which literary form is usually organized in lines and may use rhythm or rhyme?',
                        'choices' => [
                            ['choice_text' => 'la poesía', 'is_correct' => true],
                            ['choice_text' => 'la novela', 'is_correct' => false],
                            ['choice_text' => 'el ensayo', 'is_correct' => false],
                            ['choice_text' => 'la biografía', 'is_correct' => false],
                        ],
                        'explanation' => 'Poetry is typically arranged in lines and may use rhythm, meter, or rhyme.',
                    ],
                    [
                        'question' => 'What is a “novela”?',
                        'choices' => [
                            ['choice_text' => 'a novel', 'is_correct' => true],
                            ['choice_text' => 'a poem', 'is_correct' => false],
                            ['choice_text' => 'a dictionary', 'is_correct' => false],
                            ['choice_text' => 'a newspaper article', 'is_correct' => false],
                        ],
                        'explanation' => 'A novela is a long fictional prose work, usually longer than a short story.',
                    ],
                    [
                        'question' => 'What does “cuento” commonly mean in literary Spanish?',
                        'choices' => [
                            ['choice_text' => 'short story', 'is_correct' => true],
                            ['choice_text' => 'chapter', 'is_correct' => false],
                            ['choice_text' => 'playwright', 'is_correct' => false],
                            ['choice_text' => 'poem', 'is_correct' => false],
                        ],
                        'explanation' => 'A cuento is commonly a short fictional narrative.',
                    ],
                    [
                        'question' => 'What is a “personaje” in a story?',
                        'choices' => [
                            ['choice_text' => 'a character', 'is_correct' => true],
                            ['choice_text' => 'the setting', 'is_correct' => false],
                            ['choice_text' => 'the title', 'is_correct' => false],
                            ['choice_text' => 'the narrator', 'is_correct' => false],
                        ],
                        'explanation' => 'A personaje is a person, animal, or other figure that takes part in a story.',
                    ],
                    [
                        'question' => 'What does “autor” mean?',
                        'choices' => [
                            ['choice_text' => 'author', 'is_correct' => true],
                            ['choice_text' => 'reader', 'is_correct' => false],
                            ['choice_text' => 'character', 'is_correct' => false],
                            ['choice_text' => 'publisher', 'is_correct' => false],
                        ],
                        'explanation' => 'The autor is the person who creates or writes a literary work.',
                    ],
                    [
                        'question' => 'What is the “título” of a literary work?',
                        'choices' => [
                            ['choice_text' => 'its title', 'is_correct' => true],
                            ['choice_text' => 'its ending', 'is_correct' => false],
                            ['choice_text' => 'its main character', 'is_correct' => false],
                            ['choice_text' => 'its setting', 'is_correct' => false],
                        ],
                        'explanation' => 'The título is the name given to a book, poem, story, or other work.',
                    ],
                    [
                        'question' => 'Which word refers to the place and circumstances where a story happens?',
                        'choices' => [
                            ['choice_text' => 'el escenario', 'is_correct' => true],
                            ['choice_text' => 'el personaje', 'is_correct' => false],
                            ['choice_text' => 'el capítulo', 'is_correct' => false],
                            ['choice_text' => 'el título', 'is_correct' => false],
                        ],
                        'explanation' => 'The escenario refers to the setting or environment in which events take place.',
                    ],
                    [
                        'question' => 'What is “tema” in literary discussion?',
                        'choices' => [
                            ['choice_text' => 'the main theme or subject', 'is_correct' => true],
                            ['choice_text' => 'the author’s name', 'is_correct' => false],
                            ['choice_text' => 'the page number', 'is_correct' => false],
                            ['choice_text' => 'the book cover', 'is_correct' => false],
                        ],
                        'explanation' => 'The tema is the central subject or idea explored in a literary work.',
                    ],
                    [
                        'question' => 'Which word means “reader” in Spanish?',
                        'choices' => [
                            ['choice_text' => 'lector', 'is_correct' => true],
                            ['choice_text' => 'autor', 'is_correct' => false],
                            ['choice_text' => 'personaje', 'is_correct' => false],
                            ['choice_text' => 'narrador', 'is_correct' => false],
                        ],
                        'explanation' => '“Lector” is a reader: the person who reads a literary work.',
                    ],
                ],
            ],
            [
                'title' => 'Genres and Literary Forms',
                'description' => 'Recognize common Spanish literary genres and understand what distinguishes novels, poetry, drama, essays, and short stories.',
                'settings' => ['duration' => 20, 'passing_score' => 55],
                'questions' => [
                    [
                        'question' => 'Which genre is written mainly for performance by actors?',
                        'choices' => [
                            ['choice_text' => 'el teatro', 'is_correct' => true],
                            ['choice_text' => 'la novela', 'is_correct' => false],
                            ['choice_text' => 'la poesía', 'is_correct' => false],
                            ['choice_text' => 'el diccionario', 'is_correct' => false],
                        ],
                        'explanation' => 'Theater is written to be performed, usually by actors speaking dialogue and acting scenes.',
                    ],
                    [
                        'question' => 'What is “un poema”?',
                        'choices' => [
                            ['choice_text' => 'a poem', 'is_correct' => true],
                            ['choice_text' => 'a novel', 'is_correct' => false],
                            ['choice_text' => 'a biography', 'is_correct' => false],
                            ['choice_text' => 'an essay', 'is_correct' => false],
                        ],
                        'explanation' => 'A poema is a literary work of poetry, often organized in lines and sometimes stanzas.',
                    ],
                    [
                        'question' => 'Which form is usually a shorter work of fiction than a novel?',
                        'choices' => [
                            ['choice_text' => 'el cuento', 'is_correct' => true],
                            ['choice_text' => 'el capítulo', 'is_correct' => false],
                            ['choice_text' => 'el ensayo', 'is_correct' => false],
                            ['choice_text' => 'la obra completa', 'is_correct' => false],
                        ],
                        'explanation' => 'A cuento is generally shorter than a novela and focuses on a more limited narrative.',
                    ],
                    [
                        'question' => 'What is an “ensayo” in literature?',
                        'choices' => [
                            ['choice_text' => 'an essay', 'is_correct' => true],
                            ['choice_text' => 'a character', 'is_correct' => false],
                            ['choice_text' => 'a rhyme', 'is_correct' => false],
                            ['choice_text' => 'a chapter title', 'is_correct' => false],
                        ],
                        'explanation' => 'An ensayo is a prose text in which the writer develops ideas, arguments, or reflections on a topic.',
                    ],
                    [
                        'question' => 'Which literary genre commonly includes dialogue between characters for performance?',
                        'choices' => [
                            ['choice_text' => 'el drama', 'is_correct' => true],
                            ['choice_text' => 'la poesía lírica', 'is_correct' => false],
                            ['choice_text' => 'el diccionario', 'is_correct' => false],
                            ['choice_text' => 'la crónica deportiva', 'is_correct' => false],
                        ],
                        'explanation' => 'Drama is built around actions and dialogue and is intended for performance.',
                    ],
                    [
                        'question' => 'A collection of poems is most directly associated with which category?',
                        'choices' => [
                            ['choice_text' => 'poesía', 'is_correct' => true],
                            ['choice_text' => 'novela', 'is_correct' => false],
                            ['choice_text' => 'teatro', 'is_correct' => false],
                            ['choice_text' => 'manual técnico', 'is_correct' => false],
                        ],
                        'explanation' => 'A collection of poems belongs to poetry rather than narrative prose.',
                    ],
                    [
                        'question' => 'Which word refers to a group of lines in a poem?',
                        'choices' => [
                            ['choice_text' => 'la estrofa', 'is_correct' => true],
                            ['choice_text' => 'el capítulo', 'is_correct' => false],
                            ['choice_text' => 'el párrafo', 'is_correct' => false],
                            ['choice_text' => 'el escenario', 'is_correct' => false],
                        ],
                        'explanation' => 'An estrofa, or stanza, is a group of lines in a poem.',
                    ],
                    [
                        'question' => 'What is “verso” in poetry?',
                        'choices' => [
                            ['choice_text' => 'a line of poetry', 'is_correct' => true],
                            ['choice_text' => 'a chapter', 'is_correct' => false],
                            ['choice_text' => 'a character', 'is_correct' => false],
                            ['choice_text' => 'a plot summary', 'is_correct' => false],
                        ],
                        'explanation' => 'A verso is a single line or poetic unit in a poem.',
                    ],
                    [
                        'question' => 'Which form normally presents events in a longer fictional narrative?',
                        'choices' => [
                            ['choice_text' => 'la novela', 'is_correct' => true],
                            ['choice_text' => 'el verso', 'is_correct' => false],
                            ['choice_text' => 'la estrofa', 'is_correct' => false],
                            ['choice_text' => 'el diálogo teatral', 'is_correct' => false],
                        ],
                        'explanation' => 'A novela is a long-form fictional narrative, usually in prose.',
                    ],
                    [
                        'question' => 'What is a “tragedia”?',
                        'choices' => [
                            ['choice_text' => 'a dramatic work with serious conflict and often a painful ending', 'is_correct' => true],
                            ['choice_text' => 'a comedy with no conflict', 'is_correct' => false],
                            ['choice_text' => 'a short dictionary entry', 'is_correct' => false],
                            ['choice_text' => 'a personal letter', 'is_correct' => false],
                        ],
                        'explanation' => 'A tragedia is a dramatic form centered on serious conflict and often a disastrous or painful outcome.',
                    ],
                    [
                        'question' => 'What is a “comedia” in the traditional literary sense?',
                        'choices' => [
                            ['choice_text' => 'a dramatic work designed to entertain and often using humor', 'is_correct' => true],
                            ['choice_text' => 'a scientific report', 'is_correct' => false],
                            ['choice_text' => 'a poem with no characters', 'is_correct' => false],
                            ['choice_text' => 'a bibliography', 'is_correct' => false],
                        ],
                        'explanation' => 'Comedia commonly uses humor and situations intended to entertain the audience.',
                    ],
                ],
            ],
            [
                'title' => 'Authors and Famous Spanish Works',
                'description' => 'Build beginner familiarity with well-known Spanish authors and important literary works.',
                'settings' => ['duration' => 22, 'passing_score' => 60],
                'questions' => [
                    [
                        'question' => 'Who wrote “Don Quijote de la Mancha”?',
                        'choices' => [
                            ['choice_text' => 'Miguel de Cervantes', 'is_correct' => true],
                            ['choice_text' => 'Federico García Lorca', 'is_correct' => false],
                            ['choice_text' => 'Pablo Neruda', 'is_correct' => false],
                            ['choice_text' => 'Gabriel García Márquez', 'is_correct' => false],
                        ],
                        'explanation' => 'Miguel de Cervantes is the author of Don Quijote de la Mancha.',
                    ],
                    [
                        'question' => '“Don Quijote de la Mancha” is best described as which kind of work?',
                        'choices' => [
                            ['choice_text' => 'a novel', 'is_correct' => true],
                            ['choice_text' => 'a dictionary', 'is_correct' => false],
                            ['choice_text' => 'a scientific article', 'is_correct' => false],
                            ['choice_text' => 'a grammar textbook', 'is_correct' => false],
                        ],
                        'explanation' => 'Don Quijote is a famous Spanish novel by Miguel de Cervantes.',
                    ],
                    [
                        'question' => 'Which writer is closely associated with “Romancero gitano”?',
                        'choices' => [
                            ['choice_text' => 'Federico García Lorca', 'is_correct' => true],
                            ['choice_text' => 'Miguel de Cervantes', 'is_correct' => false],
                            ['choice_text' => 'Lope de Vega', 'is_correct' => false],
                            ['choice_text' => 'Benito Pérez Galdós', 'is_correct' => false],
                        ],
                        'explanation' => 'Federico García Lorca wrote Romancero gitano and is one of the best-known Spanish poets and playwrights.',
                    ],
                    [
                        'question' => 'Federico García Lorca is especially known for both poetry and what other literary form?',
                        'choices' => [
                            ['choice_text' => 'theater', 'is_correct' => true],
                            ['choice_text' => 'dictionaries', 'is_correct' => false],
                            ['choice_text' => 'travel guides', 'is_correct' => false],
                            ['choice_text' => 'scientific manuals', 'is_correct' => false],
                        ],
                        'explanation' => 'Lorca wrote important poetry as well as plays such as Bodas de sangre and La casa de Bernarda Alba.',
                    ],
                    [
                        'question' => 'Who wrote “La casa de Bernarda Alba”?',
                        'choices' => [
                            ['choice_text' => 'Federico García Lorca', 'is_correct' => true],
                            ['choice_text' => 'Miguel de Cervantes', 'is_correct' => false],
                            ['choice_text' => 'Antonio Machado', 'is_correct' => false],
                            ['choice_text' => 'Jorge Luis Borges', 'is_correct' => false],
                        ],
                        'explanation' => 'La casa de Bernarda Alba is a play by Federico García Lorca.',
                    ],
                    [
                        'question' => 'Which author wrote “Fortunata y Jacinta”?',
                        'choices' => [
                            ['choice_text' => 'Benito Pérez Galdós', 'is_correct' => true],
                            ['choice_text' => 'Federico García Lorca', 'is_correct' => false],
                            ['choice_text' => 'Miguel de Cervantes', 'is_correct' => false],
                            ['choice_text' => 'Pablo Neruda', 'is_correct' => false],
                        ],
                        'explanation' => 'Fortunata y Jacinta is a major novel by the Spanish writer Benito Pérez Galdós.',
                    ],
                    [
                        'question' => 'Who wrote “Campos de Castilla”?',
                        'choices' => [
                            ['choice_text' => 'Antonio Machado', 'is_correct' => true],
                            ['choice_text' => 'Lope de Vega', 'is_correct' => false],
                            ['choice_text' => 'Miguel de Cervantes', 'is_correct' => false],
                            ['choice_text' => 'Julio Cortázar', 'is_correct' => false],
                        ],
                        'explanation' => 'Campos de Castilla is a well-known poetry collection by Antonio Machado.',
                    ],
                    [
                        'question' => 'Which poet is famous for the work “Veinte poemas de amor y una canción desesperada”?',
                        'choices' => [
                            ['choice_text' => 'Pablo Neruda', 'is_correct' => true],
                            ['choice_text' => 'Antonio Machado', 'is_correct' => false],
                            ['choice_text' => 'Federico García Lorca', 'is_correct' => false],
                            ['choice_text' => 'Miguel de Cervantes', 'is_correct' => false],
                        ],
                        'explanation' => 'Veinte poemas de amor y una canción desesperada is one of Pablo Neruda’s best-known poetry collections.',
                    ],
                    [
                        'question' => 'Gabriel García Márquez is most closely associated with which Spanish-language literary movement?',
                        'choices' => [
                            ['choice_text' => 'el realismo mágico', 'is_correct' => true],
                            ['choice_text' => 'el romanticismo medieval', 'is_correct' => false],
                            ['choice_text' => 'el teatro clásico', 'is_correct' => false],
                            ['choice_text' => 'la poesía modernista española', 'is_correct' => false],
                        ],
                        'explanation' => 'García Márquez is strongly associated with magical realism, especially through works such as Cien años de soledad.',
                    ],
                    [
                        'question' => 'Who wrote “Cien años de soledad”?',
                        'choices' => [
                            ['choice_text' => 'Gabriel García Márquez', 'is_correct' => true],
                            ['choice_text' => 'Miguel de Cervantes', 'is_correct' => false],
                            ['choice_text' => 'Federico García Lorca', 'is_correct' => false],
                            ['choice_text' => 'Benito Pérez Galdós', 'is_correct' => false],
                        ],
                        'explanation' => 'Cien años de soledad was written by Colombian author Gabriel García Márquez.',
                    ],
                    [
                        'question' => 'Which writer is famous for the play “Fuenteovejuna”?',
                        'choices' => [
                            ['choice_text' => 'Lope de Vega', 'is_correct' => true],
                            ['choice_text' => 'Miguel de Cervantes', 'is_correct' => false],
                            ['choice_text' => 'Pablo Neruda', 'is_correct' => false],
                            ['choice_text' => 'Gabriel García Márquez', 'is_correct' => false],
                        ],
                        'explanation' => 'Fuenteovejuna is a famous play by the Spanish playwright Lope de Vega.',
                    ],
                ],
            ],
            [
                'title' => 'Reading Spanish Literary Texts',
                'description' => 'Practice basic skills for identifying characters, setting, plot, narrator, theme, and key details in literary texts.',
                'settings' => ['duration' => 22, 'passing_score' => 60],
                'questions' => [
                    [
                        'question' => 'When reading a story, what does “¿Quién es el protagonista?” ask?',
                        'choices' => [
                            ['choice_text' => 'Who is the main character?', 'is_correct' => true],
                            ['choice_text' => 'Where does the story happen?', 'is_correct' => false],
                            ['choice_text' => 'Who wrote the story?', 'is_correct' => false],
                            ['choice_text' => 'What is the title?', 'is_correct' => false],
                        ],
                        'explanation' => 'The protagonista is the central character around whom the main action develops.',
                    ],
                    [
                        'question' => 'What does “¿Dónde ocurre la historia?” ask?',
                        'choices' => [
                            ['choice_text' => 'Where does the story take place?', 'is_correct' => true],
                            ['choice_text' => 'Who is the author?', 'is_correct' => false],
                            ['choice_text' => 'What is the theme?', 'is_correct' => false],
                            ['choice_text' => 'How many chapters are there?', 'is_correct' => false],
                        ],
                        'explanation' => 'This question asks about the setting or location of the story.',
                    ],
                    [
                        'question' => 'What does “al principio” mean in a story?',
                        'choices' => [
                            ['choice_text' => 'at the beginning', 'is_correct' => true],
                            ['choice_text' => 'in the middle', 'is_correct' => false],
                            ['choice_text' => 'at the end', 'is_correct' => false],
                            ['choice_text' => 'outside the story', 'is_correct' => false],
                        ],
                        'explanation' => '“Al principio” tells the reader that something happens at the start of the narrative.',
                    ],
                    [
                        'question' => 'What does “finalmente” commonly signal?',
                        'choices' => [
                            ['choice_text' => 'finally or in the end', 'is_correct' => true],
                            ['choice_text' => 'the first event', 'is_correct' => false],
                            ['choice_text' => 'a new character', 'is_correct' => false],
                            ['choice_text' => 'the setting', 'is_correct' => false],
                        ],
                        'explanation' => '“Finalmente” introduces a final event, result, or stage of a sequence.',
                    ],
                    [
                        'question' => 'Which word refers to the sequence of events in a story?',
                        'choices' => [
                            ['choice_text' => 'la trama', 'is_correct' => true],
                            ['choice_text' => 'el título', 'is_correct' => false],
                            ['choice_text' => 'la portada', 'is_correct' => false],
                            ['choice_text' => 'la métrica', 'is_correct' => false],
                        ],
                        'explanation' => 'La trama is the plot: the connected events that make up the story.',
                    ],
                    [
                        'question' => 'What is the “narrador”?',
                        'choices' => [
                            ['choice_text' => 'the narrator', 'is_correct' => true],
                            ['choice_text' => 'the main character only', 'is_correct' => false],
                            ['choice_text' => 'the author’s publisher', 'is_correct' => false],
                            ['choice_text' => 'the book cover', 'is_correct' => false],
                        ],
                        'explanation' => 'The narrador is the voice that tells or presents the story.',
                    ],
                    [
                        'question' => 'Which question focuses on the theme of a story?',
                        'choices' => [
                            ['choice_text' => '¿Cuál es el tema principal?', 'is_correct' => true],
                            ['choice_text' => '¿Cuántas páginas tiene?', 'is_correct' => false],
                            ['choice_text' => '¿Quién publicó el libro?', 'is_correct' => false],
                            ['choice_text' => '¿Cuál es el precio?', 'is_correct' => false],
                        ],
                        'explanation' => 'This asks for the central subject or idea explored by the story.',
                    ],
                    [
                        'question' => 'A reader identifies repeated references to family, loyalty, and friendship. These details may help identify what?',
                        'choices' => [
                            ['choice_text' => 'the theme', 'is_correct' => true],
                            ['choice_text' => 'the page number', 'is_correct' => false],
                            ['choice_text' => 'the author’s address', 'is_correct' => false],
                            ['choice_text' => 'the chapter count', 'is_correct' => false],
                        ],
                        'explanation' => 'Repeated ideas such as family, loyalty, or friendship can point to the work’s central themes.',
                    ],
                    [
                        'question' => 'If a character says, “Estoy muy preocupado”, what can a reader identify?',
                        'choices' => [
                            ['choice_text' => 'the character\'s feeling', 'is_correct' => true],
                            ['choice_text' => 'the setting', 'is_correct' => false],
                            ['choice_text' => 'the author’s biography', 'is_correct' => false],
                            ['choice_text' => 'the book title', 'is_correct' => false],
                        ],
                        'explanation' => 'The phrase directly expresses the character’s emotional state: worry.',
                    ],
                    [
                        'question' => 'What does “describir” mean when discussing a literary text?',
                        'choices' => [
                            ['choice_text' => 'to describe', 'is_correct' => true],
                            ['choice_text' => 'to publish', 'is_correct' => false],
                            ['choice_text' => 'to translate only', 'is_correct' => false],
                            ['choice_text' => 'to memorize', 'is_correct' => false],
                        ],
                        'explanation' => 'To describir means to present details about a person, place, object, or situation.',
                    ],
                    [
                        'question' => 'Why can the first paragraph of a story be important?',
                        'choices' => [
                            ['choice_text' => 'It may introduce the setting, characters, or situation.', 'is_correct' => true],
                            ['choice_text' => 'It always gives the ending.', 'is_correct' => false],
                            ['choice_text' => 'It always lists every character.', 'is_correct' => false],
                            ['choice_text' => 'It always explains the author\'s life.', 'is_correct' => false],
                        ],
                        'explanation' => 'The opening often gives readers essential context about who, where, or what the story is about.',
                    ],
                ],
            ],
            [
                'title' => 'Basic Literary Devices',
                'description' => 'Recognize common beginner literary devices and understand how writers use them to create images, emotion, and emphasis.',
                'settings' => ['duration' => 20, 'passing_score' => 60],
                'questions' => [
                    [
                        'question' => 'What is a “metáfora”?',
                        'choices' => [
                            ['choice_text' => 'a metaphor', 'is_correct' => true],
                            ['choice_text' => 'a chapter', 'is_correct' => false],
                            ['choice_text' => 'a biography', 'is_correct' => false],
                            ['choice_text' => 'a rhyme dictionary', 'is_correct' => false],
                        ],
                        'explanation' => 'A metaphor describes one thing in terms of another to create a comparison or image without using “como.”',
                    ],
                    [
                        'question' => 'Which sentence is an example of a simile using “como”?',
                        'choices' => [
                            ['choice_text' => 'Sus ojos brillan como estrellas.', 'is_correct' => true],
                            ['choice_text' => 'Sus ojos son estrellas del libro.', 'is_correct' => false],
                            ['choice_text' => 'Sus ojos tienen dos capítulos.', 'is_correct' => false],
                            ['choice_text' => 'Sus ojos leen el poema.', 'is_correct' => false],
                        ],
                        'explanation' => 'The sentence compares eyes to stars using “como,” which is a common form of simile.',
                    ],
                    [
                        'question' => 'What does “personificación” do?',
                        'choices' => [
                            ['choice_text' => 'It gives human qualities to non-human things.', 'is_correct' => true],
                            ['choice_text' => 'It removes all description.', 'is_correct' => false],
                            ['choice_text' => 'It lists the chapters.', 'is_correct' => false],
                            ['choice_text' => 'It explains the author\'s biography.', 'is_correct' => false],
                        ],
                        'explanation' => 'Personification presents objects, animals, or abstract ideas as if they had human actions or qualities.',
                    ],
                    [
                        'question' => 'Which sentence uses personification?',
                        'choices' => [
                            ['choice_text' => 'El viento susurraba entre los árboles.', 'is_correct' => true],
                            ['choice_text' => 'El viento tiene diez metros.', 'is_correct' => false],
                            ['choice_text' => 'El viento aparece en la página cinco.', 'is_correct' => false],
                            ['choice_text' => 'El viento es una palabra española.', 'is_correct' => false],
                        ],
                        'explanation' => 'The wind is described as whispering, a human-like action, so the sentence uses personification.',
                    ],
                    [
                        'question' => 'What is “rima” in poetry?',
                        'choices' => [
                            ['choice_text' => 'rhyme', 'is_correct' => true],
                            ['choice_text' => 'setting', 'is_correct' => false],
                            ['choice_text' => 'plot', 'is_correct' => false],
                            ['choice_text' => 'character', 'is_correct' => false],
                        ],
                        'explanation' => 'Rima refers to the repetition of similar sounds, especially at the ends of poetic lines.',
                    ],
                    [
                        'question' => 'Why might a poet repeat a word or phrase?',
                        'choices' => [
                            ['choice_text' => 'To create emphasis, rhythm, or a strong effect.', 'is_correct' => true],
                            ['choice_text' => 'Only to make the poem longer.', 'is_correct' => false],
                            ['choice_text' => 'Only to identify the author.', 'is_correct' => false],
                            ['choice_text' => 'Only to show the page number.', 'is_correct' => false],
                        ],
                        'explanation' => 'Repetition can highlight an idea and also create rhythm or emotional intensity.',
                    ],
                    [
                        'question' => 'What does “símbolo” mean in literary discussion?',
                        'choices' => [
                            ['choice_text' => 'a symbol', 'is_correct' => true],
                            ['choice_text' => 'a chapter', 'is_correct' => false],
                            ['choice_text' => 'a dictionary', 'is_correct' => false],
                            ['choice_text' => 'a punctuation mark', 'is_correct' => false],
                        ],
                        'explanation' => 'A symbol is an object, image, or idea that represents a deeper meaning in a text.',
                    ],
                    [
                        'question' => 'A writer repeatedly uses a road to represent a person\'s life journey. What is the road functioning as?',
                        'choices' => [
                            ['choice_text' => 'a symbol', 'is_correct' => true],
                            ['choice_text' => 'a narrator', 'is_correct' => false],
                            ['choice_text' => 'a chapter', 'is_correct' => false],
                            ['choice_text' => 'a character name', 'is_correct' => false],
                        ],
                        'explanation' => 'The road stands for a larger idea, so it functions as a symbol.',
                    ],
                    [
                        'question' => 'What does “imagen” or “imagen literaria” often provide?',
                        'choices' => [
                            ['choice_text' => 'a vivid picture or sensory impression', 'is_correct' => true],
                            ['choice_text' => 'a bibliography', 'is_correct' => false],
                            ['choice_text' => 'a publication date', 'is_correct' => false],
                            ['choice_text' => 'a grammar rule', 'is_correct' => false],
                        ],
                        'explanation' => 'Literary imagery helps readers imagine sights, sounds, smells, textures, or other sensory details.',
                    ],
                    [
                        'question' => 'Why do writers use literary devices?',
                        'choices' => [
                            ['choice_text' => 'To make language more expressive and meaningful.', 'is_correct' => true],
                            ['choice_text' => 'Only to add page numbers.', 'is_correct' => false],
                            ['choice_text' => 'Only to identify the publisher.', 'is_correct' => false],
                            ['choice_text' => 'Only to avoid using verbs.', 'is_correct' => false],
                        ],
                        'explanation' => 'Devices can create images, comparisons, rhythm, emotion, or emphasis and make a text more vivid.',
                    ],
                ],
            ],
        ];

        foreach ($quizzes as $quizData) {
            $settings = $quizData['settings'];

            $quiz = Quiz::updateOrCreate(
                [
                    'subject_id' => $subject->id,
                    'title' => $quizData['title'],
                ],
                [
                    'owner_id' => null,
                    'description' => $quizData['description'],
                    'duration' => $settings['duration'],
                    'passing_score' => $settings['passing_score'],
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
