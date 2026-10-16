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
                        'question' => 'Un élève demande à quoi sert la physiologie. Que peut-on lui répondre ?',
                        'choices' => [
                            ['choice_text' => 'Elle décrit la forme et la position des os du squelette', 'is_correct' => false],
                            ['choice_text' => 'Elle étudie comment le corps et ses organes fonctionnent', 'is_correct' => true],
                            ['choice_text' => 'Elle classe les êtres vivants selon leur habitat naturel', 'is_correct' => false],
                            ['choice_text' => 'Elle recense les maladies infectieuses les plus connues', 'is_correct' => false],
                        ],
                        'explanation' => 'La physiologie étudie le fonctionnement du corps : comment les organes et les systèmes travaillent pour que l’on vive et que l’on s’adapte.',
                    ],
                    [
                        'question' => 'Un élève a une température corporelle proche de 37 °C malgré une journée chaude. Quel concept cela illustre-t-il ?',
                        'choices' => [
                            ['choice_text' => 'La coagulation du sang', 'is_correct' => false],
                            ['choice_text' => 'La digestion mécanique', 'is_correct' => false],
                            ['choice_text' => 'La croissance osseuse', 'is_correct' => false],
                            ['choice_text' => 'L’homéostasie', 'is_correct' => true],
                        ],
                        'explanation' => 'L’homéostasie est le maintien d’un milieu intérieur stable, comme une température d’environ 37 °C, grâce à des mécanismes de régulation.',
                    ],
                    [
                        'question' => 'Il fait très froid dehors. Quelle réaction du corps aide à produire de la chaleur ?',
                        'choices' => [
                            ['choice_text' => 'Les frissons, qui produisent de la chaleur', 'is_correct' => true],
                            ['choice_text' => 'La transpiration abondante sur tout le corps', 'is_correct' => false],
                            ['choice_text' => 'La dilatation des vaisseaux de la peau', 'is_correct' => false],
                            ['choice_text' => 'Le relâchement complet des muscles', 'is_correct' => false],
                        ],
                        'explanation' => 'Les frissons sont des contractions musculaires rapides qui produisent de la chaleur et aident à garder une température stable.',
                    ],
                    [
                        'question' => 'Dans le corps, quelle structure détecte une variation, comme une baisse de température ?',
                        'choices' => [
                            ['choice_text' => 'Une fibre musculaire', 'is_correct' => false],
                            ['choice_text' => 'Une glande sudoripare', 'is_correct' => false],
                            ['choice_text' => 'Un récepteur sensoriel', 'is_correct' => true],
                            ['choice_text' => 'Un globule rouge', 'is_correct' => false],
                        ],
                        'explanation' => 'Les récepteurs détectent les changements et envoient l’information aux centres nerveux, qui déclenchent une réponse adaptée.',
                    ],
                    [
                        'question' => 'Quel rôle fait du sang un milieu de transport essentiel ?',
                        'choices' => [
                            ['choice_text' => 'Il fabrique et répare les os et les muscles du squelette', 'is_correct' => false],
                            ['choice_text' => 'Il digère les aliments avant leur passage à l’intestin', 'is_correct' => false],
                            ['choice_text' => 'Il transporte l’oxygène, les nutriments et les hormones', 'is_correct' => true],
                            ['choice_text' => 'Il remplace le travail des neurones dans le cerveau', 'is_correct' => false],
                        ],
                        'explanation' => 'Le sang relie les organes entre eux : il distribue l’oxygène, les nutriments et les hormones, et emporte une partie des déchets.',
                    ],
                    [
                        'question' => 'Qu’appelle-t-on une fonction physiologique ?',
                        'choices' => [
                            ['choice_text' => 'Le travail d’un organe dans le corps', 'is_correct' => true],
                            ['choice_text' => 'La couleur et l’aspect d’un organe', 'is_correct' => false],
                            ['choice_text' => 'Le nom d’une maladie fréquente', 'is_correct' => false],
                            ['choice_text' => 'La taille moyenne d’un organe adulte', 'is_correct' => false],
                        ],
                        'explanation' => 'Une fonction physiologique décrit ce que fait un organe ou un système, comme respirer, filtrer le sang ou digérer.',
                    ],
                    [
                        'question' => 'Après un sprint, Karim respire encore très vite. Que fait son corps ?',
                        'choices' => [
                            ['choice_text' => 'Ses poumons ont gardé un volume plus grand', 'is_correct' => false],
                            ['choice_text' => 'Son système nerveux s’est mis à l’arrêt', 'is_correct' => false],
                            ['choice_text' => 'Son sang ne transporte plus de dioxyde de carbone', 'is_correct' => false],
                            ['choice_text' => 'Il ajuste encore l’apport d’oxygène aux muscles', 'is_correct' => true],
                        ],
                        'explanation' => 'Après l’effort, les muscles réclament encore de l’oxygène et produisent du dioxyde de carbone : la respiration reste rapide avant de revenir au calme.',
                    ],
                    [
                        'question' => 'Quelle phrase distingue l’anatomie de la physiologie ?',
                        'choices' => [
                            ['choice_text' => 'L’anatomie s’intéresse au fonctionnement, la physiologie à la forme', 'is_correct' => false],
                            ['choice_text' => 'L’anatomie décrit les structures, la physiologie leur fonctionnement', 'is_correct' => true],
                            ['choice_text' => 'L’anatomie étudie les cellules du corps, la physiologie les os du squelette', 'is_correct' => false],
                            ['choice_text' => 'Les deux sciences étudient la même chose sous deux noms', 'is_correct' => false],
                        ],
                        'explanation' => 'L’anatomie décrit les structures du corps, la physiologie explique comment elles fonctionnent ; les deux se complètent.',
                    ],
                    [
                        'question' => 'Un thermostat coupe le chauffage quand la pièce est assez chaude. Quel mécanisme du corps joue un rôle comparable ?',
                        'choices' => [
                            ['choice_text' => 'L’emballement d’une valeur qui s’éloigne de la normale', 'is_correct' => false],
                            ['choice_text' => 'L’absence de réaction face au changement', 'is_correct' => false],
                            ['choice_text' => 'La rétroaction négative, qui corrige l’écart', 'is_correct' => true],
                            ['choice_text' => 'La multiplication continue des cellules', 'is_correct' => false],
                        ],
                        'explanation' => 'Comme un thermostat, la rétroaction négative corrige un écart pour ramener une valeur, comme la température ou la glycémie, vers sa référence.',
                    ],
                    [
                        'question' => 'Un médecin veut savoir si un médicament agit sur le cœur. Que peut-il mesurer ?',
                        'choices' => [
                            ['choice_text' => 'Son pouls avant et après la prise', 'is_correct' => true],
                            ['choice_text' => 'La longueur de l’os de sa cuisse', 'is_correct' => false],
                            ['choice_text' => 'Le nombre de côtes de son thorax', 'is_correct' => false],
                            ['choice_text' => 'La couleur de ses yeux et de ses cheveux', 'is_correct' => false],
                        ],
                        'explanation' => 'La physiologie s’appuie sur des mesures de fonctions, comme la fréquence cardiaque, la pression artérielle ou le taux de sucre dans le sang.',
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
                            ['choice_text' => 'Le globule rouge', 'is_correct' => false],
                            ['choice_text' => 'La cellule du foie', 'is_correct' => false],
                            ['choice_text' => 'Le neurone', 'is_correct' => true],
                            ['choice_text' => 'L’adipocyte', 'is_correct' => false],
                        ],
                        'explanation' => 'Le neurone reçoit, traite et transmet des signaux nerveux.',
                    ],
                    [
                        'question' => 'Quel est le rôle des récepteurs sensoriels ?',
                        'choices' => [
                            ['choice_text' => 'Détecter un stimulus et prévenir le cerveau', 'is_correct' => true],
                            ['choice_text' => 'Commander la contraction des muscles', 'is_correct' => false],
                            ['choice_text' => 'Stocker les souvenirs dans le cerveau', 'is_correct' => false],
                            ['choice_text' => 'Libérer des hormones dans le sang', 'is_correct' => false],
                        ],
                        'explanation' => 'Les récepteurs sensoriels repèrent la lumière, la pression, la chaleur ou certaines molécules et transmettent l’information au système nerveux.',
                    ],
                    [
                        'question' => 'Quand on retire vivement la main d’un objet brûlant, de quel type de réponse s’agit-il ?',
                        'choices' => [
                            ['choice_text' => 'Un mouvement volontaire', 'is_correct' => false],
                            ['choice_text' => 'Un réflexe automatique', 'is_correct' => true],
                            ['choice_text' => 'Une réaction hormonale', 'is_correct' => false],
                            ['choice_text' => 'Une habitude acquise', 'is_correct' => false],
                        ],
                        'explanation' => 'Le réflexe de retrait est une réponse rapide et automatique à un stimulus qui menace le corps.',
                    ],
                    [
                        'question' => 'À quoi sert la rapidité de la transmission nerveuse ?',
                        'choices' => [
                            ['choice_text' => 'À stocker de l’énergie dans les cellules musculaires', 'is_correct' => false],
                            ['choice_text' => 'À mieux digérer les aliments gras ou sucrés', 'is_correct' => false],
                            ['choice_text' => 'À fabriquer davantage de globules rouges', 'is_correct' => false],
                            ['choice_text' => 'À réagir vite aux changements du milieu', 'is_correct' => true],
                        ],
                        'explanation' => 'Le système nerveux permet des réponses rapides grâce à la transmission des signaux entre les récepteurs, les centres nerveux et les muscles.',
                    ],
                    [
                        'question' => 'Quel organe joue le rôle de centre de commande du système nerveux central ?',
                        'choices' => [
                            ['choice_text' => 'Le cerveau, dans le crâne', 'is_correct' => true],
                            ['choice_text' => 'Le cœur, dans le thorax', 'is_correct' => false],
                            ['choice_text' => 'Le nerf sciatique du bassin', 'is_correct' => false],
                            ['choice_text' => 'La moelle osseuse des os', 'is_correct' => false],
                        ],
                        'explanation' => 'Avec la moelle épinière, le cerveau forme le système nerveux central ; il traite les informations et coordonne les réponses.',
                    ],
                    [
                        'question' => 'Salma pose la main sur un radiateur tiède. Quelle information est sensorielle ?',
                        'choices' => [
                            ['choice_text' => 'La contraction du biceps pour retirer la main', 'is_correct' => false],
                            ['choice_text' => 'La fabrication de la bile par le foie', 'is_correct' => false],
                            ['choice_text' => 'La production de globules rouges', 'is_correct' => false],
                            ['choice_text' => 'La sensation de chaleur sur la peau', 'is_correct' => true],
                        ],
                        'explanation' => 'Une sensation comme la chaleur vient de récepteurs de la peau qui envoient leur signal au cerveau.',
                    ],
                    [
                        'question' => 'Un étudiant voit soudain une balle arriver vers son visage. Quelle séquence est la plus logique ?',
                        'choices' => [
                            ['choice_text' => 'Commande des muscles → détection visuelle → traitement nerveux', 'is_correct' => false],
                            ['choice_text' => 'Détection visuelle → traitement nerveux → commande des muscles', 'is_correct' => true],
                            ['choice_text' => 'Traitement nerveux → commande des muscles → détection visuelle', 'is_correct' => false],
                            ['choice_text' => 'Détection visuelle → commande des muscles → traitement nerveux', 'is_correct' => false],
                        ],
                        'explanation' => 'L’œil détecte la balle, le système nerveux analyse l’information, puis il envoie la commande aux muscles pour esquiver.',
                    ],
                    [
                        'question' => 'Comment un neurone passe-t-il le message au neurone suivant ?',
                        'choices' => [
                            ['choice_text' => 'En libérant des hormones dans le sang', 'is_correct' => false],
                            ['choice_text' => 'En fusionnant avec le neurone voisin', 'is_correct' => false],
                            ['choice_text' => 'En libérant des messagers chimiques', 'is_correct' => true],
                            ['choice_text' => 'En libérant des enzymes digestives', 'is_correct' => false],
                        ],
                        'explanation' => 'Au contact d’un autre neurone, la cellule libère des neurotransmetteurs, des messagers chimiques qui transmettent le signal.',
                    ],
                    [
                        'question' => 'Quelle structure, logée dans la colonne vertébrale, relaie les messages entre le cerveau et le corps ?',
                        'choices' => [
                            ['choice_text' => 'Le cervelet', 'is_correct' => false],
                            ['choice_text' => 'La moelle épinière', 'is_correct' => true],
                            ['choice_text' => 'Le nerf optique', 'is_correct' => false],
                            ['choice_text' => 'Le tronc cérébral', 'is_correct' => false],
                        ],
                        'explanation' => 'La moelle épinière, protégée par la colonne vertébrale, transmet les messages nerveux entre le cerveau et le reste du corps.',
                    ],
                    [
                        'question' => 'Quel énoncé est correct à propos du système nerveux autonome ?',
                        'choices' => [
                            ['choice_text' => 'Il commande les mouvements voulus des doigts', 'is_correct' => false],
                            ['choice_text' => 'Il s’arrête pendant l’éveil et reprend la nuit', 'is_correct' => false],
                            ['choice_text' => 'Il transmet les sensations du goût et de l’odorat au cerveau', 'is_correct' => false],
                            ['choice_text' => 'Il règle sans qu’on y pense le cœur et la digestion', 'is_correct' => true],
                        ],
                        'explanation' => 'Le système nerveux autonome contrôle de façon involontaire des fonctions internes comme le rythme du cœur, la digestion et la respiration.',
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
                            ['choice_text' => 'Un messager chimique libéré dans le sang', 'is_correct' => true],
                            ['choice_text' => 'Une cellule du sang qui transporte l’oxygène', 'is_correct' => false],
                            ['choice_text' => 'Une enzyme qui digère les aliments dans l’estomac', 'is_correct' => false],
                            ['choice_text' => 'Un nutriment que le corps tire des aliments', 'is_correct' => false],
                        ],
                        'explanation' => 'Une hormone est un messager chimique fabriqué par une glande ; elle agit sur les cellules qui possèdent le bon récepteur.',
                    ],
                    [
                        'question' => 'Quelle glande du cerveau dirige plusieurs autres glandes endocrines ?',
                        'choices' => [
                            ['choice_text' => 'La thyroïde', 'is_correct' => false],
                            ['choice_text' => 'Le pancréas', 'is_correct' => false],
                            ['choice_text' => 'L’hypophyse', 'is_correct' => true],
                            ['choice_text' => 'La rate', 'is_correct' => false],
                        ],
                        'explanation' => 'L’hypophyse, petite glande à la base du cerveau, sécrète des hormones qui commandent la thyroïde, les surrénales et d’autres glandes.',
                    ],
                    [
                        'question' => 'Quelle hormone aide à faire baisser le taux de sucre dans le sang (la glycémie) après un repas ?',
                        'choices' => [
                            ['choice_text' => 'L’adrénaline', 'is_correct' => false],
                            ['choice_text' => 'La mélatonine', 'is_correct' => false],
                            ['choice_text' => 'Le glucagon', 'is_correct' => false],
                            ['choice_text' => 'L’insuline', 'is_correct' => true],
                        ],
                        'explanation' => 'Après un repas, l’insuline aide le glucose à entrer dans les cellules et à être stocké, ce qui fait baisser la glycémie.',
                    ],
                    [
                        'question' => 'Une hormone circule dans tout le corps, mais seules certaines cellules répondent. Comment l’expliquer ?',
                        'choices' => [
                            ['choice_text' => 'Les hormones restent près de la glande qui les fabrique', 'is_correct' => false],
                            ['choice_text' => 'Les cellules cibles possèdent le récepteur adapté', 'is_correct' => true],
                            ['choice_text' => 'Les hormones se dissolvent avant d’atteindre les organes', 'is_correct' => false],
                            ['choice_text' => 'Les hormones sont filtrées par les reins avant d’arriver', 'is_correct' => false],
                        ],
                        'explanation' => 'Seules les cellules cibles portent le récepteur qui reconnaît l’hormone ; les autres cellules ne répondent pas directement.',
                    ],
                    [
                        'question' => 'Une personne ressent une forte émotion et son cœur accélère. Quelle hormone est associée à cette réponse rapide au stress ?',
                        'choices' => [
                            ['choice_text' => 'L’insuline', 'is_correct' => false],
                            ['choice_text' => 'La thyroxine', 'is_correct' => false],
                            ['choice_text' => 'La mélatonine', 'is_correct' => false],
                            ['choice_text' => 'L’adrénaline', 'is_correct' => true],
                        ],
                        'explanation' => 'L’adrénaline, libérée par les glandes surrénales lors d’un stress, accélère le cœur et prépare le corps à agir vite.',
                    ],
                    [
                        'question' => 'Quelle phrase compare correctement la communication nerveuse et la communication hormonale ?',
                        'choices' => [
                            ['choice_text' => 'Le nerf agit vite, l’hormone agit plus longtemps', 'is_correct' => true],
                            ['choice_text' => 'Les hormones agissent plus vite que les nerfs', 'is_correct' => false],
                            ['choice_text' => 'Le nerf agit lentement, l’hormone agit immédiatement', 'is_correct' => false],
                            ['choice_text' => 'Nerfs et hormones agissent à la même vitesse', 'is_correct' => false],
                        ],
                        'explanation' => 'Les signaux nerveux sont très rapides ; les hormones agissent plus lentement, mais leurs effets durent plus longtemps.',
                    ],
                    [
                        'question' => 'Quelle glande située à la base du cou produit la thyroxine, hormone qui règle la dépense d’énergie ?',
                        'choices' => [
                            ['choice_text' => 'Les surrénales', 'is_correct' => false],
                            ['choice_text' => 'Les glandes salivaires', 'is_correct' => false],
                            ['choice_text' => 'La thyroïde', 'is_correct' => true],
                            ['choice_text' => 'Les amygdales', 'is_correct' => false],
                        ],
                        'explanation' => 'La thyroïde, à la base du cou, fabrique des hormones qui règlent la dépense d’énergie du corps.',
                    ],
                    [
                        'question' => 'Une personne manque durablement d’insuline. Que devient son taux de sucre dans le sang ?',
                        'choices' => [
                            ['choice_text' => 'Il baisse fortement après chaque repas', 'is_correct' => false],
                            ['choice_text' => 'Il a tendance à monter', 'is_correct' => true],
                            ['choice_text' => 'Il reste normal grâce à l’adrénaline', 'is_correct' => false],
                            ['choice_text' => 'Il n’est plus mesurable dans le sang', 'is_correct' => false],
                        ],
                        'explanation' => 'Sans assez d’insuline, le glucose entre mal dans les cellules et reste dans le sang : la glycémie monte.',
                    ],
                    [
                        'question' => 'Quelle hormone, libérée surtout la nuit, aide à régler le sommeil ?',
                        'choices' => [
                            ['choice_text' => 'La mélatonine', 'is_correct' => true],
                            ['choice_text' => 'L’adrénaline', 'is_correct' => false],
                            ['choice_text' => 'L’insuline', 'is_correct' => false],
                            ['choice_text' => 'La thyroxine', 'is_correct' => false],
                        ],
                        'explanation' => 'La mélatonine est libérée quand la lumière baisse et signale au corps que la nuit arrive.',
                    ],
                    [
                        'question' => 'Par quelle voie les hormones rejoignent-elles leurs cellules cibles ?',
                        'choices' => [
                            ['choice_text' => 'Par les nerfs de la moelle épinière', 'is_correct' => false],
                            ['choice_text' => 'Par le tube digestif', 'is_correct' => false],
                            ['choice_text' => 'Par la circulation du sang', 'is_correct' => true],
                            ['choice_text' => 'Par les voies respiratoires', 'is_correct' => false],
                        ],
                        'explanation' => 'Les hormones passent dans le sang, qui les distribue dans tout le corps jusqu’aux cellules cibles.',
                    ],
                ],
            ],
            [
                'title' => 'Respiration et échanges gazeux',
                'description' => 'Explorer la ventilation, les échanges d’oxygène et de dioxyde de carbone et leur relation avec les besoins des cellules.',
                'settings' => ['duration' => 20, 'passing_score' => 60],
                'questions' => [
                    [
                        'question' => 'Quel gaz de l’air nos cellules utilisent-elles pour produire de l’énergie ?',
                        'choices' => [
                            ['choice_text' => 'Le dioxyde de carbone', 'is_correct' => false],
                            ['choice_text' => 'L’azote de l’air', 'is_correct' => false],
                            ['choice_text' => 'L’argon de l’air', 'is_correct' => false],
                            ['choice_text' => 'L’oxygène de l’air', 'is_correct' => true],
                        ],
                        'explanation' => 'L’oxygène inspiré passe des alvéoles dans le sang, qui l’apporte aux cellules pour produire de l’énergie.',
                    ],
                    [
                        'question' => 'Où l’air et le sang échangent-ils leurs gaz dans les poumons ?',
                        'choices' => [
                            ['choice_text' => 'Dans la trachée', 'is_correct' => false],
                            ['choice_text' => 'Dans les alvéoles pulmonaires', 'is_correct' => true],
                            ['choice_text' => 'Dans les bronches', 'is_correct' => false],
                            ['choice_text' => 'Dans le larynx', 'is_correct' => false],
                        ],
                        'explanation' => 'Les alvéoles sont de petits sacs entourés de capillaires ; leur fine paroi et leur grande surface facilitent les échanges d’oxygène et de dioxyde de carbone.',
                    ],
                    [
                        'question' => 'Quel muscle joue le rôle principal quand on inspire calmement ?',
                        'choices' => [
                            ['choice_text' => 'Le diaphragme', 'is_correct' => true],
                            ['choice_text' => 'Le grand pectoral', 'is_correct' => false],
                            ['choice_text' => 'Le trapèze', 'is_correct' => false],
                            ['choice_text' => 'Le biceps brachial', 'is_correct' => false],
                        ],
                        'explanation' => 'Pendant l’inspiration calme, le diaphragme se contracte et s’abaisse, ce qui agrandit la cage thoracique et fait entrer l’air.',
                    ],
                    [
                        'question' => 'Pendant un match, Youssef respire de plus en plus vite. Que cherche son corps ?',
                        'choices' => [
                            ['choice_text' => 'Réduire sa production d’énergie pendant l’effort physique', 'is_correct' => false],
                            ['choice_text' => 'Refroidir son squelette par la respiration', 'is_correct' => false],
                            ['choice_text' => 'Apporter plus d’oxygène et évacuer le dioxyde de carbone', 'is_correct' => true],
                            ['choice_text' => 'Ralentir la circulation du sang dans les muscles', 'is_correct' => false],
                        ],
                        'explanation' => 'Les muscles actifs consomment plus d’oxygène et produisent plus de dioxyde de carbone ; respirer plus vite permet de suivre ce rythme.',
                    ],
                    [
                        'question' => 'Quel constituant du sang transporte la plus grande partie de l’oxygène ?',
                        'choices' => [
                            ['choice_text' => 'Les plaquettes de la moelle osseuse', 'is_correct' => false],
                            ['choice_text' => 'L’hémoglobine des globules rouges', 'is_correct' => true],
                            ['choice_text' => 'Les globules blancs du système immunitaire', 'is_correct' => false],
                            ['choice_text' => 'Le glucose dissous dans le plasma', 'is_correct' => false],
                        ],
                        'explanation' => 'L’hémoglobine, présente dans les globules rouges, fixe l’oxygène et le transporte dans le sang.',
                    ],
                    [
                        'question' => 'Léa respire 12 fois par minute et fait entrer 0,5 L d’air à chaque inspiration. Quel volume d’air entre dans ses poumons en une minute ?',
                        'choices' => [
                            ['choice_text' => '12,5 L', 'is_correct' => false],
                            ['choice_text' => '24 L', 'is_correct' => false],
                            ['choice_text' => '0,04 L', 'is_correct' => false],
                            ['choice_text' => '6 L', 'is_correct' => true],
                        ],
                        'explanation' => 'Il suffit de multiplier : 12 inspirations × 0,5 L = 6 L d’air par minute.',
                    ],
                    [
                        'question' => 'Dans les alvéoles, dans quel sens passe le dioxyde de carbone ?',
                        'choices' => [
                            ['choice_text' => 'Du sang vers l’air des alvéoles', 'is_correct' => true],
                            ['choice_text' => 'De l’air des alvéoles vers le sang', 'is_correct' => false],
                            ['choice_text' => 'Du sang vers les cellules des tissus', 'is_correct' => false],
                            ['choice_text' => 'Des bronches vers le cœur', 'is_correct' => false],
                        ],
                        'explanation' => 'Le dioxyde de carbone amené par le sang traverse la paroi des alvéoles et sort avec l’air expiré.',
                    ],
                    [
                        'question' => 'Qu’apporte la paroi très fine des alvéoles ?',
                        'choices' => [
                            ['choice_text' => 'Elle sert à stocker l’air inspiré entre deux souffles', 'is_correct' => false],
                            ['choice_text' => 'Elle protège les poumons des chocs de la cage thoracique', 'is_correct' => false],
                            ['choice_text' => 'Elle raccourcit le trajet des gaz entre air et sang', 'is_correct' => true],
                            ['choice_text' => 'Elle fabrique les globules rouges du sang', 'is_correct' => false],
                        ],
                        'explanation' => 'Plus la paroi est fine, plus l’oxygène et le dioxyde de carbone la traversent vite.',
                    ],
                    [
                        'question' => 'Imane respire très profondément et très vite pendant une minute. Que devient le dioxyde de carbone de son sang ?',
                        'choices' => [
                            ['choice_text' => 'Il se transforme en oxygène dans les poumons', 'is_correct' => false],
                            ['choice_text' => 'Il est produit en plus grande quantité', 'is_correct' => false],
                            ['choice_text' => 'Il reste bloqué dans les capillaires', 'is_correct' => false],
                            ['choice_text' => 'Il est éliminé en plus grande quantité', 'is_correct' => true],
                        ],
                        'explanation' => 'Respirer plus profondément et plus vite évacue davantage de dioxyde de carbone avec l’air expiré.',
                    ],
                    [
                        'question' => 'Quelle phrase relie la respiration et la respiration cellulaire ?',
                        'choices' => [
                            ['choice_text' => 'Les deux expressions désignent le même phénomène', 'is_correct' => false],
                            ['choice_text' => 'Les poumons apportent l’oxygène que les cellules utilisent', 'is_correct' => true],
                            ['choice_text' => 'La respiration cellulaire fait entrer l’air dans les poumons', 'is_correct' => false],
                            ['choice_text' => 'La respiration cellulaire se déroule dans le nez et la gorge', 'is_correct' => false],
                        ],
                        'explanation' => 'La ventilation amène l’oxygène jusqu’au sang ; la respiration cellulaire est la réaction qui utilise cet oxygène dans les cellules pour libérer de l’énergie.',
                    ],
                ],
            ],
            [
                'title' => 'Cœur, circulation et pression artérielle',
                'description' => 'Comprendre la pompe cardiaque, le trajet du sang et les bases de la pression artérielle.',
                'settings' => ['duration' => 20, 'passing_score' => 60],
                'questions' => [
                    [
                        'question' => 'Quel est le rôle du cœur dans la circulation ?',
                        'choices' => [
                            ['choice_text' => 'Fabriquer les globules rouges de l’adulte', 'is_correct' => false],
                            ['choice_text' => 'Pomper le sang dans les vaisseaux', 'is_correct' => true],
                            ['choice_text' => 'Filtrer le sang pour former l’urine', 'is_correct' => false],
                            ['choice_text' => 'Régler le taux de sucre dans le sang', 'is_correct' => false],
                        ],
                        'explanation' => 'Le cœur est une pompe musculaire : ses contractions envoient le sang dans les poumons puis dans le reste du corps.',
                    ],
                    [
                        'question' => 'Quelle cavité du cœur reçoit le sang qui revient du corps ?',
                        'choices' => [
                            ['choice_text' => 'L’oreillette gauche', 'is_correct' => false],
                            ['choice_text' => 'Le ventricule gauche', 'is_correct' => false],
                            ['choice_text' => 'L’oreillette droite', 'is_correct' => true],
                            ['choice_text' => 'Le ventricule droit', 'is_correct' => false],
                        ],
                        'explanation' => 'Le sang qui revient des tissus entre dans l’oreillette droite par les veines caves, puis passe dans le ventricule droit.',
                    ],
                    [
                        'question' => 'Quel côté du cœur envoie le sang pauvre en oxygène vers les poumons ?',
                        'choices' => [
                            ['choice_text' => 'Le côté droit', 'is_correct' => true],
                            ['choice_text' => 'Le côté gauche', 'is_correct' => false],
                            ['choice_text' => 'Les deux côtés ensemble', 'is_correct' => false],
                            ['choice_text' => 'Les valves du cœur', 'is_correct' => false],
                        ],
                        'explanation' => 'Le cœur droit pompe le sang pauvre en oxygène vers les poumons par l’artère pulmonaire ; le cœur gauche envoie le sang oxygéné vers le corps.',
                    ],
                    [
                        'question' => 'Qu’est-ce qui définit une artère ?',
                        'choices' => [
                            ['choice_text' => 'Elle ramène le sang vers le cœur', 'is_correct' => false],
                            ['choice_text' => 'Elle contient du sang riche en oxygène', 'is_correct' => false],
                            ['choice_text' => 'Elle possède une paroi sans muscle', 'is_correct' => false],
                            ['choice_text' => 'Elle emmène le sang loin du cœur', 'is_correct' => true],
                        ],
                        'explanation' => 'Une artère emmène le sang loin du cœur, qu’il soit riche en oxygène, comme dans l’aorte, ou pauvre, comme dans l’artère pulmonaire.',
                    ],
                    [
                        'question' => 'Quel vaisseau permet les échanges de gaz et de nutriments avec les tissus ?',
                        'choices' => [
                            ['choice_text' => 'L’aorte du cœur', 'is_correct' => false],
                            ['choice_text' => 'La veine cave', 'is_correct' => false],
                            ['choice_text' => 'Le capillaire', 'is_correct' => true],
                            ['choice_text' => 'L’artère pulmonaire', 'is_correct' => false],
                        ],
                        'explanation' => 'Les capillaires ont des parois très fines et passent tout près des cellules : c’est là que se font les échanges.',
                    ],
                    [
                        'question' => 'Le cœur de Karim bat 75 fois par minute et éjecte 70 mL de sang à chaque battement. Quel volume de sang pompe-t-il en une minute ?',
                        'choices' => [
                            ['choice_text' => '0,525 L', 'is_correct' => false],
                            ['choice_text' => '5,25 L', 'is_correct' => true],
                            ['choice_text' => '52,5 L', 'is_correct' => false],
                            ['choice_text' => '7,5 L', 'is_correct' => false],
                        ],
                        'explanation' => 'On multiplie : 75 × 70 mL = 5 250 mL, soit 5,25 L de sang par minute.',
                    ],
                    [
                        'question' => 'Que mesure la pression artérielle systolique ?',
                        'choices' => [
                            ['choice_text' => 'La pression la plus basse, quand le cœur se remplit', 'is_correct' => false],
                            ['choice_text' => 'La pression de l’air dans les poumons', 'is_correct' => false],
                            ['choice_text' => 'La pression moyenne du sang dans les veines', 'is_correct' => false],
                            ['choice_text' => 'La pression la plus haute, quand le cœur se contracte', 'is_correct' => true],
                        ],
                        'explanation' => 'La pression systolique est le premier chiffre de la mesure : elle correspond au pic de pression lors de la contraction du cœur.',
                    ],
                    [
                        'question' => 'À quoi servent les valves du cœur ?',
                        'choices' => [
                            ['choice_text' => 'À faire circuler le sang dans le bon sens', 'is_correct' => true],
                            ['choice_text' => 'À filtrer les impuretés du sang qui passe', 'is_correct' => false],
                            ['choice_text' => 'À faire battre le cœur au bon rythme', 'is_correct' => false],
                            ['choice_text' => 'À produire de l’adrénaline', 'is_correct' => false],
                        ],
                        'explanation' => 'Les valves s’ouvrent et se ferment au bon moment pour que le sang ne revienne pas en arrière.',
                    ],
                    [
                        'question' => 'Après quelques minutes de course, le cœur de Salma bat plus vite. À quoi sert cette accélération ?',
                        'choices' => [
                            ['choice_text' => 'À laisser les muscles se reposer', 'is_correct' => false],
                            ['choice_text' => 'À apporter plus de sang et d’oxygène aux muscles', 'is_correct' => true],
                            ['choice_text' => 'À ralentir les échanges avec les tissus', 'is_correct' => false],
                            ['choice_text' => 'À réduire l’apport de sang aux poumons', 'is_correct' => false],
                        ],
                        'explanation' => 'À l’effort, le cœur bat plus vite pour envoyer plus de sang, donc plus d’oxygène et de nutriments, vers les muscles.',
                    ],
                    [
                        'question' => 'Quelle phrase sur les veines est exacte ?',
                        'choices' => [
                            ['choice_text' => 'Elles partent du ventricule gauche vers les organes du corps', 'is_correct' => false],
                            ['choice_text' => 'Elles emmènent le sang loin du cœur vers les tissus', 'is_correct' => false],
                            ['choice_text' => 'Elles ramènent le sang vers le cœur, certaines ont des valvules', 'is_correct' => true],
                            ['choice_text' => 'Elles échangent les gaz avec les tissus voisins', 'is_correct' => false],
                        ],
                        'explanation' => 'Les veines conduisent le sang vers le cœur ; dans les membres, des valvules empêchent le sang de redescendre.',
                    ],
                ],
            ],
            [
                'title' => 'Digestion, absorption et nutrition',
                'description' => 'Étudier comment le tube digestif transforme les aliments et permet l’absorption des nutriments.',
                'settings' => ['duration' => 20, 'passing_score' => 65],
                'questions' => [
                    [
                        'question' => 'À quoi sert le système digestif ?',
                        'choices' => [
                            ['choice_text' => 'À filtrer le sang et à fabriquer l’urine', 'is_correct' => false],
                            ['choice_text' => 'À faire circuler l’air jusqu’aux poumons', 'is_correct' => false],
                            ['choice_text' => 'À transmettre les messages nerveux', 'is_correct' => false],
                            ['choice_text' => 'À transformer et absorber les aliments', 'is_correct' => true],
                        ],
                        'explanation' => 'Le tube digestif décompose les aliments en molécules plus petites que le corps peut absorber.',
                    ],
                    [
                        'question' => 'Où commence la digestion des glucides, comme le pain ou le riz ?',
                        'choices' => [
                            ['choice_text' => 'Dans la bouche, avec la salive', 'is_correct' => true],
                            ['choice_text' => 'Dans l’estomac, avec l’acide', 'is_correct' => false],
                            ['choice_text' => 'Dans le gros intestin', 'is_correct' => false],
                            ['choice_text' => 'Dans l’œsophage', 'is_correct' => false],
                        ],
                        'explanation' => 'La salive contient une enzyme, l’amylase, qui commence à découper l’amidon dès la bouche.',
                    ],
                    [
                        'question' => 'Quel organe fabrique la bile ?',
                        'choices' => [
                            ['choice_text' => 'Le pancréas', 'is_correct' => false],
                            ['choice_text' => 'L’estomac', 'is_correct' => false],
                            ['choice_text' => 'Le foie', 'is_correct' => true],
                            ['choice_text' => 'Le côlon', 'is_correct' => false],
                        ],
                        'explanation' => 'Le foie fabrique la bile ; la vésicule biliaire la stocke avant qu’elle soit libérée dans l’intestin grêle.',
                    ],
                    [
                        'question' => 'Qu’est-ce qui rend l’intestin grêle efficace pour absorber les nutriments ?',
                        'choices' => [
                            ['choice_text' => 'Sa paroi épaisse et imperméable à l’eau', 'is_correct' => false],
                            ['choice_text' => 'Sa grande surface grâce aux villosités', 'is_correct' => true],
                            ['choice_text' => 'Sa forte production d’acide chlorhydrique', 'is_correct' => false],
                            ['choice_text' => 'Sa position tout près du foie et du cœur', 'is_correct' => false],
                        ],
                        'explanation' => 'Les replis et les villosités multiplient la surface de contact, ce qui facilite le passage des nutriments vers le sang.',
                    ],
                    [
                        'question' => 'Que fait l’estomac des aliments ?',
                        'choices' => [
                            ['choice_text' => 'Il les brasse et commence à digérer les protéines', 'is_correct' => true],
                            ['choice_text' => 'Il absorbe l’essentiel des nutriments dans le sang', 'is_correct' => false],
                            ['choice_text' => 'Il fabrique la bile qui digère les graisses', 'is_correct' => false],
                            ['choice_text' => 'Il retire l’eau en excès pour fabriquer l’urine', 'is_correct' => false],
                        ],
                        'explanation' => 'L’estomac brasse les aliments avec un suc acide ; il y commence la digestion des protéines.',
                    ],
                    [
                        'question' => 'Les grosses molécules des aliments doivent être coupées en petites avant d’être absorbées. Comment appelle-t-on ce processus ?',
                        'choices' => [
                            ['choice_text' => 'La digestion mécanique', 'is_correct' => false],
                            ['choice_text' => 'L’absorption intestinale', 'is_correct' => false],
                            ['choice_text' => 'La défécation', 'is_correct' => false],
                            ['choice_text' => 'La digestion chimique', 'is_correct' => true],
                        ],
                        'explanation' => 'La digestion chimique utilise des enzymes pour couper les grosses molécules en petites unités que l’intestin peut absorber.',
                    ],
                    [
                        'question' => 'Quel nutriment est une source d’énergie rapide pour les cellules ?',
                        'choices' => [
                            ['choice_text' => 'Le calcium', 'is_correct' => false],
                            ['choice_text' => 'Le glucose', 'is_correct' => true],
                            ['choice_text' => 'Le fer', 'is_correct' => false],
                            ['choice_text' => 'L’urée', 'is_correct' => false],
                        ],
                        'explanation' => 'Le glucose, un sucre issu des glucides, est utilisé par presque toutes les cellules pour produire de l’énergie.',
                    ],
                    [
                        'question' => 'Quel organe fabrique de nombreuses enzymes digestives libérées dans l’intestin grêle ?',
                        'choices' => [
                            ['choice_text' => 'La rate', 'is_correct' => false],
                            ['choice_text' => 'Le côlon', 'is_correct' => false],
                            ['choice_text' => 'Le pancréas', 'is_correct' => true],
                            ['choice_text' => 'L’estomac', 'is_correct' => false],
                        ],
                        'explanation' => 'Le pancréas libère dans le duodénum des enzymes qui digèrent les glucides, les graisses et les protéines.',
                    ],
                    [
                        'question' => 'Les fibres des légumes traversent le tube digestif sans être digérées. Comment l’expliquer ?',
                        'choices' => [
                            ['choice_text' => 'Elles sont absorbées dès la bouche', 'is_correct' => false],
                            ['choice_text' => 'Elles sont détruites par la bile avant l’intestin', 'is_correct' => false],
                            ['choice_text' => 'Elles sont transformées en protéines dans l’estomac', 'is_correct' => false],
                            ['choice_text' => 'Nos enzymes ne savent pas les découper', 'is_correct' => true],
                        ],
                        'explanation' => 'Nos enzymes ne coupent pas la cellulose des fibres ; une partie est fermentée par les bactéries de l’intestin.',
                    ],
                    [
                        'question' => 'Après un repas, où passent les nutriments absorbés par l’intestin ?',
                        'choices' => [
                            ['choice_text' => 'Dans le sang et dans la lymphe', 'is_correct' => true],
                            ['choice_text' => 'Dans les alvéoles des poumons', 'is_correct' => false],
                            ['choice_text' => 'Dans le canal de l’urètre', 'is_correct' => false],
                            ['choice_text' => 'Dans le liquide des articulations', 'is_correct' => false],
                        ],
                        'explanation' => 'Les nutriments rejoignent les capillaires sanguins ; une grande partie des graisses passe d’abord par les vaisseaux lymphatiques.',
                    ],
                ],
            ],
            [
                'title' => 'Reins, eau et équilibre interne',
                'description' => 'Comprendre comment les reins régulent l’eau, les ions et les déchets et comment l’organisme maintient son équilibre hydrique.',
                'settings' => ['duration' => 25, 'passing_score' => 65],
                'questions' => [
                    [
                        'question' => 'Quel est le rôle des reins dans l’élimination des déchets ?',
                        'choices' => [
                            ['choice_text' => 'Éliminer le dioxyde de carbone par l’expiration', 'is_correct' => false],
                            ['choice_text' => 'Fabriquer la bile qui évacue des déchets', 'is_correct' => false],
                            ['choice_text' => 'Filtrer le sang pour former l’urine', 'is_correct' => true],
                            ['choice_text' => 'Digérer les déchets de l’intestin', 'is_correct' => false],
                        ],
                        'explanation' => 'Les reins filtrent le sang, puis ajustent le liquide filtré pour former l’urine qui emporte les déchets.',
                    ],
                    [
                        'question' => 'Quel déchet azoté est éliminé dans l’urine ?',
                        'choices' => [
                            ['choice_text' => 'Le glucose', 'is_correct' => false],
                            ['choice_text' => 'L’urée', 'is_correct' => true],
                            ['choice_text' => 'Le glycogène', 'is_correct' => false],
                            ['choice_text' => 'Le collagène', 'is_correct' => false],
                        ],
                        'explanation' => 'L’urée vient de la dégradation des protéines ; le sang l’amène aux reins, qui l’éliminent dans l’urine.',
                    ],
                    [
                        'question' => 'Après une journée à transpirer sans boire assez, que font les reins de Hamza ?',
                        'choices' => [
                            ['choice_text' => 'Ils produisent une urine plus abondante et diluée', 'is_correct' => false],
                            ['choice_text' => 'Ils arrêtent de filtrer le sang', 'is_correct' => false],
                            ['choice_text' => 'Ils transforment l’eau en sels minéraux', 'is_correct' => false],
                            ['choice_text' => 'Ils gardent l’eau et concentrent l’urine', 'is_correct' => true],
                        ],
                        'explanation' => 'En cas de manque d’eau, les reins en conservent davantage : l’urine devient plus concentrée et moins abondante.',
                    ],
                    [
                        'question' => 'Quelle hormone dit aux reins de garder l’eau ?',
                        'choices' => [
                            ['choice_text' => 'L’ADH (antidiurétique)', 'is_correct' => true],
                            ['choice_text' => 'L’insuline du pancréas', 'is_correct' => false],
                            ['choice_text' => 'L’adrénaline des surrénales', 'is_correct' => false],
                            ['choice_text' => 'La thyroxine de la thyroïde', 'is_correct' => false],
                        ],
                        'explanation' => 'L’ADH signale aux reins de réabsorber davantage d’eau, ce qui limite les pertes dans l’urine.',
                    ],
                    [
                        'question' => 'Hamza trouve son urine jaune foncé après une journée sans boire. Que cela indique-t-il ?',
                        'choices' => [
                            ['choice_text' => 'Qu’elle est très diluée', 'is_correct' => false],
                            ['choice_text' => 'Qu’elle est concentrée, par manque d’eau', 'is_correct' => true],
                            ['choice_text' => 'Qu’il a bu trop d’eau', 'is_correct' => false],
                            ['choice_text' => 'Que ses reins ont arrêté de fonctionner', 'is_correct' => false],
                        ],
                        'explanation' => 'Une urine foncée est concentrée : le corps garde l’eau quand il en manque.',
                    ],
                    [
                        'question' => 'Un adulte produit 1,5 L d’urine en 24 heures. Quel volume cela représente-t-il en moyenne par heure ?',
                        'choices' => [
                            ['choice_text' => '62,5 mL', 'is_correct' => true],
                            ['choice_text' => '6,25 mL', 'is_correct' => false],
                            ['choice_text' => '625 mL', 'is_correct' => false],
                            ['choice_text' => '150 mL', 'is_correct' => false],
                        ],
                        'explanation' => '1,5 L = 1 500 mL ; 1 500 ÷ 24 = 62,5 mL par heure.',
                    ],
                    [
                        'question' => 'Quel conduit évacue l’urine hors du corps ?',
                        'choices' => [
                            ['choice_text' => 'L’uretère', 'is_correct' => false],
                            ['choice_text' => 'La vessie', 'is_correct' => false],
                            ['choice_text' => 'L’urètre', 'is_correct' => true],
                            ['choice_text' => 'L’artère rénale', 'is_correct' => false],
                        ],
                        'explanation' => 'L’urètre est le canal de sortie : il conduit l’urine de la vessie vers l’extérieur.',
                    ],
                    [
                        'question' => 'Quel est l’intérêt de contrôler le sodium et le potassium du sang ?',
                        'choices' => [
                            ['choice_text' => 'Ils transportent l’oxygène dans le sang', 'is_correct' => false],
                            ['choice_text' => 'Ils fabriquent l’hémoglobine', 'is_correct' => false],
                            ['choice_text' => 'Ils donnent sa couleur rouge au sang', 'is_correct' => false],
                            ['choice_text' => 'Ils règlent l’eau, les nerfs et les muscles', 'is_correct' => true],
                        ],
                        'explanation' => 'Le sodium et le potassium influencent l’équilibre en eau, les signaux nerveux et la contraction des muscles : leur taux doit rester stable.',
                    ],
                    [
                        'question' => 'Qu’est-ce qui augmente la sensation de soif ?',
                        'choices' => [
                            ['choice_text' => 'Une forte perte d’eau par la sueur', 'is_correct' => true],
                            ['choice_text' => 'Une boisson abondante pendant le repas', 'is_correct' => false],
                            ['choice_text' => 'Un séjour au frais sans effort', 'is_correct' => false],
                            ['choice_text' => 'Un repas riche en soupe', 'is_correct' => false],
                        ],
                        'explanation' => 'En perdant de l’eau, le corps détecte que son milieu intérieur se concentre et déclenche la soif.',
                    ],
                    [
                        'question' => 'Quelle est la fonction de la vessie ?',
                        'choices' => [
                            ['choice_text' => 'Fabriquer l’urine à partir du sang', 'is_correct' => false],
                            ['choice_text' => 'Filtrer les déchets du plasma', 'is_correct' => false],
                            ['choice_text' => 'Conduire l’urine jusqu’au rein', 'is_correct' => false],
                            ['choice_text' => 'Stocker l’urine avant la miction', 'is_correct' => true],
                        ],
                        'explanation' => 'La vessie est un réservoir musculaire qui garde l’urine envoyée par les reins jusqu’à la miction.',
                    ],
                ],
            ],
            [
                'title' => 'Muscles, mouvement et énergie',
                'description' => 'Découvrir comment les muscles produisent de la force, utilisent l’énergie et s’adaptent à l’activité physique.',
                'settings' => ['duration' => 25, 'passing_score' => 70],
                'questions' => [
                    [
                        'question' => 'Qu’est-ce qui permet à un muscle de produire de la force ?',
                        'choices' => [
                            ['choice_text' => 'Sa capacité à se contracter', 'is_correct' => true],
                            ['choice_text' => 'Sa capacité à transmettre des messages nerveux', 'is_correct' => false],
                            ['choice_text' => 'Sa capacité à fabriquer des hormones', 'is_correct' => false],
                            ['choice_text' => 'Sa capacité à stocker de la graisse', 'is_correct' => false],
                        ],
                        'explanation' => 'Un muscle développe une force en se contractant : ses fibres se raccourcissent.',
                    ],
                    [
                        'question' => 'Quelle molécule fournit l’énergie directement utilisable par les muscles ?',
                        'choices' => [
                            ['choice_text' => 'L’hémoglobine du sang', 'is_correct' => false],
                            ['choice_text' => 'Le collagène de la peau', 'is_correct' => false],
                            ['choice_text' => 'L’ADN du noyau', 'is_correct' => false],
                            ['choice_text' => 'L’ATP des cellules', 'is_correct' => true],
                        ],
                        'explanation' => 'L’ATP est la monnaie énergétique de la cellule : les muscles l’utilisent pour se contracter.',
                    ],
                    [
                        'question' => 'Pendant un exercice intense, le cœur et la respiration s’accélèrent. Quel est l’effet recherché ?',
                        'choices' => [
                            ['choice_text' => 'Permettre aux muscles de se reposer pendant l’effort', 'is_correct' => false],
                            ['choice_text' => 'Alimenter davantage les muscles en oxygène et nutriments', 'is_correct' => true],
                            ['choice_text' => 'Réduire l’arrivée de sang dans les muscles', 'is_correct' => false],
                            ['choice_text' => 'Arrêter la fabrication d’énergie des cellules', 'is_correct' => false],
                        ],
                        'explanation' => 'Les muscles actifs consomment plus d’oxygène et de nutriments et produisent plus de déchets : le cœur et les poumons s’adaptent pour suivre.',
                    ],
                    [
                        'question' => 'Quel type de muscle permet les mouvements volontaires des bras et des jambes ?',
                        'choices' => [
                            ['choice_text' => 'Le muscle cardiaque', 'is_correct' => false],
                            ['choice_text' => 'Le muscle lisse', 'is_correct' => false],
                            ['choice_text' => 'Le muscle squelettique', 'is_correct' => true],
                            ['choice_text' => 'Le tendon et le ligament', 'is_correct' => false],
                        ],
                        'explanation' => 'Les muscles squelettiques s’attachent aux os et sont commandés volontairement : ils permettent les mouvements et le maintien de la posture.',
                    ],
                    [
                        'question' => 'Après une séance de sport très intense, Hamza ressent une fatigue musculaire. Quelle explication est juste ?',
                        'choices' => [
                            ['choice_text' => 'Ses muscles ont beaucoup puisé dans leurs réserves d’énergie', 'is_correct' => true],
                            ['choice_text' => 'Ses muscles ont absorbé trop d’oxygène', 'is_correct' => false],
                            ['choice_text' => 'Ses os ont perdu du calcium pendant la séance', 'is_correct' => false],
                            ['choice_text' => 'Son sang a cessé de circuler dans ses jambes', 'is_correct' => false],
                        ],
                        'explanation' => 'L’effort épuise les réserves d’énergie des muscles et modifie leur chimie, ce qui diminue leur capacité à se contracter.',
                    ],
                    [
                        'question' => 'Comment un muscle squelettique fait-il bouger un os ?',
                        'choices' => [
                            ['choice_text' => 'Le sang pousse l’os dans la direction voulue', 'is_correct' => false],
                            ['choice_text' => 'Le tendon fabrique lui-même la force du mouvement', 'is_correct' => false],
                            ['choice_text' => 'Il se contracte et tire sur l’os par son tendon', 'is_correct' => true],
                            ['choice_text' => 'L’os se raccourcit à la place du muscle', 'is_correct' => false],
                        ],
                        'explanation' => 'Le muscle qui se contracte tire sur le tendon, qui tire sur l’os : le mouvement se produit à l’articulation.',
                    ],
                    [
                        'question' => 'Pendant trois mois, Sara court trois fois par semaine. Quelle adaptation est probable ?',
                        'choices' => [
                            ['choice_text' => 'Son cœur bat plus vite au repos qu’avant', 'is_correct' => false],
                            ['choice_text' => 'Ses muscles perdent une partie de leurs capillaires', 'is_correct' => false],
                            ['choice_text' => 'Ses cellules produisent moins d’énergie qu’avant', 'is_correct' => false],
                            ['choice_text' => 'Son cœur et ses muscles tiennent mieux l’effort', 'is_correct' => true],
                        ],
                        'explanation' => 'Un entraînement régulier améliore l’endurance du cœur et des muscles, qui deviennent plus efficaces.',
                    ],
                    [
                        'question' => 'Que consomment surtout les muscles pour produire de l’énergie ?',
                        'choices' => [
                            ['choice_text' => 'De l’urée et des sels minéraux', 'is_correct' => false],
                            ['choice_text' => 'Du glucose et des graisses', 'is_correct' => true],
                            ['choice_text' => 'Du calcium venu des os', 'is_correct' => false],
                            ['choice_text' => 'De la bile et des sucs digestifs', 'is_correct' => false],
                        ],
                        'explanation' => 'Les muscles brûlent du glucose et des graisses, avec de l’oxygène, pour fabriquer l’énergie dont ils ont besoin.',
                    ],
                    [
                        'question' => 'Hamza sent ses jambes chauffer pendant son footing. D’où vient cette chaleur ?',
                        'choices' => [
                            ['choice_text' => 'Du frottement des os dans les articulations', 'is_correct' => false],
                            ['choice_text' => 'De l’air chaud que l’on inspire', 'is_correct' => false],
                            ['choice_text' => 'De l’énergie dégagée par les muscles', 'is_correct' => true],
                            ['choice_text' => 'Du soleil qui chauffe la peau', 'is_correct' => false],
                        ],
                        'explanation' => 'Une partie de l’énergie utilisée par les muscles se transforme en chaleur, d’où la sensation de chaleur à l’effort.',
                    ],
                    [
                        'question' => 'Quel organe musculaire bat sans arrêt et sans qu’on le commande, pour propulser le sang ?',
                        'choices' => [
                            ['choice_text' => 'Le biceps du bras', 'is_correct' => false],
                            ['choice_text' => 'Le cœur humain', 'is_correct' => true],
                            ['choice_text' => 'Le diaphragme', 'is_correct' => false],
                            ['choice_text' => 'Le muscle de l’estomac', 'is_correct' => false],
                        ],
                        'explanation' => 'Le muscle cardiaque se contracte de façon rythmique et involontaire : c’est lui qui fait circuler le sang.',
                    ],
                ],
            ],
            [
                'title' => 'Reproduction, croissance et régulation',
                'description' => 'Revoir les principes physiologiques de la reproduction humaine, de la puberté, de la grossesse et de la croissance.',
                'settings' => ['duration' => 25, 'passing_score' => 70],
                'questions' => [
                    [
                        'question' => 'Quelle cellule naît de la fusion d’un spermatozoïde et d’un ovocyte ?',
                        'choices' => [
                            ['choice_text' => 'Le gamète', 'is_correct' => false],
                            ['choice_text' => 'Le fœtus', 'is_correct' => false],
                            ['choice_text' => 'Le zygote', 'is_correct' => true],
                            ['choice_text' => 'L’embryon', 'is_correct' => false],
                        ],
                        'explanation' => 'La fécondation unit les deux gamètes en une cellule-œuf, le zygote, qui donnera l’embryon.',
                    ],
                    [
                        'question' => 'Quelle hormone, surtout produite par les testicules, est à l’origine des caractères masculins à la puberté ?',
                        'choices' => [
                            ['choice_text' => 'La testostérone', 'is_correct' => true],
                            ['choice_text' => 'La prolactine', 'is_correct' => false],
                            ['choice_text' => 'L’insuline', 'is_correct' => false],
                            ['choice_text' => 'La thyroxine', 'is_correct' => false],
                        ],
                        'explanation' => 'À la puberté, la testostérone provoque la mue de la voix, la pousse de la barbe et le développement des muscles.',
                    ],
                    [
                        'question' => 'Que se passe-t-il pendant la puberté ?',
                        'choices' => [
                            ['choice_text' => 'Les hormones sexuelles disparaissent peu à peu du sang', 'is_correct' => false],
                            ['choice_text' => 'La croissance du corps s’arrête dès le début', 'is_correct' => false],
                            ['choice_text' => 'Le cerveau perd la plupart de ses neurones', 'is_correct' => false],
                            ['choice_text' => 'Les hormones sexuelles augmentent et le corps change', 'is_correct' => true],
                        ],
                        'explanation' => 'La puberté est la période où les hormones sexuelles augmentent et provoquent des changements du corps, jusqu’à la maturité reproductive.',
                    ],
                    [
                        'question' => 'Où se développe l’embryon pendant la grossesse ?',
                        'choices' => [
                            ['choice_text' => 'Dans l’ovaire', 'is_correct' => false],
                            ['choice_text' => 'Dans l’utérus', 'is_correct' => true],
                            ['choice_text' => 'Dans la vessie', 'is_correct' => false],
                            ['choice_text' => 'Dans la trompe utérine', 'is_correct' => false],
                        ],
                        'explanation' => 'Après la fécondation, l’embryon s’installe dans la paroi de l’utérus, où il se développe pendant la grossesse.',
                    ],
                    [
                        'question' => 'Où sont fabriqués les spermatozoïdes ?',
                        'choices' => [
                            ['choice_text' => 'Dans la prostate', 'is_correct' => false],
                            ['choice_text' => 'Dans les testicules', 'is_correct' => true],
                            ['choice_text' => 'Dans la vessie', 'is_correct' => false],
                            ['choice_text' => 'Dans l’urètre', 'is_correct' => false],
                        ],
                        'explanation' => 'Les spermatozoïdes sont fabriqués dans les testicules, puis ils mûrissent avant d’être évacués.',
                    ],
                    [
                        'question' => 'À quoi sert le placenta pendant la grossesse ?',
                        'choices' => [
                            ['choice_text' => 'À fabriquer le lait maternel', 'is_correct' => false],
                            ['choice_text' => 'À maintenir la température de l’utérus', 'is_correct' => false],
                            ['choice_text' => 'À stocker le sang de la mère', 'is_correct' => false],
                            ['choice_text' => 'À nourrir et oxygéner le fœtus', 'is_correct' => true],
                        ],
                        'explanation' => 'Le placenta transmet l’oxygène et les nutriments de la mère au fœtus et évacue ses déchets.',
                    ],
                    [
                        'question' => 'Quelle hormone déclenche la production de lait après l’accouchement ?',
                        'choices' => [
                            ['choice_text' => 'La prolactine', 'is_correct' => true],
                            ['choice_text' => 'L’insuline', 'is_correct' => false],
                            ['choice_text' => 'La testostérone', 'is_correct' => false],
                            ['choice_text' => 'La mélatonine', 'is_correct' => false],
                        ],
                        'explanation' => 'La prolactine stimule les glandes mammaires, qui fabriquent le lait.',
                    ],
                    [
                        'question' => 'Quel liquide entoure et protège le fœtus dans l’utérus ?',
                        'choices' => [
                            ['choice_text' => 'Le liquide synovial', 'is_correct' => false],
                            ['choice_text' => 'Le plasma sanguin', 'is_correct' => false],
                            ['choice_text' => 'Le liquide amniotique', 'is_correct' => true],
                            ['choice_text' => 'La lymphe du corps', 'is_correct' => false],
                        ],
                        'explanation' => 'Le liquide amniotique forme une poche qui amortit les chocs et garde une température stable autour du fœtus.',
                    ],
                    [
                        'question' => 'Un enfant passe de 20 kg à 24 kg. De quel pourcentage sa masse a-t-elle augmenté ?',
                        'choices' => [
                            ['choice_text' => '4 %', 'is_correct' => false],
                            ['choice_text' => '16 %', 'is_correct' => false],
                            ['choice_text' => '24 %', 'is_correct' => false],
                            ['choice_text' => '20 %', 'is_correct' => true],
                        ],
                        'explanation' => 'Il a pris 4 kg ; par rapport à 20 kg de départ : 4 ÷ 20 = 0,20, soit 20 %.',
                    ],
                    [
                        'question' => 'Quel minéral est surtout nécessaire à la croissance des os ?',
                        'choices' => [
                            ['choice_text' => 'Le calcium', 'is_correct' => true],
                            ['choice_text' => 'Le fer', 'is_correct' => false],
                            ['choice_text' => 'L’iode', 'is_correct' => false],
                            ['choice_text' => 'Le sodium', 'is_correct' => false],
                        ],
                        'explanation' => 'Le calcium durcit les os ; l’enfant en a besoin pour grandir.',
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