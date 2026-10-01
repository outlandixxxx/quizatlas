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
                        'explanation' => 'En position anatomique, la personne est debout, face à l’observateur, avec les bras le long du corps et les paumes tournées vers l’avant.',
                        'choices' => [
                            ['choice_text' => 'L’arrière', 'is_correct' => false],
                            ['choice_text' => 'Le bas', 'is_correct' => false],
                            ['choice_text' => 'L’avant', 'is_correct' => true],
                            ['choice_text' => 'Le haut', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel terme anatomique signifie « plus proche de la tête » ?',
                        'explanation' => 'Le terme « supérieur » désigne une structure située plus près de la tête ou au-dessus d’une autre structure.',
                        'choices' => [
                            ['choice_text' => 'Supérieur', 'is_correct' => true],
                            ['choice_text' => 'Inférieur', 'is_correct' => false],
                            ['choice_text' => 'Distal', 'is_correct' => false],
                            ['choice_text' => 'Latéral', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Le cœur se trouve principalement dans quelle grande région du corps ?',
                        'explanation' => 'Le cœur est situé dans le thorax, entre les poumons, dans une région appelée médiastin.',
                        'choices' => [
                            ['choice_text' => 'Le bassin', 'is_correct' => false],
                            ['choice_text' => 'Le thorax', 'is_correct' => true],
                            ['choice_text' => 'Le coude', 'is_correct' => false],
                            ['choice_text' => 'La cuisse', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Si le nez est situé sur la ligne médiane du visage, on peut dire qu’il est :',
                        'explanation' => 'Une structure située près du plan médian du corps est dite médiale. Le nez est donc médial par rapport aux yeux.',
                        'choices' => [
                            ['choice_text' => 'Latéral', 'is_correct' => false],
                            ['choice_text' => 'Distal', 'is_correct' => false],
                            ['choice_text' => 'Médial', 'is_correct' => true],
                            ['choice_text' => 'Inférieur', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel plan anatomique sépare le corps en parties droite et gauche ?',
                        'explanation' => 'Le plan sagittal sépare le corps en parties droite et gauche. Le plan médian en est une forme qui passe exactement au milieu.',
                        'choices' => [
                            ['choice_text' => 'Plan frontal', 'is_correct' => false],
                            ['choice_text' => 'Plan sagittal', 'is_correct' => true],
                            ['choice_text' => 'Plan transversal', 'is_correct' => false],
                            ['choice_text' => 'Plan horizontal du pied', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Lequel de ces exemples est une structure appartenant au membre supérieur ?',
                        'explanation' => 'Le bras et l’avant-bras font partie du membre supérieur. Le fémur et le tibia appartiennent au membre inférieur.',
                        'choices' => [
                            ['choice_text' => 'Le radius', 'is_correct' => true],
                            ['choice_text' => 'Le fémur', 'is_correct' => false],
                            ['choice_text' => 'Le tibia', 'is_correct' => false],
                            ['choice_text' => 'Le bassin', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel terme décrit une structure plus éloignée du point d’attache d’un membre ?',
                        'explanation' => '« Distal » signifie plus éloigné de l’origine ou du point d’attache d’un membre. Par exemple, la main est distale par rapport au coude.',
                        'choices' => [
                            ['choice_text' => 'Proximal', 'is_correct' => false],
                            ['choice_text' => 'Distal', 'is_correct' => true],
                            ['choice_text' => 'Médial', 'is_correct' => false],
                            ['choice_text' => 'Supérieur', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel terme désigne une structure située vers l’extérieur du corps ou loin de la ligne médiane ?',
                        'explanation' => '« Latéral » signifie plus éloigné de la ligne médiane. Les épaules sont latérales par rapport au sternum.',
                        'choices' => [
                            ['choice_text' => 'Médial', 'is_correct' => false],
                            ['choice_text' => 'Latéral', 'is_correct' => true],
                            ['choice_text' => 'Profond', 'is_correct' => false],
                            ['choice_text' => 'Inférieur', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pour décrire la relation entre la peau et les muscles situés juste en dessous, quel terme convient le mieux ?',
                        'explanation' => 'La peau est superficielle par rapport aux muscles, car elle se trouve plus près de la surface du corps.',
                        'choices' => [
                            ['choice_text' => 'Superficielle', 'is_correct' => true],
                            ['choice_text' => 'Profonde', 'is_correct' => false],
                            ['choice_text' => 'Distale', 'is_correct' => false],
                            ['choice_text' => 'Médiale', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une coupe réalisée perpendiculairement à l’axe vertical du corps produit principalement :',
                        'explanation' => 'Une coupe transversale, aussi appelée horizontale, sépare le corps en une partie supérieure et une partie inférieure.',
                        'choices' => [
                            ['choice_text' => 'Une partie antérieure et une partie postérieure', 'is_correct' => false],
                            ['choice_text' => 'Une partie droite et une partie gauche', 'is_correct' => false],
                            ['choice_text' => 'Une partie supérieure et une partie inférieure', 'is_correct' => true],
                            ['choice_text' => 'Une partie interne et une partie externe', 'is_correct' => false],
                        ],
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
                        'explanation' => 'Le sternum est un os plat placé à l’avant du thorax. Il participe à la protection du cœur et des poumons.',
                        'choices' => [
                            ['choice_text' => 'Le sternum', 'is_correct' => true],
                            ['choice_text' => 'Le sacrum', 'is_correct' => false],
                            ['choice_text' => 'Le radius', 'is_correct' => false],
                            ['choice_text' => 'La rotule', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Combien de vertèbres cervicales possède normalement la colonne vertébrale humaine ?',
                        'explanation' => 'La région cervicale comprend 7 vertèbres, de C1 à C7, qui soutiennent la tête et permettent notamment les mouvements du cou.',
                        'choices' => [
                            ['choice_text' => '5', 'is_correct' => false],
                            ['choice_text' => '7', 'is_correct' => true],
                            ['choice_text' => '10', 'is_correct' => false],
                            ['choice_text' => '12', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le rôle principal de la cage thoracique ?',
                        'explanation' => 'La cage thoracique, composée notamment des côtes et du sternum, protège des organes importants comme le cœur et les poumons.',
                        'choices' => [
                            ['choice_text' => 'Produire la bile', 'is_correct' => false],
                            ['choice_text' => 'Protéger certains organes thoraciques', 'is_correct' => true],
                            ['choice_text' => 'Filtrer le sang', 'is_correct' => false],
                            ['choice_text' => 'Fabriquer uniquement des hormones', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Le fémur est situé dans :',
                        'explanation' => 'Le fémur est l’os long de la cuisse. Il relie la hanche au genou et constitue l’un des principaux os porteurs du membre inférieur.',
                        'choices' => [
                            ['choice_text' => 'L’avant-bras', 'is_correct' => false],
                            ['choice_text' => 'La jambe', 'is_correct' => false],
                            ['choice_text' => 'La cuisse', 'is_correct' => true],
                            ['choice_text' => 'Le thorax', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel os appartient à l’avant-bras ?',
                        'explanation' => 'L’avant-bras contient deux os : le radius et l’ulna. L’humérus appartient au bras.',
                        'choices' => [
                            ['choice_text' => 'Le radius', 'is_correct' => true],
                            ['choice_text' => 'Le fémur', 'is_correct' => false],
                            ['choice_text' => 'Le sternum', 'is_correct' => false],
                            ['choice_text' => 'Le péroné', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Le crâne appartient principalement au squelette :',
                        'explanation' => 'Le crâne fait partie du squelette axial, qui comprend l’axe central du corps : crâne, colonne vertébrale et cage thoracique.',
                        'choices' => [
                            ['choice_text' => 'Appendiculaire', 'is_correct' => false],
                            ['choice_text' => 'Axial', 'is_correct' => true],
                            ['choice_text' => 'Périphérique uniquement', 'is_correct' => false],
                            ['choice_text' => 'Musculaire', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel os se trouve à l’avant du genou et protège l’articulation ?',
                        'explanation' => 'La rotule, ou patella, est un petit os situé à l’avant du genou. Elle participe à la mécanique de l’extension de la jambe.',
                        'choices' => [
                            ['choice_text' => 'La clavicule', 'is_correct' => false],
                            ['choice_text' => 'La rotule', 'is_correct' => true],
                            ['choice_text' => 'L’omoplate', 'is_correct' => false],
                            ['choice_text' => 'Le sacrum', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Le bassin est particulièrement important pour :',
                        'explanation' => 'Le bassin relie le tronc aux membres inférieurs, transmet une partie du poids du corps et protège les organes pelviens.',
                        'choices' => [
                            ['choice_text' => 'Relier le tronc aux membres inférieurs', 'is_correct' => true],
                            ['choice_text' => 'Remplacer les poumons', 'is_correct' => false],
                            ['choice_text' => 'Former uniquement les doigts', 'is_correct' => false],
                            ['choice_text' => 'Produire l’acide gastrique', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une fracture concerne le plus directement quel tissu ?',
                        'explanation' => 'Une fracture est une rupture partielle ou complète de l’os. Les tissus voisins peuvent aussi être lésés, mais la lésion principale touche l’os.',
                        'choices' => [
                            ['choice_text' => 'Le tissu osseux', 'is_correct' => true],
                            ['choice_text' => 'Le cartilage uniquement', 'is_correct' => false],
                            ['choice_text' => 'Le tissu nerveux uniquement', 'is_correct' => false],
                            ['choice_text' => 'L’épiderme uniquement', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel os relie le tronc au membre supérieur et se trouve à la partie supérieure du thorax ?',
                        'explanation' => 'La clavicule forme un pont osseux entre le sternum et l’omoplate. Elle participe à la mobilité et au maintien de l’épaule.',
                        'choices' => [
                            ['choice_text' => 'Le tibia', 'is_correct' => false],
                            ['choice_text' => 'La clavicule', 'is_correct' => true],
                            ['choice_text' => 'Le coccyx', 'is_correct' => false],
                            ['choice_text' => 'La mandibule', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Articulations et mouvements',
                'description' => 'Reconnaître les principaux types d’articulations et comprendre les mouvements anatomiques simples.',
                'settings' => ['duration' => 20, 'passing_score' => 60],
                'questions' => [
                    [
                        'question' => 'Quelle articulation permet normalement de plier et de tendre le coude dans un mouvement de charnière ?',
                        'explanation' => 'Le coude fonctionne principalement comme une articulation en charnière, permettant surtout la flexion et l’extension.',
                        'choices' => [
                            ['choice_text' => 'L’articulation du coude', 'is_correct' => true],
                            ['choice_text' => 'La suture du crâne', 'is_correct' => false],
                            ['choice_text' => 'Une articulation entre deux dents', 'is_correct' => false],
                            ['choice_text' => 'La symphyse pubienne uniquement', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quand une personne plie le coude et rapproche l’avant-bras du bras, il s’agit d’une :',
                        'explanation' => 'La flexion diminue l’angle entre deux segments osseux. Au coude, elle rapproche l’avant-bras du bras.',
                        'choices' => [
                            ['choice_text' => 'Extension', 'is_correct' => false],
                            ['choice_text' => 'Flexion', 'is_correct' => true],
                            ['choice_text' => 'Rotation latérale uniquement', 'is_correct' => false],
                            ['choice_text' => 'Abduction', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Écarter le bras du tronc dans le plan frontal correspond à une :',
                        'explanation' => 'L’abduction est le mouvement qui éloigne un membre de la ligne médiane du corps. Le mouvement inverse est l’adduction.',
                        'choices' => [
                            ['choice_text' => 'Adduction', 'is_correct' => false],
                            ['choice_text' => 'Flexion', 'is_correct' => false],
                            ['choice_text' => 'Abduction', 'is_correct' => true],
                            ['choice_text' => 'Pronation', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel type d’articulation est caractéristique des sutures entre les os du crâne ?',
                        'explanation' => 'Les sutures sont des articulations fibreuses très peu mobiles qui unissent les os du crâne.',
                        'choices' => [
                            ['choice_text' => 'Une articulation fibreuse', 'is_correct' => true],
                            ['choice_text' => 'Une articulation synoviale très mobile', 'is_correct' => false],
                            ['choice_text' => 'Une articulation sphérique', 'is_correct' => false],
                            ['choice_text' => 'Une articulation à rotule', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle articulation est un exemple classique d’articulation sphéroïde ?',
                        'explanation' => 'L’épaule est une articulation sphéroïde, ce qui permet des mouvements dans plusieurs directions, avec une grande amplitude.',
                        'choices' => [
                            ['choice_text' => 'L’épaule', 'is_correct' => true],
                            ['choice_text' => 'Les sutures du crâne', 'is_correct' => false],
                            ['choice_text' => 'L’articulation entre deux vertèbres uniquement', 'is_correct' => false],
                            ['choice_text' => 'Une dent dans son alvéole', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Tourner la paume de la main vers le bas à partir de la position anatomique correspond à la :',
                        'explanation' => 'La pronation est un mouvement de l’avant-bras qui oriente la paume vers l’arrière ou vers le bas selon la position de départ.',
                        'choices' => [
                            ['choice_text' => 'Supination', 'is_correct' => false],
                            ['choice_text' => 'Pronation', 'is_correct' => true],
                            ['choice_text' => 'Adduction', 'is_correct' => false],
                            ['choice_text' => 'Élévation', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'L’extension du genou consiste principalement à :',
                        'explanation' => 'L’extension augmente l’angle de l’articulation. Au genou, elle correspond au mouvement qui redresse la jambe.',
                        'choices' => [
                            ['choice_text' => 'Plier davantage la jambe', 'is_correct' => false],
                            ['choice_text' => 'Redresser la jambe', 'is_correct' => true],
                            ['choice_text' => 'Écarter la jambe du corps', 'is_correct' => false],
                            ['choice_text' => 'Tourner uniquement la cheville', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel élément réduit les frottements à l’intérieur d’une articulation synoviale ?',
                        'explanation' => 'Le liquide synovial lubrifie l’articulation et facilite le glissement des surfaces articulaires.',
                        'choices' => [
                            ['choice_text' => 'Le liquide synovial', 'is_correct' => true],
                            ['choice_text' => 'La moelle osseuse rouge', 'is_correct' => false],
                            ['choice_text' => 'L’émail dentaire', 'is_correct' => false],
                            ['choice_text' => 'Le tissu adipeux sous-cutané', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une personne lève les épaules vers les oreilles. Quel mouvement décrit le mieux cette action ?',
                        'explanation' => 'Le fait de relever les épaules vers le haut est une élévation de la ceinture scapulaire.',
                        'choices' => [
                            ['choice_text' => 'Dépression', 'is_correct' => false],
                            ['choice_text' => 'Élévation', 'is_correct' => true],
                            ['choice_text' => 'Adduction du coude', 'is_correct' => false],
                            ['choice_text' => 'Pronation du pied', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel mouvement rapproche un membre de la ligne médiane du corps ?',
                        'explanation' => 'L’adduction ramène un membre vers la ligne médiane, à l’opposé de l’abduction qui l’en éloigne.',
                        'choices' => [
                            ['choice_text' => 'Abduction', 'is_correct' => false],
                            ['choice_text' => 'Adduction', 'is_correct' => true],
                            ['choice_text' => 'Extension', 'is_correct' => false],
                            ['choice_text' => 'Supination', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Muscles et organisation du mouvement',
                'description' => 'Identifier les grands muscles, les types de tissu musculaire et quelques notions simples de mouvement.',
                'settings' => ['duration' => 20, 'passing_score' => 60],
                'questions' => [
                    [
                        'question' => 'Quel type de muscle est directement associé aux mouvements volontaires du squelette ?',
                        'explanation' => 'Les muscles squelettiques sont striés et généralement sous contrôle volontaire. Ils sont fixés aux os par des tendons.',
                        'choices' => [
                            ['choice_text' => 'Muscle squelettique', 'is_correct' => true],
                            ['choice_text' => 'Muscle cardiaque uniquement', 'is_correct' => false],
                            ['choice_text' => 'Muscle lisse uniquement', 'is_correct' => false],
                            ['choice_text' => 'Tissu osseux', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Le biceps brachial est situé principalement :',
                        'explanation' => 'Le biceps brachial se trouve à l’avant du bras. Il participe notamment à la flexion du coude.',
                        'choices' => [
                            ['choice_text' => 'Dans la cuisse', 'is_correct' => false],
                            ['choice_text' => 'À l’avant du bras', 'is_correct' => true],
                            ['choice_text' => 'Dans le mollet', 'is_correct' => false],
                            ['choice_text' => 'Dans l’abdomen profond', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel muscle volumineux de la cuisse participe fortement à l’extension du genou ?',
                        'explanation' => 'Le quadriceps fémoral, situé à l’avant de la cuisse, est le principal groupe musculaire responsable de l’extension du genou.',
                        'choices' => [
                            ['choice_text' => 'Quadriceps', 'is_correct' => true],
                            ['choice_text' => 'Biceps brachial', 'is_correct' => false],
                            ['choice_text' => 'Diaphragme', 'is_correct' => false],
                            ['choice_text' => 'Trapèze cervical uniquement', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel tissu musculaire compose la paroi du cœur ?',
                        'explanation' => 'Le myocarde est constitué de muscle cardiaque, un tissu musculaire spécialisé qui se contracte de manière rythmique et involontaire.',
                        'choices' => [
                            ['choice_text' => 'Muscle lisse', 'is_correct' => false],
                            ['choice_text' => 'Muscle cardiaque', 'is_correct' => true],
                            ['choice_text' => 'Muscle squelettique', 'is_correct' => false],
                            ['choice_text' => 'Tissu cartilagineux', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Le diaphragme est surtout connu pour son rôle dans :',
                        'explanation' => 'Le diaphragme est un grand muscle situé sous les poumons. Ses contractions et relâchements participent aux mouvements respiratoires.',
                        'choices' => [
                            ['choice_text' => 'La respiration', 'is_correct' => true],
                            ['choice_text' => 'La vision des couleurs', 'is_correct' => false],
                            ['choice_text' => 'La fabrication des globules rouges', 'is_correct' => false],
                            ['choice_text' => 'La filtration de l’urine', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quand un muscle squelettique se raccourcit en développant une tension, on parle généralement de contraction :',
                        'explanation' => 'Une contraction concentrique correspond à une production de tension accompagnée d’un raccourcissement du muscle.',
                        'choices' => [
                            ['choice_text' => 'Concentrique', 'is_correct' => true],
                            ['choice_text' => 'Fibreuse', 'is_correct' => false],
                            ['choice_text' => 'Synoviale', 'is_correct' => false],
                            ['choice_text' => 'Cartilagineuse', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Les tendons relient principalement :',
                        'explanation' => 'Un tendon relie un muscle à un os. Les ligaments, eux, relient principalement des os entre eux.',
                        'choices' => [
                            ['choice_text' => 'Un muscle à un os', 'is_correct' => true],
                            ['choice_text' => 'Deux muscles uniquement', 'is_correct' => false],
                            ['choice_text' => 'Deux organes digestifs', 'is_correct' => false],
                            ['choice_text' => 'La peau à l’épiderme', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Lequel de ces muscles se trouve principalement dans la région postérieure du bras ?',
                        'explanation' => 'Le triceps brachial est le principal muscle situé à l’arrière du bras et contribue à l’extension du coude.',
                        'choices' => [
                            ['choice_text' => 'Triceps brachial', 'is_correct' => true],
                            ['choice_text' => 'Biceps brachial', 'is_correct' => false],
                            ['choice_text' => 'Droit fémoral', 'is_correct' => false],
                            ['choice_text' => 'Sartorius', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Deux muscles qui produisent des actions opposées au niveau d’une articulation sont souvent appelés :',
                        'explanation' => 'Des muscles antagonistes ont des actions opposées. Le couple biceps-triceps en est un exemple classique au niveau du coude.',
                        'choices' => [
                            ['choice_text' => 'Agonistes obligatoires', 'is_correct' => false],
                            ['choice_text' => 'Antagonistes', 'is_correct' => true],
                            ['choice_text' => 'Cartilages', 'is_correct' => false],
                            ['choice_text' => 'Ligaments', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Lorsqu’une personne monte des escaliers, quel groupe musculaire travaille fortement pour redresser le genou ?',
                        'explanation' => 'Le quadriceps produit une extension du genou et joue un rôle majeur lorsque l’on se relève ou que l’on monte des escaliers.',
                        'choices' => [
                            ['choice_text' => 'Les quadriceps', 'is_correct' => true],
                            ['choice_text' => 'Les muscles de l’avant-bras uniquement', 'is_correct' => false],
                            ['choice_text' => 'Les muscles de la mâchoire', 'is_correct' => false],
                            ['choice_text' => 'Les muscles intrinsèques de l’œil uniquement', 'is_correct' => false],
                        ],
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
                        'explanation' => 'L’encéphale se trouve dans le crâne. Il comprend notamment le cerveau, le cervelet et le tronc cérébral.',
                        'choices' => [
                            ['choice_text' => 'La moelle épinière', 'is_correct' => false],
                            ['choice_text' => 'L’encéphale', 'is_correct' => true],
                            ['choice_text' => 'Le nerf sciatique', 'is_correct' => false],
                            ['choice_text' => 'La rétine', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'La moelle épinière est logée principalement dans :',
                        'explanation' => 'La moelle épinière est protégée par la colonne vertébrale et chemine dans le canal vertébral.',
                        'choices' => [
                            ['choice_text' => 'Le canal vertébral', 'is_correct' => true],
                            ['choice_text' => 'La cavité abdominale', 'is_correct' => false],
                            ['choice_text' => 'Le sternum', 'is_correct' => false],
                            ['choice_text' => 'Le bassin uniquement', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle structure transforme la lumière en signaux nerveux dans l’œil ?',
                        'explanation' => 'La rétine contient des photorécepteurs qui convertissent les stimuli lumineux en signaux électriques transmis au système nerveux.',
                        'choices' => [
                            ['choice_text' => 'La cornée uniquement', 'is_correct' => false],
                            ['choice_text' => 'La rétine', 'is_correct' => true],
                            ['choice_text' => 'La sclérotique uniquement', 'is_correct' => false],
                            ['choice_text' => 'Le cristallin uniquement', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle partie de l’oreille est principalement impliquée dans l’équilibre ?',
                        'explanation' => 'L’oreille interne contient l’appareil vestibulaire, notamment les canaux semi-circulaires et les organes otolithiques, qui participent à l’équilibre.',
                        'choices' => [
                            ['choice_text' => 'L’oreille externe seulement', 'is_correct' => false],
                            ['choice_text' => 'L’oreille interne', 'is_correct' => true],
                            ['choice_text' => 'Le pavillon uniquement', 'is_correct' => false],
                            ['choice_text' => 'Le tympan uniquement', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel organe contient les récepteurs responsables de l’audition ?',
                        'explanation' => 'La cochlée, située dans l’oreille interne, contient les cellules sensorielles qui participent à la perception des sons.',
                        'choices' => [
                            ['choice_text' => 'La cochlée', 'is_correct' => true],
                            ['choice_text' => 'La trachée', 'is_correct' => false],
                            ['choice_text' => 'Le cervelet', 'is_correct' => false],
                            ['choice_text' => 'Le larynx', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Lequel de ces éléments appartient au système nerveux périphérique ?',
                        'explanation' => 'Le système nerveux périphérique comprend les nerfs et les ganglions qui relient le système nerveux central au reste du corps.',
                        'choices' => [
                            ['choice_text' => 'Les nerfs périphériques', 'is_correct' => true],
                            ['choice_text' => 'Le cerveau', 'is_correct' => false],
                            ['choice_text' => 'La moelle épinière', 'is_correct' => false],
                            ['choice_text' => 'Le cervelet uniquement', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Le cerveau est protégé directement par :',
                        'explanation' => 'La boîte crânienne protège mécaniquement le cerveau. Les méninges et le liquide cérébrospinal apportent également une protection.',
                        'choices' => [
                            ['choice_text' => 'Le fémur', 'is_correct' => false],
                            ['choice_text' => 'Le crâne', 'is_correct' => true],
                            ['choice_text' => 'Le sternum', 'is_correct' => false],
                            ['choice_text' => 'La clavicule', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Les papilles gustatives participent principalement à la perception :',
                        'explanation' => 'Les récepteurs gustatifs situés dans les papilles de la langue détectent différentes saveurs lorsque les substances sapides sont dissoutes dans la salive.',
                        'choices' => [
                            ['choice_text' => 'Des sons', 'is_correct' => false],
                            ['choice_text' => 'Des saveurs', 'is_correct' => true],
                            ['choice_text' => 'Des couleurs uniquement', 'is_correct' => false],
                            ['choice_text' => 'Des mouvements articulaires', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un médecin teste-t-il parfois les réflexes avec un marteau neurologique ?',
                        'explanation' => 'Un réflexe permet d’évaluer le fonctionnement de circuits nerveux rapides. Les réponses réflexes donnent des informations sur certaines voies nerveuses et la moelle épinière.',
                        'choices' => [
                            ['choice_text' => 'Pour mesurer directement la capacité pulmonaire', 'is_correct' => false],
                            ['choice_text' => 'Pour explorer certains circuits nerveux réflexes', 'is_correct' => true],
                            ['choice_text' => 'Pour déterminer la masse osseuse', 'is_correct' => false],
                            ['choice_text' => 'Pour calculer la longueur du fémur', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une personne retire rapidement sa main après avoir touché une surface très chaude. Cette réaction illustre surtout :',
                        'explanation' => 'Le retrait rapide d’une main peut être déclenché par un arc réflexe impliquant notamment la moelle épinière avant même la perception consciente complète de la douleur.',
                        'choices' => [
                            ['choice_text' => 'Un réflexe de retrait', 'is_correct' => true],
                            ['choice_text' => 'Une digestion mécanique', 'is_correct' => false],
                            ['choice_text' => 'Une contraction du cœur uniquement', 'is_correct' => false],
                            ['choice_text' => 'Une filtration rénale', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Appareils digestif et respiratoire',
                'description' => 'Localiser les principaux organes digestifs et respiratoires et comprendre leurs rapports anatomiques.',
                'settings' => ['duration' => 20, 'passing_score' => 65],
                'questions' => [
                    [
                        'question' => 'Quel organe reçoit directement les aliments après leur passage dans le pharynx et l’œsophage ?',
                        'explanation' => 'L’œsophage conduit les aliments jusqu’à l’estomac, où ils sont brassés et mélangés avec le suc gastrique.',
                        'choices' => [
                            ['choice_text' => 'L’estomac', 'is_correct' => true],
                            ['choice_text' => 'La trachée', 'is_correct' => false],
                            ['choice_text' => 'Le foie', 'is_correct' => false],
                            ['choice_text' => 'Le côlon', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Dans quelle partie de l’appareil digestif l’intestin grêle se situe-t-il ?',
                        'explanation' => 'L’intestin grêle se trouve entre l’estomac et le gros intestin. Il comprend notamment le duodénum, le jéjunum et l’iléon.',
                        'choices' => [
                            ['choice_text' => 'Entre l’estomac et le gros intestin', 'is_correct' => true],
                            ['choice_text' => 'Entre la bouche et le pharynx', 'is_correct' => false],
                            ['choice_text' => 'Après le rectum', 'is_correct' => false],
                            ['choice_text' => 'À l’intérieur des poumons', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel organe produit la bile ?',
                        'explanation' => 'Le foie fabrique la bile, qui est ensuite stockée et concentrée dans la vésicule biliaire avant d’être libérée dans l’intestin.',
                        'choices' => [
                            ['choice_text' => 'Le pancréas', 'is_correct' => false],
                            ['choice_text' => 'Le foie', 'is_correct' => true],
                            ['choice_text' => 'L’estomac', 'is_correct' => false],
                            ['choice_text' => 'Le côlon', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel organe est principalement situé dans la cavité thoracique et se trouve de part et d’autre du médiastin ?',
                        'explanation' => 'Les deux poumons occupent la majeure partie des régions droite et gauche du thorax, autour du médiastin.',
                        'choices' => [
                            ['choice_text' => 'Les reins', 'is_correct' => false],
                            ['choice_text' => 'Les poumons', 'is_correct' => true],
                            ['choice_text' => 'Le foie', 'is_correct' => false],
                            ['choice_text' => 'La rate', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel conduit appartient au système respiratoire et mène l’air depuis le larynx vers les bronches ?',
                        'explanation' => 'La trachée est un conduit situé sous le larynx. Elle se divise ensuite en deux bronches principales, droite et gauche.',
                        'choices' => [
                            ['choice_text' => 'L’œsophage', 'is_correct' => false],
                            ['choice_text' => 'La trachée', 'is_correct' => true],
                            ['choice_text' => 'Le duodénum', 'is_correct' => false],
                            ['choice_text' => 'Le rectum', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Les échanges gazeux entre l’air et le sang ont principalement lieu dans :',
                        'explanation' => 'Les échanges d’oxygène et de dioxyde de carbone se produisent au niveau des alvéoles pulmonaires, en contact étroit avec les capillaires.',
                        'choices' => [
                            ['choice_text' => 'Les alvéoles pulmonaires', 'is_correct' => true],
                            ['choice_text' => 'La trachée', 'is_correct' => false],
                            ['choice_text' => 'Le larynx', 'is_correct' => false],
                            ['choice_text' => 'Le diaphragme', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel organe abdominal est volumineux, situé surtout à droite, sous le diaphragme ?',
                        'explanation' => 'Le foie occupe une grande partie de l’étage supérieur droit de l’abdomen, juste sous le diaphragme.',
                        'choices' => [
                            ['choice_text' => 'Le foie', 'is_correct' => true],
                            ['choice_text' => 'La vessie', 'is_correct' => false],
                            ['choice_text' => 'Le cœur', 'is_correct' => false],
                            ['choice_text' => 'La trachée', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'La vésicule biliaire est principalement associée à quel organe ?',
                        'explanation' => 'La vésicule biliaire se situe sous le foie. Elle stocke la bile produite par celui-ci avant sa libération dans l’intestin.',
                        'choices' => [
                            ['choice_text' => 'Le foie', 'is_correct' => true],
                            ['choice_text' => 'Le poumon gauche', 'is_correct' => false],
                            ['choice_text' => 'Le rein droit uniquement', 'is_correct' => false],
                            ['choice_text' => 'La rate uniquement', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel organe est situé derrière la trachée et conduit les aliments vers l’estomac ?',
                        'explanation' => 'L’œsophage est un tube musculaire placé en arrière de la trachée. Il assure le passage du bol alimentaire vers l’estomac.',
                        'choices' => [
                            ['choice_text' => 'L’œsophage', 'is_correct' => true],
                            ['choice_text' => 'La bronche droite', 'is_correct' => false],
                            ['choice_text' => 'Le larynx', 'is_correct' => false],
                            ['choice_text' => 'Le côlon transverse uniquement', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un patient inspire profondément. Quel muscle descend normalement pour augmenter le volume de la cavité thoracique ?',
                        'explanation' => 'Lors d’une inspiration normale, le diaphragme se contracte et s’abaisse, ce qui augmente le volume thoracique et favorise l’entrée d’air dans les poumons.',
                        'choices' => [
                            ['choice_text' => 'Le diaphragme', 'is_correct' => true],
                            ['choice_text' => 'Le biceps brachial', 'is_correct' => false],
                            ['choice_text' => 'Le quadriceps', 'is_correct' => false],
                            ['choice_text' => 'Le masséter', 'is_correct' => false],
                        ],
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
                        'explanation' => 'Le cœur comprend quatre cavités : deux oreillettes et deux ventricules.',
                        'choices' => [
                            ['choice_text' => '2', 'is_correct' => false],
                            ['choice_text' => '3', 'is_correct' => false],
                            ['choice_text' => '4', 'is_correct' => true],
                            ['choice_text' => '6', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle cavité reçoit normalement le sang désoxygéné venant du corps par les veines caves ?',
                        'explanation' => 'Le sang revenant des tissus entre dans l’oreillette droite par les veines caves supérieure et inférieure.',
                        'choices' => [
                            ['choice_text' => 'Oreillette droite', 'is_correct' => true],
                            ['choice_text' => 'Oreillette gauche', 'is_correct' => false],
                            ['choice_text' => 'Ventricule gauche', 'is_correct' => false],
                            ['choice_text' => 'Ventricule droit', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel vaisseau part du ventricule gauche pour distribuer le sang dans la circulation systémique ?',
                        'explanation' => 'Le ventricule gauche éjecte le sang oxygéné dans l’aorte, la plus grande artère du corps.',
                        'choices' => [
                            ['choice_text' => 'L’aorte', 'is_correct' => true],
                            ['choice_text' => 'La veine cave supérieure', 'is_correct' => false],
                            ['choice_text' => 'L’artère pulmonaire', 'is_correct' => false],
                            ['choice_text' => 'La veine pulmonaire', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle est la fonction principale des valves cardiaques ?',
                        'explanation' => 'Les valves s’ouvrent et se ferment de manière coordonnée pour favoriser un flux sanguin unidirectionnel dans le cœur.',
                        'choices' => [
                            ['choice_text' => 'Empêcher le sang de revenir en arrière', 'is_correct' => true],
                            ['choice_text' => 'Produire les globules rouges', 'is_correct' => false],
                            ['choice_text' => 'Oxygéner directement le sang dans le cœur', 'is_correct' => false],
                            ['choice_text' => 'Fabriquer les hormones thyroïdiennes', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel vaisseau transporte habituellement le sang oxygéné des poumons vers le cœur ?',
                        'explanation' => 'Les veines pulmonaires ramènent le sang oxygéné depuis les poumons vers l’oreillette gauche.',
                        'choices' => [
                            ['choice_text' => 'Les artères pulmonaires', 'is_correct' => false],
                            ['choice_text' => 'Les veines pulmonaires', 'is_correct' => true],
                            ['choice_text' => 'Les veines caves', 'is_correct' => false],
                            ['choice_text' => 'L’aorte', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Les échanges de gaz, de nutriments et de déchets avec les tissus se font principalement au niveau :',
                        'explanation' => 'Les capillaires possèdent des parois très fines qui facilitent les échanges entre le sang et les tissus.',
                        'choices' => [
                            ['choice_text' => 'Des capillaires', 'is_correct' => true],
                            ['choice_text' => 'De l’aorte uniquement', 'is_correct' => false],
                            ['choice_text' => 'Des veines caves uniquement', 'is_correct' => false],
                            ['choice_text' => 'Des valves cardiaques', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel élément du sang participe principalement au transport de l’oxygène ?',
                        'explanation' => 'Les globules rouges contiennent de l’hémoglobine, une protéine qui se lie à l’oxygène et facilite son transport.',
                        'choices' => [
                            ['choice_text' => 'Les plaquettes', 'is_correct' => false],
                            ['choice_text' => 'Les globules rouges', 'is_correct' => true],
                            ['choice_text' => 'Les leucocytes uniquement', 'is_correct' => false],
                            ['choice_text' => 'Le plasma sans protéines', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le rôle principal des plaquettes lors d’une blessure ?',
                        'explanation' => 'Les plaquettes participent à l’hémostase en contribuant à la formation du clou plaquettaire et à la coagulation.',
                        'choices' => [
                            ['choice_text' => 'Participer à l’arrêt du saignement', 'is_correct' => true],
                            ['choice_text' => 'Transporter l’oxygène comme fonction principale', 'is_correct' => false],
                            ['choice_text' => 'Produire la bile', 'is_correct' => false],
                            ['choice_text' => 'Former les os longs', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Lors d’une mesure classique de la pression artérielle, quelle valeur correspond à la pression systolique ?',
                        'explanation' => 'La pression systolique est la pression maximale observée lors de la contraction des ventricules. Elle est généralement le premier chiffre annoncé.',
                        'choices' => [
                            ['choice_text' => 'Le premier chiffre', 'is_correct' => true],
                            ['choice_text' => 'Toujours le troisième chiffre', 'is_correct' => false],
                            ['choice_text' => 'Uniquement la fréquence respiratoire', 'is_correct' => false],
                            ['choice_text' => 'La température corporelle', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Lequel de ces trajets représente correctement un passage du sang oxygéné après son arrivée dans l’oreillette gauche ?',
                        'explanation' => 'Le sang oxygéné passe de l’oreillette gauche au ventricule gauche, puis est éjecté dans l’aorte vers les tissus.',
                        'choices' => [
                            ['choice_text' => 'Oreillette gauche → ventricule gauche → aorte', 'is_correct' => true],
                            ['choice_text' => 'Oreillette gauche → ventricule droit → veine cave', 'is_correct' => false],
                            ['choice_text' => 'Oreillette gauche → aorte → ventricule droit', 'is_correct' => false],
                            ['choice_text' => 'Oreillette gauche → artère pulmonaire → aorte', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Reins, appareil urinaire et pelvis',
                'description' => 'Localiser les organes urinaires et reconnaître les principales structures du pelvis.',
                'settings' => ['duration' => 25, 'passing_score' => 65],
                'questions' => [
                    [
                        'question' => 'Combien de reins possède généralement un être humain ?',
                        'explanation' => 'L’être humain possède normalement deux reins, situés dans la région lombaire, de part et d’autre de la colonne vertébrale.',
                        'choices' => [
                            ['choice_text' => '1', 'is_correct' => false],
                            ['choice_text' => '2', 'is_correct' => true],
                            ['choice_text' => '3', 'is_correct' => false],
                            ['choice_text' => '4', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Les reins sont situés principalement dans quelle région ?',
                        'explanation' => 'Les reins sont des organes rétropéritonéaux de la région abdominale postérieure, approximativement de part et d’autre de la colonne lombaire.',
                        'choices' => [
                            ['choice_text' => 'La région abdominale postérieure', 'is_correct' => true],
                            ['choice_text' => 'La cavité thoracique', 'is_correct' => false],
                            ['choice_text' => 'Le cou', 'is_correct' => false],
                            ['choice_text' => 'La main', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel conduit transporte l’urine du rein vers la vessie ?',
                        'explanation' => 'Chaque rein est relié à la vessie par un uretère. Les uretères conduisent l’urine vers la vessie.',
                        'choices' => [
                            ['choice_text' => 'L’urètre', 'is_correct' => false],
                            ['choice_text' => 'L’uretère', 'is_correct' => true],
                            ['choice_text' => 'La trachée', 'is_correct' => false],
                            ['choice_text' => 'L’œsophage', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle structure stocke temporairement l’urine avant la miction ?',
                        'explanation' => 'La vessie est une poche musculaire qui reçoit et stocke temporairement l’urine avant son évacuation par l’urètre.',
                        'choices' => [
                            ['choice_text' => 'La vessie', 'is_correct' => true],
                            ['choice_text' => 'Le rein', 'is_correct' => false],
                            ['choice_text' => 'Le foie', 'is_correct' => false],
                            ['choice_text' => 'La rate', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'L’urètre est le conduit qui :',
                        'explanation' => 'L’urètre permet la sortie de l’urine depuis la vessie vers l’extérieur du corps.',
                        'choices' => [
                            ['choice_text' => 'Conduit l’urine vers l’extérieur', 'is_correct' => true],
                            ['choice_text' => 'Conduit le sang vers le cœur', 'is_correct' => false],
                            ['choice_text' => 'Relie les poumons au cœur', 'is_correct' => false],
                            ['choice_text' => 'Transporte la bile', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Chez la femme, quel organe musculaire situé dans le pelvis accueille normalement le fœtus pendant la grossesse ?',
                        'explanation' => 'L’utérus est un organe musculaire du pelvis féminin. Pendant la grossesse, l’embryon puis le fœtus s’y développent.',
                        'choices' => [
                            ['choice_text' => 'L’utérus', 'is_correct' => true],
                            ['choice_text' => 'La vessie', 'is_correct' => false],
                            ['choice_text' => 'La rate', 'is_correct' => false],
                            ['choice_text' => 'Le pancréas', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Le principal organe responsable de la filtration du sang pour former l’urine est :',
                        'explanation' => 'Les reins filtrent le sang et contribuent à la régulation de l’eau, des électrolytes et de nombreux déchets.',
                        'choices' => [
                            ['choice_text' => 'Le rein', 'is_correct' => true],
                            ['choice_text' => 'La vessie', 'is_correct' => false],
                            ['choice_text' => 'L’urètre', 'is_correct' => false],
                            ['choice_text' => 'Le côlon', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Lequel se trouve généralement plus haut dans l’abdomen : les reins ou la vessie ?',
                        'explanation' => 'Les reins sont situés dans l’abdomen postérieur, tandis que la vessie se trouve plus bas, dans le pelvis.',
                        'choices' => [
                            ['choice_text' => 'Les reins', 'is_correct' => true],
                            ['choice_text' => 'La vessie', 'is_correct' => false],
                            ['choice_text' => 'Les deux au même niveau', 'is_correct' => false],
                            ['choice_text' => 'Cela dépend uniquement du côté droit', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel muscle ferme principalement le plancher de l’orifice anal et participe au contrôle de la défécation ?',
                        'explanation' => 'Le sphincter anal externe est un muscle strié qui participe au contrôle volontaire de la continence fécale.',
                        'choices' => [
                            ['choice_text' => 'Le sphincter anal externe', 'is_correct' => true],
                            ['choice_text' => 'Le diaphragme', 'is_correct' => false],
                            ['choice_text' => 'Le biceps', 'is_correct' => false],
                            ['choice_text' => 'Le masséter', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les reins sont-ils relativement protégés par leur position postérieure ?',
                        'explanation' => 'Leur position en arrière de la cavité abdominale, près des muscles du dos et protégée en partie par les dernières côtes, leur apporte une certaine protection.',
                        'choices' => [
                            ['choice_text' => 'Parce qu’ils sont derrière une partie des viscères et près de la paroi postérieure', 'is_correct' => true],
                            ['choice_text' => 'Parce qu’ils flottent dans les poumons', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’ils sont enfermés dans le crâne', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’ils sont à l’intérieur de la vessie', 'is_correct' => false],
                        ],
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
