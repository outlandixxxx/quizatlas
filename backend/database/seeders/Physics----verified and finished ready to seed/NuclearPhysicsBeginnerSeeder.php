<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class NuclearPhysicsBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'nuclear-physics')->firstOrFail();

        $quizzes = [
            [
                'title' => 'Introduction à la physique nucléaire',
                'description' => 'Découvrir le noyau atomique, ses constituants, sa notation et les principales notions de physique nucléaire.',
                'questions' => [
                    [
                        'question' => 'Quelles particules constituent principalement le noyau atomique ?',
                        'choices' => [
                            ['choice_text' => 'Les électrons et les photons', 'is_correct' => false],
                            ['choice_text' => 'Les électrons uniquement', 'is_correct' => false],
                            ['choice_text' => 'Les photons uniquement', 'is_correct' => false],
                            ['choice_text' => 'Les protons et les neutrons', 'is_correct' => true],
                        ],
                        'explanation' => 'Le noyau est constitué de nucléons : les protons et les neutrons.',
                    ],
                    [
                        'question' => 'Quelle particule du noyau porte une charge électrique positive ?',
                        'choices' => [
                            ['choice_text' => 'Le proton', 'is_correct' => true],
                            ['choice_text' => 'Le neutron', 'is_correct' => false],
                            ['choice_text' => 'L’électron', 'is_correct' => false],
                            ['choice_text' => 'Le neutrino', 'is_correct' => false],
                        ],
                        'explanation' => 'Chaque proton possède une charge électrique positive +e.',
                    ],
                    [
                        'question' => 'Quelle est la charge électrique nette d’un neutron ?',
                        'choices' => [
                            ['choice_text' => 'Positive', 'is_correct' => false],
                            ['choice_text' => 'Nulle', 'is_correct' => true],
                            ['choice_text' => 'Négative', 'is_correct' => false],
                            ['choice_text' => 'Double de celle du proton', 'is_correct' => false],
                        ],
                        'explanation' => 'Le neutron est une particule électriquement neutre.',
                    ],
                    [
                        'question' => 'Que représente le numéro atomique Z d’un noyau ?',
                        'choices' => [
                            ['choice_text' => 'Le nombre de neutrons', 'is_correct' => false],
                            ['choice_text' => 'Le nombre total de nucléons', 'is_correct' => false],
                            ['choice_text' => 'Le nombre de protons', 'is_correct' => true],
                            ['choice_text' => 'Le nombre d’électrons excités', 'is_correct' => false],
                        ],
                        'explanation' => 'Le numéro atomique Z correspond au nombre de protons du noyau.',
                    ],
                    [
                        'question' => 'Que représente le nombre de masse A ?',
                        'choices' => [
                            ['choice_text' => 'Le nombre de protons uniquement', 'is_correct' => false],
                            ['choice_text' => 'Le nombre de neutrons uniquement', 'is_correct' => false],
                            ['choice_text' => 'Le nombre total de protons et de neutrons', 'is_correct' => true],
                            ['choice_text' => 'La masse exacte du noyau en kilogrammes', 'is_correct' => false],
                        ],
                        'explanation' => 'Le nombre de masse A est égal au nombre total de nucléons : A = Z + N.',
                    ],
                    [
                        'question' => 'Des noyaux ayant le même nombre de protons mais des nombres différents de neutrons sont appelés :',
                        'choices' => [
                            ['choice_text' => 'Des ions', 'is_correct' => false],
                            ['choice_text' => 'Des isotopes', 'is_correct' => true],
                            ['choice_text' => 'Des molécules', 'is_correct' => false],
                            ['choice_text' => 'Des électrons libres', 'is_correct' => false],
                        ],
                        'explanation' => 'Les isotopes d’un élément ont le même Z mais des nombres de neutrons différents.',
                    ],
                    [
                        'question' => 'Quelle interaction maintient principalement les nucléons liés dans le noyau ?',
                        'choices' => [
                            ['choice_text' => 'L’interaction nucléaire forte', 'is_correct' => true],
                            ['choice_text' => 'L’interaction électrostatique seule', 'is_correct' => false],
                            ['choice_text' => 'La force de frottement', 'is_correct' => false],
                            ['choice_text' => 'La pression atmosphérique', 'is_correct' => false],
                        ],
                        'explanation' => 'L’interaction forte résiduelle assure la cohésion du noyau à très courte portée.',
                    ],
                    [
                        'question' => 'Pourquoi les protons du noyau ne se repoussent-ils pas simplement jusqu’à séparer le noyau ?',
                        'choices' => [
                            ['choice_text' => 'Les protons sont électriquement neutres', 'is_correct' => false],
                            ['choice_text' => 'L’interaction nucléaire attractive domine à très courte distance', 'is_correct' => true],
                            ['choice_text' => 'La gravité terrestre annule leur répulsion', 'is_correct' => false],
                            ['choice_text' => 'Les neutrons suppriment leur charge électrique', 'is_correct' => false],
                        ],
                        'explanation' => 'La répulsion électrique existe, mais l’interaction nucléaire attractive est forte à l’échelle du noyau.',
                    ],
                    [
                        'question' => 'Quelle relation simple permet de calculer le nombre de neutrons N dans un noyau ?',
                        'choices' => [
                            ['choice_text' => 'N = A - Z', 'is_correct' => true],
                            ['choice_text' => 'N = A + Z', 'is_correct' => false],
                            ['choice_text' => 'N = Z - A', 'is_correct' => false],
                            ['choice_text' => 'N = A / Z', 'is_correct' => false],
                        ],
                        'explanation' => 'Comme A = Z + N, on obtient N = A - Z.',
                    ],
                    [
                        'question' => 'Quelle notation représente généralement un noyau de numéro atomique Z et de nombre de masse A ?',
                        'choices' => [
                            ['choice_text' => 'X = A + Z', 'is_correct' => false],
                            ['choice_text' => 'X = A - Z', 'is_correct' => false],
                            ['choice_text' => 'X = Z / A', 'is_correct' => false],
                            ['choice_text' => '⁽ᴬ⁾₍Z₎X', 'is_correct' => true],
                        ],
                        'explanation' => 'La notation nucléaire standard place A en haut à gauche et Z en bas à gauche du symbole X.',
                    ],
                ],
            ],

            [
                'title' => 'Stabilité et énergie de liaison',
                'description' => 'Comprendre la stabilité des noyaux, la masse nucléaire et l’énergie de liaison.',
                'questions' => [
                    [
                        'question' => 'Qu’appelle-t-on énergie de liaison nucléaire ?',
                        'choices' => [
                            ['choice_text' => 'L’énergie nécessaire pour arracher un électron uniquement', 'is_correct' => false],
                            ['choice_text' => 'L’énergie cinétique de l’électron autour du noyau', 'is_correct' => false],
                            ['choice_text' => 'L’énergie thermique du laboratoire', 'is_correct' => false],
                            ['choice_text' => 'L’énergie nécessaire pour séparer complètement un noyau en nucléons', 'is_correct' => true],
                        ],
                        'explanation' => 'L’énergie de liaison mesure la cohésion du noyau et l’énergie qu’il faut fournir pour le dissocier.',
                    ],
                    [
                        'question' => 'Que désigne le défaut de masse d’un noyau ?',
                        'choices' => [
                            ['choice_text' => 'La différence entre la masse d’un électron et celle d’un photon', 'is_correct' => false],
                            ['choice_text' => 'La masse perdue uniquement par les électrons', 'is_correct' => false],
                            ['choice_text' => 'La différence entre la somme des masses des nucléons séparés et la masse du noyau', 'is_correct' => true],
                            ['choice_text' => 'La masse de l’atmosphère entourant le noyau', 'is_correct' => false],
                        ],
                        'explanation' => 'La masse d’un noyau lié est inférieure à la somme des masses des nucléons isolés.',
                    ],
                    [
                        'question' => 'Quelle relation d’Einstein relie la masse et l’énergie ?',
                        'choices' => [
                            ['choice_text' => 'E = mc²', 'is_correct' => true],
                            ['choice_text' => 'E = m/c²', 'is_correct' => false],
                            ['choice_text' => 'E = mc', 'is_correct' => false],
                            ['choice_text' => 'E = c/m', 'is_correct' => false],
                        ],
                        'explanation' => 'La célèbre relation E = mc² traduit l’équivalence entre masse et énergie.',
                    ],
                    [
                        'question' => 'À quoi est directement liée l’énergie de liaison par nucléon ?',
                        'choices' => [
                            ['choice_text' => 'À la couleur du matériau', 'is_correct' => false],
                            ['choice_text' => 'À la cohésion moyenne du noyau', 'is_correct' => true],
                            ['choice_text' => 'À la charge de l’électron', 'is_correct' => false],
                            ['choice_text' => 'À la pression atmosphérique', 'is_correct' => false],
                        ],
                        'explanation' => 'Une énergie de liaison par nucléon élevée est généralement associée à une forte stabilité nucléaire.',
                    ],
                    [
                        'question' => 'Quel facteur influence fortement la stabilité d’un noyau lourd ?',
                        'choices' => [
                            ['choice_text' => 'La couleur des électrons', 'is_correct' => false],
                            ['choice_text' => 'L’équilibre entre les forces nucléaires et la répulsion électrique des protons', 'is_correct' => true],
                            ['choice_text' => 'La taille du récipient', 'is_correct' => false],
                            ['choice_text' => 'La pression atmosphérique uniquement', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans les noyaux lourds, la répulsion entre les nombreux protons joue un rôle important dans la stabilité.',
                    ],
                    [
                        'question' => 'Un noyau radioactif est généralement qualifié de :',
                        'choices' => [
                            ['choice_text' => 'Parfaitement immuable', 'is_correct' => false],
                            ['choice_text' => 'Électriquement toujours neutre', 'is_correct' => false],
                            ['choice_text' => 'Sans nucléons', 'is_correct' => false],
                            ['choice_text' => 'Instable', 'is_correct' => true],
                        ],
                        'explanation' => 'Un noyau radioactif est instable et peut se transformer spontanément en un autre noyau ou état.',
                    ],
                    [
                        'question' => 'Les noyaux très légers peuvent libérer de l’énergie par :',
                        'choices' => [
                            ['choice_text' => 'Fission du noyau léger en permanence', 'is_correct' => false],
                            ['choice_text' => 'Fusion nucléaire', 'is_correct' => true],
                            ['choice_text' => 'Refroidissement électronique', 'is_correct' => false],
                            ['choice_text' => 'Évaporation des électrons', 'is_correct' => false],
                        ],
                        'explanation' => 'La fusion de noyaux légers peut produire un noyau plus fortement lié et libérer de l’énergie.',
                    ],
                    [
                        'question' => 'Les noyaux très lourds peuvent libérer de l’énergie par :',
                        'choices' => [
                            ['choice_text' => 'Fusion électronique', 'is_correct' => false],
                            ['choice_text' => 'Émission acoustique', 'is_correct' => false],
                            ['choice_text' => 'Fission nucléaire', 'is_correct' => true],
                            ['choice_text' => 'Ionisation de l’air uniquement', 'is_correct' => false],
                        ],
                        'explanation' => 'La fission peut transformer un noyau lourd en noyaux plus légers avec libération d’énergie.',
                    ],
                    [
                        'question' => 'Pourquoi une énergie de liaison totale élevée contribue-t-elle à la cohésion d’un noyau ?',
                        'choices' => [
                            ['choice_text' => 'Elle signifie que le noyau ne contient aucun proton', 'is_correct' => false],
                            ['choice_text' => 'Elle rend le noyau automatiquement radioactif', 'is_correct' => false],
                            ['choice_text' => 'Il faut fournir davantage d’énergie pour séparer ses nucléons', 'is_correct' => true],
                            ['choice_text' => 'Elle supprime complètement la répulsion électrique', 'is_correct' => false],
                        ],
                        'explanation' => 'Une forte énergie de liaison signifie qu’une quantité importante d’énergie est nécessaire pour dissocier le noyau.',
                    ],
                    [
                        'question' => 'La stabilité d’un noyau dépend-elle uniquement du nombre total de nucléons ?',
                        'choices' => [
                            ['choice_text' => 'Non, le rapport protons-neutrons et la structure nucléaire jouent aussi un rôle', 'is_correct' => true],
                            ['choice_text' => 'Oui, uniquement de A', 'is_correct' => false],
                            ['choice_text' => 'Oui, uniquement de Z', 'is_correct' => false],
                            ['choice_text' => 'Non, elle dépend uniquement de la température extérieure', 'is_correct' => false],
                        ],
                        'explanation' => 'La stabilité nucléaire dépend de plusieurs facteurs, notamment de la composition en protons et neutrons.',
                    ],
                ],
            ],

            [
                'title' => 'Radioactivité',
                'description' => 'Découvrir le phénomène de radioactivité et les principales caractéristiques des désintégrations nucléaires.',
                'questions' => [
                    [
                        'question' => 'Qu’est-ce que la radioactivité ?',
                        'choices' => [
                            ['choice_text' => 'La transformation spontanée de noyaux instables avec émission de rayonnements ou de particules', 'is_correct' => true],
                            ['choice_text' => 'La perte des électrons dans tous les atomes stables', 'is_correct' => false],
                            ['choice_text' => 'Une réaction chimique ordinaire', 'is_correct' => false],
                            ['choice_text' => 'Une augmentation obligatoire de la température', 'is_correct' => false],
                        ],
                        'explanation' => 'La radioactivité est un processus nucléaire spontané affectant les noyaux instables.',
                    ],
                    [
                        'question' => 'La désintégration radioactive est-elle généralement spontanée ?',
                        'choices' => [
                            ['choice_text' => 'Non, elle nécessite toujours une commande extérieure', 'is_correct' => false],
                            ['choice_text' => 'Oui', 'is_correct' => true],
                            ['choice_text' => 'Uniquement pour les noyaux artificiels', 'is_correct' => false],
                            ['choice_text' => 'Seulement dans l’eau', 'is_correct' => false],
                        ],
                        'explanation' => 'Une désintégration radioactive individuelle se produit spontanément selon une probabilité caractéristique du noyau.',
                    ],
                    [
                        'question' => 'Quel type de radioactivité correspond à l’émission d’un noyau d’hélium ?',
                        'choices' => [
                            ['choice_text' => 'La radioactivité bêta moins', 'is_correct' => false],
                            ['choice_text' => 'La radioactivité gamma', 'is_correct' => false],
                            ['choice_text' => 'La radioactivité alpha', 'is_correct' => true],
                            ['choice_text' => 'La fluorescence', 'is_correct' => false],
                        ],
                        'explanation' => 'Une particule alpha est un noyau d’hélium composé de deux protons et de deux neutrons.',
                    ],
                    [
                        'question' => 'De quoi est principalement constituée une particule bêta moins ?',
                        'choices' => [
                            ['choice_text' => 'D’un électron', 'is_correct' => true],
                            ['choice_text' => 'D’un proton', 'is_correct' => false],
                            ['choice_text' => 'D’un noyau d’hélium', 'is_correct' => false],
                            ['choice_text' => 'D’un photon gamma', 'is_correct' => false],
                        ],
                        'explanation' => 'La désintégration bêta moins s’accompagne de l’émission d’un électron et d’un antineutrino électronique.',
                    ],
                    [
                        'question' => 'Le rayonnement gamma est principalement constitué de :',
                        'choices' => [
                            ['choice_text' => 'Neutrons uniquement', 'is_correct' => false],
                            ['choice_text' => 'Électrons uniquement', 'is_correct' => false],
                            ['choice_text' => 'Photons de très haute énergie', 'is_correct' => true],
                            ['choice_text' => 'Noyaux d’hélium', 'is_correct' => false],
                        ],
                        'explanation' => 'Le rayonnement gamma est un rayonnement électromagnétique composé de photons énergétiques.',
                    ],
                    [
                        'question' => 'Lors d’une désintégration alpha, le nombre de masse A diminue de :',
                        'choices' => [
                            ['choice_text' => '1', 'is_correct' => false],
                            ['choice_text' => '2', 'is_correct' => false],
                            ['choice_text' => '0', 'is_correct' => false],
                            ['choice_text' => '4', 'is_correct' => true],
                        ],
                        'explanation' => 'Une particule alpha contient deux protons et deux neutrons, donc A diminue de 4.',
                    ],
                    [
                        'question' => 'Lors d’une désintégration alpha, le numéro atomique Z diminue de :',
                        'choices' => [
                            ['choice_text' => '4', 'is_correct' => false],
                            ['choice_text' => '1', 'is_correct' => false],
                            ['choice_text' => '0', 'is_correct' => false],
                            ['choice_text' => '2', 'is_correct' => true],
                        ],
                        'explanation' => 'Comme deux protons sont éjectés dans la particule alpha, Z diminue de 2.',
                    ],
                    [
                        'question' => 'Lors d’une désintégration gamma, le noyau :',
                        'choices' => [
                            ['choice_text' => 'Perd toujours deux protons', 'is_correct' => false],
                            ['choice_text' => 'Gagne toujours un neutron', 'is_correct' => false],
                            ['choice_text' => 'Se désexcite sans changer son nombre de protons ni de neutrons', 'is_correct' => true],
                            ['choice_text' => 'Perd un électron orbital par définition', 'is_correct' => false],
                        ],
                        'explanation' => 'L’émission gamma correspond à une transition entre états nucléaires d’énergie différente sans modification de A ou de Z.',
                    ],
                    [
                        'question' => 'Quel type de rayonnement possède généralement le pouvoir de pénétration le plus élevé parmi alpha, bêta et gamma ?',
                        'choices' => [
                            ['choice_text' => 'Alpha', 'is_correct' => false],
                            ['choice_text' => 'Bêta', 'is_correct' => false],
                            ['choice_text' => 'Ils sont toujours identiques', 'is_correct' => false],
                            ['choice_text' => 'Gamma', 'is_correct' => true],
                        ],
                        'explanation' => 'Le rayonnement gamma est beaucoup plus pénétrant que les rayonnements alpha et bêta.',
                    ],
                    [
                        'question' => 'Quel rayonnement est généralement le plus facilement arrêté par une feuille de papier ?',
                        'choices' => [
                            ['choice_text' => 'Gamma', 'is_correct' => false],
                            ['choice_text' => 'Alpha', 'is_correct' => true],
                            ['choice_text' => 'Bêta', 'is_correct' => false],
                            ['choice_text' => 'Les trois de façon identique', 'is_correct' => false],
                        ],
                        'explanation' => 'Les particules alpha ont un très faible pouvoir de pénétration dans la matière et peuvent être arrêtées par une simple feuille de papier.',
                    ],
                ],
            ],

            [
                'title' => 'Lois de désintégration radioactive',
                'description' => 'Étudier la décroissance radioactive, la constante de désintégration et la demi-vie.',
                'questions' => [
                    [
                        'question' => 'Quelle grandeur décrit la rapidité de désintégration d’un noyau radioactif ?',
                        'choices' => [
                            ['choice_text' => 'La température uniquement', 'is_correct' => false],
                            ['choice_text' => 'La charge de l’électron', 'is_correct' => false],
                            ['choice_text' => 'Le volume du laboratoire', 'is_correct' => false],
                            ['choice_text' => 'La constante de désintégration radioactive λ', 'is_correct' => true],
                        ],
                        'explanation' => 'La constante λ caractérise la probabilité de désintégration par unité de temps.',
                    ],
                    [
                        'question' => 'Quelle forme générale décrit la décroissance du nombre de noyaux radioactifs ?',
                        'choices' => [
                            ['choice_text' => 'Une croissance linéaire obligatoire', 'is_correct' => false],
                            ['choice_text' => 'Une oscillation sinusoïdale obligatoire', 'is_correct' => false],
                            ['choice_text' => 'Une décroissance exponentielle', 'is_correct' => true],
                            ['choice_text' => 'Une variation constante sans diminution', 'is_correct' => false],
                        ],
                        'explanation' => 'Le nombre moyen de noyaux non désintégrés suit N(t) = N₀e^(-λt).',
                    ],
                    [
                        'question' => 'Qu’est-ce que la demi-vie d’un noyau radioactif ?',
                        'choices' => [
                            ['choice_text' => 'Le temps nécessaire pour que tous les noyaux disparaissent', 'is_correct' => false],
                            ['choice_text' => 'Le temps nécessaire pour doubler le nombre de noyaux', 'is_correct' => false],
                            ['choice_text' => 'La moitié de la masse du proton', 'is_correct' => false],
                            ['choice_text' => 'Le temps nécessaire pour que la moitié des noyaux initiaux se soient désintégrés', 'is_correct' => true],
                        ],
                        'explanation' => 'Après une demi-vie, il reste statistiquement la moitié des noyaux initiaux non désintégrés.',
                    ],
                    [
                        'question' => 'Après deux demi-vies, quelle fraction du nombre initial de noyaux reste-t-il ?',
                        'choices' => [
                            ['choice_text' => 'La moitié', 'is_correct' => false],
                            ['choice_text' => 'Trois quarts', 'is_correct' => false],
                            ['choice_text' => 'Un quart', 'is_correct' => true],
                            ['choice_text' => 'Zéro', 'is_correct' => false],
                        ],
                        'explanation' => 'Après une demi-vie il reste 1/2, puis après une deuxième il reste 1/4.',
                    ],
                    [
                        'question' => 'Quelle relation relie la demi-vie T₁/₂ à la constante de désintégration λ ?',
                        'choices' => [
                            ['choice_text' => 'T₁/₂ = λ / ln(2)', 'is_correct' => false],
                            ['choice_text' => 'T₁/₂ = 2λ', 'is_correct' => false],
                            ['choice_text' => 'T₁/₂ = λ²', 'is_correct' => false],
                            ['choice_text' => 'T₁/₂ = ln(2) / λ', 'is_correct' => true],
                        ],
                        'explanation' => 'La relation fondamentale est T₁/₂ = ln(2)/λ.',
                    ],
                    [
                        'question' => 'Une grande constante de désintégration λ correspond-elle à une demi-vie plus courte ?',
                        'choices' => [
                            ['choice_text' => 'Oui', 'is_correct' => true],
                            ['choice_text' => 'Non, elle correspond toujours à une demi-vie plus longue', 'is_correct' => false],
                            ['choice_text' => 'Elle n’a aucun rapport avec la demi-vie', 'is_correct' => false],
                            ['choice_text' => 'Seulement pour les noyaux stables', 'is_correct' => false],
                        ],
                        'explanation' => 'Puisque T₁/₂ = ln(2)/λ, une valeur plus grande de λ implique une demi-vie plus courte.',
                    ],
                    [
                        'question' => 'L’activité radioactive est-elle liée au nombre de noyaux qui se désintègrent par unité de temps ?',
                        'choices' => [
                            ['choice_text' => 'Non', 'is_correct' => false],
                            ['choice_text' => 'Oui', 'is_correct' => true],
                            ['choice_text' => 'Seulement pour les noyaux stables', 'is_correct' => false],
                            ['choice_text' => 'Seulement dans le vide', 'is_correct' => false],
                        ],
                        'explanation' => 'L’activité mesure le nombre de désintégrations par unité de temps.',
                    ],
                    [
                        'question' => 'Quelle est l’unité SI de l’activité radioactive ?',
                        'choices' => [
                            ['choice_text' => 'Le joule (J)', 'is_correct' => false],
                            ['choice_text' => 'Le becquerel (Bq)', 'is_correct' => true],
                            ['choice_text' => 'Le watt (W)', 'is_correct' => false],
                            ['choice_text' => 'Le coulomb (C)', 'is_correct' => false],
                        ],
                        'explanation' => 'Un becquerel correspond à une désintégration nucléaire par seconde.',
                    ],
                    [
                        'question' => 'Après trois demi-vies, quelle fraction du nombre initial de noyaux reste environ ?',
                        'choices' => [
                            ['choice_text' => '1/8', 'is_correct' => true],
                            ['choice_text' => '1/3', 'is_correct' => false],
                            ['choice_text' => '3/4', 'is_correct' => false],
                            ['choice_text' => '1/2', 'is_correct' => false],
                        ],
                        'explanation' => 'Après chaque demi-vie, la quantité restante est divisée par deux : (1/2)³ = 1/8.',
                    ],
                    [
                        'question' => 'Peut-on prédire exactement à quel instant un noyau radioactif individuel va se désintégrer ?',
                        'choices' => [
                            ['choice_text' => 'Non, on ne peut déterminer que des probabilités', 'is_correct' => true],
                            ['choice_text' => 'Oui, avec la demi-vie exacte', 'is_correct' => false],
                            ['choice_text' => 'Oui, à condition de connaître sa température', 'is_correct' => false],
                            ['choice_text' => 'Oui, si le noyau contient deux neutrons', 'is_correct' => false],
                        ],
                        'explanation' => 'La désintégration nucléaire individuelle est probabiliste ; la loi radioactive décrit statistiquement un grand ensemble de noyaux.',
                    ],
                ],
            ],

            [
                'title' => 'Désintégrations alpha, bêta et gamma',
                'description' => 'Identifier les différents modes de désintégration et suivre leur effet sur le noyau.',
                'questions' => [
                    [
                        'question' => 'Lors d’une désintégration bêta moins, un neutron se transforme en :',
                        'choices' => [
                            ['choice_text' => 'Un proton', 'is_correct' => true],
                            ['choice_text' => 'Deux neutrons', 'is_correct' => false],
                            ['choice_text' => 'Un électron uniquement sans transformation nucléaire', 'is_correct' => false],
                            ['choice_text' => 'Un noyau d’hélium', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans une désintégration bêta moins, un neutron se transforme en proton en émettant un électron et un antineutrino.',
                    ],
                    [
                        'question' => 'Que devient le numéro atomique Z lors d’une désintégration bêta moins ?',
                        'choices' => [
                            ['choice_text' => 'Il diminue de 1', 'is_correct' => false],
                            ['choice_text' => 'Il diminue de 2', 'is_correct' => false],
                            ['choice_text' => 'Il augmente de 1', 'is_correct' => true],
                            ['choice_text' => 'Il reste toujours inchangé', 'is_correct' => false],
                        ],
                        'explanation' => 'Un neutron devient un proton, donc le nombre de protons augmente de 1.',
                    ],
                    [
                        'question' => 'Que devient le nombre de masse A lors d’une désintégration bêta moins ?',
                        'choices' => [
                            ['choice_text' => 'Il diminue de 4', 'is_correct' => false],
                            ['choice_text' => 'Il augmente de 2', 'is_correct' => false],
                            ['choice_text' => 'Il reste inchangé', 'is_correct' => true],
                            ['choice_text' => 'Il devient nul', 'is_correct' => false],
                        ],
                        'explanation' => 'Un neutron est transformé en proton ; le nombre total de nucléons reste donc le même.',
                    ],
                    [
                        'question' => 'Lors d’une désintégration alpha, que perd le noyau parent ?',
                        'choices' => [
                            ['choice_text' => 'Deux protons et deux neutrons', 'is_correct' => true],
                            ['choice_text' => 'Un seul proton', 'is_correct' => false],
                            ['choice_text' => 'Un seul neutron', 'is_correct' => false],
                            ['choice_text' => 'Deux électrons orbitaux', 'is_correct' => false],
                        ],
                        'explanation' => 'La particule alpha est composée de deux protons et deux neutrons.',
                    ],
                    [
                        'question' => 'Le rayonnement gamma change-t-il le nombre de masse A du noyau ?',
                        'choices' => [
                            ['choice_text' => 'Oui, il le réduit de 4', 'is_correct' => false],
                            ['choice_text' => 'Non', 'is_correct' => true],
                            ['choice_text' => 'Oui, il l’augmente de 1', 'is_correct' => false],
                            ['choice_text' => 'Oui, il le divise par deux', 'is_correct' => false],
                        ],
                        'explanation' => 'L’émission gamma correspond à une perte d’énergie du noyau excité, sans changement du nombre de nucléons.',
                    ],
                    [
                        'question' => 'Le rayonnement bêta moins est-il associé à l’émission d’un neutrino ou antineutrino ?',
                        'choices' => [
                            ['choice_text' => 'Oui, un antineutrino électronique est émis', 'is_correct' => true],
                            ['choice_text' => 'Non, aucun lepton n’est impliqué', 'is_correct' => false],
                            ['choice_text' => 'Oui, un proton est émis à la place', 'is_correct' => false],
                            ['choice_text' => 'Oui, mais uniquement un photon', 'is_correct' => false],
                        ],
                        'explanation' => 'La désintégration bêta moins produit un proton, un électron et un antineutrino électronique.',
                    ],
                    [
                        'question' => 'Quel rayonnement est constitué de particules massives relativement lourdes parmi alpha, bêta et gamma ?',
                        'choices' => [
                            ['choice_text' => 'Gamma', 'is_correct' => false],
                            ['choice_text' => 'Aucun', 'is_correct' => false],
                            ['choice_text' => 'Les photons bêta', 'is_correct' => false],
                            ['choice_text' => 'Alpha', 'is_correct' => true],
                        ],
                        'explanation' => 'La particule alpha est un noyau d’hélium et possède une masse importante par rapport à un électron ou un photon.',
                    ],
                    [
                        'question' => 'Quel type de rayonnement est électriquement neutre ?',
                        'choices' => [
                            ['choice_text' => 'Alpha', 'is_correct' => false],
                            ['choice_text' => 'Gamma', 'is_correct' => true],
                            ['choice_text' => 'Bêta moins', 'is_correct' => false],
                            ['choice_text' => 'Les trois sont chargés', 'is_correct' => false],
                        ],
                        'explanation' => 'Les photons gamma n’ont pas de charge électrique.',
                    ],
                    [
                        'question' => 'Le rayonnement bêta est-il plus pénétrant que le rayonnement alpha en général ?',
                        'choices' => [
                            ['choice_text' => 'Non, il est toujours moins pénétrant', 'is_correct' => false],
                            ['choice_text' => 'Oui', 'is_correct' => true],
                            ['choice_text' => 'Ils ont exactement le même pouvoir de pénétration', 'is_correct' => false],
                            ['choice_text' => 'Cela est impossible à comparer', 'is_correct' => false],
                        ],
                        'explanation' => 'Les électrons bêta pénètrent davantage dans la matière que les particules alpha.',
                    ],
                    [
                        'question' => 'Une désintégration nucléaire peut-elle transformer un élément chimique en un autre ?',
                        'choices' => [
                            ['choice_text' => 'Non, jamais', 'is_correct' => false],
                            ['choice_text' => 'Seulement lorsqu’un électron change d’orbite', 'is_correct' => false],
                            ['choice_text' => 'Seulement pendant une réaction chimique', 'is_correct' => false],
                            ['choice_text' => 'Oui, lorsque le nombre de protons du noyau change', 'is_correct' => true],
                        ],
                        'explanation' => 'Un changement de Z signifie que l’élément chimique change.',
                    ],
                ],
            ],

            [
                'title' => 'Fission nucléaire',
                'description' => 'Comprendre le principe de la fission, la libération d’énergie et la réaction en chaîne.',
                'questions' => [
                    [
                        'question' => 'Qu’est-ce que la fission nucléaire ?',
                        'choices' => [
                            ['choice_text' => 'La division d’un noyau lourd en noyaux plus légers', 'is_correct' => true],
                            ['choice_text' => 'La fusion de deux électrons', 'is_correct' => false],
                            ['choice_text' => 'La disparition des protons dans un atome', 'is_correct' => false],
                            ['choice_text' => 'La transformation d’un électron en photon visible uniquement', 'is_correct' => false],
                        ],
                        'explanation' => 'La fission correspond à la fragmentation d’un noyau lourd en produits plus légers, souvent accompagnée de neutrons et d’énergie.',
                    ],
                    [
                        'question' => 'Quel type de noyau est particulièrement concerné par la fission nucléaire ?',
                        'choices' => [
                            ['choice_text' => 'Uniquement l’hydrogène léger', 'is_correct' => false],
                            ['choice_text' => 'Les électrons libres', 'is_correct' => false],
                            ['choice_text' => 'Les noyaux lourds', 'is_correct' => true],
                            ['choice_text' => 'Les photons', 'is_correct' => false],
                        ],
                        'explanation' => 'La fission concerne notamment des noyaux lourds tels que certains isotopes de l’uranium.',
                    ],
                    [
                        'question' => 'Pourquoi la fission peut-elle libérer beaucoup d’énergie ?',
                        'choices' => [
                            ['choice_text' => 'Parce que les électrons disparaissent tous', 'is_correct' => false],
                            ['choice_text' => 'Parce que le nombre de nucléons devient nul', 'is_correct' => false],
                            ['choice_text' => 'Parce que la température est toujours négative', 'is_correct' => false],
                            ['choice_text' => 'Les produits de fission peuvent être plus fortement liés par nucléon', 'is_correct' => true],
                        ],
                        'explanation' => 'La différence de masse entre l’état initial et final correspond à une grande quantité d’énergie libérée.',
                    ],
                    [
                        'question' => 'Que peut produire une fission en plus des noyaux fils ?',
                        'choices' => [
                            ['choice_text' => 'Uniquement des électrons', 'is_correct' => false],
                            ['choice_text' => 'Des neutrons et de l’énergie', 'is_correct' => true],
                            ['choice_text' => 'Uniquement des photons visibles', 'is_correct' => false],
                            ['choice_text' => 'Uniquement des protons libres', 'is_correct' => false],
                        ],
                        'explanation' => 'Une fission typique peut émettre plusieurs neutrons et une quantité importante d’énergie.',
                    ],
                    [
                        'question' => 'Qu’est-ce qu’une réaction en chaîne nucléaire ?',
                        'choices' => [
                            ['choice_text' => 'Une succession de réactions chimiques entre électrons', 'is_correct' => false],
                            ['choice_text' => 'Des neutrons produits par une fission provoquent d’autres fissions', 'is_correct' => true],
                            ['choice_text' => 'Une série de rayonnements lumineux uniquement', 'is_correct' => false],
                            ['choice_text' => 'Un mouvement circulaire du noyau autour de l’électron', 'is_correct' => false],
                        ],
                        'explanation' => 'Les neutrons libérés peuvent provoquer de nouvelles fissions et entretenir une réaction en chaîne.',
                    ],
                    [
                        'question' => 'Dans un réacteur nucléaire, pourquoi contrôle-t-on le nombre de neutrons disponibles ?',
                        'choices' => [
                            ['choice_text' => 'Pour empêcher toute interaction avec les électrons', 'is_correct' => false],
                            ['choice_text' => 'Pour modifier la masse du proton', 'is_correct' => false],
                            ['choice_text' => 'Pour contrôler le rythme des réactions de fission', 'is_correct' => true],
                            ['choice_text' => 'Pour rendre les photons immobiles', 'is_correct' => false],
                        ],
                        'explanation' => 'Le contrôle des neutrons permet de maintenir une réaction nucléaire à un niveau maîtrisé.',
                    ],
                    [
                        'question' => 'Quel combustible est couramment associé à la fission dans les réacteurs nucléaires ?',
                        'choices' => [
                            ['choice_text' => 'L’hélium gazeux uniquement', 'is_correct' => false],
                            ['choice_text' => 'L’uranium', 'is_correct' => true],
                            ['choice_text' => 'L’oxygène moléculaire uniquement', 'is_correct' => false],
                            ['choice_text' => 'Le carbone pur uniquement', 'is_correct' => false],
                        ],
                        'explanation' => 'Certains isotopes de l’uranium peuvent subir une fission induite par des neutrons.',
                    ],
                    [
                        'question' => 'Une réaction de fission transforme-t-elle nécessairement toute la masse du noyau en énergie ?',
                        'choices' => [
                            ['choice_text' => 'Oui, toute la matière devient énergie', 'is_correct' => false],
                            ['choice_text' => 'Oui, tous les nucléons disparaissent', 'is_correct' => false],
                            ['choice_text' => 'Non, car l’énergie ne peut jamais provenir de la masse', 'is_correct' => false],
                            ['choice_text' => 'Non, seule une petite différence de masse correspond à l’énergie libérée', 'is_correct' => true],
                        ],
                        'explanation' => 'La masse totale des produits peut être légèrement inférieure à celle des réactifs, cette différence étant convertie en énergie.',
                    ],
                    [
                        'question' => 'Quelle différence fondamentale existe entre fission et combustion chimique ?',
                        'choices' => [
                            ['choice_text' => 'Elles sont exactement le même phénomène', 'is_correct' => false],
                            ['choice_text' => 'La combustion détruit toujours les noyaux', 'is_correct' => false],
                            ['choice_text' => 'La fission modifie le noyau atomique alors qu’une combustion chimique implique principalement les électrons et les liaisons chimiques', 'is_correct' => true],
                            ['choice_text' => 'La fission ne libère jamais d’énergie', 'is_correct' => false],
                        ],
                        'explanation' => 'Les réactions nucléaires modifient les noyaux, alors que les réactions chimiques modifient principalement les arrangements électroniques et les liaisons.',
                    ],
                    [
                        'question' => 'Une réaction en chaîne est dite contrôlée lorsque :',
                        'choices' => [
                            ['choice_text' => 'Le nombre de fissions est maintenu à un rythme maîtrisé', 'is_correct' => true],
                            ['choice_text' => 'Tous les neutrons sont instantanément supprimés', 'is_correct' => false],
                            ['choice_text' => 'Aucune fission ne peut se produire', 'is_correct' => false],
                            ['choice_text' => 'La température devient nécessairement nulle', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans un système contrôlé, la production de neutrons et le taux de fission sont régulés.',
                    ],
                ],
            ],

            [
                'title' => 'Fusion nucléaire',
                'description' => 'Découvrir la fusion nucléaire, ses conditions physiques et son rôle dans les étoiles.',
                'questions' => [
                    [
                        'question' => 'Qu’est-ce que la fusion nucléaire ?',
                        'choices' => [
                            ['choice_text' => 'L’union de noyaux légers pour former un noyau plus lourd', 'is_correct' => true],
                            ['choice_text' => 'La séparation d’un noyau lourd en électrons', 'is_correct' => false],
                            ['choice_text' => 'La fusion de deux électrons', 'is_correct' => false],
                            ['choice_text' => 'La destruction d’un proton isolé', 'is_correct' => false],
                        ],
                        'explanation' => 'La fusion rassemble des noyaux légers pour former un noyau plus lourd, avec une possible libération d’énergie.',
                    ],
                    [
                        'question' => 'Dans quel environnement naturel la fusion nucléaire joue-t-elle un rôle majeur ?',
                        'choices' => [
                            ['choice_text' => 'Dans les océans à température ambiante', 'is_correct' => false],
                            ['choice_text' => 'Au cœur des étoiles', 'is_correct' => true],
                            ['choice_text' => 'Dans les roches froides uniquement', 'is_correct' => false],
                            ['choice_text' => 'Dans les glaciers', 'is_correct' => false],
                        ],
                        'explanation' => 'Les étoiles produisent leur énergie principalement grâce à des réactions de fusion nucléaire dans leur région centrale.',
                    ],
                    [
                        'question' => 'Pourquoi faut-il des températures très élevées pour obtenir une fusion contrôlée ?',
                        'choices' => [
                            ['choice_text' => 'Les noyaux doivent avoir suffisamment d’énergie pour s’approcher malgré leur répulsion électrique', 'is_correct' => true],
                            ['choice_text' => 'Les neutrons doivent devenir des photons', 'is_correct' => false],
                            ['choice_text' => 'Les électrons doivent être immobiles', 'is_correct' => false],
                            ['choice_text' => 'Le noyau doit perdre toute son énergie', 'is_correct' => false],
                        ],
                        'explanation' => 'Les noyaux positifs se repoussent électriquement ; de très grandes énergies sont nécessaires pour les rapprocher suffisamment.',
                    ],
                    [
                        'question' => 'Quels noyaux légers sont souvent étudiés dans les recherches sur la fusion ?',
                        'choices' => [
                            ['choice_text' => 'Le plomb et l’uranium uniquement', 'is_correct' => false],
                            ['choice_text' => 'Les isotopes de l’hydrogène comme le deutérium et le tritium', 'is_correct' => true],
                            ['choice_text' => 'L’oxygène et le fer uniquement', 'is_correct' => false],
                            ['choice_text' => 'Les électrons et les photons', 'is_correct' => false],
                        ],
                        'explanation' => 'Le deutérium et le tritium sont des combustibles étudiés dans plusieurs approches de fusion nucléaire.',
                    ],
                    [
                        'question' => 'Quel est l’objectif énergétique général de la fusion ?',
                        'choices' => [
                            ['choice_text' => 'Éliminer toute matière du système', 'is_correct' => false],
                            ['choice_text' => 'Convertir tous les électrons en neutrons', 'is_correct' => false],
                            ['choice_text' => 'Obtenir une énergie nette à partir des réactions de fusion', 'is_correct' => true],
                            ['choice_text' => 'Refroidir le plasma à la température ambiante avant toute réaction', 'is_correct' => false],
                        ],
                        'explanation' => 'La recherche sur la fusion vise notamment à maintenir un plasma suffisamment chaud et confiné pour produire plus d’énergie utile qu’il n’en faut pour faire fonctionner le système.',
                    ],
                    [
                        'question' => 'Dans un plasma de fusion, la matière est-elle généralement très ionisée ?',
                        'choices' => [
                            ['choice_text' => 'Non, les atomes sont tous neutres', 'is_correct' => false],
                            ['choice_text' => 'Seulement les neutrons sont présents', 'is_correct' => false],
                            ['choice_text' => 'Oui', 'is_correct' => true],
                            ['choice_text' => 'Le plasma ne contient aucune particule chargée', 'is_correct' => false],
                        ],
                        'explanation' => 'Un plasma de fusion est constitué de noyaux et d’électrons largement séparés, donc fortement ionisé.',
                    ],
                    [
                        'question' => 'Pourquoi la fusion de noyaux légers peut-elle libérer de l’énergie ?',
                        'choices' => [
                            ['choice_text' => 'Les noyaux perdent toutes leurs particules', 'is_correct' => false],
                            ['choice_text' => 'Les électrons deviennent automatiquement des photons', 'is_correct' => false],
                            ['choice_text' => 'La masse augmente toujours et crée de l’énergie', 'is_correct' => false],
                            ['choice_text' => 'Le noyau formé peut avoir une énergie de liaison par nucléon plus élevée', 'is_correct' => true],
                        ],
                        'explanation' => 'La fusion peut déplacer les nucléons vers une configuration plus fortement liée, avec une différence de masse convertie en énergie.',
                    ],
                    [
                        'question' => 'Quelle force représente l’obstacle initial entre deux noyaux positifs qui cherchent à fusionner ?',
                        'choices' => [
                            ['choice_text' => 'La force de frottement', 'is_correct' => false],
                            ['choice_text' => 'La gravité terrestre uniquement', 'is_correct' => false],
                            ['choice_text' => 'La force magnétique de la Terre uniquement', 'is_correct' => false],
                            ['choice_text' => 'La répulsion électrostatique', 'is_correct' => true],
                        ],
                        'explanation' => 'Deux noyaux positifs se repoussent par interaction électrostatique avant que l’interaction nucléaire forte puisse devenir efficace à très courte distance.',
                    ],
                    [
                        'question' => 'La fusion nucléaire et la fission nucléaire concernent-elles toutes deux le noyau atomique ?',
                        'choices' => [
                            ['choice_text' => 'Non, seule la fission concerne le noyau', 'is_correct' => false],
                            ['choice_text' => 'Non, elles concernent uniquement les électrons', 'is_correct' => false],
                            ['choice_text' => 'Oui', 'is_correct' => true],
                            ['choice_text' => 'Non, elles sont uniquement chimiques', 'is_correct' => false],
                        ],
                        'explanation' => 'La fusion et la fission sont toutes deux des phénomènes nucléaires.',
                    ],
                    [
                        'question' => 'Pourquoi les étoiles peuvent-elles maintenir des réactions de fusion pendant de très longues périodes ?',
                        'choices' => [
                            ['choice_text' => 'Parce que leur noyau est totalement froid', 'is_correct' => false],
                            ['choice_text' => 'Parce que les électrons ne sont jamais présents dans une étoile', 'is_correct' => false],
                            ['choice_text' => 'Parce que les étoiles sont composées uniquement de fer', 'is_correct' => false],
                            ['choice_text' => 'Leur gravité confine la matière chaude et leur fournit les conditions nécessaires à la fusion', 'is_correct' => true],
                        ],
                        'explanation' => 'La gravité des étoiles confine le plasma et contribue à maintenir de fortes pressions et températures au cœur.',
                    ],
                ],
            ],

            [
                'title' => 'Détection des rayonnements nucléaires',
                'description' => 'Découvrir les principaux instruments et méthodes utilisés pour détecter les rayonnements ionisants.',
                'questions' => [
                    [
                        'question' => 'Quel instrument classique permet de détecter des particules ou rayonnements ionisants ?',
                        'choices' => [
                            ['choice_text' => 'Le thermomètre à mercure', 'is_correct' => false],
                            ['choice_text' => 'Le baromètre', 'is_correct' => false],
                            ['choice_text' => 'Le voltmètre uniquement', 'is_correct' => false],
                            ['choice_text' => 'Le compteur Geiger-Müller', 'is_correct' => true],
                        ],
                        'explanation' => 'Le compteur Geiger-Müller détecte certains rayonnements ionisants et permet d’en mesurer l’activité.',
                    ],
                    [
                        'question' => 'Quel principe physique est exploité par un détecteur à gaz de type Geiger-Müller ?',
                        'choices' => [
                            ['choice_text' => 'La fusion des noyaux du gaz', 'is_correct' => false],
                            ['choice_text' => 'La réflexion de la lumière visible uniquement', 'is_correct' => false],
                            ['choice_text' => 'La gravitation des électrons', 'is_correct' => false],
                            ['choice_text' => 'L’ionisation du gaz par le rayonnement incident', 'is_correct' => true],
                        ],
                        'explanation' => 'Le rayonnement ionise le gaz du détecteur, produisant une décharge électrique détectable.',
                    ],
                    [
                        'question' => 'Un scintillateur transforme-t-il l’interaction d’un rayonnement en un signal lumineux ?',
                        'choices' => [
                            ['choice_text' => 'Non, il produit uniquement du son', 'is_correct' => false],
                            ['choice_text' => 'Non, il transforme toujours le rayonnement en chaleur uniquement', 'is_correct' => false],
                            ['choice_text' => 'Oui', 'is_correct' => true],
                            ['choice_text' => 'Non, il ne réagit à aucune particule', 'is_correct' => false],
                        ],
                        'explanation' => 'Un matériau scintillateur peut produire de la lumière lorsqu’il reçoit un rayonnement énergétique.',
                    ],
                    [
                        'question' => 'À quoi sert principalement un dosimètre pour une personne travaillant avec des rayonnements ?',
                        'choices' => [
                            ['choice_text' => 'À mesurer uniquement la température corporelle', 'is_correct' => false],
                            ['choice_text' => 'À accélérer les désintégrations radioactives', 'is_correct' => false],
                            ['choice_text' => 'À produire de l’électricité', 'is_correct' => false],
                            ['choice_text' => 'À surveiller la dose de rayonnement reçue', 'is_correct' => true],
                        ],
                        'explanation' => 'Le dosimètre permet de surveiller l’exposition individuelle aux rayonnements ionisants.',
                    ],
                    [
                        'question' => 'Quelle grandeur est généralement exprimée en sievert lorsqu’on parle d’effet biologique des rayonnements ?',
                        'choices' => [
                            ['choice_text' => 'La masse du noyau', 'is_correct' => false],
                            ['choice_text' => 'La fréquence du son', 'is_correct' => false],
                            ['choice_text' => 'La dose équivalente ou la dose efficace', 'is_correct' => true],
                            ['choice_text' => 'La température du plasma', 'is_correct' => false],
                        ],
                        'explanation' => 'Le sievert prend en compte l’effet biologique du rayonnement pour certaines grandeurs dosimétriques.',
                    ],
                    [
                        'question' => 'Quelle unité mesure une énergie absorbée par unité de masse dans le système SI ?',
                        'choices' => [
                            ['choice_text' => 'Le gray (Gy)', 'is_correct' => true],
                            ['choice_text' => 'Le becquerel (Bq)', 'is_correct' => false],
                            ['choice_text' => 'Le tesla (T)', 'is_correct' => false],
                            ['choice_text' => 'Le volt (V)', 'is_correct' => false],
                        ],
                        'explanation' => 'Le gray correspond à un joule absorbé par kilogramme.',
                    ],
                    [
                        'question' => 'Le becquerel mesure principalement :',
                        'choices' => [
                            ['choice_text' => 'Le nombre de désintégrations par seconde', 'is_correct' => true],
                            ['choice_text' => 'L’énergie absorbée par kilogramme', 'is_correct' => false],
                            ['choice_text' => 'La charge du noyau', 'is_correct' => false],
                            ['choice_text' => 'La masse d’un électron', 'is_correct' => false],
                        ],
                        'explanation' => 'Le becquerel est l’unité SI de l’activité radioactive.',
                    ],
                    [
                        'question' => 'Pourquoi un détecteur peut-il distinguer différents rayonnements ?',
                        'choices' => [
                            ['choice_text' => 'Tous les rayonnements ont exactement les mêmes propriétés', 'is_correct' => false],
                            ['choice_text' => 'Ils interagissent différemment avec la matière selon leur nature et leur énergie', 'is_correct' => true],
                            ['choice_text' => 'Seuls les électrons peuvent être détectés', 'is_correct' => false],
                            ['choice_text' => 'Les photons gamma n’interagissent jamais avec la matière', 'is_correct' => false],
                        ],
                        'explanation' => 'La charge, la masse, l’énergie et la nature du rayonnement déterminent son interaction avec le détecteur.',
                    ],
                    [
                        'question' => 'Quel rayonnement peut être fortement détecté par ionisation dans un matériau ?',
                        'choices' => [
                            ['choice_text' => 'Les rayonnements ionisants', 'is_correct' => true],
                            ['choice_text' => 'Uniquement les sons audibles', 'is_correct' => false],
                            ['choice_text' => 'Uniquement les vibrations mécaniques', 'is_correct' => false],
                            ['choice_text' => 'Aucun rayonnement électromagnétique', 'is_correct' => false],
                        ],
                        'explanation' => 'Les rayonnements ionisants possèdent suffisamment d’énergie pour produire des ionisations dans la matière.',
                    ],
                    [
                        'question' => 'Pourquoi mesure-t-on le rayonnement autour d’une source radioactive ?',
                        'choices' => [
                            ['choice_text' => 'Pour rendre la source plus radioactive', 'is_correct' => false],
                            ['choice_text' => 'Pour évaluer le niveau d’exposition et assurer une surveillance adaptée', 'is_correct' => true],
                            ['choice_text' => 'Pour modifier le nombre de protons du noyau', 'is_correct' => false],
                            ['choice_text' => 'Pour empêcher toute désintégration naturelle', 'is_correct' => false],
                        ],
                        'explanation' => 'La mesure permet notamment de caractériser l’environnement radiologique et de gérer l’exposition.',
                    ],
                ],
            ],

            [
                'title' => 'Applications et radioprotection',
                'description' => 'Découvrir quelques applications de la physique nucléaire et les principes élémentaires de radioprotection.',
                'questions' => [
                    [
                        'question' => 'Quelle est une application médicale de la radioactivité ?',
                        'choices' => [
                            ['choice_text' => 'La production de vitamines dans tous les médicaments', 'is_correct' => false],
                            ['choice_text' => 'La mesure mécanique de la tension artérielle uniquement', 'is_correct' => false],
                            ['choice_text' => 'La fabrication de toutes les protéines du corps', 'is_correct' => false],
                            ['choice_text' => 'Certaines techniques de diagnostic et de traitement en médecine nucléaire', 'is_correct' => true],
                        ],
                        'explanation' => 'Des radionucléides sont utilisés en diagnostic et en thérapie dans certaines applications médicales.',
                    ],
                    [
                        'question' => 'Pourquoi utilise-t-on certains radio-isotopes en imagerie médicale ?',
                        'choices' => [
                            ['choice_text' => 'Ils rendent automatiquement les os fluorescents', 'is_correct' => false],
                            ['choice_text' => 'Leur rayonnement peut être détecté depuis l’extérieur du corps', 'is_correct' => true],
                            ['choice_text' => 'Ils détruisent toutes les cellules saines', 'is_correct' => false],
                            ['choice_text' => 'Ils remplacent tous les électrons du corps', 'is_correct' => false],
                        ],
                        'explanation' => 'Un radiotraceur peut être détecté grâce au rayonnement qu’il émet, fournissant des informations sur certains processus biologiques.',
                    ],
                    [
                        'question' => 'Quel principe de radioprotection consiste à réduire la durée passée près d’une source ?',
                        'choices' => [
                            ['choice_text' => 'L’augmentation du nombre de neutrons', 'is_correct' => false],
                            ['choice_text' => 'La réduction du temps d’exposition', 'is_correct' => true],
                            ['choice_text' => 'La fusion des noyaux', 'is_correct' => false],
                            ['choice_text' => 'La suppression des électrons', 'is_correct' => false],
                        ],
                        'explanation' => 'Réduire le temps d’exposition diminue la dose reçue.',
                    ],
                    [
                        'question' => 'Comment la distance influence-t-elle généralement l’exposition à une source ponctuelle de rayonnement ?',
                        'choices' => [
                            ['choice_text' => 'Une plus grande distance augmente toujours la dose', 'is_correct' => false],
                            ['choice_text' => 'La distance n’a jamais d’effet', 'is_correct' => false],
                            ['choice_text' => 'Une plus grande distance réduit généralement le débit de dose', 'is_correct' => true],
                            ['choice_text' => 'La distance transforme les rayons gamma en neutrons', 'is_correct' => false],
                        ],
                        'explanation' => 'Pour une source ponctuelle et dans une géométrie simple, l’intensité diminue approximativement selon l’inverse du carré de la distance.',
                    ],
                    [
                        'question' => 'Quel est le rôle d’un blindage en radioprotection ?',
                        'choices' => [
                            ['choice_text' => 'Augmenter l’activité de la source', 'is_correct' => false],
                            ['choice_text' => 'Réduire le rayonnement atteignant une personne ou un équipement', 'is_correct' => true],
                            ['choice_text' => 'Créer des noyaux radioactifs supplémentaires', 'is_correct' => false],
                            ['choice_text' => 'Empêcher toute réaction chimique', 'is_correct' => false],
                        ],
                        'explanation' => 'Un matériau de blindage atténue le rayonnement avant qu’il atteigne la zone protégée.',
                    ],
                    [
                        'question' => 'Pourquoi le matériau de blindage dépend-il du type de rayonnement ?',
                        'choices' => [
                            ['choice_text' => 'Tous les rayonnements traversent la matière de façon identique', 'is_correct' => false],
                            ['choice_text' => 'Le blindage ne concerne que les rayonnements sonores', 'is_correct' => false],
                            ['choice_text' => 'Les différents rayonnements n’interagissent pas de la même manière avec la matière', 'is_correct' => true],
                            ['choice_text' => 'Le type de rayonnement ne change jamais les propriétés d’interaction', 'is_correct' => false],
                        ],
                        'explanation' => 'La nature et l’énergie du rayonnement déterminent le matériau et l’épaisseur de blindage adaptés.',
                    ],
                    [
                        'question' => 'Quelle application industrielle utilise des rayonnements pour contrôler l’intérieur d’une pièce sans la découper ?',
                        'choices' => [
                            ['choice_text' => 'La radiographie industrielle', 'is_correct' => true],
                            ['choice_text' => 'La combustion industrielle', 'is_correct' => false],
                            ['choice_text' => 'La mesure acoustique uniquement', 'is_correct' => false],
                            ['choice_text' => 'La chromatographie uniquement', 'is_correct' => false],
                        ],
                        'explanation' => 'La radiographie industrielle utilise notamment des rayons X ou gamma pour inspecter l’intérieur de matériaux.',
                    ],
                    [
                        'question' => 'Pourquoi les sources radioactives doivent-elles être manipulées avec précaution ?',
                        'choices' => [
                            ['choice_text' => 'Elles peuvent produire des rayonnements ionisants capables d’endommager les tissus à dose suffisante', 'is_correct' => true],
                            ['choice_text' => 'Elles sont toutes explosives', 'is_correct' => false],
                            ['choice_text' => 'Elles détruisent instantanément toute matière', 'is_correct' => false],
                            ['choice_text' => 'Elles émettent uniquement de la lumière visible', 'is_correct' => false],
                        ],
                        'explanation' => 'Une exposition excessive aux rayonnements ionisants peut provoquer des dommages biologiques.',
                    ],
                    [
                        'question' => 'Quel principe général complète le trio temps-distance-blindage en radioprotection ?',
                        'choices' => [
                            ['choice_text' => 'Augmenter volontairement la dose reçue', 'is_correct' => false],
                            ['choice_text' => 'Supprimer tous les détecteurs', 'is_correct' => false],
                            ['choice_text' => 'Rester le plus longtemps possible près de la source', 'is_correct' => false],
                            ['choice_text' => 'Minimiser l’exposition tout en maintenant les pratiques nécessaires', 'is_correct' => true],
                        ],
                        'explanation' => 'La radioprotection vise à maintenir l’exposition aussi faible que raisonnablement possible dans le cadre des activités réalisées.',
                    ],
                    [
                        'question' => 'La physique nucléaire est-elle utilisée uniquement dans les centrales électriques ?',
                        'choices' => [
                            ['choice_text' => 'Non, elle intervient aussi en médecine, en industrie, en recherche et en astrophysique', 'is_correct' => true],
                            ['choice_text' => 'Oui, uniquement dans la production électrique', 'is_correct' => false],
                            ['choice_text' => 'Oui, uniquement dans les armes', 'is_correct' => false],
                            ['choice_text' => 'Non, mais seulement dans les laboratoires scolaires', 'is_correct' => false],
                        ],
                        'explanation' => 'Les phénomènes nucléaires ont de nombreuses applications scientifiques, médicales et industrielles.',
                    ],
                    [
                        'question' => 'Quel est l’objectif principal de la radioprotection ?',
                        'choices' => [
                            ['choice_text' => 'Augmenter la radioactivité de l’environnement', 'is_correct' => false],
                            ['choice_text' => 'Empêcher toute utilisation médicale des rayonnements', 'is_correct' => false],
                            ['choice_text' => 'Limiter les risques liés à l’exposition aux rayonnements ionisants', 'is_correct' => true],
                            ['choice_text' => 'Transformer tous les noyaux stables en noyaux radioactifs', 'is_correct' => false],
                        ],
                        'explanation' => 'La radioprotection vise à limiter les expositions et leurs conséquences tout en permettant les usages justifiés des rayonnements.',
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
                        'explanation' => $questionData['explanation'],
                    ]
                );

                $question->choices()->delete();

                $choices = $questionData['choices'];

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