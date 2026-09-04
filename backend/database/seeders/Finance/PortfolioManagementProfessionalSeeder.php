```php
<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Major;
use App\Models\Subject;
use App\Models\Quiz;
use App\Models\Question;
use App\Models\Answer;

class PortfolioManagementProfessionalSeeder extends Seeder
{
    public function run(): void
    {
        $major = Major::where('slug', 'finance')->firstOrFail();

        $subject = Subject::where('major_id', $major->id)
            ->where('slug', 'portfolio-management')
            ->firstOrFail();

        $quizzes = [
            [
                'title' => 'Optimisation avancée et allocation stratégique',
                'questions' => [
                    [
                        'question' => 'Quel est le principal objectif d’une allocation stratégique d’actifs ?',
                        'answers' => [
                            ['answer' => 'Définir une combinaison d’actifs cohérente avec les objectifs, contraintes et horizon de l’investisseur', 'iscorrect' => true],
                            ['answer' => 'Maximiser le rendement du prochain mois', 'iscorrect' => false],
                            ['answer' => 'Éliminer entièrement le risque de marché', 'iscorrect' => false],
                            ['answer' => 'Répliquer quotidiennement les mouvements du marché', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une optimisation moyenne-variance non contrainte peut-elle produire des allocations extrêmes ?',
                        'answers' => [
                            ['answer' => 'Parce que de petites erreurs dans les rendements et covariances estimés peuvent être amplifiées par l’optimisation', 'iscorrect' => true],
                            ['answer' => 'Parce que la variance est toujours nulle', 'iscorrect' => false],
                            ['answer' => 'Parce que tous les actifs ont nécessairement une corrélation de -1', 'iscorrect' => false],
                            ['answer' => 'Parce que le modèle ignore toujours les rendements', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est l’intérêt d’une approche Black-Litterman pour l’allocation d’actifs ?',
                        'answers' => [
                            ['answer' => 'Combiner un portefeuille d’équilibre avec des anticipations de l’investisseur tout en contrôlant leur influence', 'iscorrect' => true],
                            ['answer' => 'Garantir une surperformance par rapport au marché', 'iscorrect' => false],
                            ['answer' => 'Supprimer toute estimation statistique', 'iscorrect' => false],
                            ['answer' => 'Remplacer systématiquement la diversification', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les contraintes de budget sont-elles fondamentales dans une optimisation de portefeuille ?',
                        'answers' => [
                            ['answer' => 'Elles imposent une utilisation cohérente du capital disponible et encadrent les pondérations', 'iscorrect' => true],
                            ['answer' => 'Elles garantissent un rendement positif', 'iscorrect' => false],
                            ['answer' => 'Elles suppriment le risque spécifique', 'iscorrect' => false],
                            ['answer' => 'Elles rendent les corrélations constantes', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel problème une contrainte de poids minimum peut-elle créer ?',
                        'answers' => [
                            ['answer' => 'Elle peut empêcher l’optimiseur d’éliminer complètement une exposition jugée peu attractive', 'iscorrect' => true],
                            ['answer' => 'Elle garantit toujours une meilleure diversification', 'iscorrect' => false],
                            ['answer' => 'Elle rend le portefeuille sans risque', 'iscorrect' => false],
                            ['answer' => 'Elle supprime le besoin de benchmark', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la stabilité des poids est-elle importante pour un investisseur institutionnel ?',
                        'answers' => [
                            ['answer' => 'Des allocations trop instables peuvent générer des coûts élevés et rendre le processus difficile à mettre en œuvre', 'iscorrect' => true],
                            ['answer' => 'Les poids instables garantissent une meilleure performance', 'iscorrect' => false],
                            ['answer' => 'La stabilité élimine automatiquement le risque', 'iscorrect' => false],
                            ['answer' => 'Les poids n’ont aucune influence sur les coûts', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce qu’une allocation liability-driven investment (LDI) cherche principalement à aligner ?',
                        'answers' => [
                            ['answer' => 'Les risques et caractéristiques des actifs avec les engagements futurs de l’investisseur', 'iscorrect' => true],
                            ['answer' => 'Uniquement les actions avec le marché mondial', 'iscorrect' => false],
                            ['answer' => 'Les dividendes avec les bénéfices comptables', 'iscorrect' => false],
                            ['answer' => 'Les frais de gestion avec la volatilité', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi l’horizon d’investissement influence-t-il l’allocation optimale ?',
                        'answers' => [
                            ['answer' => 'La capacité à supporter les pertes temporaires et les besoins futurs peuvent varier selon l’horizon', 'iscorrect' => true],
                            ['answer' => 'Le rendement attendu devient toujours nul à long terme', 'iscorrect' => false],
                            ['answer' => 'La volatilité disparaît automatiquement', 'iscorrect' => false],
                            ['answer' => 'Les corrélations cessent d’exister', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le rôle d’une politique d’investissement institutionnelle ?',
                        'answers' => [
                            ['answer' => 'Formaliser les objectifs, contraintes, risques acceptables et règles de gouvernance du portefeuille', 'iscorrect' => true],
                            ['answer' => 'Prévoir précisément tous les rendements futurs', 'iscorrect' => false],
                            ['answer' => 'Garantir la performance annuelle', 'iscorrect' => false],
                            ['answer' => 'Remplacer la surveillance des risques', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une allocation optimale mathématiquement peut-elle être inadéquate en pratique ?',
                        'answers' => [
                            ['answer' => 'Elle peut ignorer la liquidité, les coûts, la gouvernance, les contraintes réglementaires ou les risques de modèle', 'iscorrect' => true],
                            ['answer' => 'Les mathématiques ne peuvent jamais être utilisées en finance', 'iscorrect' => false],
                            ['answer' => 'Une optimisation produit toujours un portefeuille sans risque', 'iscorrect' => false],
                            ['answer' => 'Les contraintes pratiques augmentent toujours le rendement', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Gestion factorielle et modèles multifactoriels',
                'questions' => [
                    [
                        'question' => 'Quel est l’objectif principal d’un modèle factoriel de portefeuille ?',
                        'answers' => [
                            ['answer' => 'Identifier les facteurs communs expliquant une partie des rendements et des risques des actifs', 'iscorrect' => true],
                            ['answer' => 'Prévoir parfaitement chaque cours individuel', 'iscorrect' => false],
                            ['answer' => 'Supprimer toute volatilité', 'iscorrect' => false],
                            ['answer' => 'Remplacer les données de marché', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Dans une stratégie factorielle, que représente une exposition à un facteur ?',
                        'answers' => [
                            ['answer' => 'La sensibilité du portefeuille aux variations d’une source systématique de rendement ou de risque', 'iscorrect' => true],
                            ['answer' => 'Le nombre de titres détenus', 'iscorrect' => false],
                            ['answer' => 'Le montant total des commissions', 'iscorrect' => false],
                            ['answer' => 'Le rendement garanti du portefeuille', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel facteur est traditionnellement associé aux actions présentant des valorisations relativement faibles ?',
                        'answers' => [
                            ['answer' => 'Le facteur value', 'iscorrect' => true],
                            ['answer' => 'Le facteur liquidité uniquement', 'iscorrect' => false],
                            ['answer' => 'Le facteur inflation uniquement', 'iscorrect' => false],
                            ['answer' => 'Le facteur dividende garanti', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Que cherche généralement à capturer le facteur momentum ?',
                        'answers' => [
                            ['answer' => 'La tendance de certains actifs ayant récemment bien performé à continuer relativement leur dynamique', 'iscorrect' => true],
                            ['answer' => 'La valeur comptable uniquement', 'iscorrect' => false],
                            ['answer' => 'Le taux sans risque', 'iscorrect' => false],
                            ['answer' => 'La maturité des obligations uniquement', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la neutralisation factorielle peut-elle être utilisée dans un portefeuille actif ?',
                        'answers' => [
                            ['answer' => 'Pour isoler davantage la contribution d’une sélection de titres en contrôlant certaines expositions systématiques', 'iscorrect' => true],
                            ['answer' => 'Pour supprimer tous les coûts', 'iscorrect' => false],
                            ['answer' => 'Pour garantir une surperformance', 'iscorrect' => false],
                            ['answer' => 'Pour empêcher toute diversification', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce que le risque de facteur ?',
                        'answers' => [
                            ['answer' => 'Le risque qu’une exposition commune à un facteur évolue défavorablement pour le portefeuille', 'iscorrect' => true],
                            ['answer' => 'Le risque que chaque titre devienne sans volatilité', 'iscorrect' => false],
                            ['answer' => 'Le risque de recevoir trop de coupons', 'iscorrect' => false],
                            ['answer' => 'Le risque comptable uniquement', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les facteurs peuvent-ils connaître des périodes prolongées de sous-performance ?',
                        'answers' => [
                            ['answer' => 'Les primes factorielles ne sont pas garanties et dépendent des régimes de marché et des comportements des investisseurs', 'iscorrect' => true],
                            ['answer' => 'Les facteurs ont toujours une performance positive', 'iscorrect' => false],
                            ['answer' => 'Les facteurs sont indépendants des marchés', 'iscorrect' => false],
                            ['answer' => 'Les primes sont légalement garanties', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel problème peut apparaître lorsque plusieurs facteurs sont fortement corrélés ?',
                        'answers' => [
                            ['answer' => 'Il devient plus difficile d’identifier les contributions individuelles et de contrôler précisément les expositions', 'iscorrect' => true],
                            ['answer' => 'Le risque total devient nécessairement nul', 'iscorrect' => false],
                            ['answer' => 'Le portefeuille devient automatiquement efficient', 'iscorrect' => false],
                            ['answer' => 'Les coûts disparaissent', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi le backtesting factoriel doit-il être interprété avec prudence ?',
                        'answers' => [
                            ['answer' => 'Le surajustement, les biais de sélection et les coûts ignorés peuvent surestimer la performance historique', 'iscorrect' => true],
                            ['answer' => 'Les données historiques prédisent parfaitement le futur', 'iscorrect' => false],
                            ['answer' => 'Le backtesting élimine tous les biais', 'iscorrect' => false],
                            ['answer' => 'Les coûts n’existent pas dans les stratégies factorielles', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce que le facteur quality cherche généralement à identifier ?',
                        'answers' => [
                            ['answer' => 'Des entreprises présentant certaines caractéristiques fondamentales jugées favorables, comme la rentabilité ou la solidité financière', 'iscorrect' => true],
                            ['answer' => 'Uniquement les entreprises ayant le plus grand nombre d’actions', 'iscorrect' => false],
                            ['answer' => 'Les entreprises dont le cours est toujours stable', 'iscorrect' => false],
                            ['answer' => 'Les obligations arrivant à maturité demain', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Gestion des risques extrêmes',
                'questions' => [
                    [
                        'question' => 'Quelle est une faiblesse fondamentale de la VaR lorsqu’elle est utilisée seule ?',
                        'answers' => [
                            ['answer' => 'Elle ne décrit pas directement la gravité moyenne des pertes au-delà du seuil', 'iscorrect' => true],
                            ['answer' => 'Elle mesure toujours exactement les pertes futures', 'iscorrect' => false],
                            ['answer' => 'Elle ignore nécessairement toute volatilité', 'iscorrect' => false],
                            ['answer' => 'Elle garantit que le seuil ne sera jamais dépassé', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi l’Expected Shortfall est-il souvent considéré comme plus informatif pour les pertes extrêmes ?',
                        'answers' => [
                            ['answer' => 'Il tient compte de l’ampleur moyenne des pertes situées au-delà du seuil de VaR', 'iscorrect' => true],
                            ['answer' => 'Il ignore les événements extrêmes', 'iscorrect' => false],
                            ['answer' => 'Il garantit l’absence de pertes', 'iscorrect' => false],
                            ['answer' => 'Il mesure uniquement le rendement attendu', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce que le risque de queue ?',
                        'answers' => [
                            ['answer' => 'Le risque associé à des événements rares situés dans les extrémités défavorables de la distribution des rendements', 'iscorrect' => true],
                            ['answer' => 'Le risque lié uniquement aux dividendes', 'iscorrect' => false],
                            ['answer' => 'Le risque d’un portefeuille sans volatilité', 'iscorrect' => false],
                            ['answer' => 'Le risque exclusivement comptable', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les corrélations historiques peuvent-elles sous-estimer le risque en période de crise ?',
                        'answers' => [
                            ['answer' => 'Les dépendances entre actifs peuvent changer fortement lorsque les marchés deviennent stressés', 'iscorrect' => true],
                            ['answer' => 'Les corrélations deviennent toujours nulles', 'iscorrect' => false],
                            ['answer' => 'Les actifs cessent de réagir aux événements macroéconomiques', 'iscorrect' => false],
                            ['answer' => 'Les crises réduisent toujours les corrélations', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est l’objectif d’un reverse stress test ?',
                        'answers' => [
                            ['answer' => 'Identifier les scénarios susceptibles de provoquer un niveau de perte ou de détérioration critique du portefeuille', 'iscorrect' => true],
                            ['answer' => 'Garantir le rendement maximal', 'iscorrect' => false],
                            ['answer' => 'Calculer uniquement la volatilité historique', 'iscorrect' => false],
                            ['answer' => 'Éliminer toutes les positions risquées', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les événements de liquidité doivent-ils être intégrés aux stress tests ?',
                        'answers' => [
                            ['answer' => 'Une crise peut réduire la capacité à déboucler des positions sans impact significatif sur les prix', 'iscorrect' => true],
                            ['answer' => 'La liquidité est toujours constante', 'iscorrect' => false],
                            ['answer' => 'Les coûts de transaction deviennent toujours nuls', 'iscorrect' => false],
                            ['answer' => 'Les marchés restent parfaitement profonds en période de crise', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce qu’un risque de gap ?',
                        'answers' => [
                            ['answer' => 'Le risque qu’un prix évolue brutalement entre deux observations ou périodes de cotation sans possibilité d’ajustement progressif', 'iscorrect' => true],
                            ['answer' => 'Le risque d’un dividende trop élevé', 'iscorrect' => false],
                            ['answer' => 'Le risque d’une variance nulle', 'iscorrect' => false],
                            ['answer' => 'Le risque de détenir trop de liquidités', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les distributions normales peuvent-elles être inadéquates pour certains portefeuilles ?',
                        'answers' => [
                            ['answer' => 'Les rendements financiers peuvent présenter asymétrie, queues épaisses et dépendances non linéaires', 'iscorrect' => true],
                            ['answer' => 'Les rendements financiers sont toujours uniformes', 'iscorrect' => false],
                            ['answer' => 'La normale garantit toujours des pertes nulles', 'iscorrect' => false],
                            ['answer' => 'La volatilité n’existe pas dans les marchés financiers', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel rôle les dérivés peuvent-ils jouer dans une politique de gestion des risques ?',
                        'answers' => [
                            ['answer' => 'Ils peuvent être utilisés pour couvrir certaines expositions, sous réserve des coûts et risques propres aux instruments', 'iscorrect' => true],
                            ['answer' => 'Ils suppriment tous les risques du portefeuille', 'iscorrect' => false],
                            ['answer' => 'Ils garantissent toujours un profit', 'iscorrect' => false],
                            ['answer' => 'Ils rendent inutile la diversification', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi le risque de contrepartie doit-il être considéré dans certaines stratégies de couverture ?',
                        'answers' => [
                            ['answer' => 'La partie qui doit honorer le contrat peut elle-même devenir défaillante', 'iscorrect' => true],
                            ['answer' => 'Les dérivés sont toujours garantis sans condition', 'iscorrect' => false],
                            ['answer' => 'Le risque de contrepartie disparaît avec la volatilité', 'iscorrect' => false],
                            ['answer' => 'Il ne concerne que les actions cotées', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Dérivés et couverture de portefeuille',
                'questions' => [
                    [
                        'question' => 'Quel est l’objectif principal d’une couverture de portefeuille par futures sur indice ?',
                        'answers' => [
                            ['answer' => 'Réduire l’exposition du portefeuille aux mouvements du marché sous-jacent', 'iscorrect' => true],
                            ['answer' => 'Garantir une surperformance', 'iscorrect' => false],
                            ['answer' => 'Augmenter automatiquement le bêta', 'iscorrect' => false],
                            ['answer' => 'Éliminer tout risque spécifique', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Que signifie un hedge ratio inférieur à 1 dans une couverture ?',
                        'answers' => [
                            ['answer' => 'La couverture ne compense pas nécessairement intégralement l’exposition initiale', 'iscorrect' => true],
                            ['answer' => 'Le portefeuille est sans risque', 'iscorrect' => false],
                            ['answer' => 'Le rendement est garanti', 'iscorrect' => false],
                            ['answer' => 'Le portefeuille possède obligatoirement un bêta négatif', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une couverture par indice peut-elle être imparfaite ?',
                        'answers' => [
                            ['answer' => 'Le portefeuille et l’indice peuvent avoir des compositions, sensibilités et comportements différents', 'iscorrect' => true],
                            ['answer' => 'Les indices ne fluctuent jamais', 'iscorrect' => false],
                            ['answer' => 'Tous les titres ont exactement le même bêta', 'iscorrect' => false],
                            ['answer' => 'Les futures n’ont aucune relation avec le marché', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce que le basis risk ?',
                        'answers' => [
                            ['answer' => 'Le risque que l’instrument de couverture et l’exposition couverte n’évoluent pas parfaitement ensemble', 'iscorrect' => true],
                            ['answer' => 'Le risque que les marchés ferment définitivement', 'iscorrect' => false],
                            ['answer' => 'Le risque de rendement sans risque', 'iscorrect' => false],
                            ['answer' => 'Le risque de dividende uniquement', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est l’intérêt d’une option de vente pour un portefeuille actions ?',
                        'answers' => [
                            ['answer' => 'Elle peut fournir une protection contre une baisse du sous-jacent en échange d’un coût', 'iscorrect' => true],
                            ['answer' => 'Elle garantit toujours une hausse du portefeuille', 'iscorrect' => false],
                            ['answer' => 'Elle élimine le coût de couverture', 'iscorrect' => false],
                            ['answer' => 'Elle transforme automatiquement les actions en obligations', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une stratégie de protection par options peut-elle être coûteuse ?',
                        'answers' => [
                            ['answer' => 'L’achat d’options implique généralement le paiement d’une prime', 'iscorrect' => true],
                            ['answer' => 'Les options sont toujours gratuites', 'iscorrect' => false],
                            ['answer' => 'Les options n’ont aucune valeur temporelle', 'iscorrect' => false],
                            ['answer' => 'La couverture augmente toujours le rendement attendu', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Que mesure principalement la delta d’une option ?',
                        'answers' => [
                            ['answer' => 'La sensibilité approximative du prix de l’option à une variation du prix du sous-jacent', 'iscorrect' => true],
                            ['answer' => 'La sensibilité uniquement au temps', 'iscorrect' => false],
                            ['answer' => 'La volatilité historique du portefeuille', 'iscorrect' => false],
                            ['answer' => 'Le rendement sans risque', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Que représente le gamma d’une option ?',
                        'answers' => [
                            ['answer' => 'La variation du delta de l’option lorsque le prix du sous-jacent varie', 'iscorrect' => true],
                            ['answer' => 'La prime de risque de marché', 'iscorrect' => false],
                            ['answer' => 'Le rendement du portefeuille', 'iscorrect' => false],
                            ['answer' => 'Le taux de dividende', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une couverture dynamique doit-elle être rééquilibrée ?',
                        'answers' => [
                            ['answer' => 'Les sensibilités du portefeuille et des dérivés évoluent avec les prix, le temps et la volatilité', 'iscorrect' => true],
                            ['answer' => 'Les sensibilités sont toujours constantes', 'iscorrect' => false],
                            ['answer' => 'Le marché cesse de fluctuer après la couverture', 'iscorrect' => false],
                            ['answer' => 'Les dérivés deviennent automatiquement sans risque', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel compromis existe entre une couverture complète et une couverture partielle ?',
                        'answers' => [
                            ['answer' => 'Une couverture plus importante peut réduire davantage le risque mais aussi augmenter les coûts et limiter certains gains potentiels', 'iscorrect' => true],
                            ['answer' => 'Une couverture complète est toujours gratuite', 'iscorrect' => false],
                            ['answer' => 'Une couverture partielle garantit toujours un rendement supérieur', 'iscorrect' => false],
                            ['answer' => 'Les deux stratégies ont exactement le même profil de risque', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Gestion internationale et multi-actifs',
                'questions' => [
                    [
                        'question' => 'Quel risque supplémentaire apparaît lorsqu’un investisseur détient des actifs en devises étrangères ?',
                        'answers' => [
                            ['answer' => 'Le risque de change', 'iscorrect' => true],
                            ['answer' => 'Le risque de disparition de la diversification', 'iscorrect' => false],
                            ['answer' => 'Le risque que les actions deviennent sans valeur comptable', 'iscorrect' => false],
                            ['answer' => 'Le risque que les obligations cessent de payer automatiquement', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un portefeuille international peut-il bénéficier d’une diversification géographique ?',
                        'answers' => [
                            ['answer' => 'Les économies, marchés et facteurs de risque nationaux ne réagissent pas nécessairement de manière identique', 'iscorrect' => true],
                            ['answer' => 'Tous les marchés internationaux sont parfaitement indépendants', 'iscorrect' => false],
                            ['answer' => 'Les marchés étrangers sont sans risque', 'iscorrect' => false],
                            ['answer' => 'La diversification internationale garantit une performance positive', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi le risque de change peut-il modifier significativement la performance d’un investisseur international ?',
                        'answers' => [
                            ['answer' => 'Les variations de change peuvent augmenter ou diminuer le rendement exprimé dans la devise de référence', 'iscorrect' => true],
                            ['answer' => 'Le change n’affecte jamais les rendements', 'iscorrect' => false],
                            ['answer' => 'Les devises ont toujours une valeur fixe', 'iscorrect' => false],
                            ['answer' => 'Le change ne concerne que les obligations domestiques', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est l’intérêt d’une couverture de change pour un investisseur institutionnel ?',
                        'answers' => [
                            ['answer' => 'Réduire l’incertitude liée aux variations de la devise étrangère', 'iscorrect' => true],
                            ['answer' => 'Garantir la performance de l’actif étranger', 'iscorrect' => false],
                            ['answer' => 'Supprimer le risque de marché', 'iscorrect' => false],
                            ['answer' => 'Éliminer tous les coûts de transaction', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi l’allocation multi-actifs peut-elle améliorer la robustesse d’un portefeuille ?',
                        'answers' => [
                            ['answer' => 'Les différentes classes d’actifs peuvent présenter des sensibilités différentes aux régimes économiques', 'iscorrect' => true],
                            ['answer' => 'Toutes les classes d’actifs ont toujours des rendements identiques', 'iscorrect' => false],
                            ['answer' => 'La diversification rend tous les actifs sans risque', 'iscorrect' => false],
                            ['answer' => 'Les obligations et actions réagissent toujours de manière opposée', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la corrélation actions-obligations doit-elle être surveillée dans une allocation multi-actifs ?',
                        'answers' => [
                            ['answer' => 'Une hausse de leur corrélation peut réduire le bénéfice de diversification attendu', 'iscorrect' => true],
                            ['answer' => 'La corrélation est toujours égale à zéro', 'iscorrect' => false],
                            ['answer' => 'Elle détermine uniquement les dividendes', 'iscorrect' => false],
                            ['answer' => 'Elle n’a aucun effet sur le risque global', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel risque est particulièrement important dans les marchés émergents ?',
                        'answers' => [
                            ['answer' => 'Des risques de liquidité, de change, politiques, réglementaires et macroéconomiques parfois plus élevés', 'iscorrect' => true],
                            ['answer' => 'L’absence totale de volatilité', 'iscorrect' => false],
                            ['answer' => 'La garantie des rendements', 'iscorrect' => false],
                            ['answer' => 'L’impossibilité de subir une crise', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les obligations souveraines de différents pays ne doivent-elles pas être considérées comme identiques ?',
                        'answers' => [
                            ['answer' => 'Elles présentent des risques de taux, de crédit souverain, de change et de politique monétaire différents', 'iscorrect' => true],
                            ['answer' => 'Toutes les banques centrales appliquent toujours la même politique', 'iscorrect' => false],
                            ['answer' => 'Toutes les devises ont le même comportement', 'iscorrect' => false],
                            ['answer' => 'Le risque souverain est toujours nul', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le principal intérêt d’intégrer des actifs réels dans un portefeuille ?',
                        'answers' => [
                            ['answer' => 'Ils peuvent fournir des sources de rendement et d’exposition différentes de celles des actifs financiers traditionnels', 'iscorrect' => true],
                            ['answer' => 'Ils garantissent toujours une protection contre l’inflation', 'iscorrect' => false],
                            ['answer' => 'Ils sont totalement indépendants de l’économie', 'iscorrect' => false],
                            ['answer' => 'Ils ne comportent jamais de risque de liquidité', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi l’inflation est-elle importante dans une allocation de portefeuille à long terme ?',
                        'answers' => [
                            ['answer' => 'Elle influence le pouvoir d’achat réel et peut modifier les performances relatives des différentes classes d’actifs', 'iscorrect' => true],
                            ['answer' => 'Elle n’a aucun effet sur les rendements réels', 'iscorrect' => false],
                            ['answer' => 'Elle affecte uniquement les actions technologiques', 'iscorrect' => false],
                            ['answer' => 'Elle garantit toujours une hausse des obligations', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Gestion institutionnelle et gouvernance',
                'questions' => [
                    [
                        'question' => 'Quel est le rôle d’un comité d’investissement institutionnel ?',
                        'answers' => [
                            ['answer' => 'Superviser la politique d’investissement, les risques, les décisions stratégiques et la gouvernance du portefeuille', 'iscorrect' => true],
                            ['answer' => 'Garantir les rendements annuels', 'iscorrect' => false],
                            ['answer' => 'Exécuter uniquement les transactions quotidiennes', 'iscorrect' => false],
                            ['answer' => 'Remplacer toutes les fonctions de contrôle', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la séparation des responsabilités est-elle importante dans la gestion institutionnelle ?',
                        'answers' => [
                            ['answer' => 'Elle réduit les conflits d’intérêts et améliore les mécanismes de contrôle', 'iscorrect' => true],
                            ['answer' => 'Elle garantit une surperformance', 'iscorrect' => false],
                            ['answer' => 'Elle élimine tous les risques de marché', 'iscorrect' => false],
                            ['answer' => 'Elle rend inutile la documentation', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce qu’un conflit d’intérêts dans la gestion de portefeuille ?',
                        'answers' => [
                            ['answer' => 'Une situation dans laquelle un intérêt personnel ou institutionnel peut influencer indûment une décision d’investissement', 'iscorrect' => true],
                            ['answer' => 'Une simple variation du cours d’une action', 'iscorrect' => false],
                            ['answer' => 'Une hausse de la volatilité', 'iscorrect' => false],
                            ['answer' => 'Une différence entre deux indices', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la traçabilité des décisions d’investissement est-elle importante ?',
                        'answers' => [
                            ['answer' => 'Elle permet de documenter les décisions, leur justification et leur conformité aux règles définies', 'iscorrect' => true],
                            ['answer' => 'Elle garantit la performance', 'iscorrect' => false],
                            ['answer' => 'Elle supprime les erreurs de marché', 'iscorrect' => false],
                            ['answer' => 'Elle rend les investissements sans risque', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est l’intérêt d’un benchmark stratégique bien défini ?',
                        'answers' => [
                            ['answer' => 'Il fournit une référence cohérente pour mesurer la performance et le risque du portefeuille', 'iscorrect' => true],
                            ['answer' => 'Il garantit que le portefeuille battra le marché', 'iscorrect' => false],
                            ['answer' => 'Il élimine les coûts de gestion', 'iscorrect' => false],
                            ['answer' => 'Il détermine automatiquement toutes les transactions', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les coûts de transaction doivent-ils être intégrés dans l’évaluation d’une stratégie ?',
                        'answers' => [
                            ['answer' => 'Ils réduisent la performance nette réellement obtenue par l’investisseur', 'iscorrect' => true],
                            ['answer' => 'Ils augmentent toujours le rendement net', 'iscorrect' => false],
                            ['answer' => 'Ils sont toujours négligeables', 'iscorrect' => false],
                            ['answer' => 'Ils ne concernent que les obligations', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce que le risque opérationnel d’un portefeuille ?',
                        'answers' => [
                            ['answer' => 'Le risque de pertes résultant de processus, systèmes, personnes ou événements opérationnels inadéquats', 'iscorrect' => true],
                            ['answer' => 'Uniquement le risque de baisse des actions', 'iscorrect' => false],
                            ['answer' => 'Le rendement inférieur au taux sans risque', 'iscorrect' => false],
                            ['answer' => 'Le risque lié exclusivement aux dividendes', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la gouvernance est-elle aussi importante que l’optimisation quantitative ?',
                        'answers' => [
                            ['answer' => 'Une bonne allocation doit pouvoir être mise en œuvre, contrôlée, expliquée et maintenue dans le cadre des responsabilités définies', 'iscorrect' => true],
                            ['answer' => 'Les modèles quantitatifs sont toujours inutiles', 'iscorrect' => false],
                            ['answer' => 'La gouvernance garantit les rendements', 'iscorrect' => false],
                            ['answer' => 'Les décisions institutionnelles ne comportent aucun risque', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est l’intérêt d’une procédure de rééquilibrage formalisée ?',
                        'answers' => [
                            ['answer' => 'Elle réduit l’influence des décisions émotionnelles et encadre le retour aux allocations cibles', 'iscorrect' => true],
                            ['answer' => 'Elle garantit le meilleur rendement possible', 'iscorrect' => false],
                            ['answer' => 'Elle élimine les coûts', 'iscorrect' => false],
                            ['answer' => 'Elle empêche tout changement de marché', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les investisseurs institutionnels utilisent-ils souvent plusieurs gestionnaires ?',
                        'answers' => [
                            ['answer' => 'Pour diversifier les styles, sources de rendement, risques de gestion et approches d’investissement', 'iscorrect' => true],
                            ['answer' => 'Pour garantir que tous les gestionnaires auront les mêmes résultats', 'iscorrect' => false],
                            ['answer' => 'Pour supprimer le risque systématique', 'iscorrect' => false],
                            ['answer' => 'Pour éviter toute analyse de performance', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Évaluation professionnelle et attribution de performance',
                'questions' => [
                    [
                        'question' => 'Quelle est la différence fondamentale entre performance absolue et performance relative ?',
                        'answers' => [
                            ['answer' => 'La performance relative mesure le résultat par rapport à une référence ou un objectif', 'iscorrect' => true],
                            ['answer' => 'La performance absolue est toujours supérieure à la performance relative', 'iscorrect' => false],
                            ['answer' => 'La performance relative ignore toujours les risques', 'iscorrect' => false],
                            ['answer' => 'Les deux notions sont identiques', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce que l’alpha dans une analyse de gestion active ?',
                        'answers' => [
                            ['answer' => 'Une mesure de performance excédentaire par rapport à ce qui est attendu compte tenu des expositions considérées', 'iscorrect' => true],
                            ['answer' => 'La volatilité totale', 'iscorrect' => false],
                            ['answer' => 'Le taux sans risque', 'iscorrect' => false],
                            ['answer' => 'Le nombre de positions', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi l’alpha doit-il être analysé conjointement avec les expositions factorielles ?',
                        'answers' => [
                            ['answer' => 'Une partie de la performance apparente peut provenir d’expositions systématiques plutôt que d’une véritable sélection idiosyncratique', 'iscorrect' => true],
                            ['answer' => 'Les facteurs n’ont jamais d’effet sur la performance', 'iscorrect' => false],
                            ['answer' => 'L’alpha est toujours garanti', 'iscorrect' => false],
                            ['answer' => 'Les facteurs remplacent les benchmarks', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce qu’un ratio d’information élevé peut suggérer ?',
                        'answers' => [
                            ['answer' => 'Une bonne capacité à générer de la performance active relativement au risque actif pris', 'iscorrect' => true],
                            ['answer' => 'Une absence totale de risque', 'iscorrect' => false],
                            ['answer' => 'Une garantie de surperformance future', 'iscorrect' => false],
                            ['answer' => 'Une volatilité nécessairement nulle', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une faible tracking error n’implique-t-elle pas nécessairement une mauvaise gestion ?',
                        'answers' => [
                            ['answer' => 'Une stratégie peut volontairement maintenir une faible déviation par rapport au benchmark pour contrôler le risque actif', 'iscorrect' => true],
                            ['answer' => 'Une faible tracking error garantit toujours une surperformance', 'iscorrect' => false],
                            ['answer' => 'Le benchmark n’a aucune importance', 'iscorrect' => false],
                            ['answer' => 'La tracking error mesure uniquement les frais', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi le portefeuille doit-il être comparé à un benchmark approprié ?',
                        'answers' => [
                            ['answer' => 'Parce que la pertinence de la comparaison dépend de l’univers, du style, des contraintes et de l’objectif de la stratégie', 'iscorrect' => true],
                            ['answer' => 'Parce que tous les benchmarks sont équivalents', 'iscorrect' => false],
                            ['answer' => 'Parce qu’un benchmark garantit le rendement', 'iscorrect' => false],
                            ['answer' => 'Parce que les benchmarks éliminent le risque', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce que le biais de survivant dans l’évaluation de performance ?',
                        'answers' => [
                            ['answer' => 'Le fait d’analyser uniquement les fonds ou entreprises ayant survécu, ce qui peut surestimer les performances historiques', 'iscorrect' => true],
                            ['answer' => 'Une méthode pour éliminer tous les biais', 'iscorrect' => false],
                            ['answer' => 'Une mesure du bêta', 'iscorrect' => false],
                            ['answer' => 'Une mesure des frais', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce que le biais de look-ahead ?',
                        'answers' => [
                            ['answer' => 'L’utilisation involontaire d’informations qui n’étaient pas disponibles au moment où la décision aurait été prise', 'iscorrect' => true],
                            ['answer' => 'Une méthode de couverture', 'iscorrect' => false],
                            ['answer' => 'Une mesure de volatilité', 'iscorrect' => false],
                            ['answer' => 'Une technique de diversification', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi le backtest doit-il intégrer des coûts réalistes ?',
                        'answers' => [
                            ['answer' => 'Une stratégie très rentable avant coûts peut devenir peu attractive après commissions, spreads et impact de marché', 'iscorrect' => true],
                            ['answer' => 'Les coûts n’affectent jamais la performance', 'iscorrect' => false],
                            ['answer' => 'Les coûts sont toujours négatifs pour le portefeuille', 'iscorrect' => false],
                            ['answer' => 'Le backtest doit ignorer la réalité opérationnelle', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle est une bonne pratique pour valider une stratégie quantitative ?',
                        'answers' => [
                            ['answer' => 'Utiliser des données hors échantillon et tester la robustesse de la stratégie sous différents scénarios', 'iscorrect' => true],
                            ['answer' => 'Optimiser jusqu’à obtenir le meilleur résultat historique possible', 'iscorrect' => false],
                            ['answer' => 'Utiliser uniquement la période la plus favorable', 'iscorrect' => false],
                            ['answer' => 'Ignorer les coûts et contraintes', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Construction de portefeuille et gestion de crise',
                'questions' => [
                    [
                        'question' => 'Quel principe est essentiel lors de la construction d’un portefeuille professionnel ?',
                        'answers' => [
                            ['answer' => 'Relier chaque exposition à un objectif, une source de risque et une justification d’investissement', 'iscorrect' => true],
                            ['answer' => 'Détenir le plus grand nombre possible de titres sans analyse', 'iscorrect' => false],
                            ['answer' => 'Maximiser uniquement la volatilité', 'iscorrect' => false],
                            ['answer' => 'Ignorer les contraintes de liquidité', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une diversification par nombre de titres peut-elle être insuffisante ?',
                        'answers' => [
                            ['answer' => 'Des titres nombreux peuvent être exposés aux mêmes facteurs et donc rester fortement dépendants les uns des autres', 'iscorrect' => true],
                            ['answer' => 'Plus de titres supprime toujours le risque', 'iscorrect' => false],
                            ['answer' => 'Le nombre de titres n’a jamais aucun effet', 'iscorrect' => false],
                            ['answer' => 'La diversification ne concerne que les obligations', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce qu’une concentration cachée ?',
                        'answers' => [
                            ['answer' => 'Une exposition importante à un même facteur économique malgré une apparente diversification entre plusieurs positions', 'iscorrect' => true],
                            ['answer' => 'Une position entièrement en liquidités', 'iscorrect' => false],
                            ['answer' => 'Une absence totale de corrélation', 'iscorrect' => false],
                            ['answer' => 'Une stratégie sans risque', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la gestion de crise doit-elle prévoir des règles avant l’apparition d’un choc ?',
                        'answers' => [
                            ['answer' => 'Des règles préétablies peuvent réduire les décisions émotionnelles et accélérer la réaction face à un événement extrême', 'iscorrect' => true],
                            ['answer' => 'Les crises sont toujours prévisibles', 'iscorrect' => false],
                            ['answer' => 'Les règles garantissent un rendement positif', 'iscorrect' => false],
                            ['answer' => 'Les marchés ne réagissent jamais rapidement', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi conserver une réserve de liquidité peut-elle être stratégique ?',
                        'answers' => [
                            ['answer' => 'Elle peut permettre de répondre aux besoins de trésorerie et de saisir des opportunités sans vendre des actifs dans de mauvaises conditions', 'iscorrect' => true],
                            ['answer' => 'Elle garantit une performance supérieure aux actions', 'iscorrect' => false],
                            ['answer' => 'Elle supprime toute inflation', 'iscorrect' => false],
                            ['answer' => 'Elle rend le portefeuille sans risque', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel risque apparaît lorsqu’un portefeuille doit vendre rapidement des actifs illiquides ?',
                        'answers' => [
                            ['answer' => 'Un impact de marché important et une perte potentiellement supérieure à l’estimation initiale', 'iscorrect' => true],
                            ['answer' => 'Une hausse garantie du prix de vente', 'iscorrect' => false],
                            ['answer' => 'Une absence de coûts de transaction', 'iscorrect' => false],
                            ['answer' => 'Une diminution automatique du risque', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les limites de perte peuvent-elles être utiles dans une gestion professionnelle ?',
                        'answers' => [
                            ['answer' => 'Elles peuvent empêcher qu’une exposition individuelle compromette excessivement le portefeuille global', 'iscorrect' => true],
                            ['answer' => 'Elles garantissent qu’aucune perte ne surviendra', 'iscorrect' => false],
                            ['answer' => 'Elles augmentent toujours le rendement', 'iscorrect' => false],
                            ['answer' => 'Elles rendent inutile le suivi du marché', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le risque d’un désendettement forcé pendant une crise ?',
                        'answers' => [
                            ['answer' => 'La vente contrainte peut amplifier les pertes et réduire la capacité à attendre une normalisation des marchés', 'iscorrect' => true],
                            ['answer' => 'Il garantit une meilleure valorisation', 'iscorrect' => false],
                            ['answer' => 'Il supprime toujours le risque de marché', 'iscorrect' => false],
                            ['answer' => 'Il améliore nécessairement la liquidité du portefeuille', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi le levier financier peut-il amplifier les risques d’un portefeuille ?',
                        'answers' => [
                            ['answer' => 'Une petite variation défavorable des actifs peut produire une variation beaucoup plus importante des fonds propres', 'iscorrect' => true],
                            ['answer' => 'Le levier élimine les pertes', 'iscorrect' => false],
                            ['answer' => 'Le levier réduit toujours la volatilité', 'iscorrect' => false],
                            ['answer' => 'Le levier garantit un rendement positif', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle approche est la plus robuste face à un événement de marché imprévu ?',
                        'answers' => [
                            ['answer' => 'Combiner diversification, liquidité, limites de risque, scénarios de stress et gouvernance claire', 'iscorrect' => true],
                            ['answer' => 'Concentrer tout le portefeuille sur une seule conviction', 'iscorrect' => false],
                            ['answer' => 'Ignorer les scénarios extrêmes', 'iscorrect' => false],
                            ['answer' => 'Augmenter systématiquement le levier', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Études de cas de gestion de portefeuille',
                'questions' => [
                    [
                        'question' => 'Un portefeuille possède un rendement élevé mais une volatilité deux fois supérieure à celle de son benchmark. Quelle analyse est prioritaire ?',
                        'answers' => [
                            ['answer' => 'Évaluer si la surperformance compense réellement le risque supplémentaire pris', 'iscorrect' => true],
                            ['answer' => 'Conclure immédiatement que la stratégie est supérieure', 'iscorrect' => false],
                            ['answer' => 'Ignorer la volatilité', 'iscorrect' => false],
                            ['answer' => 'Comparer uniquement les dividendes', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Un portefeuille est très diversifié en titres mais fortement exposé au secteur technologique. Quel risque faut-il examiner ?',
                        'answers' => [
                            ['answer' => 'Le risque de concentration sectorielle', 'iscorrect' => true],
                            ['answer' => 'L’absence totale de risque', 'iscorrect' => false],
                            ['answer' => 'Le risque de coupon uniquement', 'iscorrect' => false],
                            ['answer' => 'Le risque que tous les titres deviennent obligataires', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Un modèle recommande une pondération de 40 % dans un seul actif alors que l’équipe estime les paramètres très incertains. Quelle réponse professionnelle est la plus appropriée ?',
                        'answers' => [
                            ['answer' => 'Tester la sensibilité, appliquer des contraintes ou utiliser une méthode plus robuste avant de mettre en œuvre la position', 'iscorrect' => true],
                            ['answer' => 'Appliquer automatiquement la recommandation', 'iscorrect' => false],
                            ['answer' => 'Ignorer totalement le modèle', 'iscorrect' => false],
                            ['answer' => 'Augmenter la pondération à 60 %', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Un fonds surperforme fortement pendant trois mois grâce à une exposition non prévue au facteur momentum. Que faut-il examiner ?',
                        'answers' => [
                            ['answer' => 'La contribution du facteur à la performance et si cette exposition était cohérente avec le mandat', 'iscorrect' => true],
                            ['answer' => 'Conclure que la sélection de titres est forcément excellente', 'iscorrect' => false],
                            ['answer' => 'Ignorer l’exposition factorielle', 'iscorrect' => false],
                            ['answer' => 'Doubler automatiquement toutes les positions', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Un investisseur long terme subit une baisse temporaire de 20 % mais ses engagements ne changent pas. Quelle décision doit être évitée sans analyse ?',
                        'answers' => [
                            ['answer' => 'Vendre immédiatement tous les actifs risqués uniquement sous l’effet de la baisse', 'iscorrect' => true],
                            ['answer' => 'Réévaluer les hypothèses et le profil de risque', 'iscorrect' => false],
                            ['answer' => 'Analyser les besoins de liquidité', 'iscorrect' => false],
                            ['answer' => 'Vérifier la cohérence avec la politique d’investissement', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Un portefeuille obligataire possède une duration élevée avant une période de hausse attendue des taux. Quel risque doit être examiné en priorité ?',
                        'answers' => [
                            ['answer' => 'La sensibilité importante du portefeuille aux variations des taux d’intérêt', 'iscorrect' => true],
                            ['answer' => 'Le risque que les actions deviennent plus liquides', 'iscorrect' => false],
                            ['answer' => 'Le risque de dividende uniquement', 'iscorrect' => false],
                            ['answer' => 'L’absence totale de risque de taux', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Une stratégie semble excellente en backtest mais effectue énormément de transactions. Quelle vérification est essentielle ?',
                        'answers' => [
                            ['answer' => 'Tester sa performance après coûts de transaction, spreads, impact de marché et contraintes de capacité', 'iscorrect' => true],
                            ['answer' => 'Supprimer les coûts du modèle', 'iscorrect' => false],
                            ['answer' => 'Augmenter le nombre de transactions', 'iscorrect' => false],
                            ['answer' => 'Conclure que le backtest garantit les résultats futurs', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Un gestionnaire bat son benchmark mais avec une tracking error très élevée. Quelle conclusion est la plus prudente ?',
                        'answers' => [
                            ['answer' => 'La surperformance doit être évaluée en relation avec le niveau de risque actif pris', 'iscorrect' => true],
                            ['answer' => 'Le gestionnaire est nécessairement excellent', 'iscorrect' => false],
                            ['answer' => 'La tracking error n’a aucune importance', 'iscorrect' => false],
                            ['answer' => 'Le benchmark doit automatiquement être supprimé', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Un portefeuille international gagne 8 % dans sa devise locale mais perd 3 % pour l’investisseur après conversion. Quelle explication est plausible ?',
                        'answers' => [
                            ['answer' => 'Une évolution défavorable du taux de change a réduit le rendement exprimé dans la devise de référence', 'iscorrect' => true],
                            ['answer' => 'Le rendement local était nécessairement faux', 'iscorrect' => false],
                            ['answer' => 'Le portefeuille n’avait aucun actif', 'iscorrect' => false],
                            ['answer' => 'Le change ne peut jamais modifier un rendement', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Un comité constate qu’une stratégie a une excellente performance historique mais dépend fortement d’une hypothèse économique fragile. Quelle décision est la plus professionnelle ?',
                        'answers' => [
                            ['answer' => 'Tester la robustesse de la stratégie sous des hypothèses alternatives avant d’augmenter son allocation', 'iscorrect' => true],
                            ['answer' => 'Augmenter immédiatement l’allocation', 'iscorrect' => false],
                            ['answer' => 'Ignorer le risque de modèle', 'iscorrect' => false],
                            ['answer' => 'Supprimer toute diversification', 'iscorrect' => false],
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

                // L’ordre des réponses est volontairement randomisé.
                // La bonne réponse n’est donc pas systématiquement en première position.
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
