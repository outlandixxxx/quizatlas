<?php

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
                'title' => 'Comprendre un texte du quotidien',
                'description' => 'Lire de courts textes sur des situations quotidiennes et identifier les informations essentielles.',
                'duration' => 18,
                'passing_score' => 55,
                'questions' => [
                    [
                        'question' => "Lisez le texte :\n\n« Lina se lève à sept heures chaque matin. Elle prend son petit-déjeuner avec sa famille, puis elle prend le bus pour aller à l’école. Son cours commence à huit heures. »\n\nÀ quelle heure Lina se lève-t-elle ?",
                        'choices' => [
                            ['choice_text' => 'À sept heures', 'is_correct' => true],
                            ['choice_text' => 'À huit heures', 'is_correct' => false],
                            ['choice_text' => 'À neuf heures', 'is_correct' => false],
                            ['choice_text' => 'À six heures', 'is_correct' => false],
                        ],
                        'explanation' => 'Le texte indique clairement que Lina se lève à sept heures chaque matin.',
                    ],
                    [
                        'question' => 'Selon le texte, avec qui Lina prend-elle son petit-déjeuner ?',
                        'choices' => [
                            ['choice_text' => 'Avec sa famille', 'is_correct' => true],
                            ['choice_text' => 'Avec ses professeurs', 'is_correct' => false],
                            ['choice_text' => 'Avec ses voisins', 'is_correct' => false],
                            ['choice_text' => 'Avec ses amis de classe', 'is_correct' => false],
                        ],
                        'explanation' => 'Le texte précise que Lina prend son petit-déjeuner avec sa famille.',
                    ],
                    [
                        'question' => 'Comment Lina va-t-elle à l’école ?',
                        'choices' => [
                            ['choice_text' => 'En bus', 'is_correct' => true],
                            ['choice_text' => 'À pied', 'is_correct' => false],
                            ['choice_text' => 'À vélo', 'is_correct' => false],
                            ['choice_text' => 'En voiture', 'is_correct' => false],
                        ],
                        'explanation' => 'Le texte dit qu’elle prend le bus pour aller à l’école.',
                    ],
                    [
                        'question' => 'À quelle heure commence son cours ?',
                        'choices' => [
                            ['choice_text' => 'À huit heures', 'is_correct' => true],
                            ['choice_text' => 'À sept heures', 'is_correct' => false],
                            ['choice_text' => 'À dix heures', 'is_correct' => false],
                            ['choice_text' => 'À midi', 'is_correct' => false],
                        ],
                        'explanation' => 'Le dernier détail du texte indique que son cours commence à huit heures.',
                    ],
                    [
                        'question' => 'Quelle est l’idée principale du texte ?',
                        'choices' => [
                            ['choice_text' => 'La routine matinale de Lina avant l’école', 'is_correct' => true],
                            ['choice_text' => 'Les vacances de Lina en famille', 'is_correct' => false],
                            ['choice_text' => 'Le travail du chauffeur de bus', 'is_correct' => false],
                            ['choice_text' => 'Les matières étudiées par Lina', 'is_correct' => false],
                        ],
                        'explanation' => 'Le texte présente les principales étapes de la matinée de Lina avant le début des cours.',
                    ],
                    [
                        'question' => "Lisez le texte :\n\n« Karim aime cuisiner le week-end. Samedi dernier, il a préparé une soupe de légumes pour sa famille. Sa sœur a apporté du pain et son père a préparé la table. Tout le monde a mangé ensemble. »\n\nQu’a préparé Karim ?",
                        'choices' => [
                            ['choice_text' => 'Une soupe de légumes', 'is_correct' => true],
                            ['choice_text' => 'Une salade de fruits', 'is_correct' => false],
                            ['choice_text' => 'Un gâteau au chocolat', 'is_correct' => false],
                            ['choice_text' => 'Du riz au poulet', 'is_correct' => false],
                        ],
                        'explanation' => 'Le texte précise que Karim a préparé une soupe de légumes.',
                    ],
                    [
                        'question' => 'Qui a apporté le pain ?',
                        'choices' => [
                            ['choice_text' => 'Sa sœur', 'is_correct' => true],
                            ['choice_text' => 'Son père', 'is_correct' => false],
                            ['choice_text' => 'Karim', 'is_correct' => false],
                            ['choice_text' => 'Sa mère', 'is_correct' => false],
                        ],
                        'explanation' => 'Le texte indique que la sœur de Karim a apporté du pain.',
                    ],
                    [
                        'question' => 'Que faisait le père ?',
                        'choices' => [
                            ['choice_text' => 'Il préparait la table', 'is_correct' => true],
                            ['choice_text' => 'Il préparait la soupe', 'is_correct' => false],
                            ['choice_text' => 'Il achetait du pain', 'is_correct' => false],
                            ['choice_text' => 'Il faisait la vaisselle', 'is_correct' => false],
                        ],
                        'explanation' => 'Le père de Karim a préparé la table.',
                    ],
                    [
                        'question' => 'Quand Karim a-t-il préparé la soupe ?',
                        'choices' => [
                            ['choice_text' => 'Samedi dernier', 'is_correct' => true],
                            ['choice_text' => 'Dimanche prochain', 'is_correct' => false],
                            ['choice_text' => 'Vendredi matin', 'is_correct' => false],
                            ['choice_text' => 'Tous les jours', 'is_correct' => false],
                        ],
                        'explanation' => 'Le texte précise que la soupe a été préparée samedi dernier.',
                    ],
                    [
                        'question' => 'Que peut-on comprendre à la fin du texte ?',
                        'choices' => [
                            ['choice_text' => 'La famille a partagé le repas ensemble', 'is_correct' => true],
                            ['choice_text' => 'Karim a mangé seul', 'is_correct' => false],
                            ['choice_text' => 'Personne n’a aimé le repas', 'is_correct' => false],
                            ['choice_text' => 'La famille est sortie au restaurant', 'is_correct' => false],
                        ],
                        'explanation' => 'La dernière phrase indique clairement que tout le monde a mangé ensemble.',
                    ],
                    [
                        'question' => "Dans le texte de Lina, que signifie « routine » si ce mot est utilisé pour décrire sa matinée ?",
                        'choices' => [
                            ['choice_text' => 'Une suite d’actions habituelles', 'is_correct' => true],
                            ['choice_text' => 'Une longue période de vacances', 'is_correct' => false],
                            ['choice_text' => 'Un changement inattendu', 'is_correct' => false],
                            ['choice_text' => 'Un voyage scolaire', 'is_correct' => false],
                        ],
                        'explanation' => 'Une routine est une suite d’actions que l’on fait habituellement dans un certain ordre.',
                    ],
                    [
                        'question' => 'Quel élément montre que le texte sur Karim parle d’une activité familiale ?',
                        'choices' => [
                            ['choice_text' => 'Plusieurs membres de la famille participent au repas', 'is_correct' => true],
                            ['choice_text' => 'Karim travaille dans un restaurant', 'is_correct' => false],
                            ['choice_text' => 'Karim voyage seul', 'is_correct' => false],
                            ['choice_text' => 'La famille commande un repas en ligne', 'is_correct' => false],
                        ],
                        'explanation' => 'Karim cuisine, sa sœur apporte le pain et son père prépare la table avant que toute la famille mange ensemble.',
                    ],
                ],
            ],

            [
                'title' => 'Chercher les informations importantes',
                'description' => 'Repérer des informations précises dans de courts textes narratifs et descriptifs.',
                'duration' => 20,
                'passing_score' => 60,
                'questions' => [
                    [
                        'question' => "Lisez le texte :\n\n« Dimanche matin, Yassine va au marché avec sa mère. Ils achètent des tomates, des oranges et du fromage. Yassine veut aussi acheter des fraises, mais elles sont trop chères. Ils rentrent à la maison vers midi. »\n\nAvec qui Yassine va-t-il au marché ?",
                        'choices' => [
                            ['choice_text' => 'Avec sa mère', 'is_correct' => true],
                            ['choice_text' => 'Avec son frère', 'is_correct' => false],
                            ['choice_text' => 'Avec son professeur', 'is_correct' => false],
                            ['choice_text' => 'Avec son voisin', 'is_correct' => false],
                        ],
                        'explanation' => 'Le texte dit que Yassine va au marché avec sa mère.',
                    ],
                    [
                        'question' => 'Que veulent acheter Yassine et sa mère ?',
                        'choices' => [
                            ['choice_text' => 'Des tomates, des oranges et du fromage', 'is_correct' => true],
                            ['choice_text' => 'Du pain, du lait et du riz', 'is_correct' => false],
                            ['choice_text' => 'Des pommes, du poulet et des œufs', 'is_correct' => false],
                            ['choice_text' => 'Des fraises seulement', 'is_correct' => false],
                        ],
                        'explanation' => 'Le texte cite précisément les tomates, les oranges et le fromage parmi leurs achats.',
                    ],
                    [
                        'question' => 'Pourquoi n’achètent-ils pas de fraises ?',
                        'choices' => [
                            ['choice_text' => 'Parce qu’elles sont trop chères', 'is_correct' => true],
                            ['choice_text' => 'Parce qu’elles sont trop petites', 'is_correct' => false],
                            ['choice_text' => 'Parce que le marché est fermé', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’elles sont interdites', 'is_correct' => false],
                        ],
                        'explanation' => 'Le texte donne directement la raison : les fraises sont trop chères.',
                    ],
                    [
                        'question' => 'À quel moment rentrent-ils à la maison ?',
                        'choices' => [
                            ['choice_text' => 'Vers midi', 'is_correct' => true],
                            ['choice_text' => 'Vers sept heures', 'is_correct' => false],
                            ['choice_text' => 'Dans l’après-midi', 'is_correct' => false],
                            ['choice_text' => 'Le soir', 'is_correct' => false],
                        ],
                        'explanation' => 'Le texte précise qu’ils rentrent vers midi.',
                    ],
                    [
                        'question' => 'Quelle est l’idée principale du texte ?',
                        'choices' => [
                            ['choice_text' => 'Une sortie au marché le dimanche matin', 'is_correct' => true],
                            ['choice_text' => 'Une recette de gâteau aux fraises', 'is_correct' => false],
                            ['choice_text' => 'Une visite à l’école', 'is_correct' => false],
                            ['choice_text' => 'Un voyage en dehors de la ville', 'is_correct' => false],
                        ],
                        'explanation' => 'Le texte raconte une sortie de Yassine et de sa mère au marché.',
                    ],
                    [
                        'question' => "Lisez le texte :\n\n« Le petit appartement de Nadia se trouve au troisième étage. Il y a deux chambres, une petite cuisine et un salon lumineux. Dans le salon, une grande fenêtre donne sur la rue. Nadia aime particulièrement cet endroit parce qu’il reçoit beaucoup de lumière le matin. »\n\nÀ quel étage se trouve l’appartement ?",
                        'choices' => [
                            ['choice_text' => 'Au troisième étage', 'is_correct' => true],
                            ['choice_text' => 'Au premier étage', 'is_correct' => false],
                            ['choice_text' => 'Au deuxième étage', 'is_correct' => false],
                            ['choice_text' => 'Au quatrième étage', 'is_correct' => false],
                        ],
                        'explanation' => 'La première phrase indique que l’appartement se trouve au troisième étage.',
                    ],
                    [
                        'question' => 'Combien de chambres y a-t-il dans l’appartement ?',
                        'choices' => [
                            ['choice_text' => 'Deux', 'is_correct' => true],
                            ['choice_text' => 'Une', 'is_correct' => false],
                            ['choice_text' => 'Trois', 'is_correct' => false],
                            ['choice_text' => 'Quatre', 'is_correct' => false],
                        ],
                        'explanation' => 'Le texte mentionne deux chambres.',
                    ],
                    [
                        'question' => 'Comment est le salon ?',
                        'choices' => [
                            ['choice_text' => 'Il est lumineux', 'is_correct' => true],
                            ['choice_text' => 'Il est très sombre', 'is_correct' => false],
                            ['choice_text' => 'Il est très petit et sans fenêtre', 'is_correct' => false],
                            ['choice_text' => 'Il est situé au sous-sol', 'is_correct' => false],
                        ],
                        'explanation' => 'Le salon est décrit comme lumineux et possède une grande fenêtre.',
                    ],
                    [
                        'question' => 'Sur quoi donne la grande fenêtre ?',
                        'choices' => [
                            ['choice_text' => 'Sur la rue', 'is_correct' => true],
                            ['choice_text' => 'Sur un jardin', 'is_correct' => false],
                            ['choice_text' => 'Sur la mer', 'is_correct' => false],
                            ['choice_text' => 'Sur une montagne', 'is_correct' => false],
                        ],
                        'explanation' => 'Le texte dit qu’une grande fenêtre donne sur la rue.',
                    ],
                    [
                        'question' => 'Pourquoi Nadia aime-t-elle particulièrement cet endroit ?',
                        'choices' => [
                            ['choice_text' => 'Parce qu’il reçoit beaucoup de lumière le matin', 'is_correct' => true],
                            ['choice_text' => 'Parce qu’il possède cinq chambres', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’il est près de la mer', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’il est au premier étage', 'is_correct' => false],
                        ],
                        'explanation' => 'Nadia apprécie cet endroit parce qu’il reçoit beaucoup de lumière le matin.',
                    ],
                    [
                        'question' => 'Que peut-on déduire de la description du salon ?',
                        'choices' => [
                            ['choice_text' => 'La lumière naturelle y entre facilement', 'is_correct' => true],
                            ['choice_text' => 'Le salon n’a aucune ouverture', 'is_correct' => false],
                            ['choice_text' => 'Le salon est toujours sombre', 'is_correct' => false],
                            ['choice_text' => 'Le salon se trouve à l’extérieur', 'is_correct' => false],
                        ],
                        'explanation' => 'La grande fenêtre et la lumière du matin montrent que la lumière naturelle entre facilement dans le salon.',
                    ],
                    [
                        'question' => 'Quel type de texte est principalement le texte sur l’appartement de Nadia ?',
                        'choices' => [
                            ['choice_text' => 'Une description', 'is_correct' => true],
                            ['choice_text' => 'Une recette', 'is_correct' => false],
                            ['choice_text' => 'Une publicité de voyage', 'is_correct' => false],
                            ['choice_text' => 'Une conversation téléphonique', 'is_correct' => false],
                        ],
                        'explanation' => 'Le texte décrit les pièces, l’étage et les caractéristiques de l’appartement.',
                    ],
                ],
            ],

            [
                'title' => 'Comprendre une petite histoire',
                'description' => 'Suivre une courte histoire, retrouver la chronologie des événements et comprendre les raisons des actions.',
                'duration' => 22,
                'passing_score' => 60,
                'questions' => [
                    [
                        'question' => "Lisez le texte :\n\n« Samedi, Hugo se réveille tôt parce qu’il doit prendre le train. Il prépare rapidement son sac et prend un petit-déjeuner léger. Sa sœur l’accompagne à la gare. Quand ils arrivent, le train est déjà sur le quai. Hugo dit au revoir à sa sœur et monte dans le train. »\n\nPourquoi Hugo se réveille-t-il tôt ?",
                        'choices' => [
                            ['choice_text' => 'Parce qu’il doit prendre le train', 'is_correct' => true],
                            ['choice_text' => 'Parce qu’il doit aller à l’école', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’il veut faire du sport', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’il attend ses amis', 'is_correct' => false],
                        ],
                        'explanation' => 'La première phrase explique qu’Hugo se réveille tôt parce qu’il doit prendre le train.',
                    ],
                    [
                        'question' => 'Que prépare Hugo avant de partir ?',
                        'choices' => [
                            ['choice_text' => 'Son sac', 'is_correct' => true],
                            ['choice_text' => 'Sa voiture', 'is_correct' => false],
                            ['choice_text' => 'Sa chambre', 'is_correct' => false],
                            ['choice_text' => 'Son vélo', 'is_correct' => false],
                        ],
                        'explanation' => 'Hugo prépare rapidement son sac avant de partir pour la gare.',
                    ],
                    [
                        'question' => 'Qui accompagne Hugo à la gare ?',
                        'choices' => [
                            ['choice_text' => 'Sa sœur', 'is_correct' => true],
                            ['choice_text' => 'Son frère', 'is_correct' => false],
                            ['choice_text' => 'Son père', 'is_correct' => false],
                            ['choice_text' => 'Son ami', 'is_correct' => false],
                        ],
                        'explanation' => 'Le texte indique que sa sœur l’accompagne à la gare.',
                    ],
                    [
                        'question' => 'Que trouvent-ils en arrivant à la gare ?',
                        'choices' => [
                            ['choice_text' => 'Le train est déjà sur le quai', 'is_correct' => true],
                            ['choice_text' => 'La gare est fermée', 'is_correct' => false],
                            ['choice_text' => 'Le train est annulé', 'is_correct' => false],
                            ['choice_text' => 'Le train n’est pas encore arrivé', 'is_correct' => false],
                        ],
                        'explanation' => 'Le texte précise que le train est déjà sur le quai lorsqu’ils arrivent.',
                    ],
                    [
                        'question' => 'Que fait Hugo après avoir dit au revoir à sa sœur ?',
                        'choices' => [
                            ['choice_text' => 'Il monte dans le train', 'is_correct' => true],
                            ['choice_text' => 'Il rentre chez lui', 'is_correct' => false],
                            ['choice_text' => 'Il prend un taxi', 'is_correct' => false],
                            ['choice_text' => 'Il attend le lendemain', 'is_correct' => false],
                        ],
                        'explanation' => 'La dernière phrase indique qu’Hugo monte dans le train après avoir dit au revoir à sa sœur.',
                    ],
                    [
                        'question' => 'Quel événement se produit en premier ?',
                        'choices' => [
                            ['choice_text' => 'Hugo se réveille', 'is_correct' => true],
                            ['choice_text' => 'Hugo monte dans le train', 'is_correct' => false],
                            ['choice_text' => 'Hugo dit au revoir à sa sœur', 'is_correct' => false],
                            ['choice_text' => 'Hugo arrive sur le quai', 'is_correct' => false],
                        ],
                        'explanation' => 'Le texte commence par le réveil d’Hugo, avant les autres événements.',
                    ],
                    [
                        'question' => 'Quel événement vient juste avant l’arrivée du train dans la scène ?',
                        'choices' => [
                            ['choice_text' => 'Hugo et sa sœur arrivent à la gare', 'is_correct' => true],
                            ['choice_text' => 'Hugo rentre chez lui', 'is_correct' => false],
                            ['choice_text' => 'Hugo déjeune au restaurant', 'is_correct' => false],
                            ['choice_text' => 'Hugo va à l’école', 'is_correct' => false],
                        ],
                        'explanation' => 'Ils arrivent à la gare avant de constater que le train est déjà sur le quai.',
                    ],
                    [
                        'question' => "Dans le texte, que signifie « quai » ?",
                        'choices' => [
                            ['choice_text' => 'L’endroit où les voyageurs attendent le train', 'is_correct' => true],
                            ['choice_text' => 'Une petite chambre dans la gare', 'is_correct' => false],
                            ['choice_text' => 'Le parking des voitures', 'is_correct' => false],
                            ['choice_text' => 'La billetterie du train', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans une gare, le quai est l’espace où les voyageurs attendent et où le train s’arrête.',
                    ],
                    [
                        'question' => "Lisez le texte :\n\n« Le soir, Amel trouve un petit chat devant sa porte. L’animal semble avoir faim et porte un collier bleu. Amel lui donne un peu d’eau et de nourriture. Ensuite, elle regarde le numéro écrit sur le collier pour essayer de retrouver son propriétaire. »\n\nPourquoi Amel donne-t-elle de l’eau et de la nourriture au chat ?",
                        'choices' => [
                            ['choice_text' => 'Parce que le chat semble avoir faim', 'is_correct' => true],
                            ['choice_text' => 'Parce que le chat veut jouer', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’il habite déjà chez Amel', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’il est avec son propriétaire', 'is_correct' => false],
                        ],
                        'explanation' => 'Le texte indique que le chat semble avoir faim, ce qui explique pourquoi Amel lui donne à manger et à boire.',
                    ],
                    [
                        'question' => 'De quelle couleur est le collier du chat ?',
                        'choices' => [
                            ['choice_text' => 'Bleu', 'is_correct' => true],
                            ['choice_text' => 'Rouge', 'is_correct' => false],
                            ['choice_text' => 'Vert', 'is_correct' => false],
                            ['choice_text' => 'Noir', 'is_correct' => false],
                        ],
                        'explanation' => 'Le texte mentionne un collier bleu.',
                    ],
                    [
                        'question' => 'Que veut faire Amel avec le numéro du collier ?',
                        'choices' => [
                            ['choice_text' => 'Retrouver le propriétaire du chat', 'is_correct' => true],
                            ['choice_text' => 'Acheter un nouveau collier', 'is_correct' => false],
                            ['choice_text' => 'Apprendre le nom de la rue', 'is_correct' => false],
                            ['choice_text' => 'Vendre le chat', 'is_correct' => false],
                        ],
                        'explanation' => 'Amel regarde le numéro du collier pour essayer de retrouver le propriétaire de l’animal.',
                    ],
                    [
                        'question' => 'Que peut-on déduire du comportement d’Amel ?',
                        'choices' => [
                            ['choice_text' => 'Elle cherche à aider le chat', 'is_correct' => true],
                            ['choice_text' => 'Elle veut faire peur au chat', 'is_correct' => false],
                            ['choice_text' => 'Elle refuse de regarder l’animal', 'is_correct' => false],
                            ['choice_text' => 'Elle cherche à quitter immédiatement la maison', 'is_correct' => false],
                        ],
                        'explanation' => 'Elle donne de l’eau et de la nourriture au chat et cherche son propriétaire, ce qui montre qu’elle veut l’aider.',
                    ],
                ],
            ],

            [
                'title' => 'Vocabulaire en contexte',
                'description' => 'Comprendre le sens de mots et d’expressions simples en utilisant le contexte du texte.',
                'duration' => 21,
                'passing_score' => 55,
                'questions' => [
                    [
                        'question' => "Lisez le texte :\n\n« Le parc est très calme tôt le matin. Quelques personnes courent sur les chemins et deux enfants jouent près de la fontaine. Les oiseaux chantent dans les arbres. »\n\nQue signifie « calme » dans ce contexte ?",
                        'choices' => [
                            ['choice_text' => 'Sans beaucoup de bruit ou d’agitation', 'is_correct' => true],
                            ['choice_text' => 'Très dangereux', 'is_correct' => false],
                            ['choice_text' => 'Très sale', 'is_correct' => false],
                            ['choice_text' => 'Très éloigné', 'is_correct' => false],
                        ],
                        'explanation' => 'Le mot « calme » décrit ici un endroit avec peu de bruit et peu d’agitation.',
                    ],
                    [
                        'question' => 'Où jouent les deux enfants ?',
                        'choices' => [
                            ['choice_text' => 'Près de la fontaine', 'is_correct' => true],
                            ['choice_text' => 'Dans les arbres', 'is_correct' => false],
                            ['choice_text' => 'Sur les chemins', 'is_correct' => false],
                            ['choice_text' => 'À côté de la gare', 'is_correct' => false],
                        ],
                        'explanation' => 'Le texte dit que les deux enfants jouent près de la fontaine.',
                    ],
                    [
                        'question' => 'Qui chante dans les arbres ?',
                        'choices' => [
                            ['choice_text' => 'Les oiseaux', 'is_correct' => true],
                            ['choice_text' => 'Les enfants', 'is_correct' => false],
                            ['choice_text' => 'Les coureurs', 'is_correct' => false],
                            ['choice_text' => 'Les personnes âgées', 'is_correct' => false],
                        ],
                        'explanation' => 'Le texte indique que les oiseaux chantent dans les arbres.',
                    ],
                    [
                        'question' => 'Quel mot du texte indique un endroit où l’eau peut jaillir ou couler ?',
                        'choices' => [
                            ['choice_text' => 'Fontaine', 'is_correct' => true],
                            ['choice_text' => 'Chemin', 'is_correct' => false],
                            ['choice_text' => 'Arbre', 'is_correct' => false],
                            ['choice_text' => 'Parc', 'is_correct' => false],
                        ],
                        'explanation' => 'Une fontaine est une installation qui fournit ou fait couler de l’eau.',
                    ],
                    [
                        'question' => "Dans « Quelques personnes courent sur les chemins », que signifie « quelques » ?",
                        'choices' => [
                            ['choice_text' => 'Un petit nombre de personnes', 'is_correct' => true],
                            ['choice_text' => 'Toutes les personnes', 'is_correct' => false],
                            ['choice_text' => 'Aucune personne', 'is_correct' => false],
                            ['choice_text' => 'Une seule personne', 'is_correct' => false],
                        ],
                        'explanation' => '« Quelques » indique un nombre limité mais supérieur à un dans ce contexte.',
                    ],
                    [
                        'question' => "Lisez le texte :\n\n« Pour son anniversaire, Salma reçoit un vélo rouge. Elle est très contente et décide de l’essayer immédiatement dans la rue devant sa maison. Son frère lui conseille de porter un casque. »\n\nPourquoi Salma est-elle très contente ?",
                        'choices' => [
                            ['choice_text' => 'Parce qu’elle reçoit un vélo rouge', 'is_correct' => true],
                            ['choice_text' => 'Parce qu’elle reçoit un téléphone', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’elle va à l’école', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’elle achète une voiture', 'is_correct' => false],
                        ],
                        'explanation' => 'Salma est heureuse parce qu’elle reçoit un vélo rouge pour son anniversaire.',
                    ],
                    [
                        'question' => 'Que veut faire Salma après avoir reçu son cadeau ?',
                        'choices' => [
                            ['choice_text' => 'Essayer le vélo', 'is_correct' => true],
                            ['choice_text' => 'Le vendre', 'is_correct' => false],
                            ['choice_text' => 'Le cacher', 'is_correct' => false],
                            ['choice_text' => 'Le donner à son frère', 'is_correct' => false],
                        ],
                        'explanation' => 'Le texte dit qu’elle décide d’essayer immédiatement le vélo.',
                    ],
                    [
                        'question' => 'Que conseille le frère de Salma ?',
                        'choices' => [
                            ['choice_text' => 'Porter un casque', 'is_correct' => true],
                            ['choice_text' => 'Prendre le bus', 'is_correct' => false],
                            ['choice_text' => 'Rester à la maison', 'is_correct' => false],
                            ['choice_text' => 'Mettre le vélo dans le garage', 'is_correct' => false],
                        ],
                        'explanation' => 'Son frère lui conseille explicitement de porter un casque.',
                    ],
                    [
                        'question' => 'Que signifie « immédiatement » dans le texte ?',
                        'choices' => [
                            ['choice_text' => 'Tout de suite', 'is_correct' => true],
                            ['choice_text' => 'Le lendemain', 'is_correct' => false],
                            ['choice_text' => 'Après plusieurs semaines', 'is_correct' => false],
                            ['choice_text' => 'Très rarement', 'is_correct' => false],
                        ],
                        'explanation' => '« Immédiatement » signifie « tout de suite » ou sans attendre.',
                    ],
                    [
                        'question' => 'Quelle information n’est pas donnée dans le texte ?',
                        'choices' => [
                            ['choice_text' => 'Le prix du vélo', 'is_correct' => true],
                            ['choice_text' => 'La couleur du vélo', 'is_correct' => false],
                            ['choice_text' => 'Le conseil du frère', 'is_correct' => false],
                            ['choice_text' => 'L’occasion du cadeau', 'is_correct' => false],
                        ],
                        'explanation' => 'Le texte indique que le vélo est rouge, qu’il s’agit d’un cadeau d’anniversaire et que le frère conseille de porter un casque, mais il ne donne pas son prix.',
                    ],
                    [
                        'question' => 'Quel mot du texte est proche du sens de « heureuse » ?',
                        'choices' => [
                            ['choice_text' => 'Contente', 'is_correct' => true],
                            ['choice_text' => 'Rouge', 'is_correct' => false],
                            ['choice_text' => 'Devant', 'is_correct' => false],
                            ['choice_text' => 'Conseiller', 'is_correct' => false],
                        ],
                        'explanation' => '« Contente » est un synonyme courant de « heureuse » dans ce contexte.',
                    ],
                    [
                        'question' => 'Que peut-on comprendre sur le conseil du frère ?',
                        'choices' => [
                            ['choice_text' => 'Il cherche à assurer la sécurité de Salma', 'is_correct' => true],
                            ['choice_text' => 'Il ne veut pas qu’elle utilise le vélo', 'is_correct' => false],
                            ['choice_text' => 'Il veut lui acheter une voiture', 'is_correct' => false],
                            ['choice_text' => 'Il ne connaît pas les vélos', 'is_correct' => false],
                        ],
                        'explanation' => 'Conseiller de porter un casque montre qu’il pense à la sécurité de Salma lorsqu’elle fait du vélo.',
                    ],
                ],
            ],

            [
                'title' => 'Idée principale et détails',
                'description' => 'Identifier le sujet d’un texte, distinguer les idées principales des détails et faire des inférences simples.',
                'duration' => 24,
                'passing_score' => 60,
                'questions' => [
                    [
                        'question' => "Lisez le texte :\n\n« Le samedi après-midi, la bibliothèque de quartier organise une heure de lecture pour les enfants. Un bibliothécaire lit une histoire, puis les enfants peuvent choisir eux-mêmes un livre. Cette activité est gratuite et plusieurs familles y participent chaque semaine. »\n\nQuelle est l’idée principale ?",
                        'choices' => [
                            ['choice_text' => 'La bibliothèque organise une activité de lecture pour les enfants', 'is_correct' => true],
                            ['choice_text' => 'Les enfants achètent des livres chaque samedi', 'is_correct' => false],
                            ['choice_text' => 'Le bibliothécaire travaille uniquement le dimanche', 'is_correct' => false],
                            ['choice_text' => 'Les familles organisent des voyages', 'is_correct' => false],
                        ],
                        'explanation' => 'Le texte présente principalement l’activité de lecture proposée par la bibliothèque aux enfants.',
                    ],
                    [
                        'question' => 'Quand cette activité a-t-elle lieu ?',
                        'choices' => [
                            ['choice_text' => 'Le samedi après-midi', 'is_correct' => true],
                            ['choice_text' => 'Le lundi matin', 'is_correct' => false],
                            ['choice_text' => 'Le dimanche soir', 'is_correct' => false],
                            ['choice_text' => 'Chaque matin', 'is_correct' => false],
                        ],
                        'explanation' => 'La première phrase indique que l’activité a lieu le samedi après-midi.',
                    ],
                    [
                        'question' => 'Que fait d’abord le bibliothécaire ?',
                        'choices' => [
                            ['choice_text' => 'Il lit une histoire', 'is_correct' => true],
                            ['choice_text' => 'Il vend des livres', 'is_correct' => false],
                            ['choice_text' => 'Il prépare un repas', 'is_correct' => false],
                            ['choice_text' => 'Il ferme la bibliothèque', 'is_correct' => false],
                        ],
                        'explanation' => 'Le bibliothécaire commence par lire une histoire aux enfants.',
                    ],
                    [
                        'question' => 'Que peuvent faire les enfants ensuite ?',
                        'choices' => [
                            ['choice_text' => 'Choisir eux-mêmes un livre', 'is_correct' => true],
                            ['choice_text' => 'Quitter immédiatement la bibliothèque', 'is_correct' => false],
                            ['choice_text' => 'Acheter des jouets', 'is_correct' => false],
                            ['choice_text' => 'Écrire un examen', 'is_correct' => false],
                        ],
                        'explanation' => 'Après la lecture, les enfants peuvent choisir eux-mêmes un livre.',
                    ],
                    [
                        'question' => 'L’activité est-elle payante ?',
                        'choices' => [
                            ['choice_text' => 'Non, elle est gratuite', 'is_correct' => true],
                            ['choice_text' => 'Oui, elle coûte cinq euros', 'is_correct' => false],
                            ['choice_text' => 'Oui, elle coûte dix euros', 'is_correct' => false],
                            ['choice_text' => 'Le texte ne le précise pas', 'is_correct' => false],
                        ],
                        'explanation' => 'Le texte dit explicitement que l’activité est gratuite.',
                    ],
                    [
                        'question' => 'Que montre le fait que plusieurs familles participent chaque semaine ?',
                        'choices' => [
                            ['choice_text' => 'L’activité attire régulièrement les habitants', 'is_correct' => true],
                            ['choice_text' => 'La bibliothèque est toujours vide', 'is_correct' => false],
                            ['choice_text' => 'Les enfants n’aiment pas lire', 'is_correct' => false],
                            ['choice_text' => 'L’activité a lieu une seule fois par an', 'is_correct' => false],
                        ],
                        'explanation' => 'Une participation régulière de plusieurs familles montre que l’activité attire les habitants du quartier.',
                    ],
                    [
                        'question' => "Lisez le texte :\n\n« Le jardin de l’école était autrefois presque vide. Cette année, les élèves ont planté des fleurs, des tomates et quelques herbes aromatiques. Ils arrosent les plantes chaque matin et observent leur croissance. Le jardin donne maintenant plus de couleurs à la cour. »\n\nQu’est-ce qui a changé dans le jardin ?",
                        'choices' => [
                            ['choice_text' => 'Les élèves y ont planté plusieurs végétaux', 'is_correct' => true],
                            ['choice_text' => 'Les élèves ont supprimé toutes les plantes', 'is_correct' => false],
                            ['choice_text' => 'Le jardin a été transformé en salle de classe', 'is_correct' => false],
                            ['choice_text' => 'Le jardin a été fermé', 'is_correct' => false],
                        ],
                        'explanation' => 'Le texte explique que les élèves ont planté des fleurs, des tomates et des herbes aromatiques.',
                    ],
                    [
                        'question' => 'Quand les élèves arrosent-ils les plantes ?',
                        'choices' => [
                            ['choice_text' => 'Chaque matin', 'is_correct' => true],
                            ['choice_text' => 'Chaque soir', 'is_correct' => false],
                            ['choice_text' => 'Une fois par mois', 'is_correct' => false],
                            ['choice_text' => 'Uniquement le dimanche', 'is_correct' => false],
                        ],
                        'explanation' => 'Le texte précise qu’ils arrosent les plantes chaque matin.',
                    ],
                    [
                        'question' => 'Quelles plantes sont mentionnées ?',
                        'choices' => [
                            ['choice_text' => 'Des fleurs, des tomates et des herbes aromatiques', 'is_correct' => true],
                            ['choice_text' => 'Des roses, des pommes et des arbres fruitiers', 'is_correct' => false],
                            ['choice_text' => 'Du maïs, du riz et des olives', 'is_correct' => false],
                            ['choice_text' => 'Seulement des fleurs', 'is_correct' => false],
                        ],
                        'explanation' => 'Le texte cite précisément ces trois catégories de plantes.',
                    ],
                    [
                        'question' => 'Pourquoi le jardin donne-t-il plus de couleurs à la cour ?',
                        'choices' => [
                            ['choice_text' => 'Parce que de nouvelles plantes y ont poussé', 'is_correct' => true],
                            ['choice_text' => 'Parce que les murs ont été repeints', 'is_correct' => false],
                            ['choice_text' => 'Parce que les élèves ont installé des lampes', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’il y a davantage de voitures', 'is_correct' => false],
                        ],
                        'explanation' => 'Les fleurs et les autres plantes ajoutent de nouvelles couleurs au jardin et donc à la cour.',
                    ],
                    [
                        'question' => 'Quel est le but principal des élèves dans ce texte ?',
                        'choices' => [
                            ['choice_text' => 'Cultiver et entretenir un jardin à l’école', 'is_correct' => true],
                            ['choice_text' => 'Construire une nouvelle école', 'is_correct' => false],
                            ['choice_text' => 'Organiser un voyage', 'is_correct' => false],
                            ['choice_text' => 'Vendre des légumes au marché', 'is_correct' => false],
                        ],
                        'explanation' => 'Les élèves plantent, arrosent et observent les plantes : ils entretiennent donc un jardin scolaire.',
                    ],
                    [
                        'question' => 'Que peut-on déduire de la phrase « ils observent leur croissance » ?',
                        'choices' => [
                            ['choice_text' => 'Les élèves suivent régulièrement l’évolution des plantes', 'is_correct' => true],
                            ['choice_text' => 'Les élèves ont arrêté de s’occuper du jardin', 'is_correct' => false],
                            ['choice_text' => 'Les plantes sont déjà mortes', 'is_correct' => false],
                            ['choice_text' => 'Les élèves ne voient jamais les plantes', 'is_correct' => false],
                        ],
                        'explanation' => 'Observer la croissance signifie qu’ils regardent régulièrement comment les plantes se développent.',
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
