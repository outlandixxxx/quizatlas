```php
<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Major;
use App\Models\Subject;
use App\Models\Quiz;
use App\Models\Question;
use App\Models\Answer;

class EconometricsAdvancedSeeder extends Seeder
{
    public function run(): void
    {
        $major = Major::where('slug', 'economy')->firstOrFail();

        $subject = Subject::where('major_id', $major->id)
            ->where('slug', 'econometrics')
            ->firstOrFail();

        $quizzes = [
            [
                'title' => 'Propriétés des estimateurs MCO',
                'questions' => [
                    [
                        'question' => 'Sous les hypothèses classiques d’exogénéité et de rang complet, que garantit principalement le théorème de Gauss-Markov pour les MCO ?',
                        'answers' => [
                            ['answer' => 'Les estimateurs MCO sont BLUE, c’est-à-dire linéaires, sans biais et de variance minimale parmi les estimateurs linéaires sans biais', 'iscorrect' => true],
                            ['answer' => 'Les estimateurs MCO sont toujours exactement égaux aux paramètres vrais dans tout échantillon', 'iscorrect' => false],
                            ['answer' => 'Les MCO garantissent automatiquement la causalité', 'iscorrect' => false],
                            ['answer' => 'Les MCO imposent une normalité parfaite des variables explicatives', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle hypothèse est particulièrement importante pour garantir l’absence de biais des coefficients MCO dans un modèle linéaire ?',
                        'answers' => [
                            ['answer' => 'La moyenne conditionnelle de l’erreur doit être nulle sachant les variables explicatives', 'iscorrect' => true],
                            ['answer' => 'Les variables explicatives doivent toutes être identiquement distribuées', 'iscorrect' => false],
                            ['answer' => 'La variable dépendante doit être constante', 'iscorrect' => false],
                            ['answer' => 'Le nombre de variables doit être égal au nombre d’observations', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la normalité des erreurs n’est-elle pas nécessaire pour que les MCO soient sans biais ?',
                        'answers' => [
                            ['answer' => 'L’exogénéité suffit à établir l’absence de biais, tandis que la normalité intervient surtout dans certaines procédures exactes d’inférence en petit échantillon', 'iscorrect' => true],
                            ['answer' => 'La normalité n’a jamais aucun rôle en économétrie', 'iscorrect' => false],
                            ['answer' => 'La normalité remplace toujours l’exogénéité', 'iscorrect' => false],
                            ['answer' => 'Les MCO exigent toujours une variable dépendante normale', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Que représente le rang complet de la matrice des régresseurs dans un modèle linéaire ?',
                        'answers' => [
                            ['answer' => 'L’absence de dépendance linéaire parfaite entre les variables explicatives', 'iscorrect' => true],
                            ['answer' => 'L’absence totale de corrélation entre les variables', 'iscorrect' => false],
                            ['answer' => 'La normalité des erreurs', 'iscorrect' => false],
                            ['answer' => 'La causalité du modèle', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la variance des estimateurs MCO dépend-elle de la matrice des variables explicatives ?',
                        'answers' => [
                            ['answer' => 'La quantité d’information et la colinéarité entre les régresseurs influencent directement la précision des coefficients', 'iscorrect' => true],
                            ['answer' => 'La variance dépend uniquement de la moyenne de y', 'iscorrect' => false],
                            ['answer' => 'La variance est indépendante de la dispersion de x', 'iscorrect' => false],
                            ['answer' => 'La précision dépend uniquement du signe des coefficients', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Que se passe-t-il lorsqu’une variable explicative est parfaitement colinéaire à une autre ?',
                        'answers' => [
                            ['answer' => 'Les coefficients individuels ne sont pas séparément identifiables dans le modèle MCO standard', 'iscorrect' => true],
                            ['answer' => 'Les erreurs standards deviennent nécessairement nulles', 'iscorrect' => false],
                            ['answer' => 'Le R² devient toujours égal à zéro', 'iscorrect' => false],
                            ['answer' => 'La variable dépendante devient constante', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la multicolinéarité imparfaite peut-elle produire des intervalles de confiance larges ?',
                        'answers' => [
                            ['answer' => 'Elle augmente la variance des coefficients individuels en rendant l’information propre à chaque régresseur moins abondante', 'iscorrect' => true],
                            ['answer' => 'Elle réduit toujours les erreurs standards', 'iscorrect' => false],
                            ['answer' => 'Elle rend les coefficients nécessairement biaisés', 'iscorrect' => false],
                            ['answer' => 'Elle supprime toute variation de la variable dépendante', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les MCO restent-ils BLUE en présence d’hétéroscédasticité si l’exogénéité est maintenue, mais sous certaines réserves ?',
                        'answers' => [
                            ['answer' => 'Les coefficients peuvent rester sans biais, mais les MCO ne sont plus nécessairement efficaces parmi les estimateurs linéaires sans biais et les erreurs standards classiques deviennent invalides', 'iscorrect' => true],
                            ['answer' => 'L’hétéroscédasticité garantit toujours l’efficacité maximale', 'iscorrect' => false],
                            ['answer' => 'Les coefficients deviennent automatiquement inconsistants', 'iscorrect' => false],
                            ['answer' => 'La causalité est automatiquement identifiée', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une bonne spécification économique est-elle importante même lorsque les calculs MCO sont corrects ?',
                        'answers' => [
                            ['answer' => 'Un calcul correct d’un modèle mal spécifié peut produire une interprétation économiquement trompeuse', 'iscorrect' => true],
                            ['answer' => 'La spécification n’a aucun effet sur le sens des coefficients', 'iscorrect' => false],
                            ['answer' => 'Les MCO corrigent automatiquement toute erreur de théorie', 'iscorrect' => false],
                            ['answer' => 'Un modèle mal spécifié devient nécessairement causal', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la précision statistique ne doit-elle pas être confondue avec la validité causale ?',
                        'answers' => [
                            ['answer' => 'Un estimateur peut être très précis autour d’une relation biaisée ou non causale', 'iscorrect' => true],
                            ['answer' => 'Une faible erreur standard prouve toujours la causalité', 'iscorrect' => false],
                            ['answer' => 'La causalité dépend uniquement de R²', 'iscorrect' => false],
                            ['answer' => 'La précision et la causalité sont deux notions identiques', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Endogénéité et biais de variable omise',
                'questions' => [
                    [
                        'question' => 'Dans quel cas une variable explicative est-elle endogène ?',
                        'answers' => [
                            ['answer' => 'Lorsqu’elle est corrélée avec le terme d’erreur du modèle structurel', 'iscorrect' => true],
                            ['answer' => 'Lorsqu’elle est corrélée avec une autre variable explicative seulement', 'iscorrect' => false],
                            ['answer' => 'Lorsqu’elle a une variance élevée', 'iscorrect' => false],
                            ['answer' => 'Lorsqu’elle est mesurée en logarithmes', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle situation constitue une source classique d’endogénéité ?',
                        'answers' => [
                            ['answer' => 'Une variable omise qui influence à la fois la variable dépendante et le régresseur d’intérêt', 'iscorrect' => true],
                            ['answer' => 'Une moyenne élevée de la variable dépendante', 'iscorrect' => false],
                            ['answer' => 'Une faible taille d’échantillon seule', 'iscorrect' => false],
                            ['answer' => 'Une variable indicatrice correctement spécifiée', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Que décrit le biais de variable omise ?',
                        'answers' => [
                            ['answer' => 'Le coefficient d’une variable incluse capture partiellement l’effet d’une variable pertinente laissée dans l’erreur lorsqu’elles sont corrélées', 'iscorrect' => true],
                            ['answer' => 'Une erreur purement numérique sans conséquence économique', 'iscorrect' => false],
                            ['answer' => 'Une réduction automatique de R²', 'iscorrect' => false],
                            ['answer' => 'Une variance nulle du terme d’erreur', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi l’ajout d’une variable de contrôle pertinente peut-il modifier substantiellement le coefficient d’intérêt ?',
                        'answers' => [
                            ['answer' => 'Elle peut isoler une partie de l’association auparavant attribuée à la variable d’intérêt', 'iscorrect' => true],
                            ['answer' => 'Un coefficient de régression ne peut jamais changer après ajout d’un contrôle', 'iscorrect' => false],
                            ['answer' => 'Le contrôle force toujours le coefficient à zéro', 'iscorrect' => false],
                            ['answer' => 'Le terme d’erreur disparaît automatiquement', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce qu’une causalité inverse ?',
                        'answers' => [
                            ['answer' => 'Le résultat influence à son tour la variable explicative, créant une relation bidirectionnelle', 'iscorrect' => true],
                            ['answer' => 'Une variable explicative est mesurée deux fois', 'iscorrect' => false],
                            ['answer' => 'Les résidus ont une moyenne positive', 'iscorrect' => false],
                            ['answer' => 'La variable dépendante est toujours retardée', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une expérimentation randomisée peut-elle réduire l’endogénéité ?',
                        'answers' => [
                            ['answer' => 'La randomisation rend, sous les conditions appropriées, l’attribution du traitement indépendante des facteurs potentiellement confondants avant le traitement', 'iscorrect' => true],
                            ['answer' => 'Elle augmente toujours R²', 'iscorrect' => false],
                            ['answer' => 'Elle élimine toute erreur de mesure', 'iscorrect' => false],
                            ['answer' => 'Elle garantit que tous les résultats sont identiques', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une corrélation entre x et y peut-elle rester biaisée même après ajout de plusieurs contrôles ?',
                        'answers' => [
                            ['answer' => Des facteurs inobservés ou une mauvaise identification peuvent encore créer une corrélation entre x et l’erreur', 'iscorrect' => true],
                            ['answer' => Ajouter des contrôles élimine toujours toute endogénéité', 'iscorrect' => false],
                            ['answer' => Les contrôles rendent automatiquement toutes les variables exogènes', 'iscorrect' => false],
                            ['answer' => Une régression multiple ne peut jamais être biaisée', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel problème apparaît lorsque l’on contrôle une variable située sur le chemin causal entre le traitement et le résultat ?',
                        'answers' => [
                            ['answer' => 'Le contrôle peut supprimer une partie de l’effet causal total que l’on cherche à mesurer', 'iscorrect' => true],
                            ['answer' => 'Il augmente nécessairement l’effet total', 'iscorrect' => false],
                            ['answer' => 'Il garantit l’identification de l’effet direct et total simultanément', 'iscorrect' => false],
                            ['answer' => 'Il n’a aucun impact sur le coefficient d’intérêt', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une variable instrumentale peut-elle être utile face à l’endogénéité ?',
                        'answers' => [
                            ['answer' => 'Elle fournit une source de variation de la variable endogène supposée exogène au terme d’erreur', 'iscorrect' => true],
                            ['answer' => 'Elle remplace automatiquement toute variable explicative', 'iscorrect' => false],
                            ['answer' => 'Elle garantit une corrélation nulle avec la variable endogène', 'iscorrect' => false],
                            ['answer' => 'Elle supprime toute incertitude statistique', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi l’identification causale est-elle une question distincte de l’estimation numérique ?',
                        'answers' => [
                            ['answer' => 'Obtenir un coefficient précis ne suffit pas à garantir que la variation exploitée identifie le mécanisme causal recherché', 'iscorrect' => true],
                            ['answer' => 'L’estimation numérique et l’identification sont toujours exactement la même chose', 'iscorrect' => false],
                            ['answer' => 'L’identification ne dépend jamais des hypothèses', 'iscorrect' => false],
                            ['answer' => 'Une bonne estimation implique toujours une causalité valide', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Variables instrumentales et 2SLS',
                'questions' => [
                    [
                        'question' => 'Quelles sont les deux conditions fondamentales d’un instrument valide ?',
                        'answers' => [
                            ['answer' => 'Pertinence vis-à-vis de la variable endogène et restriction d’exclusion vis-à-vis du résultat', 'iscorrect' => true],
                            ['answer' => 'Normalité et homoscédasticité parfaites', 'iscorrect' => false],
                            ['answer' => 'Corrélation avec l’erreur et absence de corrélation avec x', 'iscorrect' => false],
                            ['answer' => 'Variance nulle et moyenne positive', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Que signifie la pertinence d’un instrument ?',
                        'answers' => [
                            ['answer' => 'L’instrument doit expliquer une part suffisante de la variation de la variable endogène', 'iscorrect' => true],
                            ['answer' => 'L’instrument doit être totalement indépendant de la variable endogène', 'iscorrect' => false],
                            ['answer' => 'L’instrument doit expliquer directement toute la variable dépendante', 'iscorrect' => false],
                            ['answer' => 'L’instrument doit être parfaitement corrélé avec l’erreur', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Que signifie la restriction d’exclusion ?',
                        'answers' => [
                            ['answer' => 'L’instrument n’affecte le résultat qu’à travers la variable endogène ciblée dans le cadre du modèle causal', 'iscorrect' => true],
                            ['answer' => 'L’instrument ne doit avoir aucune relation avec x', 'iscorrect' => false],
                            ['answer' => 'L’instrument doit être indépendant de toute variable économique', 'iscorrect' => false],
                            ['answer' => 'L’instrument doit être directement inclus dans y', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un instrument faible est-il problématique ?',
                        'answers' => [
                            ['answer' => 'La faible première étape rend l’estimation IV très imprécise et peut entraîner des problèmes importants d’inférence et de biais', 'iscorrect' => true],
                            ['answer' => 'Il garantit automatiquement une meilleure précision', 'iscorrect' => false],
                            ['answer' => 'Il supprime l’endogénéité', 'iscorrect' => false],
                            ['answer' => 'Il rend les MCO parfaitement efficaces', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Que fait la première étape de la méthode des doubles moindres carrés (2SLS) ?',
                        'answers' => [
                            ['answer' => 'Elle explique la variable endogène à l’aide des instruments et des autres variables exogènes du modèle', 'iscorrect' => true],
                            ['answer' => 'Elle estime directement la variable dépendante sans régresseurs', 'iscorrect' => false],
                            ['answer' => 'Elle supprime toutes les variables de contrôle', 'iscorrect' => false],
                            ['answer' => 'Elle calcule uniquement R²', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Que fait la deuxième étape de 2SLS dans sa formulation intuitive ?',
                        'answers' => [
                            ['answer' => 'Elle utilise la partie prédite de la variable endogène pour estimer l’équation de résultat', 'iscorrect' => true],
                            ['answer' => 'Elle supprime le terme d’erreur de l’équation', 'iscorrect' => false],
                            ['answer' => 'Elle remplace toutes les observations par la moyenne', 'iscorrect' => false],
                            ['answer' => 'Elle estime uniquement le premier instrument', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi ne faut-il pas interpréter un instrument comme une simple variable de contrôle ?',
                        'answers' => [
                            ['answer' => 'Son rôle est de créer une variation exogène exploitable pour identifier un effet, pas seulement de neutraliser une caractéristique observée', 'iscorrect' => true],
                            ['answer' => 'Un instrument doit toujours être indépendant de x', 'iscorrect' => false],
                            ['answer' => 'Un instrument sert uniquement à améliorer R²', 'iscorrect' => false],
                            ['answer' => 'Un instrument remplace toujours toutes les variables exogènes', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une forte relation entre l’instrument et y ne suffit-elle pas à valider l’instrument ?',
                        'answers' => [
                            ['answer' => 'L’instrument peut être lié à y par un autre canal direct ou via une variable omise, violant la restriction d’exclusion', 'iscorrect' => true],
                            ['answer' => 'Une relation forte avec y garantit toujours la validité', 'iscorrect' => false],
                            ['answer' => 'La pertinence n’a aucun rapport avec la variable endogène', 'iscorrect' => false],
                            ['answer' => 'L’exclusion n’est jamais nécessaire', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les hypothèses IV sont-elles souvent difficiles à défendre empiriquement ?',
                        'answers' => [
                            ['answer' => 'La pertinence peut être testée partiellement, mais l’exclusion est généralement une hypothèse économique qui ne se teste pas directement avec les seules données', 'iscorrect' => true],
                            ['answer' => 'Les deux conditions sont toujours directement observables', 'iscorrect' => false],
                            ['answer' => 'Un instrument est valide dès qu’il est statistiquement significatif', 'iscorrect' => false],
                            ['answer' => 'L’exclusion est automatiquement satisfaite dans toute expérience naturelle', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est l’intérêt général de 2SLS ?',
                        'answers' => [
                            ['answer' => 'Obtenir une estimation causale sous des hypothèses valides lorsque certains régresseurs sont endogènes', 'iscorrect' => true],
                            ['answer' => 'Maximiser toujours R²', 'iscorrect' => false],
                            ['answer' => 'Éliminer toutes les erreurs de mesure', 'iscorrect' => false],
                            ['answer' => 'Remplacer toute théorie économique', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Hétéroscédasticité, autocorrélation et inférence robuste',
                'questions' => [
                    [
                        'question' => 'Quelle est la principale conséquence de l’hétéroscédasticité sur l’inférence MCO classique ?',
                        'answers' => [
                            ['answer' => 'Les erreurs standards usuelles peuvent être incorrectes', 'iscorrect' => true],
                            ['answer' => 'Les coefficients deviennent nécessairement impossibles à estimer', 'iscorrect' => false],
                            ['answer' => 'R² devient automatiquement nul', 'iscorrect' => false],
                            ['answer' => 'Les variables deviennent toutes endogènes', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les erreurs standards robustes sont-elles utiles ?',
                        'answers' => [
                            ['answer' => 'Elles permettent une inférence plus fiable lorsque la variance des erreurs n’est pas constante, sous les conditions appropriées', 'iscorrect' => true],
                            ['answer' => 'Elles corrigent toujours l’endogénéité', 'iscorrect' => false],
                            ['answer' => 'Elles rendent les MCO plus efficaces dans tous les cas', 'iscorrect' => false],
                            ['answer' => 'Elles suppriment les variables omises', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce que l’autocorrélation de premier ordre ?',
                        'answers' => [
                            ['answer' => 'Une corrélation entre l’erreur d’une période et celle de la période précédente', 'iscorrect' => true],
                            ['answer' => 'Une corrélation parfaite entre deux régresseurs', 'iscorrect' => false],
                            ['answer' => 'Une corrélation entre x et y uniquement', 'iscorrect' => false],
                            ['answer' => 'Une variance négative des erreurs', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi l’autocorrélation est-elle particulièrement importante pour les séries temporelles ?',
                        'answers' => [
                            ['answer' => 'Les erreurs peuvent contenir des informations persistantes qui violent l’indépendance temporelle supposée par certaines procédures classiques', 'iscorrect' => true],
                            ['answer' => 'Les observations temporelles sont toujours indépendantes', 'iscorrect' => false],
                            ['answer' => 'Le temps supprime toute dépendance', 'iscorrect' => false],
                            ['answer' => 'Les coefficients ne dépendent jamais des erreurs', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une correction robuste à l’hétéroscédasticité ne suffit-elle pas à traiter l’autocorrélation temporelle ?',
                        'answers' => [
                            ['answer' => 'Elle traite une structure de variance non constante mais ne modélise pas nécessairement la covariance entre erreurs dans le temps', 'iscorrect' => true],
                            ['answer' => 'Les deux problèmes sont exactement identiques', 'iscorrect' => false],
                            ['answer' => 'L’autocorrélation est toujours éliminée par des erreurs robustes simples', 'iscorrect' => false],
                            ['answer' => 'L’hétéroscédasticité et l’autocorrélation n’affectent jamais l’inférence', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi utiliser des erreurs standards HAC dans certaines séries temporelles ?',
                        'answers' => [
                            ['answer' => 'Elles permettent une inférence robuste à certaines formes d’hétéroscédasticité et d’autocorrélation', 'iscorrect' => true],
                            ['answer' => 'Elles rendent les variables stationnaires', 'iscorrect' => false],
                            ['answer' => 'Elles corrigent les biais de variable omise', 'iscorrect' => false],
                            ['answer' => 'Elles remplacent la spécification dynamique', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une structure temporelle mal spécifiée peut-elle laisser des résidus autocorrélés ?',
                        'answers' => [
                            ['answer' => 'Le modèle peut omettre des retards, des tendances ou d’autres composantes dynamiques pertinentes', 'iscorrect' => true],
                            ['answer' => 'Les résidus sont toujours indépendants par définition', 'iscorrect' => false],
                            ['answer' => 'Un modèle linéaire ne peut jamais contenir d’autocorrélation', 'iscorrect' => false],
                            ['answer' => 'L’autocorrélation vient uniquement de valeurs aberrantes', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les erreurs standards trop petites peuvent-elles conduire à des conclusions excessivement confiantes ?',
                        'answers' => [
                            ['answer' => 'Elles peuvent produire des statistiques de test trop grandes et des intervalles de confiance trop étroits', 'iscorrect' => true],
                            ['answer' => 'Elles réduisent toujours le biais des coefficients', 'iscorrect' => false],
                            ['answer' => 'Elles garantissent une causalité plus forte', 'iscorrect' => false],
                            ['answer' => 'Elles augmentent automatiquement l’échantillon', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi faut-il distinguer correction des erreurs standards et correction des coefficients ?',
                        'answers' => [
                            ['answer' => 'Une méthode peut modifier l’inférence sans résoudre le problème qui biaise le coefficient lui-même', 'iscorrect' => true],
                            ['answer' => 'Toute correction d’erreur standard rend automatiquement les coefficients sans biais', 'iscorrect' => false],
                            ['answer' => 'Les coefficients et erreurs standards sont toujours identiques', 'iscorrect' => false],
                            ['answer' => 'Une erreur standard ne concerne jamais l’inférence', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel principe est essentiel lorsqu’un problème d’inférence est détecté ?',
                        'answers' => [
                            ['answer' => 'Identifier la source du problème avant de choisir une correction statistique appropriée', 'iscorrect' => true],
                            ['answer' => 'Utiliser systématiquement la même correction pour tous les problèmes', 'iscorrect' => false],
                            ['answer' => 'Changer les données jusqu’à obtenir une p-value faible', 'iscorrect' => false],
                            ['answer' => 'Ignorer le problème si R² est élevé', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Séries temporelles, stationnarité et cointégration',
                'questions' => [
                    [
                        'question' => 'Pourquoi une série avec racine unitaire est-elle typiquement non stationnaire ?',
                        'answers' => [
                            ['answer' => 'Les chocs peuvent avoir des effets persistants qui empêchent la convergence vers une distribution stable autour d’un niveau fixe', 'iscorrect' => true],
                            ['answer' => 'La série a toujours une variance nulle', 'iscorrect' => false],
                            ['answer' => 'Les observations deviennent indépendantes', 'iscorrect' => false],
                            ['answer' => 'La moyenne est nécessairement constante', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le principe d’un test de racine unitaire ?',
                        'answers' => [
                            ['answer' => 'Évaluer si la dynamique de la série est compatible avec la présence d’une racine unitaire', 'iscorrect' => true],
                            ['answer' => 'Tester uniquement la normalité des données', 'iscorrect' => false],
                            ['answer' => 'Tester uniquement l’hétéroscédasticité', 'iscorrect' => false],
                            ['answer' => 'Mesurer directement la causalité', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi différencier une série non stationnaire peut-il être utile ?',
                        'answers' => [
                            ['answer' => 'La différenciation peut éliminer une composante stochastique persistante et produire une série plus stationnaire', 'iscorrect' => true],
                            ['answer' => 'Elle garantit toujours une série normale', 'iscorrect' => false],
                            ['answer' => 'Elle augmente nécessairement le niveau de la série', 'iscorrect' => false],
                            ['answer' => 'Elle supprime automatiquement toute relation dynamique', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce qu’une régression fallacieuse ?',
                        'answers' => [
                            ['answer' => 'Une régression donnant une relation statistiquement forte entre des séries non stationnaires sans fondement économique stable', 'iscorrect' => true],
                            ['answer' => 'Une régression avec une faible précision uniquement', 'iscorrect' => false],
                            ['answer' => 'Une régression avec variables qualitatives', 'iscorrect' => false],
                            ['answer' => 'Une régression avec R² faible', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce que la cointégration ?',
                        'answers' => [
                            ['answer' => 'Une combinaison linéaire de séries non stationnaires qui est elle-même stationnaire', 'iscorrect' => true],
                            ['answer' => 'Une corrélation parfaite entre deux variables stationnaires', 'iscorrect' => false],
                            ['answer' => 'Une indépendance parfaite entre séries', 'iscorrect' => false],
                            ['answer' => 'Une absence totale de dynamique', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la cointégration est-elle économiquement intéressante ?',
                        'answers' => [
                            ['answer' => 'Elle peut représenter une relation d’équilibre de long terme malgré des dynamiques de court terme non stationnaires', 'iscorrect' => true],
                            ['answer' => 'Elle implique que les séries ne peuvent jamais bouger', 'iscorrect' => false],
                            ['answer' => 'Elle signifie que les variables sont indépendantes', 'iscorrect' => false],
                            ['answer' => 'Elle supprime toutes les fluctuations de court terme', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une relation de court terme peut-elle différer d’une relation de long terme ?',
                        'answers' => [
                            ['answer' => 'Les ajustements, retards et chocs transitoires peuvent modifier temporairement la relation entre les variables', 'iscorrect' => true],
                            ['answer' => 'Les relations économiques sont toujours instantanées', 'iscorrect' => false],
                            ['answer' => 'Le long terme est nécessairement identique au court terme', 'iscorrect' => false],
                            ['answer' => 'Les retards temporels ne jouent aucun rôle', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel type de modèle peut représenter simultanément dynamique de court terme et retour vers un équilibre de long terme ?',
                        'answers' => [
                            ['answer' => 'Un modèle à correction d’erreur', 'iscorrect' => true],
                            ['answer' => 'Une moyenne simple', 'iscorrect' => false],
                            ['answer' => 'Un histogramme', 'iscorrect' => false],
                            ['answer' => 'Une régression purement transversale sans dynamique', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un terme de correction d’erreur est-il économiquement interprétable ?',
                        'answers' => [
                            ['answer' => 'Il mesure la vitesse avec laquelle une variable réagit à un écart par rapport à une relation d’équilibre de long terme', 'iscorrect' => true],
                            ['answer' => 'Il mesure uniquement la variance des erreurs', 'iscorrect' => false],
                            ['answer' => 'Il représente toujours une erreur de saisie', 'iscorrect' => false],
                            ['answer' => 'Il élimine automatiquement toute endogénéité', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi faut-il être prudent avant d’interpréter une corrélation de long terme entre séries macroéconomiques ?',
                        'answers' => [
                            ['answer' => 'La non-stationnarité et les tendances communes peuvent créer des relations fallacieuses si elles ne sont pas correctement modélisées', 'iscorrect' => true],
                            ['answer' => 'Les séries macroéconomiques sont toujours stationnaires', 'iscorrect' => false],
                            ['answer' => 'Une corrélation élevée est toujours causale', 'iscorrect' => false],
                            ['answer' => 'Les tendances communes n’ont jamais d’effet statistique', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Données de panel et effets fixes',
                'questions' => [
                    [
                        'question' => 'Que permettent principalement les données de panel ?',
                        'answers' => [
                            ['answer' => 'Exploiter simultanément les différences entre unités et les variations temporelles', 'iscorrect' => true],
                            ['answer' => 'Éliminer automatiquement tous les biais', 'iscorrect' => false],
                            ['answer' => 'Supprimer toute hétérogénéité individuelle', 'iscorrect' => false],
                            ['answer' => 'Remplacer les données temporelles par des données qualitatives', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Que contrôle un modèle à effets fixes individuels ?',
                        'answers' => [
                            ['answer' => 'Les caractéristiques inobservées et constantes dans le temps propres à chaque unité', 'iscorrect' => true],
                            ['answer' => 'Toutes les variables variant dans le temps', 'iscorrect' => false],
                            ['answer' => 'Tous les chocs macroéconomiques futurs', 'iscorrect' => false],
                            ['answer' => 'Toutes les erreurs de mesure', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les effets fixes peuvent-ils être utiles pour analyser des entreprises ?',
                        'answers' => [
                            ['answer' => 'Ils permettent de neutraliser certaines caractéristiques propres aux entreprises qui ne changent pas dans le temps', 'iscorrect' => true],
                            ['answer' => 'Ils garantissent que toutes les entreprises ont le même comportement', 'iscorrect' => false],
                            ['answer' => 'Ils suppriment toutes les variations annuelles', 'iscorrect' => false],
                            ['answer' => 'Ils remplacent toutes les variables explicatives', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Que se passe-t-il avec une variable parfaitement constante dans le temps pour chaque unité dans un modèle à effets fixes individuels ?',
                        'answers' => [
                            ['answer' => 'Son effet séparé n’est pas identifié par la variation intra-unité', 'iscorrect' => true],
                            ['answer' => 'Son coefficient devient toujours égal à 1', 'iscorrect' => false],
                            ['answer' => 'Elle devient automatiquement endogène', 'iscorrect' => false],
                            ['answer' => 'Elle est parfaitement identifiée par les effets fixes', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les effets fixes exploitent-ils principalement la variation within ?',
                        'answers' => [
                            ['answer' => 'L’identification provient des changements de la variable explicative au sein de la même unité au cours du temps', 'iscorrect' => true],
                            ['answer' => 'Ils utilisent uniquement les différences entre entreprises', 'iscorrect' => false],
                            ['answer' => 'Ils ignorent complètement la dimension temporelle', 'iscorrect' => false],
                            ['answer' => 'Ils utilisent uniquement les observations les plus élevées', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les erreurs standards clusterisées sont-elles souvent utilisées avec des panels ?',
                        'answers' => [
                            ['answer' => 'Pour tenir compte d’une dépendance possible des erreurs au sein d’une même unité au fil du temps', 'iscorrect' => true],
                            ['answer' => 'Pour supprimer la variation within', 'iscorrect' => false],
                            ['answer' => 'Pour rendre les effets fixes inutiles', 'iscorrect' => false],
                            ['answer' => 'Pour garantir l’exogénéité', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi faut-il parfois inclure des effets fixes temporels en plus des effets fixes individuels ?',
                        'answers' => [
                            ['answer' => 'Pour contrôler des chocs communs à toutes les unités à une période donnée', 'iscorrect' => true],
                            ['answer' => 'Pour éliminer toute variation individuelle', 'iscorrect' => false],
                            ['answer' => 'Pour rendre toutes les années identiques', 'iscorrect' => false],
                            ['answer' => 'Pour supprimer toute variable variant dans le temps', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle est la principale limite d’un modèle à effets fixes pour identifier une variable constante dans le temps ?',
                        'answers' => [
                            ['answer' => 'Il n’utilise pas de variation intra-unité pour identifier son coefficient', 'iscorrect' => true],
                            ['answer' => 'Il rend toujours la variable dépendante constante', 'iscorrect' => false],
                            ['answer' => 'Il ne fonctionne qu’avec des séries temporelles pures', 'iscorrect' => false],
                            ['answer' => 'Il crée automatiquement de l’hétéroscédasticité', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un modèle de panel peut-il être préférable à une simple coupe transversale ?',
                        'answers' => [
                            ['answer' => 'Il fournit davantage d’information sur les changements au sein des unités au cours du temps', 'iscorrect' => true],
                            ['answer' => 'Il élimine automatiquement tous les biais de causalité', 'iscorrect' => false],
                            ['answer' => 'Il rend les observations indépendantes', 'iscorrect' => false],
                            ['answer' => 'Il nécessite moins d’observations dans tous les cas', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une interprétation causale avec effets fixes nécessite-t-elle encore des hypothèses supplémentaires ?',
                        'answers' => [
                            ['answer' => 'Les effets fixes ne corrigent pas automatiquement les biais provenant de variables variant dans le temps ou d’une causalité inverse', 'iscorrect' => true],
                            ['answer' => 'Les effets fixes garantissent toujours la causalité', 'iscorrect' => false],
                            ['answer' => 'Les données de panel sont toujours expérimentales', 'iscorrect' => false],
                            ['answer' => 'Les variables variant dans le temps ne peuvent jamais créer de biais', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Modèles qualitatifs et variables limitées',
                'questions' => [
                    [
                        'question' => 'Pourquoi un modèle de probabilité linéaire peut-il être utilisé pour une variable binaire ?',
                        'answers' => [
                            ['answer' => 'Il modélise directement l’espérance conditionnelle d’une variable qui prend 0 ou 1', 'iscorrect' => true],
                            ['answer' => 'Il transforme toujours la variable binaire en variable continue observée', 'iscorrect' => false],
                            ['answer' => 'Il garantit des probabilités comprises entre 0 et 1 sans exception', 'iscorrect' => false],
                            ['answer' => 'Il exige que la variable dépendante soit normalement distribuée', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle est une limite importante du modèle de probabilité linéaire ?',
                        'answers' => [
                            ['answer' => 'Les probabilités prédites peuvent théoriquement être inférieures à 0 ou supérieures à 1', 'iscorrect' => true],
                            ['answer' => 'Il ne permet aucun calcul de coefficient', 'iscorrect' => false],
                            ['answer' => 'Il ne fonctionne qu’avec des variables continues', 'iscorrect' => false],
                            ['answer' => 'Il ne peut jamais être estimé par MCO', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi utilise-t-on souvent les modèles logit ou probit pour des résultats binaires ?',
                        'answers' => [
                            ['answer' => 'Ils contraignent naturellement les probabilités prédites à rester entre 0 et 1', 'iscorrect' => true],
                            ['answer' => 'Ils produisent toujours des effets marginaux constants', 'iscorrect' => false],
                            ['answer' => 'Ils éliminent toute endogénéité', 'iscorrect' => false],
                            ['answer' => 'Ils nécessitent uniquement des variables qualitatives', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Dans un modèle logit, comment interprète-t-on directement un coefficient ?',
                        'answers' => [
                            ['answer' => 'Il agit sur les log-odds plutôt que directement sur la probabilité', 'iscorrect' => true],
                            ['answer' => 'Il représente toujours une variation en points de pourcentage de la probabilité', 'iscorrect' => false],
                            ['answer' => 'Il est identique à une pente MCO', 'iscorrect' => false],
                            ['answer' => 'Il mesure directement un élasticité-prix', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi calcule-t-on souvent les effets marginaux dans un logit ou un probit ?',
                        'answers' => [
                            ['answer' => 'Ils permettent d’exprimer plus directement comment une variation d’une variable affecte la probabilité prédite', 'iscorrect' => true],
                            ['answer' => 'Ils rendent le modèle linéaire', 'iscorrect' => false],
                            ['answer' => 'Ils éliminent le terme d’erreur', 'iscorrect' => false],
                            ['answer' => 'Ils remplacent la vraisemblance', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi l’effet marginal d’une variable dans un logit dépend-il du point d’évaluation ?',
                        'answers' => [
                            ['answer' => 'La fonction de probabilité est non linéaire, donc la dérivée dépend des valeurs des covariables', 'iscorrect' => true],
                            ['answer' => 'La dérivée est toujours constante', 'iscorrect' => false],
                            ['answer' => 'Les coefficients changent pour chaque observation', 'iscorrect' => false],
                            ['answer' => 'La variable dépendante devient continue', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce qu’un modèle Tobit dans son usage classique ?',
                        'answers' => [
                            ['answer' => 'Un modèle adapté à une variable censurée où les observations sont regroupées à une limite', 'iscorrect' => true],
                            ['answer' => 'Un modèle uniquement destiné aux taux de change', 'iscorrect' => false],
                            ['answer' => 'Un modèle de série temporelle AR(1)', 'iscorrect' => false],
                            ['answer' => 'Un modèle sans terme d’erreur', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la censure diffère-t-elle d’une variable véritablement discrète ?',
                        'answers' => [
                            ['answer' => La censure correspond à une information limitée sur une variable latente continue, tandis qu’une variable discrète possède naturellement des valeurs séparées', 'iscorrect' => true],
                            ['answer' => Les deux concepts sont toujours identiques', 'iscorrect' => false],
                            ['answer' => Une variable discrète est toujours censurée', 'iscorrect' => false],
                            ['answer' => Une variable censurée n’a jamais de valeur latente', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un modèle approprié à la nature de la variable dépendante est-il important ?',
                        'answers' => [
                            ['answer' => La structure statistique de la variable influence les hypothèses, les probabilités prédites et l’interprétation des coefficients', 'iscorrect' => true],
                            ['answer' => Toutes les variables dépendantes se comportent de la même manière', 'iscorrect' => false],
                            ['answer' => La forme de y n’affecte jamais le choix du modèle', 'iscorrect' => false],
                            ['answer' => Les modèles linéaires sont toujours supérieurs', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les modèles non linéaires nécessitent-ils une attention particulière lors de l’interprétation ?',
                        'answers' => [
                            ['answer' => Le coefficient brut ne représente pas nécessairement une variation constante de la probabilité ou de la variable dépendante', 'iscorrect' => true],
                            ['answer' => Les coefficients deviennent toujours causalement interprétables', 'iscorrect' => false],
                            ['answer' => Les effets marginaux sont toujours constants', 'iscorrect' => false],
                            ['answer' => Les unités n’ont plus aucune importance', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Prévision, validation et analyse de robustesse',
                'questions' => [
                    [
                        'question' => 'Pourquoi séparer les données d’entraînement et de test ?',
                        'answers' => [
                            ['answer' => 'Pour évaluer la performance du modèle sur des observations qui n’ont pas servi à son estimation', 'iscorrect' => true],
                            ['answer' => 'Pour augmenter artificiellement R²', 'iscorrect' => false],
                            ['answer' => 'Pour garantir la causalité', 'iscorrect' => false],
                            ['answer' => 'Pour supprimer toutes les observations atypiques', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un modèle avec un excellent ajustement hors échantillon est-il utile pour la prévision ?',
                        'answers' => [
                            ['answer' => 'Il montre que le modèle conserve une capacité prédictive sur des données non utilisées lors de l’estimation', 'iscorrect' => true],
                            ['answer' => 'Il prouve automatiquement la causalité', 'iscorrect' => false],
                            ['answer' => 'Il garantit tous les résultats futurs', 'iscorrect' => false],
                            ['answer' => 'Il élimine toutes les erreurs de mesure', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la validation croisée peut-elle être utile ?',
                        'answers' => [
                            ['answer' => 'Elle permet de comparer la performance prédictive en utilisant plusieurs partitions des données', 'iscorrect' => true],
                            ['answer' => 'Elle garantit une identification causale', 'iscorrect' => false],
                            ['answer' => 'Elle supprime toute hétéroscédasticité', 'iscorrect' => false],
                            ['answer' => 'Elle rend tous les modèles identiques', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la sur-paramétrisation peut-elle réduire la performance hors échantillon ?',
                        'answers' => [
                            ['answer' => 'Le modèle peut apprendre trop précisément le bruit particulier de l’échantillon d’entraînement', 'iscorrect' => true],
                            ['answer' => 'Ajouter des variables améliore toujours la généralisation', 'iscorrect' => false],
                            ['answer' => 'Le bruit disparaît nécessairement avec plus de paramètres', 'iscorrect' => false],
                            ['answer' => 'Les modèles complexes ne peuvent jamais sur-apprendre', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi l’analyse de sensibilité est-elle utile pour un résultat économétrique ?',
                        'answers' => [
                            ['answer' => 'Elle permet de vérifier si les conclusions dépendent fortement de choix raisonnables de spécification ou d’échantillon', 'iscorrect' => true],
                            ['answer' => 'Elle garantit la causalité', 'iscorrect' => false],
                            ['answer' => 'Elle remplace la théorie économique', 'iscorrect' => false],
                            ['answer' => 'Elle rend les données parfaitement propres', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les résultats peuvent-ils changer lorsqu’on retire des observations influentes ?',
                        'answers' => [
                            ['answer' => 'Certaines observations peuvent avoir un poids important dans l’identification de la relation estimée', 'iscorrect' => true],
                            ['answer' => 'Les coefficients ne dépendent jamais des observations', 'iscorrect' => false],
                            ['answer' => 'Retirer une observation ne modifie jamais un modèle', 'iscorrect' => false],
                            ['answer' => 'Les données restantes deviennent automatiquement causales', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi l’analyse de robustesse ne consiste-t-elle pas à tester uniquement des spécifications favorables à l’auteur ?',
                        'answers' => [
                            ['answer' => 'Elle doit examiner des alternatives économiquement et statistiquement plausibles, y compris celles susceptibles de fragiliser la conclusion', 'iscorrect' => true],
                            ['answer' => 'Elle sert uniquement à confirmer le résultat principal', 'iscorrect' => false],
                            ['answer' => 'Les spécifications alternatives sont inutiles', 'iscorrect' => false],
                            ['answer' => 'Une analyse robuste doit éviter toute modification du modèle', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi faut-il distinguer performance prédictive et validité structurelle ?',
                        'answers' => [
                            ['answer' => 'Un modèle peut prédire correctement sans représenter correctement les mécanismes économiques sous-jacents', 'iscorrect' => true],
                            ['answer' => 'Une bonne prédiction garantit toujours la bonne structure', 'iscorrect' => false],
                            ['answer' => 'Un modèle structurel n’a aucune utilité pour la prévision', 'iscorrect' => false],
                            ['answer' => 'Les deux critères sont toujours identiques', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi faut-il documenter toutes les étapes d’une analyse économétrique ?',
                        'answers' => [
                            ['answer' => 'Pour permettre la vérification, la reproduction des résultats et l’évaluation critique des choix méthodologiques', 'iscorrect' => true],
                            ['answer' => 'Pour garantir automatiquement l’absence de biais', 'iscorrect' => false],
                            ['answer' => 'Pour empêcher toute réplication indépendante', 'iscorrect' => false],
                            ['answer' => 'Pour supprimer l’incertitude statistique', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel principe professionnel résume le mieux une analyse économétrique fiable ?',
                        'answers' => [
                            ['answer' => 'Combiner théorie économique, données de qualité, identification crédible, diagnostics, inférence appropriée et analyse de robustesse', 'iscorrect' => true],
                            ['answer' => 'Choisir uniquement le modèle avec le plus grand R²', 'iscorrect' => false],
                            ['answer' => 'Interpréter tout coefficient significatif comme causal', 'iscorrect' => false],
                            ['answer' => 'Ignorer les hypothèses si l’échantillon est grand', 'iscorrect' => false],
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
