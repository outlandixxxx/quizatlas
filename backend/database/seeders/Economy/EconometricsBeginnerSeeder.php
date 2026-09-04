```php
<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Major;
use App\Models\Subject;
use App\Models\Quiz;
use App\Models\Question;
use App\Models\Answer;

class EconometricsBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $major = Major::where('slug', 'economy')->firstOrFail();

        $subject = Subject::where('major_id', $major->id)
            ->where('slug', 'econometrics')
            ->firstOrFail();

        $quizzes = [
            [
                'title' => 'Introduction à l’économétrie',
                'questions' => [
                    [
                        'question' => 'Qu’est-ce que l’économétrie ?',
                        'answers' => [
                            ['answer' => 'L’application de méthodes statistiques et mathématiques à l’analyse des phénomènes économiques', 'iscorrect' => true],
                            ['answer' => 'L’étude uniquement historique des économies', 'iscorrect' => false],
                            ['answer' => 'Une méthode destinée uniquement à calculer les impôts', 'iscorrect' => false],
                            ['answer' => 'Une branche qui étudie uniquement les marchés financiers', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est l’un des objectifs principaux de l’économétrie ?',
                        'answers' => [
                            ['answer' => 'Quantifier et tester des relations économiques à partir de données', 'iscorrect' => true],
                            ['answer' => 'Remplacer toute théorie économique', 'iscorrect' => false],
                            ['answer' => 'Garantir des prévisions parfaitement exactes', 'iscorrect' => false],
                            ['answer' => 'Éliminer toute incertitude dans les données', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Que représente généralement une variable dépendante dans un modèle économétrique ?',
                        'answers' => [
                            ['answer' => 'Le phénomène économique que l’on cherche à expliquer ou prédire', 'iscorrect' => true],
                            ['answer' => 'Toujours une variable de contrôle', 'iscorrect' => false],
                            ['answer' => 'Une constante du modèle', 'iscorrect' => false],
                            ['answer' => 'Uniquement une variable monétaire', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Que représente une variable explicative ?',
                        'answers' => [
                            ['answer' => 'Une variable utilisée pour expliquer ou prédire les variations de la variable dépendante', 'iscorrect' => true],
                            ['answer' => 'Toujours la variable dépendante', 'iscorrect' => false],
                            ['answer' => 'Une erreur de mesure uniquement', 'iscorrect' => false],
                            ['answer' => 'Une valeur toujours constante', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les économètres utilisent-ils des données ?',
                        'answers' => [
                            ['answer' => 'Pour confronter les relations théoriques aux observations réelles', 'iscorrect' => true],
                            ['answer' => 'Pour éviter toute interprétation économique', 'iscorrect' => false],
                            ['answer' => 'Pour rendre toutes les variables identiques', 'iscorrect' => false],
                            ['answer' => 'Pour supprimer automatiquement les erreurs', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Laquelle est un exemple de donnée économique quantitative ?',
                        'answers' => [
                            ['answer' => 'Le revenu mensuel d’un ménage', 'iscorrect' => true],
                            ['answer' => 'Le secteur d’activité', 'iscorrect' => false],
                            ['answer' => 'Le type de contrat', 'iscorrect' => false],
                            ['answer' => 'La catégorie professionnelle', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un modèle économétrique contient-il souvent un terme d’erreur ?',
                        'answers' => [
                            ['answer' => 'Parce que toutes les influences sur la variable dépendante ne sont pas nécessairement observées dans le modèle', 'iscorrect' => true],
                            ['answer' => 'Parce que les données sont toujours fausses', 'iscorrect' => false],
                            ['answer' => 'Parce que la variable dépendante est toujours inconnue', 'iscorrect' => false],
                            ['answer' => 'Parce que les économistes ne peuvent jamais utiliser de données', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Que signifie « estimer » un modèle économétrique ?',
                        'answers' => [
                            ['answer' => 'Calculer des valeurs numériques pour les paramètres du modèle à partir des données', 'iscorrect' => true],
                            ['answer' => 'Supprimer toutes les observations', 'iscorrect' => false],
                            ['answer' => 'Modifier les données pour obtenir le résultat souhaité', 'iscorrect' => false],
                            ['answer' => 'Choisir uniquement la variable la plus grande', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi faut-il distinguer corrélation et causalité en économétrie ?',
                        'answers' => [
                            ['answer' => 'Parce qu’une association statistique ne prouve pas nécessairement qu’une variable cause l’autre', 'iscorrect' => true],
                            ['answer' => 'Parce que les variables économiques ne sont jamais corrélées', 'iscorrect' => false],
                            ['answer' => 'Parce que la causalité est toujours impossible à étudier', 'iscorrect' => false],
                            ['answer' => 'Parce qu’une corrélation est toujours négative', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle est une utilisation courante de l’économétrie ?',
                        'answers' => [
                            ['answer' => 'Analyser comment une variation du revenu, du prix ou de l’éducation est associée à une autre variable économique', 'iscorrect' => true],
                            ['answer' => 'Fixer directement tous les prix', 'iscorrect' => false],
                            ['answer' => 'Supprimer les fluctuations économiques', 'iscorrect' => false],
                            ['answer' => 'Garantir les bénéfices des entreprises', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Régression linéaire simple',
                'questions' => [
                    [
                        'question' => 'Quelle forme représente une régression linéaire simple ?',
                        'answers' => [
                            ['answer' => 'y = β₀ + β₁x + ε', 'iscorrect' => true],
                            ['answer' => 'y = β₀β₁x', 'iscorrect' => false],
                            ['answer' => 'y = x² + ε²', 'iscorrect' => false],
                            ['answer' => 'y = β₀ + β₁ + x', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Que représente β₀ dans une régression linéaire simple ?',
                        'answers' => [
                            ['answer' => 'L’ordonnée à l’origine du modèle', 'iscorrect' => true],
                            ['answer' => 'La pente du modèle', 'iscorrect' => false],
                            ['answer' => 'La variance de l’erreur', 'iscorrect' => false],
                            ['answer' => 'La taille de l’échantillon', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Que représente β₁ dans y = β₀ + β₁x + ε ?',
                        'answers' => [
                            ['answer' => 'La variation moyenne de y associée à une unité supplémentaire de x dans le modèle', 'iscorrect' => true],
                            ['answer' => 'Le niveau moyen de y', 'iscorrect' => false],
                            ['answer' => 'La variance de x', 'iscorrect' => false],
                            ['answer' => 'Le nombre d’observations', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Si le modèle estimé est y = 10 + 2x et x = 5, quelle est la valeur prédite de y ?',
                        'answers' => [
                            ['answer' => '20', 'iscorrect' => true],
                            ['answer' => '15', 'iscorrect' => false],
                            ['answer' => '12', 'iscorrect' => false],
                            ['answer' => '25', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Si la pente estimée est positive, que signifie généralement le coefficient ?',
                        'answers' => [
                            ['answer' => 'Une hausse de x est associée à une hausse de y dans le modèle', 'iscorrect' => true],
                            ['answer' => 'Une hausse de x est toujours associée à une baisse de y', 'iscorrect' => false],
                            ['answer' => 'x et y sont nécessairement indépendantes', 'iscorrect' => false],
                            ['answer' => 'La causalité est automatiquement prouvée', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Si la pente estimée vaut -3, que signifie généralement ce signe ?',
                        'answers' => [
                            ['answer' => 'Une augmentation de x est associée à une diminution de y dans le modèle', 'iscorrect' => true],
                            ['answer' => 'x et y augmentent toujours ensemble', 'iscorrect' => false],
                            ['answer' => 'La relation est nécessairement causale', 'iscorrect' => false],
                            ['answer' => 'La variable y est constante', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce qu’une valeur prédite ?',
                        'answers' => [
                            ['answer' => 'La valeur de la variable dépendante donnée par le modèle pour une observation', 'iscorrect' => true],
                            ['answer' => 'Toujours la valeur réellement observée', 'iscorrect' => false],
                            ['answer' => 'La moyenne de toutes les variables', 'iscorrect' => false],
                            ['answer' => 'Une erreur de mesure', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce qu’un résidu ?',
                        'answers' => [
                            ['answer' => 'La différence entre la valeur observée et la valeur prédite', 'iscorrect' => true],
                            ['answer' => 'La différence entre deux coefficients', 'iscorrect' => false],
                            ['answer' => 'La moyenne des observations', 'iscorrect' => false],
                            ['answer' => 'Le coefficient de corrélation', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi représente-t-on souvent une régression simple avec un nuage de points ?',
                        'answers' => [
                            ['answer' => 'Pour visualiser la relation entre les deux variables et la droite ajustée', 'iscorrect' => true],
                            ['answer' => 'Pour prouver automatiquement la causalité', 'iscorrect' => false],
                            ['answer' => 'Pour supprimer les observations atypiques', 'iscorrect' => false],
                            ['answer' => 'Pour calculer uniquement la moyenne', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les unités de mesure sont-elles importantes pour interpréter une pente ?',
                        'answers' => [
                            ['answer' => 'La valeur du coefficient dépend des unités utilisées pour mesurer x et y', 'iscorrect' => true],
                            ['answer' => 'Les unités n’ont aucun effet sur les coefficients', 'iscorrect' => false],
                            ['answer' => 'Les coefficients sont toujours des pourcentages', 'iscorrect' => false],
                            ['answer' => 'Les unités déterminent automatiquement la causalité', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Moindres carrés ordinaires',
                'questions' => [
                    [
                        'question' => 'Que signifie la méthode des moindres carrés ordinaires (MCO) ?',
                        'answers' => [
                            ['answer' => 'Une méthode qui choisit les coefficients pour minimiser la somme des carrés des résidus', 'iscorrect' => true],
                            ['answer' => 'Une méthode qui maximise toujours les revenus', 'iscorrect' => false],
                            ['answer' => 'Une méthode qui minimise directement le nombre d’observations', 'iscorrect' => false],
                            ['answer' => 'Une méthode qui supprime les erreurs', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les résidus sont-ils élevés au carré dans les MCO ?',
                        'answers' => [
                            ['answer' => 'Pour éviter que les résidus positifs et négatifs ne se compensent', 'iscorrect' => true],
                            ['answer' => 'Pour rendre les résidus toujours négatifs', 'iscorrect' => false],
                            ['answer' => 'Pour supprimer les grandes erreurs', 'iscorrect' => false],
                            ['answer' => 'Pour transformer y en variable qualitative', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Que cherche à minimiser la méthode des MCO ?',
                        'answers' => [
                            ['answer' => 'La somme des carrés des résidus', 'iscorrect' => true],
                            ['answer' => 'La moyenne de x', 'iscorrect' => false],
                            ['answer' => 'Le nombre de variables', 'iscorrect' => false],
                            ['answer' => 'La valeur du coefficient de détermination', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la méthode des moindres carrés est-elle utilisée en économétrie ?',
                        'answers' => [
                            ['answer' => 'Elle fournit une méthode systématique pour estimer les paramètres d’un modèle linéaire', 'iscorrect' => true],
                            ['answer' => 'Elle garantit toujours un modèle causal', 'iscorrect' => false],
                            ['answer' => 'Elle rend toutes les erreurs nulles dans les données', 'iscorrect' => false],
                            ['answer' => 'Elle fonctionne uniquement avec des variables binaires', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Dans une régression avec constante estimée par MCO, quelle propriété possède généralement la somme des résidus ?',
                        'answers' => [
                            ['answer' => 'Elle est égale à zéro', 'iscorrect' => true],
                            ['answer' => 'Elle est toujours positive', 'iscorrect' => false],
                            ['answer' => 'Elle est toujours négative', 'iscorrect' => false],
                            ['answer' => 'Elle est égale au coefficient de pente', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les valeurs extrêmes peuvent-elles fortement influencer une régression MCO ?',
                        'answers' => [
                            ['answer' => 'Les carrés donnent un poids important aux grandes erreurs et certains points peuvent fortement influencer la droite', 'iscorrect' => true],
                            ['answer' => 'Les valeurs extrêmes sont toujours ignorées', 'iscorrect' => false],
                            ['answer' => 'Les MCO utilisent uniquement la médiane', 'iscorrect' => false],
                            ['answer' => 'Les observations extrêmes ne jouent jamais de rôle', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Que signifie une bonne qualité d’ajustement d’une régression ?',
                        'answers' => [
                            ['answer' => 'Les valeurs prédites sont relativement proches des valeurs observées selon la mesure utilisée', 'iscorrect' => true],
                            ['answer' => 'Le modèle est nécessairement causal', 'iscorrect' => false],
                            ['answer' => 'Tous les résidus sont exactement nuls', 'iscorrect' => false],
                            ['answer' => 'Le modèle est nécessairement correct économiquement', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi faut-il examiner les résidus après une estimation MCO ?',
                        'answers' => [
                            ['answer' => 'Pour détecter certaines structures ou violations possibles des hypothèses du modèle', 'iscorrect' => true],
                            ['answer' => 'Pour augmenter artificiellement le R²', 'iscorrect' => false],
                            ['answer' => 'Pour changer automatiquement les données', 'iscorrect' => false],
                            ['answer' => 'Pour supprimer toute incertitude', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce qu’un ajustement par régression ?',
                        'answers' => [
                            ['answer' => 'La représentation mathématique de la relation estimée entre la variable dépendante et les variables explicatives', 'iscorrect' => true],
                            ['answer' => 'Une modification obligatoire des observations', 'iscorrect' => false],
                            ['answer' => 'Une suppression de toutes les erreurs', 'iscorrect' => false],
                            ['answer' => 'Une transformation automatique en série temporelle', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les MCO ne garantissent-ils pas à eux seuls une interprétation causale ?',
                        'answers' => [
                            ['answer' => 'Les hypothèses nécessaires à l’interprétation causale peuvent être violées', 'iscorrect' => true],
                            ['answer' => 'Les MCO ne produisent jamais de coefficients', 'iscorrect' => false],
                            ['answer' => 'Les données économiques sont toujours expérimentales', 'iscorrect' => false],
                            ['answer' => 'Une régression ne peut jamais mesurer une association', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Corrélation, covariance et interprétation',
                'questions' => [
                    [
                        'question' => 'Que mesure le coefficient de corrélation ?',
                        'answers' => [
                            ['answer' => 'La direction et l’intensité de l’association linéaire entre deux variables', 'iscorrect' => true],
                            ['answer' => 'La causalité certaine entre les variables', 'iscorrect' => false],
                            ['answer' => 'La moyenne d’une seule variable', 'iscorrect' => false],
                            ['answer' => 'Le nombre d’observations', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Que signifie une corrélation proche de +1 ?',
                        'answers' => [
                            ['answer' => 'Une forte association linéaire positive', 'iscorrect' => true],
                            ['answer' => 'Une forte association linéaire négative', 'iscorrect' => false],
                            ['answer' => 'Une absence de relation linéaire', 'iscorrect' => false],
                            ['answer' => 'Une causalité parfaite', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Que signifie une corrélation proche de -1 ?',
                        'answers' => [
                            ['answer' => 'Une forte association linéaire négative', 'iscorrect' => true],
                            ['answer' => 'Une forte association positive', 'iscorrect' => false],
                            ['answer' => 'Une absence totale de relation', 'iscorrect' => false],
                            ['answer' => 'Une indépendance parfaite dans tous les cas', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Que signifie une corrélation proche de 0 ?',
                        'answers' => [
                            ['answer' => 'Une faible ou une absence d’association linéaire', 'iscorrect' => true],
                            ['answer' => 'Une causalité nulle dans tous les cas', 'iscorrect' => false],
                            ['answer' => 'Une forte association positive', 'iscorrect' => false],
                            ['answer' => 'Une forte association négative', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une corrélation élevée ne prouve-t-elle pas automatiquement la causalité ?',
                        'answers' => [
                            ['answer' => 'Une autre variable ou un mécanisme commun peut expliquer l’association observée', 'iscorrect' => true],
                            ['answer' => 'Une corrélation ne peut jamais être calculée', 'iscorrect' => false],
                            ['answer' => 'La causalité et la corrélation sont toujours identiques', 'iscorrect' => false],
                            ['answer' => 'Une corrélation est toujours due au hasard', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce que la covariance ?',
                        'answers' => [
                            ['answer' => 'Une mesure de la manière dont deux variables varient ensemble autour de leurs moyennes', 'iscorrect' => true],
                            ['answer' => 'La moyenne de deux variables', 'iscorrect' => false],
                            ['answer' => 'La variance d’une seule variable', 'iscorrect' => false],
                            ['answer' => 'La différence entre deux médianes', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la covariance est-elle plus difficile à comparer entre variables que la corrélation ?',
                        'answers' => [
                            ['answer' => 'Sa valeur dépend des unités de mesure utilisées', 'iscorrect' => true],
                            ['answer' => 'Elle est toujours comprise entre 0 et 1', 'iscorrect' => false],
                            ['answer' => 'Elle ne dépend jamais des données', 'iscorrect' => false],
                            ['answer' => 'Elle mesure automatiquement la causalité', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle représentation graphique permet souvent d’observer une corrélation ?',
                        'answers' => [
                            ['answer' => 'Un nuage de points', 'iscorrect' => true],
                            ['answer' => 'Un histogramme d’une seule variable uniquement', 'iscorrect' => false],
                            ['answer' => 'Un diagramme circulaire uniquement', 'iscorrect' => false],
                            ['answer' => 'Un tableau de fréquence uniquement', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Si les points d’un nuage montent globalement de gauche à droite, la relation est probablement :',
                        'answers' => [
                            ['answer' => 'Positive', 'iscorrect' => true],
                            ['answer' => 'Négative', 'iscorrect' => false],
                            ['answer' => 'Nulle par définition', 'iscorrect' => false],
                            ['answer' => 'Toujours parfaitement linéaire', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi faut-il examiner les données avant d’interpréter une corrélation ?',
                        'answers' => [
                            ['answer' => 'Les valeurs atypiques ou les relations non linéaires peuvent modifier l’interprétation du coefficient', 'iscorrect' => true],
                            ['answer' => 'La corrélation est indépendante de la forme des données', 'iscorrect' => false],
                            ['answer' => 'Les valeurs atypiques sont toujours supprimées', 'iscorrect' => false],
                            ['answer' => 'Une corrélation explique automatiquement le mécanisme économique', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'R², résidus et qualité du modèle',
                'questions' => [
                    [
                        'question' => 'Que mesure principalement R² ?',
                        'answers' => [
                            ['answer' => 'La part de la variation de la variable dépendante expliquée par le modèle dans l’échantillon', 'iscorrect' => true],
                            ['answer' => 'La probabilité que le modèle soit causal', 'iscorrect' => false],
                            ['answer' => 'La moyenne des résidus', 'iscorrect' => false],
                            ['answer' => 'La taille de l’échantillon', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Si R² = 0,75, quelle interprétation est correcte ?',
                        'answers' => [
                            ['answer' => 'Environ 75 % de la variation de y dans l’échantillon est expliquée par le modèle', 'iscorrect' => true],
                            ['answer' => 'Le modèle est causal à 75 %', 'iscorrect' => false],
                            ['answer' => '75 % des observations sont exactes', 'iscorrect' => false],
                            ['answer' => 'La pente est égale à 0,75', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Que signifie un R² égal à 0 ?',
                        'answers' => [
                            ['answer' => 'Le modèle n’explique aucune variation de y par rapport à la référence appropriée dans le cadre considéré', 'iscorrect' => true],
                            ['answer' => 'Il existe nécessairement une forte causalité négative', 'iscorrect' => false],
                            ['answer' => 'Toutes les observations sont identiques', 'iscorrect' => false],
                            ['answer' => 'Tous les coefficients sont égaux à zéro dans tous les modèles possibles', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce qu’un bon résidu dans un modèle bien spécifié ?',
                        'answers' => [
                            ['answer' => 'Un résidu qui ne présente pas de structure systématique inexpliquée dans les diagnostics appropriés', 'iscorrect' => true],
                            ['answer' => 'Un résidu nécessairement égal à zéro pour chaque observation', 'iscorrect' => false],
                            ['answer' => 'Un résidu toujours positif', 'iscorrect' => false],
                            ['answer' => 'Un résidu égal au coefficient de pente', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un modèle avec un R² élevé peut-il tout de même être mauvais ?',
                        'answers' => [
                            ['answer' => 'Il peut être mal spécifié, biaisé ou fondé sur une relation non causale', 'iscorrect' => true],
                            ['answer' => 'Un R² élevé garantit toujours la qualité du modèle', 'iscorrect' => false],
                            ['answer' => 'Un R² élevé signifie que les résidus sont toujours nuls', 'iscorrect' => false],
                            ['answer' => 'Un R² élevé prouve automatiquement la théorie économique', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi le R² peut-il augmenter lorsqu’on ajoute des variables explicatives ?',
                        'answers' => [
                            ['answer' => 'Ajouter des variables permet généralement au modèle de mieux ajuster les données ou de ne pas réduire l’ajustement mesuré par R²', 'iscorrect' => true],
                            ['answer' => 'Parce que les nouvelles variables sont toujours causales', 'iscorrect' => false],
                            ['answer' => 'Parce que les résidus deviennent nécessairement nuls', 'iscorrect' => false],
                            ['answer' => 'Parce que les données changent automatiquement', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi faut-il regarder le R² ajusté dans certains modèles ?',
                        'answers' => [
                            ['answer' => 'Il tient compte du nombre de variables explicatives ajoutées lors de l’évaluation de l’ajustement', 'iscorrect' => true],
                            ['answer' => 'Il mesure directement la causalité', 'iscorrect' => false],
                            ['answer' => 'Il remplace toujours R²', 'iscorrect' => false],
                            ['answer' => 'Il élimine l’erreur d’échantillonnage', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un résidu très grand peut-il attirer l’attention du chercheur ?',
                        'answers' => [
                            ['answer' => 'Il peut signaler une observation atypique, une mauvaise spécification ou une erreur de mesure', 'iscorrect' => true],
                            ['answer' => 'Il signifie toujours que le modèle est correct', 'iscorrect' => false],
                            ['answer' => 'Il garantit une meilleure précision', 'iscorrect' => false],
                            ['answer' => 'Il prouve automatiquement la causalité', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi compare-t-on parfois les valeurs observées et prédites ?',
                        'answers' => [
                            ['answer' => 'Pour évaluer la capacité du modèle à reproduire les données observées', 'iscorrect' => true],
                            ['answer' => 'Pour supprimer toutes les erreurs', 'iscorrect' => false],
                            ['answer' => 'Pour rendre les variables indépendantes', 'iscorrect' => false],
                            ['answer' => 'Pour prouver que les observations sont causées par le modèle', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une mauvaise spécification peut-elle produire des résidus structurés ?',
                        'answers' => [
                            ['answer' => 'Le modèle peut omettre une relation importante ou imposer une forme fonctionnelle inadéquate', 'iscorrect' => true],
                            ['answer' => 'Les résidus structurés n’existent jamais', 'iscorrect' => false],
                            ['answer' => 'Un modèle linéaire explique toujours toute structure', 'iscorrect' => false],
                            ['answer' => 'Une mauvaise spécification réduit toujours toutes les données à zéro', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Hypothèses de régression et erreurs',
                'questions' => [
                    [
                        'question' => 'Pourquoi suppose-t-on souvent que la moyenne conditionnelle de l’erreur est nulle dans une régression causale simple ?',
                        'answers' => [
                            ['answer' => 'Cela permet notamment d’éviter que les variables explicatives soient systématiquement associées à des composantes non observées de l’erreur', 'iscorrect' => true],
                            ['answer' => 'Cela garantit toujours une distribution normale', 'iscorrect' => false],
                            ['answer' => 'Cela rend toutes les variables constantes', 'iscorrect' => false],
                            ['answer' => 'Cela supprime les erreurs de mesure', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce qu’une variance constante des erreurs ?',
                        'answers' => [
                            ['answer' => 'L’homoscédasticité', 'iscorrect' => true],
                            ['answer' => 'L’endogénéité', 'iscorrect' => false],
                            ['answer' => 'La multicolinéarité', 'iscorrect' => false],
                            ['answer' => 'La causalité', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce que l’hétéroscédasticité ?',
                        'answers' => [
                            ['answer' => 'Une situation où la variance conditionnelle des erreurs varie selon les observations ou les variables explicatives', 'iscorrect' => true],
                            ['answer' => 'Une absence totale de variance', 'iscorrect' => false],
                            ['answer' => 'Une corrélation parfaite entre deux régresseurs', 'iscorrect' => false],
                            ['answer' => 'Une relation causale certaine', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi l’hétéroscédasticité peut-elle être problématique ?',
                        'answers' => [
                            ['answer' => 'Elle peut rendre les erreurs standards classiques incorrectes', 'iscorrect' => true],
                            ['answer' => 'Elle garantit toujours des coefficients biaisés', 'iscorrect' => false],
                            ['answer' => 'Elle supprime toute relation statistique', 'iscorrect' => false],
                            ['answer' => 'Elle rend R² automatiquement nul', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce que l’endogénéité dans un modèle de régression ?',
                        'answers' => [
                            ['answer' => 'Une situation où une variable explicative est corrélée avec le terme d’erreur', 'iscorrect' => true],
                            ['answer' => 'Une variance constante des erreurs', 'iscorrect' => false],
                            ['answer' => 'Une absence de corrélation entre toutes les variables', 'iscorrect' => false],
                            ['answer' => 'Une distribution parfaitement normale', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une variable omise peut-elle créer de l’endogénéité ?',
                        'answers' => [
                            ['answer' => 'Si la variable omise influence y et est corrélée avec une variable explicative incluse', 'iscorrect' => true],
                            ['answer' => 'Une variable omise n’a jamais d’effet sur les coefficients', 'iscorrect' => false],
                            ['answer' => 'Toute variable omise rend le modèle automatiquement meilleur', 'iscorrect' => false],
                            ['answer' => 'Les variables omises sont toujours indépendantes', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce que la multicolinéarité ?',
                        'answers' => [
                            ['answer' => 'Une forte relation linéaire entre plusieurs variables explicatives', 'iscorrect' => true],
                            ['answer' => 'Une forte relation entre y et le terme d’erreur', 'iscorrect' => false],
                            ['answer' => 'Une variance nulle des erreurs', 'iscorrect' => false],
                            ['answer' => 'Une absence de données', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel effet la multicolinéarité peut-elle avoir sur une estimation ?',
                        'answers' => [
                            ['answer' => 'Elle peut rendre les estimations individuelles des coefficients moins précises', 'iscorrect' => true],
                            ['answer' => 'Elle garantit une causalité parfaite', 'iscorrect' => false],
                            ['answer' => 'Elle rend tous les coefficients égaux à zéro', 'iscorrect' => false],
                            ['answer' => 'Elle élimine les erreurs standards', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une mauvaise forme fonctionnelle peut-elle poser problème ?',
                        'answers' => [
                            ['answer' => 'Le modèle peut mal représenter la relation économique réelle entre les variables', 'iscorrect' => true],
                            ['answer' => 'La forme fonctionnelle n’a jamais d’importance', 'iscorrect' => false],
                            ['answer' => 'Elle garantit toujours un R² élevé', 'iscorrect' => false],
                            ['answer' => 'Elle supprime les résidus', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les diagnostics de régression sont-ils utiles ?',
                        'answers' => [
                            ['answer' => 'Ils permettent d’identifier des problèmes possibles dans les données ou les hypothèses du modèle', 'iscorrect' => true],
                            ['answer' => 'Ils garantissent la causalité', 'iscorrect' => false],
                            ['answer' => 'Ils remplacent l’analyse économique', 'iscorrect' => false],
                            ['answer' => 'Ils rendent toujours le modèle parfait', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Données économiques et modèles',
                'questions' => [
                    [
                        'question' => 'Qu’est-ce qu’une donnée en coupe transversale ?',
                        'answers' => [
                            ['answer' => 'Une observation de plusieurs unités à un même moment ou sur une même période', 'iscorrect' => true],
                            ['answer' => 'Une observation d’une seule unité sur plusieurs années', 'iscorrect' => false],
                            ['answer' => 'Une série uniquement financière', 'iscorrect' => false],
                            ['answer' => 'Une variable sans dimension temporelle possible', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce qu’une série temporelle ?',
                        'answers' => [
                            ['answer' => 'Des observations d’une variable recueillies successivement dans le temps', 'iscorrect' => true],
                            ['answer' => 'Des données de plusieurs individus à une date unique uniquement', 'iscorrect' => false],
                            ['answer' => 'Une variable qualitative', 'iscorrect' => false],
                            ['answer' => 'Un tableau sans ordre', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce qu’un panel de données ?',
                        'answers' => [
                            ['answer' => 'Des observations répétées pour plusieurs unités au cours du temps', 'iscorrect' => true],
                            ['answer' => 'Une seule observation pour une seule unité', 'iscorrect' => false],
                            ['answer' => 'Uniquement des données mensuelles', 'iscorrect' => false],
                            ['answer' => 'Une base sans identifiant d’unité', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la structure des données influence-t-elle le choix du modèle économétrique ?',
                        'answers' => [
                            ['answer' => 'Les problèmes statistiques et les informations disponibles diffèrent selon qu’il s’agit de coupes, séries temporelles ou panels', 'iscorrect' => true],
                            ['answer' => 'Toutes les structures de données sont équivalentes', 'iscorrect' => false],
                            ['answer' => 'La structure n’a jamais d’effet sur l’analyse', 'iscorrect' => false],
                            ['answer' => 'Les modèles économétriques utilisent uniquement des séries temporelles', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une série temporelle peut-elle présenter une tendance ?',
                        'answers' => [
                            ['answer' => 'La variable peut évoluer systématiquement sur le long terme', 'iscorrect' => true],
                            ['answer' => 'Toutes les séries temporelles sont stationnaires', 'iscorrect' => false],
                            ['answer' => 'Une tendance implique nécessairement une causalité', 'iscorrect' => false],
                            ['answer' => 'La tendance est toujours une erreur de mesure', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une corrélation élevée entre deux séries temporelles peut-elle être trompeuse ?',
                        'answers' => [
                            ['answer' => 'Elles peuvent partager une tendance commune sans relation économique causale directe', 'iscorrect' => true],
                            ['answer' => 'Les séries temporelles ne peuvent jamais être corrélées', 'iscorrect' => false],
                            ['answer' => 'La corrélation temporelle prouve toujours la causalité', 'iscorrect' => false],
                            ['answer' => 'Une tendance commune rend la corrélation impossible', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les données de panel peuvent-elles être utiles ?',
                        'answers' => [
                            ['answer' => 'Elles permettent d’exploiter simultanément les différences entre unités et les changements dans le temps', 'iscorrect' => true],
                            ['answer' => 'Elles ne contiennent aucune information temporelle', 'iscorrect' => false],
                            ['answer' => 'Elles garantissent automatiquement la causalité', 'iscorrect' => false],
                            ['answer' => 'Elles éliminent tous les problèmes de données', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi faut-il vérifier la qualité des données avant une estimation ?',
                        'answers' => [
                            ['answer' => 'Les erreurs de saisie, valeurs manquantes ou définitions incohérentes peuvent fausser les résultats', 'iscorrect' => true],
                            ['answer' => 'Les données sont toujours parfaites', 'iscorrect' => false],
                            ['answer' => 'La qualité n’a aucun effet sur les coefficients', 'iscorrect' => false],
                            ['answer' => 'Les logiciels corrigent automatiquement toutes les erreurs', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les valeurs manquantes doivent-elles être examinées ?',
                        'answers' => [
                            ['answer' => 'Leur présence peut modifier la composition de l’échantillon et influencer les estimations', 'iscorrect' => true],
                            ['answer' => 'Elles sont toujours sans importance', 'iscorrect' => false],
                            ['answer' => 'Elles augmentent toujours la précision', 'iscorrect' => false],
                            ['answer' => 'Elles sont automatiquement remplacées par des valeurs correctes', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi faut-il documenter les sources des données économiques ?',
                        'answers' => [
                            ['answer' => 'Pour connaître les définitions, méthodes de collecte et limites des données utilisées', 'iscorrect' => true],
                            ['answer' => 'Pour garantir que toutes les statistiques sont parfaites', 'iscorrect' => false],
                            ['answer' => 'Pour supprimer les valeurs atypiques', 'iscorrect' => false],
                            ['answer' => 'Pour éviter toute analyse statistique', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Interprétation économique des résultats',
                'questions' => [
                    [
                        'question' => 'Si un coefficient de régression est positif, peut-on conclure automatiquement que la relation est causale ?',
                        'answers' => [
                            ['answer' => 'Non, une relation positive dans les données ne suffit pas à établir la causalité', 'iscorrect' => true],
                            ['answer' => 'Oui, toujours', 'iscorrect' => false],
                            ['answer' => 'Oui, si R² est supérieur à zéro', 'iscorrect' => false],
                            ['answer' => 'Oui, si l’échantillon est grand', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Si le coefficient d’un prix dans une régression de demande est négatif, quelle interprétation descriptive est cohérente ?',
                        'answers' => [
                            ['answer' => 'Toutes choses égales selon le modèle, un prix plus élevé est associé à une quantité demandée plus faible', 'iscorrect' => true],
                            ['answer' => 'Le prix cause nécessairement la baisse de la demande', 'iscorrect' => false],
                            ['answer' => 'La quantité est toujours nulle lorsque le prix augmente', 'iscorrect' => false],
                            ['answer' => 'Le modèle est nécessairement faux', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi faut-il interpréter un coefficient avec son unité ?',
                        'answers' => [
                            ['answer' => 'Un coefficient représente une variation dans les unités des variables concernées', 'iscorrect' => true],
                            ['answer' => 'Les coefficients sont toujours sans unité', 'iscorrect' => false],
                            ['answer' => 'L’unité ne change jamais l’interprétation', 'iscorrect' => false],
                            ['answer' => 'Tous les coefficients sont des pourcentages', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une régression peut-elle être utile même si elle ne prouve pas la causalité ?',
                        'answers' => [
                            ['answer' => 'Elle peut décrire des associations, améliorer certaines prévisions et fournir des informations quantitatives', 'iscorrect' => true],
                            ['answer' => 'Une régression ne fournit jamais aucune information', 'iscorrect' => false],
                            ['answer' => 'Elle remplace toujours les expériences', 'iscorrect' => false],
                            ['answer' => 'Elle garantit toujours les résultats futurs', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi faut-il comparer un modèle statistique avec la théorie économique ?',
                        'answers' => [
                            ['answer' => 'Pour vérifier si les signes, ordres de grandeur et mécanismes estimés sont cohérents avec les connaissances économiques', 'iscorrect' => true],
                            ['answer' => 'Parce que les données ne servent jamais', 'iscorrect' => false],
                            ['answer' => 'Parce que la théorie détermine toujours exactement les coefficients', 'iscorrect' => false],
                            ['answer' => 'Parce qu’une régression doit toujours être positive', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un grand nombre d’observations est-il généralement utile ?',
                        'answers' => [
                            ['answer' => 'Il peut améliorer la précision des estimations sous des conditions appropriées', 'iscorrect' => true],
                            ['answer' => 'Il élimine automatiquement tous les biais', 'iscorrect' => false],
                            ['answer' => 'Il garantit la causalité', 'iscorrect' => false],
                            ['answer' => 'Il rend toutes les observations indépendantes', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les résultats économétriques doivent-ils être présentés avec prudence ?',
                        'answers' => [
                            ['answer' => 'Les estimations dépendent des données, des hypothèses, de la spécification et de la méthode utilisée', 'iscorrect' => true],
                            ['answer' => 'Les résultats économétriques sont toujours certains', 'iscorrect' => false],
                            ['answer' => 'Les hypothèses n’ont aucune importance', 'iscorrect' => false],
                            ['answer' => 'Toutes les méthodes donnent exactement les mêmes coefficients', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une analyse de sensibilité peut-elle être utile ?',
                        'answers' => [
                            ['answer' => 'Elle montre comment les résultats changent lorsque certaines hypothèses ou spécifications sont modifiées', 'iscorrect' => true],
                            ['answer' => 'Elle garantit la causalité', 'iscorrect' => false],
                            ['answer' => 'Elle supprime toutes les erreurs', 'iscorrect' => false],
                            ['answer' => 'Elle remplace les données', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la reproductibilité est-elle importante en économétrie ?',
                        'answers' => [
                            ['answer' => 'Elle permet de vérifier les données, les étapes de traitement et les résultats obtenus', 'iscorrect' => true],
                            ['answer' => 'Elle garantit que le modèle est causal', 'iscorrect' => false],
                            ['answer' => 'Elle élimine les hypothèses statistiques', 'iscorrect' => false],
                            ['answer' => 'Elle rend les données automatiquement exactes', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel principe résume le mieux une bonne pratique économétrique ?',
                        'answers' => [
                            ['answer' => 'Comprendre les données, spécifier le modèle, vérifier ses hypothèses et interpréter les résultats dans leur contexte économique', 'iscorrect' => true],
                            ['answer' => 'Choisir le modèle donnant le plus grand coefficient', 'iscorrect' => false],
                            ['answer' => 'Ignorer les hypothèses si R² est élevé', 'iscorrect' => false],
                            ['answer' => 'Interpréter toute corrélation comme une causalité', 'iscorrect' => false],
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

                // Réponses mélangées : la bonne réponse n'est pas systématiquement la première.
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
