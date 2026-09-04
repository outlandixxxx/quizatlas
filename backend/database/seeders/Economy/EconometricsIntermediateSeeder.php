```php
<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Major;
use App\Models\Subject;
use App\Models\Quiz;
use App\Models\Question;
use App\Models\Answer;

class EconometricsIntermediateSeeder extends Seeder
{
    public function run(): void
    {
        $major = Major::where('slug', 'economy')->firstOrFail();

        $subject = Subject::where('major_id', $major->id)
            ->where('slug', 'econometrics')
            ->firstOrFail();

        $quizzes = [
            [
                'title' => 'Régression linéaire multiple',
                'questions' => [
                    [
                        'question' => 'Quelle est la forme générale d’un modèle de régression linéaire multiple ?',
                        'answers' => [
                            ['answer' => 'y = β₀ + β₁x₁ + β₂x₂ + ... + βₖxₖ + ε', 'iscorrect' => true],
                            ['answer' => 'y = β₀β₁x₁x₂', 'iscorrect' => false],
                            ['answer' => 'y = x₁² + x₂² uniquement', 'iscorrect' => false],
                            ['answer' => 'y = β₀ + ε seulement', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Comment interpréter β₁ dans une régression multiple ?',
                        'answers' => [
                            ['answer' => 'La variation attendue de y associée à une unité supplémentaire de x₁, toutes les autres variables incluses étant maintenues constantes', 'iscorrect' => true],
                            ['answer' => 'La moyenne de x₁', 'iscorrect' => false],
                            ['answer' => 'La variance de y', 'iscorrect' => false],
                            ['answer' => 'La probabilité que x₁ soit causal', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi ajoute-t-on des variables de contrôle dans une régression ?',
                        'answers' => [
                            ['answer' => 'Pour tenir compte de facteurs observables pouvant être associés à la variable dépendante et à la variable d’intérêt', 'iscorrect' => true],
                            ['answer' => 'Pour garantir automatiquement la causalité', 'iscorrect' => false],
                            ['answer' => 'Pour supprimer toutes les erreurs de mesure', 'iscorrect' => false],
                            ['answer' => 'Pour rendre toutes les variables indépendantes', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Que signifie « toutes choses égales par ailleurs » dans l’interprétation d’un coefficient de régression multiple ?',
                        'answers' => [
                            ['answer' => 'Les autres variables du modèle sont maintenues constantes pour interpréter l’association marginale considérée', 'iscorrect' => true],
                            ['answer' => 'Toutes les variables ont exactement la même valeur', 'iscorrect' => false],
                            ['answer' => 'Les autres variables sont supprimées du modèle', 'iscorrect' => false],
                            ['answer' => 'Le modèle ne contient qu’une seule variable', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Si β₁ = 2,5 et x₁ augmente d’une unité, quelle est la variation prédite de y dans le modèle, toutes choses égales par ailleurs ?',
                        'answers' => [
                            ['answer' => '2,5 unités', 'iscorrect' => true],
                            ['answer' => '1 unité', 'iscorrect' => false],
                            ['answer' => '5 unités', 'iscorrect' => false],
                            ['answer' => '0,4 unité', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi l’ajout d’une variable pertinente peut-il modifier fortement un coefficient déjà estimé ?',
                        'answers' => [
                            ['answer' => 'Parce qu’elle peut absorber une partie d’une association précédemment attribuée à une autre variable', 'iscorrect' => true],
                            ['answer' => 'Parce que les coefficients sont toujours indépendants les uns des autres', 'iscorrect' => false],
                            ['answer' => 'Parce que R² devient toujours nul', 'iscorrect' => false],
                            ['answer' => 'Parce que la variable dépendante change automatiquement', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce qu’une variable indicatrice dans une régression ?',
                        'answers' => [
                            ['answer' => 'Une variable souvent codée 0 ou 1 pour représenter une catégorie ou une condition', 'iscorrect' => true],
                            ['answer' => 'Une variable qui ne peut prendre que des valeurs négatives', 'iscorrect' => false],
                            ['answer' => 'Une variable nécessairement continue', 'iscorrect' => false],
                            ['answer' => 'Une variable égale à la moyenne', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi faut-il généralement omettre une catégorie de référence lorsqu’on utilise des indicatrices pour toutes les catégories ?',
                        'answers' => [
                            ['answer' => 'Pour éviter une colinéarité parfaite avec la constante du modèle', 'iscorrect' => true],
                            ['answer' => 'Pour réduire automatiquement le nombre d’observations', 'iscorrect' => false],
                            ['answer' => 'Pour rendre les erreurs normalement distribuées', 'iscorrect' => false],
                            ['answer' => 'Pour augmenter toujours le R²', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Si une variable indicatrice vaut 1 pour les diplômés et 0 pour les autres, que mesure son coefficient dans un modèle simple ?',
                        'answers' => [
                            ['answer' => 'La différence moyenne prédite entre les diplômés et la catégorie de référence, toutes choses égales selon le modèle', 'iscorrect' => true],
                            ['answer' => 'Le nombre total de diplômés', 'iscorrect' => false],
                            ['answer' => 'La variance du revenu', 'iscorrect' => false],
                            ['answer' => 'La probabilité que le diplôme soit causal', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une interaction entre deux variables peut-elle être ajoutée à une régression ?',
                        'answers' => [
                            ['answer' => 'Pour permettre à l’effet d’une variable de dépendre du niveau d’une autre', 'iscorrect' => true],
                            ['answer' => 'Pour supprimer toutes les relations non linéaires', 'iscorrect' => false],
                            ['answer' => 'Pour imposer un effet constant', 'iscorrect' => false],
                            ['answer' => 'Pour remplacer systématiquement la constante', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Tests de significativité et intervalles',
                'questions' => [
                    [
                        'question' => 'Que teste généralement un test t sur un coefficient individuel ?',
                        'answers' => [
                            ['answer' => 'Une hypothèse concernant la valeur d’un coefficient particulier', 'iscorrect' => true],
                            ['answer' => 'La totalité des coefficients simultanément', 'iscorrect' => false],
                            ['answer' => 'Uniquement la normalité des données', 'iscorrect' => false],
                            ['answer' => 'Le nombre d’observations', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Si une p-value est inférieure à 0,05, que fait-on généralement au seuil de 5 % ?',
                        'answers' => [
                            ['answer' => 'On rejette l’hypothèse nulle', 'iscorrect' => true],
                            ['answer' => 'On accepte H0 comme absolument vraie', 'iscorrect' => false],
                            ['answer' => 'On augmente nécessairement la taille de l’échantillon', 'iscorrect' => false],
                            ['answer' => 'On conclut automatiquement à la causalité', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Que signifie un intervalle de confiance à 95 % pour un coefficient dans l’interprétation fréquentiste standard ?',
                        'answers' => [
                            ['answer' => 'La procédure utilisée produit, à long terme, des intervalles couvrant le paramètre vrai dans environ 95 % des échantillons répétés', 'iscorrect' => true],
                            ['answer' => 'Il y a exactement 95 % de probabilité que le paramètre soit dans cet intervalle particulier', 'iscorrect' => false],
                            ['answer' => '95 % des observations individuelles sont dans l’intervalle', 'iscorrect' => false],
                            ['answer' => 'Le coefficient est causal avec 95 % de certitude', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Que peut-on souvent déduire d’un intervalle de confiance de 95 % qui n’inclut pas zéro pour un coefficient ?',
                        'answers' => [
                            ['answer' => 'Le coefficient est statistiquement différent de zéro au seuil de 5 % pour le test bilatéral correspondant', 'iscorrect' => true],
                            ['answer' => 'Le coefficient est nécessairement économiquement important', 'iscorrect' => false],
                            ['answer' => 'La causalité est automatiquement prouvée', 'iscorrect' => false],
                            ['answer' => 'Le modèle est nécessairement bien spécifié', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un coefficient très précis peut-il être statistiquement significatif même s’il est petit ?',
                        'answers' => [
                            ['answer' => Une faible erreur standard permet de détecter des écarts modestes par rapport à la valeur nulle', 'iscorrect' => true],
                            ['answer' => Un petit coefficient est toujours économiquement important', 'iscorrect' => false],
                            ['answer' => La p-value mesure directement la taille de l’effet', 'iscorrect' => false],
                            ['answer' => La significativité dépend uniquement du signe', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une grande erreur standard rend-elle plus difficile le rejet de l’hypothèse nulle β = 0 ?',
                        'answers' => [
                            ['answer' => Elle réduit la valeur absolue de la statistique t pour un coefficient donné', 'iscorrect' => true],
                            ['answer' => Elle augmente automatiquement le coefficient', 'iscorrect' => false],
                            ['answer' => Elle rend toujours le coefficient négatif', 'iscorrect' => false],
                            ['answer' => Elle augmente nécessairement R²', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce que l’erreur de type I dans un test sur un coefficient ?',
                        'answers' => [
                            ['answer' => 'Rejeter l’hypothèse nulle alors qu’elle est vraie', 'iscorrect' => true],
                            ['answer' => 'Ne pas rejeter l’hypothèse nulle alors qu’elle est fausse', 'iscorrect' => false],
                            ['answer' => 'Estimer le mauvais échantillon', 'iscorrect' => false],
                            ['answer' => 'Obtenir un R² faible', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce que la puissance statistique ?',
                        'answers' => [
                            ['answer' => 'La probabilité de détecter un effet réel donné lorsque l’hypothèse nulle est fausse', 'iscorrect' => true],
                            ['answer' => 'La probabilité que H0 soit vraie', 'iscorrect' => false],
                            ['answer' => 'La probabilité de faire une erreur de type I', 'iscorrect' => false],
                            ['answer' => 'Le niveau de R²', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Comment une augmentation de la taille d’échantillon influence-t-elle généralement la puissance ?',
                        'answers' => [
                            ['answer' => 'Elle augmente généralement la puissance, toutes choses égales par ailleurs', 'iscorrect' => true],
                            ['answer' => 'Elle la réduit toujours', 'iscorrect' => false],
                            ['answer' => 'Elle n’a jamais d’effet', 'iscorrect' => false],
                            ['answer' => 'Elle rend automatiquement tous les coefficients nuls', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi faut-il distinguer significativité statistique et importance économique ?',
                        'answers' => [
                            ['answer' => 'Un effet peut être précisément estimé tout en étant trop faible pour avoir une grande importance économique', 'iscorrect' => true],
                            ['answer' => 'Les deux notions sont toujours identiques', 'iscorrect' => false],
                            ['answer' => 'La significativité donne directement un montant monétaire', 'iscorrect' => false],
                            ['answer' => 'L’importance économique dépend uniquement de la p-value', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Multicolinéarité et spécification',
                'questions' => [
                    [
                        'question' => 'Qu’est-ce que la multicolinéarité parfaite ?',
                        'answers' => [
                            ['answer' => 'Une relation linéaire exacte entre certaines variables explicatives', 'iscorrect' => true],
                            ['answer' => 'Une relation parfaite entre y et ε', 'iscorrect' => false],
                            ['answer' => 'Une variance des erreurs égale à zéro', 'iscorrect' => false],
                            ['answer' => 'Une corrélation parfaite entre toutes les observations', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Que se passe-t-il généralement en présence de multicolinéarité parfaite ?',
                        'answers' => [
                            ['answer' => 'Les coefficients concernés ne peuvent pas être identifiés séparément par les MCO standard', 'iscorrect' => true],
                            ['answer' => 'Les coefficients deviennent tous nuls', 'iscorrect' => false],
                            ['answer' => 'R² devient automatiquement négatif', 'iscorrect' => false],
                            ['answer' => 'La causalité devient certaine', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle est une conséquence fréquente de la multicolinéarité forte mais imparfaite ?',
                        'answers' => [
                            ['answer' => 'Des erreurs standards élevées et des coefficients individuels imprécis', 'iscorrect' => true],
                            ['answer' => 'Une absence totale de variance', 'iscorrect' => false],
                            ['answer' => 'Un biais automatique de tous les coefficients', 'iscorrect' => false],
                            ['answer' => 'Une disparition de la variable dépendante', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la multicolinéarité ne crée-t-elle pas nécessairement un biais des coefficients MCO sous les hypothèses classiques ?',
                        'answers' => [
                            ['answer' => 'Elle augmente surtout l’incertitude des estimations, alors que le biais provient d’un problème distinct comme l’endogénéité', 'iscorrect' => true],
                            ['answer' => 'Parce qu’elle améliore toujours la précision', 'iscorrect' => false],
                            ['answer' => 'Parce qu’elle supprime les variables omises', 'iscorrect' => false],
                            ['answer' => 'Parce qu’elle garantit l’exogénéité', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce qu’une mauvaise spécification fonctionnelle ?',
                        'answers' => [
                            ['answer' => 'L’utilisation d’une forme mathématique inadaptée à la relation économique modélisée', 'iscorrect' => true],
                            ['answer' => 'Une grande taille d’échantillon', 'iscorrect' => false],
                            ['answer' => 'Une variance constante des erreurs', 'iscorrect' => false],
                            ['answer' => 'Une variable indicatrice correctement définie', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi ajouter un terme quadratique peut-il être utile ?',
                        'answers' => [
                            ['answer' => 'Pour permettre une relation courbe entre une variable explicative et la variable dépendante', 'iscorrect' => true],
                            ['answer' => 'Pour rendre toutes les relations causales', 'iscorrect' => false],
                            ['answer' => 'Pour supprimer toute erreur', 'iscorrect' => false],
                            ['answer' => 'Pour imposer une pente constante', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Dans y = β₀ + β₁x + β₂x² + ε, comment évolue la pente marginale de y par rapport à x ?',
                        'answers' => [
                            ['answer' => 'Elle dépend de x et vaut β₁ + 2β₂x', 'iscorrect' => true],
                            ['answer' => 'Elle vaut toujours β₁', 'iscorrect' => false],
                            ['answer' => 'Elle vaut toujours β₂', 'iscorrect' => false],
                            ['answer' => 'Elle est nécessairement constante', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les variables de contrôle doivent-elles être choisies avec prudence ?',
                        'answers' => [
                            ['answer' => 'Contrôler une mauvaise variable peut introduire ou masquer certaines relations pertinentes', 'iscorrect' => true],
                            ['answer' => 'Toute variable de contrôle améliore toujours l’identification', 'iscorrect' => false],
                            ['answer' => 'Ajouter une variable ne peut jamais changer les coefficients', 'iscorrect' => false],
                            ['answer' => 'Les contrôles n’ont aucun rôle statistique', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi le choix de la forme fonctionnelle est-il lié à la théorie économique ?',
                        'answers' => [
                            ['answer' => 'La théorie peut suggérer des relations linéaires, logarithmiques, quadratiques ou autres selon le mécanisme étudié', 'iscorrect' => true],
                            ['answer' => 'La théorie n’a aucun rapport avec la spécification', 'iscorrect' => false],
                            ['answer' => 'Toutes les relations économiques sont linéaires', 'iscorrect' => false],
                            ['answer' => 'La forme fonctionnelle est toujours arbitraire', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un modèle plus complexe n’est-il pas nécessairement meilleur ?',
                        'answers' => [
                            ['answer' => 'Il peut améliorer l’ajustement tout en augmentant la variance des estimations ou en compliquant leur interprétation', 'iscorrect' => true],
                            ['answer' => 'Les modèles complexes ont toujours un R² inférieur', 'iscorrect' => false],
                            ['answer' => 'La complexité garantit automatiquement la causalité', 'iscorrect' => false],
                            ['answer' => 'Un modèle complexe ne peut jamais prédire', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Hétéroscédasticité et erreurs standards robustes',
                'questions' => [
                    [
                        'question' => 'Qu’est-ce que l’hétéroscédasticité conditionnelle ?',
                        'answers' => [
                            ['answer' => 'Une variance de l’erreur qui dépend des variables explicatives ou de l’observation', 'iscorrect' => true],
                            ['answer' => 'Une moyenne conditionnelle toujours nulle', 'iscorrect' => false],
                            ['answer' => 'Une corrélation parfaite entre les régresseurs', 'iscorrect' => false],
                            ['answer' => 'Une absence de dispersion', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi l’hétéroscédasticité est-elle fréquente dans les données de revenus ?',
                        'answers' => [
                            ['answer' => 'La variabilité des revenus peut augmenter avec leur niveau ou différer fortement entre groupes', 'iscorrect' => true],
                            ['answer' => 'Les revenus sont toujours identiques', 'iscorrect' => false],
                            ['answer' => 'Les erreurs de revenu sont nécessairement constantes', 'iscorrect' => false],
                            ['answer' => 'La variance ne dépend jamais du niveau économique', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Sous les conditions appropriées, que peut préserver l’utilisation d’erreurs standards robustes ?',
                        'answers' => [
                            ['answer' => 'Une inférence plus fiable sur les coefficients malgré une variance non constante des erreurs', 'iscorrect' => true],
                            ['answer' => 'La causalité même en présence d’endogénéité', 'iscorrect' => false],
                            ['answer' => 'Une absence de biais dans toutes les situations', 'iscorrect' => false],
                            ['answer' => 'Un R² supérieur', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi l’hétéroscédasticité ne signifie-t-elle pas nécessairement que les coefficients MCO sont biaisés ?',
                        'answers' => [
                            ['answer' => 'Sous exogénéité, les coefficients MCO peuvent rester centrés alors que les erreurs standards classiques deviennent incorrectes', 'iscorrect' => true],
                            ['answer' => 'L’hétéroscédasticité n’a jamais aucun effet', 'iscorrect' => false],
                            ['answer' => 'Elle garantit automatiquement l’efficacité', 'iscorrect' => false],
                            ['answer' => 'Elle implique toujours une endogénéité', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel graphique peut aider à détecter visuellement une hétéroscédasticité ?',
                        'answers' => [
                            ['answer' => 'Un graphique des résidus en fonction des valeurs ajustées ou d’une variable explicative', 'iscorrect' => true],
                            ['answer' => 'Un simple diagramme circulaire des coefficients', 'iscorrect' => false],
                            ['answer' => 'Une courbe de l’inflation uniquement', 'iscorrect' => false],
                            ['answer' => 'Un histogramme du PIB uniquement', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Une forme en éventail dans un graphique des résidus peut suggérer :',
                        'answers' => [
                            ['answer' => 'Une variance des erreurs qui augmente ou diminue avec le niveau prédit', 'iscorrect' => true],
                            ['answer' => 'Une causalité parfaite', 'iscorrect' => false],
                            ['answer' => 'Une absence de relation économique', 'iscorrect' => false],
                            ['answer' => 'Une multicolinéarité parfaite uniquement', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les erreurs standards robustes sont-elles particulièrement utiles dans les données en coupe transversale ?',
                        'answers' => [
                            ['answer' => 'Parce que la variance des erreurs peut différer fortement entre individus ou entreprises', 'iscorrect' => true],
                            ['answer' => 'Parce qu’elles éliminent tous les biais de sélection', 'iscorrect' => false],
                            ['answer' => 'Parce que les données de coupe sont toujours homoscédastiques', 'iscorrect' => false],
                            ['answer' => 'Parce qu’elles rendent les coefficients causaux', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une transformation logarithmique peut-elle parfois réduire une forte hétéroscédasticité ?',
                        'answers' => [
                            ['answer' => 'Elle peut compresser l’échelle des grandes valeurs et modifier la relation entre niveau et dispersion', 'iscorrect' => true],
                            ['answer' => 'Elle supprime toujours toute variance', 'iscorrect' => false],
                            ['answer' => 'Elle garantit une homoscédasticité parfaite', 'iscorrect' => false],
                            ['answer' => 'Elle transforme toute variable en indicatrice', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi l’interprétation d’un modèle transformé en logarithmes demande-t-elle de l’attention ?',
                        'answers' => [
                            ['answer' => 'Les coefficients s’interprètent souvent en variations relatives ou semi-élasticités plutôt qu’en unités brutes', 'iscorrect' => true],
                            ['answer' => 'Les coefficients deviennent toujours des probabilités', 'iscorrect' => false],
                            ['answer' => 'Les variables perdent toute unité économique', 'iscorrect' => false],
                            ['answer' => 'Une transformation logarithmique rend automatiquement le modèle causal', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel principe résume le mieux le traitement de l’hétéroscédasticité ?',
                        'answers' => [
                            ['answer' => 'La détecter, en comprendre la source et adapter l’inférence ou la spécification si nécessaire', 'iscorrect' => true],
                            ['answer' => 'La supprimer automatiquement sans diagnostic', 'iscorrect' => false],
                            ['answer' => 'L’ignorer toujours si R² est élevé', 'iscorrect' => false],
                            ['answer' => 'La considérer comme une preuve de causalité', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Séries temporelles et autocorrélation',
                'questions' => [
                    [
                        'question' => 'Qu’est-ce que l’autocorrélation des erreurs ?',
                        'answers' => [
                            ['answer' => 'Une dépendance entre les erreurs à différentes périodes', 'iscorrect' => true],
                            ['answer' => 'Une relation entre deux variables indépendantes', 'iscorrect' => false],
                            ['answer' => 'Une variance nulle des erreurs', 'iscorrect' => false],
                            ['answer' => 'Une moyenne constante de y', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi l’autocorrélation peut-elle être fréquente dans les données macroéconomiques ?',
                        'answers' => [
                            ['answer' => 'Les variables macroéconomiques présentent souvent inertie, cycles et ajustements progressifs dans le temps', 'iscorrect' => true],
                            ['answer' => 'Les variables macroéconomiques sont toujours indépendantes entre périodes', 'iscorrect' => false],
                            ['answer' => 'Les chocs disparaissent instantanément', 'iscorrect' => false],
                            ['answer' => 'Le temps n’affecte jamais l’économie', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi l’autocorrélation des erreurs peut-elle rendre les erreurs standards classiques incorrectes ?',
                        'answers' => [
                            ['answer' => 'Elles supposent une structure de variance-covariance des erreurs qui peut être violée', 'iscorrect' => true],
                            ['answer' => 'Elle modifie toujours la variable dépendante', 'iscorrect' => false],
                            ['answer' => 'Elle rend nécessairement les coefficients nuls', 'iscorrect' => false],
                            ['answer' => 'Elle supprime la tendance', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce qu’un processus autorégressif AR(1) ?',
                        'answers' => [
                            ['answer' => 'Un modèle dans lequel la valeur actuelle dépend de sa propre valeur retardée et d’une innovation aléatoire', 'iscorrect' => true],
                            ['answer' => 'Un modèle sans aucune variable passée', 'iscorrect' => false],
                            ['answer' => 'Une moyenne simple de toutes les observations', 'iscorrect' => false],
                            ['answer' => 'Un modèle uniquement basé sur des variables qualitatives', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle condition simple est associée à la stationnarité d’un AR(1) ?',
                        'answers' => [
                            ['answer' => '|φ| < 1', 'iscorrect' => true],
                            ['answer' => '|φ| > 1', 'iscorrect' => false],
                            ['answer' => 'φ = 1', 'iscorrect' => false],
                            ['answer' => 'φ = 2', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une série non stationnaire peut-elle générer une régression fallacieuse ?',
                        'answers' => [
                            ['answer' => 'Une tendance commune peut produire une forte association statistique sans relation économique stable', 'iscorrect' => true],
                            ['answer' => 'Une série non stationnaire ne peut jamais être corrélée', 'iscorrect' => false],
                            ['answer' => 'La non-stationnarité garantit la causalité', 'iscorrect' => false],
                            ['answer' => 'Elle rend tous les résidus égaux à zéro', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi peut-on différencier une série temporelle ?',
                        'answers' => [
                            ['answer' => 'Pour éliminer certaines composantes de tendance et rapprocher la série de la stationnarité', 'iscorrect' => true],
                            ['answer' => 'Pour garantir que les valeurs deviennent positives', 'iscorrect' => false],
                            ['answer' => 'Pour augmenter automatiquement R²', 'iscorrect' => false],
                            ['answer' => 'Pour supprimer toutes les observations', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les effets retardés sont-ils importants en macroéconomie ?',
                        'answers' => [
                            ['answer' => 'Les politiques et les chocs peuvent affecter les variables économiques progressivement plutôt qu’instantanément', 'iscorrect' => true],
                            ['answer' => 'Les économies s’ajustent toujours instantanément', 'iscorrect' => false],
                            ['answer' => 'Les retards ne contiennent aucune information', 'iscorrect' => false],
                            ['answer' => 'Les variables retardées sont toujours indépendantes', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi faut-il tester les résidus d’un modèle de séries temporelles ?',
                        'answers' => [
                            ['answer' => 'Pour vérifier si des structures temporelles restent inexpliquées après estimation', 'iscorrect' => true],
                            ['answer' => 'Pour garantir que les prévisions sont exactes', 'iscorrect' => false],
                            ['answer' => 'Pour supprimer la saisonnalité automatiquement', 'iscorrect' => false],
                            ['answer' => 'Pour rendre toutes les séries stationnaires', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les prévisions hors échantillon sont-elles utiles ?',
                        'answers' => [
                            ['answer' => 'Elles évaluent la capacité du modèle à prévoir des observations non utilisées pour son estimation', 'iscorrect' => true],
                            ['answer' => 'Elles garantissent que le modèle est causal', 'iscorrect' => false],
                            ['answer' => 'Elles rendent R² égal à 1', 'iscorrect' => false],
                            ['answer' => 'Elles remplacent toutes les données historiques', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Variables qualitatives, interactions et interprétation',
                'questions' => [
                    [
                        'question' => 'Pourquoi utilise-t-on des variables indicatrices dans une régression ?',
                        'answers' => [
                            ['answer' => 'Pour représenter des différences entre catégories ou régimes', 'iscorrect' => true],
                            ['answer' => 'Pour transformer toutes les variables en continus', 'iscorrect' => false],
                            ['answer' => 'Pour éliminer les constantes', 'iscorrect' => false],
                            ['answer' => 'Pour supprimer les effets de temps', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Que signifie le coefficient d’une indicatrice « homme » dans un modèle de salaire avec « femme » comme référence, toutes choses égales par ailleurs ?',
                        'answers' => [
                            ['answer' => 'La différence de salaire prédite entre les deux catégories, conditionnellement aux contrôles du modèle', 'iscorrect' => true],
                            ['answer' => 'La part des hommes dans l’échantillon', 'iscorrect' => false],
                            ['answer' => 'Le salaire moyen national', 'iscorrect' => false],
                            ['answer' => 'La probabilité d’être employé', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce qu’une interaction x₁ × x₂ dans une régression ?',
                        'answers' => [
                            ['answer' => 'Un terme permettant à l’effet de x₁ de dépendre du niveau de x₂', 'iscorrect' => true],
                            ['answer' => 'Une variable toujours égale à zéro', 'iscorrect' => false],
                            ['answer' => 'Une manière de supprimer x₂', 'iscorrect' => false],
                            ['answer' => 'Une variable indépendante de x₁ et x₂', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Dans y = β₀ + β₁x + β₂d + β₃(xd) + ε, quel est l’effet marginal de x lorsque d = 1 ?',
                        'answers' => [
                            ['answer' => 'β₁ + β₃', 'iscorrect' => true],
                            ['answer' => 'β₁ uniquement', 'iscorrect' => false],
                            ['answer' => 'β₂ + β₃', 'iscorrect' => false],
                            ['answer' => 'β₀ + β₂', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une interaction peut-elle être utile dans une étude économique ?',
                        'answers' => [
                            ['answer' => 'L’impact d’une variable peut différer selon un groupe, une période ou un niveau d’une autre variable', 'iscorrect' => true],
                            ['answer' => 'Les effets économiques sont toujours identiques', 'iscorrect' => false],
                            ['answer' => 'Elle supprime automatiquement toute hétérogénéité', 'iscorrect' => false],
                            ['answer' => 'Elle remplace toujours les variables indicatrices', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi faut-il choisir soigneusement la catégorie de référence pour des indicatrices ?',
                        'answers' => [
                            ['answer' => 'Les coefficients des autres catégories sont interprétés relativement à cette catégorie de référence', 'iscorrect' => true],
                            ['answer' => 'La catégorie de référence est toujours la plus grande', 'iscorrect' => false],
                            ['answer' => 'Elle détermine automatiquement la causalité', 'iscorrect' => false],
                            ['answer' => 'Elle n’a aucun effet sur l’interprétation', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les variables saisonnières peuvent-elles être représentées par des indicatrices ?',
                        'answers' => [
                            ['answer' => 'Elles permettent de capter des différences systématiques entre mois, trimestres ou saisons', 'iscorrect' => true],
                            ['answer' => 'Elles éliminent toujours toute autocorrélation', 'iscorrect' => false],
                            ['answer' => 'Elles transforment les séries en données qualitatives uniquement', 'iscorrect' => false],
                            ['answer' => 'Elles rendent les coefficients identiques', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une variable qualitative avec plusieurs catégories nécessite-t-elle plusieurs indicatrices ?',
                        'answers' => [
                            ['answer' => 'Pour représenter plusieurs écarts de catégorie relativement à une catégorie de référence', 'iscorrect' => true],
                            ['answer' => 'Parce qu’une seule constante ne peut jamais exister', 'iscorrect' => false],
                            ['answer' => 'Pour augmenter automatiquement le R²', 'iscorrect' => false],
                            ['answer' => 'Pour rendre les erreurs indépendantes', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Que se passe-t-il si on inclut toutes les indicatrices de catégories avec une constante ?',
                        'answers' => [
                            ['answer' => 'On peut créer une colinéarité parfaite', 'iscorrect' => true],
                            ['answer' => 'On garantit l’identification parfaite', 'iscorrect' => false],
                            ['answer' => 'Les coefficients deviennent automatiquement nuls', 'iscorrect' => false],
                            ['answer' => 'R² disparaît', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les effets d’interaction doivent-ils être interprétés avec les effets principaux correspondants ?',
                        'answers' => [
                            ['answer' => 'L’effet marginal dépend de la valeur des variables impliquées dans l’interaction', 'iscorrect' => true],
                            ['answer' => 'Les termes principaux deviennent inutiles', 'iscorrect' => false],
                            ['answer' => 'Une interaction ne peut jamais modifier un effet marginal', 'iscorrect' => false],
                            ['answer' => 'Les coefficients d’interaction sont toujours autonomes', 'iscorrect' => false],
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

                // Mélange des réponses : la bonne réponse n'est pas toujours en première position.
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
