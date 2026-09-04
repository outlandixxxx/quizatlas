```php id="z8x4jm"
<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Major;
use App\Models\Subject;
use App\Models\Quiz;
use App\Models\Question;
use App\Models\Answer;

class EconomicStatisticsBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $major = Major::where('slug', 'economy')->firstOrFail();

        $subject = Subject::where('major_id', $major->id)
            ->where('slug', 'economic-statistics')
            ->firstOrFail();

        $quizzes = [
            [
                'title' => 'Introduction aux statistiques économiques',
                'questions' => [
                    [
                        'question' => 'Quel est l’objectif principal des statistiques économiques ?',
                        'answers' => [
                            ['answer' => 'Collecter, organiser, analyser et interpréter des données économiques', 'iscorrect' => true],
                            ['answer' => 'Fixer directement les prix de tous les biens', 'iscorrect' => false],
                            ['answer' => 'Remplacer les décisions des entreprises', 'iscorrect' => false],
                            ['answer' => 'Éliminer toute incertitude économique', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce qu’une donnée statistique ?',
                        'answers' => [
                            ['answer' => 'Une information recueillie sur une variable ou un phénomène observé', 'iscorrect' => true],
                            ['answer' => 'Uniquement une donnée financière', 'iscorrect' => false],
                            ['answer' => 'Une opinion personnelle sans observation', 'iscorrect' => false],
                            ['answer' => 'Une formule mathématique uniquement', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce qu’une population statistique ?',
                        'answers' => [
                            ['answer' => 'L’ensemble des unités étudiées dans une analyse statistique', 'iscorrect' => true],
                            ['answer' => 'Uniquement les personnes employées', 'iscorrect' => false],
                            ['answer' => 'Un seul élément observé', 'iscorrect' => false],
                            ['answer' => 'Uniquement les entreprises publiques', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce qu’un échantillon ?',
                        'answers' => [
                            ['answer' => 'Une partie de la population sélectionnée pour être étudiée', 'iscorrect' => true],
                            ['answer' => 'La totalité de la population mondiale', 'iscorrect' => false],
                            ['answer' => 'Une variable économique', 'iscorrect' => false],
                            ['answer' => 'Une moyenne calculée à partir d’un seul individu', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce qu’une variable statistique ?',
                        'answers' => [
                            ['answer' => 'Une caractéristique qui peut prendre différentes valeurs selon les observations', 'iscorrect' => true],
                            ['answer' => 'Une valeur toujours constante', 'iscorrect' => false],
                            ['answer' => 'Une population entière', 'iscorrect' => false],
                            ['answer' => 'Une méthode de collecte uniquement', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Laquelle de ces variables est quantitative ?',
                        'answers' => [
                            ['answer' => 'Le revenu mensuel d’un ménage', 'iscorrect' => true],
                            ['answer' => 'Le secteur d’activité', 'iscorrect' => false],
                            ['answer' => 'La catégorie professionnelle', 'iscorrect' => false],
                            ['answer' => 'Le type de contrat', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Laquelle de ces variables est qualitative ?',
                        'answers' => [
                            ['answer' => 'Le secteur d’activité d’une entreprise', 'iscorrect' => true],
                            ['answer' => 'Le salaire mensuel', 'iscorrect' => false],
                            ['answer' => 'Le nombre d’employés', 'iscorrect' => false],
                            ['answer' => 'Le chiffre d’affaires', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les statistiques sont-elles importantes en économie ?',
                        'answers' => [
                            ['answer' => 'Elles permettent de résumer les données et d’identifier des tendances économiques', 'iscorrect' => true],
                            ['answer' => 'Elles rendent toutes les prévisions certaines', 'iscorrect' => false],
                            ['answer' => 'Elles remplacent toute analyse économique', 'iscorrect' => false],
                            ['answer' => 'Elles empêchent les variations économiques', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce qu’une observation statistique ?',
                        'answers' => [
                            ['answer' => 'Une valeur ou un ensemble de caractéristiques enregistrées pour une unité étudiée', 'iscorrect' => true],
                            ['answer' => 'Uniquement une moyenne nationale', 'iscorrect' => false],
                            ['answer' => 'Une hypothèse économique', 'iscorrect' => false],
                            ['answer' => 'Une politique publique', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle est une utilisation courante des statistiques économiques ?',
                        'answers' => [
                            ['answer' => 'Analyser l’évolution du PIB, des prix, du chômage ou des revenus', 'iscorrect' => true],
                            ['answer' => 'Fixer les préférences des consommateurs', 'iscorrect' => false],
                            ['answer' => 'Garantir les bénéfices des entreprises', 'iscorrect' => false],
                            ['answer' => 'Supprimer toutes les fluctuations économiques', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Tableaux, fréquences et distributions',
                'questions' => [
                    [
                        'question' => 'Qu’est-ce qu’une fréquence statistique ?',
                        'answers' => [
                            ['answer' => 'La proportion d’observations correspondant à une modalité ou une valeur', 'iscorrect' => true],
                            ['answer' => 'La somme de toutes les valeurs observées', 'iscorrect' => false],
                            ['answer' => 'La différence entre deux observations', 'iscorrect' => false],
                            ['answer' => 'Le maximum de la série', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Une classe contient 20 observations sur un total de 100. Quelle est sa fréquence ?',
                        'answers' => [
                            ['answer' => '20 %', 'iscorrect' => true],
                            ['answer' => '10 %', 'iscorrect' => false],
                            ['answer' => '25 %', 'iscorrect' => false],
                            ['answer' => '5 %', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi construit-on un tableau de fréquences ?',
                        'answers' => [
                            ['answer' => 'Pour résumer la répartition des observations selon les différentes valeurs ou catégories', 'iscorrect' => true],
                            ['answer' => 'Pour supprimer les observations', 'iscorrect' => false],
                            ['answer' => 'Pour remplacer toute représentation graphique', 'iscorrect' => false],
                            ['answer' => 'Pour calculer uniquement le PIB', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Que représente une fréquence cumulée ?',
                        'answers' => [
                            ['answer' => 'La proportion d’observations inférieures ou égales à une valeur donnée selon le classement utilisé', 'iscorrect' => true],
                            ['answer' => 'La somme des prix uniquement', 'iscorrect' => false],
                            ['answer' => 'La différence entre maximum et minimum', 'iscorrect' => false],
                            ['answer' => 'La moyenne de toutes les fréquences', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Si les fréquences de quatre catégories sont 20 %, 30 %, 10 % et 40 %, leur total est :',
                        'answers' => [
                            ['answer' => '100 %', 'iscorrect' => true],
                            ['answer' => '90 %', 'iscorrect' => false],
                            ['answer' => '110 %', 'iscorrect' => false],
                            ['answer' => '80 %', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les classes sont-elles parfois utilisées pour présenter des données quantitatives ?',
                        'answers' => [
                            ['answer' => 'Elles permettent de résumer une grande quantité de valeurs en intervalles', 'iscorrect' => true],
                            ['answer' => 'Elles rendent toutes les valeurs identiques', 'iscorrect' => false],
                            ['answer' => 'Elles éliminent les données extrêmes', 'iscorrect' => false],
                            ['answer' => 'Elles remplacent les observations originales dans tous les cas', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Une série contient 50 entreprises dont 15 sont exportatrices. Quelle est la fréquence des entreprises exportatrices ?',
                        'answers' => [
                            ['answer' => '30 %', 'iscorrect' => true],
                            ['answer' => '15 %', 'iscorrect' => false],
                            ['answer' => '25 %', 'iscorrect' => false],
                            ['answer' => '35 %', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est l’intérêt d’une fréquence relative par rapport à un simple effectif ?',
                        'answers' => [
                            ['answer' => 'Elle permet de comparer des répartitions même lorsque les tailles des populations diffèrent', 'iscorrect' => true],
                            ['answer' => 'Elle supprime toute information sur la taille', 'iscorrect' => false],
                            ['answer' => 'Elle est toujours supérieure à l’effectif', 'iscorrect' => false],
                            ['answer' => 'Elle ne peut pas être exprimée en pourcentage', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce qu’un effectif ?',
                        'answers' => [
                            ['answer' => 'Le nombre d’observations appartenant à une valeur ou une catégorie', 'iscorrect' => true],
                            ['answer' => 'La moyenne des observations', 'iscorrect' => false],
                            ['answer' => 'La différence entre deux valeurs', 'iscorrect' => false],
                            ['answer' => 'La valeur maximale uniquement', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les tableaux statistiques facilitent-ils l’analyse économique ?',
                        'answers' => [
                            ['answer' => 'Ils organisent les données et rendent leur répartition plus facile à examiner', 'iscorrect' => true],
                            ['answer' => 'Ils rendent les données automatiquement exactes', 'iscorrect' => false],
                            ['answer' => 'Ils éliminent toutes les valeurs atypiques', 'iscorrect' => false],
                            ['answer' => 'Ils remplacent toute interprétation économique', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Moyenne, médiane et mode',
                'questions' => [
                    [
                        'question' => 'Quelle est la moyenne arithmétique de 10, 20 et 30 ?',
                        'answers' => [
                            ['answer' => '20', 'iscorrect' => true],
                            ['answer' => '15', 'iscorrect' => false],
                            ['answer' => '25', 'iscorrect' => false],
                            ['answer' => '30', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle est la médiane de 3, 5, 7, 9 et 11 ?',
                        'answers' => [
                            ['answer' => '7', 'iscorrect' => true],
                            ['answer' => '5', 'iscorrect' => false],
                            ['answer' => '9', 'iscorrect' => false],
                            ['answer' => '11', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle est la moyenne de 5, 10, 15 et 20 ?',
                        'answers' => [
                            ['answer' => '12,5', 'iscorrect' => true],
                            ['answer' => '10', 'iscorrect' => false],
                            ['answer' => '15', 'iscorrect' => false],
                            ['answer' => '13,5', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle est la médiane de 4, 8, 10 et 20 ?',
                        'answers' => [
                            ['answer' => '9', 'iscorrect' => true],
                            ['answer' => '8', 'iscorrect' => false],
                            ['answer' => '10', 'iscorrect' => false],
                            ['answer' => '12', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce que le mode ?',
                        'answers' => [
                            ['answer' => 'La valeur ou catégorie la plus fréquente dans une série', 'iscorrect' => true],
                            ['answer' => 'La valeur moyenne', 'iscorrect' => false],
                            ['answer' => 'La valeur centrale', 'iscorrect' => false],
                            ['answer' => 'La plus grande valeur', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle mesure est généralement plus résistante aux valeurs extrêmes ?',
                        'answers' => [
                            ['answer' => 'La médiane', 'iscorrect' => true],
                            ['answer' => 'La moyenne arithmétique', 'iscorrect' => false],
                            ['answer' => 'La somme', 'iscorrect' => false],
                            ['answer' => 'Le maximum', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Si les revenus sont 1 000, 1 200, 1 500, 1 800 et 20 000, quelle mesure est généralement la plus représentative du centre lorsque la distribution est très asymétrique ?',
                        'answers' => [
                            ['answer' => 'La médiane', 'iscorrect' => true],
                            ['answer' => 'La moyenne', 'iscorrect' => false],
                            ['answer' => 'Le maximum', 'iscorrect' => false],
                            ['answer' => 'La somme', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Que se passe-t-il avec la moyenne si toutes les observations augmentent de 10 unités ?',
                        'answers' => [
                            ['answer' => 'La moyenne augmente également de 10 unités', 'iscorrect' => true],
                            ['answer' => 'La moyenne reste inchangée', 'iscorrect' => false],
                            ['answer' => 'La moyenne augmente de 100 unités', 'iscorrect' => false],
                            ['answer' => 'La moyenne diminue de 10 unités', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Que se passe-t-il avec la moyenne si toutes les observations sont multipliées par 2 ?',
                        'answers' => [
                            ['answer' => 'La moyenne est multipliée par 2', 'iscorrect' => true],
                            ['answer' => 'La moyenne reste identique', 'iscorrect' => false],
                            ['answer' => 'La moyenne est multipliée par 4', 'iscorrect' => false],
                            ['answer' => 'La moyenne est divisée par 2', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la moyenne est-elle couramment utilisée en économie ?',
                        'answers' => [
                            ['answer' => 'Elle fournit une mesure synthétique du niveau moyen d’une variable quantitative', 'iscorrect' => true],
                            ['answer' => 'Elle ignore toutes les observations', 'iscorrect' => false],
                            ['answer' => 'Elle fonctionne uniquement avec des catégories qualitatives', 'iscorrect' => false],
                            ['answer' => 'Elle est toujours égale à la médiane', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Dispersion et étendue',
                'questions' => [
                    [
                        'question' => 'Que mesure l’étendue d’une série ?',
                        'answers' => [
                            ['answer' => 'La différence entre la valeur maximale et la valeur minimale', 'iscorrect' => true],
                            ['answer' => 'La moyenne des observations', 'iscorrect' => false],
                            ['answer' => 'La valeur centrale', 'iscorrect' => false],
                            ['answer' => 'La fréquence maximale', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle est l’étendue de 10, 15, 20 et 35 ?',
                        'answers' => [
                            ['answer' => '25', 'iscorrect' => true],
                            ['answer' => '20', 'iscorrect' => false],
                            ['answer' => '30', 'iscorrect' => false],
                            ['answer' => '15', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce qu’une mesure de dispersion ?',
                        'answers' => [
                            ['answer' => 'Un indicateur de la manière dont les observations sont réparties autour d’une valeur centrale', 'iscorrect' => true],
                            ['answer' => 'Une mesure uniquement du niveau moyen', 'iscorrect' => false],
                            ['answer' => 'Une mesure de la fréquence d’une seule modalité', 'iscorrect' => false],
                            ['answer' => 'Une mesure de la population totale uniquement', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la dispersion est-elle importante en économie ?',
                        'answers' => [
                            ['answer' => 'Deux économies peuvent avoir la même moyenne mais des niveaux de variation très différents', 'iscorrect' => true],
                            ['answer' => 'Elle remplace toujours la moyenne', 'iscorrect' => false],
                            ['answer' => 'Elle ne concerne que les variables qualitatives', 'iscorrect' => false],
                            ['answer' => 'Elle élimine les écarts entre individus', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Une série A a une étendue de 10 et une série B une étendue de 100. Laquelle est plus dispersée selon cette mesure ?',
                        'answers' => [
                            ['answer' => 'La série B', 'iscorrect' => true],
                            ['answer' => 'La série A', 'iscorrect' => false],
                            ['answer' => 'Les deux sont identiques', 'iscorrect' => false],
                            ['answer' => 'Impossible à déterminer avec l’étendue', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est un inconvénient de l’étendue comme mesure de dispersion ?',
                        'answers' => [
                            ['answer' => 'Elle ne dépend que des deux valeurs extrêmes et ignore la distribution des autres observations', 'iscorrect' => true],
                            ['answer' => 'Elle utilise toutes les observations avec le même poids', 'iscorrect' => false],
                            ['answer' => 'Elle est impossible à calculer', 'iscorrect' => false],
                            ['answer' => 'Elle donne toujours une valeur négative', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Si toutes les observations sont augmentées de 20, que devient l’étendue ?',
                        'answers' => [
                            ['answer' => 'Elle reste inchangée', 'iscorrect' => true],
                            ['answer' => 'Elle augmente de 20', 'iscorrect' => false],
                            ['answer' => 'Elle double', 'iscorrect' => false],
                            ['answer' => 'Elle devient nulle', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Si toutes les observations sont multipliées par 3, que devient l’étendue ?',
                        'answers' => [
                            ['answer' => 'Elle est multipliée par 3', 'iscorrect' => true],
                            ['answer' => 'Elle reste inchangée', 'iscorrect' => false],
                            ['answer' => 'Elle augmente de 3 seulement', 'iscorrect' => false],
                            ['answer' => 'Elle est divisée par 3', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle situation illustre une forte dispersion des revenus ?',
                        'answers' => [
                            ['answer' => 'Les revenus sont très éloignés les uns des autres', 'iscorrect' => true],
                            ['answer' => 'Tous les revenus sont identiques', 'iscorrect' => false],
                            ['answer' => 'Tous les revenus sont proches de la moyenne', 'iscorrect' => false],
                            ['answer' => 'Il n’existe qu’un seul revenu', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la dispersion complète l’information fournie par la moyenne ?',
                        'answers' => [
                            ['answer' => 'Elle indique si les observations sont concentrées ou largement réparties autour du niveau central', 'iscorrect' => true],
                            ['answer' => 'Elle donne toujours le même résultat que la moyenne', 'iscorrect' => false],
                            ['answer' => 'Elle mesure uniquement les valeurs maximales', 'iscorrect' => false],
                            ['answer' => 'Elle remplace tous les graphiques', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Variance et écart-type',
                'questions' => [
                    [
                        'question' => 'Que mesure la variance ?',
                        'answers' => [
                            ['answer' => 'La dispersion moyenne des observations autour de leur moyenne à travers les écarts au carré', 'iscorrect' => true],
                            ['answer' => 'La valeur maximale uniquement', 'iscorrect' => false],
                            ['answer' => 'La fréquence de la modalité principale', 'iscorrect' => false],
                            ['answer' => 'La moyenne des prix uniquement', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi élève-t-on les écarts à la moyenne au carré dans le calcul de la variance ?',
                        'answers' => [
                            ['answer' => 'Pour éviter que les écarts positifs et négatifs se compensent', 'iscorrect' => true],
                            ['answer' => 'Pour rendre toutes les observations égales', 'iscorrect' => false],
                            ['answer' => 'Pour supprimer les grandes valeurs', 'iscorrect' => false],
                            ['answer' => 'Pour obtenir nécessairement une variance négative', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle est la variance de la série 5, 5, 5, 5 ?',
                        'answers' => [
                            ['answer' => '0', 'iscorrect' => true],
                            ['answer' => '5', 'iscorrect' => false],
                            ['answer' => '1', 'iscorrect' => false],
                            ['answer' => '25', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Si toutes les observations sont identiques, l’écart-type est :',
                        'answers' => [
                            ['answer' => 'Égal à zéro', 'iscorrect' => true],
                            ['answer' => 'Toujours égal à 1', 'iscorrect' => false],
                            ['answer' => 'Toujours négatif', 'iscorrect' => false],
                            ['answer' => 'Égal à la moyenne', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle relation existe entre variance et écart-type ?',
                        'answers' => [
                            ['answer' => 'L’écart-type est la racine carrée de la variance', 'iscorrect' => true],
                            ['answer' => 'La variance est la racine carrée de l’écart-type', 'iscorrect' => false],
                            ['answer' => 'Ils sont toujours identiques', 'iscorrect' => false],
                            ['answer' => 'Ils ont toujours des signes opposés', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi l’écart-type est-il souvent plus facile à interpréter que la variance ?',
                        'answers' => [
                            ['answer' => 'Il est exprimé dans la même unité que la variable étudiée', 'iscorrect' => true],
                            ['answer' => 'Il est toujours plus petit que zéro', 'iscorrect' => false],
                            ['answer' => 'Il ignore les écarts', 'iscorrect' => false],
                            ['answer' => 'Il est indépendant de la moyenne', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Si la variance d’une série est 25, quel est son écart-type ?',
                        'answers' => [
                            ['answer' => '5', 'iscorrect' => true],
                            ['answer' => '10', 'iscorrect' => false],
                            ['answer' => '25', 'iscorrect' => false],
                            ['answer' => '2,5', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Si toutes les observations sont multipliées par 2, que devient la variance ?',
                        'answers' => [
                            ['answer' => 'Elle est multipliée par 4', 'iscorrect' => true],
                            ['answer' => 'Elle est multipliée par 2', 'iscorrect' => false],
                            ['answer' => 'Elle reste inchangée', 'iscorrect' => false],
                            ['answer' => 'Elle est divisée par 2', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Si toutes les observations sont multipliées par 3, que devient l’écart-type ?',
                        'answers' => [
                            ['answer' => 'Il est multiplié par 3', 'iscorrect' => true],
                            ['answer' => 'Il est multiplié par 9', 'iscorrect' => false],
                            ['answer' => 'Il reste inchangé', 'iscorrect' => false],
                            ['answer' => 'Il est divisé par 3', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une variance plus élevée indique-t-elle généralement une plus grande dispersion ?',
                        'answers' => [
                            ['answer' => 'Les écarts au carré autour de la moyenne sont en moyenne plus importants', 'iscorrect' => true],
                            ['answer' => 'La moyenne est nécessairement plus élevée', 'iscorrect' => false],
                            ['answer' => 'Les observations deviennent identiques', 'iscorrect' => false],
                            ['answer' => 'Le nombre d’observations diminue toujours', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Probabilités pour l’économie',
                'questions' => [
                    [
                        'question' => 'Quelle est la probabilité d’obtenir un nombre pair avec un dé équilibré à six faces ?',
                        'answers' => [
                            ['answer' => '1/2', 'iscorrect' => true],
                            ['answer' => '1/3', 'iscorrect' => false],
                            ['answer' => '1/6', 'iscorrect' => false],
                            ['answer' => '2/3', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle est la probabilité d’obtenir un 6 avec un dé équilibré ?',
                        'answers' => [
                            ['answer' => '1/6', 'iscorrect' => true],
                            ['answer' => '1/3', 'iscorrect' => false],
                            ['answer' => '1/2', 'iscorrect' => false],
                            ['answer' => '1/4', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle est la probabilité d’un événement certain ?',
                        'answers' => [
                            ['answer' => '1', 'iscorrect' => true],
                            ['answer' => '0', 'iscorrect' => false],
                            ['answer' => '0,5', 'iscorrect' => false],
                            ['answer' => '-1', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle est la probabilité d’un événement impossible ?',
                        'answers' => [
                            ['answer' => '0', 'iscorrect' => true],
                            ['answer' => '1', 'iscorrect' => false],
                            ['answer' => '0,5', 'iscorrect' => false],
                            ['answer' => '-1', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Si un événement A a une probabilité de 0,7, quelle est la probabilité de son complément ?',
                        'answers' => [
                            ['answer' => '0,3', 'iscorrect' => true],
                            ['answer' => '0,7', 'iscorrect' => false],
                            ['answer' => '1,7', 'iscorrect' => false],
                            ['answer' => '0,2', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les probabilités sont-elles utiles en économie ?',
                        'answers' => [
                            ['answer' => 'Elles permettent de représenter l’incertitude concernant certains événements économiques', 'iscorrect' => true],
                            ['answer' => 'Elles rendent tous les événements certains', 'iscorrect' => false],
                            ['answer' => 'Elles suppriment tous les risques', 'iscorrect' => false],
                            ['answer' => 'Elles remplacent les données observées', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Si deux événements sont indépendants, que peut-on dire de leur occurrence ?',
                        'answers' => [
                            ['answer' => 'La réalisation de l’un ne modifie pas la probabilité de l’autre', 'iscorrect' => true],
                            ['answer' => 'Ils doivent toujours se produire ensemble', 'iscorrect' => false],
                            ['answer' => 'Ils ne peuvent jamais se produire ensemble', 'iscorrect' => false],
                            ['answer' => 'Ils ont forcément la même probabilité', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Si deux événements ont des probabilités 0,4 et 0,5 et sont indépendants, quelle est la probabilité qu’ils se produisent tous les deux ?',
                        'answers' => [
                            ['answer' => '0,2', 'iscorrect' => true],
                            ['answer' => '0,9', 'iscorrect' => false],
                            ['answer' => '0,45', 'iscorrect' => false],
                            ['answer' => '0,1', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce qu’une probabilité conditionnelle ?',
                        'answers' => [
                            ['answer' => 'La probabilité qu’un événement se produise sachant qu’une autre information est connue', 'iscorrect' => true],
                            ['answer' => 'La probabilité d’un événement certain', 'iscorrect' => false],
                            ['answer' => 'La moyenne d’une série', 'iscorrect' => false],
                            ['answer' => 'La variance d’une variable', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les probabilités conditionnelles peuvent-elles être utiles dans l’analyse économique ?',
                        'answers' => [
                            ['answer' => 'Elles permettent d’actualiser une évaluation lorsqu’une nouvelle information devient disponible', 'iscorrect' => true],
                            ['answer' => 'Elles éliminent toute incertitude', 'iscorrect' => false],
                            ['answer' => 'Elles rendent les données indépendantes', 'iscorrect' => false],
                            ['answer' => 'Elles remplacent toujours les observations', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Corrélation et relation entre variables',
                'questions' => [
                    [
                        'question' => 'Que mesure généralement une corrélation ?',
                        'answers' => [
                            ['answer' => 'La direction et l’intensité de l’association linéaire entre deux variables', 'iscorrect' => true],
                            ['answer' => 'La causalité certaine entre deux variables', 'iscorrect' => false],
                            ['answer' => 'La moyenne d’une seule variable', 'iscorrect' => false],
                            ['answer' => 'La différence entre maximum et minimum', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Que signifie une corrélation proche de +1 ?',
                        'answers' => [
                            ['answer' => 'Une forte association linéaire positive', 'iscorrect' => true],
                            ['answer' => 'Une forte association négative', 'iscorrect' => false],
                            ['answer' => 'Aucune relation linéaire', 'iscorrect' => false],
                            ['answer' => 'Une causalité parfaite', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Que signifie une corrélation proche de -1 ?',
                        'answers' => [
                            ['answer' => 'Une forte association linéaire négative', 'iscorrect' => true],
                            ['answer' => 'Une forte association positive', 'iscorrect' => false],
                            ['answer' => 'Une absence de relation', 'iscorrect' => false],
                            ['answer' => 'Une égalité parfaite des variables', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Que signifie une corrélation proche de 0 dans le cadre linéaire ?',
                        'answers' => [
                            ['answer' => 'Une faible ou une absence d’association linéaire', 'iscorrect' => true],
                            ['answer' => 'Une causalité nulle dans tous les cas', 'iscorrect' => false],
                            ['answer' => 'Une forte relation positive', 'iscorrect' => false],
                            ['answer' => 'Une forte relation négative', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Une corrélation positive entre revenu et consommation signifie généralement que :',
                        'answers' => [
                            ['answer' => 'Les revenus plus élevés sont associés à des niveaux de consommation plus élevés dans les données observées', 'iscorrect' => true],
                            ['answer' => 'Le revenu provoque nécessairement toute variation de consommation', 'iscorrect' => false],
                            ['answer' => 'Les deux variables sont identiques', 'iscorrect' => false],
                            ['answer' => 'La consommation est indépendante du revenu', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une corrélation élevée ne prouve-t-elle pas nécessairement une causalité ?',
                        'answers' => [
                            ['answer' => 'Une troisième variable ou un autre mécanisme peut expliquer l’association observée', 'iscorrect' => true],
                            ['answer' => 'La corrélation ne peut jamais être positive', 'iscorrect' => false],
                            ['answer' => 'La causalité et la corrélation sont toujours identiques', 'iscorrect' => false],
                            ['answer' => 'Une corrélation ne dépend jamais des données', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel graphique est souvent utilisé pour examiner visuellement une relation entre deux variables quantitatives ?',
                        'answers' => [
                            ['answer' => 'Le nuage de points', 'iscorrect' => true],
                            ['answer' => 'Le diagramme circulaire uniquement', 'iscorrect' => false],
                            ['answer' => 'Le tableau de fréquences uniquement', 'iscorrect' => false],
                            ['answer' => 'L’organigramme', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Si les points d’un nuage sont globalement orientés vers le haut de gauche à droite, la corrélation est probablement :',
                        'answers' => [
                            ['answer' => 'Positive', 'iscorrect' => true],
                            ['answer' => 'Négative', 'iscorrect' => false],
                            ['answer' => 'Nécessairement nulle', 'iscorrect' => false],
                            ['answer' => 'Toujours égale à -1', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Si les points sont globalement orientés vers le bas de gauche à droite, la corrélation est probablement :',
                        'answers' => [
                            ['answer' => 'Négative', 'iscorrect' => true],
                            ['answer' => 'Positive', 'iscorrect' => false],
                            ['answer' => 'Nécessairement nulle', 'iscorrect' => false],
                            ['answer' => 'Toujours égale à 1', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi faut-il examiner les données avant d’interpréter une corrélation ?',
                        'answers' => [
                            ['answer' => 'Des valeurs extrêmes ou une relation non linéaire peuvent modifier ou masquer l’association observée', 'iscorrect' => true],
                            ['answer' => 'La corrélation est toujours indépendante des données', 'iscorrect' => false],
                            ['answer' => 'Les valeurs extrêmes n’ont jamais d’effet', 'iscorrect' => false],
                            ['answer' => 'Un coefficient de corrélation explique automatiquement la causalité', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Indices économiques et évolution des prix',
                'questions' => [
                    [
                        'question' => 'Que représente un indice égal à 100 pendant l’année de base ?',
                        'answers' => [
                            ['answer' => 'Le niveau de référence choisi pour l’indice', 'iscorrect' => true],
                            ['answer' => 'Une inflation de 100 %', 'iscorrect' => false],
                            ['answer' => 'Une croissance de 100 %', 'iscorrect' => false],
                            ['answer' => 'Une baisse des prix de 100 %', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Un indice passe de 100 à 115. Quelle est l’augmentation du niveau mesuré ?',
                        'answers' => [
                            ['answer' => '15 %', 'iscorrect' => true],
                            ['answer' => '10 %', 'iscorrect' => false],
                            ['answer' => '5 %', 'iscorrect' => false],
                            ['answer' => '20 %', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Un indice passe de 125 à 100. Quelle est la baisse relative ?',
                        'answers' => [
                            ['answer' => '20 %', 'iscorrect' => true],
                            ['answer' => '25 %', 'iscorrect' => false],
                            ['answer' => '15 %', 'iscorrect' => false],
                            ['answer' => '10 %', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi utilise-t-on une année de base dans un indice ?',
                        'answers' => [
                            ['answer' => 'Pour disposer d’un point de référence permettant de comparer les périodes', 'iscorrect' => true],
                            ['answer' => 'Pour rendre tous les prix constants', 'iscorrect' => false],
                            ['answer' => 'Pour supprimer l’inflation', 'iscorrect' => false],
                            ['answer' => 'Pour mesurer uniquement le chômage', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce qu’un indice des prix ?',
                        'answers' => [
                            ['answer' => 'Un indicateur synthétique de l’évolution relative d’un ensemble de prix', 'iscorrect' => true],
                            ['answer' => 'Une mesure directe des salaires', 'iscorrect' => false],
                            ['answer' => 'Une mesure du nombre d’emplois', 'iscorrect' => false],
                            ['answer' => 'Une mesure des profits uniquement', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les pondérations sont-elles importantes dans un indice de prix ?',
                        'answers' => [
                            ['answer' => 'Elles reflètent l’importance relative des différents biens ou services dans l’ensemble mesuré', 'iscorrect' => true],
                            ['answer' => 'Elles sont toujours identiques pour toutes les composantes', 'iscorrect' => false],
                            ['answer' => 'Elles éliminent automatiquement les variations de prix', 'iscorrect' => false],
                            ['answer' => 'Elles n’ont aucun effet sur l’indice', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Si un panier contient principalement des biens dont les prix augmentent fortement, l’indice du panier aura tendance à :',
                        'answers' => [
                            ['answer' => 'Augmenter davantage', 'iscorrect' => true],
                            ['answer' => 'Diminuer automatiquement', 'iscorrect' => false],
                            ['answer' => 'Rester nécessairement constant', 'iscorrect' => false],
                            ['answer' => 'Devenir nul', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les indices de prix sont-ils importants pour analyser le pouvoir d’achat ?',
                        'answers' => [
                            ['answer' => 'Ils permettent de suivre l’évolution du coût d’un ensemble de biens et services', 'iscorrect' => true],
                            ['answer' => 'Ils mesurent directement le patrimoine', 'iscorrect' => false],
                            ['answer' => 'Ils déterminent les salaires légaux', 'iscorrect' => false],
                            ['answer' => 'Ils remplacent le revenu disponible', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Un indice passe de 140 à 147. Quel est le taux d’augmentation ?',
                        'answers' => [
                            ['answer' => '5 %', 'iscorrect' => true],
                            ['answer' => '7 %', 'iscorrect' => false],
                            ['answer' => '4 %', 'iscorrect' => false],
                            ['answer' => '10 %', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les indices facilitent-ils les comparaisons dans le temps ?',
                        'answers' => [
                            ['answer' => 'Ils transforment différents niveaux en mesures relatives par rapport à une base commune', 'iscorrect' => true],
                            ['answer' => 'Ils suppriment toutes les différences économiques', 'iscorrect' => false],
                            ['answer' => 'Ils rendent toutes les données identiques', 'iscorrect' => false],
                            ['answer' => 'Ils mesurent automatiquement la causalité', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],
        ];

        foreach ($quizzes as $quizData) {
            $quiz = Quiz::create([
                'subject_id' => $subject->id,
                'title' => $quizData['title'],
                'level' => 'Beginner',
            ]);

            foreach ($quizData['questions'] as $questionData) {
                $question = Question::create([
                    'quiz_id' => $quiz->id,
                    'question' => $questionData['question'],
                ]);

                // La position de la bonne réponse est randomisée.
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
