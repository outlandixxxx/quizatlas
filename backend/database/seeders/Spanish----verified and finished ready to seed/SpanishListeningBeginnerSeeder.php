<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Major;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class SpanishListeningBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('major_id', Major::where('slug', 'spanish')->firstOrFail()->id)->where('name', 'Listening')->firstOrFail();

        $quizzes = [
            [
                'title' => 'Les bases de l’écoute : conversations du quotidien',
                'description' => 'Entraîne-toi à repérer des noms, des lieux, des horaires, des préférences et des faits simples dans de courtes conversations espagnoles.',
                'duration' => 15,
                'passing_score' => 50,
                'questions' => [
                    [
                        'question' => 'Escucha: “—Hola, soy Marta. ¿Y tú? —Soy Daniel.” ¿Cómo se llama el hombre?',
                        'choices' => [
                            ['choice_text' => 'Marta.', 'is_correct' => false],
                            ['choice_text' => 'Carlos.', 'is_correct' => false],
                            ['choice_text' => 'Pablo.', 'is_correct' => false],
                            ['choice_text' => 'Daniel.', 'is_correct' => true],
                        ],
                        'explanation' => 'Le deuxième interlocuteur se présente sous le nom de Daniel.',
                    ],
                    [
                        'question' => 'Escucha: “—¿Dónde trabajas, Ana? —Trabajo en una farmacia cerca del centro.” ¿Dónde trabaja Ana?',
                        'choices' => [
                            ['choice_text' => 'En una escuela.', 'is_correct' => false],
                            ['choice_text' => 'En un banco.', 'is_correct' => false],
                            ['choice_text' => 'En una farmacia.', 'is_correct' => true],
                            ['choice_text' => 'En una cafetería.', 'is_correct' => false],
                        ],
                        'explanation' => 'Ana précise qu’elle travaille dans une pharmacie proche du centre.',
                    ],
                    [
                        'question' => 'Escucha: “—¿A qué hora empieza la clase? —A las nueve y media.” ¿Cuándo empieza la clase?',
                        'choices' => [
                            ['choice_text' => 'A las nueve.', 'is_correct' => false],
                            ['choice_text' => 'A las nueve y media.', 'is_correct' => true],
                            ['choice_text' => 'A las diez y media.', 'is_correct' => false],
                            ['choice_text' => 'A las ocho y media.', 'is_correct' => false],
                        ],
                        'explanation' => 'La personne donne l’heure du cours : neuf heures et demie.',
                    ],
                    [
                        'question' => 'Escucha: “—¿Quieres café? —No, gracias. Prefiero té.” ¿Qué prefiere la persona?',
                        'choices' => [
                            ['choice_text' => 'Té.', 'is_correct' => true],
                            ['choice_text' => 'Café.', 'is_correct' => false],
                            ['choice_text' => 'Agua.', 'is_correct' => false],
                            ['choice_text' => 'Jugo.', 'is_correct' => false],
                        ],
                        'explanation' => 'La personne refuse poliment le café et dit qu’elle préfère le thé.',
                    ],
                    [
                        'question' => 'Escucha: “—¿Vas a casa ahora? —No, voy al supermercado.” ¿Adónde va la persona?',
                        'choices' => [
                            ['choice_text' => 'A casa.', 'is_correct' => false],
                            ['choice_text' => 'A la escuela.', 'is_correct' => false],
                            ['choice_text' => 'Al supermercado.', 'is_correct' => true],
                            ['choice_text' => 'Al parque.', 'is_correct' => false],
                        ],
                        'explanation' => 'La personne annonce qu’elle va au supermarché plutôt qu’à la maison.',
                    ],
                    [
                        'question' => 'Escucha: “—¿Tienes hermanos? —Sí, tengo una hermana y dos hermanos.” ¿Cuántos hermanos tiene en total?',
                        'choices' => [
                            ['choice_text' => 'Dos.', 'is_correct' => false],
                            ['choice_text' => 'Tres.', 'is_correct' => true],
                            ['choice_text' => 'Cuatro.', 'is_correct' => false],
                            ['choice_text' => 'Uno.', 'is_correct' => false],
                        ],
                        'explanation' => 'Une sœur plus deux frères donnent un total de trois.',
                    ],
                    [
                        'question' => 'Escucha: “—¿Qué haces los domingos? —Normalmente cocino con mi familia.” ¿Qué hace la persona los domingos?',
                        'choices' => [
                            ['choice_text' => 'Cocina con su familia.', 'is_correct' => true],
                            ['choice_text' => 'Trabaja en una tienda.', 'is_correct' => false],
                            ['choice_text' => 'Juega al fútbol.', 'is_correct' => false],
                            ['choice_text' => 'Estudia en la biblioteca.', 'is_correct' => false],
                        ],
                        'explanation' => 'La personne décrit cuisiner en famille comme son activité habituelle du dimanche.',
                    ],
                    [
                        'question' => 'Escucha: “—¿Cómo está el tiempo? —Hace frío y está lloviendo.” ¿Cómo está el tiempo?',
                        'choices' => [
                            ['choice_text' => 'Hace calor y hay sol.', 'is_correct' => false],
                            ['choice_text' => 'Hace viento y nieva.', 'is_correct' => false],
                            ['choice_text' => 'Está nublado pero seco.', 'is_correct' => false],
                            ['choice_text' => 'Hace frío y llueve.', 'is_correct' => true],
                        ],
                        'explanation' => 'La personne mentionne le froid et la pluie.',
                    ],
                    [
                        'question' => 'Escucha: “—¿Qué compraste? —Compré pan, leche y fruta.” ¿Qué compró la persona?',
                        'choices' => [
                            ['choice_text' => 'Pan y queso.', 'is_correct' => false],
                            ['choice_text' => 'Leche y café.', 'is_correct' => false],
                            ['choice_text' => 'Pan, leche y fruta.', 'is_correct' => true],
                            ['choice_text' => 'Fruta y verduras.', 'is_correct' => false],
                        ],
                        'explanation' => 'Les trois articles sont nommés directement dans la réponse.',
                    ],
                    [
                        'question' => 'Escucha: “—¿A qué hora llegas mañana? —Llego a las ocho, pero salgo de casa a las siete y media.” ¿A qué hora sale de casa?',
                        'choices' => [
                            ['choice_text' => 'A las ocho.', 'is_correct' => false],
                            ['choice_text' => 'A las siete.', 'is_correct' => false],
                            ['choice_text' => 'A las ocho y media.', 'is_correct' => false],
                            ['choice_text' => 'A las siete y media.', 'is_correct' => true],
                        ],
                        'explanation' => 'La personne quitte la maison à sept heures et demie et arrive à huit heures.',
                    ],
                ],
            ],
            [
                'title' => 'Écouter pour repérer les détails clés',
                'description' => 'Améliore ta capacité à capter des informations précises : jours, prix, horaires, directions et détails personnels.',
                'duration' => 20,
                'passing_score' => 55,
                'questions' => [
                    [
                        'question' => 'Escucha: “El tren sale a las seis y veinte. La estación está a diez minutos de aquí.” ¿A qué hora sale el tren?',
                        'choices' => [
                            ['choice_text' => 'A las seis.', 'is_correct' => false],
                            ['choice_text' => 'A las seis y media.', 'is_correct' => false],
                            ['choice_text' => 'A las seis y veinte.', 'is_correct' => true],
                            ['choice_text' => 'A las siete y veinte.', 'is_correct' => false],
                        ],
                        'explanation' => 'L’heure de départ indiquée est six heures vingt.',
                    ],
                    [
                        'question' => 'Escucha: “La camiseta cuesta quince euros, pero la chaqueta cuesta treinta.” ¿Cuánto cuesta la camiseta?',
                        'choices' => [
                            ['choice_text' => 'Quince euros.', 'is_correct' => true],
                            ['choice_text' => 'Treinta euros.', 'is_correct' => false],
                            ['choice_text' => 'Veinte euros.', 'is_correct' => false],
                            ['choice_text' => 'Diez euros.', 'is_correct' => false],
                        ],
                        'explanation' => 'La personne annonce quinze euros pour le tee-shirt.',
                    ],
                    [
                        'question' => 'Escucha: “La reunión no es el martes. Es el miércoles a las cuatro.” ¿Cuándo es la reunión?',
                        'choices' => [
                            ['choice_text' => 'El martes a las cuatro.', 'is_correct' => false],
                            ['choice_text' => 'El miércoles a las cinco.', 'is_correct' => false],
                            ['choice_text' => 'El jueves a las cuatro.', 'is_correct' => false],
                            ['choice_text' => 'El miércoles a las cuatro.', 'is_correct' => true],
                        ],
                        'explanation' => 'La personne corrige le jour et donne mercredi à quatre heures.',
                    ],
                    [
                        'question' => 'Escucha: “Primero gira a la derecha y después sigue todo recto hasta el banco.” ¿Qué debe hacer la persona primero?',
                        'choices' => [
                            ['choice_text' => 'Seguir todo recto.', 'is_correct' => false],
                            ['choice_text' => 'Girar a la derecha.', 'is_correct' => true],
                            ['choice_text' => 'Entrar en el banco.', 'is_correct' => false],
                            ['choice_text' => 'Girar a la izquierda.', 'is_correct' => false],
                        ],
                        'explanation' => '« Primero » indique quelle est la première instruction.',
                    ],
                    [
                        'question' => 'Escucha: “Trabajo de lunes a jueves, pero los viernes trabajo desde casa.” ¿Dónde trabaja los viernes?',
                        'choices' => [
                            ['choice_text' => 'En la oficina.', 'is_correct' => false],
                            ['choice_text' => 'En un café.', 'is_correct' => false],
                            ['choice_text' => 'En una escuela.', 'is_correct' => false],
                            ['choice_text' => 'Desde casa.', 'is_correct' => true],
                        ],
                        'explanation' => 'La personne précise que le vendredi est un jour de télétravail.',
                    ],
                    [
                        'question' => 'Escucha: “Tengo una cita con el médico el viernes por la mañana, a las diez.” ¿Cuándo es la cita?',
                        'choices' => [
                            ['choice_text' => 'El jueves a las diez.', 'is_correct' => false],
                            ['choice_text' => 'El viernes por la tarde.', 'is_correct' => false],
                            ['choice_text' => 'El viernes a las diez de la mañana.', 'is_correct' => true],
                            ['choice_text' => 'El sábado por la mañana.', 'is_correct' => false],
                        ],
                        'explanation' => 'Le rendez-vous a lieu vendredi matin à dix heures.',
                    ],
                    [
                        'question' => 'Escucha: “El supermercado abre a las ocho y cierra a las nueve de la noche.” ¿A qué hora cierra?',
                        'choices' => [
                            ['choice_text' => 'A las ocho de la mañana.', 'is_correct' => false],
                            ['choice_text' => 'A las nueve de la noche.', 'is_correct' => true],
                            ['choice_text' => 'A las nueve de la mañana.', 'is_correct' => false],
                            ['choice_text' => 'A las diez de la noche.', 'is_correct' => false],
                        ],
                        'explanation' => 'L’heure de fermeture est neuf heures du soir.',
                    ],
                    [
                        'question' => 'Escucha: “No quiero el libro azul. Quiero el rojo.” ¿Qué libro quiere la persona?',
                        'choices' => [
                            ['choice_text' => 'El rojo.', 'is_correct' => true],
                            ['choice_text' => 'El azul.', 'is_correct' => false],
                            ['choice_text' => 'Los dos.', 'is_correct' => false],
                            ['choice_text' => 'Ninguno.', 'is_correct' => false],
                        ],
                        'explanation' => 'La personne rejette le livre bleu et choisit le rouge.',
                    ],
                    [
                        'question' => 'Escucha: “Mi hermana vive en Valencia y mis padres viven en Sevilla.” ¿Dónde viven los padres?',
                        'choices' => [
                            ['choice_text' => 'En Valencia.', 'is_correct' => false],
                            ['choice_text' => 'En Madrid.', 'is_correct' => false],
                            ['choice_text' => 'En Sevilla.', 'is_correct' => true],
                            ['choice_text' => 'En Bilbao.', 'is_correct' => false],
                        ],
                        'explanation' => 'La personne dit que les parents vivent à Séville.',
                    ],
                    [
                        'question' => 'Escucha: “Este sábado voy a cocinar paella para seis personas.” ¿Para cuántas personas va a cocinar?',
                        'choices' => [
                            ['choice_text' => 'Cinco.', 'is_correct' => false],
                            ['choice_text' => 'Seis.', 'is_correct' => true],
                            ['choice_text' => 'Siete.', 'is_correct' => false],
                            ['choice_text' => 'Cuatro.', 'is_correct' => false],
                        ],
                        'explanation' => 'La paella est prévue pour six personnes.',
                    ],
                ],
            ],
            [
                'title' => 'Dialogues courts et intentions',
                'description' => 'Repère ce que veulent, ont besoin, préfèrent, prévoient ou ressentent les interlocuteurs dans des conversations naturelles de niveau débutant.',
                'duration' => 20,
                'passing_score' => 60,
                'questions' => [
                    [
                        'question' => 'Escucha: “—¿Quieres salir esta noche? —Me gustaría, pero tengo que estudiar.” ¿Por qué no sale la persona?',
                        'choices' => [
                            ['choice_text' => 'Porque tiene que estudiar.', 'is_correct' => true],
                            ['choice_text' => 'Porque está enferma.', 'is_correct' => false],
                            ['choice_text' => 'Porque trabaja de noche.', 'is_correct' => false],
                            ['choice_text' => 'Porque no le gusta salir.', 'is_correct' => false],
                        ],
                        'explanation' => 'La personne aimerait sortir, mais elle doit étudier.',
                    ],
                    [
                        'question' => 'Escucha: “—¿Qué vas a hacer mañana? —Voy a visitar a mi abuela.” ¿Qué plan tiene la persona?',
                        'choices' => [
                            ['choice_text' => 'Ir de compras.', 'is_correct' => false],
                            ['choice_text' => 'Visitar a su abuela.', 'is_correct' => true],
                            ['choice_text' => 'Trabajar.', 'is_correct' => false],
                            ['choice_text' => 'Viajar a otra ciudad.', 'is_correct' => false],
                        ],
                        'explanation' => 'La personne prévoit de rendre visite à sa grand-mère.',
                    ],
                    [
                        'question' => 'Escucha: “—¿Te gusta este restaurante? —Sí, pero me parece un poco caro.” ¿Qué piensa la persona?',
                        'choices' => [
                            ['choice_text' => 'No le gusta nada.', 'is_correct' => false],
                            ['choice_text' => 'Es barato.', 'is_correct' => false],
                            ['choice_text' => 'Le gusta, pero cree que es caro.', 'is_correct' => true],
                            ['choice_text' => 'Está cerrado.', 'is_correct' => false],
                        ],
                        'explanation' => 'La personne aime le restaurant, mais le trouve un peu cher.',
                    ],
                    [
                        'question' => 'Escucha: “—¿Necesitas ayuda? —Sí, no encuentro mis llaves.” ¿Qué necesita la persona?',
                        'choices' => [
                            ['choice_text' => 'Ayuda para cocinar.', 'is_correct' => false],
                            ['choice_text' => 'Ayuda para estudiar.', 'is_correct' => false],
                            ['choice_text' => 'Ayuda para conducir.', 'is_correct' => false],
                            ['choice_text' => 'Ayuda para encontrar sus llaves.', 'is_correct' => true],
                        ],
                        'explanation' => 'Le problème est que la personne ne retrouve pas ses clés.',
                    ],
                    [
                        'question' => 'Escucha: “—¿Por qué estás cansado? —Porque dormí muy poco anoche.” ¿Por qué está cansado?',
                        'choices' => [
                            ['choice_text' => 'Porque durmió muy poco.', 'is_correct' => true],
                            ['choice_text' => 'Porque trabajó toda la noche.', 'is_correct' => false],
                            ['choice_text' => 'Porque corrió por la mañana.', 'is_correct' => false],
                            ['choice_text' => 'Porque no desayunó.', 'is_correct' => false],
                        ],
                        'explanation' => 'La personne explique sa fatigue par le manque de sommeil.',
                    ],
                    [
                        'question' => 'Escucha: “—¿Prefieres viajar en tren o en autobús? —En tren. Es más cómodo.” ¿Qué prefiere?',
                        'choices' => [
                            ['choice_text' => 'El autobús.', 'is_correct' => false],
                            ['choice_text' => 'El avión.', 'is_correct' => false],
                            ['choice_text' => 'El tren.', 'is_correct' => true],
                            ['choice_text' => 'El coche.', 'is_correct' => false],
                        ],
                        'explanation' => 'La personne choisit le train parce qu’il est plus confortable.',
                    ],
                    [
                        'question' => 'Escucha: “—¿Puedes venir a las seis? —No, a las seis trabajo. Puedo venir a las siete.” ¿A qué hora puede venir?',
                        'choices' => [
                            ['choice_text' => 'A las seis.', 'is_correct' => false],
                            ['choice_text' => 'A las siete.', 'is_correct' => true],
                            ['choice_text' => 'A las ocho.', 'is_correct' => false],
                            ['choice_text' => 'A las cinco.', 'is_correct' => false],
                        ],
                        'explanation' => 'La personne ne peut pas venir à six heures, mais peut venir à sept heures.',
                    ],
                    [
                        'question' => 'Escucha: “—¿Te gusta cocinar? —Mucho. Especialmente los fines de semana.” ¿Qué le gusta hacer?',
                        'choices' => [
                            ['choice_text' => 'Correr.', 'is_correct' => false],
                            ['choice_text' => 'Viajar.', 'is_correct' => false],
                            ['choice_text' => 'Leer.', 'is_correct' => false],
                            ['choice_text' => 'Cocinar.', 'is_correct' => true],
                        ],
                        'explanation' => 'La personne dit qu’elle aime beaucoup cuisiner.',
                    ],
                    [
                        'question' => 'Escucha: “—¿Qué necesitas comprar? —Necesito comprar una chaqueta porque hace frío.” ¿Por qué quiere comprar una chaqueta?',
                        'choices' => [
                            ['choice_text' => 'Porque hace calor.', 'is_correct' => false],
                            ['choice_text' => 'Porque hace frío.', 'is_correct' => true],
                            ['choice_text' => 'Porque tiene una fiesta.', 'is_correct' => false],
                            ['choice_text' => 'Porque perdió sus zapatos.', 'is_correct' => false],
                        ],
                        'explanation' => 'La personne a besoin de la veste parce qu’il fait froid.',
                    ],
                    [
                        'question' => 'Escucha: “—¿Quieres comer aquí? —No, prefiero llevar la comida a casa.” ¿Qué prefiere hacer?',
                        'choices' => [
                            ['choice_text' => 'Comer en el restaurante.', 'is_correct' => false],
                            ['choice_text' => 'Cocinar en la calle.', 'is_correct' => false],
                            ['choice_text' => 'No comer.', 'is_correct' => false],
                            ['choice_text' => 'Llevar la comida a casa.', 'is_correct' => true],
                        ],
                        'explanation' => 'La personne préfère emporter le repas à la maison.',
                    ],
                    [
                        'question' => 'Escucha: “—¿Estás libre el viernes? —Sí, pero solo por la tarde.” ¿Cuándo está libre la persona?',
                        'choices' => [
                            ['choice_text' => 'El viernes por la tarde.', 'is_correct' => true],
                            ['choice_text' => 'El viernes por la mañana.', 'is_correct' => false],
                            ['choice_text' => 'Todo el viernes.', 'is_correct' => false],
                            ['choice_text' => 'El sábado por la tarde.', 'is_correct' => false],
                        ],
                        'explanation' => 'La personne n’est disponible que le vendredi après-midi.',
                    ],
                    [
                        'question' => 'Escucha: “—¿Por qué llegaste tarde? —Porque había mucho tráfico.” ¿Qué causó el retraso?',
                        'choices' => [
                            ['choice_text' => 'Una reunión.', 'is_correct' => false],
                            ['choice_text' => 'La lluvia.', 'is_correct' => false],
                            ['choice_text' => 'Mucho tráfico.', 'is_correct' => true],
                            ['choice_text' => 'Un tren cancelado.', 'is_correct' => false],
                        ],
                        'explanation' => 'La personne attribue directement son retard à la circulation dense.',
                    ],
                ],
            ],
            [
                'title' => 'Annonces et écoute pratique',
                'description' => 'Entraîne-toi à comprendre des annonces de transport, des avis publics, des horaires, des instructions et des services du quotidien.',
                'duration' => 25,
                'passing_score' => 60,
                'questions' => [
                    [
                        'question' => 'Escucha el anuncio: “Atención, pasajeros. El tren con destino a Sevilla saldrá del andén tres a las diez.” ¿A dónde va el tren?',
                        'choices' => [
                            ['choice_text' => 'A Madrid.', 'is_correct' => false],
                            ['choice_text' => 'A Valencia.', 'is_correct' => false],
                            ['choice_text' => 'A Málaga.', 'is_correct' => false],
                            ['choice_text' => 'A Sevilla.', 'is_correct' => true],
                        ],
                        'explanation' => 'La destination annoncée est Séville.',
                    ],
                    [
                        'question' => 'Escucha el anuncio: “Atención, pasajeros. El tren con destino a Sevilla saldrá del andén tres a las diez.” ¿De qué andén sale?',
                        'choices' => [
                            ['choice_text' => 'Del andén uno.', 'is_correct' => false],
                            ['choice_text' => 'Del andén tres.', 'is_correct' => true],
                            ['choice_text' => 'Del andén dos.', 'is_correct' => false],
                            ['choice_text' => 'Del andén cuatro.', 'is_correct' => false],
                        ],
                        'explanation' => 'L’annonce précise le quai numéro trois.',
                    ],
                    [
                        'question' => 'Escucha: “La biblioteca permanecerá cerrada el lunes por mantenimiento. Abrirá de nuevo el martes a las nueve.” ¿Cuándo abre de nuevo?',
                        'choices' => [
                            ['choice_text' => 'El martes a las nueve.', 'is_correct' => true],
                            ['choice_text' => 'El lunes a las nueve.', 'is_correct' => false],
                            ['choice_text' => 'El martes a las ocho.', 'is_correct' => false],
                            ['choice_text' => 'El miércoles a las nueve.', 'is_correct' => false],
                        ],
                        'explanation' => 'La bibliothèque rouvre le mardi à neuf heures.',
                    ],
                    [
                        'question' => 'Escucha: “La piscina municipal está abierta de ocho de la mañana a siete de la tarde, excepto los domingos.” ¿Qué día está cerrada?',
                        'choices' => [
                            ['choice_text' => 'El sábado.', 'is_correct' => false],
                            ['choice_text' => 'El viernes.', 'is_correct' => false],
                            ['choice_text' => 'El domingo.', 'is_correct' => true],
                            ['choice_text' => 'El lunes.', 'is_correct' => false],
                        ],
                        'explanation' => 'L’avis exclut spécifiquement le dimanche.',
                    ],
                    [
                        'question' => 'Escucha: “El curso empieza el próximo lunes. Las inscripciones terminan el viernes.” ¿Cuándo terminan las inscripciones?',
                        'choices' => [
                            ['choice_text' => 'El lunes.', 'is_correct' => false],
                            ['choice_text' => 'El viernes.', 'is_correct' => true],
                            ['choice_text' => 'El domingo.', 'is_correct' => false],
                            ['choice_text' => 'El próximo martes.', 'is_correct' => false],
                        ],
                        'explanation' => 'La date limite d’inscription est le vendredi.',
                    ],
                    [
                        'question' => 'Escucha: “Por favor, recuerde llevar su documento de identidad.” ¿Qué debe llevar la persona?',
                        'choices' => [
                            ['choice_text' => 'Su documento de identidad.', 'is_correct' => true],
                            ['choice_text' => 'Su billete de autobús.', 'is_correct' => false],
                            ['choice_text' => 'Un libro.', 'is_correct' => false],
                            ['choice_text' => 'Una botella de agua.', 'is_correct' => false],
                        ],
                        'explanation' => 'La consigne demande d’apporter une pièce d’identité.',
                    ],
                    [
                        'question' => 'Escucha: “Debido a la lluvia, el partido empieza a las cinco en lugar de las cuatro.” ¿A qué hora empieza ahora el partido?',
                        'choices' => [
                            ['choice_text' => 'A las cuatro.', 'is_correct' => false],
                            ['choice_text' => 'A las seis.', 'is_correct' => false],
                            ['choice_text' => 'A las tres.', 'is_correct' => false],
                            ['choice_text' => 'A las cinco.', 'is_correct' => true],
                        ],
                        'explanation' => 'La pluie décale le début du match à cinq heures.',
                    ],
                    [
                        'question' => 'Escucha: “La tienda ofrece un diez por ciento de descuento a los clientes con tarjeta de miembro.” ¿Quién recibe el descuento?',
                        'choices' => [
                            ['choice_text' => 'Todos los clientes.', 'is_correct' => false],
                            ['choice_text' => 'Solo los empleados.', 'is_correct' => false],
                            ['choice_text' => 'Los clientes con tarjeta de miembro.', 'is_correct' => true],
                            ['choice_text' => 'Los niños menores de diez años.', 'is_correct' => false],
                        ],
                        'explanation' => 'Seuls les clients munis d’une carte de membre bénéficient de la remise.',
                    ],
                    [
                        'question' => 'Escucha: “La reunión será en la sala B, no en la sala A.” ¿Dónde será la reunión?',
                        'choices' => [
                            ['choice_text' => 'En la sala A.', 'is_correct' => false],
                            ['choice_text' => 'En la recepción.', 'is_correct' => false],
                            ['choice_text' => 'En la cafetería.', 'is_correct' => false],
                            ['choice_text' => 'En la sala B.', 'is_correct' => true],
                        ],
                        'explanation' => 'La personne corrige la salle en indiquant la salle B.',
                    ],
                    [
                        'question' => 'Escucha: “El autobús número ocho llegará en cinco minutos. El número seis acaba de salir.” ¿Qué autobús llegará en cinco minutos?',
                        'choices' => [
                            ['choice_text' => 'El número ocho.', 'is_correct' => true],
                            ['choice_text' => 'El número seis.', 'is_correct' => false],
                            ['choice_text' => 'Los dos.', 'is_correct' => false],
                            ['choice_text' => 'Ninguno.', 'is_correct' => false],
                        ],
                        'explanation' => 'C’est le bus numéro huit qui arrivera dans cinq minutes.',
                    ],
                    [
                        'question' => 'Escucha: “La sala de espera está en el primer piso. El ascensor está a la derecha.” ¿Dónde está la sala de espera?',
                        'choices' => [
                            ['choice_text' => 'En la planta baja.', 'is_correct' => false],
                            ['choice_text' => 'En el primer piso.', 'is_correct' => true],
                            ['choice_text' => 'A la derecha del ascensor.', 'is_correct' => false],
                            ['choice_text' => 'En el segundo piso.', 'is_correct' => false],
                        ],
                        'explanation' => 'L’annonce indique que la salle d’attente se trouve au premier étage.',
                    ],
                ],
            ],
            [
                'title' => 'Extraits d’écoute plus longs',
                'description' => 'Suis des situations parlées plus longues impliquant des enchaînements d’actions, des raisons, des projets et de petites conclusions.',
                'duration' => 25,
                'passing_score' => 65,
                'questions' => [
                    [
                        'question' => 'Escucha: “El sábado, Laura salió de casa a las nueve para ir al mercado. Compró verduras y pan. Después encontró a una amiga y tomaron un café juntas. Volvió a casa antes del mediodía.” ¿A qué hora salió Laura?',
                        'choices' => [
                            ['choice_text' => 'A las nueve.', 'is_correct' => true],
                            ['choice_text' => 'A las ocho.', 'is_correct' => false],
                            ['choice_text' => 'A las diez.', 'is_correct' => false],
                            ['choice_text' => 'A las doce.', 'is_correct' => false],
                        ],
                        'explanation' => 'Laura a quitté la maison à neuf heures.',
                    ],
                    [
                        'question' => 'Escucha: “El sábado, Laura salió de casa a las nueve para ir al mercado. Compró verduras y pan. Después encontró a una amiga y tomaron un café juntas. Volvió a casa antes del mediodía.” ¿Qué compró?',
                        'choices' => [
                            ['choice_text' => 'Café y fruta.', 'is_correct' => false],
                            ['choice_text' => 'Pan y queso.', 'is_correct' => false],
                            ['choice_text' => 'Verduras y leche.', 'is_correct' => false],
                            ['choice_text' => 'Verduras y pan.', 'is_correct' => true],
                        ],
                        'explanation' => 'Ce sont les articles nommés directement dans le message.',
                    ],
                    [
                        'question' => 'Escucha: “El sábado, Laura salió de casa a las nueve para ir al mercado. Compró verduras y pan. Después encontró a una amiga y tomaron un café juntas. Volvió a casa antes del mediodía.” ¿Qué hizo después del mercado?',
                        'choices' => [
                            ['choice_text' => 'Volvió inmediatamente a casa.', 'is_correct' => false],
                            ['choice_text' => 'Tomó un café con una amiga.', 'is_correct' => true],
                            ['choice_text' => 'Fue a trabajar.', 'is_correct' => false],
                            ['choice_text' => 'Fue al gimnasio.', 'is_correct' => false],
                        ],
                        'explanation' => 'Elle a retrouvé une amie et pris un café avec elle après le marché.',
                    ],
                    [
                        'question' => 'Escucha: “Miguel tiene una entrevista el jueves. El miércoles prepara su ropa, revisa la dirección y prepara su currículum. El jueves sale temprano y llega quince minutos antes.” ¿Qué prepara el miércoles?',
                        'choices' => [
                            ['choice_text' => 'Su desayuno y su maleta.', 'is_correct' => false],
                            ['choice_text' => 'Su coche y su billete.', 'is_correct' => false],
                            ['choice_text' => 'Su ropa y su currículum.', 'is_correct' => true],
                            ['choice_text' => 'Su comida y su teléfono.', 'is_correct' => false],
                        ],
                        'explanation' => 'Les préparatifs du mercredi comprennent ses vêtements, la vérification de l’adresse et son CV.',
                    ],
                    [
                        'question' => 'Escucha: “Miguel tiene una entrevista el jueves. El miércoles prepara su ropa, revisa la dirección y prepara su currículum. El jueves sale temprano y llega quince minutos antes.” ¿Qué hace el jueves?',
                        'choices' => [
                            ['choice_text' => 'Trabaja desde casa.', 'is_correct' => false],
                            ['choice_text' => 'Sale temprano y llega antes.', 'is_correct' => true],
                            ['choice_text' => 'Cancela la entrevista.', 'is_correct' => false],
                            ['choice_text' => 'Llega quince minutos tarde.', 'is_correct' => false],
                        ],
                        'explanation' => 'Il part tôt et arrive quinze minutes avant l’entretien.',
                    ],
                    [
                        'question' => 'Escucha: “Durante las vacaciones, Elena quería descansar, pero también quería conocer la ciudad. Por la mañana visitaba museos y por la tarde caminaba por el centro. El último día compró algunos regalos para su familia.” ¿Qué hacía por la mañana?',
                        'choices' => [
                            ['choice_text' => 'Caminaba por el centro.', 'is_correct' => false],
                            ['choice_text' => 'Compraba regalos.', 'is_correct' => false],
                            ['choice_text' => 'Visitaba museos.', 'is_correct' => true],
                            ['choice_text' => 'Se quedaba en el hotel.', 'is_correct' => false],
                        ],
                        'explanation' => 'L’activité du matin était la visite de musées.',
                    ],
                    [
                        'question' => 'Escucha: “Durante las vacaciones, Elena quería descansar, pero también quería conocer la ciudad. Por la mañana visitaba museos y por la tarde caminaba por el centro. El último día compró algunos regalos para su familia.” ¿Cuándo compró regalos?',
                        'choices' => [
                            ['choice_text' => 'El último día.', 'is_correct' => true],
                            ['choice_text' => 'El primer día.', 'is_correct' => false],
                            ['choice_text' => 'Todas las mañanas.', 'is_correct' => false],
                            ['choice_text' => 'Después de cada museo.', 'is_correct' => false],
                        ],
                        'explanation' => 'Les achats ont eu lieu le dernier jour.',
                    ],
                    [
                        'question' => 'Escucha: “Pedro llamó a su hermano porque necesitaba ayuda con el ordenador. Su hermano llegó por la tarde, solucionó el problema y se quedó a cenar.” ¿Por qué llamó Pedro a su hermano?',
                        'choices' => [
                            ['choice_text' => 'Porque quería ir al cine.', 'is_correct' => false],
                            ['choice_text' => 'Porque quería cocinar.', 'is_correct' => false],
                            ['choice_text' => 'Porque había perdido sus llaves.', 'is_correct' => false],
                            ['choice_text' => 'Porque necesitaba ayuda con el ordenador.', 'is_correct' => true],
                        ],
                        'explanation' => 'Pedro a appelé parce qu’il avait besoin d’aide avec son ordinateur.',
                    ],
                    [
                        'question' => 'Escucha: “Pedro llamó a su hermano porque necesitaba ayuda con el ordenador. Su hermano llegó por la tarde, solucionó el problema y se quedó a cenar.” ¿Qué hizo el hermano después de llegar?',
                        'choices' => [
                            ['choice_text' => 'Solucionó el problema y se quedó a cenar.', 'is_correct' => true],
                            ['choice_text' => 'Se fue inmediatamente.', 'is_correct' => false],
                            ['choice_text' => 'Compró un ordenador nuevo.', 'is_correct' => false],
                            ['choice_text' => 'Fue al trabajo.', 'is_correct' => false],
                        ],
                        'explanation' => 'Le frère a réglé le problème et est resté dîner.',
                    ],
                    [
                        'question' => 'Escucha: “Elena pensaba ir en autobús, pero empezó a llover mucho. Decidió pedir un taxi y llegó a tiempo a la estación.” ¿Cómo fue Elena finalmente a la estación?',
                        'choices' => [
                            ['choice_text' => 'En autobús.', 'is_correct' => false],
                            ['choice_text' => 'A pie.', 'is_correct' => false],
                            ['choice_text' => 'En tren.', 'is_correct' => false],
                            ['choice_text' => 'En taxi.', 'is_correct' => true],
                        ],
                        'explanation' => 'Elle a changé ses plans à cause de la forte pluie et a pris un taxi.',
                    ],
                    [
                        'question' => 'Escucha: “Elena pensaba ir en autobús, pero empezó a llover mucho. Decidió pedir un taxi y llegó a tiempo a la estación.” ¿Por qué cambió de plan?',
                        'choices' => [
                            ['choice_text' => 'Porque perdió el autobús.', 'is_correct' => false],
                            ['choice_text' => 'Porque empezó a llover mucho.', 'is_correct' => true],
                            ['choice_text' => 'Porque la estación estaba cerrada.', 'is_correct' => false],
                            ['choice_text' => 'Porque no tenía dinero.', 'is_correct' => false],
                        ],
                        'explanation' => 'La forte pluie est à l’origine du changement de plan.',
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
