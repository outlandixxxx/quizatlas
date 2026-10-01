<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class SVTFundamentalsBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'svt-fundamentals')->firstOrFail();

        $quizSettings = [
            0 => ['duration' => 15, 'passing_score' => 50],
            1 => ['duration' => 20, 'passing_score' => 55],
            2 => ['duration' => 15, 'passing_score' => 55],
            3 => ['duration' => 20, 'passing_score' => 60],
            4 => ['duration' => 20, 'passing_score' => 65],
            5 => ['duration' => 15, 'passing_score' => 60],
            6 => ['duration' => 25, 'passing_score' => 65],
            7 => ['duration' => 25, 'passing_score' => 65]
        ];

        $quizzes = [
            [
                'title' => 'Introduction aux sciences de la vie et de la Terre',
                'description' => 'Découvrir les caractéristiques du vivant, les niveaux d’organisation et les bases du raisonnement scientifique à partir d’observations simples.',
                'questions' => [
            [
                'question' => 'Une classe observe que des graines de haricot humides germent alors que des graines gardées au sec ne germent pas. Quelle démarche permet de tester correctement le rôle de l’eau ?',
                'choices' => [
                        ['choice_text' => 'Comparer des graines avec et sans eau en gardant les autres conditions aussi semblables que possible.', 'is_correct' => true],
                        ['choice_text' => 'Comparer uniquement des graines de couleurs différentes.', 'is_correct' => false],
                        ['choice_text' => 'Ajouter une quantité différente d’engrais à chaque groupe.', 'is_correct' => false],
                        ['choice_text' => 'Changer en même temps la lumière et la température.', 'is_correct' => false]
                ],
                'explanation' => 'En gardant les autres conditions constantes, l’eau devient le facteur que l’on teste. La comparaison permet donc de relier plus justement la germination à la disponibilité en eau.',
            ],
            [
                'question' => 'Quel élément est présent dans toutes les cellules et porte l’information génétique ?',
                'choices' => [
                        ['choice_text' => 'Le chloroplaste', 'is_correct' => false],
                        ['choice_text' => 'L’ADN', 'is_correct' => true],
                        ['choice_text' => 'La paroi cellulaire', 'is_correct' => false],
                        ['choice_text' => 'La vacuole', 'is_correct' => false]
                ],
                'explanation' => 'L’ADN contient l’information héréditaire. Chez les cellules procaryotes, il se trouve dans la région du cytoplasme plutôt que dans un noyau.',
            ],
            [
                'question' => 'Une coupe au microscope montre de nombreuses cellules semblables regroupées et assurant ensemble une même fonction. À quel niveau d’organisation correspond cette description ?',
                'choices' => [
                        ['choice_text' => 'Un organisme', 'is_correct' => false],
                        ['choice_text' => 'Un tissu', 'is_correct' => true],
                        ['choice_text' => 'Un organe', 'is_correct' => false],
                        ['choice_text' => 'Une molécule', 'is_correct' => false]
                ],
                'explanation' => 'Un tissu est un ensemble de cellules, généralement semblables, organisées pour remplir une fonction commune. Plusieurs tissus peuvent ensuite constituer un organe.',
            ],
            [
                'question' => 'Pourquoi un élève note-t-il la température de l’eau à intervalles réguliers pendant une expérience ?',
                'choices' => [
                        ['choice_text' => 'Pour rendre l’expérience plus compliquée', 'is_correct' => false],
                        ['choice_text' => 'Pour éviter d’avoir besoin d’une hypothèse', 'is_correct' => false],
                        ['choice_text' => 'Pour obtenir des mesures chiffrées que l’on peut comparer', 'is_correct' => true],
                        ['choice_text' => 'Pour garantir que le résultat sera conforme aux attentes', 'is_correct' => false]
                ],
                'explanation' => 'Les mesures quantitatives produisent des données numériques. Elles peuvent être comparées, représentées et analysées plus facilement qu’un simple souvenir de l’observation.',
            ],
            [
                'question' => 'Un chercheur étudie l’effet de la quantité de lumière sur la production d’oxygène d’une plante. Dans cette expérience, la quantité de lumière est la…',
                'choices' => [
                        ['choice_text' => 'variable indépendante', 'is_correct' => true],
                        ['choice_text' => 'variable dépendante', 'is_correct' => false],
                        ['choice_text' => 'conclusion', 'is_correct' => false],
                        ['choice_text' => 'variable témoin', 'is_correct' => false]
                ],
                'explanation' => 'La variable indépendante est le facteur que le chercheur modifie volontairement. Ici, il fait varier la quantité de lumière.',
            ],
            [
                'question' => 'À quoi sert principalement un groupe témoin dans une expérience ?',
                'choices' => [
                        ['choice_text' => 'À rendre tous les résultats identiques', 'is_correct' => false],
                        ['choice_text' => 'À fournir une référence pour comparer l’effet du facteur étudié', 'is_correct' => true],
                        ['choice_text' => 'À remplacer les mesures', 'is_correct' => false],
                        ['choice_text' => 'À confirmer automatiquement l’hypothèse', 'is_correct' => false]
                ],
                'explanation' => 'Le groupe témoin fournit une situation de référence. Sa comparaison avec le groupe expérimental aide à déterminer l’effet du facteur testé.',
            ],
            [
                'question' => 'Un résultat expérimental ne correspond pas à l’hypothèse de départ. Quelle réaction est la plus scientifique ?',
                'choices' => [
                        ['choice_text' => 'Supprimer le résultat', 'is_correct' => false],
                        ['choice_text' => 'Modifier les données pour obtenir la prédiction', 'is_correct' => false],
                        ['choice_text' => 'Examiner les données et la méthode, puis réviser ou refaire le test si nécessaire', 'is_correct' => true],
                        ['choice_text' => 'Conclure immédiatement que l’expérience est inutile', 'is_correct' => false]
                ],
                'explanation' => 'Un résultat inattendu peut signaler une erreur, une limite expérimentale ou une hypothèse à revoir. Il doit être analysé, pas caché.',
            ],
            [
                'question' => 'Quel ordre va d’un niveau d’organisation biologique plus petit vers un niveau plus grand ?',
                'choices' => [
                        ['choice_text' => 'Organe → cellule → tissu', 'is_correct' => false],
                        ['choice_text' => 'Tissu → molécule → organe', 'is_correct' => false],
                        ['choice_text' => 'Organisme → organe → cellule', 'is_correct' => false],
                        ['choice_text' => 'Cellule → tissu → organe', 'is_correct' => true]
                ],
                'explanation' => 'La cellule est une unité de base du vivant. Des cellules forment des tissus, et plusieurs tissus peuvent s’organiser en organes.',
            ],
            [
                'question' => 'Un élève affirme : « La plante a grandi davantage parce que je lui ai parlé. » Comment faut-il considérer cette affirmation au départ ?',
                'choices' => [
                        ['choice_text' => 'Comme une hypothèse qui doit être testée', 'is_correct' => true],
                        ['choice_text' => 'Comme une loi scientifique définitive', 'is_correct' => false],
                        ['choice_text' => 'Comme une mesure directe', 'is_correct' => false],
                        ['choice_text' => 'Comme un fait établi', 'is_correct' => false]
                ],
                'explanation' => 'Une hypothèse est une explication proposée que l’on peut confronter à des observations ou à une expérience. L’affirmation doit donc être testée.',
            ],
            [
                'question' => 'Dans un terrarium fermé se trouvent du sol, des plantes, de l’air et de petits insectes. Quelle idée décrit le mieux cette situation comme un système ?',
                'choices' => [
                        ['choice_text' => 'Seules les plantes comptent parce qu’elles sont vivantes', 'is_correct' => false],
                        ['choice_text' => 'Les différentes parties interagissent, donc une modification peut en affecter d’autres', 'is_correct' => true],
                        ['choice_text' => 'Chaque partie fonctionne complètement indépendamment', 'is_correct' => false],
                        ['choice_text' => 'Un système fermé ne peut jamais évoluer', 'is_correct' => false]
                ],
                'explanation' => 'Un système est constitué d’éléments en interaction. Dans le terrarium, l’eau, l’air, le sol et les organismes peuvent donc s’influencer mutuellement.',
            ]
                ],
            ],
            [
                'title' => 'La cellule et son organisation',
                'description' => 'Identifier les principales structures cellulaires, distinguer cellules animales et végétales et relier chaque structure à sa fonction.',
                'questions' => [
            [
                'question' => 'Quelle structure forme une barrière sélective qui contrôle les échanges entre la cellule et son milieu ?',
                'choices' => [
                        ['choice_text' => 'Le noyau', 'is_correct' => false],
                        ['choice_text' => 'Le ribosome', 'is_correct' => false],
                        ['choice_text' => 'La membrane cellulaire', 'is_correct' => true],
                        ['choice_text' => 'Le cytoplasme', 'is_correct' => false]
                ],
                'explanation' => 'La membrane cellulaire délimite la cellule et régule le passage de nombreuses substances vers l’intérieur ou l’extérieur.',
            ],
            [
                'question' => 'Une cellule végétale observée au microscope possède une couche externe rigide qui lui donne du soutien. De quelle structure s’agit-il ?',
                'choices' => [
                        ['choice_text' => 'La membrane cellulaire', 'is_correct' => false],
                        ['choice_text' => 'La paroi cellulaire', 'is_correct' => true],
                        ['choice_text' => 'La mitochondrie', 'is_correct' => false],
                        ['choice_text' => 'Le noyau', 'is_correct' => false]
                ],
                'explanation' => 'La paroi cellulaire, située à l’extérieur de la membrane, renforce les cellules végétales et contribue à leur maintien.',
            ],
            [
                'question' => 'Un microscope possède un oculaire de 10× et un objectif de 40×. Quelle est sa grossissement total ?',
                'choices' => [
                        ['choice_text' => '50×', 'is_correct' => false],
                        ['choice_text' => '100×', 'is_correct' => false],
                        ['choice_text' => '400×', 'is_correct' => true],
                        ['choice_text' => '4 000×', 'is_correct' => false]
                ],
                'explanation' => 'Le grossissement total se calcule en multipliant les deux grossissements : 10 × 40 = 400. Le résultat est donc 400×.',
            ],
            [
                'question' => 'Une cellule animale et une cellule végétale ont toutes deux un noyau. Quelle structure supplémentaire trouve-t-on normalement dans la cellule végétale ?',
                'choices' => [
                        ['choice_text' => 'Une paroi cellulaire', 'is_correct' => true],
                        ['choice_text' => 'Des ribosomes', 'is_correct' => false],
                        ['choice_text' => 'Une membrane', 'is_correct' => false],
                        ['choice_text' => 'De l’ADN', 'is_correct' => false]
                ],
                'explanation' => 'La paroi cellulaire est une caractéristique des cellules végétales. Les cellules animales possèdent aussi une membrane, des ribosomes et de l’ADN.',
            ],
            [
                'question' => 'Une cellule nécessite beaucoup d’énergie pour fonctionner. Quel organite est particulièrement important pour fournir de l’énergie utilisable ?',
                'choices' => [
                        ['choice_text' => 'Le chloroplaste', 'is_correct' => false],
                        ['choice_text' => 'La mitochondrie', 'is_correct' => true],
                        ['choice_text' => 'La vacuole', 'is_correct' => false],
                        ['choice_text' => 'La paroi cellulaire', 'is_correct' => false]
                ],
                'explanation' => 'Les mitochondries réalisent la respiration cellulaire et participent à la production d’ATP, une forme d’énergie directement utilisable par la cellule.',
            ],
            [
                'question' => 'Pourquoi dit-on que le noyau joue un rôle de centre de commande chez une cellule eucaryote ?',
                'choices' => [
                        ['choice_text' => 'Il fabrique directement toute l’énergie', 'is_correct' => false],
                        ['choice_text' => 'Il contient l’information génétique qui participe au contrôle des activités cellulaires', 'is_correct' => true],
                        ['choice_text' => 'Il assure uniquement le transport de l’eau', 'is_correct' => false],
                        ['choice_text' => 'Il remplace la membrane cellulaire', 'is_correct' => false]
                ],
                'explanation' => 'Le noyau contient l’ADN. Les informations portées par cet ADN permettent notamment de contrôler la production de protéines et de nombreuses activités cellulaires.',
            ],
            [
                'question' => 'Une cellule végétale placée dans une solution très salée perd de l’eau et son contenu cellulaire se rétracte. Quel phénomène explique principalement cette observation ?',
                'choices' => [
                        ['choice_text' => 'La photosynthèse', 'is_correct' => false],
                        ['choice_text' => 'La diffusion de la lumière', 'is_correct' => false],
                        ['choice_text' => 'L’osmose', 'is_correct' => true],
                        ['choice_text' => 'La respiration', 'is_correct' => false]
                ],
                'explanation' => 'L’osmose correspond au déplacement de l’eau à travers une membrane selon une différence de concentration en solutés. Une solution très salée peut donc provoquer une sortie d’eau de la cellule.',
            ],
            [
                'question' => 'Un antibiotique cible une structure présente chez les bactéries mais absente des cellules humaines. Pourquoi cela peut-il aider à traiter une infection bactérienne ?',
                'choices' => [
                        ['choice_text' => 'Il transforme les bactéries en cellules humaines', 'is_correct' => false],
                        ['choice_text' => 'Il peut perturber une fonction essentielle des bactéries tout en épargnant davantage les cellules humaines', 'is_correct' => true],
                        ['choice_text' => 'Il augmente la température du corps', 'is_correct' => false],
                        ['choice_text' => 'Il remplace directement les anticorps', 'is_correct' => false]
                ],
                'explanation' => 'Certains antibiotiques ciblent des structures ou processus propres aux bactéries, ce qui permet d’agir sur elles sans viser de la même façon les cellules humaines.',
            ],
            [
                'question' => 'Quel énoncé compare correctement les cellules procaryotes et eucaryotes ?',
                'choices' => [
                        ['choice_text' => 'Les procaryotes possèdent toujours un noyau', 'is_correct' => false],
                        ['choice_text' => 'Les eucaryotes n’ont pas d’ADN', 'is_correct' => false],
                        ['choice_text' => 'Les procaryotes n’ont pas de noyau délimité par une membrane', 'is_correct' => true],
                        ['choice_text' => 'Les deux types de cellules sont dépourvus de membrane', 'is_correct' => false]
                ],
                'explanation' => 'Les cellules procaryotes, comme les bactéries, possèdent de l’ADN mais pas de noyau entouré d’une membrane. Les cellules eucaryotes possèdent un véritable noyau.',
            ],
            [
                'question' => 'Une plante flétrit pendant une journée chaude puis retrouve sa rigidité après avoir reçu de l’eau. Quelle explication relie le mieux la structure cellulaire à cette observation ?',
                'choices' => [
                        ['choice_text' => 'L’eau détruit les chloroplastes', 'is_correct' => false],
                        ['choice_text' => 'L’eau restaure la pression interne des cellules végétales', 'is_correct' => true],
                        ['choice_text' => 'L’eau transforme les cellules en bactéries', 'is_correct' => false],
                        ['choice_text' => 'L’eau supprime l’ADN des cellules', 'is_correct' => false]
                ],
                'explanation' => 'Quand les cellules végétales perdent beaucoup d’eau, leur turgescence diminue et la plante se flétrit. L’apport d’eau permet de restaurer cette pression interne.',
            ]
                ],
            ],
            [
                'title' => 'Les grandes molécules du vivant',
                'description' => 'Reconnaître les glucides, lipides, protéines et acides nucléiques, comprendre leurs rôles essentiels et relier quelques aliments à leurs constituants.',
                'questions' => [
            [
                'question' => 'Quelle famille de molécules comprend notamment le glucose, utilisé par les cellules comme source d’énergie ?',
                'choices' => [
                        ['choice_text' => 'Les glucides', 'is_correct' => true],
                        ['choice_text' => 'Les lipides', 'is_correct' => false],
                        ['choice_text' => 'Les protéines', 'is_correct' => false],
                        ['choice_text' => 'Les acides nucléiques', 'is_correct' => false]
                ],
                'explanation' => 'Le glucose est un glucide. Les cellules peuvent l’utiliser notamment lors de la respiration cellulaire pour libérer de l’énergie.',
            ],
            [
                'question' => 'Quel constituant est surtout associé au stockage d’énergie à long terme et à la composition des membranes ?',
                'choices' => [
                        ['choice_text' => 'L’ADN', 'is_correct' => false],
                        ['choice_text' => 'Les lipides', 'is_correct' => true],
                        ['choice_text' => 'Les vitamines', 'is_correct' => false],
                        ['choice_text' => 'Les sels minéraux', 'is_correct' => false]
                ],
                'explanation' => 'Les lipides servent notamment de réserve énergétique et certains, comme les phospholipides, sont des composants essentiels des membranes cellulaires.',
            ],
            [
                'question' => 'Les protéines sont constituées principalement de petites unités appelées…',
                'choices' => [
                        ['choice_text' => 'Acides gras', 'is_correct' => false],
                        ['choice_text' => 'Nucléotides', 'is_correct' => false],
                        ['choice_text' => 'Acides aminés', 'is_correct' => true],
                        ['choice_text' => 'Glucides simples', 'is_correct' => false]
                ],
                'explanation' => 'Les acides aminés sont les unités de base qui s’assemblent pour former les protéines.',
            ],
            [
                'question' => 'Quel aliment est particulièrement riche en protéines ?',
                'choices' => [
                        ['choice_text' => 'Lentilles', 'is_correct' => true],
                        ['choice_text' => 'Huile d’olive', 'is_correct' => false],
                        ['choice_text' => 'Sucre de table', 'is_correct' => false],
                        ['choice_text' => 'Eau minérale', 'is_correct' => false]
                ],
                'explanation' => 'Les lentilles contiennent une quantité importante de protéines végétales. L’huile apporte surtout des lipides, tandis que le sucre est principalement un glucide.',
            ],
            [
                'question' => 'Pourquoi une température élevée peut-elle modifier le fonctionnement d’une protéine ?',
                'choices' => [
                        ['choice_text' => 'Elle peut changer la forme de la protéine et donc son activité', 'is_correct' => true],
                        ['choice_text' => 'Elle transforme toujours la protéine en glucose', 'is_correct' => false],
                        ['choice_text' => 'Elle retire automatiquement tout son azote', 'is_correct' => false],
                        ['choice_text' => 'Elle ajoute systématiquement une membrane autour d’elle', 'is_correct' => false]
                ],
                'explanation' => 'La forme tridimensionnelle d’une protéine est essentielle à sa fonction. Une température trop élevée peut perturber cette forme et modifier son activité.',
            ],
            [
                'question' => 'Un morceau de pain est longuement mâché et devient légèrement sucré. Quelle explication est la plus plausible ?',
                'choices' => [
                        ['choice_text' => 'Les protéines se transforment directement en eau', 'is_correct' => false],
                        ['choice_text' => 'L’amidon est partiellement dégradé en sucres plus simples', 'is_correct' => true],
                        ['choice_text' => 'Les lipides deviennent des sels minéraux', 'is_correct' => false],
                        ['choice_text' => 'L’ADN du pain se transforme en glucose', 'is_correct' => false]
                ],
                'explanation' => 'La salive contient une enzyme qui commence à dégrader l’amidon du pain en molécules glucidiques plus petites, ce qui peut donner une sensation sucrée.',
            ],
            [
                'question' => 'Quel rôle correspond le mieux à l’ADN ?',
                'choices' => [
                        ['choice_text' => 'Former la principale réserve de graisse', 'is_correct' => false],
                        ['choice_text' => 'Stocker l’information génétique', 'is_correct' => true],
                        ['choice_text' => 'Produire directement toute l’énergie cellulaire', 'is_correct' => false],
                        ['choice_text' => 'Assurer la digestion des aliments', 'is_correct' => false]
                ],
                'explanation' => 'L’ADN porte l’information génétique qui permet notamment de déterminer quelles protéines peuvent être produites par une cellule.',
            ],
            [
                'question' => 'Un élève confond les lipides et les protéines parce que les deux se trouvent dans les aliments. Quelle distinction simple peut l’aider ?',
                'choices' => [
                        ['choice_text' => 'Les lipides sont surtout connus pour leurs rôles de réserve énergétique et de membrane, tandis que les protéines ont de nombreux rôles structuraux et fonctionnels', 'is_correct' => true],
                        ['choice_text' => 'Les protéines sont toujours des sucres', 'is_correct' => false],
                        ['choice_text' => 'Les lipides contiennent toujours de l’ADN', 'is_correct' => false],
                        ['choice_text' => 'Les deux familles ont exactement les mêmes fonctions', 'is_correct' => false]
                ],
                'explanation' => 'Le fait qu’une molécule soit présente dans un aliment ne suffit pas à identifier sa fonction. Lipides et protéines ont des structures et des rôles biologiques différents.',
            ],
            [
                'question' => 'Une ration alimentaire apporte 2 000 kilocalories, dont 500 provenant des lipides. Quelle part de l’énergie vient des lipides ?',
                'choices' => [
                        ['choice_text' => '10 %', 'is_correct' => false],
                        ['choice_text' => '20 %', 'is_correct' => false],
                        ['choice_text' => '25 %', 'is_correct' => true],
                        ['choice_text' => '40 %', 'is_correct' => false]
                ],
                'explanation' => 'La part des lipides est 500 ÷ 2 000 = 0,25, soit 25 %.',
            ],
            [
                'question' => 'Pourquoi deux aliments contenant des quantités différentes de glucides peuvent-ils malgré tout avoir des effets énergétiques différents ?',
                'choices' => [
                        ['choice_text' => 'Parce que l’énergie dépend seulement de la couleur de l’aliment', 'is_correct' => false],
                        ['choice_text' => 'Parce que la quantité et le type de nutriments ainsi que la portion consommée influencent l’apport énergétique', 'is_correct' => true],
                        ['choice_text' => 'Parce que tous les aliments apportent exactement la même énergie', 'is_correct' => false],
                        ['choice_text' => 'Parce que les protéines n’ont aucun lien avec l’énergie', 'is_correct' => false]
                ],
                'explanation' => 'L’apport énergétique dépend de la quantité consommée et de la nature des nutriments présents. Les glucides et les protéines fournissent de l’énergie, tandis que les lipides en apportent davantage par gramme.',
            ]
                ],
            ],
            [
                'title' => 'Énergie, photosynthèse et respiration',
                'description' => 'Comprendre comment les organismes obtiennent et utilisent l’énergie, et distinguer les grands principes de la photosynthèse et de la respiration cellulaire.',
                'questions' => [
            [
                'question' => 'Quel est le rôle général de la photosynthèse chez les plantes vertes ?',
                'choices' => [
                        ['choice_text' => 'Transformer l’énergie lumineuse en énergie chimique stockée dans des molécules organiques', 'is_correct' => true],
                        ['choice_text' => 'Détruire tout le glucose produit', 'is_correct' => false],
                        ['choice_text' => 'Remplacer la respiration cellulaire', 'is_correct' => false],
                        ['choice_text' => 'Produire uniquement de la chaleur', 'is_correct' => false]
                ],
                'explanation' => 'La photosynthèse utilise l’énergie lumineuse pour fabriquer notamment du glucose à partir de dioxyde de carbone et d’eau.',
            ],
            [
                'question' => 'Quel gaz est absorbé par une plante lors de la photosynthèse ?',
                'choices' => [
                        ['choice_text' => 'Le dioxyde de carbone', 'is_correct' => true],
                        ['choice_text' => 'Le dioxygène uniquement', 'is_correct' => false],
                        ['choice_text' => 'L’azote uniquement', 'is_correct' => false],
                        ['choice_text' => 'L’hydrogène moléculaire', 'is_correct' => false]
                ],
                'explanation' => 'Le dioxyde de carbone est une des matières premières de la photosynthèse. La plante libère ensuite du dioxygène comme produit de ce processus.',
            ],
            [
                'question' => 'Dans quelle structure cellulaire des végétaux se déroule principalement la photosynthèse ?',
                'choices' => [
                        ['choice_text' => 'Les mitochondries', 'is_correct' => false],
                        ['choice_text' => 'Les chloroplastes', 'is_correct' => true],
                        ['choice_text' => 'Les ribosomes', 'is_correct' => false],
                        ['choice_text' => 'Le noyau', 'is_correct' => false]
                ],
                'explanation' => 'Les chloroplastes contiennent notamment la chlorophylle et sont le siège principal de la photosynthèse dans les cellules végétales.',
            ],
            [
                'question' => 'Pourquoi les cellules ont-elles besoin de respiration cellulaire même lorsqu’un organisme a accès à de la nourriture ?',
                'choices' => [
                        ['choice_text' => 'La respiration cellulaire permet de rendre l’énergie chimique des nutriments utilisable par la cellule', 'is_correct' => true],
                        ['choice_text' => 'Elle sert uniquement à refroidir le corps', 'is_correct' => false],
                        ['choice_text' => 'Elle fabrique toujours de la lumière', 'is_correct' => false],
                        ['choice_text' => 'Elle détruit l’ADN pour produire de l’eau', 'is_correct' => false]
                ],
                'explanation' => 'La respiration cellulaire libère de l’énergie contenue dans des molécules comme le glucose et permet notamment de produire de l’ATP utilisable par la cellule.',
            ],
            [
                'question' => 'Une plante placée plusieurs jours dans l’obscurité dispose de moins de glucose nouvellement produit. Quelle activité est directement limitée ?',
                'choices' => [
                        ['choice_text' => 'La photosynthèse', 'is_correct' => true],
                        ['choice_text' => 'La réplication de l’ADN', 'is_correct' => false],
                        ['choice_text' => 'La circulation du sang', 'is_correct' => false],
                        ['choice_text' => 'La formation des os', 'is_correct' => false]
                ],
                'explanation' => 'La photosynthèse dépend de l’énergie lumineuse. Dans l’obscurité, la production de nouveaux glucides par ce processus est fortement limitée.',
            ],
            [
                'question' => 'Lors d’un effort musculaire intense, la respiration cellulaire des muscles augmente. Pourquoi ?',
                'choices' => [
                        ['choice_text' => 'Les muscles ont besoin de davantage d’énergie pour leur activité', 'is_correct' => true],
                        ['choice_text' => 'Les muscles arrêtent toute consommation d’oxygène', 'is_correct' => false],
                        ['choice_text' => 'Les cellules deviennent des végétaux', 'is_correct' => false],
                        ['choice_text' => 'Le glucose devient inutile pendant l’effort', 'is_correct' => false]
                ],
                'explanation' => 'Les contractions musculaires nécessitent de l’énergie. Les cellules musculaires augmentent donc l’utilisation de nutriments et d’oxygène pour produire davantage d’ATP.',
            ],
            [
                'question' => 'Une plante reçoit beaucoup de lumière mais manque d’eau. Quelle conséquence peut-on prévoir pour la photosynthèse ?',
                'choices' => [
                        ['choice_text' => 'Elle augmente forcément sans limite', 'is_correct' => false],
                        ['choice_text' => 'Elle peut diminuer parce que l’eau est un des éléments nécessaires au processus', 'is_correct' => true],
                        ['choice_text' => 'Elle continue exactement au même rythme dans tous les cas', 'is_correct' => false],
                        ['choice_text' => 'Elle se transforme en respiration', 'is_correct' => false]
                ],
                'explanation' => 'L’eau participe à la photosynthèse. Un manque d’eau peut aussi entraîner la fermeture des stomates et limiter les échanges gazeux, ce qui réduit davantage la photosynthèse.',
            ],
            [
                'question' => 'Quelle relation existe entre photosynthèse et respiration cellulaire chez une plante ?',
                'choices' => [
                        ['choice_text' => 'Elles utilisent exactement les mêmes réactifs et les mêmes produits', 'is_correct' => false],
                        ['choice_text' => 'Les produits de la photosynthèse peuvent servir de matières premières à la respiration', 'is_correct' => true],
                        ['choice_text' => 'La respiration empêche toute photosynthèse', 'is_correct' => false],
                        ['choice_text' => 'La photosynthèse ne fournit aucun composé utilisable par la cellule', 'is_correct' => false]
                ],
                'explanation' => 'La photosynthèse produit notamment du glucose et du dioxygène, qui peuvent ensuite être utilisés lors de la respiration cellulaire pour libérer de l’énergie.',
            ],
            [
                'question' => 'Un élève mesure la quantité d’oxygène produite par des plantes placées à différentes intensités lumineuses. Il constate qu’elle augmente puis se stabilise. Quelle conclusion simple est cohérente ?',
                'choices' => [
                        ['choice_text' => 'La lumière n’a aucun effet', 'is_correct' => false],
                        ['choice_text' => 'La photosynthèse peut augmenter avec la lumière puis être limitée par un autre facteur', 'is_correct' => true],
                        ['choice_text' => 'La plante cesse toujours de vivre dès que la lumière augmente', 'is_correct' => false],
                        ['choice_text' => 'Plus de lumière signifie toujours une augmentation infinie', 'is_correct' => false]
                ],
                'explanation' => 'Lorsque la lumière n’est plus le facteur limitant, un autre élément comme le CO₂, la température ou l’eau peut limiter la photosynthèse.',
            ],
            [
                'question' => 'Une feuille produit 12 unités de glucose en lumière et 4 unités dans une condition très faible en lumière. De combien la production est-elle supérieure dans la première condition ?',
                'choices' => [
                        ['choice_text' => '2 fois', 'is_correct' => false],
                        ['choice_text' => '3 fois', 'is_correct' => true],
                        ['choice_text' => '4 fois', 'is_correct' => false],
                        ['choice_text' => '8 fois', 'is_correct' => false]
                ],
                'explanation' => '12 ÷ 4 = 3. La production mesurée en lumière est donc trois fois celle observée dans la condition de faible lumière.',
            ]
                ],
            ],
            [
                'title' => 'Génétique et évolution : notions de base',
                'description' => 'Relier ADN, gènes, chromosomes et hérédité aux mécanismes simples de variation et de sélection naturelle.',
                'questions' => [
            [
                'question' => 'Un gène peut être défini simplement comme…',
                'choices' => [
                        ['choice_text' => 'Une cellule entière', 'is_correct' => false],
                        ['choice_text' => 'Une portion d’ADN portant une information biologique', 'is_correct' => true],
                        ['choice_text' => 'Un organe spécialisé', 'is_correct' => false],
                        ['choice_text' => 'Une molécule de graisse', 'is_correct' => false]
                ],
                'explanation' => 'Un gène est une portion d’ADN qui contient une information permettant notamment la production d’un ARN ou d’une protéine impliquée dans un caractère ou une fonction.',
            ],
            [
                'question' => 'Où trouve-t-on la majorité des chromosomes dans une cellule humaine ?',
                'choices' => [
                        ['choice_text' => 'Dans le noyau', 'is_correct' => true],
                        ['choice_text' => 'Dans la paroi cellulaire', 'is_correct' => false],
                        ['choice_text' => 'Dans les globules rouges matures', 'is_correct' => false],
                        ['choice_text' => 'Dans les lipides de la membrane', 'is_correct' => false]
                ],
                'explanation' => 'Dans les cellules humaines eucaryotes, les chromosomes se trouvent principalement dans le noyau.',
            ],
            [
                'question' => 'Combien de chromosomes possède normalement une cellule humaine somatique ?',
                'choices' => [
                        ['choice_text' => '23', 'is_correct' => false],
                        ['choice_text' => '46', 'is_correct' => true],
                        ['choice_text' => '44', 'is_correct' => false],
                        ['choice_text' => '92', 'is_correct' => false]
                ],
                'explanation' => 'Les cellules somatiques humaines possèdent normalement 46 chromosomes, organisés en 23 paires.',
            ],
            [
                'question' => 'Deux frères peuvent-ils avoir des combinaisons génétiques différentes tout en ayant les mêmes parents ?',
                'choices' => [
                        ['choice_text' => 'Non, les enfants d’une même famille ont toujours un ADN identique', 'is_correct' => false],
                        ['choice_text' => 'Oui, parce que chaque enfant reçoit une combinaison de chromosomes parentaux différente', 'is_correct' => true],
                        ['choice_text' => 'Oui, mais seulement si leurs groupes sanguins sont différents', 'is_correct' => false],
                        ['choice_text' => 'Non, car les chromosomes sont choisis après la naissance', 'is_correct' => false]
                ],
                'explanation' => 'Chaque enfant reçoit une combinaison de gènes provenant de ses deux parents. La répartition des chromosomes et la fécondation créent donc des combinaisons génétiques variées.',
            ],
            [
                'question' => 'Une personne possède deux exemplaires d’un gène, un hérité de sa mère et un de son père. Ces deux versions sont appelées…',
                'choices' => [
                        ['choice_text' => 'Organes', 'is_correct' => false],
                        ['choice_text' => 'Allèles', 'is_correct' => true],
                        ['choice_text' => 'Tissus', 'is_correct' => false],
                        ['choice_text' => 'Cellules souches', 'is_correct' => false]
                ],
                'explanation' => 'Les allèles sont des versions différentes d’un même gène. Un individu diploïde possède généralement deux allèles pour chaque gène, un provenant de chaque parent.',
            ],
            [
                'question' => 'Deux populations d’une même espèce sont séparées pendant très longtemps et accumulent des différences. Que peut-il éventuellement se produire ?',
                'choices' => [
                        ['choice_text' => 'Elles peuvent diverger au point de former des espèces distinctes', 'is_correct' => true],
                        ['choice_text' => 'Elles deviennent obligatoirement identiques', 'is_correct' => false],
                        ['choice_text' => 'Leur ADN disparaît complètement', 'is_correct' => false],
                        ['choice_text' => 'Elles cessent immédiatement d’être des êtres vivants', 'is_correct' => false]
                ],
                'explanation' => 'Une séparation géographique durable peut limiter les échanges de gènes. Avec le temps, les populations peuvent accumuler suffisamment de différences pour devenir des espèces distinctes.',
            ],
            [
                'question' => 'Un antibiotique élimine surtout les bactéries sensibles tandis que quelques bactéries résistantes survivent et se multiplient. Quelle idée illustre cette situation ?',
                'choices' => [
                        ['choice_text' => 'La résistance peut être favorisée par la sélection naturelle', 'is_correct' => true],
                        ['choice_text' => 'L’antibiotique crée toujours directement la résistance chez chaque bactérie', 'is_correct' => false],
                        ['choice_text' => 'Toutes les bactéries sont naturellement identiques', 'is_correct' => false],
                        ['choice_text' => 'La résistance empêche toute reproduction', 'is_correct' => false]
                ],
                'explanation' => 'Si des bactéries résistantes sont présentes, l’antibiotique peut éliminer les sensibles et laisser davantage de survivantes résistantes se reproduire. La fréquence de la résistance peut alors augmenter.',
            ],
            [
                'question' => 'Quel énoncé distingue correctement adaptation et changement volontaire ?',
                'choices' => [
                        ['choice_text' => 'Une adaptation est une caractéristique devenue avantageuse dans une population au fil des générations', 'is_correct' => true],
                        ['choice_text' => 'Une adaptation apparaît toujours parce qu’un individu décide d’en avoir besoin', 'is_correct' => false],
                        ['choice_text' => 'Un changement volontaire est nécessairement héréditaire', 'is_correct' => false],
                        ['choice_text' => 'Une adaptation concerne seulement le comportement humain', 'is_correct' => false]
                ],
                'explanation' => 'En biologie évolutive, une adaptation est une caractéristique héritée qui contribue à la survie ou à la reproduction dans un contexte donné. Elle ne résulte pas d’une intention individuelle.',
            ],
            [
                'question' => 'Un environnement devient plus froid sur plusieurs générations. Quelle population a davantage de chances de changer sa composition au fil du temps ?',
                'choices' => [
                        ['choice_text' => 'Une population contenant déjà une diversité héréditaire de caractéristiques liées au froid', 'is_correct' => true],
                        ['choice_text' => 'Une population composée d’individus génétiquement tous identiques', 'is_correct' => false],
                        ['choice_text' => 'Une population qui ne se reproduit jamais', 'is_correct' => false],
                        ['choice_text' => 'Une population sans aucun lien avec son milieu', 'is_correct' => false]
                ],
                'explanation' => 'La sélection naturelle agit sur la variation présente dans une population. Une diversité héréditaire fournit donc davantage de possibilités pour que certains caractères deviennent plus fréquents.',
            ],
            [
                'question' => 'Pourquoi l’étude de fossiles, de l’ADN et de la répartition géographique des espèces peut-elle être complémentaire ?',
                'choices' => [
                        ['choice_text' => 'Ces sources fournissent des indices différents sur l’histoire et les relations entre les organismes', 'is_correct' => true],
                        ['choice_text' => 'Une seule de ces sources est toujours utile', 'is_correct' => false],
                        ['choice_text' => 'L’ADN permet de dater directement chaque fossile avec une précision parfaite', 'is_correct' => false],
                        ['choice_text' => 'Les fossiles et l’ADN donnent toujours exactement le même type d’information', 'is_correct' => false]
                ],
                'explanation' => 'Les fossiles renseignent sur des organismes anciens, l’ADN sur les relations génétiques et la biogéographie sur la répartition des espèces. Ensemble, ces indices renforcent l’étude de l’évolution.',
            ]
                ],
            ],
            [
                'title' => 'Micro-organismes, santé et défenses de l’organisme',
                'description' => 'Distinguer bactéries, virus et autres micro-organismes, comprendre la transmission de certaines infections et découvrir les grandes lignes de l’immunité.',
                'questions' => [
            [
                'question' => 'Lequel de ces agents est constitué d’une cellule ?',
                'choices' => [
                        ['choice_text' => 'Une bactérie', 'is_correct' => true],
                        ['choice_text' => 'Un virus', 'is_correct' => false],
                        ['choice_text' => 'Un prion', 'is_correct' => false],
                        ['choice_text' => 'Une particule de pollen', 'is_correct' => false]
                ],
                'explanation' => 'Une bactérie est un organisme unicellulaire. Un virus n’est pas constitué d’une cellule et dépend d’une cellule hôte pour se multiplier.',
            ],
            [
                'question' => 'Pourquoi les antibiotiques ne sont-ils pas efficaces contre la plupart des virus ?',
                'choices' => [
                        ['choice_text' => 'Les virus vivent uniquement dans l’eau', 'is_correct' => false],
                        ['choice_text' => 'Les antibiotiques ciblent des structures ou processus bactériens absents des virus', 'is_correct' => true],
                        ['choice_text' => 'Les virus sont toujours trop petits pour être observés', 'is_correct' => false],
                        ['choice_text' => 'Les antibiotiques sont uniquement destinés aux plantes', 'is_correct' => false]
                ],
                'explanation' => 'Les antibiotiques agissent sur certaines caractéristiques des bactéries. Les virus se multiplient à l’intérieur des cellules hôtes et ne possèdent pas ces mêmes cibles.',
            ],
            [
                'question' => 'Quel geste simple réduit le risque de transmission de nombreux agents infectieux ?',
                'choices' => [
                        ['choice_text' => 'Se laver régulièrement les mains', 'is_correct' => true],
                        ['choice_text' => 'Partager les objets personnels', 'is_correct' => false],
                        ['choice_text' => 'Arrêter de boire de l’eau', 'is_correct' => false],
                        ['choice_text' => 'Prendre des antibiotiques sans raison', 'is_correct' => false]
                ],
                'explanation' => 'Le lavage des mains retire une partie des micro-organismes présents sur la peau et réduit la transmission par contact.',
            ],
            [
                'question' => 'Une personne vaccinée rencontre ensuite un microbe correspondant au vaccin. Pourquoi son système immunitaire peut-il réagir plus rapidement ?',
                'choices' => [
                        ['choice_text' => 'Le vaccin a supprimé toutes ses cellules', 'is_correct' => false],
                        ['choice_text' => 'Le vaccin peut avoir préparé une mémoire immunitaire', 'is_correct' => true],
                        ['choice_text' => 'Le vaccin remplace les globules rouges', 'is_correct' => false],
                        ['choice_text' => 'Le vaccin transforme le microbe en eau', 'is_correct' => false]
                ],
                'explanation' => 'La vaccination expose le système immunitaire à un antigène ou à une information permettant de le reconnaître. Des cellules mémoires peuvent favoriser une réponse plus rapide lors d’une nouvelle exposition.',
            ],
            [
                'question' => 'Quelle cellule joue un rôle majeur dans la production d’anticorps ?',
                'choices' => [
                        ['choice_text' => 'Le globule rouge', 'is_correct' => false],
                        ['choice_text' => 'Le lymphocyte B', 'is_correct' => true],
                        ['choice_text' => 'La cellule musculaire', 'is_correct' => false],
                        ['choice_text' => 'La cellule végétale', 'is_correct' => false]
                ],
                'explanation' => 'Les lymphocytes B peuvent se différencier en plasmocytes qui produisent des anticorps spécifiques d’un antigène.',
            ],
            [
                'question' => 'Pourquoi une coupure de la peau peut-elle devenir une porte d’entrée pour des agents infectieux ?',
                'choices' => [
                        ['choice_text' => 'La peau fabrique les microbes', 'is_correct' => false],
                        ['choice_text' => 'La rupture de la barrière cutanée facilite leur entrée dans les tissus', 'is_correct' => true],
                        ['choice_text' => 'Le sang devient automatiquement toxique', 'is_correct' => false],
                        ['choice_text' => 'La plaie supprime tous les globules blancs', 'is_correct' => false]
                ],
                'explanation' => 'La peau constitue une barrière physique. Une coupure l’endommage et facilite l’accès de certains micro-organismes aux tissus sous-jacents.',
            ],
            [
                'question' => 'Une personne souffre d’une infection bactérienne. Pourquoi peut-elle avoir de la fièvre ?',
                'choices' => [
                        ['choice_text' => 'La fièvre peut accompagner la réponse de l’organisme à l’infection', 'is_correct' => true],
                        ['choice_text' => 'La fièvre prouve toujours qu’il s’agit d’un virus', 'is_correct' => false],
                        ['choice_text' => 'La température corporelle devient définitivement élevée', 'is_correct' => false],
                        ['choice_text' => 'La fièvre remplace le système immunitaire', 'is_correct' => false]
                ],
                'explanation' => 'La fièvre est une réponse possible lors d’une infection. Des signaux produits pendant la réponse immunitaire peuvent modifier temporairement la température du corps.',
            ],
            [
                'question' => 'Deux personnes touchent le même objet contaminé, mais une seule tombe malade. Quelle explication est raisonnable ?',
                'choices' => [
                        ['choice_text' => 'Une exposition ne garantit pas toujours une infection ou une maladie', 'is_correct' => true],
                        ['choice_text' => 'Les microbes choisissent toujours la personne la plus âgée', 'is_correct' => false],
                        ['choice_text' => 'L’objet n’a jamais pu contenir de microbes', 'is_correct' => false],
                        ['choice_text' => 'Une seule personne possède un système immunitaire', 'is_correct' => false]
                ],
                'explanation' => 'Le risque dépend notamment de la quantité d’agents, de la porte d’entrée, des défenses immunitaires et d’autres facteurs. Une exposition n’entraîne donc pas systématiquement une maladie.',
            ],
            [
                'question' => 'Pourquoi termine-t-on parfois un traitement antibiotique selon la prescription même lorsque l’on se sent mieux ?',
                'choices' => [
                        ['choice_text' => 'Pour rendre les bactéries plus fortes', 'is_correct' => false],
                        ['choice_text' => 'Pour suivre le traitement prévu et éviter de favoriser la survie de bactéries sensibles', 'is_correct' => true],
                        ['choice_text' => 'Pour remplacer la vaccination', 'is_correct' => false],
                        ['choice_text' => 'Parce que les antibiotiques doivent être pris toute la vie', 'is_correct' => false]
                ],
                'explanation' => 'Respecter la prescription aide à traiter correctement l’infection et limite certaines situations où des bactéries survivantes peuvent contribuer au problème de résistance aux antibiotiques.',
            ],
            [
                'question' => 'Dans une école, plusieurs élèves développent la même infection après une réunion en salle fermée. Quelle mesure agit directement sur la transmission par l’air ou les gouttelettes ?',
                'choices' => [
                        ['choice_text' => 'Améliorer l’aération de la salle', 'is_correct' => true],
                        ['choice_text' => 'Réduire l’éclairage', 'is_correct' => false],
                        ['choice_text' => 'Ajouter du sucre dans l’eau', 'is_correct' => false],
                        ['choice_text' => 'Éteindre les ordinateurs', 'is_correct' => false]
                ],
                'explanation' => 'Une bonne ventilation réduit l’accumulation de certaines particules respiratoires dans l’air et peut ainsi diminuer le risque de transmission pour plusieurs infections respiratoires.',
            ]
                ],
            ],
            [
                'title' => 'Écosystèmes et biodiversité',
                'description' => 'Comprendre les relations entre êtres vivants et milieu, les niveaux d’organisation écologique, les chaînes alimentaires et l’importance de la biodiversité.',
                'questions' => [
            [
                'question' => 'Dans un écosystème, que désigne le terme « population » ?',
                'choices' => [
                        ['choice_text' => 'Tous les êtres vivants de la planète', 'is_correct' => false],
                        ['choice_text' => 'Les individus d’une même espèce vivant dans une zone donnée', 'is_correct' => true],
                        ['choice_text' => 'Uniquement les plantes d’un milieu', 'is_correct' => false],
                        ['choice_text' => 'Les éléments non vivants du milieu', 'is_correct' => false]
                ],
                'explanation' => 'Une population regroupe les individus d’une même espèce présents dans un espace donné à un moment donné.',
            ],
            [
                'question' => 'Lequel est un facteur abiotique d’un écosystème ?',
                'choices' => [
                        ['choice_text' => 'La température', 'is_correct' => true],
                        ['choice_text' => 'Un champignon', 'is_correct' => false],
                        ['choice_text' => 'Un lapin', 'is_correct' => false],
                        ['choice_text' => 'Une bactérie', 'is_correct' => false]
                ],
                'explanation' => 'Un facteur abiotique est une composante non vivante du milieu, comme la température, la lumière, l’eau ou le pH.',
            ],
            [
                'question' => 'Dans la chaîne herbe → sauterelle → grenouille → serpent, quel organisme est le producteur ?',
                'choices' => [
                        ['choice_text' => 'La sauterelle', 'is_correct' => false],
                        ['choice_text' => 'La grenouille', 'is_correct' => false],
                        ['choice_text' => 'L’herbe', 'is_correct' => true],
                        ['choice_text' => 'Le serpent', 'is_correct' => false]
                ],
                'explanation' => 'L’herbe est un végétal capable de produire sa matière organique grâce à la photosynthèse. Elle constitue donc le producteur de cette chaîne.',
            ],
            [
                'question' => 'Pourquoi une diminution importante des plantes peut-elle affecter plusieurs autres espèces d’un écosystème ?',
                'choices' => [
                        ['choice_text' => 'Les plantes sont seulement décoratives', 'is_correct' => false],
                        ['choice_text' => 'Elles fournissent de la matière et de l’énergie à de nombreux organismes', 'is_correct' => true],
                        ['choice_text' => 'Elles empêchent toutes les espèces de respirer', 'is_correct' => false],
                        ['choice_text' => 'Elles remplacent les décomposeurs', 'is_correct' => false]
                ],
                'explanation' => 'Les végétaux constituent une base importante de nombreux réseaux alimentaires. Leur diminution peut réduire les ressources disponibles pour les herbivores puis pour leurs prédateurs.',
            ],
            [
                'question' => 'Un renard mange des lapins et des petits rongeurs. Si le nombre de lapins diminue fortement, que peut-il se passer pour le renard à court terme ?',
                'choices' => [
                        ['choice_text' => 'Il peut disposer de moins de nourriture et modifier son alimentation', 'is_correct' => true],
                        ['choice_text' => 'Il devient automatiquement herbivore', 'is_correct' => false],
                        ['choice_text' => 'Sa population augmente toujours', 'is_correct' => false],
                        ['choice_text' => 'Il cesse de respirer', 'is_correct' => false]
                ],
                'explanation' => 'Une baisse d’une ressource alimentaire peut réduire la disponibilité de nourriture pour le prédateur. Celui-ci peut alors changer de proies ou voir son effectif diminuer.',
            ],
            [
                'question' => 'Deux espèces utilisent la même ressource limitée dans un même milieu. Quel type d’interaction peut en résulter ?',
                'choices' => [
                        ['choice_text' => 'La compétition', 'is_correct' => true],
                        ['choice_text' => 'La photosynthèse', 'is_correct' => false],
                        ['choice_text' => 'La respiration', 'is_correct' => false],
                        ['choice_text' => 'La fossilisation', 'is_correct' => false]
                ],
                'explanation' => 'Lorsque plusieurs organismes ont besoin de la même ressource limitée, ils peuvent entrer en compétition pour cette ressource.',
            ],
            [
                'question' => 'Pourquoi une espèce introduite dans un nouvel environnement peut-elle parfois devenir envahissante ?',
                'choices' => [
                        ['choice_text' => 'Parce qu’elle peut avoir peu de prédateurs locaux et disposer de ressources favorables', 'is_correct' => true],
                        ['choice_text' => 'Parce qu’elle ne peut jamais se reproduire', 'is_correct' => false],
                        ['choice_text' => 'Parce qu’elle détruit immédiatement toutes les roches', 'is_correct' => false],
                        ['choice_text' => 'Parce qu’elle devient automatiquement une espèce native', 'is_correct' => false]
                ],
                'explanation' => 'Dans certains milieux, une espèce introduite rencontre peu de prédateurs ou de concurrents efficaces et peut donc se multiplier rapidement, ce qui perturbe les communautés locales.',
            ],
            [
                'question' => 'Une forêt contient une grande variété d’espèces végétales, animales et microbiennes. Que décrit cette variété ?',
                'choices' => [
                        ['choice_text' => 'La biodiversité', 'is_correct' => true],
                        ['choice_text' => 'La pression', 'is_correct' => false],
                        ['choice_text' => 'La tectonique', 'is_correct' => false],
                        ['choice_text' => 'La météo', 'is_correct' => false]
                ],
                'explanation' => 'La biodiversité désigne la variété du vivant, notamment la diversité des espèces, des gènes et des écosystèmes.',
            ],
            [
                'question' => 'Une population d’insectes est réduite après la disparition d’une plante dont elle dépendait pour se nourrir. Quelle relation de cause à effet est la plus logique ?',
                'choices' => [
                        ['choice_text' => 'La disparition de la ressource alimentaire peut limiter la survie et la reproduction des insectes', 'is_correct' => true],
                        ['choice_text' => 'La plante disparue faisait automatiquement partie des prédateurs', 'is_correct' => false],
                        ['choice_text' => 'La disparition d’une plante augmente toujours la population d’insectes', 'is_correct' => false],
                        ['choice_text' => 'Les insectes cessent d’être des animaux', 'is_correct' => false]
                ],
                'explanation' => 'Une ressource alimentaire essentielle peut limiter une population. Si elle disparaît, les individus peuvent avoir plus de difficultés à survivre et à se reproduire.',
            ],
            [
                'question' => 'Une zone humide est protégée pour conserver les espèces mais aussi pour limiter certaines inondations. Pourquoi cette protection peut-elle avoir plusieurs bénéfices ?',
                'choices' => [
                        ['choice_text' => 'Un écosystème peut fournir plusieurs services, comme l’habitat d’espèces et le stockage temporaire de l’eau', 'is_correct' => true],
                        ['choice_text' => 'Un écosystème ne possède jamais plus d’une fonction', 'is_correct' => false],
                        ['choice_text' => 'La biodiversité empêche toute pluie', 'is_correct' => false],
                        ['choice_text' => 'Les zones humides transforment toute l’eau en eau potable', 'is_correct' => false]
                ],
                'explanation' => 'Les écosystèmes peuvent rendre plusieurs services à la fois. Une zone humide peut abriter des espèces, filtrer certains polluants et retenir temporairement une partie de l’eau.',
            ]
                ],
            ],
            [
                'title' => 'La Terre, ses matériaux et les grands processus géologiques',
                'description' => 'Identifier les principales familles de roches et minéraux, comprendre le cycle des roches, la tectonique des plaques et quelques phénomènes géologiques courants.',
                'questions' => [
            [
                'question' => 'Lequel de ces éléments est un minéral plutôt qu’une roche ?',
                'choices' => [
                        ['choice_text' => 'Le granite', 'is_correct' => false],
                        ['choice_text' => 'Le quartz', 'is_correct' => true],
                        ['choice_text' => 'Le basalte', 'is_correct' => false],
                        ['choice_text' => 'Le grès', 'is_correct' => false]
                ],
                'explanation' => 'Le quartz est un minéral possédant une composition chimique et une structure caractéristiques. Le granite, le basalte et le grès sont des roches constituées d’un ou plusieurs minéraux ou fragments.',
            ],
            [
                'question' => 'Une roche formée par le refroidissement et la solidification d’un magma appartient à la famille des roches…',
                'choices' => [
                        ['choice_text' => 'sédimentaires', 'is_correct' => false],
                        ['choice_text' => 'métamorphiques', 'is_correct' => false],
                        ['choice_text' => 'magmatiques', 'is_correct' => true],
                        ['choice_text' => 'organiques uniquement', 'is_correct' => false]
                ],
                'explanation' => 'Les roches magmatiques se forment lorsque le magma ou la lave refroidit et se solidifie. Le refroidissement peut avoir lieu en profondeur ou à la surface.',
            ],
            [
                'question' => 'Quelle structure terrestre solide se trouve sous la croûte et au-dessus du noyau ?',
                'choices' => [
                        ['choice_text' => 'Le manteau', 'is_correct' => true],
                        ['choice_text' => 'La biosphère', 'is_correct' => false],
                        ['choice_text' => 'L’atmosphère', 'is_correct' => false],
                        ['choice_text' => 'L’hydrosphère', 'is_correct' => false]
                ],
                'explanation' => 'Le manteau est la grande enveloppe rocheuse située entre la croûte et le noyau de la Terre.',
            ],
            [
                'question' => 'Deux plaques tectoniques se déplacent l’une vers l’autre. Quel type de limite cela décrit-il ?',
                'choices' => [
                        ['choice_text' => 'Une limite convergente', 'is_correct' => true],
                        ['choice_text' => 'Une limite divergente', 'is_correct' => false],
                        ['choice_text' => 'Une limite sans mouvement', 'is_correct' => false],
                        ['choice_text' => 'Une limite atmosphérique', 'is_correct' => false]
                ],
                'explanation' => 'Une limite convergente correspond au rapprochement de deux plaques. Elle peut être associée à la subduction, à la collision continentale et à une forte activité sismique ou volcanique.',
            ],
            [
                'question' => 'Pourquoi des fossiles marins peuvent-ils être trouvés sur des continents actuels ?',
                'choices' => [
                        ['choice_text' => 'Parce que certaines régions aujourd’hui émergées ont autrefois été recouvertes par la mer', 'is_correct' => true],
                        ['choice_text' => 'Parce que les fossiles marins volent vers les montagnes', 'is_correct' => false],
                        ['choice_text' => 'Parce que tous les continents sont nés dans les océans l’année dernière', 'is_correct' => false],
                        ['choice_text' => 'Parce que les fossiles changent spontanément d’habitat', 'is_correct' => false]
                ],
                'explanation' => 'La position des continents et le niveau des mers ont changé au cours de l’histoire de la Terre. Une région aujourd’hui continentale peut donc avoir été un ancien environnement marin.',
            ],
            [
                'question' => 'Une rivière transporte des grains qui se déposent lorsque sa vitesse diminue. Quel processus est observé ?',
                'choices' => [
                        ['choice_text' => 'La sédimentation', 'is_correct' => true],
                        ['choice_text' => 'La fusion', 'is_correct' => false],
                        ['choice_text' => 'La cristallisation du magma', 'is_correct' => false],
                        ['choice_text' => 'La photosynthèse', 'is_correct' => false]
                ],
                'explanation' => 'Lorsque les conditions de transport changent, les particules peuvent se déposer. Cette accumulation de sédiments correspond à la sédimentation.',
            ],
            [
                'question' => 'Quelle différence simple distingue l’érosion de la sédimentation ?',
                'choices' => [
                        ['choice_text' => 'L’érosion enlève ou transporte des matériaux, tandis que la sédimentation correspond à leur dépôt', 'is_correct' => true],
                        ['choice_text' => 'L’érosion forme uniquement du magma', 'is_correct' => false],
                        ['choice_text' => 'La sédimentation détruit toujours les minéraux', 'is_correct' => false],
                        ['choice_text' => 'Les deux termes désignent exactement le même phénomène', 'is_correct' => false]
                ],
                'explanation' => 'L’érosion participe au détachement et au transport des matériaux. Lorsque ces matériaux se déposent, on parle de sédimentation.',
            ],
            [
                'question' => 'Lors d’un séisme, pourquoi certaines zones de sol peuvent-elles subir des mouvements plus importants que d’autres ?',
                'choices' => [
                        ['choice_text' => 'La nature et l’épaisseur des matériaux du sol peuvent amplifier les vibrations', 'is_correct' => true],
                        ['choice_text' => 'Tous les sols réagissent exactement de la même manière', 'is_correct' => false],
                        ['choice_text' => 'Les séismes n’atteignent jamais la surface', 'is_correct' => false],
                        ['choice_text' => 'La pluie transforme immédiatement un séisme en éruption volcanique', 'is_correct' => false]
                ],
                'explanation' => 'Les propriétés des terrains influencent la manière dont les ondes sismiques se propagent. Certains sols meubles peuvent notamment amplifier les mouvements.',
            ],
            [
                'question' => 'Un volcan émet de la lave très fluide qui s’écoule sur de longues distances. Quelle propriété peut expliquer cette situation ?',
                'choices' => [
                        ['choice_text' => 'Une faible viscosité de la lave facilite son écoulement', 'is_correct' => true],
                        ['choice_text' => 'Une très forte viscosité accélère toujours la lave', 'is_correct' => false],
                        ['choice_text' => 'La lave est entièrement constituée d’eau', 'is_correct' => false],
                        ['choice_text' => 'La lave ne contient aucun minéral', 'is_correct' => false]
                ],
                'explanation' => 'Une lave peu visqueuse s’écoule plus facilement et peut parcourir de grandes distances avant de se refroidir. La viscosité dépend notamment de la composition et de la température.',
            ],
            [
                'question' => 'Une région est située près d’une limite de plaques et connaît régulièrement des séismes. Quelle mesure contribue le plus directement à réduire les conséquences d’un futur séisme ?',
                'choices' => [
                        ['choice_text' => 'Construire des bâtiments respectant des normes parasismiques', 'is_correct' => true],
                        ['choice_text' => 'Supprimer toutes les montagnes voisines', 'is_correct' => false],
                        ['choice_text' => 'Arrêter la rotation de la Terre', 'is_correct' => false],
                        ['choice_text' => 'Empêcher toute pluie dans la région', 'is_correct' => false]
                ],
                'explanation' => 'On ne peut pas empêcher un séisme, mais on peut réduire ses conséquences grâce à la prévention, à des constructions adaptées, à l’information de la population et à des plans d’urgence.',
            ]
                ],
            ]
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
