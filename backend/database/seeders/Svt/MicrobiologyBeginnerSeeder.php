<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class MicrobiologyBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'microbiology')->firstOrFail();

        $quizSettings = [
            0 => ['duration' => 15, 'passing_score' => '50'],
            1 => ['duration' => 15, 'passing_score' => '50'],
            2 => ['duration' => 20, 'passing_score' => 55],
            3 => ['duration' => 20, 'passing_score' => 60],
            4 => ['duration' => 20, 'passing_score' => 60],
            5 => ['duration' => 25, 'passing_score' => 60],
            6 => ['duration' => 25, 'passing_score' => 65],
            7 => ['duration' => 25, 'passing_score' => 65],
            8 => ['duration' => 25, 'passing_score' => 70],
        ];

        $quizzes = [
            [
                'title' => 'Découvrir le monde microbien',
                'description' => 'Identifiez les principaux groupes de microorganismes, leurs caractéristiques et les idées essentielles pour débuter en microbiologie.',
                'questions' => [
                    [
                        'question' => 'Pourquoi les bactéries sont-elles souvent étudiées en microbiologie ?',
                        'choices' => [
                            ['choice_text' => 'Parce qu’elles sont des cellules microscopiques très répandues', 'is_correct' => true],
                            ['choice_text' => 'Parce qu’elles possèdent toutes un noyau', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’elles sont toutes responsables de maladies', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’elles sont toutes visibles à l’œil nu', 'is_correct' => false],
                        ],
                        'explanation' => 'Les bactéries sont généralement microscopiques et présentes dans de nombreux milieux. Elles jouent des rôles utiles ou peuvent parfois être pathogènes.'
                    ],
                    [
                        'question' => 'Lequel de ces organismes est un virus ?',
                        'choices' => [
                            ['choice_text' => 'La levure', 'is_correct' => false],
                            ['choice_text' => 'Le virus de la grippe', 'is_correct' => true],
                            ['choice_text' => 'Escherichia coli', 'is_correct' => false],
                            ['choice_text' => 'Une amibe', 'is_correct' => false],
                        ],
                        'explanation' => 'Le virus de la grippe est un virus. Une levure est un champignon, E. coli est une bactérie et l’amibe est un organisme eucaryote unicellulaire.'
                    ],
                    [
                        'question' => 'Quel instrument permet normalement d’observer des bactéries individuelles en laboratoire ?',
                        'choices' => [
                            ['choice_text' => 'Un thermomètre', 'is_correct' => false],
                            ['choice_text' => 'Un microscope', 'is_correct' => true],
                            ['choice_text' => 'Une balance', 'is_correct' => false],
                            ['choice_text' => 'Un spectromètre de masse', 'is_correct' => false],
                        ],
                        'explanation' => 'La plupart des bactéries sont trop petites pour être vues à l’œil nu. Le microscope permet de les observer directement ou après une coloration.'
                    ],
                    [
                        'question' => 'Une colonie bactérienne visible sur une gélose correspond généralement à :',
                        'choices' => [
                            ['choice_text' => 'Une seule molécule d’ADN', 'is_correct' => false],
                            ['choice_text' => 'Un ensemble de cellules issues de divisions successives', 'is_correct' => true],
                            ['choice_text' => 'Un seul virus géant', 'is_correct' => false],
                            ['choice_text' => 'Une goutte de milieu sans cellules', 'is_correct' => false],
                        ],
                        'explanation' => 'Une colonie se forme lorsque des cellules microbiennes se multiplient sur un milieu solide. Elle contient donc de nombreuses cellules.'
                    ],
                    [
                        'question' => 'Une bactérie qui vit normalement sur la peau sans provoquer de maladie est un exemple de :',
                        'choices' => [
                            ['choice_text' => 'Microbiote', 'is_correct' => true],
                            ['choice_text' => 'Antibiotique', 'is_correct' => false],
                            ['choice_text' => 'Antigène artificiel', 'is_correct' => false],
                            ['choice_text' => 'Spore minérale', 'is_correct' => false],
                        ],
                        'explanation' => 'Le microbiote désigne l’ensemble des microorganismes vivant habituellement sur ou dans un organisme. Beaucoup d’entre eux sont inoffensifs ou utiles.'
                    ],
                    [
                        'question' => 'Pourquoi les microorganismes sont-ils importants dans l’environnement ?',
                        'choices' => [
                            ['choice_text' => 'Ils participent notamment à la décomposition de la matière', 'is_correct' => true],
                            ['choice_text' => 'Ils empêchent toujours la croissance des plantes', 'is_correct' => false],
                            ['choice_text' => 'Ils fabriquent tous de l’oxygène', 'is_correct' => false],
                            ['choice_text' => 'Ils remplacent les minéraux du sol', 'is_correct' => false],
                        ],
                        'explanation' => 'De nombreux microorganismes décomposent la matière organique et contribuent ainsi au recyclage des éléments dans les écosystèmes.'
                    ],
                    [
                        'question' => 'Une élève laisse une tranche de pain humide à température ambiante. Après quelques jours, des taches apparaissent. Quelle interprétation est la plus raisonnable ?',
                        'choices' => [
                            ['choice_text' => 'Des microorganismes ont probablement colonisé le pain', 'is_correct' => true],
                            ['choice_text' => 'Le pain est devenu radioactif', 'is_correct' => false],
                            ['choice_text' => 'L’eau du pain s’est transformée en métal', 'is_correct' => false],
                            ['choice_text' => 'Les bactéries sont devenues visibles à cause de la lumière', 'is_correct' => false],
                        ],
                        'explanation' => 'Les taches peuvent être dues à des moisissures ou à d’autres microorganismes qui se développent lorsque les conditions leur sont favorables.'
                    ],
                    [
                        'question' => 'La différence essentielle entre une bactérie et une cellule humaine est que la bactérie :',
                        'choices' => [
                            ['choice_text' => 'N’a généralement pas de noyau délimité par une membrane', 'is_correct' => true],
                            ['choice_text' => 'Ne contient jamais d’ADN', 'is_correct' => false],
                            ['choice_text' => 'N’a jamais de membrane', 'is_correct' => false],
                            ['choice_text' => 'Est toujours multicellulaire', 'is_correct' => false],
                        ],
                        'explanation' => 'Les bactéries sont des cellules procaryotes : leur ADN n’est pas enfermé dans un noyau membranaire. Elles possèdent néanmoins une membrane et de l’ADN.'
                    ],
                    [
                        'question' => 'Un étudiant confond systématiquement un virus et une bactérie. Quel critère simple peut l’aider à les distinguer ?',
                        'choices' => [
                            ['choice_text' => 'Une bactérie est une cellule, alors qu’un virus n’est pas une cellule', 'is_correct' => true],
                            ['choice_text' => 'Un virus est toujours plus grand qu’une bactérie', 'is_correct' => false],
                            ['choice_text' => 'Une bactérie contient toujours un noyau', 'is_correct' => false],
                            ['choice_text' => 'Un virus se nourrit comme une cellule autonome', 'is_correct' => false],
                        ],
                        'explanation' => 'Une bactérie est un organisme cellulaire. Un virus est une particule infectieuse qui ne possède pas l’organisation complète d’une cellule et dépend d’une cellule hôte pour se multiplier.'
                    ],
                    [
                        'question' => 'Une culture contient beaucoup de bactéries mais aucune ne semble se développer sur un milieu sans source de nutriments. Quelle conclusion est la plus logique ?',
                        'choices' => [
                            ['choice_text' => 'Les bactéries ont besoin de ressources adaptées à leur croissance', 'is_correct' => true],
                            ['choice_text' => 'Les bactéries se multiplient sans matière ni énergie', 'is_correct' => false],
                            ['choice_text' => 'Le microscope empêche toujours leur multiplication', 'is_correct' => false],
                            ['choice_text' => 'La présence d’ADN suffit à produire une colonie', 'is_correct' => false],
                        ],
                        'explanation' => 'Comme les autres êtres vivants, les bactéries utilisent des matières et des sources d’énergie pour produire de nouvelles cellules. Un milieu inadapté limite leur croissance.'
                    ],
                ],
            ],
            [
                'title' => 'Structure et diversité des bactéries',
                'description' => 'Apprenez à reconnaître les grandes structures bactériennes et à relier leur organisation à certaines fonctions.',
                'questions' => [
                    [
                        'question' => 'Comment appelle-t-on une bactérie de forme sphérique ?',
                        'choices' => [
                            ['choice_text' => 'Coque', 'is_correct' => true],
                            ['choice_text' => 'Bacille', 'is_correct' => false],
                            ['choice_text' => 'Spirille', 'is_correct' => false],
                            ['choice_text' => 'Filament', 'is_correct' => false],
                        ],
                        'explanation' => 'Une coque est une bactérie de forme globalement sphérique. Les bacilles sont en forme de bâtonnet et les spirilles sont spiralés.'
                    ],
                    [
                        'question' => 'Quelle structure contrôle surtout les échanges entre une bactérie et son environnement ?',
                        'choices' => [
                            ['choice_text' => 'La membrane plasmique', 'is_correct' => true],
                            ['choice_text' => 'Le ribosome', 'is_correct' => false],
                            ['choice_text' => 'Le chromosome', 'is_correct' => false],
                            ['choice_text' => 'La capsule uniquement', 'is_correct' => false],
                        ],
                        'explanation' => 'La membrane plasmique constitue une barrière sélective qui régule l’entrée et la sortie de nombreuses substances.'
                    ],
                    [
                        'question' => 'Chez une bactérie, les ribosomes servent principalement à :',
                        'choices' => [
                            ['choice_text' => 'Fabriquer des protéines', 'is_correct' => true],
                            ['choice_text' => 'Stocker l’ADN', 'is_correct' => false],
                            ['choice_text' => 'Former la paroi à l’extérieur de la cellule', 'is_correct' => false],
                            ['choice_text' => 'Déplacer directement le chromosome', 'is_correct' => false],
                        ],
                        'explanation' => 'Les ribosomes lisent l’information portée par les ARN messagers et assemblent des acides aminés pour former des protéines.'
                    ],
                    [
                        'question' => 'La paroi bactérienne contribue principalement à :',
                        'choices' => [
                            ['choice_text' => 'Maintenir la forme et résister à la pression osmotique', 'is_correct' => true],
                            ['choice_text' => 'Fabriquer les protéines', 'is_correct' => false],
                            ['choice_text' => 'Copier l’ADN viral', 'is_correct' => false],
                            ['choice_text' => 'Transformer directement la lumière en ADN', 'is_correct' => false],
                        ],
                        'explanation' => 'La paroi apporte un soutien mécanique et aide la cellule à résister à la pression osmotique. Elle participe aussi à la forme de la bactérie.'
                    ],
                    [
                        'question' => 'À quoi servent les flagelles chez certaines bactéries ?',
                        'choices' => [
                            ['choice_text' => 'À assurer la mobilité', 'is_correct' => true],
                            ['choice_text' => 'À remplacer le chromosome', 'is_correct' => false],
                            ['choice_text' => 'À produire toutes les enzymes', 'is_correct' => false],
                            ['choice_text' => 'À transformer une bactérie en cellule humaine', 'is_correct' => false],
                        ],
                        'explanation' => 'Les flagelles sont des structures locomotrices présentes chez certaines bactéries. Leur mouvement peut propulser la cellule dans un liquide.'
                    ],
                    [
                        'question' => 'Une bactérie possède une capsule externe. Quel avantage peut-elle apporter dans certains cas ?',
                        'choices' => [
                            ['choice_text' => 'Elle peut aider la bactérie à résister à certaines agressions', 'is_correct' => true],
                            ['choice_text' => 'Elle remplace tous les ribosomes', 'is_correct' => false],
                            ['choice_text' => 'Elle empêche toujours la bactérie de se multiplier', 'is_correct' => false],
                            ['choice_text' => 'Elle transforme l’ADN en glucides', 'is_correct' => false],
                        ],
                        'explanation' => 'Une capsule peut protéger certaines bactéries contre la dessiccation ou certaines défenses de l’hôte et favoriser leur adhérence aux surfaces.'
                    ],
                    [
                        'question' => 'Deux bactéries ont la même forme générale mais des besoins nutritionnels différents. Que peut-on en déduire ?',
                        'choices' => [
                            ['choice_text' => 'La forme seule ne suffit pas à déterminer leur mode de vie', 'is_correct' => true],
                            ['choice_text' => 'Elles sont forcément la même espèce', 'is_correct' => false],
                            ['choice_text' => 'Leur ADN est forcément identique', 'is_correct' => false],
                            ['choice_text' => 'Une seule d’entre elles possède une membrane', 'is_correct' => false],
                        ],
                        'explanation' => 'La morphologie apporte des informations utiles, mais l’identification d’une bactérie dépend de plusieurs critères, dont ses propriétés génétiques et physiologiques.'
                    ],
                    [
                        'question' => 'Pourquoi la présence d’une paroi rend-elle certaines bactéries sensibles à des traitements qui ciblent cette structure ?',
                        'choices' => [
                            ['choice_text' => 'Parce que la paroi est indispensable à leur protection mécanique', 'is_correct' => true],
                            ['choice_text' => 'Parce qu’elle contient toutes leurs molécules d’ADN', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’elle sert de noyau', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’une bactérie ne peut pas survivre sans chlorophylle', 'is_correct' => false],
                        ],
                        'explanation' => 'La paroi contribue à maintenir l’intégrité de la bactérie. Lorsqu’elle est fortement altérée, la cellule peut ne plus résister à la pression exercée par son environnement.'
                    ],
                    [
                        'question' => 'Une souche bactérienne mobile perd ses flagelles. Quelle conséquence est la plus probable ?',
                        'choices' => [
                            ['choice_text' => 'Elle se déplace moins facilement dans un milieu liquide', 'is_correct' => true],
                            ['choice_text' => 'Elle cesse immédiatement de posséder de l’ADN', 'is_correct' => false],
                            ['choice_text' => 'Elle devient automatiquement un virus', 'is_correct' => false],
                            ['choice_text' => 'Elle gagne nécessairement un noyau', 'is_correct' => false],
                        ],
                        'explanation' => 'Les flagelles participent à la locomotion de certaines bactéries. Leur perte peut donc réduire la capacité de déplacement sans transformer la nature cellulaire de la bactérie.'
                    ],
                    [
                        'question' => 'Un technicien observe une bactérie allongée, sans noyau apparent, qui se déplace grâce à une structure filamenteuse. Quel ensemble de caractéristiques est cohérent ?',
                        'choices' => [
                            ['choice_text' => 'Bacille, cellule procaryote et présence possible d’un flagelle', 'is_correct' => true],
                            ['choice_text' => 'Coque, cellule eucaryote et noyau obligatoire', 'is_correct' => false],
                            ['choice_text' => 'Virus, noyau et paroi végétale', 'is_correct' => false],
                            ['choice_text' => 'Levure, chloroplaste et flagelle bactérien', 'is_correct' => false],
                        ],
                        'explanation' => 'Une bactérie allongée est un bacille. Les bactéries sont procaryotes et certaines possèdent des flagelles permettant le déplacement.'
                    ],
                ],
            ],
            [
                'title' => 'Croissance et conditions de vie des microorganismes',
                'description' => 'Explorez les facteurs qui influencent la croissance microbienne : température, oxygène, eau et disponibilité des nutriments.',
                'questions' => [
                    [
                        'question' => 'Pour se multiplier, une bactérie a généralement besoin :',
                        'choices' => [
                            ['choice_text' => 'De matière et d’une source d’énergie adaptées', 'is_correct' => true],
                            ['choice_text' => 'Uniquement de lumière visible', 'is_correct' => false],
                            ['choice_text' => 'Uniquement d’oxygène', 'is_correct' => false],
                            ['choice_text' => 'D’un noyau fonctionnel', 'is_correct' => false],
                        ],
                        'explanation' => 'La croissance microbienne nécessite des ressources permettant de fabriquer les constituants cellulaires et de fournir l’énergie nécessaire aux activités de la cellule.'
                    ],
                    [
                        'question' => 'Que signifie « température optimale de croissance » pour un microorganisme ?',
                        'choices' => [
                            ['choice_text' => 'La température où sa croissance est la plus favorable', 'is_correct' => true],
                            ['choice_text' => 'La température où il meurt forcément', 'is_correct' => false],
                            ['choice_text' => 'La température de congélation de l’eau', 'is_correct' => false],
                            ['choice_text' => 'Une température identique pour tous les microbes', 'is_correct' => false],
                        ],
                        'explanation' => 'Chaque microorganisme possède une plage de température compatible avec sa croissance. La température optimale correspond au meilleur fonctionnement global de ses activités.'
                    ],
                    [
                        'question' => 'Pourquoi le réfrigérateur ralentit-il généralement la multiplication de nombreux microorganismes ?',
                        'choices' => [
                            ['choice_text' => 'Le froid ralentit de nombreuses réactions cellulaires', 'is_correct' => true],
                            ['choice_text' => 'Le froid détruit automatiquement toutes les bactéries', 'is_correct' => false],
                            ['choice_text' => 'Le froid retire tout l’ADN des cellules', 'is_correct' => false],
                            ['choice_text' => 'Le froid transforme les bactéries en virus', 'is_correct' => false],
                        ],
                        'explanation' => 'Une température basse ralentit souvent les réactions biochimiques et la division cellulaire. Elle ne tue cependant pas nécessairement tous les microorganismes.'
                    ],
                    [
                        'question' => 'Une bactérie qui se développe seulement en présence d’oxygène est qualifiée de :',
                        'choices' => [
                            ['choice_text' => 'Aérobie stricte', 'is_correct' => true],
                            ['choice_text' => 'Anaérobie stricte', 'is_correct' => false],
                            ['choice_text' => 'Autotrophe obligatoire', 'is_correct' => false],
                            ['choice_text' => 'Thermophile', 'is_correct' => false],
                        ],
                        'explanation' => 'Une bactérie aérobie stricte a besoin d’oxygène pour sa croissance. Une anaérobie stricte, au contraire, ne le tolère pas.'
                    ],
                    [
                        'question' => 'Quel facteur peut limiter la croissance d’un microorganisme dans un aliment très sec ?',
                        'choices' => [
                            ['choice_text' => 'La faible disponibilité en eau', 'is_correct' => true],
                            ['choice_text' => 'L’absence obligatoire de carbone dans toutes les molécules', 'is_correct' => false],
                            ['choice_text' => 'La présence automatique d’un noyau', 'is_correct' => false],
                            ['choice_text' => 'La disparition des ribosomes', 'is_correct' => false],
                        ],
                        'explanation' => 'Les cellules ont besoin d’eau pour de nombreuses réactions biologiques. Une faible disponibilité en eau peut donc limiter la croissance de nombreux microorganismes.'
                    ],
                    [
                        'question' => 'Une culture bactérienne contient 1 000 cellules. Après une division complète où chaque cellule donne deux cellules, combien en obtient-on approximativement ?',
                        'choices' => [
                            ['choice_text' => '2 000', 'is_correct' => true],
                            ['choice_text' => '1 001', 'is_correct' => false],
                            ['choice_text' => '500', 'is_correct' => false],
                            ['choice_text' => '3 000', 'is_correct' => false],
                        ],
                        'explanation' => 'Lors d’une division donnant deux cellules par cellule initiale, 1 000 cellules deviennent 1 000 × 2 = 2 000 cellules.'
                    ],
                    [
                        'question' => 'Une souche pousse bien à 37 °C mais beaucoup moins à 5 °C. Quel facteur explique directement cette différence ?',
                        'choices' => [
                            ['choice_text' => 'La température', 'is_correct' => true],
                            ['choice_text' => 'La couleur de la boîte', 'is_correct' => false],
                            ['choice_text' => 'La forme du microscope', 'is_correct' => false],
                            ['choice_text' => 'La masse du bouchon du tube', 'is_correct' => false],
                        ],
                        'explanation' => 'Les conditions de température influencent l’activité enzymatique et la vitesse de croissance. Une souche peut donc se développer plus rapidement à une température proche de son optimum.'
                    ],
                    [
                        'question' => 'Deux cultures identiques reçoivent la même quantité de bactéries. La première reçoit suffisamment de nutriments, la seconde en reçoit très peu. Que peut-on prévoir ?',
                        'choices' => [
                            ['choice_text' => 'La première devrait généralement atteindre une croissance plus importante', 'is_correct' => true],
                            ['choice_text' => 'La seconde doit forcément croître plus vite', 'is_correct' => false],
                            ['choice_text' => 'Les deux cultures auront toujours exactement la même croissance', 'is_correct' => false],
                            ['choice_text' => 'Les nutriments n’ont aucun rôle pour les bactéries', 'is_correct' => false],
                        ],
                        'explanation' => 'La disponibilité en nutriments influence la croissance. Un milieu pauvre peut limiter la production de nouveaux constituants cellulaires et donc le nombre de divisions.'
                    ],
                    [
                        'question' => 'Un laboratoire mesure la croissance d’une culture et observe qu’elle augmente rapidement pendant plusieurs heures, puis ralentit fortement. Quelle explication simple est plausible ?',
                        'choices' => [
                            ['choice_text' => 'Des ressources deviennent limitées et les déchets s’accumulent', 'is_correct' => true],
                            ['choice_text' => 'Les bactéries acquièrent toutes un noyau', 'is_correct' => false],
                            ['choice_text' => 'La gravité disparaît dans le tube', 'is_correct' => false],
                            ['choice_text' => 'Les cellules cessent automatiquement d’avoir de l’ADN', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans une culture fermée, les nutriments peuvent diminuer et certains déchets s’accumuler. Ces changements rendent les conditions moins favorables à la croissance.'
                    ],
                    [
                        'question' => 'Un étudiant place deux cultures dans des milieux différents. La culture A reste oxygénée et la culture B est privée d’oxygène. A pousse, B ne pousse pas. Quelle conclusion est la plus prudente ?',
                        'choices' => [
                            ['choice_text' => 'La souche étudiée semble dépendre de l’oxygène dans ces conditions', 'is_correct' => true],
                            ['choice_text' => 'Toutes les bactéries ont besoin d’oxygène', 'is_correct' => false],
                            ['choice_text' => 'L’oxygène est toujours toxique pour les bactéries', 'is_correct' => false],
                            ['choice_text' => 'La souche est forcément un virus', 'is_correct' => false],
                        ],
                        'explanation' => 'Le résultat indique que cette souche pousse dans les conditions oxygénées testées mais pas dans les conditions sans oxygène. Il ne faut pas généraliser à toutes les bactéries.'
                    ],
                ],
            ],
            [
                'title' => 'Transmission et prévention des infections',
                'description' => 'Apprenez à reconnaître les grandes voies de transmission et les gestes de prévention contre les infections.',
                'questions' => [
                    [
                        'question' => 'Le lavage des mains réduit le risque d’infection principalement parce qu’il :',
                        'choices' => [
                            ['choice_text' => 'Élimine ou réduit de nombreux microorganismes présents sur les mains', 'is_correct' => true],
                            ['choice_text' => 'Transforme tous les microbes en vitamines', 'is_correct' => false],
                            ['choice_text' => 'Empêche toute maladie pendant plusieurs semaines', 'is_correct' => false],
                            ['choice_text' => 'Détruit uniquement les virus dans les poumons', 'is_correct' => false],
                        ],
                        'explanation' => 'Le lavage des mains enlève une partie importante des microorganismes et des saletés. Il réduit ainsi la probabilité de les transférer vers la bouche, le nez, les yeux ou d’autres personnes.'
                    ],
                    [
                        'question' => 'Une infection transmise par des gouttelettes respiratoires peut être favorisée par :',
                        'choices' => [
                            ['choice_text' => 'Des contacts rapprochés avec une personne infectée', 'is_correct' => true],
                            ['choice_text' => 'La présence de lumière dans une pièce vide', 'is_correct' => false],
                            ['choice_text' => 'Une poignée de porte propre uniquement', 'is_correct' => false],
                            ['choice_text' => 'L’absence complète de personnes', 'is_correct' => false],
                        ],
                        'explanation' => 'Les gouttelettes respiratoires peuvent atteindre des personnes proches lors de la toux, des éternuements ou de certaines interactions rapprochées.'
                    ],
                    [
                        'question' => 'Pourquoi faut-il généralement éviter de partager une bouteille avec une personne malade ?',
                        'choices' => [
                            ['choice_text' => 'Des microorganismes peuvent passer par les sécrétions et la salive', 'is_correct' => true],
                            ['choice_text' => 'Parce que l’eau devient immédiatement toxique', 'is_correct' => false],
                            ['choice_text' => 'Parce que les bactéries se transforment en vitamines', 'is_correct' => false],
                            ['choice_text' => 'Parce que toute maladie est forcément transmise par les aliments', 'is_correct' => false],
                        ],
                        'explanation' => 'La salive et certaines sécrétions peuvent contenir des agents infectieux. Le partage d’objets portés à la bouche peut donc faciliter la transmission dans certaines infections.'
                    ],
                    [
                        'question' => 'Un vaccin vise principalement à :',
                        'choices' => [
                            ['choice_text' => 'Préparer le système immunitaire à reconnaître un agent ou un de ses éléments', 'is_correct' => true],
                            ['choice_text' => 'Remplacer les globules rouges', 'is_correct' => false],
                            ['choice_text' => 'Détruire toutes les bactéries du corps avant toute infection', 'is_correct' => false],
                            ['choice_text' => 'Faire monter systématiquement la température corporelle', 'is_correct' => false],
                        ],
                        'explanation' => 'La vaccination entraîne le système immunitaire à reconnaître un agent infectieux ou un de ses antigènes. Elle facilite une réponse plus rapide lors d’une exposition ultérieure.'
                    ],
                    [
                        'question' => 'Quel geste est particulièrement utile pour réduire la transmission d’une infection respiratoire ?',
                        'choices' => [
                            ['choice_text' => 'Couvrir sa toux et son éternuement avec les bonnes pratiques d’hygiène', 'is_correct' => true],
                            ['choice_text' => 'Toucher souvent son visage', 'is_correct' => false],
                            ['choice_text' => 'Partager les ustensiles personnels', 'is_correct' => false],
                            ['choice_text' => 'Conserver les mouchoirs usagés sur une table', 'is_correct' => false],
                        ],
                        'explanation' => 'Couvrir correctement la toux et les éternuements limite la dispersion des gouttelettes ou particules respiratoires et réduit les contaminations autour de soi.'
                    ],
                    [
                        'question' => 'Une famille veut réduire le risque d’intoxication alimentaire. Quelle pratique est la plus adaptée ?',
                        'choices' => [
                            ['choice_text' => 'Respecter la chaîne du froid et l’hygiène lors de la préparation', 'is_correct' => true],
                            ['choice_text' => 'Laisser systématiquement les aliments cuits plusieurs jours à température ambiante', 'is_correct' => false],
                            ['choice_text' => 'Mélanger les aliments crus et cuits sur la même surface sans nettoyage', 'is_correct' => false],
                            ['choice_text' => 'Utiliser les mêmes ustensiles sales pour tous les aliments', 'is_correct' => false],
                        ],
                        'explanation' => 'Le contrôle de la température, le nettoyage et la séparation des aliments crus et cuits limitent la croissance microbienne et la contamination croisée.'
                    ],
                    [
                        'question' => 'Une personne touche une poignée de porte contaminée puis se frotte les yeux. Quel mécanisme de transmission est illustré ?',
                        'choices' => [
                            ['choice_text' => 'Le transfert indirect d’un agent infectieux par une surface', 'is_correct' => true],
                            ['choice_text' => 'La transmission génétique héréditaire', 'is_correct' => false],
                            ['choice_text' => 'La photosynthèse', 'is_correct' => false],
                            ['choice_text' => 'La digestion extracellulaire', 'is_correct' => false],
                        ],
                        'explanation' => 'Une surface contaminée peut servir de support temporaire au transfert d’un agent infectieux vers les mains, puis vers les muqueuses comme les yeux.'
                    ],
                    [
                        'question' => 'Dans une salle de classe, plusieurs élèves ont la même infection après une période de contacts rapprochés. Quelle mesure peut aider à réduire la transmission en complément des autres précautions ?',
                        'choices' => [
                            ['choice_text' => 'Améliorer l’aération de la pièce', 'is_correct' => true],
                            ['choice_text' => 'Fermer toutes les fenêtres et augmenter le nombre d’élèves', 'is_correct' => false],
                            ['choice_text' => 'Partager les mêmes mouchoirs', 'is_correct' => false],
                            ['choice_text' => 'Supprimer le lavage des mains', 'is_correct' => false],
                        ],
                        'explanation' => 'Une bonne aération renouvelle l’air intérieur et peut réduire l’accumulation de particules respiratoires dans certaines situations.'
                    ],
                    [
                        'question' => 'Pourquoi une personne infectée peut-elle transmettre un agent pathogène avant de se sentir très malade dans certaines infections ?',
                        'choices' => [
                            ['choice_text' => 'La transmission peut commencer pendant une période où les symptômes sont absents ou faibles', 'is_correct' => true],
                            ['choice_text' => 'Les symptômes sont toujours causés par les bactéries présentes sur les vêtements', 'is_correct' => false],
                            ['choice_text' => 'Un agent infectieux ne peut jamais être présent avant les symptômes', 'is_correct' => false],
                            ['choice_text' => 'Le système immunitaire fabrique des microbes avant la maladie', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans certaines infections, une personne peut être contagieuse avant l’apparition des symptômes ou alors que ceux-ci restent faibles. Le moment de contagiosité dépend de l’agent infectieux.'
                    ],
                    [
                        'question' => 'Un restaurant a plusieurs cas de gastro-entérite après un repas. Quelle recherche serait particulièrement utile pour comprendre l’événement ?',
                        'choices' => [
                            ['choice_text' => 'Vérifier la préparation, la conservation et la provenance des aliments', 'is_correct' => true],
                            ['choice_text' => 'Mesurer uniquement la couleur des murs', 'is_correct' => false],
                            ['choice_text' => 'Compter les fenêtres sans examiner les pratiques alimentaires', 'is_correct' => false],
                            ['choice_text' => 'Ignorer les aliments consommés par les personnes malades', 'is_correct' => false],
                        ],
                        'explanation' => 'L’analyse des aliments, de leur conservation, de la préparation et des pratiques d’hygiène peut aider à identifier une source commune ou une contamination croisée.'
                    ],
                ],
            ],
            [
                'title' => 'Antibiotiques et résistance bactérienne',
                'description' => 'Comprenez le rôle des antibiotiques, les erreurs fréquentes et la manière dont la résistance bactérienne peut apparaître et se diffuser.',
                'questions' => [
                    [
                        'question' => 'Les antibiotiques sont utilisés principalement contre:',
                        'choices' => [
                            ['choice_text' => 'Les infections bactériennes', 'is_correct' => true],
                            ['choice_text' => 'Toutes les infections virales', 'is_correct' => false],
                            ['choice_text' => 'Les fractures osseuses', 'is_correct' => false],
                            ['choice_text' => 'Les allergies uniquement', 'is_correct' => false],
                        ],
                        'explanation' => 'Les antibiotiques ciblent des bactéries ou certaines fonctions bactériennes. Ils ne sont pas des traitements généraux contre les virus.'
                    ],
                    [
                        'question' => 'Pourquoi un antibiotique n’est-il généralement pas utile contre un simple rhume viral ?',
                        'choices' => [
                            ['choice_text' => 'Parce que le rhume est généralement provoqué par un virus', 'is_correct' => true],
                            ['choice_text' => 'Parce que les antibiotiques ne peuvent jamais entrer dans le corps', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’un virus est toujours plus grand qu’une bactérie', 'is_correct' => false],
                            ['choice_text' => 'Parce que les bactéries n’ont pas d’ADN', 'is_correct' => false],
                        ],
                        'explanation' => 'Un antibiotique agit sur des cibles bactériennes. Un rhume viral ne présente pas ces cibles comme une infection bactérienne le ferait.'
                    ],
                    [
                        'question' => 'Que signifie « bactérie résistante à un antibiotique » ?',
                        'choices' => [
                            ['choice_text' => 'L’antibiotique est moins efficace ou inefficace contre cette bactérie', 'is_correct' => true],
                            ['choice_text' => 'La bactérie devient automatiquement inoffensive', 'is_correct' => false],
                            ['choice_text' => 'La bactérie n’a plus aucun gène', 'is_correct' => false],
                            ['choice_text' => 'La bactérie est forcément un virus', 'is_correct' => false],
                        ],
                        'explanation' => 'La résistance signifie qu’un antibiotique donné ne contrôle plus efficacement la bactérie à la dose habituelle. La résistance peut résulter de modifications génétiques ou de l’acquisition de gènes de résistance.'
                    ],
                    [
                        'question' => 'Un patient arrête son traitement antibiotique sans avis médical dès qu’il se sent mieux. Quel risque général cela peut-il poser ?',
                        'choices' => [
                            ['choice_text' => 'Une partie des bactéries peut survivre et favoriser une rechute ou une sélection de résistances', 'is_correct' => true],
                            ['choice_text' => 'Tous les virus du corps deviennent immédiatement résistants', 'is_correct' => false],
                            ['choice_text' => 'Le patient produit forcément de nouveaux globules rouges', 'is_correct' => false],
                            ['choice_text' => 'La température du corps devient définitivement plus basse', 'is_correct' => false],
                        ],
                        'explanation' => 'Le traitement doit être suivi selon la prescription. Une exposition inadéquate peut laisser survivre certaines bactéries et contribuer, dans certaines situations, à la sélection de populations moins sensibles.'
                    ],
                    [
                        'question' => 'Dans un antibiogramme, une zone claire autour d’un disque d’antibiotique indique généralement:',
                        'choices' => [
                            ['choice_text' => 'Une inhibition de la croissance bactérienne autour du disque', 'is_correct' => true],
                            ['choice_text' => 'Une production massive de bactéries autour du disque', 'is_correct' => false],
                            ['choice_text' => 'L’absence totale de milieu de culture', 'is_correct' => false],
                            ['choice_text' => 'La présence obligatoire d’un virus', 'is_correct' => false],
                        ],
                        'explanation' => 'La zone d’inhibition correspond à une région où les bactéries ne se sont pas développées, ce qui permet d’évaluer leur sensibilité à l’antibiotique testé.'
                    ],
                    [
                        'question' => 'Une culture produit 200 bactéries sensibles et 20 bactéries résistantes. Après exposition à un antibiotique qui élimine les sensibles mais pas les résistantes, combien reste-t-il approximativement de bactéries dans le modèle simplifié ?',
                        'choices' => [
                            ['choice_text' => '20', 'is_correct' => true],
                            ['choice_text' => '180', 'is_correct' => false],
                            ['choice_text' => '200', 'is_correct' => false],
                            ['choice_text' => '220', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans ce modèle simplifié, les 200 bactéries sensibles disparaissent tandis que les 20 résistantes survivent : 20 bactéries restent.'
                    ],
                    [
                        'question' => 'Pourquoi l’utilisation répétée et inutile d’antibiotiques peut-elle favoriser la résistance ?',
                        'choices' => [
                            ['choice_text' => 'Elle crée une pression qui élimine les bactéries sensibles et laisse davantage de possibilités aux résistantes de persister', 'is_correct' => true],
                            ['choice_text' => 'Elle transforme directement chaque bactérie sensible en virus', 'is_correct' => false],
                            ['choice_text' => 'Elle supprime toutes les mutations de l’ADN', 'is_correct' => false],
                            ['choice_text' => 'Elle empêche toujours les bactéries de se multiplier', 'is_correct' => false],
                        ],
                        'explanation' => 'Lorsque certaines bactéries possèdent déjà une résistance, l’antibiotique peut éliminer les sensibles et laisser survivre les résistantes, qui peuvent ensuite se multiplier.'
                    ],
                    [
                        'question' => 'Deux patients ont des infections bactériennes différentes. Le même antibiotique fonctionne chez le premier mais pas chez le second. Quelle explication est plausible ?',
                        'choices' => [
                            ['choice_text' => 'Les bactéries responsables peuvent avoir des sensibilités différentes à l’antibiotique', 'is_correct' => true],
                            ['choice_text' => 'Toutes les bactéries réagissent forcément de la même façon', 'is_correct' => false],
                            ['choice_text' => 'Les antibiotiques ne peuvent agir que sur le sang', 'is_correct' => false],
                            ['choice_text' => 'Le second patient n’a forcément aucune bactérie', 'is_correct' => false],
                        ],
                        'explanation' => 'Les espèces et les souches bactériennes peuvent présenter des sensibilités différentes. Certaines possèdent des mécanismes de résistance qui rendent un antibiotique inefficace.'
                    ],
                    [
                        'question' => 'Un laboratoire observe qu’après plusieurs passages en présence d’un antibiotique, la proportion de bactéries résistantes augmente. Quelle interprétation correspond le mieux au principe de sélection ?',
                        'choices' => [
                            ['choice_text' => 'Les bactéries résistantes survivent proportionnellement mieux dans ces conditions et deviennent plus représentées', 'is_correct' => true],
                            ['choice_text' => 'L’antibiotique fabrique intentionnellement un nouveau chromosome identique dans chaque bactérie', 'is_correct' => false],
                            ['choice_text' => 'Toutes les bactéries deviennent résistantes au même instant sans variation', 'is_correct' => false],
                            ['choice_text' => 'La résistance est uniquement due à la couleur du milieu', 'is_correct' => false],
                        ],
                        'explanation' => 'Une population bactérienne peut contenir des variations de sensibilité. Sous pression antibiotique, les bactéries résistantes peuvent survivre davantage et augmenter en proportion.'
                    ],
                    [
                        'question' => 'Quelle attitude contribue le mieux à limiter collectivement la résistance aux antibiotiques ?',
                        'choices' => [
                            ['choice_text' => 'Utiliser les antibiotiques lorsqu’ils sont indiqués et suivre correctement les prescriptions', 'is_correct' => true],
                            ['choice_text' => 'Garder systématiquement les restes d’antibiotiques pour une prochaine maladie', 'is_correct' => false],
                            ['choice_text' => 'Prendre un antibiotique dès qu’on a de la fièvre, quelle qu’en soit la cause', 'is_correct' => false],
                            ['choice_text' => 'Partager son traitement avec un membre de la famille', 'is_correct' => false],
                        ],
                        'explanation' => 'Un usage approprié réduit les expositions inutiles et donc la pression de sélection favorisant les résistances. Les traitements doivent rester encadrés par un professionnel de santé.'
                    ],
                ],
            ],
            [
                'title' => 'Microbiologie appliquée à l’alimentation',
                'description' => 'Découvrez le rôle des microorganismes dans la fermentation, la conservation des aliments et les problèmes de contamination.',
                'questions' => [
                    [
                        'question' => 'Quel microorganisme est couramment utilisé pour faire lever le pain ?',
                        'choices' => [
                            ['choice_text' => 'La levure', 'is_correct' => true],
                            ['choice_text' => 'Un virus respiratoire', 'is_correct' => false],
                            ['choice_text' => 'Un globule rouge', 'is_correct' => false],
                            ['choice_text' => 'Une amibe pathogène', 'is_correct' => false],
                        ],
                        'explanation' => 'Les levures réalisent une fermentation qui produit notamment du dioxyde de carbone, contribuant à faire gonfler la pâte.'
                    ],
                    [
                        'question' => 'La fermentation lactique est importante dans la fabrication de certains aliments comme les yaourts. Elle produit notamment :',
                        'choices' => [
                            ['choice_text' => 'De l’acide lactique', 'is_correct' => true],
                            ['choice_text' => 'Du dioxyde de silicium', 'is_correct' => false],
                            ['choice_text' => 'De l’ADN humain', 'is_correct' => false],
                            ['choice_text' => 'De l’oxygène pur', 'is_correct' => false],
                        ],
                        'explanation' => 'Des bactéries lactiques transforment certains sucres en acide lactique. Cette acidification modifie le goût et la texture et contribue à la conservation.'
                    ],
                    [
                        'question' => 'Pourquoi une cuisson suffisante peut-elle réduire le risque lié à certains microorganismes alimentaires ?',
                        'choices' => [
                            ['choice_text' => 'La chaleur peut détruire ou réduire fortement de nombreux microorganismes', 'is_correct' => true],
                            ['choice_text' => 'Elle transforme toutes les bactéries en vitamines', 'is_correct' => false],
                            ['choice_text' => 'Elle ajoute automatiquement des antibiotiques aux aliments', 'is_correct' => false],
                            ['choice_text' => 'Elle retire tout l’eau des aliments dans tous les cas', 'is_correct' => false],
                        ],
                        'explanation' => 'Une température suffisante pendant une durée adaptée peut inactiver ou tuer de nombreux microorganismes. L’efficacité dépend toutefois du temps, de la température et de l’agent ciblé.'
                    ],
                    [
                        'question' => 'Pourquoi certaines fermentations permettent-elles de conserver un aliment plus longtemps ?',
                        'choices' => [
                            ['choice_text' => 'Elles peuvent créer des conditions moins favorables à certains microorganismes indésirables', 'is_correct' => true],
                            ['choice_text' => 'Elles suppriment toujours tous les microorganismes', 'is_correct' => false],
                            ['choice_text' => 'Elles transforment l’aliment en métal', 'is_correct' => false],
                            ['choice_text' => 'Elles empêchent toutes les réactions chimiques', 'is_correct' => false],
                        ],
                        'explanation' => 'La fermentation peut acidifier le milieu ou produire certaines substances qui limitent la croissance de microorganismes concurrents ou indésirables.'
                    ],
                    [
                        'question' => 'Une boîte de conserve gonfle anormalement. Pourquoi faut-il être prudent ?',
                        'choices' => [
                            ['choice_text' => 'Une activité microbienne ou une altération peut produire des gaz à l’intérieur', 'is_correct' => true],
                            ['choice_text' => 'Le gonflement prouve que l’aliment est plus riche en vitamines', 'is_correct' => false],
                            ['choice_text' => 'Une boîte gonflée est toujours parfaitement stérile', 'is_correct' => false],
                            ['choice_text' => 'Le métal fabrique naturellement des microorganismes visibles', 'is_correct' => false],
                        ],
                        'explanation' => 'Un gonflement inhabituel peut résulter de la production de gaz liée à une activité microbienne ou à une autre altération. Il constitue donc un signe qui justifie la prudence.'
                    ],
                    [
                        'question' => 'Si 1 gramme d’un aliment contient 10 000 bactéries et qu’un échantillon de 2 grammes présente la même contamination par gramme, combien de bactéries peut-on estimer dans l’échantillon ?',
                        'choices' => [
                            ['choice_text' => '20 000', 'is_correct' => true],
                            ['choice_text' => '12 000', 'is_correct' => false],
                            ['choice_text' => '10 002', 'is_correct' => false],
                            ['choice_text' => '5 000', 'is_correct' => false],
                        ],
                        'explanation' => 'À 10 000 bactéries par gramme, 2 grammes contiennent 2 × 10 000 = 20 000 bactéries dans cette estimation.'
                    ],
                    [
                        'question' => 'Une personne coupe du poulet cru puis utilise immédiatement le même couteau pour une salade sans le laver. Quel problème peut survenir ?',
                        'choices' => [
                            ['choice_text' => 'Une contamination croisée vers la salade', 'is_correct' => true],
                            ['choice_text' => 'La salade devient automatiquement fermentée', 'is_correct' => false],
                            ['choice_text' => 'Le couteau détruit toutes les bactéries lorsqu’il touche la salade', 'is_correct' => false],
                            ['choice_text' => 'Les bactéries du poulet deviennent inoffensives au contact des légumes', 'is_correct' => false],
                        ],
                        'explanation' => 'Les microorganismes présents sur l’aliment cru peuvent être transférés au second aliment par le couteau ou la planche. C’est une contamination croisée.'
                    ],
                    [
                        'question' => 'Un producteur conserve un aliment plus longtemps à basse température avant sa consommation. Quelle conséquence est généralement recherchée ?',
                        'choices' => [
                            ['choice_text' => 'Ralentir la croissance de nombreux microorganismes', 'is_correct' => true],
                            ['choice_text' => 'Accélérer toutes les fermentations indésirables', 'is_correct' => false],
                            ['choice_text' => 'Détruire instantanément toutes les spores', 'is_correct' => false],
                            ['choice_text' => 'Supprimer toute eau des aliments', 'is_correct' => false],
                        ],
                        'explanation' => 'Le froid ralentit la croissance de nombreux microorganismes. Il sert donc à prolonger la conservation, même s’il ne rend pas forcément l’aliment stérile.'
                    ],
                    [
                        'question' => 'Lors d’une fermentation alimentaire, pourquoi faut-il utiliser un microorganisme adapté ?',
                        'choices' => [
                            ['choice_text' => 'Parce que l’espèce utilisée détermine en partie les produits formés et les caractéristiques du produit', 'is_correct' => true],
                            ['choice_text' => 'Parce que tous les microorganismes produisent exactement les mêmes molécules', 'is_correct' => false],
                            ['choice_text' => 'Parce que les microorganismes n’utilisent jamais les sucres', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’une levure est toujours identique à une bactérie', 'is_correct' => false],
                        ],
                        'explanation' => 'Les microorganismes possèdent des métabolismes différents. Le choix de la souche influence donc les produits de fermentation, le goût, l’acidité et d’autres caractéristiques.'
                    ],
                    [
                        'question' => 'Un laboratoire compare deux lots de lait. Le lot A a été rapidement réfrigéré, le lot B est resté plusieurs heures à température ambiante. Quel lot présente généralement le plus grand risque de multiplication microbienne ?',
                        'choices' => [
                            ['choice_text' => 'Le lot B', 'is_correct' => true],
                            ['choice_text' => 'Le lot A', 'is_correct' => false],
                            ['choice_text' => 'Les deux présentent nécessairement le même risque', 'is_correct' => false],
                            ['choice_text' => 'Aucun lot ne peut contenir de microorganismes', 'is_correct' => false],
                        ],
                        'explanation' => 'Le lait constitue un milieu nutritif favorable et la température ambiante permet généralement une croissance plus rapide que la réfrigération.'
                    ],
                ],
            ],
            [
                'title' => 'Microscope, culture et identification',
                'description' => 'Entraînez-vous à comprendre les bases des observations microscopiques, de la culture et de l’identification des microorganismes.',
                'questions' => [
                    [
                        'question' => 'Pourquoi colorer une préparation bactérienne avant de l’observer au microscope ?',
                        'choices' => [
                            ['choice_text' => 'Pour augmenter le contraste et mieux distinguer les cellules', 'is_correct' => true],
                            ['choice_text' => 'Pour transformer les bactéries en cellules humaines', 'is_correct' => false],
                            ['choice_text' => 'Pour multiplier instantanément les bactéries', 'is_correct' => false],
                            ['choice_text' => 'Pour remplacer le microscope', 'is_correct' => false],
                        ],
                        'explanation' => 'Les bactéries sont souvent peu contrastées sur une préparation non colorée. Une coloration permet de mieux voir leur forme, leur taille apparente et leur disposition.'
                    ],
                    [
                        'question' => 'La coloration de Gram permet notamment de distinguer des bactéries selon :',
                        'choices' => [
                            ['choice_text' => 'Les caractéristiques de leur enveloppe cellulaire', 'is_correct' => true],
                            ['choice_text' => 'La couleur naturelle de leur ADN', 'is_correct' => false],
                            ['choice_text' => 'La quantité de noyaux dans la cellule', 'is_correct' => false],
                            ['choice_text' => 'Leur capacité à produire du sang', 'is_correct' => false],
                        ],
                        'explanation' => 'La coloration de Gram repose sur la structure de l’enveloppe bactérienne et permet de distinguer notamment les bactéries Gram positives des Gram négatives.'
                    ],
                    [
                        'question' => 'Pourquoi faut-il éviter de contaminer une culture pendant une expérience microbiologique ?',
                        'choices' => [
                            ['choice_text' => 'Une contamination peut modifier les résultats en introduisant d’autres microorganismes', 'is_correct' => true],
                            ['choice_text' => 'Elle garantit toujours une meilleure identification', 'is_correct' => false],
                            ['choice_text' => 'Elle transforme les bactéries en organismes multicellulaires', 'is_correct' => false],
                            ['choice_text' => 'Elle n’a aucune conséquence sur une culture', 'is_correct' => false],
                        ],
                        'explanation' => 'Une culture destinée à étudier une souche doit rester aussi pure que possible. Un microorganisme contaminant peut se multiplier et fausser les observations.'
                    ],
                    [
                        'question' => 'Une boîte de Pétri contient une gélose avec des colonies de tailles différentes. Quelle donnée peut être utile pour l’identification ?',
                        'choices' => [
                            ['choice_text' => 'La morphologie des colonies, parmi d’autres critères', 'is_correct' => true],
                            ['choice_text' => 'Uniquement la couleur du couvercle de la boîte', 'is_correct' => false],
                            ['choice_text' => 'La température de la pièce sans aucune autre information', 'is_correct' => false],
                            ['choice_text' => 'La longueur du marqueur utilisé pour écrire sur la boîte', 'is_correct' => false],
                        ],
                        'explanation' => 'La taille, la forme, l’aspect et la couleur d’une colonie peuvent fournir des indices, mais l’identification fiable repose généralement sur plusieurs tests.'
                    ],
                    [
                        'question' => 'Un microscope possède un oculaire 10× et un objectif 40×. Quel est le grossissement total ?',
                        'choices' => [
                            ['choice_text' => '400×', 'is_correct' => true],
                            ['choice_text' => '50×', 'is_correct' => false],
                            ['choice_text' => '4×', 'is_correct' => false],
                            ['choice_text' => '300×', 'is_correct' => false],
                        ],
                        'explanation' => 'Le grossissement total est le produit des grossissements : 10 × 40 = 400. L’échantillon apparaît donc environ 400 fois plus grand angulairement.'
                    ],
                    [
                        'question' => 'Une culture donne 150 colonies sur une boîte après ensemencement d’un échantillon. Que représentent ces colonies ?',
                        'choices' => [
                            ['choice_text' => 'Des unités capables de former des colonies dans les conditions de culture', 'is_correct' => true],
                            ['choice_text' => 'Toujours exactement 150 espèces différentes', 'is_correct' => false],
                            ['choice_text' => '150 molécules d’eau', 'is_correct' => false],
                            ['choice_text' => '150 virus obligatoirement identiques', 'is_correct' => false],
                        ],
                        'explanation' => 'Une colonie provient d’une ou de plusieurs cellules capables de donner une croissance visible. Le nombre de colonies est donc lié aux unités formant colonies, pas forcément au nombre d’espèces.'
                    ],
                    [
                        'question' => 'Deux colonies ont la même couleur mais une texture différente. Que peut-on conclure ?',
                        'choices' => [
                            ['choice_text' => 'Elles peuvent appartenir à des microorganismes différents ou présenter des caractéristiques différentes', 'is_correct' => true],
                            ['choice_text' => 'Elles sont forcément la même souche', 'is_correct' => false],
                            ['choice_text' => 'La texture n’a jamais aucune valeur descriptive', 'is_correct' => false],
                            ['choice_text' => 'La couleur suffit toujours à les identifier avec certitude', 'is_correct' => false],
                        ],
                        'explanation' => 'L’aspect d’une colonie apporte des indices, mais un seul caractère ne suffit généralement pas à identifier un microorganisme avec certitude.'
                    ],
                    [
                        'question' => 'Un chercheur veut comparer la vitesse de croissance de deux souches. Quelle mesure peut-il suivre au cours du temps ?',
                        'choices' => [
                            ['choice_text' => 'L’augmentation de la densité ou du nombre de cellules', 'is_correct' => true],
                            ['choice_text' => 'La couleur du carnet de laboratoire', 'is_correct' => false],
                            ['choice_text' => 'La masse du microscope', 'is_correct' => false],
                            ['choice_text' => 'Le nombre de fenêtres du laboratoire', 'is_correct' => false],
                        ],
                        'explanation' => 'La croissance se mesure à partir de l’évolution du nombre de cellules, de la densité optique ou d’autres indicateurs reliés à la biomasse.'
                    ],
                    [
                        'question' => 'Un échantillon contient plusieurs types de colonies. Pourquoi une culture pure serait-elle utile pour identifier une souche précise ?',
                        'choices' => [
                            ['choice_text' => 'Elle permet d’étudier un seul type de microorganisme sans mélange avec d’autres', 'is_correct' => true],
                            ['choice_text' => 'Elle augmente toujours la diversité microbienne', 'is_correct' => false],
                            ['choice_text' => 'Elle élimine le besoin de toute observation', 'is_correct' => false],
                            ['choice_text' => 'Elle transforme les microorganismes en cellules mortes', 'is_correct' => false],
                        ],
                        'explanation' => 'Une culture pure réduit l’ambiguïté liée aux mélanges. On peut alors relier plus facilement les observations aux caractéristiques d’une souche donnée.'
                    ],
                    [
                        'question' => 'Un étudiant identifie une bactérie uniquement à partir de sa forme ronde. Pourquoi son identification reste-t-elle incertaine ?',
                        'choices' => [
                            ['choice_text' => 'Plusieurs bactéries peuvent avoir une forme similaire', 'is_correct' => true],
                            ['choice_text' => 'Les bactéries n’ont jamais de forme observable', 'is_correct' => false],
                            ['choice_text' => 'Toutes les bactéries rondes sont forcément identiques génétiquement', 'is_correct' => false],
                            ['choice_text' => 'La forme d’une cellule ne peut jamais être utilisée comme indice', 'is_correct' => false],
                        ],
                        'explanation' => 'La morphologie est un premier indice, mais elle ne suffit pas à elle seule. D’autres critères, comme la coloration, les tests biochimiques ou les données génétiques, sont souvent nécessaires.'
                    ],
                ],
            ],
            [
                'title' => 'Virus et interactions avec les cellules',
                'description' => 'Comprenez les caractéristiques essentielles des virus, leur dépendance aux cellules hôtes et les grandes étapes d’une infection virale.',
                'questions' => [
                    [
                        'question' => 'Pourquoi dit-on qu’un virus dépend d’une cellule hôte pour se multiplier ?',
                        'choices' => [
                            ['choice_text' => 'Il utilise la machinerie de la cellule pour produire de nouveaux composants viraux', 'is_correct' => true],
                            ['choice_text' => 'Il possède toujours un appareil digestif autonome', 'is_correct' => false],
                            ['choice_text' => 'Il fabrique seul tous les ribosomes nécessaires à sa reproduction', 'is_correct' => false],
                            ['choice_text' => 'Il se divise comme une bactérie dans un milieu inerte', 'is_correct' => false],
                        ],
                        'explanation' => 'Les virus ne disposent pas de tout l’équipement nécessaire à une reproduction autonome. Ils détournent donc des systèmes de la cellule infectée pour produire leur descendance.'
                    ],
                    [
                        'question' => 'Lequel appartient à la structure générale de nombreux virus ?',
                        'choices' => [
                            ['choice_text' => 'Un matériel génétique', 'is_correct' => true],
                            ['choice_text' => 'Un noyau identique à celui d’une cellule humaine', 'is_correct' => false],
                            ['choice_text' => 'Des mitochondries', 'is_correct' => false],
                            ['choice_text' => 'Des ribosomes autonomes pour toutes leurs protéines', 'is_correct' => false],
                        ],
                        'explanation' => 'Un virus contient un génome, constitué d’ADN ou d’ARN selon le virus, associé à une structure protectrice appelée capside. Certains possèdent aussi une enveloppe.'
                    ],
                    [
                        'question' => 'L’enveloppe de certains virus provient principalement :',
                        'choices' => [
                            ['choice_text' => 'D’une membrane acquise lors de leur sortie d’une cellule hôte', 'is_correct' => true],
                            ['choice_text' => 'D’une paroi végétale fabriquée dans le sol', 'is_correct' => false],
                            ['choice_text' => 'Du chromosome d’une bactérie', 'is_correct' => false],
                            ['choice_text' => 'D’un noyau complet détaché de la cellule', 'is_correct' => false],
                        ],
                        'explanation' => 'Les virus enveloppés acquièrent généralement une membrane lipidique dérivée de la cellule hôte lorsqu’ils quittent la cellule, puis y associent des protéines virales.'
                    ],
                    [
                        'question' => 'Lorsqu’un virus reconnaît spécifiquement une cellule, cette reconnaissance dépend souvent :',
                        'choices' => [
                            ['choice_text' => 'D’une interaction entre des protéines virales et des récepteurs cellulaires', 'is_correct' => true],
                            ['choice_text' => 'Du nombre de globules rouges présents à côté de la cellule', 'is_correct' => false],
                            ['choice_text' => 'Uniquement de la température extérieure', 'is_correct' => false],
                            ['choice_text' => 'De la présence obligatoire d’un chloroplaste', 'is_correct' => false],
                        ],
                        'explanation' => 'Les protéines de surface de nombreux virus reconnaissent certains récepteurs de la cellule hôte. Cette interaction contribue à déterminer quelles cellules peuvent être infectées.'
                    ],
                    [
                        'question' => 'Pourquoi un antibiotique classique n’attaque-t-il pas directement un virus ?',
                        'choices' => [
                            ['choice_text' => 'Parce que le virus ne possède pas les mêmes structures et cibles qu’une bactérie', 'is_correct' => true],
                            ['choice_text' => 'Parce qu’un virus est toujours protégé par une paroi de peptidoglycane', 'is_correct' => false],
                            ['choice_text' => 'Parce que les antibiotiques sont uniquement des vitamines', 'is_correct' => false],
                            ['choice_text' => 'Parce que les virus sont toujours plus grands que les bactéries', 'is_correct' => false],
                        ],
                        'explanation' => 'Les antibiotiques ciblent des fonctions ou structures bactériennes, comme certaines étapes de la synthèse de la paroi ou des protéines. Les virus n’ont pas ces mêmes cibles.'
                    ],
                    [
                        'question' => 'Un virus entre dans une cellule et utilise ses ribosomes pour fabriquer des protéines virales. Quel élément cellulaire est directement exploité ?',
                        'choices' => [
                            ['choice_text' => 'Les ribosomes de la cellule hôte', 'is_correct' => true],
                            ['choice_text' => 'Les os de l’hôte', 'is_correct' => false],
                            ['choice_text' => 'Les globules rouges comme mini-noyaux', 'is_correct' => false],
                            ['choice_text' => 'Le tissu adipeux uniquement', 'is_correct' => false],
                        ],
                        'explanation' => 'Les ribosomes de la cellule hôte participent à la synthèse des protéines virales à partir des informations génétiques produites pendant l’infection.'
                    ],
                    [
                        'question' => 'Une cellule infectée produit 50 nouvelles particules virales, puis elles infectent chacune une nouvelle cellule dans un modèle simplifié. Combien de nouvelles cellules peuvent être exposées lors de ce tour ?',
                        'choices' => [
                            ['choice_text' => '50', 'is_correct' => true],
                            ['choice_text' => '25', 'is_correct' => false],
                            ['choice_text' => '100', 'is_correct' => false],
                            ['choice_text' => '5', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans le modèle proposé, chaque particule infecte une nouvelle cellule. Les 50 particules peuvent donc exposer 50 nouvelles cellules.'
                    ],
                    [
                        'question' => 'Deux virus différents n’infectent pas les mêmes tissus. Quelle explication simple est possible ?',
                        'choices' => [
                            ['choice_text' => 'Ils peuvent reconnaître des récepteurs différents présents sur certaines cellules', 'is_correct' => true],
                            ['choice_text' => 'Toutes les cellules possèdent exactement les mêmes récepteurs', 'is_correct' => false],
                            ['choice_text' => 'Les virus choisissent toujours leurs tissus au hasard sans interaction moléculaire', 'is_correct' => false],
                            ['choice_text' => 'Les tissus n’ont aucun rôle dans l’infection virale', 'is_correct' => false],
                        ],
                        'explanation' => 'La présence ou l’absence de certains récepteurs et facteurs cellulaires peut conditionner l’entrée et la multiplication d’un virus dans un tissu donné.'
                    ],
                    [
                        'question' => 'Un médicament antiviral empêche une étape nécessaire à la copie du génome d’un virus. Quel effet attend-on ?',
                        'choices' => [
                            ['choice_text' => 'Une réduction de la production de nouveaux virus', 'is_correct' => true],
                            ['choice_text' => 'Une multiplication plus rapide du virus', 'is_correct' => false],
                            ['choice_text' => 'La transformation du virus en bactérie', 'is_correct' => false],
                            ['choice_text' => 'La création de nouveaux noyaux dans le virus', 'is_correct' => false],
                        ],
                        'explanation' => 'Si la réplication du génome viral est bloquée, le virus dispose de moins de matériel génétique pour assembler de nouvelles particules. La production virale peut donc diminuer.'
                    ],
                    [
                        'question' => 'Pourquoi les mutations virales peuvent-elles avoir des conséquences sur une population ?',
                        'choices' => [
                            ['choice_text' => 'Elles peuvent modifier certaines propriétés du virus, notamment sa reconnaissance par l’hôte ou sa sensibilité à certaines mesures', 'is_correct' => true],
                            ['choice_text' => 'Toute mutation rend automatiquement le virus plus dangereux', 'is_correct' => false],
                            ['choice_text' => 'Les mutations empêchent toujours le virus de se multiplier', 'is_correct' => false],
                            ['choice_text' => 'Une mutation transforme nécessairement un virus en bactérie', 'is_correct' => false],
                        ],
                        'explanation' => 'Une mutation change une information génétique. Son effet peut être nul, défavorable ou parfois modifier une propriété du virus. Il ne faut pas supposer qu’une mutation est toujours avantageuse.'
                    ],
                ],
            ],
            [
                'title' => 'Microorganismes utiles et microbiote',
                'description' => 'Découvrez les rôles bénéfiques des microorganismes dans le corps humain, l’environnement et certaines activités industrielles.',
                'questions' => [
                    [
                        'question' => 'Le terme « microbiote » désigne:',
                        'choices' => [
                            ['choice_text' => 'L’ensemble des microorganismes vivant habituellement dans un environnement donné', 'is_correct' => true],
                            ['choice_text' => 'Un médicament contre les bactéries', 'is_correct' => false],
                            ['choice_text' => 'Uniquement les virus responsables de maladies', 'is_correct' => false],
                            ['choice_text' => 'Une cellule spécialisée du foie', 'is_correct' => false],
                        ],
                        'explanation' => 'Le microbiote correspond à une communauté de microorganismes vivant dans un environnement précis, par exemple l’intestin, la peau ou la bouche.'
                    ],
                    [
                        'question' => 'Pourquoi certains microorganismes intestinaux sont-ils considérés comme utiles ?',
                        'choices' => [
                            ['choice_text' => 'Ils participent à certaines transformations alimentaires et peuvent contribuer à l’équilibre de l’écosystème intestinal', 'is_correct' => true],
                            ['choice_text' => 'Ils remplacent toutes les cellules humaines', 'is_correct' => false],
                            ['choice_text' => 'Ils produisent toujours des antibiotiques contre toutes les infections', 'is_correct' => false],
                            ['choice_text' => 'Ils rendent impossible toute maladie digestive', 'is_correct' => false],
                        ],
                        'explanation' => 'Le microbiote intestinal participe à de nombreuses interactions avec l’hôte, notamment certaines transformations de composés alimentaires et la compétition avec des microorganismes extérieurs.'
                    ],
                    [
                        'question' => 'Quel exemple illustre une utilisation industrielle des microorganismes ?',
                        'choices' => [
                            ['choice_text' => 'La production de certains aliments fermentés', 'is_correct' => true],
                            ['choice_text' => 'La fabrication de verre à partir de globules rouges', 'is_correct' => false],
                            ['choice_text' => 'La production de ciment par des virus respiratoires', 'is_correct' => false],
                            ['choice_text' => 'La création de métaux par des cellules de peau', 'is_correct' => false],
                        ],
                        'explanation' => 'Les microorganismes sont utilisés industriellement pour fabriquer de nombreux produits, notamment des aliments fermentés et certaines molécules d’intérêt.'
                    ],
                    [
                        'question' => 'Dans le sol, de nombreux microorganismes contribuent à :',
                        'choices' => [
                            ['choice_text' => 'Recycler la matière organique et certains éléments nutritifs', 'is_correct' => true],
                            ['choice_text' => 'Empêcher toute décomposition', 'is_correct' => false],
                            ['choice_text' => 'Remplacer totalement les racines des plantes', 'is_correct' => false],
                            ['choice_text' => 'Éliminer tout le carbone du sol', 'is_correct' => false],
                        ],
                        'explanation' => 'Les microorganismes décomposeurs transforment la matière organique et contribuent au cycle du carbone, de l’azote et d’autres éléments.'
                    ],
                    [
                        'question' => 'Les levures sont classées parmi :',
                        'choices' => [
                            ['choice_text' => 'Les champignons', 'is_correct' => true],
                            ['choice_text' => 'Les bactéries', 'is_correct' => false],
                            ['choice_text' => 'Les virus', 'is_correct' => false],
                            ['choice_text' => 'Les archées uniquement', 'is_correct' => false],
                        ],
                        'explanation' => 'Les levures sont des champignons unicellulaires. Elles se distinguent des bactéries par leur organisation eucaryote.'
                    ],
                    [
                        'question' => 'Une culture contient 5 g de biomasse microbienne dans 1 litre. Si la concentration reste uniforme, quelle masse totale est attendue dans 3 litres du même milieu ?',
                        'choices' => [
                            ['choice_text' => '15 g', 'is_correct' => true],
                            ['choice_text' => '8 g', 'is_correct' => false],
                            ['choice_text' => '5 g', 'is_correct' => false],
                            ['choice_text' => '3 g', 'is_correct' => false],
                        ],
                        'explanation' => 'À 5 g par litre, 3 litres contiennent 3 × 5 = 15 g de biomasse dans cette hypothèse de concentration uniforme.'
                    ],
                    [
                        'question' => 'Pourquoi le microbiote peut-il varier d’une personne à l’autre ?',
                        'choices' => [
                            ['choice_text' => 'Il dépend notamment de l’environnement, de l’alimentation et d’autres caractéristiques de l’hôte', 'is_correct' => true],
                            ['choice_text' => 'Toutes les personnes possèdent exactement les mêmes microorganismes en même quantité', 'is_correct' => false],
                            ['choice_text' => 'Le microbiote est uniquement déterminé par la couleur des yeux', 'is_correct' => false],
                            ['choice_text' => 'Le microbiote ne change jamais au cours de la vie', 'is_correct' => false],
                        ],
                        'explanation' => 'La composition du microbiote est influencée par plusieurs facteurs, notamment l’alimentation, l’environnement, l’âge et les traitements. Elle n’est donc pas strictement identique chez tous les individus.'
                    ],
                    [
                        'question' => 'Une bactérie du sol décompose une molécule organique complexe en composés plus simples. Quel rôle écologique remplit-elle ?',
                        'choices' => [
                            ['choice_text' => 'Un rôle de décomposeur', 'is_correct' => true],
                            ['choice_text' => 'Un rôle de prédateur macroscopique', 'is_correct' => false],
                            ['choice_text' => 'Un rôle de producteur de pétrole', 'is_correct' => false],
                            ['choice_text' => 'Un rôle de parasite obligatoire de l’être humain', 'is_correct' => false],
                        ],
                        'explanation' => 'Un décomposeur transforme la matière organique morte en substances plus simples, ce qui participe au recyclage de la matière dans les écosystèmes.'
                    ],
                    [
                        'question' => 'Un aliment fermenté contient des microorganismes vivants qui transforment les sucres. Pourquoi peut-on parler d’une utilisation bénéfique des microorganismes ?',
                        'choices' => [
                            ['choice_text' => 'Leur activité produit des composés recherchés qui donnent au produit certaines propriétés', 'is_correct' => true],
                            ['choice_text' => 'Ils éliminent nécessairement toute molécule du produit', 'is_correct' => false],
                            ['choice_text' => 'Ils transforment tous les sucres en oxygène pur', 'is_correct' => false],
                            ['choice_text' => 'Ils rendent le produit identique à de l’eau', 'is_correct' => false],
                        ],
                        'explanation' => 'La fermentation utilise le métabolisme des microorganismes pour produire des acides, des gaz ou d’autres molécules qui contribuent aux caractéristiques du produit.'
                    ],
                    [
                        'question' => 'Une personne prend un antibiotique puis remarque une modification digestive temporaire. Quel lien général avec le microbiote est plausible ?',
                        'choices' => [
                            ['choice_text' => 'L’antibiotique peut aussi réduire certaines bactéries du microbiote sensibles au traitement', 'is_correct' => true],
                            ['choice_text' => 'L’antibiotique transforme toutes les bactéries intestinales en virus', 'is_correct' => false],
                            ['choice_text' => 'Le microbiote disparaît toujours définitivement après un seul traitement', 'is_correct' => false],
                            ['choice_text' => 'Les antibiotiques n’ont jamais d’effet sur les bactéries non pathogènes', 'is_correct' => false],
                        ],
                        'explanation' => 'Un antibiotique peut affecter non seulement la bactérie ciblée, mais aussi certaines bactéries commensales sensibles. Cela peut modifier temporairement l’équilibre du microbiote.'
                    ],
                ],
            ],
        ];

        foreach ($quizzes as $quizIndex => $quizData) {
            $settings = $quizSettings[$quizIndex];

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
