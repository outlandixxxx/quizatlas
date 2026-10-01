<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class HumanPhysiologyBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'human-physiology')->firstOrFail();

        $quizzes = [
            [
                'title' => 'Bases de la physiologie humaine',
                'description' => 'Comprendre comment les grandes fonctions du corps humain permettent de maintenir la vie et l’équilibre interne.',
                'settings' => ['duration' => 15, 'passing_score' => 50],
                'questions' => [
                    [
                        'question' => 'Quel est l’objectif général de la physiologie humaine ?',
                        'choices' => [
                            ['choice_text' => 'Décrire uniquement la forme des os', 'is_correct' => false],
                            ['choice_text' => 'Étudier le fonctionnement des organismes et de leurs fonctions', 'is_correct' => true],
                            ['choice_text' => 'Classer les êtres vivants selon leur habitat', 'is_correct' => false],
                            ['choice_text' => 'Identifier toutes les maladies infectieuses', 'is_correct' => false],
                        ],
                        'explanation' => 'La physiologie étudie le fonctionnement des organes, des systèmes et des mécanismes qui permettent à l’organisme de vivre et de s’adapter.'
                    ],
                    [
                        'question' => 'Un élève a une température corporelle proche de 37 °C malgré une journée chaude. Quel concept cela illustre-t-il surtout ?',
                        'choices' => [
                            ['choice_text' => 'La fécondation', 'is_correct' => false],
                            ['choice_text' => 'L’homéostasie', 'is_correct' => true],
                            ['choice_text' => 'La digestion mécanique', 'is_correct' => false],
                            ['choice_text' => 'La croissance osseuse', 'is_correct' => false],
                        ],
                        'explanation' => 'L’homéostasie correspond au maintien relativement stable du milieu intérieur grâce à des mécanismes de régulation, par exemple ceux de la température.'
                    ],
                    [
                        'question' => 'Parmi les propositions suivantes, laquelle est un exemple de réponse physiologique à une baisse de température extérieure ?',
                        'choices' => [
                            ['choice_text' => 'La transpiration augmente immédiatement', 'is_correct' => false],
                            ['choice_text' => 'Les frissons peuvent produire de la chaleur', 'is_correct' => true],
                            ['choice_text' => 'La fréquence cardiaque devient nécessairement nulle', 'is_correct' => false],
                            ['choice_text' => 'Les poumons cessent tout échange gazeux', 'is_correct' => false],
                        ],
                        'explanation' => 'Les frissons sont des contractions musculaires rapides qui augmentent la production de chaleur et participent à la thermorégulation.'
                    ],
                    [
                        'question' => 'Dans une boucle de régulation, quelle structure reçoit généralement une information sur une variation et contribue à déclencher une réponse adaptée ?',
                        'choices' => [
                            ['choice_text' => 'Un récepteur sensoriel', 'is_correct' => true],
                            ['choice_text' => 'Une dent', 'is_correct' => false],
                            ['choice_text' => 'Un globule rouge uniquement', 'is_correct' => false],
                            ['choice_text' => 'Une articulation sans innervation', 'is_correct' => false],
                        ],
                        'explanation' => 'Les récepteurs détectent des changements dans l’organisme ou son environnement et transmettent l’information aux centres de régulation.'
                    ],
                    [
                        'question' => 'Pourquoi le sang est-il considéré comme un milieu de transport essentiel ?',
                        'choices' => [
                            ['choice_text' => 'Parce qu’il produit tous les os', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’il transporte notamment l’oxygène, des nutriments et des hormones', 'is_correct' => true],
                            ['choice_text' => 'Parce qu’il digère directement tous les aliments dans l’estomac', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’il remplace les neurones', 'is_correct' => false],
                        ],
                        'explanation' => 'Le sang relie de nombreux organes en transportant des gaz respiratoires, des nutriments, des hormones et certains déchets.'
                    ],
                    [
                        'question' => 'Quelle phrase décrit le mieux une fonction physiologique ?',
                        'choices' => [
                            ['choice_text' => 'Elle correspond à la manière dont une structure contribue au fonctionnement de l’organisme', 'is_correct' => true],
                            ['choice_text' => 'Elle décrit uniquement la couleur d’un organe', 'is_correct' => false],
                            ['choice_text' => 'Elle désigne uniquement une maladie', 'is_correct' => false],
                            ['choice_text' => 'Elle ne peut jamais varier selon les besoins du corps', 'is_correct' => false],
                        ],
                        'explanation' => 'Une fonction physiologique décrit le rôle fonctionnel d’une structure ou d’un système, par exemple la ventilation ou la filtration du sang.'
                    ],
                    [
                        'question' => 'Un coureur termine un sprint. Son rythme respiratoire reste élevé pendant quelques instants. Quelle interprétation est la plus cohérente ?',
                        'choices' => [
                            ['choice_text' => 'Le corps ajuste encore les échanges gazeux pour répondre aux besoins métaboliques', 'is_correct' => true],
                            ['choice_text' => 'Les poumons ont définitivement augmenté de volume', 'is_correct' => false],
                            ['choice_text' => 'Le sang ne transporte plus de dioxyde de carbone', 'is_correct' => false],
                            ['choice_text' => 'Le système nerveux est complètement arrêté', 'is_correct' => false],
                        ],
                        'explanation' => 'Après un effort, les besoins en oxygène et l’élimination du dioxyde de carbone restent élevés. La ventilation peut donc demeurer accélérée avant le retour à la situation de repos.'
                    ],
                    [
                        'question' => 'Quel énoncé distingue correctement l’anatomie de la physiologie ?',
                        'choices' => [
                            ['choice_text' => 'L’anatomie étudie surtout les structures, la physiologie leur fonctionnement', 'is_correct' => true],
                            ['choice_text' => 'L’anatomie étudie seulement les cellules, la physiologie seulement les os', 'is_correct' => false],
                            ['choice_text' => 'Les deux disciplines sont exactement synonymes', 'is_correct' => false],
                            ['choice_text' => 'La physiologie ne concerne jamais l’être humain', 'is_correct' => false],
                        ],
                        'explanation' => 'L’anatomie et la physiologie sont complémentaires : l’une s’intéresse principalement aux structures, l’autre aux fonctions et aux mécanismes.'
                    ],
                    [
                        'question' => 'Quel mécanisme contribue généralement à limiter une variation excessive d’une variable physiologique ?',
                        'choices' => [
                            ['choice_text' => 'Une boucle de rétroaction négative', 'is_correct' => true],
                            ['choice_text' => 'Une absence totale de régulation', 'is_correct' => false],
                            ['choice_text' => 'Une destruction systématique des récepteurs', 'is_correct' => false],
                            ['choice_text' => 'Une augmentation permanente et incontrôlée', 'is_correct' => false],
                        ],
                        'explanation' => 'La rétroaction négative réduit l’écart par rapport à une valeur de référence. Elle est fréquente dans la régulation de la température, de la glycémie et d’autres variables.'
                    ],
                    [
                        'question' => 'Un médicament modifie la fréquence cardiaque. Cette observation montre que la physiologie peut être étudiée à partir de...',
                        'choices' => [
                            ['choice_text' => 'mesures de fonctions observables', 'is_correct' => true],
                            ['choice_text' => 'la couleur des vêtements du patient', 'is_correct' => false],
                            ['choice_text' => 'la forme des lettres sur une ordonnance', 'is_correct' => false],
                            ['choice_text' => 'la taille d’une pièce uniquement', 'is_correct' => false],
                        ],
                        'explanation' => 'La physiologie s’appuie sur des mesures fonctionnelles, comme la fréquence cardiaque, la pression artérielle, la ventilation ou la glycémie.'
                    ],
                ],
            ],
            [
                'title' => 'Système nerveux et communication',
                'description' => 'Découvrir comment les neurones, les réflexes et les centres nerveux assurent une communication rapide dans l’organisme.',
                'settings' => ['duration' => 20, 'passing_score' => 55],
                'questions' => [
                    [
                        'question' => 'Quelle est la cellule spécialisée dans la transmission de l’information nerveuse ?',
                        'choices' => [
                            ['choice_text' => 'Le neurone', 'is_correct' => true],
                            ['choice_text' => 'Le globule rouge', 'is_correct' => false],
                            ['choice_text' => 'La plaquette', 'is_correct' => false],
                            ['choice_text' => 'L’adipocyte uniquement', 'is_correct' => false],
                        ],
                        'explanation' => 'Le neurone est une cellule excitable capable de recevoir, intégrer et transmettre des signaux nerveux.'
                    ],
                    [
                        'question' => 'Quel rôle les récepteurs sensoriels jouent-ils principalement ?',
                        'choices' => [
                            ['choice_text' => 'Produire les globules rouges', 'is_correct' => false],
                            ['choice_text' => 'Détecter des stimuli et fournir des informations au système nerveux', 'is_correct' => true],
                            ['choice_text' => 'Digérer les protéines', 'is_correct' => false],
                            ['choice_text' => 'Filtrer l’urine', 'is_correct' => false],
                        ],
                        'explanation' => 'Les récepteurs sensoriels détectent des variations comme la lumière, la pression, la température ou certaines molécules et participent à leur transformation en signaux nerveux.'
                    ],
                    [
                        'question' => 'Quand on retire rapidement la main après avoir touché un objet très chaud, cette réponse immédiate correspond à...',
                        'choices' => [
                            ['choice_text' => 'un réflexe', 'is_correct' => true],
                            ['choice_text' => 'une digestion', 'is_correct' => false],
                            ['choice_text' => 'une coagulation', 'is_correct' => false],
                            ['choice_text' => 'une filtration rénale', 'is_correct' => false],
                        ],
                        'explanation' => 'Le réflexe de retrait est une réponse rapide et automatique à un stimulus nocif. Il implique un circuit nerveux qui permet une réaction avant même une décision consciente détaillée.'
                    ],
                    [
                        'question' => 'La vitesse de réaction nerveuse est utile notamment parce qu’elle permet...',
                        'choices' => [
                            ['choice_text' => 'une réponse rapide aux changements de l’environnement', 'is_correct' => true],
                            ['choice_text' => 'de remplacer la digestion', 'is_correct' => false],
                            ['choice_text' => 'de faire circuler le sang sans cœur', 'is_correct' => false],
                            ['choice_text' => 'd’empêcher toute variation physiologique', 'is_correct' => false],
                        ],
                        'explanation' => 'Le système nerveux est particulièrement adapté aux réponses rapides grâce à la transmission des signaux entre récepteurs, centres nerveux et effecteurs.'
                    ],
                    [
                        'question' => 'Quel organe joue le rôle principal de centre de commande du système nerveux central ?',
                        'choices' => [
                            ['choice_text' => 'Le cerveau', 'is_correct' => true],
                            ['choice_text' => 'L’estomac', 'is_correct' => false],
                            ['choice_text' => 'Le foie', 'is_correct' => false],
                            ['choice_text' => 'Le rein', 'is_correct' => false],
                        ],
                        'explanation' => 'Le cerveau appartient au système nerveux central avec la moelle épinière. Il reçoit et traite une grande quantité d’informations et coordonne de nombreuses réponses.'
                    ],
                    [
                        'question' => 'Quel exemple correspond à une information sensorielle ?',
                        'choices' => [
                            ['choice_text' => 'La sensation de chaleur sur la peau', 'is_correct' => true],
                            ['choice_text' => 'La présence de glucose dans une cellule sans détecteur', 'is_correct' => false],
                            ['choice_text' => 'La fabrication d’hémoglobine par la moelle osseuse', 'is_correct' => false],
                            ['choice_text' => 'La formation de bile dans le foie', 'is_correct' => false],
                        ],
                        'explanation' => 'Une sensation telle que la chaleur résulte de la détection d’un stimulus par des récepteurs sensoriels et du traitement des informations par le système nerveux.'
                    ],
                    [
                        'question' => 'Un étudiant voit soudain une balle arriver vers son visage. Quelle séquence est la plus logique ?',
                        'choices' => [
                            ['choice_text' => 'Détection visuelle → traitement nerveux → commande des muscles', 'is_correct' => true],
                            ['choice_text' => 'Contraction musculaire → digestion → détection visuelle', 'is_correct' => false],
                            ['choice_text' => 'Filtration rénale → vision → respiration', 'is_correct' => false],
                            ['choice_text' => 'Coagulation → vision → croissance osseuse', 'is_correct' => false],
                        ],
                        'explanation' => 'La vision fournit une information sensorielle, le système nerveux l’analyse, puis une commande motrice peut être envoyée aux muscles pour produire une réponse.'
                    ],
                    [
                        'question' => 'Quel élément permet la communication entre deux neurones au niveau de nombreuses jonctions ?',
                        'choices' => [
                            ['choice_text' => 'Des neurotransmetteurs', 'is_correct' => true],
                            ['choice_text' => 'Des sels biliaires uniquement', 'is_correct' => false],
                            ['choice_text' => 'L’urée', 'is_correct' => false],
                            ['choice_text' => 'L’hémoglobine', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans de nombreuses synapses chimiques, un neurone libère des neurotransmetteurs qui transmettent le signal à une autre cellule.'
                    ],
                    [
                        'question' => 'Pourquoi la douleur peut-elle provoquer le retrait d’une main avant que la personne ait le temps d’y réfléchir consciemment ?',
                        'choices' => [
                            ['choice_text' => 'Parce que certains circuits réflexes produisent une réponse automatique très rapide', 'is_correct' => true],
                            ['choice_text' => 'Parce que les os commandent directement les muscles', 'is_correct' => false],
                            ['choice_text' => 'Parce que le sang décide de la réponse', 'is_correct' => false],
                            ['choice_text' => 'Parce que la digestion accélère les neurones', 'is_correct' => false],
                        ],
                        'explanation' => 'Le réflexe protège rapidement l’organisme. Les circuits impliqués peuvent déclencher une réponse motrice avant l’analyse consciente complète de la douleur.'
                    ],
                    [
                        'question' => 'Quel énoncé est correct à propos du système nerveux autonome ?',
                        'choices' => [
                            ['choice_text' => 'Il participe à la régulation de fonctions comme la fréquence cardiaque et la digestion', 'is_correct' => true],
                            ['choice_text' => 'Il contrôle uniquement les mouvements volontaires des doigts', 'is_correct' => false],
                            ['choice_text' => 'Il fonctionne seulement pendant le sommeil', 'is_correct' => false],
                            ['choice_text' => 'Il est indépendant de tout signal chimique', 'is_correct' => false],
                        ],
                        'explanation' => 'Le système nerveux autonome contribue au contrôle involontaire de nombreuses fonctions internes, notamment cardiovasculaires, digestives et respiratoires.'
                    ],
                ],
            ],
            [
                'title' => 'Système endocrinien et hormones',
                'description' => 'Comprendre comment les hormones assurent une communication chimique et participent à la régulation de nombreuses fonctions.',
                'settings' => ['duration' => 20, 'passing_score' => 60],
                'questions' => [
                    [
                        'question' => 'Qu’est-ce qu’une hormone ?',
                        'choices' => [
                            ['choice_text' => 'Une molécule messagère produite par certaines cellules et agissant sur des cellules cibles', 'is_correct' => true],
                            ['choice_text' => 'Un type de globule rouge', 'is_correct' => false],
                            ['choice_text' => 'Une enzyme présente uniquement dans l’estomac', 'is_correct' => false],
                            ['choice_text' => 'Un os microscopique', 'is_correct' => false],
                        ],
                        'explanation' => 'Les hormones sont des messagers chimiques. Elles sont produites par des cellules ou glandes endocrines et agissent sur des tissus possédant les récepteurs appropriés.'
                    ],
                    [
                        'question' => 'Quelle glande est souvent appelée « glande maîtresse » parce qu’elle contrôle plusieurs autres glandes endocrines ?',
                        'choices' => [
                            ['choice_text' => 'L’hypophyse', 'is_correct' => true],
                            ['choice_text' => 'La vésicule biliaire', 'is_correct' => false],
                            ['choice_text' => 'Le pancréas exocrine uniquement', 'is_correct' => false],
                            ['choice_text' => 'La rate', 'is_correct' => false],
                        ],
                        'explanation' => 'L’hypophyse sécrète plusieurs hormones qui régulent notamment la thyroïde, les glandes surrénales et les fonctions reproductrices.'
                    ],
                    [
                        'question' => 'Quelle hormone contribue directement à faire diminuer la glycémie après un repas ?',
                        'choices' => [
                            ['choice_text' => 'L’insuline', 'is_correct' => true],
                            ['choice_text' => 'L’adrénaline uniquement', 'is_correct' => false],
                            ['choice_text' => 'La mélatonine', 'is_correct' => false],
                            ['choice_text' => 'La thyroxine uniquement', 'is_correct' => false],
                        ],
                        'explanation' => 'Après une augmentation de la glycémie, l’insuline favorise l’entrée du glucose dans certaines cellules et son stockage, ce qui contribue à faire baisser la glycémie.'
                    ],
                    [
                        'question' => 'Quel principe explique qu’une hormone n’agit pas de la même manière sur toutes les cellules du corps ?',
                        'choices' => [
                            ['choice_text' => 'Seules les cellules possédant le récepteur adapté répondent directement à l’hormone', 'is_correct' => true],
                            ['choice_text' => 'Toutes les cellules contiennent forcément les mêmes récepteurs', 'is_correct' => false],
                            ['choice_text' => 'Les hormones agissent uniquement sur les os', 'is_correct' => false],
                            ['choice_text' => 'Les hormones ne circulent jamais dans le sang', 'is_correct' => false],
                        ],
                        'explanation' => 'Une cellule cible doit posséder le récepteur compatible avec l’hormone. La présence du récepteur permet de reconnaître le signal et d’y répondre.'
                    ],
                    [
                        'question' => 'Une personne ressent une forte émotion et son cœur accélère. Quelle hormone est classiquement associée à une réponse rapide au stress ?',
                        'choices' => [
                            ['choice_text' => 'L’adrénaline', 'is_correct' => true],
                            ['choice_text' => 'L’insuline', 'is_correct' => false],
                            ['choice_text' => 'La calcitonine', 'is_correct' => false],
                            ['choice_text' => 'La mélatonine', 'is_correct' => false],
                        ],
                        'explanation' => 'L’adrénaline est libérée notamment lors de situations de stress aigu et prépare l’organisme à une réponse rapide en agissant sur plusieurs organes.'
                    ],
                    [
                        'question' => 'Quel énoncé compare correctement la communication nerveuse et hormonale ?',
                        'choices' => [
                            ['choice_text' => 'La communication nerveuse est généralement très rapide, tandis que l’action hormonale peut être plus lente et prolongée', 'is_correct' => true],
                            ['choice_text' => 'Les hormones agissent toujours plus vite que les influx nerveux', 'is_correct' => false],
                            ['choice_text' => 'Les neurones ne transmettent jamais d’informations à des organes', 'is_correct' => false],
                            ['choice_text' => 'Les deux systèmes sont totalement indépendants', 'is_correct' => false],
                        ],
                        'explanation' => 'Les deux systèmes communiquent avec l’organisme de manière complémentaire. Les signaux nerveux sont souvent rapides, alors que certaines hormones produisent des effets plus lents mais durables.'
                    ],
                    [
                        'question' => 'Quel organe possède une fonction endocrine importante en libérant notamment l’insuline dans le sang ?',
                        'choices' => [
                            ['choice_text' => 'Le pancréas', 'is_correct' => true],
                            ['choice_text' => 'L’œsophage', 'is_correct' => false],
                            ['choice_text' => 'La trachée', 'is_correct' => false],
                            ['choice_text' => 'La vésicule séminale', 'is_correct' => false],
                        ],
                        'explanation' => 'Le pancréas a une fonction endocrine. Les cellules des îlots pancréatiques libèrent notamment l’insuline et le glucagon.'
                    ],
                    [
                        'question' => 'Chez une personne qui manque durablement d’insuline, quelle conséquence sur la glycémie est la plus probable ?',
                        'choices' => [
                            ['choice_text' => 'Une tendance à l’augmentation de la glycémie', 'is_correct' => true],
                            ['choice_text' => 'Une disparition complète du glucose sanguin', 'is_correct' => false],
                            ['choice_text' => 'Une baisse obligatoire de la température à 20 °C', 'is_correct' => false],
                            ['choice_text' => 'Une augmentation automatique du nombre d’os', 'is_correct' => false],
                        ],
                        'explanation' => 'L’insuline facilite l’utilisation et le stockage du glucose. Un déficit important en insuline peut donc conduire à une hyperglycémie.'
                    ],
                    [
                        'question' => 'Quel mécanisme est typique de nombreuses régulations hormonales de l’homéostasie ?',
                        'choices' => [
                            ['choice_text' => 'La rétroaction négative', 'is_correct' => true],
                            ['choice_text' => 'La coagulation permanente', 'is_correct' => false],
                            ['choice_text' => 'La croissance sans limite', 'is_correct' => false],
                            ['choice_text' => 'La suppression de tous les récepteurs', 'is_correct' => false],
                        ],
                        'explanation' => 'La rétroaction négative permet de réduire une dérive et de stabiliser une variable. Elle est fréquente dans les systèmes endocriniens.'
                    ],
                    [
                        'question' => 'Une hormone circulante est présente dans le sang, mais une cellule ne répond pas. Quelle explication simple est possible ?',
                        'choices' => [
                            ['choice_text' => 'La cellule peut ne pas posséder le récepteur correspondant', 'is_correct' => true],
                            ['choice_text' => 'La cellule a nécessairement perdu son noyau', 'is_correct' => false],
                            ['choice_text' => 'Toutes les hormones sont des globules rouges', 'is_correct' => false],
                            ['choice_text' => 'Le sang ne peut jamais transporter les hormones', 'is_correct' => false],
                        ],
                        'explanation' => 'La réponse hormonale dépend de la reconnaissance du messager par un récepteur. Sans récepteur fonctionnel adapté, la cellule ne répond pas directement à cette hormone.'
                    ],
                ],
            ],
            [
                'title' => 'Respiration et échanges gazeux',
                'description' => 'Explorer la ventilation, les échanges d’oxygène et de dioxyde de carbone et leur relation avec les besoins des cellules.',
                'settings' => ['duration' => 20, 'passing_score' => 60],
                'questions' => [
                    [
                        'question' => 'Quel gaz l’organisme prélève principalement dans l’air pour la respiration cellulaire ?',
                        'choices' => [
                            ['choice_text' => 'L’oxygène', 'is_correct' => true],
                            ['choice_text' => 'Le dioxyde de carbone', 'is_correct' => false],
                            ['choice_text' => 'L’azote comme carburant cellulaire', 'is_correct' => false],
                            ['choice_text' => 'L’hélium', 'is_correct' => false],
                        ],
                        'explanation' => 'L’oxygène inspiré atteint les alvéoles pulmonaires puis passe dans le sang, où il peut être transporté jusqu’aux tissus.'
                    ],
                    [
                        'question' => 'Dans quelle structure pulmonaire les échanges gazeux avec le sang se produisent-ils principalement ?',
                        'choices' => [
                            ['choice_text' => 'Les alvéoles pulmonaires', 'is_correct' => true],
                            ['choice_text' => 'La trachée uniquement', 'is_correct' => false],
                            ['choice_text' => 'Le larynx uniquement', 'is_correct' => false],
                            ['choice_text' => 'Le diaphragme', 'is_correct' => false],
                        ],
                        'explanation' => 'Les alvéoles sont de petits sacs entourés de capillaires. Leur grande surface et leurs parois fines favorisent les échanges d’oxygène et de dioxyde de carbone.'
                    ],
                    [
                        'question' => 'Quel muscle joue un rôle majeur dans l’inspiration calme ?',
                        'choices' => [
                            ['choice_text' => 'Le diaphragme', 'is_correct' => true],
                            ['choice_text' => 'Le biceps', 'is_correct' => false],
                            ['choice_text' => 'Le quadriceps', 'is_correct' => false],
                            ['choice_text' => 'Le muscle masséter uniquement', 'is_correct' => false],
                        ],
                        'explanation' => 'Lors d’une inspiration calme, le diaphragme se contracte et s’abaisse, ce qui augmente le volume de la cage thoracique et favorise l’entrée d’air.'
                    ],
                    [
                        'question' => 'Lors d’un effort physique, pourquoi la ventilation augmente-t-elle généralement ?',
                        'choices' => [
                            ['choice_text' => 'Pour répondre à l’augmentation des besoins en oxygène et à l’élimination accrue du dioxyde de carbone', 'is_correct' => true],
                            ['choice_text' => 'Pour empêcher le sang de circuler', 'is_correct' => false],
                            ['choice_text' => 'Pour arrêter la production d’énergie', 'is_correct' => false],
                            ['choice_text' => 'Pour refroidir uniquement les os', 'is_correct' => false],
                        ],
                        'explanation' => 'Les muscles actifs produisent davantage de dioxyde de carbone et utilisent davantage d’oxygène. Une ventilation plus importante aide à maintenir les échanges gazeux nécessaires.'
                    ],
                    [
                        'question' => 'Quel constituant du sang transporte une grande partie de l’oxygène ?',
                        'choices' => [
                            ['choice_text' => 'L’hémoglobine des globules rouges', 'is_correct' => true],
                            ['choice_text' => 'Les plaquettes', 'is_correct' => false],
                            ['choice_text' => 'Le plasma uniquement sans protéines', 'is_correct' => false],
                            ['choice_text' => 'Les globules blancs uniquement', 'is_correct' => false],
                        ],
                        'explanation' => 'L’hémoglobine, présente dans les globules rouges, se lie à une grande partie de l’oxygène et facilite son transport dans le sang.'
                    ],
                    [
                        'question' => 'Une personne respire 12 fois par minute avec un volume courant moyen de 0,5 L. Quel est son débit ventilatoire minute approximatif ?',
                        'choices' => [
                            ['choice_text' => '6 L/min', 'is_correct' => true],
                            ['choice_text' => '0,24 L/min', 'is_correct' => false],
                            ['choice_text' => '12,5 L/min', 'is_correct' => false],
                            ['choice_text' => '60 L/min', 'is_correct' => false],
                        ],
                        'explanation' => 'Le débit ventilatoire minute se calcule approximativement par fréquence respiratoire × volume courant : 12 × 0,5 = 6 L/min.'
                    ],
                    [
                        'question' => 'Dans les poumons, le dioxyde de carbone suit globalement quelle direction lors de l’échange alvéolaire ?',
                        'choices' => [
                            ['choice_text' => 'Du sang vers l’air alvéolaire', 'is_correct' => true],
                            ['choice_text' => 'De l’air alvéolaire vers les globules rouges uniquement', 'is_correct' => false],
                            ['choice_text' => 'Du diaphragme vers le sang', 'is_correct' => false],
                            ['choice_text' => 'De l’estomac vers les alvéoles', 'is_correct' => false],
                        ],
                        'explanation' => 'Le dioxyde de carbone produit par les tissus est transporté par le sang jusqu’aux poumons, puis diffusé vers l’air alvéolaire avant l’expiration.'
                    ],
                    [
                        'question' => 'Pourquoi les alvéoles doivent-elles avoir une paroi fine ?',
                        'choices' => [
                            ['choice_text' => 'Pour réduire la distance de diffusion des gaz entre l’air et le sang', 'is_correct' => true],
                            ['choice_text' => 'Pour empêcher tout échange avec le sang', 'is_correct' => false],
                            ['choice_text' => 'Pour stocker les aliments', 'is_correct' => false],
                            ['choice_text' => 'Pour fabriquer directement les globules rouges', 'is_correct' => false],
                        ],
                        'explanation' => 'Une faible épaisseur de la barrière alvéolo-capillaire facilite la diffusion rapide de l’oxygène et du dioxyde de carbone.'
                    ],
                    [
                        'question' => 'Quel résultat est le plus logique lors d’une respiration très profonde répétée rapidement pendant un certain temps ?',
                        'choices' => [
                            ['choice_text' => 'Une élimination accrue de dioxyde de carbone', 'is_correct' => true],
                            ['choice_text' => 'Une production instantanée de globules rouges dans les poumons', 'is_correct' => false],
                            ['choice_text' => 'Une disparition de l’oxygène atmosphérique', 'is_correct' => false],
                            ['choice_text' => 'Un arrêt obligatoire du cœur', 'is_correct' => false],
                        ],
                        'explanation' => 'Une ventilation importante augmente généralement l’élimination du dioxyde de carbone. Selon le contexte, une hyperventilation excessive peut même faire baisser temporairement sa concentration sanguine.'
                    ],
                    [
                        'question' => 'Quel énoncé relie correctement respiration et respiration cellulaire ?',
                        'choices' => [
                            ['choice_text' => 'La respiration apporte notamment l’oxygène nécessaire aux tissus, tandis que la respiration cellulaire utilise l’oxygène pour produire de l’énergie', 'is_correct' => true],
                            ['choice_text' => 'Les deux expressions désignent exactement le même mécanisme', 'is_correct' => false],
                            ['choice_text' => 'La respiration cellulaire se déroule uniquement dans le nez', 'is_correct' => false],
                            ['choice_text' => 'La ventilation produit directement toutes les hormones', 'is_correct' => false],
                        ],
                        'explanation' => 'La ventilation et les échanges pulmonaires alimentent le sang en oxygène. La respiration cellulaire utilise ensuite cet oxygène dans les cellules pour soutenir la production d’ATP.'
                    ],
                ],
            ],
            [
                'title' => 'Cœur, circulation et pression artérielle',
                'description' => 'Comprendre la pompe cardiaque, le trajet du sang et les bases de la pression artérielle.',
                'settings' => ['duration' => 20, 'passing_score' => 60],
                'questions' => [
                    [
                        'question' => 'Quelle est la fonction principale du cœur dans la circulation ?',
                        'choices' => [
                            ['choice_text' => 'Pomper le sang à travers les vaisseaux', 'is_correct' => true],
                            ['choice_text' => 'Produire tous les globules rouges chez l’adulte', 'is_correct' => false],
                            ['choice_text' => 'Digérer les lipides', 'is_correct' => false],
                            ['choice_text' => 'Filtrer l’urine', 'is_correct' => false],
                        ],
                        'explanation' => 'Le cœur agit comme une pompe musculaire. Ses contractions propulsent le sang dans la circulation pulmonaire et la circulation générale.'
                    ],
                    [
                        'question' => 'Quelle cavité cardiaque reçoit le sang provenant de la circulation générale ?',
                        'choices' => [
                            ['choice_text' => 'L’oreillette droite', 'is_correct' => true],
                            ['choice_text' => 'L’oreillette gauche', 'is_correct' => false],
                            ['choice_text' => 'Le ventricule gauche uniquement', 'is_correct' => false],
                            ['choice_text' => 'Le ventricule droit uniquement', 'is_correct' => false],
                        ],
                        'explanation' => 'Le sang revenant des tissus entre dans l’oreillette droite par les veines caves avant de passer vers le ventricule droit.'
                    ],
                    [
                        'question' => 'Quel côté du cœur envoie le sang pauvre en oxygène vers les poumons ?',
                        'choices' => [
                            ['choice_text' => 'Le côté droit', 'is_correct' => true],
                            ['choice_text' => 'Le côté gauche', 'is_correct' => false],
                            ['choice_text' => 'Uniquement les oreillettes sans ventricules', 'is_correct' => false],
                            ['choice_text' => 'La valve mitrale seule', 'is_correct' => false],
                        ],
                        'explanation' => 'Le cœur droit reçoit le sang pauvre en oxygène et le pompe vers les poumons par l’artère pulmonaire.'
                    ],
                    [
                        'question' => 'Les artères sont définies fonctionnellement comme des vaisseaux qui...',
                        'choices' => [
                            ['choice_text' => 'éloignent le sang du cœur', 'is_correct' => true],
                            ['choice_text' => 'ramènent toujours le sang vers le cœur', 'is_correct' => false],
                            ['choice_text' => 'contiennent uniquement du sang oxygéné', 'is_correct' => false],
                            ['choice_text' => 'ne possèdent jamais de paroi musculaire', 'is_correct' => false],
                        ],
                        'explanation' => 'La distinction artère/veine repose d’abord sur la direction du flux par rapport au cœur. Une artère emmène le sang loin du cœur, même si elle peut transporter du sang pauvre en oxygène, comme l’artère pulmonaire.'
                    ],
                    [
                        'question' => 'Quel vaisseau permet les échanges directs de gaz, nutriments et déchets avec les tissus ?',
                        'choices' => [
                            ['choice_text' => 'Le capillaire', 'is_correct' => true],
                            ['choice_text' => 'L’aorte uniquement', 'is_correct' => false],
                            ['choice_text' => 'La veine cave uniquement', 'is_correct' => false],
                            ['choice_text' => 'La valve cardiaque', 'is_correct' => false],
                        ],
                        'explanation' => 'Les capillaires ont des parois très fines et forment un réseau proche des cellules. Ils constituent le principal site d’échanges entre le sang et les tissus.'
                    ],
                    [
                        'question' => 'Une personne a une fréquence cardiaque de 75 battements par minute et un volume d’éjection systolique de 70 mL. Quel débit cardiaque approximatif obtient-on ?',
                        'choices' => [
                            ['choice_text' => '5,25 L/min', 'is_correct' => true],
                            ['choice_text' => '1,05 L/min', 'is_correct' => false],
                            ['choice_text' => '10,5 L/min', 'is_correct' => false],
                            ['choice_text' => '52,5 L/min', 'is_correct' => false],
                        ],
                        'explanation' => 'Le débit cardiaque = fréquence cardiaque × volume d’éjection systolique. 75 × 70 mL = 5250 mL/min, soit 5,25 L/min.'
                    ],
                    [
                        'question' => 'Que représente principalement la pression artérielle systolique ?',
                        'choices' => [
                            ['choice_text' => 'La pression la plus élevée dans les artères lors de la contraction ventriculaire', 'is_correct' => true],
                            ['choice_text' => 'La pression nulle pendant tout le cycle cardiaque', 'is_correct' => false],
                            ['choice_text' => 'La pression uniquement dans les veines', 'is_correct' => false],
                            ['choice_text' => 'La pression de l’air dans les poumons', 'is_correct' => false],
                        ],
                        'explanation' => 'La pression systolique correspond au pic de pression artérielle associé à la contraction des ventricules.'
                    ],
                    [
                        'question' => 'Pourquoi le cœur possède-t-il des valves ?',
                        'choices' => [
                            ['choice_text' => 'Pour favoriser un flux sanguin dirigé et limiter les retours en arrière', 'is_correct' => true],
                            ['choice_text' => 'Pour produire des globules blancs', 'is_correct' => false],
                            ['choice_text' => 'Pour augmenter la taille des poumons', 'is_correct' => false],
                            ['choice_text' => 'Pour digérer les protéines', 'is_correct' => false],
                        ],
                        'explanation' => 'Les valves s’ouvrent et se ferment selon les différences de pression et contribuent à maintenir un déplacement du sang dans le bon sens à travers le cœur.'
                    ],
                    [
                        'question' => 'Après quelques minutes de course, le cœur bat plus vite. Quelle adaptation explique directement l’augmentation du débit cardiaque ?',
                        'choices' => [
                            ['choice_text' => 'La hausse de la fréquence cardiaque contribue à augmenter le débit cardiaque', 'is_correct' => true],
                            ['choice_text' => 'La diminution volontaire du nombre de capillaires', 'is_correct' => false],
                            ['choice_text' => 'L’arrêt des échanges gazeux', 'is_correct' => false],
                            ['choice_text' => 'La fermeture définitive des valves', 'is_correct' => false],
                        ],
                        'explanation' => 'Le débit cardiaque dépend notamment de la fréquence cardiaque et du volume d’éjection systolique. Pendant l’exercice, ces paramètres peuvent augmenter.'
                    ],
                    [
                        'question' => 'Quelle affirmation sur les veines est correcte ?',
                        'choices' => [
                            ['choice_text' => 'Elles ramènent le sang vers le cœur et certaines possèdent des valvules', 'is_correct' => true],
                            ['choice_text' => 'Elles transportent toujours du sang riche en oxygène', 'is_correct' => false],
                            ['choice_text' => 'Elles ne contiennent jamais de sang', 'is_correct' => false],
                            ['choice_text' => 'Elles partent toujours du ventricule gauche', 'is_correct' => false],
                        ],
                        'explanation' => 'Les veines conduisent le sang vers le cœur. Les grosses veines des membres possèdent souvent des valvules qui limitent le reflux du sang.'
                    ],
                ],
            ],
            [
                'title' => 'Digestion, absorption et nutrition',
                'description' => 'Étudier comment le tube digestif transforme les aliments et permet l’absorption des nutriments.',
                'settings' => ['duration' => 20, 'passing_score' => 65],
                'questions' => [
                    [
                        'question' => 'Quel est le rôle général du système digestif ?',
                        'choices' => [
                            ['choice_text' => 'Transformer les aliments et permettre l’absorption des nutriments', 'is_correct' => true],
                            ['choice_text' => 'Faire circuler le sang dans les artères', 'is_correct' => false],
                            ['choice_text' => 'Produire les influx nerveux', 'is_correct' => false],
                            ['choice_text' => 'Filtrer directement tout le sang', 'is_correct' => false],
                        ],
                        'explanation' => 'La digestion décompose les aliments en molécules utilisables. Le tube digestif permet ensuite l’absorption d’une grande partie des nutriments.'
                    ],
                    [
                        'question' => 'Où commence la digestion des glucides ?',
                        'choices' => [
                            ['choice_text' => 'Dans la bouche', 'is_correct' => true],
                            ['choice_text' => 'Dans le gros intestin uniquement', 'is_correct' => false],
                            ['choice_text' => 'Dans les reins', 'is_correct' => false],
                            ['choice_text' => 'Dans les poumons', 'is_correct' => false],
                        ],
                        'explanation' => 'La salive contient notamment l’amylase salivaire, une enzyme qui commence la digestion de certains glucides dans la bouche.'
                    ],
                    [
                        'question' => 'Quel organe produit la bile ?',
                        'choices' => [
                            ['choice_text' => 'Le foie', 'is_correct' => true],
                            ['choice_text' => 'Le pancréas uniquement', 'is_correct' => false],
                            ['choice_text' => 'L’estomac', 'is_correct' => false],
                            ['choice_text' => 'Le côlon', 'is_correct' => false],
                        ],
                        'explanation' => 'La bile est produite par le foie. Elle est ensuite stockée et concentrée dans la vésicule biliaire avant d’être libérée dans l’intestin grêle.'
                    ],
                    [
                        'question' => 'Pourquoi l’intestin grêle est-il particulièrement adapté à l’absorption ?',
                        'choices' => [
                            ['choice_text' => 'Parce qu’il possède une grande surface grâce notamment aux villosités intestinales', 'is_correct' => true],
                            ['choice_text' => 'Parce qu’il ne contient aucun vaisseau', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’il empêche toute interaction avec le sang', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’il est entièrement constitué de cartilage', 'is_correct' => false],
                        ],
                        'explanation' => 'Les replis, villosités et microvillosités augmentent fortement la surface d’échange, ce qui facilite le passage des nutriments vers le sang ou la lymphe.'
                    ],
                    [
                        'question' => 'Quel rôle joue principalement l’estomac ?',
                        'choices' => [
                            ['choice_text' => 'Brasser les aliments et participer à la digestion, notamment des protéines', 'is_correct' => true],
                            ['choice_text' => 'Produire les globules rouges', 'is_correct' => false],
                            ['choice_text' => 'Effectuer l’échange d’oxygène avec le sang', 'is_correct' => false],
                            ['choice_text' => 'Filtrer le plasma sanguin', 'is_correct' => false],
                        ],
                        'explanation' => 'L’estomac stocke et brasse les aliments. Son contenu acide et ses enzymes participent à la digestion, notamment à celle des protéines.'
                    ],
                    [
                        'question' => 'Une molécule alimentaire de grande taille doit être décomposée avant de pouvoir être absorbée. Quel processus intervient ?',
                        'choices' => [
                            ['choice_text' => 'La digestion chimique', 'is_correct' => true],
                            ['choice_text' => 'La ventilation pulmonaire', 'is_correct' => false],
                            ['choice_text' => 'La conduction nerveuse', 'is_correct' => false],
                            ['choice_text' => 'La coagulation', 'is_correct' => false],
                        ],
                        'explanation' => 'La digestion chimique utilise notamment des enzymes pour couper de grosses molécules en unités plus petites pouvant être absorbées.'
                    ],
                    [
                        'question' => 'Quel nutriment constitue une source d’énergie importante et rapide pour de nombreuses cellules ?',
                        'choices' => [
                            ['choice_text' => 'Le glucose', 'is_correct' => true],
                            ['choice_text' => 'Le calcium osseux uniquement', 'is_correct' => false],
                            ['choice_text' => 'L’urée', 'is_correct' => false],
                            ['choice_text' => 'L’oxygène comme nutriment', 'is_correct' => false],
                        ],
                        'explanation' => 'Le glucose peut être utilisé par de nombreuses cellules pour produire de l’ATP. Il provient notamment de la digestion de glucides alimentaires.'
                    ],
                    [
                        'question' => 'Quel organe produit de nombreuses enzymes digestives libérées dans l’intestin grêle ?',
                        'choices' => [
                            ['choice_text' => 'Le pancréas', 'is_correct' => true],
                            ['choice_text' => 'Le cœur', 'is_correct' => false],
                            ['choice_text' => 'La rate', 'is_correct' => false],
                            ['choice_text' => 'La vessie', 'is_correct' => false],
                        ],
                        'explanation' => 'Le pancréas exocrine libère dans le duodénum des enzymes qui participent à la digestion des glucides, lipides et protéines.'
                    ],
                    [
                        'question' => 'Pourquoi les fibres alimentaires ne sont-elles pas toutes digérées par les enzymes humaines ?',
                        'choices' => [
                            ['choice_text' => 'Certaines fibres possèdent des liaisons que nos enzymes digestives ne peuvent pas dégrader', 'is_correct' => true],
                            ['choice_text' => 'Parce qu’elles sont immédiatement transformées en oxygène', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’elles ne rencontrent jamais le système digestif', 'is_correct' => false],
                            ['choice_text' => 'Parce que l’estomac les transforme toutes en protéines', 'is_correct' => false],
                        ],
                        'explanation' => 'Certaines fibres, comme la cellulose, ne sont pas dégradées par les enzymes digestives humaines. Une partie peut cependant être fermentée par le microbiote intestinal.'
                    ],
                    [
                        'question' => 'Après un repas, les nutriments absorbés par l’intestin passent principalement dans...',
                        'choices' => [
                            ['choice_text' => 'le sang et la lymphe selon leur nature', 'is_correct' => true],
                            ['choice_text' => 'les alvéoles pulmonaires uniquement', 'is_correct' => false],
                            ['choice_text' => 'la moelle épinière', 'is_correct' => false],
                            ['choice_text' => 'les articulations', 'is_correct' => false],
                        ],
                        'explanation' => 'De nombreux nutriments hydrosolubles rejoignent les capillaires sanguins. Une grande partie des lipides alimentaires passe d’abord par les vaisseaux lymphatiques.'
                    ],
                ],
            ],
            [
                'title' => 'Reins, eau et équilibre interne',
                'description' => 'Comprendre comment les reins régulent l’eau, les ions et les déchets et comment l’organisme maintient son équilibre hydrique.',
                'settings' => ['duration' => 25, 'passing_score' => 65],
                'questions' => [
                    [
                        'question' => 'Quelle est la fonction principale des reins dans l’élimination des déchets ?',
                        'choices' => [
                            ['choice_text' => 'Filtrer le sang et contribuer à la formation de l’urine', 'is_correct' => true],
                            ['choice_text' => 'Oxygéner directement l’air inspiré', 'is_correct' => false],
                            ['choice_text' => 'Produire les mouvements volontaires', 'is_correct' => false],
                            ['choice_text' => 'Digérer les protéines alimentaires dans l’intestin', 'is_correct' => false],
                        ],
                        'explanation' => 'Les reins filtrent le sang et modifient le filtrat par réabsorption et sécrétion. Le résultat final contribue à la formation de l’urine.'
                    ],
                    [
                        'question' => 'Quelle substance azotée est un déchet courant éliminé dans l’urine ?',
                        'choices' => [
                            ['choice_text' => 'L’urée', 'is_correct' => true],
                            ['choice_text' => 'L’hémoglobine', 'is_correct' => false],
                            ['choice_text' => 'Le glycogène', 'is_correct' => false],
                            ['choice_text' => 'Le collagène intact', 'is_correct' => false],
                        ],
                        'explanation' => 'L’urée provient notamment du métabolisme des acides aminés dans le foie. Elle est transportée par le sang vers les reins puis éliminée dans l’urine.'
                    ],
                    [
                        'question' => 'Lorsqu’une personne transpire beaucoup et ne boit pas assez, quelle réponse rénale est attendue ?',
                        'choices' => [
                            ['choice_text' => 'Une conservation accrue de l’eau avec une urine plus concentrée', 'is_correct' => true],
                            ['choice_text' => 'Une production obligatoire d’urine très diluée', 'is_correct' => false],
                            ['choice_text' => 'Un arrêt de toute réabsorption d’eau', 'is_correct' => false],
                            ['choice_text' => 'Une disparition complète des ions dans le sang', 'is_correct' => false],
                        ],
                        'explanation' => 'En cas de déficit hydrique, l’organisme cherche à conserver l’eau. Les reins réduisent notamment les pertes d’eau, ce qui tend à concentrer davantage l’urine.'
                    ],
                    [
                        'question' => 'Quelle hormone favorise la réabsorption de l’eau par les reins ?',
                        'choices' => [
                            ['choice_text' => 'L’hormone antidiurétique (ADH)', 'is_correct' => true],
                            ['choice_text' => 'L’insuline', 'is_correct' => false],
                            ['choice_text' => 'La salive', 'is_correct' => false],
                            ['choice_text' => 'La pepsine', 'is_correct' => false],
                        ],
                        'explanation' => 'L’ADH augmente la perméabilité à l’eau de certaines portions du néphron, ce qui favorise la réabsorption de l’eau et limite les pertes urinaires.'
                    ],
                    [
                        'question' => 'Le rôle des reins dans l’équilibre acido-basique consiste notamment à...',
                        'choices' => [
                            ['choice_text' => 'participer à la régulation des ions et à l’élimination de certains acides', 'is_correct' => true],
                            ['choice_text' => 'produire l’acidité de l’estomac', 'is_correct' => false],
                            ['choice_text' => 'bloquer toute respiration cellulaire', 'is_correct' => false],
                            ['choice_text' => 'faire disparaître le dioxygène du sang', 'is_correct' => false],
                        ],
                        'explanation' => 'Les reins participent au contrôle du pH sanguin en modulant l’excrétion d’ions et la gestion des bicarbonates, en complément de l’action rapide des poumons.'
                    ],
                    [
                        'question' => 'Un adulte produit 1,5 L d’urine en 24 heures. Quel volume moyen cela représente-t-il par heure ?',
                        'choices' => [
                            ['choice_text' => 'Environ 62,5 mL/h', 'is_correct' => true],
                            ['choice_text' => '15 mL/h', 'is_correct' => false],
                            ['choice_text' => '150 mL/h', 'is_correct' => false],
                            ['choice_text' => '625 mL/h', 'is_correct' => false],
                        ],
                        'explanation' => '1,5 L = 1500 mL. En divisant 1500 mL par 24 heures, on obtient environ 62,5 mL/h.'
                    ],
                    [
                        'question' => 'Quelle structure rénale est le principal siège de la filtration initiale du sang ?',
                        'choices' => [
                            ['choice_text' => 'Le glomérule', 'is_correct' => true],
                            ['choice_text' => 'La vessie', 'is_correct' => false],
                            ['choice_text' => 'L’uretère', 'is_correct' => false],
                            ['choice_text' => 'L’urètre', 'is_correct' => false],
                        ],
                        'explanation' => 'Le glomérule, situé dans le corpuscule rénal, réalise la filtration du plasma à partir du sang qui y arrive.'
                    ],
                    [
                        'question' => 'Pourquoi le corps doit-il contrôler la concentration des ions comme le sodium et le potassium ?',
                        'choices' => [
                            ['choice_text' => 'Parce que ces ions influencent notamment l’équilibre hydrique, les nerfs et les muscles', 'is_correct' => true],
                            ['choice_text' => 'Parce qu’ils servent uniquement à colorer le sang', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’ils remplacent toutes les vitamines', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’ils n’ont aucun effet physiologique', 'is_correct' => false],
                        ],
                        'explanation' => 'Le sodium et le potassium jouent des rôles majeurs dans les gradients électriques, la fonction nerveuse et musculaire et l’équilibre hydrique.'
                    ],
                    [
                        'question' => 'Quelle situation provoque généralement une augmentation de la sensation de soif ?',
                        'choices' => [
                            ['choice_text' => 'Une perte d’eau importante', 'is_correct' => true],
                            ['choice_text' => 'Une hydratation excessive sans changement physiologique', 'is_correct' => false],
                            ['choice_text' => 'La diminution de toute activité cellulaire', 'is_correct' => false],
                            ['choice_text' => 'Une baisse du nombre de cheveux', 'is_correct' => false],
                        ],
                        'explanation' => 'Une perte d’eau augmente notamment l’osmolarité du milieu intérieur ou diminue le volume circulant, ce qui stimule les mécanismes de la soif et de conservation de l’eau.'
                    ],
                    [
                        'question' => 'Quel énoncé décrit le mieux la fonction de la vessie ?',
                        'choices' => [
                            ['choice_text' => 'Stocker temporairement l’urine avant sa vidange', 'is_correct' => true],
                            ['choice_text' => 'Produire l’urine à partir des aliments', 'is_correct' => false],
                            ['choice_text' => 'Oxygéner le sang', 'is_correct' => false],
                            ['choice_text' => 'Fabriquer toutes les hormones', 'is_correct' => false],
                        ],
                        'explanation' => 'La vessie est un réservoir musculaire qui stocke l’urine produite par les reins jusqu’à la miction.'
                    ],
                ],
            ],
            [
                'title' => 'Muscles, mouvement et énergie',
                'description' => 'Découvrir comment les muscles produisent de la force, utilisent l’énergie et s’adaptent à l’activité physique.',
                'settings' => ['duration' => 25, 'passing_score' => 70],
                'questions' => [
                    [
                        'question' => 'Quelle propriété permet à un muscle de produire une tension ?',
                        'choices' => [
                            ['choice_text' => 'Sa capacité à se contracter', 'is_correct' => true],
                            ['choice_text' => 'Sa capacité à filtrer le sang', 'is_correct' => false],
                            ['choice_text' => 'Sa capacité à produire de l’urine', 'is_correct' => false],
                            ['choice_text' => 'Sa capacité à digérer les lipides', 'is_correct' => false],
                        ],
                        'explanation' => 'Les muscles squelettiques peuvent développer une tension grâce au glissement des filaments contractiles dans leurs fibres.'
                    ],
                    [
                        'question' => 'Quelle molécule fournit directement l’énergie immédiatement utilisable par les protéines contractiles ?',
                        'choices' => [
                            ['choice_text' => 'L’ATP', 'is_correct' => true],
                            ['choice_text' => 'L’ADN', 'is_correct' => false],
                            ['choice_text' => 'L’urée', 'is_correct' => false],
                            ['choice_text' => 'La bile', 'is_correct' => false],
                        ],
                        'explanation' => 'L’ATP est la principale monnaie énergétique directement utilisée dans de nombreuses réactions cellulaires, notamment lors de la contraction musculaire.'
                    ],
                    [
                        'question' => 'Pourquoi la respiration et la circulation augmentent-elles pendant un exercice intense ?',
                        'choices' => [
                            ['choice_text' => 'Pour apporter davantage d’oxygène et de nutriments aux muscles et évacuer davantage de dioxyde de carbone', 'is_correct' => true],
                            ['choice_text' => 'Pour empêcher les muscles de produire de l’ATP', 'is_correct' => false],
                            ['choice_text' => 'Pour arrêter toute activité nerveuse', 'is_correct' => false],
                            ['choice_text' => 'Pour réduire complètement le débit sanguin musculaire', 'is_correct' => false],
                        ],
                        'explanation' => 'Les muscles actifs consomment davantage d’oxygène et de substrats énergétiques et produisent davantage de dioxyde de carbone. Les systèmes cardiovasculaire et respiratoire s’adaptent à cette demande.'
                    ],
                    [
                        'question' => 'Quel type de muscle participe principalement aux mouvements volontaires des membres ?',
                        'choices' => [
                            ['choice_text' => 'Le muscle squelettique', 'is_correct' => true],
                            ['choice_text' => 'Le muscle cardiaque uniquement', 'is_correct' => false],
                            ['choice_text' => 'Le muscle lisse des intestins uniquement', 'is_correct' => false],
                            ['choice_text' => 'Le tissu osseux', 'is_correct' => false],
                        ],
                        'explanation' => 'Les muscles squelettiques sont attachés aux os et permettent les mouvements volontaires ainsi que le maintien de la posture.'
                    ],
                    [
                        'question' => 'Après un effort inhabituellement intense, une personne ressent une fatigue musculaire. Quelle explication physiologique est pertinente ?',
                        'choices' => [
                            ['choice_text' => 'Les réserves énergétiques et les mécanismes de production d’énergie peuvent être fortement sollicités', 'is_correct' => true],
                            ['choice_text' => 'Les muscles se transforment immédiatement en os', 'is_correct' => false],
                            ['choice_text' => 'Le cœur cesse forcément de battre', 'is_correct' => false],
                            ['choice_text' => 'Les neurones disparaissent temporairement', 'is_correct' => false],
                        ],
                        'explanation' => 'La fatigue est multifactorielle. Elle peut être liée à la disponibilité des substrats énergétiques, à des changements métaboliques et à des mécanismes nerveux et musculaires.'
                    ],
                    [
                        'question' => 'Quel mécanisme permet au muscle squelettique de produire un mouvement ?',
                        'choices' => [
                            ['choice_text' => 'La contraction des fibres musculaires tire sur les structures auxquelles elles sont reliées', 'is_correct' => true],
                            ['choice_text' => 'Le sang pousse directement les os', 'is_correct' => false],
                            ['choice_text' => 'Les os se contractent à la place des muscles', 'is_correct' => false],
                            ['choice_text' => 'Les tendons produisent seuls toute la force', 'is_correct' => false],
                        ],
                        'explanation' => 'La contraction musculaire développe une force transmise aux tendons puis aux os, ce qui produit le mouvement au niveau des articulations.'
                    ],
                    [
                        'question' => 'Un athlète augmente progressivement la durée de ses entraînements. Quelle adaptation générale peut apparaître avec un entraînement régulier ?',
                        'choices' => [
                            ['choice_text' => 'Une amélioration de certaines capacités cardiovasculaires et musculaires', 'is_correct' => true],
                            ['choice_text' => 'Une disparition des mitochondries', 'is_correct' => false],
                            ['choice_text' => 'Une impossibilité de produire de l’ATP', 'is_correct' => false],
                            ['choice_text' => 'Une fermeture permanente des capillaires musculaires', 'is_correct' => false],
                        ],
                        'explanation' => 'L’entraînement régulier peut provoquer des adaptations comme une meilleure capacité aérobie, une augmentation de certaines enzymes métaboliques et des adaptations musculaires.'
                    ],
                    [
                        'question' => 'Quel rôle le calcium joue-t-il dans la contraction musculaire ?',
                        'choices' => [
                            ['choice_text' => 'Il participe au déclenchement de l’interaction entre les protéines contractiles', 'is_correct' => true],
                            ['choice_text' => 'Il transporte l’oxygène à la place de l’hémoglobine', 'is_correct' => false],
                            ['choice_text' => 'Il remplace l’ATP', 'is_correct' => false],
                            ['choice_text' => 'Il dissout les globules rouges', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans le muscle, l’augmentation du calcium intracellulaire permet d’exposer les sites d’interaction entre les filaments, ce qui favorise la contraction.'
                    ],
                    [
                        'question' => 'Si un muscle reçoit moins d’oxygène pendant un effort intense, quelle conséquence est possible ?',
                        'choices' => [
                            ['choice_text' => 'Une part plus importante de la production d’ATP peut dépendre de voies anaérobies', 'is_correct' => true],
                            ['choice_text' => 'La production d’énergie devient immédiatement impossible dans toutes les cellules', 'is_correct' => false],
                            ['choice_text' => 'Le muscle produit automatiquement plus d’oxygène', 'is_correct' => false],
                            ['choice_text' => 'La contraction devient indépendante de toute énergie', 'is_correct' => false],
                        ],
                        'explanation' => 'Lorsque l’apport d’oxygène ne suffit pas aux besoins, les muscles augmentent leur recours à des voies anaérobies pour soutenir temporairement la production d’ATP.'
                    ],
                    [
                        'question' => 'Quel organe musculaire fonctionne de manière rythmique et involontaire pour propulser le sang ?',
                        'choices' => [
                            ['choice_text' => 'Le cœur', 'is_correct' => true],
                            ['choice_text' => 'Le biceps', 'is_correct' => false],
                            ['choice_text' => 'Le diaphragme uniquement', 'is_correct' => false],
                            ['choice_text' => 'Le quadriceps', 'is_correct' => false],
                        ],
                        'explanation' => 'Le muscle cardiaque possède une activité rythmique involontaire coordonnée qui permet au cœur de pomper continuellement le sang.'
                    ],
                ],
            ],
            [
                'title' => 'Reproduction, croissance et régulation',
                'description' => 'Revoir les principes physiologiques de la reproduction humaine, de la puberté, de la grossesse et de la croissance.',
                'settings' => ['duration' => 25, 'passing_score' => 70],
                'questions' => [
                    [
                        'question' => 'Quelle cellule résulte normalement de la fusion d’un spermatozoïde et d’un ovocyte ?',
                        'choices' => [
                            ['choice_text' => 'Un zygote', 'is_correct' => true],
                            ['choice_text' => 'Un globule rouge', 'is_correct' => false],
                            ['choice_text' => 'Une plaquette', 'is_correct' => false],
                            ['choice_text' => 'Une cellule musculaire mature', 'is_correct' => false],
                        ],
                        'explanation' => 'La fécondation correspond à la fusion des gamètes. Elle forme une cellule-œuf appelée zygote, à l’origine du développement embryonnaire.'
                    ],
                    [
                        'question' => 'Quelle hormone est fortement impliquée dans le déclenchement de l’ovulation au cours du cycle ovarien ?',
                        'choices' => [
                            ['choice_text' => 'La LH', 'is_correct' => true],
                            ['choice_text' => 'L’insuline uniquement', 'is_correct' => false],
                            ['choice_text' => 'L’ADH', 'is_correct' => false],
                            ['choice_text' => 'L’adrénaline uniquement', 'is_correct' => false],
                        ],
                        'explanation' => 'Un pic de LH au milieu du cycle est étroitement associé au déclenchement de l’ovulation.'
                    ],
                    [
                        'question' => 'Quel changement physiologique est courant pendant la puberté ?',
                        'choices' => [
                            ['choice_text' => 'Une augmentation de l’activité hormonale accompagnée de transformations corporelles', 'is_correct' => true],
                            ['choice_text' => 'Une disparition complète des hormones sexuelles', 'is_correct' => false],
                            ['choice_text' => 'Un arrêt définitif de toute croissance dès le premier jour', 'is_correct' => false],
                            ['choice_text' => 'Une suppression de la maturation cérébrale', 'is_correct' => false],
                        ],
                        'explanation' => 'La puberté correspond à une période de maturation hormonale et reproductive accompagnée de changements physiques et physiologiques.'
                    ],
                    [
                        'question' => 'Quel rôle la progestérone joue-t-elle notamment après l’ovulation ?',
                        'choices' => [
                            ['choice_text' => 'Elle contribue au maintien d’un endomètre favorable à une éventuelle implantation', 'is_correct' => true],
                            ['choice_text' => 'Elle oxygène directement les muscles', 'is_correct' => false],
                            ['choice_text' => 'Elle produit les globules rouges dans les poumons', 'is_correct' => false],
                            ['choice_text' => 'Elle remplace les neurotransmetteurs', 'is_correct' => false],
                        ],
                        'explanation' => 'Après l’ovulation, la progestérone produite par le corps jaune contribue à préparer et maintenir l’endomètre en vue d’une éventuelle grossesse.'
                    ],
                    [
                        'question' => 'Quelle structure produit normalement les spermatozoïdes chez l’homme ?',
                        'choices' => [
                            ['choice_text' => 'Les testicules', 'is_correct' => true],
                            ['choice_text' => 'La prostate uniquement', 'is_correct' => false],
                            ['choice_text' => 'La vessie', 'is_correct' => false],
                            ['choice_text' => 'Le foie', 'is_correct' => false],
                        ],
                        'explanation' => 'La spermatogenèse se déroule dans les testicules, au niveau des tubes séminifères. Les spermatozoïdes mûrissent ensuite dans l’épididyme.'
                    ],
                    [
                        'question' => 'Pourquoi le placenta est-il important pendant la grossesse ?',
                        'choices' => [
                            ['choice_text' => 'Il participe aux échanges entre la mère et le fœtus et produit aussi des hormones', 'is_correct' => true],
                            ['choice_text' => 'Il remplace définitivement les poumons de la mère', 'is_correct' => false],
                            ['choice_text' => 'Il fabrique tous les os du père', 'is_correct' => false],
                            ['choice_text' => 'Il empêche tout passage de substances entre les deux circulations', 'is_correct' => false],
                        ],
                        'explanation' => 'Le placenta constitue une interface d’échanges. Il permet notamment les transferts de gaz, de nutriments et de déchets entre les circulations maternelle et fœtale, tout en participant à la production hormonale.'
                    ],
                    [
                        'question' => 'Quelle hormone stimule principalement la production de lait après l’accouchement ?',
                        'choices' => [
                            ['choice_text' => 'La prolactine', 'is_correct' => true],
                            ['choice_text' => 'L’insuline', 'is_correct' => false],
                            ['choice_text' => 'La thyroxine uniquement', 'is_correct' => false],
                            ['choice_text' => 'La mélatonine', 'is_correct' => false],
                        ],
                        'explanation' => 'La prolactine stimule la production de lait par les glandes mammaires. L’ocytocine participe davantage à l’éjection du lait.'
                    ],
                    [
                        'question' => 'Quel énoncé décrit correctement l’ocytocine ?',
                        'choices' => [
                            ['choice_text' => 'Elle participe notamment aux contractions utérines et à l’éjection du lait', 'is_correct' => true],
                            ['choice_text' => 'Elle filtre les déchets dans les reins', 'is_correct' => false],
                            ['choice_text' => 'Elle transporte l’oxygène dans les globules rouges', 'is_correct' => false],
                            ['choice_text' => 'Elle digère les glucides dans la bouche', 'is_correct' => false],
                        ],
                        'explanation' => 'L’ocytocine intervient notamment dans les contractions de l’utérus et dans l’éjection du lait lors de l’allaitement.'
                    ],
                    [
                        'question' => 'Un enfant passe progressivement de 20 kg à 24 kg. Quelle augmentation relative de masse cela représente-t-il par rapport à la masse initiale ?',
                        'choices' => [
                            ['choice_text' => '20 %', 'is_correct' => true],
                            ['choice_text' => '4 %', 'is_correct' => false],
                            ['choice_text' => '16 %', 'is_correct' => false],
                            ['choice_text' => '24 %', 'is_correct' => false],
                        ],
                        'explanation' => 'L’augmentation est de 4 kg. Rapportée à 20 kg : 4 ÷ 20 = 0,20, soit 20 %.'
                    ],
                    [
                        'question' => 'Quel facteur joue un rôle important dans la croissance et le développement pendant l’enfance ?',
                        'choices' => [
                            ['choice_text' => 'Un ensemble de facteurs comprenant les hormones, la nutrition et les conditions de santé', 'is_correct' => true],
                            ['choice_text' => 'La couleur des yeux seulement', 'is_correct' => false],
                            ['choice_text' => 'La fréquence des clignements uniquement', 'is_correct' => false],
                            ['choice_text' => 'La température de la pièce uniquement', 'is_correct' => false],
                        ],
                        'explanation' => 'La croissance résulte de l’interaction de nombreux facteurs biologiques et environnementaux : hormones de croissance, nutrition, génétique, santé générale et conditions de vie.'
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
