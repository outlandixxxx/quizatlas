```php
<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Major;
use App\Models\Subject;
use App\Models\Quiz;
use App\Models\Question;
use App\Models\Answer;

class EconomicStatisticsAdvancedSeeder extends Seeder
{
    public function run(): void
    {
        $major = Major::where('slug', 'economy')->firstOrFail();

        $subject = Subject::where('major_id', $major->id)
            ->where('slug', 'economic-statistics')
            ->firstOrFail();

        $quizzes = [
            [
                'title' => 'Analyse descriptive avancée',
                'questions' => [
                    [
                        'question' => 'Une distribution de revenus présente une forte asymétrie à droite. Quelle combinaison est généralement attendue ?',
                        'answers' => [
                            ['answer' => 'La moyenne est supérieure à la médiane', 'iscorrect' => true],
                            ['answer' => 'La médiane est toujours supérieure à la moyenne', 'iscorrect' => false],
                            ['answer' => 'La moyenne et la médiane sont nécessairement égales', 'iscorrect' => false],
                            ['answer' => 'La distribution est nécessairement symétrique', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la médiane est-elle souvent utilisée avec les revenus plutôt que la seule moyenne ?',
                        'answers' => [
                            ['answer' => 'Elle est moins sensible aux valeurs extrêmes et décrit mieux le centre d’une distribution asymétrique', 'iscorrect' => true],
                            ['answer' => 'Elle utilise davantage les valeurs extrêmes', 'iscorrect' => false],
                            ['answer' => 'Elle est toujours égale au mode', 'iscorrect' => false],
                            ['answer' => 'Elle ne dépend pas de l’ordre des observations', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel indicateur mesure la dispersion relative d’une variable autour de sa moyenne ?',
                        'answers' => [
                            ['answer' => 'Le coefficient de variation', 'iscorrect' => true],
                            ['answer' => 'La médiane', 'iscorrect' => false],
                            ['answer' => 'Le mode', 'iscorrect' => false],
                            ['answer' => 'L’effectif cumulé', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Une série possède une moyenne de 80 et un écart-type de 12. Quel est approximativement son coefficient de variation ?',
                        'answers' => [
                            ['answer' => '15 %', 'iscorrect' => true],
                            ['answer' => '6,7 %', 'iscorrect' => false],
                            ['answer' => '92 %', 'iscorrect' => false],
                            ['answer' => '20 %', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les quantiles sont-ils utiles dans l’analyse des inégalités ?',
                        'answers' => [
                            ['answer' => 'Ils permettent d’étudier la position relative des observations dans la distribution', 'iscorrect' => true],
                            ['answer' => 'Ils mesurent uniquement la moyenne', 'iscorrect' => false],
                            ['answer' => 'Ils ignorent l’ordre des données', 'iscorrect' => false],
                            ['answer' => 'Ils remplacent toute mesure de dispersion', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Que mesure l’écart interquartile ?',
                        'answers' => [
                            ['answer' => 'La différence entre le troisième et le premier quartile', 'iscorrect' => true],
                            ['answer' => 'La différence entre la moyenne et la médiane', 'iscorrect' => false],
                            ['answer' => 'La différence entre le maximum et le minimum', 'iscorrect' => false],
                            ['answer' => 'La somme des deux quartiles', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi l’écart interquartile est-il robuste à certaines valeurs extrêmes ?',
                        'answers' => [
                            ['answer' => 'Il se concentre sur la partie centrale de la distribution et ignore directement les extrêmes', 'iscorrect' => true],
                            ['answer' => 'Il donne un poids maximal aux extrêmes', 'iscorrect' => false],
                            ['answer' => 'Il dépend uniquement du maximum', 'iscorrect' => false],
                            ['answer' => 'Il est toujours égal à la variance', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Si toutes les observations sont transformées selon Y = X + 50, que devient la variance ?',
                        'answers' => [
                            ['answer' => 'Elle reste inchangée', 'iscorrect' => true],
                            ['answer' => 'Elle augmente de 50', 'iscorrect' => false],
                            ['answer' => 'Elle est multipliée par 50', 'iscorrect' => false],
                            ['answer' => 'Elle devient nulle', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Si Y = 3X + 10, quelle relation existe entre Var(Y) et Var(X) ?',
                        'answers' => [
                            ['answer' => 'Var(Y) = 9Var(X)', 'iscorrect' => true],
                            ['answer' => 'Var(Y) = 3Var(X)', 'iscorrect' => false],
                            ['answer' => 'Var(Y) = Var(X) + 10', 'iscorrect' => false],
                            ['answer' => 'Var(Y) = Var(X) / 3', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi faut-il distinguer dispersion absolue et dispersion relative lors de comparaisons économiques ?',
                        'answers' => [
                            ['answer' => 'Deux variables peuvent avoir des niveaux moyens et des unités différentes, rendant une comparaison absolue trompeuse', 'iscorrect' => true],
                            ['answer' => 'Les deux notions sont toujours identiques', 'iscorrect' => false],
                            ['answer' => 'La dispersion absolue est toujours plus pertinente', 'iscorrect' => false],
                            ['answer' => 'La dispersion relative ignore toujours la moyenne', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Probabilités et espérance mathématique',
                'questions' => [
                    [
                        'question' => 'Une variable X prend 0 avec probabilité 0,2, 10 avec probabilité 0,5 et 20 avec probabilité 0,3. Quelle est E(X) ?',
                        'answers' => [
                            ['answer' => '11', 'iscorrect' => true],
                            ['answer' => '10', 'iscorrect' => false],
                            ['answer' => '12', 'iscorrect' => false],
                            ['answer' => '13', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Une variable Y vaut 100 avec probabilité 0,4 et 200 avec probabilité 0,6. Quelle est E(Y) ?',
                        'answers' => [
                            ['answer' => '160', 'iscorrect' => true],
                            ['answer' => '150', 'iscorrect' => false],
                            ['answer' => '140', 'iscorrect' => false],
                            ['answer' => '180', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une valeur espérée peut-elle ne correspondre à aucune réalisation individuelle ?',
                        'answers' => [
                            ['answer' => 'Elle est une moyenne pondérée théorique de résultats possibles', 'iscorrect' => true],
                            ['answer' => 'Elle est toujours une observation directe', 'iscorrect' => false],
                            ['answer' => 'Elle est toujours la valeur la plus probable', 'iscorrect' => false],
                            ['answer' => 'Elle est toujours la valeur maximale', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Si X et Y sont indépendantes, quelle relation est correcte ?',
                        'answers' => [
                            ['answer' => 'E(XY) = E(X)E(Y)', 'iscorrect' => true],
                            ['answer' => 'E(XY) = E(X) + E(Y)', 'iscorrect' => false],
                            ['answer' => 'E(XY) = E(X) - E(Y)', 'iscorrect' => false],
                            ['answer' => 'E(XY) = E(X) / E(Y)', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle propriété de l’espérance est toujours valable lorsque les espérances existent ?',
                        'answers' => [
                            ['answer' => 'E(aX + b) = aE(X) + b', 'iscorrect' => true],
                            ['answer' => 'E(aX + b) = a + E(X)b', 'iscorrect' => false],
                            ['answer' => 'E(aX + b) = E(X) / a + b', 'iscorrect' => false],
                            ['answer' => 'E(aX + b) = aE(X)b', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle est la variance d’une variable constante égale à 7 ?',
                        'answers' => [
                            ['answer' => '0', 'iscorrect' => true],
                            ['answer' => '7', 'iscorrect' => false],
                            ['answer' => '49', 'iscorrect' => false],
                            ['answer' => '1', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Si Var(X) = 9, quel est l’écart-type de X ?',
                        'answers' => [
                            ['answer' => '3', 'iscorrect' => true],
                            ['answer' => '9', 'iscorrect' => false],
                            ['answer' => '6', 'iscorrect' => false],
                            ['answer' => '81', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la variance d’une variable aléatoire est-elle toujours non négative ?',
                        'answers' => [
                            ['answer' => 'Elle repose sur une espérance de carrés d’écarts à la moyenne', 'iscorrect' => true],
                            ['answer' => 'La moyenne est toujours positive', 'iscorrect' => false],
                            ['answer' => 'Les probabilités peuvent être négatives', 'iscorrect' => false],
                            ['answer' => 'Toutes les variables économiques sont positives', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Si X est multipliée par 5, que devient sa variance ?',
                        'answers' => [
                            ['answer' => 'Elle est multipliée par 25', 'iscorrect' => true],
                            ['answer' => 'Elle est multipliée par 5', 'iscorrect' => false],
                            ['answer' => 'Elle reste identique', 'iscorrect' => false],
                            ['answer' => 'Elle est multipliée par 10', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi l’espérance conditionnelle peut-elle être utile en économie ?',
                        'answers' => [
                            ['answer' => 'Elle permet d’intégrer une information disponible lorsqu’on évalue une variable incertaine', 'iscorrect' => true],
                            ['answer' => 'Elle élimine toutes les erreurs de prévision', 'iscorrect' => false],
                            ['answer' => 'Elle remplace toute observation réelle', 'iscorrect' => false],
                            ['answer' => 'Elle garantit une valeur exacte du futur', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Lois de probabilité et applications économiques',
                'questions' => [
                    [
                        'question' => 'Dans une loi binomiale X ~ B(n,p), quelle est l’espérance ?',
                        'answers' => [
                            ['answer' => 'np', 'iscorrect' => true],
                            ['answer' => 'n + p', 'iscorrect' => false],
                            ['answer' => 'n/p', 'iscorrect' => false],
                            ['answer' => 'p/n', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Dans une loi binomiale X ~ B(50, 0,1), quelle est l’espérance ?',
                        'answers' => [
                            ['answer' => '5', 'iscorrect' => true],
                            ['answer' => '10', 'iscorrect' => false],
                            ['answer' => '50', 'iscorrect' => false],
                            ['answer' => '0,1', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Dans une loi binomiale X ~ B(50, 0,1), quelle est la variance ?',
                        'answers' => [
                            ['answer' => '4,5', 'iscorrect' => true],
                            ['answer' => '5', 'iscorrect' => false],
                            ['answer' => '9', 'iscorrect' => false],
                            ['answer' => '0,45', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quand la loi de Poisson peut-elle être utilisée comme approximation de la binomiale ?',
                        'answers' => [
                            ['answer' => 'Lorsque n est grand, p est petit et λ = np reste modéré', 'iscorrect' => true],
                            ['answer' => 'Lorsque n est petit et p = 1', 'iscorrect' => false],
                            ['answer' => 'Uniquement lorsque p = 0,5', 'iscorrect' => false],
                            ['answer' => 'Lorsque λ est toujours égal à zéro', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pour une loi de Poisson de paramètre λ = 4, quelle est l’espérance ?',
                        'answers' => [
                            ['answer' => '4', 'iscorrect' => true],
                            ['answer' => '2', 'iscorrect' => false],
                            ['answer' => '8', 'iscorrect' => false],
                            ['answer' => '16', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pour une loi de Poisson, quelle relation existe entre espérance et variance ?',
                        'answers' => [
                            ['answer' => 'E(X) = Var(X) = λ', 'iscorrect' => true],
                            ['answer' => 'E(X) = 2Var(X)', 'iscorrect' => false],
                            ['answer' => 'Var(X) = 0', 'iscorrect' => false],
                            ['answer' => 'E(X) = λ²', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une loi normale est-elle importante en statistiques économiques ?',
                        'answers' => [
                            ['answer' => 'Elle apparaît dans de nombreux modèles et constitue une approximation importante dans certaines applications d’échantillonnage', 'iscorrect' => true],
                            ['answer' => 'Elle décrit toujours exactement tous les revenus', 'iscorrect' => false],
                            ['answer' => 'Elle ne possède aucune dispersion', 'iscorrect' => false],
                            ['answer' => 'Elle est nécessairement discrète', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Dans une loi normale standard, quelle est la moyenne ?',
                        'answers' => [
                            ['answer' => '0', 'iscorrect' => true],
                            ['answer' => '1', 'iscorrect' => false],
                            ['answer' => '-1', 'iscorrect' => false],
                            ['answer' => '0,5', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Dans une loi normale standard, quel est l’écart-type ?',
                        'answers' => [
                            ['answer' => '1', 'iscorrect' => true],
                            ['answer' => '0', 'iscorrect' => false],
                            ['answer' => '2', 'iscorrect' => false],
                            ['answer' => '0,5', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une transformation en score-z est-elle utile ?',
                        'answers' => [
                            ['answer' => 'Elle permet d’exprimer une observation en nombre d’écarts-types par rapport à la moyenne', 'iscorrect' => true],
                            ['answer' => 'Elle supprime toujours les valeurs extrêmes', 'iscorrect' => false],
                            ['answer' => 'Elle convertit toutes les variables en euros', 'iscorrect' => false],
                            ['answer' => 'Elle rend les observations indépendantes', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Échantillonnage, distributions d’échantillonnage et estimation',
                'questions' => [
                    [
                        'question' => 'Quelle est la distribution d’échantillonnage d’un estimateur ?',
                        'answers' => [
                            ['answer' => 'La distribution des valeurs que l’estimateur pourrait prendre sur des échantillons répétés', 'iscorrect' => true],
                            ['answer' => 'La distribution des observations individuelles uniquement', 'iscorrect' => false],
                            ['answer' => 'La distribution des variables explicatives uniquement', 'iscorrect' => false],
                            ['answer' => 'La distribution des erreurs de saisie uniquement', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est l’écart-type de la moyenne d’échantillon lorsque la population a un écart-type σ et que la taille d’échantillon est n ?',
                        'answers' => [
                            ['answer' => 'σ / √n', 'iscorrect' => true],
                            ['answer' => 'σn', 'iscorrect' => false],
                            ['answer' => 'σ / n²', 'iscorrect' => false],
                            ['answer' => '√n / σ', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Que devient l’erreur standard de la moyenne lorsque n est multiplié par 4 ?',
                        'answers' => [
                            ['answer' => 'Elle est divisée par 2', 'iscorrect' => true],
                            ['answer' => 'Elle est divisée par 4', 'iscorrect' => false],
                            ['answer' => 'Elle est multipliée par 2', 'iscorrect' => false],
                            ['answer' => 'Elle reste identique', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi le théorème central limite est-il important pour les statistiques économiques ?',
                        'answers' => [
                            ['answer' => 'Sous certaines conditions, il explique pourquoi la distribution de moyennes d’échantillons tend vers une forme normale lorsque la taille augmente', 'iscorrect' => true],
                            ['answer' => 'Il garantit que toutes les variables individuelles sont normales', 'iscorrect' => false],
                            ['answer' => 'Il élimine tous les biais de mesure', 'iscorrect' => false],
                            ['answer' => 'Il s’applique uniquement aux variables qualitatives', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce qu’un estimateur consistant ?',
                        'answers' => [
                            ['answer' => 'Un estimateur qui converge vers le vrai paramètre lorsque la taille de l’échantillon augmente sous les conditions appropriées', 'iscorrect' => true],
                            ['answer' => 'Un estimateur toujours exact pour n = 1', 'iscorrect' => false],
                            ['answer' => 'Un estimateur dont la variance est toujours nulle', 'iscorrect' => false],
                            ['answer' => 'Un estimateur indépendant de la taille de l’échantillon', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la taille d’échantillon influence-t-elle la précision mais pas nécessairement le biais ?',
                        'answers' => [
                            ['answer' => 'Augmenter n réduit généralement la variance d’échantillonnage, mais ne corrige pas automatiquement une procédure systématiquement biaisée', 'iscorrect' => true],
                            ['answer' => 'Une grande taille élimine toujours tout biais', 'iscorrect' => false],
                            ['answer' => 'Le biais augmente toujours avec n', 'iscorrect' => false],
                            ['answer' => 'La variance ne dépend jamais de n', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un intervalle de confiance devient-il généralement plus étroit lorsque n augmente ?',
                        'answers' => [
                            ['answer' => 'L’erreur standard diminue, ce qui réduit l’incertitude autour de l’estimation', 'iscorrect' => true],
                            ['answer' => 'La moyenne devient exactement vraie', 'iscorrect' => false],
                            ['answer' => 'Les données perdent leur variabilité', 'iscorrect' => false],
                            ['answer' => 'Le niveau de confiance devient automatiquement nul', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel effet une augmentation du niveau de confiance a-t-elle généralement sur un intervalle de confiance ?',
                        'answers' => [
                            ['answer' => 'Elle l’élargit', 'iscorrect' => true],
                            ['answer' => 'Elle le rétrécit toujours', 'iscorrect' => false],
                            ['answer' => 'Elle ne modifie jamais sa largeur', 'iscorrect' => false],
                            ['answer' => 'Elle le rend nécessairement asymétrique', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une estimation ponctuelle et un intervalle de confiance donnent-ils des informations différentes ?',
                        'answers' => [
                            ['answer' => 'L’estimation ponctuelle donne une valeur centrale, tandis que l’intervalle décrit l’incertitude associée à l’estimation', 'iscorrect' => true],
                            ['answer' => 'L’intervalle ne contient aucune information sur l’incertitude', 'iscorrect' => false],
                            ['answer' => 'L’estimation ponctuelle est toujours plus fiable', 'iscorrect' => false],
                            ['answer' => 'Les deux concepts sont identiques', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi l’échantillonnage stratifié peut-il améliorer une enquête économique ?',
                        'answers' => [
                            ['answer' => 'Il permet de représenter explicitement des sous-groupes importants de la population', 'iscorrect' => true],
                            ['answer' => 'Il empêche toute erreur d’échantillonnage', 'iscorrect' => false],
                            ['answer' => 'Il sélectionne uniquement les observations les plus élevées', 'iscorrect' => false],
                            ['answer' => 'Il élimine la nécessité de pondérer les observations dans tous les cas', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Tests d’hypothèses avancés',
                'questions' => [
                    [
                        'question' => 'Qu’est-ce qu’une erreur de type I ?',
                        'answers' => [
                            ['answer' => 'Rejeter H0 alors qu’elle est vraie', 'iscorrect' => true],
                            ['answer' => 'Ne pas rejeter H0 alors qu’elle est vraie', 'iscorrect' => false],
                            ['answer' => 'Accepter H1 alors qu’elle est vraie', 'iscorrect' => false],
                            ['answer' => 'Calculer une mauvaise moyenne', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce qu’une erreur de type II ?',
                        'answers' => [
                            ['answer' => 'Ne pas rejeter H0 alors qu’elle est fausse', 'iscorrect' => true],
                            ['answer' => 'Rejeter H0 alors qu’elle est vraie', 'iscorrect' => false],
                            ['answer' => 'Rejeter H1 alors qu’elle est vraie', 'iscorrect' => false],
                            ['answer' => 'Utiliser une variance échantillonnale', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Si une p-value vaut 0,03 et que le seuil est de 5 %, quelle décision est généralement prise ?',
                        'answers' => [
                            ['answer' => 'Rejeter H0', 'iscorrect' => true],
                            ['answer' => 'Ne pas rejeter H0', 'iscorrect' => false],
                            ['answer' => 'Accepter automatiquement H1 comme vraie', 'iscorrect' => false],
                            ['answer' => 'Augmenter nécessairement le seuil à 10 %', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Si une p-value vaut 0,08 et que le seuil est de 5 %, quelle décision est généralement prise ?',
                        'answers' => [
                            ['answer' => 'Ne pas rejeter H0', 'iscorrect' => true],
                            ['answer' => 'Rejeter H0', 'iscorrect' => false],
                            ['answer' => 'Prouver H0', 'iscorrect' => false],
                            ['answer' => 'Prouver l’absence d’effet', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une p-value ne représente-t-elle pas directement la probabilité que H0 soit vraie ?',
                        'answers' => [
                            ['answer' => 'Elle est calculée conditionnellement à H0 et mesure la compatibilité des données avec cette hypothèse', 'iscorrect' => true],
                            ['answer' => 'Elle est toujours égale à la probabilité de H0', 'iscorrect' => false],
                            ['answer' => 'Elle ne dépend jamais des données', 'iscorrect' => false],
                            ['answer' => 'Elle représente toujours la puissance du test', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce que la puissance statistique d’un test ?',
                        'answers' => [
                            ['answer' => 'La probabilité de rejeter correctement H0 lorsque H0 est fausse', 'iscorrect' => true],
                            ['answer' => 'La probabilité de rejeter H0 lorsqu’elle est vraie', 'iscorrect' => false],
                            ['answer' => 'La probabilité que H0 soit vraie', 'iscorrect' => false],
                            ['answer' => 'La variance de l’estimateur', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel facteur augmente généralement la puissance d’un test ?',
                        'answers' => [
                            ['answer' => 'Une taille d’échantillon plus grande, toutes choses égales par ailleurs', 'iscorrect' => true],
                            ['answer' => 'Une taille d’échantillon plus petite', 'iscorrect' => false],
                            ['answer' => 'Une variance plus élevée toujours', 'iscorrect' => false],
                            ['answer' => 'Une perte d’information', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un effet peut-il être statistiquement significatif mais économiquement faible ?',
                        'answers' => [
                            ['answer' => 'Une grande précision peut permettre de détecter un effet de faible magnitude', 'iscorrect' => true],
                            ['answer' => 'La significativité implique toujours un grand effet', 'iscorrect' => false],
                            ['answer' => 'Une grande taille d’échantillon réduit toujours l’effet', 'iscorrect' => false],
                            ['answer' => 'La significativité mesure directement l’importance économique', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi plusieurs tests simultanés peuvent-ils augmenter le risque de faux positifs ?',
                        'answers' => [
                            ['answer' => 'Multiplier les tests augmente la probabilité qu’au moins un résultat soit significatif par hasard', 'iscorrect' => true],
                            ['answer' => 'Plusieurs tests réduisent toujours les erreurs de type I', 'iscorrect' => false],
                            ['answer' => 'Les tests deviennent automatiquement indépendants', 'iscorrect' => false],
                            ['answer' => 'Le seuil individuel devient automatiquement nul', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la puissance doit-elle être considérée lors de la non-détection d’un effet ?',
                        'answers' => [
                            ['answer' => 'L’absence de significativité peut provenir d’un manque de précision plutôt que de l’absence réelle d’un effet', 'iscorrect' => true],
                            ['answer' => 'Tout résultat non significatif prouve l’absence d’effet', 'iscorrect' => false],
                            ['answer' => 'La puissance ne concerne que les résultats significatifs', 'iscorrect' => false],
                            ['answer' => 'Une faible puissance garantit une meilleure conclusion', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Régression et analyse économétrique',
                'questions' => [
                    [
                        'question' => 'Dans le modèle y = β0 + β1x + ε, que représente β1 ?',
                        'answers' => [
                            ['answer' => 'L’effet marginal conditionnel de x sur la moyenne conditionnelle de y dans le modèle linéaire', 'iscorrect' => true],
                            ['answer' => 'La variance de y', 'iscorrect' => false],
                            ['answer' => 'La moyenne de x', 'iscorrect' => false],
                            ['answer' => 'La taille de l’échantillon', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Que représente ε dans un modèle de régression ?',
                        'answers' => [
                            ['answer' => 'Les facteurs non observés ou non inclus qui influencent y dans le modèle', 'iscorrect' => true],
                            ['answer' => 'Toujours une erreur de saisie', 'iscorrect' => false],
                            ['answer' => 'Le coefficient directeur', 'iscorrect' => false],
                            ['answer' => 'Le niveau de x', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi l’endogénéité est-elle un problème pour une estimation causale ?',
                        'answers' => [
                            ['answer' => Une variable explicative peut être corrélée avec le terme d’erreur, biaisant l’interprétation causale du coefficient', 'iscorrect' => true],
                            ['answer' => 'Elle garantit toujours une estimation non biaisée', 'iscorrect' => false],
                            ['answer' => 'Elle rend R² égal à zéro', 'iscorrect' => false],
                            ['answer' => 'Elle concerne uniquement les variables qualitatives', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce qu’une variable omise ?',
                        'answers' => [
                            ['answer' => 'Une variable pertinente pour l’issue étudiée mais absente du modèle', 'iscorrect' => true],
                            ['answer' => 'Une observation toujours supprimée', 'iscorrect' => false],
                            ['answer' => 'Une variable dont la variance est nulle uniquement', 'iscorrect' => false],
                            ['answer' => 'Une variable toujours indépendante du résultat', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une variable omise peut-elle créer un biais ?',
                        'answers' => [
                            ['answer' => 'Si elle influence y et est corrélée avec une variable explicative incluse, son effet peut être absorbé incorrectement par le coefficient estimé', 'iscorrect' => true],
                            ['answer' => 'Toute variable omise augmente toujours la précision', 'iscorrect' => false],
                            ['answer' => 'Elle réduit toujours le biais', 'iscorrect' => false],
                            ['answer' => 'Elle n’a aucun effet lorsqu’elle influence y', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce que l’hétéroscédasticité ?',
                        'answers' => [
                            ['answer' => 'Une situation où la variance conditionnelle de l’erreur varie avec les variables explicatives', 'iscorrect' => true],
                            ['answer' => 'Une corrélation parfaite entre deux variables', 'iscorrect' => false],
                            ['answer' => 'Une moyenne nulle de y', 'iscorrect' => false],
                            ['answer' => 'Une absence totale de variance', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi l’hétéroscédasticité peut-elle poser problème ?',
                        'answers' => [
                            ['answer' => 'Elle peut rendre les erreurs standards usuelles incorrectes et compliquer l’inférence statistique', 'iscorrect' => true],
                            ['answer' => 'Elle rend nécessairement les coefficients biaisés', 'iscorrect' => false],
                            ['answer' => 'Elle garantit une meilleure précision', 'iscorrect' => false],
                            ['answer' => 'Elle supprime toute relation entre variables', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce que l’autocorrélation dans une série temporelle ?',
                        'answers' => [
                            ['answer' => 'Une dépendance entre les erreurs ou observations à des dates différentes', 'iscorrect' => true],
                            ['answer' => 'Une corrélation parfaite entre toutes les variables', 'iscorrect' => false],
                            ['answer' => 'Une absence de variation dans le temps', 'iscorrect' => false],
                            ['answer' => 'Une erreur de saisie uniquement', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un R² élevé peut-il être trompeur dans une régression temporelle ?',
                        'answers' => [
                            ['answer' => 'Des tendances communes peuvent générer une forte association sans relation économique structurelle', 'iscorrect' => true],
                            ['answer' => 'R² est toujours égal à zéro en séries temporelles', 'iscorrect' => false],
                            ['answer' => 'Une tendance commune prouve la causalité', 'iscorrect' => false],
                            ['answer' => 'Les séries temporelles n’ont jamais de tendance', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi l’identification causale nécessite-t-elle généralement plus qu’une simple régression descriptive ?',
                        'answers' => [
                            ['answer' => 'Il faut justifier comment la variation de la variable explicative est isolée des facteurs confondants et de la causalité inverse', 'iscorrect' => true],
                            ['answer' => 'Une simple corrélation prouve toujours la causalité', 'iscorrect' => false],
                            ['answer' => 'Les variables économiques sont toujours exogènes', 'iscorrect' => false],
                            ['answer' => 'R² suffit à identifier un effet causal', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Séries temporelles et stationnarité',
                'questions' => [
                    [
                        'question' => 'Qu’est-ce qu’une série temporelle stationnaire au sens faible ?',
                        'answers' => [
                            ['answer' => 'Une série dont les propriétés de premier et deuxième moments restent stables dans le temps, avec une covariance dépendant du décalage plutôt que de la date', 'iscorrect' => true],
                            ['answer' => 'Une série dont le niveau ne change jamais', 'iscorrect' => false],
                            ['answer' => 'Une série nécessairement sans bruit', 'iscorrect' => false],
                            ['answer' => 'Une série qui ne possède aucune variance', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la stationnarité est-elle importante en économétrie des séries temporelles ?',
                        'answers' => [
                            ['answer' => 'Elle permet de travailler avec des propriétés statistiques stables nécessaires à de nombreuses procédures d’inférence', 'iscorrect' => true],
                            ['answer' => 'Elle garantit la causalité', 'iscorrect' => false],
                            ['answer' => 'Elle supprime automatiquement toute corrélation', 'iscorrect' => false],
                            ['answer' => 'Elle rend toutes les variables constantes', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce qu’une racine unitaire ?',
                        'answers' => [
                            ['answer' => 'Une caractéristique d’un processus dynamique pouvant conduire à une non-stationnarité persistante', 'iscorrect' => true],
                            ['answer' => 'Une moyenne égale à 1', 'iscorrect' => false],
                            ['answer' => 'Une variance égale à zéro', 'iscorrect' => false],
                            ['answer' => 'Une saisonnalité parfaite', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi différencier une série peut-il aider à obtenir une série plus stationnaire ?',
                        'answers' => [
                            ['answer' => 'La différenciation peut éliminer certaines tendances déterministes ou racines unitaires selon la structure du processus', 'iscorrect' => true],
                            ['answer' => 'Elle augmente toujours la moyenne', 'iscorrect' => false],
                            ['answer' => 'Elle supprime toutes les informations utiles', 'iscorrect' => false],
                            ['answer' => 'Elle rend nécessairement la variable normale', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce qu’une régression fallacieuse ?',
                        'answers' => [
                            ['answer' => 'Une relation statistique apparemment forte entre des séries non stationnaires qui peut ne pas avoir de fondement économique', 'iscorrect' => true],
                            ['answer' => 'Une régression avec R² égal à zéro', 'iscorrect' => false],
                            ['answer' => 'Une régression contenant uniquement des variables qualitatives', 'iscorrect' => false],
                            ['answer' => 'Une régression nécessairement non linéaire', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les tendances communes peuvent-elles produire une corrélation élevée entre deux séries ?',
                        'answers' => [
                            ['answer' => 'Les deux variables augmentent avec le temps même sans relation économique causale directe', 'iscorrect' => true],
                            ['answer' => 'La corrélation élimine toujours les tendances', 'iscorrect' => false],
                            ['answer' => 'Les séries temporelles ne peuvent pas être corrélées', 'iscorrect' => false],
                            ['answer' => 'Une tendance commune prouve une causalité', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce qu’un processus autorégressif simple AR(1) ?',
                        'answers' => [
                            ['answer' => 'Un modèle dans lequel la valeur courante dépend linéairement de sa propre valeur retardée et d’un terme aléatoire', 'iscorrect' => true],
                            ['answer' => 'Un modèle sans variable retardée', 'iscorrect' => false],
                            ['answer' => 'Une moyenne mobile uniquement', 'iscorrect' => false],
                            ['answer' => 'Une régression sur une constante uniquement', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Dans un AR(1), quelle condition simple favorise la stationnarité ?',
                        'answers' => [
                            ['answer' => '|φ| < 1', 'iscorrect' => true],
                            ['answer' => '|φ| > 1', 'iscorrect' => false],
                            ['answer' => 'φ = 2', 'iscorrect' => false],
                            ['answer' => 'φ = -2', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les retards temporels sont-ils importants dans les modèles économiques ?',
                        'answers' => [
                            ['answer' => 'Ils permettent de représenter l’inertie, les délais d’ajustement et les effets persistants', 'iscorrect' => true],
                            ['answer' => 'Ils éliminent toujours la dépendance temporelle', 'iscorrect' => false],
                            ['answer' => 'Ils rendent les données indépendantes', 'iscorrect' => false],
                            ['answer' => 'Ils servent uniquement à calculer des moyennes', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les prévisions temporelles doivent-elles tenir compte de l’incertitude ?',
                        'answers' => [
                            ['answer' => 'Les observations futures sont inconnues et dépendent d’événements et de chocs non encore observés', 'iscorrect' => true],
                            ['answer' => 'Les modèles prédisent toujours exactement le futur', 'iscorrect' => false],
                            ['answer' => 'L’incertitude disparaît pour les longues périodes', 'iscorrect' => false],
                            ['answer' => 'Les données historiques suffisent à connaître tous les futurs chocs', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Indicateurs, indices et statistiques économiques appliquées',
                'questions' => [
                    [
                        'question' => 'Un indice des prix passe de 100 à 108 puis à 114. Quelle est l’augmentation totale entre la base et la dernière période ?',
                        'answers' => [
                            ['answer' => '14 %', 'iscorrect' => true],
                            ['answer' => '22 %', 'iscorrect' => false],
                            ['answer' => '8 %', 'iscorrect' => false],
                            ['answer' => '6 %', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi ne faut-il pas additionner directement 8 % puis 6 % pour mesurer la variation entre 100 et 114 ?',
                        'answers' => [
                            ['answer' => 'Le second pourcentage est mesuré par rapport à un niveau de 108, pas à la base 100', 'iscorrect' => true],
                            ['answer' => 'Les pourcentages ne peuvent jamais être additionnés', 'iscorrect' => false],
                            ['answer' => 'L’indice n’a aucune base', 'iscorrect' => false],
                            ['answer' => 'La deuxième variation est indépendante de la première valeur', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Un taux de chômage passe de 10 % à 8 %. Quelle est la variation relative du taux ?',
                        'answers' => [
                            ['answer' => '-20 %', 'iscorrect' => true],
                            ['answer' => '-2 %', 'iscorrect' => false],
                            ['answer' => '-25 %', 'iscorrect' => false],
                            ['answer' => '-18 %', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les points de pourcentage sont-ils adaptés pour comparer des taux ?',
                        'answers' => [
                            ['answer' => 'Ils mesurent directement la différence absolue entre deux taux exprimés dans la même unité', 'iscorrect' => true],
                            ['answer' => 'Ils mesurent toujours une croissance relative', 'iscorrect' => false],
                            ['answer' => 'Ils sont identiques aux pourcentages de variation', 'iscorrect' => false],
                            ['answer' => 'Ils ne concernent que les indices de prix', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les pondérations utilisées dans un indice peuvent-elles évoluer dans le temps ?',
                        'answers' => [
                            ['answer' => 'La structure de consommation, de production ou de commerce peut changer', 'iscorrect' => true],
                            ['answer' => 'Les pondérations doivent toujours rester identiques', 'iscorrect' => false],
                            ['answer' => 'Les pondérations n’ont aucun lien avec les comportements économiques', 'iscorrect' => false],
                            ['answer' => 'Elles changent uniquement à cause des erreurs de calcul', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un changement d’année de base peut-il modifier les niveaux d’un indice sans modifier les variations relatives correctement calculées ?',
                        'answers' => [
                            ['answer' => 'Le changement de base re-normalise l’échelle de référence', 'iscorrect' => true],
                            ['answer' => 'Il modifie nécessairement les prix observés', 'iscorrect' => false],
                            ['answer' => 'Il supprime toute inflation passée', 'iscorrect' => false],
                            ['answer' => 'Il change automatiquement les quantités réelles', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la décomposition d’un indicateur agrégé est-elle utile ?',
                        'answers' => [
                            ['answer' => 'Elle permet d’identifier quelles composantes contribuent le plus à sa variation', 'iscorrect' => true],
                            ['answer' => 'Elle rend les composantes indépendantes', 'iscorrect' => false],
                            ['answer' => 'Elle supprime les pondérations', 'iscorrect' => false],
                            ['answer' => 'Elle remplace toute analyse temporelle', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une hausse de la moyenne d’un indicateur national peut-elle masquer une détérioration pour certains groupes ?',
                        'answers' => [
                            ['answer' => 'Un agrégat moyen peut progresser tandis que certaines sous-populations connaissent une évolution différente', 'iscorrect' => true],
                            ['answer' => 'La moyenne représente toujours chaque sous-groupe', 'iscorrect' => false],
                            ['answer' => 'Les groupes sont nécessairement identiques', 'iscorrect' => false],
                            ['answer' => 'Une moyenne ne peut jamais cacher des différences', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi faut-il contrôler la comparabilité des séries avant de comparer deux pays ?',
                        'answers' => [
                            ['answer' => 'Les définitions, unités, méthodes, périodes de référence et couvertures peuvent différer', 'iscorrect' => true],
                            ['answer' => 'Les statistiques nationales sont toujours calculées de manière identique', 'iscorrect' => false],
                            ['answer' => 'Les unités n’affectent jamais les comparaisons', 'iscorrect' => false],
                            ['answer' => 'Les différences méthodologiques sont toujours négligeables', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la qualité des statistiques officielles est-elle importante pour les décisions économiques ?',
                        'answers' => [
                            ['answer' => 'Les politiques publiques, les entreprises et les investisseurs s’appuient sur ces données pour évaluer la situation économique', 'iscorrect' => true],
                            ['answer' => 'Les données officielles déterminent automatiquement les résultats économiques', 'iscorrect' => false],
                            ['answer' => 'Les statistiques éliminent les risques', 'iscorrect' => false],
                            ['answer' => 'Les indicateurs sont uniquement décoratifs', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],
        ];

        foreach ($quizzes as $quizData) {
            $quiz = Quiz::create([
                'subject_id' => $subject->id,
                'title' => $quizData['title'],
                'level' => 'Advanced',
            ]);

            foreach ($quizData['questions'] as $questionData) {
                $question = Question::create([
                    'quiz_id' => $quiz->id,
                    'question' => $questionData['question'],
                ]);

                $answers = $questionData['answers'];
                shuffle($answers);

                foreach ($answers as $answerData) {
                    Answer::create([
                        'question_id' => $question->id,
                        'answer' => $answerData['answer'],
                        'iscorrect' => $answerData['iscorrect'],
                    ]);
                }
            }
        }
    }
}
```
