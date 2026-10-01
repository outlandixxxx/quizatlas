<?php

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class EnvironmentalBiologyBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'environmental-biology')->firstOrFail();

        $quizzes = [
            [
                'title' => 'Introduction à la biologie environnementale',
                'description' => 'Comprendre les relations entre les organismes, les milieux naturels et les activités humaines.',
                'settings' => ['duration' => 15, 'passing_score' => 50],
                'questions' => [
                    [
                        'question' => 'La biologie environnementale étudie principalement :',
                        'choices' => [
                            ['choice_text' => 'les relations entre les êtres vivants, leur environnement et les activités humaines', 'is_correct' => true],
                            ['choice_text' => 'uniquement la structure des chromosomes', 'is_correct' => false],
                            ['choice_text' => 'uniquement la formation des roches', 'is_correct' => false],
                            ['choice_text' => 'uniquement la digestion humaine', 'is_correct' => false],
                        ],
                        'explanation' => 'La biologie environnementale s\'intéresse au vivant dans son environnement, aux interactions écologiques et aux effets des activités humaines.',
                    ],
                    [
                        'question' => 'Lequel est un élément biotique d\'un milieu ?',
                        'choices' => [
                            ['choice_text' => 'une population de poissons', 'is_correct' => true],
                            ['choice_text' => 'la température de l\'eau', 'is_correct' => false],
                            ['choice_text' => 'le pH du sol', 'is_correct' => false],
                            ['choice_text' => 'la lumière solaire', 'is_correct' => false],
                        ],
                        'explanation' => 'Un facteur biotique provient du vivant ; les poissons font donc partie des composantes biotiques du milieu.',
                    ],
                    [
                        'question' => 'Lequel est un facteur abiotique ?',
                        'choices' => [
                            ['choice_text' => 'la salinité de l\'eau', 'is_correct' => true],
                            ['choice_text' => 'la prédation', 'is_correct' => false],
                            ['choice_text' => 'la compétition', 'is_correct' => false],
                            ['choice_text' => 'le parasitisme', 'is_correct' => false],
                        ],
                        'explanation' => 'La salinité est un facteur physico-chimique non vivant, donc abiotique.',
                    ],
                    [
                        'question' => 'Un environnement comprenant des organismes vivants et des éléments non vivants qui interagissent constitue :',
                        'choices' => [
                            ['choice_text' => 'un écosystème', 'is_correct' => true],
                            ['choice_text' => 'une population', 'is_correct' => false],
                            ['choice_text' => 'une espèce', 'is_correct' => false],
                            ['choice_text' => 'un organe', 'is_correct' => false],
                        ],
                        'explanation' => 'Un écosystème associe une communauté biologique et les facteurs abiotiques de son milieu.',
                    ],
                    [
                        'question' => 'Pourquoi la qualité de l\'eau est-elle importante pour la biodiversité aquatique ?',
                        'choices' => [
                            ['choice_text' => 'Parce qu\'elle influence directement les conditions de survie et de reproduction des organismes', 'is_correct' => true],
                            ['choice_text' => 'Parce que tous les organismes ont exactement les mêmes besoins', 'is_correct' => false],
                            ['choice_text' => 'Parce qu\'elle ne joue aucun rôle dans les écosystèmes', 'is_correct' => false],
                            ['choice_text' => 'Parce qu\'elle remplace l\'énergie solaire', 'is_correct' => false],
                        ],
                        'explanation' => 'La température, l\'oxygène dissous, le pH, les nutriments et les polluants influencent les organismes aquatiques.',
                    ],
                    [
                        'question' => 'Une zone humide peut être considérée comme importante sur le plan environnemental parce qu\'elle :',
                        'choices' => [
                            ['choice_text' => 'offre des habitats et peut participer au stockage et à la filtration de l\'eau', 'is_correct' => true],
                            ['choice_text' => 'empêche toute vie animale', 'is_correct' => false],
                            ['choice_text' => 'produit uniquement des minéraux', 'is_correct' => false],
                            ['choice_text' => 'fonctionne sans interactions biologiques', 'is_correct' => false],
                        ],
                        'explanation' => 'Les zones humides offrent des habitats variés et jouent plusieurs rôles hydrologiques et écologiques.',
                    ],
                    [
                        'question' => 'Une ressource naturelle est dite renouvelable lorsqu\'elle :',
                        'choices' => [
                            ['choice_text' => 'peut se reconstituer naturellement sur une période compatible avec son utilisation', 'is_correct' => true],
                            ['choice_text' => 'existe en quantité infinie', 'is_correct' => false],
                            ['choice_text' => 'n\'est jamais exploitée', 'is_correct' => false],
                            ['choice_text' => 'est toujours disponible sans limite', 'is_correct' => false],
                        ],
                        'explanation' => 'Une ressource renouvelable peut se reconstituer, mais une surexploitation peut tout de même la rendre non durable.',
                    ],
                    [
                        'question' => 'Quel exemple représente une pression humaine sur un écosystème ?',
                        'choices' => [
                            ['choice_text' => 'la conversion d\'une forêt en zone urbaine', 'is_correct' => true],
                            ['choice_text' => 'la pollinisation naturelle', 'is_correct' => false],
                            ['choice_text' => 'la germination d\'une graine', 'is_correct' => false],
                            ['choice_text' => 'la reproduction d\'un poisson', 'is_correct' => false],
                        ],
                        'explanation' => 'La conversion d\'un habitat naturel modifie les conditions du milieu et peut provoquer une perte de biodiversité.',
                    ],
                    [
                        'question' => 'Un service écosystémique correspond :',
                        'choices' => [
                            ['choice_text' => 'à un bénéfice fourni par les écosystèmes aux sociétés humaines', 'is_correct' => true],
                            ['choice_text' => 'à une mutation d\'une espèce', 'is_correct' => false],
                            ['choice_text' => 'à une maladie infectieuse', 'is_correct' => false],
                            ['choice_text' => 'à une roche utilisée en construction uniquement', 'is_correct' => false],
                        ],
                        'explanation' => 'Les écosystèmes fournissent des services comme la pollinisation, la régulation de l\'eau, le stockage du carbone et certaines ressources.',
                    ],
                    [
                        'question' => 'Quel énoncé résume le mieux la biologie environnementale ?',
                        'choices' => [
                            ['choice_text' => 'elle cherche à comprendre et à gérer les interactions entre vivant, milieu et activités humaines', 'is_correct' => true],
                            ['choice_text' => 'elle étudie seulement les animaux domestiques', 'is_correct' => false],
                            ['choice_text' => 'elle exclut les facteurs physiques', 'is_correct' => false],
                            ['choice_text' => 'elle se limite à la classification des espèces', 'is_correct' => false],
                        ],
                        'explanation' => 'La discipline relie les processus biologiques, les conditions environnementales et les changements provoqués ou influencés par les sociétés humaines.',
                    ],
                ],
            ],
            [
                'title' => 'Ressources naturelles et durabilité',
                'description' => 'Reconnaître les ressources naturelles, leur renouvellement et les principes de gestion durable.',
                'settings' => ['duration' => 20, 'passing_score' => 55],
                'questions' => [
                    [
                        'question' => 'Le bois d\'une forêt est une ressource renouvelable à condition que :',
                        'choices' => [
                            ['choice_text' => 'son prélèvement reste compatible avec la régénération de la forêt', 'is_correct' => true],
                            ['choice_text' => 'on coupe tous les arbres chaque année', 'is_correct' => false],
                            ['choice_text' => 'la forêt ne se reproduise jamais', 'is_correct' => false],
                            ['choice_text' => 'la demande soit toujours supérieure à la croissance', 'is_correct' => false],
                        ],
                        'explanation' => 'Une ressource biologique n\'est durablement renouvelable que si son taux de prélèvement ne dépasse pas sa capacité de renouvellement.',
                    ],
                    [
                        'question' => 'L\'eau douce disponible dans un bassin versant peut devenir une ressource limitée lorsque :',
                        'choices' => [
                            ['choice_text' => 'les prélèvements dépassent durablement les apports et la recharge', 'is_correct' => true],
                            ['choice_text' => 'il existe des plantes dans le bassin', 'is_correct' => false],
                            ['choice_text' => 'la pluie tombe uniquement la nuit', 'is_correct' => false],
                            ['choice_text' => 'les rivières contiennent des poissons', 'is_correct' => false],
                        ],
                        'explanation' => 'Une extraction excessive par rapport aux apports naturels et à la recharge peut réduire durablement la ressource disponible.',
                    ],
                    [
                        'question' => 'La surexploitation d\'une ressource signifie que :',
                        'choices' => [
                            ['choice_text' => 'on l\'utilise plus rapidement qu\'elle ne se reconstitue', 'is_correct' => true],
                            ['choice_text' => 'elle se régénère toujours plus vite', 'is_correct' => false],
                            ['choice_text' => 'elle devient automatiquement une ressource minérale', 'is_correct' => false],
                            ['choice_text' => 'aucun être humain ne l\'utilise', 'is_correct' => false],
                        ],
                        'explanation' => 'Lorsque le rythme d\'exploitation dépasse le renouvellement, la ressource peut diminuer.',
                    ],
                    [
                        'question' => 'Une pêcherie capture 1 000 tonnes de poissons par an alors que le renouvellement naturel estimé est de 700 tonnes. La différence est de :',
                        'choices' => [
                            ['choice_text' => '300 tonnes', 'is_correct' => true],
                            ['choice_text' => '200 tonnes', 'is_correct' => false],
                            ['choice_text' => '700 tonnes', 'is_correct' => false],
                            ['choice_text' => '1 700 tonnes', 'is_correct' => false],
                        ],
                        'explanation' => '1 000 − 700 = 300 tonnes : les captures dépassent le renouvellement estimé de 300 tonnes.',
                    ],
                    [
                        'question' => 'Quel choix correspond à une gestion durable d\'une forêt ?',
                        'choices' => [
                            ['choice_text' => 'limiter les coupes et favoriser la régénération des peuplements', 'is_correct' => true],
                            ['choice_text' => 'retirer toute végétation', 'is_correct' => false],
                            ['choice_text' => 'planter une seule espèce partout sans suivi', 'is_correct' => false],
                            ['choice_text' => 'ignorer l\'érosion du sol', 'is_correct' => false],
                        ],
                        'explanation' => 'Une gestion durable cherche à maintenir la capacité de renouvellement de la forêt, la biodiversité et les fonctions du sol.',
                    ],
                    [
                        'question' => 'La réduction de la consommation d\'eau dans une région en période de sécheresse vise notamment à :',
                        'choices' => [
                            ['choice_text' => 'diminuer la pression sur la ressource disponible', 'is_correct' => true],
                            ['choice_text' => 'augmenter automatiquement les précipitations', 'is_correct' => false],
                            ['choice_text' => 'supprimer les nappes souterraines', 'is_correct' => false],
                            ['choice_text' => 'rendre toutes les plantes aquatiques', 'is_correct' => false],
                        ],
                        'explanation' => 'Réduire les usages permet de rapprocher les prélèvements de la quantité d\'eau réellement disponible.',
                    ],
                    [
                        'question' => 'Pourquoi la diversité des cultures peut-elle être utile à un système agricole ?',
                        'choices' => [
                            ['choice_text' => 'elle peut réduire certains risques et maintenir plusieurs ressources génétiques', 'is_correct' => true],
                            ['choice_text' => 'elle empêche toute reproduction des plantes', 'is_correct' => false],
                            ['choice_text' => 'elle supprime toujours les maladies', 'is_correct' => false],
                            ['choice_text' => 'elle rend les sols totalement indépendants de l\'eau', 'is_correct' => false],
                        ],
                        'explanation' => 'La diversité variétale et des cultures peut réduire certaines vulnérabilités et conserver des caractères génétiques utiles.',
                    ],
                    [
                        'question' => 'Une énergie produite à partir du rayonnement solaire est souvent classée comme :',
                        'choices' => [
                            ['choice_text' => 'une ressource renouvelable', 'is_correct' => true],
                            ['choice_text' => 'une ressource fossile', 'is_correct' => false],
                            ['choice_text' => 'une ressource non renouvelable par définition', 'is_correct' => false],
                            ['choice_text' => 'une ressource biologique consommée', 'is_correct' => false],
                        ],
                        'explanation' => 'L\'énergie solaire est continuellement fournie par le rayonnement du Soleil à l\'échelle humaine.',
                    ],
                    [
                        'question' => 'Quel indicateur peut aider à suivre la durabilité d\'une pêcherie ?',
                        'choices' => [
                            ['choice_text' => 'la comparaison entre captures, effectifs des populations et taux de renouvellement', 'is_correct' => true],
                            ['choice_text' => 'la couleur des bateaux uniquement', 'is_correct' => false],
                            ['choice_text' => 'le nombre de ports sans données biologiques', 'is_correct' => false],
                            ['choice_text' => 'la profondeur d\'une seule plage', 'is_correct' => false],
                        ],
                        'explanation' => 'La gestion durable s\'appuie sur des données biologiques et sur l\'évolution des captures afin d\'éviter la surexploitation.',
                    ],
                    [
                        'question' => 'Une ressource dite non renouvelable est généralement :',
                        'choices' => [
                            ['choice_text' => 'présente en quantité limitée à l\'échelle humaine et se reconstitue très lentement', 'is_correct' => true],
                            ['choice_text' => 'renouvelée chaque saison', 'is_correct' => false],
                            ['choice_text' => 'produite chaque jour par les plantes', 'is_correct' => false],
                            ['choice_text' => 'toujours illimitée', 'is_correct' => false],
                        ],
                        'explanation' => 'Les combustibles fossiles et certains minerais se forment sur des temps bien plus longs que les échelles humaines.',
                    ],
                ],
            ],
            [
                'title' => 'Pollution et qualité de l\'environnement',
                'description' => 'Identifier les principales formes de pollution et leurs effets sur les organismes et les milieux.',
                'settings' => ['duration' => 20, 'passing_score' => 60],
                'questions' => [
                    [
                        'question' => 'Un rejet d\'eaux usées riches en matières organiques peut réduire l\'oxygène dissous d\'une rivière parce que :',
                        'choices' => [
                            ['choice_text' => 'les microorganismes décomposeurs consomment de l\'oxygène en dégradant la matière', 'is_correct' => true],
                            ['choice_text' => 'les poissons produisent tout l\'oxygène de la rivière', 'is_correct' => false],
                            ['choice_text' => 'la matière organique crée directement de l\'oxygène', 'is_correct' => false],
                            ['choice_text' => 'les bactéries arrêtent toujours de respirer', 'is_correct' => false],
                        ],
                        'explanation' => 'La décomposition d\'une forte charge organique augmente la demande en oxygène et peut provoquer un déficit en oxygène dissous.',
                    ],
                    [
                        'question' => 'Un polluant présent dans l\'air au-dessus des limites recommandées constitue un problème de :',
                        'choices' => [
                            ['choice_text' => 'pollution atmosphérique', 'is_correct' => true],
                            ['choice_text' => 'pollution génétique uniquement', 'is_correct' => false],
                            ['choice_text' => 'érosion naturelle', 'is_correct' => false],
                            ['choice_text' => 'succession écologique', 'is_correct' => false],
                        ],
                        'explanation' => 'La présence excessive de substances nuisibles dans l\'atmosphère constitue une pollution atmosphérique.',
                    ],
                    [
                        'question' => 'Une substance toxique qui s\'accumule dans les tissus d\'un organisme au cours du temps illustre :',
                        'choices' => [
                            ['choice_text' => 'la bioaccumulation', 'is_correct' => true],
                            ['choice_text' => 'la condensation', 'is_correct' => false],
                            ['choice_text' => 'la germination', 'is_correct' => false],
                            ['choice_text' => 'la migration', 'is_correct' => false],
                        ],
                        'explanation' => 'La bioaccumulation se produit lorsque l\'absorption d\'une substance dépasse son élimination.',
                    ],
                    [
                        'question' => 'Lorsque la concentration d\'un polluant augmente le long d\'une chaîne alimentaire, on parle de :',
                        'choices' => [
                            ['choice_text' => 'bioamplification', 'is_correct' => true],
                            ['choice_text' => 'photosynthèse', 'is_correct' => false],
                            ['choice_text' => 'infiltration', 'is_correct' => false],
                            ['choice_text' => 'pollinisation', 'is_correct' => false],
                        ],
                        'explanation' => 'La bioamplification concerne l\'augmentation de concentration de certains contaminants persistants chez les organismes situés à des niveaux trophiques élevés.',
                    ],
                    [
                        'question' => 'Un excès de nitrates et de phosphates dans un lac peut favoriser :',
                        'choices' => [
                            ['choice_text' => 'l\'eutrophisation', 'is_correct' => true],
                            ['choice_text' => 'la déforestation', 'is_correct' => false],
                            ['choice_text' => 'la fossilisation', 'is_correct' => false],
                            ['choice_text' => 'la tectonique', 'is_correct' => false],
                        ],
                        'explanation' => 'L\'apport excessif de nutriments peut stimuler les algues et déséquilibrer le milieu aquatique.',
                    ],
                    [
                        'question' => 'Le bruit routier intense peut avoir un effet environnemental sur certains animaux en perturbant :',
                        'choices' => [
                            ['choice_text' => 'leur communication et leurs comportements', 'is_correct' => true],
                            ['choice_text' => 'leur séquence d\'ADN dans tous les cas', 'is_correct' => false],
                            ['choice_text' => 'la composition des roches', 'is_correct' => false],
                            ['choice_text' => 'la salinité de l\'océan', 'is_correct' => false],
                        ],
                        'explanation' => 'Le bruit peut modifier les comportements, les déplacements et la communication de certaines espèces sensibles.',
                    ],
                    [
                        'question' => 'Quel moyen réduit directement les déchets plastiques à usage unique ?',
                        'choices' => [
                            ['choice_text' => 'réutiliser les contenants lorsque cela est possible', 'is_correct' => true],
                            ['choice_text' => 'augmenter la quantité de plastique jetée', 'is_correct' => false],
                            ['choice_text' => 'brûler tous les déchets dans la rue', 'is_correct' => false],
                            ['choice_text' => 'jeter les plastiques dans les cours d\'eau', 'is_correct' => false],
                        ],
                        'explanation' => 'La réutilisation réduit la quantité de déchets produits et la demande en nouveaux objets à usage unique.',
                    ],
                    [
                        'question' => 'Une fuite d\'hydrocarbures à la surface de la mer peut affecter les oiseaux notamment parce que :',
                        'choices' => [
                            ['choice_text' => 'le produit peut recouvrir leurs plumes et perturber leur isolation', 'is_correct' => true],
                            ['choice_text' => 'il transforme leurs plumes en os', 'is_correct' => false],
                            ['choice_text' => 'il augmente toujours leur capacité à voler', 'is_correct' => false],
                            ['choice_text' => 'il remplace l\'eau de mer par de l\'eau douce', 'is_correct' => false],
                        ],
                        'explanation' => 'Les hydrocarbures peuvent altérer les propriétés isolantes des plumes et avoir aussi des effets toxiques.',
                    ],
                    [
                        'question' => 'Pour comparer la qualité de deux rivières, il est utile de mesurer :',
                        'choices' => [
                            ['choice_text' => 'plusieurs paramètres chimiques et biologiques', 'is_correct' => true],
                            ['choice_text' => 'uniquement la largeur de la rivière', 'is_correct' => false],
                            ['choice_text' => 'uniquement la couleur du ciel', 'is_correct' => false],
                            ['choice_text' => 'uniquement le nombre de ponts', 'is_correct' => false],
                        ],
                        'explanation' => 'Une évaluation fiable combine des paramètres physico-chimiques et biologiques pour mieux décrire l\'état du milieu.',
                    ],
                    [
                        'question' => 'Une réduction de l\'utilisation des pesticides peut contribuer à :',
                        'choices' => [
                            ['choice_text' => 'diminuer l\'exposition de certains organismes non ciblés', 'is_correct' => true],
                            ['choice_text' => 'augmenter automatiquement toutes les populations', 'is_correct' => false],
                            ['choice_text' => 'supprimer toute maladie des plantes', 'is_correct' => false],
                            ['choice_text' => 'rendre un écosystème totalement stable', 'is_correct' => false],
                        ],
                        'explanation' => 'Réduire certains pesticides peut limiter les effets indésirables sur les organismes non ciblés et sur les chaînes alimentaires.',
                    ],
                ],
            ],
            [
                'title' => 'Changement climatique et environnement',
                'description' => 'Comprendre les bases du changement climatique, de l\'effet de serre et des réponses environnementales.',
                'settings' => ['duration' => 25, 'passing_score' => 60],
                'questions' => [
                    [
                        'question' => 'L\'effet de serre naturel est important parce qu\'il :',
                        'choices' => [
                            ['choice_text' => 'contribue à maintenir une température compatible avec la vie sur Terre', 'is_correct' => true],
                            ['choice_text' => 'empêche tout rayonnement solaire d\'atteindre le sol', 'is_correct' => false],
                            ['choice_text' => 'supprime totalement l\'évaporation', 'is_correct' => false],
                            ['choice_text' => 'refroidit nécessairement toutes les régions', 'is_correct' => false],
                        ],
                        'explanation' => 'L\'effet de serre naturel retient une partie du rayonnement infrarouge et contribue à maintenir une température moyenne habitable.',
                    ],
                    [
                        'question' => 'L\'augmentation de la concentration atmosphérique de certains gaz à effet de serre peut :',
                        'choices' => [
                            ['choice_text' => 'renforcer le réchauffement du système climatique', 'is_correct' => true],
                            ['choice_text' => 'arrêter toute photosynthèse', 'is_correct' => false],
                            ['choice_text' => 'faire disparaître immédiatement tous les nuages', 'is_correct' => false],
                            ['choice_text' => 'refroidir systématiquement chaque région', 'is_correct' => false],
                        ],
                        'explanation' => 'Une augmentation des gaz à effet de serre modifie le bilan énergétique de la planète et contribue au réchauffement à long terme.',
                    ],
                    [
                        'question' => 'Lequel est un gaz à effet de serre important ?',
                        'choices' => [
                            ['choice_text' => 'le dioxyde de carbone', 'is_correct' => true],
                            ['choice_text' => 'l\'argon uniquement', 'is_correct' => false],
                            ['choice_text' => 'l\'azote moléculaire uniquement', 'is_correct' => false],
                            ['choice_text' => 'l\'hélium uniquement', 'is_correct' => false],
                        ],
                        'explanation' => 'Le CO₂ absorbe une partie du rayonnement infrarouge émis par la Terre et participe à l\'effet de serre.',
                    ],
                    [
                        'question' => 'La déforestation peut contribuer au changement climatique parce qu\'elle :',
                        'choices' => [
                            ['choice_text' => 'réduit un stockage de carbone et peut libérer du CO₂', 'is_correct' => true],
                            ['choice_text' => 'augmente toujours la couverture végétale', 'is_correct' => false],
                            ['choice_text' => 'supprime le cycle de l\'eau mondial', 'is_correct' => false],
                            ['choice_text' => 'transforme le carbone en azote', 'is_correct' => false],
                        ],
                        'explanation' => 'Les forêts stockent du carbone dans la biomasse et les sols ; leur destruction peut libérer une partie de ce carbone.',
                    ],
                    [
                        'question' => 'Une population animale déplace son aire de répartition vers des régions plus froides. Une explication possible liée au climat est :',
                        'choices' => [
                            ['choice_text' => 'la recherche de conditions thermiques plus favorables', 'is_correct' => true],
                            ['choice_text' => 'la disparition de toute variation génétique', 'is_correct' => false],
                            ['choice_text' => 'la création instantanée d\'une nouvelle espèce', 'is_correct' => false],
                            ['choice_text' => 'la transformation du sol en eau', 'is_correct' => false],
                        ],
                        'explanation' => 'Lorsque les conditions de température changent, certaines espèces peuvent modifier leur distribution géographique.',
                    ],
                    [
                        'question' => 'L\'adaptation d\'une société aux effets du changement climatique vise à :',
                        'choices' => [
                            ['choice_text' => 'réduire les dommages liés aux impacts climatiques', 'is_correct' => true],
                            ['choice_text' => 'augmenter systématiquement les émissions', 'is_correct' => false],
                            ['choice_text' => 'empêcher toute variation naturelle du climat', 'is_correct' => false],
                            ['choice_text' => 'supprimer tous les écosystèmes', 'is_correct' => false],
                        ],
                        'explanation' => 'L\'adaptation cherche à réduire la vulnérabilité et les dommages liés aux impacts déjà présents ou attendus.',
                    ],
                    [
                        'question' => 'Réduire les émissions de CO₂ liées aux combustibles fossiles relève principalement de :',
                        'choices' => [
                            ['choice_text' => 'l\'atténuation du changement climatique', 'is_correct' => true],
                            ['choice_text' => 'la succession écologique', 'is_correct' => false],
                            ['choice_text' => 'la prédation', 'is_correct' => false],
                            ['choice_text' => 'la classification des espèces', 'is_correct' => false],
                        ],
                        'explanation' => 'L\'atténuation consiste notamment à réduire les émissions ou à augmenter les puits de gaz à effet de serre.',
                    ],
                    [
                        'question' => 'Une période de chaleur plus fréquente peut augmenter la pression sur une population si :',
                        'choices' => [
                            ['choice_text' => 'elle dépasse régulièrement la tolérance thermique de l\'espèce', 'is_correct' => true],
                            ['choice_text' => 'elle améliore toujours sa reproduction', 'is_correct' => false],
                            ['choice_text' => 'toutes les espèces ont exactement la même tolérance', 'is_correct' => false],
                            ['choice_text' => 'elle supprime tous les facteurs abiotiques', 'is_correct' => false],
                        ],
                        'explanation' => 'Les espèces possèdent des plages de tolérance ; des températures extrêmes ou plus fréquentes peuvent réduire leur survie ou leur reproduction.',
                    ],
                    [
                        'question' => 'Pourquoi les océans jouent-ils un rôle dans le système climatique ?',
                        'choices' => [
                            ['choice_text' => 'ils stockent de la chaleur et échangent de l\'énergie et du carbone avec l\'atmosphère', 'is_correct' => true],
                            ['choice_text' => 'ils ne contiennent aucune énergie', 'is_correct' => false],
                            ['choice_text' => 'ils empêchent toute variation du climat', 'is_correct' => false],
                            ['choice_text' => 'ils produisent uniquement de l\'azote', 'is_correct' => false],
                        ],
                        'explanation' => 'Les océans ont une grande capacité thermique et participent aux échanges de chaleur, d\'eau et de carbone avec l\'atmosphère.',
                    ],
                    [
                        'question' => 'Une ville plante des arbres et augmente les espaces verts pour réduire certains effets des fortes chaleurs. Cette action peut :',
                        'choices' => [
                            ['choice_text' => 'contribuer localement à limiter certains effets de l\'îlot de chaleur', 'is_correct' => true],
                            ['choice_text' => 'arrêter le changement climatique mondial à elle seule', 'is_correct' => false],
                            ['choice_text' => 'supprimer toutes les émissions', 'is_correct' => false],
                            ['choice_text' => 'réduire automatiquement tous les risques naturels', 'is_correct' => false],
                        ],
                        'explanation' => 'La végétation peut fournir de l\'ombre et favoriser l\'évapotranspiration, ce qui peut réduire certaines chaleurs locales.',
                    ],
                ],
            ],
            [
                'title' => 'Conservation et gestion des habitats',
                'description' => 'Étudier les habitats, la fragmentation, les corridors et la restauration écologique.',
                'settings' => ['duration' => 20, 'passing_score' => 65],
                'questions' => [
                    [
                        'question' => 'Un habitat correspond principalement :',
                        'choices' => [
                            ['choice_text' => 'au milieu physique où vit une espèce', 'is_correct' => true],
                            ['choice_text' => 'à son ADN complet', 'is_correct' => false],
                            ['choice_text' => 'à son régime alimentaire uniquement', 'is_correct' => false],
                            ['choice_text' => 'à son nom scientifique', 'is_correct' => false],
                        ],
                        'explanation' => 'L\'habitat désigne l\'environnement physique occupé par une espèce.',
                    ],
                    [
                        'question' => 'La fragmentation d\'une forêt peut :',
                        'choices' => [
                            ['choice_text' => 'isoler les populations et réduire leurs déplacements', 'is_correct' => true],
                            ['choice_text' => 'augmenter toujours la taille des habitats', 'is_correct' => false],
                            ['choice_text' => 'supprimer toute mortalité', 'is_correct' => false],
                            ['choice_text' => 'améliorer automatiquement la connectivité', 'is_correct' => false],
                        ],
                        'explanation' => 'La fragmentation divise les habitats en morceaux plus petits et plus isolés.',
                    ],
                    [
                        'question' => 'Un corridor écologique est utilisé pour :',
                        'choices' => [
                            ['choice_text' => 'relier des habitats séparés', 'is_correct' => true],
                            ['choice_text' => 'isoler davantage les populations', 'is_correct' => false],
                            ['choice_text' => 'empêcher toute migration', 'is_correct' => false],
                            ['choice_text' => 'supprimer les ressources alimentaires', 'is_correct' => false],
                        ],
                        'explanation' => 'Les corridors facilitent les déplacements entre fragments d\'habitat et peuvent renforcer la connectivité.',
                    ],
                    [
                        'question' => 'Pourquoi la taille d\'une aire protégée peut-elle être importante ?',
                        'choices' => [
                            ['choice_text' => 'certaines espèces ont besoin de vastes territoires pour se nourrir et se reproduire', 'is_correct' => true],
                            ['choice_text' => 'toutes les espèces occupent uniquement un mètre carré', 'is_correct' => false],
                            ['choice_text' => 'la taille n\'a jamais d\'effet écologique', 'is_correct' => false],
                            ['choice_text' => 'les animaux n\'utilisent pas l\'espace', 'is_correct' => false],
                        ],
                        'explanation' => 'Les besoins spatiaux varient selon les espèces, et certaines nécessitent de grands territoires pour maintenir des populations viables.',
                    ],
                    [
                        'question' => 'Après un incendie, des herbacées puis des arbustes réapparaissent sur un sol encore présent. Cela correspond plutôt à :',
                        'choices' => [
                            ['choice_text' => 'une succession secondaire', 'is_correct' => true],
                            ['choice_text' => 'une succession primaire', 'is_correct' => false],
                            ['choice_text' => 'une extinction mondiale', 'is_correct' => false],
                            ['choice_text' => 'une mutation', 'is_correct' => false],
                        ],
                        'explanation' => 'Une succession secondaire se déroule après une perturbation lorsque le sol et une partie des conditions du milieu persistent.',
                    ],
                    [
                        'question' => 'La restauration écologique cherche notamment à :',
                        'choices' => [
                            ['choice_text' => 'rétablir certaines fonctions et caractéristiques d\'un écosystème dégradé', 'is_correct' => true],
                            ['choice_text' => 'remplacer tous les organismes par une seule espèce', 'is_correct' => false],
                            ['choice_text' => 'supprimer tous les processus naturels', 'is_correct' => false],
                            ['choice_text' => 'transformer toutes les rivières en réservoirs', 'is_correct' => false],
                        ],
                        'explanation' => 'La restauration vise à améliorer l\'état et le fonctionnement d\'un milieu dégradé selon des objectifs définis.',
                    ],
                    [
                        'question' => 'Une haie plantée entre deux champs peut servir de :',
                        'choices' => [
                            ['choice_text' => 'refuge et corridor pour certains organismes', 'is_correct' => true],
                            ['choice_text' => 'barrière absolue pour toutes les espèces', 'is_correct' => false],
                            ['choice_text' => 'source unique d\'eau potable', 'is_correct' => false],
                            ['choice_text' => 'remplacement complet du sol', 'is_correct' => false],
                        ],
                        'explanation' => 'Les haies peuvent fournir des ressources, des refuges et une continuité écologique dans les paysages agricoles.',
                    ],
                    [
                        'question' => 'La protection d\'un marais peut contribuer à préserver :',
                        'choices' => [
                            ['choice_text' => 'la biodiversité et certaines fonctions hydrologiques', 'is_correct' => true],
                            ['choice_text' => 'uniquement les roches', 'is_correct' => false],
                            ['choice_text' => 'uniquement la lumière', 'is_correct' => false],
                            ['choice_text' => 'la composition génétique de toutes les espèces', 'is_correct' => false],
                        ],
                        'explanation' => 'Les marais fournissent des habitats et participent au stockage, à la filtration et à la régulation de l\'eau.',
                    ],
                    [
                        'question' => 'Pour vérifier qu\'une restauration forestière fonctionne, il est utile de :',
                        'choices' => [
                            ['choice_text' => 'suivre la végétation, les populations et les fonctions du milieu dans le temps', 'is_correct' => true],
                            ['choice_text' => 'observer le site une seule fois', 'is_correct' => false],
                            ['choice_text' => 'ignorer les espèces présentes', 'is_correct' => false],
                            ['choice_text' => 'mesurer seulement la pluie d\'un jour', 'is_correct' => false],
                        ],
                        'explanation' => 'Le suivi à long terme permet de détecter les changements et d\'évaluer si les objectifs écologiques sont atteints.',
                    ],
                    [
                        'question' => 'Une espèce nécessitant de grands territoires peut être particulièrement sensible :',
                        'choices' => [
                            ['choice_text' => 'à la fragmentation de son habitat', 'is_correct' => true],
                            ['choice_text' => 'à l\'augmentation de la connectivité', 'is_correct' => false],
                            ['choice_text' => 'à la présence de corridors', 'is_correct' => false],
                            ['choice_text' => 'à une augmentation de la taille de son habitat', 'is_correct' => false],
                        ],
                        'explanation' => 'Les espèces ayant de grands besoins spatiaux peuvent subir fortement la réduction et l\'isolement des habitats.',
                    ],
                ],
            ],
            [
                'title' => 'Agriculture, sols et environnement',
                'description' => 'Comprendre les interactions entre pratiques agricoles, biodiversité, sols et qualité de l\'environnement.',
                'settings' => ['duration' => 20, 'passing_score' => 65],
                'questions' => [
                    [
                        'question' => 'Une couverture végétale du sol peut réduire l\'érosion parce que :',
                        'choices' => [
                            ['choice_text' => 'les racines maintiennent le sol et les feuilles ralentissent l\'impact de la pluie', 'is_correct' => true],
                            ['choice_text' => 'elle transforme le sol en roche', 'is_correct' => false],
                            ['choice_text' => 'elle empêche toute infiltration', 'is_correct' => false],
                            ['choice_text' => 'elle supprime toutes les bactéries', 'is_correct' => false],
                        ],
                        'explanation' => 'Les racines stabilisent les particules du sol et la végétation réduit l\'énergie de ruissellement et l\'impact des gouttes de pluie.',
                    ],
                    [
                        'question' => 'Une forte application d\'engrais azotés suivie d\'un ruissellement vers un lac peut favoriser :',
                        'choices' => [
                            ['choice_text' => 'l\'eutrophisation', 'is_correct' => true],
                            ['choice_text' => 'la formation de glaciers', 'is_correct' => false],
                            ['choice_text' => 'la disparition immédiate des plantes terrestres', 'is_correct' => false],
                            ['choice_text' => 'la création d\'un nouveau continent', 'is_correct' => false],
                        ],
                        'explanation' => 'Un excès d\'azote et de phosphore dans les eaux peut stimuler les algues et provoquer une eutrophisation.',
                    ],
                    [
                        'question' => 'La rotation des cultures peut contribuer à :',
                        'choices' => [
                            ['choice_text' => 'réduire certains problèmes de ravageurs et améliorer la gestion des nutriments', 'is_correct' => true],
                            ['choice_text' => 'épuiser toujours le même nutriment', 'is_correct' => false],
                            ['choice_text' => 'supprimer toute diversité biologique', 'is_correct' => false],
                            ['choice_text' => 'empêcher toute activité microbienne', 'is_correct' => false],
                        ],
                        'explanation' => 'La rotation modifie les ressources disponibles pour les ravageurs et peut diversifier les besoins nutritifs des cultures.',
                    ],
                    [
                        'question' => 'Un sol contenant beaucoup de matière organique peut souvent :',
                        'choices' => [
                            ['choice_text' => 'retenir davantage d\'eau et de nutriments', 'is_correct' => true],
                            ['choice_text' => 'ne contenir aucun microorganisme', 'is_correct' => false],
                            ['choice_text' => 'empêcher toute croissance végétale', 'is_correct' => false],
                            ['choice_text' => 'être totalement imperméable', 'is_correct' => false],
                        ],
                        'explanation' => 'La matière organique améliore généralement la structure du sol et peut augmenter sa capacité de rétention d\'eau et de nutriments.',
                    ],
                    [
                        'question' => 'Les vers de terre contribuent notamment :',
                        'choices' => [
                            ['choice_text' => 'à l\'aération et au mélange du sol', 'is_correct' => true],
                            ['choice_text' => 'à la production directe d\'oxygène atmosphérique', 'is_correct' => false],
                            ['choice_text' => 'à l\'élimination de toutes les bactéries', 'is_correct' => false],
                            ['choice_text' => 'à la formation des nuages', 'is_correct' => false],
                        ],
                        'explanation' => 'Leur activité crée des galeries et mélange les matériaux du sol, ce qui influence sa structure.',
                    ],
                    [
                        'question' => 'La diversification des cultures peut être favorable à la biodiversité agricole parce qu\'elle :',
                        'choices' => [
                            ['choice_text' => 'offre davantage de types de ressources et d\'habitats', 'is_correct' => true],
                            ['choice_text' => 'réduit toujours la diversité des insectes', 'is_correct' => false],
                            ['choice_text' => 'rend toutes les plantes génétiquement identiques', 'is_correct' => false],
                            ['choice_text' => 'empêche les microorganismes du sol de vivre', 'is_correct' => false],
                        ],
                        'explanation' => 'La diversité des cultures et des habitats agricoles peut favoriser plusieurs organismes et réduire certaines vulnérabilités.',
                    ],
                    [
                        'question' => 'Une bande végétalisée le long d\'un cours d\'eau peut réduire :',
                        'choices' => [
                            ['choice_text' => 'le ruissellement de certains sédiments et nutriments vers l\'eau', 'is_correct' => true],
                            ['choice_text' => 'la quantité d\'oxygène de l\'atmosphère', 'is_correct' => false],
                            ['choice_text' => 'la diversité des sols du monde entier', 'is_correct' => false],
                            ['choice_text' => 'la lumière solaire', 'is_correct' => false],
                        ],
                        'explanation' => 'Les bandes végétalisées peuvent ralentir les écoulements et retenir une partie des particules et nutriments.',
                    ],
                    [
                        'question' => 'L\'usage excessif d\'un pesticide peut poser problème parce qu\'il peut :',
                        'choices' => [
                            ['choice_text' => 'affecter des organismes non ciblés', 'is_correct' => true],
                            ['choice_text' => 'ne toucher que l\'espèce nuisible dans tous les cas', 'is_correct' => false],
                            ['choice_text' => 'augmenter toujours la biodiversité', 'is_correct' => false],
                            ['choice_text' => 'remplacer les fonctions du sol', 'is_correct' => false],
                        ],
                        'explanation' => 'Les pesticides peuvent toucher des organismes autres que ceux ciblés et perturber certaines interactions écologiques.',
                    ],
                    [
                        'question' => 'Une pratique qui réduit le travail intensif du sol peut contribuer à :',
                        'choices' => [
                            ['choice_text' => 'limiter certaines pertes de sol et préserver la structure du sol', 'is_correct' => true],
                            ['choice_text' => 'supprimer toute végétation', 'is_correct' => false],
                            ['choice_text' => 'augmenter automatiquement toutes les récoltes', 'is_correct' => false],
                            ['choice_text' => 'rendre les sols non vivants', 'is_correct' => false],
                        ],
                        'explanation' => 'Certaines pratiques de conservation du sol réduisent l\'érosion et maintiennent mieux sa structure et sa vie biologique.',
                    ],
                    [
                        'question' => 'Un agriculteur utilise plusieurs variétés d\'une même culture. Cela peut aider à :',
                        'choices' => [
                            ['choice_text' => 'maintenir une réserve de diversité génétique', 'is_correct' => true],
                            ['choice_text' => 'supprimer toutes les adaptations', 'is_correct' => false],
                            ['choice_text' => 'rendre toutes les plantes identiques', 'is_correct' => false],
                            ['choice_text' => 'éliminer toute sélection', 'is_correct' => false],
                        ],
                        'explanation' => 'L\'utilisation de plusieurs variétés contribue à conserver différents caractères génétiques utiles à la production et à l\'adaptation.',
                    ],
                ],
            ],
            [
                'title' => 'Écosystèmes urbains et environnement',
                'description' => 'Explorer les effets de l\'urbanisation sur l\'eau, la biodiversité, le climat local et les ressources.',
                'settings' => ['duration' => 20, 'passing_score' => 65],
                'questions' => [
                    [
                        'question' => 'Une forte augmentation des surfaces bétonnées dans une ville tend à :',
                        'choices' => [
                            ['choice_text' => 'augmenter le ruissellement et réduire l\'infiltration', 'is_correct' => true],
                            ['choice_text' => 'augmenter toujours l\'infiltration', 'is_correct' => false],
                            ['choice_text' => 'supprimer les pluies', 'is_correct' => false],
                            ['choice_text' => 'transformer le béton en sol vivant', 'is_correct' => false],
                        ],
                        'explanation' => 'Les surfaces imperméables limitent l\'infiltration et favorisent le ruissellement lors des pluies.',
                    ],
                    [
                        'question' => 'Les îlots de chaleur urbains sont favorisés notamment par :',
                        'choices' => [
                            ['choice_text' => 'la concentration de surfaces minérales et le manque de végétation', 'is_correct' => true],
                            ['choice_text' => 'la présence de toutes les forêts naturelles', 'is_correct' => false],
                            ['choice_text' => 'une couverture végétale très dense partout', 'is_correct' => false],
                            ['choice_text' => 'l\'absence totale de bâtiments', 'is_correct' => false],
                        ],
                        'explanation' => 'Les matériaux urbains absorbent et restituent de la chaleur, tandis que la végétation fournit de l\'ombre et de l\'évapotranspiration.',
                    ],
                    [
                        'question' => 'Planter des arbres en ville peut apporter :',
                        'choices' => [
                            ['choice_text' => 'de l\'ombre, des habitats et certains effets de refroidissement local', 'is_correct' => true],
                            ['choice_text' => 'une suppression totale de la pollution', 'is_correct' => false],
                            ['choice_text' => 'une disparition automatique des déchets', 'is_correct' => false],
                            ['choice_text' => 'une réduction certaine de tous les risques naturels', 'is_correct' => false],
                        ],
                        'explanation' => 'Les arbres peuvent améliorer le confort thermique, fournir des habitats et participer à certaines fonctions environnementales.',
                    ],
                    [
                        'question' => 'Un toit végétalisé peut notamment :',
                        'choices' => [
                            ['choice_text' => 'retenir une partie des eaux de pluie', 'is_correct' => true],
                            ['choice_text' => 'rendre les bâtiments totalement imperméables', 'is_correct' => false],
                            ['choice_text' => 'supprimer les nuages', 'is_correct' => false],
                            ['choice_text' => 'empêcher toute évaporation', 'is_correct' => false],
                        ],
                        'explanation' => 'Les toitures végétalisées retiennent temporairement une partie des précipitations et peuvent réduire certains pics de ruissellement.',
                    ],
                    [
                        'question' => 'La fragmentation des espaces verts urbains peut réduire :',
                        'choices' => [
                            ['choice_text' => 'les déplacements de certaines espèces entre habitats', 'is_correct' => true],
                            ['choice_text' => 'la température mondiale directement', 'is_correct' => false],
                            ['choice_text' => 'la lumière solaire', 'is_correct' => false],
                            ['choice_text' => 'la gravité locale', 'is_correct' => false],
                        ],
                        'explanation' => 'Des espaces verts isolés limitent les possibilités de déplacement et de dispersion de certaines espèces.',
                    ],
                    [
                        'question' => 'Pourquoi les zones humides urbaines peuvent-elles être utiles ?',
                        'choices' => [
                            ['choice_text' => 'elles offrent des habitats et participent à la gestion des eaux', 'is_correct' => true],
                            ['choice_text' => 'elles empêchent toute vie aquatique', 'is_correct' => false],
                            ['choice_text' => 'elles éliminent toujours toute pollution', 'is_correct' => false],
                            ['choice_text' => 'elles remplacent les réseaux d\'eau potable', 'is_correct' => false],
                        ],
                        'explanation' => 'Les zones humides urbaines peuvent fournir des habitats et contribuer au stockage temporaire et à la filtration de l\'eau.',
                    ],
                    [
                        'question' => 'Une politique de transport favorisant la marche et le vélo peut contribuer à :',
                        'choices' => [
                            ['choice_text' => 'réduire certains déplacements motorisés et leurs émissions', 'is_correct' => true],
                            ['choice_text' => 'augmenter toujours les émissions', 'is_correct' => false],
                            ['choice_text' => 'supprimer tous les besoins en énergie', 'is_correct' => false],
                            ['choice_text' => 'faire disparaître toute pollution urbaine', 'is_correct' => false],
                        ],
                        'explanation' => 'Réduire l\'usage de véhicules motorisés peut diminuer certaines émissions atmosphériques et de gaz à effet de serre.',
                    ],
                    [
                        'question' => 'Une ville crée plusieurs petits parcs reliés par des bandes végétalisées. Le but écologique peut être de :',
                        'choices' => [
                            ['choice_text' => 'améliorer la connectivité des habitats urbains', 'is_correct' => true],
                            ['choice_text' => 'isoler davantage les espèces', 'is_correct' => false],
                            ['choice_text' => 'réduire volontairement la biodiversité', 'is_correct' => false],
                            ['choice_text' => 'empêcher tous les déplacements des animaux', 'is_correct' => false],
                        ],
                        'explanation' => 'Des espaces verts reliés peuvent faciliter la dispersion et les déplacements de certaines espèces.',
                    ],
                    [
                        'question' => 'Après une pluie intense, une rue très imperméable devient rapidement inondée. Le mécanisme immédiat est surtout :',
                        'choices' => [
                            ['choice_text' => 'un ruissellement important de l\'eau', 'is_correct' => true],
                            ['choice_text' => 'une photosynthèse accrue', 'is_correct' => false],
                            ['choice_text' => 'une infiltration maximale', 'is_correct' => false],
                            ['choice_text' => 'une baisse instantanée du niveau de la mer', 'is_correct' => false],
                        ],
                        'explanation' => 'Les surfaces imperméables favorisent l\'écoulement rapide de l\'eau vers les points bas et les réseaux de drainage.',
                    ],
                    [
                        'question' => 'Quel aménagement aide directement à favoriser l\'infiltration des eaux de pluie ?',
                        'choices' => [
                            ['choice_text' => 'une surface perméable', 'is_correct' => true],
                            ['choice_text' => 'une dalle de béton continue', 'is_correct' => false],
                            ['choice_text' => 'une toiture métallique sans récupération d\'eau', 'is_correct' => false],
                            ['choice_text' => 'une route entièrement asphaltée', 'is_correct' => false],
                        ],
                        'explanation' => 'Les surfaces perméables permettent à une partie de l\'eau de pénétrer dans le sol au lieu de ruisseler immédiatement.',
                    ],
                ],
            ],
            [
                'title' => 'Révision générale de biologie environnementale',
                'description' => 'Synthèse sur ressources, pollution, climat, habitats, agriculture et gestion environnementale.',
                'settings' => ['duration' => 25, 'passing_score' => 70],
                'questions' => [
                    [
                        'question' => 'Une forêt absorbe du CO₂, fournit du bois et abrite de nombreuses espèces. Cela montre qu\'elle peut fournir :',
                        'choices' => [
                            ['choice_text' => 'plusieurs fonctions et services écosystémiques', 'is_correct' => true],
                            ['choice_text' => 'un seul service à la fois', 'is_correct' => false],
                            ['choice_text' => 'uniquement une ressource minérale', 'is_correct' => false],
                            ['choice_text' => 'aucune fonction écologique', 'is_correct' => false],
                        ],
                        'explanation' => 'Un même écosystème peut fournir simultanément des habitats, des ressources et des fonctions de régulation.',
                    ],
                    [
                        'question' => 'Une population de poissons compte 4 000 individus. Si 1 000 sont retirés chaque année mais que 700 sont produits par renouvellement naturel, le bilan annuel simplifié est :',
                        'choices' => [
                            ['choice_text' => 'une diminution de 300 individus', 'is_correct' => true],
                            ['choice_text' => 'une augmentation de 300 individus', 'is_correct' => false],
                            ['choice_text' => 'une augmentation de 1 700 individus', 'is_correct' => false],
                            ['choice_text' => 'aucun changement', 'is_correct' => false],
                        ],
                        'explanation' => 'Le bilan simplifié est 700 − 1 000 = −300 individus.',
                    ],
                    [
                        'question' => 'Quel couple associe correctement une menace et une réponse environnementale ?',
                        'choices' => [
                            ['choice_text' => 'fragmentation des habitats — création de corridors écologiques', 'is_correct' => true],
                            ['choice_text' => 'pollinisation — augmentation du béton', 'is_correct' => false],
                            ['choice_text' => 'érosion — suppression de la végétation', 'is_correct' => false],
                            ['choice_text' => 'sécheresse — augmentation de la consommation d\'eau', 'is_correct' => false],
                        ],
                        'explanation' => 'Les corridors peuvent améliorer la connectivité des habitats fragmentés et faciliter les déplacements entre populations.',
                    ],
                    [
                        'question' => 'Un lac reçoit trop de nutriments agricoles et connaît ensuite une baisse d\'oxygène dissous. La séquence la plus cohérente est :',
                        'choices' => [
                            ['choice_text' => 'enrichissement en nutriments → prolifération d\'algues → décomposition accrue → baisse d\'oxygène', 'is_correct' => true],
                            ['choice_text' => 'enrichissement en nutriments → disparition immédiate de toute vie → oxygène illimité', 'is_correct' => false],
                            ['choice_text' => 'pluie → création de pétrole → hausse des poissons', 'is_correct' => false],
                            ['choice_text' => 'photosynthèse → disparition de l\'eau → hausse du pH à l\'infini', 'is_correct' => false],
                        ],
                        'explanation' => 'L\'apport excessif de nutriments peut provoquer une eutrophisation, puis la décomposition de la biomasse produit une forte demande en oxygène.',
                    ],
                    [
                        'question' => 'Un agriculteur installe une bande végétalisée près d\'un ruisseau. Il cherche notamment à :',
                        'choices' => [
                            ['choice_text' => 'réduire l\'arrivée de sédiments et de nutriments dans le cours d\'eau', 'is_correct' => true],
                            ['choice_text' => 'augmenter le ruissellement', 'is_correct' => false],
                            ['choice_text' => 'supprimer toute infiltration', 'is_correct' => false],
                            ['choice_text' => 'empêcher les plantes de pousser', 'is_correct' => false],
                        ],
                        'explanation' => 'Une bande végétalisée peut ralentir le ruissellement et retenir une partie des particules et nutriments avant leur arrivée dans l\'eau.',
                    ],
                    [
                        'question' => 'Une ville veut réduire les fortes chaleurs locales. Laquelle est cohérente avec cet objectif ?',
                        'choices' => [
                            ['choice_text' => 'augmenter la végétation et l\'ombrage', 'is_correct' => true],
                            ['choice_text' => 'augmenter les surfaces minérales sombres', 'is_correct' => false],
                            ['choice_text' => 'supprimer les arbres', 'is_correct' => false],
                            ['choice_text' => 'réduire tous les espaces verts', 'is_correct' => false],
                        ],
                        'explanation' => 'La végétation fournit de l\'ombre et de l\'évapotranspiration, ce qui peut contribuer à limiter certaines chaleurs urbaines.',
                    ],
                    [
                        'question' => 'Une espèce devient rare après la destruction de son habitat. La première question écologique importante est :',
                        'choices' => [
                            ['choice_text' => 'quelles ressources et conditions de l\'habitat ont été perdues ou modifiées ?', 'is_correct' => true],
                            ['choice_text' => 'quelle est la couleur moyenne de la population ?', 'is_correct' => false],
                            ['choice_text' => 'quel est le type de roche le plus éloigné ?', 'is_correct' => false],
                            ['choice_text' => 'quelle est la longueur du jour dans une autre planète ?', 'is_correct' => false],
                        ],
                        'explanation' => 'La disparition ou dégradation de l\'habitat peut réduire l\'accès à la nourriture, aux refuges et aux sites de reproduction.',
                    ],
                    [
                        'question' => 'Une famille réduit sa consommation d\'électricité issue de combustibles fossiles. Cette action contribue principalement à :',
                        'choices' => [
                            ['choice_text' => 'réduire certaines émissions de gaz à effet de serre', 'is_correct' => true],
                            ['choice_text' => 'augmenter directement la biodiversité mondiale', 'is_correct' => false],
                            ['choice_text' => 'supprimer l\'effet de serre naturel', 'is_correct' => false],
                            ['choice_text' => 'empêcher toute pluie', 'is_correct' => false],
                        ],
                        'explanation' => 'Une baisse de la combustion de combustibles fossiles peut réduire les émissions associées de gaz à effet de serre.',
                    ],
                    [
                        'question' => 'Une ressource renouvelable peut quand même devenir rare lorsque :',
                        'choices' => [
                            ['choice_text' => 'son exploitation dépasse sa vitesse de renouvellement', 'is_correct' => true],
                            ['choice_text' => 'elle est naturellement renouvelée', 'is_correct' => false],
                            ['choice_text' => 'aucun organisme ne l\'utilise', 'is_correct' => false],
                            ['choice_text' => 'elle est abondante à un moment donné', 'is_correct' => false],
                        ],
                        'explanation' => 'Le caractère renouvelable ne signifie pas illimité : une exploitation trop rapide peut dépasser la capacité de régénération.',
                    ],
                    [
                        'question' => 'Quelle démarche est la plus utile pour une gestion environnementale fondée sur les données ?',
                        'choices' => [
                            ['choice_text' => 'mesurer l\'état du milieu, identifier les pressions, agir puis suivre les résultats', 'is_correct' => true],
                            ['choice_text' => 'agir sans mesurer ni suivre', 'is_correct' => false],
                            ['choice_text' => 'mesurer un seul paramètre une seule fois', 'is_correct' => false],
                            ['choice_text' => 'ignorer les changements de population', 'is_correct' => false],
                        ],
                        'explanation' => 'Une gestion adaptative s\'appuie sur l\'observation, l\'identification des pressions, l\'action et le suivi des résultats pour ajuster les mesures.',
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
