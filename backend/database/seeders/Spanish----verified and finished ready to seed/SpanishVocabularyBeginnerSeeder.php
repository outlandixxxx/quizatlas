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
                'title' => 'Vocabulaire espagnol du quotidien',
                'description' => 'Construis une base pratique de mots espagnols du quotidien pour les objets, les lieux et les activités courantes.',
                'duration' => 15,
                'passing_score' => 50,
                'questions' => [
                    [
                        'question' => 'Tu es dans un café hispanophone et tu veux demander un verre d’eau. Quel mot te faut-il ?',
                        'choices' => [
                            ['choice_text' => 'puerta', 'is_correct' => false],
                            ['choice_text' => 'agua', 'is_correct' => true],
                            ['choice_text' => 'mesa', 'is_correct' => false],
                            ['choice_text' => 'ventana', 'is_correct' => false],
                        ],
                        'explanation' => 'Agua signifie « eau », donc « un vaso de agua » est un verre d’eau.',
                    ],
                    [
                        'question' => 'Marta quitte sa maison et ferme la ______ derrière elle. Quel mot convient ?',
                        'choices' => [
                            ['choice_text' => 'cuchara', 'is_correct' => false],
                            ['choice_text' => 'camisa', 'is_correct' => false],
                            ['choice_text' => 'puerta', 'is_correct' => true],
                            ['choice_text' => 'zapato', 'is_correct' => false],
                        ],
                        'explanation' => 'Puerta signifie « porte », l’objet que Marta ferme en partant.',
                    ],
                    [
                        'question' => 'Quel mot espagnol utiliserais-tu pour une table dans une salle de classe ou un restaurant ?',
                        'choices' => [
                            ['choice_text' => 'mesa', 'is_correct' => true],
                            ['choice_text' => 'silla', 'is_correct' => false],
                            ['choice_text' => 'pared', 'is_correct' => false],
                            ['choice_text' => 'techo', 'is_correct' => false],
                        ],
                        'explanation' => 'Mesa signifie « table ». Une silla est une chaise, donc ce mot ne convient pas à la phrase.',
                    ],
                    [
                        'question' => 'Un ami te dit : « Tengo un libro nuevo. » À quoi renvoie l’objet mentionné ?',
                        'choices' => [
                            ['choice_text' => 'une clé', 'is_correct' => false],
                            ['choice_text' => 'un téléphone', 'is_correct' => false],
                            ['choice_text' => 'un portefeuille', 'is_correct' => false],
                            ['choice_text' => 'un livre', 'is_correct' => true],
                        ],
                        'explanation' => 'Libro signifie « livre ». La phrase dit que la personne a un nouveau livre.',
                    ],
                    [
                        'question' => 'Tu vois le panneau « Entrada » sur un bâtiment. Que t’indique-t-il ?',
                        'choices' => [
                            ['choice_text' => 'Entrée', 'is_correct' => true],
                            ['choice_text' => 'Sortie', 'is_correct' => false],
                            ['choice_text' => 'Toilettes', 'is_correct' => false],
                            ['choice_text' => 'Cuisine', 'is_correct' => false],
                        ],
                        'explanation' => 'Entrada signifie « entrée », l’endroit par lequel on pénètre dans un bâtiment.',
                    ],
                    [
                        'question' => 'Luis veut s’asseoir. Quel mot désigne ce qu’il recherche probablement ?',
                        'choices' => [
                            ['choice_text' => 'reloj', 'is_correct' => false],
                            ['choice_text' => 'cuchillo', 'is_correct' => false],
                            ['choice_text' => 'cuaderno', 'is_correct' => false],
                            ['choice_text' => 'silla', 'is_correct' => true],
                        ],
                        'explanation' => 'Silla signifie « chaise », ce dont Luis a besoin pour s’asseoir.',
                    ],
                    [
                        'question' => 'Quelqu’un dit : « Mi teléfono está en la mochila. » Où est le téléphone ?',
                        'choices' => [
                            ['choice_text' => 'Sur la table', 'is_correct' => false],
                            ['choice_text' => 'Dans le sac à dos', 'is_correct' => true],
                            ['choice_text' => 'Sous le lit', 'is_correct' => false],
                            ['choice_text' => 'Dans la cuisine', 'is_correct' => false],
                        ],
                        'explanation' => 'Mochila signifie « sac à dos », donc le téléphone est dans le sac à dos.',
                    ],
                    [
                        'question' => 'À la maison, ta mère te demande d’ouvrir la ______ parce que la pièce est trop sombre. De quoi parle-t-elle probablement ?',
                        'choices' => [
                            ['choice_text' => 'zapato', 'is_correct' => false],
                            ['choice_text' => 'plato', 'is_correct' => false],
                            ['choice_text' => 'ventana', 'is_correct' => true],
                            ['choice_text' => 'camisa', 'is_correct' => false],
                        ],
                        'explanation' => 'Ventana signifie « fenêtre ». Ouvrir une fenêtre peut laisser entrer plus de lumière dans une pièce.',
                    ],
                    [
                        'question' => 'Un apprenant confond « cama » et « casa ». Quelle paire donne les sens corrects ?',
                        'choices' => [
                            ['choice_text' => 'lit / maison', 'is_correct' => true],
                            ['choice_text' => 'maison / lit', 'is_correct' => false],
                            ['choice_text' => 'chaise / pièce', 'is_correct' => false],
                            ['choice_text' => 'pièce / chaise', 'is_correct' => false],
                        ],
                        'explanation' => 'Cama signifie « lit », tandis que casa signifie « maison ». Ils se ressemblent mais ont des sens différents.',
                    ],
                    [
                        'question' => 'Tu dois noter un numéro de téléphone pendant un cours. Quel objet serait le choix naturel ?',
                        'choices' => [
                            ['choice_text' => 'almohada', 'is_correct' => false],
                            ['choice_text' => 'espejo', 'is_correct' => false],
                            ['choice_text' => 'cuaderno', 'is_correct' => true],
                            ['choice_text' => 'tenedor', 'is_correct' => false],
                        ],
                        'explanation' => 'Cuaderno signifie « cahier », un endroit pratique pour écrire des notes ou des numéros.',
                    ],
                    [
                        'question' => 'Quel mot complète le mieux cette phrase : « Las llaves están sobre la ______. » ?',
                        'choices' => [
                            ['choice_text' => 'camisa', 'is_correct' => false],
                            ['choice_text' => 'cama', 'is_correct' => false],
                            ['choice_text' => 'puerta', 'is_correct' => false],
                            ['choice_text' => 'mesa', 'is_correct' => true],
                        ],
                        'explanation' => 'Mesa signifie « table », donc la phrase dit que les clés sont sur la table.',
                    ],
                    [
                        'question' => 'Ta chambre d’hôtel n’a pas de « toalla ». Quel objet te manque-t-il ?',
                        'choices' => [
                            ['choice_text' => 'Couverture', 'is_correct' => false],
                            ['choice_text' => 'Serviette', 'is_correct' => true],
                            ['choice_text' => 'Oreiller', 'is_correct' => false],
                            ['choice_text' => 'Lampe', 'is_correct' => false],
                        ],
                        'explanation' => 'Toalla signifie « serviette », l’objet normalement utilisé après s’être lavé.',
                    ],
                ],
            ],
            [
                'title' => 'La nourriture et les boissons en espagnol',
                'description' => 'Pratique le vocabulaire courant de la nourriture et des boissons et apprends à reconnaître des mots dans des situations simples de restaurant et de shopping.',
                'duration' => 20,
                'passing_score' => 60,
                'questions' => [
                    [
                        'question' => 'Tu commandes un petit-déjeuner et tu veux du pain. Quel mot dois-tu chercher sur le menu ?',
                        'choices' => [
                            ['choice_text' => 'pan', 'is_correct' => true],
                            ['choice_text' => 'pescado', 'is_correct' => false],
                            ['choice_text' => 'queso', 'is_correct' => false],
                            ['choice_text' => 'arroz', 'is_correct' => false],
                        ],
                        'explanation' => 'Pan signifie « pain ».',
                    ],
                    [
                        'question' => 'Une recette demande « dos huevos ». Que dois-tu ajouter ?',
                        'choices' => [
                            ['choice_text' => 'Deux pommes', 'is_correct' => false],
                            ['choice_text' => 'Deux œufs', 'is_correct' => true],
                            ['choice_text' => 'Deux oignons', 'is_correct' => false],
                            ['choice_text' => 'Deux gâteaux', 'is_correct' => false],
                        ],
                        'explanation' => 'Huevo signifie « œuf », et huevos en est le pluriel.',
                    ],
                    [
                        'question' => 'Quel mot espagnol signifie « lait » ?',
                        'choices' => [
                            ['choice_text' => 'sal', 'is_correct' => false],
                            ['choice_text' => 'carne', 'is_correct' => false],
                            ['choice_text' => 'leche', 'is_correct' => true],
                            ['choice_text' => 'mantequilla', 'is_correct' => false],
                        ],
                        'explanation' => 'Leche est le mot espagnol standard pour le lait.',
                    ],
                    [
                        'question' => 'Tu fais tes courses de fruits et tu vois « manzanas ». Que regardes-tu ?',
                        'choices' => [
                            ['choice_text' => 'Des oranges', 'is_correct' => false],
                            ['choice_text' => 'Des pêches', 'is_correct' => false],
                            ['choice_text' => 'Des raisins', 'is_correct' => false],
                            ['choice_text' => 'Des pommes', 'is_correct' => true],
                        ],
                        'explanation' => 'Manzana signifie « pomme », et manzanas signifie « pommes ».',
                    ],
                    [
                        'question' => 'Un serveur demande : « ¿Café o té? » Quelles deux boissons propose-t-il ?',
                        'choices' => [
                            ['choice_text' => 'Café ou thé', 'is_correct' => true],
                            ['choice_text' => 'Lait ou eau', 'is_correct' => false],
                            ['choice_text' => 'Jus ou vin', 'is_correct' => false],
                            ['choice_text' => 'Soupe ou café', 'is_correct' => false],
                        ],
                        'explanation' => 'Café est le café et té est le thé.',
                    ],
                    [
                        'question' => 'Quel aliment serait le plus naturellement servi avec un couteau au dîner ?',
                        'choices' => [
                            ['choice_text' => 'agua', 'is_correct' => false],
                            ['choice_text' => 'carne', 'is_correct' => true],
                            ['choice_text' => 'azúcar', 'is_correct' => false],
                            ['choice_text' => 'sal', 'is_correct' => false],
                        ],
                        'explanation' => 'Carne signifie « viande », que l’on coupe généralement avec un couteau.',
                    ],
                    [
                        'question' => 'Sara dit : « No quiero azúcar en mi café. » Qu’est-ce qu’elle veut éviter ?',
                        'choices' => [
                            ['choice_text' => 'Le sel', 'is_correct' => false],
                            ['choice_text' => 'Le lait', 'is_correct' => false],
                            ['choice_text' => 'Le sucre', 'is_correct' => true],
                            ['choice_text' => 'Le pain', 'is_correct' => false],
                        ],
                        'explanation' => 'Azúcar signifie « sucre », donc Sara ne veut pas de sucre dans son café.',
                    ],
                    [
                        'question' => 'Un enfant demande « jugo de naranja ». Quelle boisson est-ce ?',
                        'choices' => [
                            ['choice_text' => 'Du jus de pomme', 'is_correct' => false],
                            ['choice_text' => 'Un soda à l’orange', 'is_correct' => false],
                            ['choice_text' => 'Du thé au citron', 'is_correct' => false],
                            ['choice_text' => 'Du jus d’orange', 'is_correct' => true],
                        ],
                        'explanation' => 'Naranja signifie « orange », donc jugo de naranja est du jus d’orange.',
                    ],
                    [
                        'question' => 'Quel mot t’attendrais-tu à voir sur un menu près des plats végétariens ?',
                        'choices' => [
                            ['choice_text' => 'pescado', 'is_correct' => false],
                            ['choice_text' => 'pollo', 'is_correct' => false],
                            ['choice_text' => 'jamón', 'is_correct' => false],
                            ['choice_text' => 'verduras', 'is_correct' => true],
                        ],
                        'explanation' => 'Verduras signifie « légumes », ce qui en fait le choix naturel pour un plat à base de légumes.',
                    ],
                    [
                        'question' => 'Un client lit « queso » sur une étiquette. Quel produit est-ce ?',
                        'choices' => [
                            ['choice_text' => 'Beurre', 'is_correct' => false],
                            ['choice_text' => 'Riz', 'is_correct' => false],
                            ['choice_text' => 'Fromage', 'is_correct' => true],
                            ['choice_text' => 'Crème', 'is_correct' => false],
                        ],
                        'explanation' => 'Queso signifie « fromage ».',
                    ],
                    [
                        'question' => 'Tu as très soif après une marche. Quelle commande a le plus de sens ?',
                        'choices' => [
                            ['choice_text' => 'una taza de arroz', 'is_correct' => false],
                            ['choice_text' => 'un vaso de agua', 'is_correct' => true],
                            ['choice_text' => 'un plato de pan', 'is_correct' => false],
                            ['choice_text' => 'una botella de sal', 'is_correct' => false],
                        ],
                        'explanation' => 'Un vaso de agua signifie « un verre d’eau », ce qui convient à la situation.',
                    ],
                    [
                        'question' => 'Quelle paire appartient entièrement à la catégorie des fruits ?',
                        'choices' => [
                            ['choice_text' => 'pera et uva', 'is_correct' => true],
                            ['choice_text' => 'pan et arroz', 'is_correct' => false],
                            ['choice_text' => 'queso et leche', 'is_correct' => false],
                            ['choice_text' => 'pollo et pescado', 'is_correct' => false],
                        ],
                        'explanation' => 'Pera signifie « poire » et uva signifie « raisin » ; les deux sont des fruits.',
                    ],
                    [
                        'question' => 'Une recette dit « añade una cebolla ». Que dois-tu ajouter ?',
                        'choices' => [
                            ['choice_text' => 'Une carotte', 'is_correct' => false],
                            ['choice_text' => 'Un oignon', 'is_correct' => true],
                            ['choice_text' => 'Une pomme de terre', 'is_correct' => false],
                            ['choice_text' => 'Une tomate', 'is_correct' => false],
                        ],
                        'explanation' => 'Cebolla signifie « oignon ».',
                    ],
                    [
                        'question' => 'Si quelqu’un dit « La sopa está caliente », de quoi parle-t-il ?',
                        'choices' => [
                            ['choice_text' => 'La soupe est froide', 'is_correct' => false],
                            ['choice_text' => 'La soupe est sucrée', 'is_correct' => false],
                            ['choice_text' => 'La soupe est chère', 'is_correct' => false],
                            ['choice_text' => 'La soupe est chaude', 'is_correct' => true],
                        ],
                        'explanation' => 'Caliente signifie « chaud », donc la phrase dit que la soupe est chaude.',
                    ],
                    [
                        'question' => 'Quel mot serait utile pour demander un dessert sucré dans une boulangerie ?',
                        'choices' => [
                            ['choice_text' => 'pescado', 'is_correct' => false],
                            ['choice_text' => 'tenedor', 'is_correct' => false],
                            ['choice_text' => 'pastel', 'is_correct' => true],
                            ['choice_text' => 'sal', 'is_correct' => false],
                        ],
                        'explanation' => 'Pastel peut signifier « gâteau » ou une pâtisserie sucrée similaire, selon le contexte.',
                    ],
                ],
            ],
            [
                'title' => 'Les personnes, la famille et les descriptions',
                'description' => 'Apprends le vocabulaire quotidien pour les membres de la famille, les personnes et de simples descriptions de qui est quelqu’un.',
                'duration' => 15,
                'passing_score' => 55,
                'questions' => [
                    [
                        'question' => 'Ana présente « mi hermano ». De qui parle-t-elle ?',
                        'choices' => [
                            ['choice_text' => 'Son cousin', 'is_correct' => false],
                            ['choice_text' => 'Son père', 'is_correct' => false],
                            ['choice_text' => 'Son oncle', 'is_correct' => false],
                            ['choice_text' => 'Son frère', 'is_correct' => true],
                        ],
                        'explanation' => 'Hermano signifie « frère ».',
                    ],
                    [
                        'question' => 'Quel mot espagnol signifie « mère » ?',
                        'choices' => [
                            ['choice_text' => 'hija', 'is_correct' => false],
                            ['choice_text' => 'madre', 'is_correct' => true],
                            ['choice_text' => 'tía', 'is_correct' => false],
                            ['choice_text' => 'prima', 'is_correct' => false],
                        ],
                        'explanation' => 'Madre signifie « mère ».',
                    ],
                    [
                        'question' => 'Carlos dit : « Mi hermana vive en Madrid. » Qui vit à Madrid ?',
                        'choices' => [
                            ['choice_text' => 'Sa sœur', 'is_correct' => true],
                            ['choice_text' => 'Sa mère', 'is_correct' => false],
                            ['choice_text' => 'Sa tante', 'is_correct' => false],
                            ['choice_text' => 'Sa fille', 'is_correct' => false],
                        ],
                        'explanation' => 'Hermana est la forme féminine de hermano, qui signifie « sœur ».',
                    ],
                    [
                        'question' => 'Ton ami dit « mi abuelo ». De quel membre de la famille s’agit-il ?',
                        'choices' => [
                            ['choice_text' => 'Petit-fils', 'is_correct' => false],
                            ['choice_text' => 'Père', 'is_correct' => false],
                            ['choice_text' => 'Grand-père', 'is_correct' => true],
                            ['choice_text' => 'Oncle', 'is_correct' => false],
                        ],
                        'explanation' => 'Abuelo signifie « grand-père ».',
                    ],
                    [
                        'question' => 'Quel mot décrit une personne qui n’est pas mariée ?',
                        'choices' => [
                            ['choice_text' => 'soltero', 'is_correct' => true],
                            ['choice_text' => 'casado', 'is_correct' => false],
                            ['choice_text' => 'padre', 'is_correct' => false],
                            ['choice_text' => 'vecino', 'is_correct' => false],
                        ],
                        'explanation' => 'Soltero signifie « célibataire » pour un homme ; soltera en est la forme féminine.',
                    ],
                    [
                        'question' => 'María dit « Esta es mi hija. » Qui est la jeune fille ?',
                        'choices' => [
                            ['choice_text' => 'Sa sœur', 'is_correct' => false],
                            ['choice_text' => 'Sa fille', 'is_correct' => true],
                            ['choice_text' => 'Sa nièce', 'is_correct' => false],
                            ['choice_text' => 'Sa mère', 'is_correct' => false],
                        ],
                        'explanation' => 'Hija signifie « fille ».',
                    ],
                    [
                        'question' => 'Une photo de famille montre un « tío ». Quel lien cette personne a-t-elle avec le locuteur ?',
                        'choices' => [
                            ['choice_text' => 'Neveu', 'is_correct' => false],
                            ['choice_text' => 'Frère', 'is_correct' => false],
                            ['choice_text' => 'Oncle', 'is_correct' => true],
                            ['choice_text' => 'Grand-père', 'is_correct' => false],
                        ],
                        'explanation' => 'Tío signifie « oncle ».',
                    ],
                    [
                        'question' => 'Quel mot utiliserais-tu pour un voisin plutôt qu’un membre de la famille ?',
                        'choices' => [
                            ['choice_text' => 'primo', 'is_correct' => false],
                            ['choice_text' => 'sobrino', 'is_correct' => false],
                            ['choice_text' => 'abuela', 'is_correct' => false],
                            ['choice_text' => 'vecino', 'is_correct' => true],
                        ],
                        'explanation' => 'Vecino signifie « voisin ». Les autres mots sont des termes de famille.',
                    ],
                    [
                        'question' => 'Luis décrit son ami comme « amable ». Quel genre de personne est-il ?',
                        'choices' => [
                            ['choice_text' => 'Gentil ou amical', 'is_correct' => true],
                            ['choice_text' => 'Très jeune', 'is_correct' => false],
                            ['choice_text' => 'Très grand', 'is_correct' => false],
                            ['choice_text' => 'Très bruyant', 'is_correct' => false],
                        ],
                        'explanation' => 'Amable décrit quelqu’un comme gentil, agréable ou amical.',
                    ],
                    [
                        'question' => 'Un débutant apprend « padre » et « madre ». Quel lien ces mots désignent-ils ensemble ?',
                        'choices' => [
                            ['choice_text' => 'Les frères et sœurs', 'is_correct' => false],
                            ['choice_text' => 'Les grands-parents', 'is_correct' => false],
                            ['choice_text' => 'Les parents', 'is_correct' => true],
                            ['choice_text' => 'Les enfants', 'is_correct' => false],
                        ],
                        'explanation' => 'Padre signifie père et madre signifie mère, donc ensemble ils désignent les parents.',
                    ],
                ],
            ],
            [
                'title' => 'Les nombres, les dates et les mots de temps',
                'description' => 'Pratique le vocabulaire de base des nombres, des jours, des mois, des dates et des expressions de temps courantes utilisées dans l’espagnol quotidien.',
                'duration' => 25,
                'passing_score' => 60,
                'questions' => [
                    [
                        'question' => 'Quel nombre correspond à « ocho » ?',
                        'choices' => [
                            ['choice_text' => '6', 'is_correct' => false],
                            ['choice_text' => '9', 'is_correct' => false],
                            ['choice_text' => '10', 'is_correct' => false],
                            ['choice_text' => '8', 'is_correct' => true],
                        ],
                        'explanation' => 'Ocho signifie « huit ».',
                    ],
                    [
                        'question' => 'Tu vois « quince » sur un formulaire qui demande ton âge. De quel nombre s’agit-il ?',
                        'choices' => [
                            ['choice_text' => '14', 'is_correct' => false],
                            ['choice_text' => '15', 'is_correct' => true],
                            ['choice_text' => '16', 'is_correct' => false],
                            ['choice_text' => '50', 'is_correct' => false],
                        ],
                        'explanation' => 'Quince signifie « quinze ».',
                    ],
                    [
                        'question' => 'Quel mot espagnol signifie « lundi » ?',
                        'choices' => [
                            ['choice_text' => 'jueves', 'is_correct' => false],
                            ['choice_text' => 'martes', 'is_correct' => false],
                            ['choice_text' => 'lunes', 'is_correct' => true],
                            ['choice_text' => 'domingo', 'is_correct' => false],
                        ],
                        'explanation' => 'Lunes signifie lundi.',
                    ],
                    [
                        'question' => 'Une réunion est prévue pour « viernes ». Quel jour est-ce ?',
                        'choices' => [
                            ['choice_text' => 'Vendredi', 'is_correct' => true],
                            ['choice_text' => 'Mercredi', 'is_correct' => false],
                            ['choice_text' => 'Samedi', 'is_correct' => false],
                            ['choice_text' => 'Mardi', 'is_correct' => false],
                        ],
                        'explanation' => 'Viernes signifie vendredi.',
                    ],
                    [
                        'question' => 'Quel mois vient après « marzo » ?',
                        'choices' => [
                            ['choice_text' => 'mayo', 'is_correct' => false],
                            ['choice_text' => 'febrero', 'is_correct' => false],
                            ['choice_text' => 'junio', 'is_correct' => false],
                            ['choice_text' => 'abril', 'is_correct' => true],
                        ],
                        'explanation' => 'Abril, avril, vient immédiatement après marzo, mars.',
                    ],
                    [
                        'question' => 'Quel mois est « diciembre » ?',
                        'choices' => [
                            ['choice_text' => 'Décembre', 'is_correct' => true],
                            ['choice_text' => 'Octobre', 'is_correct' => false],
                            ['choice_text' => 'Novembre', 'is_correct' => false],
                            ['choice_text' => 'Janvier', 'is_correct' => false],
                        ],
                        'explanation' => 'Diciembre signifie décembre.',
                    ],
                    [
                        'question' => 'Un billet indique « hoy ». À quel jour cela fait-il référence ?',
                        'choices' => [
                            ['choice_text' => 'Demain', 'is_correct' => false],
                            ['choice_text' => 'Aujourd’hui', 'is_correct' => true],
                            ['choice_text' => 'Hier', 'is_correct' => false],
                            ['choice_text' => 'La semaine prochaine', 'is_correct' => false],
                        ],
                        'explanation' => 'Hoy signifie « aujourd’hui ».',
                    ],
                    [
                        'question' => 'Ton ami dit : « Nos vemos mañana. » Quand allez-vous vous retrouver ?',
                        'choices' => [
                            ['choice_text' => 'Aujourd’hui', 'is_correct' => false],
                            ['choice_text' => 'Hier', 'is_correct' => false],
                            ['choice_text' => 'Demain', 'is_correct' => true],
                            ['choice_text' => 'La semaine dernière', 'is_correct' => false],
                        ],
                        'explanation' => 'Mañana signifie « demain ».',
                    ],
                    [
                        'question' => 'Quel mot signifie « hier » ?',
                        'choices' => [
                            ['choice_text' => 'ayer', 'is_correct' => true],
                            ['choice_text' => 'ahora', 'is_correct' => false],
                            ['choice_text' => 'pronto', 'is_correct' => false],
                            ['choice_text' => 'siempre', 'is_correct' => false],
                        ],
                        'explanation' => 'Ayer signifie « hier ».',
                    ],
                    [
                        'question' => 'Un magasin est ouvert « por la mañana ». À quel moment est-ce ?',
                        'choices' => [
                            ['choice_text' => 'Le soir', 'is_correct' => false],
                            ['choice_text' => 'L’après-midi', 'is_correct' => false],
                            ['choice_text' => 'À minuit', 'is_correct' => false],
                            ['choice_text' => 'Le matin', 'is_correct' => true],
                        ],
                        'explanation' => 'Por la mañana signifie « le matin ».',
                    ],
                    [
                        'question' => 'Si quelqu’un dit « Son las dos », quelle heure indique-t-il ?',
                        'choices' => [
                            ['choice_text' => '12 heures', 'is_correct' => false],
                            ['choice_text' => '4 heures', 'is_correct' => false],
                            ['choice_text' => '2 heures', 'is_correct' => true],
                            ['choice_text' => '10 heures', 'is_correct' => false],
                        ],
                        'explanation' => 'Son las dos indique littéralement qu’il est deux heures.',
                    ],
                    [
                        'question' => 'Quelle expression signifie « la nuit » ?',
                        'choices' => [
                            ['choice_text' => 'por la tarde', 'is_correct' => false],
                            ['choice_text' => 'por la noche', 'is_correct' => true],
                            ['choice_text' => 'por la mañana', 'is_correct' => false],
                            ['choice_text' => 'al mediodía', 'is_correct' => false],
                        ],
                        'explanation' => 'Por la noche signifie « la nuit ».',
                    ],
                    [
                        'question' => 'Que décrit « media hora » ?',
                        'choices' => [
                            ['choice_text' => 'Une heure complète', 'is_correct' => false],
                            ['choice_text' => 'Une demi-heure', 'is_correct' => true],
                            ['choice_text' => 'Un quart d’heure', 'is_correct' => false],
                            ['choice_text' => 'Deux heures', 'is_correct' => false],
                        ],
                        'explanation' => 'Media hora signifie « une demi-heure ».',
                    ],
                    [
                        'question' => 'Un cours commence « a las nueve ». À quelle heure commence-t-il ?',
                        'choices' => [
                            ['choice_text' => 'À sept heures', 'is_correct' => false],
                            ['choice_text' => 'À dix heures', 'is_correct' => false],
                            ['choice_text' => 'À neuf heures', 'is_correct' => true],
                            ['choice_text' => 'À midi', 'is_correct' => false],
                        ],
                        'explanation' => 'A las nueve signifie « à neuf heures ».',
                    ],
                    [
                        'question' => 'Quel jour vient juste avant domingo ?',
                        'choices' => [
                            ['choice_text' => 'lunes', 'is_correct' => false],
                            ['choice_text' => 'viernes', 'is_correct' => false],
                            ['choice_text' => 'martes', 'is_correct' => false],
                            ['choice_text' => 'sábado', 'is_correct' => true],
                        ],
                        'explanation' => 'Sábado signifie samedi, le jour avant dimanche.',
                    ],
                    [
                        'question' => 'Tu lis un planning et tu vois « antes ». Quelle relation temporelle exprime-t-il ?',
                        'choices' => [
                            ['choice_text' => 'Avant', 'is_correct' => true],
                            ['choice_text' => 'Après', 'is_correct' => false],
                            ['choice_text' => 'Pendant', 'is_correct' => false],
                            ['choice_text' => 'Entre', 'is_correct' => false],
                        ],
                        'explanation' => 'Antes signifie « avant ».',
                    ],
                    [
                        'question' => 'Quel mot signifie « plus tard » dans une phrase simple du quotidien ?',
                        'choices' => [
                            ['choice_text' => 'nunca', 'is_correct' => false],
                            ['choice_text' => 'ayer', 'is_correct' => false],
                            ['choice_text' => 'temprano', 'is_correct' => false],
                            ['choice_text' => 'después', 'is_correct' => true],
                        ],
                        'explanation' => 'Después signifie « après » ou « plus tard », selon le contexte.',
                    ],
                    [
                        'question' => 'Une amie dit : « Tengo diez minutos. » Combien de temps a-t-elle ?',
                        'choices' => [
                            ['choice_text' => 'Dix heures', 'is_correct' => false],
                            ['choice_text' => 'Vingt minutes', 'is_correct' => false],
                            ['choice_text' => 'Dix minutes', 'is_correct' => true],
                            ['choice_text' => 'Une minute', 'is_correct' => false],
                        ],
                        'explanation' => 'Diez signifie dix, et minutos signifie minutes.',
                    ],
                ],
            ],
            [
                'title' => 'La maison, l’école et le travail',
                'description' => 'Utilise un vocabulaire pratique pour les pièces, le matériel scolaire, les lieux de travail et les tâches simples du quotidien.',
                'duration' => 20,
                'passing_score' => 60,
                'questions' => [
                    [
                        'question' => 'Quel mot espagnol signifie « cuisine » ?',
                        'choices' => [
                            ['choice_text' => 'oficina', 'is_correct' => false],
                            ['choice_text' => 'biblioteca', 'is_correct' => false],
                            ['choice_text' => 'cocina', 'is_correct' => true],
                            ['choice_text' => 'baño', 'is_correct' => false],
                        ],
                        'explanation' => 'Cocina signifie « cuisine ».',
                    ],
                    [
                        'question' => 'Une élève a besoin d’emprunter un livre. Où irait-elle le plus probablement ?',
                        'choices' => [
                            ['choice_text' => 'garaje', 'is_correct' => false],
                            ['choice_text' => 'biblioteca', 'is_correct' => true],
                            ['choice_text' => 'cocina', 'is_correct' => false],
                            ['choice_text' => 'jardín', 'is_correct' => false],
                        ],
                        'explanation' => 'Biblioteca signifie « bibliothèque », l’endroit naturel pour emprunter un livre.',
                    ],
                    [
                        'question' => 'Quel objet utiliserais-tu pour écrire à l’encre ?',
                        'choices' => [
                            ['choice_text' => 'bolígrafo', 'is_correct' => true],
                            ['choice_text' => 'almohada', 'is_correct' => false],
                            ['choice_text' => 'espejo', 'is_correct' => false],
                            ['choice_text' => 'plato', 'is_correct' => false],
                        ],
                        'explanation' => 'Bolígrafo signifie « stylo ».',
                    ],
                    [
                        'question' => 'Un professeur dit : « Abran sus cuadernos. » Que doivent ouvrir les élèves ?',
                        'choices' => [
                            ['choice_text' => 'Leurs portes', 'is_correct' => false],
                            ['choice_text' => 'Leurs fenêtres', 'is_correct' => false],
                            ['choice_text' => 'Leurs sacs', 'is_correct' => false],
                            ['choice_text' => 'Leurs cahiers', 'is_correct' => true],
                        ],
                        'explanation' => 'Cuadernos signifie « cahiers ».',
                    ],
                    [
                        'question' => 'Quel mot désigne un bureau d’entreprise ?',
                        'choices' => [
                            ['choice_text' => 'oficina', 'is_correct' => true],
                            ['choice_text' => 'cama', 'is_correct' => false],
                            ['choice_text' => 'cocina', 'is_correct' => false],
                            ['choice_text' => 'sala', 'is_correct' => false],
                        ],
                        'explanation' => 'Oficina signifie « bureau ».',
                    ],
                    [
                        'question' => 'Tu es au travail et tu dois parler à ton « jefe ». Qui est-ce ?',
                        'choices' => [
                            ['choice_text' => 'Ton client', 'is_correct' => false],
                            ['choice_text' => 'Ton collègue', 'is_correct' => false],
                            ['choice_text' => 'Ton patron', 'is_correct' => true],
                            ['choice_text' => 'Ton élève', 'is_correct' => false],
                        ],
                        'explanation' => 'Jefe signifie « patron » ou « responsable ».',
                    ],
                    [
                        'question' => 'Quel objet est le plus utile pour couper du papier ?',
                        'choices' => [
                            ['choice_text' => 'lápiz', 'is_correct' => false],
                            ['choice_text' => 'regla', 'is_correct' => false],
                            ['choice_text' => 'borrador', 'is_correct' => false],
                            ['choice_text' => 'tijeras', 'is_correct' => true],
                        ],
                        'explanation' => 'Tijeras signifie « ciseaux », l’outil utilisé pour couper le papier.',
                    ],
                    [
                        'question' => 'Une pièce a une « pared » et un « techo ». Quelle paire est nommée ?',
                        'choices' => [
                            ['choice_text' => 'Sol et porte', 'is_correct' => false],
                            ['choice_text' => 'Mur et plafond', 'is_correct' => true],
                            ['choice_text' => 'Fenêtre et mur', 'is_correct' => false],
                            ['choice_text' => 'Bureau et chaise', 'is_correct' => false],
                        ],
                        'explanation' => 'Pared signifie mur et techo signifie plafond.',
                    ],
                    [
                        'question' => 'Une élève demande un « lápiz ». Que cherche-t-elle ?',
                        'choices' => [
                            ['choice_text' => 'Un cahier', 'is_correct' => false],
                            ['choice_text' => 'Une règle', 'is_correct' => false],
                            ['choice_text' => 'Un crayon', 'is_correct' => true],
                            ['choice_text' => 'Un sac à dos', 'is_correct' => false],
                        ],
                        'explanation' => 'Lápiz signifie « crayon ».',
                    ],
                    [
                        'question' => 'Quel mot convient à une phrase sur une réunion de travail : « La reunión es en la ______. » ?',
                        'choices' => [
                            ['choice_text' => 'almohada', 'is_correct' => false],
                            ['choice_text' => 'oficina', 'is_correct' => true],
                            ['choice_text' => 'nevera', 'is_correct' => false],
                            ['choice_text' => 'ducha', 'is_correct' => false],
                        ],
                        'explanation' => 'Oficina signifie bureau, un cadre naturel pour une réunion de travail.',
                    ],
                    [
                        'question' => 'Si un professeur dit « Escuchen », quelle compétence demande-t-il aux élèves d’utiliser ?',
                        'choices' => [
                            ['choice_text' => 'Écouter', 'is_correct' => true],
                            ['choice_text' => 'Écrire', 'is_correct' => false],
                            ['choice_text' => 'Dormir', 'is_correct' => false],
                            ['choice_text' => 'Courir', 'is_correct' => false],
                        ],
                        'explanation' => 'Escuchen vient de escuchar, « écouter », donc la consigne demande aux élèves d’écouter.',
                    ],
                    [
                        'question' => 'Quel mot espagnol signifie « devoirs » ?',
                        'choices' => [
                            ['choice_text' => 'recreo', 'is_correct' => false],
                            ['choice_text' => 'examen', 'is_correct' => false],
                            ['choice_text' => 'pizarra', 'is_correct' => false],
                            ['choice_text' => 'tarea', 'is_correct' => true],
                        ],
                        'explanation' => 'Tarea signifie « tâche » ou « devoirs » dans un contexte scolaire.',
                    ],
                    [
                        'question' => 'Un élève voit « pizarra » dans la salle de classe. Qu’est-ce que c’est ?',
                        'choices' => [
                            ['choice_text' => 'Un tableau', 'is_correct' => true],
                            ['choice_text' => 'Une chaise', 'is_correct' => false],
                            ['choice_text' => 'Un livre', 'is_correct' => false],
                            ['choice_text' => 'Une porte', 'is_correct' => false],
                        ],
                        'explanation' => 'Pizarra désigne couramment le tableau utilisé pour écrire en classe.',
                    ],
                    [
                        'question' => 'Quel mot utiliserais-tu pour un réfrigérateur ?',
                        'choices' => [
                            ['choice_text' => 'escritorio', 'is_correct' => false],
                            ['choice_text' => 'nevera', 'is_correct' => true],
                            ['choice_text' => 'armario', 'is_correct' => false],
                            ['choice_text' => 'ventilador', 'is_correct' => false],
                        ],
                        'explanation' => 'Nevera est un mot courant pour réfrigérateur.',
                    ],
                ],
            ],
            [
                'title' => 'Voyages, achats et lieux publics',
                'description' => 'Pratique un vocabulaire utile pour se déplacer, acheter des choses et gérer des situations simples dans des lieux publics.',
                'duration' => 25,
                'passing_score' => 65,
                'questions' => [
                    [
                        'question' => 'Tu voyages et tu as besoin d’un billet de train. Quel mot est le plus pertinent ?',
                        'choices' => [
                            ['choice_text' => 'almohada', 'is_correct' => false],
                            ['choice_text' => 'billete', 'is_correct' => true],
                            ['choice_text' => 'cuchara', 'is_correct' => false],
                            ['choice_text' => 'camisa', 'is_correct' => false],
                        ],
                        'explanation' => 'Billete peut signifier un billet, y compris un billet de voyage, selon le contexte et la région.',
                    ],
                    [
                        'question' => 'Un touriste demande : « ¿Dónde está la estación? » Quel endroit cherche-t-il ?',
                        'choices' => [
                            ['choice_text' => 'Le supermarché', 'is_correct' => false],
                            ['choice_text' => 'La chambre d’hôtel', 'is_correct' => false],
                            ['choice_text' => 'La table du restaurant', 'is_correct' => false],
                            ['choice_text' => 'La gare', 'is_correct' => true],
                        ],
                        'explanation' => 'Estación signifie « gare » ou « station », comme une gare de train ou de bus.',
                    ],
                    [
                        'question' => 'Quel mot espagnol signifie « rue » ?',
                        'choices' => [
                            ['choice_text' => 'calle', 'is_correct' => true],
                            ['choice_text' => 'plaza', 'is_correct' => false],
                            ['choice_text' => 'tienda', 'is_correct' => false],
                            ['choice_text' => 'puente', 'is_correct' => false],
                        ],
                        'explanation' => 'Calle signifie « rue ».',
                    ],
                    [
                        'question' => 'Tu veux acheter une chemise. Quel endroit aurait le plus de sens ?',
                        'choices' => [
                            ['choice_text' => 'aeropuerto', 'is_correct' => false],
                            ['choice_text' => 'estación', 'is_correct' => false],
                            ['choice_text' => 'tienda', 'is_correct' => true],
                            ['choice_text' => 'biblioteca', 'is_correct' => false],
                        ],
                        'explanation' => 'Tienda signifie « magasin » ou « boutique ».',
                    ],
                    [
                        'question' => 'Un voyageur demande « el aeropuerto ». Où veut-il aller ?',
                        'choices' => [
                            ['choice_text' => 'Arrêt de bus', 'is_correct' => false],
                            ['choice_text' => 'Hôtel', 'is_correct' => false],
                            ['choice_text' => 'Musée', 'is_correct' => false],
                            ['choice_text' => 'Aéroport', 'is_correct' => true],
                        ],
                        'explanation' => 'Aeropuerto signifie « aéroport ».',
                    ],
                    [
                        'question' => 'Quel mot est utile pour demander le prix de quelque chose ?',
                        'choices' => [
                            ['choice_text' => 'tamaño', 'is_correct' => false],
                            ['choice_text' => 'precio', 'is_correct' => true],
                            ['choice_text' => 'color', 'is_correct' => false],
                            ['choice_text' => 'puerta', 'is_correct' => false],
                        ],
                        'explanation' => 'Precio signifie « prix ».',
                    ],
                    [
                        'question' => 'Une vendeuse demande : « ¿Qué talla necesita? » Quelle information veut-elle ?',
                        'choices' => [
                            ['choice_text' => 'Quelle couleur tu préfères', 'is_correct' => false],
                            ['choice_text' => 'À quelle heure tu pars', 'is_correct' => false],
                            ['choice_text' => 'De quelle taille avez-vous besoin ?', 'is_correct' => true],
                            ['choice_text' => 'Quel plat tu veux', 'is_correct' => false],
                        ],
                        'explanation' => 'Talla signifie « taille », surtout la taille de vêtement.',
                    ],
                    [
                        'question' => 'Un panneau indique « Salida ». Quelle direction indique-t-il ?',
                        'choices' => [
                            ['choice_text' => 'Sortie', 'is_correct' => true],
                            ['choice_text' => 'Entrée', 'is_correct' => false],
                            ['choice_text' => 'Ascenseur', 'is_correct' => false],
                            ['choice_text' => 'Billetterie', 'is_correct' => false],
                        ],
                        'explanation' => 'Salida signifie « sortie », l’endroit ou la direction pour partir.',
                    ],
                    [
                        'question' => 'Tu es perdu et tu veux demander où est l’hôtel. Quel mot complète la question « ¿Dónde está el ______? » ?',
                        'choices' => [
                            ['choice_text' => 'hotel', 'is_correct' => true],
                            ['choice_text' => 'precio', 'is_correct' => false],
                            ['choice_text' => 'billete', 'is_correct' => false],
                            ['choice_text' => 'equipaje', 'is_correct' => false],
                        ],
                        'explanation' => 'Hotel est le même mot courant qu’en français, donc la question demande où se trouve l’hôtel.',
                    ],
                    [
                        'question' => 'Un voyageur a de l’« equipaje ». Qu’a-t-il avec lui ?',
                        'choices' => [
                            ['choice_text' => 'Seulement de l’argent', 'is_correct' => false],
                            ['choice_text' => 'Seulement un passeport', 'is_correct' => false],
                            ['choice_text' => 'Seulement une carte', 'is_correct' => false],
                            ['choice_text' => 'Des bagages', 'is_correct' => true],
                        ],
                        'explanation' => 'Equipaje signifie « bagages ».',
                    ],
                    [
                        'question' => 'Quel mot signifie « carte » (de géographie) ?',
                        'choices' => [
                            ['choice_text' => 'mercado', 'is_correct' => false],
                            ['choice_text' => 'moneda', 'is_correct' => false],
                            ['choice_text' => 'mapa', 'is_correct' => true],
                            ['choice_text' => 'maleta', 'is_correct' => false],
                        ],
                        'explanation' => 'Mapa signifie « carte ».',
                    ],
                ],
            ],
            [
                'title' => 'Le vocabulaire dans de courtes situations réelles',
                'description' => 'Choisis le bon mot espagnol selon le contexte et distingue des mots courants que les débutants confondent souvent.',
                'duration' => 20,
                'passing_score' => 65,
                'questions' => [
                    [
                        'question' => 'Diego a froid et attrape sa « chaqueta ». Que met-il ?',
                        'choices' => [
                            ['choice_text' => 'Un chapeau', 'is_correct' => false],
                            ['choice_text' => 'Un gant', 'is_correct' => false],
                            ['choice_text' => 'Une chaussure', 'is_correct' => false],
                            ['choice_text' => 'Une veste', 'is_correct' => true],
                        ],
                        'explanation' => 'Chaqueta signifie « veste ».',
                    ],
                    [
                        'question' => 'Quelqu’un dit : « Necesito dormir. » Que doit-il faire ?',
                        'choices' => [
                            ['choice_text' => 'Manger', 'is_correct' => false],
                            ['choice_text' => 'Travailler', 'is_correct' => false],
                            ['choice_text' => 'Dormir', 'is_correct' => true],
                            ['choice_text' => 'Conduire', 'is_correct' => false],
                        ],
                        'explanation' => 'Dormir signifie « dormir ».',
                    ],
                    [
                        'question' => 'Un ami dit : « Voy a comprar pan. » Quel est son plan ?',
                        'choices' => [
                            ['choice_text' => 'Acheter du pain', 'is_correct' => true],
                            ['choice_text' => 'Vendre du pain', 'is_correct' => false],
                            ['choice_text' => 'Cuisiner une soupe', 'is_correct' => false],
                            ['choice_text' => 'Boire du café', 'is_correct' => false],
                        ],
                        'explanation' => 'Comprar signifie « acheter », et pan signifie « pain ».',
                    ],
                    [
                        'question' => 'Quel mot choisirais-tu pour « argent » dans une conversation de shopping simple ?',
                        'choices' => [
                            ['choice_text' => 'derecho', 'is_correct' => false],
                            ['choice_text' => 'dinero', 'is_correct' => true],
                            ['choice_text' => 'desayuno', 'is_correct' => false],
                            ['choice_text' => 'detalle', 'is_correct' => false],
                        ],
                        'explanation' => 'Dinero signifie « argent ».',
                    ],
                    [
                        'question' => 'Un client d’hôtel demande « una habitación ». De quoi a-t-il besoin ?',
                        'choices' => [
                            ['choice_text' => 'Un repas', 'is_correct' => false],
                            ['choice_text' => 'Un billet', 'is_correct' => false],
                            ['choice_text' => 'Une chambre', 'is_correct' => true],
                            ['choice_text' => 'Une serviette', 'is_correct' => false],
                        ],
                        'explanation' => 'Habitación signifie « chambre », couramment une chambre d’hôtel.',
                    ],
                    [
                        'question' => 'Quelle paire est la plus facile à confondre car les deux désignent des pièces d’une maison ?',
                        'choices' => [
                            ['choice_text' => 'cocina et baño', 'is_correct' => true],
                            ['choice_text' => 'mesa et silla', 'is_correct' => false],
                            ['choice_text' => 'pan et leche', 'is_correct' => false],
                            ['choice_text' => 'lunes et martes', 'is_correct' => false],
                        ],
                        'explanation' => 'Cocina signifie cuisine et baño signifie salle de bain ; les deux sont des pièces d’une maison.',
                    ],
                    [
                        'question' => 'Sara dit « Tengo hambre » avant le dîner. Que veut-elle dire ?',
                        'choices' => [
                            ['choice_text' => 'Elle a soif', 'is_correct' => false],
                            ['choice_text' => 'Elle a faim', 'is_correct' => true],
                            ['choice_text' => 'Elle est fatiguée', 'is_correct' => false],
                            ['choice_text' => 'Elle est en retard', 'is_correct' => false],
                        ],
                        'explanation' => 'Hambre signifie « faim », et « tener hambre » est l’expression normale pour avoir faim.',
                    ],
                    [
                        'question' => 'Un apprenant voit « sed » et « hambre » et les confond. Quel sens est correct ?',
                        'choices' => [
                            ['choice_text' => 'Faim / soif', 'is_correct' => false],
                            ['choice_text' => 'Sommeil / faim', 'is_correct' => false],
                            ['choice_text' => 'Soif / sommeil', 'is_correct' => false],
                            ['choice_text' => 'Soif / faim', 'is_correct' => true],
                        ],
                        'explanation' => 'Sed signifie soif et hambre signifie faim.',
                    ],
                    [
                        'question' => 'Un client veut payer en liquide. Quel mot est pertinent ?',
                        'choices' => [
                            ['choice_text' => 'efectivo', 'is_correct' => true],
                            ['choice_text' => 'equipaje', 'is_correct' => false],
                            ['choice_text' => 'escalera', 'is_correct' => false],
                            ['choice_text' => 'espejo', 'is_correct' => false],
                        ],
                        'explanation' => 'Efectivo signifie « liquide » dans un contexte de shopping ou de paiement.',
                    ],
                    [
                        'question' => 'Quel mot attendrais-tu après « una taza de » dans une conversation de petit-déjeuner ?',
                        'choices' => [
                            ['choice_text' => 'zapato', 'is_correct' => false],
                            ['choice_text' => 'camisa', 'is_correct' => false],
                            ['choice_text' => 'billete', 'is_correct' => false],
                            ['choice_text' => 'café', 'is_correct' => true],
                        ],
                        'explanation' => 'Una taza de café signifie « une tasse de café », une expression naturelle au petit-déjeuner.',
                    ],
                    [
                        'question' => 'Un enfant dit : « Estoy cansado. » Que communique-t-il ?',
                        'choices' => [
                            ['choice_text' => 'Il est en colère', 'is_correct' => false],
                            ['choice_text' => 'Il a faim', 'is_correct' => false],
                            ['choice_text' => 'Il est fatigué', 'is_correct' => true],
                            ['choice_text' => 'Il est perdu', 'is_correct' => false],
                        ],
                        'explanation' => 'Cansado signifie « fatigué » pour un locuteur masculin ; la forme féminine est cansada.',
                    ],
                    [
                        'question' => 'Quel mot signifie « clé », quelque chose dont tu pourrais avoir besoin pour ouvrir une porte ?',
                        'choices' => [
                            ['choice_text' => 'lluvia', 'is_correct' => false],
                            ['choice_text' => 'llave', 'is_correct' => true],
                            ['choice_text' => 'lata', 'is_correct' => false],
                            ['choice_text' => 'lago', 'is_correct' => false],
                        ],
                        'explanation' => 'Llave signifie « clé ».',
                    ],
                    [
                        'question' => 'Un touriste entend « izquierda ». Quelle direction doit-il prendre ?',
                        'choices' => [
                            ['choice_text' => 'Droite', 'is_correct' => false],
                            ['choice_text' => 'Tout droit', 'is_correct' => false],
                            ['choice_text' => 'En arrière', 'is_correct' => false],
                            ['choice_text' => 'Gauche', 'is_correct' => true],
                        ],
                        'explanation' => 'Izquierda signifie « gauche ».',
                    ],
                    [
                        'question' => 'Quel mot signifie « droite » comme direction ?',
                        'choices' => [
                            ['choice_text' => 'derecha', 'is_correct' => true],
                            ['choice_text' => 'delante', 'is_correct' => false],
                            ['choice_text' => 'debajo', 'is_correct' => false],
                            ['choice_text' => 'dentro', 'is_correct' => false],
                        ],
                        'explanation' => 'Derecha signifie « droite » en parlant de direction.',
                    ],
                    [
                        'question' => 'Un serveur apporte « la cuenta ». Qu’est-ce qui vient d’arriver ?',
                        'choices' => [
                            ['choice_text' => 'Le menu', 'is_correct' => false],
                            ['choice_text' => 'L’addition', 'is_correct' => true],
                            ['choice_text' => 'Le dessert', 'is_correct' => false],
                            ['choice_text' => 'La réservation', 'is_correct' => false],
                        ],
                        'explanation' => 'La cuenta signifie « l’addition » dans un restaurant.',
                    ],
                    [
                        'question' => 'Un élève dit : « No encuentro mi mochila. » Quel est son problème ?',
                        'choices' => [
                            ['choice_text' => 'Il ne peut pas ouvrir la porte', 'is_correct' => false],
                            ['choice_text' => 'Il a oublié ses devoirs', 'is_correct' => false],
                            ['choice_text' => 'Il ne trouve pas son sac à dos', 'is_correct' => true],
                            ['choice_text' => 'Il a perdu son numéro de téléphone', 'is_correct' => false],
                        ],
                        'explanation' => 'No encuentro signifie « je ne trouve pas », et mochila signifie « sac à dos ».',
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
