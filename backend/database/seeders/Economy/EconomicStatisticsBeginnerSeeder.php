<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class EconomicStatisticsBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'economic-statistics')->firstOrFail();

        $quizzes = [
            [
                'title' => 'Introduction aux statistiques économiques',
                'description' => 'Quiz débutant sur les fondements des statistiques économiques.',
                'questions' => [
                    [
                        'question' => 'Quel est l’objectif principal des statistiques économiques ?',
                        'explanation' => 'Les statistiques économiques servent à collecter, organiser, analyser et interpréter des données afin de mieux comprendre les phénomènes économiques.',
                        'choices' => [
                            'Collecter, organiser, analyser et interpréter des données économiques',
                            'Fixer directement les prix de tous les biens',
                            'Remplacer les décisions des entreprises',
                            'Éliminer toute incertitude économique',
                        ],
                        'correct' => 0,
                    ],
                    [
                        'question' => 'Qu’est-ce qu’une donnée statistique ?',
                        'explanation' => 'Une donnée statistique est une information recueillie sur une variable ou un phénomène observé.',
                        'choices' => [
                            'Une information recueillie sur une variable ou un phénomène observé',
                            'Uniquement une donnée financière',
                            'Une opinion personnelle sans observation',
                            'Une formule mathématique uniquement',
                        ],
                        'correct' => 0,
                    ],
                    [
                        'question' => 'Qu’est-ce qu’une population statistique ?',
                        'explanation' => 'La population statistique correspond à l’ensemble des unités étudiées dans une analyse statistique.',
                        'choices' => [
                            'L’ensemble des unités étudiées dans une analyse statistique',
                            'Uniquement les personnes employées',
                            'Un seul élément observé',
                            'Uniquement les entreprises publiques',
                        ],
                        'correct' => 0,
                    ],
                    [
                        'question' => 'Qu’est-ce qu’un échantillon ?',
                        'explanation' => 'Un échantillon est une partie de la population sélectionnée pour être étudiée.',
                        'choices' => [
                            'Une partie de la population sélectionnée pour être étudiée',
                            'La totalité de la population mondiale',
                            'Une variable économique',
                            'Une moyenne calculée à partir d’un seul individu',
                        ],
                        'correct' => 0,
                    ],
                    [
                        'question' => 'Qu’est-ce qu’une variable statistique ?',
                        'explanation' => 'Une variable statistique est une caractéristique qui peut prendre différentes valeurs selon les observations.',
                        'choices' => [
                            'Une caractéristique qui peut prendre différentes valeurs selon les observations',
                            'Une valeur toujours constante',
                            'Une population entière',
                            'Une méthode de collecte uniquement',
                        ],
                        'correct' => 0,
                    ],
                    [
                        'question' => 'Laquelle de ces variables est quantitative ?',
                        'explanation' => 'Le revenu mensuel est une variable quantitative, car il s’exprime numériquement.',
                        'choices' => [
                            'Le revenu mensuel d’un ménage',
                            'Le secteur d’activité',
                            'La catégorie professionnelle',
                            'Le type de contrat',
                        ],
                        'correct' => 0,
                    ],
                    [
                        'question' => 'Laquelle de ces variables est qualitative ?',
                        'explanation' => 'Le secteur d’activité décrit une catégorie et non une quantité numérique mesurée directement.',
                        'choices' => [
                            'Le secteur d’activité d’une entreprise',
                            'Le salaire mensuel',
                            'Le nombre d’employés',
                            'Le chiffre d’affaires',
                        ],
                        'correct' => 0,
                    ],
                    [
                        'question' => 'Pourquoi les statistiques sont-elles importantes en économie ?',
                        'explanation' => 'Les statistiques permettent de résumer de grandes quantités de données et d’identifier des tendances ou des différences économiques.',
                        'choices' => [
                            'Elles permettent de résumer les données et d’identifier des tendances économiques',
                            'Elles rendent toutes les prévisions certaines',
                            'Elles remplacent toute analyse économique',
                            'Elles empêchent les variations économiques',
                        ],
                        'correct' => 0,
                    ],
                    [
                        'question' => 'Qu’est-ce qu’une observation statistique ?',
                        'explanation' => 'Une observation statistique correspond aux valeurs ou caractéristiques enregistrées pour une unité étudiée.',
                        'choices' => [
                            'Une valeur ou un ensemble de caractéristiques enregistrées pour une unité étudiée',
                            'Uniquement une moyenne nationale',
                            'Une hypothèse économique',
                            'Une politique publique',
                        ],
                        'correct' => 0,
                    ],
                    [
                        'question' => 'Quelle est une utilisation courante des statistiques économiques ?',
                        'explanation' => 'Les statistiques économiques sont souvent utilisées pour suivre des indicateurs comme le PIB, les prix, le chômage et les revenus.',
                        'choices' => [
                            'Analyser l’évolution du PIB, des prix, du chômage ou des revenus',
                            'Fixer les préférences des consommateurs',
                            'Garantir les bénéfices des entreprises',
                            'Supprimer toutes les fluctuations économiques',
                        ],
                        'correct' => 0,
                    ],
                ],
            ],

            [
                'title' => 'Tableaux, fréquences et distributions',
                'description' => 'Quiz débutant sur les tableaux statistiques, les effectifs, les fréquences et les distributions.',
                'questions' => [
                    [
                        'question' => 'Qu’est-ce qu’une fréquence statistique ?',
                        'explanation' => 'La fréquence correspond à la proportion d’observations appartenant à une valeur ou une catégorie donnée.',
                        'choices' => [
                            'La proportion d’observations correspondant à une modalité ou une valeur',
                            'La somme de toutes les valeurs observées',
                            'La différence entre deux observations',
                            'Le maximum de la série',
                        ],
                        'correct' => 0,
                    ],
                    [
                        'question' => 'Une classe contient 20 observations sur un total de 100. Quelle est sa fréquence ?',
                        'explanation' => 'La fréquence se calcule par 20 ÷ 100 = 0,20, soit 20 %.',
                        'choices' => [
                            '20 %',
                            '10 %',
                            '25 %',
                            '5 %',
                        ],
                        'correct' => 0,
                    ],
                    [
                        'question' => 'Pourquoi construit-on un tableau de fréquences ?',
                        'explanation' => 'Un tableau de fréquences permet de résumer la répartition des observations selon les différentes valeurs ou catégories.',
                        'choices' => [
                            'Pour résumer la répartition des observations selon les différentes valeurs ou catégories',
                            'Pour supprimer les observations',
                            'Pour remplacer toute représentation graphique',
                            'Pour calculer uniquement le PIB',
                        ],
                        'correct' => 0,
                    ],
                    [
                        'question' => 'Que représente une fréquence cumulée ?',
                        'explanation' => 'La fréquence cumulée indique la proportion d’observations situées jusqu’à une valeur donnée selon l’ordre retenu.',
                        'choices' => [
                            'La proportion d’observations inférieures ou égales à une valeur donnée selon le classement utilisé',
                            'La somme des prix uniquement',
                            'La différence entre maximum et minimum',
                            'La moyenne de toutes les fréquences',
                        ],
                        'correct' => 0,
                    ],
                    [
                        'question' => 'Si les fréquences de quatre catégories sont 20 %, 30 %, 10 % et 40 %, leur total est :',
                        'explanation' => 'La somme des fréquences d’une distribution complète est égale à 100 %.',
                        'choices' => [
                            '100 %',
                            '90 %',
                            '110 %',
                            '80 %',
                        ],
                        'correct' => 0,
                    ],
                    [
                        'question' => 'Pourquoi les classes sont-elles parfois utilisées pour présenter des données quantitatives ?',
                        'explanation' => 'Les classes permettent de regrouper un grand nombre de valeurs en intervalles afin de simplifier la présentation des données.',
                        'choices' => [
                            'Elles permettent de résumer une grande quantité de valeurs en intervalles',
                            'Elles rendent toutes les valeurs identiques',
                            'Elles éliminent les données extrêmes',
                            'Elles remplacent les observations originales dans tous les cas',
                        ],
                        'correct' => 0,
                    ],
                    [
                        'question' => 'Une série contient 50 entreprises dont 15 sont exportatrices. Quelle est la fréquence des entreprises exportatrices ?',
                        'explanation' => 'La fréquence est de 15 ÷ 50 = 0,30, soit 30 %.',
                        'choices' => [
                            '30 %',
                            '15 %',
                            '25 %',
                            '35 %',
                        ],
                        'correct' => 0,
                    ],
                    [
                        'question' => 'Quel est l’intérêt d’une fréquence relative par rapport à un simple effectif ?',
                        'explanation' => 'La fréquence relative permet de comparer les répartitions même lorsque les tailles des populations étudiées sont différentes.',
                        'choices' => [
                            'Elle permet de comparer des répartitions même lorsque les tailles des populations diffèrent',
                            'Elle supprime toute information sur la taille',
                            'Elle est toujours supérieure à l’effectif',
                            'Elle ne peut pas être exprimée en pourcentage',
                        ],
                        'correct' => 0,
                    ],
                    [
                        'question' => 'Qu’est-ce qu’un effectif ?',
                        'explanation' => 'L’effectif représente le nombre d’observations appartenant à une valeur ou une catégorie donnée.',
                        'choices' => [
                            'Le nombre d’observations appartenant à une valeur ou une catégorie',
                            'La moyenne des observations',
                            'La différence entre deux valeurs',
                            'La valeur maximale uniquement',
                        ],
                        'correct' => 0,
                    ],
                    [
                        'question' => 'Pourquoi les tableaux statistiques facilitent-ils l’analyse économique ?',
                        'explanation' => 'Les tableaux organisent les données de manière structurée et facilitent l’examen de leur répartition.',
                        'choices' => [
                            'Ils organisent les données et rendent leur répartition plus facile à examiner',
                            'Ils rendent les données automatiquement exactes',
                            'Ils éliminent toutes les valeurs atypiques',
                            'Ils remplacent toute interprétation économique',
                        ],
                        'correct' => 0,
                    ],
                ],
            ],

            [
                'title' => 'Moyenne, médiane et mode',
                'description' => 'Quiz débutant sur les principales mesures de tendance centrale.',
                'questions' => [
                    [
                        'question' => 'Quelle est la moyenne arithmétique de 10, 20 et 30 ?',
                        'explanation' => 'La moyenne est (10 + 20 + 30) ÷ 3 = 20.',
                        'choices' => [
                            '20',
                            '15',
                            '25',
                            '30',
                        ],
                        'correct' => 0,
                    ],
                    [
                        'question' => 'Quelle est la médiane de 3, 5, 7, 9 et 11 ?',
                        'explanation' => 'La série est déjà classée et contient cinq valeurs. La valeur centrale est donc 7.',
                        'choices' => [
                            '7',
                            '5',
                            '9',
                            '11',
                        ],
                        'correct' => 0,
                    ],
                    [
                        'question' => 'Quelle est la moyenne de 5, 10, 15 et 20 ?',
                        'explanation' => 'La moyenne est (5 + 10 + 15 + 20) ÷ 4 = 12,5.',
                        'choices' => [
                            '12,5',
                            '10',
                            '15',
                            '13,5',
                        ],
                        'correct' => 0,
                    ],
                    [
                        'question' => 'Quelle est la médiane de 4, 8, 10 et 20 ?',
                        'explanation' => 'Avec quatre observations, la médiane est la moyenne des deux valeurs centrales : (8 + 10) ÷ 2 = 9.',
                        'choices' => [
                            '9',
                            '8',
                            '10',
                            '12',
                        ],
                        'correct' => 0,
                    ],
                    [
                        'question' => 'Qu’est-ce que le mode ?',
                        'explanation' => 'Le mode est la valeur ou la catégorie qui apparaît le plus fréquemment dans une série.',
                        'choices' => [
                            'La valeur ou catégorie la plus fréquente dans une série',
                            'La valeur moyenne',
                            'La valeur centrale',
                            'La plus grande valeur',
                        ],
                        'correct' => 0,
                    ],
                    [
                        'question' => 'Quelle mesure est généralement plus résistante aux valeurs extrêmes ?',
                        'explanation' => 'La médiane est généralement moins influencée par les valeurs extrêmes que la moyenne arithmétique.',
                        'choices' => [
                            'La médiane',
                            'La moyenne arithmétique',
                            'La somme',
                            'Le maximum',
                        ],
                        'correct' => 0,
                    ],
                    [
                        'question' => 'Si les revenus sont 1 000, 1 200, 1 500, 1 800 et 20 000, quelle mesure est généralement la plus représentative du centre lorsque la distribution est très asymétrique ?',
                        'explanation' => 'La valeur de 20 000 est très élevée par rapport aux autres revenus et tire fortement la moyenne vers le haut. La médiane est donc généralement plus représentative du centre.',
                        'choices' => [
                            'La médiane',
                            'La moyenne',
                            'Le maximum',
                            'La somme',
                        ],
                        'correct' => 0,
                    ],
                    [
                        'question' => 'Que se passe-t-il avec la moyenne si toutes les observations augmentent de 10 unités ?',
                        'explanation' => 'Ajouter la même constante à toutes les observations augmente leur moyenne de cette même constante.',
                        'choices' => [
                            'La moyenne augmente également de 10 unités',
                            'La moyenne reste inchangée',
                            'La moyenne augmente de 100 unités',
                            'La moyenne diminue de 10 unités',
                        ],
                        'correct' => 0,
                    ],
                    [
                        'question' => 'Que se passe-t-il avec la moyenne si toutes les observations sont multipliées par 2 ?',
                        'explanation' => 'Multiplier chaque observation par 2 multiplie également la moyenne par 2.',
                        'choices' => [
                            'La moyenne est multipliée par 2',
                            'La moyenne reste identique',
                            'La moyenne est multipliée par 4',
                            'La moyenne est divisée par 2',
                        ],
                        'correct' => 0,
                    ],
                    [
                        'question' => 'Pourquoi la moyenne est-elle couramment utilisée en économie ?',
                        'explanation' => 'La moyenne fournit une mesure synthétique du niveau central d’une variable quantitative.',
                        'choices' => [
                            'Elle fournit une mesure synthétique du niveau moyen d’une variable quantitative',
                            'Elle ignore toutes les observations',
                            'Elle fonctionne uniquement avec des catégories qualitatives',
                            'Elle est toujours égale à la médiane',
                        ],
                        'correct' => 0,
                    ],
                ],
            ],

            [
                'title' => 'Dispersion et étendue',
                'description' => 'Quiz débutant sur la dispersion des données et la mesure de l’étendue.',
                'questions' => [
                    [
                        'question' => 'Que mesure l’étendue d’une série ?',
                        'explanation' => 'L’étendue est la différence entre la valeur maximale et la valeur minimale.',
                        'choices' => [
                            'La différence entre la valeur maximale et la valeur minimale',
                            'La moyenne des observations',
                            'La valeur centrale',
                            'La fréquence maximale',
                        ],
                        'correct' => 0,
                    ],
                    [
                        'question' => 'Quelle est l’étendue de 10, 15, 20 et 35 ?',
                        'explanation' => 'L’étendue est 35 - 10 = 25.',
                        'choices' => [
                            '25',
                            '20',
                            '30',
                            '15',
                        ],
                        'correct' => 0,
                    ],
                    [
                        'question' => 'Qu’est-ce qu’une mesure de dispersion ?',
                        'explanation' => 'Une mesure de dispersion indique dans quelle mesure les observations sont réparties autour d’une valeur centrale.',
                        'choices' => [
                            'Un indicateur de la manière dont les observations sont réparties autour d’une valeur centrale',
                            'Une mesure uniquement du niveau moyen',
                            'Une mesure de la fréquence d’une seule modalité',
                            'Une mesure de la population totale uniquement',
                        ],
                        'correct' => 0,
                    ],
                    [
                        'question' => 'Pourquoi la dispersion est-elle importante en économie ?',
                        'explanation' => 'Deux ensembles peuvent avoir la même moyenne tout en présentant des niveaux de variation très différents.',
                        'choices' => [
                            'Deux économies peuvent avoir la même moyenne mais des niveaux de variation très différents',
                            'Elle remplace toujours la moyenne',
                            'Elle ne concerne que les variables qualitatives',
                            'Elle élimine les écarts entre individus',
                        ],
                        'correct' => 0,
                    ],
                    [
                        'question' => 'Une série A a une étendue de 10 et une série B une étendue de 100. Laquelle est plus dispersée selon cette mesure ?',
                        'explanation' => 'Selon l’étendue, la série B présente une plus grande dispersion entre sa valeur minimale et sa valeur maximale.',
                        'choices' => [
                            'La série B',
                            'La série A',
                            'Les deux sont identiques',
                            'Impossible à déterminer avec l’étendue',
                        ],
                        'correct' => 0,
                    ],
                    [
                        'question' => 'Quel est un inconvénient de l’étendue comme mesure de dispersion ?',
                        'explanation' => 'L’étendue ne tient compte que des deux valeurs extrêmes et ignore la manière dont les autres observations sont réparties.',
                        'choices' => [
                            'Elle ne dépend que des deux valeurs extrêmes et ignore la distribution des autres observations',
                            'Elle utilise toutes les observations avec le même poids',
                            'Elle est impossible à calculer',
                            'Elle donne toujours une valeur négative',
                        ],
                        'correct' => 0,
                    ],
                    [
                        'question' => 'Si toutes les observations sont augmentées de 20, que devient l’étendue ?',
                        'explanation' => 'Ajouter 20 à toutes les observations augmente à la fois le minimum et le maximum de 20, donc leur différence reste identique.',
                        'choices' => [
                            'Elle reste inchangée',
                            'Elle augmente de 20',
                            'Elle double',
                            'Elle devient nulle',
                        ],
                        'correct' => 0,
                    ],
                    [
                        'question' => 'Si toutes les observations sont multipliées par 3, que devient l’étendue ?',
                        'explanation' => 'Multiplier toutes les observations par 3 multiplie également la différence entre le maximum et le minimum par 3.',
                        'choices' => [
                            'Elle est multipliée par 3',
                            'Elle reste inchangée',
                            'Elle augmente de 3 seulement',
                            'Elle est divisée par 3',
                        ],
                        'correct' => 0,
                    ],
                    [
                        'question' => 'Quelle situation illustre une forte dispersion des revenus ?',
                        'explanation' => 'Une forte dispersion signifie que les revenus sont largement éloignés les uns des autres.',
                        'choices' => [
                            'Les revenus sont très éloignés les uns des autres',
                            'Tous les revenus sont identiques',
                            'Tous les revenus sont proches de la moyenne',
                            'Il n’existe qu’un seul revenu',
                        ],
                        'correct' => 0,
                    ],
                    [
                        'question' => 'Pourquoi la dispersion complète l’information fournie par la moyenne ?',
                        'explanation' => 'La moyenne décrit le niveau central, tandis que la dispersion indique à quel point les observations sont concentrées ou éloignées de ce niveau.',
                        'choices' => [
                            'Elle indique si les observations sont concentrées ou largement réparties autour du niveau central',
                            'Elle donne toujours le même résultat que la moyenne',
                            'Elle mesure uniquement les valeurs maximales',
                            'Elle remplace tous les graphiques',
                        ],
                        'correct' => 0,
                    ],
                ],
            ],

            [
                'title' => 'Variance et écart-type',
                'description' => 'Quiz débutant sur la variance et l’écart-type comme mesures de dispersion.',
                'questions' => [
                    [
                        'question' => 'Que mesure la variance ?',
                        'explanation' => 'La variance mesure la dispersion moyenne des observations autour de leur moyenne en utilisant les écarts au carré.',
                        'choices' => [
                            'La dispersion moyenne des observations autour de leur moyenne à travers les écarts au carré',
                            'La valeur maximale uniquement',
                            'La fréquence de la modalité principale',
                            'La moyenne des prix uniquement',
                        ],
                        'correct' => 0,
                    ],
                    [
                        'question' => 'Pourquoi élève-t-on les écarts à la moyenne au carré dans le calcul de la variance ?',
                        'explanation' => 'Le carré permet d’éviter que les écarts positifs et négatifs se compensent.',
                        'choices' => [
                            'Pour éviter que les écarts positifs et négatifs se compensent',
                            'Pour rendre toutes les observations égales',
                            'Pour supprimer les grandes valeurs',
                            'Pour obtenir nécessairement une variance négative',
                        ],
                        'correct' => 0,
                    ],
                    [
                        'question' => 'Quelle est la variance de la série 5, 5, 5, 5 ?',
                        'explanation' => 'Toutes les observations sont égales à leur moyenne, donc tous les écarts à la moyenne sont nuls. La variance est donc égale à zéro.',
                        'choices' => [
                            '0',
                            '5',
                            '1',
                            '25',
                        ],
                        'correct' => 0,
                    ],
                    [
                        'question' => 'Si toutes les observations sont identiques, l’écart-type est :',
                        'explanation' => 'Lorsque toutes les observations sont identiques, il n’existe aucune dispersion autour de la moyenne et l’écart-type vaut zéro.',
                        'choices' => [
                            'Égal à zéro',
                            'Toujours égal à 1',
                            'Toujours négatif',
                            'Égal à la moyenne',
                        ],
                        'correct' => 0,
                    ],
                    [
                        'question' => 'Quelle relation existe entre variance et écart-type ?',
                        'explanation' => 'L’écart-type correspond à la racine carrée de la variance.',
                        'choices' => [
                            'L’écart-type est la racine carrée de la variance',
                            'La variance est la racine carrée de l’écart-type',
                            'Ils sont toujours identiques',
                            'Ils ont toujours des signes opposés',
                        ],
                        'correct' => 0,
                    ],
                    [
                        'question' => 'Pourquoi l’écart-type est-il souvent plus facile à interpréter que la variance ?',
                        'explanation' => 'L’écart-type est exprimé dans la même unité que la variable étudiée, contrairement à la variance qui est exprimée dans une unité au carré.',
                        'choices' => [
                            'Il est exprimé dans la même unité que la variable étudiée',
                            'Il est toujours plus petit que zéro',
                            'Il ignore les écarts',
                            'Il est indépendant de la moyenne',
                        ],
                        'correct' => 0,
                    ],
                    [
                        'question' => 'Si la variance d’une série est 25, quel est son écart-type ?',
                        'explanation' => 'L’écart-type est la racine carrée de la variance : √25 = 5.',
                        'choices' => [
                            '5',
                            '10',
                            '25',
                            '2,5',
                        ],
                        'correct' => 0,
                    ],
                    [
                        'question' => 'Si toutes les observations sont multipliées par 2, que devient la variance ?',
                        'explanation' => 'La variance est multipliée par le carré du facteur de multiplication. Avec un facteur 2, elle est donc multipliée par 4.',
                        'choices' => [
                            'Elle est multipliée par 4',
                            'Elle est multipliée par 2',
                            'Elle reste inchangée',
                            'Elle est divisée par 2',
                        ],
                        'correct' => 0,
                    ],
                    [
                        'question' => 'Si toutes les observations sont multipliées par 3, que devient l’écart-type ?',
                        'explanation' => 'L’écart-type est multiplié par la valeur absolue du facteur de transformation. Ici, il est donc multiplié par 3.',
                        'choices' => [
                            'Il est multiplié par 3',
                            'Il est multiplié par 9',
                            'Il reste inchangé',
                            'Il est divisé par 3',
                        ],
                        'correct' => 0,
                    ],
                    [
                        'question' => 'Pourquoi une variance plus élevée indique-t-elle généralement une plus grande dispersion ?',
                        'explanation' => 'Une variance plus élevée signifie que les écarts au carré autour de la moyenne sont, en moyenne, plus importants.',
                        'choices' => [
                            'Les écarts au carré autour de la moyenne sont en moyenne plus importants',
                            'La moyenne est nécessairement plus élevée',
                            'Les observations deviennent identiques',
                            'Le nombre d’observations diminue toujours',
                        ],
                        'correct' => 0,
                    ],
                ],
            ],

            [
                'title' => 'Probabilités pour l’économie',
                'description' => 'Quiz débutant sur les notions fondamentales de probabilité appliquées à l’économie.',
                'questions' => [
                    [
                        'question' => 'Quelle est la probabilité d’obtenir un nombre pair avec un dé équilibré à six faces ?',
                        'explanation' => 'Les résultats pairs sont 2, 4 et 6, soit 3 résultats favorables sur 6. La probabilité est donc 3/6 = 1/2.',
                        'choices' => [
                            '1/2',
                            '1/3',
                            '1/6',
                            '2/3',
                        ],
                        'correct' => 0,
                    ],
                    [
                        'question' => 'Quelle est la probabilité d’obtenir un 6 avec un dé équilibré ?',
                        'explanation' => 'Un dé équilibré possède six résultats équiprobables. La probabilité d’obtenir un 6 est donc 1/6.',
                        'choices' => [
                            '1/6',
                            '1/3',
                            '1/2',
                            '1/4',
                        ],
                        'correct' => 0,
                    ],
                    [
                        'question' => 'Quelle est la probabilité d’un événement certain ?',
                        'explanation' => 'Un événement certain se produit nécessairement et possède une probabilité égale à 1.',
                        'choices' => [
                            '1',
                            '0',
                            '0,5',
                            '-1',
                        ],
                        'correct' => 0,
                    ],
                    [
                        'question' => 'Quelle est la probabilité d’un événement impossible ?',
                        'explanation' => 'Un événement impossible ne peut jamais se produire et sa probabilité est égale à 0.',
                        'choices' => [
                            '0',
                            '1',
                            '0,5',
                            '-1',
                        ],
                        'correct' => 0,
                    ],
                    [
                        'question' => 'Si un événement A a une probabilité de 0,7, quelle est la probabilité de son complément ?',
                        'explanation' => 'La probabilité du complément est 1 - 0,7 = 0,3.',
                        'choices' => [
                            '0,3',
                            '0,7',
                            '1,7',
                            '0,2',
                        ],
                        'correct' => 0,
                    ],
                    [
                        'question' => 'Pourquoi les probabilités sont-elles utiles en économie ?',
                        'explanation' => 'Les probabilités permettent de représenter et de quantifier l’incertitude concernant différents événements économiques.',
                        'choices' => [
                            'Elles permettent de représenter l’incertitude concernant certains événements économiques',
                            'Elles rendent tous les événements certains',
                            'Elles suppriment tous les risques',
                            'Elles remplacent les données observées',
                        ],
                        'correct' => 0,
                    ],
                    [
                        'question' => 'Si deux événements sont indépendants, que peut-on dire de leur occurrence ?',
                        'explanation' => 'Lorsque deux événements sont indépendants, la réalisation de l’un ne modifie pas la probabilité de l’autre.',
                        'choices' => [
                            'La réalisation de l’un ne modifie pas la probabilité de l’autre',
                            'Ils doivent toujours se produire ensemble',
                            'Ils ne peuvent jamais se produire ensemble',
                            'Ils ont forcément la même probabilité',
                        ],
                        'correct' => 0,
                    ],
                    [
                        'question' => 'Si deux événements ont des probabilités 0,4 et 0,5 et sont indépendants, quelle est la probabilité qu’ils se produisent tous les deux ?',
                        'explanation' => 'Pour deux événements indépendants, la probabilité conjointe est le produit : 0,4 × 0,5 = 0,2.',
                        'choices' => [
                            '0,2',
                            '0,9',
                            '0,45',
                            '0,1',
                        ],
                        'correct' => 0,
                    ],
                    [
                        'question' => 'Qu’est-ce qu’une probabilité conditionnelle ?',
                        'explanation' => 'Une probabilité conditionnelle mesure la probabilité d’un événement lorsque l’on dispose déjà d’une information concernant un autre événement.',
                        'choices' => [
                            'La probabilité qu’un événement se produise sachant qu’une autre information est connue',
                            'La probabilité d’un événement certain',
                            'La moyenne d’une série',
                            'La variance d’une variable',
                        ],
                        'correct' => 0,
                    ],
                    [
                        'question' => 'Pourquoi les probabilités conditionnelles peuvent-elles être utiles dans l’analyse économique ?',
                        'explanation' => 'Elles permettent de modifier une évaluation lorsqu’une nouvelle information devient disponible.',
                        'choices' => [
                            'Elles permettent d’actualiser une évaluation lorsqu’une nouvelle information devient disponible',
                            'Elles éliminent toute incertitude',
                            'Elles rendent les données indépendantes',
                            'Elles remplacent toujours les observations',
                        ],
                        'correct' => 0,
                    ],
                ],
            ],

            [
                'title' => 'Corrélation et relation entre variables',
                'description' => 'Quiz débutant sur la corrélation, les relations entre variables et leur interprétation.',
                'questions' => [
                    [
                        'question' => 'Que mesure généralement une corrélation ?',
                        'explanation' => 'La corrélation mesure généralement la direction et l’intensité de l’association linéaire entre deux variables.',
                        'choices' => [
                            'La direction et l’intensité de l’association linéaire entre deux variables',
                            'La causalité certaine entre deux variables',
                            'La moyenne d’une seule variable',
                            'La différence entre maximum et minimum',
                        ],
                        'correct' => 0,
                    ],
                    [
                        'question' => 'Que signifie une corrélation proche de +1 ?',
                        'explanation' => 'Une corrélation proche de +1 indique une forte association linéaire positive entre les deux variables.',
                        'choices' => [
                            'Une forte association linéaire positive',
                            'Une forte association négative',
                            'Aucune relation linéaire',
                            'Une causalité parfaite',
                        ],
                        'correct' => 0,
                    ],
                    [
                        'question' => 'Que signifie une corrélation proche de -1 ?',
                        'explanation' => 'Une corrélation proche de -1 indique une forte association linéaire négative.',
                        'choices' => [
                            'Une forte association linéaire négative',
                            'Une forte association positive',
                            'Une absence de relation',
                            'Une égalité parfaite des variables',
                        ],
                        'correct' => 0,
                    ],
                    [
                        'question' => 'Que signifie une corrélation proche de 0 dans le cadre linéaire ?',
                        'explanation' => 'Une corrélation proche de zéro indique une association linéaire faible ou inexistante, sans exclure nécessairement une relation non linéaire.',
                        'choices' => [
                            'Une faible ou une absence d’association linéaire',
                            'Une causalité nulle dans tous les cas',
                            'Une forte relation positive',
                            'Une forte relation négative',
                        ],
                        'correct' => 0,
                    ],
                    [
                        'question' => 'Une corrélation positive entre revenu et consommation signifie généralement que :',
                        'explanation' => 'Une corrélation positive signifie que les niveaux élevés de revenu sont associés, dans les données observées, à des niveaux de consommation plus élevés.',
                        'choices' => [
                            'Les revenus plus élevés sont associés à des niveaux de consommation plus élevés dans les données observées',
                            'Le revenu provoque nécessairement toute variation de consommation',
                            'Les deux variables sont identiques',
                            'La consommation est indépendante du revenu',
                        ],
                        'correct' => 0,
                    ],
                    [
                        'question' => 'Pourquoi une corrélation élevée ne prouve-t-elle pas nécessairement une causalité ?',
                        'explanation' => 'Une corrélation peut résulter d’une troisième variable, d’un mécanisme commun ou simplement d’une association sans relation causale directe.',
                        'choices' => [
                            'Une troisième variable ou un autre mécanisme peut expliquer l’association observée',
                            'La corrélation ne peut jamais être positive',
                            'La causalité et la corrélation sont toujours identiques',
                            'Une corrélation ne dépend jamais des données',
                        ],
                        'correct' => 0,
                    ],
                    [
                        'question' => 'Quel graphique est souvent utilisé pour examiner visuellement une relation entre deux variables quantitatives ?',
                        'explanation' => 'Le nuage de points permet d’observer visuellement la forme, la direction et la dispersion d’une relation entre deux variables quantitatives.',
                        'choices' => [
                            'Le nuage de points',
                            'Le diagramme circulaire uniquement',
                            'Le tableau de fréquences uniquement',
                            'L’organigramme',
                        ],
                        'correct' => 0,
                    ],
                    [
                        'question' => 'Si les points d’un nuage sont globalement orientés vers le haut de gauche à droite, la corrélation est probablement :',
                        'explanation' => 'Une orientation ascendante indique généralement une association positive : lorsque l’une des variables augmente, l’autre tend aussi à augmenter.',
                        'choices' => [
                            'Positive',
                            'Négative',
                            'Nécessairement nulle',
                            'Toujours égale à -1',
                        ],
                        'correct' => 0,
                    ],
                    [
                        'question' => 'Si les points sont globalement orientés vers le bas de gauche à droite, la corrélation est probablement :',
                        'explanation' => 'Une orientation descendante indique généralement une association négative entre les deux variables.',
                        'choices' => [
                            'Négative',
                            'Positive',
                            'Nécessairement nulle',
                            'Toujours égale à 1',
                        ],
                        'correct' => 0,
                    ],
                    [
                        'question' => 'Pourquoi faut-il examiner les données avant d’interpréter une corrélation ?',
                        'explanation' => 'Les valeurs extrêmes et les relations non linéaires peuvent influencer fortement le coefficient de corrélation ou masquer certains comportements des données.',
                        'choices' => [
                            'Des valeurs extrêmes ou une relation non linéaire peuvent modifier ou masquer l’association observée',
                            'La corrélation est toujours indépendante des données',
                            'Les valeurs extrêmes n’ont jamais d’effet',
                            'Un coefficient de corrélation explique automatiquement la causalité',
                        ],
                        'correct' => 0,
                    ],
                ],
            ],

            [
                'title' => 'Indices économiques et évolution des prix',
                'description' => 'Quiz débutant sur les indices économiques, les indices de prix et l’évolution des niveaux de prix.',
                'questions' => [
                    [
                        'question' => 'Que représente un indice égal à 100 pendant l’année de base ?',
                        'explanation' => 'L’année de base est la référence choisie pour construire l’indice. Le niveau de l’indice y est généralement fixé à 100.',
                        'choices' => [
                            'Le niveau de référence choisi pour l’indice',
                            'Une inflation de 100 %',
                            'Une croissance de 100 %',
                            'Une baisse des prix de 100 %',
                        ],
                        'correct' => 0,
                    ],
                    [
                        'question' => 'Un indice passe de 100 à 115. Quelle est l’augmentation du niveau mesuré ?',
                        'explanation' => 'Le niveau passe de 100 à 115, soit une augmentation relative de (115 - 100) ÷ 100 = 15 %.',
                        'choices' => [
                            '15 %',
                            '10 %',
                            '5 %',
                            '20 %',
                        ],
                        'correct' => 0,
                    ],
                    [
                        'question' => 'Un indice passe de 125 à 100. Quelle est la baisse relative ?',
                        'explanation' => 'La baisse relative est (125 - 100) ÷ 125 = 0,20, soit 20 %.',
                        'choices' => [
                            '20 %',
                            '25 %',
                            '15 %',
                            '10 %',
                        ],
                        'correct' => 0,
                    ],
                    [
                        'question' => 'Pourquoi utilise-t-on une année de base dans un indice ?',
                        'explanation' => 'L’année de base fournit un point de référence commun permettant de comparer les niveaux entre différentes périodes.',
                        'choices' => [
                            'Pour disposer d’un point de référence permettant de comparer les périodes',
                            'Pour rendre tous les prix constants',
                            'Pour supprimer l’inflation',
                            'Pour mesurer uniquement le chômage',
                        ],
                        'correct' => 0,
                    ],
                    [
                        'question' => 'Qu’est-ce qu’un indice des prix ?',
                        'explanation' => 'Un indice des prix est un indicateur synthétique qui mesure l’évolution relative d’un ensemble de prix au cours du temps.',
                        'choices' => [
                            'Un indicateur synthétique de l’évolution relative d’un ensemble de prix',
                            'Une mesure directe des salaires',
                            'Une mesure du nombre d’emplois',
                            'Une mesure des profits uniquement',
                        ],
                        'correct' => 0,
                    ],
                    [
                        'question' => 'Pourquoi les pondérations sont-elles importantes dans un indice de prix ?',
                        'explanation' => 'Les pondérations permettent de refléter l’importance relative des différents biens ou services dans l’ensemble étudié.',
                        'choices' => [
                            'Elles reflètent l’importance relative des différents biens ou services dans l’ensemble mesuré',
                            'Elles sont toujours identiques pour toutes les composantes',
                            'Elles éliminent automatiquement les variations de prix',
                            'Elles n’ont aucun effet sur l’indice',
                        ],
                        'correct' => 0,
                    ],
                    [
                        'question' => 'Si un panier contient principalement des biens dont les prix augmentent fortement, l’indice du panier aura tendance à :',
                        'explanation' => 'Lorsque les composantes les plus importantes du panier connaissent de fortes hausses de prix, l’indice global tend également à augmenter.',
                        'choices' => [
                            'Augmenter davantage',
                            'Diminuer automatiquement',
                            'Rester nécessairement constant',
                            'Devenir nul',
                        ],
                        'correct' => 0,
                    ],
                    [
                        'question' => 'Pourquoi les indices de prix sont-ils importants pour analyser le pouvoir d’achat ?',
                        'explanation' => 'Ils permettent de suivre l’évolution du coût d’un ensemble de biens et services et donc d’étudier les changements du pouvoir d’achat réel.',
                        'choices' => [
                            'Ils permettent de suivre l’évolution du coût d’un ensemble de biens et services',
                            'Ils mesurent directement le patrimoine',
                            'Ils déterminent les salaires légaux',
                            'Ils remplacent le revenu disponible',
                        ],
                        'correct' => 0,
                    ],
                    [
                        'question' => 'Un indice passe de 140 à 147. Quel est le taux d’augmentation ?',
                        'explanation' => 'Le taux d’augmentation est (147 - 140) ÷ 140 = 7 ÷ 140 = 0,05, soit 5 %.',
                        'choices' => [
                            '5 %',
                            '7 %',
                            '4 %',
                            '10 %',
                        ],
                        'correct' => 0,
                    ],
                    [
                        'question' => 'Pourquoi les indices facilitent-ils les comparaisons dans le temps ?',
                        'explanation' => 'Les indices expriment les niveaux relatifs à une base commune, ce qui facilite les comparaisons entre périodes.',
                        'choices' => [
                            'Ils transforment différents niveaux en mesures relatives par rapport à une base commune',
                            'Ils suppriment toutes les différences économiques',
                            'Ils rendent toutes les données identiques',
                            'Ils mesurent automatiquement la causalité',
                        ],
                        'correct' => 0,
                    ],
                ],
            ],
        ];

        foreach ($quizzes as $quizData) {

            $quiz = Quiz::updateOrCreate(
                [
                    'subject_id' => $subject->id,
                    'title' => $quizData['title'],
                ],
                [
                    'owner_id' => null,
                    'description' => $quizData['description'],
                    'duration' => 10,
                    'passing_score' => 80,
                    'total_marks' => 10,
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
                        'explanation' => $questionData['explanation'] ?? null,
                    ]
                );

                $question->choices()->delete();

                $choicePairs = [];

                foreach ($questionData['choices'] as $idx => $text) {
                    $choicePairs[] = [
                        'text' => $text,
                        'is_correct' => $idx === $questionData['correct'],
                    ];
                }

                shuffle($choicePairs);

                foreach ($choicePairs as $order => $pair) {
                    Choice::create([
                        'question_id' => $question->id,
                        'choice_text' => $pair['text'],
                        'is_correct' => $pair['is_correct'],
                        'order' => $order + 1,
                    ]);
                }
            }
        }
    }
}