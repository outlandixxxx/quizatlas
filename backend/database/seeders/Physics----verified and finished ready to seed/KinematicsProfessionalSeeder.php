<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class KinematicsProfessionalSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'kinematics')->firstOrFail();

        $quizzes = [

            // ============================================================
            // QUIZ 1 — Cinématique avancée des systèmes
            // ============================================================

            [
                'title' => 'Cinématique avancée des systèmes mécaniques',
                'description' => 'Analyse professionnelle des mouvements complexes, des repères mobiles et des relations cinématiques.',
                'questions' => [

                    [
                        'question' => 'Dans une description générale du mouvement d’un point matériel, quelle relation relie directement sa vitesse et sa position ?',
                        'choices' => [
                            ['choice_text' => 'v = dr/dt', 'is_correct' => true],
                            ['choice_text' => 'v = d²r/dt²', 'is_correct' => false],
                            ['choice_text' => 'v = r/t²', 'is_correct' => false],
                            ['choice_text' => 'v = ∫r dt', 'is_correct' => false],
                        ],
                        'explanation' => 'La vitesse est la dérivée temporelle du vecteur position.',
                    ],

                    [
                        'question' => 'Quelle relation définit l’accélération d’une particule en fonction de sa position ?',
                        'choices' => [
                            ['choice_text' => 'a = d²r/dt²', 'is_correct' => true],
                            ['choice_text' => 'a = dr/dt', 'is_correct' => false],
                            ['choice_text' => 'a = r/t', 'is_correct' => false],
                            ['choice_text' => 'a = ∫r dt', 'is_correct' => false],
                        ],
                        'explanation' => 'L’accélération est la dérivée temporelle de la vitesse, donc la seconde dérivée de la position.',
                    ],

                    [
                        'question' => 'Pour une trajectoire paramétrée r(t), quelle quantité décrit localement la direction du mouvement ?',
                        'choices' => [
                            ['choice_text' => 'Le vecteur tangent unitaire', 'is_correct' => true],
                            ['choice_text' => 'Le vecteur vitesse moyenne uniquement', 'is_correct' => false],
                            ['choice_text' => 'Le vecteur position absolu uniquement', 'is_correct' => false],
                            ['choice_text' => 'Le vecteur masse', 'is_correct' => false],
                        ],
                        'explanation' => 'Le vecteur tangent unitaire est orienté dans la direction instantanée du déplacement.',
                    ],

                    [
                        'question' => 'Comment définit-on le vecteur tangent unitaire T pour une trajectoire régulière ?',
                        'choices' => [
                            ['choice_text' => 'T = v/|v|', 'is_correct' => true],
                            ['choice_text' => 'T = a/|a| dans tous les cas', 'is_correct' => false],
                            ['choice_text' => 'T = r/|r| dans tous les cas', 'is_correct' => false],
                            ['choice_text' => 'T = v|v|', 'is_correct' => false],
                        ],
                        'explanation' => 'Le vecteur tangent unitaire est la direction du vecteur vitesse normalisé.',
                    ],

                    [
                        'question' => 'Pourquoi la vitesse est-elle toujours tangentielle à la trajectoire instantanée ?',
                        'choices' => [
                            ['choice_text' => 'Elle est dirigée selon la dérivée de la position le long de la trajectoire', 'is_correct' => true],
                            ['choice_text' => 'La gravité impose toujours une direction tangentielle', 'is_correct' => false],
                            ['choice_text' => 'La vitesse est définie comme un scalaire positif', 'is_correct' => false],
                            ['choice_text' => 'La masse impose la direction du mouvement', 'is_correct' => false],
                        ],
                        'explanation' => 'La vitesse représente la variation instantanée de la position et est donc tangentielle à la courbe.',
                    ],

                    [
                        'question' => 'Si la norme de la vitesse est constante mais que sa direction varie, quelle composante d’accélération est nécessairement présente ?',
                        'choices' => [
                            ['choice_text' => 'Une composante normale', 'is_correct' => true],
                            ['choice_text' => 'Une composante tangentielle non nulle', 'is_correct' => false],
                            ['choice_text' => 'Aucune composante', 'is_correct' => false],
                            ['choice_text' => 'Uniquement une composante radiale dans toutes les géométries', 'is_correct' => false],
                        ],
                        'explanation' => 'Une variation de direction de la vitesse est décrite par l’accélération normale.',
                    ],

                    [
                        'question' => 'Quelle relation donne la décomposition intrinsèque de l’accélération ?',
                        'choices' => [
                            ['choice_text' => 'a = (dv/dt)T + (v²/ρ)N', 'is_correct' => true],
                            ['choice_text' => 'a = vT + ρN', 'is_correct' => false],
                            ['choice_text' => 'a = (d²v/dt²)T + vρN', 'is_correct' => false],
                            ['choice_text' => 'a = v²T + ρN', 'is_correct' => false],
                        ],
                        'explanation' => 'La décomposition intrinsèque sépare l’accélération tangentielle dv/dt et l’accélération normale v²/ρ.',
                    ],

                    [
                        'question' => 'Pourquoi le rayon de courbure intervient-il dans l’accélération normale ?',
                        'choices' => [
                            ['choice_text' => 'Il mesure la courbure locale de la trajectoire', 'is_correct' => true],
                            ['choice_text' => 'Il représente toujours la distance à l’origine du repère', 'is_correct' => false],
                            ['choice_text' => 'Il définit la vitesse scalaire', 'is_correct' => false],
                            ['choice_text' => 'Il est égal à l’accélération', 'is_correct' => false],
                        ],
                        'explanation' => 'La courbure géométrique contrôle la variation de direction du vecteur tangent et donc l’accélération normale.',
                    ],

                    [
                        'question' => 'Une trajectoire possède une très faible courbure locale. À vitesse constante, son accélération normale est alors...',
                        'choices' => [
                            ['choice_text' => 'Faible', 'is_correct' => true],
                            ['choice_text' => 'Nécessairement infinie', 'is_correct' => false],
                            ['choice_text' => 'Indépendante de la vitesse', 'is_correct' => false],
                            ['choice_text' => 'Toujours égale à g', 'is_correct' => false],
                        ],
                        'explanation' => 'Comme an = v²κ, une faible courbure κ implique une faible accélération normale à vitesse donnée.',
                    ],

                    [
                        'question' => 'Pourquoi une description vectorielle est-elle indispensable pour les mouvements tridimensionnels ?',
                        'choices' => [
                            ['choice_text' => 'La direction du mouvement ne peut pas être représentée correctement par une seule grandeur scalaire', 'is_correct' => true],
                            ['choice_text' => 'La vitesse devient toujours constante', 'is_correct' => false],
                            ['choice_text' => 'La masse dépend de la direction', 'is_correct' => false],
                            ['choice_text' => 'Les coordonnées cartésiennes disparaissent', 'is_correct' => false],
                        ],
                        'explanation' => 'La cinématique tridimensionnelle nécessite une représentation à la fois de la norme et de la direction.',
                    ],
                ],
            ],

            // ============================================================
            // QUIZ 2 — Repères mobiles et transport
            // ============================================================

            [
                'title' => 'Repères mobiles et théorème de transport',
                'description' => 'Analyse des dérivées dans les repères mobiles, des mouvements relatifs et des contributions de rotation.',
                'questions' => [

                    [
                        'question' => 'Lorsqu’un point est décrit dans un repère lui-même en mouvement, la vitesse absolue peut être décomposée en...',
                        'choices' => [
                            ['choice_text' => 'Vitesse d’entraînement et vitesse relative', 'is_correct' => true],
                            ['choice_text' => 'Vitesse thermique et vitesse électrique', 'is_correct' => false],
                            ['choice_text' => 'Vitesse massique et vitesse volumique', 'is_correct' => false],
                            ['choice_text' => 'Vitesse normale uniquement', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans un repère mobile, la vitesse absolue comprend la contribution due au mouvement du repère et celle du mouvement relatif.',
                    ],

                    [
                        'question' => 'Dans un repère en translation uniforme, quelle contribution supplémentaire apparaît dans l’accélération absolue par rapport à l’accélération relative ?',
                        'choices' => [
                            ['choice_text' => Aucune contribution d’accélération due au repère', 'is_correct' => true],
                            ['choice_text' => 'Une contribution de Coriolis', 'is_correct' => false],
                            ['choice_text' => 'Une contribution centrifuge', 'is_correct' => false],
                            ['choice_text' => 'Une contribution tangentielle obligatoire', 'is_correct' => false],
                        ],
                        'explanation' => 'Une translation uniforme possède une accélération nulle, donc l’accélération absolue et relative sont identiques.',
                    ],

                    [
                        'question' => 'Dans un repère en rotation, quel terme dépend à la fois de la vitesse angulaire du repère et de la vitesse relative du point ?',
                        'choices' => [
                            ['choice_text' => Le terme de Coriolis', 'is_correct' => true],
                            ['choice_text' => Le terme gravitationnel', 'is_correct' => false],
                            ['choice_text' => Le terme thermique', 'is_correct' => false],
                            ['choice_text' => Le terme de pression hydrostatique', 'is_correct' => false],
                        ],
                        'explanation' => 'L’accélération de Coriolis est liée au produit vectoriel entre la vitesse angulaire du repère et la vitesse relative.',
                    ],

                    [
                        'question' => 'Quelle expression correspond au terme de Coriolis dans un repère tournant ?',
                        'choices' => [
                            ['choice_text' => '2Ω × v_rel', 'is_correct' => true],
                            ['choice_text' => 'Ω × r', 'is_correct' => false],
                            ['choice_text' => 'Ω²r', 'is_correct' => false],
                            ['choice_text' => '2r × v_rel', 'is_correct' => false],
                        ],
                        'explanation' => 'L’accélération de Coriolis s’écrit 2Ω × v_rel ; son signe dépend de la convention utilisée dans la décomposition complète.',
                    ],

                    [
                        'question' => 'Quel terme est associé à la rotation propre du repère même lorsqu’un point est fixe dans ce repère ?',
                        'choices' => [
                            ['choice_text' => 'Le terme centrifuge', 'is_correct' => true],
                            ['choice_text' => 'Le terme de Coriolis', 'is_correct' => false],
                            ['choice_text' => 'Le terme tangent', 'is_correct' => false],
                            ['choice_text' => 'Le terme d’inertie thermique', 'is_correct' => false],
                        ],
                        'explanation' => 'Une masse fixe dans un repère tournant subit, dans la description non inertielle, une contribution centrifuge.',
                    ],

                    [
                        'question' => 'Pourquoi les termes de transport deviennent-ils importants dans les systèmes industriels comportant des pièces en rotation ?',
                        'choices' => [
                            ['choice_text' => 'La géométrie et les vitesses sont évaluées dans des repères qui peuvent eux-mêmes tourner', 'is_correct' => true],
                            ['choice_text' => 'Les pièces en rotation n’ont aucune accélération', 'is_correct' => false],
                            ['choice_text' => 'Le mouvement relatif est toujours négligeable', 'is_correct' => false],
                            ['choice_text' => 'La masse dépend directement de Ω', 'is_correct' => false],
                        ],
                        'explanation' => 'Les machines tournantes exigent souvent des décompositions entre mouvements absolus et relatifs.',
                    ],

                    [
                        'question' => 'Pourquoi l’accélération d’un point dans un repère tournant peut-elle être différente de son accélération mesurée dans un repère inertiel ?',
                        'choices' => [
                            ['choice_text' => 'Parce que la base du repère change elle-même avec le temps', 'is_correct' => true],
                            ['choice_text' => 'Parce que le point change de masse', 'is_correct' => false],
                            ['choice_text' => 'Parce que le temps s’arrête dans le repère mobile', 'is_correct' => false],
                            ['choice_text' => 'Parce que la gravité est différente dans tous les repères', 'is_correct' => false],
                        ],
                        'explanation' => 'La dérivation temporelle des vecteurs de base produit des termes supplémentaires.',
                    ],

                    [
                        'question' => 'Dans un repère tournant, si Ω = 0 instantanément et que le repère ne possède pas d’accélération translationnelle, les termes de rotation disparaissent...',
                        'choices' => [
                            ['choice_text' => 'Instantanément à cet ordre de description', 'is_correct' => true],
                            ['choice_text' => 'Jamais', 'is_correct' => false],
                            ['choice_text' => 'Uniquement si la masse est nulle', 'is_correct' => false],
                            ['choice_text' => 'Uniquement si la vitesse relative est nulle', 'is_correct' => false],
                        ],
                        'explanation' => 'Les contributions liées à Ω sont nulles lorsque la vitesse angulaire est nulle à l’instant considéré.',
                    ],

                    [
                        'question' => 'Pourquoi le mouvement d’un bras robotique doit-il être décrit dans plusieurs repères coordonnés ?',
                        'choices' => [
                            ['choice_text' => 'Chaque articulation possède sa propre orientation et son propre mouvement relatif', 'is_correct' => true],
                            ['choice_text' => 'Un seul repère est physiquement interdit', 'is_correct' => false],
                            ['choice_text' => 'Les articulations ne possèdent aucune vitesse', 'is_correct' => false],
                            ['choice_text' => 'La position absolue n’existe pas', 'is_correct' => false],
                        ],
                        'explanation' => 'Les chaînes cinématiques utilisent plusieurs repères afin de représenter efficacement les transformations entre articulations.',
                    ],

                    [
                        'question' => 'Pourquoi les erreurs de transformation entre repères peuvent-elles devenir critiques dans une application robotique ?',
                        'choices' => [
                            ['choice_text' => 'Une petite erreur d’orientation ou de position peut être amplifiée dans une chaîne cinématique complexe', 'is_correct' => true],
                            ['choice_text' => 'Les transformations sont toujours exactement indépendantes', 'is_correct' => false],
                            ['choice_text' => 'Les repères ne contiennent aucune information géométrique', 'is_correct' => false],
                            ['choice_text' => 'Une erreur de repère ne modifie jamais la position finale', 'is_correct' => false],
                        ],
                        'explanation' => 'Les erreurs de transformation se propagent le long de la chaîne cinématique et peuvent affecter fortement la précision finale.',
                    ],
                ],
            ],

            // ============================================================
            // QUIZ 3 — Cinématique des corps rigides
            // ============================================================

            [
                'title' => 'Cinématique des corps rigides',
                'description' => 'Analyse professionnelle des translations, rotations, vitesses angulaires et mouvements combinés.',
                'questions' => [

                    [
                        'question' => 'Dans un mouvement de translation pure d’un solide rigide, les vecteurs vitesse de tous les points sont...',
                        'choices' => [
                            ['choice_text' => 'Identiques à un instant donné', 'is_correct' => true],
                            ['choice_text' => 'Toujours opposés', 'is_correct' => false],
                            ['choice_text' => 'Proportionnels à leur distance au centre', 'is_correct' => false],
                            ['choice_text' => 'Nuls', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans une translation pure, tous les points du solide ont la même vitesse instantanée.',
                    ],

                    [
                        'question' => 'Pour un corps rigide en rotation autour d’un axe fixe, quelle relation donne la vitesse d’un point par rapport à l’axe ?',
                        'choices' => [
                            ['choice_text' => 'v = ω × r', 'is_correct' => true],
                            ['choice_text' => 'v = ωr²', 'is_correct' => false],
                            ['choice_text' => 'v = r/ω', 'is_correct' => false],
                            ['choice_text' => 'v = α × r', 'is_correct' => false],
                        ],
                        'explanation' => 'La vitesse d’un point d’un solide en rotation est v = ω × r.',
                    ],

                    [
                        'question' => 'Quelle est la norme de la vitesse d’un point à distance r d’un axe fixe lorsqu’il tourne avec vitesse angulaire ω ?',
                        'choices' => [
                            ['choice_text' => 'v = rω', 'is_correct' => true],
                            ['choice_text' => 'v = r/ω', 'is_correct' => false],
                            ['choice_text' => 'v = rω²', 'is_correct' => false],
                            ['choice_text' => 'v = ω/r', 'is_correct' => false],
                        ],
                        'explanation' => 'Pour un point à distance perpendiculaire r de l’axe, la vitesse tangentielle vaut rω.',
                    ],

                    [
                        'question' => 'Quelle relation donne l’accélération d’un point d’un solide en rotation autour d’un axe fixe ?',
                        'choices' => [
                            ['choice_text' => a = α × r + ω × (ω × r)', 'is_correct' => true],
                            ['choice_text' => a = ω × r uniquement', 'is_correct' => false],
                            ['choice_text' => a = αr²', 'is_correct' => false],
                            ['choice_text' => a = r/ω', 'is_correct' => false],
                        ],
                        'explanation' => 'L’accélération comprend une contribution tangentielle α × r et une contribution normale ω × (ω × r).',
                    ],

                    [
                        'question' => 'Dans une rotation uniforme autour d’un axe fixe, quelle composante d’accélération disparaît ?',
                        'choices' => [
                            ['choice_text' => 'La composante tangentielle', 'is_correct' => true],
                            ['choice_text' => 'La composante normale', 'is_correct' => false],
                            ['choice_text' => 'Toute accélération', 'is_correct' => false],
                            ['choice_text' => 'La vitesse tangentielle', 'is_correct' => false],
                        ],
                        'explanation' => 'Une vitesse angulaire constante signifie α = 0, donc il n’y a pas d’accélération tangentielle.',
                    ],

                    [
                        'question' => 'Pourquoi deux points d’un solide rigide en rotation n’ont-ils généralement pas la même vitesse ?',
                        'choices' => [
                            ['choice_text' => 'Leur distance à l’axe et leur direction relative peuvent être différentes', 'is_correct' => true],
                            ['choice_text' => 'Parce que leurs masses sont différentes', 'is_correct' => false],
                            ['choice_text' => 'Parce que la rotation ne conserve pas les distances', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’un seul point peut se déplacer', 'is_correct' => false],
                        ],
                        'explanation' => 'La vitesse dépend de la position du point par rapport à l’axe via v = ω × r.',
                    ],

                    [
                        'question' => 'Dans une rotation autour d’un axe fixe, quel point possède idéalement une vitesse nulle sur l’axe lui-même ?',
                        'choices' => [
                            ['choice_text' => Un point situé sur l’axe de rotation', 'is_correct' => true],
                            ['choice_text' => 'Tous les points du solide', 'is_correct' => false],
                            ['choice_text' => 'Uniquement le point le plus éloigné', 'is_correct' => false],
                            ['choice_text' => 'Aucun point', 'is_correct' => false],
                        ],
                        'explanation' => 'Pour r parallèle à l’axe, ω × r = 0.',
                    ],

                    [
                        'question' => 'Quelle propriété fondamentale caractérise un mouvement de corps rigide ?',
                        'choices' => [
                            ['choice_text' => 'Les distances entre deux points quelconques du solide restent constantes', 'is_correct' => true],
                            ['choice_text' => 'Tous les points ont la même position', 'is_correct' => false],
                            ['choice_text' => 'Tous les points ont nécessairement la même vitesse', 'is_correct' => false],
                            ['choice_text' => 'Le corps ne peut pas tourner', 'is_correct' => false],
                        ],
                        'explanation' => 'La rigidité est définie par la conservation des distances internes.',
                    ],

                    [
                        'question' => 'Pourquoi la cinématique des corps rigides permet-elle de réduire considérablement le nombre de variables d’un système complexe ?',
                        'choices' => [
                            ['choice_text' => 'Les contraintes de rigidité relient les mouvements de tous les points du solide', 'is_correct' => true],
                            ['choice_text' => 'Chaque point évolue indépendamment', 'is_correct' => false],
                            ['choice_text' => 'La rigidité supprime les rotations', 'is_correct' => false],
                            ['choice_text' => 'Les contraintes n’ont aucun effet mathématique', 'is_correct' => false],
                        ],
                        'explanation' => 'La rigidité permet de décrire l’ensemble du solide avec un nombre limité de coordonnées de position et d’orientation.',
                    ],

                    [
                        'question' => 'Pourquoi une combinaison de translation et rotation est-elle nécessaire pour décrire de nombreux mécanismes réels ?',
                        'choices' => [
                            ['choice_text' => 'Les composants peuvent simultanément se déplacer et changer d’orientation', 'is_correct' => true],
                            ['choice_text' => 'Une rotation implique toujours une absence de translation', 'is_correct' => false],
                            ['choice_text' => 'Les corps rigides ne peuvent pas avoir plusieurs mouvements', 'is_correct' => false],
                            ['choice_text' => 'La translation n’existe que dans les fluides', 'is_correct' => false],
                        ],
                        'explanation' => 'La cinématique générale d’un solide combine translation du référentiel associé et rotation autour de celui-ci.',
                    ],
                ],
            ],

            // ============================================================
            // QUIZ 4 — Cinématique des mécanismes
            // ============================================================

            [
                'title' => 'Cinématique des mécanismes et robots',
                'description' => 'Analyse des chaînes cinématiques, degrés de liberté, vitesses articulaires et singularités.',
                'questions' => [

                    [
                        'question' => 'Qu’est-ce qu’un degré de liberté en cinématique d’un mécanisme ?',
                        'choices' => [
                            ['choice_text' => 'Une coordonnée indépendante nécessaire pour déterminer la configuration', 'is_correct' => true],
                            ['choice_text' => 'Le nombre total de pièces uniquement', 'is_correct' => false],
                            ['choice_text' => 'Le nombre de forces externes', 'is_correct' => false],
                            ['choice_text' => 'La masse totale du mécanisme', 'is_correct' => false],
                        ],
                        'explanation' => 'Les degrés de liberté représentent les variables indépendantes nécessaires pour définir la configuration du système.',
                    ],

                    [
                        'question' => 'Pourquoi une chaîne cinématique fermée est-elle généralement plus contrainte qu’une chaîne ouverte ?',
                        'choices' => [
                            ['choice_text' => 'Les boucles imposent des relations géométriques supplémentaires entre les articulations', 'is_correct' => true],
                            ['choice_text' => 'Une chaîne fermée ne possède aucun degré de liberté', 'is_correct' => false],
                            ['choice_text' => 'Les articulations cessent de bouger', 'is_correct' => false],
                            ['choice_text' => 'La masse des segments disparaît', 'is_correct' => false],
                        ],
                        'explanation' => 'Les fermetures géométriques créent des contraintes cinématiques supplémentaires.',
                    ],

                    [
                        'question' => 'Dans la cinématique d’un robot, que relie principalement la matrice jacobienne ?',
                        'choices' => [
                            ['choice_text' => Les vitesses articulaires aux vitesses linéaire et angulaire de l’effecteur', 'is_correct' => true],
                            ['choice_text' => Les masses aux températures', 'is_correct' => false],
                            ['choice_text' => Les forces thermiques aux pressions', 'is_correct' => false],
                            ['choice_text' => Les positions absolues aux énergies internes uniquement', 'is_correct' => false],
                        ],
                        'explanation' => 'La jacobienne transforme les vitesses articulaires en vitesse cartésienne de l’effecteur.',
                    ],

                    [
                        'question' => 'Pourquoi la jacobienne est-elle particulièrement importante pour le contrôle de robots ?',
                        'choices' => [
                            ['choice_text' => 'Elle permet de relier directement les mouvements articulaires au mouvement de l’effecteur', 'is_correct' => true],
                            ['choice_text' => 'Elle détermine automatiquement toutes les forces externes', 'is_correct' => false],
                            ['choice_text' => 'Elle remplace toutes les contraintes mécaniques', 'is_correct' => false],
                            ['choice_text' => 'Elle rend le robot parfaitement rigide', 'is_correct' => false],
                        ],
                        'explanation' => 'La jacobienne fournit le lien différentiel essentiel entre espace articulaire et espace cartésien.',
                    ],

                    [
                        'question' => 'Que signifie une singularité cinématique d’un robot ?',
                        'choices' => [
                            ['choice_text' => 'La jacobienne perd certains degrés de rang et certaines directions deviennent difficilement accessibles', 'is_correct' => true],
                            ['choice_text' => 'Tous les actionneurs deviennent physiquement inutiles', 'is_correct' => false],
                            ['choice_text' => 'La masse totale devient nulle', 'is_correct' => false],
                            ['choice_text' => 'Le robot doit nécessairement être immobile', 'is_correct' => false],
                        ],
                        'explanation' => 'À une singularité, certaines directions de vitesse ou de force deviennent dégénérées dans l’espace cartésien.',
                    ],

                    [
                        'question' => 'Pourquoi l’inversion directe d’une jacobienne peut-elle devenir numériquement instable près d’une singularité ?',
                        'choices' => [
                            ['choice_text' => 'Certaines valeurs singulières deviennent très petites et amplifient les erreurs', 'is_correct' => true],
                            ['choice_text' => 'La masse du robot devient infinie', 'is_correct' => false],
                            ['choice_text' => 'Les coordonnées cessent d’exister', 'is_correct' => false],
                            ['choice_text' => 'La vitesse du robot devient nécessairement nulle', 'is_correct' => false],
                        ],
                        'explanation' => 'Une jacobienne mal conditionnée amplifie les perturbations et les erreurs lors de l’inversion.',
                    ],

                    [
                        'question' => 'Pourquoi la cinématique inverse peut-elle posséder plusieurs solutions ?',
                        'choices' => [
                            ['choice_text' => 'Une même pose de l’effecteur peut correspondre à plusieurs configurations articulaires', 'is_correct' => true],
                            ['choice_text' => 'Les articulations ne sont pas liées géométriquement', 'is_correct' => false],
                            ['choice_text' => 'Chaque robot possède toujours une seule configuration', 'is_correct' => false],
                            ['choice_text' => 'La position finale ne dépend jamais des articulations', 'is_correct' => false],
                        ],
                        'explanation' => 'Les mécanismes peuvent admettre plusieurs configurations correspondant à une même pose cartésienne.',
                    ],

                    [
                        'question' => 'Pourquoi la cinématique inverse est-elle généralement plus difficile que la cinématique directe ?',
                        'choices' => [
                            ['choice_text' => 'Elle nécessite de résoudre des équations souvent non linéaires et éventuellement multivaluées', 'is_correct' => true],
                            ['choice_text' => 'La cinématique directe ne dépend pas des articulations', 'is_correct' => false],
                            ['choice_text' => 'La cinématique inverse ne possède jamais de solution', 'is_correct' => false],
                            ['choice_text' => 'La position de l’effecteur est indépendante de la géométrie', 'is_correct' => false],
                        ],
                        'explanation' => 'La cinématique inverse implique généralement une résolution non linéaire pouvant présenter plusieurs ou aucune solution.',
                    ],

                    [
                        'question' => 'Pourquoi les contraintes articulaires doivent-elles être intégrées dans une planification de trajectoire professionnelle ?',
                        'choices' => [
                            ['choice_text' => 'Les positions, vitesses et accélérations des articulations sont limitées physiquement', 'is_correct' => true],
                            ['choice_text' => 'Les actionneurs n’ont aucune limite', 'is_correct' => false],
                            ['choice_text' => 'Une trajectoire mathématique est toujours réalisable', 'is_correct' => false],
                            ['choice_text' => 'Les contraintes ne concernent que la couleur du robot', 'is_correct' => false],
                        ],
                        'explanation' => 'Les limites de course, vitesse, accélération et parfois jerk doivent être respectées pour obtenir une trajectoire réalisable.',
                    ],

                    [
                        'question' => 'Pourquoi le jerk peut-il être pris en compte dans une trajectoire mécanique de haute précision ?',
                        'choices' => [
                            ['choice_text' => 'Il contrôle la variation de l’accélération et peut réduire les sollicitations dynamiques et vibrations', 'is_correct' => true],
                            ['choice_text' => 'Il représente directement la position', 'is_correct' => false],
                            ['choice_text' => 'Il est identique à la vitesse', 'is_correct' => false],
                            ['choice_text' => 'Il n’a aucune influence sur les actionneurs', 'is_correct' => false],
                        ],
                        'explanation' => 'Le jerk est la dérivée de l’accélération et intervient dans la génération de mouvements doux et contrôlables.',
                    ],
                ],
            ],

            // ============================================================
            // QUIZ 5 — Trajectoires numériques
            // ============================================================

            [
                'title' => 'Planification et interpolation de trajectoires',
                'description' => 'Analyse professionnelle des trajectoires, profils de vitesse, accélération et contraintes de mouvement.',
                'questions' => [

                    [
                        'question' => 'Pourquoi une trajectoire polynomiale de degré élevé peut-elle être utilisée pour planifier un mouvement ?',
                        'choices' => [
                            ['choice_text' => 'Elle permet d’imposer plusieurs conditions initiales et finales sur position, vitesse et accélération', 'is_correct' => true],
                            ['choice_text' => 'Elle garantit toujours la trajectoire optimale', 'is_correct' => false],
                            ['choice_text' => 'Elle élimine toutes les contraintes physiques', 'is_correct' => false],
                            ['choice_text' => 'Elle ne peut représenter que des mouvements rectilignes', 'is_correct' => false],
                        ],
                        'explanation' => 'Les polynômes d’interpolation permettent d’imposer plusieurs conditions aux bornes.',
                    ],

                    [
                        'question' => 'Pourquoi impose-t-on souvent une vitesse nulle au début et à la fin d’une trajectoire de positionnement ?',
                        'choices' => [
                            ['choice_text' => 'Pour permettre un démarrage et un arrêt sans mouvement résiduel', 'is_correct' => true],
                            ['choice_text' => 'Pour maximiser toujours la vitesse moyenne', 'is_correct' => false],
                            ['choice_text' => 'Parce que la vitesse ne peut jamais être non nulle', 'is_correct' => false],
                            ['choice_text' => 'Pour rendre la masse constante', 'is_correct' => false],
                        ],
                        'explanation' => 'Des conditions de vitesse nulles aux extrémités permettent une arrivée stable et réduisent certains transitoires.',
                    ],

                    [
                        'question' => 'Pourquoi un profil trapézoïdal de vitesse est-il couramment utilisé dans les machines ?',
                        'choices' => [
                            ['choice_text' => 'Il permet de limiter l’accélération tout en conservant une phase à vitesse constante', 'is_correct' => true],
                            ['choice_text' => 'Il impose une accélération infinie', 'is_correct' => false],
                            ['choice_text' => 'Il rend la trajectoire indépendante du temps', 'is_correct' => false],
                            ['choice_text' => 'Il élimine la nécessité d’un actionneur', 'is_correct' => false],
                        ],
                        'explanation' => 'Le profil trapézoïdal offre une structure simple avec accélération, vitesse constante puis décélération.',
                    ],

                    [
                        'question' => 'Quel avantage présente un profil en S par rapport à un profil trapézoïdal idéal dans certaines applications ?',
                        'choices' => [
                            ['choice_text' => 'La variation d’accélération est plus progressive, ce qui réduit souvent les vibrations et chocs dynamiques', 'is_correct' => true],
                            ['choice_text' => 'La vitesse devient toujours infinie', 'is_correct' => false],
                            ['choice_text' => 'La distance parcourue devient indépendante du profil', 'is_correct' => false],
                            ['choice_text' => 'Le profil supprime toute contrainte sur les actionneurs', 'is_correct' => false],
                        ],
                        'explanation' => 'Les profils à jerk limité réduisent les variations brusques d’accélération.',
                    ],

                    [
                        'question' => 'Pourquoi la continuité de l’accélération est-elle importante dans un mouvement mécanique rapide ?',
                        'choices' => [
                            ['choice_text' => 'Elle peut limiter les excitations brusques de la structure et des actionneurs', 'is_correct' => true],
                            ['choice_text' => 'Elle garantit que la vitesse est constante', 'is_correct' => false],
                            ['choice_text' => 'Elle rend les masses indépendantes du temps', 'is_correct' => false],
                            ['choice_text' => 'Elle supprime toutes les forces externes', 'is_correct' => false],
                        ],
                        'explanation' => 'Les discontinuités d’accélération imposent des variations instantanées du jerk et peuvent exciter fortement la structure.',
                    ],

                    [
                        'question' => 'Pourquoi une trajectoire géométriquement parfaite peut-elle être irréalisable dynamiquement ?',
                        'choices' => [
                            ['choice_text' => 'Les vitesses, accélérations ou jerk requis peuvent dépasser les limites du système', 'is_correct' => true],
                            ['choice_text' => 'La géométrie détermine toujours directement les capacités de l’actionneur', 'is_correct' => false],
                            ['choice_text' => 'Toute trajectoire géométrique est automatiquement réalisable', 'is_correct' => false],
                            ['choice_text' => 'Les actionneurs ont toujours une puissance infinie', 'is_correct' => false],
                        ],
                        'explanation' => 'La faisabilité dépend à la fois de la géométrie et des contraintes temporelles du mécanisme.',
                    ],

                    [
                        'question' => 'Pourquoi ralentir volontairement un mécanisme près d’une zone de forte courbure peut-il réduire les sollicitations ?',
                        'choices' => [
                            ['choice_text' => 'L’accélération normale varie comme v²/ρ', 'is_correct' => true],
                            ['choice_text' => 'La masse diminue avec la vitesse', 'is_correct' => false],
                            ['choice_text' => 'La courbure disparaît à basse vitesse', 'is_correct' => false],
                            ['choice_text' => 'La vitesse ne joue aucun rôle dans l’accélération normale', 'is_correct' => false],
                        ],
                        'explanation' => 'Une réduction de la vitesse diminue quadratiquement l’accélération normale nécessaire.',
                    ],

                    [
                        'question' => 'Pourquoi une interpolation indépendante de chaque coordonnée peut-elle produire une trajectoire cartésienne indésirable ?',
                        'choices' => [
                            ['choice_text' => Les composantes peuvent respecter individuellement leurs contraintes tout en produisant une trajectoire globale non optimale', 'is_correct' => true],
                            ['choice_text' => 'Les coordonnées sont toujours physiquement indépendantes', 'is_correct' => false],
                            ['choice_text' => 'Une trajectoire cartésienne n’a aucune relation avec les composantes', 'is_correct' => false],
                            ['choice_text' => 'L’interpolation indépendante garantit toujours une ligne droite', 'is_correct' => false],
                        ],
                        'explanation' => 'Les composantes doivent être considérées conjointement lorsque la forme de trajectoire ou les contraintes globales sont importantes.',
                    ],

                    [
                        'question' => 'Pourquoi la vérification des limites de vitesse et accélération doit-elle être effectuée après génération d’une trajectoire ?',
                        'choices' => [
                            ['choice_text' => 'Les propriétés du profil généré peuvent dépasser localement les contraintes imposées', 'is_correct' => true],
                            ['choice_text' => 'Une trajectoire mathématique respecte automatiquement toutes les limites', 'is_correct' => false],
                            ['choice_text' => 'Les limites ne dépendent jamais du temps', 'is_correct' => false],
                            ['choice_text' => 'La vitesse n’est pas une grandeur calculable', 'is_correct' => false],
                        ],
                        'explanation' => 'Une trajectoire doit être vérifiée sur tout l’intervalle temporel, pas seulement à ses extrémités.',
                    ],

                    [
                        'question' => 'Pourquoi l’optimisation d’une trajectoire peut-elle nécessiter plusieurs critères simultanés ?',
                        'choices' => [
                            ['choice_text' => 'Temps de mouvement, précision, énergie, contraintes mécaniques et confort peuvent être contradictoires', 'is_correct' => true],
                            ['choice_text' => 'Tous les objectifs mécaniques sont toujours équivalents', 'is_correct' => false],
                            ['choice_text' => 'Une trajectoire possède toujours un seul critère pertinent', 'is_correct' => false],
                            ['choice_text' => 'L’énergie n’a aucun rapport avec une trajectoire', 'is_correct' => false],
                        ],
                        'explanation' => 'Les problèmes industriels de mouvement sont souvent multi-objectifs et nécessitent des compromis.',
                    ],
                ],
            ],

            // ============================================================
            // QUIZ 6 — Cinématique orbitale et spatiale
            // ============================================================

            [
                'title' => 'Cinématique orbitale et spatiale',
                'description' => 'Analyse professionnelle des trajectoires orbitales et des mouvements relatifs spatiaux.',
                'questions' => [

                    [
                        'question' => 'Dans une orbite circulaire idéale, la vitesse du satellite est tangentielle à...',
                        'choices' => [
                            ['choice_text' => 'La trajectoire orbitale', 'is_correct' => true],
                            ['choice_text' => 'La direction radiale', 'is_correct' => false],
                            ['choice_text' => 'La direction opposée à la vitesse', 'is_correct' => false],
                            ['choice_text' => 'L’axe de rotation terrestre dans tous les cas', 'is_correct' => false],
                        ],
                        'explanation' => 'La vitesse orbitale est tangentielle tandis que l’accélération gravitationnelle est dirigée radialement vers l’astre attracteur.',
                    ],

                    [
                        'question' => 'Dans une orbite circulaire, quelle relation cinématique lie vitesse linéaire et vitesse angulaire ?',
                        'choices' => [
                            ['choice_text' => 'v = rω', 'is_correct' => true],
                            ['choice_text' => 'v = r/ω', 'is_correct' => false],
                            ['choice_text' => 'v = rω²', 'is_correct' => false],
                            ['choice_text' => 'v = ω/r²', 'is_correct' => false],
                        ],
                        'explanation' => 'La vitesse tangentielle d’une orbite circulaire est v = rω.',
                    ],

                    [
                        'question' => 'Pourquoi un satellite en orbite elliptique ne possède-t-il généralement pas une vitesse constante en norme ?',
                        'choices' => [
                            ['choice_text' => 'Sa distance à l’astre et donc sa dynamique orbitale varient au cours de l’orbite', 'is_correct' => true],
                            ['choice_text' => 'La masse du satellite change continuellement', 'is_correct' => false],
                            ['choice_text' => 'La gravité disparaît entre deux points', 'is_correct' => false],
                            ['choice_text' => 'L’ellipse impose une vitesse constante', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans une orbite elliptique, la vitesse varie afin de satisfaire les lois de conservation et la dynamique gravitationnelle.',
                    ],

                    [
                        'question' => 'Quelle grandeur cinématique est particulièrement utile pour décrire l’orientation instantanée d’un véhicule spatial en rotation ?',
                        'choices' => [
                            ['choice_text' => 'La vitesse angulaire', 'is_correct' => true],
                            ['choice_text' => 'La masse', 'is_correct' => false],
                            ['choice_text' => 'La distance radiale uniquement', 'is_correct' => false],
                            ['choice_text' => 'La température', 'is_correct' => false],
                        ],
                        'explanation' => 'La vitesse angulaire décrit la variation temporelle de l’orientation.',
                    ],

                    [
                        'question' => 'Pourquoi les quaternions sont-ils utilisés en cinématique spatiale ?',
                        'choices' => [
                            ['choice_text' => 'Ils permettent de représenter les rotations tridimensionnelles sans certaines singularités des angles d’Euler', 'is_correct' => true],
                            ['choice_text' => 'Ils décrivent uniquement les translations', 'is_correct' => false],
                            ['choice_text' => 'Ils remplacent la position spatiale', 'is_correct' => false],
                            ['choice_text' => 'Ils rendent les rotations linéaires dans tous les cas', 'is_correct' => false],
                        ],
                        'explanation' => 'Les quaternions offrent une représentation compacte des orientations et évitent notamment les singularités cinématiques associées à certaines paramétrisations angulaires.',
                    ],

                    [
                        'question' => 'Pourquoi les angles d’Euler peuvent-ils produire un problème de singularité appelé blocage de cardan ?',
                        'choices' => [
                            ['choice_text' => 'Deux axes de rotation peuvent devenir alignés et faire perdre un degré de liberté local', 'is_correct' => true],
                            ['choice_text' => 'La masse du véhicule devient nulle', 'is_correct' => false],
                            ['choice_text' => 'La vitesse linéaire devient infinie dans tout repère', 'is_correct' => false],
                            ['choice_text' => 'La gravité est annulée', 'is_correct' => false],
                        ],
                        'explanation' => 'Certaines configurations d’angles d’Euler rendent la représentation non bijective et provoquent une perte locale de degré de liberté.',
                    ],

                    [
                        'question' => 'Pourquoi la propagation d’une petite erreur de vitesse peut-elle devenir importante sur une trajectoire spatiale longue ?',
                        'choices' => [
                            ['choice_text' => 'L’erreur s’intègre dans le temps et peut produire une erreur de position croissante', 'is_correct' => true],
                            ['choice_text' => 'Les erreurs de vitesse disparaissent toujours instantanément', 'is_correct' => false],
                            ['choice_text' => 'La position est indépendante de la vitesse', 'is_correct' => false],
                            ['choice_text' => 'La gravité annule toute erreur de navigation', 'is_correct' => false],
                        ],
                        'explanation' => 'La position étant l’intégrale de la vitesse, une erreur persistante de vitesse se traduit par une dérive positionnelle.',
                    ],

                    [
                        'question' => 'Pourquoi la navigation inertielle doit-elle estimer simultanément position, vitesse et orientation ?',
                        'choices' => [
                            ['choice_text' => 'Les erreurs dans ces trois états sont couplées par l’intégration et les transformations de repères', 'is_correct' => true],
                            ['choice_text' => 'La position seule suffit toujours', 'is_correct' => false],
                            ['choice_text' => 'L’orientation n’influence jamais les mesures inertielles', 'is_correct' => false],
                            ['choice_text' => 'La vitesse ne peut pas être intégrée', 'is_correct' => false],
                        ],
                        'explanation' => 'Les systèmes inertiels calculent les états à partir d’accélérations et vitesses angulaires mesurées dans des repères variables.',
                    ],

                    [
                        'question' => 'Pourquoi la cinématique relative est-elle utile pour un rendez-vous orbital ?',
                        'choices' => [
                            ['choice_text' => 'Elle décrit directement la position et la vitesse d’un véhicule par rapport à un autre', 'is_correct' => true],
                            ['choice_text' => 'Elle élimine la nécessité de connaître toute trajectoire', 'is_correct' => false],
                            ['choice_text' => 'Elle rend les deux véhicules immobiles dans tous les repères', 'is_correct' => false],
                            ['choice_text' => 'Elle supprime les effets gravitationnels', 'is_correct' => false],
                        ],
                        'explanation' => 'Le contrôle de rendez-vous repose notamment sur des états relatifs de position, vitesse et orientation.',
                    ],

                    [
                        'question' => 'Pourquoi une représentation cinématique appropriée est-elle essentielle à la commande d’un véhicule spatial ?',
                        'choices' => [
                            ['choice_text' => 'Les erreurs de position, vitesse et attitude doivent être estimées dans des repères cohérents pour calculer les commandes', 'is_correct' => true],
                            ['choice_text' => 'Les commandes sont indépendantes de la cinématique', 'is_correct' => false],
                            ['choice_text' => 'La trajectoire spatiale ne possède aucune contrainte géométrique', 'is_correct' => false],
                            ['choice_text' => 'L’orientation n’a aucune influence sur le mouvement', 'is_correct' => false],
                        ],
                        'explanation' => 'Une bonne représentation de l’état cinématique est fondamentale pour la navigation et le contrôle.',
                    ],
                ],
            ],

            // ============================================================
            // QUIZ 7 — Validation et incertitudes cinématiques
            // ============================================================

            [
                'title' => 'Validation des modèles cinématiques',
                'description' => 'Identification, erreurs de mesure, propagation d’incertitudes et validation de modèles cinématiques.',
                'questions' => [

                    [
                        'question' => 'Pourquoi la mesure de position seule n’est-elle généralement pas suffisante pour déterminer précisément une vitesse ?',
                        'choices' => [
                            ['choice_text' => 'La vitesse dépend de la dérivée temporelle de la position et est sensible au bruit de mesure', 'is_correct' => true],
                            ['choice_text' => 'La position et la vitesse sont toujours identiques', 'is_correct' => false],
                            ['choice_text' => 'La dérivée supprime automatiquement toute erreur', 'is_correct' => false],
                            ['choice_text' => 'La vitesse ne peut pas être calculée à partir de positions', 'is_correct' => false],
                        ],
                        'explanation' => 'La dérivation amplifie souvent le bruit de mesure, ce qui nécessite filtrage ou estimation appropriée.',
                    ],

                    [
                        'question' => 'Pourquoi l’estimation numérique d’une accélération à partir de positions mesurées est-elle particulièrement sensible au bruit ?',
                        'choices' => [
                            ['choice_text' => 'Elle implique généralement une seconde dérivation temporelle', 'is_correct' => true],
                            ['choice_text' => 'L’accélération est indépendante de la position', 'is_correct' => false],
                            ['choice_text' => 'Le bruit disparaît après deux dérivations', 'is_correct' => false],
                            ['choice_text' => 'La position est toujours exacte expérimentalement', 'is_correct' => false],
                        ],
                        'explanation' => 'Chaque dérivation numérique tend à amplifier les composantes rapides du bruit ; une seconde dérivation est donc particulièrement sensible.',
                    ],

                    [
                        'question' => 'Pourquoi utilise-t-on parfois un filtre avant d’estimer la vitesse ou l’accélération à partir de mesures de position ?',
                        'choices' => [
                            ['choice_text' => 'Pour réduire le bruit qui serait amplifié par la dérivation', 'is_correct' => true],
                            ['choice_text' => 'Pour modifier arbitrairement la trajectoire réelle', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer toute dynamique physique', 'is_correct' => false],
                            ['choice_text' => 'Pour rendre les capteurs parfaits', 'is_correct' => false],
                        ],
                        'explanation' => 'Le filtrage réduit généralement le bruit avant dérivation, avec un compromis entre bruit et retard/distorsion.',
                    ],

                    [
                        'question' => 'Pourquoi un filtrage trop agressif peut-il devenir problématique dans une estimation cinématique ?',
                        'choices' => [
                            ['choice_text' => 'Il peut introduire un retard ou atténuer des dynamiques physiques réelles', 'is_correct' => true],
                            ['choice_text' => 'Il augmente toujours la précision temporelle', 'is_correct' => false],
                            ['choice_text' => 'Il supprime uniquement le bruit sans modifier le signal', 'is_correct' => false],
                            ['choice_text' => 'Il n’a aucun effet sur la phase', 'is_correct' => false],
                        ],
                        'explanation' => 'Un filtre modifie généralement le signal et peut masquer des phénomènes rapides ou introduire un déphasage.',
                    ],

                    [
                        'question' => 'Pourquoi comparer une trajectoire mesurée à une trajectoire simulée sur plusieurs expériences ?',
                        'choices' => [
                            ['choice_text' => 'Pour vérifier la capacité du modèle à prédire des conditions variées', 'is_correct' => true],
                            ['choice_text' => 'Pour garantir qu’une seule expérience suffit toujours', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer les erreurs expérimentales', 'is_correct' => false],
                            ['choice_text' => 'Pour rendre le modèle indépendant des paramètres', 'is_correct' => false],
                        ],
                        'explanation' => 'Une validation sur plusieurs scénarios teste la robustesse plutôt que l’ajustement à un seul cas.',
                    ],

                    [
                        'question' => 'Pourquoi faut-il distinguer erreur systématique et erreur aléatoire dans une mesure cinématique ?',
                        'choices' => [
                            ['choice_text' => 'Les stratégies de correction et d’estimation ne sont pas les mêmes', 'is_correct' => true],
                            ['choice_text' => 'Les deux erreurs sont toujours identiques', 'is_correct' => false],
                            ['choice_text' => 'Les erreurs systématiques disparaissent en répétant une seule mesure', 'is_correct' => false],
                            ['choice_text' => 'Les erreurs aléatoires ont toujours le même signe', 'is_correct' => false],
                        ],
                        'explanation' => 'Une erreur systématique peut nécessiter calibration ou correction, alors qu’une erreur aléatoire est souvent traitée statistiquement.',
                    ],

                    [
                        'question' => 'Pourquoi la synchronisation temporelle de plusieurs capteurs est-elle essentielle pour reconstruire une trajectoire tridimensionnelle ?',
                        'choices' => [
                            ['choice_text' => 'Des horodatages incohérents créent des erreurs artificielles dans les vitesses et accélérations estimées', 'is_correct' => true],
                            ['choice_text' => 'Les capteurs ne mesurent jamais des données temporelles', 'is_correct' => false],
                            ['choice_text' => 'La synchronisation ne concerne que les systèmes thermiques', 'is_correct' => false],
                            ['choice_text' => 'Le temps n’intervient pas dans la cinématique', 'is_correct' => false],
                        ],
                        'explanation' => 'La cinématique dépend explicitement du temps ; des décalages entre capteurs peuvent déformer les relations temporelles.',
                    ],

                    [
                        'question' => 'Pourquoi une référence spatiale commune est-elle nécessaire pour fusionner plusieurs mesures de position ?',
                        'choices' => [
                            ['choice_text' => 'Les mesures doivent être exprimées dans des repères compatibles ou transformées correctement', 'is_correct' => true],
                            ['choice_text' => 'Tous les capteurs utilisent automatiquement le même repère physique', 'is_correct' => false],
                            ['choice_text' => 'La position est indépendante du repère', 'is_correct' => false],
                            ['choice_text' => 'Les rotations de repère n’affectent jamais les coordonnées', 'is_correct' => false],
                        ],
                        'explanation' => 'La fusion de données suppose que les systèmes de coordonnées soient correctement définis et transformés.',
                    ],

                    [
                        'question' => 'Pourquoi l’identification des paramètres géométriques d’un mécanisme peut-elle être aussi importante que l’estimation des paramètres dynamiques ?',
                        'choices' => [
                            ['choice_text' => 'Une erreur géométrique peut directement produire une erreur de position et de vitesse de l’effecteur', 'is_correct' => true],
                            ['choice_text' => 'La géométrie n’influence jamais la cinématique', 'is_correct' => false],
                            ['choice_text' => 'Les paramètres géométriques ne peuvent pas être mesurés', 'is_correct' => false],
                            ['choice_text' => 'La dynamique détermine toujours exactement la géométrie', 'is_correct' => false],
                        ],
                        'explanation' => 'Les longueurs, offsets et orientations des articulations déterminent directement les transformations cinématiques.',
                    ],

                    [
                        'question' => 'Pourquoi une validation expérimentale doit-elle couvrir les configurations extrêmes d’un mécanisme ?',
                        'choices' => [
                            ['choice_text' => 'Les erreurs et singularités peuvent être amplifiées dans certaines configurations', 'is_correct' => true],
                            ['choice_text' => 'Toutes les configurations ont toujours exactement la même sensibilité', 'is_correct' => false],
                            ['choice_text' => 'Les configurations extrêmes n’existent jamais physiquement', 'is_correct' => false],
                            ['choice_text' => 'Une seule configuration représente toujours tout le domaine', 'is_correct' => false],
                        ],
                        'explanation' => 'Les mécanismes peuvent présenter des configurations mal conditionnées ou particulièrement sensibles aux incertitudes.',
                    ],
                ],
            ],

            // ============================================================
            // QUIZ 8 — Analyse professionnelle intégrée
            // ============================================================

            [
                'title' => 'Analyse cinématique professionnelle intégrée',
                'description' => 'Problèmes intégrant mouvement relatif, corps rigides, courbure, trajectoires et validation.',
                'questions' => [

                    [
                        'question' => 'Une particule possède une vitesse de norme 20 m/s et se déplace instantanément sur une trajectoire de rayon de courbure 50 m. Quelle est son accélération normale ?',
                        'choices' => [
                            ['choice_text' => '8 m/s²', 'is_correct' => true],
                            ['choice_text' => '2,5 m/s²', 'is_correct' => false],
                            ['choice_text' => '10 m/s²', 'is_correct' => false],
                            ['choice_text' => '20 m/s²', 'is_correct' => false],
                        ],
                        'explanation' => 'an = v²/ρ = 20²/50 = 8 m/s².',
                    ],

                    [
                        'question' => 'La même particule possède une accélération tangentielle de 6 m/s². Quelle est la norme de son accélération totale ?',
                        'choices' => [
                            ['choice_text' => '10 m/s²', 'is_correct' => true],
                            ['choice_text' => '14 m/s²', 'is_correct' => false],
                            ['choice_text' => '8 m/s²', 'is_correct' => false],
                            ['choice_text' => '48 m/s²', 'is_correct' => false],
                        ],
                        'explanation' => 'a = √(at² + an²) = √(36 + 64) = 10 m/s².',
                    ],

                    [
                        'question' => 'Un bras robotique possède une vitesse articulaire q̇ et une jacobienne J. Quelle relation donne la vitesse cartésienne de l’effecteur ?',
                        'choices' => [
                            ['choice_text' => 'v = Jq̇', 'is_correct' => true],
                            ['choice_text' => 'v = J/q̇', 'is_correct' => false],
                            ['choice_text' => 'v = q̇/J²', 'is_correct' => false],
                            ['choice_text' => 'v = J + q̇²', 'is_correct' => false],
                        ],
                        'explanation' => 'La relation différentielle fondamentale est v = J(q)q̇.',
                    ],

                    [
                        'question' => 'Pourquoi une grande valeur d’un élément de la jacobienne ne signifie-t-elle pas nécessairement une grande vitesse d’effecteur ?',
                        'choices' => [
                            ['choice_text' => 'La vitesse dépend de la combinaison de toutes les contributions articulaires', 'is_correct' => true],
                            ['choice_text' => 'La jacobienne est toujours scalaire', 'is_correct' => false],
                            ['choice_text' => 'Les vitesses articulaires n’ont aucun effet', 'is_correct' => false],
                            ['choice_text' => 'La position de l’effecteur détermine seule la vitesse', 'is_correct' => false],
                        ],
                        'explanation' => 'La multiplication matricielle Jq̇ combine toutes les colonnes de J pondérées par les vitesses articulaires.',
                    ],

                    [
                        'question' => 'Un disque tourne avec ω = 20 rad/s et α = 5 rad/s². Pour un point situé à 0,2 m de l’axe, quelle est l’accélération tangentielle ?',
                        'choices' => [
                            ['choice_text' => '1 m/s²', 'is_correct' => true],
                            ['choice_text' => '4 m/s²', 'is_correct' => false],
                            ['choice_text' => '20 m/s²', 'is_correct' => false],
                            ['choice_text' => '100 m/s²', 'is_correct' => false],
                        ],
                        'explanation' => 'at = Rα = 0,2 × 5 = 1 m/s².',
                    ],

                    [
                        'question' => 'Pour ce même point, quelle est son accélération normale ?',
                        'choices' => [
                            ['choice_text' => '80 m/s²', 'is_correct' => true],
                            ['choice_text' => '20 m/s²', 'is_correct' => false],
                            ['choice_text' => '100 m/s²', 'is_correct' => false],
                            ['choice_text' => '4 m/s²', 'is_correct' => false],
                        ],
                        'explanation' => 'an = Rω² = 0,2 × 400 = 80 m/s².',
                    ],

                    [
                        'question' => 'Pourquoi une erreur de 1 % sur une longueur d’un mécanisme peut-elle conduire à une erreur supérieure à 1 % sur une position d’effecteur dans certaines configurations ?',
                        'choices' => [
                            ['choice_text' => 'La sensibilité géométrique dépend de la configuration et peut amplifier certaines erreurs', 'is_correct' => true],
                            ['choice_text' => 'Les erreurs géométriques ne se propagent jamais', 'is_correct' => false],
                            ['choice_text' => 'La position d’effecteur est toujours linéaire par rapport à chaque paramètre', 'is_correct' => false],
                            ['choice_text' => 'Les longueurs articulaires n’influencent pas la position', 'is_correct' => false],
                        ],
                        'explanation' => 'La propagation des incertitudes dépend de la jacobienne des paramètres géométriques et de la configuration.',
                    ],

                    [
                        'question' => 'Pourquoi une trajectoire doit-elle être vérifiée en termes de position, vitesse, accélération et jerk dans une application de haute performance ?',
                        'choices' => [
                            ['choice_text' => 'Une trajectoire peut respecter la position finale tout en violant des contraintes cinématiques intermédiaires', 'is_correct' => true],
                            ['choice_text' => 'La position finale suffit toujours', 'is_correct' => false],
                            ['choice_text' => 'Le jerk n’a aucune influence mécanique', 'is_correct' => false],
                            ['choice_text' => 'Les contraintes intermédiaires sont toujours identiques aux contraintes finales', 'is_correct' => false],
                        ],
                        'explanation' => 'Le respect des conditions finales ne garantit pas la faisabilité pendant toute la trajectoire.',
                    ],

                    [
                        'question' => 'Pourquoi les singularités cinématiques doivent-elles être identifiées avant l’exécution d’une trajectoire robotique ?',
                        'choices' => [
                            ['choice_text' => 'Elles peuvent nécessiter des vitesses articulaires très élevées ou rendre certaines directions de mouvement difficiles à produire', 'is_correct' => true],
                            ['choice_text' => 'Elles rendent toujours le robot physiquement cassé', 'is_correct' => false],
                            ['choice_text' => 'Elles suppriment les degrés de liberté mécaniques de façon permanente', 'is_correct' => false],
                            ['choice_text' => 'Elles augmentent toujours la précision', 'is_correct' => false],
                        ],
                        'explanation' => 'La proximité d’une singularité peut conduire à de grandes commandes articulaires pour une petite vitesse cartésienne demandée.',
                    ],

                    [
                        'question' => 'Pourquoi la modélisation cinématique professionnelle doit-elle être accompagnée d’une analyse des incertitudes ?',
                        'choices' => [
                            ['choice_text' => 'Les erreurs de géométrie, de capteurs, de synchronisation et de calcul influencent les performances réelles', 'is_correct' => true],
                            ['choice_text' => 'Un modèle exact ne possède jamais d’incertitude expérimentale', 'is_correct' => false],
                            ['choice_text' => 'Les capteurs sont toujours parfaits', 'is_correct' => false],
                            ['choice_text' => 'Les incertitudes n’affectent que la thermodynamique', 'is_correct' => false],
                        ],
                        'explanation' => 'Un modèle cinématique n’est utile industriellement que si ses erreurs et limites de validité sont quantifiées.',
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
                    'difficulty' => 'Professional',
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

                // Mélange des choix afin que la position de la bonne
                // réponse ne soit pas prédictible.
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