<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class GeologyFundamentalsBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'geology-fundamentals')->firstOrFail();

        $quizzes = [
            [
                'title' => 'Introduction à la géologie',
                'description' => 'Terre, enveloppes, roches, minéraux et notions fondamentales.',
                'settings' => ['duration' => 15, 'passing_score' => 50],
                'questions' => [
                    [
                        'question' => 'Salma s’inscrit à un cours de géologie. Qu’y étudiera-t-elle ?',
                        'choices' => [
                            ['choice_text' => 'Les comportements des animaux sauvages et leurs migrations', 'is_correct' => false],
                            ['choice_text' => 'La Terre, ses matériaux, son histoire et ses transformations', 'is_correct' => true],
                            ['choice_text' => 'Les variations du climat et la prévision du temps à court terme', 'is_correct' => false],
                            ['choice_text' => 'Les mouvements des planètes et la structure des galaxies', 'is_correct' => false],
                        ],
                        'explanation' => 'La géologie s’intéresse à la structure de la Terre, aux matériaux qui la composent et aux phénomènes qui la font évoluer.',
                    ],
                    [
                        'question' => 'La couche solide la plus externe de la Terre est :',
                        'choices' => [
                            ['choice_text' => 'le noyau interne', 'is_correct' => false],
                            ['choice_text' => 'le manteau profond', 'is_correct' => false],
                            ['choice_text' => 'le noyau externe', 'is_correct' => false],
                            ['choice_text' => 'la croûte', 'is_correct' => true],
                        ],
                        'explanation' => 'La croûte est l’enveloppe rocheuse superficielle de la Terre.',
                    ],
                    [
                        'question' => 'Youssef dessine une coupe de la Terre. Où doit-il placer le manteau ?',
                        'choices' => [
                            ['choice_text' => 'entre la croûte et le noyau', 'is_correct' => true],
                            ['choice_text' => 'entre l’atmosphère et la croûte', 'is_correct' => false],
                            ['choice_text' => 'à l’intérieur du noyau interne', 'is_correct' => false],
                            ['choice_text' => 'sous le noyau, au centre de la Terre', 'is_correct' => false],
                        ],
                        'explanation' => 'Le manteau occupe l’essentiel du volume du globe, entre la fine croûte et le noyau métallique.',
                    ],
                    [
                        'question' => 'Les ondes sismiques ont révélé la nature du noyau terrestre. Quels métaux le composent ?',
                        'choices' => [
                            ['choice_text' => 'du cuivre et de l’aluminium', 'is_correct' => false],
                            ['choice_text' => 'de l’or et de l’argent', 'is_correct' => false],
                            ['choice_text' => 'du fer et du nickel', 'is_correct' => true],
                            ['choice_text' => 'du plomb et du zinc', 'is_correct' => false],
                        ],
                        'explanation' => 'Le noyau est un alliage de fer et de nickel, liquide dans sa partie externe et solide en son centre.',
                    ],
                    [
                        'question' => 'Karim ramasse un caillou au bord d’une rivière. Comment un géologue définit-il une roche ?',
                        'choices' => [
                            ['choice_text' => 'un cristal unique à la composition chimique définie', 'is_correct' => false],
                            ['choice_text' => 'un morceau de métal extrait d’un minerai de fer', 'is_correct' => false],
                            ['choice_text' => 'un assemblage naturel d’un ou plusieurs minéraux', 'is_correct' => true],
                            ['choice_text' => 'un dépôt de matière organique qui a durci avec le temps', 'is_correct' => false],
                        ],
                        'explanation' => 'Une roche réunit un ou plusieurs minéraux ; le granite, par exemple, en associe trois.',
                    ],
                    [
                        'question' => 'Qu’est-ce qui définit un minéral ?',
                        'choices' => [
                            ['choice_text' => 'une composition chimique et une structure cristalline précises', 'is_correct' => true],
                            ['choice_text' => 'un mélange de roches différentes réduites en fine poudre', 'is_correct' => false],
                            ['choice_text' => 'un matériau synthétique fabriqué en laboratoire à partir de métaux', 'is_correct' => false],
                            ['choice_text' => 'un liquide très chaud qui durcit au contact de l’air', 'is_correct' => false],
                        ],
                        'explanation' => 'Un minéral naturel a une composition chimique donnée, et ses atomes sont rangés en un réseau cristallin.',
                    ],
                    [
                        'question' => 'Au labo, on étiquette un échantillon de granite. Dans quelle famille de roches le range-t-on ?',
                        'choices' => [
                            ['choice_text' => 'les roches sédimentaires détritiques', 'is_correct' => false],
                            ['choice_text' => 'les roches métamorphiques', 'is_correct' => false],
                            ['choice_text' => 'les roches volcaniques à grains fins', 'is_correct' => false],
                            ['choice_text' => 'les roches magmatiques plutoniques', 'is_correct' => true],
                        ],
                        'explanation' => 'Le granite se forme lentement quand un magma refroidit en profondeur, ce qui laisse de gros cristaux visibles à l’œil nu.',
                    ],
                    [
                        'question' => 'Imane visite une carrière de calcaire. À quelle grande famille de roches ces blocs appartiennent-ils ?',
                        'choices' => [
                            ['choice_text' => 'magmatique, formée par le refroidissement d’un magma', 'is_correct' => false],
                            ['choice_text' => 'sédimentaire, formée de dépôts accumulés puis durcis', 'is_correct' => true],
                            ['choice_text' => 'métamorphique, formée sous forte pression en profondeur', 'is_correct' => false],
                            ['choice_text' => 'volcanique, formée par une éruption de lave', 'is_correct' => false],
                        ],
                        'explanation' => 'Le calcaire se forme par accumulation de débris riches en carbonate de calcium, comme des coquilles, qui se consolident ensuite.',
                    ],
                    [
                        'question' => 'Quel phénomène peut transformer une roche en roche métamorphique ?',
                        'choices' => [
                            ['choice_text' => 'le refroidissement lent d’un magma en profondeur', 'is_correct' => false],
                            ['choice_text' => 'le dépôt de sédiments au fond d’un lac ou d’une mer', 'is_correct' => false],
                            ['choice_text' => 'une forte hausse de pression et de température sans fusion', 'is_correct' => true],
                            ['choice_text' => 'l’érosion provoquée par le vent et la pluie en surface', 'is_correct' => false],
                        ],
                        'explanation' => 'Sous l’effet de la pression et de la chaleur, une roche se transforme à l’état solide : c’est le métamorphisme.',
                    ],
                    [
                        'question' => 'Un géologue déplie une carte géologique sur le terrain. Qu’y lit-il ?',
                        'choices' => [
                            ['choice_text' => 'les types de roches et les failles présents dans la région', 'is_correct' => true],
                            ['choice_text' => 'les routes, les villes et les voies ferrées de la région', 'is_correct' => false],
                            ['choice_text' => 'les frontières et les limites administratives de la région', 'is_correct' => false],
                            ['choice_text' => 'le relief et l’altitude des sommets de la région', 'is_correct' => false],
                        ],
                        'explanation' => 'Une carte géologique indique où affleurent les différentes roches, leur âge relatif et les grandes structures comme les failles.',
                    ],
                ],
            ],
            [
                'title' => 'Minéraux et identification des roches',
                'description' => 'Dureté, éclat, clivage, trait et minéraux courants.',
                'settings' => ['duration' => 20, 'passing_score' => 55],
                'questions' => [
                    [
                        'question' => 'Walid essaie de rayer un minéral avec la pointe d’un clou en acier. Quelle propriété teste-t-il ?',
                        'choices' => [
                            ['choice_text' => 'l’éclat', 'is_correct' => false],
                            ['choice_text' => 'le clivage', 'is_correct' => false],
                            ['choice_text' => 'la dureté', 'is_correct' => true],
                            ['choice_text' => 'la densité', 'is_correct' => false],
                        ],
                        'explanation' => 'La dureté mesure la résistance d’un minéral à la rayure, et le clou sert justement à la tester.',
                    ],
                    [
                        'question' => 'Sur l’échelle de Mohs, le minéral le plus dur est :',
                        'choices' => [
                            ['choice_text' => 'le diamant', 'is_correct' => true],
                            ['choice_text' => 'le quartz', 'is_correct' => false],
                            ['choice_text' => 'la calcite', 'is_correct' => false],
                            ['choice_text' => 'le gypse', 'is_correct' => false],
                        ],
                        'explanation' => 'Le diamant a la dureté 10, la plus élevée de l’échelle de Mohs.',
                    ],
                    [
                        'question' => 'Le talc se raye facilement à l’ongle. Quelle dureté lui attribue l’échelle de Mohs ?',
                        'choices' => [
                            ['choice_text' => '2', 'is_correct' => false],
                            ['choice_text' => '1', 'is_correct' => true],
                            ['choice_text' => '3', 'is_correct' => false],
                            ['choice_text' => '5', 'is_correct' => false],
                        ],
                        'explanation' => 'Le talc est le minéral de référence de dureté 1, le plus tendre de l’échelle.',
                    ],
                    [
                        'question' => 'Nadia frotte un cristal de quartz (dureté 7) sur une vitre en verre (dureté 5,5). Que constate-t-elle ?',
                        'choices' => [
                            ['choice_text' => 'le quartz est rayé, car le verre est plus dur', 'is_correct' => false],
                            ['choice_text' => 'les deux se rayent de la même façon', 'is_correct' => false],
                            ['choice_text' => 'pas de trace visible, car les duretés sont voisines', 'is_correct' => false],
                            ['choice_text' => 'le verre est rayé, car le quartz est plus dur', 'is_correct' => true],
                        ],
                        'explanation' => 'Le quartz, de dureté 7, raye le verre qui plafonne vers 5,5 ; l’inverse est impossible.',
                    ],
                    [
                        'question' => 'Quand on dit qu’un minéral a un éclat métallique, on parle de :',
                        'choices' => [
                            ['choice_text' => 'la manière dont sa surface renvoie la lumière', 'is_correct' => true],
                            ['choice_text' => 'la couleur de sa poudre sur une plaque de porcelaine', 'is_correct' => false],
                            ['choice_text' => 'sa façon de se casser en plans lisses', 'is_correct' => false],
                            ['choice_text' => 'sa résistance à la rayure d’un clou', 'is_correct' => false],
                        ],
                        'explanation' => 'L’éclat décrit l’aspect brillant, métallique ou mat de la surface, selon la façon dont elle réfléchit la lumière.',
                    ],
                    [
                        'question' => 'Le quartz peut être incolore, rose, violet ou fumé. Que montre cet exemple ?',
                        'choices' => [
                            ['choice_text' => 'la couleur dépend de la dureté et suffit à reconnaître un minéral', 'is_correct' => false],
                            ['choice_text' => 'chaque couleur correspond à une espèce minérale distincte', 'is_correct' => false],
                            ['choice_text' => 'la couleur change avec l’âge du cristal et date la roche', 'is_correct' => false],
                            ['choice_text' => 'la couleur varie avec les impuretés et identifie mal un minéral', 'is_correct' => true],
                        ],
                        'explanation' => 'De faibles traces d’impuretés suffisent à colorer un cristal, d’où l’intérêt de s’appuyer plutôt sur la dureté ou sur le trait.',
                    ],
                    [
                        'question' => 'En frappant un cristal de calcite, Omar obtient de petits blocs aux faces planes et régulières. Quelle propriété observe-t-il ?',
                        'choices' => [
                            ['choice_text' => 'le trait', 'is_correct' => false],
                            ['choice_text' => 'le clivage', 'is_correct' => true],
                            ['choice_text' => 'l’éclat', 'is_correct' => false],
                            ['choice_text' => 'la dureté', 'is_correct' => false],
                        ],
                        'explanation' => 'Le clivage fait casser le cristal selon des plans précis, liés à l’organisation de ses atomes.',
                    ],
                    [
                        'question' => 'Sur une plaque de porcelaine blanche, Sara frotte un minéral gris à reflets métalliques et laisse une trace rouge-brun. Que vient-elle de relever ?',
                        'choices' => [
                            ['choice_text' => 'la ligne de cassure du cristal', 'is_correct' => false],
                            ['choice_text' => 'le reflet de la lumière sur sa surface', 'is_correct' => false],
                            ['choice_text' => 'la couleur de sa poudre sur la plaque', 'is_correct' => true],
                            ['choice_text' => 'la direction selon laquelle il se fend', 'is_correct' => false],
                        ],
                        'explanation' => 'Le trait est la couleur de la poudre laissée par le minéral, ici rouge-brun comme pour l’hématite, même si le cristal paraît gris.',
                    ],
                    [
                        'question' => 'Au labo, Youssef examine un granite à la loupe. Quels minéraux y repère-t-il ?',
                        'choices' => [
                            ['choice_text' => 'calcite, gypse et halite', 'is_correct' => false],
                            ['choice_text' => 'quartz, feldspaths et micas', 'is_correct' => true],
                            ['choice_text' => 'talc, graphite et soufre', 'is_correct' => false],
                            ['choice_text' => 'magnétite, hématite et pyrite', 'is_correct' => false],
                        ],
                        'explanation' => 'Le quartz, les feldspaths et les micas forment l’essentiel du granite.',
                    ],
                    [
                        'question' => 'Une falaise de grès est faite de grains de sable cimentés. Dans quelle catégorie classe-t-on cette roche ?',
                        'choices' => [
                            ['choice_text' => 'magmatique plutonique', 'is_correct' => false],
                            ['choice_text' => 'métamorphique', 'is_correct' => false],
                            ['choice_text' => 'sédimentaire chimique', 'is_correct' => false],
                            ['choice_text' => 'sédimentaire détritique', 'is_correct' => true],
                        ],
                        'explanation' => 'Le grès est fait de grains arrachés à d’autres roches puis déposés, donc détritique ; une roche chimique, elle, vient de minéraux précipités dans l’eau.',
                    ],
                ],
            ],
            [
                'title' => 'Cycle des roches',
                'description' => 'Formation, transformation et recyclage des roches.',
                'settings' => ['duration' => 20, 'passing_score' => 60],
                'questions' => [
                    [
                        'question' => 'Quelle idée résume le mieux le cycle des roches ?',
                        'choices' => [
                            ['choice_text' => 'une roche peut devenir un autre type de roche avec le temps', 'is_correct' => true],
                            ['choice_text' => 'les roches gardent le type qu’elles avaient à leur formation', 'is_correct' => false],
                            ['choice_text' => 'les roches volcaniques évoluent, les autres restent figées', 'is_correct' => false],
                            ['choice_text' => 'les roches naissent lors des éruptions puis disparaissent', 'is_correct' => false],
                        ],
                        'explanation' => 'Les roches magmatiques, sédimentaires et métamorphiques peuvent se transformer les unes en les autres au fil de millions d’années.',
                    ],
                    [
                        'question' => 'Un magma se refroidit très lentement, enfoui à plusieurs kilomètres de profondeur. Quelle roche obtient-on ?',
                        'choices' => [
                            ['choice_text' => 'un basalte aux cristaux minuscules', 'is_correct' => false],
                            ['choice_text' => 'un grès aux grains arrondis', 'is_correct' => false],
                            ['choice_text' => 'un granite aux gros cristaux', 'is_correct' => true],
                            ['choice_text' => 'un schiste aux minéraux alignés', 'is_correct' => false],
                        ],
                        'explanation' => 'En profondeur le refroidissement est lent : les cristaux ont le temps de grossir, comme dans le granite.',
                    ],
                    [
                        'question' => 'Une coulée de lave arrive à l’air libre et se fige en quelques jours. Quelle roche se forme ?',
                        'choices' => [
                            ['choice_text' => 'un granite aux gros cristaux', 'is_correct' => false],
                            ['choice_text' => 'un calcaire plein de coquilles', 'is_correct' => false],
                            ['choice_text' => 'un marbre aux veines claires', 'is_correct' => false],
                            ['choice_text' => 'un basalte aux cristaux minuscules', 'is_correct' => true],
                        ],
                        'explanation' => 'Au contact de l’air, la lave refroidit vite et les cristaux restent minuscules, ce qui donne un basalte.',
                    ],
                    [
                        'question' => 'Après une crue, une rivière du Haut Atlas a laissé du sable, des graviers et de la boue sur ses berges. Comment nomme-t-on ces matériaux ?',
                        'choices' => [
                            ['choice_text' => 'des laves refroidies en surface', 'is_correct' => false],
                            ['choice_text' => 'des sédiments transportés par l’eau', 'is_correct' => true],
                            ['choice_text' => 'des cendres volcaniques retombées', 'is_correct' => false],
                            ['choice_text' => 'des minerais exploités en mine', 'is_correct' => false],
                        ],
                        'explanation' => 'Les débris arrachés aux roches par l’altération et l’érosion, puis déplacés par l’eau, sont des sédiments.',
                    ],
                    [
                        'question' => 'Des sables déposés au fond d’une mer sont recouverts par de nouvelles couches. Comment deviennent-ils une roche dure ?',
                        'choices' => [
                            ['choice_text' => 'ils fondent complètement puis se solidifient en refroidissant', 'is_correct' => false],
                            ['choice_text' => 'ils sont chauffés jusqu’à former un magma qui cristallise', 'is_correct' => false],
                            ['choice_text' => 'ils s’évaporent en laissant un résidu de cristaux', 'is_correct' => false],
                            ['choice_text' => 'ils sont tassés puis liés entre eux par un ciment minéral', 'is_correct' => true],
                        ],
                        'explanation' => 'Le poids des couches tasse les grains, puis un ciment minéral les soude : c’est la lithification.',
                    ],
                    [
                        'question' => 'Dans le cycle des roches, quelle étape fait passer une roche sédimentaire à l’état de roche métamorphique ?',
                        'choices' => [
                            ['choice_text' => 'un enfouissement qui chauffe et comprime la roche', 'is_correct' => true],
                            ['choice_text' => 'un refroidissement rapide à l’air libre', 'is_correct' => false],
                            ['choice_text' => 'un dépôt de sédiments transportés par une rivière', 'is_correct' => false],
                            ['choice_text' => 'une fusion complète suivie d’un refroidissement', 'is_correct' => false],
                        ],
                        'explanation' => 'En s’enfonçant, la roche subit chaleur et pression sans fondre, et ses minéraux se réorganisent.',
                    ],
                    [
                        'question' => 'Si une roche métamorphique fond complètement, le matériau produit est :',
                        'choices' => [
                            ['choice_text' => 'un sédiment', 'is_correct' => false],
                            ['choice_text' => 'un schiste', 'is_correct' => false],
                            ['choice_text' => 'un magma', 'is_correct' => true],
                            ['choice_text' => 'un sol', 'is_correct' => false],
                        ],
                        'explanation' => 'La fusion complète d’une roche produit un magma.',
                    ],
                    [
                        'question' => 'Quelle suite de processus ramène une roche de montagne à l’état de sédiments ?',
                        'choices' => [
                            ['choice_text' => 'le métamorphisme, puis la fusion partielle', 'is_correct' => false],
                            ['choice_text' => 'l’altération, l’érosion puis le transport', 'is_correct' => true],
                            ['choice_text' => 'la compaction puis la cimentation', 'is_correct' => false],
                            ['choice_text' => 'le refroidissement puis la cristallisation', 'is_correct' => false],
                        ],
                        'explanation' => 'La roche est d’abord désagrégée, puis les débris sont arrachés et emportés, souvent par l’eau.',
                    ],
                    [
                        'question' => 'Karim se demande combien de temps un sédiment met pour devenir une roche métamorphique. Que lui répond son professeur ?',
                        'choices' => [
                            ['choice_text' => 'plusieurs millions d’années', 'is_correct' => true],
                            ['choice_text' => 'quelques mois, le temps d’une saison', 'is_correct' => false],
                            ['choice_text' => 'quelques siècles, comme une génération humaine', 'is_correct' => false],
                            ['choice_text' => 'une dizaine d’années à peine', 'is_correct' => false],
                        ],
                        'explanation' => 'Les transformations du cycle des roches sont très lentes : il faut compter des millions d’années pour un parcours complet.',
                    ],
                    [
                        'question' => 'Le cycle des roches fonctionne grâce à deux sources d’énergie. Lesquelles ?',
                        'choices' => [
                            ['choice_text' => 'la rotation de la Terre et l’attraction de la Lune', 'is_correct' => false],
                            ['choice_text' => 'le champ magnétique et les aurores polaires', 'is_correct' => false],
                            ['choice_text' => 'la chaleur interne de la Terre et l’énergie du Soleil', 'is_correct' => true],
                            ['choice_text' => 'la pression de l’air et la photosynthèse des plantes', 'is_correct' => false],
                        ],
                        'explanation' => 'La chaleur interne alimente le magmatisme et le métamorphisme, tandis que l’énergie solaire anime l’eau et le vent, qui altèrent et transportent les roches.',
                    ],
                ],
            ],
            [
                'title' => 'Processus géologiques de surface',
                'description' => 'Altération, érosion, transport, dépôt et reliefs.',
                'settings' => ['duration' => 20, 'passing_score' => 60],
                'questions' => [
                    [
                        'question' => 'Au pied d’une falaise, Hamza ramasse des blocs et des graviers de granite dont la composition n’a pas changé. De quel processus s’agit-il ?',
                        'choices' => [
                            ['choice_text' => 'd’une fusion partielle', 'is_correct' => false],
                            ['choice_text' => 'd’une altération chimique', 'is_correct' => false],
                            ['choice_text' => 'd’un métamorphisme', 'is_correct' => false],
                            ['choice_text' => 'd’une altération mécanique', 'is_correct' => true],
                        ],
                        'explanation' => 'Les roches se fragmentent sous l’effet du gel, des écarts de température ou des racines, sans que leurs minéraux changent.',
                    ],
                    [
                        'question' => 'Une statue en calcaire se creuse peu à peu sous l’eau de pluie légèrement acide. Quel type d’altération agit ?',
                        'choices' => [
                            ['choice_text' => 'mécanique, par fragmentation de la roche', 'is_correct' => false],
                            ['choice_text' => 'chimique, par réaction avec l’eau de pluie', 'is_correct' => true],
                            ['choice_text' => 'glaciaire, par frottement d’un glacier', 'is_correct' => false],
                            ['choice_text' => 'éolienne, par l’impact de grains de sable', 'is_correct' => false],
                        ],
                        'explanation' => 'L’eau acide attaque le carbonate de calcium et le dissout : c’est de l’altération chimique.',
                    ],
                    [
                        'question' => 'En crue, un oued charrie de gros galets qu’il laissait en place en été. Qu’est-ce qui a changé ?',
                        'choices' => [
                            ['choice_text' => 'sa vitesse et son énergie ont augmenté', 'is_correct' => true],
                            ['choice_text' => 'la couleur de l’eau est devenue plus sombre', 'is_correct' => false],
                            ['choice_text' => 'la température de l’air a baissé', 'is_correct' => false],
                            ['choice_text' => 'la gravité s’est renforcée dans la vallée', 'is_correct' => false],
                        ],
                        'explanation' => 'Plus le courant est rapide, plus il peut déplacer de gros éléments.',
                    ],
                    [
                        'question' => 'Un fleuve ralentit en entrant dans un lac. Que deviennent les sédiments qu’il transporte ?',
                        'choices' => [
                            ['choice_text' => 'ils se dissolvent et disparaissent de l’eau', 'is_correct' => false],
                            ['choice_text' => 'ils remontent à la surface et flottent sur le lac', 'is_correct' => false],
                            ['choice_text' => 'ils se déposent peu à peu, les plus gros d’abord', 'is_correct' => true],
                            ['choice_text' => 'ils accélèrent avec l’eau et sont rejetés vers l’aval', 'is_correct' => false],
                        ],
                        'explanation' => 'Un courant qui perd de l’énergie lâche d’abord les grains les plus lourds, puis les plus fins.',
                    ],
                    [
                        'question' => 'Karim marche sur une plage de sable. D’où viennent les grains qu’il foule ?',
                        'choices' => [
                            ['choice_text' => 'de lave qui s’est refroidie dans la mer', 'is_correct' => false],
                            ['choice_text' => 'de roches érodées puis déposées par l’eau', 'is_correct' => true],
                            ['choice_text' => 'de cendres volcaniques retombées sur la côte', 'is_correct' => false],
                            ['choice_text' => 'de minerais broyés par les mines côtières', 'is_correct' => false],
                        ],
                        'explanation' => 'Le sable provient de roches et de coquilles réduites en grains, que les rivières et les vagues déplacent puis déposent sur le rivage.',
                    ],
                    [
                        'question' => 'En hiver dans le Moyen Atlas, l’eau s’infiltre dans une fissure de roche et gèle. Quel effet cela a-t-il ?',
                        'choices' => [
                            ['choice_text' => 'la roche fond au contact de la glace', 'is_correct' => false],
                            ['choice_text' => 'l’eau gelée se contracte et resserre la roche', 'is_correct' => false],
                            ['choice_text' => 'la glace dissout peu à peu les minéraux', 'is_correct' => false],
                            ['choice_text' => 'l’eau gelée gonfle et élargit la fissure', 'is_correct' => true],
                        ],
                        'explanation' => 'En gelant, l’eau prend environ 9 % de volume en plus et pousse sur les parois, ce qui finit par fendre la roche.',
                    ],
                    [
                        'question' => 'Un vent fort projette du sable contre un rocher. Que se passe-t-il à la longue ?',
                        'choices' => [
                            ['choice_text' => 'la surface s’use et se polit sous les impacts', 'is_correct' => true],
                            ['choice_text' => 'la roche durcit sous la pression de l’air', 'is_correct' => false],
                            ['choice_text' => 'le rocher se renforce, car les grains comblent ses fissures', 'is_correct' => false],
                            ['choice_text' => 'la roche fond sous la chaleur des frottements', 'is_correct' => false],
                        ],
                        'explanation' => 'Les grains lancés par le vent agissent comme du papier de verre et usent la roche.',
                    ],
                    [
                        'question' => 'Le Nil se jette dans la Méditerranée en formant un delta triangulaire. Comment cette forme s’explique-t-elle ?',
                        'choices' => [
                            ['choice_text' => 'le fleuve creuse la mer et rejette son sable vers l’amont', 'is_correct' => false],
                            ['choice_text' => 'la mer remonte le fleuve et y dépose du sel', 'is_correct' => false],
                            ['choice_text' => 'le courant ralentit et dépose ses sédiments à l’embouchure', 'is_correct' => true],
                            ['choice_text' => 'des volcans côtiers comblent peu à peu l’embouchure', 'is_correct' => false],
                        ],
                        'explanation' => 'En arrivant à la mer, le fleuve perd son énergie et abandonne ses sédiments, qui s’étalent en éventail.',
                    ],
                    [
                        'question' => 'Nadia creuse son jardin et trouve une terre brune. De quoi ce sol est-il fait ?',
                        'choices' => [
                            ['choice_text' => 'de lave refroidie puis réduite en fine poudre', 'is_correct' => false],
                            ['choice_text' => 'de sable fin et de sel déposés par la mer', 'is_correct' => false],
                            ['choice_text' => 'de poussières venues de l’espace et d’eau de pluie', 'is_correct' => false],
                            ['choice_text' => 'de roche altérée mélangée à de la matière organique', 'is_correct' => true],
                        ],
                        'explanation' => 'Un sol naît de la roche altérée, de l’humus issu des plantes et des animaux, d’eau et d’air.',
                    ],
                    [
                        'question' => 'Imane observe une vallée étroite en forme de V, avec un torrent au fond. Quel agent l’a creusée ?',
                        'choices' => [
                            ['choice_text' => 'un glacier de montagne', 'is_correct' => false],
                            ['choice_text' => 'un cours d’eau qui érode son lit', 'is_correct' => true],
                            ['choice_text' => 'le vent chargé de sable', 'is_correct' => false],
                            ['choice_text' => 'la mer et ses vagues', 'is_correct' => false],
                        ],
                        'explanation' => 'Le torrent creuse son lit vers le bas, d’où les versants en V ; un glacier, lui, laisse plutôt une vallée en U.',
                    ],
                ],
            ],
            [
                'title' => 'Temps géologique et histoire de la Terre',
                'description' => 'Datation relative, datation radiométrique et grandes durées géologiques.',
                'settings' => ['duration' => 25, 'passing_score' => 60],
                'questions' => [
                    [
                        'question' => 'Les géologues parlent du Jurassique ou du Crétacé plutôt que de dates précises. À quoi servent ces noms ?',
                        'choices' => [
                            ['choice_text' => 'à classer les roches d’après leur couleur', 'is_correct' => false],
                            ['choice_text' => 'à découper les temps géologiques en périodes', 'is_correct' => true],
                            ['choice_text' => 'à mesurer la température des océans du passé', 'is_correct' => false],
                            ['choice_text' => 'à nommer les grandes chaînes de montagnes', 'is_correct' => false],
                        ],
                        'explanation' => 'Ces noms désignent de grandes périodes de l’histoire de la Terre, chacune durant des millions d’années.',
                    ],
                    [
                        'question' => 'Dans une falaise de cinq couches sédimentaires restée en place, Omar cherche la plus ancienne. Où se trouve-t-elle ?',
                        'choices' => [
                            ['choice_text' => 'tout en haut de la falaise', 'is_correct' => false],
                            ['choice_text' => 'au milieu de la série', 'is_correct' => false],
                            ['choice_text' => 'tout en bas de la falaise', 'is_correct' => true],
                            ['choice_text' => 'sur la couche la plus épaisse', 'is_correct' => false],
                        ],
                        'explanation' => 'Les couches se déposent les unes sur les autres : celle du bas est la plus ancienne, tant que la série n’a pas été retournée.',
                    ],
                    [
                        'question' => 'Une faille coupe une couche de grès. Que peut en déduire un géologue ?',
                        'choices' => [
                            ['choice_text' => 'la faille est plus récente que le grès', 'is_correct' => true],
                            ['choice_text' => 'la faille et le grès ont le même âge', 'is_correct' => false],
                            ['choice_text' => 'la faille est plus ancienne que le grès', 'is_correct' => false],
                            ['choice_text' => 'l’âge de la faille se lit à sa couleur', 'is_correct' => false],
                        ],
                        'explanation' => 'Ce qui coupe une couche est plus récent qu’elle : la faille s’est donc formée après le dépôt du grès.',
                    ],
                    [
                        'question' => 'Comment obtient-on l’âge en années d’un granite ?',
                        'choices' => [
                            ['choice_text' => 'en comptant les couches de sable déposées dessus', 'is_correct' => false],
                            ['choice_text' => 'en mesurant sa dureté avec un clou en acier', 'is_correct' => false],
                            ['choice_text' => 'en pesant l’échantillon sur une balance de précision', 'is_correct' => false],
                            ['choice_text' => 'en mesurant la désintégration d’isotopes radioactifs', 'is_correct' => true],
                        ],
                        'explanation' => 'Les isotopes radioactifs du granite se désintègrent à une vitesse connue : en mesurant ce qu’il en reste, on calcule son âge.',
                    ],
                    [
                        'question' => 'Un échantillon contient 80 g d’un isotope dont la demi-vie est de 5 000 ans. Combien en reste-t-il après 5 000 ans ?',
                        'choices' => [
                            ['choice_text' => '20 g', 'is_correct' => false],
                            ['choice_text' => '60 g', 'is_correct' => false],
                            ['choice_text' => '40 g', 'is_correct' => true],
                            ['choice_text' => '0 g', 'is_correct' => false],
                        ],
                        'explanation' => 'Une demi-vie divise la quantité par deux : 80 ÷ 2 = 40 g.',
                    ],
                    [
                        'question' => 'Qu’est-ce qui fait d’un fossile un bon repère pour dater une couche ?',
                        'choices' => [
                            ['choice_text' => 'il a vécu très longtemps et dans un petit lac isolé', 'is_correct' => false],
                            ['choice_text' => 'il a vécu peu de temps et sur de vastes régions', 'is_correct' => true],
                            ['choice_text' => 'il est très gros et facile à extraire de la roche', 'is_correct' => false],
                            ['choice_text' => 'il est de couleur vive et parfaitement conservé', 'is_correct' => false],
                        ],
                        'explanation' => 'Un fossile de courte durée de vie mais très répandu date avec précision chaque couche où on le retrouve.',
                    ],
                    [
                        'question' => 'Entre deux séries de couches, Salma voit une surface d’érosion qui coupe les strates du dessous : une discordance. Que peut-elle indiquer ?',
                        'choices' => [
                            ['choice_text' => 'une éruption qui a fondu les couches du dessous', 'is_correct' => false],
                            ['choice_text' => 'un dépôt continu pendant des millions d’années', 'is_correct' => false],
                            ['choice_text' => 'un changement de couleur des minéraux sous la lumière', 'is_correct' => false],
                            ['choice_text' => 'une pause dans le dépôt, avec érosion des couches du dessous', 'is_correct' => true],
                        ],
                        'explanation' => 'Une discordance marque une lacune : pendant un temps, le dépôt s’est arrêté et l’érosion a entamé les couches plus anciennes.',
                    ],
                    [
                        'question' => 'L’âge de la Terre est estimé à :',
                        'choices' => [
                            ['choice_text' => '4,54 milliards d’années', 'is_correct' => true],
                            ['choice_text' => '454 millions d’années', 'is_correct' => false],
                            ['choice_text' => '13,8 milliards d’années', 'is_correct' => false],
                            ['choice_text' => '4,54 millions d’années', 'is_correct' => false],
                        ],
                        'explanation' => 'Les datations radiométriques donnent 4,54 milliards d’années ; 13,8 milliards correspond à l’âge de l’Univers.',
                    ],
                    [
                        'question' => 'Imaginons toute l’histoire de la Terre ramenée à une journée de 24 heures. À quel moment apparaissent les humains modernes, il y a 300 000 ans ?',
                        'choices' => [
                            ['choice_text' => 'vers midi, à la moitié de l’histoire', 'is_correct' => false],
                            ['choice_text' => 'dans les dernières secondes avant minuit', 'is_correct' => true],
                            ['choice_text' => 'vers 18 h, au début de la soirée', 'is_correct' => false],
                            ['choice_text' => 'dans les dernières heures avant minuit', 'is_correct' => false],
                        ],
                        'explanation' => '300 000 ans sur 4,54 milliards, cela fait environ 6 secondes sur 24 heures : l’espèce humaine est arrivée tout à la fin.',
                    ],
                    [
                        'question' => 'Salma compare deux couches : l’une date de 120 millions d’années, l’autre de 85 millions d’années. Laquelle est la plus récente, et de combien d’années est-elle plus jeune ?',
                        'choices' => [
                            ['choice_text' => 'la couche de 120 millions d’années, plus jeune de 35 millions d’années', 'is_correct' => false],
                            ['choice_text' => 'la couche de 85 millions d’années, plus jeune de 205 millions d’années', 'is_correct' => false],
                            ['choice_text' => 'la couche de 85 millions d’années, plus jeune de 35 millions d’années', 'is_correct' => true],
                            ['choice_text' => 'la couche de 120 millions d’années, plus jeune de 205 millions d’années', 'is_correct' => false],
                        ],
                        'explanation' => 'Plus l’âge est petit, plus la couche est récente ; l’écart vaut 120 − 85 = 35 millions d’années.',
                    ],
                ],
            ],
            [
                'title' => 'Eau souterraine et géologie de surface',
                'description' => 'Nappes, porosité, perméabilité, infiltration et réservoirs aquifères.',
                'settings' => ['duration' => 20, 'passing_score' => 65],
                'questions' => [
                    [
                        'question' => 'Youssef creuse un puits et touche l’eau à 12 m de profondeur. Qu’a-t-il atteint ?',
                        'choices' => [
                            ['choice_text' => 'une zone de sol où l’eau est encore en train de s’infiltrer', 'is_correct' => false],
                            ['choice_text' => 'un lac souterrain qui occupe une grande cavité', 'is_correct' => false],
                            ['choice_text' => 'une couche d’eau de mer remontée depuis l’océan', 'is_correct' => false],
                            ['choice_text' => 'une nappe, de l’eau logée dans les pores de la roche', 'is_correct' => true],
                        ],
                        'explanation' => 'Une nappe est de l’eau qui imbibe les pores et les fissures de la roche en profondeur ; le puits y plonge.',
                    ],
                    [
                        'question' => 'Un bloc de grès de 1 000 cm³ contient 150 cm³ de vides. Quelle est sa porosité ?',
                        'choices' => [
                            ['choice_text' => '15 %', 'is_correct' => true],
                            ['choice_text' => '1,5 %', 'is_correct' => false],
                            ['choice_text' => '85 %', 'is_correct' => false],
                            ['choice_text' => '6,7 %', 'is_correct' => false],
                        ],
                        'explanation' => 'La porosité est le volume des vides divisé par le volume total : 150 ÷ 1 000 = 0,15, soit 15 %.',
                    ],
                    [
                        'question' => 'De l’eau traverse vite un sable grossier mais très lentement une argile. Quelle propriété cela illustre-t-il ?',
                        'choices' => [
                            ['choice_text' => 'la dureté', 'is_correct' => false],
                            ['choice_text' => 'la porosité', 'is_correct' => false],
                            ['choice_text' => 'la perméabilité', 'is_correct' => true],
                            ['choice_text' => 'le clivage', 'is_correct' => false],
                        ],
                        'explanation' => 'La perméabilité mesure la facilité avec laquelle l’eau circule dans une roche ; l’argile en a très peu.',
                    ],
                    [
                        'question' => 'L’argile peut contenir beaucoup d’eau mais la laisser passer très lentement. Comment la décrit-on ?',
                        'choices' => [
                            ['choice_text' => 'peu poreuse et très perméable', 'is_correct' => false],
                            ['choice_text' => 'très poreuse mais peu perméable', 'is_correct' => true],
                            ['choice_text' => 'peu poreuse et peu perméable', 'is_correct' => false],
                            ['choice_text' => 'très poreuse et très perméable', 'is_correct' => false],
                        ],
                        'explanation' => 'Ses nombreux petits vides retiennent l’eau mais restent mal reliés entre eux, d’où la lenteur de l’écoulement.',
                    ],
                    [
                        'question' => 'Après une averse, une partie de l’eau pénètre dans le sol depuis la surface. Comment appelle-t-on ce phénomène ?',
                        'choices' => [
                            ['choice_text' => 'l’infiltration', 'is_correct' => true],
                            ['choice_text' => 'le ruissellement', 'is_correct' => false],
                            ['choice_text' => 'l’évaporation', 'is_correct' => false],
                            ['choice_text' => 'la condensation', 'is_correct' => false],
                        ],
                        'explanation' => 'Ce qui entre dans le sol s’infiltre, ce qui coule en surface ruisselle.',
                    ],
                    [
                        'question' => 'Une couche d’argile compacte recouvre une nappe et retient l’eau en dessous. Quel rôle joue-t-elle ?',
                        'choices' => [
                            ['choice_text' => 'un aquifère où l’eau circule très facilement', 'is_correct' => false],
                            ['choice_text' => 'une zone où l’eau s’infiltre à grande vitesse', 'is_correct' => false],
                            ['choice_text' => 'une zone de recharge qui alimente la nappe', 'is_correct' => false],
                            ['choice_text' => 'une barrière peu perméable qui retient la nappe', 'is_correct' => true],
                        ],
                        'explanation' => 'L’argile laisse mal passer l’eau : elle fait donc office de couvercle au-dessus de la nappe.',
                    ],
                    [
                        'question' => 'Après un orage, un pluviomètre indique 100 mm. Les mesures montrent que 30 mm se sont infiltrés. Combien de millimètres n’ont pas pénétré dans le sol ?',
                        'choices' => [
                            ['choice_text' => '30 mm', 'is_correct' => false],
                            ['choice_text' => '70 mm', 'is_correct' => true],
                            ['choice_text' => '130 mm', 'is_correct' => false],
                            ['choice_text' => '300 mm', 'is_correct' => false],
                        ],
                        'explanation' => '100 − 30 = 70 mm sont restés en surface, par ruissellement ou par évaporation.',
                    ],
                    [
                        'question' => 'Dans une plaine agricole, on pompe chaque année plus d’eau que la pluie n’en renouvelle. Que va devenir le niveau de la nappe ?',
                        'choices' => [
                            ['choice_text' => 'il va monter, car l’eau pompée revient dans la nappe', 'is_correct' => false],
                            ['choice_text' => 'il va rester stable grâce aux pluies d’hiver', 'is_correct' => false],
                            ['choice_text' => 'il va baisser d’année en année, faute de recharge', 'is_correct' => true],
                            ['choice_text' => 'il va fluctuer sans changer à long terme', 'is_correct' => false],
                        ],
                        'explanation' => 'Quand les prélèvements dépassent la recharge, la nappe se vide peu à peu.',
                    ],
                    [
                        'question' => 'Un massif de calcaire est très fissuré. Que peut-on dire de lui ?',
                        'choices' => [
                            ['choice_text' => 'il est sec, car le calcaire bloque l’eau à la surface', 'is_correct' => false],
                            ['choice_text' => 'il stocke l’eau comme une éponge grâce à ses fins grains', 'is_correct' => false],
                            ['choice_text' => 'il retient l’eau en surface et forme des marécages', 'is_correct' => false],
                            ['choice_text' => 'il peut stocker l’eau, qui circule dans les fissures', 'is_correct' => true],
                        ],
                        'explanation' => 'Les fissures et les conduits laissent circuler l’eau et lui offrent de la place, ce qui en fait un bon réservoir.',
                    ],
                    [
                        'question' => 'Un village se trouve sur la zone où la pluie alimente sa nappe. Quel risque la pollution du sol y fait-elle courir ?',
                        'choices' => [
                            ['choice_text' => 'les polluants s’infiltrent et gagnent la nappe', 'is_correct' => true],
                            ['choice_text' => 'la nappe se vide, car la pollution bloque la pluie', 'is_correct' => false],
                            ['choice_text' => 'le sol devient imperméable et la nappe se recharge plus vite', 'is_correct' => false],
                            ['choice_text' => 'le niveau de la nappe monte sans que la qualité de l’eau change', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans une zone de recharge, l’eau qui s’infiltre emporte avec elle ce que le sol contient, y compris les polluants.',
                    ],
                ],
            ],
            [
                'title' => 'Risques géologiques et environnement',
                'description' => 'Séismes, volcans, glissements de terrain et érosion.',
                'settings' => ['duration' => 25, 'passing_score' => 65],
                'questions' => [
                    [
                        'question' => 'Ce matin, une secousse a fait trembler les murs de la maison de Hamza. Que s’est-il passé dans le sous-sol ?',
                        'choices' => [
                            ['choice_text' => 'des roches ont cédé d’un coup en libérant de l’énergie', 'is_correct' => true],
                            ['choice_text' => 'de l’eau souterraine s’est brusquement évaporée', 'is_correct' => false],
                            ['choice_text' => 'une bulle de gaz a éclaté sous la croûte', 'is_correct' => false],
                            ['choice_text' => 'la température du sol a chuté d’un coup', 'is_correct' => false],
                        ],
                        'explanation' => 'Un séisme naît quand des roches soumises à de fortes contraintes se rompent ou glissent brutalement, ce qui envoie des ondes dans le sol.',
                    ],
                    [
                        'question' => 'Le point à la surface situé à la verticale du foyer d’un séisme est :',
                        'choices' => [
                            ['choice_text' => 'le foyer', 'is_correct' => false],
                            ['choice_text' => 'la faille', 'is_correct' => false],
                            ['choice_text' => 'la magnitude', 'is_correct' => false],
                            ['choice_text' => 'l’épicentre', 'is_correct' => true],
                        ],
                        'explanation' => 'L’épicentre est le point de la surface situé juste au-dessus du foyer, là où se produit la rupture.',
                    ],
                    [
                        'question' => 'Lors d’une éruption, la lave s’écoule calmement en coulées, sans explosion. Comment qualifie-t-on ce type d’éruption ?',
                        'choices' => [
                            ['choice_text' => 'explosive', 'is_correct' => false],
                            ['choice_text' => 'effusive', 'is_correct' => true],
                            ['choice_text' => 'sismique', 'is_correct' => false],
                            ['choice_text' => 'érosive', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans une éruption effusive, le magma très fluide s’épanche en coulées ; dans une éruption explosive, les gaz projettent cendres et blocs.',
                    ],
                    [
                        'question' => 'Un versant raide est gorgé d’eau après trois jours de pluie. Quel danger augmente ?',
                        'choices' => [
                            ['choice_text' => 'un tsunami dans la vallée', 'is_correct' => false],
                            ['choice_text' => 'une éruption volcanique', 'is_correct' => false],
                            ['choice_text' => 'un glissement de terrain', 'is_correct' => true],
                            ['choice_text' => 'l’effondrement d’un cratère', 'is_correct' => false],
                        ],
                        'explanation' => 'Sur une pente raide, l’eau alourdit et fragilise le sol, qui peut alors glisser vers l’aval.',
                    ],
                    [
                        'question' => 'Sur un talus saturé par les pluies, l’eau alourdit la terre et réduit le frottement entre les grains. Quel effet cela a-t-il ?',
                        'choices' => [
                            ['choice_text' => 'la terre glisse plus facilement le long de la pente', 'is_correct' => true],
                            ['choice_text' => 'la pente devient plus stable, car la terre est plus lourde', 'is_correct' => false],
                            ['choice_text' => 'la terre durcit et adhère davantage à la pente', 'is_correct' => false],
                            ['choice_text' => 'la pesanteur faiblit sur ce versant détrempé', 'is_correct' => false],
                        ],
                        'explanation' => 'Plus de poids et moins de frottement rendent le versant moins stable, d’où le risque de glissement.',
                    ],
                    [
                        'question' => 'Sur une côte sableuse, les vagues de tempête emportent chaque hiver quelques mètres de plage. Quel phénomène est à l’œuvre ?',
                        'choices' => [
                            ['choice_text' => 'la sédimentation qui élargit la plage', 'is_correct' => false],
                            ['choice_text' => 'la fonte des glaciers de montagne', 'is_correct' => false],
                            ['choice_text' => 'l’érosion due aux vagues', 'is_correct' => true],
                            ['choice_text' => 'l’altération chimique du sable', 'is_correct' => false],
                        ],
                        'explanation' => 'Les vagues et les courants arrachent le sable et le déplacent : c’est l’érosion côtière.',
                    ],
                    [
                        'question' => 'Après un séisme, Imane voit un mur décalé de 50 cm de part et d’autre d’une cassure du sol. Comment appelle-t-on cette cassure ?',
                        'choices' => [
                            ['choice_text' => 'un pli', 'is_correct' => false],
                            ['choice_text' => 'un filon', 'is_correct' => false],
                            ['choice_text' => 'un cratère', 'is_correct' => false],
                            ['choice_text' => 'une faille', 'is_correct' => true],
                        ],
                        'explanation' => 'Une faille est une fracture le long de laquelle les blocs de roche se déplacent l’un par rapport à l’autre.',
                    ],
                    [
                        'question' => 'Des agriculteurs cultivent les pentes d’un ancien volcan, où la terre donne de bonnes récoltes. Comment l’expliquer ?',
                        'choices' => [
                            ['choice_text' => 'la lave refroidie libère de l’eau douce dans le sol', 'is_correct' => false],
                            ['choice_text' => 'les cendres altérées enrichissent le sol en minéraux', 'is_correct' => true],
                            ['choice_text' => 'la chaleur résiduelle du volcan fait pousser les cultures', 'is_correct' => false],
                            ['choice_text' => 'le volcan fabrique lui-même la matière organique du sol', 'is_correct' => false],
                        ],
                        'explanation' => 'En s’altérant, cendres et roches volcaniques libèrent des minéraux utiles aux plantes.',
                    ],
                    [
                        'question' => 'Un système d’alerte prévient les habitants quelques secondes avant l’arrivée des fortes secousses. À quoi servent ces secondes ?',
                        'choices' => [
                            ['choice_text' => 'à empêcher la faille de se rompre sous la ville', 'is_correct' => false],
                            ['choice_text' => 'à réduire la magnitude avant l’arrivée des ondes', 'is_correct' => false],
                            ['choice_text' => 'à se protéger et à arrêter trains et machines', 'is_correct' => true],
                            ['choice_text' => 'à éloigner l’épicentre des zones habitées', 'is_correct' => false],
                        ],
                        'explanation' => 'Ces quelques secondes permettent de se mettre à l’abri et de stopper des trains ou des machines avant les secousses les plus fortes.',
                    ],
                    [
                        'question' => 'Une commune de montagne dresse une carte de ses pentes instables. À quoi sert-elle ?',
                        'choices' => [
                            ['choice_text' => 'à annoncer la date du prochain glissement', 'is_correct' => false],
                            ['choice_text' => 'à repérer les zones où renforcer la prévention', 'is_correct' => true],
                            ['choice_text' => 'à supprimer le risque sur les pentes cartographiées', 'is_correct' => false],
                            ['choice_text' => 'à mesurer la hauteur des montagnes de la région', 'is_correct' => false],
                        ],
                        'explanation' => 'La carte montre où construire avec prudence ou protéger les habitants ; elle ne prévoit pas les dates.',
                    ],
                ],
            ],
            [
                'title' => 'Révision générale de géologie',
                'description' => 'Synthèse sur Terre, minéraux, roches, temps géologique et risques.',
                'settings' => ['duration' => 25, 'passing_score' => 70],
                'questions' => [
                    [
                        'question' => 'Youssef étiquette quatre échantillons au labo. Quelle étiquette est exacte ?',
                        'choices' => [
                            ['choice_text' => 'basalte : roche sédimentaire', 'is_correct' => false],
                            ['choice_text' => 'grès : roche volcanique', 'is_correct' => false],
                            ['choice_text' => 'marbre : roche métamorphique', 'is_correct' => true],
                            ['choice_text' => 'calcaire : roche magmatique', 'is_correct' => false],
                        ],
                        'explanation' => 'Le marbre naît du calcaire transformé sous l’effet de la chaleur et de la pression : c’est donc une roche métamorphique.',
                    ],
                    [
                        'question' => 'Un échantillon raye le gypse (dureté 2) mais ne raye pas le quartz (dureté 7). Où se situe sa dureté sur l’échelle de Mohs ?',
                        'choices' => [
                            ['choice_text' => 'entre 7 et 10', 'is_correct' => false],
                            ['choice_text' => 'entre 2 et 7', 'is_correct' => true],
                            ['choice_text' => 'entre 1 et 2', 'is_correct' => false],
                            ['choice_text' => 'entre 8 et 9', 'is_correct' => false],
                        ],
                        'explanation' => 'Il est plus dur que le gypse puisqu’il le raye, et moins dur que le quartz puisqu’il ne le raye pas.',
                    ],
                    [
                        'question' => 'Un grès est fait de grains de quartz issus d’un ancien massif de granite. Quelles étapes mènent du granite au grès ?',
                        'choices' => [
                            ['choice_text' => 'fusion partielle, cristallisation puis métamorphisme', 'is_correct' => false],
                            ['choice_text' => 'métamorphisme, fusion puis refroidissement en surface', 'is_correct' => false],
                            ['choice_text' => 'dépôt, altération, puis cristallisation du magma', 'is_correct' => false],
                            ['choice_text' => 'érosion, transport, dépôt, puis compaction et cimentation', 'is_correct' => true],
                        ],
                        'explanation' => 'Le granite est d’abord altéré et érodé, ses grains sont transportés et déposés, puis tassés et cimentés en grès.',
                    ],
                    [
                        'question' => 'Imane doit classer trois événements, du plus ancien au plus récent : la formation de la Terre, l’apparition des dinosaures et celle des humains modernes. Quel ordre est le bon ?',
                        'choices' => [
                            ['choice_text' => 'Terre, dinosaures, humains modernes', 'is_correct' => true],
                            ['choice_text' => 'dinosaures, Terre, humains modernes', 'is_correct' => false],
                            ['choice_text' => 'Terre, humains modernes, dinosaures', 'is_correct' => false],
                            ['choice_text' => 'humains modernes, dinosaures, Terre', 'is_correct' => false],
                        ],
                        'explanation' => 'La Terre date de 4,54 milliards d’années, les dinosaures sont apparus il y a environ 230 millions d’années et l’espèce humaine il y a environ 300 000 ans.',
                    ],
                    [
                        'question' => 'Il tombe 200 mm de pluie sur un champ : 80 mm ruissellent et 20 mm s’évaporent. Quelle quantité s’infiltre ?',
                        'choices' => [
                            ['choice_text' => '120 mm', 'is_correct' => false],
                            ['choice_text' => '100 mm', 'is_correct' => true],
                            ['choice_text' => '280 mm', 'is_correct' => false],
                            ['choice_text' => '20 mm', 'is_correct' => false],
                        ],
                        'explanation' => '200 − 80 − 20 = 100 mm s’infiltrent dans le sol.',
                    ],
                    [
                        'question' => 'Trois forages sont creusés : l’un dans un sable grossier, l’autre dans une argile, le dernier dans un granite non fissuré. Lequel fournira le plus d’eau ?',
                        'choices' => [
                            ['choice_text' => 'le forage dans le sable grossier', 'is_correct' => true],
                            ['choice_text' => 'le forage dans l’argile', 'is_correct' => false],
                            ['choice_text' => 'le forage dans le granite sain', 'is_correct' => false],
                            ['choice_text' => 'les trois, en quantité égale', 'is_correct' => false],
                        ],
                        'explanation' => 'Le sable grossier est à la fois poreux et perméable : l’eau y est stockée et circule facilement jusqu’au puits.',
                    ],
                    [
                        'question' => 'Dans une carrière, Sara trouve des coquillages fossiles dans un calcaire. Que peut-elle en déduire sur le lieu à l’époque du dépôt ?',
                        'choices' => [
                            ['choice_text' => 'c’était un désert de sable', 'is_correct' => false],
                            ['choice_text' => 'c’était un glacier de montagne', 'is_correct' => false],
                            ['choice_text' => 'c’était un fond marin', 'is_correct' => true],
                            ['choice_text' => 'c’était le cratère d’un volcan', 'is_correct' => false],
                        ],
                        'explanation' => 'Des coquillages marins fossilisés indiquent que la roche s’est formée au fond d’une mer ou d’un océan.',
                    ],
                    [
                        'question' => 'Dans une station de surveillance, un appareil dessine une courbe à chaque secousse du sol. Comment s’appelle-t-il ?',
                        'choices' => [
                            ['choice_text' => 'un baromètre', 'is_correct' => false],
                            ['choice_text' => 'un pluviomètre', 'is_correct' => false],
                            ['choice_text' => 'un anémomètre', 'is_correct' => false],
                            ['choice_text' => 'un sismographe', 'is_correct' => true],
                        ],
                        'explanation' => 'Le sismographe enregistre les vibrations du sol, ce qui permet de situer et de mesurer un séisme.',
                    ],
                    [
                        'question' => 'Quelle phrase distingue correctement une roche et un minéral ?',
                        'choices' => [
                            ['choice_text' => 'le granite est une roche, le quartz en est un minéral', 'is_correct' => true],
                            ['choice_text' => 'le quartz est une roche qui contient du granite', 'is_correct' => false],
                            ['choice_text' => 'le granite est un minéral, comme le diamant', 'is_correct' => false],
                            ['choice_text' => 'le talc est une roche formée de granite', 'is_correct' => false],
                        ],
                        'explanation' => 'Le granite est une roche qui associe plusieurs minéraux, dont le quartz ; un minéral est un constituant, pas un mélange.',
                    ],
                    [
                        'question' => 'Sara étudie un lac où les sédiments s’accumulent de 2 mm par siècle. Combien de temps a-t-il fallu pour former une couche de 10 m ?',
                        'choices' => [
                            ['choice_text' => '5 000 ans', 'is_correct' => false],
                            ['choice_text' => '50 000 ans', 'is_correct' => false],
                            ['choice_text' => '5 millions d’années', 'is_correct' => false],
                            ['choice_text' => '500 000 ans', 'is_correct' => true],
                        ],
                        'explanation' => '10 m valent 10 000 mm ; 10 000 ÷ 2 = 5 000 siècles, soit 500 000 ans.',
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