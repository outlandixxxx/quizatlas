<?php

namespace Database\Seeders;

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
                        'question' => 'En cours, Leïla note que la biotechnologie consiste à utiliser :',
                        'choices' => [
                            ['choice_text' => 'des réactions de chimie de synthèse qui imitent le vivant sans y recourir', 'is_correct' => false],
                            ['choice_text' => 'des cellules, des organismes ou des molécules du vivant pour fabriquer un produit ou rendre un service', 'is_correct' => true],
                            ['choice_text' => 'des machines automatisées qui remplacent les êtres vivants dans les usines', 'is_correct' => false],
                            ['choice_text' => 'des méthodes d’observation qui décrivent les êtres vivants sans agir sur eux', 'is_correct' => false],
                        ],
                        'explanation' => 'On met le vivant au travail : une levure, une enzyme ou une bactérie devient l’outil qui fabrique ou détecte quelque chose.',
                    ],
                    [
                        'question' => 'Pour faire lever sa pâte, Hamza ajoute de la levure de boulanger. Cet ingrédient est :',
                        'choices' => [
                            ['choice_text' => 'une poudre minérale qui libère du gaz au contact de l’eau et de la chaleur', 'is_correct' => false],
                            ['choice_text' => 'une bactérie lactique qui transforme l’amidon en sucre', 'is_correct' => false],
                            ['choice_text' => 'une enzyme purifiée qui découpe les protéines du gluten', 'is_correct' => false],
                            ['choice_text' => 'un champignon unicellulaire qui fermente les sucres de la pâte', 'is_correct' => true],
                        ],
                        'explanation' => 'La levure de boulanger est un champignon microscopique ; en fermentant les sucres, elle produit le gaz carbonique qui fait gonfler la pâte.',
                    ],
                    [
                        'question' => 'Une laiterie fabrique du yaourt. Pour cela, elle ensemence le lait avec :',
                        'choices' => [
                            ['choice_text' => 'des bactéries lactiques qui transforment le lactose en acide lactique', 'is_correct' => true],
                            ['choice_text' => 'des moisissures qui affinent la croûte du fromage et développent son arôme', 'is_correct' => false],
                            ['choice_text' => 'des levures qui transforment le lactose en alcool', 'is_correct' => false],
                            ['choice_text' => 'des virus qui font coaguler la caséine du lait', 'is_correct' => false],
                        ],
                        'explanation' => 'Les bactéries lactiques fermentent le lactose en acide lactique : le lait caille et prend son goût acidulé.',
                    ],
                    [
                        'question' => 'Un laboratoire insère le gène humain de l’insuline dans une bactérie pour qu’elle en fabrique. Ce travail relève de la biotechnologie :',
                        'choices' => [
                            ['choice_text' => 'agricole', 'is_correct' => false],
                            ['choice_text' => 'environnementale', 'is_correct' => false],
                            ['choice_text' => 'médicale', 'is_correct' => true],
                            ['choice_text' => 'alimentaire', 'is_correct' => false],
                        ],
                        'explanation' => 'La bactérie devient une usine à insuline, donc à médicament : c’est de la biotechnologie médicale.',
                    ],
                    [
                        'question' => 'Qu’est-ce qui fait d’un organisme un OGM ?',
                        'choices' => [
                            ['choice_text' => 'il a été croisé avec une autre variété de la même espèce, par sélection classique', 'is_correct' => false],
                            ['choice_text' => 'il a subi une mutation naturelle apparue au hasard', 'is_correct' => false],
                            ['choice_text' => 'il a été élevé dans un milieu artificiel contrôlé', 'is_correct' => false],
                            ['choice_text' => 'son matériel génétique a été modifié par une intervention de génie génétique', 'is_correct' => true],
                        ],
                        'explanation' => 'C’est l’intervention directe sur le génome, comme l’ajout d’un gène, qui fait l’OGM. Un croisement classique ou une mutation spontanée ne suffisent pas.',
                    ],
                    [
                        'question' => 'La biotechnologie environnementale peut servir à :',
                        'choices' => [
                            ['choice_text' => 'mesurer la teneur en ozone de l’atmosphère', 'is_correct' => false],
                            ['choice_text' => 'faire dégrader certains polluants par des microorganismes', 'is_correct' => true],
                            ['choice_text' => 'fabriquer des engrais par synthèse chimique', 'is_correct' => false],
                            ['choice_text' => 'dater des couches de sédiments par analyse isotopique du carbone', 'is_correct' => false],
                        ],
                        'explanation' => 'Des bactéries ou des champignons peuvent transformer des polluants, comme des hydrocarbures, en molécules moins nocives.',
                    ],
                    [
                        'question' => 'Dans l’atelier de Yassine, la cuve d’un bioréacteur permet de :',
                        'choices' => [
                            ['choice_text' => 'cultiver des cellules ou des microorganismes dans des conditions maîtrisées', 'is_correct' => true],
                            ['choice_text' => 'stériliser des instruments avant leur utilisation', 'is_correct' => false],
                            ['choice_text' => 'conserver des échantillons à très basse température', 'is_correct' => false],
                            ['choice_text' => 'séparer les différents composants d’un mélange biologique par centrifugation', 'is_correct' => false],
                        ],
                        'explanation' => 'On y règle la température, le pH et l’oxygène pour que la culture pousse et produise dans de bonnes conditions.',
                    ],
                    [
                        'question' => 'Parmi ces produits, lequel est couramment fabriqué par des microorganismes à l’échelle industrielle ?',
                        'choices' => [
                            ['choice_text' => 'des fibres textiles synthétiques comme le nylon, le polyester ou l’acrylique', 'is_correct' => false],
                            ['choice_text' => 'des carburants fossiles comme l’essence', 'is_correct' => false],
                            ['choice_text' => 'des enzymes utilisées dans les lessives ou l’industrie laitière', 'is_correct' => true],
                            ['choice_text' => 'des plastiques dérivés du pétrole', 'is_correct' => false],
                        ],
                        'explanation' => 'Bactéries et champignons cultivés en cuve produisent des enzymes en grande quantité, que les industriels achètent ensuite.',
                    ],
                    [
                        'question' => 'La bioproduction consiste à :',
                        'choices' => [
                            ['choice_text' => 'extraire un minerai d’un gisement par forage', 'is_correct' => false],
                            ['choice_text' => 'fabriquer une molécule ou un matériau grâce à un système biologique', 'is_correct' => true],
                            ['choice_text' => 'obtenir un composé par synthèse chimique dans un réacteur sans cellules', 'is_correct' => false],
                            ['choice_text' => 'mesurer l’activité d’une culture avec un capteur', 'is_correct' => false],
                        ],
                        'explanation' => 'Cellules, enzymes ou microorganismes servent d’usine : insuline, vaccins ou certains plastiques biosourcés en sont des exemples.',
                    ],
                    [
                        'question' => 'Laquelle de ces pratiques anciennes relève déjà de la biotechnologie, même sans microscope ?',
                        'choices' => [
                            ['choice_text' => 'faire du vin ou du fromage grâce à des microorganismes', 'is_correct' => true],
                            ['choice_text' => 'tailler un silex pour fabriquer un outil', 'is_correct' => false],
                            ['choice_text' => 'irriguer un champ avec des canaux', 'is_correct' => false],
                            ['choice_text' => 'forger du fer au feu', 'is_correct' => false],
                        ],
                        'explanation' => 'Brasser, fermenter ou affiner un fromage, c’est déjà exploiter des microorganismes, bien avant que le mot biotechnologie existe.',
                    ],
                ],
            ],
            [
                'title' => 'ADN recombinant et génie génétique',
                'description' => 'Vecteurs, enzymes de restriction et clonage moléculaire.',
                'settings' => ['duration' => 20, 'passing_score' => 55],
                'questions' => [
                    [
                        'question' => 'Un fragment d’ADN humain est assemblé avec de l’ADN bactérien dans une même molécule. On l’appelle :',
                        'choices' => [
                            ['choice_text' => 'un ADN mitochondrial', 'is_correct' => false],
                            ['choice_text' => 'un ARN de transfert', 'is_correct' => false],
                            ['choice_text' => 'un ADN recombinant', 'is_correct' => true],
                            ['choice_text' => 'un ARN messager', 'is_correct' => false],
                        ],
                        'explanation' => 'Assembler des fragments d’origines différentes en une seule molécule donne un ADN recombinant.',
                    ],
                    [
                        'question' => 'Les enzymes de restriction, comme EcoRI, servent à :',
                        'choices' => [
                            ['choice_text' => 'couper l’ADN au niveau de séquences précises', 'is_correct' => true],
                            ['choice_text' => 'relier deux fragments d’ADN entre eux', 'is_correct' => false],
                            ['choice_text' => 'copier un brin d’ADN à partir d’une amorce', 'is_correct' => false],
                            ['choice_text' => 'lire l’ARN messager pour fabriquer une protéine', 'is_correct' => false],
                        ],
                        'explanation' => 'Chaque enzyme reconnaît une courte séquence et coupe l’ADN à cet endroit : ce sont les ciseaux du génie génétique.',
                    ],
                    [
                        'question' => 'L’ADN ligase permet de :',
                        'choices' => [
                            ['choice_text' => 'couper l’ADN à des séquences précises', 'is_correct' => false],
                            ['choice_text' => 'séparer les deux brins de la double hélice', 'is_correct' => false],
                            ['choice_text' => 'copier l’ADN à partir d’une amorce', 'is_correct' => false],
                            ['choice_text' => 'relier des fragments d’ADN entre eux', 'is_correct' => true],
                        ],
                        'explanation' => 'La ligase soude les fragments d’ADN bout à bout ; c’est la colle qui complète le travail des enzymes de restriction.',
                    ],
                    [
                        'question' => 'Pour introduire un gène dans E. coli, un technicien utilise un plasmide. Celui-ci joue le rôle de :',
                        'choices' => [
                            ['choice_text' => 'ciseaux qui découpent le gène à introduire', 'is_correct' => false],
                            ['choice_text' => 'vecteur qui transporte le gène dans la bactérie', 'is_correct' => true],
                            ['choice_text' => 'colle qui relie les fragments d’ADN', 'is_correct' => false],
                            ['choice_text' => 'amorce qui lance la copie du gène', 'is_correct' => false],
                        ],
                        'explanation' => 'Le plasmide sert de véhicule : il porte le gène et se maintient dans la bactérie hôte.',
                    ],
                    [
                        'question' => 'Pour qu’une bactérie fabrique une protéine humaine, on doit :',
                        'choices' => [
                            ['choice_text' => 'remplacer son ADN par un chromosome humain complet', 'is_correct' => false],
                            ['choice_text' => 'ajouter des acides aminés humains dans son milieu de culture', 'is_correct' => false],
                            ['choice_text' => 'lui apporter le gène sous une forme qu’elle sait exprimer', 'is_correct' => true],
                            ['choice_text' => 'la mettre en contact direct avec des cellules humaines', 'is_correct' => false],
                        ],
                        'explanation' => 'La bactérie lit le gène qu’on lui a transmis et fabrique la protéine correspondante, comme si c’était l’une des siennes.',
                    ],
                    [
                        'question' => 'Après transformation, seules les bactéries qui portent le plasmide survivent sur une boîte contenant un antibiotique. Le gène de résistance joue le rôle de :',
                        'choices' => [
                            ['choice_text' => 'marqueur de sélection', 'is_correct' => true],
                            ['choice_text' => 'promoteur', 'is_correct' => false],
                            ['choice_text' => 'origine de réplication', 'is_correct' => false],
                            ['choice_text' => 'site de restriction', 'is_correct' => false],
                        ],
                        'explanation' => 'La résistance à l’antibiotique trie les bactéries : celles sans plasmide meurent, les autres forment des colonies.',
                    ],
                    [
                        'question' => 'Le clonage moléculaire d’un gène permet d’obtenir :',
                        'choices' => [
                            ['choice_text' => 'un animal entier identique à celui qui a fourni le gène', 'is_correct' => false],
                            ['choice_text' => 'de nombreuses copies identiques de ce gène', 'is_correct' => true],
                            ['choice_text' => 'une version mutée de ce gène', 'is_correct' => false],
                            ['choice_text' => 'la liste des nucléotides de ce gène', 'is_correct' => false],
                        ],
                        'explanation' => 'Le gène est copié en grand nombre dans des bactéries, ce qui fournit assez d’ADN pour l’étudier ou l’utiliser.',
                    ],
                    [
                        'question' => 'Nadia a inséré un gène dans un plasmide. Pour vérifier que l’insert est bien là, elle peut :',
                        'choices' => [
                            ['choice_text' => 'compter les bactéries au microscope', 'is_correct' => false],
                            ['choice_text' => 'mesurer la turbidité de la culture', 'is_correct' => false],
                            ['choice_text' => 'doser les protéines totales de la bactérie', 'is_correct' => false],
                            ['choice_text' => 'séquencer le plasmide ou le digérer avec des enzymes de restriction', 'is_correct' => true],
                        ],
                        'explanation' => 'Lire la séquence ou couper avec des enzymes de restriction montre directement si le fragment attendu est présent.',
                    ],
                    [
                        'question' => 'Un plasmide circulaire n’a qu’un seul site de coupure pour une enzyme de restriction. Après digestion complète, il devient :',
                        'choices' => [
                            ['choice_text' => 'une molécule linéaire', 'is_correct' => true],
                            ['choice_text' => 'deux petits cercles d’ADN', 'is_correct' => false],
                            ['choice_text' => 'un plasmide circulaire plus grand', 'is_correct' => false],
                            ['choice_text' => 'un brin d’ARN messager', 'is_correct' => false],
                        ],
                        'explanation' => 'Une seule coupure ouvre le cercle : le plasmide devient un fragment linéaire, prêt à recevoir un insert.',
                    ],
                    [
                        'question' => 'Un plasmide de 3000 paires de bases reçoit un insert de 1200 paires de bases, sans perte de séquence. Le plasmide recombinant mesure :',
                        'choices' => [
                            ['choice_text' => '1800 paires de bases', 'is_correct' => false],
                            ['choice_text' => '3000 paires de bases', 'is_correct' => false],
                            ['choice_text' => '4200 paires de bases', 'is_correct' => true],
                            ['choice_text' => '3600 paires de bases', 'is_correct' => false],
                        ],
                        'explanation' => 'On additionne les tailles : 3000 + 1200 = 4200 paires de bases.',
                    ],
                ],
            ],
            [
                'title' => 'PCR et amplification de l\'ADN',
                'description' => 'Principe, étapes et interprétation simple de la PCR.',
                'settings' => ['duration' => 20, 'passing_score' => 60],
                'questions' => [
                    [
                        'question' => 'La PCR sert à :',
                        'choices' => [
                            ['choice_text' => 'lire la séquence complète d’un génome', 'is_correct' => false],
                            ['choice_text' => 'séparer des fragments d’ADN selon leur taille', 'is_correct' => false],
                            ['choice_text' => 'fabriquer une protéine à partir d’un ARN messager et de ribosomes', 'is_correct' => false],
                            ['choice_text' => 'obtenir un très grand nombre de copies d’une région précise d’ADN', 'is_correct' => true],
                        ],
                        'explanation' => 'En quelques heures, la PCR multiplie une région d’ADN choisie, ce qui permet de l’analyser ou de la détecter.',
                    ],
                    [
                        'question' => 'Dans un cycle de PCR, les deux brins d’ADN sont d’abord séparés par chauffage. Cette étape s’appelle :',
                        'choices' => [
                            ['choice_text' => 'l’hybridation', 'is_correct' => false],
                            ['choice_text' => 'la dénaturation', 'is_correct' => true],
                            ['choice_text' => 'l’élongation', 'is_correct' => false],
                            ['choice_text' => 'la ligature', 'is_correct' => false],
                        ],
                        'explanation' => 'Vers 95 °C, les liaisons entre les deux brins cèdent : l’ADN devient simple brin et les amorces pourront s’y fixer.',
                    ],
                    [
                        'question' => 'Les amorces d’une PCR servent à :',
                        'choices' => [
                            ['choice_text' => 'encadrer la région à copier et fournir un point de départ à la polymérase', 'is_correct' => true],
                            ['choice_text' => 'découper l’ADN de part et d’autre de la région cible avec une enzyme de restriction', 'is_correct' => false],
                            ['choice_text' => 'relier entre elles les copies synthétisées', 'is_correct' => false],
                            ['choice_text' => 'apporter les nucléotides nécessaires à la synthèse', 'is_correct' => false],
                        ],
                        'explanation' => 'Les amorces se fixent de chaque côté de la région visée ; la polymérase démarre la copie à partir d’elles.',
                    ],
                    [
                        'question' => 'Pendant l’élongation, l’ADN polymérase :',
                        'choices' => [
                            ['choice_text' => 'sépare les deux brins de la molécule d’ADN', 'is_correct' => false],
                            ['choice_text' => 'fixe les amorces sur leurs séquences complémentaires après la dénaturation', 'is_correct' => false],
                            ['choice_text' => 'allonge le nouveau brin en ajoutant des nucléotides à partir de l’amorce', 'is_correct' => true],
                            ['choice_text' => 'relie des fragments d’ADN par des liaisons', 'is_correct' => false],
                        ],
                        'explanation' => 'À partir de chaque amorce, l’enzyme ajoute un à un les nucléotides complémentaires du brin matrice.',
                    ],
                    [
                        'question' => 'En théorie, la quantité d’ADN cible au fil des cycles d’une PCR :',
                        'choices' => [
                            ['choice_text' => 'double à chaque cycle, d’où une croissance exponentielle', 'is_correct' => true],
                            ['choice_text' => 'augmente d’une même quantité fixe à chaque cycle, sans s’accélérer', 'is_correct' => false],
                            ['choice_text' => 'triple à chaque cycle', 'is_correct' => false],
                            ['choice_text' => 'diminue à mesure que les amorces s’épuisent', 'is_correct' => false],
                        ],
                        'explanation' => 'Chaque molécule cible donne deux copies à chaque cycle, donc 2, 4, 8, 16… : c’est une croissance exponentielle.',
                    ],
                    [
                        'question' => 'Une seule molécule d’ADN cible subit 5 cycles de PCR avec un doublement parfait à chaque cycle. Elle donne :',
                        'choices' => [
                            ['choice_text' => '10 copies', 'is_correct' => false],
                            ['choice_text' => '16 copies', 'is_correct' => false],
                            ['choice_text' => '25 copies', 'is_correct' => false],
                            ['choice_text' => '32 copies', 'is_correct' => true],
                        ],
                        'explanation' => 'Le calcul est 1 × 2^5 = 32 copies.',
                    ],
                    [
                        'question' => 'Sur le gel de Samira, l’échantillon du patient donne une bande à la taille attendue ; le tube sans ADN n’en donne aucune. On en conclut que :',
                        'choices' => [
                            ['choice_text' => 'l’échantillon a contaminé le témoin', 'is_correct' => false],
                            ['choice_text' => 'la réaction n’a pas fonctionné', 'is_correct' => false],
                            ['choice_text' => 'la séquence cible est présente dans l’échantillon', 'is_correct' => true],
                            ['choice_text' => 'le témoin contient lui aussi la cible', 'is_correct' => false],
                        ],
                        'explanation' => 'Une bande à la bonne taille avec un témoin propre indique que la cible a bien été amplifiée à partir de l’échantillon.',
                    ],
                    [
                        'question' => 'Quel atout fait de la Taq polymérase l’enzyme de choix en PCR ?',
                        'choices' => [
                            ['choice_text' => 'elle synthétise l’ADN sans avoir besoin d’amorces', 'is_correct' => false],
                            ['choice_text' => 'elle supporte les températures proches de 95 °C sans se dénaturer', 'is_correct' => true],
                            ['choice_text' => 'elle coupe l’ADN à des séquences précises', 'is_correct' => false],
                            ['choice_text' => 'elle est extraite de cellules humaines cultivées en laboratoire', 'is_correct' => false],
                        ],
                        'explanation' => 'Issue d’une bactérie de sources chaudes, la Taq reste active après chaque chauffage ; inutile d’en rajouter à chaque cycle.',
                    ],
                    [
                        'question' => 'Une machine à PCR enchaîne 30 cycles de 3 minutes chacun. Le programme dure :',
                        'choices' => [
                            ['choice_text' => '60 minutes', 'is_correct' => false],
                            ['choice_text' => '33 minutes', 'is_correct' => false],
                            ['choice_text' => '120 minutes', 'is_correct' => false],
                            ['choice_text' => '90 minutes', 'is_correct' => true],
                        ],
                        'explanation' => '30 × 3 = 90 minutes, soit 1 h 30.',
                    ],
                    [
                        'question' => 'Après une PCR, Rayan dépose ses produits sur un gel d’agarose. Les fragments les plus courts :',
                        'choices' => [
                            ['choice_text' => 'restent près du puits de dépôt', 'is_correct' => false],
                            ['choice_text' => 'migrent plus loin que les fragments longs', 'is_correct' => true],
                            ['choice_text' => 'migrent à la même vitesse que les fragments longs', 'is_correct' => false],
                            ['choice_text' => 'se dirigent vers l’électrode négative', 'is_correct' => false],
                        ],
                        'explanation' => 'Les petits fragments se faufilent plus vite dans le gel : ils parcourent une plus grande distance que les longs.',
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
                            ['choice_text' => 'faire vivre et multiplier des cellules hors de l’organisme, dans un milieu contrôlé', 'is_correct' => true],
                            ['choice_text' => 'conserver des cellules congelées dans l’azote liquide pendant plusieurs années pour les réutiliser', 'is_correct' => false],
                            ['choice_text' => 'prélever un tissu pour l’examiner au microscope', 'is_correct' => false],
                            ['choice_text' => 'ensemencer un sol avec des microorganismes choisis', 'is_correct' => false],
                        ],
                        'explanation' => 'Les cellules reçoivent nutriments, température et gaz adaptés, et se divisent dans un flacon plutôt que dans un organisme.',
                    ],
                    [
                        'question' => 'Un milieu de culture apporte aux cellules :',
                        'choices' => [
                            ['choice_text' => 'des anticorps qui les protègent des infections', 'is_correct' => false],
                            ['choice_text' => 'des plasmides qui modifient leur ADN', 'is_correct' => false],
                            ['choice_text' => 'les nutriments et les conditions physico-chimiques dont elles ont besoin', 'is_correct' => true],
                            ['choice_text' => 'des cellules de remplacement qui prennent le relais quand les premières meurent', 'is_correct' => false],
                        ],
                        'explanation' => 'Sucres, acides aminés, sels et un pH adapté : le milieu remplace ce que l’organisme fournirait.',
                    ],
                    [
                        'question' => 'Chloé manipule ses cellules sous une hotte stérile. Son objectif est de :',
                        'choices' => [
                            ['choice_text' => 'ralentir la division des cellules', 'is_correct' => false],
                            ['choice_text' => 'éviter qu’une bactérie ou un champignon contamine la culture', 'is_correct' => true],
                            ['choice_text' => 'maintenir le milieu à 37 °C', 'is_correct' => false],
                            ['choice_text' => 'empêcher les cellules de s’échapper du flacon et de se disperser dans la pièce', 'is_correct' => false],
                        ],
                        'explanation' => 'Un seul contaminant peut envahir la culture et fausser les résultats ; la stérilité protège plusieurs jours de travail.',
                    ],
                    [
                        'question' => 'Pour que ses cellules produisent bien, Anis surveille dans le bioréacteur :',
                        'choices' => [
                            ['choice_text' => 'la séquence d’ADN des cellules, relue chaque heure', 'is_correct' => false],
                            ['choice_text' => 'la forme de chaque cellule au microscope électronique', 'is_correct' => false],
                            ['choice_text' => 'le nombre de chromosomes de chaque cellule', 'is_correct' => false],
                            ['choice_text' => 'le pH, la température et l’oxygène dissous', 'is_correct' => true],
                        ],
                        'explanation' => 'Ce sont les paramètres que le bioréacteur mesure et corrige en continu pour garder la culture productive.',
                    ],
                    [
                        'question' => 'Le lot de protéine d’Amal est inférieur à l’objectif. Quel facteur peut l’expliquer ?',
                        'choices' => [
                            ['choice_text' => 'un étiquetage du flacon fait à la main', 'is_correct' => false],
                            ['choice_text' => 'un pH ou une oxygénation mal réglés qui ont freiné la croissance des cellules', 'is_correct' => true],
                            ['choice_text' => 'un séquençage du plasmide réalisé deux semaines après la fin de la production', 'is_correct' => false],
                            ['choice_text' => 'une pesée du milieu faite en fin de journée', 'is_correct' => false],
                        ],
                        'explanation' => 'Moins de cellules, ou des cellules moins actives, donnent moins de protéine ; pH et oxygène sont les premiers suspects.',
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
                        'question' => 'Si le pH du milieu devient trop acide, la culture risque de :',
                        'choices' => [
                            ['choice_text' => 'croître plus vite, car les nutriments se dissolvent mieux', 'is_correct' => false],
                            ['choice_text' => 'rester inchangée, car les cellules ignorent le pH du milieu', 'is_correct' => false],
                            ['choice_text' => 'perdre ses nutriments par évaporation', 'is_correct' => false],
                            ['choice_text' => 'ralentir sa croissance, voire perdre des cellules', 'is_correct' => true],
                        ],
                        'explanation' => 'Chaque type de cellule tolère une plage de pH limitée ; en dehors, la division ralentit et les cellules meurent.',
                    ],
                    [
                        'question' => 'Des cellules cultivées en suspension :',
                        'choices' => [
                            ['choice_text' => 'doivent adhérer au fond de la boîte pour se diviser', 'is_correct' => false],
                            ['choice_text' => 'forment une couche unique collée au plastique', 'is_correct' => false],
                            ['choice_text' => 'vivent librement dans le liquide sans se fixer à une surface', 'is_correct' => true],
                            ['choice_text' => 'sont conservées congelées dans le milieu', 'is_correct' => false],
                        ],
                        'explanation' => 'Les cellules en suspension flottent dans le milieu, ce qui facilite la culture en cuve agitée.',
                    ],
                    [
                        'question' => 'Passer d’un flacon de 500 mL à une cuve de 500 L en gardant les mêmes conditions de culture s’appelle :',
                        'choices' => [
                            ['choice_text' => 'la montée en échelle', 'is_correct' => true],
                            ['choice_text' => 'la purification du produit', 'is_correct' => false],
                            ['choice_text' => 'la sélection des clones', 'is_correct' => false],
                            ['choice_text' => 'la stérilisation du milieu', 'is_correct' => false],
                        ],
                        'explanation' => 'La montée en échelle augmente le volume de production en conservant les paramètres qui comptent, comme le pH et l’oxygène.',
                    ],
                    [
                        'question' => 'Dans une culture de bactéries aérobies, l’oxygène dissous chute brutalement. Le risque est que :',
                        'choices' => [
                            ['choice_text' => 'les cellules se divisent plus vite afin de compenser le manque d’oxygène dans la cuve', 'is_correct' => false],
                            ['choice_text' => 'le pH du milieu monte, ce qui stimule la production', 'is_correct' => false],
                            ['choice_text' => 'la température de la cuve baisse', 'is_correct' => false],
                            ['choice_text' => 'la respiration des cellules ralentisse, et avec elle la croissance et la production', 'is_correct' => true],
                        ],
                        'explanation' => 'Les bactéries aérobies respirent grâce à l’oxygène ; sans lui, leur métabolisme ralentit et la production s’effondre.',
                    ],
                ],
            ],
            [
                'title' => 'Applications médicales et agricoles',
                'description' => 'Usages de la biotechnologie dans la santé et l\'agriculture.',
                'settings' => ['duration' => 25, 'passing_score' => 65],
                'questions' => [
                    [
                        'question' => 'La pénicilline est un antibiotique produit à grande échelle en cultivant :',
                        'choices' => [
                            ['choice_text' => 'des bactéries Escherichia coli génétiquement modifiées', 'is_correct' => false],
                            ['choice_text' => 'un champignon du genre Penicillium dans de grandes cuves', 'is_correct' => true],
                            ['choice_text' => 'des cellules humaines adhérentes', 'is_correct' => false],
                            ['choice_text' => 'des levures de boulanger', 'is_correct' => false],
                        ],
                        'explanation' => 'On cultive Penicillium en cuve et on récupère l’antibiotique qu’il sécrète dans le milieu.',
                    ],
                    [
                        'question' => 'Les anticorps monoclonaux sont utilisés pour :',
                        'choices' => [
                            ['choice_text' => 'cibler une molécule précise afin de diagnostiquer ou de traiter certaines maladies', 'is_correct' => true],
                            ['choice_text' => 'attaquer indifféremment les cellules saines et malades de l’organisme sans les distinguer', 'is_correct' => false],
                            ['choice_text' => 'remplacer l’ensemble du système immunitaire', 'is_correct' => false],
                            ['choice_text' => 'produire de l’insuline à la place du pancréas', 'is_correct' => false],
                        ],
                        'explanation' => 'Chaque anticorps monoclonal reconnaît une seule cible, ce qui en fait un outil de précision en médecine.',
                    ],
                    [
                        'question' => 'La thérapie génique cherche à :',
                        'choices' => [
                            ['choice_text' => 'modifier les gènes des futurs descendants du patient', 'is_correct' => false],
                            ['choice_text' => 'remplacer des organes défaillants par une greffe issue d’un donneur compatible', 'is_correct' => false],
                            ['choice_text' => 'apporter ou corriger un gène dans des cellules pour traiter une maladie', 'is_correct' => true],
                            ['choice_text' => 'stimuler les défenses avec un antigène du pathogène', 'is_correct' => false],
                        ],
                        'explanation' => 'Il s’agit d’agir sur les gènes des cellules du patient pour compenser ou réparer une anomalie.',
                    ],
                    [
                        'question' => 'Un vaccin contre l’hépatite B est produit par des levures qui fabriquent une protéine du virus. Ce vaccin contient donc :',
                        'choices' => [
                            ['choice_text' => 'des virus vivants affaiblis', 'is_correct' => false],
                            ['choice_text' => 'des virus entiers inactivés par la chaleur', 'is_correct' => false],
                            ['choice_text' => 'de l’ADN humain purifié', 'is_correct' => false],
                            ['choice_text' => 'un antigène du virus, sans virus entier', 'is_correct' => true],
                        ],
                        'explanation' => 'La protéine virale suffit à entraîner le système immunitaire, sans risque d’infection.',
                    ],
                    [
                        'question' => 'Un maïs modifié pour résister à un insecte ravageur relève de la biotechnologie :',
                        'choices' => [
                            ['choice_text' => 'médicale', 'is_correct' => false],
                            ['choice_text' => 'environnementale', 'is_correct' => false],
                            ['choice_text' => 'agricole', 'is_correct' => true],
                            ['choice_text' => 'industrielle', 'is_correct' => false],
                        ],
                        'explanation' => 'Ici le gène introduit protège une culture, donc l’application est agricole.',
                    ],
                    [
                        'question' => 'Une protéine thérapeutique est produite par des cellules en cuve. Avant d’en faire un médicament, il faut la purifier, c’est-à-dire :',
                        'choices' => [
                            ['choice_text' => 'la copier en grand nombre par PCR avant de l’injecter au patient', 'is_correct' => false],
                            ['choice_text' => 'la séparer des cellules, du milieu et des autres protéines', 'is_correct' => true],
                            ['choice_text' => 'la découper avec des enzymes de restriction', 'is_correct' => false],
                            ['choice_text' => 'l’inactiver par la chaleur', 'is_correct' => false],
                        ],
                        'explanation' => 'Le produit final ne doit contenir ni débris de cellules ni protéines parasites : la purification les élimine.',
                    ],
                    [
                        'question' => 'Pour détecter un virus dans un prélèvement, un laboratoire amplifie un fragment de son génome avec :',
                        'choices' => [
                            ['choice_text' => 'une culture sur gélose nutritive', 'is_correct' => false],
                            ['choice_text' => 'une électrophorèse sur gel', 'is_correct' => false],
                            ['choice_text' => 'une centrifugation', 'is_correct' => false],
                            ['choice_text' => 'la PCR', 'is_correct' => true],
                        ],
                        'explanation' => 'La PCR copie la séquence virale ciblée jusqu’à un niveau détectable.',
                    ],
                    [
                        'question' => 'Une variété de blé résistante à une maladie fongique permet surtout :',
                        'choices' => [
                            ['choice_text' => 'de limiter les pertes de récolte causées par cette maladie', 'is_correct' => true],
                            ['choice_text' => 'de supprimer le besoin d’irrigation', 'is_correct' => false],
                            ['choice_text' => 'de résister aussi aux insectes ravageurs et aux virus des plantes', 'is_correct' => false],
                            ['choice_text' => 'd’obtenir un grain plus riche en protéines', 'is_correct' => false],
                        ],
                        'explanation' => 'La résistance protège contre un pathogène précis ; elle ne remplace ni l’eau ni la protection contre d’autres ravageurs.',
                    ],
                    [
                        'question' => 'Avant la mise sur le marché d’un médicament biotechnologique, le fabricant doit :',
                        'choices' => [
                            ['choice_text' => 'calculer son prix de revient et son prix de vente', 'is_correct' => false],
                            ['choice_text' => 'démontrer sa qualité, sa sécurité et son efficacité', 'is_correct' => true],
                            ['choice_text' => 'le comparer aux produits de la concurrence', 'is_correct' => false],
                            ['choice_text' => 'obtenir l’accord de ses actionnaires', 'is_correct' => false],
                        ],
                        'explanation' => 'Les autorités n’autorisent un médicament que si les preuves de qualité, de sécurité et d’efficacité sont fournies.',
                    ],
                    [
                        'question' => 'Conserver plusieurs variétés d’une même culture permet de :',
                        'choices' => [
                            ['choice_text' => 'uniformiser les plantes pour faciliter la récolte', 'is_correct' => false],
                            ['choice_text' => 'empêcher les croisements entre variétés pour que les plantes n’évoluent plus', 'is_correct' => false],
                            ['choice_text' => 'garder une diversité génétique utile à l’adaptation et à la sélection', 'is_correct' => true],
                            ['choice_text' => 'remplacer les graines par de l’ADN synthétique', 'is_correct' => false],
                        ],
                        'explanation' => 'Une variété peut porter un caractère précieux, comme la résistance à une maladie, qu’on pourra retrouver plus tard.',
                    ],
                ],
            ],
            [
                'title' => 'Biotechnologie environnementale',
                'description' => 'Bioremédiation, épuration biologique et compostage.',
                'settings' => ['duration' => 20, 'passing_score' => 65],
                'questions' => [
                    [
                        'question' => 'Après une marée noire, on épand des nutriments sur la plage pour stimuler les bactéries qui dégradent le pétrole. Cette approche s’appelle :',
                        'choices' => [
                            ['choice_text' => 'l’incinération contrôlée', 'is_correct' => false],
                            ['choice_text' => 'la décantation', 'is_correct' => false],
                            ['choice_text' => 'la bioremédiation', 'is_correct' => true],
                            ['choice_text' => 'la filtration sur sable', 'is_correct' => false],
                        ],
                        'explanation' => 'On utilise le vivant, ici des bactéries, pour dépolluer : c’est le principe de la bioremédiation.',
                    ],
                    [
                        'question' => 'Dans une station d’épuration biologique, les microorganismes :',
                        'choices' => [
                            ['choice_text' => 'retirent les gros déchets flottants', 'is_correct' => false],
                            ['choice_text' => 'ajoutent du chlore dans l’eau pour la désinfecter avant son rejet', 'is_correct' => false],
                            ['choice_text' => 'dessalent l’eau avant son rejet', 'is_correct' => false],
                            ['choice_text' => 'dégradent une partie de la matière organique des eaux usées', 'is_correct' => true],
                        ],
                        'explanation' => 'Les bactéries se nourrissent de la matière organique dissoute, ce qui purifie l’eau avant son rejet.',
                    ],
                    [
                        'question' => 'Une bactérie capable de dégrader un hydrocarbure peut aider à :',
                        'choices' => [
                            ['choice_text' => 'enrichir un sol en azote', 'is_correct' => false],
                            ['choice_text' => 'nettoyer un sol pollué par du carburant', 'is_correct' => true],
                            ['choice_text' => 'traiter une eau trop calcaire', 'is_correct' => false],
                            ['choice_text' => 'freiner l’érosion des berges', 'is_correct' => false],
                        ],
                        'explanation' => 'Elle utilise l’hydrocarbure comme source d’énergie, donc elle le fait disparaître du sol.',
                    ],
                    [
                        'question' => 'Après un hiver très froid, l’activité des bactéries d’une station d’épuration chute. L’explication la plus plausible est que :',
                        'choices' => [
                            ['choice_text' => 'le froid a ralenti leur métabolisme', 'is_correct' => true],
                            ['choice_text' => 'le froid a accéléré leur division', 'is_correct' => false],
                            ['choice_text' => 'les nutriments ont disparu des eaux usées', 'is_correct' => false],
                            ['choice_text' => 'la matière organique s’est évaporée', 'is_correct' => false],
                        ],
                        'explanation' => 'La température fait partie des conditions qui commandent l’activité microbienne : trop froid, les réactions ralentissent.',
                    ],
                    [
                        'question' => 'Dans un bassin d’aération, l’oxygène injecté sert à :',
                        'choices' => [
                            ['choice_text' => 'tuer les bactéries de l’eau pour la désinfecter avant son rejet dans la rivière', 'is_correct' => false],
                            ['choice_text' => 'neutraliser l’acidité de l’eau', 'is_correct' => false],
                            ['choice_text' => 'faire remonter les boues à la surface', 'is_correct' => false],
                            ['choice_text' => 'faire respirer les microorganismes aérobies qui dégradent la pollution', 'is_correct' => true],
                        ],
                        'explanation' => 'Sans oxygène, les microorganismes aérobies cessent de dégrader la matière organique.',
                    ],
                    [
                        'question' => 'Le compostage repose sur :',
                        'choices' => [
                            ['choice_text' => 'la combustion lente des déchets à haute température', 'is_correct' => false],
                            ['choice_text' => 'la fermentation des déchets sans air, qui produit du biogaz en grande quantité', 'is_correct' => false],
                            ['choice_text' => 'la décomposition de déchets organiques par des microorganismes, avec de l’air', 'is_correct' => true],
                            ['choice_text' => 'le tri mécanique des matières recyclables', 'is_correct' => false],
                        ],
                        'explanation' => 'Les microorganismes aérobies décomposent les déchets verts et les transforment en un terreau stable.',
                    ],
                    [
                        'question' => 'Une station retire 20 % d’une charge organique de 100 kg. Il reste :',
                        'choices' => [
                            ['choice_text' => '80 kg', 'is_correct' => true],
                            ['choice_text' => '20 kg', 'is_correct' => false],
                            ['choice_text' => '120 kg', 'is_correct' => false],
                            ['choice_text' => '50 kg', 'is_correct' => false],
                        ],
                        'explanation' => 'Retirer 20 % laisse 80 % : 100 × 0,80 = 80 kg.',
                    ],
                    [
                        'question' => 'La transformation d’un polluant en un autre composé par une cellule ou une enzyme s’appelle :',
                        'choices' => [
                            ['choice_text' => 'la bioaccumulation', 'is_correct' => false],
                            ['choice_text' => 'la biotransformation', 'is_correct' => true],
                            ['choice_text' => 'la biosynthèse', 'is_correct' => false],
                            ['choice_text' => 'la biodiversité', 'is_correct' => false],
                        ],
                        'explanation' => 'La biotransformation est une modification chimique réalisée par un système biologique, ce qui peut rendre le polluant moins nocif.',
                    ],
                    [
                        'question' => 'Contrairement à une simple extraction, un traitement biologique peut :',
                        'choices' => [
                            ['choice_text' => 'détruire ou transformer le contaminant au lieu de le déplacer ailleurs', 'is_correct' => true],
                            ['choice_text' => 'agir en quelques minutes sur un sol très pollué', 'is_correct' => false],
                            ['choice_text' => 'fonctionner de la même façon quels que soient le pH et la température du milieu', 'is_correct' => false],
                            ['choice_text' => 'se passer de surveillance une fois le chantier lancé', 'is_correct' => false],
                        ],
                        'explanation' => 'Extraire un polluant ne fait que le déplacer ; un microorganisme peut au contraire le dégrader en molécules plus simples.',
                    ],
                    [
                        'question' => 'Une entreprise veut libérer une bactérie dépolluante dans un lac. Avant cela, elle doit vérifier :',
                        'choices' => [
                            ['choice_text' => 'que la bactérie se multiplie vite en laboratoire', 'is_correct' => false],
                            ['choice_text' => 'que la bactérie porte un nom latin reconnu', 'is_correct' => false],
                            ['choice_text' => 'que la bactérie ressemble beaucoup à celles qui vivent déjà dans le lac étudié', 'is_correct' => false],
                            ['choice_text' => 'que la bactérie dégrade bien le polluant et ne nuit pas à l’écosystème', 'is_correct' => true],
                        ],
                        'explanation' => 'Efficacité et innocuité vont ensemble : une bactérie qui dépollue mais perturbe le lac ne résout pas le problème.',
                    ],
                ],
            ],
            [
                'title' => 'Contrôle qualité et sécurité',
                'description' => 'Principes de contrôle, contamination, traçabilité et bonnes pratiques.',
                'settings' => ['duration' => 25, 'passing_score' => 70],
                'questions' => [
                    [
                        'question' => 'Le contrôle qualité consiste à :',
                        'choices' => [
                            ['choice_text' => 'comparer les résultats d’un procédé ou d’un lot à des critères définis à l’avance', 'is_correct' => true],
                            ['choice_text' => 'mesurer les ventes d’un lot et les retours des clients pendant les six mois suivant sa mise sur le marché', 'is_correct' => false],
                            ['choice_text' => 'former les opérateurs à une nouvelle machine', 'is_correct' => false],
                            ['choice_text' => 'rédiger la documentation une fois le lot terminé', 'is_correct' => false],
                        ],
                        'explanation' => 'Chaque lot est mesuré puis jugé conforme ou non selon des spécifications fixées avant la production.',
                    ],
                    [
                        'question' => 'Dans une culture, une contamination désigne :',
                        'choices' => [
                            ['choice_text' => 'l’apparition d’une mutation utile chez les cellules cultivées en laboratoire', 'is_correct' => false],
                            ['choice_text' => 'la présence d’un organisme ou d’un agent indésirable dans le système', 'is_correct' => true],
                            ['choice_text' => 'l’ajout volontaire d’un nutriment dans le milieu', 'is_correct' => false],
                            ['choice_text' => 'la multiplication normale des cellules de la souche', 'is_correct' => false],
                        ],
                        'explanation' => 'Bactérie, champignon ou virus qui n’a pas été introduit exprès : il peut fausser les résultats ou ruiner la production.',
                    ],
                    [
                        'question' => 'La traçabilité permet de :',
                        'choices' => [
                            ['choice_text' => 'retirer un lot du marché une fois vendu', 'is_correct' => false],
                            ['choice_text' => 'calculer le coût de production d’un lot', 'is_correct' => false],
                            ['choice_text' => 'prédire la qualité d’un futur lot', 'is_correct' => false],
                            ['choice_text' => 'retrouver l’origine, les étapes et les contrôles d’un lot', 'is_correct' => true],
                        ],
                        'explanation' => 'Grâce aux enregistrements, on remonte des matières premières jusqu’au produit fini, et inversement.',
                    ],
                    [
                        'question' => 'Un contrôle révèle des bactéries dans un lot de milieu de culture. Le lot est écarté pour :',
                        'choices' => [
                            ['choice_text' => 'le mélanger au lot suivant afin de diluer la contamination et limiter les pertes', 'is_correct' => false],
                            ['choice_text' => 'gagner du temps sur la production suivante', 'is_correct' => false],
                            ['choice_text' => 'ne pas utiliser un produit non conforme dans la suite du procédé', 'is_correct' => true],
                            ['choice_text' => 'économiser le coût des analyses', 'is_correct' => false],
                        ],
                        'explanation' => 'Utiliser un lot contaminé risquerait de gâcher les cultures qui en dépendent et de compromettre le produit final.',
                    ],
                    [
                        'question' => 'Gants, blouse et lunettes servent à :',
                        'choices' => [
                            ['choice_text' => 'remplacer la désinfection des surfaces', 'is_correct' => false],
                            ['choice_text' => 'réduire l’exposition de l’opérateur aux produits et aux agents dangereux', 'is_correct' => true],
                            ['choice_text' => 'stériliser le matériel de paillasse avant chaque nouvelle manipulation de cellules', 'is_correct' => false],
                            ['choice_text' => 'permettre de ne pas suivre les procédures écrites', 'is_correct' => false],
                        ],
                        'explanation' => 'Ces équipements limitent le contact avec les risques ; ils complètent les autres mesures de sécurité sans les remplacer.',
                    ],
                    [
                        'question' => 'Deux techniciennes préparent le même milieu en suivant la même procédure opératoire normalisée. L’intérêt est de :',
                        'choices' => [
                            ['choice_text' => 'obtenir des résultats reproductibles d’une personne à l’autre', 'is_correct' => true],
                            ['choice_text' => 'rendre inutiles les contrôles de qualité', 'is_correct' => false],
                            ['choice_text' => 'se passer de la formation des nouveaux opérateurs arrivés dans l’équipe', 'is_correct' => false],
                            ['choice_text' => 'adapter la recette aux habitudes de chacune', 'is_correct' => false],
                        ],
                        'explanation' => 'Quand tout le monde suit les mêmes étapes, les écarts entre manipulations diminuent.',
                    ],
                    [
                        'question' => 'Un témoin positif sert à :',
                        'choices' => [
                            ['choice_text' => 'prouver que l’échantillon est négatif', 'is_correct' => false],
                            ['choice_text' => 'repérer une contamination des réactifs', 'is_correct' => false],
                            ['choice_text' => 'vérifier que la méthode détecte bien un résultat connu', 'is_correct' => true],
                            ['choice_text' => 'mesurer la variabilité entre répétitions', 'is_correct' => false],
                        ],
                        'explanation' => 'On y met volontairement la cible : si le signal n’apparaît pas, la méthode ne fonctionne pas.',
                    ],
                    [
                        'question' => 'Dans un test, le témoin négatif doit :',
                        'choices' => [
                            ['choice_text' => 'donner un signal fort pour montrer que la méthode fonctionne bien', 'is_correct' => false],
                            ['choice_text' => 'donner le même signal que l’échantillon', 'is_correct' => false],
                            ['choice_text' => 'être traité à une autre température que les échantillons', 'is_correct' => false],
                            ['choice_text' => 'ne donner aucun signal, puisqu’il ne contient pas la cible', 'is_correct' => true],
                        ],
                        'explanation' => 'S’il réagit malgré l’absence de cible, c’est le signe d’une contamination ou d’un signal parasite.',
                    ],
                    [
                        'question' => 'Pour estimer la variabilité d’une mesure, on :',
                        'choices' => [
                            ['choice_text' => 'retient la valeur la plus élevée obtenue', 'is_correct' => false],
                            ['choice_text' => 'mesure une fois avec un instrument très précis', 'is_correct' => false],
                            ['choice_text' => 'répète la mesure plusieurs fois dans les mêmes conditions', 'is_correct' => true],
                            ['choice_text' => 'compare des mesures prises dans des conditions différentes', 'is_correct' => false],
                        ],
                        'explanation' => 'Les écarts entre répétitions montrent la dispersion des résultats, donc la fiabilité de la méthode.',
                    ],
                    [
                        'question' => 'Avant de lancer un nouveau produit, l’équipe de Salma doit :',
                        'choices' => [
                            ['choice_text' => 'retenir les essais qui confirment l’hypothèse de départ', 'is_correct' => false],
                            ['choice_text' => 'évaluer les risques et respecter les règles de sécurité et de qualité', 'is_correct' => true],
                            ['choice_text' => 'choisir la méthode la moins chère sans la comparer aux autres solutions possibles', 'is_correct' => false],
                            ['choice_text' => 'attendre un premier incident pour réviser ses procédures', 'is_correct' => false],
                        ],
                        'explanation' => 'Un produit responsable passe d’abord par l’analyse des risques et le respect des exigences de sécurité et de qualité.',
                    ],
                ],
            ],
            [
                'title' => 'Révision générale de biotechnologie',
                'description' => 'Synthèse des notions essentielles et des applications principales.',
                'settings' => ['duration' => 25, 'passing_score' => 70],
                'questions' => [
                    [
                        'question' => 'Quelle association est exacte ?',
                        'choices' => [
                            ['choice_text' => 'ligase : couper l’ADN à un site précis', 'is_correct' => false],
                            ['choice_text' => 'plasmide : produire de l’ATP dans la cellule', 'is_correct' => false],
                            ['choice_text' => 'bioréacteur : observer des cellules au microscope', 'is_correct' => false],
                            ['choice_text' => 'PCR : copier une séquence précise d’ADN', 'is_correct' => true],
                        ],
                        'explanation' => 'La PCR amplifie une séquence ciblée ; la ligase, elle, relie les fragments au lieu de les couper.',
                    ],
                    [
                        'question' => 'Dans quel ordre réalise-t-on les grandes étapes du clonage d’un gène ?',
                        'choices' => [
                            ['choice_text' => 'introduire dans la bactérie, couper, sélectionner, assembler', 'is_correct' => false],
                            ['choice_text' => 'assembler, couper, sélectionner, introduire dans la bactérie', 'is_correct' => false],
                            ['choice_text' => 'couper, assembler, introduire dans la bactérie, sélectionner', 'is_correct' => true],
                            ['choice_text' => 'sélectionner, couper, introduire dans la bactérie, assembler', 'is_correct' => false],
                        ],
                        'explanation' => 'On découpe le gène et le plasmide, on les soude, on transforme la bactérie, puis on trie les cellules qui portent le plasmide.',
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
                            ['choice_text' => '5 g/L', 'is_correct' => false],
                            ['choice_text' => '0,5 g/L', 'is_correct' => true],
                            ['choice_text' => '0,05 g/L', 'is_correct' => false],
                            ['choice_text' => '50 g/L', 'is_correct' => false],
                        ],
                        'explanation' => '5 ÷ 10 = 0,5 g/L.',
                    ],
                    [
                        'question' => 'Un laboratoire veut produire une hormone humaine dans des cellules cultivées en cuve de 500 L. Quel enchaînement est le plus logique ?',
                        'choices' => [
                            ['choice_text' => 'purification, puis culture, puis contrôle qualité', 'is_correct' => false],
                            ['choice_text' => 'contrôle qualité, puis culture, puis purification', 'is_correct' => false],
                            ['choice_text' => 'montée en échelle, puis purification du produit, puis culture en bioréacteur', 'is_correct' => false],
                            ['choice_text' => 'culture en bioréacteur, puis purification, puis contrôle qualité', 'is_correct' => true],
                        ],
                        'explanation' => 'On fait d’abord produire les cellules, on isole la molécule, puis on vérifie que le lot respecte ses spécifications.',
                    ],
                    [
                        'question' => 'En fermentation alcoolique, la levure transforme le sucre en :',
                        'choices' => [
                            ['choice_text' => 'éthanol et gaz carbonique', 'is_correct' => true],
                            ['choice_text' => 'acide lactique et eau', 'is_correct' => false],
                            ['choice_text' => 'oxygène et glucose', 'is_correct' => false],
                            ['choice_text' => 'protéines et ammoniac', 'is_correct' => false],
                        ],
                        'explanation' => 'Sans oxygène, la levure dégrade le sucre en éthanol et en gaz carbonique, ce qui fait lever la pâte ou fermenter le moût.',
                    ],
                    [
                        'question' => 'Un fragment d’ADN linéaire de 6000 paires de bases est coupé en deux sites, situés à 1500 et à 4000 paires de bases de l’extrémité gauche. Les trois fragments obtenus mesurent :',
                        'choices' => [
                            ['choice_text' => '1500, 4000 et 500 paires de bases', 'is_correct' => false],
                            ['choice_text' => '1500, 2500 et 2000 paires de bases', 'is_correct' => true],
                            ['choice_text' => '1500, 2500 et 4000 paires de bases', 'is_correct' => false],
                            ['choice_text' => '2500, 4000 et 6000 paires de bases', 'is_correct' => false],
                        ],
                        'explanation' => 'Premier fragment : 1500 ; deuxième : 4000 − 1500 = 2500 ; dernier : 6000 − 4000 = 2000. Le total fait bien 6000.',
                    ],
                    [
                        'question' => 'Une cuve de 500 mL contient 3 millions de cellules par millilitre. Elle contient en tout :',
                        'choices' => [
                            ['choice_text' => '150 millions de cellules', 'is_correct' => false],
                            ['choice_text' => '15 milliards de cellules', 'is_correct' => false],
                            ['choice_text' => '1,5 milliard de cellules', 'is_correct' => true],
                            ['choice_text' => '1,5 million de cellules', 'is_correct' => false],
                        ],
                        'explanation' => '3 × 10^6 × 500 = 1,5 × 10^9, soit 1,5 milliard de cellules.',
                    ],
                    [
                        'question' => 'Parmi ces applications, laquelle relève de la biotechnologie médicale ?',
                        'choices' => [
                            ['choice_text' => 'la production d’anticorps monoclonaux par des cellules en culture', 'is_correct' => true],
                            ['choice_text' => 'le compostage des déchets verts', 'is_correct' => false],
                            ['choice_text' => 'l’épuration biologique des eaux usées', 'is_correct' => false],
                            ['choice_text' => 'la culture d’un maïs modifié pour résister à un insecte ravageur courant', 'is_correct' => false],
                        ],
                        'explanation' => 'Les anticorps monoclonaux servent à diagnostiquer ou à traiter des maladies ; les autres exemples sont environnementaux ou agricoles.',
                    ],
                    [
                        'question' => 'Dans un cycle de PCR, l’ordre des étapes est :',
                        'choices' => [
                            ['choice_text' => 'élongation, dénaturation, hybridation des amorces', 'is_correct' => false],
                            ['choice_text' => 'hybridation des amorces, dénaturation, élongation', 'is_correct' => false],
                            ['choice_text' => 'dénaturation, élongation, hybridation des amorces', 'is_correct' => false],
                            ['choice_text' => 'dénaturation, hybridation des amorces, élongation', 'is_correct' => true],
                        ],
                        'explanation' => 'On sépare d’abord les brins, les amorces se fixent ensuite, puis la polymérase allonge les nouveaux brins.',
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