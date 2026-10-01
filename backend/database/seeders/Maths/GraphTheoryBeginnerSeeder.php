<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class GraphTheoryBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'graph-theory')->firstOrFail();

        $quizzes = [
            [
                'title' => 'Bases des graphes',
                'description' => 'Découverte des sommets, arêtes, graphes simples et notions fondamentales.',
                'duration' => 20,
                'passing_score' => 60,
                'questions' => [
                    [
                        'question' => 'Dans un graphe, les points représentant les objets ou les entités sont appelés :',
                        'explanation' => 'Les sommets représentent les objets étudiés dans un graphe.',
                        'choices' => [
                            ['choice_text' => 'Sommets', 'is_correct' => true],
                            ['choice_text' => 'Arêtes', 'is_correct' => false],
                            ['choice_text' => 'Cycles', 'is_correct' => false],
                            ['choice_text' => 'Chemins', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Dans un graphe non orienté, une arête représente généralement :',
                        'explanation' => 'Une arête relie deux sommets sans imposer de direction.',
                        'choices' => [
                            ['choice_text' => 'Une relation entre deux sommets', 'is_correct' => true],
                            ['choice_text' => 'Un sommet isolé', 'is_correct' => false],
                            ['choice_text' => 'Un degré unique', 'is_correct' => false],
                            ['choice_text' => 'Une matrice', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un graphe simple ne contient pas :',
                        'explanation' => 'Un graphe simple n’admet ni boucle ni plusieurs arêtes entre la même paire de sommets.',
                        'choices' => [
                            ['choice_text' => 'Boucles ni arêtes multiples', 'is_correct' => true],
                            ['choice_text' => 'Sommets isolés', 'is_correct' => false],
                            ['choice_text' => 'Chemins', 'is_correct' => false],
                            ['choice_text' => 'Cycles', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Deux sommets reliés directement par une arête sont dits :',
                        'explanation' => 'Deux sommets reliés par une arête sont adjacents.',
                        'choices' => [
                            ['choice_text' => 'Adjacents', 'is_correct' => true],
                            ['choice_text' => 'Isolés', 'is_correct' => false],
                            ['choice_text' => 'Disjoints', 'is_correct' => false],
                            ['choice_text' => 'Parallèles', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un sommet de degré 0 est appelé :',
                        'explanation' => 'Un sommet sans arête incidente est un sommet isolé.',
                        'choices' => [
                            ['choice_text' => 'Sommet isolé', 'is_correct' => true],
                            ['choice_text' => 'Sommet complet', 'is_correct' => false],
                            ['choice_text' => 'Sommet terminal', 'is_correct' => false],
                            ['choice_text' => 'Sommet cyclique', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Dans un graphe orienté, une arête avec une direction est généralement appelée :',
                        'explanation' => 'Dans un graphe orienté, les arêtes dirigées sont appelées des arcs.',
                        'choices' => [
                            ['choice_text' => 'Arc', 'is_correct' => true],
                            ['choice_text' => 'Face', 'is_correct' => false],
                            ['choice_text' => 'Cycle', 'is_correct' => false],
                            ['choice_text' => 'Composante', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Combien d’arêtes possède un graphe simple à 2 sommets au maximum ?',
                        'explanation' => 'Il existe une seule paire de sommets, donc une seule arête possible dans un graphe simple.',
                        'choices' => [
                            ['choice_text' => '1', 'is_correct' => true],
                            ['choice_text' => '2', 'is_correct' => false],
                            ['choice_text' => '4', 'is_correct' => false],
                            ['choice_text' => '0', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un graphe peut être utilisé pour représenter un réseau routier. Que peuvent représenter les sommets ?',
                        'explanation' => 'Les sommets peuvent représenter des villes, des carrefours ou d’autres lieux reliés par les routes.',
                        'choices' => [
                            ['choice_text' => 'Des villes ou des carrefours', 'is_correct' => true],
                            ['choice_text' => 'Uniquement les voitures', 'is_correct' => false],
                            ['choice_text' => 'Uniquement les distances', 'is_correct' => false],
                            ['choice_text' => 'Seulement les panneaux', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel objet permet de représenter les voisins de chaque sommet ?',
                        'explanation' => 'La liste d’adjacence associe à chaque sommet la liste de ses voisins.',
                        'choices' => [
                            ['choice_text' => 'Liste d’adjacence', 'is_correct' => true],
                            ['choice_text' => 'Table des dérivées', 'is_correct' => false],
                            ['choice_text' => 'Table de vérité', 'is_correct' => false],
                            ['choice_text' => 'Liste des diviseurs', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une matrice d’adjacence décrit principalement :',
                        'explanation' => 'Elle indique, pour chaque paire de sommets, si une connexion existe.',
                        'choices' => [
                            ['choice_text' => 'Les relations d’adjacence entre les sommets', 'is_correct' => true],
                            ['choice_text' => 'Les primitives d’une fonction', 'is_correct' => false],
                            ['choice_text' => 'Les facteurs premiers', 'is_correct' => false],
                            ['choice_text' => 'Les distances uniquement', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un graphe à 5 sommets possède-t-il nécessairement 5 arêtes ?',
                        'explanation' => 'Le nombre d’arêtes dépend des connexions du graphe et ne se déduit pas du seul nombre de sommets.',
                        'choices' => [
                            ['choice_text' => 'Non', 'is_correct' => true],
                            ['choice_text' => 'Oui, toujours', 'is_correct' => false],
                            ['choice_text' => 'Oui, s’il est simple', 'is_correct' => false],
                            ['choice_text' => 'Oui, s’il est orienté', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Degrés et arêtes',
                'description' => 'Calcul des degrés des sommets et premières propriétés des graphes non orientés.',
                'duration' => 25,
                'passing_score' => 60,
                'questions' => [
                    [
                        'question' => 'Le degré d’un sommet dans un graphe non orienté correspond au :',
                        'explanation' => 'Le degré compte le nombre d’arêtes incidentes au sommet.',
                        'choices' => [
                            ['choice_text' => 'Nombre d’arêtes incidentes', 'is_correct' => true],
                            ['choice_text' => 'Nombre total de sommets', 'is_correct' => false],
                            ['choice_text' => 'Nombre de cycles du graphe', 'is_correct' => false],
                            ['choice_text' => 'Nombre de composantes', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un sommet relié à exactement 4 arêtes a un degré de :',
                        'explanation' => 'Le degré est précisément le nombre d’arêtes incidentes au sommet.',
                        'choices' => [
                            ['choice_text' => '4', 'is_correct' => true],
                            ['choice_text' => '2', 'is_correct' => false],
                            ['choice_text' => '8', 'is_correct' => false],
                            ['choice_text' => '3', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'La somme des degrés de tous les sommets d’un graphe non orienté vaut :',
                        'explanation' => 'Chaque arête contribue 1 au degré de chacun de ses deux extrémités, donc la somme vaut 2|E|.',
                        'choices' => [
                            ['choice_text' => 'Deux fois le nombre d’arêtes', 'is_correct' => true],
                            ['choice_text' => 'Le nombre de sommets', 'is_correct' => false],
                            ['choice_text' => 'Deux fois le nombre de sommets', 'is_correct' => false],
                            ['choice_text' => 'Le nombre d’arêtes', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un graphe possède 7 arêtes. Quelle est la somme de tous les degrés ?',
                        'explanation' => 'Le lemme de la poignée de main donne 2 × 7 = 14.',
                        'choices' => [
                            ['choice_text' => '14', 'is_correct' => true],
                            ['choice_text' => '7', 'is_correct' => false],
                            ['choice_text' => '21', 'is_correct' => false],
                            ['choice_text' => '49', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'La somme des degrés des sommets d’un graphe non orienté est toujours :',
                        'explanation' => 'Puisqu’elle vaut 2|E|, elle est nécessairement paire.',
                        'choices' => [
                            ['choice_text' => 'Paire', 'is_correct' => true],
                            ['choice_text' => 'Impaire', 'is_correct' => false],
                            ['choice_text' => 'Première', 'is_correct' => false],
                            ['choice_text' => 'Négative', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un graphe simple à 6 sommets peut donner au maximum quel degré à un sommet ?',
                        'explanation' => 'Dans un graphe simple, un sommet peut être relié aux 5 autres sommets, mais pas à lui-même.',
                        'choices' => [
                            ['choice_text' => '5', 'is_correct' => true],
                            ['choice_text' => '6', 'is_correct' => false],
                            ['choice_text' => '12', 'is_correct' => false],
                            ['choice_text' => '3', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un graphe simple complet à 4 sommets possède combien d’arêtes ?',
                        'explanation' => 'Chaque paire de sommets est reliée : 4 × 3 / 2 = 6.',
                        'choices' => [
                            ['choice_text' => '6', 'is_correct' => true],
                            ['choice_text' => '4', 'is_correct' => false],
                            ['choice_text' => '8', 'is_correct' => false],
                            ['choice_text' => '12', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Dans un graphe simple complet à 5 sommets, le degré de chaque sommet est :',
                        'explanation' => 'Chaque sommet est relié aux quatre autres sommets.',
                        'choices' => [
                            ['choice_text' => '4', 'is_correct' => true],
                            ['choice_text' => '5', 'is_correct' => false],
                            ['choice_text' => '3', 'is_correct' => false],
                            ['choice_text' => '10', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un graphe non orienté peut-il avoir exactement un seul sommet de degré impair ?',
                        'explanation' => 'Non. Le nombre de sommets de degré impair est toujours pair.',
                        'choices' => [
                            ['choice_text' => 'Non', 'is_correct' => true],
                            ['choice_text' => 'Oui', 'is_correct' => false],
                            ['choice_text' => 'Seulement s’il est complet', 'is_correct' => false],
                            ['choice_text' => 'Seulement s’il est orienté', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Si tous les sommets d’un graphe non orienté ont un degré pair, la somme des degrés est :',
                        'explanation' => 'Une somme de nombres pairs est paire, en accord avec le lemme de la poignée de main.',
                        'choices' => [
                            ['choice_text' => 'Paire', 'is_correct' => true],
                            ['choice_text' => 'Impaire', 'is_correct' => false],
                            ['choice_text' => 'Toujours nulle', 'is_correct' => false],
                            ['choice_text' => 'Toujours égale au nombre de sommets', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un sommet de degré 1 est souvent appelé :',
                        'explanation' => 'Un sommet de degré 1 est couramment appelé sommet pendant ou feuille lorsqu’il apparaît notamment dans un arbre.',
                        'choices' => [
                            ['choice_text' => 'Une feuille dans le contexte d’un arbre', 'is_correct' => true],
                            ['choice_text' => 'Un sommet isolé', 'is_correct' => false],
                            ['choice_text' => 'Un sommet universel', 'is_correct' => false],
                            ['choice_text' => 'Un cycle', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un graphe possède 10 arêtes. Que vaut la somme de ses degrés ?',
                        'explanation' => 'Chaque arête contribue 2 à la somme des degrés, donc 2 × 10 = 20.',
                        'choices' => [
                            ['choice_text' => '20', 'is_correct' => true],
                            ['choice_text' => '10', 'is_correct' => false],
                            ['choice_text' => '100', 'is_correct' => false],
                            ['choice_text' => '5', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Chemins, parcours et cycles',
                'description' => 'Identification des chemins, parcours fermés, cycles et connexité.',
                'duration' => 25,
                'passing_score' => 60,
                'questions' => [
                    [
                        'question' => 'La longueur d’un chemin dans un graphe correspond au nombre de :',
                        'explanation' => 'La longueur d’un chemin est comptée par son nombre d’arêtes.',
                        'choices' => [
                            ['choice_text' => 'Arêtes parcourues', 'is_correct' => true],
                            ['choice_text' => 'Sommets du graphe', 'is_correct' => false],
                            ['choice_text' => 'Composantes connexes', 'is_correct' => false],
                            ['choice_text' => 'Cycles du graphe', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un chemin de longueur 4 contient :',
                        'explanation' => 'Par définition, sa longueur est égale au nombre d’arêtes utilisées.',
                        'choices' => [
                            ['choice_text' => '4 arêtes', 'is_correct' => true],
                            ['choice_text' => '3 arêtes', 'is_correct' => false],
                            ['choice_text' => '5 arêtes', 'is_correct' => false],
                            ['choice_text' => '8 arêtes', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un parcours fermé commence et se termine :',
                        'explanation' => 'Un parcours est fermé lorsque son sommet de départ est aussi son sommet d’arrivée.',
                        'choices' => [
                            ['choice_text' => 'Au même sommet', 'is_correct' => true],
                            ['choice_text' => 'Sur deux sommets isolés', 'is_correct' => false],
                            ['choice_text' => 'Sur deux sommets différents obligatoirement', 'is_correct' => false],
                            ['choice_text' => 'Sur la même arête obligatoirement', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un cycle simple possède la propriété suivante :',
                        'explanation' => 'Dans un cycle simple, les sommets intermédiaires ne sont pas répétés et le départ revient à la fin.',
                        'choices' => [
                            ['choice_text' => 'Il revient à son sommet de départ sans répéter les autres sommets', 'is_correct' => true],
                            ['choice_text' => 'Il utilise forcément toutes les arêtes du graphe', 'is_correct' => false],
                            ['choice_text' => 'Il ne contient aucun sommet', 'is_correct' => false],
                            ['choice_text' => 'Il est toujours un arbre', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un graphe connexe vérifie que :',
                        'explanation' => 'Dans un graphe connexe, toute paire de sommets est reliée par au moins un chemin.',
                        'choices' => [
                            ['choice_text' => 'Toute paire de sommets est reliée par un chemin', 'is_correct' => true],
                            ['choice_text' => 'Tous les sommets ont le même degré', 'is_correct' => false],
                            ['choice_text' => 'Il n’existe aucun cycle', 'is_correct' => false],
                            ['choice_text' => 'Toutes les arêtes sont orientées', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un graphe avec deux composantes connexes distinctes est :',
                        'explanation' => 'Il existe alors au moins deux groupes de sommets entre lesquels aucun chemin n’existe.',
                        'choices' => [
                            ['choice_text' => 'Non connexe', 'is_correct' => true],
                            ['choice_text' => 'Complet', 'is_correct' => false],
                            ['choice_text' => 'Toujours eulérien', 'is_correct' => false],
                            ['choice_text' => 'Toujours biparti', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Dans un chemin simple, un sommet est en général :',
                        'explanation' => 'Un chemin simple ne répète pas de sommet.',
                        'choices' => [
                            ['choice_text' => 'Visité au plus une fois', 'is_correct' => true],
                            ['choice_text' => 'Toujours visité deux fois', 'is_correct' => false],
                            ['choice_text' => 'Toujours de degré 2', 'is_correct' => false],
                            ['choice_text' => 'Toujours isolé', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Dans un graphe non orienté, si A est adjacent à B, alors :',
                        'explanation' => 'Une arête non orientée fonctionne dans les deux sens pour la relation d’adjacence.',
                        'choices' => [
                            ['choice_text' => 'B est adjacent à A', 'is_correct' => true],
                            ['choice_text' => 'B ne peut pas être adjacent à A', 'is_correct' => false],
                            ['choice_text' => 'A devient isolé', 'is_correct' => false],
                            ['choice_text' => 'A et B ont forcément le même degré', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un cycle de longueur 3 est aussi appelé :',
                        'explanation' => 'Un cycle comportant trois sommets est un triangle.',
                        'choices' => [
                            ['choice_text' => 'Triangle', 'is_correct' => true],
                            ['choice_text' => 'Carré', 'is_correct' => false],
                            ['choice_text' => 'Chemin double', 'is_correct' => false],
                            ['choice_text' => 'Arbre', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un sommet peut-il appartenir à plusieurs cycles différents ?',
                        'explanation' => 'Oui, un même sommet peut être commun à plusieurs cycles.',
                        'choices' => [
                            ['choice_text' => 'Oui', 'is_correct' => true],
                            ['choice_text' => 'Non, jamais', 'is_correct' => false],
                            ['choice_text' => 'Seulement dans un arbre', 'is_correct' => false],
                            ['choice_text' => 'Seulement dans un graphe à deux sommets', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un graphe sans cycle est dit :',
                        'explanation' => 'Un graphe dépourvu de cycles est appelé acyclique.',
                        'choices' => [
                            ['choice_text' => 'Acyclique', 'is_correct' => true],
                            ['choice_text' => 'Complet', 'is_correct' => false],
                            ['choice_text' => 'Régulier', 'is_correct' => false],
                            ['choice_text' => 'Orienté', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Arbres',
                'description' => 'Définition des arbres et propriétés essentielles sur leurs sommets et arêtes.',
                'duration' => 30,
                'passing_score' => 65,
                'questions' => [
                    [
                        'question' => 'Un arbre est un graphe :',
                        'explanation' => 'Un arbre est à la fois connexe et acyclique.',
                        'choices' => [
                            ['choice_text' => 'Connexe et acyclique', 'is_correct' => true],
                            ['choice_text' => 'Complet et cyclique', 'is_correct' => false],
                            ['choice_text' => 'Orienté par définition', 'is_correct' => false],
                            ['choice_text' => 'Toujours composé de deux sommets', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un arbre à n sommets possède exactement :',
                        'explanation' => 'Une propriété fondamentale des arbres est que le nombre d’arêtes vaut n − 1.',
                        'choices' => [
                            ['choice_text' => 'n − 1 arêtes', 'is_correct' => true],
                            ['choice_text' => 'n arêtes', 'is_correct' => false],
                            ['choice_text' => 'n + 1 arêtes', 'is_correct' => false],
                            ['choice_text' => '2n arêtes', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Combien d’arêtes possède un arbre à 8 sommets ?',
                        'explanation' => 'Pour un arbre, m = n − 1, donc 8 − 1 = 7 arêtes.',
                        'choices' => [
                            ['choice_text' => '7', 'is_correct' => true],
                            ['choice_text' => '8', 'is_correct' => false],
                            ['choice_text' => '9', 'is_correct' => false],
                            ['choice_text' => '16', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un arbre contient-il un cycle ?',
                        'explanation' => 'L’absence de cycle est une condition essentielle pour qu’un graphe soit un arbre.',
                        'choices' => [
                            ['choice_text' => 'Non', 'is_correct' => true],
                            ['choice_text' => 'Oui, toujours', 'is_correct' => false],
                            ['choice_text' => 'Seulement un cycle de longueur 3', 'is_correct' => false],
                            ['choice_text' => 'Seulement si le nombre de sommets est pair', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Entre deux sommets quelconques d’un arbre, il existe :',
                        'explanation' => 'La connexité assure un chemin et l’absence de cycle assure qu’il est unique.',
                        'choices' => [
                            ['choice_text' => 'Un unique chemin simple', 'is_correct' => true],
                            ['choice_text' => 'Toujours deux chemins', 'is_correct' => false],
                            ['choice_text' => 'Aucun chemin', 'is_correct' => false],
                            ['choice_text' => 'Une infinité de chemins simples', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un arbre possède 12 arêtes. Combien a-t-il de sommets ?',
                        'explanation' => 'Comme m = n − 1, on a n = 12 + 1 = 13 sommets.',
                        'choices' => [
                            ['choice_text' => '13', 'is_correct' => true],
                            ['choice_text' => '12', 'is_correct' => false],
                            ['choice_text' => '11', 'is_correct' => false],
                            ['choice_text' => '24', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un sommet de degré 1 dans un arbre est généralement appelé :',
                        'explanation' => 'Les sommets de degré 1 d’un arbre sont appelés feuilles.',
                        'choices' => [
                            ['choice_text' => 'Feuille', 'is_correct' => true],
                            ['choice_text' => 'Racine obligatoirement', 'is_correct' => false],
                            ['choice_text' => 'Cycle', 'is_correct' => false],
                            ['choice_text' => 'Composante', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un graphe connexe à 5 sommets et 4 arêtes est-il nécessairement un arbre ?',
                        'explanation' => 'Un graphe connexe à n sommets et n−1 arêtes est un arbre.',
                        'choices' => [
                            ['choice_text' => 'Oui', 'is_correct' => true],
                            ['choice_text' => 'Non, jamais', 'is_correct' => false],
                            ['choice_text' => 'Seulement s’il est complet', 'is_correct' => false],
                            ['choice_text' => 'Seulement s’il est orienté', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un arbre peut-il contenir un sommet isolé s’il possède plusieurs sommets ?',
                        'explanation' => 'Non, un arbre est connexe ; un sommet isolé serait séparé du reste.',
                        'choices' => [
                            ['choice_text' => 'Non', 'is_correct' => true],
                            ['choice_text' => 'Oui, toujours', 'is_correct' => false],
                            ['choice_text' => 'Seulement dans un arbre complet', 'is_correct' => false],
                            ['choice_text' => 'Seulement avec 2 arêtes', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un arbre est-il forcément un graphe simple dans le cadre usuel de la théorie des graphes ?',
                        'explanation' => 'Dans la définition standard, un arbre est un graphe non orienté, connexe et sans cycle, ce qui exclut notamment les boucles.',
                        'choices' => [
                            ['choice_text' => 'Oui, dans la définition usuelle', 'is_correct' => true],
                            ['choice_text' => 'Non, il doit être un multigraphe', 'is_correct' => false],
                            ['choice_text' => 'Seulement s’il possède 3 sommets', 'is_correct' => false],
                            ['choice_text' => 'Seulement s’il est orienté', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une étoile composée d’un sommet central et de 5 feuilles est-elle un arbre ?',
                        'explanation' => 'Elle est connexe et ne contient aucun cycle, donc c’est bien un arbre.',
                        'choices' => [
                            ['choice_text' => 'Oui', 'is_correct' => true],
                            ['choice_text' => 'Non', 'is_correct' => false],
                            ['choice_text' => 'Seulement si elle contient une boucle', 'is_correct' => false],
                            ['choice_text' => 'Seulement si toutes les feuilles sont reliées entre elles', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Si on ajoute une arête entre deux sommets déjà reliés par un chemin dans un arbre, on crée nécessairement :',
                        'explanation' => 'Le nouveau lien ferme le chemin existant en un cycle.',
                        'choices' => [
                            ['choice_text' => 'Un cycle', 'is_correct' => true],
                            ['choice_text' => 'Une nouvelle composante', 'is_correct' => false],
                            ['choice_text' => 'Un sommet isolé', 'is_correct' => false],
                            ['choice_text' => 'Un chemin de longueur zéro', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel nombre caractérise directement le nombre d’arêtes d’un arbre à 20 sommets ?',
                        'explanation' => 'La règle générale est n − 1, donc un arbre à 20 sommets possède 19 arêtes.',
                        'choices' => [
                            ['choice_text' => '19', 'is_correct' => true],
                            ['choice_text' => '20', 'is_correct' => false],
                            ['choice_text' => '21', 'is_correct' => false],
                            ['choice_text' => '40', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Graphes bipartis',
                'description' => 'Premières notions sur les partitions en deux ensembles et les graphes bipartis.',
                'duration' => 25,
                'passing_score' => 65,
                'questions' => [
                    [
                        'question' => 'Dans un graphe biparti, les sommets peuvent être répartis en :',
                        'explanation' => 'Un graphe biparti admet une partition de ses sommets en deux ensembles sans arête à l’intérieur d’un même ensemble.',
                        'choices' => [
                            ['choice_text' => 'Deux ensembles', 'is_correct' => true],
                            ['choice_text' => 'Un seul ensemble', 'is_correct' => false],
                            ['choice_text' => 'Trois ensembles obligatoires', 'is_correct' => false],
                            ['choice_text' => 'Autant d’ensembles que d’arêtes', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Dans une bipartition correcte, une arête relie :',
                        'explanation' => 'Toutes les arêtes d’un graphe biparti relient un sommet du premier ensemble à un sommet du second.',
                        'choices' => [
                            ['choice_text' => 'Un sommet de chaque ensemble', 'is_correct' => true],
                            ['choice_text' => 'Deux sommets du même ensemble', 'is_correct' => false],
                            ['choice_text' => 'Uniquement des sommets isolés', 'is_correct' => false],
                            ['choice_text' => 'Toujours le même sommet à lui-même', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un graphe biparti peut-il contenir un cycle de longueur 3 ?',
                        'explanation' => 'Un graphe biparti ne contient aucun cycle impair, donc un triangle est impossible.',
                        'choices' => [
                            ['choice_text' => 'Non', 'is_correct' => true],
                            ['choice_text' => 'Oui', 'is_correct' => false],
                            ['choice_text' => 'Seulement si le graphe est complet', 'is_correct' => false],
                            ['choice_text' => 'Seulement s’il est orienté', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Le graphe K2 est-il biparti ?',
                        'explanation' => 'On peut placer chacun de ses deux sommets dans un ensemble différent.',
                        'choices' => [
                            ['choice_text' => 'Oui', 'is_correct' => true],
                            ['choice_text' => 'Non', 'is_correct' => false],
                            ['choice_text' => 'Seulement avec une boucle', 'is_correct' => false],
                            ['choice_text' => 'Seulement s’il contient un cycle', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un graphe biparti complet K3,2 possède combien de sommets ?',
                        'explanation' => 'La notation K3,2 indique deux ensembles de 3 et 2 sommets, soit 5 sommets au total.',
                        'choices' => [
                            ['choice_text' => '5', 'is_correct' => true],
                            ['choice_text' => '6', 'is_correct' => false],
                            ['choice_text' => '3', 'is_correct' => false],
                            ['choice_text' => '2', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Dans un graphe biparti, une arête peut-elle relier deux sommets du premier ensemble ?',
                        'explanation' => 'Non. Une arête doit relier les deux ensembles distincts.',
                        'choices' => [
                            ['choice_text' => 'Non', 'is_correct' => true],
                            ['choice_text' => 'Oui, toujours', 'is_correct' => false],
                            ['choice_text' => 'Oui, si les sommets sont adjacents', 'is_correct' => false],
                            ['choice_text' => 'Seulement dans un arbre', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Tout arbre est-il un graphe biparti ?',
                        'explanation' => 'Oui. Comme un arbre ne contient aucun cycle impair, ses sommets peuvent être partitionnés en deux ensembles selon la parité de leur distance à un sommet choisi.',
                        'choices' => [
                            ['choice_text' => 'Oui', 'is_correct' => true],
                            ['choice_text' => 'Non', 'is_correct' => false],
                            ['choice_text' => 'Seulement les arbres complets', 'is_correct' => false],
                            ['choice_text' => 'Seulement les arbres à 2 sommets', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un cycle de longueur 4 peut-il être biparti ?',
                        'explanation' => 'Oui. Les sommets peuvent être répartis alternativement dans les deux ensembles.',
                        'choices' => [
                            ['choice_text' => 'Oui', 'is_correct' => true],
                            ['choice_text' => 'Non', 'is_correct' => false],
                            ['choice_text' => 'Seulement s’il est orienté', 'is_correct' => false],
                            ['choice_text' => 'Seulement s’il possède 8 arêtes', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une caractéristique importante des graphes bipartis est l’absence de cycles :',
                        'explanation' => 'Ils peuvent avoir des cycles, mais aucun cycle de longueur impaire.',
                        'choices' => [
                            ['choice_text' => 'Impairs', 'is_correct' => true],
                            ['choice_text' => 'De longueur paire', 'is_correct' => false],
                            ['choice_text' => 'De toute longueur', 'is_correct' => false],
                            ['choice_text' => 'De longueur zéro uniquement', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel exemple se prête naturellement à un graphe biparti ?',
                        'explanation' => 'Dans un modèle étudiants-cours, on peut séparer les sommets en deux types et relier uniquement un étudiant à un cours.',
                        'choices' => [
                            ['choice_text' => 'Étudiants reliés aux cours qu’ils suivent', 'is_correct' => true],
                            ['choice_text' => 'Une relation arbitraire entre tous les étudiants uniquement', 'is_correct' => false],
                            ['choice_text' => 'Une suite de nombres premiers', 'is_correct' => false],
                            ['choice_text' => 'Une intégrale définie', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Graphes eulériens et représentations',
                'description' => 'Initiation aux parcours eulériens et aux représentations par matrice ou liste d’adjacence.',
                'duration' => 30,
                'passing_score' => 65,
                'questions' => [
                    [
                        'question' => 'Un parcours eulérien utilise chaque :',
                        'explanation' => 'La caractéristique essentielle d’un parcours eulérien est de parcourir chaque arête exactement une fois.',
                        'choices' => [
                            ['choice_text' => 'Arête exactement une fois', 'is_correct' => true],
                            ['choice_text' => 'Sommet exactement une fois', 'is_correct' => false],
                            ['choice_text' => 'Cycle exactement une fois', 'is_correct' => false],
                            ['choice_text' => 'Composante exactement une fois', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un circuit eulérien se distingue d’un simple parcours eulérien parce qu’il :',
                        'explanation' => 'Dans un circuit eulérien, le parcours revient à son sommet de départ après avoir utilisé chaque arête exactement une fois.',
                        'choices' => [
                            ['choice_text' => 'Commence et finit au même sommet', 'is_correct' => true],
                            ['choice_text' => 'Ne contient aucune arête', 'is_correct' => false],
                            ['choice_text' => 'Visite chaque sommet une seule fois', 'is_correct' => false],
                            ['choice_text' => 'Est forcément un arbre', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pour un graphe non orienté connexe, un circuit eulérien existe lorsque :',
                        'explanation' => 'Le critère classique est que tous les sommets aient un degré pair.',
                        'choices' => [
                            ['choice_text' => 'Tous les sommets ont un degré pair', 'is_correct' => true],
                            ['choice_text' => 'Tous les sommets ont un degré impair', 'is_correct' => false],
                            ['choice_text' => 'Tous les sommets sont isolés', 'is_correct' => false],
                            ['choice_text' => 'Le graphe est forcément complet', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un parcours eulérien peut-il commencer et finir sur deux sommets différents ?',
                        'explanation' => 'Oui. Lorsqu’il existe un parcours eulérien ouvert, ses deux extrémités sont différentes.',
                        'choices' => [
                            ['choice_text' => 'Oui', 'is_correct' => true],
                            ['choice_text' => 'Non, jamais', 'is_correct' => false],
                            ['choice_text' => 'Seulement dans un graphe complet', 'is_correct' => false],
                            ['choice_text' => 'Seulement dans un arbre de 2 sommets', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une matrice d’adjacence d’un graphe à 5 sommets possède :',
                        'explanation' => 'Il y a une ligne et une colonne pour chaque sommet, donc une matrice 5 × 5.',
                        'choices' => [
                            ['choice_text' => '25 cases', 'is_correct' => true],
                            ['choice_text' => '10 cases', 'is_correct' => false],
                            ['choice_text' => '20 cases', 'is_correct' => false],
                            ['choice_text' => '5 cases', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Dans un graphe simple non orienté, la matrice d’adjacence est :',
                        'explanation' => 'Si le sommet A est adjacent à B, B est aussi adjacent à A, ce qui rend la matrice symétrique.',
                        'choices' => [
                            ['choice_text' => 'Symétrique', 'is_correct' => true],
                            ['choice_text' => 'Toujours triangulaire supérieure', 'is_correct' => false],
                            ['choice_text' => 'Toujours identité', 'is_correct' => false],
                            ['choice_text' => 'Toujours diagonale non nulle', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Dans la matrice d’adjacence d’un graphe simple, la diagonale contient généralement :',
                        'explanation' => 'Comme les boucles sont interdites dans un graphe simple, aucun sommet n’est adjacent à lui-même.',
                        'choices' => [
                            ['choice_text' => 'Des zéros', 'is_correct' => true],
                            ['choice_text' => 'Des uns obligatoirement', 'is_correct' => false],
                            ['choice_text' => 'Les degrés', 'is_correct' => false],
                            ['choice_text' => 'Les distances', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel format est souvent pratique pour un graphe peu dense ?',
                        'explanation' => 'Une liste d’adjacence ne stocke que les voisins réellement présents.',
                        'choices' => [
                            ['choice_text' => 'Liste d’adjacence', 'is_correct' => true],
                            ['choice_text' => 'Matrice dense obligatoire', 'is_correct' => false],
                            ['choice_text' => 'Table de primitives', 'is_correct' => false],
                            ['choice_text' => 'Table de conjugaison', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Le problème des ponts de Königsberg est historiquement associé à :',
                        'explanation' => 'Leonhard Euler a étudié ce problème, considéré comme un point fondateur de la théorie des graphes.',
                        'choices' => [
                            ['choice_text' => 'La théorie des graphes', 'is_correct' => true],
                            ['choice_text' => 'La théorie des nombres uniquement', 'is_correct' => false],
                            ['choice_text' => 'Le calcul intégral uniquement', 'is_correct' => false],
                            ['choice_text' => 'La géométrie différentielle uniquement', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pour représenter un graphe où deux sommets sont reliés, quelle valeur place-t-on généralement dans leur case d’adjacence ?',
                        'explanation' => 'Dans une représentation binaire d’un graphe simple, 1 indique la présence d’une arête et 0 son absence.',
                        'choices' => [
                            ['choice_text' => '1', 'is_correct' => true],
                            ['choice_text' => '0', 'is_correct' => false],
                            ['choice_text' => 'Le degré total', 'is_correct' => false],
                            ['choice_text' => 'Le nombre de cycles', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un graphe connexe dont exactement deux sommets sont de degré impair admet classiquement :',
                        'explanation' => 'Un graphe non orienté connexe avec exactement deux sommets impairs possède un parcours eulérien ouvert.',
                        'choices' => [
                            ['choice_text' => 'Un parcours eulérien ouvert', 'is_correct' => true],
                            ['choice_text' => 'Toujours un circuit eulérien', 'is_correct' => false],
                            ['choice_text' => 'Aucun parcours utilisant toutes les arêtes', 'is_correct' => false],
                            ['choice_text' => 'Uniquement un arbre', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Le mot « eulérien » en théorie des graphes est lié principalement à :',
                        'explanation' => 'Il désigne des problèmes où l’on cherche à parcourir les arêtes d’un graphe une seule fois.',
                        'choices' => [
                            ['choice_text' => 'La traversée des arêtes', 'is_correct' => true],
                            ['choice_text' => 'La factorisation des entiers', 'is_correct' => false],
                            ['choice_text' => 'La dérivation', 'is_correct' => false],
                            ['choice_text' => 'Les valeurs propres', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Applications et révision des graphes',
                'description' => 'Révision générale des concepts de base et de leurs applications concrètes.',
                'duration' => 35,
                'passing_score' => 70,
                'questions' => [
                    [
                        'question' => 'Dans un réseau social, les sommets peuvent représenter :',
                        'explanation' => 'Les utilisateurs ou autres entités du réseau peuvent être modélisés par des sommets.',
                        'choices' => [
                            ['choice_text' => 'Les utilisateurs', 'is_correct' => true],
                            ['choice_text' => 'Uniquement les messages', 'is_correct' => false],
                            ['choice_text' => 'Uniquement les dates', 'is_correct' => false],
                            ['choice_text' => 'Les dérivées', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Dans un graphe représentant un réseau informatique, une arête peut représenter :',
                        'explanation' => 'Une arête peut modéliser une liaison ou une connexion entre deux équipements.',
                        'choices' => [
                            ['choice_text' => 'Une connexion entre deux équipements', 'is_correct' => true],
                            ['choice_text' => 'Un mot de passe uniquement', 'is_correct' => false],
                            ['choice_text' => 'Un sommet isolé', 'is_correct' => false],
                            ['choice_text' => 'Un cycle obligatoire', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel nombre d’arêtes possède un arbre à 15 sommets ?',
                        'explanation' => 'Un arbre à n sommets possède n − 1 arêtes, donc 14.',
                        'choices' => [
                            ['choice_text' => '14', 'is_correct' => true],
                            ['choice_text' => '15', 'is_correct' => false],
                            ['choice_text' => '16', 'is_correct' => false],
                            ['choice_text' => '30', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un graphe simple à 4 sommets peut contenir au maximum :',
                        'explanation' => 'Chaque paire de sommets peut être reliée, soit 4 × 3 / 2 = 6 arêtes.',
                        'choices' => [
                            ['choice_text' => '6 arêtes', 'is_correct' => true],
                            ['choice_text' => '4 arêtes', 'is_correct' => false],
                            ['choice_text' => '8 arêtes', 'is_correct' => false],
                            ['choice_text' => '12 arêtes', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Si un graphe possède 9 arêtes, quelle est la somme de ses degrés ?',
                        'explanation' => 'Le lemme de la poignée de main donne 2 × 9 = 18.',
                        'choices' => [
                            ['choice_text' => '18', 'is_correct' => true],
                            ['choice_text' => '9', 'is_correct' => false],
                            ['choice_text' => '27', 'is_correct' => false],
                            ['choice_text' => '81', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle structure est naturellement adaptée à la modélisation d’un réseau de routes avec des distances ?',
                        'explanation' => 'On utilise un graphe dont les sommets représentent les lieux et dont les arêtes peuvent porter des poids tels que les distances.',
                        'choices' => [
                            ['choice_text' => 'Un graphe pondéré', 'is_correct' => true],
                            ['choice_text' => 'Un graphe sans sommets', 'is_correct' => false],
                            ['choice_text' => 'Une liste de nombres premiers', 'is_correct' => false],
                            ['choice_text' => 'Une primitive', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel énoncé décrit correctement un graphe connexe ?',
                        'explanation' => 'La connexité signifie que toute paire de sommets peut être reliée par un chemin.',
                        'choices' => [
                            ['choice_text' => 'Il existe un chemin entre toute paire de sommets', 'is_correct' => true],
                            ['choice_text' => 'Tous les degrés sont égaux', 'is_correct' => false],
                            ['choice_text' => 'Il n’existe aucun cycle', 'is_correct' => false],
                            ['choice_text' => 'Il possède exactement n−1 arêtes', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel énoncé caractérise un arbre ?',
                        'explanation' => 'Un arbre est un graphe connexe et acyclique.',
                        'choices' => [
                            ['choice_text' => 'Connexe et acyclique', 'is_correct' => true],
                            ['choice_text' => 'Complet et cyclique', 'is_correct' => false],
                            ['choice_text' => 'Toujours orienté', 'is_correct' => false],
                            ['choice_text' => 'Toujours biparti complet', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un graphe biparti ne peut pas contenir :',
                        'explanation' => 'Un graphe biparti ne contient aucun cycle de longueur impaire.',
                        'choices' => [
                            ['choice_text' => 'De cycle impair', 'is_correct' => true],
                            ['choice_text' => 'De cycle pair', 'is_correct' => false],
                            ['choice_text' => 'De sommet', 'is_correct' => false],
                            ['choice_text' => 'D’arête', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pour chercher un parcours eulérien, on s’intéresse principalement aux :',
                        'explanation' => 'Les degrés des sommets déterminent notamment les conditions d’existence des parcours eulériens dans les graphes non orientés connexes.',
                        'choices' => [
                            ['choice_text' => 'Degrés des sommets', 'is_correct' => true],
                            ['choice_text' => 'Nombres premiers associés', 'is_correct' => false],
                            ['choice_text' => 'Dérivées des coordonnées', 'is_correct' => false],
                            ['choice_text' => 'Aires des faces uniquement', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle représentation donne directement la liste des voisins de chaque sommet ?',
                        'explanation' => 'La liste d’adjacence associe à chaque sommet les sommets qui lui sont reliés.',
                        'choices' => [
                            ['choice_text' => 'Liste d’adjacence', 'is_correct' => true],
                            ['choice_text' => 'Matrice inverse', 'is_correct' => false],
                            ['choice_text' => 'Table de dérivées', 'is_correct' => false],
                            ['choice_text' => 'Liste des intégrales', 'is_correct' => false],
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
