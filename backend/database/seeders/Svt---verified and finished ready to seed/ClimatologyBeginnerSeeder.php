<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class ClimatologyBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'climatology')->firstOrFail();

        $quizzes = [
            [
                'title' => 'Météo et climat : ne pas les confondre',
                'description' => 'Distinguer les échelles de temps et les grandeurs utilisées en météorologie et en climatologie.',
                'settings' => ['duration' => 18, 'passing_score' => 55],
                'questions' => [
                    [
                        'question' => 'La météo décrit principalement…',
                        'choices' => [
                            ['choice_text' => 'les moyennes climatiques sur plusieurs siècles', 'is_correct' => false],
                            ['choice_text' => 'les moyennes mensuelles calculées sur trente ans d’observations', 'is_correct' => false],
                            ['choice_text' => 'l’état de l’atmosphère à court terme en un lieu donné', 'is_correct' => true],
                            ['choice_text' => 'l’évolution du niveau des mers sur un siècle', 'is_correct' => false],
                        ],
                        'explanation' => 'La météo concerne des conditions atmosphériques observées ou prévues sur des durées courtes, alors que le climat décrit des statistiques sur de longues périodes.',
                    ],
                    [
                        'question' => 'Le climat d’une région correspond…',
                        'choices' => [
                            ['choice_text' => 'aux caractéristiques moyennes et à la variabilité du temps sur de longues périodes', 'is_correct' => true],
                            ['choice_text' => 'au temps qu’il fait en ce moment dans la région', 'is_correct' => false],
                            ['choice_text' => 'aux prévisions détaillées, jour par jour, établies pour les dix prochains jours de la région', 'is_correct' => false],
                            ['choice_text' => 'à la température record observée un jour d’été', 'is_correct' => false],
                        ],
                        'explanation' => 'Le climat se décrit à partir de statistiques sur plusieurs décennies et inclut la variabilité des conditions.',
                    ],
                    [
                        'question' => 'Le bulletin du matin annonce 32 °C demain à midi à Rabat. Cette information relève de :',
                        'choices' => [
                            ['choice_text' => 'le climat', 'is_correct' => false],
                            ['choice_text' => 'la normale climatique', 'is_correct' => false],
                            ['choice_text' => 'la tendance climatique', 'is_correct' => false],
                            ['choice_text' => 'la météo', 'is_correct' => true],
                        ],
                        'explanation' => 'Une température prévue pour un moment et un lieu précis est une prévision météorologique, pas une donnée climatique.',
                    ],
                    [
                        'question' => 'Une moyenne de température calculée sur plusieurs décennies sert surtout à décrire…',
                        'choices' => [
                            ['choice_text' => 'la météo du jour', 'is_correct' => false],
                            ['choice_text' => 'le climat', 'is_correct' => true],
                            ['choice_text' => 'une prévision à dix jours', 'is_correct' => false],
                            ['choice_text' => 'un épisode orageux', 'is_correct' => false],
                        ],
                        'explanation' => 'Les moyennes établies sur de longues périodes caractérisent le climat d’une région.',
                    ],
                    [
                        'question' => 'Il pleut deux jours de suite en plein mois d’août à Fès, ce qui est rare. Peut-on en conclure que le climat de Fès a changé ?',
                        'choices' => [
                            ['choice_text' => 'Oui : une pluie aussi inhabituelle prouve que le climat de la ville a déjà changé', 'is_correct' => false],
                            ['choice_text' => 'Oui : dès que la pluie dépasse la moyenne du mois', 'is_correct' => false],
                            ['choice_text' => 'Non : la pluie ne fait pas partie du climat', 'is_correct' => false],
                            ['choice_text' => 'Non : deux jours ne suffisent pas, il faut une tendance sur de nombreuses années', 'is_correct' => true],
                        ],
                        'explanation' => 'Un événement isolé relève de la variabilité du temps. Le climat ne se juge que sur des séries longues, de plusieurs décennies.',
                    ],
                    [
                        'question' => 'Quel instrument mesure directement la température de l’air ?',
                        'choices' => [
                            ['choice_text' => 'Un thermomètre', 'is_correct' => true],
                            ['choice_text' => 'Un pluviomètre', 'is_correct' => false],
                            ['choice_text' => 'Un anémomètre', 'is_correct' => false],
                            ['choice_text' => 'Un baromètre', 'is_correct' => false],
                        ],
                        'explanation' => 'Le thermomètre mesure la température. Les autres instruments mesurent respectivement les précipitations, le vent et la pression.',
                    ],
                    [
                        'question' => 'Samir place un récipient gradué dans son jardin pour savoir combien il pleut. Il utilise un :',
                        'choices' => [
                            ['choice_text' => 'anémomètre', 'is_correct' => false],
                            ['choice_text' => 'baromètre', 'is_correct' => false],
                            ['choice_text' => 'pluviomètre', 'is_correct' => true],
                            ['choice_text' => 'hygromètre', 'is_correct' => false],
                        ],
                        'explanation' => 'Le pluviomètre recueille l’eau tombée et la mesure en millimètres.',
                    ],
                    [
                        'question' => 'Une rose des vents permet surtout de connaître…',
                        'choices' => [
                            ['choice_text' => 'la hauteur des vagues au large', 'is_correct' => false],
                            ['choice_text' => 'la direction et la fréquence des vents', 'is_correct' => true],
                            ['choice_text' => 'la répartition des pluies dans l’année', 'is_correct' => false],
                            ['choice_text' => 'la pression moyenne au niveau de la mer', 'is_correct' => false],
                        ],
                        'explanation' => 'Elle résume d’où soufflent les vents et la fréquence de chaque direction.',
                    ],
                    [
                        'question' => 'Les services météorologiques calculent une « normale » climatique sur une période de référence de :',
                        'choices' => [
                            ['choice_text' => '30 ans', 'is_correct' => true],
                            ['choice_text' => '1 an', 'is_correct' => false],
                            ['choice_text' => '5 ans', 'is_correct' => false],
                            ['choice_text' => '100 ans', 'is_correct' => false],
                        ],
                        'explanation' => 'Trente ans est la durée recommandée par l’Organisation météorologique mondiale pour établir une normale.',
                    ],
                    [
                        'question' => 'Laquelle de ces phrases décrit un climat ?',
                        'choices' => [
                            ['choice_text' => 'Il a plu 20 mm à Rabat hier soir', 'is_correct' => false],
                            ['choice_text' => 'Un vent de 60 km/h est attendu cet après-midi à Agadir', 'is_correct' => false],
                            ['choice_text' => 'Ce matin, un brouillard épais recouvre la côte', 'is_correct' => false],
                            ['choice_text' => 'À Marrakech, les étés sont chauds et secs et les hivers frais', 'is_correct' => true],
                        ],
                        'explanation' => 'Seule la première décrit des conditions habituelles sur de longues années. Les trois autres décrivent un temps ponctuel.',
                    ],
                    [
                        'question' => 'Au-delà d’une dizaine de jours, les prévisions météo détaillées deviennent peu fiables. Qu’est-ce qui l’explique ?',
                        'choices' => [
                            ['choice_text' => 'les thermomètres perdent leur précision au-delà d’une semaine d’utilisation continue', 'is_correct' => false],
                            ['choice_text' => 'l’atmosphère est chaotique : de petites erreurs au départ grossissent vite', 'is_correct' => true],
                            ['choice_text' => 'les modèles ignorent la rotation de la Terre', 'is_correct' => false],
                            ['choice_text' => 'le climat change plus vite que le temps qu’il fait', 'is_correct' => false],
                        ],
                        'explanation' => 'Une petite erreur de mesure au départ grandit à chaque étape du calcul, jusqu’à rendre le résultat inutilisable.',
                    ],
                ],
            ],
            [
                'title' => 'Grandes zones climatiques',
                'description' => 'Reconnaître les grands ensembles climatiques et leurs caractéristiques élémentaires.',
                'settings' => ['duration' => 20, 'passing_score' => 50],
                'questions' => [
                    [
                        'question' => 'Quelle situation correspond à un climat équatorial typique ?',
                        'choices' => [
                            ['choice_text' => 'Des étés très chauds et des hivers froids avec de la neige', 'is_correct' => false],
                            ['choice_text' => 'Des températures élevées et des précipitations fréquentes toute l’année', 'is_correct' => true],
                            ['choice_text' => 'Une longue saison sèche et une courte saison des pluies', 'is_correct' => false],
                            ['choice_text' => 'Des pluies rares et de forts écarts de température entre le jour et la nuit', 'is_correct' => false],
                        ],
                        'explanation' => 'Près de l’équateur, la chaleur est constante et les pluies tombent presque chaque semaine.',
                    ],
                    [
                        'question' => 'Les régions polaires reçoivent peu d’énergie solaire en moyenne. La raison principale est que :',
                        'choices' => [
                            ['choice_text' => 'la Terre y est plus éloignée du Soleil qu’à l’équateur', 'is_correct' => false],
                            ['choice_text' => 'le Soleil y brille beaucoup moins fort qu’ailleurs', 'is_correct' => false],
                            ['choice_text' => 'l’atmosphère polaire absorbe l’essentiel de la lumière avant qu’elle n’atteigne le sol', 'is_correct' => false],
                            ['choice_text' => 'les rayons arrivent très obliquement et l’ensoleillement varie selon la saison', 'is_correct' => true],
                        ],
                        'explanation' => 'Aux hautes latitudes, la même quantité de lumière s’étale sur une plus grande surface, et les saisons sont très contrastées.',
                    ],
                    [
                        'question' => 'La zone intertropicale se situe…',
                        'choices' => [
                            ['choice_text' => 'entre les deux tropiques', 'is_correct' => true],
                            ['choice_text' => 'entre les deux cercles polaires', 'is_correct' => false],
                            ['choice_text' => 'entre le tropique du Cancer et le cercle polaire arctique', 'is_correct' => false],
                            ['choice_text' => 'de part et d’autre du méridien de Greenwich', 'is_correct' => false],
                        ],
                        'explanation' => 'Elle correspond à la bande comprise entre le tropique du Cancer et le tropique du Capricorne.',
                    ],
                    [
                        'question' => 'Zagora, dans le sud du Maroc, reçoit moins de 100 mm de pluie par an. Son climat est :',
                        'choices' => [
                            ['choice_text' => 'équatorial', 'is_correct' => false],
                            ['choice_text' => 'océanique', 'is_correct' => false],
                            ['choice_text' => 'aride', 'is_correct' => true],
                            ['choice_text' => 'polaire', 'is_correct' => false],
                        ],
                        'explanation' => 'Des précipitations très faibles et des conditions sèches caractérisent un climat aride.',
                    ],
                    [
                        'question' => 'Un climat méditerranéen se caractérise par…',
                        'choices' => [
                            ['choice_text' => 'des étés chauds et secs et des hivers plus doux et plus humides', 'is_correct' => true],
                            ['choice_text' => 'des pluies régulières réparties sur l’année et des étés frais', 'is_correct' => false],
                            ['choice_text' => 'des hivers rigoureux et des étés très brefs', 'is_correct' => false],
                            ['choice_text' => 'de la chaleur et de fortes pluies réparties sur les douze mois', 'is_correct' => false],
                        ],
                        'explanation' => 'La saison sèche tombe en été, et la majeure partie des pluies arrive pendant la saison fraîche.',
                    ],
                    [
                        'question' => 'Une ville connaît une saison des pluies et une saison sèche bien marquées, avec des températures élevées toute l’année. Son climat est :',
                        'choices' => [
                            ['choice_text' => 'méditerranéen', 'is_correct' => false],
                            ['choice_text' => 'polaire', 'is_correct' => false],
                            ['choice_text' => 'tempéré océanique', 'is_correct' => false],
                            ['choice_text' => 'tropical', 'is_correct' => true],
                        ],
                        'explanation' => 'L’alternance d’une saison humide et d’une saison sèche sous une chaleur constante est typique du climat tropical.',
                    ],
                    [
                        'question' => 'Les grandes zones climatiques se répartissent en fonction d’abord :',
                        'choices' => [
                            ['choice_text' => 'de la longitude et du fuseau horaire', 'is_correct' => false],
                            ['choice_text' => 'de la latitude et de la circulation générale de l’atmosphère', 'is_correct' => true],
                            ['choice_text' => 'de l’âge géologique des sols', 'is_correct' => false],
                            ['choice_text' => 'de la salinité moyenne des mers voisines', 'is_correct' => false],
                        ],
                        'explanation' => 'La latitude fixe l’énergie solaire reçue, et la circulation atmosphérique redistribue chaleur et humidité.',
                    ],
                    [
                        'question' => 'À Moscou, les hivers sont longs et très froids, les étés courts et chauds. Ce climat est :',
                        'choices' => [
                            ['choice_text' => 'océanique', 'is_correct' => false],
                            ['choice_text' => 'équatorial', 'is_correct' => false],
                            ['choice_text' => 'continental', 'is_correct' => true],
                            ['choice_text' => 'méditerranéen', 'is_correct' => false],
                        ],
                        'explanation' => 'Loin des océans, les écarts de température entre l’été et l’hiver sont importants : c’est la marque du climat continental.',
                    ],
                    [
                        'question' => 'Quel exemple correspond à un climat polaire ?',
                        'choices' => [
                            ['choice_text' => 'Des températures élevées et des pluies quotidiennes', 'is_correct' => false],
                            ['choice_text' => 'Des hivers doux et des étés secs et chauds', 'is_correct' => false],
                            ['choice_text' => 'De fortes pluies réparties sur l’année et des températures douces', 'is_correct' => false],
                            ['choice_text' => 'Des températures très basses et une saison chaude courte', 'is_correct' => true],
                        ],
                        'explanation' => 'La saison froide domine et l’été reste bref et frais.',
                    ],
                    [
                        'question' => 'Sur une carte climatique de l’Afrique du Nord, des zones colorées distinguent les climats aride, méditerranéen, etc. Que représentent-elles ?',
                        'choices' => [
                            ['choice_text' => 'des régimes climatiques moyens établis sur de longues périodes', 'is_correct' => true],
                            ['choice_text' => 'le temps qu’il fera dans les prochains jours', 'is_correct' => false],
                            ['choice_text' => 'les précipitations tombées la semaine précédente', 'is_correct' => false],
                            ['choice_text' => 'les limites administratives des pays', 'is_correct' => false],
                        ],
                        'explanation' => 'Une carte climatique résume des statistiques sur des décennies, alors qu’une carte météo montre la situation d’un jour.',
                    ],
                ],
            ],
            [
                'title' => 'Latitude, altitude et relief',
                'description' => 'Comprendre comment la latitude, l’altitude et le relief influencent les conditions climatiques.',
                'settings' => ['duration' => 22, 'passing_score' => 60],
                'questions' => [
                    [
                        'question' => 'Le sommet du Toubkal (4 167 m) est enneigé en hiver, alors que Marrakech, à ses pieds, l’est rarement. Quel facteur domine ?',
                        'choices' => [
                            ['choice_text' => 'la longitude : le Toubkal est beaucoup plus à l’est', 'is_correct' => false],
                            ['choice_text' => 'la latitude : le Toubkal est beaucoup plus au nord', 'is_correct' => false],
                            ['choice_text' => 'la proximité de l’océan : le Toubkal est plus près de la mer', 'is_correct' => false],
                            ['choice_text' => 'l’altitude : la température baisse en montant', 'is_correct' => true],
                        ],
                        'explanation' => 'Dans la troposphère, l’air se refroidit à mesure qu’on s’élève, ce qui explique la neige sur les sommets.',
                    ],
                    [
                        'question' => 'Essaouira, sur l’Atlantique, et Marrakech sont à peu près à la même latitude. En été, Essaouira reste autour de 25 °C alors que Marrakech dépasse souvent 35 °C. Qu’est-ce qui explique l’écart ?',
                        'choices' => [
                            ['choice_text' => 'l’altitude bien plus élevée d’Essaouira', 'is_correct' => false],
                            ['choice_text' => 'l’océan, qui tempère la température de la côte', 'is_correct' => true],
                            ['choice_text' => 'une latitude différente qui change l’ensoleillement', 'is_correct' => false],
                            ['choice_text' => 'des vents d’ouest qui amènent l’air chaud sur la côte', 'is_correct' => false],
                        ],
                        'explanation' => 'L’eau se réchauffe lentement et amortit les extrêmes sur le littoral, alors que l’intérieur des terres chauffe fortement.',
                    ],
                    [
                        'question' => 'En journée, à Agadir, une brise souffle de la mer vers la plage. Elle s’explique par le fait que :',
                        'choices' => [
                            ['choice_text' => 'la mer chauffe plus vite que la terre, donc son air chaud monte et aspire l’air du continent', 'is_correct' => false],
                            ['choice_text' => 'la rotation de la Terre pousse l’air de la mer vers la côte', 'is_correct' => false],
                            ['choice_text' => 'la terre chauffe plus vite que la mer : l’air chaud monte, l’air marin le remplace', 'is_correct' => true],
                            ['choice_text' => 'les vagues entraînent l’air marin vers l’intérieur des terres', 'is_correct' => false],
                        ],
                        'explanation' => 'Le sol s’échauffe plus vite que l’eau : l’air chaud s’élève au-dessus de la terre et l’air plus frais venu de la mer prend sa place.',
                    ],
                    [
                        'question' => 'Un courant océanique chaud longe une côte. Quel effet climatique local est possible ?',
                        'choices' => [
                            ['choice_text' => 'Un adoucissement des températures et une modification de l’humidité', 'is_correct' => true],
                            ['choice_text' => 'Un refroidissement de l’air côtier et une baisse de l’humidité', 'is_correct' => false],
                            ['choice_text' => 'Des écarts plus forts entre l’été et l’hiver', 'is_correct' => false],
                            ['choice_text' => 'Une aridité plus marquée à l’intérieur des terres', 'is_correct' => false],
                        ],
                        'explanation' => 'Un courant chaud cède de la chaleur et de la vapeur d’eau à l’air voisin, ce qui adoucit le climat de la côte.',
                    ],
                    [
                        'question' => 'Dans une vallée, l’air froid peut s’accumuler au fond pendant certaines nuits. Cela peut créer…',
                        'choices' => [
                            ['choice_text' => 'un effet de foehn', 'is_correct' => false],
                            ['choice_text' => 'une brise de mer', 'is_correct' => false],
                            ['choice_text' => 'une inversion thermique locale', 'is_correct' => true],
                            ['choice_text' => 'une mousson', 'is_correct' => false],
                        ],
                        'explanation' => 'L’air refroidi près du sol glisse vers le fond de la vallée : il fait alors plus froid en bas qu’en altitude.',
                    ],
                    [
                        'question' => 'Dans l’Atlas, l’adret, versant sud, est plus chaud et plus sec que l’ubac, versant nord. Ce contraste vient de :',
                        'choices' => [
                            ['choice_text' => 'la continentalité du massif', 'is_correct' => false],
                            ['choice_text' => 'l’exposition des versants au Soleil', 'is_correct' => true],
                            ['choice_text' => 'l’altitude de la crête', 'is_correct' => false],
                            ['choice_text' => 'la latitude de la station', 'is_correct' => false],
                        ],
                        'explanation' => 'Le versant tourné vers le Soleil reçoit plus d’énergie, ce qui modifie températures et végétation sur de courtes distances.',
                    ],
                    [
                        'question' => 'Sur le versant d’une montagne face aux vents humides venus de la mer, les pluies sont plus abondantes. Le mécanisme est que :',
                        'choices' => [
                            ['choice_text' => 'l’air descend le long de la pente et se charge d’humidité', 'is_correct' => false],
                            ['choice_text' => 'le vent s’arrête contre la montagne et la vapeur d’eau retombe sous forme de pluie d’un coup', 'is_correct' => false],
                            ['choice_text' => 'les roches libèrent de l’eau quand elles chauffent au Soleil', 'is_correct' => false],
                            ['choice_text' => 'l’air humide est forcé de monter, se refroidit et condense sa vapeur d’eau', 'is_correct' => true],
                        ],
                        'explanation' => 'En montant, l’air se refroidit : la vapeur d’eau se condense en nuages puis en pluie sur le versant exposé.',
                    ],
                    [
                        'question' => 'Un versant situé sous le vent d’une chaîne montagneuse reçoit peu de pluie. Il peut correspondre à…',
                        'choices' => [
                            ['choice_text' => 'une zone d’ombre pluviométrique', 'is_correct' => true],
                            ['choice_text' => 'une zone de mousson', 'is_correct' => false],
                            ['choice_text' => 'un îlot de chaleur', 'is_correct' => false],
                            ['choice_text' => 'un front polaire', 'is_correct' => false],
                        ],
                        'explanation' => 'L’air a déjà perdu une partie de son humidité en franchissant la montagne : il redescend plus sec de l’autre côté.',
                    ],
                    [
                        'question' => 'Une ville est plus chaude que sa campagne voisine, surtout lors des nuits calmes. Quel phénomène local est possible ?',
                        'choices' => [
                            ['choice_text' => 'L’inversion thermique en vallée', 'is_correct' => false],
                            ['choice_text' => 'L’îlot de chaleur urbain', 'is_correct' => true],
                            ['choice_text' => 'La brise de mer', 'is_correct' => false],
                            ['choice_text' => 'L’ombre pluviométrique', 'is_correct' => false],
                        ],
                        'explanation' => 'Béton et bitume stockent la chaleur le jour et la libèrent la nuit, ce qui limite le refroidissement de la ville.',
                    ],
                    [
                        'question' => 'Au bord de la mer, il fait 20 °C. La température baisse d’environ 0,65 °C tous les 100 m. À 1 000 m d’altitude, on attend environ :',
                        'choices' => [
                            ['choice_text' => '19,4 °C', 'is_correct' => false],
                            ['choice_text' => '6,5 °C', 'is_correct' => false],
                            ['choice_text' => '13,5 °C', 'is_correct' => true],
                            ['choice_text' => '26,5 °C', 'is_correct' => false],
                        ],
                        'explanation' => '1 000 m font dix fois 100 m : la baisse est de 10 × 0,65 = 6,5 °C, donc 20 − 6,5 = 13,5 °C.',
                    ],
                ],
            ],
            [
                'title' => 'Effet de serre et bilan énergétique',
                'description' => 'Acquérir les notions de base sur l’effet de serre, le rayonnement et l’albédo.',
                'settings' => ['duration' => 23, 'passing_score' => 55],
                'questions' => [
                    [
                        'question' => 'Le mécanisme de l’effet de serre naturel est que certains gaz de l’atmosphère…',
                        'choices' => [
                            ['choice_text' => 'absorbent et réémettent une partie du rayonnement infrarouge émis par la surface', 'is_correct' => true],
                            ['choice_text' => 'renvoient vers l’espace l’essentiel du rayonnement solaire', 'is_correct' => false],
                            ['choice_text' => 'absorbent le rayonnement ultraviolet pour protéger la surface des rayons nocifs du Soleil', 'is_correct' => false],
                            ['choice_text' => 'bloquent la lumière visible pour limiter l’ensoleillement', 'is_correct' => false],
                        ],
                        'explanation' => 'Ils renvoient une partie de la chaleur infrarouge vers le sol, ce qui réchauffe la surface par rapport à une Terre sans eux.',
                    ],
                    [
                        'question' => 'Quel gaz est un important gaz à effet de serre naturel ?',
                        'choices' => [
                            ['choice_text' => 'L’azote', 'is_correct' => false],
                            ['choice_text' => 'L’oxygène', 'is_correct' => false],
                            ['choice_text' => 'La vapeur d’eau', 'is_correct' => true],
                            ['choice_text' => 'L’argon', 'is_correct' => false],
                        ],
                        'explanation' => 'La vapeur d’eau est le gaz à effet de serre naturel le plus abondant. Le CO₂, le méthane et le protoxyde d’azote y contribuent aussi.',
                    ],
                    [
                        'question' => 'Le dioxyde de carbone atmosphérique est noté…',
                        'choices' => [
                            ['choice_text' => 'O₂', 'is_correct' => false],
                            ['choice_text' => 'CO', 'is_correct' => false],
                            ['choice_text' => 'CH₄', 'is_correct' => false],
                            ['choice_text' => 'CO₂', 'is_correct' => true],
                        ],
                        'explanation' => 'La formule du dioxyde de carbone est CO₂ : un atome de carbone lié à deux atomes d’oxygène.',
                    ],
                    [
                        'question' => 'Sans effet de serre naturel, la température moyenne de surface de la Terre serait d’environ :',
                        'choices' => [
                            ['choice_text' => '+15 °C', 'is_correct' => false],
                            ['choice_text' => '−18 °C', 'is_correct' => true],
                            ['choice_text' => '−60 °C', 'is_correct' => false],
                            ['choice_text' => '+35 °C', 'is_correct' => false],
                        ],
                        'explanation' => 'L’effet de serre naturel relève la moyenne d’environ −18 °C à +15 °C, soit à peu près 33 °C de plus.',
                    ],
                    [
                        'question' => 'Quand la concentration d’un gaz à effet de serre augmente, cela renforce…',
                        'choices' => [
                            ['choice_text' => 'le piégeage du rayonnement infrarouge dans le système climatique', 'is_correct' => true],
                            ['choice_text' => 'l’énergie émise par le Soleil', 'is_correct' => false],
                            ['choice_text' => 'la réflexion du rayonnement solaire par les glaces et les nuages polaires', 'is_correct' => false],
                            ['choice_text' => 'la quantité de lumière visible arrivant au sol', 'is_correct' => false],
                        ],
                        'explanation' => 'Plus il y a de gaz à effet de serre, plus l’atmosphère absorbe de rayonnement infrarouge, ce qui modifie l’équilibre énergétique.',
                    ],
                    [
                        'question' => 'L’essentiel de l’énergie que la Terre reçoit du Soleil arrive sous forme de :',
                        'choices' => [
                            ['choice_text' => 'rayonnement infrarouge thermique de grande longueur d’onde', 'is_correct' => false],
                            ['choice_text' => 'ondes radio de très basse fréquence', 'is_correct' => false],
                            ['choice_text' => 'rayons gamma très énergétiques', 'is_correct' => false],
                            ['choice_text' => 'lumière visible et proche infrarouge, de courte longueur d’onde', 'is_correct' => true],
                        ],
                        'explanation' => 'Le Soleil émet surtout dans les courtes longueurs d’onde, dont une partie atteint la surface et la chauffe.',
                    ],
                    [
                        'question' => 'La Terre renvoie vers l’espace une grande partie de son énergie sous forme de…',
                        'choices' => [
                            ['choice_text' => 'lumière visible', 'is_correct' => false],
                            ['choice_text' => 'rayons ultraviolets', 'is_correct' => false],
                            ['choice_text' => 'rayonnement infrarouge', 'is_correct' => true],
                            ['choice_text' => 'ondes radio', 'is_correct' => false],
                        ],
                        'explanation' => 'À la température de la surface terrestre, l’émission se fait surtout dans l’infrarouge, que les gaz à effet de serre absorbent.',
                    ],
                    [
                        'question' => 'Au bilan d’énergie, les nuages jouent un double rôle : ils…',
                        'choices' => [
                            ['choice_text' => 'ne font que transporter de l’eau, sans effet sur le rayonnement', 'is_correct' => false],
                            ['choice_text' => 'renvoient une partie de la lumière solaire et retiennent une partie de la chaleur infrarouge', 'is_correct' => true],
                            ['choice_text' => 'absorbent la lumière visible mais laissent filer la chaleur infrarouge', 'is_correct' => false],
                            ['choice_text' => 'réfléchissent la chaleur infrarouge vers l’espace mais laissent passer la lumière visible jusqu’au sol', 'is_correct' => false],
                        ],
                        'explanation' => 'Selon leur altitude et leur épaisseur, l’un ou l’autre effet l’emporte, mais les deux existent.',
                    ],
                    [
                        'question' => 'Un toit noir chauffe davantage au soleil qu’un toit blanc. Quelle propriété de la surface intervient ?',
                        'choices' => [
                            ['choice_text' => 'La capacité thermique', 'is_correct' => false],
                            ['choice_text' => 'L’humidité relative', 'is_correct' => false],
                            ['choice_text' => 'La conductivité électrique', 'is_correct' => false],
                            ['choice_text' => 'L’albédo', 'is_correct' => true],
                        ],
                        'explanation' => 'L’albédo est la fraction du rayonnement solaire réfléchie : une surface sombre en réfléchit peu et en absorbe beaucoup.',
                    ],
                    [
                        'question' => 'En fondant, la neige laisse apparaître un sol plus sombre. Quelle conséquence cela a-t-il sur le réchauffement local ?',
                        'choices' => [
                            ['choice_text' => 'il diminue : le sol sombre réfléchit plus de lumière que la neige', 'is_correct' => false],
                            ['choice_text' => 'il ne change pas : la couleur de la surface n’influence pas l’énergie absorbée', 'is_correct' => false],
                            ['choice_text' => 'il augmente : le sol absorbe davantage d’énergie solaire qu’avant', 'is_correct' => true],
                            ['choice_text' => 'il disparaît : l’eau de fonte emporte la chaleur', 'is_correct' => false],
                        ],
                        'explanation' => 'La neige réfléchit l’essentiel de la lumière, un sol nu l’absorbe : la fonte entretient donc le réchauffement.',
                    ],
                ],
            ],
            [
                'title' => 'Les saisons sur Terre',
                'description' => 'Relier les saisons à l’inclinaison de l’axe terrestre et à la révolution autour du Soleil.',
                'settings' => ['duration' => 19, 'passing_score' => 50],
                'questions' => [
                    [
                        'question' => 'Les saisons sur Terre s’expliquent par :',
                        'choices' => [
                            ['choice_text' => 'les variations de la distance Terre-Soleil au cours de l’année', 'is_correct' => false],
                            ['choice_text' => 'l’inclinaison de l’axe de la Terre et sa révolution autour du Soleil', 'is_correct' => true],
                            ['choice_text' => 'la rotation de la Terre sur elle-même en 24 heures', 'is_correct' => false],
                            ['choice_text' => 'les variations d’activité du Soleil, avec ses taches, d’un mois à l’autre', 'is_correct' => false],
                        ],
                        'explanation' => 'L’axe incliné fait varier au fil de l’année l’angle des rayons solaires et la durée du jour dans chaque hémisphère.',
                    ],
                    [
                        'question' => 'Par rapport à la perpendiculaire au plan de son orbite, l’axe de rotation de la Terre est incliné d’environ :',
                        'choices' => [
                            ['choice_text' => '0°', 'is_correct' => false],
                            ['choice_text' => '45°', 'is_correct' => false],
                            ['choice_text' => '66,5°', 'is_correct' => false],
                            ['choice_text' => '23,5°', 'is_correct' => true],
                        ],
                        'explanation' => 'Cette inclinaison de 23,5° provoque les saisons. L’angle de 66,5° est celui de l’axe avec le plan de l’orbite.',
                    ],
                    [
                        'question' => 'Quand c’est l’été à Rabat, c’est l’hiver à Santiago du Chili. Cela s’explique par le fait que :',
                        'choices' => [
                            ['choice_text' => 'les deux hémisphères sont inclinés à tour de rôle vers le Soleil', 'is_correct' => true],
                            ['choice_text' => 'le Sud est plus éloigné du Soleil que le Nord durant l’année entière', 'is_correct' => false],
                            ['choice_text' => 'la Terre ralentit sa rotation dans l’hémisphère Sud', 'is_correct' => false],
                            ['choice_text' => 'les vents changent de sens au passage de l’équateur', 'is_correct' => false],
                        ],
                        'explanation' => 'Lorsque le Nord reçoit plus de lumière directe, le Sud en reçoit moins, et l’inverse six mois plus tard.',
                    ],
                    [
                        'question' => 'En juin à Rabat, il fait plus chaud qu’en décembre et le Soleil monte plus haut dans le ciel. Comment l’expliquer ?',
                        'choices' => [
                            ['choice_text' => 'la Terre se rapproche alors du Soleil de plusieurs dizaines de millions de kilomètres', 'is_correct' => false],
                            ['choice_text' => 'l’océan Atlantique réchauffe l’air en permanence', 'is_correct' => false],
                            ['choice_text' => 'les rayons sont plus directs et les journées plus longues, donc l’énergie augmente', 'is_correct' => true],
                            ['choice_text' => 'l’atmosphère est plus mince au-dessus de la ville', 'is_correct' => false],
                        ],
                        'explanation' => 'Un Soleil haut concentre l’énergie sur une plus petite surface et reste plus longtemps visible.',
                    ],
                    [
                        'question' => 'À l’équinoxe, le jour et la nuit durent :',
                        'choices' => [
                            ['choice_text' => 'moins de 8 heures de jour dans les deux hémisphères', 'is_correct' => false],
                            ['choice_text' => 'à peu près autant, soit environ 12 heures chacun', 'is_correct' => true],
                            ['choice_text' => 'plus de 16 heures de jour dans l’hémisphère Nord', 'is_correct' => false],
                            ['choice_text' => '24 heures de jour dans l’hémisphère Sud', 'is_correct' => false],
                        ],
                        'explanation' => 'Aux équinoxes, vers le 21 mars et le 23 septembre, le jour et la nuit durent chacun environ 12 heures presque partout.',
                    ],
                    [
                        'question' => 'Vers le 21 juin, dans l’hémisphère Nord, on observe :',
                        'choices' => [
                            ['choice_text' => 'le jour le plus court de l’année', 'is_correct' => false],
                            ['choice_text' => 'l’égalité du jour et de la nuit', 'is_correct' => false],
                            ['choice_text' => 'le jour le plus long de l’année', 'is_correct' => true],
                            ['choice_text' => 'le passage de la Terre au plus près du Soleil', 'is_correct' => false],
                        ],
                        'explanation' => 'C’est le solstice d’été : le Soleil atteint sa hauteur maximale et la durée du jour son maximum.',
                    ],
                    [
                        'question' => 'Au nord du cercle polaire, le Soleil ne se couche pas pendant des semaines en été. Quelle en est la cause ?',
                        'choices' => [
                            ['choice_text' => 'l’inclinaison de l’axe terrestre garde ces régions face au Soleil', 'is_correct' => true],
                            ['choice_text' => 'les pôles se rapprochent du Soleil de plusieurs millions de kilomètres', 'is_correct' => false],
                            ['choice_text' => 'la rotation de la Terre ralentit fortement près des pôles', 'is_correct' => false],
                            ['choice_text' => 'la glace stocke la lumière du jour et la restitue la nuit', 'is_correct' => false],
                        ],
                        'explanation' => 'En été, l’axe incliné maintient ces latitudes dans la lumière pendant toute la rotation de la Terre.',
                    ],
                    [
                        'question' => 'Début juillet, la Terre est à son point le plus éloigné du Soleil, et pourtant c’est l’été dans l’hémisphère Nord. Les saisons dépendent donc surtout :',
                        'choices' => [
                            ['choice_text' => 'de la distance entre la Terre et le Soleil', 'is_correct' => false],
                            ['choice_text' => 'de la vitesse de rotation de la Terre', 'is_correct' => false],
                            ['choice_text' => 'de l’activité des taches solaires', 'is_correct' => false],
                            ['choice_text' => 'de l’inclinaison de l’axe, pas de la distance au Soleil', 'is_correct' => true],
                        ],
                        'explanation' => 'L’écart de distance, environ 5 millions de km, est trop faible pour compter : l’inclinaison de l’axe fait la différence.',
                    ],
                    [
                        'question' => 'Combien de temps la Terre met-elle pour faire un tour sur elle-même, puis un tour autour du Soleil ?',
                        'choices' => [
                            ['choice_text' => 'environ 365 jours pour la rotation, environ 24 heures pour la révolution', 'is_correct' => false],
                            ['choice_text' => 'environ 24 heures pour la rotation, environ 365 jours pour la révolution', 'is_correct' => true],
                            ['choice_text' => 'environ 24 heures pour la rotation, environ 30 jours pour la révolution', 'is_correct' => false],
                            ['choice_text' => 'environ 30 jours pour la rotation, environ 365 jours pour la révolution', 'is_correct' => false],
                        ],
                        'explanation' => 'La rotation sur l’axe dure un jour, la révolution autour du Soleil dure un an.',
                    ],
                    [
                        'question' => 'À Rabat, le jour dure environ 14 h en juin et 10 h en décembre. Quel facteur crée cette variation ?',
                        'choices' => [
                            ['choice_text' => 'l’inclinaison de l’axe, qui change la trajectoire apparente du Soleil selon la saison', 'is_correct' => true],
                            ['choice_text' => 'la variation de taille apparente du Soleil', 'is_correct' => false],
                            ['choice_text' => 'l’évolution du champ magnétique terrestre, qui dévie le rayonnement du Soleil selon la saison', 'is_correct' => false],
                            ['choice_text' => 'la vitesse de rotation de la Terre, plus lente en été', 'is_correct' => false],
                        ],
                        'explanation' => 'Selon la saison, le Soleil reste plus ou moins longtemps au-dessus de l’horizon à une latitude donnée.',
                    ],
                    [
                        'question' => 'En juillet, au Cap, en Afrique du Sud, c’est :',
                        'choices' => [
                            ['choice_text' => 'l’été', 'is_correct' => false],
                            ['choice_text' => 'le printemps', 'is_correct' => false],
                            ['choice_text' => 'l’hiver', 'is_correct' => true],
                            ['choice_text' => 'l’automne', 'is_correct' => false],
                        ],
                        'explanation' => 'Les saisons sont inversées entre les hémisphères : juillet est un mois d’hiver dans l’hémisphère Sud.',
                    ],
                ],
            ],
            [
                'title' => 'Océan, atmosphère et circulation',
                'description' => 'Comprendre le rôle des courants océaniques et de la circulation atmosphérique dans le climat.',
                'settings' => ['duration' => 24, 'passing_score' => 60],
                'questions' => [
                    [
                        'question' => 'Le Gulf Stream, un courant chaud, transporte de l’eau tiède vers l’Atlantique Nord. Quel rôle climatique joue-t-il ?',
                        'choices' => [
                            ['choice_text' => 'il refroidit l’Atlantique Nord et réduit les pluies', 'is_correct' => false],
                            ['choice_text' => 'il bloque les vents d’ouest sur l’Europe', 'is_correct' => false],
                            ['choice_text' => 'il augmente la salinité de l’océan Arctique', 'is_correct' => false],
                            ['choice_text' => 'il redistribue de la chaleur des basses vers les hautes latitudes', 'is_correct' => true],
                        ],
                        'explanation' => 'En déplaçant de l’eau chaude vers le nord, il adoucit le climat des côtes qu’il longe.',
                    ],
                    [
                        'question' => 'La circulation générale de l’atmosphère contribue à :',
                        'choices' => [
                            ['choice_text' => 'redistribuer la chaleur entre régions tropicales et hautes latitudes', 'is_correct' => true],
                            ['choice_text' => 'réfléchir la lumière du Soleil vers l’espace', 'is_correct' => false],
                            ['choice_text' => 'figer les masses d’air au-dessus des continents', 'is_correct' => false],
                            ['choice_text' => 'stocker la chaleur dans les profondeurs océaniques pendant plusieurs siècles', 'is_correct' => false],
                        ],
                        'explanation' => 'Les mouvements de l’air transportent chaleur et humidité des tropiques vers les régions plus froides.',
                    ],
                    [
                        'question' => 'L’air chaud s’élève au-dessus des régions tropicales. Cela s’explique par le fait que, une fois chauffé, l’air est :',
                        'choices' => [
                            ['choice_text' => 'plus dense, donc plus lourd', 'is_correct' => false],
                            ['choice_text' => 'plus humide, donc attiré par les nuages', 'is_correct' => false],
                            ['choice_text' => 'moins dense, donc plus léger', 'is_correct' => true],
                            ['choice_text' => 'plus rapide, donc poussé vers le haut par la rotation', 'is_correct' => false],
                        ],
                        'explanation' => 'Chauffé, l’air se dilate : sa densité baisse et il monte, comme l’air chaud d’un ballon.',
                    ],
                    [
                        'question' => 'Lorsqu’une masse d’air monte et se détend, sa température a tendance à :',
                        'choices' => [
                            ['choice_text' => 'monter nettement à cause de la pression', 'is_correct' => false],
                            ['choice_text' => 'baisser', 'is_correct' => true],
                            ['choice_text' => 'rester constante', 'is_correct' => false],
                            ['choice_text' => 'osciller sans tendance', 'is_correct' => false],
                        ],
                        'explanation' => 'En altitude la pression diminue, l’air se détend et se refroidit, ce qui peut déclencher la condensation.',
                    ],
                    [
                        'question' => 'Un courant froid longe une côte. Quel effet local peut-il avoir sur l’atmosphère voisine ?',
                        'choices' => [
                            ['choice_text' => 'Il réchauffe l’air côtier et favorise les pluies abondantes sur la côte', 'is_correct' => false],
                            ['choice_text' => 'Il déclenche des cyclones sur la côte', 'is_correct' => false],
                            ['choice_text' => 'Il rend l’eau plus salée et l’air plus humide', 'is_correct' => false],
                            ['choice_text' => 'Il peut refroidir l’air au-dessus de l’océan et limiter l’évaporation', 'is_correct' => true],
                        ],
                        'explanation' => 'Une eau froide s’évapore peu : l’air reste frais et sec au-dessus d’elle.',
                    ],
                    [
                        'question' => 'Aux basses latitudes, les alizés soufflent :',
                        'choices' => [
                            ['choice_text' => 'de l’équateur vers les pôles', 'is_correct' => false],
                            ['choice_text' => 'des pôles vers les tropiques', 'is_correct' => false],
                            ['choice_text' => 'des tropiques vers l’équateur', 'is_correct' => true],
                            ['choice_text' => 'd’ouest en est autour des tropiques', 'is_correct' => false],
                        ],
                        'explanation' => 'Les alizés convergent vers l’équateur : du nord-est dans l’hémisphère Nord, du sud-est dans l’hémisphère Sud.',
                    ],
                    [
                        'question' => 'El Niño est un phénomène climatique qui concerne d’abord :',
                        'choices' => [
                            ['choice_text' => 'les températures de surface du Pacifique équatorial', 'is_correct' => true],
                            ['choice_text' => 'la salinité des fleuves d’Amérique du Sud', 'is_correct' => false],
                            ['choice_text' => 'la hauteur des marées dans l’Atlantique Nord', 'is_correct' => false],
                            ['choice_text' => 'l’intensité des éruptions volcaniques', 'is_correct' => false],
                        ],
                        'explanation' => 'El Niño est un réchauffement anormal des eaux de surface du Pacifique équatorial central et oriental.',
                    ],
                    [
                        'question' => 'La Niña est en quelque sorte le contraire d’El Niño. Elle correspond à :',
                        'choices' => [
                            ['choice_text' => 'un réchauffement anormal des eaux de surface du Pacifique équatorial et de l’Atlantique', 'is_correct' => false],
                            ['choice_text' => 'un refroidissement anormal des eaux de surface du Pacifique équatorial', 'is_correct' => true],
                            ['choice_text' => 'un refroidissement de l’atmosphère à l’échelle du globe entier', 'is_correct' => false],
                            ['choice_text' => 'une inversion du sens des courants dans l’Atlantique', 'is_correct' => false],
                        ],
                        'explanation' => 'Pendant La Niña, les eaux de surface du Pacifique équatorial sont plus froides que la moyenne.',
                    ],
                    [
                        'question' => 'Quelle part de la surface de la Terre les océans couvrent-ils ?',
                        'choices' => [
                            ['choice_text' => 'environ 70 %', 'is_correct' => true],
                            ['choice_text' => 'environ 30 %', 'is_correct' => false],
                            ['choice_text' => 'environ 50 %', 'is_correct' => false],
                            ['choice_text' => 'environ 90 %', 'is_correct' => false],
                        ],
                        'explanation' => 'Les océans occupent environ 71 % de la surface du globe, ce qui explique leur poids dans le climat.',
                    ],
                    [
                        'question' => 'Entre un anticyclone et une dépression voisins, le vent souffle :',
                        'choices' => [
                            ['choice_text' => 'des basses pressions vers les hautes pressions', 'is_correct' => false],
                            ['choice_text' => 'des zones humides vers les zones sèches', 'is_correct' => false],
                            ['choice_text' => 'du nord vers le sud', 'is_correct' => false],
                            ['choice_text' => 'des hautes pressions vers les basses pressions', 'is_correct' => true],
                        ],
                        'explanation' => 'L’air se déplace des zones de haute pression vers les zones de basse pression, comme l’eau descend une pente.',
                    ],
                ],
            ],
            [
                'title' => 'Lire des données climatiques',
                'description' => 'Interpréter simplement moyennes, précipitations, courbes et variabilité climatique.',
                'settings' => ['duration' => 21, 'passing_score' => 55],
                'questions' => [
                    [
                        'question' => 'Une série de températures annuelles montre une hausse sur plusieurs décennies, avec des variations d’une année à l’autre. Que décrit-elle ?',
                        'choices' => [
                            ['choice_text' => 'Le temps qu’il fait un jour donné', 'is_correct' => false],
                            ['choice_text' => 'Un cycle saisonnier qui se répète chaque année', 'is_correct' => false],
                            ['choice_text' => 'Une tendance climatique avec une variabilité d’une année à l’autre', 'is_correct' => true],
                            ['choice_text' => 'Une panne d’instrument sans valeur scientifique', 'is_correct' => false],
                        ],
                        'explanation' => 'Une tendance se dégage d’une série longue malgré les fluctuations naturelles d’une année à l’autre.',
                    ],
                    [
                        'question' => 'Pour décrire le climat d’une ville, un climatologue calcule des moyennes sur plusieurs décennies plutôt que sur un mois. Quel est l’intérêt ?',
                        'choices' => [
                            ['choice_text' => 'les valeurs extrêmes sont supprimées des données avant de calculer la moyenne', 'is_correct' => false],
                            ['choice_text' => 'les fluctuations de court terme se compensent et le régime habituel apparaît', 'is_correct' => true],
                            ['choice_text' => 'on évite d’avoir à mesurer chaque jour', 'is_correct' => false],
                            ['choice_text' => 'les résultats sont ajustés pour paraître plus chauds', 'is_correct' => false],
                        ],
                        'explanation' => 'Sur une longue durée, les écarts ponctuels s’annulent en partie et le comportement habituel du climat apparaît.',
                    ],
                    [
                        'question' => 'Une station mesure 10, 12 et 14 °C lors de trois matinées. La moyenne simple est…',
                        'choices' => [
                            ['choice_text' => '12 °C', 'is_correct' => true],
                            ['choice_text' => '10 °C', 'is_correct' => false],
                            ['choice_text' => '14 °C', 'is_correct' => false],
                            ['choice_text' => '36 °C', 'is_correct' => false],
                        ],
                        'explanation' => 'La moyenne est (10 + 12 + 14) / 3 = 12 °C.',
                    ],
                    [
                        'question' => 'Un graphique montre 800 mm de pluie en 2024 et 600 mm en 2025. La baisse entre les deux années est de…',
                        'choices' => [
                            ['choice_text' => '1 400 mm', 'is_correct' => false],
                            ['choice_text' => '100 mm', 'is_correct' => false],
                            ['choice_text' => '300 mm', 'is_correct' => false],
                            ['choice_text' => '200 mm', 'is_correct' => true],
                        ],
                        'explanation' => 'La différence est 800 - 600 = 200 mm de précipitations.',
                    ],
                    [
                        'question' => 'Ifrane affiche une moyenne annuelle de 12 °C et Agadir de 20 °C. Un jour d’hiver, Ifrane relève 14 °C et Agadir 13 °C. Est-ce contradictoire ?',
                        'choices' => [
                            ['choice_text' => 'Oui : un des deux thermomètres est certainement déréglé', 'is_correct' => false],
                            ['choice_text' => 'Non : une moyenne annuelle ne dit rien de chaque journée', 'is_correct' => true],
                            ['choice_text' => 'Oui : la moyenne annuelle impose la température de chaque jour', 'is_correct' => false],
                            ['choice_text' => 'Oui : l’altitude d’Ifrane rend ses relevés peu fiables', 'is_correct' => false],
                        ],
                        'explanation' => 'Une moyenne résume toute une période. Le temps d’un jour donné peut s’en écarter nettement.',
                    ],
                    [
                        'question' => 'Un diagramme ombrothermique combine des barres de précipitations mensuelles et une courbe de températures. Il sert à :',
                        'choices' => [
                            ['choice_text' => 'prévoir l’heure d’arrivée du prochain orage', 'is_correct' => false],
                            ['choice_text' => 'comparer les températures relevées le même jour dans plusieurs villes du pays', 'is_correct' => false],
                            ['choice_text' => 'mesurer la hauteur des nuages au-dessus de la station', 'is_correct' => false],
                            ['choice_text' => 'visualiser le régime annuel des pluies et des températures d’un lieu', 'is_correct' => true],
                        ],
                        'explanation' => 'On lit d’un coup d’œil les mois humides, les mois secs, les saisons chaudes et froides.',
                    ],
                    [
                        'question' => 'Dans l’hémisphère Nord, la courbe de température d’une ville est au plus haut en juillet et au plus bas en janvier. Cela correspond à :',
                        'choices' => [
                            ['choice_text' => 'un cycle saisonnier annuel normal', 'is_correct' => true],
                            ['choice_text' => 'une panne du thermomètre en hiver', 'is_correct' => false],
                            ['choice_text' => 'un effet de l’altitude de la station', 'is_correct' => false],
                            ['choice_text' => 'une tendance climatique durable', 'is_correct' => false],
                        ],
                        'explanation' => 'Le maximum estival et le minimum hivernal se répètent chaque année dans l’hémisphère Nord.',
                    ],
                    [
                        'question' => 'Une année très pluvieuse suivie d’une année très sèche dans la même région montre surtout…',
                        'choices' => [
                            ['choice_text' => 'que le climat de la région a basculé', 'is_correct' => false],
                            ['choice_text' => 'une erreur dans les relevés du pluviomètre', 'is_correct' => false],
                            ['choice_text' => 'la variabilité du climat d’une année à l’autre', 'is_correct' => true],
                            ['choice_text' => 'l’arrivée d’une nouvelle saison', 'is_correct' => false],
                        ],
                        'explanation' => 'Les conditions varient d’une année à l’autre : cette variabilité fait partie du climat.',
                    ],
                    [
                        'question' => 'Les relevés mensuels d’une station, en mm, sont : 60, 50, 40, 30, 10, 0, 0, 0, 10, 40, 60, 70. Le cumul annuel est de :',
                        'choices' => [
                            ['choice_text' => '330 mm', 'is_correct' => false],
                            ['choice_text' => '370 mm', 'is_correct' => true],
                            ['choice_text' => '380 mm', 'is_correct' => false],
                            ['choice_text' => '450 mm', 'is_correct' => false],
                        ],
                        'explanation' => 'On additionne les douze mois : 60 + 50 + 40 + 30 + 10 + 10 + 40 + 60 + 70 = 370 mm.',
                    ],
                    [
                        'question' => 'Une station relève une température moyenne de 25 °C en juillet et de 5 °C en janvier. L’amplitude thermique annuelle est de :',
                        'choices' => [
                            ['choice_text' => '20 °C', 'is_correct' => true],
                            ['choice_text' => '30 °C', 'is_correct' => false],
                            ['choice_text' => '15 °C', 'is_correct' => false],
                            ['choice_text' => '5 °C', 'is_correct' => false],
                        ],
                        'explanation' => 'L’amplitude est l’écart entre le mois le plus chaud et le mois le plus froid : 25 − 5 = 20 °C.',
                    ],
                ],
            ],
            [
                'title' => 'Cas climatiques du quotidien',
                'description' => 'Appliquer les facteurs climatiques à des situations locales réalistes.',
                'settings' => ['duration' => 25, 'passing_score' => 60],
                'questions' => [
                    [
                        'question' => 'Dans la plupart des villes, la température de l’air est maximale vers 15 h plutôt qu’à midi. L’explication est que :',
                        'choices' => [
                            ['choice_text' => 'le sol accumule de la chaleur tant qu’il en reçoit plus qu’il n’en perd', 'is_correct' => true],
                            ['choice_text' => 'le Soleil est à son point le plus haut dans le ciel vers 15 h, heure locale', 'is_correct' => false],
                            ['choice_text' => 'le Soleil se rapproche de la Terre en milieu d’après-midi', 'is_correct' => false],
                            ['choice_text' => 'les nuages se dissipent chaque jour à midi', 'is_correct' => false],
                        ],
                        'explanation' => 'Le sol stocke l’énergie reçue et ne commence à se refroidir que lorsque le Soleil baisse assez.',
                    ],
                    [
                        'question' => 'Une nuit d’hiver sans nuage est souvent plus froide qu’une nuit couverte. Quelle est l’explication ?',
                        'choices' => [
                            ['choice_text' => 'les nuages produisent du froid en évaporant leur eau', 'is_correct' => false],
                            ['choice_text' => 'un ciel dégagé laisse passer plus de rayonnement solaire la nuit qu’un ciel couvert', 'is_correct' => false],
                            ['choice_text' => 'l’air sans nuage est plus dense, donc plus froid', 'is_correct' => false],
                            ['choice_text' => 'sans nuages, le sol perd plus facilement sa chaleur par rayonnement infrarouge', 'is_correct' => true],
                        ],
                        'explanation' => 'Les nuages renvoient vers le sol une partie de la chaleur infrarouge et ralentissent le refroidissement.',
                    ],
                    [
                        'question' => 'La carte météo du jour montre un anticyclone sur le Maroc. Le temps le plus probable est :',
                        'choices' => [
                            ['choice_text' => 'instable, avec orages et vent violent', 'is_correct' => false],
                            ['choice_text' => 'stable, avec peu de nuages et peu de pluie', 'is_correct' => true],
                            ['choice_text' => 'pluvieux, avec un ciel couvert', 'is_correct' => false],
                            ['choice_text' => 'brumeux, avec des chutes de neige', 'is_correct' => false],
                        ],
                        'explanation' => 'Un anticyclone est une zone de hautes pressions où l’air descend : les nuages se forment peu.',
                    ],
                    [
                        'question' => 'À Rabat, la mairie plante des arbres le long d’une avenue pour réduire la chaleur estivale. Quel est l’effet attendu ?',
                        'choices' => [
                            ['choice_text' => 'les arbres renvoient la lumière du Soleil vers l’espace comme un grand miroir', 'is_correct' => false],
                            ['choice_text' => 'les feuilles dégagent de la chaleur pour attirer la pluie', 'is_correct' => false],
                            ['choice_text' => 'l’ombre et l’évapotranspiration absorbent une partie de l’énergie solaire', 'is_correct' => true],
                            ['choice_text' => 'les racines refroidissent le sous-sol de la ville entière', 'is_correct' => false],
                        ],
                        'explanation' => 'Les feuilles font de l’ombre, et l’eau qu’elles évaporent consomme de l’énergie, ce qui rafraîchit l’air.',
                    ],
                    [
                        'question' => 'À Casablanca, 32 °C avec un air très humide paraissent plus étouffants que 32 °C à Marrakech. Quelle en est la raison ?',
                        'choices' => [
                            ['choice_text' => 'la température réelle est plus élevée à Casablanca que le thermomètre ne l’indique', 'is_correct' => false],
                            ['choice_text' => 'l’air humide est plus dense, donc plus chaud', 'is_correct' => false],
                            ['choice_text' => 'le vent d’ouest réchauffe la peau', 'is_correct' => false],
                            ['choice_text' => 'l’air humide freine l’évaporation de la sueur, donc le refroidissement du corps', 'is_correct' => true],
                        ],
                        'explanation' => 'Transpirer refroidit surtout quand la sueur s’évapore, et l’air humide limite cette évaporation.',
                    ],
                    [
                        'question' => 'Ce mois-ci, une station a reçu 45 mm de pluie alors que la normale du mois est de 60 mm. L’anomalie vaut :',
                        'choices' => [
                            ['choice_text' => '+15 mm, soit un excédent de 25 %', 'is_correct' => false],
                            ['choice_text' => '−15 mm, soit un déficit de 25 %', 'is_correct' => true],
                            ['choice_text' => '−15 mm, soit un déficit de 33 %', 'is_correct' => false],
                            ['choice_text' => '−45 mm, soit un déficit de 75 %', 'is_correct' => false],
                        ],
                        'explanation' => 'L’écart est 45 − 60 = −15 mm, et −15 ÷ 60 = −25 %.',
                    ],
                    [
                        'question' => 'Deux régions reçoivent 500 mm de pluie par an, mais l’une est couverte de forêt et l’autre de steppe. Comment l’expliquer ?',
                        'choices' => [
                            ['choice_text' => 'la forêt exige plus de 500 mm, donc l’une des deux mesures est fausse', 'is_correct' => false],
                            ['choice_text' => 'la végétation dépend des choix des habitants, pas du climat', 'is_correct' => false],
                            ['choice_text' => 'la répartition des pluies, les températures et les sols ne sont pas les mêmes', 'is_correct' => true],
                            ['choice_text' => 'la quantité de pluie annuelle détermine à elle seule le type de végétation d’une région', 'is_correct' => false],
                        ],
                        'explanation' => 'Un total annuel ne dit rien de la saisonnalité des pluies, ni de la chaleur ou du sol, qui comptent tout autant.',
                    ],
                    [
                        'question' => 'Une station du nord du Maroc relève 100 mm de pluie en janvier et 20 mm en juillet. Combien de fois plus de pluie tombe-t-il en janvier qu’en juillet ?',
                        'choices' => [
                            ['choice_text' => '5 fois', 'is_correct' => true],
                            ['choice_text' => '4 fois', 'is_correct' => false],
                            ['choice_text' => '80 fois', 'is_correct' => false],
                            ['choice_text' => '120 fois', 'is_correct' => false],
                        ],
                        'explanation' => 'On divise : 100 ÷ 20 = 5. La différence de 80 mm n’est pas un rapport.',
                    ],
                    [
                        'question' => 'Le remplacement d’une forêt par une zone urbaine modifie le climat local. Quelles propriétés de la surface changent ?',
                        'choices' => [
                            ['choice_text' => 'sa latitude, son altitude et sa distance à l’océan', 'is_correct' => false],
                            ['choice_text' => 'sa salinité, son pH et sa teneur en azote', 'is_correct' => false],
                            ['choice_text' => 'son albédo, son évapotranspiration et sa capacité à stocker la chaleur', 'is_correct' => true],
                            ['choice_text' => 'sa longitude, son fuseau horaire et son orientation par rapport au pôle magnétique', 'is_correct' => false],
                        ],
                        'explanation' => 'Béton et bitume réfléchissent, évaporent et stockent l’énergie autrement que des arbres, ce qui change le microclimat.',
                    ],
                    [
                        'question' => 'Pour comparer le climat de Fès et celui de Tanger, Salma hésite entre plusieurs données. Laquelle choisir ?',
                        'choices' => [
                            ['choice_text' => 'les relevés d’une seule journée de chaque ville', 'is_correct' => false],
                            ['choice_text' => 'les moyennes mensuelles de température et de pluie sur 30 ans', 'is_correct' => true],
                            ['choice_text' => 'la photo satellite des nuages de la veille', 'is_correct' => false],
                            ['choice_text' => 'la vitesse du vent mesurée ce matin', 'is_correct' => false],
                        ],
                        'explanation' => 'Seules des séries longues décrivent le régime habituel d’un lieu. Un seul jour ne dit presque rien du climat.',
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
                    'duration' => $settings['duration'] ?? 10,
                    'passing_score' => $settings['passing_score'] ?? 80,
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