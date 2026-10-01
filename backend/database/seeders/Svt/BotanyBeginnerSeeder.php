<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class BotanyBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'botany')->firstOrFail();

        $quizzes = [
            [
                'title' => 'Introduction à la botanique et organisation de la plante',
                'description' => 'Quiz débutant sur les grandes parties de la plante, leur organisation et quelques fonctions essentielles.',
                'duration' => 15,
                'passing_score' => 50,
                'questions' => [
                    [
                        'question' => 'Chez une plante à fleurs, quelle structure absorbe principalement l’eau et les sels minéraux du sol ?',
                        'choices' => [
                            [
                                'choice_text' => 'Les racines',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Les feuilles',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Les fleurs',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Les fruits',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'Les racines, en particulier leurs zones portant des poils absorbants, assurent l’essentiel de l’absorption de l’eau et des ions minéraux présents dans le sol.',
                    ],
                    [
                        'question' => 'Quelle partie de la tige porte généralement les feuilles ?',
                        'choices' => [
                            [
                                'choice_text' => 'Les nœuds',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Les stomates',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Les pétales',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Les ovules',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'Les nœuds sont les zones de la tige où s’insèrent habituellement les feuilles et les bourgeons.',
                    ],
                    [
                        'question' => 'Un élève observe qu’une plante penchée vers une fenêtre redresse progressivement sa tige vers la lumière. Quel nom donne-t-on à cette réponse de croissance ?',
                        'choices' => [
                            [
                                'choice_text' => 'Le phototropisme',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'La germination',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'La transpiration',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'La pollinisation',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'Le phototropisme est une croissance orientée par la lumière. Une jeune tige se courbe souvent vers la source lumineuse.',
                    ],
                    [
                        'question' => 'Quel tissu végétal transporte surtout l’eau et les sels minéraux des racines vers les parties aériennes ?',
                        'choices' => [
                            [
                                'choice_text' => 'Le xylème',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Le phloème',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Le parenchyme',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Le collenchyme',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'Le xylème conduit principalement l’eau et les sels minéraux vers le haut de la plante. Le phloème transporte surtout les sucres produits par la plante.',
                    ],
                    [
                        'question' => 'Pourquoi les feuilles sont-elles souvent larges et aplaties ?',
                        'choices' => [
                            [
                                'choice_text' => 'Pour capter davantage de lumière',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Pour produire davantage de racines',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Pour empêcher toute évaporation',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Pour stocker uniquement des graines',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'Une surface foliaire importante augmente la quantité de lumière interceptée, ce qui favorise la photosynthèse.',
                    ],
                    [
                        'question' => 'Vrai ou faux : les plantes n’ont pas besoin d’eau pour fabriquer leur matière organique.',
                        'choices' => [
                            [
                                'choice_text' => 'Faux : l’eau participe aux réactions de la photosynthèse',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Vrai : seules les substances minérales sont utiles',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Vrai : le dioxyde de carbone suffit à lui seul',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Faux : seule la chaleur remplace l’eau',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'L’eau est un des réactifs de la photosynthèse. Avec la lumière et le dioxyde de carbone, elle permet la fabrication de matière organique et la libération de dioxygène.',
                    ],
                    [
                        'question' => 'Quelle structure protège le bourgeon ou la jeune pousse à l’extrémité d’une tige en croissance ?',
                        'choices' => [
                            [
                                'choice_text' => 'Les tissus méristématiques et les jeunes ébauches foliaires',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Les graines mûres',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Les fruits secs',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Les racines latérales uniquement',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'À l’extrémité des tiges, les méristèmes apicaux produisent de nouvelles cellules qui forment les futures feuilles et autres organes.',
                    ],
                    [
                        'question' => 'Une plante présente des feuilles reliées à la tige par un petit axe. Comment appelle-t-on cet axe ?',
                        'choices' => [
                            [
                                'choice_text' => 'Le pétiole',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Le sépale',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'L’étamine',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Le rhizome',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'Le pétiole relie le limbe de la feuille à la tige. Chez certaines plantes, la feuille peut toutefois être presque sessile.',
                    ],
                    [
                        'question' => 'Quel ensemble correspond aux organes végétatifs d’une plante à fleurs ?',
                        'choices' => [
                            [
                                'choice_text' => 'Racines, tiges et feuilles',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Fleurs, fruits et graines',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Pétales, sépales et étamines',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Ovules, pollen et fruits',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'Les racines, les tiges et les feuilles sont les principaux organes végétatifs. Les fleurs et les structures qui en dérivent participent surtout à la reproduction.',
                    ],
                    [
                        'question' => 'On retire les feuilles d’une jeune plante et on la place dans une lumière suffisante. Quelle fonction sera directement la plus perturbée ?',
                        'choices' => [
                            [
                                'choice_text' => 'La photosynthèse',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'L’absorption des ions par les racines',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'La formation du xylème',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'La germination d’une graine déjà formée',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'Les feuilles sont les principaux organes photosynthétiques grâce à leurs cellules riches en chloroplastes. Leur retrait réduit donc fortement la photosynthèse.',
                    ],
                ],
            ],
            [
                'title' => 'Cellule végétale et tissus',
                'description' => 'Quiz sur les caractéristiques des cellules végétales, les chloroplastes, la paroi et les principaux tissus.',
                'duration' => 15,
                'passing_score' => 55,
                'questions' => [
                    [
                        'question' => 'Quelle structure est présente dans une cellule végétale et contient la chlorophylle ?',
                        'choices' => [
                            [
                                'choice_text' => 'Le chloroplaste',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Le lysosome',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Le centrosome',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Le ribosome',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'Les chloroplastes contiennent notamment la chlorophylle et constituent le principal siège de la photosynthèse dans les cellules végétales vertes.',
                    ],
                    [
                        'question' => 'Quel rôle joue principalement la paroi cellulaire végétale ?',
                        'choices' => [
                            [
                                'choice_text' => 'Elle donne rigidité et protection à la cellule',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Elle produit directement l’ATP dans le cytoplasme',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Elle remplace le noyau',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Elle transporte uniquement les hormones',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'La paroi cellulaire, riche notamment en cellulose, apporte une résistance mécanique et aide à maintenir la forme de la cellule.',
                    ],
                    [
                        'question' => 'Dans une cellule végétale mature, quelle grande structure peut occuper une grande partie du volume cellulaire ?',
                        'choices' => [
                            [
                                'choice_text' => 'La vacuole',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Le nucléole',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Le centrosome',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Le chromosome seul',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'La grande vacuole centrale peut occuper une part importante du volume de la cellule végétale. Elle participe notamment au stockage et à la pression de turgescence.',
                    ],
                    [
                        'question' => 'Quel tissu assure surtout le transport de l’eau et des sels minéraux ?',
                        'choices' => [
                            [
                                'choice_text' => 'Le xylème',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Le phloème',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'L’épiderme',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Le méristème',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'Le xylème est spécialisé dans la conduction de l’eau et des sels minéraux depuis les racines vers les organes aériens.',
                    ],
                    [
                        'question' => 'Quel tissu transporte principalement les sucres produits par les feuilles ?',
                        'choices' => [
                            [
                                'choice_text' => 'Le phloème',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Le xylème',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Le liège',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Le méristème apical',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'Le phloème distribue les assimilats organiques, surtout le saccharose, depuis les organes sources vers les organes qui en ont besoin ou qui les stockent.',
                    ],
                    [
                        'question' => 'Pourquoi les cellules des méristèmes se divisent-elles activement ?',
                        'choices' => [
                            [
                                'choice_text' => 'Parce qu’elles assurent la croissance de la plante',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Parce qu’elles remplacent uniquement les fleurs fanées',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Parce qu’elles empêchent toute photosynthèse',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Parce qu’elles fabriquent seulement des graines',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'Les méristèmes contiennent des cellules capables de se diviser activement. Ils sont à l’origine de nombreux nouveaux tissus et organes au cours de la croissance.',
                    ],
                    [
                        'question' => 'Une observation microscopique montre des cellules allongées, riches en chloroplastes, disposées sous l’épiderme supérieur d’une feuille. De quel tissu s’agit-il probablement ?',
                        'choices' => [
                            [
                                'choice_text' => 'Le parenchyme palissadique',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Le xylème secondaire',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Le liège',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Le phloème',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'Le parenchyme palissadique est situé généralement près de la face supérieure de la feuille et contient de nombreuses cellules riches en chloroplastes.',
                    ],
                    [
                        'question' => 'Quel tissu protège directement la surface d’une jeune feuille ?',
                        'choices' => [
                            [
                                'choice_text' => 'L’épiderme',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Le xylème',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Le phloème',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Le cambium vasculaire',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'L’épiderme forme une couche protectrice externe. Il peut être recouvert d’une cuticule qui limite notamment les pertes d’eau.',
                    ],
                    [
                        'question' => 'Quelle différence décrit correctement une cellule végétale par rapport à une cellule animale ?',
                        'choices' => [
                            [
                                'choice_text' => 'Elle possède généralement une paroi et peut contenir des chloroplastes',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Elle ne possède jamais de membrane plasmique',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Elle n’a pas de matériel génétique',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Elle possède toujours plusieurs noyaux',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'Les cellules végétales ont une membrane plasmique comme les cellules animales, mais possèdent généralement une paroi cellulaire et, dans les tissus photosynthétiques, des chloroplastes.',
                    ],
                    [
                        'question' => 'Une plante manque de rigidité après une longue période sans eau. Quelle notion cellulaire explique le mieux ce phénomène ?',
                        'choices' => [
                            [
                                'choice_text' => 'La perte de turgescence',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'La duplication des chromosomes',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'La fusion des chloroplastes',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'La formation de pollen',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'Lorsque les cellules perdent de l’eau, leur pression de turgescence diminue. Les tissus herbacés deviennent alors moins fermes et la plante peut flétrir.',
                    ],
                ],
            ],
            [
                'title' => 'Photosynthèse et nutrition minérale',
                'description' => 'Quiz sur la photosynthèse, la lumière, le dioxyde de carbone et les besoins minéraux des plantes.',
                'duration' => 20,
                'passing_score' => 60,
                'questions' => [
                    [
                        'question' => 'Quels sont les principaux réactifs de la photosynthèse ?',
                        'choices' => [
                            [
                                'choice_text' => 'Le dioxyde de carbone et l’eau',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Le dioxygène et le saccharose',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'L’azote moléculaire et le glucose',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Le chlorure de sodium et l’eau',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'La photosynthèse utilise principalement le dioxyde de carbone et l’eau comme matières premières, grâce à l’énergie lumineuse captée par les pigments photosynthétiques.',
                    ],
                    [
                        'question' => 'Quel produit organique est directement associé à la fabrication de matière carbonée par photosynthèse ?',
                        'choices' => [
                            [
                                'choice_text' => 'Des sucres',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'De l’urée uniquement',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Du chlorure de sodium',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Du dioxyde de carbone',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'La photosynthèse permet la synthèse de matière organique, notamment des glucides tels que le glucose, qui peut ensuite être transformé et stocké sous diverses formes.',
                    ],
                    [
                        'question' => 'Dans quelle partie de la cellule végétale se déroulent les principales réactions photosynthétiques ?',
                        'choices' => [
                            [
                                'choice_text' => 'Dans les chloroplastes',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Dans les ribosomes',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Dans les lysosomes',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Dans le noyau uniquement',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'Les chloroplastes contiennent les structures membranaires et les pigments nécessaires aux réactions de la photosynthèse.',
                    ],
                    [
                        'question' => 'Une plante reçoit de la lumière, de l’eau et des sels minéraux, mais l’air autour d’elle contient très peu de dioxyde de carbone. Que peut-on prévoir ?',
                        'choices' => [
                            [
                                'choice_text' => 'La photosynthèse sera limitée par le manque de CO₂',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'La photosynthèse sera forcément maximale',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Les racines arrêteront instantanément toute croissance',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'La plante fabriquera du CO₂ à partir de lumière seulement',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'Le dioxyde de carbone est une matière première de la photosynthèse. Une faible disponibilité en CO₂ peut donc limiter le rythme de fixation du carbone.',
                    ],
                    [
                        'question' => 'Pourquoi une plante cultivée dans l’obscurité prolongée devient-elle souvent pâle et faible ?',
                        'choices' => [
                            [
                                'choice_text' => 'Elle ne peut pas maintenir normalement la photosynthèse et produit peu de matière organique',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Elle reçoit trop de dioxyde de carbone',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Ses racines deviennent automatiquement des feuilles',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'La chlorophylle se transforme en calcium',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'Sans lumière suffisante, la photosynthèse ne peut pas fonctionner normalement. La production de matière organique diminue et les jeunes tissus peuvent perdre leur coloration verte caractéristique.',
                    ],
                    [
                        'question' => 'Quel élément minéral est particulièrement associé à la synthèse des protéines et des acides nucléiques chez les plantes ?',
                        'choices' => [
                            [
                                'choice_text' => 'L’azote',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Le sodium',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Le chlore',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Le mercure',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'L’azote entre dans la composition des acides aminés et des nucléotides. Il est donc essentiel à la croissance et à la synthèse de nombreuses molécules biologiques.',
                    ],
                    [
                        'question' => 'Un agriculteur ajoute un engrais contenant du magnésium. Pourquoi cet élément est-il important pour une plante verte ?',
                        'choices' => [
                            [
                                'choice_text' => 'Le magnésium fait partie de la molécule de chlorophylle',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Le magnésium remplace le carbone du glucose',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Le magnésium constitue la paroi en cellulose',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Le magnésium est le principal gaz de l’air',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'Le magnésium occupe une position centrale dans la molécule de chlorophylle, pigment indispensable à la capture de l’énergie lumineuse.',
                    ],
                    [
                        'question' => 'Une feuille est éclairée à intensité constante. On double la concentration en CO₂ autour d’elle, sans autre changement. Quel résultat est possible à court terme ?',
                        'choices' => [
                            [
                                'choice_text' => 'Le rythme de photosynthèse peut augmenter si le CO₂ était limitant',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'La feuille cesse forcément toute photosynthèse',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'La plante ne peut plus respirer',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Les racines arrêtent immédiatement d’absorber l’eau',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'Lorsque le dioxyde de carbone est un facteur limitant, son augmentation peut accroître l’activité photosynthétique jusqu’à ce qu’un autre facteur devienne limitant.',
                    ],
                    [
                        'question' => 'Quelle relation décrit correctement photosynthèse et respiration chez une plante ?',
                        'choices' => [
                            [
                                'choice_text' => 'La plante peut réaliser les deux processus, selon les cellules et les conditions',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Une plante fait seulement de la photosynthèse',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Une plante fait seulement de la respiration la nuit',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'La respiration ne concerne que les racines',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'Les cellules végétales respirent pour fournir de l’énergie utilisable. Les tissus chlorophylliens photosynthétisent lorsque les conditions sont favorables à la lumière.',
                    ],
                    [
                        'question' => 'Un plant produit 6 mg de matière sèche après avoir accumulé 10 mg de biomasse carbonée nette au cours d’une période donnée. Quelle affirmation est la plus correcte ?',
                        'choices' => [
                            [
                                'choice_text' => 'La matière organique produite peut être répartie entre croissance, respiration et stockage selon le bilan considéré',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Toute la biomasse produite devient immédiatement du xylème',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Toute la biomasse devient uniquement des graines',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'La plante transforme toute sa matière organique en eau',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'La matière carbonée produite par la plante est utilisée pour différentes fonctions : construction de tissus, respiration, stockage et synthèses diverses. Elle n’est pas destinée à un seul usage.',
                    ],
                ],
            ],
            [
                'title' => 'Racines, tiges et circulation de la sève',
                'description' => 'Quiz sur l’absorption racinaire, le transport dans le xylème et le phloème, ainsi que les mouvements d’eau dans la plante.',
                'duration' => 20,
                'passing_score' => 60,
                'questions' => [
                    [
                        'question' => 'Quel rôle joue principalement la zone pilifère d’une jeune racine ?',
                        'choices' => [
                            [
                                'choice_text' => 'Elle augmente la surface de contact avec le sol et facilite l’absorption',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Elle produit les fleurs',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Elle réalise uniquement la pollinisation',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Elle remplace les feuilles',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'Les poils absorbants augmentent fortement la surface de contact entre la racine et le sol, ce qui favorise l’entrée de l’eau et des ions minéraux.',
                    ],
                    [
                        'question' => 'Dans quel tissu l’eau monte-t-elle principalement depuis les racines ?',
                        'choices' => [
                            [
                                'choice_text' => 'Le xylème',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Le phloème',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Le collenchyme',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'L’épiderme',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'Le xylème forme un réseau de conduits spécialisés dans le transport de l’eau et des sels minéraux vers les parties aériennes.',
                    ],
                    [
                        'question' => 'Pourquoi l’eau peut-elle monter dans de petits conduits du xylème ?',
                        'choices' => [
                            [
                                'choice_text' => 'La transpiration foliaire contribue à créer une force de traction',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Le glucose pousse mécaniquement l’eau vers le haut',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Les pétales aspirent directement l’eau',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Les fruits chauffent le xylème',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'La perte d’eau par les feuilles lors de la transpiration contribue à créer une tension qui favorise la montée de l’eau dans le xylème.',
                    ],
                    [
                        'question' => 'Quel liquide circule principalement dans le phloème ?',
                        'choices' => [
                            [
                                'choice_text' => 'Une sève riche en substances organiques, notamment en sucres',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Uniquement de l’eau pure',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Uniquement de l’oxygène',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Du pollen liquide',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'La sève élaborée transportée par le phloème contient notamment du saccharose et d’autres substances organiques produites ou mobilisées par la plante.',
                    ],
                    [
                        'question' => 'Une tige est annelée de façon à interrompre le phloème mais pas immédiatement le xylème. Que peut-on observer sous l’anneau après quelque temps ?',
                        'choices' => [
                            [
                                'choice_text' => 'Une accumulation de sucres au-dessus de la zone interrompue',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Une accumulation de sels minéraux uniquement sous l’anneau',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Une production immédiate de nouvelles fleurs dans les racines',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Une disparition instantanée du xylème',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'Le phloème transporte les assimilats depuis les zones sources. S’il est interrompu, les sucres peuvent s’accumuler au-dessus de la zone d’interruption, tandis que le xylème peut continuer à conduire l’eau.',
                    ],
                    [
                        'question' => 'Quelle observation indique une perte importante d’eau par transpiration ?',
                        'choices' => [
                            [
                                'choice_text' => 'Des gouttelettes ou une forte humidité sur la surface de feuilles dans certaines conditions',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Une augmentation du nombre de pétales',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'La disparition du noyau des cellules',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'La formation immédiate de graines',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'La transpiration correspond à une perte d’eau, principalement sous forme de vapeur à travers les stomates. Dans certaines conditions particulières, on peut aussi observer de l’eau liquide par guttation.',
                    ],
                    [
                        'question' => 'Une plante a ses stomates fermés pendant une période chaude et sèche. Quel effet est le plus direct ?',
                        'choices' => [
                            [
                                'choice_text' => 'La perte d’eau par transpiration diminue',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'L’absorption des minéraux devient toujours nulle',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Le phloème cesse forcément toute circulation',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'La plante produit plus de lumière',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'La fermeture des stomates réduit les échanges gazeux et, en particulier, limite les pertes d’eau sous forme de vapeur.',
                    ],
                    [
                        'question' => 'Une racine prélève 4 mmol de nitrate et 2 mmol de phosphate pendant une journée. Quelle quantité totale d’ions de ces deux types a-t-elle prélevée ?',
                        'choices' => [
                            [
                                'choice_text' => '6 mmol',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => '2 mmol',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '4 mmol',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '8 mmol',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'On additionne les deux quantités : 4 mmol + 2 mmol = 6 mmol d’ions au total pour ces deux catégories.',
                    ],
                    [
                        'question' => 'Quelle structure relie la racine au système aérien tout en pouvant stocker et transporter des substances ?',
                        'choices' => [
                            [
                                'choice_text' => 'La tige',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Le pétale',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'L’anthère',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Le stigmate',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'La tige soutient les organes aériens et contient les tissus conducteurs qui assurent la circulation entre les racines et les parties aériennes.',
                    ],
                    [
                        'question' => 'Si une plante transpire davantage pendant une journée chaude, que peut-on attendre du transport d’eau dans le xylème, toutes choses égales par ailleurs ?',
                        'choices' => [
                            [
                                'choice_text' => 'Une demande accrue en eau vers les feuilles',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Une disparition du xylème en quelques minutes',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Un arrêt obligatoire de toute absorption racinaire',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Une production automatique de graines',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'Une transpiration plus importante augmente les besoins de la partie aérienne en eau. Le système racinaire et le xylème participent alors au maintien de cet approvisionnement.',
                    ],
                ],
            ],
            [
                'title' => 'Feuille, stomates et échanges gazeux',
                'description' => 'Quiz débutant sur l’anatomie fonctionnelle de la feuille et les échanges de gaz avec l’environnement.',
                'duration' => 20,
                'passing_score' => 60,
                'questions' => [
                    [
                        'question' => 'Quelle ouverture de la feuille régule une grande partie des échanges gazeux ?',
                        'choices' => [
                            [
                                'choice_text' => 'Le stomate',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Le pétale',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Le grain de pollen',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'La racine latérale',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'Les stomates sont des pores de l’épiderme qui permettent notamment les échanges de dioxyde de carbone, de dioxygène et de vapeur d’eau.',
                    ],
                    [
                        'question' => 'Quelles cellules contrôlent directement l’ouverture d’un stomate ?',
                        'choices' => [
                            [
                                'choice_text' => 'Les cellules de garde',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Les cellules du xylème',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Les cellules des racines',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Les cellules des pétales',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'Les cellules de garde modifient leur turgescence et leur forme, ce qui contrôle l’ouverture ou la fermeture du pore stomatique.',
                    ],
                    [
                        'question' => 'En conditions favorables à la photosynthèse, pourquoi le CO₂ doit-il entrer dans la feuille ?',
                        'choices' => [
                            [
                                'choice_text' => 'Il fournit le carbone nécessaire à la synthèse de matière organique',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Il devient directement de l’eau',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Il remplace les sels minéraux',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Il dissout la cellulose des parois',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'Le dioxyde de carbone fournit le carbone fixé lors de la photosynthèse et utilisé ensuite pour fabriquer des molécules organiques.',
                    ],
                    [
                        'question' => 'Quel gaz est généralement libéré en quantité importante par une feuille en pleine photosynthèse ?',
                        'choices' => [
                            [
                                'choice_text' => 'Le dioxygène',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'L’azote',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Le méthane',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'L’hydrogène',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'La photosynthèse libère du dioxygène lors des réactions qui impliquent l’eau et les systèmes photosynthétiques.',
                    ],
                    [
                        'question' => 'Une feuille est recouverte d’une couche cireuse appelée cuticule. Quelle est sa fonction principale ?',
                        'choices' => [
                            [
                                'choice_text' => 'Limiter les pertes d’eau',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Produire les graines',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Absorber tout le dioxyde de carbone de l’air',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Remplacer les stomates',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'La cuticule constitue une barrière relativement imperméable qui réduit les pertes d’eau à travers la surface de la feuille.',
                    ],
                    [
                        'question' => 'Sur une face d’une feuille, on compte 120 stomates par mm². Sur une zone de 2 mm², combien de stomates trouve-t-on approximativement à cette densité ?',
                        'choices' => [
                            [
                                'choice_text' => '240',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => '60',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '120',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '360',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'À 120 stomates par mm² sur 2 mm², on obtient 120 × 2 = 240 stomates.',
                    ],
                    [
                        'question' => 'Pourquoi de nombreux stomates sont-ils situés sur la face inférieure des feuilles de certaines plantes ?',
                        'choices' => [
                            [
                                'choice_text' => 'Cette disposition peut réduire l’exposition directe au soleil et donc certaines pertes d’eau',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Parce que le CO₂ ne se trouve que sous les feuilles',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Parce que la photosynthèse ne fonctionne pas sur la face supérieure',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Parce que les stomates produisent le xylème',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'La position stomatique varie selon les espèces. Chez de nombreuses plantes terrestres, la face inférieure est moins exposée au rayonnement direct, ce qui peut limiter les pertes d’eau.',
                    ],
                    [
                        'question' => 'Une plante est placée dans une atmosphère très sèche. Quelle réponse stomatique peut aider à limiter la perte d’eau ?',
                        'choices' => [
                            [
                                'choice_text' => 'La fermeture partielle ou complète des stomates',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'L’ouverture permanente de tous les stomates',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'La suppression des racines',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'La transformation des feuilles en fruits',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'La fermeture stomatique réduit la diffusion de vapeur d’eau vers l’extérieur. Elle peut toutefois aussi limiter l’entrée de CO₂ et donc ralentir la photosynthèse.',
                    ],
                    [
                        'question' => 'Quelle combinaison favorise généralement une photosynthèse active chez une plante saine ?',
                        'choices' => [
                            [
                                'choice_text' => 'Lumière suffisante, CO₂ disponible et eau suffisante',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Obscurité totale, absence d’eau et manque de CO₂',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Très forte chaleur et absence de sels minéraux',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Uniquement de l’azote gazeux',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'La photosynthèse dépend de plusieurs facteurs. Une lumière adaptée, une disponibilité suffisante en CO₂ et un bon approvisionnement en eau sont des conditions importantes.',
                    ],
                    [
                        'question' => 'Deux feuilles identiques reçoivent la même lumière. La première possède 100 stomates par mm², la seconde 50 stomates par mm². Quelle différence peut exister ?',
                        'choices' => [
                            [
                                'choice_text' => 'La première peut potentiellement avoir une plus grande capacité d’échanges gazeux, selon l’état des stomates',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'La seconde ne peut jamais respirer',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'La première n’a pas besoin d’eau',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'La seconde possède forcément deux fois plus de chloroplastes',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'La densité stomatique peut influencer la capacité d’échanges gazeux, mais le fonctionnement réel dépend aussi de l’ouverture des stomates, de la surface foliaire et d’autres facteurs.',
                    ],
                ],
            ],
            [
                'title' => 'Fleurs, pollinisation et reproduction',
                'description' => 'Quiz sur les organes floraux, la pollinisation, la fécondation et la formation des graines et fruits.',
                'duration' => 20,
                'passing_score' => 65,
                'questions' => [
                    [
                        'question' => 'Quelle partie de la fleur produit généralement les grains de pollen ?',
                        'choices' => [
                            [
                                'choice_text' => 'Les anthères',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Les ovaires',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Les sépales',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Les stigmates',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'Les anthères, situées au sommet des étamines, produisent et libèrent les grains de pollen.',
                    ],
                    [
                        'question' => 'Quel organe floral reçoit généralement le pollen ?',
                        'choices' => [
                            [
                                'choice_text' => 'Le stigmate',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'L’anthère',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Le sépale',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Le filament seulement',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'Le stigmate fait partie du pistil et reçoit les grains de pollen lors de la pollinisation.',
                    ],
                    [
                        'question' => 'Quelle est la différence entre pollinisation et fécondation ?',
                        'choices' => [
                            [
                                'choice_text' => 'La pollinisation correspond au transfert du pollen, tandis que la fécondation implique la fusion des gamètes',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'La pollinisation forme directement le fruit',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'La fécondation consiste uniquement à ouvrir les pétales',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Ce sont exactement les mêmes étapes',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'La pollinisation est le transfert du pollen vers le stigmate. La fécondation intervient ensuite lorsque les gamètes mâle et femelle fusionnent.',
                    ],
                    [
                        'question' => 'Après la fécondation chez une plante à fleurs, quel organe de l’ovaire se transforme généralement en graine ?',
                        'choices' => [
                            [
                                'choice_text' => 'L’ovule',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Le pétale',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'L’anthère',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Le sépale',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'L’ovule fécondé évolue généralement en graine. L’ovaire, lui, participe généralement à la formation du fruit.',
                    ],
                    [
                        'question' => 'Quel phénomène augmente les chances de pollinisation croisée entre deux individus d’une même espèce ?',
                        'choices' => [
                            [
                                'choice_text' => 'Le transport du pollen par le vent ou les animaux',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'La fermeture permanente des fleurs avant la libération du pollen',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'La disparition des étamines',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'La suppression des ovules',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'Le vent et les animaux pollinisateurs peuvent transporter le pollen d’une fleur vers le stigmate d’une autre fleur, favorisant la pollinisation croisée.',
                    ],
                    [
                        'question' => 'Une fleur possède des pétales vivement colorés et un nectar abondant. Quelle fonction peut être liée à ces caractères ?',
                        'choices' => [
                            [
                                'choice_text' => 'Attirer des pollinisateurs',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Empêcher toute reproduction',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Transporter l’eau dans le xylème',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Stocker le pollen dans les racines',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'Chez de nombreuses plantes, les couleurs et le nectar contribuent à attirer les animaux pollinisateurs, qui facilitent le transfert du pollen.',
                    ],
                    [
                        'question' => 'Quel élément constitue le gamète femelle chez les plantes à fleurs ?',
                        'choices' => [
                            [
                                'choice_text' => 'La cellule-œuf formée après fécondation provient de l’union des gamètes ; l’oosphère est le gamète femelle',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Le pollen entier',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Le pétale',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Le fruit mûr',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'Chez les plantes à fleurs, l’oosphère est le gamète femelle. Elle fusionne avec un gamète mâle lors de la fécondation pour former la cellule-œuf.',
                    ],
                    [
                        'question' => 'Une plante porte 24 fleurs et, en moyenne, 3 graines sont produites par fleur fécondée. Combien de graines cela représente-t-il en moyenne si toutes les fleurs sont fécondées ?',
                        'choices' => [
                            [
                                'choice_text' => '72',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => '48',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '27',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '96',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'On calcule 24 × 3 = 72 graines en moyenne.',
                    ],
                    [
                        'question' => 'Quel avantage peut apporter la dispersion des graines loin de la plante mère ?',
                        'choices' => [
                            [
                                'choice_text' => 'Elle réduit la compétition immédiate entre jeunes plantes',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Elle empêche toute germination',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Elle augmente toujours le nombre de chromosomes',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Elle transforme les graines en pollen',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'Une dispersion efficace peut éloigner les descendants de la plante mère et réduire la concurrence pour la lumière, l’eau et les minéraux.',
                    ],
                    [
                        'question' => 'Un jardin contient beaucoup de fleurs mais très peu d’insectes pollinisateurs. Quelle conséquence est plausible pour certaines plantes dépendantes des insectes ?',
                        'choices' => [
                            [
                                'choice_text' => 'Une baisse de la pollinisation et donc de la production de graines ou de fruits',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Une multiplication automatique du pollen par les racines',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Une disparition immédiate du xylème',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Une augmentation certaine de toutes les récoltes',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'Chez les plantes qui dépendent des insectes pour le transfert du pollen, une faible fréquentation peut réduire la pollinisation et par conséquent la reproduction.',
                    ],
                ],
            ],
            [
                'title' => 'Graines, fruits et germination',
                'description' => 'Quiz sur la structure des graines, la dispersion, les conditions de germination et le développement des jeunes plantes.',
                'duration' => 20,
                'passing_score' => 65,
                'questions' => [
                    [
                        'question' => 'Quelle partie de la graine constitue souvent la future jeune plante ?',
                        'choices' => [
                            [
                                'choice_text' => 'L’embryon',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Le pollen',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Le pétale',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Le nectar',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'L’embryon contient les structures de la future plante, comme la jeune racine et la jeune tige, déjà organisées à un stade précoce.',
                    ],
                    [
                        'question' => 'Pourquoi une graine sèche peut-elle rester en dormance pendant longtemps ?',
                        'choices' => [
                            [
                                'choice_text' => 'Son activité métabolique est fortement réduite',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Elle réalise une photosynthèse maximale',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Elle produit en permanence des fleurs',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Elle absorbe obligatoirement beaucoup d’eau',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'La dormance s’accompagne d’un métabolisme très ralenti. Dans de nombreuses graines, cette stratégie permet de survivre à des périodes défavorables.',
                    ],
                    [
                        'question' => 'Laquelle de ces conditions est généralement nécessaire pour qu’une graine commence à germer ?',
                        'choices' => [
                            [
                                'choice_text' => 'Une quantité suffisante d’eau',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Une absence totale d’oxygène',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Une photosynthèse active avant l’apparition des feuilles',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Une forte concentration en sel',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'L’imbibition, c’est-à-dire l’absorption d’eau, réactive de nombreux processus métaboliques nécessaires à la germination.',
                    ],
                    [
                        'question' => 'Pourquoi l’oxygène est-il important pendant la germination de nombreuses graines ?',
                        'choices' => [
                            [
                                'choice_text' => 'Il permet la respiration nécessaire à la production d’énergie',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Il remplace l’eau dans l’embryon',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Il transforme directement les racines en feuilles',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Il empêche toute activité enzymatique',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'Au début de la germination, la jeune plante dépend largement de la respiration pour obtenir l’énergie nécessaire à ses transformations et à sa croissance.',
                    ],
                    [
                        'question' => 'Une graine est placée dans un sol très froid mais humide et bien oxygéné. Quelle conséquence est plausible ?',
                        'choices' => [
                            [
                                'choice_text' => 'La germination peut être ralentie',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'La germination est forcément plus rapide',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'La graine fabrique immédiatement des fleurs',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'La racine devient directement un fruit',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'La température influence l’activité enzymatique et métabolique. Une température trop basse pour l’espèce peut ralentir fortement la germination.',
                    ],
                    [
                        'question' => 'Quel rôle joue principalement le fruit chez de nombreuses plantes à fleurs ?',
                        'choices' => [
                            [
                                'choice_text' => 'Protéger les graines et contribuer à leur dispersion',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Produire directement les chloroplastes des feuilles',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Remplacer les racines',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Assurer uniquement la respiration cellulaire',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'Le fruit dérive généralement de l’ovaire et peut protéger les graines tout en facilitant leur dispersion par les animaux, le vent ou d’autres mécanismes.',
                    ],
                    [
                        'question' => 'Une plante possède des fruits secs très légers qui sont emportés par le vent. Quel mécanisme de dispersion est illustré ?',
                        'choices' => [
                            [
                                'choice_text' => 'L’anémochorie',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'La mycorhization',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'La transpiration',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'La germination',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'L’anémochorie correspond à la dispersion des graines ou des fruits par le vent.',
                    ],
                    [
                        'question' => 'Une graine absorbe 12 mL d’eau le premier jour et 8 mL le second. Quel volume total a-t-elle absorbé ?',
                        'choices' => [
                            [
                                'choice_text' => '20 mL',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => '4 mL',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '96 mL',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '18 mL',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'Le total est de 12 + 8 = 20 mL d’eau absorbée.',
                    ],
                    [
                        'question' => 'Quel organe sort généralement en premier de la graine lors de la germination ?',
                        'choices' => [
                            [
                                'choice_text' => 'La radicule',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Le fruit',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Le pétale',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'L’anthère',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'La radicule, qui donnera la jeune racine, émerge généralement en premier et permet rapidement l’ancrage ainsi que l’absorption.',
                    ],
                    [
                        'question' => 'Pourquoi une jeune plantule peut-elle survivre quelques jours avant que ses premières feuilles produisent beaucoup de sucres ?',
                        'choices' => [
                            [
                                'choice_text' => 'Elle utilise les réserves nutritives stockées dans la graine',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Elle fabrique tout son carbone à partir d’azote',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Elle reçoit des sucres du sol',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Elle n’a pas besoin d’énergie',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'Les réserves de la graine fournissent des matières et de l’énergie à la plantule jusqu’à ce que la photosynthèse devienne suffisamment active.',
                    ],
                ],
            ],
            [
                'title' => 'Adaptations des plantes à leur environnement',
                'description' => 'Quiz sur les adaptations des plantes aux milieux secs, aquatiques, salés, froids et ombragés.',
                'duration' => 25,
                'passing_score' => 65,
                'questions' => [
                    [
                        'question' => 'Une plante de désert possède des feuilles réduites à des épines et une tige verte. Quelle fonction peut être assurée par la tige ?',
                        'choices' => [
                            [
                                'choice_text' => 'La photosynthèse tout en limitant certaines pertes d’eau foliaires',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'La production de pollen uniquement',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'La formation des racines uniquement',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Le transport des animaux pollinisateurs',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'Chez certaines plantes de milieu aride, la tige verte peut assurer la photosynthèse tandis que les feuilles réduites diminuent la surface transpirante.',
                    ],
                    [
                        'question' => 'Pourquoi les feuilles de certaines plantes aquatiques flottantes ont-elles des stomates surtout sur leur face supérieure ?',
                        'choices' => [
                            [
                                'choice_text' => 'Cette face est au contact de l’air',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'La face supérieure est toujours sans chloroplastes',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Les racines produisent les stomates',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Le xylème ne fonctionne que dans les fleurs',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'Chez une feuille flottante, la face supérieure est exposée à l’air tandis que la face inférieure est au contact de l’eau. Les stomates se trouvent donc souvent sur la face supérieure.',
                    ],
                    [
                        'question' => 'Une plante vivant dans un milieu salé doit faire face à un excès d’ions. Quelle stratégie générale peut contribuer à sa survie ?',
                        'choices' => [
                            [
                                'choice_text' => 'Réguler l’entrée, le stockage ou l’excrétion des ions',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Absorber tous les sels sans contrôle',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Arrêter définitivement toute respiration',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Transformer le sodium en lumière',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'Les plantes halophiles ou halotolérantes utilisent diverses stratégies pour limiter les dommages du sel, notamment la régulation des ions et leur compartimentation.',
                    ],
                    [
                        'question' => 'Une plante de sous-bois possède de grandes feuilles fines. Quel avantage cela peut-il apporter ?',
                        'choices' => [
                            [
                                'choice_text' => 'Capter efficacement une lumière faible et diffuse',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Éviter toute photosynthèse',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Empêcher l’entrée du CO₂',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Réduire automatiquement toutes les racines',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'De grandes feuilles peuvent augmenter la surface de capture de la lumière, ce qui est avantageux lorsque l’éclairement est faible.',
                    ],
                    [
                        'question' => 'Quelle adaptation aide souvent certaines plantes à limiter les pertes d’eau dans un environnement sec ?',
                        'choices' => [
                            [
                                'choice_text' => 'Une cuticule épaisse',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Des stomates toujours ouverts',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Des feuilles très fines et très grandes dans tous les cas',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'L’absence totale de racines',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'Une cuticule épaisse limite les pertes d’eau par la surface foliaire, particulièrement importante dans les milieux secs.',
                    ],
                    [
                        'question' => 'Un botaniste compare deux espèces. L’une possède des racines profondes dans une région sèche. Quelle interprétation est la plus raisonnable ?',
                        'choices' => [
                            [
                                'choice_text' => 'Les racines profondes peuvent aider à atteindre des réserves d’eau situées plus bas dans le sol',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Les racines profondes servent uniquement à produire des fleurs',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Elles empêchent la plante d’absorber les minéraux',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Elles remplacent les stomates',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'Des racines profondes peuvent exploiter des couches du sol plus humides, même si la stratégie racinaire dépend fortement de l’espèce et du milieu.',
                    ],
                    [
                        'question' => 'Une feuille épaisse et charnue contient beaucoup de tissu de réserve. Quel type de milieu peut favoriser cette caractéristique ?',
                        'choices' => [
                            [
                                'choice_text' => 'Un milieu où le stockage de l’eau est avantageux',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Un milieu toujours submergé par de l’eau douce sans variation',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Un milieu où aucun échange gazeux n’est possible',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Uniquement les forêts tropicales humides',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'Les feuilles succulentes peuvent stocker de l’eau et sont fréquentes chez des plantes adaptées à des conditions de disponibilité hydrique irrégulière ou faible.',
                    ],
                    [
                        'question' => 'Une plante ferme ses stomates pendant les heures les plus chaudes. Quel compromis peut en résulter ?',
                        'choices' => [
                            [
                                'choice_text' => 'Elle économise de l’eau mais limite aussi l’entrée de CO₂',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Elle augmente toujours sa photosynthèse',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Elle arrête totalement sa respiration',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Elle n’a plus besoin de lumière',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'La fermeture des stomates réduit les pertes d’eau, mais elle limite également l’entrée de CO₂, ce qui peut freiner la photosynthèse.',
                    ],
                    [
                        'question' => 'Dans un sol très pauvre en phosphore, quel problème peut apparaître chez une plante ?',
                        'choices' => [
                            [
                                'choice_text' => 'Une croissance perturbée et des fonctions métaboliques moins efficaces',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Une production automatique de chlorophylle supplémentaire',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Une transformation immédiate des racines en feuilles',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Une disparition obligatoire des stomates',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'Le phosphore intervient dans les transferts d’énergie, les acides nucléiques et les membranes. Une carence peut donc perturber plusieurs processus de croissance.',
                    ],
                    [
                        'question' => 'Une espèce de montagne forme des feuilles petites et résistantes au froid. Quelle est l’idée générale derrière cette observation ?',
                        'choices' => [
                            [
                                'choice_text' => 'Les caractères peuvent contribuer à réduire les contraintes du milieu',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Toutes les plantes ont exactement les mêmes adaptations',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Le froid augmente toujours la vitesse de photosynthèse',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Les feuilles n’ont aucune relation avec l’environnement',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'Les plantes présentent des traits liés à leur milieu. Ces traits n’ont pas une fonction unique, mais peuvent contribuer à faire face à des contraintes telles que le froid, le vent ou le manque d’eau.',
                    ],
                ],
            ],
            [
                'title' => 'Botanique appliquée : cycles, croissance et observations',
                'description' => 'Révision intégrée sur les cycles de vie, la croissance, les expériences simples et l’interprétation de données botaniques.',
                'duration' => 25,
                'passing_score' => 70,
                'questions' => [
                    [
                        'question' => 'Dans une expérience, deux jeunes plants reçoivent la même quantité d’eau et de sels minéraux. Le plant A reçoit 12 h de lumière par jour, le plant B 4 h. Que cherche principalement à tester cette expérience ?',
                        'choices' => [
                            [
                                'choice_text' => 'L’effet de la durée d’éclairement sur la croissance, toutes choses égales par ailleurs',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'L’effet de la couleur du sol uniquement',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Le rôle des graines dans la pollinisation',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'La composition du xylème',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'Le protocole modifie principalement la durée d’éclairement tout en maintenant d’autres facteurs constants. Il peut donc servir à étudier l’influence de la lumière sur la croissance.',
                    ],
                    [
                        'question' => 'Une tige mesure 8 cm au début de l’expérience et 13 cm après 5 jours. Quelle croissance moyenne quotidienne cela représente-t-il ?',
                        'choices' => [
                            [
                                'choice_text' => '1 cm/jour',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => '0,5 cm/jour',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '2,6 cm/jour',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '5 cm/jour',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'La croissance totale est de 13 − 8 = 5 cm. Sur 5 jours, cela donne 5 ÷ 5 = 1 cm par jour en moyenne.',
                    ],
                    [
                        'question' => 'Une plante annuelle produit des graines, puis meurt à la fin de son cycle. Que signifie ici le terme « annuelle » ?',
                        'choices' => [
                            [
                                'choice_text' => 'Son cycle de vie complet se déroule généralement en une année',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Elle produit des feuilles toutes les années sans se reproduire',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Elle ne vit qu’un mois',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Elle est toujours vivace',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'Une plante annuelle accomplit généralement les étapes principales de son cycle de vie, de la germination à la production de nouvelles graines, en une seule saison ou année.',
                    ],
                    [
                        'question' => 'Pourquoi faut-il répéter une mesure de hauteur sur plusieurs plantes plutôt que de ne mesurer qu’une seule plante ?',
                        'choices' => [
                            [
                                'choice_text' => 'Pour réduire l’influence de la variabilité individuelle et obtenir une estimation plus robuste',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Pour augmenter artificiellement les données',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Parce qu’une seule plante ne possède pas de racines',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Pour empêcher les plantes de respirer',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'Les individus d’une même espèce peuvent différer. Plusieurs mesures permettent de mieux représenter la tendance générale et de réduire le poids d’une valeur atypique.',
                    ],
                    [
                        'question' => 'Un lot de 20 graines contient 15 graines qui germent. Quel est le taux de germination ?',
                        'choices' => [
                            [
                                'choice_text' => '75 %',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => '60 %',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '25 %',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '80 %',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'Le taux de germination est 15 ÷ 20 = 0,75, soit 75 %.',
                    ],
                    [
                        'question' => 'Un étudiant conclut qu’un engrais « augmente toujours » la croissance parce que ses plants fertilisés ont poussé de 2 cm de plus. Quelle précaution manque-t-il ?',
                        'choices' => [
                            [
                                'choice_text' => 'Il faut considérer un groupe témoin et répéter l’expérience pour vérifier que la différence est liée à l’engrais',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Il faut supprimer toute mesure de croissance',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Il suffit d’observer une seule feuille',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Il faut changer plusieurs facteurs en même temps',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'Pour attribuer un effet à l’engrais, il faut comparer avec un témoin approprié et, idéalement, répéter l’expérience. Sinon, d’autres facteurs peuvent expliquer la différence.',
                    ],
                    [
                        'question' => 'Quelle suite correspond le mieux à un cycle général d’une plante à fleurs ?',
                        'choices' => [
                            [
                                'choice_text' => 'Graine → germination → plante adulte → floraison → graines',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Fruit → pollen → racine → chloroplaste → graine',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Pollen → feuille → xylème → fruit → stomate',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Racine → pétale → noyau → graine → chloroplaste',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'Le cycle général peut être résumé ainsi : la graine germe, la plante grandit, atteint la maturité, fleurit et produit de nouvelles graines.',
                    ],
                    [
                        'question' => 'Un graphique montre que la croissance passe de 2 cm/semaine à 5 cm/semaine après augmentation de la lumière. Quelle conclusion est la plus prudente ?',
                        'choices' => [
                            [
                                'choice_text' => 'Dans les conditions de l’expérience, l’augmentation de lumière est associée à une croissance plus rapide',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'La lumière est la seule cause possible de toute croissance végétale',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'La plante n’a plus besoin d’eau',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Toutes les espèces réagissent forcément de la même façon',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'La conclusion doit rester liée au protocole réalisé. L’association observée suggère un effet de la lumière dans ces conditions, sans permettre de généraliser à tous les milieux ou espèces.',
                    ],
                    [
                        'question' => 'Une feuille de 30 cm² reçoit une intensité lumineuse de 2 unités par cm² dans un modèle simplifié. Quelle « quantité lumineuse totale » ce modèle associe-t-il à la feuille ?',
                        'choices' => [
                            [
                                'choice_text' => '60 unités',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => '15 unités',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '32 unités',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '900 unités',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'Dans ce modèle simplifié, on multiplie la surface par l’intensité : 30 × 2 = 60 unités.',
                    ],
                    [
                        'question' => 'Pourquoi une expérience botanique doit-elle maintenir constants autant de facteurs que possible ?',
                        'choices' => [
                            [
                                'choice_text' => 'Pour isoler plus clairement l’effet du facteur étudié',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Pour empêcher toute conclusion',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Pour obliger les plantes à grandir de la même façon',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Pour supprimer les variables biologiques',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'Contrôler les autres facteurs réduit les explications concurrentes. On peut ainsi relier plus solidement une différence observée au facteur que l’on fait varier.',
                    ],
                ],
            ],
        ];

        foreach ($quizzes as $quizData) {
            $settings = [
                'duration' => $quizData['duration'],
                'passing_score' => $quizData['passing_score'],
            ];

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
