<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class EconometricsBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'econometrics')->firstOrFail();

        $quizzes = [
            [
                'title' => 'Introduction à l’économétrie',
                'description' => 'Quiz débutant sur les concepts fondamentaux de l’économétrie.',
                'questions' => [
                    [
                        'question' => 'Qu’est-ce que l’économétrie ?',
                        'explanation' => 'L’économétrie combine l’économie, les mathématiques et les statistiques pour analyser quantitativement les relations économiques à partir de données.',
                        'choices' => [
                            'L’application de méthodes statistiques et mathématiques à l’analyse des phénomènes économiques',
                            'L’étude uniquement historique des économies',
                            'Une méthode destinée uniquement à calculer les impôts',
                            'Une branche qui étudie uniquement les marchés financiers',
                        ],
                        'correct' => 0,
                    ],
                    [
                        'question' => 'Quel est l’un des objectifs principaux de l’économétrie ?',
                        'explanation' => 'L’économétrie permet notamment de mesurer et de tester statistiquement des relations économiques à partir de données observées.',
                        'choices' => [
                            'Quantifier et tester des relations économiques à partir de données',
                            'Remplacer toute théorie économique',
                            'Garantir des prévisions parfaitement exactes',
                            'Éliminer toute incertitude dans les données',
                        ],
                        'correct' => 0,
                    ],
                    [
                        'question' => 'Que représente généralement une variable dépendante dans un modèle économétrique ?',
                        'explanation' => 'La variable dépendante est la variable que le modèle cherche principalement à expliquer ou à prédire à partir d’autres variables.',
                        'choices' => [
                            'Le phénomène économique que l’on cherche à expliquer ou prédire',
                            'Toujours une variable de contrôle',
                            'Une constante du modèle',
                            'Uniquement une variable monétaire',
                        ],
                        'correct' => 0,
                    ],
                    [
                        'question' => 'Que représente une variable explicative ?',
                        'explanation' => 'Une variable explicative est utilisée par le modèle pour expliquer ou prédire les variations observées de la variable dépendante.',
                        'choices' => [
                            'Une variable utilisée pour expliquer ou prédire les variations de la variable dépendante',
                            'Toujours la variable dépendante',
                            'Une erreur de mesure uniquement',
                            'Une valeur toujours constante',
                        ],
                        'correct' => 0,
                    ],
                    [
                        'question' => 'Pourquoi les économètres utilisent-ils des données ?',
                        'explanation' => 'Les données permettent de confronter les hypothèses et relations issues de la théorie économique à des observations réelles.',
                        'choices' => [
                            'Pour confronter les relations théoriques aux observations réelles',
                            'Pour éviter toute interprétation économique',
                            'Pour rendre toutes les variables identiques',
                            'Pour supprimer automatiquement les erreurs',
                        ],
                        'correct' => 0,
                    ],
                    [
                        'question' => 'Laquelle est un exemple de donnée économique quantitative ?',
                        'explanation' => 'Le revenu mensuel est une donnée quantitative parce qu’il est exprimé par une valeur numérique mesurable.',
                        'choices' => [
                            'Le revenu mensuel d’un ménage',
                            'Le secteur d’activité',
                            'Le type de contrat',
                            'La catégorie professionnelle',
                        ],
                        'correct' => 0,
                    ],
                    [
                        'question' => 'Pourquoi un modèle économétrique contient-il souvent un terme d’erreur ?',
                        'explanation' => 'Le terme d’erreur représente notamment les facteurs non observés ou non inclus dans le modèle qui peuvent influencer la variable dépendante.',
                        'choices' => [
                            'Parce que toutes les influences sur la variable dépendante ne sont pas nécessairement observées dans le modèle',
                            'Parce que les données sont toujours fausses',
                            'Parce que la variable dépendante est toujours inconnue',
                            'Parce que les économistes ne peuvent jamais utiliser de données',
                        ],
                        'correct' => 0,
                    ],
                    [
                        'question' => 'Que signifie « estimer » un modèle économétrique ?',
                        'explanation' => 'Estimer un modèle consiste à utiliser les données disponibles pour calculer des valeurs numériques des paramètres inconnus.',
                        'choices' => [
                            'Calculer des valeurs numériques pour les paramètres du modèle à partir des données',
                            'Supprimer toutes les observations',
                            'Modifier les données pour obtenir le résultat souhaité',
                            'Choisir uniquement la variable la plus grande',
                        ],
                        'correct' => 0,
                    ],
                    [
                        'question' => 'Pourquoi faut-il distinguer corrélation et causalité en économétrie ?',
                        'explanation' => 'Deux variables peuvent évoluer ensemble sans que l’une soit nécessairement la cause de l’autre. Une association statistique ne suffit donc pas à établir la causalité.',
                        'choices' => [
                            'Parce qu’une association statistique ne prouve pas nécessairement qu’une variable cause l’autre',
                            'Parce que les variables économiques ne sont jamais corrélées',
                            'Parce que la causalité est toujours impossible à étudier',
                            'Parce qu’une corrélation est toujours négative',
                        ],
                        'correct' => 0,
                    ],
                    [
                        'question' => 'Quelle est une utilisation courante de l’économétrie ?',
                        'explanation' => 'L’économétrie permet d’étudier quantitativement comment des variables économiques sont associées et d’évaluer certaines relations à partir de données.',
                        'choices' => [
                            'Analyser comment une variation du revenu, du prix ou de l’éducation est associée à une autre variable économique',
                            'Fixer directement tous les prix',
                            'Supprimer les fluctuations économiques',
                            'Garantir les bénéfices des entreprises',
                        ],
                        'correct' => 0,
                    ],
                ],
            ],

            [
                'title' => 'Régression linéaire simple',
                'description' => 'Quiz débutant sur la régression linéaire simple.',
                'questions' => [
                    [
                        'question' => 'Quelle forme représente une régression linéaire simple ?',
                        'explanation' => 'La forme y = β₀ + β₁x + ε représente une variable dépendante expliquée par une constante, une variable explicative et un terme d’erreur.',
                        'choices' => [
                            'y = β₀ + β₁x + ε',
                            'y = β₀β₁x',
                            'y = x² + ε²',
                            'y = β₀ + β₁ + x',
                        ],
                        'correct' => 0,
                    ],
                    [
                        'question' => 'Que représente β₀ dans une régression linéaire simple ?',
                        'explanation' => 'β₀ est la constante du modèle et correspond à la valeur prévue de y lorsque x est égal à zéro.',
                        'choices' => [
                            'L’ordonnée à l’origine du modèle',
                            'La pente du modèle',
                            'La variance de l’erreur',
                            'La taille de l’échantillon',
                        ],
                        'correct' => 0,
                    ],
                    [
                        'question' => 'Que représente β₁ dans y = β₀ + β₁x + ε ?',
                        'explanation' => 'β₁ représente la variation moyenne de y associée à une augmentation d’une unité de x dans le modèle, toutes choses égales dans le cadre du modèle.',
                        'choices' => [
                            'La variation moyenne de y associée à une unité supplémentaire de x dans le modèle',
                            'Le niveau moyen de y',
                            'La variance de x',
                            'Le nombre d’observations',
                        ],
                        'correct' => 0,
                    ],
                    [
                        'question' => 'Si le modèle estimé est y = 10 + 2x et x = 5, quelle est la valeur prédite de y ?',
                        'explanation' => 'En remplaçant x par 5 dans le modèle, on obtient 10 + 2 × 5 = 20.',
                        'choices' => [
                            '20',
                            '15',
                            '12',
                            '25',
                        ],
                        'correct' => 0,
                    ],
                    [
                        'question' => 'Si la pente estimée est positive, que signifie généralement le coefficient ?',
                        'explanation' => 'Une pente positive indique qu’une valeur plus élevée de x est associée à une valeur plus élevée de y dans le modèle.',
                        'choices' => [
                            'Une hausse de x est associée à une hausse de y dans le modèle',
                            'Une hausse de x est toujours associée à une baisse de y',
                            'x et y sont nécessairement indépendantes',
                            'La causalité est automatiquement prouvée',
                        ],
                        'correct' => 0,
                    ],
                    [
                        'question' => 'Si la pente estimée vaut -3, que signifie généralement ce signe ?',
                        'explanation' => 'Une pente négative indique qu’une augmentation de x est associée à une diminution de y dans le modèle.',
                        'choices' => [
                            'Une augmentation de x est associée à une diminution de y dans le modèle',
                            'x et y augmentent toujours ensemble',
                            'La relation est nécessairement causale',
                            'La variable y est constante',
                        ],
                        'correct' => 0,
                    ],
                    [
                        'question' => 'Qu’est-ce qu’une valeur prédite ?',
                        'explanation' => 'Une valeur prédite est la valeur de la variable dépendante calculée par le modèle pour des valeurs données des variables explicatives.',
                        'choices' => [
                            'La valeur de la variable dépendante donnée par le modèle pour une observation',
                            'Toujours la valeur réellement observée',
                            'La moyenne de toutes les variables',
                            'Une erreur de mesure',
                        ],
                        'correct' => 0,
                    ],
                    [
                        'question' => 'Qu’est-ce qu’un résidu ?',
                        'explanation' => 'Le résidu mesure l’écart entre la valeur réellement observée et la valeur prédite par le modèle.',
                        'choices' => [
                            'La différence entre la valeur observée et la valeur prédite',
                            'La différence entre deux coefficients',
                            'La moyenne des observations',
                            'Le coefficient de corrélation',
                        ],
                        'correct' => 0,
                    ],
                    [
                        'question' => 'Pourquoi représente-t-on souvent une régression simple avec un nuage de points ?',
                        'explanation' => 'Le nuage de points permet de visualiser la relation entre deux variables et d’observer la droite de régression ajustée aux données.',
                        'choices' => [
                            'Pour visualiser la relation entre les deux variables et la droite ajustée',
                            'Pour prouver automatiquement la causalité',
                            'Pour supprimer les observations atypiques',
                            'Pour calculer uniquement la moyenne',
                        ],
                        'correct' => 0,
                    ],
                    [
                        'question' => 'Pourquoi les unités de mesure sont-elles importantes pour interpréter une pente ?',
                        'explanation' => 'Le coefficient dépend des unités utilisées pour x et y. Changer ces unités peut donc modifier la valeur numérique de la pente.',
                        'choices' => [
                            'La valeur du coefficient dépend des unités utilisées pour mesurer x et y',
                            'Les unités n’ont aucun effet sur les coefficients',
                            'Les coefficients sont toujours des pourcentages',
                            'Les unités déterminent automatiquement la causalité',
                        ],
                        'correct' => 0,
                    ],
                ],
            ],

            [
                'title' => 'Moindres carrés ordinaires',
                'description' => 'Quiz débutant sur la méthode des moindres carrés ordinaires.',
                'questions' => [
                    [
                        'question' => 'Que signifie la méthode des moindres carrés ordinaires (MCO) ?',
                        'explanation' => 'La méthode des MCO choisit les coefficients du modèle afin de minimiser la somme des carrés des écarts entre les valeurs observées et prédites.',
                        'choices' => [
                            'Une méthode qui choisit les coefficients pour minimiser la somme des carrés des résidus',
                            'Une méthode qui maximise toujours les revenus',
                            'Une méthode qui minimise directement le nombre d’observations',
                            'Une méthode qui supprime les erreurs',
                        ],
                        'correct' => 0,
                    ],
                    [
                        'question' => 'Pourquoi les résidus sont-ils élevés au carré dans les MCO ?',
                        'explanation' => 'Le carré rend toutes les contributions positives et empêche les erreurs positives et négatives de s’annuler entre elles.',
                        'choices' => [
                            'Pour éviter que les résidus positifs et négatifs ne se compensent',
                            'Pour rendre les résidus toujours négatifs',
                            'Pour supprimer les grandes erreurs',
                            'Pour transformer y en variable qualitative',
                        ],
                        'correct' => 0,
                    ],
                    [
                        'question' => 'Que cherche à minimiser la méthode des MCO ?',
                        'explanation' => 'L’objectif direct des MCO est de minimiser la somme des carrés des résidus produits par le modèle.',
                        'choices' => [
                            'La somme des carrés des résidus',
                            'La moyenne de x',
                            'Le nombre de variables',
                            'La valeur du coefficient de détermination',
                        ],
                        'correct' => 0,
                    ],
                    [
                        'question' => 'Pourquoi la méthode des moindres carrés est-elle utilisée en économétrie ?',
                        'explanation' => 'Les MCO fournissent une méthode systématique et largement utilisée pour estimer les paramètres des modèles linéaires à partir de données.',
                        'choices' => [
                            'Elle fournit une méthode systématique pour estimer les paramètres d’un modèle linéaire',
                            'Elle garantit toujours un modèle causal',
                            'Elle rend toutes les erreurs nulles dans les données',
                            'Elle fonctionne uniquement avec des variables binaires',
                        ],
                        'correct' => 0,
                    ],
                    [
                        'question' => 'Dans une régression avec constante estimée par MCO, quelle propriété possède généralement la somme des résidus ?',
                        'explanation' => 'Lorsqu’une constante est incluse dans une régression MCO standard, la somme des résidus dans l’échantillon est nulle.',
                        'choices' => [
                            'Elle est égale à zéro',
                            'Elle est toujours positive',
                            'Elle est toujours négative',
                            'Elle est égale au coefficient de pente',
                        ],
                        'correct' => 0,
                    ],
                    [
                        'question' => 'Pourquoi les valeurs extrêmes peuvent-elles fortement influencer une régression MCO ?',
                        'explanation' => 'Comme les résidus sont élevés au carré, les grandes erreurs reçoivent un poids important et certaines observations extrêmes peuvent fortement influencer les coefficients.',
                        'choices' => [
                            'Les carrés donnent un poids important aux grandes erreurs et certains points peuvent fortement influencer la droite',
                            'Les valeurs extrêmes sont toujours ignorées',
                            'Les MCO utilisent uniquement la médiane',
                            'Les observations extrêmes ne jouent jamais de rôle',
                        ],
                        'correct' => 0,
                    ],
                    [
                        'question' => 'Que signifie une bonne qualité d’ajustement d’une régression ?',
                        'explanation' => 'Une bonne qualité d’ajustement signifie généralement que les prédictions du modèle sont relativement proches des valeurs observées selon la mesure utilisée.',
                        'choices' => [
                            'Les valeurs prédites sont relativement proches des valeurs observées selon la mesure utilisée',
                            'Le modèle est nécessairement causal',
                            'Tous les résidus sont exactement nuls',
                            'Le modèle est nécessairement correct économiquement',
                        ],
                        'correct' => 0,
                    ],
                    [
                        'question' => 'Pourquoi faut-il examiner les résidus après une estimation MCO ?',
                        'explanation' => 'L’analyse des résidus peut révéler des structures ou des problèmes qui suggèrent que certaines hypothèses ou la spécification du modèle doivent être examinées.',
                        'choices' => [
                            'Pour détecter certaines structures ou violations possibles des hypothèses du modèle',
                            'Pour augmenter artificiellement le R²',
                            'Pour changer automatiquement les données',
                            'Pour supprimer toute incertitude',
                        ],
                        'correct' => 0,
                    ],
                    [
                        'question' => 'Qu’est-ce qu’un ajustement par régression ?',
                        'explanation' => 'L’ajustement par régression représente la relation estimée entre la variable dépendante et les variables explicatives à l’aide d’un modèle statistique.',
                        'choices' => [
                            'La représentation mathématique de la relation estimée entre la variable dépendante et les variables explicatives',
                            'Une modification obligatoire des observations',
                            'Une suppression de toutes les erreurs',
                            'Une transformation automatique en série temporelle',
                        ],
                        'correct' => 0,
                    ],
                    [
                        'question' => 'Pourquoi les MCO ne garantissent-ils pas à eux seuls une interprétation causale ?',
                        'explanation' => 'Une estimation MCO peut être affectée par des variables omises, l’endogénéité ou d’autres problèmes. La causalité exige donc des hypothèses supplémentaires.',
                        'choices' => [
                            'Les hypothèses nécessaires à l’interprétation causale peuvent être violées',
                            'Les MCO ne produisent jamais de coefficients',
                            'Les données économiques sont toujours expérimentales',
                            'Une régression ne peut jamais mesurer une association',
                        ],
                        'correct' => 0,
                    ],
                ],
            ],

            [
                'title' => 'Corrélation, covariance et interprétation',
                'description' => 'Quiz débutant sur la corrélation et la covariance.',
                'questions' => [
                    [
                        'question' => 'Que mesure le coefficient de corrélation ?',
                        'explanation' => 'Le coefficient de corrélation mesure la direction et l’intensité de l’association linéaire entre deux variables.',
                        'choices' => [
                            'La direction et l’intensité de l’association linéaire entre deux variables',
                            'La causalité certaine entre les variables',
                            'La moyenne d’une seule variable',
                            'Le nombre d’observations',
                        ],
                        'correct' => 0,
                    ],
                    [
                        'question' => 'Que signifie une corrélation proche de +1 ?',
                        'explanation' => 'Une corrélation proche de +1 indique que les deux variables présentent une forte relation linéaire positive.',
                        'choices' => [
                            'Une forte association linéaire positive',
                            'Une forte association linéaire négative',
                            'Une absence de relation linéaire',
                            'Une causalité parfaite',
                        ],
                        'correct' => 0,
                    ],
                    [
                        'question' => 'Que signifie une corrélation proche de -1 ?',
                        'explanation' => 'Une corrélation proche de -1 indique une forte relation linéaire négative : lorsque l’une augmente, l’autre tend à diminuer.',
                        'choices' => [
                            'Une forte association linéaire négative',
                            'Une forte association positive',
                            'Une absence totale de relation',
                            'Une indépendance parfaite dans tous les cas',
                        ],
                        'correct' => 0,
                    ],
                    [
                        'question' => 'Que signifie une corrélation proche de 0 ?',
                        'explanation' => 'Une corrélation proche de zéro indique une faible ou une absence d’association linéaire, mais elle n’exclut pas nécessairement une relation non linéaire.',
                        'choices' => [
                            'Une faible ou une absence d’association linéaire',
                            'Une causalité nulle dans tous les cas',
                            'Une forte association positive',
                            'Une forte association négative',
                        ],
                        'correct' => 0,
                    ],
                    [
                        'question' => 'Pourquoi une corrélation élevée ne prouve-t-elle pas automatiquement la causalité ?',
                        'explanation' => 'Une troisième variable ou un autre mécanisme peut influencer les deux variables et créer l’association observée sans relation causale directe.',
                        'choices' => [
                            'Une autre variable ou un mécanisme commun peut expliquer l’association observée',
                            'Une corrélation ne peut jamais être calculée',
                            'La causalité et la corrélation sont toujours identiques',
                            'Une corrélation est toujours due au hasard',
                        ],
                        'correct' => 0,
                    ],
                    [
                        'question' => 'Qu’est-ce que la covariance ?',
                        'explanation' => 'La covariance indique dans quelle direction deux variables tendent à varier ensemble par rapport à leurs moyennes.',
                        'choices' => [
                            'Une mesure de la manière dont deux variables varient ensemble autour de leurs moyennes',
                            'La moyenne de deux variables',
                            'La variance d’une seule variable',
                            'La différence entre deux médianes',
                        ],
                        'correct' => 0,
                    ],
                    [
                        'question' => 'Pourquoi la covariance est-elle plus difficile à comparer entre variables que la corrélation ?',
                        'explanation' => 'La covariance dépend des unités de mesure de chaque variable, alors que la corrélation est standardisée et comprise entre -1 et +1.',
                        'choices' => [
                            'Sa valeur dépend des unités de mesure utilisées',
                            'Elle est toujours comprise entre 0 et 1',
                            'Elle ne dépend jamais des données',
                            'Elle mesure automatiquement la causalité',
                        ],
                        'correct' => 0,
                    ],
                    [
                        'question' => 'Quelle représentation graphique permet souvent d’observer une corrélation ?',
                        'explanation' => 'Un nuage de points permet d’observer visuellement la direction, la dispersion et la forme générale de la relation entre deux variables.',
                        'choices' => [
                            'Un nuage de points',
                            'Un histogramme d’une seule variable uniquement',
                            'Un diagramme circulaire uniquement',
                            'Un tableau de fréquence uniquement',
                        ],
                        'correct' => 0,
                    ],
                    [
                        'question' => 'Si les points d’un nuage montent globalement de gauche à droite, la relation est probablement :',
                        'explanation' => 'Des points qui montent globalement de gauche à droite indiquent généralement une association positive entre les deux variables.',
                        'choices' => [
                            'Positive',
                            'Négative',
                            'Nulle par définition',
                            'Toujours parfaitement linéaire',
                        ],
                        'correct' => 0,
                    ],
                    [
                        'question' => 'Pourquoi faut-il examiner les données avant d’interpréter une corrélation ?',
                        'explanation' => 'Les valeurs atypiques, les regroupements ou les relations non linéaires peuvent influencer fortement la corrélation et conduire à une interprétation incorrecte.',
                        'choices' => [
                            'Les valeurs atypiques ou les relations non linéaires peuvent modifier l’interprétation du coefficient',
                            'La corrélation est indépendante de la forme des données',
                            'Les valeurs atypiques sont toujours supprimées',
                            'Une corrélation explique automatiquement le mécanisme économique',
                        ],
                        'correct' => 0,
                    ],
                ],
            ],

            [
                'title' => 'R², résidus et qualité du modèle',
                'description' => 'Quiz débutant sur le R², les résidus et la qualité d’ajustement.',
                'questions' => [
                    [
                        'question' => 'Que mesure principalement R² ?',
                        'explanation' => 'R² mesure la part de la variation de la variable dépendante qui est expliquée par le modèle dans l’échantillon.',
                        'choices' => [
                            'La part de la variation de la variable dépendante expliquée par le modèle dans l’échantillon',
                            'La probabilité que le modèle soit causal',
                            'La moyenne des résidus',
                            'La taille de l’échantillon',
                        ],
                        'correct' => 0,
                    ],
                    [
                        'question' => 'Si R² = 0,75, quelle interprétation est correcte ?',
                        'explanation' => 'Un R² de 0,75 signifie que le modèle explique environ 75 % de la variation observée de y dans l’échantillon considéré.',
                        'choices' => [
                            'Environ 75 % de la variation de y dans l’échantillon est expliquée par le modèle',
                            'Le modèle est causal à 75 %',
                            '75 % des observations sont exactes',
                            'La pente est égale à 0,75',
                        ],
                        'correct' => 0,
                    ],
                    [
                        'question' => 'Que signifie un R² égal à 0 ?',
                        'explanation' => 'Dans le cadre considéré, un R² nul signifie que le modèle n’améliore pas l’explication de la variation de y par rapport à la référence appropriée.',
                        'choices' => [
                            'Le modèle n’explique aucune variation de y par rapport à la référence appropriée dans le cadre considéré',
                            'Il existe nécessairement une forte causalité négative',
                            'Toutes les observations sont identiques',
                            'Tous les coefficients sont égaux à zéro dans tous les modèles possibles',
                        ],
                        'correct' => 0,
                    ],
                    [
                        'question' => 'Qu’est-ce qu’un bon résidu dans un modèle bien spécifié ?',
                        'explanation' => 'Dans un modèle correctement spécifié, les résidus ne devraient généralement pas présenter de structure systématique inexpliquée dans les diagnostics appropriés.',
                        'choices' => [
                            'Un résidu qui ne présente pas de structure systématique inexpliquée dans les diagnostics appropriés',
                            'Un résidu nécessairement égal à zéro pour chaque observation',
                            'Un résidu toujours positif',
                            'Un résidu égal au coefficient de pente',
                        ],
                        'correct' => 0,
                    ],
                    [
                        'question' => 'Pourquoi un modèle avec un R² élevé peut-il tout de même être mauvais ?',
                        'explanation' => 'Un R² élevé ne garantit ni la bonne spécification du modèle ni une interprétation causale correcte.',
                        'choices' => [
                            'Il peut être mal spécifié, biaisé ou fondé sur une relation non causale',
                            'Un R² élevé garantit toujours la qualité du modèle',
                            'Un R² élevé signifie que les résidus sont toujours nuls',
                            'Un R² élevé prouve automatiquement la théorie économique',
                        ],
                        'correct' => 0,
                    ],
                    [
                        'question' => 'Pourquoi le R² peut-il augmenter lorsqu’on ajoute des variables explicatives ?',
                        'explanation' => 'Ajouter une variable explicative donne au modèle davantage de possibilités pour ajuster les données ; le R² ne diminue donc généralement pas.',
                        'choices' => [
                            'Ajouter des variables permet généralement au modèle de mieux ajuster les données ou de ne pas réduire l’ajustement mesuré par R²',
                            'Parce que les nouvelles variables sont toujours causales',
                            'Parce que les résidus deviennent nécessairement nuls',
                            'Parce que les données changent automatiquement',
                        ],
                        'correct' => 0,
                    ],
                    [
                        'question' => 'Pourquoi faut-il regarder le R² ajusté dans certains modèles ?',
                        'explanation' => 'Le R² ajusté prend en compte le nombre de variables explicatives et pénalise l’ajout de variables qui n’apportent pas suffisamment d’amélioration.',
                        'choices' => [
                            'Il tient compte du nombre de variables explicatives ajoutées lors de l’évaluation de l’ajustement',
                            'Il mesure directement la causalité',
                            'Il remplace toujours R²',
                            'Il élimine l’erreur d’échantillonnage',
                        ],
                        'correct' => 0,
                    ],
                    [
                        'question' => 'Pourquoi un résidu très grand peut-il attirer l’attention du chercheur ?',
                        'explanation' => 'Un résidu très grand peut signaler une observation atypique, une erreur de mesure ou un problème dans la spécification du modèle.',
                        'choices' => [
                            'Il peut signaler une observation atypique, une mauvaise spécification ou une erreur de mesure',
                            'Il signifie toujours que le modèle est correct',
                            'Il garantit une meilleure précision',
                            'Il prouve automatiquement la causalité',
                        ],
                        'correct' => 0,
                    ],
                    [
                        'question' => 'Pourquoi compare-t-on parfois les valeurs observées et prédites ?',
                        'explanation' => 'Cette comparaison permet d’évaluer dans quelle mesure le modèle reproduit les valeurs effectivement observées dans les données.',
                        'choices' => [
                            'Pour évaluer la capacité du modèle à reproduire les données observées',
                            'Pour supprimer toutes les erreurs',
                            'Pour rendre les variables indépendantes',
                            'Pour prouver que les observations sont causées par le modèle',
                        ],
                        'correct' => 0,
                    ],
                    [
                        'question' => 'Pourquoi une mauvaise spécification peut-elle produire des résidus structurés ?',
                        'explanation' => 'Si une variable importante est omise ou si la forme fonctionnelle est inadéquate, les erreurs peuvent suivre un schéma systématique au lieu d’être simplement aléatoires.',
                        'choices' => [
                            'Le modèle peut omettre une relation importante ou imposer une forme fonctionnelle inadéquate',
                            'Les résidus structurés n’existent jamais',
                            'Un modèle linéaire explique toujours toute structure',
                            'Une mauvaise spécification réduit toujours toutes les données à zéro',
                        ],
                        'correct' => 0,
                    ],
                ],
            ],

            [
                'title' => 'Hypothèses de régression et erreurs',
                'description' => 'Quiz débutant sur les principales hypothèses de régression.',
                'questions' => [
                    [
                        'question' => 'Pourquoi suppose-t-on souvent que la moyenne conditionnelle de l’erreur est nulle dans une régression causale simple ?',
                        'explanation' => 'Cette hypothèse signifie qu’en moyenne, les facteurs non observés contenus dans l’erreur ne sont pas systématiquement liés à la variable explicative.',
                        'choices' => [
                            'Cela permet notamment d’éviter que les variables explicatives soient systématiquement associées à des composantes non observées de l’erreur',
                            'Cela garantit toujours une distribution normale',
                            'Cela rend toutes les variables constantes',
                            'Cela supprime les erreurs de mesure',
                        ],
                        'correct' => 0,
                    ],
                    [
                        'question' => 'Qu’est-ce qu’une variance constante des erreurs ?',
                        'explanation' => 'Une variance constante des erreurs signifie que la dispersion de l’erreur conditionnelle reste stable selon les valeurs des variables explicatives.',
                        'choices' => [
                            'L’homoscédasticité',
                            'L’endogénéité',
                            'La multicolinéarité',
                            'La causalité',
                        ],
                        'correct' => 0,
                    ],
                    [
                        'question' => 'Qu’est-ce que l’hétéroscédasticité ?',
                        'explanation' => 'L’hétéroscédasticité signifie que la variance conditionnelle des erreurs n’est pas constante entre les observations.',
                        'choices' => [
                            'Une situation où la variance conditionnelle des erreurs varie selon les observations ou les variables explicatives',
                            'Une absence totale de variance',
                            'Une corrélation parfaite entre deux régresseurs',
                            'Une relation causale certaine',
                        ],
                        'correct' => 0,
                    ],
                    [
                        'question' => 'Pourquoi l’hétéroscédasticité peut-elle être problématique ?',
                        'explanation' => 'L’hétéroscédasticité peut rendre les erreurs standards classiques incorrectes, ce qui affecte notamment les tests statistiques.',
                        'choices' => [
                            'Elle peut rendre les erreurs standards classiques incorrectes',
                            'Elle garantit toujours des coefficients biaisés',
                            'Elle supprime toute relation statistique',
                            'Elle rend R² automatiquement nul',
                        ],
                        'correct' => 0,
                    ],
                    [
                        'question' => 'Qu’est-ce que l’endogénéité dans un modèle de régression ?',
                        'explanation' => 'L’endogénéité apparaît lorsqu’une variable explicative est corrélée avec le terme d’erreur, ce qui peut rendre les estimations difficiles à interpréter causalement.',
                        'choices' => [
                            'Une situation où une variable explicative est corrélée avec le terme d’erreur',
                            'Une variance constante des erreurs',
                            'Une absence de corrélation entre toutes les variables',
                            'Une distribution parfaitement normale',
                        ],
                        'correct' => 0,
                    ],
                    [
                        'question' => 'Pourquoi une variable omise peut-elle créer de l’endogénéité ?',
                        'explanation' => 'Si une variable omise influence y et est également corrélée avec une variable explicative incluse, son omission peut contaminer le coefficient estimé.',
                        'choices' => [
                            'Si la variable omise influence y et est corrélée avec une variable explicative incluse',
                            'Une variable omise n’a jamais d’effet sur les coefficients',
                            'Toute variable omise rend le modèle automatiquement meilleur',
                            'Les variables omises sont toujours indépendantes',
                        ],
                        'correct' => 0,
                    ],
                    [
                        'question' => 'Qu’est-ce que la multicolinéarité ?',
                        'explanation' => 'La multicolinéarité correspond à une forte relation linéaire entre plusieurs variables explicatives du modèle.',
                        'choices' => [
                            'Une forte relation linéaire entre plusieurs variables explicatives',
                            'Une forte relation entre y et le terme d’erreur',
                            'Une variance nulle des erreurs',
                            'Une absence de données',
                        ],
                        'correct' => 0,
                    ],
                    [
                        'question' => 'Quel effet la multicolinéarité peut-elle avoir sur une estimation ?',
                        'explanation' => 'Une forte multicolinéarité rend plus difficile l’identification séparée de l’effet de chaque variable et peut augmenter les erreurs standards des coefficients.',
                        'choices' => [
                            'Elle peut rendre les estimations individuelles des coefficients moins précises',
                            'Elle garantit une causalité parfaite',
                            'Elle rend tous les coefficients égaux à zéro',
                            'Elle élimine les erreurs standards',
                        ],
                        'correct' => 0,
                    ],
                    [
                        'question' => 'Pourquoi une mauvaise forme fonctionnelle peut-elle poser problème ?',
                        'explanation' => 'Si la forme choisie ne correspond pas suffisamment à la relation économique réelle, le modèle peut mal représenter les données et produire des résultats trompeurs.',
                        'choices' => [
                            'Le modèle peut mal représenter la relation économique réelle entre les variables',
                            'La forme fonctionnelle n’a jamais d’importance',
                            'Elle garantit toujours un R² élevé',
                            'Elle supprime les résidus',
                        ],
                        'correct' => 0,
                    ],
                    [
                        'question' => 'Pourquoi les diagnostics de régression sont-ils utiles ?',
                        'explanation' => 'Les diagnostics permettent d’identifier certains problèmes liés aux données, aux résidus et aux hypothèses du modèle avant d’interpréter les résultats.',
                        'choices' => [
                            'Ils permettent d’identifier des problèmes possibles dans les données ou les hypothèses du modèle',
                            'Ils garantissent la causalité',
                            'Ils remplacent l’analyse économique',
                            'Ils rendent toujours le modèle parfait',
                        ],
                        'correct' => 0,
                    ],
                ],
            ],

            [
                'title' => 'Données économiques et modèles',
                'description' => 'Quiz débutant sur les différents types de données économétriques.',
                'questions' => [
                    [
                        'question' => 'Qu’est-ce qu’une donnée en coupe transversale ?',
                        'explanation' => 'Une coupe transversale contient des observations sur plusieurs individus, entreprises ou autres unités à un même moment ou sur une même période.',
                        'choices' => [
                            'Une observation de plusieurs unités à un même moment ou sur une même période',
                            'Une observation d’une seule unité sur plusieurs années',
                            'Une série uniquement financière',
                            'Une variable sans dimension temporelle possible',
                        ],
                        'correct' => 0,
                    ],
                    [
                        'question' => 'Qu’est-ce qu’une série temporelle ?',
                        'explanation' => 'Une série temporelle contient plusieurs observations d’une même variable recueillies successivement au cours du temps.',
                        'choices' => [
                            'Des observations d’une variable recueillies successivement dans le temps',
                            'Des données de plusieurs individus à une date unique uniquement',
                            'Une variable qualitative',
                            'Un tableau sans ordre',
                        ],
                        'correct' => 0,
                    ],
                    [
                        'question' => 'Qu’est-ce qu’un panel de données ?',
                        'explanation' => 'Un panel combine les dimensions individuelle et temporelle en observant plusieurs unités à plusieurs périodes.',
                        'choices' => [
                            'Des observations répétées pour plusieurs unités au cours du temps',
                            'Une seule observation pour une seule unité',
                            'Uniquement des données mensuelles',
                            'Une base sans identifiant d’unité',
                        ],
                        'correct' => 0,
                    ],
                    [
                        'question' => 'Pourquoi la structure des données influence-t-elle le choix du modèle économétrique ?',
                        'explanation' => 'Les différents types de données présentent des propriétés et des problèmes statistiques différents, ce qui peut nécessiter des méthodes économétriques adaptées.',
                        'choices' => [
                            'Les problèmes statistiques et les informations disponibles diffèrent selon qu’il s’agit de coupes, séries temporelles ou panels',
                            'Toutes les structures de données sont équivalentes',
                            'La structure n’a jamais d’effet sur l’analyse',
                            'Les modèles économétriques utilisent uniquement des séries temporelles',
                        ],
                        'correct' => 0,
                    ],
                    [
                        'question' => 'Pourquoi une série temporelle peut-elle présenter une tendance ?',
                        'explanation' => 'Une tendance signifie qu’une variable évolue de manière systématique à la hausse ou à la baisse sur une période prolongée.',
                        'choices' => [
                            'La variable peut évoluer systématiquement sur le long terme',
                            'Toutes les séries temporelles sont stationnaires',
                            'Une tendance implique nécessairement une causalité',
                            'La tendance est toujours une erreur de mesure',
                        ],
                        'correct' => 0,
                    ],
                    [
                        'question' => 'Pourquoi une corrélation élevée entre deux séries temporelles peut-elle être trompeuse ?',
                        'explanation' => 'Deux séries peuvent partager une tendance dans le temps sans qu’il existe entre elles une relation économique causale directe.',
                        'choices' => [
                            'Elles peuvent partager une tendance commune sans relation économique causale directe',
                            'Les séries temporelles ne peuvent jamais être corrélées',
                            'La corrélation temporelle prouve toujours la causalité',
                            'Une tendance commune rend la corrélation impossible',
                        ],
                        'correct' => 0,
                    ],
                    [
                        'question' => 'Pourquoi les données de panel peuvent-elles être utiles ?',
                        'explanation' => 'Les panels permettent d’exploiter simultanément les différences entre les unités observées et les changements de ces unités au cours du temps.',
                        'choices' => [
                            'Elles permettent d’exploiter simultanément les différences entre unités et les changements dans le temps',
                            'Elles ne contiennent aucune information temporelle',
                            'Elles garantissent automatiquement la causalité',
                            'Elles éliminent tous les problèmes de données',
                        ],
                        'correct' => 0,
                    ],
                    [
                        'question' => 'Pourquoi faut-il vérifier la qualité des données avant une estimation ?',
                        'explanation' => 'Les erreurs de saisie, les observations incorrectes ou les valeurs manquantes peuvent modifier les résultats statistiques et conduire à de mauvaises conclusions.',
                        'choices' => [
                            'Les erreurs de saisie, valeurs manquantes ou définitions incohérentes peuvent fausser les résultats',
                            'Les données sont toujours parfaites',
                            'La qualité n’a aucun effet sur les coefficients',
                            'Les logiciels corrigent automatiquement toutes les erreurs',
                        ],
                        'correct' => 0,
                    ],
                    [
                        'question' => 'Pourquoi les valeurs manquantes doivent-elles être examinées ?',
                        'explanation' => 'Les valeurs manquantes peuvent modifier la composition de l’échantillon et influencer les estimations si elles ne sont pas traitées correctement.',
                        'choices' => [
                            'Leur présence peut modifier la composition de l’échantillon et influencer les estimations',
                            'Elles sont toujours sans importance',
                            'Elles augmentent toujours la précision',
                            'Elles sont automatiquement remplacées par des valeurs correctes',
                        ],
                        'correct' => 0,
                    ],
                    [
                        'question' => 'Pourquoi faut-il documenter les sources des données économiques ?',
                        'explanation' => 'Connaître la source permet de comprendre les définitions, la méthode de collecte, la période couverte et les limites des données.',
                        'choices' => [
                            'Pour connaître les définitions, méthodes de collecte et limites des données utilisées',
                            'Pour garantir que toutes les statistiques sont parfaites',
                            'Pour supprimer les valeurs atypiques',
                            'Pour éviter toute analyse statistique',
                        ],
                        'correct' => 0,
                    ],
                ],
            ],

            [
                'title' => 'Interprétation économique des résultats',
                'description' => 'Quiz débutant sur l’interprétation des résultats économétriques.',
                'questions' => [
                    [
                        'question' => 'Si un coefficient de régression est positif, peut-on conclure automatiquement que la relation est causale ?',
                        'explanation' => 'Un coefficient positif indique une association positive dans le modèle, mais la causalité nécessite des hypothèses supplémentaires et ne découle pas automatiquement du signe du coefficient.',
                        'choices' => [
                            'Non, une relation positive dans les données ne suffit pas à établir la causalité',
                            'Oui, toujours',
                            'Oui, si R² est supérieur à zéro',
                            'Oui, si l’échantillon est grand',
                        ],
                        'correct' => 0,
                    ],
                    [
                        'question' => 'Si le coefficient d’un prix dans une régression de demande est négatif, quelle interprétation descriptive est cohérente ?',
                        'explanation' => 'Un coefficient négatif indique qu’une hausse du prix est associée à une baisse de la quantité demandée selon la relation estimée par le modèle.',
                        'choices' => [
                            'Toutes choses égales selon le modèle, un prix plus élevé est associé à une quantité demandée plus faible',
                            'Le prix cause nécessairement la baisse de la demande',
                            'La quantité est toujours nulle lorsque le prix augmente',
                            'Le modèle est nécessairement faux',
                        ],
                        'correct' => 0,
                    ],
                    [
                        'question' => 'Pourquoi faut-il interpréter un coefficient avec son unité ?',
                        'explanation' => 'L’unité du coefficient dépend des unités de la variable dépendante et de la variable explicative. Elle précise la variation mesurée par le coefficient.',
                        'choices' => [
                            'Un coefficient représente une variation dans les unités des variables concernées',
                            'Les coefficients sont toujours sans unité',
                            'L’unité ne change jamais l’interprétation',
                            'Tous les coefficients sont des pourcentages',
                        ],
                        'correct' => 0,
                    ],
                    [
                        'question' => 'Pourquoi une régression peut-elle être utile même si elle ne prouve pas la causalité ?',
                        'explanation' => 'Une régression peut fournir des informations quantitatives sur des associations, aider à la prévision et décrire les relations présentes dans les données.',
                        'choices' => [
                            'Elle peut décrire des associations, améliorer certaines prévisions et fournir des informations quantitatives',
                            'Une régression ne fournit jamais aucune information',
                            'Elle remplace toujours les expériences',
                            'Elle garantit toujours les résultats futurs',
                        ],
                        'correct' => 0,
                    ],
                    [
                        'question' => 'Pourquoi faut-il comparer un modèle statistique avec la théorie économique ?',
                        'explanation' => 'La théorie aide à vérifier si les signes, les ordres de grandeur et les relations estimées sont cohérents avec les mécanismes économiques étudiés.',
                        'choices' => [
                            'Pour vérifier si les signes, ordres de grandeur et mécanismes estimés sont cohérents avec les connaissances économiques',
                            'Parce que les données ne servent jamais',
                            'Parce que la théorie détermine toujours exactement les coefficients',
                            'Parce qu’une régression doit toujours être positive',
                        ],
                        'correct' => 0,
                    ],
                    [
                        'question' => 'Pourquoi un grand nombre d’observations est-il généralement utile ?',
                        'explanation' => 'Sous des conditions appropriées, un échantillon plus grand peut réduire l’incertitude des estimations et améliorer leur précision statistique.',
                        'choices' => [
                            'Il peut améliorer la précision des estimations sous des conditions appropriées',
                            'Il élimine automatiquement tous les biais',
                            'Il garantit la causalité',
                            'Il rend toutes les observations indépendantes',
                        ],
                        'correct' => 0,
                    ],
                    [
                        'question' => 'Pourquoi les résultats économétriques doivent-ils être présentés avec prudence ?',
                        'explanation' => 'Les résultats dépendent des données utilisées, de la spécification du modèle, des hypothèses et de la méthode d’estimation.',
                        'choices' => [
                            'Les estimations dépendent des données, des hypothèses, de la spécification et de la méthode utilisée',
                            'Les résultats économétriques sont toujours certains',
                            'Les hypothèses n’ont aucune importance',
                            'Toutes les méthodes donnent exactement les mêmes coefficients',
                        ],
                        'correct' => 0,
                    ],
                    [
                        'question' => 'Pourquoi une analyse de sensibilité peut-elle être utile ?',
                        'explanation' => 'Une analyse de sensibilité montre si les résultats restent similaires lorsque certaines hypothèses, variables ou spécifications du modèle sont modifiées.',
                        'choices' => [
                            'Elle montre comment les résultats changent lorsque certaines hypothèses ou spécifications sont modifiées',
                            'Elle garantit la causalité',
                            'Elle supprime toutes les erreurs',
                            'Elle remplace les données',
                        ],
                        'correct' => 0,
                    ],
                    [
                        'question' => 'Pourquoi la reproductibilité est-elle importante en économétrie ?',
                        'explanation' => 'La reproductibilité permet à d’autres chercheurs de vérifier les données, les traitements et les calculs ayant conduit aux résultats.',
                        'choices' => [
                            'Elle permet de vérifier les données, les étapes de traitement et les résultats obtenus',
                            'Elle garantit que le modèle est causal',
                            'Elle élimine les hypothèses statistiques',
                            'Elle rend les données automatiquement exactes',
                        ],
                        'correct' => 0,
                    ],
                    [
                        'question' => 'Quel principe résume le mieux une bonne pratique économétrique ?',
                        'explanation' => 'Une bonne pratique consiste à comprendre les données, choisir une spécification adaptée, vérifier les hypothèses et interpréter les résultats avec prudence dans leur contexte.',
                        'choices' => [
                            'Comprendre les données, spécifier le modèle, vérifier ses hypothèses et interpréter les résultats dans leur contexte économique',
                            'Choisir le modèle donnant le plus grand coefficient',
                            'Ignorer les hypothèses si R² est élevé',
                            'Interpréter toute corrélation comme une causalité',
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
                    'description' => $quizData['description'] ?? null,
                    'duration' => $quizData['duration'] ?? 10,
                    'passing_score' => $quizData['passing_score'] ?? 80,
                    'total_marks' => $quizData['total_marks'] ?? 10,
                    'is_active' => $quizData['is_active'] ?? true,
                    'difficulty' => $quizData['difficulty'] ?? 'Beginner',
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

