<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class FrenchVocabularyBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'french-vocabulary')->firstOrFail();

        $quizzes = [
            [
                'title' => 'Le vocabulaire de la vie quotidienne',
                'description' => 'Reconnaissez et utilisez les mots les plus courants pour parler de la maison, des activités quotidiennes et des objets de tous les jours.',
                'duration' => 15,
                'passing_score' => 50,
                'questions' => [
                    [
                        'question' => 'Quel mot désigne le lieu où l’on dort dans une maison ?',
                        'choices' => [
                            ['choice_text' => 'La cuisine', 'is_correct' => false],
                            ['choice_text' => 'La chambre', 'is_correct' => true],
                            ['choice_text' => 'Le garage', 'is_correct' => false],
                            ['choice_text' => 'Le balcon', 'is_correct' => false],
                        ],
                        'explanation' => 'La chambre est la pièce destinée principalement au sommeil. La cuisine, le garage et le balcon ont d’autres fonctions.',
                    ],
                    [
                        'question' => 'Vous voulez vous asseoir pour travailler. Quel objet utilisez-vous ?',
                        'choices' => [
                            ['choice_text' => 'Une chaise', 'is_correct' => true],
                            ['choice_text' => 'Une assiette', 'is_correct' => false],
                            ['choice_text' => 'Une serviette', 'is_correct' => false],
                            ['choice_text' => 'Une bouteille', 'is_correct' => false],
                        ],
                        'explanation' => 'Une chaise sert à s’asseoir. Une assiette, une serviette et une bouteille sont liées au repas ou à la boisson.',
                    ],
                    [
                        'question' => 'Quel mot désigne l’ouverture vitrée d’une pièce, par laquelle entre la lumière du jour ?',
                        'choices' => [
                            ['choice_text' => 'Mur', 'is_correct' => false],
                            ['choice_text' => 'Plafond', 'is_correct' => false],
                            ['choice_text' => 'Escalier', 'is_correct' => false],
                            ['choice_text' => 'Fenêtre', 'is_correct' => true],
                        ],
                        'explanation' => 'Une fenêtre est une ouverture vitrée qui laisse entrer la lumière et l’air. Le mur, le plafond et l’escalier sont d’autres éléments de la maison.',
                    ],
                    [
                        'question' => 'Quel verbe correspond à l’action de préparer un repas ?',
                        'choices' => [
                            ['choice_text' => 'Ranger', 'is_correct' => false],
                            ['choice_text' => 'Nettoyer', 'is_correct' => false],
                            ['choice_text' => 'Cuisiner', 'is_correct' => true],
                            ['choice_text' => 'Servir', 'is_correct' => false],
                        ],
                        'explanation' => 'Cuisiner, c’est préparer des aliments pour faire un repas. Ranger, nettoyer et servir sont d’autres tâches de la maison.',
                    ],
                    [
                        'question' => 'Quel objet permet de transporter ses livres pour aller en cours ?',
                        'choices' => [
                            ['choice_text' => 'Une étagère', 'is_correct' => false],
                            ['choice_text' => 'Un rideau', 'is_correct' => false],
                            ['choice_text' => 'Un tapis', 'is_correct' => false],
                            ['choice_text' => 'Un sac', 'is_correct' => true],
                        ],
                        'explanation' => 'Un sac sert à transporter des livres ou des cahiers. Une étagère, un rideau et un tapis restent dans la maison.',
                    ],
                    [
                        'question' => 'Quel mot convient dans « Je me brosse les dents dans la ___ » ?',
                        'choices' => [
                            ['choice_text' => 'chambre', 'is_correct' => false],
                            ['choice_text' => 'salle à manger', 'is_correct' => false],
                            ['choice_text' => 'salle de bains', 'is_correct' => true],
                            ['choice_text' => 'cave', 'is_correct' => false],
                        ],
                        'explanation' => 'On se brosse les dents dans la salle de bains, où se trouvent le lavabo et les produits d’hygiène.',
                    ],
                    [
                        'question' => 'Quel objet accroché au mur permet de lire l’heure ?',
                        'choices' => [
                            ['choice_text' => 'Une lampe', 'is_correct' => false],
                            ['choice_text' => 'Un miroir', 'is_correct' => false],
                            ['choice_text' => 'Une horloge', 'is_correct' => true],
                            ['choice_text' => 'Un calendrier', 'is_correct' => false],
                        ],
                        'explanation' => 'Une horloge indique l’heure sur un mur. Une montre fait la même chose, mais on la porte au poignet.',
                    ],
                    [
                        'question' => 'Vous avez soif. Quel objet prenez-vous pour boire de l’eau ?',
                        'choices' => [
                            ['choice_text' => 'Un cahier', 'is_correct' => false],
                            ['choice_text' => 'Un coussin', 'is_correct' => false],
                            ['choice_text' => 'Un stylo', 'is_correct' => false],
                            ['choice_text' => 'Un verre', 'is_correct' => true],
                        ],
                        'explanation' => 'Un verre est un récipient utilisé pour boire. Les autres objets servent à écrire, à s’asseoir ou à prendre des notes.',
                    ],
                    [
                        'question' => 'Quel mot complète naturellement : « Le soir, je mets une ___ sur le lit avant de dormir. »',
                        'choices' => [
                            ['choice_text' => 'nappe', 'is_correct' => false],
                            ['choice_text' => 'couverture', 'is_correct' => true],
                            ['choice_text' => 'fourchette', 'is_correct' => false],
                            ['choice_text' => 'valise', 'is_correct' => false],
                        ],
                        'explanation' => 'Une couverture protège du froid pendant le sommeil. Une nappe, une fourchette et une valise n’ont rien à faire sur un lit.',
                    ],
                    [
                        'question' => 'Quel meuble sert à ranger les vêtements dans une chambre ?',
                        'choices' => [
                            ['choice_text' => 'Une armoire', 'is_correct' => true],
                            ['choice_text' => 'Un fauteuil', 'is_correct' => false],
                            ['choice_text' => 'Un lit', 'is_correct' => false],
                            ['choice_text' => 'Un tabouret', 'is_correct' => false],
                        ],
                        'explanation' => 'Une armoire est un meuble fermé où l’on range les vêtements. Un fauteuil, un lit et un tabouret servent à s’asseoir ou à dormir.',
                    ],
                ],
            ],
            [
                'title' => 'Se déplacer et s’orienter',
                'description' => 'Apprenez à reconnaître le vocabulaire essentiel des déplacements, des lieux publics et des indications simples.',
                'duration' => 20,
                'passing_score' => 55,
                'questions' => [
                    [
                        'question' => 'Vous devez prendre le train. Dans quel lieu allez-vous ?',
                        'choices' => [
                            ['choice_text' => 'À la banque', 'is_correct' => false],
                            ['choice_text' => 'À l’école', 'is_correct' => false],
                            ['choice_text' => 'À la gare', 'is_correct' => true],
                            ['choice_text' => 'Au musée', 'is_correct' => false],
                        ],
                        'explanation' => 'La gare est le lieu où l’on prend le train. Les autres lieux répondent à d’autres besoins.',
                    ],
                    [
                        'question' => 'Quel mot désigne la personne qui conduit un bus ?',
                        'choices' => [
                            ['choice_text' => 'Le passager', 'is_correct' => false],
                            ['choice_text' => 'Le conducteur', 'is_correct' => true],
                            ['choice_text' => 'Le client', 'is_correct' => false],
                            ['choice_text' => 'Le touriste', 'is_correct' => false],
                        ],
                        'explanation' => 'Le conducteur est la personne qui conduit le véhicule. Le passager voyage dans le véhicule sans le conduire.',
                    ],
                    [
                        'question' => 'Dans une ville, quel moyen de transport circule sur des rails ?',
                        'choices' => [
                            ['choice_text' => 'Le vélo', 'is_correct' => false],
                            ['choice_text' => 'Le taxi', 'is_correct' => false],
                            ['choice_text' => 'La moto', 'is_correct' => false],
                            ['choice_text' => 'Le tramway', 'is_correct' => true],
                        ],
                        'explanation' => 'Le tramway circule sur des rails, au cœur des villes. Le vélo, le taxi et la moto roulent sur la chaussée.',
                    ],
                    [
                        'question' => 'Quel mot complète « Tournez à ___ au feu rouge » ?',
                        'choices' => [
                            ['choice_text' => 'gauche', 'is_correct' => true],
                            ['choice_text' => 'demain', 'is_correct' => false],
                            ['choice_text' => 'midi', 'is_correct' => false],
                            ['choice_text' => 'lentement', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans une indication de direction, « à gauche » indique le côté vers lequel il faut tourner.',
                    ],
                    [
                        'question' => 'Une personne vous dit que la banque est « près de la poste ». Que signifie « près de » ?',
                        'choices' => [
                            ['choice_text' => 'À une courte distance', 'is_correct' => true],
                            ['choice_text' => 'Très loin de la poste', 'is_correct' => false],
                            ['choice_text' => 'Au-dessus de la poste', 'is_correct' => false],
                            ['choice_text' => 'Dans une autre ville', 'is_correct' => false],
                        ],
                        'explanation' => '« Près de » signifie qu’un lieu se trouve à courte distance d’un autre.',
                    ],
                    [
                        'question' => 'Vous avez besoin d’argent et vous avez votre carte bancaire. Que cherchez-vous ?',
                        'choices' => [
                            ['choice_text' => 'Un parking', 'is_correct' => false],
                            ['choice_text' => 'Un ascenseur', 'is_correct' => false],
                            ['choice_text' => 'Un distributeur', 'is_correct' => true],
                            ['choice_text' => 'Un compteur', 'is_correct' => false],
                        ],
                        'explanation' => 'Un distributeur automatique permet de retirer de l’argent avec une carte bancaire.',
                    ],
                    [
                        'question' => 'Quel mot désigne une personne qui voyage pour découvrir un autre lieu ?',
                        'choices' => [
                            ['choice_text' => 'Un voisin', 'is_correct' => false],
                            ['choice_text' => 'Un touriste', 'is_correct' => true],
                            ['choice_text' => 'Un boulanger', 'is_correct' => false],
                            ['choice_text' => 'Un professeur', 'is_correct' => false],
                        ],
                        'explanation' => 'Un touriste est une personne qui voyage, souvent pour visiter ou découvrir un lieu.',
                    ],
                    [
                        'question' => 'Un panneau indique « Sortie ». Que faut-il chercher ?',
                        'choices' => [
                            ['choice_text' => 'Le guichet pour acheter du pain', 'is_correct' => false],
                            ['choice_text' => 'Le passage pour quitter le lieu', 'is_correct' => true],
                            ['choice_text' => 'La salle où l’on dort', 'is_correct' => false],
                            ['choice_text' => 'Le bureau du directeur', 'is_correct' => false],
                        ],
                        'explanation' => 'Le mot « sortie » indique le passage ou l’endroit par lequel on quitte un bâtiment ou un espace.',
                    ],
                    [
                        'question' => 'Quel mot est le contraire de « monter » dans le contexte d’un escalier ?',
                        'choices' => [
                            ['choice_text' => 'Descendre', 'is_correct' => true],
                            ['choice_text' => 'Entrer', 'is_correct' => false],
                            ['choice_text' => 'Tourner', 'is_correct' => false],
                            ['choice_text' => 'Traverser', 'is_correct' => false],
                        ],
                        'explanation' => 'Monter signifie aller vers un niveau plus haut, tandis que descendre signifie aller vers un niveau plus bas.',
                    ],
                    [
                        'question' => 'Vous voyez l’indication « tout droit ». Quelle action correspond à cette expression ?',
                        'choices' => [
                            ['choice_text' => 'Faire demi-tour immédiatement', 'is_correct' => false],
                            ['choice_text' => 'Tourner à gauche au carrefour', 'is_correct' => false],
                            ['choice_text' => 'S’arrêter au prochain carrefour', 'is_correct' => false],
                            ['choice_text' => 'Continuer dans la même direction', 'is_correct' => true],
                        ],
                        'explanation' => '« Tout droit » signifie qu’il faut continuer dans la même direction sans tourner.',
                    ],
                ],
            ],
            [
                'title' => 'Vocabulaire des études et du travail',
                'description' => 'Maîtrisez les mots de base utilisés en classe, à l’université et dans les premières situations professionnelles.',
                'duration' => 20,
                'passing_score' => 55,
                'questions' => [
                    [
                        'question' => 'Quel objet utilise-t-on principalement pour écrire sur une feuille ?',
                        'choices' => [
                            ['choice_text' => 'Une gomme', 'is_correct' => false],
                            ['choice_text' => 'Une agrafeuse', 'is_correct' => false],
                            ['choice_text' => 'Un stylo', 'is_correct' => true],
                            ['choice_text' => 'Une règle', 'is_correct' => false],
                        ],
                        'explanation' => 'Un stylo sert à écrire. Une gomme efface, une agrafeuse fixe des feuilles et une règle sert à tracer.',
                    ],
                    [
                        'question' => 'Dans une classe, qui explique la leçon et dirige le cours ?',
                        'choices' => [
                            ['choice_text' => 'Le voisin', 'is_correct' => false],
                            ['choice_text' => 'Le serveur', 'is_correct' => false],
                            ['choice_text' => 'Le passager', 'is_correct' => false],
                            ['choice_text' => 'Le professeur', 'is_correct' => true],
                        ],
                        'explanation' => 'Le professeur est chargé d’enseigner et d’expliquer les notions aux élèves ou aux étudiants.',
                    ],
                    [
                        'question' => 'Quel mot désigne un travail que l’étudiant doit réaliser pour ses études ?',
                        'choices' => [
                            ['choice_text' => 'Un voyage', 'is_correct' => false],
                            ['choice_text' => 'Un devoir', 'is_correct' => true],
                            ['choice_text' => 'Un billet', 'is_correct' => false],
                            ['choice_text' => 'Un déjeuner', 'is_correct' => false],
                        ],
                        'explanation' => 'Un devoir est un travail demandé à un élève ou à un étudiant.',
                    ],
                    [
                        'question' => 'Un étudiant doit parler devant toute la classe. Quelle activité réalise-t-il ?',
                        'choices' => [
                            ['choice_text' => 'Une sieste', 'is_correct' => false],
                            ['choice_text' => 'Une promenade', 'is_correct' => false],
                            ['choice_text' => 'Une dictée', 'is_correct' => false],
                            ['choice_text' => 'Une présentation', 'is_correct' => true],
                        ],
                        'explanation' => 'Une présentation consiste à exposer un sujet devant un public, par exemple une classe.',
                    ],
                    [
                        'question' => 'Quel objet sert à prendre des notes pendant un cours ?',
                        'choices' => [
                            ['choice_text' => 'Un passeport', 'is_correct' => false],
                            ['choice_text' => 'Un ticket', 'is_correct' => false],
                            ['choice_text' => 'Une affiche', 'is_correct' => false],
                            ['choice_text' => 'Un cahier', 'is_correct' => true],
                        ],
                        'explanation' => 'Un cahier peut servir à prendre des notes pendant un cours. Un passeport sert à voyager et un ticket à accéder à un service ou à un transport.',
                    ],
                    [
                        'question' => 'Les employés se retrouvent à 10 h dans une salle pour parler du planning. Comment appelle-t-on ce moment ?',
                        'choices' => [
                            ['choice_text' => 'Une pause', 'is_correct' => false],
                            ['choice_text' => 'Un congé', 'is_correct' => false],
                            ['choice_text' => 'Une réunion', 'is_correct' => true],
                            ['choice_text' => 'Une livraison', 'is_correct' => false],
                        ],
                        'explanation' => 'Une réunion rassemble plusieurs personnes pour discuter, décider ou travailler ensemble.',
                    ],
                    [
                        'question' => 'Quel verbe convient dans « Nous ___ un projet pour lundi » ?',
                        'choices' => [
                            ['choice_text' => 'préparons', 'is_correct' => true],
                            ['choice_text' => 'dormons', 'is_correct' => false],
                            ['choice_text' => 'nageons', 'is_correct' => false],
                            ['choice_text' => 'mangeons', 'is_correct' => false],
                        ],
                        'explanation' => 'Le verbe « préparer » convient au contexte d’un projet à réaliser pour lundi. Les autres verbes ne correspondent pas à cette activité.',
                    ],
                    [
                        'question' => 'Dans une entreprise, quel mot désigne une personne qui y travaille ?',
                        'choices' => [
                            ['choice_text' => 'Un client', 'is_correct' => false],
                            ['choice_text' => 'Un employé', 'is_correct' => true],
                            ['choice_text' => 'Un fournisseur', 'is_correct' => false],
                            ['choice_text' => 'Un visiteur', 'is_correct' => false],
                        ],
                        'explanation' => 'Un employé travaille pour l’entreprise. Un client achète, un fournisseur vend des produits et un visiteur ne fait que passer.',
                    ],
                    [
                        'question' => 'Quel mot désigne une personne qui travaille dans le même bureau que vous ?',
                        'choices' => [
                            ['choice_text' => 'Un voisin', 'is_correct' => false],
                            ['choice_text' => 'Un collègue', 'is_correct' => true],
                            ['choice_text' => 'Un touriste', 'is_correct' => false],
                            ['choice_text' => 'Un passant', 'is_correct' => false],
                        ],
                        'explanation' => 'Un collègue est une personne qui travaille avec vous. Un client achète un produit ou un service, tandis qu’un voisin habite à proximité.',
                    ],
                    [
                        'question' => 'Quel mot convient le mieux dans « Merci de lire les ___ avant de commencer l’exercice » ?',
                        'choices' => [
                            ['choice_text' => 'consignes', 'is_correct' => true],
                            ['choice_text' => 'factures', 'is_correct' => false],
                            ['choice_text' => 'adresses', 'is_correct' => false],
                            ['choice_text' => 'recettes', 'is_correct' => false],
                        ],
                        'explanation' => 'Les consignes donnent les indications à suivre pour réaliser une activité ou un exercice.',
                    ],
                ],
            ],
            [
                'title' => 'Choisir le mot juste selon le contexte',
                'description' => 'Distinguez des mots proches et sélectionnez le terme le plus naturel dans des phrases simples de la vie courante.',
                'duration' => 25,
                'passing_score' => 60,
                'questions' => [
                    [
                        'question' => 'Vous voulez acheter du pain. Quel lieu choisissez-vous ?',
                        'choices' => [
                            ['choice_text' => 'La bibliothèque', 'is_correct' => false],
                            ['choice_text' => 'La poste', 'is_correct' => false],
                            ['choice_text' => 'La boulangerie', 'is_correct' => true],
                            ['choice_text' => 'La mairie', 'is_correct' => false],
                        ],
                        'explanation' => 'La boulangerie est le commerce spécialisé dans le pain et d’autres produits de boulangerie.',
                    ],
                    [
                        'question' => 'Quelle phrase utilise correctement le mot « voisin » ?',
                        'choices' => [
                            ['choice_text' => 'Mon voisin est la pièce où je dors la nuit.', 'is_correct' => false],
                            ['choice_text' => 'Mon voisin est le prix de ce livre scolaire.', 'is_correct' => false],
                            ['choice_text' => 'Mon voisin est un moyen de transport en ville.', 'is_correct' => false],
                            ['choice_text' => 'Mon voisin habite dans l’appartement à côté.', 'is_correct' => true],
                        ],
                        'explanation' => 'Un voisin est une personne qui habite près de vous, souvent dans le même immeuble ou dans une maison voisine.',
                    ],
                    [
                        'question' => 'Vous avez mal à la tête. Quel lieu pouvez-vous visiter pour demander conseil au sujet d’un médicament ?',
                        'choices' => [
                            ['choice_text' => 'La mairie', 'is_correct' => false],
                            ['choice_text' => 'La librairie', 'is_correct' => false],
                            ['choice_text' => 'La pharmacie', 'is_correct' => true],
                            ['choice_text' => 'Le stade', 'is_correct' => false],
                        ],
                        'explanation' => 'La pharmacie est le lieu où l’on trouve des médicaments et où l’on peut demander conseil au pharmacien.',
                    ],
                    [
                        'question' => 'Il pleut beaucoup, prends ton ___ avant de sortir.',
                        'choices' => [
                            ['choice_text' => 'parapluie', 'is_correct' => true],
                            ['choice_text' => 'maillot de bain', 'is_correct' => false],
                            ['choice_text' => 'ventilateur', 'is_correct' => false],
                            ['choice_text' => 'oreiller', 'is_correct' => false],
                        ],
                        'explanation' => 'Un parapluie protège de la pluie. Les autres objets ne servent pas dans cette situation.',
                    ],
                    [
                        'question' => 'Quel verbe convient dans « Après le dîner, je ___ la vaisselle » ?',
                        'choices' => [
                            ['choice_text' => 'conduis', 'is_correct' => false],
                            ['choice_text' => 'lave', 'is_correct' => true],
                            ['choice_text' => 'visite', 'is_correct' => false],
                            ['choice_text' => 'dessine', 'is_correct' => false],
                        ],
                        'explanation' => 'Après un repas, on peut laver la vaisselle. Les autres verbes ne correspondent pas à cette tâche ménagère.',
                    ],
                    [
                        'question' => 'Une personne dit : « Cette chemise est bon marché. » Quelle idée exprime-t-elle ?',
                        'choices' => [
                            ['choice_text' => 'La chemise est très ancienne.', 'is_correct' => false],
                            ['choice_text' => 'La chemise n’est pas chère.', 'is_correct' => true],
                            ['choice_text' => 'La chemise est difficile à porter.', 'is_correct' => false],
                            ['choice_text' => 'La chemise est rouge.', 'is_correct' => false],
                        ],
                        'explanation' => '« Bon marché » signifie qu’un produit a un prix relativement bas. L’expression concerne le prix, pas la couleur ni l’âge du vêtement.',
                    ],
                    [
                        'question' => 'Quel mot est le plus naturel dans « Je suis fatigué, j’ai besoin de ___ » ?',
                        'choices' => [
                            ['choice_text' => 'repos', 'is_correct' => true],
                            ['choice_text' => 'vitesse', 'is_correct' => false],
                            ['choice_text' => 'bruit', 'is_correct' => false],
                            ['choice_text' => 'circulation', 'is_correct' => false],
                        ],
                        'explanation' => 'Quand on est fatigué, on a besoin de repos.',
                    ],
                    [
                        'question' => 'Vous avez perdu vos clés. Où pouvez-vous chercher en premier si vous venez de rentrer chez vous ?',
                        'choices' => [
                            ['choice_text' => 'Dans la piscine municipale', 'is_correct' => false],
                            ['choice_text' => 'Dans une salle de cinéma', 'is_correct' => false],
                            ['choice_text' => 'Près de l’entrée', 'is_correct' => true],
                            ['choice_text' => 'Dans une autre ville', 'is_correct' => false],
                        ],
                        'explanation' => 'Si vous venez de rentrer, l’entrée est un endroit logique où les clés peuvent avoir été posées.',
                    ],
                    [
                        'question' => 'Le bébé est en train de ___, il faut parler doucement.',
                        'choices' => [
                            ['choice_text' => 'dormir', 'is_correct' => true],
                            ['choice_text' => 'courir', 'is_correct' => false],
                            ['choice_text' => 'manger', 'is_correct' => false],
                            ['choice_text' => 'jouer', 'is_correct' => false],
                        ],
                        'explanation' => 'On parle doucement pour ne pas réveiller un bébé qui dort.',
                    ],
                    [
                        'question' => 'Quelle phrase montre une utilisation correcte de « emprunter » dans le contexte d’un livre ?',
                        'choices' => [
                            ['choice_text' => 'Je peux emprunter ce livre à la bibliothèque sans le rendre.', 'is_correct' => false],
                            ['choice_text' => 'Je peux emprunter le soleil après le cours.', 'is_correct' => false],
                            ['choice_text' => 'Je peux emprunter une chaise en la mangeant.', 'is_correct' => false],
                            ['choice_text' => 'Je peux emprunter ce livre à la bibliothèque.', 'is_correct' => true],
                        ],
                        'explanation' => 'Emprunter un livre signifie le prendre temporairement, notamment dans une bibliothèque, avec l’intention de le rendre ensuite.',
                    ],
                ],
            ],
            [
                'title' => 'Synonymes, contraires et nuances simples',
                'description' => 'Enrichissez votre vocabulaire en reconnaissant des mots de sens proche, des contraires courants et quelques nuances utiles.',
                'duration' => 25,
                'passing_score' => 60,
                'questions' => [
                    [
                        'question' => 'Quel mot a un sens proche de « commencer » ?',
                        'choices' => [
                            ['choice_text' => 'Finir', 'is_correct' => false],
                            ['choice_text' => 'Oublier', 'is_correct' => false],
                            ['choice_text' => 'Débuter', 'is_correct' => true],
                            ['choice_text' => 'Fermer', 'is_correct' => false],
                        ],
                        'explanation' => '« Débuter » et « commencer » ont un sens très proche : ils indiquent le début d’une action ou d’une activité.',
                    ],
                    [
                        'question' => 'Quel est le contraire de « facile » ?',
                        'choices' => [
                            ['choice_text' => 'Difficile', 'is_correct' => true],
                            ['choice_text' => 'Rapide', 'is_correct' => false],
                            ['choice_text' => 'Propre', 'is_correct' => false],
                            ['choice_text' => 'Calme', 'is_correct' => false],
                        ],
                        'explanation' => 'Facile et difficile s’opposent lorsqu’on parle du degré de difficulté d’une tâche, d’un exercice ou d’un problème.',
                    ],
                    [
                        'question' => 'Quel mot est le plus proche de « content » dans « Elle est contente de son résultat » ?',
                        'choices' => [
                            ['choice_text' => 'Satisfaite', 'is_correct' => true],
                            ['choice_text' => 'Fâchée', 'is_correct' => false],
                            ['choice_text' => 'Fatiguée', 'is_correct' => false],
                            ['choice_text' => 'Inquiète', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans ce contexte, « satisfaite » est proche de « contente » : les deux mots expriment une impression positive face au résultat.',
                    ],
                    [
                        'question' => 'Quel mot exprime l’idée contraire de « ancien » lorsqu’on parle d’un objet ?',
                        'choices' => [
                            ['choice_text' => 'Lourd', 'is_correct' => false],
                            ['choice_text' => 'Propre', 'is_correct' => false],
                            ['choice_text' => 'Silencieux', 'is_correct' => false],
                            ['choice_text' => 'Nouveau', 'is_correct' => true],
                        ],
                        'explanation' => 'Pour un objet, « ancien » et « nouveau » s’opposent : l’un est vieux, l’autre est récent.',
                    ],
                    [
                        'question' => 'Dans « un petit problème », quel mot peut remplacer « petit » sans changer fortement l’idée ?',
                        'choices' => [
                            ['choice_text' => 'Léger', 'is_correct' => true],
                            ['choice_text' => 'Énorme', 'is_correct' => false],
                            ['choice_text' => 'Dangereux', 'is_correct' => false],
                            ['choice_text' => 'Brillant', 'is_correct' => false],
                        ],
                        'explanation' => '« Léger » dit qu’un problème est peu grave.',
                    ],
                    [
                        'question' => 'Quel couple contient deux mots de sens opposé ?',
                        'choices' => [
                            ['choice_text' => 'rapide / vite', 'is_correct' => false],
                            ['choice_text' => 'maison / logement', 'is_correct' => false],
                            ['choice_text' => 'chaud / froid', 'is_correct' => true],
                            ['choice_text' => 'finir / terminer', 'is_correct' => false],
                        ],
                        'explanation' => 'Chaud et froid expriment des températures opposées. Les autres couples contiennent des mots de sens proche.',
                    ],
                    [
                        'question' => 'Quel mot peut remplacer « regarder » dans « Je regarde un film » ?',
                        'choices' => [
                            ['choice_text' => 'Manger', 'is_correct' => false],
                            ['choice_text' => 'Dormir', 'is_correct' => false],
                            ['choice_text' => 'Acheter', 'is_correct' => false],
                            ['choice_text' => 'Voir', 'is_correct' => true],
                        ],
                        'explanation' => '« Voir » a ici le même sens que « regarder ».',
                    ],
                    [
                        'question' => 'Quel mot est le contraire de « ouvrir » ?',
                        'choices' => [
                            ['choice_text' => 'Entrer', 'is_correct' => false],
                            ['choice_text' => 'Fermer', 'is_correct' => true],
                            ['choice_text' => 'Porter', 'is_correct' => false],
                            ['choice_text' => 'Chercher', 'is_correct' => false],
                        ],
                        'explanation' => 'Ouvrir et fermer sont des actions opposées pour une porte, une fenêtre, un livre ou un autre objet qui peut être fermé.',
                    ],
                    [
                        'question' => 'Quel mot est proche de « calmement » ?',
                        'choices' => [
                            ['choice_text' => 'Brusquement', 'is_correct' => false],
                            ['choice_text' => 'Fortement', 'is_correct' => false],
                            ['choice_text' => 'Rarement', 'is_correct' => false],
                            ['choice_text' => 'Tranquillement', 'is_correct' => true],
                        ],
                        'explanation' => '« Tranquillement » et « calmement » expriment la même manière d’agir, sans agitation.',
                    ],
                    [
                        'question' => 'Quel est le contraire de « arriver » ?',
                        'choices' => [
                            ['choice_text' => 'Venir', 'is_correct' => false],
                            ['choice_text' => 'Partir', 'is_correct' => true],
                            ['choice_text' => 'Marcher', 'is_correct' => false],
                            ['choice_text' => 'Chercher', 'is_correct' => false],
                        ],
                        'explanation' => 'Arriver, c’est venir quelque part ; partir, c’est quitter un lieu.',
                    ],
                ],
            ],
            [
                'title' => 'Mots en contexte : comprendre le sens',
                'description' => 'Utilisez les indices d’une phrase courte pour déduire le sens de mots courants sans vous limiter à la mémorisation isolée.',
                'duration' => 30,
                'passing_score' => 60,
                'questions' => [
                    [
                        'question' => '« Le magasin ferme à 20 h, alors dépêche-toi si tu veux encore acheter quelque chose. » Que signifie ici « dépêche-toi » ?',
                        'choices' => [
                            ['choice_text' => 'Assieds-toi', 'is_correct' => false],
                            ['choice_text' => 'Attends demain', 'is_correct' => false],
                            ['choice_text' => 'Ferme le magasin', 'is_correct' => false],
                            ['choice_text' => 'Fais vite', 'is_correct' => true],
                        ],
                        'explanation' => 'Dans ce contexte, « dépêche-toi » signifie « fais vite », car le magasin va bientôt fermer.',
                    ],
                    [
                        'question' => '« Il a oublié son portefeuille, donc il ne peut pas payer. » Qu’est-ce qu’un portefeuille ?',
                        'choices' => [
                            ['choice_text' => 'Un moyen de transport qui circule en ville', 'is_correct' => false],
                            ['choice_text' => 'Un objet qui sert à garder de l’argent et des cartes', 'is_correct' => true],
                            ['choice_text' => 'Un vêtement que l’on porte pour dormir', 'is_correct' => false],
                            ['choice_text' => 'Un meuble que l’on installe dans la cuisine', 'is_correct' => false],
                        ],
                        'explanation' => 'Le contexte du paiement indique que le portefeuille sert à conserver de l’argent et des cartes.',
                    ],
                    [
                        'question' => '« La route est glissante après la pluie. » Que signifie « glissante » ?',
                        'choices' => [
                            ['choice_text' => 'On peut y tomber facilement', 'is_correct' => true],
                            ['choice_text' => 'Brûlante quand le soleil est très haut', 'is_correct' => false],
                            ['choice_text' => 'Encombrée par un grand nombre de voitures', 'is_correct' => false],
                            ['choice_text' => 'Fabriquée avec du bois et du métal', 'is_correct' => false],
                        ],
                        'explanation' => 'Une route glissante est dangereuse : on peut y perdre l’équilibre et tomber, surtout quand elle est mouillée.',
                    ],
                    [
                        'question' => '« Marie met son manteau avant de sortir. » Quel est le rôle d’un manteau ?',
                        'choices' => [
                            ['choice_text' => 'Pour porter ses livres', 'is_correct' => false],
                            ['choice_text' => 'Pour cuisiner', 'is_correct' => false],
                            ['choice_text' => 'Pour acheter un billet', 'is_correct' => false],
                            ['choice_text' => 'Se protéger du froid', 'is_correct' => true],
                        ],
                        'explanation' => 'Un manteau protège du froid quand on sort.',
                    ],
                    [
                        'question' => '« Le serveur apporte l’addition à la fin du repas. » Que désigne « l’addition » dans ce contexte ?',
                        'choices' => [
                            ['choice_text' => 'Le menu que l’on propose le lendemain', 'is_correct' => false],
                            ['choice_text' => 'Une nouvelle table réservée au fond', 'is_correct' => false],
                            ['choice_text' => 'Le montant à payer au restaurant', 'is_correct' => true],
                            ['choice_text' => 'Le nom du cuisinier de la maison', 'is_correct' => false],
                        ],
                        'explanation' => 'Au restaurant, l’addition indique ce que le client doit payer pour le repas et les consommations.',
                    ],
                    [
                        'question' => '« Nous avons raté le bus ; nous devons attendre le prochain. » Que signifie « rater le bus » ?',
                        'choices' => [
                            ['choice_text' => 'Conduire le bus jusqu’au dernier arrêt', 'is_correct' => false],
                            ['choice_text' => 'Nettoyer le bus avant son départ du dépôt', 'is_correct' => false],
                            ['choice_text' => 'Ne pas réussir à le prendre à temps', 'is_correct' => true],
                            ['choice_text' => 'Acheter un bus pour toute la famille', 'is_correct' => false],
                        ],
                        'explanation' => 'Rater un bus, c’est ne pas réussir à le prendre : il est parti avant l’arrivée de la personne.',
                    ],
                    [
                        'question' => '« Le professeur distribue les feuilles avant l’exercice. » Que fait-il lorsqu’il « distribue » les feuilles ?',
                        'choices' => [
                            ['choice_text' => 'Il les brûle', 'is_correct' => false],
                            ['choice_text' => 'Il les donne aux étudiants', 'is_correct' => true],
                            ['choice_text' => 'Il les cache dans son sac', 'is_correct' => false],
                            ['choice_text' => 'Il les transforme en livres', 'is_correct' => false],
                        ],
                        'explanation' => 'Distribuer des feuilles signifie les donner aux différentes personnes présentes, par exemple aux étudiants d’une classe.',
                    ],
                    [
                        'question' => '« Le bébé pleure depuis dix minutes. Sa mère essaie de le calmer. » Que signifie « calmer » ?',
                        'choices' => [
                            ['choice_text' => 'Faire courir plus vite', 'is_correct' => false],
                            ['choice_text' => 'Préparer un repas', 'is_correct' => false],
                            ['choice_text' => 'Aider quelqu’un à se rassurer', 'is_correct' => true],
                            ['choice_text' => 'Fermer une porte', 'is_correct' => false],
                        ],
                        'explanation' => 'Calmer quelqu’un, c’est l’aider à se rassurer et à être moins agité.',
                    ],
                    [
                        'question' => '« Il fait nuit, prends une lampe. » Quel est le rôle de la lampe ?',
                        'choices' => [
                            ['choice_text' => 'Éclairer le chemin', 'is_correct' => true],
                            ['choice_text' => 'Transporter les bagages', 'is_correct' => false],
                            ['choice_text' => 'Mesurer la vitesse', 'is_correct' => false],
                            ['choice_text' => 'Faire cuire le dîner', 'is_correct' => false],
                        ],
                        'explanation' => 'Une lampe donne de la lumière : elle permet de voir dans l’obscurité.',
                    ],
                    [
                        'question' => '« Le voisin a sonné chez nous parce qu’il avait besoin d’aide. » Que signifie « sonner » dans cette phrase ?',
                        'choices' => [
                            ['choice_text' => 'Fermer les fenêtres de la maison', 'is_correct' => false],
                            ['choice_text' => 'Utiliser la sonnette de la porte', 'is_correct' => true],
                            ['choice_text' => 'Écrire une lettre à la mairie', 'is_correct' => false],
                            ['choice_text' => 'Prendre le bus pour venir', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans ce contexte, sonner signifie utiliser la sonnette d’une porte pour signaler sa présence ou demander qu’on ouvre.',
                    ],
                ],
            ],
            [
                'title' => 'Familles de mots et expressions courantes',
                'description' => 'Identifiez des mots liés par leur formation et mémorisez quelques expressions françaises utiles dans les échanges quotidiens.',
                'duration' => 30,
                'passing_score' => 65,
                'questions' => [
                    [
                        'question' => 'Quel mot appartient à la même famille que « lire » ?',
                        'choices' => [
                            ['choice_text' => 'Bibliothèque', 'is_correct' => false],
                            ['choice_text' => 'Journal', 'is_correct' => false],
                            ['choice_text' => 'Lecteur', 'is_correct' => true],
                            ['choice_text' => 'Écriture', 'is_correct' => false],
                        ],
                        'explanation' => 'Lecteur appartient à la même famille que lire. Les deux mots sont construits autour d’une base liée à l’action de lire.',
                    ],
                    [
                        'question' => 'Quel mot est de la même famille que « travail » ?',
                        'choices' => [
                            ['choice_text' => 'Emploi', 'is_correct' => false],
                            ['choice_text' => 'Travailler', 'is_correct' => true],
                            ['choice_text' => 'Bureau', 'is_correct' => false],
                            ['choice_text' => 'Salaire', 'is_correct' => false],
                        ],
                        'explanation' => 'Travail et travailler sont directement liés par leur formation et leur sens.',
                    ],
                    [
                        'question' => 'Quelle expression signifie que l’on doit attendre un peu ?',
                        'choices' => [
                            ['choice_text' => 'Bonne route et à bientôt.', 'is_correct' => false],
                            ['choice_text' => 'À table, c’est prêt !', 'is_correct' => false],
                            ['choice_text' => 'Bon anniversaire à vous.', 'is_correct' => false],
                            ['choice_text' => 'Un instant, s’il vous plaît.', 'is_correct' => true],
                        ],
                        'explanation' => '« Un instant, s’il vous plaît » demande poliment à quelqu’un d’attendre un court moment.',
                    ],
                    [
                        'question' => 'Dans une conversation, que peut signifier « À bientôt » ?',
                        'choices' => [
                            ['choice_text' => 'Que l’on ne prévoit pas de se revoir', 'is_correct' => false],
                            ['choice_text' => 'Que la personne vient de se réveiller', 'is_correct' => false],
                            ['choice_text' => 'Que le repas est terminé depuis une semaine', 'is_correct' => false],
                            ['choice_text' => 'Que l’on prévoit de se revoir prochainement', 'is_correct' => true],
                        ],
                        'explanation' => '« À bientôt » est une formule utilisée pour prendre congé lorsqu’on pense revoir la personne dans un avenir relativement proche.',
                    ],
                    [
                        'question' => 'Quelle expression convient naturellement après un bon repas ?',
                        'choices' => [
                            ['choice_text' => 'Merci, c’était délicieux.', 'is_correct' => true],
                            ['choice_text' => 'Bonne rentrée scolaire.', 'is_correct' => false],
                            ['choice_text' => 'Bonne arrivée au bureau.', 'is_correct' => false],
                            ['choice_text' => 'Tournez à droite.', 'is_correct' => false],
                        ],
                        'explanation' => '« C’était délicieux » permet de complimenter le repas et « merci » exprime sa gratitude.',
                    ],
                    [
                        'question' => 'Quel mot est de la même famille que « heureux » ?',
                        'choices' => [
                            ['choice_text' => 'Joyeux', 'is_correct' => false],
                            ['choice_text' => 'Heureusement', 'is_correct' => true],
                            ['choice_text' => 'Heure', 'is_correct' => false],
                            ['choice_text' => 'Chanceux', 'is_correct' => false],
                        ],
                        'explanation' => 'Heureux et heureusement sont liés par leur base et leur sens. « Heureusement » est formé à partir de « heureux ».',
                    ],
                    [
                        'question' => 'Quel mot appartient à la même famille que « chanter » ?',
                        'choices' => [
                            ['choice_text' => 'Chanson', 'is_correct' => true],
                            ['choice_text' => 'Musique', 'is_correct' => false],
                            ['choice_text' => 'Mélodie', 'is_correct' => false],
                            ['choice_text' => 'Concert', 'is_correct' => false],
                        ],
                        'explanation' => 'Chanson et chanter sont liés par leur formation et leur sens. Les autres mots appartiennent au même domaine musical, mais pas à la même famille.',
                    ],
                    [
                        'question' => 'Quelqu’un vous a rendu service. Quelle formule est naturelle pour le remercier ?',
                        'choices' => [
                            ['choice_text' => 'Tournez au prochain magasin.', 'is_correct' => false],
                            ['choice_text' => 'Bonne chance pour le trajet.', 'is_correct' => false],
                            ['choice_text' => 'Bonne arrivée à la gare.', 'is_correct' => false],
                            ['choice_text' => 'Merci beaucoup, c’est gentil.', 'is_correct' => true],
                        ],
                        'explanation' => '« Merci beaucoup, c’est gentil » remercie directement la personne pour son geste.',
                    ],
                    [
                        'question' => 'Quelle expression utilise-t-on couramment avant de commencer à manger ?',
                        'choices' => [
                            ['choice_text' => 'Bonne nuit !', 'is_correct' => false],
                            ['choice_text' => 'À demain !', 'is_correct' => false],
                            ['choice_text' => 'Bon appétit !', 'is_correct' => true],
                            ['choice_text' => 'Bon courage pour le trajet !', 'is_correct' => false],
                        ],
                        'explanation' => '« Bon appétit ! » est une formule courante utilisée avant ou au début d’un repas.',
                    ],
                    [
                        'question' => 'Quel mot appartient à la même famille que « jardin » ?',
                        'choices' => [
                            ['choice_text' => 'Fleur', 'is_correct' => false],
                            ['choice_text' => 'Jardinier', 'is_correct' => true],
                            ['choice_text' => 'Terrasse', 'is_correct' => false],
                            ['choice_text' => 'Pelouse', 'is_correct' => false],
                        ],
                        'explanation' => 'Jardinier est construit sur « jardin » : c’est la personne qui s’occupe d’un jardin.',
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
