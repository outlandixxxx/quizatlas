<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class WavesOpticsAdvancedSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'waves-optics')->firstOrFail();

        $quizzes = [

            // ============================================================
            // QUIZ 1 — Ondes et propagation avancées
            // ============================================================

            [
                'title' => 'Propagation ondulatoire avancée',
                'description' => 'Analyse des équations d’onde, phases, vitesses de phase et propriétés de propagation.',
                'questions' => [

                    [
                        'question' => 'Une onde est décrite par y(x,t) = A cos(4x - 20t). Quelle est sa vitesse de phase ?',
                        'choices' => [
                            ['choice_text' => '5 m/s', 'is_correct' => true],
                            ['choice_text' => '80 m/s', 'is_correct' => false],
                            ['choice_text' => '20 m/s', 'is_correct' => false],
                            ['choice_text' => '4 m/s', 'is_correct' => false],
                        ],
                        'explanation' => 'Pour une onde progressive, vφ = ω/k = 20/4 = 5 m/s.',
                    ],

                    [
                        'question' => 'Pour y(x,t) = A cos(kx - ωt), quelle condition caractérise un point de phase constante ?',
                        'choices' => [
                            ['choice_text' => 'kx - ωt = constante', 'is_correct' => true],
                            ['choice_text' => 'kx + ωt = constante uniquement', 'is_correct' => false],
                            ['choice_text' => 'k + ωt = constante', 'is_correct' => false],
                            ['choice_text' => 'x/t = constante indépendamment de k et ω', 'is_correct' => false],
                        ],
                        'explanation' => 'Une phase constante satisfait kx - ωt = C, d’où x/t = ω/k pour un point donné de la phase.',
                    ],

                    [
                        'question' => 'Quelle relation relie la longueur d’onde à la vitesse de phase et à la fréquence ?',
                        'choices' => [
                            ['choice_text' => 'λ = vφ/f', 'is_correct' => true],
                            ['choice_text' => 'λ = vf', 'is_correct' => false],
                            ['choice_text' => 'λ = f/vφ', 'is_correct' => false],
                            ['choice_text' => 'λ = vφ²/f', 'is_correct' => false],
                        ],
                        'explanation' => 'La relation fondamentale est vφ = λf.',
                    ],

                    [
                        'question' => 'Dans un milieu non dispersif, la vitesse de phase dépend de la fréquence ?',
                        'choices' => [
                            ['choice_text' => 'Non, elle reste indépendante de la fréquence dans le modèle considéré', 'is_correct' => true],
                            ['choice_text' => 'Oui, toujours linéairement', 'is_correct' => false],
                            ['choice_text' => 'Oui, toujours comme f²', 'is_correct' => false],
                            ['choice_text' => 'Elle est nécessairement nulle', 'is_correct' => false],
                        ],
                        'explanation' => 'Un milieu non dispersif possède une relation de dispersion telle que la vitesse de phase ne dépend pas de la fréquence.',
                    ],

                    [
                        'question' => 'Qu’est-ce qu’un milieu dispersif pour une onde ?',
                        'choices' => [
                            ['choice_text' => 'Un milieu dans lequel la vitesse de phase dépend de la fréquence', 'is_correct' => true],
                            ['choice_text' => 'Un milieu dans lequel aucune onde ne peut se propager', 'is_correct' => false],
                            ['choice_text' => 'Un milieu où la fréquence est toujours nulle', 'is_correct' => false],
                            ['choice_text' => 'Un milieu dans lequel toutes les fréquences ont exactement la même vitesse', 'is_correct' => false],
                        ],
                        'explanation' => 'La dispersion signifie que la relation entre fréquence et nombre d’onde n’est pas strictement linéaire.',
                    ],

                    [
                        'question' => 'Pourquoi une impulsion composée de plusieurs fréquences peut-elle se déformer dans un milieu dispersif ?',
                        'choices' => [
                            ['choice_text' => 'Ses différentes composantes fréquentielles se propagent à des vitesses différentes', 'is_correct' => true],
                            ['choice_text' => 'Toutes les composantes ont nécessairement la même vitesse', 'is_correct' => false],
                            ['choice_text' => 'La fréquence change aléatoirement pendant la propagation', 'is_correct' => false],
                            ['choice_text' => 'L’amplitude devient toujours nulle', 'is_correct' => false],
                        ],
                        'explanation' => 'La dispersion sépare progressivement les composantes spectrales et modifie la forme temporelle de l’impulsion.',
                    ],

                    [
                        'question' => 'Quelle quantité est particulièrement importante pour caractériser la vitesse de propagation d’une enveloppe dans un milieu dispersif ?',
                        'choices' => [
                            ['choice_text' => 'La vitesse de groupe', 'is_correct' => true],
                            ['choice_text' => 'La masse volumique seule', 'is_correct' => false],
                            ['choice_text' => 'La vitesse moyenne de la source', 'is_correct' => false],
                            ['choice_text' => 'La période seule', 'is_correct' => false],
                        ],
                        'explanation' => 'La vitesse de groupe décrit la propagation de l’enveloppe d’un paquet d’ondes dans le régime linéaire approprié.',
                    ],

                    [
                        'question' => 'Quelle expression définit la vitesse de groupe dans une relation de dispersion ω(k) ?',
                        'choices' => [
                            ['choice_text' => 'vg = dω/dk', 'is_correct' => true],
                            ['choice_text' => 'vg = ωk', 'is_correct' => false],
                            ['choice_text' => 'vg = k/ω', 'is_correct' => false],
                            ['choice_text' => 'vg = d k/dω', 'is_correct' => false],
                        ],
                        'explanation' => 'Par définition, la vitesse de groupe est la dérivée de ω par rapport à k.',
                    ],

                    [
                        'question' => 'Dans un milieu non dispersif où ω = vk, la vitesse de groupe est...',
                        'choices' => [
                            ['choice_text' => 'Égale à la vitesse de phase v', 'is_correct' => true],
                            ['choice_text' => 'Toujours nulle', 'is_correct' => false],
                            ['choice_text' => 'Deux fois plus grande que v', 'is_correct' => false],
                            ['choice_text' => 'Indépendante de la relation ω(k)', 'is_correct' => false],
                        ],
                        'explanation' => 'Si ω = vk avec v constant, alors dω/dk = v = vφ.',
                    ],

                    [
                        'question' => 'Pourquoi une onde progressive sinusoïdale idéale ne représente-t-elle pas un signal localisé dans l’espace ?',
                        'choices' => [
                            ['choice_text' => 'Elle s’étend théoriquement sur tout l’espace et possède une seule fréquence', 'is_correct' => true],
                            ['choice_text' => 'Elle possède toujours une amplitude nulle', 'is_correct' => false],
                            ['choice_text' => 'Elle ne possède aucune longueur d’onde', 'is_correct' => false],
                            ['choice_text' => 'Elle est nécessairement stationnaire', 'is_correct' => false],
                        ],
                        'explanation' => 'Une onde monochromatique idéale est parfaitement périodique et non localisée spatialement.',
                    ],
                ],
            ],

            // ============================================================
            // QUIZ 2 — Interférences avancées
            // ============================================================

            [
                'title' => 'Interférences et interférométrie',
                'description' => 'Étude avancée des franges, différences de marche, cohérence et applications interférométriques.',
                'questions' => [

                    [
                        'question' => 'Deux ondes cohérentes de même amplitude A présentent une différence de phase φ. Quelle est l’amplitude résultante en valeur absolue ?',
                        'choices' => [
                            ['choice_text' => '2A|cos(φ/2)|', 'is_correct' => true],
                            ['choice_text' => 'A cosφ', 'is_correct' => false],
                            ['choice_text' => 'A|sinφ|', 'is_correct' => false],
                            ['choice_text' => '2A cosφ uniquement', 'is_correct' => false],
                        ],
                        'explanation' => 'La superposition de deux ondes identiques donne une amplitude résultante 2A|cos(φ/2)|.',
                    ],

                    [
                        'question' => 'Pour deux ondes cohérentes de même intensité I0, quelle intensité correspond à une opposition de phase parfaite ?',
                        'choices' => [
                            ['choice_text' => '0', 'is_correct' => true],
                            ['choice_text' => 'I0', 'is_correct' => false],
                            ['choice_text' => '2I0', 'is_correct' => false],
                            ['choice_text' => '4I0', 'is_correct' => false],
                        ],
                        'explanation' => 'L’opposition de phase donne une amplitude résultante nulle pour deux amplitudes identiques.',
                    ],

                    [
                        'question' => 'Dans l’expérience de Young, si D est l’écart entre les fentes et l’écran et a la séparation des fentes, l’interfrange vaut approximativement...',
                        'choices' => [
                            ['choice_text' => 'i = λD/a', 'is_correct' => true],
                            ['choice_text' => 'i = aD/λ', 'is_correct' => false],
                            ['choice_text' => 'i = λaD', 'is_correct' => false],
                            ['choice_text' => 'i = λ/(aD)', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans l’approximation des petits angles, i = λD/a.',
                    ],

                    [
                        'question' => 'Dans l’expérience de Young, pourquoi l’interfrange est-il proportionnel à la longueur d’onde ?',
                        'choices' => [
                            ['choice_text' => 'La différence de marche nécessaire pour passer d’une frange à la suivante est liée à λ', 'is_correct' => true],
                            ['choice_text' => 'La fréquence augmente toujours avec D', 'is_correct' => false],
                            ['choice_text' => 'La luminosité dépend directement de λ seulement', 'is_correct' => false],
                            ['choice_text' => 'Les fentes modifient la masse des photons', 'is_correct' => false],
                        ],
                        'explanation' => 'Les franges successives correspondent à des différences de marche séparées de λ.',
                    ],

                    [
                        'question' => 'Si l’on remplace la lumière de longueur d’onde λ par une lumière de longueur d’onde λ/2 dans Young, l’interfrange devient...',
                        'choices' => [
                            ['choice_text' => 'Deux fois plus petit', 'is_correct' => true],
                            ['choice_text' => 'Deux fois plus grand', 'is_correct' => false],
                            ['choice_text' => 'Quatre fois plus grand', 'is_correct' => false],
                            ['choice_text' => 'Inchangé', 'is_correct' => false],
                        ],
                        'explanation' => 'Comme i ∝ λ, diviser λ par deux divise l’interfrange par deux.',
                    ],

                    [
                        'question' => 'Pourquoi l’interférométrie permet-elle de détecter des déplacements bien plus petits que la longueur d’onde ?',
                        'choices' => [
                            ['choice_text' => 'La phase peut être mesurée avec une précision bien inférieure à un cycle complet', 'is_correct' => true],
                            ['choice_text' => 'La longueur d’onde devient nulle', 'is_correct' => false],
                            ['choice_text' => 'Les photons changent de masse', 'is_correct' => false],
                            ['choice_text' => 'Le détecteur crée une nouvelle longueur d’onde', 'is_correct' => false],
                        ],
                        'explanation' => 'Une variation sub-longueur d’onde de différence de marche produit une variation mesurable de phase.',
                    ],

                    [
                        'question' => 'Dans un interféromètre de Michelson idéal, un déplacement du miroir de Δx modifie la différence de marche de...',
                        'choices' => [
                            ['choice_text' => '2Δx', 'is_correct' => true],
                            ['choice_text' => 'Δx/2', 'is_correct' => false],
                            ['choice_text' => 'Δx', 'is_correct' => false],
                            ['choice_text' => '4Δx', 'is_correct' => false],
                        ],
                        'explanation' => 'Le faisceau parcourt le trajet aller-retour, donc le déplacement du miroir intervient deux fois.',
                    ],

                    [
                        'question' => 'Pourquoi la cohérence temporelle limite-t-elle la visibilité des interférences lorsqu’on augmente la différence de marche ?',
                        'choices' => [
                            ['choice_text' => Les composantes spectrales perdent progressivement une phase relative stable', 'is_correct' => true],
                            ['choice_text' => La fréquence devient nulle', 'is_correct' => false],
                            ['choice_text' => L’amplitude devient nécessairement infinie', 'is_correct' => false],
                            ['choice_text' => La lumière cesse de se propager dans le vide', 'is_correct' => false],
                        ],
                        'explanation' => 'Une largeur spectrale finie entraîne une longueur de cohérence finie.',
                    ],

                    [
                        'question' => 'Une source lumineuse plus monochromatique possède généralement une longueur de cohérence...',
                        'choices' => [
                            ['choice_text' => 'Plus grande', 'is_correct' => true],
                            ['choice_text' => 'Plus petite', 'is_correct' => false],
                            ['choice_text' => 'Toujours nulle', 'is_correct' => false],
                            ['choice_text' => 'Indépendante de sa largeur spectrale', 'is_correct' => false],
                        ],
                        'explanation' => 'Une bande spectrale plus étroite correspond généralement à une plus grande longueur de cohérence.',
                    ],

                    [
                        'question' => 'Pourquoi une frange sombre ne signifie-t-elle pas nécessairement absence de lumière sur l’ensemble du champ ?',
                        'choices' => [
                            ['choice_text' => Elle résulte d’une interférence destructive locale entre plusieurs contributions', 'is_correct' => true],
                            ['choice_text' => 'La source lumineuse s’éteint complètement', 'is_correct' => false],
                            ['choice_text' => 'La fréquence devient nulle partout', 'is_correct' => false],
                            ['choice_text' => 'La lumière ne peut plus se propager après la frange', 'is_correct' => false],
                        ],
                        'explanation' => 'L’annulation est spatiale et dépend de la différence de phase locale.',
                    ],
                ],
            ],

            // ============================================================
            // QUIZ 3 — Diffraction et résolution avancées
            // ============================================================

            [
                'title' => 'Diffraction et limites de résolution',
                'description' => 'Analyse avancée des figures de diffraction, ouvertures et limites de résolution.',
                'questions' => [

                    [
                        'question' => 'Pour une fente unique de largeur a, le premier minimum satisfait approximativement...',
                        'choices' => [
                            ['choice_text' => 'a sinθ = λ', 'is_correct' => true],
                            ['choice_text' => 'a cosθ = λ', 'is_correct' => false],
                            ['choice_text' => '2a sinθ = λ', 'is_correct' => false],
                            ['choice_text' => 'a tanθ = 2λ', 'is_correct' => false],
                        ],
                        'explanation' => 'Le premier minimum de diffraction par une fente vérifie a sinθ = λ.',
                    ],

                    [
                        'question' => 'Pour une petite ouverture angulaire, si λ/a est doublé, l’angle caractéristique de diffraction...',
                        'choices' => [
                            ['choice_text' => 'Double approximativement', 'is_correct' => true],
                            ['choice_text' => 'Est divisé par deux', 'is_correct' => false],
                            ['choice_text' => 'Reste inchangé', 'is_correct' => false],
                            ['choice_text' => 'Est multiplié par quatre', 'is_correct' => false],
                        ],
                        'explanation' => 'Pour petits angles, θ ≈ λ/a. Le rapport λ/a contrôle donc directement l’étalement angulaire.',
                    ],

                    [
                        'question' => 'Pour une ouverture circulaire de diamètre D, la première tache sombre de diffraction est liée à un angle de l’ordre de...',
                        'choices' => [
                            ['choice_text' => '1,22 λ/D', 'is_correct' => true],
                            ['choice_text' => 'λD', 'is_correct' => false],
                            ['choice_text' => 'D/λ', 'is_correct' => false],
                            ['choice_text' => '0,5 λ/D²', 'is_correct' => false],
                        ],
                        'explanation' => 'La figure d’Airy donne un premier minimum approximativement à sinθ ≈ 1,22 λ/D.',
                    ],

                    [
                        'question' => 'Pourquoi augmenter le diamètre d’un télescope améliore-t-il sa résolution angulaire ?',
                        'choices' => [
                            ['choice_text' => 'La limite de diffraction diminue approximativement comme 1/D', 'is_correct' => true],
                            ['choice_text' => 'La longueur d’onde devient plus courte', 'is_correct' => false],
                            ['choice_text' => 'La fréquence des étoiles augmente', 'is_correct' => false],
                            ['choice_text' => 'La diffraction disparaît complètement', 'is_correct' => false],
                        ],
                        'explanation' => 'Une ouverture plus grande réduit l’angle minimal nécessaire pour distinguer deux sources.',
                    ],

                    [
                        'question' => 'Pourquoi deux sources ponctuelles très proches peuvent-elles apparaître comme une seule tache dans un système optique parfait ?',
                        'choices' => [
                            ['choice_text' => Leurs figures de diffraction peuvent se recouvrir sans être résolues', 'is_correct' => true],
                            ['choice_text' => 'La lumière de la seconde source disparaît', 'is_correct' => false],
                            ['choice_text' => 'La lentille absorbe les détails fins', 'is_correct' => false],
                            ['choice_text' => 'La fréquence des deux sources devient identique', 'is_correct' => false],
                        ],
                        'explanation' => 'La diffraction impose une extension finie de la réponse à une source ponctuelle.',
                    ],

                    [
                        'question' => 'Pourquoi la résolution linéaire d’un microscope dépend-elle notamment de la longueur d’onde ?',
                        'choices' => [
                            ['choice_text' => 'La diffraction impose une échelle spatiale minimale proportionnelle à λ dans le milieu', 'is_correct' => true],
                            ['choice_text' => 'La longueur d’onde détermine directement la masse de l’objet', 'is_correct' => false],
                            ['choice_text' => 'Les microscopes sont indépendants de toute propriété ondulatoire', 'is_correct' => false],
                            ['choice_text' => 'La fréquence est toujours nulle dans un microscope', 'is_correct' => false],
                        ],
                        'explanation' => 'Les limites de résolution optique sont fondamentalement liées à la longueur d’onde.',
                    ],

                    [
                        'question' => 'Pourquoi utiliser une longueur d’onde plus courte peut-il améliorer la résolution d’un microscope optique ?',
                        'choices' => [
                            ['choice_text' => Elle réduit l’échelle caractéristique des figures de diffraction', 'is_correct' => true],
                            ['choice_text' => Elle augmente toujours les aberrations', 'is_correct' => false],
                            ['choice_text' => Elle supprime totalement la réfraction', 'is_correct' => false],
                            ['choice_text' => Elle rend l’ouverture numérique nulle', 'is_correct' => false],
                        ],
                        'explanation' => 'À ouverture numérique donnée, une longueur d’onde plus courte permet une meilleure résolution théorique.',
                    ],

                    [
                        'question' => 'Quel phénomène impose une limite fondamentale même à un instrument optique sans aberrations géométriques ?',
                        'choices' => [
                            ['choice_text' => 'La diffraction', 'is_correct' => true],
                            ['choice_text' => 'La masse de la lentille', 'is_correct' => false],
                            ['choice_text' => 'La température ambiante uniquement', 'is_correct' => false],
                            ['choice_text' => 'La gravité terrestre', 'is_correct' => false],
                        ],
                        'explanation' => 'La diffraction est une conséquence fondamentale de la nature ondulatoire de la lumière.',
                    ],

                    [
                        'question' => 'Pourquoi les ouvertures très petites ne donnent-elles pas nécessairement la meilleure résolution ?',
                        'choices' => [
                            ['choice_text' => 'Une petite ouverture augmente l’étalement par diffraction', 'is_correct' => true],
                            ['choice_text' => 'Une petite ouverture augmente toujours le diamètre optique effectif', 'is_correct' => false],
                            ['choice_text' => 'La fréquence lumineuse devient nulle', 'is_correct' => false],
                            ['choice_text' => 'La diffraction diminue avec une ouverture plus petite', 'is_correct' => false],
                        ],
                        'explanation' => 'La diffraction augmente lorsque la taille de l’ouverture devient comparable à la longueur d’onde.',
                    ],

                    [
                        'question' => 'Pourquoi la diffraction peut-elle améliorer la compréhension des structures microscopiques même lorsqu’elles ne sont pas directement résolues ?',
                        'choices' => [
                            ['choice_text' => 'Le motif de diffraction contient de l’information sur la structure qui a produit l’onde', 'is_correct' => true],
                            ['choice_text' => 'La diffraction détruit nécessairement toute information spatiale', 'is_correct' => false],
                            ['choice_text' => 'Les détails microscopiques n’influencent jamais le champ diffracté', 'is_correct' => false],
                            ['choice_text' => 'Le motif est indépendant de la géométrie de l’objet', 'is_correct' => false],
                        ],
                        'explanation' => 'La diffraction encode les dimensions et la géométrie de l’objet dans l’espace des angles ou des fréquences spatiales.',
                    ],
                ],
            ],

            // ============================================================
            // QUIZ 4 — Réfraction, dispersion et fibres
            // ============================================================

            [
                'title' => 'Réfraction, dispersion et guidage optique',
                'description' => 'Étude avancée des interfaces, de la réflexion totale et du guidage de la lumière.',
                'questions' => [

                    [
                        'question' => 'Un rayon passe d’un milieu d’indice n1 = 1,5 vers n2 = 1,0. Pour quel angle d’incidence l’angle critique est-il atteint ?',
                        'choices' => [
                            ['choice_text' => θc ≈ 41,8°', 'is_correct' => true],
                            ['choice_text' => 'θc ≈ 30°', 'is_correct' => false],
                            ['choice_text' => 'θc ≈ 60°', 'is_correct' => false],
                            ['choice_text' => 'θc ≈ 48,2°', 'is_correct' => false],
                        ],
                        'explanation' => 'sinθc = n2/n1 = 1/1,5 = 2/3, donc θc ≈ 41,8°.',
                    ],

                    [
                        'question' => 'Pourquoi la réflexion totale interne ne peut-elle pas se produire lors d’un passage d’un milieu moins réfringent vers un milieu plus réfringent ?',
                        'choices' => [
                            ['choice_text' => La loi de Snell-Descartes permet alors toujours un rayon réfracté pour les angles d’incidence physiques', 'is_correct' => true],
                            ['choice_text' => 'Le rayon incident disparaît toujours', 'is_correct' => false],
                            ['choice_text' => 'Les deux indices sont forcément égaux', 'is_correct' => false],
                            ['choice_text' => 'La lumière devient mécanique', 'is_correct' => false],
                        ],
                        'explanation' => 'La condition de réflexion totale exige n1 > n2 ; sinon l’équation de Snell admet un angle réfracté réel.',
                    ],

                    [
                        'question' => 'Dans une fibre à saut d’indice, quelle condition générale doit être satisfaite pour le guidage par réflexion totale ?',
                        'choices' => [
                            ['choice_text' => 'L’indice du cœur doit être supérieur à celui de la gaine', 'is_correct' => true],
                            ['choice_text' => 'L’indice du cœur doit être inférieur à celui de la gaine', 'is_correct' => false],
                            ['choice_text' => 'Les deux indices doivent être identiques', 'is_correct' => false],
                            ['choice_text' => 'La gaine doit avoir un indice nul', 'is_correct' => false],
                        ],
                        'explanation' => 'Le cœur doit avoir un indice supérieur à celui de la gaine afin de permettre la réflexion totale interne.',
                    ],

                    [
                        'question' => 'Pourquoi l’ouverture numérique d’une fibre est-elle importante ?',
                        'choices' => [
                            ['choice_text' => 'Elle caractérise la plage d’angles d’acceptation de la lumière dans la fibre', 'is_correct' => true],
                            ['choice_text' => 'Elle mesure directement la puissance du laser', 'is_correct' => false],
                            ['choice_text' => 'Elle détermine uniquement la fréquence de la source', 'is_correct' => false],
                            ['choice_text' => 'Elle est indépendante des indices du cœur et de la gaine', 'is_correct' => false],
                        ],
                        'explanation' => 'L’ouverture numérique caractérise la capacité de la fibre à accepter des rayons sous certaines conditions angulaires.',
                    ],

                    [
                        'question' => 'Pourquoi la dispersion modale limite-t-elle le débit d’une fibre multimode ?',
                        'choices' => [
                            ['choice_text' => Différents modes peuvent parcourir des trajets optiques différents et arriver à des temps différents', 'is_correct' => true],
                            ['choice_text' => 'Tous les modes arrivent toujours exactement ensemble', 'is_correct' => false],
                            ['choice_text' => 'La fréquence de la source change pour chaque mode', 'is_correct' => false],
                            ['choice_text' => 'La fibre cesse de guider les longueurs d’onde courtes', 'is_correct' => false],
                        ],
                        'explanation' => 'Les différents modes ont des temps de propagation différents, ce qui élargit les impulsions.',
                    ],

                    [
                        'question' => 'Pourquoi une fibre monomode réduit-elle fortement la dispersion modale ?',
                        'choices' => [
                            ['choice_text' => 'Elle ne laisse essentiellement se propager qu’un mode spatial guidé', 'is_correct' => true],
                            ['choice_text' => 'Elle possède toujours un indice uniforme sans cœur', 'is_correct' => false],
                            ['choice_text' => 'Elle élimine toute dispersion chromatique', 'is_correct' => false],
                            ['choice_text' => 'Elle transforme la lumière en onde sonore', 'is_correct' => false],
                        ],
                        'explanation' => 'Avec un seul mode spatial dominant, la contribution de dispersion entre modes est fortement réduite.',
                    ],

                    [
                        'question' => 'Pourquoi la dispersion chromatique reste-t-elle présente même dans une fibre monomode ?',
                        'choices' => [
                            ['choice_text' => 'La vitesse de propagation dépend encore de la longueur d’onde', 'is_correct' => true],
                            ['choice_text' => 'Plusieurs modes spatiaux restent toujours présents', 'is_correct' => false],
                            ['choice_text' => 'La fréquence change continuellement dans la fibre', 'is_correct' => false],
                            ['choice_text' => 'La lumière devient incohérente par définition', 'is_correct' => false],
                        ],
                        'explanation' => 'Une fibre monomode peut conserver une dispersion chromatique provenant du matériau et du guidage.',
                    ],

                    [
                        'question' => 'Dans une approximation de dispersion normale, quelle tendance est souvent observée pour l’indice de réfraction ?',
                        'choices' => [
                            ['choice_text' => L’indice augmente lorsque la longueur d’onde diminue dans une plage normale', 'is_correct' => true],
                            ['choice_text' => 'L’indice devient toujours nul à courte longueur d’onde', 'is_correct' => false],
                            ['choice_text' => 'L’indice est strictement constant pour tous les matériaux', 'is_correct' => false],
                            ['choice_text' => 'L’indice augmente toujours avec la longueur d’onde', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans une région de dispersion normale, n diminue généralement lorsque λ augmente.',
                    ],

                    [
                        'question' => 'Pourquoi les applications optiques doivent-elles prendre en compte la dispersion du matériau ?',
                        'choices' => [
                            ['choice_text' => 'Elle peut modifier la phase, le temps de propagation et la forme spectrale du signal', 'is_correct' => true],
                            ['choice_text' => 'Elle ne modifie que la masse du matériau', 'is_correct' => false],
                            ['choice_text' => 'Elle supprime toute réflexion', 'is_correct' => false],
                            ['choice_text' => 'Elle rend la vitesse de la lumière identique dans tous les matériaux', 'is_correct' => false],
                        ],
                        'explanation' => 'La dispersion influence les temps de groupe, les phases et les performances des systèmes optiques.',
                    ],

                    [
                        'question' => 'Pourquoi la réflexion totale interne constitue-t-elle un mécanisme particulièrement efficace de guidage ?',
                        'choices' => [
                            ['choice_text' => Elle confine la lumière à l’intérieur du cœur sans nécessiter un revêtement métallique', 'is_correct' => true],
                            ['choice_text' => 'Elle absorbe toute la lumière incidente', 'is_correct' => false],
                            ['choice_text' => 'Elle nécessite une surface parfaitement opaque', 'is_correct' => false],
                            ['choice_text' => 'Elle transforme la lumière en chaleur à chaque réflexion', 'is_correct' => false],
                        ],
                        'explanation' => 'Le contraste d’indice permet un guidage diélectrique efficace avec des pertes bien plus faibles qu’un guidage métallique approprié.',
                    ],
                ],
            ],

            // ============================================================
            // QUIZ 5 — Polarisation avancée
            // ============================================================

            [
                'title' => 'Polarisation et optique des matériaux',
                'description' => 'Analyse de la polarisation, des polariseurs, biréfringence et effets électromagnétiques.',
                'questions' => [

                    [
                        'question' => 'Une lumière linéairement polarisée traverse un analyseur tourné de 60° par rapport à la polarisation incidente. Quel fraction de l’intensité est transmise ?',
                        'choices' => [
                            ['choice_text' => '1/4', 'is_correct' => true],
                            ['choice_text' => '1/2', 'is_correct' => false],
                            ['choice_text' => '3/4', 'is_correct' => false],
                            ['choice_text' => '1', 'is_correct' => false],
                        ],
                        'explanation' => 'Par la loi de Malus, I/I0 = cos²60° = 1/4.',
                    ],

                    [
                        'question' => 'Pourquoi une lumière naturelle passant à travers un premier polariseur idéal devient-elle polarisée ?',
                        'choices' => [
                            ['choice_text' => Le polariseur sélectionne une composante de l’oscillation du champ électrique', 'is_correct' => true],
                            ['choice_text' => 'Il modifie nécessairement la fréquence', 'is_correct' => false],
                            ['choice_text' => 'Il élimine toute énergie lumineuse', 'is_correct' => false],
                            ['choice_text' => 'Il transforme l’onde en onde mécanique', 'is_correct' => false],
                        ],
                        'explanation' => 'Le polariseur transmet la composante du champ électrique parallèle à son axe de transmission.',
                    ],

                    [
                        'question' => 'Quel phénomène permet à certains cristaux de présenter deux indices de réfraction différents selon la polarisation ?',
                        'choices' => [
                            ['choice_text' => 'La biréfringence', 'is_correct' => true],
                            ['choice_text' => 'La réflexion totale', 'is_correct' => false],
                            ['choice_text' => 'La diffraction de Fresnel uniquement', 'is_correct' => false],
                            ['choice_text' => 'La conduction thermique', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans les matériaux biréfringents, différentes composantes de polarisation peuvent subir des indices différents.',
                    ],

                    [
                        'question' => 'Pourquoi une lame quart d’onde peut-elle transformer une polarisation linéaire en polarisation circulaire ?',
                        'choices' => [
                            ['choice_text' => Elle introduit un déphasage de π/2 entre deux composantes orthogonales appropriées', 'is_correct' => true],
                            ['choice_text' => 'Elle double la fréquence', 'is_correct' => false],
                            ['choice_text' => 'Elle absorbe une composante complètement', 'is_correct' => false],
                            ['choice_text' => 'Elle change nécessairement la longueur d’onde dans le vide', 'is_correct' => false],
                        ],
                        'explanation' => 'Deux composantes orthogonales de même amplitude avec un déphasage de π/2 produisent une polarisation circulaire.',
                    ],

                    [
                        'question' => 'Pourquoi une polarisation elliptique apparaît-elle plus généralement lorsque deux composantes orthogonales ont amplitudes et phases arbitraires ?',
                        'choices' => [
                            ['choice_text' => Leur superposition décrit en général une ellipse dans le plan transverse', 'is_correct' => true],
                            ['choice_text' => 'Une ellipse ne peut apparaître qu’en polarisation linéaire', 'is_correct' => false],
                            ['choice_text' => 'La polarisation dépend uniquement de la fréquence', 'is_correct' => false],
                            ['choice_text' => 'Les deux composantes doivent être identiques pour toute ellipse', 'is_correct' => false],
                        ],
                        'explanation' => 'La polarisation elliptique est le cas général de deux composantes orthogonales cohérentes.',
                    ],

                    [
                        'question' => 'Pourquoi certains matériaux peuvent-ils modifier la polarisation d’une lumière transmise sans absorber fortement la lumière ?',
                        'choices' => [
                            ['choice_text' => Ils introduisent un déphasage différent entre certaines composantes du champ', 'is_correct' => true],
                            ['choice_text' => 'Ils doivent toujours absorber au moins 90 % de l’intensité', 'is_correct' => false],
                            ['choice_text' => 'Ils changent nécessairement la fréquence à chaque cycle', 'is_correct' => false],
                            ['choice_text' => 'Ils suppriment le champ magnétique', 'is_correct' => false],
                        ],
                        'explanation' => 'La biréfringence peut modifier les phases relatives sans nécessiter une forte absorption.',
                    ],

                    [
                        'question' => 'Quelle grandeur caractérise la différence de phase accumulée entre deux composantes après traversée d’une lame biréfringente ?',
                        'choices' => [
                            ['choice_text' => 'Le retard de phase', 'is_correct' => true],
                            ['choice_text' => 'La masse optique', 'is_correct' => false],
                            ['choice_text' => 'La fréquence absolue', 'is_correct' => false],
                            ['choice_text' => 'La vitesse de groupe uniquement', 'is_correct' => false],
                        ],
                        'explanation' => 'Le retard de phase quantifie la différence de phase introduite entre les composantes.',
                    ],

                    [
                        'question' => 'Pourquoi deux polariseurs croisés peuvent-ils transmettre de la lumière lorsqu’une lame biréfringente est placée entre eux ?',
                        'choices' => [
                            ['choice_text' => 'La lame modifie la polarisation entre les deux axes et crée une composante transmissible par le second polariseur', 'is_correct' => true],
                            ['choice_text' => 'La lame détruit le second polariseur', 'is_correct' => false],
                            ['choice_text' => 'Les axes deviennent automatiquement parallèles', 'is_correct' => false],
                            ['choice_text' => 'La fréquence devient double', 'is_correct' => false],
                        ],
                        'explanation' => 'Le déphasage introduit par la lame change l’état de polarisation et peut produire une composante compatible avec l’analyseur.',
                    ],

                    [
                        'question' => 'Pourquoi la polarisation est-elle une propriété vectorielle et non simplement scalaire ?',
                        'choices' => [
                            ['choice_text' => 'Elle dépend de l’orientation du champ électrique transverse', 'is_correct' => true],
                            ['choice_text' => 'Elle dépend uniquement de la puissance lumineuse', 'is_correct' => false],
                            ['choice_text' => 'Elle est définie uniquement par la fréquence', 'is_correct' => false],
                            ['choice_text' => 'Elle ne concerne aucune direction spatiale', 'is_correct' => false],
                        ],
                        'explanation' => 'La polarisation décrit l’évolution de la direction et de la phase des composantes transverses du champ.',
                    ],

                    [
                        'question' => 'Pourquoi les polariseurs sont-ils utiles pour réduire certains reflets lumineux gênants ?',
                        'choices' => [
                            ['choice_text' => 'Une partie de la lumière réfléchie possède une polarisation privilégiée qui peut être atténuée', 'is_correct' => true],
                            ['choice_text' => 'Tous les reflets sont complètement non polarisés', 'is_correct' => false],
                            ['choice_text' => 'Les polariseurs suppriment toute lumière', 'is_correct' => false],
                            ['choice_text' => 'La fréquence du reflet est toujours nulle', 'is_correct' => false],
                        ],
                        'explanation' => 'Certaines réflexions, notamment sur des surfaces diélectriques, sont partiellement polarisées.',
                    ],
                ],
            ],

            // ============================================================
            // QUIZ 6 — Interactions lumière-matière
            // ============================================================

            [
                'title' => 'Interactions lumière-matière',
                'description' => 'Étude des phénomènes d’absorption, d’émission, de diffusion et de propagation dans la matière.',
                'questions' => [

                    [
                        'question' => 'Pourquoi un matériau apparaît-il coloré lorsqu’il absorbe certaines longueurs d’onde et en transmet ou réfléchit d’autres ?',
                        'choices' => [
                            ['choice_text' => 'L’œil reçoit un spectre dont la composition dépend des longueurs d’onde sélectionnées par le matériau', 'is_correct' => true],
                            ['choice_text' => 'Le matériau crée toujours une nouvelle fréquence visible', 'is_correct' => false],
                            ['choice_text' => 'Toutes les longueurs d’onde sont absorbées de façon identique', 'is_correct' => false],
                            ['choice_text' => 'La masse du matériau détermine seule la couleur', 'is_correct' => false],
                        ],
                        'explanation' => 'La couleur perçue dépend des longueurs d’onde qui atteignent le système visuel après interaction avec le matériau.',
                    ],

                    [
                        'question' => 'Pourquoi un spectre d’absorption peut-il révéler des informations sur la composition chimique d’un gaz ?',
                        'choices' => [
                            ['choice_text' => 'Les transitions quantifiées produisent des absorptions à des longueurs d’onde caractéristiques', 'is_correct' => true],
                            ['choice_text' => 'Tous les gaz absorbent exactement aux mêmes longueurs d’onde', 'is_correct' => false],
                            ['choice_text' => 'L’absorption ne dépend jamais de la structure électronique', 'is_correct' => false],
                            ['choice_text' => 'La température suffit à identifier tout composé sans spectre', 'is_correct' => false],
                        ],
                        'explanation' => 'Les différences d’énergie entre niveaux quantiques donnent des signatures spectrales propres aux espèces chimiques.',
                    ],

                    [
                        'question' => 'Quelle relation relie l’énergie d’un photon à sa fréquence ?',
                        'choices' => [
                            ['choice_text' => 'E = hf', 'is_correct' => true],
                            ['choice_text' => 'E = h/f', 'is_correct' => false],
                            ['choice_text' => 'E = f/h', 'is_correct' => false],
                            ['choice_text' => 'E = hf²', 'is_correct' => false],
                        ],
                        'explanation' => 'L’énergie d’un photon est proportionnelle à sa fréquence via la constante de Planck.',
                    ],

                    [
                        'question' => 'Pourquoi les photons ultraviolets possèdent-ils une énergie supérieure à celle des photons infrarouges ?',
                        'choice_text' => 'Leur fréquence est plus élevée et E = hf',
                    ],

                    [
                        'question' => 'Quel phénomène correspond à la diffusion élastique de lumière par des particules très petites devant la longueur d’onde ?',
                        'choices' => [
                            ['choice_text' => La diffusion de Rayleigh', 'is_correct' => true],
                            ['choice_text' => 'La diffusion de Compton uniquement', 'is_correct' => false],
                            ['choice_text' => 'La réflexion totale', 'is_correct' => false],
                            ['choice_text' => 'La polarisation de Malus', 'is_correct' => false],
                        ],
                        'explanation' => 'La diffusion de Rayleigh décrit notamment la diffusion élastique par de petites particules dans certaines conditions.',
                    ],

                    [
                        'question' => 'Pourquoi le ciel apparaît-il généralement bleu en plein jour dans l’atmosphère terrestre ?',
                        'choices' => [
                            ['choice_text' => La diffusion de Rayleigh est plus forte pour les courtes longueurs d’onde', 'is_correct' => true],
                            ['choice_text' => 'Le bleu est uniquement réfléchi par les océans', 'is_correct' => false],
                            ['choice_text' => 'Le rouge est toujours totalement absorbé par l’air', 'is_correct' => false],
                            ['choice_text' => 'La lumière solaire contient uniquement du bleu', 'is_correct' => false],
                        ],
                        'explanation' => 'La diffusion moléculaire atmosphérique est plus intense pour les courtes longueurs d’onde.',
                    ],

                    [
                        'question' => 'Pourquoi le coucher de soleil peut-il paraître rouge ou orange ?',
                        'choices' => [
                            ['choice_text' => Le trajet atmosphérique plus long retire davantage de composantes courtes par diffusion', 'is_correct' => true],
                            ['choice_text' => 'Le Soleil émet uniquement de la lumière rouge au coucher', 'is_correct' => false],
                            ['choice_text' => 'L’atmosphère augmente toujours la fréquence des photons', 'is_correct' => false],
                            ['choice_text' => 'La température du Soleil devient instantanément plus basse', 'is_correct' => false],
                        ],
                        'explanation' => 'Lors d’un long trajet dans l’atmosphère, les courtes longueurs d’onde sont davantage diffusées hors de la ligne de visée.',
                    ],

                    [
                        'question' => 'Pourquoi la lumière peut-elle être absorbée à certaines longueurs d’onde mais pas à d’autres dans un matériau ?',
                        'choices' => [
                            ['choice_text' => 'Les transitions énergétiques disponibles imposent des conditions spectrales spécifiques', 'is_correct' => true],
                            ['choice_text' => 'Toutes les énergies lumineuses sont équivalentes dans la matière', 'is_correct' => false],
                            ['choice_text' => 'La longueur d’onde ne joue aucun rôle dans l’absorption', 'is_correct' => false],
                            ['choice_text' => 'La matière absorbe uniquement les photons de très basse énergie', 'is_correct' => false],
                        ],
                        'explanation' => 'L’interaction lumière-matière dépend des niveaux énergétiques accessibles et de la structure du matériau.',
                    ],

                    [
                        'question' => 'Pourquoi les transitions d’émission et d’absorption sont-elles liées ?',
                        'choices' => [
                            ['choice_text' => 'Elles correspondent à des différences d’énergie entre états quantiques du système', 'is_correct' => true],
                            ['choice_text' => 'L’émission ne dépend jamais des niveaux d’énergie', 'is_correct' => false],
                            ['choice_text' => 'L’absorption est uniquement mécanique', 'is_correct' => false],
                            ['choice_text' => 'Les photons émis et absorbés n’ont aucune relation énergétique', 'is_correct' => false],
                        ],
                        'explanation' => 'Une transition vers un état plus énergétique absorbe un photon de l’énergie correspondante, tandis que la transition inverse peut produire son émission.',
                    ],

                    [
                        'question' => 'Pourquoi l’analyse spectroscopique peut-elle être utilisée à distance pour étudier une étoile ?',
                        'choices' => [
                            ['choice_text' => La lumière transporte une signature spectrale contenant des informations sur la matière traversée et émise', 'is_correct' => true],
                            ['choice_text' => 'Une étoile transmet nécessairement des échantillons matériels', 'is_correct' => false],
                            ['choice_text' => 'Le spectre est indépendant des éléments chimiques', 'is_correct' => false],
                            ['choice_text' => 'La lumière astronomique ne possède aucune information physique', 'is_correct' => false],
                        ],
                        'explanation' => 'Les raies spectrales permettent d’inférer composition, température, vitesses et autres propriétés.',
                    ],
                ],
            ],

            // ============================================================
            // QUIZ 7 — Optique géométrique avancée
            // ============================================================

            [
                'title' => 'Optique géométrique avancée',
                'description' => 'Analyse des systèmes de lentilles, conjugaisons et limites de l’approximation paraxiale.',
                'questions' => [

                    [
                        'question' => 'Deux lentilles minces convergentes de focales f1 et f2 sont accolées. Quelle puissance optique totale obtient-on dans l’approximation des lentilles minces ?',
                        'choices' => [
                            ['choice_text' => 'P = P1 + P2', 'is_correct' => true],
                            ['choice_text' => 'P = P1P2', 'is_correct' => false],
                            ['choice_text' => 'P = P1 - P2 toujours', 'is_correct' => false],
                            ['choice_text' => 'P = 1/(P1 + P2)', 'is_correct' => false],
                        ],
                        'explanation' => 'Pour des lentilles minces accolées, les vergences s’additionnent.',
                    ],

                    [
                        'question' => 'Une lentille convergente de puissance +4 D est associée à une lentille divergente de -1 D. Quelle est la puissance totale si elles sont accolées ?',
                        'choices' => [
                            ['choice_text' => '+3 D', 'is_correct' => true],
                            ['choice_text' => '+5 D', 'is_correct' => false],
                            ['choice_text' => '-3 D', 'is_correct' => false],
                            ['choice_text' => '+4 D', 'is_correct' => false],
                        ],
                        'explanation' => 'Ptot = 4 + (-1) = +3 D.',
                    ],

                    [
                        'question' => 'Quelle distance focale équivalente correspond à une puissance de +2 D ?',
                        'choices' => [
                            ['choice_text' => '0,5 m', 'is_correct' => true],
                            ['choice_text' => '2 m', 'is_correct' => false],
                            ['choice_text' => '0,2 m', 'is_correct' => false],
                            ['choice_text' => '-0,5 m', 'is_correct' => false],
                        ],
                        'explanation' => 'f = 1/P = 1/2 = 0,5 m.',
                    ],

                    [
                        'question' => 'Pourquoi les systèmes optiques réels utilisent-ils souvent plusieurs lentilles plutôt qu’une seule ?',
                        'choices' => [
                            ['choice_text' => 'Pour corriger certaines aberrations et contrôler la focale et le champ', 'is_correct' => true],
                            ['choice_text' => 'Une seule lentille ne peut jamais former d’image', 'is_correct' => false],
                            ['choice_text' => 'Plusieurs lentilles suppriment nécessairement toute diffraction', 'is_correct' => false],
                            ['choice_text' => 'La réfraction ne se produit qu’avec deux lentilles ou plus', 'is_correct' => false],
                        ],
                        'explanation' => 'Les systèmes multilentilles offrent davantage de degrés de conception et de correction.',
                    ],

                    [
                        'question' => 'Pourquoi les relations de conjugaison simples deviennent-elles moins précises pour des rayons très éloignés de l’axe ?',
                        'choices' => [
                            ['choice_text' => 'L’approximation paraxiale n’est plus suffisamment valide', 'is_correct' => true],
                            ['choice_text' => 'La lumière cesse d’être électromagnétique', 'is_correct' => false],
                            ['choice_text' => 'Les lentilles ne possèdent plus de focale', 'is_correct' => false],
                            ['choice_text' => 'La fréquence lumineuse devient nulle', 'is_correct' => false],
                        ],
                        'explanation' => 'Les formules de lentilles minces reposent sur des approximations, notamment petits angles et faible épaisseur.',
                    ],

                    [
                        'question' => 'Quelle aberration correspond à une différence de focalisation entre les rayons proches de l’axe et ceux plus éloignés ?',
                        'choices' => [
                            ['choice_text' => 'L’aberration sphérique', 'is_correct' => true],
                            ['choice_text' => 'L’aberration chromatique uniquement', 'is_correct' => false],
                            ['choice_text' => 'La diffraction de Rayleigh', 'is_correct' => false],
                            ['choice_text' => 'La polarisation naturelle', 'is_correct' => false],
                        ],
                        'explanation' => 'L’aberration sphérique vient de la variation de convergence avec l’ouverture pour une surface sphérique réelle.',
                    ],

                    [
                        'question' => 'Quelle aberration est directement associée à la dépendance de l’indice avec la longueur d’onde ?',
                        'choices' => [
                            ['choice_text' => 'L’aberration chromatique', 'is_correct' => true],
                            ['choice_text' => 'L’aberration sphérique', 'is_correct' => false],
                            ['choice_text' => 'L’aberration de coma uniquement', 'is_correct' => false],
                            ['choice_text' => 'La distorsion géométrique uniquement', 'is_correct' => false],
                        ],
                        'explanation' => 'La dispersion du matériau entraîne des focales différentes selon la couleur.',
                    ],

                    [
                        'question' => 'Pourquoi une image hors axe peut-elle présenter une forme de comète dans un système optique réel ?',
                        'choices' => [
                            ['choice_text' => 'Une aberration de coma peut rendre l’image asymétrique', 'is_correct' => true],
                            ['choice_text' => 'La diffraction devient nécessairement nulle hors axe', 'is_correct' => false],
                            ['choice_text' => 'La fréquence de la source augmente', 'is_correct' => false],
                            ['choice_text' => 'La lentille devient plane hors axe', 'is_correct' => false],
                        ],
                        'explanation' => 'La coma est une aberration hors axe qui déforme l’image d’une source ponctuelle.',
                    ],

                    [
                        'question' => 'Pourquoi la distorsion optique peut-elle modifier la géométrie d’une image sans nécessairement réduire fortement sa netteté locale ?',
                        'choices' => [
                            ['choice_text' => Le grandissement peut varier avec la position dans le champ', 'is_correct' => true],
                            ['choice_text' => 'La distorsion dépend uniquement de la fréquence', 'is_correct' => false],
                            ['choice_text' => 'La résolution est toujours complètement détruite', 'is_correct' => false],
                            ['choice_text' => 'Une image distordue ne peut jamais être nette', 'is_correct' => false],
                        ],
                        'explanation' => 'La distorsion modifie la géométrie globale de l’image, tandis que la netteté peut rester relativement bonne localement.',
                    ],

                    [
                        'question' => 'Pourquoi une grande ouverture optique peut-elle augmenter simultanément la collecte de lumière et certaines aberrations ?',
                        'choices' => [
                            ['choice_text' => Elle utilise davantage de rayons éloignés de l’axe où les aberrations sont souvent plus fortes', 'is_correct' => true],
                            ['choice_text' => 'Une grande ouverture réduit toujours la quantité de lumière', 'is_correct' => false],
                            ['choice_text' => 'Les rayons marginaux sont toujours absents', 'is_correct' => false],
                            ['choice_text' => 'La diffraction disparaît automatiquement', 'is_correct' => false],
                        ],
                        'explanation' => 'Augmenter l’ouverture permet plus de lumière mais sollicite davantage les zones non paraxiales du système.',
                    ],

                    [
                        'question' => 'Pourquoi un système optique professionnel doit-il être évalué simultanément en termes de résolution, contraste et champ ?',
                        'choices' => [
                            ['choice_text' => 'Une bonne performance locale ne garantit pas une bonne qualité d’image sur l’ensemble du domaine', 'is_correct' => true],
                            ['choice_text' => 'Ces critères sont toujours exactement équivalents', 'is_correct' => false],
                            ['choice_text' => 'Le champ n’a aucun rapport avec les aberrations', 'is_correct' => false],
                            ['choice_text' => 'Le contraste est indépendant de la fonction de transfert optique', 'is_correct' => false],
                        ],
                        'explanation' => 'La qualité d’un système dépend de plusieurs métriques qui peuvent entrer en compromis.',
                    ],
                ],
            ],

            // ============================================================
            // QUIZ 8 — Analyse intégrée avancée
            // ============================================================

            [
                'title' => 'Analyse intégrée des ondes et de l’optique',
                'description' => 'Problèmes combinant propagation, interférences, diffraction, réfraction et polarisation.',
                'questions' => [

                    [
                        'question' => 'Une onde lumineuse de longueur d’onde 600 nm dans le vide entre dans un verre d’indice 1,5. Quelle est sa longueur d’onde dans le verre ?',
                        'choices' => [
                            ['choice_text' => '400 nm', 'is_correct' => true],
                            ['choice_text' => '600 nm', 'is_correct' => false],
                            ['choice_text' => '900 nm', 'is_correct' => false],
                            ['choice_text' => '300 nm', 'is_correct' => false],
                        ],
                        'explanation' => 'λ = λ0/n = 600/1,5 = 400 nm.',
                    ],

                    [
                        'question' => 'Dans ce même verre, si la fréquence reste constante, la vitesse de phase devient...',
                        'choices' => [
                            ['choice_text' => c/1,5', 'is_correct' => true],
                            ['choice_text' => '1,5c', 'is_correct' => false],
                            ['choice_text' => 'c', 'is_correct' => false],
                            ['choice_text' => 'c/2,5', 'is_correct' => false],
                        ],
                        'explanation' => 'Par définition n = c/v, donc v = c/n = c/1,5.',
                    ],

                    [
                        'question' => 'Dans une expérience de Young, deux franges brillantes successives sont séparées d’une distance i. Que représente i physiquement ?',
                        'choices' => [
                            ['choice_text' => 'La distance spatiale correspondant à une variation de phase de 2π sur l’écran', 'is_correct' => true],
                            ['choice_text' => 'La longueur d’onde dans le vide uniquement', 'is_correct' => false],
                            ['choice_text' => 'La distance entre les deux fentes', 'is_correct' => false],
                            ['choice_text' => 'La moitié de la distance focale', 'is_correct' => false],
                        ],
                        'explanation' => 'L’interfrange correspond au déplacement sur l’écran nécessaire pour passer d’un maximum au suivant.',
                    ],

                    [
                        'question' => 'Un interféromètre détecte une variation de différence de marche de 300 nm avec une lumière de 600 nm. Quelle variation de phase correspondante obtient-on ?',
                        'choices' => [
                            ['choice_text' => 'π rad', 'is_correct' => true],
                            ['choice_text' => '2π rad', 'is_correct' => false],
                            ['choice_text' => 'π/2 rad', 'is_correct' => false],
                            ['choice_text' => '4π rad', 'is_correct' => false],
                        ],
                        'explanation' => 'Δφ = 2πδ/λ = 2π × 300/600 = π rad.',
                    ],

                    [
                        'question' => 'Une ouverture circulaire de diamètre double est utilisée avec la même longueur d’onde. La limite angulaire de diffraction devient approximativement...',
                        'choices' => [
                            ['choice_text' => 'Deux fois plus petite', 'is_correct' => true],
                            ['choice_text' => 'Deux fois plus grande', 'is_correct' => false],
                            ['choice_text' => 'Quatre fois plus petite', 'is_correct' => false],
                            ['choice_text' => 'Inchangée', 'is_correct' => false],
                        ],
                        'explanation' => 'θ_min ≈ 1,22 λ/D. Doubler D divise θ_min par deux.',
                    ],

                    [
                        'question' => 'Une lumière polarisée linéairement traverse un analyseur à 30°. Quelle fraction de l’intensité incidente polarisée est transmise ?',
                        'choices' => [
                            ['choice_text' => '3/4', 'is_correct' => true],
                            ['choice_text' => '1/2', 'is_correct' => false],
                            ['choice_text' => '1/4', 'is_correct' => false],
                            ['choice_text' => '1', 'is_correct' => false],
                        ],
                        'explanation' => 'Malus : I/I0 = cos²30° = 3/4.',
                    ],

                    [
                        'question' => 'Une fibre possède un cœur d’indice 1,50 et une gaine d’indice 1,45. Pourquoi le guidage est-il possible dans certaines conditions ?',
                        'choices' => [
                            ['choice_text' => L’indice du cœur est supérieur et permet la réflexion totale interne', 'is_correct' => true],
                            ['choice_text' => 'Les indices sont identiques', 'is_correct' => false],
                            ['choice_text' => 'La gaine possède un indice supérieur au cœur', 'is_correct' => false],
                            ['choice_text' => 'La lumière est réfléchie par absorption métallique obligatoire', 'is_correct' => false],
                        ],
                        'explanation' => 'Le contraste d’indice n1 > n2 permet la réflexion totale pour les rayons satisfaisant la condition angulaire.',
                    ],

                    [
                        'question' => 'Pourquoi une fibre optique peut-elle transporter des données sur une grande distance tout en restant confinée sur une petite section ?',
                        'choices' => [
                            ['choice_text' => 'Le guidage optique maintient la lumière dans le cœur tandis que l’information est portée par les variations du signal lumineux', 'is_correct' => true],
                            ['choice_text' => 'La lumière ne subit aucune interaction avec la matière', 'is_correct' => false],
                            ['choice_text' => 'La fibre transforme les photons en électrons à chaque mètre', 'is_correct' => false],
                            ['choice_text' => 'Le signal est transporté par la masse de la fibre', 'is_correct' => false],
                        ],
                        'explanation' => 'Le guidage et les propriétés de propagation permettent de conserver le signal dans une faible section tout en le transportant sur de longues distances.',
                    ],

                    [
                        'question' => 'Pourquoi la diffraction, la dispersion et les interférences doivent-elles être distinguées dans l’analyse d’un système optique ?',
                        'choices' => [
                            ['choice_text' => 'Elles ont des origines physiques différentes et influencent différemment résolution, phase et propagation', 'is_correct' => true],
                            ['choice_text' => 'Elles représentent exactement le même phénomène', 'is_correct' => false],
                            ['choice_text' => 'La diffraction ne concerne jamais la lumière', 'is_correct' => false],
                            ['choice_text' => 'La dispersion concerne uniquement les sons', 'is_correct' => false],
                        ],
                        'explanation' => 'La diffraction résulte de la propagation autour des ouvertures et obstacles, l’interférence de la superposition cohérente, et la dispersion de la dépendance spectrale de la propagation.',
                    ],

                    [
                        'question' => 'Pourquoi une analyse avancée d’un système optique doit-elle souvent combiner une description géométrique et ondulatoire ?',
                        'choices' => [
                            ['choice_text' => 'La géométrie facilite le tracé des rayons tandis que l’approche ondulatoire décrit les limites de résolution et les phénomènes de phase', 'is_correct' => true],
                            ['choice_text' => 'Une seule des deux approches est toujours suffisante', 'is_correct' => false],
                            ['choice_text' => 'L’optique ondulatoire interdit toute utilisation des rayons', 'is_correct' => false],
                            ['choice_text' => 'L’optique géométrique décrit parfaitement toutes les interférences', 'is_correct' => false],
                        ],
                        'explanation' => 'Les deux descriptions sont complémentaires : la géométrie est efficace dans de nombreux régimes, tandis que la nature ondulatoire devient essentielle pour diffraction, interférences et résolution.',
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
                    'difficulty' => 'Advanced',
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

                // Randomisation complète des choix.
                // La bonne réponse conserve son is_correct après le mélange.
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