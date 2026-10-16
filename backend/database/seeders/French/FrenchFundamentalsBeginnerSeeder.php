<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class FrenchFundamentalsBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'french-fundamentals')->firstOrFail();

        $quizzes = [
            [
                'title' => 'Premiers repères en français',
                'description' => 'Découvrez les formules essentielles pour saluer, vous présenter, poser des questions simples et réagir dans les échanges les plus courants.',
                'duration' => 15,
                'passing_score' => 50,
                'questions' => [
                    [
                        'question' => 'Vous rencontrez votre professeur à 9 heures du matin. Quelle formule convient le mieux pour commencer la conversation ?',
                        'choices' => [
                            ['choice_text' => 'Bonne nuit, Madame.', 'is_correct' => false],
                            ['choice_text' => 'Bonjour, Madame.', 'is_correct' => true],
                            ['choice_text' => 'À demain, Madame.', 'is_correct' => false],
                            ['choice_text' => 'Au revoir, Madame.', 'is_correct' => false],
                        ],
                        'explanation' => '« Bonjour » est la formule habituelle pour saluer quelqu’un pendant la journée, notamment le matin. « Bonne nuit » et « au revoir » ne conviennent pas pour commencer cet échange.',
                    ],
                    [
                        'question' => 'Vous voulez dire votre prénom à une nouvelle camarade. Quelle phrase est correcte ?',
                        'choices' => [
                            ['choice_text' => 'Je me appelle Sara.', 'is_correct' => false],
                            ['choice_text' => 'Moi appeler Sara.', 'is_correct' => false],
                            ['choice_text' => 'Je suis appelle Sara.', 'is_correct' => false],
                            ['choice_text' => 'Je m’appelle Sara.', 'is_correct' => true],
                        ],
                        'explanation' => 'Pour se présenter en français, on utilise « je m’appelle » suivi du prénom. Le pronom réfléchi « me » devient « m’ » devant une voyelle.',
                    ],
                    [
                        'question' => 'Quelle phrase permet de dire simplement d’où vous venez ?',
                        'choices' => [
                            ['choice_text' => 'Je viens le Maroc.', 'is_correct' => false],
                            ['choice_text' => 'Je viens à Maroc.', 'is_correct' => false],
                            ['choice_text' => 'Je viens du Maroc.', 'is_correct' => true],
                            ['choice_text' => 'Je viens de Maroc.', 'is_correct' => false],
                        ],
                        'explanation' => 'Avec le verbe « venir », on emploie « de » ou une forme contractée comme « du » devant le nom masculin « Maroc » : « je viens du Maroc ».',
                    ],
                    [
                        'question' => 'Une collègue vous demande : « Comment allez-vous ? » Quelle réponse correspond au registre courant et poli ?',
                        'choices' => [
                            ['choice_text' => 'Je vais bien, merci.', 'is_correct' => true],
                            ['choice_text' => 'Je bien vais, merci.', 'is_correct' => false],
                            ['choice_text' => 'Je suis bien aller.', 'is_correct' => false],
                            ['choice_text' => 'Je vais bonne, merci.', 'is_correct' => false],
                        ],
                        'explanation' => 'La réponse « Je vais bien, merci » est une formule naturelle pour répondre à « Comment allez-vous ? ». Le verbe « aller » se conjugue ici à la première personne : « je vais ».',
                    ],
                    [
                        'question' => 'Quel mot peut-on employer pour répondre poliment à « Merci » ?',
                        'choices' => [
                            ['choice_text' => 'Pardon.', 'is_correct' => false],
                            ['choice_text' => 'De rien.', 'is_correct' => true],
                            ['choice_text' => 'Bonjour.', 'is_correct' => false],
                            ['choice_text' => 'À bientôt.', 'is_correct' => false],
                        ],
                        'explanation' => '« De rien » est une réponse courante à un remerciement. « Pardon », « bonjour » et « à bientôt » ont d’autres fonctions dans la conversation.',
                    ],
                    [
                        'question' => 'Vous quittez un ami en sachant que vous le reverrez le lendemain. Que pouvez-vous dire ?',
                        'choices' => [
                            ['choice_text' => 'À jamais !', 'is_correct' => false],
                            ['choice_text' => 'À matin !', 'is_correct' => false],
                            ['choice_text' => 'À maintenant !', 'is_correct' => false],
                            ['choice_text' => 'À demain !', 'is_correct' => true],
                        ],
                        'explanation' => '« À demain » signifie que l’on prévoit de se revoir le jour suivant. C’est une formule très courante pour prendre congé dans cette situation.',
                    ],
                    [
                        'question' => 'On vous demande : « Quel âge as-tu ? » Quelle réponse est grammaticalement correcte ?',
                        'choices' => [
                            ['choice_text' => 'J’ai vingt ans.', 'is_correct' => true],
                            ['choice_text' => 'Je suis vingt ans.', 'is_correct' => false],
                            ['choice_text' => 'Je fais vingt ans avoir.', 'is_correct' => false],
                            ['choice_text' => 'J’ai de vingt ans.', 'is_correct' => false],
                        ],
                        'explanation' => 'En français, l’âge se construit avec le verbe « avoir » : « j’ai vingt ans ». On ne dit pas « je suis vingt ans ».',
                    ],
                    [
                        'question' => 'Vous répondez à la question « Où habites-tu ? ». Quelle phrase est correcte ?',
                        'choices' => [
                            ['choice_text' => 'Je habite de Kénitra.', 'is_correct' => false],
                            ['choice_text' => 'J’habites à Kénitra.', 'is_correct' => false],
                            ['choice_text' => 'J’habite Kénitra de.', 'is_correct' => false],
                            ['choice_text' => 'J’habite à Kénitra.', 'is_correct' => true],
                        ],
                        'explanation' => 'Le verbe « habiter » se conjugue « j’habite » à la première personne du singulier. Pour une ville, on emploie la préposition « à ».',
                    ],
                    [
                        'question' => 'Un étudiant dit : « Je parle français. » Que signifie cette phrase ?',
                        'choices' => [
                            ['choice_text' => 'Il apprend les mathématiques.', 'is_correct' => false],
                            ['choice_text' => 'Il habite en France.', 'is_correct' => false],
                            ['choice_text' => 'Il communique en français.', 'is_correct' => true],
                            ['choice_text' => 'Il écrit en anglais.', 'is_correct' => false],
                        ],
                        'explanation' => '« Parler français » signifie utiliser le français pour communiquer. La phrase ne dit rien sur le pays où vit l’étudiant.',
                    ],
                    [
                        'question' => 'Vous retrouvez une personne que vous connaissez déjà. Quelle salutation est la plus naturelle ?',
                        'choices' => [
                            ['choice_text' => 'Bonjour ! Comment vas-tu ?', 'is_correct' => true],
                            ['choice_text' => 'Bonjour ! Comment es-tu ?', 'is_correct' => false],
                            ['choice_text' => 'Bonjour ! Comment allez-tu ?', 'is_correct' => false],
                            ['choice_text' => 'Bonjour ! Comment tu es-tu ?', 'is_correct' => false],
                        ],
                        'explanation' => '« Bonjour ! Comment vas-tu ? » associe une salutation et une question très courante entre personnes qui se connaissent. Les autres formulations mélangent des expressions qui n’ont pas la même fonction.',
                    ],
                ],
            ],
            [
                'title' => 'Se présenter et échanger au quotidien',
                'description' => 'Entraînez-vous à utiliser les nombres, les jours, les heures et les petites phrases indispensables dans une première conversation.',
                'duration' => 20,
                'passing_score' => 55,
                'questions' => [
                    [
                        'question' => 'Quel nombre correspond à « douze » ?',
                        'choices' => [
                            ['choice_text' => '2', 'is_correct' => false],
                            ['choice_text' => '20', 'is_correct' => false],
                            ['choice_text' => '12', 'is_correct' => true],
                            ['choice_text' => '22', 'is_correct' => false],
                        ],
                        'explanation' => '« Douze » correspond au nombre 12. Il se situe après onze et avant treize.',
                    ],
                    [
                        'question' => 'Quelle forme écrite correspond au nombre 30 ?',
                        'choices' => [
                            ['choice_text' => 'treize', 'is_correct' => false],
                            ['choice_text' => 'trentième', 'is_correct' => false],
                            ['choice_text' => 'trente', 'is_correct' => true],
                            ['choice_text' => 'trois', 'is_correct' => false],
                        ],
                        'explanation' => 'Le nombre 30 s’écrit « trente ». « Treize » correspond à 13, tandis que « trois » correspond à 3.',
                    ],
                    [
                        'question' => 'Nous sommes lundi. Quel jour vient juste après ?',
                        'choices' => [
                            ['choice_text' => 'Dimanche', 'is_correct' => false],
                            ['choice_text' => 'Vendredi', 'is_correct' => false],
                            ['choice_text' => 'Jeudi', 'is_correct' => false],
                            ['choice_text' => 'Mardi', 'is_correct' => true],
                        ],
                        'explanation' => 'Dans l’ordre habituel des jours de la semaine, mardi vient après lundi.',
                    ],
                    [
                        'question' => 'Votre cours commence à 9 h. Quelle phrase l’indique correctement ?',
                        'choices' => [
                            ['choice_text' => 'Le cours commence de neuf heures.', 'is_correct' => false],
                            ['choice_text' => 'Le cours commence en neuf heures.', 'is_correct' => false],
                            ['choice_text' => 'Le cours commence à neuf heures.', 'is_correct' => true],
                            ['choice_text' => 'Le cours commence pour neuf heures.', 'is_correct' => false],
                        ],
                        'explanation' => 'Pour indiquer l’heure précise à laquelle un événement commence, on emploie la préposition « à » : « à neuf heures ».',
                    ],
                    [
                        'question' => 'Quel énoncé correspond à 18 h 30 ?',
                        'choices' => [
                            ['choice_text' => 'Il est six heures et demie du soir.', 'is_correct' => true],
                            ['choice_text' => 'Il est six heures du matin.', 'is_correct' => false],
                            ['choice_text' => 'Il est huit heures et demie du soir.', 'is_correct' => false],
                            ['choice_text' => 'Il est sept heures et demie du soir.', 'is_correct' => false],
                        ],
                        'explanation' => '18 h 30 correspond à six heures et demie du soir dans la manière courante de parler. « Et demie » ajoute trente minutes à l’heure indiquée.',
                    ],
                    [
                        'question' => 'Votre professeur parle trop vite. Quelle demande simple pouvez-vous faire ?',
                        'choices' => [
                            ['choice_text' => 'Pouvez-vous répéter demain ?', 'is_correct' => false],
                            ['choice_text' => 'Pouvez-vous répéter, s’il vous plaît ?', 'is_correct' => true],
                            ['choice_text' => 'Je répète pour vous, s’il vous plaît ?', 'is_correct' => false],
                            ['choice_text' => 'Pouvez-vous répondre, s’il vous plaît ?', 'is_correct' => false],
                        ],
                        'explanation' => '« Pouvez-vous répéter, s’il vous plaît ? » est une demande simple, polie et naturelle lorsqu’on n’a pas compris ou entendu correctement.',
                    ],
                    [
                        'question' => 'Quelle phrase permet de demander le nom d’une personne avec politesse ?',
                        'choices' => [
                            ['choice_text' => 'Comment tu appelles-vous ?', 'is_correct' => false],
                            ['choice_text' => 'Comment vous appelez-vous ?', 'is_correct' => true],
                            ['choice_text' => 'Comment appelez-vous ?', 'is_correct' => false],
                            ['choice_text' => 'Quel est vous nom ?', 'is_correct' => false],
                        ],
                        'explanation' => '« Comment vous appelez-vous ? » est une formulation polie et correcte pour demander le nom d’une personne. Le pronom « vous » convient dans un contexte formel ou avec une personne que l’on ne tutoie pas.',
                    ],
                    [
                        'question' => 'Quel mois vient juste après mars ?',
                        'choices' => [
                            ['choice_text' => 'Avril', 'is_correct' => true],
                            ['choice_text' => 'Février', 'is_correct' => false],
                            ['choice_text' => 'Mai', 'is_correct' => false],
                            ['choice_text' => 'Juin', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans l’ordre de l’année : janvier, février, mars, avril. Le mois qui suit mars est donc avril.',
                    ],
                    [
                        'question' => 'Vous ne connaissez pas l’adresse d’une salle. Quelle question convient pour demander où elle se trouve ?',
                        'choices' => [
                            ['choice_text' => 'Quand est la salle B12 ?', 'is_correct' => false],
                            ['choice_text' => 'Pourquoi est la salle B12 ?', 'is_correct' => false],
                            ['choice_text' => 'Combien est la salle B12 ?', 'is_correct' => false],
                            ['choice_text' => 'Où est la salle B12 ?', 'is_correct' => true],
                        ],
                        'explanation' => '« Où » sert à demander un lieu. La phrase « Où est la salle B12 ? » demande donc correctement son emplacement.',
                    ],
                    [
                        'question' => 'Une personne vous dit : « Enchantée de faire votre connaissance. » Quelle réponse est naturelle ?',
                        'choices' => [
                            ['choice_text' => 'Au revoir également.', 'is_correct' => false],
                            ['choice_text' => 'Merci également, de rien.', 'is_correct' => false],
                            ['choice_text' => 'Bonne nuit également.', 'is_correct' => false],
                            ['choice_text' => 'Enchanté également.', 'is_correct' => true],
                        ],
                        'explanation' => '« Enchanté également » permet de répondre à une formule de présentation et d’exprimer la même satisfaction. Le mot « également » signifie ici « moi aussi ».',
                    ],
                    [
                        'question' => 'Quelle question demande simplement si la bibliothèque est ouverte en ce moment ?',
                        'choices' => [
                            ['choice_text' => 'La bibliothèque est-elle ouverte ?', 'is_correct' => true],
                            ['choice_text' => 'Où est la bibliothèque ouverte ?', 'is_correct' => false],
                            ['choice_text' => 'Combien coûte la bibliothèque ?', 'is_correct' => false],
                            ['choice_text' => 'Pourquoi la bibliothèque est-elle ouverte ?', 'is_correct' => false],
                        ],
                        'explanation' => 'La structure « Est-elle ouverte ? » permet de poser une question fermée sur l’état ou la situation d’un lieu. Ici, on demande simplement si la bibliothèque est ouverte ou non.',
                    ],
                    [
                        'question' => 'Vous avez rendez-vous à 14 h et vous voulez confirmer l’heure. Quelle phrase est naturelle ?',
                        'choices' => [
                            ['choice_text' => 'Nous nous retrouvons à quatorze heures, c’est qui ?', 'is_correct' => false],
                            ['choice_text' => 'Nous nous retrouvons à quatorze heures, c’est bien cela ?', 'is_correct' => true],
                            ['choice_text' => 'Nous nous retrouvons à quatorze heures, c’est où ?', 'is_correct' => false],
                            ['choice_text' => 'Nous nous retrouvons à quatorze heures, c’est combien ?', 'is_correct' => false],
                        ],
                        'explanation' => 'La phrase confirme l’heure de façon claire et naturelle. « C’est bien cela ? » sert à vérifier une information déjà donnée ou comprise.',
                    ],
                ],
            ],
            [
                'title' => 'Le vocabulaire essentiel de la vie quotidienne',
                'description' => 'Repérez le sens de mots et d’expressions très fréquents dans des situations liées à la maison, aux études, aux déplacements et aux achats.',
                'duration' => 25,
                'passing_score' => 55,
                'questions' => [
                    [
                        'question' => 'Dans une maison, où prépare-t-on le repas ?',
                        'choices' => [
                            ['choice_text' => 'Dans la salle de bains.', 'is_correct' => false],
                            ['choice_text' => 'Dans l’entrée.', 'is_correct' => false],
                            ['choice_text' => 'Dans le couloir.', 'is_correct' => false],
                            ['choice_text' => 'Dans la cuisine.', 'is_correct' => true],
                        ],
                        'explanation' => 'La cuisine est la pièce où l’on prépare les repas. Les autres pièces ont d’autres fonctions.',
                    ],
                    [
                        'question' => 'Une personne achète du pain chez le boulanger. Quel objet peut-elle demander pour emporter ses achats ?',
                        'choices' => [
                            ['choice_text' => 'Un tableau.', 'is_correct' => false],
                            ['choice_text' => 'Un sac.', 'is_correct' => true],
                            ['choice_text' => 'Une lampe.', 'is_correct' => false],
                            ['choice_text' => 'Une chaise.', 'is_correct' => false],
                        ],
                        'explanation' => 'Un sac sert à transporter des objets ou des achats. Dans une boulangerie, il peut notamment contenir le pain acheté.',
                    ],
                    [
                        'question' => 'Dans le contexte scolaire, quel mot désigne la personne qui enseigne ?',
                        'choices' => [
                            ['choice_text' => 'Le voisin.', 'is_correct' => false],
                            ['choice_text' => 'Le client.', 'is_correct' => false],
                            ['choice_text' => 'Le professeur.', 'is_correct' => true],
                            ['choice_text' => 'Le passager.', 'is_correct' => false],
                        ],
                        'explanation' => 'Le professeur enseigne aux élèves ou aux étudiants. Le voisin habite à côté et le passager voyage dans un véhicule.',
                    ],
                    [
                        'question' => 'Vous êtes dans un magasin et vous voulez connaître le prix d’un vêtement. Que pouvez-vous demander ?',
                        'choices' => [
                            ['choice_text' => 'Combien coûte cette veste ?', 'is_correct' => true],
                            ['choice_text' => 'Qui coûte cette veste ?', 'is_correct' => false],
                            ['choice_text' => 'Quand coûte cette veste ?', 'is_correct' => false],
                            ['choice_text' => 'Où coûte cette veste ?', 'is_correct' => false],
                        ],
                        'explanation' => '« Combien coûte... ? » sert à demander le prix. Le verbe « coûter » se construit ici avec le sujet « cette veste ».',
                    ],
                    [
                        'question' => 'Quel mot désigne un moyen de transport qui circule sur des rails dans une ville ?',
                        'choices' => [
                            ['choice_text' => 'Le bateau.', 'is_correct' => false],
                            ['choice_text' => 'Le vélo.', 'is_correct' => false],
                            ['choice_text' => 'La valise.', 'is_correct' => false],
                            ['choice_text' => 'Le tramway.', 'is_correct' => true],
                        ],
                        'explanation' => 'Le tramway est un moyen de transport urbain qui circule sur des rails. Les autres propositions ne correspondent pas à cette définition.',
                    ],
                    [
                        'question' => 'Pour aller à l’université, je prends le ___.',
                        'choices' => [
                            ['choice_text' => 'stylo', 'is_correct' => false],
                            ['choice_text' => 'table', 'is_correct' => false],
                            ['choice_text' => 'bus', 'is_correct' => true],
                            ['choice_text' => 'tableau', 'is_correct' => false],
                        ],
                        'explanation' => 'Pour se déplacer, on prend un moyen de transport : « prendre le bus ». Un stylo, une table et un tableau ne servent pas à voyager.',
                    ],
                    [
                        'question' => 'Vous avez faim. Quel énoncé exprime directement ce besoin ?',
                        'choices' => [
                            ['choice_text' => 'Je suis faim.', 'is_correct' => false],
                            ['choice_text' => 'J’ai faim.', 'is_correct' => true],
                            ['choice_text' => 'Je fais faim.', 'is_correct' => false],
                            ['choice_text' => 'Je vais faim.', 'is_correct' => false],
                        ],
                        'explanation' => 'En français, l’expression correcte est « avoir faim ». On dit donc « j’ai faim », avec le verbe « avoir ».',
                    ],
                    [
                        'question' => 'Quel adjectif convient pour une journée sans nuages et avec beaucoup de soleil ?',
                        'choices' => [
                            ['choice_text' => 'Bruyante.', 'is_correct' => false],
                            ['choice_text' => 'Ensoleillée.', 'is_correct' => true],
                            ['choice_text' => 'Rapide.', 'is_correct' => false],
                            ['choice_text' => 'Pluvieuse.', 'is_correct' => false],
                        ],
                        'explanation' => '« Ensoleillée » décrit une journée marquée par la présence du soleil. Les autres adjectifs ne décrivent pas directement la météo indiquée.',
                    ],
                    [
                        'question' => 'Une personne est « en retard ». Qu’est-ce que cela signifie ?',
                        'choices' => [
                            ['choice_text' => 'Elle arrive après l’heure prévue.', 'is_correct' => true],
                            ['choice_text' => 'Elle arrive avant l’heure prévue.', 'is_correct' => false],
                            ['choice_text' => 'Elle ne connaît personne dans la classe.', 'is_correct' => false],
                            ['choice_text' => 'Elle reste à la maison.', 'is_correct' => false],
                        ],
                        'explanation' => 'Être en retard signifie arriver après l’heure prévue pour un rendez-vous, un cours ou une activité.',
                    ],
                    [
                        'question' => 'Dans « Nous avons une petite chambre », quel mot donne la taille de la chambre ?',
                        'choices' => [
                            ['choice_text' => 'avons', 'is_correct' => false],
                            ['choice_text' => 'une', 'is_correct' => false],
                            ['choice_text' => 'chambre', 'is_correct' => false],
                            ['choice_text' => 'petite', 'is_correct' => true],
                        ],
                        'explanation' => '« Petite » est l’adjectif : il donne la taille de la chambre. « Une » est un déterminant et « chambre » est le nom.',
                    ],
                    [
                        'question' => 'Vous cherchez un endroit pour lire et emprunter des livres. Où allez-vous ?',
                        'choices' => [
                            ['choice_text' => 'À la gare.', 'is_correct' => false],
                            ['choice_text' => 'À la boulangerie.', 'is_correct' => false],
                            ['choice_text' => 'À la bibliothèque.', 'is_correct' => true],
                            ['choice_text' => 'À la station-service.', 'is_correct' => false],
                        ],
                        'explanation' => 'La bibliothèque est le lieu consacré notamment à la consultation et à l’emprunt de livres. Les autres lieux répondent à d’autres besoins.',
                    ],
                    [
                        'question' => 'Quel mot désigne la personne qui achète un produit dans un magasin ?',
                        'choices' => [
                            ['choice_text' => 'Le client ou la cliente.', 'is_correct' => true],
                            ['choice_text' => 'Le professeur ou la professeure.', 'is_correct' => false],
                            ['choice_text' => 'Le conducteur ou la conductrice.', 'is_correct' => false],
                            ['choice_text' => 'Le voisin ou la voisine.', 'is_correct' => false],
                        ],
                        'explanation' => 'Le client ou la cliente est la personne qui achète un produit ou utilise un service. Le mot « client » ne désigne pas une profession particulière.',
                    ],
                    [
                        'question' => 'Un message dit : « La réunion commence à 15 h dans la salle 4. » Où faut-il aller pour assister à la réunion ?',
                        'choices' => [
                            ['choice_text' => 'Dans la salle 15.', 'is_correct' => false],
                            ['choice_text' => 'Dans la salle 14.', 'is_correct' => false],
                            ['choice_text' => 'Dans la salle 4.', 'is_correct' => true],
                            ['choice_text' => 'Dans la salle 5.', 'is_correct' => false],
                        ],
                        'explanation' => 'Le message donne deux informations différentes : 15 h indique l’heure et « salle 4 » indique le lieu. Pour assister à la réunion, il faut donc se rendre dans la salle 4.',
                    ],
                    [
                        'question' => 'Vous avez beaucoup aimé un repas. Quelle phrase exprime cette opinion ?',
                        'choices' => [
                            ['choice_text' => 'Le repas était très mauvais.', 'is_correct' => false],
                            ['choice_text' => 'Le repas était très bon.', 'is_correct' => true],
                            ['choice_text' => 'Le repas était très décevant.', 'is_correct' => false],
                            ['choice_text' => 'Le repas était très désagréable.', 'is_correct' => false],
                        ],
                        'explanation' => '« Très bon » exprime une opinion positive sur le repas. Les autres adjectifs expriment une opinion négative.',
                    ],
                ],
            ],
            [
                'title' => 'Construire des phrases simples et correctes',
                'description' => 'Mettez en ordre les éléments essentiels de la phrase et repérez les formulations adaptées aux premières productions en français.',
                'duration' => 20,
                'passing_score' => 60,
                'questions' => [
                    [
                        'question' => 'Quelle phrase présente l’ordre le plus simple et le plus naturel ?',
                        'choices' => [
                            ['choice_text' => 'Regarde Paul un film.', 'is_correct' => false],
                            ['choice_text' => 'Un film Paul regarde.', 'is_correct' => false],
                            ['choice_text' => 'Paul regarde un film.', 'is_correct' => true],
                            ['choice_text' => 'Paul regarde film un.', 'is_correct' => false],
                        ],
                        'explanation' => 'La phrase suit la structure fréquente sujet + verbe + complément : « Paul » + « regarde » + « un film ». Cette organisation convient à une phrase déclarative simple.',
                    ],
                    [
                        'question' => 'Complétez naturellement : « Nous ___ le français en classe. »',
                        'choices' => [
                            ['choice_text' => 'étudions', 'is_correct' => true],
                            ['choice_text' => 'étudie', 'is_correct' => false],
                            ['choice_text' => 'étudier', 'is_correct' => false],
                            ['choice_text' => 'étudies', 'is_correct' => false],
                        ],
                        'explanation' => 'Avec le sujet « nous », le verbe « étudier » se conjugue au présent à la première personne du pluriel : « nous étudions ».',
                    ],
                    [
                        'question' => 'Quelle phrase est correcte pour parler de plusieurs livres ?',
                        'choices' => [
                            ['choice_text' => 'J’aime ces livres.', 'is_correct' => true],
                            ['choice_text' => 'J’aime ce livres.', 'is_correct' => false],
                            ['choice_text' => 'J’aime ces livre.', 'is_correct' => false],
                            ['choice_text' => 'J’aime cet livres.', 'is_correct' => false],
                        ],
                        'explanation' => 'Le nom « livres » est au pluriel, donc le déterminant démonstratif doit être « ces ». Le nom prend également la marque du pluriel : « livres ».',
                    ],
                    [
                        'question' => 'Un étudiant veut parler de sa sœur. Quelle phrase convient ?',
                        'choices' => [
                            ['choice_text' => 'Mon sœur habite à Rabat.', 'is_correct' => false],
                            ['choice_text' => 'Mes sœur habite à Rabat.', 'is_correct' => false],
                            ['choice_text' => 'Ma sœurs habite à Rabat.', 'is_correct' => false],
                            ['choice_text' => 'Ma sœur habite à Rabat.', 'is_correct' => true],
                        ],
                        'explanation' => '« Sœur » est un nom féminin singulier. Le possessif correspondant est donc « ma », et le nom reste au singulier : « ma sœur ».',
                    ],
                    [
                        'question' => 'Quelle phrase exprime correctement une action habituelle au présent ?',
                        'choices' => [
                            ['choice_text' => 'Je prendre le bus tous les matins.', 'is_correct' => false],
                            ['choice_text' => 'Je prends le bus tous les matins.', 'is_correct' => true],
                            ['choice_text' => 'Je prends le bus hier.', 'is_correct' => false],
                            ['choice_text' => 'Je pris le bus tous les matins.', 'is_correct' => false],
                        ],
                        'explanation' => 'Le présent convient pour une habitude exprimée ici par « tous les matins ». Le verbe « prendre » donne « je prends » à la première personne du singulier.',
                    ],
                    [
                        'question' => 'Quelle phrase contient une formulation correcte de la possession ?',
                        'choices' => [
                            ['choice_text' => 'C’est mon cahier.', 'is_correct' => true],
                            ['choice_text' => 'C’est ma cahier.', 'is_correct' => false],
                            ['choice_text' => 'C’est mes cahier.', 'is_correct' => false],
                            ['choice_text' => 'C’est moi cahier.', 'is_correct' => false],
                        ],
                        'explanation' => '« Cahier » est masculin singulier, donc le déterminant possessif correspondant à « je » est « mon ». La structure « c’est mon cahier » est correcte.',
                    ],
                    [
                        'question' => 'Vous voulez dire que votre ami n’est pas à la maison. Quelle phrase est correcte ?',
                        'choices' => [
                            ['choice_text' => 'Mon ami ne est pas à la maison.', 'is_correct' => false],
                            ['choice_text' => 'Mon ami n’est pas à la maison.', 'is_correct' => true],
                            ['choice_text' => 'Mon ami n’est pas de maison.', 'is_correct' => false],
                            ['choice_text' => 'Mon ami n’est pas à le maison.', 'is_correct' => false],
                        ],
                        'explanation' => 'À l’écrit standard, la négation se construit avec « ne ... pas ». Devant « est », « ne » devient « n’ », d’où « n’est pas ».',
                    ],
                    [
                        'question' => 'Quelle question est correctement formée avec « qui » ?',
                        'choices' => [
                            ['choice_text' => 'Qui vient-il ce soir ?', 'is_correct' => false],
                            ['choice_text' => 'Qui venir ce soir ?', 'is_correct' => false],
                            ['choice_text' => 'Qui ce soir vient ?', 'is_correct' => false],
                            ['choice_text' => 'Qui vient ce soir ?', 'is_correct' => true],
                        ],
                        'explanation' => '« Qui vient ce soir ? » est une question simple et naturelle. Ici, « qui » joue le rôle de sujet du verbe « vient ».',
                    ],
                    [
                        'question' => 'Dans la phrase « Nous sommes étudiants », que désigne « nous » ?',
                        'choices' => [
                            ['choice_text' => 'La personne à qui l’on parle.', 'is_correct' => false],
                            ['choice_text' => 'Le groupe qui parle.', 'is_correct' => true],
                            ['choice_text' => 'Une seule personne absente.', 'is_correct' => false],
                            ['choice_text' => 'Le lieu où l’on étudie.', 'is_correct' => false],
                        ],
                        'explanation' => 'Le pronom « nous » désigne le locuteur avec une ou plusieurs autres personnes. Il s’oppose ici à « vous », qui désignerait la ou les personnes auxquelles on parle.',
                    ],
                    [
                        'question' => 'Quelle phrase renforce le même avis que « Le cours est intéressant » ?',
                        'choices' => [
                            ['choice_text' => 'Le cours n’est pas intéressant.', 'is_correct' => false],
                            ['choice_text' => 'Le cours est difficile à trouver.', 'is_correct' => false],
                            ['choice_text' => 'Le cours est vraiment intéressant.', 'is_correct' => true],
                            ['choice_text' => 'Le cours commence demain.', 'is_correct' => false],
                        ],
                        'explanation' => 'L’ajout de « vraiment » renforce l’idée déjà exprimée sans changer le sens principal. Les autres propositions modifient complètement l’information.',
                    ],
                    [
                        'question' => 'Que fait le mot « et » dans « Sara habite à Rabat et travaille à Salé » ?',
                        'choices' => [
                            ['choice_text' => 'Il pose une question', 'is_correct' => false],
                            ['choice_text' => 'Il indique le passé', 'is_correct' => false],
                            ['choice_text' => 'Il relie deux informations', 'is_correct' => true],
                            ['choice_text' => 'Il remplace le sujet', 'is_correct' => false],
                        ],
                        'explanation' => 'Le mot « et » relie ici deux informations : où Sara habite et où elle travaille.',
                    ],
                ],
            ],
            [
                'title' => 'Comprendre les situations courantes',
                'description' => 'Interprétez de courts échanges du quotidien et choisissez la réponse ou l’action qui correspond le mieux au contexte.',
                'duration' => 25,
                'passing_score' => 60,
                'questions' => [
                    [
                        'question' => '— Bonjour, je peux vous aider ?
— Oui, je cherche la salle 12.
Que cherche la personne ?',
                        'choices' => [
                            ['choice_text' => 'Un restaurant.', 'is_correct' => false],
                            ['choice_text' => 'Une salle.', 'is_correct' => true],
                            ['choice_text' => 'Une voiture.', 'is_correct' => false],
                            ['choice_text' => 'Un livre.', 'is_correct' => false],
                        ],
                        'explanation' => 'La personne dit explicitement : « je cherche la salle 12 ». Elle cherche donc un lieu précis dans le bâtiment.',
                    ],
                    [
                        'question' => '— Tu viens au cinéma ce soir ?
— Non, je travaille.
Pourquoi la personne ne vient-elle pas ?',
                        'choices' => [
                            ['choice_text' => 'Parce qu’elle est au cinéma.', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’elle travaille.', 'is_correct' => true],
                            ['choice_text' => 'Parce qu’elle dort déjà.', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’elle voyage demain.', 'is_correct' => false],
                        ],
                        'explanation' => 'La deuxième personne répond « je travaille », ce qui donne directement la raison pour laquelle elle ne vient pas au cinéma.',
                    ],
                    [
                        'question' => 'Un panneau indique : « Entrée : 10 €. » Que faut-il comprendre ?',
                        'choices' => [
                            ['choice_text' => 'Il faut payer 10 € pour entrer.', 'is_correct' => true],
                            ['choice_text' => 'On reçoit 10 € à l’entrée.', 'is_correct' => false],
                            ['choice_text' => 'L’entrée est gratuite.', 'is_correct' => false],
                            ['choice_text' => 'Le lieu ferme à 10 h.', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans ce contexte, « Entrée : 10 € » indique le prix à payer pour accéder au lieu. Le nombre 10 est ici un prix, pas une heure.',
                    ],
                    [
                        'question' => '— À quelle heure commence le cours ?
— À 8 h 45.
Quand commence le cours ?',
                        'choices' => [
                            ['choice_text' => 'À huit heures et quart.', 'is_correct' => false],
                            ['choice_text' => 'À neuf heures et quart.', 'is_correct' => false],
                            ['choice_text' => 'À neuf heures moins le quart.', 'is_correct' => true],
                            ['choice_text' => 'À huit heures et demie.', 'is_correct' => false],
                        ],
                        'explanation' => '8 h 45 se dit « neuf heures moins le quart » : il manque un quart d’heure pour arriver à neuf heures.',
                    ],
                    [
                        'question' => '— Tu veux un café ?
— Non merci, je voudrais un thé.
Que préfère la personne ?',
                        'choices' => [
                            ['choice_text' => 'Un thé.', 'is_correct' => true],
                            ['choice_text' => 'Un café.', 'is_correct' => false],
                            ['choice_text' => 'Un jus d’orange.', 'is_correct' => false],
                            ['choice_text' => 'De l’eau gazeuse.', 'is_correct' => false],
                        ],
                        'explanation' => 'La personne refuse le café et précise : « je voudrais un thé ». Le thé est donc la boisson qu’elle choisit.',
                    ],
                    [
                        'question' => '— Pardon, où est la gare ?
— Elle est près de la mairie.
Que donne la deuxième personne ?',
                        'choices' => [
                            ['choice_text' => 'Le prix du billet.', 'is_correct' => false],
                            ['choice_text' => 'L’heure du train.', 'is_correct' => false],
                            ['choice_text' => 'Le nom du conducteur.', 'is_correct' => false],
                            ['choice_text' => 'Une indication de lieu.', 'is_correct' => true],
                        ],
                        'explanation' => '« Près de la mairie » indique où se trouve la gare. La réponse ne donne ni prix, ni horaire, ni information sur un conducteur.',
                    ],
                    [
                        'question' => 'Un message dit : « Réunion déplacée à mardi. » Que signifie « déplacée » dans ce contexte ?',
                        'choices' => [
                            ['choice_text' => 'La réunion change de salle sans changer de date.', 'is_correct' => false],
                            ['choice_text' => 'La réunion est devenue plus courte.', 'is_correct' => false],
                            ['choice_text' => 'La réunion a lieu un autre jour.', 'is_correct' => true],
                            ['choice_text' => 'La réunion est annulée.', 'is_correct' => false],
                        ],
                        'explanation' => 'Ici, « déplacée à mardi » signifie que la date a changé : la réunion aura lieu mardi. Elle n’est pas annulée.',
                    ],
                    [
                        'question' => '— Tu as le livre de français ?
— Oui, il est dans mon sac.
Où se trouve le livre ?',
                        'choices' => [
                            ['choice_text' => 'Sur le bureau du professeur.', 'is_correct' => false],
                            ['choice_text' => 'À la bibliothèque municipale.', 'is_correct' => false],
                            ['choice_text' => 'Dans la voiture de son ami.', 'is_correct' => false],
                            ['choice_text' => 'Dans le sac de la personne.', 'is_correct' => true],
                        ],
                        'explanation' => 'La réponse « il est dans mon sac » donne directement l’emplacement du livre. « Mon sac » appartient à la personne qui parle.',
                    ],
                    [
                        'question' => 'Un étudiant arrive devant une porte avec le message « Salle fermée aujourd’hui ». Que doit-il comprendre ?',
                        'choices' => [
                            ['choice_text' => 'La salle ouvre plus tôt aujourd’hui.', 'is_correct' => false],
                            ['choice_text' => 'Il ne peut pas utiliser cette salle.', 'is_correct' => true],
                            ['choice_text' => 'La salle contient plus de places aujourd’hui.', 'is_correct' => false],
                            ['choice_text' => 'La salle est réservée aux visiteurs étrangers.', 'is_correct' => false],
                        ],
                        'explanation' => '« Salle fermée aujourd’hui » signifie que l’accès à cette salle n’est pas possible ce jour-là.',
                    ],
                    [
                        'question' => '— Excusez-moi, est-ce que cette place est libre ?
— Non, elle est prise.
Que signifie « elle est prise » ici ?',
                        'choices' => [
                            ['choice_text' => 'La chaise est cassée.', 'is_correct' => false],
                            ['choice_text' => 'La place est en promotion.', 'is_correct' => false],
                            ['choice_text' => 'La place se trouve à l’extérieur.', 'is_correct' => false],
                            ['choice_text' => 'Quelqu’un occupe déjà la place.', 'is_correct' => true],
                        ],
                        'explanation' => 'Dans ce contexte, « une place est prise » signifie qu’elle n’est pas disponible : quelqu’un l’occupe déjà.',
                    ],
                    [
                        'question' => 'Une affiche annonce : « Bibliothèque ouverte du lundi au vendredi, de 9 h à 18 h. » Une personne vient samedi à 10 h. Quelle conclusion est la plus logique ?',
                        'choices' => [
                            ['choice_text' => 'La bibliothèque ouvre à 18 h le samedi soir.', 'is_correct' => false],
                            ['choice_text' => 'La bibliothèque est ouverte jour et nuit.', 'is_correct' => false],
                            ['choice_text' => 'Elle n’est pas annoncée ouverte le samedi.', 'is_correct' => true],
                            ['choice_text' => 'La bibliothèque ouvre à 9 h le dimanche.', 'is_correct' => false],
                        ],
                        'explanation' => 'L’affiche indique « du lundi au vendredi » : le samedi n’est pas dans les horaires annoncés.',
                    ],
                    [
                        'question' => '— Vous désirez autre chose ?
— Non, merci, c’est tout.
Que veut dire « c’est tout » dans cette situation ?',
                        'choices' => [
                            ['choice_text' => 'La personne ne souhaite rien ajouter à sa demande.', 'is_correct' => true],
                            ['choice_text' => 'La personne veut recommencer toute la conversation.', 'is_correct' => false],
                            ['choice_text' => 'La personne ne comprend pas le vendeur.', 'is_correct' => false],
                            ['choice_text' => 'La personne demande un autre magasin.', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans un magasin ou un service, « c’est tout » signifie que la personne a terminé sa demande et ne souhaite rien de plus.',
                    ],
                    [
                        'question' => 'Un professeur écrit dans un message : « N’oubliez pas votre manuel demain. » Quelle action est attendue des étudiants ?',
                        'choices' => [
                            ['choice_text' => 'Acheter un nouveau manuel ce soir.', 'is_correct' => false],
                            ['choice_text' => 'Annuler le cours du lendemain.', 'is_correct' => false],
                            ['choice_text' => 'Apporter leur manuel le lendemain.', 'is_correct' => true],
                            ['choice_text' => 'Répondre au message le soir.', 'is_correct' => false],
                        ],
                        'explanation' => 'La phrase demande aux étudiants de ne pas oublier le manuel pour le lendemain. L’action attendue est donc de l’apporter au cours.',
                    ],
                    [
                        'question' => '— Désolé, je suis en retard.
— Ce n’est pas grave.
Que veut dire « Ce n’est pas grave » ?',
                        'choices' => [
                            ['choice_text' => 'La personne annonce une urgence médicale.', 'is_correct' => false],
                            ['choice_text' => 'La personne demande de partir immédiatement.', 'is_correct' => false],
                            ['choice_text' => 'La personne dit que le rendez-vous est annulé.', 'is_correct' => false],
                            ['choice_text' => 'Le retard n’est pas un problème important.', 'is_correct' => true],
                        ],
                        'explanation' => '« Ce n’est pas grave » est une façon de rassurer quelqu’un et de dire que la situation n’est pas considérée comme importante ou problématique.',
                    ],
                ],
            ],
            [
                'title' => 'Révision pratique des bases du français',
                'description' => 'Mobilisez les notions essentielles dans des situations variées : présentation, grammaire simple, vocabulaire, compréhension et communication courante.',
                'duration' => 30,
                'passing_score' => 60,
                'questions' => [
                    [
                        'question' => 'Vous rencontrez quelqu’un pour la première fois dans un contexte formel. Quelle formule d’ouverture convient le mieux ?',
                        'choices' => [
                            ['choice_text' => 'Salut, ça va ? Moi, c’est Karim.', 'is_correct' => false],
                            ['choice_text' => 'Coucou, tu es nouveau ? Moi, je suis Hind.', 'is_correct' => false],
                            ['choice_text' => 'Hé, tu t’appelles comment, toi ?', 'is_correct' => false],
                            ['choice_text' => 'Bonjour, enchanté de vous rencontrer.', 'is_correct' => true],
                        ],
                        'explanation' => '« Bonjour » et « enchanté de vous rencontrer » sont des formules polies pour une première rencontre formelle. Les autres phrases sont familières.',
                    ],
                    [
                        'question' => 'Quelle phrase est correcte ?',
                        'choices' => [
                            ['choice_text' => 'Nous allons à l’université en bus.', 'is_correct' => true],
                            ['choice_text' => 'Nous allons à le université en bus.', 'is_correct' => false],
                            ['choice_text' => 'Nous allez à l’université en bus.', 'is_correct' => false],
                            ['choice_text' => 'Nous va à l’université en bus.', 'is_correct' => false],
                        ],
                        'explanation' => 'Avec « nous », le verbe « aller » devient « allons », et « à » s’écrit « à l’ » devant « université ».',
                    ],
                    [
                        'question' => 'Quel énoncé correspond le mieux à la situation suivante : vous avez compris une explication ?',
                        'choices' => [
                            ['choice_text' => 'Non, je suis compris.', 'is_correct' => false],
                            ['choice_text' => 'Oui, je comprends hier.', 'is_correct' => false],
                            ['choice_text' => 'Oui, j’ai compris.', 'is_correct' => true],
                            ['choice_text' => 'Oui, j’ai comprendre.', 'is_correct' => false],
                        ],
                        'explanation' => '« J’ai compris » indique naturellement que l’explication a été comprise. Le passé composé est approprié pour signaler le résultat d’une action récente.',
                    ],
                    [
                        'question' => 'Vous parlez de livres qui appartiennent à votre famille : « Ce sont ___ livres. »',
                        'choices' => [
                            ['choice_text' => 'notre', 'is_correct' => false],
                            ['choice_text' => 'mes', 'is_correct' => false],
                            ['choice_text' => 'ma', 'is_correct' => false],
                            ['choice_text' => 'nos', 'is_correct' => true],
                        ],
                        'explanation' => 'Les livres appartiennent à « nous » et ils sont plusieurs : « nos livres ».',
                    ],
                    [
                        'question' => 'Un ami vous dit : « À tout à l’heure ! » Que veut-il dire ?',
                        'choices' => [
                            ['choice_text' => 'Il pense vous revoir dans la journée.', 'is_correct' => true],
                            ['choice_text' => 'Il ne veut plus vous revoir.', 'is_correct' => false],
                            ['choice_text' => 'Il pense vous revoir l’année prochaine.', 'is_correct' => false],
                            ['choice_text' => 'Il vous dit au revoir pour la semaine.', 'is_correct' => false],
                        ],
                        'explanation' => '« À tout à l’heure » veut dire que l’on se reverra plus tard dans la même journée.',
                    ],
                    [
                        'question' => 'Vous n’avez pas compris un mot. Comment demandez-vous poliment qu’on l’écrive ?',
                        'choices' => [
                            ['choice_text' => 'Pourriez-vous l’écrire, s’il vous plaît ?', 'is_correct' => true],
                            ['choice_text' => 'Écrivez-le vite, c’est urgent !', 'is_correct' => false],
                            ['choice_text' => 'Pourquoi vous écrivez mal ?', 'is_correct' => false],
                            ['choice_text' => 'Vous écrivez ce mot demain.', 'is_correct' => false],
                        ],
                        'explanation' => '« Pourriez-vous... ? » formule une demande polie. Les autres phrases sont brusques ou n’ont pas de sens ici.',
                    ],
                    [
                        'question' => 'Quelle phrase est cohérente si une personne habite à Casablanca mais travaille à Rabat ?',
                        'choices' => [
                            ['choice_text' => 'Elle habite à Casablanca et elle travaille de Rabat.', 'is_correct' => false],
                            ['choice_text' => 'Elle habite en Casablanca et elle travaille à Rabat.', 'is_correct' => false],
                            ['choice_text' => 'Elle habite à Casablanca et elle travaille à Rabat.', 'is_correct' => true],
                            ['choice_text' => 'Elle habite à Casablanca et elle travailler à Rabat.', 'is_correct' => false],
                        ],
                        'explanation' => 'La phrase correcte emploie « habite » et « travaille » au présent, ainsi que « à » devant les deux villes. « Et » relie les deux informations.',
                    ],
                    [
                        'question' => 'Dans la phrase « Je n’ai pas de voiture », que veut exprimer la négation ?',
                        'choices' => [
                            ['choice_text' => 'La personne indique qu’elle possède plusieurs voitures.', 'is_correct' => false],
                            ['choice_text' => 'La personne annonce qu’elle achète une voiture aujourd’hui.', 'is_correct' => false],
                            ['choice_text' => 'La personne demande où se trouve sa voiture.', 'is_correct' => false],
                            ['choice_text' => 'La personne indique qu’elle ne possède pas de voiture.', 'is_correct' => true],
                        ],
                        'explanation' => '« Ne ... pas de » exprime l’absence : la personne ne possède pas de voiture.',
                    ],
                    [
                        'question' => 'Vous êtes au restaurant et vous voulez demander de l’eau. Quelle formulation est la plus polie ?',
                        'choices' => [
                            ['choice_text' => 'Apportez-moi de l’eau tout de suite !', 'is_correct' => false],
                            ['choice_text' => 'Pourriez-vous m’apporter de l’eau ?', 'is_correct' => true],
                            ['choice_text' => 'Je veux de l’eau, apportez-la !', 'is_correct' => false],
                            ['choice_text' => 'Donnez-moi de l’eau, c’est pour moi.', 'is_correct' => false],
                        ],
                        'explanation' => 'La tournure « Pourriez-vous m’apporter... ? » est une demande polie. Le groupe « de l’eau » est également la forme naturelle pour parler d’une quantité non précisée.',
                    ],
                    [
                        'question' => 'Quelle réponse correspond à la question « Pourquoi apprends-tu le français ? » si la personne parle de ses études ?',
                        'choices' => [
                            ['choice_text' => 'Avec mes amis, le soir après les cours.', 'is_correct' => false],
                            ['choice_text' => 'Parce que j’ai besoin du français.', 'is_correct' => true],
                            ['choice_text' => 'Depuis deux ans, grâce à une amie.', 'is_correct' => false],
                            ['choice_text' => 'À l’université de Rabat, en ville.', 'is_correct' => false],
                        ],
                        'explanation' => '« Parce que » donne la raison : la personne a besoin du français pour ses études.',
                    ],
                    [
                        'question' => 'Un étudiant écrit : « J’aime beaucoup ce cours parce qu’il est clair. » Quelle information donne « parce qu’il est clair » ?',
                        'choices' => [
                            ['choice_text' => 'L’heure à laquelle le cours commence.', 'is_correct' => false],
                            ['choice_text' => 'Le lieu où se trouve l’étudiant.', 'is_correct' => false],
                            ['choice_text' => 'La raison pour laquelle il aime le cours.', 'is_correct' => true],
                            ['choice_text' => 'Le nom du professeur de ce cours.', 'is_correct' => false],
                        ],
                        'explanation' => '« Parce que » introduit une cause ou une explication. Ici, le caractère « clair » du cours explique pourquoi l’étudiant l’apprécie.',
                    ],
                    [
                        'question' => 'Vous êtes dans une file et vous souhaitez savoir si une personne attend également. Quelle question est la plus naturelle ?',
                        'choices' => [
                            ['choice_text' => 'Vous attendez quand ?', 'is_correct' => false],
                            ['choice_text' => 'Vous attendez aussi ?', 'is_correct' => true],
                            ['choice_text' => 'Vous attendez combien ?', 'is_correct' => false],
                            ['choice_text' => 'Vous attendez comment ?', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans une conversation courante, « Vous attendez aussi ? » est une question simple et naturelle. Le mot « aussi » indique que la personne qui parle attend elle-même.',
                    ],
                    [
                        'question' => 'Un message indique : « Merci de fermer la porte en sortant. » Que demande-t-on au lecteur ?',
                        'choices' => [
                            ['choice_text' => 'Laisser la porte grande ouverte.', 'is_correct' => false],
                            ['choice_text' => 'Fermer la porte avant de partir.', 'is_correct' => true],
                            ['choice_text' => 'Ouvrir la porte en entrant.', 'is_correct' => false],
                            ['choice_text' => 'Frapper avant d’entrer.', 'is_correct' => false],
                        ],
                        'explanation' => 'La formulation « Merci de + infinitif » sert ici à demander une action. Le lecteur doit donc fermer la porte lorsqu’il quitte le lieu.',
                    ],
                    [
                        'question' => 'Quelle phrase est la plus adaptée pour terminer poliment un message à un professeur ?',
                        'choices' => [
                            ['choice_text' => 'Salut, à plus tard, prof !', 'is_correct' => false],
                            ['choice_text' => 'Merci, ciao et bonne chance !', 'is_correct' => false],
                            ['choice_text' => 'Merci pour votre aide, bonne journée.', 'is_correct' => true],
                            ['choice_text' => 'Je vous écris vite, répondez-moi vite.', 'is_correct' => false],
                        ],
                        'explanation' => 'La formulation est polie et adaptée à une communication avec un professeur. « Votre aide » et « bonne journée » conviennent à un registre respectueux.',
                    ],
                    [
                        'question' => 'Vous n’avez pas compris une information donnée à l’oral. Quelle réaction est la plus utile ?',
                        'choices' => [
                            ['choice_text' => 'Tant pis, je ne pose pas de question.', 'is_correct' => false],
                            ['choice_text' => 'Je change de sujet sans rien dire.', 'is_correct' => false],
                            ['choice_text' => 'Je réponds oui sans avoir compris.', 'is_correct' => false],
                            ['choice_text' => 'Pardon, pouvez-vous expliquer encore ?', 'is_correct' => true],
                        ],
                        'explanation' => '« Pouvez-vous expliquer encore ? » demande à l’interlocuteur de reprendre son explication. C’est une stratégie simple et utile.',
                    ],
                    [
                        'question' => 'Un camarade vous dit : « Je suis désolé, je ne peux pas venir aujourd’hui. » Quelle réponse montre que vous acceptez la situation sans insister ?',
                        'choices' => [
                            ['choice_text' => 'D’accord, pas de problème, une autre fois.', 'is_correct' => true],
                            ['choice_text' => 'Non, tu dois venir immédiatement, c’est important.', 'is_correct' => false],
                            ['choice_text' => 'Mais tu avais promis de venir aujourd’hui !', 'is_correct' => false],
                            ['choice_text' => 'Très bien, mais tu dois venir demain sans faute.', 'is_correct' => false],
                        ],
                        'explanation' => 'La réponse reconnaît la situation, ne met pas de pression et propose naturellement de se revoir plus tard. Elle correspond à une réaction quotidienne courtoise.',
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
