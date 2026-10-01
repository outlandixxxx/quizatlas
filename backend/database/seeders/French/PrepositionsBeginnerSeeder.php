<?php

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class PrepositionsBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'prepositions')->firstOrFail();

        $quizzes = [
            [
                'title' => 'Les prépositions à et de',
                'description' => 'Maîtriser les emplois les plus courants des prépositions « à » et « de » dans des phrases simples.',
                'duration' => 15,
                'passing_score' => 55,
                'questions' => [
                    [
                        'question' => 'Complétez : « Je vais ___ l’école. »',
                        'choices' => [
                            ['choice_text' => 'à', 'is_correct' => true],
                            ['choice_text' => 'de', 'is_correct' => false],
                            ['choice_text' => 'sur', 'is_correct' => false],
                            ['choice_text' => 'chez', 'is_correct' => false],
                        ],
                        'explanation' => 'On utilise « à » pour indiquer la destination ou le lieu : « Je vais à l’école. »',
                    ],
                    [
                        'question' => 'Complétez : « Le livre est ___ Pierre. »',
                        'choices' => [
                            ['choice_text' => 'à', 'is_correct' => true],
                            ['choice_text' => 'pour', 'is_correct' => false],
                            ['choice_text' => 'sous', 'is_correct' => false],
                            ['choice_text' => 'par', 'is_correct' => false],
                        ],
                        'explanation' => '« Le livre est à Pierre » indique que le livre appartient à Pierre.',
                    ],
                    [
                        'question' => 'Complétez : « Je parle ___ mon professeur. »',
                        'choices' => [
                            ['choice_text' => 'à', 'is_correct' => true],
                            ['choice_text' => 'dans', 'is_correct' => false],
                            ['choice_text' => 'sur', 'is_correct' => false],
                            ['choice_text' => 'entre', 'is_correct' => false],
                        ],
                        'explanation' => 'Avec le verbe « parler », on utilise généralement « à » devant une personne : « parler à quelqu’un ».',
                    ],
                    [
                        'question' => 'Complétez : « Une tasse ___ café. »',
                        'choices' => [
                            ['choice_text' => 'de', 'is_correct' => true],
                            ['choice_text' => 'à', 'is_correct' => false],
                            ['choice_text' => 'pour', 'is_correct' => false],
                            ['choice_text' => 'chez', 'is_correct' => false],
                        ],
                        'explanation' => 'La préposition « de » permet ici d’indiquer le contenu : « une tasse de café ».',
                    ],
                    [
                        'question' => 'Quelle phrase est correcte ?',
                        'choices' => [
                            ['choice_text' => 'Nous allons à la bibliothèque.', 'is_correct' => true],
                            ['choice_text' => 'Nous allons de la bibliothèque.', 'is_correct' => false],
                            ['choice_text' => 'Nous allons sur la bibliothèque.', 'is_correct' => false],
                            ['choice_text' => 'Nous allons chez la bibliothèque.', 'is_correct' => false],
                        ],
                        'explanation' => 'Avec « aller » pour indiquer une destination, on utilise « à » devant un lieu comme « la bibliothèque ».',
                    ],
                    [
                        'question' => 'Complétez : « Je reviens ___ Paris demain. »',
                        'choices' => [
                            ['choice_text' => 'de', 'is_correct' => true],
                            ['choice_text' => 'à', 'is_correct' => false],
                            ['choice_text' => 'sur', 'is_correct' => false],
                            ['choice_text' => 'pour', 'is_correct' => false],
                        ],
                        'explanation' => '« De » indique ici le point de départ : « revenir de Paris ».',
                    ],
                    [
                        'question' => 'Complétez : « Il donne un cadeau ___ sa sœur. »',
                        'choices' => [
                            ['choice_text' => 'à', 'is_correct' => true],
                            ['choice_text' => 'de', 'is_correct' => false],
                            ['choice_text' => 'par', 'is_correct' => false],
                            ['choice_text' => 'sous', 'is_correct' => false],
                        ],
                        'explanation' => 'La personne qui reçoit le cadeau est introduite par « à » : « donner quelque chose à quelqu’un ».',
                    ],
                    [
                        'question' => 'Quelle expression est correcte ?',
                        'choices' => [
                            ['choice_text' => 'une bouteille d’eau', 'is_correct' => true],
                            ['choice_text' => 'une bouteille à eau', 'is_correct' => false],
                            ['choice_text' => 'une bouteille sur eau', 'is_correct' => false],
                            ['choice_text' => 'une bouteille pour eau', 'is_correct' => false],
                        ],
                        'explanation' => 'On dit « une bouteille d’eau » pour indiquer ce qu’elle contient.',
                    ],
                    [
                        'question' => 'Complétez : « Nous pensons ___ nos vacances. »',
                        'choices' => [
                            ['choice_text' => 'à', 'is_correct' => true],
                            ['choice_text' => 'de', 'is_correct' => false],
                            ['choice_text' => 'chez', 'is_correct' => false],
                            ['choice_text' => 'sous', 'is_correct' => false],
                        ],
                        'explanation' => 'Le verbe « penser » se construit ici avec « à » : « penser à quelque chose ».',
                    ],
                    [
                        'question' => 'Quelle phrase utilise correctement « de » ?',
                        'choices' => [
                            ['choice_text' => 'La voiture de mon frère est rouge.', 'is_correct' => true],
                            ['choice_text' => 'La voiture à mon frère est rouge.', 'is_correct' => false],
                            ['choice_text' => 'La voiture sur mon frère est rouge.', 'is_correct' => false],
                            ['choice_text' => 'La voiture pour mon frère est rouge.', 'is_correct' => false],
                        ],
                        'explanation' => '« De » peut indiquer l’appartenance : « la voiture de mon frère ».',
                    ],
                ],
            ],

            [
                'title' => 'En, dans, sur et sous',
                'description' => 'Distinguer les prépositions de lieu et de temps « en », « dans », « sur » et « sous ».',
                'duration' => 18,
                'passing_score' => 60,
                'questions' => [
                    [
                        'question' => 'Complétez : « J’habite ___ France. »',
                        'choices' => [
                            ['choice_text' => 'en', 'is_correct' => true],
                            ['choice_text' => 'dans', 'is_correct' => false],
                            ['choice_text' => 'sur', 'is_correct' => false],
                            ['choice_text' => 'sous', 'is_correct' => false],
                        ],
                        'explanation' => 'Devant le nom d’un pays féminin comme « France », on utilise « en » : « en France ».',
                    ],
                    [
                        'question' => 'Complétez : « Les clés sont ___ le sac. »',
                        'choices' => [
                            ['choice_text' => 'dans', 'is_correct' => true],
                            ['choice_text' => 'sur', 'is_correct' => false],
                            ['choice_text' => 'chez', 'is_correct' => false],
                            ['choice_text' => 'entre', 'is_correct' => false],
                        ],
                        'explanation' => '« Dans » indique que les clés se trouvent à l’intérieur du sac.',
                    ],
                    [
                        'question' => 'Complétez : « Le téléphone est ___ la table. »',
                        'choices' => [
                            ['choice_text' => 'sur', 'is_correct' => true],
                            ['choice_text' => 'sous', 'is_correct' => false],
                            ['choice_text' => 'dans', 'is_correct' => false],
                            ['choice_text' => 'entre', 'is_correct' => false],
                        ],
                        'explanation' => 'On utilise « sur » pour indiquer qu’un objet est posé au-dessus d’une surface.',
                    ],
                    [
                        'question' => 'Complétez : « Le chat dort ___ le lit. »',
                        'choices' => [
                            ['choice_text' => 'sous', 'is_correct' => true],
                            ['choice_text' => 'sur', 'is_correct' => false],
                            ['choice_text' => 'dans', 'is_correct' => false],
                            ['choice_text' => 'pour', 'is_correct' => false],
                        ],
                        'explanation' => '« Sous » indique que le chat se trouve en dessous du lit.',
                    ],
                    [
                        'question' => 'Quelle phrase est correcte ?',
                        'choices' => [
                            ['choice_text' => 'Je vais voyager en Espagne.', 'is_correct' => true],
                            ['choice_text' => 'Je vais voyager dans Espagne.', 'is_correct' => false],
                            ['choice_text' => 'Je vais voyager sur Espagne.', 'is_correct' => false],
                            ['choice_text' => 'Je vais voyager sous Espagne.', 'is_correct' => false],
                        ],
                        'explanation' => 'Pour un pays féminin comme « Espagne », on emploie « en » : « en Espagne ».',
                    ],
                    [
                        'question' => 'Complétez : « Le professeur entre ___ la classe. »',
                        'choices' => [
                            ['choice_text' => 'dans', 'is_correct' => true],
                            ['choice_text' => 'sur', 'is_correct' => false],
                            ['choice_text' => 'sous', 'is_correct' => false],
                            ['choice_text' => 'entre', 'is_correct' => false],
                        ],
                        'explanation' => 'Le professeur entre à l’intérieur de la classe, donc on utilise « dans ».',
                    ],
                    [
                        'question' => 'Quelle expression est correcte ?',
                        'choices' => [
                            ['choice_text' => 'en été', 'is_correct' => true],
                            ['choice_text' => 'dans été', 'is_correct' => false],
                            ['choice_text' => 'sur été', 'is_correct' => false],
                            ['choice_text' => 'à été', 'is_correct' => false],
                        ],
                        'explanation' => 'Avec les saisons, on utilise généralement « en » : « en été », « en hiver ».',
                    ],
                    [
                        'question' => 'Complétez : « Nous partons ___ cinq minutes. »',
                        'choices' => [
                            ['choice_text' => 'dans', 'is_correct' => true],
                            ['choice_text' => 'en', 'is_correct' => false],
                            ['choice_text' => 'sur', 'is_correct' => false],
                            ['choice_text' => 'sous', 'is_correct' => false],
                        ],
                        'explanation' => '« Dans cinq minutes » indique qu’une action aura lieu après cinq minutes.',
                    ],
                    [
                        'question' => 'Quelle phrase indique qu’un objet est à l’intérieur d’un meuble ?',
                        'choices' => [
                            ['choice_text' => 'Le document est dans le tiroir.', 'is_correct' => true],
                            ['choice_text' => 'Le document est sur le tiroir.', 'is_correct' => false],
                            ['choice_text' => 'Le document est sous le tiroir.', 'is_correct' => false],
                            ['choice_text' => 'Le document est entre le tiroir.', 'is_correct' => false],
                        ],
                        'explanation' => '« Dans le tiroir » signifie que le document se trouve à l’intérieur du tiroir.',
                    ],
                    [
                        'question' => 'Complétez : « Le tableau est accroché ___ le mur. »',
                        'choices' => [
                            ['choice_text' => 'sur', 'is_correct' => true],
                            ['choice_text' => 'dans', 'is_correct' => false],
                            ['choice_text' => 'sous', 'is_correct' => false],
                            ['choice_text' => 'chez', 'is_correct' => false],
                        ],
                        'explanation' => 'On dit « sur le mur » pour indiquer qu’un objet est fixé ou placé contre la surface du mur.',
                    ],
                    [
                        'question' => 'Quelle préposition convient pour « dans un pays féminin » ?',
                        'choices' => [
                            ['choice_text' => 'en', 'is_correct' => true],
                            ['choice_text' => 'sur', 'is_correct' => false],
                            ['choice_text' => 'sous', 'is_correct' => false],
                            ['choice_text' => 'chez', 'is_correct' => false],
                        ],
                        'explanation' => 'Avec de nombreux noms de pays féminins, on utilise « en » : « en France », « en Espagne », « en Italie ».',
                    ],
                ],
            ],

            [
                'title' => 'Chez, pour et par',
                'description' => 'Utiliser correctement « chez », « pour » et « par » dans des situations courantes.',
                'duration' => 20,
                'passing_score' => 55,
                'questions' => [
                    [
                        'question' => 'Complétez : « Je vais ___ le médecin. »',
                        'choices' => [
                            ['choice_text' => 'chez', 'is_correct' => true],
                            ['choice_text' => 'dans', 'is_correct' => false],
                            ['choice_text' => 'sur', 'is_correct' => false],
                            ['choice_text' => 'en', 'is_correct' => false],
                        ],
                        'explanation' => '« Chez » s’utilise devant une personne ou un professionnel : « chez le médecin ».',
                    ],
                    [
                        'question' => 'Complétez : « Ce cadeau est ___ toi. »',
                        'choices' => [
                            ['choice_text' => 'pour', 'is_correct' => true],
                            ['choice_text' => 'par', 'is_correct' => false],
                            ['choice_text' => 'chez', 'is_correct' => false],
                            ['choice_text' => 'sous', 'is_correct' => false],
                        ],
                        'explanation' => '« Pour » indique ici le destinataire : « Ce cadeau est pour toi. »',
                    ],
                    [
                        'question' => 'Complétez : « Le tableau a été peint ___ un artiste marocain. »',
                        'choices' => [
                            ['choice_text' => 'par', 'is_correct' => true],
                            ['choice_text' => 'pour', 'is_correct' => false],
                            ['choice_text' => 'chez', 'is_correct' => false],
                            ['choice_text' => 'entre', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans une construction passive, « par » introduit souvent l’auteur de l’action.',
                    ],
                    [
                        'question' => 'Quelle phrase est correcte ?',
                        'choices' => [
                            ['choice_text' => 'Nous dînons chez nos amis.', 'is_correct' => true],
                            ['choice_text' => 'Nous dînons pour nos amis.', 'is_correct' => false],
                            ['choice_text' => 'Nous dînons par nos amis.', 'is_correct' => false],
                            ['choice_text' => 'Nous dînons sous nos amis.', 'is_correct' => false],
                        ],
                        'explanation' => '« Chez nos amis » signifie dans la maison ou le lieu où vivent nos amis.',
                    ],
                    [
                        'question' => 'Complétez : « Je travaille ___ réussir mon examen. »',
                        'choices' => [
                            ['choice_text' => 'pour', 'is_correct' => true],
                            ['choice_text' => 'par', 'is_correct' => false],
                            ['choice_text' => 'chez', 'is_correct' => false],
                            ['choice_text' => 'sur', 'is_correct' => false],
                        ],
                        'explanation' => '« Pour » peut introduire un objectif : « travailler pour réussir ».',
                    ],
                    [
                        'question' => 'Complétez : « Nous passons ___ la porte principale. »',
                        'choices' => [
                            ['choice_text' => 'par', 'is_correct' => true],
                            ['choice_text' => 'pour', 'is_correct' => false],
                            ['choice_text' => 'chez', 'is_correct' => false],
                            ['choice_text' => 'entre', 'is_correct' => false],
                        ],
                        'explanation' => '« Par » peut indiquer le passage par un endroit : « passer par la porte principale ».',
                    ],
                    [
                        'question' => 'Quelle phrase utilise correctement « chez » ?',
                        'choices' => [
                            ['choice_text' => 'Elle est chez sa tante.', 'is_correct' => true],
                            ['choice_text' => 'Elle est pour sa tante.', 'is_correct' => false],
                            ['choice_text' => 'Elle est par sa tante.', 'is_correct' => false],
                            ['choice_text' => 'Elle est sous sa tante.', 'is_correct' => false],
                        ],
                        'explanation' => '« Chez sa tante » indique qu’elle se trouve au domicile ou dans le lieu associé à sa tante.',
                    ],
                    [
                        'question' => 'Quelle phrase exprime clairement un but ?',
                        'choices' => [
                            ['choice_text' => 'Il étudie pour obtenir son diplôme.', 'is_correct' => true],
                            ['choice_text' => 'Il étudie par obtenir son diplôme.', 'is_correct' => false],
                            ['choice_text' => 'Il étudie chez obtenir son diplôme.', 'is_correct' => false],
                            ['choice_text' => 'Il étudie sous obtenir son diplôme.', 'is_correct' => false],
                        ],
                        'explanation' => '« Pour » introduit ici l’objectif de l’action : obtenir le diplôme.',
                    ],
                    [
                        'question' => 'Complétez : « Cette lettre a été envoyée ___ courrier. »',
                        'choices' => [
                            ['choice_text' => 'par', 'is_correct' => true],
                            ['choice_text' => 'pour', 'is_correct' => false],
                            ['choice_text' => 'chez', 'is_correct' => false],
                            ['choice_text' => 'entre', 'is_correct' => false],
                        ],
                        'explanation' => 'On utilise « par » pour indiquer le moyen dans l’expression « par courrier ».',
                    ],
                    [
                        'question' => 'Quel mot convient devant un nom de personne pour parler de son domicile ou de son lieu habituel ?',
                        'choices' => [
                            ['choice_text' => 'chez', 'is_correct' => true],
                            ['choice_text' => 'dans', 'is_correct' => false],
                            ['choice_text' => 'en', 'is_correct' => false],
                            ['choice_text' => 'sur', 'is_correct' => false],
                        ],
                        'explanation' => '« Chez » s’emploie notamment devant le nom ou le pronom d’une personne : « chez Paul », « chez eux ».',
                    ],
                    [
                        'question' => 'Quelle phrase est correcte ?',
                        'choices' => [
                            ['choice_text' => 'Nous voyageons pour le plaisir.', 'is_correct' => true],
                            ['choice_text' => 'Nous voyageons chez le plaisir.', 'is_correct' => false],
                            ['choice_text' => 'Nous voyageons par le plaisir.', 'is_correct' => false],
                            ['choice_text' => 'Nous voyageons sous le plaisir.', 'is_correct' => false],
                        ],
                        'explanation' => '« Pour le plaisir » exprime la motivation ou le but de l’action.',
                    ],
                    [
                        'question' => 'Complétez : « Il passe ___ Rabat avant d’aller à Fès. »',
                        'choices' => [
                            ['choice_text' => 'par', 'is_correct' => true],
                            ['choice_text' => 'pour', 'is_correct' => false],
                            ['choice_text' => 'chez', 'is_correct' => false],
                            ['choice_text' => 'sous', 'is_correct' => false],
                        ],
                        'explanation' => '« Passer par Rabat » signifie faire son trajet en passant par cette ville.',
                    ],
                ],
            ],

            [
                'title' => 'Entre, parmi, avant, après',
                'description' => 'Employer les prépositions qui indiquent la position, la relation entre plusieurs éléments et le temps.',
                'duration' => 23,
                'passing_score' => 60,
                'questions' => [
                    [
                        'question' => 'Complétez : « Le café est ___ la banque et la poste. »',
                        'choices' => [
                            ['choice_text' => 'entre', 'is_correct' => true],
                            ['choice_text' => 'parmi', 'is_correct' => false],
                            ['choice_text' => 'chez', 'is_correct' => false],
                            ['choice_text' => 'pour', 'is_correct' => false],
                        ],
                        'explanation' => '« Entre » indique une position située au milieu de deux éléments.',
                    ],
                    [
                        'question' => 'Complétez : « Elle s’assoit ___ ses collègues. »',
                        'choices' => [
                            ['choice_text' => 'parmi', 'is_correct' => true],
                            ['choice_text' => 'entre', 'is_correct' => false],
                            ['choice_text' => 'sur', 'is_correct' => false],
                            ['choice_text' => 'sous', 'is_correct' => false],
                        ],
                        'explanation' => '« Parmi » signifie au milieu d’un ensemble ou d’un groupe.',
                    ],
                    [
                        'question' => 'Complétez : « Lavez-vous les mains ___ le repas. »',
                        'choices' => [
                            ['choice_text' => 'avant', 'is_correct' => true],
                            ['choice_text' => 'après', 'is_correct' => false],
                            ['choice_text' => 'depuis', 'is_correct' => false],
                            ['choice_text' => 'pendant', 'is_correct' => false],
                        ],
                        'explanation' => '« Avant » indique qu’une action se déroule plus tôt qu’une autre.',
                    ],
                    [
                        'question' => 'Complétez : « Nous sommes sortis ___ le cours. »',
                        'choices' => [
                            ['choice_text' => 'après', 'is_correct' => true],
                            ['choice_text' => 'avant', 'is_correct' => false],
                            ['choice_text' => 'entre', 'is_correct' => false],
                            ['choice_text' => 'parmi', 'is_correct' => false],
                        ],
                        'explanation' => '« Après le cours » signifie que l’action de sortir a eu lieu plus tard.',
                    ],
                    [
                        'question' => 'Quelle phrase est correcte ?',
                        'choices' => [
                            ['choice_text' => 'Il y a une chaise entre les deux tables.', 'is_correct' => true],
                            ['choice_text' => 'Il y a une chaise parmi les deux tables.', 'is_correct' => false],
                            ['choice_text' => 'Il y a une chaise chez les deux tables.', 'is_correct' => false],
                            ['choice_text' => 'Il y a une chaise pour les deux tables.', 'is_correct' => false],
                        ],
                        'explanation' => '« Entre » convient lorsqu’on parle d’une position située entre deux éléments précis.',
                    ],
                    [
                        'question' => 'Quelle phrase exprime une position au milieu d’un groupe ?',
                        'choices' => [
                            ['choice_text' => 'Le professeur marche parmi les étudiants.', 'is_correct' => true],
                            ['choice_text' => 'Le professeur marche avant les étudiants.', 'is_correct' => false],
                            ['choice_text' => 'Le professeur marche sous les étudiants.', 'is_correct' => false],
                            ['choice_text' => 'Le professeur marche pour les étudiants.', 'is_correct' => false],
                        ],
                        'explanation' => '« Parmi les étudiants » signifie au milieu de ce groupe.',
                    ],
                    [
                        'question' => 'Complétez : « ___ le film, nous avons acheté du pop-corn. »',
                        'choices' => [
                            ['choice_text' => 'Avant', 'is_correct' => true],
                            ['choice_text' => 'Après', 'is_correct' => false],
                            ['choice_text' => 'Parmi', 'is_correct' => false],
                            ['choice_text' => 'Entre', 'is_correct' => false],
                        ],
                        'explanation' => 'L’achat a eu lieu plus tôt que le film, donc « avant » convient.',
                    ],
                    [
                        'question' => 'Complétez : « ___ le dîner, nous avons pris un dessert. »',
                        'choices' => [
                            ['choice_text' => 'Après', 'is_correct' => true],
                            ['choice_text' => 'Avant', 'is_correct' => false],
                            ['choice_text' => 'Entre', 'is_correct' => false],
                            ['choice_text' => 'Chez', 'is_correct' => false],
                        ],
                        'explanation' => 'Le dessert vient après le dîner, d’où l’utilisation de « après ».',
                    ],
                    [
                        'question' => 'Quelle phrase est correcte ?',
                        'choices' => [
                            ['choice_text' => 'Le magasin se trouve entre la pharmacie et la boulangerie.', 'is_correct' => true],
                            ['choice_text' => 'Le magasin se trouve parmi la pharmacie et la boulangerie.', 'is_correct' => false],
                            ['choice_text' => 'Le magasin se trouve chez la pharmacie et la boulangerie.', 'is_correct' => false],
                            ['choice_text' => 'Le magasin se trouve sous la pharmacie et la boulangerie.', 'is_correct' => false],
                        ],
                        'explanation' => 'Avec deux lieux précis, « entre » est la préposition appropriée.',
                    ],
                    [
                        'question' => 'Quelle préposition indique ce qui vient plus tard ?',
                        'choices' => [
                            ['choice_text' => 'après', 'is_correct' => true],
                            ['choice_text' => 'avant', 'is_correct' => false],
                            ['choice_text' => 'parmi', 'is_correct' => false],
                            ['choice_text' => 'entre', 'is_correct' => false],
                        ],
                        'explanation' => '« Après » situe une action ou un événement dans un moment ultérieur.',
                    ],
                    [
                        'question' => 'Quelle préposition indique ce qui vient plus tôt ?',
                        'choices' => [
                            ['choice_text' => 'avant', 'is_correct' => true],
                            ['choice_text' => 'après', 'is_correct' => false],
                            ['choice_text' => 'parmi', 'is_correct' => false],
                            ['choice_text' => 'chez', 'is_correct' => false],
                        ],
                        'explanation' => '« Avant » sert à indiquer qu’une chose se produit plus tôt qu’une autre.',
                    ],
                    [
                        'question' => 'Complétez : « Un enfant joue ___ plusieurs adultes. »',
                        'choices' => [
                            ['choice_text' => 'parmi', 'is_correct' => true],
                            ['choice_text' => 'entre', 'is_correct' => false],
                            ['choice_text' => 'avant', 'is_correct' => false],
                            ['choice_text' => 'pour', 'is_correct' => false],
                        ],
                        'explanation' => '« Parmi » indique ici que l’enfant se trouve au sein d’un groupe d’adultes.',
                    ],
                    [
                        'question' => 'Quelle phrase utilise correctement « entre » ?',
                        'choices' => [
                            ['choice_text' => 'Le ballon est entre les deux chaises.', 'is_correct' => true],
                            ['choice_text' => 'Le ballon est parmi les deux chaises.', 'is_correct' => false],
                            ['choice_text' => 'Le ballon est chez les deux chaises.', 'is_correct' => false],
                            ['choice_text' => 'Le ballon est avant les deux chaises.', 'is_correct' => false],
                        ],
                        'explanation' => '« Entre les deux chaises » indique une position située au milieu de deux objets précis.',
                    ],
                ],
            ],

            [
                'title' => 'Depuis, pendant et les prépositions de temps',
                'description' => 'Comprendre les principales prépositions utilisées pour parler de la durée, du moment et de la chronologie.',
                'duration' => 26,
                'passing_score' => 60,
                'questions' => [
                    [
                        'question' => 'Complétez : « J’habite ici ___ trois ans. »',
                        'choices' => [
                            ['choice_text' => 'depuis', 'is_correct' => true],
                            ['choice_text' => 'pendant', 'is_correct' => false],
                            ['choice_text' => 'avant', 'is_correct' => false],
                            ['choice_text' => 'pour', 'is_correct' => false],
                        ],
                        'explanation' => '« Depuis trois ans » indique une situation commencée dans le passé et qui continue au moment présent.',
                    ],
                    [
                        'question' => 'Complétez : « Nous avons étudié ___ deux heures. »',
                        'choices' => [
                            ['choice_text' => 'pendant', 'is_correct' => true],
                            ['choice_text' => 'depuis', 'is_correct' => false],
                            ['choice_text' => 'entre', 'is_correct' => false],
                            ['choice_text' => 'chez', 'is_correct' => false],
                        ],
                        'explanation' => '« Pendant deux heures » indique la durée d’une activité.',
                    ],
                    [
                        'question' => 'Quelle phrase signifie que l’activité continue maintenant ?',
                        'choices' => [
                            ['choice_text' => 'Je travaille ici depuis janvier.', 'is_correct' => true],
                            ['choice_text' => 'Je travaille ici pendant janvier.', 'is_correct' => false],
                            ['choice_text' => 'Je travaille ici avant janvier.', 'is_correct' => false],
                            ['choice_text' => 'Je travaille ici entre janvier.', 'is_correct' => false],
                        ],
                        'explanation' => '« Depuis janvier » indique un début dans le passé avec une situation qui continue.',
                    ],
                    [
                        'question' => 'Quelle phrase indique une durée terminée ?',
                        'choices' => [
                            ['choice_text' => 'Il a dormi pendant huit heures.', 'is_correct' => true],
                            ['choice_text' => 'Il a dormi depuis huit heures.', 'is_correct' => false],
                            ['choice_text' => 'Il a dormi entre huit heures.', 'is_correct' => false],
                            ['choice_text' => 'Il a dormi chez huit heures.', 'is_correct' => false],
                        ],
                        'explanation' => '« Pendant huit heures » indique la durée de l’action de dormir.',
                    ],
                    [
                        'question' => 'Complétez : « Je connais Sara ___ l’enfance. »',
                        'choices' => [
                            ['choice_text' => 'depuis', 'is_correct' => true],
                            ['choice_text' => 'pendant', 'is_correct' => false],
                            ['choice_text' => 'parmi', 'is_correct' => false],
                            ['choice_text' => 'sur', 'is_correct' => false],
                        ],
                        'explanation' => '« Depuis l’enfance » marque le début d’une relation dans le passé qui continue.',
                    ],
                    [
                        'question' => 'Quelle expression convient pour une activité qui dure toute la soirée ?',
                        'choices' => [
                            ['choice_text' => 'pendant toute la soirée', 'is_correct' => true],
                            ['choice_text' => 'depuis toute la soirée', 'is_correct' => false],
                            ['choice_text' => 'entre toute la soirée', 'is_correct' => false],
                            ['choice_text' => 'chez toute la soirée', 'is_correct' => false],
                        ],
                        'explanation' => '« Pendant toute la soirée » indique la durée complète de l’activité.',
                    ],
                    [
                        'question' => 'Complétez : « Il apprend le français ___ six mois. »',
                        'choices' => [
                            ['choice_text' => 'depuis', 'is_correct' => true],
                            ['choice_text' => 'pendant', 'is_correct' => false],
                            ['choice_text' => 'avant', 'is_correct' => false],
                            ['choice_text' => 'par', 'is_correct' => false],
                        ],
                        'explanation' => 'Si l’apprentissage a commencé il y a six mois et continue maintenant, « depuis » convient.',
                    ],
                    [
                        'question' => 'Quelle phrase est correcte ?',
                        'choices' => [
                            ['choice_text' => 'Nous avons attendu pendant trente minutes.', 'is_correct' => true],
                            ['choice_text' => 'Nous avons attendu depuis trente minutes.', 'is_correct' => false],
                            ['choice_text' => 'Nous avons attendu chez trente minutes.', 'is_correct' => false],
                            ['choice_text' => 'Nous avons attendu entre trente minutes.', 'is_correct' => false],
                        ],
                        'explanation' => '« Pendant trente minutes » donne la durée de l’attente.',
                    ],
                    [
                        'question' => 'Quelle préposition convient pour une action commencée dans le passé et toujours vraie ?',
                        'choices' => [
                            ['choice_text' => 'depuis', 'is_correct' => true],
                            ['choice_text' => 'pendant', 'is_correct' => false],
                            ['choice_text' => 'après', 'is_correct' => false],
                            ['choice_text' => 'pour', 'is_correct' => false],
                        ],
                        'explanation' => '« Depuis » relie un point de départ passé à une situation qui continue.',
                    ],
                    [
                        'question' => 'Complétez : « Nous sommes restés à la plage ___ toute l’après-midi. »',
                        'choices' => [
                            ['choice_text' => 'pendant', 'is_correct' => true],
                            ['choice_text' => 'depuis', 'is_correct' => false],
                            ['choice_text' => 'avant', 'is_correct' => false],
                            ['choice_text' => 'parmi', 'is_correct' => false],
                        ],
                        'explanation' => '« Pendant toute l’après-midi » indique la durée du séjour à la plage.',
                    ],
                    [
                        'question' => 'Quelle phrase est correcte ?',
                        'choices' => [
                            ['choice_text' => 'Elle travaille dans cette entreprise depuis 2022.', 'is_correct' => true],
                            ['choice_text' => 'Elle travaille dans cette entreprise pendant 2022.', 'is_correct' => false],
                            ['choice_text' => 'Elle travaille dans cette entreprise entre 2022.', 'is_correct' => false],
                            ['choice_text' => 'Elle travaille dans cette entreprise chez 2022.', 'is_correct' => false],
                        ],
                        'explanation' => '« Depuis 2022 » indique que son activité a commencé en 2022 et continue.',
                    ],
                    [
                        'question' => 'Quelle expression indique la durée d’un voyage terminé ?',
                        'choices' => [
                            ['choice_text' => 'pendant trois jours', 'is_correct' => true],
                            ['choice_text' => 'depuis trois jours', 'is_correct' => false],
                            ['choice_text' => 'avant trois jours', 'is_correct' => false],
                            ['choice_text' => 'chez trois jours', 'is_correct' => false],
                        ],
                        'explanation' => 'Pour parler de la durée d’une activité considérée comme achevée, « pendant » convient.',
                    ],
                    [
                        'question' => 'Complétez : « Il est absent ___ lundi. »',
                        'choices' => [
                            ['choice_text' => 'depuis', 'is_correct' => true],
                            ['choice_text' => 'pendant', 'is_correct' => false],
                            ['choice_text' => 'entre', 'is_correct' => false],
                            ['choice_text' => 'sur', 'is_correct' => false],
                        ],
                        'explanation' => '« Depuis lundi » indique que son absence a commencé lundi et continue.',
                    ],
                    [
                        'question' => 'Quelle phrase est correcte ?',
                        'choices' => [
                            ['choice_text' => 'J’ai lu pendant une heure.', 'is_correct' => true],
                            ['choice_text' => 'J’ai lu depuis une heure.', 'is_correct' => false],
                            ['choice_text' => 'J’ai lu entre une heure.', 'is_correct' => false],
                            ['choice_text' => 'J’ai lu chez une heure.', 'is_correct' => false],
                        ],
                        'explanation' => '« Pendant une heure » indique la durée de la lecture.',
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
