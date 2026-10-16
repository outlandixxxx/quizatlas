<?php

namespace Database\Seeders;

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
                        'question' => 'La biologie environnementale étudie :',
                        'choices' => [
                            ['choice_text' => 'la structure et le fonctionnement interne d’une cellule', 'is_correct' => false],
                            ['choice_text' => 'la formation et l’évolution des roches de la croûte terrestre au fil des ères géologiques', 'is_correct' => false],
                            ['choice_text' => 'les relations entre les êtres vivants, leur milieu et les activités humaines', 'is_correct' => true],
                            ['choice_text' => 'le traitement des maladies chez l’être humain', 'is_correct' => false],
                        ],
                        'explanation' => 'Elle s’intéresse au vivant dans son milieu, aux interactions écologiques et aux effets des activités humaines.',
                    ],
                    [
                        'question' => 'Lequel est un élément biotique d’un milieu ?',
                        'choices' => [
                            ['choice_text' => 'une population de poissons', 'is_correct' => true],
                            ['choice_text' => 'la température de l’eau', 'is_correct' => false],
                            ['choice_text' => 'le pH du sol', 'is_correct' => false],
                            ['choice_text' => 'la lumière solaire', 'is_correct' => false],
                        ],
                        'explanation' => 'Un facteur biotique provient du vivant ; les poissons font donc partie des composantes biotiques du milieu.',
                    ],
                    [
                        'question' => 'Lequel est un facteur abiotique ?',
                        'choices' => [
                            ['choice_text' => 'la prédation', 'is_correct' => false],
                            ['choice_text' => 'la compétition', 'is_correct' => false],
                            ['choice_text' => 'le parasitisme', 'is_correct' => false],
                            ['choice_text' => 'la salinité de l’eau', 'is_correct' => true],
                        ],
                        'explanation' => 'La salinité est un facteur physico-chimique non vivant, donc abiotique.',
                    ],
                    [
                        'question' => 'Un environnement comprenant des organismes vivants et des éléments non vivants qui interagissent constitue :',
                        'choices' => [
                            ['choice_text' => 'une population', 'is_correct' => false],
                            ['choice_text' => 'un écosystème', 'is_correct' => true],
                            ['choice_text' => 'une espèce', 'is_correct' => false],
                            ['choice_text' => 'un organe', 'is_correct' => false],
                        ],
                        'explanation' => 'Un écosystème associe une communauté biologique et les facteurs abiotiques de son milieu.',
                    ],
                    [
                        'question' => 'Dans un lac du Moyen Atlas, l’oxygène dissous chute de moitié en été. Quelle conséquence est la plus probable pour les poissons ?',
                        'choices' => [
                            ['choice_text' => 'leur croissance s’accélère, l’eau étant moins dense', 'is_correct' => false],
                            ['choice_text' => 'ils se nourrissent davantage et se reproduisent plus tôt', 'is_correct' => false],
                            ['choice_text' => 'ils deviennent plus résistants aux polluants', 'is_correct' => false],
                            ['choice_text' => 'leur survie et leur reproduction sont menacées', 'is_correct' => true],
                        ],
                        'explanation' => 'Température, oxygène dissous, pH et polluants conditionnent la vie aquatique : sans assez d’oxygène, les poissons s’affaiblissent et se reproduisent mal.',
                    ],
                    [
                        'question' => 'La Merja Zerga, au Maroc, est une zone humide où des milliers d’oiseaux d’eau passent l’hiver. Quel intérêt écologique illustre-t-elle ?',
                        'choices' => [
                            ['choice_text' => 'elle offre des habitats et participe au stockage et à la filtration de l’eau', 'is_correct' => true],
                            ['choice_text' => 'elle sert de réserve de minerais exploitables par l’industrie', 'is_correct' => false],
                            ['choice_text' => 'elle assèche les terres voisines en pompant l’eau des nappes', 'is_correct' => false],
                            ['choice_text' => 'elle limite la biodiversité en concentrant les polluants', 'is_correct' => false],
                        ],
                        'explanation' => 'Les zones humides abritent une faune variée et jouent un rôle hydrologique : elles retiennent et filtrent l’eau.',
                    ],
                    [
                        'question' => 'Une ressource naturelle est dite renouvelable lorsqu’elle :',
                        'choices' => [
                            ['choice_text' => 'se renouvelle en quelques minutes après chaque prélèvement', 'is_correct' => false],
                            ['choice_text' => 'se forme en millions d’années dans le sous-sol', 'is_correct' => false],
                            ['choice_text' => 'se reconstitue naturellement à un rythme compatible avec son utilisation', 'is_correct' => true],
                            ['choice_text' => 'est fabriquée en usine pour remplacer les stocks naturels qui s’épuisent peu à peu', 'is_correct' => false],
                        ],
                        'explanation' => 'Une ressource renouvelable se reconstitue d’elle-même, mais une exploitation trop rapide peut la rendre non durable.',
                    ],
                    [
                        'question' => 'Quel exemple représente une pression humaine sur un écosystème ?',
                        'choices' => [
                            ['choice_text' => 'la chute naturelle d’un arbre âgé', 'is_correct' => false],
                            ['choice_text' => 'la conversion d’une forêt en zone urbaine', 'is_correct' => true],
                            ['choice_text' => 'la prédation d’un lièvre par un renard', 'is_correct' => false],
                            ['choice_text' => 'la migration saisonnière des oiseaux', 'is_correct' => false],
                        ],
                        'explanation' => 'Transformer un habitat naturel modifie les conditions du milieu et peut faire perdre de la biodiversité.',
                    ],
                    [
                        'question' => 'Un service écosystémique correspond :',
                        'choices' => [
                            ['choice_text' => 'à une aide financière versée aux associations de protection de la nature', 'is_correct' => false],
                            ['choice_text' => 'à une intervention technique pour réparer un milieu dégradé', 'is_correct' => false],
                            ['choice_text' => 'à un service public chargé de surveiller les forêts', 'is_correct' => false],
                            ['choice_text' => 'à un bénéfice que les écosystèmes procurent aux sociétés humaines', 'is_correct' => true],
                        ],
                        'explanation' => 'Pollinisation, régulation de l’eau, stockage du carbone ou ressources : ce sont des services rendus par les écosystèmes.',
                    ],
                    [
                        'question' => 'Dans un écosystème, les producteurs primaires sont :',
                        'choices' => [
                            ['choice_text' => 'les végétaux et les algues qui fabriquent leur matière par photosynthèse', 'is_correct' => true],
                            ['choice_text' => 'les herbivores qui se nourrissent de plantes', 'is_correct' => false],
                            ['choice_text' => 'les décomposeurs qui recyclent la matière morte', 'is_correct' => false],
                            ['choice_text' => 'les prédateurs placés au sommet de la chaîne alimentaire et qui régulent les proies', 'is_correct' => false],
                        ],
                        'explanation' => 'Grâce à la lumière, plantes et algues produisent de la matière vivante dont dépendent tous les autres maillons.',
                    ],
                ],
            ],
            [
                'title' => 'Ressources naturelles et durabilité',
                'description' => 'Reconnaître les ressources naturelles, leur renouvellement et les principes de gestion durable.',
                'settings' => ['duration' => 20, 'passing_score' => 55],
                'questions' => [
                    [
                        'question' => 'Le bois d’une forêt est une ressource renouvelable à condition que :',
                        'choices' => [
                            ['choice_text' => 'les coupes ciblent chaque année les arbres les plus jeunes', 'is_correct' => false],
                            ['choice_text' => 'les prélèvements restent compatibles avec la régénération de la forêt', 'is_correct' => true],
                            ['choice_text' => 'la forêt soit clôturée pour empêcher les graines de germer', 'is_correct' => false],
                            ['choice_text' => 'la demande en bois reste durablement supérieure à la croissance de la forêt', 'is_correct' => false],
                        ],
                        'explanation' => 'Une ressource biologique ne se renouvelle durablement que si l’on prélève moins qu’elle ne repousse.',
                    ],
                    [
                        'question' => 'Dans un bassin versant, les agriculteurs pompent 120 millions de m³ d’eau par an alors que les pluies et les nappes n’en renouvellent que 100 millions. Que se passe-t-il à long terme ?',
                        'choices' => [
                            ['choice_text' => 'la ressource se stabilise, les nappes se remplissant d’elles-mêmes chaque année', 'is_correct' => false],
                            ['choice_text' => 'la ressource augmente, l’eau pompée retournant au sol', 'is_correct' => false],
                            ['choice_text' => 'la ressource reste inchangée tant que la pluie continue de tomber', 'is_correct' => false],
                            ['choice_text' => 'la ressource disponible diminue, les prélèvements dépassant la recharge', 'is_correct' => true],
                        ],
                        'explanation' => 'Le déficit de 20 millions de m³ par an s’accumule : la réserve baisse d’année en année.',
                    ],
                    [
                        'question' => 'La surexploitation d’une ressource signifie que :',
                        'choices' => [
                            ['choice_text' => 'on l’utilise plus vite qu’elle ne se reconstitue', 'is_correct' => true],
                            ['choice_text' => 'on l’utilise plus lentement qu’elle ne se reconstitue', 'is_correct' => false],
                            ['choice_text' => 'on la protège dans une réserve fermée à l’exploitation', 'is_correct' => false],
                            ['choice_text' => 'on la partage entre plusieurs pays voisins', 'is_correct' => false],
                        ],
                        'explanation' => 'Quand les prélèvements dépassent le renouvellement, le stock finit par baisser.',
                    ],
                    [
                        'question' => 'Une pêcherie capture 1 000 tonnes de poissons par an alors que le renouvellement naturel estimé est de 700 tonnes. La différence est de :',
                        'choices' => [
                            ['choice_text' => '200 tonnes', 'is_correct' => false],
                            ['choice_text' => '700 tonnes', 'is_correct' => false],
                            ['choice_text' => '300 tonnes', 'is_correct' => true],
                            ['choice_text' => '1 700 tonnes', 'is_correct' => false],
                        ],
                        'explanation' => '1 000 − 700 = 300 tonnes : les captures dépassent le renouvellement estimé de 300 tonnes.',
                    ],
                    [
                        'question' => 'Recycler de l’aluminium plutôt que d’en produire à partir de minerai permet de :',
                        'choices' => [
                            ['choice_text' => 'réduire l’extraction de minerai et l’énergie nécessaire à la fabrication', 'is_correct' => true],
                            ['choice_text' => 'faire repousser naturellement le minerai dans le sous-sol au rythme de la consommation', 'is_correct' => false],
                            ['choice_text' => 'rendre le métal biodégradable', 'is_correct' => false],
                            ['choice_text' => 'produire davantage de bauxite', 'is_correct' => false],
                        ],
                        'explanation' => 'Refondre un métal déjà fabriqué demande bien moins d’énergie qu’en extraire du neuf et épargne le gisement.',
                    ],
                    [
                        'question' => 'Pendant une sécheresse, une commune limite l’arrosage des jardins. L’objectif est de :',
                        'choices' => [
                            ['choice_text' => 'augmenter les pluies sur la région', 'is_correct' => false],
                            ['choice_text' => 'reconstituer les nappes en quelques jours grâce à l’eau économisée dans les jardins', 'is_correct' => false],
                            ['choice_text' => 'réduire la salinité de la mer voisine', 'is_correct' => false],
                            ['choice_text' => 'rapprocher les prélèvements de la quantité d’eau réellement disponible', 'is_correct' => true],
                        ],
                        'explanation' => 'Réduire les usages allège la pression sur une ressource que la sécheresse a fait baisser.',
                    ],
                    [
                        'question' => 'Il faut plusieurs siècles pour former un centimètre de sol fertile. À l’échelle d’une vie humaine, le sol est donc :',
                        'choices' => [
                            ['choice_text' => 'une ressource renouvelable en quelques mois, comme une récolte', 'is_correct' => false],
                            ['choice_text' => 'une ressource très lentement renouvelable, à protéger de l’érosion', 'is_correct' => true],
                            ['choice_text' => 'une ressource minérale qui ne dépend pas du vivant', 'is_correct' => false],
                            ['choice_text' => 'une ressource que l’on reconstitue en quelques semaines par un simple arrosage', 'is_correct' => false],
                        ],
                        'explanation' => 'Un sol perdu par érosion ne se reforme pas à notre échelle de temps : mieux vaut le préserver.',
                    ],
                    [
                        'question' => 'Une énergie produite à partir du rayonnement solaire est classée comme :',
                        'choices' => [
                            ['choice_text' => 'une ressource fossile', 'is_correct' => false],
                            ['choice_text' => 'une ressource non renouvelable à l’échelle humaine', 'is_correct' => false],
                            ['choice_text' => 'une ressource renouvelable', 'is_correct' => true],
                            ['choice_text' => 'une ressource biologique prélevée dans les forêts', 'is_correct' => false],
                        ],
                        'explanation' => 'Le Soleil fournit son rayonnement de façon continue à l’échelle humaine.',
                    ],
                    [
                        'question' => 'Pour savoir si une pêcherie de sardines est durable, un gestionnaire compare surtout :',
                        'choices' => [
                            ['choice_text' => 'les captures, les effectifs des populations et leur taux de renouvellement', 'is_correct' => true],
                            ['choice_text' => 'le prix de vente du poisson et le coût du carburant', 'is_correct' => false],
                            ['choice_text' => 'le nombre de ports de pêche, leur capacité d’accueil et leur distance à la côte', 'is_correct' => false],
                            ['choice_text' => 'la taille moyenne des bateaux et leur puissance moteur', 'is_correct' => false],
                        ],
                        'explanation' => 'Seules des données biologiques permettent de savoir si l’on prélève plus que le stock ne se reconstitue.',
                    ],
                    [
                        'question' => 'Une ressource non renouvelable est une ressource qui :',
                        'choices' => [
                            ['choice_text' => 'se renouvelle chaque saison comme les récoltes', 'is_correct' => false],
                            ['choice_text' => 'est produite chaque jour par les plantes', 'is_correct' => false],
                            ['choice_text' => 'ne peut être exploitée que dans les pays chauds', 'is_correct' => false],
                            ['choice_text' => 'se reconstitue sur une durée bien plus longue que celle de l’usage humain', 'is_correct' => true],
                        ],
                        'explanation' => 'Pétrole, charbon et certains minerais se forment sur des millions d’années, bien au-delà de nos besoins.',
                    ],
                ],
            ],
            [
                'title' => 'Pollution et qualité de l\'environnement',
                'description' => 'Identifier les principales formes de pollution et leurs effets sur les organismes et les milieux.',
                'settings' => ['duration' => 20, 'passing_score' => 60],
                'questions' => [
                    [
                        'question' => 'En aval d’un rejet d’eaux usées riches en matière organique, le taux d’oxygène d’une rivière chute. Qu’est-ce qui l’explique ?',
                        'choices' => [
                            ['choice_text' => 'les poissons respirent plus vite et épuisent seuls l’oxygène', 'is_correct' => false],
                            ['choice_text' => 'la matière organique se transforme en gaz carbonique qui chasse l’oxygène de l’air', 'is_correct' => false],
                            ['choice_text' => 'le courant emporte l’oxygène vers la mer', 'is_correct' => false],
                            ['choice_text' => 'les microorganismes qui décomposent la matière organique consomment l’oxygène', 'is_correct' => true],
                        ],
                        'explanation' => 'Décomposer beaucoup de matière demande beaucoup d’oxygène, au détriment des poissons.',
                    ],
                    [
                        'question' => 'Un polluant présent dans l’air au-dessus des limites recommandées pose un problème de :',
                        'choices' => [
                            ['choice_text' => 'pollution des sols', 'is_correct' => false],
                            ['choice_text' => 'pollution atmosphérique', 'is_correct' => true],
                            ['choice_text' => 'pollution de l’eau', 'is_correct' => false],
                            ['choice_text' => 'pollution sonore', 'is_correct' => false],
                        ],
                        'explanation' => 'Une présence excessive de substances nuisibles dans l’atmosphère s’appelle une pollution atmosphérique.',
                    ],
                    [
                        'question' => 'Un métal lourd est absorbé par un poisson plus vite qu’il ne l’élimine et s’accumule dans ses tissus. Ce phénomène s’appelle :',
                        'choices' => [
                            ['choice_text' => 'la bioamplification', 'is_correct' => false],
                            ['choice_text' => 'la biodégradation', 'is_correct' => false],
                            ['choice_text' => 'la bioaccumulation', 'is_correct' => true],
                            ['choice_text' => 'la bioremédiation', 'is_correct' => false],
                        ],
                        'explanation' => 'Quand l’absorption dépasse l’élimination, la substance s’accumule peu à peu dans l’organisme.',
                    ],
                    [
                        'question' => 'Le mercure est plus concentré chez le thon que chez le plancton dont dépend sa chaîne alimentaire. Cette hausse le long de la chaîne s’appelle :',
                        'choices' => [
                            ['choice_text' => 'la bioamplification', 'is_correct' => true],
                            ['choice_text' => 'la bioaccumulation', 'is_correct' => false],
                            ['choice_text' => 'la biodégradation', 'is_correct' => false],
                            ['choice_text' => 'l’eutrophisation', 'is_correct' => false],
                        ],
                        'explanation' => 'Chaque maillon consomme beaucoup de proies contaminées : la concentration grimpe vers le sommet de la chaîne.',
                    ],
                    [
                        'question' => 'Un excès de nitrates et de phosphates dans un lac favorise :',
                        'choices' => [
                            ['choice_text' => 'l’acidification', 'is_correct' => false],
                            ['choice_text' => 'la salinisation', 'is_correct' => false],
                            ['choice_text' => 'l’eutrophisation', 'is_correct' => true],
                            ['choice_text' => 'l’érosion', 'is_correct' => false],
                        ],
                        'explanation' => 'Ces nutriments stimulent les algues et déséquilibrent le milieu aquatique.',
                    ],
                    [
                        'question' => 'Le bruit routier intense gêne certains oiseaux et mammifères en perturbant :',
                        'choices' => [
                            ['choice_text' => 'la composition génétique de leurs populations', 'is_correct' => false],
                            ['choice_text' => 'leur communication et leurs comportements', 'is_correct' => true],
                            ['choice_text' => 'la qualité de l’eau de leur habitat', 'is_correct' => false],
                            ['choice_text' => 'la température de leur milieu', 'is_correct' => false],
                        ],
                        'explanation' => 'Le bruit couvre les chants et les cris, ce qui modifie les déplacements et la reproduction de certaines espèces.',
                    ],
                    [
                        'question' => 'Quel geste réduit le plus directement la quantité de déchets plastiques à usage unique ?',
                        'choices' => [
                            ['choice_text' => 'utiliser une gourde réutilisable plutôt que des bouteilles jetables', 'is_correct' => true],
                            ['choice_text' => 'acheter des bouteilles plus petites mais en plus grand nombre', 'is_correct' => false],
                            ['choice_text' => 'choisir des bouteilles marquées « biodégradables » sans changer ses habitudes', 'is_correct' => false],
                            ['choice_text' => 'brûler les bouteilles en plein air pour réduire leur volume', 'is_correct' => false],
                        ],
                        'explanation' => 'Le meilleur déchet est celui qu’on ne produit pas : réutiliser évite l’achat d’objets jetables.',
                    ],
                    [
                        'question' => 'Après une marée noire, de nombreux oiseaux marins meurent. Une raison directe est que :',
                        'choices' => [
                            ['choice_text' => 'le pétrole rend l’eau trop salée pour qu’ils puissent encore la boire', 'is_correct' => false],
                            ['choice_text' => 'le pétrole augmente la température de la mer autour d’eux', 'is_correct' => false],
                            ['choice_text' => 'le pétrole les prive de lumière pour repérer leurs proies', 'is_correct' => false],
                            ['choice_text' => 'le pétrole recouvre leurs plumes et détruit leur isolation', 'is_correct' => true],
                        ],
                        'explanation' => 'Des plumes engluées ne protègent plus du froid ni de l’eau, et l’animal s’épuise ou s’intoxique en se nettoyant.',
                    ],
                    [
                        'question' => 'Pour comparer la qualité de deux rivières, Nadia mesure :',
                        'choices' => [
                            ['choice_text' => 'le débit des deux rivières à un seul endroit', 'is_correct' => false],
                            ['choice_text' => 'plusieurs paramètres chimiques et biologiques dans chacune', 'is_correct' => true],
                            ['choice_text' => 'la largeur des deux lits à plusieurs endroits', 'is_correct' => false],
                            ['choice_text' => 'la température de l’air au bord de chaque rivière à midi pendant plusieurs jours', 'is_correct' => false],
                        ],
                        'explanation' => 'Un seul paramètre ne suffit pas : on croise des mesures physico-chimiques et des indicateurs biologiques.',
                    ],
                    [
                        'question' => 'Réduire l’usage des pesticides peut contribuer à :',
                        'choices' => [
                            ['choice_text' => 'éliminer plus vite les maladies des cultures', 'is_correct' => false],
                            ['choice_text' => 'augmenter les quantités d’engrais qui arrivent dans les cours d’eau voisins', 'is_correct' => false],
                            ['choice_text' => 'protéger des organismes non ciblés, comme les abeilles et les oiseaux', 'is_correct' => true],
                            ['choice_text' => 'faire reculer la biodiversité des sols', 'is_correct' => false],
                        ],
                        'explanation' => 'Moins de produits épandus, c’est moins de contacts avec les espèces qui n’étaient pas visées.',
                    ],
                ],
            ],
            [
                'title' => 'Changement climatique et environnement',
                'description' => 'Comprendre les bases du changement climatique, de l’effet de serre et des réponses environnementales.',
                'settings' => ['duration' => 25, 'passing_score' => 60],
                'questions' => [
                    [
                        'question' => 'L’effet de serre naturel :',
                        'choices' => [
                            ['choice_text' => 'retient une partie de la chaleur et rend la température compatible avec la vie', 'is_correct' => true],
                            ['choice_text' => 'bloque la lumière du Soleil avant qu’elle atteigne le sol', 'is_correct' => false],
                            ['choice_text' => 'refroidit la planète en renvoyant la chaleur du sol directement vers l’espace lointain', 'is_correct' => false],
                            ['choice_text' => 'est un phénomène récent causé par l’industrie', 'is_correct' => false],
                        ],
                        'explanation' => 'Sans lui la Terre serait gelée ; c’est son renforcement par les activités humaines qui pose problème.',
                    ],
                    [
                        'question' => 'Quand la concentration de certains gaz à effet de serre augmente, le système climatique tend à :',
                        'choices' => [
                            ['choice_text' => 'se refroidir à l’échelle du globe', 'is_correct' => false],
                            ['choice_text' => 'garder la même température qu’avant', 'is_correct' => false],
                            ['choice_text' => 'se réchauffer davantage', 'is_correct' => true],
                            ['choice_text' => 'voir sa couche d’ozone disparaître', 'is_correct' => false],
                        ],
                        'explanation' => 'Plus de gaz à effet de serre signifie plus de chaleur retenue, donc un réchauffement à long terme.',
                    ],
                    [
                        'question' => 'Lequel est un gaz à effet de serre important ?',
                        'choices' => [
                            ['choice_text' => 'l’oxygène', 'is_correct' => false],
                            ['choice_text' => 'le dioxyde de carbone', 'is_correct' => true],
                            ['choice_text' => 'l’azote', 'is_correct' => false],
                            ['choice_text' => 'l’hélium', 'is_correct' => false],
                        ],
                        'explanation' => 'Le CO₂ absorbe une partie du rayonnement infrarouge émis par la Terre.',
                    ],
                    [
                        'question' => 'Une forêt est brûlée pour faire place à des pâturages. Quel lien avec le climat ?',
                        'choices' => [
                            ['choice_text' => 'les arbres brûlés produisent de l’azote qui refroidit l’atmosphère à grande échelle', 'is_correct' => false],
                            ['choice_text' => 'la forêt disparue ne participait pas au cycle du carbone', 'is_correct' => false],
                            ['choice_text' => 'les pâturages absorbent plus de CO₂ que la forêt', 'is_correct' => false],
                            ['choice_text' => 'le carbone des arbres part en CO₂ et la forêt en absorbe moins ensuite', 'is_correct' => true],
                        ],
                        'explanation' => 'Brûler des arbres libère leur carbone, et il n’y a plus de feuilles pour en reprendre par photosynthèse.',
                    ],
                    [
                        'question' => 'Une espèce d’oiseaux se retrouve de plus en plus au nord de son ancienne aire. Une explication liée au climat est :',
                        'choices' => [
                            ['choice_text' => 'une mutation soudaine qui change la température qu’elle supporte', 'is_correct' => false],
                            ['choice_text' => 'la recherche de conditions de température plus favorables', 'is_correct' => true],
                            ['choice_text' => 'la disparition de ses prédateurs dans son ancienne aire', 'is_correct' => false],
                            ['choice_text' => 'l’apparition d’une nouvelle espèce mieux adaptée', 'is_correct' => false],
                        ],
                        'explanation' => 'Quand le climat se réchauffe, beaucoup d’espèces suivent leur zone de température vers les pôles ou en altitude.',
                    ],
                    [
                        'question' => 'Une commune côtière construit une digue et déplace des habitations menacées par la montée des eaux. Cette stratégie relève de :',
                        'choices' => [
                            ['choice_text' => 'l’atténuation du changement climatique', 'is_correct' => false],
                            ['choice_text' => 'la restauration écologique', 'is_correct' => false],
                            ['choice_text' => 'l’adaptation au changement climatique', 'is_correct' => true],
                            ['choice_text' => 'la compensation carbone', 'is_correct' => false],
                        ],
                        'explanation' => 'On ne cherche pas à stopper le phénomène mais à réduire les dommages qu’il cause.',
                    ],
                    [
                        'question' => 'Une usine remplace le charbon par l’énergie solaire pour limiter ses émissions de CO₂. Cette action relève de :',
                        'choices' => [
                            ['choice_text' => 'l’adaptation au changement climatique', 'is_correct' => false],
                            ['choice_text' => 'la dépollution des sols', 'is_correct' => false],
                            ['choice_text' => 'la protection d’une espèce menacée', 'is_correct' => false],
                            ['choice_text' => 'l’atténuation du changement climatique', 'is_correct' => true],
                        ],
                        'explanation' => 'Émettre moins de gaz à effet de serre s’attaque à la cause du réchauffement : c’est l’atténuation.',
                    ],
                    [
                        'question' => 'Un lézard de montagne supporte au maximum 35 °C. Si les vagues de chaleur dépassent régulièrement ce seuil, sa population risque de :',
                        'choices' => [
                            ['choice_text' => 'diminuer, sa survie et sa reproduction étant menacées', 'is_correct' => true],
                            ['choice_text' => 'augmenter, la chaleur accélérant sa croissance et sa reproduction', 'is_correct' => false],
                            ['choice_text' => 'se répartir plus uniformément sur le territoire', 'is_correct' => false],
                            ['choice_text' => 'rester stable, l’espèce s’adaptant sur-le-champ', 'is_correct' => false],
                        ],
                        'explanation' => 'Chaque espèce a une plage de tolérance ; au-delà, elle survit et se reproduit moins bien.',
                    ],
                    [
                        'question' => 'Quel rôle les océans jouent-ils dans le climat ?',
                        'choices' => [
                            ['choice_text' => 'ils émettent plus de CO₂ qu’ils n’en absorbent chaque année', 'is_correct' => false],
                            ['choice_text' => 'ils renvoient directement vers l’espace l’essentiel du rayonnement solaire reçu', 'is_correct' => false],
                            ['choice_text' => 'ils stockent de la chaleur et échangent du carbone avec l’atmosphère', 'is_correct' => true],
                            ['choice_text' => 'ils agissent sur le cycle de l’eau mais pas sur celui du carbone', 'is_correct' => false],
                        ],
                        'explanation' => 'Les océans absorbent une partie du CO₂ émis et emmagasinent l’essentiel de la chaleur en excès.',
                    ],
                    [
                        'question' => 'Laquelle de ces fontes fait monter le niveau des mers ?',
                        'choices' => [
                            ['choice_text' => 'la fonte de la banquise arctique', 'is_correct' => false],
                            ['choice_text' => 'la fonte des glaciers et des calottes posés sur les continents', 'is_correct' => true],
                            ['choice_text' => 'la fonte des icebergs déjà flottants', 'is_correct' => false],
                            ['choice_text' => 'la fonte de la neige qui est tombée directement sur la surface de la mer', 'is_correct' => false],
                        ],
                        'explanation' => 'La glace déjà flottante occupe presque le même volume une fois fondue, alors que la glace des continents ajoute de l’eau à l’océan.',
                    ],
                ],
            ],
            [
                'title' => 'Conservation et gestion des habitats',
                'description' => 'Étudier les habitats, la fragmentation, les corridors et la restauration écologique.',
                'settings' => ['duration' => 20, 'passing_score' => 65],
                'questions' => [
                    [
                        'question' => 'Un habitat est :',
                        'choices' => [
                            ['choice_text' => 'le rôle qu’une espèce joue dans la chaîne alimentaire', 'is_correct' => false],
                            ['choice_text' => 'l’ensemble des espèces présentes dans un milieu', 'is_correct' => false],
                            ['choice_text' => 'le milieu physique où vit une espèce', 'is_correct' => true],
                            ['choice_text' => 'la zone parcourue par une espèce lors de sa migration', 'is_correct' => false],
                        ],
                        'explanation' => 'L’habitat désigne l’endroit où vit l’espèce, pas ce qu’elle y fait.',
                    ],
                    [
                        'question' => 'La fragmentation d’une forêt par des routes et des cultures :',
                        'choices' => [
                            ['choice_text' => 'agrandit les territoires disponibles pour chaque espèce', 'is_correct' => false],
                            ['choice_text' => 'améliore les échanges entre les populations', 'is_correct' => false],
                            ['choice_text' => 'protège les espèces contre leurs prédateurs', 'is_correct' => false],
                            ['choice_text' => 'isole les populations et réduit leurs déplacements', 'is_correct' => true],
                        ],
                        'explanation' => 'Le milieu est découpé en morceaux plus petits et plus isolés.',
                    ],
                    [
                        'question' => 'Un corridor écologique sert à :',
                        'choices' => [
                            ['choice_text' => 'relier des habitats séparés pour permettre les déplacements', 'is_correct' => true],
                            ['choice_text' => 'isoler une réserve de ses alentours', 'is_correct' => false],
                            ['choice_text' => 'concentrer les animaux dans un seul habitat pour mieux les surveiller', 'is_correct' => false],
                            ['choice_text' => 'protéger une réserve contre les incendies', 'is_correct' => false],
                        ],
                        'explanation' => 'Les corridors rétablissent la circulation des animaux et des graines entre fragments d’habitat.',
                    ],
                    [
                        'question' => 'Un parc de 50 hectares est trop petit pour un grand félin qui chasse sur 500 hectares. Cela montre que :',
                        'choices' => [
                            ['choice_text' => 'les grands félins n’ont pas besoin d’aires protégées', 'is_correct' => false],
                            ['choice_text' => 'la taille d’une aire protégée doit suivre les besoins en espace des espèces', 'is_correct' => true],
                            ['choice_text' => 'la taille d’une aire protégée n’intervient que pour la beauté du paysage et le tourisme', 'is_correct' => false],
                            ['choice_text' => 'interdire la chasse dans le parc suffit à protéger l’espèce', 'is_correct' => false],
                        ],
                        'explanation' => 'Sans assez d’espace pour se nourrir et se reproduire, une population ne se maintient pas.',
                    ],
                    [
                        'question' => 'Après un incendie, des herbacées puis des arbustes recolonisent un sol resté en place. Ce processus est :',
                        'choices' => [
                            ['choice_text' => 'une succession primaire', 'is_correct' => false],
                            ['choice_text' => 'une extinction locale', 'is_correct' => false],
                            ['choice_text' => 'une adaptation évolutive', 'is_correct' => false],
                            ['choice_text' => 'une succession secondaire', 'is_correct' => true],
                        ],
                        'explanation' => 'Le sol existe encore, donc la recolonisation est plus rapide que sur une roche nue.',
                    ],
                    [
                        'question' => 'La restauration écologique cherche à :',
                        'choices' => [
                            ['choice_text' => 'rétablir des fonctions et des caractéristiques d’un écosystème dégradé', 'is_correct' => true],
                            ['choice_text' => 'créer un nouvel écosystème sans lien avec le milieu d’origine', 'is_correct' => false],
                            ['choice_text' => 'fermer définitivement le site au public', 'is_correct' => false],
                            ['choice_text' => 'remplacer les espèces locales par des espèces exotiques à croissance rapide', 'is_correct' => false],
                        ],
                        'explanation' => 'L’objectif est de remettre un milieu abîmé sur la voie de son fonctionnement naturel.',
                    ],
                    [
                        'question' => 'Une haie champêtre plantée entre deux champs de blé peut servir de :',
                        'choices' => [
                            ['choice_text' => 'barrière qui bloque les déplacements des espèces entre les deux champs', 'is_correct' => false],
                            ['choice_text' => 'refuge et de corridor pour de petits animaux et des insectes', 'is_correct' => true],
                            ['choice_text' => 'source d’eau potable pour les cultures voisines', 'is_correct' => false],
                            ['choice_text' => 'substitut au sol cultivé', 'is_correct' => false],
                        ],
                        'explanation' => 'Les haies offrent abri, nourriture et passage dans un paysage agricole.',
                    ],
                    [
                        'question' => 'Une espèce exotique envahissante :',
                        'choices' => [
                            ['choice_text' => 'est une espèce locale dont les effectifs augmentent naturellement', 'is_correct' => false],
                            ['choice_text' => 'est une espèce disparue puis réintroduite', 'is_correct' => false],
                            ['choice_text' => 's’établit hors de son aire d’origine et menace les espèces locales', 'is_correct' => true],
                            ['choice_text' => 'est une espèce protégée par la loi dans son pays d’origine', 'is_correct' => false],
                        ],
                        'explanation' => 'Sans prédateurs ni maladies de son pays d’origine, elle peut se multiplier au détriment des espèces du milieu.',
                    ],
                    [
                        'question' => 'Pour juger la réussite de la restauration d’une forêt de chênes-lièges, il faut :',
                        'choices' => [
                            ['choice_text' => 'compter les arbres plantés le jour de la plantation puis ne plus revenir sur le site', 'is_correct' => false],
                            ['choice_text' => 'mesurer la hauteur d’un seul arbre après un an', 'is_correct' => false],
                            ['choice_text' => 'comparer le site à une zone urbaine voisine', 'is_correct' => false],
                            ['choice_text' => 'suivre dans la durée la végétation, les populations et les fonctions du milieu', 'is_correct' => true],
                        ],
                        'explanation' => 'Un suivi sur plusieurs années montre si le milieu retrouve réellement ses fonctions.',
                    ],
                    [
                        'question' => 'Quand une population tombe à quelques dizaines d’individus, quel risque s’ajoute à ceux qui pèsent déjà sur elle ?',
                        'choices' => [
                            ['choice_text' => 'la perte de diversité génétique et la consanguinité', 'is_correct' => true],
                            ['choice_text' => 'une croissance plus rapide grâce à la baisse de la concurrence', 'is_correct' => false],
                            ['choice_text' => 'un changement d’espèce par mutation', 'is_correct' => false],
                            ['choice_text' => 'une adaptation plus rapide grâce au grand nombre de mutations', 'is_correct' => false],
                        ],
                        'explanation' => 'Entre individus très apparentés, les gènes défavorables se rencontrent plus souvent et la population s’adapte mal.',
                    ],
                ],
            ],
            [
                'title' => 'Agriculture, sols et environnement',
                'description' => 'Comprendre les interactions entre pratiques agricoles, biodiversité, sols et qualité de l’environnement.',
                'settings' => ['duration' => 20, 'passing_score' => 65],
                'questions' => [
                    [
                        'question' => 'Sur un coteau, un champ laissé nu en hiver perd beaucoup de terre à chaque averse, alors qu’une prairie voisine résiste. Qu’est-ce qui explique la différence ?',
                        'choices' => [
                            ['choice_text' => 'la prairie reçoit moins de pluie que le champ', 'is_correct' => false],
                            ['choice_text' => 'les racines et les feuilles de la prairie retiennent le sol et freinent la pluie', 'is_correct' => true],
                            ['choice_text' => 'la terre de la prairie est plus lourde par nature et résiste mieux à l’eau de pluie', 'is_correct' => false],
                            ['choice_text' => 'le champ nu est plus riche en matière organique', 'is_correct' => false],
                        ],
                        'explanation' => 'Sans couvert végétal, les gouttes frappent directement le sol et le ruissellement emporte les particules.',
                    ],
                    [
                        'question' => 'Dans une région chaude, une irrigation mal drainée peut rendre un sol trop salé. Ce phénomène s’appelle :',
                        'choices' => [
                            ['choice_text' => 'la salinisation', 'is_correct' => true],
                            ['choice_text' => 'l’érosion', 'is_correct' => false],
                            ['choice_text' => 'l’acidification', 'is_correct' => false],
                            ['choice_text' => 'la compaction', 'is_correct' => false],
                        ],
                        'explanation' => 'L’eau s’évapore et laisse ses sels dans le sol, qui finit par devenir impropre aux cultures.',
                    ],
                    [
                        'question' => 'La rotation des cultures permet de :',
                        'choices' => [
                            ['choice_text' => 'cultiver la même espèce chaque année sur la même parcelle afin de gagner du temps', 'is_correct' => false],
                            ['choice_text' => 'remplacer l’eau d’irrigation par des engrais', 'is_correct' => false],
                            ['choice_text' => 'stériliser le sol entre deux saisons', 'is_correct' => false],
                            ['choice_text' => 'limiter certains ravageurs et mieux gérer les nutriments du sol', 'is_correct' => true],
                        ],
                        'explanation' => 'En changeant de culture, on coupe le cycle des ravageurs et on varie les besoins en nutriments.',
                    ],
                    [
                        'question' => 'Un sol riche en matière organique peut :',
                        'choices' => [
                            ['choice_text' => 'se drainer plus vite et perdre ses nutriments', 'is_correct' => false],
                            ['choice_text' => 'devenir plus compact et plus dur', 'is_correct' => false],
                            ['choice_text' => 'retenir davantage d’eau et de nutriments', 'is_correct' => true],
                            ['choice_text' => 'se réchauffer moins vite pendant la journée', 'is_correct' => false],
                        ],
                        'explanation' => 'La matière organique agit comme une éponge et améliore la structure du sol.',
                    ],
                    [
                        'question' => 'Les vers de terre contribuent notamment à :',
                        'choices' => [
                            ['choice_text' => 'aérer le sol et mélanger ses couches', 'is_correct' => true],
                            ['choice_text' => 'fixer l’azote de l’air dans les racines', 'is_correct' => false],
                            ['choice_text' => 'dissoudre les roches pour libérer des minéraux', 'is_correct' => false],
                            ['choice_text' => 'rendre le sol imperméable en tassant la terre', 'is_correct' => false],
                        ],
                        'explanation' => 'Leurs galeries laissent circuler l’air et l’eau, et leur activité brasse les matériaux du sol.',
                    ],
                    [
                        'question' => 'Une exploitation qui cultive plusieurs espèces accueille plus d’organismes qu’une monoculture. La raison est qu’elle :',
                        'choices' => [
                            ['choice_text' => 'réduit la variété d’insectes présents', 'is_correct' => false],
                            ['choice_text' => 'uniformise les plantes cultivées', 'is_correct' => false],
                            ['choice_text' => 'bloque l’activité des microorganismes du sol', 'is_correct' => false],
                            ['choice_text' => 'offre davantage de ressources et d’habitats différents', 'is_correct' => true],
                        ],
                        'explanation' => 'Chaque culture apporte sa nourriture et son abri, ce qui attire des espèces variées.',
                    ],
                    [
                        'question' => 'Une bande végétalisée le long d’un cours d’eau réduit :',
                        'choices' => [
                            ['choice_text' => 'la quantité de pluie reçue par le bassin versant pendant l’année', 'is_correct' => false],
                            ['choice_text' => 'la salinité de l’eau à l’embouchure', 'is_correct' => false],
                            ['choice_text' => 'l’arrivée de sédiments et de nutriments agricoles dans l’eau', 'is_correct' => true],
                            ['choice_text' => 'l’oxygène produit par les algues', 'is_correct' => false],
                        ],
                        'explanation' => 'La végétation freine le ruissellement et retient une partie des particules et des engrais.',
                    ],
                    [
                        'question' => 'Dans le Souss, de nombreux agriculteurs passent de l’irrigation par submersion au goutte-à-goutte. Quel est l’intérêt ?',
                        'choices' => [
                            ['choice_text' => 'augmenter l’évaporation pour rafraîchir les cultures pendant les mois les plus chauds', 'is_correct' => false],
                            ['choice_text' => 'apporter l’eau près des racines et limiter l’évaporation et le ruissellement', 'is_correct' => true],
                            ['choice_text' => 'alimenter la nappe avec de l’eau salée', 'is_correct' => false],
                            ['choice_text' => 'se passer de fertilisation', 'is_correct' => false],
                        ],
                        'explanation' => 'L’eau arrive là où la plante en a besoin, donc moins en est gaspillée.',
                    ],
                    [
                        'question' => 'Réduire le travail du sol, par exemple avec le semis direct, permet de :',
                        'choices' => [
                            ['choice_text' => 'limiter l’érosion et préserver la structure du sol', 'is_correct' => true],
                            ['choice_text' => 'retourner la terre plus profondément pour la rendre plus fertile', 'is_correct' => false],
                            ['choice_text' => 'supprimer les besoins en eau des cultures', 'is_correct' => false],
                            ['choice_text' => 'détruire les champignons utiles du sol', 'is_correct' => false],
                        ],
                        'explanation' => 'Un sol moins remué garde sa structure et sa vie biologique, et s’érode moins.',
                    ],
                    [
                        'question' => 'Un agriculteur cultive plusieurs variétés d’une même culture. Cela permet de :',
                        'choices' => [
                            ['choice_text' => 'obtenir des plantes identiques d’une parcelle à l’autre pour simplifier la récolte', 'is_correct' => false],
                            ['choice_text' => 'réduire la quantité de graines à acheter chaque année', 'is_correct' => false],
                            ['choice_text' => 'empêcher les plantes de se croiser entre parcelles', 'is_correct' => false],
                            ['choice_text' => 'garder une réserve de diversité génétique utile à l’adaptation', 'is_correct' => true],
                        ],
                        'explanation' => 'Si une maladie ou une sécheresse frappe une variété, une autre peut mieux résister.',
                    ],
                ],
            ],
            [
                'title' => 'Écosystèmes urbains et environnement',
                'description' => 'Explorer les effets de l’urbanisation sur l’eau, la biodiversité, le climat local et les ressources.',
                'settings' => ['duration' => 20, 'passing_score' => 65],
                'questions' => [
                    [
                        'question' => 'Quand les surfaces bétonnées gagnent du terrain dans une ville, l’eau de pluie :',
                        'choices' => [
                            ['choice_text' => 's’infiltre davantage et alimente mieux les nappes', 'is_correct' => false],
                            ['choice_text' => 's’évapore avant d’avoir touché le sol', 'is_correct' => false],
                            ['choice_text' => 'se charge en sels minéraux qui fertilisent le sol', 'is_correct' => false],
                            ['choice_text' => 'ruisselle davantage et s’infiltre moins dans le sol', 'is_correct' => true],
                        ],
                        'explanation' => 'Le béton ne laisse pas passer l’eau : elle file vers les égouts au lieu de pénétrer dans le sol.',
                    ],
                    [
                        'question' => 'Les îlots de chaleur urbains s’expliquent notamment par :',
                        'choices' => [
                            ['choice_text' => 'une couverture dense d’arbres qui retient la chaleur près des bâtiments et des rues', 'is_correct' => false],
                            ['choice_text' => 'une circulation d’air trop forte entre les bâtiments', 'is_correct' => false],
                            ['choice_text' => 'des surfaces minérales qui stockent la chaleur et un manque de végétation', 'is_correct' => true],
                            ['choice_text' => 'des nappes d’eau plus nombreuses qu’en campagne', 'is_correct' => false],
                        ],
                        'explanation' => 'Béton et bitume absorbent la chaleur le jour et la restituent la nuit, alors que la végétation rafraîchit l’air.',
                    ],
                    [
                        'question' => 'Planter des arbres en ville apporte :',
                        'choices' => [
                            ['choice_text' => 'une baisse spectaculaire de la pollution de l’air en quelques semaines', 'is_correct' => false],
                            ['choice_text' => 'de l’ombre, des habitats et un refroidissement local', 'is_correct' => true],
                            ['choice_text' => 'une hausse de la température sous les branches', 'is_correct' => false],
                            ['choice_text' => 'une augmentation du ruissellement sur les trottoirs', 'is_correct' => false],
                        ],
                        'explanation' => 'L’ombre et l’eau évaporée par les feuilles rafraîchissent l’air, et les branches abritent oiseaux et insectes.',
                    ],
                    [
                        'question' => 'Un toit végétalisé peut notamment :',
                        'choices' => [
                            ['choice_text' => 'retenir une partie des eaux de pluie', 'is_correct' => true],
                            ['choice_text' => 'augmenter l’eau évacuée vers les égouts lors des orages', 'is_correct' => false],
                            ['choice_text' => 'réchauffer l’intérieur du bâtiment en été', 'is_correct' => false],
                            ['choice_text' => 'empêcher l’évaporation de l’eau de pluie', 'is_correct' => false],
                        ],
                        'explanation' => 'Substrat et plantes absorbent temporairement la pluie, ce qui allège les réseaux d’évacuation.',
                    ],
                    [
                        'question' => 'Les éclairages publics très puissants peuvent perturber certains insectes et oiseaux nocturnes. Ce phénomène s’appelle :',
                        'choices' => [
                            ['choice_text' => 'la pollution sonore', 'is_correct' => false],
                            ['choice_text' => 'la pollution thermique', 'is_correct' => false],
                            ['choice_text' => 'la pollution lumineuse', 'is_correct' => true],
                            ['choice_text' => 'la pollution chimique', 'is_correct' => false],
                        ],
                        'explanation' => 'La lumière artificielle dérègle l’orientation et les rythmes de nombreux animaux de nuit.',
                    ],
                    [
                        'question' => 'Une noue plantée le long d’une rue sert à :',
                        'choices' => [
                            ['choice_text' => 'évacuer l’eau le plus vite possible vers l’égout pour éviter les inondations', 'is_correct' => false],
                            ['choice_text' => 'recueillir temporairement l’eau de pluie et la laisser s’infiltrer', 'is_correct' => true],
                            ['choice_text' => 'stocker l’eau potable des habitants', 'is_correct' => false],
                            ['choice_text' => 'empêcher la pluie de toucher le sol', 'is_correct' => false],
                        ],
                        'explanation' => 'Ce fossé végétalisé ralentit l’écoulement et rend à la nappe une partie de l’eau de pluie.',
                    ],
                    [
                        'question' => 'Développer des pistes cyclables et des zones piétonnes peut contribuer à :',
                        'choices' => [
                            ['choice_text' => 'réduire des déplacements motorisés et leurs émissions', 'is_correct' => true],
                            ['choice_text' => 'augmenter le trafic automobile en centre-ville', 'is_correct' => false],
                            ['choice_text' => 'supprimer les besoins en énergie des habitants', 'is_correct' => false],
                            ['choice_text' => 'remplacer les transports en commun', 'is_correct' => false],
                        ],
                        'explanation' => 'Chaque trajet fait à pied ou à vélo évite l’émission de gaz d’échappement.',
                    ],
                    [
                        'question' => 'Le compostage des déchets de cuisine dans un quartier permet de :',
                        'choices' => [
                            ['choice_text' => 'produire du pétrole à partir des déchets', 'is_correct' => false],
                            ['choice_text' => 'se passer du ramassage des ordures', 'is_correct' => false],
                            ['choice_text' => 'stériliser les déchets avant leur collecte pour supprimer les mauvaises odeurs', 'is_correct' => false],
                            ['choice_text' => 'réduire le volume de déchets à enfouir et d’obtenir un amendement pour le sol', 'is_correct' => true],
                        ],
                        'explanation' => 'Les déchets organiques se décomposent en terreau que l’on peut remettre dans les jardins.',
                    ],
                    [
                        'question' => 'Une ville de 100 000 habitants produit 1,2 kg de déchets par habitant et par jour. La masse quotidienne est de :',
                        'choices' => [
                            ['choice_text' => '12 tonnes', 'is_correct' => false],
                            ['choice_text' => '1 200 tonnes', 'is_correct' => false],
                            ['choice_text' => '120 tonnes', 'is_correct' => true],
                            ['choice_text' => '1,2 tonne', 'is_correct' => false],
                        ],
                        'explanation' => '100 000 × 1,2 kg = 120 000 kg, soit 120 tonnes.',
                    ],
                    [
                        'question' => 'Une pluie de 20 mm tombe sur un parking imperméable de 500 m². Quel volume d’eau faut-il évacuer ?',
                        'choices' => [
                            ['choice_text' => '1 m³', 'is_correct' => false],
                            ['choice_text' => '10 m³', 'is_correct' => true],
                            ['choice_text' => '100 m³', 'is_correct' => false],
                            ['choice_text' => '20 m³', 'is_correct' => false],
                        ],
                        'explanation' => '1 mm de pluie équivaut à 1 litre par m² : 20 × 500 = 10 000 L, soit 10 m³.',
                    ],
                ],
            ],
            [
                'title' => 'Révision générale de biologie environnementale',
                'description' => 'Synthèse sur ressources, pollution, climat, habitats, agriculture et gestion environnementale.',
                'settings' => ['duration' => 25, 'passing_score' => 70],
                'questions' => [
                    [
                        'question' => 'Une forêt de chênes-lièges stocke du carbone, fournit du liège et abrite de nombreuses espèces. Cet exemple montre qu’un écosystème peut rendre :',
                        'choices' => [
                            ['choice_text' => 'plusieurs services à la fois', 'is_correct' => true],
                            ['choice_text' => 'un seul service, choisi par les gestionnaires', 'is_correct' => false],
                            ['choice_text' => 'des services qui profitent à la faune mais pas aux humains', 'is_correct' => false],
                            ['choice_text' => 'des services qui s’arrêtent à la fin de la saison de croissance', 'is_correct' => false],
                        ],
                        'explanation' => 'Un même milieu fournit simultanément des ressources, des habitats et des fonctions de régulation.',
                    ],
                    [
                        'question' => 'Dans une chaîne alimentaire, environ 10 % de l’énergie passe d’un niveau au suivant. Si les producteurs captent 10 000 kJ, les herbivores en reçoivent environ :',
                        'choices' => [
                            ['choice_text' => '100 kJ', 'is_correct' => false],
                            ['choice_text' => '1 000 kJ', 'is_correct' => true],
                            ['choice_text' => '9 000 kJ', 'is_correct' => false],
                            ['choice_text' => '10 000 kJ', 'is_correct' => false],
                        ],
                        'explanation' => '10 % de 10 000 kJ font 1 000 kJ : l’énergie s’amenuise à chaque maillon.',
                    ],
                    [
                        'question' => 'En amont d’un rejet, une rivière contient 8 mg/L d’oxygène dissous ; en aval, 3 mg/L. Que suggère cet écart ?',
                        'choices' => [
                            ['choice_text' => 'le rejet apporte de l’oxygène pur à la rivière', 'is_correct' => false],
                            ['choice_text' => 'la rivière est plus polluée en amont qu’en aval', 'is_correct' => false],
                            ['choice_text' => 'le rejet consomme de l’oxygène, probablement à cause d’une charge organique', 'is_correct' => true],
                            ['choice_text' => 'l’eau en aval s’est fortement refroidie', 'is_correct' => false],
                        ],
                        'explanation' => 'La chute de 5 mg/L en aval trahit une décomposition intense de matière organique.',
                    ],
                    [
                        'question' => 'Un lac reçoit trop d’engrais agricoles, puis son oxygène chute. Quelle séquence est la plus cohérente ?',
                        'choices' => [
                            ['choice_text' => 'prolifération d’algues → excès de nutriments → baisse d’oxygène → décomposition accrue', 'is_correct' => false],
                            ['choice_text' => 'baisse d’oxygène → prolifération d’algues → excès de nutriments → décomposition accrue', 'is_correct' => false],
                            ['choice_text' => 'excès de nutriments → décomposition accrue → baisse d’oxygène → prolifération d’algues', 'is_correct' => false],
                            ['choice_text' => 'excès de nutriments → prolifération d’algues → décomposition accrue → baisse d’oxygène', 'is_correct' => true],
                        ],
                        'explanation' => 'Les nutriments nourrissent les algues, leur mort alimente les décomposeurs, et ceux-ci épuisent l’oxygène.',
                    ],
                    [
                        'question' => 'Des lichens disparaissent d’une ville alors qu’ils prospèrent à la campagne voisine. Ils servent ici d’indicateurs de :',
                        'choices' => [
                            ['choice_text' => 'la qualité des sols', 'is_correct' => false],
                            ['choice_text' => 'la qualité de l’air', 'is_correct' => true],
                            ['choice_text' => 'la salinité de l’eau', 'is_correct' => false],
                            ['choice_text' => 'l’âge des bâtiments', 'is_correct' => false],
                        ],
                        'explanation' => 'Les lichens absorbent l’air ambiant et supportent mal la pollution atmosphérique.',
                    ],
                    [
                        'question' => 'Dans une île, on élimine les renards qui chassaient les lapins. À court terme, la population de lapins va probablement :',
                        'choices' => [
                            ['choice_text' => 'diminuer', 'is_correct' => false],
                            ['choice_text' => 'rester stable', 'is_correct' => false],
                            ['choice_text' => 'augmenter', 'is_correct' => true],
                            ['choice_text' => 'disparaître', 'is_correct' => false],
                        ],
                        'explanation' => 'Moins de prédateurs, plus de proies survivantes : les lapins se multiplient jusqu’à ce que la nourriture manque.',
                    ],
                    [
                        'question' => 'Une espèce d’oiseau devient rare après la destruction de la zone humide où elle se reproduisait. La première question à se poser est :',
                        'choices' => [
                            ['choice_text' => 'quelles ressources et conditions de l’habitat ont disparu ?', 'is_correct' => true],
                            ['choice_text' => 'quel est le plumage moyen des individus restants ?', 'is_correct' => false],
                            ['choice_text' => 'quelle distance séparait la zone humide de la route la plus proche ?', 'is_correct' => false],
                            ['choice_text' => 'combien de temps l’espèce vit-elle en captivité ?', 'is_correct' => false],
                        ],
                        'explanation' => 'Savoir ce que l’habitat fournissait, nourriture, abri, site de reproduction, oriente les mesures de conservation.',
                    ],
                    [
                        'question' => 'Une famille réduit sa consommation d’électricité produite à partir de charbon. Cet effort contribue à :',
                        'choices' => [
                            ['choice_text' => 'augmenter la biodiversité des forêts voisines', 'is_correct' => false],
                            ['choice_text' => 'supprimer l’effet de serre naturel', 'is_correct' => false],
                            ['choice_text' => 'diminuer la salinité des océans', 'is_correct' => false],
                            ['choice_text' => 'réduire des émissions de gaz à effet de serre', 'is_correct' => true],
                        ],
                        'explanation' => 'Brûler moins de charbon, c’est émettre moins de CO₂.',
                    ],
                    [
                        'question' => 'Un employé parcourt 20 km en voiture à l’aller et 20 km au retour, 220 jours par an. Si 20 km émettent environ 4 kg de CO₂, ses émissions annuelles sont de :',
                        'choices' => [
                            ['choice_text' => '880 kg', 'is_correct' => false],
                            ['choice_text' => '1 760 kg', 'is_correct' => true],
                            ['choice_text' => '8 800 kg', 'is_correct' => false],
                            ['choice_text' => '440 kg', 'is_correct' => false],
                        ],
                        'explanation' => '4 kg × 2 trajets × 220 jours = 1 760 kg de CO₂ par an.',
                    ],
                    [
                        'question' => 'Pour gérer un marais, une équipe commence par mesurer l’état du milieu. Quelle suite de démarche est la plus cohérente ?',
                        'choices' => [
                            ['choice_text' => 'agir immédiatement, puis mesurer l’état du milieu si les moyens le permettent', 'is_correct' => false],
                            ['choice_text' => 'mesurer une seule fois, puis ne plus intervenir', 'is_correct' => false],
                            ['choice_text' => 'identifier les pressions, agir, puis suivre les résultats pour ajuster', 'is_correct' => true],
                            ['choice_text' => 'identifier les pressions, puis attendre dix ans sans suivi', 'is_correct' => false],
                        ],
                        'explanation' => 'Mesurer, agir, contrôler : le suivi permet de corriger les actions qui ne donnent pas les effets attendus.',
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