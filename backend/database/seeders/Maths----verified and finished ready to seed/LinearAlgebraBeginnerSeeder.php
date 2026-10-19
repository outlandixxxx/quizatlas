<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class LinearAlgebraBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'linear-algebra')->firstOrFail();

        $choicePositions = [1,3,4,1,1,4,2,2,4,2,4,2,3,4,3,4,1,4,1,2,1,1,3,3,2,3,1,2,1,1,3,4,2,3,2,3,1,1,2,1,3,1,2,2,3,4,3,3,2,4,2,1,4,2,1,4,2,4,4,2,4,4,1,3,3,1,4,3,4,4,3,1,3,4,2,2,3,3,2,1];
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
                'title' => 'Vecteurs et opérations',
                'description' => 'Manipuler les vecteurs, leurs composantes et les opérations de base.',
                'duration' => 20,
                'passing_score' => 60,
                'questions' => [
                    $makeQuestion(
                        'Une matrice 2×3 possède combien d\'éléments ?',
                        '6',
                        '5',
                        '9',
                        '3',
                        'On multiplie le nombre de lignes par le nombre de colonnes : 2×3=6.'
                    ),
                    $makeQuestion(
                        'Le vecteur (2,0,-1) appartient à :',
                        'R3',
                        'R2',
                        'R1',
                        'R4',
                        'Il contient trois composantes.'
                    ),
                    $makeQuestion(
                        'La somme de deux vecteurs de R2 est obtenue en :',
                        'Additionnant leurs composantes',
                        'Multipliant leurs normes',
                        'Triant les composantes',
                        'Prenant leur produit scalaire',
                        'L\'addition vectorielle se fait composante par composante.'
                    ),
                    $makeQuestion(
                        'Le déterminant d\'une matrice 2×2 [[a,b],[c,d]] vaut :',
                        'ad-bc',
                        'ab-cd',
                        'ac-bd',
                        'a+b+c+d',
                        'C\'est la formule du déterminant d\'une matrice 2×2.'
                    ),
                    $makeQuestion(
                        'Un système linéaire possède une solution si les équations sont :',
                        'Compatibles',
                        'Toujours indépendantes',
                        'Toutes homogènes',
                        'Toutes carrées',
                        'La compatibilité signifie qu\'il existe au moins un vecteur solution.'
                    ),
                    $makeQuestion(
                        'Deux vecteurs sont linéairement dépendants si :',
                        'L\'un est un multiple de l\'autre',
                        'Ils ont la même norme',
                        'Ils sont toujours perpendiculaires',
                        'Ils ont des composantes entières',
                        'Dans le cas de deux vecteurs, la dépendance signifie que l\'un est un multiple scalaire de l\'autre.'
                    ),
                    $makeQuestion(
                        'La matrice identité 2×2 est :',
                        '[[1,0],[0,1]]',
                        '[[0,1],[1,0]]',
                        '[[1,1],[0,0]]',
                        '[[0,0],[1,1]]',
                        'Elle laisse les vecteurs inchangés lors de la multiplication matricielle.'
                    ),
                    $makeQuestion(
                        'La dimension de R3 est :',
                        '3',
                        '2',
                        '1',
                        '0',
                        'Une base de R3 contient trois vecteurs indépendants.'
                    ),
                    $makeQuestion(
                        'Une transformation linéaire T vérifie notamment :',
                        'T(u+v)=T(u)+T(v)',
                        'T(u+v)=T(u)T(v)',
                        'T(u)=u+1',
                        'T(0)=1',
                        'La conservation de l\'addition est une propriété fondamentale.'
                    ),
                    $makeQuestion(
                        'Le noyau d\'une transformation linéaire contient les vecteurs envoyés sur :',
                        'Le vecteur nul',
                        'Le vecteur unité',
                        'Le plus grand vecteur',
                        'Tous les vecteurs',
                        'Le noyau est l\'ensemble des x tels que T(x)=0.'
                    ),
                ],
            ],
            [
                'title' => 'Systèmes linéaires',
                'description' => 'Comprendre l\'écriture et la résolution élémentaire des systèmes.',
                'duration' => 20,
                'passing_score' => 60,
                'questions' => [
                    $makeQuestion(
                        'Le système x+y=5, x-y=1 a pour solution :',
                        'x=3, y=2',
                        'x=2, y=3',
                        'x=1, y=4',
                        'x=4, y=1',
                        'En additionnant les deux équations : 2x=6 donc x=3, puis y=5-3=2.'
                    ),
                    $makeQuestion(
                        'Un système linéaire est dit homogène si :',
                        'Tous les seconds membres sont nuls',
                        'Il n\'a aucune solution',
                        'Il a une infinité de solutions',
                        'Toutes les inconnues sont égales',
                        'Un système homogène s\'écrit Ax=0.'
                    ),
                    $makeQuestion(
                        'Un système linéaire sans aucune solution est dit :',
                        'Incompatible',
                        'Homogène',
                        'Carré',
                        'Indéterminé',
                        'L\'incompatibilité signifie qu\'aucun vecteur ne satisfait toutes les équations.'
                    ),
                    $makeQuestion(
                        'Un système ayant une infinité de solutions est dit :',
                        'Indéterminé',
                        'Incompatible',
                        'Impossible',
                        'Carré',
                        'Un système compatible indéterminé admet plusieurs (en fait une infinité de) solutions.'
                    ),
                    $makeQuestion(
                        'La méthode de substitution consiste à :',
                        'Exprimer une variable en fonction des autres puis la remplacer',
                        'Supprimer une équation au hasard',
                        'Multiplier toutes les équations par 0',
                        'Ignorer les constantes du système',
                        'On isole une inconnue dans une équation pour la substituer dans les autres.'
                    ),
                    $makeQuestion(
                        'La solution de 2x=8 est :',
                        'x=4',
                        'x=16',
                        'x=2',
                        'x=-4',
                        '8/2=4.'
                    ),
                    $makeQuestion(
                        'Un système linéaire carré possède :',
                        'Autant d\'équations que d\'inconnues',
                        'Toujours plus d\'équations que d\'inconnues',
                        'Toujours plus d\'inconnues que d\'équations',
                        'Aucune inconnue',
                        'Le terme « carré » renvoie au même nombre de lignes et de colonnes dans la matrice associée.'
                    ),
                    $makeQuestion(
                        'La méthode de Gauss (élimination) vise à :',
                        'Transformer le système en une forme triangulaire équivalente',
                        'Ajouter des inconnues supplémentaires',
                        'Supprimer toutes les équations',
                        'Rendre le système homogène',
                        'L\'élimination successive de variables aboutit à un système plus simple à résoudre.'
                    ),
                    $makeQuestion(
                        'Un système linéaire à 3 équations et 3 inconnues représente géométriquement l\'intersection de :',
                        'Trois plans dans l\'espace',
                        'Trois droites dans le plan',
                        'Trois points isolés',
                        'Trois sphères',
                        'Chaque équation linéaire à trois variables définit un plan dans R3.'
                    ),
                    $makeQuestion(
                        'Dans un système de deux équations linéaires à deux inconnues, si les coefficients des inconnues sont proportionnels, le système est :',
                        'Soit incompatible, soit indéterminé, jamais à solution unique',
                        'Toujours à solution unique',
                        'Toujours incompatible',
                        'Toujours homogène',
                        'Les deux équations définissent la même droite ou deux droites parallèles distinctes : il y a alors une infinité de solutions ou aucune, jamais une seule.'
                    ),
                ],
            ],
            [
                'title' => 'Matrices et opérations',
                'description' => 'Additionner, multiplier et interpréter des matrices simples.',
                'duration' => 20,
                'passing_score' => 60,
                'questions' => [
                    $makeQuestion(
                        'Une matrice 2×4 possède combien d\'éléments ?',
                        '8',
                        '6',
                        '10',
                        '4',
                        'Une matrice 2×4 contient 2×4=8 éléments.'
                    ),
                    $makeQuestion(
                        'La somme de deux matrices de même taille s\'obtient en :',
                        'Additionnant les éléments correspondants',
                        'Multipliant les éléments correspondants',
                        'Additionnant uniquement les diagonales',
                        'Inversant les deux matrices',
                        'L\'addition matricielle se fait élément par élément, à positions identiques.'
                    ),
                    $makeQuestion(
                        'Le produit d\'une matrice 2×3 par une matrice 3×2 donne une matrice de taille :',
                        '2×2',
                        '3×3',
                        '2×3',
                        '6×6',
                        'Le résultat a autant de lignes que la première matrice et autant de colonnes que la seconde.'
                    ),
                    $makeQuestion(
                        'Peut-on multiplier directement une matrice 3×2 par une autre matrice 3×2 ?',
                        'Non, le nombre de colonnes de la première doit égaler le nombre de lignes de la seconde',
                        'Oui, sans aucune condition',
                        'Oui, mais seulement si elles sont carrées',
                        'Oui, en les additionnant d\'abord',
                        'Ici la première a 2 colonnes et la seconde 3 lignes, ce qui ne correspond pas.'
                    ),
                    $makeQuestion(
                        'La transposée d\'une matrice 2×3 est une matrice de taille :',
                        '3×2',
                        '2×3',
                        '6×1',
                        '1×6',
                        'La transposition échange lignes et colonnes.'
                    ),
                    $makeQuestion(
                        'Multiplier une matrice par un scalaire k consiste à :',
                        'Multiplier chaque élément de la matrice par k',
                        'Multiplier uniquement la première ligne par k',
                        'Ajouter k à chaque élément',
                        'Multiplier uniquement la diagonale par k',
                        'La multiplication par un scalaire s\'applique à chaque coefficient de la matrice.'
                    ),
                    $makeQuestion(
                        'Une matrice carrée est une matrice qui a :',
                        'Le même nombre de lignes que de colonnes',
                        'Plus de lignes que de colonnes',
                        'Plus de colonnes que de lignes',
                        'Toujours une seule ligne',
                        'C\'est la définition d\'une matrice carrée.'
                    ),
                    $makeQuestion(
                        'La matrice [[2,0],[0,2]] correspond à :',
                        '2 fois la matrice identité',
                        'La matrice identité',
                        'La matrice nulle',
                        'Une matrice non inversible',
                        'Chaque élément de la diagonale de l\'identité est multiplié par 2.'
                    ),
                    $makeQuestion(
                        'Le produit matriciel est-il commutatif en général ?',
                        'Non, AB≠BA en général',
                        'Oui, toujours',
                        'Oui, mais seulement pour les matrices 2×2',
                        'Oui, si les deux matrices sont carrées',
                        'La multiplication matricielle ne respecte pas la commutativité en général, même pour des matrices carrées.'
                    ),
                    $makeQuestion(
                        'La trace d\'une matrice carrée est :',
                        'La somme des éléments de la diagonale principale',
                        'Le produit de tous les éléments',
                        'Le plus grand élément de la matrice',
                        'Le déterminant de la matrice',
                        'La trace additionne uniquement les coefficients diagonaux.'
                    ),
                ],
            ],
            [
                'title' => 'Déterminants et inversibilité',
                'description' => 'Reconnaître le rôle du déterminant et l\'inversibilité.',
                'duration' => 20,
                'passing_score' => 60,
                'questions' => [
                    $makeQuestion(
                        'Le déterminant de [[3,1],[2,4]] vaut :',
                        '10',
                        '14',
                        '2',
                        '12',
                        '3×4-1×2=12-2=10.'
                    ),
                    $makeQuestion(
                        'Une matrice carrée est inversible si et seulement si son déterminant est :',
                        'Non nul',
                        'Nul',
                        'Négatif',
                        'Égal à 1',
                        'Un déterminant nul rend la matrice singulière et donc non inversible.'
                    ),
                    $makeQuestion(
                        'Le déterminant de la matrice identité vaut :',
                        '1',
                        '0',
                        'La taille de la matrice',
                        'Indéfini',
                        'Le déterminant d\'une matrice identité, quelle que soit sa taille, est toujours 1.'
                    ),
                    $makeQuestion(
                        'Si le déterminant d\'une matrice est nul, cette matrice est dite :',
                        'Singulière (non inversible)',
                        'Inversible',
                        'Symétrique',
                        'Diagonale',
                        'Un déterminant nul empêche l\'existence d\'une matrice inverse.'
                    ),
                    $makeQuestion(
                        'Le déterminant de [[5,0],[0,5]] vaut :',
                        '25',
                        '10',
                        '5',
                        '0',
                        '5×5-0×0=25.'
                    ),
                    $makeQuestion(
                        'Pour une matrice 2×2 inversible [[a,b],[c,d]], son inverse est proportionnelle à :',
                        '[[d,-b],[-c,a]]',
                        '[[a,b],[c,d]]',
                        '[[-a,-b],[-c,-d]]',
                        '[[d,b],[c,a]]',
                        'C\'est la formule classique de l\'inverse d\'une matrice 2×2, à diviser par le déterminant.'
                    ),
                    $makeQuestion(
                        'Le déterminant d\'une matrice triangulaire est :',
                        'Le produit des éléments diagonaux',
                        'La somme des éléments diagonaux',
                        'Toujours nul',
                        'Toujours égal à 1',
                        'Pour une matrice triangulaire, seuls les termes diagonaux contribuent au déterminant.'
                    ),
                    $makeQuestion(
                        'Si on échange deux lignes d\'une matrice, son déterminant :',
                        'Change de signe',
                        'Reste identique',
                        'Devient nul',
                        'Double de valeur',
                        'L\'échange de deux lignes inverse le signe du déterminant.'
                    ),
                    $makeQuestion(
                        'Le déterminant de [[0,2],[3,0]] vaut :',
                        '-6',
                        '6',
                        '0',
                        '5',
                        '0×0-2×3=-6.'
                    ),
                    $makeQuestion(
                        'Une matrice non carrée peut-elle avoir un déterminant ?',
                        'Non, le déterminant n\'est défini que pour les matrices carrées',
                        'Oui, pour toute matrice',
                        'Oui, seulement pour les matrices rectangulaires',
                        'Oui, mais il vaut toujours 0',
                        'La notion de déterminant ne s\'applique qu\'aux matrices carrées.'
                    ),
                ],
            ],
            [
                'title' => 'Combinaisons linéaires et bases',
                'description' => 'Comprendre génération, indépendance, bases et dimension.',
                'duration' => 20,
                'passing_score' => 60,
                'questions' => [
                    $makeQuestion(
                        'Une combinaison linéaire des vecteurs u et v s\'écrit :',
                        'au+bv, avec a et b des scalaires',
                        'u×v',
                        'u/v',
                        'u-v uniquement',
                        'Une combinaison linéaire est une somme pondérée de vecteurs par des scalaires.'
                    ),
                    $makeQuestion(
                        'Une famille de vecteurs est génératrice de E si :',
                        'Tout vecteur de E s\'écrit comme combinaison linéaire de cette famille',
                        'Elle contient le vecteur nul',
                        'Elle est toujours finie',
                        'Elle contient au moins deux vecteurs',
                        'La famille génératrice permet de reconstruire tout élément de l\'espace.'
                    ),
                    $makeQuestion(
                        'Une base d\'un espace vectoriel est une famille :',
                        'Libre et génératrice',
                        'Liée et génératrice',
                        'Libre uniquement',
                        'Génératrice uniquement',
                        'Une base combine indépendance (liberté) et capacité à engendrer tout l\'espace.'
                    ),
                    $makeQuestion(
                        'Le vecteur (3,6) est-il une combinaison linéaire de (1,2) ?',
                        'Oui, c\'est 3 fois (1,2)',
                        'Non, ce n\'est pas possible',
                        'Oui, mais seulement avec un coefficient négatif',
                        'Non, les composantes ne correspondent pas',
                        '(3,6)=3×(1,2).'
                    ),
                    $makeQuestion(
                        'La dimension d\'un espace vectoriel est :',
                        'Le nombre de vecteurs d\'une base',
                        'Le nombre d\'éléments de l\'espace',
                        'La norme du plus grand vecteur',
                        'Toujours égale à 1',
                        'Toutes les bases d\'un même espace vectoriel ont le même nombre d\'éléments, appelé dimension.'
                    ),
                    $makeQuestion(
                        'Une famille libre (indépendante) vérifie :',
                        'Aucune combinaison linéaire non triviale de ses vecteurs n\'est nulle',
                        'Elle contient toujours le vecteur nul',
                        'Elle est toujours génératrice',
                        'Elle a un nombre pair de vecteurs',
                        'L\'indépendance linéaire exclut toute relation non triviale égale à zéro.'
                    ),
                    $makeQuestion(
                        'Si une famille génératrice de E compte plus de vecteurs que dim(E), cette famille est :',
                        'Liée (non libre)',
                        'Nécessairement une base',
                        'Vide',
                        'Impossible à construire',
                        'Au-delà de la dimension, les vecteurs supplémentaires créent une dépendance.'
                    ),
                    $makeQuestion(
                        'La base canonique de R2 est formée des vecteurs :',
                        '(1,0) et (0,1)',
                        '(1,1) et (0,0)',
                        '(2,0) et (0,2)',
                        '(1,0) uniquement',
                        'Ces deux vecteurs engendrent R2 et sont indépendants.'
                    ),
                    $makeQuestion(
                        'Si un vecteur d\'une famille est combinaison linéaire des autres vecteurs de cette famille, elle est dite :',
                        'Liée',
                        'Libre',
                        'Génératrice de dimension 1',
                        'Orthogonale',
                        'La présence d\'une telle relation révèle une dépendance linéaire.'
                    ),
                    $makeQuestion(
                        'Toutes les bases d\'un même espace vectoriel de dimension finie ont :',
                        'Le même nombre de vecteurs',
                        'Des nombres de vecteurs différents',
                        'Toujours deux vecteurs',
                        'Un nombre de vecteurs variable selon le choix',
                        'Le nombre de vecteurs d\'une base est un invariant, c\'est la dimension de l\'espace.'
                    ),
                ],
            ],
            [
                'title' => 'Sous-espaces vectoriels',
                'description' => 'Identifier les sous-espaces et leurs propriétés de base.',
                'duration' => 20,
                'passing_score' => 60,
                'questions' => [
                    $makeQuestion(
                        'Un sous-espace vectoriel de R3 doit nécessairement contenir :',
                        'Le vecteur nul',
                        'Au moins un vecteur non nul',
                        'Exactement deux vecteurs',
                        'La totalité de R3',
                        'Tout sous-espace vectoriel contient l\'élément neutre de l\'addition.'
                    ),
                    $makeQuestion(
                        'Un sous-ensemble F de E est un sous-espace vectoriel si :',
                        'Il est stable par addition et multiplication scalaire, et contient 0',
                        'Il contient uniquement des entiers',
                        'Il est fini',
                        'Il contient tous les vecteurs de norme 1',
                        'Ces trois conditions caractérisent un sous-espace vectoriel.'
                    ),
                    $makeQuestion(
                        'La droite vectorielle engendrée par un vecteur non nul u est :',
                        'L\'ensemble des multiples scalaires de u',
                        'L\'ensemble des vecteurs orthogonaux à u',
                        'Un seul point',
                        'Tout l\'espace E',
                        '{λu : λ réel} forme une droite passant par l\'origine.'
                    ),
                    $makeQuestion(
                        'L\'intersection de deux sous-espaces vectoriels de E est :',
                        'Toujours un sous-espace vectoriel de E',
                        'Jamais un sous-espace vectoriel',
                        'Toujours égale à E',
                        'Toujours vide',
                        'L\'intersection conserve la stabilité par addition et multiplication scalaire.'
                    ),
                    $makeQuestion(
                        'L\'ensemble {(x,y) : x+y=0} est-il un sous-espace vectoriel de R2 ?',
                        'Oui, c\'est une droite passant par l\'origine',
                        'Non, car il ne contient pas (1,1)',
                        'Non, car il est trop grand',
                        'Oui, mais seulement pour x positif',
                        'Il contient (0,0), est stable par addition et multiplication scalaire.'
                    ),
                    $makeQuestion(
                        'L\'ensemble {(x,y) : x+y=1} est-il un sous-espace vectoriel de R2 ?',
                        'Non, il ne contient pas le vecteur nul',
                        'Oui, c\'est une droite vectorielle',
                        'Oui, car il est non vide',
                        'Non, car il contient trop de points',
                        '(0,0) ne vérifie pas 0+0=1, donc l\'ensemble ne peut pas être un sous-espace vectoriel.'
                    ),
                    $makeQuestion(
                        'La dimension d\'un plan vectoriel dans R3 est :',
                        '2',
                        '3',
                        '1',
                        '0',
                        'Un plan passant par l\'origine est engendré par deux vecteurs indépendants.'
                    ),
                    $makeQuestion(
                        'La réunion de deux sous-espaces vectoriels est-elle en général un sous-espace vectoriel ?',
                        'Non, en général',
                        'Oui, toujours',
                        'Oui, si les deux sont des droites',
                        'Oui, si l\'un est contenu dans l\'autre uniquement',
                        'La somme de deux vecteurs pris dans chaque sous-espace n\'est pas garantie de rester dans la réunion.'
                    ),
                    $makeQuestion(
                        'Le sous-espace vectoriel engendré par une famille de vecteurs est :',
                        'L\'ensemble de toutes leurs combinaisons linéaires',
                        'Uniquement la somme de ces vecteurs',
                        'Le plus petit vecteur de la famille',
                        'L\'ensemble vide',
                        'C\'est par définition l\'enveloppe linéaire de la famille considérée.'
                    ),
                    $makeQuestion(
                        'Le singleton {0}, contenant uniquement le vecteur nul, est-il un sous-espace vectoriel ?',
                        'Oui, c\'est le plus petit sous-espace vectoriel',
                        'Non, il est trop petit',
                        'Oui, mais seulement en dimension 1',
                        'Non, car il ne contient qu\'un seul élément',
                        '{0} vérifie toutes les conditions de stabilité et contient bien le vecteur nul.'
                    ),
                ],
            ],
            [
                'title' => 'Transformations linéaires',
                'description' => 'Découvrir noyau, image et propriétés des applications linéaires.',
                'duration' => 20,
                'passing_score' => 60,
                'questions' => [
                    $makeQuestion(
                        'Avec T(x,y)=(2x,3y), l\'image de (1,1) par T est :',
                        '(2,3)',
                        '(3,2)',
                        '(1,1)',
                        '(2,2)',
                        'T(1,1)=(2×1,3×1)=(2,3).'
                    ),
                    $makeQuestion(
                        'L\'image d\'une transformation linéaire T est :',
                        'L\'ensemble des vecteurs T(x) pour x dans le domaine',
                        'L\'ensemble des x tels que T(x)=0',
                        'Un seul vecteur fixe',
                        'Toujours égale au domaine de départ',
                        'L\'image regroupe toutes les valeurs effectivement atteintes par T.'
                    ),
                    $makeQuestion(
                        'Si le noyau d\'une transformation linéaire T est de dimension 0, T est dite :',
                        'Injective',
                        'Surjective uniquement',
                        'Non définie',
                        'Nulle',
                        'Un noyau réduit au vecteur nul garantit l\'injectivité de T.'
                    ),
                    $makeQuestion(
                        'Le théorème du rang relie les dimensions par la formule :',
                        'dim(noyau)+dim(image)=dim(espace de départ)',
                        'dim(noyau)×dim(image)=dim(espace de départ)',
                        'dim(noyau)=dim(image) toujours',
                        'dim(image)=0 toujours',
                        'C\'est l\'énoncé du théorème du rang pour les applications linéaires.'
                    ),
                    $makeQuestion(
                        'Une transformation linéaire bijective entre espaces de même dimension finie est appelée :',
                        'Un isomorphisme',
                        'Une projection',
                        'Une rotation uniquement',
                        'Une matrice nulle',
                        'La bijectivité entre espaces de dimension égale caractérise un isomorphisme.'
                    ),
                    $makeQuestion(
                        'La matrice associée à l\'identité sur R2 est :',
                        '[[1,0],[0,1]]',
                        '[[0,0],[0,0]]',
                        '[[1,1],[1,1]]',
                        '[[0,1],[1,0]]',
                        'L\'identité laisse chaque vecteur inchangé, ce qui correspond à la matrice identité.'
                    ),
                    $makeQuestion(
                        'Pour toute transformation linéaire T, on a T(0)=0, car :',
                        'La linéarité impose T(0)=T(0×0)=0×T(0)=0',
                        'C\'est une convention arbitraire',
                        'Cela dépend de la transformation',
                        'Ce n\'est vrai que pour les rotations',
                        'La propriété d\'homogénéité de la linéarité force l\'image du vecteur nul à être nulle.'
                    ),
                    $makeQuestion(
                        'Une rotation dans le plan autour de l\'origine est un exemple de :',
                        'Transformation linéaire',
                        'Transformation non linéaire',
                        'Translation',
                        'Fonction constante',
                        'Une rotation autour de l\'origine conserve l\'addition et la multiplication scalaire des vecteurs.'
                    ),
                    $makeQuestion(
                        'Si T(x,y)=(x+y, x-y), alors T(2,1) vaut :',
                        '(3,1)',
                        '(1,3)',
                        '(2,1)',
                        '(3,-1)',
                        'T(2,1)=(2+1, 2-1)=(3,1).'
                    ),
                    $makeQuestion(
                        'L\'ensemble des transformations linéaires de R2 dans R2 peut être représenté par :',
                        'Des matrices 2×2',
                        'Des matrices 2×1 uniquement',
                        'Des nombres réels seuls',
                        'Des vecteurs de R3',
                        'Chaque transformation linéaire de R2 dans R2 correspond à une matrice 2×2.'
                    ),
                ],
            ],
            [
                'title' => 'Révision intégrée',
                'description' => 'Mobiliser les notions fondamentales dans des exercices variés.',
                'duration' => 20,
                'passing_score' => 60,
                'questions' => [
                    $makeQuestion(
                        'Le rang d\'une matrice correspond à :',
                        'La dimension de l\'espace engendré par ses colonnes',
                        'Le nombre total de ses éléments',
                        'Son déterminant',
                        'Sa trace',
                        'Le rang mesure le nombre de colonnes (ou lignes) linéairement indépendantes.'
                    ),
                    $makeQuestion(
                        'Si deux vecteurs de R2 ne sont pas colinéaires, ils forment :',
                        'Une base de R2',
                        'Une famille liée',
                        'Un sous-espace de dimension 1',
                        'Le vecteur nul',
                        'Deux vecteurs non colinéaires de R2 sont indépendants et génèrent tout R2.'
                    ),
                    $makeQuestion(
                        'Le déterminant de la matrice identité 3×3 vaut :',
                        '1',
                        '0',
                        '3',
                        '9',
                        'Le déterminant de l\'identité, quelle que soit sa taille, est toujours 1.'
                    ),
                    $makeQuestion(
                        'Une matrice carrée non inversible a un déterminant :',
                        'Nul',
                        'Égal à 1',
                        'Négatif',
                        'Supérieur à 1',
                        'L\'absence d\'inverse pour une matrice carrée équivaut à un déterminant nul.'
                    ),
                    $makeQuestion(
                        'Le système x+2y=4, x-y=1 a pour solution :',
                        'x=2, y=1',
                        'x=1, y=2',
                        'x=4, y=0',
                        'x=0, y=2',
                        'De la deuxième équation, x=y+1 ; en substituant : y+1+2y=4, donc y=1 et x=2.'
                    ),
                    $makeQuestion(
                        'Pour qu\'une famille de n vecteurs forme une base d\'un espace de dimension n, il suffit qu\'elle soit :',
                        'Libre',
                        'Génératrice uniquement',
                        'De norme 1',
                        'Orthogonale uniquement',
                        'Quand le nombre de vecteurs égale la dimension, l\'indépendance seule garantit une base.'
                    ),
                    $makeQuestion(
                        'Le produit scalaire de (1,2) et (3,-1) vaut :',
                        '1',
                        '5',
                        '-1',
                        '7',
                        '1×3+2×(-1)=3-2=1.'
                    ),
                    $makeQuestion(
                        'Une transformation linéaire conserve toujours :',
                        'Les combinaisons linéaires',
                        'Les longueurs des vecteurs',
                        'Les angles entre vecteurs',
                        'Le nombre d\'éléments non nuls',
                        'La linéarité garantit que T(au+bv)=aT(u)+bT(v) pour tous scalaires a, b.'
                    ),
                    $makeQuestion(
                        'Si A est une matrice carrée avec det(A)=0, alors le système Ax=0 :',
                        'Possède des solutions non nulles',
                        'N\'admet que la solution nulle',
                        'N\'a aucune solution',
                        'Admet une solution unique non nulle',
                        'Un déterminant nul signifie que le noyau de A contient plus que le vecteur nul.'
                    ),
                    $makeQuestion(
                        'La somme des dimensions de deux sous-espaces supplémentaires de E égale :',
                        'La dimension de E',
                        'Le double de la dimension de E',
                        'Zéro',
                        'La dimension du plus petit des deux',
                        'Deux sous-espaces supplémentaires se complètent exactement pour reconstituer E.'
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
