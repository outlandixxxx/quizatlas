<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class AtomicPhysicsBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'atomic-physics')->firstOrFail();

        $quizzes = [
            [
                'title' => 'Structure de l\'atome',
                'description' => 'Découvrir la structure générale de l\'atome, ses constituants et les grandeurs qui permettent de l\'identifier.',
                'questions' => [
                    [
                        'question' => 'De quelles particules est principalement constitué le noyau atomique ?',
                        'choices' => [
                            ['choice_text' => 'De protons et de neutrons', 'is_correct' => true],
                            ['choice_text' => 'D\'électrons uniquement', 'is_correct' => false],
                            ['choice_text' => 'De photons uniquement', 'is_correct' => false],
                            ['choice_text' => 'De molécules', 'is_correct' => false],
                        ],
                        'explanation' => 'Le noyau contient les nucléons : les protons et les neutrons.',
                    ],
                    [
                        'question' => 'Quelle charge électrique possède un électron ?',
                        'choices' => [
                            ['choice_text' => 'Une charge négative', 'is_correct' => true],
                            ['choice_text' => 'Une charge positive', 'is_correct' => false],
                            ['choice_text' => 'Une charge nulle', 'is_correct' => false],
                            ['choice_text' => 'Une charge variable selon l\'atome', 'is_correct' => false],
                        ],
                        'explanation' => 'L\'électron porte la charge élémentaire négative -e.',
                    ],
                    [
                        'question' => 'Quelle charge électrique possède un proton ?',
                        'choices' => [
                            ['choice_text' => 'Une charge positive', 'is_correct' => true],
                            ['choice_text' => 'Une charge négative', 'is_correct' => false],
                            ['choice_text' => 'Une charge nulle', 'is_correct' => false],
                            ['choice_text' => 'Une charge qui dépend de sa vitesse', 'is_correct' => false],
                        ],
                        'explanation' => 'Le proton porte une charge élémentaire positive +e.',
                    ],
                    [
                        'question' => 'Quelle est la charge électrique nette d\'un neutron ?',
                        'choices' => [
                            ['choice_text' => 'Nulle', 'is_correct' => true],
                            ['choice_text' => 'Positive', 'is_correct' => false],
                            ['choice_text' => 'Négative', 'is_correct' => false],
                            ['choice_text' => 'Toujours égale à celle de l\'électron', 'is_correct' => false],
                        ],
                        'explanation' => 'Le neutron est électriquement neutre.',
                    ],
                    [
                        'question' => 'Que représente le numéro atomique Z d\'un élément ?',
                        'choices' => [
                            ['choice_text' => 'Le nombre de protons du noyau', 'is_correct' => true],
                            ['choice_text' => 'Le nombre de neutrons uniquement', 'is_correct' => false],
                            ['choice_text' => 'Le nombre total de nucléons', 'is_correct' => false],
                            ['choice_text' => 'Le nombre total d\'électrons excités', 'is_correct' => false],
                        ],
                        'explanation' => 'Le numéro atomique Z est égal au nombre de protons et permet d\'identifier l\'élément chimique.',
                    ],
                    [
                        'question' => 'Que représente le nombre de masse A ?',
                        'choices' => [
                            ['choice_text' => 'Le nombre total de protons et de neutrons', 'is_correct' => true],
                            ['choice_text' => 'Le nombre de protons uniquement', 'is_correct' => false],
                            ['choice_text' => 'Le nombre d\'électrons uniquement', 'is_correct' => false],
                            ['choice_text' => 'La masse exacte du noyau en kilogrammes', 'is_correct' => false],
                        ],
                        'explanation' => 'Le nombre de masse est A = Z + N, avec Z protons et N neutrons.',
                    ],
                    [
                        'question' => 'Dans un atome électriquement neutre, le nombre d\'électrons est :',
                        'choices' => [
                            ['choice_text' => 'Égal au nombre de protons', 'is_correct' => true],
                            ['choice_text' => 'Toujours supérieur au nombre de protons', 'is_correct' => false],
                            ['choice_text' => 'Toujours inférieur au nombre de protons', 'is_correct' => false],
                            ['choice_text' => 'Égal au nombre de neutrons dans tous les cas', 'is_correct' => false],
                        ],
                        'explanation' => 'La neutralité électrique impose que les charges positives des protons compensent les charges négatives des électrons.',
                    ],
                    [
                        'question' => 'Comment appelle-t-on un atome qui a perdu ou gagné un ou plusieurs électrons ?',
                        'choices' => [
                            ['choice_text' => 'Un ion', 'is_correct' => true],
                            ['choice_text' => 'Un isotope uniquement', 'is_correct' => false],
                            ['choice_text' => 'Un neutron', 'is_correct' => false],
                            ['choice_text' => 'Un photon', 'is_correct' => false],
                        ],
                        'explanation' => 'Un ion est un atome ou un groupe d\'atomes qui possède une charge électrique nette.',
                    ],
                    [
                        'question' => 'Deux isotopes d\'un même élément possèdent :',
                        'choices' => [
                            ['choice_text' => 'Le même nombre de protons mais un nombre différent de neutrons', 'is_correct' => true],
                            ['choice_text' => 'Le même nombre de neutrons mais des nombres différents de protons', 'is_correct' => false],
                            ['choice_text' => 'Des charges élémentaires différentes pour les protons', 'is_correct' => false],
                            ['choice_text' => 'Toujours des nombres différents d\'électrons dans les atomes neutres', 'is_correct' => false],
                        ],
                        'explanation' => 'Les isotopes ont le même numéro atomique Z mais des nombres de neutrons différents.',
                    ],
                    [
                        'question' => 'Où se trouvent principalement les électrons dans l\'atome ?',
                        'choices' => [
                            ['choice_text' => 'Dans la région électronique autour du noyau', 'is_correct' => true],
                            ['choice_text' => 'À l\'intérieur des neutrons uniquement', 'is_correct' => false],
                            ['choice_text' => 'Uniquement dans le noyau', 'is_correct' => false],
                            ['choice_text' => 'À l\'extérieur de l\'atome comme des molécules séparées', 'is_correct' => false],
                        ],
                        'explanation' => 'Les électrons occupent des états quantiques répartis autour du noyau.',
                    ],
                ],
            ],

            [
                'title' => 'Modèles atomiques',
                'description' => 'Revoir l\'évolution des principaux modèles de l\'atome et les expériences qui ont permis de les faire progresser.',
                'questions' => [
                    [
                        'question' => 'Quel modèle décrivait initialement l\'atome comme une sphère indivisible ?',
                        'choices' => [
                            ['choice_text' => 'Le modèle de Dalton', 'is_correct' => true],
                            ['choice_text' => 'Le modèle de Bohr', 'is_correct' => false],
                            ['choice_text' => 'Le modèle quantique moderne', 'is_correct' => false],
                            ['choice_text' => 'Le modèle nucléaire de Rutherford', 'is_correct' => false],
                        ],
                        'explanation' => 'Dalton proposait une description de l\'atome comme une unité indivisible dans sa théorie atomique.',
                    ],
                    [
                        'question' => 'Quel scientifique a identifié l\'électron grâce notamment à l\'étude des rayons cathodiques ?',
                        'choices' => [
                            ['choice_text' => 'J. J. Thomson', 'is_correct' => true],
                            ['choice_text' => 'Niels Bohr', 'is_correct' => false],
                            ['choice_text' => 'Erwin Schrödinger', 'is_correct' => false],
                            ['choice_text' => 'Max Planck', 'is_correct' => false],
                        ],
                        'explanation' => 'J. J. Thomson a montré que les rayons cathodiques étaient constitués de particules chargées négativement : les électrons.',
                    ],
                    [
                        'question' => 'Quelle expérience a conduit Rutherford à proposer l\'existence d\'un petit noyau dense ?',
                        'choices' => [
                            ['choice_text' => 'La diffusion de particules alpha par une feuille d\'or', 'is_correct' => true],
                            ['choice_text' => 'L\'expérience des fentes de Young', 'is_correct' => false],
                            ['choice_text' => 'L\'expérience du corps noir', 'is_correct' => false],
                            ['choice_text' => 'La mesure de la pression d\'un gaz', 'is_correct' => false],
                        ],
                        'explanation' => 'La diffusion de particules alpha a révélé que la charge positive et l\'essentiel de la masse de l\'atome sont concentrés dans un noyau très petit.',
                    ],
                    [
                        'question' => 'Quelle idée essentielle est associée au modèle de Rutherford ?',
                        'choices' => [
                            ['choice_text' => 'L\'atome possède un petit noyau central autour duquel se trouvent les électrons', 'is_correct' => true],
                            ['choice_text' => 'Les électrons sont répartis uniformément dans une sphère positive', 'is_correct' => false],
                            ['choice_text' => 'Les électrons n\'existent pas', 'is_correct' => false],
                            ['choice_text' => 'Le noyau occupe tout le volume de l\'atome', 'is_correct' => false],
                        ],
                        'explanation' => 'Le modèle nucléaire de Rutherford concentre la charge positive et une grande partie de la masse dans le noyau.',
                    ],
                    [
                        'question' => 'Quelle amélioration Bohr a-t-il apportée au modèle de Rutherford ?',
                        'choices' => [
                            ['choice_text' => 'L\'introduction de niveaux d\'énergie quantifiés pour les électrons', 'is_correct' => true],
                            ['choice_text' => 'La suppression du noyau', 'is_correct' => false],
                            ['choice_text' => 'La suppression de la charge électrique', 'is_correct' => false],
                            ['choice_text' => 'L\'affirmation que toutes les énergies sont possibles sans restriction', 'is_correct' => false],
                        ],
                        'explanation' => 'Bohr a proposé que certaines orbites ou états électroniques soient associés à des énergies discrètes.',
                    ],
                    [
                        'question' => 'Pourquoi le modèle de Bohr a-t-il été important pour l\'atome d\'hydrogène ?',
                        'choices' => [
                            ['choice_text' => 'Il permettait d\'expliquer certaines raies spectrales de l\'hydrogène', 'is_correct' => true],
                            ['choice_text' => 'Il supprimait les niveaux d\'énergie', 'is_correct' => false],
                            ['choice_text' => 'Il prédisait que l\'hydrogène ne pouvait pas émettre de lumière', 'is_correct' => false],
                            ['choice_text' => 'Il décrivait directement toutes les molécules complexes', 'is_correct' => false],
                        ],
                        'explanation' => 'Le modèle de Bohr rendait compte des niveaux d\'énergie de l\'hydrogène et donc de ses principales raies spectrales.',
                    ],
                    [
                        'question' => 'Le modèle quantique moderne considère-t-il l\'électron comme une petite bille suivant une orbite classique parfaitement définie ?',
                        'choices' => [
                            ['choice_text' => 'Non', 'is_correct' => true],
                            ['choice_text' => 'Oui, exactement', 'is_correct' => false],
                            ['choice_text' => 'Oui, mais uniquement pour l\'hydrogène', 'is_correct' => false],
                            ['choice_text' => 'Oui, mais seulement à basse température', 'is_correct' => false],
                        ],
                        'explanation' => 'La mécanique quantique décrit l\'électron par un état quantique et une distribution de probabilité plutôt que par une orbite classique bien définie.',
                    ],
                    [
                        'question' => 'Quel concept remplace l\'image d\'une orbite classique dans le modèle quantique ?',
                        'choices' => [
                            ['choice_text' => 'L\'orbitale atomique', 'is_correct' => true],
                            ['choice_text' => 'La trajectoire planétaire', 'is_correct' => false],
                            ['choice_text' => 'La ligne de champ gravitationnel', 'is_correct' => false],
                            ['choice_text' => 'Le rayon sonore', 'is_correct' => false],
                        ],
                        'explanation' => 'Une orbitale décrit un état quantique et une région de probabilité de présence de l\'électron.',
                    ],
                    [
                        'question' => 'Pourquoi les modèles atomiques ont-ils évolué ?',
                        'choices' => [
                            ['choice_text' => 'Parce que de nouvelles expériences ont révélé des phénomènes que les anciens modèles expliquaient mal', 'is_correct' => true],
                            ['choice_text' => 'Parce que les atomes changent de structure avec les années', 'is_correct' => false],
                            ['choice_text' => 'Parce que les lois de conservation disparaissent', 'is_correct' => false],
                            ['choice_text' => 'Parce que les scientifiques n\'utilisent plus de mesures', 'is_correct' => false],
                        ],
                        'explanation' => 'Les modèles scientifiques sont améliorés lorsque de nouvelles observations montrent leurs limites.',
                    ],
                    [
                        'question' => 'Quel scientifique est directement associé à l\'équation fondamentale utilisée pour décrire les états quantiques ?',
                        'choices' => [
                            ['choice_text' => 'Erwin Schrödinger', 'is_correct' => true],
                            ['choice_text' => 'Isaac Newton', 'is_correct' => false],
                            ['choice_text' => 'Michael Faraday', 'is_correct' => false],
                            ['choice_text' => 'James Watt', 'is_correct' => false],
                        ],
                        'explanation' => 'L\'équation de Schrödinger est l\'une des équations centrales de la mécanique quantique.',
                    ],
                ],
            ],

            [
                'title' => 'Niveaux d\'énergie atomiques',
                'description' => 'Comprendre la quantification de l\'énergie dans l\'atome et les transitions entre différents états électroniques.',
                'questions' => [
                    [
                        'question' => 'Que signifie qu\'un atome possède des niveaux d\'énergie quantifiés ?',
                        'choices' => [
                            ['choice_text' => 'Seules certaines valeurs d\'énergie sont autorisées pour ses états liés', 'is_correct' => true],
                            ['choice_text' => 'Toutes les valeurs d\'énergie sont possibles sans restriction', 'is_correct' => false],
                            ['choice_text' => 'L\'atome possède toujours une énergie nulle', 'is_correct' => false],
                            ['choice_text' => 'L\'énergie ne peut jamais changer', 'is_correct' => false],
                        ],
                        'explanation' => 'Les états électroniques liés d\'un atome correspondent à des valeurs d\'énergie discrètes.',
                    ],
                    [
                        'question' => 'Quel est l\'état de plus basse énergie d\'un atome ?',
                        'choices' => [
                            ['choice_text' => 'L\'état fondamental', 'is_correct' => true],
                            ['choice_text' => 'L\'état ionisé', 'is_correct' => false],
                            ['choice_text' => 'L\'état de diffusion', 'is_correct' => false],
                            ['choice_text' => 'L\'état excité maximal', 'is_correct' => false],
                        ],
                        'explanation' => 'L\'état fondamental est l\'état quantique de plus basse énergie.',
                    ],
                    [
                        'question' => 'Comment appelle-t-on un atome dont un électron occupe un niveau supérieur à l\'état fondamental ?',
                        'choices' => [
                            ['choice_text' => 'Un atome excité', 'is_correct' => true],
                            ['choice_text' => 'Un isotope', 'is_correct' => false],
                            ['choice_text' => 'Un neutron libre', 'is_correct' => false],
                            ['choice_text' => 'Un atome sans énergie', 'is_correct' => false],
                        ],
                        'explanation' => 'Un atome excité possède au moins un électron dans un état d\'énergie supérieur au fondamental.',
                    ],
                    [
                        'question' => 'Que peut faire un électron lorsqu\'il passe d\'un niveau d\'énergie supérieur à un niveau inférieur ?',
                        'choices' => [
                            ['choice_text' => 'Émettre un photon', 'is_correct' => true],
                            ['choice_text' => 'Créer toujours un proton', 'is_correct' => false],
                            ['choice_text' => 'Perdre automatiquement sa charge', 'is_correct' => false],
                            ['choice_text' => 'Devenir un neutron', 'is_correct' => false],
                        ],
                        'explanation' => 'La désexcitation électronique peut s\'accompagner de l\'émission d\'un photon.',
                    ],
                    [
                        'question' => 'Lorsqu\'un électron absorbe un photon d\'énergie adaptée, il peut :',
                        'choices' => [
                            ['choice_text' => 'Passer vers un niveau d\'énergie supérieur', 'is_correct' => true],
                            ['choice_text' => 'Devenir nécessairement un proton', 'is_correct' => false],
                            ['choice_text' => 'Perdre toute sa charge électrique', 'is_correct' => false],
                            ['choice_text' => 'Quitter toujours l\'atome', 'is_correct' => false],
                        ],
                        'explanation' => 'L\'absorption d\'un photon dont l\'énergie correspond à l\'écart entre deux niveaux peut provoquer une excitation.',
                    ],
                    [
                        'question' => 'Quelle relation relie l\'énergie d\'un photon à sa fréquence ?',
                        'choices' => [
                            ['choice_text' => 'E = hν', 'is_correct' => true],
                            ['choice_text' => 'E = h/ν', 'is_correct' => false],
                            ['choice_text' => 'E = ν/h', 'is_correct' => false],
                            ['choice_text' => 'E = h + ν', 'is_correct' => false],
                        ],
                        'explanation' => 'La relation de Planck donne E = hν.',
                    ],
                    [
                        'question' => 'Si la différence d\'énergie entre deux niveaux augmente, la fréquence du photon correspondant augmente-t-elle ?',
                        'choices' => [
                            ['choice_text' => 'Oui', 'is_correct' => true],
                            ['choice_text' => 'Non, elle diminue toujours', 'is_correct' => false],
                            ['choice_text' => 'Elle devient forcément nulle', 'is_correct' => false],
                            ['choice_text' => 'Elle est indépendante de l\'énergie', 'is_correct' => false],
                        ],
                        'explanation' => 'Puisque ΔE = hν, une différence d\'énergie plus grande correspond à une fréquence plus élevée.',
                    ],
                    [
                        'question' => 'Que se passe-t-il lorsque l\'énergie absorbée est suffisante pour arracher complètement un électron à l\'atome ?',
                        'choices' => [
                            ['choice_text' => 'L\'atome est ionisé', 'is_correct' => true],
                            ['choice_text' => 'L\'atome devient un neutron', 'is_correct' => false],
                            ['choice_text' => 'Le noyau disparaît', 'is_correct' => false],
                            ['choice_text' => 'La fréquence du photon devient nulle', 'is_correct' => false],
                        ],
                        'explanation' => 'Une énergie suffisante pour extraire un électron conduit à l\'ionisation de l\'atome.',
                    ],
                    [
                        'question' => 'Pourquoi un atome ne peut-il pas toujours absorber un photon de n\'importe quelle énergie pour une transition liée entre deux niveaux ?',
                        'choices' => [
                            ['choice_text' => 'L\'énergie du photon doit correspondre à l\'écart entre les niveaux autorisés', 'is_correct' => true],
                            ['choice_text' => 'Parce que les photons n\'ont aucune énergie', 'is_correct' => false],
                            ['choice_text' => 'Parce que les électrons sont toujours immobiles', 'is_correct' => false],
                            ['choice_text' => 'Parce que tous les niveaux atomiques ont la même énergie', 'is_correct' => false],
                        ],
                        'explanation' => 'Une transition entre deux niveaux nécessite un échange d\'énergie correspondant à leur différence.',
                    ],
                    [
                        'question' => 'Après une excitation, un électron atomique tend souvent à revenir :',
                        'choices' => [
                            ['choice_text' => 'Vers un état de plus basse énergie', 'is_correct' => true],
                            ['choice_text' => 'Vers une énergie infinie', 'is_correct' => false],
                            ['choice_text' => 'Vers une charge positive', 'is_correct' => false],
                            ['choice_text' => 'Vers une masse nulle', 'is_correct' => false],
                        ],
                        'explanation' => 'Les états excités peuvent se désexciter vers des états d\'énergie inférieure.',
                    ],
                ],
            ],

            [
                'title' => 'Spectres atomiques',
                'description' => 'Comprendre les spectres d\'émission et d\'absorption et leur lien avec les niveaux d\'énergie atomiques.',
                'questions' => [
                    [
                        'question' => 'Qu\'est-ce qu\'un spectre d\'émission atomique ?',
                        'choices' => [
                            ['choice_text' => 'L\'ensemble des longueurs d\'onde ou fréquences de la lumière émise par un atome dans certaines conditions', 'is_correct' => true],
                            ['choice_text' => 'La masse totale de l\'atome', 'is_correct' => false],
                            ['choice_text' => 'La charge du noyau uniquement', 'is_correct' => false],
                            ['choice_text' => 'Le mouvement mécanique du noyau', 'is_correct' => false],
                        ],
                        'explanation' => 'Les transitions électroniques vers des niveaux plus bas peuvent produire des photons à des fréquences précises.',
                    ],
                    [
                        'question' => 'Pourquoi le spectre d\'émission d\'un gaz atomique peut-il présenter des raies ?',
                        'choices' => [
                            ['choice_text' => 'Parce que les niveaux d\'énergie atomiques sont discrets', 'is_correct' => true],
                            ['choice_text' => 'Parce que tous les photons ont exactement la même énergie', 'is_correct' => false],
                            ['choice_text' => 'Parce que les électrons sont toujours immobiles', 'is_correct' => false],
                            ['choice_text' => 'Parce que les atomes ne peuvent jamais absorber de lumière', 'is_correct' => false],
                        ],
                        'explanation' => 'Les écarts discrets entre niveaux conduisent à des photons d\'énergies précises, donc à des raies spectrales.',
                    ],
                    [
                        'question' => 'Un spectre d\'absorption présente généralement :',
                        'choices' => [
                            ['choice_text' => 'Des raies sombres correspondant à des longueurs d\'onde absorbées', 'is_correct' => true],
                            ['choice_text' => 'Uniquement des raies lumineuses sans fond', 'is_correct' => false],
                            ['choice_text' => 'Uniquement des fréquences nulles', 'is_correct' => false],
                            ['choice_text' => 'Des masses atomiques mesurées directement', 'is_correct' => false],
                        ],
                        'explanation' => 'Un gaz peut absorber certaines longueurs d\'onde correspondant aux transitions quantiques permises.',
                    ],
                    [
                        'question' => 'Chaque élément chimique possède-t-il un spectre caractéristique ?',
                        'choices' => [
                            ['choice_text' => 'Oui', 'is_correct' => true],
                            ['choice_text' => 'Non, tous les éléments ont exactement le même spectre', 'is_correct' => false],
                            ['choice_text' => 'Seulement les gaz nobles', 'is_correct' => false],
                            ['choice_text' => 'Seulement à température nulle', 'is_correct' => false],
                        ],
                        'explanation' => 'La structure électronique propre à chaque élément produit un ensemble caractéristique de transitions.',
                    ],
                    [
                        'question' => 'Comment peut-on utiliser un spectre atomique en astronomie ?',
                        'choices' => [
                            ['choice_text' => 'Pour identifier certains éléments présents dans une étoile ou un objet céleste', 'is_correct' => true],
                            ['choice_text' => 'Pour mesurer directement la masse de chaque électron', 'is_correct' => false],
                            ['choice_text' => 'Pour déterminer la taille d\'un proton', 'is_correct' => false],
                            ['choice_text' => 'Pour calculer uniquement la gravité terrestre', 'is_correct' => false],
                        ],
                        'explanation' => 'Les raies spectrales servent notamment à déterminer la composition chimique des objets astronomiques.',
                    ],
                    [
                        'question' => 'Si un atome émet un photon lors d\'une transition vers un niveau plus bas, la fréquence du photon dépend de :',
                        'choices' => [
                            ['choice_text' => 'La différence d\'énergie entre les deux niveaux', 'is_correct' => true],
                            ['choice_text' => 'La couleur du laboratoire', 'is_correct' => false],
                            ['choice_text' => 'La masse de l\'observateur', 'is_correct' => false],
                            ['choice_text' => 'La forme du récipient uniquement', 'is_correct' => false],
                        ],
                        'explanation' => 'La relation ΔE = hν relie directement l\'écart de niveaux à la fréquence du photon.',
                    ],
                    [
                        'question' => 'Une raie située à une fréquence plus élevée correspond à un photon :',
                        'choices' => [
                            ['choice_text' => 'Plus énergétique', 'is_correct' => true],
                            ['choice_text' => 'Moins énergétique', 'is_correct' => false],
                            ['choice_text' => 'Toujours sans énergie', 'is_correct' => false],
                            ['choice_text' => 'Toujours plus massif au sens classique', 'is_correct' => false],
                        ],
                        'explanation' => 'Comme E = hν, l\'énergie du photon augmente avec sa fréquence.',
                    ],
                    [
                        'question' => 'Une lumière monochromatique contient idéalement :',
                        'choices' => [
                            ['choice_text' => 'Une seule fréquence', 'is_correct' => true],
                            ['choice_text' => 'Toutes les fréquences possibles', 'is_correct' => false],
                            ['choice_text' => 'Uniquement des fréquences nulles', 'is_correct' => false],
                            ['choice_text' => 'Aucune longueur d\'onde', 'is_correct' => false],
                        ],
                        'explanation' => 'Une radiation monochromatique idéale correspond à une seule fréquence ou longueur d\'onde.',
                    ],
                    [
                        'question' => 'Quel instrument permet d\'analyser la composition spectrale de la lumière ?',
                        'choices' => [
                            ['choice_text' => 'Un spectromètre', 'is_correct' => true],
                            ['choice_text' => 'Un baromètre', 'is_correct' => false],
                            ['choice_text' => 'Un ampèremètre', 'is_correct' => false],
                            ['choice_text' => 'Un thermomètre', 'is_correct' => false],
                        ],
                        'explanation' => 'Un spectromètre décompose ou mesure la lumière en fonction de sa longueur d\'onde ou de sa fréquence.',
                    ],
                    [
                        'question' => 'Pourquoi l\'étude des spectres constitue-t-elle une preuve importante de la quantification des niveaux atomiques ?',
                        'choices' => [
                            ['choice_text' => 'Les raies correspondent à des échanges d\'énergie bien déterminés', 'is_correct' => true],
                            ['choice_text' => 'Les spectres montrent que tous les niveaux ont la même énergie', 'is_correct' => false],
                            ['choice_text' => 'Les spectres prouvent que les électrons n\'existent pas', 'is_correct' => false],
                            ['choice_text' => 'Les spectres n\'ont aucun lien avec les électrons', 'is_correct' => false],
                        ],
                        'explanation' => 'Les raies discrètes indiquent que les échanges d\'énergie entre états atomiques sont quantifiés.',
                    ],
                ],
            ],

            [
                'title' => 'Atome d\'hydrogène',
                'description' => 'Étudier les bases du modèle de l\'atome d\'hydrogène et ses niveaux d\'énergie.',
                'questions' => [
                    [
                        'question' => 'Combien de protons possède le noyau de l\'hydrogène ordinaire ?',
                        'choices' => [
                            ['choice_text' => 'Un', 'is_correct' => true],
                            ['choice_text' => 'Deux', 'is_correct' => false],
                            ['choice_text' => 'Aucun', 'is_correct' => false],
                            ['choice_text' => 'Un nombre variable selon l\'état électronique', 'is_correct' => false],
                        ],
                        'explanation' => 'L\'hydrogène possède un seul proton dans son noyau.',
                    ],
                    [
                        'question' => 'Combien d\'électrons possède un atome d\'hydrogène neutre ?',
                        'choices' => [
                            ['choice_text' => 'Un', 'is_correct' => true],
                            ['choice_text' => 'Deux', 'is_correct' => false],
                            ['choice_text' => 'Aucun', 'is_correct' => false],
                            ['choice_text' => 'Un électron par neutron', 'is_correct' => false],
                        ],
                        'explanation' => 'Un atome neutre possède autant d\'électrons que de protons, donc un électron pour l\'hydrogène.',
                    ],
                    [
                        'question' => 'Dans le modèle de Bohr de l\'hydrogène, les niveaux d\'énergie sont-ils quantifiés ?',
                        'choices' => [
                            ['choice_text' => 'Oui', 'is_correct' => true],
                            ['choice_text' => 'Non, toutes les énergies sont possibles', 'is_correct' => false],
                            ['choice_text' => 'Seulement pour les ions lourds', 'is_correct' => false],
                            ['choice_text' => 'Uniquement à température nulle', 'is_correct' => false],
                        ],
                        'explanation' => 'Le modèle de Bohr introduit des niveaux d\'énergie discrets pour l\'électron de l\'hydrogène.',
                    ],
                    [
                        'question' => 'Quelle est la valeur du nombre quantique principal du niveau fondamental de l\'hydrogène ?',
                        'choices' => [
                            ['choice_text' => 'n = 1', 'is_correct' => true],
                            ['choice_text' => 'n = 0', 'is_correct' => false],
                            ['choice_text' => 'n = 2', 'is_correct' => false],
                            ['choice_text' => 'n = -1', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans le modèle de Bohr, l\'état fondamental correspond à n = 1.',
                    ],
                    [
                        'question' => 'Que devient l\'énergie de l\'électron lorsqu\'il passe d\'un niveau élevé vers n = 1 ?',
                        'choices' => [
                            ['choice_text' => 'Elle diminue et un photon peut être émis', 'is_correct' => true],
                            ['choice_text' => 'Elle augmente sans limite', 'is_correct' => false],
                            ['choice_text' => 'Elle devient nulle dans tous les cas', 'is_correct' => false],
                            ['choice_text' => 'L\'électron devient un proton', 'is_correct' => false],
                        ],
                        'explanation' => 'Une transition vers un niveau plus bas libère l\'énergie excédentaire sous forme de photon.',
                    ],
                    [
                        'question' => 'Que se passe-t-il si l\'électron de l\'hydrogène absorbe suffisamment d\'énergie pour quitter l\'atome ?',
                        'choices' => [
                            ['choice_text' => 'L\'atome est ionisé', 'is_correct' => true],
                            ['choice_text' => 'Le proton disparaît', 'is_correct' => false],
                            ['choice_text' => 'L\'atome devient un neutron', 'is_correct' => false],
                            ['choice_text' => 'L\'énergie de l\'électron devient nulle', 'is_correct' => false],
                        ],
                        'explanation' => 'Lorsque l\'électron est arraché, l\'hydrogène devient un ion H⁺.',
                    ],
                    [
                        'question' => 'Quelle série spectrale de l\'hydrogène correspond aux transitions qui aboutissent au niveau n = 2 ?',
                        'choices' => [
                            ['choice_text' => 'La série de Balmer', 'is_correct' => true],
                            ['choice_text' => 'La série de Lyman', 'is_correct' => false],
                            ['choice_text' => 'La série de Paschen', 'is_correct' => false],
                            ['choice_text' => 'La série de Fourier', 'is_correct' => false],
                        ],
                        'explanation' => 'Les transitions vers n = 2 constituent la série de Balmer, située notamment dans le domaine visible.',
                    ],
                    [
                        'question' => 'Les transitions vers le niveau n = 1 de l\'hydrogène constituent la série de :',
                        'choices' => [
                            ['choice_text' => 'Lyman', 'is_correct' => true],
                            ['choice_text' => 'Balmer', 'is_correct' => false],
                            ['choice_text' => 'Paschen', 'is_correct' => false],
                            ['choice_text' => 'Brackett', 'is_correct' => false],
                        ],
                        'explanation' => 'La série de Lyman correspond aux transitions qui se terminent au niveau n = 1.',
                    ],
                    [
                        'question' => 'Les transitions de l\'hydrogène vers le niveau n = 3 appartiennent à la série :',
                        'choices' => [
                            ['choice_text' => 'Paschen', 'is_correct' => true],
                            ['choice_text' => 'Lyman', 'is_correct' => false],
                            ['choice_text' => 'Balmer', 'is_correct' => false],
                            ['choice_text' => 'Rutherford', 'is_correct' => false],
                        ],
                        'explanation' => 'La série de Paschen correspond aux transitions aboutissant au niveau n = 3.',
                    ],
                    [
                        'question' => 'Pourquoi l\'hydrogène est-il particulièrement important en physique atomique ?',
                        'choices' => [
                            ['choice_text' => 'C\'est l\'atome le plus simple et son spectre a permis de tester les premiers modèles quantiques', 'is_correct' => true],
                            ['choice_text' => 'Il possède le plus grand nombre d\'électrons', 'is_correct' => false],
                            ['choice_text' => 'Son noyau contient tous les éléments chimiques', 'is_correct' => false],
                            ['choice_text' => 'Il ne possède aucun niveau d\'énergie', 'is_correct' => false],
                        ],
                        'explanation' => 'Avec un seul électron, l\'hydrogène constitue un système atomique particulièrement simple à étudier théoriquement et expérimentalement.',
                    ],
                ],
            ],

            [
                'title' => 'Nombres quantiques et orbitales',
                'description' => 'Introduire les nombres quantiques et les différentes orbitales électroniques.',
                'questions' => [
                    [
                        'question' => 'Quel nombre quantique principal décrit principalement le niveau d\'énergie d\'un électron dans un atome ?',
                        'choices' => [
                            ['choice_text' => 'n', 'is_correct' => true],
                            ['choice_text' => 'l uniquement', 'is_correct' => false],
                            ['choice_text' => 'm_l uniquement', 'is_correct' => false],
                            ['choice_text' => 'm_s uniquement', 'is_correct' => false],
                        ],
                        'explanation' => 'Le nombre quantique principal n détermine notamment la couche électronique et contribue fortement à l\'énergie de l\'électron.',
                    ],
                    [
                        'question' => 'Quelles valeurs peut prendre le nombre quantique orbital l pour un n donné ?',
                        'choices' => [
                            ['choice_text' => 'De 0 à n - 1', 'is_correct' => true],
                            ['choice_text' => 'De 1 à n', 'is_correct' => false],
                            ['choice_text' => 'De -n à n uniquement', 'is_correct' => false],
                            ['choice_text' => 'Une seule valeur indépendante de n', 'is_correct' => false],
                        ],
                        'explanation' => 'Pour un nombre quantique principal n, l peut prendre les valeurs 0, 1, ..., n - 1.',
                    ],
                    [
                        'question' => 'Quelle orbitale correspond à l = 0 ?',
                        'choices' => [
                            ['choice_text' => 'Une orbitale s', 'is_correct' => true],
                            ['choice_text' => 'Une orbitale p', 'is_correct' => false],
                            ['choice_text' => 'Une orbitale d', 'is_correct' => false],
                            ['choice_text' => 'Une orbitale f', 'is_correct' => false],
                        ],
                        'explanation' => 'Les orbitales s correspondent à l = 0.',
                    ],
                    [
                        'question' => 'Quelle orbitale correspond à l = 1 ?',
                        'choices' => [
                            ['choice_text' => 'Une orbitale p', 'is_correct' => true],
                            ['choice_text' => 'Une orbitale s', 'is_correct' => false],
                            ['choice_text' => 'Une orbitale d', 'is_correct' => false],
                            ['choice_text' => 'Une orbitale f', 'is_correct' => false],
                        ],
                        'explanation' => 'Les orbitales p correspondent à l = 1.',
                    ],
                    [
                        'question' => 'Quelle orbitale correspond à l = 2 ?',
                        'choices' => [
                            ['choice_text' => 'Une orbitale d', 'is_correct' => true],
                            ['choice_text' => 'Une orbitale s', 'is_correct' => false],
                            ['choice_text' => 'Une orbitale p', 'is_correct' => false],
                            ['choice_text' => 'Une orbitale f', 'is_correct' => false],
                        ],
                        'explanation' => 'Les orbitales d correspondent à l = 2.',
                    ],
                    [
                        'question' => 'Que décrit principalement le nombre quantique magnétique m_l ?',
                        'choices' => [
                            ['choice_text' => 'L\'orientation spatiale possible d\'une orbitale', 'is_correct' => true],
                            ['choice_text' => 'La masse de l\'électron', 'is_correct' => false],
                            ['choice_text' => 'La charge du proton', 'is_correct' => false],
                            ['choice_text' => 'La température de l\'atome', 'is_correct' => false],
                        ],
                        'explanation' => 'Le nombre m_l détermine la projection du moment cinétique orbital et les orientations possibles.',
                    ],
                    [
                        'question' => 'Quelles valeurs peut prendre le nombre quantique de spin m_s pour un électron ?',
                        'choices' => [
                            ['choice_text' => '+1/2 ou -1/2', 'is_correct' => true],
                            ['choice_text' => '0 ou 1', 'is_correct' => false],
                            ['choice_text' => 'Uniquement +1', 'is_correct' => false],
                            ['choice_text' => 'Toutes les valeurs réelles', 'is_correct' => false],
                        ],
                        'explanation' => 'Pour un électron de spin 1/2, la projection de spin selon un axe donné prend les valeurs ±1/2 en unités de ħ.',
                    ],
                    [
                        'question' => 'Combien d\'électrons au maximum peuvent occuper une orbitale atomique individuelle ?',
                        'choices' => [
                            ['choice_text' => 'Deux', 'is_correct' => true],
                            ['choice_text' => 'Un seul', 'is_correct' => false],
                            ['choice_text' => 'Quatre', 'is_correct' => false],
                            ['choice_text' => 'Huit', 'is_correct' => false],
                        ],
                        'explanation' => 'Une orbitale peut contenir au maximum deux électrons, avec des spins opposés.',
                    ],
                    [
                        'question' => 'Quel principe explique cette limite de deux électrons par orbitale ?',
                        'choices' => [
                            ['choice_text' => 'Le principe d\'exclusion de Pauli', 'is_correct' => true],
                            ['choice_text' => 'Le principe d\'Archimède', 'is_correct' => false],
                            ['choice_text' => 'Le principe de relativité', 'is_correct' => false],
                            ['choice_text' => 'La loi de Hooke', 'is_correct' => false],
                        ],
                        'explanation' => 'Le principe d\'exclusion interdit à deux électrons identiques d\'un même atome d\'avoir exactement les quatre mêmes nombres quantiques.',
                    ],
                    [
                        'question' => 'Combien d\'orbitales p différentes existe-t-il dans une sous-couche p ?',
                        'choices' => [
                            ['choice_text' => 'Trois', 'is_correct' => true],
                            ['choice_text' => 'Une', 'is_correct' => false],
                            ['choice_text' => 'Deux', 'is_correct' => false],
                            ['choice_text' => 'Cinq', 'is_correct' => false],
                        ],
                        'explanation' => 'Pour l = 1, m_l = -1, 0, +1, ce qui correspond à trois orbitales p.',
                    ],
                ],
            ],

            [
                'title' => 'Transitions et interactions lumière-matière',
                'description' => 'Comprendre comment les atomes interagissent avec la lumière par absorption, émission et transitions électroniques.',
                'questions' => [
                    [
                        'question' => 'Qu\'est-ce que l\'absorption d\'un photon par un atome ?',
                        'choices' => [
                            ['choice_text' => 'L\'atome reçoit l\'énergie du photon et peut passer vers un état plus énergétique', 'is_correct' => true],
                            ['choice_text' => 'L\'atome perd toujours un électron', 'is_correct' => false],
                            ['choice_text' => 'Le photon devient automatiquement un neutron', 'is_correct' => false],
                            ['choice_text' => 'Le noyau cesse d\'exister', 'is_correct' => false],
                        ],
                        'explanation' => 'L\'absorption d\'un photon peut provoquer une transition vers un niveau d\'énergie supérieur si son énergie convient.',
                    ],
                    [
                        'question' => 'Lors d\'une émission spontanée, un atome excité :',
                        'choices' => [
                            ['choice_text' => 'Peut revenir vers un niveau inférieur en émettant un photon', 'is_correct' => true],
                            ['choice_text' => 'Absorbe toujours deux photons', 'is_correct' => false],
                            ['choice_text' => 'Perd nécessairement un proton', 'is_correct' => false],
                            ['choice_text' => 'Devient automatiquement un ion négatif', 'is_correct' => false],
                        ],
                        'explanation' => 'L\'émission spontanée correspond à une désexcitation accompagnée de l\'émission d\'un photon.',
                    ],
                    [
                        'question' => 'Dans une transition atomique, l\'énergie du photon émis est égale à :',
                        'choices' => [
                            ['choice_text' => 'La différence entre les deux niveaux d\'énergie', 'is_correct' => true],
                            ['choice_text' => 'La somme de tous les niveaux de l\'atome', 'is_correct' => false],
                            ['choice_text' => 'La masse du noyau divisée par sa charge', 'is_correct' => false],
                            ['choice_text' => 'La température de l\'atome uniquement', 'is_correct' => false],
                        ],
                        'explanation' => 'Le photon emporte l\'énergie correspondant à la différence entre l\'état initial et l\'état final.',
                    ],
                    [
                        'question' => 'Quelle relation relie la fréquence du photon à la différence d\'énergie ?',
                        'choices' => [
                            ['choice_text' => 'ΔE = hν', 'is_correct' => true],
                            ['choice_text' => 'ΔE = h/ν', 'is_correct' => false],
                            ['choice_text' => 'ΔE = ν/h', 'is_correct' => false],
                            ['choice_text' => 'ΔE = h + ν', 'is_correct' => false],
                        ],
                        'explanation' => 'La relation de Planck permet d\'associer une fréquence à une quantité d\'énergie.',
                    ],
                    [
                        'question' => 'Qu\'est-ce qu\'une transition électronique ?',
                        'choices' => [
                            ['choice_text' => 'Le passage d\'un électron d\'un état quantique à un autre', 'is_correct' => true],
                            ['choice_text' => 'Le déplacement d\'un proton hors du noyau dans tous les cas', 'is_correct' => false],
                            ['choice_text' => 'La fusion de deux atomes', 'is_correct' => false],
                            ['choice_text' => 'Le mouvement mécanique du noyau autour du laboratoire', 'is_correct' => false],
                        ],
                        'explanation' => 'Une transition électronique correspond à un changement d\'état quantique de l\'électron.',
                    ],
                    [
                        'question' => 'Une transition vers un niveau d\'énergie plus élevé nécessite généralement :',
                        'choices' => [
                            ['choice_text' => 'Un apport d\'énergie', 'is_correct' => true],
                            ['choice_text' => 'Une perte d\'énergie uniquement', 'is_correct' => false],
                            ['choice_text' => 'Une perte de proton', 'is_correct' => false],
                            ['choice_text' => 'Une diminution obligatoire de la température du laboratoire', 'is_correct' => false],
                        ],
                        'explanation' => 'L\'électron doit recevoir l\'énergie nécessaire pour passer à un état plus énergétique.',
                    ],
                    [
                        'question' => 'Qu\'est-ce que l\'émission stimulée ?',
                        'choices' => [
                            ['choice_text' => 'Un photon incident provoque la désexcitation d\'un atome en produisant un photon cohérent avec lui', 'is_correct' => true],
                            ['choice_text' => 'Un atome absorbe toujours deux photons', 'is_correct' => false],
                            ['choice_text' => 'Un photon est détruit sans interaction', 'is_correct' => false],
                            ['choice_text' => 'Le noyau émet automatiquement un neutron', 'is_correct' => false],
                        ],
                        'explanation' => 'L\'émission stimulée est le principe fondamental permettant l\'amplification de la lumière dans un laser.',
                    ],
                    [
                        'question' => 'Quel dispositif repose directement sur l\'émission stimulée ?',
                        'choices' => [
                            ['choice_text' => 'Le laser', 'is_correct' => true],
                            ['choice_text' => 'Le baromètre', 'is_correct' => false],
                            ['choice_text' => 'Le thermomètre à liquide', 'is_correct' => false],
                            ['choice_text' => 'Le pendule simple', 'is_correct' => false],
                        ],
                        'explanation' => 'Le fonctionnement du laser repose notamment sur l\'émission stimulée et l\'amplification de photons.',
                    ],
                    [
                        'question' => 'Lorsqu\'un atome absorbe un photon exactement adapté à une transition autorisée, le photon peut :',
                        'choices' => [
                            ['choice_text' => 'Être absorbé tandis que l\'électron passe vers le niveau supérieur', 'is_correct' => true],
                            ['choice_text' => 'Devenir automatiquement un proton', 'is_correct' => false],
                            ['choice_text' => 'Voir sa vitesse diminuer dans le vide', 'is_correct' => false],
                            ['choice_text' => 'Changer la charge du neutron du noyau', 'is_correct' => false],
                        ],
                        'explanation' => 'L\'énergie du photon est transférée au système atomique lors de l\'absorption.',
                    ],
                    [
                        'question' => 'Une émission atomique est-elle nécessairement visible à l\'œil humain ?',
                        'choices' => [
                            ['choice_text' => 'Non, elle peut appartenir à l\'ultraviolet, à l\'infrarouge ou à d\'autres régions du spectre', 'is_correct' => true],
                            ['choice_text' => 'Oui, toutes les transitions produisent de la lumière visible', 'is_correct' => false],
                            ['choice_text' => 'Oui, sauf dans le vide', 'is_correct' => false],
                            ['choice_text' => 'Non, les atomes ne produisent jamais de photons', 'is_correct' => false],
                        ],
                        'explanation' => 'Les photons atomiques peuvent avoir des fréquences couvrant différentes régions du spectre électromagnétique.',
                    ],
                    [
                        'question' => 'Pourquoi les atomes peuvent-ils absorber certaines fréquences et pas d\'autres ?',
                        'choices' => [
                            ['choice_text' => 'Parce que les différences d\'énergie entre leurs états sont quantifiées', 'is_correct' => true],
                            ['choice_text' => 'Parce que toutes les fréquences ont exactement la même énergie', 'is_correct' => false],
                            ['choice_text' => 'Parce que les photons n\'ont aucune fréquence', 'is_correct' => false],
                            ['choice_text' => 'Parce que les électrons sont toujours immobiles', 'is_correct' => false],
                        ],
                        'explanation' => 'Les transitions quantiques sélectionnent des écarts d\'énergie précis, donc des fréquences précises.',
                    ],
                ],
            ],

            [
                'title' => 'Spin et propriétés électroniques',
                'description' => 'Introduire le spin électronique, les fermions et quelques règles de remplissage des états atomiques.',
                'questions' => [
                    [
                        'question' => 'Qu\'est-ce que le spin d\'un électron ?',
                        'choices' => [
                            ['choice_text' => 'Une propriété quantique intrinsèque de l\'électron', 'is_correct' => true],
                            ['choice_text' => 'La vitesse de rotation classique d\'une bille autour d\'elle-même', 'is_correct' => false],
                            ['choice_text' => 'Sa température interne', 'is_correct' => false],
                            ['choice_text' => 'La masse de son noyau', 'is_correct' => false],
                        ],
                        'explanation' => 'Le spin est une propriété intrinsèque quantique et ne doit pas être assimilé à une simple rotation classique.',
                    ],
                    [
                        'question' => 'Quel est le spin de l\'électron ?',
                        'choices' => [
                            ['choice_text' => '1/2', 'is_correct' => true],
                            ['choice_text' => '1', 'is_correct' => false],
                            ['choice_text' => '0', 'is_correct' => false],
                            ['choice_text' => '2', 'is_correct' => false],
                        ],
                        'explanation' => 'L\'électron est une particule de spin 1/2.',
                    ],
                    [
                        'question' => 'Comment classe-t-on l\'électron selon son spin demi-entier ?',
                        'choices' => [
                            ['choice_text' => 'Comme un fermion', 'is_correct' => true],
                            ['choice_text' => 'Comme un boson', 'is_correct' => false],
                            ['choice_text' => 'Comme un photon', 'is_correct' => false],
                            ['choice_text' => 'Comme une particule classique', 'is_correct' => false],
                        ],
                        'explanation' => 'Les particules de spin demi-entier sont des fermions.',
                    ],
                    [
                        'question' => 'Quelle règle impose que deux électrons d\'un même atome ne puissent pas avoir les quatre mêmes nombres quantiques ?',
                        'choices' => [
                            ['choice_text' => 'Le principe d\'exclusion de Pauli', 'is_correct' => true],
                            ['choice_text' => 'La loi de Snell-Descartes', 'is_correct' => false],
                            ['choice_text' => 'La loi d\'Ohm', 'is_correct' => false],
                            ['choice_text' => 'La loi de Hooke', 'is_correct' => false],
                        ],
                        'explanation' => 'Le principe d\'exclusion de Pauli est fondamental pour la structure électronique des atomes.',
                    ],
                    [
                        'question' => 'Pourquoi deux électrons peuvent-ils occuper la même orbitale ?',
                        'choices' => [
                            ['choice_text' => 'Ils doivent alors avoir des spins opposés', 'is_correct' => true],
                            ['choice_text' => 'Ils ont nécessairement le même spin', 'is_correct' => false],
                            ['choice_text' => 'Ils doivent avoir des masses différentes', 'is_correct' => false],
                            ['choice_text' => 'Ils doivent être de deux éléments différents', 'is_correct' => false],
                        ],
                        'explanation' => 'Deux électrons peuvent partager une orbitale si leurs projections de spin sont opposées.',
                    ],
                    [
                        'question' => 'Combien d\'électrons une sous-couche s peut-elle contenir au maximum ?',
                        'choices' => [
                            ['choice_text' => '2', 'is_correct' => true],
                            ['choice_text' => '4', 'is_correct' => false],
                            ['choice_text' => '6', 'is_correct' => false],
                            ['choice_text' => '8', 'is_correct' => false],
                        ],
                        'explanation' => 'Une sous-couche s contient une seule orbitale, qui peut accueillir deux électrons.',
                    ],
                    [
                        'question' => 'Combien d\'électrons une sous-couche p peut-elle contenir au maximum ?',
                        'choices' => [
                            ['choice_text' => '6', 'is_correct' => true],
                            ['choice_text' => '2', 'is_correct' => false],
                            ['choice_text' => '4', 'is_correct' => false],
                            ['choice_text' => '10', 'is_correct' => false],
                        ],
                        'explanation' => 'Une sous-couche p contient trois orbitales, chacune pouvant accueillir deux électrons.',
                    ],
                    [
                        'question' => 'Combien d\'électrons une sous-couche d peut-elle contenir au maximum ?',
                        'choices' => [
                            ['choice_text' => '10', 'is_correct' => true],
                            ['choice_text' => '5', 'is_correct' => false],
                            ['choice_text' => '6', 'is_correct' => false],
                            ['choice_text' => '14', 'is_correct' => false],
                        ],
                        'explanation' => 'Une sous-couche d possède cinq orbitales, donc 10 électrons au maximum.',
                    ],
                    [
                        'question' => 'Combien d\'électrons une sous-couche f peut-elle contenir au maximum ?',
                        'choices' => [
                            ['choice_text' => '14', 'is_correct' => true],
                            ['choice_text' => '7', 'is_correct' => false],
                            ['choice_text' => '10', 'is_correct' => false],
                            ['choice_text' => '18', 'is_correct' => false],
                        ],
                        'explanation' => 'Une sous-couche f possède sept orbitales, soit 14 électrons au maximum.',
                    ],
                    [
                        'question' => 'Pourquoi la structure électronique des atomes est-elle importante en chimie ?',
                        'choices' => [
                            ['choice_text' => 'Elle influence les propriétés chimiques et les liaisons entre les atomes', 'is_correct' => true],
                            ['choice_text' => 'Elle détermine uniquement la masse du neutron', 'is_correct' => false],
                            ['choice_text' => 'Elle n\'a aucun lien avec les réactions chimiques', 'is_correct' => false],
                            ['choice_text' => 'Elle ne concerne que les noyaux radioactifs', 'is_correct' => false],
                        ],
                        'explanation' => 'La répartition des électrons, notamment les électrons de valence, joue un rôle majeur dans les propriétés chimiques.',
                    ],
                ],
            ],

            [
                'title' => 'Ionisation et excitation',
                'description' => 'Faire la distinction entre excitation et ionisation et comprendre les énergies nécessaires.',
                'questions' => [
                    [
                        'question' => 'Quelle est la différence fondamentale entre excitation et ionisation ?',
                        'choices' => [
                            ['choice_text' => 'L\'excitation change l\'état d\'un électron lié, tandis que l\'ionisation l\'arrache complètement de l\'atome', 'is_correct' => true],
                            ['choice_text' => 'L\'excitation détruit le noyau et l\'ionisation chauffe l\'atome', 'is_correct' => false],
                            ['choice_text' => 'Les deux phénomènes sont exactement identiques', 'is_correct' => false],
                            ['choice_text' => 'L\'ionisation concerne uniquement les neutrons', 'is_correct' => false],
                        ],
                        'explanation' => 'Une excitation conserve l\'électron dans l\'atome mais le place dans un état plus énergétique ; l\'ionisation le libère.',
                    ],
                    [
                        'question' => 'Pour exciter un électron d\'un niveau à un autre, l\'énergie fournie doit-elle être appropriée ?',
                        'choices' => [
                            ['choice_text' => 'Oui', 'is_correct' => true],
                            ['choice_text' => 'Non, n\'importe quelle énergie produit toujours la même transition', 'is_correct' => false],
                            ['choice_text' => 'Seulement si l\'atome est dans le vide', 'is_correct' => false],
                            ['choice_text' => 'Seulement pour les noyaux', 'is_correct' => false],
                        ],
                        'explanation' => 'Une transition liée requiert une énergie correspondant à la différence entre les niveaux concernés.',
                    ],
                    [
                        'question' => 'L\'énergie d\'ionisation correspond à :',
                        'choices' => [
                            ['choice_text' => 'L\'énergie minimale nécessaire pour arracher un électron à l\'atome dans un état donné', 'is_correct' => true],
                            ['choice_text' => 'L\'énergie nécessaire pour créer un proton', 'is_correct' => false],
                            ['choice_text' => 'La masse totale des électrons', 'is_correct' => false],
                            ['choice_text' => 'La température de fusion du matériau', 'is_correct' => false],
                        ],
                        'explanation' => 'L\'énergie d\'ionisation mesure le coût énergétique minimal pour libérer un électron.',
                    ],
                    [
                        'question' => 'Un atome qui a perdu un électron devient généralement :',
                        'choices' => [
                            ['choice_text' => 'Un ion positif', 'is_correct' => true],
                            ['choice_text' => 'Un ion négatif', 'is_correct' => false],
                            ['choice_text' => 'Un neutron', 'is_correct' => false],
                            ['choice_text' => 'Un photon', 'is_correct' => false],
                        ],
                        'explanation' => 'La perte d\'un électron négatif laisse une charge nette positive.',
                    ],
                    [
                        'question' => 'Un atome qui gagne un électron devient généralement :',
                        'choices' => [
                            ['choice_text' => 'Un ion négatif', 'is_correct' => true],
                            ['choice_text' => 'Un ion positif', 'is_correct' => false],
                            ['choice_text' => 'Un proton libre', 'is_correct' => false],
                            ['choice_text' => 'Un neutron excité', 'is_correct' => false],
                        ],
                        'explanation' => 'L\'ajout d\'un électron supplémentaire rend la charge nette négative.',
                    ],
                    [
                        'question' => 'Que peut émettre un atome qui revient d\'un état excité vers un niveau inférieur ?',
                        'choices' => [
                            ['choice_text' => 'Un photon', 'is_correct' => true],
                            ['choice_text' => 'Un neutron dans tous les cas', 'is_correct' => false],
                            ['choice_text' => 'Un proton dans tous les cas', 'is_correct' => false],
                            ['choice_text' => 'Un électron supplémentaire', 'is_correct' => false],
                        ],
                        'explanation' => 'La désexcitation électronique peut libérer l\'énergie sous forme d\'un photon.',
                    ],
                    [
                        'question' => 'Si l\'énergie fournie à un atome dépasse son énergie d\'ionisation, l\'électron libéré peut-il posséder une énergie cinétique ?',
                        'choices' => [
                            ['choice_text' => 'Oui, après avoir fourni l\'énergie d\'ionisation, l\'excédent peut devenir énergie cinétique', 'is_correct' => true],
                            ['choice_text' => 'Non, l\'excédent disparaît toujours', 'is_correct' => false],
                            ['choice_text' => 'Oui, mais uniquement pour les neutrons', 'is_correct' => false],
                            ['choice_text' => 'Non, un électron libre ne peut jamais avoir d\'énergie', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans une ionisation, l\'énergie incidente se répartit entre l\'énergie nécessaire à l\'extraction et l\'énergie cinétique des particules finales.',
                    ],
                    [
                        'question' => 'Quelle situation constitue une excitation atomique ?',
                        'choices' => [
                            ['choice_text' => 'Un électron passe d\'un état lié à un état lié plus énergétique', 'is_correct' => true],
                            ['choice_text' => 'Un proton quitte toujours le noyau', 'is_correct' => false],
                            ['choice_text' => 'Un neutron devient un photon', 'is_correct' => false],
                            ['choice_text' => 'Le noyau disparaît', 'is_correct' => false],
                        ],
                        'explanation' => 'Une excitation conserve l\'électron dans un état lié mais modifie son état quantique.',
                    ],
                    [
                        'question' => 'Quel type de rayonnement peut ioniser les atomes lorsqu\'il possède une énergie suffisante ?',
                        'choices' => [
                            ['choice_text' => 'Les rayonnements ionisants, comme certains rayons X et gamma', 'is_correct' => true],
                            ['choice_text' => 'Toutes les ondes radio sans exception', 'is_correct' => false],
                            ['choice_text' => 'Toutes les ondes mécaniques', 'is_correct' => false],
                            ['choice_text' => 'Uniquement les sons audibles', 'is_correct' => false],
                        ],
                        'explanation' => 'Les rayons X et gamma ont généralement des photons suffisamment énergétiques pour produire des ionisations.',
                    ],
                    [
                        'question' => 'Pourquoi l\'ionisation modifie-t-elle la charge de l\'atome ?',
                        'choices' => [
                            ['choice_text' => 'Parce qu\'un électron est retiré ou ajouté', 'is_correct' => true],
                            ['choice_text' => 'Parce que le nombre de protons change toujours', 'is_correct' => false],
                            ['choice_text' => 'Parce que les neutrons deviennent chargés', 'is_correct' => false],
                            ['choice_text' => 'Parce que la constante de Planck change', 'is_correct' => false],
                        ],
                        'explanation' => 'Modifier le nombre d\'électrons sans changer le nombre de protons crée une charge nette.',
                    ],
                ],
            ],

            [
                'title' => 'Applications de la physique atomique',
                'description' => 'Découvrir les applications de la physique atomique dans les lasers, l\'analyse spectrale, la médecine et les technologies modernes.',
                'questions' => [
                    [
                        'question' => 'Quelle technologie repose directement sur des transitions électroniques contrôlées ?',
                        'choices' => [
                            ['choice_text' => 'Le laser', 'is_correct' => true],
                            ['choice_text' => 'Le baromètre', 'is_correct' => false],
                            ['choice_text' => 'Le pendule mécanique', 'is_correct' => false],
                            ['choice_text' => 'La balance à ressort', 'is_correct' => false],
                        ],
                        'explanation' => 'Le laser exploite des transitions entre niveaux d\'énergie et l\'émission stimulée.',
                    ],
                    [
                        'question' => 'Pourquoi les lampes à décharge produisent-elles souvent des couleurs caractéristiques ?',
                        'choices' => [
                            ['choice_text' => 'Les atomes ou molécules excités émettent des photons à certaines fréquences', 'is_correct' => true],
                            ['choice_text' => 'Le verre produit toujours la même couleur', 'is_correct' => false],
                            ['choice_text' => 'Le courant électrique est naturellement coloré', 'is_correct' => false],
                            ['choice_text' => 'Les électrons deviennent lumineux par eux-mêmes sans transition', 'is_correct' => false],
                        ],
                        'explanation' => 'Les transitions électroniques produisent des photons à des fréquences liées aux niveaux d\'énergie.',
                    ],
                    [
                        'question' => 'Quel domaine utilise les spectres atomiques pour identifier la composition d\'un matériau ?',
                        'choices' => [
                            ['choice_text' => 'La spectroscopie', 'is_correct' => true],
                            ['choice_text' => 'La mécanique des fluides', 'is_correct' => false],
                            ['choice_text' => 'La statique uniquement', 'is_correct' => false],
                            ['choice_text' => 'La thermodynamique des moteurs uniquement', 'is_correct' => false],
                        ],
                        'explanation' => 'La spectroscopie étudie les interactions entre matière et rayonnement afin d\'obtenir des informations sur la composition et la structure.',
                    ],
                    [
                        'question' => 'Pourquoi les horloges atomiques sont-elles très précises ?',
                        'choices' => [
                            ['choice_text' => 'Elles utilisent des transitions atomiques associées à des fréquences très stables', 'is_correct' => true],
                            ['choice_text' => 'Elles reposent uniquement sur la longueur d\'un ressort', 'is_correct' => false],
                            ['choice_text' => 'Elles n\'utilisent aucune fréquence', 'is_correct' => false],
                            ['choice_text' => 'Elles mesurent le temps avec la température extérieure', 'is_correct' => false],
                        ],
                        'explanation' => 'Les horloges atomiques utilisent des fréquences de transition très bien définies pour réaliser une référence temporelle.',
                    ],
                    [
                        'question' => 'Quel type de mesure peut être utilisé pour détecter certains éléments dans une étoile ?',
                        'choices' => [
                            ['choice_text' => 'L\'analyse de son spectre lumineux', 'is_correct' => true],
                            ['choice_text' => 'La mesure du poids de l\'étoile avec une balance', 'is_correct' => false],
                            ['choice_text' => 'La mesure de sa pression avec un manomètre terrestre', 'is_correct' => false],
                            ['choice_text' => 'L\'analyse de ses sons audibles', 'is_correct' => false],
                        ],
                        'explanation' => 'Les signatures spectrales permettent d\'identifier certains éléments présents dans les atmosphères stellaires.',
                    ],
                    [
                        'question' => 'Quel instrument utilise les propriétés atomiques pour mesurer très précisément certaines fréquences ?',
                        'choices' => [
                            ['choice_text' => 'Une horloge atomique', 'is_correct' => true],
                            ['choice_text' => 'Un thermomètre à mercure', 'is_correct' => false],
                            ['choice_text' => 'Un baromètre', 'is_correct' => false],
                            ['choice_text' => 'Une règle graduée', 'is_correct' => false],
                        ],
                        'explanation' => 'Les horloges atomiques utilisent des transitions atomiques comme référence de fréquence.',
                    ],
                    [
                        'question' => 'Pourquoi les semi-conducteurs sont-ils liés à la physique atomique et quantique ?',
                        'choices' => [
                            ['choice_text' => 'Leurs propriétés électroniques dépendent de la structure des états d\'énergie des électrons', 'is_correct' => true],
                            ['choice_text' => 'Parce qu\'ils ne contiennent aucun électron', 'is_correct' => false],
                            ['choice_text' => 'Parce que leur fonctionnement dépend uniquement de la gravité', 'is_correct' => false],
                            ['choice_text' => 'Parce que leurs noyaux n\'ont aucune charge', 'is_correct' => false],
                        ],
                        'explanation' => 'La structure électronique des matériaux détermine leurs bandes d\'énergie et donc leurs propriétés électriques.',
                    ],
                    [
                        'question' => 'Quel type de rayonnement est utilisé pour certaines techniques d\'analyse de la matière grâce à ses interactions avec les électrons ?',
                        'choices' => [
                            ['choice_text' => 'Les rayons X', 'is_correct' => true],
                            ['choice_text' => 'Les ondes sonores audibles uniquement', 'is_correct' => false],
                            ['choice_text' => 'Les vagues de surface', 'is_correct' => false],
                            ['choice_text' => 'Les vibrations mécaniques d\'un ressort', 'is_correct' => false],
                        ],
                        'explanation' => 'Les rayons X interagissent fortement avec la matière et sont utilisés en imagerie, en diffraction et en spectroscopie.',
                    ],
                    [
                        'question' => 'Quel phénomène atomique est exploité dans certaines sources lumineuses comme les lampes à vapeur métallique ?',
                        'choices' => [
                            ['choice_text' => 'L\'émission de photons lors de transitions électroniques', 'is_correct' => true],
                            ['choice_text' => 'La transformation des neutrons en lumière visible', 'is_correct' => false],
                            ['choice_text' => 'La disparition des noyaux', 'is_correct' => false],
                            ['choice_text' => 'La combustion obligatoire du verre', 'is_correct' => false],
                        ],
                        'explanation' => 'Les atomes excités peuvent émettre des photons caractéristiques lors de leur désexcitation.',
                    ],
                    [
                        'question' => 'Pourquoi la compréhension des niveaux électroniques est-elle utile en technologie ?',
                        'choices' => [
                            ['choice_text' => 'Elle permet de comprendre et de concevoir de nombreux dispositifs optiques et électroniques', 'is_correct' => true],
                            ['choice_text' => 'Parce qu\'elle permet de supprimer toutes les interactions entre particules', 'is_correct' => false],
                            ['choice_text' => 'Parce qu\'elle remplace la mécanique classique dans tous les objets', 'is_correct' => false],
                            ['choice_text' => 'Parce qu\'elle concerne uniquement les expériences historiques', 'is_correct' => false],
                        ],
                        'explanation' => 'Les transitions atomiques et la structure électronique sont au cœur de nombreuses technologies modernes.',
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
                    'duration' => 10,
                    'passing_score' => 50,
                    'total_marks' => 10,
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
                        'explanation' => $questionData['explanation'],
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