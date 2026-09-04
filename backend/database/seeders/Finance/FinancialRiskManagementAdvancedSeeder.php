```php
<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Major;
use App\Models\Subject;
use App\Models\Quiz;
use App\Models\Question;
use App\Models\Answer;

class FinancialRiskManagementAdvancedSeeder extends Seeder
{
    public function run(): void
    {
        $major = Major::where('slug', 'finance')->firstOrFail();

        $subject = Subject::where('major_id', $major->id)
            ->where('slug', 'financial-risk-management')
            ->firstOrFail();

        $quizzes = [
            [
                'title' => 'Modélisation avancée du risque de crédit',
                'questions' => [
                    [
                        'q' => 'Dans un modèle de risque de crédit, que représente principalement la probabilité de défaut (PD) ?',
                        'a' => [
                            ['v' => 'La probabilité qu’une contrepartie fasse défaut sur un horizon donné', 'c' => true],
                            ['v' => 'Le montant récupéré après un défaut', 'c' => false],
                            ['v' => 'Le montant total de l’exposition', 'c' => false],
                            ['v' => 'La volatilité du taux de change', 'c' => false],
                        ],
                    ],
                    [
                        'q' => 'Comment définit-on généralement la perte en cas de défaut (LGD) ?',
                        'a' => [
                            ['v' => 'La proportion de l’exposition qui n’est pas récupérée après le défaut', 'c' => true],
                            ['v' => 'La probabilité annuelle de défaut', 'c' => false],
                            ['v' => 'Le montant nominal avant défaut', 'c' => false],
                            ['v' => 'Le taux de croissance du portefeuille', 'c' => false],
                        ],
                    ],
                    [
                        'q' => 'Quel est le rôle de l’exposition au défaut (EAD) dans une estimation de perte de crédit ?',
                        'a' => [
                            ['v' => 'Elle mesure le montant exposé au moment pertinent du défaut', 'c' => true],
                            ['v' => 'Elle mesure uniquement le montant récupéré', 'c' => false],
                            ['v' => 'Elle représente uniquement la PD', 'c' => false],
                            ['v' => 'Elle mesure la volatilité du portefeuille', 'c' => false],
                        ],
                    ],
                    [
                        'q' => 'Dans une approche simplifiée, quelle relation représente la perte de crédit attendue ?',
                        'a' => [
                            ['v' => 'EL = PD × LGD × EAD', 'c' => true],
                            ['v' => 'EL = PD + LGD + EAD', 'c' => false],
                            ['v' => 'EL = PD ÷ LGD × EAD', 'c' => false],
                            ['v' => 'EL = EAD − PD − LGD', 'c' => false],
                        ],
                    ],
                    [
                        'q' => 'Pourquoi la corrélation entre défauts est-elle importante dans un portefeuille de crédit ?',
                        'a' => [
                            ['v' => 'Des défauts fortement corrélés peuvent provoquer des pertes simultanées et importantes', 'c' => true],
                            ['v' => 'Elle garantit une diversification parfaite', 'c' => false],
                            ['v' => 'Elle élimine le risque systématique', 'c' => false],
                            ['v' => 'Elle rend la PD identique pour toutes les contreparties', 'c' => false],
                        ],
                    ],
                    [
                        'q' => 'Quel problème peut apparaître lorsqu’un modèle de crédit est calibré uniquement sur une période économique favorable ?',
                        'a' => [
                            ['v' => 'Une sous-estimation du risque en période de stress', 'c' => true],
                            ['v' => 'Une surestimation systématique de toutes les pertes', 'c' => false],
                            ['v' => 'La disparition du risque de modèle', 'c' => false],
                            ['v' => 'Une impossibilité de calculer l’EAD', 'c' => false],
                        ],
                    ],
                    [
                        'q' => 'Pourquoi les matrices de migration de notation sont-elles utiles ?',
                        'a' => [
                            ['v' => 'Elles permettent d’étudier les probabilités de changement de qualité de crédit entre différentes catégories', 'c' => true],
                            ['v' => 'Elles mesurent uniquement la liquidité', 'c' => false],
                            ['v' => 'Elles garantissent les notations futures', 'c' => false],
                            ['v' => 'Elles remplacent les états financiers', 'c' => false],
                        ],
                    ],
                    [
                        'q' => 'Quel est le principal danger d’une forte concentration sectorielle dans un portefeuille de crédit ?',
                        'a' => [
                            ['v' => 'Un choc sectoriel peut provoquer simultanément une détérioration de nombreuses contreparties', 'c' => true],
                            ['v' => 'Elle garantit des pertes indépendantes', 'c' => false],
                            ['v' => 'Elle supprime le risque macroéconomique', 'c' => false],
                            ['v' => 'Elle empêche toute migration de notation', 'c' => false],
                        ],
                    ],
                    [
                        'q' => 'Quel indicateur peut compléter une analyse de concentration du risque de crédit ?',
                        'a' => [
                            ['v' => 'La concentration des expositions par contrepartie, secteur, région ou notation', 'c' => true],
                            ['v' => 'Le nombre de factures imprimées', 'c' => false],
                            ['v' => 'Le taux de rotation des employés uniquement', 'c' => false],
                            ['v' => 'Le montant des dividendes historiques', 'c' => false],
                        ],
                    ],
                    [
                        'q' => 'Pourquoi les modèles de risque de crédit doivent-ils être soumis à une validation indépendante ?',
                        'a' => [
                            ['v' => 'Pour identifier les erreurs de conception, de données, de calibration ou d’utilisation', 'c' => true],
                            ['v' => 'Pour garantir que le modèle ne produira jamais de perte', 'c' => false],
                            ['v' => 'Pour remplacer les contrôles internes', 'c' => false],
                            ['v' => 'Pour supprimer les hypothèses du modèle', 'c' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Value at Risk et mesures de risque de marché',
                'questions' => [
                    [
                        'q' => 'Que cherche à mesurer la Value at Risk (VaR) ?',
                        'a' => [
                            ['v' => 'Une perte potentielle à un niveau de confiance donné sur un horizon donné', 'c' => true],
                            ['v' => 'La perte maximale certaine dans toutes les circonstances', 'c' => false],
                            ['v' => 'Le bénéfice futur garanti', 'c' => false],
                            ['v' => 'La probabilité exacte de faillite', 'c' => false],
                        ],
                    ],
                    [
                        'q' => 'Que signifie une VaR quotidienne de 5 millions d’euros à 99 % ?',
                        'a' => [
                            ['v' => 'Sous les hypothèses du modèle, la perte quotidienne devrait dépasser 5 millions dans environ 1 % des cas', 'c' => true],
                            ['v' => 'La perte sera toujours exactement de 5 millions', 'c' => false],
                            ['v' => 'La probabilité de perte est de 99 %', 'c' => false],
                            ['v' => 'Le portefeuille gagnera 5 millions dans 99 % des cas', 'c' => false],
                        ],
                    ],
                    [
                        'q' => 'Quelle est une limite fondamentale de la VaR ?',
                        'a' => [
                            ['v' => 'Elle décrit imparfaitement la gravité des pertes au-delà du seuil de VaR', 'c' => true],
                            ['v' => 'Elle ne peut jamais être calculée', 'c' => false],
                            ['v' => 'Elle mesure uniquement le risque de crédit', 'c' => false],
                            ['v' => 'Elle garantit la normalité des rendements', 'c' => false],
                        ],
                    ],
                    [
                        'q' => 'Quel avantage présente la simulation historique pour le calcul de la VaR ?',
                        'a' => [
                            ['v' => 'Elle peut utiliser directement la distribution historique des variations observées sans imposer une loi paramétrique particulière', 'c' => true],
                            ['v' => 'Elle élimine le risque de modèle', 'c' => false],
                            ['v' => 'Elle prédit exactement les crises futures', 'c' => false],
                            ['v' => 'Elle ne nécessite aucune donnée historique', 'c' => false],
                        ],
                    ],
                    [
                        'q' => 'Quel est le principe de la VaR paramétrique ?',
                        'a' => [
                            ['v' => 'Elle repose sur une modélisation statistique des facteurs de risque et de leurs distributions', 'c' => true],
                            ['v' => 'Elle ignore entièrement les volatilités', 'c' => false],
                            ['v' => 'Elle utilise exclusivement des scénarios historiques identiques', 'c' => false],
                            ['v' => 'Elle ne nécessite aucun portefeuille', 'c' => false],
                        ],
                    ],
                    [
                        'q' => 'Pourquoi l’hypothèse de normalité peut-elle être problématique pour certains marchés ?',
                        'a' => [
                            ['v' => 'Les rendements financiers peuvent présenter des queues épaisses, de l’asymétrie et des événements extrêmes', 'c' => true],
                            ['v' => 'La normalité interdit toute volatilité', 'c' => false],
                            ['v' => 'Les rendements financiers sont toujours uniformes', 'c' => false],
                            ['v' => 'La normalité empêche tout calcul de covariance', 'c' => false],
                        ],
                    ],
                    [
                        'q' => 'Qu’est-ce que l’Expected Shortfall apporte par rapport à la VaR ?',
                        'a' => [
                            ['v' => 'Il mesure la perte moyenne conditionnelle dans la partie de la distribution située au-delà du seuil de VaR', 'c' => true],
                            ['v' => 'Il ignore les pertes extrêmes', 'c' => false],
                            ['v' => 'Il mesure uniquement les gains', 'c' => false],
                            ['v' => 'Il remplace toute analyse de scénario', 'c' => false],
                        ],
                    ],
                    [
                        'q' => 'Pourquoi le backtesting de la VaR est-il nécessaire ?',
                        'a' => [
                            ['v' => 'Pour comparer les pertes réellement observées aux prévisions du modèle et détecter les insuffisances', 'c' => true],
                            ['v' => 'Pour garantir que les pertes futures seront nulles', 'c' => false],
                            ['v' => 'Pour supprimer la volatilité du portefeuille', 'c' => false],
                            ['v' => 'Pour calculer les dividendes', 'c' => false],
                        ],
                    ],
                    [
                        'q' => 'Que peut indiquer un nombre excessif d’exceptions lors du backtesting ?',
                        'a' => [
                            ['v' => 'Une sous-estimation du risque par le modèle', 'c' => true],
                            ['v' => 'Une preuve que le modèle est parfaitement calibré', 'c' => false],
                            ['v' => 'Une absence totale de volatilité', 'c' => false],
                            ['v' => 'Une baisse automatique des taux', 'c' => false],
                        ],
                    ],
                    [
                        'q' => 'Pourquoi une VaR doit-elle être complétée par des stress tests ?',
                        'a' => [
                            ['v' => 'Les stress tests permettent d’examiner des scénarios extrêmes qui peuvent être mal représentés par les statistiques historiques', 'c' => true],
                            ['v' => 'La VaR et les stress tests mesurent exactement la même chose', 'c' => false],
                            ['v' => 'Les stress tests éliminent toute incertitude', 'c' => false],
                            ['v' => 'La VaR ne concerne jamais les portefeuilles', 'c' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Gestion avancée du risque de liquidité',
                'questions' => [
                    [
                        'q' => 'Pourquoi le risque de liquidité peut-il devenir systémique pendant une crise ?',
                        'a' => [
                            ['v' => 'Les ventes forcées et le retrait simultané de financements peuvent se renforcer mutuellement entre acteurs', 'c' => true],
                            ['v' => 'La liquidité augmente automatiquement pendant les crises', 'c' => false],
                            ['v' => 'Les marchés deviennent toujours plus profonds', 'c' => false],
                            ['v' => 'Les besoins de financement disparaissent', 'c' => false],
                        ],
                    ],
                    [
                        'q' => 'Qu’est-ce qu’un liquidity buffer ?',
                        'a' => [
                            ['v' => 'Un stock d’actifs liquides ou de ressources disponibles destiné à absorber des sorties de trésorerie', 'c' => true],
                            ['v' => 'Un portefeuille exclusivement investi en actifs illiquides', 'c' => false],
                            ['v' => 'Une dette arrivée à échéance', 'c' => false],
                            ['v' => 'Un compte de résultat', 'c' => false],
                        ],
                    ],
                    [
                        'q' => 'Pourquoi les actifs considérés comme liquides en période normale peuvent-ils devenir difficiles à vendre en crise ?',
                        'a' => [
                            ['v' => 'La profondeur du marché peut diminuer et les écarts acheteur-vendeur peuvent fortement augmenter', 'c' => true],
                            ['v' => 'Les prix deviennent toujours fixes', 'c' => false],
                            ['v' => 'Les acheteurs deviennent automatiquement plus nombreux', 'c' => false],
                            ['v' => 'Les marchés garantissent toujours les prix historiques', 'c' => false],
                        ],
                    ],
                    [
                        'q' => 'Quel indicateur est utile pour analyser les écarts de liquidité entre entrées et sorties de trésorerie ?',
                        'a' => [
                            ['v' => 'Le gap de liquidité par échéance', 'c' => true],
                            ['v' => 'Le taux de marge brute uniquement', 'c' => false],
                            ['v' => 'Le nombre de fournisseurs', 'c' => false],
                            ['v' => 'Le taux de rotation des immobilisations', 'c' => false],
                        ],
                    ],
                    [
                        'q' => 'Pourquoi les comportements des clients doivent-ils être intégrés aux projections de liquidité ?',
                        'a' => [
                            ['v' => Les retraits, renouvellements ou remboursements anticipés peuvent différer des hypothèses contractuelles', 'c' => true],
                            ['v' => 'Les clients n’influencent jamais les flux de trésorerie', 'c' => false],
                            ['v' => 'Les comportements sont toujours parfaitement prévisibles', 'c' => false],
                            ['v' => 'Ils ne concernent que le risque de marché', 'c' => false],
                        ],
                    ],
                    [
                        'q' => 'Quel est le risque associé à une dépendance excessive à un marché de financement unique ?',
                        'a' => [
                            ['v' => 'Une fermeture ou un durcissement de ce marché peut provoquer une crise de refinancement', 'c' => true],
                            ['v' => 'Une amélioration automatique du coût de financement', 'c' => false],
                            ['v' => 'Une diversification accrue', 'c' => false],
                            ['v' => 'Une réduction certaine des besoins de liquidité', 'c' => false],
                        ],
                    ],
                    [
                        'q' => 'Pourquoi les lignes de crédit confirmées peuvent-elles être importantes dans un plan de liquidité ?',
                        'a' => [
                            ['v' => 'Elles peuvent fournir une capacité de financement disponible sous certaines conditions', 'c' => true],
                            ['v' => 'Elles garantissent toujours un financement illimité', 'c' => false],
                            ['v' => 'Elles éliminent tout risque de marché', 'c' => false],
                            ['v' => 'Elles remplacent les actifs liquides', 'c' => false],
                        ],
                    ],
                    [
                        'q' => 'Quel effet une décote importante sur les actifs liquides peut-elle avoir ?',
                        'a' => [
                            ['v' => 'Elle réduit la capacité réelle de financement obtenue en mobilisant ces actifs', 'c' => true],
                            ['v' => 'Elle augmente automatiquement leur valeur', 'c' => false],
                            ['v' => 'Elle élimine le risque de liquidité', 'c' => false],
                            ['v' => 'Elle garantit une marge supplémentaire', 'c' => false],
                        ],
                    ],
                    [
                        'q' => 'Pourquoi un plan de financement d’urgence doit-il définir des actions concrètes ?',
                        'a' => [
                            ['v' => 'Une crise exige des décisions rapides sur les sources de liquidité, les actifs mobilisables et les priorités de paiement', 'c' => true],
                            ['v' => 'Les crises permettent toujours de décider sans préparation', 'c' => false],
                            ['v' => 'La préparation réduit nécessairement les liquidités', 'c' => false],
                            ['v' => 'Un plan ne doit contenir aucune responsabilité', 'c' => false],
                        ],
                    ],
                    [
                        'q' => 'Quel risque apparaît lorsqu’une entreprise finance des actifs longs avec des ressources très courtes ?',
                        'a' => [
                            ['v' => 'Un risque de transformation et de refinancement élevé', 'c' => true],
                            ['v' => 'Une couverture naturelle parfaite', 'c' => false],
                            ['v' => 'Une absence de risque de liquidité', 'c' => false],
                            ['v' => 'Une diminution certaine des coûts', 'c' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Risque de taux et stratégies de couverture',
                'questions' => [
                    [
                        'q' => 'Quel est l’effet d’une hausse des taux sur la valeur actuelle des flux fixes futurs ?',
                        'a' => [
                            ['v' => 'Elle tend à réduire leur valeur actuelle', 'c' => true],
                            ['v' => 'Elle augmente toujours leur valeur actuelle', 'c' => false],
                            ['v' => 'Elle ne change jamais leur valeur', 'c' => false],
                            ['v' => 'Elle rend tous les flux nuls', 'c' => false],
                        ],
                    ],
                    [
                        'q' => 'Pourquoi la duration modifiée est-elle utile dans la gestion du risque de taux ?',
                        'a' => [
                            ['v' => 'Elle fournit une approximation de la variation relative du prix d’une obligation pour une variation des taux', 'c' => true],
                            ['v' => 'Elle mesure directement la PD', 'c' => false],
                            ['v' => 'Elle mesure le risque opérationnel', 'c' => false],
                            ['v' => 'Elle garantit un rendement futur', 'c' => false],
                        ],
                    ],
                    [
                        'q' => 'Quel est l’objectif d’un swap payeur fixe et receveur variable pour une entreprise ayant une dette à taux variable ?',
                        'a' => [
                            ['v' => 'Réduire l’exposition à une hausse des taux en échangeant des flux variables contre des flux fixes', 'c' => true],
                            ['v' => 'Augmenter volontairement toute exposition variable', 'c' => false],
                            ['v' => 'Supprimer la dette principale', 'c' => false],
                            ['v' => 'Transformer la dette en capitaux propres', 'c' => false],
                        ],
                    ],
                    [
                        'q' => 'Quel risque subsiste avec une couverture de taux imparfaite ?',
                        'a' => [
                            ['v' => 'Le risque de base, de volume ou de décalage entre l’exposition et l’instrument de couverture', 'c' => true],
                            ['v' => 'Aucun risque', 'c' => false],
                            ['v' => Uniquement le risque de fraude', 'c' => false],
                            ['v' => 'Le risque de disparition du marché', 'c' => false],
                        ],
                    ],
                    [
                        'q' => 'Pourquoi la convexité est-elle pertinente dans l’analyse obligataire avancée ?',
                        'a' => [
                            ['v' => 'Elle améliore l’approximation de la variation du prix lorsque les mouvements de taux deviennent plus importants', 'c' => true],
                            ['v' => 'Elle mesure directement le défaut', 'c' => false],
                            ['v' => 'Elle remplace la duration dans tous les cas', 'c' => false],
                            ['v' => 'Elle mesure uniquement la liquidité', 'c' => false],
                        ],
                    ],
                    [
                        'q' => 'Qu’est-ce qu’un risque de repricing ?',
                        'a' => [
                            ['v' => 'Le risque que les actifs et passifs révisent leurs taux à des moments différents', 'c' => true],
                            ['v' => 'Le risque que les actions soient radiées', 'c' => false],
                            ['v' => 'Le risque de défaut uniquement', 'c' => false],
                            ['v' => 'Le risque de fraude comptable', 'c' => false],
                        ],
                    ],
                    [
                        'q' => 'Pourquoi une couverture dynamique doit-elle être réajustée régulièrement ?',
                        'a' => [
                            ['v' => 'Parce que la taille et la sensibilité de l’exposition peuvent évoluer avec les marchés et les flux', 'c' => true],
                            ['v' => 'Parce que les instruments expirent toujours immédiatement', 'c' => false],
                            ['v' => 'Parce que les taux ne changent jamais', 'c' => false],
                            ['v' => 'Pour augmenter systématiquement le risque', 'c' => false],
                        ],
                    ],
                    [
                        'q' => 'Quel est le principal avantage d’une option de taux par rapport à une obligation ferme de couverture ?',
                        'a' => [
                            ['v' => 'Elle peut protéger contre un mouvement défavorable tout en laissant bénéficier d’un mouvement favorable, moyennant un coût', 'c' => true],
                            ['v' => 'Elle est toujours gratuite', 'c' => false],
                            ['v' => 'Elle garantit tous les taux futurs', 'c' => false],
                            ['v' => 'Elle supprime le risque de crédit', 'c' => false],
                        ],
                    ],
                    [
                        'q' => 'Pourquoi les courbes de taux sont-elles importantes pour l’évaluation du risque ?',
                        'a' => [
                            ['v' => 'Elles déterminent les taux utilisés pour actualiser différents flux selon leur maturité', 'c' => true],
                            ['v' => 'Elles mesurent uniquement le risque opérationnel', 'c' => false],
                            ['v' => 'Elles garantissent les prix futurs', 'c' => false],
                            ['v' => 'Elles remplacent les états financiers', 'c' => false],
                        ],
                    ],
                    [
                        'q' => 'Quel phénomène peut rendre une couverture de taux plus complexe qu’un simple déplacement parallèle de la courbe ?',
                        'a' => [
                            ['v' => 'Une modification de pente ou de courbure de la courbe des taux', 'c' => true],
                            ['v' => 'Une absence totale de variation', 'c' => false],
                            ['v' => 'Une disparition de tous les taux', 'c' => false],
                            ['v' => 'Une stabilité parfaite de toutes les maturités', 'c' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Risque de change avancé et dérivés',
                'questions' => [
                    [
                        'q' => 'Quelle différence existe entre exposition transactionnelle et exposition de translation ?',
                        'a' => [
                            ['v' => 'La première concerne des flux contractuels futurs tandis que la seconde concerne notamment la conversion des états financiers d’entités étrangères', 'c' => true],
                            ['v' => 'Les deux sont strictement identiques', 'c' => false],
                            ['v' => 'La translation concerne uniquement les taux d’intérêt', 'c' => false],
                            ['v' => 'La transactionnelle concerne uniquement les stocks physiques', 'c' => false],
                        ],
                    ],
                    [
                        'q' => 'Quel est l’intérêt d’un contrat forward de change ?',
                        'a' => [
                            ['v' => 'Fixer aujourd’hui un taux de change applicable à une transaction future', 'c' => true],
                            ['v' => 'Garantir un profit sans exposition', 'c' => false],
                            ['v' => 'Supprimer toutes les fluctuations économiques', 'c' => false],
                            ['v' => 'Éliminer le risque de contrepartie dans tous les cas', 'c' => false],
                        ],
                    ],
                    [
                        'q' => 'Pourquoi une option de change peut-elle être plus coûteuse qu’un forward ?',
                        'a' => [
                            ['v' => 'Elle fournit une asymétrie de paiement et un droit d’exécution qui possède une valeur', 'c' => true],
                            ['v' => 'Elle ne possède jamais de valeur', 'c' => false],
                            ['v' => 'Elle garantit toujours un profit', 'c' => false],
                            ['v' => 'Elle nécessite obligatoirement deux devises physiques', 'c' => false],
                        ],
                    ],
                    [
                        'q' => 'Quel facteur influence fortement la valeur d’une option de change ?',
                        'a' => [
                            ['v' => 'La volatilité anticipée du taux de change', 'c' => true],
                            ['v' => 'Le nombre de salariés de l’entreprise', 'c' => false],
                            ['v' => 'Le montant des immobilisations comptables uniquement', 'c' => false],
                            ['v' => 'Le nombre de factures émises', 'c' => false],
                        ],
                    ],
                    [
                        'q' => 'Quel est l’intérêt d’une couverture naturelle en devises ?',
                        'a' => [
                            ['v' => 'Elle réduit l’exposition nette en faisant correspondre les recettes et les dépenses dans une même devise', 'c' => true],
                            ['v' => 'Elle garantit un taux de change fixe', 'c' => false],
                            ['v' => 'Elle supprime tous les risques financiers', 'c' => false],
                            ['v' => 'Elle nécessite toujours des dérivés', 'c' => false],
                        ],
                    ],
                    [
                        'q' => 'Pourquoi une entreprise peut-elle choisir de ne couvrir qu’une partie de son exposition de change ?',
                        'a' => [
                            ['v' => 'Elle peut rechercher un compromis entre protection, coût, flexibilité et incertitude sur les flux futurs', 'c' => true],
                            ['v' => 'Une couverture partielle élimine toujours le risque', 'c' => false],
                            ['v' => 'Une couverture complète est juridiquement interdite', 'c' => false],
                            ['v' => 'Les devises ne peuvent pas être couvertes intégralement', 'c' => false],
                        ],
                    ],
                    [
                        'q' => 'Qu’est-ce que le risque de rollover d’une couverture de change ?',
                        'a' => [
                            ['v' => 'Le risque lié au renouvellement d’une couverture lorsque l’exposition demeure après l’échéance de l’instrument initial', 'c' => true],
                            ['v' => 'Le risque de baisse du chiffre d’affaires', 'c' => false],
                            ['v' => 'Le risque de défaut d’un fournisseur uniquement', 'c' => false],
                            ['v' => 'Le risque d’une hausse des salaires', 'c' => false],
                        ],
                    ],
                    [
                        'q' => 'Pourquoi une prévision erronée des flux futurs peut-elle rendre une couverture de change inefficace ?',
                        'a' => [
                            ['v' => 'Le montant ou la date de la couverture peut ne plus correspondre à l’exposition réelle', 'c' => true],
                            ['v' => 'Les dérivés deviennent automatiquement sans valeur', 'c' => false],
                            ['v' => 'Le taux de change cesse de varier', 'c' => false],
                            ['v' => 'Les coûts de couverture deviennent toujours nuls', 'c' => false],
                        ],
                    ],
                    [
                        'q' => 'Quel est le risque d’une position spéculative involontaire créée par une couverture ?',
                        'a' => [
                            ['v' => 'L’entreprise peut subir des gains ou pertes supplémentaires parce que la couverture dépasse ou diffère de l’exposition économique réelle', 'c' => true],
                            ['v' => 'La couverture devient automatiquement sans risque', 'c' => false],
                            ['v' => 'La position réelle disparaît', 'c' => false],
                            ['v' => 'Le marché des changes ferme', 'c' => false],
                        ],
                    ],
                    [
                        'q' => 'Pourquoi faut-il suivre les sensibilités de change après la mise en place d’une couverture ?',
                        'a' => [
                            ['v' => 'Parce que les expositions, les prévisions et les paramètres de marché peuvent évoluer', 'c' => true],
                            ['v' => 'Parce qu’une couverture reste toujours parfaitement adaptée', 'c' => false],
                            ['v' => 'Parce que le change est constant', 'c' => false],
                            ['v' => 'Pour éliminer toute comptabilité', 'c' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Risque de contrepartie et produits dérivés',
                'questions' => [
                    [
                        'q' => 'Qu’est-ce que le risque de contrepartie sur un dérivé ?',
                        'a' => [
                            ['v' => 'Le risque que la contrepartie ne respecte pas ses obligations alors que le contrat possède une valeur positive pour l’entreprise', 'c' => true],
                            ['v' => 'Le risque que le marché soit toujours rentable', 'c' => false],
                            ['v' => 'Le risque de variation des salaires', 'c' => false],
                            ['v' => 'Le risque de hausse automatique du capital', 'c' => false],
                        ],
                    ],
                    [
                        'q' => 'Pourquoi la valeur de remplacement d’un dérivé est-elle importante dans le risque de contrepartie ?',
                        'a' => [
                            ['v' => 'Elle représente approximativement la valeur économique qui pourrait être perdue si la contrepartie faisait défaut', 'c' => true],
                            ['v' => 'Elle mesure uniquement le chiffre d’affaires', 'c' => false],
                            ['v' => 'Elle est toujours égale au notionnel', 'c' => false],
                            ['v' => 'Elle ne dépend jamais du marché', 'c' => false],
                        ],
                    ],
                    [
                        'q' => 'Pourquoi les accords de compensation sont-ils importants ?',
                        'a' => [
                            ['v' => 'Ils peuvent permettre de compenser certaines positions réciproques et réduire l’exposition nette sous conditions juridiques', 'c' => true],
                            ['v' => 'Ils garantissent l’absence de défaut', 'c' => false],
                            ['v' => 'Ils augmentent toujours le risque brut', 'c' => false],
                            ['v' => 'Ils remplacent les garanties dans tous les cas', 'c' => false],
                        ],
                    ],
                    [
                        'q' => 'Quel est le rôle du collatéral dans la gestion du risque de contrepartie ?',
                        'a' => [
                            ['v' => 'Il peut réduire la perte potentielle en cas de défaut en sécurisant une partie de l’exposition', 'c' => true],
                            ['v' => 'Il garantit toujours une récupération intégrale', 'c' => false],
                            ['v' => 'Il supprime tout risque juridique', 'c' => false],
                            ['v' => 'Il augmente nécessairement la volatilité', 'c' => false],
                        ],
                    ],
                    [
                        'q' => 'Pourquoi les appels de marge peuvent-ils créer un risque de liquidité ?',
                        'a' => [
                            ['v' => 'Une évolution défavorable du marché peut obliger l’entreprise à fournir rapidement des liquidités supplémentaires', 'c' => true],
                            ['v' => 'Ils génèrent toujours des liquidités', 'c' => false],
                            ['v' => 'Ils suppriment les besoins de trésorerie', 'c' => false],
                            ['v' => 'Ils n’ont aucun lien avec la valeur des dérivés', 'c' => false],
                        ],
                    ],
                    [
                        'q' => 'Quel est l’objectif principal de la gestion des limites de contrepartie ?',
                        'a' => [
                            ['v' => 'Limiter l’exposition maximale acceptable à chaque contrepartie selon sa qualité de crédit', 'c' => true],
                            ['v' => 'Garantir que toutes les contreparties auront la même notation', 'c' => false],
                            ['v' => 'Supprimer les transactions dérivées', 'c' => false],
                            ['v' => 'Maximiser automatiquement le notionnel', 'c' => false],
                        ],
                    ],
                    [
                        'q' => 'Pourquoi le risque de contrepartie peut-il augmenter fortement lorsque les marchés deviennent volatils ?',
                        'a' => [
                            ['v' => 'La valeur de remplacement des contrats peut augmenter rapidement et les appels de marge peuvent s’intensifier', 'c' => true],
                            ['v' => 'La volatilité réduit toujours les expositions', 'c' => false],
                            ['v' => 'Les contreparties deviennent automatiquement solvables', 'c' => false],
                            ['v' => 'Les contrats cessent de produire des flux', 'c' => false],
                        ],
                    ],
                    [
                        'q' => 'Qu’est-ce que l’exposition future potentielle d’une contrepartie cherche à représenter ?',
                        'a' => [
                            ['v' => 'Une estimation de l’exposition susceptible d’apparaître dans le futur selon différents scénarios de marché', 'c' => true],
                            ['v' => 'La perte historique déjà réalisée uniquement', 'c' => false],
                            ['v' => 'Le chiffre d’affaires de la contrepartie', 'c' => false],
                            ['v' => 'La valeur comptable des immobilisations', 'c' => false],
                        ],
                    ],
                    [
                        'q' => 'Pourquoi les clauses contractuelles sont-elles importantes dans la gestion des dérivés ?',
                        'a' => [
                            ['v' => 'Elles déterminent notamment les droits de compensation, de garantie, de résiliation et les obligations des parties', 'c' => true],
                            ['v' => 'Elles n’ont aucune influence sur le risque juridique', 'c' => false],
                            ['v' => 'Elles garantissent toujours un profit', 'c' => false],
                            ['v' => 'Elles remplacent les modèles de risque', 'c' => false],
                        ],
                    ],
                    [
                        'q' => 'Pourquoi une forte concentration des dérivés auprès d’une seule contrepartie est-elle risquée ?',
                        'a' => [
                            ['v' => 'Le défaut de cette contrepartie peut affecter simultanément une grande partie des couvertures', 'c' => true],
                            ['v' => 'Elle garantit une meilleure diversification', 'c' => false],
                            ['v' => 'Elle élimine le risque de marché', 'c' => false],
                            ['v' => 'Elle empêche les appels de marge', 'c' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Risque systémique et interdépendances financières',
                'questions' => [
                    [
                        'q' => 'Qu’est-ce que le risque systémique ?',
                        'a' => [
                            ['v' => 'Le risque qu’une perturbation affecte largement le système financier ou une grande partie de celui-ci', 'c' => true],
                            ['v' => 'Le risque propre à une seule facture', 'c' => false],
                            ['v' => 'Le risque d’une seule action sans propagation', 'c' => false],
                            ['v' => 'Le risque de change d’un particulier uniquement', 'c' => false],
                        ],
                    ],
                    [
                        'q' => 'Comment l’effet de levier peut-il amplifier le risque systémique ?',
                        'a' => [
                            ['v' => 'Un niveau élevé d’endettement peut amplifier les pertes et provoquer des ventes forcées lorsque les valeurs chutent', 'c' => true],
                            ['v' => 'Le levier élimine les pertes', 'c' => false],
                            ['v' => 'Le levier réduit toujours la volatilité', 'c' => false],
                            ['v' => 'Le levier n’a aucun lien avec la solvabilité', 'c' => false],
                        ],
                    ],
                    [
                        'q' => 'Pourquoi les interconnexions entre institutions financières sont-elles importantes ?',
                        'a' => [
                            ['v' => Les difficultés d’un acteur peuvent se transmettre à d’autres par les créances, financements et infrastructures communes', 'c' => true],
                            ['v' => 'Elles empêchent toute contagion', 'c' => false],
                            ['v' => 'Elles garantissent toujours des profits', 'c' => false],
                            ['v' => 'Elles réduisent nécessairement toutes les corrélations', 'c' => false],
                        ],
                    ],
                    [
                        'q' => 'Qu’est-ce qu’un effet de contagion financière ?',
                        'a' => [
                            ['v' => 'La propagation d’une difficulté financière d’un acteur ou marché vers d’autres acteurs ou marchés', 'c' => true],
                            ['v' => 'Une hausse automatique des liquidités', 'c' => false],
                            ['v' => 'Une diminution garantie des spreads', 'c' => false],
                            ['v' => 'Une absence de corrélation', 'c' => false],
                        ],
                    ],
                    [
                        'q' => 'Pourquoi les ventes forcées peuvent-elles amplifier une crise ?',
                        'a' => [
                            ['v' => 'Elles peuvent faire baisser les prix des actifs et provoquer de nouvelles pertes et appels de marge', 'c' => true],
                            ['v' => 'Elles augmentent toujours les prix', 'c' => false],
                            ['v' => 'Elles éliminent les besoins de liquidité', 'c' => false],
                            ['v' => 'Elles garantissent la solvabilité', 'c' => false],
                        ],
                    ],
                    [
                        'q' => 'Quel rôle les stress tests systémiques peuvent-ils jouer ?',
                        'a' => [
                            ['v' => 'Ils permettent d’examiner les conséquences de chocs communs et des interdépendances entre acteurs', 'c' => true],
                            ['v' => 'Ils remplacent toutes les politiques monétaires', 'c' => false],
                            ['v' => 'Ils garantissent l’absence de crise', 'c' => false],
                            ['v' => 'Ils mesurent uniquement le bénéfice comptable', 'c' => false],
                        ],
                    ],
                    [
                        'q' => 'Pourquoi une diversification apparente peut-elle être insuffisante pendant une crise ?',
                        'a' => [
                            ['v' => 'Les corrélations entre actifs peuvent augmenter fortement lorsque les conditions de marché se détériorent', 'c' => true],
                            ['v' => 'Les corrélations deviennent toujours nulles', 'c' => false],
                            ['v' => 'Tous les actifs deviennent indépendants', 'c' => false],
                            ['v' => 'La diversification garantit toujours une perte nulle', 'c' => false],
                        ],
                    ],
                    [
                        'q' => 'Quel rôle jouent les infrastructures de marché dans le risque systémique ?',
                        'a' => [
                            ['v' => 'Une défaillance d’une infrastructure critique peut perturber simultanément de nombreux participants', 'c' => true],
                            ['v' => 'Elles n’ont aucun lien avec les transactions financières', 'c' => false],
                            ['v' => 'Elles garantissent toujours la liquidité', 'c' => false],
                            ['v' => 'Elles éliminent les risques opérationnels', 'c' => false],
                        ],
                    ],
                    [
                        'q' => 'Pourquoi les expositions communes peuvent-elles créer un risque de ventes simultanées ?',
                        'a' => [
                            ['v' => 'Plusieurs institutions peuvent chercher à vendre les mêmes actifs lorsqu’elles subissent les mêmes contraintes de liquidité', 'c' => true],
                            ['v' => 'Les institutions ne détiennent jamais les mêmes actifs', 'c' => false],
                            ['v' => 'Les ventes simultanées augmentent toujours les prix', 'c' => false],
                            ['v' => 'Les contraintes de liquidité empêchent toute vente', 'c' => false],
                        ],
                    ],
                    [
                        'q' => 'Quel principe est important pour réduire le risque systémique ?',
                        'a' => [
                            ['v' => 'Surveiller les concentrations, les interdépendances, le levier et les mécanismes de transmission des chocs', 'c' => true],
                            ['v' => 'Ignorer les expositions communes', 'c' => false],
                            ['v' => 'Maximiser systématiquement le levier', 'c' => false],
                            ['v' => 'Supprimer tous les stress tests', 'c' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Stress testing avancé et scénarios extrêmes',
                'questions' => [
                    [
                        'q' => 'Pourquoi les stress tests historiques doivent-ils être complétés par des scénarios hypothétiques ?',
                        'a' => [
                            ['v' => 'Les événements futurs peuvent combiner des chocs ou atteindre des intensités jamais observées historiquement', 'c' => true],
                            ['v' => 'Les données historiques sont toujours inutiles', 'c' => false],
                            ['v' => 'Les scénarios hypothétiques garantissent les résultats', 'c' => false],
                            ['v' => 'Les marchés futurs sont parfaitement prévisibles', 'c' => false],
                        ],
                    ],
                    [
                        'q' => 'Qu’est-ce qu’un reverse stress test ?',
                        'a' => [
                            ['v' => 'Une analyse qui part d’un résultat critique et cherche quels scénarios pourraient conduire à cet état', 'c' => true],
                            ['v' => 'Un scénario toujours favorable', 'c' => false],
                            ['v' => 'Une méthode de calcul des bénéfices', 'c' => false],
                            ['v' => 'Une simulation sans hypothèses', 'c' => false],
                        ],
                    ],
                    [
                        'q' => 'Quel est l’intérêt d’un reverse stress test pour une entreprise financière ?',
                        'a' => [
                            ['v' => 'Identifier les combinaisons de chocs susceptibles de menacer la viabilité ou les seuils critiques', 'c' => true],
                            ['v' => 'Garantir que ces scénarios ne se produiront jamais', 'c' => false],
                            ['v' => 'Éliminer tous les risques de marché', 'c' => false],
                            ['v' => 'Remplacer le budget annuel', 'c' => false],
                        ],
                    ],
                    [
                        'q' => 'Pourquoi les scénarios de stress doivent-ils parfois intégrer des réactions comportementales ?',
                        'a' => [
                            ['v' => 'Les clients, investisseurs et contreparties peuvent modifier leur comportement en réponse à la crise', 'c' => true],
                            ['v' => 'Les comportements restent toujours constants', 'c' => false],
                            ['v' => 'Les réactions humaines n’influencent jamais la liquidité', 'c' => false],
                            ['v' => 'Les réactions comportementales sont toujours parfaitement prévisibles', 'c' => false],
                        ],
                    ],
                    [
                        'q' => 'Quel problème pose un scénario de stress trop isolé ?',
                        'a' => [
                            ['v' => 'Il peut sous-estimer les pertes lorsque plusieurs facteurs de risque se renforcent simultanément', 'c' => true],
                            ['v' => 'Il garantit toujours une surestimation', 'c' => false],
                            ['v' => 'Il élimine les corrélations', 'c' => false],
                            ['v' => 'Il rend le portefeuille sans risque', 'c' => false],
                        ],
                    ],
                    [
                        'q' => 'Pourquoi les paramètres de stress doivent-ils être documentés ?',
                        'a' => [
                            ['v' => 'Pour assurer la traçabilité des hypothèses, faciliter la gouvernance et permettre la comparaison des résultats', 'c' => true],
                            ['v' => 'Pour empêcher toute révision du scénario', 'c' => false],
                            ['v' => 'Pour garantir un résultat positif', 'c' => false],
                            ['v' => 'Pour supprimer les contrôles indépendants', 'c' => false],
                        ],
                    ],
                    [
                        'q' => 'Comment évaluer la robustesse d’un portefeuille face à plusieurs scénarios ?',
                        'a' => [
                            ['v' => 'Comparer les pertes, besoins de liquidité, ratios et seuils critiques sous différents scénarios', 'c' => true],
                            ['v' => 'Utiliser uniquement le meilleur scénario', 'c' => false],
                            ['v' => 'Ignorer les scénarios extrêmes', 'c' => false],
                            ['v' => 'Examiner uniquement le rendement moyen', 'c' => false],
                        ],
                    ],
                    [
                        'q' => 'Quel risque apparaît lorsqu’un stress test repose sur des données historiques insuffisantes ?',
                        'a' => [
                            ['v' => 'Le modèle peut manquer des événements rares ou des régimes de marché non représentés dans l’échantillon', 'c' => true],
                            ['v' => 'Le modèle devient automatiquement conservateur', 'c' => false],
                            ['v' => 'Les pertes futures deviennent nulles', 'c' => false],
                            ['v' => 'La volatilité disparaît', 'c' => false],
                        ],
                    ],
                    [
                        'q' => 'Pourquoi les résultats d’un stress test doivent-ils être reliés à des plans d’action ?',
                        'a' => [
                            ['v' => 'L’objectif est de transformer l’identification des vulnérabilités en mesures concrètes de réduction ou de maîtrise du risque', 'c' => true],
                            ['v' => 'Un stress test ne doit jamais influencer les décisions', 'c' => false],
                            ['v' => 'Les plans d’action augmentent toujours les risques', 'c' => false],
                            ['v' => 'Les résultats n’ont aucune utilité opérationnelle', 'c' => false],
                        ],
                    ],
                    [
                        'q' => 'Pourquoi les scénarios doivent-ils être régulièrement révisés ?',
                        'a' => [
                            ['v' => 'Les modèles économiques, les expositions et les sources de risque évoluent avec le temps', 'c' => true],
                            ['v' => 'Les marchés restent identiques', 'c' => false],
                            ['v' => 'Les crises sont toujours identiques', 'c' => false],
                            ['v' => 'Les hypothèses initiales sont toujours valables', 'c' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Gouvernance avancée et risque de modèle',
                'questions' => [
                    [
                        'q' => 'Qu’est-ce que le risque de modèle ?',
                        'a' => [
                            ['v' => 'Le risque de pertes résultant d’erreurs dans la conception, les données, les hypothèses ou l’utilisation d’un modèle', 'c' => true],
                            ['v' => 'Le risque de variation du chiffre d’affaires uniquement', 'c' => false],
                            ['v' => 'Le risque de change uniquement', 'c' => false],
                            ['v' => 'Le risque qu’un modèle produise toujours un bénéfice', 'c' => false],
                        ],
                    ],
                    [
                        'q' => 'Pourquoi la validation indépendante des modèles est-elle importante ?',
                        'a' => [
                            ['v' => 'Elle fournit une évaluation critique distincte de l’équipe qui développe ou utilise le modèle', 'c' => true],
                            ['v' => 'Elle garantit que le modèle est parfait', 'c' => false],
                            ['v' => 'Elle élimine toutes les hypothèses', 'c' => false],
                            ['v' => 'Elle remplace les données', 'c' => false],
                        ],
                    ],
                    [
                        'q' => 'Qu’est-ce que le model drift ?',
                        'a' => [
                            ['v' => 'Une dégradation progressive de la pertinence ou des performances d’un modèle lorsque les relations économiques évoluent', 'c' => true],
                            ['v' => 'Une hausse certaine de la précision', 'c' => false],
                            ['v' => 'Une suppression des données historiques', 'c' => false],
                            ['v' => 'Une modification automatique du capital', 'c' => false],
                        ],
                    ],
                    [
                        'q' => 'Pourquoi les données utilisées par un modèle de risque doivent-elles être contrôlées ?',
                        'a' => [
                            ['v' => 'Des données incomplètes, erronées ou biaisées peuvent produire des estimations de risque incorrectes', 'c' => true],
                            ['v' => 'La qualité des données n’a aucune influence', 'c' => false],
                            ['v' => 'Les modèles corrigent toujours toutes les erreurs', 'c' => false],
                            ['v' => 'Les données ne sont jamais utilisées dans les modèles', 'c' => false],
                        ],
                    ],
                    [
                        'q' => 'Pourquoi une gouvernance forte des limites de risque est-elle nécessaire ?',
                        'a' => [
                            ['v' => 'Elle permet d’assurer que les expositions restent cohérentes avec l’appétit pour le risque et les capacités financières', 'c' => true],
                            ['v' => 'Elle garantit des rendements positifs', 'c' => false],
                            ['v' => 'Elle supprime les décisions humaines', 'c' => false],
                            ['v' => 'Elle élimine toutes les pertes', 'c' => false],
                        ],
                    ],
                    [
                        'q' => 'Quel est le rôle du comité des risques dans une gouvernance mature ?',
                        'a' => [
                            ['v' => 'Examiner les expositions significatives, les limites, les scénarios de stress et les mesures correctives', 'c' => true],
                            ['v' => 'Exécuter toutes les opérations de marché', 'c' => false],
                            ['v' => 'Garantir les cours boursiers', 'c' => false],
                            ['v' => 'Remplacer les équipes opérationnelles', 'c' => false],
                        ],
                    ],
                    [
                        'q' => 'Pourquoi les dépassements de limites doivent-ils faire l’objet d’une procédure d’escalade ?',
                        'a' => [
                            ['v' => 'Ils peuvent nécessiter une décision rapide, une réduction de position ou une approbation exceptionnelle', 'c' => true],
                            ['v' => 'Ils doivent toujours être ignorés', 'c' => false],
                            ['v' => 'Ils garantissent une meilleure rentabilité', 'c' => false],
                            ['v' => 'Ils n’ont jamais de conséquences', 'c' => false],
                        ],
                    ],
                    [
                        'q' => 'Quel principe permet de limiter les conflits d’intérêts dans la gestion des risques ?',
                        'a' => [
                            ['v' => 'Séparer autant que possible les fonctions de prise de risque, de contrôle et d’audit', 'c' => true],
                            ['v' => 'Confier toutes les fonctions à une seule personne', 'c' => false],
                            ['v' => 'Supprimer l’audit interne', 'c' => false],
                            ['v' => 'Éviter toute documentation', 'c' => false],
                        ],
                    ],
                    [
                        'q' => 'Pourquoi les indicateurs de risque doivent-ils être reliés à des seuils d’alerte ?',
                        'a' => [
                            ['v' => 'Pour permettre une intervention avant qu’une détérioration importante ne dépasse les capacités de tolérance', 'c' => true],
                            ['v' => 'Pour garantir que les indicateurs restent constants', 'c' => false],
                            ['v' => 'Pour supprimer le besoin de reporting', 'c' => false],
                            ['v' => 'Pour augmenter volontairement les expositions', 'c' => false],
                        ],
                    ],
                    [
                        'q' => 'Quel est l’objectif d’une revue périodique du cadre de gestion des risques ?',
                        'a' => [
                            ['v' => 'Vérifier que les politiques, modèles, limites et contrôles restent adaptés au profil de risque actuel', 'c' => true],
                            ['v' => 'Éliminer tous les contrôles existants', 'c' => false],
                            ['v' => 'Garantir une rentabilité fixe', 'c' => false],
                            ['v' => 'Réduire automatiquement le capital', 'c' => false],
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
                    'question' => $questionData['q'],
                ]);

                $answers = $questionData['a'];
                shuffle($answers);

                foreach ($answers as $answerData) {
                    Answer::create([
                        'question_id' => $question->id,
                        'answer' => $answerData['v'],
                        'iscorrect' => $answerData['c'],
                    ]);
                }
            }
        }
    }
}
```
