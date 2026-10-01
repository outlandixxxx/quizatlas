<?php

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class BiotechnologyBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'biotechnology')->firstOrFail();

        $quizzes = [
            [
                'title' => 'Introduction à la biotechnologie',
                'description' => 'Principes et applications générales de la biotechnologie.',
                'settings' => ['duration' => 15, 'passing_score' => 50],
                'questions' => [
                    [
                        'question' => 'La biotechnologie utilise principalement :',
                        'choices' => [
                            ['choice_text' => 'des cellules, des organismes ou des molécules biologiques pour obtenir un produit ou un service', 'is_correct' => true],
                            ['choice_text' => 'uniquement des roches', 'is_correct' => false],
                            ['choice_text' => 'uniquement des machines', 'is_correct' => false],
                            ['choice_text' => 'uniquement des réactions de combustion', 'is_correct' => false],
                        ],
                        'explanation' => 'La biotechnologie exploite des systèmes biologiques ou leurs composants pour produire, transformer, détecter ou modifier des substances utiles.',
                    ],
                    [
                        'question' => 'La levure utilisée pour fabriquer le pain est :',
                        'choices' => [
                            ['choice_text' => 'un microorganisme exploité dans un procédé biotechnologique', 'is_correct' => true],
                            ['choice_text' => 'un minéral', 'is_correct' => false],
                            ['choice_text' => 'un virus obligatoirement pathogène', 'is_correct' => false],
                            ['choice_text' => 'une cellule nerveuse', 'is_correct' => false],
                        ],
                        'explanation' => 'La levure réalise une fermentation et constitue un microorganisme utile en alimentation.',
                    ],
                    [
                        'question' => 'La fermentation peut servir à :',
                        'choices' => [
                            ['choice_text' => 'produire certains aliments ou molécules grâce à l\'activité de microorganismes', 'is_correct' => true],
                            ['choice_text' => 'détruire tous les microorganismes', 'is_correct' => false],
                            ['choice_text' => 'transformer les chromosomes en protéines', 'is_correct' => false],
                            ['choice_text' => 'empêcher toute réaction enzymatique', 'is_correct' => false],
                        ],
                        'explanation' => 'La fermentation exploite le métabolisme de microorganismes pour fabriquer divers produits.',
                    ],
                    [
                        'question' => 'La production d\'insuline humaine par une bactérie modifiée est une application :',
                        'choices' => [
                            ['choice_text' => 'de la biotechnologie médicale', 'is_correct' => true],
                            ['choice_text' => 'de la géologie', 'is_correct' => false],
                            ['choice_text' => 'de la météorologie', 'is_correct' => false],
                            ['choice_text' => 'de la cartographie', 'is_correct' => false],
                        ],
                        'explanation' => 'Des bactéries peuvent recevoir une information génétique leur permettant de produire une protéine thérapeutique.',
                    ],
                    [
                        'question' => 'Un organisme génétiquement modifié possède :',
                        'choices' => [
                            ['choice_text' => 'une modification de son matériel génétique obtenue par une technique de génie génétique', 'is_correct' => true],
                            ['choice_text' => 'seulement une alimentation différente', 'is_correct' => false],
                            ['choice_text' => 'uniquement un nouvel habitat', 'is_correct' => false],
                            ['choice_text' => 'forcément une taille plus grande', 'is_correct' => false],
                        ],
                        'explanation' => 'Un OGM est défini par une modification de son matériel génétique issue d\'une intervention biotechnologique.',
                    ],
                    [
                        'question' => 'La biotechnologie environnementale peut servir à :',
                        'choices' => [
                            ['choice_text' => 'utiliser des organismes pour traiter certains contaminants', 'is_correct' => true],
                            ['choice_text' => 'dater les fossiles', 'is_correct' => false],
                            ['choice_text' => 'mesurer les séismes', 'is_correct' => false],
                            ['choice_text' => 'fabriquer des plaques tectoniques', 'is_correct' => false],
                        ],
                        'explanation' => 'La bioremédiation utilise notamment des microorganismes pour transformer ou immobiliser certains polluants.',
                    ],
                    [
                        'question' => 'Un bioréacteur sert principalement à :',
                        'choices' => [
                            ['choice_text' => 'cultiver des cellules ou microorganismes dans des conditions contrôlées', 'is_correct' => true],
                            ['choice_text' => 'observer les étoiles', 'is_correct' => false],
                            ['choice_text' => 'mesurer les marées', 'is_correct' => false],
                            ['choice_text' => 'conserver des minéraux', 'is_correct' => false],
                        ],
                        'explanation' => 'Un bioréacteur permet de contrôler le milieu pendant une culture ou une production biologique.',
                    ],
                    [
                        'question' => 'Quel produit peut être fabriqué industriellement par des microorganismes ?',
                        'choices' => [
                            ['choice_text' => 'certaines enzymes', 'is_correct' => true],
                            ['choice_text' => 'des continents', 'is_correct' => false],
                            ['choice_text' => 'des plaques tectoniques', 'is_correct' => false],
                            ['choice_text' => 'des fossiles', 'is_correct' => false],
                        ],
                        'explanation' => 'Des microorganismes industriels peuvent produire des enzymes utilisées en alimentation et dans de nombreux procédés.',
                    ],
                    [
                        'question' => 'La bioproduction consiste surtout à :',
                        'choices' => [
                            ['choice_text' => 'fabriquer une molécule ou un matériau en utilisant un système biologique', 'is_correct' => true],
                            ['choice_text' => 'extraire uniquement des roches', 'is_correct' => false],
                            ['choice_text' => 'mesurer la température', 'is_correct' => false],
                            ['choice_text' => 'observer les organes', 'is_correct' => false],
                        ],
                        'explanation' => 'La bioproduction utilise des cellules, enzymes ou microorganismes comme systèmes de fabrication.',
                    ],
                    [
                        'question' => 'Pourquoi la biotechnologie moderne est-elle utile ?',
                        'choices' => [
                            ['choice_text' => 'elle permet d\'exploiter et de contrôler certains processus biologiques pour des objectifs précis', 'is_correct' => true],
                            ['choice_text' => 'elle supprime la diversité biologique', 'is_correct' => false],
                            ['choice_text' => 'elle empêche toute évolution', 'is_correct' => false],
                            ['choice_text' => 'elle remplace toutes les espèces', 'is_correct' => false],
                        ],
                        'explanation' => 'Elle permet notamment de produire des médicaments, de diagnostiquer des maladies ou de traiter certains déchets.',
                    ],
                ],
            ],
            [
                'title' => 'ADN recombinant et génie génétique',
                'description' => 'Vecteurs, enzymes de restriction et clonage moléculaire.',
                'settings' => ['duration' => 20, 'passing_score' => 55],
                'questions' => [
                    [
                        'question' => 'L\'ADN recombinant est :',
                        'choices' => [
                            ['choice_text' => 'un ADN formé en combinant des séquences provenant de sources différentes', 'is_correct' => true],
                            ['choice_text' => 'une protéine modifiée', 'is_correct' => false],
                            ['choice_text' => 'un ARN sans nucléotides', 'is_correct' => false],
                            ['choice_text' => 'un ADN présent seulement chez les plantes', 'is_correct' => false],
                        ],
                        'explanation' => 'L\'ADN recombinant résulte de l\'assemblage de fragments d\'ADN provenant de sources différentes.',
                    ],
                    [
                        'question' => 'Une enzyme de restriction sert à :',
                        'choices' => [
                            ['choice_text' => 'couper l\'ADN à des séquences spécifiques', 'is_correct' => true],
                            ['choice_text' => 'fabriquer directement une protéine', 'is_correct' => false],
                            ['choice_text' => 'traduire l\'ARN', 'is_correct' => false],
                            ['choice_text' => 'dégrader les lipides', 'is_correct' => false],
                        ],
                        'explanation' => 'Les enzymes de restriction reconnaissent des séquences particulières et coupent l\'ADN à ces sites.',
                    ],
                    [
                        'question' => 'L\'ADN ligase permet de :',
                        'choices' => [
                            ['choice_text' => 'relier des fragments d\'ADN', 'is_correct' => true],
                            ['choice_text' => 'séparer les protéines', 'is_correct' => false],
                            ['choice_text' => 'fabriquer du glucose', 'is_correct' => false],
                            ['choice_text' => 'détruire les membranes', 'is_correct' => false],
                        ],
                        'explanation' => 'L\'ADN ligase forme des liaisons entre fragments d\'ADN.',
                    ],
                    [
                        'question' => 'Un plasmide bactérien peut être utilisé comme :',
                        'choices' => [
                            ['choice_text' => 'vecteur génétique', 'is_correct' => true],
                            ['choice_text' => 'ribosome', 'is_correct' => false],
                            ['choice_text' => 'enzyme digestive', 'is_correct' => false],
                            ['choice_text' => 'membrane', 'is_correct' => false],
                        ],
                        'explanation' => 'Un plasmide est une petite molécule d\'ADN souvent utilisée comme vecteur en génie génétique.',
                    ],
                    [
                        'question' => 'Pour faire produire une protéine humaine par une bactérie, il faut :',
                        'choices' => [
                            ['choice_text' => 'introduire une construction génétique adaptée à son expression', 'is_correct' => true],
                            ['choice_text' => 'transformer la bactérie en cellule humaine', 'is_correct' => false],
                            ['choice_text' => 'retirer tout son ADN', 'is_correct' => false],
                            ['choice_text' => 'ajouter seulement du glucose', 'is_correct' => false],
                        ],
                        'explanation' => 'La bactérie doit recevoir une information génétique qu\'elle peut exprimer.',
                    ],
                    [
                        'question' => 'Un marqueur de sélection sert surtout à :',
                        'choices' => [
                            ['choice_text' => 'identifier plus facilement les cellules ayant reçu le vecteur', 'is_correct' => true],
                            ['choice_text' => 'transformer un lipide en ADN', 'is_correct' => false],
                            ['choice_text' => 'empêcher toute réplication', 'is_correct' => false],
                            ['choice_text' => 'fabriquer de l\'oxygène', 'is_correct' => false],
                        ],
                        'explanation' => 'Un marqueur permet de distinguer les cellules transformées des cellules non transformées.',
                    ],
                    [
                        'question' => 'Le clonage moléculaire permet notamment de :',
                        'choices' => [
                            ['choice_text' => 'obtenir de nombreuses copies d\'une séquence d\'ADN', 'is_correct' => true],
                            ['choice_text' => 'former un organe complet', 'is_correct' => false],
                            ['choice_text' => 'transformer un virus en bactérie', 'is_correct' => false],
                            ['choice_text' => 'supprimer toute variation génétique', 'is_correct' => false],
                        ],
                        'explanation' => 'Le clonage moléculaire amplifie et maintient une séquence d\'ADN dans un système biologique.',
                    ],
                    [
                        'question' => 'Après insertion d\'un gène dans un plasmide, on peut vérifier l\'insert par :',
                        'choices' => [
                            ['choice_text' => 'séquençage ou autre méthode moléculaire adaptée', 'is_correct' => true],
                            ['choice_text' => 'simple observation à l\'œil nu', 'is_correct' => false],
                            ['choice_text' => 'mesure de la pression', 'is_correct' => false],
                            ['choice_text' => 'test gustatif', 'is_correct' => false],
                        ],
                        'explanation' => 'Le séquençage, la PCR ou une analyse enzymatique peuvent confirmer l\'identité de l\'insert.',
                    ],
                    [
                        'question' => 'Le rôle d\'un vecteur en génie génétique est de :',
                        'choices' => [
                            ['choice_text' => 'transporter ou maintenir une séquence d\'ADN dans une cellule hôte', 'is_correct' => true],
                            ['choice_text' => 'produire de l\'eau', 'is_correct' => false],
                            ['choice_text' => 'remplacer toutes les protéines', 'is_correct' => false],
                            ['choice_text' => 'mesurer la tension artérielle', 'is_correct' => false],
                        ],
                        'explanation' => 'Le vecteur sert de support à l\'introduction, au maintien ou à l\'expression d\'une séquence génétique.',
                    ],
                    [
                        'question' => 'Un fragment cloné de 1500 paires de bases sans mutation conserve une longueur de :',
                        'choices' => [
                            ['choice_text' => '1500 paires de bases', 'is_correct' => true],
                            ['choice_text' => '750 paires de bases', 'is_correct' => false],
                            ['choice_text' => '3000 paires de bases obligatoirement', 'is_correct' => false],
                            ['choice_text' => '0 paire de bases', 'is_correct' => false],
                        ],
                        'explanation' => 'En l\'absence de mutation ou de modification, le clonage conserve la séquence et sa longueur.',
                    ],
                ],
            ],
            [
                'title' => 'PCR et amplification de l\'ADN',
                'description' => 'Principe, étapes et interprétation simple de la PCR.',
                'settings' => ['duration' => 20, 'passing_score' => 60],
                'questions' => [
                    [
                        'question' => 'La PCR sert principalement à :',
                        'choices' => [
                            ['choice_text' => 'amplifier une région précise d\'ADN', 'is_correct' => true],
                            ['choice_text' => 'fabriquer des lipides', 'is_correct' => false],
                            ['choice_text' => 'traduire une protéine', 'is_correct' => false],
                            ['choice_text' => 'mesurer la pression osmotique', 'is_correct' => false],
                        ],
                        'explanation' => 'La PCR produit de nombreuses copies d\'une séquence d\'ADN ciblée.',
                    ],
                    [
                        'question' => 'La première étape d\'un cycle PCR est généralement :',
                        'choices' => [
                            ['choice_text' => 'la dénaturation de l\'ADN', 'is_correct' => true],
                            ['choice_text' => 'la traduction', 'is_correct' => false],
                            ['choice_text' => 'la fermentation', 'is_correct' => false],
                            ['choice_text' => 'la synthèse de lipides', 'is_correct' => false],
                        ],
                        'explanation' => 'La dénaturation sépare les deux brins d\'ADN.',
                    ],
                    [
                        'question' => 'Les amorces PCR servent à :',
                        'choices' => [
                            ['choice_text' => 'délimiter la région cible et fournir un point de départ à la polymérase', 'is_correct' => true],
                            ['choice_text' => 'détruire l\'ADN', 'is_correct' => false],
                            ['choice_text' => 'remplacer les nucléotides', 'is_correct' => false],
                            ['choice_text' => 'fabriquer directement une protéine', 'is_correct' => false],
                        ],
                        'explanation' => 'Les amorces s\'hybrident de part et d\'autre de la région à amplifier.',
                    ],
                    [
                        'question' => 'Pendant l\'élongation, l\'ADN polymérase :',
                        'choices' => [
                            ['choice_text' => 'ajoute des nucléotides au nouveau brin', 'is_correct' => true],
                            ['choice_text' => 'coupe tous les chromosomes', 'is_correct' => false],
                            ['choice_text' => 'fabrique des acides aminés', 'is_correct' => false],
                            ['choice_text' => 'détruit les membranes', 'is_correct' => false],
                        ],
                        'explanation' => 'L\'ADN polymérase synthétise le nouveau brin à partir de l\'amorce.',
                    ],
                    [
                        'question' => 'Dans un modèle idéal, le produit de PCR augmente :',
                        'choices' => [
                            ['choice_text' => 'de façon exponentielle pendant les premiers cycles', 'is_correct' => true],
                            ['choice_text' => 'de façon constante sans limite', 'is_correct' => false],
                            ['choice_text' => 'en diminuant à chaque cycle', 'is_correct' => false],
                            ['choice_text' => 'en devenant immédiatement une protéine', 'is_correct' => false],
                        ],
                        'explanation' => 'Un doublement théorique à chaque cycle donne une croissance exponentielle au début de la réaction.',
                    ],
                    [
                        'question' => 'Une copie d\'ADN après 5 cycles avec un doublement parfait donne :',
                        'choices' => [
                            ['choice_text' => '32 copies', 'is_correct' => true],
                            ['choice_text' => '10 copies', 'is_correct' => false],
                            ['choice_text' => '16 copies', 'is_correct' => false],
                            ['choice_text' => '25 copies', 'is_correct' => false],
                        ],
                        'explanation' => 'Le calcul est 1 × 2^5 = 32 copies.',
                    ],
                    [
                        'question' => 'Une bande de taille attendue apparaît dans l\'échantillon mais pas dans le témoin négatif. Cela suggère :',
                        'choices' => [
                            ['choice_text' => 'que la séquence ciblée est probablement présente', 'is_correct' => true],
                            ['choice_text' => 'que la PCR est forcément négative', 'is_correct' => false],
                            ['choice_text' => 'que le témoin contient la cible', 'is_correct' => false],
                            ['choice_text' => 'que toutes les cellules sont identiques', 'is_correct' => false],
                        ],
                        'explanation' => 'Une bande attendue avec un contrôle négatif propre est compatible avec la présence de la cible.',
                    ],
                    [
                        'question' => 'Le témoin négatif sert notamment à :',
                        'choices' => [
                            ['choice_text' => 'détecter une éventuelle contamination', 'is_correct' => true],
                            ['choice_text' => 'augmenter l\'ADN', 'is_correct' => false],
                            ['choice_text' => 'remplacer les amorces', 'is_correct' => false],
                            ['choice_text' => 'produire la polymérase', 'is_correct' => false],
                        ],
                        'explanation' => 'Une amplification dans un témoin sans cible peut révéler une contamination.',
                    ],
                    [
                        'question' => 'Une copie d\'ADN après 10 cycles avec doublement parfait donne :',
                        'choices' => [
                            ['choice_text' => '1024 copies', 'is_correct' => true],
                            ['choice_text' => '100 copies', 'is_correct' => false],
                            ['choice_text' => '512 copies', 'is_correct' => false],
                            ['choice_text' => '20 copies', 'is_correct' => false],
                        ],
                        'explanation' => 'Le calcul est 1 × 2^10 = 1024 copies.',
                    ],
                    [
                        'question' => 'La PCR quantitative permet notamment de :',
                        'choices' => [
                            ['choice_text' => 'suivre l\'accumulation du produit au cours des cycles', 'is_correct' => true],
                            ['choice_text' => 'observer directement les chromosomes au microscope', 'is_correct' => false],
                            ['choice_text' => 'mesurer seulement la masse d\'une protéine', 'is_correct' => false],
                            ['choice_text' => 'remplacer toutes les analyses', 'is_correct' => false],
                        ],
                        'explanation' => 'La PCR quantitative suit l\'évolution du signal d\'amplification au cours des cycles.',
                    ],
                ],
            ],
            [
                'title' => 'Culture cellulaire et bioproduction',
                'description' => 'Conditions de culture, bioréacteurs et production de biomolécules.',
                'settings' => ['duration' => 20, 'passing_score' => 60],
                'questions' => [
                    [
                        'question' => 'Une culture cellulaire consiste à :',
                        'choices' => [
                            ['choice_text' => 'maintenir et multiplier des cellules dans des conditions contrôlées', 'is_correct' => true],
                            ['choice_text' => 'faire pousser des roches', 'is_correct' => false],
                            ['choice_text' => 'transformer des cellules en minéraux', 'is_correct' => false],
                            ['choice_text' => 'cultiver uniquement des virus sur du sol', 'is_correct' => false],
                        ],
                        'explanation' => 'La culture cellulaire fournit aux cellules des conditions adaptées à leur survie et leur croissance.',
                    ],
                    [
                        'question' => 'Un milieu de culture fournit notamment :',
                        'choices' => [
                            ['choice_text' => 'des nutriments et des conditions physico-chimiques adaptées', 'is_correct' => true],
                            ['choice_text' => 'uniquement de l\'oxygène', 'is_correct' => false],
                            ['choice_text' => 'uniquement de l\'ADN', 'is_correct' => false],
                            ['choice_text' => 'uniquement des anticorps', 'is_correct' => false],
                        ],
                        'explanation' => 'Les cellules ont besoin d\'un ensemble de nutriments et de conditions adaptées.',
                    ],
                    [
                        'question' => 'Pourquoi travaille-t-on souvent en conditions stériles ?',
                        'choices' => [
                            ['choice_text' => 'pour éviter la contamination par des microorganismes indésirables', 'is_correct' => true],
                            ['choice_text' => 'pour empêcher toute division cellulaire', 'is_correct' => false],
                            ['choice_text' => 'pour augmenter automatiquement la température', 'is_correct' => false],
                            ['choice_text' => 'pour détruire les nutriments', 'is_correct' => false],
                        ],
                        'explanation' => 'Les contaminants peuvent perturber la culture et compromettre les résultats.',
                    ],
                    [
                        'question' => 'Un bioréacteur permet notamment de contrôler :',
                        'choices' => [
                            ['choice_text' => 'le pH, la température, l\'agitation et l\'oxygénation', 'is_correct' => true],
                            ['choice_text' => 'les plaques tectoniques', 'is_correct' => false],
                            ['choice_text' => 'les marées', 'is_correct' => false],
                            ['choice_text' => 'les phases de la Lune', 'is_correct' => false],
                        ],
                        'explanation' => 'Le contrôle de ces paramètres aide à maintenir les cellules dans des conditions productives.',
                    ],
                    [
                        'question' => 'La production d\'une protéine dans une culture dépend notamment :',
                        'choices' => [
                            ['choice_text' => 'du nombre de cellules, de leur activité et des conditions de culture', 'is_correct' => true],
                            ['choice_text' => 'uniquement de la couleur du récipient', 'is_correct' => false],
                            ['choice_text' => 'uniquement de la lumière', 'is_correct' => false],
                            ['choice_text' => 'uniquement du nom de la protéine', 'is_correct' => false],
                        ],
                        'explanation' => 'La productivité dépend de la biomasse, de l\'expression du gène et du milieu.',
                    ],
                    [
                        'question' => 'Une culture contient 2 millions de cellules et double. Elle contient :',
                        'choices' => [
                            ['choice_text' => '4 millions de cellules', 'is_correct' => true],
                            ['choice_text' => '2,5 millions', 'is_correct' => false],
                            ['choice_text' => '1 million', 'is_correct' => false],
                            ['choice_text' => '6 millions', 'is_correct' => false],
                        ],
                        'explanation' => 'Un doublement de 2 millions donne 4 millions.',
                    ],
                    [
                        'question' => 'Un pH trop acide dans une culture peut provoquer :',
                        'choices' => [
                            ['choice_text' => 'une diminution de la croissance ou de la viabilité', 'is_correct' => true],
                            ['choice_text' => 'une amélioration garantie', 'is_correct' => false],
                            ['choice_text' => 'une augmentation automatique des chromosomes', 'is_correct' => false],
                            ['choice_text' => 'la disparition du besoin en nutriments', 'is_correct' => false],
                        ],
                        'explanation' => 'Les cellules ont une plage de pH compatible avec leur fonctionnement.',
                    ],
                    [
                        'question' => 'Une culture en suspension se caractérise par :',
                        'choices' => [
                            ['choice_text' => 'des cellules qui n\'ont pas besoin d\'adhérer à une surface', 'is_correct' => true],
                            ['choice_text' => 'des cellules sans membrane', 'is_correct' => false],
                            ['choice_text' => 'uniquement des bactéries', 'is_correct' => false],
                            ['choice_text' => 'des cellules incapables de se multiplier', 'is_correct' => false],
                        ],
                        'explanation' => 'Certaines cellules peuvent croître librement dans le milieu au lieu d\'être fixées à une surface.',
                    ],
                    [
                        'question' => 'La montée en échelle d\'un procédé signifie :',
                        'choices' => [
                            ['choice_text' => 'passer à un volume de production plus grand en conservant les paramètres essentiels', 'is_correct' => true],
                            ['choice_text' => 'supprimer tous les contrôles', 'is_correct' => false],
                            ['choice_text' => 'remplacer les cellules par des minéraux', 'is_correct' => false],
                            ['choice_text' => 'arrêter la croissance', 'is_correct' => false],
                        ],
                        'explanation' => 'Le scale-up cherche à conserver les conditions critiques lors du passage à un volume supérieur.',
                    ],
                    [
                        'question' => 'Pourquoi surveille-t-on l\'oxygène dissous dans une culture aérobie ?',
                        'choices' => [
                            ['choice_text' => 'parce qu\'il influence la respiration, la croissance et la production', 'is_correct' => true],
                            ['choice_text' => 'parce qu\'il ne joue aucun rôle', 'is_correct' => false],
                            ['choice_text' => 'pour remplacer tous les nutriments', 'is_correct' => false],
                            ['choice_text' => 'pour produire directement de l\'ADN', 'is_correct' => false],
                        ],
                        'explanation' => 'L\'oxygène peut devenir un facteur limitant pour les cellules aérobies.',
                    ],
                ],
            ],
            [
                'title' => 'Applications médicales et agricoles',
                'description' => 'Usages de la biotechnologie dans la santé et l\'agriculture.',
                'settings' => ['duration' => 25, 'passing_score' => 65],
                'questions' => [
                    [
                        'question' => 'Une bactérie produisant de l\'insuline humaine grâce à un gène introduit illustre :',
                        'choices' => [
                            ['choice_text' => 'une application médicale de la biotechnologie', 'is_correct' => true],
                            ['choice_text' => 'une application géologique', 'is_correct' => false],
                            ['choice_text' => 'un phénomène météorologique', 'is_correct' => false],
                            ['choice_text' => 'une méthode de cartographie', 'is_correct' => false],
                        ],
                        'explanation' => 'La production de protéines thérapeutiques par des microorganismes est une application médicale.',
                    ],
                    [
                        'question' => 'Les anticorps monoclonaux peuvent être utilisés pour :',
                        'choices' => [
                            ['choice_text' => 'le diagnostic ou le traitement de certaines maladies', 'is_correct' => true],
                            ['choice_text' => 'former des roches', 'is_correct' => false],
                            ['choice_text' => 'fabriquer des combustibles fossiles', 'is_correct' => false],
                            ['choice_text' => 'mesurer le vent', 'is_correct' => false],
                        ],
                        'explanation' => 'Ils reconnaissent des cibles moléculaires précises et sont utilisés en médecine et en diagnostic.',
                    ],
                    [
                        'question' => 'La thérapie génique vise notamment à :',
                        'choices' => [
                            ['choice_text' => 'apporter, remplacer ou modifier une information génétique pour traiter certaines maladies', 'is_correct' => true],
                            ['choice_text' => 'remplacer tous les organes', 'is_correct' => false],
                            ['choice_text' => 'arrêter toute division cellulaire', 'is_correct' => false],
                            ['choice_text' => 'modifier toute une population', 'is_correct' => false],
                        ],
                        'explanation' => 'Elle cherche à corriger ou compenser certaines anomalies génétiques dans des cellules ciblées.',
                    ],
                    [
                        'question' => 'Un vaccin biotechnologique peut contenir :',
                        'choices' => [
                            ['choice_text' => 'un antigène ou une information permettant au système immunitaire de le reconnaître', 'is_correct' => true],
                            ['choice_text' => 'toujours un microorganisme vivant entier', 'is_correct' => false],
                            ['choice_text' => 'uniquement du glucose', 'is_correct' => false],
                            ['choice_text' => 'uniquement des cellules cancéreuses', 'is_correct' => false],
                        ],
                        'explanation' => 'Selon la technologie, le vaccin peut utiliser une protéine, un acide nucléique ou un vecteur.',
                    ],
                    [
                        'question' => 'Une plante modifiée pour résister à un insecte est une application de :',
                        'choices' => [
                            ['choice_text' => 'la biotechnologie agricole', 'is_correct' => true],
                            ['choice_text' => 'la géophysique', 'is_correct' => false],
                            ['choice_text' => 'la météorologie', 'is_correct' => false],
                            ['choice_text' => 'la paléontologie', 'is_correct' => false],
                        ],
                        'explanation' => 'Des caractères agronomiques peuvent être introduits ou modifiés grâce à des outils biotechnologiques.',
                    ],
                    [
                        'question' => 'Pourquoi une protéine thérapeutique doit-elle être purifiée après sa production ?',
                        'choices' => [
                            ['choice_text' => 'pour la séparer des autres composants du procédé', 'is_correct' => true],
                            ['choice_text' => 'pour créer un nouvel ADN', 'is_correct' => false],
                            ['choice_text' => 'pour la transformer en glucose', 'is_correct' => false],
                            ['choice_text' => 'pour détruire toutes les cellules', 'is_correct' => false],
                        ],
                        'explanation' => 'La purification élimine les impuretés avant l\'utilisation du produit.',
                    ],
                    [
                        'question' => 'Une technique utilisée pour amplifier une séquence virale ciblée est :',
                        'choices' => [
                            ['choice_text' => 'la PCR', 'is_correct' => true],
                            ['choice_text' => 'la photosynthèse', 'is_correct' => false],
                            ['choice_text' => 'la fermentation', 'is_correct' => false],
                            ['choice_text' => 'la cristallisation', 'is_correct' => false],
                        ],
                        'explanation' => 'La PCR permet d\'amplifier une séquence nucléique spécifique.',
                    ],
                    [
                        'question' => 'Une variété agricole résistante à une maladie peut présenter comme avantage :',
                        'choices' => [
                            ['choice_text' => 'réduire certaines pertes de rendement dans les conditions ciblées', 'is_correct' => true],
                            ['choice_text' => 'supprimer tout besoin en eau', 'is_correct' => false],
                            ['choice_text' => 'résister à tous les nuisibles', 'is_correct' => false],
                            ['choice_text' => 'pousser sans lumière', 'is_correct' => false],
                        ],
                        'explanation' => 'La résistance à une maladie donnée peut limiter les pertes mais reste dépendante du pathogène et du milieu.',
                    ],
                    [
                        'question' => 'Avant la mise sur le marché d\'un produit médical biotechnologique, il faut :',
                        'choices' => [
                            ['choice_text' => 'évaluer sa qualité, sa sécurité et son efficacité selon des procédures adaptées', 'is_correct' => true],
                            ['choice_text' => 'le distribuer sans test', 'is_correct' => false],
                            ['choice_text' => 'ignorer sa composition', 'is_correct' => false],
                            ['choice_text' => 'supprimer tout contrôle', 'is_correct' => false],
                        ],
                        'explanation' => 'Les produits médicaux font l\'objet d\'évaluations adaptées à leur nature et à leur usage.',
                    ],
                    [
                        'question' => 'La conservation de plusieurs variétés d\'une culture permet notamment de :',
                        'choices' => [
                            ['choice_text' => 'préserver une diversité génétique utile à l\'adaptation et à la sélection', 'is_correct' => true],
                            ['choice_text' => 'rendre toutes les plantes identiques', 'is_correct' => false],
                            ['choice_text' => 'empêcher toute reproduction', 'is_correct' => false],
                            ['choice_text' => 'supprimer toute variation', 'is_correct' => false],
                        ],
                        'explanation' => 'Plusieurs variétés peuvent conserver des caractères utiles face aux maladies ou aux changements du milieu.',
                    ],
                ],
            ],
            [
                'title' => 'Biotechnologie environnementale',
                'description' => 'Bioremédiation, épuration biologique et compostage.',
                'settings' => ['duration' => 20, 'passing_score' => 65],
                'questions' => [
                    [
                        'question' => 'La bioremédiation consiste à :',
                        'choices' => [
                            ['choice_text' => 'utiliser des organismes ou leurs activités pour réduire certains contaminants', 'is_correct' => true],
                            ['choice_text' => 'transformer toute pollution en eau potable instantanément', 'is_correct' => false],
                            ['choice_text' => 'utiliser uniquement des machines', 'is_correct' => false],
                            ['choice_text' => 'supprimer tous les microorganismes', 'is_correct' => false],
                        ],
                        'explanation' => 'La bioremédiation exploite des capacités biologiques pour dégrader, transformer ou immobiliser des polluants.',
                    ],
                    [
                        'question' => 'Dans une station d\'épuration biologique, les microorganismes servent à :',
                        'choices' => [
                            ['choice_text' => 'dégrader une partie de la matière organique des eaux usées', 'is_correct' => true],
                            ['choice_text' => 'produire des métaux lourds', 'is_correct' => false],
                            ['choice_text' => 'augmenter la pollution', 'is_correct' => false],
                            ['choice_text' => 'fabriquer des chromosomes humains', 'is_correct' => false],
                        ],
                        'explanation' => 'Les microorganismes utilisent la matière organique pour leur métabolisme et participent au traitement de l\'eau.',
                    ],
                    [
                        'question' => 'Un microorganisme qui dégrade un hydrocarbure peut servir à :',
                        'choices' => [
                            ['choice_text' => 'dépolluer certains sols ou certaines eaux', 'is_correct' => true],
                            ['choice_text' => 'fabriquer des os', 'is_correct' => false],
                            ['choice_text' => 'produire des plaques tectoniques', 'is_correct' => false],
                            ['choice_text' => 'augmenter la salinité des océans', 'is_correct' => false],
                        ],
                        'explanation' => 'Certaines bactéries utilisent des hydrocarbures comme substrats et contribuent à leur biodégradation.',
                    ],
                    [
                        'question' => 'Pourquoi faut-il contrôler les conditions d\'une bioremédiation ?',
                        'choices' => [
                            ['choice_text' => 'l\'activité microbienne dépend du pH, de la température, de l\'oxygène et des nutriments', 'is_correct' => true],
                            ['choice_text' => 'les microorganismes fonctionnent toujours de la même façon', 'is_correct' => false],
                            ['choice_text' => 'la pollution disparaît sans réaction', 'is_correct' => false],
                            ['choice_text' => 'pour empêcher toute activité biologique', 'is_correct' => false],
                        ],
                        'explanation' => 'Les performances d\'un procédé biologique dépendent fortement des conditions du milieu.',
                    ],
                    [
                        'question' => 'Dans un procédé aérobie, l\'oxygène peut :',
                        'choices' => [
                            ['choice_text' => 'favoriser l\'activité des microorganismes qui respirent avec l\'oxygène', 'is_correct' => true],
                            ['choice_text' => 'arrêter toutes les réactions', 'is_correct' => false],
                            ['choice_text' => 'supprimer les nutriments', 'is_correct' => false],
                            ['choice_text' => 'transformer les bactéries en virus', 'is_correct' => false],
                        ],
                        'explanation' => 'Les microorganismes aérobies utilisent l\'oxygène pour leur métabolisme.',
                    ],
                    [
                        'question' => 'Le compostage repose principalement sur :',
                        'choices' => [
                            ['choice_text' => 'la décomposition biologique contrôlée de matières organiques', 'is_correct' => true],
                            ['choice_text' => 'la fusion des métaux', 'is_correct' => false],
                            ['choice_text' => 'la formation de magma', 'is_correct' => false],
                            ['choice_text' => 'la fabrication de protéines humaines', 'is_correct' => false],
                        ],
                        'explanation' => 'Le compostage mobilise des microorganismes et autres décomposeurs.',
                    ],
                    [
                        'question' => 'Une station retire 20 % d\'une charge organique de 100 kg. Il reste :',
                        'choices' => [
                            ['choice_text' => '80 kg', 'is_correct' => true],
                            ['choice_text' => '20 kg', 'is_correct' => false],
                            ['choice_text' => '120 kg', 'is_correct' => false],
                            ['choice_text' => '50 kg', 'is_correct' => false],
                        ],
                        'explanation' => 'Retirer 20 % laisse 80 % : 100 × 0,80 = 80 kg.',
                    ],
                    [
                        'question' => 'La transformation biologique d\'un polluant en un autre composé est appelée :',
                        'choices' => [
                            ['choice_text' => 'biotransformation', 'is_correct' => true],
                            ['choice_text' => 'mitose', 'is_correct' => false],
                            ['choice_text' => 'fossilisation', 'is_correct' => false],
                            ['choice_text' => 'photosynthèse', 'is_correct' => false],
                        ],
                        'explanation' => 'La biotransformation est une modification chimique réalisée par une cellule, un organisme ou une enzyme.',
                    ],
                    [
                        'question' => 'Un avantage d\'une méthode biologique par rapport à une simple extraction est qu\'elle peut :',
                        'choices' => [
                            ['choice_text' => 'transformer chimiquement certains contaminants', 'is_correct' => true],
                            ['choice_text' => 'fonctionner sans aucune condition', 'is_correct' => false],
                            ['choice_text' => 'éliminer automatiquement tous les polluants', 'is_correct' => false],
                            ['choice_text' => 'ne nécessiter aucun suivi', 'is_correct' => false],
                        ],
                        'explanation' => 'Certains procédés biologiques détruisent ou transforment les contaminants au lieu de seulement les déplacer.',
                    ],
                    [
                        'question' => 'Avant d\'utiliser un microorganisme pour dépolluer un milieu, il faut étudier :',
                        'choices' => [
                            ['choice_text' => 'son efficacité et ses éventuels effets écologiques', 'is_correct' => true],
                            ['choice_text' => 'sa couleur seulement', 'is_correct' => false],
                            ['choice_text' => 'son nom latin seulement', 'is_correct' => false],
                            ['choice_text' => 'sa vitesse de croissance uniquement', 'is_correct' => false],
                        ],
                        'explanation' => 'Le choix du microorganisme doit considérer son efficacité, sa sécurité et son comportement dans le milieu.',
                    ],
                ],
            ],
            [
                'title' => 'Contrôle qualité et sécurité',
                'description' => 'Principes de contrôle, contamination, traçabilité et bonnes pratiques.',
                'settings' => ['duration' => 25, 'passing_score' => 70],
                'questions' => [
                    [
                        'question' => 'Le contrôle qualité sert notamment à :',
                        'choices' => [
                            ['choice_text' => 'vérifier que le procédé et le produit respectent des critères définis', 'is_correct' => true],
                            ['choice_text' => 'supprimer les mesures', 'is_correct' => false],
                            ['choice_text' => 'remplacer toutes les expériences', 'is_correct' => false],
                            ['choice_text' => 'garantir qu\'aucune variation existe', 'is_correct' => false],
                        ],
                        'explanation' => 'Le contrôle qualité compare les résultats à des spécifications établies.',
                    ],
                    [
                        'question' => 'Une contamination d\'une culture correspond à :',
                        'choices' => [
                            ['choice_text' => 'la présence indésirable d\'un organisme ou agent dans le système', 'is_correct' => true],
                            ['choice_text' => 'une augmentation volontaire de la production', 'is_correct' => false],
                            ['choice_text' => 'une amélioration garantie', 'is_correct' => false],
                            ['choice_text' => 'une mutation forcément bénéfique', 'is_correct' => false],
                        ],
                        'explanation' => 'Une contamination peut fausser les résultats et compromettre la production.',
                    ],
                    [
                        'question' => 'La traçabilité permet de :',
                        'choices' => [
                            ['choice_text' => 'suivre l\'origine, les étapes et les contrôles d\'un produit ou d\'un lot', 'is_correct' => true],
                            ['choice_text' => 'empêcher la documentation', 'is_correct' => false],
                            ['choice_text' => 'supprimer les contrôles', 'is_correct' => false],
                            ['choice_text' => 'remplacer toutes les normes', 'is_correct' => false],
                        ],
                        'explanation' => 'La traçabilité permet de retracer les matières et opérations associées à un produit.',
                    ],
                    [
                        'question' => 'Un lot contaminé est écarté afin de :',
                        'choices' => [
                            ['choice_text' => 'éviter qu\'un produit non conforme soit utilisé', 'is_correct' => true],
                            ['choice_text' => 'augmenter la production', 'is_correct' => false],
                            ['choice_text' => 'supprimer les microorganismes du monde', 'is_correct' => false],
                            ['choice_text' => 'modifier le génome humain', 'is_correct' => false],
                        ],
                        'explanation' => 'Le retrait d\'un lot protège l\'utilisateur et maintient les exigences de qualité.',
                    ],
                    [
                        'question' => 'Les équipements de protection servent notamment à :',
                        'choices' => [
                            ['choice_text' => 'réduire l\'exposition de l\'opérateur aux risques', 'is_correct' => true],
                            ['choice_text' => 'accélérer toutes les réactions', 'is_correct' => false],
                            ['choice_text' => 'remplacer la désinfection', 'is_correct' => false],
                            ['choice_text' => 'empêcher toute manipulation', 'is_correct' => false],
                        ],
                        'explanation' => 'Les équipements de protection font partie des mesures de maîtrise des risques.',
                    ],
                    [
                        'question' => 'Une procédure opératoire standardisée permet :',
                        'choices' => [
                            ['choice_text' => 'de réaliser une opération de façon reproductible et contrôlée', 'is_correct' => true],
                            ['choice_text' => 'de supprimer toute formation', 'is_correct' => false],
                            ['choice_text' => 'd\'empêcher les mesures', 'is_correct' => false],
                            ['choice_text' => 'de rendre chaque essai différent', 'is_correct' => false],
                        ],
                        'explanation' => 'Une procédure standard réduit les variations inutiles et améliore la reproductibilité.',
                    ],
                    [
                        'question' => 'Un témoin positif sert notamment à :',
                        'choices' => [
                            ['choice_text' => 'vérifier que la méthode détecte correctement un résultat connu', 'is_correct' => true],
                            ['choice_text' => 'prouver que l\'échantillon est négatif', 'is_correct' => false],
                            ['choice_text' => 'remplacer le témoin négatif', 'is_correct' => false],
                            ['choice_text' => 'supprimer les contrôles', 'is_correct' => false],
                        ],
                        'explanation' => 'Le témoin positif doit donner le résultat attendu lorsque la méthode fonctionne.',
                    ],
                    [
                        'question' => 'Un témoin négatif permet notamment de vérifier :',
                        'choices' => [
                            ['choice_text' => 'qu\'un signal n\'apparaît pas en absence de la cible', 'is_correct' => true],
                            ['choice_text' => 'que la cible est toujours présente', 'is_correct' => false],
                            ['choice_text' => 'que la concentration est maximale', 'is_correct' => false],
                            ['choice_text' => 'que la cellule produit une protéine', 'is_correct' => false],
                        ],
                        'explanation' => 'Le témoin négatif aide à détecter une contamination ou un signal non spécifique.',
                    ],
                    [
                        'question' => 'Répéter une mesure permet notamment d\'estimer :',
                        'choices' => [
                            ['choice_text' => 'la variabilité expérimentale', 'is_correct' => true],
                            ['choice_text' => 'la séquence complète du génome', 'is_correct' => false],
                            ['choice_text' => 'la taille des chromosomes', 'is_correct' => false],
                            ['choice_text' => 'la température de la planète', 'is_correct' => false],
                        ],
                        'explanation' => 'Les répétitions permettent d\'évaluer la dispersion des résultats et la reproductibilité.',
                    ],
                    [
                        'question' => 'Une biotechnologie responsable doit notamment :',
                        'choices' => [
                            ['choice_text' => 'évaluer les risques et respecter les règles de sécurité et de qualité', 'is_correct' => true],
                            ['choice_text' => 'ignorer les effets secondaires', 'is_correct' => false],
                            ['choice_text' => 'supprimer toute vérification', 'is_correct' => false],
                            ['choice_text' => 'utiliser un système sans caractérisation', 'is_correct' => false],
                        ],
                        'explanation' => 'Les bénéfices doivent être accompagnés d\'une évaluation des risques, de la qualité et des impacts pertinents.',
                    ],
                ],
            ],
            [
                'title' => 'Révision générale de biotechnologie',
                'description' => 'Synthèse des notions essentielles et des applications principales.',
                'settings' => ['duration' => 25, 'passing_score' => 70],
                'questions' => [
                    [
                        'question' => 'Quelle association est correcte ?',
                        'choices' => [
                            ['choice_text' => 'PCR — amplification d\'une séquence d\'ADN', 'is_correct' => true],
                            ['choice_text' => 'ligase — dégradation du glucose', 'is_correct' => false],
                            ['choice_text' => 'plasmide — hormone', 'is_correct' => false],
                            ['choice_text' => 'bioréacteur — microscope', 'is_correct' => false],
                        ],
                        'explanation' => 'La PCR amplifie une séquence ciblée d\'ADN.',
                    ],
                    [
                        'question' => 'Après découpe d\'un plasmide et d\'un fragment d\'ADN, l\'enzyme qui aide à les relier est :',
                        'choices' => [
                            ['choice_text' => 'l\'ADN ligase', 'is_correct' => true],
                            ['choice_text' => 'une lipase', 'is_correct' => false],
                            ['choice_text' => 'une amylase', 'is_correct' => false],
                            ['choice_text' => 'une protéase', 'is_correct' => false],
                        ],
                        'explanation' => 'L\'ADN ligase relie les fragments d\'ADN compatibles.',
                    ],
                    [
                        'question' => 'Une PCR commence avec 2 copies et réalise 4 cycles avec doublement parfait. Le résultat théorique est :',
                        'choices' => [
                            ['choice_text' => '32 copies', 'is_correct' => true],
                            ['choice_text' => '8 copies', 'is_correct' => false],
                            ['choice_text' => '16 copies', 'is_correct' => false],
                            ['choice_text' => '64 copies', 'is_correct' => false],
                        ],
                        'explanation' => '2 × 2^4 = 32 copies.',
                    ],
                    [
                        'question' => 'Une culture produit 5 g de protéine dans 10 L. La concentration moyenne est :',
                        'choices' => [
                            ['choice_text' => '0,5 g/L', 'is_correct' => true],
                            ['choice_text' => '5 g/L', 'is_correct' => false],
                            ['choice_text' => '0,05 g/L', 'is_correct' => false],
                            ['choice_text' => '50 g/L', 'is_correct' => false],
                        ],
                        'explanation' => '5 ÷ 10 = 0,5 g/L.',
                    ],
                    [
                        'question' => 'Un produit médical biotechnologique doit être contrôlé pour :',
                        'choices' => [
                            ['choice_text' => 'sa qualité, sa sécurité et son efficacité', 'is_correct' => true],
                            ['choice_text' => 'sa couleur seulement', 'is_correct' => false],
                            ['choice_text' => 'son prix seulement', 'is_correct' => false],
                            ['choice_text' => 'sa vitesse de croissance', 'is_correct' => false],
                        ],
                        'explanation' => 'Les produits médicaux doivent satisfaire à des exigences adaptées de qualité, sécurité et efficacité.',
                    ],
                    [
                        'question' => 'La bioremédiation exploite :',
                        'choices' => [
                            ['choice_text' => 'l\'activité biologique pour traiter certains contaminants', 'is_correct' => true],
                            ['choice_text' => 'uniquement la fusion de roches', 'is_correct' => false],
                            ['choice_text' => 'uniquement des champs électriques', 'is_correct' => false],
                            ['choice_text' => 'uniquement la combustion', 'is_correct' => false],
                        ],
                        'explanation' => 'La bioremédiation utilise des organismes ou enzymes pour transformer ou immobiliser certains polluants.',
                    ],
                    [
                        'question' => 'Un plasmide vecteur sert notamment à :',
                        'choices' => [
                            ['choice_text' => 'porter une séquence d\'intérêt et être maintenu dans une cellule hôte', 'is_correct' => true],
                            ['choice_text' => 'remplacer toutes les protéines', 'is_correct' => false],
                            ['choice_text' => 'supprimer tout ADN', 'is_correct' => false],
                            ['choice_text' => 'produire directement de l\'ATP', 'is_correct' => false],
                        ],
                        'explanation' => 'Un vecteur génétique sert de support à une séquence et possède des éléments utiles à son maintien ou son expression.',
                    ],
                    [
                        'question' => 'Pourquoi un témoin négatif est-il important en analyse moléculaire ?',
                        'choices' => [
                            ['choice_text' => 'pour repérer un signal qui apparaîtrait même sans cible', 'is_correct' => true],
                            ['choice_text' => 'pour augmenter la quantité de cible', 'is_correct' => false],
                            ['choice_text' => 'pour remplacer le contrôle positif', 'is_correct' => false],
                            ['choice_text' => 'pour fabriquer les enzymes', 'is_correct' => false],
                        ],
                        'explanation' => 'Le témoin négatif aide à repérer les contaminations et signaux non spécifiques.',
                    ],
                    [
                        'question' => 'Passer d\'une culture de 2 L à 2 000 L correspond à :',
                        'choices' => [
                            ['choice_text' => 'une montée en échelle du procédé', 'is_correct' => true],
                            ['choice_text' => 'une mutation', 'is_correct' => false],
                            ['choice_text' => 'une datation', 'is_correct' => false],
                            ['choice_text' => 'une purification', 'is_correct' => false],
                        ],
                        'explanation' => 'Le scale-up augmente l\'échelle de production tout en cherchant à conserver les paramètres critiques.',
                    ],
                    [
                        'question' => 'Quel énoncé résume le mieux la biotechnologie ?',
                        'choices' => [
                            ['choice_text' => 'elle utilise des systèmes biologiques pour produire, diagnostiquer, modifier ou traiter des problèmes ciblés', 'is_correct' => true],
                            ['choice_text' => 'elle concerne uniquement les animaux sauvages', 'is_correct' => false],
                            ['choice_text' => 'elle ne concerne que les aliments', 'is_correct' => false],
                            ['choice_text' => 'elle exclut l\'utilisation de l\'ADN', 'is_correct' => false],
                        ],
                        'explanation' => 'La biotechnologie regroupe des applications médicales, agricoles, industrielles et environnementales.',
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
