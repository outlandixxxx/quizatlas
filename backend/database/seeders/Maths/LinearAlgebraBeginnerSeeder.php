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
                'title' => 'Déterminants et inversibilité',
                'description' => 'Reconnaître le rôle du déterminant et l\'inversibilité.',
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
                'title' => 'Combinaisons linéaires et bases',
                'description' => 'Comprendre génération, indépendance, bases et dimension.',
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
                'title' => 'Sous-espaces vectoriels',
                'description' => 'Identifier les sous-espaces et leurs propriétés de base.',
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
                'title' => 'Transformations linéaires',
                'description' => 'Découvrir noyau, image et propriétés des applications linéaires.',
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
                'title' => 'Révision intégrée',
                'description' => 'Mobiliser les notions fondamentales dans des exercices variés.',
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
