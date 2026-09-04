<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class ClassicalMechanicsProfessionalSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'classical-mechanics')->firstOrFail();

        $quizzes = [

            // ============================================================
            // QUIZ 1 — Mécanique analytique professionnelle
            // ============================================================

            [
                'title' => 'Mécanique analytique et systèmes complexes',
                'description' => 'Formulation lagrangienne, coordonnées généralisées, contraintes, symétries et analyse de systèmes mécaniques complexes.',
                'questions' => [

                    [
                        'question' => 'Pour un système décrit par un lagrangien L(q, q̇, t), quelle équation gouverne une coordonnée généralisée q sans force non conservative généralisée ?',
                        'choices' => [
                            ['choice_text' => 'd/dt(∂L/∂q̇) - ∂L/∂q = 0', 'is_correct' => true],
                            ['choice_text' => '∂L/∂q + ∂L/∂q̇ = 0', 'is_correct' => false],
                            ['choice_text' => 'dL/dt = 0 dans tous les cas', 'is_correct' => false],
                            ['choice_text' => 'L = q + q̇', 'is_correct' => false],
                        ],
                        'explanation' => 'L’équation d’Euler-Lagrange fournit l’équation du mouvement pour chaque coordonnée généralisée indépendante.',
                    ],

                    [
                        'question' => 'Pourquoi un choix judicieux de coordonnées généralisées est-il particulièrement important dans un système multibody ?',
                        'choices' => [
                            ['choice_text' => 'Il peut intégrer certaines contraintes et réduire considérablement le nombre de variables indépendantes', 'is_correct' => true],
                            ['choice_text' => 'Il rend toutes les forces nulles', 'is_correct' => false],
                            ['choice_text' => 'Il élimine toujours les non-linéarités', 'is_correct' => false],
                            ['choice_text' => 'Il garantit une solution analytique fermée', 'is_correct' => false],
                        ],
                        'explanation' => 'Des coordonnées adaptées réduisent la dimension du problème et permettent d’incorporer naturellement certaines contraintes géométriques.',
                    ],

                    [
                        'question' => 'Une coordonnée généralisée q est cyclique dans le lagrangien. Quelle quantité associée est conservée ?',
                        'choices' => [
                            ['choice_text' => Le moment conjugué p_q = ∂L/∂q̇', 'is_correct' => true],
                            ['choice_text' => 'La coordonnée q elle-même', 'is_correct' => false],
                            ['choice_text' => 'La vitesse q̇ dans tous les cas', 'is_correct' => false],
                            ['choice_text' => 'L’énergie potentielle uniquement', 'is_correct' => false],
                        ],
                        'explanation' => 'Si ∂L/∂q = 0, l’équation d’Euler-Lagrange impose d(p_q)/dt = 0.',
                    ],

                    [
                        'question' => 'Si le lagrangien d’un système ne dépend pas explicitement du temps, quelle quantité est généralement conservée sous les conditions usuelles ?',
                        'choices' => [
                            ['choice_text' => L’énergie associée au système, lorsqu’elle est définie de manière appropriée', 'is_correct' => true],
                            ['choice_text' => 'Toutes les coordonnées généralisées', 'is_correct' => false],
                            ['choice_text' => 'Toutes les vitesses', 'is_correct' => false],
                            ['choice_text' => 'La position du centre de masse dans tous les cas', 'is_correct' => false],
                        ],
                        'explanation' => 'L’invariance temporelle du lagrangien conduit à une quantité conservée correspondant à l’intégrale d’énergie dans les systèmes usuels.',
                    ],

                    [
                        'question' => 'Dans un système soumis uniquement à des forces conservatives, quelle fonction joue un rôle central dans la formulation lagrangienne classique ?',
                        'choices' => [
                            ['choice_text' => 'Le potentiel V(q)', 'is_correct' => true],
                            ['choice_text' => 'La puissance dissipée', 'is_correct' => false],
                            ['choice_text' => 'La température absolue', 'is_correct' => false],
                            ['choice_text' => 'La viscosité dynamique', 'is_correct' => false],
                        ],
                        'explanation' => 'Pour des forces conservatives, le potentiel permet de construire L = T - V et de représenter les forces par dérivation du potentiel.',
                    ],

                    [
                        'question' => 'Pourquoi la formulation lagrangienne est-elle particulièrement adaptée aux systèmes à contraintes holonomes ?',
                        'choices' => [
                            ['choice_text' => 'Les contraintes peuvent souvent être incorporées directement dans les coordonnées indépendantes', 'is_correct' => true],
                            ['choice_text' => 'Les contraintes holonomes disparaissent physiquement', 'is_correct' => false],
                            ['choice_text' => 'Les forces de contact deviennent toujours nulles', 'is_correct' => false],
                            ['choice_text' => 'Le système devient automatiquement linéaire', 'is_correct' => false],
                        ],
                        'explanation' => 'Le choix des coordonnées permet souvent d’éviter d’introduire explicitement certaines réactions de contrainte idéales.',
                    ],

                    [
                        'question' => 'Dans une modélisation robotique, pourquoi les termes de couplage entre articulations sont-ils importants ?',
                        'choices' => [
                            ['choice_text' => 'Le mouvement d’une articulation peut modifier les forces, moments et inerties effectifs des autres', 'is_correct' => true],
                            ['choice_text' => 'Les articulations sont toujours dynamiquement indépendantes', 'is_correct' => false],
                            ['choice_text' => 'Les masses changent nécessairement de valeur', 'is_correct' => false],
                            ['choice_text' => 'Les équations de Newton ne s’appliquent plus aux robots', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans un système multibody, les accélérations et positions articulaires interviennent généralement de manière couplée dans les équations dynamiques.',
                    ],

                    [
                        'question' => 'Pourquoi la linéarisation autour d’un point d’équilibre est-elle souvent utilisée en ingénierie mécanique ?',
                        'choices' => [
                            ['choice_text' => 'Elle fournit un modèle local plus simple permettant notamment l’analyse de stabilité et de petites perturbations', 'is_correct' => true],
                            ['choice_text' => 'Elle rend le système exact pour toutes les amplitudes', 'is_correct' => false],
                            ['choice_text' => 'Elle supprime toutes les forces non conservatives', 'is_correct' => false],
                            ['choice_text' => 'Elle élimine toute dépendance temporelle', 'is_correct' => false],
                        ],
                        'explanation' => 'Une linéarisation donne une approximation locale utile autour d’un état de fonctionnement donné.',
                    ],

                    [
                        'question' => 'Pourquoi une formulation énergétique peut-elle être préférable à une écriture directe des forces dans un système à nombreuses coordonnées ?',
                        'choices' => [
                            ['choice_text' => 'Elle peut simplifier la dérivation des équations et rendre explicites les symétries et conservations', 'is_correct' => true],
                            ['choice_text' => 'Elle empêche toute interaction entre les composants', 'is_correct' => false],
                            ['choice_text' => 'Elle supprime automatiquement les contraintes', 'is_correct' => false],
                            ['choice_text' => 'Elle ne nécessite aucune connaissance physique du système', 'is_correct' => false],
                        ],
                        'explanation' => 'Les formulations énergétiques permettent de traiter efficacement les systèmes complexes et de mettre en évidence certaines structures physiques.',
                    ],

                    [
                        'question' => 'Pourquoi valider un modèle analytique par simulation et expérience reste-t-il indispensable dans une application professionnelle ?',
                        'choices' => [
                            ['choice_text' => 'Les hypothèses idéalisées peuvent limiter la validité du modèle réel', 'is_correct' => true],
                            ['choice_text' => 'Les équations analytiques sont toujours fausses', 'is_correct' => false],
                            ['choice_text' => 'Une expérience ne peut jamais mesurer une grandeur mécanique', 'is_correct' => false],
                            ['choice_text' => 'La simulation remplace automatiquement les hypothèses', 'is_correct' => false],
                        ],
                        'explanation' => 'Un modèle mathématiquement cohérent peut néanmoins négliger des phénomènes réels : frottements, flexibilité, jeux, non-linéarités ou paramètres mal connus.',
                    ],
                ],
            ],

            // ============================================================
            // QUIZ 2 — Mécanique des systèmes multibody
            // ============================================================

            [
                'title' => 'Dynamique des systèmes multibody',
                'description' => 'Analyse professionnelle des mécanismes articulés, matrices d’inertie, couplages et simulations dynamiques.',
                'questions' => [

                    [
                        'question' => 'Dans un robot à plusieurs degrés de liberté, pourquoi la matrice de masse dépend-elle généralement de la configuration ?',
                        'choices' => [
                            ['choice_text' => 'La géométrie et la distribution apparente des masses par rapport aux axes changent avec les coordonnées articulaires', 'is_correct' => true],
                            ['choice_text' => 'La masse physique des composants change continuellement', 'is_correct' => false],
                            ['choice_text' => 'La gravité modifie les masses', 'is_correct' => false],
                            ['choice_text' => 'Les articulations n’ont aucune influence inertielle', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans les systèmes articulés, la configuration modifie la géométrie et donc la façon dont l’inertie globale intervient dans la dynamique.',
                    ],

                    [
                        'question' => 'Une équation robotique de la forme M(q)q̈ + C(q,q̇)q̇ + g(q) = τ représente principalement...',
                        'choices' => [
                            ['choice_text' => 'La dynamique d’un système articulé sous l’effet des inerties, couplages, gravité et couples appliqués', 'is_correct' => true],
                            ['choice_text' => 'Une équation thermique', 'is_correct' => false],
                            ['choice_text' => 'Une loi de transport de masse', 'is_correct' => false],
                            ['choice_text' => 'Une équation d’état d’un gaz parfait', 'is_correct' => false],
                        ],
                        'explanation' => 'Cette forme compacte est classique pour représenter la dynamique des manipulateurs et systèmes multibody.',
                    ],

                    [
                        'question' => 'Pourquoi les couples de Coriolis et centrifuges doivent-ils être pris en compte dans certains systèmes articulés ?',
                        'choices' => [
                            ['choice_text' => 'Les vitesses articulaires créent des termes dynamiques couplés qui influencent les efforts requis', 'is_correct' => true],
                            ['choice_text' => 'Ils remplacent toujours les couples moteurs', 'is_correct' => false],
                            ['choice_text' => 'Ils existent uniquement lorsque le système est immobile', 'is_correct' => false],
                            ['choice_text' => 'Ils sont indépendants de la configuration', 'is_correct' => false],
                        ],
                        'explanation' => 'Les mouvements simultanés des articulations génèrent des contributions de Coriolis et centrifuges dans les équations du mouvement.',
                    ],

                    [
                        'question' => 'Dans une simulation dynamique multibody, pourquoi les singularités cinématiques sont-elles problématiques ?',
                        'choices' => [
                            ['choice_text' => 'Elles peuvent rendre certaines coordonnées ou transformations mal conditionnées et compliquer le contrôle', 'is_correct' => true],
                            ['choice_text' => 'Elles signifient toujours que le système physique est détruit', 'is_correct' => false],
                            ['choice_text' => 'Elles rendent la masse nulle', 'is_correct' => false],
                            ['choice_text' => 'Elles suppriment la gravité', 'is_correct' => false],
                        ],
                        'explanation' => 'Une singularité peut venir de la représentation ou de la configuration mécanique et dégrader les calculs de cinématique et de commande.',
                    ],

                    [
                        'question' => 'Pourquoi une méthode numérique implicite peut-elle être intéressante pour certaines simulations mécaniques raides ?',
                        'choices' => [
                            ['choice_text' => 'Elle peut offrir une meilleure stabilité numérique pour certaines dynamiques comportant plusieurs échelles de temps', 'is_correct' => true],
                            ['choice_text' => 'Elle élimine toujours les erreurs de modélisation', 'is_correct' => false],
                            ['choice_text' => 'Elle garantit une solution exacte quel que soit le pas de temps', 'is_correct' => false],
                            ['choice_text' => 'Elle supprime toutes les contraintes mécaniques', 'is_correct' => false],
                        ],
                        'explanation' => 'Les schémas implicites sont souvent utilisés pour des problèmes raides en raison de leurs propriétés de stabilité.',
                    ],

                    [
                        'question' => 'Pourquoi la conservation de l’énergie peut-elle servir de test de validation d’un solveur mécanique idéal ?',
                        'choices' => [
                            ['choice_text' => Une dérive numérique artificielle de l’énergie peut révéler un problème de discrétisation ou d’intégration', 'is_correct' => true],
                            ['choice_text' => 'L’énergie n’est jamais utile pour valider un calcul', 'is_correct' => false],
                            ['choice_text' => 'Tous les systèmes mécaniques dissipent nécessairement l’énergie', 'is_correct' => false],
                            ['choice_text' => 'La conservation interdit toute simulation numérique', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans un système conservatif, une dérive énergétique non physique peut signaler une mauvaise intégration temporelle ou un pas de temps inadéquat.',
                    ],

                    [
                        'question' => 'Pourquoi le choix du pas de temps est-il particulièrement important dans une simulation de contact mécanique ?',
                        'choices' => [
                            ['choice_text' => Les interactions de contact peuvent introduire des événements très rapides et de fortes non-linéarités', 'is_correct' => true],
                            ['choice_text' => 'Le contact est toujours lent', 'is_correct' => false],
                            ['choice_text' => 'Le pas de temps ne modifie jamais la stabilité', 'is_correct' => false],
                            ['choice_text' => 'Les collisions ne produisent aucune variation dynamique', 'is_correct' => false],
                        ],
                        'explanation' => 'Les contacts, impacts et jeux mécaniques peuvent générer des échelles de temps très courtes qui exigent une résolution temporelle adaptée.',
                    ],

                    [
                        'question' => 'Dans un mécanisme flexible, pourquoi un modèle parfaitement rigide peut-il devenir insuffisant ?',
                        'choices' => [
                            ['choice_text' => Les déformations peuvent modifier les fréquences propres, les efforts et la précision dynamique', 'is_correct' => true],
                            ['choice_text' => 'La rigidité n’a jamais d’effet sur la dynamique', 'is_correct' => false],
                            ['choice_text' => 'Les corps flexibles perdent toute masse', 'is_correct' => false],
                            ['choice_text' => 'La gravité devient négligeable par définition', 'is_correct' => false],
                        ],
                        'explanation' => 'Pour des systèmes rapides ou de grande précision, la flexibilité structurelle peut être une composante essentielle du comportement dynamique.',
                    ],

                    [
                        'question' => 'Pourquoi réaliser une analyse modale d’une structure mécanique ?',
                        'choices' => [
                            ['choice_text' => 'Pour identifier ses fréquences propres et modes de déformation', 'is_correct' => true],
                            ['choice_text' => 'Pour déterminer uniquement sa masse totale', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer les vibrations en calcul', 'is_correct' => false],
                            ['choice_text' => 'Pour remplacer toutes les mesures expérimentales', 'is_correct' => false],
                        ],
                        'explanation' => 'L’analyse modale caractérise les modes propres et aide à prédire les risques de résonance ou les performances vibratoires.',
                    ],

                    [
                        'question' => 'Pourquoi un modèle multibody doit-il souvent être recalibré lorsque la charge utile d’un mécanisme change fortement ?',
                        'choices' => [
                            ['choice_text' => La distribution de masse et les propriétés d’inertie du système sont modifiées', 'is_correct' => true],
                            ['choice_text' => 'La charge utile ne peut jamais modifier la dynamique', 'is_correct' => false],
                            ['choice_text' => 'La gravité disparaît avec une charge plus importante', 'is_correct' => false],
                            ['choice_text' => 'Les articulations deviennent nécessairement sans frottement', 'is_correct' => false],
                        ],
                        'explanation' => 'Une variation importante de charge modifie les inerties et parfois le centre de masse, affectant les équations dynamiques.',
                    ],
                ],
            ],

            // ============================================================
            // QUIZ 3 — Mécanique des solides
            // ============================================================

            [
                'title' => 'Mécanique des solides et contraintes',
                'description' => 'Contraintes, déformations, rotation des solides et analyse des charges mécaniques.',
                'questions' => [

                    [
                        'question' => 'Dans un solide rigide idéal, quelle propriété est imposée par définition ?',
                        'choices' => [
                            ['choice_text' => Les distances entre tous les points du solide restent constantes', 'is_correct' => true],
                            ['choice_text' => 'Les forces internes sont toujours nulles', 'is_correct' => false],
                            ['choice_text' => 'Le solide ne peut jamais tourner', 'is_correct' => false],
                            ['choice_text' => 'Sa masse devient infinie', 'is_correct' => false],
                        ],
                        'explanation' => 'Un solide rigide est un modèle dans lequel les distances internes sont supposées constantes.',
                    ],

                    [
                        'question' => 'Pourquoi une force interne peut-elle ne pas modifier le mouvement du centre de masse d’un système isolé ?',
                        'choices' => [
                            ['choice_text' => Les forces internes se compensent dans la résultante totale selon la troisième loi dans le modèle newtonien approprié', 'is_correct' => true],
                            ['choice_text' => 'Les forces internes sont toujours nulles', 'is_correct' => false],
                            ['choice_text' => 'Le centre de masse n’a aucune masse', 'is_correct' => false],
                            ['choice_text' => 'Les forces internes n’existent que dans les fluides', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans le bilan global d’un système fermé, les forces internes apparaissent par paires et leur résultante globale est nulle dans les hypothèses usuelles.',
                    ],

                    [
                        'question' => 'Pourquoi le tenseur d’inertie est-il nécessaire pour décrire la rotation générale d’un solide ?',
                        'choices' => [
                            ['choice_text' => Il relie la vitesse angulaire au moment cinétique en tenant compte de la distribution spatiale de masse', 'is_correct' => true],
                            ['choice_text' => 'Il décrit uniquement la température', 'is_correct' => false],
                            ['choice_text' => 'Il remplace la masse totale', 'is_correct' => false],
                            ['choice_text' => 'Il ne dépend jamais de l’orientation du solide', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans le cas général, L = I·ω, où I est un tenseur dépendant de la distribution de masse et de l’axe ou de la base choisie.',
                    ],

                    [
                        'question' => 'Pourquoi les axes principaux d’inertie sont-ils particulièrement utiles ?',
                        'choices' => [
                            ['choice_text' => Ils diagonaliseront le tenseur d’inertie dans une base adaptée', 'is_correct' => true],
                            ['choice_text' => 'Ils rendent toutes les forces nulles', 'is_correct' => false],
                            ['choice_text' => 'Ils imposent une vitesse angulaire nulle', 'is_correct' => false],
                            ['choice_text' => 'Ils suppriment les contraintes externes', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans les axes principaux, le tenseur d’inertie est diagonal, ce qui simplifie les équations de rotation.',
                    ],

                    [
                        'question' => 'Lorsqu’un solide subit un moment extérieur résultant non nul, quelle grandeur cinétique évolue directement ?',
                        'choices' => [
                            ['choice_text' => 'Le moment cinétique', 'is_correct' => true],
                            ['choice_text' => 'La masse totale', 'is_correct' => false],
                            ['choice_text' => 'La température uniquement', 'is_correct' => false],
                            ['choice_text' => 'La longueur du solide', 'is_correct' => false],
                        ],
                        'explanation' => 'Le moment extérieur résultant est égal à la dérivée temporelle du moment cinétique dans le cadre classique approprié.',
                    ],

                    [
                        'question' => 'Pourquoi le moment cinétique d’un solide peut-il ne pas être parallèle à sa vitesse angulaire ?',
                        'choices' => [
                            ['choice_text' => Le tenseur d’inertie peut être anisotrope et ne pas être proportionnel à l’identité', 'is_correct' => true],
                            ['choice_text' => 'Le moment cinétique est toujours scalaire', 'is_correct' => false],
                            ['choice_text' => 'La vitesse angulaire n’existe que pour les particules ponctuelles', 'is_correct' => false],
                            ['choice_text' => 'La masse d’un solide est toujours nulle', 'is_correct' => false],
                        ],
                        'explanation' => 'Pour un solide général, L = I·ω et le produit tensoriel peut donner des directions différentes à L et ω.',
                    ],

                    [
                        'question' => 'Dans une structure mécanique soumise à une charge cyclique, pourquoi la contrainte maximale n’est-elle pas l’unique critère important ?',
                        'choices' => [
                            ['choice_text' => La fatigue dépend aussi de l’amplitude, du nombre de cycles, du matériau et des concentrations de contrainte', 'is_correct' => true],
                            ['choice_text' => 'La fatigue ne dépend jamais du nombre de cycles', 'is_correct' => false],
                            ['choice_text' => 'Une charge cyclique est identique à une charge statique', 'is_correct' => false],
                            ['choice_text' => 'Le matériau ne joue aucun rôle', 'is_correct' => false],
                        ],
                        'explanation' => 'La fatigue est un phénomène dépendant du cycle de chargement et peut provoquer une rupture même à des contraintes inférieures à la résistance statique.',
                    ],

                    [
                        'question' => 'Pourquoi une concentration de contrainte autour d’un trou ou d’un angle vif est-elle importante ?',
                        'choices' => [
                            ['choice_text' => 'La contrainte locale peut être nettement supérieure à la contrainte nominale', 'is_correct' => true],
                            ['choice_text' => 'La contrainte devient toujours nulle', 'is_correct' => false],
                            ['choice_text' => 'Les angles vifs réduisent toujours les risques de fatigue', 'is_correct' => false],
                            ['choice_text' => 'La géométrie n’influence jamais la contrainte locale', 'is_correct' => false],
                        ],
                        'explanation' => 'Les discontinuités géométriques perturbent la distribution des contraintes et peuvent devenir des sites critiques de fatigue ou de rupture.',
                    ],

                    [
                        'question' => 'Pourquoi les conditions aux limites sont-elles critiques dans un calcul de structure ?',
                        'choices' => [
                            ['choice_text' => Elles déterminent comment la structure peut se déplacer et transmettre les efforts', 'is_correct' => true],
                            ['choice_text' => 'Elles ne servent qu’à colorer les résultats', 'is_correct' => false],
                            ['choice_text' => 'Elles sont indépendantes de la physique du problème', 'is_correct' => false],
                            ['choice_text' => 'Elles remplacent les propriétés du matériau', 'is_correct' => false],
                        ],
                        'explanation' => 'Un modèle structurel incorrectement contraint peut produire des déplacements ou contraintes totalement non physiques.',
                    ],

                    [
                        'question' => 'Pourquoi l’analyse de convergence d’un modèle éléments finis est-elle essentielle ?',
                        'choices' => [
                            ['choice_text' => Elle vérifie que la solution numérique devient stable lorsque la discrétisation est raffinée', 'is_correct' => true],
                            ['choice_text' => 'Elle garantit que toutes les propriétés du matériau sont exactes', 'is_correct' => false],
                            ['choice_text' => 'Elle supprime automatiquement les erreurs de modèle', 'is_correct' => false],
                            ['choice_text' => 'Elle rend inutile la validation expérimentale', 'is_correct' => false],
                        ],
                        'explanation' => 'Le raffinement du maillage doit conduire vers une solution convergente ; sinon la résolution numérique peut être insuffisante.',
                    ],
                ],
            ],

            // ============================================================
            // QUIZ 4 — Mécanique orbitale professionnelle
            // ============================================================

            [
                'title' => 'Mécanique orbitale et dynamique gravitationnelle',
                'description' => 'Applications professionnelles de la gravitation newtonienne aux trajectoires orbitales et aux transferts.',
                'questions' => [

                    [
                        'question' => 'Pour une orbite circulaire autour d’un astre de masse M, quelle quantité impose directement la valeur de la vitesse orbitale ?',
                        'choices' => [
                            ['choice_text' => 'Le rapport GM/r', 'is_correct' => true],
                            ['choice_text' => 'La masse du satellite seule', 'is_correct' => false],
                            ['choice_text' => 'La température du satellite', 'is_correct' => false],
                            ['choice_text' => 'Le rayon du satellite uniquement', 'is_correct' => false],
                        ],
                        'explanation' => 'La vitesse circulaire vérifie v² = GM/r et ne dépend pas de la masse du satellite dans l’approximation de corps test.',
                    ],

                    [
                        'question' => 'Pourquoi une impulsion tangentielle prograde augmente-t-elle l’énergie orbitale d’un satellite ?',
                        'choices' => [
                            ['choice_text' => Elle augmente la vitesse dans la direction du mouvement et donc l’énergie cinétique', 'is_correct' => true],
                            ['choice_text' => 'Elle diminue toujours la vitesse orbitale', 'is_correct' => false],
                            ['choice_text' => 'Elle modifie directement la masse du satellite', 'is_correct' => false],
                            ['choice_text' => 'Elle annule la gravité', 'is_correct' => false],
                        ],
                        'explanation' => 'Une impulsion prograde augmente la vitesse instantanée, donc l’énergie orbitale et la forme de la trajectoire.',
                    ],

                    [
                        'question' => 'Lors d’un transfert de Hohmann entre deux orbites circulaires coplanaires, pourquoi utilise-t-on deux impulsions principales ?',
                        'choices' => [
                            ['choice_text' => 'Pour entrer sur l’orbite de transfert puis circulariser sur l’orbite finale', 'is_correct' => true],
                            ['choice_text' => 'Parce qu’une orbite circulaire nécessite toujours deux moteurs opposés', 'is_correct' => false],
                            ['choice_text' => 'Pour annuler complètement la gravité', 'is_correct' => false],
                            ['choice_text' => 'Pour modifier la masse du véhicule spatial', 'is_correct' => false],
                        ],
                        'explanation' => 'Le transfert de Hohmann idéal utilise une ellipse de transfert tangente aux deux orbites circulaires.',
                    ],

                    [
                        'question' => 'Dans une orbite elliptique, où la vitesse orbitale est-elle maximale ?',
                        'choices' => [
                            ['choice_text' => Au périapside', 'is_correct' => true],
                            ['choice_text' => 'À l’apoapside', 'is_correct' => false],
                            ['choice_text' => 'Au centre géométrique de l’ellipse', 'is_correct' => false],
                            ['choice_text' => 'Elle est constante sur toute l’ellipse', 'is_correct' => false],
                        ],
                        'explanation' => 'Pour une orbite képlérienne, la conservation du moment cinétique et de l’énergie implique une vitesse maximale au point le plus proche.',
                    ],

                    [
                        'question' => 'Pourquoi la vitesse d’un satellite diminue-t-elle lorsqu’il s’éloigne de l’astre sur une orbite elliptique ?',
                        'choices' => [
                            ['choice_text' => La conservation du moment cinétique et de l’énergie impose l’échange entre énergie potentielle et cinétique', 'is_correct' => true],
                            ['choice_text' => 'La masse du satellite augmente', 'is_correct' => false],
                            ['choice_text' => 'La gravité devient instantanément nulle', 'is_correct' => false],
                            ['choice_text' => 'Le satellite perd nécessairement toute son énergie mécanique', 'is_correct' => false],
                        ],
                        'explanation' => 'Lorsque le satellite monte dans le potentiel gravitationnel, sa vitesse diminue tout en conservant l’énergie mécanique totale.',
                    ],

                    [
                        'question' => 'Pourquoi la masse du satellite n’apparaît-elle pas dans la vitesse orbitale circulaire idéale ?',
                        'choices' => [
                            ['choice_text' => Elle se simplifie entre la force gravitationnelle et la force inertielle dans l’équation du mouvement', 'is_correct' => true],
                            ['choice_text' => 'La masse n’a aucun effet physique', 'is_correct' => false],
                            ['choice_text' => 'Tous les satellites ont nécessairement la même masse', 'is_correct' => false],
                            ['choice_text' => 'La gravité dépend uniquement du satellite', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans GMm/r² = mv²/r, la masse m du satellite se simplifie.',
                    ],

                    [
                        'question' => 'Pourquoi une faible perturbation gravitationnelle d’un troisième corps peut-elle être importante sur une mission longue durée ?',
                        'choices' => [
                            ['choice_text' => 'Une petite accélération cumulative peut produire une variation orbitale significative au fil du temps', 'is_correct' => true],
                            ['choice_text' => 'Les perturbations secondaires sont toujours instantanément infinies', 'is_correct' => false],
                            ['choice_text' => 'Les orbites réelles sont parfaitement immuables', 'is_correct' => false],
                            ['choice_text' => 'Une petite force ne produit jamais d’effet intégré', 'is_correct' => false],
                        ],
                        'explanation' => 'Les perturbations peuvent être faibles instantanément mais devenir importantes lorsqu’elles s’accumulent sur de longues périodes.',
                    ],

                    [
                        'question' => 'Pourquoi les missions orbitales professionnelles nécessitent-elles des modèles plus complets que le simple problème à deux corps ?',
                        'choices' => [
                            ['choice_text' => Il faut notamment considérer les perturbations des autres corps, l’aplatissement de l’astre, la poussée et parfois la pression de radiation', 'is_correct' => true],
                            ['choice_text' => 'La gravité newtonienne cesse toujours d’être valide immédiatement', 'is_correct' => false],
                            ['choice_text' => 'Les satellites perdent leur masse chaque seconde', 'is_correct' => false],
                            ['choice_text' => 'Une seule orbite circulaire existe pour tous les satellites', 'is_correct' => false],
                        ],
                        'explanation' => 'Le problème à deux corps est une approximation de base ; les missions réelles exigent souvent l’inclusion de nombreuses perturbations.',
                    ],

                    [
                        'question' => 'Dans une manœuvre orbitale, pourquoi la direction de l’impulsion est-elle aussi importante que sa norme ?',
                        'choices' => [
                            ['choice_text' => Une impulsion tangentielle, radiale ou normale modifie différemment l’énergie, l’excentricité et l’orientation orbitale', 'is_correct' => true],
                            ['choice_text' => 'Toutes les directions produisent exactement la même orbite', 'is_correct' => false],
                            ['choice_text' => 'La direction n’affecte jamais le moment cinétique', 'is_correct' => false],
                            ['choice_text' => 'La gravité annule toujours la direction de la poussée', 'is_correct' => false],
                        ],
                        'explanation' => 'La décomposition de Δv selon les directions orbitale, radiale et normale détermine différents effets sur les éléments orbitaux.',
                    ],

                    [
                        'question' => 'Pourquoi les marges de Δv sont-elles importantes dans la planification d’une mission orbitale ?',
                        'choices' => [
                            ['choice_text' => Elles permettent de gérer les incertitudes, dispersions et corrections imprévues de trajectoire', 'is_correct' => true],
                            ['choice_text' => 'Parce que les lois orbitales sont toujours imprécises', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’une marge augmente automatiquement le rendement', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’une trajectoire exacte ne peut jamais être calculée', 'is_correct' => false],
                        ],
                        'explanation' => 'Les marges opérationnelles permettent de conserver des réserves pour les erreurs de navigation, les dispersions de poussée et les corrections.',
                    ],
                ],
            ],

            // ============================================================
            // QUIZ 5 — Vibrations professionnelles
            // ============================================================

            [
                'title' => 'Vibrations, dynamique modale et résonance',
                'description' => 'Analyse professionnelle des vibrations, des modes propres, de l’amortissement et des risques de résonance.',
                'questions' => [

                    [
                        'question' => 'Dans une structure à plusieurs degrés de liberté, pourquoi existe-t-il plusieurs fréquences propres ?',
                        'choices' => [
                            ['choice_text' => Chaque mode de vibration possède généralement sa propre fréquence naturelle', 'is_correct' => true],
                            ['choice_text' => 'Une structure ne possède qu’une seule fréquence quelles que soient ses dimensions', 'is_correct' => false],
                            ['choice_text' => 'Les fréquences propres sont uniquement déterminées par la température', 'is_correct' => false],
                            ['choice_text' => 'Elles sont indépendantes de la masse et de la rigidité', 'is_correct' => false],
                        ],
                        'explanation' => 'Un système à plusieurs degrés de liberté possède généralement plusieurs modes propres associés à différentes fréquences.',
                    ],

                    [
                        'question' => 'Pourquoi une analyse modale est-elle utile lors de la conception d’une machine tournante ?',
                        'choices' => [
                            ['choice_text' => Pour éviter que des fréquences d’excitation traversent des modes propres critiques', 'is_correct' => true],
                            ['choice_text' => 'Pour supprimer automatiquement les déséquilibres', 'is_correct' => false],
                            ['choice_text' => 'Pour modifier la masse sans intervention', 'is_correct' => false],
                            ['choice_text' => 'Pour rendre le rotor parfaitement rigide', 'is_correct' => false],
                        ],
                        'explanation' => 'Les vitesses de rotation produisent des excitations périodiques qui peuvent rencontrer les fréquences naturelles de la structure.',
                    ],

                    [
                        'question' => 'Dans un modèle masse-ressort-amortisseur, que représente physiquement le terme cẋ ?',
                        'choices' => [
                            ['choice_text' => Une force dissipative proportionnelle à la vitesse dans le modèle visqueux linéaire', 'is_correct' => true],
                            ['choice_text' => 'Une force conservative proportionnelle à la position', 'is_correct' => false],
                            ['choice_text' => 'Une force gravitationnelle constante', 'is_correct' => false],
                            ['choice_text' => 'Une énergie potentielle', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans le modèle amortisseur visqueux linéaire, la force dissipative est proportionnelle à la vitesse.',
                    ],

                    [
                        'question' => 'Pourquoi une forte amplification à la résonance peut-elle entraîner une défaillance mécanique ?',
                        'choices' => [
                            ['choice_text' => L’amplitude vibratoire élevée peut provoquer des contraintes cycliques excessives', 'is_correct' => true],
                            ['choice_text' => 'La résonance supprime toutes les contraintes', 'is_correct' => false],
                            ['choice_text' => 'La masse disparaît à la fréquence propre', 'is_correct' => false],
                            ['choice_text' => 'La température devient toujours nulle', 'is_correct' => false],
                        ],
                        'explanation' => 'Des amplitudes élevées peuvent produire des contraintes, déplacements et échauffements incompatibles avec la résistance du système.',
                    ],

                    [
                        'question' => 'Une machine tournante possède un déséquilibre mécanique. Quelle fréquence d’excitation est souvent directement liée à la vitesse de rotation ?',
                        'choices' => [
                            ['choice_text' => La fréquence de rotation elle-même', 'is_correct' => true],
                            ['choice_text' => Toujours exactement le double de la fréquence de rotation', 'is_correct' => false],
                            ['choice_text' => Une fréquence indépendante de la vitesse', 'is_correct' => false],
                            ['choice_text' => La température du roulement', 'is_correct' => false],
                        ],
                        'explanation' => 'Un déséquilibre fixe dans le rotor génère généralement une excitation à la fréquence de rotation.',
                    ],

                    [
                        'question' => 'Pourquoi l’amortissement ne peut-il pas toujours être augmenté indéfiniment pour réduire les vibrations ?',
                        'choices' => [
                            ['choice_text' => Un amortissement supplémentaire peut modifier les performances, la réponse dynamique et entraîner des compromis de conception', 'is_correct' => true],
                            ['choice_text' => 'L’amortissement n’a jamais d’effet sur la réponse', 'is_correct' => false],
                            ['choice_text' => 'Un amortissement infini rend toujours la machine optimale', 'is_correct' => false],
                            ['choice_text' => 'L’amortissement ne consomme jamais d’énergie', 'is_correct' => false],
                        ],
                        'explanation' => 'L’amortissement peut réduire les vibrations mais affecter le temps de réponse, les pertes énergétiques ou la dynamique globale.',
                    ],

                    [
                        'question' => 'Pourquoi les vibrations peuvent-elles provoquer une fatigue même si la contrainte maximale instantanée reste inférieure à la résistance statique du matériau ?',
                        'choices' => [
                            ['choice_text' => Les cycles répétés peuvent initier et propager progressivement des fissures', 'is_correct' => true],
                            ['choice_text' => 'Une contrainte inférieure à la résistance statique est toujours sans danger', 'is_correct' => false],
                            ['choice_text' => 'La fatigue n’existe que sous charge thermique', 'is_correct' => false],
                            ['choice_text' => 'Les matériaux ne répondent pas aux cycles de charge', 'is_correct' => false],
                        ],
                        'explanation' => 'La fatigue est une défaillance progressive liée aux cycles de contrainte et peut se produire à des niveaux inférieurs à la rupture statique.',
                    ],

                    [
                        'question' => 'Pourquoi une excitation harmonique proche d’un mode propre doit-elle être étudiée sur toute la bande de fonctionnement ?',
                        'choices' => [
                            ['choice_text' => La vitesse ou la fréquence d’excitation peut varier et traverser une zone de forte amplification', 'is_correct' => true],
                            ['choice_text' => 'Une machine ne change jamais de fréquence d’excitation', 'is_correct' => false],
                            ['choice_text' => 'Les modes propres sont toujours éloignés de toute excitation', 'is_correct' => false],
                            ['choice_text' => 'La résonance n’existe qu’à vitesse nulle', 'is_correct' => false],
                        ],
                        'explanation' => 'Les équipements fonctionnant sur une plage de vitesse peuvent traverser des vitesses critiques où l’amplitude augmente fortement.',
                    ],

                    [
                        'question' => 'Pourquoi les essais vibratoires sont-ils importants même après une simulation modale ?',
                        'choices' => [
                            ['choice_text' => Ils permettent de comparer les fréquences et modes réels aux prédictions du modèle', 'is_correct' => true],
                            ['choice_text' => 'La simulation modale ne peut jamais produire de résultat utile', 'is_correct' => false],
                            ['choice_text' => 'Les essais remplacent toute modélisation', 'is_correct' => false],
                            ['choice_text' => 'Les modes expérimentaux sont indépendants de la structure', 'is_correct' => false],
                        ],
                        'explanation' => 'Les essais servent à valider ou corriger les propriétés du modèle, notamment la rigidité, les masses et les conditions aux limites.',
                    ],

                    [
                        'question' => 'Pourquoi les conditions de montage d’une structure peuvent-elles modifier ses fréquences propres ?',
                        'choices' => [
                            ['choice_text' => 'Les appuis et liaisons changent la rigidité effective et donc la dynamique du système', 'is_correct' => true],
                            ['choice_text' => 'Les conditions de montage ne changent jamais la rigidité', 'is_correct' => false],
                            ['choice_text' => 'Les fréquences propres dépendent uniquement de la couleur du système', 'is_correct' => false],
                            ['choice_text' => 'Les masses deviennent nécessairement nulles', 'is_correct' => false],
                        ],
                        'explanation' => 'Les conditions aux limites font partie intégrante du problème modal et peuvent déplacer sensiblement les fréquences propres.',
                    ],
                ],
            ],

            // ============================================================
            // QUIZ 6 — Commande et dynamique mécanique
            // ============================================================

            [
                'title' => 'Dynamique mécanique et commande',
                'description' => 'Interaction entre modélisation mécanique, stabilité dynamique, commande et performances des systèmes.',
                'questions' => [

                    [
                        'question' => 'Pourquoi le modèle dynamique d’un système mécanique est-il essentiel pour concevoir un contrôleur performant ?',
                        'choices' => [
                            ['choice_text' => Il permet de prédire comment les efforts de commande influencent les mouvements et les erreurs', 'is_correct' => true],
                            ['choice_text' => 'Le contrôleur est totalement indépendant de la dynamique', 'is_correct' => false],
                            ['choice_text' => 'La dynamique ne concerne que les structures immobiles', 'is_correct' => false],
                            ['choice_text' => 'Il permet de supprimer les capteurs', 'is_correct' => false],
                        ],
                        'explanation' => 'La dynamique relie les entrées de commande aux accélérations, vitesses et positions du système.',
                    ],

                    [
                        'question' => 'Dans un système mécanique linéarisé, pourquoi analyse-t-on les valeurs propres de la matrice d’état ?',
                        'choices' => [
                            ['choice_text' => Elles renseignent sur les modes dynamiques et la stabilité locale du système', 'is_correct' => true],
                            ['choice_text' => 'Elles donnent directement la masse totale', 'is_correct' => false],
                            ['choice_text' => 'Elles suppriment toutes les non-linéarités du système réel', 'is_correct' => false],
                            ['choice_text' => 'Elles déterminent uniquement la température', 'is_correct' => false],
                        ],
                        'explanation' => 'Les valeurs propres d’un système linéarisé indiquent notamment les taux de croissance ou décroissance et les fréquences des modes.',
                    ],

                    [
                        'question' => 'Pourquoi une dynamique non modélisée peut-elle provoquer des oscillations inattendues dans une boucle de commande ?',
                        'choices' => [
                            ['choice_text' => Le contrôleur peut interagir avec des modes, retards ou flexibilités absents du modèle simplifié', 'is_correct' => true],
                            ['choice_text' => 'Un contrôleur ne peut jamais interagir avec la mécanique', 'is_correct' => false],
                            ['choice_text' => 'Les retards n’affectent jamais la stabilité', 'is_correct' => false],
                            ['choice_text' => 'Les modes flexibles sont toujours amortis à zéro', 'is_correct' => false],
                        ],
                        'explanation' => 'Les dynamiques oubliées peuvent introduire des pôles supplémentaires et réduire les marges de stabilité.',
                    ],

                    [
                        'question' => 'Pourquoi un gain de commande très élevé peut-il être problématique dans un système mécanique réel ?',
                        'choices' => [
                            ['choice_text' => Il peut amplifier le bruit, exciter des modes non modélisés ou dépasser les limites des actionneurs', 'is_correct' => true],
                            ['choice_text' => 'Un gain élevé ne produit jamais d’effets secondaires', 'is_correct' => false],
                            ['choice_text' => 'Il supprime toujours les vibrations', 'is_correct' => false],
                            ['choice_text' => 'Il rend les capteurs parfaits', 'is_correct' => false],
                        ],
                        'explanation' => 'Un gain élevé améliore parfois le suivi mais peut réduire les marges de stabilité et exciter des dynamiques négligées.',
                    ],

                    [
                        'question' => 'Dans un système mécanique commandé, pourquoi les saturations des actionneurs doivent-elles être modélisées ?',
                        'choices' => [
                            ['choice_text' => Les limitations de force ou de couple peuvent modifier fortement la dynamique en boucle fermée', 'is_correct' => true],
                            ['choice_text' => 'Les actionneurs réels fournissent toujours une force infinie', 'is_correct' => false],
                            ['choice_text' => 'La saturation ne change jamais le mouvement', 'is_correct' => false],
                            ['choice_text' => 'Les limites d’actionnement ne concernent que les systèmes électriques', 'is_correct' => false],
                        ],
                        'explanation' => 'Une saturation casse certaines hypothèses de linéarité et peut provoquer des erreurs de suivi ou des comportements non linéaires.',
                    ],

                    [
                        'question' => 'Pourquoi une compensation gravitationnelle peut-elle simplifier la commande d’un robot ?',
                        'choices' => [
                            ['choice_text' => Elle peut compenser une partie connue du couple nécessaire pour soutenir les articulations', 'is_correct' => true],
                            ['choice_text' => 'Elle supprime toute inertie', 'is_correct' => false],
                            ['choice_text' => 'Elle annule toutes les interactions entre articulations', 'is_correct' => false],
                            ['choice_text' => 'Elle élimine le besoin de capteurs', 'is_correct' => false],
                        ],
                        'explanation' => 'Ajouter un terme de compensation gravitationnelle réduit la charge que le contrôleur doit gérer pour maintenir une configuration.',
                    ],

                    [
                        'question' => 'Pourquoi les retards de mesure sont-ils particulièrement préoccupants dans une boucle mécanique rapide ?',
                        'choices' => [
                            ['choice_text' => Ils ajoutent une phase et peuvent réduire les marges de stabilité', 'is_correct' => true],
                            ['choice_text' => 'Ils augmentent toujours la stabilité', 'is_correct' => false],
                            ['choice_text' => 'Ils n’ont aucun effet sur la phase', 'is_correct' => false],
                            ['choice_text' => 'Ils rendent l’actionneur instantané', 'is_correct' => false],
                        ],
                        'explanation' => 'Les retards introduisent une phase supplémentaire qui peut rapprocher le système d’une instabilité.',
                    ],

                    [
                        'question' => 'Pourquoi une boucle de commande mécanique doit-elle être validée progressivement sur une machine réelle ?',
                        'choices' => [
                            ['choice_text' => Les écarts entre le modèle et la machine réelle peuvent produire des réponses dangereuses à pleine performance', 'is_correct' => true],
                            ['choice_text' => 'Le modèle est toujours exactement représentatif', 'is_correct' => false],
                            ['choice_text' => 'Les systèmes mécaniques ne peuvent pas être endommagés par une commande', 'is_correct' => false],
                            ['choice_text' => 'Les capteurs ont toujours une réponse idéale', 'is_correct' => false],
                        ],
                        'explanation' => 'Une validation par étapes permet d’identifier les écarts, saturations, vibrations et comportements non modélisés avant les essais extrêmes.',
                    ],

                    [
                        'question' => 'Pourquoi la robustesse est-elle importante en commande mécanique professionnelle ?',
                        'choices' => [
                            ['choice_text' => Les paramètres réels peuvent varier avec la charge, la température, l’usure et les conditions de fonctionnement', 'is_correct' => true],
                            ['choice_text' => 'Tous les systèmes ont des paramètres parfaitement constants', 'is_correct' => false],
                            ['choice_text' => 'La robustesse signifie que le système ignore les lois physiques', 'is_correct' => false],
                            ['choice_text' => 'Elle remplace toute calibration', 'is_correct' => false],
                        ],
                        'explanation' => 'Une commande robuste doit maintenir des performances acceptables malgré les variations et incertitudes du système réel.',
                    ],
                ],
            ],

            // ============================================================
            // QUIZ 7 — Simulation numérique et validation
            // ============================================================

            [
                'title' => 'Simulation numérique de systèmes mécaniques',
                'description' => 'Méthodes de simulation, convergence, validation, sensibilité et maîtrise des erreurs numériques.',
                'questions' => [

                    [
                        'question' => 'Pourquoi une étude de convergence temporelle est-elle nécessaire dans une simulation dynamique ?',
                        'choices' => [
                            ['choice_text' => Pour vérifier que le résultat ne dépend pas excessivement du pas de temps choisi', 'is_correct' => true],
                            ['choice_text' => 'Pour supprimer les erreurs expérimentales', 'is_correct' => false],
                            ['choice_text' => 'Pour garantir une solution analytique', 'is_correct' => false],
                            ['choice_text' => 'Pour augmenter artificiellement l’énergie du système', 'is_correct' => false],
                        ],
                        'explanation' => 'En réduisant le pas de temps, on vérifie que la solution numérique converge vers une réponse stable.',
                    ],

                    [
                        'question' => 'Pourquoi une étude de sensibilité est-elle utile dans un modèle mécanique complexe ?',
                        'choices' => [
                            ['choice_text' => Elle identifie les paramètres qui influencent le plus fortement les résultats', 'is_correct' => true],
                            ['choice_text' => 'Elle rend tous les paramètres équivalents', 'is_correct' => false],
                            ['choice_text' => 'Elle supprime les incertitudes physiques', 'is_correct' => false],
                            ['choice_text' => 'Elle évite toute calibration', 'is_correct' => false],
                        ],
                        'explanation' => 'L’analyse de sensibilité permet de hiérarchiser les paramètres influents et de guider les efforts de mesure ou d’optimisation.',
                    ],

                    [
                        'question' => 'Un modèle prédit correctement la fréquence naturelle d’une structure mais sous-estime fortement son amplitude vibratoire réelle. Quelle cause est plausible ?',
                        'choices' => [
                            ['choice_text' => Un amortissement réel ou une excitation réelle mal représentés', 'is_correct' => true],
                            ['choice_text' => 'La fréquence naturelle ne joue aucun rôle', 'is_correct' => false],
                            ['choice_text' => 'La masse doit être nécessairement nulle', 'is_correct' => false],
                            ['choice_text' => 'La gravité est toujours la cause unique', 'is_correct' => false],
                        ],
                        'explanation' => 'La fréquence propre peut être bien modélisée alors que l’excitation ou l’amortissement sont mal estimés, affectant fortement l’amplitude.',
                    ],

                    [
                        'question' => 'Pourquoi comparer plusieurs formulations numériques d’un même problème ?',
                        'choices' => [
                            ['choice_text' => La comparaison peut révéler des erreurs numériques ou des dépendances artificielles à la méthode', 'is_correct' => true],
                            ['choice_text' => 'Toutes les méthodes donnent toujours exactement le même résultat pour n’importe quel pas', 'is_correct' => false],
                            ['choice_text' => 'Une seule méthode est physiquement valide', 'is_correct' => false],
                            ['choice_text' => 'Les méthodes numériques ne dépendent jamais des hypothèses', 'is_correct' => false],
                        ],
                        'explanation' => 'La comparaison de méthodes et d’ordres de convergence peut renforcer la confiance dans la robustesse du résultat numérique.',
                    ],

                    [
                        'question' => 'Pourquoi un maillage trop grossier peut-il être problématique dans une simulation de contrainte ?',
                        'choices' => [
                            ['choice_text' => Il peut manquer les gradients locaux importants autour des discontinuités ou concentrations de contrainte', 'is_correct' => true],
                            ['choice_text' => 'Il garantit toujours une meilleure précision', 'is_correct' => false],
                            ['choice_text' => 'Il rend automatiquement les contraintes nulles', 'is_correct' => false],
                            ['choice_text' => 'Il supprime les conditions aux limites', 'is_correct' => false],
                        ],
                        'explanation' => 'Les zones à forts gradients nécessitent souvent un raffinement local pour représenter correctement le champ mécanique.',
                    ],

                    [
                        'question' => 'Pourquoi raffiner uniquement les zones critiques peut-il être préférable à raffiner uniformément tout le modèle ?',
                        'choices' => [
                            ['choice_text' => Cela augmente la résolution là où elle est nécessaire tout en limitant le coût de calcul', 'is_correct' => true],
                            ['choice_text' => 'Le raffinement global est toujours impossible', 'is_correct' => false],
                            ['choice_text' => 'Les zones non critiques n’ont jamais besoin de calcul', 'is_correct' => false],
                            ['choice_text' => 'Le maillage critique est toujours indépendant de la physique', 'is_correct' => false],
                        ],
                        'explanation' => 'Le raffinement adaptatif ou local permet d’allouer les ressources de calcul là où les gradients ou phénomènes complexes l’exigent.',
                    ],

                    [
                        'question' => 'Pourquoi la calibration des paramètres d’un modèle mécanique sur une seule expérience peut-elle être dangereuse ?',
                        'choices' => [
                            ['choice_text' => Le modèle peut compenser des erreurs structurelles en ajustant artificiellement certains paramètres', 'is_correct' => true],
                            ['choice_text' => 'Une calibration unique garantit toujours la généralité', 'is_correct' => false],
                            ['choice_text' => 'Les paramètres physiques sont toujours connus sans incertitude', 'is_correct' => false],
                            ['choice_text' => 'Une expérience suffit nécessairement à identifier tous les paramètres', 'is_correct' => false],
                        ],
                        'explanation' => 'Une calibration trop limitée peut masquer des erreurs de modèle et produire de mauvaises prédictions hors de la condition utilisée pour ajuster les paramètres.',
                    ],

                    [
                        'question' => 'Pourquoi la validation croisée sur plusieurs configurations mécaniques est-elle importante ?',
                        'choices' => [
                            ['choice_text' => Elle teste si le modèle capture un comportement général plutôt qu’un cas particulier', 'is_correct' => true],
                            ['choice_text' => 'Elle rend toutes les configurations équivalentes', 'is_correct' => false],
                            ['choice_text' => 'Elle supprime automatiquement les incertitudes', 'is_correct' => false],
                            ['choice_text' => 'Elle évite toute mesure supplémentaire', 'is_correct' => false],
                        ],
                        'explanation' => 'Un modèle robuste doit conserver une bonne capacité prédictive lorsqu’on modifie raisonnablement les conditions de fonctionnement.',
                    ],

                    [
                        'question' => 'Dans une simulation mécanique critique, pourquoi conserver les paramètres, versions de code et données d’entrée utilisés ?',
                        'choices' => [
                            ['choice_text' => Pour assurer la reproductibilité et l’audit du calcul', 'is_correct' => true],
                            ['choice_text' => 'Pour empêcher toute validation', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer les résultats anciens', 'is_correct' => false],
                            ['choice_text' => 'Parce que les paramètres n’ont aucun effet sur le résultat', 'is_correct' => false],
                        ],
                        'explanation' => 'La traçabilité numérique permet de reproduire, comparer et auditer les résultats d’une simulation.',
                    ],

                    [
                        'question' => 'Pourquoi un résultat numérique physiquement impossible doit-il être investigué même si le solveur indique une convergence ?',
                        'choices' => [
                            ['choice_text' => La convergence numérique ne garantit pas la validité physique des hypothèses, paramètres ou conditions aux limites', 'is_correct' => true],
                            ['choice_text' => 'La convergence prouve toujours que la physique est correcte', 'is_correct' => false],
                            ['choice_text' => 'Un solveur convergent ne peut jamais produire une solution non physique', 'is_correct' => false],
                            ['choice_text' => 'Les conditions aux limites n’influencent pas la physique', 'is_correct' => false],
                        ],
                        'explanation' => 'Une solution numérique peut être mathématiquement convergée vers un résultat incompatible avec le système réel si le modèle est mal posé.',
                    ],
                ],
            ],

            // ============================================================
            // QUIZ 8 — Fiabilité et ingénierie mécanique
            // ============================================================

            [
                'title' => 'Fiabilité, tolérances et ingénierie mécanique',
                'description' => 'Approche professionnelle des marges de conception, tolérances, fatigue, sécurité et analyse de risque.',
                'questions' => [

                    [
                        'question' => 'Pourquoi une conception mécanique professionnelle utilise-t-elle un facteur de sécurité ?',
                        'choices' => [
                            ['choice_text' => Pour tenir compte des incertitudes de charge, matériau, fabrication et modèle tout en limitant le risque de défaillance', 'is_correct' => true],
                            ['choice_text' => 'Pour garantir que la structure fonctionnera avec une charge infinie', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer toutes les contraintes', 'is_correct' => false],
                            ['choice_text' => 'Pour augmenter automatiquement le rendement énergétique', 'is_correct' => false],
                        ],
                        'explanation' => 'Le facteur de sécurité introduit une marge entre la capacité nominale du système et les conditions admissibles de fonctionnement.',
                    ],

                    [
                        'question' => 'Pourquoi les tolérances dimensionnelles doivent-elles être considérées dans l’analyse dynamique d’un mécanisme de précision ?',
                        'choices' => [
                            ['choice_text' => Elles peuvent modifier les jeux, alignements, contacts et donc les performances dynamiques', 'is_correct' => true],
                            ['choice_text' => 'Les tolérances n’affectent que l’apparence', 'is_correct' => false],
                            ['choice_text' => 'Une tolérance ne peut jamais modifier un mécanisme', 'is_correct' => false],
                            ['choice_text' => 'Les jeux sont toujours nuls dans une machine réelle', 'is_correct' => false],
                        ],
                        'explanation' => 'Les dispersions de fabrication peuvent affecter les contacts, forces parasites, vibrations et précision de positionnement.',
                    ],

                    [
                        'question' => 'Pourquoi une analyse de Monte Carlo peut-elle être utilisée dans une conception mécanique ?',
                        'choices' => [
                            ['choice_text' => 'Pour propager statistiquement les distributions d’entrée vers les performances de sortie', 'is_correct' => true],
                            ['choice_text' => 'Pour remplacer toutes les lois mécaniques', 'is_correct' => false],
                            ['choice_text' => 'Pour garantir une valeur unique exacte', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer toutes les tolérances', 'is_correct' => false],
                        ],
                        'explanation' => 'Les simulations Monte Carlo permettent d’évaluer l’effet statistique des dispersions de paramètres sur les résultats.',
                    ],

                    [
                        'question' => 'Pourquoi une conception tolérante aux défauts peut-elle être préférable à une conception dépendant d’un seul composant parfait ?',
                        'choices' => [
                            ['choice_text' => Elle réduit l’impact d’une défaillance individuelle ou d’une variation inévitable des composants', 'is_correct' => true],
                            ['choice_text' => 'Elle garantit que les composants ne tomberont jamais en panne', 'is_correct' => false],
                            ['choice_text' => 'Elle supprime les coûts de maintenance', 'is_correct' => false],
                            ['choice_text' => 'Elle rend tous les composants identiques', 'is_correct' => false],
                        ],
                        'explanation' => 'Une conception robuste anticipe les défauts et évite qu’une seule défaillance conduise directement à une perte catastrophique de fonction.',
                    ],

                    [
                        'question' => 'Pourquoi l’analyse des modes de défaillance est-elle importante dans un système mécanique critique ?',
                        'choices' => [
                            ['choice_text' => Elle permet d’identifier les mécanismes de panne et leurs conséquences afin de réduire les risques', 'is_correct' => true],
                            ['choice_text' => 'Elle garantit qu’aucune panne ne se produira', 'is_correct' => false],
                            ['choice_text' => 'Elle remplace entièrement les essais', 'is_correct' => false],
                            ['choice_text' => 'Elle ne concerne que les systèmes électriques', 'is_correct' => false],
                        ],
                        'explanation' => 'L’analyse des modes de défaillance permet d’identifier les scénarios critiques et de définir des actions de mitigation.',
                    ],

                    [
                        'question' => 'Pourquoi les essais accélérés peuvent-ils être utilisés dans une étude de fiabilité ?',
                        'choices' => [
                            ['choice_text' => Ils permettent d’observer plus rapidement certains mécanismes de vieillissement sous des conditions contrôlées', 'is_correct' => true],
                            ['choice_text' => 'Ils garantissent que toutes les défaillances sont identiques', 'is_correct' => false],
                            ['choice_text' => 'Ils éliminent toute incertitude statistique', 'is_correct' => false],
                            ['choice_text' => 'Ils remplacent automatiquement toutes les conditions réelles', 'is_correct' => false],
                        ],
                        'explanation' => 'Les essais accélérés peuvent réduire le temps d’observation, mais leur extrapolation vers les conditions normales doit être fondée sur un modèle physique approprié.',
                    ],

                    [
                        'question' => 'Pourquoi la maintenance prédictive s’appuie-t-elle souvent sur les vibrations d’une machine tournante ?',
                        'choices' => [
                            ['choice_text' => Certaines anomalies mécaniques apparaissent dans les signatures fréquentielles et temporelles des vibrations', 'is_correct' => true],
                            ['choice_text' => 'Les vibrations sont toujours indépendantes de l’état mécanique', 'is_correct' => false],
                            ['choice_text' => 'Une machine en parfait état ne vibre jamais', 'is_correct' => false],
                            ['choice_text' => 'La vibration mesure directement la masse de chaque composant', 'is_correct' => false],
                        ],
                        'explanation' => 'Déséquilibres, défauts de roulements, désalignements et engrènements peuvent produire des signatures vibratoires caractéristiques.',
                    ],

                    [
                        'question' => 'Pourquoi une maintenance basée uniquement sur le calendrier peut-elle être moins efficace qu’une stratégie conditionnelle dans certains systèmes ?',
                        'choices' => [
                            ['choice_text' => L’état réel des composants peut varier avec la charge, le nombre de cycles et les conditions de fonctionnement', 'is_correct' => true],
                            ['choice_text' => 'Tous les composants vieillissent exactement au même rythme', 'is_correct' => false],
                            ['choice_text' => 'Les mécanismes de dégradation sont indépendants du fonctionnement', 'is_correct' => false],
                            ['choice_text' => 'Une maintenance conditionnelle supprime toute surveillance', 'is_correct' => false],
                        ],
                        'explanation' => 'La maintenance conditionnelle exploite l’état réel du système pour intervenir selon les signes de dégradation observés.',
                    ],

                    [
                        'question' => 'Dans une analyse professionnelle de défaillance, pourquoi faut-il distinguer la cause physique initiale de la conséquence finale ?',
                        'choices' => [
                            ['choice_text' => Cela permet d’identifier des mesures préventives ciblant la chaîne causale plutôt que seulement le symptôme', 'is_correct' => true],
                            ['choice_text' => 'Les causes et conséquences sont toujours identiques', 'is_correct' => false],
                            ['choice_text' => 'La cause n’a aucun intérêt si le résultat final est connu', 'is_correct' => false],
                            ['choice_text' => 'Une conséquence peut toujours être utilisée comme cause', 'is_correct' => false],
                        ],
                        'explanation' => 'Comprendre la chaîne de causalité permet de concevoir des mesures préventives et correctives plus efficaces.',
                    ],

                    [
                        'question' => 'Pourquoi une conception mécanique professionnelle doit-elle considérer simultanément performance, sécurité, coût et durée de vie ?',
                        'choices' => [
                            ['choice_text' => 'Une solution optimale doit satisfaire plusieurs contraintes parfois contradictoires sur toute sa durée d’utilisation', 'is_correct' => true],
                            ['choice_text' => 'Le rendement est le seul critère pertinent', 'is_correct' => false],
                            ['choice_text' => 'Le coût n’a aucun lien avec la conception', 'is_correct' => false],
                            ['choice_text' => 'La durée de vie est toujours indépendante des charges', 'is_correct' => false],
                        ],
                        'explanation' => 'L’ingénierie mécanique est un problème multi-critères : une solution performante à court terme peut être inacceptable en sécurité, coût ou fiabilité.',
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

                // Mélange des choix sans perdre l'association
                // entre la réponse et son statut is_correct.
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