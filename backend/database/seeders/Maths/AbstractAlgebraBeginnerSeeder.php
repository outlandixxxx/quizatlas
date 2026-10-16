<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class AbstractAlgebraBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'abstract-algebra')->firstOrFail();

        $choicePositions = [4,4,2,2,4,1,1,2,1,3,1,4,4,3,4,1,3,1,1,4,1,2,3,2,1,4,2,2,3,4,3,4,1,4,4,2,4,2,3,1,4,2,3,3,4,2,1,1,2,1,2,3,1,3,2,3,2,3,1,2,1,4,2,4,1,3,3,2,3,3];
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
                'title' => 'Structures et lois de composition',
                'description' => 'Lois internes, associativité, commutativité et neutres.',
                'duration' => 20,
                'passing_score' => 60,
                'questions' => [
                    $makeQuestion(
                        'Une loi de composition interne doit :',
                        'Rester dans l\'ensemble',
                        'Être toujours commutative',
                        'Être toujours multiplicative',
                        'Être définie une seule fois',
                        'La fermeture signifie que le résultat reste dans l\'ensemble.'
                    ),
                    $makeQuestion(
                        'Une opération est associative si :',
                        '(a*b)*c=a*(b*c)',
                        'a*b=b*a',
                        'a*b=0',
                        'a+b=a-b',
                        'L\'associativité concerne le regroupement des opérations.'
                    ),
                    $makeQuestion(
                        'L\'élément neutre de l\'addition est :',
                        '0',
                        '1',
                        '-1',
                        '2',
                        'Ajouter 0 ne change pas l\'élément.'
                    ),
                    $makeQuestion(
                        'Un groupe possède notamment :',
                        'Un neutre et un inverse pour chaque élément',
                        'Seulement une addition',
                        'Uniquement deux éléments',
                        'Une distance',
                        'Ce sont des axiomes essentiels avec associativité et fermeture.'
                    ),
                    $makeQuestion(
                        'Z avec l\'addition est :',
                        'Un groupe abélien',
                        'Un corps',
                        'Un groupe multiplicatif',
                        'Un ensemble vide',
                        'Tous les entiers ont un opposé dans Z et l\'addition est commutative.'
                    ),
                    $makeQuestion(
                        'Un sous-groupe doit contenir :',
                        'L\'élément neutre',
                        'Aucun inverse',
                        'Plus d\'éléments que le groupe',
                        'Seulement des éléments positifs',
                        'Le neutre est indispensable à toute structure de groupe.'
                    ),
                    $makeQuestion(
                        'Un groupe cyclique est engendré par :',
                        'Un seul élément',
                        'Deux opérations',
                        'Aucun élément',
                        'Une matrice',
                        'Les multiples ou puissances d\'un générateur parcourent le groupe.'
                    ),
                    $makeQuestion(
                        'Un homomorphisme doit :',
                        'Préserver l\'opération',
                        'Inverser tous les éléments',
                        'Être constant',
                        'Supprimer le neutre',
                        'Il vérifie une identité compatible avec les lois des deux groupes.'
                    ),
                    $makeQuestion(
                        'Dans un anneau, la distributivité donne :',
                        'a(b+c)=ab+ac',
                        'a(b+c)=a+b+c',
                        'a(b+c)=abc',
                        'a(b+c)=a+b-c',
                        'La multiplication distribue sur l\'addition.'
                    ),
                    $makeQuestion(
                        'Modulo 5, 17 est congru à :',
                        '2',
                        '3',
                        '4',
                        '1',
                        'Le reste de 17 par 5 est 2.'
                    ),
                ],
            ],
            [
                'title' => 'Groupes et axiomes',
                'description' => 'Définition et exemples de groupes.',
                'duration' => 20,
                'passing_score' => 60,
                'questions' => [
                    $makeQuestion(
                        'Les quatre axiomes caractérisant un groupe sont :',
                        'Fermeture, associativité, existence du neutre, existence des inverses',
                        'Commutativité, distributivité, fermeture et ordre',
                        'Associativité, continuité, dérivabilité et fermeture',
                        'Existence du neutre et commutativité uniquement',
                        'Ces quatre propriétés définissent complètement la structure de groupe.'
                    ),
                    $makeQuestion(
                        '(R*, ×), l\'ensemble des réels non nuls muni de la multiplication, est-il un groupe ?',
                        'Oui, c\'est un groupe abélien',
                        'Non, car 0 n\'a pas d\'inverse',
                        'Non, car la multiplication n\'est pas associative',
                        'Oui, mais non commutatif',
                        'Tout réel non nul possède un inverse multiplicatif, et la multiplication est commutative et associative.'
                    ),
                    $makeQuestion(
                        '(N, +), l\'ensemble des entiers naturels muni de l\'addition, est-il un groupe ?',
                        'Non, car les éléments non nuls n\'ont pas d\'inverse dans N',
                        'Oui, c\'est un groupe abélien',
                        'Oui, mais non commutatif',
                        'Non, car l\'addition n\'est pas associative',
                        'Par exemple, 3 n\'a pas d\'opposé dans N, donc l\'axiome de l\'inverse échoue.'
                    ),
                    $makeQuestion(
                        'L\'élément neutre de la multiplication est :',
                        '1',
                        '0',
                        '-1',
                        'Indéfini',
                        'Multiplier par 1 ne change pas l\'élément considéré.'
                    ),
                    $makeQuestion(
                        'Dans un groupe, l\'inverse de l\'élément neutre est :',
                        'Le neutre lui-même',
                        'Toujours 0',
                        'Indéfini',
                        'L\'élément le plus grand du groupe',
                        'e*e=e, donc e est son propre inverse.'
                    ),
                    $makeQuestion(
                        'Un groupe abélien est un groupe dont l\'opération est :',
                        'Commutative',
                        'Non associative',
                        'Sans élément neutre',
                        'Toujours additive uniquement',
                        'L\'adjectif « abélien » qualifie précisément la commutativité de l\'opération du groupe.'
                    ),
                    $makeQuestion(
                        'L\'ordre d\'un groupe fini est :',
                        'Le nombre de ses éléments',
                        'Le nombre de ses sous-groupes',
                        'Toujours égal à 1',
                        'La somme de tous ses éléments',
                        'L\'ordre désigne simplement le cardinal de l\'ensemble sous-jacent au groupe.'
                    ),
                    $makeQuestion(
                        'Dans un groupe, l\'inverse de a*b est :',
                        'b⁻¹*a⁻¹',
                        'a⁻¹*b⁻¹ toujours',
                        'a*b lui-même',
                        'Le neutre e',
                        'L\'inverse d\'un produit renverse l\'ordre des inverses, ce qui compte si le groupe n\'est pas abélien.'
                    ),
                    $makeQuestion(
                        'Un groupe trivial contient :',
                        'Seulement l\'élément neutre',
                        'Exactement deux éléments',
                        'Une infinité d\'éléments',
                        'Aucun élément',
                        'Le groupe trivial {e} est le plus petit groupe possible.'
                    ),
                    $makeQuestion(
                        'Dans un groupe, l\'équation a*x=b admet-elle toujours une solution unique x ?',
                        'Oui, x=a⁻¹*b',
                        'Non, jamais',
                        'Seulement si a=e',
                        'Seulement si le groupe est abélien',
                        'L\'existence de l\'inverse de a garantit une solution unique à cette équation.'
                    ),
                ],
            ],
            [
                'title' => 'Sous-groupes',
                'description' => 'Reconnaître des sous-groupes élémentaires.',
                'duration' => 20,
                'passing_score' => 60,
                'questions' => [
                    $makeQuestion(
                        'Pour vérifier qu\'un sous-ensemble H non vide de G est un sous-groupe, il suffit de vérifier :',
                        'La fermeture, la présence du neutre et l\'existence des inverses dans H',
                        'Que H est fini',
                        'Que H contient tous les éléments de G',
                        'Que H est commutatif même si G ne l\'est pas',
                        'Ces trois conditions suffisent à garantir que H hérite de la structure de groupe.'
                    ),
                    $makeQuestion(
                        '{0} est-il un sous-groupe de (Z,+) ?',
                        'Oui, c\'est le sous-groupe trivial',
                        'Non, car il ne contient qu\'un élément',
                        'Non, car 0 n\'est pas un entier',
                        'Oui, mais seulement pour la multiplication',
                        'Le singleton {0} vérifie toutes les conditions de sous-groupe.'
                    ),
                    $makeQuestion(
                        'L\'ensemble des entiers pairs est-il un sous-groupe de (Z,+) ?',
                        'Oui, car la somme de deux pairs est paire et l\'opposé d\'un pair est pair',
                        'Non, car 0 n\'est pas pair',
                        'Non, car la somme de deux pairs peut être impaire',
                        'Oui, mais uniquement pour les pairs positifs',
                        'Les entiers pairs sont stables par addition et par passage à l\'opposé, et contiennent 0.'
                    ),
                    $makeQuestion(
                        'L\'ensemble des entiers impairs est-il un sous-groupe de (Z,+) ?',
                        'Non, car la somme de deux impairs est paire',
                        'Oui, car il contient 1',
                        'Oui, car l\'opposé d\'un impair est impair',
                        'Oui, c\'est toujours le cas',
                        'L\'ensemble n\'est pas stable par addition : la fermeture échoue, et il ne contient pas 0.'
                    ),
                    $makeQuestion(
                        'Tout groupe G admet au moins :',
                        'Deux sous-groupes : {e} et G lui-même',
                        'Trois sous-groupes distincts obligatoirement',
                        'Aucun sous-groupe propre',
                        'Un seul sous-groupe',
                        'Ces deux sous-groupes triviaux existent toujours, quel que soit le groupe.'
                    ),
                    $makeQuestion(
                        'L\'intersection de deux sous-groupes de G est :',
                        'Toujours un sous-groupe de G',
                        'Jamais un sous-groupe',
                        'Toujours égale à G',
                        'Toujours réduite à l\'ensemble vide',
                        'L\'intersection conserve la fermeture, le neutre et les inverses des deux sous-groupes.'
                    ),
                    $makeQuestion(
                        'Si H est un sous-groupe fini de G (fini), l\'ordre de H divise :',
                        'L\'ordre de G (théorème de Lagrange)',
                        'Toujours 1',
                        'Le double de l\'ordre de G',
                        'Rien de particulier',
                        'C\'est l\'énoncé du théorème de Lagrange pour les groupes finis.'
                    ),
                    $makeQuestion(
                        'Le centre d\'un groupe G est l\'ensemble des éléments qui :',
                        'Commutent avec tous les éléments de G',
                        'N\'ont pas d\'inverse',
                        'Sont égaux au neutre uniquement',
                        'Forment un ensemble toujours vide',
                        'Le centre regroupe les éléments centraux qui commutent avec tout le groupe.'
                    ),
                    $makeQuestion(
                        'L\'ensemble des multiples de 3 dans (Z,+) est-il un sous-groupe ?',
                        'Oui',
                        'Non, car 0 n\'est pas un multiple de 3',
                        'Non, car la somme de deux multiples de 3 n\'est pas toujours un multiple de 3',
                        'Oui, mais uniquement les multiples positifs',
                        'La somme et l\'opposé d\'un multiple de 3 restent des multiples de 3, et 0 en est un.'
                    ),
                    $makeQuestion(
                        'Un sous-groupe propre de G est un sous-groupe :',
                        'Différent de G lui-même',
                        'Qui contient uniquement le neutre',
                        'Qui contient tous les éléments de G',
                        'Qui n\'existe jamais',
                        'La notion de « propre » exclut le cas trivial où le sous-groupe est égal à G entier.'
                    ),
                ],
            ],
            [
                'title' => 'Groupes cycliques et ordre',
                'description' => 'Générateurs et ordre d\'un élément.',
                'duration' => 20,
                'passing_score' => 60,
                'questions' => [
                    $makeQuestion(
                        'L\'ordre d\'un élément a dans un groupe est :',
                        'Le plus petit entier positif n tel que a^n=e',
                        'Le nombre d\'éléments du groupe',
                        'La valeur de a elle-même',
                        'Toujours égal à 1',
                        'C\'est la définition standard de l\'ordre d\'un élément dans un groupe.'
                    ),
                    $makeQuestion(
                        'Le groupe (Z/5Z, +) est-il cyclique ?',
                        'Oui, il est engendré par 1',
                        'Non, aucun groupe fini n\'est cyclique',
                        'Non, il faut au moins deux générateurs',
                        'Oui, mais seulement engendré par 0',
                        'En additionnant 1 à lui-même, on obtient tous les éléments de Z/5Z.'
                    ),
                    $makeQuestion(
                        'Dans (Z/6Z, +), l\'ordre de l\'élément 2 est :',
                        '3',
                        '6',
                        '2',
                        '1',
                        '2+2+2=6≡0 (mod 6), et aucune somme antérieure ne donne 0, donc l\'ordre est 3.'
                    ),
                    $makeQuestion(
                        'Un groupe cyclique d\'ordre n est-il toujours abélien ?',
                        'Oui',
                        'Non, jamais',
                        'Seulement si n est premier',
                        'Seulement si n est pair',
                        'Les puissances d\'un même générateur commutent toujours entre elles.'
                    ),
                    $makeQuestion(
                        'Si g engendre un groupe cyclique d\'ordre n, alors g^n vaut :',
                        'L\'élément neutre',
                        'g lui-même',
                        '0 toujours',
                        'Un élément d\'ordre n',
                        'Par définition de l\'ordre n du générateur, g^n revient au neutre du groupe.'
                    ),
                    $makeQuestion(
                        'Tout sous-groupe d\'un groupe cyclique est-il lui-même cyclique ?',
                        'Oui',
                        'Non, jamais',
                        'Seulement si le groupe est infini',
                        'Seulement si l\'ordre est premier',
                        'C\'est une propriété classique des groupes cycliques : tous leurs sous-groupes sont cycliques.'
                    ),
                    $makeQuestion(
                        'Dans un groupe fini, l\'ordre d\'un élément divise toujours :',
                        'L\'ordre du groupe',
                        'Le double de l\'ordre du groupe',
                        'Un nombre premier fixe',
                        'Rien en particulier',
                        'C\'est une conséquence directe du théorème de Lagrange appliqué au sous-groupe engendré par l\'élément.'
                    ),
                    $makeQuestion(
                        'Dans (Z/7Z, +), l\'ordre de l\'élément 1 est :',
                        '7',
                        '1',
                        '6',
                        '0',
                        'Il faut additionner 1 à lui-même sept fois pour revenir à 0 modulo 7.'
                    ),
                    $makeQuestion(
                        'Un groupe cyclique infini est isomorphe à :',
                        '(Z,+)',
                        '(R,+)',
                        '(Q,+)',
                        'Un groupe fini quelconque',
                        'Tout groupe cyclique infini se comporte exactement comme les entiers relatifs avec l\'addition.'
                    ),
                    $makeQuestion(
                        'Si un groupe a un ordre premier p, alors il est :',
                        'Nécessairement cyclique',
                        'Jamais cyclique',
                        'Nécessairement non abélien',
                        'Sans élément neutre',
                        'Un groupe d\'ordre premier n\'a pas de sous-groupe propre non trivial, ce qui force sa structure cyclique.'
                    ),
                ],
            ],
            [
                'title' => 'Morphismes et isomorphismes',
                'description' => 'Homomorphismes, noyau et isomorphisme.',
                'duration' => 20,
                'passing_score' => 60,
                'questions' => [
                    $makeQuestion(
                        'Un homomorphisme f:G→H vérifie :',
                        'f(a*b)=f(a)*f(b)',
                        'f(a*b)=f(a)+f(b)',
                        'f(a)=f(b) pour tous a, b',
                        'f(a*b)=a*b toujours',
                        'C\'est la condition de compatibilité qui définit un homomorphisme de groupes.'
                    ),
                    $makeQuestion(
                        'Tout homomorphisme envoie l\'élément neutre de G sur :',
                        'L\'élément neutre de H',
                        'Un élément quelconque de H',
                        'Lui-même obligatoirement',
                        'Le plus grand élément de H',
                        'C\'est une conséquence directe de la définition d\'un homomorphisme.'
                    ),
                    $makeQuestion(
                        'Le noyau d\'un homomorphisme f est l\'ensemble des éléments de G envoyés sur :',
                        'L\'élément neutre de H',
                        'Tous les éléments de H',
                        'L\'élément neutre de G',
                        'Un seul élément fixé arbitrairement',
                        'Le noyau regroupe précisément les antécédents du neutre de l\'ensemble d\'arrivée.'
                    ),
                    $makeQuestion(
                        'Un isomorphisme est un homomorphisme qui est de plus :',
                        'Bijectif',
                        'Constant',
                        'Toujours commutatif',
                        'Sans noyau défini',
                        'La bijectivité ajoutée à la compatibilité avec l\'opération caractérise l\'isomorphisme.'
                    ),
                    $makeQuestion(
                        'Si un homomorphisme est injectif, son noyau est :',
                        'Réduit au seul élément neutre',
                        'Égal à G entier',
                        'Toujours vide',
                        'De cardinal 2',
                        'Un noyau réduit au neutre caractérise exactement l\'injectivité d\'un homomorphisme.'
                    ),
                    $makeQuestion(
                        'Deux groupes isomorphes finis ont-ils nécessairement le même ordre ?',
                        'Oui',
                        'Non, jamais',
                        'Seulement si abéliens',
                        'Seulement si cycliques',
                        'Une bijection entre deux groupes exige qu\'ils aient le même cardinal.'
                    ),
                    $makeQuestion(
                        'L\'image d\'un homomorphisme f:G→H est :',
                        'Un sous-groupe de H',
                        'Toujours égale à H',
                        'Toujours réduite au neutre',
                        'Un sous-ensemble de G',
                        'L\'image d\'un homomorphisme hérite de la structure de sous-groupe dans l\'ensemble d\'arrivée.'
                    ),
                    $makeQuestion(
                        'Un automorphisme est un isomorphisme de G vers :',
                        'G lui-même',
                        'Un groupe plus petit',
                        'Le groupe trivial',
                        'Un ensemble quelconque sans structure',
                        'Le préfixe « auto » indique que le départ et l\'arrivée sont le même groupe.'
                    ),
                    $makeQuestion(
                        'Si f:G→H est un homomorphisme et G est abélien, l\'image de f est-elle abélienne ?',
                        'Oui',
                        'Non, jamais',
                        'Seulement si H est fini',
                        'Seulement si f est bijective',
                        'L\'image d\'un groupe abélien par un homomorphisme reste toujours abélienne.'
                    ),
                    $makeQuestion(
                        'Le noyau d\'un homomorphisme f:G→H est-il toujours un sous-groupe de G ?',
                        'Oui',
                        'Non, jamais',
                        'Seulement si f est surjectif',
                        'Seulement si G est fini',
                        'Le noyau vérifie toujours les conditions de fermeture, de neutre et d\'inverse dans G.'
                    ),
                ],
            ],
            [
                'title' => 'Anneaux',
                'description' => 'Addition, multiplication et distributivité.',
                'duration' => 20,
                'passing_score' => 60,
                'questions' => [
                    $makeQuestion(
                        'Un anneau est muni de deux opérations :',
                        'Une addition et une multiplication',
                        'Deux additions distinctes',
                        'Une seule opération',
                        'Une addition et une division',
                        'Les anneaux combinent une structure additive et une structure multiplicative liées par la distributivité.'
                    ),
                    $makeQuestion(
                        'Dans un anneau, l\'addition doit former :',
                        'Un groupe abélien',
                        'Un groupe non commutatif obligatoirement',
                        'Un ensemble sans neutre',
                        'Un corps à elle seule',
                        'C\'est l\'une des conditions fondamentales de la structure d\'anneau.'
                    ),
                    $makeQuestion(
                        '(Z, +, ×) est-il un anneau ?',
                        'Oui',
                        'Non, car la multiplication n\'est pas associative',
                        'Non, car Z n\'a pas de neutre additif',
                        'Non, car 0 n\'a pas d\'opposé',
                        'Z vérifie toutes les conditions d\'un anneau commutatif et unitaire.'
                    ),
                    $makeQuestion(
                        'Un anneau commutatif est un anneau dont :',
                        'La multiplication est commutative',
                        'L\'addition n\'est pas commutative',
                        'Il n\'y a pas d\'élément neutre',
                        'La multiplication n\'est jamais associative',
                        'La commutativité porte spécifiquement sur la seconde opération, la multiplication.'
                    ),
                    $makeQuestion(
                        'Un anneau unitaire possède :',
                        'Un élément neutre pour la multiplication',
                        'Un seul élément en tout',
                        'Uniquement des éléments négatifs',
                        'Aucun neutre additif',
                        'L\'adjectif « unitaire » renvoie à l\'existence d\'un neutre multiplicatif, souvent noté 1.'
                    ),
                    $makeQuestion(
                        'Un diviseur de zéro est un élément a≠0 tel qu\'il existe b≠0 vérifiant :',
                        'a×b=0',
                        'a+b=0',
                        'a=b',
                        'a×b=1',
                        'C\'est la définition d\'un diviseur de zéro dans un anneau.'
                    ),
                    $makeQuestion(
                        '(Z/4Z, +, ×) possède-t-il des diviseurs de zéro ?',
                        'Oui, par exemple 2×2≡0 (mod 4)',
                        'Non, aucun',
                        'Oui, mais seulement avec 0 lui-même',
                        'Non, car 4 est pair',
                        '2×2=4, qui est congru à 0 modulo 4, alors que 2≠0.'
                    ),
                    $makeQuestion(
                        'Dans un anneau, 0 multiplié par n\'importe quel élément a donne :',
                        '0',
                        'a',
                        '1',
                        'Indéfini',
                        'C\'est une conséquence directe de la distributivité dans tout anneau.'
                    ),
                    $makeQuestion(
                        'Un anneau intègre est un anneau commutatif unitaire sans :',
                        'Diviseurs de zéro (autres que 0)',
                        'Élément neutre',
                        'Addition définie',
                        'Éléments inversibles',
                        'L\'intégrité exclut toute paire d\'éléments non nuls dont le produit serait nul.'
                    ),
                    $makeQuestion(
                        'Dans un anneau, -(a×b) est égal à :',
                        '(-a)×b',
                        'a×b',
                        '-a-b',
                        'a×(-a)',
                        'C\'est une propriété standard reliant l\'opposé et la multiplication dans un anneau.'
                    ),
                ],
            ],
            [
                'title' => 'Corps et arithmétique modulaire simple',
                'description' => 'Corps, inverses et calculs modulo.',
                'duration' => 20,
                'passing_score' => 60,
                'questions' => [
                    $makeQuestion(
                        'Un corps est un anneau commutatif unitaire où :',
                        'Tout élément non nul possède un inverse pour la multiplication',
                        'Seul 1 possède un inverse',
                        'Aucun élément n\'a d\'inverse',
                        'L\'addition n\'est pas définie',
                        'C\'est la condition supplémentaire qui distingue un corps d\'un simple anneau.'
                    ),
                    $makeQuestion(
                        '(Q, +, ×), l\'ensemble des rationnels, est-il un corps ?',
                        'Oui',
                        'Non, car 0 a un inverse',
                        'Non, l\'addition n\'y est pas associative',
                        'Non, car Q est infini',
                        'Tout rationnel non nul admet un inverse rationnel pour la multiplication.'
                    ),
                    $makeQuestion(
                        '(Z, +, ×), l\'ensemble des entiers, est-il un corps ?',
                        'Non, car seuls 1 et -1 ont un inverse multiplicatif',
                        'Oui, c\'est un corps',
                        'Non, car l\'addition n\'y est pas commutative',
                        'Oui, mais seulement pour les entiers positifs',
                        'Par exemple, 2 n\'a pas d\'inverse entier, ce qui exclut Z de la catégorie des corps.'
                    ),
                    $makeQuestion(
                        '(Z/pZ, +, ×) est un corps si et seulement si p est :',
                        'Premier',
                        'Pair',
                        'Impair uniquement',
                        'Un carré parfait',
                        'La primalité de p garantit que tout élément non nul est inversible modulo p.'
                    ),
                    $makeQuestion(
                        'Modulo 7, l\'inverse multiplicatif de 3 est :',
                        '5',
                        '3',
                        '2',
                        '4',
                        '3×5=15≡1 (mod 7), donc 5 est bien l\'inverse de 3 modulo 7.'
                    ),
                    $makeQuestion(
                        'Modulo 6, l\'élément 2 possède-t-il un inverse multiplicatif ?',
                        'Non, car 2 et 6 ne sont pas premiers entre eux',
                        'Oui, son inverse est 3',
                        'Oui, son inverse est 4',
                        'Oui, son inverse est lui-même',
                        'Un élément n\'est inversible modulo n que s\'il est premier avec n, ce qui n\'est pas le cas de 2 et 6.'
                    ),
                    $makeQuestion(
                        '23 modulo 5 vaut :',
                        '3',
                        '4',
                        '2',
                        '0',
                        '23=4×5+3, donc le reste est 3.'
                    ),
                    $makeQuestion(
                        'Dans (Z/5Z, ×), le produit 3×4 modulo 5 vaut :',
                        '2',
                        '12',
                        '0',
                        '1',
                        '3×4=12, et 12≡2 (mod 5).'
                    ),
                    $makeQuestion(
                        'Un corps fini à p éléments, avec p premier, est noté :',
                        'Fp ou Z/pZ',
                        'Rp',
                        'Qp uniquement',
                        'Np',
                        'C\'est la notation standard pour le corps fini de caractéristique p.'
                    ),
                    $makeQuestion(
                        'Dans un corps, peut-il exister des diviseurs de zéro non nuls ?',
                        'Non, un corps est automatiquement intègre',
                        'Oui, systématiquement',
                        'Oui, mais seulement en dimension infinie',
                        'Oui, si le corps est fini',
                        'Dans un corps, tout élément non nul est inversible, ce qui exclut l\'existence de diviseurs de zéro.'
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
