<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class DifferentialEquationsBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'differential-equations')->firstOrFail();

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
                'title' => 'Bases des équations différentielles',
                'description' => 'Découvrir les notions d\'ordre, solution et dérivée.',
                'duration' => 20,
                'passing_score' => 60,
                'questions' => [
                    $makeQuestion(
                        'Une équation différentielle contient :',
                        'Une fonction inconnue et au moins une dérivée',
                        'Uniquement des nombres entiers',
                        'Seulement une matrice',
                        'Aucune variable',
                        'La fonction recherchée apparaît avec une ou plusieurs de ses dérivées.'
                    ),
                    $makeQuestion(
                        'L\'ordre d\'une équation différentielle est le plus grand :',
                        'Ordre de dérivée présent',
                        'Nombre de solutions',
                        'Degré du polynôme',
                        'Coefficient',
                        'L\'ordre correspond à la dérivée la plus élevée qui apparaît.'
                    ),
                    $makeQuestion(
                        'La solution de y\'=0 est :',
                        'Une constante',
                        'Une droite non constante',
                        'Une exponentielle uniquement',
                        'y=x²',
                        'Une dérivée nulle signifie que la fonction reste constante.'
                    ),
                    $makeQuestion(
                        'Pour y\'=2y, une famille de solutions est :',
                        'y=Ce^{2x}',
                        'y=2x+C',
                        'y=Cx²',
                        'y=e^x+C',
                        'La dérivée de Ce^{2x} est 2Ce^{2x}=2y.'
                    ),
                    $makeQuestion(
                        'Une condition y(0)=3 sert à :',
                        'Déterminer une solution particulière',
                        'Changer l\'ordre de l\'équation',
                        'Supprimer la dérivée',
                        'Rendre l\'équation linéaire',
                        'Elle fixe une valeur initiale parmi la famille générale de solutions.'
                    ),
                    $makeQuestion(
                        'Dans y\'=ky, si k>0, on parle généralement de :',
                        'Croissance exponentielle',
                        'Décroissance linéaire',
                        'Oscillation périodique',
                        'Constante',
                        'Un taux proportionnel positif produit une croissance exponentielle.'
                    ),
                    $makeQuestion(
                        'Une équation est séparable lorsque :',
                        'On peut regrouper les termes en y d\'un côté et ceux en x de l\'autre',
                        'Elle n\'a aucune constante',
                        'Elle est toujours du second ordre',
                        'Elle est quadratique',
                        'La séparation permet d\'intégrer chaque variable de son côté.'
                    ),
                    $makeQuestion(
                        'Une solution d\'une équation différentielle est :',
                        'Une fonction qui vérifie l\'équation',
                        'Une constante au hasard',
                        'Une dérivée seule',
                        'Un point unique',
                        'Elle doit satisfaire l\'égalité différentielle sur le domaine considéré.'
                    ),
                    $makeQuestion(
                        'Pour y\'+y=0, la solution générale est de type :',
                        'Ce^{-x}',
                        'Ce^x+1',
                        'x+C',
                        'C-x',
                        'La dérivée de Ce^{-x} vaut -Ce^{-x}, donc y\'+y=0.'
                    ),
                    $makeQuestion(
                        'Pourquoi les équations différentielles servent-elles en modélisation ?',
                        'Elles décrivent des évolutions et des taux de variation',
                        'Elles comptent des permutations',
                        'Elles définissent des matrices',
                        'Elles remplacent les unités',
                        'De nombreux phénomènes physiques, économiques ou biologiques sont décrits par des lois d\'évolution.'
                    ),
                ],
            ],
            [
                'title' => 'Équations séparables',
                'description' => 'Résoudre des équations simples par séparation des variables.',
                'duration' => 20,
                'passing_score' => 60,
                'questions' => [
                    $makeQuestion(
                        'Une équation différentielle contient :',
                        'Une fonction inconnue et au moins une dérivée',
                        'Uniquement des nombres entiers',
                        'Seulement une matrice',
                        'Aucune variable',
                        'La fonction recherchée apparaît avec une ou plusieurs de ses dérivées.'
                    ),
                    $makeQuestion(
                        'L\'ordre d\'une équation différentielle est le plus grand :',
                        'Ordre de dérivée présent',
                        'Nombre de solutions',
                        'Degré du polynôme',
                        'Coefficient',
                        'L\'ordre correspond à la dérivée la plus élevée qui apparaît.'
                    ),
                    $makeQuestion(
                        'La solution de y\'=0 est :',
                        'Une constante',
                        'Une droite non constante',
                        'Une exponentielle uniquement',
                        'y=x²',
                        'Une dérivée nulle signifie que la fonction reste constante.'
                    ),
                    $makeQuestion(
                        'Pour y\'=2y, une famille de solutions est :',
                        'y=Ce^{2x}',
                        'y=2x+C',
                        'y=Cx²',
                        'y=e^x+C',
                        'La dérivée de Ce^{2x} est 2Ce^{2x}=2y.'
                    ),
                    $makeQuestion(
                        'Une condition y(0)=3 sert à :',
                        'Déterminer une solution particulière',
                        'Changer l\'ordre de l\'équation',
                        'Supprimer la dérivée',
                        'Rendre l\'équation linéaire',
                        'Elle fixe une valeur initiale parmi la famille générale de solutions.'
                    ),
                    $makeQuestion(
                        'Dans y\'=ky, si k>0, on parle généralement de :',
                        'Croissance exponentielle',
                        'Décroissance linéaire',
                        'Oscillation périodique',
                        'Constante',
                        'Un taux proportionnel positif produit une croissance exponentielle.'
                    ),
                    $makeQuestion(
                        'Une équation est séparable lorsque :',
                        'On peut regrouper les termes en y d\'un côté et ceux en x de l\'autre',
                        'Elle n\'a aucune constante',
                        'Elle est toujours du second ordre',
                        'Elle est quadratique',
                        'La séparation permet d\'intégrer chaque variable de son côté.'
                    ),
                    $makeQuestion(
                        'Une solution d\'une équation différentielle est :',
                        'Une fonction qui vérifie l\'équation',
                        'Une constante au hasard',
                        'Une dérivée seule',
                        'Un point unique',
                        'Elle doit satisfaire l\'égalité différentielle sur le domaine considéré.'
                    ),
                    $makeQuestion(
                        'Pour y\'+y=0, la solution générale est de type :',
                        'Ce^{-x}',
                        'Ce^x+1',
                        'x+C',
                        'C-x',
                        'La dérivée de Ce^{-x} vaut -Ce^{-x}, donc y\'+y=0.'
                    ),
                    $makeQuestion(
                        'Pourquoi les équations différentielles servent-elles en modélisation ?',
                        'Elles décrivent des évolutions et des taux de variation',
                        'Elles comptent des permutations',
                        'Elles définissent des matrices',
                        'Elles remplacent les unités',
                        'De nombreux phénomènes physiques, économiques ou biologiques sont décrits par des lois d\'évolution.'
                    ),
                ],
            ],
            [
                'title' => 'Problèmes à valeur initiale',
                'description' => 'Utiliser une condition initiale pour sélectionner une solution.',
                'duration' => 20,
                'passing_score' => 60,
                'questions' => [
                    $makeQuestion(
                        'Une équation différentielle contient :',
                        'Une fonction inconnue et au moins une dérivée',
                        'Uniquement des nombres entiers',
                        'Seulement une matrice',
                        'Aucune variable',
                        'La fonction recherchée apparaît avec une ou plusieurs de ses dérivées.'
                    ),
                    $makeQuestion(
                        'L\'ordre d\'une équation différentielle est le plus grand :',
                        'Ordre de dérivée présent',
                        'Nombre de solutions',
                        'Degré du polynôme',
                        'Coefficient',
                        'L\'ordre correspond à la dérivée la plus élevée qui apparaît.'
                    ),
                    $makeQuestion(
                        'La solution de y\'=0 est :',
                        'Une constante',
                        'Une droite non constante',
                        'Une exponentielle uniquement',
                        'y=x²',
                        'Une dérivée nulle signifie que la fonction reste constante.'
                    ),
                    $makeQuestion(
                        'Pour y\'=2y, une famille de solutions est :',
                        'y=Ce^{2x}',
                        'y=2x+C',
                        'y=Cx²',
                        'y=e^x+C',
                        'La dérivée de Ce^{2x} est 2Ce^{2x}=2y.'
                    ),
                    $makeQuestion(
                        'Une condition y(0)=3 sert à :',
                        'Déterminer une solution particulière',
                        'Changer l\'ordre de l\'équation',
                        'Supprimer la dérivée',
                        'Rendre l\'équation linéaire',
                        'Elle fixe une valeur initiale parmi la famille générale de solutions.'
                    ),
                    $makeQuestion(
                        'Dans y\'=ky, si k>0, on parle généralement de :',
                        'Croissance exponentielle',
                        'Décroissance linéaire',
                        'Oscillation périodique',
                        'Constante',
                        'Un taux proportionnel positif produit une croissance exponentielle.'
                    ),
                    $makeQuestion(
                        'Une équation est séparable lorsque :',
                        'On peut regrouper les termes en y d\'un côté et ceux en x de l\'autre',
                        'Elle n\'a aucune constante',
                        'Elle est toujours du second ordre',
                        'Elle est quadratique',
                        'La séparation permet d\'intégrer chaque variable de son côté.'
                    ),
                    $makeQuestion(
                        'Une solution d\'une équation différentielle est :',
                        'Une fonction qui vérifie l\'équation',
                        'Une constante au hasard',
                        'Une dérivée seule',
                        'Un point unique',
                        'Elle doit satisfaire l\'égalité différentielle sur le domaine considéré.'
                    ),
                    $makeQuestion(
                        'Pour y\'+y=0, la solution générale est de type :',
                        'Ce^{-x}',
                        'Ce^x+1',
                        'x+C',
                        'C-x',
                        'La dérivée de Ce^{-x} vaut -Ce^{-x}, donc y\'+y=0.'
                    ),
                    $makeQuestion(
                        'Pourquoi les équations différentielles servent-elles en modélisation ?',
                        'Elles décrivent des évolutions et des taux de variation',
                        'Elles comptent des permutations',
                        'Elles définissent des matrices',
                        'Elles remplacent les unités',
                        'De nombreux phénomènes physiques, économiques ou biologiques sont décrits par des lois d\'évolution.'
                    ),
                ],
            ],
            [
                'title' => 'Croissance et décroissance exponentielle',
                'description' => 'Modéliser des évolutions proportionnelles à la quantité présente.',
                'duration' => 20,
                'passing_score' => 60,
                'questions' => [
                    $makeQuestion(
                        'Une équation différentielle contient :',
                        'Une fonction inconnue et au moins une dérivée',
                        'Uniquement des nombres entiers',
                        'Seulement une matrice',
                        'Aucune variable',
                        'La fonction recherchée apparaît avec une ou plusieurs de ses dérivées.'
                    ),
                    $makeQuestion(
                        'L\'ordre d\'une équation différentielle est le plus grand :',
                        'Ordre de dérivée présent',
                        'Nombre de solutions',
                        'Degré du polynôme',
                        'Coefficient',
                        'L\'ordre correspond à la dérivée la plus élevée qui apparaît.'
                    ),
                    $makeQuestion(
                        'La solution de y\'=0 est :',
                        'Une constante',
                        'Une droite non constante',
                        'Une exponentielle uniquement',
                        'y=x²',
                        'Une dérivée nulle signifie que la fonction reste constante.'
                    ),
                    $makeQuestion(
                        'Pour y\'=2y, une famille de solutions est :',
                        'y=Ce^{2x}',
                        'y=2x+C',
                        'y=Cx²',
                        'y=e^x+C',
                        'La dérivée de Ce^{2x} est 2Ce^{2x}=2y.'
                    ),
                    $makeQuestion(
                        'Une condition y(0)=3 sert à :',
                        'Déterminer une solution particulière',
                        'Changer l\'ordre de l\'équation',
                        'Supprimer la dérivée',
                        'Rendre l\'équation linéaire',
                        'Elle fixe une valeur initiale parmi la famille générale de solutions.'
                    ),
                    $makeQuestion(
                        'Dans y\'=ky, si k>0, on parle généralement de :',
                        'Croissance exponentielle',
                        'Décroissance linéaire',
                        'Oscillation périodique',
                        'Constante',
                        'Un taux proportionnel positif produit une croissance exponentielle.'
                    ),
                    $makeQuestion(
                        'Une équation est séparable lorsque :',
                        'On peut regrouper les termes en y d\'un côté et ceux en x de l\'autre',
                        'Elle n\'a aucune constante',
                        'Elle est toujours du second ordre',
                        'Elle est quadratique',
                        'La séparation permet d\'intégrer chaque variable de son côté.'
                    ),
                    $makeQuestion(
                        'Une solution d\'une équation différentielle est :',
                        'Une fonction qui vérifie l\'équation',
                        'Une constante au hasard',
                        'Une dérivée seule',
                        'Un point unique',
                        'Elle doit satisfaire l\'égalité différentielle sur le domaine considéré.'
                    ),
                    $makeQuestion(
                        'Pour y\'+y=0, la solution générale est de type :',
                        'Ce^{-x}',
                        'Ce^x+1',
                        'x+C',
                        'C-x',
                        'La dérivée de Ce^{-x} vaut -Ce^{-x}, donc y\'+y=0.'
                    ),
                    $makeQuestion(
                        'Pourquoi les équations différentielles servent-elles en modélisation ?',
                        'Elles décrivent des évolutions et des taux de variation',
                        'Elles comptent des permutations',
                        'Elles définissent des matrices',
                        'Elles remplacent les unités',
                        'De nombreux phénomènes physiques, économiques ou biologiques sont décrits par des lois d\'évolution.'
                    ),
                ],
            ],
            [
                'title' => 'Équations linéaires du premier ordre',
                'description' => 'Comprendre les formes simples et leur structure.',
                'duration' => 20,
                'passing_score' => 60,
                'questions' => [
                    $makeQuestion(
                        'Une équation différentielle contient :',
                        'Une fonction inconnue et au moins une dérivée',
                        'Uniquement des nombres entiers',
                        'Seulement une matrice',
                        'Aucune variable',
                        'La fonction recherchée apparaît avec une ou plusieurs de ses dérivées.'
                    ),
                    $makeQuestion(
                        'L\'ordre d\'une équation différentielle est le plus grand :',
                        'Ordre de dérivée présent',
                        'Nombre de solutions',
                        'Degré du polynôme',
                        'Coefficient',
                        'L\'ordre correspond à la dérivée la plus élevée qui apparaît.'
                    ),
                    $makeQuestion(
                        'La solution de y\'=0 est :',
                        'Une constante',
                        'Une droite non constante',
                        'Une exponentielle uniquement',
                        'y=x²',
                        'Une dérivée nulle signifie que la fonction reste constante.'
                    ),
                    $makeQuestion(
                        'Pour y\'=2y, une famille de solutions est :',
                        'y=Ce^{2x}',
                        'y=2x+C',
                        'y=Cx²',
                        'y=e^x+C',
                        'La dérivée de Ce^{2x} est 2Ce^{2x}=2y.'
                    ),
                    $makeQuestion(
                        'Une condition y(0)=3 sert à :',
                        'Déterminer une solution particulière',
                        'Changer l\'ordre de l\'équation',
                        'Supprimer la dérivée',
                        'Rendre l\'équation linéaire',
                        'Elle fixe une valeur initiale parmi la famille générale de solutions.'
                    ),
                    $makeQuestion(
                        'Dans y\'=ky, si k>0, on parle généralement de :',
                        'Croissance exponentielle',
                        'Décroissance linéaire',
                        'Oscillation périodique',
                        'Constante',
                        'Un taux proportionnel positif produit une croissance exponentielle.'
                    ),
                    $makeQuestion(
                        'Une équation est séparable lorsque :',
                        'On peut regrouper les termes en y d\'un côté et ceux en x de l\'autre',
                        'Elle n\'a aucune constante',
                        'Elle est toujours du second ordre',
                        'Elle est quadratique',
                        'La séparation permet d\'intégrer chaque variable de son côté.'
                    ),
                    $makeQuestion(
                        'Une solution d\'une équation différentielle est :',
                        'Une fonction qui vérifie l\'équation',
                        'Une constante au hasard',
                        'Une dérivée seule',
                        'Un point unique',
                        'Elle doit satisfaire l\'égalité différentielle sur le domaine considéré.'
                    ),
                    $makeQuestion(
                        'Pour y\'+y=0, la solution générale est de type :',
                        'Ce^{-x}',
                        'Ce^x+1',
                        'x+C',
                        'C-x',
                        'La dérivée de Ce^{-x} vaut -Ce^{-x}, donc y\'+y=0.'
                    ),
                    $makeQuestion(
                        'Pourquoi les équations différentielles servent-elles en modélisation ?',
                        'Elles décrivent des évolutions et des taux de variation',
                        'Elles comptent des permutations',
                        'Elles définissent des matrices',
                        'Elles remplacent les unités',
                        'De nombreux phénomènes physiques, économiques ou biologiques sont décrits par des lois d\'évolution.'
                    ),
                ],
            ],
            [
                'title' => 'Équilibres et équations autonomes',
                'description' => 'Étudier les équilibres et le signe d\'une dérivée.',
                'duration' => 20,
                'passing_score' => 60,
                'questions' => [
                    $makeQuestion(
                        'Une équation différentielle contient :',
                        'Une fonction inconnue et au moins une dérivée',
                        'Uniquement des nombres entiers',
                        'Seulement une matrice',
                        'Aucune variable',
                        'La fonction recherchée apparaît avec une ou plusieurs de ses dérivées.'
                    ),
                    $makeQuestion(
                        'L\'ordre d\'une équation différentielle est le plus grand :',
                        'Ordre de dérivée présent',
                        'Nombre de solutions',
                        'Degré du polynôme',
                        'Coefficient',
                        'L\'ordre correspond à la dérivée la plus élevée qui apparaît.'
                    ),
                    $makeQuestion(
                        'La solution de y\'=0 est :',
                        'Une constante',
                        'Une droite non constante',
                        'Une exponentielle uniquement',
                        'y=x²',
                        'Une dérivée nulle signifie que la fonction reste constante.'
                    ),
                    $makeQuestion(
                        'Pour y\'=2y, une famille de solutions est :',
                        'y=Ce^{2x}',
                        'y=2x+C',
                        'y=Cx²',
                        'y=e^x+C',
                        'La dérivée de Ce^{2x} est 2Ce^{2x}=2y.'
                    ),
                    $makeQuestion(
                        'Une condition y(0)=3 sert à :',
                        'Déterminer une solution particulière',
                        'Changer l\'ordre de l\'équation',
                        'Supprimer la dérivée',
                        'Rendre l\'équation linéaire',
                        'Elle fixe une valeur initiale parmi la famille générale de solutions.'
                    ),
                    $makeQuestion(
                        'Dans y\'=ky, si k>0, on parle généralement de :',
                        'Croissance exponentielle',
                        'Décroissance linéaire',
                        'Oscillation périodique',
                        'Constante',
                        'Un taux proportionnel positif produit une croissance exponentielle.'
                    ),
                    $makeQuestion(
                        'Une équation est séparable lorsque :',
                        'On peut regrouper les termes en y d\'un côté et ceux en x de l\'autre',
                        'Elle n\'a aucune constante',
                        'Elle est toujours du second ordre',
                        'Elle est quadratique',
                        'La séparation permet d\'intégrer chaque variable de son côté.'
                    ),
                    $makeQuestion(
                        'Une solution d\'une équation différentielle est :',
                        'Une fonction qui vérifie l\'équation',
                        'Une constante au hasard',
                        'Une dérivée seule',
                        'Un point unique',
                        'Elle doit satisfaire l\'égalité différentielle sur le domaine considéré.'
                    ),
                    $makeQuestion(
                        'Pour y\'+y=0, la solution générale est de type :',
                        'Ce^{-x}',
                        'Ce^x+1',
                        'x+C',
                        'C-x',
                        'La dérivée de Ce^{-x} vaut -Ce^{-x}, donc y\'+y=0.'
                    ),
                    $makeQuestion(
                        'Pourquoi les équations différentielles servent-elles en modélisation ?',
                        'Elles décrivent des évolutions et des taux de variation',
                        'Elles comptent des permutations',
                        'Elles définissent des matrices',
                        'Elles remplacent les unités',
                        'De nombreux phénomènes physiques, économiques ou biologiques sont décrits par des lois d\'évolution.'
                    ),
                ],
            ],
            [
                'title' => 'Équations du second ordre',
                'description' => 'Découvrir les formes simples d\'équations du second ordre.',
                'duration' => 20,
                'passing_score' => 60,
                'questions' => [
                    $makeQuestion(
                        'Une équation différentielle contient :',
                        'Une fonction inconnue et au moins une dérivée',
                        'Uniquement des nombres entiers',
                        'Seulement une matrice',
                        'Aucune variable',
                        'La fonction recherchée apparaît avec une ou plusieurs de ses dérivées.'
                    ),
                    $makeQuestion(
                        'L\'ordre d\'une équation différentielle est le plus grand :',
                        'Ordre de dérivée présent',
                        'Nombre de solutions',
                        'Degré du polynôme',
                        'Coefficient',
                        'L\'ordre correspond à la dérivée la plus élevée qui apparaît.'
                    ),
                    $makeQuestion(
                        'La solution de y\'=0 est :',
                        'Une constante',
                        'Une droite non constante',
                        'Une exponentielle uniquement',
                        'y=x²',
                        'Une dérivée nulle signifie que la fonction reste constante.'
                    ),
                    $makeQuestion(
                        'Pour y\'=2y, une famille de solutions est :',
                        'y=Ce^{2x}',
                        'y=2x+C',
                        'y=Cx²',
                        'y=e^x+C',
                        'La dérivée de Ce^{2x} est 2Ce^{2x}=2y.'
                    ),
                    $makeQuestion(
                        'Une condition y(0)=3 sert à :',
                        'Déterminer une solution particulière',
                        'Changer l\'ordre de l\'équation',
                        'Supprimer la dérivée',
                        'Rendre l\'équation linéaire',
                        'Elle fixe une valeur initiale parmi la famille générale de solutions.'
                    ),
                    $makeQuestion(
                        'Dans y\'=ky, si k>0, on parle généralement de :',
                        'Croissance exponentielle',
                        'Décroissance linéaire',
                        'Oscillation périodique',
                        'Constante',
                        'Un taux proportionnel positif produit une croissance exponentielle.'
                    ),
                    $makeQuestion(
                        'Une équation est séparable lorsque :',
                        'On peut regrouper les termes en y d\'un côté et ceux en x de l\'autre',
                        'Elle n\'a aucune constante',
                        'Elle est toujours du second ordre',
                        'Elle est quadratique',
                        'La séparation permet d\'intégrer chaque variable de son côté.'
                    ),
                    $makeQuestion(
                        'Une solution d\'une équation différentielle est :',
                        'Une fonction qui vérifie l\'équation',
                        'Une constante au hasard',
                        'Une dérivée seule',
                        'Un point unique',
                        'Elle doit satisfaire l\'égalité différentielle sur le domaine considéré.'
                    ),
                    $makeQuestion(
                        'Pour y\'+y=0, la solution générale est de type :',
                        'Ce^{-x}',
                        'Ce^x+1',
                        'x+C',
                        'C-x',
                        'La dérivée de Ce^{-x} vaut -Ce^{-x}, donc y\'+y=0.'
                    ),
                    $makeQuestion(
                        'Pourquoi les équations différentielles servent-elles en modélisation ?',
                        'Elles décrivent des évolutions et des taux de variation',
                        'Elles comptent des permutations',
                        'Elles définissent des matrices',
                        'Elles remplacent les unités',
                        'De nombreux phénomènes physiques, économiques ou biologiques sont décrits par des lois d\'évolution.'
                    ),
                ],
            ],
            [
                'title' => 'Modélisation et révision',
                'description' => 'Relier équations différentielles et phénomènes concrets.',
                'duration' => 20,
                'passing_score' => 60,
                'questions' => [
                    $makeQuestion(
                        'Une équation différentielle contient :',
                        'Une fonction inconnue et au moins une dérivée',
                        'Uniquement des nombres entiers',
                        'Seulement une matrice',
                        'Aucune variable',
                        'La fonction recherchée apparaît avec une ou plusieurs de ses dérivées.'
                    ),
                    $makeQuestion(
                        'L\'ordre d\'une équation différentielle est le plus grand :',
                        'Ordre de dérivée présent',
                        'Nombre de solutions',
                        'Degré du polynôme',
                        'Coefficient',
                        'L\'ordre correspond à la dérivée la plus élevée qui apparaît.'
                    ),
                    $makeQuestion(
                        'La solution de y\'=0 est :',
                        'Une constante',
                        'Une droite non constante',
                        'Une exponentielle uniquement',
                        'y=x²',
                        'Une dérivée nulle signifie que la fonction reste constante.'
                    ),
                    $makeQuestion(
                        'Pour y\'=2y, une famille de solutions est :',
                        'y=Ce^{2x}',
                        'y=2x+C',
                        'y=Cx²',
                        'y=e^x+C',
                        'La dérivée de Ce^{2x} est 2Ce^{2x}=2y.'
                    ),
                    $makeQuestion(
                        'Une condition y(0)=3 sert à :',
                        'Déterminer une solution particulière',
                        'Changer l\'ordre de l\'équation',
                        'Supprimer la dérivée',
                        'Rendre l\'équation linéaire',
                        'Elle fixe une valeur initiale parmi la famille générale de solutions.'
                    ),
                    $makeQuestion(
                        'Dans y\'=ky, si k>0, on parle généralement de :',
                        'Croissance exponentielle',
                        'Décroissance linéaire',
                        'Oscillation périodique',
                        'Constante',
                        'Un taux proportionnel positif produit une croissance exponentielle.'
                    ),
                    $makeQuestion(
                        'Une équation est séparable lorsque :',
                        'On peut regrouper les termes en y d\'un côté et ceux en x de l\'autre',
                        'Elle n\'a aucune constante',
                        'Elle est toujours du second ordre',
                        'Elle est quadratique',
                        'La séparation permet d\'intégrer chaque variable de son côté.'
                    ),
                    $makeQuestion(
                        'Une solution d\'une équation différentielle est :',
                        'Une fonction qui vérifie l\'équation',
                        'Une constante au hasard',
                        'Une dérivée seule',
                        'Un point unique',
                        'Elle doit satisfaire l\'égalité différentielle sur le domaine considéré.'
                    ),
                    $makeQuestion(
                        'Pour y\'+y=0, la solution générale est de type :',
                        'Ce^{-x}',
                        'Ce^x+1',
                        'x+C',
                        'C-x',
                        'La dérivée de Ce^{-x} vaut -Ce^{-x}, donc y\'+y=0.'
                    ),
                    $makeQuestion(
                        'Pourquoi les équations différentielles servent-elles en modélisation ?',
                        'Elles décrivent des évolutions et des taux de variation',
                        'Elles comptent des permutations',
                        'Elles définissent des matrices',
                        'Elles remplacent les unités',
                        'De nombreux phénomènes physiques, économiques ou biologiques sont décrits par des lois d\'évolution.'
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
