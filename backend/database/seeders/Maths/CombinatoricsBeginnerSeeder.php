<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class CombinatoricsBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'combinatorics')->firstOrFail();

        $settings = [
            'duration' => 20,
            'passing_score' => 60,
        ];

        // Fixed, pre-balanced correct-answer position for each question in sequence
        // (replaces runtime shuffle() so seeding is deterministic and idempotent).
        $choicePositions = [3,1,1,2,2,4,3,1,2,3,1,3,1,2,4,3,4,4,3,1,3,3,2,4,2,4,3,1,1,4,3,4,3,4,2,2,3,4,1,4,2,2,1,2,1,1,4,4,2,3,3,2,3,3,2,2,3,1,4,1,2,1,2,1,4,1,2,1,3,2,1,1,4,3,4,4,3,4,2,4];
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
                'title' => 'Bases du dénombrement',
                'description' => 'Comprendre les situations de comptage et appliquer les principes élémentaires de dénombrement.',
                'questions' => [
                    $makeQuestion(
                        'À quoi sert principalement la combinatoire ?',
                        'À compter des configurations possibles sans toutes les énumérer une par une.',
                        'À résoudre uniquement des équations différentielles.',
                        'À calculer uniquement des aires et des volumes.',
                        'À remplacer toutes les démonstrations mathématiques.',
                        'La combinatoire étudie les méthodes permettant de compter des objets ou des configurations de manière systématique.'
                    ),
                    $makeQuestion(
                        'Si une tenue peut être choisie avec 3 chemises et 2 pantalons, combien de tenues différentes sont possibles ?',
                        '6',
                        '5',
                        '8',
                        '9',
                        'Chaque chemise peut être associée à chacun des 2 pantalons : 3 × 2 = 6.'
                    ),
                    $makeQuestion(
                        'Une plaque comporte 4 lettres possibles pour la première position et 5 chiffres possibles pour la seconde. Combien de codes sont possibles ?',
                        '20',
                        '9',
                        '10',
                        '45',
                        'Le premier choix offre 4 possibilités et le second 5. Le principe multiplicatif donne 4 × 5 = 20.'
                    ),
                    $makeQuestion(
                        'Quelle opération correspond à des choix successifs indépendants de l\'un à l\'autre ?',
                        'La multiplication',
                        'La soustraction',
                        'La division entière uniquement',
                        'La dérivation',
                        'Lorsque chaque étape peut se combiner avec toutes les possibilités des étapes suivantes, on multiplie les nombres de choix.'
                    ),
                    $makeQuestion(
                        'Une bibliothèque propose 2 romans policiers, 3 romans historiques et 4 bandes dessinées. Si l\'on choisit un seul livre, combien de choix sont possibles ?',
                        '9',
                        '24',
                        '6',
                        '1',
                        'Pour un seul choix parmi des catégories disjointes, on additionne : 2 + 3 + 4 = 9.'
                    ),
                    $makeQuestion(
                        'Une activité consiste à choisir soit un dessert parmi 4, soit une boisson parmi 3, mais pas les deux. Combien de possibilités ?',
                        '7',
                        '12',
                        '4',
                        '3',
                        'Les deux possibilités sont alternatives et disjointes, donc 4 + 3 = 7.'
                    ),
                    $makeQuestion(
                        'Quelle situation doit plutôt utiliser une addition des cas ?',
                        'Choisir un billet adulte ou un billet étudiant, sans acheter les deux.',
                        'Choisir une couleur puis une taille pour un vêtement.',
                        'Choisir un prénom puis une date.',
                        'Choisir successivement trois cartes.',
                        'Lorsque les cas sont exclusifs, on additionne leurs nombres de possibilités.'
                    ),
                    $makeQuestion(
                        'Une roue possède 5 couleurs et un dé possède 6 faces. Si l\'on fait tourner la roue puis lance le dé, combien de résultats sont possibles ?',
                        '30',
                        '11',
                        '25',
                        '56',
                        'Chaque couleur peut être associée à chacune des 6 faces : 5 × 6 = 30.'
                    ),
                    $makeQuestion(
                        'Dans un problème de dénombrement, que faut-il vérifier avant de multiplier les nombres de possibilités ?',
                        'Que les étapes sont bien distinctes et que chaque choix peut être combiné comme prévu.',
                        'Que tous les nombres sont premiers.',
                        'Que le total est inférieur à 10.',
                        'Que les possibilités sont toutes égales à 2.',
                        'Le principe multiplicatif demande une décomposition correcte du problème en étapes de choix.'
                    ),
                    $makeQuestion(
                        'Un menu permet de choisir 2 entrées, 4 plats et 3 desserts. Combien de menus complets sont possibles ?',
                        '24',
                        '9',
                        '12',
                        '18',
                        'Un menu combine un choix dans chaque catégorie : 2 × 4 × 3 = 24.'
                    ),
                ],
            ],
            [
                'title' => 'Factorielle et permutations',
                'description' => 'Manipuler les factorielles et compter les ordres possibles de plusieurs objets distincts.',
                'questions' => [
                    $makeQuestion(
                        'Que vaut 0! en combinatoire ?',
                        '1',
                        '0',
                        '2',
                        'Cela n\'a pas de valeur',
                        'Par convention mathématique et pour conserver les formules de la combinatoire, 0! = 1.'
                    ),
                    $makeQuestion(
                        'Que vaut 4! ?',
                        '24',
                        '16',
                        '12',
                        '8',
                        '4! = 4 × 3 × 2 × 1 = 24.'
                    ),
                    $makeQuestion(
                        'Que représente n! lorsque n objets distincts sont tous ordonnés ?',
                        'Le nombre de permutations possibles.',
                        'Le nombre de sous-ensembles de n objets.',
                        'Le nombre de choix d\'un seul objet.',
                        'La somme des objets.',
                        'Pour n objets distincts, leur nombre d\'ordres possibles est n!.'
                    ),
                    $makeQuestion(
                        'De combien de façons peut-on placer 3 livres distincts sur une étagère ?',
                        '6',
                        '3',
                        '9',
                        '12',
                        'Les 3 livres peuvent être ordonnés de 3! = 3 × 2 × 1 = 6 façons.'
                    ),
                    $makeQuestion(
                        'Que vaut 5! ?',
                        '120',
                        '25',
                        '60',
                        '100',
                        '5! = 5 × 4 × 3 × 2 × 1 = 120.'
                    ),
                    $makeQuestion(
                        'Six personnes distinctes doivent s\'asseoir sur une rangée de six sièges. Combien d\'ordres sont possibles ?',
                        '720',
                        '36',
                        '120',
                        '240',
                        'Les six personnes peuvent être permutées de 6! = 720 façons.'
                    ),
                    $makeQuestion(
                        'Quelle expression est correcte pour 7! ?',
                        '7 × 6!',
                        '7 + 6!',
                        '7 × 6 + 1',
                        '7² × 6!',
                        'Par définition, 7! = 7 × 6!.'
                    ),
                    $makeQuestion(
                        'Pour deux objets distincts A et B, combien d\'ordres différents existe-t-il ?',
                        '2',
                        '1',
                        '3',
                        '4',
                        'Les deux ordres possibles sont AB et BA, soit 2! = 2.'
                    ),
                    $makeQuestion(
                        'Quel est le principal rôle de la factorielle dans les problèmes de permutation ?',
                        'Compter les différents ordres d\'objets distincts.',
                        'Additionner les valeurs des objets.',
                        'Mesurer une distance.',
                        'Calculer une moyenne.',
                        'La factorielle apparaît naturellement lorsqu\'on compte tous les ordres possibles d\'objets distincts.'
                    ),
                    $makeQuestion(
                        'Une course compte 4 finalistes distincts. Combien d\'ordres d\'arrivée complets sont possibles ?',
                        '24',
                        '16',
                        '12',
                        '8',
                        'Un classement complet de 4 finalistes correspond à une permutation : 4! = 24.'
                    ),
                ],
            ],
            [
                'title' => 'Arrangements sans répétition',
                'description' => 'Compter des choix ordonnés lorsque certains objets sont sélectionnés sans répétition.',
                'questions' => [
                    $makeQuestion(
                        'Dans un arrangement de p objets parmi n, l\'ordre des objets choisis est-il pris en compte ?',
                        'Oui',
                        'Non',
                        'Seulement pour n = 2',
                        'Seulement si les objets sont identiques',
                        'Un arrangement tient compte de l\'ordre, contrairement à une combinaison.'
                    ),
                    $makeQuestion(
                        'Combien d\'arrangements de 2 lettres peut-on former avec A, B et C sans répétition ?',
                        '6',
                        '3',
                        '9',
                        '2',
                        'Les possibilités sont AB, AC, BA, BC, CA et CB : 6 arrangements.'
                    ),
                    $makeQuestion(
                        'Quelle formule donne le nombre d\'arrangements de p éléments parmi n sans répétition ?',
                        'n! / (n - p)!',
                        'n! / p!',
                        'p! / n!',
                        'n + p',
                        'Pour un arrangement de p éléments parmi n, on utilise A(n,p) = n! / (n - p)!.'
                    ),
                    $makeQuestion(
                        'Combien de façons peut-on attribuer un président et un secrétaire parmi 5 personnes distinctes ?',
                        '20',
                        '10',
                        '25',
                        '5',
                        'Le président peut être choisi de 5 façons puis le secrétaire de 4 façons : 5 × 4 = 20.'
                    ),
                    $makeQuestion(
                        'Avec 4 coureurs distincts, combien de podiums complets (1er, 2e, 3e) sont possibles ?',
                        '24',
                        '12',
                        '64',
                        '16',
                        'Le podium ordonne 3 coureurs parmi 4 : 4 × 3 × 2 = 24.'
                    ),
                    $makeQuestion(
                        'Choisir un capitaine puis un vice-capitaine parmi 6 joueurs correspond à :',
                        'un arrangement de 2 parmi 6.',
                        'une combinaison de 2 parmi 6.',
                        'une permutation de 12 joueurs.',
                        'une combinaison avec répétition obligatoire.',
                        'Les rôles sont différents, donc l\'ordre des deux personnes choisies compte.'
                    ),
                    $makeQuestion(
                        'Combien d\'arrangements de 3 objets parmi 5 distincts existe-t-il ?',
                        '60',
                        '15',
                        '125',
                        '25',
                        'On obtient 5 × 4 × 3 = 60 arrangements.'
                    ),
                    $makeQuestion(
                        'Quelle différence essentielle existe entre un arrangement et une combinaison ?',
                        'Dans un arrangement, l\'ordre compte ; dans une combinaison, il ne compte pas.',
                        'Dans une combinaison, l\'ordre compte toujours deux fois.',
                        'Un arrangement contient forcément des répétitions.',
                        'Une combinaison utilise uniquement des nombres premiers.',
                        'La distinction fondamentale porte sur la prise en compte ou non de l\'ordre.'
                    ),
                    $makeQuestion(
                        'Parmi 7 candidats, combien de façons peut-on choisir un président et un trésorier ?',
                        '42',
                        '21',
                        '14',
                        '49',
                        'Les deux postes sont distincts : 7 choix pour le président puis 6 pour le trésorier, soit 42.'
                    ),
                    $makeQuestion(
                        'Si l\'on choisit 3 lettres distinctes dans un ensemble de 3 lettres et que toutes sont utilisées, on obtient combien d\'arrangements ?',
                        '6',
                        '3',
                        '9',
                        '1',
                        'Utiliser les 3 lettres dans un ordre précis donne 3! = 6 arrangements.'
                    ),
                ],
            ],
            [
                'title' => 'Combinaisons',
                'description' => 'Choisir des groupes d\'objets lorsque l\'ordre ne joue aucun rôle.',
                'questions' => [
                    $makeQuestion(
                        'Dans une combinaison, l\'ordre des éléments choisis est-il important ?',
                        'Non',
                        'Oui, toujours',
                        'Seulement pour deux éléments',
                        'Seulement si les éléments sont numériques',
                        'Une combinaison représente un choix de groupe : ABC et BAC désignent le même groupe.'
                    ),
                    $makeQuestion(
                        'Combien vaut le nombre de combinaisons de 2 éléments parmi 4 ?',
                        '6',
                        '8',
                        '12',
                        '4',
                        'C(4,2) = 4 × 3 / (2 × 1) = 6.'
                    ),
                    $makeQuestion(
                        'Quelle formule donne C(n,p) ?',
                        'n! / (p!(n - p)!)',
                        'n! / (n - p)!',
                        'p! / n!',
                        'n × p!',
                        'La formule des combinaisons est C(n,p) = n! / [p!(n - p)!].'
                    ),
                    $makeQuestion(
                        'Parmi 5 étudiants, combien de groupes de 2 peuvent être formés ?',
                        '10',
                        '20',
                        '25',
                        '5',
                        'C(5,2) = 5 × 4 / 2 = 10 groupes.'
                    ),
                    $makeQuestion(
                        'Pourquoi le groupe {A, B} est-il identique au groupe {B, A} dans une combinaison ?',
                        'Parce que l\'ordre n\'est pas pris en compte.',
                        'Parce que A et B sont forcément égaux.',
                        'Parce qu\'on utilise toujours une permutation.',
                        'Parce que les deux lettres représentent le même objet.',
                        'Une combinaison décrit seulement quels objets sont choisis, pas leur ordre.'
                    ),
                    $makeQuestion(
                        'Combien de façons de choisir 3 représentants parmi 6 personnes existe-t-il ?',
                        '20',
                        '18',
                        '36',
                        '12',
                        'C(6,3) = 6 × 5 × 4 / (3 × 2 × 1) = 20.'
                    ),
                    $makeQuestion(
                        'Quelle situation utilise naturellement une combinaison ?',
                        'Former un comité de 4 personnes parmi 10.',
                        'Attribuer les postes de président et secrétaire.',
                        'Classer 5 coureurs à l\'arrivée.',
                        'Créer un code de 3 chiffres ordonnés.',
                        'Dans un comité, seule la composition du groupe compte, pas l\'ordre des membres.'
                    ),
                    $makeQuestion(
                        'Que vaut C(n,0) pour un entier n ≥ 0 ?',
                        '1',
                        '0',
                        'n',
                        'n!',
                        'Il existe exactement une façon de choisir aucun élément : le groupe vide.'
                    ),
                    $makeQuestion(
                        'Que vaut C(n,n) ?',
                        '1',
                        '0',
                        'n',
                        '2n',
                        'Choisir les n éléments parmi n ne laisse qu\'une seule possibilité : prendre tout le groupe.'
                    ),
                    $makeQuestion(
                        'Parmi 8 livres distincts, combien de façons de choisir exactement 2 livres sans tenir compte de l\'ordre ?',
                        '28',
                        '16',
                        '56',
                        '64',
                        'C(8,2) = 8 × 7 / 2 = 28.'
                    ),
                ],
            ],
            [
                'title' => 'Dénombrement avec répétition',
                'description' => 'Reconnaître les situations où une même possibilité peut être réutilisée plusieurs fois.',
                'questions' => [
                    $makeQuestion(
                        'Un code comporte 3 chiffres et un chiffre peut être répété. Combien de codes sont possibles avec 10 chiffres disponibles ?',
                        '1000',
                        '720',
                        '100',
                        '30',
                        'Chaque position offre 10 choix indépendants : 10 × 10 × 10 = 1000.'
                    ),
                    $makeQuestion(
                        'Quelle différence caractérise principalement un choix avec répétition ?',
                        'Un élément déjà choisi peut être choisi à nouveau.',
                        'L\'ordre disparaît toujours.',
                        'Le nombre d\'éléments devient forcément nul.',
                        'Toutes les possibilités doivent être utilisées une seule fois.',
                        'Autoriser la répétition signifie qu\'un même objet ou symbole peut apparaître plusieurs fois.'
                    ),
                    $makeQuestion(
                        'Combien de mots de 2 lettres peut-on former avec A, B et C si la répétition est autorisée ?',
                        '9',
                        '6',
                        '3',
                        '12',
                        'Chaque position possède 3 choix, donc 3 × 3 = 9.'
                    ),
                    $makeQuestion(
                        'Un mot de passe contient 4 chiffres, avec répétition autorisée. Combien de mots de passe sont possibles ?',
                        '10000',
                        '5040',
                        '4000',
                        '1000',
                        'Il y a 10 choix pour chacune des 4 positions : 10⁴ = 10000.'
                    ),
                    $makeQuestion(
                        'On lance une pièce trois fois. Combien de suites de résultats possibles existe-t-il ?',
                        '8',
                        '6',
                        '9',
                        '3',
                        'Chaque lancer possède 2 résultats et les lancers sont successifs : 2³ = 8.'
                    ),
                    $makeQuestion(
                        'Parmi les chiffres 0 à 9, combien de nombres à deux chiffres peut-on former si la répétition est autorisée et si le premier chiffre ne peut pas être 0 ?',
                        '90',
                        '100',
                        '81',
                        '99',
                        'Le premier chiffre a 9 choix (1 à 9) et le second 10 choix : 9 × 10 = 90.'
                    ),
                    $makeQuestion(
                        'Avec 4 couleurs, combien de suites de 3 couleurs peut-on former avec répétition autorisée ?',
                        '64',
                        '12',
                        '24',
                        '81',
                        'Chaque position possède 4 choix, donc 4³ = 64.'
                    ),
                    $makeQuestion(
                        'Quel calcul correspond à un code de 5 lettres choisi parmi 26 lettres, avec répétition autorisée ?',
                        '26⁵',
                        '26 × 5',
                        '26!',
                        '5!',
                        'Les 5 positions sont indépendantes et chacune offre 26 choix : 26⁵.'
                    ),
                    $makeQuestion(
                        'Si l\'on ne peut pas réutiliser un élément déjà choisi, parle-t-on de :',
                        'choix sans répétition.',
                        'choix avec répétition.',
                        'choix impossible.',
                        'choix aléatoire uniquement.',
                        'L\'absence de réutilisation correspond précisément à un choix sans répétition.'
                    ),
                    $makeQuestion(
                        'Une machine affiche 3 symboles successifs parmi {★, ●, ▲}, avec répétition possible. Combien de séquences différentes ?',
                        '27',
                        '9',
                        '6',
                        '81',
                        'Il y a 3 choix pour chacune des 3 positions, soit 3³ = 27.'
                    ),
                ],
            ],
            [
                'title' => 'Coefficient binomial et triangle de Pascal',
                'description' => 'Découvrir le coefficient binomial et lire ses propriétés élémentaires dans le triangle de Pascal.',
                'questions' => [
                    $makeQuestion(
                        'Le coefficient binomial C(n,p) compte principalement :',
                        'les façons de choisir p éléments parmi n sans tenir compte de l\'ordre.',
                        'les permutations de n éléments.',
                        'les arrangements avec répétition obligatoires.',
                        'les valeurs propres d\'une matrice.',
                        'C(n,p) est le nombre de sous-ensembles de taille p parmi n éléments distincts.'
                    ),
                    $makeQuestion(
                        'Que vaut C(4,2) ?',
                        '6',
                        '8',
                        '4',
                        '16',
                        'C(4,2) = 6.'
                    ),
                    $makeQuestion(
                        'Quelle propriété correcte relie C(n,p) et C(n,n-p) ?',
                        'C(n,p) = C(n,n-p)',
                        'C(n,p) = n + p',
                        'C(n,p) = p - n',
                        'C(n,p) = n!',
                        'Choisir p éléments revient à choisir les n-p éléments laissés de côté, d\'où la symétrie.'
                    ),
                    $makeQuestion(
                        'Dans une ligne du triangle de Pascal, chaque nombre intérieur est obtenu en :',
                        'additionnant les deux nombres situés au-dessus.',
                        'multipliant les deux nombres situés au-dessus.',
                        'soustrayant les nombres voisins.',
                        'divisant toujours par 2.',
                        'Chaque coefficient intérieur est la somme des deux coefficients directement au-dessus.'
                    ),
                    $makeQuestion(
                        'Quelle est la première ligne du triangle de Pascal si l\'on commence par n = 0 ?',
                        '1',
                        '0 1',
                        '1 1',
                        '2',
                        'Pour n = 0, la ligne comporte uniquement C(0,0) = 1.'
                    ),
                    $makeQuestion(
                        'Quelle ligne correspond à n = 3 dans le triangle de Pascal ?',
                        '1 3 3 1',
                        '1 2 1',
                        '1 4 6 4 1',
                        '1 3 6 1',
                        'Les coefficients de la ligne n = 3 sont C(3,0), C(3,1), C(3,2), C(3,3), soit 1, 3, 3, 1.'
                    ),
                    $makeQuestion(
                        'Que vaut C(n,1) ?',
                        'n',
                        '1',
                        'n!',
                        'n²',
                        'Choisir exactement un élément parmi n donne n possibilités.'
                    ),
                    $makeQuestion(
                        'Que vaut C(5,4) ?',
                        '5',
                        '10',
                        '20',
                        '1',
                        'Grâce à la symétrie, C(5,4) = C(5,1) = 5.'
                    ),
                    $makeQuestion(
                        'Dans le développement de (a + b)², quel est le coefficient de ab ?',
                        '2',
                        '1',
                        '3',
                        '4',
                        '(a + b)² = a² + 2ab + b², donc le coefficient de ab est 2.'
                    ),
                    $makeQuestion(
                        'Pourquoi le triangle de Pascal est-il utile en combinatoire ?',
                        'Il permet de retrouver rapidement de nombreux coefficients binomiaux.',
                        'Il remplace toutes les factorielles.',
                        'Il sert uniquement à tracer des droites.',
                        'Il donne uniquement des nombres impairs.',
                        'Le triangle de Pascal organise les coefficients binomiaux de façon pratique et visuelle.'
                    ),
                ],
            ],
            [
                'title' => 'Principe des tiroirs',
                'description' => 'Comprendre le principe des tiroirs et l\'utiliser dans des situations simples de garantie d\'un résultat.',
                'questions' => [
                    $makeQuestion(
                        'Le principe des tiroirs affirme essentiellement que :',
                        'si l\'on place plus d\'objets que de tiroirs, au moins un tiroir contient plusieurs objets.',
                        'chaque tiroir doit contenir exactement un objet.',
                        'aucun objet ne peut être répété.',
                        'les tiroirs sont toujours de même taille.',
                        'Avec plus d\'objets que de cases disponibles, une case reçoit nécessairement au moins deux objets.'
                    ),
                    $makeQuestion(
                        'Si 6 chaussettes sont réparties dans 5 tiroirs, que peut-on garantir ?',
                        'Au moins un tiroir contient au moins 2 chaussettes.',
                        'Chaque tiroir contient 2 chaussettes.',
                        'Un tiroir est forcément vide.',
                        'Tous les tiroirs contiennent exactement le même nombre.',
                        'Il y a 6 objets pour seulement 5 tiroirs, donc l\'un des tiroirs doit contenir au moins 2 chaussettes.'
                    ),
                    $makeQuestion(
                        'Dans le principe des tiroirs, les objets représentent :',
                        'les éléments à répartir.',
                        'les résultats déjà prouvés.',
                        'les opérations arithmétiques.',
                        'les unités de mesure.',
                        'Les objets sont les éléments que l\'on place dans les différentes cases ou catégories.'
                    ),
                    $makeQuestion(
                        'Si 13 personnes sont réparties entre 12 mois de naissance, que peut-on affirmer ?',
                        'Au moins deux personnes sont nées le même mois.',
                        'Toutes sont nées des mois différents.',
                        'Exactement deux sont nées le même mois.',
                        'Chaque mois contient au moins une personne.',
                        'Avec 13 personnes et seulement 12 mois possibles, deux personnes au moins partagent nécessairement un mois.'
                    ),
                    $makeQuestion(
                        'Quel est le nombre minimal d\'élèves nécessaires pour garantir que deux élèves ont le même jour de naissance, en ignorant les années bissextiles ?',
                        '366',
                        '365',
                        '367',
                        '732',
                        'Avec 365 jours possibles, 365 élèves pourraient en théorie avoir chacun un jour différent. Dès que s\'ajoute un 366e élève, le principe des tiroirs garantit qu\'au moins deux élèves partagent la même date.'
                    ),
                    $makeQuestion(
                        'Pourquoi 366 personnes suffisent-elles pour garantir une date d\'anniversaire commune parmi 365 jours possibles ?',
                        'Parce qu\'il y a plus de personnes que de jours.',
                        'Parce que chaque personne a deux anniversaires.',
                        'Parce que tous les mois ont le même nombre de jours.',
                        'Parce que 366 est un nombre premier.',
                        'Le nombre de personnes dépasse le nombre de jours possibles : le principe des tiroirs s\'applique.'
                    ),
                    $makeQuestion(
                        'Si 10 objets sont placés dans 3 boîtes, quel nombre minimal d\'objets est garanti dans au moins une boîte ?',
                        '4',
                        '3',
                        '10',
                        '2',
                        'Répartir 10 objets dans 3 boîtes donne au moins une boîte contenant au moins 4 objets, car 10 > 3 × 3.'
                    ),
                    $makeQuestion(
                        'Le principe des tiroirs permet surtout de montrer qu\'un événement est :',
                        'inévitable dans certaines conditions de comptage.',
                        'impossible dans tous les cas.',
                        'aléatoire uniquement.',
                        'forcément unique.',
                        'Il sert à garantir l\'existence d\'une répétition ou d\'un regroupement sans avoir besoin de connaître la répartition exacte.'
                    ),
                    $makeQuestion(
                        'Avec 5 catégories et 6 objets, quelle propriété est forcément vraie ?',
                        'Au moins une catégorie contient au moins 2 objets.',
                        'Toutes les catégories contiennent au moins 2 objets.',
                        'Une catégorie contient exactement 6 objets.',
                        'Toutes les catégories sont vides.',
                        'Comme 6 objets sont répartis dans seulement 5 catégories, une catégorie reçoit au moins 2 objets.'
                    ),
                    $makeQuestion(
                        'Quel réflexe est utile avant d\'appliquer le principe des tiroirs ?',
                        'Identifier clairement les objets et les catégories possibles.',
                        'Calculer une dérivée.',
                        'Transformer tous les nombres en fractions.',
                        'Utiliser automatiquement une permutation.',
                        'La bonne modélisation consiste d\'abord à déterminer ce qui joue le rôle des objets et celui des tiroirs.'
                    ),
                ],
            ],
            [
                'title' => 'Inclusion-exclusion et comptages combinés',
                'description' => 'Compter des ensembles ou des choix qui se recouvrent en évitant de compter deux fois les mêmes cas.',
                'questions' => [
                    $makeQuestion(
                        'Pourquoi faut-il parfois corriger une simple addition dans un problème de dénombrement ?',
                        'Parce que certains éléments peuvent être comptés dans plusieurs groupes.',
                        'Parce que l\'addition est toujours fausse.',
                        'Parce que les groupes doivent toujours être identiques.',
                        'Parce que les nombres doivent être premiers.',
                        'Lorsque deux groupes se chevauchent, leur intersection est comptée plusieurs fois si on additionne simplement leurs tailles.'
                    ),
                    $makeQuestion(
                        'Pour deux ensembles A et B, quelle formule donne |A ∪ B| ?',
                        '|A| + |B| - |A ∩ B|',
                        '|A| + |B| + |A ∩ B|',
                        '|A| - |B| - |A ∩ B|',
                        '|A ∩ B| / 2',
                        'L\'intersection est comptée deux fois dans |A| + |B|, donc on la soustrait une fois.'
                    ),
                    $makeQuestion(
                        'Dans un groupe, 12 personnes aiment le thé, 9 aiment le café et 4 aiment les deux. Combien aiment au moins l\'une des deux boissons ?',
                        '17',
                        '21',
                        '13',
                        '25',
                        'On applique 12 + 9 - 4 = 17 pour ne pas compter deux fois les 4 personnes qui aiment les deux.'
                    ),
                    $makeQuestion(
                        'Si deux catégories sont disjointes, leur intersection contient :',
                        'aucun élément.',
                        'tous les éléments.',
                        'exactement un élément.',
                        'la moitié des éléments.',
                        'Deux catégories disjointes n\'ont aucun élément en commun.'
                    ),
                    $makeQuestion(
                        'Dans la formule d\'inclusion-exclusion pour deux ensembles, pourquoi soustrait-on l\'intersection ?',
                        'Pour corriger le double comptage.',
                        'Pour rendre l\'intersection plus grande.',
                        'Pour supprimer tous les éléments de A.',
                        'Pour compter chaque élément zéro fois.',
                        'Les éléments communs à A et B ont été comptés une fois dans A et une fois dans B.'
                    ),
                    $makeQuestion(
                        'Une classe compte 18 élèves qui pratiquent le football, 15 le basket et 7 les deux. Combien pratiquent au moins un des deux sports ?',
                        '26',
                        '33',
                        '22',
                        '40',
                        'Le total recherché est 18 + 15 - 7 = 26.'
                    ),
                    $makeQuestion(
                        'Si |A| = 20, |B| = 14 et |A ∩ B| = 6, combien vaut |A ∪ B| ?',
                        '28',
                        '34',
                        '40',
                        '8',
                        'On calcule 20 + 14 - 6 = 28.'
                    ),
                    $makeQuestion(
                        'Quel mot indique souvent qu\'on doit envisager l\'union de plusieurs catégories ?',
                        'ou',
                        'et seulement',
                        'jamais',
                        'aucun',
                        'Dans un problème de comptage, « ou » peut correspondre à une union, tout en vérifiant si les catégories se recouvrent.'
                    ),
                    $makeQuestion(
                        'Quel mot indique souvent une intersection entre deux conditions ?',
                        'et',
                        'ou',
                        'sauf',
                        'jamais',
                        'Le mot « et » demande que les deux propriétés soient satisfaites simultanément.'
                    ),
                    $makeQuestion(
                        'Un sondage indique que 30 personnes aiment A, 25 aiment B et 10 aiment les deux. Combien de personnes n\'aiment ni A ni B, si le groupe compte 60 personnes au total ?',
                        '15',
                        '5',
                        '10',
                        '35',
                        'Le nombre aimant au moins une catégorie est 30 + 25 - 10 = 45. Il reste donc 60 - 45 = 15 personnes.'
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
