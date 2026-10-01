<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class HumanBiologyBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'human-biology')->firstOrFail();

        $quizzes = [
            [
                'title' => 'Introduction à la biologie humaine',
                'description' => 'Découvrir l’organisation générale du corps humain, ses grandes fonctions et les bases de la vie humaine.',
                'settings' => ['duration' => 15, 'passing_score' => 50],
                'questions' => [
                    [
                        'question' => 'Quel niveau d’organisation vient juste après celui de la cellule chez l’être humain ?',
                        'choices' => [
                            ['choice_text' => 'Le tissu', 'is_correct' => true],
                            ['choice_text' => 'L’organe', 'is_correct' => false],
                            ['choice_text' => 'Le système', 'is_correct' => false],
                            ['choice_text' => 'L’organisme', 'is_correct' => false],
                        ],
                        'explanation' => 'Un ensemble de cellules semblables et spécialisées forme un tissu. L’organe vient ensuite dans la hiérarchie.'
                    ],
                    [
                        'question' => 'Pourquoi dit-on que la peau est un organe et non une simple cellule ?',
                        'choices' => [
                            ['choice_text' => 'Parce qu’elle ne contient pas de cellules vivantes', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’elle rassemble plusieurs tissus qui travaillent ensemble', 'is_correct' => true],
                            ['choice_text' => 'Parce qu’elle ne fait partie d’aucun système', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’elle est uniquement composée de protéines', 'is_correct' => false],
                        ],
                        'explanation' => 'Un organe associe plusieurs tissus et réalise une ou plusieurs fonctions. La peau comprend notamment un tissu épithélial, du tissu conjonctif et des structures nerveuses.'
                    ],
                    [
                        'question' => 'Un élève court cinq minutes. Quelle réponse montre le mieux que plusieurs systèmes du corps travaillent ensemble ?',
                        'choices' => [
                            ['choice_text' => 'Le système digestif agit seul', 'is_correct' => false],
                            ['choice_text' => 'Les systèmes respiratoire, circulatoire et musculaire coopèrent', 'is_correct' => true],
                            ['choice_text' => 'Seul le squelette change d’activité', 'is_correct' => false],
                            ['choice_text' => 'Les cheveux produisent davantage d’énergie', 'is_correct' => false],
                        ],
                        'explanation' => 'Pendant un effort, les muscles ont davantage besoin de dioxygène et de nutriments. Les systèmes respiratoire et circulatoire les approvisionnent.'
                    ],
                    [
                        'question' => 'Laquelle de ces propositions décrit le mieux un organisme humain ?',
                        'choices' => [
                            ['choice_text' => 'Une seule cellule spécialisée', 'is_correct' => false],
                            ['choice_text' => 'Un ensemble coordonné de cellules, tissus, organes et systèmes', 'is_correct' => true],
                            ['choice_text' => 'Un groupe d’organes identiques', 'is_correct' => false],
                            ['choice_text' => 'Uniquement le squelette et les muscles', 'is_correct' => false],
                        ],
                        'explanation' => 'L’organisme humain résulte de l’organisation et de la coopération de nombreux niveaux biologiques.'
                    ],
                    [
                        'question' => 'Après avoir mangé, quel est l’objectif général de la digestion ?',
                        'choices' => [
                            ['choice_text' => 'Transformer les aliments en nutriments utilisables par les cellules', 'is_correct' => true],
                            ['choice_text' => 'Empêcher toute absorption intestinale', 'is_correct' => false],
                            ['choice_text' => 'Produire uniquement du dioxyde de carbone', 'is_correct' => false],
                            ['choice_text' => 'Remplacer les globules rouges', 'is_correct' => false],
                        ],
                        'explanation' => 'La digestion transforme les aliments en molécules assez petites pour être absorbées et utilisées par les cellules.'
                    ],
                    [
                        'question' => 'Vrai ou faux : le sang est considéré comme un tissu.',
                        'choices' => [
                            ['choice_text' => 'Vrai', 'is_correct' => true],
                            ['choice_text' => 'Faux', 'is_correct' => false],
                            ['choice_text' => 'Seulement chez l’enfant', 'is_correct' => false],
                            ['choice_text' => 'Seulement après un effort', 'is_correct' => false],
                        ],
                        'explanation' => 'Le sang est un tissu conjonctif liquide. Il contient des cellules et une matrice liquide appelée plasma.'
                    ],
                    [
                        'question' => 'Un patient a très soif après une journée chaude. Quelle fonction générale du corps est surtout concernée ?',
                        'choices' => [
                            ['choice_text' => 'Le maintien de l’équilibre interne', 'is_correct' => true],
                            ['choice_text' => 'La fabrication des os', 'is_correct' => false],
                            ['choice_text' => 'La coloration de la peau', 'is_correct' => false],
                            ['choice_text' => 'La production de cheveux', 'is_correct' => false],
                        ],
                        'explanation' => 'La soif participe au maintien de l’homéostasie, notamment en aidant à corriger une perte d’eau.'
                    ],
                    [
                        'question' => 'Quel exemple illustre une interaction entre l’être humain et son environnement ?',
                        'choices' => [
                            ['choice_text' => 'La pupille qui se contracte face à une lumière forte', 'is_correct' => true],
                            ['choice_text' => 'L’ADN contenu dans le noyau', 'is_correct' => false],
                            ['choice_text' => 'La forme d’un globule rouge isolé', 'is_correct' => false],
                            ['choice_text' => 'La présence de calcium dans un os', 'is_correct' => false],
                        ],
                        'explanation' => 'La contraction de la pupille est une réponse de l’organisme à une information provenant de l’environnement.'
                    ],
                    [
                        'question' => 'Si toutes les cellules d’un organisme arrêtaient de communiquer entre elles, quelle conséquence serait la plus probable ?',
                        'choices' => [
                            ['choice_text' => 'Le fonctionnement coordonné du corps serait perturbé', 'is_correct' => true],
                            ['choice_text' => 'Les organes deviendraient instantanément plus grands', 'is_correct' => false],
                            ['choice_text' => 'La digestion deviendrait plus rapide', 'is_correct' => false],
                            ['choice_text' => 'Le squelette disparaîtrait', 'is_correct' => false],
                        ],
                        'explanation' => 'Les cellules échangent des signaux chimiques ou électriques. Cette communication permet de coordonner les fonctions du corps.'
                    ],
                    [
                        'question' => 'Pourquoi l’homéostasie est-elle importante ?',
                        'choices' => [
                            ['choice_text' => 'Parce qu’elle maintient certaines conditions internes dans des limites compatibles avec la vie', 'is_correct' => true],
                            ['choice_text' => 'Parce qu’elle empêche toutes les maladies', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’elle rend les cellules immortelles', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’elle supprime les besoins énergétiques', 'is_correct' => false],
                        ],
                        'explanation' => 'L’homéostasie maintient des paramètres internes, comme la température ou la glycémie, dans des plages compatibles avec le fonctionnement des cellules.'
                    ],
                ],
            ],
            [
                'title' => 'Cellules, tissus et organes humains',
                'description' => 'Étudier les principales caractéristiques des cellules humaines et les relations entre cellules, tissus et organes.',
                'settings' => ['duration' => 15, 'passing_score' => 55],
                'questions' => [
                    [
                        'question' => 'Quel compartiment cellulaire contient l’essentiel de l’ADN d’une cellule humaine ?',
                        'choices' => [
                            ['choice_text' => 'Le noyau', 'is_correct' => true],
                            ['choice_text' => 'Le lysosome', 'is_correct' => false],
                            ['choice_text' => 'Le ribosome', 'is_correct' => false],
                            ['choice_text' => 'La membrane', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans la plupart des cellules humaines, l’ADN se trouve principalement dans le noyau, sous forme de chromosomes.'
                    ],
                    [
                        'question' => 'À quoi servent principalement les mitochondries ?',
                        'choices' => [
                            ['choice_text' => 'À produire une grande partie de l’ATP utilisable par la cellule', 'is_correct' => true],
                            ['choice_text' => 'À stocker l’ADN extracellulaire', 'is_correct' => false],
                            ['choice_text' => 'À digérer les aliments dans l’intestin', 'is_correct' => false],
                            ['choice_text' => 'À fabriquer les os', 'is_correct' => false],
                        ],
                        'explanation' => 'Les mitochondries réalisent une grande partie de la respiration cellulaire et produisent de l’ATP, une forme d’énergie directement utilisable.'
                    ],
                    [
                        'question' => 'Quelle structure contrôle les échanges entre la cellule et son milieu ?',
                        'choices' => [
                            ['choice_text' => 'La membrane plasmique', 'is_correct' => true],
                            ['choice_text' => 'Le noyau', 'is_correct' => false],
                            ['choice_text' => 'Le nucléole', 'is_correct' => false],
                            ['choice_text' => 'Le centrosome', 'is_correct' => false],
                        ],
                        'explanation' => 'La membrane plasmique constitue une barrière sélective qui régule les entrées et sorties de nombreuses substances.'
                    ],
                    [
                        'question' => 'Deux cellules humaines ont la même information génétique, mais des fonctions différentes. Quelle explication convient le mieux ?',
                        'choices' => [
                            ['choice_text' => 'Elles n’expriment pas exactement les mêmes gènes', 'is_correct' => true],
                            ['choice_text' => 'Elles possèdent toujours des nombres différents de chromosomes', 'is_correct' => false],
                            ['choice_text' => 'L’une n’a pas de membrane', 'is_correct' => false],
                            ['choice_text' => 'Elles sont forcément de deux espèces différentes', 'is_correct' => false],
                        ],
                        'explanation' => 'La spécialisation cellulaire dépend notamment de l’expression différentielle des gènes.'
                    ],
                    [
                        'question' => 'Lequel est un exemple de tissu ?',
                        'choices' => [
                            ['choice_text' => 'Tissu musculaire', 'is_correct' => true],
                            ['choice_text' => 'Estomac', 'is_correct' => false],
                            ['choice_text' => 'Cœur', 'is_correct' => false],
                            ['choice_text' => 'Peau entière', 'is_correct' => false],
                        ],
                        'explanation' => 'Le tissu musculaire est formé de cellules musculaires organisées pour se contracter. L’estomac, le cœur et la peau sont des organes.'
                    ],
                    [
                        'question' => 'Une blessure légère détruit quelques cellules de l’épiderme. Quelle réponse est la plus probable ?',
                        'choices' => [
                            ['choice_text' => 'Des cellules voisines peuvent se multiplier pour remplacer les cellules perdues', 'is_correct' => true],
                            ['choice_text' => 'Le squelette va produire de nouvelles cellules de peau directement', 'is_correct' => false],
                            ['choice_text' => 'Les globules rouges deviennent des neurones', 'is_correct' => false],
                            ['choice_text' => 'La blessure ne peut jamais être réparée', 'is_correct' => false],
                        ],
                        'explanation' => 'De nombreux tissus humains possèdent une capacité de renouvellement. Les cellules basales de l’épiderme peuvent se diviser pour remplacer les cellules perdues.'
                    ],
                    [
                        'question' => 'Quelle affirmation distingue le mieux un organe d’un tissu ?',
                        'choices' => [
                            ['choice_text' => 'Un organe associe généralement plusieurs tissus ayant des rôles complémentaires', 'is_correct' => true],
                            ['choice_text' => 'Un tissu contient toujours un seul type de molécule', 'is_correct' => false],
                            ['choice_text' => 'Un organe ne contient aucune cellule', 'is_correct' => false],
                            ['choice_text' => 'Un tissu est toujours plus grand qu’un organe', 'is_correct' => false],
                        ],
                        'explanation' => 'Un organe est une structure organisée formée de plusieurs tissus qui coopèrent pour une fonction.'
                    ],
                    [
                        'question' => 'Pourquoi les ribosomes sont-ils importants ?',
                        'choices' => [
                            ['choice_text' => 'Ils participent à la fabrication des protéines', 'is_correct' => true],
                            ['choice_text' => 'Ils stockent le glucose dans les os', 'is_correct' => false],
                            ['choice_text' => 'Ils transportent l’oxygène dans le sang', 'is_correct' => false],
                            ['choice_text' => 'Ils détruisent les chromosomes', 'is_correct' => false],
                        ],
                        'explanation' => 'Les ribosomes assemblent des acides aminés pour produire des protéines à partir d’instructions portées par l’ARN messager.'
                    ],
                    [
                        'question' => 'Une cellule possède beaucoup de lysosomes. À quelle activité peut-on associer cette caractéristique ?',
                        'choices' => [
                            ['choice_text' => 'À la digestion intracellulaire de certaines molécules et structures', 'is_correct' => true],
                            ['choice_text' => 'À la conduction des influx nerveux à longue distance', 'is_correct' => false],
                            ['choice_text' => 'À la circulation du sang', 'is_correct' => false],
                            ['choice_text' => 'À la fixation de l’oxygène par l’hémoglobine', 'is_correct' => false],
                        ],
                        'explanation' => 'Les lysosomes contiennent des enzymes capables de dégrader diverses molécules et certains composants cellulaires.'
                    ],
                    [
                        'question' => 'Pourquoi une cellule humaine doit-elle rester en contact avec son environnement interne ?',
                        'choices' => [
                            ['choice_text' => 'Pour recevoir des nutriments, échanger des gaz et éliminer des déchets', 'is_correct' => true],
                            ['choice_text' => 'Pour absorber directement les rayons du Soleil', 'is_correct' => false],
                            ['choice_text' => 'Pour fabriquer de l’oxygène à partir d’azote', 'is_correct' => false],
                            ['choice_text' => 'Pour éviter toute communication avec les autres cellules', 'is_correct' => false],
                        ],
                        'explanation' => 'Les cellules dépendent du milieu intérieur pour leurs apports et l’élimination de leurs déchets.'
                    ],
                ],
            ],
            [
                'title' => 'Nutrition et digestion',
                'description' => 'Comprendre le rôle des aliments, des nutriments, du tube digestif et de l’absorption intestinale.',
                'settings' => ['duration' => 20, 'passing_score' => 60],
                'questions' => [
                    [
                        'question' => 'Quel nutriment fournit principalement des acides aminés nécessaires à la fabrication de nombreuses protéines ?',
                        'choices' => [
                            ['choice_text' => 'Les protéines alimentaires', 'is_correct' => true],
                            ['choice_text' => 'Les vitamines', 'is_correct' => false],
                            ['choice_text' => 'L’eau', 'is_correct' => false],
                            ['choice_text' => 'Les sels minéraux', 'is_correct' => false],
                        ],
                        'explanation' => 'La digestion des protéines libère des acides aminés, utilisés notamment pour fabriquer les protéines de l’organisme.'
                    ],
                    [
                        'question' => 'Dans quelle partie du tube digestif se déroule la majeure partie de l’absorption des nutriments ?',
                        'choices' => [
                            ['choice_text' => 'L’intestin grêle', 'is_correct' => true],
                            ['choice_text' => 'L’œsophage', 'is_correct' => false],
                            ['choice_text' => 'Le gros intestin', 'is_correct' => false],
                            ['choice_text' => 'L’estomac uniquement', 'is_correct' => false],
                        ],
                        'explanation' => 'L’intestin grêle possède une grande surface d’absorption grâce à ses replis, villosités et microvillosités.'
                    ],
                    [
                        'question' => 'Pourquoi mâcher les aliments facilite-t-il la digestion ?',
                        'choices' => [
                            ['choice_text' => 'Parce que cela augmente la surface de contact des aliments et les mélange à la salive', 'is_correct' => true],
                            ['choice_text' => 'Parce que cela transforme toutes les protéines en vitamines', 'is_correct' => false],
                            ['choice_text' => 'Parce que cela remplace l’action de l’intestin', 'is_correct' => false],
                            ['choice_text' => 'Parce que cela empêche toute enzyme d’agir', 'is_correct' => false],
                        ],
                        'explanation' => 'La mastication fragmente les aliments et facilite leur mélange avec les sucs digestifs.'
                    ],
                    [
                        'question' => 'Quel est le rôle principal de la bile dans la digestion ?',
                        'choices' => [
                            ['choice_text' => 'Elle aide à disperser les lipides en fines gouttelettes', 'is_correct' => true],
                            ['choice_text' => 'Elle digère directement l’ADN des cellules', 'is_correct' => false],
                            ['choice_text' => 'Elle transforme le glucose en globules rouges', 'is_correct' => false],
                            ['choice_text' => 'Elle remplace toutes les enzymes digestives', 'is_correct' => false],
                        ],
                        'explanation' => 'Les sels biliaires émulsifient les lipides, ce qui facilite l’action des enzymes digestives sur les graisses.'
                    ],
                    [
                        'question' => 'Après un repas riche en glucides, quelle molécule peut augmenter dans le sang ?',
                        'choices' => [
                            ['choice_text' => 'Le glucose', 'is_correct' => true],
                            ['choice_text' => 'L’oxygène uniquement', 'is_correct' => false],
                            ['choice_text' => 'Le calcium osseux', 'is_correct' => false],
                            ['choice_text' => 'L’hémoglobine libre', 'is_correct' => false],
                        ],
                        'explanation' => 'Les glucides digérés fournissent notamment du glucose, qui passe dans le sang après absorption intestinale.'
                    ],
                    [
                        'question' => 'Une personne manque de fibres alimentaires. Quelle fonction digestive peut être affectée ?',
                        'choices' => [
                            ['choice_text' => 'Le transit intestinal', 'is_correct' => true],
                            ['choice_text' => 'La fixation de l’oxygène par les globules rouges', 'is_correct' => false],
                            ['choice_text' => 'La conduction nerveuse du cerveau', 'is_correct' => false],
                            ['choice_text' => 'La fabrication des anticorps uniquement', 'is_correct' => false],
                        ],
                        'explanation' => 'Les fibres alimentaires favorisent notamment un transit intestinal normal en augmentant le volume des selles.'
                    ],
                    [
                        'question' => 'Quelle séquence correspond au trajet habituel des aliments ?',
                        'choices' => [
                            ['choice_text' => 'Bouche → œsophage → estomac → intestin grêle → gros intestin', 'is_correct' => true],
                            ['choice_text' => 'Bouche → trachée → estomac → reins', 'is_correct' => false],
                            ['choice_text' => 'Bouche → cœur → intestin grêle → poumons', 'is_correct' => false],
                            ['choice_text' => 'Bouche → foie → œsophage → gros intestin', 'is_correct' => false],
                        ],
                        'explanation' => 'Les aliments suivent le tube digestif : bouche, pharynx, œsophage, estomac, intestin grêle puis gros intestin.'
                    ],
                    [
                        'question' => 'Un nutriment est absorbé par l’intestin et atteint ensuite le foie par le sang. Lequel correspond le mieux à cette situation ?',
                        'choices' => [
                            ['choice_text' => 'Le glucose issu de la digestion des glucides', 'is_correct' => true],
                            ['choice_text' => 'Une dent intacte', 'is_correct' => false],
                            ['choice_text' => 'Un morceau entier de pain', 'is_correct' => false],
                            ['choice_text' => 'Une molécule d’air inspiré', 'is_correct' => false],
                        ],
                        'explanation' => 'Une grande partie des nutriments hydrosolubles absorbés dans l’intestin rejoint le foie par la veine porte hépatique.'
                    ],
                    [
                        'question' => 'Pourquoi l’intestin grêle est-il bien adapté à l’absorption ?',
                        'choices' => [
                            ['choice_text' => 'Sa paroi est riche en replis et en villosités qui augmentent la surface disponible', 'is_correct' => true],
                            ['choice_text' => 'Il ne contient aucune cellule', 'is_correct' => false],
                            ['choice_text' => 'Il est entièrement constitué d’os', 'is_correct' => false],
                            ['choice_text' => 'Il empêche les nutriments de passer dans le sang', 'is_correct' => false],
                        ],
                        'explanation' => 'Les replis, villosités et microvillosités augmentent fortement la surface d’échange entre le contenu intestinal et le milieu intérieur.'
                    ],
                    [
                        'question' => 'Une personne ingère plus d’énergie qu’elle n’en dépense durablement. Que peut-il se produire ?',
                        'choices' => [
                            ['choice_text' => 'Une partie de l’excédent énergétique peut être stockée dans l’organisme', 'is_correct' => true],
                            ['choice_text' => 'Toute l’énergie supplémentaire est immédiatement évacuée dans l’urine', 'is_correct' => false],
                            ['choice_text' => 'Le corps cesse d’utiliser le glucose', 'is_correct' => false],
                            ['choice_text' => 'Les poumons convertissent l’excédent en oxygène', 'is_correct' => false],
                        ],
                        'explanation' => 'Lorsque les apports énergétiques dépassent durablement les dépenses, l’organisme peut stocker une partie de cette énergie, notamment sous forme de lipides.'
                    ],
                ],
            ],
            [
                'title' => 'Respiration, sang et circulation',
                'description' => 'Découvrir le lien entre respiration, transport du dioxygène, circulation sanguine et besoins des cellules.',
                'settings' => ['duration' => 20, 'passing_score' => 60],
                'questions' => [
                    [
                        'question' => 'Dans quel organe se produisent principalement les échanges de dioxygène et de dioxyde de carbone entre l’air et le sang ?',
                        'choices' => [
                            ['choice_text' => 'Les poumons', 'is_correct' => true],
                            ['choice_text' => 'Le foie', 'is_correct' => false],
                            ['choice_text' => 'Les reins', 'is_correct' => false],
                            ['choice_text' => 'L’estomac', 'is_correct' => false],
                        ],
                        'explanation' => 'Les échanges gazeux ont lieu principalement au niveau des alvéoles pulmonaires, en contact étroit avec de nombreux capillaires.'
                    ],
                    [
                        'question' => 'Quel est le rôle principal de l’hémoglobine ?',
                        'choices' => [
                            ['choice_text' => 'Fixer et transporter une grande partie du dioxygène dans le sang', 'is_correct' => true],
                            ['choice_text' => 'Digérer les lipides', 'is_correct' => false],
                            ['choice_text' => 'Produire les neurones', 'is_correct' => false],
                            ['choice_text' => 'Détruire les os', 'is_correct' => false],
                        ],
                        'explanation' => 'L’hémoglobine présente dans les globules rouges se lie au dioxygène et permet son transport vers les tissus.'
                    ],
                    [
                        'question' => 'Quand on inspire, l’air entrant atteint finalement quelle structure où ont lieu les échanges gazeux ?',
                        'choices' => [
                            ['choice_text' => 'Les alvéoles pulmonaires', 'is_correct' => true],
                            ['choice_text' => 'Les ventricules cardiaques', 'is_correct' => false],
                            ['choice_text' => 'Les reins', 'is_correct' => false],
                            ['choice_text' => 'L’intestin grêle', 'is_correct' => false],
                        ],
                        'explanation' => 'L’air inspiré circule jusqu’aux alvéoles, dont les parois très fines favorisent les échanges de gaz avec le sang.'
                    ],
                    [
                        'question' => 'Le cœur joue principalement quel rôle ?',
                        'choices' => [
                            ['choice_text' => 'Propulser le sang dans les vaisseaux', 'is_correct' => true],
                            ['choice_text' => 'Fabriquer la bile', 'is_correct' => false],
                            ['choice_text' => 'Filtrer directement l’air inspiré', 'is_correct' => false],
                            ['choice_text' => 'Produire les globules rouges chez l’adulte', 'is_correct' => false],
                        ],
                        'explanation' => 'Le cœur est une pompe musculaire qui propulse le sang dans la circulation pulmonaire et systémique.'
                    ],
                    [
                        'question' => 'Quel vaisseau ramène normalement le sang vers le cœur ?',
                        'choices' => [
                            ['choice_text' => 'Une veine', 'is_correct' => true],
                            ['choice_text' => 'Une artère', 'is_correct' => false],
                            ['choice_text' => 'Un bronchiole', 'is_correct' => false],
                            ['choice_text' => 'Un tendon', 'is_correct' => false],
                        ],
                        'explanation' => 'Les veines conduisent le sang vers le cœur, tandis que les artères l’éloignent du cœur.'
                    ],
                    [
                        'question' => 'Pendant un effort physique, pourquoi la fréquence cardiaque augmente-t-elle ?',
                        'choices' => [
                            ['choice_text' => 'Pour augmenter le débit sanguin vers les tissus qui ont davantage de besoins', 'is_correct' => true],
                            ['choice_text' => 'Pour arrêter les échanges gazeux', 'is_correct' => false],
                            ['choice_text' => 'Pour diminuer le transport de nutriments', 'is_correct' => false],
                            ['choice_text' => 'Pour empêcher les muscles d’utiliser l’oxygène', 'is_correct' => false],
                        ],
                        'explanation' => 'Une fréquence cardiaque plus élevée contribue à augmenter le débit cardiaque et donc l’apport de dioxygène et de nutriments aux tissus actifs.'
                    ],
                    [
                        'question' => 'Quel calcul donne un débit cardiaque approximatif ?',
                        'choices' => [
                            ['choice_text' => 'Fréquence cardiaque × volume d’éjection systolique', 'is_correct' => true],
                            ['choice_text' => 'Taille × température', 'is_correct' => false],
                            ['choice_text' => 'Masse × âge', 'is_correct' => false],
                            ['choice_text' => 'Pression × volume pulmonaire uniquement', 'is_correct' => false],
                        ],
                        'explanation' => 'Le débit cardiaque est égal à la fréquence cardiaque multipliée par le volume de sang éjecté à chaque battement.'
                    ],
                    [
                        'question' => 'Un adulte a une fréquence cardiaque de 70 battements par minute et un volume d’éjection de 70 mL. Quel débit cardiaque approximatif obtient-on ?',
                        'choices' => [
                            ['choice_text' => '4 900 mL/min, soit 4,9 L/min', 'is_correct' => true],
                            ['choice_text' => '980 mL/min', 'is_correct' => false],
                            ['choice_text' => '49 L/min', 'is_correct' => false],
                            ['choice_text' => '140 mL/min', 'is_correct' => false],
                        ],
                        'explanation' => '70 × 70 = 4 900 mL par minute, soit environ 4,9 L/min.'
                    ],
                    [
                        'question' => 'Pourquoi les capillaires sont-ils adaptés aux échanges avec les tissus ?',
                        'choices' => [
                            ['choice_text' => 'Leur paroi très fine facilite le passage de petites molécules entre le sang et les cellules', 'is_correct' => true],
                            ['choice_text' => 'Ils sont composés d’os', 'is_correct' => false],
                            ['choice_text' => 'Ils transportent uniquement l’air', 'is_correct' => false],
                            ['choice_text' => 'Ils empêchent tout échange avec les cellules', 'is_correct' => false],
                        ],
                        'explanation' => 'Les capillaires possèdent une paroi très fine et forment de vastes réseaux proches des cellules.'
                    ],
                    [
                        'question' => 'Une personne respire rapidement pendant quelques minutes après une course. Quelle explication convient le mieux ?',
                        'choices' => [
                            ['choice_text' => 'Le corps cherche à apporter davantage de dioxygène et à éliminer plus de dioxyde de carbone', 'is_correct' => true],
                            ['choice_text' => 'Le cerveau cesse de fonctionner', 'is_correct' => false],
                            ['choice_text' => 'Le sang arrête de circuler', 'is_correct' => false],
                            ['choice_text' => 'Les globules rouges deviennent des cellules musculaires', 'is_correct' => false],
                        ],
                        'explanation' => 'L’augmentation de la ventilation aide à répondre à la demande métabolique accrue et à éliminer le dioxyde de carbone produit.'
                    ],
                ],
            ],
            [
                'title' => 'Élimination, eau et équilibre interne',
                'description' => 'Explorer le rôle des reins, de l’eau et des mécanismes qui maintiennent les constantes du milieu intérieur.',
                'settings' => ['duration' => 20, 'passing_score' => 65],
                'questions' => [
                    [
                        'question' => 'Quel organe filtre le sang et participe à la formation de l’urine ?',
                        'choices' => [
                            ['choice_text' => 'Le rein', 'is_correct' => true],
                            ['choice_text' => 'Le poumon', 'is_correct' => false],
                            ['choice_text' => 'Le pancréas', 'is_correct' => false],
                            ['choice_text' => 'La rate', 'is_correct' => false],
                        ],
                        'explanation' => 'Les reins filtrent le sang, réabsorbent certaines substances utiles et participent à la formation de l’urine.'
                    ],
                    [
                        'question' => 'Quel déchet azoté est principalement éliminé dans l’urine humaine ?',
                        'choices' => [
                            ['choice_text' => 'L’urée', 'is_correct' => true],
                            ['choice_text' => 'L’oxygène', 'is_correct' => false],
                            ['choice_text' => 'Le glucose alimentaire intact', 'is_correct' => false],
                            ['choice_text' => 'L’hémoglobine', 'is_correct' => false],
                        ],
                        'explanation' => 'L’urée est produite principalement par le foie lors du métabolisme des acides aminés puis éliminée par les reins.'
                    ],
                    [
                        'question' => 'Pourquoi est-il important de boire de l’eau régulièrement ?',
                        'choices' => [
                            ['choice_text' => 'L’eau participe aux réactions biologiques, au transport des substances et à la régulation de la température', 'is_correct' => true],
                            ['choice_text' => 'Elle remplace toujours tous les nutriments', 'is_correct' => false],
                            ['choice_text' => 'Elle empêche toute transpiration', 'is_correct' => false],
                            ['choice_text' => 'Elle transforme directement les protéines en énergie', 'is_correct' => false],
                        ],
                        'explanation' => 'L’eau est indispensable à de nombreuses fonctions : milieu des réactions, transport, élimination et thermorégulation.'
                    ],
                    [
                        'question' => 'Après avoir beaucoup transpiré, l’urine peut devenir plus concentrée. Pourquoi ?',
                        'choices' => [
                            ['choice_text' => 'Les reins conservent davantage d’eau pour limiter sa perte', 'is_correct' => true],
                            ['choice_text' => 'Les reins produisent plus d’oxygène', 'is_correct' => false],
                            ['choice_text' => 'Le cœur cesse de pomper', 'is_correct' => false],
                            ['choice_text' => 'L’intestin transforme l’urine en sang', 'is_correct' => false],
                        ],
                        'explanation' => 'En cas de perte d’eau, l’organisme augmente la conservation rénale de l’eau, ce qui peut rendre l’urine plus concentrée.'
                    ],
                    [
                        'question' => 'Quel rôle général joue la transpiration ?',
                        'choices' => [
                            ['choice_text' => 'Elle participe au refroidissement du corps par évaporation de l’eau', 'is_correct' => true],
                            ['choice_text' => 'Elle augmente directement le nombre de globules rouges', 'is_correct' => false],
                            ['choice_text' => 'Elle digère les lipides', 'is_correct' => false],
                            ['choice_text' => 'Elle remplace l’urine', 'is_correct' => false],
                        ],
                        'explanation' => 'L’évaporation de la sueur à la surface de la peau évacue de la chaleur.'
                    ],
                    [
                        'question' => 'La température du corps augmente après une longue exposition à la chaleur. Quelle réponse physiologique favorise son refroidissement ?',
                        'choices' => [
                            ['choice_text' => 'Augmentation de la transpiration et vasodilatation cutanée', 'is_correct' => true],
                            ['choice_text' => 'Arrêt complet du débit sanguin cutané', 'is_correct' => false],
                            ['choice_text' => 'Diminution de la circulation vers la peau uniquement', 'is_correct' => false],
                            ['choice_text' => 'Production immédiate de plus de chaleur musculaire', 'is_correct' => false],
                        ],
                        'explanation' => 'La transpiration favorise l’évaporation et la vasodilatation cutanée augmente les pertes de chaleur vers l’environnement.'
                    ],
                    [
                        'question' => 'Un test urinaire révèle du glucose chez une personne. Pourquoi ce résultat peut-il être inhabituel ?',
                        'choices' => [
                            ['choice_text' => 'Le glucose est normalement presque entièrement réabsorbé par les reins', 'is_correct' => true],
                            ['choice_text' => 'Les reins produisent toujours beaucoup de glucose dans l’urine', 'is_correct' => false],
                            ['choice_text' => 'Le glucose ne peut jamais circuler dans le sang', 'is_correct' => false],
                            ['choice_text' => 'Le glucose est une cellule sanguine', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans des conditions normales, le glucose filtré est presque entièrement réabsorbé. Sa présence notable dans l’urine peut signaler un déséquilibre.'
                    ],
                    [
                        'question' => 'Quel ensemble correspond le mieux à des fonctions des reins ?',
                        'choices' => [
                            ['choice_text' => 'Élimination de déchets, régulation de l’eau et participation à l’équilibre acido-basique', 'is_correct' => true],
                            ['choice_text' => 'Digestion des aliments, vision et audition', 'is_correct' => false],
                            ['choice_text' => 'Production de salive, bile et insuline uniquement', 'is_correct' => false],
                            ['choice_text' => 'Contraction des muscles volontaires', 'is_correct' => false],
                        ],
                        'explanation' => 'Les reins ont plusieurs fonctions, notamment l’élimination de déchets et la régulation de l’eau, des ions et de l’équilibre acido-basique.'
                    ],
                    [
                        'question' => 'Une personne perd beaucoup d’eau sans boire suffisamment. Quel effet est le plus probable ?',
                        'choices' => [
                            ['choice_text' => 'Le volume d’eau corporelle diminue et la soif augmente', 'is_correct' => true],
                            ['choice_text' => 'La masse d’eau corporelle augmente', 'is_correct' => false],
                            ['choice_text' => 'Le sang devient instantanément absent', 'is_correct' => false],
                            ['choice_text' => 'La température devient toujours plus basse', 'is_correct' => false],
                        ],
                        'explanation' => 'La perte d’eau entraîne une diminution du compartiment hydrique et stimule des mécanismes de conservation ainsi que la sensation de soif.'
                    ],
                    [
                        'question' => 'Le terme « homéostasie » désigne principalement :',
                        'choices' => [
                            ['choice_text' => 'Le maintien relativement stable des conditions internes malgré les variations extérieures', 'is_correct' => true],
                            ['choice_text' => 'La transformation des aliments en lumière', 'is_correct' => false],
                            ['choice_text' => 'La croissance des os uniquement', 'is_correct' => false],
                            ['choice_text' => 'La disparition des cellules usées sans remplacement', 'is_correct' => false],
                        ],
                        'explanation' => 'L’homéostasie désigne la régulation dynamique du milieu intérieur afin de maintenir des conditions compatibles avec le fonctionnement cellulaire.'
                    ],
                ],
            ],
            [
                'title' => 'Communication nerveuse, hormones et sens',
                'description' => 'Comprendre comment le système nerveux et les hormones permettent au corps de recevoir des informations et de coordonner ses réponses.',
                'settings' => ['duration' => 25, 'passing_score' => 65],
                'questions' => [
                    [
                        'question' => 'Quel organe reçoit et traite une grande partie des informations nerveuses ?',
                        'choices' => [
                            ['choice_text' => 'Le cerveau', 'is_correct' => true],
                            ['choice_text' => 'Le rein', 'is_correct' => false],
                            ['choice_text' => 'Le foie', 'is_correct' => false],
                            ['choice_text' => 'L’estomac', 'is_correct' => false],
                        ],
                        'explanation' => 'Le cerveau reçoit, traite et intègre de nombreuses informations sensorielles et participe à la commande de nombreuses réponses.'
                    ],
                    [
                        'question' => 'Quel type de cellule est spécialisé dans la transmission rapide de signaux nerveux ?',
                        'choices' => [
                            ['choice_text' => 'Le neurone', 'is_correct' => true],
                            ['choice_text' => 'Le globule rouge', 'is_correct' => false],
                            ['choice_text' => 'L’adipocyte', 'is_correct' => false],
                            ['choice_text' => 'L’ostéocyte', 'is_correct' => false],
                        ],
                        'explanation' => 'Le neurone est spécialisé dans la réception et la transmission de signaux électriques et chimiques.'
                    ],
                    [
                        'question' => 'Une personne retire sa main très rapidement après avoir touché un objet brûlant. Pourquoi la réponse peut-elle être très rapide ?',
                        'choices' => [
                            ['choice_text' => 'Un arc réflexe permet une réponse automatique avant une analyse consciente complète', 'is_correct' => true],
                            ['choice_text' => 'Le sang quitte la main instantanément', 'is_correct' => false],
                            ['choice_text' => 'Les os se contractent', 'is_correct' => false],
                            ['choice_text' => 'Les hormones digestives agissent immédiatement', 'is_correct' => false],
                        ],
                        'explanation' => 'Certains réflexes passent par des circuits nerveux courts, notamment au niveau de la moelle épinière, ce qui permet une réponse rapide.'
                    ],
                    [
                        'question' => 'Quelle différence générale distingue une hormone d’un message nerveux ?',
                        'choices' => [
                            ['choice_text' => 'Une hormone est un messager chimique transporté par le sang, alors qu’un message nerveux circule dans les neurones', 'is_correct' => true],
                            ['choice_text' => 'Une hormone est toujours électrique et un neurone toujours liquide', 'is_correct' => false],
                            ['choice_text' => 'Les hormones n’agissent jamais sur des cellules', 'is_correct' => false],
                            ['choice_text' => 'Les messages nerveux sont uniquement produits par les reins', 'is_correct' => false],
                        ],
                        'explanation' => 'Les hormones circulent dans le sang pour atteindre des cellules cibles, tandis que les neurones transmettent rapidement des signaux le long de leurs prolongements.'
                    ],
                    [
                        'question' => 'Quelle structure de l’œil contrôle la quantité de lumière qui entre ?',
                        'choices' => [
                            ['choice_text' => 'L’iris', 'is_correct' => true],
                            ['choice_text' => 'La rétine uniquement', 'is_correct' => false],
                            ['choice_text' => 'Le nerf auditif', 'is_correct' => false],
                            ['choice_text' => 'Le tympan', 'is_correct' => false],
                        ],
                        'explanation' => 'L’iris modifie le diamètre de la pupille et contrôle ainsi la quantité de lumière qui entre dans l’œil.'
                    ],
                    [
                        'question' => 'Quelle partie de l’oreille vibre sous l’effet des sons et transmet ces vibrations ?',
                        'choices' => [
                            ['choice_text' => 'Le tympan', 'is_correct' => true],
                            ['choice_text' => 'La rétine', 'is_correct' => false],
                            ['choice_text' => 'La pupille', 'is_correct' => false],
                            ['choice_text' => 'La langue', 'is_correct' => false],
                        ],
                        'explanation' => 'Le tympan est une membrane qui vibre sous l’effet des ondes sonores et transmet ces vibrations à l’oreille moyenne.'
                    ],
                    [
                        'question' => 'Après avoir mangé, quelle hormone contribue à faire diminuer la glycémie en favorisant l’entrée du glucose dans certaines cellules ?',
                        'choices' => [
                            ['choice_text' => 'L’insuline', 'is_correct' => true],
                            ['choice_text' => 'L’adrénaline', 'is_correct' => false],
                            ['choice_text' => 'La mélatonine', 'is_correct' => false],
                            ['choice_text' => 'La thyroxine uniquement', 'is_correct' => false],
                        ],
                        'explanation' => 'L’insuline favorise notamment la captation du glucose par plusieurs tissus et contribue ainsi à réduire la glycémie.'
                    ],
                    [
                        'question' => 'Un élève entend une sonnerie, tourne la tête puis se dirige vers la sortie. Quelle séquence résume le mieux l’événement ?',
                        'choices' => [
                            ['choice_text' => 'Réception sensorielle → traitement de l’information → commande motrice', 'is_correct' => true],
                            ['choice_text' => 'Digestion → filtration rénale → vision', 'is_correct' => false],
                            ['choice_text' => 'Circulation → osification → digestion', 'is_correct' => false],
                            ['choice_text' => 'Respiration → coagulation → transpiration', 'is_correct' => false],
                        ],
                        'explanation' => 'Les récepteurs sensoriels détectent le stimulus, le système nerveux traite l’information puis commande une réponse motrice.'
                    ],
                    [
                        'question' => 'Pourquoi les récepteurs sensoriels sont-ils utiles ?',
                        'choices' => [
                            ['choice_text' => 'Ils détectent des changements dans l’environnement interne ou externe', 'is_correct' => true],
                            ['choice_text' => 'Ils fabriquent tous les globules rouges', 'is_correct' => false],
                            ['choice_text' => 'Ils digèrent les protéines', 'is_correct' => false],
                            ['choice_text' => 'Ils produisent directement les os', 'is_correct' => false],
                        ],
                        'explanation' => 'Les récepteurs sensoriels transforment des informations physiques ou chimiques en signaux utilisables par le système nerveux.'
                    ],
                    [
                        'question' => 'Un stress soudain provoque une augmentation du rythme cardiaque. Quel messager est classiquement impliqué dans cette réponse rapide ?',
                        'choices' => [
                            ['choice_text' => 'L’adrénaline', 'is_correct' => true],
                            ['choice_text' => 'L’insuline', 'is_correct' => false],
                            ['choice_text' => 'La bile', 'is_correct' => false],
                            ['choice_text' => 'L’urée', 'is_correct' => false],
                        ],
                        'explanation' => 'L’adrénaline, libérée notamment par les glandes surrénales, participe à la réponse rapide de l’organisme face à un stress.'
                    ],
                ],
            ],
            [
                'title' => 'Reproduction, croissance et développement',
                'description' => 'Aborder les bases de la reproduction humaine, de la fécondation, de la croissance et du développement.',
                'settings' => ['duration' => 25, 'passing_score' => 70],
                'questions' => [
                    [
                        'question' => 'Quelle cellule sexuelle est produite par les testicules ?',
                        'choices' => [
                            ['choice_text' => 'Le spermatozoïde', 'is_correct' => true],
                            ['choice_text' => 'L’ovocyte', 'is_correct' => false],
                            ['choice_text' => 'Le globule rouge', 'is_correct' => false],
                            ['choice_text' => 'Le neurone', 'is_correct' => false],
                        ],
                        'explanation' => 'Les testicules produisent les spermatozoïdes, gamètes mâles impliqués dans la reproduction.'
                    ],
                    [
                        'question' => 'Quelle cellule sexuelle est produite par les ovaires ?',
                        'choices' => [
                            ['choice_text' => 'L’ovocyte', 'is_correct' => true],
                            ['choice_text' => 'Le spermatozoïde', 'is_correct' => false],
                            ['choice_text' => 'Le globule blanc', 'is_correct' => false],
                            ['choice_text' => 'Le kératinocyte', 'is_correct' => false],
                        ],
                        'explanation' => 'Les ovaires produisent les ovocytes, gamètes femelles.'
                    ],
                    [
                        'question' => 'La fécondation humaine correspond à :',
                        'choices' => [
                            ['choice_text' => 'La fusion des gamètes mâle et femelle pour former une cellule-œuf', 'is_correct' => true],
                            ['choice_text' => 'La division d’un globule rouge', 'is_correct' => false],
                            ['choice_text' => 'La croissance d’un os', 'is_correct' => false],
                            ['choice_text' => 'La formation d’une cellule nerveuse à partir de salive', 'is_correct' => false],
                        ],
                        'explanation' => 'La fécondation réunit le matériel génétique des deux gamètes et forme une cellule-œuf, ou zygote.'
                    ],
                    [
                        'question' => 'Après la fécondation, que se produit-il d’abord pour permettre la croissance de l’embryon ?',
                        'choices' => [
                            ['choice_text' => 'Des divisions cellulaires successives', 'is_correct' => true],
                            ['choice_text' => 'Une disparition de toutes les cellules', 'is_correct' => false],
                            ['choice_text' => 'Une transformation immédiate en organisme adulte', 'is_correct' => false],
                            ['choice_text' => 'Une production de globules rouges uniquement', 'is_correct' => false],
                        ],
                        'explanation' => 'La cellule-œuf se divise de nombreuses fois, puis les cellules se spécialisent et s’organisent au cours du développement.'
                    ],
                    [
                        'question' => 'Quelle hormone est particulièrement associée au déclenchement de nombreux changements de la puberté chez les filles ?',
                        'choices' => [
                            ['choice_text' => 'Les œstrogènes', 'is_correct' => true],
                            ['choice_text' => 'L’insuline', 'is_correct' => false],
                            ['choice_text' => 'L’adrénaline', 'is_correct' => false],
                            ['choice_text' => 'L’urée', 'is_correct' => false],
                        ],
                        'explanation' => 'Les œstrogènes participent au développement de nombreux caractères sexuels secondaires féminins et au fonctionnement reproducteur.'
                    ],
                    [
                        'question' => 'Quel rôle général jouent les chromosomes lors de la reproduction ?',
                        'choices' => [
                            ['choice_text' => 'Ils portent l’information génétique transmise des parents à l’enfant', 'is_correct' => true],
                            ['choice_text' => 'Ils transportent directement l’oxygène', 'is_correct' => false],
                            ['choice_text' => 'Ils digèrent les aliments', 'is_correct' => false],
                            ['choice_text' => 'Ils filtrent l’urine', 'is_correct' => false],
                        ],
                        'explanation' => 'Les chromosomes contiennent l’ADN et portent des gènes qui constituent une partie essentielle de l’information génétique héritée.'
                    ],
                    [
                        'question' => 'Un adolescent grandit et sa masse corporelle augmente. Qu’est-ce qui contribue directement à cette croissance ?',
                        'choices' => [
                            ['choice_text' => 'La multiplication des cellules et leur augmentation de taille', 'is_correct' => true],
                            ['choice_text' => 'La disparition de toutes les cellules anciennes', 'is_correct' => false],
                            ['choice_text' => 'La transformation de l’eau en chromosomes', 'is_correct' => false],
                            ['choice_text' => 'L’arrêt complet des divisions cellulaires', 'is_correct' => false],
                        ],
                        'explanation' => 'La croissance résulte notamment de la multiplication cellulaire et de l’augmentation de la taille et de la spécialisation des cellules.'
                    ],
                    [
                        'question' => 'Pourquoi une grossesse nécessite-t-elle des échanges entre le sang maternel et le sang fœtal, sans mélange complet de ces deux sangs ?',
                        'choices' => [
                            ['choice_text' => 'Le placenta permet des échanges de gaz et de nutriments entre les deux circulations', 'is_correct' => true],
                            ['choice_text' => 'Le fœtus respire directement l’air des poumons maternels', 'is_correct' => false],
                            ['choice_text' => 'Le placenta transforme tous les nutriments en os', 'is_correct' => false],
                            ['choice_text' => 'Le sang fœtal circule normalement dans les poumons de la mère', 'is_correct' => false],
                        ],
                        'explanation' => 'Le placenta constitue une interface d’échanges. Les gaz, nutriments et déchets traversent des barrières adaptées, tandis que les deux circulations ne se mélangent pas normalement.'
                    ],
                    [
                        'question' => 'Quel événement marque le début d’un nouveau cycle menstruel ?',
                        'choices' => [
                            ['choice_text' => 'Le premier jour des règles', 'is_correct' => true],
                            ['choice_text' => 'La naissance d’un nouveau-né', 'is_correct' => false],
                            ['choice_text' => 'La fécondation obligatoire', 'is_correct' => false],
                            ['choice_text' => 'La croissance d’un os', 'is_correct' => false],
                        ],
                        'explanation' => 'En pratique, le premier jour des menstruations est utilisé comme jour 1 du cycle menstruel.'
                    ],
                    [
                        'question' => 'Une famille souhaite comprendre pourquoi deux enfants de mêmes parents peuvent être différents l’un de l’autre. Quelle explication est correcte ?',
                        'choices' => [
                            ['choice_text' => 'Ils héritent de combinaisons différentes de variantes génétiques et subissent aussi des influences environnementales', 'is_correct' => true],
                            ['choice_text' => 'Ils doivent avoir exactement le même patrimoine génétique', 'is_correct' => false],
                            ['choice_text' => 'L’environnement n’a jamais d’effet sur le phénotype', 'is_correct' => false],
                            ['choice_text' => 'Les chromosomes disparaissent après la naissance', 'is_correct' => false],
                        ],
                        'explanation' => 'La reproduction sexuée produit des combinaisons génétiques variées. Le phénotype dépend également de l’environnement et des interactions entre gènes et milieu.'
                    ],
                ],
            ],
            [
                'title' => 'Biologie humaine intégrée : situations de la vie quotidienne',
                'description' => 'Mobiliser les connaissances de base en biologie humaine dans des situations concrètes liées à l’alimentation, l’effort, le sommeil et la santé.',
                'settings' => ['duration' => 20, 'passing_score' => 60],
                'questions' => [
                    [
                        'question' => 'Avant une séance de sport, pourquoi le corps a-t-il besoin de glucose disponible ?',
                        'choices' => [
                            ['choice_text' => 'Les cellules peuvent utiliser le glucose comme source d’énergie', 'is_correct' => true],
                            ['choice_text' => 'Le glucose remplace l’oxygène dans les poumons', 'is_correct' => false],
                            ['choice_text' => 'Le glucose fabrique directement les os', 'is_correct' => false],
                            ['choice_text' => 'Le glucose empêche le cœur de battre', 'is_correct' => false],
                        ],
                        'explanation' => 'Le glucose est un substrat énergétique important. Les cellules peuvent l’utiliser pour produire de l’ATP.'
                    ],
                    [
                        'question' => 'Pendant une randonnée, une personne respire plus vite et son cœur bat plus rapidement. Quelle relation explique le mieux ces deux réponses ?',
                        'choices' => [
                            ['choice_text' => 'Les muscles actifs ont besoin de davantage de dioxygène et produisent davantage de dioxyde de carbone', 'is_correct' => true],
                            ['choice_text' => 'Les reins cessent de fonctionner', 'is_correct' => false],
                            ['choice_text' => 'La digestion devient inutile', 'is_correct' => false],
                            ['choice_text' => 'Les globules rouges se transforment en muscles', 'is_correct' => false],
                        ],
                        'explanation' => 'L’effort augmente le métabolisme musculaire. La ventilation et la circulation s’adaptent pour fournir davantage de dioxygène et éliminer davantage de dioxyde de carbone.'
                    ],
                    [
                        'question' => 'Une personne a 38,8 °C de température et se trouve dans une pièce très chaude. Quel mécanisme aide normalement à limiter l’augmentation de température ?',
                        'choices' => [
                            ['choice_text' => 'La transpiration et l’augmentation du flux sanguin cutané', 'is_correct' => true],
                            ['choice_text' => 'La fermeture complète des vaisseaux de la peau', 'is_correct' => false],
                            ['choice_text' => 'L’arrêt de la respiration', 'is_correct' => false],
                            ['choice_text' => 'La diminution de toute circulation sanguine', 'is_correct' => false],
                        ],
                        'explanation' => 'La transpiration et la vasodilatation cutanée favorisent les pertes de chaleur. Une fièvre peut cependant modifier le point de consigne de la régulation thermique.'
                    ],
                    [
                        'question' => 'Après plusieurs heures sans boire, une personne ressent fortement la soif. Quel ensemble participe à cette régulation ?',
                        'choices' => [
                            ['choice_text' => 'Le système nerveux, avec des signaux hormonaux et rénaux qui favorisent la conservation de l’eau', 'is_correct' => true],
                            ['choice_text' => 'Le squelette uniquement', 'is_correct' => false],
                            ['choice_text' => 'Les cheveux et les ongles', 'is_correct' => false],
                            ['choice_text' => 'Les dents seulement', 'is_correct' => false],
                        ],
                        'explanation' => 'La régulation hydrique implique notamment l’hypothalamus, la sensation de soif, l’hormone antidiurétique et l’action des reins.'
                    ],
                    [
                        'question' => 'Pourquoi le sommeil est-il important pour le fonctionnement humain ?',
                        'choices' => [
                            ['choice_text' => 'Il accompagne des processus de récupération et participe au bon fonctionnement du cerveau et de l’organisme', 'is_correct' => true],
                            ['choice_text' => 'Il remplace totalement l’alimentation', 'is_correct' => false],
                            ['choice_text' => 'Il empêche toutes les infections', 'is_correct' => false],
                            ['choice_text' => 'Il arrête définitivement l’activité neuronale', 'is_correct' => false],
                        ],
                        'explanation' => 'Le sommeil participe à la récupération, à certains processus de mémoire et à la régulation de plusieurs fonctions physiologiques.'
                    ],
                    [
                        'question' => 'Une personne mange un repas très salé et boit ensuite beaucoup d’eau. Quelle idée explique cette réponse ?',
                        'choices' => [
                            ['choice_text' => 'L’organisme régule son équilibre hydrique et osmotique afin de maintenir le milieu intérieur', 'is_correct' => true],
                            ['choice_text' => 'Le sel transforme l’eau en oxygène', 'is_correct' => false],
                            ['choice_text' => 'Les reins cessent de filtrer', 'is_correct' => false],
                            ['choice_text' => 'Le cerveau ne reçoit plus de sang', 'is_correct' => false],
                        ],
                        'explanation' => 'L’eau et les ions doivent rester dans des proportions compatibles avec le fonctionnement cellulaire. La soif et les reins participent à cette régulation.'
                    ],
                    [
                        'question' => 'Lors d’une petite coupure, le sang forme progressivement un caillot. Quelle fonction du sang intervient ?',
                        'choices' => [
                            ['choice_text' => 'La coagulation contribue à limiter la perte de sang', 'is_correct' => true],
                            ['choice_text' => 'La digestion des aliments', 'is_correct' => false],
                            ['choice_text' => 'La production de bile', 'is_correct' => false],
                            ['choice_text' => 'La conduction des sons', 'is_correct' => false],
                        ],
                        'explanation' => 'La coagulation déclenche une succession de réactions qui forme un caillot et aide à arrêter le saignement.'
                    ],
                    [
                        'question' => 'Une personne mange moins de vitamine C que nécessaire pendant longtemps. Quelle fonction peut être perturbée ?',
                        'choices' => [
                            ['choice_text' => 'La synthèse de certaines molécules et le maintien de tissus comme le collagène', 'is_correct' => true],
                            ['choice_text' => 'Le transport de l’oxygène par l’hémoglobine uniquement', 'is_correct' => false],
                            ['choice_text' => 'La formation de l’urine sans aucun autre effet', 'is_correct' => false],
                            ['choice_text' => 'La production directe de lumière par les yeux', 'is_correct' => false],
                        ],
                        'explanation' => 'La vitamine C est nécessaire à plusieurs réactions biologiques, notamment à la synthèse normale du collagène.'
                    ],
                    [
                        'question' => 'Pourquoi une alimentation variée est-elle généralement recommandée ?',
                        'choices' => [
                            ['choice_text' => 'Elle facilite l’apport de différents nutriments, vitamines et minéraux nécessaires au fonctionnement du corps', 'is_correct' => true],
                            ['choice_text' => 'Parce qu’un seul aliment contient toujours tous les nutriments en quantité parfaite', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’elle empêche toute fatigue', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’elle remplace l’eau', 'is_correct' => false],
                        ],
                        'explanation' => 'Une alimentation variée augmente les chances de couvrir les besoins en macronutriments et micronutriments.'
                    ],
                    [
                        'question' => 'Une personne enchaîne un sprint puis récupère. Sa respiration et sa fréquence cardiaque redescendent progressivement. Que montre cette évolution ?',
                        'choices' => [
                            ['choice_text' => 'Les mécanismes de régulation ramènent progressivement les fonctions vers leur niveau de repos', 'is_correct' => true],
                            ['choice_text' => 'Le corps a complètement cessé de produire de l’énergie', 'is_correct' => false],
                            ['choice_text' => 'Les reins arrêtent de filtrer pendant la récupération', 'is_correct' => false],
                            ['choice_text' => 'Les muscles n’utilisent plus aucun nutriment', 'is_correct' => false],
                        ],
                        'explanation' => 'Après l’effort, les systèmes de régulation ajustent progressivement la ventilation, la circulation et le métabolisme vers les conditions de repos.'
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
