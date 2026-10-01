<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class SolidStatePhysicsBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'solid-state-physics')->firstOrFail();

        $quizzes = [
            [
                'title' => 'Introduction à la physique du solide',
                'description' => 'Découvrir les propriétés générales des solides et les notions fondamentales de structure microscopique.',
                'questions' => [
                    [
                        'question' => 'Quelle caractéristique distingue généralement un solide d\'un liquide ?',
                        'choices' => [
                            ['choice_text' => 'Un solide possède une forme propre dans des conditions usuelles', 'is_correct' => true],
                            ['choice_text' => 'Un solide ne contient aucune particule mobile', 'is_correct' => false],
                            ['choice_text' => 'Un solide possède toujours une structure totalement désordonnée', 'is_correct' => false],
                            ['choice_text' => 'Un solide ne peut jamais être chauffé', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans des conditions usuelles, un solide conserve une forme propre grâce aux interactions qui maintiennent ses constituants autour de positions d\'équilibre.',
                    ],
                    [
                        'question' => 'À l\'échelle microscopique, les particules d\'un solide sont-elles totalement immobiles ?',
                        'choices' => [
                            ['choice_text' => 'Non, elles peuvent vibrer autour de positions d\'équilibre', 'is_correct' => true],
                            ['choice_text' => 'Oui, elles sont parfaitement immobiles', 'is_correct' => false],
                            ['choice_text' => 'Elles se déplacent toujours librement dans tout le solide', 'is_correct' => false],
                            ['choice_text' => 'Elles disparaissent à basse température', 'is_correct' => false],
                        ],
                        'explanation' => 'Les atomes d\'un solide peuvent effectuer des vibrations autour de leurs positions d\'équilibre.',
                    ],
                    [
                        'question' => 'Qu\'est-ce qu\'un solide cristallin ?',
                        'choices' => [
                            ['choice_text' => 'Un solide dont les constituants présentent un ordre périodique à longue distance', 'is_correct' => true],
                            ['choice_text' => 'Un solide composé uniquement de métal', 'is_correct' => false],
                            ['choice_text' => 'Un solide toujours transparent', 'is_correct' => false],
                            ['choice_text' => 'Un solide sans aucune structure microscopique', 'is_correct' => false],
                        ],
                        'explanation' => 'Un cristal possède une organisation périodique de ses constituants à l\'échelle microscopique.',
                    ],
                    [
                        'question' => 'Comment appelle-t-on généralement un solide qui ne possède pas d\'ordre cristallin à longue distance ?',
                        'choices' => [
                            ['choice_text' => 'Un solide amorphe', 'is_correct' => true],
                            ['choice_text' => 'Un monocristal parfait', 'is_correct' => false],
                            ['choice_text' => 'Un métal pur', 'is_correct' => false],
                            ['choice_text' => 'Un supraconducteur nécessairement', 'is_correct' => false],
                        ],
                        'explanation' => 'Les solides amorphes ne présentent pas l\'ordre périodique à longue distance caractéristique des cristaux.',
                    ],
                    [
                        'question' => 'Quels constituants peuvent former un cristal ?',
                        'choices' => [
                            ['choice_text' => 'Des atomes, des ions ou des molécules', 'is_correct' => true],
                            ['choice_text' => 'Uniquement des électrons', 'is_correct' => false],
                            ['choice_text' => 'Uniquement des photons', 'is_correct' => false],
                            ['choice_text' => 'Uniquement des noyaux isolés', 'is_correct' => false],
                        ],
                        'explanation' => 'Selon le matériau, le réseau cristallin peut être constitué d\'atomes, d\'ions ou de molécules organisés périodiquement.',
                    ],
                    [
                        'question' => 'Pourquoi les propriétés d\'un solide dépendent-elles de sa structure microscopique ?',
                        'choices' => [
                            ['choice_text' => 'L\'organisation des particules influence ses propriétés mécaniques, thermiques et électriques', 'is_correct' => true],
                            ['choice_text' => 'La structure microscopique n\'a aucun effet mesurable', 'is_correct' => false],
                            ['choice_text' => 'Seule la couleur dépend de la structure', 'is_correct' => false],
                            ['choice_text' => 'Les propriétés d\'un solide dépendent uniquement de sa masse', 'is_correct' => false],
                        ],
                        'explanation' => 'La structure atomique et électronique influence fortement le comportement macroscopique du matériau.',
                    ],
                    [
                        'question' => 'Quel type de liaison peut contribuer fortement à la cohésion d\'un métal ?',
                        'choices' => [
                            ['choice_text' => 'La liaison métallique', 'is_correct' => true],
                            ['choice_text' => 'La liaison sonore', 'is_correct' => false],
                            ['choice_text' => 'La liaison gravitationnelle terrestre uniquement', 'is_correct' => false],
                            ['choice_text' => 'La liaison acoustique', 'is_correct' => false],
                        ],
                        'explanation' => 'La liaison métallique résulte de l\'interaction entre les ions du réseau et les électrons de valence délocalisés.',
                    ],
                    [
                        'question' => 'Quel matériau est un exemple courant de solide cristallin ?',
                        'choices' => [
                            ['choice_text' => 'Le chlorure de sodium solide', 'is_correct' => true],
                            ['choice_text' => 'Le verre ordinaire', 'is_correct' => false],
                            ['choice_text' => 'L\'air', 'is_correct' => false],
                            ['choice_text' => 'La vapeur d\'eau', 'is_correct' => false],
                        ],
                        'explanation' => 'Le chlorure de sodium solide possède une structure cristalline ordonnée.',
                    ],
                    [
                        'question' => 'Le verre ordinaire est généralement classé comme :',
                        'choices' => [
                            ['choice_text' => 'Un solide amorphe', 'is_correct' => true],
                            ['choice_text' => 'Un monocristal ionique', 'is_correct' => false],
                            ['choice_text' => 'Un gaz cristallin', 'is_correct' => false],
                            ['choice_text' => 'Un métal liquide', 'is_correct' => false],
                        ],
                        'explanation' => 'Le verre possède une structure désordonnée à longue distance et constitue donc un exemple classique de solide amorphe.',
                    ],
                    [
                        'question' => 'Que signifie qu\'une structure cristalline est périodique ?',
                        'choices' => [
                            ['choice_text' => 'Une même organisation se répète régulièrement dans l\'espace', 'is_correct' => true],
                            ['choice_text' => 'Chaque atome possède une structure complètement différente de ses voisins', 'is_correct' => false],
                            ['choice_text' => 'Les particules sont réparties au hasard', 'is_correct' => false],
                            ['choice_text' => 'Le cristal change nécessairement de forme chaque seconde', 'is_correct' => false],
                        ],
                        'explanation' => 'La périodicité signifie que la disposition des constituants se répète selon des translations du réseau.',
                    ],
                ],
            ],

            [
                'title' => 'Réseaux cristallins et maille élémentaire',
                'description' => 'Comprendre la notion de réseau cristallin, de maille et les principales structures cubiques.',
                'questions' => [
                    [
                        'question' => 'Qu\'est-ce qu\'une maille élémentaire en cristallographie ?',
                        'choices' => [
                            ['choice_text' => 'Une unité géométrique permettant de construire le réseau par répétition', 'is_correct' => true],
                            ['choice_text' => 'Un électron isolé du cristal', 'is_correct' => false],
                            ['choice_text' => 'Une molécule nécessairement indépendante du réseau', 'is_correct' => false],
                            ['choice_text' => 'La température de fusion du matériau', 'is_correct' => false],
                        ],
                        'explanation' => 'La maille est une unité géométrique qui, répétée convenablement, permet de reconstruire la structure périodique du cristal.',
                    ],
                    [
                        'question' => 'Dans une maille cubique simple, où se trouvent les points du réseau ?',
                        'choices' => [
                            ['choice_text' => 'Aux huit sommets du cube', 'is_correct' => true],
                            ['choice_text' => 'Uniquement au centre du cube', 'is_correct' => false],
                            ['choice_text' => 'Au centre de chaque face uniquement', 'is_correct' => false],
                            ['choice_text' => 'Sur aucune arête ni aucun sommet', 'is_correct' => false],
                        ],
                        'explanation' => 'La maille cubique simple possède des points de réseau uniquement aux sommets.',
                    ],
                    [
                        'question' => 'Combien de points de réseau effectifs contient une maille cubique simple ?',
                        'choices' => [
                            ['choice_text' => '1', 'is_correct' => true],
                            ['choice_text' => '2', 'is_correct' => false],
                            ['choice_text' => '4', 'is_correct' => false],
                            ['choice_text' => '8', 'is_correct' => false],
                        ],
                        'explanation' => 'Chaque sommet est partagé entre huit mailles, donc les huit sommets contribuent ensemble à 8 × 1/8 = 1 point.',
                    ],
                    [
                        'question' => 'Dans une structure cubique centrée, où se trouve le point de réseau supplémentaire ?',
                        'choices' => [
                            ['choice_text' => 'Au centre du cube', 'is_correct' => true],
                            ['choice_text' => 'Au centre de chaque face', 'is_correct' => false],
                            ['choice_text' => 'Uniquement sur les arêtes', 'is_correct' => false],
                            ['choice_text' => 'À l\'extérieur du cube', 'is_correct' => false],
                        ],
                        'explanation' => 'La structure cubique centrée possède les sommets et un point de réseau au centre du cube.',
                    ],
                    [
                        'question' => 'Combien de points de réseau effectifs possède une maille cubique centrée ?',
                        'choices' => [
                            ['choice_text' => '2', 'is_correct' => true],
                            ['choice_text' => '1', 'is_correct' => false],
                            ['choice_text' => '4', 'is_correct' => false],
                            ['choice_text' => '8', 'is_correct' => false],
                        ],
                        'explanation' => 'Les huit sommets apportent un point effectif et le centre apporte un point supplémentaire, soit 2 au total.',
                    ],
                    [
                        'question' => 'Dans une structure cubique à faces centrées, où trouve-t-on des points de réseau supplémentaires ?',
                        'choices' => [
                            ['choice_text' => 'Au centre de chacune des six faces', 'is_correct' => true],
                            ['choice_text' => 'Uniquement au centre du cube', 'is_correct' => false],
                            ['choice_text' => 'Uniquement sur les arêtes', 'is_correct' => false],
                            ['choice_text' => 'Uniquement en dehors du cube', 'is_correct' => false],
                        ],
                        'explanation' => 'Une maille cubique à faces centrées possède un point au centre de chaque face en plus des sommets.',
                    ],
                    [
                        'question' => 'Combien de points de réseau effectifs possède une maille cubique à faces centrées ?',
                        'choices' => [
                            ['choice_text' => '4', 'is_correct' => true],
                            ['choice_text' => '2', 'is_correct' => false],
                            ['choice_text' => '6', 'is_correct' => false],
                            ['choice_text' => '8', 'is_correct' => false],
                        ],
                        'explanation' => 'Les sommets contribuent pour 1 et les six faces pour 3, donnant un total de 4 points effectifs.',
                    ],
                    [
                        'question' => 'À quoi sert principalement la maille conventionnelle ?',
                        'choices' => [
                            ['choice_text' => 'À représenter plus simplement la symétrie et la géométrie du cristal', 'is_correct' => true],
                            ['choice_text' => 'À mesurer directement la vitesse des électrons', 'is_correct' => false],
                            ['choice_text' => 'À remplacer toutes les expériences', 'is_correct' => false],
                            ['choice_text' => 'À calculer uniquement la température absolue', 'is_correct' => false],
                        ],
                        'explanation' => 'La maille conventionnelle est choisie pour rendre visible la symétrie du réseau et faciliter sa description.',
                    ],
                    [
                        'question' => 'Que décrit principalement un réseau cristallin ?',
                        'choices' => [
                            ['choice_text' => 'La répétition régulière des positions dans l\'espace', 'is_correct' => true],
                            ['choice_text' => 'La trajectoire individuelle de chaque électron', 'is_correct' => false],
                            ['choice_text' => 'La vitesse de la lumière', 'is_correct' => false],
                            ['choice_text' => 'La masse totale du matériau uniquement', 'is_correct' => false],
                        ],
                        'explanation' => 'Le réseau cristallin définit les positions qui se répètent périodiquement dans l\'espace.',
                    ],
                    [
                        'question' => 'Une même maille cristalline peut-elle être répétée un très grand nombre de fois pour former un cristal macroscopique ?',
                        'choices' => [
                            ['choice_text' => 'Oui', 'is_correct' => true],
                            ['choice_text' => 'Non, seulement deux fois', 'is_correct' => false],
                            ['choice_text' => 'Non, une seule maille suffit toujours', 'is_correct' => false],
                            ['choice_text' => 'Seulement pour les liquides', 'is_correct' => false],
                        ],
                        'explanation' => 'La répétition périodique de la maille permet de construire une structure cristalline étendue.',
                    ],
                ],
            ],

            [
                'title' => 'Structure atomique des solides',
                'description' => 'Étudier les arrangements atomiques, la coordinence et le rôle des distances interatomiques.',
                'questions' => [
                    [
                        'question' => 'Que représente la distance interatomique ?',
                        'choices' => [
                            ['choice_text' => 'La distance caractéristique séparant deux atomes voisins dans une structure', 'is_correct' => true],
                            ['choice_text' => 'La distance entre le cristal et le Soleil', 'is_correct' => false],
                            ['choice_text' => 'La masse séparant deux électrons', 'is_correct' => false],
                            ['choice_text' => 'La distance parcourue par la lumière en une seconde', 'is_correct' => false],
                        ],
                        'explanation' => 'La distance interatomique décrit l\'espacement entre des atomes, notamment les plus proches voisins.',
                    ],
                    [
                        'question' => 'Qu\'appelle-t-on coordinence d\'un atome dans un cristal ?',
                        'choices' => [
                            ['choice_text' => 'Le nombre de plus proches voisins de l\'atome', 'is_correct' => true],
                            ['choice_text' => 'Le nombre total d\'atomes dans tout le cristal', 'is_correct' => false],
                            ['choice_text' => 'Le nombre d\'électrons libres uniquement', 'is_correct' => false],
                            ['choice_text' => 'Le nombre de faces de l\'échantillon', 'is_correct' => false],
                        ],
                        'explanation' => 'La coordinence est définie comme le nombre de voisins les plus proches d\'un atome donné.',
                    ],
                    [
                        'question' => 'Quelle est la coordinence d\'une structure cubique simple idéale ?',
                        'choices' => [
                            ['choice_text' => '6', 'is_correct' => true],
                            ['choice_text' => '4', 'is_correct' => false],
                            ['choice_text' => '8', 'is_correct' => false],
                            ['choice_text' => '12', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans une structure cubique simple, chaque atome possède six plus proches voisins.',
                    ],
                    [
                        'question' => 'Quelle est la coordinence d\'une structure cubique centrée ?',
                        'choices' => [
                            ['choice_text' => '8', 'is_correct' => true],
                            ['choice_text' => '4', 'is_correct' => false],
                            ['choice_text' => '6', 'is_correct' => false],
                            ['choice_text' => '12', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans une structure cubique centrée, chaque atome possède huit plus proches voisins.',
                    ],
                    [
                        'question' => 'Quelle est la coordinence d\'une structure cubique à faces centrées ?',
                        'choices' => [
                            ['choice_text' => '12', 'is_correct' => true],
                            ['choice_text' => '6', 'is_correct' => false],
                            ['choice_text' => '8', 'is_correct' => false],
                            ['choice_text' => '4', 'is_correct' => false],
                        ],
                        'explanation' => 'La structure cubique à faces centrées possède une coordinence de 12.',
                    ],
                    [
                        'question' => 'Pourquoi les atomes d\'un solide cristallin ne sont-ils pas placés complètement au hasard ?',
                        'choices' => [
                            ['choice_text' => 'Les interactions entre les constituants favorisent certaines configurations stables', 'is_correct' => true],
                            ['choice_text' => 'La gravité terrestre les place toujours sur un quadrillage parfait', 'is_correct' => false],
                            ['choice_text' => 'Les électrons imposent toujours la même position absolue dans l\'espace', 'is_correct' => false],
                            ['choice_text' => 'Les atomes ne subissent aucune interaction', 'is_correct' => false],
                        ],
                        'explanation' => 'L\'équilibre entre les interactions interatomiques favorise certaines positions d\'équilibre et certaines structures.',
                    ],
                    [
                        'question' => 'Que se passe-t-il généralement quand on chauffe un solide ?',
                        'choices' => [
                            ['choice_text' => 'Les vibrations des constituants augmentent et les distances moyennes peuvent légèrement changer', 'is_correct' => true],
                            ['choice_text' => 'Tous les atomes deviennent immobiles', 'is_correct' => false],
                            ['choice_text' => 'Le nombre de protons de chaque atome double', 'is_correct' => false],
                            ['choice_text' => 'La masse de chaque proton devient nulle', 'is_correct' => false],
                        ],
                        'explanation' => 'L\'augmentation de température accroît l\'énergie vibratoire du réseau et provoque généralement une dilatation thermique.',
                    ],
                    [
                        'question' => 'La densité d\'un matériau dépend-elle de son organisation microscopique ?',
                        'choices' => [
                            ['choice_text' => 'Oui, notamment de la masse des constituants et de leur arrangement spatial', 'is_correct' => true],
                            ['choice_text' => 'Non, elle dépend uniquement de la couleur', 'is_correct' => false],
                            ['choice_text' => 'Non, elle est identique pour tous les matériaux', 'is_correct' => false],
                            ['choice_text' => 'Oui, mais uniquement dans les gaz', 'is_correct' => false],
                        ],
                        'explanation' => 'La densité dépend du rapport entre la masse et le volume occupé, lequel est lié à la structure du matériau.',
                    ],
                    [
                        'question' => 'Pourquoi la connaissance des plus proches voisins est-elle utile ?',
                        'choices' => [
                            ['choice_text' => 'Elle aide à comprendre la géométrie et certaines propriétés du cristal', 'is_correct' => true],
                            ['choice_text' => 'Elle permet uniquement de mesurer la température', 'is_correct' => false],
                            ['choice_text' => 'Elle supprime les défauts du matériau', 'is_correct' => false],
                            ['choice_text' => 'Elle n\'a aucun intérêt physique', 'is_correct' => false],
                        ],
                        'explanation' => 'La géométrie locale autour des atomes influence plusieurs propriétés structurales et physiques.',
                    ],
                    [
                        'question' => 'Deux solides ayant la même composition chimique peuvent-ils avoir des propriétés différentes à cause de leur structure ?',
                        'choices' => [
                            ['choice_text' => 'Oui', 'is_correct' => true],
                            ['choice_text' => 'Non, la composition suffit toujours à déterminer toutes les propriétés', 'is_correct' => false],
                            ['choice_text' => 'Seulement s\'ils sont liquides', 'is_correct' => false],
                            ['choice_text' => 'Seulement si leurs noyaux sont différents', 'is_correct' => false],
                        ],
                        'explanation' => 'Des structures différentes peuvent conduire à des propriétés très différentes malgré une même composition chimique.',
                    ],
                ],
            ],

            [
                'title' => 'Défauts cristallins',
                'description' => 'Découvrir les défauts ponctuels, les dislocations et leur influence sur les propriétés des matériaux.',
                'questions' => [
                    [
                        'question' => 'Un cristal réel est-il toujours parfaitement périodique partout ?',
                        'choices' => [
                            ['choice_text' => 'Non, il peut contenir différents types de défauts', 'is_correct' => true],
                            ['choice_text' => 'Oui, sans aucune exception', 'is_correct' => false],
                            ['choice_text' => 'Oui, mais uniquement dans les métaux', 'is_correct' => false],
                            ['choice_text' => 'Non, parce qu\'aucun cristal ne possède de structure', 'is_correct' => false],
                        ],
                        'explanation' => 'Les cristaux réels contiennent généralement des défauts, même si une structure parfaite est utile comme modèle.',
                    ],
                    [
                        'question' => 'Comment appelle-t-on l\'absence d\'un atome à un site normalement occupé du réseau ?',
                        'choices' => [
                            ['choice_text' => 'Une lacune', 'is_correct' => true],
                            ['choice_text' => 'Une interstitielle', 'is_correct' => false],
                            ['choice_text' => 'Une dislocation hélicoïdale', 'is_correct' => false],
                            ['choice_text' => 'Un photon', 'is_correct' => false],
                        ],
                        'explanation' => 'Une lacune est un site du réseau qui devrait être occupé mais qui est vacant.',
                    ],
                    [
                        'question' => 'Qu\'est-ce qu\'un atome interstitiel ?',
                        'choices' => [
                            ['choice_text' => 'Un atome situé dans un espace interstitiel du réseau', 'is_correct' => true],
                            ['choice_text' => 'Un atome situé obligatoirement au centre du noyau', 'is_correct' => false],
                            ['choice_text' => 'Un électron libre sans noyau', 'is_correct' => false],
                            ['choice_text' => 'Un défaut uniquement électronique', 'is_correct' => false],
                        ],
                        'explanation' => 'Un atome interstitiel occupe une position qui n\'est pas un site normal du réseau cristallin.',
                    ],
                    [
                        'question' => 'Une dislocation est principalement :',
                        'choices' => [
                            ['choice_text' => 'Un défaut linéaire du réseau cristallin', 'is_correct' => true],
                            ['choice_text' => 'Une particule élémentaire', 'is_correct' => false],
                            ['choice_text' => 'Une vibration sonore dans l\'air', 'is_correct' => false],
                            ['choice_text' => 'Une absence totale de matière', 'is_correct' => false],
                        ],
                        'explanation' => 'Les dislocations sont des défauts linéaires qui jouent un rôle important dans la déformation plastique des matériaux.',
                    ],
                    [
                        'question' => 'Les défauts cristallins peuvent-ils influencer la résistance mécanique d\'un matériau ?',
                        'choices' => [
                            ['choice_text' => 'Oui', 'is_correct' => true],
                            ['choice_text' => 'Non, jamais', 'is_correct' => false],
                            ['choice_text' => 'Seulement dans les gaz', 'is_correct' => false],
                            ['choice_text' => 'Seulement pour les photons', 'is_correct' => false],
                        ],
                        'explanation' => 'Les défauts, notamment les dislocations et les impuretés, jouent un rôle central dans les propriétés mécaniques des solides.',
                    ],
                    [
                        'question' => 'Pourquoi les impuretés peuvent-elles modifier les propriétés d\'un cristal ?',
                        'choices' => [
                            ['choice_text' => 'Elles perturbent localement la structure et peuvent modifier les interactions ou le nombre de porteurs', 'is_correct' => true],
                            ['choice_text' => 'Elles ne peuvent jamais interagir avec le réseau', 'is_correct' => false],
                            ['choice_text' => 'Elles remplacent toujours tous les atomes du cristal', 'is_correct' => false],
                            ['choice_text' => 'Elles transforment nécessairement le matériau en gaz', 'is_correct' => false],
                        ],
                        'explanation' => 'Une impureté modifie localement la structure et peut influencer les propriétés mécaniques ou électroniques.',
                    ],
                    [
                        'question' => 'Quel défaut ponctuel correspond à un atome supplémentaire placé dans un site non prévu du réseau ?',
                        'choices' => [
                            ['choice_text' => 'Un défaut interstitiel', 'is_correct' => true],
                            ['choice_text' => 'Une lacune', 'is_correct' => false],
                            ['choice_text' => 'Une dislocation', 'is_correct' => false],
                            ['choice_text' => 'Une frontière de grain', 'is_correct' => false],
                        ],
                        'explanation' => 'Un atome supplémentaire qui occupe un espace entre les sites normaux crée un défaut interstitiel.',
                    ],
                    [
                        'question' => 'Que peut provoquer une forte concentration de défauts dans un cristal ?',
                        'choices' => [
                            ['choice_text' => 'Une modification importante de certaines propriétés physiques', 'is_correct' => true],
                            ['choice_text' => 'La disparition obligatoire du noyau', 'is_correct' => false],
                            ['choice_text' => 'La suppression de toute masse', 'is_correct' => false],
                            ['choice_text' => 'La transformation immédiate en liquide', 'is_correct' => false],
                        ],
                        'explanation' => 'Les défauts peuvent modifier la conduction, la diffusion, la résistance mécanique et d\'autres propriétés.',
                    ],
                    [
                        'question' => 'Les défauts cristallins sont-ils toujours nuisibles ?',
                        'choices' => [
                            ['choice_text' => 'Non, certains défauts sont utilisés volontairement pour obtenir des propriétés recherchées', 'is_correct' => true],
                            ['choice_text' => 'Oui, sans aucune exception', 'is_correct' => false],
                            ['choice_text' => 'Oui, car ils détruisent toujours le cristal', 'is_correct' => false],
                            ['choice_text' => 'Non, parce qu\'un cristal n\'a jamais de défaut', 'is_correct' => false],
                        ],
                        'explanation' => 'Le contrôle des défauts et du dopage permet notamment d\'adapter les propriétés des matériaux.',
                    ],
                    [
                        'question' => 'Quel type de défaut est associé à la séparation entre deux domaines cristallins différemment orientés ?',
                        'choices' => [
                            ['choice_text' => 'Une frontière de grain', 'is_correct' => true],
                            ['choice_text' => 'Une lacune isolée', 'is_correct' => false],
                            ['choice_text' => 'Un électron libre', 'is_correct' => false],
                            ['choice_text' => 'Un neutron thermique', 'is_correct' => false],
                        ],
                        'explanation' => 'Une frontière de grain sépare deux cristallites dont les orientations cristallographiques diffèrent.',
                    ],
                ],
            ],

            [
                'title' => 'Vibrations du réseau et phonons',
                'description' => 'Introduire les vibrations collectives du réseau et la notion de phonon.',
                'questions' => [
                    [
                        'question' => 'Comment appelle-t-on les oscillations des atomes autour de leurs positions d\'équilibre dans un cristal ?',
                        'choices' => [
                            ['choice_text' => 'Des vibrations du réseau', 'is_correct' => true],
                            ['choice_text' => 'Des réactions nucléaires', 'is_correct' => false],
                            ['choice_text' => 'Des ionisations permanentes', 'is_correct' => false],
                            ['choice_text' => 'Des collisions macroscopiques uniquement', 'is_correct' => false],
                        ],
                        'explanation' => 'Les atomes d\'un solide vibrent autour de leurs positions d\'équilibre, donnant naissance à des modes collectifs.',
                    ],
                    [
                        'question' => 'Qu\'est-ce qu\'un phonon ?',
                        'choices' => [
                            ['choice_text' => 'Un quantum associé à un mode de vibration du réseau cristallin', 'is_correct' => true],
                            ['choice_text' => 'Une particule nucléaire fondamentale', 'is_correct' => false],
                            ['choice_text' => 'Un électron libre', 'is_correct' => false],
                            ['choice_text' => 'Une onde sonore classique uniquement', 'is_correct' => false],
                        ],
                        'explanation' => 'Le phonon est le quantum d\'excitation d\'un mode vibratoire du réseau cristallin.',
                    ],
                    [
                        'question' => 'L\'énergie d\'un phonon est-elle quantifiée ?',
                        'choices' => [
                            ['choice_text' => 'Oui', 'is_correct' => true],
                            ['choice_text' => 'Non, elle peut prendre n\'importe quelle valeur indépendamment du mode', 'is_correct' => false],
                            ['choice_text' => 'Seulement à température nulle', 'is_correct' => false],
                            ['choice_text' => 'Uniquement dans les métaux', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans la description quantique, les modes vibratoires du réseau sont quantifiés.',
                    ],
                    [
                        'question' => 'Comment l\'élévation de la température affecte-t-elle généralement les vibrations du réseau ?',
                        'choices' => [
                            ['choice_text' => 'Elle augmente l\'excitation vibratoire moyenne', 'is_correct' => true],
                            ['choice_text' => 'Elle arrête complètement les vibrations', 'is_correct' => false],
                            ['choice_text' => 'Elle supprime les atomes', 'is_correct' => false],
                            ['choice_text' => 'Elle transforme tous les phonons en protons', 'is_correct' => false],
                        ],
                        'explanation' => 'Une température plus élevée correspond généralement à une population plus importante de modes vibratoires excités.',
                    ],
                    [
                        'question' => 'Les phonons jouent-ils un rôle dans la capacité d\'un solide à transporter la chaleur ?',
                        'choices' => [
                            ['choice_text' => 'Oui', 'is_correct' => true],
                            ['choice_text' => 'Non, ils ne sont liés qu\'à l\'optique', 'is_correct' => false],
                            ['choice_text' => 'Non, la chaleur ne concerne jamais les solides', 'is_correct' => false],
                            ['choice_text' => 'Uniquement dans les liquides', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans de nombreux solides, le transport thermique est fortement lié aux excitations vibratoires du réseau.',
                    ],
                    [
                        'question' => 'Les phonons sont-ils des particules indépendantes comme les électrons ?',
                        'choices' => [
                            ['choice_text' => 'Non, ce sont des quasiparticules décrivant collectivement des vibrations du réseau', 'is_correct' => true],
                            ['choice_text' => 'Oui, ils sont exactement comme les protons libres', 'is_correct' => false],
                            ['choice_text' => 'Oui, ils possèdent toujours une charge électrique', 'is_correct' => false],
                            ['choice_text' => 'Non, car ils sont des atomes individuels', 'is_correct' => false],
                        ],
                        'explanation' => 'Un phonon est une quasiparticule utilisée pour décrire quantiquement les modes collectifs du réseau.',
                    ],
                    [
                        'question' => 'Une vibration du réseau peut-elle influencer les propriétés électriques d\'un matériau ?',
                        'choices' => [
                            ['choice_text' => 'Oui, elle peut notamment affecter le déplacement des porteurs de charge', 'is_correct' => true],
                            ['choice_text' => 'Non, vibrations et électricité sont toujours totalement indépendantes', 'is_correct' => false],
                            ['choice_text' => 'Oui, mais seulement en l\'absence d\'atomes', 'is_correct' => false],
                            ['choice_text' => 'Non, les électrons ne peuvent jamais interagir avec le réseau', 'is_correct' => false],
                        ],
                        'explanation' => 'Les vibrations du réseau peuvent interagir avec les électrons et modifier leur transport dans le matériau.',
                    ],
                    [
                        'question' => 'À très basse température, les vibrations thermiques du réseau sont-elles généralement réduites ?',
                        'choices' => [
                            ['choice_text' => 'Oui', 'is_correct' => true],
                            ['choice_text' => 'Non, elles augmentent nécessairement', 'is_correct' => false],
                            ['choice_text' => 'Elles deviennent identiques à température ambiante', 'is_correct' => false],
                            ['choice_text' => 'Elles cessent d\'avoir une description quantique', 'is_correct' => false],
                        ],
                        'explanation' => 'La population des excitations thermiques diminue lorsque la température baisse, même si les fluctuations quantiques restent importantes.',
                    ],
                    [
                        'question' => 'Quel phénomène peut être décrit à l\'aide des phonons dans un solide ?',
                        'choices' => [
                            ['choice_text' => 'La propagation de vibrations dans le réseau', 'is_correct' => true],
                            ['choice_text' => 'La désintégration bêta d\'un noyau uniquement', 'is_correct' => false],
                            ['choice_text' => 'La rotation de la Terre', 'is_correct' => false],
                            ['choice_text' => 'La charge électrique du proton', 'is_correct' => false],
                        ],
                        'explanation' => 'Les phonons permettent de décrire les excitations vibratoires et leur propagation dans le cristal.',
                    ],
                    [
                        'question' => 'Pourquoi l\'étude des phonons est-elle importante en physique du solide ?',
                        'choices' => [
                            ['choice_text' => 'Ils permettent de comprendre notamment des aspects de la chaleur, des vibrations et de l\'interaction électron-réseau', 'is_correct' => true],
                            ['choice_text' => 'Ils servent uniquement à nommer les cristaux', 'is_correct' => false],
                            ['choice_text' => 'Ils expliquent seulement la masse du proton', 'is_correct' => false],
                            ['choice_text' => 'Ils remplacent tous les électrons dans un métal', 'is_correct' => false],
                        ],
                        'explanation' => 'Les phonons sont essentiels pour décrire de nombreux phénomènes thermiques et certains mécanismes de transport dans les solides.',
                    ],
                ],
            ],

            [
                'title' => 'Électrons dans les solides',
                'description' => 'Comprendre le comportement des électrons dans les matériaux solides et introduire les notions de bande de valence et de conduction.',
                'questions' => [
                    [
                        'question' => 'Pourquoi les niveaux d\'énergie des atomes peuvent-ils former des bandes dans un solide ?',
                        'choices' => [
                            ['choice_text' => 'Parce que les interactions entre un grand nombre d\'atomes rapprochés modifient et répartissent leurs niveaux', 'is_correct' => true],
                            ['choice_text' => 'Parce que les électrons disparaissent', 'is_correct' => false],
                            ['choice_text' => 'Parce que les noyaux cessent d\'exister', 'is_correct' => false],
                            ['choice_text' => 'Parce que le cristal ne contient aucune interaction', 'is_correct' => false],
                        ],
                        'explanation' => 'Lorsque de nombreux atomes sont rassemblés, leurs états électroniques interagissent et se regroupent en bandes d\'énergie.',
                    ],
                    [
                        'question' => 'Qu\'appelle-t-on bande de valence ?',
                        'choices' => [
                            ['choice_text' => 'Une bande d\'énergie généralement associée aux électrons liés les plus externes du matériau', 'is_correct' => true],
                            ['choice_text' => 'Une bande contenant uniquement les protons', 'is_correct' => false],
                            ['choice_text' => 'Une bande sans aucun électron', 'is_correct' => false],
                            ['choice_text' => 'Une bande exclusivement nucléaire', 'is_correct' => false],
                        ],
                        'explanation' => 'La bande de valence correspond aux états électroniques de valence occupés dans un solide.',
                    ],
                    [
                        'question' => 'Qu\'appelle-t-on bande de conduction ?',
                        'choices' => [
                            ['choice_text' => 'Une bande d\'états dans lesquels les électrons peuvent contribuer plus facilement à la conduction électrique', 'is_correct' => true],
                            ['choice_text' => 'Une bande réservée aux neutrons', 'is_correct' => false],
                            ['choice_text' => 'Une bande contenant uniquement des noyaux', 'is_correct' => false],
                            ['choice_text' => 'Une bande toujours complètement vide dans tous les matériaux', 'is_correct' => false],
                        ],
                        'explanation' => 'Les électrons placés dans des états de conduction peuvent participer au transport électrique.',
                    ],
                    [
                        'question' => 'Qu\'est-ce que la bande interdite ou gap énergétique ?',
                        'choices' => [
                            ['choice_text' => 'Une région d\'énergie dans laquelle aucun état électronique autorisé n\'est disponible dans le modèle considéré', 'is_correct' => true],
                            ['choice_text' => 'Une zone où les noyaux disparaissent', 'is_correct' => false],
                            ['choice_text' => 'Une distance physique entre deux cristaux', 'is_correct' => false],
                            ['choice_text' => 'Une région occupée uniquement par des photons', 'is_correct' => false],
                        ],
                        'explanation' => 'Le gap énergétique sépare certaines bandes d\'énergie permises et ne contient pas d\'états électroniques autorisés dans le modèle simplifié.',
                    ],
                    [
                        'question' => 'Quel type de matériau possède généralement une large bande interdite et conduit très mal l\'électricité à température ambiante ?',
                        'choices' => [
                            ['choice_text' => 'Un isolant', 'is_correct' => true],
                            ['choice_text' => 'Un métal idéal', 'is_correct' => false],
                            ['choice_text' => 'Un conducteur parfait', 'is_correct' => false],
                            ['choice_text' => 'Un plasma nécessairement', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans un isolant, le gap entre les états occupés et les états de conduction est généralement important.',
                    ],
                    [
                        'question' => 'Comment caractérise-t-on généralement un semi-conducteur par rapport à un isolant ?',
                        'choices' => [
                            ['choice_text' => 'Il possède un gap plus faible, permettant une conduction accrue dans certaines conditions', 'is_correct' => true],
                            ['choice_text' => 'Il ne possède aucun électron', 'is_correct' => false],
                            ['choice_text' => 'Il est toujours un meilleur conducteur qu\'un métal', 'is_correct' => false],
                            ['choice_text' => 'Il ne peut jamais être conducteur', 'is_correct' => false],
                        ],
                        'explanation' => 'Les semi-conducteurs ont un gap suffisamment modéré pour que des porteurs puissent être excités vers les états de conduction.',
                    ],
                    [
                        'question' => 'Pourquoi les métaux conduisent-ils généralement bien l\'électricité ?',
                        'choices' => [
                            ['choice_text' => 'Ils disposent d\'états électroniques accessibles permettant le déplacement de porteurs de charge', 'is_correct' => true],
                            ['choice_text' => 'Ils ne contiennent aucun noyau', 'is_correct' => false],
                            ['choice_text' => 'Tous leurs électrons sont complètement immobilisés', 'is_correct' => false],
                            ['choice_text' => 'Leur structure ne contient aucune interaction', 'is_correct' => false],
                        ],
                        'explanation' => 'La structure électronique des métaux permet à des électrons de participer facilement au transport électrique.',
                    ],
                    [
                        'question' => 'Quel phénomène peut fournir à un électron l\'énergie nécessaire pour passer vers une bande de conduction ?',
                        'choices' => [
                            ['choice_text' => 'L\'absorption d\'une quantité suffisante d\'énergie thermique ou photonique', 'is_correct' => true],
                            ['choice_text' => 'La disparition du noyau', 'is_correct' => false],
                            ['choice_text' => 'La suppression de la constante de Planck', 'is_correct' => false],
                            ['choice_text' => 'Une diminution obligatoire de la température', 'is_correct' => false],
                        ],
                        'explanation' => 'Une excitation thermique ou lumineuse peut fournir l\'énergie nécessaire pour franchir le gap.',
                    ],
                    [
                        'question' => 'Qu\'est-ce qu\'un trou en physique des semi-conducteurs ?',
                        'choices' => [
                            ['choice_text' => 'Une absence d\'électron dans une bande autrement occupée, se comportant comme un porteur positif', 'is_correct' => true],
                            ['choice_text' => 'Un vide géométrique dans le cristal', 'is_correct' => false],
                            ['choice_text' => 'Un proton supplémentaire dans le noyau', 'is_correct' => false],
                            ['choice_text' => 'Une lacune atomique uniquement', 'is_correct' => false],
                        ],
                        'explanation' => 'Un trou représente l\'absence d\'un électron dans une bande occupée et peut être traité comme un porteur de charge positive.',
                    ],
                    [
                        'question' => 'Les propriétés électriques d\'un solide dépendent-elles de sa structure électronique ?',
                        'choices' => [
                            ['choice_text' => 'Oui', 'is_correct' => true],
                            ['choice_text' => 'Non, elles dépendent uniquement de la masse volumique', 'is_correct' => false],
                            ['choice_text' => 'Non, elles sont indépendantes des électrons', 'is_correct' => false],
                            ['choice_text' => 'Seulement dans les gaz', 'is_correct' => false],
                        ],
                        'explanation' => 'La structure des états électroniques et leur occupation déterminent une grande partie du comportement électrique du solide.',
                    ],
                ],
            ],

            [
                'title' => 'Métaux, isolants et semi-conducteurs',
                'description' => 'Comparer les principaux types de matériaux selon leurs propriétés électriques et électroniques.',
                'questions' => [
                    [
                        'question' => 'Quel matériau possède généralement la plus forte conductivité électrique parmi les trois catégories suivantes ?',
                        'choices' => [
                            ['choice_text' => 'Un métal', 'is_correct' => true],
                            ['choice_text' => 'Un isolant', 'is_correct' => false],
                            ['choice_text' => 'Un semi-conducteur intrinsèque', 'is_correct' => false],
                            ['choice_text' => 'Tous ont nécessairement la même conductivité', 'is_correct' => false],
                        ],
                        'explanation' => 'Les métaux possèdent généralement une forte concentration de porteurs mobiles et une conductivité élevée.',
                    ],
                    [
                        'question' => 'Le verre est-il généralement considéré comme un bon conducteur électrique ?',
                        'choices' => [
                            ['choice_text' => 'Non, c\'est généralement un isolant', 'is_correct' => true],
                            ['choice_text' => 'Oui, c\'est un conducteur métallique', 'is_correct' => false],
                            ['choice_text' => 'Oui, toujours meilleur que le cuivre', 'is_correct' => false],
                            ['choice_text' => 'Seulement dans le vide', 'is_correct' => false],
                        ],
                        'explanation' => 'Le verre possède une large bande interdite et conduit très peu l\'électricité dans les conditions ordinaires.',
                    ],
                    [
                        'question' => 'Le silicium est classé principalement comme :',
                        'choices' => [
                            ['choice_text' => 'Un semi-conducteur', 'is_correct' => true],
                            ['choice_text' => 'Un isolant parfait', 'is_correct' => false],
                            ['choice_text' => 'Un supraconducteur à température ambiante', 'is_correct' => false],
                            ['choice_text' => 'Un gaz noble', 'is_correct' => false],
                        ],
                        'explanation' => 'Le silicium est l\'un des semi-conducteurs les plus utilisés en électronique.',
                    ],
                    [
                        'question' => 'Comment évolue généralement la résistance électrique d\'un métal lorsque la température augmente ?',
                        'choices' => [
                            ['choice_text' => 'Elle augmente généralement', 'is_correct' => true],
                            ['choice_text' => 'Elle diminue toujours jusqu\'à zéro', 'is_correct' => false],
                            ['choice_text' => 'Elle reste exactement constante dans tous les cas', 'is_correct' => false],
                            ['choice_text' => 'Elle devient automatiquement infinie', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans un métal, l\'augmentation des vibrations du réseau accroît généralement la diffusion des électrons et donc la résistivité.',
                    ],
                    [
                        'question' => 'Comment évolue souvent la conductivité intrinsèque d\'un semi-conducteur lorsque la température augmente ?',
                        'choices' => [
                            ['choice_text' => 'Elle augmente généralement', 'is_correct' => true],
                            ['choice_text' => 'Elle devient forcément nulle', 'is_correct' => false],
                            ['choice_text' => 'Elle diminue toujours comme dans un métal', 'is_correct' => false],
                            ['choice_text' => 'Elle reste indépendante de la température dans tous les cas', 'is_correct' => false],
                        ],
                        'explanation' => 'Une température plus élevée peut fournir l\'énergie nécessaire pour créer davantage de porteurs dans un semi-conducteur intrinsèque.',
                    ],
                    [
                        'question' => 'Quel élément est très utilisé pour fabriquer des composants électroniques à base de semi-conducteurs ?',
                        'choices' => [
                            ['choice_text' => 'Le silicium', 'is_correct' => true],
                            ['choice_text' => 'Le sodium métallique uniquement', 'is_correct' => false],
                            ['choice_text' => 'L\'hélium', 'is_correct' => false],
                            ['choice_text' => 'Le néon gazeux uniquement', 'is_correct' => false],
                        ],
                        'explanation' => 'Le silicium est largement utilisé dans les circuits intégrés et de nombreux dispositifs électroniques.',
                    ],
                    [
                        'question' => 'Qu\'est-ce que le dopage d\'un semi-conducteur ?',
                        'choices' => [
                            ['choice_text' => 'L\'ajout contrôlé d\'impuretés pour modifier sa concentration en porteurs', 'is_correct' => true],
                            ['choice_text' => 'Le chauffage du matériau jusqu\'à sa fusion', 'is_correct' => false],
                            ['choice_text' => 'La suppression de tous les électrons', 'is_correct' => false],
                            ['choice_text' => 'La transformation du semi-conducteur en métal liquide', 'is_correct' => false],
                        ],
                        'explanation' => 'Le dopage introduit volontairement certaines impuretés afin de contrôler les propriétés électroniques du semi-conducteur.',
                    ],
                    [
                        'question' => 'Un semi-conducteur dopé avec des donneurs est généralement appelé :',
                        'choices' => [
                            ['choice_text' => 'Semi-conducteur de type n', 'is_correct' => true],
                            ['choice_text' => 'Semi-conducteur de type p', 'is_correct' => false],
                            ['choice_text' => 'Isolant de type n', 'is_correct' => false],
                            ['choice_text' => 'Métal de type p', 'is_correct' => false],
                        ],
                        'explanation' => 'Le dopage donneur fournit des électrons supplémentaires et produit un matériau de type n.',
                    ],
                    [
                        'question' => 'Un semi-conducteur dopé avec des accepteurs est généralement appelé :',
                        'choices' => [
                            ['choice_text' => 'Semi-conducteur de type p', 'is_correct' => true],
                            ['choice_text' => 'Semi-conducteur de type n', 'is_correct' => false],
                            ['choice_text' => 'Métal de type n', 'is_correct' => false],
                            ['choice_text' => 'Isolant parfait', 'is_correct' => false],
                        ],
                        'explanation' => 'Le dopage accepteur favorise la présence de trous et conduit à un matériau de type p.',
                    ],
                    [
                        'question' => 'Pourquoi les semi-conducteurs sont-ils essentiels à l\'électronique moderne ?',
                        'choices' => [
                            ['choice_text' => 'Leurs propriétés peuvent être contrôlées pour réaliser des dispositifs électroniques', 'is_correct' => true],
                            ['choice_text' => 'Ils ne contiennent aucun électron', 'is_correct' => false],
                            ['choice_text' => 'Ils sont toujours isolants quelle que soit leur composition', 'is_correct' => false],
                            ['choice_text' => 'Ils ne peuvent jamais interagir avec la lumière', 'is_correct' => false],
                        ],
                        'explanation' => 'Les propriétés électroniques des semi-conducteurs peuvent être ajustées par dopage, tension, température ou lumière.',
                    ],
                ],
            ],

            [
                'title' => 'Propriétés thermiques et électriques des solides',
                'description' => 'Étudier les notions élémentaires de conduction thermique, électrique et dilatation des solides.',
                'questions' => [
                    [
                        'question' => 'Quelle grandeur caractérise la capacité d\'un matériau à conduire la chaleur ?',
                        'choices' => [
                            ['choice_text' => 'La conductivité thermique', 'is_correct' => true],
                            ['choice_text' => 'La charge élémentaire', 'is_correct' => false],
                            ['choice_text' => 'La fréquence atomique', 'is_correct' => false],
                            ['choice_text' => 'La longueur d\'onde du vide uniquement', 'is_correct' => false],
                        ],
                        'explanation' => 'La conductivité thermique mesure la capacité d\'un matériau à transporter l\'énergie thermique.',
                    ],
                    [
                        'question' => 'Un bon conducteur électrique est-il nécessairement un bon isolant thermique ?',
                        'choices' => [
                            ['choice_text' => 'Non, les deux propriétés sont liées mais ne sont pas identiques', 'is_correct' => true],
                            ['choice_text' => 'Oui, toujours', 'is_correct' => false],
                            ['choice_text' => 'Oui, uniquement pour les céramiques', 'is_correct' => false],
                            ['choice_text' => 'Non, parce que la chaleur n\'existe pas dans les solides', 'is_correct' => false],
                        ],
                        'explanation' => 'Conductivité électrique et conductivité thermique sont deux propriétés distinctes, même si elles peuvent être corrélées dans certains matériaux.',
                    ],
                    [
                        'question' => 'Quel mécanisme domine souvent le transport de chaleur dans les isolants cristallins non métalliques ?',
                        'choices' => [
                            ['choice_text' => 'Le transport par vibrations du réseau', 'is_correct' => true],
                            ['choice_text' => 'Le transport par électrons libres uniquement', 'is_correct' => false],
                            ['choice_text' => 'La fission nucléaire', 'is_correct' => false],
                            ['choice_text' => 'La gravité', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans de nombreux isolants, les phonons jouent un rôle majeur dans le transport thermique.',
                    ],
                    [
                        'question' => 'Pourquoi les métaux conduisent-ils généralement bien la chaleur ?',
                        'choices' => [
                            ['choice_text' => 'Les électrons de conduction peuvent transporter rapidement de l\'énergie', 'is_correct' => true],
                            ['choice_text' => 'Ils ne contiennent aucun phonon', 'is_correct' => false],
                            ['choice_text' => 'La chaleur y est transportée uniquement par les noyaux', 'is_correct' => false],
                            ['choice_text' => 'Parce que leur température est toujours infinie', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans un métal, les électrons de conduction contribuent fortement au transport thermique.',
                    ],
                    [
                        'question' => 'Qu\'est-ce que la dilatation thermique d\'un solide ?',
                        'choices' => [
                            ['choice_text' => 'La variation de ses dimensions avec la température', 'is_correct' => true],
                            ['choice_text' => 'La disparition de ses atomes lors du chauffage', 'is_correct' => false],
                            ['choice_text' => 'La diminution obligatoire de sa masse', 'is_correct' => false],
                            ['choice_text' => 'La transformation systématique du solide en plasma', 'is_correct' => false],
                        ],
                        'explanation' => 'Les dimensions d\'un matériau peuvent varier avec la température en raison des vibrations et de l\'asymétrie des interactions.',
                    ],
                    [
                        'question' => 'Quand on augmente généralement la température d\'un solide, son volume :',
                        'choices' => [
                            ['choice_text' => 'Augmente légèrement dans la plupart des matériaux', 'is_correct' => true],
                            ['choice_text' => 'Devient toujours nul', 'is_correct' => false],
                            ['choice_text' => 'Diminue toujours', 'is_correct' => false],
                            ['choice_text' => 'Reste toujours exactement constant', 'is_correct' => false],
                        ],
                        'explanation' => 'La plupart des matériaux se dilatent lorsqu\'ils sont chauffés.',
                    ],
                    [
                        'question' => 'Pourquoi un matériau peut-il être utilisé comme isolant thermique ?',
                        'choices' => [
                            ['choice_text' => 'Sa structure limite le transport efficace de l\'énergie thermique', 'is_correct' => true],
                            ['choice_text' => 'Parce qu\'il ne possède aucune vibration', 'is_correct' => false],
                            ['choice_text' => 'Parce qu\'il ne contient aucun atome', 'is_correct' => false],
                            ['choice_text' => 'Parce que la chaleur ne peut jamais se déplacer dans un solide', 'is_correct' => false],
                        ],
                        'explanation' => 'Une faible conductivité thermique signifie que le transport de chaleur est relativement limité.',
                    ],
                    [
                        'question' => 'La résistivité électrique est l\'inverse de quelle grandeur ?',
                        'choices' => [
                            ['choice_text' => 'La conductivité électrique', 'is_correct' => true],
                            ['choice_text' => 'La conductivité thermique', 'is_correct' => false],
                            ['choice_text' => 'La densité', 'is_correct' => false],
                            ['choice_text' => 'La capacité calorifique', 'is_correct' => false],
                        ],
                        'explanation' => 'La résistivité ρ et la conductivité électrique σ sont liées par σ = 1/ρ.',
                    ],
                    [
                        'question' => 'Quelle grandeur représente la quantité de chaleur nécessaire pour augmenter la température d\'un matériau ?',
                        'choices' => [
                            ['choice_text' => 'La capacité thermique', 'is_correct' => true],
                            ['choice_text' => 'La résistivité', 'is_correct' => false],
                            ['choice_text' => 'La coordinence', 'is_correct' => false],
                            ['choice_text' => 'Le paramètre de maille', 'is_correct' => false],
                        ],
                        'explanation' => 'La capacité thermique mesure la quantité d\'énergie nécessaire pour produire une variation de température donnée.',
                    ],
                    [
                        'question' => 'Les propriétés thermiques d\'un matériau peuvent-elles dépendre de ses défauts cristallins ?',
                        'choices' => [
                            ['choice_text' => 'Oui, les défauts peuvent modifier la propagation des excitations thermiques', 'is_correct' => true],
                            ['choice_text' => 'Non, les défauts n\'ont jamais d\'effet thermique', 'is_correct' => false],
                            ['choice_text' => 'Seulement dans les gaz', 'is_correct' => false],
                            ['choice_text' => 'Uniquement lorsque le matériau est radioactif', 'is_correct' => false],
                        ],
                        'explanation' => 'Les défauts et les impuretés peuvent diffuser les phonons et modifier le transport thermique.',
                    ],
                ],
            ],

            [
                'title' => 'Propriétés mécaniques des solides',
                'description' => 'Introduire les notions de déformation, élasticité, plasticité et rupture dans les matériaux solides.',
                'questions' => [
                    [
                        'question' => 'Qu\'est-ce qu\'une déformation élastique ?',
                        'choices' => [
                            ['choice_text' => 'Une déformation qui disparaît lorsque la contrainte est retirée, dans le domaine élastique', 'is_correct' => true],
                            ['choice_text' => 'Une déformation toujours permanente', 'is_correct' => false],
                            ['choice_text' => 'Une transformation nucléaire', 'is_correct' => false],
                            ['choice_text' => 'Une augmentation obligatoire de la masse', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans le domaine élastique, le matériau retrouve approximativement sa forme initiale après retrait de la contrainte.',
                    ],
                    [
                        'question' => 'Qu\'est-ce qu\'une déformation plastique ?',
                        'choices' => [
                            ['choice_text' => 'Une déformation permanente qui subsiste après suppression de la contrainte', 'is_correct' => true],
                            ['choice_text' => 'Une déformation toujours réversible', 'is_correct' => false],
                            ['choice_text' => 'Une oscillation thermique uniquement', 'is_correct' => false],
                            ['choice_text' => 'Une variation de charge du proton', 'is_correct' => false],
                        ],
                        'explanation' => 'Une déformation plastique reste après le retrait de la charge lorsque le matériau a dépassé sa limite élastique.',
                    ],
                    [
                        'question' => 'Quel défaut cristallin joue un rôle majeur dans la déformation plastique des métaux ?',
                        'choices' => [
                            ['choice_text' => 'La dislocation', 'is_correct' => true],
                            ['choice_text' => 'Le photon', 'is_correct' => false],
                            ['choice_text' => 'Le neutron thermique uniquement', 'is_correct' => false],
                            ['choice_text' => 'La lacune électronique', 'is_correct' => false],
                        ],
                        'explanation' => 'Le déplacement des dislocations facilite la déformation plastique du réseau cristallin.',
                    ],
                    [
                        'question' => 'Qu\'est-ce que la dureté d\'un matériau décrit principalement ?',
                        'choices' => [
                            ['choice_text' => 'Sa résistance à la pénétration ou à la déformation locale', 'is_correct' => true],
                            ['choice_text' => 'Sa capacité à conduire le courant uniquement', 'is_correct' => false],
                            ['choice_text' => 'Sa masse totale', 'is_correct' => false],
                            ['choice_text' => 'Son nombre de protons', 'is_correct' => false],
                        ],
                        'explanation' => 'La dureté caractérise notamment la résistance d\'un matériau à une indentation ou à une déformation locale.',
                    ],
                    [
                        'question' => 'Qu\'appelle-t-on contrainte mécanique ?',
                        'choices' => [
                            ['choice_text' => 'Une force rapportée à une surface', 'is_correct' => true],
                            ['choice_text' => 'Une température exprimée en kelvins', 'is_correct' => false],
                            ['choice_text' => 'La masse d\'un seul atome', 'is_correct' => false],
                            ['choice_text' => 'L\'énergie d\'un photon uniquement', 'is_correct' => false],
                        ],
                        'explanation' => 'La contrainte est généralement définie comme une force appliquée rapportée à la surface considérée.',
                    ],
                    [
                        'question' => 'Qu\'est-ce que le module d\'Young caractérise principalement ?',
                        'choices' => [
                            ['choice_text' => 'La rigidité élastique d\'un matériau en traction ou compression', 'is_correct' => true],
                            ['choice_text' => 'La température de fusion', 'is_correct' => false],
                            ['choice_text' => 'Le nombre de particules du noyau', 'is_correct' => false],
                            ['choice_text' => 'La conductivité lumineuse uniquement', 'is_correct' => false],
                        ],
                        'explanation' => 'Le module d\'Young mesure la rigidité du matériau dans le domaine élastique pour une sollicitation uniaxiale.',
                    ],
                    [
                        'question' => 'Un matériau fragile se caractérise généralement par :',
                        'choices' => [
                            ['choice_text' => 'Une faible déformation plastique avant la rupture', 'is_correct' => true],
                            ['choice_text' => 'Une très grande déformation plastique avant rupture dans tous les cas', 'is_correct' => false],
                            ['choice_text' => 'L\'absence complète de contraintes', 'is_correct' => false],
                            ['choice_text' => 'Une conductivité électrique infinie', 'is_correct' => false],
                        ],
                        'explanation' => 'Les matériaux fragiles rompent avec relativement peu de déformation plastique macroscopique.',
                    ],
                    [
                        'question' => 'Quel phénomène peut renforcer un matériau métallique en empêchant le mouvement des dislocations ?',
                        'choices' => [
                            ['choice_text' => 'L\'introduction contrôlée d\'atomes d\'impureté ou d\'autres obstacles', 'is_correct' => true],
                            ['choice_text' => 'La suppression complète du réseau cristallin', 'is_correct' => false],
                            ['choice_text' => 'La suppression de tous les noyaux', 'is_correct' => false],
                            ['choice_text' => 'L\'augmentation du vide autour du matériau', 'is_correct' => false],
                        ],
                        'explanation' => 'Les impuretés, précipités et autres obstacles peuvent limiter le déplacement des dislocations et augmenter la résistance mécanique.',
                    ],
                    [
                        'question' => 'Pourquoi le traitement thermique peut-il modifier les propriétés mécaniques d\'un métal ?',
                        'choices' => [
                            ['choice_text' => 'Il peut modifier la microstructure, les défauts et les phases présentes', 'is_correct' => true],
                            ['choice_text' => 'Il change toujours le nombre de protons', 'is_correct' => false],
                            ['choice_text' => 'Il transforme tous les électrons en neutrons', 'is_correct' => false],
                            ['choice_text' => 'Il supprime toujours toute contrainte interne', 'is_correct' => false],
                        ],
                        'explanation' => 'Les traitements thermiques peuvent modifier la microstructure et donc les mécanismes responsables de la résistance mécanique.',
                    ],
                    [
                        'question' => 'Les propriétés mécaniques d\'un solide dépendent-elles de la microstructure ?',
                        'choices' => [
                            ['choice_text' => 'Oui, fortement', 'is_correct' => true],
                            ['choice_text' => 'Non, elles dépendent uniquement de la masse', 'is_correct' => false],
                            ['choice_text' => 'Non, tous les solides ayant la même composition ont exactement les mêmes propriétés', 'is_correct' => false],
                            ['choice_text' => 'Seulement pour les gaz', 'is_correct' => false],
                        ],
                        'explanation' => 'La taille des grains, les phases, les défauts et la distribution des impuretés influencent fortement le comportement mécanique.',
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
                    'duration' => 10,
                    'passing_score' => 50,
                    'total_marks' => 10,
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
                        'explanation' => $questionData['explanation'],
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