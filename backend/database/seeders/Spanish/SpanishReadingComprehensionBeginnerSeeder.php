<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class ReadingComprehensionBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'reading-comprehension')->firstOrFail();

        $quizzes = [
            [
                'title' => 'Everyday Spanish Reading',
                'description' => 'Read short everyday texts about people, routines, and places, then answer questions that check direct understanding and simple details.',
                'settings' => ['duration' => 15, 'passing_score' => 50],
                'questions' => [
                    [
                        'question' => 'Lee: “Lucía vive en una ciudad pequeña. Cada mañana va a la panadería antes de trabajar. Compra pan fresco y vuelve a casa para preparar el desayuno.” ¿Dónde vive Lucía?',
                        'choices' => [
                            ['choice_text' => 'En una ciudad pequeña.', 'is_correct' => true],
                            ['choice_text' => 'En una granja.', 'is_correct' => false],
                            ['choice_text' => 'En la capital.', 'is_correct' => false],
                            ['choice_text' => 'En un pueblo costero.', 'is_correct' => false],
                        ],
                        'explanation' => 'The text directly says that Lucía lives in a small city.',
                    ],
                    [
                        'question' => 'Lee: “Lucía vive en una ciudad pequeña. Cada mañana va a la panadería antes de trabajar. Compra pan fresco y vuelve a casa para preparar el desayuno.” ¿Cuándo va a la panadería?',
                        'choices' => [
                            ['choice_text' => 'Cada mañana.', 'is_correct' => true],
                            ['choice_text' => 'Cada noche.', 'is_correct' => false],
                            ['choice_text' => 'Los domingos solamente.', 'is_correct' => false],
                            ['choice_text' => 'Después del trabajo.', 'is_correct' => false],
                        ],
                        'explanation' => 'The phrase “Cada mañana” clearly tells us when she goes to the bakery.',
                    ],
                    [
                        'question' => 'Lee: “Lucía vive en una ciudad pequeña. Cada mañana va a la panadería antes de trabajar. Compra pan fresco y vuelve a casa para preparar el desayuno.” ¿Qué compra Lucía?',
                        'choices' => [
                            ['choice_text' => 'Pan fresco.', 'is_correct' => true],
                            ['choice_text' => 'Café', 'is_correct' => false],
                            ['choice_text' => 'Fruta.', 'is_correct' => false],
                            ['choice_text' => 'Pasteles.', 'is_correct' => false],
                        ],
                        'explanation' => 'The passage says that she buys fresh bread.',
                    ],
                    [
                        'question' => 'Lee: “Tomás trabaja en una biblioteca. Le gusta ayudar a los estudiantes a encontrar libros. Los viernes, después del trabajo, juega al fútbol con sus amigos.” ¿Dónde trabaja Tomás?',
                        'choices' => [
                            ['choice_text' => 'En una biblioteca.', 'is_correct' => true],
                            ['choice_text' => 'En una escuela.', 'is_correct' => false],
                            ['choice_text' => 'En un banco.', 'is_correct' => false],
                            ['choice_text' => 'En una librería.', 'is_correct' => false],
                        ],
                        'explanation' => 'The first sentence says Tomás works in a library.',
                    ],
                    [
                        'question' => 'Lee: “Tomás trabaja en una biblioteca. Le gusta ayudar a los estudiantes a encontrar libros. Los viernes, después del trabajo, juega al fútbol con sus amigos.” ¿Qué hace los viernes después del trabajo?',
                        'choices' => [
                            ['choice_text' => 'Juega al fútbol.', 'is_correct' => true],
                            ['choice_text' => 'Va a la biblioteca.', 'is_correct' => false],
                            ['choice_text' => 'Busca libros.', 'is_correct' => false],
                            ['choice_text' => 'Estudia con los alumnos.', 'is_correct' => false],
                        ],
                        'explanation' => 'The passage says that on Fridays he plays football with his friends after work.',
                    ],
                    [
                        'question' => 'Lee: “Ana tiene un perro llamado Bruno. Todas las tardes salen al parque. Bruno corre mucho, pero Ana prefiere caminar despacio.” ¿Cómo se llama el perro?',
                        'choices' => [
                            ['choice_text' => 'Bruno.', 'is_correct' => true],
                            ['choice_text' => 'Ana.', 'is_correct' => false],
                            ['choice_text' => 'Paco.', 'is_correct' => false],
                            ['choice_text' => 'Luis.', 'is_correct' => false],
                        ],
                        'explanation' => 'The text explicitly names Ana\'s dog Bruno.',
                    ],
                    [
                        'question' => 'Lee: “Ana tiene un perro llamado Bruno. Todas las tardes salen al parque. Bruno corre mucho, pero Ana prefiere caminar despacio.” ¿Quién corre mucho?',
                        'choices' => [
                            ['choice_text' => 'Bruno.', 'is_correct' => true],
                            ['choice_text' => 'Ana.', 'is_correct' => false],
                            ['choice_text' => 'Los dos.', 'is_correct' => false],
                            ['choice_text' => 'Nadie.', 'is_correct' => false],
                        ],
                        'explanation' => 'The passage contrasts Bruno, who runs a lot, with Ana, who prefers to walk slowly.',
                    ],
                    [
                        'question' => 'Lee: “Marta estudia español porque quiere viajar a Colombia. Practica veinte minutos cada noche y escucha podcasts durante el fin de semana.” ¿Por qué estudia español Marta?',
                        'choices' => [
                            ['choice_text' => 'Porque quiere viajar a Colombia.', 'is_correct' => true],
                            ['choice_text' => 'Porque necesita un trabajo nuevo.', 'is_correct' => false],
                            ['choice_text' => 'Porque vive en España.', 'is_correct' => false],
                            ['choice_text' => 'Porque le gusta la televisión.', 'is_correct' => false],
                        ],
                        'explanation' => 'The reason is stated directly in the first sentence.',
                    ],
                    [
                        'question' => 'Lee: “Marta estudia español porque quiere viajar a Colombia. Practica veinte minutos cada noche y escucha podcasts durante el fin de semana.” ¿Cuánto tiempo practica cada noche?',
                        'choices' => [
                            ['choice_text' => 'Veinte minutos.', 'is_correct' => true],
                            ['choice_text' => 'Una hora.', 'is_correct' => false],
                            ['choice_text' => 'Diez minutos.', 'is_correct' => false],
                            ['choice_text' => 'Dos horas.', 'is_correct' => false],
                        ],
                        'explanation' => 'The passage says she practices for twenty minutes each night.',
                    ],
                    [
                        'question' => 'Lee: “El sábado, Diego fue al mercado con su madre. Compraron verduras, queso y naranjas. Después fueron a casa y prepararon el almuerzo juntos.” ¿Con quién fue Diego al mercado?',
                        'choices' => [
                            ['choice_text' => 'Con su madre.', 'is_correct' => true],
                            ['choice_text' => 'Con su hermano.', 'is_correct' => false],
                            ['choice_text' => 'Con un amigo.', 'is_correct' => false],
                            ['choice_text' => 'Solo.', 'is_correct' => false],
                        ],
                        'explanation' => 'The text says Diego went to the market with his mother.',
                    ],
                ],
            ],
            [
                'title' => 'Places, Schedules, and Simple Details',
                'description' => 'Practice finding specific information in short descriptions of shops, classes, schedules, and daily plans.',
                'settings' => ['duration' => 20, 'passing_score' => 55],
                'questions' => [
                    [
                        'question' => 'Lee: “La cafetería del barrio abre a las siete de la mañana y cierra a las seis de la tarde. Los sábados abre una hora más tarde.” ¿A qué hora abre la cafetería los sábados?',
                        'choices' => [
                            ['choice_text' => 'A las ocho de la mañana.', 'is_correct' => true],
                            ['choice_text' => 'A las siete de la mañana.', 'is_correct' => false],
                            ['choice_text' => 'A las nueve de la mañana.', 'is_correct' => false],
                            ['choice_text' => 'A las seis de la tarde.', 'is_correct' => false],
                        ],
                        'explanation' => 'It normally opens at seven, and on Saturdays it opens one hour later, at eight.',
                    ],
                    [
                        'question' => 'Lee: “La cafetería del barrio abre a las siete de la mañana y cierra a las seis de la tarde. Los sábados abre una hora más tarde.” ¿Cuándo abre una hora más tarde?',
                        'choices' => [
                            ['choice_text' => 'Los sábados.', 'is_correct' => true],
                            ['choice_text' => 'Los domingos.', 'is_correct' => false],
                            ['choice_text' => 'Todos los días.', 'is_correct' => false],
                            ['choice_text' => 'Los viernes.', 'is_correct' => false],
                        ],
                        'explanation' => 'The second sentence specifically mentions Saturdays.',
                    ],
                    [
                        'question' => 'Lee: “El curso de fotografía empieza el lunes. Las clases son los lunes y miércoles de seis a ocho de la tarde. No hay clase el viernes.” ¿Qué días hay clase?',
                        'choices' => [
                            ['choice_text' => 'Lunes y miércoles.', 'is_correct' => true],
                            ['choice_text' => 'Martes y jueves.', 'is_correct' => false],
                            ['choice_text' => 'Miércoles y viernes.', 'is_correct' => false],
                            ['choice_text' => 'Lunes y viernes.', 'is_correct' => false],
                        ],
                        'explanation' => 'The schedule clearly states classes are on Mondays and Wednesdays.',
                    ],
                    [
                        'question' => 'Lee: “El curso de fotografía empieza el lunes. Las clases son los lunes y miércoles de seis a ocho de la tarde. No hay clase el viernes.” ¿A qué hora terminan las clases?',
                        'choices' => [
                            ['choice_text' => 'A las ocho de la tarde.', 'is_correct' => true],
                            ['choice_text' => 'A las seis de la tarde.', 'is_correct' => false],
                            ['choice_text' => 'A las siete de la tarde.', 'is_correct' => false],
                            ['choice_text' => 'A las nueve de la noche.', 'is_correct' => false],
                        ],
                        'explanation' => 'The classes run from six to eight, so they finish at eight.',
                    ],
                    [
                        'question' => 'Lee: “En el centro hay una farmacia, un supermercado y una pequeña librería. La farmacia está frente al supermercado. La librería está entre los dos edificios.” ¿Qué está entre la farmacia y el supermercado?',
                        'choices' => [
                            ['choice_text' => 'La librería.', 'is_correct' => true],
                            ['choice_text' => 'El centro.', 'is_correct' => false],
                            ['choice_text' => 'Una escuela.', 'is_correct' => false],
                            ['choice_text' => 'Un restaurante.', 'is_correct' => false],
                        ],
                        'explanation' => 'The passage says the bookstore is between the pharmacy and the supermarket.',
                    ],
                    [
                        'question' => 'Lee: “En el centro hay una farmacia, un supermercado y una pequeña librería. La farmacia está frente al supermercado. La librería está entre los dos edificios.” ¿Qué está frente al supermercado?',
                        'choices' => [
                            ['choice_text' => 'La farmacia.', 'is_correct' => true],
                            ['choice_text' => 'La librería.', 'is_correct' => false],
                            ['choice_text' => 'La escuela.', 'is_correct' => false],
                            ['choice_text' => 'El restaurante.', 'is_correct' => false],
                        ],
                        'explanation' => 'The passage says the pharmacy is opposite the supermarket.',
                    ],
                    [
                        'question' => 'Lee: “Pedro trabaja de lunes a jueves en una oficina del centro. Los viernes trabaja desde casa. Le gusta el viernes porque puede desayunar con su familia.” ¿Dónde trabaja Pedro los viernes?',
                        'choices' => [
                            ['choice_text' => 'Desde casa.', 'is_correct' => true],
                            ['choice_text' => 'En la oficina del centro.', 'is_correct' => false],
                            ['choice_text' => 'En una cafetería.', 'is_correct' => false],
                            ['choice_text' => 'En la casa de un amigo.', 'is_correct' => false],
                        ],
                        'explanation' => 'The passage directly says he works from home on Fridays.',
                    ],
                    [
                        'question' => 'Lee: “Pedro trabaja de lunes a jueves en una oficina del centro. Los viernes trabaja desde casa. Le gusta el viernes porque puede desayunar con su familia.” ¿Por qué le gusta el viernes?',
                        'choices' => [
                            ['choice_text' => 'Porque puede desayunar con su familia.', 'is_correct' => true],
                            ['choice_text' => 'Porque no trabaja.', 'is_correct' => false],
                            ['choice_text' => 'Porque sale del país.', 'is_correct' => false],
                            ['choice_text' => 'Porque trabaja en una oficina nueva.', 'is_correct' => false],
                        ],
                        'explanation' => 'He likes Friday because working from home lets him have breakfast with his family.',
                    ],
                    [
                        'question' => 'Lee: “La tienda de ropa tiene descuentos esta semana. Las camisetas cuestan diez euros y las chaquetas veinte. El sábado, la tienda cierra a las cuatro.” ¿Cuánto cuesta una camiseta?',
                        'choices' => [
                            ['choice_text' => 'Diez euros.', 'is_correct' => true],
                            ['choice_text' => 'Veinte euros.', 'is_correct' => false],
                            ['choice_text' => 'Quince euros.', 'is_correct' => false],
                            ['choice_text' => 'Cinco euros.', 'is_correct' => false],
                        ],
                        'explanation' => 'The passage states that T-shirts cost ten euros.',
                    ],
                    [
                        'question' => 'Lee: “La tienda de ropa tiene descuentos esta semana. Las camisetas cuestan diez euros y las chaquetas veinte. El sábado, la tienda cierra a las cuatro.” ¿Qué producto cuesta más?',
                        'choices' => [
                            ['choice_text' => 'Las chaquetas.', 'is_correct' => true],
                            ['choice_text' => 'Las camisetas.', 'is_correct' => false],
                            ['choice_text' => 'Ambos cuestan igual.', 'is_correct' => false],
                            ['choice_text' => 'Ninguno.', 'is_correct' => false],
                        ],
                        'explanation' => 'A jacket costs twenty euros, while a T-shirt costs ten.',
                    ],
                    [
                        'question' => 'Lee: “El museo es gratis para los niños menores de doce años. Los adultos pagan cinco euros. El domingo por la mañana hay una visita guiada.” ¿Quién paga cinco euros?',
                        'choices' => [
                            ['choice_text' => 'Los adultos.', 'is_correct' => true],
                            ['choice_text' => 'Los niños menores de doce años.', 'is_correct' => false],
                            ['choice_text' => 'Todos los visitantes.', 'is_correct' => false],
                            ['choice_text' => 'Solo los estudiantes.', 'is_correct' => false],
                        ],
                        'explanation' => 'The text states that adults pay five euros while younger children enter for free.',
                    ],
                ],
            ],
            [
                'title' => 'Short Stories and Main Ideas',
                'description' => 'Read slightly longer beginner passages and identify the main idea, sequence of events, and reasons behind simple actions.',
                'settings' => ['duration' => 20, 'passing_score' => 60],
                'questions' => [
                    [
                        'question' => 'Lee: “El viernes por la tarde, Sofía terminó su trabajo temprano. En vez de volver directamente a casa, pasó por la biblioteca para devolver dos libros. Después compró fruta y tomó el autobús.” ¿Qué hizo primero?',
                        'choices' => [
                            ['choice_text' => 'Terminó su trabajo.', 'is_correct' => true],
                            ['choice_text' => 'Compró fruta.', 'is_correct' => false],
                            ['choice_text' => 'Tomó el autobús.', 'is_correct' => false],
                            ['choice_text' => 'Volvió directamente a casa.', 'is_correct' => false],
                        ],
                        'explanation' => 'The first event mentioned is that Sofía finished work early.',
                    ],
                    [
                        'question' => 'Lee: “El viernes por la tarde, Sofía terminó su trabajo temprano. En vez de volver directamente a casa, pasó por la biblioteca para devolver dos libros. Después compró fruta y tomó el autobús.” ¿Por qué fue a la biblioteca?',
                        'choices' => [
                            ['choice_text' => 'Para devolver dos libros.', 'is_correct' => true],
                            ['choice_text' => 'Para comprar fruta.', 'is_correct' => false],
                            ['choice_text' => 'Para tomar el autobús.', 'is_correct' => false],
                            ['choice_text' => 'Para trabajar.', 'is_correct' => false],
                        ],
                        'explanation' => 'She went to the library to return two books.',
                    ],
                    [
                        'question' => 'Lee: “El viernes por la tarde, Sofía terminó su trabajo temprano. En vez de volver directamente a casa, pasó por la biblioteca para devolver dos libros. Después compró fruta y tomó el autobús.” ¿Qué hizo después de ir a la biblioteca?',
                        'choices' => [
                            ['choice_text' => 'Compró fruta.', 'is_correct' => true],
                            ['choice_text' => 'Volvió al trabajo.', 'is_correct' => false],
                            ['choice_text' => 'Compró libros.', 'is_correct' => false],
                            ['choice_text' => 'Tomó un tren.', 'is_correct' => false],
                        ],
                        'explanation' => 'The word “Después” tells us that she bought fruit after the library visit.',
                    ],
                    [
                        'question' => 'Lee: “Nicolás quería cocinar una sopa para sus amigos. Tenía verduras en casa, pero no tenía suficiente sal. Caminó hasta una pequeña tienda y compró un paquete. Cuando regresó, preparó la sopa y todos comieron juntos.” ¿Qué le faltaba a Nicolás?',
                        'choices' => [
                            ['choice_text' => 'Sal.', 'is_correct' => true],
                            ['choice_text' => 'Verduras.', 'is_correct' => false],
                            ['choice_text' => 'Agua.', 'is_correct' => false],
                            ['choice_text' => 'Pan.', 'is_correct' => false],
                        ],
                        'explanation' => 'The passage says he had vegetables but did not have enough salt.',
                    ],
                    [
                        'question' => 'Lee: “Nicolás quería cocinar una sopa para sus amigos. Tenía verduras en casa, pero no tenía suficiente sal. Caminó hasta una pequeña tienda y compró un paquete. Cuando regresó, preparó la sopa y todos comieron juntos.” ¿Por qué fue a la tienda?',
                        'choices' => [
                            ['choice_text' => 'Porque necesitaba sal.', 'is_correct' => true],
                            ['choice_text' => 'Porque quería comprar verduras.', 'is_correct' => false],
                            ['choice_text' => 'Porque quería comer solo.', 'is_correct' => false],
                            ['choice_text' => 'Porque tenía que trabajar.', 'is_correct' => false],
                        ],
                        'explanation' => 'He went to the shop because he needed more salt for the soup.',
                    ],
                    [
                        'question' => 'Lee: “Nicolás quería cocinar una sopa para sus amigos. Tenía verduras en casa, pero no tenía suficiente sal. Caminó hasta una pequeña tienda y compró un paquete. Cuando regresó, preparó la sopa y todos comieron juntos.” ¿Qué pasó al final?',
                        'choices' => [
                            ['choice_text' => 'Todos comieron juntos.', 'is_correct' => true],
                            ['choice_text' => 'Nicolás fue a trabajar.', 'is_correct' => false],
                            ['choice_text' => 'Compraron otra sopa.', 'is_correct' => false],
                            ['choice_text' => 'Sus amigos se fueron antes de comer.', 'is_correct' => false],
                        ],
                        'explanation' => 'The final event is that everyone ate together.',
                    ],
                    [
                        'question' => 'Lee: “Clara está aprendiendo a usar una bicicleta. Al principio le cuesta mantener el equilibrio, pero practica veinte minutos cada tarde. Después de dos semanas, puede montar sola por la calle de su barrio.” ¿Qué problema tiene Clara al principio?',
                        'choices' => [
                            ['choice_text' => 'Le cuesta mantener el equilibrio.', 'is_correct' => true],
                            ['choice_text' => 'No tiene bicicleta.', 'is_correct' => false],
                            ['choice_text' => 'No conoce su barrio.', 'is_correct' => false],
                            ['choice_text' => 'No tiene tiempo para practicar.', 'is_correct' => false],
                        ],
                        'explanation' => 'The text directly identifies balance as her initial difficulty.',
                    ],
                    [
                        'question' => 'Lee: “Clara está aprendiendo a usar una bicicleta. Al principio le cuesta mantener el equilibrio, pero practica veinte minutos cada tarde. Después de dos semanas, puede montar sola por la calle de su barrio.” ¿Qué cambia después de dos semanas?',
                        'choices' => [
                            ['choice_text' => 'Puede montar sola.', 'is_correct' => true],
                            ['choice_text' => 'Deja de practicar.', 'is_correct' => false],
                            ['choice_text' => 'Compra otra bicicleta.', 'is_correct' => false],
                            ['choice_text' => 'Se muda a otra calle.', 'is_correct' => false],
                        ],
                        'explanation' => 'The passage says that after two weeks she can ride by herself.',
                    ],
                    [
                        'question' => 'Lee: “Clara está aprendiendo a usar una bicicleta. Al principio le cuesta mantener el equilibrio, pero practica veinte minutos cada tarde. Después de dos semanas, puede montar sola por la calle de su barrio.” ¿Qué ayuda a Clara a mejorar?',
                        'choices' => [
                            ['choice_text' => 'La práctica diaria.', 'is_correct' => true],
                            ['choice_text' => 'Un coche nuevo.', 'is_correct' => false],
                            ['choice_text' => 'Un viaje.', 'is_correct' => false],
                            ['choice_text' => 'Dormir menos.', 'is_correct' => false],
                        ],
                        'explanation' => 'Her regular practice is the clear reason she improves.',
                    ],
                    [
                        'question' => 'Lee: “Mario tiene una entrevista el martes. El lunes por la noche prepara su ropa, revisa la dirección y pone dos alarmas. El martes sale de casa temprano y llega diez minutos antes.” ¿Qué hace Mario el lunes por la noche?',
                        'choices' => [
                            ['choice_text' => 'Prepara su ropa y revisa la dirección.', 'is_correct' => true],
                            ['choice_text' => 'Va a la entrevista.', 'is_correct' => false],
                            ['choice_text' => 'Llega diez minutos tarde.', 'is_correct' => false],
                            ['choice_text' => 'Compra un billete de tren.', 'is_correct' => false],
                        ],
                        'explanation' => 'Those are the preparation steps described for Monday night.',
                    ],
                ],
            ],
            [
                'title' => 'Finding Meaning from Context',
                'description' => 'Use context clues to understand simple words, expressions, and relationships without translating every sentence.',
                'settings' => ['duration' => 25, 'passing_score' => 60],
                'questions' => [
                    [
                        'question' => 'Lee: “La mañana estaba fría, así que Daniel se puso una chaqueta antes de salir.” ¿Qué significa “fría” en este contexto?',
                        'choices' => [
                            ['choice_text' => 'Con poca temperatura.', 'is_correct' => true],
                            ['choice_text' => 'Con mucha lluvia solamente.', 'is_correct' => false],
                            ['choice_text' => 'Con mucho sol.', 'is_correct' => false],
                            ['choice_text' => 'Con mucho ruido.', 'is_correct' => false],
                        ],
                        'explanation' => 'The jacket provides the context: “fría” refers to low temperature.',
                    ],
                    [
                        'question' => 'Lee: “Marta estaba cansada después del viaje y se acostó temprano.” ¿Qué hizo probablemente porque estaba cansada?',
                        'choices' => [
                            ['choice_text' => 'Se acostó temprano.', 'is_correct' => true],
                            ['choice_text' => 'Salió a bailar.', 'is_correct' => false],
                            ['choice_text' => 'Fue al mercado.', 'is_correct' => false],
                            ['choice_text' => 'Corrió al parque.', 'is_correct' => false],
                        ],
                        'explanation' => 'The sentence directly connects being tired with going to bed early.',
                    ],
                    [
                        'question' => 'Lee: “El restaurante estaba lleno, así que buscamos otro lugar para cenar.” ¿Qué significa “estaba lleno” aquí?',
                        'choices' => [
                            ['choice_text' => 'Había muchas personas.', 'is_correct' => true],
                            ['choice_text' => 'No había comida.', 'is_correct' => false],
                            ['choice_text' => 'Estaba cerrado.', 'is_correct' => false],
                            ['choice_text' => 'Era muy pequeño.', 'is_correct' => false],
                        ],
                        'explanation' => 'In a restaurant, “lleno” means there were many people and little or no available space.',
                    ],
                    [
                        'question' => 'Lee: “Lucía olvidó su paraguas y empezó a llover. Por eso llegó mojada a casa.” ¿Por qué llegó mojada?',
                        'choices' => [
                            ['choice_text' => 'Porque empezó a llover y no tenía paraguas.', 'is_correct' => true],
                            ['choice_text' => 'Porque nadó en la piscina.', 'is_correct' => false],
                            ['choice_text' => 'Porque lavó su ropa.', 'is_correct' => false],
                            ['choice_text' => 'Porque se quedó en casa.', 'is_correct' => false],
                        ],
                        'explanation' => 'The cause is explicit: it began to rain and she had forgotten her umbrella.',
                    ],
                    [
                        'question' => 'Lee: “Pablo busca sus llaves por toda la casa. Mira en la cocina, en el dormitorio y debajo del sofá.” ¿Qué podemos inferir?',
                        'choices' => [
                            ['choice_text' => 'No sabe dónde están sus llaves.', 'is_correct' => true],
                            ['choice_text' => 'Ya encontró las llaves.', 'is_correct' => false],
                            ['choice_text' => 'Está comprando unas llaves.', 'is_correct' => false],
                            ['choice_text' => 'No necesita las llaves.', 'is_correct' => false],
                        ],
                        'explanation' => 'Searching in several places strongly suggests that Pablo has not found the keys yet.',
                    ],
                    [
                        'question' => 'Lee: “El tren salió a las ocho. Marta llegó a la estación a las ocho y diez, pero la plataforma estaba vacía.” ¿Qué pasó probablemente?',
                        'choices' => [
                            ['choice_text' => 'Marta perdió el tren.', 'is_correct' => true],
                            ['choice_text' => 'Marta llegó antes que el tren.', 'is_correct' => false],
                            ['choice_text' => 'El tren todavía no había llegado.', 'is_correct' => false],
                            ['choice_text' => 'La estación estaba cerrada.', 'is_correct' => false],
                        ],
                        'explanation' => 'Since the train left at eight and Marta arrived ten minutes later, she probably missed it.',
                    ],
                    [
                        'question' => 'Lee: “En la mesa había cuatro platos, cuatro vasos y una gran ensalada. Ana invitó a sus amigos a cenar.” ¿Qué podemos inferir sobre la cena?',
                        'choices' => [
                            ['choice_text' => 'Esperaban a varias personas.', 'is_correct' => true],
                            ['choice_text' => 'Ana iba a comer sola.', 'is_correct' => false],
                            ['choice_text' => 'No había comida.', 'is_correct' => false],
                            ['choice_text' => 'La cena ya había terminado.', 'is_correct' => false],
                        ],
                        'explanation' => 'Four place settings and an invitation to friends suggest several people were expected.',
                    ],
                    [
                        'question' => 'Lee: “Jorge miró el reloj varias veces durante la reunión. Cuando terminó, salió rápidamente.” ¿Qué sugiere este comportamiento?',
                        'choices' => [
                            ['choice_text' => 'Probablemente tenía prisa.', 'is_correct' => true],
                            ['choice_text' => 'Probablemente quería quedarse mucho tiempo.', 'is_correct' => false],
                            ['choice_text' => 'Probablemente estaba dormido.', 'is_correct' => false],
                            ['choice_text' => 'Probablemente no sabía la hora.', 'is_correct' => false],
                        ],
                        'explanation' => 'Looking at the clock repeatedly and leaving quickly suggests he was in a hurry.',
                    ],
                    [
                        'question' => 'Lee: “El supermercado estaba cerrado, así que Elena fue a una pequeña tienda de la esquina.” ¿Por qué cambió de lugar?',
                        'choices' => [
                            ['choice_text' => 'Porque el supermercado estaba cerrado.', 'is_correct' => true],
                            ['choice_text' => 'Porque quería comprar muebles.', 'is_correct' => false],
                            ['choice_text' => 'Porque no conocía la dirección.', 'is_correct' => false],
                            ['choice_text' => 'Porque la tienda estaba lejos.', 'is_correct' => false],
                        ],
                        'explanation' => 'The connector “así que” gives the reason for Elena\'s change of plan.',
                    ],
                    [
                        'question' => 'Lee: “Después de estudiar toda la tarde, Carlos cerró el libro y preparó un café. Luego se sentó en el balcón.” ¿Qué probablemente necesitaba Carlos después de estudiar?',
                        'choices' => [
                            ['choice_text' => 'Un descanso.', 'is_correct' => true],
                            ['choice_text' => 'Otro examen.', 'is_correct' => false],
                            ['choice_text' => 'Una bicicleta.', 'is_correct' => false],
                            ['choice_text' => 'Un nuevo libro.', 'is_correct' => false],
                        ],
                        'explanation' => 'Making coffee and sitting on the balcony after studying suggests he wanted a break.',
                    ],
                    [
                        'question' => 'Lee: “Sara llevó una bolsa grande al mercado, pero volvió con dos bolsas pequeñas llenas de comida.” ¿Qué podemos entender?',
                        'choices' => [
                            ['choice_text' => 'Compró bastante comida.', 'is_correct' => true],
                            ['choice_text' => 'No compró nada.', 'is_correct' => false],
                            ['choice_text' => 'Perdió la bolsa grande.', 'is_correct' => false],
                            ['choice_text' => 'Fue al mercado solo para caminar.', 'is_correct' => false],
                        ],
                        'explanation' => 'Returning with two bags full of food strongly suggests she bought a substantial amount.',
                    ],
                ],
            ],
            [
                'title' => 'Practical Reading Situations',
                'description' => 'Read short messages, notices, and practical texts and identify instructions, deadlines, and important information.',
                'settings' => ['duration' => 25, 'passing_score' => 65],
                'questions' => [
                    [
                        'question' => 'Lee: “Hola, Carlos. La reunión del martes se cambia al miércoles a las diez. Por favor, trae el informe.” ¿Cuándo es la reunión?',
                        'choices' => [
                            ['choice_text' => 'El miércoles a las diez.', 'is_correct' => true],
                            ['choice_text' => 'El martes a las diez.', 'is_correct' => false],
                            ['choice_text' => 'El miércoles a las ocho.', 'is_correct' => false],
                            ['choice_text' => 'El jueves a las diez.', 'is_correct' => false],
                        ],
                        'explanation' => 'The message says the meeting is moved to Wednesday at ten.',
                    ],
                    [
                        'question' => 'Lee: “Hola, Carlos. La reunión del martes se cambia al miércoles a las diez. Por favor, trae el informe.” ¿Qué debe llevar Carlos?',
                        'choices' => [
                            ['choice_text' => 'El informe.', 'is_correct' => true],
                            ['choice_text' => 'Un ordenador nuevo.', 'is_correct' => false],
                            ['choice_text' => 'Una carta.', 'is_correct' => false],
                            ['choice_text' => 'Un billete.', 'is_correct' => false],
                        ],
                        'explanation' => 'The final sentence asks Carlos to bring the report.',
                    ],
                    [
                        'question' => 'Lee: “AVISO: La piscina estará cerrada el lunes por mantenimiento. Abrirá de nuevo el martes a las ocho.” ¿Cuándo vuelve a abrir la piscina?',
                        'choices' => [
                            ['choice_text' => 'El martes a las ocho.', 'is_correct' => true],
                            ['choice_text' => 'El lunes a las ocho.', 'is_correct' => false],
                            ['choice_text' => 'El martes a las seis.', 'is_correct' => false],
                            ['choice_text' => 'El miércoles a las ocho.', 'is_correct' => false],
                        ],
                        'explanation' => 'The notice gives Tuesday at eight as the reopening time.',
                    ],
                    [
                        'question' => 'Lee: “Para reservar una mesa, llame al número indicado antes de las seis de la tarde. Las reservas para el mismo día no están disponibles después de esa hora.” ¿Cuál es la hora límite para reservar el mismo día?',
                        'choices' => [
                            ['choice_text' => 'Antes de las seis de la tarde.', 'is_correct' => true],
                            ['choice_text' => 'A las ocho de la noche.', 'is_correct' => false],
                            ['choice_text' => 'Antes del mediodía solamente.', 'is_correct' => false],
                            ['choice_text' => 'Al día siguiente.', 'is_correct' => false],
                        ],
                        'explanation' => 'The notice says same-day reservations are unavailable after six.',
                    ],
                    [
                        'question' => 'Lee: “Biblioteca: los libros prestados durante el verano deben devolverse antes del 15 de septiembre. Después de esa fecha, se aplica una pequeña multa.” ¿Qué ocurre después del 15 de septiembre?',
                        'choices' => [
                            ['choice_text' => 'Se aplica una pequeña multa.', 'is_correct' => true],
                            ['choice_text' => 'La biblioteca cierra.', 'is_correct' => false],
                            ['choice_text' => 'Los libros son gratis.', 'is_correct' => false],
                            ['choice_text' => 'No se pueden devolver los libros.', 'is_correct' => false],
                        ],
                        'explanation' => 'The notice explicitly says a small fine applies after the deadline.',
                    ],
                    [
                        'question' => 'Lee: “El curso empieza el 3 de octubre. Los estudiantes deben traer un cuaderno y un bolígrafo el primer día.” ¿Qué deben llevar los estudiantes?',
                        'choices' => [
                            ['choice_text' => 'Un cuaderno y un bolígrafo.', 'is_correct' => true],
                            ['choice_text' => 'Un ordenador y una cámara.', 'is_correct' => false],
                            ['choice_text' => 'Un libro de cocina.', 'is_correct' => false],
                            ['choice_text' => 'Nada.', 'is_correct' => false],
                        ],
                        'explanation' => 'The required items are listed directly in the notice.',
                    ],
                    [
                        'question' => 'Lee: “Mensaje: Estoy en la puerta principal. El autobús llega en diez minutos. ¿Puedes venir ahora?” ¿Dónde está la persona que envía el mensaje?',
                        'choices' => [
                            ['choice_text' => 'En la puerta principal.', 'is_correct' => true],
                            ['choice_text' => 'En el autobús.', 'is_correct' => false],
                            ['choice_text' => 'En casa.', 'is_correct' => false],
                            ['choice_text' => 'En la cafetería.', 'is_correct' => false],
                        ],
                        'explanation' => 'The sender states their location directly.',
                    ],
                    [
                        'question' => 'Lee: “La tienda ofrece un descuento del 20 % solo este fin de semana. El descuento no se aplica a productos ya rebajados.” ¿Qué producto no recibe el 20 % de descuento?',
                        'choices' => [
                            ['choice_text' => 'Un producto que ya está rebajado.', 'is_correct' => true],
                            ['choice_text' => 'Una camiseta a precio normal.', 'is_correct' => false],
                            ['choice_text' => 'Un libro a precio normal.', 'is_correct' => false],
                            ['choice_text' => 'Un bolso a precio normal.', 'is_correct' => false],
                        ],
                        'explanation' => 'The notice excludes already discounted products from the extra discount.',
                    ],
                    [
                        'question' => 'Lee: “Por favor, deje la puerta cerrada después de entrar. La sala es para reuniones y clases.” ¿Qué debe hacer una persona después de entrar?',
                        'choices' => [
                            ['choice_text' => 'Dejar la puerta cerrada.', 'is_correct' => true],
                            ['choice_text' => 'Abrir todas las ventanas.', 'is_correct' => false],
                            ['choice_text' => 'Apagar las luces del edificio.', 'is_correct' => false],
                            ['choice_text' => 'Mover las mesas al pasillo.', 'is_correct' => false],
                        ],
                        'explanation' => 'The instruction directly says to leave the door closed.',
                    ],
                    [
                        'question' => 'Lee: “Este autobús no circula los domingos. El sábado sale cada treinta minutos hasta las ocho de la noche.” ¿Qué afirmación es correcta?',
                        'choices' => [
                            ['choice_text' => 'El autobús no funciona los domingos.', 'is_correct' => true],
                            ['choice_text' => 'El autobús funciona toda la noche el sábado.', 'is_correct' => false],
                            ['choice_text' => 'El autobús sale cada hora el domingo.', 'is_correct' => false],
                            ['choice_text' => 'El autobús solo funciona por la mañana.', 'is_correct' => false],
                        ],
                        'explanation' => 'The first sentence explicitly says the bus does not run on Sundays.',
                    ],
                ],
            ],
            [
                'title' => 'Integrated Beginner Reading Review',
                'description' => 'Combine literal understanding, sequence, inference, and practical details across longer beginner-friendly passages.',
                'settings' => ['duration' => 25, 'passing_score' => 65],
                'questions' => [
                    [
                        'question' => 'Lee: “El sábado por la mañana, Elena salió de casa temprano porque quería visitar un mercado de agricultores. Compró tomates, pan y queso. Después llamó a su hermana y la invitó a almorzar. Cocinaron juntas por la tarde.” ¿Por qué salió Elena temprano?',
                        'choices' => [
                            ['choice_text' => 'Porque quería visitar un mercado de agricultores.', 'is_correct' => true],
                            ['choice_text' => 'Porque tenía una reunión de trabajo.', 'is_correct' => false],
                            ['choice_text' => 'Porque iba al aeropuerto.', 'is_correct' => false],
                            ['choice_text' => 'Porque quería correr en el parque.', 'is_correct' => false],
                        ],
                        'explanation' => 'The reason is stated directly: she wanted to visit the farmers\' market.',
                    ],
                    [
                        'question' => 'Lee: “El sábado por la mañana, Elena salió de casa temprano porque quería visitar un mercado de agricultores. Compró tomates, pan y queso. Después llamó a su hermana y la invitó a almorzar. Cocinaron juntas por la tarde.” ¿Qué compró en el mercado?',
                        'choices' => [
                            ['choice_text' => 'Tomates, pan y queso.', 'is_correct' => true],
                            ['choice_text' => 'Fruta, leche y arroz.', 'is_correct' => false],
                            ['choice_text' => 'Carne y pescado.', 'is_correct' => false],
                            ['choice_text' => 'Café y dulces.', 'is_correct' => false],
                        ],
                        'explanation' => 'Those three items are listed in the passage.',
                    ],
                    [
                        'question' => 'Lee: “El sábado por la mañana, Elena salió de casa temprano porque quería visitar un mercado de agricultores. Compró tomates, pan y queso. Después llamó a su hermana y la invitó a almorzar. Cocinaron juntas por la tarde.” ¿Con quién cocinó Elena?',
                        'choices' => [
                            ['choice_text' => 'Con su hermana.', 'is_correct' => true],
                            ['choice_text' => 'Con su madre.', 'is_correct' => false],
                            ['choice_text' => 'Con un vecino.', 'is_correct' => false],
                            ['choice_text' => 'Sola.', 'is_correct' => false],
                        ],
                        'explanation' => 'The final sentence says the sisters cooked together.',
                    ],
                    [
                        'question' => 'Lee: “Durante sus vacaciones, Andrés se quedó en un pueblo cerca de las montañas. Cada mañana caminaba por un sendero diferente. Una tarde empezó a llover, así que volvió al hotel antes de lo previsto. Al día siguiente hizo sol y continuó sus paseos.” ¿Dónde se quedó Andrés?',
                        'choices' => [
                            ['choice_text' => 'En un pueblo cerca de las montañas.', 'is_correct' => true],
                            ['choice_text' => 'En una ciudad junto al mar.', 'is_correct' => false],
                            ['choice_text' => 'En una granja.', 'is_correct' => false],
                            ['choice_text' => 'En una ciudad grande.', 'is_correct' => false],
                        ],
                        'explanation' => 'The first sentence gives his location directly.',
                    ],
                    [
                        'question' => 'Lee: “Durante sus vacaciones, Andrés se quedó en un pueblo cerca de las montañas. Cada mañana caminaba por un sendero diferente. Una tarde empezó a llover, así que volvió al hotel antes de lo previsto. Al día siguiente hizo sol y continuó sus paseos.” ¿Por qué volvió al hotel antes de lo previsto?',
                        'choices' => [
                            ['choice_text' => 'Porque empezó a llover.', 'is_correct' => true],
                            ['choice_text' => 'Porque estaba enfermo.', 'is_correct' => false],
                            ['choice_text' => 'Porque el hotel cerró.', 'is_correct' => false],
                            ['choice_text' => 'Porque perdió sus zapatos.', 'is_correct' => false],
                        ],
                        'explanation' => 'The rain caused him to return early.',
                    ],
                    [
                        'question' => 'Lee: “Durante sus vacaciones, Andrés se quedó en un pueblo cerca de las montañas. Cada mañana caminaba por un sendero diferente. Una tarde empezó a llover, así que volvió al hotel antes de lo previsto. Al día siguiente hizo sol y continuó sus paseos.” ¿Qué hizo al día siguiente?',
                        'choices' => [
                            ['choice_text' => 'Continuó sus paseos.', 'is_correct' => true],
                            ['choice_text' => 'Volvió a casa.', 'is_correct' => false],
                            ['choice_text' => 'Fue al mercado.', 'is_correct' => false],
                            ['choice_text' => 'Se quedó todo el día en el hotel.', 'is_correct' => false],
                        ],
                        'explanation' => 'The last sentence says he continued his walks when the weather improved.',
                    ],
                    [
                        'question' => 'Lee: “Claudia trabaja en una escuela y estudia por la noche. Este mes tiene muchos exámenes, así que organiza su tiempo con una agenda. Los lunes y miércoles estudia matemáticas. Los martes y jueves estudia idiomas. El viernes reserva una hora para descansar.” ¿Qué estudia Claudia los martes y jueves?',
                        'choices' => [
                            ['choice_text' => 'Idiomas.', 'is_correct' => true],
                            ['choice_text' => 'Matemáticas.', 'is_correct' => false],
                            ['choice_text' => 'Historia.', 'is_correct' => false],
                            ['choice_text' => 'Ciencias.', 'is_correct' => false],
                        ],
                        'explanation' => 'The schedule states that she studies languages on Tuesdays and Thursdays.',
                    ],
                    [
                        'question' => 'Lee: “Claudia trabaja en una escuela y estudia por la noche. Este mes tiene muchos exámenes, así que organiza su tiempo con una agenda. Los lunes y miércoles estudia matemáticas. Los martes y jueves estudia idiomas. El viernes reserva una hora para descansar.” ¿Por qué usa una agenda?',
                        'choices' => [
                            ['choice_text' => 'Porque tiene muchos exámenes.', 'is_correct' => true],
                            ['choice_text' => 'Porque trabaja en una escuela.', 'is_correct' => false],
                            ['choice_text' => 'Porque no tiene tiempo libre nunca.', 'is_correct' => false],
                            ['choice_text' => 'Porque estudia solo matemáticas.', 'is_correct' => false],
                        ],
                        'explanation' => 'The passage directly connects the agenda to her many exams.',
                    ],
                    [
                        'question' => 'Lee: “Claudia trabaja en una escuela y estudia por la noche. Este mes tiene muchos exámenes, así que organiza su tiempo con una agenda. Los lunes y miércoles estudia matemáticas. Los martes y jueves estudia idiomas. El viernes reserva una hora para descansar.” ¿Qué hace el viernes?',
                        'choices' => [
                            ['choice_text' => 'Reserva una hora para descansar.', 'is_correct' => true],
                            ['choice_text' => 'Estudia matemáticas todo el día.', 'is_correct' => false],
                            ['choice_text' => 'No trabaja.', 'is_correct' => false],
                            ['choice_text' => 'Viaja a otra ciudad.', 'is_correct' => false],
                        ],
                        'explanation' => 'The final sentence says she sets aside one hour to rest.',
                    ],
                    [
                        'question' => 'Lee: “Un pequeño restaurante del barrio cambia su horario en invierno. De lunes a jueves abre de doce a cuatro y de siete a diez. Los viernes y sábados permanece abierto hasta las once. Los domingos está cerrado.” ¿Hasta qué hora abre el restaurante los viernes y sábados?',
                        'choices' => [
                            ['choice_text' => 'Hasta las once.', 'is_correct' => true],
                            ['choice_text' => 'Hasta las diez.', 'is_correct' => false],
                            ['choice_text' => 'Hasta las cuatro.', 'is_correct' => false],
                            ['choice_text' => 'Hasta las doce.', 'is_correct' => false],
                        ],
                        'explanation' => 'The passage says it stays open until eleven on Fridays and Saturdays.',
                    ],
                    [
                        'question' => 'Lee: “Un pequeño restaurante del barrio cambia su horario en invierno. De lunes a jueves abre de doce a cuatro y de siete a diez. Los viernes y sábados permanece abierto hasta las once. Los domingos está cerrado.” ¿Qué día está cerrado?',
                        'choices' => [
                            ['choice_text' => 'Domingo.', 'is_correct' => true],
                            ['choice_text' => 'Lunes.', 'is_correct' => false],
                            ['choice_text' => 'Viernes.', 'is_correct' => false],
                            ['choice_text' => 'Sábado.', 'is_correct' => false],
                        ],
                        'explanation' => 'The restaurant is closed on Sundays.',
                    ],
                    [
                        'question' => 'Lee: “Un pequeño restaurante del barrio cambia su horario en invierno. De lunes a jueves abre de doce a cuatro y de siete a diez. Los viernes y sábados permanece abierto hasta las once. Los domingos está cerrado.” ¿A qué hora vuelve a abrir de lunes a jueves después de la pausa de la tarde?',
                        'choices' => [
                            ['choice_text' => 'A las siete.', 'is_correct' => true],
                            ['choice_text' => 'A las cuatro.', 'is_correct' => false],
                            ['choice_text' => 'A las diez.', 'is_correct' => false],
                            ['choice_text' => 'A las doce.', 'is_correct' => false],
                        ],
                        'explanation' => 'The split schedule shows that it reopens at seven after the afternoon break.',
                    ],
                    [
                        'question' => 'Lee: “Raúl quería ahorrar dinero para un viaje. Durante tres meses preparó su comida en casa, usó menos el coche y dejó de comprar café fuera. Al final del tercer mes, había ahorrado suficiente para comprar el billete.” ¿Qué hizo para ahorrar?',
                        'choices' => [
                            ['choice_text' => 'Preparó su comida en casa, usó menos el coche y dejó de comprar café fuera.', 'is_correct' => true],
                            ['choice_text' => 'Trabajó menos y viajó más.', 'is_correct' => false],
                            ['choice_text' => 'Compró un coche nuevo.', 'is_correct' => false],
                            ['choice_text' => 'Salió a cenar todos los fines de semana.', 'is_correct' => false],
                        ],
                        'explanation' => 'The passage lists all three actions as part of Raúl\'s savings plan.',
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
