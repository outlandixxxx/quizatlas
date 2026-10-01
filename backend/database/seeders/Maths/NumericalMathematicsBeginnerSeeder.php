<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class NumericalMathematicsBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'numerical-mathematics')->firstOrFail();

        $settings = [
            'duration' => 20,
            'passing_score' => 60,
        ];

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
                'title' => "Fondamentaux du calcul numérique",
                'description' => "Découvrir le rôle du calcul numérique, les approximations et les notions de base liées aux algorithmes numériques.",
                'questions' => [
                    $makeQuestion(
                        "Quel est l'objectif principal des méthodes numériques ?",
                        "Obtenir une approximation d'une solution lorsque le calcul exact est difficile ou impossible.",
                        "Remplacer toute forme de raisonnement mathématique.",
                        "Produire uniquement des nombres entiers.",
                        "Éviter complètement les calculs sur ordinateur.",
                        "Les méthodes numériques permettent de calculer des approximations utiles pour des problèmes qui ne se résolvent pas facilement de manière exacte."
                    ),
                    $makeQuestion(
                        "Lequel est un résultat numérique approché ?",
                        "π ≈ 3,1416",
                        "2 + 2 = 4",
                        "5 × 3 = 15",
                        "7 - 2 = 5",
                        "Le symbole ≈ indique une approximation, tandis que les autres égalités sont exactes."
                    ),
                    $makeQuestion(
                        "Pourquoi utilise-t-on souvent des méthodes numériques sur ordinateur ?",
                        "Parce qu'elles permettent d'effectuer rapidement beaucoup de calculs répétitifs.",
                        "Parce qu'un ordinateur ne peut jamais faire d'erreur d'arrondi.",
                        "Parce que toutes les équations deviennent exactes sur ordinateur.",
                        "Parce que les résultats n'ont jamais besoin d'être interprétés.",
                        "Les algorithmes numériques réalisent efficacement des suites de calculs qui seraient longues à effectuer manuellement."
                    ),
                    $makeQuestion(
                        "Que signifie généralement le symbole ≈ dans un calcul numérique ?",
                        "La valeur de gauche est une approximation de celle de droite.",
                        "Les deux valeurs sont forcément identiques au chiffre près.",
                        "Le calcul est impossible.",
                        "Le résultat est toujours inférieur à zéro.",
                        "Le symbole ≈ signale qu'une valeur est approchée et peut différer légèrement de la valeur exacte."
                    ),
                    $makeQuestion(
                        "Quelle valeur est la plus proche de 1/3 ?",
                        "0,3333",
                        "0,25",
                        "0,5",
                        "0,8",
                        "1/3 vaut environ 0,3333, donc cette valeur est la plus proche parmi les propositions."
                    ),
                    $makeQuestion(
                        "Si une calculatrice affiche 2,7182818 pour e, que représente ce nombre ?",
                        "Une approximation décimale de e.",
                        "Une valeur exacte avec un nombre fini de chiffres.",
                        "Une valeur entière.",
                        "Une erreur de calcul obligatoire.",
                        "e est un nombre irrationnel, donc son écriture décimale est infinie ; l'affichage de la calculatrice est une approximation."
                    ),
                    $makeQuestion(
                        "Quel élément décrit le mieux un algorithme numérique ?",
                        "Une suite finie d'étapes permettant d'effectuer un calcul.",
                        "Une seule valeur sans aucune opération.",
                        "Un graphique uniquement.",
                        "Une équation qui n'a aucune donnée d'entrée.",
                        "Un algorithme numérique organise les étapes du calcul à partir de données d'entrée pour produire un résultat."
                    ),
                    $makeQuestion(
                        "Pourquoi une approximation peut-elle être acceptable en pratique ?",
                        "Parce qu'une petite erreur peut être négligeable pour l'application étudiée.",
                        "Parce qu'une approximation est toujours exacte.",
                        "Parce que les erreurs sont toujours positives.",
                        "Parce qu'on n'a jamais besoin de comparer les résultats.",
                        "Dans de nombreuses applications, une précision suffisante est plus importante qu'une expression exacte impossible à obtenir facilement."
                    ),
                    $makeQuestion(
                        "Quel ordre de grandeur est le plus proche de 0,0047 ?",
                        "10^-3",
                        "10^-1",
                        "10^1",
                        "10^3",
                        "0,0047 est de l'ordre de quelques millièmes, donc 10^-3 est l'ordre de grandeur le plus adapté."
                    ),
                    $makeQuestion(
                        "Lorsqu'un algorithme s'arrête parce qu'une précision suffisante est atteinte, on utilise généralement :",
                        "un critère d'arrêt.",
                        "une permutation.",
                        "une dérivée seconde obligatoire.",
                        "une constante aléatoire.",
                        "Le critère d'arrêt indique quand l'approximation est considérée comme suffisamment précise."
                    ),
                ],
            ],

            [
                'title' => "Erreurs, précision et arrondi",
                'description' => "Comprendre les erreurs absolue et relative, l'arrondi et les chiffres significatifs dans les calculs numériques.",
                'questions' => [
                    $makeQuestion(
                        "Une valeur exacte vaut 10 et une approximation vaut 9,8. Quelle est l'erreur absolue ?",
                        "0,2",
                        "0,02",
                        "0,8",
                        "1,2",
                        "L'erreur absolue est |10 - 9,8| = 0,2."
                    ),
                    $makeQuestion(
                        "Pour l'exemple précédent, quelle est l'erreur relative ?",
                        "0,02",
                        "0,2",
                        "0,98",
                        "2",
                        "L'erreur relative vaut 0,2 / 10 = 0,02, soit 2 %."
                    ),
                    $makeQuestion(
                        "Comment écrit-on 3,746 arrondi au centième ?",
                        "3,75",
                        "3,74",
                        "3,70",
                        "3,76",
                        "Le chiffre des millièmes est 6, donc le chiffre des centièmes augmente de 4 à 5."
                    ),
                    $makeQuestion(
                        "Comment arrondir 12,431 au dixième ?",
                        "12,4",
                        "12,5",
                        "12,43",
                        "13,0",
                        "Le chiffre des centièmes est 3, donc le chiffre des dixièmes reste 4."
                    ),
                    $makeQuestion(
                        "Quelle affirmation est correcte au sujet de l'erreur absolue ?",
                        "Elle mesure la distance entre la valeur exacte et l'approximation.",
                        "Elle est toujours supérieure à 1.",
                        "Elle est forcément négative.",
                        "Elle ne dépend jamais de la valeur exacte.",
                        "L'erreur absolue est définie par la valeur absolue de la différence entre la valeur exacte et la valeur approchée."
                    ),
                    $makeQuestion(
                        "Une mesure exacte vaut 50 et la mesure approchée vaut 49.5. Quelle est l'erreur relative en pourcentage ?",
                        "1 %",
                        "0,5 %",
                        "2 %",
                        "10 %",
                        "L'erreur relative est 0,5 / 50 = 0,01, soit 1 %."
                    ),
                    $makeQuestion(
                        "Combien de chiffres après la virgule contient 7,250 ?",
                        "3",
                        "1",
                        "2",
                        "4",
                        "L'écriture 7,250 contient trois chiffres après la virgule : 2, 5 et 0."
                    ),
                    $makeQuestion(
                        "Quel arrondi de 8,995 au centième est correct ?",
                        "9,00",
                        "8,99",
                        "8,90",
                        "9,05",
                        "Au centième, 8,995 est arrondi vers 9,00 lorsque le chiffre suivant conduit à augmenter le centième."
                    ),
                    $makeQuestion(
                        "Une erreur relative de 0,001 correspond à :",
                        "0,1 %",
                        "1 %",
                        "10 %",
                        "0,01 %",
                        "0,001 × 100 = 0,1 %."
                    ),
                    $makeQuestion(
                        "Pourquoi faut-il surveiller les arrondis pendant une suite de calculs ?",
                        "Parce que de petites erreurs peuvent parfois se cumuler.",
                        "Parce qu'un arrondi transforme toujours un nombre en entier.",
                        "Parce que les arrondis rendent tous les calculs exacts.",
                        "Parce qu'un arrondi ne peut jamais modifier un résultat final.",
                        "Des approximations successives peuvent entraîner une erreur finale plus importante que prévu, surtout dans certains calculs sensibles."
                    ),
                ],
            ],

            [
                'title' => "Méthode de dichotomie",
                'description' => "Utiliser la méthode de dichotomie pour encadrer et approcher une racine d'équation.",
                'questions' => [
                    $makeQuestion(
                        "La méthode de dichotomie repose principalement sur :",
                        "un intervalle contenant une racine et sur son découpage successif en deux.",
                        "une dérivation répétée sans intervalle.",
                        "une permutation de toutes les racines.",
                        "un calcul aléatoire du résultat.",
                        "La dichotomie réduit progressivement un intervalle dont les extrémités encadrent une racine."
                    ),
                    $makeQuestion(
                        "Quel est le milieu de l'intervalle [2 ; 6] ?",
                        "4",
                        "2",
                        "3",
                        "8",
                        "Le milieu vaut (2 + 6) / 2 = 4."
                    ),
                    $makeQuestion(
                        "Si un intervalle [a ; b] est utilisé par dichotomie, quelle longueur a le sous-intervalle après une étape ?",
                        "La moitié de la longueur précédente.",
                        "Le double de la longueur précédente.",
                        "La même longueur.",
                        "Zéro immédiatement.",
                        "À chaque étape, l'intervalle est partagé en deux, puis on conserve l'une des moitiés."
                    ),
                    $makeQuestion(
                        "Pour appliquer la dichotomie à une fonction continue f, on recherche généralement un intervalle [a ; b] tel que :",
                        "f(a) et f(b) aient des signes opposés.",
                        "f(a) = f(b) = 1 toujours.",
                        "a = b obligatoirement.",
                        "f(a) et f(b) soient toujours tous deux positifs.",
                        "Pour une fonction continue, un changement de signe aux extrémités permet de garantir l'existence d'une racine dans l'intervalle."
                    ),
                    $makeQuestion(
                        "Si l'intervalle courant est [1 ; 5], quel point teste-t-on en premier ?",
                        "3",
                        "2",
                        "4",
                        "5",
                        "Le point milieu est (1 + 5) / 2 = 3."
                    ),
                    $makeQuestion(
                        "Après trois divisions successives par deux, la longueur initiale d'un intervalle est divisée par :",
                        "8",
                        "3",
                        "6",
                        "9",
                        "Trois divisions par deux donnent un facteur 2³ = 8."
                    ),
                    $makeQuestion(
                        "Quelle propriété rend la dichotomie particulièrement simple à programmer ?",
                        "Chaque étape réduit l'intervalle selon une règle très claire.",
                        "Elle ne demande aucun calcul.",
                        "Elle trouve toujours une racine exacte en une étape.",
                        "Elle utilise toujours des nombres entiers.",
                        "La règle de réduction de l'intervalle est régulière et facile à automatiser."
                    ),
                    $makeQuestion(
                        "Si une racine est encadrée par [2,4 ; 2,6], quelle approximation du milieu obtient-on ?",
                        "2,5",
                        "2,4",
                        "2,6",
                        "5,0",
                        "Le milieu vaut (2,4 + 2,6) / 2 = 2,5."
                    ),
                    $makeQuestion(
                        "Quel est l'avantage principal de la dichotomie ?",
                        "Elle est robuste lorsque les conditions d'encadrement sont respectées.",
                        "Elle converge toujours en une seule étape.",
                        "Elle n'utilise jamais de calcul numérique.",
                        "Elle ne demande aucune hypothèse sur la fonction.",
                        "La dichotomie converge de manière sûre vers une racine encadrée, sous les hypothèses classiques de continuité et de changement de signe."
                    ),
                    $makeQuestion(
                        "Pour arrêter une dichotomie, on peut utiliser comme critère :",
                        "une longueur d'intervalle suffisamment petite.",
                        "un intervalle toujours plus grand.",
                        "un nombre de racines supérieur à zéro obligatoire.",
                        "la suppression de toutes les approximations.",
                        "Lorsque l'intervalle est assez petit, son milieu fournit une approximation suffisamment précise de la racine."
                    ),
                ],
            ],

            [
                'title' => "Méthodes de Newton et des sécantes",
                'description' => "Découvrir les idées de base derrière Newton-Raphson et la méthode des sécantes pour résoudre des équations.",
                'questions' => [
                    $makeQuestion(
                        "La méthode de Newton-Raphson utilise notamment :",
                        "la dérivée de la fonction.",
                        "uniquement une table de multiplication.",
                        "une fonction constante obligatoire.",
                        "un intervalle toujours divisé en deux.",
                        "La formule de Newton utilise la pente donnée par la dérivée pour améliorer l'approximation."
                    ),
                    $makeQuestion(
                        "Quelle formule correspond à une étape de Newton-Raphson ?",
                        "xₙ₊₁ = xₙ - f(xₙ) / f'(xₙ)",
                        "xₙ₊₁ = xₙ + f(xₙ)",
                        "xₙ₊₁ = f'(xₙ) / xₙ",
                        "xₙ₊₁ = xₙ² + f'(xₙ)",
                        "La formule classique de Newton est xₙ₊₁ = xₙ - f(xₙ)/f'(xₙ), lorsque la dérivée ne s'annule pas."
                    ),
                    $makeQuestion(
                        "Pour f(x) = x² - 2, une bonne approximation initiale de √2 peut être :",
                        "1,5",
                        "10",
                        "-20",
                        "100",
                        "1,5 est proche de √2 ≈ 1,414 et constitue donc un point de départ raisonnable."
                    ),
                    $makeQuestion(
                        "Si xₙ est déjà proche d'une racine et que la méthode de Newton se comporte bien, la suite des approximations :",
                        "se rapproche généralement de la racine.",
                        "s'éloigne toujours de la racine.",
                        "reste nécessairement constante.",
                        "devient toujours entière.",
                        "Sous des conditions favorables, Newton converge rapidement vers la racine."
                    ),
                    $makeQuestion(
                        "Quel élément peut poser problème dans Newton-Raphson ?",
                        "Une dérivée nulle ou très petite au mauvais endroit.",
                        "Une addition de deux entiers positifs.",
                        "Le fait de calculer une moyenne.",
                        "L'utilisation d'une variable réelle.",
                        "La formule divise par f'(xₙ), donc une dérivée nulle ou presque nulle peut rendre l'étape impossible ou instable."
                    ),
                    $makeQuestion(
                        "La méthode des sécantes cherche notamment à éviter :",
                        "le calcul explicite de la dérivée.",
                        "toute forme d'approximation.",
                        "le calcul d'une fonction.",
                        "l'utilisation de deux approximations initiales.",
                        "La méthode des sécantes remplace la dérivée par une pente calculée à partir de deux points."
                    ),
                    $makeQuestion(
                        "Si f(2) = 0, alors 2 est :",
                        "une racine de l'équation f(x) = 0.",
                        "la dérivée de f.",
                        "le maximum de f.",
                        "une erreur absolue.",
                        "Une racine est une valeur de x pour laquelle f(x) = 0."
                    ),
                    $makeQuestion(
                        "Pourquoi le choix initial x₀ est-il important dans Newton-Raphson ?",
                        "Parce qu'il peut influencer la convergence de la méthode.",
                        "Parce qu'il détermine toujours exactement la racine.",
                        "Parce qu'il rend la dérivée inutile.",
                        "Parce qu'il supprime toutes les itérations.",
                        "Un point initial mal choisi peut ralentir la convergence ou conduire la méthode vers une autre racine."
                    ),
                    $makeQuestion(
                        "Pour f(x) = x² - 4 et x₀ = 3, quelle valeur donne une première étape de Newton ?",
                        "2,1667 environ",
                        "3,6667 environ",
                        "1,0000 exactement",
                        "4,5000 environ",
                        "f(3)=5 et f'(3)=6, donc x₁ = 3 - 5/6 = 2,1667 environ."
                    ),
                    $makeQuestion(
                        "Quelle condition est souvent utilisée pour arrêter Newton-Raphson ?",
                        "Deux approximations successives deviennent suffisamment proches.",
                        "La première approximation doit être négative.",
                        "La fonction doit devenir constante.",
                        "Le nombre d'itérations doit être exactement 1.",
                        "On peut arrêter lorsque |xₙ₊₁ - xₙ| devient inférieur à une tolérance choisie."
                    ),
                ],
            ],

            [
                'title' => "Interpolation et différences finies",
                'description' => "Comprendre l'idée de l'interpolation et utiliser des différences simples pour estimer des valeurs.",
                'questions' => [
                    $makeQuestion(
                        "Que cherche à faire l'interpolation ?",
                        "Estimer une valeur située entre des données connues.",
                        "Supprimer toutes les données disponibles.",
                        "Transformer une fonction en constante.",
                        "Calculer uniquement des intégrales exactes.",
                        "L'interpolation permet d'estimer une valeur intermédiaire à partir de points de référence connus."
                    ),
                    $makeQuestion(
                        "Si une fonction vaut 10 en x = 0 et 20 en x = 10, une interpolation linéaire à mi-chemin donne :",
                        "15",
                        "10",
                        "20",
                        "30",
                        "À mi-chemin entre les deux points, la valeur interpolée est la moyenne : (10 + 20) / 2 = 15."
                    ),
                    $makeQuestion(
                        "Dans une interpolation linéaire entre deux points, le modèle utilisé est :",
                        "une droite.",
                        "une parabole obligatoire.",
                        "une constante toujours nulle.",
                        "une exponentielle obligatoire.",
                        "L'interpolation linéaire relie deux points par une droite et estime les valeurs situées entre eux."
                    ),
                    $makeQuestion(
                        "Si y(2) = 5 et y(3) = 9, quelle différence avant vaut y(3) - y(2) ?",
                        "4",
                        "14",
                        "2",
                        "-4",
                        "La différence avant est 9 - 5 = 4."
                    ),
                    $makeQuestion(
                        "Que mesure approximativement la différence finie avant (f(x+h) - f(x))/h ?",
                        "Le taux de variation de la fonction près de x.",
                        "La valeur exacte de la deuxième dérivée dans tous les cas.",
                        "Le nombre de racines de la fonction.",
                        "La moyenne globale de la fonction.",
                        "La différence finie avant fournit une approximation de la dérivée première lorsque h est suffisamment petit."
                    ),
                    $makeQuestion(
                        "Si f(2) = 7 et f(2,1) = 7,5, quelle approximation de f'(2) obtient-on avec h = 0,1 ?",
                        "5",
                        "0,5",
                        "7,4",
                        "75",
                        "(7,5 - 7) / 0,1 = 0,5 / 0,1 = 5."
                    ),
                    $makeQuestion(
                        "Pourquoi choisir un pas h très petit peut-il être utile en approximation numérique ?",
                        "Il peut améliorer l'approximation locale dans certaines méthodes.",
                        "Il garantit toujours une erreur nulle.",
                        "Il supprime toute nécessité de calculer la fonction.",
                        "Il transforme toujours les nombres en entiers.",
                        "Réduire h rapproche les points utilisés dans l'approximation, mais un h trop petit peut aussi accentuer les erreurs d'arrondi."
                    ),
                    $makeQuestion(
                        "Pour une interpolation entre deux points connus, une estimation située exactement à l'extrémité gauche doit reproduire :",
                        "la valeur connue du point gauche.",
                        "la valeur moyenne des deux extrémités.",
                        "toujours zéro.",
                        "la pente uniquement.",
                        "Une interpolation correcte passe par les points connus : à l'extrémité gauche, elle redonne exactement la donnée connue."
                    ),
                    $makeQuestion(
                        "Si y augmente régulièrement de 3 lorsque x augmente de 1, quelle pente possède la relation linéaire ?",
                        "3",
                        "1/3",
                        "6",
                        "0",
                        "La pente est Δy/Δx = 3/1 = 3."
                    ),
                    $makeQuestion(
                        "Quel est le principal risque d'une interpolation linéaire très loin des données connues ?",
                        "L'estimation peut devenir peu représentative du comportement réel.",
                        "L'interpolation devient automatiquement exacte.",
                        "La pente devient forcément nulle.",
                        "Le nombre de données augmente tout seul.",
                        "Une interpolation est surtout fiable dans la zone où les données fournissent un bon encadrement du comportement étudié."
                    ),
                ],
            ],

            [
                'title' => "Intégration numérique et quadrature",
                'description' => "Découvrir comment approcher une intégrale définie avec des méthodes numériques simples.",
                'questions' => [
                    $makeQuestion(
                        "Pourquoi utilise-t-on une intégration numérique ?",
                        "Pour approcher une intégrale lorsque son calcul exact est difficile ou indisponible.",
                        "Pour rendre toute fonction linéaire.",
                        "Pour éviter les bornes d'intégration.",
                        "Pour calculer uniquement des nombres entiers.",
                        "Les méthodes de quadrature approchent l'aire ou l'intégrale à partir d'un nombre fini de calculs."
                    ),
                    $makeQuestion(
                        "La méthode des rectangles approche une aire à l'aide de :",
                        "rectangles.",
                        "cercles obligatoirement.",
                        "triangles équilatéraux uniquement.",
                        "matrices diagonales.",
                        "La méthode des rectangles remplace localement la courbe par des rectangles dont les aires sont faciles à calculer."
                    ),
                    $makeQuestion(
                        "Un rectangle de largeur 2 et de hauteur 5 a une aire de :",
                        "10",
                        "7",
                        "25",
                        "2,5",
                        "L'aire vaut largeur × hauteur = 2 × 5 = 10."
                    ),
                    $makeQuestion(
                        "La méthode des trapèzes remplace chaque portion de courbe par :",
                        "un trapèze.",
                        "un cercle.",
                        "un cube.",
                        "un seul point sans largeur.",
                        "La méthode des trapèzes utilise des segments entre les valeurs aux extrémités de chaque sous-intervalle."
                    ),
                    $makeQuestion(
                        "Pour une fonction constante f(x) = 4 sur [0 ; 3], son intégrale vaut :",
                        "12",
                        "7",
                        "4",
                        "3",
                        "L'aire sous la courbe est celle d'un rectangle : 4 × 3 = 12."
                    ),
                    $makeQuestion(
                        "Dans une méthode de quadrature, augmenter le nombre de sous-intervalles sert généralement à :",
                        "mieux suivre la forme de la fonction.",
                        "supprimer la fonction étudiée.",
                        "rendre l'intervalle plus grand.",
                        "garantir automatiquement une erreur infinie.",
                        "Plus de sous-intervalles permettent souvent une approximation plus fine de la courbe."
                    ),
                    $makeQuestion(
                        "Quelle formule correspond à l'aire d'un trapèze de bases b1 et b2 et de hauteur h ?",
                        "((b1 + b2) × h) / 2",
                        "b1 + b2 + h",
                        "b1 × b2 × h",
                        "(b1 - b2) / h",
                        "L'aire d'un trapèze est la moyenne des deux bases multipliée par la hauteur."
                    ),
                    $makeQuestion(
                        "Pour f(x) = 2 sur [1 ; 4], quelle aire exacte cherche-t-on à approximer numériquement ?",
                        "6",
                        "3",
                        "8",
                        "4",
                        "La fonction est constante : aire = 2 × (4 - 1) = 6."
                    ),
                    $makeQuestion(
                        "Quel avantage possède une méthode numérique d'intégration ?",
                        "Elle peut fonctionner même lorsque la primitive n'est pas simple à obtenir.",
                        "Elle donne toujours une expression symbolique exacte.",
                        "Elle ne demande aucune donnée numérique.",
                        "Elle interdit toute approximation.",
                        "Les méthodes numériques sont particulièrement utiles lorsque l'intégrale ne possède pas de primitive simple exploitable."
                    ),
                    $makeQuestion(
                        "Dans une somme de rectangles, que représente généralement largeur × hauteur ?",
                        "Une contribution approximative à l'aire totale.",
                        "La dérivée exacte.",
                        "La racine de la fonction.",
                        "Le nombre de sous-intervalles.",
                        "Chaque rectangle apporte une petite aire, puis les aires sont additionnées pour obtenir l'approximation de l'intégrale."
                    ),
                ],
            ],

            [
                'title' => "Systèmes linéaires et méthodes itératives",
                'description' => "Aborder le calcul numérique de systèmes linéaires et l'idée des méthodes itératives.",
                'questions' => [
                    $makeQuestion(
                        "Quel est le but général d'une méthode numérique pour un système linéaire ?",
                        "Approcher les inconnues qui satisfont les équations du système.",
                        "Transformer le système en problème de géométrie uniquement.",
                        "Supprimer toutes les inconnues.",
                        "Remplacer les équations par des inégalités sans raison.",
                        "Les méthodes numériques permettent d'obtenir des solutions approchées de systèmes parfois trop grands pour un calcul manuel simple."
                    ),
                    $makeQuestion(
                        "Dans Ax = b, que représente généralement A ?",
                        "La matrice des coefficients.",
                        "Le vecteur des résultats uniquement.",
                        "Le nombre d'itérations.",
                        "La tolérance d'erreur.",
                        "Dans un système linéaire, A contient les coefficients associés aux inconnues."
                    ),
                    $makeQuestion(
                        "Dans Ax = b, que représente x ?",
                        "Le vecteur des inconnues.",
                        "La matrice des coefficients.",
                        "La matrice identité uniquement.",
                        "La norme du système.",
                        "Le vecteur x regroupe les valeurs inconnues à déterminer."
                    ),
                    $makeQuestion(
                        "Pour le système x + y = 5 et x - y = 1, quelle est la solution ?",
                        "x = 3 et y = 2",
                        "x = 2 et y = 3",
                        "x = 4 et y = 1",
                        "x = 1 et y = 4",
                        "En additionnant les deux équations, 2x = 6, donc x = 3 puis y = 2."
                    ),
                    $makeQuestion(
                        "Une méthode itérative produit :",
                        "une suite d'approximations successives.",
                        "un seul calcul sans amélioration possible.",
                        "uniquement des valeurs aléatoires.",
                        "une permutation de toutes les inconnues.",
                        "Une méthode itérative commence par une approximation puis la corrige progressivement."
                    ),
                    $makeQuestion(
                        "Que signifie qu'une méthode numérique converge vers une solution ?",
                        "Ses approximations se rapprochent de plus en plus de la solution recherchée.",
                        "Ses erreurs augmentent toujours.",
                        "Elle change de problème à chaque étape.",
                        "Elle s'arrête forcément après deux étapes.",
                        "La convergence décrit le rapprochement progressif des approximations vers une valeur limite souhaitée."
                    ),
                    $makeQuestion(
                        "Pourquoi utilise-t-on un critère d'arrêt dans une méthode itérative ?",
                        "Pour décider quand l'approximation est suffisamment précise.",
                        "Pour empêcher tout calcul dès la première étape.",
                        "Pour imposer une erreur maximale infinie.",
                        "Pour rendre toutes les matrices diagonales.",
                        "Le critère d'arrêt évite de continuer inutilement une fois la précision souhaitée atteinte."
                    ),
                    $makeQuestion(
                        "Que vaut la résiduelle r pour une approximation x dans Ax = b ?",
                        "r = b - Ax",
                        "r = A + x + b",
                        "r = Ax + b",
                        "r = x / A",
                        "La résiduelle mesure l'écart entre b et le résultat obtenu avec l'approximation : r = b - Ax."
                    ),
                    $makeQuestion(
                        "Si Ax = b exactement, quelle est la résiduelle r = b - Ax ?",
                        "Le vecteur nul.",
                        "Le vecteur de nombres 1.",
                        "Une matrice identité.",
                        "Toujours une valeur négative.",
                        "Si Ax = b, alors b - Ax = 0, donc la résiduelle est nulle."
                    ),
                    $makeQuestion(
                        "Quel est l'intérêt d'une solution numérique approchée d'un grand système ?",
                        "Elle peut fournir rapidement des valeurs utiles même lorsque le calcul exact serait coûteux.",
                        "Elle supprime toute erreur possible.",
                        "Elle garantit toujours une solution unique.",
                        "Elle rend inutile toute vérification.",
                        "Pour les grands problèmes, une approximation bien contrôlée peut être beaucoup plus pratique qu'une résolution symbolique complète."
                    ),
                ],
            ],

            [
                'title' => "Révision générale du calcul numérique",
                'description' => "Réviser les concepts essentiels : approximation, erreurs, racines, interpolation, intégration et convergence.",
                'questions' => [
                    $makeQuestion(
                        "Quelle valeur est une approximation de √2 ?",
                        "1,4142",
                        "2,5",
                        "0,4142",
                        "3,1416",
                        "√2 ≈ 1,4142."
                    ),
                    $makeQuestion(
                        "Une méthode produit successivement 2,1 puis 2,01 puis 2,001. Que suggère cette suite ?",
                        "Les approximations se rapprochent de 2.",
                        "Les approximations s'éloignent de 2.",
                        "La méthode ne calcule aucune approximation.",
                        "La méthode produit toujours la même valeur.",
                        "Les valeurs se rapprochent progressivement de 2, ce qui est compatible avec une convergence vers 2."
                    ),
                    $makeQuestion(
                        "Si une valeur exacte est 25 et qu'une approximation vaut 24,5, l'erreur absolue est :",
                        "0,5",
                        "0,02",
                        "1,5",
                        "49,5",
                        "|25 - 24,5| = 0,5."
                    ),
                    $makeQuestion(
                        "Quelle méthode réduit un intervalle contenant une racine en le coupant en deux ?",
                        "La dichotomie",
                        "L'interpolation linéaire uniquement",
                        "La méthode des rectangles",
                        "La moyenne pondérée",
                        "La dichotomie porte précisément sur la division répétée d'un intervalle en deux parties."
                    ),
                    $makeQuestion(
                        "Quelle méthode utilise explicitement une dérivée ?",
                        "Newton-Raphson",
                        "Dichotomie",
                        "Rectangles",
                        "Trapèzes",
                        "Newton-Raphson utilise f'(x) dans sa formule d'itération."
                    ),
                    $makeQuestion(
                        "Quelle technique estime une valeur entre deux données connues ?",
                        "L'interpolation",
                        "La factorielle",
                        "La permutation",
                        "La matrice identité",
                        "L'interpolation sert à estimer des valeurs intermédiaires à partir de données connues."
                    ),
                    $makeQuestion(
                        "Quelle méthode peut approximer une intégrale avec des trapèzes ?",
                        "La méthode des trapèzes",
                        "La méthode de Newton-Raphson",
                        "La méthode de dichotomie",
                        "La méthode du gradient",
                        "La quadrature par trapèzes remplace la courbe par une suite de trapèzes."
                    ),
                    $makeQuestion(
                        "Que signifie une erreur relative de 0,01 ?",
                        "Une erreur de 1 %.",
                        "Une erreur de 0,01 %.",
                        "Une erreur de 10 %.",
                        "Une erreur de 100 %.",
                        "On convertit en pourcentage en multipliant par 100 : 0,01 × 100 = 1 %."
                    ),
                    $makeQuestion(
                        "Pourquoi compare-t-on souvent deux approximations successives ?",
                        "Pour vérifier si elles sont suffisamment proches pour arrêter le calcul.",
                        "Pour rendre la fonction constante.",
                        "Pour supprimer les données initiales.",
                        "Pour garantir que l'erreur est exactement zéro.",
                        "L'écart entre deux itérations fournit un indicateur pratique de stabilisation de la méthode."
                    ),
                    $makeQuestion(
                        "Quel énoncé décrit le mieux une méthode numérique fiable ?",
                        "Elle donne une approximation contrôlée et un critère permettant d'évaluer sa précision.",
                        "Elle donne toujours une valeur exacte sans hypothèse.",
                        "Elle ne nécessite aucune vérification.",
                        "Elle fonctionne sans données d'entrée.",
                        "Une bonne méthode numérique s'accompagne d'informations permettant de contrôler l'erreur, la convergence ou les conditions d'utilisation."
                    ),
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
