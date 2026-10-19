<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class StatisticsBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'statistics')->firstOrFail();

        $choicePositions = [1,2,2,1,2,2,4,2,2,3,4,3,3,4,2,4,2,3,2,2,4,2,2,3,2,1,1,2,1,4,3,4,4,1,3,3,2,3,4,4,2,1,3,3,4,3,4,1,1,3,2,4,4,3,1,4,2,3,1,1,3,1,1,3,1,4,3,1,1,4,2,4,1,4,1,4,1,3,3,2];
        $choicePositionIndex = 0;

        $makeQuestion = function (
            string $question,
            string $correct,
            string $wrong1,
            string $wrong2,
            string $wrong3,
            string $explanation
        ) use (&$choicePositions, &$choicePositionIndex): array {
            $wrongs = [$wrong1, $wrong2, $wrong3];
            $position = $choicePositions[$choicePositionIndex++];
            $choices = [];
            $wrongIndex = 0;
            for ($slot = 1; $slot <= 4; $slot++) {
                if ($slot === $position) {
                    $choices[] = ['choice_text' => $correct, 'is_correct' => true];
                } else {
                    $choices[] = ['choice_text' => $wrongs[$wrongIndex], 'is_correct' => false];
                    $wrongIndex++;
                }
            }

            return [
                'question' => $question,
                'choices' => $choices,
                'explanation' => $explanation,
            ];
        };

        $quizzes = [
            [
                'title' => 'Organisation des données',
                'description' => 'Types de données, tableaux et fréquences.',
                'duration' => 20,
                'passing_score' => 60,
                'questions' => [
                    $makeQuestion(
                        'La moyenne de 2,4,6 est :',
                        '4',
                        '3',
                        '6',
                        '12',
                        'On calcule (2+4+6)/3=4.'
                    ),
                    $makeQuestion(
                        'La médiane d\'une série ordonnée est :',
                        'La valeur centrale',
                        'La plus grande valeur',
                        'La plus petite valeur',
                        'La somme',
                        'Elle partage la série ordonnée en deux parties de même effectif.'
                    ),
                    $makeQuestion(
                        'Le mode est :',
                        'La valeur la plus fréquente',
                        'La moyenne',
                        'La valeur centrale',
                        'L\'écart maximal',
                        'Le mode est l\'observation ayant la fréquence la plus élevée.'
                    ),
                    $makeQuestion(
                        'L\'étendue d\'une série est :',
                        'Maximum - minimum',
                        'Moyenne - médiane',
                        'Somme / effectif',
                        'Variance / moyenne',
                        'Elle mesure l\'écart entre la plus grande et la plus petite valeur.'
                    ),
                    $makeQuestion(
                        'Si toutes les valeurs augmentent de 3, la moyenne :',
                        'Augmente de 3',
                        'Double',
                        'Ne change pas',
                        'Diminue de 3',
                        'Ajouter une constante à toutes les observations ajoute la même constante à la moyenne.'
                    ),
                    $makeQuestion(
                        'Une fréquence est comprise entre :',
                        '0 et 1',
                        '-1 et 0',
                        '1 et 10',
                        '0 et 1000',
                        'Une fréquence relative est une proportion, donc elle se situe entre 0 et 1.'
                    ),
                    $makeQuestion(
                        'L\'écart-type mesure :',
                        'La dispersion autour de la moyenne',
                        'La médiane',
                        'Le nombre de classes',
                        'Le mode',
                        'Il est lié à la variance et traduit la dispersion des observations.'
                    ),
                    $makeQuestion(
                        'Un échantillon est :',
                        'Une partie de la population étudiée',
                        'Toute la population',
                        'Une moyenne',
                        'Une fréquence',
                        'On observe souvent un échantillon pour tirer des informations sur une population plus large.'
                    ),
                    $makeQuestion(
                        'Un histogramme est adapté surtout à :',
                        'Des données quantitatives regroupées par intervalles',
                        'Des phrases',
                        'Des matrices',
                        'Des équations différentielles',
                        'L\'histogramme représente des fréquences par classes pour une variable quantitative.'
                    ),
                    $makeQuestion(
                        'Une valeur extrême peut fortement influencer :',
                        'La moyenne',
                        'Le nombre de variables',
                        'Le mode toujours',
                        'La taille de l\'échantillon',
                        'La moyenne utilise toutes les valeurs et est sensible aux observations très éloignées.'
                    ),
                ],
            ],
            [
                'title' => 'Moyenne, médiane et mode',
                'description' => 'Comparer les principales mesures de tendance centrale.',
                'duration' => 20,
                'passing_score' => 60,
                'questions' => [
                    $makeQuestion(
                        'Pour la série 1,2,3,4,100, la médiane est :',
                        '3',
                        '22',
                        '100',
                        '2,5',
                        'La valeur centrale de la série ordonnée 1,2,3,4,100 est 3.'
                    ),
                    $makeQuestion(
                        'Pour la série 1,2,3,4,100, la moyenne est :',
                        '22',
                        '3',
                        '20',
                        '100',
                        '(1+2+3+4+100)/5=110/5=22.'
                    ),
                    $makeQuestion(
                        'Pourquoi la médiane est-elle souvent préférée à la moyenne en présence de valeurs extrêmes ?',
                        'Parce qu\'elle est peu sensible aux valeurs très éloignées',
                        'Parce qu\'elle est toujours égale à la moyenne',
                        'Parce qu\'elle utilise toutes les valeurs de façon identique à la moyenne',
                        'Parce qu\'elle est plus difficile à calculer',
                        'La médiane dépend seulement de la position centrale, pas des valeurs extrêmes elles-mêmes.'
                    ),
                    $makeQuestion(
                        'Pour la série 2,2,3,5,8, le mode est :',
                        '2',
                        '3',
                        '5',
                        '8',
                        '2 apparaît deux fois, plus souvent que les autres valeurs.'
                    ),
                    $makeQuestion(
                        'Une série de données peut avoir :',
                        'Plusieurs modes',
                        'Au maximum un seul mode',
                        'Toujours zéro mode',
                        'Un mode égal à la moyenne',
                        'Une série est dite multimodale lorsque plusieurs valeurs partagent la fréquence maximale.'
                    ),
                    $makeQuestion(
                        'Pour une série symétrique (en forme de cloche), moyenne, médiane et mode sont généralement :',
                        'Proches, voire égaux',
                        'Toujours très différents',
                        'Nécessairement nuls',
                        'Égaux à l\'étendue',
                        'Dans une distribution parfaitement symétrique, ces trois mesures coïncident.'
                    ),
                    $makeQuestion(
                        'Pour la série 10,20,30,40, la médiane est :',
                        '25',
                        '20',
                        '30',
                        '35',
                        'Avec un nombre pair de valeurs, la médiane est la moyenne des deux valeurs centrales : (20+30)/2=25.'
                    ),
                    $makeQuestion(
                        'Pour des données qualitatives nominales (sans ordre), quelle mesure de tendance centrale est applicable ?',
                        'Le mode',
                        'Toujours numériques',
                        'Négatives uniquement',
                        'Continues uniquement',
                        'Pour des données qualitatives nominales, seule la modalité la plus fréquente (le mode) est calculable ; la médiane peut aussi s’appliquer aux données qualitatives ordinales.'
                    ),
                    $makeQuestion(
                        'Pour la série 5,5,5,5,5, la moyenne, la médiane et le mode valent tous :',
                        '5',
                        '0',
                        '25',
                        '1',
                        'Lorsque toutes les valeurs sont identiques, les trois mesures coïncident avec cette valeur commune.'
                    ),
                    $makeQuestion(
                        'Si une distribution est fortement asymétrique (étalée vers la droite), la moyenne est généralement :',
                        'Supérieure à la médiane',
                        'Inférieure à la médiane',
                        'Égale à la médiane',
                        'Égale au mode',
                        'Les valeurs élevées isolées dans la queue droite tirent la moyenne vers le haut, au-delà de la médiane.'
                    ),
                ],
            ],
            [
                'title' => 'Moyennes pondérées et fréquences cumulées',
                'description' => 'Calculer des moyennes pondérées et lire des distributions.',
                'duration' => 20,
                'passing_score' => 60,
                'questions' => [
                    $makeQuestion(
                        'Une moyenne pondérée diffère d\'une moyenne simple car :',
                        'Chaque valeur est multipliée par un poids reflétant son importance',
                        'Toutes les valeurs ont le même poids',
                        'Elle ignore certaines valeurs',
                        'Elle ne peut pas être calculée pour des notes',
                        'La pondération permet de donner plus d\'importance à certaines valeurs qu\'à d\'autres.'
                    ),
                    $makeQuestion(
                        'Pour deux notes 12 (coefficient 2) et 18 (coefficient 1), la moyenne pondérée est :',
                        '14',
                        '15',
                        '16',
                        '13',
                        '(12×2+18×1)/(2+1)=(24+18)/3=42/3=14.'
                    ),
                    $makeQuestion(
                        'La fréquence cumulée croissante à une valeur x représente :',
                        'La proportion d\'observations inférieures ou égales à x',
                        'Le nombre total d\'observations',
                        'La fréquence de la valeur x uniquement',
                        'La moyenne des observations',
                        'Elle s\'obtient en additionnant progressivement les fréquences des valeurs inférieures ou égales à x.'
                    ),
                    $makeQuestion(
                        'La fréquence cumulée croissante de la dernière classe d\'une distribution vaut toujours :',
                        '1 (ou 100%)',
                        '0',
                        'La moyenne',
                        'Le mode',
                        'À la fin, toutes les observations ont été cumulées, donc la fréquence cumulée atteint la totalité.'
                    ),
                    $makeQuestion(
                        'Si trois produits coûtent 10€, 20€ et 30€ et sont achetés en quantités 5, 3 et 2, le prix moyen pondéré par les quantités est :',
                        '17€',
                        '20€',
                        '18€',
                        '15€',
                        '(10×5+20×3+30×2)/(5+3+2)=(50+60+60)/10=170/10=17€.'
                    ),
                    $makeQuestion(
                        'Une courbe des fréquences cumulées croissantes est toujours :',
                        'Croissante (ou constante), jamais décroissante',
                        'Décroissante',
                        'Symétrique',
                        'En forme de cloche',
                        'En cumulant des fréquences positives ou nulles, la courbe ne peut qu\'augmenter ou rester stable.'
                    ),
                    $makeQuestion(
                        'La moyenne pondérée des notes d\'un élève est utile notamment lorsque :',
                        'Les différentes évaluations n\'ont pas la même importance',
                        'Toutes les évaluations ont le même coefficient',
                        'Il n\'y a qu\'une seule évaluation',
                        'Les notes sont toutes identiques',
                        'La pondération permet de refléter l\'importance relative de chaque évaluation dans la moyenne finale.'
                    ),
                    $makeQuestion(
                        'Pour lire graphiquement la médiane à partir d\'une courbe de fréquences cumulées, on repère :',
                        'L\'abscisse correspondant à une fréquence cumulée de 50%',
                        'L\'abscisse correspondant à une fréquence cumulée de 100%',
                        'L\'ordonnée maximale de la courbe',
                        'Le point où la courbe commence',
                        'La médiane correspond au point où la moitié des observations ont été cumulées.'
                    ),
                    $makeQuestion(
                        'Dans un calcul de moyenne pondérée, la somme des poids (coefficients) sert :',
                        'De diviseur dans le calcul de la moyenne',
                        'De numérateur uniquement',
                        'À déterminer le mode',
                        'À rien, elle est ignorée',
                        'La moyenne pondérée est la somme des produits (valeur×poids) divisée par la somme des poids.'
                    ),
                    $makeQuestion(
                        'Si tous les poids d\'une moyenne pondérée sont égaux, celle-ci devient :',
                        'Équivalente à une moyenne simple',
                        'Toujours nulle',
                        'Égale au mode',
                        'Impossible à calculer',
                        'Avec des poids identiques, la pondération n\'apporte plus de différenciation et le résultat coïncide avec la moyenne arithmétique simple.'
                    ),
                ],
            ],
            [
                'title' => 'Variance et écart-type',
                'description' => 'Mesurer et interpréter la dispersion.',
                'duration' => 20,
                'passing_score' => 60,
                'questions' => [
                    $makeQuestion(
                        'La variance d\'une série est :',
                        'La moyenne des carrés des écarts à la moyenne',
                        'La moyenne des écarts à la moyenne',
                        'L\'écart entre le maximum et le minimum',
                        'La racine carrée de la moyenne',
                        'La variance se définit comme la moyenne des carrés des écarts par rapport à la moyenne.'
                    ),
                    $makeQuestion(
                        'L\'écart-type est :',
                        'La racine carrée de la variance',
                        'Le carré de la variance',
                        'La moyenne des écarts absolus',
                        'L\'étendue divisée par deux',
                        'L\'écart-type ramène la variance (exprimée en unités au carré) à l\'unité d\'origine des données.'
                    ),
                    $makeQuestion(
                        'Pour la série 2,4,6, l\'écart de chaque valeur à la moyenne (4) est :',
                        '-2, 0, 2',
                        '2, 4, 6',
                        '-4, 0, 4',
                        '0, 0, 0',
                        '2-4=-2, 4-4=0, 6-4=2.'
                    ),
                    $makeQuestion(
                        'Pourquoi élève-t-on les écarts au carré dans le calcul de la variance plutôt que de les additionner directement ?',
                        'Parce que la somme des écarts simples à la moyenne est toujours nulle',
                        'Parce que cela simplifie l\'unité du résultat',
                        'Parce que les écarts négatifs n\'existent pas',
                        'Parce que la moyenne devient alors plus grande',
                        'Les écarts positifs et négatifs s\'annulent exactement ; élever au carré évite cette annulation.'
                    ),
                    $makeQuestion(
                        'Une variance égale à zéro signifie que :',
                        'Toutes les valeurs de la série sont identiques',
                        'La moyenne est nulle',
                        'La série contient une erreur',
                        'L\'étendue est maximale',
                        'Si aucune valeur ne s\'écarte de la moyenne, chaque écart au carré est nul, donc la variance est nulle.'
                    ),
                    $makeQuestion(
                        'Deux séries ont la même moyenne, mais la série A a un écart-type plus grand que la série B. Cela signifie que :',
                        'Les valeurs de A sont globalement plus dispersées autour de la moyenne',
                        'A a forcément plus de valeurs que B',
                        'A a une médiane plus grande',
                        'A et B ont la même dispersion',
                        'Un écart-type plus grand traduit une dispersion plus importante des données autour de la moyenne.'
                    ),
                    $makeQuestion(
                        'Pour la série 1,1,1,1, la variance est :',
                        '0',
                        '1',
                        '4',
                        'Impossible à calculer',
                        'Toutes les valeurs étant égales à la moyenne (1), chaque écart est nul, donc la variance est nulle.'
                    ),
                    $makeQuestion(
                        'L\'écart-type est exprimé dans :',
                        'La même unité que les données d\'origine',
                        'Le carré de l\'unité des données',
                        'Une unité sans rapport avec les données',
                        'Toujours en pourcentage',
                        'Contrairement à la variance, la racine carrée ramène l\'écart-type à l\'unité initiale des observations.'
                    ),
                    $makeQuestion(
                        'Si on multiplie toutes les valeurs d\'une série par 2, l\'écart-type de la nouvelle série est :',
                        'Multiplié par 2',
                        'Multiplié par 4',
                        'Inchangé',
                        'Divisé par 2',
                        'L\'écart-type est sensible à l\'échelle linéairement : multiplier les données par k multiplie l\'écart-type par |k|.'
                    ),
                    $makeQuestion(
                        'Entre deux séries de même moyenne, celle ayant le plus petit écart-type est considérée comme :',
                        'La plus homogène (les valeurs sont plus proches de la moyenne)',
                        'La plus dispersée',
                        'Celle ayant le plus de valeurs',
                        'Celle ayant la médiane la plus grande',
                        'Un écart-type faible indique que les valeurs sont concentrées près de la moyenne.'
                    ),
                ],
            ],
            [
                'title' => 'Quartiles et boîte à moustaches',
                'description' => 'Décrire la position et la dispersion avec les quartiles.',
                'duration' => 20,
                'passing_score' => 60,
                'questions' => [
                    $makeQuestion(
                        'Le premier quartile Q1 d\'une série ordonnée est la valeur telle que :',
                        'Environ 25% des observations lui sont inférieures ou égales',
                        '50% des observations lui sont inférieures ou égales',
                        '75% des observations lui sont inférieures ou égales',
                        '100% des observations lui sont inférieures ou égales',
                        'Le premier quartile partage la série de façon à laisser environ un quart des données en dessous.'
                    ),
                    $makeQuestion(
                        'Le troisième quartile Q3 correspond à :',
                        'Environ 75% des observations inférieures ou égales à cette valeur',
                        '25% des observations inférieures ou égales',
                        '50% des observations inférieures ou égales',
                        '0% des observations inférieures ou égales',
                        'Q3 laisse environ les trois quarts des données en dessous de lui.'
                    ),
                    $makeQuestion(
                        'L\'écart interquartile se calcule par :',
                        'Q3 - Q1',
                        'Q3 + Q1',
                        'Maximum - minimum',
                        'Q2 - Q1',
                        'Il mesure l\'étendue de la moitié centrale des données, entre le premier et le troisième quartile.'
                    ),
                    $makeQuestion(
                        'Dans une boîte à moustaches, la ligne à l\'intérieur de la boîte représente :',
                        'La médiane',
                        'La moyenne',
                        'Le minimum',
                        'L\'écart-type',
                        'La boîte à moustaches place la médiane comme repère central à l\'intérieur du rectangle.'
                    ),
                    $makeQuestion(
                        'Les extrémités des « moustaches » d\'un diagramme en boîte représentent généralement :',
                        'Les valeurs minimale et maximale (hors valeurs aberrantes éventuelles)',
                        'Les quartiles Q1 et Q3',
                        'La moyenne et la médiane',
                        'Le mode et l\'étendue',
                        'Les moustaches s\'étendent jusqu\'aux valeurs extrêmes non considérées comme aberrantes.'
                    ),
                    $makeQuestion(
                        'Le deuxième quartile Q2 d\'une série correspond à :',
                        'La médiane de la série',
                        'Le premier quartile',
                        'Le troisième quartile',
                        'La moyenne des extrêmes',
                        'Par définition, Q2 coïncide exactement avec la médiane de la distribution.'
                    ),
                    $makeQuestion(
                        'Une valeur est souvent considérée comme aberrante dans une boîte à moustaches si elle est :',
                        'Très éloignée au-delà de Q3 ou en-dessous de Q1, selon un critère basé sur l\'écart interquartile',
                        'Toujours égale à la médiane',
                        'Comprise entre Q1 et Q3',
                        'Égale à la moyenne',
                        'Un critère courant marque comme aberrantes les valeurs situées à plus de 1,5 fois l\'écart interquartile au-delà de Q1 ou Q3.'
                    ),
                    $makeQuestion(
                        'Comparer deux boîtes à moustaches côte à côte permet surtout de :',
                        'Comparer rapidement la position centrale et la dispersion de deux séries',
                        'Calculer automatiquement la variance exacte',
                        'Déterminer le mode de chaque série',
                        'Remplacer le calcul de la moyenne',
                        'La représentation visuelle facilite la comparaison de la médiane, des quartiles et de l\'étendue entre séries.'
                    ),
                    $makeQuestion(
                        'Pour la série ordonnée 1,2,3,4,5,6,7,8,9, la médiane (Q2) est :',
                        '5',
                        '4',
                        '6',
                        '4,5',
                        'Avec 9 valeurs, la médiane est la 5e valeur, soit 5.'
                    ),
                    $makeQuestion(
                        'Une boîte à moustaches très étroite (petit écart interquartile) indique que :',
                        'La moitié centrale des données est fortement concentrée',
                        'Les données sont très dispersées',
                        'La médiane est incorrecte',
                        'Il y a forcément des valeurs aberrantes',
                        'Un faible écart interquartile signifie que les 50% centraux des observations sont proches les uns des autres.'
                    ),
                ],
            ],
            [
                'title' => 'Graphiques et distributions',
                'description' => 'Choisir et interpréter des représentations adaptées.',
                'duration' => 20,
                'passing_score' => 60,
                'questions' => [
                    $makeQuestion(
                        'Un diagramme en bâtons est particulièrement adapté pour représenter :',
                        'Une variable discrète ou qualitative avec un nombre limité de catégories',
                        'Une variable continue regroupée par intervalles',
                        'Une seule valeur numérique',
                        'Une équation différentielle',
                        'Les bâtons séparés conviennent aux valeurs discrètes ou catégories distinctes, contrairement à l\'histogramme qui regroupe des intervalles continus.'
                    ),
                    $makeQuestion(
                        'Un diagramme circulaire (camembert) représente le mieux :',
                        'La répartition de parts d\'un total en pourcentages',
                        'L\'évolution d\'une variable dans le temps',
                        'La dispersion autour de la moyenne',
                        'La médiane d\'une série',
                        'Le camembert divise un cercle en secteurs proportionnels à la part de chaque catégorie dans le total.'
                    ),
                    $makeQuestion(
                        'Pour représenter l\'évolution d\'une quantité au cours du temps, on utilise le plus souvent :',
                        'Un diagramme en ligne (courbe chronologique)',
                        'Un diagramme circulaire',
                        'Une boîte à moustaches uniquement',
                        'Un histogramme uniquement',
                        'La courbe relie les points mesurés à différents instants, ce qui montre clairement une tendance temporelle.'
                    ),
                    $makeQuestion(
                        'Dans un histogramme à classes de même largeur, la hauteur de chaque barre représente généralement :',
                        'La fréquence (ou l\'effectif) des valeurs appartenant à cette classe',
                        'La valeur centrale de la classe',
                        'Le numéro de la classe',
                        'La moyenne globale',
                        'Lorsque les classes ont la même largeur, la hauteur peut représenter l’effectif ou la fréquence ; si leurs largeurs diffèrent, c’est l’aire de la barre qui représente l’effectif ou la fréquence.'
                    ),
                    $makeQuestion(
                        'Une distribution est dite symétrique lorsque :',
                        'Sa forme est semblable de part et d\'autre de son centre',
                        'Toutes les valeurs sont égales',
                        'Elle n\'a pas de mode',
                        'Sa moyenne est toujours nulle',
                        'La symétrie signifie que la partie gauche et la partie droite de la distribution se correspondent par réflexion autour du centre.'
                    ),
                    $makeQuestion(
                        'Une distribution bimodale présente :',
                        'Deux pics (deux valeurs ou intervalles de fréquence maximale)',
                        'Aucun pic',
                        'Un seul pic très marqué',
                        'Une forme toujours symétrique',
                        'Le préfixe « bi » indique la présence de deux modes distincts dans la distribution.'
                    ),
                    $makeQuestion(
                        'Choisir un graphique inadapté au type de données (par exemple un camembert pour une évolution temporelle) peut :',
                        'Rendre l\'interprétation des données trompeuse ou confuse',
                        'Toujours améliorer la clarté',
                        'N\'avoir aucune conséquence',
                        'Changer la valeur réelle des données',
                        'Le choix du graphique doit correspondre à la nature des données pour transmettre une information claire et fidèle.'
                    ),
                    $makeQuestion(
                        'Dans un nuage de points (scatter plot), chaque point représente :',
                        'Une observation selon deux variables mesurées simultanément',
                        'Une seule variable',
                        'La moyenne de toutes les observations',
                        'Une classe de fréquences',
                        'Un nuage de points sert à visualiser la relation entre deux variables mesurées sur les mêmes individus.'
                    ),
                    $makeQuestion(
                        'Un graphique dont l\'axe des ordonnées ne commence pas à zéro peut :',
                        'Exagérer visuellement les différences entre les valeurs',
                        'Toujours représenter fidèlement les données',
                        'Rendre les données fausses numériquement',
                        'Être interdit dans tous les cas',
                        'Tronquer l\'axe peut amplifier visuellement des écarts qui sont en réalité modestes, d\'où la nécessité de lire les échelles avec attention.'
                    ),
                    $makeQuestion(
                        'Pour comparer la répartition de deux variables qualitatives sur un même graphique, on peut utiliser :',
                        'Un diagramme en bâtons groupés (ou empilés)',
                        'Un nuage de points uniquement',
                        'Une boîte à moustaches uniquement',
                        'Une courbe de fréquences cumulées uniquement',
                        'Les bâtons groupés ou empilés permettent de comparer visuellement plusieurs catégories côte à côte.'
                    ),
                ],
            ],
            [
                'title' => 'Population, échantillon et qualité des données',
                'description' => 'Distinguer population, échantillon et sources de biais.',
                'duration' => 20,
                'passing_score' => 60,
                'questions' => [
                    $makeQuestion(
                        'La population, en statistique, désigne :',
                        'L\'ensemble complet des individus ou éléments concernés par l\'étude',
                        'Uniquement les individus interrogés',
                        'La moyenne des données',
                        'Le nombre d\'habitants d\'un pays',
                        'La population statistique est l\'ensemble total visé par l\'étude, pas seulement les personnes effectivement observées.'
                    ),
                    $makeQuestion(
                        'Un échantillon représentatif doit :',
                        'Refléter fidèlement les caractéristiques importantes de la population',
                        'Contenir tous les individus de la population',
                        'Être composé uniquement de valeurs extrêmes',
                        'Avoir une taille égale à 10',
                        'La représentativité garantit que les conclusions tirées de l\'échantillon s\'appliquent raisonnablement à la population entière.'
                    ),
                    $makeQuestion(
                        'Un biais d\'échantillonnage se produit lorsque :',
                        'Certains individus de la population ont une chance différente d\'être inclus dans l\'échantillon',
                        'L\'échantillon contient exactement la population entière',
                        'Toutes les probabilités de sélection sont égales',
                        'L\'échantillon est trop grand',
                        'Un biais apparaît quand la méthode de sélection favorise ou défavorise systématiquement certains groupes.'
                    ),
                    $makeQuestion(
                        'Interroger uniquement des personnes présentes dans un centre commercial un après-midi en semaine pour étudier les habitudes de toute une ville est un exemple de :',
                        'Échantillon potentiellement biaisé, non représentatif de toute la population',
                        'Échantillon parfaitement représentatif',
                        'Recensement complet de la population',
                        'Méthode sans aucun inconvénient',
                        'Ce choix exclut systématiquement les personnes qui travaillent à ce moment-là ou qui ne fréquentent pas ce lieu.'
                    ),
                    $makeQuestion(
                        'Un recensement, contrairement à un sondage par échantillon, consiste à :',
                        'Interroger ou mesurer l\'ensemble de la population',
                        'N\'interroger qu\'une petite partie de la population',
                        'Ignorer certains individus par choix',
                        'Calculer uniquement une moyenne théorique',
                        'Le recensement vise l\'exhaustivité, alors que le sondage se limite à un sous-ensemble représentatif.'
                    ),
                    $makeQuestion(
                        'Augmenter la taille d\'un échantillon (toutes choses égales) tend généralement à :',
                        'Réduire l\'incertitude des estimations basées sur cet échantillon',
                        'Augmenter systématiquement le biais',
                        'Rendre l\'échantillon moins représentatif',
                        'N\'avoir aucun effet sur la précision',
                        'Un échantillon plus grand fournit en général une estimation plus précise de la population, à méthode de sélection égale.'
                    ),
                    $makeQuestion(
                        'La qualité des conclusions statistiques dépend principalement :',
                        'De la méthode de collecte des données et de la représentativité de l\'échantillon',
                        'Uniquement du nombre de décimales utilisées dans les calculs',
                        'De la couleur des graphiques produits',
                        'Du logiciel utilisé pour les calculs',
                        'Des données bien collectées et un échantillon représentatif sont essentiels pour des conclusions fiables, indépendamment des outils de calcul.'
                    ),
                    $makeQuestion(
                        'Des données manquantes ou mal renseignées dans un jeu de données peuvent :',
                        'Biaiser les résultats si elles ne sont pas correctement traitées',
                        'Toujours améliorer la précision des résultats',
                        'N\'avoir aucun effet sur l\'analyse',
                        'Remplacer automatiquement les valeurs aberrantes',
                        'Ignorer ou mal gérer les données manquantes peut fausser les statistiques calculées sur le reste du jeu de données.'
                    ),
                    $makeQuestion(
                        'Un sondage réalisé uniquement auprès de volontaires qui répondent spontanément à une enquête en ligne risque de souffrir :',
                        'D\'un biais de sélection, les volontaires n\'étant pas représentatifs de la population',
                        'D\'aucun biais particulier',
                        'D\'un échantillon trop grand',
                        'D\'un recensement complet involontaire',
                        'Les personnes qui choisissent spontanément de répondre diffèrent souvent systématiquement du reste de la population.'
                    ),
                    $makeQuestion(
                        'Pourquoi précise-t-on souvent la méthode d\'échantillonnage utilisée dans une étude statistique ?',
                        'Pour permettre d\'évaluer la fiabilité et la portée des conclusions',
                        'Parce que la loi l\'exige pour tout document',
                        'Pour rendre l\'étude plus longue à lire',
                        'Parce que cela change le calcul de la moyenne',
                        'Connaître la méthode d\'échantillonnage permet de juger si les résultats peuvent raisonnablement être généralisés à la population visée.'
                    ),
                ],
            ],
            [
                'title' => 'Interprétation statistique',
                'description' => 'Tirer des conclusions prudentes à partir des données.',
                'duration' => 20,
                'passing_score' => 60,
                'questions' => [
                    $makeQuestion(
                        'Une corrélation entre deux variables signifie que :',
                        'Elles varient ensemble selon une tendance observable',
                        'L\'une cause nécessairement l\'autre',
                        'Elles sont indépendantes',
                        'Elles ont la même moyenne',
                        'La corrélation décrit une association statistique, sans impliquer automatiquement une relation de cause à effet.'
                    ),
                    $makeQuestion(
                        'L\'expression « corrélation n\'implique pas causalité » signifie que :',
                        'Deux variables peuvent varier ensemble sans que l\'une soit la cause de l\'autre',
                        'Une corrélation est toujours due au hasard',
                        'Il n\'existe jamais de lien causal entre deux variables corrélées',
                        'La corrélation est une erreur de calcul',
                        'D\'autres facteurs, comme une cause commune, peuvent expliquer une corrélation sans lien causal direct.'
                    ),
                    $makeQuestion(
                        'Présenter une moyenne sans mentionner la dispersion des données peut :',
                        'Donner une image incomplète ou trompeuse de la réalité',
                        'Toujours suffire à décrire parfaitement les données',
                        'Remplacer le besoin de collecter des données',
                        'Garantir l\'absence de valeurs extrêmes',
                        'Deux séries de même moyenne peuvent avoir des dispersions très différentes, ce qui change l\'interprétation.'
                    ),
                    $makeQuestion(
                        'Un résultat statistiquement significatif indique principalement que :',
                        'L\'effet observé est peu probable en supposant l\'absence réelle d\'effet',
                        'L\'effet observé est forcément très important en pratique',
                        'Les données ont été mal collectées',
                        'Le résultat est faux',
                        'La significativité statistique informe sur la probabilité de l\'observation sous une hypothèse nulle, sans mesurer directement l\'importance pratique de l\'effet.'
                    ),
                    $makeQuestion(
                        'Comparer des pourcentages calculés sur des effectifs très différents sans le préciser peut :',
                        'Conduire à des conclusions trompeuses',
                        'Être toujours parfaitement rigoureux',
                        'Rendre les pourcentages incomparables par nature',
                        'Changer automatiquement la définition du pourcentage',
                        'Un même pourcentage peut représenter des quantités très différentes selon la taille de l\'effectif de référence, ce qu\'il convient de préciser.'
                    ),
                    $makeQuestion(
                        'Pourquoi est-il important d\'indiquer la taille de l\'échantillon lorsqu\'on communique un résultat statistique ?',
                        'Parce qu\'elle informe sur la fiabilité potentielle de l\'estimation',
                        'Parce qu\'elle ne change jamais l\'interprétation',
                        'Parce qu\'elle remplace le calcul de la moyenne',
                        'Parce que la loi l\'exige dans tous les pays',
                        'Un résultat basé sur un petit échantillon est généralement moins fiable qu\'un résultat basé sur un grand échantillon.'
                    ),
                    $makeQuestion(
                        'Interpréter une statistique hors de son contexte de collecte (population, période, méthode) risque de :',
                        'Mener à des généralisations incorrectes',
                        'Toujours donner la bonne conclusion',
                        'Rendre le calcul numérique faux',
                        'Changer la définition de la moyenne',
                        'Le contexte de collecte détermine la portée légitime d\'une statistique ; l\'ignorer peut fausser son interprétation.'
                    ),
                    $makeQuestion(
                        'Si deux groupes ont des tailles d\'échantillon très différentes, comparer directement leurs moyennes sans tenir compte de cette différence peut :',
                        'Masquer le fait que l\'estimation du plus petit groupe est moins précise',
                        'Garantir une comparaison parfaitement équitable',
                        'Rendre les deux moyennes identiques',
                        'Supprimer le besoin de calculer un écart-type',
                        'Une moyenne calculée sur peu d\'observations est généralement plus sensible aux fluctuations que celle d\'un grand échantillon.'
                    ),
                    $makeQuestion(
                        'Un graphique ou un chiffre présenté sans préciser la source des données :',
                        'Rend plus difficile l\'évaluation de sa fiabilité',
                        'Est toujours suffisant pour être exploité',
                        'Garantit automatiquement son exactitude',
                        'N\'a besoin d\'aucune vérification',
                        'Connaître la source permet d\'évaluer la méthodologie et la fiabilité des données présentées.'
                    ),
                    $makeQuestion(
                        'La prudence en interprétation statistique consiste notamment à :',
                        'Préciser les limites, le contexte et la méthode derrière chaque résultat communiqué',
                        'Toujours arrondir les résultats à l\'unité',
                        'Éviter de présenter des graphiques',
                        'Ne jamais comparer deux séries de données',
                        'Une communication statistique responsable situe les résultats dans leur contexte et leurs limites méthodologiques.'
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
