<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class AppliedMathematicsBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'applied-mathematics')->firstOrFail();

        $choicePositions = [4,1,4,4,1,2,3,2,4,3,4,3,1,1,3,2,4,2,1,2,2,3,1,4,4,1,3,4,3,3,2,4,2,2,1,4,3,1,3,2,2,1,2,4,3,3,2,1,2,1,2,4,1,1,4,3,3,4,3,1];
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
                'title' => 'Taux, proportions et pourcentages',
                'description' => 'Ratios, pourcentages et calculs pratiques.',
                'duration' => 20,
                'passing_score' => 60,
                'questions' => [
                    $makeQuestion(
                        '180 km en 3 h correspondent à :',
                        '60 km/h',
                        '30 km/h',
                        '90 km/h',
                        '540 km/h',
                        'La vitesse moyenne est 180/3=60 km/h.'
                    ),
                    $makeQuestion(
                        '25 % de 80 vaut :',
                        '20',
                        '10',
                        '25',
                        '40',
                        '0,25×80=20.'
                    ),
                    $makeQuestion(
                        'Un capital de 1000 DH placé à un taux d’intérêt simple annuel de 5 % pendant un an produit quel intérêt ?',
                        '50 €',
                        '5 €',
                        '100 €',
                        '1050 €',
                        '1000×0,05=50.'
                    ),
                    $makeQuestion(
                        'Une recette de 3000 € et des coûts de 1800 € donnent un bénéfice de :',
                        '1200 €',
                        '4800 €',
                        '1000 €',
                        '1800 €',
                        'Bénéfice=recettes-coûts.'
                    ),
                    $makeQuestion(
                        'L\'aire d\'un rectangle 8×5 vaut :',
                        '40',
                        '13',
                        '26',
                        '80',
                        'Aire=8×5=40.'
                    ),
                    $makeQuestion(
                        'Un volume 2×3×4 vaut :',
                        '24',
                        '9',
                        '12',
                        '18',
                        'Volume=2×3×4=24.'
                    ),
                    $makeQuestion(
                        'Dans une optimisation, une contrainte :',
                        'Limite les solutions admissibles',
                        'Donne toujours l\'optimum',
                        'Supprime les variables',
                        'Rend le coût nul',
                        'Les contraintes définissent les choix autorisés.'
                    ),
                    $makeQuestion(
                        'La probabilité d\'obtenir 4 sur un dé équilibré est :',
                        '1/6',
                        '1/4',
                        '1/2',
                        '1/3',
                        'Une face sur six correspond au 4.'
                    ),
                    $makeQuestion(
                        'La moyenne de 4,6,8 est :',
                        '6',
                        '5',
                        '7',
                        '18',
                        '(4+6+8)/3=6.'
                    ),
                    $makeQuestion(
                        'Une approximation numérique peut être acceptable si :',
                        'Son erreur reste suffisamment faible pour l\'application',
                        'Elle est toujours exacte',
                        'Elle n\'a pas d\'unité',
                        'Elle n\'est jamais vérifiée',
                        'L\'utilité dépend du niveau de précision requis.'
                    ),
                ],
            ],
            [
                'title' => 'Mathématiques financières appliquées',
                'description' => 'Intérêts, coûts, recettes et bénéfices.',
                'duration' => 20,
                'passing_score' => 60,
                'questions' => [
                    $makeQuestion(
                        'Un capital de 2000 € placé à 4 % d\'intérêt simple pendant 1 an produit :',
                        '80 €',
                        '40 €',
                        '200 €',
                        '8 €',
                        '2000×0,04=80.'
                    ),
                    $makeQuestion(
                        '1000 DH placés à un taux annuel composé de 10 %, avec capitalisation annuelle pendant 2 ans, valent :',
                        '1210 €',
                        '1200 €',
                        '1100 €',
                        '1331 €',
                        '1000×1,1²=1000×1,21=1210.'
                    ),
                    $makeQuestion(
                        'Un article à 150 € bénéficiant d\'une remise de 20 % coûte finalement :',
                        '120 €',
                        '130 €',
                        '100 €',
                        '140 €',
                        '150×0,8=120.'
                    ),
                    $makeQuestion(
                        'Un article acheté 40 € et vendu 50 € a un taux de marge (marge/coût d\'achat) de :',
                        '25 %',
                        '20 %',
                        '10 %',
                        '40 %',
                        'Marge=10€, et 10/40=0,25=25 %.'
                    ),
                    $makeQuestion(
                        'Un emprunt de 12 000 DH, sans intérêts ni frais, remboursé en 24 mensualités égales correspond à des mensualités de :',
                        '500 €',
                        '600 €',
                        '400 €',
                        '240 €',
                        '12000/24=500.'
                    ),
                    $makeQuestion(
                        'Un prix hors taxes de 80 € soumis à une TVA de 20 % donne un prix TTC de :',
                        '96 €',
                        '100 €',
                        '84 €',
                        '160 €',
                        '80×1,2=96.'
                    ),
                    $makeQuestion(
                        'Actualiser une somme future consiste à :',
                        'Déterminer sa valeur équivalente aujourd\'hui',
                        'L\'augmenter arbitrairement',
                        'Ignorer l\'effet du temps',
                        'La rendre nulle',
                        'L\'actualisation ramène une valeur future à son équivalent présent.'
                    ),
                    $makeQuestion(
                        'Avec des coûts fixes de 3000 € et une marge de 15 € par unité vendue, le seuil de rentabilité est atteint à :',
                        '200 unités',
                        '150 unités',
                        '300 unités',
                        '45 unités',
                        '3000/15=200.'
                    ),
                    $makeQuestion(
                        'Un taux d\'intérêt simple de 6 % sur 1000 € pendant 2 ans produit un intérêt total de :',
                        '120 €',
                        '60 €',
                        '106 €',
                        '1120 €',
                        '1000×0,06×2=120.'
                    ),
                    $makeQuestion(
                        'Un équipement de 5000 € amorti linéairement sur 5 ans (valeur résiduelle nulle) perd chaque année :',
                        '1000 €',
                        '500 €',
                        '2000 €',
                        '5000 €',
                        '5000/5=1000.'
                    ),
                ],
            ],
            [
                'title' => 'Géométrie et mesures appliquées',
                'description' => 'Longueurs, surfaces, volumes et conversions.',
                'duration' => 20,
                'passing_score' => 60,
                'questions' => [
                    $makeQuestion(
                        'L\'aire d\'un triangle de base 10 et de hauteur 6 vaut :',
                        '30',
                        '60',
                        '16',
                        '20',
                        'Aire=(base×hauteur)/2=(10×6)/2=30.'
                    ),
                    $makeQuestion(
                        'Le périmètre d\'un cercle de rayon 5 (π≈3,14) vaut environ :',
                        '31,4',
                        '15,7',
                        '62,8',
                        '78,5',
                        'Périmètre=2πr=2×3,14×5=31,4.'
                    ),
                    $makeQuestion(
                        'Le volume d\'un cylindre de rayon 3 et de hauteur 10 (π≈3,14) vaut environ :',
                        '282,6',
                        '94,2',
                        '188,4',
                        '565,2',
                        'Volume=πr²h=3,14×9×10=282,6.'
                    ),
                    $makeQuestion(
                        '2,5 m convertis en centimètres valent :',
                        '250 cm',
                        '25 cm',
                        '2500 cm',
                        '0,25 cm',
                        '1 m=100 cm, donc 2,5×100=250.'
                    ),
                    $makeQuestion(
                        'L\'aire d\'un trapèze de bases 6 et 10 et de hauteur 4 vaut :',
                        '32',
                        '64',
                        '40',
                        '24',
                        'Aire=((6+10)/2)×4=8×4=32.'
                    ),
                    $makeQuestion(
                        'Le volume d\'une boîte rectangulaire de dimensions 4×3×2 vaut :',
                        '24',
                        '9',
                        '14',
                        '48',
                        'Volume=4×3×2=24.'
                    ),
                    $makeQuestion(
                        '3 m² convertis en centimètres carrés valent :',
                        '30000 cm²',
                        '300 cm²',
                        '3000 cm²',
                        '300000 cm²',
                        '1 m²=10000 cm², donc 3×10000=30000.'
                    ),
                    $makeQuestion(
                        'Un triangle rectangle a des côtés de 3 et 4 ; son hypoténuse vaut :',
                        '5',
                        '7',
                        '12',
                        '6',
                        'Pythagore : √(3²+4²)=√25=5.'
                    ),
                    $makeQuestion(
                        'Sur une carte à l\'échelle 1:50000, une distance de 4 cm représente dans la réalité :',
                        '2000 m',
                        '200 m',
                        '500 m',
                        '20000 m',
                        '4 cm×50000=200000 cm=2000 m.'
                    ),
                    $makeQuestion(
                        'Le volume d\'une sphère de rayon 3 (formule 4/3πr³, π≈3,14) vaut environ :',
                        '113,04',
                        '84,78',
                        '56,52',
                        '169,56',
                        'Volume=(4/3)×3,14×27≈113,04.'
                    ),
                ],
            ],
            [
                'title' => 'Optimisation et prise de décision',
                'description' => 'Ressources, coûts et choix sous contraintes.',
                'duration' => 20,
                'passing_score' => 60,
                'questions' => [
                    $makeQuestion(
                        'Un coût fixe de 500 € et un coût unitaire de 8 € pour 50 unités donnent un coût total de :',
                        '900 €',
                        '400 €',
                        '508 €',
                        '4400 €',
                        'Coût total=500+8×50=500+400=900.'
                    ),
                    $makeQuestion(
                        'Une recette de 1200 € et un coût de 950 € donnent un profit de :',
                        '250 €',
                        '2150 €',
                        '300 €',
                        '950 €',
                        'Profit=recette-coût=1200-950=250.'
                    ),
                    $makeQuestion(
                        'Pour comparer deux offres de prix ayant une partie fixe et une partie variable, il faut :',
                        'Calculer le coût total pour la quantité envisagée',
                        'Comparer uniquement les prix unitaires',
                        'Choisir l\'offre la moins chère au premier coup d\'œil',
                        'Ignorer la quantité recherchée',
                        'Seul le coût total pour le volume réel permet une comparaison correcte.'
                    ),
                    $makeQuestion(
                        'Une décision d\'optimisation sous contrainte budgétaire doit :',
                        'Respecter le budget tout en maximisant l\'objectif visé',
                        'Ignorer le budget disponible',
                        'Minimiser systématiquement la qualité',
                        'Dépasser le budget si nécessaire',
                        'Une contrainte budgétaire limite les choix tout en cherchant le meilleur résultat possible.'
                    ),
                    $makeQuestion(
                        'Avec des coûts fixes de 2000 € et une marge de 25 € par unité, le seuil de rentabilité est atteint à :',
                        '80 unités',
                        '50 unités',
                        '100 unités',
                        '125 unités',
                        '2000/25=80.'
                    ),
                    $makeQuestion(
                        'Entre deux investissements de même risque, l\'un rapportant 8 % et l\'autre 6 %, un décideur rationnel choisit en priorité :',
                        'Celui qui rapporte 8 %',
                        'Celui qui rapporte 6 %',
                        'Les deux à parts égales obligatoirement',
                        'Aucun des deux',
                        'À risque identique, le rendement le plus élevé est préférable.'
                    ),
                    $makeQuestion(
                        'Pour Z=5x+3y, la valeur de Z au point (4,4) est :',
                        '32',
                        '28',
                        '20',
                        '35',
                        '5×4+3×4=20+12=32.'
                    ),
                    $makeQuestion(
                        'Le coût marginal correspond au coût :',
                        'De production d\'une unité supplémentaire',
                        'Total de l\'ensemble de la production',
                        'Fixe uniquement',
                        'Moyen par unité produite',
                        'Le coût marginal mesure la variation du coût total pour une unité de plus.'
                    ),
                    $makeQuestion(
                        'Un jeu rapporte 100 € avec une probabilité de 0,6 et 0 € avec une probabilité de 0,4 ; son espérance de gain est :',
                        '60 €',
                        '100 €',
                        '40 €',
                        '50 €',
                        'Espérance=100×0,6+0×0,4=60.'
                    ),
                    $makeQuestion(
                        'Lorsqu\'une ressource est limitée, une allocation efficace vise à :',
                        'Maximiser le résultat obtenu pour cette ressource',
                        'Répartir la ressource au hasard',
                        'Laisser une partie de la ressource inutilisée sans raison',
                        'Ignorer les priorités',
                        'L\'optimisation sous contrainte de ressource cherche le meilleur usage possible de ce qui est disponible.'
                    ),
                ],
            ],
            [
                'title' => 'Probabilités, statistiques et décisions',
                'description' => 'Probabilités et statistiques pour des situations concrètes.',
                'duration' => 20,
                'passing_score' => 60,
                'questions' => [
                    $makeQuestion(
                        'Dans un jeu de 52 cartes, la probabilité de tirer un cœur est :',
                        '1/4',
                        '1/13',
                        '1/2',
                        '1/52',
                        'Il y a 13 cœurs sur 52 cartes, donc 13/52=1/4.'
                    ),
                    $makeQuestion(
                        'Si P(A)=0,3, alors la probabilité de l\'événement contraire vaut :',
                        '0,7',
                        '0,3',
                        '1,3',
                        '0',
                        'P(non A)=1-P(A)=1-0,3=0,7.'
                    ),
                    $makeQuestion(
                        'Un jeu rapporte 10 € avec une probabilité de 0,2 et 0 € avec une probabilité de 0,8 ; son espérance vaut :',
                        '2 €',
                        '10 €',
                        '5 €',
                        '8 €',
                        'Espérance=10×0,2+0×0,8=2.'
                    ),
                    $makeQuestion(
                        'La moyenne pondérée des notes 12 (coefficient 2), 16 (coefficient 1) et 10 (coefficient 1) vaut :',
                        '12,5',
                        '12,67',
                        '13',
                        '11,5',
                        '(12×2+16×1+10×1)/4=50/4=12,5.'
                    ),
                    $makeQuestion(
                        'L\'écart-type d\'une série de données mesure :',
                        'La dispersion des valeurs autour de la moyenne',
                        'La valeur la plus fréquente',
                        'La valeur centrale de la série',
                        'La somme totale des valeurs',
                        'L\'écart-type quantifie la dispersion des données par rapport à leur moyenne.'
                    ),
                    $makeQuestion(
                        'Si A et B sont deux événements indépendants avec P(A)=0,3 et P(B)=0,2, alors P(A ou B) vaut :',
                        '0,44',
                        '0,5',
                        '0,06',
                        '0,38',
                        'P(A∪B)=P(A)+P(B)-P(A)P(B)=0,3+0,2-0,06=0,44.'
                    ),
                    $makeQuestion(
                        'La loi binomiale modélise :',
                        'Un nombre de succès dans une répétition d\'épreuves indépendantes identiques',
                        'Une valeur continue sans limite',
                        'Un phénomène toujours certain',
                        'Une moyenne de population sans variabilité',
                        'La loi binomiale compte les succès obtenus sur n épreuves indépendantes de même probabilité.'
                    ),
                    $makeQuestion(
                        'La médiane de la série 3, 7, 9, 12, 20 est :',
                        '9',
                        '7',
                        '12',
                        '10,2',
                        'La valeur centrale de 5 données ordonnées est la troisième, soit 9.'
                    ),
                    $makeQuestion(
                        'Pour un décideur neutre au risque, entre deux choix de même niveau de risque, A avec une espérance de gain de 50 DH et B avec une espérance de 40 DH, lequel est préférable ?',
                        'A',
                        'B',
                        'Les deux également',
                        'Aucun des deux',
                        'À risque égal, l\'espérance de gain la plus élevée est la plus avantageuse.'
                    ),
                    $makeQuestion(
                        'Un intervalle de confiance à 95 % signifie que :',
                        'La méthode utilisée produit un intervalle contenant la vraie valeur dans environ 95 % des échantillonnages répétés',
                        'La valeur réelle est certaine à 95 %',
                        '95 % des données individuelles se trouvent dans l\'intervalle',
                        'L\'intervalle obtenu est toujours exact',
                        'Le niveau de confiance décrit la fiabilité de la méthode d\'estimation, pas une certitude sur un cas particulier.'
                    ),
                ],
            ],
            [
                'title' => 'Méthodes numériques et applications scientifiques',
                'description' => 'Approximation, erreurs et calcul scientifique.',
                'duration' => 20,
                'passing_score' => 60,
                'questions' => [
                    $makeQuestion(
                        'Si la valeur réelle est 10 et la valeur mesurée est 9,8, l\'erreur absolue vaut :',
                        '0,2',
                        '0,02',
                        '2',
                        '9,8',
                        'Erreur absolue=|valeur réelle-valeur mesurée|=|10-9,8|=0,2.'
                    ),
                    $makeQuestion(
                        'Avec une erreur absolue de 0,2 pour une valeur réelle de 10, l\'erreur relative vaut :',
                        '2 %',
                        '0,2 %',
                        '20 %',
                        '0,02 %',
                        'Erreur relative=0,2/10=0,02=2 %.'
                    ),
                    $makeQuestion(
                        '3,14159 arrondi à deux décimales vaut :',
                        '3,14',
                        '3,15',
                        '3,1',
                        '3,142',
                        'La troisième décimale (1) n\'arrondit pas la deuxième (4) vers le haut.'
                    ),
                    $makeQuestion(
                        'La méthode de dichotomie permet de :',
                        'Approcher une solution en divisant successivement un intervalle en deux',
                        'Trouver une solution exacte instantanément',
                        'Éviter tout calcul numérique',
                        'Résoudre uniquement des équations linéaires',
                        'La dichotomie réduit progressivement l\'intervalle de recherche par moitiés successives.'
                    ),
                    $makeQuestion(
                        '0,00042 écrit en notation scientifique correspond à :',
                        '4,2×10⁻⁴',
                        '4,2×10⁴',
                        '42×10⁻⁵',
                        '0,42×10⁻³',
                        '0,00042=4,2×10⁻⁴.'
                    ),
                    $makeQuestion(
                        'Un instrument précis mais non exact donne des mesures :',
                        'Reproductibles mais systématiquement décalées de la vraie valeur',
                        'Toujours égales à la vraie valeur',
                        'Aléatoires et incohérentes entre elles',
                        'Impossibles à répéter',
                        'La précision concerne la reproductibilité, l\'exactitude concerne l\'écart avec la vraie valeur.'
                    ),
                    $makeQuestion(
                        'En utilisant l\'approximation π≈3,14 au lieu de π≈3,14159, l\'erreur absolue commise est environ :',
                        '0,00159',
                        '0,0159',
                        '0,159',
                        '1,59',
                        '|3,14159-3,14|=0,00159.'
                    ),
                    $makeQuestion(
                        'L\'interpolation linéaire entre deux points connus sert à :',
                        'Estimer une valeur intermédiaire en supposant une variation en ligne droite',
                        'Calculer une valeur exacte sans aucune hypothèse',
                        'Supprimer les points de mesure existants',
                        'Mesurer directement une nouvelle donnée physique',
                        'Elle relie deux points connus par une droite pour estimer les valeurs entre eux.'
                    ),
                    $makeQuestion(
                        'Une méthode numérique itérative s\'arrête généralement quand :',
                        'Le critère de convergence choisi est atteint',
                        'Le calcul devient trop simple',
                        'Un nombre impair d\'itérations est effectué',
                        'La première valeur testée est toujours correcte',
                        'L\'itération continue jusqu\'à ce que le résultat soit jugé suffisamment stable selon un critère fixé.'
                    ),
                    $makeQuestion(
                        'Le nombre 0,004500 comporte combien de chiffres significatifs ?',
                        '4',
                        '2',
                        '6',
                        '3',
                        'Les zéros de tête ne comptent pas, mais les chiffres 4, 5 et les deux zéros finaux après la virgule sont significatifs.'
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
