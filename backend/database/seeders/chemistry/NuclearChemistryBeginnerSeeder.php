<?php

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class NuclearChemistryBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'nuclear-chemistry')->firstOrFail();

        $quizSettings = [
            0 => ['duration' => 15, 'passing_score' => 50],
            1 => ['duration' => 15, 'passing_score' => 55],
            2 => ['duration' => 20, 'passing_score' => 60],
            3 => ['duration' => 20, 'passing_score' => 60],
            4 => ['duration' => 20, 'passing_score' => 60],
            5 => ['duration' => 20, 'passing_score' => 65],
            6 => ['duration' => 20, 'passing_score' => 65],
            7 => ['duration' => 25, 'passing_score' => 70],
            8 => ['duration' => 25, 'passing_score' => 70],
        ];

        $quizzes = [
            [
                'title' => "Les bases de la chimie nucléaire",
                'description' => "Découvrir la radioactivité, le noyau atomique et les principales idées de la chimie nucléaire.",
                'questions' => [
                    [
                        'question' => "Quelle partie de l’atome est directement concernée par une transformation nucléaire ?",
                        'explanation' => "Une transformation nucléaire modifie le noyau de l’atome, contrairement à une réaction chimique ordinaire qui concerne surtout les électrons.",
                        'choices' => [
                            ['choice_text' => "Le noyau", 'is_correct' => true],
                            ['choice_text' => "Uniquement les électrons externes", 'is_correct' => false],
                            ['choice_text' => "Le récipient", 'is_correct' => false],
                            ['choice_text' => "Le solvant", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Que signifie qu’un noyau est radioactif ?",
                        'explanation' => "Un noyau radioactif est instable et peut se transformer spontanément en émettant un rayonnement.",
                        'choices' => [
                            ['choice_text' => "Il est toujours chargé négativement", 'is_correct' => false],
                            ['choice_text' => "Il peut se transformer spontanément", 'is_correct' => true],
                            ['choice_text' => "Il ne contient aucun proton", 'is_correct' => false],
                            ['choice_text' => "Il est forcément artificiel", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Le nombre de masse A d’un noyau correspond à…",
                        'explanation' => "Le nombre de masse est la somme des protons et des neutrons du noyau : A = Z + N.",
                        'choices' => [
                            ['choice_text' => "Le nombre de protons seulement", 'is_correct' => false],
                            ['choice_text' => "Le nombre d’électrons seulement", 'is_correct' => false],
                            ['choice_text' => "Le nombre de protons et de neutrons", 'is_correct' => true],
                            ['choice_text' => "La masse du récipient", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Le numéro atomique Z indique le nombre de…",
                        'explanation' => "Le numéro atomique Z est égal au nombre de protons du noyau. Il identifie l’élément chimique.",
                        'choices' => [
                            ['choice_text' => "Neutrons", 'is_correct' => false],
                            ['choice_text' => "Protons", 'is_correct' => true],
                            ['choice_text' => "Nucléons excités", 'is_correct' => false],
                            ['choice_text' => "Molécules", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Pourquoi deux isotopes appartiennent-ils au même élément chimique ?",
                        'explanation' => "Des isotopes ont le même nombre de protons, donc le même numéro atomique, mais un nombre de neutrons différent.",
                        'choices' => [
                            ['choice_text' => "Ils ont le même nombre de protons", 'is_correct' => true],
                            ['choice_text' => "Ils ont toujours la même masse", 'is_correct' => false],
                            ['choice_text' => "Ils ont le même nombre de neutrons", 'is_correct' => false],
                            ['choice_text' => "Ils possèdent tous exactement les mêmes propriétés nucléaires", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Laquelle de ces situations correspond le mieux à une réaction nucléaire ?",
                        'explanation' => "Dans une transformation nucléaire, le noyau est modifié. Une simple dissolution ou un changement d’état ne change pas le noyau.",
                        'choices' => [
                            ['choice_text' => "La fusion de la glace", 'is_correct' => false],
                            ['choice_text' => "La dissolution du sel dans l’eau", 'is_correct' => false],
                            ['choice_text' => "La désintégration d’un noyau radioactif", 'is_correct' => true],
                            ['choice_text' => "L’évaporation de l’eau", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Les protons et les neutrons du noyau sont appelés ensemble…",
                        'explanation' => "Protons et neutrons sont les deux types de nucléons qui composent le noyau atomique.",
                        'choices' => [
                            ['choice_text' => "Électrons", 'is_correct' => false],
                            ['choice_text' => "Nucléons", 'is_correct' => true],
                            ['choice_text' => "Ions", 'is_correct' => false],
                            ['choice_text' => "Photons", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Un noyau peut-il être stable alors qu’il possède beaucoup de neutrons ?",
                        'explanation' => "Oui. La stabilité dépend de l’équilibre entre protons et neutrons ainsi que de la taille du noyau. Beaucoup de neutrons ne signifie pas automatiquement radioactivité.",
                        'choices' => [
                            ['choice_text' => "Non, jamais", 'is_correct' => false],
                            ['choice_text' => "Oui", 'is_correct' => true],
                            ['choice_text' => "Seulement pour l’hydrogène", 'is_correct' => false],
                            ['choice_text' => "Seulement à température nulle", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quelle affirmation différencie le mieux une réaction chimique d’une réaction nucléaire ?",
                        'explanation' => "Une réaction chimique réorganise surtout les électrons et les liaisons. Une réaction nucléaire modifie le noyau lui-même.",
                        'choices' => [
                            ['choice_text' => "Une réaction nucléaire modifie le noyau", 'is_correct' => true],
                            ['choice_text' => "Une réaction chimique ne peut jamais produire de chaleur", 'is_correct' => false],
                            ['choice_text' => "Une réaction nucléaire implique toujours de l’eau", 'is_correct' => false],
                            ['choice_text' => "Une réaction chimique ne concerne jamais les atomes", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Pourquoi la chimie nucléaire utilise-t-elle souvent la notation ^A_ZX ?",
                        'explanation' => "Cette notation permet d’indiquer clairement le nombre de masse A, le numéro atomique Z et le symbole X de l’élément.",
                        'choices' => [
                            ['choice_text' => "Pour donner la température de fusion", 'is_correct' => false],
                            ['choice_text' => "Pour indiquer la masse du laboratoire", 'is_correct' => false],
                            ['choice_text' => "Pour identifier la composition du noyau", 'is_correct' => true],
                            ['choice_text' => "Pour calculer directement la vitesse d’une réaction", 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => "Les rayonnements alpha, bêta et gamma",
                'description' => "Reconnaître les principaux types de rayonnement et leurs caractéristiques essentielles.",
                'questions' => [
                    [
                        'question' => "Une particule alpha correspond à…",
                        'explanation' => "Une particule alpha est constituée de deux protons et de deux neutrons, comme le noyau d’hélium.",
                        'choices' => [
                            ['choice_text' => "Un électron", 'is_correct' => false],
                            ['choice_text' => "Deux protons et deux neutrons", 'is_correct' => true],
                            ['choice_text' => "Un neutron seul", 'is_correct' => false],
                            ['choice_text' => "Un photon", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Le rayonnement bêta moins correspond à l’émission de…",
                        'explanation' => "Lors d’une désintégration bêta moins, un neutron se transforme en proton avec émission d’un électron et d’un antineutrino.",
                        'choices' => [
                            ['choice_text' => "Un électron", 'is_correct' => true],
                            ['choice_text' => "Une particule alpha", 'is_correct' => false],
                            ['choice_text' => "Deux neutrons", 'is_correct' => false],
                            ['choice_text' => "Un noyau d’hélium", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Le rayonnement gamma est de nature…",
                        'explanation' => "Les rayons gamma sont un rayonnement électromagnétique très énergétique, sans masse ni charge électrique.",
                        'choices' => [
                            ['choice_text' => "Particulaire avec deux protons", 'is_correct' => false],
                            ['choice_text' => "Électromagnétique", 'is_correct' => true],
                            ['choice_text' => "Chimique", 'is_correct' => false],
                            ['choice_text' => "Acoustique", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Parmi alpha, bêta et gamma, lequel possède généralement le plus grand pouvoir de pénétration ?",
                        'explanation' => "Le rayonnement gamma traverse beaucoup plus facilement la matière que les particules alpha ou bêta.",
                        'choices' => [
                            ['choice_text' => "Alpha", 'is_correct' => false],
                            ['choice_text' => "Bêta", 'is_correct' => false],
                            ['choice_text' => "Gamma", 'is_correct' => true],
                            ['choice_text' => "Les trois sont identiques", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quelle protection simple arrête facilement les particules alpha ?",
                        'explanation' => "Les particules alpha parcourent une courte distance et sont facilement arrêtées par une feuille de papier ou la couche externe de la peau.",
                        'choices' => [
                            ['choice_text' => "Une feuille de papier", 'is_correct' => true],
                            ['choice_text' => "Un mur de béton de plusieurs mètres dans tous les cas", 'is_correct' => false],
                            ['choice_text' => "Une fine couche d’air ne suffit jamais", 'is_correct' => false],
                            ['choice_text' => "Rien ne peut les arrêter", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Pourquoi un rayonnement alpha peut-il quand même être dangereux ?",
                        'explanation' => "Même s’il est peu pénétrant, le rayonnement alpha peut déposer beaucoup d’énergie sur une très petite distance s’il atteint directement les tissus, notamment après contamination interne.",
                        'choices' => [
                            ['choice_text' => "Parce qu’il est toujours visible à l’œil nu", 'is_correct' => false],
                            ['choice_text' => "Parce qu’il peut être fortement ionisant", 'is_correct' => true],
                            ['choice_text' => "Parce qu’il est plus lourd que tous les atomes", 'is_correct' => false],
                            ['choice_text' => "Parce qu’il augmente toujours la température de la pièce", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quel matériau dense est couramment utilisé pour atténuer les rayons gamma ?",
                        'explanation' => "Le plomb est dense et efficace pour atténuer les rayonnements gamma, même si l’épaisseur nécessaire dépend de l’énergie du rayonnement.",
                        'choices' => [
                            ['choice_text' => "Papier", 'is_correct' => false],
                            ['choice_text' => "Plomb", 'is_correct' => true],
                            ['choice_text' => "Coton", 'is_correct' => false],
                            ['choice_text' => "Bois très fin uniquement", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quel énoncé décrit correctement la pénétration des trois rayonnements ?",
                        'explanation' => "En général, alpha est le moins pénétrant, bêta est intermédiaire et gamma est le plus pénétrant.",
                        'choices' => [
                            ['choice_text' => "Gamma < bêta < alpha", 'is_correct' => false],
                            ['choice_text' => "Alpha < bêta < gamma", 'is_correct' => true],
                            ['choice_text' => "Bêta < alpha < gamma", 'is_correct' => false],
                            ['choice_text' => "Alpha = bêta = gamma", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Un rayonnement capable d’arracher des électrons aux atomes est dit…",
                        'explanation' => "Un rayonnement ionisant possède assez d’énergie pour provoquer l’ionisation de la matière.",
                        'choices' => [
                            ['choice_text' => "Ionisant", 'is_correct' => true],
                            ['choice_text' => "Neutre", 'is_correct' => false],
                            ['choice_text' => "Acide", 'is_correct' => false],
                            ['choice_text' => "Condensé", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Dans une logique de radioprotection, pourquoi la distance à la source compte-t-elle ?",
                        'explanation' => "Éloigner la source réduit l’exposition reçue. Pour une source ponctuelle, l’intensité diminue fortement avec la distance, selon une loi en 1/r² dans un cas idéal.",
                        'choices' => [
                            ['choice_text' => "Parce qu’un rayonnement disparaît à une distance fixe universelle", 'is_correct' => false],
                            ['choice_text' => "Parce que l’exposition diminue quand on s’éloigne", 'is_correct' => true],
                            ['choice_text' => "Parce que la source devient toujours froide", 'is_correct' => false],
                            ['choice_text' => "Parce que la distance change le type de noyau", 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => "Désintégration radioactive et période",
                'description' => "Comprendre la décroissance radioactive et effectuer des calculs simples avec la période radioactive.",
                'questions' => [
                    [
                        'question' => "La période radioactive, ou demi-vie, est le temps nécessaire pour que…",
                        'explanation' => "La demi-vie est le temps nécessaire pour que la moitié des noyaux radioactifs initiaux se soient désintégrés.",
                        'choices' => [
                            ['choice_text' => "Tous les noyaux disparaissent", 'is_correct' => false],
                            ['choice_text' => "La moitié des noyaux initiaux se soit désintégrée", 'is_correct' => true],
                            ['choice_text' => "La température soit divisée par deux", 'is_correct' => false],
                            ['choice_text' => "La masse du récipient soit divisée par deux", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Un échantillon contient 800 noyaux radioactifs au départ. Après une demi-vie, combien en reste-t-il environ ?",
                        'explanation' => "Après une demi-vie, la quantité restante est 800 × 1/2 = 400 noyaux.",
                        'choices' => [
                            ['choice_text' => "100", 'is_correct' => false],
                            ['choice_text' => "200", 'is_correct' => false],
                            ['choice_text' => "400", 'is_correct' => true],
                            ['choice_text' => "600", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Après deux demi-vies, quelle fraction de l’échantillon initial reste-t-il ?",
                        'explanation' => "Après la première demi-vie, il reste 1/2. Après la deuxième, il reste 1/2 × 1/2 = 1/4.",
                        'choices' => [
                            ['choice_text' => "1/2", 'is_correct' => false],
                            ['choice_text' => "1/3", 'is_correct' => false],
                            ['choice_text' => "1/4", 'is_correct' => true],
                            ['choice_text' => "3/4", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Un isotope a une demi-vie de 10 jours. Quelle quantité reste après 30 jours si l’on part de 160 mg ?",
                        'explanation' => "30 jours correspondent à 3 demi-vies : 160 → 80 → 40 → 20 mg.",
                        'choices' => [
                            ['choice_text' => "80 mg", 'is_correct' => false],
                            ['choice_text' => "40 mg", 'is_correct' => false],
                            ['choice_text' => "20 mg", 'is_correct' => true],
                            ['choice_text' => "10 mg", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "La désintégration radioactive d’un noyau isolé peut-elle être prédite exactement à une seconde près ?",
                        'explanation' => "La désintégration d’un noyau individuel est aléatoire. On peut toutefois prédire statistiquement le comportement d’un grand nombre de noyaux grâce à la loi de décroissance.",
                        'choices' => [
                            ['choice_text' => "Oui, toujours", 'is_correct' => false],
                            ['choice_text' => "Non, pas pour un noyau individuel", 'is_correct' => true],
                            ['choice_text' => "Oui, si le noyau est lourd", 'is_correct' => false],
                            ['choice_text' => "Seulement avec un aimant", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Une longue demi-vie signifie-t-elle que chaque noyau attend exactement la même durée avant de se désintégrer ?",
                        'explanation' => "Non. La demi-vie est une grandeur statistique caractérisant une population de noyaux, pas un minuteur individuel.",
                        'choices' => [
                            ['choice_text' => "Oui", 'is_correct' => false],
                            ['choice_text' => "Non", 'is_correct' => true],
                            ['choice_text' => "Seulement pour les noyaux artificiels", 'is_correct' => false],
                            ['choice_text' => "Seulement pour les noyaux d’hydrogène", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Après trois demi-vies, quelle fraction de la quantité initiale reste-t-il ?",
                        'explanation' => "Il reste (1/2)^3 = 1/8, soit 12,5 % de la quantité initiale.",
                        'choices' => [
                            ['choice_text' => "1/8", 'is_correct' => true],
                            ['choice_text' => "1/6", 'is_correct' => false],
                            ['choice_text' => "1/3", 'is_correct' => false],
                            ['choice_text' => "3/8", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Si une activité radioactive est divisée par deux, cela correspond idéalement à…",
                        'explanation' => "Pour une même source radioactive et des conditions comparables, l’activité est proportionnelle au nombre de noyaux non désintégrés. Elle est donc divisée par deux après une demi-vie.",
                        'choices' => [
                            ['choice_text' => "Une demi-vie", 'is_correct' => true],
                            ['choice_text' => "Deux demi-vies", 'is_correct' => false],
                            ['choice_text' => "Une durée nulle", 'is_correct' => false],
                            ['choice_text' => "Une augmentation de température", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Pourquoi la quantité radioactive ne diminue-t-elle pas linéairement avec le temps ?",
                        'explanation' => "Chaque noyau restant a la même probabilité de désintégration par unité de temps. La décroissance est donc exponentielle plutôt que linéaire.",
                        'choices' => [
                            ['choice_text' => "Parce que la vitesse de décroissance dépend de la quantité restante", 'is_correct' => true],
                            ['choice_text' => "Parce que les noyaux deviennent plus gros", 'is_correct' => false],
                            ['choice_text' => "Parce que la masse atomique double", 'is_correct' => false],
                            ['choice_text' => "Parce que la température doit augmenter", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Un isotope a une demi-vie de 5 ans. Après 15 ans, quelle part initiale reste-t-il ?",
                        'explanation' => "15 ans correspondent à 3 demi-vies : 1/2 → 1/4 → 1/8. Il reste donc 1/8 de la quantité initiale.",
                        'choices' => [
                            ['choice_text' => "1/2", 'is_correct' => false],
                            ['choice_text' => "1/4", 'is_correct' => false],
                            ['choice_text' => "1/8", 'is_correct' => true],
                            ['choice_text' => "1/15", 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => "Équations nucléaires et conservation",
                'description' => "Équilibrer des transformations nucléaires simples en conservant le nombre de masse et le numéro atomique.",
                'questions' => [
                    [
                        'question' => "Dans une équation nucléaire équilibrée, que doit-on conserver ?",
                        'explanation' => "Le nombre de masse A et la charge totale, représentée par le numéro atomique Z, doivent être conservés dans l’équation.",
                        'choices' => [
                            ['choice_text' => "Seulement le nombre d’électrons libres", 'is_correct' => false],
                            ['choice_text' => "Le nombre de masse et le numéro atomique", 'is_correct' => true],
                            ['choice_text' => "La température et le volume", 'is_correct' => false],
                            ['choice_text' => "La couleur et le pH", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Lors d’une désintégration alpha, le nombre de masse du noyau fils diminue de…",
                        'explanation' => "Une particule alpha contient 2 protons et 2 neutrons, donc son nombre de masse est 4. Le noyau fils perd donc 4 unités de A.",
                        'choices' => [
                            ['choice_text' => "1", 'is_correct' => false],
                            ['choice_text' => "2", 'is_correct' => false],
                            ['choice_text' => "4", 'is_correct' => true],
                            ['choice_text' => "8", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Lors d’une désintégration alpha, le numéro atomique Z diminue de…",
                        'explanation' => "Une particule alpha emporte deux protons. Le nombre de protons du noyau fils diminue donc de 2.",
                        'choices' => [
                            ['choice_text' => "1", 'is_correct' => false],
                            ['choice_text' => "2", 'is_correct' => true],
                            ['choice_text' => "4", 'is_correct' => false],
                            ['choice_text' => "0", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Lors d’une désintégration bêta moins, le nombre de masse A change-t-il ?",
                        'explanation' => "En bêta moins, un neutron devient un proton. Le nombre total de nucléons reste donc le même : A ne change pas.",
                        'choices' => [
                            ['choice_text' => "Oui, il augmente de 1", 'is_correct' => false],
                            ['choice_text' => "Oui, il diminue de 1", 'is_correct' => false],
                            ['choice_text' => "Non, il reste inchangé", 'is_correct' => true],
                            ['choice_text' => "Il est toujours multiplié par deux", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Lors d’une désintégration bêta moins, le numéro atomique Z…",
                        'explanation' => "Un neutron devient un proton. Le nombre de protons augmente donc de 1, ce qui augmente Z de 1.",
                        'choices' => [
                            ['choice_text' => "diminue de 1", 'is_correct' => false],
                            ['choice_text' => "reste inchangé", 'is_correct' => false],
                            ['choice_text' => "augmente de 1", 'is_correct' => true],
                            ['choice_text' => "diminue de 2", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quel type de transformation laisse le noyau avec le même A et le même Z ?",
                        'explanation' => "Lors d’une émission gamma, le noyau se désexcite sans changer son nombre de protons ou de nucléons.",
                        'choices' => [
                            ['choice_text' => "Émission alpha", 'is_correct' => false],
                            ['choice_text' => "Émission bêta moins", 'is_correct' => false],
                            ['choice_text' => "Émission gamma", 'is_correct' => true],
                            ['choice_text' => "Fusion de deux noyaux", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Un noyau ^210_84Po émet une particule alpha. Quel est le noyau fils ?",
                        'explanation' => "Avec une émission alpha, A devient 210 − 4 = 206 et Z devient 84 − 2 = 82. Le numéro 82 correspond au plomb, Pb.",
                        'choices' => [
                            ['choice_text' => "^206_82Pb", 'is_correct' => true],
                            ['choice_text' => "^206_84Po", 'is_correct' => false],
                            ['choice_text' => "^214_86Rn", 'is_correct' => false],
                            ['choice_text' => "^210_82Pb", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Un noyau ^14_6C subit une désintégration bêta moins. Quel est le nombre atomique du noyau fils ?",
                        'explanation' => "En bêta moins, Z augmente de 1 tandis que A reste constant. On passe donc de Z = 6 à Z = 7.",
                        'choices' => [
                            ['choice_text' => "5", 'is_correct' => false],
                            ['choice_text' => "6", 'is_correct' => false],
                            ['choice_text' => "7", 'is_correct' => true],
                            ['choice_text' => "8", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Pourquoi faut-il équilibrer une équation nucléaire comme on équilibre une réaction chimique ?",
                        'explanation' => "Dans les deux cas, il faut respecter des lois de conservation. En nucléaire, on suit notamment le nombre de nucléons et la charge.",
                        'choices' => [
                            ['choice_text' => "Pour respecter les quantités conservées lors de la transformation", 'is_correct' => true],
                            ['choice_text' => "Pour rendre la réaction plus rapide", 'is_correct' => false],
                            ['choice_text' => "Pour augmenter la température", 'is_correct' => false],
                            ['choice_text' => "Pour rendre tous les noyaux stables", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Dans une équation nucléaire correcte, une particule alpha doit-elle être comptée dans A et dans Z ?",
                        'explanation' => "Oui. Une particule alpha possède A = 4 et Z = 2. Elle contribue donc aux deux bilans de conservation.",
                        'choices' => [
                            ['choice_text' => "Oui", 'is_correct' => true],
                            ['choice_text' => "Seulement dans A", 'is_correct' => false],
                            ['choice_text' => "Seulement dans Z", 'is_correct' => false],
                            ['choice_text' => "Jamais", 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => "Fission, fusion et énergie nucléaire",
                'description' => "Distinguer fission et fusion et comprendre simplement l’origine de l’énergie nucléaire.",
                'questions' => [
                    [
                        'question' => "La fission nucléaire consiste à…",
                        'explanation' => "La fission est la division d’un noyau lourd en noyaux plus légers, généralement avec libération d’énergie et émission de neutrons.",
                        'choices' => [
                            ['choice_text' => "Diviser un noyau lourd", 'is_correct' => true],
                            ['choice_text' => "Assembler des électrons", 'is_correct' => false],
                            ['choice_text' => "Faire fondre un solide", 'is_correct' => false],
                            ['choice_text' => "Dissoudre un noyau dans l’eau", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "La fusion nucléaire consiste à…",
                        'explanation' => "La fusion assemble des noyaux légers pour former un noyau plus lourd. Dans certaines réactions, une grande quantité d’énergie est libérée.",
                        'choices' => [
                            ['choice_text' => "Séparer les neutrons d’un noyau", 'is_correct' => false],
                            ['choice_text' => "Assembler des noyaux légers", 'is_correct' => true],
                            ['choice_text' => "Enlever tous les électrons", 'is_correct' => false],
                            ['choice_text' => "Transformer un gaz en liquide", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Le Soleil tire principalement son énergie de réactions de…",
                        'explanation' => "Au cœur du Soleil, des noyaux légers participent à des réactions de fusion nucléaire qui libèrent de l’énergie.",
                        'choices' => [
                            ['choice_text' => "Fission", 'is_correct' => false],
                            ['choice_text' => "Fusion", 'is_correct' => true],
                            ['choice_text' => "Combustion chimique ordinaire", 'is_correct' => false],
                            ['choice_text' => "Dissolution", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Pourquoi une petite perte de masse peut-elle être associée à une grande quantité d’énergie nucléaire ?",
                        'explanation' => "Selon E = mc², une petite variation de masse correspond à une grande énergie car c² est un nombre très élevé.",
                        'choices' => [
                            ['choice_text' => "Parce que c² est très grand", 'is_correct' => true],
                            ['choice_text' => "Parce que la masse n’a aucun lien avec l’énergie", 'is_correct' => false],
                            ['choice_text' => "Parce que l’énergie est toujours égale à la température", 'is_correct' => false],
                            ['choice_text' => "Parce que la lumière possède une masse énorme", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Dans un réacteur nucléaire classique, quelle réaction est utilisée pour produire de l’énergie ?",
                        'explanation' => "Les réacteurs nucléaires de puissance actuels utilisent principalement des réactions de fission contrôlée de noyaux lourds comme l’uranium-235.",
                        'choices' => [
                            ['choice_text' => "Fusion incontrôlée", 'is_correct' => false],
                            ['choice_text' => "Fission contrôlée", 'is_correct' => true],
                            ['choice_text' => "Combustion du carbone", 'is_correct' => false],
                            ['choice_text' => "Dissociation de l’eau", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Une réaction de fission peut libérer des neutrons capables de provoquer d’autres fissions. Cette situation peut former…",
                        'explanation' => "Les neutrons issus d’une fission peuvent provoquer d’autres fissions. C’est le principe d’une réaction en chaîne lorsqu’elle est entretenue.",
                        'choices' => [
                            ['choice_text' => "Une réaction en chaîne", 'is_correct' => true],
                            ['choice_text' => "Une dissolution", 'is_correct' => false],
                            ['choice_text' => "Une neutralisation acide-base", 'is_correct' => false],
                            ['choice_text' => "Une cristallisation", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Pourquoi parle-t-on de contrôle dans un réacteur nucléaire ?",
                        'explanation' => "Le but est de maintenir la réaction en chaîne dans des conditions maîtrisées, afin de produire l’énergie de manière stable et sûre.",
                        'choices' => [
                            ['choice_text' => "Pour éviter que la réaction en chaîne ne devienne incontrôlée", 'is_correct' => true],
                            ['choice_text' => "Pour empêcher toute fission", 'is_correct' => false],
                            ['choice_text' => "Pour supprimer toute chaleur", 'is_correct' => false],
                            ['choice_text' => "Pour transformer les neutrons en électrons", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quelle différence fondamentale existe entre fission et fusion ?",
                        'explanation' => "La fission sépare un noyau lourd, tandis que la fusion combine des noyaux légers.",
                        'choices' => [
                            ['choice_text' => "La fission assemble, la fusion sépare", 'is_correct' => false],
                            ['choice_text' => "La fission sépare, la fusion assemble", 'is_correct' => true],
                            ['choice_text' => "Les deux signifient exactement la même chose", 'is_correct' => false],
                            ['choice_text' => "Aucune ne concerne les noyaux", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quel facteur rend la fusion difficile à réaliser sur Terre ?",
                        'explanation' => "Les noyaux chargés positivement se repoussent. Il faut donc des conditions extrêmes pour les rapprocher suffisamment afin que l’interaction nucléaire permette la fusion.",
                        'choices' => [
                            ['choice_text' => "La répulsion électrique entre noyaux", 'is_correct' => true],
                            ['choice_text' => "L’absence totale de protons", 'is_correct' => false],
                            ['choice_text' => "Le fait que les noyaux soient toujours liquides", 'is_correct' => false],
                            ['choice_text' => "La présence obligatoire d’oxygène", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "L’équation E = mc² montre surtout que…",
                        'explanation' => "La relation d’Einstein exprime l’équivalence entre masse et énergie. Elle permet de comprendre pourquoi les transformations nucléaires peuvent libérer beaucoup d’énergie.",
                        'choices' => [
                            ['choice_text' => "La masse et l’énergie sont liées", 'is_correct' => true],
                            ['choice_text' => "La masse est toujours nulle", 'is_correct' => false],
                            ['choice_text' => "La température détermine toujours la masse", 'is_correct' => false],
                            ['choice_text' => "Les réactions chimiques produisent toujours plus d’énergie que les réactions nucléaires", 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => "Radioactivité naturelle et artificielle",
                'description' => "Identifier les sources de radioactivité et distinguer les radioéléments naturels des sources produites artificiellement.",
                'questions' => [
                    [
                        'question' => "La radioactivité naturelle peut-elle exister sans intervention humaine ?",
                        'explanation' => "Oui. Certains isotopes radioactifs sont naturellement présents dans les roches, les sols, l’air et le corps humain.",
                        'choices' => [
                            ['choice_text' => "Oui", 'is_correct' => true],
                            ['choice_text' => "Non, elle vient uniquement des centrales", 'is_correct' => false],
                            ['choice_text' => "Seulement dans les laboratoires", 'is_correct' => false],
                            ['choice_text' => "Seulement dans l’espace", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Le radon est un exemple de…",
                        'explanation' => "Le radon est un gaz radioactif naturel issu de chaînes de désintégration de l’uranium présentes dans le sol et les roches.",
                        'choices' => [
                            ['choice_text' => "Métal stable", 'is_correct' => false],
                            ['choice_text' => "Gaz radioactif naturel", 'is_correct' => true],
                            ['choice_text' => "Acide organique", 'is_correct' => false],
                            ['choice_text' => "Polymère", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Le carbone 14 est particulièrement connu pour son utilisation en…",
                        'explanation' => "Le carbone 14 permet de dater des matières organiques anciennes sur des périodes adaptées à sa demi-vie.",
                        'choices' => [
                            ['choice_text' => "Datation radiocarbone", 'is_correct' => true],
                            ['choice_text' => "Production de verre", 'is_correct' => false],
                            ['choice_text' => "Fabrication de savon", 'is_correct' => false],
                            ['choice_text' => "Mesure de la dureté de l’eau", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Une source radioactive créée dans un réacteur ou un cyclotron est généralement qualifiée de…",
                        'explanation' => "Lorsqu’un radioisotope est produit par une activité humaine, on parle de radioactivité ou de radioisotope artificiel.",
                        'choices' => [
                            ['choice_text' => "Naturelle uniquement", 'is_correct' => false],
                            ['choice_text' => "Artificielle", 'is_correct' => true],
                            ['choice_text' => "Biologique", 'is_correct' => false],
                            ['choice_text' => "Mécanique", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Le corps humain contient-il naturellement de petites quantités de radioéléments ?",
                        'explanation' => "Oui. Le potassium 40 et le carbone 14, entre autres, sont présents naturellement dans l’organisme.",
                        'choices' => [
                            ['choice_text' => "Non, jamais", 'is_correct' => false],
                            ['choice_text' => "Oui", 'is_correct' => true],
                            ['choice_text' => "Seulement après une radiographie", 'is_correct' => false],
                            ['choice_text' => "Seulement chez les enfants", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Pourquoi la radioactivité d’un échantillon diminue-t-elle avec le temps ?",
                        'explanation' => "Les noyaux radioactifs se désintègrent progressivement. Le nombre de noyaux encore radioactifs diminue donc avec le temps.",
                        'choices' => [
                            ['choice_text' => "Parce que les noyaux instables se désintègrent", 'is_correct' => true],
                            ['choice_text' => "Parce que les noyaux absorbent toute la lumière", 'is_correct' => false],
                            ['choice_text' => "Parce que l’échantillon devient automatiquement liquide", 'is_correct' => false],
                            ['choice_text' => "Parce que la masse atomique est toujours divisée par deux chaque jour", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quel exemple correspond à une utilisation civile d’un radioisotope ?",
                        'explanation' => "Les radioisotopes peuvent être utilisés en médecine, notamment pour l’imagerie ou certains traitements, sous contrôle et avec des protocoles adaptés.",
                        'choices' => [
                            ['choice_text' => "Certaines applications médicales", 'is_correct' => true],
                            ['choice_text' => "La cuisson domestique de tous les aliments", 'is_correct' => false],
                            ['choice_text' => "La fabrication de papier sans aucune mesure", 'is_correct' => false],
                            ['choice_text' => "Le nettoyage ordinaire des fenêtres", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Pourquoi la datation au carbone 14 ne convient-elle pas à n’importe quel objet ?",
                        'explanation' => "La méthode repose sur le carbone d’origine biologique et sur une plage de temps compatible avec la demi-vie du carbone 14.",
                        'choices' => [
                            ['choice_text' => "Parce qu’elle exige une matière contenant du carbone adapté à la méthode", 'is_correct' => true],
                            ['choice_text' => "Parce qu’elle ne fonctionne qu’avec les métaux", 'is_correct' => false],
                            ['choice_text' => "Parce qu’elle ne dépend pas du tout du temps", 'is_correct' => false],
                            ['choice_text' => "Parce qu’elle mesure uniquement la température", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quelle phrase est correcte à propos de la radioactivité naturelle ?",
                        'explanation' => "La Terre et l’environnement contiennent naturellement plusieurs radioisotopes. La radioactivité n’est donc pas synonyme d’activité humaine.",
                        'choices' => [
                            ['choice_text' => "Elle n’existe que dans les centrales", 'is_correct' => false],
                            ['choice_text' => "Elle fait naturellement partie de l’environnement", 'is_correct' => true],
                            ['choice_text' => "Elle n’existe que dans les objets métalliques", 'is_correct' => false],
                            ['choice_text' => "Elle est toujours visible à l’œil nu", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Un technicien trouve du radon dans un bâtiment. Quelle idée est la plus pertinente ?",
                        'explanation' => "Le radon peut s’accumuler dans certains bâtiments, surtout lorsque l’air est peu renouvelé. La ventilation et la mesure du niveau sont donc importantes.",
                        'choices' => [
                            ['choice_text' => "Le radon est un phénomène uniquement chimique sans lien avec les noyaux", 'is_correct' => false],
                            ['choice_text' => "Il faut considérer l’aération et la surveillance de l’exposition", 'is_correct' => true],
                            ['choice_text' => "Il suffit de colorer les murs", 'is_correct' => false],
                            ['choice_text' => "La radioactivité disparaît immédiatement si l’on ferme les fenêtres", 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => "Détection et mesure des rayonnements",
                'description' => "Comprendre les instruments courants et les idées de base liées à la mesure de la radioactivité.",
                'questions' => [
                    [
                        'question' => "Quel appareil est couramment utilisé pour détecter des rayonnements ionisants ?",
                        'explanation' => "Le compteur Geiger-Müller est un appareil classique de détection et de comptage des rayonnements ionisants.",
                        'choices' => [
                            ['choice_text' => "Compteur Geiger-Müller", 'is_correct' => true],
                            ['choice_text' => "Baromètre", 'is_correct' => false],
                            ['choice_text' => "Thermomètre", 'is_correct' => false],
                            ['choice_text' => "pH-mètre", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Que mesure principalement une dosimètre porté par un travailleur exposé ?",
                        'explanation' => "Un dosimètre sert à suivre la dose de rayonnement reçue par une personne sur une période donnée.",
                        'choices' => [
                            ['choice_text' => "La dose reçue", 'is_correct' => true],
                            ['choice_text' => "La masse du travailleur", 'is_correct' => false],
                            ['choice_text' => "Le nombre de neutrons dans son sang", 'is_correct' => false],
                            ['choice_text' => "La température du local seulement", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quelle unité SI correspond à la dose absorbée ?",
                        'explanation' => "La dose absorbée se mesure en gray (Gy), qui correspond à une quantité d’énergie déposée par unité de masse.",
                        'choices' => [
                            ['choice_text' => "Gray", 'is_correct' => true],
                            ['choice_text' => "Pascal", 'is_correct' => false],
                            ['choice_text' => "Mole", 'is_correct' => false],
                            ['choice_text' => "Kelvin", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quelle unité est utilisée pour exprimer la dose équivalente ou efficace en radioprotection ?",
                        'explanation' => "Le sievert (Sv) tient compte de l’impact biologique du rayonnement et, selon la grandeur, de la sensibilité des tissus.",
                        'choices' => [
                            ['choice_text' => "Sievert", 'is_correct' => true],
                            ['choice_text' => "Volt", 'is_correct' => false],
                            ['choice_text' => "Joule par mole uniquement", 'is_correct' => false],
                            ['choice_text' => "Litre", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Un compteur enregistre plus de coups par minute lorsqu’on approche une source radioactive. Que peut-on en déduire ?",
                        'explanation' => "Un nombre de coups plus élevé indique généralement un champ de rayonnement plus intense au point de mesure, toutes choses comparables par ailleurs.",
                        'choices' => [
                            ['choice_text' => "La source est probablement détectée plus fortement", 'is_correct' => true],
                            ['choice_text' => "La source est devenue chimiquement acide", 'is_correct' => false],
                            ['choice_text' => "La température a forcément doublé", 'is_correct' => false],
                            ['choice_text' => "Le détecteur a cessé de fonctionner", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Pourquoi fait-on parfois une mesure de bruit de fond avant de mesurer une source ?",
                        'explanation' => "Le bruit de fond correspond aux rayonnements présents naturellement ou provenant de l’environnement. Le connaître aide à interpréter la mesure de la source.",
                        'choices' => [
                            ['choice_text' => "Pour comparer la source au niveau naturel ou ambiant", 'is_correct' => true],
                            ['choice_text' => "Pour chauffer le détecteur", 'is_correct' => false],
                            ['choice_text' => "Pour changer la demi-vie", 'is_correct' => false],
                            ['choice_text' => "Pour transformer la source en gaz", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Un détecteur mesure 120 coups/min avec la source et 20 coups/min de bruit de fond. Quelle valeur brute reste après soustraction simple du bruit de fond ?",
                        'explanation' => "On retire le bruit de fond : 120 − 20 = 100 coups/min.",
                        'choices' => [
                            ['choice_text' => "80 coups/min", 'is_correct' => false],
                            ['choice_text' => "100 coups/min", 'is_correct' => true],
                            ['choice_text' => "120 coups/min", 'is_correct' => false],
                            ['choice_text' => "140 coups/min", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Pourquoi une mesure de radioactivité peut-elle fluctuer légèrement d’une seconde à l’autre ?",
                        'explanation' => "La détection des désintégrations est statistique. Pour un temps de comptage court, le nombre de coups peut donc varier naturellement.",
                        'choices' => [
                            ['choice_text' => "Parce que les désintégrations ont un caractère aléatoire", 'is_correct' => true],
                            ['choice_text' => "Parce que la demi-vie change chaque seconde", 'is_correct' => false],
                            ['choice_text' => "Parce que Z change sans arrêt", 'is_correct' => false],
                            ['choice_text' => "Parce que le détecteur crée les noyaux", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Pour améliorer la précision statistique d’un comptage, quelle action est généralement utile ?",
                        'explanation' => "Compter pendant plus longtemps augmente le nombre total d’événements enregistrés et réduit généralement l’importance des fluctuations relatives.",
                        'choices' => [
                            ['choice_text' => "Augmenter le temps de comptage", 'is_correct' => true],
                            ['choice_text' => "Changer la couleur du support", 'is_correct' => false],
                            ['choice_text' => "Réduire la distance sans raison de sécurité", 'is_correct' => false],
                            ['choice_text' => "Ignorer le bruit de fond", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Un appareil de détection indique une valeur élevée. Peut-on conclure immédiatement que la situation est dangereuse sans autre information ?",
                        'explanation' => "Il faut connaître le type de rayonnement, la dose, la durée d’exposition, la distance, le contexte et la calibration du détecteur avant d’interpréter correctement une mesure.",
                        'choices' => [
                            ['choice_text' => "Oui, toute valeur élevée est identique dans tous les contextes", 'is_correct' => false],
                            ['choice_text' => "Non, il faut interpréter la mesure dans son contexte", 'is_correct' => true],
                            ['choice_text' => "Oui, si le détecteur est portable", 'is_correct' => false],
                            ['choice_text' => "Non, car les rayonnements n’existent jamais naturellement", 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => "Applications médicales de la chimie nucléaire",
                'description' => "Découvrir comment les radioisotopes sont utilisés en diagnostic et en traitement médical.",
                'questions' => [
                    [
                        'question' => "Comment un radioisotope peut-il aider à localiser un organe en imagerie médicale ?",
                        'explanation' => "Un radioisotope peut être associé à une molécule qui se dirige vers un tissu particulier. Le rayonnement émis est ensuite détecté par un appareil adapté.",
                        'choices' => [
                            ['choice_text' => "En suivant le rayonnement émis par le traceur", 'is_correct' => true],
                            ['choice_text' => "En changeant la couleur naturelle du tissu", 'is_correct' => false],
                            ['choice_text' => "En pesant directement l’organe", 'is_correct' => false],
                            ['choice_text' => "En supprimant tous les électrons du corps", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Qu’appelle-t-on un radiotraceur ?",
                        'explanation' => "Un radiotraceur est une substance marquée avec un radioisotope permettant de suivre un phénomène biologique grâce au rayonnement détecté.",
                        'choices' => [
                            ['choice_text' => "Une solution colorée sans isotope", 'is_correct' => false],
                            ['choice_text' => "Une substance marquée avec un radioisotope", 'is_correct' => true],
                            ['choice_text' => "Un médicament qui ne contient aucun atome", 'is_correct' => false],
                            ['choice_text' => "Un simple thermomètre", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Pourquoi choisir un radioisotope à demi-vie relativement courte pour certaines procédures diagnostiques ?",
                        'explanation' => "Une demi-vie adaptée permet d’obtenir les informations nécessaires tout en laissant l’activité diminuer relativement rapidement après l’examen.",
                        'choices' => [
                            ['choice_text' => "Pour limiter la durée pendant laquelle le traceur reste radioactif", 'is_correct' => true],
                            ['choice_text' => "Pour rendre le patient radioactif toute sa vie", 'is_correct' => false],
                            ['choice_text' => "Pour empêcher toute détection", 'is_correct' => false],
                            ['choice_text' => "Pour augmenter automatiquement la masse du patient", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "En radiothérapie interne, pourquoi utilise-t-on un radioisotope lié à une molécule ciblée ?",
                        'explanation' => "L’objectif est de déposer le rayonnement à proximité des cellules ciblées afin d’endommager leur matériel biologique tout en limitant autant que possible les tissus voisins.",
                        'choices' => [
                            ['choice_text' => "Pour rapprocher le rayonnement de la zone à traiter", 'is_correct' => true],
                            ['choice_text' => "Pour refroidir le corps", 'is_correct' => false],
                            ['choice_text' => "Pour augmenter le pH du sang", 'is_correct' => false],
                            ['choice_text' => "Pour supprimer toutes les bactéries de l’environnement", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quel type de rayonnement est particulièrement utile pour une détection externe en médecine nucléaire ?",
                        'explanation' => "Les rayonnements gamma ou les photons issus de certaines désintégrations peuvent traverser les tissus et être détectés à l’extérieur du corps.",
                        'choices' => [
                            ['choice_text' => "Gamma", 'is_correct' => true],
                            ['choice_text' => "Alpha uniquement", 'is_correct' => false],
                            ['choice_text' => "Uniquement les électrons de valence", 'is_correct' => false],
                            ['choice_text' => "Les vibrations acoustiques", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Pourquoi la radioprotection est-elle importante pour les patients et le personnel ?",
                        'explanation' => "L’objectif est de limiter l’exposition aux rayonnements au niveau nécessaire pour obtenir le bénéfice médical attendu.",
                        'choices' => [
                            ['choice_text' => "Pour réduire les expositions inutiles", 'is_correct' => true],
                            ['choice_text' => "Pour empêcher toute imagerie médicale", 'is_correct' => false],
                            ['choice_text' => "Pour rendre les radioisotopes stables immédiatement", 'is_correct' => false],
                            ['choice_text' => "Pour augmenter les demi-vies", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Un patient reçoit un traceur radioactif pour une imagerie. Pourquoi le médecin choisit-il une quantité contrôlée ?",
                        'explanation' => "La quantité administrée doit être suffisante pour obtenir une information exploitable tout en limitant l’exposition au niveau nécessaire.",
                        'choices' => [
                            ['choice_text' => "Pour équilibrer qualité de l’examen et exposition", 'is_correct' => true],
                            ['choice_text' => "Pour augmenter indéfiniment la radioactivité", 'is_correct' => false],
                            ['choice_text' => "Pour empêcher le traceur de se répartir", 'is_correct' => false],
                            ['choice_text' => "Pour transformer le traceur en médicament classique", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quelle proposition décrit une différence entre imagerie nucléaire et radiothérapie ?",
                        'explanation' => "L’imagerie cherche surtout à obtenir une information diagnostique, tandis que la radiothérapie vise à délivrer une dose thérapeutique aux cellules ciblées.",
                        'choices' => [
                            ['choice_text' => "L’imagerie cherche surtout l’information, la radiothérapie cherche un effet thérapeutique", 'is_correct' => true],
                            ['choice_text' => "Les deux ont exactement le même objectif", 'is_correct' => false],
                            ['choice_text' => "La radiothérapie ne fait intervenir aucun rayonnement", 'is_correct' => false],
                            ['choice_text' => "L’imagerie nucléaire ne peut utiliser aucun isotope", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Pourquoi le choix du radioisotope dépend-il de son type de rayonnement et de sa demi-vie ?",
                        'explanation' => "Le rayonnement détermine la manière dont l’isotope peut être détecté ou utilisé, tandis que la demi-vie influence la durée de son activité.",
                        'choices' => [
                            ['choice_text' => "Parce que ces propriétés déterminent en partie l’usage médical possible", 'is_correct' => true],
                            ['choice_text' => "Parce que tous les isotopes sont équivalents", 'is_correct' => false],
                            ['choice_text' => "Parce que la demi-vie ne change jamais", 'is_correct' => false],
                            ['choice_text' => "Parce que le type de rayonnement n’a aucun effet sur la détection", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quel principe général de radioprotection reste valable en médecine nucléaire ?",
                        'explanation' => "On cherche à limiter la dose reçue tout en conservant le bénéfice attendu. Le temps, la distance, les protections et l’organisation du travail jouent un rôle.",
                        'choices' => [
                            ['choice_text' => "Réduire les expositions inutiles", 'is_correct' => true],
                            ['choice_text' => "Augmenter le temps passé près des sources", 'is_correct' => false],
                            ['choice_text' => "Supprimer tous les contrôles", 'is_correct' => false],
                            ['choice_text' => "Considérer tous les rayonnements comme identiques", 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => "Sûreté, protection et gestion des sources",
                'description' => "Appliquer les principes de base de temps, distance, blindage et gestion responsable des sources radioactives.",
                'questions' => [
                    [
                        'question' => "Les trois idées classiques pour réduire une exposition externe sont…",
                        'explanation' => "En radioprotection, on agit notamment sur le temps d’exposition, la distance à la source et le blindage adapté.",
                        'choices' => [
                            ['choice_text' => "Temps, distance et blindage", 'is_correct' => true],
                            ['choice_text' => "Masse, pH et température", 'is_correct' => false],
                            ['choice_text' => "Pression, volume et densité", 'is_correct' => false],
                            ['choice_text' => "Couleur, odeur et goût", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Pour réduire une exposition externe, pourquoi limiter le temps passé près de la source ?",
                        'explanation' => "À conditions comparables, une durée d’exposition plus courte entraîne une dose reçue plus faible.",
                        'choices' => [
                            ['choice_text' => "Parce que la dose dépend du temps d’exposition", 'is_correct' => true],
                            ['choice_text' => "Parce que la source s’arrête automatiquement", 'is_correct' => false],
                            ['choice_text' => "Parce que les noyaux deviennent stables en quelques secondes", 'is_correct' => false],
                            ['choice_text' => "Parce que le rayonnement devient sonore", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Un technicien peut-il généralement réduire son exposition en s’éloignant de la source ?",
                        'explanation' => "Oui. L’intensité reçue diminue lorsque la distance augmente ; pour une source ponctuelle idéale, elle varie approximativement comme 1/r².",
                        'choices' => [
                            ['choice_text' => "Oui", 'is_correct' => true],
                            ['choice_text' => "Non, la distance n’a aucun rôle", 'is_correct' => false],
                            ['choice_text' => "Seulement pour les rayons alpha", 'is_correct' => false],
                            ['choice_text' => "Seulement si la source est chimique", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Une source ponctuelle idéale est déplacée de 1 m à 2 m. Comment varie approximativement l’intensité reçue ?",
                        'explanation' => "Avec une loi en 1/r², doubler la distance divise l’intensité par 2² = 4. Elle devient donc environ quatre fois plus faible.",
                        'choices' => [
                            ['choice_text' => "Elle double", 'is_correct' => false],
                            ['choice_text' => "Elle est divisée par 2", 'is_correct' => false],
                            ['choice_text' => "Elle est divisée par 4", 'is_correct' => true],
                            ['choice_text' => "Elle est multipliée par 4", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Pourquoi un blindage doit-il être choisi en fonction du rayonnement ?",
                        'explanation' => "Alpha, bêta, gamma et neutrons n’interagissent pas de la même façon avec la matière. Le matériau et l’épaisseur du blindage doivent donc être adaptés.",
                        'choices' => [
                            ['choice_text' => "Parce que tous les rayonnements ne sont pas arrêtés de la même manière", 'is_correct' => true],
                            ['choice_text' => "Parce que le blindage change la demi-vie", 'is_correct' => false],
                            ['choice_text' => "Parce qu’un seul matériau fonctionne toujours", 'is_correct' => false],
                            ['choice_text' => "Parce que le type de rayonnement n’a aucune importance", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Pourquoi une source radioactive doit-elle être clairement identifiée et stockée correctement ?",
                        'explanation' => "Une identification et un stockage adaptés réduisent le risque de perte, de mauvaise manipulation ou d’exposition accidentelle.",
                        'choices' => [
                            ['choice_text' => "Pour assurer une gestion sûre et éviter les expositions inutiles", 'is_correct' => true],
                            ['choice_text' => "Pour augmenter son activité", 'is_correct' => false],
                            ['choice_text' => "Pour prolonger artificiellement sa demi-vie", 'is_correct' => false],
                            ['choice_text' => "Pour modifier son numéro atomique", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Que faut-il faire face à une source radioactive inconnue trouvée dans un laboratoire ?",
                        'explanation' => "Une source inconnue ne doit pas être manipulée au hasard. Il faut sécuriser la zone et suivre la procédure prévue, avec du personnel compétent.",
                        'choices' => [
                            ['choice_text' => "La prendre immédiatement à la main pour lire l’étiquette", 'is_correct' => false],
                            ['choice_text' => "La laisser sans surveillance", 'is_correct' => false],
                            ['choice_text' => "Sécuriser la zone et appliquer la procédure de radioprotection", 'is_correct' => true],
                            ['choice_text' => "La jeter avec les déchets ordinaires", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Pourquoi la contamination radioactive interne est-elle particulièrement prise au sérieux ?",
                        'explanation' => "Une substance radioactive incorporée peut rester en contact avec les tissus et les irradier depuis l’intérieur pendant une certaine durée.",
                        'choices' => [
                            ['choice_text' => "Parce que la source peut se trouver au contact direct des tissus", 'is_correct' => true],
                            ['choice_text' => "Parce que tous les radioisotopes deviennent toxiques chimiquement", 'is_correct' => false],
                            ['choice_text' => "Parce qu’elle augmente toujours la température corporelle", 'is_correct' => false],
                            ['choice_text' => "Parce que les rayonnements internes sont visibles", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Le principe d’optimisation en radioprotection cherche notamment à…",
                        'explanation' => "L’idée est de maintenir les expositions aussi faibles que raisonnablement possible compte tenu du contexte et de l’objectif de l’activité.",
                        'choices' => [
                            ['choice_text' => "Éviter les expositions inutiles et optimiser les pratiques", 'is_correct' => true],
                            ['choice_text' => "Augmenter systématiquement toutes les doses", 'is_correct' => false],
                            ['choice_text' => "Supprimer toute mesure", 'is_correct' => false],
                            ['choice_text' => "Choisir toujours le matériau le moins cher sans autre considération", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Pourquoi une source radioactive ne doit-elle pas être mise dans les déchets ménagers ordinaires ?",
                        'explanation' => "Elle doit suivre une filière adaptée afin d’éviter une exposition accidentelle et de respecter les règles de gestion des matières radioactives.",
                        'choices' => [
                            ['choice_text' => "Parce qu’elle nécessite une gestion spécifique", 'is_correct' => true],
                            ['choice_text' => "Parce qu’elle est toujours explosive", 'is_correct' => false],
                            ['choice_text' => "Parce qu’elle cesse automatiquement d’émettre si elle est dans une poubelle", 'is_correct' => false],
                            ['choice_text' => "Parce qu’elle devient un produit alimentaire", 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => "Révision générale de chimie nucléaire",
                'description' => "Réviser les notions essentielles de radioactivité, transformations nucléaires, mesures et applications.",
                'questions' => [
                    [
                        'question' => "Quel élément du symbole ^A_ZX permet d’identifier l’élément chimique ?",
                        'explanation' => "Le numéro atomique Z correspond au nombre de protons et détermine l’identité de l’élément.",
                        'choices' => [
                            ['choice_text' => "A", 'is_correct' => false],
                            ['choice_text' => "Z", 'is_correct' => true],
                            ['choice_text' => "X uniquement sans tenir compte de Z", 'is_correct' => false],
                            ['choice_text' => "La température", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Après une désintégration alpha, que deviennent A et Z ?",
                        'explanation' => "Une particule alpha emporte 4 nucléons et 2 protons. Donc A diminue de 4 et Z de 2.",
                        'choices' => [
                            ['choice_text' => "A − 4 et Z − 2", 'is_correct' => true],
                            ['choice_text' => "A reste constant et Z + 1", 'is_correct' => false],
                            ['choice_text' => "A + 4 et Z + 2", 'is_correct' => false],
                            ['choice_text' => "A − 2 et Z − 4", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Après une désintégration bêta moins, que deviennent A et Z ?",
                        'explanation' => "En bêta moins, un neutron devient un proton. Le nombre de nucléons reste le même, donc A est constant et Z augmente de 1.",
                        'choices' => [
                            ['choice_text' => "A − 4 et Z − 2", 'is_correct' => false],
                            ['choice_text' => "A constant et Z + 1", 'is_correct' => true],
                            ['choice_text' => "A + 1 et Z constant", 'is_correct' => false],
                            ['choice_text' => "A constant et Z − 1", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quel rayonnement est le plus pénétrant parmi les trois classiques alpha, bêta et gamma ?",
                        'explanation' => "Dans cette comparaison simple, le gamma possède le plus grand pouvoir de pénétration.",
                        'choices' => [
                            ['choice_text' => "Alpha", 'is_correct' => false],
                            ['choice_text' => "Bêta", 'is_correct' => false],
                            ['choice_text' => "Gamma", 'is_correct' => true],
                            ['choice_text' => "Aucune différence", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Un isotope a une demi-vie de 4 heures. Quelle fraction reste après 12 heures ?",
                        'explanation' => "12 heures correspondent à 3 demi-vies : (1/2)^3 = 1/8. Il reste donc 1/8 de la quantité initiale.",
                        'choices' => [
                            ['choice_text' => "1/2", 'is_correct' => false],
                            ['choice_text' => "1/4", 'is_correct' => false],
                            ['choice_text' => "1/8", 'is_correct' => true],
                            ['choice_text' => "1/12", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Pourquoi un catalyseur chimique classique n’est-il pas la bonne notion pour expliquer la demi-vie radioactive ?",
                        'explanation' => "La désintégration radioactive est une transformation nucléaire gouvernée par les propriétés du noyau. La demi-vie n’est pas une vitesse de réaction chimique ordinaire.",
                        'choices' => [
                            ['choice_text' => "Parce que la demi-vie caractérise une désintégration nucléaire", 'is_correct' => true],
                            ['choice_text' => "Parce que les noyaux sont des molécules", 'is_correct' => false],
                            ['choice_text' => "Parce qu’un catalyseur double toujours la masse", 'is_correct' => false],
                            ['choice_text' => "Parce que les électrons n’existent pas dans les atomes", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quelle relation est associée à l’équivalence masse-énergie ?",
                        'explanation' => "La relation célèbre d’Einstein est E = mc². Elle relie la masse m à l’énergie E par la constante c, vitesse de la lumière dans le vide.",
                        'choices' => [
                            ['choice_text' => "E = mc²", 'is_correct' => true],
                            ['choice_text' => "E = m/c²", 'is_correct' => false],
                            ['choice_text' => "E = c/m", 'is_correct' => false],
                            ['choice_text' => "E = m + c", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quel appareil est utilisé pour compter les événements radioactifs ?",
                        'explanation' => "Un compteur Geiger-Müller est un détecteur couramment utilisé pour compter les rayonnements ionisants.",
                        'choices' => [
                            ['choice_text' => "Compteur Geiger-Müller", 'is_correct' => true],
                            ['choice_text' => "pH-mètre", 'is_correct' => false],
                            ['choice_text' => "Viscosimètre", 'is_correct' => false],
                            ['choice_text' => "Réfractomètre", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Pourquoi la distance est-elle importante en radioprotection ?",
                        'explanation' => "Plus on s’éloigne d’une source ponctuelle, plus l’intensité reçue diminue. Dans le modèle idéal, elle varie comme 1/r².",
                        'choices' => [
                            ['choice_text' => "Parce que l’exposition diminue avec la distance", 'is_correct' => true],
                            ['choice_text' => "Parce que la source change d’élément", 'is_correct' => false],
                            ['choice_text' => "Parce que la demi-vie augmente", 'is_correct' => false],
                            ['choice_text' => "Parce que les neutrons deviennent des électrons", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Laquelle de ces affirmations résume correctement une idée fondamentale de la chimie nucléaire ?",
                        'explanation' => "La chimie nucléaire s’intéresse aux transformations du noyau, à la radioactivité, aux rayonnements et à leurs applications et mesures.",
                        'choices' => [
                            ['choice_text' => "Elle étudie principalement les transformations du noyau", 'is_correct' => true],
                            ['choice_text' => "Elle étudie uniquement les changements d’état de l’eau", 'is_correct' => false],
                            ['choice_text' => "Elle ignore complètement les rayonnements", 'is_correct' => false],
                            ['choice_text' => "Elle concerne seulement les polymères", 'is_correct' => false],
                        ],
                    ],
                ],
            ],
        ];

        foreach ($quizzes as $index => $quizData) {
            $settings = $quizSettings[$index] ?? ['duration' => 20, 'passing_score' => 60];

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
