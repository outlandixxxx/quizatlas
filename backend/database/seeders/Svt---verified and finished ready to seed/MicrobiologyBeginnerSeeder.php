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
            0 => ['duration' => 15, 'passing_score' => 50],
            1 => ['duration' => 15, 'passing_score' => 50],
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
                        'question' => 'Une bactérie mesure environ 2 µm de long. Quelle est cette longueur en millimètres ?',
                        'choices' => [
                            ['choice_text' => '0,2 mm', 'is_correct' => false],
                            ['choice_text' => '0,02 mm', 'is_correct' => false],
                            ['choice_text' => '0,002 mm', 'is_correct' => true],
                            ['choice_text' => '0,0002 mm', 'is_correct' => false],
                        ],
                        'explanation' => 'Un micromètre vaut 0,001 mm : deux micromètres font donc 0,002 mm, bien trop peu pour l’œil nu.',
                    ],
                    [
                        'question' => 'Lequel de ces organismes est un virus ?',
                        'choices' => [
                            ['choice_text' => 'La levure', 'is_correct' => false],
                            ['choice_text' => 'Escherichia coli', 'is_correct' => false],
                            ['choice_text' => 'Le virus de la grippe', 'is_correct' => true],
                            ['choice_text' => 'Une amibe', 'is_correct' => false],
                        ],
                        'explanation' => 'La grippe est causée par un virus, qui n’est pas une cellule. La levure est un champignon, Escherichia coli une bactérie et l’amibe un eucaryote unicellulaire.',
                    ],
                    [
                        'question' => 'Salma veut observer des bactéries isolées dans une goutte d’eau de mare. De quel instrument a-t-elle besoin ?',
                        'choices' => [
                            ['choice_text' => 'Un microscope optique', 'is_correct' => true],
                            ['choice_text' => 'Une loupe binoculaire', 'is_correct' => false],
                            ['choice_text' => 'Un spectrophotomètre', 'is_correct' => false],
                            ['choice_text' => 'Une centrifugeuse', 'is_correct' => false],
                        ],
                        'explanation' => 'Seul le microscope grossit assez pour révéler des cellules de quelques micromètres ; une loupe binoculaire ne dépasse pas quelques dizaines de fois.',
                    ],
                    [
                        'question' => 'Nadia ensemence une gélose avec une seule bactérie. Le lendemain, une tache blanche de 2 mm est visible. Que représente cette tache ?',
                        'choices' => [
                            ['choice_text' => 'Une bactérie unique qui a beaucoup grossi pendant la nuit', 'is_correct' => false],
                            ['choice_text' => 'Une colonie : des millions de cellules issues de divisions successives', 'is_correct' => true],
                            ['choice_text' => 'Un dépôt de bactéries mortes séchées à la surface de la gélose', 'is_correct' => false],
                            ['choice_text' => 'Une goutte de condensation tombée du couvercle de la boîte', 'is_correct' => false],
                        ],
                        'explanation' => 'À chaque division, le nombre de cellules double ; après une nuit, un seul ancêtre donne un amas visible à l’œil nu.',
                    ],
                    [
                        'question' => 'Sur la peau de Karim vivent des bactéries qui ne lui causent aucun mal. Comment qualifie-t-on ces bactéries ?',
                        'choices' => [
                            ['choice_text' => 'Pathogènes', 'is_correct' => false],
                            ['choice_text' => 'Commensales', 'is_correct' => true],
                            ['choice_text' => 'Parasites', 'is_correct' => false],
                            ['choice_text' => 'Résistantes', 'is_correct' => false],
                        ],
                        'explanation' => 'Une bactérie commensale vit sur son hôte sans lui nuire, et l’ensemble de ces bactéries forme le microbiote de la peau.',
                    ],
                    [
                        'question' => 'Les moisissures d’un fruit oublié et les levures de boulangerie appartiennent au même grand groupe. Lequel ?',
                        'choices' => [
                            ['choice_text' => 'Les champignons', 'is_correct' => true],
                            ['choice_text' => 'Les bactéries', 'is_correct' => false],
                            ['choice_text' => 'Les protozoaires', 'is_correct' => false],
                            ['choice_text' => 'Les algues', 'is_correct' => false],
                        ],
                        'explanation' => 'Moisissures et levures sont des champignons microscopiques, des cellules eucaryotes pourvues d’un noyau, contrairement aux bactéries.',
                    ],
                    [
                        'question' => 'Après quatre jours dans un sachet fermé et humide, la tranche de pain d’Imane est couverte de taches vertes. Quelle explication est la bonne ?',
                        'choices' => [
                            ['choice_text' => 'Des moisissures se sont développées sur le pain humide', 'is_correct' => true],
                            ['choice_text' => 'L’amidon du pain a changé de couleur en séchant au contact de l’air', 'is_correct' => false],
                            ['choice_text' => 'Le plastique du sachet a déteint sur la mie pendant la conservation', 'is_correct' => false],
                            ['choice_text' => 'Le pain a rassis en perdant peu à peu son humidité', 'is_correct' => false],
                        ],
                        'explanation' => 'Les taches vertes sont des colonies de moisissures, des champignons qui profitent de l’humidité et de l’amidon du pain.',
                    ],
                    [
                        'question' => 'Quelle différence sépare une bactérie d’une cellule humaine ?',
                        'choices' => [
                            ['choice_text' => 'Elle ne possède pas de membrane plasmique', 'is_correct' => false],
                            ['choice_text' => 'Son ADN n’est pas enfermé dans un noyau', 'is_correct' => true],
                            ['choice_text' => 'Elle ne contient pas d’ADN', 'is_correct' => false],
                            ['choice_text' => 'Elle est formée de plusieurs cellules soudées', 'is_correct' => false],
                        ],
                        'explanation' => 'Les bactéries sont des procaryotes : leur ADN reste libre dans le cytoplasme. Elles ont tout de même une membrane et de l’ADN, comme toute cellule.',
                    ],
                    [
                        'question' => 'En cours, Youssef confond virus et bactérie. Quel critère simple lui permet de les distinguer ?',
                        'choices' => [
                            ['choice_text' => 'Le virus est visible à l’œil nu, la bactérie ne l’est pas', 'is_correct' => false],
                            ['choice_text' => 'Le virus possède un vrai noyau, la bactérie n’en a pas', 'is_correct' => false],
                            ['choice_text' => 'La bactérie ne contient pas d’ADN, le virus en contient', 'is_correct' => false],
                            ['choice_text' => 'Une bactérie est une cellule, un virus n’en est pas une', 'is_correct' => true],
                        ],
                        'explanation' => 'Une bactérie est un être vivant formé d’une cellule, alors qu’un virus est une simple particule qui doit entrer dans une cellule pour se multiplier.',
                    ],
                    [
                        'question' => 'Vers 1860, Louis Pasteur chauffe un bouillon dans un ballon à col de cygne, dont le long col recourbé retient les poussières. Le bouillon reste limpide. Qu’en déduit-il ?',
                        'choices' => [
                            ['choice_text' => 'Les microbes apparaissent d’eux-mêmes quand le bouillon vieillit', 'is_correct' => false],
                            ['choice_text' => 'Le bouillon est trop pauvre pour nourrir des microbes', 'is_correct' => false],
                            ['choice_text' => 'Le col de cygne détruit les microbes qui entrent dans le ballon', 'is_correct' => false],
                            ['choice_text' => 'Les microbes viennent de l’air et non du bouillon lui-même', 'is_correct' => true],
                        ],
                        'explanation' => 'Sans poussières venues de l’extérieur, le bouillon reste stérile : les microbes ne naissent donc pas spontanément. Pasteur réfute ainsi la génération spontanée.',
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
                            ['choice_text' => 'Bacille', 'is_correct' => false],
                            ['choice_text' => 'Spirille', 'is_correct' => false],
                            ['choice_text' => 'Coque', 'is_correct' => true],
                            ['choice_text' => 'Filament', 'is_correct' => false],
                        ],
                        'explanation' => 'Une coque est une bactérie de forme globalement sphérique. Les bacilles sont en forme de bâtonnet et les spirilles sont spiralés.',
                    ],
                    [
                        'question' => 'Quelle structure de la bactérie règle ce qui entre dans la cellule et ce qui en sort ?',
                        'choices' => [
                            ['choice_text' => 'La capsule externe', 'is_correct' => false],
                            ['choice_text' => 'Le chromosome circulaire', 'is_correct' => false],
                            ['choice_text' => 'La membrane plasmique', 'is_correct' => true],
                            ['choice_text' => 'La paroi rigide', 'is_correct' => false],
                        ],
                        'explanation' => 'La membrane plasmique est une barrière sélective ; la paroi, rigide et poreuse, sert surtout de soutien.',
                    ],
                    [
                        'question' => 'Dans le cytoplasme d’une bactérie, à quoi servent les ribosomes ?',
                        'choices' => [
                            ['choice_text' => 'À copier l’ADN avant la division', 'is_correct' => false],
                            ['choice_text' => 'À fabriquer la paroi de la cellule', 'is_correct' => false],
                            ['choice_text' => 'À produire l’énergie de la cellule', 'is_correct' => false],
                            ['choice_text' => 'À fabriquer les protéines', 'is_correct' => true],
                        ],
                        'explanation' => 'Les ribosomes assemblent les acides aminés dans l’ordre indiqué par l’ARN messager, ce qui donne les protéines.',
                    ],
                    [
                        'question' => 'Placée dans de l’eau pure, une bactérie ne gonfle pas jusqu’à éclater. Quelle structure la protège ?',
                        'choices' => [
                            ['choice_text' => 'La paroi rigide autour de la membrane', 'is_correct' => true],
                            ['choice_text' => 'Le flagelle de la surface', 'is_correct' => false],
                            ['choice_text' => 'Le ribosome du cytoplasme', 'is_correct' => false],
                            ['choice_text' => 'Le chromosome circulaire', 'is_correct' => false],
                        ],
                        'explanation' => 'La paroi donne sa forme à la bactérie et l’empêche d’éclater quand l’eau y pénètre par osmose.',
                    ],
                    [
                        'question' => 'À quoi servent les flagelles de certaines bactéries ?',
                        'choices' => [
                            ['choice_text' => 'À se déplacer dans un liquide', 'is_correct' => true],
                            ['choice_text' => 'À échanger de l’ADN avec une voisine', 'is_correct' => false],
                            ['choice_text' => 'À se protéger du dessèchement', 'is_correct' => false],
                            ['choice_text' => 'À stocker des réserves de glucose', 'is_correct' => false],
                        ],
                        'explanation' => 'Le flagelle tourne comme une hélice et propulse la cellule. L’échange d’ADN passe plutôt par d’autres appendices, les pili.',
                    ],
                    [
                        'question' => 'Deux souches de la même espèce se distinguent par une capsule : la première en a une, la seconde non. Quel avantage la capsule donne-t-elle à la première ?',
                        'choices' => [
                            ['choice_text' => 'Une vitesse de déplacement plus élevée dans les milieux liquides', 'is_correct' => false],
                            ['choice_text' => 'Une fabrication plus rapide des protéines de la cellule', 'is_correct' => false],
                            ['choice_text' => 'Un noyau supplémentaire qui enferme et protège l’ADN de la cellule', 'is_correct' => false],
                            ['choice_text' => 'Une protection contre le dessèchement et les défenses de l’hôte', 'is_correct' => true],
                        ],
                        'explanation' => 'La capsule est une couche visqueuse qui retient l’eau et gêne les cellules immunitaires qui tentent de capturer la bactérie.',
                    ],
                    [
                        'question' => 'Deux bactéries en bâtonnet ont des besoins nutritifs très différents. Que montre cette observation ?',
                        'choices' => [
                            ['choice_text' => 'La forme ne suffit pas à déduire le mode de vie', 'is_correct' => true],
                            ['choice_text' => 'Les deux bactéries appartiennent à la même espèce', 'is_correct' => false],
                            ['choice_text' => 'L’une des deux est dépourvue de membrane plasmique', 'is_correct' => false],
                            ['choice_text' => 'Leur ADN est identique malgré cette différence', 'is_correct' => false],
                        ],
                        'explanation' => 'La forme est un premier indice, mais deux espèces peuvent se ressembler et se nourrir très différemment. Pour les distinguer, on ajoute des tests biochimiques ou génétiques.',
                    ],
                    [
                        'question' => 'Quand le sol se dessèche, certaines bactéries forment des spores. À quoi sert une spore ?',
                        'choices' => [
                            ['choice_text' => 'À nager plus vite vers les zones riches en nutriments', 'is_correct' => false],
                            ['choice_text' => 'À transmettre des gènes à une bactérie voisine', 'is_correct' => false],
                            ['choice_text' => 'À résister à la chaleur et au manque d’eau', 'is_correct' => true],
                            ['choice_text' => 'À fabriquer plus de protéines en moins de temps', 'is_correct' => false],
                        ],
                        'explanation' => 'La spore est une forme de résistance : la bactérie s’y enferme, presque inactive, et repart quand le milieu redevient favorable.',
                    ],
                    [
                        'question' => 'Chez une bactérie, comment s’appelle la zone du cytoplasme où se trouve l’ADN, sans membrane autour ?',
                        'choices' => [
                            ['choice_text' => 'Le noyau', 'is_correct' => false],
                            ['choice_text' => 'Le nucléoïde', 'is_correct' => true],
                            ['choice_text' => 'Le nucléole', 'is_correct' => false],
                            ['choice_text' => 'Le réticulum', 'is_correct' => false],
                        ],
                        'explanation' => 'Le nucléoïde est une région sans membrane qui contient le chromosome. Le noyau, le nucléole et le réticulum n’existent que chez les cellules eucaryotes.',
                    ],
                    [
                        'question' => 'Au microscope, Salma observe une bactérie en bâtonnet, sans noyau, munie d’un flagelle. Quelle description est correcte ?',
                        'choices' => [
                            ['choice_text' => 'Une coque eucaryote mobile', 'is_correct' => false],
                            ['choice_text' => 'Un bacille procaryote mobile', 'is_correct' => true],
                            ['choice_text' => 'Un bacille eucaryote immobile', 'is_correct' => false],
                            ['choice_text' => 'Un spirille procaryote immobile', 'is_correct' => false],
                        ],
                        'explanation' => 'Un bâtonnet est un bacille, l’absence de noyau signale une cellule procaryote et le flagelle permet de se déplacer.',
                    ],
                ],
            ],
            [
                'title' => 'Croissance et conditions de vie des microorganismes',
                'description' => 'Explorez les facteurs qui influencent la croissance microbienne : température, oxygène, eau et disponibilité des nutriments.',
                'questions' => [
                    [
                        'question' => 'Que désigne le temps de génération d’une bactérie ?',
                        'choices' => [
                            ['choice_text' => 'La durée de vie d’une bactérie isolée', 'is_correct' => false],
                            ['choice_text' => 'Le temps mis pour fabriquer une protéine', 'is_correct' => false],
                            ['choice_text' => 'Le temps nécessaire pour que la population double', 'is_correct' => true],
                            ['choice_text' => 'Le temps de conservation d’une culture au froid', 'is_correct' => false],
                        ],
                        'explanation' => 'Le temps de génération est la durée d’un cycle de division : à chaque cycle, le nombre de cellules double. Pour la bactérie Escherichia coli en conditions favorables, il avoisine 20 minutes.',
                    ],
                    [
                        'question' => 'Une bactérie de l’intestin pousse mieux à 37 °C qu’à 20 °C. Que représente 37 °C pour elle ?',
                        'choices' => [
                            ['choice_text' => 'La température à partir de laquelle elle est détruite', 'is_correct' => false],
                            ['choice_text' => 'Une température proche de son optimum de croissance', 'is_correct' => true],
                            ['choice_text' => 'La limite basse en dessous de laquelle elle ne pousse plus', 'is_correct' => false],
                            ['choice_text' => 'La température qui sert à stériliser le matériel', 'is_correct' => false],
                        ],
                        'explanation' => 'Chaque microorganisme se multiplie dans une plage de températures, avec un optimum où la croissance est la plus rapide. Pour les bactéries de l’intestin, cet optimum avoisine 37 °C.',
                    ],
                    [
                        'question' => 'Au réfrigérateur à 4 °C, la soupe de Meryem se gâte bien plus lentement qu’à température ambiante. Quelle en est la cause ?',
                        'choices' => [
                            ['choice_text' => 'Le froid ralentit les réactions chimiques dans les bactéries', 'is_correct' => true],
                            ['choice_text' => 'Le froid détruit leur ADN dès les premières minutes', 'is_correct' => false],
                            ['choice_text' => 'Le froid chasse l’oxygène dissous dans la soupe', 'is_correct' => false],
                            ['choice_text' => 'Le froid gèle l’eau contenue dans le cytoplasme des bactéries', 'is_correct' => false],
                        ],
                        'explanation' => 'À basse température, les enzymes travaillent au ralenti : la croissance et les divisions aussi. Le froid ne stérilise pas, et les bactéries repartent au retour de la chaleur.',
                    ],
                    [
                        'question' => 'Une bactérie qui se développe seulement en présence d’oxygène est qualifiée de :',
                        'choices' => [
                            ['choice_text' => 'Aérobie stricte', 'is_correct' => true],
                            ['choice_text' => 'Anaérobie stricte', 'is_correct' => false],
                            ['choice_text' => 'Anaérobie facultative', 'is_correct' => false],
                            ['choice_text' => 'Thermophile', 'is_correct' => false],
                        ],
                        'explanation' => 'Une bactérie aérobie stricte a besoin d’oxygène pour sa croissance. Une anaérobie stricte, au contraire, ne le tolère pas.',
                    ],
                    [
                        'question' => 'Un paquet de biscuits secs reste intact des mois, alors qu’un yaourt tourne en quelques jours. Quel facteur explique cette différence ?',
                        'choices' => [
                            ['choice_text' => 'Le manque de glucides dans les biscuits', 'is_correct' => false],
                            ['choice_text' => 'Le peu d’eau disponible dans les biscuits', 'is_correct' => true],
                            ['choice_text' => 'Un pH trop bas dans les biscuits', 'is_correct' => false],
                            ['choice_text' => 'Le manque d’air dans le paquet', 'is_correct' => false],
                        ],
                        'explanation' => 'Sans eau, les microorganismes ne peuvent pas faire fonctionner leur métabolisme et ne se multiplient pas. Le yaourt, très humide, offre l’inverse.',
                    ],
                    [
                        'question' => 'Une culture démarre avec 500 bactéries. Chaque cellule se divise en deux, puis chaque nouvelle cellule se divise à son tour en deux. Combien de bactéries compte-t-on après ces deux divisions ?',
                        'choices' => [
                            ['choice_text' => '4 000', 'is_correct' => false],
                            ['choice_text' => '2 000', 'is_correct' => true],
                            ['choice_text' => '1 500', 'is_correct' => false],
                            ['choice_text' => '1 000', 'is_correct' => false],
                        ],
                        'explanation' => 'Première division : 500 × 2 = 1 000 cellules. Seconde division : 1 000 × 2 = 2 000 cellules.',
                    ],
                    [
                        'question' => 'Un étudiant mesure le pH de trois liquides : le jus de citron (pH 2), le lait (pH 6,7) et de l’eau de Javel diluée (pH 11). Dans lequel la plupart des bactéries se multiplient-elles le mieux ?',
                        'choices' => [
                            ['choice_text' => 'Dans le lait, dont le pH est presque neutre', 'is_correct' => true],
                            ['choice_text' => 'Dans le jus de citron, dont le pH est très acide', 'is_correct' => false],
                            ['choice_text' => 'Dans l’eau de Javel diluée, dont le pH est basique', 'is_correct' => false],
                            ['choice_text' => 'Dans les trois liquides, à la même vitesse', 'is_correct' => false],
                        ],
                        'explanation' => 'La plupart des bactéries préfèrent un pH proche de la neutralité, et le lait leur apporte en plus des nutriments. Un pH très acide ou très basique freine leur croissance.',
                    ],
                    [
                        'question' => 'Deux tubes reçoivent chacun 100 bactéries. Le tube A contient un bouillon riche, le tube B de l’eau presque pure. Que constate-t-on après 24 heures ?',
                        'choices' => [
                            ['choice_text' => 'Le tube B contient plus de bactéries que le tube A', 'is_correct' => false],
                            ['choice_text' => 'Les deux tubes contiennent le même nombre de bactéries', 'is_correct' => false],
                            ['choice_text' => 'Le tube A est stérile au bout de 24 heures', 'is_correct' => false],
                            ['choice_text' => 'Le tube A contient bien plus de bactéries que le B', 'is_correct' => true],
                        ],
                        'explanation' => 'Un bouillon riche fournit de quoi fabriquer de nouvelles cellules, alors que l’eau presque pure en offre très peu : la population y stagne.',
                    ],
                    [
                        'question' => 'Dans un flacon fermé, une culture croît vite pendant six heures, puis la courbe s’aplatit. Quelle explication retenir ?',
                        'choices' => [
                            ['choice_text' => 'Les cellules deviennent trop grosses pour se diviser', 'is_correct' => false],
                            ['choice_text' => 'L’ADN se dégrade à chaque division', 'is_correct' => false],
                            ['choice_text' => 'Le flacon se refroidit peu à peu et fige les cellules', 'is_correct' => false],
                            ['choice_text' => 'Les nutriments s’épuisent et les déchets s’accumulent', 'is_correct' => true],
                        ],
                        'explanation' => 'Dans un milieu fermé, la nourriture finit par manquer et les déchets deviennent gênants. La population cesse alors d’augmenter.',
                    ],
                    [
                        'question' => 'Sara incube la même souche dans deux tubes, l’un avec oxygène, l’autre sans. Seul le premier se trouble. Que peut-elle conclure ?',
                        'choices' => [
                            ['choice_text' => 'Cette souche est détruite par l’oxygène', 'is_correct' => false],
                            ['choice_text' => 'Cette souche se multiplie mieux sans oxygène', 'is_correct' => false],
                            ['choice_text' => 'Cette souche a besoin d’oxygène pour se développer', 'is_correct' => true],
                            ['choice_text' => 'L’oxygène est un nutriment pour l’ensemble des bactéries', 'is_correct' => false],
                        ],
                        'explanation' => 'Le tube sans oxygène reste clair, donc la souche ne s’y multiplie pas : elle est aérobie. On ne peut pas étendre ce résultat aux autres bactéries.',
                    ],
                ],
            ],
            [
                'title' => 'Transmission et prévention des infections',
                'description' => 'Apprenez à reconnaître les grandes voies de transmission et les gestes de prévention contre les infections.',
                'questions' => [
                    [
                        'question' => 'Avant le déjeuner, Ilyas se lave les mains au savon pendant vingt secondes. Quel est l’effet recherché ?',
                        'choices' => [
                            ['choice_text' => 'Laisser sur ses mains un film de savon qui tue les virus', 'is_correct' => false],
                            ['choice_text' => 'Décoller et rincer une partie des microbes de sa peau', 'is_correct' => true],
                            ['choice_text' => 'Remplacer les bactéries de sa peau par des bactéries utiles', 'is_correct' => false],
                            ['choice_text' => 'Stériliser la peau de ses mains pour la journée', 'is_correct' => false],
                        ],
                        'explanation' => 'Le savon décolle les saletés et les microbes, puis l’eau les entraîne. Les mains sont propres, pas stériles.',
                    ],
                    [
                        'question' => 'En pleine épidémie de grippe, quelle situation expose le plus à une transmission par gouttelettes ?',
                        'choices' => [
                            ['choice_text' => 'Manger un fruit qu’on vient d’éplucher', 'is_correct' => false],
                            ['choice_text' => 'Discuter à un mètre d’une personne qui tousse', 'is_correct' => true],
                            ['choice_text' => 'Boire de l’eau bouillie puis refroidie', 'is_correct' => false],
                            ['choice_text' => 'Marcher seul sur une route de campagne', 'is_correct' => false],
                        ],
                        'explanation' => 'Les gouttelettes de toux et d’éternuement ne voyagent que sur de courtes distances : plus on est proche, plus le risque monte.',
                    ],
                    [
                        'question' => 'Meryem est enrhumée et Hajar lui demande de boire à sa bouteille. Quel risque court Hajar ?',
                        'choices' => [
                            ['choice_text' => 'Boire une eau devenue toxique au contact des microbes', 'is_correct' => false],
                            ['choice_text' => 'Attraper une maladie génétique que Meryem a depuis sa naissance', 'is_correct' => false],
                            ['choice_text' => 'Perdre une partie de ses propres bactéries intestinales', 'is_correct' => false],
                            ['choice_text' => 'Recevoir des microbes présents dans la salive du goulot', 'is_correct' => true],
                        ],
                        'explanation' => 'Le goulot garde de la salive, qui peut contenir les virus du rhume. Partager un objet porté à la bouche est une voie classique de contagion.',
                    ],
                    [
                        'question' => 'Qu’apporte un vaccin à l’organisme ?',
                        'choices' => [
                            ['choice_text' => 'Un médicament qui détruit les microbes déjà installés', 'is_correct' => false],
                            ['choice_text' => 'Des anticorps prêts à l’emploi qui disparaissent vite', 'is_correct' => false],
                            ['choice_text' => 'Un entraînement du système immunitaire face à un agent infectieux', 'is_correct' => true],
                            ['choice_text' => 'Une barrière supplémentaire qui renforce la peau', 'is_correct' => false],
                        ],
                        'explanation' => 'Le vaccin présente au corps un agent affaibli, inactivé ou l’un de ses fragments. Le système immunitaire garde le souvenir de cet antigène et réagit plus vite lors d’une vraie infection.',
                    ],
                    [
                        'question' => 'Quel geste limite le mieux la diffusion d’une infection respiratoire quand on tousse ?',
                        'choices' => [
                            ['choice_text' => 'Tousser dans la paume de la main', 'is_correct' => false],
                            ['choice_text' => 'Tousser dans un mouchoir gardé en poche pour la journée', 'is_correct' => false],
                            ['choice_text' => 'Tousser à découvert en tournant la tête', 'is_correct' => false],
                            ['choice_text' => 'Tousser dans son coude plié ou dans un mouchoir jetable', 'is_correct' => true],
                        ],
                        'explanation' => 'Le coude ou un mouchoir jeté aussitôt arrêtent les gouttelettes sans contaminer les mains. La paume, au contraire, dépose les microbes sur tout ce qu’on touche ensuite.',
                    ],
                    [
                        'question' => 'De retour du marché en plein été, Zineb doit ranger ses courses. Que met-elle en premier au réfrigérateur ?',
                        'choices' => [
                            ['choice_text' => 'Les pommes de terre et les oignons', 'is_correct' => false],
                            ['choice_text' => 'Le pain et les biscuits secs', 'is_correct' => false],
                            ['choice_text' => 'Les boîtes de conserve fermées', 'is_correct' => false],
                            ['choice_text' => 'Le poisson frais et les produits laitiers', 'is_correct' => true],
                        ],
                        'explanation' => 'Les aliments très périssables se gâtent vite dès que la température monte. Pommes de terre, pain sec et conserves fermées supportent bien la température ambiante.',
                    ],
                    [
                        'question' => 'Hamza ouvre une porte qu’un malade vient de toucher, puis se frotte les yeux. Quel mode de transmission est en jeu ?',
                        'choices' => [
                            ['choice_text' => 'La transmission par la piqûre d’un insecte piqueur', 'is_correct' => false],
                            ['choice_text' => 'La transmission indirecte via une surface contaminée', 'is_correct' => true],
                            ['choice_text' => 'La transmission de la mère à son enfant pendant la grossesse', 'is_correct' => false],
                            ['choice_text' => 'La transmission par l’eau de boisson', 'is_correct' => false],
                        ],
                        'explanation' => 'Les microbes déposés sur la poignée passent sur les doigts, puis sur les yeux. C’est une transmission indirecte, par contact avec une surface.',
                    ],
                    [
                        'question' => 'Plusieurs élèves d’une classe sont enrhumés. Quelle mesure simple aide à limiter la transmission ?',
                        'choices' => [
                            ['choice_text' => 'Garder les fenêtres fermées pour conserver la chaleur', 'is_correct' => false],
                            ['choice_text' => 'Asseoir les élèves enrhumés au centre de la salle', 'is_correct' => false],
                            ['choice_text' => 'Ouvrir les fenêtres quelques minutes à chaque pause', 'is_correct' => true],
                            ['choice_text' => 'Pulvériser du désinfectant dans l’air de la salle', 'is_correct' => false],
                        ],
                        'explanation' => 'Aérer renouvelle l’air et dilue les fines gouttelettes en suspension. Pulvériser un désinfectant dans l’air n’a pas cet effet et irrite les voies respiratoires.',
                    ],
                    [
                        'question' => 'À quel moment une personne infectée par la grippe peut-elle commencer à contaminer ses proches ?',
                        'choices' => [
                            ['choice_text' => 'Dès la phase d’incubation, avant les premiers symptômes', 'is_correct' => true],
                            ['choice_text' => 'À partir de l’apparition de la fièvre', 'is_correct' => false],
                            ['choice_text' => 'Une fois les symptômes disparus', 'is_correct' => false],
                            ['choice_text' => 'Après une semaine de contact rapproché', 'is_correct' => false],
                        ],
                        'explanation' => 'Pendant l’incubation, le virus se multiplie déjà et peut se transmettre avant tout signe de maladie. Un porteur qui se sent bien peut donc contaminer son entourage.',
                    ],
                    [
                        'question' => 'Douze invités d’un mariage souffrent de gastro-entérite dans les 24 heures qui suivent le repas. Quelle première piste l’enquêteur doit-il suivre ?',
                        'choices' => [
                            ['choice_text' => 'Comparer les plats des malades à ceux des invités en bonne santé', 'is_correct' => true],
                            ['choice_text' => 'Vérifier la propreté du sol et des murs de la salle de réception', 'is_correct' => false],
                            ['choice_text' => 'Analyser l’eau de la piscine de l’hôtel voisin', 'is_correct' => false],
                            ['choice_text' => 'Rechercher qui a voyagé à l’étranger le mois dernier', 'is_correct' => false],
                        ],
                        'explanation' => 'Un plat mangé par presque tous les malades et par peu de convives en bonne santé désigne la source probable. On vérifie ensuite sa préparation et sa conservation.',
                    ],
                ],
            ],
            [
                'title' => 'Antibiotiques et résistance bactérienne',
                'description' => 'Comprenez le rôle des antibiotiques, les erreurs fréquentes et la manière dont la résistance bactérienne peut apparaître et se diffuser.',
                'questions' => [
                    [
                        'question' => 'Contre quelles infections les antibiotiques sont-ils conçus ?',
                        'choices' => [
                            ['choice_text' => 'Les infections dues à des virus', 'is_correct' => false],
                            ['choice_text' => 'Les infections dues à des champignons', 'is_correct' => false],
                            ['choice_text' => 'Les infections dues à des bactéries', 'is_correct' => true],
                            ['choice_text' => 'Les infections dues à des parasites', 'is_correct' => false],
                        ],
                        'explanation' => 'Un antibiotique vise une cible propre aux bactéries, comme leur paroi ou leurs ribosomes. Pour les virus, les champignons ou les parasites, il existe d’autres médicaments.',
                    ],
                    [
                        'question' => 'Youssef a un rhume depuis deux jours et réclame des antibiotiques à son pharmacien. Que lui répond-on ?',
                        'choices' => [
                            ['choice_text' => 'Qu’ils raccourcissent le rhume s’il les prend dès le début', 'is_correct' => false],
                            ['choice_text' => 'Qu’ils évitent des complications même quand la cause est un virus', 'is_correct' => false],
                            ['choice_text' => 'Qu’ils sont utiles dès que le nez coule et que la fièvre monte', 'is_correct' => false],
                            ['choice_text' => 'Qu’ils ne servent à rien contre un virus comme celui du rhume', 'is_correct' => true],
                        ],
                        'explanation' => 'Le rhume est causé par un virus, et les antibiotiques n’ont pas de prise sur lui. Les prendre dans ce cas n’apporte rien et favorise la résistance.',
                    ],
                    [
                        'question' => 'Qu’appelle-t-on une bactérie résistante à un antibiotique ?',
                        'choices' => [
                            ['choice_text' => 'Une bactérie qui produit elle-même cet antibiotique', 'is_correct' => false],
                            ['choice_text' => 'Une bactérie qui ne peut plus se diviser après un traitement', 'is_correct' => false],
                            ['choice_text' => 'Une bactérie qui se multiplie malgré cet antibiotique', 'is_correct' => true],
                            ['choice_text' => 'Une bactérie qui supporte l’eau bouillante', 'is_correct' => false],
                        ],
                        'explanation' => 'La résistance signifie que l’antibiotique ne bloque plus la croissance de la bactérie à la dose habituelle. Elle est propre à chaque antibiotique : une souche peut résister à l’un et rester sensible à un autre.',
                    ],
                    [
                        'question' => 'Après trois jours d’amoxicilline pour une angine bactérienne, Hamza se sent mieux et arrête, alors que l’ordonnance prévoit six jours. Quel risque prend-il ?',
                        'choices' => [
                            ['choice_text' => 'Des bactéries survivantes peuvent repartir et l’angine revenir', 'is_correct' => true],
                            ['choice_text' => 'Le médicament déjà pris devient toxique s’il n’est pas suivi d’autres prises', 'is_correct' => false],
                            ['choice_text' => 'Son système immunitaire oublie cette bactérie', 'is_correct' => false],
                            ['choice_text' => 'Les bactéries restantes meurent d’elles-mêmes sans médicament', 'is_correct' => false],
                        ],
                        'explanation' => 'Se sentir mieux ne veut pas dire que toutes les bactéries sont éliminées. Les survivantes repartent et provoquent une rechute, avec le risque de sélectionner les moins sensibles.',
                    ],
                    [
                        'question' => 'Au laboratoire, Salma dépose deux disques d’antibiotiques sur une gélose ensemencée. Une zone claire de 25 mm apparaît autour du disque A, aucune autour du disque B. Que conclut-elle ?',
                        'choices' => [
                            ['choice_text' => 'La bactérie est résistante à A et sensible à B', 'is_correct' => false],
                            ['choice_text' => 'La bactérie est sensible aux deux antibiotiques', 'is_correct' => false],
                            ['choice_text' => 'La bactérie est résistante aux deux antibiotiques', 'is_correct' => false],
                            ['choice_text' => 'La bactérie est sensible à A et résistante à B', 'is_correct' => true],
                        ],
                        'explanation' => 'Une zone claire signale que la bactérie ne pousse pas près du disque : elle est sensible à A. Sans zone, elle se développe jusqu’au contact de B et lui résiste.',
                    ],
                    [
                        'question' => 'Une culture compte 200 bactéries sensibles à un antibiotique et 20 bactéries résistantes. L’antibiotique tue toutes les sensibles, puis chaque survivante se divise une fois en deux. Combien de bactéries compte-t-on ensuite ?',
                        'choices' => [
                            ['choice_text' => '440', 'is_correct' => false],
                            ['choice_text' => '220', 'is_correct' => false],
                            ['choice_text' => '40', 'is_correct' => true],
                            ['choice_text' => '20', 'is_correct' => false],
                        ],
                        'explanation' => 'Les 200 sensibles disparaissent et il reste 20 résistantes. Chacune se divise en deux : 20 × 2 = 40 bactéries.',
                    ],
                    [
                        'question' => 'Un hôpital emploie en permanence le même antibiotique pour des infections banales. Au fil des années, de plus en plus de bactéries y résistent. Comment l’expliquer ?',
                        'choices' => [
                            ['choice_text' => 'Les bactéries apprennent à résister en croisant l’antibiotique à faible dose', 'is_correct' => false],
                            ['choice_text' => 'L’antibiotique grossit les bactéries et les rend plus solides', 'is_correct' => false],
                            ['choice_text' => 'L’antibiotique s’altère avec les années et perd son efficacité', 'is_correct' => false],
                            ['choice_text' => 'L’antibiotique tue les bactéries sensibles et laisse la place aux résistantes', 'is_correct' => true],
                        ],
                        'explanation' => 'À chaque traitement, les bactéries sensibles meurent tandis que les rares résistantes survivent et se multiplient. Leur proportion augmente ainsi de génération en génération.',
                    ],
                    [
                        'question' => 'En 1928, Alexander Fleming constate qu’une moisissure tombée par accident sur une gélose empêche des staphylocoques de pousser autour d’elle. Quelle découverte en découle ?',
                        'choices' => [
                            ['choice_text' => 'Le BCG, vaccin contre la tuberculose', 'is_correct' => false],
                            ['choice_text' => 'La pénicilline, premier antibiotique', 'is_correct' => true],
                            ['choice_text' => 'La pasteurisation, chauffage du lait', 'is_correct' => false],
                            ['choice_text' => 'La coloration de Gram, test de laboratoire', 'is_correct' => false],
                        ],
                        'explanation' => 'La moisissure Penicillium produit une substance qui bloque la croissance des bactéries. De cette observation naîtra la pénicilline, premier antibiotique utilisé à grande échelle.',
                    ],
                    [
                        'question' => 'Après une angine, il reste quatre comprimés d’antibiotique à Rachid. Trois mois plus tard, il a de nouveau mal à la gorge. Que doit-il faire ?',
                        'choices' => [
                            ['choice_text' => 'Prendre les comprimés restants en attendant', 'is_correct' => false],
                            ['choice_text' => 'Consulter un médecin, qui décidera si un antibiotique est utile', 'is_correct' => true],
                            ['choice_text' => 'Donner les comprimés à un proche qui tousse', 'is_correct' => false],
                            ['choice_text' => 'Acheter un antibiotique plus fort sans ordonnance', 'is_correct' => false],
                        ],
                        'explanation' => 'Un mal de gorge peut être viral, et quatre comprimés ne forment pas un traitement complet. Garder ou partager des restes favorise la résistance.',
                    ],
                    [
                        'question' => 'Laquelle de ces mesures réduit indirectement la résistance aux antibiotiques ?',
                        'choices' => [
                            ['choice_text' => 'Se vacciner et se laver les mains pour tomber moins malade', 'is_correct' => true],
                            ['choice_text' => 'Prendre un antibiotique avant chaque voyage par précaution', 'is_correct' => false],
                            ['choice_text' => 'Choisir à chaque fois l’antibiotique le plus puissant', 'is_correct' => false],
                            ['choice_text' => 'Arrêter le traitement dès que la fièvre tombe', 'is_correct' => false],
                        ],
                        'explanation' => 'Moins d’infections signifie moins de traitements, donc moins de pression sur les bactéries pour devenir résistantes. Les trois autres habitudes, au contraire, favorisent leur sélection.',
                    ],
                ],
            ],
            [
                'title' => 'Microbiologie appliquée à l’alimentation',
                'description' => 'Découvrez le rôle des microorganismes dans la fermentation, la conservation des aliments et les problèmes de contamination.',
                'questions' => [
                    [
                        'question' => 'Pour que la pâte à pain de Zineb gonfle, quel microorganisme doit-elle ajouter ?',
                        'choices' => [
                            ['choice_text' => 'Une levure de boulangerie', 'is_correct' => true],
                            ['choice_text' => 'Une moisissure de fromage', 'is_correct' => false],
                            ['choice_text' => 'Un protozoaire aquatique', 'is_correct' => false],
                            ['choice_text' => 'Un bactériophage', 'is_correct' => false],
                        ],
                        'explanation' => 'La levure fermente les sucres de la pâte et libère du dioxyde de carbone : ces bulles de gaz font lever le pain.',
                    ],
                    [
                        'question' => 'Dans un yaourt, quel est le principal produit de la fermentation réalisée par les bactéries lactiques ?',
                        'choices' => [
                            ['choice_text' => 'L’éthanol', 'is_correct' => false],
                            ['choice_text' => 'L’acide acétique', 'is_correct' => false],
                            ['choice_text' => 'L’acide lactique', 'is_correct' => true],
                            ['choice_text' => 'Le dioxyde de carbone', 'is_correct' => false],
                        ],
                        'explanation' => 'Les bactéries lactiques transforment le lactose du lait en acide lactique, qui fait coaguler le lait et donne son goût acidulé au yaourt.',
                    ],
                    [
                        'question' => 'Karim fait cuire un poulet jusqu’à 75 °C à cœur. Que deviennent la plupart des bactéries présentes sur la viande crue ?',
                        'choices' => [
                            ['choice_text' => 'Elles sont détruites par la chaleur de cuisson', 'is_correct' => true],
                            ['choice_text' => 'Elles se multiplient encore plus vite à cette température', 'is_correct' => false],
                            ['choice_text' => 'Elles forment des spores et continuent de se diviser', 'is_correct' => false],
                            ['choice_text' => 'Elles se réfugient dans les os et survivent à la cuisson', 'is_correct' => false],
                        ],
                        'explanation' => 'À 70-75 °C à cœur, la plupart des bactéries meurent. Seules des spores résistent, mais elles ne se divisent pas tant qu’elles restent à l’état de spore.',
                    ],
                    [
                        'question' => 'Les olives en saumure de la grand-mère de Zineb se gardent plusieurs mois dans leur bocal. Qu’est-ce qui les protège de la plupart des microbes ?',
                        'choices' => [
                            ['choice_text' => 'Le sucre naturel de l’olive, qui déshydrate les microbes', 'is_correct' => false],
                            ['choice_text' => 'Le sel de la saumure et l’acidité produite par les bactéries lactiques', 'is_correct' => true],
                            ['choice_text' => 'Le bocal hermétique, qui stérilise les olives de l’intérieur', 'is_correct' => false],
                            ['choice_text' => 'L’huile d’olive du bocal, qui tue les microbes en surface', 'is_correct' => false],
                        ],
                        'explanation' => 'Le sel retient l’eau et les bactéries lactiques acidifient la saumure : la plupart des microbes d’altération n’y survivent pas. Un bocal fermé, à lui seul, ne stérilise rien.',
                    ],
                    [
                        'question' => 'Imane remarque que le couvercle d’une boîte de conserve est bombé. Que doit-elle faire ?',
                        'choices' => [
                            ['choice_text' => 'L’ouvrir : le bombement prouve que la conserve est riche en vitamines', 'is_correct' => false],
                            ['choice_text' => 'La faire chauffer plus longtemps avant de la manger', 'is_correct' => false],
                            ['choice_text' => 'La jeter sans l’ouvrir, car des microbes ont pu produire du gaz', 'is_correct' => true],
                            ['choice_text' => 'La mettre au congélateur pour arrêter le gonflement', 'is_correct' => false],
                        ],
                        'explanation' => 'Un couvercle bombé trahit un dégagement de gaz que des microbes ont pu produire. Dans le doute, on jette la conserve sans la goûter.',
                    ],
                    [
                        'question' => 'Un échantillon de 50 g de lait contient 200 bactéries par gramme. Combien de bactéries contient-il en tout ?',
                        'choices' => [
                            ['choice_text' => '4', 'is_correct' => false],
                            ['choice_text' => '250', 'is_correct' => false],
                            ['choice_text' => '1 000', 'is_correct' => false],
                            ['choice_text' => '10 000', 'is_correct' => true],
                        ],
                        'explanation' => 'À 200 bactéries par gramme, 50 g en contiennent 50 × 200 = 10 000.',
                    ],
                    [
                        'question' => 'Samir coupe du poulet cru, rince vite son couteau, puis s’en sert pour émincer des tomates destinées à une salade. Quel danger crée-t-il ?',
                        'choices' => [
                            ['choice_text' => 'Il fait fermenter la salade en quelques minutes', 'is_correct' => false],
                            ['choice_text' => 'Il rend les tomates plus acides, donc plus sûres', 'is_correct' => false],
                            ['choice_text' => 'Il élimine les bactéries du poulet au contact des légumes', 'is_correct' => false],
                            ['choice_text' => 'Il transfère des bactéries du poulet cru vers la salade', 'is_correct' => true],
                        ],
                        'explanation' => 'Un simple rinçage n’enlève pas les bactéries du poulet cru. Elles passent sur les tomates, mangées sans cuisson : c’est une contamination croisée.',
                    ],
                    [
                        'question' => 'Le lait frais vendu au rayon réfrigéré est pasteurisé. En quoi consiste ce traitement ?',
                        'choices' => [
                            ['choice_text' => 'Une congélation à −18 °C pendant plusieurs jours, qui arrête les microbes', 'is_correct' => false],
                            ['choice_text' => 'Un chauffage modéré suivi d’un refroidissement, qui réduit les microbes', 'is_correct' => true],
                            ['choice_text' => 'Un ajout d’antibiotiques dans le lait, qui tue les bactéries présentes', 'is_correct' => false],
                            ['choice_text' => 'Une ébullition de deux heures qui stérilise le lait et le rend durable', 'is_correct' => false],
                        ],
                        'explanation' => 'La pasteurisation, du nom de Louis Pasteur, chauffe le lait à température modérée pendant un temps court avant de le refroidir. Elle élimine la plupart des microbes en gardant le goût du lait.',
                    ],
                    [
                        'question' => 'Sur une barquette de poulet frais, Anas lit « à consommer jusqu’au 12 ». Que signifie cette mention ?',
                        'choices' => [
                            ['choice_text' => 'Passé cette date, le produit perd un peu de goût mais reste sain', 'is_correct' => false],
                            ['choice_text' => 'Passé cette date, manger le produit présente un risque sanitaire', 'is_correct' => true],
                            ['choice_text' => 'Jusqu’à cette date, le produit est stérile', 'is_correct' => false],
                            ['choice_text' => 'Cette date indique le moment où le produit cesse d’être nutritif', 'is_correct' => false],
                        ],
                        'explanation' => 'C’est une date limite de consommation : au-delà, les bactéries ont pu se multiplier jusqu’à un niveau dangereux, même si l’aspect et l’odeur semblent normaux. Avant cette date, le produit n’est pas stérile pour autant.',
                    ],
                    [
                        'question' => 'Plusieurs convives tombent malades après une mayonnaise maison préparée avec des œufs crus. Quel microorganisme est classiquement en cause dans ce genre d’intoxication ?',
                        'choices' => [
                            ['choice_text' => 'Lactobacillus, la bactérie du yaourt', 'is_correct' => false],
                            ['choice_text' => 'Saccharomyces, la levure du pain', 'is_correct' => false],
                            ['choice_text' => 'Salmonella, qui vit dans l’intestin des volailles', 'is_correct' => true],
                            ['choice_text' => 'Penicillium, la moisissure du fromage', 'is_correct' => false],
                        ],
                        'explanation' => 'Les salmonelles vivent dans l’intestin des volailles et peuvent contaminer les œufs. Les trois autres microorganismes servent à fabriquer des aliments.',
                    ],
                ],
            ],
            [
                'title' => 'Microscope, culture et identification',
                'description' => 'Entraînez-vous à comprendre les bases des observations microscopiques, de la culture et de l’identification des microorganismes.',
                'questions' => [
                    [
                        'question' => 'Hamza prépare une lame avec des bactéries non colorées, qu’il distingue à peine. Quelle étape améliore l’observation ?',
                        'choices' => [
                            ['choice_text' => 'Chauffer la lame jusqu’à ébullition', 'is_correct' => false],
                            ['choice_text' => 'Colorer la préparation pour augmenter le contraste', 'is_correct' => true],
                            ['choice_text' => 'Ajouter une goutte d’antibiotique sur la lame', 'is_correct' => false],
                            ['choice_text' => 'Réduire le grossissement à ×4', 'is_correct' => false],
                        ],
                        'explanation' => 'Les bactéries sont presque transparentes sur le fond clair du microscope. Un colorant les teinte et fait ressortir leur forme et leur groupement.',
                    ],
                    [
                        'question' => 'Après une coloration de Gram, certaines bactéries sont violettes et d’autres roses. Qu’est-ce qui explique cette différence ?',
                        'choices' => [
                            ['choice_text' => 'La structure de leur paroi', 'is_correct' => true],
                            ['choice_text' => 'Leur forme en bâtonnet ou en sphère', 'is_correct' => false],
                            ['choice_text' => 'Leur mobilité grâce aux flagelles', 'is_correct' => false],
                            ['choice_text' => 'Leur besoin d’oxygène', 'is_correct' => false],
                        ],
                        'explanation' => 'Les bactéries à paroi épaisse (Gram positives) gardent le violet, alors que celles à paroi fine (Gram négatives) se décolorent et prennent le rose du second colorant.',
                    ],
                    [
                        'question' => 'Anas laisse sa boîte de Pétri ouverte dix minutes sur la paillasse. Le lendemain, des colonies inattendues y sont apparues. Quel est le problème ?',
                        'choices' => [
                            ['choice_text' => 'La souche étudiée a muté sous l’effet de l’air', 'is_correct' => false],
                            ['choice_text' => 'Des microbes de l’air sont entrés et faussent les résultats', 'is_correct' => true],
                            ['choice_text' => 'La gélose a durci et bloqué la croissance', 'is_correct' => false],
                            ['choice_text' => 'La chaleur de la pièce a tué la souche étudiée', 'is_correct' => false],
                        ],
                        'explanation' => 'Les microbes de l’air se déposent sur la gélose ouverte et forment des colonies parasites. On ne sait plus alors lesquelles viennent de la souche étudiée.',
                    ],
                    [
                        'question' => 'Sur une gélose, Sara voit des colonies blanches et lisses à côté de colonies jaunes et rugueuses. Que lui apprend cette différence d’aspect ?',
                        'choices' => [
                            ['choice_text' => 'Les colonies viennent d’une même cellule de départ', 'is_correct' => false],
                            ['choice_text' => 'Les colonies jaunes sont des virus et les blanches des bactéries', 'is_correct' => false],
                            ['choice_text' => 'La boîte contient plusieurs types de microorganismes', 'is_correct' => true],
                            ['choice_text' => 'Les colonies rugueuses sont des cellules mortes', 'is_correct' => false],
                        ],
                        'explanation' => 'Couleur, relief et taille des colonies donnent un premier indice pour distinguer des microorganismes. L’identification demande ensuite d’autres tests.',
                    ],
                    [
                        'question' => 'Un microscope possède un oculaire 10× et un objectif 40×. Quel est le grossissement total ?',
                        'choices' => [
                            ['choice_text' => '400×', 'is_correct' => true],
                            ['choice_text' => '300×', 'is_correct' => false],
                            ['choice_text' => '50×', 'is_correct' => false],
                            ['choice_text' => '4×', 'is_correct' => false],
                        ],
                        'explanation' => 'Les grossissements se multiplient : 10 × 40 = 400. L’image est donc agrandie 400 fois.',
                    ],
                    [
                        'question' => 'Anas veut obtenir des colonies bien séparées à partir d’un mélange de bactéries. Quelle technique emploie-t-il avec son anse stérile ?',
                        'choices' => [
                            ['choice_text' => 'La coloration de Gram sur lame', 'is_correct' => false],
                            ['choice_text' => 'La mesure du trouble dans un tube', 'is_correct' => false],
                            ['choice_text' => 'La pasteurisation de l’échantillon', 'is_correct' => false],
                            ['choice_text' => 'L’ensemencement en stries sur gélose', 'is_correct' => true],
                        ],
                        'explanation' => 'En traçant des stries de plus en plus espacées, l’anse dépose de moins en moins de cellules, jusqu’à obtenir des colonies isolées.',
                    ],
                    [
                        'question' => 'Quel appareil de laboratoire stérilise le matériel et les milieux de culture avec de la vapeur sous pression ?',
                        'choices' => [
                            ['choice_text' => 'L’incubateur à 37 °C', 'is_correct' => false],
                            ['choice_text' => 'Le bain-marie à 40 °C', 'is_correct' => false],
                            ['choice_text' => 'Le réfrigérateur à 4 °C', 'is_correct' => false],
                            ['choice_text' => 'L’autoclave', 'is_correct' => true],
                        ],
                        'explanation' => 'L’autoclave porte le matériel à 121 °C sous pression, ce qui détruit les microorganismes et leurs spores. L’incubateur, lui, sert à faire pousser les cultures.',
                    ],
                    [
                        'question' => 'Karim veut comparer la vitesse de croissance de deux souches cultivées en bouillon. Que doit-il suivre au cours du temps ?',
                        'choices' => [
                            ['choice_text' => 'Le volume de bouillon présent dans chaque tube', 'is_correct' => false],
                            ['choice_text' => 'Le trouble du bouillon, qui monte avec le nombre de cellules', 'is_correct' => true],
                            ['choice_text' => 'Le pH du bouillon, mesuré une seule fois au départ de l’expérience', 'is_correct' => false],
                            ['choice_text' => 'La température de la pièce où sont rangés les tubes', 'is_correct' => false],
                        ],
                        'explanation' => 'Plus les cellules sont nombreuses, plus le bouillon est trouble : on suit donc cette turbidité, ou densité optique, heure après heure.',
                    ],
                    [
                        'question' => 'Un échantillon d’eau donne trois types de colonies. Quel intérêt présente une culture pure avant d’identifier une souche ?',
                        'choices' => [
                            ['choice_text' => 'Elle permet de faire pousser plusieurs souches dans le même tube', 'is_correct' => false],
                            ['choice_text' => 'Elle dispense d’observer les cellules au microscope', 'is_correct' => false],
                            ['choice_text' => 'Les tests portent alors sur un seul type de microorganisme', 'is_correct' => true],
                            ['choice_text' => 'Elle augmente le nombre d’espèces présentes dans la boîte', 'is_correct' => false],
                        ],
                        'explanation' => 'Si plusieurs souches sont mélangées, on ne sait pas laquelle produit tel résultat. Une culture pure supprime cette ambiguïté.',
                    ],
                    [
                        'question' => 'Au microscope, Lina voit des bactéries sphériques et en conclut qu’il s’agit de staphylocoques dorés. Qu’est-ce qui rend sa conclusion fragile ?',
                        'choices' => [
                            ['choice_text' => 'Plusieurs espèces de bactéries sont aussi sphériques', 'is_correct' => true],
                            ['choice_text' => 'La forme d’une bactérie n’est pas visible au microscope', 'is_correct' => false],
                            ['choice_text' => 'La forme des cellules change à chaque minute', 'is_correct' => false],
                            ['choice_text' => 'Les staphylocoques ne sont pas des bactéries', 'is_correct' => false],
                        ],
                        'explanation' => 'La forme sert de premier tri, mais staphylocoques, streptocoques et pneumocoques sont tous des coques. Il faut compléter par la coloration de Gram, des tests biochimiques ou la génétique.',
                    ],
                ],
            ],
            [
                'title' => 'Virus et interactions avec les cellules',
                'description' => 'Comprenez les caractéristiques essentielles des virus, leur dépendance aux cellules hôtes et les grandes étapes d’une infection virale.',
                'questions' => [
                    [
                        'question' => 'Placé seul dans un bouillon nutritif, un virus ne se multiplie pas, alors qu’une bactérie y prospère. Quelle est la raison ?',
                        'choices' => [
                            ['choice_text' => 'Il n’a pas de matériel génétique à copier', 'is_correct' => false],
                            ['choice_text' => 'Il n’a pas de métabolisme propre et exige une cellule vivante', 'is_correct' => true],
                            ['choice_text' => 'Il se coupe en deux comme une bactérie, ce que le bouillon bloque', 'is_correct' => false],
                            ['choice_text' => 'Il est détruit par les nutriments du bouillon', 'is_correct' => false],
                        ],
                        'explanation' => 'Un virus n’a ni ribosomes ni métabolisme propre. Il doit entrer dans une cellule hôte et détourner ses outils pour fabriquer de nouveaux virus.',
                    ],
                    [
                        'question' => 'Quel nom porte la coque de protéines qui protège le génome d’un virus ?',
                        'choices' => [
                            ['choice_text' => 'La capsule', 'is_correct' => false],
                            ['choice_text' => 'La paroi', 'is_correct' => false],
                            ['choice_text' => 'La capside', 'is_correct' => true],
                            ['choice_text' => 'La membrane plasmique', 'is_correct' => false],
                        ],
                        'explanation' => 'La capside est formée de protéines assemblées autour de l’ADN ou de l’ARN du virus. Elle ne se confond pas avec la capsule, qui entoure certaines bactéries.',
                    ],
                    [
                        'question' => 'Le virus de la grippe est entouré d’une enveloppe lipidique. D’où provient cette membrane ?',
                        'choices' => [
                            ['choice_text' => 'D’une paroi que le virus fabrique avec ses propres enzymes', 'is_correct' => false],
                            ['choice_text' => 'Du noyau de la cellule infectée, détaché lors de la sortie', 'is_correct' => false],
                            ['choice_text' => 'De la membrane de la cellule hôte, emportée à la sortie', 'is_correct' => true],
                            ['choice_text' => 'De bactéries du microbiote qui s’accrochent au virus', 'is_correct' => false],
                        ],
                        'explanation' => 'En bourgeonnant à travers la membrane de la cellule hôte, le virus en emporte un fragment qui devient son enveloppe. Il y ajoute ses propres protéines.',
                    ],
                    [
                        'question' => 'Le virus de l’hépatite B infecte les cellules du foie, mais pas celles de la peau. Quelle explication est la bonne ?',
                        'choices' => [
                            ['choice_text' => 'Les cellules de la peau ne contiennent pas de matériel génétique', 'is_correct' => false],
                            ['choice_text' => 'Les cellules du foie sont plus petites que celles de la peau', 'is_correct' => false],
                            ['choice_text' => 'La peau est trop froide pour que le virus y survive', 'is_correct' => false],
                            ['choice_text' => 'Ses protéines de surface reconnaissent des récepteurs du foie', 'is_correct' => true],
                        ],
                        'explanation' => 'Un virus se fixe sur des récepteurs précis, présents seulement sur certaines cellules. Sans le récepteur adéquat, il ne peut pas entrer.',
                    ],
                    [
                        'question' => 'Comment appelle-t-on un virus qui infecte des bactéries ?',
                        'choices' => [
                            ['choice_text' => 'Un prion', 'is_correct' => false],
                            ['choice_text' => 'Un bactériophage', 'is_correct' => true],
                            ['choice_text' => 'Un plasmide', 'is_correct' => false],
                            ['choice_text' => 'Un protozoaire', 'is_correct' => false],
                        ],
                        'explanation' => 'Un bactériophage, ou phage, s’attaque aux bactéries. Certains phages sont étudiés comme alternative aux antibiotiques.',
                    ],
                    [
                        'question' => 'Une cellule infectée fabrique des protéines virales. De quel équipement le virus se sert-il pour cela ?',
                        'choices' => [
                            ['choice_text' => 'Des ribosomes de la cellule hôte', 'is_correct' => true],
                            ['choice_text' => 'Des ribosomes qu’il apporte avec lui', 'is_correct' => false],
                            ['choice_text' => 'Des lysosomes de la cellule hôte', 'is_correct' => false],
                            ['choice_text' => 'De la paroi de la cellule hôte', 'is_correct' => false],
                        ],
                        'explanation' => 'Un virus n’emporte pas de ribosomes : il utilise ceux de la cellule hôte pour traduire son génome en protéines.',
                    ],
                    [
                        'question' => 'Une cellule infectée libère 40 nouveaux virus. Combien de virus sont libérés au total par 10 cellules infectées de la même façon ?',
                        'choices' => [
                            ['choice_text' => '4 000', 'is_correct' => false],
                            ['choice_text' => '400', 'is_correct' => true],
                            ['choice_text' => '50', 'is_correct' => false],
                            ['choice_text' => '4', 'is_correct' => false],
                        ],
                        'explanation' => 'Chaque cellule en libère 40, donc 10 cellules en libèrent 10 × 40 = 400.',
                    ],
                    [
                        'question' => 'Dans quel ordre se déroulent les grandes étapes d’une infection virale ?',
                        'choices' => [
                            ['choice_text' => 'Entrée, fixation, assemblage, copie du génome, libération', 'is_correct' => false],
                            ['choice_text' => 'Fixation, copie du génome, entrée, libération, assemblage', 'is_correct' => false],
                            ['choice_text' => 'Libération, fixation, entrée, copie du génome, assemblage', 'is_correct' => false],
                            ['choice_text' => 'Fixation, entrée, copie du génome, assemblage, libération', 'is_correct' => true],
                        ],
                        'explanation' => 'Le virus se fixe d’abord à un récepteur et pénètre dans la cellule, puis il copie son génome et fabrique ses protéines. Les nouveaux virus s’assemblent enfin et quittent la cellule.',
                    ],
                    [
                        'question' => 'Un antiviral bloque l’enzyme qui copie le génome d’un virus. Quel effet observe-t-on dans les cellules infectées ?',
                        'choices' => [
                            ['choice_text' => 'Le virus se transforme en bactérie sensible aux antibiotiques', 'is_correct' => false],
                            ['choice_text' => 'Les cellules infectées se divisent plus vite', 'is_correct' => false],
                            ['choice_text' => 'Il se forme beaucoup moins de nouveaux virus', 'is_correct' => true],
                            ['choice_text' => 'Le virus passe plus rapidement dans les cellules voisines', 'is_correct' => false],
                        ],
                        'explanation' => 'Sans copie du génome, la cellule ne peut pas assembler de nouvelles particules virales. La production de virus chute donc.',
                    ],
                    [
                        'question' => 'Lors de sa copie, le génome d’un virus de la grippe subit une erreur qui modifie une protéine de surface. Comment nomme-t-on cet événement ?',
                        'choices' => [
                            ['choice_text' => 'Une mutation', 'is_correct' => true],
                            ['choice_text' => 'Une conjugaison', 'is_correct' => false],
                            ['choice_text' => 'Une sporulation', 'is_correct' => false],
                            ['choice_text' => 'Une fermentation', 'is_correct' => false],
                        ],
                        'explanation' => 'Une mutation est une modification du matériel génétique, fréquente chez les virus à ARN comme celui de la grippe. C’est pourquoi le vaccin antigrippal est mis à jour chaque année.',
                    ],
                ],
            ],
            [
                'title' => 'Microorganismes utiles et microbiote',
                'description' => 'Découvrez les rôles bénéfiques des microorganismes dans le corps humain, l’environnement et certaines activités industrielles.',
                'questions' => [
                    [
                        'question' => 'Que désigne le terme « microbiote » ?',
                        'choices' => [
                            ['choice_text' => 'Le matériel génétique d’une bactérie qui vit dans le tube digestif humain', 'is_correct' => false],
                            ['choice_text' => 'Une espèce bactérienne bien précise qui peuple l’intestin', 'is_correct' => false],
                            ['choice_text' => 'L’ensemble des microorganismes vivant dans un milieu, comme l’intestin', 'is_correct' => true],
                            ['choice_text' => 'Un traitement à base de bactéries vivantes pour l’intestin', 'is_correct' => false],
                        ],
                        'explanation' => 'Le microbiote est la communauté de microorganismes qui peuple un milieu précis, comme l’intestin, la peau ou la bouche.',
                    ],
                    [
                        'question' => 'Après un repas riche en fibres, des bactéries du côlon de Mehdi se mettent à les fermenter. Quel service rendent-elles ?',
                        'choices' => [
                            ['choice_text' => 'Elles fabriquent la bile qui sert à digérer les graisses du repas', 'is_correct' => false],
                            ['choice_text' => 'Elles produisent l’insuline qui règle le taux de sucre', 'is_correct' => false],
                            ['choice_text' => 'Elles dégradent des fibres que nos enzymes ne digèrent pas', 'is_correct' => true],
                            ['choice_text' => 'Elles absorbent l’eau à la place des cellules du côlon', 'is_correct' => false],
                        ],
                        'explanation' => 'Le côlon abrite des bactéries qui fermentent les fibres et libèrent des acides gras utiles aux cellules intestinales. La bile et l’insuline, elles, viennent du foie et du pancréas.',
                    ],
                    [
                        'question' => 'Dans un méthaniseur agricole, des microorganismes transforment du fumier et des déchets de légumes. Quel produit utile en obtient-on ?',
                        'choices' => [
                            ['choice_text' => 'Du pétrole brut destiné à être raffiné en carburant', 'is_correct' => false],
                            ['choice_text' => 'Un biogaz riche en méthane, utilisable comme combustible', 'is_correct' => true],
                            ['choice_text' => 'De l’hydrogène pur destiné aux piles à combustible', 'is_correct' => false],
                            ['choice_text' => 'Du charbon destiné au chauffage des fermes', 'is_correct' => false],
                        ],
                        'explanation' => 'En l’absence d’oxygène, des microorganismes dégradent la matière organique et libèrent du méthane, qui sert de combustible. Pétrole et charbon, eux, mettent des millions d’années à se former.',
                    ],
                    [
                        'question' => 'Les racines du pois chiche de Rachid portent de petits nodules habités par des bactéries du genre Rhizobium. Que fournissent ces bactéries à la plante ?',
                        'choices' => [
                            ['choice_text' => 'De l’eau qu’elles stockent dans les nodules', 'is_correct' => false],
                            ['choice_text' => 'Du dioxyde de carbone pour la photosynthèse', 'is_correct' => false],
                            ['choice_text' => 'Des sels minéraux rares extraits des roches', 'is_correct' => false],
                            ['choice_text' => 'De l’azote sous une forme que la plante peut utiliser', 'is_correct' => true],
                        ],
                        'explanation' => 'Les Rhizobium fixent l’azote de l’air et le transforment en composés que la plante assimile ; en échange, elle les nourrit avec des sucres. C’est pourquoi les légumineuses enrichissent le sol en azote.',
                    ],
                    [
                        'question' => 'Un yaourt affiche la mention « contient des probiotiques ». Que désigne ce mot ?',
                        'choices' => [
                            ['choice_text' => 'Des antibiotiques d’origine naturelle présents dans le lait', 'is_correct' => false],
                            ['choice_text' => 'Des bactéries tuées par la chaleur pour conserver le produit plus longtemps', 'is_correct' => false],
                            ['choice_text' => 'Des microorganismes vivants qui, en bonne quantité, profitent à la santé', 'is_correct' => true],
                            ['choice_text' => 'Des vitamines ajoutées pour renforcer le microbiote', 'is_correct' => false],
                        ],
                        'explanation' => 'Un probiotique est un microorganisme vivant qui, absorbé en quantité suffisante, procure un bénéfice à l’hôte. Un antibiotique, au contraire, sert à éliminer des bactéries.',
                    ],
                    [
                        'question' => 'Un fermenteur contient 3 litres de culture de levures à 5 g de biomasse par litre. Quelle masse de levures renferme-t-il ?',
                        'choices' => [
                            ['choice_text' => '150 g', 'is_correct' => false],
                            ['choice_text' => '15 g', 'is_correct' => true],
                            ['choice_text' => '8 g', 'is_correct' => false],
                            ['choice_text' => '1,7 g', 'is_correct' => false],
                        ],
                        'explanation' => 'À 5 g par litre, 3 litres renferment 3 × 5 = 15 g de levures.',
                    ],
                    [
                        'question' => 'Karim et son cousin ont des habitudes alimentaires très différentes. Que peut-on en déduire sur leur microbiote intestinal ?',
                        'choices' => [
                            ['choice_text' => 'Leurs microbiotes sont identiques à ceux de leurs parents respectifs', 'is_correct' => false],
                            ['choice_text' => 'Leurs microbiotes restent figés depuis la naissance', 'is_correct' => false],
                            ['choice_text' => 'Leurs microbiotes dépendent de leur groupe sanguin', 'is_correct' => false],
                            ['choice_text' => 'Leurs microbiotes diffèrent, l’alimentation façonnant les espèces présentes', 'is_correct' => true],
                        ],
                        'explanation' => 'Le microbiote évolue avec l’alimentation, l’âge, l’environnement et les traitements : deux personnes n’ont donc pas le même.',
                    ],
                    [
                        'question' => 'Une bactérie du sol dégrade une feuille morte en molécules simples. Quel rôle joue-t-elle dans l’écosystème ?',
                        'choices' => [
                            ['choice_text' => 'Décomposeur : elle recycle la matière organique morte', 'is_correct' => true],
                            ['choice_text' => 'Producteur : elle fabrique de la matière organique avec la lumière', 'is_correct' => false],
                            ['choice_text' => 'Consommateur : elle se nourrit d’animaux vivants', 'is_correct' => false],
                            ['choice_text' => 'Prédateur : elle capture de petits insectes', 'is_correct' => false],
                        ],
                        'explanation' => 'Les décomposeurs se nourrissent de matière morte et libèrent des éléments minéraux que les plantes réutilisent.',
                    ],
                    [
                        'question' => 'Dans une station d’épuration, l’eau sale est brassée avec de l’air dans de grands bassins. Quels organismes dégradent surtout la pollution organique ?',
                        'choices' => [
                            ['choice_text' => 'Des bactéries qui se nourrissent de la matière organique de l’eau', 'is_correct' => true],
                            ['choice_text' => 'Des algues géantes qui filtrent les déchets', 'is_correct' => false],
                            ['choice_text' => 'Des virus qui dissolvent les déchets', 'is_correct' => false],
                            ['choice_text' => 'Des moisissures qui flottent à la surface des bassins', 'is_correct' => false],
                        ],
                        'explanation' => 'L’air apporté aux bassins permet à des bactéries aérobies de se multiplier en consommant la matière organique. L’eau ressort débarrassée d’une grande partie de sa pollution.',
                    ],
                    [
                        'question' => 'Après dix jours d’amoxicilline, Hajar a la diarrhée. Quel lien peut-on faire avec son microbiote ?',
                        'choices' => [
                            ['choice_text' => 'Le microbiote a produit trop d’enzymes digestives', 'is_correct' => false],
                            ['choice_text' => 'L’antibiotique est resté dans le sang sans atteindre l’intestin', 'is_correct' => false],
                            ['choice_text' => 'Ses bactéries intestinales ont absorbé l’antibiotique et se sont multipliées', 'is_correct' => false],
                            ['choice_text' => 'L’antibiotique a aussi réduit des bactéries utiles de son intestin', 'is_correct' => true],
                        ],
                        'explanation' => 'Un antibiotique agit aussi sur des bactéries utiles de l’intestin. Ce déséquilibre du microbiote peut provoquer des troubles digestifs passagers.',
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