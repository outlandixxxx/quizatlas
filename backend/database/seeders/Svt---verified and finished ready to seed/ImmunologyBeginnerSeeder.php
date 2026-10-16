<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class ImmunologyBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'immunology')->firstOrFail();

        $quizzes = [
            [
                'title' => 'Les bases du système immunitaire',
                'description' => 'Découvrir les rôles, les barrières et les principales cellules de défense de l’organisme.',
                'settings' => ['duration' => 15, 'passing_score' => 50],
                'questions' => [
                    [
                        'question' => 'Hamza se demande à quoi sert le système immunitaire. Que peut-on lui répondre ?',
                        'choices' => [
                            ['choice_text' => 'Il transporte l’oxygène vers les muscles', 'is_correct' => false],
                            ['choice_text' => 'Il défend le corps contre les microbes', 'is_correct' => true],
                            ['choice_text' => 'Il fabrique les hormones du corps', 'is_correct' => false],
                            ['choice_text' => 'Il digère les aliments dans l’intestin', 'is_correct' => false],
                        ],
                        'explanation' => 'Le système immunitaire reconnaît et combat les microbes ainsi que certaines cellules anormales, ce qui protège l’organisme.',
                    ],
                    [
                        'question' => 'Quelle structure forme la première barrière physique contre les microbes ?',
                        'choices' => [
                            ['choice_text' => 'Les anticorps du sang', 'is_correct' => false],
                            ['choice_text' => 'Les globules blancs', 'is_correct' => false],
                            ['choice_text' => 'La rate', 'is_correct' => false],
                            ['choice_text' => 'La peau', 'is_correct' => true],
                        ],
                        'explanation' => 'La peau empêche beaucoup de microbes d’entrer dans le corps, avant même que les cellules de défense interviennent.',
                    ],
                    [
                        'question' => 'Salma se coupe le doigt. Que fait le corps pour limiter l’entrée des microbes ?',
                        'choices' => [
                            ['choice_text' => 'Un caillot se forme et ferme la plaie', 'is_correct' => true],
                            ['choice_text' => 'La peau se dissout autour de la plaie', 'is_correct' => false],
                            ['choice_text' => 'Les muscles du doigt se relâchent', 'is_correct' => false],
                            ['choice_text' => 'Les os du doigt durcissent', 'is_correct' => false],
                        ],
                        'explanation' => 'En se coagulant, le sang forme un caillot qui bouche la plaie et gêne l’entrée des microbes.',
                    ],
                    [
                        'question' => 'Quelles cellules du sang défendent le corps contre les infections ?',
                        'choices' => [
                            ['choice_text' => 'Les globules rouges', 'is_correct' => false],
                            ['choice_text' => 'Les plaquettes', 'is_correct' => false],
                            ['choice_text' => 'Les globules blancs', 'is_correct' => true],
                            ['choice_text' => 'Les cellules du foie', 'is_correct' => false],
                        ],
                        'explanation' => 'Les globules blancs, aussi appelés leucocytes, regroupent les cellules de défense du sang.',
                    ],
                    [
                        'question' => 'Imane respire de la poussière. À quoi sert le mucus de ses voies respiratoires ?',
                        'choices' => [
                            ['choice_text' => 'À fabriquer des globules rouges', 'is_correct' => false],
                            ['choice_text' => 'À fermer les bronches', 'is_correct' => false],
                            ['choice_text' => 'À retenir poussières et microbes', 'is_correct' => true],
                            ['choice_text' => 'À chauffer le sang du nez', 'is_correct' => false],
                        ],
                        'explanation' => 'Le mucus colle aux poussières et aux microbes inhalés ; les cils de l’appareil respiratoire les repoussent ensuite vers l’extérieur.',
                    ],
                    [
                        'question' => 'Comment appelle-t-on une substance que le système immunitaire reconnaît comme étrangère et qui peut déclencher une réponse ?',
                        'choices' => [
                            ['choice_text' => 'Un antigène', 'is_correct' => true],
                            ['choice_text' => 'Un anticorps', 'is_correct' => false],
                            ['choice_text' => 'Un nutriment', 'is_correct' => false],
                            ['choice_text' => 'Une hormone', 'is_correct' => false],
                        ],
                        'explanation' => 'Un antigène est une structure que le système immunitaire reconnaît ; il peut déclencher une réponse dirigée contre lui.',
                    ],
                    [
                        'question' => 'À quoi servent les macrophages ?',
                        'choices' => [
                            ['choice_text' => 'À fabriquer de grandes quantités d’anticorps', 'is_correct' => false],
                            ['choice_text' => 'À boucher les plaies avec un caillot', 'is_correct' => false],
                            ['choice_text' => 'À transporter l’oxygène dans le sang', 'is_correct' => false],
                            ['choice_text' => 'À avaler et digérer les microbes et les débris', 'is_correct' => true],
                        ],
                        'explanation' => 'Les macrophages englobent les microbes et les débris cellulaires, puis les digèrent : c’est la phagocytose.',
                    ],
                    [
                        'question' => 'Un doigt piqué par une écharde devient rouge, chaud et un peu gonflé. De quoi s’agit-il ?',
                        'choices' => [
                            ['choice_text' => 'D’une allergie à l’air ambiant', 'is_correct' => false],
                            ['choice_text' => 'D’une inflammation, une réaction locale de défense', 'is_correct' => true],
                            ['choice_text' => 'D’un arrêt de la circulation du sang dans le doigt gonflé', 'is_correct' => false],
                            ['choice_text' => 'D’un début de fracture du doigt', 'is_correct' => false],
                        ],
                        'explanation' => 'L’inflammation attire du sang et des cellules de défense vers la zone touchée : d’où la rougeur, la chaleur et le gonflement.',
                    ],
                    [
                        'question' => 'Lina avale des aliments contenant des microbes. Quelle défense de l’estomac en détruit beaucoup ?',
                        'choices' => [
                            ['choice_text' => 'Ses replis qui absorbent les nutriments', 'is_correct' => false],
                            ['choice_text' => 'Sa position sous le diaphragme', 'is_correct' => false],
                            ['choice_text' => 'Son suc très acide', 'is_correct' => true],
                            ['choice_text' => 'Ses mouvements qui brassent les aliments', 'is_correct' => false],
                        ],
                        'explanation' => 'Le suc gastrique est très acide : il détruit une grande partie des microbes avalés avec les aliments.',
                    ],
                    [
                        'question' => 'Quelle phrase oppose l’immunité innée à l’immunité adaptative ?',
                        'choices' => [
                            ['choice_text' => 'L’innée agit vite et largement, l’adaptative vise un antigène', 'is_correct' => true],
                            ['choice_text' => 'L’innée se met en place après une vaccination', 'is_correct' => false],
                            ['choice_text' => 'L’adaptative est plus rapide que l’innée mais beaucoup moins précise', 'is_correct' => false],
                            ['choice_text' => 'Les deux agissent de façon identique', 'is_correct' => false],
                        ],
                        'explanation' => 'L’immunité innée est la réponse rapide et générale ; l’immunité adaptative demande plus de temps mais cible un antigène précis et garde une mémoire.',
                    ],
                ],
            ],
            [
                'title' => 'Cellules et organes immunitaires',
                'description' => 'Identifier les principaux acteurs cellulaires et les organes où les cellules immunitaires se développent ou circulent.',
                'settings' => ['duration' => 15, 'passing_score' => 55],
                'questions' => [
                    [
                        'question' => 'Où les lymphocytes T finissent-ils leur maturation ?',
                        'choices' => [
                            ['choice_text' => 'Dans la rate', 'is_correct' => false],
                            ['choice_text' => 'Dans le foie', 'is_correct' => false],
                            ['choice_text' => 'Dans le thymus', 'is_correct' => true],
                            ['choice_text' => 'Dans le pancréas', 'is_correct' => false],
                        ],
                        'explanation' => 'Les lymphocytes T naissent dans la moelle osseuse puis mûrissent dans le thymus, une petite glande située derrière le sternum.',
                    ],
                    [
                        'question' => 'Que produit la moelle osseuse ?',
                        'choices' => [
                            ['choice_text' => 'Les cellules du sang, globules blancs compris', 'is_correct' => true],
                            ['choice_text' => 'Les hormones de la glande thyroïde du cou', 'is_correct' => false],
                            ['choice_text' => 'L’urine filtrée par les deux reins', 'is_correct' => false],
                            ['choice_text' => 'Les sucs digestifs de l’estomac et de l’intestin', 'is_correct' => false],
                        ],
                        'explanation' => 'La moelle osseuse, au centre de certains os, fabrique les globules rouges, les plaquettes et les globules blancs.',
                    ],
                    [
                        'question' => 'Une fois activés, les lymphocytes B deviennent des cellules qui fabriquent quoi ?',
                        'choices' => [
                            ['choice_text' => 'Des plaquettes', 'is_correct' => false],
                            ['choice_text' => 'Des anticorps', 'is_correct' => true],
                            ['choice_text' => 'Des hormones', 'is_correct' => false],
                            ['choice_text' => 'De la bile', 'is_correct' => false],
                        ],
                        'explanation' => 'Un lymphocyte B activé se transforme en plasmocyte, qui fabrique de grandes quantités d’anticorps.',
                    ],
                    [
                        'question' => 'Quelles cellules détruisent les cellules infectées par un virus ?',
                        'choices' => [
                            ['choice_text' => 'Les globules rouges', 'is_correct' => false],
                            ['choice_text' => 'Les plaquettes', 'is_correct' => false],
                            ['choice_text' => 'Les plasmocytes qui fabriquent les anticorps', 'is_correct' => false],
                            ['choice_text' => 'Les lymphocytes T cytotoxiques', 'is_correct' => true],
                        ],
                        'explanation' => 'Les lymphocytes T cytotoxiques repèrent les cellules infectées ou anormales et provoquent leur destruction.',
                    ],
                    [
                        'question' => 'Quel organe filtre le sang et abrite des cellules immunitaires ?',
                        'choices' => [
                            ['choice_text' => 'La rate', 'is_correct' => true],
                            ['choice_text' => 'La thyroïde', 'is_correct' => false],
                            ['choice_text' => 'Le pancréas', 'is_correct' => false],
                            ['choice_text' => 'L’estomac', 'is_correct' => false],
                        ],
                        'explanation' => 'La rate filtre le sang et contient des cellules immunitaires qui éliminent les microbes et les vieilles cellules.',
                    ],
                    [
                        'question' => 'Imane a un ganglion gonflé sous la mâchoire pendant une angine. Que se passe-t-il dedans ?',
                        'choices' => [
                            ['choice_text' => 'Il se remplit de graisse pendant l’infection', 'is_correct' => false],
                            ['choice_text' => 'Il ferme la circulation de la lymphe', 'is_correct' => false],
                            ['choice_text' => 'Il fabrique des globules rouges en urgence', 'is_correct' => false],
                            ['choice_text' => 'Des cellules de défense s’y multiplient', 'is_correct' => true],
                        ],
                        'explanation' => 'Les ganglions filtrent la lymphe : pendant une infection, les cellules immunitaires s’y multiplient, ce qui les fait gonfler.',
                    ],
                    [
                        'question' => 'Quelle cellule intervient très vite lors d’une infection, comme défense immédiate ?',
                        'choices' => [
                            ['choice_text' => 'Le lymphocyte B', 'is_correct' => false],
                            ['choice_text' => 'Le neutrophile', 'is_correct' => true],
                            ['choice_text' => 'L’érythrocyte', 'is_correct' => false],
                            ['choice_text' => 'L’adipocyte', 'is_correct' => false],
                        ],
                        'explanation' => 'Les neutrophiles sont des globules blancs qui arrivent en premier sur le lieu d’une infection et avalent les microbes.',
                    ],
                    [
                        'question' => 'Quel liquide circule dans les vaisseaux lymphatiques et transporte des cellules immunitaires ?',
                        'choices' => [
                            ['choice_text' => 'Le plasma sanguin', 'is_correct' => false],
                            ['choice_text' => 'Le liquide synovial', 'is_correct' => false],
                            ['choice_text' => 'La lymphe du corps', 'is_correct' => true],
                            ['choice_text' => 'La bile du foie', 'is_correct' => false],
                        ],
                        'explanation' => 'La lymphe circule dans les vaisseaux lymphatiques et passe par les ganglions, où les cellules immunitaires surveillent les microbes.',
                    ],
                    [
                        'question' => 'À quoi servent les amygdales, au fond de la gorge ?',
                        'choices' => [
                            ['choice_text' => 'À fabriquer la salive de la bouche', 'is_correct' => false],
                            ['choice_text' => 'À arrêter les microbes de la gorge', 'is_correct' => true],
                            ['choice_text' => 'À goûter les aliments avalés', 'is_correct' => false],
                            ['choice_text' => 'À produire les sons de la voix', 'is_correct' => false],
                        ],
                        'explanation' => 'Les amygdales sont des organes lymphoïdes : elles contiennent des cellules immunitaires qui surveillent les microbes entrés par la bouche et le nez.',
                    ],
                    [
                        'question' => 'Quelle liste réunit trois cellules immunitaires ?',
                        'choices' => [
                            ['choice_text' => 'Neutrophile, érythrocyte, macrophage', 'is_correct' => false],
                            ['choice_text' => 'Lymphocyte B, plaquette, macrophage', 'is_correct' => false],
                            ['choice_text' => 'Neutrophile, adipocyte, plasmocyte', 'is_correct' => false],
                            ['choice_text' => 'Neutrophile, lymphocyte B, macrophage', 'is_correct' => true],
                        ],
                        'explanation' => 'Neutrophiles, lymphocytes B et macrophages sont des cellules immunitaires ; les globules rouges, les plaquettes et les cellules graisseuses n’en font pas partie.',
                    ],
                ],
            ],
            [
                'title' => 'Inflammation et défense innée',
                'description' => 'Comprendre la réaction inflammatoire, la fièvre et les mécanismes rapides de l’immunité innée.',
                'settings' => ['duration' => 20, 'passing_score' => 60],
                'questions' => [
                    [
                        'question' => 'Dans une zone enflammée, les petits vaisseaux s’élargissent. Quelle conséquence cela a-t-il ?',
                        'choices' => [
                            ['choice_text' => 'Plus de sang arrive dans la zone', 'is_correct' => true],
                            ['choice_text' => 'Le sang quitte la zone', 'is_correct' => false],
                            ['choice_text' => 'Les globules blancs disparaissent', 'is_correct' => false],
                            ['choice_text' => 'Les vaisseaux se bouchent', 'is_correct' => false],
                        ],
                        'explanation' => 'En s’élargissant, les vaisseaux laissent arriver plus de sang, donc plus de cellules de défense, ce qui explique la rougeur et la chaleur.',
                    ],
                    [
                        'question' => 'Comment les globules blancs rejoignent-ils un tissu enflammé ?',
                        'choices' => [
                            ['choice_text' => 'Ils sont fabriqués sur place par le tissu', 'is_correct' => false],
                            ['choice_text' => 'Ils suivent les nerfs jusqu’au tissu', 'is_correct' => false],
                            ['choice_text' => 'Ils traversent la paroi des petits vaisseaux', 'is_correct' => true],
                            ['choice_text' => 'Ils sortent par les glandes sudoripares', 'is_correct' => false],
                        ],
                        'explanation' => 'Les globules blancs se glissent à travers la paroi des petits vaisseaux pour atteindre le tissu où se trouve l’infection.',
                    ],
                    [
                        'question' => 'Sara a mal autour d’une plaie enflammée. Qu’est-ce qui explique cette douleur ?',
                        'choices' => [
                            ['choice_text' => 'La plaie manque de sang et les nerfs s’assèchent peu à peu', 'is_correct' => false],
                            ['choice_text' => 'Les globules blancs découpent les nerfs', 'is_correct' => false],
                            ['choice_text' => 'La chaleur détruit les nerfs de la zone', 'is_correct' => false],
                            ['choice_text' => 'Le gonflement et des messagers excitent les nerfs', 'is_correct' => true],
                        ],
                        'explanation' => 'Les substances libérées pendant l’inflammation et le gonflement stimulent les terminaisons nerveuses de la zone.',
                    ],
                    [
                        'question' => 'Quelle substance libérée dans les tissus fait élargir les vaisseaux et provoque des démangeaisons ?',
                        'choices' => [
                            ['choice_text' => 'La kératine', 'is_correct' => false],
                            ['choice_text' => 'L’histamine', 'is_correct' => true],
                            ['choice_text' => 'La mélanine', 'is_correct' => false],
                            ['choice_text' => 'L’hémoglobine', 'is_correct' => false],
                        ],
                        'explanation' => 'L’histamine élargit les petits vaisseaux et les rend plus perméables, ce qui provoque rougeur, gonflement et démangeaisons.',
                    ],
                    [
                        'question' => 'Que peut apporter la fièvre pendant une infection ?',
                        'choices' => [
                            ['choice_text' => 'Elle détruit les microbes en une minute', 'is_correct' => false],
                            ['choice_text' => 'Elle remplace la production de globules blancs', 'is_correct' => false],
                            ['choice_text' => 'Elle stoppe l’inflammation pour le reste de la vie', 'is_correct' => false],
                            ['choice_text' => 'Elle peut aider les défenses à mieux agir', 'is_correct' => true],
                        ],
                        'explanation' => 'Une température plus élevée peut gêner la multiplication de certains microbes et stimuler des cellules de défense, mais une fièvre forte reste à surveiller.',
                    ],
                    [
                        'question' => 'Dès qu’un microbe est détecté, l’immunité innée se déclenche. Quelle est sa rapidité de réaction ?',
                        'choices' => [
                            ['choice_text' => 'Elle s’active en quelques minutes ou heures', 'is_correct' => true],
                            ['choice_text' => 'Elle attend plusieurs semaines pour réagir', 'is_correct' => false],
                            ['choice_text' => 'Elle produit d’abord des anticorps spécifiques', 'is_correct' => false],
                            ['choice_text' => 'Elle reste inactive jusqu’à la vaccination', 'is_correct' => false],
                        ],
                        'explanation' => 'L’immunité innée réagit en quelques minutes ou heures, alors que l’immunité adaptative met plusieurs jours à se mettre en place.',
                    ],
                    [
                        'question' => 'Les larmes et la salive contiennent des substances qui détruisent certaines bactéries. De quel type de défense s’agit-il ?',
                        'choices' => [
                            ['choice_text' => 'Une défense par mémoire immunitaire', 'is_correct' => false],
                            ['choice_text' => 'Une défense par anticorps spécifiques', 'is_correct' => false],
                            ['choice_text' => 'Une défense chimique de première ligne', 'is_correct' => true],
                            ['choice_text' => 'Une défense par vaccination', 'is_correct' => false],
                        ],
                        'explanation' => 'Larmes, salive et mucus contiennent des substances qui détruisent ou freinent les microbes : ce sont des défenses chimiques rapides, présentes dès la naissance.',
                    ],
                    [
                        'question' => 'Parmi ces signes, lequel ne fait pas partie des signes classiques d’une inflammation locale ?',
                        'choices' => [
                            ['choice_text' => 'La rougeur de la zone touchée', 'is_correct' => false],
                            ['choice_text' => 'Une peau très pâle et froide', 'is_correct' => true],
                            ['choice_text' => 'Le gonflement', 'is_correct' => false],
                            ['choice_text' => 'La chaleur', 'is_correct' => false],
                        ],
                        'explanation' => 'Rougeur, chaleur, gonflement et douleur sont les signes classiques d’une inflammation locale ; une peau pâle et froide n’en fait pas partie.',
                    ],
                    [
                        'question' => 'Youssef éternue souvent pendant un rhume. Qu’expulse-t-il ainsi ?',
                        'choices' => [
                            ['choice_text' => 'Des particules et des microbes des voies respiratoires', 'is_correct' => true],
                            ['choice_text' => 'Des globules rouges arrachés aux petits vaisseaux de la gorge', 'is_correct' => false],
                            ['choice_text' => 'Des enzymes de l’estomac', 'is_correct' => false],
                            ['choice_text' => 'Des anticorps déjà utilisés', 'is_correct' => false],
                        ],
                        'explanation' => 'Éternuer et tousser expulsent des particules, du mucus et des microbes des voies respiratoires : c’est une défense mécanique.',
                    ],
                    [
                        'question' => 'Un médecin prescrit un antibiotique pour une angine due à une bactérie. Contre quoi agit-il ?',
                        'choices' => [
                            ['choice_text' => 'Contre les virus de la grippe', 'is_correct' => false],
                            ['choice_text' => 'Contre le pollen', 'is_correct' => false],
                            ['choice_text' => 'Contre les bactéries', 'is_correct' => true],
                            ['choice_text' => 'Contre les cellules du corps', 'is_correct' => false],
                        ],
                        'explanation' => 'Un antibiotique détruit les bactéries ou freine leur multiplication ; il n’agit pas sur les virus ni sur les allergènes.',
                    ],
                ],
            ],
            [
                'title' => 'Antigènes et anticorps',
                'description' => 'Comprendre la reconnaissance des antigènes, le fonctionnement général des anticorps et la spécificité immunitaire.',
                'settings' => ['duration' => 20, 'passing_score' => 60],
                'questions' => [
                    [
                        'question' => 'À quoi un anticorps se fixe-t-il ?',
                        'choices' => [
                            ['choice_text' => 'À n’importe quelle molécule du plasma sanguin', 'is_correct' => false],
                            ['choice_text' => 'À l’oxygène transporté par le sang', 'is_correct' => false],
                            ['choice_text' => 'À l’eau contenue dans les cellules', 'is_correct' => false],
                            ['choice_text' => 'À un antigène dont la forme lui correspond', 'is_correct' => true],
                        ],
                        'explanation' => 'Un anticorps reconnaît la forme d’un antigène précis, comme une clé s’adapte à sa serrure.',
                    ],
                    [
                        'question' => 'Que peut faire un anticorps qui se fixe sur une toxine ?',
                        'choices' => [
                            ['choice_text' => 'La rendre plus dangereuse', 'is_correct' => false],
                            ['choice_text' => 'Bloquer son action sur le corps', 'is_correct' => true],
                            ['choice_text' => 'La transformer en nutriment', 'is_correct' => false],
                            ['choice_text' => 'La stocker dans les os', 'is_correct' => false],
                        ],
                        'explanation' => 'En se fixant sur une toxine, l’anticorps l’empêche d’agir sur les cellules : on dit qu’il la neutralise.',
                    ],
                    [
                        'question' => 'Un anticorps est une molécule de quel type ?',
                        'choices' => [
                            ['choice_text' => 'Une protéine en forme de Y', 'is_correct' => true],
                            ['choice_text' => 'Un lipide de réserve de graisse', 'is_correct' => false],
                            ['choice_text' => 'Un sucre simple venu des aliments', 'is_correct' => false],
                            ['choice_text' => 'Un sel minéral du sang', 'is_correct' => false],
                        ],
                        'explanation' => 'Un anticorps est une protéine, souvent représentée en forme de Y, fabriquée par les plasmocytes.',
                    ],
                    [
                        'question' => 'Karim a des anticorps contre la rougeole. Se fixeront-ils aussi au virus de la grippe ?',
                        'choices' => [
                            ['choice_text' => 'Oui, car les deux sont des virus', 'is_correct' => false],
                            ['choice_text' => 'Oui, car chaque anticorps repère n’importe quel microbe', 'is_correct' => false],
                            ['choice_text' => 'Non, chaque anticorps vise un antigène précis', 'is_correct' => true],
                            ['choice_text' => 'Non, car Karim n’a pas de lymphocytes B', 'is_correct' => false],
                        ],
                        'explanation' => 'Un anticorps est spécifique : il reconnaît la forme d’un antigène donné, pas celle d’un autre virus.',
                    ],
                    [
                        'question' => 'Un test de laboratoire utilise un anticorps qui reconnaît une protéine précise. Que permet-il de détecter ?',
                        'choices' => [
                            ['choice_text' => 'La quantité d’eau de l’échantillon', 'is_correct' => false],
                            ['choice_text' => 'La présence de cette protéine', 'is_correct' => true],
                            ['choice_text' => 'Le rythme du cœur du patient', 'is_correct' => false],
                            ['choice_text' => 'La couleur de la peau du patient', 'is_correct' => false],
                        ],
                        'explanation' => 'L’anticorps se fixe à sa protéine cible : si l’on observe une liaison, la protéine est présente.',
                    ],
                    [
                        'question' => 'Que veut dire neutraliser un virus avec des anticorps ?',
                        'choices' => [
                            ['choice_text' => 'Les anticorps aident le virus à entrer dans les cellules', 'is_correct' => false],
                            ['choice_text' => 'Les anticorps transforment le virus en cellule saine', 'is_correct' => false],
                            ['choice_text' => 'Les anticorps empêchent le sang de circuler vers le virus', 'is_correct' => false],
                            ['choice_text' => 'Les anticorps se fixent au virus et bloquent son entrée', 'is_correct' => true],
                        ],
                        'explanation' => 'En se collant au virus, les anticorps l’empêchent de s’accrocher aux cellules : c’est la neutralisation.',
                    ],
                    [
                        'question' => 'Un médecin dit que la réponse par anticorps est spécifique. Que veut-il dire ?',
                        'choices' => [
                            ['choice_text' => 'Chaque anticorps reconnaît un antigène précis', 'is_correct' => true],
                            ['choice_text' => 'Les anticorps reconnaissent les microbes de la même façon', 'is_correct' => false],
                            ['choice_text' => 'Les anticorps sont fabriqués par le foie', 'is_correct' => false],
                            ['choice_text' => 'Les anticorps sont identiques chez deux personnes', 'is_correct' => false],
                        ],
                        'explanation' => 'La spécificité signifie qu’un anticorps reconnaît une forme précise, pas n’importe quelle molécule.',
                    ],
                    [
                        'question' => 'Dans un test anti-X, plus l’échantillon contient d’antigène X, plus le signal est fort. L’échantillon A donne 50 et l’échantillon B donne 150. Que peut-on dire ?',
                        'choices' => [
                            ['choice_text' => 'A contient plus d’antigène X que B', 'is_correct' => false],
                            ['choice_text' => 'A et B contiennent la même quantité', 'is_correct' => false],
                            ['choice_text' => 'B contient trois fois plus d’antigène X', 'is_correct' => true],
                            ['choice_text' => 'B contient deux fois plus d’antigène X', 'is_correct' => false],
                        ],
                        'explanation' => 'Un signal plus fort indique plus d’antigène ; 150 ÷ 50 = 3, donc B en contient trois fois plus.',
                    ],
                    [
                        'question' => 'Les bébés reçoivent des anticorps de leur mère avant la naissance et par le lait. À quoi cela sert-il ?',
                        'choices' => [
                            ['choice_text' => 'À remplacer leurs propres globules blancs', 'is_correct' => false],
                            ['choice_text' => 'À faire grandir leurs os plus vite', 'is_correct' => false],
                            ['choice_text' => 'À guérir leurs allergies futures', 'is_correct' => false],
                            ['choice_text' => 'À les protéger pendant les premiers mois', 'is_correct' => true],
                        ],
                        'explanation' => 'Une partie des anticorps de la mère passe au bébé : ils le protègent en attendant que son propre système immunitaire se développe.',
                    ],
                    [
                        'question' => 'Où circulent les anticorps dans le corps ?',
                        'choices' => [
                            ['choice_text' => 'Dans l’air que l’on expire par la bouche', 'is_correct' => false],
                            ['choice_text' => 'Dans le sang et les liquides du corps', 'is_correct' => true],
                            ['choice_text' => 'Dans les cheveux et les ongles', 'is_correct' => false],
                            ['choice_text' => 'Dans la graisse sous la peau', 'is_correct' => false],
                        ],
                        'explanation' => 'Les anticorps circulent dans le sang et d’autres liquides du corps, ce qui leur permet de rejoindre les microbes.',
                    ],
                ],
            ],
            [
                'title' => 'Lymphocytes et mémoire immunitaire',
                'description' => 'Découvrir l’activation des lymphocytes, la coopération cellulaire et le principe de mémoire immunitaire.',
                'settings' => ['duration' => 20, 'passing_score' => 65],
                'questions' => [
                    [
                        'question' => 'Léa a eu la varicelle enfant et n’est pas retombée malade de la varicelle ensuite. Qu’est-ce qui l’explique ?',
                        'choices' => [
                            ['choice_text' => 'Ses globules rouges ont gardé le virus en mémoire', 'is_correct' => false],
                            ['choice_text' => 'Des cellules mémoires gardent le souvenir du virus', 'is_correct' => true],
                            ['choice_text' => 'Le virus de la varicelle est devenu inoffensif', 'is_correct' => false],
                            ['choice_text' => 'Sa peau fabrique en permanence des anticorps', 'is_correct' => false],
                        ],
                        'explanation' => 'Après la première infection, des cellules mémoires restent dans le corps ; elles reconnaissent vite le virus et déclenchent une réponse rapide.',
                    ],
                    [
                        'question' => 'Les lymphocytes T auxiliaires sont les chefs d’orchestre de la réponse immunitaire. Que font-ils ?',
                        'choices' => [
                            ['choice_text' => 'Ils fabriquent les plaquettes du sang', 'is_correct' => false],
                            ['choice_text' => 'Ils filtrent le sang à la place de la rate', 'is_correct' => false],
                            ['choice_text' => 'Ils coordonnent d’autres cellules immunitaires', 'is_correct' => true],
                            ['choice_text' => 'Ils digèrent les microbes dans l’estomac', 'is_correct' => false],
                        ],
                        'explanation' => 'Les lymphocytes T auxiliaires libèrent des signaux chimiques qui stimulent d’autres cellules de défense, comme les lymphocytes B.',
                    ],
                    [
                        'question' => 'Que peuvent faire les cellules mémoires après la fin d’une infection ?',
                        'choices' => [
                            ['choice_text' => 'Rester dans le corps pendant des années', 'is_correct' => true],
                            ['choice_text' => 'Disparaître en quelques heures', 'is_correct' => false],
                            ['choice_text' => 'Quitter le corps dans l’urine', 'is_correct' => false],
                            ['choice_text' => 'Se transformer en plaquettes', 'is_correct' => false],
                        ],
                        'explanation' => 'Les cellules mémoires peuvent persister des années et reconnaître rapidement le même antigène lors d’une nouvelle rencontre.',
                    ],
                    [
                        'question' => 'Quand un lymphocyte reconnaît son antigène, que peut-il faire ensuite ?',
                        'choices' => [
                            ['choice_text' => 'Se transformer en un globule rouge dans la moelle', 'is_correct' => false],
                            ['choice_text' => 'Quitter le corps par la peau', 'is_correct' => false],
                            ['choice_text' => 'Fabriquer de l’insuline', 'is_correct' => false],
                            ['choice_text' => 'Se multiplier en beaucoup de cellules identiques', 'is_correct' => true],
                        ],
                        'explanation' => 'Un lymphocyte activé se multiplie en un grand nombre de cellules identiques, dont certaines détruisent l’agent et d’autres gardent la mémoire.',
                    ],
                    [
                        'question' => 'Que contient un vaccin ?',
                        'choices' => [
                            ['choice_text' => 'Un microbe affaibli ou un fragment de microbe', 'is_correct' => true],
                            ['choice_text' => 'Un médicament qui tue les bactéries', 'is_correct' => false],
                            ['choice_text' => 'Des hormones qui stimulent la croissance', 'is_correct' => false],
                            ['choice_text' => 'Des globules blancs prélevés chez un donneur', 'is_correct' => false],
                        ],
                        'explanation' => 'Un vaccin contient un antigène inoffensif, comme un microbe affaibli ou inactivé ou un fragment de microbe ; il apprend au système immunitaire à reconnaître la cible.',
                    ],
                    [
                        'question' => 'Lors d’une première infection, combien de temps l’immunité adaptative met-elle à devenir efficace ?',
                        'choices' => [
                            ['choice_text' => 'Quelques minutes', 'is_correct' => false],
                            ['choice_text' => 'Environ une semaine', 'is_correct' => true],
                            ['choice_text' => 'Environ deux à trois mois', 'is_correct' => false],
                            ['choice_text' => 'Environ un an', 'is_correct' => false],
                        ],
                        'explanation' => 'La réponse adaptative demande à peu près une semaine pour se mettre en place la première fois ; la réponse secondaire est bien plus rapide grâce à la mémoire.',
                    ],
                    [
                        'question' => 'Une personne reçoit deux doses d’un vaccin, séparées dans le temps. À quoi sert la deuxième dose, ou rappel ?',
                        'choices' => [
                            ['choice_text' => 'À éliminer les anticorps déjà présents', 'is_correct' => false],
                            ['choice_text' => 'À réduire le nombre de lymphocytes', 'is_correct' => false],
                            ['choice_text' => 'À remplacer le premier vaccin par un antibiotique', 'is_correct' => false],
                            ['choice_text' => 'À renforcer la mémoire immunitaire', 'is_correct' => true],
                        ],
                        'explanation' => 'Une dose de rappel stimule de nouveau les cellules mémoires, ce qui renforce et prolonge la protection.',
                    ],
                    [
                        'question' => 'Lors d’une première rencontre avec un antigène, la réponse est lente. Comment l’appelle-t-on ?',
                        'choices' => [
                            ['choice_text' => 'La réponse primaire', 'is_correct' => true],
                            ['choice_text' => 'La réponse secondaire', 'is_correct' => false],
                            ['choice_text' => 'La réponse réflexe', 'is_correct' => false],
                            ['choice_text' => 'La réponse allergique', 'is_correct' => false],
                        ],
                        'explanation' => 'La réponse primaire est la première réponse à un antigène : elle est lente ; la réponse secondaire, qui suit, est plus rapide et plus forte.',
                    ],
                    [
                        'question' => 'Quelle paire de cellules forme l’immunité adaptative ?',
                        'choices' => [
                            ['choice_text' => 'Les neutrophiles et les macrophages', 'is_correct' => false],
                            ['choice_text' => 'Les lymphocytes B et T', 'is_correct' => true],
                            ['choice_text' => 'Les globules rouges et les plaquettes', 'is_correct' => false],
                            ['choice_text' => 'Les adipocytes et les neurones', 'is_correct' => false],
                        ],
                        'explanation' => 'L’immunité adaptative repose sur les lymphocytes B, qui fabriquent les anticorps, et sur les lymphocytes T, qui coordonnent ou détruisent.',
                    ],
                    [
                        'question' => 'Après une première rencontre avec un microbe, un patient produit 100 unités d’anticorps. Après une seconde rencontre, il en produit 1 000. Combien de fois plus ?',
                        'choices' => [
                            ['choice_text' => '9 fois plus', 'is_correct' => false],
                            ['choice_text' => '100 fois plus', 'is_correct' => false],
                            ['choice_text' => '10 fois plus', 'is_correct' => true],
                            ['choice_text' => '900 fois plus', 'is_correct' => false],
                        ],
                        'explanation' => '1 000 ÷ 100 = 10 : la réponse secondaire produit dix fois plus d’anticorps.',
                    ],
                ],
            ],
            [
                'title' => 'Vaccination et protection collective',
                'description' => 'Relier la vaccination à la mémoire immunitaire, aux doses de rappel et à la réduction de la transmission.',
                'settings' => ['duration' => 25, 'passing_score' => 65],
                'questions' => [
                    [
                        'question' => 'À quoi sert un vaccin ?',
                        'choices' => [
                            ['choice_text' => 'À soigner une infection déjà installée', 'is_correct' => false],
                            ['choice_text' => 'À fabriquer des anticorps à la place du corps', 'is_correct' => false],
                            ['choice_text' => 'À renforcer les os et les muscles', 'is_correct' => false],
                            ['choice_text' => 'À préparer le corps à reconnaître un microbe', 'is_correct' => true],
                        ],
                        'explanation' => 'Un vaccin entraîne à l’avance le système immunitaire à reconnaître un microbe précis ; il prévient plus qu’il ne soigne.',
                    ],
                    [
                        'question' => 'Hamza est vacciné contre la grippe mais attrape quand même une grippe légère. Comment l’expliquer ?',
                        'choices' => [
                            ['choice_text' => 'La protection d’un vaccin est élevée mais pas complète', 'is_correct' => true],
                            ['choice_text' => 'Le vaccin a supprimé ses défenses naturelles contre la grippe', 'is_correct' => false],
                            ['choice_text' => 'Le vaccin agit après l’infection', 'is_correct' => false],
                            ['choice_text' => 'Le vaccin a rendu le virus plus fort', 'is_correct' => false],
                        ],
                        'explanation' => 'Un vaccin réduit fortement le risque d’être infecté ou malade, mais la protection n’est pas complète ; elle dépend du vaccin, de la personne et du moment.',
                    ],
                    [
                        'question' => 'Quelle maladie a été éradiquée dans le monde grâce à la vaccination ?',
                        'choices' => [
                            ['choice_text' => 'La grippe', 'is_correct' => false],
                            ['choice_text' => 'La rougeole', 'is_correct' => false],
                            ['choice_text' => 'La variole', 'is_correct' => true],
                            ['choice_text' => 'Le rhume', 'is_correct' => false],
                        ],
                        'explanation' => 'La variole a été déclarée éradiquée en 1980 grâce à une vaccination à grande échelle ; la grippe et la rougeole circulent encore.',
                    ],
                    [
                        'question' => 'Quand beaucoup de personnes sont vaccinées, un microbe se transmet moins. Comment l’expliquer ?',
                        'choices' => [
                            ['choice_text' => 'Les microbes meurent d’eux-mêmes dans l’air ambiant', 'is_correct' => false],
                            ['choice_text' => 'Il reste moins de personnes chez qui il peut se propager', 'is_correct' => true],
                            ['choice_text' => 'Les vaccins désinfectent l’air des villes', 'is_correct' => false],
                            ['choice_text' => 'Les non-vaccinés deviennent immunisés en côtoyant les vaccinés', 'is_correct' => false],
                        ],
                        'explanation' => 'Quand beaucoup de personnes sont protégées, le microbe trouve moins d’hôtes sensibles pour se propager : on parle de protection collective.',
                    ],
                    [
                        'question' => 'Une personne de 80 ans et une de 20 ans reçoivent le même vaccin. Que peut-on dire de leur réponse ?',
                        'choices' => [
                            ['choice_text' => 'Elle peut différer, car l’âge influence les défenses', 'is_correct' => true],
                            ['choice_text' => 'Elle est identique chez les deux personnes', 'is_correct' => false],
                            ['choice_text' => 'Elle est plus forte chez la personne de 80 ans, car elle a vécu plus longtemps', 'is_correct' => false],
                            ['choice_text' => 'Elle ne se produit pas chez les personnes âgées', 'is_correct' => false],
                        ],
                        'explanation' => 'La réponse à un vaccin varie avec l’âge, l’état de santé et le type de vaccin ; elle est souvent moins forte chez les personnes très âgées, d’où les rappels.',
                    ],
                    [
                        'question' => 'À quoi sert le calendrier vaccinal ?',
                        'choices' => [
                            ['choice_text' => 'À suivre la croissance de l’enfant', 'is_correct' => false],
                            ['choice_text' => 'À mesurer le nombre de globules blancs', 'is_correct' => false],
                            ['choice_text' => 'À prévoir les allergies de l’enfant', 'is_correct' => false],
                            ['choice_text' => 'À indiquer à quel âge faire chaque vaccin', 'is_correct' => true],
                        ],
                        'explanation' => 'Le calendrier vaccinal indique à quel âge faire chaque vaccin et chaque rappel pour être bien protégé.',
                    ],
                    [
                        'question' => 'Après un vaccin, Sara a un bras rouge et un peu douloureux. Que traduit ce signe courant ?',
                        'choices' => [
                            ['choice_text' => 'Un échec du vaccin, qui n’a pas fonctionné du tout', 'is_correct' => false],
                            ['choice_text' => 'Une réaction locale du système immunitaire', 'is_correct' => true],
                            ['choice_text' => 'Une infection grave du bras', 'is_correct' => false],
                            ['choice_text' => 'Un manque de globules rouges', 'is_correct' => false],
                        ],
                        'explanation' => 'Rougeur et douleur au point d’injection sont des signes courants d’une réaction immunitaire locale ; un symptôme inhabituel ou intense justifie de consulter.',
                    ],
                    [
                        'question' => 'Un bébé de deux mois est trop jeune pour certains vaccins. Comment peut-il être protégé ?',
                        'choices' => [
                            ['choice_text' => 'En prenant des antibiotiques chaque mois', 'is_correct' => false],
                            ['choice_text' => 'En attrapant la maladie le plus tôt possible', 'is_correct' => false],
                            ['choice_text' => 'Si les personnes de son entourage sont vaccinées', 'is_correct' => true],
                            ['choice_text' => 'En portant des vêtements plus chauds', 'is_correct' => false],
                        ],
                        'explanation' => 'Un bébé trop jeune pour être vacciné est protégé indirectement quand son entourage est vacciné : le microbe circule moins autour de lui.',
                    ],
                    [
                        'question' => 'Certains vaccins protègent très longtemps, d’autres demandent des rappels. Qu’est-ce que cela montre ?',
                        'choices' => [
                            ['choice_text' => 'La mémoire immunitaire disparaît le lendemain de l’injection', 'is_correct' => false],
                            ['choice_text' => 'Les rappels n’ont pas d’effet', 'is_correct' => false],
                            ['choice_text' => 'Les microbes mutent au même rythme', 'is_correct' => false],
                            ['choice_text' => 'La durée de la protection varie selon le vaccin', 'is_correct' => true],
                        ],
                        'explanation' => 'Selon le microbe et le vaccin, la mémoire dure quelques années ou toute la vie ; c’est pourquoi certains vaccins nécessitent des rappels.',
                    ],
                    [
                        'question' => 'Dans un groupe de 100 personnes, 80 sont protégées contre un microbe. Quelle fraction est protégée ?',
                        'choices' => [
                            ['choice_text' => '80 %', 'is_correct' => true],
                            ['choice_text' => '20 %', 'is_correct' => false],
                            ['choice_text' => '8 %', 'is_correct' => false],
                            ['choice_text' => '180 %', 'is_correct' => false],
                        ],
                        'explanation' => '80 ÷ 100 × 100 = 80 % de la population est protégée.',
                    ],
                ],
            ],
            [
                'title' => 'Allergies et réactions immunitaires',
                'description' => 'Comprendre simplement les allergies, l’hypersensibilité immédiate et la différence entre allergène et agent infectieux.',
                'settings' => ['duration' => 25, 'passing_score' => 65],
                'questions' => [
                    [
                        'question' => 'Qu’est-ce qu’une allergie ?',
                        'choices' => [
                            ['choice_text' => 'Une infection causée par une plante', 'is_correct' => false],
                            ['choice_text' => 'Une absence de défenses immunitaires depuis la naissance', 'is_correct' => false],
                            ['choice_text' => 'Une réaction excessive à une substance inoffensive', 'is_correct' => true],
                            ['choice_text' => 'Une carence en vitamines', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans une allergie, le système immunitaire réagit trop fort à une substance inoffensive, comme un pollen, un aliment ou des acariens.',
                    ],
                    [
                        'question' => 'Pour une personne allergique, le pollen joue le rôle d’un :',
                        'choices' => [
                            ['choice_text' => 'Anticorps', 'is_correct' => false],
                            ['choice_text' => 'Allergène', 'is_correct' => true],
                            ['choice_text' => 'Antibiotique', 'is_correct' => false],
                            ['choice_text' => 'Globule blanc', 'is_correct' => false],
                        ],
                        'explanation' => 'Le pollen est un allergène : une substance qui déclenche une réaction allergique chez les personnes sensibilisées.',
                    ],
                    [
                        'question' => 'Comment un médecin peut-il repérer à quoi une personne est allergique ?',
                        'choices' => [
                            ['choice_text' => 'En mesurant son rythme cardiaque au repos', 'is_correct' => false],
                            ['choice_text' => 'En vérifiant la taille de ses organes', 'is_correct' => false],
                            ['choice_text' => 'En pesant la personne avant et après chaque repas de la journée', 'is_correct' => false],
                            ['choice_text' => 'Avec des tests sur la peau ou des analyses de sang', 'is_correct' => true],
                        ],
                        'explanation' => 'Des tests cutanés ou des analyses de sang montrent à quels allergènes une personne est sensibilisée.',
                    ],
                    [
                        'question' => 'Chaque printemps, Imane éternue et a le nez qui coule dès que le pollen est dans l’air. Quelle situation est la plus probable ?',
                        'choices' => [
                            ['choice_text' => 'Une rhinite allergique, ou rhume des foins', 'is_correct' => true],
                            ['choice_text' => 'Un rhume viral banal qui revient au même moment chaque année', 'is_correct' => false],
                            ['choice_text' => 'Une infection bactérienne du nez', 'is_correct' => false],
                            ['choice_text' => 'Une carence en vitamines', 'is_correct' => false],
                        ],
                        'explanation' => 'Des éternuements répétés lors de l’exposition au pollen évoquent une rhinite allergique, ou rhume des foins.',
                    ],
                    [
                        'question' => 'Quelle différence existe entre un allergène, comme le pollen, et un agent infectieux, comme une bactérie ?',
                        'choices' => [
                            ['choice_text' => 'Le pollen est un microbe qui infecte les poumons', 'is_correct' => false],
                            ['choice_text' => 'Le microbe se multiplie dans le corps, pas le pollen', 'is_correct' => true],
                            ['choice_text' => 'Les deux se multiplient dans les cellules du corps', 'is_correct' => false],
                            ['choice_text' => 'La bactérie est un allergène et le pollen un anticorps', 'is_correct' => false],
                        ],
                        'explanation' => 'Une bactérie est un microbe vivant qui se multiplie dans l’organisme ; le pollen ne se multiplie pas, il déclenche une réaction chez les personnes sensibilisées.',
                    ],
                    [
                        'question' => 'À quoi sert un antihistaminique ?',
                        'choices' => [
                            ['choice_text' => 'À bloquer l’histamine et calmer les symptômes', 'is_correct' => true],
                            ['choice_text' => 'À tuer les bactéries responsables de l’angine', 'is_correct' => false],
                            ['choice_text' => 'À fabriquer plus d’anticorps contre le pollen', 'is_correct' => false],
                            ['choice_text' => 'À augmenter la quantité d’histamine libérée', 'is_correct' => false],
                        ],
                        'explanation' => 'Un antihistaminique se place sur les récepteurs de l’histamine et réduit ses effets : démangeaisons, écoulement du nez, éternuements.',
                    ],
                    [
                        'question' => 'Quand une réaction allergique devient-elle une urgence ?',
                        'choices' => [
                            ['choice_text' => 'Quand elle provoque quelques éternuements', 'is_correct' => false],
                            ['choice_text' => 'Quand elle fait un peu larmoyer les yeux', 'is_correct' => false],
                            ['choice_text' => 'Quand elle gêne la respiration ou la circulation', 'is_correct' => true],
                            ['choice_text' => 'Quand elle donne une légère démangeaison', 'is_correct' => false],
                        ],
                        'explanation' => 'Une gêne respiratoire, un gonflement du visage ou un malaise sont des signes d’allergie grave : il faut appeler les secours.',
                    ],
                    [
                        'question' => 'Quel exemple est un allergène alimentaire ?',
                        'choices' => [
                            ['choice_text' => 'L’eau du robinet', 'is_correct' => false],
                            ['choice_text' => 'Le sel de table', 'is_correct' => false],
                            ['choice_text' => 'Le glucose du sang', 'is_correct' => false],
                            ['choice_text' => 'Une protéine de l’arachide', 'is_correct' => true],
                        ],
                        'explanation' => 'Les allergènes alimentaires sont le plus souvent des protéines, comme celles de l’arachide, du lait ou de l’œuf.',
                    ],
                    [
                        'question' => 'Hamza mange de l’arachide sans problème puis, quelques mois plus tard, fait une réaction allergique. Qu’a-t-il pu se passer avant ?',
                        'choices' => [
                            ['choice_text' => 'Une sensibilisation au cours de contacts précédents', 'is_correct' => true],
                            ['choice_text' => 'Une carence en fer dans l’alimentation de Hamza depuis des mois', 'is_correct' => false],
                            ['choice_text' => 'Une baisse du nombre de globules rouges', 'is_correct' => false],
                            ['choice_text' => 'Une perte de globules blancs au repos', 'is_correct' => false],
                        ],
                        'explanation' => 'Un premier contact peut sensibiliser le système immunitaire sans symptômes ; lors d’un contact suivant, la réaction se déclenche.',
                    ],
                    [
                        'question' => 'Quelle phrase distingue une irritation d’une allergie ?',
                        'choices' => [
                            ['choice_text' => 'L’irritation met en jeu des anticorps, l’allergie non', 'is_correct' => false],
                            ['choice_text' => 'Une irritation se transmet d’une personne à l’autre', 'is_correct' => false],
                            ['choice_text' => 'Une allergie est une infection de la peau', 'is_correct' => false],
                            ['choice_text' => 'L’allergie implique l’immunité, l’irritation non', 'is_correct' => true],
                        ],
                        'explanation' => 'Une irritation vient d’un agent qui abîme directement la peau ; une allergie vient d’une réponse du système immunitaire.',
                    ],
                ],
            ],
            [
                'title' => 'Auto-immunité et tolérance',
                'description' => 'Introduire la notion de tolérance immunitaire et comprendre ce qui caractérise les maladies auto-immunes.',
                'settings' => ['duration' => 25, 'passing_score' => 70],
                'questions' => [
                    [
                        'question' => 'Que signifie la tolérance immunitaire ?',
                        'choices' => [
                            ['choice_text' => 'Le système immunitaire épargne les tissus du corps', 'is_correct' => true],
                            ['choice_text' => 'Le système immunitaire ne contient plus de cellules', 'is_correct' => false],
                            ['choice_text' => 'Le système immunitaire détruit n’importe quelle molécule', 'is_correct' => false],
                            ['choice_text' => 'Le système immunitaire provoque de la fièvre en continu', 'is_correct' => false],
                        ],
                        'explanation' => 'La tolérance permet au système immunitaire de distinguer le soi du non-soi et de ne pas attaquer les propres tissus.',
                    ],
                    [
                        'question' => 'Qu’est-ce qui caractérise une maladie auto-immune ?',
                        'choices' => [
                            ['choice_text' => 'Une infection par un virus que l’on ne soigne pas', 'is_correct' => false],
                            ['choice_text' => 'Une absence de globules blancs dans le sang depuis la naissance', 'is_correct' => false],
                            ['choice_text' => 'Une carence en vitamines', 'is_correct' => false],
                            ['choice_text' => 'Le système immunitaire attaque des tissus du corps', 'is_correct' => true],
                        ],
                        'explanation' => 'Dans une maladie auto-immune, une perte de tolérance conduit le système immunitaire à cibler des constituants du corps.',
                    ],
                    [
                        'question' => 'Dans la polyarthrite rhumatoïde, quelles structures sont attaquées par le système immunitaire ?',
                        'choices' => [
                            ['choice_text' => 'Les poumons et les bronches', 'is_correct' => false],
                            ['choice_text' => 'Les articulations', 'is_correct' => true],
                            ['choice_text' => 'Les reins et la vessie', 'is_correct' => false],
                            ['choice_text' => 'L’estomac et l’intestin', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans la polyarthrite rhumatoïde, le système immunitaire attaque l’enveloppe des articulations, ce qui les rend douloureuses et gonflées.',
                    ],
                    [
                        'question' => 'Quelle maladie est auto-immune ?',
                        'choices' => [
                            ['choice_text' => 'La grippe saisonnière', 'is_correct' => false],
                            ['choice_text' => 'L’anémie par manque de fer', 'is_correct' => false],
                            ['choice_text' => 'Le diabète de type 1', 'is_correct' => true],
                            ['choice_text' => 'La déshydratation', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans le diabète de type 1, le système immunitaire détruit les cellules du pancréas qui fabriquent l’insuline.',
                    ],
                    [
                        'question' => 'Dans certaines maladies auto-immunes, des anticorps se fixent sur quoi ?',
                        'choices' => [
                            ['choice_text' => 'Sur des molécules du propre corps', 'is_correct' => true],
                            ['choice_text' => 'Sur des microbes de l’intestin', 'is_correct' => false],
                            ['choice_text' => 'Sur des aliments avalés', 'is_correct' => false],
                            ['choice_text' => 'Sur des grains de pollen', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans ces maladies, des anticorps appelés auto-anticorps reconnaissent à tort des molécules du propre corps.',
                    ],
                    [
                        'question' => 'Si la tolérance ne fonctionne plus, que peut-il se passer ?',
                        'choices' => [
                            ['choice_text' => 'Les globules rouges se mettent à attaquer les microbes', 'is_correct' => false],
                            ['choice_text' => 'Les lymphocytes disparaissent du sang', 'is_correct' => false],
                            ['choice_text' => 'Des lymphocytes attaquent des tissus sains', 'is_correct' => true],
                            ['choice_text' => 'Les microbes cessent de se multiplier', 'is_correct' => false],
                        ],
                        'explanation' => 'Quand la tolérance se perd, des lymphocytes peuvent s’activer contre des tissus sains, ce qui est à l’origine des maladies auto-immunes.',
                    ],
                    [
                        'question' => 'Une maladie auto-immune est-elle contagieuse ?',
                        'choices' => [
                            ['choice_text' => 'Oui, elle se transmet par l’air comme la grippe', 'is_correct' => false],
                            ['choice_text' => 'Oui, elle se transmet par la peau lors d’un contact', 'is_correct' => false],
                            ['choice_text' => 'Oui, elle se transmet par les repas en famille', 'is_correct' => false],
                            ['choice_text' => 'Non, elle ne se transmet pas comme une infection', 'is_correct' => true],
                        ],
                        'explanation' => 'Une maladie auto-immune vient d’une réponse du système immunitaire contre le corps lui-même, pas d’un microbe : elle n’est pas contagieuse.',
                    ],
                    [
                        'question' => 'Une personne atteinte d’une maladie auto-immune a-t-elle un système immunitaire absent ?',
                        'choices' => [
                            ['choice_text' => 'Oui, elle ne possède pas de globules blancs', 'is_correct' => false],
                            ['choice_text' => 'Non, il est actif mais dirigé contre le corps', 'is_correct' => true],
                            ['choice_text' => 'Oui, il s’est arrêté de fonctionner', 'is_correct' => false],
                            ['choice_text' => 'Non, il est remplacé par les hormones', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans l’auto-immunité, le système immunitaire fonctionne, mais sa cible est mauvaise : il s’en prend à des tissus sains.',
                    ],
                    [
                        'question' => 'Qu’appelle-t-on le soi en immunologie ?',
                        'choices' => [
                            ['choice_text' => 'L’ensemble des microbes de la peau', 'is_correct' => false],
                            ['choice_text' => 'Les anticorps présents dans le sang', 'is_correct' => false],
                            ['choice_text' => 'Les molécules et cellules normales du corps', 'is_correct' => true],
                            ['choice_text' => 'Les cellules d’une autre personne', 'is_correct' => false],
                        ],
                        'explanation' => 'Le soi regroupe les molécules et cellules normales de l’organisme ; le non-soi désigne ce qui est étranger, comme un microbe.',
                    ],
                    [
                        'question' => 'Une prise de sang révèle un auto-anticorps chez Nadia. Que peut-on affirmer ?',
                        'choices' => [
                            ['choice_text' => 'Elle est atteinte d’une maladie auto-immune déjà confirmée par son médecin', 'is_correct' => false],
                            ['choice_text' => 'Son système immunitaire reconnaît une molécule de son corps', 'is_correct' => true],
                            ['choice_text' => 'Elle a une infection bactérienne en cours', 'is_correct' => false],
                            ['choice_text' => 'Elle ne possède plus de défenses immunitaires', 'is_correct' => false],
                        ],
                        'explanation' => 'Un auto-anticorps montre que le système immunitaire reconnaît une molécule du corps ; il faut d’autres examens et l’avis d’un médecin pour poser un diagnostic.',
                    ],
                ],
            ],
            [
                'title' => 'Immunologie appliquée et révision',
                'description' => 'Réinvestir les notions fondamentales dans des situations simples de diagnostic, prévention et raisonnement immunologique.',
                'settings' => ['duration' => 20, 'passing_score' => 70],
                'questions' => [
                    [
                        'question' => 'Une bactérie entre par une blessure. Quelles réponses l’organisme mobilise-t-il ?',
                        'choices' => [
                            ['choice_text' => 'Des plaquettes qui l’avalent, puis de l’insuline', 'is_correct' => false],
                            ['choice_text' => 'Des globules rouges qui l’avalent, puis de la bile', 'is_correct' => false],
                            ['choice_text' => 'Des neutrophiles qui l’avalent, puis des anticorps', 'is_correct' => true],
                            ['choice_text' => 'Des cellules du foie qui l’avalent, puis des hormones', 'is_correct' => false],
                        ],
                        'explanation' => 'Les neutrophiles réagissent vite en avalant la bactérie (immunité innée) ; ensuite des anticorps spécifiques sont fabriqués (immunité adaptative).',
                    ],
                    [
                        'question' => 'Chez Sara, une analyse de sang détecte des anticorps dirigés contre l’antigène X. Que cela montre-t-il ?',
                        'choices' => [
                            ['choice_text' => 'Son système immunitaire a déjà répondu à X', 'is_correct' => true],
                            ['choice_text' => 'Elle est malade à ce moment précis', 'is_correct' => false],
                            ['choice_text' => 'Elle ne produit plus de lymphocytes B', 'is_correct' => false],
                            ['choice_text' => 'Ses anticorps sont incapables de se fixer', 'is_correct' => false],
                        ],
                        'explanation' => 'Des anticorps contre X prouvent que le système immunitaire a rencontré X, par une infection passée ou un vaccin, mais pas à quel moment.',
                    ],
                    [
                        'question' => 'Quel geste aide à limiter la transmission d’un microbe respiratoire ?',
                        'choices' => [
                            ['choice_text' => 'Partager sa bouteille d’eau', 'is_correct' => false],
                            ['choice_text' => 'Garder les fenêtres fermées en permanence', 'is_correct' => false],
                            ['choice_text' => 'Prendre un antibiotique contre un virus', 'is_correct' => false],
                            ['choice_text' => 'Se couvrir la bouche en toussant', 'is_correct' => true],
                        ],
                        'explanation' => 'Se couvrir la bouche et se laver les mains limite la transmission ; un antibiotique n’agit pas sur les virus.',
                    ],
                    [
                        'question' => 'Lequel est un mécanisme de l’immunité adaptative ?',
                        'choices' => [
                            ['choice_text' => 'La barrière de la peau contre les microbes', 'is_correct' => false],
                            ['choice_text' => 'La production d’anticorps contre un antigène précis', 'is_correct' => true],
                            ['choice_text' => 'L’acidité du suc de l’estomac contre les microbes avalés', 'is_correct' => false],
                            ['choice_text' => 'Le mucus des voies respiratoires', 'is_correct' => false],
                        ],
                        'explanation' => 'Fabriquer des anticorps dirigés contre un antigène précis relève de l’immunité adaptative ; la peau, l’acidité de l’estomac et le mucus relèvent de l’immunité innée.',
                    ],
                    [
                        'question' => 'Quel ordre va de la défense la plus rapide à la plus lente ?',
                        'choices' => [
                            ['choice_text' => 'Peau, neutrophiles, anticorps spécifiques', 'is_correct' => true],
                            ['choice_text' => 'Anticorps spécifiques, neutrophiles, peau', 'is_correct' => false],
                            ['choice_text' => 'Neutrophiles, anticorps spécifiques, peau', 'is_correct' => false],
                            ['choice_text' => 'Peau, anticorps spécifiques, neutrophiles', 'is_correct' => false],
                        ],
                        'explanation' => 'La peau bloque immédiatement, les neutrophiles arrivent en quelques heures, et les anticorps spécifiques demandent environ une semaine.',
                    ],
                    [
                        'question' => 'Quelle phrase associe correctement un trouble à son mécanisme ?',
                        'choices' => [
                            ['choice_text' => 'Rhume des foins : infection bactérienne du nez', 'is_correct' => false],
                            ['choice_text' => 'Maladie auto-immune : microbe qui attaque les tissus du corps', 'is_correct' => false],
                            ['choice_text' => 'Grippe : réaction excessive au pollen', 'is_correct' => false],
                            ['choice_text' => 'Allergie : réaction trop forte à une substance inoffensive', 'is_correct' => true],
                        ],
                        'explanation' => 'Une allergie est une réponse trop forte à une substance inoffensive ; une maladie auto-immune vise les tissus du corps ; une infection vient d’un microbe.',
                    ],
                    [
                        'question' => 'Dans une ville, 200 personnes sur 800 testées ont des anticorps contre le microbe X. Quel pourcentage cela représente-t-il ?',
                        'choices' => [
                            ['choice_text' => '25 %', 'is_correct' => true],
                            ['choice_text' => '4 %', 'is_correct' => false],
                            ['choice_text' => '20 %', 'is_correct' => false],
                            ['choice_text' => '40 %', 'is_correct' => false],
                        ],
                        'explanation' => '200 ÷ 800 = 0,25, soit 25 %.',
                    ],
                    [
                        'question' => 'Avant un rappel, Sara a 120 unités d’anticorps ; après, elle en a 180. De combien ont-elles augmenté ?',
                        'choices' => [
                            ['choice_text' => '40 unités', 'is_correct' => false],
                            ['choice_text' => '300 unités', 'is_correct' => false],
                            ['choice_text' => '60 unités', 'is_correct' => true],
                            ['choice_text' => '50 unités', 'is_correct' => false],
                        ],
                        'explanation' => '180 − 120 = 60 unités.',
                    ],
                    [
                        'question' => 'Quelle suite décrit une réponse adaptative ?',
                        'choices' => [
                            ['choice_text' => 'Multiplication → reconnaissance de l’antigène → anticorps et mémoire', 'is_correct' => false],
                            ['choice_text' => 'Anticorps → reconnaissance de l’antigène → multiplication', 'is_correct' => false],
                            ['choice_text' => 'Mémoire → anticorps → reconnaissance de l’antigène', 'is_correct' => false],
                            ['choice_text' => 'Reconnaissance de l’antigène → multiplication → anticorps et mémoire', 'is_correct' => true],
                        ],
                        'explanation' => 'Un lymphocyte reconnaît d’abord son antigène, se multiplie, puis donne des cellules qui sécrètent des anticorps et des cellules mémoires.',
                    ],
                    [
                        'question' => 'Hamza éternue au contact de poils de chat, sans fièvre ni microbe. De quoi s’agit-il probablement ?',
                        'choices' => [
                            ['choice_text' => 'D’une allergie', 'is_correct' => true],
                            ['choice_text' => 'D’une infection bactérienne', 'is_correct' => false],
                            ['choice_text' => 'D’une maladie auto-immune', 'is_correct' => false],
                            ['choice_text' => 'D’une carence en vitamines', 'is_correct' => false],
                        ],
                        'explanation' => 'Sans fièvre ni microbe, des éternuements au contact d’un animal évoquent une allergie.',
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