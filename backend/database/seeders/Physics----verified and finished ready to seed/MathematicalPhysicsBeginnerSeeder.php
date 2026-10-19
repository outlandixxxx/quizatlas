<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class MathematicalPhysicsBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'mathematical-physics')->firstOrFail();

        $quizzes = [
            [
                'title' => 'Outils mathématiques de base pour la physique',
                'description' => 'Réviser les outils mathématiques fondamentaux utilisés pour décrire les phénomènes physiques.',
                'questions' => [
                    [
                        'question' => 'Pourquoi les mathématiques sont-elles importantes en physique ?',
                        'choices' => [
                            ['choice_text' => 'Elles permettent de formuler des lois physiques et de calculer des prédictions quantitatives', 'is_correct' => true],
                            ['choice_text' => 'Elles remplacent systématiquement les expériences', 'is_correct' => false],
                            ['choice_text' => 'Elles servent uniquement à dessiner des graphiques', 'is_correct' => false],
                            ['choice_text' => 'Elles ne sont nécessaires qu’en mécanique classique', 'is_correct' => false],
                        ],
                        'explanation' => 'Les mathématiques constituent le langage quantitatif principal de la physique.',
                    ],
                    [
                        'question' => 'Qu’est-ce qu’une variable physique ?',
                        'choices' => [
                            ['choice_text' => 'Une constante qui ne change jamais', 'is_correct' => false],
                            ['choice_text' => 'Une unité de mesure', 'is_correct' => false],
                            ['choice_text' => 'Une équation sans inconnue', 'is_correct' => false],
                            ['choice_text' => 'Une grandeur dont la valeur peut décrire l’état ou l’évolution d’un système', 'is_correct' => true],
                        ],
                        'explanation' => 'Une variable peut représenter une position, une vitesse, une température ou toute autre grandeur dépendant des conditions.',
                    ],
                    [
                        'question' => 'Que représente la dérivée d’une position par rapport au temps ?',
                        'choices' => [
                            ['choice_text' => 'L’accélération uniquement', 'is_correct' => false],
                            ['choice_text' => 'L’énergie potentielle', 'is_correct' => false],
                            ['choice_text' => 'La vitesse', 'is_correct' => true],
                            ['choice_text' => 'La masse', 'is_correct' => false],
                        ],
                        'explanation' => 'La vitesse est la dérivée temporelle de la position.',
                    ],
                    [
                        'question' => 'Que représente la dérivée de la vitesse par rapport au temps ?',
                        'choices' => [
                            ['choice_text' => 'La position', 'is_correct' => false],
                            ['choice_text' => 'L’accélération', 'is_correct' => true],
                            ['choice_text' => 'La puissance', 'is_correct' => false],
                            ['choice_text' => 'La masse volumique', 'is_correct' => false],
                        ],
                        'explanation' => 'L’accélération correspond à la variation temporelle de la vitesse.',
                    ],
                    [
                        'question' => 'Qu’est-ce qu’une intégrale définie peut représenter en physique ?',
                        'choices' => [
                            ['choice_text' => 'Une accumulation d’une grandeur sur un intervalle', 'is_correct' => true],
                            ['choice_text' => 'Toujours une force', 'is_correct' => false],
                            ['choice_text' => 'Toujours une vitesse', 'is_correct' => false],
                            ['choice_text' => 'Uniquement une constante sans unité', 'is_correct' => false],
                        ],
                        'explanation' => 'Une intégrale permet d’accumuler ou de sommer continûment une grandeur.',
                    ],
                    [
                        'question' => 'Quelle représentation permet de décrire une grandeur dépendant de trois coordonnées spatiales ?',
                        'choices' => [
                            ['choice_text' => 'Une constante unique', 'is_correct' => false],
                            ['choice_text' => 'Une seule valeur indépendante de l’espace', 'is_correct' => false],
                            ['choice_text' => 'Une équation sans variable', 'is_correct' => false],
                            ['choice_text' => 'Une fonction de plusieurs variables', 'is_correct' => true],
                        ],
                        'explanation' => 'Une grandeur comme la température T(x, y, z) dépend de plusieurs coordonnées spatiales.',
                    ],
                    [
                        'question' => 'À quoi sert principalement une équation différentielle en physique ?',
                        'choices' => [
                            ['choice_text' => 'À mesurer directement une masse', 'is_correct' => false],
                            ['choice_text' => 'À relier une grandeur physique à ses variations ou dérivées', 'is_correct' => true],
                            ['choice_text' => 'À définir uniquement une unité', 'is_correct' => false],
                            ['choice_text' => 'À remplacer tous les nombres par des vecteurs', 'is_correct' => false],
                        ],
                        'explanation' => 'Les équations différentielles décrivent l’évolution des systèmes physiques par leurs dérivées.',
                    ],
                    [
                        'question' => 'Qu’est-ce qu’une équation linéaire par rapport à une inconnue ?',
                        'choices' => [
                            ['choice_text' => 'Une équation contenant obligatoirement une droite géométrique', 'is_correct' => false],
                            ['choice_text' => 'Une équation où l’inconnue apparaît à la première puissance sans produit non linéaire avec elle-même', 'is_correct' => true],
                            ['choice_text' => 'Une équation sans aucune inconnue', 'is_correct' => false],
                            ['choice_text' => 'Une équation qui contient uniquement des constantes', 'is_correct' => false],
                        ],
                        'explanation' => 'Une relation linéaire est du premier degré par rapport à la variable ou à la fonction considérée.',
                    ],
                    [
                        'question' => 'Pourquoi utilise-t-on des unités cohérentes dans les équations physiques ?',
                        'choices' => [
                            ['choice_text' => 'Pour garantir la cohérence dimensionnelle des relations utilisées', 'is_correct' => true],
                            ['choice_text' => 'Pour rendre toutes les grandeurs sans dimension', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer les constantes physiques', 'is_correct' => false],
                            ['choice_text' => 'Pour rendre les calculs indépendants des définitions physiques', 'is_correct' => false],
                        ],
                        'explanation' => 'Une équation physique doit être homogène du point de vue des dimensions.',
                    ],
                    [
                        'question' => 'Quel outil mathématique permet de calculer la variation locale d’une fonction ?',
                        'choices' => [
                            ['choice_text' => 'La moyenne uniquement', 'is_correct' => false],
                            ['choice_text' => 'Le déterminant uniquement', 'is_correct' => false],
                            ['choice_text' => 'La dérivée', 'is_correct' => true],
                            ['choice_text' => 'La factorisation uniquement', 'is_correct' => false],
                        ],
                        'explanation' => 'La dérivée mesure la variation locale d’une fonction par rapport à sa variable.',
                    ],
                ],
            ],

            [
                'title' => 'Vecteurs et géométrie',
                'description' => 'Comprendre les vecteurs, leurs opérations et leur rôle dans la description des grandeurs physiques.',
                'questions' => [
                    [
                        'question' => 'Qu’est-ce qu’un vecteur ?',
                        'choices' => [
                            ['choice_text' => 'Une quantité qui possède uniquement une valeur numérique', 'is_correct' => false],
                            ['choice_text' => 'Une unité de mesure', 'is_correct' => false],
                            ['choice_text' => 'Une constante toujours égale à zéro', 'is_correct' => false],
                            ['choice_text' => 'Une grandeur caractérisée notamment par une norme et une direction', 'is_correct' => true],
                        ],
                        'explanation' => 'Un vecteur possède une norme, une direction et, selon le contexte, un sens et un point d’application.',
                    ],
                    [
                        'question' => 'La vitesse d’une particule est-elle généralement décrite par un vecteur ?',
                        'choices' => [
                            ['choice_text' => 'Non, elle n’a aucune direction', 'is_correct' => false],
                            ['choice_text' => 'Seulement en thermodynamique', 'is_correct' => false],
                            ['choice_text' => 'Oui', 'is_correct' => true],
                            ['choice_text' => 'Uniquement dans le vide', 'is_correct' => false],
                        ],
                        'explanation' => 'La vitesse possède une norme et une direction de déplacement.',
                    ],
                    [
                        'question' => 'Quel produit entre deux vecteurs donne un nombre réel ?',
                        'choices' => [
                            ['choice_text' => 'Le produit vectoriel', 'is_correct' => false],
                            ['choice_text' => 'La divergence uniquement', 'is_correct' => false],
                            ['choice_text' => 'Le produit scalaire', 'is_correct' => true],
                            ['choice_text' => 'Le rotationnel uniquement', 'is_correct' => false],
                        ],
                        'explanation' => 'Le produit scalaire de deux vecteurs produit un scalaire.',
                    ],
                    [
                        'question' => 'Quel produit entre deux vecteurs tridimensionnels donne un autre vecteur ?',
                        'choices' => [
                            ['choice_text' => 'Le produit scalaire', 'is_correct' => false],
                            ['choice_text' => 'Le produit vectoriel', 'is_correct' => true],
                            ['choice_text' => 'La moyenne arithmétique', 'is_correct' => false],
                            ['choice_text' => 'La norme', 'is_correct' => false],
                        ],
                        'explanation' => 'Le produit vectoriel de deux vecteurs de l’espace produit un vecteur perpendiculaire aux deux vecteurs initiaux.',
                    ],
                    [
                        'question' => 'Si deux vecteurs sont perpendiculaires, leur produit scalaire vaut :',
                        'choices' => [
                            ['choice_text' => 'Un', 'is_correct' => false],
                            ['choice_text' => 'Leur norme multipliée', 'is_correct' => false],
                            ['choice_text' => 'Zéro', 'is_correct' => true],
                            ['choice_text' => 'Toujours -1', 'is_correct' => false],
                        ],
                        'explanation' => 'Le produit scalaire vaut AB cos(θ), donc il est nul pour θ = 90°.',
                    ],
                    [
                        'question' => 'Quelle grandeur représente la longueur d’un vecteur ?',
                        'choices' => [
                            ['choice_text' => 'Sa divergence', 'is_correct' => false],
                            ['choice_text' => 'Sa norme', 'is_correct' => true],
                            ['choice_text' => 'Son produit vectoriel', 'is_correct' => false],
                            ['choice_text' => 'Son déterminant', 'is_correct' => false],
                        ],
                        'explanation' => 'La norme donne la longueur ou l’intensité du vecteur.',
                    ],
                    [
                        'question' => 'Dans un repère cartésien tridimensionnel, combien d’axes indépendants sont généralement utilisés ?',
                        'choices' => [
                            ['choice_text' => 'Deux', 'is_correct' => false],
                            ['choice_text' => 'Trois', 'is_correct' => true],
                            ['choice_text' => 'Un', 'is_correct' => false],
                            ['choice_text' => 'Six', 'is_correct' => false],
                        ],
                        'explanation' => 'Un espace cartésien tridimensionnel est décrit par trois directions indépendantes x, y et z.',
                    ],
                    [
                        'question' => 'Quelle opération permet d’additionner deux vecteurs ?',
                        'choices' => [
                            ['choice_text' => 'L’addition composante par composante', 'is_correct' => true],
                            ['choice_text' => 'La multiplication de leurs normes uniquement', 'is_correct' => false],
                            ['choice_text' => 'Le calcul de leur déterminant', 'is_correct' => false],
                            ['choice_text' => 'La division de leurs directions', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans une base donnée, les composantes correspondantes sont additionnées.',
                    ],
                    [
                        'question' => 'Pourquoi les forces sont-elles souvent représentées par des vecteurs ?',
                        'choices' => [
                            ['choice_text' => 'Parce qu’elles sont toujours scalaires', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’elles n’ont aucune unité', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’elles sont indépendantes du référentiel', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’elles possèdent une intensité et une direction', 'is_correct' => true],
                        ],
                        'explanation' => 'La force est une grandeur vectorielle.',
                    ],
                    [
                        'question' => 'Quelle grandeur physique est un scalaire plutôt qu’un vecteur ?',
                        'choices' => [
                            ['choice_text' => 'La température', 'is_correct' => true],
                            ['choice_text' => 'La force', 'is_correct' => false],
                            ['choice_text' => 'La vitesse', 'is_correct' => false],
                            ['choice_text' => 'L’accélération', 'is_correct' => false],
                        ],
                        'explanation' => 'La température est décrite par une valeur numérique avec une unité, sans direction intrinsèque.',
                    ],
                ],
            ],

            [
                'title' => 'Calcul différentiel et intégral',
                'description' => 'Approfondir les dérivées, intégrales et équations simples utilisées en physique.',
                'questions' => [
                    [
                        'question' => 'Que représente physiquement la dérivée temporelle de la position ?',
                        'choices' => [
                            ['choice_text' => 'La masse', 'is_correct' => false],
                            ['choice_text' => 'La puissance', 'is_correct' => false],
                            ['choice_text' => 'La vitesse', 'is_correct' => true],
                            ['choice_text' => 'La température', 'is_correct' => false],
                        ],
                        'explanation' => 'v(t) = dx/dt.',
                    ],
                    [
                        'question' => 'Que représente la dérivée temporelle de la vitesse ?',
                        'choices' => [
                            ['choice_text' => 'L’accélération', 'is_correct' => true],
                            ['choice_text' => 'La position', 'is_correct' => false],
                            ['choice_text' => 'L’énergie', 'is_correct' => false],
                            ['choice_text' => 'La charge', 'is_correct' => false],
                        ],
                        'explanation' => 'a(t) = dv/dt = d²x/dt².',
                    ],
                    [
                        'question' => 'Quelle opération est l’opération inverse de la dérivation dans un cadre élémentaire ?',
                        'choices' => [
                            ['choice_text' => 'La multiplication matricielle uniquement', 'is_correct' => false],
                            ['choice_text' => 'L’intégration', 'is_correct' => true],
                            ['choice_text' => 'La factorisation', 'is_correct' => false],
                            ['choice_text' => 'Le produit vectoriel', 'is_correct' => false],
                        ],
                        'explanation' => 'L’intégration permet notamment de reconstruire une fonction à partir de sa dérivée, à une constante près.',
                    ],
                    [
                        'question' => 'Que permet de calculer l’intégrale de la vitesse sur un intervalle de temps ?',
                        'choices' => [
                            ['choice_text' => 'La masse du système', 'is_correct' => false],
                            ['choice_text' => 'La charge électrique', 'is_correct' => false],
                            ['choice_text' => 'La température', 'is_correct' => false],
                            ['choice_text' => 'La variation de position', 'is_correct' => true],
                        ],
                        'explanation' => 'L’intégrale de v(t) dt donne le déplacement, avec une constante correspondant à la position initiale.',
                    ],
                    [
                        'question' => 'Quelle dérivée est nulle pour une constante ?',
                        'choices' => [
                            ['choice_text' => 'Sa dérivée est toujours égale à 1', 'is_correct' => false],
                            ['choice_text' => 'Elle n’a aucune dérivée', 'is_correct' => false],
                            ['choice_text' => 'Elle est toujours infinie', 'is_correct' => false],
                            ['choice_text' => 'Sa dérivée par rapport à la variable considérée', 'is_correct' => true],
                        ],
                        'explanation' => 'La dérivée d’une constante est nulle.',
                    ],
                    [
                        'question' => 'Si x(t) = t², quelle est sa vitesse v(t) ?',
                        'choices' => [
                            ['choice_text' => 'v(t) = t', 'is_correct' => false],
                            ['choice_text' => 'v(t) = t³', 'is_correct' => false],
                            ['choice_text' => 'v(t) = 2t', 'is_correct' => true],
                            ['choice_text' => 'v(t) = 2', 'is_correct' => false],
                        ],
                        'explanation' => 'La dérivée de t² par rapport à t est 2t.',
                    ],
                    [
                        'question' => 'Si v(t) = 3t², quelle est l’accélération ?',
                        'choices' => [
                            ['choice_text' => 'a(t) = 3t', 'is_correct' => false],
                            ['choice_text' => 'a(t) = 6t²', 'is_correct' => false],
                            ['choice_text' => 'a(t) = 3', 'is_correct' => false],
                            ['choice_text' => 'a(t) = 6t', 'is_correct' => true],
                        ],
                        'explanation' => 'L’accélération est la dérivée de la vitesse : a(t) = d(3t²)/dt = 6t.',
                    ],
                    [
                        'question' => 'Quel rôle joue une constante d’intégration lorsqu’on intègre une dérivée ?',
                        'choices' => [
                            ['choice_text' => 'Elle représente l’information qui n’est pas déterminée par la dérivée seule, comme une valeur initiale', 'is_correct' => true],
                            ['choice_text' => 'Elle doit toujours être nulle', 'is_correct' => false],
                            ['choice_text' => 'Elle représente toujours la vitesse', 'is_correct' => false],
                            ['choice_text' => 'Elle n’a aucun sens physique', 'is_correct' => false],
                        ],
                        'explanation' => 'La dérivée ne permet pas de déterminer une constante additive ; une condition initiale permet de la fixer.',
                    ],
                    [
                        'question' => 'Une intégrale peut-elle représenter une aire sous une courbe ?',
                        'choices' => [
                            ['choice_text' => 'Non, jamais', 'is_correct' => false],
                            ['choice_text' => 'Seulement pour les fonctions constantes', 'is_correct' => false],
                            ['choice_text' => 'Oui', 'is_correct' => true],
                            ['choice_text' => 'Uniquement pour les vecteurs', 'is_correct' => false],
                        ],
                        'explanation' => 'Une intégrale définie peut représenter une aire algébrique sous une courbe.',
                    ],
                    [
                        'question' => 'Pourquoi les équations différentielles sont-elles fréquentes en physique ?',
                        'choices' => [
                            ['choice_text' => 'Parce que toutes les grandeurs physiques sont constantes', 'is_correct' => false],
                            ['choice_text' => 'Les lois physiques relient souvent une grandeur à sa variation dans le temps ou dans l’espace', 'is_correct' => true],
                            ['choice_text' => 'Parce qu’elles remplacent les unités', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’elles ne nécessitent jamais de conditions initiales', 'is_correct' => false],
                        ],
                        'explanation' => 'La dynamique, la diffusion, les ondes et de nombreux autres phénomènes sont naturellement exprimés par des équations différentielles.',
                    ],
                ],
            ],

            [
                'title' => 'Calcul vectoriel et champs',
                'description' => 'Introduire les champs scalaires, les champs vectoriels et les opérateurs différentiels courants.',
                'questions' => [
                    [
                        'question' => 'Qu’est-ce qu’un champ scalaire ?',
                        'choices' => [
                            ['choice_text' => 'Une grandeur scalaire attribuée à chaque point d’une région de l’espace', 'is_correct' => true],
                            ['choice_text' => 'Un vecteur identique partout', 'is_correct' => false],
                            ['choice_text' => 'Une constante sans position', 'is_correct' => false],
                            ['choice_text' => 'Un système d’équations sans variable', 'is_correct' => false],
                        ],
                        'explanation' => 'La température T(x,y,z) est un exemple de champ scalaire.',
                    ],
                    [
                        'question' => 'Qu’est-ce qu’un champ vectoriel ?',
                        'choices' => [
                            ['choice_text' => 'Une grandeur vectorielle définie en chaque point de l’espace', 'is_correct' => true],
                            ['choice_text' => 'Une température uniquement', 'is_correct' => false],
                            ['choice_text' => 'Une constante sans direction', 'is_correct' => false],
                            ['choice_text' => 'Un seul vecteur indépendant de la position', 'is_correct' => false],
                        ],
                        'explanation' => 'Le champ électrique et le champ de vitesse d’un fluide sont des exemples de champs vectoriels.',
                    ],
                    [
                        'question' => 'Quel opérateur permet de calculer le gradient d’un champ scalaire ?',
                        'choices' => [
                            ['choice_text' => 'La norme', 'is_correct' => false],
                            ['choice_text' => 'Le déterminant', 'is_correct' => false],
                            ['choice_text' => 'La trace uniquement', 'is_correct' => false],
                            ['choice_text' => 'Le gradient', 'is_correct' => true],
                        ],
                        'explanation' => 'Le gradient d’un champ scalaire produit un champ vectoriel indiquant notamment la direction de variation maximale.',
                    ],
                    [
                        'question' => 'Le gradient d’un champ scalaire est-il un vecteur ?',
                        'choices' => [
                            ['choice_text' => 'Non, c’est toujours un scalaire', 'is_correct' => false],
                            ['choice_text' => 'Oui', 'is_correct' => true],
                            ['choice_text' => 'Il n’a aucune dimension', 'is_correct' => false],
                            ['choice_text' => 'Seulement dans une dimension', 'is_correct' => false],
                        ],
                        'explanation' => 'Le gradient d’une fonction scalaire de plusieurs variables possède une composante par direction spatiale.',
                    ],
                    [
                        'question' => 'Quel opérateur appliqué à un champ vectoriel produit un scalaire appelé divergence ?',
                        'choices' => [
                            ['choice_text' => 'Le gradient uniquement', 'is_correct' => false],
                            ['choice_text' => 'Le produit vectoriel', 'is_correct' => false],
                            ['choice_text' => 'La norme uniquement', 'is_correct' => false],
                            ['choice_text' => 'L’opérateur divergence', 'is_correct' => true],
                        ],
                        'explanation' => 'La divergence mesure localement le caractère sortant ou entrant d’un champ vectoriel.',
                    ],
                    [
                        'question' => 'Quel opérateur produit un vecteur à partir d’un champ vectoriel tridimensionnel ?',
                        'choices' => [
                            ['choice_text' => 'La divergence', 'is_correct' => false],
                            ['choice_text' => 'La trace', 'is_correct' => false],
                            ['choice_text' => 'La norme', 'is_correct' => false],
                            ['choice_text' => 'Le rotationnel', 'is_correct' => true],
                        ],
                        'explanation' => 'Le rotationnel, ou curl, produit un champ vectoriel lié à la rotation locale du champ.',
                    ],
                    [
                        'question' => 'Quel opérateur combine des dérivées secondes et intervient souvent dans les équations de diffusion et d’ondes ?',
                        'choices' => [
                            ['choice_text' => 'La divergence seule', 'is_correct' => false],
                            ['choice_text' => 'Le laplacien', 'is_correct' => true],
                            ['choice_text' => 'La moyenne', 'is_correct' => false],
                            ['choice_text' => 'Le produit scalaire', 'is_correct' => false],
                        ],
                        'explanation' => 'Le laplacien est un opérateur différentiel de second ordre très utilisé en physique mathématique.',
                    ],
                    [
                        'question' => 'Quel exemple est un champ vectoriel classique en physique ?',
                        'choices' => [
                            ['choice_text' => 'La température uniquement', 'is_correct' => false],
                            ['choice_text' => 'La masse totale', 'is_correct' => false],
                            ['choice_text' => 'Le champ électrique', 'is_correct' => true],
                            ['choice_text' => 'La pression moyenne uniquement', 'is_correct' => false],
                        ],
                        'explanation' => 'Le champ électrique possède une norme et une direction à chaque point de l’espace.',
                    ],
                    [
                        'question' => 'Que représente qualitativement une ligne de champ ?',
                        'choices' => [
                            ['choice_text' => 'Une trajectoire obligatoire d’une particule', 'is_correct' => false],
                            ['choice_text' => 'Une unité de mesure', 'is_correct' => false],
                            ['choice_text' => 'Une courbe dont la tangente indique la direction locale d’un champ vectoriel', 'is_correct' => true],
                            ['choice_text' => 'Une ligne toujours droite', 'is_correct' => false],
                        ],
                        'explanation' => 'Les lignes de champ servent à visualiser la direction locale d’un champ vectoriel.',
                    ],
                    [
                        'question' => 'Pourquoi les opérateurs vectoriels sont-ils importants en physique ?',
                        'choices' => [
                            ['choice_text' => 'Ils permettent de formuler localement de nombreuses lois concernant les champs et leurs variations', 'is_correct' => true],
                            ['choice_text' => 'Ils servent uniquement à calculer des masses', 'is_correct' => false],
                            ['choice_text' => 'Ils remplacent les unités physiques', 'is_correct' => false],
                            ['choice_text' => 'Ils ne sont utilisés qu’en géométrie pure', 'is_correct' => false],
                        ],
                        'explanation' => 'Le gradient, la divergence, le rotationnel et le laplacien sont présents dans de nombreuses équations physiques.',
                    ],
                ],
            ],

            [
                'title' => 'Équations différentielles et physique',
                'description' => 'Découvrir quelques équations différentielles classiques rencontrées en mécanique, diffusion et oscillations.',
                'questions' => [
                   [
                        'question' => 'Pour un mouvement rectiligne à accélération constante a, quelle équation différentielle relie la position x au temps ?',
                        'choices' => [
                            ['choice_text' => 'Une équation où la masse disparaît', 'is_correct' => false],
                            ['choice_text' => 'Une équation sans variable temporelle', 'is_correct' => false],
                            ['choice_text' => 'd²x/dt² = a', 'is_correct' => true],
                            ['choice_text' => 'Une équation décrivant uniquement une température', 'is_correct' => false],
                        ],
                        'explanation' => 'L’accélération est la dérivée seconde de la position par rapport au temps. Pour une accélération constante, d²x/dt² = a.',
                    ],
                    [
                        'question' => 'Quelle équation différentielle simple décrit un oscillateur harmonique ?',
                        'choices' => [
                            ['choice_text' => 'dx/dt = x² uniquement', 'is_correct' => false],
                            ['choice_text' => 'x + 1 = 0', 'is_correct' => false],
                            ['choice_text' => 'd²x/dt² + ω²x = 0', 'is_correct' => true],
                            ['choice_text' => 'd²x/dt² = constante toujours positive', 'is_correct' => false],
                        ],
                        'explanation' => 'L’équation d²x/dt² + ω²x = 0 est le modèle classique d’un oscillateur harmonique sans amortissement.',
                    ],
                    [
                        'question' => 'Quelle forme de solution correspond à un oscillateur harmonique simple ?',
                        'choices' => [
                            ['choice_text' => 'Une droite uniquement', 'is_correct' => false],
                            ['choice_text' => 'Une constante uniquement', 'is_correct' => false],
                            ['choice_text' => 'Une fonction toujours exponentiellement croissante', 'is_correct' => false],
                            ['choice_text' => 'Une combinaison de sinus et de cosinus', 'is_correct' => true],
                        ],
                        'explanation' => 'Les solutions de l’oscillateur harmonique sont des fonctions sinusoïdales.',
                    ],
                    [
                        'question' => 'Que se passe-t-il lorsqu’on ajoute un terme proportionnel à la vitesse dans un modèle d’oscillateur ?',
                        'choices' => [
                            ['choice_text' => 'L’oscillation devient nécessairement infinie', 'is_correct' => false],
                            ['choice_text' => 'La masse devient nulle', 'is_correct' => false],
                            ['choice_text' => 'La position cesse d’être définie', 'is_correct' => false],
                            ['choice_text' => 'On peut représenter un amortissement', 'is_correct' => true],
                        ],
                        'explanation' => 'Un terme dissipatif proportionnel à la vitesse modélise un amortissement visqueux simple.',
                    ],
                    [
                        'question' => 'Quelle équation décrit de façon classique la diffusion d’une grandeur ?',
                        'choices' => [
                            ['choice_text' => 'L’équation de diffusion ou équation de la chaleur', 'is_correct' => true],
                            ['choice_text' => 'La loi d’Ohm uniquement', 'is_correct' => false],
                            ['choice_text' => 'L’équation des lentilles minces', 'is_correct' => false],
                            ['choice_text' => 'La loi de Coulomb uniquement', 'is_correct' => false],
                        ],
                        'explanation' => 'L’équation de diffusion décrit l’évolution spatiale et temporelle de nombreuses grandeurs, notamment la température.',
                    ],
                    [
                        'question' => 'Dans l’équation de diffusion, que représente généralement le coefficient de diffusion ?',
                        'choices' => [
                            ['choice_text' => 'Un paramètre caractérisant la rapidité de propagation par diffusion', 'is_correct' => true],
                            ['choice_text' => 'La masse totale du système', 'is_correct' => false],
                            ['choice_text' => 'La force gravitationnelle', 'is_correct' => false],
                            ['choice_text' => 'La charge du proton', 'is_correct' => false],
                        ],
                        'explanation' => 'Le coefficient de diffusion indique l’échelle temporelle à laquelle les gradients se lissent.',
                    ],
                    [
                        'question' => 'Qu’est-ce qu’une condition aux limites ?',
                        'choices' => [
                            ['choice_text' => 'Une valeur toujours égale à zéro', 'is_correct' => false],
                            ['choice_text' => 'Une information imposée sur les limites spatiales du domaine étudié', 'is_correct' => true],
                            ['choice_text' => 'Une condition portant uniquement sur l’instant initial', 'is_correct' => false],
                            ['choice_text' => 'Une unité physique', 'is_correct' => false],
                        ],
                        'explanation' => 'Les conditions aux limites précisent le comportement de la solution sur les frontières du domaine.',
                    ],
                    [
                        'question' => 'Pourquoi une condition initiale est-elle importante pour une équation d’évolution ?',
                        'choices' => [
                            ['choice_text' => 'Elle remplace toutes les dérivées', 'is_correct' => false],
                            ['choice_text' => 'Elle permet de sélectionner la solution correspondant à l’état de départ du système', 'is_correct' => true],
                            ['choice_text' => 'Elle supprime la dépendance temporelle', 'is_correct' => false],
                            ['choice_text' => 'Elle définit uniquement les unités', 'is_correct' => false],
                        ],
                        'explanation' => 'De nombreuses équations différentielles admettent une famille de solutions ; les conditions initiales sélectionnent celle du problème physique.',
                    ],
                    [
                        'question' => 'Que signifie qu’une solution d’équation différentielle est stationnaire ?',
                        'choices' => [
                            ['choice_text' => 'Elle ne varie pas avec le temps', 'is_correct' => true],
                            ['choice_text' => 'Elle varie rapidement avec le temps', 'is_correct' => false],
                            ['choice_text' => 'Elle est nécessairement nulle partout', 'is_correct' => false],
                            ['choice_text' => 'Elle est toujours périodique', 'is_correct' => false],
                        ],
                        'explanation' => 'Une solution stationnaire ne dépend pas explicitement du temps.',
                    ],
                    [
                        'question' => 'Pourquoi les équations différentielles sont-elles centrales en physique mathématique ?',
                        'choices' => [
                            ['choice_text' => 'Elles servent uniquement à résoudre des exercices scolaires', 'is_correct' => false],
                            ['choice_text' => 'Elles permettent de décrire l’évolution et les relations locales de nombreuses grandeurs physiques', 'is_correct' => true],
                            ['choice_text' => 'Elles ne décrivent jamais de phénomènes expérimentaux', 'is_correct' => false],
                            ['choice_text' => 'Elles sont indépendantes de toute condition physique', 'is_correct' => false],
                        ],
                        'explanation' => 'Les équations différentielles apparaissent dans pratiquement toutes les grandes branches de la physique.',
                    ],
                ],
            ],

            [
                'title' => 'Nombres complexes, matrices et applications',
                'description' => 'Découvrir les nombres complexes et les matrices utilisés dans plusieurs domaines de la physique.',
                'questions' => [
                    [
                        'question' => 'Pourquoi les nombres complexes sont-ils utiles en physique ?',
                        'choices' => [
                            ['choice_text' => 'Ils remplacent toujours les nombres réels', 'is_correct' => false],
                            ['choice_text' => 'Ils ne peuvent représenter aucune grandeur physique', 'is_correct' => false],
                            ['choice_text' => 'Ils sont utilisés uniquement en arithmétique', 'is_correct' => false],
                            ['choice_text' => 'Ils simplifient notamment la description des oscillations, des ondes et de certaines équations', 'is_correct' => true],
                        ],
                        'explanation' => 'Les complexes permettent notamment d’écrire élégamment les fonctions sinusoïdales et certaines transformations.',
                    ],
                    [
                        'question' => 'Quelle relation fondamentale définit l’unité imaginaire i ?',
                        'choices' => [
                            ['choice_text' => 'i² = 1', 'is_correct' => false],
                            ['choice_text' => 'i = 0', 'is_correct' => false],
                            ['choice_text' => 'i² = -1', 'is_correct' => true],
                            ['choice_text' => 'i² = i', 'is_correct' => false],
                        ],
                        'explanation' => 'Par définition, l’unité imaginaire vérifie i² = -1.',
                    ],
                    [
                        'question' => 'Comment peut-on écrire un nombre complexe sous forme cartésienne ?',
                        'choices' => [
                            ['choice_text' => 'z = ab uniquement', 'is_correct' => false],
                            ['choice_text' => 'z = a + ib', 'is_correct' => true],
                            ['choice_text' => 'z = a/b toujours', 'is_correct' => false],
                            ['choice_text' => 'z = a² + b² sans i', 'is_correct' => false],
                        ],
                        'explanation' => 'La forme cartésienne standard est z = a + ib, avec a et b réels.',
                    ],
                    [
                        'question' => 'Qu’est-ce qu’une matrice ?',
                        'choices' => [
                            ['choice_text' => 'Une seule constante scalaire', 'is_correct' => false],
                            ['choice_text' => 'Un tableau organisé de nombres ou de grandeurs', 'is_correct' => true],
                            ['choice_text' => 'Un type de vecteur toujours à une dimension', 'is_correct' => false],
                            ['choice_text' => 'Une unité physique', 'is_correct' => false],
                        ],
                        'explanation' => 'Les matrices organisent les coefficients et les données sous forme de lignes et de colonnes.',
                    ],
                    [
                        'question' => 'Pourquoi utilise-t-on des matrices en mécanique et en physique moderne ?',
                        'choices' => [
                            ['choice_text' => 'Elles permettent notamment de représenter des transformations, des systèmes linéaires et certains opérateurs', 'is_correct' => true],
                            ['choice_text' => 'Elles servent uniquement à compter les particules', 'is_correct' => false],
                            ['choice_text' => 'Elles remplacent systématiquement les vecteurs', 'is_correct' => false],
                            ['choice_text' => 'Elles n’ont aucune application physique', 'is_correct' => false],
                        ],
                        'explanation' => 'Les matrices sont fondamentales pour les systèmes linéaires, les transformations de coordonnées et de nombreux formalismes physiques.',
                    ],
                    [
                        'question' => 'Que permet de calculer le déterminant d’une matrice carrée ?',
                        'choices' => [
                            ['choice_text' => 'Uniquement la température', 'is_correct' => false],
                            ['choice_text' => 'La masse du système', 'is_correct' => false],
                            ['choice_text' => 'Une grandeur utile notamment pour étudier l’inversibilité de la matrice', 'is_correct' => true],
                            ['choice_text' => 'La vitesse de la lumière', 'is_correct' => false],
                        ],
                        'explanation' => 'Une matrice carrée est inversible si son déterminant est non nul.',
                    ],
                    [
                        'question' => 'Quand une matrice carrée est-elle inversible ?',
                        'choices' => [
                            ['choice_text' => 'Toujours', 'is_correct' => false],
                            ['choice_text' => 'Lorsque son déterminant est non nul', 'is_correct' => true],
                            ['choice_text' => 'Lorsque toutes ses entrées sont nulles', 'is_correct' => false],
                            ['choice_text' => 'Uniquement lorsqu’elle est diagonale', 'is_correct' => false],
                        ],
                        'explanation' => 'Pour une matrice carrée, det(A) ≠ 0 est une condition équivalente à l’existence de son inverse.',
                    ],
                    [
                        'question' => 'Qu’est-ce qu’une valeur propre d’une matrice ou d’un opérateur ?',
                        'choices' => [
                            ['choice_text' => 'La norme maximale de tous les vecteurs', 'is_correct' => false],
                            ['choice_text' => 'Toujours une valeur négative', 'is_correct' => false],
                            ['choice_text' => 'Une unité de mesure', 'is_correct' => false],
                            ['choice_text' => 'Un scalaire associé à un vecteur propre selon une relation de la forme Av = λv', 'is_correct' => true],
                        ],
                        'explanation' => 'Une valeur propre λ vérifie Av = λv pour au moins un vecteur non nul v.',
                    ],
                    [
                        'question' => 'Pourquoi les valeurs propres apparaissent-elles en physique ?',
                        'choices' => [
                            ['choice_text' => 'Elles apparaissent notamment dans les problèmes d’oscillation, de stabilité et de mécanique quantique', 'is_correct' => true],
                            ['choice_text' => 'Uniquement dans la mesure des températures', 'is_correct' => false],
                            ['choice_text' => 'Seulement dans les calculs de masse', 'is_correct' => false],
                            ['choice_text' => 'Elles n’ont aucune interprétation physique', 'is_correct' => false],
                        ],
                        'explanation' => 'Les problèmes de modes propres et de nombreux opérateurs physiques conduisent naturellement à des valeurs propres.',
                    ],
                    [
                        'question' => 'Pourquoi les complexes sont-ils pratiques pour représenter une onde sinusoïdale ?',
                        'choices' => [
                            ['choice_text' => 'Ils suppriment la fréquence', 'is_correct' => false],
                            ['choice_text' => 'Ils rendent les ondes toujours stationnaires', 'is_correct' => false],
                            ['choice_text' => 'Ils permettent d’utiliser des exponentielles complexes dont la partie réelle ou imaginaire représente la solution physique', 'is_correct' => true],
                            ['choice_text' => 'Ils remplacent automatiquement les unités', 'is_correct' => false],
                        ],
                        'explanation' => 'La formule d’Euler permet d’exprimer les fonctions sinusoïdales à l’aide d’exponentielles complexes.',
                    ],
                ],
            ],

            [
                'title' => 'Transformées et outils mathématiques en physique',
                'description' => 'Découvrir les transformées intégrales et quelques méthodes courantes de représentation des phénomènes physiques.',
                'questions' => [
                    [
                        'question' => 'À quoi sert principalement une transformée de Fourier ?',
                        'choices' => [
                            ['choice_text' => 'À calculer uniquement une masse', 'is_correct' => false],
                            ['choice_text' => 'À supprimer le temps d’une expérience sans perte d’information', 'is_correct' => false],
                            ['choice_text' => 'À remplacer toute dérivée par une constante', 'is_correct' => false],
                            ['choice_text' => 'À analyser les composantes fréquentielles d’un signal ou d’une fonction', 'is_correct' => true],
                        ],
                        'explanation' => 'La transformée de Fourier permet de représenter un signal selon ses fréquences plutôt que directement dans le domaine temporel ou spatial.',
                    ],
                    [
                        'question' => 'Quel domaine d’une fonction est appelé domaine temporel lorsqu’on étudie un signal en fonction du temps ?',
                        'choices' => [
                            ['choice_text' => 'Le domaine des masses', 'is_correct' => false],
                            ['choice_text' => 'Le domaine des températures uniquement', 'is_correct' => false],
                            ['choice_text' => 'Le domaine où la fonction est exprimée en fonction du temps', 'is_correct' => true],
                            ['choice_text' => 'Le domaine des matrices uniquement', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans le domaine temporel, le signal est décrit comme une fonction de t.',
                    ],
                    [
                        'question' => 'Quel est l’intérêt d’analyser un signal dans le domaine fréquentiel ?',
                        'choices' => [
                            ['choice_text' => 'Supprimer toutes les oscillations', 'is_correct' => false],
                            ['choice_text' => 'Mesurer directement la masse des particules', 'is_correct' => false],
                            ['choice_text' => 'Changer la fréquence réelle du phénomène', 'is_correct' => false],
                            ['choice_text' => 'Identifier les fréquences dominantes et la structure spectrale du signal', 'is_correct' => true],
                        ],
                        'explanation' => 'La représentation fréquentielle révèle les composantes périodiques ou oscillatoires présentes dans un signal.',
                    ],
                    [
                        'question' => 'Qu’est-ce qu’une fonction périodique ?',
                        'choices' => [
                            ['choice_text' => 'Une fonction toujours croissante', 'is_correct' => false],
                            ['choice_text' => 'Une fonction toujours nulle', 'is_correct' => false],
                            ['choice_text' => 'Une fonction sans variable', 'is_correct' => false],
                            ['choice_text' => 'Une fonction qui se répète après un intervalle constant', 'is_correct' => true],
                        ],
                        'explanation' => 'Une fonction périodique satisfait une relation comme f(t + T) = f(t).',
                    ],
                    [
                        'question' => 'Quel est le lien entre fréquence f et période T ?',
                        'choices' => [
                            ['choice_text' => 'f = T', 'is_correct' => false],
                            ['choice_text' => 'f = T²', 'is_correct' => false],
                            ['choice_text' => 'f = 1/T', 'is_correct' => true],
                            ['choice_text' => 'f = T + 1', 'is_correct' => false],
                        ],
                        'explanation' => 'La fréquence est l’inverse de la période.',
                    ],
                    [
                        'question' => 'Qu’est-ce qu’une équation aux dérivées partielles ?',
                        'choices' => [
                            ['choice_text' => 'Une équation sans dérivée', 'is_correct' => false],
                            ['choice_text' => 'Une équation impliquant des dérivées partielles d’une fonction de plusieurs variables', 'is_correct' => true],
                            ['choice_text' => 'Une équation contenant uniquement des constantes', 'is_correct' => false],
                            ['choice_text' => 'Une équation qui ne peut décrire aucun phénomène physique', 'is_correct' => false],
                        ],
                        'explanation' => 'Les équations aux dérivées partielles sont utilisées lorsque l’inconnue dépend de plusieurs variables indépendantes.',
                    ],
                    [
                        'question' => 'Quelle équation classique décrit un potentiel électrostatique dans une région sans charge selon une approximation usuelle ?',
                        'choices' => [
                            ['choice_text' => 'L’équation de Bernoulli', 'is_correct' => false],
                            ['choice_text' => 'L’équation de Laplace', 'is_correct' => true],
                            ['choice_text' => 'L’équation de Hooke', 'is_correct' => false],
                            ['choice_text' => 'La loi d’Ohm uniquement', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans une région sans densité de charge, le potentiel électrostatique satisfait l’équation de Laplace ∇²V = 0.',
                    ],
                    [
                        'question' => 'Quelle équation décrit souvent la propagation d’ondes idéales ?',
                        'choices' => [
                            ['choice_text' => 'L’équation de la chaleur uniquement', 'is_correct' => false],
                            ['choice_text' => 'L’équation de Newton uniquement', 'is_correct' => false],
                            ['choice_text' => 'L’équation des ondes', 'is_correct' => true],
                            ['choice_text' => 'L’équation de continuité seulement', 'is_correct' => false],
                        ],
                        'explanation' => 'L’équation des ondes modélise la propagation de perturbations dans de nombreux systèmes physiques.',
                    ],
                    [
                        'question' => 'Pourquoi utilise-t-on des fonctions propres et des valeurs propres pour certains problèmes physiques ?',
                        'choices' => [
                            ['choice_text' => 'Elles permettent de décrire des modes particuliers qui évoluent selon une structure simple', 'is_correct' => true],
                            ['choice_text' => 'Elles remplacent toutes les mesures', 'is_correct' => false],
                            ['choice_text' => 'Elles sont uniquement géométriques', 'is_correct' => false],
                            ['choice_text' => 'Elles ne peuvent pas être associées à des observables', 'is_correct' => false],
                        ],
                        'explanation' => 'Les problèmes de modes propres apparaissent notamment dans les oscillations, les ondes et la mécanique quantique.',
                    ],
                    [
                        'question' => 'Quel est l’intérêt général d’une transformation mathématique en physique ?',
                        'choices' => [
                            ['choice_text' => 'Changer la représentation d’un problème pour rendre certaines propriétés ou opérations plus faciles à analyser', 'is_correct' => true],
                            ['choice_text' => 'Changer la réalité physique du système', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les conditions aux limites', 'is_correct' => false],
                            ['choice_text' => 'Créer automatiquement de nouvelles lois physiques', 'is_correct' => false],
                        ],
                        'explanation' => 'Les transformations, comme Fourier ou Laplace, permettent de travailler dans une représentation plus adaptée à certains calculs.',
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