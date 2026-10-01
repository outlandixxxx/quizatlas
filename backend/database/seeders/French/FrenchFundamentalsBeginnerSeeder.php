<?php

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
                'title' => "Premiers repères en français",
                'description' => "Découvrez les formules essentielles pour saluer, vous présenter, poser des questions simples et réagir dans les échanges les plus courants.",
                'duration' => 15,
                'passing_score' => 50,
                'questions' => [
                    [
                        'question' => "Vous rencontrez votre professeur à 9 heures du matin. Quelle formule convient le mieux pour commencer la conversation ?",
                        'choices' => [
                            ['choice_text' => "Bonjour, Madame.", 'is_correct' => true],
                            ['choice_text' => "Bonne nuit, Madame.", 'is_correct' => false],
                            ['choice_text' => "À demain, Madame.", 'is_correct' => false],
                            ['choice_text' => "Au revoir, Madame.", 'is_correct' => false],
                        ],
                        'explanation' => "« Bonjour » est la formule habituelle pour saluer quelqu'un pendant la journée, notamment le matin. « Bonne nuit » et « au revoir » ne conviennent pas pour commencer cet échange.",
                    ],
                    [
                        'question' => "Vous voulez dire votre prénom à une nouvelle camarade. Quelle phrase est correcte ?",
                        'choices' => [
                            ['choice_text' => "Je m'appelle Sara.", 'is_correct' => true],
                            ['choice_text' => "Je me appelle Sara.", 'is_correct' => false],
                            ['choice_text' => "Moi appeler Sara.", 'is_correct' => false],
                            ['choice_text' => "Je suis appelle Sara.", 'is_correct' => false],
                        ],
                        'explanation' => "Pour se présenter en français, on utilise « je m'appelle » suivi du prénom. Le pronom réfléchi « me » devient « m' » devant une voyelle.",
                    ],
                    [
                        'question' => "Quelle phrase permet de dire simplement d'où vous venez ?",
                        'choices' => [
                            ['choice_text' => "Je viens du Maroc.", 'is_correct' => true],
                            ['choice_text' => "Je viens le Maroc.", 'is_correct' => false],
                            ['choice_text' => "Je viens à Maroc.", 'is_correct' => false],
                            ['choice_text' => "Je viens de Maroc est.", 'is_correct' => false],
                        ],
                        'explanation' => "Avec le verbe « venir », on emploie « de » ou une forme contractée comme « du » devant le nom masculin « Maroc » : « je viens du Maroc ».",
                    ],
                    [
                        'question' => "Une collègue vous demande : « Comment allez-vous ? » Quelle réponse correspond au registre courant et poli ?",
                        'choices' => [
                            ['choice_text' => "Je vais bien, merci.", 'is_correct' => true],
                            ['choice_text' => "Je bien vais, merci.", 'is_correct' => false],
                            ['choice_text' => "Je suis bien aller.", 'is_correct' => false],
                            ['choice_text' => "Bien aller, merci.", 'is_correct' => false],
                        ],
                        'explanation' => "La réponse « Je vais bien, merci » est une formule naturelle pour répondre à « Comment allez-vous ? ». Le verbe « aller » se conjugue ici à la première personne : « je vais ».",
                    ],
                    [
                        'question' => "Quel mot peut-on employer pour répondre poliment à « Merci » ?",
                        'choices' => [
                            ['choice_text' => "De rien.", 'is_correct' => true],
                            ['choice_text' => "Pardon.", 'is_correct' => false],
                            ['choice_text' => "Bonjour.", 'is_correct' => false],
                            ['choice_text' => "À bientôt.", 'is_correct' => false],
                        ],
                        'explanation' => "« De rien » est une réponse courante à un remerciement. « Pardon », « bonjour » et « à bientôt » ont d'autres fonctions dans la conversation.",
                    ],
                    [
                        'question' => "Vous quittez un ami en sachant que vous le reverrez le lendemain. Que pouvez-vous dire ?",
                        'choices' => [
                            ['choice_text' => "À demain !", 'is_correct' => true],
                            ['choice_text' => "À jamais !", 'is_correct' => false],
                            ['choice_text' => "À matin !", 'is_correct' => false],
                            ['choice_text' => "À maintenant !", 'is_correct' => false],
                        ],
                        'explanation' => "« À demain » signifie que l'on prévoit de se revoir le jour suivant. C'est une formule très courante pour prendre congé dans cette situation.",
                    ],
                    [
                        'question' => "On vous demande : « Quel âge as-tu ? » Quelle réponse est grammaticalement correcte ?",
                        'choices' => [
                            ['choice_text' => "J'ai vingt ans.", 'is_correct' => true],
                            ['choice_text' => "Je suis vingt ans.", 'is_correct' => false],
                            ['choice_text' => "Je fais vingt ans avoir.", 'is_correct' => false],
                            ['choice_text' => "J'ai de vingt ans.", 'is_correct' => false],
                        ],
                        'explanation' => "En français, l'âge se construit avec le verbe « avoir » : « j'ai vingt ans ». On ne dit pas « je suis vingt ans ».",
                    ],
                    [
                        'question' => "Vous répondez à la question « Où habites-tu ? ». Quelle phrase est correcte ?",
                        'choices' => [
                            ['choice_text' => "J'habite à Kénitra.", 'is_correct' => true],
                            ['choice_text' => "Je habite de Kénitra.", 'is_correct' => false],
                            ['choice_text' => "J'habites à Kénitra.", 'is_correct' => false],
                            ['choice_text' => "J'habite Kénitra de.", 'is_correct' => false],
                        ],
                        'explanation' => "Le verbe « habiter » se conjugue « j'habite » à la première personne du singulier. Pour une ville, on emploie généralement la préposition « à ».",
                    ],
                    [
                        'question' => "Un étudiant dit : « Je parle français. » Que signifie cette phrase ?",
                        'choices' => [
                            ['choice_text' => "Il utilise la langue française pour communiquer.", 'is_correct' => true],
                            ['choice_text' => "Il apprend uniquement les mathématiques.", 'is_correct' => false],
                            ['choice_text' => "Il habite forcément en France.", 'is_correct' => false],
                            ['choice_text' => "Il écrit uniquement en anglais.", 'is_correct' => false],
                        ],
                        'explanation' => "« Parler français » signifie utiliser le français à l'oral pour communiquer. La phrase ne donne aucune information obligatoire sur le pays où vit l'étudiant.",
                    ],
                    [
                        'question' => "Vous retrouvez une personne que vous connaissez déjà. Quelle salutation est la plus naturelle ?",
                        'choices' => [
                            ['choice_text' => "Bonjour ! Comment vas-tu ?", 'is_correct' => true],
                            ['choice_text' => "Comment merci ?", 'is_correct' => false],
                            ['choice_text' => "Au revoir, comment viens-tu ?", 'is_correct' => false],
                            ['choice_text' => "Bonne nuit, où habites-vous demain ?", 'is_correct' => false],
                        ],
                        'explanation' => "« Bonjour ! Comment vas-tu ? » associe une salutation et une question très courante entre personnes qui se connaissent. Les autres formulations mélangent des expressions qui n'ont pas la même fonction.",
                    ],
                ],
            ],
            [
                'title' => "Se présenter et échanger au quotidien",
                'description' => "Entraînez-vous à utiliser les nombres, les jours, les heures et les petites phrases indispensables dans une première conversation.",
                'duration' => 20,
                'passing_score' => 55,
                'questions' => [
                    [
                        'question' => "Quel nombre correspond à « douze » ?",
                        'choices' => [
                            ['choice_text' => "12", 'is_correct' => true],
                            ['choice_text' => "2", 'is_correct' => false],
                            ['choice_text' => "20", 'is_correct' => false],
                            ['choice_text' => "22", 'is_correct' => false],
                        ],
                        'explanation' => "« Douze » correspond au nombre 12. Il se situe après onze et avant treize.",
                    ],
                    [
                        'question' => "Quelle forme écrite correspond au nombre 30 ?",
                        'choices' => [
                            ['choice_text' => "trente", 'is_correct' => true],
                            ['choice_text' => "treize", 'is_correct' => false],
                            ['choice_text' => "trentième", 'is_correct' => false],
                            ['choice_text' => "trois", 'is_correct' => false],
                        ],
                        'explanation' => "Le nombre 30 s'écrit « trente ». « Treize » correspond à 13, tandis que « trois » correspond à 3.",
                    ],
                    [
                        'question' => "Nous sommes lundi. Quel jour vient juste après ?",
                        'choices' => [
                            ['choice_text' => "Mardi", 'is_correct' => true],
                            ['choice_text' => "Dimanche", 'is_correct' => false],
                            ['choice_text' => "Vendredi", 'is_correct' => false],
                            ['choice_text' => "Jeudi", 'is_correct' => false],
                        ],
                        'explanation' => "Dans l'ordre habituel des jours de la semaine, mardi vient après lundi.",
                    ],
                    [
                        'question' => "Votre cours commence à 9 h. Quelle phrase l'indique correctement ?",
                        'choices' => [
                            ['choice_text' => "Le cours commence à neuf heures.", 'is_correct' => true],
                            ['choice_text' => "Le cours commence de neuf heures.", 'is_correct' => false],
                            ['choice_text' => "Le cours commence en neuf heures.", 'is_correct' => false],
                            ['choice_text' => "Le cours commence pour neuf heures seulement.", 'is_correct' => false],
                        ],
                        'explanation' => "Pour indiquer l'heure précise à laquelle un événement commence, on emploie la préposition « à » : « à neuf heures ».",
                    ],
                    [
                        'question' => "Quel énoncé correspond à 18 h 30 ?",
                        'choices' => [
                            ['choice_text' => "Il est six heures et demie du soir.", 'is_correct' => true],
                            ['choice_text' => "Il est six heures du matin.", 'is_correct' => false],
                            ['choice_text' => "Il est huit heures et demie du soir.", 'is_correct' => false],
                            ['choice_text' => "Il est dix-huit heures du matin.", 'is_correct' => false],
                        ],
                        'explanation' => "18 h 30 correspond à six heures et demie du soir dans la manière courante de parler. « Et demie » ajoute trente minutes à l'heure indiquée.",
                    ],
                    [
                        'question' => "Votre professeur parle trop vite. Quelle demande simple pouvez-vous faire ?",
                        'choices' => [
                            ['choice_text' => "Pouvez-vous répéter, s'il vous plaît ?", 'is_correct' => true],
                            ['choice_text' => "Vous répétez demain seulement ?", 'is_correct' => false],
                            ['choice_text' => "Répéter vous êtes ?", 'is_correct' => false],
                            ['choice_text' => "Je ne répète pas vous.", 'is_correct' => false],
                        ],
                        'explanation' => "« Pouvez-vous répéter, s'il vous plaît ? » est une demande simple, polie et naturelle lorsqu'on n'a pas compris ou entendu correctement.",
                    ],
                    [
                        'question' => "Quelle phrase permet de demander le nom d'une personne avec politesse ?",
                        'choices' => [
                            ['choice_text' => "Comment vous appelez-vous ?", 'is_correct' => true],
                            ['choice_text' => "Comment vous appelez ?", 'is_correct' => false],
                            ['choice_text' => "Vous appeler comment êtes ?", 'is_correct' => false],
                            ['choice_text' => "Quel vous nommez ?", 'is_correct' => false],
                        ],
                        'explanation' => "« Comment vous appelez-vous ? » est une formulation polie et correcte pour demander le nom d'une personne. Le pronom « vous » convient dans un contexte formel ou avec une personne que l'on ne tutoie pas.",
                    ],
                    [
                        'question' => "Quel jour correspond au lendemain de vendredi ?",
                        'choices' => [
                            ['choice_text' => "Samedi", 'is_correct' => true],
                            ['choice_text' => "Jeudi", 'is_correct' => false],
                            ['choice_text' => "Dimanche", 'is_correct' => false],
                            ['choice_text' => "Lundi", 'is_correct' => false],
                        ],
                        'explanation' => "L'ordre est vendredi, samedi, dimanche. Le lendemain de vendredi est donc samedi.",
                    ],
                    [
                        'question' => "Vous ne connaissez pas l'adresse d'une salle. Quelle question convient pour demander où elle se trouve ?",
                        'choices' => [
                            ['choice_text' => "Où est la salle B12 ?", 'is_correct' => true],
                            ['choice_text' => "Quand est la salle B12 ?", 'is_correct' => false],
                            ['choice_text' => "Pourquoi est la salle B12 ?", 'is_correct' => false],
                            ['choice_text' => "Combien est la salle B12 ?", 'is_correct' => false],
                        ],
                        'explanation' => "« Où » sert à demander un lieu. La phrase « Où est la salle B12 ? » demande donc correctement son emplacement.",
                    ],
                    [
                        'question' => "Une personne vous dit : « Enchantée de faire votre connaissance. » Quelle réponse est naturelle ?",
                        'choices' => [
                            ['choice_text' => "Enchanté également.", 'is_correct' => true],
                            ['choice_text' => "Jeudi également.", 'is_correct' => false],
                            ['choice_text' => "Pardon également demain.", 'is_correct' => false],
                            ['choice_text' => "À neuf heures également.", 'is_correct' => false],
                        ],
                        'explanation' => "« Enchanté également » permet de répondre à une formule de présentation et d'exprimer la même satisfaction. Le mot « également » signifie ici « moi aussi ».",
                    ],
                    [
                        'question' => "Vous souhaitez savoir si une bibliothèque est ouverte. Quelle question est la plus directe ?",
                        'choices' => [
                            ['choice_text' => "La bibliothèque est-elle ouverte ?", 'is_correct' => true],
                            ['choice_text' => "La bibliothèque ouvre où ?", 'is_correct' => false],
                            ['choice_text' => "La bibliothèque est combien ?", 'is_correct' => false],
                            ['choice_text' => "La bibliothèque quand ouverte ?", 'is_correct' => false],
                        ],
                        'explanation' => "La structure « Est-elle ouverte ? » permet de poser une question fermée sur l'état ou la situation d'un lieu. Ici, on demande simplement si la bibliothèque est ouverte ou non.",
                    ],
                    [
                        'question' => "Vous avez rendez-vous à 14 h et vous voulez confirmer l'heure. Quelle phrase est naturelle ?",
                        'choices' => [
                            ['choice_text' => "Nous nous retrouvons à quatorze heures, c'est bien cela ?", 'is_correct' => true],
                            ['choice_text' => "Nous nous retrouvons quatorze heures par-dessus ?", 'is_correct' => false],
                            ['choice_text' => "Nous retrouvons à quatorze heures nous cela ?", 'is_correct' => false],
                            ['choice_text' => "Nous nous retrouvons de quatorze heures, comment ?", 'is_correct' => false],
                        ],
                        'explanation' => "La phrase confirme l'heure de façon claire et naturelle. « C'est bien cela ? » sert à vérifier une information déjà donnée ou comprise.",
                    ],
                ],
            ],
            [
                'title' => "Le vocabulaire essentiel de la vie quotidienne",
                'description' => "Repérez le sens de mots et d'expressions très fréquents dans des situations liées à la maison, aux études, aux déplacements et aux achats.",
                'duration' => 25,
                'passing_score' => 55,
                'questions' => [
                    [
                        'question' => "Dans une maison, où prépare-t-on généralement le repas ?",
                        'choices' => [
                            ['choice_text' => "Dans la cuisine.", 'is_correct' => true],
                            ['choice_text' => "Dans la salle de bains.", 'is_correct' => false],
                            ['choice_text' => "Dans l'entrée.", 'is_correct' => false],
                            ['choice_text' => "Dans le couloir.", 'is_correct' => false],
                        ],
                        'explanation' => "La cuisine est la pièce de la maison où l'on prépare normalement les repas. Les autres pièces ont d'autres fonctions principales.",
                    ],
                    [
                        'question' => "Une personne achète du pain chez le boulanger. Quel objet peut-elle demander pour emporter ses achats ?",
                        'choices' => [
                            ['choice_text' => "Un sac.", 'is_correct' => true],
                            ['choice_text' => "Un tableau.", 'is_correct' => false],
                            ['choice_text' => "Une lampe.", 'is_correct' => false],
                            ['choice_text' => "Une fenêtre.", 'is_correct' => false],
                        ],
                        'explanation' => "Un sac sert à transporter des objets ou des achats. Dans une boulangerie, il peut notamment contenir le pain acheté.",
                    ],
                    [
                        'question' => "Dans le contexte scolaire, quel mot désigne la personne qui enseigne ?",
                        'choices' => [
                            ['choice_text' => "Le professeur.", 'is_correct' => true],
                            ['choice_text' => "Le voisin.", 'is_correct' => false],
                            ['choice_text' => "Le client.", 'is_correct' => false],
                            ['choice_text' => "Le passager.", 'is_correct' => false],
                        ],
                        'explanation' => "Le professeur enseigne aux élèves ou aux étudiants. « Client » désigne une personne qui achète un produit ou un service, tandis que « passager » concerne un déplacement.",
                    ],
                    [
                        'question' => "Vous êtes dans un magasin et vous voulez connaître le prix d'un vêtement. Que pouvez-vous demander ?",
                        'choices' => [
                            ['choice_text' => "Combien coûte cette veste ?", 'is_correct' => true],
                            ['choice_text' => "Qui coûte cette veste ?", 'is_correct' => false],
                            ['choice_text' => "Quand coûte cette veste ?", 'is_correct' => false],
                            ['choice_text' => "Où coûte cette veste ?", 'is_correct' => false],
                        ],
                        'explanation' => "« Combien coûte... ? » sert à demander le prix. Le verbe « coûter » se construit ici avec le sujet « cette veste ».",
                    ],
                    [
                        'question' => "Quel mot désigne un moyen de transport qui circule sur des rails dans une ville ?",
                        'choices' => [
                            ['choice_text' => "Le tramway.", 'is_correct' => true],
                            ['choice_text' => "Le bateau.", 'is_correct' => false],
                            ['choice_text' => "Le vélo.", 'is_correct' => false],
                            ['choice_text' => "La valise.", 'is_correct' => false],
                        ],
                        'explanation' => "Le tramway est un moyen de transport urbain qui circule sur des rails. Les autres propositions ne correspondent pas à cette définition.",
                    ],
                    [
                        'question' => "Quel mot complète naturellement : « Je prends le ___ pour aller à l'université. »",
                        'choices' => [
                            ['choice_text' => "bus", 'is_correct' => true],
                            ['choice_text' => "cahier", 'is_correct' => false],
                            ['choice_text' => "stylo", 'is_correct' => false],
                            ['choice_text' => "table", 'is_correct' => false],
                        ],
                        'explanation' => "Le verbe « prendre » est couramment utilisé avec un moyen de transport : « prendre le bus ». Les autres mots ne correspondent pas au contexte du déplacement.",
                    ],
                    [
                        'question' => "Vous avez faim. Quel énoncé exprime directement ce besoin ?",
                        'choices' => [
                            ['choice_text' => "J'ai faim.", 'is_correct' => true],
                            ['choice_text' => "Je suis faim.", 'is_correct' => false],
                            ['choice_text' => "Je fais faim.", 'is_correct' => false],
                            ['choice_text' => "Je vais faim.", 'is_correct' => false],
                        ],
                        'explanation' => "En français, l'expression correcte est « avoir faim ». On dit donc « j'ai faim », avec le verbe « avoir ».",
                    ],
                    [
                        'question' => "Quel adjectif convient pour une journée sans nuages et avec beaucoup de soleil ?",
                        'choices' => [
                            ['choice_text' => "Ensoleillée.", 'is_correct' => true],
                            ['choice_text' => "Bruyante.", 'is_correct' => false],
                            ['choice_text' => "Rapide.", 'is_correct' => false],
                            ['choice_text' => "Lourde.", 'is_correct' => false],
                        ],
                        'explanation' => "« Ensoleillée » décrit une journée marquée par la présence du soleil. Les autres adjectifs ne décrivent pas directement la météo indiquée.",
                    ],
                    [
                        'question' => "Une personne est « en retard ». Qu'est-ce que cela signifie ?",
                        'choices' => [
                            ['choice_text' => "Elle arrive après l'heure prévue.", 'is_correct' => true],
                            ['choice_text' => "Elle arrive toujours très tôt.", 'is_correct' => false],
                            ['choice_text' => "Elle ne connaît personne.", 'is_correct' => false],
                            ['choice_text' => "Elle reste obligatoirement à la maison.", 'is_correct' => false],
                        ],
                        'explanation' => "Être en retard signifie arriver après l'heure prévue pour un rendez-vous, un cours ou une activité.",
                    ],
                    [
                        'question' => "Dans « une petite chambre », quel mot indique la taille de la chambre ?",
                        'choices' => [
                            ['choice_text' => "Petite.", 'is_correct' => true],
                            ['choice_text' => "Une.", 'is_correct' => false],
                            ['choice_text' => "Chambre.", 'is_correct' => false],
                            ['choice_text' => "Dans.", 'is_correct' => false],
                        ],
                        'explanation' => "« Petite » est l'adjectif qui donne une information sur la taille de la chambre. « Une » est un déterminant et « chambre » est le nom.",
                    ],
                    [
                        'question' => "Vous cherchez un endroit pour lire et emprunter des livres. Où allez-vous ?",
                        'choices' => [
                            ['choice_text' => "À la bibliothèque.", 'is_correct' => true],
                            ['choice_text' => "À la gare.", 'is_correct' => false],
                            ['choice_text' => "À la boulangerie.", 'is_correct' => false],
                            ['choice_text' => "À la station-service.", 'is_correct' => false],
                        ],
                        'explanation' => "La bibliothèque est le lieu consacré notamment à la consultation et à l'emprunt de livres. Les autres lieux répondent à d'autres besoins.",
                    ],
                    [
                        'question' => "Quel mot désigne la personne qui achète un produit dans un magasin ?",
                        'choices' => [
                            ['choice_text' => "Le client ou la cliente.", 'is_correct' => true],
                            ['choice_text' => "Le professeur ou la professeure.", 'is_correct' => false],
                            ['choice_text' => "Le conducteur ou la conductrice.", 'is_correct' => false],
                            ['choice_text' => "Le voisin ou la voisine.", 'is_correct' => false],
                        ],
                        'explanation' => "Le client ou la cliente est la personne qui achète un produit ou utilise un service. Le mot « client » ne désigne pas une profession particulière.",
                    ],
                    [
                        'question' => "Un message dit : « La réunion commence à 15 h dans la salle 4. » Où faut-il aller pour assister à la réunion ?",
                        'choices' => [
                            ['choice_text' => "Dans la salle 4.", 'is_correct' => true],
                            ['choice_text' => "Dans la salle 15.", 'is_correct' => false],
                            ['choice_text' => "À la salle du lendemain.", 'is_correct' => false],
                            ['choice_text' => "À 4 h sans entrer dans une salle.", 'is_correct' => false],
                        ],
                        'explanation' => "Le message donne deux informations différentes : 15 h indique l'heure et « salle 4 » indique le lieu. Pour assister à la réunion, il faut donc se rendre dans la salle 4.",
                    ],
                    [
                        'question' => "Vous avez terminé un repas et vous êtes satisfait. Quelle phrase convient naturellement ?",
                        'choices' => [
                            ['choice_text' => "Le repas était très bon.", 'is_correct' => true],
                            ['choice_text' => "Le repas était très loin.", 'is_correct' => false],
                            ['choice_text' => "Le repas était très vite.", 'is_correct' => false],
                            ['choice_text' => "Le repas était très demain.", 'is_correct' => false],
                        ],
                        'explanation' => "« Bon » peut qualifier un repas pour dire qu'il est de bonne qualité ou agréable au goût. Les autres mots ne conviennent pas pour évaluer le repas.",
                    ],
                ],
            ],
            [
                'title' => "Construire des phrases simples et correctes",
                'description' => "Mettez en ordre les éléments essentiels de la phrase et repérez les formulations adaptées aux premières productions en français.",
                'duration' => 20,
                'passing_score' => 60,
                'questions' => [
                    [
                        'question' => "Quelle phrase présente l'ordre le plus simple et le plus naturel ?",
                        'choices' => [
                            ['choice_text' => "Paul regarde un film.", 'is_correct' => true],
                            ['choice_text' => "Regarde Paul un film.", 'is_correct' => false],
                            ['choice_text' => "Un film Paul regarde.", 'is_correct' => false],
                            ['choice_text' => "Paul un film regarde est.", 'is_correct' => false],
                        ],
                        'explanation' => "La phrase suit la structure fréquente sujet + verbe + complément : « Paul » + « regarde » + « un film ». Cette organisation convient à une phrase déclarative simple.",
                    ],
                    [
                        'question' => "Complétez naturellement : « Nous ___ français en classe. »",
                        'choices' => [
                            ['choice_text' => "étudions", 'is_correct' => true],
                            ['choice_text' => "étudie", 'is_correct' => false],
                            ['choice_text' => "étudier", 'is_correct' => false],
                            ['choice_text' => "étudies", 'is_correct' => false],
                        ],
                        'explanation' => "Avec le sujet « nous », le verbe « étudier » se conjugue au présent à la première personne du pluriel : « nous étudions ».",
                    ],
                    [
                        'question' => "Quelle phrase est correcte pour parler de plusieurs livres ?",
                        'choices' => [
                            ['choice_text' => "J'aime ces livres.", 'is_correct' => true],
                            ['choice_text' => "J'aime ce livres.", 'is_correct' => false],
                            ['choice_text' => "J'aime ces livre.", 'is_correct' => false],
                            ['choice_text' => "J'aime cet livres.", 'is_correct' => false],
                        ],
                        'explanation' => "Le nom « livres » est au pluriel, donc le déterminant démonstratif doit être « ces ». Le nom prend également la marque du pluriel : « livres ».",
                    ],
                    [
                        'question' => "Un étudiant veut parler de sa sœur. Quelle phrase convient ?",
                        'choices' => [
                            ['choice_text' => "Ma sœur habite à Rabat.", 'is_correct' => true],
                            ['choice_text' => "Mon sœur habite à Rabat.", 'is_correct' => false],
                            ['choice_text' => "Mes sœur habite à Rabat.", 'is_correct' => false],
                            ['choice_text' => "Ma sœurs habite à Rabat.", 'is_correct' => false],
                        ],
                        'explanation' => "« Sœur » est un nom féminin singulier. Le possessif correspondant est donc « ma », et le nom reste au singulier : « ma sœur ».",
                    ],
                    [
                        'question' => "Quelle phrase exprime correctement une action habituelle au présent ?",
                        'choices' => [
                            ['choice_text' => "Je prends le bus tous les matins.", 'is_correct' => true],
                            ['choice_text' => "Je prendre le bus tous les matins.", 'is_correct' => false],
                            ['choice_text' => "Je prends le bus hier.", 'is_correct' => false],
                            ['choice_text' => "Je pris le bus tous les matins.", 'is_correct' => false],
                        ],
                        'explanation' => "Le présent convient pour une habitude exprimée ici par « tous les matins ». Le verbe « prendre » donne « je prends » à la première personne du singulier.",
                    ],
                    [
                        'question' => "Quelle phrase contient une formulation correcte de la possession ?",
                        'choices' => [
                            ['choice_text' => "C'est mon cahier.", 'is_correct' => true],
                            ['choice_text' => "C'est ma cahier.", 'is_correct' => false],
                            ['choice_text' => "C'est mes cahier.", 'is_correct' => false],
                            ['choice_text' => "C'est moi cahier.", 'is_correct' => false],
                        ],
                        'explanation' => "« Cahier » est masculin singulier, donc le déterminant possessif correspondant à « je » est « mon ». La structure « c'est mon cahier » est correcte.",
                    ],
                    [
                        'question' => "Vous voulez dire que votre ami n'est pas à la maison. Quelle phrase est correcte ?",
                        'choices' => [
                            ['choice_text' => "Mon ami n'est pas à la maison.", 'is_correct' => true],
                            ['choice_text' => "Mon ami ne est pas à la maison.", 'is_correct' => false],
                            ['choice_text' => "Mon ami n'est pas de maison.", 'is_correct' => false],
                            ['choice_text' => "Mon ami pas n'est maison.", 'is_correct' => false],
                        ],
                        'explanation' => "À l'écrit standard, la négation se construit avec « ne ... pas ». Devant « est », « ne » devient « n' », d'où « n'est pas ».",
                    ],
                    [
                        'question' => "Quelle question est correctement formée avec « qui » ?",
                        'choices' => [
                            ['choice_text' => "Qui vient ce soir ?", 'is_correct' => true],
                            ['choice_text' => "Qui ce soir vient-il est ?", 'is_correct' => false],
                            ['choice_text' => "Qui venir ce soir ?", 'is_correct' => false],
                            ['choice_text' => "Qui est ce soir vient ?", 'is_correct' => false],
                        ],
                        'explanation' => "« Qui vient ce soir ? » est une question simple et naturelle. Ici, « qui » joue le rôle de sujet du verbe « vient ».",
                    ],
                    [
                        'question' => "Dans la phrase « Nous sommes étudiants », que désigne « nous » ?",
                        'choices' => [
                            ['choice_text' => "Le groupe qui parle.", 'is_correct' => true],
                            ['choice_text' => "La personne à qui l'on parle.", 'is_correct' => false],
                            ['choice_text' => "Une seule personne absente.", 'is_correct' => false],
                            ['choice_text' => "Le lieu où l'on étudie.", 'is_correct' => false],
                        ],
                        'explanation' => "Le pronom « nous » désigne le locuteur avec une ou plusieurs autres personnes. Il s'oppose ici à « vous », qui désignerait la ou les personnes auxquelles on parle.",
                    ],
                    [
                        'question' => "Quelle reformulation garde le même sens que « Le cours est intéressant » ?",
                        'choices' => [
                            ['choice_text' => "Le cours est vraiment intéressant.", 'is_correct' => true],
                            ['choice_text' => "Le cours n'est pas intéressant.", 'is_correct' => false],
                            ['choice_text' => "Le cours est difficile à trouver.", 'is_correct' => false],
                            ['choice_text' => "Le cours commence demain.", 'is_correct' => false],
                        ],
                        'explanation' => "L'ajout de « vraiment » renforce l'idée déjà exprimée sans changer le sens principal. Les autres propositions modifient complètement l'information.",
                    ],
                    [
                        'question' => "Un étudiant écrit : « Elle habite à Paris et il travaille à Lyon. » Quelle observation est correcte ?",
                        'choices' => [
                            ['choice_text' => "La phrase contient deux propositions reliées par « et ».", 'is_correct' => true],
                            ['choice_text' => "La phrase ne contient aucun verbe.", 'is_correct' => false],
                            ['choice_text' => "Le mot « et » sert à poser une question.", 'is_correct' => false],
                            ['choice_text' => "Les deux idées sont exprimées au futur.", 'is_correct' => false],
                        ],
                        'explanation' => "« Elle habite à Paris » et « il travaille à Lyon » sont deux propositions avec leur propre sujet et leur propre verbe. La conjonction « et » les relie.",
                    ],
                ],
            ],
            [
                'title' => "Comprendre les situations courantes",
                'description' => "Interprétez de courts échanges du quotidien et choisissez la réponse ou l'action qui correspond le mieux au contexte.",
                'duration' => 25,
                'passing_score' => 60,
                'questions' => [
                    [
                        'question' => "— Bonjour, je peux vous aider ?\n— Oui, je cherche la salle 12.\nQue cherche la personne ?",
                        'choices' => [
                            ['choice_text' => "Une salle.", 'is_correct' => true],
                            ['choice_text' => "Un restaurant.", 'is_correct' => false],
                            ['choice_text' => "Une voiture.", 'is_correct' => false],
                            ['choice_text' => "Un livre.", 'is_correct' => false],
                        ],
                        'explanation' => "La personne dit explicitement : « je cherche la salle 12 ». Elle cherche donc un lieu précis dans le bâtiment.",
                    ],
                    [
                        'question' => "— Tu viens au cinéma ce soir ?\n— Non, je travaille.\nPourquoi la personne ne vient-elle pas ?",
                        'choices' => [
                            ['choice_text' => "Parce qu'elle travaille.", 'is_correct' => true],
                            ['choice_text' => "Parce qu'elle est au cinéma.", 'is_correct' => false],
                            ['choice_text' => "Parce qu'elle dort déjà.", 'is_correct' => false],
                            ['choice_text' => "Parce qu'elle voyage demain.", 'is_correct' => false],
                        ],
                        'explanation' => "La deuxième personne répond « je travaille », ce qui donne directement la raison pour laquelle elle ne vient pas au cinéma.",
                    ],
                    [
                        'question' => "Un panneau indique : « Entrée : 10 €. » Que faut-il comprendre ?",
                        'choices' => [
                            ['choice_text' => "Il faut payer 10 € pour entrer.", 'is_correct' => true],
                            ['choice_text' => "On reçoit 10 € à l'entrée.", 'is_correct' => false],
                            ['choice_text' => "L'entrée est gratuite.", 'is_correct' => false],
                            ['choice_text' => "Le lieu ferme à 10 h.", 'is_correct' => false],
                        ],
                        'explanation' => "Dans ce contexte, « Entrée : 10 € » indique le prix à payer pour accéder au lieu. Le nombre 10 est ici un prix, pas une heure.",
                    ],
                    [
                        'question' => "— À quelle heure commence le cours ?\n— À 8 h 30.\nQuand commence le cours ?",
                        'choices' => [
                            ['choice_text' => "À huit heures et demie.", 'is_correct' => true],
                            ['choice_text' => "À huit heures.", 'is_correct' => false],
                            ['choice_text' => "À neuf heures et demie.", 'is_correct' => false],
                            ['choice_text' => "À dix-huit heures et demie.", 'is_correct' => false],
                        ],
                        'explanation' => "8 h 30 se dit « huit heures et demie ». La conversation donne explicitement cette heure de début.",
                    ],
                    [
                        'question' => "— Tu veux un café ?\n— Non merci, je voudrais un thé.\nQue préfère la personne ?",
                        'choices' => [
                            ['choice_text' => "Un thé.", 'is_correct' => true],
                            ['choice_text' => "Un café.", 'is_correct' => false],
                            ['choice_text' => "Un jus d'orange.", 'is_correct' => false],
                            ['choice_text' => "De l'eau uniquement.", 'is_correct' => false],
                        ],
                        'explanation' => "La personne refuse le café et précise : « je voudrais un thé ». Le thé est donc la boisson qu'elle choisit.",
                    ],
                    [
                        'question' => "— Pardon, où est la gare ?\n— Elle est près de la mairie.\nQue donne la deuxième personne ?",
                        'choices' => [
                            ['choice_text' => "Une indication de lieu.", 'is_correct' => true],
                            ['choice_text' => "Le prix du billet.", 'is_correct' => false],
                            ['choice_text' => "L'heure du train.", 'is_correct' => false],
                            ['choice_text' => "Le nom du conducteur.", 'is_correct' => false],
                        ],
                        'explanation' => "« Près de la mairie » indique où se trouve la gare. La réponse ne donne ni prix, ni horaire, ni information sur un conducteur.",
                    ],
                    [
                        'question' => "Un message dit : « Réunion déplacée à mardi. » Que signifie « déplacée » dans ce contexte ?",
                        'choices' => [
                            ['choice_text' => "La réunion est prévue un autre jour que celui initialement annoncé.", 'is_correct' => true],
                            ['choice_text' => "La réunion change de salle sans changer de date.", 'is_correct' => false],
                            ['choice_text' => "La réunion est devenue plus courte.", 'is_correct' => false],
                            ['choice_text' => "La réunion est obligatoirement annulée.", 'is_correct' => false],
                        ],
                        'explanation' => "Ici, « déplacée à mardi » signifie que la date de la réunion a été changée et qu'elle aura désormais lieu mardi. Le mot ne signifie pas automatiquement qu'elle est annulée.",
                    ],
                    [
                        'question' => "— Tu as le livre de français ?\n— Oui, il est dans mon sac.\nOù se trouve le livre ?",
                        'choices' => [
                            ['choice_text' => "Dans le sac de la personne.", 'is_correct' => true],
                            ['choice_text' => "Sur le bureau du professeur.", 'is_correct' => false],
                            ['choice_text' => "À la bibliothèque uniquement.", 'is_correct' => false],
                            ['choice_text' => "Dans la voiture de son ami.", 'is_correct' => false],
                        ],
                        'explanation' => "La réponse « il est dans mon sac » donne directement l'emplacement du livre. « Mon sac » appartient à la personne qui parle.",
                    ],
                    [
                        'question' => "Un étudiant arrive devant une porte avec le message « Salle fermée aujourd'hui ». Que doit-il comprendre ?",
                        'choices' => [
                            ['choice_text' => "Il ne peut pas utiliser cette salle aujourd'hui.", 'is_correct' => true],
                            ['choice_text' => "La salle ouvre plus tôt aujourd'hui.", 'is_correct' => false],
                            ['choice_text' => "La salle contient aujourd'hui davantage de places.", 'is_correct' => false],
                            ['choice_text' => "La salle est réservée uniquement aux visiteurs étrangers.", 'is_correct' => false],
                        ],
                        'explanation' => "« Salle fermée aujourd'hui » signifie que l'accès à cette salle n'est pas disponible ce jour-là, sauf indication contraire.",
                    ],
                    [
                        'question' => "— Excusez-moi, est-ce que cette place est libre ?\n— Non, elle est prise.\nQue signifie « elle est prise » ici ?",
                        'choices' => [
                            ['choice_text' => "Quelqu'un occupe déjà la place ou l'a réservée.", 'is_correct' => true],
                            ['choice_text' => "La chaise est cassée.", 'is_correct' => false],
                            ['choice_text' => "La place est en promotion.", 'is_correct' => false],
                            ['choice_text' => "La place se trouve à l'extérieur.", 'is_correct' => false],
                        ],
                        'explanation' => "Dans ce contexte, « une place est prise » signifie qu'elle n'est pas disponible parce qu'une autre personne l'occupe ou l'a réservée.",
                    ],
                    [
                        'question' => "Une affiche annonce : « Bibliothèque ouverte du lundi au vendredi, de 9 h à 18 h. » Une personne vient samedi à 10 h. Quelle conclusion est la plus logique ?",
                        'choices' => [
                            ['choice_text' => "La bibliothèque n'est pas annoncée comme ouverte le samedi.", 'is_correct' => true],
                            ['choice_text' => "La bibliothèque ouvre seulement à 18 h le samedi.", 'is_correct' => false],
                            ['choice_text' => "La bibliothèque est forcément ouverte 24 heures sur 24.", 'is_correct' => false],
                            ['choice_text' => "La bibliothèque ouvre à 9 h uniquement le dimanche.", 'is_correct' => false],
                        ],
                        'explanation' => "L'affiche précise « du lundi au vendredi ». Le samedi n'est donc pas inclus dans les horaires annoncés. On ne peut pas en déduire un horaire d'ouverture ce jour-là.",
                    ],
                    [
                        'question' => "— Vous désirez autre chose ?\n— Non, merci, c'est tout.\nQue veut dire « c'est tout » dans cette situation ?",
                        'choices' => [
                            ['choice_text' => "La personne ne souhaite rien ajouter à sa demande.", 'is_correct' => true],
                            ['choice_text' => "La personne veut recommencer toute la conversation.", 'is_correct' => false],
                            ['choice_text' => "La personne ne comprend pas le vendeur.", 'is_correct' => false],
                            ['choice_text' => "La personne demande un autre magasin.", 'is_correct' => false],
                        ],
                        'explanation' => "Dans un magasin ou un service, « c'est tout » signifie que la personne a terminé sa demande et ne souhaite rien de plus.",
                    ],
                    [
                        'question' => "Un professeur écrit dans un message : « N'oubliez pas votre manuel demain. » Quelle action est attendue des étudiants ?",
                        'choices' => [
                            ['choice_text' => "Apporter leur manuel le lendemain.", 'is_correct' => true],
                            ['choice_text' => "Acheter un ordinateur immédiatement.", 'is_correct' => false],
                            ['choice_text' => "Annuler le cours du lendemain.", 'is_correct' => false],
                            ['choice_text' => "Envoyer uniquement un message le soir.", 'is_correct' => false],
                        ],
                        'explanation' => "La phrase demande aux étudiants de ne pas oublier le manuel pour le lendemain. L'action attendue est donc de l'apporter au cours.",
                    ],
                    [
                        'question' => "— Désolé, je suis en retard.\n— Ce n'est pas grave.\nQue veut dire « Ce n'est pas grave » ?",
                        'choices' => [
                            ['choice_text' => "La personne considère que le retard n'est pas un problème important.", 'is_correct' => true],
                            ['choice_text' => "La personne annonce une urgence médicale.", 'is_correct' => false],
                            ['choice_text' => "La personne demande de partir immédiatement.", 'is_correct' => false],
                            ['choice_text' => "La personne dit que le rendez-vous est annulé.", 'is_correct' => false],
                        ],
                        'explanation' => "« Ce n'est pas grave » est une façon de rassurer quelqu'un et de dire que la situation n'est pas considérée comme importante ou problématique.",
                    ],
                ],
            ],
            [
                'title' => "Révision pratique des bases du français",
                'description' => "Mobilisez les notions essentielles dans des situations variées : présentation, grammaire simple, vocabulaire, compréhension et communication courante.",
                'duration' => 30,
                'passing_score' => 60,
                'questions' => [
                    [
                        'question' => "Vous rencontrez quelqu'un pour la première fois dans un contexte formel. Quelle formule d'ouverture convient le mieux ?",
                        'choices' => [
                            ['choice_text' => "Bonjour, enchanté de faire votre connaissance.", 'is_correct' => true],
                            ['choice_text' => "Salut, rends-moi ça.", 'is_correct' => false],
                            ['choice_text' => "Bonne nuit, comment tu t'appelles demain ?", 'is_correct' => false],
                            ['choice_text' => "À plus tard, voici mon prénom pour la première fois.", 'is_correct' => false],
                        ],
                        'explanation' => "La formulation est adaptée à une première rencontre et à un contexte formel. « Bonjour » et « faire votre connaissance » conviennent à ce registre.",
                    ],
                    [
                        'question' => "Quelle phrase est correcte ?",
                        'choices' => [
                            ['choice_text' => "Nous habitons au centre-ville.", 'is_correct' => true],
                            ['choice_text' => "Nous habite au centre-ville.", 'is_correct' => false],
                            ['choice_text' => "Nous habitons à centre-ville.", 'is_correct' => false],
                            ['choice_text' => "Nous habiter au centre-ville.", 'is_correct' => false],
                        ],
                        'explanation' => "Avec « nous », le verbe « habiter » prend la forme « habitons ». L'expression « au centre-ville » est la forme contractée correcte de « à le centre-ville ».",
                    ],
                    [
                        'question' => "Quel énoncé correspond le mieux à la situation suivante : vous avez compris une explication ?",
                        'choices' => [
                            ['choice_text' => "Oui, j'ai compris.", 'is_correct' => true],
                            ['choice_text' => "Non, je suis demain.", 'is_correct' => false],
                            ['choice_text' => "Oui, je comprendre hier.", 'is_correct' => false],
                            ['choice_text' => "Compris-je pas maintenant ?", 'is_correct' => false],
                        ],
                        'explanation' => "« J'ai compris » indique naturellement que l'explication a été comprise. Le passé composé est approprié pour signaler le résultat d'une action récente.",
                    ],
                    [
                        'question' => "Choisissez la phrase qui indique correctement une possession liée à plusieurs objets :",
                        'choices' => [
                            ['choice_text' => "Ce sont mes livres.", 'is_correct' => true],
                            ['choice_text' => "Ce sont mon livres.", 'is_correct' => false],
                            ['choice_text' => "Ce sont ma livres.", 'is_correct' => false],
                            ['choice_text' => "Ce sont moi livres.", 'is_correct' => false],
                        ],
                        'explanation' => "« Livres » est masculin pluriel. Le possessif correspondant à « je » est donc « mes » : « mes livres ».",
                    ],
                    [
                        'question' => "Un ami vous dit : « À tout à l'heure ! » Que veut-il probablement dire ?",
                        'choices' => [
                            ['choice_text' => "Il pense vous revoir plus tard dans la même journée.", 'is_correct' => true],
                            ['choice_text' => "Il ne veut plus jamais vous revoir.", 'is_correct' => false],
                            ['choice_text' => "Il parle forcément de la semaine prochaine.", 'is_correct' => false],
                            ['choice_text' => "Il vous demande de venir hier.", 'is_correct' => false],
                        ],
                        'explanation' => "« À tout à l'heure » signifie généralement que l'on prévoit de se revoir plus tard le même jour, dans un laps de temps relativement court.",
                    ],
                    [
                        'question' => "Quelle phrase convient pour demander poliment de parler moins vite ?",
                        'choices' => [
                            ['choice_text' => "Pourriez-vous parler un peu moins vite, s'il vous plaît ?", 'is_correct' => true],
                            ['choice_text' => "Parlez moins vite maintenant toi.", 'is_correct' => false],
                            ['choice_text' => "Vous parler pas vite êtes.", 'is_correct' => false],
                            ['choice_text' => "Moins vite parle demain, merci.", 'is_correct' => false],
                        ],
                        'explanation' => "« Pourriez-vous... ? » permet de formuler une demande polie. L'expression « un peu moins vite » précise clairement ce que l'on souhaite.",
                    ],
                    [
                        'question' => "Quelle phrase est cohérente si une personne habite à Casablanca mais travaille à Rabat ?",
                        'choices' => [
                            ['choice_text' => "Elle habite à Casablanca et elle travaille à Rabat.", 'is_correct' => true],
                            ['choice_text' => "Elle habite Casablanca de et travaille Rabat à.", 'is_correct' => false],
                            ['choice_text' => "Elle habite à Casablanca mais elle travaille dans hier.", 'is_correct' => false],
                            ['choice_text' => "Elle habiter à Casablanca et travailler Rabat.", 'is_correct' => false],
                        ],
                        'explanation' => "La phrase correcte emploie « habite » et « travaille » au présent, ainsi que « à » devant les deux villes. « Et » relie les deux informations.",
                    ],
                    [
                        'question' => "Dans la phrase « Je n'ai pas de voiture », que veut exprimer la négation ?",
                        'choices' => [
                            ['choice_text' => "La personne indique qu'elle ne possède pas de voiture.", 'is_correct' => true],
                            ['choice_text' => "La personne indique qu'elle possède plusieurs voitures.", 'is_correct' => false],
                            ['choice_text' => "La personne annonce qu'elle achète une voiture aujourd'hui.", 'is_correct' => false],
                            ['choice_text' => "La personne demande où se trouve sa voiture.", 'is_correct' => false],
                        ],
                        'explanation' => "« Ne ... pas » forme la négation et « avoir de voiture » indique ici l'absence de possession. La phrase signifie donc que la personne ne possède pas de voiture.",
                    ],
                    [
                        'question' => "Vous êtes au restaurant et vous voulez demander de l'eau. Quelle formulation est la plus naturelle ?",
                        'choices' => [
                            ['choice_text' => "Pourriez-vous m'apporter de l'eau, s'il vous plaît ?", 'is_correct' => true],
                            ['choice_text' => "Apportez moi l'eau demain.", 'is_correct' => false],
                            ['choice_text' => "Je veux eau apporte vous.", 'is_correct' => false],
                            ['choice_text' => "L'eau est où apporter ?", 'is_correct' => false],
                        ],
                        'explanation' => "La tournure « Pourriez-vous m'apporter... ? » est une demande polie. Le groupe « de l'eau » est également la forme naturelle pour parler d'une quantité non précisée.",
                    ],
                    [
                        'question' => "Quelle réponse correspond à la question « Pourquoi apprends-tu le français ? » si la personne parle de ses études ?",
                        'choices' => [
                            ['choice_text' => "Parce que j'en ai besoin pour mes études.", 'is_correct' => true],
                            ['choice_text' => "À neuf heures dans mon sac.", 'is_correct' => false],
                            ['choice_text' => "Avec une chaise et deux livres demain.", 'is_correct' => false],
                            ['choice_text' => "Je m'appelle étudiant.", 'is_correct' => false],
                        ],
                        'explanation' => "La question « Pourquoi ? » demande une cause ou une raison. « Parce que j'en ai besoin pour mes études » répond directement à cette demande.",
                    ],
                    [
                        'question' => "Un étudiant écrit : « J'aime beaucoup ce cours parce qu'il est clair. » Quelle information donne « parce qu'il est clair » ?",
                        'choices' => [
                            ['choice_text' => "La raison pour laquelle l'étudiant aime le cours.", 'is_correct' => true],
                            ['choice_text' => "L'heure à laquelle le cours commence.", 'is_correct' => false],
                            ['choice_text' => "Le lieu où se trouve l'étudiant.", 'is_correct' => false],
                            ['choice_text' => "Le nom du professeur.", 'is_correct' => false],
                        ],
                        'explanation' => "« Parce que » introduit une cause ou une explication. Ici, le caractère « clair » du cours explique pourquoi l'étudiant l'apprécie.",
                    ],
                    [
                        'question' => "Vous êtes dans une file et vous souhaitez savoir si une personne attend également. Quelle question est la plus naturelle ?",
                        'choices' => [
                            ['choice_text' => "Vous attendez aussi ?", 'is_correct' => true],
                            ['choice_text' => "Vous attendrez où aussi hier ?", 'is_correct' => false],
                            ['choice_text' => "Attendez-vous la file demain êtes ?", 'is_correct' => false],
                            ['choice_text' => "Vous êtes attendre aussi comment ?", 'is_correct' => false],
                        ],
                        'explanation' => "Dans une conversation courante, « Vous attendez aussi ? » est une question simple et naturelle. Le mot « aussi » indique que la personne qui parle attend elle-même.",
                    ],
                    [
                        'question' => "Un message indique : « Merci de fermer la porte en sortant. » Que demande-t-on au lecteur ?",
                        'choices' => [
                            ['choice_text' => "Fermer la porte avant de partir.", 'is_correct' => true],
                            ['choice_text' => "Laisser la porte grande ouverte.", 'is_correct' => false],
                            ['choice_text' => "Peindre la porte en sortant.", 'is_correct' => false],
                            ['choice_text' => "Changer la porte de place.", 'is_correct' => false],
                        ],
                        'explanation' => "La formulation « Merci de + infinitif » sert ici à demander une action. Le lecteur doit donc fermer la porte lorsqu'il quitte le lieu.",
                    ],
                    [
                        'question' => "Quelle phrase est la plus adaptée pour terminer poliment un message à un professeur ?",
                        'choices' => [
                            ['choice_text' => "Merci pour votre aide et bonne journée.", 'is_correct' => true],
                            ['choice_text' => "Salut, à plus dans cinq minutes obligatoires.", 'is_correct' => false],
                            ['choice_text' => "Bonne nuit professeur maintenant tout de suite hier.", 'is_correct' => false],
                            ['choice_text' => "Merci toi et bye définitif.", 'is_correct' => false],
                        ],
                        'explanation' => "La formulation est polie et adaptée à une communication avec un professeur. « Votre aide » et « bonne journée » conviennent à un registre respectueux.",
                    ],
                    [
                        'question' => "Vous avez mal compris une information donnée à l'oral. Quelle réaction est la plus utile ?",
                        'choices' => [
                            ['choice_text' => "Pardon, pourriez-vous préciser ?", 'is_correct' => true],
                            ['choice_text' => "Je ne comprends pas, donc je change de sujet sans prévenir.", 'is_correct' => false],
                            ['choice_text' => "Je compris toujours demain.", 'is_correct' => false],
                            ['choice_text' => "Merci, alors que je demande une répétition.", 'is_correct' => false],
                        ],
                        'explanation' => "« Pourriez-vous préciser ? » demande à l'interlocuteur de donner davantage d'explications. C'est une stratégie simple et utile lorsqu'une information n'est pas claire.",
                    ],
                    [
                        'question' => "Un camarade vous dit : « Je suis désolé, je ne peux pas venir aujourd'hui. » Quelle réponse montre que vous acceptez la situation sans insister ?",
                        'choices' => [
                            ['choice_text' => "D'accord, pas de problème. On se verra une autre fois.", 'is_correct' => true],
                            ['choice_text' => "Non, tu dois venir immédiatement.", 'is_correct' => false],
                            ['choice_text' => "Pourquoi toi maison chaise demain ?", 'is_correct' => false],
                            ['choice_text' => "Très bien, alors tu viens quand même.", 'is_correct' => false],
                        ],
                        'explanation' => "La réponse reconnaît la situation, ne met pas de pression et propose naturellement de se revoir plus tard. Elle correspond à une réaction quotidienne courtoise.",
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
