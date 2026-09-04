```php
<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Major;
use App\Models\Subject;
use App\Models\Quiz;
use App\Models\Question;
use App\Models\Answer;

class EconometricsProfessionalSeeder extends Seeder
{
    public function run(): void
    {
        $major = Major::where('slug', 'economy')->firstOrFail();

        $subject = Subject::where('major_id', $major->id)
            ->where('slug', 'econometrics')
            ->firstOrFail();

        $quizzes = [
            [
                'title' => 'Identification causale et endogénéité avancée',
                'questions' => [
                    [
                        'question' => 'Quelle condition fondamentale permet d’interpréter causalement un coefficient MCO dans un modèle linéaire simple ?',
                        'answers' => [
                            ['answer' => 'L’espérance conditionnelle du terme d’erreur doit être nulle pour chaque niveau de la variable explicative', 'iscorrect' => true],
                            ['answer' => 'La variable explicative doit avoir une variance nulle', 'iscorrect' => false],
                            ['answer' => 'Le R² doit être égal à 1', 'iscorrect' => false],
                            ['answer' => 'La variable dépendante doit être normalement distribuée', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une variable omise peut-elle biaiser un coefficient MCO ?',
                        'answers' => [
                            ['answer' => 'Si elle influence la variable dépendante et est corrélée avec le régresseur inclus, son effet peut être absorbé par le coefficient estimé', 'iscorrect' => true],
                            ['answer' => 'Une variable omise réduit toujours la variance du coefficient', 'iscorrect' => false],
                            ['answer' => 'Une variable omise rend toujours R² égal à zéro', 'iscorrect' => false],
                            ['answer' => 'Une variable omise n’a aucun effet si l’échantillon est grand', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la causalité inverse crée-t-elle de l’endogénéité ?',
                        'answers' => [
                            ['answer' => 'La variable dépendante influence elle-même le régresseur, créant une corrélation entre celui-ci et les déterminants non observés du résultat', 'iscorrect' => true],
                            ['answer' => 'Elle rend les erreurs automatiquement homoscédastiques', 'iscorrect' => false],
                            ['answer' => 'Elle supprime toute corrélation entre les variables', 'iscorrect' => false],
                            ['answer' => 'Elle ne concerne que les variables qualitatives', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi l’endogénéité est-elle plus grave qu’une simple multicolinéarité ?',
                        'answers' => [
                            ['answer' => 'Elle peut biaiser et rendre inconsistants les coefficients MCO, alors que la multicolinéarité imparfaite affecte principalement leur précision', 'iscorrect' => true],
                            ['answer' => 'La multicolinéarité rend toujours les coefficients biaisés', 'iscorrect' => false],
                            ['answer' => 'L’endogénéité ne concerne que les écarts-types', 'iscorrect' => false],
                            ['answer' => 'Les deux problèmes sont nécessairement identiques', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi contrôler une variable post-traitement peut-il être problématique dans une analyse causale ?',
                        'answers' => [
                            ['answer' => 'Cela peut supprimer une partie de l’effet causal du traitement que l’on cherche précisément à mesurer', 'iscorrect' => true],
                            ['answer' => 'Cela augmente toujours l’effet total', 'iscorrect' => false],
                            ['answer' => 'Cela garantit toujours une exogénéité parfaite', 'iscorrect' => false],
                            ['answer' => 'Cela ne modifie jamais le paramètre d’intérêt', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce qu’un facteur de confusion dans une relation économique ?',
                        'answers' => [
                            ['answer' => 'Une variable qui influence à la fois le traitement et le résultat et peut donc créer une association non causale', 'iscorrect' => true],
                            ['answer' => 'Une variable dont la variance est égale à zéro', 'iscorrect' => false],
                            ['answer' => 'Une variable dépendante indépendante de tout traitement', 'iscorrect' => false],
                            ['answer' => 'Une variable toujours observée après le résultat', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une forte corrélation entre x et y n’est-elle pas une preuve suffisante d’identification causale ?',
                        'answers' => [
                            ['answer' => 'La corrélation peut être due à des facteurs confondants, à la causalité inverse ou à une tendance commune', 'iscorrect' => true],
                            ['answer' => 'La corrélation ne peut jamais être mesurée', 'iscorrect' => false],
                            ['answer' => 'Toute relation économique est nécessairement non linéaire', 'iscorrect' => false],
                            ['answer' => 'Une corrélation élevée signifie automatiquement absence de biais', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est l’objectif principal d’une stratégie d’identification causale ?',
                        'answers' => [
                            ['answer' => Isoler une variation de la variable explicative qui peut être interprétée comme exogène au résultat potentiel', 'iscorrect' => true],
                            ['answer' => 'Obtenir le R² maximal possible', 'iscorrect' => false],
                            ['answer' => 'Supprimer toutes les observations atypiques', 'iscorrect' => false],
                            ['answer' => 'Minimiser automatiquement le nombre de variables', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une grande taille d’échantillon ne résout-elle pas automatiquement l’endogénéité ?',
                        'answers' => [
                            ['answer' => 'Elle réduit généralement l’incertitude d’échantillonnage mais ne corrige pas une source systématique de biais', 'iscorrect' => true],
                            ['answer' => 'Un grand échantillon augmente toujours le biais', 'iscorrect' => false],
                            ['answer' => 'L’endogénéité disparaît toujours lorsque n devient grand', 'iscorrect' => false],
                            ['answer' => 'Les grands échantillons ne permettent aucune estimation', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi faut-il distinguer estimand, estimateur et estimation ?',
                        'answers' => [
                            ['answer' => 'L’estimand est la quantité économique visée, l’estimateur est la règle statistique et l’estimation est sa réalisation dans l’échantillon', 'iscorrect' => true],
                            ['answer' => 'Les trois termes désignent exactement la même chose', 'iscorrect' => false],
                            ['answer' => 'L’estimand correspond uniquement au R²', 'iscorrect' => false],
                            ['answer' => 'L’estimation est toujours un paramètre de population', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Variables instrumentales et identification IV',
                'questions' => [
                    [
                        'question' => 'Quelles sont les deux propriétés centrales d’un instrument valide ?',
                        'answers' => [
                            ['answer' => 'Une pertinence suffisante pour la variable endogène et une restriction d’exclusion crédible', 'iscorrect' => true],
                            ['answer' => 'Une normalité parfaite et une variance constante', 'iscorrect' => false],
                            ['answer' => 'Une corrélation forte avec l’erreur et faible avec x', 'iscorrect' => false],
                            ['answer' => 'Une moyenne nulle et une variance unitaire', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une première étape faible est-elle particulièrement dangereuse en IV ?',
                        'answers' => [
                            ['answer' => 'Elle peut entraîner une forte imprécision et des propriétés d’échantillon fini peu fiables de l’estimateur IV', 'iscorrect' => true],
                            ['answer' => 'Elle garantit une meilleure efficacité que les MCO', 'iscorrect' => false],
                            ['answer' => 'Elle élimine automatiquement toute endogénéité', 'iscorrect' => false],
                            ['answer' => 'Elle augmente toujours la puissance des tests', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Que représente la première étape de 2SLS ?',
                        'answers' => [
                            ['answer' => La projection de la variable endogène sur les instruments et les autres variables exogènes du modèle', 'iscorrect' => true],
                            ['answer' => 'La régression directe de y sur toutes les erreurs', 'iscorrect' => false],
                            ['answer' => 'La suppression de la variable endogène', 'iscorrect' => false],
                            ['answer' => 'Le calcul du R² sans régression', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la restriction d’exclusion est-elle difficile à tester directement ?',
                        'answers' => [
                            ['answer' => 'Elle porte sur l’absence d’un canal causal direct vers le résultat et repose souvent sur un argument économique plutôt que sur un test statistique simple', 'iscorrect' => true],
                            ['answer' => 'Elle est toujours observable directement dans les données', 'iscorrect' => false],
                            ['answer' => 'Elle est équivalente au R²', 'iscorrect' => false],
                            ['answer' => 'Elle ne dépend d’aucune hypothèse économique', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Que mesure conceptuellement l’estimateur IV ?',
                        'answers' => [
                            ['answer' => 'L’effet associé à la variation de la variable endogène induite par la composante exogène captée par l’instrument', 'iscorrect' => true],
                            ['answer' => 'La corrélation brute entre y et x', 'iscorrect' => false],
                            ['answer' => 'La moyenne nationale de la variable dépendante', 'iscorrect' => false],
                            ['answer' => 'Le R² de la première étape uniquement', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Dans une interprétation de type LATE, qui sont les « compliers » ?',
                        'answers' => [
                            ['answer' => 'Les unités dont le comportement de traitement change effectivement en réponse à l’instrument', 'iscorrect' => true],
                            ['answer' => 'Toutes les unités de la population', 'iscorrect' => false],
                            ['answer' => 'Uniquement les unités toujours traitées', 'iscorrect' => false],
                            ['answer' => 'Uniquement les unités toujours non traitées', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi l’IV peut-il identifier un effet différent de l’ATE ?',
                        'answers' => [
                            ['answer' => 'La variation instrumentale peut identifier un effet local pour un sous-groupe affecté par l’instrument', 'iscorrect' => true],
                            ['answer' => 'L’IV identifie toujours exactement la moyenne nationale', 'iscorrect' => false],
                            ['answer' => 'L’ATE et le LATE sont toujours identiques', 'iscorrect' => false],
                            ['answer' => 'L’IV élimine toute hétérogénéité des effets', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un instrument peut-il être très pertinent mais néanmoins invalide ?',
                        'answers' => [
                            ['answer' => 'Il peut expliquer fortement x tout en affectant y par un canal autre que x', 'iscorrect' => true],
                            ['answer' => 'La pertinence implique nécessairement l’exclusion', 'iscorrect' => false],
                            ['answer' => 'Un instrument pertinent ne peut jamais être corrélé avec une variable omise', 'iscorrect' => false],
                            ['answer' => 'L’exclusion dépend uniquement de la taille de l’échantillon', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les tests de faiblesse instrumentale doivent-ils être examinés avant l’interprétation de l’IV ?',
                        'answers' => [
                            ['answer' => 'Une première étape trop faible peut rendre les résultats IV très instables et les tests conventionnels peu fiables', 'iscorrect' => true],
                            ['answer' => 'Un instrument faible améliore toujours l’identification', 'iscorrect' => false],
                            ['answer' => 'La faiblesse de l’instrument n’affecte que R²', 'iscorrect' => false],
                            ['answer' => 'Une première étape faible prouve la validité de l’instrument', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi faut-il présenter l’argument institutionnel derrière un instrument ?',
                        'answers' => [
                            ['answer' => 'La validité de l’instrument dépend d’hypothèses économiques et institutionnelles qui doivent être défendues explicitement', 'iscorrect' => true],
                            ['answer' => 'Les données suffisent toujours à prouver l’exclusion', 'iscorrect' => false],
                            ['answer' => 'L’argument institutionnel n’a aucune importance', 'iscorrect' => false],
                            ['answer' => 'L’instrument est valide dès qu’il est significatif', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Données de panel et identification longitudinale',
                'questions' => [
                    [
                        'question' => 'Quelle variation est principalement exploitée par un modèle à effets fixes individuels ?',
                        'answers' => [
                            ['answer' => 'La variation au sein de chaque unité au cours du temps', 'iscorrect' => true],
                            ['answer' => 'Uniquement les différences entre unités', 'iscorrect' => false],
                            ['answer' => 'Uniquement les différences entre années', 'iscorrect' => false],
                            ['answer' => 'Uniquement les observations extrêmes', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les effets fixes peuvent-ils contrôler certaines variables omises ?',
                        'answers' => [
                            ['answer' => 'Ils éliminent les caractéristiques inobservées qui sont constantes dans le temps pour chaque unité', 'iscorrect' => true],
                            ['answer' => 'Ils contrôlent toutes les variables omises, y compris celles qui changent dans le temps', 'iscorrect' => false],
                            ['answer' => 'Ils rendent toutes les variables observables', 'iscorrect' => false],
                            ['answer' => 'Ils suppriment toute endogénéité par définition', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une variable constante dans le temps n’est-elle pas identifiée séparément dans un modèle à effets fixes individuels ?',
                        'answers' => [
                            ['answer' => 'Elle ne possède aucune variation intra-unité permettant d’estimer son coefficient séparément de l’effet fixe', 'iscorrect' => true],
                            ['answer' => 'Elle devient automatiquement dépendante de y', 'iscorrect' => false],
                            ['answer' => 'Les effets fixes utilisent uniquement les différences entre unités', 'iscorrect' => false],
                            ['answer' => 'Elle devient toujours égale à zéro', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi ajouter des effets fixes temporels à un panel ?',
                        'answers' => [
                            ['answer' => 'Pour absorber des chocs communs à toutes les unités à une période donnée', 'iscorrect' => true],
                            ['answer' => 'Pour supprimer toutes les différences individuelles', 'iscorrect' => false],
                            ['answer' => 'Pour identifier les variables constantes dans le temps', 'iscorrect' => false],
                            ['answer' => 'Pour supprimer toute variation macroéconomique', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les erreurs standards sont-elles souvent clusterisées au niveau de l’unité dans les panels ?',
                        'answers' => [
                            ['answer' => 'Pour permettre une dépendance arbitraire des erreurs au sein d’une unité au fil du temps', 'iscorrect' => true],
                            ['answer' => 'Pour éliminer les effets fixes', 'iscorrect' => false],
                            ['answer' => 'Pour rendre les unités parfaitement indépendantes', 'iscorrect' => false],
                            ['answer' => 'Pour supprimer les tendances temporelles', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les effets fixes ne suffisent-ils pas à résoudre une causalité inverse ?',
                        'answers' => [
                            ['answer' => 'La causalité inverse peut provenir de facteurs variant dans le temps que les effets fixes ne suppriment pas', 'iscorrect' => true],
                            ['answer' => 'Les effets fixes ne fonctionnent jamais', 'iscorrect' => false],
                            ['answer' => 'La causalité inverse concerne uniquement les données transversales', 'iscorrect' => false],
                            ['answer' => 'Toute variable temporelle devient constante sous effets fixes', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les données de panel peuvent-elles améliorer l’identification par rapport à une coupe transversale ?',
                        'answers' => [
                            ['answer' => 'Elles permettent d’exploiter des variations temporelles au sein des unités et de neutraliser certaines différences permanentes', 'iscorrect' => true],
                            ['answer' => 'Elles éliminent automatiquement tous les biais', 'iscorrect' => false],
                            ['answer' => 'Elles garantissent l’exogénéité des traitements', 'iscorrect' => false],
                            ['answer' => 'Elles rendent toutes les unités identiques', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle est une limite du modèle within lorsqu’une variable varie très peu au sein des unités ?',
                        'answers' => [
                            ['answer' => 'Le manque de variation intra-unité peut rendre son coefficient très imprécis', 'iscorrect' => true],
                            ['answer' => 'La variable devient automatiquement biaisée', 'iscorrect' => false],
                            ['answer' => 'Le R² devient nécessairement nul', 'iscorrect' => false],
                            ['answer' => 'La variable est toujours exclue du modèle', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi comparer effets fixes et effets aléatoires peut-il être utile ?',
                        'answers' => [
                            ['answer' => 'Les deux modèles reposent sur des hypothèses différentes concernant la relation entre les effets individuels et les régresseurs', 'iscorrect' => true],
                            ['answer' => 'Ils sont toujours mathématiquement identiques', 'iscorrect' => false],
                            ['answer' => 'Les effets aléatoires garantissent toujours une meilleure causalité', 'iscorrect' => false],
                            ['answer' => 'Les effets fixes ignorent nécessairement le temps', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une interprétation causale d’un panel exige-t-elle toujours un argument économique ?',
                        'answers' => [
                            ['answer' => La transformation statistique ne suffit pas à exclure toutes les sources de biais variant dans le temps', 'iscorrect' => true],
                            ['answer' => 'Les données de panel sont toujours expérimentales', 'iscorrect' => false],
                            ['answer' => 'Les effets fixes prouvent automatiquement les mécanismes causaux', 'iscorrect' => false],
                            ['answer' => 'Les hypothèses économiques sont inutiles avec des panels', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Différences-de-différences',
                'questions' => [
                    [
                        'question' => 'Quel est le principe central d’une différence-de-différences ?',
                        'answers' => [
                            ['answer' => 'Comparer l’évolution du groupe traité à l’évolution d’un groupe témoin sur la même période', 'iscorrect' => true],
                            ['answer' => 'Comparer uniquement les niveaux après traitement', 'iscorrect' => false],
                            ['answer' => 'Comparer seulement les moyennes avant traitement', 'iscorrect' => false],
                            ['answer' => 'Utiliser uniquement une coupe transversale post-traitement', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle hypothèse est centrale pour une interprétation causale de la différence-de-différences ?',
                        'answers' => [
                            ['answer' => 'L’hypothèse de tendances parallèles en l’absence de traitement', 'iscorrect' => true],
                            ['answer' => 'Les groupes doivent avoir exactement le même niveau initial', 'iscorrect' => false],
                            ['answer' => 'Les traitements doivent être parfaitement aléatoires', 'iscorrect' => false],
                            ['answer' => 'Il ne doit exister aucune variation temporelle', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Les groupes traité et témoin doivent-ils nécessairement avoir exactement le même niveau de résultat avant le traitement ?',
                        'answers' => [
                            ['answer' => 'Non, des niveaux initiaux différents peuvent être compatibles avec la méthode si les tendances contrefactuelles sont parallèles', 'iscorrect' => true],
                            ['answer' => 'Oui, toujours', 'iscorrect' => false],
                            ['answer' => 'Seulement si le R² est élevé', 'iscorrect' => false],
                            ['answer' => 'Uniquement avec des effets fixes', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi examine-t-on les tendances pré-traitement ?',
                        'answers' => [
                            ['answer' => 'Pour évaluer la plausibilité empirique de l’hypothèse de tendances parallèles', 'iscorrect' => true],
                            ['answer' => 'Pour calculer automatiquement l’effet causal', 'iscorrect' => false],
                            ['answer' => 'Pour supprimer toute saisonnalité', 'iscorrect' => false],
                            ['answer' => 'Pour garantir une randomisation', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Dans une différence-de-différences, que mesure l’interaction traitement × post ?',
                        'answers' => [
                            ['answer' => 'L’évolution supplémentaire du groupe traité par rapport au groupe témoin après le traitement', 'iscorrect' => true],
                            ['answer' => 'Le niveau moyen du groupe traité avant traitement', 'iscorrect' => false],
                            ['answer' => 'Le niveau absolu de la variable dépendante', 'iscorrect' => false],
                            ['answer' => 'Le R² du modèle', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi des chocs spécifiques au groupe traité peuvent-ils menacer l’identification DID ?',
                        'answers' => [
                            ['answer' => 'Ils peuvent modifier l’évolution du groupe traité indépendamment du traitement', 'iscorrect' => true],
                            ['answer' => 'Ils améliorent toujours l’identification', 'iscorrect' => false],
                            ['answer' => 'Ils garantissent les tendances parallèles', 'iscorrect' => false],
                            ['answer' => 'Ils ne peuvent jamais être observés dans un panel', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi inclure des effets fixes individuels et temporels dans un DID ?',
                        'answers' => [
                            ['answer' => 'Pour absorber les différences permanentes entre groupes et les chocs communs à chaque période', 'iscorrect' => true],
                            ['answer' => 'Pour supprimer l’interaction traitement × post', 'iscorrect' => false],
                            ['answer' => 'Pour empêcher toute variation temporelle', 'iscorrect' => false],
                            ['answer' => 'Pour rendre les groupes parfaitement identiques', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les erreurs standards doivent-elles souvent être adaptées dans une DID ?',
                        'answers' => [
                            ['answer' => 'Les observations peuvent être corrélées au sein des groupes dans le temps', 'iscorrect' => true],
                            ['answer' => 'Les coefficients sont toujours biaisés sans elles', 'iscorrect' => false],
                            ['answer' => 'Les erreurs standards déterminent le traitement', 'iscorrect' => false],
                            ['answer' => 'La différence-de-différences ne contient jamais de panel', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les études par événement sont-elles utiles autour d’un traitement ?',
                        'answers' => [
                            ['answer' => 'Elles permettent d’examiner la dynamique des effets avant et après le traitement et de rechercher des pré-tendances', 'iscorrect' => true],
                            ['answer' => 'Elles garantissent la validité de l’instrument', 'iscorrect' => false],
                            ['answer' => 'Elles éliminent automatiquement les biais', 'iscorrect' => false],
                            ['answer' => 'Elles remplacent toujours les données de panel', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi le DID avec adoption échelonnée du traitement demande-t-il une attention particulière ?',
                        'answers' => [
                            ['answer' => Des effets de traitement hétérogènes dans le temps peuvent rendre certaines estimations DID traditionnelles difficiles à interpréter', 'iscorrect' => true],
                            ['answer' => 'Toutes les formes de DID sont toujours équivalentes', 'iscorrect' => false],
                            ['answer' => 'L’adoption échelonnée élimine les tendances parallèles', 'iscorrect' => false],
                            ['answer' => 'Elle transforme automatiquement les données en coupe transversale', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Régression sur discontinuité',
                'questions' => [
                    [
                        'question' => 'Quel est le principe d’une régression sur discontinuité ?',
                        'answers' => [
                            ['answer' => Exploiter une règle de traitement qui change brutalement autour d’un seuil pour comparer des unités proches du seuil', 'iscorrect' => true],
                            ['answer' => 'Comparer uniquement les unités très éloignées du seuil', 'iscorrect' => false],
                            ['answer' => 'Utiliser uniquement une variable binaire sans seuil', 'iscorrect' => false],
                            ['answer' => 'Supposer que le traitement est parfaitement aléatoire partout', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les unités proches du seuil sont-elles importantes dans une RDD ?',
                        'answers' => [
                            ['answer' => Elles peuvent être comparables localement, ce qui permet une interprétation quasi-expérimentale sous certaines hypothèses', 'iscorrect' => true],
                            ['answer' => 'Elles sont toujours identiques en tout point', 'iscorrect' => false],
                            ['answer' => 'Elles ont nécessairement les mêmes revenus', 'iscorrect' => false],
                            ['answer' => 'Elles rendent tout besoin de test inutile', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle hypothèse empêche la manipulation stratégique du score d’assignation dans une RDD standard ?',
                        'answers' => [
                            ['answer' => 'Les unités ne doivent pas pouvoir contrôler précisément leur position de part et d’autre du seuil', 'iscorrect' => true],
                            ['answer' => 'Toutes les unités doivent être parfaitement aléatoires', 'iscorrect' => false],
                            ['answer' => 'Le score doit être normalement distribué', 'iscorrect' => false],
                            ['answer' => 'La variable de résultat doit être binaire', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la fenêtre autour du seuil est-elle un choix important en RDD ?',
                        'answers' => [
                            ['answer' => Une fenêtre trop large peut introduire davantage de différences structurelles, tandis qu’une fenêtre trop étroite peut réduire fortement la précision', 'iscorrect' => true],
                            ['answer' => La largeur n’a jamais d’effet', 'iscorrect' => false],
                            ['answer' => Une fenêtre plus large garantit toujours une meilleure identification', 'iscorrect' => false],
                            ['answer' => Une fenêtre étroite garantit toujours une estimation précise', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Que mesure principalement l’effet estimé dans une RDD standard ?',
                        'answers' => [
                            ['answer' => 'Un effet local au voisinage du seuil d’assignation', 'iscorrect' => true],
                            ['answer' => 'L’effet moyen pour toute la population dans tous les cas', 'iscorrect' => false],
                            ['answer' => 'L’effet uniquement pour les observations les plus éloignées', 'iscorrect' => false],
                            ['answer' => 'Le niveau global de la variable dépendante', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi faut-il tester la continuité des variables prédéterminées autour du seuil ?',
                        'answers' => [
                            ['answer' => Une rupture brutale d’une variable prédéterminée peut signaler un problème de comparabilité ou de manipulation', 'iscorrect' => true],
                            ['answer' => Les variables prédéterminées doivent toujours augmenter au seuil', 'iscorrect' => false],
                            ['answer' => Elles doivent nécessairement être nulles', 'iscorrect' => false],
                            ['answer' => La continuité n’a aucun lien avec l’identification', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les spécifications polynomiales élevées sont-elles parfois déconseillées en RDD ?',
                        'answers' => [
                            ['answer' => Elles peuvent devenir instables et produire une forte sensibilité aux observations éloignées du seuil', 'iscorrect' => true],
                            ['answer' => Elles sont toujours plus précises', 'iscorrect' => false],
                            ['answer' => Elles garantissent une relation linéaire', 'iscorrect' => false],
                            ['answer' => Elles rendent la fenêtre inutile', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une RDD ne fournit-elle pas nécessairement un effet global ?',
                        'answers' => [
                            ['answer' => Son identification repose sur une comparaison locale autour du seuil', 'iscorrect' => true],
                            ['answer' => Le modèle ne peut jamais estimer un effet', 'iscorrect' => false],
                            ['answer' => Les observations proches du seuil sont toujours biaisées', 'iscorrect' => false],
                            ['answer' => Une RDD ne peut utiliser aucune donnée quantitative', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les erreurs standards et le choix de bande passante sont-ils importants en RDD ?',
                        'answers' => [
                            ['answer' => Ils déterminent à la fois la précision statistique et le compromis localité-précision de l’estimation', 'iscorrect' => true],
                            ['answer' => Ils déterminent uniquement le signe du coefficient', 'iscorrect' => false],
                            ['answer' => Ils n’ont aucune influence sur l’inférence', 'iscorrect' => false],
                            ['answer' => Ils remplacent l’hypothèse d’absence de manipulation', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la RDD est-elle souvent décrite comme une stratégie quasi-expérimentale ?',
                        'answers' => [
                            ['answer' => 'Les observations proches du seuil peuvent être comparées comme si le traitement était localement attribué de manière quasi aléatoire', 'iscorrect' => true],
                            ['answer' => 'Elle utilise toujours une randomisation explicite', 'iscorrect' => false],
                            ['answer' => 'Elle n’utilise aucune hypothèse', 'iscorrect' => false],
                            ['answer' => 'Elle nécessite uniquement des données expérimentales', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Maximum de vraisemblance et modèles non linéaires',
                'questions' => [
                    [
                        'question' => 'Quel est le principe du maximum de vraisemblance ?',
                        'answers' => [
                            ['answer' => 'Choisir les paramètres qui rendent les données observées les plus plausibles selon le modèle probabiliste spécifié', 'iscorrect' => true],
                            ['answer' => 'Minimiser toujours la moyenne de y', 'iscorrect' => false],
                            ['answer' => 'Maximiser automatiquement R²', 'iscorrect' => false],
                            ['answer' => 'Choisir les paramètres indépendamment de la distribution supposée', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi prend-on souvent le logarithme de la vraisemblance ?',
                        'answers' => [
                            ['answer' => 'Il transforme les produits en sommes et facilite les calculs numériques sans modifier l’optimum', 'iscorrect' => true],
                            ['answer' => 'Il supprime toutes les hypothèses probabilistes', 'iscorrect' => false],
                            ['answer' => 'Il rend toutes les variables normales', 'iscorrect' => false],
                            ['answer' => 'Il garantit une solution linéaire', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi le modèle logit utilise-t-il une fonction logistique ?',
                        'answers' => [
                            ['answer' => 'Elle transforme l’indice latent en une probabilité comprise entre 0 et 1', 'iscorrect' => true],
                            ['answer' => 'Elle impose une relation linéaire entre probabilité et x', 'iscorrect' => false],
                            ['answer' => 'Elle rend les erreurs homoscédastiques par définition', 'iscorrect' => false],
                            ['answer' => 'Elle supprime l’endogénéité', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les coefficients logit ne s’interprètent-ils pas directement comme des variations de probabilité ?',
                        'answers' => [
                            ['answer' => 'La relation entre l’indice linéaire et la probabilité est non linéaire', 'iscorrect' => true],
                            ['answer' => 'Les coefficients sont toujours des probabilités', 'iscorrect' => false],
                            ['answer' => 'La variable dépendante n’est jamais binaire', 'iscorrect' => false],
                            ['answer' => 'La probabilité ne dépend pas des régresseurs', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les effets marginaux sont-ils calculés après estimation d’un logit ?',
                        'answers' => [
                            ['answer' => 'Ils permettent de traduire les coefficients du modèle en variations de probabilité plus directement interprétables', 'iscorrect' => true],
                            ['answer' => 'Ils suppriment le terme d’erreur', 'iscorrect' => false],
                            ['answer' => 'Ils transforment le modèle en MCO', 'iscorrect' => false],
                            ['answer' => 'Ils rendent les effets constants', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Dans un modèle probit, quelle fonction de répartition est utilisée ?',
                        'answers' => [
                            ['answer' => 'La fonction de répartition de la loi normale standard', 'iscorrect' => true],
                            ['answer' => 'La fonction logistique uniquement', 'iscorrect' => false],
                            ['answer' => 'La fonction exponentielle seule', 'iscorrect' => false],
                            ['answer' => 'La fonction de Poisson', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les coefficients logit et probit ne sont-ils pas directement comparables en magnitude brute ?',
                        'answers' => [
                            ['answer' => 'Les deux modèles utilisent des échelles latentes et des normalisations différentes', 'iscorrect' => true],
                            ['answer' => 'Ils mesurent toujours des variables différentes', 'iscorrect' => false],
                            ['answer' => 'Les coefficients probit sont toujours égaux à zéro', 'iscorrect' => false],
                            ['answer' => 'Les deux modèles utilisent des unités monétaires différentes', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la spécification de la vraisemblance est-elle essentielle en maximum de vraisemblance ?',
                        'answers' => [
                            ['answer' => 'Une mauvaise distribution ou structure probabiliste peut conduire à des estimations et inférences incorrectes', 'iscorrect' => true],
                            ['answer' => 'La vraisemblance est indépendante du modèle', 'iscorrect' => false],
                            ['answer' => 'Toutes les distributions donnent nécessairement les mêmes estimations', 'iscorrect' => false],
                            ['answer' => 'La spécification n’a d’effet que sur R²', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un maximum de vraisemblance local peut-il poser problème ?',
                        'answers' => [
                            ['answer' => 'Un algorithme numérique peut converger vers un optimum local qui n’est pas le maximum global recherché', 'iscorrect' => true],
                            ['answer' => 'Tout optimum local est automatiquement global dans tous les modèles', 'iscorrect' => false],
                            ['answer' => 'Les modèles de vraisemblance n’ont jamais plusieurs maxima', 'iscorrect' => false],
                            ['answer' => 'Le maximum local signifie que les données sont fausses', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les méthodes numériques sont-elles importantes pour les modèles professionnels non linéaires ?',
                        'answers' => [
                            ['answer' => Les fonctions de vraisemblance complexes n’admettent pas toujours de solution analytique simple', 'iscorrect' => true],
                            ['answer' => 'Les solutions analytiques n’existent jamais en économétrie', 'iscorrect' => false],
                            ['answer' => 'Les méthodes numériques garantissent toujours des résultats exacts', 'iscorrect' => false],
                            ['answer' => 'Les algorithmes rendent les hypothèses inutiles', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Causalité, médiation et hétérogénéité des effets',
                'questions' => [
                    [
                        'question' => 'Pourquoi l’effet causal moyen peut-il masquer une forte hétérogénéité des traitements ?',
                        'answers' => [
                            ['answer' => 'Un effet moyen peut être positif alors que les effets individuels diffèrent fortement, voire ont des signes opposés', 'iscorrect' => true],
                            ['answer' => 'Tous les individus ont nécessairement le même effet', 'iscorrect' => false],
                            ['answer' => 'L’effet moyen est toujours égal à l’effet de chaque individu', 'iscorrect' => false],
                            ['answer' => 'L’hétérogénéité n’existe jamais en économie', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi l’interaction traitement × groupe peut-elle être utile ?',
                        'answers' => [
                            ['answer' => 'Elle permet d’étudier si l’effet estimé diffère selon une caractéristique observée des unités', 'iscorrect' => true],
                            ['answer' => 'Elle supprime toute hétérogénéité', 'iscorrect' => false],
                            ['answer' => 'Elle rend l’effet identique pour tous', 'iscorrect' => false],
                            ['answer' => 'Elle remplace nécessairement les effets fixes', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi faut-il être prudent avec l’interprétation des mécanismes médiateurs ?',
                        'answers' => [
                            ['answer' => 'Contrôler un médiateur peut modifier l’estimand en passant de l’effet total à un effet direct ou en introduisant d’autres problèmes', 'iscorrect' => true],
                            ['answer' => 'Le médiateur est toujours une variable de contrôle neutre', 'iscorrect' => false],
                            ['answer' => 'Un médiateur est toujours exogène', 'iscorrect' => false],
                            ['answer' => 'Le contrôle d’un médiateur ne change jamais les coefficients', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les effets de traitement dynamiques sont-ils importants ?',
                        'answers' => [
                            ['answer' => 'L’impact peut évoluer dans le temps, avec des effets différés, temporaires ou persistants', 'iscorrect' => true],
                            ['answer' => 'Les effets causaux sont toujours instantanés', 'iscorrect' => false],
                            ['answer' => 'Un effet dynamique est nécessairement nul', 'iscorrect' => false],
                            ['answer' => 'La dynamique concerne uniquement les variables financières', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un effet moyen nul peut-il cacher des effets économiques importants ?',
                        'answers' => [
                            ['answer' => 'Des effets positifs et négatifs entre sous-groupes peuvent se compenser dans la moyenne globale', 'iscorrect' => true],
                            ['answer' => 'Un effet moyen nul signifie toujours absence d’effet individuel', 'iscorrect' => false],
                            ['answer' => 'Les sous-groupes sont nécessairement identiques', 'iscorrect' => false],
                            ['answer' => 'Les effets hétérogènes ne peuvent jamais se compenser', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi l’estimation d’un effet causal nécessite-t-elle de définir précisément la population d’intérêt ?',
                        'answers' => [
                            ['answer' => 'L’effet peut varier selon les unités, et l’estimand dépend du groupe auquel il se rapporte', 'iscorrect' => true],
                            ['answer' => 'Les effets causaux sont toujours identiques dans toutes les populations', 'iscorrect' => false],
                            ['answer' => 'La population n’a aucun rôle dans l’estimation', 'iscorrect' => false],
                            ['answer' => 'Un estimand ne dépend jamais de la population', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les analyses par sous-groupes peuvent-elles être difficiles à interpréter ?',
                        'answers' => [
                            ['answer' => La réduction de taille d’échantillon augmente l’incertitude et les comparaisons multiples peuvent compliquer l’inférence', 'iscorrect' => true],
                            ['answer' => 'Les sous-groupes garantissent toujours davantage de précision', 'iscorrect' => false],
                            ['answer' => 'Chaque sous-groupe est toujours indépendant des autres', 'iscorrect' => false],
                            ['answer' => 'La division des données supprime les biais', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un effet causal externe à l’échantillon peut-il ne pas se généraliser ?',
                        'answers' => [
                            ['answer' => 'Les mécanismes ou caractéristiques de la population étudiée peuvent différer de ceux d’une autre population', 'iscorrect' => true],
                            ['answer' => 'Toute estimation expérimentale est universelle', 'iscorrect' => false],
                            ['answer' => 'La validité externe est garantie par un grand R²', 'iscorrect' => false],
                            ['answer' => 'Les populations économiques sont toujours identiques', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la validité interne et la validité externe sont-elles distinctes ?',
                        'answers' => [
                            ['answer' => La validité interne concerne la crédibilité de l’effet dans l’étude, tandis que la validité externe concerne sa généralisation à d’autres contextes', 'iscorrect' => true],
                            ['answer' => 'Les deux notions sont toujours identiques', 'iscorrect' => false],
                            ['answer' => 'La validité externe garantit la causalité interne', 'iscorrect' => false],
                            ['answer' => 'La validité interne concerne uniquement les prévisions', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une analyse économétrique professionnelle doit-elle expliciter son estimand ?',
                        'answers' => [
                            ['answer' => 'Sans définition précise de la quantité recherchée, l’interprétation des coefficients et des méthodes d’identification peut être ambiguë', 'iscorrect' => true],
                            ['answer' => 'L’estimand est uniquement une notation mathématique sans contenu économique', 'iscorrect' => false],
                            ['answer' => 'Tous les coefficients mesurent nécessairement le même effet', 'iscorrect' => false],
                            ['answer' => 'La définition de l’estimand ne change jamais la méthode', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Robustesse, réplication et pratique économétrique',
                'questions' => [
                    [
                        'question' => 'Pourquoi une analyse de robustesse doit-elle inclure des spécifications économiquement plausibles mais défavorables au résultat principal ?',
                        'answers' => [
                            ['answer' => Pour déterminer si la conclusion dépend excessivement d’un choix particulier du modèle ou des données', 'iscorrect' => true],
                            ['answer' => 'Pour garantir que le résultat devient significatif', 'iscorrect' => false],
                            ['answer' => 'Pour choisir uniquement le résultat le plus élevé', 'iscorrect' => false],
                            ['answer' => 'Pour supprimer toutes les observations atypiques', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la pré-enregistrement d’une analyse peut-il améliorer la crédibilité empirique ?',
                        'answers' => [
                            ['answer' => 'Il limite la possibilité d’adapter ex post les hypothèses et les spécifications au résultat observé', 'iscorrect' => true],
                            ['answer' => 'Il garantit que l’hypothèse économique est vraie', 'iscorrect' => false],
                            ['answer' => 'Il élimine toute erreur statistique', 'iscorrect' => false],
                            ['answer' => 'Il rend les résultats automatiquement significatifs', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les tests multiples peuvent-ils créer un problème de faux positifs ?',
                        'answers' => [
                            ['answer' => 'La probabilité d’obtenir au moins un résultat significatif par hasard augmente lorsque le nombre de tests augmente', 'iscorrect' => true],
                            ['answer' => 'Les tests multiples réduisent toujours les faux positifs', 'iscorrect' => false],
                            ['answer' => 'Chaque test supplémentaire garantit une meilleure identification', 'iscorrect' => false],
                            ['answer' => 'La p-value devient indépendante du nombre de tests', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la reproductibilité computationnelle est-elle importante ?',
                        'answers' => [
                            ['answer' => 'Elle permet de reconstruire les résultats à partir des données, du code et des transformations documentées', 'iscorrect' => true],
                            ['answer' => 'Elle prouve que les hypothèses causales sont vraies', 'iscorrect' => false],
                            ['answer' => 'Elle supprime tous les biais statistiques', 'iscorrect' => false],
                            ['answer' => 'Elle garantit les mêmes résultats sur toutes les populations', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi faut-il distinguer prévision et estimation causale ?',
                        'answers' => [
                            ['answer' => Un modèle peut être très performant pour prédire sans identifier correctement l’effet d’une intervention', 'iscorrect' => true],
                            ['answer' => 'Une bonne prévision garantit toujours un effet causal', 'iscorrect' => false],
                            ['answer' => 'La causalité est toujours moins informative que la prévision', 'iscorrect' => false],
                            ['answer' => 'Les deux objectifs reposent exactement sur les mêmes hypothèses', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une bonne pratique empirique exige-t-elle de rapporter les unités et les transformations des variables ?',
                        'answers' => [
                            ['answer' => 'Elles déterminent l’interprétation des coefficients et permettent de vérifier la reproductibilité des calculs', 'iscorrect' => true],
                            ['answer' => 'Les unités n’ont jamais d’importance', 'iscorrect' => false],
                            ['answer' => 'Les transformations sont toujours neutres économiquement', 'iscorrect' => false],
                            ['answer' => 'Les coefficients sont indépendants de toute transformation', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une observation influente mérite-t-elle une analyse spécifique ?',
                        'answers' => [
                            ['answer' => 'Elle peut exercer une influence disproportionnée sur les coefficients estimés et modifier les conclusions', 'iscorrect' => true],
                            ['answer' => 'Toute observation influente est nécessairement erronée', 'iscorrect' => false],
                            ['answer' => 'Une observation influente n’a jamais d’effet sur les MCO', 'iscorrect' => false],
                            ['answer' => 'Les observations influentes doivent toujours être supprimées', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une bonne pratique consiste-t-elle à distinguer résultats principaux et analyses secondaires ?',
                        'answers' => [
                            ['answer' => 'Elle clarifie quels résultats correspondent aux hypothèses et spécifications principales et lesquels servent à tester la robustesse ou l’hétérogénéité', 'iscorrect' => true],
                            ['answer' => 'Les analyses secondaires sont toujours sans valeur', 'iscorrect' => false],
                            ['answer' => 'Les résultats principaux sont automatiquement causaux', 'iscorrect' => false],
                            ['answer' => 'Cette distinction n’a aucune utilité scientifique', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi faut-il éviter de choisir une spécification uniquement parce qu’elle produit la plus petite p-value ?',
                        'answers' => [
                            ['answer' => 'Cela peut conduire à une sélection opportuniste du modèle et à une inflation du risque de faux positifs', 'iscorrect' => true],
                            ['answer' => 'La plus petite p-value garantit toujours la meilleure causalité', 'iscorrect' => false],
                            ['answer' => 'Les p-values ne dépendent jamais de la spécification', 'iscorrect' => false],
                            ['answer' => 'Une spécification plus significative est toujours économiquement supérieure', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel principe résume le mieux une analyse économétrique professionnelle ?',
                        'answers' => [
                            ['answer' => 'Définir clairement l’estimand, justifier l’identification, spécifier le modèle, diagnostiquer les données et rapporter honnêtement l’incertitude et la robustesse', 'iscorrect' => true],
                            ['answer' => 'Choisir le modèle ayant le plus grand R²', 'iscorrect' => false],
                            ['answer' => 'Interpréter tout coefficient significatif comme causal', 'iscorrect' => false],
                            ['answer' => 'Masquer les spécifications qui donnent des résultats faibles', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],
        ];

        foreach ($quizzes as $quizData) {
            $quiz = Quiz::create([
                'subject_id' => $subject->id,
                'title' => $quizData['title'],
                'level' => 'Professional',
            ]);

            foreach ($quizData['questions'] as $questionData) {
                $question = Question::create([
                    'quiz_id' => $quiz->id,
                    'question' => $questionData['question'],
                ]);

                // Mélange des réponses afin que la bonne réponse ne soit pas toujours en première position.
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
