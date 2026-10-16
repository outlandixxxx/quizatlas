<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class HumanAnatomyBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'human-anatomy')->firstOrFail();

        $quizzes = [
            [
                'title' => 'Bases de l’anatomie humaine',
                'description' => 'Découverte de l’organisation générale du corps humain, des positions anatomiques et des principaux repères.',
                'settings' => ['duration' => 15, 'passing_score' => 50],
                'questions' => [
                    [
                        'question' => 'Dans la position anatomique de référence, les paumes des mains sont orientées vers :',
                        'choices' => [
                            ['choice_text' => 'L’arrière', 'is_correct' => false],
                            ['choice_text' => 'L’avant', 'is_correct' => true],
                            ['choice_text' => 'Le bas', 'is_correct' => false],
                            ['choice_text' => 'Le haut', 'is_correct' => false],
                        ],
                        'explanation' => 'En position anatomique, la personne est debout, face à l’observateur, avec les bras le long du corps et les paumes tournées vers l’avant.',
                    ],
                    [
                        'question' => 'Quel terme anatomique signifie « plus proche de la tête » ?',
                        'choices' => [
                            ['choice_text' => 'Inférieur', 'is_correct' => false],
                            ['choice_text' => 'Distal', 'is_correct' => false],
                            ['choice_text' => 'Latéral', 'is_correct' => false],
                            ['choice_text' => 'Supérieur', 'is_correct' => true],
                        ],
                        'explanation' => 'Le terme « supérieur » désigne une structure située plus près de la tête ou au-dessus d’une autre structure.',
                    ],
                    [
                        'question' => 'Le cœur est logé dans quelle grande région du corps ?',
                        'choices' => [
                            ['choice_text' => 'Le thorax', 'is_correct' => true],
                            ['choice_text' => 'L’abdomen', 'is_correct' => false],
                            ['choice_text' => 'Le bassin', 'is_correct' => false],
                            ['choice_text' => 'Le cou', 'is_correct' => false],
                        ],
                        'explanation' => 'Le cœur est situé dans le thorax, entre les poumons, dans une région appelée médiastin.',
                    ],
                    [
                        'question' => 'Si le nez est situé sur la ligne médiane du visage, on peut dire qu’il est :',
                        'choices' => [
                            ['choice_text' => 'Latéral', 'is_correct' => false],
                            ['choice_text' => 'Postérieur', 'is_correct' => false],
                            ['choice_text' => 'Médial', 'is_correct' => true],
                            ['choice_text' => 'Inférieur', 'is_correct' => false],
                        ],
                        'explanation' => 'Une structure proche du plan médian du corps est dite médiale : le nez est donc médial par rapport aux yeux.',
                    ],
                    [
                        'question' => 'Quel plan anatomique sépare le corps en parties droite et gauche ?',
                        'choices' => [
                            ['choice_text' => 'Plan frontal', 'is_correct' => false],
                            ['choice_text' => 'Plan transversal', 'is_correct' => false],
                            ['choice_text' => 'Plan sagittal', 'is_correct' => true],
                            ['choice_text' => 'Plan coronal', 'is_correct' => false],
                        ],
                        'explanation' => 'Le plan sagittal sépare le corps en parties droite et gauche ; quand il passe exactement au milieu, on parle de plan médian.',
                    ],
                    [
                        'question' => 'La jambe fait partie de quelle région du corps ?',
                        'choices' => [
                            ['choice_text' => 'Le membre inférieur', 'is_correct' => true],
                            ['choice_text' => 'Le membre supérieur', 'is_correct' => false],
                            ['choice_text' => 'Le tronc et le bassin', 'is_correct' => false],
                            ['choice_text' => 'La tête et le cou', 'is_correct' => false],
                        ],
                        'explanation' => 'Le membre inférieur comprend la hanche, la cuisse, la jambe et le pied, alors que le membre supérieur va de l’épaule à la main.',
                    ],
                    [
                        'question' => 'Nadia observe son bras tendu. Par rapport au coude, où se situe la main ?',
                        'choices' => [
                            ['choice_text' => 'Proximale', 'is_correct' => false],
                            ['choice_text' => 'Médiale', 'is_correct' => false],
                            ['choice_text' => 'Profonde', 'is_correct' => false],
                            ['choice_text' => 'Distale', 'is_correct' => true],
                        ],
                        'explanation' => '« Distal » veut dire plus éloigné de l’attache du membre : la main est donc distale par rapport au coude.',
                    ],
                    [
                        'question' => 'Youssef pose une main sur son sternum puis l’autre sur son épaule. Par rapport au sternum, l’épaule est :',
                        'choices' => [
                            ['choice_text' => 'Médiale', 'is_correct' => false],
                            ['choice_text' => 'Latérale', 'is_correct' => true],
                            ['choice_text' => 'Profonde', 'is_correct' => false],
                            ['choice_text' => 'Inférieure', 'is_correct' => false],
                        ],
                        'explanation' => '« Latéral » veut dire plus éloigné de la ligne médiane : l’épaule est donc latérale par rapport au sternum.',
                    ],
                    [
                        'question' => 'Omar passe la main sur son avant-bras. Par rapport aux muscles situés dessous, la peau est une structure :',
                        'choices' => [
                            ['choice_text' => 'Profonde', 'is_correct' => false],
                            ['choice_text' => 'Distale', 'is_correct' => false],
                            ['choice_text' => 'Superficielle', 'is_correct' => true],
                            ['choice_text' => 'Médiale', 'is_correct' => false],
                        ],
                        'explanation' => 'La peau se trouve plus près de la surface du corps que les muscles : elle est donc superficielle.',
                    ],
                    [
                        'question' => 'Une coupe réalisée perpendiculairement à l’axe vertical du corps produit :',
                        'choices' => [
                            ['choice_text' => 'Une partie supérieure et une partie inférieure', 'is_correct' => true],
                            ['choice_text' => 'Une partie antérieure et une partie postérieure', 'is_correct' => false],
                            ['choice_text' => 'Une partie droite et une partie gauche', 'is_correct' => false],
                            ['choice_text' => 'Une partie interne et une partie externe', 'is_correct' => false],
                        ],
                        'explanation' => 'Une coupe transversale, aussi appelée horizontale, sépare le corps en une partie supérieure et une partie inférieure.',
                    ],
                ],
            ],
            [
                'title' => 'Squelette axial et appendiculaire',
                'description' => 'Identifier les grands os et distinguer le squelette axial du squelette appendiculaire.',
                'settings' => ['duration' => 15, 'passing_score' => 55],
                'questions' => [
                    [
                        'question' => 'Quel os forme la partie antérieure de la cage thoracique et se relie aux côtes par l’intermédiaire des cartilages ?',
                        'choices' => [
                            ['choice_text' => 'La clavicule', 'is_correct' => false],
                            ['choice_text' => 'L’omoplate', 'is_correct' => false],
                            ['choice_text' => 'Le sternum', 'is_correct' => true],
                            ['choice_text' => 'Le sacrum', 'is_correct' => false],
                        ],
                        'explanation' => 'Le sternum est un os plat placé à l’avant du thorax. Il protège en partie le cœur et les poumons.',
                    ],
                    [
                        'question' => 'Combien de vertèbres cervicales possède normalement la colonne vertébrale humaine ?',
                        'choices' => [
                            ['choice_text' => '7', 'is_correct' => true],
                            ['choice_text' => '5', 'is_correct' => false],
                            ['choice_text' => '10', 'is_correct' => false],
                            ['choice_text' => '12', 'is_correct' => false],
                        ],
                        'explanation' => 'La région cervicale comprend 7 vertèbres, de C1 à C7, qui soutiennent la tête et permettent les mouvements du cou.',
                    ],
                    [
                        'question' => 'Quel est le rôle principal de la cage thoracique ?',
                        'choices' => [
                            ['choice_text' => 'Pomper le sang vers les tissus', 'is_correct' => false],
                            ['choice_text' => 'Protéger le cœur et les poumons', 'is_correct' => true],
                            ['choice_text' => 'Digérer les aliments avalés', 'is_correct' => false],
                            ['choice_text' => 'Filtrer l’air avant son entrée', 'is_correct' => false],
                        ],
                        'explanation' => 'La cage thoracique, formée des côtes et du sternum, abrite et protège des organes vitaux comme le cœur et les poumons.',
                    ],
                    [
                        'question' => 'Le fémur est situé dans :',
                        'choices' => [
                            ['choice_text' => 'L’avant-bras', 'is_correct' => false],
                            ['choice_text' => 'La jambe', 'is_correct' => false],
                            ['choice_text' => 'Le thorax', 'is_correct' => false],
                            ['choice_text' => 'La cuisse', 'is_correct' => true],
                        ],
                        'explanation' => 'Le fémur est l’os long de la cuisse : il relie la hanche au genou et porte une grande partie du poids du corps.',
                    ],
                    [
                        'question' => 'Quel os appartient à l’avant-bras ?',
                        'choices' => [
                            ['choice_text' => 'Le radius', 'is_correct' => true],
                            ['choice_text' => 'L’humérus', 'is_correct' => false],
                            ['choice_text' => 'Le péroné', 'is_correct' => false],
                            ['choice_text' => 'Le fémur', 'is_correct' => false],
                        ],
                        'explanation' => 'L’avant-bras contient deux os : le radius et l’ulna. L’humérus, lui, appartient au bras.',
                    ],
                    [
                        'question' => 'Le crâne fait partie de quel ensemble du squelette ?',
                        'choices' => [
                            ['choice_text' => 'Du squelette appendiculaire', 'is_correct' => false],
                            ['choice_text' => 'De la ceinture scapulaire', 'is_correct' => false],
                            ['choice_text' => 'De la ceinture pelvienne', 'is_correct' => false],
                            ['choice_text' => 'Du squelette axial', 'is_correct' => true],
                        ],
                        'explanation' => 'Le squelette axial regroupe le crâne, la colonne vertébrale et la cage thoracique ; les membres et leurs ceintures forment le squelette appendiculaire.',
                    ],
                    [
                        'question' => 'Quel os se trouve à l’avant du genou et protège l’articulation ?',
                        'choices' => [
                            ['choice_text' => 'Le tibia', 'is_correct' => false],
                            ['choice_text' => 'La rotule', 'is_correct' => true],
                            ['choice_text' => 'Le péroné', 'is_correct' => false],
                            ['choice_text' => 'Le fémur', 'is_correct' => false],
                        ],
                        'explanation' => 'La rotule, ou patella, est un petit os situé à l’avant du genou ; elle aide le quadriceps à étendre la jambe.',
                    ],
                    [
                        'question' => 'Quel rôle joue le bassin ?',
                        'choices' => [
                            ['choice_text' => 'Relier la tête au tronc', 'is_correct' => false],
                            ['choice_text' => 'Protéger le cœur et les poumons', 'is_correct' => false],
                            ['choice_text' => 'Relier le tronc aux membres inférieurs', 'is_correct' => true],
                            ['choice_text' => 'Relier le tronc aux membres supérieurs', 'is_correct' => false],
                        ],
                        'explanation' => 'Le bassin fait le lien entre le tronc et les membres inférieurs, transmet le poids du corps et abrite les organes du pelvis.',
                    ],
                    [
                        'question' => 'Après une chute de vélo, la radio de Karim montre une fracture du poignet. Quel tissu est directement touché ?',
                        'choices' => [
                            ['choice_text' => 'Le tissu musculaire', 'is_correct' => false],
                            ['choice_text' => 'Le tissu osseux', 'is_correct' => true],
                            ['choice_text' => 'Le tissu nerveux', 'is_correct' => false],
                            ['choice_text' => 'Le tissu cartilagineux', 'is_correct' => false],
                        ],
                        'explanation' => 'Une fracture est une cassure de l’os ; les muscles ou les nerfs voisins peuvent être abîmés, mais la lésion principale est osseuse.',
                    ],
                    [
                        'question' => 'Quel os relie le tronc au membre supérieur et se trouve à la partie supérieure du thorax ?',
                        'choices' => [
                            ['choice_text' => 'Le sternum', 'is_correct' => false],
                            ['choice_text' => 'Le tibia', 'is_correct' => false],
                            ['choice_text' => 'Le coccyx', 'is_correct' => false],
                            ['choice_text' => 'La clavicule', 'is_correct' => true],
                        ],
                        'explanation' => 'La clavicule forme un pont osseux entre le sternum et l’omoplate. Elle maintient l’épaule et lui permet de bouger.',
                    ],
                ],
            ],
            [
                'title' => 'Articulations et mouvements',
                'description' => 'Reconnaître les principaux types d’articulations et comprendre les mouvements anatomiques simples.',
                'settings' => ['duration' => 20, 'passing_score' => 60],
                'questions' => [
                    [
                        'question' => 'Pour plier et tendre le bras, l’articulation du coude fonctionne comme :',
                        'choices' => [
                            ['choice_text' => 'Une charnière, qui plie et tend le bras', 'is_correct' => true],
                            ['choice_text' => 'Une rotule, qui tourne dans plusieurs directions', 'is_correct' => false],
                            ['choice_text' => 'Une soudure fixe, qui ne bouge presque pas', 'is_correct' => false],
                            ['choice_text' => 'Un pivot, qui fait tourner l’os sur son axe', 'is_correct' => false],
                        ],
                        'explanation' => 'Le coude fonctionne comme une charnière : il plie et tend le bras, c’est la flexion et l’extension.',
                    ],
                    [
                        'question' => 'Salma soulève un sac en pliant le coude : son avant-bras se rapproche du bras. Quel mouvement fait-elle ?',
                        'choices' => [
                            ['choice_text' => 'L’extension', 'is_correct' => false],
                            ['choice_text' => 'L’abduction', 'is_correct' => false],
                            ['choice_text' => 'La flexion', 'is_correct' => true],
                            ['choice_text' => 'La rotation', 'is_correct' => false],
                        ],
                        'explanation' => 'La flexion diminue l’angle entre deux segments : au coude, l’avant-bras se rapproche du bras.',
                    ],
                    [
                        'question' => 'Écarter le bras du tronc dans le plan frontal correspond à une :',
                        'choices' => [
                            ['choice_text' => 'Adduction', 'is_correct' => false],
                            ['choice_text' => 'Flexion', 'is_correct' => false],
                            ['choice_text' => 'Pronation', 'is_correct' => false],
                            ['choice_text' => 'Abduction', 'is_correct' => true],
                        ],
                        'explanation' => 'L’abduction éloigne un membre de la ligne médiane du corps ; le mouvement inverse est l’adduction.',
                    ],
                    [
                        'question' => 'Quel type d’articulation est caractéristique des sutures entre les os du crâne ?',
                        'choices' => [
                            ['choice_text' => 'Une articulation synoviale mobile', 'is_correct' => false],
                            ['choice_text' => 'Une articulation fibreuse, quasi fixe', 'is_correct' => true],
                            ['choice_text' => 'Une articulation cartilagineuse élastique', 'is_correct' => false],
                            ['choice_text' => 'Une articulation en charnière', 'is_correct' => false],
                        ],
                        'explanation' => 'Les sutures sont des articulations fibreuses presque immobiles qui soudent les os du crâne entre eux.',
                    ],
                    [
                        'question' => 'Hamza lance un ballon : son bras bouge dans plusieurs directions, comme une boule qui tourne dans une cavité. De quelle articulation s’agit-il ?',
                        'choices' => [
                            ['choice_text' => 'Le coude', 'is_correct' => false],
                            ['choice_text' => 'Le poignet', 'is_correct' => false],
                            ['choice_text' => 'Le genou', 'is_correct' => false],
                            ['choice_text' => 'L’épaule', 'is_correct' => true],
                        ],
                        'explanation' => 'L’épaule est une articulation en boule dans une cavité (sphéroïde) : elle permet des mouvements dans de nombreuses directions.',
                    ],
                    [
                        'question' => 'Salma tend les avant-bras devant elle, paumes vers le haut, puis les retourne paumes vers le bas. Quel mouvement a-t-elle fait ?',
                        'choices' => [
                            ['choice_text' => 'La pronation', 'is_correct' => true],
                            ['choice_text' => 'La supination', 'is_correct' => false],
                            ['choice_text' => 'L’adduction', 'is_correct' => false],
                            ['choice_text' => 'L’élévation', 'is_correct' => false],
                        ],
                        'explanation' => 'Retourner l’avant-bras pour amener la paume vers le bas s’appelle la pronation ; le mouvement inverse est la supination.',
                    ],
                    [
                        'question' => 'L’extension du genou consiste à :',
                        'choices' => [
                            ['choice_text' => 'Plier davantage la jambe', 'is_correct' => false],
                            ['choice_text' => 'Écarter la jambe du corps', 'is_correct' => false],
                            ['choice_text' => 'Redresser la jambe', 'is_correct' => true],
                            ['choice_text' => 'Faire pivoter le pied', 'is_correct' => false],
                        ],
                        'explanation' => 'L’extension augmente l’angle de l’articulation : au genou, elle redresse la jambe.',
                    ],
                    [
                        'question' => 'Qu’est-ce qui lubrifie une articulation comme le genou et limite les frottements ?',
                        'choices' => [
                            ['choice_text' => 'La moelle osseuse', 'is_correct' => false],
                            ['choice_text' => 'Le liquide synovial', 'is_correct' => true],
                            ['choice_text' => 'Le plasma sanguin', 'is_correct' => false],
                            ['choice_text' => 'La graisse sous la peau', 'is_correct' => false],
                        ],
                        'explanation' => 'Le liquide synovial lubrifie l’articulation et facilite le glissement des surfaces qui se touchent.',
                    ],
                    [
                        'question' => 'Une personne remonte les épaules vers les oreilles. Quel mouvement décrit le mieux cette action ?',
                        'choices' => [
                            ['choice_text' => 'Élévation', 'is_correct' => true],
                            ['choice_text' => 'Dépression', 'is_correct' => false],
                            ['choice_text' => 'Adduction', 'is_correct' => false],
                            ['choice_text' => 'Rotation', 'is_correct' => false],
                        ],
                        'explanation' => 'Remonter les épaules vers les oreilles est une élévation ; les abaisser est une dépression.',
                    ],
                    [
                        'question' => 'En fin d’exercice, Imane ramène son bras tendu contre son flanc. Quel mouvement fait-elle ?',
                        'choices' => [
                            ['choice_text' => 'Une abduction', 'is_correct' => false],
                            ['choice_text' => 'Une extension', 'is_correct' => false],
                            ['choice_text' => 'Une adduction', 'is_correct' => true],
                            ['choice_text' => 'Une supination', 'is_correct' => false],
                        ],
                        'explanation' => 'L’adduction rapproche un membre de la ligne médiane du corps, à l’inverse de l’abduction qui l’en éloigne.',
                    ],
                ],
            ],
            [
                'title' => 'Muscles et organisation du mouvement',
                'description' => 'Identifier les grands muscles, les types de tissu musculaire et quelques notions simples de mouvement.',
                'settings' => ['duration' => 20, 'passing_score' => 60],
                'questions' => [
                    [
                        'question' => 'Quel type de muscle est associé aux mouvements volontaires du squelette ?',
                        'choices' => [
                            ['choice_text' => 'Le muscle lisse', 'is_correct' => false],
                            ['choice_text' => 'Le muscle cardiaque', 'is_correct' => false],
                            ['choice_text' => 'Le tissu osseux', 'is_correct' => false],
                            ['choice_text' => 'Le muscle squelettique', 'is_correct' => true],
                        ],
                        'explanation' => 'Les muscles squelettiques sont striés et sous contrôle volontaire ; des tendons les fixent aux os.',
                    ],
                    [
                        'question' => 'Le biceps brachial est situé :',
                        'choices' => [
                            ['choice_text' => 'À l’arrière du bras', 'is_correct' => false],
                            ['choice_text' => 'À l’avant du bras', 'is_correct' => true],
                            ['choice_text' => 'Dans le mollet', 'is_correct' => false],
                            ['choice_text' => 'Dans la cuisse', 'is_correct' => false],
                        ],
                        'explanation' => 'Le biceps brachial occupe la face avant du bras et participe à la flexion du coude.',
                    ],
                    [
                        'question' => 'En montant un escalier, Hamza redresse son genou à chaque marche. Quel muscle de la cuisse travaille le plus ?',
                        'choices' => [
                            ['choice_text' => 'Le quadriceps', 'is_correct' => true],
                            ['choice_text' => 'Les ischio-jambiers', 'is_correct' => false],
                            ['choice_text' => 'Le biceps brachial', 'is_correct' => false],
                            ['choice_text' => 'Le grand pectoral', 'is_correct' => false],
                        ],
                        'explanation' => 'Le quadriceps, à l’avant de la cuisse, étend le genou : c’est lui qui nous redresse à chaque marche.',
                    ],
                    [
                        'question' => 'Quel tissu musculaire compose la paroi du cœur ?',
                        'choices' => [
                            ['choice_text' => 'Muscle lisse', 'is_correct' => false],
                            ['choice_text' => 'Muscle squelettique', 'is_correct' => false],
                            ['choice_text' => 'Muscle cardiaque', 'is_correct' => true],
                            ['choice_text' => 'Tissu cartilagineux', 'is_correct' => false],
                        ],
                        'explanation' => 'Le myocarde est constitué de muscle cardiaque, un tissu musculaire spécialisé qui se contracte de manière rythmique et involontaire.',
                    ],
                    [
                        'question' => 'Quel rôle joue le diaphragme ?',
                        'choices' => [
                            ['choice_text' => 'Pomper le sang dans l’aorte', 'is_correct' => false],
                            ['choice_text' => 'Faire entrer et sortir l’air des poumons', 'is_correct' => true],
                            ['choice_text' => 'Brasser les aliments dans l’estomac', 'is_correct' => false],
                            ['choice_text' => 'Filtrer l’urine dans les reins', 'is_correct' => false],
                        ],
                        'explanation' => 'Ce grand muscle placé sous les poumons se contracte puis se relâche pour faire entrer et sortir l’air.',
                    ],
                    [
                        'question' => 'Quand un muscle squelettique se raccourcit en développant une tension, on parle de contraction :',
                        'choices' => [
                            ['choice_text' => 'Isométrique', 'is_correct' => false],
                            ['choice_text' => 'Excentrique', 'is_correct' => false],
                            ['choice_text' => 'Passive', 'is_correct' => false],
                            ['choice_text' => 'Concentrique', 'is_correct' => true],
                        ],
                        'explanation' => 'En contraction concentrique, le muscle se raccourcit pendant qu’il produit de la force ; en contraction excentrique, il s’allonge en freinant le mouvement.',
                    ],
                    [
                        'question' => 'Les tendons relient :',
                        'choices' => [
                            ['choice_text' => 'Un muscle à un os', 'is_correct' => true],
                            ['choice_text' => 'Un os à un autre os', 'is_correct' => false],
                            ['choice_text' => 'Deux muscles entre eux', 'is_correct' => false],
                            ['choice_text' => 'La peau à un muscle', 'is_correct' => false],
                        ],
                        'explanation' => 'Un tendon attache un muscle à un os ; les ligaments, eux, relient les os entre eux.',
                    ],
                    [
                        'question' => 'Lequel de ces muscles se trouve dans la région postérieure du bras ?',
                        'choices' => [
                            ['choice_text' => 'Biceps brachial', 'is_correct' => false],
                            ['choice_text' => 'Grand pectoral', 'is_correct' => false],
                            ['choice_text' => 'Triceps brachial', 'is_correct' => true],
                            ['choice_text' => 'Grand dorsal', 'is_correct' => false],
                        ],
                        'explanation' => 'Le triceps brachial occupe l’arrière du bras et étend le coude.',
                    ],
                    [
                        'question' => 'Au coude, le biceps plie le bras et le triceps le tend. Comment appelle-t-on deux muscles aux actions opposées ?',
                        'choices' => [
                            ['choice_text' => 'Des synergistes', 'is_correct' => false],
                            ['choice_text' => 'Des ligaments', 'is_correct' => false],
                            ['choice_text' => 'Des tendons', 'is_correct' => false],
                            ['choice_text' => 'Des antagonistes', 'is_correct' => true],
                        ],
                        'explanation' => 'Des muscles antagonistes ont des actions opposées : le biceps et le triceps en sont l’exemple classique au coude.',
                    ],
                    [
                        'question' => 'Quand on lève le bras sur le côté, quel muscle arrondi de l’épaule se contracte ?',
                        'choices' => [
                            ['choice_text' => 'Le trapèze', 'is_correct' => false],
                            ['choice_text' => 'Le deltoïde', 'is_correct' => true],
                            ['choice_text' => 'Le biceps brachial', 'is_correct' => false],
                            ['choice_text' => 'Le triceps brachial', 'is_correct' => false],
                        ],
                        'explanation' => 'Le deltoïde recouvre l’épaule et soulève le bras sur le côté.',
                    ],
                ],
            ],
            [
                'title' => 'Système nerveux et organes des sens',
                'description' => 'Localiser les principales structures du système nerveux et reconnaître quelques organes sensoriels.',
                'settings' => ['duration' => 20, 'passing_score' => 60],
                'questions' => [
                    [
                        'question' => 'Quel organe constitue la principale partie du système nerveux central située dans la boîte crânienne ?',
                        'choices' => [
                            ['choice_text' => 'La moelle épinière', 'is_correct' => false],
                            ['choice_text' => 'L’encéphale', 'is_correct' => true],
                            ['choice_text' => 'Le nerf sciatique', 'is_correct' => false],
                            ['choice_text' => 'La rétine', 'is_correct' => false],
                        ],
                        'explanation' => 'L’encéphale se trouve dans le crâne ; il comprend le cerveau, le cervelet et le tronc cérébral.',
                    ],
                    [
                        'question' => 'La moelle épinière est logée dans :',
                        'choices' => [
                            ['choice_text' => 'Le crâne et le cerveau', 'is_correct' => false],
                            ['choice_text' => 'La cavité abdominale', 'is_correct' => false],
                            ['choice_text' => 'Le canal vertébral', 'is_correct' => true],
                            ['choice_text' => 'Le sternum et les côtes', 'is_correct' => false],
                        ],
                        'explanation' => 'Protégée par la colonne vertébrale, la moelle épinière chemine dans le canal vertébral.',
                    ],
                    [
                        'question' => 'Quelle structure de l’œil transforme la lumière en signaux nerveux ?',
                        'choices' => [
                            ['choice_text' => 'La rétine', 'is_correct' => true],
                            ['choice_text' => 'La cornée', 'is_correct' => false],
                            ['choice_text' => 'Le cristallin', 'is_correct' => false],
                            ['choice_text' => 'La sclérotique', 'is_correct' => false],
                        ],
                        'explanation' => 'La rétine contient des cellules sensibles à la lumière, les photorécepteurs, qui envoient leurs signaux au cerveau par le nerf optique.',
                    ],
                    [
                        'question' => 'Quelle partie de l’oreille participe à l’équilibre ?',
                        'choices' => [
                            ['choice_text' => 'L’oreille externe', 'is_correct' => false],
                            ['choice_text' => 'L’oreille moyenne', 'is_correct' => false],
                            ['choice_text' => 'Le tympan', 'is_correct' => false],
                            ['choice_text' => 'L’oreille interne', 'is_correct' => true],
                        ],
                        'explanation' => 'L’oreille interne contient les canaux semi-circulaires, qui détectent les mouvements de la tête et aident à garder l’équilibre.',
                    ],
                    [
                        'question' => 'Quel organe de l’oreille contient les récepteurs de l’audition ?',
                        'choices' => [
                            ['choice_text' => 'Le tympan', 'is_correct' => false],
                            ['choice_text' => 'Les osselets', 'is_correct' => false],
                            ['choice_text' => 'La cochlée', 'is_correct' => true],
                            ['choice_text' => 'Le pavillon', 'is_correct' => false],
                        ],
                        'explanation' => 'La cochlée, dans l’oreille interne, renferme les cellules sensorielles qui transforment les vibrations en signaux nerveux.',
                    ],
                    [
                        'question' => 'Lequel de ces éléments appartient au système nerveux périphérique ?',
                        'choices' => [
                            ['choice_text' => 'Le cortex du cerveau', 'is_correct' => false],
                            ['choice_text' => 'Les nerfs des membres', 'is_correct' => true],
                            ['choice_text' => 'La moelle épinière', 'is_correct' => false],
                            ['choice_text' => 'Le tronc cérébral', 'is_correct' => false],
                        ],
                        'explanation' => 'Le système nerveux périphérique réunit les nerfs qui relient le cerveau et la moelle épinière au reste du corps.',
                    ],
                    [
                        'question' => 'Quel os forme la boîte qui protège le cerveau ?',
                        'choices' => [
                            ['choice_text' => 'La colonne vertébrale', 'is_correct' => false],
                            ['choice_text' => 'Le sternum et les côtes', 'is_correct' => false],
                            ['choice_text' => 'La mandibule et le menton', 'is_correct' => false],
                            ['choice_text' => 'Le crâne et ses os plats', 'is_correct' => true],
                        ],
                        'explanation' => 'Le crâne enferme le cerveau comme une boîte rigide ; les méninges et le liquide cérébrospinal ajoutent une protection.',
                    ],
                    [
                        'question' => 'Les papilles gustatives de la langue détectent :',
                        'choices' => [
                            ['choice_text' => 'Les saveurs', 'is_correct' => true],
                            ['choice_text' => 'Les sons', 'is_correct' => false],
                            ['choice_text' => 'Les odeurs', 'is_correct' => false],
                            ['choice_text' => 'Les couleurs', 'is_correct' => false],
                        ],
                        'explanation' => 'Les récepteurs des papilles détectent les saveurs quand les aliments se dissolvent dans la salive.',
                    ],
                    [
                        'question' => 'Le médecin frappe doucement le genou de Sara avec un petit marteau et sa jambe se détend d’un coup. Que teste-t-il ?',
                        'choices' => [
                            ['choice_text' => 'La solidité de la rotule', 'is_correct' => false],
                            ['choice_text' => 'Un réflexe, donc des circuits nerveux', 'is_correct' => true],
                            ['choice_text' => 'La capacité pulmonaire de Sara', 'is_correct' => false],
                            ['choice_text' => 'La circulation du sang dans la jambe', 'is_correct' => false],
                        ],
                        'explanation' => 'Le réflexe rotulien renseigne sur des circuits nerveux courts qui passent par la moelle épinière.',
                    ],
                    [
                        'question' => 'Lina touche une casserole brûlante et retire la main avant même de sentir la douleur. Comment appelle-t-on cette réaction ?',
                        'choices' => [
                            ['choice_text' => 'Un mouvement volontaire réfléchi', 'is_correct' => false],
                            ['choice_text' => 'Une réaction hormonale lente', 'is_correct' => false],
                            ['choice_text' => 'Un réflexe de retrait', 'is_correct' => true],
                            ['choice_text' => 'Un trouble de la sensibilité', 'is_correct' => false],
                        ],
                        'explanation' => 'Le signal de brûlure passe par la moelle épinière, qui commande aussitôt le retrait de la main avant que le cerveau ait pris conscience de la douleur.',
                    ],
                ],
            ],
            [
                'title' => 'Appareils digestif et respiratoire',
                'description' => 'Localiser les principaux organes digestifs et respiratoires et comprendre leurs rapports anatomiques.',
                'settings' => ['duration' => 20, 'passing_score' => 65],
                'questions' => [
                    [
                        'question' => 'Après l’œsophage, quel organe reçoit les aliments avalés ?',
                        'choices' => [
                            ['choice_text' => 'L’intestin grêle', 'is_correct' => false],
                            ['choice_text' => 'Le gros intestin', 'is_correct' => false],
                            ['choice_text' => 'Le pancréas', 'is_correct' => false],
                            ['choice_text' => 'L’estomac', 'is_correct' => true],
                        ],
                        'explanation' => 'L’œsophage conduit les aliments jusqu’à l’estomac, où ils sont brassés avec le suc gastrique.',
                    ],
                    [
                        'question' => 'Où se situe l’intestin grêle dans le tube digestif ?',
                        'choices' => [
                            ['choice_text' => 'Entre l’estomac et le gros intestin', 'is_correct' => true],
                            ['choice_text' => 'Entre l’œsophage et l’estomac', 'is_correct' => false],
                            ['choice_text' => 'Entre le gros intestin et l’anus', 'is_correct' => false],
                            ['choice_text' => 'Entre la bouche et le pharynx', 'is_correct' => false],
                        ],
                        'explanation' => 'L’intestin grêle relie l’estomac au gros intestin ; il comprend le duodénum, le jéjunum et l’iléon.',
                    ],
                    [
                        'question' => 'Quel organe produit la bile ?',
                        'choices' => [
                            ['choice_text' => 'Le pancréas', 'is_correct' => false],
                            ['choice_text' => 'L’estomac', 'is_correct' => false],
                            ['choice_text' => 'Le foie', 'is_correct' => true],
                            ['choice_text' => 'Le côlon', 'is_correct' => false],
                        ],
                        'explanation' => 'Le foie fabrique la bile, qui est ensuite stockée et concentrée dans la vésicule biliaire avant d’être libérée dans l’intestin.',
                    ],
                    [
                        'question' => 'Quels organes occupent la plus grande partie du thorax, de chaque côté du cœur ?',
                        'choices' => [
                            ['choice_text' => 'Les reins', 'is_correct' => false],
                            ['choice_text' => 'Les poumons', 'is_correct' => true],
                            ['choice_text' => 'Le foie', 'is_correct' => false],
                            ['choice_text' => 'La rate', 'is_correct' => false],
                        ],
                        'explanation' => 'Les deux poumons remplissent les côtés du thorax, de part et d’autre du cœur.',
                    ],
                    [
                        'question' => 'Quel conduit mène l’air du larynx vers les bronches ?',
                        'choices' => [
                            ['choice_text' => 'La trachée', 'is_correct' => true],
                            ['choice_text' => 'L’œsophage', 'is_correct' => false],
                            ['choice_text' => 'Le pharynx', 'is_correct' => false],
                            ['choice_text' => 'L’épiglotte', 'is_correct' => false],
                        ],
                        'explanation' => 'La trachée prolonge le larynx vers le bas et se divise en deux bronches, une pour chaque poumon.',
                    ],
                    [
                        'question' => 'Où se font les échanges gazeux entre l’air et le sang ?',
                        'choices' => [
                            ['choice_text' => 'Dans la trachée', 'is_correct' => false],
                            ['choice_text' => 'Dans les bronches', 'is_correct' => false],
                            ['choice_text' => 'Dans le larynx', 'is_correct' => false],
                            ['choice_text' => 'Dans les alvéoles pulmonaires', 'is_correct' => true],
                        ],
                        'explanation' => 'Dans les alvéoles, l’oxygène passe de l’air au sang à travers une paroi très fine, tandis que le dioxyde de carbone fait le chemin inverse.',
                    ],
                    [
                        'question' => 'Quel organe volumineux occupe le haut de l’abdomen à droite, sous le diaphragme ?',
                        'choices' => [
                            ['choice_text' => 'La rate', 'is_correct' => false],
                            ['choice_text' => 'Le foie', 'is_correct' => true],
                            ['choice_text' => 'La vessie', 'is_correct' => false],
                            ['choice_text' => 'Le pancréas', 'is_correct' => false],
                        ],
                        'explanation' => 'Le foie occupe l’étage supérieur droit de l’abdomen, juste sous le diaphragme.',
                    ],
                    [
                        'question' => 'Que stocke la vésicule biliaire en attendant la digestion ?',
                        'choices' => [
                            ['choice_text' => 'L’urine filtrée', 'is_correct' => false],
                            ['choice_text' => 'Le suc gastrique', 'is_correct' => false],
                            ['choice_text' => 'La bile du foie', 'is_correct' => true],
                            ['choice_text' => 'Le suc pancréatique', 'is_correct' => false],
                        ],
                        'explanation' => 'Placée sous le foie, la vésicule biliaire garde la bile et la libère dans l’intestin pendant la digestion.',
                    ],
                    [
                        'question' => 'Quel tube situé derrière la trachée conduit les aliments vers l’estomac ?',
                        'choices' => [
                            ['choice_text' => 'La bronche droite', 'is_correct' => false],
                            ['choice_text' => 'Le larynx', 'is_correct' => false],
                            ['choice_text' => 'Le duodénum', 'is_correct' => false],
                            ['choice_text' => 'L’œsophage', 'is_correct' => true],
                        ],
                        'explanation' => 'L’œsophage est un tube musculaire placé derrière la trachée : il fait descendre les aliments jusqu’à l’estomac.',
                    ],
                    [
                        'question' => 'Quand Amine avale une gorgée d’eau, quelle structure empêche le liquide de passer dans la trachée ?',
                        'choices' => [
                            ['choice_text' => 'L’épiglotte', 'is_correct' => true],
                            ['choice_text' => 'La luette', 'is_correct' => false],
                            ['choice_text' => 'L’amygdale', 'is_correct' => false],
                            ['choice_text' => 'Le palais osseux', 'is_correct' => false],
                        ],
                        'explanation' => 'En avalant, l’épiglotte se rabat sur l’entrée du larynx, et les aliments ou boissons descendent par l’œsophage.',
                    ],
                ],
            ],
            [
                'title' => 'Cœur, vaisseaux et sang',
                'description' => 'Repérer les principales structures cardiovasculaires et comprendre la circulation générale du sang.',
                'settings' => ['duration' => 25, 'passing_score' => 65],
                'questions' => [
                    [
                        'question' => 'Combien de cavités principales possède le cœur humain ?',
                        'choices' => [
                            ['choice_text' => '4', 'is_correct' => true],
                            ['choice_text' => '2', 'is_correct' => false],
                            ['choice_text' => '3', 'is_correct' => false],
                            ['choice_text' => '6', 'is_correct' => false],
                        ],
                        'explanation' => 'Le cœur comprend quatre cavités : deux oreillettes et deux ventricules.',
                    ],
                    [
                        'question' => 'Quelle cavité reçoit normalement le sang désoxygéné venant du corps par les veines caves ?',
                        'choices' => [
                            ['choice_text' => 'Oreillette gauche', 'is_correct' => false],
                            ['choice_text' => 'Ventricule gauche', 'is_correct' => false],
                            ['choice_text' => 'Ventricule droit', 'is_correct' => false],
                            ['choice_text' => 'Oreillette droite', 'is_correct' => true],
                        ],
                        'explanation' => 'Le sang revenant des tissus entre dans l’oreillette droite par les veines caves supérieure et inférieure.',
                    ],
                    [
                        'question' => 'Quel vaisseau part du ventricule gauche pour envoyer le sang oxygéné vers le reste du corps ?',
                        'choices' => [
                            ['choice_text' => 'La veine cave supérieure', 'is_correct' => false],
                            ['choice_text' => 'L’aorte, artère principale', 'is_correct' => true],
                            ['choice_text' => 'L’artère pulmonaire', 'is_correct' => false],
                            ['choice_text' => 'La veine pulmonaire', 'is_correct' => false],
                        ],
                        'explanation' => 'Le ventricule gauche éjecte le sang oxygéné dans l’aorte, la plus grande artère du corps.',
                    ],
                    [
                        'question' => 'Quelle est la fonction des valves cardiaques ?',
                        'choices' => [
                            ['choice_text' => 'Produire les globules rouges de la moelle', 'is_correct' => false],
                            ['choice_text' => 'Oxygéner le sang avant son départ du cœur', 'is_correct' => false],
                            ['choice_text' => 'Empêcher le sang de revenir en arrière', 'is_correct' => true],
                            ['choice_text' => 'Fabriquer les hormones thyroïdiennes', 'is_correct' => false],
                        ],
                        'explanation' => 'Les valves s’ouvrent et se ferment au bon moment pour que le sang circule dans un seul sens.',
                    ],
                    [
                        'question' => 'Quel vaisseau ramène le sang oxygéné des poumons vers le cœur ?',
                        'choices' => [
                            ['choice_text' => 'Les veines pulmonaires', 'is_correct' => true],
                            ['choice_text' => 'Les artères pulmonaires', 'is_correct' => false],
                            ['choice_text' => 'Les veines caves', 'is_correct' => false],
                            ['choice_text' => 'L’aorte thoracique', 'is_correct' => false],
                        ],
                        'explanation' => 'Les veines pulmonaires amènent le sang oxygéné des poumons à l’oreillette gauche.',
                    ],
                    [
                        'question' => 'Où se font les échanges de gaz, de nutriments et de déchets entre le sang et les tissus ?',
                        'choices' => [
                            ['choice_text' => 'Dans l’aorte', 'is_correct' => false],
                            ['choice_text' => 'Dans les veines caves', 'is_correct' => false],
                            ['choice_text' => 'Dans les capillaires', 'is_correct' => true],
                            ['choice_text' => 'Dans les valves du cœur', 'is_correct' => false],
                        ],
                        'explanation' => 'Les capillaires ont des parois très fines qui laissent passer les gaz et les nutriments entre le sang et les tissus.',
                    ],
                    [
                        'question' => 'Quel élément du sang transporte l’oxygène ?',
                        'choices' => [
                            ['choice_text' => 'Les plaquettes', 'is_correct' => false],
                            ['choice_text' => 'Les globules blancs', 'is_correct' => false],
                            ['choice_text' => 'La lymphe du corps', 'is_correct' => false],
                            ['choice_text' => 'Les globules rouges', 'is_correct' => true],
                        ],
                        'explanation' => 'Les globules rouges contiennent de l’hémoglobine, une protéine qui fixe l’oxygène et le transporte.',
                    ],
                    [
                        'question' => 'Hamza se coupe le doigt et le saignement s’arrête au bout de quelques minutes. Quelles cellules ont aidé à la coagulation ?',
                        'choices' => [
                            ['choice_text' => 'Les globules rouges', 'is_correct' => false],
                            ['choice_text' => 'Les plaquettes', 'is_correct' => true],
                            ['choice_text' => 'Les globules blancs', 'is_correct' => false],
                            ['choice_text' => 'Les cellules de la peau', 'is_correct' => false],
                        ],
                        'explanation' => 'Les plaquettes s’agglutinent sur la plaie et déclenchent la coagulation, ce qui arrête le saignement.',
                    ],
                    [
                        'question' => 'Un médecin mesure la pression artérielle de Lina : 120/80 mmHg. Quelle valeur est la pression systolique ?',
                        'choices' => [
                            ['choice_text' => '80', 'is_correct' => false],
                            ['choice_text' => '40', 'is_correct' => false],
                            ['choice_text' => '120', 'is_correct' => true],
                            ['choice_text' => '200', 'is_correct' => false],
                        ],
                        'explanation' => 'La pression systolique est la valeur maximale, mesurée quand les ventricules se contractent : c’est le premier chiffre, ici 120.',
                    ],
                    [
                        'question' => 'Lequel de ces trajets représente correctement un passage du sang oxygéné après son arrivée dans l’oreillette gauche ?',
                        'choices' => [
                            ['choice_text' => 'Oreillette gauche → ventricule droit → veine cave', 'is_correct' => false],
                            ['choice_text' => 'Oreillette gauche → ventricule gauche → aorte', 'is_correct' => true],
                            ['choice_text' => 'Oreillette gauche → aorte → ventricule droit', 'is_correct' => false],
                            ['choice_text' => 'Oreillette gauche → artère pulmonaire → aorte', 'is_correct' => false],
                        ],
                        'explanation' => 'Le sang oxygéné passe de l’oreillette gauche au ventricule gauche, puis est éjecté dans l’aorte vers les tissus.',
                    ],
                ],
            ],
            [
                'title' => 'Reins, appareil urinaire et pelvis',
                'description' => 'Localiser les organes urinaires et reconnaître les principales structures du pelvis.',
                'settings' => ['duration' => 25, 'passing_score' => 65],
                'questions' => [
                    [
                        'question' => 'Combien de reins possède normalement un être humain ?',
                        'choices' => [
                            ['choice_text' => '1', 'is_correct' => false],
                            ['choice_text' => '3', 'is_correct' => false],
                            ['choice_text' => '2', 'is_correct' => true],
                            ['choice_text' => '4', 'is_correct' => false],
                        ],
                        'explanation' => 'On possède normalement deux reins, dans la région lombaire, de part et d’autre de la colonne vertébrale.',
                    ],
                    [
                        'question' => 'Dans quelle région du corps se situent les reins ?',
                        'choices' => [
                            ['choice_text' => 'Dans le pelvis, de chaque côté de la vessie', 'is_correct' => false],
                            ['choice_text' => 'Dans la région lombaire, au fond de l’abdomen', 'is_correct' => true],
                            ['choice_text' => 'Dans le thorax, de chaque côté du cœur', 'is_correct' => false],
                            ['choice_text' => 'Dans le haut de l’abdomen, devant l’estomac', 'is_correct' => false],
                        ],
                        'explanation' => 'Les reins sont plaqués contre la paroi du dos, de chaque côté de la colonne lombaire, derrière les autres organes de l’abdomen.',
                    ],
                    [
                        'question' => 'Quel conduit amène l’urine du rein jusqu’à la vessie ?',
                        'choices' => [
                            ['choice_text' => 'L’urètre', 'is_correct' => false],
                            ['choice_text' => 'La veine rénale', 'is_correct' => false],
                            ['choice_text' => 'L’artère rénale', 'is_correct' => false],
                            ['choice_text' => 'L’uretère', 'is_correct' => true],
                        ],
                        'explanation' => 'Chaque rein est relié à la vessie par un uretère ; l’urètre, lui, évacue ensuite l’urine vers l’extérieur.',
                    ],
                    [
                        'question' => 'Quelle poche musculaire stocke l’urine entre deux mictions ?',
                        'choices' => [
                            ['choice_text' => 'La vessie urinaire', 'is_correct' => true],
                            ['choice_text' => 'Le rein gauche', 'is_correct' => false],
                            ['choice_text' => 'La vésicule biliaire', 'is_correct' => false],
                            ['choice_text' => 'L’uretère droit', 'is_correct' => false],
                        ],
                        'explanation' => 'La vessie reçoit l’urine des deux uretères et la garde jusqu’à la miction.',
                    ],
                    [
                        'question' => 'À quoi sert l’urètre ?',
                        'choices' => [
                            ['choice_text' => 'Il conduit l’urine du rein vers la vessie', 'is_correct' => false],
                            ['choice_text' => 'Il conduit l’urine hors de la vessie', 'is_correct' => true],
                            ['choice_text' => 'Il filtre le sang pour fabriquer l’urine', 'is_correct' => false],
                            ['choice_text' => 'Il stocke l’urine entre deux mictions', 'is_correct' => false],
                        ],
                        'explanation' => 'L’urètre est le canal de sortie de la vessie ; l’uretère, lui, relie le rein à la vessie.',
                    ],
                    [
                        'question' => 'Chez la femme, quel organe musculaire du pelvis accueille le fœtus pendant la grossesse ?',
                        'choices' => [
                            ['choice_text' => 'L’utérus', 'is_correct' => true],
                            ['choice_text' => 'L’ovaire', 'is_correct' => false],
                            ['choice_text' => 'La vessie', 'is_correct' => false],
                            ['choice_text' => 'Le rectum', 'is_correct' => false],
                        ],
                        'explanation' => 'L’utérus est un organe musculaire du pelvis féminin où l’embryon, puis le fœtus, se développent.',
                    ],
                    [
                        'question' => 'Après un repas salé, Sara boit beaucoup d’eau. Quel organe ajuste la quantité d’eau et de sels éliminés dans l’urine ?',
                        'choices' => [
                            ['choice_text' => 'La vessie', 'is_correct' => false],
                            ['choice_text' => 'L’uretère', 'is_correct' => false],
                            ['choice_text' => 'Le rein', 'is_correct' => true],
                            ['choice_text' => 'Les poumons', 'is_correct' => false],
                        ],
                        'explanation' => 'Les reins filtrent le sang et règlent la quantité d’eau et de sels évacués dans l’urine.',
                    ],
                    [
                        'question' => 'Dans le tronc, quel organe se trouve le plus haut ?',
                        'choices' => [
                            ['choice_text' => 'La vessie', 'is_correct' => false],
                            ['choice_text' => 'L’utérus', 'is_correct' => false],
                            ['choice_text' => 'Le rectum', 'is_correct' => false],
                            ['choice_text' => 'Le rein', 'is_correct' => true],
                        ],
                        'explanation' => 'Les reins sont dans la région lombaire, alors que la vessie, l’utérus et le rectum se trouvent plus bas, dans le pelvis.',
                    ],
                    [
                        'question' => 'Quel muscle permet de retenir volontairement les selles ?',
                        'choices' => [
                            ['choice_text' => 'Le sphincter anal externe', 'is_correct' => true],
                            ['choice_text' => 'Le grand fessier de la fesse', 'is_correct' => false],
                            ['choice_text' => 'Le muscle de la vessie', 'is_correct' => false],
                            ['choice_text' => 'Le diaphragme thoracique', 'is_correct' => false],
                        ],
                        'explanation' => 'Le sphincter anal externe est un muscle volontaire qui ferme l’anus et permet de retenir les selles.',
                    ],
                    [
                        'question' => 'Qu’est-ce qui protège en partie les reins des chocs ?',
                        'choices' => [
                            ['choice_text' => 'Leur coque osseuse, comme celle du cerveau', 'is_correct' => false],
                            ['choice_text' => 'Leur place dans le thorax, derrière le sternum', 'is_correct' => false],
                            ['choice_text' => 'Leur position devant la vessie, dans le pelvis', 'is_correct' => false],
                            ['choice_text' => 'Leur place à l’arrière, sous les dernières côtes', 'is_correct' => true],
                        ],
                        'explanation' => 'Placés contre la paroi du dos et couverts en partie par les dernières côtes, les reins sont mieux à l’abri que les organes de la face avant de l’abdomen.',
                    ],
                ],
            ],
        ];

        foreach ($quizzes as $quizData) {
            $settings = $quizData['settings'];

            $quiz = Quiz::updateOrCreate(
                [
                    'subject_id' => $subject->id,
                    'title' => $quizData['title'],
                ],
                [
                    'owner_id' => null,
                    'description' => $quizData['description'],
                    'duration' => $settings['duration'],
                    'passing_score' => $settings['passing_score'],
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
                        'explanation' => $questionData['explanation'],
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