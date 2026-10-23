<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Major;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class TranslationBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('major_id', Major::where('slug', 'spanish')->firstOrFail()->id)->where('name', 'Translation')->firstOrFail();

        $quizzes = [
            [
                'title' => 'Spanish to English and Arabic Basics',
                'description' => 'Translate common Spanish words and short expressions using English-Arabic answer pairs.',
                'settings' => ['duration' => 18, 'passing_score' => 50],
                'questions' => [
                    [
                        'question' => '¿Cuál es la traducción correcta de «hola»?',
                        'choices' => [
                            ['choice_text' => 'hello-مرحبا', 'is_correct' => true],
                            ['choice_text' => 'goodbye-مع السلامة', 'is_correct' => false],
                            ['choice_text' => 'thanks-شكرا', 'is_correct' => false],
                            ['choice_text' => 'please-من فضلك', 'is_correct' => false],
                        ],
                        'explanation' => '“Hola” means “hello” in English, and the matching Arabic greeting is “مرحبا”.',
                    ],
                    [
                        'question' => '¿Cuál es la traducción correcta de «gracias»?',
                        'choices' => [
                            ['choice_text' => 'thank you-شكرا', 'is_correct' => true],
                            ['choice_text' => 'sorry-آسف', 'is_correct' => false],
                            ['choice_text' => 'hello-مرحبا', 'is_correct' => false],
                            ['choice_text' => 'welcome-أهلا', 'is_correct' => false],
                        ],
                        'explanation' => '“Gracias” means “thank you”, which is “شكرا” in Arabic.',
                    ],
                    [
                        'question' => '¿Cuál es la traducción correcta de «adiós»?',
                        'choices' => [
                            ['choice_text' => 'goodbye-مع السلامة', 'is_correct' => true],
                            ['choice_text' => 'hello-مرحبا', 'is_correct' => false],
                            ['choice_text' => 'good morning-صباح الخير', 'is_correct' => false],
                            ['choice_text' => 'thank you-شكرا', 'is_correct' => false],
                        ],
                        'explanation' => '“Adiós” is “goodbye”, and “مع السلامة” is a common Arabic equivalent.',
                    ],
                    [
                        'question' => '¿Cuál es la traducción correcta de «por favor»?',
                        'choices' => [
                            ['choice_text' => 'please-من فضلك', 'is_correct' => true],
                            ['choice_text' => 'sorry-آسف', 'is_correct' => false],
                            ['choice_text' => 'welcome-مرحبا', 'is_correct' => false],
                            ['choice_text' => 'goodbye-مع السلامة', 'is_correct' => false],
                        ],
                        'explanation' => '“Por favor” means “please”, corresponding to “من فضلك” in Arabic.',
                    ],
                    [
                        'question' => '¿Cuál es la traducción correcta de «sí»?',
                        'choices' => [
                            ['choice_text' => 'yes-نعم', 'is_correct' => true],
                            ['choice_text' => 'no-لا', 'is_correct' => false],
                            ['choice_text' => 'maybe-ربما', 'is_correct' => false],
                            ['choice_text' => 'never-أبدا', 'is_correct' => false],
                        ],
                        'explanation' => '“Sí” means “yes”, and its Arabic equivalent is “نعم”.',
                    ],
                    [
                        'question' => '¿Cuál es la traducción correcta de «no»?',
                        'choices' => [
                            ['choice_text' => 'no-لا', 'is_correct' => true],
                            ['choice_text' => 'yes-نعم', 'is_correct' => false],
                            ['choice_text' => 'always-دائما', 'is_correct' => false],
                            ['choice_text' => 'maybe-ربما', 'is_correct' => false],
                        ],
                        'explanation' => '“No” means “no”, which is “لا” in Arabic.',
                    ],
                    [
                        'question' => '¿Cuál es la traducción correcta de «agua»?',
                        'choices' => [
                            ['choice_text' => 'water-ماء', 'is_correct' => true],
                            ['choice_text' => 'milk-حليب', 'is_correct' => false],
                            ['choice_text' => 'bread-خبز', 'is_correct' => false],
                            ['choice_text' => 'juice-عصير', 'is_correct' => false],
                        ],
                        'explanation' => '“Agua” means “water”, or “ماء” in Arabic.',
                    ],
                    [
                        'question' => '¿Cuál es la traducción correcta de «casa»?',
                        'choices' => [
                            ['choice_text' => 'house-منزل', 'is_correct' => true],
                            ['choice_text' => 'school-مدرسة', 'is_correct' => false],
                            ['choice_text' => 'street-شارع', 'is_correct' => false],
                            ['choice_text' => 'garden-حديقة', 'is_correct' => false],
                        ],
                        'explanation' => '“Casa” means “house”, and “منزل” is the matching Arabic word.',
                    ],
                    [
                        'question' => '¿Cuál es la traducción correcta de «escuela»?',
                        'choices' => [
                            ['choice_text' => 'school-مدرسة', 'is_correct' => true],
                            ['choice_text' => 'office-مكتب', 'is_correct' => false],
                            ['choice_text' => 'house-منزل', 'is_correct' => false],
                            ['choice_text' => 'library-مكتبة', 'is_correct' => false],
                        ],
                        'explanation' => '“Escuela” means “school”, which is “مدرسة” in Arabic.',
                    ],
                    [
                        'question' => '¿Cuál es la traducción correcta de «libro»?',
                        'choices' => [
                            ['choice_text' => 'book-كتاب', 'is_correct' => true],
                            ['choice_text' => 'pen-قلم', 'is_correct' => false],
                            ['choice_text' => 'table-طاولة', 'is_correct' => false],
                            ['choice_text' => 'door-باب', 'is_correct' => false],
                        ],
                        'explanation' => '“Libro” means “book”, or “كتاب” in Arabic.',
                    ],
                ],
            ],
            [
                'title' => 'Everyday Spanish Translation',
                'description' => 'Translate familiar everyday vocabulary and useful short expressions into English with Arabic equivalents.',
                'settings' => ['duration' => 20, 'passing_score' => 55],
                'questions' => [
                    [
                        'question' => '¿Cuál es la traducción correcta de «buenos días»?',
                        'choices' => [
                            ['choice_text' => 'good morning-صباح الخير', 'is_correct' => true],
                            ['choice_text' => 'good night-تصبح على خير', 'is_correct' => false],
                            ['choice_text' => 'good afternoon-مساء الخير', 'is_correct' => false],
                            ['choice_text' => 'see you-أراك لاحقا', 'is_correct' => false],
                        ],
                        'explanation' => '“Buenos días” means “good morning”, or “صباح الخير” in Arabic.',
                    ],
                    [
                        'question' => '¿Cuál es la traducción correcta de «buenas noches»?',
                        'choices' => [
                            ['choice_text' => 'good night-تصبح على خير', 'is_correct' => true],
                            ['choice_text' => 'good morning-صباح الخير', 'is_correct' => false],
                            ['choice_text' => 'goodbye-مع السلامة', 'is_correct' => false],
                            ['choice_text' => 'welcome-أهلا', 'is_correct' => false],
                        ],
                        'explanation' => '“Buenas noches” can be translated as “good night”, with the common Arabic expression “تصبح على خير”.',
                    ],
                    [
                        'question' => '¿Cuál es la traducción correcta de «¿Cómo estás?»?',
                        'choices' => [
                            ['choice_text' => 'How are you?-كيف حالك؟', 'is_correct' => true],
                            ['choice_text' => 'Where are you?-أين أنت؟', 'is_correct' => false],
                            ['choice_text' => 'What is your name?-ما اسمك؟', 'is_correct' => false],
                            ['choice_text' => 'How old are you?-كم عمرك؟', 'is_correct' => false],
                        ],
                        'explanation' => '“¿Cómo estás?” asks about someone\'s condition: “How are you?” or “كيف حالك؟”.',
                    ],
                    [
                        'question' => '¿Cuál es la traducción correcta de «¿Cómo te llamas?»?',
                        'choices' => [
                            ['choice_text' => 'What is your name?-ما اسمك؟', 'is_correct' => true],
                            ['choice_text' => 'How are you?-كيف حالك؟', 'is_correct' => false],
                            ['choice_text' => 'Where do you live?-أين تعيش؟', 'is_correct' => false],
                            ['choice_text' => 'What time is it?-كم الساعة؟', 'is_correct' => false],
                        ],
                        'explanation' => '“¿Cómo te llamas?” means “What is your name?” and “ما اسمك؟” is the Arabic equivalent.',
                    ],
                    [
                        'question' => '¿Cuál es la traducción correcta de «¿Dónde vives?»?',
                        'choices' => [
                            ['choice_text' => 'Where do you live?-أين تعيش؟', 'is_correct' => true],
                            ['choice_text' => 'Where are you going?-إلى أين تذهب؟', 'is_correct' => false],
                            ['choice_text' => 'Where is the school?-أين المدرسة؟', 'is_correct' => false],
                            ['choice_text' => 'Who are you?-من أنت؟', 'is_correct' => false],
                        ],
                        'explanation' => '“¿Dónde vives?” asks where someone lives: “Where do you live?” or “أين تعيش؟”.',
                    ],
                    [
                        'question' => '¿Cuál es la traducción correcta de «Tengo hambre»?',
                        'choices' => [
                            ['choice_text' => 'I am hungry-أنا جائع', 'is_correct' => true],
                            ['choice_text' => 'I am tired-أنا متعب', 'is_correct' => false],
                            ['choice_text' => 'I am happy-أنا سعيد', 'is_correct' => false],
                            ['choice_text' => 'I am cold-أشعر بالبرد', 'is_correct' => false],
                        ],
                        'explanation' => '“Tengo hambre” is expressed as “I am hungry” in English and “أنا جائع” in Arabic.',
                    ],
                    [
                        'question' => '¿Cuál es la traducción correcta de «Tengo sed»?',
                        'choices' => [
                            ['choice_text' => 'I am thirsty-أنا عطشان', 'is_correct' => true],
                            ['choice_text' => 'I am hungry-أنا جائع', 'is_correct' => false],
                            ['choice_text' => 'I am sleepy-أنا نعسان', 'is_correct' => false],
                            ['choice_text' => 'I am cold-أشعر بالبرد', 'is_correct' => false],
                        ],
                        'explanation' => '“Tengo sed” means “I am thirsty”, or “أنا عطشان” in Arabic.',
                    ],
                    [
                        'question' => '¿Cuál es la traducción correcta de «Hasta mañana»?',
                        'choices' => [
                            ['choice_text' => 'See you tomorrow-أراك غدا', 'is_correct' => true],
                            ['choice_text' => 'See you soon-أراك قريبا', 'is_correct' => false],
                            ['choice_text' => 'Good morning-صباح الخير', 'is_correct' => false],
                            ['choice_text' => 'Good luck-حظا سعيدا', 'is_correct' => false],
                        ],
                        'explanation' => '“Hasta mañana” means “See you tomorrow”, corresponding to “أراك غدا”.',
                    ],
                    [
                        'question' => '¿Cuál es la traducción correcta de «Perdón»?',
                        'choices' => [
                            ['choice_text' => 'Sorry-آسف', 'is_correct' => true],
                            ['choice_text' => 'Please-من فضلك', 'is_correct' => false],
                            ['choice_text' => 'Thanks-شكرا', 'is_correct' => false],
                            ['choice_text' => 'Welcome-أهلا', 'is_correct' => false],
                        ],
                        'explanation' => '“Perdón” can mean “sorry” in everyday situations, with “آسف” as the Arabic equivalent.',
                    ],
                    [
                        'question' => '¿Cuál es la traducción correcta de «Bienvenido»?',
                        'choices' => [
                            ['choice_text' => 'Welcome-أهلا وسهلا', 'is_correct' => true],
                            ['choice_text' => 'Goodbye-مع السلامة', 'is_correct' => false],
                            ['choice_text' => 'Excuse me-عذرا', 'is_correct' => false],
                            ['choice_text' => 'Congratulations-مبروك', 'is_correct' => false],
                        ],
                        'explanation' => '“Bienvenido” means “welcome”, commonly expressed as “أهلا وسهلا” in Arabic.',
                    ],
                    [
                        'question' => '¿Cuál es la traducción correcta de «Buena suerte»?',
                        'choices' => [
                            ['choice_text' => 'Good luck-حظا سعيدا', 'is_correct' => true],
                            ['choice_text' => 'Congratulations-مبروك', 'is_correct' => false],
                            ['choice_text' => 'Good idea-فكرة جيدة', 'is_correct' => false],
                            ['choice_text' => 'Good night-تصبح على خير', 'is_correct' => false],
                        ],
                        'explanation' => '“Buena suerte” means “good luck”, or “حظا سعيدا” in Arabic.',
                    ],
                ],
            ],
            [
                'title' => 'School and Study Translation',
                'description' => 'Practice Spanish-to-English-and-Arabic translation with common school and study vocabulary.',
                'settings' => ['duration' => 22, 'passing_score' => 60],
                'questions' => [
                    [
                        'question' => '¿Cuál es la traducción correcta de «profesor»?',
                        'choices' => [
                            ['choice_text' => 'teacher-معلم', 'is_correct' => true],
                            ['choice_text' => 'student-طالب', 'is_correct' => false],
                            ['choice_text' => 'doctor-طبيب', 'is_correct' => false],
                            ['choice_text' => 'driver-سائق', 'is_correct' => false],
                        ],
                        'explanation' => '“Profesor” means “teacher”, and “معلم” is an Arabic equivalent.',
                    ],
                    [
                        'question' => '¿Cuál es la traducción correcta de «estudiante»?',
                        'choices' => [
                            ['choice_text' => 'student-طالب', 'is_correct' => true],
                            ['choice_text' => 'teacher-معلم', 'is_correct' => false],
                            ['choice_text' => 'friend-صديق', 'is_correct' => false],
                            ['choice_text' => 'worker-عامل', 'is_correct' => false],
                        ],
                        'explanation' => '“Estudiante” means “student”, corresponding to “طالب” in Arabic.',
                    ],
                    [
                        'question' => '¿Cuál es la traducción correcta de «clase»?',
                        'choices' => [
                            ['choice_text' => 'class-صف', 'is_correct' => true],
                            ['choice_text' => 'exam-امتحان', 'is_correct' => false],
                            ['choice_text' => 'book-كتاب', 'is_correct' => false],
                            ['choice_text' => 'home-منزل', 'is_correct' => false],
                        ],
                        'explanation' => 'In a school context, “clase” means “class”, with “صف” as a common Arabic equivalent.',
                    ],
                    [
                        'question' => '¿Cuál es la traducción correcta de «examen»?',
                        'choices' => [
                            ['choice_text' => 'exam-امتحان', 'is_correct' => true],
                            ['choice_text' => 'lesson-درس', 'is_correct' => false],
                            ['choice_text' => 'question-سؤال', 'is_correct' => false],
                            ['choice_text' => 'answer-إجابة', 'is_correct' => false],
                        ],
                        'explanation' => '“Examen” means “exam”, or “امتحان” in Arabic.',
                    ],
                    [
                        'question' => '¿Cuál es la traducción correcta de «pregunta»?',
                        'choices' => [
                            ['choice_text' => 'question-سؤال', 'is_correct' => true],
                            ['choice_text' => 'answer-إجابة', 'is_correct' => false],
                            ['choice_text' => 'exercise-تمرين', 'is_correct' => false],
                            ['choice_text' => 'lesson-درس', 'is_correct' => false],
                        ],
                        'explanation' => '“Pregunta” means “question”, which is “سؤال” in Arabic.',
                    ],
                    [
                        'question' => '¿Cuál es la traducción correcta de «respuesta»?',
                        'choices' => [
                            ['choice_text' => 'answer-إجابة', 'is_correct' => true],
                            ['choice_text' => 'question-سؤال', 'is_correct' => false],
                            ['choice_text' => 'problem-مشكلة', 'is_correct' => false],
                            ['choice_text' => 'example-مثال', 'is_correct' => false],
                        ],
                        'explanation' => '“Respuesta” means “answer”, corresponding to “إجابة” in Arabic.',
                    ],
                    [
                        'question' => '¿Cuál es la traducción correcta de «tarea»?',
                        'choices' => [
                            ['choice_text' => 'homework-واجب منزلي', 'is_correct' => true],
                            ['choice_text' => 'holiday-عطلة', 'is_correct' => false],
                            ['choice_text' => 'classroom-فصل دراسي', 'is_correct' => false],
                            ['choice_text' => 'library-مكتبة', 'is_correct' => false],
                        ],
                        'explanation' => '“Tarea” in a school context often means “homework”, or “واجب منزلي” in Arabic.',
                    ],
                    [
                        'question' => '¿Cuál es la traducción correcta de «biblioteca»?',
                        'choices' => [
                            ['choice_text' => 'library-مكتبة', 'is_correct' => true],
                            ['choice_text' => 'bookstore-مكتبة لبيع الكتب', 'is_correct' => false],
                            ['choice_text' => 'school-مدرسة', 'is_correct' => false],
                            ['choice_text' => 'office-مكتب', 'is_correct' => false],
                        ],
                        'explanation' => '“Biblioteca” means “library”, and “مكتبة” is the Arabic equivalent.',
                    ],
                    [
                        'question' => '¿Cuál es la traducción correcta de «aprender»?',
                        'choices' => [
                            ['choice_text' => 'to learn-يتعلم', 'is_correct' => true],
                            ['choice_text' => 'to teach-يعلّم', 'is_correct' => false],
                            ['choice_text' => 'to read-يقرأ', 'is_correct' => false],
                            ['choice_text' => 'to write-يكتب', 'is_correct' => false],
                        ],
                        'explanation' => '“Aprender” means “to learn”. The Arabic verb “يتعلم” expresses the same idea.',
                    ],
                    [
                        'question' => '¿Cuál es la traducción correcta de «leer»?',
                        'choices' => [
                            ['choice_text' => 'to read-يقرأ', 'is_correct' => true],
                            ['choice_text' => 'to write-يكتب', 'is_correct' => false],
                            ['choice_text' => 'to speak-يتحدث', 'is_correct' => false],
                            ['choice_text' => 'to listen-يستمع', 'is_correct' => false],
                        ],
                        'explanation' => '“Leer” means “to read”, corresponding to “يقرأ” in Arabic.',
                    ],
                    [
                        'question' => '¿Cuál es la traducción correcta de «escribir»?',
                        'choices' => [
                            ['choice_text' => 'to write-يكتب', 'is_correct' => true],
                            ['choice_text' => 'to read-يقرأ', 'is_correct' => false],
                            ['choice_text' => 'to study-يدرس', 'is_correct' => false],
                            ['choice_text' => 'to answer-يجيب', 'is_correct' => false],
                        ],
                        'explanation' => '“Escribir” means “to write”, or “يكتب” in Arabic.',
                    ],
                    [
                        'question' => '¿Cuál es la traducción correcta de «estudiar»?',
                        'choices' => [
                            ['choice_text' => 'to study-يدرس', 'is_correct' => true],
                            ['choice_text' => 'to travel-يسافر', 'is_correct' => false],
                            ['choice_text' => 'to work-يعمل', 'is_correct' => false],
                            ['choice_text' => 'to play-يلعب', 'is_correct' => false],
                        ],
                        'explanation' => '“Estudiar” means “to study”, and “يدرس” is the matching Arabic verb.',
                    ],
                ],
            ],
            [
                'title' => 'Travel, Food, and Daily Life Translation',
                'description' => 'Translate useful beginner Spanish vocabulary for travel, food, shopping, and daily activities.',
                'settings' => ['duration' => 20, 'passing_score' => 55],
                'questions' => [
                    [
                        'question' => '¿Cuál es la traducción correcta de «hotel»?',
                        'choices' => [
                            ['choice_text' => 'hotel-فندق', 'is_correct' => true],
                            ['choice_text' => 'restaurant-مطعم', 'is_correct' => false],
                            ['choice_text' => 'airport-مطار', 'is_correct' => false],
                            ['choice_text' => 'station-محطة', 'is_correct' => false],
                        ],
                        'explanation' => '“Hotel” means “hotel”, or “فندق” in Arabic.',
                    ],
                    [
                        'question' => '¿Cuál es la traducción correcta de «aeropuerto»?',
                        'choices' => [
                            ['choice_text' => 'airport-مطار', 'is_correct' => true],
                            ['choice_text' => 'hotel-فندق', 'is_correct' => false],
                            ['choice_text' => 'station-محطة', 'is_correct' => false],
                            ['choice_text' => 'market-سوق', 'is_correct' => false],
                        ],
                        'explanation' => '“Aeropuerto” means “airport”, corresponding to “مطار” in Arabic.',
                    ],
                    [
                        'question' => '¿Cuál es la traducción correcta de «estación»?',
                        'choices' => [
                            ['choice_text' => 'station-محطة', 'is_correct' => true],
                            ['choice_text' => 'airport-مطار', 'is_correct' => false],
                            ['choice_text' => 'hotel-فندق', 'is_correct' => false],
                            ['choice_text' => 'street-شارع', 'is_correct' => false],
                        ],
                        'explanation' => '“Estación” means “station” in a travel context, and “محطة” is the Arabic equivalent.',
                    ],
                    [
                        'question' => '¿Cuál es la traducción correcta de «comida»?',
                        'choices' => [
                            ['choice_text' => 'food-طعام', 'is_correct' => true],
                            ['choice_text' => 'drink-شراب', 'is_correct' => false],
                            ['choice_text' => 'fruit-فاكهة', 'is_correct' => false],
                            ['choice_text' => 'bread-خبز', 'is_correct' => false],
                        ],
                        'explanation' => '“Comida” means “food”, which is “طعام” in Arabic.',
                    ],
                    [
                        'question' => '¿Cuál es la traducción correcta de «desayuno»?',
                        'choices' => [
                            ['choice_text' => 'breakfast-فطور', 'is_correct' => true],
                            ['choice_text' => 'lunch-غداء', 'is_correct' => false],
                            ['choice_text' => 'dinner-عشاء', 'is_correct' => false],
                            ['choice_text' => 'snack-وجبة خفيفة', 'is_correct' => false],
                        ],
                        'explanation' => '“Desayuno” means “breakfast”, corresponding to “فطور” in Arabic.',
                    ],
                    [
                        'question' => '¿Cuál es la traducción correcta de «restaurante»?',
                        'choices' => [
                            ['choice_text' => 'restaurant-مطعم', 'is_correct' => true],
                            ['choice_text' => 'market-سوق', 'is_correct' => false],
                            ['choice_text' => 'kitchen-مطبخ', 'is_correct' => false],
                            ['choice_text' => 'hotel-فندق', 'is_correct' => false],
                        ],
                        'explanation' => '“Restaurante” means “restaurant”, or “مطعم” in Arabic.',
                    ],
                    [
                        'question' => '¿Cuál es la traducción correcta de «precio»?',
                        'choices' => [
                            ['choice_text' => 'price-سعر', 'is_correct' => true],
                            ['choice_text' => 'money-مال', 'is_correct' => false],
                            ['choice_text' => 'shop-متجر', 'is_correct' => false],
                            ['choice_text' => 'ticket-تذكرة', 'is_correct' => false],
                        ],
                        'explanation' => '“Precio” means “price”, which is “سعر” in Arabic.',
                    ],
                    [
                        'question' => '¿Cuál es la traducción correcta de «dinero»?',
                        'choices' => [
                            ['choice_text' => 'money-مال', 'is_correct' => true],
                            ['choice_text' => 'price-سعر', 'is_correct' => false],
                            ['choice_text' => 'bank-بنك', 'is_correct' => false],
                            ['choice_text' => 'card-بطاقة', 'is_correct' => false],
                        ],
                        'explanation' => '“Dinero” means “money”, corresponding to “مال” in Arabic.',
                    ],
                    [
                        'question' => '¿Cuál es la traducción correcta de «izquierda»?',
                        'choices' => [
                            ['choice_text' => 'left-يسار', 'is_correct' => true],
                            ['choice_text' => 'right-يمين', 'is_correct' => false],
                            ['choice_text' => 'straight-مستقيم', 'is_correct' => false],
                            ['choice_text' => 'near-cerca', 'is_correct' => false],
                        ],
                        'explanation' => '“Izquierda” means “left”, and “يسار” is the Arabic equivalent.',
                    ],
                    [
                        'question' => '¿Cuál es la traducción correcta de «derecha»?',
                        'choices' => [
                            ['choice_text' => 'right-يمين', 'is_correct' => true],
                            ['choice_text' => 'left-يسار', 'is_correct' => false],
                            ['choice_text' => 'straight-مستقيم', 'is_correct' => false],
                            ['choice_text' => 'behind-خلف', 'is_correct' => false],
                        ],
                        'explanation' => '“Derecha” means “right”, or “يمين” in Arabic.',
                    ],
                ],
            ],
            [
                'title' => 'Practical Translation Review',
                'description' => 'Review common Spanish phrases and vocabulary through practical bilingual English-Arabic choices.',
                'settings' => ['duration' => 22, 'passing_score' => 65],
                'questions' => [
                    [
                        'question' => '¿Cuál es la traducción correcta de «Necesito ayuda»?',
                        'choices' => [
                            ['choice_text' => 'I need help-أحتاج إلى المساعدة', 'is_correct' => true],
                            ['choice_text' => 'I need water-أحتاج إلى الماء', 'is_correct' => false],
                            ['choice_text' => 'I need a ticket-أحتاج إلى تذكرة', 'is_correct' => false],
                            ['choice_text' => 'I need money-أحتاج إلى المال', 'is_correct' => false],
                        ],
                        'explanation' => '“Necesito ayuda” means “I need help”, or “أحتاج إلى المساعدة” in Arabic.',
                    ],
                    [
                        'question' => '¿Cuál es la traducción correcta de «¿Cuánto cuesta?»?',
                        'choices' => [
                            ['choice_text' => 'How much does it cost?-كم يكلف؟', 'is_correct' => true],
                            ['choice_text' => 'Where is it?-أين هو؟', 'is_correct' => false],
                            ['choice_text' => 'What time is it?-كم الساعة؟', 'is_correct' => false],
                            ['choice_text' => 'What is it?-ما هذا؟', 'is_correct' => false],
                        ],
                        'explanation' => '“¿Cuánto cuesta?” asks for the price: “How much does it cost?” or “كم يكلف؟”.',
                    ],
                    [
                        'question' => '¿Cuál es la traducción correcta de «No entiendo»?',
                        'choices' => [
                            ['choice_text' => 'I don\'t understand-لا أفهم', 'is_correct' => true],
                            ['choice_text' => 'I don\'t know-لا أعرف', 'is_correct' => false],
                            ['choice_text' => 'I don\'t remember-لا أتذكر', 'is_correct' => false],
                            ['choice_text' => 'I don\'t want-لا أريد', 'is_correct' => false],
                        ],
                        'explanation' => '“No entiendo” means “I don\'t understand”, corresponding to “لا أفهم”.',
                    ],
                    [
                        'question' => '¿Cuál es la traducción correcta de «¿Puede repetir, por favor?»?',
                        'choices' => [
                            ['choice_text' => 'Can you repeat, please?-هل يمكنك أن تكرر، من فضلك؟', 'is_correct' => true],
                            ['choice_text' => 'Can you help me?-هل يمكنك مساعدتي؟', 'is_correct' => false],
                            ['choice_text' => 'Can you wait?-هل يمكنك الانتظار؟', 'is_correct' => false],
                            ['choice_text' => 'Can you write?-هل يمكنك الكتابة؟', 'is_correct' => false],
                        ],
                        'explanation' => 'This polite request asks someone to repeat something.',
                    ],
                    [
                        'question' => '¿Cuál es la traducción correcta de «Tengo una pregunta»?',
                        'choices' => [
                            ['choice_text' => 'I have a question-لدي سؤال', 'is_correct' => true],
                            ['choice_text' => 'I have an answer-لدي إجابة', 'is_correct' => false],
                            ['choice_text' => 'I have a problem-لدي مشكلة', 'is_correct' => false],
                            ['choice_text' => 'I have a book-لدي كتاب', 'is_correct' => false],
                        ],
                        'explanation' => '“Tengo una pregunta” means “I have a question”, or “لدي سؤال” in Arabic.',
                    ],
                    [
                        'question' => '¿Cuál es la traducción correcta de «¿Dónde está el baño?»?',
                        'choices' => [
                            ['choice_text' => 'Where is the bathroom?-أين الحمام؟', 'is_correct' => true],
                            ['choice_text' => 'Where is the hotel?-أين الفندق؟', 'is_correct' => false],
                            ['choice_text' => 'Where is the restaurant?-أين المطعم؟', 'is_correct' => false],
                            ['choice_text' => 'Where is the school?-أين المدرسة؟', 'is_correct' => false],
                        ],
                        'explanation' => '“¿Dónde está el baño?” asks for the location of the bathroom.',
                    ],
                    [
                        'question' => '¿Cuál es la traducción correcta de «Me gusta la música»?',
                        'choices' => [
                            ['choice_text' => 'I like music-أحب الموسيقى', 'is_correct' => true],
                            ['choice_text' => 'I love books-أحب الكتب', 'is_correct' => false],
                            ['choice_text' => 'I listen to music-أستمع إلى الموسيقى', 'is_correct' => false],
                            ['choice_text' => 'I study music-أدرس الموسيقى', 'is_correct' => false],
                        ],
                        'explanation' => '“Me gusta la música” means “I like music”, with “أحب الموسيقى” as the Arabic equivalent.',
                    ],
                    [
                        'question' => '¿Cuál es la traducción correcta de «Estoy cansado»?',
                        'choices' => [
                            ['choice_text' => 'I am tired-أنا متعب', 'is_correct' => true],
                            ['choice_text' => 'I am hungry-أنا جائع', 'is_correct' => false],
                            ['choice_text' => 'I am ready-أنا مستعد', 'is_correct' => false],
                            ['choice_text' => 'I am busy-أنا مشغول', 'is_correct' => false],
                        ],
                        'explanation' => '“Estoy cansado” means “I am tired”, or “أنا متعب” in Arabic.',
                    ],
                    [
                        'question' => '¿Cuál es la traducción correcta de «Nos vemos mañana»?',
                        'choices' => [
                            ['choice_text' => 'See you tomorrow-أراك غدا', 'is_correct' => true],
                            ['choice_text' => 'See you later-أراك لاحقا', 'is_correct' => false],
                            ['choice_text' => 'Good morning-صباح الخير', 'is_correct' => false],
                            ['choice_text' => 'Have a nice day-أتمنى لك يوما سعيدا', 'is_correct' => false],
                        ],
                        'explanation' => '“Nos vemos mañana” means “See you tomorrow”, corresponding to “أراك غدا”.',
                    ],
                    [
                        'question' => '¿Cuál es la traducción correcta de «Que tengas un buen día»?',
                        'choices' => [
                            ['choice_text' => 'Have a good day-أتمنى لك يوما سعيدا', 'is_correct' => true],
                            ['choice_text' => 'Good luck-حظا سعيدا', 'is_correct' => false],
                            ['choice_text' => 'Good night-تصبح على خير', 'is_correct' => false],
                            ['choice_text' => 'See you tomorrow-أراك غدا', 'is_correct' => false],
                        ],
                        'explanation' => 'This expression wishes someone a good day.',
                    ],
                    [
                        'question' => '¿Cuál es la traducción correcta de «Hasta luego»?',
                        'choices' => [
                            ['choice_text' => 'See you later-أراك لاحقا', 'is_correct' => true],
                            ['choice_text' => 'See you tomorrow-أراك غدا', 'is_correct' => false],
                            ['choice_text' => 'Goodbye forever-وداعا إلى الأبد', 'is_correct' => false],
                            ['choice_text' => 'Good morning-صباح الخير', 'is_correct' => false],
                        ],
                        'explanation' => '“Hasta luego” is a common way to say “see you later”, or “أراك لاحقا”.',
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
