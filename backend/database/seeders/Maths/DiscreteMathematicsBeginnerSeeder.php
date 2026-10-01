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
                        'Une démonstration par récurrence comporte généralement :',
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
                        'Une démonstration par récurrence comporte généralement :',
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
                'title' => 'Récurrence et suites discrètes',
                'description' => 'Définir et interpréter des suites par récurrence.',
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
                        'Une démonstration par récurrence comporte généralement :',
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
                'title' => 'Récurrences et croissance',
                'description' => 'Étudier des relations récursives et leur évolution.',
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
                        'Une démonstration par récurrence comporte généralement :',
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
                'title' => 'Algorithmes et structures de décision',
                'description' => 'Relier étapes, conditions et répétitions.',
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
                        'Une démonstration par récurrence comporte généralement :',
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
                'title' => 'Complexité élémentaire',
                'description' => 'Comparer des ordres de croissance simples.',
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
                        'Une démonstration par récurrence comporte généralement :',
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
                'title' => 'Logique booléenne et modèles discrets',
                'description' => 'Manipuler des états vrai/faux et des structures simples.',
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
                        'Une démonstration par récurrence comporte généralement :',
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
                'title' => 'Induction et révision',
                'description' => 'Mobiliser les idées fondamentales du discret.',
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
                        'Une démonstration par récurrence comporte généralement :',
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
