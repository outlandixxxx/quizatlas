```php
<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Major;
use App\Models\Subject;
use App\Models\Quiz;
use App\Models\Question;
use App\Models\Answer;

class EconomicStatisticsIntermediateSeeder extends Seeder
{
    public function run(): void
    {
        $major = Major::where('slug', 'economy')->firstOrFail();

        $subject = Subject::where('major_id', $major->id)
            ->where('slug', 'economic-statistics')
            ->firstOrFail();

        $quizzes = [
            [
                'title' => 'Statistique descriptive et distributions',
                'questions' => [
                    [
                        'question' => 'Quelle est la moyenne de 12, 15, 18, 21 et 24 ?',
                        'answers' => [
                            ['answer' => '18', 'iscorrect' => true],
                            ['answer' => '17', 'iscorrect' => false],
                            ['answer' => '19', 'iscorrect' => false],
                            ['answer' => '20', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle est la médiane de 4, 7, 9, 12, 15, 20 et 25 ?',
                        'answers' => [
                            ['answer' => '12', 'iscorrect' => true],
                            ['answer' => '9', 'iscorrect' => false],
                            ['answer' => '15', 'iscorrect' => false],
                            ['answer' => '13', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Une série contient 200 ménages dont 50 appartiennent à une catégorie donnée. Quelle est la fréquence correspondante ?',
                        'answers' => [
                            ['answer' => '25 %', 'iscorrect' => true],
                            ['answer' => '20 %', 'iscorrect' => false],
                            ['answer' => '30 %', 'iscorrect' => false],
                            ['answer' => '15 %', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la médiane peut-elle être préférable à la moyenne pour analyser les revenus ?',
                        'answers' => [
                            ['answer' => 'Elle est moins sensible aux revenus extrêmement élevés ou faibles', 'iscorrect' => true],
                            ['answer' => 'Elle utilise toujours davantage d’information que la moyenne', 'iscorrect' => false],
                            ['answer' => 'Elle est toujours égale au revenu moyen', 'iscorrect' => false],
                            ['answer' => 'Elle ignore complètement l’ordre des observations', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Si toutes les observations augmentent de 50 unités, que devient la moyenne ?',
                        'answers' => [
                            ['answer' => 'Elle augmente de 50 unités', 'iscorrect' => true],
                            ['answer' => 'Elle augmente de 25 unités', 'iscorrect' => false],
                            ['answer' => 'Elle reste inchangée', 'iscorrect' => false],
                            ['answer' => 'Elle augmente de 100 unités', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Si toutes les observations sont multipliées par 3, que devient la moyenne ?',
                        'answers' => [
                            ['answer' => 'Elle est multipliée par 3', 'iscorrect' => true],
                            ['answer' => 'Elle est multipliée par 9', 'iscorrect' => false],
                            ['answer' => 'Elle reste inchangée', 'iscorrect' => false],
                            ['answer' => 'Elle est divisée par 3', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Que signifie une distribution asymétrique à droite des revenus ?',
                        'answers' => [
                            ['answer' => 'Une longue queue de valeurs élevées est présente du côté droit de la distribution', 'iscorrect' => true],
                            ['answer' => 'Toutes les valeurs sont identiques', 'iscorrect' => false],
                            ['answer' => 'La distribution possède nécessairement une queue plus longue à gauche', 'iscorrect' => false],
                            ['answer' => 'La moyenne est obligatoirement égale à zéro', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Dans une distribution fortement asymétrique à droite, quelle relation est souvent observée entre moyenne et médiane ?',
                        'answers' => [
                            ['answer' => 'La moyenne est supérieure à la médiane', 'iscorrect' => true],
                            ['answer' => 'La moyenne est toujours inférieure à la médiane', 'iscorrect' => false],
                            ['answer' => 'Elles sont toujours identiques', 'iscorrect' => false],
                            ['answer' => 'La médiane devient nécessairement négative', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce qu’un quantile ?',
                        'answers' => [
                            ['answer' => 'Une valeur qui divise les observations ordonnées selon une proportion donnée', 'iscorrect' => true],
                            ['answer' => 'La moyenne de toutes les observations', 'iscorrect' => false],
                            ['answer' => 'La différence entre maximum et minimum', 'iscorrect' => false],
                            ['answer' => 'Une fréquence absolue', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Que représente le troisième quartile ?',
                        'answers' => [
                            ['answer' => 'Une valeur en dessous de laquelle se situe approximativement 75 % des observations', 'iscorrect' => true],
                            ['answer' => 'Une valeur située exactement au minimum', 'iscorrect' => false],
                            ['answer' => 'Une valeur qui sépare toujours 25 % et 25 % des observations', 'iscorrect' => false],
                            ['answer' => 'La moyenne de la série', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Variance, écart-type et coefficient de variation',
                'questions' => [
                    [
                        'question' => 'Quelle est la moyenne de la série 2, 4, 6, 8 ?',
                        'answers' => [
                            ['answer' => '5', 'iscorrect' => true],
                            ['answer' => '4', 'iscorrect' => false],
                            ['answer' => '6', 'iscorrect' => false],
                            ['answer' => '5,5', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pour la série 2, 4, 6, 8, quelle est la variance population ?',
                        'answers' => [
                            ['answer' => '5', 'iscorrect' => true],
                            ['answer' => '4', 'iscorrect' => false],
                            ['answer' => '6', 'iscorrect' => false],
                            ['answer' => '8', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est l’écart-type correspondant à une variance de 49 ?',
                        'answers' => [
                            ['answer' => '7', 'iscorrect' => true],
                            ['answer' => '14', 'iscorrect' => false],
                            ['answer' => '6', 'iscorrect' => false],
                            ['answer' => '49', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi utilise-t-on souvent l’écart-type pour mesurer la dispersion ?',
                        'answers' => [
                            ['answer' => 'Il est exprimé dans la même unité que la variable étudiée', 'iscorrect' => true],
                            ['answer' => 'Il est toujours inférieur à la variance', 'iscorrect' => false],
                            ['answer' => 'Il ne dépend pas des écarts à la moyenne', 'iscorrect' => false],
                            ['answer' => 'Il mesure directement la causalité', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Si toutes les observations sont multipliées par 4, que devient leur variance ?',
                        'answers' => [
                            ['answer' => 'Elle est multipliée par 16', 'iscorrect' => true],
                            ['answer' => 'Elle est multipliée par 4', 'iscorrect' => false],
                            ['answer' => 'Elle est multipliée par 8', 'iscorrect' => false],
                            ['answer' => 'Elle reste inchangée', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Si toutes les observations sont multipliées par 4, que devient leur écart-type ?',
                        'answers' => [
                            ['answer' => 'Il est multiplié par 4', 'iscorrect' => true],
                            ['answer' => 'Il est multiplié par 16', 'iscorrect' => false],
                            ['answer' => 'Il reste inchangé', 'iscorrect' => false],
                            ['answer' => 'Il est divisé par 4', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le coefficient de variation ?',
                        'answers' => [
                            ['answer' => 'L’écart-type divisé par la moyenne', 'iscorrect' => true],
                            ['answer' => 'La moyenne divisée par la variance', 'iscorrect' => false],
                            ['answer' => 'La variance divisée par la moyenne', 'iscorrect' => false],
                            ['answer' => 'L’étendue divisée par la médiane', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi le coefficient de variation est-il utile pour comparer deux séries ?',
                        'answers' => [
                            ['answer' => 'Il mesure la dispersion relativement au niveau moyen', 'iscorrect' => true],
                            ['answer' => 'Il ignore toujours les unités', 'iscorrect' => false],
                            ['answer' => 'Il mesure la moyenne absolue uniquement', 'iscorrect' => false],
                            ['answer' => 'Il est indépendant de la dispersion', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Si une série a une moyenne de 100 et un écart-type de 20, quel est son coefficient de variation ?',
                        'answers' => [
                            ['answer' => '20 %', 'iscorrect' => true],
                            ['answer' => '5 %', 'iscorrect' => false],
                            ['answer' => '80 %', 'iscorrect' => false],
                            ['answer' => '50 %', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la variance est-elle toujours non négative ?',
                        'answers' => [
                            ['answer' => 'Elle est construite à partir de carrés d’écarts à la moyenne', 'iscorrect' => true],
                            ['answer' => 'Elle mesure toujours une hausse', 'iscorrect' => false],
                            ['answer' => 'La moyenne est toujours positive', 'iscorrect' => false],
                            ['answer' => 'Toutes les observations sont toujours positives', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Probabilités et variables aléatoires',
                'questions' => [
                    [
                        'question' => 'Si P(A) = 0,6, quelle est P(Aᶜ) ?',
                        'answers' => [
                            ['answer' => '0,4', 'iscorrect' => true],
                            ['answer' => '0,6', 'iscorrect' => false],
                            ['answer' => '1,6', 'iscorrect' => false],
                            ['answer' => '0,2', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Si A et B sont indépendants avec P(A) = 0,5 et P(B) = 0,4, quelle est P(A ∩ B) ?',
                        'answers' => [
                            ['answer' => '0,2', 'iscorrect' => true],
                            ['answer' => '0,9', 'iscorrect' => false],
                            ['answer' => '0,1', 'iscorrect' => false],
                            ['answer' => '0,4', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce qu’une variable aléatoire discrète ?',
                        'answers' => [
                            ['answer' => 'Une variable qui prend des valeurs dénombrables associées à des probabilités', 'iscorrect' => true],
                            ['answer' => 'Une variable toujours continue', 'iscorrect' => false],
                            ['answer' => 'Une variable sans distribution', 'iscorrect' => false],
                            ['answer' => 'Une variable nécessairement qualitative', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce que l’espérance mathématique d’une variable aléatoire ?',
                        'answers' => [
                            ['answer' => 'Une moyenne théorique pondérée par les probabilités des différentes valeurs', 'iscorrect' => true],
                            ['answer' => 'Toujours la valeur la plus probable', 'iscorrect' => false],
                            ['answer' => 'La variance de la variable', 'iscorrect' => false],
                            ['answer' => 'La valeur maximale possible', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Une variable prend 10 avec probabilité 0,7 et 20 avec probabilité 0,3. Quelle est son espérance ?',
                        'answers' => [
                            ['answer' => '13', 'iscorrect' => true],
                            ['answer' => '14', 'iscorrect' => false],
                            ['answer' => '15', 'iscorrect' => false],
                            ['answer' => '16', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi l’espérance ne représente-t-elle pas nécessairement une valeur effectivement observée ?',
                        'answers' => [
                            ['answer' => 'Elle constitue une moyenne théorique pondérée qui peut être différente de chaque réalisation individuelle', 'iscorrect' => true],
                            ['answer' => 'L’espérance est toujours une observation réelle', 'iscorrect' => false],
                            ['answer' => 'Elle est toujours égale au maximum', 'iscorrect' => false],
                            ['answer' => 'Elle est toujours égale au minimum', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Si X et Y sont indépendantes, quelle relation vaut pour leur covariance ?',
                        'answers' => [
                            ['answer' => 'La covariance est égale à zéro', 'iscorrect' => true],
                            ['answer' => 'Elle est toujours égale à 1', 'iscorrect' => false],
                            ['answer' => 'Elle est toujours positive', 'iscorrect' => false],
                            ['answer' => 'Elle est toujours négative', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle est la variance d’une variable constante ?',
                        'answers' => [
                            ['answer' => '0', 'iscorrect' => true],
                            ['answer' => '1', 'iscorrect' => false],
                            ['answer' => 'La constante elle-même', 'iscorrect' => false],
                            ['answer' => 'Elle est toujours infinie', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les distributions de probabilité sont-elles utiles en économie ?',
                        'answers' => [
                            ['answer' => 'Elles permettent de modéliser des résultats incertains comme les rendements, les défauts ou la demande', 'iscorrect' => true],
                            ['answer' => 'Elles rendent les résultats certains', 'iscorrect' => false],
                            ['answer' => 'Elles remplacent toutes les observations', 'iscorrect' => false],
                            ['answer' => 'Elles éliminent les risques', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce qu’une probabilité conditionnelle ?',
                        'answers' => [
                            ['answer' => 'La probabilité d’un événement sachant qu’une autre information ou condition est connue', 'iscorrect' => true],
                            ['answer' => 'La probabilité d’un événement certain', 'iscorrect' => false],
                            ['answer' => 'La variance d’une variable', 'iscorrect' => false],
                            ['answer' => 'La moyenne conditionnelle uniquement', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Loi binomiale et applications',
                'questions' => [
                    [
                        'question' => 'Quand la loi binomiale est-elle appropriée ?',
                        'answers' => [
                            ['answer' => 'Lorsque l’on compte le nombre de succès dans un nombre fixé d’essais indépendants de probabilité constante', 'iscorrect' => true],
                            ['answer' => 'Lorsque les essais sont nécessairement continus', 'iscorrect' => false],
                            ['answer' => 'Lorsque la variable n’a que des valeurs négatives', 'iscorrect' => false],
                            ['answer' => 'Uniquement pour des séries temporelles', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Dans une loi binomiale, que représente p ?',
                        'answers' => [
                            ['answer' => 'La probabilité de succès à chaque essai', 'iscorrect' => true],
                            ['answer' => 'Le nombre d’essais', 'iscorrect' => false],
                            ['answer' => 'Le nombre de succès observés', 'iscorrect' => false],
                            ['answer' => 'La variance', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Dans une loi binomiale avec n = 10 et p = 0,2, quelle est l’espérance ?',
                        'answers' => [
                            ['answer' => '2', 'iscorrect' => true],
                            ['answer' => '5', 'iscorrect' => false],
                            ['answer' => '0,2', 'iscorrect' => false],
                            ['answer' => '8', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Dans la même loi, quelle est la variance ?',
                        'answers' => [
                            ['answer' => '1,6', 'iscorrect' => true],
                            ['answer' => '2', 'iscorrect' => false],
                            ['answer' => '0,8', 'iscorrect' => false],
                            ['answer' => '3,2', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la loi binomiale peut-elle être utilisée pour modéliser certains défauts de paiement ?',
                        'answers' => [
                            ['answer' => 'Elle peut représenter le nombre de défauts parmi un nombre fixe d’emprunteurs lorsque les hypothèses du modèle sont raisonnables', 'iscorrect' => true],
                            ['answer' => 'Elle garantit que les défauts sont indépendants dans tous les cas réels', 'iscorrect' => false],
                            ['answer' => 'Elle ne concerne jamais les événements binaires', 'iscorrect' => false],
                            ['answer' => 'Elle mesure directement le taux d’intérêt', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Si p augmente dans une binomiale avec n fixé, que devient généralement l’espérance ?',
                        'answers' => [
                            ['answer' => 'Elle augmente', 'iscorrect' => true],
                            ['answer' => 'Elle diminue toujours', 'iscorrect' => false],
                            ['answer' => 'Elle reste identique', 'iscorrect' => false],
                            ['answer' => 'Elle devient nulle', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi l’hypothèse d’indépendance est-elle importante dans la loi binomiale ?',
                        'answers' => [
                            ['answer' => 'La probabilité d’un succès ne doit pas dépendre du résultat des autres essais dans le modèle standard', 'iscorrect' => true],
                            ['answer' => 'Elle garantit une probabilité nulle', 'iscorrect' => false],
                            ['answer' => 'Elle rend n inutile', 'iscorrect' => false],
                            ['answer' => 'Elle signifie que tous les résultats sont identiques', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Dans une binomiale, quelle est la variance lorsque n = 20 et p = 0,5 ?',
                        'answers' => [
                            ['answer' => '5', 'iscorrect' => true],
                            ['answer' => '10', 'iscorrect' => false],
                            ['answer' => '2,5', 'iscorrect' => false],
                            ['answer' => '4', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la binomiale est-elle utile pour les enquêtes avec réponses oui/non ?',
                        'answers' => [
                            ['answer' => 'Chaque réponse peut être considérée comme un essai à deux résultats dans un modèle approprié', 'iscorrect' => true],
                            ['answer' => 'Elle exige toujours des variables continues', 'iscorrect' => false],
                            ['answer' => 'Elle ne peut représenter que des prix', 'iscorrect' => false],
                            ['answer' => 'Elle ignore les probabilités', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle condition doit rester raisonnablement constante pour appliquer une binomiale standard ?',
                        'answers' => [
                            ['answer' => 'La probabilité de succès p entre les essais', 'iscorrect' => true],
                            ['answer' => 'La valeur de chaque observation économique', 'iscorrect' => false],
                            ['answer' => 'Le nombre de variables explicatives', 'iscorrect' => false],
                            ['answer' => 'Le niveau du PIB', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Corrélation et covariance',
                'questions' => [
                    [
                        'question' => 'Que mesure la covariance ?',
                        'answers' => [
                            ['answer' => 'La manière dont deux variables varient ensemble autour de leurs moyennes', 'iscorrect' => true],
                            ['answer' => 'La moyenne d’une variable uniquement', 'iscorrect' => false],
                            ['answer' => 'La causalité exacte entre deux variables', 'iscorrect' => false],
                            ['answer' => 'La différence entre leurs maximums', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel problème pose l’interprétation directe de la covariance lorsque les unités changent ?',
                        'answers' => [
                            ['answer' => 'Sa magnitude dépend des unités de mesure des deux variables', 'iscorrect' => true],
                            ['answer' => 'Elle devient toujours nulle', 'iscorrect' => false],
                            ['answer' => 'Elle devient toujours positive', 'iscorrect' => false],
                            ['answer' => 'Elle ne dépend jamais des unités', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi le coefficient de corrélation est-il compris entre -1 et 1 ?',
                        'answers' => [
                            ['answer' => 'Il est normalisé par les écarts-types des deux variables', 'iscorrect' => true],
                            ['answer' => 'Les probabilités sont toujours entre -1 et 1', 'iscorrect' => false],
                            ['answer' => 'La variance est toujours inférieure à 1', 'iscorrect' => false],
                            ['answer' => 'La moyenne impose cette limite', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Une covariance positive indique généralement que :',
                        'answers' => [
                            ['answer' => 'Les deux variables ont tendance à être au-dessus ou au-dessous de leur moyenne simultanément', 'iscorrect' => true],
                            ['answer' => 'Les variables sont nécessairement causalement liées', 'iscorrect' => false],
                            ['answer' => 'L’une augmente toujours lorsque l’autre diminue', 'iscorrect' => false],
                            ['answer' => 'Les deux variables sont identiques', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une corrélation nulle ne signifie-t-elle pas nécessairement indépendance ?',
                        'answers' => [
                            ['answer' => 'Une relation non linéaire peut exister même si l’association linéaire est nulle', 'iscorrect' => true],
                            ['answer' => 'Une corrélation nulle signifie toujours indépendance', 'iscorrect' => false],
                            ['answer' => 'Une variable nulle ne peut jamais varier', 'iscorrect' => false],
                            ['answer' => 'La corrélation mesure uniquement les fréquences', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les valeurs aberrantes peuvent-elles modifier fortement une corrélation ?',
                        'answers' => [
                            ['answer' => 'Elles peuvent fortement influencer les écarts à la moyenne et donc la covariance et les écarts-types', 'iscorrect' => true],
                            ['answer' => 'Les valeurs aberrantes sont ignorées automatiquement', 'iscorrect' => false],
                            ['answer' => 'La corrélation ne dépend pas des données', 'iscorrect' => false],
                            ['answer' => 'Elles réduisent toujours la corrélation à zéro', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle valeur de corrélation indique une association linéaire négative parfaite ?',
                        'answers' => [
                            ['answer' => '-1', 'iscorrect' => true],
                            ['answer' => '1', 'iscorrect' => false],
                            ['answer' => '0', 'iscorrect' => false],
                            ['answer' => '-0,5', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle valeur de corrélation indique une association linéaire positive parfaite ?',
                        'answers' => [
                            ['answer' => '1', 'iscorrect' => true],
                            ['answer' => '-1', 'iscorrect' => false],
                            ['answer' => '0', 'iscorrect' => false],
                            ['answer' => '0,5', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la corrélation ne doit-elle pas être utilisée seule pour établir une causalité économique ?',
                        'answers' => [
                            ['answer' => 'Des variables omises, la causalité inverse ou des tendances communes peuvent produire une association apparente', 'iscorrect' => true],
                            ['answer' => 'Une corrélation est toujours nulle', 'iscorrect' => false],
                            ['answer' => 'La causalité est toujours absente des données', 'iscorrect' => false],
                            ['answer' => 'Les variables économiques ne peuvent jamais être liées', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi standardiser les variables facilite-t-il certaines comparaisons statistiques ?',
                        'answers' => [
                            ['answer' => 'Cela met les variables sur une échelle commune en retirant notamment leur moyenne et en utilisant leur dispersion', 'iscorrect' => true],
                            ['answer' => 'Cela supprime toute information économique', 'iscorrect' => false],
                            ['answer' => 'Cela rend toutes les corrélations positives', 'iscorrect' => false],
                            ['answer' => 'Cela élimine les observations atypiques', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Échantillonnage et estimation',
                'questions' => [
                    [
                        'question' => 'Pourquoi utilise-t-on un échantillon plutôt que toute une population ?',
                        'answers' => [
                            ['answer' => 'Parce qu’un échantillon peut réduire les coûts et le temps de collecte tout en permettant une estimation de la population', 'iscorrect' => true],
                            ['answer' => 'Parce qu’un recensement est toujours impossible', 'iscorrect' => false],
                            ['answer' => 'Parce qu’un échantillon élimine toute erreur', 'iscorrect' => false],
                            ['answer' => 'Parce que la population n’a jamais d’intérêt', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce qu’un échantillon aléatoire simple ?',
                        'answers' => [
                            ['answer' => 'Un échantillon dans lequel chaque unité de la population a une probabilité connue et appropriée d’être sélectionnée', 'iscorrect' => true],
                            ['answer' => 'Un échantillon choisi uniquement parmi les grandes entreprises', 'iscorrect' => false],
                            ['answer' => 'Un échantillon constitué des premières observations disponibles', 'iscorrect' => false],
                            ['answer' => 'Un échantillon choisi exclusivement par préférence du chercheur', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce qu’un biais d’échantillonnage ?',
                        'answers' => [
                            ['answer' => 'Une sélection systématique qui rend l’échantillon non représentatif de la population cible', 'iscorrect' => true],
                            ['answer' => 'Une variation aléatoire autour de la vraie valeur', 'iscorrect' => false],
                            ['answer' => 'Une erreur de calcul de moyenne uniquement', 'iscorrect' => false],
                            ['answer' => 'Une augmentation de la taille de l’échantillon', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi augmenter la taille d’un échantillon réduit-il généralement l’erreur standard ?',
                        'answers' => [
                            ['answer' => 'Parce que l’information disponible augmente et que la variance de nombreux estimateurs diminue avec la taille', 'iscorrect' => true],
                            ['answer' => 'Parce que toutes les observations deviennent identiques', 'iscorrect' => false],
                            ['answer' => 'Parce que les biais disparaissent toujours', 'iscorrect' => false],
                            ['answer' => 'Parce que la moyenne devient automatiquement égale à la médiane', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce qu’un estimateur sans biais ?',
                        'answers' => [
                            ['answer' => 'Un estimateur dont l’espérance est égale à la valeur du paramètre qu’il cherche à estimer', 'iscorrect' => true],
                            ['answer' => 'Un estimateur toujours égal au paramètre dans chaque échantillon', 'iscorrect' => false],
                            ['answer' => 'Un estimateur dont la variance est nécessairement nulle', 'iscorrect' => false],
                            ['answer' => 'Un estimateur qui n’utilise aucune donnée', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la moyenne d’échantillon est-elle importante en statistiques économiques ?',
                        'answers' => [
                            ['answer' => 'Elle permet notamment d’estimer la moyenne de la population à partir des observations disponibles', 'iscorrect' => true],
                            ['answer' => 'Elle mesure directement la variance de la population', 'iscorrect' => false],
                            ['answer' => 'Elle élimine automatiquement tous les biais', 'iscorrect' => false],
                            ['answer' => 'Elle représente toujours la valeur maximale', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce qu’un intervalle de confiance ?',
                        'answers' => [
                            ['answer' => 'Un intervalle construit selon une procédure statistique destinée à couvrir le paramètre de population avec une fréquence donnée à long terme', 'iscorrect' => true],
                            ['answer' => 'Une plage contenant toujours toutes les observations individuelles', 'iscorrect' => false],
                            ['answer' => 'Une prédiction certaine du futur', 'iscorrect' => false],
                            ['answer' => 'Une mesure de la médiane uniquement', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Que se passe-t-il généralement avec la précision d’une estimation lorsque la taille de l’échantillon augmente ?',
                        'answers' => [
                            ['answer' => 'La précision augmente généralement et l’incertitude d’échantillonnage diminue', 'iscorrect' => true],
                            ['answer' => 'La précision diminue toujours', 'iscorrect' => false],
                            ['answer' => 'Elle reste toujours identique', 'iscorrect' => false],
                            ['answer' => 'L’estimation devient nécessairement biaisée', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un échantillon très grand peut-il malgré tout être biaisé ?',
                        'answers' => [
                            ['answer' => 'Une grande taille ne corrige pas automatiquement une méthode de sélection systématiquement non représentative', 'iscorrect' => true],
                            ['answer' => 'La taille élimine toujours tout biais', 'iscorrect' => false],
                            ['answer' => 'Les grands échantillons ne contiennent jamais d’information', 'iscorrect' => false],
                            ['answer' => 'Le biais dépend uniquement du nombre d’observations', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la représentativité est-elle importante pour une enquête économique ?',
                        'answers' => [
                            ['answer' => 'Elle conditionne la possibilité de généraliser les résultats de l’échantillon à la population cible', 'iscorrect' => true],
                            ['answer' => 'Elle garantit automatiquement la causalité', 'iscorrect' => false],
                            ['answer' => 'Elle remplace les calculs statistiques', 'iscorrect' => false],
                            ['answer' => 'Elle rend les variables indépendantes', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Tests statistiques et interprétation',
                'questions' => [
                    [
                        'question' => 'Qu’est-ce que l’hypothèse nulle H0 dans un test statistique ?',
                        'answers' => [
                            ['answer' => 'L’hypothèse de référence soumise au test statistique', 'iscorrect' => true],
                            ['answer' => 'La conclusion automatique du test', 'iscorrect' => false],
                            ['answer' => 'La moyenne de l’échantillon', 'iscorrect' => false],
                            ['answer' => 'La variance de la population', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Que signifie une petite p-value dans un test classique ?',
                        'answers' => [
                            ['answer' => 'Les données sont peu compatibles avec l’hypothèse nulle sous les hypothèses du test', 'iscorrect' => true],
                            ['answer' => 'L’hypothèse nulle est certainement fausse', 'iscorrect' => false],
                            ['answer' => 'L’effet économique est nécessairement important', 'iscorrect' => false],
                            ['answer' => 'La probabilité que H0 soit vraie est exactement égale à la p-value', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Que signifie généralement un seuil de 5 % dans un test d’hypothèse ?',
                        'answers' => [
                            ['answer' => 'C’est un niveau de significativité choisi pour décider lorsque les données sont suffisamment incompatibles avec H0', 'iscorrect' => true],
                            ['answer' => 'Il signifie que l’effet économique est de 5 %', 'iscorrect' => false],
                            ['answer' => 'Il garantit 95 % de probabilité que H1 soit vraie', 'iscorrect' => false],
                            ['answer' => 'Il représente toujours la taille de l’échantillon', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce qu’une erreur de type I ?',
                        'answers' => [
                            ['answer' => 'Rejeter l’hypothèse nulle alors qu’elle est vraie', 'iscorrect' => true],
                            ['answer' => 'Ne pas rejeter H0 alors qu’elle est vraie', 'iscorrect' => false],
                            ['answer' => 'Rejeter H1 alors qu’elle est vraie', 'iscorrect' => false],
                            ['answer' => 'Calculer incorrectement la moyenne', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce qu’une erreur de type II ?',
                        'answers' => [
                            ['answer' => 'Ne pas rejeter l’hypothèse nulle alors qu’elle est fausse', 'iscorrect' => true],
                            ['answer' => 'Rejeter H0 alors qu’elle est vraie', 'iscorrect' => false],
                            ['answer' => 'Calculer une variance négative', 'iscorrect' => false],
                            ['answer' => 'Choisir un mauvais graphique', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un résultat statistiquement significatif n’est-il pas nécessairement économiquement important ?',
                        'answers' => [
                            ['answer' => 'La significativité dépend notamment de la précision et de la taille de l’échantillon, tandis que l’importance dépend de la magnitude et du contexte', 'iscorrect' => true],
                            ['answer' => 'La significativité mesure directement le bien-être', 'iscorrect' => false],
                            ['answer' => 'Un petit effet est toujours sans valeur statistique', 'iscorrect' => false],
                            ['answer' => 'Toute significativité implique un impact économique majeur', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la taille d’échantillon influence-t-elle la puissance d’un test ?',
                        'answers' => [
                            ['answer' => 'Un échantillon plus grand réduit généralement l’incertitude et facilite la détection d’un effet réel', 'iscorrect' => true],
                            ['answer' => 'Une plus grande taille rend toujours les effets nuls', 'iscorrect' => false],
                            ['answer' => 'La puissance ne dépend jamais de la précision', 'iscorrect' => false],
                            ['answer' => 'La taille d’échantillon n’a aucun rôle dans les tests', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Que signifie « ne pas rejeter H0 » ?',
                        'answers' => [
                            ['answer' => 'Les données ne fournissent pas suffisamment d’éléments pour rejeter H0 au seuil choisi', 'iscorrect' => true],
                            ['answer' => 'H0 est prouvée vraie', 'iscorrect' => false],
                            ['answer' => 'H1 est forcément fausse', 'iscorrect' => false],
                            ['answer' => 'L’effet observé est nécessairement nul', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi le choix du test statistique doit-il tenir compte de la nature des données ?',
                        'answers' => [
                            ['answer' => 'Les hypothèses et les propriétés des méthodes diffèrent selon les variables, la distribution et la structure de l’échantillon', 'iscorrect' => true],
                            ['answer' => 'Tous les tests sont équivalents', 'iscorrect' => false],
                            ['answer' => 'La nature des données n’a aucun effet', 'iscorrect' => false],
                            ['answer' => 'Une seule méthode convient toujours', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi faut-il distinguer association statistique et causalité lors de l’interprétation d’un test ?',
                        'answers' => [
                            ['answer' => 'Un test peut détecter une relation statistique sans identifier nécessairement le mécanisme causal', 'iscorrect' => true],
                            ['answer' => 'Toute relation statistique est automatiquement causale', 'iscorrect' => false],
                            ['answer' => 'La causalité ne peut jamais être étudiée', 'iscorrect' => false],
                            ['answer' => 'Les tests statistiques mesurent directement les mécanismes économiques', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Séries temporelles économiques',
                'questions' => [
                    [
                        'question' => 'Qu’est-ce qu’une série temporelle ?',
                        'answers' => [
                            ['answer' => 'Une suite d’observations d’une variable enregistrées au cours du temps', 'iscorrect' => true],
                            ['answer' => 'Une série sans ordre temporel', 'iscorrect' => false],
                            ['answer' => 'Une variable qualitative uniquement', 'iscorrect' => false],
                            ['answer' => 'Une population sans observation répétée', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quels sont des composants classiques d’une série temporelle ?',
                        'answers' => [
                            ['answer' => 'Tendance, saisonnalité, cycle et composante irrégulière', 'iscorrect' => true],
                            ['answer' => 'Uniquement moyenne et médiane', 'iscorrect' => false],
                            ['answer' => 'Uniquement variance et covariance', 'iscorrect' => false],
                            ['answer' => 'Uniquement prix et quantité', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce qu’une tendance dans une série temporelle ?',
                        'answers' => [
                            ['answer' => 'Une évolution générale de long terme de la variable', 'iscorrect' => true],
                            ['answer' => 'Une variation quotidienne aléatoire uniquement', 'iscorrect' => false],
                            ['answer' => 'Une fluctuation saisonnière seulement', 'iscorrect' => false],
                            ['answer' => 'Une erreur de mesure uniquement', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce que la saisonnalité ?',
                        'answers' => [
                            ['answer' => 'Un motif régulier qui se répète à intervalles connus au sein de l’année ou d’une autre période définie', 'iscorrect' => true],
                            ['answer' => 'Une tendance qui ne change jamais', 'iscorrect' => false],
                            ['answer' => 'Une variation totalement imprévisible', 'iscorrect' => false],
                            ['answer' => 'Une erreur d’échantillonnage', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi le taux de croissance est-il souvent calculé à partir de séries temporelles ?',
                        'answers' => [
                            ['answer' => 'Pour mesurer l’évolution proportionnelle d’une variable entre deux périodes', 'iscorrect' => true],
                            ['answer' => 'Pour supprimer toutes les fluctuations', 'iscorrect' => false],
                            ['answer' => 'Pour transformer une variable en constante', 'iscorrect' => false],
                            ['answer' => 'Pour calculer uniquement la médiane', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi utilise-t-on parfois une moyenne mobile ?',
                        'answers' => [
                            ['answer' => 'Pour lisser certaines fluctuations à court terme et faire ressortir davantage la tendance', 'iscorrect' => true],
                            ['answer' => 'Pour augmenter systématiquement les valeurs', 'iscorrect' => false],
                            ['answer' => 'Pour supprimer toutes les données anciennes', 'iscorrect' => false],
                            ['answer' => 'Pour calculer une variance sans données', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les données mensuelles du chômage peuvent-elles présenter une saisonnalité ?',
                        'answers' => [
                            ['answer' => 'Certaines activités économiques et comportements d’emploi varient régulièrement selon les périodes de l’année', 'iscorrect' => true],
                            ['answer' => 'Le chômage est toujours constant', 'iscorrect' => false],
                            ['answer' => 'La saisonnalité est uniquement financière', 'iscorrect' => false],
                            ['answer' => 'Les emplois ne dépendent jamais des saisons', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi faut-il distinguer croissance nominale et croissance réelle dans une série temporelle de revenus ?',
                        'answers' => [
                            ['answer' => 'Une hausse du revenu nominal peut provenir en partie de la hausse des prix', 'iscorrect' => true],
                            ['answer' => 'Les prix n’ont aucun effet sur le revenu nominal', 'iscorrect' => false],
                            ['answer' => 'La croissance réelle est toujours plus élevée', 'iscorrect' => false],
                            ['answer' => 'Le revenu réel est toujours égal au revenu nominal', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les observations temporelles ne sont-elles pas toujours indépendantes ?',
                        'answers' => [
                            ['answer' => Les valeurs actuelles peuvent dépendre des valeurs passées ou de chocs persistants', 'iscorrect' => true],
                            ['answer' => 'Les séries temporelles sont toujours indépendantes par définition', 'iscorrect' => false],
                            ['answer' => 'Le temps supprime automatiquement toute dépendance', 'iscorrect' => false],
                            ['answer' => 'Les observations passées ne contiennent jamais d’information', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi cette dépendance temporelle est-elle importante pour les analyses statistiques ?',
                        'answers' => [
                            ['answer' => 'Elle peut modifier les erreurs standards, les prévisions et l’interprétation des relations estimées', 'iscorrect' => true],
                            ['answer' => 'Elle garantit toujours une meilleure précision', 'iscorrect' => false],
                            ['answer' => 'Elle élimine les tendances', 'iscorrect' => false],
                            ['answer' => 'Elle rend toutes les observations identiques', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Régression linéaire élémentaire',
                'questions' => [
                    [
                        'question' => 'Que cherche à représenter une régression linéaire simple ?',
                        'answers' => [
                            ['answer' => 'La relation moyenne entre une variable dépendante et une variable explicative', 'iscorrect' => true],
                            ['answer' => 'Une relation causale garantie', 'iscorrect' => false],
                            ['answer' => 'La distribution d’une seule variable uniquement', 'iscorrect' => false],
                            ['answer' => 'Une identité comptable nécessairement exacte', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Dans y = a + bx, que représente b ?',
                        'answers' => [
                            ['answer' => 'La variation attendue de y associée à une unité supplémentaire de x dans le modèle linéaire', 'iscorrect' => true],
                            ['answer' => 'La valeur de y lorsque x = 0', 'iscorrect' => false],
                            ['answer' => 'La variance de y', 'iscorrect' => false],
                            ['answer' => 'Le coefficient de corrélation', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Dans y = a + bx, que représente a ?',
                        'answers' => [
                            ['answer' => 'L’ordonnée à l’origine, c’est-à-dire la valeur prédite de y lorsque x = 0', 'iscorrect' => true],
                            ['answer' => 'La pente', 'iscorrect' => false],
                            ['answer' => 'L’erreur standard', 'iscorrect' => false],
                            ['answer' => 'La moyenne de x', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Si y = 10 + 3x, quelle valeur prédit-on pour x = 5 ?',
                        'answers' => [
                            ['answer' => '25', 'iscorrect' => true],
                            ['answer' => '20', 'iscorrect' => false],
                            ['answer' => '15', 'iscorrect' => false],
                            ['answer' => '30', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce qu’un résidu dans une régression ?',
                        'answers' => [
                            ['answer' => 'La différence entre la valeur observée et la valeur prédite', 'iscorrect' => true],
                            ['answer' => 'La différence entre deux moyennes', 'iscorrect' => false],
                            ['answer' => 'La variance de x', 'iscorrect' => false],
                            ['answer' => 'Le coefficient directeur', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi examine-t-on les résidus d’une régression ?',
                        'answers' => [
                            ['answer' => 'Pour vérifier si certaines hypothèses du modèle semblent raisonnables et détecter des structures non expliquées', 'iscorrect' => true],
                            ['answer' => 'Pour prouver automatiquement la causalité', 'iscorrect' => false],
                            ['answer' => 'Pour supprimer toutes les observations', 'iscorrect' => false],
                            ['answer' => 'Pour rendre le modèle non linéaire', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Que représente R² dans une régression linéaire classique ?',
                        'answers' => [
                            ['answer' => 'La part de la variation de la variable dépendante expliquée par le modèle dans l’échantillon', 'iscorrect' => true],
                            ['answer' => 'La probabilité que le modèle soit causal', 'iscorrect' => false],
                            ['answer' => 'La moyenne des résidus', 'iscorrect' => false],
                            ['answer' => 'Le nombre d’observations', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Un R² égal à 0,64 signifie généralement que :',
                        'answers' => [
                            ['answer' => 'Environ 64 % de la variation de y dans l’échantillon est expliquée par le modèle', 'iscorrect' => true],
                            ['answer' => 'La causalité est de 64 %', 'iscorrect' => false],
                            ['answer' => '64 % des observations sont correctes', 'iscorrect' => false],
                            ['answer' => 'La pente vaut 0,64', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une régression avec un R² élevé ne prouve-t-elle pas une causalité ?',
                        'answers' => [
                            ['answer' => 'Une forte association prédictive peut provenir de variables omises, d’une tendance commune ou d’un autre mécanisme', 'iscorrect' => true],
                            ['answer' => 'R² ne mesure jamais l’ajustement', 'iscorrect' => false],
                            ['answer' => 'Une causalité implique toujours R² = 0', 'iscorrect' => false],
                            ['answer' => 'Les variables économiques sont toujours indépendantes', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les variables explicatives doivent-elles être interprétées avec leur unité de mesure ?',
                        'answers' => [
                            ['answer' => 'La taille du coefficient dépend des unités utilisées pour mesurer les variables', 'iscorrect' => true],
                            ['answer' => 'Les unités n’ont aucun effet sur les coefficients', 'iscorrect' => false],
                            ['answer' => 'Les coefficients sont toujours des probabilités', 'iscorrect' => false],
                            ['answer' => 'Les unités déterminent automatiquement la causalité', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Échantillonnage, erreurs et qualité des données',
                'questions' => [
                    [
                        'question' => 'Quelle différence existe entre erreur d’échantillonnage et biais d’échantillonnage ?',
                        'answers' => [
                            ['answer' => 'L’erreur d’échantillonnage varie autour du paramètre tandis que le biais provient d’une procédure systématiquement déformante', 'iscorrect' => true],
                            ['answer' => 'Les deux termes désignent toujours exactement la même chose', 'iscorrect' => false],
                            ['answer' => 'Le biais disparaît toujours lorsque l’échantillon augmente', 'iscorrect' => false],
                            ['answer' => 'L’erreur d’échantillonnage est toujours positive', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les non-réponses peuvent-elles créer un biais ?',
                        'answers' => [
                            ['answer' => 'Les personnes qui ne répondent pas peuvent différer systématiquement de celles qui répondent', 'iscorrect' => true],
                            ['answer' => 'Les non-réponses sont toujours aléatoires', 'iscorrect' => false],
                            ['answer' => 'Elles augmentent automatiquement la représentativité', 'iscorrect' => false],
                            ['answer' => 'Elles n’ont jamais de conséquences statistiques', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les données administratives peuvent-elles être utiles aux économistes ?',
                        'answers' => [
                            ['answer' => 'Elles peuvent fournir de grands volumes de données issues de transactions ou de procédures institutionnelles réelles', 'iscorrect' => true],
                            ['answer' => 'Elles sont toujours parfaitement propres', 'iscorrect' => false],
                            ['answer' => 'Elles contiennent toujours toutes les variables nécessaires', 'iscorrect' => false],
                            ['answer' => 'Elles ne présentent jamais de biais', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les valeurs manquantes peuvent-elles poser problème ?',
                        'answers' => [
                            ['answer' => 'Elles peuvent modifier la composition de l’échantillon et biaiser certaines estimations selon leur mécanisme', 'iscorrect' => true],
                            ['answer' => 'Elles sont toujours sans conséquence', 'iscorrect' => false],
                            ['answer' => 'Elles augmentent toujours la taille effective de l’échantillon', 'iscorrect' => false],
                            ['answer' => 'Elles garantissent une meilleure précision', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi faut-il vérifier les unités et définitions des variables avant l’analyse ?',
                        'answers' => [
                            ['answer' => 'Une incohérence d’unité ou de définition peut conduire à des comparaisons et interprétations erronées', 'iscorrect' => true],
                            ['answer' => 'Les unités n’ont aucune importance', 'iscorrect' => false],
                            ['answer' => 'Toutes les bases utilisent nécessairement les mêmes définitions', 'iscorrect' => false],
                            ['answer' => 'Les erreurs de définition sont automatiquement corrigées par les logiciels', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les valeurs aberrantes doivent-elles être examinées avant de les supprimer ?',
                        'answers' => [
                            ['answer' => 'Elles peuvent correspondre à de véritables phénomènes économiques ou à des erreurs de saisie', 'iscorrect' => true],
                            ['answer' => 'Toutes les valeurs extrêmes sont nécessairement fausses', 'iscorrect' => false],
                            ['answer' => 'Elles sont toujours inutiles', 'iscorrect' => false],
                            ['answer' => 'Elles doivent toujours être remplacées par la moyenne', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une rupture de série peut-elle compliquer l’analyse d’une variable économique ?',
                        'answers' => [
                            ['answer' => 'Un changement de définition, de couverture ou de méthode peut empêcher une comparaison directe entre périodes', 'iscorrect' => true],
                            ['answer' => 'Les ruptures n’ont jamais d’effet', 'iscorrect' => false],
                            ['answer' => 'Une rupture signifie toujours une forte croissance', 'iscorrect' => false],
                            ['answer' => 'Elle rend la variable nécessairement stationnaire', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la documentation d’une base de données est-elle importante ?',
                        'answers' => [
                            ['answer' => 'Elle permet de comprendre les définitions, unités, sources et transformations des variables', 'iscorrect' => true],
                            ['answer' => 'Elle remplace l’analyse statistique', 'iscorrect' => false],
                            ['answer' => 'Elle élimine tous les biais', 'iscorrect' => false],
                            ['answer' => 'Elle garantit que les données sont parfaites', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une corrélation observée dans des données de mauvaise qualité peut-elle être trompeuse ?',
                        'answers' => [
                            ['answer' => 'Les erreurs de mesure ou les biais de sélection peuvent créer ou modifier l’association observée', 'iscorrect' => true],
                            ['answer' => 'La mauvaise qualité augmente toujours la précision', 'iscorrect' => false],
                            ['answer' => 'Les erreurs de mesure n’ont jamais d’effet statistique', 'iscorrect' => false],
                            ['answer' => 'La corrélation corrige automatiquement les données', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la reproductibilité est-elle importante dans l’analyse statistique économique ?',
                        'answers' => [
                            ['answer' => 'Elle permet de vérifier les étapes, les transformations et les résultats obtenus à partir des mêmes données', 'iscorrect' => true],
                            ['answer' => 'Elle garantit que l’hypothèse économique est vraie', 'iscorrect' => false],
                            ['answer' => 'Elle remplace la collecte des données', 'iscorrect' => false],
                            ['answer' => 'Elle supprime toute incertitude', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Analyse statistique appliquée aux indicateurs économiques',
                'questions' => [
                    [
                        'question' => 'Un taux de chômage passe de 8 % à 6 %. Quelle est la baisse en points de pourcentage ?',
                        'answers' => [
                            ['answer' => '2 points de pourcentage', 'iscorrect' => true],
                            ['answer' => '25 points', 'iscorrect' => false],
                            ['answer' => '2 %', 'iscorrect' => false],
                            ['answer' => '14 points', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'La baisse de 8 % à 6 % représente quelle variation relative du taux de chômage ?',
                        'answers' => [
                            ['answer' => '-25 %', 'iscorrect' => true],
                            ['answer' => '-2 %', 'iscorrect' => false],
                            ['answer' => '-20 %', 'iscorrect' => false],
                            ['answer' => '-12,5 %', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Un indice des prix passe de 120 à 126. Quel est le taux d’augmentation ?',
                        'answers' => [
                            ['answer' => '5 %', 'iscorrect' => true],
                            ['answer' => '6 %', 'iscorrect' => false],
                            ['answer' => '4 %', 'iscorrect' => false],
                            ['answer' => '10 %', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi faut-il distinguer points de pourcentage et pourcentage de variation ?',
                        'answers' => [
                            ['answer' => 'Les points de pourcentage mesurent une différence absolue entre taux, tandis que la variation relative compare cette différence au niveau initial', 'iscorrect' => true],
                            ['answer' => 'Les deux notions sont toujours identiques', 'iscorrect' => false],
                            ['answer' => 'Les points de pourcentage ne s’utilisent jamais en économie', 'iscorrect' => false],
                            ['answer' => 'Une variation relative est toujours exprimée en points', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Le PIB réel passe de 1 000 à 1 050. Quel est son taux de croissance ?',
                        'answers' => [
                            ['answer' => '5 %', 'iscorrect' => true],
                            ['answer' => '4 %', 'iscorrect' => false],
                            ['answer' => '10 %', 'iscorrect' => false],
                            ['answer' => '50 %', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les taux de croissance annuels doivent-ils être interprétés avec la durée considérée ?',
                        'answers' => [
                            ['answer' => 'Une même croissance annuelle composée produit des effets très différents selon le nombre de périodes', 'iscorrect' => true],
                            ['answer' => 'La durée n’a aucun effet', 'iscorrect' => false],
                            ['answer' => 'Tous les taux sont cumulés par addition simple', 'iscorrect' => false],
                            ['answer' => 'Une année et dix ans produisent toujours le même résultat', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi compare-t-on parfois le niveau d’un indicateur à une base 100 ?',
                        'answers' => [
                            ['answer' => 'Pour faciliter la lecture des variations relatives entre périodes ou groupes', 'iscorrect' => true],
                            ['answer' => 'Pour supprimer les différences absolues', 'iscorrect' => false],
                            ['answer' => 'Pour rendre toutes les variables monétaires', 'iscorrect' => false],
                            ['answer' => 'Pour calculer automatiquement une corrélation', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un indicateur économique peut-il augmenter même lorsque certaines composantes diminuent ?',
                        'answers' => [
                            ['answer' => 'Les autres composantes peuvent augmenter suffisamment pour compenser leur baisse', 'iscorrect' => true],
                            ['answer' => 'Un agrégat ne dépend jamais de ses composantes', 'iscorrect' => false],
                            ['answer' => 'Toutes les composantes évoluent nécessairement dans la même direction', 'iscorrect' => false],
                            ['answer' => 'Les statistiques empêchent toute baisse individuelle', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les moyennes pondérées sont-elles utiles pour construire certains indicateurs économiques ?',
                        'answers' => [
                            ['answer' => 'Elles permettent d’accorder plus de poids aux composantes ayant une importance économique plus grande', 'iscorrect' => true],
                            ['answer' => 'Elles donnent toujours le même poids à toutes les composantes', 'iscorrect' => false],
                            ['answer' => 'Elles ignorent la structure économique', 'iscorrect' => false],
                            ['answer' => 'Elles servent uniquement aux statistiques démographiques', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi l’interprétation statistique d’un indicateur doit-elle tenir compte de sa définition précise ?',
                        'answers' => [
                            ['answer' => 'Une même étiquette peut recouvrir des concepts, périmètres ou méthodes de calcul différents', 'iscorrect' => true],
                            ['answer' => 'Toutes les définitions statistiques sont identiques', 'iscorrect' => false],
                            ['answer' => 'La définition n’a aucun effet sur les comparaisons', 'iscorrect' => false],
                            ['answer' => 'Les méthodes sont toujours implicites', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],
        ];

        foreach ($quizzes as $quizData) {
            $quiz = Quiz::create([
                'subject_id' => $subject->id,
                'title' => $quizData['title'],
                'level' => 'Intermediate',
            ]);

            foreach ($quizData['questions'] as $questionData) {
                $question = Question::create([
                    'quiz_id' => $quiz->id,
                    'question' => $questionData['question'],
                ]);

                // Mélange des réponses : la bonne réponse n'est pas systématiquement en première position.
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
