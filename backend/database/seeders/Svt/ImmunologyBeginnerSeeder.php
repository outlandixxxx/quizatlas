<?php

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
                        'question' => 'Quel est le rôle général du système immunitaire ?',
                        'choices' => [
                            ['choice_text' => 'Défendre l’organisme contre des agents étrangers ou anormaux', 'is_correct' => true],
                            ['choice_text' => 'Produire uniquement des hormones', 'is_correct' => false],
                            ['choice_text' => 'Transporter le dioxygène vers les muscles', 'is_correct' => false],
                            ['choice_text' => 'Digérer tous les aliments', 'is_correct' => false],
                        ],
                        'explanation' => 'Le système immunitaire reconnaît et combat notamment les microbes et les cellules anormales. Il participe ainsi à la protection de l’organisme.',
                    ],
                    [
                        'question' => 'Laquelle constitue une barrière physique de première ligne ?',
                        'choices' => [
                            ['choice_text' => 'La peau', 'is_correct' => true],
                            ['choice_text' => 'Les lymphocytes B', 'is_correct' => false],
                            ['choice_text' => 'Les anticorps circulants', 'is_correct' => false],
                            ['choice_text' => 'La moelle épinière', 'is_correct' => false],
                        ],
                        'explanation' => 'La peau limite l’entrée des agents infectieux. Elle agit avant même l’activation de nombreuses réponses immunitaires internes.',
                    ],
                    [
                        'question' => 'Un élève se coupe légèrement au doigt. Quel mécanisme local aide rapidement à limiter l’entrée des microbes ?',
                        'choices' => [
                            ['choice_text' => 'La coagulation et la fermeture de la plaie', 'is_correct' => true],
                            ['choice_text' => 'La production de globules rouges', 'is_correct' => false],
                            ['choice_text' => 'La digestion des protéines alimentaires', 'is_correct' => false],
                            ['choice_text' => 'La contraction du cœur', 'is_correct' => false],
                        ],
                        'explanation' => 'La formation d’un caillot et la réparation du tissu réduisent l’accès des microbes aux tissus internes.',
                    ],
                    [
                        'question' => 'Quelle cellule appartient aux globules blancs ?',
                        'choices' => [
                            ['choice_text' => 'Le leucocyte', 'is_correct' => true],
                            ['choice_text' => 'L’érythrocyte', 'is_correct' => false],
                            ['choice_text' => 'La plaquette', 'is_correct' => false],
                            ['choice_text' => 'L’adipocyte', 'is_correct' => false],
                        ],
                        'explanation' => 'Les leucocytes, ou globules blancs, regroupent plusieurs cellules spécialisées de la défense immunitaire.',
                    ],
                    [
                        'question' => 'Pourquoi le mucus des voies respiratoires peut-il contribuer à la défense ?',
                        'choices' => [
                            ['choice_text' => 'Il piège une partie des particules et des microbes inhalés', 'is_correct' => true],
                            ['choice_text' => 'Il remplace les globules rouges', 'is_correct' => false],
                            ['choice_text' => 'Il transforme le dioxygène en glucose', 'is_correct' => false],
                            ['choice_text' => 'Il empêche toute respiration', 'is_correct' => false],
                        ],
                        'explanation' => 'Le mucus peut retenir des particules. Les mouvements des cils respiratoires contribuent ensuite à leur évacuation.',
                    ],
                    [
                        'question' => 'Quel terme désigne une substance reconnue par le système immunitaire et pouvant déclencher une réponse spécifique ?',
                        'choices' => [
                            ['choice_text' => 'Antigène', 'is_correct' => true],
                            ['choice_text' => 'Nutriment', 'is_correct' => false],
                            ['choice_text' => 'Enzyme', 'is_correct' => false],
                            ['choice_text' => 'Neurone', 'is_correct' => false],
                        ],
                        'explanation' => 'Un antigène est une structure que le système immunitaire peut reconnaître. Certaines réponses immunitaires sont dirigées spécifiquement contre lui.',
                    ],
                    [
                        'question' => 'Les macrophages sont surtout connus pour quelle fonction ?',
                        'choices' => [
                            ['choice_text' => 'La phagocytose de particules et de microbes', 'is_correct' => true],
                            ['choice_text' => 'La production de bile', 'is_correct' => false],
                            ['choice_text' => 'La fabrication de l’insuline', 'is_correct' => false],
                            ['choice_text' => 'La conduction des influx nerveux', 'is_correct' => false],
                        ],
                        'explanation' => 'Les macrophages sont des cellules capables d’englober et de digérer des éléments étrangers ou des débris cellulaires.',
                    ],
                    [
                        'question' => 'Laquelle décrit le mieux l’inflammation ?',
                        'choices' => [
                            ['choice_text' => 'Une réaction locale qui facilite la défense et la réparation', 'is_correct' => true],
                            ['choice_text' => 'Une absence totale de circulation sanguine', 'is_correct' => false],
                            ['choice_text' => 'Une destruction volontaire de tous les globules rouges', 'is_correct' => false],
                            ['choice_text' => 'Une production permanente de chaleur sans cause', 'is_correct' => false],
                        ],
                        'explanation' => 'L’inflammation augmente notamment l’arrivée de sang et de cellules immunitaires dans une zone agressée, ce qui aide à la défense et à la réparation.',
                    ],
                    [
                        'question' => 'Quel signe est typiquement associé à une inflammation locale ?',
                        'choices' => [
                            ['choice_text' => 'Rougeur et chaleur', 'is_correct' => true],
                            ['choice_text' => 'Disparition immédiate du sang', 'is_correct' => false],
                            ['choice_text' => 'Baisse systématique de la température corporelle à zéro degré', 'is_correct' => false],
                            ['choice_text' => 'Perte de tous les cheveux', 'is_correct' => false],
                        ],
                        'explanation' => 'La vasodilatation locale peut provoquer rougeur et chaleur. Un gonflement et une douleur peuvent aussi apparaître.',
                    ],
                    [
                        'question' => 'Quelle différence générale oppose immunité innée et immunité adaptative ?',
                        'choices' => [
                            ['choice_text' => 'L’innée agit rapidement et de façon générale, l’adaptative est plus spécifique', 'is_correct' => true],
                            ['choice_text' => 'L’innée existe seulement après vaccination', 'is_correct' => false],
                            ['choice_text' => 'L’adaptative ne fait intervenir aucune cellule', 'is_correct' => false],
                            ['choice_text' => 'Les deux sont strictement identiques', 'is_correct' => false],
                        ],
                        'explanation' => 'L’immunité innée constitue une défense rapide et largement générale. L’immunité adaptative repose sur une reconnaissance plus ciblée des antigènes.',
                    ],
                ],
            ],
            [
                'title' => 'Cellules et organes immunitaires',
                'description' => 'Identifier les principaux acteurs cellulaires et les organes où les cellules immunitaires se développent ou circulent.',
                'settings' => ['duration' => 15, 'passing_score' => 55],
                'questions' => [
                    [
                        'question' => 'Quel organe est le principal site de maturation des lymphocytes T ?',
                        'choices' => [
                            ['choice_text' => 'Le thymus', 'is_correct' => true],
                            ['choice_text' => 'Le pancréas', 'is_correct' => false],
                            ['choice_text' => 'La vésicule biliaire', 'is_correct' => false],
                            ['choice_text' => 'Le muscle cardiaque', 'is_correct' => false],
                        ],
                        'explanation' => 'Les lymphocytes T proviennent de la moelle osseuse puis mûrissent principalement dans le thymus.',
                    ],
                    [
                        'question' => 'Quelle est une fonction importante de la moelle osseuse ?',
                        'choices' => [
                            ['choice_text' => 'Produire de nombreuses cellules sanguines', 'is_correct' => true],
                            ['choice_text' => 'Produire uniquement la salive', 'is_correct' => false],
                            ['choice_text' => 'Stocker l’urine', 'is_correct' => false],
                            ['choice_text' => 'Assurer les échanges gazeux pulmonaires', 'is_correct' => false],
                        ],
                        'explanation' => 'La moelle osseuse hématopoïétique produit les différentes cellules du sang, notamment plusieurs cellules de l’immunité.',
                    ],
                    [
                        'question' => 'Les lymphocytes B jouent directement un rôle majeur dans :',
                        'choices' => [
                            ['choice_text' => 'La production d’anticorps après activation', 'is_correct' => true],
                            ['choice_text' => 'La contraction des muscles squelettiques', 'is_correct' => false],
                            ['choice_text' => 'La filtration de l’urine', 'is_correct' => false],
                            ['choice_text' => 'La sécrétion de bile', 'is_correct' => false],
                        ],
                        'explanation' => 'Après activation, certains lymphocytes B se différencient en plasmocytes, qui produisent des anticorps.',
                    ],
                    [
                        'question' => 'Quel type de lymphocyte est particulièrement associé à la destruction de cellules infectées ou anormales ?',
                        'choices' => [
                            ['choice_text' => 'Les lymphocytes T cytotoxiques', 'is_correct' => true],
                            ['choice_text' => 'Les érythrocytes', 'is_correct' => false],
                            ['choice_text' => 'Les plaquettes', 'is_correct' => false],
                            ['choice_text' => 'Les adipocytes', 'is_correct' => false],
                        ],
                        'explanation' => 'Les lymphocytes T cytotoxiques peuvent reconnaître certaines cellules infectées ou anormales et provoquer leur destruction.',
                    ],
                    [
                        'question' => 'Quel organe lymphoïde filtre le sang et participe à la surveillance immunitaire ?',
                        'choices' => [
                            ['choice_text' => 'La rate', 'is_correct' => true],
                            ['choice_text' => 'La thyroïde', 'is_correct' => false],
                            ['choice_text' => 'Le duodénum', 'is_correct' => false],
                            ['choice_text' => 'Le cartilage', 'is_correct' => false],
                        ],
                        'explanation' => 'La rate contient des cellules immunitaires et filtre le sang, ce qui lui permet de participer à l’élimination de certaines cellules ou particules.',
                    ],
                    [
                        'question' => 'Un ganglion lymphatique devient parfois gonflé pendant une infection. Pourquoi ?',
                        'choices' => [
                            ['choice_text' => 'Des cellules immunitaires y prolifèrent et y rencontrent des antigènes', 'is_correct' => true],
                            ['choice_text' => 'Il se transforme temporairement en os', 'is_correct' => false],
                            ['choice_text' => 'Il cesse toute circulation de lymphe', 'is_correct' => false],
                            ['choice_text' => 'Il fabrique des globules rouges à partir de graisse', 'is_correct' => false],
                        ],
                        'explanation' => 'Les ganglions lymphatiques sont des lieux de rencontre et d’activation de cellules immunitaires. Leur activité accrue peut les faire augmenter de volume.',
                    ],
                    [
                        'question' => 'Quelle cellule appartient à l’immunité innée ?',
                        'choices' => [
                            ['choice_text' => 'Le neutrophile', 'is_correct' => true],
                            ['choice_text' => 'Le plasmocyte mémoire', 'is_correct' => false],
                            ['choice_text' => 'Le spermatozoïde', 'is_correct' => false],
                            ['choice_text' => 'L’ostéoblaste', 'is_correct' => false],
                        ],
                        'explanation' => 'Les neutrophiles sont des leucocytes majeurs de l’immunité innée et interviennent rapidement lors de nombreuses infections.',
                    ],
                    [
                        'question' => 'Quelle cellule présente des antigènes aux lymphocytes T ?',
                        'choices' => [
                            ['choice_text' => 'Une cellule dendritique', 'is_correct' => true],
                            ['choice_text' => 'Une cellule musculaire lisse uniquement', 'is_correct' => false],
                            ['choice_text' => 'Une cellule adipeuse uniquement', 'is_correct' => false],
                            ['choice_text' => 'Une plaquette uniquement', 'is_correct' => false],
                        ],
                        'explanation' => 'Les cellules dendritiques capturent des antigènes et présentent des fragments antigéniques aux lymphocytes T, ce qui aide à déclencher une réponse adaptative.',
                    ],
                    [
                        'question' => 'Parmi ces propositions, laquelle décrit le mieux un plasmocyte ?',
                        'choices' => [
                            ['choice_text' => 'Une cellule spécialisée dans la sécrétion d’anticorps', 'is_correct' => true],
                            ['choice_text' => 'Une cellule spécialisée dans la coagulation', 'is_correct' => false],
                            ['choice_text' => 'Une cellule qui transporte principalement le dioxygène', 'is_correct' => false],
                            ['choice_text' => 'Une cellule qui contracte le cœur', 'is_correct' => false],
                        ],
                        'explanation' => 'Le plasmocyte est une cellule dérivée d’un lymphocyte B activé et fortement spécialisée dans la production d’anticorps.',
                    ],
                    [
                        'question' => 'Quel ensemble contient uniquement des cellules immunitaires ?',
                        'choices' => [
                            ['choice_text' => 'Neutrophile, lymphocyte B, macrophage', 'is_correct' => true],
                            ['choice_text' => 'Érythrocyte, neurone, ostéocyte', 'is_correct' => false],
                            ['choice_text' => 'Adipocyte, hépatocyte, kératinocyte', 'is_correct' => false],
                            ['choice_text' => 'Plaquette, adipocyte, cardiomyocyte', 'is_correct' => false],
                        ],
                        'explanation' => 'Neutrophiles, lymphocytes B et macrophages participent tous à la défense immunitaire.',
                    ],
                ],
            ],
            [
                'title' => 'Inflammation et défense innée',
                'description' => 'Comprendre la réaction inflammatoire, la fièvre et les mécanismes rapides de l’immunité innée.',
                'settings' => ['duration' => 20, 'passing_score' => 60],
                'questions' => [
                    [
                        'question' => 'Lors d’une inflammation, la vasodilatation locale tend à provoquer :',
                        'choices' => [
                            ['choice_text' => 'Une augmentation du débit sanguin local', 'is_correct' => true],
                            ['choice_text' => 'Une disparition totale des leucocytes', 'is_correct' => false],
                            ['choice_text' => 'Un arrêt permanent du cœur', 'is_correct' => false],
                            ['choice_text' => 'Une fermeture de tous les capillaires', 'is_correct' => false],
                        ],
                        'explanation' => 'La vasodilatation élargit les vaisseaux locaux et facilite l’arrivée de sang ainsi que de médiateurs et de cellules de défense.',
                    ],
                    [
                        'question' => 'Quel phénomène permet aux leucocytes de quitter les petits vaisseaux pour rejoindre un tissu inflammé ?',
                        'choices' => [
                            ['choice_text' => 'La diapédèse', 'is_correct' => true],
                            ['choice_text' => 'La digestion', 'is_correct' => false],
                            ['choice_text' => 'La ventilation', 'is_correct' => false],
                            ['choice_text' => 'La filtration glomérulaire', 'is_correct' => false],
                        ],
                        'explanation' => 'La diapédèse désigne le passage de leucocytes à travers la paroi des vaisseaux pour rejoindre les tissus.',
                    ],
                    [
                        'question' => 'Pourquoi un tissu inflammé peut-il être douloureux ?',
                        'choices' => [
                            ['choice_text' => 'Des médiateurs et la pression liée au gonflement stimulent des récepteurs de la douleur', 'is_correct' => true],
                            ['choice_text' => 'Parce que les os se transforment en nerfs', 'is_correct' => false],
                            ['choice_text' => 'Parce que le sang disparaît de la zone', 'is_correct' => false],
                            ['choice_text' => 'Parce que les globules rouges deviennent des neurones', 'is_correct' => false],
                        ],
                        'explanation' => 'Les médiateurs inflammatoires et l’œdème peuvent stimuler ou sensibiliser les terminaisons nerveuses de la zone.',
                    ],
                    [
                        'question' => 'Quelle substance peut déclencher de nombreux signes d’inflammation en agissant sur les vaisseaux sanguins ?',
                        'choices' => [
                            ['choice_text' => 'L’histamine', 'is_correct' => true],
                            ['choice_text' => 'L’hémoglobine uniquement', 'is_correct' => false],
                            ['choice_text' => 'La kératine', 'is_correct' => false],
                            ['choice_text' => 'La mélanine', 'is_correct' => false],
                        ],
                        'explanation' => 'L’histamine est un médiateur pouvant favoriser la vasodilatation et l’augmentation de la perméabilité vasculaire.',
                    ],
                    [
                        'question' => 'Quel rôle joue la fièvre dans certaines infections ?',
                        'choices' => [
                            ['choice_text' => 'Elle modifie le fonctionnement de l’organisme et peut participer à la réponse de défense', 'is_correct' => true],
                            ['choice_text' => 'Elle détruit toujours tous les microbes immédiatement', 'is_correct' => false],
                            ['choice_text' => 'Elle remplace la production de globules blancs', 'is_correct' => false],
                            ['choice_text' => 'Elle empêche définitivement toute inflammation', 'is_correct' => false],
                        ],
                        'explanation' => 'La fièvre fait partie de certaines réponses de l’organisme. Elle peut modifier les conditions de croissance des microbes et l’activité de certaines défenses.',
                    ],
                    [
                        'question' => 'Une substance étrangère est reconnue par des récepteurs de l’immunité innée. Quel est le résultat attendu ?',
                        'choices' => [
                            ['choice_text' => 'Une activation rapide de mécanismes de défense', 'is_correct' => true],
                            ['choice_text' => 'Une transformation immédiate en globule rouge', 'is_correct' => false],
                            ['choice_text' => 'Une disparition du système immunitaire', 'is_correct' => false],
                            ['choice_text' => 'Une digestion complète par l’estomac', 'is_correct' => false],
                        ],
                        'explanation' => 'L’immunité innée possède des récepteurs capables de reconnaître des motifs associés aux microbes ou aux lésions et d’induire rapidement une réponse.',
                    ],
                    [
                        'question' => 'Quelle caractéristique correspond à la phagocytose ?',
                        'choices' => [
                            ['choice_text' => 'Une cellule englobe une particule puis la digère', 'is_correct' => true],
                            ['choice_text' => 'Une cellule produit uniquement du dioxyde de carbone', 'is_correct' => false],
                            ['choice_text' => 'Un globule rouge fabrique un anticorps', 'is_correct' => false],
                            ['choice_text' => 'Un os absorbe les bactéries', 'is_correct' => false],
                        ],
                        'explanation' => 'La phagocytose permet à certaines cellules, comme les neutrophiles et macrophages, d’englober puis de dégrader des éléments étrangers.',
                    ],
                    [
                        'question' => 'Une personne a une petite écharde entourée de rougeur et de chaleur. Quel phénomène est le plus probable ?',
                        'choices' => [
                            ['choice_text' => 'Une réponse inflammatoire locale', 'is_correct' => true],
                            ['choice_text' => 'Une absence complète de défense', 'is_correct' => false],
                            ['choice_text' => 'Une baisse immédiate des anticorps dans tout le corps', 'is_correct' => false],
                            ['choice_text' => 'Une destruction de tous les lymphocytes', 'is_correct' => false],
                        ],
                        'explanation' => 'La rougeur et la chaleur autour d’une petite lésion sont des signes classiques d’une inflammation locale.',
                    ],
                    [
                        'question' => 'Parmi les éléments suivants, lequel appartient aux défenses chimiques de première ligne ?',
                        'choices' => [
                            ['choice_text' => 'L’acidité de l’estomac', 'is_correct' => true],
                            ['choice_text' => 'Les os du bassin', 'is_correct' => false],
                            ['choice_text' => 'Les tendons', 'is_correct' => false],
                            ['choice_text' => 'Les cheveux', 'is_correct' => false],
                        ],
                        'explanation' => 'Le pH très acide de l’estomac constitue une barrière chimique qui détruit de nombreux microorganismes ingérés.',
                    ],
                    [
                        'question' => 'Un antibiotique agit principalement contre des bactéries. Quel mécanisme de défense innée reste néanmoins utile contre ces bactéries ?',
                        'choices' => [
                            ['choice_text' => 'La phagocytose par des leucocytes', 'is_correct' => true],
                            ['choice_text' => 'La production d’hémoglobine par les neurones', 'is_correct' => false],
                            ['choice_text' => 'La digestion des globules rouges', 'is_correct' => false],
                            ['choice_text' => 'La fabrication de bile par les lymphocytes', 'is_correct' => false],
                        ],
                        'explanation' => 'Même en présence d’un antibiotique, les défenses de l’organisme restent importantes. La phagocytose peut contribuer à éliminer les bactéries et les débris.',
                    ],
                ],
            ],
            [
                'title' => 'Antigènes et anticorps',
                'description' => 'Comprendre la reconnaissance des antigènes, le fonctionnement général des anticorps et la spécificité immunitaire.',
                'settings' => ['duration' => 20, 'passing_score' => 60],
                'questions' => [
                    [
                        'question' => 'Un anticorps se fixe généralement :',
                        'choices' => [
                            ['choice_text' => 'À une structure antigénique complémentaire', 'is_correct' => true],
                            ['choice_text' => 'À n’importe quelle molécule sans distinction', 'is_correct' => false],
                            ['choice_text' => 'Uniquement à l’oxygène', 'is_correct' => false],
                            ['choice_text' => 'Uniquement à l’eau', 'is_correct' => false],
                        ],
                        'explanation' => 'Les anticorps possèdent des régions de liaison dont la forme et les propriétés permettent une reconnaissance spécifique de certains antigènes.',
                    ],
                    [
                        'question' => 'Quel effet peut avoir la fixation d’un anticorps sur une toxine ?',
                        'choices' => [
                            ['choice_text' => 'Neutraliser l’activité de la toxine', 'is_correct' => true],
                            ['choice_text' => 'Transformer la toxine en globule rouge', 'is_correct' => false],
                            ['choice_text' => 'Augmenter forcément sa toxicité', 'is_correct' => false],
                            ['choice_text' => 'Produire de l’insuline', 'is_correct' => false],
                        ],
                        'explanation' => 'Certains anticorps peuvent neutraliser une toxine en se fixant sur elle et en empêchant son interaction avec ses cibles cellulaires.',
                    ],
                    [
                        'question' => 'Après activation d’un lymphocyte B, quelle cellule peut produire de grandes quantités d’anticorps ?',
                        'choices' => [
                            ['choice_text' => 'Le plasmocyte', 'is_correct' => true],
                            ['choice_text' => 'Le neurone', 'is_correct' => false],
                            ['choice_text' => 'L’ostéocyte', 'is_correct' => false],
                            ['choice_text' => 'L’érythrocyte', 'is_correct' => false],
                        ],
                        'explanation' => 'Le plasmocyte est la forme spécialisée du lymphocyte B destinée à sécréter des anticorps en quantité importante.',
                    ],
                    [
                        'question' => 'Deux molécules portent des antigènes différents. Un anticorps très spécifique du premier antigène se fixe-t-il nécessairement au second ?',
                        'choices' => [
                            ['choice_text' => 'Non, la liaison dépend de la complémentarité avec l’antigène reconnu', 'is_correct' => true],
                            ['choice_text' => 'Oui, tous les anticorps se fixent à tout', 'is_correct' => false],
                            ['choice_text' => 'Oui, mais uniquement dans les os', 'is_correct' => false],
                            ['choice_text' => 'Non, car les anticorps n’ont jamais de région de liaison', 'is_correct' => false],
                        ],
                        'explanation' => 'La spécificité des anticorps vient de la complémentarité entre leur région de liaison et un antigène donné.',
                    ],
                    [
                        'question' => 'Un test de laboratoire utilise un anticorps qui reconnaît spécifiquement une protéine. Que peut-on détecter ?',
                        'choices' => [
                            ['choice_text' => 'La présence de cette protéine dans l’échantillon', 'is_correct' => true],
                            ['choice_text' => 'La masse totale de tous les os', 'is_correct' => false],
                            ['choice_text' => 'La fréquence cardiaque sans mesure', 'is_correct' => false],
                            ['choice_text' => 'La quantité de lumière dans la pièce', 'is_correct' => false],
                        ],
                        'explanation' => 'Les anticorps sont utilisés en diagnostic parce que leur spécificité permet de reconnaître des molécules particulières.',
                    ],
                    [
                        'question' => 'Quelle affirmation décrit le mieux la neutralisation ?',
                        'choices' => [
                            ['choice_text' => 'Un anticorps empêche un agent ou une toxine d’exercer son effet', 'is_correct' => true],
                            ['choice_text' => 'Un globule rouge détruit un anticorps', 'is_correct' => false],
                            ['choice_text' => 'Une cellule se divise sans contrôle', 'is_correct' => false],
                            ['choice_text' => 'Le sang ne circule plus', 'is_correct' => false],
                        ],
                        'explanation' => 'La neutralisation est un mécanisme par lequel un anticorps bloque l’action d’un antigène, d’une toxine ou d’un virus.',
                    ],
                    [
                        'question' => 'Pourquoi dit-on que la réponse anticorps est spécifique ?',
                        'choices' => [
                            ['choice_text' => 'Parce que les anticorps reconnaissent certaines structures plutôt que toutes les molécules', 'is_correct' => true],
                            ['choice_text' => 'Parce qu’ils reconnaissent seulement le sang', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’ils ne peuvent jamais se lier à un antigène', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’ils sont tous identiques', 'is_correct' => false],
                        ],
                        'explanation' => 'Chaque anticorps possède une région de liaison dont les propriétés lui permettent de reconnaître un ensemble limité d’antigènes.',
                    ],
                    [
                        'question' => 'Si un échantillon contient beaucoup de l’antigène X, un test spécifique anti-X devrait en général montrer :',
                        'choices' => [
                            ['choice_text' => 'Un signal plus important, selon le principe du test utilisé', 'is_correct' => true],
                            ['choice_text' => 'Toujours exactement le même signal, quelle que soit la quantité', 'is_correct' => false],
                            ['choice_text' => 'Une disparition de tous les anticorps', 'is_correct' => false],
                            ['choice_text' => 'Une hausse automatique du dioxygène sanguin', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans de nombreux tests immunologiques, le signal varie avec la quantité d’antigène dans certaines limites de mesure.',
                    ],
                    [
                        'question' => 'Quel type de molécule est un anticorps ?',
                        'choices' => [
                            ['choice_text' => 'Une protéine, plus précisément une immunoglobuline', 'is_correct' => true],
                            ['choice_text' => 'Un lipide de réserve', 'is_correct' => false],
                            ['choice_text' => 'Un glucide alimentaire', 'is_correct' => false],
                            ['choice_text' => 'Un minéral', 'is_correct' => false],
                        ],
                        'explanation' => 'Les anticorps sont des protéines du groupe des immunoglobulines produites par les plasmocytes.',
                    ],
                    [
                        'question' => 'Une personne possède des anticorps dirigés contre un antigène A. Lorsqu’elle rencontre uniquement l’antigène B, que peut-on attendre ?',
                        'choices' => [
                            ['choice_text' => 'Une absence possible de reconnaissance spécifique si B est suffisamment différent de A', 'is_correct' => true],
                            ['choice_text' => 'Une reconnaissance obligatoire et identique', 'is_correct' => false],
                            ['choice_text' => 'La transformation de B en A', 'is_correct' => false],
                            ['choice_text' => 'Une destruction instantanée de tous les leucocytes', 'is_correct' => false],
                        ],
                        'explanation' => 'La spécificité signifie qu’un anticorps reconnaît préférentiellement la structure antigénique pour laquelle il est adapté.',
                    ],
                ],
            ],
            [
                'title' => 'Lymphocytes et mémoire immunitaire',
                'description' => 'Découvrir l’activation des lymphocytes, la coopération cellulaire et le principe de mémoire immunitaire.',
                'settings' => ['duration' => 20, 'passing_score' => 65],
                'questions' => [
                    [
                        'question' => 'Pourquoi une deuxième rencontre avec le même antigène peut-elle provoquer une réponse plus rapide ?',
                        'choices' => [
                            ['choice_text' => 'Parce que des cellules mémoires persistent après la première réponse', 'is_correct' => true],
                            ['choice_text' => 'Parce que tous les microbes deviennent inoffensifs', 'is_correct' => false],
                            ['choice_text' => 'Parce que les globules rouges mémorisent les antigènes', 'is_correct' => false],
                            ['choice_text' => 'Parce que le cœur produit des anticorps', 'is_correct' => false],
                        ],
                        'explanation' => 'Certaines cellules B et T deviennent des cellules mémoires. Elles permettent une réponse secondaire généralement plus rapide et efficace.',
                    ],
                    [
                        'question' => 'Quel est le rôle principal des lymphocytes T auxiliaires ?',
                        'choices' => [
                            ['choice_text' => 'Coordonner et stimuler d’autres cellules immunitaires', 'is_correct' => true],
                            ['choice_text' => 'Transporter le dioxygène', 'is_correct' => false],
                            ['choice_text' => 'Former les os', 'is_correct' => false],
                            ['choice_text' => 'Sécréter la bile', 'is_correct' => false],
                        ],
                        'explanation' => 'Les lymphocytes T auxiliaires sécrètent des molécules de signalisation et participent à l’activation de plusieurs acteurs de l’immunité adaptative.',
                    ],
                    [
                        'question' => 'Quel énoncé est correct à propos des cellules mémoires ?',
                        'choices' => [
                            ['choice_text' => 'Elles peuvent persister après la disparition de l’antigène initial', 'is_correct' => true],
                            ['choice_text' => 'Elles sont toutes des globules rouges', 'is_correct' => false],
                            ['choice_text' => 'Elles empêchent toute future infection', 'is_correct' => false],
                            ['choice_text' => 'Elles remplacent les organes lymphoïdes', 'is_correct' => false],
                        ],
                        'explanation' => 'La mémoire immunitaire repose notamment sur la persistance de cellules spécifiques après la première exposition.',
                    ],
                    [
                        'question' => 'Lorsqu’un lymphocyte T reconnaît un antigène présenté de manière appropriée, quelle conséquence peut survenir ?',
                        'choices' => [
                            ['choice_text' => 'Son activation et sa multiplication en cellules spécialisées', 'is_correct' => true],
                            ['choice_text' => 'Sa transformation en globule rouge', 'is_correct' => false],
                            ['choice_text' => 'Sa disparition immédiate sans réponse', 'is_correct' => false],
                            ['choice_text' => 'La production de bile', 'is_correct' => false],
                        ],
                        'explanation' => 'La reconnaissance antigénique appropriée peut activer un lymphocyte T, qui prolifère ensuite et se différencie en cellules effectrices et mémoires.',
                    ],
                    [
                        'question' => 'Une vaccination vise notamment à préparer une réponse immunitaire future contre :',
                        'choices' => [
                            ['choice_text' => 'Un antigène ou une information antigénique provenant de l’agent ciblé', 'is_correct' => true],
                            ['choice_text' => 'Tous les microbes existants sans distinction', 'is_correct' => false],
                            ['choice_text' => 'La digestion des lipides', 'is_correct' => false],
                            ['choice_text' => 'Le fonctionnement des reins', 'is_correct' => false],
                        ],
                        'explanation' => 'La vaccination expose le système immunitaire à des éléments antigéniques permettant de développer une mémoire sans provoquer nécessairement la maladie correspondante.',
                    ],
                    [
                        'question' => 'Quel résultat est attendu après une vaccination efficace ?',
                        'choices' => [
                            ['choice_text' => 'La formation d’une mémoire immunitaire spécifique', 'is_correct' => true],
                            ['choice_text' => 'La suppression de tous les lymphocytes', 'is_correct' => false],
                            ['choice_text' => 'La disparition définitive des anticorps du sang', 'is_correct' => false],
                            ['choice_text' => 'La transformation de tous les leucocytes en plaquettes', 'is_correct' => false],
                        ],
                        'explanation' => 'Une vaccination efficace peut conduire à la formation de cellules mémoires et, selon le vaccin, à la production d’anticorps.',
                    ],
                    [
                        'question' => 'Une personne reçoit deux doses d’un vaccin séparées dans le temps. Le rappel sert principalement à :',
                        'choices' => [
                            ['choice_text' => 'Renforcer ou prolonger la réponse immunitaire et la mémoire', 'is_correct' => true],
                            ['choice_text' => 'Remplacer les globules rouges', 'is_correct' => false],
                            ['choice_text' => 'Arrêter toute activité des lymphocytes T', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les ganglions lymphatiques', 'is_correct' => false],
                        ],
                        'explanation' => 'Une dose de rappel peut stimuler à nouveau les cellules spécifiques et renforcer la protection immunitaire selon le vaccin et le schéma utilisé.',
                    ],
                    [
                        'question' => 'Laquelle des situations illustre le mieux la mémoire immunitaire ?',
                        'choices' => [
                            ['choice_text' => 'Une réponse plus rapide lors d’une nouvelle exposition au même antigène', 'is_correct' => true],
                            ['choice_text' => 'Une digestion plus rapide après un repas', 'is_correct' => false],
                            ['choice_text' => 'Une accélération permanente du rythme cardiaque', 'is_correct' => false],
                            ['choice_text' => 'Une augmentation du nombre de globules rouges après chaque repas', 'is_correct' => false],
                        ],
                        'explanation' => 'La mémoire immunitaire permet au système adaptatif de répondre plus rapidement lors d’une nouvelle rencontre avec le même antigène.',
                    ],
                    [
                        'question' => 'Qu’appelle-t-on sélection clonale, de façon simplifiée ?',
                        'choices' => [
                            ['choice_text' => 'La multiplication de lymphocytes qui reconnaissent spécifiquement un antigène', 'is_correct' => true],
                            ['choice_text' => 'La destruction de tous les microbes par les globules rouges', 'is_correct' => false],
                            ['choice_text' => 'La fabrication de nouveaux os', 'is_correct' => false],
                            ['choice_text' => 'Le remplacement des neurones par des lymphocytes', 'is_correct' => false],
                        ],
                        'explanation' => 'Lorsqu’un lymphocyte reconnaît son antigène et reçoit les signaux appropriés, il peut se multiplier en produisant un clone de cellules spécifiques.',
                    ],
                    [
                        'question' => 'Quel énoncé distingue correctement réponse primaire et réponse secondaire ?',
                        'choices' => [
                            ['choice_text' => 'La réponse secondaire est souvent plus rapide grâce à la mémoire immunitaire', 'is_correct' => true],
                            ['choice_text' => 'La réponse primaire n’implique jamais de lymphocytes', 'is_correct' => false],
                            ['choice_text' => 'La réponse secondaire est toujours absente', 'is_correct' => false],
                            ['choice_text' => 'Les deux réponses sont obligatoirement identiques en vitesse et en intensité', 'is_correct' => false],
                        ],
                        'explanation' => 'La première exposition met en place la mémoire. Une nouvelle exposition peut alors entraîner une réponse plus rapide et plus importante.',
                    ],
                ],
            ],
            [
                'title' => 'Vaccination et protection collective',
                'description' => 'Relier la vaccination à la mémoire immunitaire, aux doses de rappel et à la réduction de la transmission.',
                'settings' => ['duration' => 25, 'passing_score' => 65],
                'questions' => [
                    [
                        'question' => 'Quel est l’objectif immunologique principal d’un vaccin ?',
                        'choices' => [
                            ['choice_text' => 'Préparer l’organisme à reconnaître plus efficacement un antigène ciblé', 'is_correct' => true],
                            ['choice_text' => 'Détruire immédiatement toutes les bactéries du corps', 'is_correct' => false],
                            ['choice_text' => 'Remplacer le système immunitaire', 'is_correct' => false],
                            ['choice_text' => 'Empêcher définitivement toute inflammation', 'is_correct' => false],
                        ],
                        'explanation' => 'Le vaccin entraîne une réponse immunitaire contrôlée qui vise notamment à préparer une mémoire spécifique contre la cible.',
                    ],
                    [
                        'question' => 'Pourquoi une personne vaccinée peut-elle parfois encore être infectée ?',
                        'choices' => [
                            ['choice_text' => 'Parce qu’un vaccin ne garantit pas nécessairement une protection absolue contre toute infection', 'is_correct' => true],
                            ['choice_text' => 'Parce que les vaccins détruisent les anticorps', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’une réponse immunitaire est impossible chez l’être humain', 'is_correct' => false],
                            ['choice_text' => 'Parce que tous les microbes sont identiques', 'is_correct' => false],
                        ],
                        'explanation' => 'L’efficacité d’un vaccin dépend du vaccin, de la personne, du moment et de l’agent infectieux. Une infection peut survenir malgré une protection contre les formes graves ou une réduction du risque.',
                    ],
                    [
                        'question' => 'Un vaccin introduit un antigène non pathogène dans l’organisme. Quelle réponse peut-il déclencher ?',
                        'choices' => [
                            ['choice_text' => 'La production de lymphocytes spécifiques et de cellules mémoires', 'is_correct' => true],
                            ['choice_text' => 'La destruction de la moelle osseuse', 'is_correct' => false],
                            ['choice_text' => 'La fermeture de tous les ganglions', 'is_correct' => false],
                            ['choice_text' => 'La suppression permanente de la fièvre', 'is_correct' => false],
                        ],
                        'explanation' => 'Le système adaptatif peut reconnaître l’antigène vaccinal, activer des lymphocytes spécifiques et constituer une mémoire.',
                    ],
                    [
                        'question' => 'Dans une population, une couverture vaccinale élevée peut réduire la transmission d’un agent infectieux parce que :',
                        'choices' => [
                            ['choice_text' => 'Il y a moins de personnes sensibles permettant au microbe de se transmettre', 'is_correct' => true],
                            ['choice_text' => 'Les microbes disparaissent automatiquement de la planète', 'is_correct' => false],
                            ['choice_text' => 'Les globules rouges deviennent des anticorps', 'is_correct' => false],
                            ['choice_text' => 'Les vaccins stérilisent tous les objets', 'is_correct' => false],
                        ],
                        'explanation' => 'Lorsque suffisamment de personnes sont protégées, les possibilités de transmission peuvent diminuer, ce qui protège aussi indirectement certaines personnes non protégées.',
                    ],
                    [
                        'question' => 'Quel élément peut influencer l’efficacité d’un vaccin ?',
                        'choices' => [
                            ['choice_text' => 'L’âge, l’état de santé et le vaccin utilisé', 'is_correct' => true],
                            ['choice_text' => 'Uniquement la couleur des yeux', 'is_correct' => false],
                            ['choice_text' => 'Uniquement la taille de la main', 'is_correct' => false],
                            ['choice_text' => 'Uniquement la longueur des cheveux', 'is_correct' => false],
                        ],
                        'explanation' => 'La réponse vaccinale varie selon plusieurs facteurs, notamment le type de vaccin et certaines caractéristiques biologiques de la personne.',
                    ],
                    [
                        'question' => 'Un rappel vaccinal provoque une réponse plus rapide qu’à la première dose. Quelle explication est la plus cohérente ?',
                        'choices' => [
                            ['choice_text' => 'Des cellules mémoires spécifiques étaient déjà présentes', 'is_correct' => true],
                            ['choice_text' => 'Le vaccin transforme tous les leucocytes en neurones', 'is_correct' => false],
                            ['choice_text' => 'Les globules rouges apprennent à fabriquer des anticorps', 'is_correct' => false],
                            ['choice_text' => 'Le foie devient un ganglion', 'is_correct' => false],
                        ],
                        'explanation' => 'La présence de cellules mémoires accélère et amplifie généralement la réponse lors d’une nouvelle exposition au même antigène.',
                    ],
                    [
                        'question' => 'Un vaccin déclenche une réponse contre l’antigène X. Quel résultat indique une réponse spécifique ?',
                        'choices' => [
                            ['choice_text' => 'Une hausse d’anticorps capables de reconnaître X', 'is_correct' => true],
                            ['choice_text' => 'Une augmentation identique de tous les anticorps contre toutes les molécules', 'is_correct' => false],
                            ['choice_text' => 'Une disparition de tous les globules blancs', 'is_correct' => false],
                            ['choice_text' => 'Une baisse automatique de la masse musculaire', 'is_correct' => false],
                        ],
                        'explanation' => 'La spécificité se traduit par l’augmentation de composants immunitaires capables de reconnaître préférentiellement l’antigène ciblé.',
                    ],
                    [
                        'question' => 'Une personne a reçu un vaccin il y a plusieurs années. Pourquoi un rappel peut-il être proposé ?',
                        'choices' => [
                            ['choice_text' => 'Pour renforcer la protection lorsque la réponse immunitaire diminue avec le temps, selon le vaccin', 'is_correct' => true],
                            ['choice_text' => 'Pour transformer les lymphocytes B en globules rouges', 'is_correct' => false],
                            ['choice_text' => 'Pour remplacer la peau', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer les anticorps existants', 'is_correct' => false],
                        ],
                        'explanation' => 'Selon le vaccin, le niveau de protection peut diminuer avec le temps. Un rappel peut alors restaurer ou renforcer la réponse.',
                    ],
                    [
                        'question' => 'Quel énoncé décrit correctement une mémoire immunitaire ?',
                        'choices' => [
                            ['choice_text' => 'Elle est spécifique d’un antigène ou d’un groupe de structures reconnues', 'is_correct' => true],
                            ['choice_text' => 'Elle concerne uniquement les globules rouges', 'is_correct' => false],
                            ['choice_text' => 'Elle rend toutes les infections impossibles', 'is_correct' => false],
                            ['choice_text' => 'Elle ne peut jamais durer après la première exposition', 'is_correct' => false],
                        ],
                        'explanation' => 'La mémoire immunitaire est liée à une reconnaissance spécifique et peut persister longtemps, même si sa durée varie selon la situation.',
                    ],
                    [
                        'question' => 'Un groupe comporte 100 personnes dont 80 sont protégées contre un agent infectieux. Sans faire de prédiction de transmission, quelle fraction de la population est protégée ?',
                        'choices' => [
                            ['choice_text' => '80 %', 'is_correct' => true],
                            ['choice_text' => '20 %', 'is_correct' => false],
                            ['choice_text' => '80 personnes sur 1 000, soit 8 %', 'is_correct' => false],
                            ['choice_text' => '180 %', 'is_correct' => false],
                        ],
                        'explanation' => 'La fraction protégée est 80 sur 100. Le calcul 80 ÷ 100 × 100 donne 80 %.',
                    ],
                ],
            ],
            [
                'title' => 'Allergies et réactions immunitaires',
                'description' => 'Comprendre simplement les allergies, l’hypersensibilité immédiate et la différence entre allergène et agent infectieux.',
                'settings' => ['duration' => 25, 'passing_score' => 65],
                'questions' => [
                    [
                        'question' => 'Une allergie correspond à :',
                        'choices' => [
                            ['choice_text' => 'Une réponse immunitaire excessive ou inappropriée contre une substance habituellement non dangereuse', 'is_correct' => true],
                            ['choice_text' => 'Une absence totale de système immunitaire', 'is_correct' => false],
                            ['choice_text' => 'Une infection causée par tous les allergènes', 'is_correct' => false],
                            ['choice_text' => 'Une maladie due uniquement à une fracture', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans une allergie, le système immunitaire réagit de façon inappropriée à un allergène, comme certains pollens, aliments ou acariens.',
                    ],
                    [
                        'question' => 'Le pollen est généralement considéré comme :',
                        'choices' => [
                            ['choice_text' => 'Un allergène chez les personnes sensibilisées', 'is_correct' => true],
                            ['choice_text' => 'Un anticorps', 'is_correct' => false],
                            ['choice_text' => 'Un antibiotique', 'is_correct' => false],
                            ['choice_text' => 'Un globule blanc', 'is_correct' => false],
                        ],
                        'explanation' => 'Le pollen peut agir comme allergène chez certaines personnes. Il ne s’agit pas d’un microbe ni d’un médicament.',
                    ],
                    [
                        'question' => 'Quelle substance libérée par certaines cellules participe souvent aux symptômes d’une allergie immédiate ?',
                        'choices' => [
                            ['choice_text' => 'L’histamine', 'is_correct' => true],
                            ['choice_text' => 'La créatine', 'is_correct' => false],
                            ['choice_text' => 'L’hémoglobine', 'is_correct' => false],
                            ['choice_text' => 'Le glycogène', 'is_correct' => false],
                        ],
                        'explanation' => 'L’histamine participe à plusieurs manifestations allergiques, notamment la vasodilatation, les démangeaisons et certaines sécrétions.',
                    ],
                    [
                        'question' => 'Une personne éternue et a le nez qui coule chaque printemps lors de l’exposition au pollen. Quelle situation est la plus probable ?',
                        'choices' => [
                            ['choice_text' => 'Une rhinite allergique', 'is_correct' => true],
                            ['choice_text' => 'Une fracture nasale', 'is_correct' => false],
                            ['choice_text' => 'Une anémie aiguë', 'is_correct' => false],
                            ['choice_text' => 'Une intoxication au fer', 'is_correct' => false],
                        ],
                        'explanation' => 'La répétition saisonnière des éternuements et de l’écoulement nasal lors de l’exposition au pollen est compatible avec une rhinite allergique.',
                    ],
                    [
                        'question' => 'Quelle différence générale existe entre un allergène et un agent infectieux ?',
                        'choices' => [
                            ['choice_text' => 'Un allergène déclenche une réaction chez une personne sensibilisée, alors qu’un agent infectieux peut se multiplier dans l’organisme selon sa nature', 'is_correct' => true],
                            ['choice_text' => 'Les deux sont toujours des bactéries', 'is_correct' => false],
                            ['choice_text' => 'Un allergène est toujours un virus', 'is_correct' => false],
                            ['choice_text' => 'Un agent infectieux n’est jamais reconnu par le système immunitaire', 'is_correct' => false],
                        ],
                        'explanation' => 'Un allergène est une substance capable de déclencher une réponse allergique chez certaines personnes. Un agent infectieux est un organisme ou élément infectieux pouvant provoquer une infection.',
                    ],
                    [
                        'question' => 'Pourquoi un antihistaminique peut-il diminuer certains symptômes allergiques ?',
                        'choices' => [
                            ['choice_text' => 'Parce qu’il bloque l’action de l’histamine sur certaines cibles', 'is_correct' => true],
                            ['choice_text' => 'Parce qu’il détruit tous les virus', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’il remplace les lymphocytes T', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’il augmente toujours la fièvre', 'is_correct' => false],
                        ],
                        'explanation' => 'Les antihistaminiques réduisent certains symptômes en diminuant l’effet de l’histamine sur ses récepteurs.',
                    ],
                    [
                        'question' => 'Une réaction allergique importante après exposition à un allergène peut devenir dangereuse notamment si :',
                        'choices' => [
                            ['choice_text' => 'Elle provoque une gêne respiratoire et une chute de tension', 'is_correct' => true],
                            ['choice_text' => 'Elle colore légèrement la peau pendant quelques secondes', 'is_correct' => false],
                            ['choice_text' => 'Elle augmente simplement l’appétit', 'is_correct' => false],
                            ['choice_text' => 'Elle provoque uniquement des cheveux plus longs', 'is_correct' => false],
                        ],
                        'explanation' => 'Une réaction allergique sévère peut affecter les voies respiratoires et la circulation. Elle constitue alors une urgence médicale.',
                    ],
                    [
                        'question' => 'Lequel est un exemple d’allergène alimentaire ?',
                        'choices' => [
                            ['choice_text' => 'Une protéine de l’arachide', 'is_correct' => true],
                            ['choice_text' => 'Un globule rouge', 'is_correct' => false],
                            ['choice_text' => 'Le sodium du plasma uniquement', 'is_correct' => false],
                            ['choice_text' => 'Le cartilage d’une articulation', 'is_correct' => false],
                        ],
                        'explanation' => 'Certaines protéines alimentaires peuvent agir comme allergènes, notamment chez les personnes sensibilisées.',
                    ],
                    [
                        'question' => 'Une personne n’est pas allergique lors de sa première exposition, mais le devient plus tard. Quelle notion explique cette évolution ?',
                        'choices' => [
                            ['choice_text' => 'La sensibilisation immunitaire', 'is_correct' => true],
                            ['choice_text' => 'La coagulation', 'is_correct' => false],
                            ['choice_text' => 'La filtration rénale', 'is_correct' => false],
                            ['choice_text' => 'La respiration cellulaire', 'is_correct' => false],
                        ],
                        'explanation' => 'Une phase de sensibilisation peut conduire le système immunitaire à réagir plus fortement lors d’expositions ultérieures à l’allergène.',
                    ],
                    [
                        'question' => 'Quelle affirmation est correcte ?',
                        'choices' => [
                            ['choice_text' => 'Une allergie implique le système immunitaire, mais toutes les substances irritantes ne sont pas des allergènes', 'is_correct' => true],
                            ['choice_text' => 'Toute irritation est forcément une allergie', 'is_correct' => false],
                            ['choice_text' => 'Une allergie est toujours une infection bactérienne', 'is_correct' => false],
                            ['choice_text' => 'Les allergies n’impliquent jamais d’anticorps', 'is_correct' => false],
                        ],
                        'explanation' => 'Une irritation chimique ou mécanique peut produire des symptômes sans mécanisme allergique. Les allergies impliquent une réponse immunitaire spécifique.',
                    ],
                ],
            ],
            [
                'title' => 'Auto-immunité et tolérance',
                'description' => 'Introduire la notion de tolérance immunitaire et comprendre ce qui caractérise les maladies auto-immunes.',
                'settings' => ['duration' => 25, 'passing_score' => 70],
                'questions' => [
                    [
                        'question' => 'La tolérance immunitaire correspond principalement à :',
                        'choices' => [
                            ['choice_text' => 'La capacité à ne pas attaquer normalement les propres constituants de l’organisme', 'is_correct' => true],
                            ['choice_text' => 'L’absence de toute cellule immunitaire', 'is_correct' => false],
                            ['choice_text' => 'La destruction de tous les antigènes étrangers', 'is_correct' => false],
                            ['choice_text' => 'La production permanente de fièvre', 'is_correct' => false],
                        ],
                        'explanation' => 'Le système immunitaire doit distinguer le soi du non-soi et limiter les réponses dirigées contre les propres tissus.',
                    ],
                    [
                        'question' => 'Une maladie auto-immune se caractérise par :',
                        'choices' => [
                            ['choice_text' => 'Une réponse immunitaire dirigée contre des composants de l’organisme', 'is_correct' => true],
                            ['choice_text' => 'Une absence complète de globules blancs', 'is_correct' => false],
                            ['choice_text' => 'Une infection obligatoire par un virus', 'is_correct' => false],
                            ['choice_text' => 'Une simple carence en eau', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans une maladie auto-immune, une perte de tolérance conduit le système immunitaire à cibler des constituants du soi.',
                    ],
                    [
                        'question' => 'Pourquoi la reconnaissance du soi est-elle importante ?',
                        'choices' => [
                            ['choice_text' => 'Elle permet d’éviter des attaques inutiles contre les tissus sains', 'is_correct' => true],
                            ['choice_text' => 'Elle empêche toute réponse contre les microbes', 'is_correct' => false],
                            ['choice_text' => 'Elle supprime les anticorps', 'is_correct' => false],
                            ['choice_text' => 'Elle arrête la production des leucocytes', 'is_correct' => false],
                        ],
                        'explanation' => 'Une bonne tolérance du soi protège les tissus de l’organisme tout en permettant des réponses dirigées contre les éléments étrangers.',
                    ],
                    [
                        'question' => 'Lequel constitue un exemple de maladie auto-immune connue ?',
                        'choices' => [
                            ['choice_text' => 'Le diabète de type 1', 'is_correct' => true],
                            ['choice_text' => 'Le rhume banal', 'is_correct' => false],
                            ['choice_text' => 'Une fracture du fémur', 'is_correct' => false],
                            ['choice_text' => 'La déshydratation après un effort', 'is_correct' => false],
                        ],
                        'explanation' => 'Le diabète de type 1 implique une réaction auto-immune dirigée contre les cellules bêta du pancréas chez les personnes atteintes.',
                    ],
                    [
                        'question' => 'Dans une maladie auto-immune, les anticorps peuvent parfois :',
                        'choices' => [
                            ['choice_text' => 'Reconnaître des molécules appartenant au propre organisme', 'is_correct' => true],
                            ['choice_text' => 'Transporter le dioxygène comme l’hémoglobine', 'is_correct' => false],
                            ['choice_text' => 'Remplacer les enzymes digestives', 'is_correct' => false],
                            ['choice_text' => 'Devenir des cellules osseuses', 'is_correct' => false],
                        ],
                        'explanation' => 'Certaines maladies auto-immunes s’accompagnent d’auto-anticorps, dirigés contre des constituants du soi.',
                    ],
                    [
                        'question' => 'Un mécanisme de tolérance défaillant peut conduire à :',
                        'choices' => [
                            ['choice_text' => 'Une activation inappropriée de lymphocytes contre le soi', 'is_correct' => true],
                            ['choice_text' => 'La disparition des os', 'is_correct' => false],
                            ['choice_text' => 'La production d’oxygène par les reins', 'is_correct' => false],
                            ['choice_text' => 'La transformation des bactéries en globules blancs', 'is_correct' => false],
                        ],
                        'explanation' => 'La rupture de tolérance peut permettre à des lymphocytes autoréactifs de participer à une réponse dirigée contre les propres tissus.',
                    ],
                    [
                        'question' => 'Quelle proposition distingue une maladie auto-immune d’une infection ?',
                        'choices' => [
                            ['choice_text' => 'L’auto-immunité vise des composants du soi, tandis qu’une infection implique un agent infectieux', 'is_correct' => true],
                            ['choice_text' => 'Une infection ne provoque jamais de réponse immunitaire', 'is_correct' => false],
                            ['choice_text' => 'Une maladie auto-immune est toujours contagieuse', 'is_correct' => false],
                            ['choice_text' => 'Les deux notions sont exactement synonymes', 'is_correct' => false],
                        ],
                        'explanation' => 'Une infection est due à un agent infectieux. Une maladie auto-immune résulte d’une réponse immunitaire anormale contre le soi.',
                    ],
                    [
                        'question' => 'Pourquoi une personne atteinte d’une maladie auto-immune ne manque-t-elle pas forcément de défenses immunitaires ?',
                        'choices' => [
                            ['choice_text' => 'Parce que son système immunitaire peut être actif tout en étant dirigé de façon inappropriée', 'is_correct' => true],
                            ['choice_text' => 'Parce qu’elle n’a aucun leucocyte', 'is_correct' => false],
                            ['choice_text' => 'Parce que tous les microbes sont détruits avant d’entrer', 'is_correct' => false],
                            ['choice_text' => 'Parce que les anticorps ne sont jamais impliqués', 'is_correct' => false],
                        ],
                        'explanation' => 'L’auto-immunité n’est pas nécessairement une absence de réponse immunitaire. Le problème est notamment la cible inappropriée de cette réponse.',
                    ],
                    [
                        'question' => 'Quelle idée résume le mieux la tolérance immunitaire ?',
                        'choices' => [
                            ['choice_text' => 'Réagir contre le danger tout en limitant les attaques contre le soi', 'is_correct' => true],
                            ['choice_text' => 'Réagir contre absolument toutes les molécules', 'is_correct' => false],
                            ['choice_text' => 'Ne jamais produire de lymphocytes', 'is_correct' => false],
                            ['choice_text' => 'Empêcher toute inflammation pendant toute la vie', 'is_correct' => false],
                        ],
                        'explanation' => 'La tolérance permet un équilibre entre défense contre les éléments étrangers ou anormaux et protection des propres tissus.',
                    ],
                    [
                        'question' => 'Un laboratoire détecte un auto-anticorps dans le sang. Que peut-on conclure avec certitude à partir de cette seule information ?',
                        'choices' => [
                            ['choice_text' => 'Une réponse immunitaire reconnaissant une structure du soi est présente', 'is_correct' => true],
                            ['choice_text' => 'Une maladie auto-immune précise est obligatoirement confirmée', 'is_correct' => false],
                            ['choice_text' => 'La personne est forcément infectée', 'is_correct' => false],
                            ['choice_text' => 'La personne n’a plus aucune défense immunitaire', 'is_correct' => false],
                        ],
                        'explanation' => 'La présence d’un auto-anticorps indique une réactivité contre une structure du soi, mais l’interprétation clinique dépend du contexte et d’autres données.',
                    ],
                ],
            ],
            [
                'title' => 'Immunologie appliquée et révision',
                'description' => 'Réinvestir les notions fondamentales dans des situations simples de diagnostic, prévention et raisonnement immunologique.',
                'settings' => ['duration' => 20, 'passing_score' => 70],
                'questions' => [
                    [
                        'question' => 'Un patient présente une infection bactérienne. Quelle réponse combine des mécanismes innés et adaptatifs ?',
                        'choices' => [
                            ['choice_text' => 'Phagocytose par des neutrophiles et production d’anticorps spécifiques', 'is_correct' => true],
                            ['choice_text' => 'Production de globules rouges et digestion des lipides', 'is_correct' => false],
                            ['choice_text' => 'Contraction du diaphragme et filtration rénale', 'is_correct' => false],
                            ['choice_text' => 'Sécrétion de bile et conduction nerveuse', 'is_correct' => false],
                        ],
                        'explanation' => 'La phagocytose appartient à l’immunité innée, tandis que les anticorps spécifiques relèvent de la réponse adaptative.',
                    ],
                    [
                        'question' => 'Un test détecte des anticorps spécifiques dirigés contre l’antigène X. Cette observation indique que :',
                        'choices' => [
                            ['choice_text' => 'Le système immunitaire a développé une réponse ciblant X', 'is_correct' => true],
                            ['choice_text' => 'Le patient est forcément malade au moment du test', 'is_correct' => false],
                            ['choice_text' => 'Il n’existe plus aucun lymphocyte B', 'is_correct' => false],
                            ['choice_text' => 'Les anticorps sont tous non spécifiques', 'is_correct' => false],
                        ],
                        'explanation' => 'La présence d’anticorps spécifiques indique une réponse dirigée contre l’antigène X, mais ne suffit pas toujours à déterminer à elle seule le moment exact de l’exposition.',
                    ],
                    [
                        'question' => 'Un enfant se vaccine puis rencontre plus tard le même antigène. Quelle notion explique sa capacité à répondre plus rapidement ?',
                        'choices' => [
                            ['choice_text' => 'La mémoire immunitaire', 'is_correct' => true],
                            ['choice_text' => 'La coagulation', 'is_correct' => false],
                            ['choice_text' => 'La ventilation pulmonaire', 'is_correct' => false],
                            ['choice_text' => 'La filtration glomérulaire', 'is_correct' => false],
                        ],
                        'explanation' => 'La vaccination peut former des cellules mémoires qui restent capables de reconnaître rapidement l’antigène lors d’une nouvelle exposition.',
                    ],
                    [
                        'question' => 'Parmi ces propositions, laquelle correspond à un mécanisme spécifique de l’immunité adaptative ?',
                        'choices' => [
                            ['choice_text' => 'La production d’anticorps dirigés contre un antigène précis', 'is_correct' => true],
                            ['choice_text' => 'La barrière de la peau', 'is_correct' => false],
                            ['choice_text' => 'L’acidité de l’estomac', 'is_correct' => false],
                            ['choice_text' => 'Le mouvement des cils respiratoires', 'is_correct' => false],
                        ],
                        'explanation' => 'La production d’anticorps spécifiques d’un antigène constitue un exemple classique d’immunité adaptative.',
                    ],
                    [
                        'question' => 'Une plaie devient rouge, chaude et gonflée quelques heures après une blessure. Quelle interprétation est la plus cohérente ?',
                        'choices' => [
                            ['choice_text' => 'Une inflammation locale est en cours', 'is_correct' => true],
                            ['choice_text' => 'Le sang a cessé de circuler partout', 'is_correct' => false],
                            ['choice_text' => 'Les globules rouges se sont transformés en lymphocytes', 'is_correct' => false],
                            ['choice_text' => 'La personne a obligatoirement une maladie auto-immune', 'is_correct' => false],
                        ],
                        'explanation' => 'Rougeur, chaleur et gonflement sont des signes classiques de l’inflammation locale après une agression tissulaire.',
                    ],
                    [
                        'question' => 'Un vaccin contient un antigène qui ne peut pas provoquer la maladie ciblée dans les conditions prévues. Quel est le principe recherché ?',
                        'choices' => [
                            ['choice_text' => 'Déclencher une réponse immunitaire et une mémoire sans provoquer la maladie correspondante', 'is_correct' => true],
                            ['choice_text' => 'Supprimer tous les leucocytes pendant plusieurs semaines', 'is_correct' => false],
                            ['choice_text' => 'Empêcher toute inflammation à vie', 'is_correct' => false],
                            ['choice_text' => 'Remplacer les anticorps par des hormones', 'is_correct' => false],
                        ],
                        'explanation' => 'La vaccination cherche à induire une protection immunitaire tout en utilisant une forme ou un composant qui ne provoque pas la maladie correspondante dans les conditions prévues.',
                    ],
                    [
                        'question' => 'Une allergie et une infection peuvent toutes deux provoquer une inflammation. Quelle différence fondamentale faut-il garder en tête ?',
                        'choices' => [
                            ['choice_text' => 'L’allergie est une réponse immunitaire contre un allergène, alors que l’infection implique un agent infectieux', 'is_correct' => true],
                            ['choice_text' => 'Une infection ne peut jamais provoquer d’inflammation', 'is_correct' => false],
                            ['choice_text' => 'Une allergie est toujours causée par une bactérie', 'is_correct' => false],
                            ['choice_text' => 'Les deux sont toujours provoquées par des virus', 'is_correct' => false],
                        ],
                        'explanation' => 'Les mécanismes peuvent se recouper mais la cause n’est pas la même : allergène dans l’allergie, agent infectieux dans l’infection.',
                    ],
                    [
                        'question' => 'Un patient possède 120 unités arbitraires d’anticorps avant un rappel vaccinal et 180 unités après. De combien ont-elles augmenté ?',
                        'choices' => [
                            ['choice_text' => '60 unités', 'is_correct' => true],
                            ['choice_text' => '40 unités', 'is_correct' => false],
                            ['choice_text' => '300 unités', 'is_correct' => false],
                            ['choice_text' => '50 unités', 'is_correct' => false],
                        ],
                        'explanation' => 'L’augmentation absolue est 180 − 120 = 60 unités.',
                    ],
                    [
                        'question' => 'Quel ensemble représente correctement une chaîne simple de réponse immunitaire adaptative ?',
                        'choices' => [
                            ['choice_text' => 'Reconnaissance de l’antigène → activation lymphocytaire → expansion clonale → cellules effectrices et mémoires', 'is_correct' => true],
                            ['choice_text' => 'Digestion → respiration → coagulation → excrétion', 'is_correct' => false],
                            ['choice_text' => 'Contraction → osification → ventilation → vision', 'is_correct' => false],
                            ['choice_text' => 'Filtration → absorption → transpiration → salivation', 'is_correct' => false],
                        ],
                        'explanation' => 'Cette séquence résume de façon simplifiée comment une réponse adaptative peut se développer après reconnaissance d’un antigène.',
                    ],
                    [
                        'question' => 'Quelle phrase résume le mieux la complémentarité entre immunité innée et adaptative ?',
                        'choices' => [
                            ['choice_text' => 'L’innée agit rapidement, tandis que l’adaptative apporte une reconnaissance spécifique et une mémoire', 'is_correct' => true],
                            ['choice_text' => 'L’innée et l’adaptative sont deux noms pour la même réponse', 'is_correct' => false],
                            ['choice_text' => 'L’adaptative fonctionne sans cellules', 'is_correct' => false],
                            ['choice_text' => 'L’innée ne possède aucune barrière', 'is_correct' => false],
                        ],
                        'explanation' => 'Les deux branches coopèrent : les défenses innées interviennent rapidement et contribuent à activer la réponse adaptative, qui apporte spécificité et mémoire.',
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
