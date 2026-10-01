<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class ComputationalPhysicsBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'computational-physics')->firstOrFail();

        $quizzes = [
            [
                'title' => 'Introduction à la physique computationnelle',
                'description' => 'Découvrir le rôle du calcul numérique dans la résolution de problèmes physiques.',
                'questions' => [
                    [
                        'question' => 'Qu\'étudie principalement la physique computationnelle ?',
                        'choices' => [
                            ['choice_text' => 'L\'utilisation de méthodes numériques et informatiques pour résoudre et analyser des problèmes physiques', 'is_correct' => true],
                            ['choice_text' => 'Uniquement la construction de composants électroniques', 'is_correct' => false],
                            ['choice_text' => 'Uniquement les phénomènes astronomiques', 'is_correct' => false],
                            ['choice_text' => 'Uniquement les expériences de laboratoire', 'is_correct' => false],
                        ],
                        'explanation' => 'La physique computationnelle utilise les ordinateurs et les méthodes numériques pour étudier des modèles physiques.',
                    ],
                    [
                        'question' => 'Pourquoi utilise-t-on des méthodes numériques en physique ?',
                        'choices' => [
                            ['choice_text' => 'Parce que certains problèmes sont trop complexes pour être résolus facilement sous forme analytique', 'is_correct' => true],
                            ['choice_text' => 'Parce que les équations physiques ne sont jamais utiles', 'is_correct' => false],
                            ['choice_text' => 'Parce qu\'un ordinateur remplace toujours les expériences', 'is_correct' => false],
                            ['choice_text' => 'Parce que les lois physiques changent avec le logiciel', 'is_correct' => false],
                        ],
                        'explanation' => 'Les méthodes numériques permettent d\'obtenir des solutions approchées lorsque les solutions analytiques sont difficiles ou impossibles.',
                    ],
                    [
                        'question' => 'Qu\'est-ce qu\'un modèle numérique en physique ?',
                        'choices' => [
                            ['choice_text' => 'Une représentation mathématique discrétisée d\'un système physique utilisée pour effectuer des calculs', 'is_correct' => true],
                            ['choice_text' => 'Une photographie du système', 'is_correct' => false],
                            ['choice_text' => 'Un instrument de laboratoire', 'is_correct' => false],
                            ['choice_text' => 'Une théorie indépendante de toute équation', 'is_correct' => false],
                        ],
                        'explanation' => 'Un modèle numérique traduit un modèle physique et mathématique sous une forme exploitable par un ordinateur.',
                    ],
                    [
                        'question' => 'Quel langage est couramment utilisé pour les calculs scientifiques et la simulation numérique ?',
                        'choices' => [
                            ['choice_text' => 'Python', 'is_correct' => true],
                            ['choice_text' => 'HTML uniquement', 'is_correct' => false],
                            ['choice_text' => 'CSS uniquement', 'is_correct' => false],
                            ['choice_text' => 'Un langage de balisage uniquement', 'is_correct' => false],
                        ],
                        'explanation' => 'Python est largement utilisé en calcul scientifique grâce à son écosystème numérique et scientifique.',
                    ],
                    [
                        'question' => 'Quel est l\'objectif d\'un algorithme numérique ?',
                        'choices' => [
                            ['choice_text' => 'Décrire une suite d\'étapes permettant d\'obtenir une solution ou un résultat', 'is_correct' => true],
                            ['choice_text' => 'Remplacer les lois physiques par des hypothèses arbitraires', 'is_correct' => false],
                            ['choice_text' => 'Mesurer directement la température sans capteur', 'is_correct' => false],
                            ['choice_text' => 'Supprimer toutes les approximations', 'is_correct' => false],
                        ],
                        'explanation' => 'Un algorithme définit une procédure précise permettant de transformer des données d\'entrée en résultats.',
                    ],
                    [
                        'question' => 'Qu\'est-ce qu\'une simulation numérique ?',
                        'choices' => [
                            ['choice_text' => 'L\'exécution numérique d\'un modèle afin d\'étudier l\'évolution ou le comportement d\'un système', 'is_correct' => true],
                            ['choice_text' => 'Une expérience forcément réalisée avec des particules réelles', 'is_correct' => false],
                            ['choice_text' => 'Une simple image sans calcul', 'is_correct' => false],
                            ['choice_text' => 'Une équation sans aucune donnée', 'is_correct' => false],
                        ],
                        'explanation' => 'Une simulation reproduit numériquement le comportement d\'un système selon un modèle et des conditions données.',
                    ],
                    [
                        'question' => 'Pourquoi compare-t-on souvent une simulation numérique à une solution analytique connue ?',
                        'choices' => [
                            ['choice_text' => 'Pour vérifier que la méthode numérique fonctionne correctement dans un cas test', 'is_correct' => true],
                            ['choice_text' => 'Pour rendre l\'ordinateur plus rapide', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer les unités physiques', 'is_correct' => false],
                            ['choice_text' => 'Pour changer les lois de conservation', 'is_correct' => false],
                        ],
                        'explanation' => 'Une solution connue permet de vérifier l\'erreur et la validité de la méthode numérique.',
                    ],
                    [
                        'question' => 'Que signifie qu\'une solution numérique est approchée ?',
                        'choices' => [
                            ['choice_text' => 'Elle représente une approximation de la solution exacte avec une erreur généralement non nulle', 'is_correct' => true],
                            ['choice_text' => 'Elle est nécessairement fausse', 'is_correct' => false],
                            ['choice_text' => 'Elle ne dépend d\'aucune hypothèse', 'is_correct' => false],
                            ['choice_text' => 'Elle est toujours moins utile qu\'une mesure expérimentale', 'is_correct' => false],
                        ],
                        'explanation' => 'Les méthodes numériques produisent généralement des approximations dont la précision dépend notamment de la méthode et des paramètres utilisés.',
                    ],
                    [
                        'question' => 'Quel outil permet de représenter graphiquement les résultats d\'une simulation ?',
                        'choices' => [
                            ['choice_text' => 'Une bibliothèque de visualisation scientifique', 'is_correct' => true],
                            ['choice_text' => 'Un fusible', 'is_correct' => false],
                            ['choice_text' => 'Une résistance seule', 'is_correct' => false],
                            ['choice_text' => 'Un thermomètre mécanique', 'is_correct' => false],
                        ],
                        'explanation' => 'Les bibliothèques de visualisation permettent de représenter les résultats sous forme de courbes, cartes ou graphiques.',
                    ],
                    [
                        'question' => 'Pourquoi la validation d\'un modèle numérique est-elle importante ?',
                        'choices' => [
                            ['choice_text' => 'Pour vérifier que les résultats représentent correctement le phénomène étudié dans les limites du modèle', 'is_correct' => true],
                            ['choice_text' => 'Pour éviter toute utilisation d\'équations', 'is_correct' => false],
                            ['choice_text' => 'Pour garantir qu\'aucune approximation n\'existe', 'is_correct' => false],
                            ['choice_text' => 'Pour remplacer systématiquement les expériences', 'is_correct' => false],
                        ],
                        'explanation' => 'La validation permet de comparer le modèle et les résultats numériques à des références expérimentales ou théoriques.',
                    ],
                ],
            ],

            [
                'title' => 'Calcul numérique et erreurs',
                'description' => 'Comprendre les erreurs numériques, les approximations et la notion de précision.',
                'questions' => [
                    [
                        'question' => 'Qu\'est-ce qu\'une erreur numérique ?',
                        'choices' => [
                            ['choice_text' => 'Une différence entre le résultat calculé et une valeur exacte ou de référence', 'is_correct' => true],
                            ['choice_text' => 'Une unité physique', 'is_correct' => false],
                            ['choice_text' => 'Une constante universelle', 'is_correct' => false],
                            ['choice_text' => 'Une méthode de visualisation', 'is_correct' => false],
                        ],
                        'explanation' => 'L\'erreur mesure l\'écart entre une approximation numérique et une valeur de référence.',
                    ],
                    [
                        'question' => 'Qu\'appelle-t-on erreur d\'arrondi ?',
                        'choices' => [
                            ['choice_text' => 'L\'erreur introduite lorsqu\'un nombre est représenté avec un nombre limité de chiffres', 'is_correct' => true],
                            ['choice_text' => 'L\'erreur due uniquement à une mesure expérimentale', 'is_correct' => false],
                            ['choice_text' => 'Une erreur liée à la gravité', 'is_correct' => false],
                            ['choice_text' => 'Une erreur provoquée uniquement par une mauvaise unité', 'is_correct' => false],
                        ],
                        'explanation' => 'Les ordinateurs utilisent une représentation finie des nombres, ce qui peut introduire des erreurs d\'arrondi.',
                    ],
                    [
                        'question' => 'Qu\'est-ce que l\'erreur absolue ?',
                        'choices' => [
                            ['choice_text' => 'La valeur absolue de la différence entre l\'approximation et la référence', 'is_correct' => true],
                            ['choice_text' => 'Le rapport entre deux unités', 'is_correct' => false],
                            ['choice_text' => 'La somme des erreurs uniquement', 'is_correct' => false],
                            ['choice_text' => 'La moyenne de toutes les mesures', 'is_correct' => false],
                        ],
                        'explanation' => 'L\'erreur absolue s\'écrit généralement |x - x_ref|.',
                    ],
                    [
                        'question' => 'Qu\'est-ce que l\'erreur relative ?',
                        'choices' => [
                            ['choice_text' => 'L\'erreur absolue rapportée à une valeur de référence non nulle', 'is_correct' => true],
                            ['choice_text' => 'La différence entre deux températures', 'is_correct' => false],
                            ['choice_text' => 'La valeur maximale calculée', 'is_correct' => false],
                            ['choice_text' => 'Le nombre d\'étapes d\'un algorithme', 'is_correct' => false],
                        ],
                        'explanation' => 'L\'erreur relative permet d\'exprimer l\'importance de l\'erreur par rapport à la valeur de référence.',
                    ],
                    [
                        'question' => 'Que signifie la convergence d\'une méthode numérique ?',
                        'choices' => [
                            ['choice_text' => 'La solution numérique tend vers la solution exacte lorsque le paramètre de discrétisation devient suffisamment petit', 'is_correct' => true],
                            ['choice_text' => 'Le programme devient nécessairement plus court', 'is_correct' => false],
                            ['choice_text' => 'Toutes les erreurs deviennent exactement nulles', 'is_correct' => false],
                            ['choice_text' => 'Le système physique cesse d\'évoluer', 'is_correct' => false],
                        ],
                        'explanation' => 'Une méthode convergente produit des approximations de plus en plus proches de la solution exacte dans la limite appropriée.',
                    ],
                    [
                        'question' => 'Pourquoi faut-il choisir une précision numérique adaptée au problème ?',
                        'choices' => [
                            ['choice_text' => 'Une précision excessive peut coûter du temps de calcul tandis qu\'une précision insuffisante peut dégrader le résultat', 'is_correct' => true],
                            ['choice_text' => 'La précision n\'a aucun effet sur le calcul', 'is_correct' => false],
                            ['choice_text' => 'Plus de chiffres garantissent toujours une meilleure modélisation physique', 'is_correct' => false],
                            ['choice_text' => 'La précision dépend uniquement de la couleur de l\'écran', 'is_correct' => false],
                        ],
                        'explanation' => 'Il faut trouver un compromis entre coût de calcul et précision utile.',
                    ],
                    [
                        'question' => 'Qu\'est-ce qu\'une erreur de troncature ?',
                        'choices' => [
                            ['choice_text' => 'Une erreur due au remplacement d\'une opération ou d\'une série exacte par une approximation finie', 'is_correct' => true],
                            ['choice_text' => 'Une erreur causée uniquement par le matériel électronique', 'is_correct' => false],
                            ['choice_text' => 'Une erreur provoquée uniquement par les capteurs', 'is_correct' => false],
                            ['choice_text' => 'Une erreur qui ne dépend jamais de la méthode', 'is_correct' => false],
                        ],
                        'explanation' => 'La troncature apparaît lorsqu\'une expression mathématique est remplacée par une approximation finie.',
                    ],
                    [
                        'question' => 'Une diminution de l\'erreur numérique est-elle toujours obtenue simplement en diminuant le pas de calcul ?',
                        'choices' => [
                            ['choice_text' => 'Pas nécessairement ; le coût, la stabilité et les autres sources d\'erreur doivent aussi être considérés', 'is_correct' => true],
                            ['choice_text' => 'Oui, sans aucune exception', 'is_correct' => false],
                            ['choice_text' => 'Non, les méthodes numériques ne dépendent jamais du pas', 'is_correct' => false],
                            ['choice_text' => 'Oui, et le temps de calcul diminue toujours', 'is_correct' => false],
                        ],
                        'explanation' => 'Réduire le pas peut améliorer la précision mais peut aussi augmenter le coût de calcul et ne garantit pas toujours un comportement stable.',
                    ],
                    [
                        'question' => 'Pourquoi vérifie-t-on les unités dans un calcul numérique de physique ?',
                        'choices' => [
                            ['choice_text' => 'Pour détecter des incohérences et éviter certaines erreurs de formulation', 'is_correct' => true],
                            ['choice_text' => 'Les unités ne servent qu\'aux expériences de laboratoire', 'is_correct' => false],
                            ['choice_text' => 'Les ordinateurs suppriment automatiquement toute erreur d\'unité', 'is_correct' => false],
                            ['choice_text' => 'Les unités n\'ont aucun rapport avec les équations', 'is_correct' => false],
                        ],
                        'explanation' => 'L\'analyse dimensionnelle constitue un contrôle simple mais puissant de la cohérence d\'un calcul physique.',
                    ],
                    [
                        'question' => 'Qu\'est-ce qu\'une méthode numérique stable, dans une définition générale ?',
                        'choices' => [
                            ['choice_text' => 'Une méthode qui ne transforme pas excessivement de petites perturbations ou erreurs en erreurs numériques incontrôlées', 'is_correct' => true],
                            ['choice_text' => 'Une méthode toujours exacte', 'is_correct' => false],
                            ['choice_text' => 'Une méthode qui ne produit aucune approximation', 'is_correct' => false],
                            ['choice_text' => 'Une méthode qui fonctionne sans données', 'is_correct' => false],
                        ],
                        'explanation' => 'La stabilité concerne la manière dont les erreurs ou perturbations évoluent pendant le calcul.',
                    ],
                ],
            ],

            [
                'title' => 'Résolution numérique des équations',
                'description' => 'Découvrir quelques méthodes numériques simples pour résoudre des équations et des systèmes.',
                'questions' => [
                    [
                        'question' => 'Quelle méthode simple permet de chercher numériquement une racine d\'une fonction en divisant un intervalle en deux ?',
                        'choices' => [
                            ['choice_text' => 'La méthode de dichotomie', 'is_correct' => true],
                            ['choice_text' => 'La méthode d\'Euler', 'is_correct' => false],
                            ['choice_text' => 'La méthode de Monte-Carlo uniquement', 'is_correct' => false],
                            ['choice_text' => 'La transformée de Fourier', 'is_correct' => false],
                        ],
                        'explanation' => 'La dichotomie réduit progressivement un intervalle contenant une racine en le divisant en deux.',
                    ],
                    [
                        'question' => 'Que cherche-t-on lorsqu\'on résout numériquement f(x) = 0 ?',
                        'choices' => [
                            ['choice_text' => 'Une valeur de x pour laquelle la fonction est nulle', 'is_correct' => true],
                            ['choice_text' => 'La dérivée maximale de la fonction', 'is_correct' => false],
                            ['choice_text' => 'La température du système', 'is_correct' => false],
                            ['choice_text' => 'La masse de la fonction', 'is_correct' => false],
                        ],
                        'explanation' => 'Résoudre f(x) = 0 revient à trouver ses racines.',
                    ],
                    [
                        'question' => 'Quelle méthode utilise la pente locale d\'une fonction pour approcher une racine ?',
                        'choices' => [
                            ['choice_text' => 'La méthode de Newton-Raphson', 'is_correct' => true],
                            ['choice_text' => 'La méthode de dichotomie uniquement', 'is_correct' => false],
                            ['choice_text' => 'La méthode de Gauss uniquement', 'is_correct' => false],
                            ['choice_text' => 'La méthode des trapèzes', 'is_correct' => false],
                        ],
                        'explanation' => 'La méthode de Newton utilise la dérivée locale pour construire une suite d\'approximations de la racine.',
                    ],
                    [
                        'question' => 'Pourquoi une bonne valeur initiale peut-elle être importante pour la méthode de Newton ?',
                        'choices' => [
                            ['choice_text' => 'Elle peut influencer la convergence vers la racine recherchée', 'is_correct' => true],
                            ['choice_text' => 'Elle supprime toujours toute erreur d\'arrondi', 'is_correct' => false],
                            ['choice_text' => 'Elle rend la dérivée inutile', 'is_correct' => false],
                            ['choice_text' => 'Elle change la fonction physique étudiée', 'is_correct' => false],
                        ],
                        'explanation' => 'Selon la fonction et le choix initial, Newton peut converger rapidement, lentement ou vers une autre racine.',
                    ],
                    [
                        'question' => 'Quelle méthode numérique est souvent utilisée pour résoudre un système linéaire Ax = b ?',
                        'choices' => [
                            ['choice_text' => 'L\'élimination de Gauss', 'is_correct' => true],
                            ['choice_text' => 'La méthode d\'Euler', 'is_correct' => false],
                            ['choice_text' => 'La dichotomie', 'is_correct' => false],
                            ['choice_text' => 'La transformée de Laplace uniquement', 'is_correct' => false],
                        ],
                        'explanation' => 'L\'élimination de Gauss est une méthode classique de résolution de systèmes linéaires.',
                    ],
                    [
                        'question' => 'Que représente le vecteur b dans Ax = b ?',
                        'choices' => [
                            ['choice_text' => 'Le vecteur des termes connus', 'is_correct' => true],
                            ['choice_text' => 'La matrice inverse de A', 'is_correct' => false],
                            ['choice_text' => 'Le vecteur des inconnues', 'is_correct' => false],
                            ['choice_text' => 'La dérivée de A', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans un système linéaire standard, A est la matrice, x le vecteur des inconnues et b le second membre.',
                    ],
                    [
                        'question' => 'Que représente x dans Ax = b ?',
                        'choices' => [
                            ['choice_text' => 'Le vecteur des inconnues à déterminer', 'is_correct' => true],
                            ['choice_text' => 'Le second membre connu', 'is_correct' => false],
                            ['choice_text' => 'La matrice des coefficients', 'is_correct' => false],
                            ['choice_text' => 'Le déterminant de A', 'is_correct' => false],
                        ],
                        'explanation' => 'Le but du calcul est de déterminer le vecteur inconnu x.',
                    ],
                    [
                        'question' => 'Pourquoi utilise-t-on des critères d\'arrêt dans les méthodes itératives ?',
                        'choices' => [
                            ['choice_text' => 'Pour décider quand l\'approximation est suffisamment satisfaisante ou quand arrêter le calcul', 'is_correct' => true],
                            ['choice_text' => 'Pour modifier les lois physiques', 'is_correct' => false],
                            ['choice_text' => 'Pour éviter tout calcul numérique', 'is_correct' => false],
                            ['choice_text' => 'Pour augmenter automatiquement la mémoire de l\'ordinateur', 'is_correct' => false],
                        ],
                        'explanation' => 'Un critère d\'arrêt empêche de poursuivre inutilement les itérations lorsque la précision souhaitée est atteinte.',
                    ],
                    [
                        'question' => 'Une méthode itérative produit-elle généralement une suite d\'approximations ?',
                        'choices' => [
                            ['choice_text' => 'Oui', 'is_correct' => true],
                            ['choice_text' => 'Non, elle donne toujours la solution exacte en une seule étape', 'is_correct' => false],
                            ['choice_text' => 'Seulement pour les équations algébriques simples', 'is_correct' => false],
                            ['choice_text' => 'Non, elle ne produit aucune valeur intermédiaire', 'is_correct' => false],
                        ],
                        'explanation' => 'Les méthodes itératives améliorent progressivement une estimation initiale.',
                    ],
                    [
                        'question' => 'Pourquoi une solution numérique doit-elle être contrôlée après résolution d\'une équation ?',
                        'choices' => [
                            ['choice_text' => 'Pour vérifier le résidu et s\'assurer que l\'approximation satisfait suffisamment le problème', 'is_correct' => true],
                            ['choice_text' => 'Pour supprimer l\'équation originale', 'is_correct' => false],
                            ['choice_text' => 'Pour changer les unités', 'is_correct' => false],
                            ['choice_text' => 'Pour rendre la solution exacte dans tous les cas', 'is_correct' => false],
                        ],
                        'explanation' => 'Le résidu permet notamment d\'évaluer la qualité de la solution numérique obtenue.',
                    ],
                ],
            ],

            [
                'title' => 'Équations différentielles et simulations',
                'description' => 'Introduire les méthodes numériques pour résoudre des équations différentielles simples.',
                'questions' => [
                    [
                        'question' => 'Quel type de problème peut être modélisé par une équation différentielle ?',
                        'choices' => [
                            ['choice_text' => 'L\'évolution temporelle de systèmes physiques comme un oscillateur ou une population', 'is_correct' => true],
                            ['choice_text' => 'Uniquement la conversion de températures', 'is_correct' => false],
                            ['choice_text' => 'Uniquement les nombres premiers', 'is_correct' => false],
                            ['choice_text' => 'Uniquement les distances astronomiques', 'is_correct' => false],
                        ],
                        'explanation' => 'De nombreux systèmes physiques sont décrits par des relations entre une grandeur et ses dérivées.',
                    ],
                    [
                        'question' => 'Quelle méthode élémentaire permet de résoudre numériquement une équation différentielle ordinaire ?',
                        'choices' => [
                            ['choice_text' => 'La méthode d\'Euler', 'is_correct' => true],
                            ['choice_text' => 'La méthode de Gauss pour toute équation différentielle', 'is_correct' => false],
                            ['choice_text' => 'La dichotomie uniquement', 'is_correct' => false],
                            ['choice_text' => 'La loi d\'Ohm', 'is_correct' => false],
                        ],
                        'explanation' => 'La méthode d\'Euler constitue l\'une des approches les plus simples pour intégrer numériquement une équation différentielle ordinaire.',
                    ],
                    [
                        'question' => 'Que fait la méthode d\'Euler à chaque étape ?',
                        'choices' => [
                            ['choice_text' => 'Elle utilise la dérivée actuelle pour estimer l\'état suivant', 'is_correct' => true],
                            ['choice_text' => 'Elle calcule toujours la solution exacte', 'is_correct' => false],
                            ['choice_text' => 'Elle supprime la dérivée', 'is_correct' => false],
                            ['choice_text' => 'Elle change la condition initiale à chaque étape', 'is_correct' => false],
                        ],
                        'explanation' => 'Euler extrapole localement la solution à partir de sa pente connue au point courant.',
                    ],
                    [
                        'question' => 'Que désigne le pas de temps dans une simulation temporelle ?',
                        'choices' => [
                            ['choice_text' => 'L\'intervalle entre deux instants successifs calculés', 'is_correct' => true],
                            ['choice_text' => 'La durée totale de toute la simulation', 'is_correct' => false],
                            ['choice_text' => 'La fréquence de l\'ordinateur', 'is_correct' => false],
                            ['choice_text' => 'La masse du système', 'is_correct' => false],
                        ],
                        'explanation' => 'Le pas de temps Δt définit la séparation entre deux points consécutifs de la discrétisation temporelle.',
                    ],
                    [
                        'question' => 'Que peut provoquer un pas de temps trop grand dans certaines simulations ?',
                        'choices' => [
                            ['choice_text' => 'Une perte de précision ou une instabilité numérique', 'is_correct' => true],
                            ['choice_text' => 'Une amélioration garantie de la précision', 'is_correct' => false],
                            ['choice_text' => 'La suppression de toutes les erreurs', 'is_correct' => false],
                            ['choice_text' => 'La disparition de la physique du système', 'is_correct' => false],
                        ],
                        'explanation' => 'Un pas trop grand peut mal représenter l\'évolution du système et rendre certaines méthodes instables.',
                    ],
                    [
                        'question' => 'Que représente une condition initiale dans une équation différentielle ?',
                        'choices' => [
                            ['choice_text' => 'La valeur de l\'état du système à un instant de départ', 'is_correct' => true],
                            ['choice_text' => 'La valeur finale imposée après simulation', 'is_correct' => false],
                            ['choice_text' => 'La taille de la mémoire de l\'ordinateur', 'is_correct' => false],
                            ['choice_text' => 'Une unité de temps', 'is_correct' => false],
                        ],
                        'explanation' => 'La condition initiale fournit l\'information nécessaire pour démarrer l\'intégration temporelle.',
                    ],
                    [
                        'question' => 'Pourquoi visualise-t-on souvent une variable physique en fonction du temps ?',
                        'choices' => [
                            ['choice_text' => 'Pour observer son évolution et détecter des comportements importants', 'is_correct' => true],
                            ['choice_text' => 'Pour supprimer les données numériques', 'is_correct' => false],
                            ['choice_text' => 'Pour changer les conditions initiales', 'is_correct' => false],
                            ['choice_text' => 'Pour rendre la simulation analytique', 'is_correct' => false],
                        ],
                        'explanation' => 'Les courbes temporelles permettent d\'identifier oscillations, croissance, décroissance ou régimes transitoires.',
                    ],
                    [
                        'question' => 'Un système dynamique peut-il être simulé à partir de plusieurs variables dépendant du temps ?',
                        'choices' => [
                            ['choice_text' => 'Oui', 'is_correct' => true],
                            ['choice_text' => 'Non, une simulation ne peut contenir qu\'une variable', 'is_correct' => false],
                            ['choice_text' => 'Seulement pour les systèmes thermiques', 'is_correct' => false],
                            ['choice_text' => 'Seulement avec une solution analytique', 'is_correct' => false],
                        ],
                        'explanation' => 'De nombreux modèles numériques utilisent des systèmes d\'équations avec plusieurs variables couplées.',
                    ],
                    [
                        'question' => 'Pourquoi compare-t-on deux simulations obtenues avec des pas différents ?',
                        'choices' => [
                            ['choice_text' => 'Pour étudier la sensibilité du résultat à la discrétisation', 'is_correct' => true],
                            ['choice_text' => 'Pour changer la masse du système', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer les équations', 'is_correct' => false],
                            ['choice_text' => 'Pour éviter toute validation', 'is_correct' => false],
                        ],
                        'explanation' => 'Cette comparaison permet d\'évaluer la convergence et l\'influence du pas de calcul.',
                    ],
                    [
                        'question' => 'Quel avantage offrent les méthodes numériques pour les systèmes complexes ?',
                        'choices' => [
                            ['choice_text' => 'Elles permettent de simuler des situations difficiles à traiter analytiquement', 'is_correct' => true],
                            ['choice_text' => 'Elles garantissent toujours une solution exacte', 'is_correct' => false],
                            ['choice_text' => 'Elles rendent inutiles toutes les hypothèses physiques', 'is_correct' => false],
                            ['choice_text' => 'Elles suppriment le besoin de vérifier les résultats', 'is_correct' => false],
                        ],
                        'explanation' => 'Les simulations permettent d\'étudier des modèles complexes malgré l\'absence de solution analytique simple.',
                    ],
                ],
            ],

            [
                'title' => 'Méthodes Monte-Carlo et analyse de données',
                'description' => 'Découvrir les méthodes probabilistes et leur utilisation dans certains problèmes physiques.',
                'questions' => [
                    [
                        'question' => 'Qu\'est-ce qu\'une méthode de Monte-Carlo ?',
                        'choices' => [
                            ['choice_text' => 'Une méthode qui utilise des échantillons aléatoires pour estimer une grandeur ou étudier un système', 'is_correct' => true],
                            ['choice_text' => 'Une méthode exclusivement géométrique', 'is_correct' => false],
                            ['choice_text' => 'Une méthode qui n\'utilise aucun nombre aléatoire', 'is_correct' => false],
                            ['choice_text' => 'Un instrument de mesure mécanique', 'is_correct' => false],
                        ],
                        'explanation' => 'Les méthodes de Monte-Carlo utilisent le hasard contrôlé et l\'échantillonnage statistique pour obtenir des estimations.',
                    ],
                    [
                        'question' => 'Pourquoi utilise-t-on des nombres aléatoires dans une simulation Monte-Carlo ?',
                        'choices' => [
                            ['choice_text' => 'Pour échantillonner statistiquement les situations possibles du problème', 'is_correct' => true],
                            ['choice_text' => 'Pour supprimer les lois de probabilité', 'is_correct' => false],
                            ['choice_text' => 'Pour rendre chaque résultat identique', 'is_correct' => false],
                            ['choice_text' => 'Pour remplacer toutes les équations différentielles', 'is_correct' => false],
                        ],
                        'explanation' => 'L\'échantillonnage aléatoire permet d\'approcher certaines intégrales, probabilités ou grandeurs moyennes.',
                    ],
                    [
                        'question' => 'Dans une simulation Monte-Carlo, que se passe-t-il généralement lorsqu\'on augmente fortement le nombre d\'échantillons ?',
                        'choices' => [
                            ['choice_text' => L\'estimation statistique devient généralement plus précise', 'is_correct' => true],
                            ['choice_text' => 'La simulation devient toujours moins précise', 'is_correct' => false],
                            ['choice_text' => 'Les lois physiques disparaissent', 'is_correct' => false],
                            ['choice_text' => 'Le nombre de variables devient nécessairement nul', 'is_correct' => false],
                        ],
                        'explanation' => 'Un plus grand nombre d\'échantillons réduit généralement les fluctuations statistiques de l\'estimateur.',
                    ],
                    [
                        'question' => 'Pourquoi analyse-t-on les résultats d\'une simulation avec des graphiques ?',
                        'choices' => [
                            ['choice_text' => 'Pour identifier visuellement les tendances, variations et comportements anormaux', 'is_correct' => true],
                            ['choice_text' => 'Pour supprimer l\'erreur numérique', 'is_correct' => false],
                            ['choice_text' => 'Pour transformer automatiquement les données en équations exactes', 'is_correct' => false],
                            ['choice_text' => 'Pour rendre les données indépendantes du modèle', 'is_correct' => false],
                        ],
                        'explanation' => 'La visualisation facilite l\'interprétation et permet de détecter rapidement certaines anomalies.',
                    ],
                    [
                        'question' => 'Qu\'est-ce qu\'une moyenne statistique ?',
                        'choices' => [
                            ['choice_text' => 'Une valeur représentant de manière synthétique un ensemble de données', 'is_correct' => true],
                            ['choice_text' => 'La plus grande valeur possible', 'is_correct' => false],
                            ['choice_text' => 'Toujours la valeur la plus fréquente', 'is_correct' => false],
                            ['choice_text' => 'Une valeur sans rapport avec les mesures', 'is_correct' => false],
                        ],
                        'explanation' => 'La moyenne arithmétique constitue une mesure centrale couramment utilisée pour résumer des données.',
                    ],
                    [
                        'question' => 'Que mesure approximativement l\'écart-type d\'un ensemble de données ?',
                        'choices' => [
                            ['choice_text' => 'La dispersion des valeurs autour de leur moyenne', 'is_correct' => true],
                            ['choice_text' => 'La valeur maximale uniquement', 'is_correct' => false],
                            ['choice_text' => 'La pente d\'une trajectoire', 'is_correct' => false],
                            ['choice_text' => 'La masse du système', 'is_correct' => false],
                        ],
                        'explanation' => 'L\'écart-type mesure la dispersion des observations autour de leur moyenne.',
                    ],
                    [
                        'question' => 'Pourquoi répéter plusieurs simulations avec différentes réalisations aléatoires ?',
                        'choices' => [
                            ['choice_text' => 'Pour estimer la variabilité des résultats et leur incertitude statistique', 'is_correct' => true],
                            ['choice_text' => 'Pour garantir des résultats exactement identiques', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer les variables physiques', 'is_correct' => false],
                            ['choice_text' => 'Pour éviter toute analyse statistique', 'is_correct' => false],
                        ],
                        'explanation' => 'Des répétitions indépendantes permettent d\'évaluer les fluctuations dues à l\'échantillonnage aléatoire.',
                    ],
                    [
                        'question' => 'Une distribution de données permet principalement de voir :',
                        'choices' => [
                            ['choice_text' => 'Comment les valeurs sont réparties dans différentes plages', 'is_correct' => true],
                            ['choice_text' => 'La masse exacte de chaque particule', 'is_correct' => false],
                            ['choice_text' => 'La température absolue de l\'Univers', 'is_correct' => false],
                            ['choice_text' => 'La structure atomique du matériau directement', 'is_correct' => false],
                        ],
                        'explanation' => 'Une distribution montre la fréquence ou la densité des différentes valeurs observées.',
                    ],
                    [
                        'question' => 'Pourquoi faut-il documenter les paramètres d\'une simulation scientifique ?',
                        'choices' => [
                            ['choice_text' => 'Pour permettre de comprendre, vérifier et reproduire les résultats', 'is_correct' => true],
                            ['choice_text' => 'Pour rendre les calculs aléatoires', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer les équations du modèle', 'is_correct' => false],
                            ['choice_text' => 'Pour éviter toute comparaison', 'is_correct' => false],
                        ],
                        'explanation' => 'La reproductibilité est une composante importante d\'une étude computationnelle fiable.',
                    ],
                    [
                        'question' => 'Quelle qualité est particulièrement importante dans un programme scientifique ?',
                        'choices' => [
                            ['choice_text' => 'La reproductibilité des résultats et la traçabilité des paramètres', 'is_correct' => true],
                            ['choice_text' => 'La complexité maximale du code', 'is_correct' => false],
                            ['choice_text' => 'L\'absence totale de commentaires', 'is_correct' => false],
                            ['choice_text' => 'L\'utilisation obligatoire du plus grand nombre de variables possible', 'is_correct' => false],
                        ],
                        'explanation' => 'Un calcul scientifique doit pouvoir être compris, vérifié et reproduit dans des conditions définies.',
                    ],
                ],
            ],

            [
                'title' => 'Visualisation et projets de simulation',
                'description' => 'Apprendre à organiser un petit projet computationnel et à interpréter ses résultats.',
                'questions' => [
                    [
                        'question' => 'Quelle est généralement la première étape d\'un projet de simulation physique ?',
                        'choices' => [
                            ['choice_text' => 'Définir clairement le problème physique et les hypothèses du modèle', 'is_correct' => true],
                            ['choice_text' => 'Écrire immédiatement des milliers de lignes de code', 'is_correct' => false],
                            ['choice_text' => 'Choisir les couleurs du graphique', 'is_correct' => false],
                            ['choice_text' => 'Supprimer toutes les unités', 'is_correct' => false],
                        ],
                        'explanation' => 'La définition du problème et des hypothèses précède normalement l\'implémentation numérique.',
                    ],
                    [
                        'question' => 'Pourquoi sépare-t-on souvent le modèle physique du code de visualisation ?',
                        'choices' => [
                            ['choice_text' => 'Pour rendre le programme plus clair, testable et facile à modifier', 'is_correct' => true],
                            ['choice_text' => 'Pour empêcher toute production de graphique', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer les résultats', 'is_correct' => false],
                            ['choice_text' => 'Parce que les données physiques ne peuvent jamais être affichées', 'is_correct' => false],
                        ],
                        'explanation' => 'Une séparation claire des responsabilités améliore la lisibilité et la maintenance du projet.',
                    ],
                    [
                        'question' => 'Pourquoi faut-il tester un programme numérique avec des cas simples ?',
                        'choices' => [
                            ['choice_text' => 'Pour vérifier progressivement que chaque partie du calcul fonctionne correctement', 'is_correct' => true],
                            ['choice_text' => 'Pour augmenter la complexité du modèle dès le début', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer les conditions initiales', 'is_correct' => false],
                            ['choice_text' => 'Pour éviter d\'utiliser des unités', 'is_correct' => false],
                        ],
                        'explanation' => 'Des cas simples fournissent des références faciles à vérifier et facilitent le débogage.',
                    ],
                    [
                        'question' => 'Qu\'est-ce que le débogage d\'un programme scientifique ?',
                        'choices' => [
                            ['choice_text' => 'La recherche et la correction des erreurs dans le code ou le calcul', 'is_correct' => true],
                            ['choice_text' => 'La création de nouvelles lois physiques', 'is_correct' => false],
                            ['choice_text' => 'La suppression des résultats corrects', 'is_correct' => false],
                            ['choice_text' => 'La transformation automatique d\'un modèle en expérience', 'is_correct' => false],
                        ],
                        'explanation' => 'Le débogage consiste à identifier et corriger les erreurs qui empêchent le programme de produire les résultats attendus.',
                    ],
                    [
                        'question' => 'Pourquoi enregistrer les paramètres utilisés dans une simulation ?',
                        'choices' => [
                            ['choice_text' => 'Pour pouvoir interpréter et reproduire les résultats plus tard', 'is_correct' => true],
                            ['choice_text' => 'Pour empêcher toute modification future', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer les erreurs de mesure automatiquement', 'is_correct' => false],
                            ['choice_text' => 'Pour remplacer les équations physiques', 'is_correct' => false],
                        ],
                        'explanation' => 'Les paramètres constituent une partie essentielle du contexte scientifique d\'un calcul.',
                    ],
                    [
                        'question' => 'Quel graphique convient bien pour suivre l\'évolution d\'une grandeur dans le temps ?',
                        'choices' => [
                            ['choice_text' => 'Une courbe représentant la grandeur en fonction du temps', 'is_correct' => true],
                            ['choice_text' => 'Un diagramme sans axes', 'is_correct' => false],
                            ['choice_text' => 'Un tableau sans valeurs', 'is_correct' => false],
                            ['choice_text' => 'Une photographie uniquement', 'is_correct' => false],
                        ],
                        'explanation' => 'Une courbe temporelle permet de visualiser directement l\'évolution d\'une grandeur.',
                    ],
                    [
                        'question' => 'Pourquoi les axes d\'un graphique scientifique doivent-ils être clairement identifiés ?',
                        'choices' => [
                            ['choice_text' => 'Pour connaître les grandeurs représentées et leurs unités', 'is_correct' => true],
                            ['choice_text' => 'Pour augmenter le nombre de données', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer la légende automatiquement', 'is_correct' => false],
                            ['choice_text' => 'Pour rendre la simulation plus rapide', 'is_correct' => false],
                        ],
                        'explanation' => 'Les noms des axes et les unités sont essentiels à l\'interprétation scientifique d\'un graphique.',
                    ],
                    [
                        'question' => 'Pourquoi comparer une simulation à des données expérimentales ?',
                        'choices' => [
                            ['choice_text' => 'Pour évaluer la capacité du modèle à reproduire le comportement observé', 'is_correct' => true],
                            ['choice_text' => 'Pour rendre les données expérimentales inutiles', 'is_correct' => false],
                            ['choice_text' => 'Pour modifier les lois physiques', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer les incertitudes', 'is_correct' => false],
                        ],
                        'explanation' => 'La comparaison modèle-expérience est importante pour valider ou améliorer un modèle.',
                    ],
                    [
                        'question' => 'Un modèle numérique peut-il être utile même s\'il ne reproduit pas parfaitement toutes les observations ?',
                        'choices' => [
                            ['choice_text' => 'Oui, s\'il est utilisé dans les limites où ses approximations restent acceptables', 'is_correct' => true],
                            ['choice_text' => 'Non, un modèle imparfait est toujours inutile', 'is_correct' => false],
                            ['choice_text' => 'Oui, mais uniquement en dehors de la physique', 'is_correct' => false],
                            ['choice_text' => 'Non, aucune approximation n\'est permise', 'is_correct' => false],
                        ],
                        'explanation' => 'Tous les modèles ont des limites ; leur utilité dépend de la question étudiée et du domaine de validité.',
                    ],
                    [
                        'question' => 'Pourquoi documenter le code d\'une simulation scientifique ?',
                        'choices' => [
                            ['choice_text' => 'Pour faciliter sa compréhension, sa maintenance et sa reproduction', 'is_correct' => true],
                            ['choice_text' => 'Pour empêcher toute vérification', 'is_correct' => false],
                            ['choice_text' => 'Pour augmenter systématiquement sa vitesse', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer les résultats numériques', 'is_correct' => false],
                        ],
                        'explanation' => 'Une bonne documentation améliore la qualité scientifique et technique du projet.',
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