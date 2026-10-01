<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class MultivariableCalculusBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'multivariable-calculus')->firstOrFail();

        $makeQuestion = static function (
            string $question,
            string $correct,
            string $wrong1,
            string $wrong2,
            string $wrong3,
            string $explanation
        ): array {
            return [
                'question' => $question,
                'choices' => [
                    ['choice_text' => $correct, 'is_correct' => true],
                    ['choice_text' => $wrong1, 'is_correct' => false],
                    ['choice_text' => $wrong2, 'is_correct' => false],
                    ['choice_text' => $wrong3, 'is_correct' => false],
                ],
                'explanation' => $explanation,
            ];
        };

        $quizzes = [
            [
                'title' => 'Coordonnées et géométrie à plusieurs variables',
                'description' => 'Lire les points, surfaces et directions dans l\'espace.',
                'duration' => 20,
                'passing_score' => 60,
                'questions' => [
                    $makeQuestion(
                        'Dans l\'espace, combien de coordonnées faut-il pour repérer un point ?',
                        '3',
                        '2',
                        '1',
                        '4',
                        'Un point de l\'espace se décrit par trois coordonnées, par exemple (x,y,z).'
                    ),
                    $makeQuestion(
                        'Quel point appartient à l\'axe x dans R3 ?',
                        '(3,0,0)',
                        '(3,2,0)',
                        '(0,3,0)',
                        '(0,0,3)',
                        'Sur l\'axe x, les coordonnées y et z sont nulles.'
                    ),
                    $makeQuestion(
                        'Quel plan est décrit par z = 0 ?',
                        'Le plan xy',
                        'Le plan yz',
                        'Le plan xz',
                        'La droite z',
                        'z nul signifie que les points sont situés dans le plan des axes x et y.'
                    ),
                    $makeQuestion(
                        'La distance de (0,0,0) à (3,4,0) vaut :',
                        '5',
                        '7',
                        '4',
                        '3',
                        'La formule donne racine de 3²+4²+0², soit 5.'
                    ),
                    $makeQuestion(
                        'Le vecteur (1,2,0) indique principalement :',
                        'Une direction et un déplacement',
                        'Un point fixe uniquement',
                        'Une surface',
                        'Une valeur scalaire',
                        'Un vecteur porte une direction et une norme, contrairement à un simple point.'
                    ),
                    $makeQuestion(
                        'Quelle écriture représente une sphère de centre l\'origine et de rayon 2 ?',
                        'x²+y²+z²=4',
                        'x+y+z=2',
                        'x²+y²+z²=2',
                        'x²+y²=4',
                        'La distance au centre vaut 2, donc son carré vaut 4.'
                    ),
                    $makeQuestion(
                        'Quel objet est défini par x+y+z=1 ?',
                        'Un plan',
                        'Une sphère',
                        'Une droite dans R3',
                        'Un cube',
                        'Une équation linéaire à trois variables décrit un plan.'
                    ),
                    $makeQuestion(
                        'Si deux points ont les mêmes trois coordonnées, ils représentent :',
                        'Le même point',
                        'Deux points opposés',
                        'Deux vecteurs',
                        'Deux plans',
                        'Les coordonnées déterminent un point de façon unique.'
                    ),
                    $makeQuestion(
                        'La norme du vecteur (3,4,0) est :',
                        '5',
                        '7',
                        '4',
                        '25',
                        'La norme vaut √(9+16)=5.'
                    ),
                    $makeQuestion(
                        'Dans R3, le déplacement de (1,1,1) à (3,2,4) est :',
                        '(2,1,3)',
                        '(4,3,5)',
                        '(2,2,4)',
                        '(-2,-1,-3)',
                        'On soustrait les coordonnées du point de départ à celles du point d\'arrivée.'
                    ),
                ],
            ],
            [
                'title' => 'Fonctions de plusieurs variables',
                'description' => 'Comprendre le domaine et l\'interprétation d\'une fonction dépendant de plusieurs variables.',
                'duration' => 20,
                'passing_score' => 60,
                'questions' => [
                    $makeQuestion(
                        'Une fonction f(x,y) dépend de :',
                        'Deux variables',
                        'Une seule variable',
                        'Trois constantes uniquement',
                        'Aucune variable',
                        'La notation f(x,y) indique que la valeur dépend de x et de y.'
                    ),
                    $makeQuestion(
                        'Quel domaine convient à f(x,y)=√(x-y) ?',
                        'x≥y',
                        'x≤y',
                        'x+y≥0',
                        'Tout R²',
                        'Pour une racine carrée réelle, il faut x-y≥0.'
                    ),
                    $makeQuestion(
                        'Pour f(x,y)=x²+y, f(2,3) vaut :',
                        '7',
                        '8',
                        '5',
                        '10',
                        'On obtient 2²+3=7.'
                    ),
                    $makeQuestion(
                        'Les courbes f(x,y)=c représentent généralement :',
                        'Des courbes de niveau',
                        'Des dérivées',
                        'Des axes uniquement',
                        'Des matrices',
                        'Fixer la valeur de la fonction produit une courbe de niveau dans le plan.'
                    ),
                    $makeQuestion(
                        'Quel exemple décrit naturellement une fonction de deux variables ?',
                        'La température selon la latitude et la longitude',
                        'La vitesse selon le temps uniquement',
                        'Le prix d\'un seul produit',
                        'Une suite indexée par n',
                        'La température d\'une surface peut dépendre de deux coordonnées spatiales.'
                    ),
                    $makeQuestion(
                        'Si f(x,y)=xy et x double tandis que y reste fixe, f :',
                        'Double',
                        'Est divisée par deux',
                        'Reste identique',
                        'Devient nulle',
                        'Le produit xy est linéaire par rapport à x lorsque y est fixé.'
                    ),
                    $makeQuestion(
                        'Le domaine d\'une fonction est :',
                        'L\'ensemble des entrées autorisées',
                        'L\'ensemble des sorties uniquement',
                        'La pente de la fonction',
                        'La dérivée',
                        'Le domaine rassemble les valeurs d\'entrée pour lesquelles la fonction est définie.'
                    ),
                    $makeQuestion(
                        'Pour f(x,y)=1/(x+y), quelle condition faut-il imposer ?',
                        'x+y≠0',
                        'x+y=0',
                        'x≥0',
                        'y≥0',
                        'Le dénominateur ne doit pas être nul.'
                    ),
                    $makeQuestion(
                        'Une surface z=f(x,y) se représente dans :',
                        'R3',
                        'R2 uniquement',
                        'R1 uniquement',
                        'R4 obligatoirement',
                        'La paire (x,y) et la hauteur z donnent trois coordonnées.'
                    ),
                    $makeQuestion(
                        'Pourquoi les fonctions de plusieurs variables sont utiles ?',
                        'Elles modélisent des phénomènes dépendant de plusieurs facteurs',
                        'Elles remplacent toutes les équations',
                        'Elles ne servent qu\'en géométrie',
                        'Elles imposent une seule variable',
                        'De nombreux phénomènes réels dépendent simultanément de plusieurs paramètres.'
                    ),
                ],
            ],
            [
                'title' => 'Dérivées partielles',
                'description' => 'Calculer et interpréter des dérivées partielles simples.',
                'duration' => 20,
                'passing_score' => 60,
                'questions' => [
                    $makeQuestion(
                        'Dans ∂f/∂x, quelle variable est considérée comme constante ?',
                        'y',
                        'x',
                        'f',
                        'Aucune',
                        'Pour dériver par rapport à x, on maintient les autres variables constantes.'
                    ),
                    $makeQuestion(
                        'Si f(x,y)=x²+y, alors ∂f/∂x vaut :',
                        '2x',
                        '2y',
                        'x+y',
                        'x²',
                        'Le terme y est constant par rapport à x et disparaît lors de la dérivation.'
                    ),
                    $makeQuestion(
                        'Pour f(x,y)=3x+2y, ∂f/∂y vaut :',
                        '2',
                        '3',
                        '5',
                        '0',
                        'Le coefficient de y est 2.'
                    ),
                    $makeQuestion(
                        'Si f(x,y)=xy, ∂f/∂x vaut :',
                        'y',
                        'x',
                        'xy',
                        '1',
                        'Lorsque y est constant, la dérivée de xy par rapport à x est y.'
                    ),
                    $makeQuestion(
                        'Une dérivée partielle mesure :',
                        'Une variation selon une variable en gardant les autres fixes',
                        'Une distance dans l\'espace',
                        'Une moyenne',
                        'Une probabilité',
                        'Elle mesure le taux de variation local selon une direction coordonnée.'
                    ),
                    $makeQuestion(
                        'Pour f(x,y)=x³+y², ∂f/∂x vaut :',
                        '3x²',
                        '2y',
                        'x²+y²',
                        '3x',
                        'La dérivée de x³ est 3x² et y² est constant par rapport à x.'
                    ),
                    $makeQuestion(
                        'Pour f(x,y)=x²y, ∂f/∂y vaut :',
                        'x²',
                        '2xy',
                        'y²',
                        'x²y',
                        'x² reste constant et la dérivée de y est 1.'
                    ),
                    $makeQuestion(
                        'Si ∂f/∂x est positive en un point, cela suggère que f :',
                        'Augmente localement quand x augmente, y fixé',
                        'Diminue toujours',
                        'Est constante',
                        'N\'a pas de dérivée',
                        'Une dérivée partielle positive correspond à une croissance locale selon x.'
                    ),
                    $makeQuestion(
                        'Pour une fonction constante f(x,y)=7, ses dérivées partielles sont :',
                        'Nulles',
                        'Égales à 7',
                        'Égales à 1',
                        'Indéfinies',
                        'Une constante ne varie avec aucune variable.'
                    ),
                    $makeQuestion(
                        'Les dérivées partielles sont particulièrement utiles pour :',
                        'Étudier les variations locales d\'une fonction de plusieurs variables',
                        'Compter des ensembles',
                        'Mesurer des angles uniquement',
                        'Construire des suites entières',
                        'Elles permettent d\'analyser l\'effet local de chaque variable.'
                    ),
                ],
            ],
            [
                'title' => 'Applications des dérivées partielles',
                'description' => 'Utiliser les dérivées partielles pour des taux de variation et des interprétations concrètes.',
                'duration' => 20,
                'passing_score' => 60,
                'questions' => [
                    $makeQuestion(
                        'Si T(x,y) est une température et ∂T/∂x>0, que signifie ce résultat ?',
                        'La température augmente localement quand x augmente, y fixé',
                        'La température baisse toujours',
                        'La température est nulle',
                        'y augmente',
                        'Le signe positif indique une croissance locale selon x.'
                    ),
                    $makeQuestion(
                        'Pour f(x,y)=x²+y², ∂f/∂x en (2,1) vaut :',
                        '4',
                        '2',
                        '5',
                        '3',
                        '∂f/∂x=2x, donc à x=2 la valeur est 4.'
                    ),
                    $makeQuestion(
                        'Pour f(x,y)=x²+3y, ∂f/∂y vaut :',
                        '3',
                        '2x',
                        'x²',
                        '3y',
                        'Le terme 3y donne une dérivée partielle égale à 3.'
                    ),
                    $makeQuestion(
                        'Si une fonction de coût C(x,y) vérifie ∂C/∂x=5, une petite hausse de x entraîne approximativement :',
                        'Une hausse de coût de 5 par unité de x',
                        'Une baisse de 5 automatiquement',
                        'Un coût nul',
                        'Aucun changement',
                        'La dérivée locale donne le taux de variation approximatif quand x varie légèrement.'
                    ),
                    $makeQuestion(
                        'Une dérivée partielle nulle selon x signifie localement :',
                        'Pas de variation de premier ordre selon x',
                        'Aucune variation selon y',
                        'Une valeur de fonction nulle',
                        'Un maximum global garanti',
                        'Une dérivée partielle nulle signifie seulement une variation de premier ordre nulle dans cette direction.'
                    ),
                    $makeQuestion(
                        'Pour f(x,y)=xy, à (2,3), ∂f/∂x vaut :',
                        '3',
                        '2',
                        '6',
                        '5',
                        'Comme ∂f/∂x=y, on obtient 3.'
                    ),
                    $makeQuestion(
                        'Pour f(x,y)=xy, à (2,3), ∂f/∂y vaut :',
                        '2',
                        '3',
                        '6',
                        '1',
                        'Comme ∂f/∂y=x, on obtient 2.'
                    ),
                    $makeQuestion(
                        'Une pente locale plus grande en valeur absolue signifie souvent :',
                        'Une variation plus rapide dans la direction étudiée',
                        'Une fonction constante',
                        'Une distance plus grande à l\'origine',
                        'Une probabilité plus élevée',
                        'La valeur absolue de la dérivée mesure l\'intensité de la variation locale.'
                    ),
                    $makeQuestion(
                        'Les dérivées partielles peuvent-elles différer selon la variable étudiée ?',
                        'Oui',
                        'Non',
                        'Seulement pour les constantes',
                        'Seulement pour les fonctions linéaires',
                        'Une fonction peut réagir différemment à chaque variable.'
                    ),
                    $makeQuestion(
                        'Dans une application réelle, une dérivée partielle aide notamment à :',
                        'Mesurer l\'effet marginal d\'un facteur',
                        'Compter les solutions d\'une équation',
                        'Déterminer toujours une intégrale exacte',
                        'Construire un triangle',
                        'Elle quantifie l\'effet local d\'une variable sur une sortie.'
                    ),
                ],
            ],
            [
                'title' => 'Gradient et directions',
                'description' => 'Introduire le gradient et les directions de variation les plus fortes.',
                'duration' => 20,
                'passing_score' => 60,
                'questions' => [
                    $makeQuestion(
                        'Le gradient de f contient :',
                        'Les dérivées partielles de f',
                        'Les valeurs de f uniquement',
                        'Les coordonnées des points',
                        'Les intégrales de f',
                        'Le gradient rassemble les dérivées partielles par rapport aux variables.'
                    ),
                    $makeQuestion(
                        'Pour f(x,y)=x²+y², le gradient est :',
                        '(2x,2y)',
                        '(x²,y²)',
                        '(x+y,x-y)',
                        '(2,2)',
                        'On dérive séparément par rapport à x et y.'
                    ),
                    $makeQuestion(
                        'La direction du gradient indique localement :',
                        'La plus forte augmentation',
                        'La plus forte diminution',
                        'Une direction toujours horizontale',
                        'Une direction aléatoire',
                        'Le gradient pointe dans la direction de croissance locale maximale.'
                    ),
                    $makeQuestion(
                        'Pour f(x,y)=x+y, le gradient vaut :',
                        '(1,1)',
                        '(x,y)',
                        '(2,2)',
                        '(0,0)',
                        'Les deux dérivées partielles sont égales à 1.'
                    ),
                    $makeQuestion(
                        'La norme du gradient donne notamment :',
                        'La valeur du taux d\'augmentation maximale',
                        'Une moyenne statistique',
                        'La distance entre deux points',
                        'Le domaine de la fonction',
                        'La norme du gradient représente la pente maximale locale.'
                    ),
                    $makeQuestion(
                        'Si le gradient est nul en un point, cela indique :',
                        'Un point critique possible',
                        'Un maximum global certain',
                        'Une discontinuité obligatoire',
                        'Une fonction forcément nulle',
                        'Un gradient nul signale un point critique, sans suffire à conclure à l\'optimum.'
                    ),
                    $makeQuestion(
                        'Pour f(x,y)=x²+y, au point (2,3), le gradient est :',
                        '(4,1)',
                        '(2,1)',
                        '(4,3)',
                        '(1,4)',
                        'Le gradient vaut (2x,1), donc (4,1).'
                    ),
                    $makeQuestion(
                        'Le gradient est perpendiculaire aux :',
                        'Courbes de niveau',
                        'Axes de coordonnées toujours',
                        'Graphes de suites',
                        'Matrices',
                        'Dans les cas réguliers, le gradient est normal aux courbes de niveau.'
                    ),
                    $makeQuestion(
                        'Une direction unitaire v sert notamment à :',
                        'Normaliser une direction de déplacement',
                        'Calculer une moyenne',
                        'Définir un domaine',
                        'Supprimer une variable',
                        'Elle permet d\'étudier la variation selon une direction de norme 1.'
                    ),
                    $makeQuestion(
                        'Pourquoi le gradient est utile en optimisation ?',
                        'Il indique comment augmenter ou diminuer rapidement une fonction',
                        'Il donne toujours l\'optimum exact',
                        'Il remplace toutes les contraintes',
                        'Il transforme une fonction en constante',
                        'Les méthodes d\'optimisation utilisent l\'information de pente fournie par le gradient.'
                    ),
                ],
            ],
            [
                'title' => 'Plans tangents et approximation locale',
                'description' => 'Utiliser les dérivées partielles pour une approximation linéaire locale.',
                'duration' => 20,
                'passing_score' => 60,
                'questions' => [
                    $makeQuestion(
                        'Le plan tangent sert principalement à :',
                        'Approximer localement une surface',
                        'Calculer une probabilité',
                        'Trouver un entier premier',
                        'Définir un ensemble fini',
                        'Le plan tangent donne une approximation linéaire d\'une surface près d\'un point.'
                    ),
                    $makeQuestion(
                        'Pour z=f(x,y), le plan tangent en (a,b) utilise :',
                        'f(a,b), fx(a,b) et fy(a,b)',
                        'Seulement f(a,b)',
                        'Seulement les coordonnées a,b',
                        'Une intégrale triple obligatoirement',
                        'Ces trois informations déterminent l\'approximation affine locale.'
                    ),
                    $makeQuestion(
                        'Si f(x,y)=x+y, le plan tangent est-il différent du graphe ?',
                        'Non, la fonction est déjà linéaire',
                        'Oui, toujours',
                        'Seulement près de zéro',
                        'Il n\'existe pas',
                        'Une fonction linéaire coïncide avec sa propre approximation tangentielle.'
                    ),
                    $makeQuestion(
                        'Pour une petite variation Δx, Δy, l\'approximation de Δf contient :',
                        'fx Δx + fy Δy',
                        'f Δx Δy uniquement',
                        'x²+y²',
                        'fx/fy',
                        'La différentielle première combine les deux dérivées partielles avec les petites variations.'
                    ),
                    $makeQuestion(
                        'Un modèle linéaire local est surtout fiable :',
                        'Près du point autour duquel il est construit',
                        'Très loin du point',
                        'Uniquement à l\'origine',
                        'Jamais',
                        'L\'approximation locale repose sur de petites variations autour du point de référence.'
                    ),
                    $makeQuestion(
                        'Pour f(x,y)=x²+y, au point (1,2), fx vaut :',
                        '2',
                        '1',
                        '3',
                        '4',
                        'fx=2x, donc fx(1,2)=2.'
                    ),
                    $makeQuestion(
                        'Dans le même exemple, fy vaut :',
                        '1',
                        '2',
                        '0',
                        '3',
                        'La dérivée de y par rapport à y vaut 1.'
                    ),
                    $makeQuestion(
                        'Si une approximation tangentielle est proche de la vraie surface, cela signifie :',
                        'La surface est bien approximée localement',
                        'La fonction est constante partout',
                        'Le gradient est forcément nul',
                        'Le domaine est vide',
                        'Le plan tangent capture correctement le comportement local dans cette zone.'
                    ),
                    $makeQuestion(
                        'Une forte courbure peut rendre une approximation linéaire :',
                        'Moins précise si l\'on s\'éloigne du point',
                        'Exacte partout',
                        'Indépendante du point',
                        'Toujours nulle',
                        'Plus la fonction s\'écarte du comportement linéaire, plus l\'approximation peut perdre en précision.'
                    ),
                    $makeQuestion(
                        'Le terme « local » signifie ici :',
                        'Autour d\'une position donnée',
                        'Sur tout le domaine',
                        'Seulement à l\'infini',
                        'Sur une seule coordonnée',
                        'L\'approximation est destinée à une petite région autour d\'un point de référence.'
                    ),
                ],
            ],
            [
                'title' => 'Extrema et points critiques',
                'description' => 'Identifier des extrema simples et des points critiques pour des fonctions de deux variables.',
                'duration' => 20,
                'passing_score' => 60,
                'questions' => [
                    $makeQuestion(
                        'Un point critique intérieur peut vérifier :',
                        'Le gradient est nul',
                        'La fonction vaut toujours zéro',
                        'Le domaine est vide',
                        'Les deux variables sont égales',
                        'Pour une fonction différentiable, un extremum intérieur régulier nécessite notamment un gradient nul.'
                    ),
                    $makeQuestion(
                        'Pour f(x,y)=x²+y², le point (0,0) est :',
                        'Un minimum global',
                        'Un maximum global',
                        'Un point quelconque',
                        'Une frontière',
                        'La somme de deux carrés est toujours positive ou nulle et vaut 0 à l\'origine.'
                    ),
                    $makeQuestion(
                        'Pour f(x,y)=-x²-y², (0,0) est :',
                        'Un maximum global',
                        'Un minimum global',
                        'Une frontière',
                        'Un point non défini',
                        'La fonction est toujours ≤0 et atteint 0 à l\'origine.'
                    ),
                    $makeQuestion(
                        'Les contraintes sont importantes en optimisation car elles :',
                        'Limitent les points admissibles',
                        'Suppriment la fonction objectif',
                        'Rendent toutes les fonctions convexes',
                        'Imposent toujours x=0',
                        'L\'optimum doit être recherché parmi les points qui satisfont les contraintes.'
                    ),
                    $makeQuestion(
                        'Un optimum global est :',
                        'Le meilleur résultat sur tout le domaine admissible',
                        'Le meilleur seulement près d\'un point',
                        'Toujours situé à l\'origine',
                        'Toujours unique',
                        'Global signifie qu\'aucune autre solution admissible n\'est meilleure selon l\'objectif.'
                    ),
                    $makeQuestion(
                        'Un point critique est-il nécessairement un minimum ?',
                        'Non',
                        'Oui',
                        'Seulement en deux variables',
                        'Seulement pour les polynômes',
                        'Un point critique peut être un maximum, un minimum ou un point selle.'
                    ),
                    $makeQuestion(
                        'Quel test aide à distinguer certains extrema en deux variables ?',
                        'L\'étude de la matrice hessienne',
                        'La moyenne arithmétique',
                        'Le calcul du périmètre',
                        'La factorielle',
                        'Les dérivées secondes et le déterminant de la Hessienne fournissent un test classique.'
                    ),
                    $makeQuestion(
                        'Si une contrainte force x≥0, un optimum peut-il être sur x=0 ?',
                        'Oui',
                        'Non',
                        'Seulement si y=0',
                        'Jamais',
                        'Les frontières du domaine admissible peuvent contenir l\'optimum.'
                    ),
                    $makeQuestion(
                        'Pourquoi comparer plusieurs points candidats ?',
                        'Parce qu\'un point critique n\'est pas automatiquement le meilleur',
                        'Parce que toutes les fonctions ont un seul optimum',
                        'Parce que la dérivée n\'existe jamais',
                        'Parce que les contraintes sont inutiles',
                        'Il faut distinguer les candidats et déterminer la meilleure valeur de l\'objectif.'
                    ),
                    $makeQuestion(
                        'Dans un problème contraint, un optimum peut être trouvé :',
                        'À l\'intérieur ou sur la frontière admissible',
                        'Uniquement au centre',
                        'Uniquement à l\'infini',
                        'Uniquement là où f=0',
                        'Les contraintes peuvent faire apparaître l\'optimum sur une frontière.'
                    ),
                ],
            ],
            [
                'title' => 'Intégration multiple et révision',
                'description' => 'Découvrir les intégrales doubles et revoir les notions clés du calcul multivariable.',
                'duration' => 20,
                'passing_score' => 60,
                'questions' => [
                    $makeQuestion(
                        'Une intégrale double sert notamment à calculer :',
                        'Une accumulation sur une région du plan',
                        'Une dérivée unique',
                        'Une distance sur une droite',
                        'Un entier',
                        'Elle généralise l\'idée d\'addition continue sur une surface plane.'
                    ),
                    $makeQuestion(
                        '∫∫_D 1 dA représente :',
                        'L\'aire de D',
                        'Le périmètre de D',
                        'Le volume d\'un cube fixe',
                        'La dérivée de D',
                        'Intégrer 1 sur une région donne sa mesure d\'aire.'
                    ),
                    $makeQuestion(
                        'Pour une fonction constante 2 sur un domaine d\'aire 5, l\'intégrale double vaut :',
                        '10',
                        '7',
                        '5',
                        '2',
                        'Une constante multipliée par l\'aire donne 2×5=10.'
                    ),
                    $makeQuestion(
                        'Le symbole dA désigne :',
                        'Un petit élément d\'aire',
                        'Une dérivée par rapport à A',
                        'Une dimension',
                        'Un angle',
                        'dA représente une petite portion d\'aire dans le plan.'
                    ),
                    $makeQuestion(
                        'Une fonction de trois variables peut se visualiser comme une valeur associée à :',
                        'Chaque point de R3',
                        'Chaque point d\'une droite uniquement',
                        'Une seule constante',
                        'Un seul angle',
                        'Une fonction f(x,y,z) attribue une valeur à chaque triplet de son domaine.'
                    ),
                    $makeQuestion(
                        'Le gradient rassemble :',
                        'Les dérivées premières',
                        'Les dérivées secondes uniquement',
                        'Les valeurs propres',
                        'Les intégrales',
                        'Il contient les dérivées partielles de premier ordre.'
                    ),
                    $makeQuestion(
                        'Une approximation linéaire est particulièrement utile :',
                        'Pour de petites variations autour d\'un point',
                        'Pour des variations arbitrairement grandes',
                        'Pour compter des permutations',
                        'Pour calculer une variance',
                        'Elle donne une approximation locale efficace près du point de référence.'
                    ),
                    $makeQuestion(
                        'Dans une région admissible, un maximum global doit :',
                        'Être au moins aussi grand que toutes les autres valeurs admissibles',
                        'Être négatif',
                        'Être intérieur',
                        'Être unique',
                        'C\'est la définition du meilleur niveau atteint sur tout l\'ensemble admissible.'
                    ),
                    $makeQuestion(
                        'Que représente une courbe de niveau f(x,y)=c ?',
                        'Les points ayant la même valeur de f',
                        'Les points où le gradient est toujours nul',
                        'Une dérivée',
                        'Une frontière de domaine obligatoire',
                        'Tous les points de la courbe donnent la même valeur c.'
                    ),
                    $makeQuestion(
                        'Quelle idée résume le calcul multivariable ?',
                        'Étudier des fonctions qui dépendent de plusieurs variables et leurs variations',
                        'Étudier uniquement les nombres entiers',
                        'Calculer seulement des suites',
                        'Éviter toute géométrie',
                        'Le calcul multivariable étend le calcul différentiel et intégral à plusieurs dimensions.'
                    ),
                ],
            ],
        ];

        foreach ($quizzes as $quizIndex => $quizData) {
            $quiz = Quiz::updateOrCreate(
                [
                    'subject_id' => $subject->id,
                    'title' => $quizData['title'],
                ],
                [
                    'owner_id' => null,
                    'description' => $quizData['description'],
                    'duration' => $quizData['duration'],
                    'passing_score' => $quizData['passing_score'],
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
