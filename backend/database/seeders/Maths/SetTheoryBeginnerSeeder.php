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
                'title' => 'Union, intersection et différence',
                'description' => 'Opérations élémentaires entre ensembles.',
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
                'title' => 'Complément et univers',
                'description' => 'Utiliser l\'univers et le complément d\'un ensemble.',
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
                'title' => 'Cardinalité',
                'description' => 'Compter les éléments et comparer des tailles d\'ensembles.',
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
                'title' => 'Produit cartésien',
                'description' => 'Construire et interpréter des couples ordonnés.',
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
                'title' => 'Partitions',
                'description' => 'Comprendre les partitions et les classes disjointes.',
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
                'title' => 'Familles indexées et applications',
                'description' => 'Relier plusieurs ensembles à des constructions simples.',
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
