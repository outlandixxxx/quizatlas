<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class DiscreteMathematicsBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'discrete-mathematics')->firstOrFail();

        // Fixed, pre-balanced correct-answer position for each question in sequence
        // (replaces runtime shuffle() so seeding is deterministic and idempotent).
        $choicePositions = [3,4,2,1,1,3,2,2,1,1,2,2,4,2,3,3,1,3,2,2,4,2,4,1,2,3,1,1,4,1,1,3,4,4,3,1,4,2,1,3,4,2,2,3,2,3,1,2,3,4,1,4,4,1,4,1,4,1,3,2,3,1,3,4,2,3,3,1,3,4,3,4,1,4,2,3,2,4,2,4];
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
                'title' => 'Structures discrètes',
                'description' => 'Ensembles finis, relations et fonctions.',
                'duration' => 20,
                'passing_score' => 60,
                'questions' => [
                    $makeQuestion(
                        'Un ensemble fini possède :',
                        'Un nombre fini d\'éléments',
                        'Toujours deux éléments',
                        'Une infinité d\'éléments',
                        'Seulement des nombres',
                        'La finitude signifie que le cardinal est un entier fini.'
                    ),
                    $makeQuestion(
                        'Une relation sur un ensemble associe :',
                        'Des paires d\'éléments',
                        'Uniquement des nombres premiers',
                        'Des matrices uniquement',
                        'Des dérivées',
                        'Une relation peut être vue comme un ensemble de couples ordonnés.'
                    ),
                    $makeQuestion(
                        'Une fonction associe à chaque élément du domaine :',
                        'Une unique valeur de sortie',
                        'Plusieurs sorties obligatoires',
                        'Aucune sortie',
                        'Une dérivée',
                        'L\'unicité de l\'image distingue une fonction d\'une relation arbitraire.'
                    ),
                    $makeQuestion(
                        'Une suite définie par u_{n+1}=u_n+2 est :',
                        'Récursive',
                        'Constante',
                        'Aléatoire',
                        'Sans définition',
                        'Chaque terme dépend explicitement du terme précédent.'
                    ),
                    $makeQuestion(
                        'Une structure booléenne utilise notamment :',
                        'Vrai et faux',
                        'Uniquement des réels',
                        'Des angles',
                        'Des dérivées',
                        'Les valeurs booléennes représentent deux états logiques.'
                    ),
                    $makeQuestion(
                        'La complexité O(n) signifie grossièrement que le coût :',
                        'Croît proportionnellement à n',
                        'Est constant',
                        'Croît comme n² toujours',
                        'Ne dépend jamais de n',
                        'O(n) décrit une croissance linéaire du coût avec la taille de l\'entrée.'
                    ),
                    $makeQuestion(
                        'Une boucle qui double la quantité de travail à chaque étape est typiquement liée à :',
                        'Une croissance exponentielle',
                        'Une croissance linéaire',
                        'Une constante',
                        'Une division',
                        'Des répétitions par facteur produisent une croissance exponentielle en nombre d\'étapes.'
                    ),
                    $makeQuestion(
                        'Une démonstration par récurrence comporte :',
                        'Initialisation puis hérédité',
                        'Seulement un exemple',
                        'Uniquement une contradiction',
                        'Un graphique',
                        'On vérifie d\'abord un cas initial puis le passage d\'un rang au suivant.'
                    ),
                    $makeQuestion(
                        'Un algorithme correct doit :',
                        'Produire le bon résultat selon ses spécifications',
                        'Être toujours le plus rapide possible',
                        'Ne jamais utiliser de boucle',
                        'Être récursif',
                        'La correction dépend du résultat attendu, pas seulement de la vitesse.'
                    ),
                    $makeQuestion(
                        'Pourquoi les mathématiques discrètes sont importantes en informatique ?',
                        'Elles étudient les structures finies et les processus utilisés en algorithmique',
                        'Elles remplacent l\'analyse réelle',
                        'Elles servent uniquement à mesurer',
                        'Elles ne traitent pas les graphes',
                        'Les graphes, relations, logiques et algorithmes sont au cœur de nombreux systèmes informatiques.'
                    ),
                ],
            ],
            [
                'title' => 'Relations et fonctions',
                'description' => 'Comprendre les propriétés des relations et des fonctions finies.',
                'duration' => 20,
                'passing_score' => 60,
                'questions' => [
                    $makeQuestion(
                        'Une relation R sur un ensemble E est dite réflexive lorsque :',
                        'Tout élément de E est en relation avec lui-même',
                        'Aucun élément n\'est en relation avec lui-même',
                        'Deux éléments distincts sont toujours en relation',
                        'La relation est vide',
                        'La réflexivité signifie que pour tout x de E, x R x.'
                    ),
                    $makeQuestion(
                        'Une relation R est dite symétrique lorsque :',
                        'x R y implique toujours y R x',
                        'x R y implique que x = y',
                        'Aucun couple ne vérifie la relation',
                        'x R y implique y R z',
                        'La symétrie demande que la relation soit réversible pour chaque couple.'
                    ),
                    $makeQuestion(
                        'Une relation R est dite transitive lorsque :',
                        'x R y et y R z impliquent x R z',
                        'x R y implique y R x',
                        'x R x pour tout x',
                        'La relation ne contient aucun couple',
                        'La transitivité relie trois éléments par une chaîne de relations.'
                    ),
                    $makeQuestion(
                        'Une relation d\'équivalence doit être :',
                        'Réflexive, symétrique et transitive',
                        'Seulement symétrique',
                        'Seulement transitive',
                        'Ni réflexive ni transitive',
                        'Ces trois propriétés définissent une relation d\'équivalence.'
                    ),
                    $makeQuestion(
                        'Une fonction f est dite injective lorsque :',
                        'Deux éléments distincts du domaine ont toujours des images distinctes',
                        'Chaque élément de l\'arrivée a au moins un antécédent',
                        'Deux éléments distincts peuvent avoir la même image',
                        'La fonction n\'a aucun antécédent',
                        'L\'injectivité interdit à deux éléments différents de partager la même image.'
                    ),
                    $makeQuestion(
                        'Une fonction f est dite surjective lorsque :',
                        'Chaque élément de l\'ensemble d\'arrivée possède au moins un antécédent',
                        'Chaque élément du domaine a une image unique',
                        'Aucun élément de l\'arrivée n\'est atteint',
                        'La fonction est forcément croissante',
                        'La surjectivité garantit que l\'image de f couvre tout l\'ensemble d\'arrivée.'
                    ),
                    $makeQuestion(
                        'Une fonction bijective est à la fois :',
                        'Injective et surjective',
                        'Injective uniquement',
                        'Surjective uniquement',
                        'Ni injective ni surjective',
                        'La bijectivité combine les deux propriétés, ce qui permet de définir une fonction réciproque.'
                    ),
                    $makeQuestion(
                        'Si f(x) = x+3 et g(x) = 2x, que vaut (f∘g)(4) ?',
                        '11',
                        '14',
                        '8',
                        '7',
                        'g(4)=2×4=8, puis f(8)=8+3=11.'
                    ),
                    $makeQuestion(
                        'Pour une fonction f bijective, quelle propriété possède sa réciproque f⁻¹ ?',
                        'f⁻¹(f(x)) = x pour tout x du domaine',
                        'f⁻¹ est toujours égale à f',
                        'f⁻¹ n\'existe que pour les fonctions constantes',
                        'f⁻¹(x) = f(x) pour tout x',
                        'La réciproque annule l\'effet de f, redonnant l\'élément initial.'
                    ),
                    $makeQuestion(
                        'Soit A={1,2,3} et R={(1,2),(2,1)}. Cette relation est-elle symétrique ?',
                        'Oui',
                        'Non',
                        'Seulement si on ajoute (3,3)',
                        'Seulement pour les nombres pairs',
                        'Pour chaque couple (x,y) de R, le couple (y,x) appartient aussi à R : (1,2) et (2,1) sont tous deux présents.'
                    ),
                ],
            ],
            [
                'title' => 'Récurrence et suites discrètes',
                'description' => 'Définir et interpréter des suites par récurrence.',
                'duration' => 20,
                'passing_score' => 60,
                'questions' => [
                    $makeQuestion(
                        'Une suite récurrente est définie par :',
                        'Une relation entre un terme et les termes précédents, avec des valeurs initiales',
                        'Une formule indépendante de n',
                        'Un tableau de valeurs aléatoires',
                        'Une équation différentielle',
                        'La récurrence exprime un terme en fonction des termes antérieurs, à partir d\'une ou plusieurs valeurs initiales.'
                    ),
                    $makeQuestion(
                        'Si u_0=3 et u_{n+1}=u_n+5, que vaut u_2 ?',
                        '13',
                        '8',
                        '15',
                        '18',
                        'u_1=3+5=8, puis u_2=8+5=13.'
                    ),
                    $makeQuestion(
                        'Si u_0=2 et u_{n+1}=2×u_n, que vaut u_3 ?',
                        '16',
                        '8',
                        '6',
                        '32',
                        'u_1=4, u_2=8, u_3=16.'
                    ),
                    $makeQuestion(
                        'Une suite arithmétique de raison r vérifie :',
                        'u_{n+1}=u_n+r',
                        'u_{n+1}=u_n×r',
                        'u_{n+1}=u_n²',
                        'u_{n+1}=r',
                        'Chaque terme s\'obtient en ajoutant la raison r au terme précédent.'
                    ),
                    $makeQuestion(
                        'Une suite géométrique de raison q vérifie :',
                        'u_{n+1}=u_n×q',
                        'u_{n+1}=u_n+q',
                        'u_{n+1}=u_n-q',
                        'u_{n+1}=q',
                        'Chaque terme s\'obtient en multipliant le précédent par la raison q.'
                    ),
                    $makeQuestion(
                        'Pour la suite arithmétique u_0=4, de raison 3, quelle est la formule explicite de u_n ?',
                        'u_n=4+3n',
                        'u_n=4×3^n',
                        'u_n=3+4n',
                        'u_n=4^n',
                        'Pour une suite arithmétique, u_n=u_0+n×r=4+3n.'
                    ),
                    $makeQuestion(
                        'Pour la suite géométrique u_0=2, de raison 3, que vaut u_2 ?',
                        '18',
                        '8',
                        '12',
                        '6',
                        'u_1=2×3=6, puis u_2=6×3=18.'
                    ),
                    $makeQuestion(
                        'Dans un raisonnement par récurrence, l\'étape d\'hérédité consiste à :',
                        'Montrer que la propriété au rang n implique la propriété au rang n+1',
                        'Vérifier uniquement le premier cas',
                        'Montrer que la propriété est fausse pour tout n',
                        'Calculer la limite de la suite',
                        'L\'hérédité relie une étape quelconque à l\'étape suivante.'
                    ),
                    $makeQuestion(
                        'Pourquoi l\'initialisation est-elle nécessaire dans une démonstration par récurrence ?',
                        'Pour garantir que la propriété est vraie pour le premier rang considéré',
                        'Parce qu\'elle remplace l\'hérédité',
                        'Parce qu\'elle prouve la propriété pour tous les rangs à elle seule',
                        'Parce qu\'elle n\'a aucune utilité',
                        'Sans un point de départ vérifié, l\'enchaînement de l\'hérédité ne peut démarrer.'
                    ),
                    $makeQuestion(
                        'Si u_n désigne le nombre de façons de monter n marches en montant 1 ou 2 marches à la fois, quelle relation de récurrence vérifie u_n (pour n≥2) ?',
                        'u_n=u_{n-1}+u_{n-2}',
                        'u_n=u_{n-1}×u_{n-2}',
                        'u_n=u_{n-1}-u_{n-2}',
                        'u_n=2×u_{n-1}',
                        'La dernière étape utilise soit une marche simple (u_{n-1} façons), soit un double pas (u_{n-2} façons), d\'où u_n=u_{n-1}+u_{n-2} — c\'est la suite de Fibonacci.'
                    ),
                ],
            ],
            [
                'title' => 'Récurrences et croissance',
                'description' => 'Étudier des relations récursives et leur évolution.',
                'duration' => 20,
                'passing_score' => 60,
                'questions' => [
                    $makeQuestion(
                        'Si une suite vérifie u_{n+1}=u_n+c (c constante positive), sa croissance est dite :',
                        'Linéaire',
                        'Exponentielle',
                        'Constante',
                        'Nulle',
                        'Ajouter une constante à chaque étape produit une progression linéaire en n.'
                    ),
                    $makeQuestion(
                        'Si une suite vérifie u_{n+1}=2×u_n avec u_0>0, sa croissance est dite :',
                        'Exponentielle',
                        'Linéaire',
                        'Constante',
                        'Décroissante',
                        'Multiplier par un facteur fixe à chaque étape produit une croissance exponentielle.'
                    ),
                    $makeQuestion(
                        'Pour u_0=1 et u_{n+1}=2×u_n, que vaut u_5 ?',
                        '32',
                        '16',
                        '10',
                        '64',
                        'u_n=2^n, donc u_5=2^5=32.'
                    ),
                    $makeQuestion(
                        'Une relation de récurrence de la forme T(n)=T(n-1)+1 correspond typiquement à un algorithme de complexité :',
                        'O(n)',
                        'O(1)',
                        'O(n²)',
                        'O(2^n)',
                        'Chaque appel ajoute une unité de travail et réduit n de 1 : il faut n étapes.'
                    ),
                    $makeQuestion(
                        'Une relation de récurrence T(n)=2×T(n/2)+n correspond à un algorithme utilisant notamment :',
                        'Une stratégie diviser pour régner',
                        'Une seule boucle simple',
                        'Aucune récursivité',
                        'Une recherche aléatoire',
                        'Diviser le problème en deux sous-problèmes de taille moitié est typique des algorithmes diviser pour régner, comme le tri fusion.'
                    ),
                    $makeQuestion(
                        'Si T(n)=T(n-1)×2 avec T(0)=1, que vaut T(4) ?',
                        '16',
                        '8',
                        '4',
                        '32',
                        'T(n)=2^n, donc T(4)=16.'
                    ),
                    $makeQuestion(
                        'Entre une croissance linéaire et une croissance exponentielle, laquelle devient la plus grande pour n suffisamment grand ?',
                        'La croissance exponentielle',
                        'La croissance linéaire',
                        'Elles restent toujours égales',
                        'Cela dépend uniquement de n=0',
                        'Une fonction exponentielle dépasse toujours une fonction linéaire à partir d\'un certain rang.'
                    ),
                    $makeQuestion(
                        'Pourquoi une récurrence T(n)=T(n-1)+T(n-2) peut-elle croître rapidement ?',
                        'Chaque terme dépend de la somme de deux termes précédents déjà grands',
                        'Parce qu\'elle est toujours constante',
                        'Parce qu\'elle diminue à chaque étape',
                        'Parce qu\'elle ne dépend d\'aucun terme antérieur',
                        'Comme dans la suite de Fibonacci, la somme cumulative de termes croissants entraîne une croissance rapide.'
                    ),
                    $makeQuestion(
                        'Une suite décroissante vers 0 avec u_{n+1}=u_n/2 et u_0=16 donne u_3 égal à :',
                        '2',
                        '4',
                        '8',
                        '1',
                        'u_1=8, u_2=4, u_3=2.'
                    ),
                    $makeQuestion(
                        'Quel outil permet souvent de calculer directement un terme d\'une suite récurrente sans passer par tous les termes précédents ?',
                        'Une formule explicite',
                        'Une boucle infinie',
                        'Une suppression de la récurrence',
                        'Un graphique uniquement',
                        'Lorsqu\'elle existe, une formule explicite donne u_n directement à partir de n, sans itérer.'
                    ),
                ],
            ],
            [
                'title' => 'Algorithmes et structures de décision',
                'description' => 'Relier étapes, conditions et répétitions.',
                'duration' => 20,
                'passing_score' => 60,
                'questions' => [
                    $makeQuestion(
                        'Dans un algorithme, une structure conditionnelle (si...alors...sinon) sert à :',
                        'Choisir entre plusieurs actions selon une condition',
                        'Répéter indéfiniment une instruction',
                        'Toujours exécuter toutes les instructions',
                        'Supprimer une variable',
                        'La structure conditionnelle oriente l\'exécution selon qu\'une condition est vraie ou fausse.'
                    ),
                    $makeQuestion(
                        'Une boucle « tant que » (while) s\'arrête lorsque :',
                        'Sa condition devient fausse',
                        'Elle a été exécutée exactement une fois',
                        'La variable de boucle atteint toujours zéro',
                        'Elle ne s\'arrête jamais',
                        'La boucle while teste sa condition avant chaque itération et s\'arrête dès qu\'elle est fausse.'
                    ),
                    $makeQuestion(
                        'Une boucle « pour » (for) est particulièrement adaptée lorsque :',
                        'Le nombre d\'itérations est connu à l\'avance',
                        'Le nombre d\'itérations est totalement inconnu',
                        'Il n\'y a aucune itération',
                        'La condition ne peut jamais être testée',
                        'La boucle for est conçue pour répéter une action un nombre déterminé de fois.'
                    ),
                    $makeQuestion(
                        'Quel est le rôle d\'une variable compteur dans une boucle ?',
                        'Suivre le nombre d\'itérations déjà effectuées',
                        'Stocker uniquement le résultat final',
                        'Remplacer la condition d\'arrêt',
                        'Éviter toute itération',
                        'Le compteur permet de savoir où on se trouve dans la répétition et de décider quand arrêter.'
                    ),
                    $makeQuestion(
                        'Dans un organigramme (diagramme de flux), un losange représente :',
                        'Une décision ou un test conditionnel',
                        'Une instruction simple',
                        'Le début du programme',
                        'Une boucle infinie obligatoire',
                        'La forme en losange est la convention standard pour représenter une décision dans un organigramme.'
                    ),
                    $makeQuestion(
                        'Quel est l\'objectif principal d\'un algorithme de tri ?',
                        'Réorganiser des éléments selon un ordre donné',
                        'Supprimer tous les éléments',
                        'Mélanger aléatoirement les éléments',
                        'Compter uniquement le nombre d\'éléments',
                        'Un algorithme de tri place les éléments dans un ordre croissant ou décroissant selon un critère.'
                    ),
                    $makeQuestion(
                        'Pourquoi teste-t-on souvent un algorithme avec des cas limites (valeurs extrêmes) ?',
                        'Pour vérifier qu\'il se comporte correctement dans les situations les plus délicates',
                        'Parce que les cas limites n\'ont aucune importance',
                        'Pour ralentir volontairement l\'algorithme',
                        'Pour éviter d\'avoir à tester les cas normaux',
                        'Les cas limites révèlent souvent des erreurs qui n\'apparaissent pas avec des entrées habituelles.'
                    ),
                    $makeQuestion(
                        'Un algorithme récursif doit impérativement posséder :',
                        'Un cas de base qui arrête les appels récursifs',
                        'Une boucle for obligatoire',
                        'Un nombre pair d\'instructions',
                        'Un résultat toujours négatif',
                        'Sans cas de base, les appels récursifs ne s\'arrêteraient jamais.'
                    ),
                    $makeQuestion(
                        'Que représente un pseudocode ?',
                        'Une description d\'algorithme indépendante d\'un langage de programmation précis',
                        'Un langage de programmation officiel',
                        'Un code impossible à comprendre',
                        'Un graphique uniquement décoratif',
                        'Le pseudocode permet de décrire la logique d\'un algorithme sans syntaxe liée à un langage particulier.'
                    ),
                    $makeQuestion(
                        'Pour trouver le plus grand élément d\'une liste non vide, quelle est une stratégie simple ?',
                        'Parcourir la liste en gardant en mémoire le plus grand élément rencontré',
                        'Trier la liste en ordre aléatoire puis s\'arrêter',
                        'Supprimer tous les éléments sauf le premier',
                        'Deviner une valeur sans parcourir la liste',
                        'En comparant chaque élément au maximum courant, on obtient le plus grand élément après un seul parcours.'
                    ),
                ],
            ],
            [
                'title' => 'Complexité élémentaire',
                'description' => 'Comparer des ordres de croissance simples.',
                'duration' => 20,
                'passing_score' => 60,
                'questions' => [
                    $makeQuestion(
                        'La notation O(n²) décrit le coût d\'un algorithme dont le temps croît comme :',
                        'Le carré de la taille de l\'entrée',
                        'La taille de l\'entrée elle-même',
                        'Une constante',
                        'Le logarithme de l\'entrée',
                        'O(n²) signifie que le nombre d\'opérations croît proportionnellement à n².'
                    ),
                    $makeQuestion(
                        'Parmi O(1), O(n), O(n²) et O(2ⁿ), quel ordre de croissance est le plus rapide pour de grandes valeurs de n ?',
                        'O(2ⁿ)',
                        'O(1)',
                        'O(n)',
                        'O(n²)',
                        'La croissance exponentielle dépasse toujours les croissances constante, linéaire et polynomiale pour n suffisamment grand.'
                    ),
                    $makeQuestion(
                        'Un algorithme qui examine chaque élément d\'une liste de taille n exactement une fois a une complexité :',
                        'O(n)',
                        'O(1)',
                        'O(n²)',
                        'O(log n)',
                        'Parcourir une fois chaque élément coûte un nombre d\'opérations proportionnel à n.'
                    ),
                    $makeQuestion(
                        'Deux boucles imbriquées, chacune parcourant n éléments, donnent typiquement une complexité :',
                        'O(n²)',
                        'O(n)',
                        'O(1)',
                        'O(log n)',
                        'Pour chacun des n passages de la boucle externe, la boucle interne effectue n opérations, soit n×n=n².'
                    ),
                    $makeQuestion(
                        'La recherche dichotomique dans une liste triée de taille n a une complexité de :',
                        'O(log n)',
                        'O(n)',
                        'O(n²)',
                        'O(1)',
                        'Chaque étape divise la zone de recherche par deux, ce qui donne un nombre d\'étapes proportionnel à log₂(n).'
                    ),
                    $makeQuestion(
                        'Un algorithme de complexité O(1) a un coût qui :',
                        'Ne dépend pas de la taille de l\'entrée',
                        'Double à chaque élément supplémentaire',
                        'Croît comme le carré de l\'entrée',
                        'Devient infini pour de grandes entrées',
                        'O(1) correspond à un nombre d\'opérations constant, indépendant de n.'
                    ),
                    $makeQuestion(
                        'Pour n=100, un algorithme O(n) effectue environ 100 opérations. Combien en effectue environ un algorithme O(n²) pour la même taille ?',
                        '10000',
                        '100',
                        '200',
                        '1000',
                        'O(n²) pour n=100 donne environ 100²=10000 opérations.'
                    ),
                    $makeQuestion(
                        'Pourquoi s\'intéresse-t-on surtout au comportement d\'un algorithme pour de grandes valeurs de n ?',
                        'Parce que les différences de complexité deviennent déterminantes lorsque n augmente',
                        'Parce que les petites valeurs de n sont toujours plus importantes',
                        'Parce que la complexité n\'a aucun effet pratique',
                        'Parce que n reste toujours égal à 1',
                        'Pour de petites entrées, les différences de complexité sont souvent négligeables ; elles deviennent visibles pour de grandes entrées.'
                    ),
                    $makeQuestion(
                        'Un algorithme de tri par insertion a, dans le pire cas, une complexité de :',
                        'O(n²)',
                        'O(n)',
                        'O(log n)',
                        'O(1)',
                        'Dans le pire cas, chaque élément doit être comparé à tous les éléments déjà triés, ce qui donne une complexité quadratique.'
                    ),
                    $makeQuestion(
    'Si un algorithme A a une complexité Θ(n) et un algorithme B une complexité Θ(n²), que peut-on affirmer asymptotiquement ?',
    'Le coût de A est inférieur à celui de B pour n suffisamment grand',
    'B devient toujours plus rapide que A',
    'A et B ont exactement le même coût',
    'La comparaison est impossible',
    'Une complexité Θ(n) croît asymptotiquement moins vite qu’une complexité Θ(n²). Les constantes multiplicatives ne changent pas cet ordre lorsque n devient suffisamment grand.'
),
                ],
            ],
            [
                'title' => 'Logique booléenne et modèles discrets',
                'description' => 'Manipuler des états vrai/faux et des structures simples.',
                'duration' => 20,
                'passing_score' => 60,
                'questions' => [
                    $makeQuestion(
                        'En logique booléenne, l\'opérateur ET (AND) entre deux propositions est vrai lorsque :',
                        'Les deux propositions sont vraies simultanément',
                        'Au moins une des deux est vraie',
                        'Aucune des deux n\'est vraie',
                        'Exactement une des deux est vraie',
                        'La conjonction logique ET n\'est vraie que si les deux opérandes sont vraies.'
                    ),
                    $makeQuestion(
                        'L\'opérateur OU (OR) entre deux propositions est vrai lorsque :',
                        'Au moins une des deux propositions est vraie',
                        'Les deux propositions doivent être vraies',
                        'Les deux propositions doivent être fausses',
                        'Aucune proposition n\'est autorisée',
                        'La disjonction OU est vraie dès qu\'au moins un des deux opérandes est vrai.'
                    ),
                    $makeQuestion(
                        'La négation NON (NOT) d\'une proposition vraie est :',
                        'Fausse',
                        'Vraie',
                        'Indéterminée',
                        'Toujours nulle',
                        'La négation inverse systématiquement la valeur de vérité.'
                    ),
                    $makeQuestion(
                        'Combien de lignes contient la table de vérité complète de deux propositions booléennes A et B ?',
                        '4',
                        '2',
                        '8',
                        '16',
                        'Chaque proposition a 2 valeurs possibles, donc 2×2=4 combinaisons pour deux propositions.'
                    ),
                    $makeQuestion(
                        'Que vaut A ET (NON A) pour toute proposition A ?',
                        'Faux, toujours',
                        'Vrai, toujours',
                        'Cela dépend de A',
                        'Indéterminé',
                        'Une proposition et sa négation ne peuvent jamais être vraies en même temps.'
                    ),
                    $makeQuestion(
                        'Que vaut A OU (NON A) pour toute proposition A ?',
                        'Vrai, toujours',
                        'Faux, toujours',
                        'Cela dépend de A',
                        'Indéterminé',
                        'Une proposition est soit vraie soit fausse, donc A ou sa négation est toujours vraie : c\'est le principe du tiers exclu.'
                    ),
                    $makeQuestion(
                        'Dans un circuit logique, une porte ET (AND) à deux entrées produit une sortie vraie lorsque :',
                        'Les deux entrées sont à l\'état vrai',
                        'Au moins une entrée est vraie',
                        'Les deux entrées sont fausses',
                        'Une seule entrée existe',
                        'La porte ET reproduit électroniquement le comportement de la conjonction logique.'
                    ),
                    $makeQuestion(
                        'Les lois de De Morgan permettent notamment de transformer :',
                        'La négation d\'un ET ou d\'un OU en une combinaison équivalente',
                        'Une addition en multiplication',
                        'Une suite en fonction continue',
                        'Un ensemble infini en ensemble fini',
                        'NON(A ET B) équivaut à (NON A) OU (NON B), et réciproquement pour le OU.'
                    ),
                    $makeQuestion(
                        'Que vaut NON(A ET B) selon les lois de De Morgan ?',
                        '(NON A) OU (NON B)',
                        '(NON A) ET (NON B)',
                        'A ET B',
                        'A OU B',
                        'La loi de De Morgan transforme la négation d\'une conjonction en disjonction des négations.'
                    ),
                    $makeQuestion(
                        'Une proposition composée qui est toujours vraie, quelles que soient les valeurs de vérité de ses variables, est appelée :',
                        'Une tautologie',
                        'Une contradiction',
                        'Une variable libre',
                        'Une relation d\'équivalence',
                        'Une tautologie est vraie dans tous les cas possibles de sa table de vérité.'
                    ),
                ],
            ],
            [
                'title' => 'Induction et révision',
                'description' => 'Mobiliser les idées fondamentales du discret.',
                'duration' => 20,
                'passing_score' => 60,
                'questions' => [
                    $makeQuestion(
                        'Qu\'est-ce que l\'hérédité dans une démonstration par récurrence ?',
                        'Le passage du rang n au rang n+1',
                        'La vérification du premier cas uniquement',
                        'Le calcul d\'une limite',
                        'Une boucle infinie',
                        'L\'hérédité montre que si la propriété est vraie à un rang, elle le reste au rang suivant.'
                    ),
                    $makeQuestion(
                        'Si u_0=5 et u_{n+1}=u_n-2, que vaut u_3 ?',
                        '-1',
                        '1',
                        '3',
                        '-3',
                        'u_1=3, u_2=1, u_3=-1.'
                    ),
                    $makeQuestion(
                        'Une fonction injective et surjective est dite :',
                        'Bijective',
                        'Constante',
                        'Récursive',
                        'Booléenne',
                        'La bijectivité combine l\'injectivité et la surjectivité.'
                    ),
                    $makeQuestion(
                        'Quelle complexité correspond à une recherche dichotomique dans une liste triée ?',
                        'O(log n)',
                        'O(n)',
                        'O(n²)',
                        'O(1)',
                        'La dichotomie divise la zone de recherche par deux à chaque étape.'
                    ),
                    $makeQuestion(
                        'Que vaut NON(VRAI ET FAUX) ?',
                        'VRAI',
                        'FAUX',
                        'Indéterminé',
                        'VRAI ET FAUX',
                        'VRAI ET FAUX vaut FAUX, et la négation de FAUX est VRAI.'
                    ),
                    $makeQuestion(
                        'Une relation réflexive, symétrique et transitive est appelée :',
                        'Une relation d\'équivalence',
                        'Une fonction bijective',
                        'Un algorithme récursif',
                        'Une tautologie',
                        'Ces trois propriétés définissent précisément une relation d\'équivalence.'
                    ),
                    $makeQuestion(
                        'Dans un algorithme, quel élément garantit l\'arrêt d\'une récursivité ?',
                        'Le cas de base',
                        'La boucle while',
                        'Le compteur global',
                        'La table de vérité',
                        'Le cas de base interrompt la chaîne des appels récursifs.'
                    ),
                    $makeQuestion(
                        'Pour la suite géométrique u_0=3, de raison 2, que vaut u_4 ?',
                        '48',
                        '24',
                        '16',
                        '96',
                        'u_n=3×2^n, donc u_4=3×16=48.'
                    ),
                    $makeQuestion(
                        'Deux boucles imbriquées parcourant chacune n éléments donnent une complexité :',
                        'O(n²)',
                        'O(n)',
                        'O(log n)',
                        'O(1)',
                        'La boucle interne s\'exécute n fois pour chacune des n itérations de la boucle externe.'
                    ),
                    $makeQuestion(
                        'Pourquoi les mathématiques discrètes sont-elles essentielles en informatique ?',
                        'Elles fournissent les outils pour modéliser des structures finies et analyser des algorithmes',
                        'Elles remplacent entièrement l\'algèbre linéaire',
                        'Elles ne s\'appliquent qu\'aux nombres réels',
                        'Elles interdisent toute utilisation de boucles',
                        'Ensembles, relations, suites, logique et complexité sont au cœur de l\'analyse algorithmique.'
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
