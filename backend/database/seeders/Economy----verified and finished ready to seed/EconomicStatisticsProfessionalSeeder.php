```php
<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Major;
use App\Models\Subject;
use App\Models\Quiz;
use App\Models\Question;
use App\Models\Answer;

class EconomicStatisticsProfessionalSeeder extends Seeder
{
    public function run(): void
    {
        $major = Major::where('slug', 'economy')->firstOrFail();

        $subject = Subject::where('major_id', $major->id)
            ->where('slug', 'economic-statistics')
            ->firstOrFail();

        $quizzes = [
            [
                'title' => 'Inférence statistique et estimation professionnelle',
                'questions' => [
                    [
                        'question' => 'Quelle propriété garantit qu’un estimateur converge vers le paramètre vrai lorsque la taille de l’échantillon augmente, sous les conditions appropriées ?',
                        'answers' => [
                            ['answer' => 'La consistance', 'iscorrect' => true],
                            ['answer' => 'La médiane', 'iscorrect' => false],
                            ['answer' => 'La symétrie', 'iscorrect' => false],
                            ['answer' => 'La saisonnalité', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est l’objectif principal d’un estimateur sans biais ?',
                        'answers' => [
                            ['answer' => 'Avoir une espérance égale au paramètre de population qu’il estime', 'iscorrect' => true],
                            ['answer' => 'Être égal au paramètre dans chaque échantillon', 'iscorrect' => false],
                            ['answer' => 'Avoir nécessairement une variance nulle', 'iscorrect' => false],
                            ['answer' => 'Être indépendant de la taille de l’échantillon', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un estimateur biaisé peut-il néanmoins être utilisé en pratique ?',
                        'answers' => [
                            ['answer' => 'Un faible biais peut être compensé par une variance beaucoup plus faible selon le critère de décision retenu', 'iscorrect' => true],
                            ['answer' => 'Le biais est toujours sans importance', 'iscorrect' => false],
                            ['answer' => 'Tout estimateur biaisé est nécessairement optimal', 'iscorrect' => false],
                            ['answer' => 'La variance n’a aucun rôle dans le choix d’un estimateur', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Que mesure l’erreur standard d’un estimateur ?',
                        'answers' => [
                            ['answer' => 'La variabilité de l’estimateur entre des échantillons répétés', 'iscorrect' => true],
                            ['answer' => 'Le biais systématique uniquement', 'iscorrect' => false],
                            ['answer' => 'La moyenne de la population', 'iscorrect' => false],
                            ['answer' => 'Le niveau de signification du test', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi l’augmentation de la taille de l’échantillon améliore-t-elle généralement la précision ?',
                        'answers' => [
                            ['answer' => 'Elle réduit souvent la variance d’échantillonnage de nombreux estimateurs', 'iscorrect' => true],
                            ['answer' => 'Elle élimine toujours les biais de sélection', 'iscorrect' => false],
                            ['answer' => 'Elle rend nécessairement les données normales', 'iscorrect' => false],
                            ['answer' => 'Elle garantit une causalité parfaite', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le principal rôle d’un intervalle de confiance ?',
                        'answers' => [
                            ['answer' => 'Quantifier l’incertitude autour d’une estimation selon une procédure statistique donnée', 'iscorrect' => true],
                            ['answer' => 'Garantir que le paramètre se trouve dans l’intervalle pour cet échantillon précis', 'iscorrect' => false],
                            ['answer' => 'Mesurer directement l’effet causal', 'iscorrect' => false],
                            ['answer' => 'Donner la moyenne exacte de la population', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Toutes choses égales par ailleurs, que se passe-t-il lorsqu’on augmente le niveau de confiance d’un intervalle ?',
                        'answers' => [
                            ['answer' => 'L’intervalle devient plus large', 'iscorrect' => true],
                            ['answer' => 'L’intervalle devient toujours plus étroit', 'iscorrect' => false],
                            ['answer' => 'La variance de la population devient nulle', 'iscorrect' => false],
                            ['answer' => 'L’estimation ponctuelle change nécessairement', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi faut-il distinguer biais et variance dans l’évaluation d’un estimateur ?',
                        'answers' => [
                            ['answer' => 'Ils représentent deux sources différentes d’erreur dans la qualité de l’estimation', 'iscorrect' => true],
                            ['answer' => 'Ils mesurent exactement la même chose', 'iscorrect' => false],
                            ['answer' => 'La variance n’existe que pour les variables qualitatives', 'iscorrect' => false],
                            ['answer' => 'Le biais disparaît toujours avec un seul échantillon', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un échantillon représentatif est-il crucial pour l’inférence économique ?',
                        'answers' => [
                            ['answer' => 'Il permet de mieux justifier la généralisation des résultats vers la population cible', 'iscorrect' => true],
                            ['answer' => 'Il garantit automatiquement l’absence de biais', 'iscorrect' => false],
                            ['answer' => 'Il rend toutes les observations indépendantes', 'iscorrect' => false],
                            ['answer' => 'Il élimine toutes les erreurs de mesure', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un échantillon très volumineux peut-il encore produire une estimation trompeuse ?',
                        'answers' => [
                            ['answer' => 'Une sélection systématiquement biaisée peut persister même lorsque le nombre d’observations est élevé', 'iscorrect' => true],
                            ['answer' => 'Un grand échantillon est toujours parfaitement représentatif', 'iscorrect' => false],
                            ['answer' => 'La taille de l’échantillon ne joue aucun rôle', 'iscorrect' => false],
                            ['answer' => 'Une grande taille supprime toujours les erreurs de mesure', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Tests d’hypothèses et décisions statistiques',
                'questions' => [
                    [
                        'question' => 'Que représente l’hypothèse nulle dans un test statistique classique ?',
                        'answers' => [
                            ['answer' => 'L’hypothèse de référence utilisée pour déterminer la compatibilité des données avec une affirmation donnée', 'iscorrect' => true],
                            ['answer' => 'L’effet causal véritable', 'iscorrect' => false],
                            ['answer' => 'La moyenne observée uniquement', 'iscorrect' => false],
                            ['answer' => 'Le niveau de confiance', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Si une p-value est de 0,01 avec un seuil de 5 %, quelle décision standard est appropriée ?',
                        'answers' => [
                            ['answer' => 'Rejeter l’hypothèse nulle', 'iscorrect' => true],
                            ['answer' => 'Ne pas rejeter l’hypothèse nulle', 'iscorrect' => false],
                            ['answer' => 'Prouver que l’hypothèse alternative est certaine', 'iscorrect' => false],
                            ['answer' => 'Conclure que l’échantillon est biaisé', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Que signifie une p-value de 0,40 sous les conditions du test ?',
                        'answers' => [
                            ['answer' => 'Les données ne fournissent pas un argument statistique fort contre l’hypothèse nulle au seuil courant', 'iscorrect' => true],
                            ['answer' => 'L’hypothèse nulle a une probabilité de 40 % d’être vraie', 'iscorrect' => false],
                            ['answer' => 'L’effet est forcément nul', 'iscorrect' => false],
                            ['answer' => 'L’échantillon est forcément trop petit', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle est la puissance d’un test ?',
                        'answers' => [
                            ['answer' => 'La probabilité de rejeter correctement H0 lorsqu’elle est fausse', 'iscorrect' => true],
                            ['answer' => 'La probabilité de rejeter H0 lorsqu’elle est vraie', 'iscorrect' => false],
                            ['answer' => 'La probabilité que H0 soit vraie', 'iscorrect' => false],
                            ['answer' => 'La variance du test', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une augmentation de la taille de l’échantillon peut-elle augmenter la puissance ?',
                        'answers' => [
                            ['answer' => 'Elle réduit généralement l’incertitude de l’estimation et facilite la détection d’effets réels', 'iscorrect' => true],
                            ['answer' => 'Elle augmente systématiquement le biais', 'iscorrect' => false],
                            ['answer' => 'Elle rend toujours les effets plus grands', 'iscorrect' => false],
                            ['answer' => 'Elle supprime la variance de population', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce qu’une erreur de type I ?',
                        'answers' => [
                            ['answer' => 'Rejeter H0 alors qu’elle est vraie', 'iscorrect' => true],
                            ['answer' => 'Ne pas rejeter H0 alors qu’elle est vraie', 'iscorrect' => false],
                            ['answer' => 'Ne pas rejeter H0 alors qu’elle est fausse', 'iscorrect' => false],
                            ['answer' => 'Confondre moyenne et médiane', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce qu’une erreur de type II ?',
                        'answers' => [
                            ['answer' => 'Ne pas rejeter H0 alors qu’elle est fausse', 'iscorrect' => true],
                            ['answer' => 'Rejeter H0 alors qu’elle est vraie', 'iscorrect' => false],
                            ['answer' => 'Rejeter H1 alors qu’elle est vraie', 'iscorrect' => false],
                            ['answer' => 'Utiliser un échantillon aléatoire', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une significativité statistique ne garantit-elle pas une importance économique ?',
                        'answers' => [
                            ['answer' => 'Un effet très faible peut être détecté avec une grande précision et un grand échantillon', 'iscorrect' => true],
                            ['answer' => 'Les effets significatifs sont toujours importants', 'iscorrect' => false],
                            ['answer' => 'La p-value mesure directement le gain économique', 'iscorrect' => false],
                            ['answer' => 'La taille de l’effet est indépendante de l’échantillon', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi le nombre de tests réalisés simultanément peut-il poser problème ?',
                        'answers' => [
                            ['answer' => 'Il augmente le risque global d’obtenir au moins un résultat significatif par hasard', 'iscorrect' => true],
                            ['answer' => 'Il réduit toujours le risque de type I', 'iscorrect' => false],
                            ['answer' => 'Il garantit l’indépendance des résultats', 'iscorrect' => false],
                            ['answer' => 'Il rend les p-values automatiquement plus faibles', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi « ne pas rejeter H0 » n’est-il pas synonyme de « prouver H0 » ?',
                        'answers' => [
                            ['answer' => 'L’absence d’évidence suffisante contre H0 ne constitue pas une preuve logique de sa vérité', 'iscorrect' => true],
                            ['answer' => 'H0 est toujours vraie', 'iscorrect' => false],
                            ['answer' => 'H1 est toujours fausse', 'iscorrect' => false],
                            ['answer' => 'Un test ne fournit jamais d’information', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Régression multiple et économétrie appliquée',
                'questions' => [
                    [
                        'question' => 'Dans y = β0 + β1x1 + β2x2 + ε, comment interprète-t-on β1 ?',
                        'answers' => [
                            ['answer' => 'La variation conditionnelle de y associée à une unité supplémentaire de x1, à x2 constant', 'iscorrect' => true],
                            ['answer' => 'La corrélation simple entre x1 et y', 'iscorrect' => false],
                            ['answer' => 'La moyenne de x1', 'iscorrect' => false],
                            ['answer' => 'La variance de y', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi ajoute-t-on plusieurs variables explicatives dans une régression économique ?',
                        'answers' => [
                            ['answer' => 'Pour contrôler certains facteurs observables susceptibles d’être liés à la variable étudiée', 'iscorrect' => true],
                            ['answer' => 'Pour garantir automatiquement la causalité', 'iscorrect' => false],
                            ['answer' => 'Pour supprimer toute erreur de mesure', 'iscorrect' => false],
                            ['answer' => 'Pour rendre les données indépendantes', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce que la multicolinéarité ?',
                        'answers' => [
                            ['answer' => 'Une forte dépendance linéaire entre plusieurs variables explicatives', 'iscorrect' => true],
                            ['answer' => 'Une relation parfaite entre y et chaque résidu', 'iscorrect' => false],
                            ['answer' => 'Une absence totale de variance', 'iscorrect' => false],
                            ['answer' => 'Une erreur dans la variable dépendante uniquement', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est un effet fréquent de la multicolinéarité élevée ?',
                        'answers' => [
                            ['answer' => 'Des erreurs standards élevées et une difficulté à distinguer les effets individuels des variables corrélées', 'iscorrect' => true],
                            ['answer' => 'Une disparition automatique du biais', 'iscorrect' => false],
                            ['answer' => 'Une hausse certaine de R² à zéro', 'iscorrect' => false],
                            ['answer' => 'Une causalité garantie', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce que l’hétéroscédasticité ?',
                        'answers' => [
                            ['answer' => 'Une variance non constante du terme d’erreur conditionnellement aux variables explicatives', 'iscorrect' => true],
                            ['answer' => 'Une moyenne de y égale à zéro', 'iscorrect' => false],
                            ['answer' => 'Une corrélation parfaite entre les régresseurs', 'iscorrect' => false],
                            ['answer' => 'Une distribution nécessairement normale', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi utiliser des erreurs standards robustes à l’hétéroscédasticité ?',
                        'answers' => [
                            ['answer' => 'Pour obtenir une inférence plus fiable lorsque la variance des erreurs n’est pas constante', 'iscorrect' => true],
                            ['answer' => 'Pour éliminer la multicolinéarité', 'iscorrect' => false],
                            ['answer' => 'Pour transformer une régression en modèle causal', 'iscorrect' => false],
                            ['answer' => 'Pour augmenter artificiellement R²', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi l’endogénéité compromet-elle l’interprétation causale d’un coefficient ?',
                        'answers' => [
                            ['answer' => 'La variable explicative peut être corrélée avec le terme d’erreur', 'iscorrect' => true],
                            ['answer' => 'Le coefficient devient automatiquement égal à zéro', 'iscorrect' => false],
                            ['answer' => 'La variable dépendante cesse d’exister', 'iscorrect' => false],
                            ['answer' => 'R² devient toujours négatif', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce qu’une variable instrumentale valide doit généralement satisfaire ?',
                        'answers' => [
                            ['answer' => 'Elle doit être liée à la variable endogène et satisfaire une condition d’exclusion vis-à-vis du résultat au-delà de ce canal', 'iscorrect' => true],
                            ['answer' => 'Elle doit être indépendante de la variable endogène', 'iscorrect' => false],
                            ['answer' => 'Elle doit expliquer directement toute la variable dépendante', 'iscorrect' => false],
                            ['answer' => 'Elle doit être parfaitement corrélée avec l’erreur', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les variables omises peuvent-elles provoquer un biais des coefficients ?',
                        'answers' => [
                            ['answer' => 'Lorsqu’une variable omise affecte y et est corrélée avec une variable explicative incluse', 'iscorrect' => true],
                            ['answer' => 'Une variable omise n’a jamais d’influence', 'iscorrect' => false],
                            ['answer' => 'Le biais disparaît automatiquement avec une petite taille d’échantillon', 'iscorrect' => false],
                            ['answer' => 'Une variable omise affecte uniquement R²', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi l’interprétation d’un coefficient dépend-elle du choix des variables de contrôle ?',
                        'answers' => [
                            ['answer' => 'Le coefficient mesure une association conditionnelle qui peut changer lorsque l’ensemble des variables contrôlées change', 'iscorrect' => true],
                            ['answer' => 'Les contrôles ne modifient jamais les coefficients', 'iscorrect' => false],
                            ['answer' => 'Les variables de contrôle sont toujours sans rapport avec le modèle', 'iscorrect' => false],
                            ['answer' => 'Un coefficient garde toujours exactement la même signification', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Séries temporelles avancées et prévision',
                'questions' => [
                    [
                        'question' => 'Pourquoi une série non stationnaire peut-elle produire une régression fallacieuse ?',
                        'answers' => [
                            ['answer' => 'Des tendances communes peuvent générer des coefficients et un R² élevés sans relation économique stable', 'iscorrect' => true],
                            ['answer' => 'Une série non stationnaire a toujours une variance nulle', 'iscorrect' => false],
                            ['answer' => 'La stationnarité garantit automatiquement la causalité', 'iscorrect' => false],
                            ['answer' => 'Les séries non stationnaires sont toujours indépendantes', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Dans un AR(1) x_t = c + φx_(t-1) + ε_t, quelle condition simple assure la stationnarité ?',
                        'answers' => [
                            ['answer' => '|φ| < 1', 'iscorrect' => true],
                            ['answer' => '|φ| > 1', 'iscorrect' => false],
                            ['answer' => 'φ = 1', 'iscorrect' => false],
                            ['answer' => 'φ = 2', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une valeur de φ proche de 1 indique-t-elle une forte persistance ?',
                        'answers' => [
                            ['answer' => 'Les chocs passés ont tendance à influencer la variable pendant longtemps', 'iscorrect' => true],
                            ['answer' => 'Les chocs disparaissent immédiatement', 'iscorrect' => false],
                            ['answer' => 'La variable devient indépendante de son passé', 'iscorrect' => false],
                            ['answer' => 'La série devient toujours parfaitement cyclique', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce qu’une moyenne mobile dans le contexte des séries temporelles ?',
                        'answers' => [
                            ['answer' => 'Une moyenne calculée sur une fenêtre glissante d’observations consécutives', 'iscorrect' => true],
                            ['answer' => 'Une moyenne uniquement calculée en début de période', 'iscorrect' => false],
                            ['answer' => 'Une moyenne pondérée par les probabilités futures', 'iscorrect' => false],
                            ['answer' => 'Une moyenne indépendante du temps', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les modèles ARIMA utilisent-ils parfois des différences ?',
                        'answers' => [
                            ['answer' => 'Pour transformer certaines séries non stationnaires en processus plus proches de la stationnarité', 'iscorrect' => true],
                            ['answer' => 'Pour supprimer nécessairement toute autocorrélation', 'iscorrect' => false],
                            ['answer' => 'Pour rendre toutes les distributions normales', 'iscorrect' => false],
                            ['answer' => 'Pour éliminer toute saisonnalité sans autre traitement', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce que l’autocorrélation des résidus ?',
                        'answers' => [
                            ['answer' => 'Une dépendance entre les erreurs à différentes périodes', 'iscorrect' => true],
                            ['answer' => 'Une corrélation entre les coefficients du modèle', 'iscorrect' => false],
                            ['answer' => 'Une variance nulle des résidus', 'iscorrect' => false],
                            ['answer' => 'Une moyenne des variables explicatives', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi l’autocorrélation peut-elle rendre l’inférence classique peu fiable ?',
                        'answers' => [
                            ['answer' => 'Les erreurs standards usuelles peuvent être incorrectes si la dépendance temporelle n’est pas prise en compte', 'iscorrect' => true],
                            ['answer' => 'Elle force toujours les coefficients à être nuls', 'iscorrect' => false],
                            ['answer' => 'Elle rend la moyenne impossible à calculer', 'iscorrect' => false],
                            ['answer' => 'Elle élimine toutes les informations temporelles', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi évaluer les prévisions hors échantillon est-il important ?',
                        'answers' => [
                            ['answer' => 'Une bonne capacité d’ajustement aux données utilisées pour estimer le modèle ne garantit pas une bonne performance sur de nouvelles observations', 'iscorrect' => true],
                            ['answer' => 'Les prévisions hors échantillon sont toujours moins utiles', 'iscorrect' => false],
                            ['answer' => 'Le R² suffit toujours à mesurer la performance future', 'iscorrect' => false],
                            ['answer' => 'Les données futures sont identiques aux données passées', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi compare-t-on plusieurs modèles de prévision ?',
                        'answers' => [
                            ['answer' => 'Des structures différentes peuvent produire des performances différentes selon la série et l’horizon', 'iscorrect' => true],
                            ['answer' => 'Tous les modèles donnent toujours les mêmes résultats', 'iscorrect' => false],
                            ['answer' => 'Un seul modèle convient à toutes les séries économiques', 'iscorrect' => false],
                            ['answer' => 'Les prévisions ne dépendent jamais de la structure du modèle', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une rupture structurelle peut-elle détériorer les prévisions d’un modèle estimé sur le passé ?',
                        'answers' => [
                            ['answer' => 'Les relations statistiques antérieures peuvent ne plus représenter le nouveau régime économique', 'iscorrect' => true],
                            ['answer' => 'Une rupture structurelle améliore toujours les prévisions', 'iscorrect' => false],
                            ['answer' => 'Les paramètres restent nécessairement constants', 'iscorrect' => false],
                            ['answer' => 'Les chocs n’ont jamais d’effet sur les relations économiques', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Modèles économétriques et identification',
                'questions' => [
                    [
                        'question' => 'Pourquoi la corrélation ne suffit-elle pas à identifier un effet causal ?',
                        'answers' => [
                            ['answer' => 'L’association peut provenir de facteurs confondants, de causalité inverse ou de mécanismes communs', 'iscorrect' => true],
                            ['answer' => 'La corrélation mesure directement la causalité', 'iscorrect' => false],
                            ['answer' => 'Toutes les variables économiques sont indépendantes', 'iscorrect' => false],
                            ['answer' => 'Une corrélation n’a jamais de valeur descriptive', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce qu’une expérience naturelle en économie ?',
                        'answers' => [
                            ['answer' => 'Une variation institutionnelle ou externe qui crée une situation ressemblant partiellement à une expérience contrôlée', 'iscorrect' => true],
                            ['answer' => 'Une enquête sans aucune donnée', 'iscorrect' => false],
                            ['answer' => 'Une expérience menée uniquement en laboratoire', 'iscorrect' => false],
                            ['answer' => 'Une prévision macroéconomique', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les variables instrumentales peuvent-elles aider en présence d’endogénéité ?',
                        'answers' => [
                            ['answer' => 'Elles exploitent une variation de la variable explicative qui est supposée exogène au terme d’erreur', 'iscorrect' => true],
                            ['answer' => 'Elles suppriment automatiquement toute erreur de mesure', 'iscorrect' => false],
                            ['answer' => 'Elles rendent toutes les variables indépendantes', 'iscorrect' => false],
                            ['answer' => 'Elles garantissent une forte corrélation avec l’erreur', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la pertinence d’un instrument doit-elle être vérifiée ?',
                        'answers' => [
                            ['answer' => 'Un instrument peu lié à la variable endogène fournit peu d’information exploitable', 'iscorrect' => true],
                            ['answer' => 'La pertinence n’a aucune importance', 'iscorrect' => false],
                            ['answer' => 'Un instrument doit être indépendant de la variable endogène', 'iscorrect' => false],
                            ['answer' => 'Une faible corrélation garantit une estimation précise', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi l’hypothèse d’exclusion d’un instrument est-elle cruciale ?',
                        'answers' => [
                            ['answer' => 'L’instrument ne doit pas affecter directement le résultat autrement que par la variable endogène ciblée', 'iscorrect' => true],
                            ['answer' => 'L’instrument doit être corrélé avec l’erreur', 'iscorrect' => false],
                            ['answer' => 'L’instrument doit déterminer directement le résultat', 'iscorrect' => false],
                            ['answer' => 'L’exclusion signifie que l’instrument est inutilisable', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le problème d’une variable de contrôle qui est elle-même un intermédiaire causal ?',
                        'answers' => [
                            ['answer' => 'La contrôler peut supprimer une partie de l’effet causal que l’on souhaite mesurer', 'iscorrect' => true],
                            ['answer' => 'Elle augmente toujours l’effet total', 'iscorrect' => false],
                            ['answer' => 'Elle rend automatiquement l’estimation sans biais', 'iscorrect' => false],
                            ['answer' => 'Elle ne change jamais le coefficient de la variable d’intérêt', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la causalité inverse est-elle problématique dans une régression ?',
                        'answers' => [
                            ['answer' => Le résultat peut lui-même influencer la variable explicative, créant une association bidirectionnelle', 'iscorrect' => true],
                            ['answer' => Elle implique toujours une corrélation nulle', 'iscorrect' => false],
                            ['answer' => Elle n’existe jamais en économie', 'iscorrect' => false],
                            ['answer' => Elle augmente automatiquement la précision', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les effets fixes sont-ils utilisés dans certaines données de panel ?',
                        'answers' => [
                            ['answer' => 'Ils permettent notamment de contrôler certaines caractéristiques inobservées et constantes dans le temps propres aux unités', 'iscorrect' => true],
                            ['answer' => 'Ils éliminent toute variation temporelle', 'iscorrect' => false],
                            ['answer' => 'Ils remplacent les variables dépendantes', 'iscorrect' => false],
                            ['answer' => 'Ils garantissent automatiquement la causalité', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les données de panel sont-elles particulièrement utiles en économie ?',
                        'answers' => [
                            ['answer' => 'Elles combinent des variations entre unités et dans le temps, offrant davantage d’information pour certaines analyses', 'iscorrect' => true],
                            ['answer' => 'Elles ne contiennent aucune dimension temporelle', 'iscorrect' => false],
                            ['answer' => 'Elles éliminent automatiquement tous les biais', 'iscorrect' => false],
                            ['answer' => 'Elles empêchent toute hétérogénéité entre unités', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une stratégie d’identification crédible doit-elle être explicitement argumentée ?',
                        'answers' => [
                            ['answer' => 'Elle doit justifier pourquoi la variation utilisée pour estimer l’effet peut être interprétée comme exogène à l’issue étudiée', 'iscorrect' => true],
                            ['answer' => 'La causalité est automatiquement implicite dans toute régression', 'iscorrect' => false],
                            ['answer' => 'R² suffit pour établir une identification', 'iscorrect' => false],
                            ['answer' => 'Les hypothèses causales n’ont pas besoin d’être discutées', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Statistiques professionnelles, robustesse et qualité empirique',
                'questions' => [
                    [
                        'question' => 'Pourquoi une analyse de robustesse est-elle importante dans une étude économique ?',
                        'answers' => [
                            ['answer' => 'Elle vérifie si les conclusions restent similaires lorsque certaines spécifications ou hypothèses raisonnables changent', 'iscorrect' => true],
                            ['answer' => 'Elle garantit que les résultats sont causalement vrais', 'iscorrect' => false],
                            ['answer' => 'Elle supprime les observations extrêmes automatiquement', 'iscorrect' => false],
                            ['answer' => 'Elle remplace toute analyse principale', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les erreurs de mesure de la variable explicative peuvent-elles poser un problème sérieux ?',
                        'answers' => [
                            ['answer' => 'Elles peuvent atténuer certains coefficients estimés et introduire un biais selon la structure de l’erreur', 'iscorrect' => true],
                            ['answer' => 'Elles augmentent toujours les coefficients', 'iscorrect' => false],
                            ['answer' => 'Elles n’affectent jamais l’inférence', 'iscorrect' => false],
                            ['answer' => 'Elles garantissent une meilleure précision', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les pondérations d’enquête sont-elles parfois nécessaires ?',
                        'answers' => [
                            ['answer' => 'Pour corriger certaines différences de probabilités de sélection ou améliorer la représentativité de la population cible', 'iscorrect' => true],
                            ['answer' => 'Pour augmenter artificiellement la taille de l’échantillon', 'iscorrect' => false],
                            ['answer' => 'Pour supprimer toute variance', 'iscorrect' => false],
                            ['answer' => 'Pour rendre les observations identiques', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les données manquantes doivent-elles être diagnostiquées avant l’imputation ?',
                        'answers' => [
                            ['answer' => 'Le mécanisme de non-réponse influence la méthode appropriée et le risque de biais', 'iscorrect' => true],
                            ['answer' => 'Toutes les données manquantes sont aléatoires', 'iscorrect' => false],
                            ['answer' => 'L’imputation est toujours sans hypothèse', 'iscorrect' => false],
                            ['answer' => 'Les valeurs manquantes n’affectent jamais les estimations', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une analyse empirique doit-elle distinguer prédiction et causalité ?',
                        'answers' => [
                            ['answer' => 'Un modèle peut prédire correctement sans identifier ce qui se produirait après une intervention causale', 'iscorrect' => true],
                            ['answer' => 'Toute bonne prédiction établit automatiquement une causalité', 'iscorrect' => false],
                            ['answer' => 'La causalité est toujours plus facile que la prédiction', 'iscorrect' => false],
                            ['answer' => 'Les deux objectifs sont strictement identiques', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les valeurs extrêmes doivent-elles être testées plutôt que supprimées mécaniquement ?',
                        'answers' => [
                            ['answer' => 'Elles peuvent contenir une information économique importante ou signaler une erreur de données', 'iscorrect' => true],
                            ['answer' => 'Toutes les valeurs extrêmes sont fausses', 'iscorrect' => false],
                            ['answer' => 'Les observations extrêmes ne sont jamais informatives', 'iscorrect' => false],
                            ['answer' => 'La moyenne doit toujours remplacer toute valeur extrême', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la reproductibilité est-elle une exigence importante pour une analyse statistique professionnelle ?',
                        'answers' => [
                            ['answer' => 'Elle permet de vérifier les données, transformations, méthodes et résultats par un tiers', 'iscorrect' => true],
                            ['answer' => 'Elle garantit l’absence de biais', 'iscorrect' => false],
                            ['answer' => 'Elle remplace la documentation', 'iscorrect' => false],
                            ['answer' => 'Elle garantit des prévisions exactes', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi faut-il documenter les transformations appliquées aux données ?',
                        'answers' => [
                            ['answer' => 'Elles peuvent modifier l’échelle, la distribution et l’interprétation des variables', 'iscorrect' => true],
                            ['answer' => 'Les transformations sont toujours sans conséquence', 'iscorrect' => false],
                            ['answer' => 'La documentation n’est utile que pour les graphiques', 'iscorrect' => false],
                            ['answer' => 'Les logiciels conservent toujours automatiquement l’intention analytique', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les intervalles de confiance sont-ils souvent plus informatifs que les seules p-values ?',
                        'answers' => [
                            ['answer' => 'Ils indiquent à la fois une estimation centrale et une plage d’incertitude pour les valeurs compatibles avec le modèle', 'iscorrect' => true],
                            ['answer' => 'Ils donnent toujours la probabilité que H0 soit vraie', 'iscorrect' => false],
                            ['answer' => 'Ils remplacent toute estimation ponctuelle', 'iscorrect' => false],
                            ['answer' => 'Ils mesurent directement l’importance économique', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une bonne analyse statistique économique doit-elle combiner résultats numériques et contexte économique ?',
                        'answers' => [
                            ['answer' => 'Les statistiques décrivent les données, mais leur signification dépend des mécanismes économiques, des hypothèses et du contexte institutionnel', 'iscorrect' => true],
                            ['answer' => 'Les chiffres suffisent toujours sans interprétation', 'iscorrect' => false],
                            ['answer' => 'Le contexte économique peut être ignoré', 'iscorrect' => false],
                            ['answer' => 'Une estimation statistique est automatiquement une explication économique complète', 'iscorrect' => false],
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

                // Randomisation des réponses : la bonne réponse n'est pas systématiquement en première position.
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
