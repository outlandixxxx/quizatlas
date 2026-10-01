<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class PlateTectonicsBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'plate-tectonics')->firstOrFail();

        $quizzes = [
            [
                'title' => "Dérive des continents et Pangée",
                'description' => "Comprendre les idées essentielles de la dérive des continents, la Pangée et les indices qui ont conduit à la théorie de la tectonique des plaques.",
                'duration' => 18,
                'passing_score' => 55,
                'questions' => [
                    [
                        'question' => "Quel supercontinent rassemblait une grande partie des terres émergées avant leur séparation progressive ?",
                        'explanation' => "La Pangée était un supercontinent qui réunissait la plupart des continents actuels avant leur fragmentation et leur déplacement progressif.",
                        'choices' => [
                            ['choice_text' => "La Pangée", 'is_correct' => true],
                            ['choice_text' => "La Panthalassa", 'is_correct' => false],
                            ['choice_text' => "La Téthys", 'is_correct' => false],
                            ['choice_text' => "La dorsale médio-océanique", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Au début du XXe siècle, quelle idée Alfred Wegener a-t-il défendue ?",
                        'explanation' => "Alfred Wegener a proposé la dérive des continents, selon laquelle les continents avaient autrefois été réunis puis s’étaient déplacés les uns par rapport aux autres.",
                        'choices' => [
                            ['choice_text' => "Les continents se déplacent au cours du temps", 'is_correct' => true],
                            ['choice_text' => "Les séismes sont provoqués uniquement par les marées", 'is_correct' => false],
                            ['choice_text' => "Les océans restent toujours de taille constante", 'is_correct' => false],
                            ['choice_text' => "Le noyau terrestre est entièrement liquide", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Pourquoi le rapprochement des côtes de l’Afrique et de l’Amérique du Sud a-t-il été considéré comme un indice de la dérive des continents ?",
                        'explanation' => "La forme des côtes présente une correspondance approximative qui suggère qu’elles pouvaient être autrefois réunies, même si les côtes actuelles ne s’emboîtent pas parfaitement.",
                        'choices' => [
                            ['choice_text' => "Leurs contours présentent une correspondance", 'is_correct' => true],
                            ['choice_text' => "Leurs altitudes sont identiques partout", 'is_correct' => false],
                            ['choice_text' => "Elles ont exactement le même climat aujourd’hui", 'is_correct' => false],
                            ['choice_text' => "Elles sont traversées par la même dorsale", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Deux continents aujourd’hui séparés possèdent des fossiles identiques d’une même espèce terrestre. Quelle interprétation est la plus cohérente avec la dérive des continents ?",
                        'explanation' => "Des fossiles identiques d’une espèce terrestre sur des continents aujourd’hui éloignés peuvent indiquer que ces régions étaient autrefois reliées ou beaucoup plus proches.",
                        'choices' => [
                            ['choice_text' => "Ils ont pu être réunis dans le passé", 'is_correct' => true],
                            ['choice_text' => "L’espèce a forcément traversé un océan à la nage", 'is_correct' => false],
                            ['choice_text' => "Les fossiles se sont formés uniquement grâce aux volcans", 'is_correct' => false],
                            ['choice_text' => "Les continents ont toujours été immobiles", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quel indice géologique peut renforcer l’hypothèse que deux continents étaient autrefois accolés ?",
                        'explanation' => "La continuité de roches du même âge et de structures géologiques comparables de part et d’autre d’un océan constitue un indice de réunion ancienne des continents.",
                        'choices' => [
                            ['choice_text' => "Des roches et des structures géologiques correspondantes", 'is_correct' => true],
                            ['choice_text' => "Une différence de salinité entre deux lacs", 'is_correct' => false],
                            ['choice_text' => "La présence d’un cyclone récent", 'is_correct' => false],
                            ['choice_text' => "La longueur différente des jours selon les saisons", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Wegener disposait de plusieurs indices en faveur de la dérive des continents. Quelle difficulté expliquait en partie l’accueil réservé à son idée à l’époque ?",
                        'explanation' => "Wegener avait de nombreux indices mais ne disposait pas d’un mécanisme convaincant expliquant comment les continents pouvaient se déplacer. La tectonique des plaques a ensuite apporté un cadre explicatif plus complet.",
                        'choices' => [
                            ['choice_text' => "Il ne proposait pas de mécanisme satisfaisant pour le déplacement", 'is_correct' => true],
                            ['choice_text' => "Il refusait l’existence des fossiles", 'is_correct' => false],
                            ['choice_text' => "Il pensait que les continents étaient tous sous les océans", 'is_correct' => false],
                            ['choice_text' => "Il affirmait que les séismes n’existaient pas", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Sur une carte ancienne reconstituée, l’Amérique du Sud est placée contre l’Afrique et plusieurs indices paléontologiques coïncident. Que montre surtout cette reconstitution ?",
                        'explanation' => "Une telle reconstitution illustre une disposition ancienne des continents compatible avec leur déplacement progressif depuis un ensemble continental plus uni.",
                        'choices' => [
                            ['choice_text' => "Une position passée des continents", 'is_correct' => true],
                            ['choice_text' => "La position actuelle exacte des plaques", 'is_correct' => false],
                            ['choice_text' => "La profondeur de tous les océans", 'is_correct' => false],
                            ['choice_text' => "La trajectoire quotidienne des vents", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quelle distinction est correcte entre la dérive des continents et la tectonique des plaques ?",
                        'explanation' => "La dérive des continents décrit le déplacement des continents. La tectonique des plaques fournit un modèle plus général où des plaques lithosphériques, océaniques et/ou continentales, se déplacent.",
                        'choices' => [
                            ['choice_text' => "La tectonique des plaques considère le déplacement de plaques lithosphériques, pas seulement celui des continents", 'is_correct' => true],
                            ['choice_text' => "La dérive des continents concerne uniquement les volcans", 'is_correct' => false],
                            ['choice_text' => "Les deux théories affirment que les océans sont immobiles", 'is_correct' => false],
                            ['choice_text' => "La tectonique des plaques remplace toute observation par des calculs astronomiques", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Un élève affirme : « Si deux continents ont les mêmes fossiles, ils doivent avoir exactement le même climat aujourd’hui. » Quelle correction est la plus juste ?",
                        'explanation' => "Les mêmes fossiles sur deux continents éloignés sont surtout un indice d’une histoire géologique commune ou d’une ancienne proximité. Cela ne signifie pas que leur climat actuel est identique.",
                        'choices' => [
                            ['choice_text' => "Les fossiles renseignent ici sur une histoire ancienne, pas directement sur le climat actuel", 'is_correct' => true],
                            ['choice_text' => "Les fossiles déterminent toujours la température actuelle", 'is_correct' => false],
                            ['choice_text' => "Les fossiles prouvent que les continents ne bougent jamais", 'is_correct' => false],
                            ['choice_text' => "Les fossiles n’apportent jamais d’information géologique", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Dans quel ordre simplifié les événements suivants se produisent-ils pour illustrer l’histoire de la Pangée ?",
                        'explanation' => "Dans une représentation simplifiée, les continents sont d’abord rassemblés, puis la Pangée se fragmente et les blocs continentaux s’éloignent progressivement.",
                        'choices' => [
                            ['choice_text' => "Continents réunis → fragmentation de la Pangée → déplacement progressif", 'is_correct' => true],
                            ['choice_text' => "Déplacement actuel → formation de la Pangée → apparition des continents", 'is_correct' => false],
                            ['choice_text' => "Formation de l’océan actuel → réunion des continents → immobilité", 'is_correct' => false],
                            ['choice_text' => "Fragmentation → réunion définitive → disparition de la croûte continentale", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quelle formulation décrit le mieux la mobilité des plaques ?",
                        'explanation' => "Les plaques se déplacent très lentement à l’échelle humaine, généralement de quelques centimètres par an, mais ces mouvements deviennent importants sur des millions d’années.",
                        'choices' => [
                            ['choice_text' => "Quelques centimètres par an sont suffisants pour modifier la géographie sur de très longues durées", 'is_correct' => true],
                            ['choice_text' => "Les plaques se déplacent de plusieurs kilomètres chaque jour", 'is_correct' => false],
                            ['choice_text' => "Les plaques restent fixes sauf pendant les éclipses", 'is_correct' => false],
                            ['choice_text' => "Les plaques se déplacent uniquement pendant les séismes", 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => "Plaques tectoniques et limites",
                'description' => "Identifier les plaques lithosphériques et distinguer les principales limites tectoniques à partir de leurs mouvements relatifs.",
                'duration' => 20,
                'passing_score' => 60,
                'questions' => [
                    [
                        'question' => "Une plaque tectonique est avant tout une portion rigide de quelle enveloppe terrestre ?",
                        'explanation' => "Une plaque tectonique correspond à un fragment rigide de la lithosphère qui se déplace sur une couche plus ductile de l’intérieur terrestre.",
                        'choices' => [
                            ['choice_text' => "La lithosphère", 'is_correct' => true],
                            ['choice_text' => "Le noyau interne", 'is_correct' => false],
                            ['choice_text' => "L’atmosphère", 'is_correct' => false],
                            ['choice_text' => "L’hydrosphère seule", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Sur une carte, deux plaques s’éloignent l’une de l’autre. Quel type de limite identifie-t-on ?",
                        'explanation' => "Une limite où deux plaques s’éloignent est une limite divergente. Elle est notamment associée aux dorsales océaniques et à la création de lithosphère océanique.",
                        'choices' => [
                            ['choice_text' => "Une limite divergente", 'is_correct' => true],
                            ['choice_text' => "Une limite transformante", 'is_correct' => false],
                            ['choice_text' => "Une limite convergente", 'is_correct' => false],
                            ['choice_text' => "Une limite continentale fixe", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Deux plaques se rapprochent et l’une plonge sous l’autre. Comment appelle-t-on le processus observé ?",
                        'explanation' => "Lorsque deux plaques convergent et qu’une plaque plonge sous l’autre dans le manteau, on parle de subduction.",
                        'choices' => [
                            ['choice_text' => "La subduction", 'is_correct' => true],
                            ['choice_text' => "L’accrétion", 'is_correct' => false],
                            ['choice_text' => "La divergence", 'is_correct' => false],
                            ['choice_text' => "La translation atmosphérique", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quel exemple correspond à une limite transformante ?",
                        'explanation' => "À une limite transformante, deux plaques coulissent principalement horizontalement l’une par rapport à l’autre, sans création ni destruction directe de lithosphère le long de la limite.",
                        'choices' => [
                            ['choice_text' => "Deux plaques qui coulissent latéralement", 'is_correct' => true],
                            ['choice_text' => "Deux plaques qui s’éloignent de part et d’autre d’une dorsale", 'is_correct' => false],
                            ['choice_text' => "Une plaque océanique qui plonge sous une autre", 'is_correct' => false],
                            ['choice_text' => "Deux continents qui fusionnent uniquement par érosion", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quelle association entre mouvement et limite est correcte ?",
                        'explanation' => "La divergence correspond à l’éloignement des plaques, la convergence au rapprochement et la limite transformante au coulissage horizontal relatif.",
                        'choices' => [
                            ['choice_text' => "Divergente = éloignement", 'is_correct' => true],
                            ['choice_text' => "Transformante = plongement", 'is_correct' => false],
                            ['choice_text' => "Convergente = éloignement", 'is_correct' => false],
                            ['choice_text' => "Divergente = collision continentale", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Une limite située au milieu d’un océan présente une longue chaîne volcanique sous-marine. Quel contexte tectonique est le plus probable ?",
                        'explanation' => "Une dorsale médio-océanique se forme à une limite divergente où deux plaques océaniques s’écartent et où du magma remonte pour construire une nouvelle lithosphère océanique.",
                        'choices' => [
                            ['choice_text' => "Une limite divergente au niveau d’une dorsale", 'is_correct' => true],
                            ['choice_text' => "Une collision entre deux plaques continentales", 'is_correct' => false],
                            ['choice_text' => "Une limite transformante sans ouverture", 'is_correct' => false],
                            ['choice_text' => "Une zone de subduction continentale obligatoire", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Laquelle de ces propositions décrit une limite convergente entre deux plaques océaniques ?",
                        'explanation' => "Deux plaques océaniques peuvent converger. L’une peut alors plonger sous l’autre, formant une zone de subduction souvent accompagnée de séismes et de volcanisme.",
                        'choices' => [
                            ['choice_text' => "Une plaque océanique plonge sous une autre", 'is_correct' => true],
                            ['choice_text' => "Les deux plaques s’éloignent et créent une dorsale", 'is_correct' => false],
                            ['choice_text' => "Les plaques cessent tout mouvement", 'is_correct' => false],
                            ['choice_text' => "Les deux plaques glissent uniquement sans rapprochement", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quel phénomène est particulièrement fréquent le long des limites de plaques ?",
                        'explanation' => "Les mouvements relatifs entre plaques provoquent une forte activité tectonique, notamment de nombreux séismes et, selon le contexte, du volcanisme et la formation de reliefs.",
                        'choices' => [
                            ['choice_text' => "Les séismes", 'is_correct' => true],
                            ['choice_text' => "Les aurores polaires uniquement", 'is_correct' => false],
                            ['choice_text' => "Les marées quotidiennes", 'is_correct' => false],
                            ['choice_text' => "La rotation de la Terre autour du Soleil", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Un élève observe une frontière où les deux plaques se déplacent dans des directions opposées mais restent côte à côte. Quel terme doit-il choisir ?",
                        'explanation' => "Une limite transformante correspond à un mouvement de coulissage horizontal entre plaques. Elles peuvent se déplacer en sens opposés le long d’une même frontière.",
                        'choices' => [
                            ['choice_text' => "Limite transformante", 'is_correct' => true],
                            ['choice_text' => "Dorsale divergente", 'is_correct' => false],
                            ['choice_text' => "Zone de subduction", 'is_correct' => false],
                            ['choice_text' => "Collision continentale", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quel énoncé est correct concernant les plaques tectoniques ?",
                        'explanation' => "Une plaque peut comprendre une partie continentale, une partie océanique, ou les deux. Les plaques ne correspondent donc pas simplement aux continents.",
                        'choices' => [
                            ['choice_text' => "Une plaque peut contenir à la fois des domaines continentaux et océaniques", 'is_correct' => true],
                            ['choice_text' => "Chaque continent forme nécessairement une seule plaque", 'is_correct' => false],
                            ['choice_text' => "Les plaques sont uniquement constituées de croûte continentale", 'is_correct' => false],
                            ['choice_text' => "Une plaque est toujours plus petite qu’un continent", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quel schéma verbal représente une collision continent-continent ?",
                        'explanation' => "Lorsque deux domaines continentaux convergent, aucune des deux croûtes continentales ne s’enfonce facilement. La compression peut épaissir la croûte et former une chaîne de montagnes.",
                        'choices' => [
                            ['choice_text' => "Continent →← Continent", 'is_correct' => true],
                            ['choice_text' => "Continent ←→ Continent qui s’éloignent", 'is_correct' => false],
                            ['choice_text' => "Plaque ↑ Plaque sans contact horizontal", 'is_correct' => false],
                            ['choice_text' => "Océan → Océan qui restent immobiles", 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => "Divergence et expansion des fonds océaniques",
                'description' => "Reconnaître les caractéristiques des dorsales et comprendre comment la divergence produit de la nouvelle lithosphère océanique.",
                'duration' => 20,
                'passing_score' => 55,
                'questions' => [
                    [
                        'question' => "Quel relief sous-marin marque généralement une zone où deux plaques océaniques s’écartent ?",
                        'explanation' => "Les dorsales médio-océaniques sont de longues chaînes sous-marines associées à la divergence des plaques océaniques.",
                        'choices' => [
                            ['choice_text' => "Une dorsale océanique", 'is_correct' => true],
                            ['choice_text' => "Une fosse de subduction", 'is_correct' => false],
                            ['choice_text' => "Une plaine continentale", 'is_correct' => false],
                            ['choice_text' => "Un plateau désertique", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "À une dorsale, que se passe-t-il sous l’effet de la divergence des plaques ?",
                        'explanation' => "L’écartement des plaques favorise la remontée de matière chaude et la formation de magma, qui se refroidit ensuite pour former de la nouvelle lithosphère océanique.",
                        'choices' => [
                            ['choice_text' => "Du magma remonte et contribue à former une nouvelle lithosphère océanique", 'is_correct' => true],
                            ['choice_text' => "Toute la lithosphère océanique disparaît immédiatement", 'is_correct' => false],
                            ['choice_text' => "Les deux plaques se soudent en profondeur", 'is_correct' => false],
                            ['choice_text' => "Le noyau externe se transforme en croûte", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Sur un profil de fond océanique, la dorsale est représentée comme une zone élevée et allongée. Quelle interprétation est la plus adaptée ?",
                        'explanation' => "La dorsale est un relief lié à l’accrétion océanique. Elle constitue une zone où la lithosphère océanique se forme et s’écarte progressivement de part et d’autre.",
                        'choices' => [
                            ['choice_text' => "Elle indique probablement une zone de divergence", 'is_correct' => true],
                            ['choice_text' => "Elle indique nécessairement une collision continentale", 'is_correct' => false],
                            ['choice_text' => "Elle indique une zone sans activité géologique", 'is_correct' => false],
                            ['choice_text' => "Elle correspond toujours au centre d’un continent", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Une nouvelle roche basaltique se forme au niveau d’une dorsale puis s’éloigne progressivement. Que devient cette roche ?",
                        'explanation' => "La roche formée à la dorsale est entraînée de part et d’autre par l’écartement des plaques. Elle devient donc progressivement plus éloignée de l’axe de la dorsale.",
                        'choices' => [
                            ['choice_text' => "Elle s’éloigne de l’axe de la dorsale avec la plaque", 'is_correct' => true],
                            ['choice_text' => "Elle revient toujours vers la dorsale", 'is_correct' => false],
                            ['choice_text' => "Elle reste définitivement à l’endroit où elle s’est formée", 'is_correct' => false],
                            ['choice_text' => "Elle remonte dans l’atmosphère", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Lequel de ces indices est compatible avec une expansion des fonds océaniques ?",
                        'explanation' => "L’existence de bandes magnétiques symétriques de part et d’autre des dorsales est un indice classique de la formation puis de l’éloignement progressif de la croûte océanique.",
                        'choices' => [
                            ['choice_text' => "Des bandes magnétiques disposées de façon symétrique autour d’une dorsale", 'is_correct' => true],
                            ['choice_text' => "La même profondeur pour tous les océans", 'is_correct' => false],
                            ['choice_text' => "L’absence totale de roches volcaniques sous-marines", 'is_correct' => false],
                            ['choice_text' => "La disparition de toutes les fosses océaniques", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Pourquoi l’âge des roches du plancher océanique augmente-t-il généralement lorsqu’on s’éloigne de la dorsale ?",
                        'explanation' => "Les roches se forment au niveau de la dorsale puis sont transportées vers l’extérieur par l’expansion des fonds océaniques. Les roches plus éloignées ont donc généralement été formées plus tôt.",
                        'choices' => [
                            ['choice_text' => "Parce que le plancher se crée à la dorsale puis s’éloigne", 'is_correct' => true],
                            ['choice_text' => "Parce que l’eau vieillissante fabrique de nouvelles roches", 'is_correct' => false],
                            ['choice_text' => "Parce que les continents rajeunissent les océans", 'is_correct' => false],
                            ['choice_text' => "Parce que le Soleil augmente l’âge des roches", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quel processus équilibre en partie la création de lithosphère au niveau des dorsales ?",
                        'explanation' => "La lithosphère océanique créée aux dorsales est en partie recyclée dans les zones de subduction, ce qui permet de maintenir un bilan global approximativement équilibré sur les longues durées.",
                        'choices' => [
                            ['choice_text' => "La subduction de lithosphère océanique", 'is_correct' => true],
                            ['choice_text' => "L’évaporation des océans", 'is_correct' => false],
                            ['choice_text' => "La fusion de tous les continents", 'is_correct' => false],
                            ['choice_text' => "La formation quotidienne des marées", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Un capteur GPS indique que deux stations situées de part et d’autre d’une dorsale s’éloignent de 6 cm par an au total. Que peut-on en déduire à ce niveau de précision ?",
                        'explanation' => "La distance entre les deux stations augmente de 6 cm par an, ce qui mesure directement l’ouverture relative entre les deux côtés de la dorsale.",
                        'choices' => [
                            ['choice_text' => "L’écartement relatif entre les deux côtés est d’environ 6 cm par an", 'is_correct' => true],
                            ['choice_text' => "Chaque station se déplace nécessairement de 6 cm vers le centre", 'is_correct' => false],
                            ['choice_text' => "La dorsale se déplace de 6 kilomètres par an", 'is_correct' => false],
                            ['choice_text' => "Le mouvement est uniquement vertical", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Un schéma montre deux plaques qui s’écartent sous un océan et du magma qui monte entre elles. Quel terme décrit la formation de la nouvelle croûte océanique ?",
                        'explanation' => "La création de nouvelle lithosphère océanique au niveau d’une dorsale est liée à l’accrétion océanique, alimentée par la remontée et le refroidissement du magma.",
                        'choices' => [
                            ['choice_text' => "Accrétion océanique", 'is_correct' => true],
                            ['choice_text' => "Collision continentale", 'is_correct' => false],
                            ['choice_text' => "Érosion fluviatile", 'is_correct' => false],
                            ['choice_text' => "Compaction sédimentaire", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quelle phrase évite une confusion fréquente à propos des dorsales ?",
                        'explanation' => "Une dorsale n’est pas simplement une chaîne volcanique posée au hasard : elle correspond à une limite divergente où se produit la création de lithosphère océanique.",
                        'choices' => [
                            ['choice_text' => "Une dorsale est associée à une limite divergente", 'is_correct' => true],
                            ['choice_text' => "Une dorsale correspond toujours à une limite transformante", 'is_correct' => false],
                            ['choice_text' => "Une dorsale est forcément située au milieu d’un continent", 'is_correct' => false],
                            ['choice_text' => "Une dorsale détruit toute la lithosphère qui l’entoure", 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => "Convergence, subduction et formation des montagnes",
                'description' => "Comprendre les principaux effets de la convergence des plaques : subduction, fosses océaniques, volcanisme et collision continentale.",
                'duration' => 22,
                'passing_score' => 60,
                'questions' => [
                    [
                        'question' => "Pourquoi une plaque océanique peut-elle s’enfoncer sous une autre plaque au niveau d’une zone de subduction ?",
                        'explanation' => "La lithosphère océanique ancienne et refroidie est en moyenne plus dense que les matériaux chauds situés dessous. Elle peut donc s’enfoncer dans le manteau au niveau d’une convergence.",
                        'choices' => [
                            ['choice_text' => "Parce que la lithosphère océanique ancienne et refroidie est relativement dense", 'is_correct' => true],
                            ['choice_text' => "Parce que la croûte continentale est toujours plus dense", 'is_correct' => false],
                            ['choice_text' => "Parce que les océans poussent verticalement les plaques", 'is_correct' => false],
                            ['choice_text' => "Parce que les marées tirent la plaque vers le noyau", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quel relief se trouve fréquemment au voisinage d’une zone de subduction océanique ?",
                        'explanation' => "La flexion de la plaque océanique et son plongement peuvent créer une fosse océanique profonde le long de la zone de subduction.",
                        'choices' => [
                            ['choice_text' => "Une fosse océanique", 'is_correct' => true],
                            ['choice_text' => "Une dorsale divergente", 'is_correct' => false],
                            ['choice_text' => "Une vallée glaciaire continentale uniquement", 'is_correct' => false],
                            ['choice_text' => "Une plaine abyssale parfaitement plate", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Que peut provoquer la convergence entre une plaque océanique et une plaque continentale ?",
                        'explanation' => "Dans ce contexte, la plaque océanique peut subducter sous la plaque continentale. Cette convergence est souvent associée à des séismes, une fosse et du volcanisme sur le bord continental.",
                        'choices' => [
                            ['choice_text' => "Subduction de la plaque océanique et volcanisme sur le bord continental", 'is_correct' => true],
                            ['choice_text' => "Ouverture obligatoire d’un nouvel océan au bord du continent", 'is_correct' => false],
                            ['choice_text' => "Absence de séismes", 'is_correct' => false],
                            ['choice_text' => "Disparition instantanée de toute croûte continentale", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Deux plaques continentales convergent. Quel résultat est typique de cette situation ?",
                        'explanation' => "La collision de deux domaines continentaux peut comprimer et épaissir la croûte, entraînant la formation d’une chaîne de montagnes.",
                        'choices' => [
                            ['choice_text' => "La formation d’une chaîne de montagnes", 'is_correct' => true],
                            ['choice_text' => "Une dorsale océanique au centre du continent", 'is_correct' => false],
                            ['choice_text' => "La création automatique d’une fosse océanique entre les continents", 'is_correct' => false],
                            ['choice_text' => "La séparation immédiate des deux continents", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Dans une coupe géologique, une plaque océanique est dessinée en pente sous une plaque continentale. Quelle structure cela représente-t-il ?",
                        'explanation' => "Une plaque océanique qui plonge sous une plaque continentale représente une zone de subduction, contexte classique de convergence entre une plaque océanique et une plaque continentale.",
                        'choices' => [
                            ['choice_text' => "Une zone de subduction", 'is_correct' => true],
                            ['choice_text' => "Une limite transformante", 'is_correct' => false],
                            ['choice_text' => "Une dorsale", 'is_correct' => false],
                            ['choice_text' => "Une plaine alluviale", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quel lien cause-effet est le plus juste dans une zone de convergence avec subduction ?",
                        'explanation' => "Le déplacement convergent favorise l’accumulation de contraintes et les ruptures dans les roches, tandis que les processus liés au plongement d’une plaque contribuent à produire du magma et du volcanisme dans certains contextes.",
                        'choices' => [
                            ['choice_text' => "Convergence → contraintes tectoniques → nombreux séismes possibles", 'is_correct' => true],
                            ['choice_text' => "Convergence → disparition de toute contrainte → absence de séismes", 'is_correct' => false],
                            ['choice_text' => "Subduction → arrêt complet du volcanisme dans tous les cas", 'is_correct' => false],
                            ['choice_text' => "Convergence → formation obligatoire d’une dorsale", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quel énoncé est correct à propos des chaînes de montagnes formées par collision continentale ?",
                        'explanation' => "La convergence de deux continents comprime la croûte. Celle-ci peut s’épaissir et se déformer, produisant des reliefs élevés sur de longues périodes.",
                        'choices' => [
                            ['choice_text' => "La compression peut épaissir la croûte et élever le relief", 'is_correct' => true],
                            ['choice_text' => "Les montagnes se forment uniquement par érosion", 'is_correct' => false],
                            ['choice_text' => "La collision continentale éloigne nécessairement les plaques", 'is_correct' => false],
                            ['choice_text' => "Une chaîne de collision se forme uniquement au milieu d’un océan", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Un volcan est aligné avec une fosse océanique et une zone où une plaque océanique plonge sous une autre. Quel contexte tectonique cette association suggère-t-elle ?",
                        'explanation' => "L’association fosse + subduction + arc volcanique est caractéristique de certaines zones de convergence, notamment entre deux plaques océaniques.",
                        'choices' => [
                            ['choice_text' => "Une zone de subduction entre plaques convergentes", 'is_correct' => true],
                            ['choice_text' => "Une limite divergente sans activité volcanique", 'is_correct' => false],
                            ['choice_text' => "Une limite transformante continentale uniquement", 'is_correct' => false],
                            ['choice_text' => "Une zone stable au centre d’une plaque", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Pourquoi la convergence de deux continents ne donne-t-elle pas généralement une subduction aussi simple que celle d’une plaque océanique ?",
                        'explanation' => "La croûte continentale est relativement légère et épaisse. Deux blocs continentaux ont donc tendance à se comprimer et à s’épaissir plutôt qu’à plonger facilement l’un sous l’autre.",
                        'choices' => [
                            ['choice_text' => "La croûte continentale est trop peu dense pour s’enfoncer facilement", 'is_correct' => true],
                            ['choice_text' => "Les continents ne peuvent jamais se toucher", 'is_correct' => false],
                            ['choice_text' => "Le manteau est totalement rigide sous les continents", 'is_correct' => false],
                            ['choice_text' => "Les séismes empêchent toujours toute collision", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quel ensemble décrit le mieux une marge continentale située au-dessus d’une subduction océanique ?",
                        'explanation' => "On peut y trouver une fosse au large, une zone de séismes liée au plongement de la plaque et un arc volcanique ou une chaîne volcanique sur le continent.",
                        'choices' => [
                            ['choice_text' => "Fosse + séismes + volcanisme possible", 'is_correct' => true],
                            ['choice_text' => "Dorsale + éloignement des plaques + absence de séismes", 'is_correct' => false],
                            ['choice_text' => "Plage + marée + absence de relief", 'is_correct' => false],
                            ['choice_text' => "Glacier + faille normale obligatoire + courants marins", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Une chaîne de montagnes récente présente de nombreuses roches déformées et plissées. Quelle cause tectonique est la plus probable ?",
                        'explanation' => "Le plissement et la déformation des roches sont compatibles avec des forces de compression liées à la convergence de plaques.",
                        'choices' => [
                            ['choice_text' => "Une convergence et une compression tectoniques", 'is_correct' => true],
                            ['choice_text' => "Une divergence sans contrainte", 'is_correct' => false],
                            ['choice_text' => "L’action isolée des marées", 'is_correct' => false],
                            ['choice_text' => "La dissolution du sel par la pluie uniquement", 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => "Failles transformantes et séismes",
                'description' => "Relier les mouvements de coulissage aux failles transformantes et comprendre pourquoi les limites de plaques sont propices aux séismes.",
                'duration' => 18,
                'passing_score' => 55,
                'questions' => [
                    [
                        'question' => "Dans une faille transformante, quel mouvement domine entre les deux blocs ?",
                        'explanation' => "Le mouvement dominant est horizontal : les deux blocs lithosphériques coulissent l’un par rapport à l’autre le long de la faille.",
                        'choices' => [
                            ['choice_text' => "Un coulissage horizontal", 'is_correct' => true],
                            ['choice_text' => "Un éloignement vertical permanent", 'is_correct' => false],
                            ['choice_text' => "Un plongeon obligatoire d’une plaque sous l’autre", 'is_correct' => false],
                            ['choice_text' => "Une fusion complète des deux blocs", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Pourquoi une faille transformante peut-elle produire des séismes ?",
                        'explanation' => "Le frottement peut empêcher un coulissage continu. Les contraintes s’accumulent alors jusqu’à une rupture ou un déplacement brutal, libérant de l’énergie sous forme d’ondes sismiques.",
                        'choices' => [
                            ['choice_text' => "Les contraintes peuvent s’accumuler puis être libérées brutalement", 'is_correct' => true],
                            ['choice_text' => "Les plaques se vaporisent lors de chaque mouvement", 'is_correct' => false],
                            ['choice_text' => "Les marées créent directement toutes les failles", 'is_correct' => false],
                            ['choice_text' => "Le magma remonte nécessairement à chaque glissement", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Un GPS montre que deux repères situés de part et d’autre d’une faille se déplacent parallèlement dans des directions opposées. Quelle interprétation convient ?",
                        'explanation' => "Des déplacements parallèles et opposés de part et d’autre d’une faille sont compatibles avec un coulissage horizontal, caractéristique d’une faille transformante.",
                        'choices' => [
                            ['choice_text' => "Un mouvement transformant", 'is_correct' => true],
                            ['choice_text' => "Une subduction", 'is_correct' => false],
                            ['choice_text' => "Une collision continentale", 'is_correct' => false],
                            ['choice_text' => "Une expansion verticale de l’atmosphère", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quelle différence distingue principalement une limite transformante d’une limite divergente ?",
                        'explanation' => "À une limite transformante, les plaques coulissent horizontalement. À une limite divergente, elles s’éloignent et peuvent permettre la formation de nouvelle lithosphère.",
                        'choices' => [
                            ['choice_text' => "Transformante = coulissage ; divergente = éloignement", 'is_correct' => true],
                            ['choice_text' => "Transformante = plongement ; divergente = collision", 'is_correct' => false],
                            ['choice_text' => "Transformante = volcanisme obligatoire ; divergente = aucun magma", 'is_correct' => false],
                            ['choice_text' => "Transformante = absence de mouvement ; divergente = immobilité", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Lors d’un séisme, que mesure principalement la magnitude ?",
                        'explanation' => "La magnitude caractérise l’énergie libérée par le séisme à sa source, indépendamment du lieu précis où l’on se trouve lorsqu’elle est correctement calculée.",
                        'choices' => [
                            ['choice_text' => "L’énergie libérée à la source du séisme", 'is_correct' => true],
                            ['choice_text' => "Uniquement le nombre de bâtiments détruits", 'is_correct' => false],
                            ['choice_text' => "La durée exacte d’une éruption volcanique", 'is_correct' => false],
                            ['choice_text' => "La profondeur moyenne des océans", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Un séisme se produit lorsque des roches se rompent brutalement après une longue accumulation de contraintes. Quelle relation de cause à effet est correcte ?",
                        'explanation' => "Les contraintes tectoniques peuvent s’accumuler au niveau d’une faille. Quand la résistance est dépassée, une rupture ou un glissement brutal libère de l’énergie et produit des ondes sismiques.",
                        'choices' => [
                            ['choice_text' => "Accumulation de contraintes → rupture/glissement → ondes sismiques", 'is_correct' => true],
                            ['choice_text' => "Refroidissement de l’air → rupture → marée", 'is_correct' => false],
                            ['choice_text' => "Pluie → arrêt des plaques → séisme", 'is_correct' => false],
                            ['choice_text' => "Marée → fusion du noyau → rupture", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Un élève dit : « Une limite transformante crée toujours une nouvelle croûte. » Quelle correction faut-il apporter ?",
                        'explanation' => "Les limites transformantes correspondent principalement au coulissage latéral. Elles ne sont pas des zones où la croûte est créée comme à une dorsale.",
                        'choices' => [
                            ['choice_text' => "Elle permet surtout le coulissage des plaques sans création directe de croûte le long de la faille", 'is_correct' => true],
                            ['choice_text' => "Elle crée toujours un nouvel océan", 'is_correct' => false],
                            ['choice_text' => "Elle transforme toute croûte en magma", 'is_correct' => false],
                            ['choice_text' => "Elle correspond obligatoirement à une chaîne de montagnes", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Sur une carte mondiale, une concentration de séismes suit une longue frontière entre deux plaques qui coulissent. Que peut-on en déduire ?",
                        'explanation' => "Une forte concentration de séismes le long d’une frontière de plaques coulissante est cohérente avec une limite transformante active.",
                        'choices' => [
                            ['choice_text' => "La frontière correspond probablement à une faille transformante active", 'is_correct' => true],
                            ['choice_text' => "La frontière est nécessairement une dorsale", 'is_correct' => false],
                            ['choice_text' => "Il s’agit forcément du centre d’un continent stable", 'is_correct' => false],
                            ['choice_text' => "Les séismes prouvent que les plaques sont immobiles", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Pourquoi la localisation des séismes aide-t-elle à cartographier les limites de plaques ?",
                        'explanation' => "Les séismes se concentrent souvent là où les plaques interagissent. Leur répartition forme donc des bandes qui permettent de repérer de nombreuses frontières de plaques.",
                        'choices' => [
                            ['choice_text' => "Parce que les séismes sont fréquents dans les zones de déformation entre plaques", 'is_correct' => true],
                            ['choice_text' => "Parce que chaque séisme indique exactement le centre d’un continent", 'is_correct' => false],
                            ['choice_text' => "Parce que les séismes ne se produisent qu’au fond des océans", 'is_correct' => false],
                            ['choice_text' => "Parce que la magnitude donne directement la frontière administrative", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Deux plaques se déplacent horizontalement dans le même sens, mais l’une avance plus vite que l’autre le long d’une frontière. Quelle situation tectonique peut en résulter ?",
                        'explanation' => "Même si les deux plaques se déplacent globalement dans le même sens, une différence de vitesse peut produire un mouvement relatif de coulissage le long d’une frontière.",
                        'choices' => [
                            ['choice_text' => "Un mouvement transformant relatif", 'is_correct' => true],
                            ['choice_text' => "Une divergence nécessairement perpendiculaire", 'is_correct' => false],
                            ['choice_text' => "Une fusion immédiate des plaques", 'is_correct' => false],
                            ['choice_text' => "Une subduction obligatoire", 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => "Volcanisme et tectonique des plaques",
                'description' => "Relier les principaux contextes volcaniques aux mouvements des plaques et distinguer volcanisme de divergence et volcanisme de subduction.",
                'duration' => 20,
                'passing_score' => 55,
                'questions' => [
                    [
                        'question' => "Quel contexte tectonique est directement associé au volcanisme des dorsales médio-océaniques ?",
                        'explanation' => "Aux dorsales, la divergence des plaques permet la remontée de magma et la formation de nouvelle lithosphère océanique.",
                        'choices' => [
                            ['choice_text' => "La divergence des plaques", 'is_correct' => true],
                            ['choice_text' => "La collision continentale seule", 'is_correct' => false],
                            ['choice_text' => "Le coulissage transformant seul", 'is_correct' => false],
                            ['choice_text' => "L’absence complète de mouvement", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Dans une zone de subduction, où trouve-t-on généralement le volcanisme par rapport à la fosse océanique ?",
                        'explanation' => "Le volcanisme se situe généralement en retrait de la fosse, sur la plaque située au-dessus de la plaque plongeante, formant notamment un arc volcanique.",
                        'choices' => [
                            ['choice_text' => "Sur la plaque située au-dessus de la subduction, en arrière de la fosse", 'is_correct' => true],
                            ['choice_text' => "Toujours exactement au milieu de la fosse", 'is_correct' => false],
                            ['choice_text' => "Uniquement à l’intérieur de la plaque plongeante", 'is_correct' => false],
                            ['choice_text' => "Toujours au centre du continent le plus éloigné", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Un alignement de volcans est observé sur une île située au-dessus d’une zone où une plaque océanique plonge. Quelle explication est cohérente ?",
                        'explanation' => "La subduction peut favoriser la production de magma dans le manteau situé au-dessus de la plaque plongeante, puis son ascension alimente un arc volcanique.",
                        'choices' => [
                            ['choice_text' => "Le plongement de la plaque contribue à des processus qui génèrent du magma", 'is_correct' => true],
                            ['choice_text' => "La plaque plongeante bloque toute remontée de magma", 'is_correct' => false],
                            ['choice_text' => "Les volcans sont créés uniquement par les marées", 'is_correct' => false],
                            ['choice_text' => "Le volcanisme prouve que les plaques sont immobiles", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quel énoncé compare correctement le volcanisme d’une dorsale et celui d’une zone de subduction ?",
                        'explanation' => "Dans les deux contextes, du magma peut atteindre la surface, mais les mécanismes tectoniques diffèrent : divergence à la dorsale et convergence avec subduction dans l’autre cas.",
                        'choices' => [
                            ['choice_text' => "Dorsale = divergence ; subduction = convergence", 'is_correct' => true],
                            ['choice_text' => "Dorsale = collision ; subduction = divergence", 'is_correct' => false],
                            ['choice_text' => "Les deux sont uniquement des limites transformantes", 'is_correct' => false],
                            ['choice_text' => "Aucun volcanisme n’est lié aux mouvements de plaques", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Pourquoi les séismes et les volcans sont-ils souvent concentrés dans certaines régions du globe ?",
                        'explanation' => "Les interactions entre plaques concentrent la déformation, la fracturation et, dans certains contextes, la production et la remontée de magma. Cela explique de nombreuses zones de forte activité tectonique.",
                        'choices' => [
                            ['choice_text' => "Parce que les limites de plaques concentrent une partie de l’activité tectonique", 'is_correct' => true],
                            ['choice_text' => "Parce que les continents produisent tous la même quantité de magma", 'is_correct' => false],
                            ['choice_text' => "Parce que les volcans suivent toujours les frontières politiques", 'is_correct' => false],
                            ['choice_text' => "Parce que les séismes empêchent l’eau de circuler", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Un schéma montre une dorsale au milieu d’un océan et des volcans disposés autour de l’axe de la dorsale. Quelle interprétation est correcte ?",
                        'explanation' => "Le volcanisme associé à une dorsale est lié à l’ascension du magma dans un contexte de divergence et à la création de lithosphère océanique.",
                        'choices' => [
                            ['choice_text' => "Le volcanisme accompagne la création de nouvelle lithosphère", 'is_correct' => true],
                            ['choice_text' => "Les volcans indiquent une collision de deux continents", 'is_correct' => false],
                            ['choice_text' => "Les volcans prouvent l’absence de mouvement des plaques", 'is_correct' => false],
                            ['choice_text' => "La dorsale correspond à une zone de subduction", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quel exemple correspond à un arc volcanique associé à la convergence de plaques ?",
                        'explanation' => "Un arc volcanique est une chaîne de volcans qui peut se développer sur une plaque située au-dessus d’une zone de subduction.",
                        'choices' => [
                            ['choice_text' => "Une chaîne de volcans au-dessus d’une zone de subduction", 'is_correct' => true],
                            ['choice_text' => "Une ligne de dunes formée par le vent", 'is_correct' => false],
                            ['choice_text' => "Une série de récifs coralliens sans activité tectonique", 'is_correct' => false],
                            ['choice_text' => "Une vallée fluviale formée par l’érosion", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Un élève conclut : « Tous les volcans sont forcément situés sur une limite de plaques. » Quelle précision est correcte ?",
                        'explanation' => "De nombreux volcans sont liés aux limites de plaques, mais certains se trouvent à l’intérieur des plaques, par exemple dans des régions associées à des points chauds.",
                        'choices' => [
                            ['choice_text' => "Certains volcans peuvent aussi se trouver à l’intérieur d’une plaque", 'is_correct' => true],
                            ['choice_text' => "Tous les volcans sont uniquement sous les océans", 'is_correct' => false],
                            ['choice_text' => "Aucun volcan n’est lié aux plaques", 'is_correct' => false],
                            ['choice_text' => "Les volcans n’ont aucun lien avec le magma", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quel phénomène accompagne souvent un volcanisme de subduction ?",
                        'explanation' => "Les zones de subduction sont très actives sismiquement, car le contact et le plongement des plaques génèrent de fortes contraintes et des ruptures en profondeur.",
                        'choices' => [
                            ['choice_text' => "Une forte activité sismique", 'is_correct' => true],
                            ['choice_text' => "Une absence totale de déformation", 'is_correct' => false],
                            ['choice_text' => "Une disparition complète des roches", 'is_correct' => false],
                            ['choice_text' => "Une marée permanente", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Dans un modèle simplifié, quelle suite relie une dorsale à la création de lithosphère océanique ?",
                        'explanation' => "À la dorsale, les plaques divergent, le magma remonte, puis il se refroidit et forme de la nouvelle lithosphère océanique qui s’écarte de l’axe.",
                        'choices' => [
                            ['choice_text' => "Divergence → remontée du magma → refroidissement → nouvelle lithosphère", 'is_correct' => true],
                            ['choice_text' => "Convergence → disparition de toute roche → nouvelle lithosphère", 'is_correct' => false],
                            ['choice_text' => "Transformante → fusion de la croûte → dorsale", 'is_correct' => false],
                            ['choice_text' => "Érosion → subduction → création de croûte", 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => "Lire une carte des plaques",
                'description' => "S’entraîner à interpréter simplement une carte tectonique, la répartition des séismes, des volcans et les directions de déplacement des plaques.",
                'duration' => 19,
                'passing_score' => 50,
                'questions' => [
                    [
                        'question' => "Sur une carte mondiale, une longue bande de séismes traverse un océan et suit une dorsale. Quelle relation est la plus probable ?",
                        'explanation' => "Les dorsales sont des limites divergentes actives où les mouvements des plaques peuvent produire de nombreux séismes peu profonds.",
                        'choices' => [
                            ['choice_text' => "La bande de séismes suit une limite divergente active", 'is_correct' => true],
                            ['choice_text' => "La bande indique toujours le centre exact d’un continent", 'is_correct' => false],
                            ['choice_text' => "La dorsale est obligatoirement une zone sans mouvement", 'is_correct' => false],
                            ['choice_text' => "Les séismes sont causés uniquement par les marées", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Une carte montre une frontière où les flèches de deux plaques pointent l’une vers l’autre. Quel type de limite faut-il envisager en premier ?",
                        'explanation' => "Des flèches dirigées l’une vers l’autre indiquent un mouvement convergent. Il peut correspondre à une subduction ou à une collision selon la nature des plaques.",
                        'choices' => [
                            ['choice_text' => "Une limite convergente", 'is_correct' => true],
                            ['choice_text' => "Une limite divergente", 'is_correct' => false],
                            ['choice_text' => "Une limite transformante uniquement", 'is_correct' => false],
                            ['choice_text' => "Une frontière sans mouvement relatif", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Sur une carte, une plaque est représentée par une flèche vers l’est et la plaque voisine par une flèche vers l’ouest, la frontière étant parallèle aux flèches. Quel mouvement relatif évoque ce schéma ?",
                        'explanation' => "Des mouvements parallèles à la frontière et de sens opposés sont compatibles avec un coulissage transformant.",
                        'choices' => [
                            ['choice_text' => "Un coulissage transformant", 'is_correct' => true],
                            ['choice_text' => "Une divergence perpendiculaire à la frontière", 'is_correct' => false],
                            ['choice_text' => "Une subduction obligatoire", 'is_correct' => false],
                            ['choice_text' => "Une collision continentale certaine", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Une carte indique une fosse océanique longeant une marge continentale et de nombreux volcans sur le continent. Quel contexte faut-il privilégier ?",
                        'explanation' => "L’association d’une fosse, d’une marge continentale volcanique et d’une forte sismicité est typique d’une subduction d’une plaque océanique sous une plaque continentale.",
                        'choices' => [
                            ['choice_text' => "Subduction océan-continent", 'is_correct' => true],
                            ['choice_text' => "Divergence au milieu d’un continent", 'is_correct' => false],
                            ['choice_text' => "Limite transformante sans rapprochement", 'is_correct' => false],
                            ['choice_text' => "Collision entre deux plaques océaniques sans subduction", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Sur une carte simplifiée, les séismes dessinent une ligne presque continue le long d’une frontière, tandis que l’intérieur de chaque plaque est relativement calme. Quelle idée générale cela illustre-t-il ?",
                        'explanation' => "La concentration des séismes près des frontières montre que les interactions entre plaques sont des zones privilégiées de déformation tectonique.",
                        'choices' => [
                            ['choice_text' => "Les frontières de plaques concentrent une grande partie de l’activité tectonique", 'is_correct' => true],
                            ['choice_text' => "Tous les séismes se produisent au centre des continents", 'is_correct' => false],
                            ['choice_text' => "Les plaques sont immobiles", 'is_correct' => false],
                            ['choice_text' => "Les séismes sont uniquement météorologiques", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Un profil sous-marin montre successivement : continent, pente, fosse profonde, puis plaque océanique plongeante. Quelle structure reconnaît-on ?",
                        'explanation' => "La présence d’une fosse puis d’une plaque océanique qui plonge sous une autre correspond à une marge active de subduction.",
                        'choices' => [
                            ['choice_text' => "Une zone de subduction", 'is_correct' => true],
                            ['choice_text' => "Une dorsale océanique", 'is_correct' => false],
                            ['choice_text' => "Une faille transformante purement horizontale", 'is_correct' => false],
                            ['choice_text' => "Une plateforme continentale passive", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Une carte montre deux plaques qui s’écartent de part et d’autre d’une ligne centrale et des roches océaniques jeunes près de cette ligne. Quelle conclusion est la plus directe ?",
                        'explanation' => "Des plaques qui s’écartent et des roches très jeunes près de la ligne centrale sont des indices de création de lithosphère au niveau d’une dorsale.",
                        'choices' => [
                            ['choice_text' => "La ligne correspond probablement à une dorsale", 'is_correct' => true],
                            ['choice_text' => "La ligne correspond nécessairement à une chaîne de montagnes continentale", 'is_correct' => false],
                            ['choice_text' => "Les plaques convergent au centre", 'is_correct' => false],
                            ['choice_text' => "Les roches jeunes prouvent l’absence de volcanisme", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Un diagramme donne les vitesses suivantes : plaque A = 4 cm/an vers l’est, plaque B = 4 cm/an vers l’ouest. Leur frontière est verticale. Quelle situation est illustrée ?",
                        'explanation' => "Les deux plaques se déplacent en sens opposés, perpendiculairement à une frontière verticale : elles s’éloignent l’une de l’autre, ce qui correspond à une divergence.",
                        'choices' => [
                            ['choice_text' => "Une limite divergente", 'is_correct' => true],
                            ['choice_text' => "Une limite transformante", 'is_correct' => false],
                            ['choice_text' => "Une zone de subduction", 'is_correct' => false],
                            ['choice_text' => "Une collision continentale", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Un schéma montre deux continents qui se rapprochent sans océan entre eux. Quelle évolution tectonique est possible à long terme ?",
                        'explanation' => "La convergence peut conduire à la collision de deux domaines continentaux et à l’épaississement de la croûte, avec formation d’une chaîne de montagnes.",
                        'choices' => [
                            ['choice_text' => "Une collision continentale avec formation de reliefs", 'is_correct' => true],
                            ['choice_text' => "Une dorsale qui sépare les continents sans divergence", 'is_correct' => false],
                            ['choice_text' => "Une subduction automatique des deux continents à la même vitesse", 'is_correct' => false],
                            ['choice_text' => "Une disparition complète de la lithosphère continentale", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Pourquoi les cartes de plaques indiquent-elles des flèches de déplacement ?",
                        'explanation' => "Les flèches montrent la direction du mouvement relatif des plaques et aident à déterminer si une frontière est divergente, convergente ou transformante.",
                        'choices' => [
                            ['choice_text' => "Pour représenter la direction et le sens du mouvement des plaques", 'is_correct' => true],
                            ['choice_text' => "Pour indiquer la direction des vents dominants uniquement", 'is_correct' => false],
                            ['choice_text' => "Pour mesurer directement la profondeur des océans", 'is_correct' => false],
                            ['choice_text' => "Pour localiser les continents au Moyen Âge", 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => "Vitesses de déplacement des plaques",
                'description' => "Lire et utiliser des vitesses simples de déplacement des plaques à l’échelle humaine et géologique.",
                'duration' => 17,
                'passing_score' => 50,
                'questions' => [
                    [
                        'question' => "Une plaque se déplace de 5 cm par an. Quelle distance parcourt-elle en 20 ans si sa vitesse reste constante ?",
                        'explanation' => "On multiplie 5 cm/an par 20 ans : 5 × 20 = 100 cm, soit 1 mètre.",
                        'choices' => [
                            ['choice_text' => "1 mètre", 'is_correct' => true],
                            ['choice_text' => "10 mètres", 'is_correct' => false],
                            ['choice_text' => "20 mètres", 'is_correct' => false],
                            ['choice_text' => "5 mètres", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Une plaque avance de 3 cm par an. En 50 ans, quelle distance relative parcourt-elle ?",
                        'explanation' => "3 cm/an × 50 ans = 150 cm, soit 1,5 mètre. Même une faible vitesse produit donc un déplacement mesurable sur plusieurs décennies.",
                        'choices' => [
                            ['choice_text' => "1,5 mètre", 'is_correct' => true],
                            ['choice_text' => "15 mètres", 'is_correct' => false],
                            ['choice_text' => "0,15 mètre", 'is_correct' => false],
                            ['choice_text' => "150 mètres", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Pourquoi une vitesse de quelques centimètres par an est-elle géologiquement significative ?",
                        'explanation' => "Quelques centimètres par an accumulés pendant des millions d’années représentent des centaines ou milliers de kilomètres, ce qui peut modifier profondément la position des continents et des océans.",
                        'choices' => [
                            ['choice_text' => "Parce qu’un petit déplacement annuel s’accumule sur de très longues durées", 'is_correct' => true],
                            ['choice_text' => "Parce que la plaque accélère forcément chaque année", 'is_correct' => false],
                            ['choice_text' => "Parce que la croûte se déplace de plusieurs kilomètres chaque jour", 'is_correct' => false],
                            ['choice_text' => "Parce que la vitesse tectonique n’est mesurable qu’en heures", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Une station GPS mesure un déplacement de 20 cm en 4 ans. Quelle vitesse moyenne cela représente-t-il ?",
                        'explanation' => "La vitesse moyenne est 20 cm ÷ 4 ans = 5 cm/an.",
                        'choices' => [
                            ['choice_text' => "5 cm/an", 'is_correct' => true],
                            ['choice_text' => "4 cm/an", 'is_correct' => false],
                            ['choice_text' => "20 cm/an", 'is_correct' => false],
                            ['choice_text' => "80 cm/an", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Une plaque A se déplace à 2 cm/an et une plaque B à 4 cm/an dans la même direction. Quelle est leur différence de vitesse ?",
                        'explanation' => "La différence entre les deux vitesses est de 4 − 2 = 2 cm/an. Cette valeur peut représenter leur mouvement relatif si leurs trajectoires sont parallèles dans le même sens.",
                        'choices' => [
                            ['choice_text' => "2 cm/an", 'is_correct' => true],
                            ['choice_text' => "6 cm/an", 'is_correct' => false],
                            ['choice_text' => "8 cm/an", 'is_correct' => false],
                            ['choice_text' => "1 cm/an", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Deux repères s’éloignent de 8 cm par an au total de part et d’autre d’une dorsale. Que signifie directement cette valeur ?",
                        'explanation' => "Elle décrit la vitesse d’ouverture relative entre les deux repères. La valeur de 8 cm/an ne signifie pas que chacun se déplace obligatoirement de 8 cm/an.",
                        'choices' => [
                            ['choice_text' => "La distance entre les deux repères augmente de 8 cm/an", 'is_correct' => true],
                            ['choice_text' => "Chaque repère avance nécessairement de 8 cm vers l’est", 'is_correct' => false],
                            ['choice_text' => "La dorsale monte de 8 cm/an", 'is_correct' => false],
                            ['choice_text' => "Le fond océanique descend de 8 cm/an", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Un étudiant pense qu’une plaque qui se déplace de 6 cm/an parcourra 600 km en 100 ans. Quelle correction faut-il faire ?",
                        'explanation' => "6 cm/an × 100 ans = 600 cm, soit seulement 6 mètres. À l’échelle humaine, le déplacement reste faible malgré son importance sur les temps géologiques.",
                        'choices' => [
                            ['choice_text' => "Elle parcourt 6 mètres en 100 ans", 'is_correct' => true],
                            ['choice_text' => "Elle parcourt 600 kilomètres", 'is_correct' => false],
                            ['choice_text' => "Elle parcourt 60 kilomètres", 'is_correct' => false],
                            ['choice_text' => "Elle parcourt 600 mètres", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Un tableau indique 2 cm/an pour une plaque et 5 cm/an pour une autre. Laquelle a la vitesse la plus élevée ?",
                        'explanation' => "Une vitesse de 5 cm/an est supérieure à 2 cm/an ; la seconde plaque se déplace donc plus rapidement dans ce tableau.",
                        'choices' => [
                            ['choice_text' => "La plaque à 5 cm/an", 'is_correct' => true],
                            ['choice_text' => "La plaque à 2 cm/an", 'is_correct' => false],
                            ['choice_text' => "Les deux ont la même vitesse", 'is_correct' => false],
                            ['choice_text' => "La plaque la plus grande est forcément la plus rapide", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Pourquoi utilise-t-on souvent des mesures GPS pour étudier les mouvements actuels des plaques ?",
                        'explanation' => "Le GPS permet de suivre avec une grande précision le déplacement relatif de repères situés sur des plaques, sur des années ou des décennies.",
                        'choices' => [
                            ['choice_text' => "Parce qu’il permet de mesurer directement de très petits déplacements actuels", 'is_correct' => true],
                            ['choice_text' => "Parce qu’il mesure la température du noyau", 'is_correct' => false],
                            ['choice_text' => "Parce qu’il transforme les séismes en cartes météorologiques", 'is_correct' => false],
                            ['choice_text' => "Parce qu’il indique automatiquement l’âge de chaque roche", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Une plaque se déplace à 7 cm/an pendant 10 ans. Quelle distance parcourt-elle sur cette durée ?",
                        'explanation' => "À vitesse constante, 7 cm/an × 10 ans = 70 cm. Cela correspond à 0,70 mètre.",
                        'choices' => [
                            ['choice_text' => "70 cm", 'is_correct' => true],
                            ['choice_text' => "7 cm", 'is_correct' => false],
                            ['choice_text' => "17 cm", 'is_correct' => false],
                            ['choice_text' => "700 cm", 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => "Études de cas tectoniques",
                'description' => "Résoudre de petits cas inspirés de situations réelles pour relier observations, mouvements des plaques et conséquences géologiques.",
                'duration' => 23,
                'passing_score' => 60,
                'questions' => [
                    [
                        'question' => "Une région côtière connaît de nombreux séismes, une fosse océanique au large et une chaîne de volcans sur le continent. Quel modèle tectonique explique le mieux l’ensemble ?",
                        'explanation' => "La combinaison d’une fosse, de séismes fréquents et de volcanisme continental est typique d’une subduction d’une plaque océanique sous une plaque continentale.",
                        'choices' => [
                            ['choice_text' => "Subduction d’une plaque océanique sous une plaque continentale", 'is_correct' => true],
                            ['choice_text' => "Divergence au milieu de l’océan uniquement", 'is_correct' => false],
                            ['choice_text' => "Coulissage transformant sans convergence", 'is_correct' => false],
                            ['choice_text' => "Collision de deux continents sans domaine océanique", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Une équipe océanographique découvre que l’âge des basaltes augmente progressivement en s’éloignant d’une dorsale. Quelle conclusion peut-elle retenir au niveau débutant ?",
                        'explanation' => "Cette organisation des âges indique que les roches se sont formées près de la dorsale puis se sont éloignées avec l’expansion des fonds océaniques.",
                        'choices' => [
                            ['choice_text' => "Le plancher océanique s’est formé progressivement à partir de la dorsale", 'is_correct' => true],
                            ['choice_text' => "Les basaltes deviennent plus vieux uniquement à cause de la profondeur", 'is_correct' => false],
                            ['choice_text' => "La dorsale détruit les roches les plus jeunes", 'is_correct' => false],
                            ['choice_text' => "Les océans sont immobiles", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Un pays situé près d’une frontière de plaques en coulissage enregistre des séismes fréquents mais peu de volcans. Quelle interprétation simple est cohérente ?",
                        'explanation' => "Le coulissage peut produire des séismes par accumulation puis libération de contraintes, sans être une zone où le magma remonte systématiquement comme à une dorsale.",
                        'choices' => [
                            ['choice_text' => "La frontière peut être transformante", 'is_correct' => true],
                            ['choice_text' => "La frontière est nécessairement une dorsale", 'is_correct' => false],
                            ['choice_text' => "L’absence de nombreux volcans exclut toute activité tectonique", 'is_correct' => false],
                            ['choice_text' => "Les séismes prouvent une absence totale de mouvement", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Des données GPS montrent que deux stations sur des continents différents s’éloignent lentement. Une dorsale se trouve entre elles. Quelle explication est la plus probable ?",
                        'explanation' => "La dorsale constitue une zone de divergence : le plancher océanique se crée puis s’éloigne de l’axe, ce qui augmente la distance entre les stations situées sur les deux plaques.",
                        'choices' => [
                            ['choice_text' => "Les deux plaques divergent de part et d’autre de la dorsale", 'is_correct' => true],
                            ['choice_text' => "Les deux plaques convergent vers la dorsale", 'is_correct' => false],
                            ['choice_text' => "Les plaques coulissent parallèlement à la dorsale sans s’éloigner", 'is_correct' => false],
                            ['choice_text' => "Les continents se déplacent à cause des marées seules", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Deux continents présentent des chaînes de montagnes de part et d’autre d’une zone où les roches sont fortement plissées. Les mesures montrent qu’ils se rapprochent. Quelle interprétation faut-il privilégier ?",
                        'explanation' => "Le rapprochement des continents et la déformation des roches sont cohérents avec une convergence et une collision continentale, mécanisme majeur de formation des chaînes de montagnes.",
                        'choices' => [
                            ['choice_text' => "Une collision continentale en cours ou récente", 'is_correct' => true],
                            ['choice_text' => "Une divergence responsable d’un nouvel océan au même endroit", 'is_correct' => false],
                            ['choice_text' => "Une faille transformante sans compression", 'is_correct' => false],
                            ['choice_text' => "Une région sans lien avec les mouvements des plaques", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Un schéma pédagogique montre un océan qui se ferme progressivement, puis deux continents qui entrent en contact. Quelle séquence tectonique est la plus plausible ?",
                        'explanation' => "La fermeture d’un domaine océanique peut impliquer la subduction de sa lithosphère, puis la collision des continents lorsque l’océan a suffisamment diminué.",
                        'choices' => [
                            ['choice_text' => "Subduction de la lithosphère océanique → rapprochement → collision continentale", 'is_correct' => true],
                            ['choice_text' => "Divergence → ouverture infinie → collision immédiate", 'is_correct' => false],
                            ['choice_text' => "Coulissage → formation automatique d’un continent", 'is_correct' => false],
                            ['choice_text' => "Érosion → création de la subduction → immobilité", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Une classe compare deux frontières. À la frontière A, les plaques s’éloignent et des roches océaniques jeunes apparaissent. À la frontière B, une plaque océanique plonge sous une autre. Quel bilan est correct ?",
                        'explanation' => "La frontière A est divergente et crée de la lithosphère océanique. La frontière B est convergente et recycle de la lithosphère océanique par subduction.",
                        'choices' => [
                            ['choice_text' => "A = création de lithosphère ; B = recyclage par subduction", 'is_correct' => true],
                            ['choice_text' => "A = subduction ; B = création à une dorsale", 'is_correct' => false],
                            ['choice_text' => "A et B = limites transformantes", 'is_correct' => false],
                            ['choice_text' => "A et B = absence d’échanges lithosphériques", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Une station située à 250 km d’une dorsale et une autre station située à 750 km de la même dorsale sont toutes deux sur la même plaque. Laquelle est généralement construite à partir d’un fond océanique plus ancien, en supposant une vitesse régulière et une même histoire ?",
                        'explanation' => "À mesure que l’on s’éloigne de l’axe de la dorsale, on rencontre généralement des roches océaniques plus anciennes. La station à 750 km est donc associée au plancher plus ancien.",
                        'choices' => [
                            ['choice_text' => "La station située à 750 km", 'is_correct' => true],
                            ['choice_text' => "La station située à 250 km", 'is_correct' => false],
                            ['choice_text' => "Les deux sont nécessairement du même âge", 'is_correct' => false],
                            ['choice_text' => "On ne peut jamais comparer leurs âges près d’une dorsale", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Un séisme important survient sur une frontière transformante. Quel événement mécanique est le plus directement lié à sa production ?",
                        'explanation' => "Sur une faille transformante, les contraintes peuvent s’accumuler à cause du frottement puis provoquer un glissement brutal, générant le séisme.",
                        'choices' => [
                            ['choice_text' => "Un glissement brutal après accumulation de contraintes", 'is_correct' => true],
                            ['choice_text' => "La formation instantanée d’un nouvel océan", 'is_correct' => false],
                            ['choice_text' => "La collision directe de deux noyaux terrestres", 'is_correct' => false],
                            ['choice_text' => "L’évaporation de la lithosphère", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Une chaîne volcanique est observée au-dessus d’une plaque, tandis qu’une autre plaque plonge sous elle. Quelle relation est la plus appropriée ?",
                        'explanation' => "Le volcanisme peut se développer sur la plaque chevauchante au-dessus d’une subduction, où des processus du manteau peuvent produire du magma qui remonte vers la surface.",
                        'choices' => [
                            ['choice_text' => "Le volcanisme est associé à la zone de subduction", 'is_correct' => true],
                            ['choice_text' => "Le volcanisme prouve que les plaques divergent", 'is_correct' => false],
                            ['choice_text' => "Le volcanisme montre que la frontière est transformante", 'is_correct' => false],
                            ['choice_text' => "Le volcanisme exclut toute activité sismique", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Un professeur résume : « Les plaques se déplacent lentement, mais leurs interactions modifient les océans et les continents. » Quelle idée synthétise le mieux cette phrase ?",
                        'explanation' => "La tectonique des plaques agit sur de très longues durées. De faibles mouvements annuels s’additionnent et produisent ouverture d’océans, subduction, séismes, volcanisme et formation de montagnes.",
                        'choices' => [
                            ['choice_text' => "Les mouvements lents des plaques ont des effets géologiques majeurs sur de longues durées", 'is_correct' => true],
                            ['choice_text' => "Les plaques n’ont d’effet qu’en quelques heures", 'is_correct' => false],
                            ['choice_text' => "Les séismes remplacent tous les autres processus géologiques", 'is_correct' => false],
                            ['choice_text' => "La tectonique concerne uniquement le fond des océans", 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => "Synthèse : comprendre la tectonique des plaques",
                'description' => "Réviser les notions fondamentales en reliant Pangée, plaques, limites, expansion, subduction, séismes, volcanisme et reliefs.",
                'duration' => 24,
                'passing_score' => 60,
                'questions' => [
                    [
                        'question' => "Quelle affirmation résume le mieux la tectonique des plaques ?",
                        'explanation' => "La tectonique des plaques décrit le déplacement de plaques lithosphériques rigides et les interactions qui se produisent à leurs frontières.",
                        'choices' => [
                            ['choice_text' => "Des plaques lithosphériques se déplacent et interagissent à leurs limites", 'is_correct' => true],
                            ['choice_text' => "Les continents se déplacent seuls, sans relation avec les océans", 'is_correct' => false],
                            ['choice_text' => "Les séismes sont indépendants des mouvements terrestres", 'is_correct' => false],
                            ['choice_text' => "Les océans sont des structures entièrement immobiles", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quel enchaînement relie correctement Pangée et la situation actuelle des continents ?",
                        'explanation' => "Les continents étaient largement réunis dans la Pangée, puis celle-ci s’est fragmentée. Les blocs ont ensuite poursuivi leurs déplacements au sein des plaques.",
                        'choices' => [
                            ['choice_text' => "Pangée → fragmentation → déplacements des plaques → positions actuelles", 'is_correct' => true],
                            ['choice_text' => "Positions actuelles → Pangée → immobilité définitive", 'is_correct' => false],
                            ['choice_text' => "Pangée → disparition des continents → création de tous les océans", 'is_correct' => false],
                            ['choice_text' => "Pangée → arrêt de la tectonique → dérive inexistante", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Une élève observe des roches océaniques jeunes près d’une dorsale et de plus anciennes loin de celle-ci. Quel processus doit-elle associer à ce profil ?",
                        'explanation' => "Ce profil d’âge est caractéristique de l’expansion des fonds océaniques : la lithosphère se forme au niveau de la dorsale puis s’éloigne progressivement.",
                        'choices' => [
                            ['choice_text' => "L’expansion des fonds océaniques", 'is_correct' => true],
                            ['choice_text' => "La collision continentale", 'is_correct' => false],
                            ['choice_text' => "Le coulissage transformant seul", 'is_correct' => false],
                            ['choice_text' => "L’érosion d’une chaîne de montagnes", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quel scénario correspond à une limite convergente océan-continent ?",
                        'explanation' => "À cette limite, la plaque océanique peut plonger sous la plaque continentale. On peut alors observer une fosse, des séismes et du volcanisme continental.",
                        'choices' => [
                            ['choice_text' => "Plaque océanique plongeant sous une plaque continentale", 'is_correct' => true],
                            ['choice_text' => "Deux plaques s’éloignant au milieu d’un continent", 'is_correct' => false],
                            ['choice_text' => "Deux plaques coulissant sans rapprochement", 'is_correct' => false],
                            ['choice_text' => "Deux continents s’éloignant le long d’une dorsale océanique", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quel scénario correspond à une collision continentale ?",
                        'explanation' => "Lorsque deux domaines continentaux convergent, la croûte peut se comprimer, se déformer et s’épaissir, donnant naissance à de grands reliefs.",
                        'choices' => [
                            ['choice_text' => "Deux continents convergent et épaississent leur croûte", 'is_correct' => true],
                            ['choice_text' => "Deux plaques océaniques s’éloignent à une dorsale", 'is_correct' => false],
                            ['choice_text' => "Deux blocs coulissent sans compression", 'is_correct' => false],
                            ['choice_text' => "Une plaque océanique s’éloigne d’une fosse", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Une classe doit associer quatre observations à quatre processus : dorsale, fosse, faille transformante, chaîne de montagnes. Quelle association est correcte ?",
                        'explanation' => "La dorsale correspond à la divergence, la fosse à la subduction, la faille transformante au coulissage et la chaîne de montagnes peut résulter d’une collision continentale.",
                        'choices' => [
                            ['choice_text' => "Dorsale = divergence ; fosse = subduction ; faille transformante = coulissage ; montagnes = collision", 'is_correct' => true],
                            ['choice_text' => "Dorsale = collision ; fosse = divergence ; faille = subduction ; montagnes = coulissage", 'is_correct' => false],
                            ['choice_text' => "Dorsale = subduction ; fosse = coulissage ; faille = collision ; montagnes = divergence", 'is_correct' => false],
                            ['choice_text' => "Dorsale = immobilité ; fosse = érosion ; faille = marée ; montagnes = pluie", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quel énoncé explique le mieux pourquoi les séismes sont nombreux aux frontières de plaques ?",
                        'explanation' => "Les plaques interagissent à leurs frontières et peuvent accumuler des contraintes. Les ruptures et glissements associés libèrent de l’énergie sous forme d’ondes sismiques.",
                        'choices' => [
                            ['choice_text' => "Les interactions entre plaques y concentrent des contraintes tectoniques", 'is_correct' => true],
                            ['choice_text' => "Les frontières de plaques sont toujours les points les plus chauds de l’atmosphère", 'is_correct' => false],
                            ['choice_text' => "Les séismes sont causés directement par la lumière solaire", 'is_correct' => false],
                            ['choice_text' => "Les continents y perdent toute leur masse", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Un schéma présente une plaque qui avance de 4 cm/an vers une autre plaque qui avance de 2 cm/an dans la même direction. Quelle différence de vitesse simple peut-on calculer ?",
                        'explanation' => "La différence de vitesse est 4 − 2 = 2 cm/an. Cette différence peut contribuer au mouvement relatif entre les deux plaques si leurs directions sont identiques.",
                        'choices' => [
                            ['choice_text' => "2 cm/an", 'is_correct' => true],
                            ['choice_text' => "6 cm/an", 'is_correct' => false],
                            ['choice_text' => "8 cm/an", 'is_correct' => false],
                            ['choice_text' => "1 cm/an", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quel énoncé corrige une confusion entre une plaque et un continent ?",
                        'explanation' => "Une plaque peut comprendre une partie de continent et une partie d’océan. Les frontières de plaques ne coïncident donc pas nécessairement avec les limites des continents.",
                        'choices' => [
                            ['choice_text' => "Une même plaque peut porter des domaines continentaux et océaniques", 'is_correct' => true],
                            ['choice_text' => "Chaque plaque est forcément un seul continent", 'is_correct' => false],
                            ['choice_text' => "Chaque continent est forcément une seule plaque", 'is_correct' => false],
                            ['choice_text' => "Les océans ne reposent jamais sur des plaques", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quel choix décrit correctement le rôle d’une dorsale dans le cycle de la lithosphère océanique ?",
                        'explanation' => "La dorsale est une zone de création de nouvelle lithosphère océanique. Cette lithosphère peut ensuite se déplacer puis être recyclée dans des zones de subduction.",
                        'choices' => [
                            ['choice_text' => "Elle crée de la lithosphère océanique qui pourra plus tard être recyclée", 'is_correct' => true],
                            ['choice_text' => "Elle détruit toute lithosphère avant qu’elle ne se forme", 'is_correct' => false],
                            ['choice_text' => "Elle empêche les plaques de se déplacer", 'is_correct' => false],
                            ['choice_text' => "Elle transforme les continents en noyau interne", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quel énoncé relie correctement activité volcanique et limites de plaques ?",
                        'explanation' => "Le volcanisme est fréquent à certaines limites, notamment aux dorsales et dans plusieurs zones de subduction, mais il existe aussi des volcans à l’intérieur des plaques.",
                        'choices' => [
                            ['choice_text' => "Le volcanisme peut être lié aux dorsales et aux subductions, mais pas uniquement aux limites", 'is_correct' => true],
                            ['choice_text' => "Tous les volcans sont exclusivement sur des failles transformantes", 'is_correct' => false],
                            ['choice_text' => "Aucune limite de plaque n’est associée au volcanisme", 'is_correct' => false],
                            ['choice_text' => "Le volcanisme ne dépend jamais de processus internes", 'is_correct' => false],
                        ],
                    ],
                ],
            ],
        ];

        foreach ($quizzes as $quizData) {
            $quiz = Quiz::updateOrCreate(
                [
                    'subject_id' => $subject->id,
                    'title' => $quizData['title'],
                ],
                [
                    'owner_id' => null,
                    'description' => $quizData['description'],
                    'duration' => $quizData['duration'],
                    'passing_score' => $quizData['passing_score'],
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
