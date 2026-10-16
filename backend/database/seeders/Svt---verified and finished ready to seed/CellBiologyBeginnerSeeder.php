<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class CellBiologyBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'cell-biology')->firstOrFail();

        $quizSettings = [
            0 => ['duration' => 15, 'passing_score' => 50],
            1 => ['duration' => 20, 'passing_score' => 55],
            2 => ['duration' => 20, 'passing_score' => 55],
            3 => ['duration' => 20, 'passing_score' => 60],
            4 => ['duration' => 20, 'passing_score' => 60],
            5 => ['duration' => 25, 'passing_score' => 60],
            6 => ['duration' => 15, 'passing_score' => 55],
            7 => ['duration' => 25, 'passing_score' => 65],
            8 => ['duration' => 25, 'passing_score' => 65],
        ];

        $quizzes = [
            [
                'title' => 'Organisation générale de la cellule',
                'description' => 'Découvrez les caractéristiques communes des cellules, les différences entre cellules procaryotes et eucaryotes et les principaux niveaux d’organisation cellulaire.',
                'questions' => [
                    [
                        'question' => 'Quelle phrase justifie qu’on appelle la cellule l’unité de base du vivant ?',
                        'choices' => [
                            ['choice_text' => 'Elle contient un noyau délimité par une membrane', 'is_correct' => false],
                            ['choice_text' => 'Elle est assez grande pour être vue à l’œil nu', 'is_correct' => false],
                            ['choice_text' => 'Elle est formée de plusieurs tissus différents', 'is_correct' => false],
                            ['choice_text' => 'Elle assure les fonctions essentielles à la vie', 'is_correct' => true],
                        ],
                        'explanation' => 'La cellule réalise elle-même les fonctions vitales : échanges, production d’énergie, reproduction. Avoir un noyau ou être visible à l’œil nu n’entre pas en compte.',
                    ],
                    [
                        'question' => 'Quel élément entoure directement le cytoplasme de toutes les cellules connues ?',
                        'choices' => [
                            ['choice_text' => 'La paroi cellulaire', 'is_correct' => false],
                            ['choice_text' => 'La membrane plasmique', 'is_correct' => true],
                            ['choice_text' => 'L’enveloppe nucléaire', 'is_correct' => false],
                            ['choice_text' => 'Le cytosquelette', 'is_correct' => false],
                        ],
                        'explanation' => 'La membrane plasmique délimite la cellule et contrôle les échanges avec le milieu. La paroi cellulaire n’est pas présente chez les cellules animales.',
                    ],
                    [
                        'question' => 'Une bactérie observée au microscope ne possède pas de noyau délimité par une membrane. Dans quelle catégorie la classe-t-on ?',
                        'choices' => [
                            ['choice_text' => 'Cellule procaryote', 'is_correct' => true],
                            ['choice_text' => 'Cellule eucaryote', 'is_correct' => false],
                            ['choice_text' => 'Cellule végétale', 'is_correct' => false],
                            ['choice_text' => 'Cellule différenciée', 'is_correct' => false],
                        ],
                        'explanation' => 'Les bactéries sont des procaryotes : leur matériel génétique n’est pas enfermé dans un noyau entouré d’une membrane.',
                    ],
                    [
                        'question' => 'Quelle association décrit une cellule eucaryote ?',
                        'choices' => [
                            ['choice_text' => 'De l’ADN libre dans le cytoplasme, sans organites', 'is_correct' => false],
                            ['choice_text' => 'Un nucléoïde entouré d’une paroi bactérienne', 'is_correct' => false],
                            ['choice_text' => 'Des ribosomes et une membrane, sans autre structure', 'is_correct' => false],
                            ['choice_text' => 'Un noyau et des organites entourés de membranes', 'is_correct' => true],
                        ],
                        'explanation' => 'Une cellule eucaryote est compartimentée : elle a un vrai noyau et des organites limités par des membranes.',
                    ],
                    [
                        'question' => 'Une cellule musculaire et un neurone d’Hajar possèdent le même génome, mais leur forme et leur rôle diffèrent. Quel phénomène cela illustre-t-il ?',
                        'choices' => [
                            ['choice_text' => 'La division en cellules filles', 'is_correct' => false],
                            ['choice_text' => 'La mutation de l’ADN', 'is_correct' => false],
                            ['choice_text' => 'La différenciation cellulaire', 'is_correct' => true],
                            ['choice_text' => 'Le transport actif', 'is_correct' => false],
                        ],
                        'explanation' => 'Le génome est identique, mais chaque type cellulaire active d’autres gènes : c’est la différenciation, qui donne à chaque cellule sa fonction.',
                    ],
                    [
                        'question' => 'Quel ordre va du plus simple au plus complexe ?',
                        'choices' => [
                            ['choice_text' => 'Cellule → molécule → tissu → organite', 'is_correct' => false],
                            ['choice_text' => 'Molécule → organite → cellule → tissu', 'is_correct' => true],
                            ['choice_text' => 'Tissu → cellule → organite → molécule', 'is_correct' => false],
                            ['choice_text' => 'Organite → tissu → molécule → cellule', 'is_correct' => false],
                        ],
                        'explanation' => 'Une molécule peut constituer un organite, qui appartient à une cellule ; des cellules organisées peuvent ensuite former un tissu.',
                    ],
                    [
                        'question' => 'Une cellule sphérique double son rayon. Que devient son rapport surface/volume ?',
                        'choices' => [
                            ['choice_text' => 'Il est multiplié par deux', 'is_correct' => false],
                            ['choice_text' => 'Il est divisé par quatre', 'is_correct' => false],
                            ['choice_text' => 'Il reste inchangé', 'is_correct' => false],
                            ['choice_text' => 'Il est divisé par deux', 'is_correct' => true],
                        ],
                        'explanation' => 'La surface est multipliée par 4 et le volume par 8 : le rapport surface/volume est divisé par 2, et les échanges avec le milieu deviennent moins efficaces.',
                    ],
                    [
                        'question' => 'Sous le microscope, Réda voit une cellule avec une paroi, des chloroplastes et une grande vacuole centrale. De quel type de cellule s’agit-il ?',
                        'choices' => [
                            ['choice_text' => 'Une cellule végétale', 'is_correct' => true],
                            ['choice_text' => 'Une cellule animale', 'is_correct' => false],
                            ['choice_text' => 'Une cellule bactérienne', 'is_correct' => false],
                            ['choice_text' => 'Une cellule de champignon', 'is_correct' => false],
                        ],
                        'explanation' => 'Paroi, chloroplastes et vacuole centrale caractérisent une cellule végétale ; un champignon a une paroi mais pas de chloroplastes.',
                    ],
                    [
                        'question' => 'Un élève affirme : « Toutes les cellules possèdent une paroi cellulaire ». Quelle correction faut-il lui apporter ?',
                        'choices' => [
                            ['choice_text' => 'Les cellules végétales n’ont pas de paroi mais une membrane très épaisse', 'is_correct' => false],
                            ['choice_text' => 'Les cellules animales ont une membrane plasmique mais pas de paroi cellulaire', 'is_correct' => true],
                            ['choice_text' => 'La paroi remplace la membrane plasmique chez les cellules végétales', 'is_correct' => false],
                            ['choice_text' => 'Les cellules bactériennes n’ont ni paroi ni membrane plasmique', 'is_correct' => false],
                        ],
                        'explanation' => 'La membrane plasmique est commune à toutes les cellules, alors que la paroi est une structure supplémentaire présente notamment chez les végétaux et les bactéries.',
                    ],
                    [
                        'question' => 'Une cellule de la peau et une cellule de l’intestin vivent dans des milieux très différents, mais gardent chacune des conditions internes stables. Quel terme désigne cette propriété ?',
                        'choices' => [
                            ['choice_text' => 'La différenciation', 'is_correct' => false],
                            ['choice_text' => 'La compartimentation', 'is_correct' => false],
                            ['choice_text' => 'L’homéostasie', 'is_correct' => true],
                            ['choice_text' => 'La perméabilité sélective', 'is_correct' => false],
                        ],
                        'explanation' => 'L’homéostasie, c’est le maintien d’un milieu interne stable malgré les variations extérieures.',
                    ],
                ],
            ],
            [
                'title' => 'Membrane plasmique et transports',
                'description' => 'Apprenez à reconnaître la structure de la membrane plasmique et à distinguer diffusion, osmose, transport facilité et transport actif à partir de situations simples.',
                'questions' => [
                    [
                        'question' => 'La membrane plasmique est principalement constituée d’une bicouche de...',
                        'choices' => [
                            ['choice_text' => 'Triglycérides', 'is_correct' => false],
                            ['choice_text' => 'Polysaccharides', 'is_correct' => false],
                            ['choice_text' => 'Phospholipides', 'is_correct' => true],
                            ['choice_text' => 'Acides nucléiques', 'is_correct' => false],
                        ],
                        'explanation' => 'Les phospholipides s’organisent en bicouche : leurs têtes hydrophiles sont tournées vers les milieux aqueux et leurs queues hydrophobes vers l’intérieur.',
                    ],
                    [
                        'question' => 'La membrane plasmique est dite sélectivement perméable. Que signifie cette expression ?',
                        'choices' => [
                            ['choice_text' => 'Certaines substances la traversent plus facilement que d’autres', 'is_correct' => true],
                            ['choice_text' => 'Elle laisse passer les substances dans un seul sens', 'is_correct' => false],
                            ['choice_text' => 'Elle s’ouvre et se ferme à intervalles réguliers', 'is_correct' => false],
                            ['choice_text' => 'Elle est traversée librement par l’eau, les gaz et les ions', 'is_correct' => false],
                        ],
                        'explanation' => 'Elle contrôle les échanges : les petites molécules neutres passent directement, tandis que les ions et les grosses molécules ont besoin de protéines ou de vésicules.',
                    ],
                    [
                        'question' => 'Une molécule se déplace spontanément d’une zone où elle est très concentrée vers une zone où elle est moins concentrée, sans dépense d’ATP. Il s’agit de...',
                        'choices' => [
                            ['choice_text' => 'Transport actif', 'is_correct' => false],
                            ['choice_text' => 'Diffusion', 'is_correct' => true],
                            ['choice_text' => 'Endocytose', 'is_correct' => false],
                            ['choice_text' => 'Exocytose', 'is_correct' => false],
                        ],
                        'explanation' => 'La diffusion est un déplacement passif dans le sens du gradient de concentration et ne nécessite pas directement d’énergie cellulaire.',
                    ],
                    [
                        'question' => 'L’osmose correspond au déplacement net de quelle substance ?',
                        'choices' => [
                            ['choice_text' => 'Le glucose, grâce à une protéine de transport', 'is_correct' => false],
                            ['choice_text' => 'Les ions, grâce à une pompe consommant de l’ATP', 'is_correct' => false],
                            ['choice_text' => 'L’eau, à travers une membrane semi-perméable', 'is_correct' => true],
                            ['choice_text' => 'Les protéines, vers l’extérieur dans des vésicules', 'is_correct' => false],
                        ],
                        'explanation' => 'L’osmose est le mouvement de l’eau vers la solution la plus concentrée en solutés, à travers une membrane semi-perméable.',
                    ],
                    [
                        'question' => 'Salma plonge des globules rouges dans une solution salée beaucoup plus concentrée que leur cytoplasme. Que se passe-t-il ?',
                        'choices' => [
                            ['choice_text' => 'L’eau sort des cellules, qui rétrécissent', 'is_correct' => true],
                            ['choice_text' => 'L’eau entre dans les cellules, qui gonflent', 'is_correct' => false],
                            ['choice_text' => 'Les sels sortent des cellules par osmose', 'is_correct' => false],
                            ['choice_text' => 'Les cellules éclatent sous l’afflux d’eau', 'is_correct' => false],
                        ],
                        'explanation' => 'Le milieu est hypertonique : l’eau quitte les cellules vers la solution la plus concentrée, et elles se ratatinent.',
                    ],
                    [
                        'question' => 'Le glucose traverse une membrane grâce à une protéine de transport, sans utilisation directe d’ATP et en suivant son gradient. Quel mécanisme correspond le mieux ?',
                        'choices' => [
                            ['choice_text' => 'Diffusion simple', 'is_correct' => false],
                            ['choice_text' => 'Transport actif', 'is_correct' => false],
                            ['choice_text' => 'Endocytose', 'is_correct' => false],
                            ['choice_text' => 'Diffusion facilitée', 'is_correct' => true],
                        ],
                        'explanation' => 'La diffusion facilitée utilise une protéine membranaire mais reste passive lorsque la substance suit son gradient de concentration.',
                    ],
                    [
                        'question' => 'Les cellules de l’intestin de Karim pompent des ions contre leur gradient en consommant de l’ATP. Comment nomme-t-on ce transport ?',
                        'choices' => [
                            ['choice_text' => 'Diffusion facilitée', 'is_correct' => false],
                            ['choice_text' => 'Osmose', 'is_correct' => false],
                            ['choice_text' => 'Transport actif', 'is_correct' => true],
                            ['choice_text' => 'Diffusion simple', 'is_correct' => false],
                        ],
                        'explanation' => 'Aller contre le gradient coûte de l’énergie : le transport est dit actif parce que la cellule dépense de l’ATP.',
                    ],
                    [
                        'question' => 'Une cellule englobe une grosse particule en formant une vésicule à partir de sa membrane. Ce phénomène est...',
                        'choices' => [
                            ['choice_text' => 'Une endocytose', 'is_correct' => true],
                            ['choice_text' => 'Une diffusion simple', 'is_correct' => false],
                            ['choice_text' => 'Une osmose', 'is_correct' => false],
                            ['choice_text' => 'Une exocytose', 'is_correct' => false],
                        ],
                        'explanation' => 'L’endocytose permet à la cellule d’introduire des particules ou des molécules volumineuses grâce à une vésicule formée par invagination de la membrane.',
                    ],
                    [
                        'question' => 'Une cellule libère une protéine sécrétée en fusionnant une vésicule avec sa membrane plasmique. Quel mécanisme intervient ?',
                        'choices' => [
                            ['choice_text' => 'Endocytose', 'is_correct' => false],
                            ['choice_text' => 'Exocytose', 'is_correct' => true],
                            ['choice_text' => 'Diffusion simple', 'is_correct' => false],
                            ['choice_text' => 'Osmose', 'is_correct' => false],
                        ],
                        'explanation' => 'Lors de l’exocytose, une vésicule intracellulaire fusionne avec la membrane plasmique et libère son contenu à l’extérieur.',
                    ],
                    [
                        'question' => 'Quel nom porte le modèle de membrane où des protéines sont insérées dans une bicouche mobile de phospholipides ?',
                        'choices' => [
                            ['choice_text' => 'Le modèle clé-serrure', 'is_correct' => false],
                            ['choice_text' => 'Le modèle de la double hélice', 'is_correct' => false],
                            ['choice_text' => 'Le modèle chimiosmotique', 'is_correct' => false],
                            ['choice_text' => 'Le modèle de la mosaïque fluide', 'is_correct' => true],
                        ],
                        'explanation' => 'La bicouche de phospholipides est fluide et des protéines y sont insérées comme les pièces d’une mosaïque.',
                    ],
                ],
            ],
            [
                'title' => 'Organites et fonctions cellulaires',
                'description' => 'Identifiez les principaux organites des cellules eucaryotes et reliez leur structure à leur rôle dans le fonctionnement de la cellule.',
                'questions' => [
                    [
                        'question' => 'Quel organite contient la majeure partie de l’ADN d’une cellule eucaryote ?',
                        'choices' => [
                            ['choice_text' => 'Le lysosome', 'is_correct' => false],
                            ['choice_text' => 'Le noyau', 'is_correct' => true],
                            ['choice_text' => 'La vacuole', 'is_correct' => false],
                            ['choice_text' => 'Le centrosome', 'is_correct' => false],
                        ],
                        'explanation' => 'Le noyau abrite la quasi-totalité de l’ADN ; les mitochondries et les chloroplastes n’en gardent qu’une petite quantité.',
                    ],
                    [
                        'question' => 'Quel est le rôle général des ribosomes ?',
                        'choices' => [
                            ['choice_text' => 'Dégrader les déchets cellulaires', 'is_correct' => false],
                            ['choice_text' => 'Produire de l’ATP', 'is_correct' => false],
                            ['choice_text' => 'Copier l’ADN avant la division', 'is_correct' => false],
                            ['choice_text' => 'Fabriquer les protéines', 'is_correct' => true],
                        ],
                        'explanation' => 'Les ribosomes assemblent les acides aminés selon l’information portée par l’ARN messager afin de fabriquer des protéines.',
                    ],
                    [
                        'question' => 'Une cellule a besoin de beaucoup d’énergie utilisable pour son activité. Quel organite est particulièrement important pour cette production ?',
                        'choices' => [
                            ['choice_text' => 'La mitochondrie', 'is_correct' => true],
                            ['choice_text' => 'Le lysosome', 'is_correct' => false],
                            ['choice_text' => 'Le réticulum rugueux', 'is_correct' => false],
                            ['choice_text' => 'Le centriole', 'is_correct' => false],
                        ],
                        'explanation' => 'Les mitochondries réalisent une grande partie de la respiration cellulaire et produisent de l’ATP, une forme d’énergie directement utilisable par de nombreux processus cellulaires.',
                    ],
                    [
                        'question' => 'Quel organite est associé à la photosynthèse dans une cellule végétale ?',
                        'choices' => [
                            ['choice_text' => 'Le ribosome', 'is_correct' => false],
                            ['choice_text' => 'Le chloroplaste', 'is_correct' => true],
                            ['choice_text' => 'L’appareil de Golgi', 'is_correct' => false],
                            ['choice_text' => 'Le centrosome', 'is_correct' => false],
                        ],
                        'explanation' => 'Les chloroplastes contiennent notamment la chlorophylle et sont le siège de la photosynthèse chez les cellules végétales et les algues.',
                    ],
                    [
                        'question' => 'Le réticulum endoplasmique rugueux est couvert de ribosomes. Quel avantage cette association apporte-t-elle ?',
                        'choices' => [
                            ['choice_text' => 'Les ribosomes y sont stockés en attendant d’être utilisés', 'is_correct' => false],
                            ['choice_text' => 'Le réticulum reproduit l’ADN pour les ribosomes', 'is_correct' => false],
                            ['choice_text' => 'Le réticulum produit l’énergie des ribosomes', 'is_correct' => false],
                            ['choice_text' => 'Les protéines synthétisées entrent directement dans le réticulum', 'is_correct' => true],
                        ],
                        'explanation' => 'Les ribosomes fixés au réticulum rugueux injectent les protéines dans celui-ci, où elles sont repliées avant d’être sécrétées ou insérées dans une membrane.',
                    ],
                    [
                        'question' => 'Une protéine nouvellement fabriquée doit être triée, modifiée puis envoyée vers sa destination. Quel organite joue un rôle central dans ces étapes ?',
                        'choices' => [
                            ['choice_text' => 'Le chloroplaste', 'is_correct' => false],
                            ['choice_text' => 'Le nucléole', 'is_correct' => false],
                            ['choice_text' => 'L’appareil de Golgi', 'is_correct' => true],
                            ['choice_text' => 'La mitochondrie', 'is_correct' => false],
                        ],
                        'explanation' => 'L’appareil de Golgi modifie, trie et conditionne de nombreuses protéines et lipides dans des vésicules qui les dirigent vers leur destination.',
                    ],
                    [
                        'question' => 'Une cellule élimine des composants cellulaires usés à l’aide de petites structures riches en enzymes digestives. De quelles structures s’agit-il chez de nombreuses cellules animales ?',
                        'choices' => [
                            ['choice_text' => 'Des lysosomes', 'is_correct' => true],
                            ['choice_text' => 'Des chloroplastes', 'is_correct' => false],
                            ['choice_text' => 'Des ribosomes', 'is_correct' => false],
                            ['choice_text' => 'Des nucléoles', 'is_correct' => false],
                        ],
                        'explanation' => 'Les lysosomes contiennent des enzymes capables de dégrader divers composants cellulaires et matériaux internalisés.',
                    ],
                    [
                        'question' => 'Une cellule végétale peut rester ferme grâce à une grande structure remplie de solution aqueuse. Quelle structure est concernée ?',
                        'choices' => [
                            ['choice_text' => 'L’appareil de Golgi', 'is_correct' => false],
                            ['choice_text' => 'Le ribosome', 'is_correct' => false],
                            ['choice_text' => 'Le centrosome', 'is_correct' => false],
                            ['choice_text' => 'La vacuole centrale', 'is_correct' => true],
                        ],
                        'explanation' => 'La vacuole centrale contient notamment de l’eau et des solutés et contribue à la pression de turgescence qui aide à maintenir la rigidité des cellules végétales.',
                    ],
                    [
                        'question' => 'Une cellule eucaryote contient plusieurs compartiments spécialisés. Quel avantage en tire-t-elle ?',
                        'choices' => [
                            ['choice_text' => 'Les réactions se mélangent et vont plus vite', 'is_correct' => false],
                            ['choice_text' => 'La cellule peut se passer d’échanges avec le milieu', 'is_correct' => false],
                            ['choice_text' => 'Chaque réaction se déroule dans un milieu adapté', 'is_correct' => true],
                            ['choice_text' => 'Chaque compartiment possède son propre noyau', 'is_correct' => false],
                        ],
                        'explanation' => 'La compartimentation sépare les réactions incompatibles et crée, dans chaque organite, les conditions qui lui conviennent.',
                    ],
                    [
                        'question' => 'Quel réseau de filaments soutient la forme de la cellule et guide le déplacement des organites ?',
                        'choices' => [
                            ['choice_text' => 'L’enveloppe nucléaire', 'is_correct' => false],
                            ['choice_text' => 'Le cytosquelette', 'is_correct' => true],
                            ['choice_text' => 'Le réticulum endoplasmique', 'is_correct' => false],
                            ['choice_text' => 'L’appareil de Golgi', 'is_correct' => false],
                        ],
                        'explanation' => 'Le cytosquelette forme une charpente interne de filaments qui donne sa forme à la cellule et sert de rails aux organites.',
                    ],
                ],
            ],
            [
                'title' => 'Noyau, ADN et cycle cellulaire',
                'description' => 'Comprenez le rôle du noyau, l’organisation générale de l’ADN et les grandes étapes du cycle cellulaire et de la mitose.',
                'questions' => [
                    [
                        'question' => 'Quelle structure sépare le contenu du noyau du cytoplasme ?',
                        'choices' => [
                            ['choice_text' => 'L’enveloppe nucléaire', 'is_correct' => true],
                            ['choice_text' => 'La membrane plasmique', 'is_correct' => false],
                            ['choice_text' => 'La paroi cellulaire', 'is_correct' => false],
                            ['choice_text' => 'Le cytosquelette', 'is_correct' => false],
                        ],
                        'explanation' => 'L’enveloppe nucléaire, une double membrane percée de pores, isole l’ADN du cytoplasme tout en laissant passer les molécules.',
                    ],
                    [
                        'question' => 'L’ADN d’une cellule contient surtout quel type d’information ?',
                        'choices' => [
                            ['choice_text' => 'Les réserves d’énergie pour la division', 'is_correct' => false],
                            ['choice_text' => 'Le programme de digestion des aliments', 'is_correct' => false],
                            ['choice_text' => 'Les instructions pour fabriquer les protéines', 'is_correct' => true],
                            ['choice_text' => 'La composition de la membrane plasmique', 'is_correct' => false],
                        ],
                        'explanation' => 'Les gènes de l’ADN codent les protéines qui assurent le fonctionnement de la cellule.',
                    ],
                    [
                        'question' => 'Avant qu’une cellule se divise, elle doit...',
                        'choices' => [
                            ['choice_text' => 'Détruire son noyau', 'is_correct' => false],
                            ['choice_text' => 'Éliminer ses ribosomes', 'is_correct' => false],
                            ['choice_text' => 'Copier son ADN', 'is_correct' => true],
                            ['choice_text' => 'Arrêter son métabolisme', 'is_correct' => false],
                        ],
                        'explanation' => 'La duplication de l’ADN avant la division permet de transmettre une copie du matériel génétique à chaque cellule fille.',
                    ],
                    [
                        'question' => 'Chez l’être humain, une cellule de peau se divise par mitose. Que produit cette division ?',
                        'choices' => [
                            ['choice_text' => 'Quatre cellules filles différentes entre elles', 'is_correct' => false],
                            ['choice_text' => 'Deux cellules filles identiques à la cellule mère', 'is_correct' => true],
                            ['choice_text' => 'Deux cellules filles avec la moitié des chromosomes', 'is_correct' => false],
                            ['choice_text' => 'Une cellule fille avec deux noyaux', 'is_correct' => false],
                        ],
                        'explanation' => 'La mitose répartit les chromosomes dupliqués en deux lots identiques : chaque cellule fille a le même nombre de chromosomes que la cellule mère.',
                    ],
                    [
                        'question' => 'Un chercheur arrête une cellule juste après la duplication de son ADN. Que voit-il dans chaque chromosome ?',
                        'choices' => [
                            ['choice_text' => 'Une seule chromatide épaissie', 'is_correct' => false],
                            ['choice_text' => 'Deux chromatides portant des gènes différents', 'is_correct' => false],
                            ['choice_text' => 'Une chromatide et une copie d’ARN', 'is_correct' => false],
                            ['choice_text' => 'Deux chromatides sœurs identiques', 'is_correct' => true],
                        ],
                        'explanation' => 'La réplication copie chaque chromosome : il est alors formé de deux chromatides sœurs identiques, jointes jusqu’à la division.',
                    ],
                    [
                        'question' => 'À quoi sert la mitose chez un organisme pluricellulaire ?',
                        'choices' => [
                            ['choice_text' => 'À permettre la croissance et le renouvellement', 'is_correct' => true],
                            ['choice_text' => 'À produire les cellules sexuelles', 'is_correct' => false],
                            ['choice_text' => 'À créer de nouveaux gènes à chaque division', 'is_correct' => false],
                            ['choice_text' => 'À fabriquer des protéines dans le cytoplasme', 'is_correct' => false],
                        ],
                        'explanation' => 'La mitose multiplie les cellules identiques : elle fait grandir l’organisme et remplace les cellules perdues.',
                    ],
                    [
                        'question' => 'Au microscope, Hajar observe des chromosomes alignés au centre de la cellule. Quelle phase de la mitose est-ce ?',
                        'choices' => [
                            ['choice_text' => 'La prophase', 'is_correct' => false],
                            ['choice_text' => 'La métaphase', 'is_correct' => true],
                            ['choice_text' => 'L’anaphase', 'is_correct' => false],
                            ['choice_text' => 'La télophase', 'is_correct' => false],
                        ],
                        'explanation' => 'En métaphase, les chromosomes se placent au centre de la cellule ; ils se séparent ensuite en anaphase.',
                    ],
                    [
                        'question' => 'Un médicament empêche la séparation correcte des chromosomes pendant la division. Quel événement est directement perturbé ?',
                        'choices' => [
                            ['choice_text' => 'La diffusion de l’oxygène à travers la membrane plasmique', 'is_correct' => false],
                            ['choice_text' => 'La digestion des lipides par les enzymes des lysosomes', 'is_correct' => false],
                            ['choice_text' => 'La synthèse des protéines par les ribosomes libres', 'is_correct' => false],
                            ['choice_text' => 'La répartition du matériel génétique entre les cellules filles', 'is_correct' => true],
                        ],
                        'explanation' => 'La séparation des chromosomes est indispensable pour distribuer correctement le matériel génétique dans les deux cellules filles.',
                    ],
                    [
                        'question' => 'Une cellule humaine à 46 chromosomes se divise par mitose. Combien de chromosomes chaque cellule fille reçoit-elle ?',
                        'choices' => [
                            ['choice_text' => '23 chromosomes', 'is_correct' => false],
                            ['choice_text' => '92 chromosomes', 'is_correct' => false],
                            ['choice_text' => '46 chromosomes', 'is_correct' => true],
                            ['choice_text' => '44 chromosomes', 'is_correct' => false],
                        ],
                        'explanation' => 'La mitose conserve le nombre de chromosomes : 46 dans la cellule mère, donc 46 dans chaque cellule fille. C’est la méiose qui aboutit à 23.',
                    ],
                    [
                        'question' => 'Un neurone adulte reste fonctionnel pendant des années sans se diviser. Qu’illustre cette situation ?',
                        'choices' => [
                            ['choice_text' => 'Certaines cellules sortent du cycle de division', 'is_correct' => true],
                            ['choice_text' => 'Une cellule doit se diviser pour rester vivante', 'is_correct' => false],
                            ['choice_text' => 'Une cellule spécialisée perd son ADN en vieillissant', 'is_correct' => false],
                            ['choice_text' => 'Le cycle cellulaire dure le même temps partout', 'is_correct' => false],
                        ],
                        'explanation' => 'Beaucoup de cellules spécialisées quittent le cycle de division tout en restant actives.',
                    ],
                ],
            ],
            [
                'title' => 'Énergie et métabolisme cellulaire',
                'description' => 'Explorez l’utilisation de l’ATP, la respiration cellulaire et la photosynthèse à partir de situations et de calculs énergétiques simples.',
                'questions' => [
                    [
                        'question' => 'Que signifie l’expression « monnaie énergétique » à propos de l’ATP ?',
                        'choices' => [
                            ['choice_text' => 'Elle est échangée entre cellules contre des nutriments', 'is_correct' => false],
                            ['choice_text' => 'Elle stocke l’énergie pendant plusieurs mois', 'is_correct' => false],
                            ['choice_text' => 'Elle cède vite son énergie à de nombreuses réactions', 'is_correct' => true],
                            ['choice_text' => 'Elle remplace le glucose dans la respiration', 'is_correct' => false],
                        ],
                        'explanation' => 'L’ATP est le moyen d’échange d’énergie de la cellule : elle en cède rapidement à des réactions très variées, puis se régénère.',
                    ],
                    [
                        'question' => 'Où se déroule la glycolyse ?',
                        'choices' => [
                            ['choice_text' => 'Dans la mitochondrie', 'is_correct' => false],
                            ['choice_text' => 'Dans le noyau', 'is_correct' => false],
                            ['choice_text' => 'Dans le chloroplaste', 'is_correct' => false],
                            ['choice_text' => 'Dans le cytosol', 'is_correct' => true],
                        ],
                        'explanation' => 'La glycolyse a lieu dans le cytosol, avant l’entrée des produits dans la mitochondrie.',
                    ],
                    [
                        'question' => 'À quoi sert principalement le glucose dans la respiration cellulaire ?',
                        'choices' => [
                            ['choice_text' => 'À produire du dioxygène pour la cellule', 'is_correct' => false],
                            ['choice_text' => 'À fournir l’énergie qui sert à fabriquer de l’ATP', 'is_correct' => true],
                            ['choice_text' => 'À fabriquer directement les acides aminés', 'is_correct' => false],
                            ['choice_text' => 'À synthétiser l’ADN avant la division', 'is_correct' => false],
                        ],
                        'explanation' => 'La dégradation du glucose libère de l’énergie, récupérée sous forme d’ATP.',
                    ],
                    [
                        'question' => 'Lors d’un sprint, les cellules musculaires d’Omar consomment beaucoup plus d’ATP. Quelle en est la raison principale ?',
                        'choices' => [
                            ['choice_text' => 'L’ATP sert à évacuer la chaleur du muscle', 'is_correct' => false],
                            ['choice_text' => 'La contraction musculaire consomme de l’énergie', 'is_correct' => true],
                            ['choice_text' => 'Le muscle remplace l’oxygène par de l’ATP', 'is_correct' => false],
                            ['choice_text' => 'L’effort fait augmenter la quantité d’ADN', 'is_correct' => false],
                        ],
                        'explanation' => 'Les protéines contractiles dépensent de l’ATP à chaque contraction ; plus l’effort est intense, plus la demande augmente.',
                    ],
                    [
                        'question' => 'Une plante exposée à la lumière transforme du dioxyde de carbone et de l’eau en matière organique. Quel processus réalise cette transformation ?',
                        'choices' => [
                            ['choice_text' => 'La photosynthèse', 'is_correct' => true],
                            ['choice_text' => 'La respiration cellulaire', 'is_correct' => false],
                            ['choice_text' => 'La diffusion', 'is_correct' => false],
                            ['choice_text' => 'L’exocytose', 'is_correct' => false],
                        ],
                        'explanation' => 'La photosynthèse utilise l’énergie lumineuse pour fabriquer de la matière organique à partir notamment de dioxyde de carbone et d’eau.',
                    ],
                    [
                        'question' => 'Lors de la photosynthèse en pleine lumière, quels gaz une feuille absorbe-t-elle et rejette-t-elle ?',
                        'choices' => [
                            ['choice_text' => 'Elle absorbe du dioxygène et rejette du dioxyde de carbone', 'is_correct' => false],
                            ['choice_text' => 'Elle absorbe de l’azote et rejette du dioxygène', 'is_correct' => false],
                            ['choice_text' => 'Elle absorbe du dioxyde de carbone et rejette de l’azote', 'is_correct' => false],
                            ['choice_text' => 'Elle absorbe du dioxyde de carbone et rejette du dioxygène', 'is_correct' => true],
                        ],
                        'explanation' => 'En lumière, la photosynthèse consomme du dioxyde de carbone et libère du dioxygène ; la respiration fait l’inverse.',
                    ],
                    [
                        'question' => 'Un poison bloque la pompe à sodium d’une cellule. Quel processus est affecté en priorité ?',
                        'choices' => [
                            ['choice_text' => 'La diffusion de l’oxygène', 'is_correct' => false],
                            ['choice_text' => 'L’osmose de l’eau vers l’extérieur', 'is_correct' => false],
                            ['choice_text' => 'Le transport actif des ions', 'is_correct' => true],
                            ['choice_text' => 'La réplication de l’ADN', 'is_correct' => false],
                        ],
                        'explanation' => 'Cette pompe déplace les ions contre leur gradient grâce à l’ATP ; si elle est bloquée, le transport actif s’arrête.',
                    ],
                    [
                        'question' => 'Que se passe-t-il quand l’ATP est hydrolysée ?',
                        'choices' => [
                            ['choice_text' => 'Elle absorbe de l’énergie et donne du glucose', 'is_correct' => false],
                            ['choice_text' => 'Elle libère de l’énergie et forme de l’ADP', 'is_correct' => true],
                            ['choice_text' => 'Elle libère de l’énergie et donne de l’ADN', 'is_correct' => false],
                            ['choice_text' => 'Elle absorbe de l’énergie et se transforme en ARN', 'is_correct' => false],
                        ],
                        'explanation' => 'Couper le phosphate terminal libère de l’énergie que la cellule couple à d’autres réactions ; il reste de l’ADP.',
                    ],
                    [
                        'question' => 'Salma laisse une plante cinq jours dans l’obscurité complète. Quelle conséquence observe-t-on sur sa photosynthèse ?',
                        'choices' => [
                            ['choice_text' => 'Elle continue au même rythme grâce à l’ATP', 'is_correct' => false],
                            ['choice_text' => 'Elle s’accélère pour compenser le manque de lumière', 'is_correct' => false],
                            ['choice_text' => 'Elle est prise en charge par les mitochondries', 'is_correct' => false],
                            ['choice_text' => 'Elle chute, faute d’énergie lumineuse', 'is_correct' => true],
                        ],
                        'explanation' => 'La photosynthèse a besoin de lumière : sans elle, la production de matière organique s’effondre.',
                    ],
                    [
                        'question' => 'Les cellules d’une feuille contiennent des mitochondries et des chloroplastes. Quelle différence de rôle les distingue ?',
                        'choices' => [
                            ['choice_text' => 'Chloroplaste : photosynthèse ; mitochondrie : respiration', 'is_correct' => true],
                            ['choice_text' => 'Chloroplaste : respiration ; mitochondrie : photosynthèse', 'is_correct' => false],
                            ['choice_text' => 'Chloroplaste : photosynthèse ; mitochondrie : synthèse de l’ADN', 'is_correct' => false],
                            ['choice_text' => 'Chloroplaste : digestion ; mitochondrie : respiration', 'is_correct' => false],
                        ],
                        'explanation' => 'Le chloroplaste convertit la lumière en matière organique, la mitochondrie récupère l’énergie des nutriments : les deux fonctions sont complémentaires.',
                    ],
                ],
            ],
            [
                'title' => 'Synthèse et devenir des protéines',
                'description' => 'Suivez le trajet général d’une protéine, de l’information génétique jusqu’à son éventuelle modification, son tri et son exportation par la cellule.',
                'questions' => [
                    [
                        'question' => 'Quel type de molécule transporte une copie de l’information d’un gène vers les ribosomes ?',
                        'choices' => [
                            ['choice_text' => 'L’ARN messager', 'is_correct' => true],
                            ['choice_text' => 'L’ARN de transfert', 'is_correct' => false],
                            ['choice_text' => 'L’ADN du noyau', 'is_correct' => false],
                            ['choice_text' => 'Un ribosome libre', 'is_correct' => false],
                        ],
                        'explanation' => 'L’ARN messager est transcrit à partir de l’ADN et sert de matrice pour l’assemblage des acides aminés au niveau des ribosomes.',
                    ],
                    [
                        'question' => 'Les protéines sont constituées de chaînes formées à partir de...',
                        'choices' => [
                            ['choice_text' => 'Nucléotides', 'is_correct' => false],
                            ['choice_text' => 'Phospholipides', 'is_correct' => false],
                            ['choice_text' => 'Acides aminés', 'is_correct' => true],
                            ['choice_text' => 'Monosaccharides', 'is_correct' => false],
                        ],
                        'explanation' => 'Les acides aminés sont les unités de base des protéines et sont reliés entre eux lors de la traduction.',
                    ],
                    [
                        'question' => 'Quel processus permet au ribosome d’assembler une chaîne polypeptidique à partir d’un ARN messager ?',
                        'choices' => [
                            ['choice_text' => 'La transcription', 'is_correct' => false],
                            ['choice_text' => 'La traduction', 'is_correct' => true],
                            ['choice_text' => 'La réplication', 'is_correct' => false],
                            ['choice_text' => 'L’exocytose', 'is_correct' => false],
                        ],
                        'explanation' => 'La traduction lit la séquence de l’ARN messager et relie les acides aminés dans l’ordre approprié.',
                    ],
                    [
                        'question' => 'Une cellule de glande fabrique une enzyme destinée à être sécrétée. Quel organite reçoit la protéine à peine synthétisée ?',
                        'choices' => [
                            ['choice_text' => 'L’appareil de Golgi', 'is_correct' => false],
                            ['choice_text' => 'Le réticulum endoplasmique lisse', 'is_correct' => false],
                            ['choice_text' => 'L’enveloppe nucléaire', 'is_correct' => false],
                            ['choice_text' => 'Le réticulum endoplasmique rugueux', 'is_correct' => true],
                        ],
                        'explanation' => 'Les ribosomes de la voie de sécrétion sont fixés au réticulum rugueux, où la protéine entre dès sa synthèse.',
                    ],
                    [
                        'question' => 'Après le réticulum, une protéine à sécréter arrive dans l’appareil de Golgi. Que lui fait-il subir ?',
                        'choices' => [
                            ['choice_text' => 'Il la dégrade en acides aminés', 'is_correct' => false],
                            ['choice_text' => 'Il la recopie sous forme d’ARN', 'is_correct' => false],
                            ['choice_text' => 'Il la modifie, la trie et l’expédie', 'is_correct' => true],
                            ['choice_text' => 'Il la renvoie dans le noyau', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans le Golgi, la protéine est modifiée, triée, puis emballée dans des vésicules vers sa destination.',
                    ],
                    [
                        'question' => 'Quelle conséquence peut avoir une mutation qui change un codon ?',
                        'choices' => [
                            ['choice_text' => 'Un acide aminé de la protéine peut être remplacé', 'is_correct' => true],
                            ['choice_text' => 'Le ribosome change de forme dans toute la cellule', 'is_correct' => false],
                            ['choice_text' => 'Le nombre de chromosomes est modifié', 'is_correct' => false],
                            ['choice_text' => 'La membrane plasmique devient plus épaisse', 'is_correct' => false],
                        ],
                        'explanation' => 'Un codon différent peut faire insérer un autre acide aminé, ce qui modifie parfois la forme et la fonction de la protéine.',
                    ],
                    [
                        'question' => 'Réda dit qu’un ribosome « lit la protéine ». Comment corriger cette phrase ?',
                        'choices' => [
                            ['choice_text' => 'Le ribosome lit l’ADN et construit la protéine', 'is_correct' => false],
                            ['choice_text' => 'Le ribosome lit la protéine et construit l’ARN', 'is_correct' => false],
                            ['choice_text' => 'Le ribosome lit l’ARN messager et construit la protéine', 'is_correct' => true],
                            ['choice_text' => 'Le ribosome lit les acides aminés et construit l’ARN messager', 'is_correct' => false],
                        ],
                        'explanation' => 'Le ribosome lit l’ARN messager codon par codon et relie les acides aminés correspondants.',
                    ],
                    [
                        'question' => 'Où se déroule la transcription d’un gène dans une cellule eucaryote ?',
                        'choices' => [
                            ['choice_text' => 'Dans le ribosome', 'is_correct' => false],
                            ['choice_text' => 'Dans le lysosome', 'is_correct' => false],
                            ['choice_text' => 'Dans l’appareil de Golgi', 'is_correct' => false],
                            ['choice_text' => 'Dans le noyau', 'is_correct' => true],
                        ],
                        'explanation' => 'L’ADN reste dans le noyau : c’est là que le gène est copié en ARN messager, qui sort ensuite vers le cytoplasme.',
                    ],
                    [
                        'question' => 'Deux cellules d’un même individu ont le même ADN mais fabriquent des protéines différentes. Comment l’expliquer ?',
                        'choices' => [
                            ['choice_text' => 'Elles n’expriment pas les mêmes gènes', 'is_correct' => true],
                            ['choice_text' => 'Elles ont remplacé une partie de leur ADN', 'is_correct' => false],
                            ['choice_text' => 'Les protéines se fabriquent sans gène', 'is_correct' => false],
                            ['choice_text' => 'Elles possèdent des ribosomes de nature différente', 'is_correct' => false],
                        ],
                        'explanation' => 'Chaque type cellulaire active un lot de gènes propre : l’ADN est identique, mais son utilisation diffère.',
                    ],
                    [
                        'question' => 'Quel trajet suit une protéine membranaire depuis sa synthèse jusqu’à la membrane plasmique ?',
                        'choices' => [
                            ['choice_text' => 'Ribosome du RE rugueux → Golgi → RE → vésicule → membrane', 'is_correct' => false],
                            ['choice_text' => 'Ribosome du RE rugueux → RE → Golgi → vésicule → membrane', 'is_correct' => true],
                            ['choice_text' => 'Golgi → RE rugueux → ribosome → vésicule → membrane', 'is_correct' => false],
                            ['choice_text' => 'Ribosome → noyau → Golgi → vésicule → membrane', 'is_correct' => false],
                        ],
                        'explanation' => 'De nombreuses protéines membranaires empruntent la voie sécrétoire : synthèse sur le RE rugueux, passage par le Golgi, puis transport en vésicule vers la membrane.',
                    ],
                ],
            ],
            [
                'title' => 'Microscopie et observation cellulaire',
                'description' => 'Entraînez-vous à interpréter des observations microscopiques simples, à calculer un grossissement et à choisir une méthode adaptée à une question cellulaire.',
                'questions' => [
                    [
                        'question' => 'Salma veut observer une cellule d’oignon et la voir plusieurs centaines de fois plus grande. Quel instrument choisir ?',
                        'choices' => [
                            ['choice_text' => 'Une loupe binoculaire de laboratoire', 'is_correct' => false],
                            ['choice_text' => 'Un spectrophotomètre', 'is_correct' => false],
                            ['choice_text' => 'Une centrifugeuse', 'is_correct' => false],
                            ['choice_text' => 'Un microscope optique', 'is_correct' => true],
                        ],
                        'explanation' => 'Seul le microscope optique atteint ×400 avec une image nette ; une loupe grossit une dizaine de fois.',
                    ],
                    [
                        'question' => 'Une image est obtenue avec un objectif ×10 et un oculaire ×10. Quel est le grossissement total ?',
                        'choices' => [
                            ['choice_text' => '×20', 'is_correct' => false],
                            ['choice_text' => '×100', 'is_correct' => true],
                            ['choice_text' => '×10', 'is_correct' => false],
                            ['choice_text' => '×1 000', 'is_correct' => false],
                        ],
                        'explanation' => 'Le grossissement total s’obtient en multipliant les grossissements : 10 × 10 = 100.',
                    ],
                    [
                        'question' => 'Une cellule mesure 20 µm. Sur la photo de Nadia, elle mesure 6 mm. Quel grossissement a été utilisé ?',
                        'choices' => [
                            ['choice_text' => '×30', 'is_correct' => false],
                            ['choice_text' => '×120', 'is_correct' => false],
                            ['choice_text' => '×300', 'is_correct' => true],
                            ['choice_text' => '×3 000', 'is_correct' => false],
                        ],
                        'explanation' => '6 mm = 6 000 µm, et 6 000 ÷ 20 = 300.',
                    ],
                    [
                        'question' => 'Les cellules de l’épiderme d’oignon sont presque transparentes. Quelle étape de préparation améliore le contraste ?',
                        'choices' => [
                            ['choice_text' => 'Le séchage à l’étuve', 'is_correct' => false],
                            ['choice_text' => 'Le broyage de l’échantillon', 'is_correct' => false],
                            ['choice_text' => 'La congélation de la lame', 'is_correct' => false],
                            ['choice_text' => 'L’ajout d’un colorant', 'is_correct' => true],
                        ],
                        'explanation' => 'Un colorant se fixe sur certaines structures et accentue leur contraste avec le reste de la cellule.',
                    ],
                    [
                        'question' => 'Sous le microscope, Karim voit des cellules rectangulaires bien alignées contenant de petits grains verts. Quelle interprétation est la mieux étayée ?',
                        'choices' => [
                            ['choice_text' => 'Un tissu végétal contenant des chloroplastes', 'is_correct' => true],
                            ['choice_text' => 'Un tissu nerveux humain coloré en vert', 'is_correct' => false],
                            ['choice_text' => 'Des bactéries réunies en chaînes', 'is_correct' => false],
                            ['choice_text' => 'Des globules rouges au repos', 'is_correct' => false],
                        ],
                        'explanation' => 'Des cellules rectangulaires, donc à paroi, avec des grains verts, donc des chloroplastes, indiquent un tissu de plante.',
                    ],
                    [
                        'question' => 'Quelle information ne peut pas être obtenue simplement en regardant une cellule colorée au microscope optique ?',
                        'choices' => [
                            ['choice_text' => 'La forme générale de la cellule', 'is_correct' => false],
                            ['choice_text' => 'La séquence exacte de son ADN', 'is_correct' => true],
                            ['choice_text' => 'La présence de certaines structures colorées', 'is_correct' => false],
                            ['choice_text' => 'Le nombre approximatif de cellules dans un champ', 'is_correct' => false],
                        ],
                        'explanation' => 'Une observation microscopique ordinaire ne permet pas de lire directement la séquence des bases de l’ADN.',
                    ],
                    [
                        'question' => 'Hajar veut repérer où se trouve une protéine précise dans la cellule. Quelle méthode convient ?',
                        'choices' => [
                            ['choice_text' => 'Un colorant général qui teint tout le cytoplasme', 'is_correct' => false],
                            ['choice_text' => 'Une pesée de l’échantillon avant et après', 'is_correct' => false],
                            ['choice_text' => 'Un chauffage de la lame à 60 °C pendant une heure', 'is_correct' => false],
                            ['choice_text' => 'Un anticorps marqué qui se fixe sur cette protéine', 'is_correct' => true],
                        ],
                        'explanation' => 'Un anticorps marqué, par exemple fluorescent, reconnaît sa protéine cible et la rend visible là où elle se trouve.',
                    ],
                    [
                        'question' => 'Deux cellules mesurent chacune 2 cm sur leur photo ; la photo A est à ×100, la photo B à ×400. Que peut-on dire de leurs tailles réelles ?',
                        'choices' => [
                            ['choice_text' => 'Les deux cellules ont la même taille réelle', 'is_correct' => false],
                            ['choice_text' => 'La cellule B est quatre fois plus grande que A', 'is_correct' => false],
                            ['choice_text' => 'La cellule B est quatre fois plus petite que la cellule A', 'is_correct' => true],
                            ['choice_text' => 'La cellule A est deux fois plus petite que B', 'is_correct' => false],
                        ],
                        'explanation' => 'Taille réelle = taille sur la photo ÷ grossissement : A mesure 200 µm et B 50 µm, soit quatre fois moins.',
                    ],
                    [
                        'question' => 'Une barre d’échelle de 10 µm figure sur la photo d’Amine. À quoi sert-elle ?',
                        'choices' => [
                            ['choice_text' => 'À indiquer la masse de la cellule photographiée', 'is_correct' => false],
                            ['choice_text' => 'À convertir une mesure sur l’image en taille réelle', 'is_correct' => true],
                            ['choice_text' => 'À compter le nombre de chromosomes visibles', 'is_correct' => false],
                            ['choice_text' => 'À indiquer le type de microscope utilisé pour la photo', 'is_correct' => false],
                        ],
                        'explanation' => 'La barre d’échelle permet d’estimer les dimensions réelles des structures observées, même si le grossissement de l’image a été modifié.',
                    ],
                    [
                        'question' => 'Anas agrandit une photo floue à ×1 000 et la trouve toujours floue. Quelle leçon en tirer ?',
                        'choices' => [
                            ['choice_text' => 'Agrandir davantage ne révèle pas de détails nouveaux', 'is_correct' => true],
                            ['choice_text' => 'Il faut encore doubler le grossissement', 'is_correct' => false],
                            ['choice_text' => 'Le flou signifie que les cellules sont mortes', 'is_correct' => false],
                            ['choice_text' => 'Une coloration supplémentaire corrige le flou', 'is_correct' => false],
                        ],
                        'explanation' => 'La qualité de l’image dépend aussi de la résolution, de la préparation et de la mise au point. Agrandir davantage une image floue ne révèle pas de nouveaux détails.',
                    ],
                ],
            ],
            [
                'title' => 'Communication, différenciation et mort cellulaire',
                'description' => 'Comprenez comment les cellules reçoivent des signaux, répondent à leur environnement, se spécialisent et éliminent certaines cellules de manière contrôlée.',
                'questions' => [
                    [
                        'question' => 'Une hormone circule dans tout le sang, mais seules certaines cellules y répondent. Quelle explication retenir ?',
                        'choices' => [
                            ['choice_text' => 'Les autres cellules ne sont pas irriguées par le sang', 'is_correct' => false],
                            ['choice_text' => 'L’hormone est détruite avant d’atteindre les autres cellules', 'is_correct' => false],
                            ['choice_text' => 'Ces cellules possèdent le récepteur qui la reconnaît', 'is_correct' => true],
                            ['choice_text' => 'Les autres cellules ne contiennent pas d’ADN', 'is_correct' => false],
                        ],
                        'explanation' => 'Une cellule ne réagit à un signal que si elle possède le récepteur adapté.',
                    ],
                    [
                        'question' => 'Un récepteur de la membrane fixe une molécule signal venue de l’extérieur. Que se passe-t-il ensuite dans la cellule ?',
                        'choices' => [
                            ['choice_text' => 'Une cascade de réactions déclenche une réponse', 'is_correct' => true],
                            ['choice_text' => 'Le signal se transforme en ATP dans le cytoplasme', 'is_correct' => false],
                            ['choice_text' => 'Le récepteur traverse la membrane et copie l’ADN', 'is_correct' => false],
                            ['choice_text' => 'La membrane se ferme pour isoler la cellule', 'is_correct' => false],
                        ],
                        'explanation' => 'La fixation du signal active le récepteur, qui lance une cascade de réactions et modifie l’activité de la cellule.',
                    ],
                    [
                        'question' => 'Une même molécule signal active la division de cellules de la peau mais pas de cellules du foie. Comment l’expliquer ?',
                        'choices' => [
                            ['choice_text' => 'Les cellules du foie ont un ADN différent', 'is_correct' => false],
                            ['choice_text' => 'Les récepteurs ou les voies de réponse diffèrent', 'is_correct' => true],
                            ['choice_text' => 'Le signal ne circule pas jusqu’au foie', 'is_correct' => false],
                            ['choice_text' => 'Le signal est détruit dès qu’il arrive dans le foie', 'is_correct' => false],
                        ],
                        'explanation' => 'Selon les récepteurs présents et les voies activées en aval, une même molécule signal provoque des réponses différentes.',
                    ],
                    [
                        'question' => 'Un signal ordonne à une cellule de produire davantage d’une protéine donnée. Sur quelle étape agit-il ?',
                        'choices' => [
                            ['choice_text' => 'Le nombre de chromosomes de la cellule', 'is_correct' => false],
                            ['choice_text' => 'La séquence de nucléotides du gène', 'is_correct' => false],
                            ['choice_text' => 'L’expression du gène correspondant', 'is_correct' => true],
                            ['choice_text' => 'La taille des mitochondries', 'is_correct' => false],
                        ],
                        'explanation' => 'Un signal peut modifier l’expression de certains gènes, ce qui change la quantité de protéines produites par la cellule.',
                    ],
                    [
                        'question' => 'Quelle cellule peut se transformer en plusieurs types de cellules spécialisées ?',
                        'choices' => [
                            ['choice_text' => 'Le globule rouge mature', 'is_correct' => false],
                            ['choice_text' => 'Le neurone adulte', 'is_correct' => false],
                            ['choice_text' => 'La cellule musculaire', 'is_correct' => false],
                            ['choice_text' => 'La cellule souche', 'is_correct' => true],
                        ],
                        'explanation' => 'Une cellule souche n’est pas encore spécialisée : en se différenciant, elle donne naissance à des types cellulaires variés.',
                    ],
                    [
                        'question' => 'Une cellule abîmée s’autodétruit de manière ordonnée, sans déclencher de forte inflammation. De quel processus s’agit-il ?',
                        'choices' => [
                            ['choice_text' => 'L’apoptose', 'is_correct' => true],
                            ['choice_text' => 'La nécrose', 'is_correct' => false],
                            ['choice_text' => 'La mitose', 'is_correct' => false],
                            ['choice_text' => 'La phagocytose', 'is_correct' => false],
                        ],
                        'explanation' => 'L’apoptose est une mort programmée et propre : la cellule se fragmente en petits corps vite éliminés.',
                    ],
                    [
                        'question' => 'Chez l’embryon, les futurs doigts sont d’abord reliés par un tissu qui disparaît. Quel rôle joue l’apoptose ici ?',
                        'choices' => [
                            ['choice_text' => 'Elle fait multiplier les cellules entre les doigts', 'is_correct' => false],
                            ['choice_text' => 'Elle transforme ces cellules en cellules osseuses', 'is_correct' => false],
                            ['choice_text' => 'Elle élimine ces cellules pour sculpter les doigts', 'is_correct' => true],
                            ['choice_text' => 'Elle relie les doigts par de nouvelles cellules', 'is_correct' => false],
                        ],
                        'explanation' => 'Les cellules situées entre les doigts reçoivent un signal de mort ; leur disparition libère les doigts.',
                    ],
                    [
                        'question' => 'Après une brûlure, des cellules meurent brutalement et libèrent leur contenu, ce qui provoque une inflammation. Comment appelle-t-on cette mort accidentelle ?',
                        'choices' => [
                            ['choice_text' => 'L’apoptose', 'is_correct' => false],
                            ['choice_text' => 'La différenciation', 'is_correct' => false],
                            ['choice_text' => 'L’endocytose', 'is_correct' => false],
                            ['choice_text' => 'La nécrose', 'is_correct' => true],
                        ],
                        'explanation' => 'La nécrose est une mort subie, non programmée, qui déverse le contenu cellulaire et déclenche une inflammation.',
                    ],
                    [
                        'question' => 'Un neurone libère une molécule dans la synapse pour agir sur la cellule voisine. Comment l’appelle-t-on ?',
                        'choices' => [
                            ['choice_text' => 'Un neurotransmetteur', 'is_correct' => true],
                            ['choice_text' => 'Un anticorps', 'is_correct' => false],
                            ['choice_text' => 'Une enzyme digestive', 'is_correct' => false],
                            ['choice_text' => 'Un récepteur membranaire', 'is_correct' => false],
                        ],
                        'explanation' => 'Le neurotransmetteur franchit la synapse et se fixe sur les récepteurs de la cellule voisine.',
                    ],
                    [
                        'question' => 'Une même cellule reçoit en même temps un signal de survie et un signal de mort. De quoi dépend sa réponse ?',
                        'choices' => [
                            ['choice_text' => 'Du nombre de ribosomes qu’elle contient', 'is_correct' => false],
                            ['choice_text' => 'Des récepteurs présents et des voies activées', 'is_correct' => true],
                            ['choice_text' => 'De la taille de son noyau au moment du signal', 'is_correct' => false],
                            ['choice_text' => 'De la quantité d’eau dans le milieu', 'is_correct' => false],
                        ],
                        'explanation' => 'La cellule intègre les deux signaux selon ses récepteurs et les voies de signalisation actives, puis tranche entre survie et mort.',
                    ],
                ],
            ],
            [
                'title' => 'Révision intégrée de biologie cellulaire',
                'description' => 'Mettez en relation membrane, organites, énergie, génétique et communication cellulaire dans des situations courtes proches de problèmes rencontrés en SVT.',
                'questions' => [
                    [
                        'question' => 'Anas place des cellules dans un milieu presque dépourvu d’oxygène. Quelle fonction est directement limitée ?',
                        'choices' => [
                            ['choice_text' => 'La diffusion de l’eau à travers la membrane', 'is_correct' => false],
                            ['choice_text' => 'La production d’ATP par respiration aérobie', 'is_correct' => true],
                            ['choice_text' => 'L’organisation de la bicouche de phospholipides', 'is_correct' => false],
                            ['choice_text' => 'L’appariement des bases de l’ADN', 'is_correct' => false],
                        ],
                        'explanation' => 'L’oxygène est l’accepteur final de la respiration aérobie ; sans lui, la cellule produit beaucoup moins d’ATP.',
                    ],
                    [
                        'question' => 'Un médicament bloque temporairement l’appareil de Golgi dans une cellule sécrétrice. Quelle fonction sera particulièrement perturbée ?',
                        'choices' => [
                            ['choice_text' => 'La duplication de l’ADN dans le noyau', 'is_correct' => false],
                            ['choice_text' => 'La production d’ATP dans les mitochondries', 'is_correct' => false],
                            ['choice_text' => 'L’assemblage des ribosomes dans le nucléole', 'is_correct' => false],
                            ['choice_text' => 'Le tri et l’expédition des protéines à exporter', 'is_correct' => true],
                        ],
                        'explanation' => 'Le Golgi intervient dans la modification, le tri et l’emballage de nombreuses protéines de la voie sécrétoire.',
                    ],
                    [
                        'question' => 'Les cellules du muscle cardiaque d’un coureur contiennent beaucoup de mitochondries. Quelle explication retenir ?',
                        'choices' => [
                            ['choice_text' => 'Elles se divisent très rapidement', 'is_correct' => false],
                            ['choice_text' => 'Elles sécrètent de grandes quantités d’hormones', 'is_correct' => false],
                            ['choice_text' => 'Elles consomment beaucoup d’énergie, donc d’ATP', 'is_correct' => true],
                            ['choice_text' => 'Elles contiennent beaucoup d’ADN libre', 'is_correct' => false],
                        ],
                        'explanation' => 'Le cœur dépense beaucoup d’ATP pour se contracter : les mitochondries, qui en produisent, y sont très nombreuses.',
                    ],
                    [
                        'question' => 'Des cellules d’épiderme d’oignon plongées dans de l’eau très salée se ratatinent : la membrane se détache de la paroi. Quel phénomène est en cause ?',
                        'choices' => [
                            ['choice_text' => 'Une sortie d’eau par osmose', 'is_correct' => true],
                            ['choice_text' => 'Une entrée d’eau par osmose', 'is_correct' => false],
                            ['choice_text' => 'Une sortie d’ions par exocytose', 'is_correct' => false],
                            ['choice_text' => 'Une entrée de sel par diffusion facilitée', 'is_correct' => false],
                        ],
                        'explanation' => 'Le milieu salé est plus concentré : l’eau quitte la cellule par osmose et la membrane se décolle de la paroi, c’est la plasmolyse.',
                    ],
                    [
                        'question' => 'Une mutation modifie la forme d’un récepteur membranaire, qui ne reconnaît plus son signal. Quel principe est illustré ?',
                        'choices' => [
                            ['choice_text' => 'Une mutation rend la protéine plus active', 'is_correct' => false],
                            ['choice_text' => 'Les signaux traversent la membrane sans récepteur', 'is_correct' => false],
                            ['choice_text' => 'Une protéine garde sa fonction quelle que soit sa forme', 'is_correct' => false],
                            ['choice_text' => 'La forme d’une protéine détermine sa fonction', 'is_correct' => true],
                        ],
                        'explanation' => 'La fonction d’une protéine dépend de sa structure tridimensionnelle. Une modification qui change sa forme peut empêcher la reconnaissance normale de son partenaire.',
                    ],
                    [
                        'question' => 'Une cellule se divise par mitose trois fois de suite. Combien de cellules obtient-on au total ?',
                        'choices' => [
                            ['choice_text' => '6 cellules', 'is_correct' => false],
                            ['choice_text' => '8 cellules', 'is_correct' => true],
                            ['choice_text' => '9 cellules', 'is_correct' => false],
                            ['choice_text' => '16 cellules', 'is_correct' => false],
                        ],
                        'explanation' => 'Chaque mitose double le nombre de cellules : 1, 2, 4 puis 8, soit 2³ = 8.',
                    ],
                    [
                        'question' => 'Une chercheuse veut savoir si un traitement ralentit la division cellulaire. Quelle mesure est la plus informative ?',
                        'choices' => [
                            ['choice_text' => 'Comparer la part de cellules en mitose avec un lot témoin', 'is_correct' => true],
                            ['choice_text' => 'Mesurer le pH du milieu des cellules traitées', 'is_correct' => false],
                            ['choice_text' => 'Compter les mitochondries d’une cellule traitée', 'is_correct' => false],
                            ['choice_text' => 'Observer la forme des cellules traitées sans témoin', 'is_correct' => false],
                        ],
                        'explanation' => 'Comparer la proportion de cellules en division entre un groupe traité et un groupe témoin permet d’évaluer l’effet du traitement sur la prolifération cellulaire.',
                    ],
                    [
                        'question' => 'Un globule blanc capture une bactérie dans une vésicule, puis la digère. Quel enchaînement décrit ce trajet ?',
                        'choices' => [
                            ['choice_text' => 'Exocytose, puis digestion par les enzymes du Golgi', 'is_correct' => false],
                            ['choice_text' => 'Diffusion simple, puis digestion dans le noyau', 'is_correct' => false],
                            ['choice_text' => 'Endocytose, puis stockage dans la vacuole centrale', 'is_correct' => false],
                            ['choice_text' => 'Endocytose, puis digestion par les enzymes des lysosomes', 'is_correct' => true],
                        ],
                        'explanation' => 'La vésicule d’endocytose fusionne avec des lysosomes, dont les enzymes digèrent la bactérie.',
                    ],
                    [
                        'question' => 'Une cellule cancéreuse se divise malgré les signaux qui devraient freiner sa prolifération. Quel domaine est dérégulé ?',
                        'choices' => [
                            ['choice_text' => 'La compartimentation des organites', 'is_correct' => false],
                            ['choice_text' => 'Le contrôle du cycle cellulaire et des signaux', 'is_correct' => true],
                            ['choice_text' => 'La perméabilité sélective de la membrane', 'is_correct' => false],
                            ['choice_text' => 'La structure des ribosomes et la traduction', 'is_correct' => false],
                        ],
                        'explanation' => 'La prolifération normale dépend de mécanismes de contrôle du cycle cellulaire et de signaux qui favorisent ou limitent la division. Leur dérèglement peut conduire à une multiplication excessive.',
                    ],
                    [
                        'question' => 'Quel enchaînement résume le mieux la réponse d’une cellule à un signal qui modifie son comportement ?',
                        'choices' => [
                            ['choice_text' => 'Signal → expression de gènes → récepteur → voie de signalisation → réponse', 'is_correct' => false],
                            ['choice_text' => 'Récepteur → signal → expression de gènes → voie de signalisation → réponse', 'is_correct' => false],
                            ['choice_text' => 'Signal → récepteur → voie de signalisation → expression de gènes → réponse', 'is_correct' => true],
                            ['choice_text' => 'Signal → voie de signalisation → récepteur → réponse → expression de gènes', 'is_correct' => false],
                        ],
                        'explanation' => 'Le signal se fixe sur le récepteur, active une voie de signalisation qui modifie l’expression des gènes ; les nouvelles protéines produisent la réponse.',
                    ],
                ],
            ],
        ];

        foreach ($quizzes as $quizIndex => $quizData) {
            $settings = $quizSettings[$quizIndex] ?? ['duration' => 10, 'passing_score' => 80];

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

            foreach ($quizData['questions'] as $questionIndex => $questionData) {
                $question = Question::updateOrCreate(
                    [
                        'quiz_id' => $quiz->id,
                        'order' => $questionIndex + 1,
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