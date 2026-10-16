<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class SetTheoryBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'set-theory')->firstOrFail();

        $choicePositions = [1,2,1,4,2,3,1,3,3,4,3,4,3,2,2,4,4,3,4,3,1,2,2,3,1,4,1,2,4,2,1,4,2,4,1,3,3,2,3,1,1,2,1,2,4,4,3,2,4,3,2,3,1,2,2,3,3,1,2,1,3,3,1,3,1,4,1,4,1,3,1,4,4,1,4,2,2,4,2,4];
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
                'title' => 'Fondamentaux des ensembles',
                'description' => 'Notation, appartenance et représentation des ensembles.',
                'duration' => 20,
                'passing_score' => 60,
                'questions' => [
                    $makeQuestion(
                        'L\'ensemble vide est noté :',
                        '∅',
                        '1',
                        'U',
                        '{0,1}',
                        'L\'ensemble vide ne contient aucun élément.'
                    ),
                    $makeQuestion(
                        'Si A={1,2,3}, alors 2 est :',
                        'Un élément de A',
                        'Un sous-ensemble de A',
                        'Le complément de A',
                        'Un élément de l\'univers uniquement',
                        'Le nombre 2 appartient directement à A.'
                    ),
                    $makeQuestion(
                        'Si A⊆B, tout élément de A appartient :',
                        'À B',
                        'À son complément',
                        'À ∅',
                        'À aucun ensemble',
                        'C\'est précisément la définition de l\'inclusion.'
                    ),
                    $makeQuestion(
                        'A∪B contient les éléments qui sont :',
                        'Dans A ou dans B',
                        'Dans A et seulement A',
                        'Dans aucun des deux',
                        'Dans leur différence uniquement',
                        'L\'union rassemble tous les éléments présents dans au moins un des deux ensembles.'
                    ),
                    $makeQuestion(
                        'A∩B contient les éléments :',
                        'Communs à A et B',
                        'De A seulement',
                        'De B seulement',
                        'Extérieurs aux deux',
                        'L\'intersection regroupe les éléments appartenant aux deux ensembles.'
                    ),
                    $makeQuestion(
                        'Si U est l\'univers et A un sous-ensemble, A^c désigne :',
                        'Le complément de A dans U',
                        'A lui-même',
                        'L\'ensemble vide toujours',
                        'A×A',
                        'Le complément contient les éléments de U qui ne sont pas dans A.'
                    ),
                    $makeQuestion(
                        'Le cardinal de {a,b,c} vaut :',
                        '3',
                        '2',
                        '1',
                        '0',
                        'Il y a trois éléments distincts.'
                    ),
                    $makeQuestion(
                        'Le produit cartésien A×B contient :',
                        'Des couples (a,b)',
                        'Des ensembles seulement',
                        'Des nombres premiers uniquement',
                        'Des intersections',
                        'Par définition, A×B est l\'ensemble des couples ordonnés a∈A et b∈B.'
                    ),
                    $makeQuestion(
                        'Une partition d\'un ensemble est une famille de sous-ensembles :',
                        'Disjoints et dont l\'union redonne l\'ensemble',
                        'Tous identiques',
                        'Tous vides',
                        'Qui se recouvrent tous',
                        'Les blocs d\'une partition sont non vides, deux à deux disjoints et couvrent tout l\'ensemble.'
                    ),
                    $makeQuestion(
                        'Si A={1,2} et B={2,3}, A\\B vaut :',
                        '{1}',
                        '{2}',
                        '{3}',
                        '{1,2,3}',
                        'La différence A\\B garde les éléments de A qui ne sont pas dans B, donc seulement 1.'
                    ),
                ],
            ],
            [
                'title' => 'Sous-ensembles et égalité',
                'description' => 'Inclusion, égalité et familles de sous-ensembles.',
                'duration' => 20,
                'passing_score' => 60,
                'questions' => [
                    $makeQuestion(
                        'Si A⊆B et B⊆A, alors :',
                        'A=B',
                        'A=∅',
                        'B=∅',
                        'A et B sont disjoints',
                        'La double inclusion entraîne l\'égalité des deux ensembles.'
                    ),
                    $makeQuestion(
                        'L\'ensemble {1,2} est-il un sous-ensemble de {1,2,3} ?',
                        'Oui',
                        'Non',
                        'Seulement si on ajoute 3',
                        'Seulement si l\'ordre est respecté',
                        'Tous les éléments de {1,2} appartiennent à {1,2,3}.'
                    ),
                    $makeQuestion(
                        'Tout ensemble est-il un sous-ensemble de lui-même ?',
                        'Oui, par réflexivité de l\'inclusion',
                        'Non, jamais',
                        'Seulement s\'il est vide',
                        'Seulement s\'il est infini',
                        'A⊆A est toujours vrai car tout élément de A appartient à A.'
                    ),
                    $makeQuestion(
                        'L\'ensemble vide est-il un sous-ensemble de tout ensemble ?',
                        'Oui, par convention',
                        'Non, jamais',
                        'Seulement pour les ensembles finis',
                        'Seulement pour les ensembles infinis',
                        'Il n\'existe aucun élément de ∅ qui ne serait pas dans un autre ensemble, la condition est donc vide et vraie.'
                    ),
                    $makeQuestion(
                        'Si A={1,2,3}, combien de sous-ensembles possède A ?',
                        '8',
                        '6',
                        '3',
                        '9',
                        'Un ensemble à n éléments possède 2^n sous-ensembles, ici 2³=8.'
                    ),
                    $makeQuestion(
                        'Deux ensembles sont égaux si et seulement si :',
                        'Ils ont exactement les mêmes éléments',
                        'Ils ont le même cardinal',
                        'Ils sont tous les deux finis',
                        'L\'un contient l\'autre',
                        'L\'égalité d\'ensembles se définit par l\'identité de leurs éléments.'
                    ),
                    $makeQuestion(
                        '{2,1,1} et {1,2} sont-ils égaux en tant qu\'ensembles ?',
                        'Oui, car les répétitions ne comptent pas',
                        'Non, car {2,1,1} a trois éléments',
                        'Non, car l\'ordre diffère',
                        'Seulement si on les trie',
                        'Un ensemble ne retient que les éléments distincts, sans répétition ni ordre.'
                    ),
                    $makeQuestion(
                        'L\'inclusion stricte A⊂B signifie :',
                        'A⊆B et A≠B',
                        'A⊆B uniquement',
                        'A et B sont disjoints',
                        'A=B',
                        'L\'inclusion stricte exige en plus que les deux ensembles ne soient pas égaux.'
                    ),
                    $makeQuestion(
                        'L\'ensemble des parties de {a,b}, noté P({a,b}), contient combien d\'éléments ?',
                        '4',
                        '2',
                        '3',
                        '8',
                        'P({a,b})={∅,{a},{b},{a,b}}, soit 2²=4 éléments.'
                    ),
                    $makeQuestion(
                        'Si A⊆B et B⊆C, alors :',
                        'A⊆C',
                        'A=C',
                        'B⊆A',
                        'A∩C=∅',
                        'L\'inclusion est transitive.'
                    ),
                ],
            ],
            [
                'title' => 'Union, intersection et différence',
                'description' => 'Opérations élémentaires entre ensembles.',
                'duration' => 20,
                'passing_score' => 60,
                'questions' => [
                    $makeQuestion(
                        'Si A={1,2,3} et B={3,4,5}, A∪B vaut :',
                        '{1,2,3,4,5}',
                        '{3}',
                        '{1,2}',
                        '{4,5}',
                        'L\'union rassemble tous les éléments présents dans A ou B, sans répétition.'
                    ),
                    $makeQuestion(
                        'Si A={1,2,3} et B={3,4,5}, A∩B vaut :',
                        '{3}',
                        '{1,2,3,4,5}',
                        '∅',
                        '{1,2}',
                        'Seul 3 est commun aux deux ensembles.'
                    ),
                    $makeQuestion(
                        'Si A={1,2,3} et B={3,4,5}, A\\B vaut :',
                        '{1,2}',
                        '{3}',
                        '{4,5}',
                        '{1,2,3}',
                        'A\\B garde les éléments de A absents de B, donc 1 et 2.'
                    ),
                    $makeQuestion(
                        'L\'union est-elle commutative ?',
                        'Oui, A∪B=B∪A',
                        'Non, jamais',
                        'Seulement si A=B',
                        'Seulement pour les ensembles finis',
                        'L\'ordre des ensembles n\'a pas d\'importance pour l\'union.'
                    ),
                    $makeQuestion(
                        'L\'intersection de deux ensembles disjoints vaut :',
                        'L\'ensemble vide',
                        'Leur union',
                        'Le plus grand des deux',
                        'Le plus petit des deux',
                        'Des ensembles disjoints n\'ont aucun élément commun.'
                    ),
                    $makeQuestion(
                        'Si A⊆B, alors A∪B vaut :',
                        'B',
                        'A',
                        '∅',
                        'A∩B',
                        'Comme A est déjà inclus dans B, leur union ne contient rien de plus que B.'
                    ),
                    $makeQuestion(
                        'Si A⊆B, alors A∩B vaut :',
                        'A',
                        'B',
                        '∅',
                        'A∪B',
                        'Puisque tous les éléments de A sont dans B, leur intersection redonne A.'
                    ),
                    $makeQuestion(
                        'La différence symétrique A△B contient les éléments :',
                        'Qui sont dans A ou dans B mais pas dans les deux',
                        'Qui sont dans A et dans B à la fois',
                        'Qui ne sont dans aucun des deux',
                        'Qui sont uniquement dans A',
                        'A△B=(A∪B)\\(A∩B), c\'est-à-dire les éléments exclusifs à chaque ensemble.'
                    ),
                    $makeQuestion(
                        'A∪∅ vaut toujours :',
                        'A',
                        '∅',
                        'L\'univers U',
                        'Le complément de A',
                        'Ajouter l\'ensemble vide à une union ne change rien.'
                    ),
                    $makeQuestion(
                        'A∩∅ vaut toujours :',
                        '∅',
                        'A',
                        'L\'univers U',
                        'Le complément de A',
                        'L\'ensemble vide n\'a aucun élément en commun avec A.'
                    ),
                ],
            ],
            [
                'title' => 'Complément et univers',
                'description' => 'Utiliser l\'univers et le complément d\'un ensemble.',
                'duration' => 20,
                'passing_score' => 60,
                'questions' => [
                    $makeQuestion(
                        'Si U={1,2,3,4,5} et A={1,2}, le complément de A dans U vaut :',
                        '{3,4,5}',
                        '{1,2}',
                        '∅',
                        '{1,2,3,4,5}',
                        'Le complément regroupe les éléments de U qui ne sont pas dans A.'
                    ),
                    $makeQuestion(
                        'Le complément du complément de A, noté (A^c)^c, vaut :',
                        'A',
                        'U',
                        '∅',
                        'A^c',
                        'Prendre deux fois le complément redonne l\'ensemble de départ.'
                    ),
                    $makeQuestion(
                        'Selon les lois de De Morgan, (A∪B)^c vaut :',
                        'A^c∩B^c',
                        'A^c∪B^c',
                        'A∩B',
                        'A∪B',
                        'Le complément d\'une union est l\'intersection des compléments.'
                    ),
                    $makeQuestion(
                        'Selon les lois de De Morgan, (A∩B)^c vaut :',
                        'A^c∪B^c',
                        'A^c∩B^c',
                        'A∪B',
                        'A∩B',
                        'Le complément d\'une intersection est l\'union des compléments.'
                    ),
                    $makeQuestion(
                        'A∪A^c vaut toujours :',
                        'U (l\'univers)',
                        '∅',
                        'A',
                        'A^c',
                        'Un ensemble et son complément recouvrent ensemble tout l\'univers.'
                    ),
                    $makeQuestion(
                        'A∩A^c vaut toujours :',
                        '∅',
                        'U',
                        'A',
                        'A^c',
                        'Un ensemble et son complément n\'ont aucun élément en commun.'
                    ),
                    $makeQuestion(
                        'Le complément de l\'ensemble vide dans U vaut :',
                        'U',
                        '∅',
                        'Un singleton',
                        'Indéfini',
                        'Tous les éléments de U ne sont pas dans ∅, donc le complément est U entier.'
                    ),
                    $makeQuestion(
                        'Le complément de l\'univers U, pris dans lui-même, vaut :',
                        '∅',
                        'U',
                        'Un singleton',
                        'Indéfini',
                        'Aucun élément de U n\'est hors de U, donc le complément est vide.'
                    ),
                    $makeQuestion(
                        'Si A⊆B, alors B^c est inclus dans :',
                        'A^c',
                        'A',
                        'B',
                        'A∩B',
                        'La complémentation inverse le sens de l\'inclusion.'
                    ),
                    $makeQuestion(
                        'Fixer un univers U est nécessaire pour définir :',
                        'Le complément d\'un ensemble',
                        'L\'union de deux ensembles',
                        'L\'intersection de deux ensembles',
                        'Le cardinal d\'un ensemble',
                        'Le complément se définit par rapport à un ensemble de référence, l\'univers.'
                    ),
                ],
            ],
            [
                'title' => 'Cardinalité',
                'description' => 'Compter les éléments et comparer des tailles d\'ensembles.',
                'duration' => 20,
                'passing_score' => 60,
                'questions' => [
                    $makeQuestion(
                        'Le cardinal de {a,b,c,d} vaut :',
                        '4',
                        '3',
                        '5',
                        '2',
                        'L\'ensemble contient quatre éléments distincts.'
                    ),
                    $makeQuestion(
                        'Si |A|=5 et |B|=3 avec A et B disjoints, |A∪B| vaut :',
                        '8',
                        '15',
                        '2',
                        '5',
                        'Pour des ensembles disjoints, les cardinaux s\'additionnent simplement : 5+3=8.'
                    ),
                    $makeQuestion(
                        'Si |A|=5, |B|=3 et |A∩B|=2, |A∪B| vaut :',
                        '6',
                        '8',
                        '10',
                        '0',
                        'Par la formule |A∪B|=|A|+|B|-|A∩B|=5+3-2=6.'
                    ),
                    $makeQuestion(
                        'Le cardinal de l\'ensemble vide vaut :',
                        '0',
                        '1',
                        'Indéfini',
                        '-1',
                        'L\'ensemble vide ne contient aucun élément.'
                    ),
                    $makeQuestion(
                        'Si |A|=n, alors |P(A)| (ensemble des parties) vaut :',
                        '2^n',
                        'n²',
                        '2n',
                        'n!',
                        'Un ensemble à n éléments possède exactement 2^n sous-ensembles.'
                    ),
                    $makeQuestion(
                        'Si |A|=4, combien de sous-ensembles à 2 éléments possède A ?',
                        '6',
                        '4',
                        '8',
                        '12',
                        'Le nombre de combinaisons de 2 éléments parmi 4 est C(4,2)=6.'
                    ),
                    $makeQuestion(
                        'Deux ensembles ont le même cardinal si :',
                        'Il existe une bijection entre eux',
                        'Ils ont le même nombre de sous-ensembles impairs',
                        'Ils sont tous les deux infinis',
                        'Ils ont la même union',
                        'La notion de cardinal se définit par l\'existence d\'une correspondance bijective.'
                    ),
                    $makeQuestion(
                        'Si |A|=3 et |B|=4, le cardinal de A×B vaut :',
                        '12',
                        '7',
                        '81',
                        '3',
                        '|A×B|=|A|×|B|=3×4=12.'
                    ),
                    $makeQuestion(
                        'Si A⊆B, alors |A| vérifie :',
                        '|A|≤|B|',
                        '|A|≥|B|',
                        '|A|=|B| obligatoirement',
                        '|A|<0',
                        'Un sous-ensemble ne peut pas avoir plus d\'éléments que l\'ensemble qui le contient.'
                    ),
                    $makeQuestion(
                        'Le cardinal de l\'ensemble des entiers naturels N est-il fini ?',
                        'Non, il est infini',
                        'Oui, il vaut 0',
                        'Oui, il vaut 1',
                        'Cela dépend du contexte',
                        'N contient une infinité d\'entiers 0,1,2,3,...'
                    ),
                ],
            ],
            [
                'title' => 'Produit cartésien',
                'description' => 'Construire et interpréter des couples ordonnés.',
                'duration' => 20,
                'passing_score' => 60,
                'questions' => [
                    $makeQuestion(
                        'Si A={1,2} et B={a,b}, A×B vaut :',
                        '{(1,a),(1,b),(2,a),(2,b)}',
                        '{(1,2),(a,b)}',
                        '{1,2,a,b}',
                        '{(a,1),(b,2)}',
                        'Le produit cartésien forme tous les couples avec le premier élément dans A et le second dans B.'
                    ),
                    $makeQuestion(
                        'Si |A|=2 et |B|=3, |A×B| vaut :',
                        '6',
                        '5',
                        '1',
                        '9',
                        '|A×B|=|A|×|B|=2×3=6.'
                    ),
                    $makeQuestion(
                        'A×B est-il égal à B×A en général ?',
                        'Non, sauf cas particuliers',
                        'Oui, toujours',
                        'Oui, si A et B sont finis',
                        'Oui, si A=B uniquement en cardinal',
                        'L\'ordre des éléments dans les couples diffère, donc A×B≠B×A en général.'
                    ),
                    $makeQuestion(
                        'Le produit cartésien A×A est parfois noté :',
                        'A²',
                        '2A',
                        'A∪A',
                        'A∩A',
                        'C\'est une notation courante pour le produit d\'un ensemble par lui-même.'
                    ),
                    $makeQuestion(
                        'Le couple (2,3) est-il égal au couple (3,2) ?',
                        'Non, l\'ordre compte dans un couple',
                        'Oui, l\'ordre n\'a pas d\'importance',
                        'Seulement si 2=3',
                        'Oui, car ce sont les mêmes nombres',
                        'Un couple ordonné distingue la première et la deuxième composante.'
                    ),
                    $makeQuestion(
                        'R×R représente géométriquement :',
                        'Le plan cartésien',
                        'Une droite',
                        'Un seul point',
                        'Un cercle',
                        'L\'ensemble des couples de réels correspond aux points du plan.'
                    ),
                    $makeQuestion(
                        'Si A=∅, alors A×B vaut :',
                        '∅, quel que soit B',
                        'B',
                        'L\'univers',
                        '{∅}',
                        'Sans élément dans A, aucun couple ne peut être formé.'
                    ),
                    $makeQuestion(
                        'Un produit cartésien de n ensembles produit des :',
                        'n-uplets ordonnés',
                        'Sous-ensembles non ordonnés',
                        'Nombres premiers',
                        'Partitions',
                        'Chaque élément du produit est une liste ordonnée de n composantes.'
                    ),
                    $makeQuestion(
                        'Si |A|=0 ou |B|=0, alors |A×B| vaut :',
                        '0',
                        '1',
                        '|A|+|B|',
                        'Indéfini',
                        'Un facteur vide dans le produit des cardinaux donne toujours 0.'
                    ),
                    $makeQuestion(
                        '(A×B)∩(C×D) peut s\'exprimer comme :',
                        '(A∩C)×(B∩D)',
                        '(A∪C)×(B∪D)',
                        'A×D',
                        'B×C',
                        'Un couple est dans les deux produits seulement si chaque composante est dans l\'intersection correspondante.'
                    ),
                ],
            ],
            [
                'title' => 'Partitions',
                'description' => 'Comprendre les partitions et les classes disjointes.',
                'duration' => 20,
                'passing_score' => 60,
                'questions' => [
                    $makeQuestion(
                        'Une partition possible de {1,2,3,4} en deux blocs est :',
                        '{1,2} et {3,4}',
                        '{1,2,3} et {3,4}',
                        '{1,2} et {2,3,4}',
                        '∅ et {1,2,3,4}',
                        'Les deux blocs sont non vides, disjoints, et leur union redonne l\'ensemble initial.'
                    ),
                    $makeQuestion(
                        'Les blocs d\'une partition doivent être :',
                        'Non vides et deux à deux disjoints',
                        'Tous identiques',
                        'Toujours au nombre de deux',
                        'Ordonnés',
                        'Ce sont les deux conditions essentielles définissant une partition, avec l\'union totale.'
                    ),
                    $makeQuestion(
                        'L\'union de tous les blocs d\'une partition doit redonner :',
                        'L\'ensemble initial',
                        'L\'ensemble vide',
                        'Un seul bloc',
                        'L\'univers uniquement',
                        'C\'est la condition de recouvrement total propre à une partition.'
                    ),
                    $makeQuestion(
                        '{∅,{1,2,3,4}} peut-il constituer une partition de {1,2,3,4} ?',
                        'Non, car l\'un des blocs est vide',
                        'Oui, car l\'union redonne l\'ensemble',
                        'Oui, car les blocs sont disjoints',
                        'Oui, toujours',
                        'Les blocs d\'une partition doivent tous être non vides.'
                    ),
                    $makeQuestion(
                        '{{1,2},{2,3,4}} est-elle une partition de {1,2,3,4} ?',
                        'Non, car les blocs ne sont pas disjoints',
                        'Oui, car l\'union redonne l\'ensemble',
                        'Oui, car chaque bloc est non vide',
                        'Oui, toujours',
                        'L\'élément 2 appartient aux deux blocs, ce qui viole la disjonction.'
                    ),
                    $makeQuestion(
                        'Une relation d\'équivalence sur un ensemble induit :',
                        'Une partition en classes d\'équivalence',
                        'Toujours l\'ensemble vide',
                        'Un seul élément',
                        'Un produit cartésien',
                        'Les classes d\'équivalence forment exactement une partition de l\'ensemble.'
                    ),
                    $makeQuestion(
                        'Combien de partitions possède un ensemble à un seul élément ?',
                        '1',
                        '0',
                        '2',
                        'Une infinité',
                        'La seule partition possible est l\'ensemble lui-même comme unique bloc.'
                    ),
                    $makeQuestion(
                        'Dans une partition, un même élément peut-il appartenir à deux blocs différents ?',
                        'Non, jamais',
                        'Oui, toujours',
                        'Oui, si les blocs sont petits',
                        'Oui, si l\'ensemble est infini',
                        'La disjonction des blocs interdit qu\'un élément appartienne à plusieurs blocs.'
                    ),
                    $makeQuestion(
                        '{{1},{2},{3},{4}} constitue-t-elle une partition valide de {1,2,3,4} ?',
                        'Oui, chaque bloc est un singleton disjoint des autres',
                        'Non, car les blocs sont trop petits',
                        'Non, car il faut exactement deux blocs',
                        'Non, car l\'union ne redonne pas l\'ensemble',
                        'Les singletons sont non vides, disjoints deux à deux, et leur union redonne l\'ensemble entier.'
                    ),
                    $makeQuestion(
                        'La partition triviale d\'un ensemble non vide E est :',
                        '{E}, un seul bloc contenant tout E',
                        '{∅}',
                        'Une partition en singletons',
                        'Une partition vide',
                        'Le cas le plus simple est de considérer E tout entier comme son unique bloc.'
                    ),
                ],
            ],
            [
                'title' => 'Familles indexées et applications',
                'description' => 'Relier plusieurs ensembles à des constructions simples.',
                'duration' => 20,
                'passing_score' => 60,
                'questions' => [
                    $makeQuestion(
                        'Une famille indexée (A_i)_{i∈I} associe à chaque indice i :',
                        'Un ensemble A_i',
                        'Un seul nombre réel',
                        'Une fonction constante',
                        'Un couple ordonné uniquement',
                        'Une famille indexée est une collection d\'ensembles, un pour chaque indice de I.'
                    ),
                    $makeQuestion(
                        'L\'union indexée ∪_{i∈I} A_i contient :',
                        'Les éléments appartenant à au moins un des A_i',
                        'Les éléments appartenant à tous les A_i',
                        'Uniquement les éléments de A_1',
                        'Aucun élément par définition',
                        'L\'union indexée généralise l\'union usuelle à une famille d\'ensembles.'
                    ),
                    $makeQuestion(
                        'L\'intersection indexée ∩_{i∈I} A_i contient :',
                        'Les éléments appartenant à tous les A_i',
                        'Les éléments appartenant à au moins un des A_i',
                        'Uniquement les éléments de A_1',
                        'Tous les éléments possibles',
                        'L\'intersection indexée généralise l\'intersection usuelle à une famille d\'ensembles.'
                    ),
                    $makeQuestion(
                        'Une application (fonction) f:A→B associe à chaque élément de A :',
                        'Exactement un élément de B',
                        'Plusieurs éléments de B',
                        'Aucun élément nécessairement',
                        'Un sous-ensemble de A',
                        'C\'est la définition même d\'une application entre deux ensembles.'
                    ),
                    $makeQuestion(
                        'Une application f est dite injective si :',
                        'Deux éléments distincts de A ont des images distinctes',
                        'Tout élément de B a un antécédent',
                        'f(A)=B',
                        'A et B ont le même cardinal',
                        'L\'injectivité interdit à deux éléments distincts d\'avoir la même image.'
                    ),
                    $makeQuestion(
                        'Une application f est dite surjective si :',
                        'Tout élément de B a au moins un antécédent dans A',
                        'Deux éléments distincts ont des images distinctes',
                        'f(A)=∅',
                        'A⊆B',
                        'La surjectivité garantit que l\'image f(A) couvre tout l\'ensemble d\'arrivée B.'
                    ),
                    $makeQuestion(
                        'Une application à la fois injective et surjective est dite :',
                        'Bijective',
                        'Constante',
                        'Partielle',
                        'Vide',
                        'La bijectivité combine les deux propriétés d\'injectivité et de surjectivité.'
                    ),
                    $makeQuestion(
                        'Si f:A→B est bijective, il existe :',
                        'Une application réciproque f⁻¹:B→A',
                        'Une infinité d\'applications réciproques',
                        'Aucune application réciproque',
                        'Une application réciproque uniquement si A=B',
                        'La bijectivité garantit l\'existence et l\'unicité de l\'application réciproque.'
                    ),
                    $makeQuestion(
                        'L\'image d\'un ensemble A par une application f, notée f(A), contient :',
                        'Les valeurs f(x) pour x dans A',
                        'Les antécédents de tous les éléments de B',
                        'Uniquement les éléments fixes de f',
                        'L\'ensemble vide par définition',
                        'f(A) est l\'ensemble des images de tous les éléments de A par f.'
                    ),
                    $makeQuestion(
                        'Si I={1,2,3}, A_1={1}, A_2={1,2} et A_3={1,2,3}, alors ∩_{i∈I} A_i vaut :',
                        '{1}',
                        '{1,2,3}',
                        '∅',
                        '{2,3}',
                        'Seul l\'élément 1 est commun aux trois ensembles A_1, A_2 et A_3.'
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
