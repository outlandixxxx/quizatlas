<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class SpanishVocabularyBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'spanish-vocabulary')->firstOrFail();

        $quizzes = [
            [
                'title' => 'Everyday Spanish Vocabulary',
                'description' => 'Build a practical base of everyday Spanish words for common objects, places, and daily activities.',
                'duration' => 15,
                'passing_score' => 50,
                'questions' => [
                    [
                        'question' => 'You are in a Spanish-speaking café and want to ask for a glass of water. Which word do you need?',
                        'explanation' => 'Agua means “water,” so “un vaso de agua” is a glass of water.',
                        'choices' => [
                            [
                                'choice_text' => 'agua',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'puerta',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'mesa',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'ventana',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Marta leaves her house and closes the ______ behind her. Which word fits?',
                        'explanation' => 'Puerta means “door,” the object Marta closes when she leaves.',
                        'choices' => [
                            [
                                'choice_text' => 'puerta',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'cuchara',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'camisa',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'zapato',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Which Spanish word would you use for a table in a classroom or restaurant?',
                        'explanation' => 'Mesa means “table.” A silla is a chair, so it does not fit the sentence.',
                        'choices' => [
                            [
                                'choice_text' => 'mesa',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'silla',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'pared',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'techo',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'A friend tells you, “Tengo un libro nuevo.” What does the highlighted object refer to?',
                        'explanation' => 'Libro means “book.” The sentence says the person has a new book.',
                        'choices' => [
                            [
                                'choice_text' => 'a book',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'a key',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'a phone',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'a wallet',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'You see the sign “Entrada” on a building. What is it telling you?',
                        'explanation' => 'Entrada means “entrance,” the place where you go into a building.',
                        'choices' => [
                            [
                                'choice_text' => 'Entrance',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Exit',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Bathroom',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Kitchen',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Luis wants to sit down. Which word names what he is likely looking for?',
                        'explanation' => 'Silla means “chair,” which is what Luis needs to sit down.',
                        'choices' => [
                            [
                                'choice_text' => 'silla',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'reloj',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'cuchillo',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'cuaderno',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Someone says, “Mi teléfono está en la mochila.” Where is the phone?',
                        'explanation' => 'Mochila means “backpack,” so the phone is inside the backpack.',
                        'choices' => [
                            [
                                'choice_text' => 'In the backpack',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'On the table',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Under the bed',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'In the kitchen',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'At home, your mother asks you to open the ______ because the room is too dark. What is most likely meant?',
                        'explanation' => 'Ventana means “window.” Opening a window can let more light into a room.',
                        'choices' => [
                            [
                                'choice_text' => 'ventana',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'zapato',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'plato',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'camisa',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'A learner confuses “cama” with “casa.” Which pair gives the correct meanings?',
                        'explanation' => 'Cama means “bed,” while casa means “house.” They look similar but mean different things.',
                        'choices' => [
                            [
                                'choice_text' => 'bed / house',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'house / bed',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'chair / room',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'room / chair',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'You need to write down a phone number during a lesson. Which object would be the natural choice?',
                        'explanation' => 'Cuaderno means “notebook,” a practical place to write notes or numbers.',
                        'choices' => [
                            [
                                'choice_text' => 'cuaderno',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'almohada',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'espejo',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'tenedor',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Which word best completes this sentence: “Las llaves están sobre la ______.”',
                        'explanation' => 'Mesa means “table,” so the sentence says the keys are on the table.',
                        'choices' => [
                            [
                                'choice_text' => 'mesa',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'camisa',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'cama',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'puerta',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Your hotel room has no “toalla.” What item are you missing?',
                        'explanation' => 'Toalla means “towel,” the item normally used after washing.',
                        'choices' => [
                            [
                                'choice_text' => 'Towel',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Blanket',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Pillow',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Lamp',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Food and Drinks in Spanish',
                'description' => 'Practice common food and drink vocabulary and learn to recognize words in simple restaurant and shopping situations.',
                'duration' => 20,
                'passing_score' => 60,
                'questions' => [
                    [
                        'question' => 'You are ordering breakfast and want bread. Which word should you look for on the menu?',
                        'explanation' => 'Pan means “bread.”',
                        'choices' => [
                            [
                                'choice_text' => 'pan',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'pescado',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'queso',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'arroz',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'A recipe asks for “dos huevos.” What should you add?',
                        'explanation' => 'Huevo means “egg,” and huevos is the plural form.',
                        'choices' => [
                            [
                                'choice_text' => 'Two eggs',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Two apples',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Two onions',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Two cakes',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Which Spanish word means “milk”?',
                        'explanation' => 'Leche is the standard Spanish word for milk.',
                        'choices' => [
                            [
                                'choice_text' => 'leche',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'sal',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'carne',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'mantequilla',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'You are shopping for fruit and see “manzanas.” What are you looking at?',
                        'explanation' => 'Manzana means “apple,” and manzanas means “apples.”',
                        'choices' => [
                            [
                                'choice_text' => 'Apples',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Oranges',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Peaches',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Grapes',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'A waiter asks, “¿Café o té?” What two drinks is he offering?',
                        'explanation' => 'Café is coffee and té is tea.',
                        'choices' => [
                            [
                                'choice_text' => 'Coffee or tea',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Milk or water',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Juice or wine',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Soup or coffee',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Which item would most naturally be served with a knife at dinner?',
                        'explanation' => 'Carne means “meat,” which is commonly cut with a knife.',
                        'choices' => [
                            [
                                'choice_text' => 'carne',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'agua',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'azúcar',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'sal',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Sara says, “No quiero azúcar en mi café.” What does she want to avoid?',
                        'explanation' => 'Azúcar means “sugar,” so Sara does not want sugar in her coffee.',
                        'choices' => [
                            [
                                'choice_text' => 'Sugar',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Salt',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Milk',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Bread',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'A child asks for “jugo de naranja.” What drink is that?',
                        'explanation' => 'Naranja means “orange,” so jugo de naranja is orange juice.',
                        'choices' => [
                            [
                                'choice_text' => 'Orange juice',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Apple juice',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Orange soda',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Lemon tea',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Which word would you expect on a menu next to vegetarian dishes?',
                        'explanation' => 'Verduras means “vegetables,” making it the natural choice for a vegetable-based dish.',
                        'choices' => [
                            [
                                'choice_text' => 'verduras',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'pescado',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'pollo',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'jamón',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'A shopper reads “queso” on a label. What product is it?',
                        'explanation' => 'Queso means “cheese.”',
                        'choices' => [
                            [
                                'choice_text' => 'Cheese',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Butter',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Rice',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Cream',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'You are very thirsty after a walk. Which order makes the most sense?',
                        'explanation' => 'Un vaso de agua means “a glass of water,” which fits the situation.',
                        'choices' => [
                            [
                                'choice_text' => 'un vaso de agua',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'una taza de arroz',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'un plato de pan',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'una botella de sal',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Which pair belongs entirely to the category of fruit?',
                        'explanation' => 'Pera means “pear” and uva means “grape”; both are fruits.',
                        'choices' => [
                            [
                                'choice_text' => 'pera and uva',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'pan and arroz',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'queso and leche',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'pollo and pescado',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'A recipe says “añade una cebolla.” What should you add?',
                        'explanation' => 'Cebolla means “onion.”',
                        'choices' => [
                            [
                                'choice_text' => 'An onion',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'A carrot',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'A potato',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'A tomato',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'If someone says “La sopa está caliente,” what are they commenting on?',
                        'explanation' => 'Caliente means “hot,” so the sentence says the soup is hot.',
                        'choices' => [
                            [
                                'choice_text' => 'The soup is hot',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'The soup is cold',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'The soup is sweet',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'The soup is expensive',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Which word would be useful when asking a bakery for a sweet dessert?',
                        'explanation' => 'Pastel can mean “cake” or a similar sweet pastry, depending on context.',
                        'choices' => [
                            [
                                'choice_text' => 'pastel',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'pescado',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'tenedor',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'sal',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'People, Family, and Descriptions',
                'description' => 'Learn everyday vocabulary for family members, people, and simple descriptions of who someone is.',
                'duration' => 15,
                'passing_score' => 55,
                'questions' => [
                    [
                        'question' => 'Ana introduces “mi hermano.” Who is she talking about?',
                        'explanation' => 'Hermano means “brother.”',
                        'choices' => [
                            [
                                'choice_text' => 'Her brother',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Her cousin',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Her father',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Her uncle',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Which Spanish word means “mother”?',
                        'explanation' => 'Madre means “mother.”',
                        'choices' => [
                            [
                                'choice_text' => 'madre',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'hija',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'tía',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'prima',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Carlos says, “Mi hermana vive en Madrid.” Who lives in Madrid?',
                        'explanation' => 'Hermana is the feminine form of hermano, meaning “sister.”',
                        'choices' => [
                            [
                                'choice_text' => 'His sister',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'His mother',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'His aunt',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'His daughter',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Your friend says “mi abuelo.” Which family member is that?',
                        'explanation' => 'Abuelo means “grandfather.”',
                        'choices' => [
                            [
                                'choice_text' => 'Grandfather',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Grandson',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Father',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Uncle',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Which word describes a person who is not married?',
                        'explanation' => 'Soltero means “single” or “unmarried” for a man; soltera is the feminine form.',
                        'choices' => [
                            [
                                'choice_text' => 'soltero',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'casado',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'padre',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'vecino',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'María says “Esta es mi hija.” Who is the girl?',
                        'explanation' => 'Hija means “daughter.”',
                        'choices' => [
                            [
                                'choice_text' => 'Her daughter',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Her sister',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Her niece',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Her mother',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'A family photo has a “tío.” What relationship does that person have to the speaker?',
                        'explanation' => 'Tío means “uncle.”',
                        'choices' => [
                            [
                                'choice_text' => 'Uncle',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Nephew',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Brother',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Grandfather',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Which word would you use for a neighbor rather than a family member?',
                        'explanation' => 'Vecino means “neighbor.” The others are family terms.',
                        'choices' => [
                            [
                                'choice_text' => 'vecino',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'primo',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'sobrino',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'abuela',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Luis describes his friend as “amable.” What kind of person is he?',
                        'explanation' => 'Amable describes someone as kind, pleasant, or friendly.',
                        'choices' => [
                            [
                                'choice_text' => 'Kind or friendly',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Very young',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Very tall',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Very noisy',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'A beginner learns “padre” and “madre.” Which relationship do the words identify together?',
                        'explanation' => 'Padre means father and madre means mother, so together they refer to parents.',
                        'choices' => [
                            [
                                'choice_text' => 'Parents',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Siblings',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Grandparents',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Children',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Numbers, Dates, and Time Words',
                'description' => 'Practice beginner vocabulary for numbers, days, months, dates, and common time expressions used in everyday Spanish.',
                'duration' => 25,
                'passing_score' => 60,
                'questions' => [
                    [
                        'question' => 'Which number is “ocho”?',
                        'explanation' => 'Ocho means “eight.”',
                        'choices' => [
                            [
                                'choice_text' => '8',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => '6',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '9',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '10',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'You see “quince” on a form asking for your age. What number is it?',
                        'explanation' => 'Quince means “fifteen.”',
                        'choices' => [
                            [
                                'choice_text' => '15',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => '14',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '16',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '50',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Which Spanish word means “Monday”?',
                        'explanation' => 'Lunes is Monday.',
                        'choices' => [
                            [
                                'choice_text' => 'lunes',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'jueves',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'martes',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'domingo',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'A meeting is scheduled for “viernes.” Which day is that?',
                        'explanation' => 'Viernes means Friday.',
                        'choices' => [
                            [
                                'choice_text' => 'Friday',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Wednesday',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Saturday',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Tuesday',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'What month comes after “marzo”?',
                        'explanation' => 'Abril, April, comes immediately after marzo, March.',
                        'choices' => [
                            [
                                'choice_text' => 'abril',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'mayo',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'febrero',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'junio',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Which month is “diciembre”?',
                        'explanation' => 'Diciembre means December.',
                        'choices' => [
                            [
                                'choice_text' => 'December',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'October',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'November',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'January',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'A ticket says “hoy.” What day does that refer to?',
                        'explanation' => 'Hoy means “today.”',
                        'choices' => [
                            [
                                'choice_text' => 'Today',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Tomorrow',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Yesterday',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Next week',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Your friend says, “Nos vemos mañana.” When will you meet?',
                        'explanation' => 'Mañana means “tomorrow.”',
                        'choices' => [
                            [
                                'choice_text' => 'Tomorrow',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Today',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Yesterday',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Last week',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Which word means “yesterday”?',
                        'explanation' => 'Ayer means “yesterday.”',
                        'choices' => [
                            [
                                'choice_text' => 'ayer',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'ahora',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'pronto',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'siempre',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'A shop is open “por la mañana.” When is that?',
                        'explanation' => 'Por la mañana means “in the morning.”',
                        'choices' => [
                            [
                                'choice_text' => 'In the morning',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'At night',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'In the afternoon',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'At midnight',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'If someone says “Son las dos,” what time are they stating?',
                        'explanation' => 'Son las dos literally identifies the time as two o’clock.',
                        'choices' => [
                            [
                                'choice_text' => '2 o’clock',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => '12 o’clock',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '4 o’clock',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '10 o’clock',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Which expression means “at night”?',
                        'explanation' => 'Por la noche means “at night.”',
                        'choices' => [
                            [
                                'choice_text' => 'por la noche',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'por la tarde',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'por la mañana',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'al mediodía',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'What does “media hora” describe?',
                        'explanation' => 'Media hora means “half an hour.”',
                        'choices' => [
                            [
                                'choice_text' => 'Half an hour',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'A full hour',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'A quarter of an hour',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Two hours',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'A lesson begins “a las nueve.” When does it begin?',
                        'explanation' => 'A las nueve means “at nine o’clock.”',
                        'choices' => [
                            [
                                'choice_text' => 'At nine',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'At seven',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'At ten',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'At noon',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Which day comes immediately before domingo?',
                        'explanation' => 'Sábado means Saturday, the day before Sunday.',
                        'choices' => [
                            [
                                'choice_text' => 'sábado',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'lunes',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'viernes',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'martes',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'You are reading a schedule and see “antes.” Which time relationship does it express?',
                        'explanation' => 'Antes means “before.”',
                        'choices' => [
                            [
                                'choice_text' => 'Before',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'After',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'During',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Between',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Which word means “later” in a simple everyday sentence?',
                        'explanation' => 'Después means “after” or “later,” depending on context.',
                        'choices' => [
                            [
                                'choice_text' => 'después',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'nunca',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'ayer',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'temprano',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'A friend says, “Tengo diez minutos.” How much time does she have?',
                        'explanation' => 'Diez means ten, and minutos means minutes.',
                        'choices' => [
                            [
                                'choice_text' => 'Ten minutes',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Ten hours',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Twenty minutes',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'One minute',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Home, School, and Work Vocabulary',
                'description' => 'Use practical vocabulary for rooms, school materials, workplaces, and simple everyday tasks.',
                'duration' => 20,
                'passing_score' => 60,
                'questions' => [
                    [
                        'question' => 'Which Spanish word means “kitchen”?',
                        'explanation' => 'Cocina means “kitchen.”',
                        'choices' => [
                            [
                                'choice_text' => 'cocina',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'oficina',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'biblioteca',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'baño',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'A student needs to borrow a book. Where would she most likely go?',
                        'explanation' => 'Biblioteca means “library,” the natural place to borrow a book.',
                        'choices' => [
                            [
                                'choice_text' => 'biblioteca',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'garaje',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'cocina',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'jardín',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Which object would you use to write with ink?',
                        'explanation' => 'Bolígrafo means “pen.”',
                        'choices' => [
                            [
                                'choice_text' => 'bolígrafo',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'almohada',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'espejo',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'plato',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'A teacher says, “Abran sus cuadernos.” What should students open?',
                        'explanation' => 'Cuadernos means “notebooks.”',
                        'choices' => [
                            [
                                'choice_text' => 'Their notebooks',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Their doors',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Their windows',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Their bags',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Which word refers to an office?',
                        'explanation' => 'Oficina means “office.”',
                        'choices' => [
                            [
                                'choice_text' => 'oficina',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'cama',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'cocina',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'sala',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'You are at work and need to speak with your “jefe.” Who is that?',
                        'explanation' => 'Jefe means “boss” or “manager.”',
                        'choices' => [
                            [
                                'choice_text' => 'Your boss',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Your customer',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Your colleague',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Your student',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Which item is most useful for cutting paper?',
                        'explanation' => 'Tijeras means “scissors,” the tool used to cut paper.',
                        'choices' => [
                            [
                                'choice_text' => 'tijeras',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'lápiz',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'regla',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'borrador',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'A room has a “pared” and a “techo.” Which pair is being named?',
                        'explanation' => 'Pared means wall and techo means ceiling.',
                        'choices' => [
                            [
                                'choice_text' => 'Wall and ceiling',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Floor and door',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Window and wall',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Desk and chair',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'A student asks for a “lápiz.” What is she looking for?',
                        'explanation' => 'Lápiz means “pencil.”',
                        'choices' => [
                            [
                                'choice_text' => 'A pencil',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'A notebook',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'A ruler',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'A backpack',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Which word fits a sentence about a workplace meeting: “La reunión es en la ______.”',
                        'explanation' => 'Oficina means office, a natural setting for a workplace meeting.',
                        'choices' => [
                            [
                                'choice_text' => 'oficina',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'almohada',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'nevera',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'ducha',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'If a teacher says “Escuchen,” what skill is the instruction asking students to use?',
                        'explanation' => 'Escuchen comes from escuchar, “to listen,” so the instruction tells students to listen.',
                        'choices' => [
                            [
                                'choice_text' => 'Listen',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Write',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Sleep',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Run',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Which Spanish word means “homework”?',
                        'explanation' => 'Tarea means “task” or “homework” in a school context.',
                        'choices' => [
                            [
                                'choice_text' => 'tarea',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'recreo',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'examen',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'pizarra',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'A student sees “pizarra” in the classroom. What is it?',
                        'explanation' => 'Pizarra commonly means the board used for writing in a classroom.',
                        'choices' => [
                            [
                                'choice_text' => 'A board',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'A chair',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'A book',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'A door',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Which word would you use for a refrigerator?',
                        'explanation' => 'Nevera is a common word for refrigerator.',
                        'choices' => [
                            [
                                'choice_text' => 'nevera',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'escritorio',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'armario',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'ventilador',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Travel, Shopping, and Public Places',
                'description' => 'Practice useful vocabulary for getting around, buying things, and handling simple situations in public places.',
                'duration' => 25,
                'passing_score' => 65,
                'questions' => [
                    [
                        'question' => 'You are traveling and need a train ticket. Which word is most relevant?',
                        'explanation' => 'Billete can mean a ticket, including a travel ticket, depending on context and region.',
                        'choices' => [
                            [
                                'choice_text' => 'billete',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'almohada',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'cuchara',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'camisa',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'A tourist asks, “¿Dónde está la estación?” What place are they looking for?',
                        'explanation' => 'Estación means “station,” such as a train or bus station.',
                        'choices' => [
                            [
                                'choice_text' => 'The station',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'The supermarket',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'The hotel room',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'The restaurant table',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Which Spanish word means “street”?',
                        'explanation' => 'Calle means “street.”',
                        'choices' => [
                            [
                                'choice_text' => 'calle',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'plaza',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'tienda',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'puente',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'You want to buy a shirt. Which place would make the most sense?',
                        'explanation' => 'Tienda means “shop” or “store.”',
                        'choices' => [
                            [
                                'choice_text' => 'tienda',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'aeropuerto',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'estación',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'biblioteca',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'A traveler asks for the “aeropuerto.” Where do they want to go?',
                        'explanation' => 'Aeropuerto means “airport.”',
                        'choices' => [
                            [
                                'choice_text' => 'Airport',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Bus stop',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Hotel',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Museum',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Which word is useful when asking for the price of something?',
                        'explanation' => 'Precio means “price.”',
                        'choices' => [
                            [
                                'choice_text' => 'precio',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'tamaño',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'color',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'puerta',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'A shop assistant asks, “¿Qué talla necesita?” What information does she want?',
                        'explanation' => 'Talla means “size,” especially clothing size.',
                        'choices' => [
                            [
                                'choice_text' => 'What size you need',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'What color you prefer',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'What time you leave',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'What food you want',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'A sign says “Salida.” Which direction does it indicate?',
                        'explanation' => 'Salida means “exit,” the place or direction for leaving.',
                        'choices' => [
                            [
                                'choice_text' => 'Exit',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Entrance',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Elevator',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Ticket office',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'You are lost and want to ask where the hotel is. Which word completes the question “¿Dónde está el ______?”',
                        'explanation' => 'Hotel is the same common word in Spanish, so the question asks where the hotel is.',
                        'choices' => [
                            [
                                'choice_text' => 'hotel',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'precio',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'billete',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'equipaje',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'A traveler has “equipaje.” What do they have with them?',
                        'explanation' => 'Equipaje means “luggage” or “baggage.”',
                        'choices' => [
                            [
                                'choice_text' => 'Luggage',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Money only',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'A passport only',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'A map only',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Which word means “map”?',
                        'explanation' => 'Mapa means “map.”',
                        'choices' => [
                            [
                                'choice_text' => 'mapa',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'mercado',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'moneda',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'maleta',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Vocabulary in Short Real-Life Situations',
                'description' => 'Choose the right Spanish word from context and distinguish between common words that beginners often confuse.',
                'duration' => 20,
                'passing_score' => 65,
                'questions' => [
                    [
                        'question' => 'Diego is cold and reaches for his “chaqueta.” What is he putting on?',
                        'explanation' => 'Chaqueta means “jacket.”',
                        'choices' => [
                            [
                                'choice_text' => 'A jacket',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'A hat',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'A glove',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'A shoe',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Someone says, “Necesito dormir.” What do they need to do?',
                        'explanation' => 'Dormir means “to sleep.”',
                        'choices' => [
                            [
                                'choice_text' => 'Sleep',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Eat',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Work',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Drive',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'A friend says, “Voy a comprar pan.” What is the plan?',
                        'explanation' => 'Comprar means “to buy,” and pan means “bread.”',
                        'choices' => [
                            [
                                'choice_text' => 'To buy bread',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'To sell bread',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'To cook soup',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'To drink coffee',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Which word would you choose for “money” in a basic shopping conversation?',
                        'explanation' => 'Dinero means “money.”',
                        'choices' => [
                            [
                                'choice_text' => 'dinero',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'derecho',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'desayuno',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'detalle',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'A hotel guest asks for “una habitación.” What do they need?',
                        'explanation' => 'Habitación means “room,” commonly a hotel room.',
                        'choices' => [
                            [
                                'choice_text' => 'A room',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'A meal',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'A ticket',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'A towel',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Which pair is easiest to confuse because both refer to places in a home?',
                        'explanation' => 'Cocina means kitchen and baño means bathroom; both are rooms in a home.',
                        'choices' => [
                            [
                                'choice_text' => 'cocina and baño',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'mesa and silla',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'pan and leche',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'lunes and martes',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Sara says, “Tengo hambre,” before dinner. What does she mean?',
                        'explanation' => 'Hambre means “hunger,” and “tener hambre” is the normal expression for being hungry.',
                        'choices' => [
                            [
                                'choice_text' => 'She is hungry',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'She is thirsty',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'She is tired',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'She is late',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'A learner sees “sed” and “hambre” and mixes them up. Which meaning is correct?',
                        'explanation' => 'Sed means thirst and hambre means hunger.',
                        'choices' => [
                            [
                                'choice_text' => 'Thirst / hunger',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Hunger / thirst',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Sleep / hunger',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Thirst / sleep',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'A customer wants to pay with cash. Which word is relevant?',
                        'explanation' => 'Efectivo means “cash” in a shopping or payment context.',
                        'choices' => [
                            [
                                'choice_text' => 'efectivo',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'equipaje',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'escalera',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'espejo',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Which word would you expect after “una taza de” in a breakfast conversation?',
                        'explanation' => 'Una taza de café means “a cup of coffee,” a natural breakfast expression.',
                        'choices' => [
                            [
                                'choice_text' => 'café',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'zapato',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'camisa',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'billete',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'A child says, “Estoy cansado.” What is the child communicating?',
                        'explanation' => 'Cansado means “tired” for a male speaker; the feminine form is cansada.',
                        'choices' => [
                            [
                                'choice_text' => 'He is tired',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'He is angry',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'He is hungry',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'He is lost',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Which word means “key,” something you might need to open a door?',
                        'explanation' => 'Llave means “key.”',
                        'choices' => [
                            [
                                'choice_text' => 'llave',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'lluvia',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'lata',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'lago',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'A tourist hears “izquierda.” Which direction should they take?',
                        'explanation' => 'Izquierda means “left.”',
                        'choices' => [
                            [
                                'choice_text' => 'Left',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Right',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Straight ahead',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Back',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Which word means “right” as a direction?',
                        'explanation' => 'Derecha means “right” when talking about direction.',
                        'choices' => [
                            [
                                'choice_text' => 'derecha',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'delante',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'debajo',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'dentro',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'A waiter brings “la cuenta.” What has arrived?',
                        'explanation' => 'La cuenta means “the bill” in a restaurant.',
                        'choices' => [
                            [
                                'choice_text' => 'The bill',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'The menu',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'The dessert',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'The reservation',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'A student says, “No encuentro mi mochila.” What problem does the student have?',
                        'explanation' => 'No encuentro means “I cannot find,” and mochila means “backpack.”',
                        'choices' => [
                            [
                                'choice_text' => 'They cannot find their backpack',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'They cannot open the door',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'They forgot their homework',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'They lost their phone number',
                                'is_correct' => false,
                            ],
                        ],
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
