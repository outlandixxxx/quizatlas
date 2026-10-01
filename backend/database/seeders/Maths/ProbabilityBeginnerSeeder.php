<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class ProbabilityBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'probability')->firstOrFail();

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
                'title' => 'Fondamentaux des probabilités',
                'description' => 'Événements, univers et règles élémentaires.',
                'duration' => 20,
                'passing_score' => 60,
                'questions' => [
                    $makeQuestion(
                        'La probabilité d\'un événement impossible vaut :',
                        '0',
                        '1',
                        '1/2',
                        '-1',
                        'Un événement impossible ne se produit jamais.'
                    ),
                    $makeQuestion(
                        'La probabilité d\'un événement certain vaut :',
                        '1',
                        '0',
                        '1/2',
                        '2',
                        'Un événement certain se produit toujours.'
                    ),
                    $makeQuestion(
                        'Pour une pièce équilibrée, P(face)= :',
                        '1/2',
                        '1/4',
                        '1',
                        '0',
                        'Les deux résultats sont équiprobables.'
                    ),
                    $makeQuestion(
                        'Dans un dé équilibré, P(obtenir 6)= :',
                        '1/6',
                        '1/3',
                        '1/2',
                        '1/12',
                        'Une seule face sur six correspond au 6.'
                    ),
                    $makeQuestion(
                        'Si A et B sont incompatibles, P(A∪B)= :',
                        'P(A)+P(B)',
                        'P(A)P(B)',
                        'P(A)-P(B)',
                        '1-P(A)',
                        'Des événements incompatibles ne peuvent pas arriver ensemble, donc leurs probabilités s\'additionnent.'
                    ),
                    $makeQuestion(
                        'La probabilité conditionnelle P(A|B) mesure :',
                        'La probabilité de A sachant B',
                        'La probabilité de B sans condition',
                        'La moyenne de A et B',
                        'Le complément de A',
                        'Elle quantifie la probabilité de A parmi les situations où B est réalisé.'
                    ),
                    $makeQuestion(
                        'Deux événements indépendants vérifient :',
                        'P(A∩B)=P(A)P(B)',
                        'P(A∪B)=0',
                        'P(A)=P(B)',
                        'P(A|B)=0',
                        'L\'indépendance signifie que la réalisation de l\'un ne change pas la probabilité de l\'autre.'
                    ),
                    $makeQuestion(
                        'L\'espérance d\'une variable discrète représente :',
                        'Sa valeur moyenne théorique',
                        'Sa valeur maximale',
                        'Sa variance uniquement',
                        'Son minimum',
                        'C\'est la moyenne pondérée par les probabilités.'
                    ),
                    $makeQuestion(
                        'Une variable de Bernoulli prend généralement :',
                        'Deux valeurs',
                        'Trois valeurs',
                        'Toutes les valeurs réelles',
                        'Aucune valeur',
                        'Une épreuve de Bernoulli possède succès et échec.'
                    ),
                    $makeQuestion(
                        'La variance mesure principalement :',
                        'La dispersion autour de la moyenne',
                        'La moyenne elle-même',
                        'Le nombre d\'événements',
                        'La probabilité totale',
                        'Elle quantifie l\'écartement des valeurs autour de l\'espérance.'
                    ),
                ],
            ],
            [
                'title' => 'Dénombrement et espaces échantillonnaux',
                'description' => 'Compter des issues et construire des univers simples.',
                'duration' => 20,
                'passing_score' => 60,
                'questions' => [
                    $makeQuestion(
                        'La probabilité d\'un événement impossible vaut :',
                        '0',
                        '1',
                        '1/2',
                        '-1',
                        'Un événement impossible ne se produit jamais.'
                    ),
                    $makeQuestion(
                        'La probabilité d\'un événement certain vaut :',
                        '1',
                        '0',
                        '1/2',
                        '2',
                        'Un événement certain se produit toujours.'
                    ),
                    $makeQuestion(
                        'Pour une pièce équilibrée, P(face)= :',
                        '1/2',
                        '1/4',
                        '1',
                        '0',
                        'Les deux résultats sont équiprobables.'
                    ),
                    $makeQuestion(
                        'Dans un dé équilibré, P(obtenir 6)= :',
                        '1/6',
                        '1/3',
                        '1/2',
                        '1/12',
                        'Une seule face sur six correspond au 6.'
                    ),
                    $makeQuestion(
                        'Si A et B sont incompatibles, P(A∪B)= :',
                        'P(A)+P(B)',
                        'P(A)P(B)',
                        'P(A)-P(B)',
                        '1-P(A)',
                        'Des événements incompatibles ne peuvent pas arriver ensemble, donc leurs probabilités s\'additionnent.'
                    ),
                    $makeQuestion(
                        'La probabilité conditionnelle P(A|B) mesure :',
                        'La probabilité de A sachant B',
                        'La probabilité de B sans condition',
                        'La moyenne de A et B',
                        'Le complément de A',
                        'Elle quantifie la probabilité de A parmi les situations où B est réalisé.'
                    ),
                    $makeQuestion(
                        'Deux événements indépendants vérifient :',
                        'P(A∩B)=P(A)P(B)',
                        'P(A∪B)=0',
                        'P(A)=P(B)',
                        'P(A|B)=0',
                        'L\'indépendance signifie que la réalisation de l\'un ne change pas la probabilité de l\'autre.'
                    ),
                    $makeQuestion(
                        'L\'espérance d\'une variable discrète représente :',
                        'Sa valeur moyenne théorique',
                        'Sa valeur maximale',
                        'Sa variance uniquement',
                        'Son minimum',
                        'C\'est la moyenne pondérée par les probabilités.'
                    ),
                    $makeQuestion(
                        'Une variable de Bernoulli prend généralement :',
                        'Deux valeurs',
                        'Trois valeurs',
                        'Toutes les valeurs réelles',
                        'Aucune valeur',
                        'Une épreuve de Bernoulli possède succès et échec.'
                    ),
                    $makeQuestion(
                        'La variance mesure principalement :',
                        'La dispersion autour de la moyenne',
                        'La moyenne elle-même',
                        'Le nombre d\'événements',
                        'La probabilité totale',
                        'Elle quantifie l\'écartement des valeurs autour de l\'espérance.'
                    ),
                ],
            ],
            [
                'title' => 'Probabilité conditionnelle',
                'description' => 'Étudier les probabilités avec une information supplémentaire.',
                'duration' => 20,
                'passing_score' => 60,
                'questions' => [
                    $makeQuestion(
                        'La probabilité d\'un événement impossible vaut :',
                        '0',
                        '1',
                        '1/2',
                        '-1',
                        'Un événement impossible ne se produit jamais.'
                    ),
                    $makeQuestion(
                        'La probabilité d\'un événement certain vaut :',
                        '1',
                        '0',
                        '1/2',
                        '2',
                        'Un événement certain se produit toujours.'
                    ),
                    $makeQuestion(
                        'Pour une pièce équilibrée, P(face)= :',
                        '1/2',
                        '1/4',
                        '1',
                        '0',
                        'Les deux résultats sont équiprobables.'
                    ),
                    $makeQuestion(
                        'Dans un dé équilibré, P(obtenir 6)= :',
                        '1/6',
                        '1/3',
                        '1/2',
                        '1/12',
                        'Une seule face sur six correspond au 6.'
                    ),
                    $makeQuestion(
                        'Si A et B sont incompatibles, P(A∪B)= :',
                        'P(A)+P(B)',
                        'P(A)P(B)',
                        'P(A)-P(B)',
                        '1-P(A)',
                        'Des événements incompatibles ne peuvent pas arriver ensemble, donc leurs probabilités s\'additionnent.'
                    ),
                    $makeQuestion(
                        'La probabilité conditionnelle P(A|B) mesure :',
                        'La probabilité de A sachant B',
                        'La probabilité de B sans condition',
                        'La moyenne de A et B',
                        'Le complément de A',
                        'Elle quantifie la probabilité de A parmi les situations où B est réalisé.'
                    ),
                    $makeQuestion(
                        'Deux événements indépendants vérifient :',
                        'P(A∩B)=P(A)P(B)',
                        'P(A∪B)=0',
                        'P(A)=P(B)',
                        'P(A|B)=0',
                        'L\'indépendance signifie que la réalisation de l\'un ne change pas la probabilité de l\'autre.'
                    ),
                    $makeQuestion(
                        'L\'espérance d\'une variable discrète représente :',
                        'Sa valeur moyenne théorique',
                        'Sa valeur maximale',
                        'Sa variance uniquement',
                        'Son minimum',
                        'C\'est la moyenne pondérée par les probabilités.'
                    ),
                    $makeQuestion(
                        'Une variable de Bernoulli prend généralement :',
                        'Deux valeurs',
                        'Trois valeurs',
                        'Toutes les valeurs réelles',
                        'Aucune valeur',
                        'Une épreuve de Bernoulli possède succès et échec.'
                    ),
                    $makeQuestion(
                        'La variance mesure principalement :',
                        'La dispersion autour de la moyenne',
                        'La moyenne elle-même',
                        'Le nombre d\'événements',
                        'La probabilité totale',
                        'Elle quantifie l\'écartement des valeurs autour de l\'espérance.'
                    ),
                ],
            ],
            [
                'title' => 'Indépendance',
                'description' => 'Reconnaître et utiliser l\'indépendance entre événements.',
                'duration' => 20,
                'passing_score' => 60,
                'questions' => [
                    $makeQuestion(
                        'La probabilité d\'un événement impossible vaut :',
                        '0',
                        '1',
                        '1/2',
                        '-1',
                        'Un événement impossible ne se produit jamais.'
                    ),
                    $makeQuestion(
                        'La probabilité d\'un événement certain vaut :',
                        '1',
                        '0',
                        '1/2',
                        '2',
                        'Un événement certain se produit toujours.'
                    ),
                    $makeQuestion(
                        'Pour une pièce équilibrée, P(face)= :',
                        '1/2',
                        '1/4',
                        '1',
                        '0',
                        'Les deux résultats sont équiprobables.'
                    ),
                    $makeQuestion(
                        'Dans un dé équilibré, P(obtenir 6)= :',
                        '1/6',
                        '1/3',
                        '1/2',
                        '1/12',
                        'Une seule face sur six correspond au 6.'
                    ),
                    $makeQuestion(
                        'Si A et B sont incompatibles, P(A∪B)= :',
                        'P(A)+P(B)',
                        'P(A)P(B)',
                        'P(A)-P(B)',
                        '1-P(A)',
                        'Des événements incompatibles ne peuvent pas arriver ensemble, donc leurs probabilités s\'additionnent.'
                    ),
                    $makeQuestion(
                        'La probabilité conditionnelle P(A|B) mesure :',
                        'La probabilité de A sachant B',
                        'La probabilité de B sans condition',
                        'La moyenne de A et B',
                        'Le complément de A',
                        'Elle quantifie la probabilité de A parmi les situations où B est réalisé.'
                    ),
                    $makeQuestion(
                        'Deux événements indépendants vérifient :',
                        'P(A∩B)=P(A)P(B)',
                        'P(A∪B)=0',
                        'P(A)=P(B)',
                        'P(A|B)=0',
                        'L\'indépendance signifie que la réalisation de l\'un ne change pas la probabilité de l\'autre.'
                    ),
                    $makeQuestion(
                        'L\'espérance d\'une variable discrète représente :',
                        'Sa valeur moyenne théorique',
                        'Sa valeur maximale',
                        'Sa variance uniquement',
                        'Son minimum',
                        'C\'est la moyenne pondérée par les probabilités.'
                    ),
                    $makeQuestion(
                        'Une variable de Bernoulli prend généralement :',
                        'Deux valeurs',
                        'Trois valeurs',
                        'Toutes les valeurs réelles',
                        'Aucune valeur',
                        'Une épreuve de Bernoulli possède succès et échec.'
                    ),
                    $makeQuestion(
                        'La variance mesure principalement :',
                        'La dispersion autour de la moyenne',
                        'La moyenne elle-même',
                        'Le nombre d\'événements',
                        'La probabilité totale',
                        'Elle quantifie l\'écartement des valeurs autour de l\'espérance.'
                    ),
                ],
            ],
            [
                'title' => 'Variables aléatoires discrètes',
                'description' => 'Comprendre les valeurs et lois discrètes élémentaires.',
                'duration' => 20,
                'passing_score' => 60,
                'questions' => [
                    $makeQuestion(
                        'La probabilité d\'un événement impossible vaut :',
                        '0',
                        '1',
                        '1/2',
                        '-1',
                        'Un événement impossible ne se produit jamais.'
                    ),
                    $makeQuestion(
                        'La probabilité d\'un événement certain vaut :',
                        '1',
                        '0',
                        '1/2',
                        '2',
                        'Un événement certain se produit toujours.'
                    ),
                    $makeQuestion(
                        'Pour une pièce équilibrée, P(face)= :',
                        '1/2',
                        '1/4',
                        '1',
                        '0',
                        'Les deux résultats sont équiprobables.'
                    ),
                    $makeQuestion(
                        'Dans un dé équilibré, P(obtenir 6)= :',
                        '1/6',
                        '1/3',
                        '1/2',
                        '1/12',
                        'Une seule face sur six correspond au 6.'
                    ),
                    $makeQuestion(
                        'Si A et B sont incompatibles, P(A∪B)= :',
                        'P(A)+P(B)',
                        'P(A)P(B)',
                        'P(A)-P(B)',
                        '1-P(A)',
                        'Des événements incompatibles ne peuvent pas arriver ensemble, donc leurs probabilités s\'additionnent.'
                    ),
                    $makeQuestion(
                        'La probabilité conditionnelle P(A|B) mesure :',
                        'La probabilité de A sachant B',
                        'La probabilité de B sans condition',
                        'La moyenne de A et B',
                        'Le complément de A',
                        'Elle quantifie la probabilité de A parmi les situations où B est réalisé.'
                    ),
                    $makeQuestion(
                        'Deux événements indépendants vérifient :',
                        'P(A∩B)=P(A)P(B)',
                        'P(A∪B)=0',
                        'P(A)=P(B)',
                        'P(A|B)=0',
                        'L\'indépendance signifie que la réalisation de l\'un ne change pas la probabilité de l\'autre.'
                    ),
                    $makeQuestion(
                        'L\'espérance d\'une variable discrète représente :',
                        'Sa valeur moyenne théorique',
                        'Sa valeur maximale',
                        'Sa variance uniquement',
                        'Son minimum',
                        'C\'est la moyenne pondérée par les probabilités.'
                    ),
                    $makeQuestion(
                        'Une variable de Bernoulli prend généralement :',
                        'Deux valeurs',
                        'Trois valeurs',
                        'Toutes les valeurs réelles',
                        'Aucune valeur',
                        'Une épreuve de Bernoulli possède succès et échec.'
                    ),
                    $makeQuestion(
                        'La variance mesure principalement :',
                        'La dispersion autour de la moyenne',
                        'La moyenne elle-même',
                        'Le nombre d\'événements',
                        'La probabilité totale',
                        'Elle quantifie l\'écartement des valeurs autour de l\'espérance.'
                    ),
                ],
            ],
            [
                'title' => 'Espérance et variance',
                'description' => 'Calculer et interpréter moyenne et dispersion théoriques.',
                'duration' => 20,
                'passing_score' => 60,
                'questions' => [
                    $makeQuestion(
                        'La probabilité d\'un événement impossible vaut :',
                        '0',
                        '1',
                        '1/2',
                        '-1',
                        'Un événement impossible ne se produit jamais.'
                    ),
                    $makeQuestion(
                        'La probabilité d\'un événement certain vaut :',
                        '1',
                        '0',
                        '1/2',
                        '2',
                        'Un événement certain se produit toujours.'
                    ),
                    $makeQuestion(
                        'Pour une pièce équilibrée, P(face)= :',
                        '1/2',
                        '1/4',
                        '1',
                        '0',
                        'Les deux résultats sont équiprobables.'
                    ),
                    $makeQuestion(
                        'Dans un dé équilibré, P(obtenir 6)= :',
                        '1/6',
                        '1/3',
                        '1/2',
                        '1/12',
                        'Une seule face sur six correspond au 6.'
                    ),
                    $makeQuestion(
                        'Si A et B sont incompatibles, P(A∪B)= :',
                        'P(A)+P(B)',
                        'P(A)P(B)',
                        'P(A)-P(B)',
                        '1-P(A)',
                        'Des événements incompatibles ne peuvent pas arriver ensemble, donc leurs probabilités s\'additionnent.'
                    ),
                    $makeQuestion(
                        'La probabilité conditionnelle P(A|B) mesure :',
                        'La probabilité de A sachant B',
                        'La probabilité de B sans condition',
                        'La moyenne de A et B',
                        'Le complément de A',
                        'Elle quantifie la probabilité de A parmi les situations où B est réalisé.'
                    ),
                    $makeQuestion(
                        'Deux événements indépendants vérifient :',
                        'P(A∩B)=P(A)P(B)',
                        'P(A∪B)=0',
                        'P(A)=P(B)',
                        'P(A|B)=0',
                        'L\'indépendance signifie que la réalisation de l\'un ne change pas la probabilité de l\'autre.'
                    ),
                    $makeQuestion(
                        'L\'espérance d\'une variable discrète représente :',
                        'Sa valeur moyenne théorique',
                        'Sa valeur maximale',
                        'Sa variance uniquement',
                        'Son minimum',
                        'C\'est la moyenne pondérée par les probabilités.'
                    ),
                    $makeQuestion(
                        'Une variable de Bernoulli prend généralement :',
                        'Deux valeurs',
                        'Trois valeurs',
                        'Toutes les valeurs réelles',
                        'Aucune valeur',
                        'Une épreuve de Bernoulli possède succès et échec.'
                    ),
                    $makeQuestion(
                        'La variance mesure principalement :',
                        'La dispersion autour de la moyenne',
                        'La moyenne elle-même',
                        'Le nombre d\'événements',
                        'La probabilité totale',
                        'Elle quantifie l\'écartement des valeurs autour de l\'espérance.'
                    ),
                ],
            ],
            [
                'title' => 'Loi binomiale',
                'description' => 'Introduire les répétitions indépendantes succès/échec.',
                'duration' => 20,
                'passing_score' => 60,
                'questions' => [
                    $makeQuestion(
                        'La probabilité d\'un événement impossible vaut :',
                        '0',
                        '1',
                        '1/2',
                        '-1',
                        'Un événement impossible ne se produit jamais.'
                    ),
                    $makeQuestion(
                        'La probabilité d\'un événement certain vaut :',
                        '1',
                        '0',
                        '1/2',
                        '2',
                        'Un événement certain se produit toujours.'
                    ),
                    $makeQuestion(
                        'Pour une pièce équilibrée, P(face)= :',
                        '1/2',
                        '1/4',
                        '1',
                        '0',
                        'Les deux résultats sont équiprobables.'
                    ),
                    $makeQuestion(
                        'Dans un dé équilibré, P(obtenir 6)= :',
                        '1/6',
                        '1/3',
                        '1/2',
                        '1/12',
                        'Une seule face sur six correspond au 6.'
                    ),
                    $makeQuestion(
                        'Si A et B sont incompatibles, P(A∪B)= :',
                        'P(A)+P(B)',
                        'P(A)P(B)',
                        'P(A)-P(B)',
                        '1-P(A)',
                        'Des événements incompatibles ne peuvent pas arriver ensemble, donc leurs probabilités s\'additionnent.'
                    ),
                    $makeQuestion(
                        'La probabilité conditionnelle P(A|B) mesure :',
                        'La probabilité de A sachant B',
                        'La probabilité de B sans condition',
                        'La moyenne de A et B',
                        'Le complément de A',
                        'Elle quantifie la probabilité de A parmi les situations où B est réalisé.'
                    ),
                    $makeQuestion(
                        'Deux événements indépendants vérifient :',
                        'P(A∩B)=P(A)P(B)',
                        'P(A∪B)=0',
                        'P(A)=P(B)',
                        'P(A|B)=0',
                        'L\'indépendance signifie que la réalisation de l\'un ne change pas la probabilité de l\'autre.'
                    ),
                    $makeQuestion(
                        'L\'espérance d\'une variable discrète représente :',
                        'Sa valeur moyenne théorique',
                        'Sa valeur maximale',
                        'Sa variance uniquement',
                        'Son minimum',
                        'C\'est la moyenne pondérée par les probabilités.'
                    ),
                    $makeQuestion(
                        'Une variable de Bernoulli prend généralement :',
                        'Deux valeurs',
                        'Trois valeurs',
                        'Toutes les valeurs réelles',
                        'Aucune valeur',
                        'Une épreuve de Bernoulli possède succès et échec.'
                    ),
                    $makeQuestion(
                        'La variance mesure principalement :',
                        'La dispersion autour de la moyenne',
                        'La moyenne elle-même',
                        'Le nombre d\'événements',
                        'La probabilité totale',
                        'Elle quantifie l\'écartement des valeurs autour de l\'espérance.'
                    ),
                ],
            ],
            [
                'title' => 'Révision et raisonnement probabiliste',
                'description' => 'Résoudre des situations intégrées de niveau débutant.',
                'duration' => 20,
                'passing_score' => 60,
                'questions' => [
                    $makeQuestion(
                        'La probabilité d\'un événement impossible vaut :',
                        '0',
                        '1',
                        '1/2',
                        '-1',
                        'Un événement impossible ne se produit jamais.'
                    ),
                    $makeQuestion(
                        'La probabilité d\'un événement certain vaut :',
                        '1',
                        '0',
                        '1/2',
                        '2',
                        'Un événement certain se produit toujours.'
                    ),
                    $makeQuestion(
                        'Pour une pièce équilibrée, P(face)= :',
                        '1/2',
                        '1/4',
                        '1',
                        '0',
                        'Les deux résultats sont équiprobables.'
                    ),
                    $makeQuestion(
                        'Dans un dé équilibré, P(obtenir 6)= :',
                        '1/6',
                        '1/3',
                        '1/2',
                        '1/12',
                        'Une seule face sur six correspond au 6.'
                    ),
                    $makeQuestion(
                        'Si A et B sont incompatibles, P(A∪B)= :',
                        'P(A)+P(B)',
                        'P(A)P(B)',
                        'P(A)-P(B)',
                        '1-P(A)',
                        'Des événements incompatibles ne peuvent pas arriver ensemble, donc leurs probabilités s\'additionnent.'
                    ),
                    $makeQuestion(
                        'La probabilité conditionnelle P(A|B) mesure :',
                        'La probabilité de A sachant B',
                        'La probabilité de B sans condition',
                        'La moyenne de A et B',
                        'Le complément de A',
                        'Elle quantifie la probabilité de A parmi les situations où B est réalisé.'
                    ),
                    $makeQuestion(
                        'Deux événements indépendants vérifient :',
                        'P(A∩B)=P(A)P(B)',
                        'P(A∪B)=0',
                        'P(A)=P(B)',
                        'P(A|B)=0',
                        'L\'indépendance signifie que la réalisation de l\'un ne change pas la probabilité de l\'autre.'
                    ),
                    $makeQuestion(
                        'L\'espérance d\'une variable discrète représente :',
                        'Sa valeur moyenne théorique',
                        'Sa valeur maximale',
                        'Sa variance uniquement',
                        'Son minimum',
                        'C\'est la moyenne pondérée par les probabilités.'
                    ),
                    $makeQuestion(
                        'Une variable de Bernoulli prend généralement :',
                        'Deux valeurs',
                        'Trois valeurs',
                        'Toutes les valeurs réelles',
                        'Aucune valeur',
                        'Une épreuve de Bernoulli possède succès et échec.'
                    ),
                    $makeQuestion(
                        'La variance mesure principalement :',
                        'La dispersion autour de la moyenne',
                        'La moyenne elle-même',
                        'Le nombre d\'événements',
                        'La probabilité totale',
                        'Elle quantifie l\'écartement des valeurs autour de l\'espérance.'
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
