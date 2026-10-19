```php
<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Major;
use App\Models\Subject;
use App\Models\Quiz;
use App\Models\Question;
use App\Models\Answer;

class PortfolioManagementAdvancedSeeder extends Seeder
{
    public function run(): void
    {
        $major = Major::where('slug', 'finance')->firstOrFail();

        $subject = Subject::where('major_id', $major->id)
            ->where('slug', 'portfolio-management')
            ->firstOrFail();

        $quizzes = [
            [
                'title' => 'Théorie moderne du portefeuille',
                'questions' => [
                    [
                        'question' => 'Selon la théorie moderne du portefeuille de Markowitz, quel est le principal avantage de la diversification ?',
                        'answers' => [
                            ['answer' => 'Réduire le risque du portefeuille pour un niveau de rendement attendu donné', 'iscorrect' => true],
                            ['answer' => 'Éliminer totalement le risque de marché', 'iscorrect' => false],
                            ['answer' => 'Garantir le rendement de chaque actif', 'iscorrect' => false],
                            ['answer' => 'Maximiser systématiquement le nombre de titres détenus', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Dans le modèle moyenne-variance, quelles sont les deux dimensions fondamentales utilisées pour évaluer un portefeuille ?',
                        'answers' => [
                            ['answer' => 'Le rendement attendu et la variance du rendement', 'iscorrect' => true],
                            ['answer' => 'Le chiffre d’affaires et le bénéfice net', 'iscorrect' => false],
                            ['answer' => 'La liquidité et le nombre de transactions', 'iscorrect' => false],
                            ['answer' => 'La capitalisation et le dividende uniquement', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Que représente la frontière efficiente ?',
                        'answers' => [
                            ['answer' => L'ensemble des portefeuilles offrant le rendement maximal pour chaque niveau de risque considéré', 'iscorrect' => true],
                            ['answer' => 'Tous les portefeuilles ayant exactement le même risque', 'iscorrect' => false],
                            ['answer' => 'Les actifs ayant le rendement historique maximal', 'iscorrect' => false],
                            ['answer' => 'Les portefeuilles composés uniquement d’obligations', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Deux actifs ont une corrélation inférieure à 1. Quel effet cela peut-il avoir sur le portefeuille ?',
                        'answers' => [
                            ['answer' => 'La volatilité du portefeuille peut être inférieure à la moyenne pondérée des volatilités individuelles', 'iscorrect' => true],
                            ['answer' => 'Le rendement attendu devient nécessairement nul', 'iscorrect' => false],
                            ['answer' => 'Le portefeuille devient automatiquement sans risque', 'iscorrect' => false],
                            ['answer' => 'Les deux actifs auront obligatoirement le même rendement', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Que se passe-t-il lorsque la corrélation entre deux actifs est proche de -1 ?',
                        'answers' => [
                            ['answer' => Le potentiel de réduction du risque par combinaison devient très important', 'iscorrect' => true],
                            ['answer' => 'La diversification devient impossible', 'iscorrect' => false],
                            ['answer' => 'Les deux actifs ont nécessairement le même rendement', 'iscorrect' => false],
                            ['answer' => 'Le risque individuel des deux actifs disparaît', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le rôle de la covariance dans le calcul de la variance d’un portefeuille ?',
                        'answers' => [
                            ['answer' => 'Elle mesure la manière dont les rendements des actifs évoluent conjointement', 'iscorrect' => true],
                            ['answer' => 'Elle représente directement le rendement moyen', 'iscorrect' => false],
                            ['answer' => 'Elle mesure uniquement la liquidité', 'iscorrect' => false],
                            ['answer' => 'Elle détermine le taux sans risque', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un portefeuille de plusieurs actifs peut-il avoir une volatilité inférieure à celle de chacun des actifs pris isolément ?',
                        'answers' => [
                            ['answer' => 'Parce que les covariances entre actifs peuvent réduire la variance totale', 'iscorrect' => true],
                            ['answer' => 'Parce que la volatilité disparaît avec plus de cinq actifs', 'iscorrect' => false],
                            ['answer' => 'Parce que le rendement devient garanti', 'iscorrect' => false],
                            ['answer' => 'Parce que les actifs les plus risqués deviennent automatiquement moins risqués', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Un portefeuille efficient peut-il être dominé par un autre portefeuille ayant plus de rendement et moins de risque ?',
                        'answers' => [
                            ['answer' => 'Non, car il ne serait alors pas efficient', 'iscorrect' => true],
                            ['answer' => 'Oui, systématiquement', 'iscorrect' => false],
                            ['answer' => 'Oui, si le portefeuille contient des obligations', 'iscorrect' => false],
                            ['answer' => 'Uniquement lorsque les marchés sont haussiers', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le principal problème de l’utilisation de rendements historiques dans une optimisation moyenne-variance ?',
                        'answers' => [
                            ['answer' => 'Les estimations historiques des rendements, volatilités et corrélations sont incertaines et peuvent être instables', 'iscorrect' => true],
                            ['answer' => 'Les données historiques ne peuvent jamais être calculées', 'iscorrect' => false],
                            ['answer' => 'Les rendements historiques sont toujours égaux aux rendements futurs', 'iscorrect' => false],
                            ['answer' => 'La variance historique est toujours nulle', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les contraintes d’allocation sont-elles souvent ajoutées à une optimisation de portefeuille ?',
                        'answers' => [
                            ['answer' => 'Pour limiter les concentrations, les ventes à découvert ou certaines expositions jugées excessives', 'iscorrect' => true],
                            ['answer' => 'Pour empêcher tout calcul de risque', 'iscorrect' => false],
                            ['answer' => 'Pour garantir un rendement positif', 'iscorrect' => false],
                            ['answer' => 'Pour supprimer les corrélations entre actifs', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Modèle CAPM et portefeuille de marché',
                'questions' => [
                    [
                        'question' => 'Que mesure le bêta d’un actif dans le CAPM ?',
                        'answers' => [
                            ['answer' => 'La sensibilité du rendement de l’actif aux variations du rendement du portefeuille de marché', 'iscorrect' => true],
                            ['answer' => 'Le rendement absolu garanti de l’actif', 'iscorrect' => false],
                            ['answer' => 'La liquidité quotidienne du titre', 'iscorrect' => false],
                            ['answer' => 'Le nombre d’actions en circulation', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Dans le CAPM, quelle composante rémunère principalement le risque systématique ?',
                        'answers' => [
                            ['answer' => 'La prime de risque de marché multipliée par le bêta', 'iscorrect' => true],
                            ['answer' => 'La variance idiosyncratique seule', 'iscorrect' => false],
                            ['answer' => 'Les frais de transaction', 'iscorrect' => false],
                            ['answer' => 'Le dividende historique', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Que signifie un bêta égal à 1 ?',
                        'answers' => [
                            ['answer' => 'L’actif présente, dans le cadre du modèle, une sensibilité au marché comparable à celle du portefeuille de marché', 'iscorrect' => true],
                            ['answer' => 'L’actif est sans risque', 'iscorrect' => false],
                            ['answer' => 'L’actif garantit un rendement de 1 %', 'iscorrect' => false],
                            ['answer' => 'L’actif ne possède aucun risque spécifique', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Que signifie généralement un bêta supérieur à 1 ?',
                        'answers' => [
                            ['answer' => 'L’actif est historiquement plus sensible aux mouvements du marché que le marché lui-même', 'iscorrect' => true],
                            ['answer' => 'L’actif est moins risqué que le taux sans risque', 'iscorrect' => false],
                            ['answer' => 'L’actif ne varie jamais', 'iscorrect' => false],
                            ['answer' => 'L’actif possède nécessairement un rendement négatif', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Dans le CAPM, que représente le taux sans risque ?',
                        'answers' => [
                            ['answer' => Le rendement associé à un placement considéré comme sans risque dans le modèle', 'iscorrect' => true],
                            ['answer' => 'Le rendement moyen de toutes les actions', 'iscorrect' => false],
                            ['answer' => 'La prime de risque de l’entreprise', 'iscorrect' => false],
                            ['answer' => 'La volatilité du portefeuille de marché', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Que représente la prime de risque de marché ?',
                        'answers' => [
                            ['answer' => 'L’écart entre le rendement attendu du marché et le taux sans risque', 'iscorrect' => true],
                            ['answer' => 'La différence entre deux cours d’une même action', 'iscorrect' => false],
                            ['answer' => 'Le coût de gestion du portefeuille', 'iscorrect' => false],
                            ['answer' => 'La variance du marché', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel risque le CAPM considère-t-il comme rémunéré ?',
                        'answers' => [
                            ['answer' => 'Le risque systématique qui ne peut pas être éliminé par une diversification suffisante', 'iscorrect' => true],
                            ['answer' => 'Uniquement le risque spécifique d’une entreprise', 'iscorrect' => false],
                            ['answer' => 'Le risque opérationnel interne uniquement', 'iscorrect' => false],
                            ['answer' => 'Le risque de liquidité uniquement', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi le risque spécifique n’est-il généralement pas rémunéré dans le CAPM ?',
                        'answers' => [
                            ['answer' => 'Parce qu’un investisseur peut en principe le réduire fortement par diversification', 'iscorrect' => true],
                            ['answer' => 'Parce qu’il est toujours nul', 'iscorrect' => false],
                            ['answer' => 'Parce qu’il est identique au taux sans risque', 'iscorrect' => false],
                            ['answer' => 'Parce qu’il est impossible à mesurer', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Un actif possède un bêta négatif. Que signifie principalement cette caractéristique ?',
                        'answers' => [
                            ['answer' => 'Ses rendements ont tendance, selon l’estimation, à évoluer dans le sens opposé au marché', 'iscorrect' => true],
                            ['answer' => 'Son rendement est toujours négatif', 'iscorrect' => false],
                            ['answer' => 'Il est automatiquement sans risque', 'iscorrect' => false],
                            ['answer' => 'Il ne possède aucune volatilité', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le principal objectif du CAPM dans l’analyse de portefeuille ?',
                        'answers' => [
                            ['answer' => Relier le rendement attendu d’un actif à son exposition au risque systématique', 'iscorrect' => true],
                            ['answer' => 'Prévoir exactement le cours futur de chaque action', 'iscorrect' => false],
                            ['answer' => 'Calculer uniquement les dividendes', 'iscorrect' => false],
                            ['answer' => 'Éliminer toutes les pertes du portefeuille', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Mesures de performance ajustée au risque',
                'questions' => [
                    [
                        'question' => 'Que mesure le ratio de Sharpe ?',
                        'answers' => [
                            ['answer' => 'Le rendement excédentaire par unité de risque total du portefeuille', 'iscorrect' => true],
                            ['answer' => 'Le rendement absolu sans tenir compte du risque', 'iscorrect' => false],
                            ['answer' => 'Uniquement le bêta du portefeuille', 'iscorrect' => false],
                            ['answer' => 'Uniquement les frais de gestion', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel indicateur de risque est généralement utilisé au dénominateur du ratio de Sharpe ?',
                        'answers' => [
                            ['answer' => L’écart-type du rendement du portefeuille', 'iscorrect' => true],
                            ['answer' => Le bêta uniquement', 'iscorrect' => false],
                            ['answer' => Le rendement sans risque', 'iscorrect' => false],
                            ['answer' => Le dividende', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Que mesure le ratio de Treynor ?',
                        'answers' => [
                            ['answer' => 'Le rendement excédentaire par unité de risque systématique mesuré par le bêta', 'iscorrect' => true],
                            ['answer' => 'Le rendement par unité de volatilité totale uniquement', 'iscorrect' => false],
                            ['answer' => 'Le rendement par euro investi', 'iscorrect' => false],
                            ['answer' => 'Le coût moyen des transactions', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Dans quel contexte le ratio de Sharpe est-il particulièrement utile ?',
                        'answers' => [
                            ['answer' => 'Pour comparer des portefeuilles en tenant compte de leur risque total', 'iscorrect' => true],
                            ['answer' => 'Pour comparer uniquement les dividendes', 'iscorrect' => false],
                            ['answer' => 'Pour déterminer le nombre d’actions à acheter sans analyser le risque', 'iscorrect' => false],
                            ['answer' => 'Pour calculer la valeur comptable d’une entreprise', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Que représente l’alpha de Jensen ?',
                        'answers' => [
                            ['answer' => 'La performance excédentaire d’un portefeuille par rapport à celle attendue selon le CAPM', 'iscorrect' => true],
                            ['answer' => 'La volatilité totale du portefeuille', 'iscorrect' => false],
                            ['answer' => 'Le taux sans risque', 'iscorrect' => false],
                            ['answer' => 'Le bêta du marché', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Un portefeuille possède un alpha de Jensen positif. Quelle interprétation est possible ?',
                        'answers' => [
                            ['answer' => 'Il a réalisé une performance supérieure à celle impliquée par son exposition systématique selon le modèle', 'iscorrect' => true],
                            ['answer' => 'Il est nécessairement sans risque', 'iscorrect' => false],
                            ['answer' => 'Il possède automatiquement un bêta inférieur à zéro', 'iscorrect' => false],
                            ['answer' => 'Il a obligatoirement une volatilité nulle', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi faut-il éviter de comparer directement les ratios de Sharpe de portefeuilles ayant des périodes d’observation très différentes sans précaution ?',
                        'answers' => [
                            ['answer' => 'Les périodes peuvent présenter des conditions de marché et des propriétés statistiques différentes', 'iscorrect' => true],
                            ['answer' => 'Le ratio de Sharpe est toujours identique quelle que soit la période', 'iscorrect' => false],
                            ['answer' => 'Le risque disparaît sur les longues périodes', 'iscorrect' => false],
                            ['answer' => 'Les rendements historiques ne peuvent jamais être comparés', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une performance élevée n’est-elle pas nécessairement synonyme de bonne gestion ?',
                        'answers' => [
                            ['answer' => 'Parce qu’elle peut avoir été obtenue avec une prise de risque disproportionnée', 'iscorrect' => true],
                            ['answer' => 'Parce qu’un rendement élevé est toujours mauvais', 'iscorrect' => false],
                            ['answer' => 'Parce que le risque n’a aucune importance', 'iscorrect' => false],
                            ['answer' => 'Parce que les portefeuilles ne doivent jamais générer de rendement', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel indicateur utilise explicitement le bêta plutôt que la volatilité totale ?',
                        'answers' => [
                            ['answer' => Le ratio de Treynor', 'iscorrect' => true],
                            ['answer' => 'Le ratio de Sharpe', 'iscorrect' => false],
                            ['answer' => 'L’écart-type', 'iscorrect' => false],
                            ['answer' => 'La moyenne arithmétique', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les mesures de performance ajustée au risque doivent-elles être interprétées avec prudence ?',
                        'answers' => [
                            ['answer' => 'Elles dépendent des données, de la période étudiée et des hypothèses du modèle utilisé', 'iscorrect' => true],
                            ['answer' => 'Elles prédisent toujours les rendements futurs', 'iscorrect' => false],
                            ['answer' => 'Elles éliminent les erreurs d’estimation', 'iscorrect' => false],
                            ['answer' => 'Elles sont indépendantes de toute hypothèse', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Gestion active et gestion passive',
                'questions' => [
                    [
                        'question' => 'Quel est l’objectif principal d’une gestion active ?',
                        'answers' => [
                            ['answer' => 'Obtenir une performance supérieure à une référence ou atteindre un objectif grâce à des décisions actives', 'iscorrect' => true],
                            ['answer' => 'Répliquer exactement un indice', 'iscorrect' => false],
                            ['answer' => 'Éliminer tous les risques', 'iscorrect' => false],
                            ['answer' => 'Ne jamais modifier le portefeuille', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est l’objectif principal d’une gestion passive indicielle ?',
                        'answers' => [
                            ['answer' => 'Reproduire autant que possible la performance d’un indice de référence après coûts', 'iscorrect' => true],
                            ['answer' => 'Battre systématiquement le marché', 'iscorrect' => false],
                            ['answer' => 'Sélectionner quotidiennement les actions les plus performantes', 'iscorrect' => false],
                            ['answer' => 'Éliminer toute volatilité', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce que l’erreur de suivi ou tracking error ?',
                        'answers' => [
                            ['answer' => 'La variabilité de l’écart entre la performance d’un portefeuille et celle de sa référence', 'iscorrect' => true],
                            ['answer' => 'La perte maximale d’une action', 'iscorrect' => false],
                            ['answer' => 'Le rendement du taux sans risque', 'iscorrect' => false],
                            ['answer' => 'Le bêta d’un indice', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel avantage est souvent associé à la gestion passive ?',
                        'answers' => [
                            ['answer' => 'Des coûts généralement plus faibles et une exposition transparente à l’indice suivi', 'iscorrect' => true],
                            ['answer' => 'Une garantie de surperformance', 'iscorrect' => false],
                            ['answer' => 'Une absence totale de risque', 'iscorrect' => false],
                            ['answer' => 'Une protection automatique contre les crises', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est un défi majeur de la gestion active ?',
                        'answers' => [
                            ['answer' => 'Générer une surperformance après prise en compte des coûts et du risque', 'iscorrect' => true],
                            ['answer' => 'Éviter toute diversification', 'iscorrect' => false],
                            ['answer' => 'Garantir que toutes les décisions seront correctes', 'iscorrect' => false],
                            ['answer' => 'Réduire systématiquement le nombre de titres à un seul', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce que le turnover d’un portefeuille ?',
                        'answers' => [
                            ['answer' => 'Une mesure de l’intensité des achats et ventes effectués dans le portefeuille', 'iscorrect' => true],
                            ['answer' => 'Le rendement annuel garanti', 'iscorrect' => false],
                            ['answer' => 'Le nombre de marchés disponibles', 'iscorrect' => false],
                            ['answer' => 'La volatilité du taux sans risque', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un turnover élevé peut-il réduire la performance nette ?',
                        'answers' => [
                            ['answer' => 'Parce qu’il peut entraîner davantage de frais, de spreads et éventuellement d’impôts', 'iscorrect' => true],
                            ['answer' => 'Parce qu’il augmente automatiquement le rendement', 'iscorrect' => false],
                            ['answer' => 'Parce qu’il supprime le risque de marché', 'iscorrect' => false],
                            ['answer' => 'Parce qu’il garantit une meilleure diversification', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce qu’un fonds indiciel ?',
                        'answers' => [
                            ['answer' => 'Un véhicule d’investissement conçu pour suivre la composition ou la performance d’un indice', 'iscorrect' => true],
                            ['answer' => 'Un fonds qui garantit un rendement fixe', 'iscorrect' => false],
                            ['answer' => 'Un fonds investi exclusivement dans une entreprise', 'iscorrect' => false],
                            ['answer' => 'Un portefeuille sans aucun risque', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les coûts sont-ils particulièrement importants pour une stratégie passive ?',
                        'answers' => [
                            ['answer' => 'Parce que les écarts de coûts peuvent directement augmenter ou diminuer l’écart avec la performance de l’indice', 'iscorrect' => true],
                            ['answer' => 'Parce que les coûts déterminent toujours le rendement brut de l’indice', 'iscorrect' => false],
                            ['answer' => 'Parce qu’un fonds passif ne possède jamais d’actifs', 'iscorrect' => false],
                            ['answer' => 'Parce que les frais sont toujours nuls', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Une gestion active peut-elle être combinée avec une allocation stratégique passive ?',
                        'answers' => [
                            ['answer' => 'Oui, différentes approches peuvent être combinées selon les objectifs et contraintes du portefeuille', 'iscorrect' => true],
                            ['answer' => 'Non, les deux approches sont toujours incompatibles', 'iscorrect' => false],
                            ['answer' => 'Uniquement lorsque les marchés sont fermés', 'iscorrect' => false],
                            ['answer' => 'Uniquement pour les obligations', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Gestion du risque de portefeuille',
                'questions' => [
                    [
                        'question' => 'Qu’est-ce que la Value at Risk, ou VaR ?',
                        'answers' => [
                            ['answer' => 'Une estimation de la perte potentielle qui ne devrait pas être dépassée avec un niveau de confiance donné sur un horizon donné', 'iscorrect' => true],
                            ['answer' => 'Une garantie du montant maximal de perte', 'iscorrect' => false],
                            ['answer' => 'Le rendement moyen garanti', 'iscorrect' => false],
                            ['answer' => 'La volatilité exacte du marché futur', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi le niveau de confiance est-il essentiel dans une mesure de VaR ?',
                        'answers' => [
                            ['answer' => 'Parce qu’il détermine la probabilité associée au seuil de perte estimé', 'iscorrect' => true],
                            ['answer' => 'Parce qu’il détermine directement le rendement du portefeuille', 'iscorrect' => false],
                            ['answer' => 'Parce qu’il supprime les événements extrêmes', 'iscorrect' => false],
                            ['answer' => 'Parce qu’il fixe automatiquement les pondérations', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle est une limite importante de la VaR ?',
                        'answers' => [
                            ['answer' => 'Elle ne décrit pas nécessairement l’ampleur des pertes au-delà du seuil de VaR', 'iscorrect' => true],
                            ['answer' => 'Elle ne peut jamais être calculée', 'iscorrect' => false],
                            ['answer' => 'Elle garantit toujours une perte inférieure au seuil', 'iscorrect' => false],
                            ['answer' => 'Elle mesure uniquement les dividendes', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Que mesure le Expected Shortfall ?',
                        'answers' => [
                            ['answer' => 'La perte moyenne conditionnelle lorsque les pertes dépassent le seuil de VaR', 'iscorrect' => true],
                            ['answer' => 'Le rendement moyen des actions', 'iscorrect' => false],
                            ['answer' => 'Le taux sans risque', 'iscorrect' => false],
                            ['answer' => 'Le bêta moyen du portefeuille', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce qu’un stress test de portefeuille ?',
                        'answers' => [
                            ['answer' => 'Une analyse de l’impact de scénarios défavorables sur la valeur et le risque du portefeuille', 'iscorrect' => true],
                            ['answer' => 'Une garantie contre les crises', 'iscorrect' => false],
                            ['answer' => 'Un calcul du rendement moyen uniquement', 'iscorrect' => false],
                            ['answer' => 'Une méthode de sélection des dividendes', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les scénarios historiques peuvent-ils être complétés par des scénarios hypothétiques ?',
                        'answers' => [
                            ['answer' => 'Certains événements futurs extrêmes peuvent ne pas être présents dans l’historique disponible', 'iscorrect' => true],
                            ['answer' => 'Les données historiques sont toujours inutiles', 'iscorrect' => false],
                            ['answer' => 'Les scénarios hypothétiques garantissent les résultats futurs', 'iscorrect' => false],
                            ['answer' => 'Les marchés ne connaissent jamais de nouveaux événements', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le rôle d’une limite de concentration ?',
                        'answers' => [
                            ['answer' => 'Limiter l’exposition excessive du portefeuille à un actif, émetteur, secteur ou facteur donné', 'iscorrect' => true],
                            ['answer' => 'Garantir le rendement de l’actif', 'iscorrect' => false],
                            ['answer' => 'Supprimer tous les risques de marché', 'iscorrect' => false],
                            ['answer' => 'Augmenter automatiquement le bêta', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce que le risque de liquidité ?',
                        'answers' => [
                            ['answer' => 'Le risque de ne pas pouvoir acheter ou vendre rapidement un actif sans impact important sur son prix', 'iscorrect' => true],
                            ['answer' => 'Le risque que le rendement soit toujours positif', 'iscorrect' => false],
                            ['answer' => 'Le risque de recevoir trop de dividendes', 'iscorrect' => false],
                            ['answer' => 'Le risque d’un changement de taux sans risque uniquement', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi le risque de liquidité est-il particulièrement important en période de crise ?',
                        'answers' => [
                            ['answer' => 'Les écarts acheteur-vendeur peuvent s’élargir et la profondeur du marché peut diminuer', 'iscorrect' => true],
                            ['answer' => 'Les marchés deviennent toujours parfaitement liquides', 'iscorrect' => false],
                            ['answer' => 'Les prix cessent automatiquement de varier', 'iscorrect' => false],
                            ['answer' => 'Les transactions deviennent toujours gratuites', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les modèles de risque doivent-ils être régulièrement réévalués ?',
                        'answers' => [
                            ['answer' => 'Les relations entre actifs, volatilités et conditions de marché peuvent évoluer dans le temps', 'iscorrect' => true],
                            ['answer' => 'Les marchés sont parfaitement stables', 'iscorrect' => false],
                            ['answer' => 'Les modèles sont toujours exacts', 'iscorrect' => false],
                            ['answer' => 'Le risque ne dépend jamais des conditions économiques', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Optimisation et construction avancée',
                'questions' => [
                    [
                        'question' => 'Quel est l’objectif d’une optimisation sous contrainte d’un portefeuille ?',
                        'answers' => [
                            ['answer' => Trouver une allocation optimale tout en respectant des contraintes d’investissement définies', 'iscorrect' => true],
                            ['answer' => 'Maximiser obligatoirement le nombre de titres', 'iscorrect' => false],
                            ['answer' => 'Éliminer toutes les contraintes du portefeuille', 'iscorrect' => false],
                            ['answer' => 'Garantir un rendement positif', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi impose-t-on parfois une borne maximale à la pondération d’un actif ?',
                        'answers' => [
                            ['answer' => 'Pour limiter le risque de concentration', 'iscorrect' => true],
                            ['answer' => 'Pour garantir son rendement', 'iscorrect' => false],
                            ['answer' => 'Pour augmenter automatiquement sa volatilité', 'iscorrect' => false],
                            ['answer' => 'Pour supprimer son risque spécifique', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel problème peut apparaître dans une optimisation moyenne-variance sans contraintes ?',
                        'answers' => [
                            ['answer' => Des pondérations extrêmes ou instables dues à de petites erreurs dans les estimations', 'iscorrect' => true],
                            ['answer' => 'Une impossibilité totale de calculer une variance', 'iscorrect' => false],
                            ['answer' => 'Un rendement nécessairement nul', 'iscorrect' => false],
                            ['answer' => 'Une diversification toujours parfaite', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les contraintes de turnover peuvent-elles être utiles ?',
                        'answers' => [
                            ['answer' => 'Elles limitent les changements excessifs du portefeuille et donc certains coûts de transaction', 'iscorrect' => true],
                            ['answer' => 'Elles garantissent une surperformance', 'iscorrect' => false],
                            ['answer' => 'Elles rendent les marchés prévisibles', 'iscorrect' => false],
                            ['answer' => 'Elles suppriment toute volatilité', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce qu’une optimisation robuste cherche notamment à limiter ?',
                        'answers' => [
                            ['answer' => 'La sensibilité des allocations optimales aux erreurs d’estimation des paramètres', 'iscorrect' => true],
                            ['answer' => 'La diversification entre actifs', 'iscorrect' => false],
                            ['answer' => 'L’utilisation de données historiques', 'iscorrect' => false],
                            ['answer' => 'La prise en compte du risque', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi l’estimation de la matrice de covariance est-elle importante dans un portefeuille multi-actifs ?',
                        'answers' => [
                            ['answer' => 'Elle influence directement le calcul de la variance et donc les pondérations optimales', 'iscorrect' => true],
                            ['answer' => 'Elle détermine uniquement le montant des dividendes', 'iscorrect' => false],
                            ['answer' => 'Elle fixe automatiquement les taux d’intérêt', 'iscorrect' => false],
                            ['answer' => 'Elle ne concerne que les obligations', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est l’intérêt d’une approche factorielle du portefeuille ?',
                        'answers' => [
                            ['answer' => Identifier les sources communes de risque et de rendement qui expliquent les comportements des actifs', 'iscorrect' => true],
                            ['answer' => 'Ignorer les facteurs de marché', 'iscorrect' => false],
                            ['answer' => 'Garantir les performances individuelles', 'iscorrect' => false],
                            ['answer' => 'Remplacer toute analyse quantitative', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce que le risque de modèle en gestion de portefeuille ?',
                        'answers' => [
                            ['answer' => 'Le risque que les hypothèses ou la structure du modèle conduisent à des décisions inadéquates', 'iscorrect' => true],
                            ['answer' => 'Le risque que les marchés soient toujours fermés', 'iscorrect' => false],
                            ['answer' => 'Le risque que les dividendes soient trop élevés', 'iscorrect' => false],
                            ['answer' => 'Le risque d’avoir trop de liquidités uniquement', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une optimisation purement quantitative doit-elle être complétée par une analyse qualitative ?',
                        'answers' => [
                            ['answer' => 'Certains risques, contraintes institutionnelles ou changements structurels peuvent être mal capturés par les données historiques', 'iscorrect' => true],
                            ['answer' => 'Les modèles quantitatifs ne servent jamais à rien', 'iscorrect' => false],
                            ['answer' => 'L’analyse qualitative garantit un rendement positif', 'iscorrect' => false],
                            ['answer' => 'Les données financières sont toujours inutiles', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le principal objectif d’une allocation diversifiée entre facteurs de risque ?',
                        'answers' => [
                            ['answer' => Éviter qu’une seule source de risque domine excessivement le comportement du portefeuille', 'iscorrect' => true],
                            ['answer' => 'Augmenter systématiquement toutes les expositions', 'iscorrect' => false],
                            ['answer' => 'Supprimer toute volatilité', 'iscorrect' => false],
                            ['answer' => 'Garantir une performance identique chaque année', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Analyse des scénarios et décisions tactiques',
                'questions' => [
                    [
                        'question' => 'Quel est l’objectif d’une analyse de scénarios macroéconomiques pour un portefeuille ?',
                        'answers' => [
                            ['answer' => 'Évaluer comment différentes évolutions économiques pourraient affecter les actifs et les facteurs de risque', 'iscorrect' => true],
                            ['answer' => 'Prévoir avec certitude le prochain cours de chaque action', 'iscorrect' => false],
                            ['answer' => 'Garantir le rendement futur', 'iscorrect' => false],
                            ['answer' => 'Supprimer les corrélations entre actifs', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Une hausse importante des taux d’intérêt peut-elle affecter simultanément plusieurs classes d’actifs ?',
                        'answers' => [
                            ['answer' => 'Oui, car les taux influencent notamment les valorisations, le coût du financement et les obligations', 'iscorrect' => true],
                            ['answer' => 'Non, les taux concernent uniquement les comptes bancaires', 'iscorrect' => false],
                            ['answer' => 'Non, les actions ne sont jamais influencées par les taux', 'iscorrect' => false],
                            ['answer' => 'Oui, mais uniquement les devises', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel effet une récession peut-elle avoir sur un portefeuille fortement exposé aux actions cycliques ?',
                        'answers' => [
                            ['answer' => 'Elle peut augmenter le risque de baisse des bénéfices et des valorisations de ces entreprises', 'iscorrect' => true],
                            ['answer' => 'Elle garantit une hausse de leurs cours', 'iscorrect' => false],
                            ['answer' => 'Elle supprime leur volatilité', 'iscorrect' => false],
                            ['answer' => 'Elle augmente toujours leurs dividendes', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi l’analyse de sensibilité peut-elle être utile ?',
                        'answers' => [
                            ['answer' => 'Elle montre comment les résultats du portefeuille changent lorsque certains paramètres varient', 'iscorrect' => true],
                            ['answer' => 'Elle garantit que les paramètres ne changeront jamais', 'iscorrect' => false],
                            ['answer' => 'Elle supprime les incertitudes', 'iscorrect' => false],
                            ['answer' => 'Elle remplace toute gestion du risque', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce qu’une décision tactique d’allocation ?',
                        'answers' => [
                            ['answer' => 'Une modification temporaire des pondérations afin de répondre à une conviction ou à une condition de marché', 'iscorrect' => true],
                            ['answer' => 'Une allocation qui ne peut jamais être modifiée', 'iscorrect' => false],
                            ['answer' => 'Une stratégie consistant à investir uniquement en liquidités', 'iscorrect' => false],
                            ['answer' => 'Une allocation sans benchmark', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le risque d’une allocation tactique trop fréquente ?',
                        'answers' => [
                            ['answer' => 'Des coûts élevés et des erreurs de timing peuvent réduire la performance', 'iscorrect' => true],
                            ['answer' => 'Elle garantit toujours une surperformance', 'iscorrect' => false],
                            ['answer' => 'Elle supprime le risque systématique', 'iscorrect' => false],
                            ['answer' => 'Elle rend les marchés prévisibles', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les corrélations entre actifs doivent-elles être surveillées pendant les crises ?',
                        'answers' => [
                            ['answer' => 'Elles peuvent augmenter et réduire les bénéfices attendus de la diversification', 'iscorrect' => true],
                            ['answer' => 'Elles deviennent toujours négatives', 'iscorrect' => false],
                            ['answer' => 'Elles deviennent toujours nulles', 'iscorrect' => false],
                            ['answer' => 'Elles n’ont aucun effet sur le risque du portefeuille', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel scénario peut être considéré comme un stress test pertinent pour un portefeuille mondial ?',
                        'answers' => [
                            ['answer' => 'Une combinaison de forte hausse des taux, ralentissement économique et baisse des marchés actions', 'iscorrect' => true],
                            ['answer' => 'Une situation dans laquelle tous les actifs augmentent simultanément', 'iscorrect' => false],
                            ['answer' => 'Un marché sans aucune volatilité', 'iscorrect' => false],
                            ['answer' => 'Une période sans changement économique', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une forte conviction macroéconomique ne doit-elle pas conduire automatiquement à une concentration extrême ?',
                        'answers' => [
                            ['answer' => 'Parce que les prévisions sont incertaines et qu’une erreur peut avoir un impact disproportionné sur le portefeuille', 'iscorrect' => true],
                            ['answer' => 'Parce que les convictions macroéconomiques sont toujours fausses', 'iscorrect' => false],
                            ['answer' => 'Parce que la diversification est inutile', 'iscorrect' => false],
                            ['answer' => 'Parce que les marchés sont toujours prévisibles', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel principe doit guider une décision tactique de portefeuille ?',
                        'answers' => [
                            ['answer' => 'La décision doit être cohérente avec l’objectif, le risque accepté et une justification clairement définie', 'iscorrect' => true],
                            ['answer' => 'La recherche du rendement maximal sans contrainte', 'iscorrect' => false],
                            ['answer' => 'Le suivi systématique des rumeurs de marché', 'iscorrect' => false],
                            ['answer' => 'La modification quotidienne sans règle préalable', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Attribution de performance et évaluation du gestionnaire',
                'questions' => [
                    [
                        'question' => 'Qu’est-ce que l’attribution de performance ?',
                        'answers' => [
                            ['answer' => 'L’analyse des différentes décisions et expositions qui expliquent la performance d’un portefeuille', 'iscorrect' => true],
                            ['answer' => 'Le calcul du nombre de titres uniquement', 'iscorrect' => false],
                            ['answer' => 'La prévision certaine des rendements futurs', 'iscorrect' => false],
                            ['answer' => 'Le calcul des impôts uniquement', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Que peut chercher à distinguer une analyse d’attribution entre allocation et sélection ?',
                        'answers' => [
                            ['answer' => 'L’impact du choix des pondérations entre secteurs ou classes d’actifs et celui de la sélection des titres', 'iscorrect' => true],
                            ['answer' => 'Les frais bancaires et le taux sans risque uniquement', 'iscorrect' => false],
                            ['answer' => 'Les dividendes et les coupons uniquement', 'iscorrect' => false],
                            ['answer' => 'Les liquidités et les impôts uniquement', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une bonne attribution est-elle utile pour évaluer un gestionnaire ?',
                        'answers' => [
                            ['answer' => 'Elle permet de comprendre les sources de performance plutôt que de regarder uniquement le résultat final', 'iscorrect' => true],
                            ['answer' => 'Elle garantit que le gestionnaire sera performant dans le futur', 'iscorrect' => false],
                            ['answer' => 'Elle supprime le risque de marché', 'iscorrect' => false],
                            ['answer' => 'Elle rend inutile toute comparaison avec un benchmark', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi faut-il distinguer la performance brute et la performance nette ?',
                        'answers' => [
                            ['answer' => 'La performance nette tient compte des coûts qui diminuent le rendement réellement obtenu par l’investisseur', 'iscorrect' => true],
                            ['answer' => 'La performance brute inclut toujours tous les frais', 'iscorrect' => false],
                            ['answer' => 'La performance nette ignore les coûts', 'iscorrect' => false],
                            ['answer' => 'Les deux mesures sont toujours identiques', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce que le tracking error peut indiquer pour un portefeuille actif ?',
                        'answers' => [
                            ['answer' => 'Le degré de différence entre le comportement du portefeuille et celui de son benchmark', 'iscorrect' => true],
                            ['answer' => 'La garantie de surperformance', 'iscorrect' => false],
                            ['answer' => 'Le taux de dividende du portefeuille', 'iscorrect' => false],
                            ['answer' => 'Le rendement sans risque', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une surperformance sur une seule année ne suffit-elle pas à prouver la compétence d’un gestionnaire ?',
                        'answers' => [
                            ['answer' => 'Elle peut provenir du hasard, d’un environnement favorable ou d’une prise de risque temporairement payante', 'iscorrect' => true],
                            ['answer' => 'Une seule année est toujours suffisante', 'iscorrect' => false],
                            ['answer' => 'La performance n’a jamais d’importance', 'iscorrect' => false],
                            ['answer' => 'Les benchmarks ne servent jamais à évaluer un portefeuille', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel problème peut poser un benchmark mal choisi ?',
                        'answers' => [
                            ['answer' => 'Il peut donner une image trompeuse de la performance relative du portefeuille', 'iscorrect' => true],
                            ['answer' => 'Il garantit automatiquement une meilleure performance', 'iscorrect' => false],
                            ['answer' => 'Il supprime le risque', 'iscorrect' => false],
                            ['answer' => 'Il rend tous les portefeuilles identiques', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi le style d’investissement doit-il être pris en compte dans l’évaluation d’un gestionnaire ?',
                        'answers' => [
                            ['answer' => 'La performance doit être évaluée par rapport à l’univers, au risque et au style réellement suivis', 'iscorrect' => true],
                            ['answer' => 'Le style n’a jamais d’effet sur les résultats', 'iscorrect' => false],
                            ['answer' => 'Tous les gestionnaires utilisent exactement la même stratégie', 'iscorrect' => false],
                            ['answer' => 'Le style remplace le benchmark', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel élément peut expliquer une sous-performance relative temporaire ?',
                        'answers' => [
                            ['answer' => 'Une allocation différente du benchmark ou une exposition à certains facteurs défavorables pendant la période', 'iscorrect' => true],
                            ['answer' => 'Une impossibilité mathématique de perdre', 'iscorrect' => false],
                            ['answer' => 'L’absence obligatoire de diversification', 'iscorrect' => false],
                            ['answer' => 'Un rendement sans risque négatif dans tous les cas', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle approche est la plus pertinente pour juger une stratégie de portefeuille sur le long terme ?',
                        'answers' => [
                            ['answer' => 'Analyser les performances, les risques, les coûts, la cohérence du processus et les résultats par rapport à une référence pertinente', 'iscorrect' => true],
                            ['answer' => 'Regarder uniquement la meilleure année', 'iscorrect' => false],
                            ['answer' => 'Choisir uniquement le portefeuille ayant le rendement brut le plus élevé', 'iscorrect' => false],
                            ['answer' => 'Ignorer complètement les risques pris', 'iscorrect' => false],
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

                // Mélange les réponses pour éviter que la bonne réponse
                // soit toujours placée en première position.
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
