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
                'title' => 'Comprendre un texte du quotidien',
                'description' => 'Lire de courts textes sur des situations quotidiennes et identifier les informations essentielles.',
                'duration' => 18,
                'passing_score' => 55,
                'questions' => [
                    [
                        'question' => 'Lisez le texte :

« Lina se lève à sept heures chaque matin. Elle prend son petit-déjeuner avec sa famille, puis elle prend le bus pour aller à l’école. Son cours commence à huit heures. »

À quelle heure Lina se lève-t-elle ?',
                        'choices' => [
                            ['choice_text' => 'À sept heures', 'is_correct' => true],
                            ['choice_text' => 'À huit heures', 'is_correct' => false],
                            ['choice_text' => 'À neuf heures', 'is_correct' => false],
                            ['choice_text' => 'À six heures', 'is_correct' => false],
                        ],
                        'explanation' => 'Le texte indique clairement que Lina se lève à sept heures chaque matin.',
                    ],
                    [
                        'question' => 'Lisez le texte :

« Lina se lève à sept heures chaque matin. Elle prend son petit-déjeuner avec sa famille, puis elle prend le bus pour aller à l’école. Son cours commence à huit heures. »

Avec qui Lina prend-elle son petit-déjeuner ?',
                        'choices' => [
                            ['choice_text' => 'Avec sa famille', 'is_correct' => true],
                            ['choice_text' => 'Avec ses professeurs', 'is_correct' => false],
                            ['choice_text' => 'Avec ses voisins', 'is_correct' => false],
                            ['choice_text' => 'Avec ses amis de classe', 'is_correct' => false],
                        ],
                        'explanation' => 'Le texte précise que Lina prend son petit-déjeuner avec sa famille.',
                    ],
                    [
                        'question' => 'Lisez le texte :

« Lina se lève à sept heures chaque matin. Elle prend son petit-déjeuner avec sa famille, puis elle prend le bus pour aller à l’école. Son cours commence à huit heures. »

Comment Lina va-t-elle à l’école ?',
                        'choices' => [
                            ['choice_text' => 'À pied', 'is_correct' => false],
                            ['choice_text' => 'En bus', 'is_correct' => true],
                            ['choice_text' => 'À vélo', 'is_correct' => false],
                            ['choice_text' => 'En voiture', 'is_correct' => false],
                        ],
                        'explanation' => 'Le texte dit qu’elle prend le bus pour aller à l’école.',
                    ],
                    [
                        'question' => 'Lisez le texte :

« Lina se lève à sept heures chaque matin. Elle prend son petit-déjeuner avec sa famille, puis elle prend le bus pour aller à l’école. Son cours commence à huit heures. »

À quelle heure commence le cours de Lina ?',
                        'choices' => [
                            ['choice_text' => 'À huit heures', 'is_correct' => true],
                            ['choice_text' => 'À sept heures', 'is_correct' => false],
                            ['choice_text' => 'À dix heures', 'is_correct' => false],
                            ['choice_text' => 'À midi', 'is_correct' => false],
                        ],
                        'explanation' => 'Le dernier détail du texte indique que son cours commence à huit heures.',
                    ],
                    [
                        'question' => 'Lisez le texte :

« Lina se lève à sept heures chaque matin. Elle prend son petit-déjeuner avec sa famille, puis elle prend le bus pour aller à l’école. Son cours commence à huit heures. »

Quelle est l’idée principale du texte ?',
                        'choices' => [
                            ['choice_text' => 'Les vacances d’été que Lina passe en famille', 'is_correct' => false],
                            ['choice_text' => 'Le travail du chauffeur de bus de l’école', 'is_correct' => false],
                            ['choice_text' => 'Les matières que Lina étudie en classe', 'is_correct' => false],
                            ['choice_text' => 'La routine matinale de Lina avant l’école', 'is_correct' => true],
                        ],
                        'explanation' => 'Le texte raconte les étapes de la matinée de Lina : réveil, petit-déjeuner, bus, cours.',
                    ],
                    [
                        'question' => 'Lisez le texte :

« Karim aime cuisiner le week-end. Samedi dernier, il a préparé une soupe de légumes pour sa famille. Sa sœur a apporté du pain et son père a préparé la table. Tout le monde a mangé ensemble. »

Qu’a préparé Karim ?',
                        'choices' => [
                            ['choice_text' => 'Une salade de fruits', 'is_correct' => false],
                            ['choice_text' => 'Une soupe de légumes', 'is_correct' => true],
                            ['choice_text' => 'Un gâteau au chocolat', 'is_correct' => false],
                            ['choice_text' => 'Du riz au poulet', 'is_correct' => false],
                        ],
                        'explanation' => 'Le texte précise que Karim a préparé une soupe de légumes.',
                    ],
                    [
                        'question' => 'Lisez le texte :

« Karim aime cuisiner le week-end. Samedi dernier, il a préparé une soupe de légumes pour sa famille. Sa sœur a apporté du pain et son père a préparé la table. Tout le monde a mangé ensemble. »

Qui a apporté le pain ?',
                        'choices' => [
                            ['choice_text' => 'Son père', 'is_correct' => false],
                            ['choice_text' => 'Karim', 'is_correct' => false],
                            ['choice_text' => 'Sa sœur', 'is_correct' => true],
                            ['choice_text' => 'Sa mère', 'is_correct' => false],
                        ],
                        'explanation' => 'Le texte indique que la sœur de Karim a apporté du pain.',
                    ],
                    [
                        'question' => 'Lisez le texte :

« Karim aime cuisiner le week-end. Samedi dernier, il a préparé une soupe de légumes pour sa famille. Sa sœur a apporté du pain et son père a préparé la table. Tout le monde a mangé ensemble. »

Qu’a fait le père de Karim ?',
                        'choices' => [
                            ['choice_text' => 'Il a préparé la soupe', 'is_correct' => false],
                            ['choice_text' => 'Il a acheté le pain', 'is_correct' => false],
                            ['choice_text' => 'Il a préparé la table', 'is_correct' => true],
                            ['choice_text' => 'Il a fait la vaisselle', 'is_correct' => false],
                        ],
                        'explanation' => 'Le texte dit que le père a préparé la table, pendant que la sœur apportait le pain.',
                    ],
                    [
                        'question' => 'Lisez le texte :

« Karim aime cuisiner le week-end. Samedi dernier, il a préparé une soupe de légumes pour sa famille. Sa sœur a apporté du pain et son père a préparé la table. Tout le monde a mangé ensemble. »

Quand Karim a-t-il préparé la soupe ?',
                        'choices' => [
                            ['choice_text' => 'Dimanche prochain', 'is_correct' => false],
                            ['choice_text' => 'Vendredi matin', 'is_correct' => false],
                            ['choice_text' => 'Mardi dernier', 'is_correct' => false],
                            ['choice_text' => 'Samedi dernier', 'is_correct' => true],
                        ],
                        'explanation' => 'Le texte précise que la soupe a été préparée samedi dernier.',
                    ],
                    [
                        'question' => 'Lisez le texte :

« Karim aime cuisiner le week-end. Samedi dernier, il a préparé une soupe de légumes pour sa famille. Sa sœur a apporté du pain et son père a préparé la table. Tout le monde a mangé ensemble. »

Que comprend-on à la fin du texte ?',
                        'choices' => [
                            ['choice_text' => 'Karim a mangé dans sa chambre avec un ami', 'is_correct' => false],
                            ['choice_text' => 'Personne n’a voulu goûter la soupe', 'is_correct' => false],
                            ['choice_text' => 'Toute la famille a mangé ensemble', 'is_correct' => true],
                            ['choice_text' => 'La famille a fini le repas au restaurant', 'is_correct' => false],
                        ],
                        'explanation' => 'La dernière phrase indique clairement que tout le monde a mangé ensemble.',
                    ],
                    [
                        'question' => 'Lisez le texte :

« Lina se lève à sept heures chaque matin. Elle prend son petit-déjeuner avec sa famille, puis elle prend le bus pour aller à l’école. Son cours commence à huit heures. »

Le mot « routine » décrit bien la matinée de Lina. Que signifie-t-il ?',
                        'choices' => [
                            ['choice_text' => 'Une suite d’événements surprenants qui arrivent par hasard', 'is_correct' => false],
                            ['choice_text' => 'Une suite d’actions que l’on fait chaque jour dans le même ordre', 'is_correct' => true],
                            ['choice_text' => 'Une période de repos pendant les vacances scolaires', 'is_correct' => false],
                            ['choice_text' => 'Un voyage organisé que l’on prépare avec sa famille', 'is_correct' => false],
                        ],
                        'explanation' => 'Une routine, c’est ce que l’on fait chaque jour dans le même ordre : se lever, manger, partir à l’école.',
                    ],
                    [
                        'question' => 'Lisez le texte :

« Karim aime cuisiner le week-end. Samedi dernier, il a préparé une soupe de légumes pour sa famille. Sa sœur a apporté du pain et son père a préparé la table. Tout le monde a mangé ensemble. »

Quel élément montre que ce texte parle d’une activité familiale ?',
                        'choices' => [
                            ['choice_text' => 'Karim travaille comme cuisinier au restaurant', 'is_correct' => false],
                            ['choice_text' => 'Karim voyage en train chez ses cousins', 'is_correct' => false],
                            ['choice_text' => 'La famille commande un repas en ligne', 'is_correct' => false],
                            ['choice_text' => 'Plusieurs membres de la famille participent au repas', 'is_correct' => true],
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
                        'question' => 'Lisez le texte :

« Dimanche matin, Yassine va au marché avec sa mère. Ils achètent des tomates, des oranges et du fromage. Yassine veut aussi acheter des fraises, mais elles sont trop chères. Ils rentrent à la maison vers midi. »

Avec qui Yassine va-t-il au marché ?',
                        'choices' => [
                            ['choice_text' => 'Avec son frère', 'is_correct' => false],
                            ['choice_text' => 'Avec son professeur', 'is_correct' => false],
                            ['choice_text' => 'Avec son voisin', 'is_correct' => false],
                            ['choice_text' => 'Avec sa mère', 'is_correct' => true],
                        ],
                        'explanation' => 'Le texte dit que Yassine va au marché avec sa mère.',
                    ],
                    [
                        'question' => 'Lisez le texte :

« Dimanche matin, Yassine va au marché avec sa mère. Ils achètent des tomates, des oranges et du fromage. Yassine veut aussi acheter des fraises, mais elles sont trop chères. Ils rentrent à la maison vers midi. »

Qu’achètent Yassine et sa mère au marché ?',
                        'choices' => [
                            ['choice_text' => 'Du pain, du lait et du riz', 'is_correct' => false],
                            ['choice_text' => 'Des tomates, des oranges et du fromage', 'is_correct' => true],
                            ['choice_text' => 'Des pommes, du poulet et des œufs', 'is_correct' => false],
                            ['choice_text' => 'Des fraises, du lait et du miel', 'is_correct' => false],
                        ],
                        'explanation' => 'Le texte cite les tomates, les oranges et le fromage. Les fraises restent au marché.',
                    ],
                    [
                        'question' => 'Lisez le texte :

« Dimanche matin, Yassine va au marché avec sa mère. Ils achètent des tomates, des oranges et du fromage. Yassine veut aussi acheter des fraises, mais elles sont trop chères. Ils rentrent à la maison vers midi. »

Qu’est-ce qui empêche Yassine d’acheter des fraises ?',
                        'choices' => [
                            ['choice_text' => 'Le marchand n’en a plus ce matin', 'is_correct' => false],
                            ['choice_text' => 'Sa mère n’aime pas les fruits rouges', 'is_correct' => false],
                            ['choice_text' => 'Elles coûtent trop cher', 'is_correct' => true],
                            ['choice_text' => 'Elles ne sont pas encore mûres', 'is_correct' => false],
                        ],
                        'explanation' => 'Le texte donne la raison : les fraises sont trop chères.',
                    ],
                    [
                        'question' => 'Lisez le texte :

« Dimanche matin, Yassine va au marché avec sa mère. Ils achètent des tomates, des oranges et du fromage. Yassine veut aussi acheter des fraises, mais elles sont trop chères. Ils rentrent à la maison vers midi. »

À quel moment Yassine et sa mère rentrent-ils à la maison ?',
                        'choices' => [
                            ['choice_text' => 'Vers dix heures', 'is_correct' => false],
                            ['choice_text' => 'Vers midi', 'is_correct' => true],
                            ['choice_text' => 'Vers deux heures', 'is_correct' => false],
                            ['choice_text' => 'Vers six heures', 'is_correct' => false],
                        ],
                        'explanation' => 'Le texte précise qu’ils rentrent vers midi.',
                    ],
                    [
                        'question' => 'Lisez le texte :

« Dimanche matin, Yassine va au marché avec sa mère. Ils achètent des tomates, des oranges et du fromage. Yassine veut aussi acheter des fraises, mais elles sont trop chères. Ils rentrent à la maison vers midi. »

Quelle est l’idée principale du texte ?',
                        'choices' => [
                            ['choice_text' => 'Une recette de gâteau aux fraises et à l’orange', 'is_correct' => false],
                            ['choice_text' => 'Une visite de l’école avec la mère de Yassine', 'is_correct' => false],
                            ['choice_text' => 'Une sortie au marché le dimanche matin', 'is_correct' => true],
                            ['choice_text' => 'Un voyage d’une journée en dehors de la ville', 'is_correct' => false],
                        ],
                        'explanation' => 'Le texte raconte une sortie de Yassine et de sa mère au marché.',
                    ],
                    [
                        'question' => 'Lisez le texte :

« Le petit appartement de Nadia se trouve au troisième étage. Il y a deux chambres, une petite cuisine et un salon lumineux. Dans le salon, une grande fenêtre donne sur la rue. Nadia aime particulièrement cet endroit parce qu’il reçoit beaucoup de lumière le matin. »

À quel étage se trouve l’appartement ?',
                        'choices' => [
                            ['choice_text' => 'Au premier étage', 'is_correct' => false],
                            ['choice_text' => 'Au deuxième étage', 'is_correct' => false],
                            ['choice_text' => 'Au quatrième étage', 'is_correct' => false],
                            ['choice_text' => 'Au troisième étage', 'is_correct' => true],
                        ],
                        'explanation' => 'La première phrase indique que l’appartement se trouve au troisième étage.',
                    ],
                    [
                        'question' => 'Lisez le texte :

« Le petit appartement de Nadia se trouve au troisième étage. Il y a deux chambres, une petite cuisine et un salon lumineux. Dans le salon, une grande fenêtre donne sur la rue. Nadia aime particulièrement cet endroit parce qu’il reçoit beaucoup de lumière le matin. »

Combien de chambres y a-t-il dans l’appartement de Nadia ?',
                        'choices' => [
                            ['choice_text' => 'Une', 'is_correct' => false],
                            ['choice_text' => 'Trois', 'is_correct' => false],
                            ['choice_text' => 'Deux', 'is_correct' => true],
                            ['choice_text' => 'Quatre', 'is_correct' => false],
                        ],
                        'explanation' => 'Le texte mentionne deux chambres.',
                    ],
                    [
                        'question' => 'Lisez le texte :

« Le petit appartement de Nadia se trouve au troisième étage. Il y a deux chambres, une petite cuisine et un salon lumineux. Dans le salon, une grande fenêtre donne sur la rue. Nadia aime particulièrement cet endroit parce qu’il reçoit beaucoup de lumière le matin. »

Comment est le salon de l’appartement ?',
                        'choices' => [
                            ['choice_text' => 'Il est lumineux', 'is_correct' => true],
                            ['choice_text' => 'Il est très sombre', 'is_correct' => false],
                            ['choice_text' => 'Il est petit et n’a pas de fenêtre', 'is_correct' => false],
                            ['choice_text' => 'Il est situé au sous-sol', 'is_correct' => false],
                        ],
                        'explanation' => 'Le salon est décrit comme lumineux et possède une grande fenêtre.',
                    ],
                    [
                        'question' => 'Lisez le texte :

« Le petit appartement de Nadia se trouve au troisième étage. Il y a deux chambres, une petite cuisine et un salon lumineux. Dans le salon, une grande fenêtre donne sur la rue. Nadia aime particulièrement cet endroit parce qu’il reçoit beaucoup de lumière le matin. »

Sur quoi donne la grande fenêtre du salon ?',
                        'choices' => [
                            ['choice_text' => 'Sur la rue', 'is_correct' => true],
                            ['choice_text' => 'Sur un jardin', 'is_correct' => false],
                            ['choice_text' => 'Sur la mer', 'is_correct' => false],
                            ['choice_text' => 'Sur une montagne', 'is_correct' => false],
                        ],
                        'explanation' => 'Le texte dit qu’une grande fenêtre donne sur la rue.',
                    ],
                    [
                        'question' => 'Lisez le texte :

« Le petit appartement de Nadia se trouve au troisième étage. Il y a deux chambres, une petite cuisine et un salon lumineux. Dans le salon, une grande fenêtre donne sur la rue. Nadia aime particulièrement cet endroit parce qu’il reçoit beaucoup de lumière le matin. »

Pourquoi Nadia aime-t-elle particulièrement cet endroit ?',
                        'choices' => [
                            ['choice_text' => 'Parce qu’il a cinq chambres spacieuses', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’il est tout près de la mer', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’il est au premier étage', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’il reçoit beaucoup de lumière le matin', 'is_correct' => true],
                        ],
                        'explanation' => 'Le texte donne la raison : le salon reçoit beaucoup de lumière le matin.',
                    ],
                    [
                        'question' => 'Lisez le texte :

« Le petit appartement de Nadia se trouve au troisième étage. Il y a deux chambres, une petite cuisine et un salon lumineux. Dans le salon, une grande fenêtre donne sur la rue. Nadia aime particulièrement cet endroit parce qu’il reçoit beaucoup de lumière le matin. »

Comment est la cuisine de l’appartement ?',
                        'choices' => [
                            ['choice_text' => 'Elle est très grande', 'is_correct' => false],
                            ['choice_text' => 'Elle est petite', 'is_correct' => true],
                            ['choice_text' => 'Elle est située au rez-de-chaussée', 'is_correct' => false],
                            ['choice_text' => 'Elle se trouve dans la chambre de Nadia', 'is_correct' => false],
                        ],
                        'explanation' => 'Le texte parle d’une petite cuisine, à côté des deux chambres et du salon.',
                    ],
                    [
                        'question' => 'Lisez le texte :

« Le petit appartement de Nadia se trouve au troisième étage. Il y a deux chambres, une petite cuisine et un salon lumineux. Dans le salon, une grande fenêtre donne sur la rue. Nadia aime particulièrement cet endroit parce qu’il reçoit beaucoup de lumière le matin. »

Quel type de texte est celui sur l’appartement de Nadia ?',
                        'choices' => [
                            ['choice_text' => 'Une description', 'is_correct' => true],
                            ['choice_text' => 'Une recette de cuisine', 'is_correct' => false],
                            ['choice_text' => 'Une invitation à une fête', 'is_correct' => false],
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
                        'question' => 'Lisez le texte :

« Samedi, Hugo se réveille tôt parce qu’il doit prendre le train. Il prépare rapidement son sac et prend un petit-déjeuner léger. Sa sœur l’accompagne à la gare. Quand ils arrivent, le train est déjà sur le quai. Hugo dit au revoir à sa sœur et monte dans le train. »

Pourquoi Hugo se réveille-t-il tôt ?',
                        'choices' => [
                            ['choice_text' => 'Parce qu’il doit aller à l’école', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’il doit prendre le train', 'is_correct' => true],
                            ['choice_text' => 'Parce qu’il veut faire du sport', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’il attend ses amis à la gare', 'is_correct' => false],
                        ],
                        'explanation' => 'La première phrase explique qu’Hugo se réveille tôt parce qu’il doit prendre le train.',
                    ],
                    [
                        'question' => 'Lisez le texte :

« Samedi, Hugo se réveille tôt parce qu’il doit prendre le train. Il prépare rapidement son sac et prend un petit-déjeuner léger. Sa sœur l’accompagne à la gare. Quand ils arrivent, le train est déjà sur le quai. Hugo dit au revoir à sa sœur et monte dans le train. »

Que prépare Hugo avant de partir ?',
                        'choices' => [
                            ['choice_text' => 'Sa voiture', 'is_correct' => false],
                            ['choice_text' => 'Sa chambre', 'is_correct' => false],
                            ['choice_text' => 'Son sac', 'is_correct' => true],
                            ['choice_text' => 'Son vélo', 'is_correct' => false],
                        ],
                        'explanation' => 'Hugo prépare rapidement son sac avant de partir pour la gare.',
                    ],
                    [
                        'question' => 'Lisez le texte :

« Samedi, Hugo se réveille tôt parce qu’il doit prendre le train. Il prépare rapidement son sac et prend un petit-déjeuner léger. Sa sœur l’accompagne à la gare. Quand ils arrivent, le train est déjà sur le quai. Hugo dit au revoir à sa sœur et monte dans le train. »

Qui accompagne Hugo à la gare ?',
                        'choices' => [
                            ['choice_text' => 'Son frère', 'is_correct' => false],
                            ['choice_text' => 'Sa sœur', 'is_correct' => true],
                            ['choice_text' => 'Son père', 'is_correct' => false],
                            ['choice_text' => 'Son ami', 'is_correct' => false],
                        ],
                        'explanation' => 'Le texte indique que sa sœur l’accompagne à la gare.',
                    ],
                    [
                        'question' => 'Lisez le texte :

« Samedi, Hugo se réveille tôt parce qu’il doit prendre le train. Il prépare rapidement son sac et prend un petit-déjeuner léger. Sa sœur l’accompagne à la gare. Quand ils arrivent, le train est déjà sur le quai. Hugo dit au revoir à sa sœur et monte dans le train. »

Que trouvent Hugo et sa sœur en arrivant à la gare ?',
                        'choices' => [
                            ['choice_text' => 'La gare est fermée', 'is_correct' => false],
                            ['choice_text' => 'Le train est annulé', 'is_correct' => false],
                            ['choice_text' => 'Le train n’est pas encore arrivé', 'is_correct' => false],
                            ['choice_text' => 'Le train est déjà sur le quai', 'is_correct' => true],
                        ],
                        'explanation' => 'Le texte précise que le train est déjà sur le quai lorsqu’ils arrivent.',
                    ],
                    [
                        'question' => 'Lisez le texte :

« Samedi, Hugo se réveille tôt parce qu’il doit prendre le train. Il prépare rapidement son sac et prend un petit-déjeuner léger. Sa sœur l’accompagne à la gare. Quand ils arrivent, le train est déjà sur le quai. Hugo dit au revoir à sa sœur et monte dans le train. »

Que fait Hugo après avoir dit au revoir à sa sœur ?',
                        'choices' => [
                            ['choice_text' => 'Il rentre chez lui', 'is_correct' => false],
                            ['choice_text' => 'Il monte dans le train', 'is_correct' => true],
                            ['choice_text' => 'Il prend un taxi', 'is_correct' => false],
                            ['choice_text' => 'Il attend le lendemain', 'is_correct' => false],
                        ],
                        'explanation' => 'La dernière phrase indique qu’Hugo monte dans le train après avoir dit au revoir à sa sœur.',
                    ],
                    [
                        'question' => 'Lisez le texte :

« Samedi, Hugo se réveille tôt parce qu’il doit prendre le train. Il prépare rapidement son sac et prend un petit-déjeuner léger. Sa sœur l’accompagne à la gare. Quand ils arrivent, le train est déjà sur le quai. Hugo dit au revoir à sa sœur et monte dans le train. »

Quel événement du texte se produit en premier ?',
                        'choices' => [
                            ['choice_text' => 'Hugo monte dans le train', 'is_correct' => false],
                            ['choice_text' => 'Hugo dit au revoir à sa sœur', 'is_correct' => false],
                            ['choice_text' => 'Hugo se réveille', 'is_correct' => true],
                            ['choice_text' => 'Hugo arrive sur le quai', 'is_correct' => false],
                        ],
                        'explanation' => 'Le texte commence par le réveil d’Hugo, avant les autres événements.',
                    ],
                    [
                        'question' => 'Lisez le texte :

« Samedi, Hugo se réveille tôt parce qu’il doit prendre le train. Il prépare rapidement son sac et prend un petit-déjeuner léger. Sa sœur l’accompagne à la gare. Quand ils arrivent, le train est déjà sur le quai. Hugo dit au revoir à sa sœur et monte dans le train. »

Quel événement a lieu juste avant qu’Hugo monte dans le train ?',
                        'choices' => [
                            ['choice_text' => 'Il se réveille tôt le matin', 'is_correct' => false],
                            ['choice_text' => 'Il prépare son sac rapidement', 'is_correct' => false],
                            ['choice_text' => 'Il prend un petit-déjeuner léger', 'is_correct' => false],
                            ['choice_text' => 'Il dit au revoir à sa sœur', 'is_correct' => true],
                        ],
                        'explanation' => 'Hugo dit au revoir à sa sœur, puis il monte dans le train.',
                    ],
                    [
                        'question' => 'Lisez le texte :

« Samedi, Hugo se réveille tôt parce qu’il doit prendre le train. Il prépare rapidement son sac et prend un petit-déjeuner léger. Sa sœur l’accompagne à la gare. Quand ils arrivent, le train est déjà sur le quai. Hugo dit au revoir à sa sœur et monte dans le train. »

Dans « le train est déjà sur le quai », que signifie « quai » ?',
                        'choices' => [
                            ['choice_text' => 'Le guichet où l’on achète son billet de train', 'is_correct' => false],
                            ['choice_text' => 'Le parking réservé aux voitures de la gare', 'is_correct' => false],
                            ['choice_text' => 'Le bord des voies où les voyageurs attendent le train', 'is_correct' => true],
                            ['choice_text' => 'La cafétéria où l’on prend son petit-déjeuner', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans une gare, le quai est le bord des voies : on y attend le train et on y monte.',
                    ],
                    [
                        'question' => 'Lisez le texte :

« Le soir, Amel trouve un petit chat devant sa porte. L’animal semble avoir faim et porte un collier bleu. Amel lui donne un peu d’eau et de nourriture. Ensuite, elle regarde le numéro écrit sur le collier pour essayer de retrouver son propriétaire. »

Qu’est-ce qui pousse Amel à donner de l’eau et de la nourriture au chat ?',
                        'choices' => [
                            ['choice_text' => 'Le chat semble avoir faim', 'is_correct' => true],
                            ['choice_text' => 'Le chat veut jouer avec elle', 'is_correct' => false],
                            ['choice_text' => 'Le chat habite déjà chez elle', 'is_correct' => false],
                            ['choice_text' => 'Le chat est avec son propriétaire', 'is_correct' => false],
                        ],
                        'explanation' => 'Le texte dit que l’animal semble avoir faim, alors Amel lui donne à boire et à manger.',
                    ],
                    [
                        'question' => 'Lisez le texte :

« Le soir, Amel trouve un petit chat devant sa porte. L’animal semble avoir faim et porte un collier bleu. Amel lui donne un peu d’eau et de nourriture. Ensuite, elle regarde le numéro écrit sur le collier pour essayer de retrouver son propriétaire. »

De quelle couleur est le collier du chat ?',
                        'choices' => [
                            ['choice_text' => 'Rouge', 'is_correct' => false],
                            ['choice_text' => 'Vert', 'is_correct' => false],
                            ['choice_text' => 'Noir', 'is_correct' => false],
                            ['choice_text' => 'Bleu', 'is_correct' => true],
                        ],
                        'explanation' => 'Le texte mentionne un collier bleu.',
                    ],
                    [
                        'question' => 'Lisez le texte :

« Le soir, Amel trouve un petit chat devant sa porte. L’animal semble avoir faim et porte un collier bleu. Amel lui donne un peu d’eau et de nourriture. Ensuite, elle regarde le numéro écrit sur le collier pour essayer de retrouver son propriétaire. »

Que veut faire Amel avec le numéro du collier ?',
                        'choices' => [
                            ['choice_text' => 'Retrouver le propriétaire du chat', 'is_correct' => true],
                            ['choice_text' => 'Acheter un nouveau collier pour le chat', 'is_correct' => false],
                            ['choice_text' => 'Apprendre le nom de la rue voisine', 'is_correct' => false],
                            ['choice_text' => 'Vendre le chat à un voisin', 'is_correct' => false],
                        ],
                        'explanation' => 'Amel regarde le numéro du collier pour essayer de retrouver le propriétaire de l’animal.',
                    ],
                    [
                        'question' => 'Lisez le texte :

« Le soir, Amel trouve un petit chat devant sa porte. L’animal semble avoir faim et porte un collier bleu. Amel lui donne un peu d’eau et de nourriture. Ensuite, elle regarde le numéro écrit sur le collier pour essayer de retrouver son propriétaire. »

Que peut-on déduire du comportement d’Amel ?',
                        'choices' => [
                            ['choice_text' => 'Elle se préoccupe du chat et veut l’aider', 'is_correct' => true],
                            ['choice_text' => 'Elle veut garder le chat pour elle', 'is_correct' => false],
                            ['choice_text' => 'Elle ne se soucie pas du chat', 'is_correct' => false],
                            ['choice_text' => 'Elle a peur que le chat soit dangereux', 'is_correct' => false],
                        ],
                        'explanation' => 'Amel donne de l’eau et de la nourriture au chat : elle veut l’aider.',
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
                        'question' => 'Lisez le texte :

« Le parc est très calme tôt le matin. Quelques personnes courent sur les chemins et deux enfants jouent près de la fontaine. Les oiseaux chantent dans les arbres. »

Que signifie « calme » dans ce contexte ?',
                        'choices' => [
                            ['choice_text' => 'Rempli de monde et de bruit le matin', 'is_correct' => false],
                            ['choice_text' => 'Dangereux pour les enfants qui jouent', 'is_correct' => false],
                            ['choice_text' => 'Sans beaucoup de bruit ou d’agitation', 'is_correct' => true],
                            ['choice_text' => 'Sale à cause des feuilles des arbres', 'is_correct' => false],
                        ],
                        'explanation' => 'Le mot « calme » décrit ici un endroit avec peu de bruit et peu d’agitation.',
                    ],
                    [
                        'question' => 'Lisez le texte :

« Le parc est très calme tôt le matin. Quelques personnes courent sur les chemins et deux enfants jouent près de la fontaine. Les oiseaux chantent dans les arbres. »

Où jouent les deux enfants ?',
                        'choices' => [
                            ['choice_text' => 'Dans les arbres du parc', 'is_correct' => false],
                            ['choice_text' => 'Sur les chemins du parc', 'is_correct' => false],
                            ['choice_text' => 'À côté de la gare du quartier', 'is_correct' => false],
                            ['choice_text' => 'Près de la fontaine', 'is_correct' => true],
                        ],
                        'explanation' => 'Le texte dit que les deux enfants jouent près de la fontaine.',
                    ],
                    [
                        'question' => 'Lisez le texte :

« Le parc est très calme tôt le matin. Quelques personnes courent sur les chemins et deux enfants jouent près de la fontaine. Les oiseaux chantent dans les arbres. »

Qui chante dans les arbres ?',
                        'choices' => [
                            ['choice_text' => 'Les enfants', 'is_correct' => false],
                            ['choice_text' => 'Les oiseaux', 'is_correct' => true],
                            ['choice_text' => 'Les coureurs', 'is_correct' => false],
                            ['choice_text' => 'Les personnes âgées', 'is_correct' => false],
                        ],
                        'explanation' => 'Le texte indique que les oiseaux chantent dans les arbres.',
                    ],
                    [
                        'question' => 'Lisez le texte :

« Le parc est très calme tôt le matin. Quelques personnes courent sur les chemins et deux enfants jouent près de la fontaine. Les oiseaux chantent dans les arbres. »

Quel mot du texte désigne un endroit où l’eau coule ?',
                        'choices' => [
                            ['choice_text' => 'Chemin', 'is_correct' => false],
                            ['choice_text' => 'Arbre', 'is_correct' => false],
                            ['choice_text' => 'Parc', 'is_correct' => false],
                            ['choice_text' => 'Fontaine', 'is_correct' => true],
                        ],
                        'explanation' => 'Une fontaine est une installation qui fournit ou fait couler de l’eau.',
                    ],
                    [
                        'question' => 'Lisez le texte :

« Le parc est très calme tôt le matin. Quelques personnes courent sur les chemins et deux enfants jouent près de la fontaine. Les oiseaux chantent dans les arbres. »

Dans « Quelques personnes courent sur les chemins », que signifie « quelques » ?',
                        'choices' => [
                            ['choice_text' => 'Une grande foule de personnes', 'is_correct' => false],
                            ['choice_text' => 'Une personne en particulier', 'is_correct' => false],
                            ['choice_text' => 'Les gens qui habitent près du parc', 'is_correct' => false],
                            ['choice_text' => 'Un petit nombre de personnes', 'is_correct' => true],
                        ],
                        'explanation' => '« Quelques » désigne un petit nombre : plus d’une personne, mais pas beaucoup.',
                    ],
                    [
                        'question' => 'Lisez le texte :

« Pour son anniversaire, Salma reçoit un vélo rouge. Elle est très contente et décide de l’essayer immédiatement dans la rue devant sa maison. Son frère lui conseille de porter un casque. »

Qu’est-ce qui rend Salma très contente ?',
                        'choices' => [
                            ['choice_text' => 'Elle reçoit un vélo rouge pour son anniversaire', 'is_correct' => true],
                            ['choice_text' => 'Elle reçoit un téléphone de ses parents', 'is_correct' => false],
                            ['choice_text' => 'Elle part en voyage avec son frère', 'is_correct' => false],
                            ['choice_text' => 'Elle achète une voiture avec ses économies', 'is_correct' => false],
                        ],
                        'explanation' => 'Salma est contente parce qu’elle reçoit un vélo rouge pour son anniversaire.',
                    ],
                    [
                        'question' => 'Lisez le texte :

« Pour son anniversaire, Salma reçoit un vélo rouge. Elle est très contente et décide de l’essayer immédiatement dans la rue devant sa maison. Son frère lui conseille de porter un casque. »

Que veut faire Salma après avoir reçu son cadeau ?',
                        'choices' => [
                            ['choice_text' => 'Le vendre', 'is_correct' => false],
                            ['choice_text' => 'Essayer le vélo', 'is_correct' => true],
                            ['choice_text' => 'Le cacher', 'is_correct' => false],
                            ['choice_text' => 'Le donner à son frère', 'is_correct' => false],
                        ],
                        'explanation' => 'Le texte dit qu’elle décide d’essayer immédiatement le vélo.',
                    ],
                    [
                        'question' => 'Lisez le texte :

« Pour son anniversaire, Salma reçoit un vélo rouge. Elle est très contente et décide de l’essayer immédiatement dans la rue devant sa maison. Son frère lui conseille de porter un casque. »

Dans « Son frère lui conseille de porter un casque », que signifie « conseille » ?',
                        'choices' => [
                            ['choice_text' => 'Il lui interdit de le faire', 'is_correct' => false],
                            ['choice_text' => 'Il lui demande son vélo en échange', 'is_correct' => false],
                            ['choice_text' => 'Il lui recommande de le faire', 'is_correct' => true],
                            ['choice_text' => 'Il lui raconte ce qu’il a fait hier', 'is_correct' => false],
                        ],
                        'explanation' => 'Conseiller, c’est recommander quelque chose à quelqu’un, sans l’obliger.',
                    ],
                    [
                        'question' => 'Lisez le texte :

« Pour son anniversaire, Salma reçoit un vélo rouge. Elle est très contente et décide de l’essayer immédiatement dans la rue devant sa maison. Son frère lui conseille de porter un casque. »

Dans « elle décide de l’essayer immédiatement », que signifie « immédiatement » ?',
                        'choices' => [
                            ['choice_text' => 'Tout de suite', 'is_correct' => true],
                            ['choice_text' => 'Le lendemain', 'is_correct' => false],
                            ['choice_text' => 'Après plusieurs semaines', 'is_correct' => false],
                            ['choice_text' => 'Après le déjeuner', 'is_correct' => false],
                        ],
                        'explanation' => '« Immédiatement » signifie « tout de suite » ou sans attendre.',
                    ],
                    [
                        'question' => 'Lisez le texte :

« Pour son anniversaire, Salma reçoit un vélo rouge. Elle est très contente et décide de l’essayer immédiatement dans la rue devant sa maison. Son frère lui conseille de porter un casque. »

Quelle information n’est pas donnée dans le texte ?',
                        'choices' => [
                            ['choice_text' => 'Le prix du vélo', 'is_correct' => true],
                            ['choice_text' => 'La couleur du vélo', 'is_correct' => false],
                            ['choice_text' => 'Le conseil du frère', 'is_correct' => false],
                            ['choice_text' => 'L’occasion du cadeau', 'is_correct' => false],
                        ],
                        'explanation' => 'Le texte indique que le vélo est rouge, qu’il s’agit d’un cadeau d’anniversaire et que le frère conseille de porter un casque, mais il ne donne pas son prix.',
                    ],
                    [
                        'question' => 'Lisez le texte :

« Pour son anniversaire, Salma reçoit un vélo rouge. Elle est très contente et décide de l’essayer immédiatement dans la rue devant sa maison. Son frère lui conseille de porter un casque. »

Quel mot du texte est proche du sens de « heureuse » ?',
                        'choices' => [
                            ['choice_text' => 'Rouge', 'is_correct' => false],
                            ['choice_text' => 'Casque', 'is_correct' => false],
                            ['choice_text' => 'Contente', 'is_correct' => true],
                            ['choice_text' => 'Maison', 'is_correct' => false],
                        ],
                        'explanation' => '« Contente » est un synonyme courant de « heureuse » dans ce contexte.',
                    ],
                    [
                        'question' => 'Lisez le texte :

« Pour son anniversaire, Salma reçoit un vélo rouge. Elle est très contente et décide de l’essayer immédiatement dans la rue devant sa maison. Son frère lui conseille de porter un casque. »

Que peut-on comprendre sur le conseil du frère ?',
                        'choices' => [
                            ['choice_text' => 'Il veut qu’elle roule moins vite que lui', 'is_correct' => false],
                            ['choice_text' => 'Il cherche à assurer la sécurité de Salma', 'is_correct' => true],
                            ['choice_text' => 'Il pense que le vélo est trop grand pour elle', 'is_correct' => false],
                            ['choice_text' => 'Il est jaloux du cadeau de sa sœur', 'is_correct' => false],
                        ],
                        'explanation' => 'Porter un casque protège la tête : le frère pense à la sécurité de Salma.',
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
                        'question' => 'Lisez le texte :

« Le samedi après-midi, la bibliothèque de quartier organise une heure de lecture pour les enfants. Un bibliothécaire lit une histoire, puis les enfants peuvent choisir eux-mêmes un livre. Cette activité est gratuite et plusieurs familles y participent chaque semaine. »

Quelle est l’idée principale du texte ?',
                        'choices' => [
                            ['choice_text' => 'Les enfants achètent des livres à la bibliothèque chaque samedi', 'is_correct' => false],
                            ['choice_text' => 'Le bibliothécaire travaille le dimanche pour les familles', 'is_correct' => false],
                            ['choice_text' => 'La bibliothèque organise une activité de lecture pour les enfants', 'is_correct' => true],
                            ['choice_text' => 'Les familles organisent des voyages scolaires en groupe', 'is_correct' => false],
                        ],
                        'explanation' => 'Le texte présente principalement l’activité de lecture proposée par la bibliothèque aux enfants.',
                    ],
                    [
                        'question' => 'Lisez le texte :

« Le samedi après-midi, la bibliothèque de quartier organise une heure de lecture pour les enfants. Un bibliothécaire lit une histoire, puis les enfants peuvent choisir eux-mêmes un livre. Cette activité est gratuite et plusieurs familles y participent chaque semaine. »

Quand cette activité a-t-elle lieu ?',
                        'choices' => [
                            ['choice_text' => 'Le lundi matin avant l’école', 'is_correct' => false],
                            ['choice_text' => 'Le dimanche soir après le dîner', 'is_correct' => false],
                            ['choice_text' => 'Le mercredi matin pendant le cours', 'is_correct' => false],
                            ['choice_text' => 'Le samedi après-midi', 'is_correct' => true],
                        ],
                        'explanation' => 'La première phrase indique que l’activité a lieu le samedi après-midi.',
                    ],
                    [
                        'question' => 'Lisez le texte :

« Le samedi après-midi, la bibliothèque de quartier organise une heure de lecture pour les enfants. Un bibliothécaire lit une histoire, puis les enfants peuvent choisir eux-mêmes un livre. Cette activité est gratuite et plusieurs familles y participent chaque semaine. »

Que fait d’abord le bibliothécaire ?',
                        'choices' => [
                            ['choice_text' => 'Il vend des livres', 'is_correct' => false],
                            ['choice_text' => 'Il prépare un repas', 'is_correct' => false],
                            ['choice_text' => 'Il lit une histoire', 'is_correct' => true],
                            ['choice_text' => 'Il ferme la bibliothèque', 'is_correct' => false],
                        ],
                        'explanation' => 'Le bibliothécaire commence par lire une histoire aux enfants.',
                    ],
                    [
                        'question' => 'Lisez le texte :

« Le samedi après-midi, la bibliothèque de quartier organise une heure de lecture pour les enfants. Un bibliothécaire lit une histoire, puis les enfants peuvent choisir eux-mêmes un livre. Cette activité est gratuite et plusieurs familles y participent chaque semaine. »

Que peuvent faire les enfants après la lecture ?',
                        'choices' => [
                            ['choice_text' => 'Choisir eux-mêmes un livre', 'is_correct' => true],
                            ['choice_text' => 'Dessiner l’histoire sur un cahier', 'is_correct' => false],
                            ['choice_text' => 'Raconter une histoire au bibliothécaire', 'is_correct' => false],
                            ['choice_text' => 'Jouer dehors devant la bibliothèque', 'is_correct' => false],
                        ],
                        'explanation' => 'Après la lecture, les enfants peuvent choisir eux-mêmes un livre.',
                    ],
                    [
                        'question' => 'Lisez le texte :

« Le samedi après-midi, la bibliothèque de quartier organise une heure de lecture pour les enfants. Un bibliothécaire lit une histoire, puis les enfants peuvent choisir eux-mêmes un livre. Cette activité est gratuite et plusieurs familles y participent chaque semaine. »

L’activité de la bibliothèque est-elle payante ?',
                        'choices' => [
                            ['choice_text' => 'Non, elle est gratuite', 'is_correct' => true],
                            ['choice_text' => 'Oui, elle coûte 20 dirhams par enfant', 'is_correct' => false],
                            ['choice_text' => 'Oui, elle coûte 50 dirhams par famille', 'is_correct' => false],
                            ['choice_text' => 'Oui, mais les adultes paient l’entrée', 'is_correct' => false],
                        ],
                        'explanation' => 'Le texte dit explicitement que l’activité est gratuite.',
                    ],
                    [
                        'question' => 'Lisez le texte :

« Le samedi après-midi, la bibliothèque de quartier organise une heure de lecture pour les enfants. Un bibliothécaire lit une histoire, puis les enfants peuvent choisir eux-mêmes un livre. Cette activité est gratuite et plusieurs familles y participent chaque semaine. »

Que montre le fait que plusieurs familles participent chaque semaine ?',
                        'choices' => [
                            ['choice_text' => 'Peu de familles s’intéressent à la lecture', 'is_correct' => false],
                            ['choice_text' => 'L’activité attire régulièrement les habitants', 'is_correct' => true],
                            ['choice_text' => 'L’activité n’a eu lieu qu’une fois, au début de l’année', 'is_correct' => false],
                            ['choice_text' => 'Les familles viennent pour acheter des livres bon marché', 'is_correct' => false],
                        ],
                        'explanation' => 'Une participation régulière de plusieurs familles montre que l’activité attire les habitants du quartier.',
                    ],
                    [
                        'question' => 'Lisez le texte :

« Le jardin de l’école était autrefois presque vide. Cette année, les élèves ont planté des fleurs, des tomates et quelques herbes aromatiques. Ils arrosent les plantes chaque matin et observent leur croissance. Le jardin donne maintenant plus de couleurs à la cour. »

Qu’est-ce qui a changé dans le jardin ?',
                        'choices' => [
                            ['choice_text' => 'Il était rempli de plantes, mais les élèves l’ont vidé', 'is_correct' => false],
                            ['choice_text' => 'Il était presque vide, mais les élèves l’ont rempli de plantes', 'is_correct' => true],
                            ['choice_text' => 'Il était fermé, mais les élèves l’ont ouvert aux familles', 'is_correct' => false],
                            ['choice_text' => 'Il était très grand, mais les élèves l’ont réduit', 'is_correct' => false],
                        ],
                        'explanation' => 'Le jardin était presque vide, et cette année les élèves y ont planté des fleurs, des tomates et des herbes.',
                    ],
                    [
                        'question' => 'Lisez le texte :

« Le jardin de l’école était autrefois presque vide. Cette année, les élèves ont planté des fleurs, des tomates et quelques herbes aromatiques. Ils arrosent les plantes chaque matin et observent leur croissance. Le jardin donne maintenant plus de couleurs à la cour. »

Quand les élèves arrosent-ils les plantes ?',
                        'choices' => [
                            ['choice_text' => 'Chaque soir', 'is_correct' => false],
                            ['choice_text' => 'Une fois par semaine', 'is_correct' => false],
                            ['choice_text' => 'Une fois par mois', 'is_correct' => false],
                            ['choice_text' => 'Chaque matin', 'is_correct' => true],
                        ],
                        'explanation' => 'Le texte précise qu’ils arrosent les plantes chaque matin.',
                    ],
                    [
                        'question' => 'Lisez le texte :

« Le jardin de l’école était autrefois presque vide. Cette année, les élèves ont planté des fleurs, des tomates et quelques herbes aromatiques. Ils arrosent les plantes chaque matin et observent leur croissance. Le jardin donne maintenant plus de couleurs à la cour. »

Quelles plantes le texte mentionne-t-il ?',
                        'choices' => [
                            ['choice_text' => 'Des fleurs, des tomates et des herbes aromatiques', 'is_correct' => true],
                            ['choice_text' => 'Des roses, des pommes et des arbres fruitiers', 'is_correct' => false],
                            ['choice_text' => 'Du maïs, du riz et des olives', 'is_correct' => false],
                            ['choice_text' => 'Des fleurs, des carottes et des oliviers', 'is_correct' => false],
                        ],
                        'explanation' => 'Le texte cite précisément ces trois catégories de plantes.',
                    ],
                    [
                        'question' => 'Lisez le texte :

« Le jardin de l’école était autrefois presque vide. Cette année, les élèves ont planté des fleurs, des tomates et quelques herbes aromatiques. Ils arrosent les plantes chaque matin et observent leur croissance. Le jardin donne maintenant plus de couleurs à la cour. »

Qu’est-ce qui donne plus de couleurs à la cour ?',
                        'choices' => [
                            ['choice_text' => 'Les murs repeints de l’école', 'is_correct' => false],
                            ['choice_text' => 'Les lampes installées par les élèves', 'is_correct' => false],
                            ['choice_text' => 'Les voitures garées près de l’entrée', 'is_correct' => false],
                            ['choice_text' => 'Les nouvelles plantes du jardin', 'is_correct' => true],
                        ],
                        'explanation' => 'Les fleurs et les autres plantes du jardin ajoutent des couleurs à la cour.',
                    ],
                    [
                        'question' => 'Lisez le texte :

« Le jardin de l’école était autrefois presque vide. Cette année, les élèves ont planté des fleurs, des tomates et quelques herbes aromatiques. Ils arrosent les plantes chaque matin et observent leur croissance. Le jardin donne maintenant plus de couleurs à la cour. »

Quel projet les élèves mènent-ils à l’école ?',
                        'choices' => [
                            ['choice_text' => 'Construire un nouveau bâtiment pour l’école', 'is_correct' => false],
                            ['choice_text' => 'Cultiver et entretenir un jardin à l’école', 'is_correct' => true],
                            ['choice_text' => 'Organiser un voyage scolaire à la campagne', 'is_correct' => false],
                            ['choice_text' => 'Vendre des légumes au marché du quartier', 'is_correct' => false],
                        ],
                        'explanation' => 'Les élèves plantent, arrosent et observent les plantes : ils entretiennent donc un jardin scolaire.',
                    ],
                    [
                        'question' => 'Lisez le texte :

« Le jardin de l’école était autrefois presque vide. Cette année, les élèves ont planté des fleurs, des tomates et quelques herbes aromatiques. Ils arrosent les plantes chaque matin et observent leur croissance. Le jardin donne maintenant plus de couleurs à la cour. »

Que peut-on déduire de la phrase « ils observent leur croissance » ?',
                        'choices' => [
                            ['choice_text' => 'Les élèves ont cessé de s’occuper du jardin', 'is_correct' => false],
                            ['choice_text' => 'Les plantes ont fini de pousser', 'is_correct' => false],
                            ['choice_text' => 'Les élèves suivent régulièrement l’évolution des plantes', 'is_correct' => true],
                            ['choice_text' => 'Les élèves comptent les plantes chaque année', 'is_correct' => false],
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
