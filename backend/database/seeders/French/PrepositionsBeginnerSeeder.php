<?php

namespace Database\Seeders;

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
                            ['choice_text' => 'de', 'is_correct' => false],
                            ['choice_text' => 'à', 'is_correct' => true],
                            ['choice_text' => 'sur', 'is_correct' => false],
                            ['choice_text' => 'chez', 'is_correct' => false],
                        ],
                        'explanation' => 'On utilise « à » pour indiquer la destination ou le lieu : « Je vais à l’école. »',
                    ],
                    [
                        'question' => 'Complétez : « Le livre est ___ Pierre. »',
                        'choices' => [
                            ['choice_text' => 'avec', 'is_correct' => false],
                            ['choice_text' => 'sous', 'is_correct' => false],
                            ['choice_text' => 'à', 'is_correct' => true],
                            ['choice_text' => 'par', 'is_correct' => false],
                        ],
                        'explanation' => '« Le livre est à Pierre » indique que le livre appartient à Pierre.',
                    ],
                    [
                        'question' => 'Au téléphone, vous dites : « Je parle ___ mon professeur. »',
                        'choices' => [
                            ['choice_text' => 'dans', 'is_correct' => false],
                            ['choice_text' => 'sur', 'is_correct' => false],
                            ['choice_text' => 'à', 'is_correct' => true],
                            ['choice_text' => 'entre', 'is_correct' => false],
                        ],
                        'explanation' => 'On dit « parler à quelqu’un » : la personne est introduite par « à ».',
                    ],
                    [
                        'question' => 'Au petit-déjeuner, vous complétez : « Une tasse ___ café. » (le contenu)',
                        'choices' => [
                            ['choice_text' => 'à', 'is_correct' => false],
                            ['choice_text' => 'pour', 'is_correct' => false],
                            ['choice_text' => 'chez', 'is_correct' => false],
                            ['choice_text' => 'de', 'is_correct' => true],
                        ],
                        'explanation' => 'La préposition « de » permet ici d’indiquer le contenu : « une tasse de café ».',
                    ],
                    [
                        'question' => 'Vous parlez de la sortie de classe de demain. Quelle phrase est correcte ?',
                        'choices' => [
                            ['choice_text' => 'Nous allons à la bibliothèque.', 'is_correct' => true],
                            ['choice_text' => 'Nous allons de la bibliothèque.', 'is_correct' => false],
                            ['choice_text' => 'Nous allons sur la bibliothèque.', 'is_correct' => false],
                            ['choice_text' => 'Nous allons chez la bibliothèque.', 'is_correct' => false],
                        ],
                        'explanation' => 'Avec « aller » pour indiquer une destination, on utilise « à » devant un lieu comme « la bibliothèque ».',
                    ],
                    [
                        'question' => 'Il sort ___ la maison à huit heures pour aller au lycée.',
                        'choices' => [
                            ['choice_text' => 'à', 'is_correct' => false],
                            ['choice_text' => 'de', 'is_correct' => true],
                            ['choice_text' => 'sur', 'is_correct' => false],
                            ['choice_text' => 'pour', 'is_correct' => false],
                        ],
                        'explanation' => '« Sortir de » indique le lieu que l’on quitte : il sort de la maison.',
                    ],
                    [
                        'question' => 'Pour l’anniversaire de sa sœur, Omar choisit un cadeau. Complétez : « Il donne un cadeau ___ sa sœur. »',
                        'choices' => [
                            ['choice_text' => 'de', 'is_correct' => false],
                            ['choice_text' => 'par', 'is_correct' => false],
                            ['choice_text' => 'à', 'is_correct' => true],
                            ['choice_text' => 'sous', 'is_correct' => false],
                        ],
                        'explanation' => 'La personne qui reçoit le cadeau est introduite par « à » : « donner quelque chose à quelqu’un ».',
                    ],
                    [
                        'question' => 'Au café, vous demandez de l’eau. Quelle expression est correcte ?',
                        'choices' => [
                            ['choice_text' => 'une bouteille d’eau', 'is_correct' => true],
                            ['choice_text' => 'une bouteille à eau', 'is_correct' => false],
                            ['choice_text' => 'une bouteille sur eau', 'is_correct' => false],
                            ['choice_text' => 'une bouteille avec eau', 'is_correct' => false],
                        ],
                        'explanation' => 'On dit « une bouteille d’eau » : « de » indique ce que contient la bouteille.',
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
                            ['choice_text' => 'La voiture avec mon frère est rouge.', 'is_correct' => false],
                            ['choice_text' => 'La voiture sur mon frère est rouge.', 'is_correct' => false],
                            ['choice_text' => 'La voiture pour mon frère est rouge.', 'is_correct' => false],
                            ['choice_text' => 'La voiture de mon frère est rouge.', 'is_correct' => true],
                        ],
                        'explanation' => '« De » marque ici le propriétaire : la voiture de mon frère.',
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
                            ['choice_text' => 'dans', 'is_correct' => false],
                            ['choice_text' => 'sur', 'is_correct' => false],
                            ['choice_text' => 'sous', 'is_correct' => false],
                            ['choice_text' => 'en', 'is_correct' => true],
                        ],
                        'explanation' => 'Devant le nom d’un pays féminin comme « France », on utilise « en » : « en France ».',
                    ],
                    [
                        'question' => 'Complétez : « Les clés sont ___ le sac. »',
                        'choices' => [
                            ['choice_text' => 'chez', 'is_correct' => false],
                            ['choice_text' => 'dans', 'is_correct' => true],
                            ['choice_text' => 'entre', 'is_correct' => false],
                            ['choice_text' => 'pour', 'is_correct' => false],
                        ],
                        'explanation' => '« Dans » indique que les clés se trouvent à l’intérieur du sac.',
                    ],
                    [
                        'question' => 'Le téléphone est posé ___ la table.',
                        'choices' => [
                            ['choice_text' => 'dans', 'is_correct' => false],
                            ['choice_text' => 'chez', 'is_correct' => false],
                            ['choice_text' => 'entre', 'is_correct' => false],
                            ['choice_text' => 'sur', 'is_correct' => true],
                        ],
                        'explanation' => 'On utilise « sur » quand un objet est posé au-dessus d’une surface.',
                    ],
                    [
                        'question' => 'Le chat s’est caché ___ le lit : on ne le voit plus.',
                        'choices' => [
                            ['choice_text' => 'sous', 'is_correct' => true],
                            ['choice_text' => 'chez', 'is_correct' => false],
                            ['choice_text' => 'pour', 'is_correct' => false],
                            ['choice_text' => 'entre', 'is_correct' => false],
                        ],
                        'explanation' => '« Sous » indique que le chat se trouve en dessous du lit.',
                    ],
                    [
                        'question' => 'Mon anniversaire est ___ mars.',
                        'choices' => [
                            ['choice_text' => 'dans', 'is_correct' => false],
                            ['choice_text' => 'sur', 'is_correct' => false],
                            ['choice_text' => 'en', 'is_correct' => true],
                            ['choice_text' => 'à', 'is_correct' => false],
                        ],
                        'explanation' => 'Avec les mois, on dit « en » : en mars, en août, en décembre.',
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
                        'question' => 'Quelle expression de temps est correcte ?',
                        'choices' => [
                            ['choice_text' => 'dans été', 'is_correct' => false],
                            ['choice_text' => 'sur été', 'is_correct' => false],
                            ['choice_text' => 'en été', 'is_correct' => true],
                            ['choice_text' => 'à été', 'is_correct' => false],
                        ],
                        'explanation' => 'Avec les saisons, on dit « en été », « en hiver », « en automne ». Seul le printemps prend « au ».',
                    ],
                    [
                        'question' => 'Complétez : « Nous partons ___ cinq minutes. »',
                        'choices' => [
                            ['choice_text' => 'pendant', 'is_correct' => false],
                            ['choice_text' => 'depuis', 'is_correct' => false],
                            ['choice_text' => 'dans', 'is_correct' => true],
                            ['choice_text' => 'sur', 'is_correct' => false],
                        ],
                        'explanation' => '« Dans cinq minutes » annonce une action qui aura lieu après cinq minutes.',
                    ],
                    [
                        'question' => 'Quelle phrase indique qu’un objet est à l’intérieur d’un meuble ?',
                        'choices' => [
                            ['choice_text' => 'Le document est sur le tiroir.', 'is_correct' => false],
                            ['choice_text' => 'Le document est sous le tiroir.', 'is_correct' => false],
                            ['choice_text' => 'Le document est entre le tiroir.', 'is_correct' => false],
                            ['choice_text' => 'Le document est dans le tiroir.', 'is_correct' => true],
                        ],
                        'explanation' => '« Dans le tiroir » signifie que le document se trouve à l’intérieur du tiroir.',
                    ],
                    [
                        'question' => 'Le tableau est accroché ___ le mur du salon.',
                        'choices' => [
                            ['choice_text' => 'dans', 'is_correct' => false],
                            ['choice_text' => 'sur', 'is_correct' => true],
                            ['choice_text' => 'sous', 'is_correct' => false],
                            ['choice_text' => 'chez', 'is_correct' => false],
                        ],
                        'explanation' => 'On dit « sur le mur » pour indiquer qu’un objet est fixé ou placé contre la surface du mur.',
                    ],
                    [
                        'question' => 'Le ballon a roulé ___ la voiture garée devant l’école.',
                        'choices' => [
                            ['choice_text' => 'chez', 'is_correct' => false],
                            ['choice_text' => 'sous', 'is_correct' => true],
                            ['choice_text' => 'pour', 'is_correct' => false],
                            ['choice_text' => 'entre', 'is_correct' => false],
                        ],
                        'explanation' => '« Sous » indique que le ballon se trouve en dessous de la voiture.',
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
                            ['choice_text' => 'dans', 'is_correct' => false],
                            ['choice_text' => 'sur', 'is_correct' => false],
                            ['choice_text' => 'en', 'is_correct' => false],
                            ['choice_text' => 'chez', 'is_correct' => true],
                        ],
                        'explanation' => '« Chez » s’utilise devant une personne ou un professionnel : « chez le médecin ».',
                    ],
                    [
                        'question' => 'Complétez : « Ce cadeau est ___ toi. »',
                        'choices' => [
                            ['choice_text' => 'par', 'is_correct' => false],
                            ['choice_text' => 'chez', 'is_correct' => false],
                            ['choice_text' => 'pour', 'is_correct' => true],
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
                        'explanation' => 'À la forme passive, « par » introduit celui qui fait l’action.',
                    ],
                    [
                        'question' => 'Ce soir, nous sommes invités. Quelle phrase est correcte ?',
                        'choices' => [
                            ['choice_text' => 'Nous dînons chez nos amis.', 'is_correct' => true],
                            ['choice_text' => 'Nous dînons pour nos amis.', 'is_correct' => false],
                            ['choice_text' => 'Nous dînons par nos amis.', 'is_correct' => false],
                            ['choice_text' => 'Nous dînons sous nos amis.', 'is_correct' => false],
                        ],
                        'explanation' => '« Chez nos amis » signifie dans la maison ou le lieu où vivent nos amis.',
                    ],
                    [
                        'question' => 'Hiba révise tous les soirs. Complétez : « Je travaille ___ réussir mon examen. »',
                        'choices' => [
                            ['choice_text' => 'par', 'is_correct' => false],
                            ['choice_text' => 'chez', 'is_correct' => false],
                            ['choice_text' => 'pour', 'is_correct' => true],
                            ['choice_text' => 'sur', 'is_correct' => false],
                        ],
                        'explanation' => '« Pour » peut introduire un objectif : « travailler pour réussir ».',
                    ],
                    [
                        'question' => 'Complétez : « Nous passons ___ la porte principale. »',
                        'choices' => [
                            ['choice_text' => 'pour', 'is_correct' => false],
                            ['choice_text' => 'par', 'is_correct' => true],
                            ['choice_text' => 'chez', 'is_correct' => false],
                            ['choice_text' => 'entre', 'is_correct' => false],
                        ],
                        'explanation' => '« Par » peut indiquer le passage par un endroit : « passer par la porte principale ».',
                    ],
                    [
                        'question' => 'De sa chambre, Yasmine voit la mer ___ la fenêtre.',
                        'choices' => [
                            ['choice_text' => 'chez', 'is_correct' => false],
                            ['choice_text' => 'pour', 'is_correct' => false],
                            ['choice_text' => 'entre', 'is_correct' => false],
                            ['choice_text' => 'par', 'is_correct' => true],
                        ],
                        'explanation' => '« Par la fenêtre » indique le passage par lequel on regarde.',
                    ],
                    [
                        'question' => 'Quelle phrase exprime clairement un but ?',
                        'choices' => [
                            ['choice_text' => 'Il étudie par obtenir son diplôme.', 'is_correct' => false],
                            ['choice_text' => 'Il étudie chez obtenir son diplôme.', 'is_correct' => false],
                            ['choice_text' => 'Il étudie pour obtenir son diplôme.', 'is_correct' => true],
                            ['choice_text' => 'Il étudie avec obtenir son diplôme.', 'is_correct' => false],
                        ],
                        'explanation' => '« Pour » introduit ici l’objectif de l’action : obtenir le diplôme.',
                    ],
                    [
                        'question' => 'Complétez : « Cette lettre a été envoyée ___ courrier. »',
                        'choices' => [
                            ['choice_text' => 'pour', 'is_correct' => false],
                            ['choice_text' => 'par', 'is_correct' => true],
                            ['choice_text' => 'chez', 'is_correct' => false],
                            ['choice_text' => 'entre', 'is_correct' => false],
                        ],
                        'explanation' => 'On utilise « par » pour indiquer le moyen dans l’expression « par courrier ».',
                    ],
                    [
                        'question' => 'Pour dire que l’on va au domicile de quelqu’un, quel mot place-t-on devant son nom ?',
                        'choices' => [
                            ['choice_text' => 'dans', 'is_correct' => false],
                            ['choice_text' => 'en', 'is_correct' => false],
                            ['choice_text' => 'sur', 'is_correct' => false],
                            ['choice_text' => 'chez', 'is_correct' => true],
                        ],
                        'explanation' => '« Chez » se met devant le nom ou le pronom d’une personne : chez Paul, chez eux.',
                    ],
                    [
                        'question' => 'Pourquoi voyager ? Choisissez la phrase correcte.',
                        'choices' => [
                            ['choice_text' => 'Nous voyageons chez le plaisir.', 'is_correct' => false],
                            ['choice_text' => 'Nous voyageons pour le plaisir.', 'is_correct' => true],
                            ['choice_text' => 'Nous voyageons par le plaisir.', 'is_correct' => false],
                            ['choice_text' => 'Nous voyageons sous le plaisir.', 'is_correct' => false],
                        ],
                        'explanation' => '« Pour le plaisir » exprime la motivation ou le but de l’action.',
                    ],
                    [
                        'question' => 'Pour aller à Fès, Ali fait une étape. Complétez : « Il passe ___ Rabat avant d’arriver à Fès. »',
                        'choices' => [
                            ['choice_text' => 'par', 'is_correct' => true],
                            ['choice_text' => 'pour', 'is_correct' => false],
                            ['choice_text' => 'chez', 'is_correct' => false],
                            ['choice_text' => 'avant', 'is_correct' => false],
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
                            ['choice_text' => 'parmi', 'is_correct' => false],
                            ['choice_text' => 'entre', 'is_correct' => true],
                            ['choice_text' => 'chez', 'is_correct' => false],
                            ['choice_text' => 'pour', 'is_correct' => false],
                        ],
                        'explanation' => '« Entre » indique une position située au milieu de deux éléments.',
                    ],
                    [
                        'question' => 'Complétez : « Elle s’assoit ___ ses collègues. »',
                        'choices' => [
                            ['choice_text' => 'sur', 'is_correct' => false],
                            ['choice_text' => 'sous', 'is_correct' => false],
                            ['choice_text' => 'entre', 'is_correct' => false],
                            ['choice_text' => 'parmi', 'is_correct' => true],
                        ],
                        'explanation' => '« Parmi » signifie au milieu d’un ensemble ou d’un groupe.',
                    ],
                    [
                        'question' => 'Complétez : « ___ de partir, ferme la fenêtre. »',
                        'choices' => [
                            ['choice_text' => 'Après', 'is_correct' => false],
                            ['choice_text' => 'Avant', 'is_correct' => true],
                            ['choice_text' => 'Depuis', 'is_correct' => false],
                            ['choice_text' => 'Pendant', 'is_correct' => false],
                        ],
                        'explanation' => '« Avant de » + infinitif situe une action plus tôt qu’une autre.',
                    ],
                    [
                        'question' => 'Le cours est fini. Complétez : « Nous avons mangé un sandwich ___ le cours. »',
                        'choices' => [
                            ['choice_text' => 'parmi', 'is_correct' => false],
                            ['choice_text' => 'entre', 'is_correct' => false],
                            ['choice_text' => 'après', 'is_correct' => true],
                            ['choice_text' => 'chez', 'is_correct' => false],
                        ],
                        'explanation' => '« Après le cours » : le sandwich vient une fois le cours terminé.',
                    ],
                    [
                        'question' => 'Quelle phrase est correcte ?',
                        'choices' => [
                            ['choice_text' => 'Il y a une chaise parmi les deux tables.', 'is_correct' => false],
                            ['choice_text' => 'Il y a une chaise entre les deux tables.', 'is_correct' => true],
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
                        'question' => 'Le magasin ouvre à 9 h et ferme à 17 h. Complétez : « Il est ouvert ___ 9 h et 17 h. »',
                        'choices' => [
                            ['choice_text' => 'entre', 'is_correct' => true],
                            ['choice_text' => 'parmi', 'is_correct' => false],
                            ['choice_text' => 'chez', 'is_correct' => false],
                            ['choice_text' => 'avant', 'is_correct' => false],
                        ],
                        'explanation' => '« Entre … et … » donne les deux limites d’un intervalle.',
                    ],
                    [
                        'question' => 'Le dîner est fini. Complétez : « ___ le dîner, nous avons pris un dessert. »',
                        'choices' => [
                            ['choice_text' => 'Avant', 'is_correct' => false],
                            ['choice_text' => 'Entre', 'is_correct' => false],
                            ['choice_text' => 'Chez', 'is_correct' => false],
                            ['choice_text' => 'Après', 'is_correct' => true],
                        ],
                        'explanation' => 'Le dessert vient une fois le repas terminé, donc « après ».',
                    ],
                    [
                        'question' => 'Sa chanson préférée fait partie du classement : elle est ___ les dix premières.',
                        'choices' => [
                            ['choice_text' => 'devant', 'is_correct' => false],
                            ['choice_text' => 'sous', 'is_correct' => false],
                            ['choice_text' => 'parmi', 'is_correct' => true],
                            ['choice_text' => 'chez', 'is_correct' => false],
                        ],
                        'explanation' => '« Parmi » signifie « dans l’ensemble de » : la chanson fait partie du groupe des dix premières.',
                    ],
                    [
                        'question' => 'La salle de classe était déjà pleine quand le professeur est arrivé : les étudiants étaient arrivés ___ lui.',
                        'choices' => [
                            ['choice_text' => 'après', 'is_correct' => false],
                            ['choice_text' => 'parmi', 'is_correct' => false],
                            ['choice_text' => 'avant', 'is_correct' => true],
                            ['choice_text' => 'sous', 'is_correct' => false],
                        ],
                        'explanation' => 'Les étudiants étaient déjà là : ils sont arrivés avant le professeur.',
                    ],
                    [
                        'question' => 'Quelle préposition indique ce qui vient plus tôt ?',
                        'choices' => [
                            ['choice_text' => 'après', 'is_correct' => false],
                            ['choice_text' => 'parmi', 'is_correct' => false],
                            ['choice_text' => 'chez', 'is_correct' => false],
                            ['choice_text' => 'avant', 'is_correct' => true],
                        ],
                        'explanation' => '« Avant » sert à indiquer qu’une chose se produit plus tôt qu’une autre.',
                    ],
                    [
                        'question' => 'Complétez : « Un enfant joue ___ plusieurs adultes. »',
                        'choices' => [
                            ['choice_text' => 'parmi', 'is_correct' => true],
                            ['choice_text' => 'sous', 'is_correct' => false],
                            ['choice_text' => 'avant', 'is_correct' => false],
                            ['choice_text' => 'pour', 'is_correct' => false],
                        ],
                        'explanation' => '« Parmi » indique ici que l’enfant se trouve au sein d’un groupe d’adultes.',
                    ],
                    [
                        'question' => 'Choisissez la phrase bien construite.',
                        'choices' => [
                            ['choice_text' => 'Il est parti après de dîner.', 'is_correct' => false],
                            ['choice_text' => 'Il est parti après le dîner.', 'is_correct' => true],
                            ['choice_text' => 'Il est parti parmi le dîner.', 'is_correct' => false],
                            ['choice_text' => 'Il est parti après le dîner de.', 'is_correct' => false],
                        ],
                        'explanation' => '« Après » se construit directement avec un nom : après le dîner.',
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
                        'question' => 'Voilà trois ans que Nabil vit à Tanger. Il dit : « J’habite ici ___ trois ans. »',
                        'choices' => [
                            ['choice_text' => 'pendant', 'is_correct' => false],
                            ['choice_text' => 'avant', 'is_correct' => false],
                            ['choice_text' => 'pour', 'is_correct' => false],
                            ['choice_text' => 'depuis', 'is_correct' => true],
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
                            ['choice_text' => 'Je travaille ici pendant janvier.', 'is_correct' => false],
                            ['choice_text' => 'Je travaille ici avant janvier.', 'is_correct' => false],
                            ['choice_text' => 'Je travaille ici par janvier.', 'is_correct' => false],
                            ['choice_text' => 'Je travaille ici depuis janvier.', 'is_correct' => true],
                        ],
                        'explanation' => '« Depuis janvier » indique un début dans le passé avec une situation qui continue.',
                    ],
                    [
                        'question' => 'Quelle phrase indique une durée terminée ?',
                        'choices' => [
                            ['choice_text' => 'Il a dormi pendant huit heures.', 'is_correct' => true],
                            ['choice_text' => 'Il a dormi depuis huit heures.', 'is_correct' => false],
                            ['choice_text' => 'Il a dormi par huit heures.', 'is_correct' => false],
                            ['choice_text' => 'Il a dormi avant huit heures.', 'is_correct' => false],
                        ],
                        'explanation' => '« Pendant huit heures » indique la durée de l’action de dormir.',
                    ],
                    [
                        'question' => 'Complétez : « Je connais Sara ___ l’enfance. »',
                        'choices' => [
                            ['choice_text' => 'pendant', 'is_correct' => false],
                            ['choice_text' => 'parmi', 'is_correct' => false],
                            ['choice_text' => 'sur', 'is_correct' => false],
                            ['choice_text' => 'depuis', 'is_correct' => true],
                        ],
                        'explanation' => '« Depuis l’enfance » marque le début d’une relation dans le passé qui continue.',
                    ],
                    [
                        'question' => 'Quelle expression convient pour une activité qui dure toute la soirée ?',
                        'choices' => [
                            ['choice_text' => 'pendant toute la soirée', 'is_correct' => true],
                            ['choice_text' => 'depuis toute la soirée', 'is_correct' => false],
                            ['choice_text' => 'avant toute la soirée', 'is_correct' => false],
                            ['choice_text' => 'par toute la soirée', 'is_correct' => false],
                        ],
                        'explanation' => '« Pendant toute la soirée » indique la durée complète de l’activité.',
                    ],
                    [
                        'question' => 'Sofia a commencé le français il y a six mois et elle continue. Complétez : « Elle apprend le français ___ six mois. »',
                        'choices' => [
                            ['choice_text' => 'pendant', 'is_correct' => false],
                            ['choice_text' => 'avant', 'is_correct' => false],
                            ['choice_text' => 'depuis', 'is_correct' => true],
                            ['choice_text' => 'par', 'is_correct' => false],
                        ],
                        'explanation' => 'Si l’apprentissage a commencé il y a six mois et continue maintenant, « depuis » convient.',
                    ],
                    [
                        'question' => 'Le bus était en retard. Quelle phrase est correcte ?',
                        'choices' => [
                            ['choice_text' => 'Nous avons attendu depuis trente minutes.', 'is_correct' => false],
                            ['choice_text' => 'Nous avons attendu pendant trente minutes.', 'is_correct' => true],
                            ['choice_text' => 'Nous avons attendu avant trente minutes.', 'is_correct' => false],
                            ['choice_text' => 'Nous avons attendu par trente minutes.', 'is_correct' => false],
                        ],
                        'explanation' => '« Pendant trente minutes » donne la durée de l’attente.',
                    ],
                    [
                        'question' => 'Le train part à 8 h : il faut arriver ___ 8 h.',
                        'choices' => [
                            ['choice_text' => 'depuis', 'is_correct' => false],
                            ['choice_text' => 'pendant', 'is_correct' => false],
                            ['choice_text' => 'avant', 'is_correct' => true],
                            ['choice_text' => 'après', 'is_correct' => false],
                        ],
                        'explanation' => 'Pour ne pas rater le train, on arrive avant l’heure du départ.',
                    ],
                    [
                        'question' => 'Il faisait beau, alors nous sommes restés à la plage ___ toute l’après-midi.',
                        'choices' => [
                            ['choice_text' => 'depuis', 'is_correct' => false],
                            ['choice_text' => 'pendant', 'is_correct' => true],
                            ['choice_text' => 'avant', 'is_correct' => false],
                            ['choice_text' => 'parmi', 'is_correct' => false],
                        ],
                        'explanation' => '« Pendant toute l’après-midi » indique la durée du séjour à la plage.',
                    ],
                    [
                        'question' => 'Léa a débuté chez Atlas en 2022 et y est encore. Quelle phrase est correcte ?',
                        'choices' => [
                            ['choice_text' => 'Elle travaille dans cette entreprise pendant 2022.', 'is_correct' => false],
                            ['choice_text' => 'Elle travaille dans cette entreprise entre 2022.', 'is_correct' => false],
                            ['choice_text' => 'Elle travaille dans cette entreprise depuis 2022.', 'is_correct' => true],
                            ['choice_text' => 'Elle travaille dans cette entreprise chez 2022.', 'is_correct' => false],
                        ],
                        'explanation' => '« Depuis 2022 » indique que son activité a commencé en 2022 et continue.',
                    ],
                    [
                        'question' => 'Quelle expression indique la durée d’un voyage terminé ?',
                        'choices' => [
                            ['choice_text' => 'depuis trois jours', 'is_correct' => false],
                            ['choice_text' => 'pendant trois jours', 'is_correct' => true],
                            ['choice_text' => 'avant trois jours', 'is_correct' => false],
                            ['choice_text' => 'par trois jours', 'is_correct' => false],
                        ],
                        'explanation' => 'Le voyage est fini : « pendant trois jours » en donne la durée.',
                    ],
                    [
                        'question' => 'Karim est malade. Complétez : « Il est absent ___ lundi. »',
                        'choices' => [
                            ['choice_text' => 'depuis', 'is_correct' => true],
                            ['choice_text' => 'pendant', 'is_correct' => false],
                            ['choice_text' => 'avant', 'is_correct' => false],
                            ['choice_text' => 'par', 'is_correct' => false],
                        ],
                        'explanation' => '« Depuis lundi » : l’absence a commencé lundi et dure encore.',
                    ],
                    [
                        'question' => 'Nous avons beaucoup parlé ___ le repas.',
                        'choices' => [
                            ['choice_text' => 'depuis', 'is_correct' => false],
                            ['choice_text' => 'chez', 'is_correct' => false],
                            ['choice_text' => 'parmi', 'is_correct' => false],
                            ['choice_text' => 'pendant', 'is_correct' => true],
                        ],
                        'explanation' => '« Pendant le repas » situe la conversation au moment où l’on mange.',
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

                foreach ($questionData['choices'] as $choiceIndex => $choice) {
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
