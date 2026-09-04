```php
<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Major;
use App\Models\Subject;
use App\Models\Quiz;
use App\Models\Question;
use App\Models\Answer;

class FinancialRiskManagementProfessionalSeeder extends Seeder
{
    public function run(): void
    {
        $major = Major::where('slug', 'finance')->firstOrFail();

        $subject = Subject::where('major_id', $major->id)
            ->where('slug', 'financial-risk-management')
            ->firstOrFail();

        $quizzes = [
            [
                'title' => 'Architecture intégrée de la gestion des risques financiers',
                'questions' => [
                    [
                        'q' => 'Quel est l’objectif central d’un cadre intégré de gestion des risques financiers ?',
                        'a' => [
                            ['v' => 'Identifier, mesurer, agréger, surveiller et piloter les risques selon l’appétit pour le risque', 'c' => true],
                            ['v' => 'Maximiser systématiquement le rendement sans contrainte', 'c' => false],
                            ['v' => 'Supprimer toutes les positions de marché', 'c' => false],
                            ['v' => 'Remplacer les décisions du conseil d’administration', 'c' => false],
                        ],
                    ],
                    [
                        'q' => 'Pourquoi l’agrégation des risques constitue-t-elle un enjeu majeur pour une institution financière ?',
                        'a' => [
                            ['v' => 'Les risques peuvent interagir et produire une exposition globale différente de la simple somme des risques individuels', 'c' => true],
                            ['v' => 'Chaque risque est toujours parfaitement indépendant', 'c' => false],
                            ['v' => 'L’agrégation élimine nécessairement les pertes extrêmes', 'c' => false],
                            ['v' => 'Elle concerne uniquement les données comptables', 'c' => false],
                        ],
                    ],
                    [
                        'q' => 'Quel principe caractérise une gouvernance robuste du risque ?',
                        'a' => [
                            ['v' => 'Une séparation claire entre prise de risque, contrôle indépendant et audit', 'c' => true],
                            ['v' => 'La concentration de toutes les fonctions chez le trader', 'c' => false],
                            ['v' => 'L’absence de limites quantitatives', 'c' => false],
                            ['v' => 'La suppression du reporting au conseil', 'c' => false],
                        ],
                    ],
                    [
                        'q' => 'À quoi sert principalement l’appétit pour le risque ?',
                        'a' => [
                            ['v' => 'À définir le niveau et les types de risques qu’une organisation accepte de prendre pour atteindre ses objectifs', 'c' => true],
                            ['v' => 'À garantir un rendement minimal', 'c' => false],
                            ['v' => 'À déterminer uniquement les salaires', 'c' => false],
                            ['v' => 'À remplacer les politiques de contrôle interne', 'c' => false],
                        ],
                    ],
                    [
                        'q' => 'Pourquoi les indicateurs avancés de risque sont-ils importants ?',
                        'a' => [
                            ['v' => 'Ils peuvent signaler une détérioration avant que les pertes réalisées ne deviennent importantes', 'c' => true],
                            ['v' => 'Ils mesurent uniquement les performances passées', 'c' => false],
                            ['v' => 'Ils garantissent l’absence de crise', 'c' => false],
                            ['v' => 'Ils rendent les stress tests inutiles', 'c' => false],
                        ],
                    ],
                    [
                        'q' => 'Quel risque apparaît lorsque les limites de risque sont définies indépendamment du capital disponible ?',
                        'a' => [
                            ['v' => 'Les expositions autorisées peuvent devenir incompatibles avec la capacité réelle d’absorption des pertes', 'c' => true],
                            ['v' => 'Le capital devient automatiquement excédentaire', 'c' => false],
                            ['v' => 'Le risque systémique disparaît', 'c' => false],
                            ['v' => 'Les limites deviennent toujours conservatrices', 'c' => false],
                        ],
                    ],
                    [
                        'q' => 'Pourquoi le risk appetite statement doit-il être traduit en limites opérationnelles ?',
                        'a' => [
                            ['v' => 'Pour transformer une orientation stratégique en contraintes mesurables applicables aux activités', 'c' => true],
                            ['v' => 'Pour supprimer la responsabilité des dirigeants', 'c' => false],
                            ['v' => 'Pour éviter toute mesure quantitative', 'c' => false],
                            ['v' => 'Pour garantir une rentabilité constante', 'c' => false],
                        ],
                    ],
                    [
                        'q' => 'Quel est le danger d’une gouvernance fondée uniquement sur des modèles quantitatifs ?',
                        'a' => [
                            ['v' => 'Les modèles peuvent manquer des ruptures structurelles, des risques émergents ou des facteurs non quantifiables', 'c' => true],
                            ['v' => 'Les modèles produisent toujours des résultats exacts', 'c' => false],
                            ['v' => 'Les données historiques deviennent inutiles', 'c' => false],
                            ['v' => 'Les scénarios de crise deviennent impossibles', 'c' => false],
                        ],
                    ],
                    [
                        'q' => 'Pourquoi les limites doivent-elles être surveillées à une fréquence adaptée à l’exposition ?',
                        'a' => [
                            ['v' => 'Une exposition très volatile peut dépasser rapidement une limite avant qu’un contrôle peu fréquent ne détecte le dépassement', 'c' => true],
                            ['v' => 'Toutes les expositions évoluent au même rythme', 'c' => false],
                            ['v' => 'La fréquence de surveillance n’a aucun effet', 'c' => false],
                            ['v' => 'Les limites ne peuvent jamais être dépassées', 'c' => false],
                        ],
                    ],
                    [
                        'q' => 'Quel rôle joue le conseil d’administration dans la gouvernance des risques ?',
                        'a' => [
                            ['v' => 'Il supervise notamment l’appétit pour le risque, la culture du risque et la robustesse du dispositif de gouvernance', 'c' => true],
                            ['v' => 'Il exécute quotidiennement toutes les transactions', 'c' => false],
                            ['v' => 'Il calcule chaque exposition individuelle', 'c' => false],
                            ['v' => 'Il remplace les fonctions de contrôle', 'c' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Mesure avancée du risque de marché',
                'questions' => [
                    [
                        'q' => 'Pourquoi l’Expected Shortfall est-il généralement considéré comme plus informatif que la VaR pour les pertes extrêmes ?',
                        'a' => [
                            ['v' => 'Il prend en compte l’ampleur moyenne des pertes dans la queue au-delà du seuil de VaR', 'c' => true],
                            ['v' => 'Il ignore les événements extrêmes', 'c' => false],
                            ['v' => 'Il mesure uniquement la volatilité normale', 'c' => false],
                            ['v' => 'Il ne dépend d’aucune distribution de pertes', 'c' => false],
                        ],
                    ],
                    [
                        'q' => 'Pourquoi les facteurs de risque non linéaires compliquent-ils la VaR ?',
                        'a' => [
                            ['v' => 'La variation de valeur du portefeuille peut ne plus être approximée correctement par une relation linéaire avec les facteurs de marché', 'c' => true],
                            ['v' => 'Ils rendent toutes les pertes nulles', 'c' => false],
                            ['v' => 'Ils suppriment la volatilité', 'c' => false],
                            ['v' => 'Ils empêchent toute simulation', 'c' => false],
                        ],
                    ],
                    [
                        'q' => 'Pourquoi la liquidité doit-elle être intégrée au risque de marché ?',
                        'a' => [
                            ['v' => 'Le coût de liquidation et l’impact de marché peuvent augmenter fortement lorsque les positions doivent être réduites rapidement', 'c' => true],
                            ['v' => 'La liquidité n’a jamais d’impact sur les prix', 'c' => false],
                            ['v' => 'Les actifs peuvent toujours être vendus au prix théorique', 'c' => false],
                            ['v' => 'Le risque de marché exclut toujours les coûts de transaction', 'c' => false],
                        ],
                    ],
                    [
                        'q' => 'Qu’est-ce qu’une mesure de sensibilité delta ?',
                        'a' => [
                            ['v' => 'Elle mesure approximativement la variation de valeur d’un instrument pour une petite variation de son facteur sous-jacent', 'c' => true],
                            ['v' => 'Elle mesure uniquement la probabilité de défaut', 'c' => false],
                            ['v' => 'Elle mesure la liquidité comptable', 'c' => false],
                            ['v' => 'Elle représente toujours une perte maximale', 'c' => false],
                        ],
                    ],
                    [
                        'q' => 'Pourquoi gamma est-il important pour les portefeuilles optionnels ?',
                        'a' => [
                            ['v' => 'Il mesure la variation du delta et permet de mieux capturer la non-linéarité de la valeur', 'c' => true],
                            ['v' => 'Il mesure uniquement le risque de crédit', 'c' => false],
                            ['v' => 'Il remplace tous les paramètres de volatilité', 'c' => false],
                            ['v' => 'Il mesure le taux de recouvrement', 'c' => false],
                        ],
                    ],
                    [
                        'q' => 'Quel problème peut créer une forte dépendance à une matrice de corrélation historique ?',
                        'a' => [
                            ['v' => 'Les corrélations peuvent changer brutalement lors des périodes de stress', 'c' => true],
                            ['v' => 'Les corrélations restent toujours constantes', 'c' => false],
                            ['v' => 'La volatilité devient nécessairement nulle', 'c' => false],
                            ['v' => 'La matrice garantit les corrélations futures', 'c' => false],
                        ],
                    ],
                    [
                        'q' => 'Pourquoi les scénarios historiques extrêmes doivent-ils être réévalués régulièrement ?',
                        'a' => [
                            ['v' => 'La composition du portefeuille et ses sensibilités peuvent avoir changé depuis l’événement historique', 'c' => true],
                            ['v' => 'Les positions restent toujours identiques', 'c' => false],
                            ['v' => 'Les marchés répètent exactement les mêmes mouvements', 'c' => false],
                            ['v' => 'Les scénarios historiques deviennent automatiquement plus précis', 'c' => false],
                        ],
                    ],
                    [
                        'q' => 'Que mesure principalement le risque de base dans une couverture ?',
                        'a' => [
                            ['v' => 'Le risque que l’instrument de couverture et l’exposition sous-jacente n’évoluent pas parfaitement ensemble', 'c' => true],
                            ['v' => 'Le risque d’absence totale de volatilité', 'c' => false],
                            ['v' => 'Le risque de disparition du sous-jacent', 'c' => false],
                            ['v' => 'Le risque de fraude comptable', 'c' => false],
                        ],
                    ],
                    [
                        'q' => 'Pourquoi les stress tests doivent-ils parfois utiliser plusieurs facteurs simultanément ?',
                        'a' => [
                            ['v' => 'Les crises financières résultent souvent de mouvements combinés de taux, spreads, devises, actions et liquidité', 'c' => true],
                            ['v' => 'Les facteurs financiers sont toujours parfaitement indépendants', 'c' => false],
                            ['v' => 'Un seul facteur explique toujours toutes les pertes', 'c' => false],
                            ['v' => 'Les scénarios multi-facteurs sont inutiles', 'c' => false],
                        ],
                    ],
                    [
                        'q' => 'Pourquoi les mesures de risque doivent-elles être complétées par une analyse qualitative ?',
                        'a' => [
                            ['v' => 'Certaines vulnérabilités structurelles et certains risques émergents sont difficiles à capturer quantitativement', 'c' => true],
                            ['v' => 'Les modèles quantitatifs sont toujours faux', 'c' => false],
                            ['v' => 'L’analyse qualitative remplace les données', 'c' => false],
                            ['v' => 'Les pertes extrêmes sont toujours qualitatives', 'c' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Risque de crédit, portefeuille et capital économique',
                'questions' => [
                    [
                        'q' => 'Quelle différence fondamentale existe entre perte attendue et perte inattendue ?',
                        'a' => [
                            ['v' => 'La perte attendue représente une perte moyenne anticipée tandis que la perte inattendue reflète la variabilité autour de cette moyenne', 'c' => true],
                            ['v' => 'Les deux concepts sont strictement identiques', 'c' => false],
                            ['v' => 'La perte attendue correspond toujours à une perte extrême', 'c' => false],
                            ['v' => 'La perte inattendue est toujours nulle', 'c' => false],
                        ],
                    ],
                    [
                        'q' => 'À quoi sert le capital économique dans la gestion des risques ?',
                        'a' => [
                            ['v' => 'À absorber les pertes inattendues associées au profil de risque sur un niveau de confiance donné', 'c' => true],
                            ['v' => 'À remplacer toutes les provisions', 'c' => false],
                            ['v' => 'À garantir les bénéfices', 'c' => false],
                            ['v' => 'À supprimer le risque de crédit', 'c' => false],
                        ],
                    ],
                    [
                        'q' => 'Pourquoi la concentration du portefeuille peut-elle augmenter le capital économique requis ?',
                        'a' => [
                            ['v' => 'Une concentration réduit les bénéfices de diversification et peut amplifier les pertes communes', 'c' => true],
                            ['v' => 'La concentration garantit une diversification parfaite', 'c' => false],
                            ['v' => 'Elle rend les défauts indépendants', 'c' => false],
                            ['v' => 'Elle élimine le risque systématique', 'c' => false],
                        ],
                    ],
                    [
                        'q' => 'Quel rôle joue la corrélation des défauts dans les pertes extrêmes ?',
                        'a' => [
                            ['v' => 'Une corrélation élevée peut augmenter la probabilité de pertes importantes et simultanées', 'c' => true],
                            ['v' => 'Elle réduit toujours le risque de portefeuille', 'c' => false],
                            ['v' => 'Elle n’a aucun effet sur la distribution des pertes', 'c' => false],
                            ['v' => 'Elle garantit une récupération élevée', 'c' => false],
                        ],
                    ],
                    [
                        'q' => 'Pourquoi la diversification par nombre de contreparties peut-elle être trompeuse ?',
                        'a' => [
                            ['v' => 'Des contreparties différentes peuvent être fortement exposées aux mêmes facteurs économiques', 'c' => true],
                            ['v' => 'Chaque contrepartie possède toujours un risque indépendant', 'c' => false],
                            ['v' => 'Le nombre de contreparties suffit à éliminer le risque', 'c' => false],
                            ['v' => 'Les secteurs économiques n’influencent jamais le crédit', 'c' => false],
                        ],
                    ],
                    [
                        'q' => 'Quel est l’intérêt d’une analyse de migration de crédit ?',
                        'a' => [
                            ['v' => 'Elle permet d’anticiper les changements de qualité de crédit et leurs conséquences sur les pertes et le capital', 'c' => true],
                            ['v' => 'Elle mesure uniquement les flux de trésorerie', 'c' => false],
                            ['v' => 'Elle garantit l’absence de défaut', 'c' => false],
                            ['v' => 'Elle remplace toute notation', 'c' => false],
                        ],
                    ],
                    [
                        'q' => 'Pourquoi le risque de concentration géographique est-il pertinent ?',
                        'a' => [
                            ['v' => Un choc politique, économique ou naturel régional peut affecter simultanément de nombreuses expositions', 'c' => true],
                            ['v' => 'Les régions sont toujours parfaitement indépendantes', 'c' => false],
                            ['v' => 'La diversification géographique n’a aucun intérêt', 'c' => false],
                            ['v' => 'Les risques régionaux sont toujours assurés', 'c' => false],
                        ],
                    ],
                    [
                        'q' => 'Pourquoi les hypothèses de récupération doivent-elles être stressées ?',
                        'a' => [
                            ['v' => 'Les taux de récupération peuvent se détériorer fortement lorsque les conditions économiques sont défavorables', 'c' => true],
                            ['v' => 'Les récupérations sont toujours constantes', 'c' => false],
                            ['v' => 'La LGD ne dépend jamais du cycle économique', 'c' => false],
                            ['v' => 'Les garanties conservent toujours leur valeur', 'c' => false],
                        ],
                    ],
                    [
                        'q' => 'Quel risque est associé à une forte dépendance aux garanties ?',
                        'a' => [
                            ['v' => 'La valeur et la liquidité des garanties peuvent diminuer précisément lorsque les défauts augmentent', 'c' => true],
                            ['v' => 'Les garanties augmentent toujours pendant une crise', 'c' => false],
                            ['v' => 'Les garanties éliminent automatiquement la LGD', 'c' => false],
                            ['v' => 'Les garanties n’ont aucune valeur économique', 'c' => false],
                        ],
                    ],
                    [
                        'q' => 'Pourquoi le capital économique doit-il être recalibré périodiquement ?',
                        'a' => [
                            ['v' => 'Le profil de risque, les données, les scénarios et les conditions économiques évoluent', 'c' => true],
                            ['v' => 'Le profil de risque reste toujours constant', 'c' => false],
                            ['v' => 'Le capital économique est une constante universelle', 'c' => false],
                            ['v' => 'Les modèles ne nécessitent jamais de recalibrage', 'c' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Risque de liquidité, financement et résilience',
                'questions' => [
                    [
                        'q' => 'Pourquoi le risque de liquidité peut-il être non linéaire pendant une crise ?',
                        'a' => [
                            ['v' => Une détérioration progressive peut déclencher des appels de marge, des ventes forcées et des retraits qui accélèrent brutalement les besoins de liquidité', 'c' => true],
                            ['v' => 'Les besoins de liquidité diminuent toujours avec le stress', 'c' => false],
                            ['v' => 'Les marchés deviennent automatiquement plus profonds', 'c' => false],
                            ['v' => 'Les appels de marge disparaissent', 'c' => false],
                        ],
                    ],
                    [
                        'q' => 'Quel est le principal objectif d’un liquidity stress test ?',
                        'a' => [
                            ['v' => 'Évaluer la capacité à absorber des sorties de trésorerie sévères et à maintenir les obligations de paiement', 'c' => true],
                            ['v' => 'Prévoir exactement le prix des actions', 'c' => false],
                            ['v' => 'Garantir un financement illimité', 'c' => false],
                            ['v' => 'Mesurer uniquement le risque de crédit', 'c' => false],
                        ],
                    ],
                    [
                        'q' => 'Pourquoi les hypothèses de comportement des dépôts doivent-elles être stressées ?',
                        'a' => [
                            ['v' => Les retraits peuvent être beaucoup plus rapides et importants en période de perte de confiance', 'c' => true],
                            ['v' => 'Les dépôts sont toujours parfaitement stables', 'c' => false],
                            ['v' => 'Les clients ne réagissent jamais aux crises', 'c' => false],
                            ['v' => 'Les dépôts sont indépendants de la réputation', 'c' => false],
                        ],
                    ],
                    [
                        'q' => 'Quel est le danger d’une dépendance excessive au financement de marché à court terme ?',
                        'a' => [
                            ['v' => 'Le refinancement peut devenir indisponible ou extrêmement coûteux lorsque la confiance disparaît', 'c' => true],
                            ['v' => 'Le coût diminue toujours pendant une crise', 'c' => false],
                            ['v' => 'Le financement devient permanent', 'c' => false],
                            ['v' => 'La liquidité de marché augmente automatiquement', 'c' => false],
                        ],
                    ],
                    [
                        'q' => 'Pourquoi le risque de liquidité de marché et le risque de financement sont-ils interdépendants ?',
                        'a' => [
                            ['v' => 'Une difficulté à vendre des actifs peut réduire les ressources disponibles tandis qu’un besoin de financement urgent peut forcer des ventes défavorables', 'c' => true],
                            ['v' => 'Ils sont toujours indépendants', 'c' => false],
                            ['v' => 'Le financement élimine le risque de marché', 'c' => false],
                            ['v' => 'Les actifs sont toujours vendus à leur valeur comptable', 'c' => false],
                        ],
                    ],
                    [
                        'q' => 'Pourquoi la diversification des sources de financement est-elle importante ?',
                        'a' => [
                            ['v' => Elle réduit la dépendance à un canal unique susceptible de devenir indisponible', 'c' => true],
                            ['v' => 'Elle garantit des coûts constants', 'c' => false],
                            ['v' => 'Elle supprime les échéances', 'c' => false],
                            ['v' => 'Elle élimine tout risque de refinancement', 'c' => false],
                        ],
                    ],
                    [
                        'q' => 'Quel rôle joue un contingency funding plan ?',
                        'a' => [
                            ['v' => 'Il définit les sources, responsabilités, déclencheurs et actions à utiliser lors d’une crise de liquidité', 'c' => true],
                            ['v' => 'Il remplace le budget annuel', 'c' => false],
                            ['v' => 'Il garantit une liquidité illimitée', 'c' => false],
                            ['v' => 'Il ne contient aucun scénario de crise', 'c' => false],
                        ],
                    ],
                    [
                        'q' => 'Pourquoi les actifs liquides de haute qualité ne constituent-ils pas une protection absolue ?',
                        'a' => [
                            ['v' => Leur liquidité et leur valeur mobilisable peuvent être affectées par les conditions de marché et les décotes', 'c' => true],
                            ['v' => 'Ils conservent toujours exactement leur prix', 'c' => false],
                            ['v' => 'Ils sont toujours immédiatement convertibles sans coût', 'c' => false],
                            ['v' => 'Ils ne peuvent jamais subir de décote', 'c' => false],
                        ],
                    ],
                    [
                        'q' => 'Pourquoi faut-il intégrer les appels de marge dans les projections de liquidité ?',
                        'a' => [
                            ['v' => 'Les dérivés peuvent générer des sorties importantes précisément lors des mouvements de marché défavorables', 'c' => true],
                            ['v' => 'Les dérivés ne génèrent jamais de flux', 'c' => false],
                            ['v' => 'Les appels de marge sont toujours prévisibles avec certitude', 'c' => false],
                            ['v' => 'Ils n’ont aucun lien avec la liquidité', 'c' => false],
                        ],
                    ],
                    [
                        'q' => 'Quel indicateur peut aider à évaluer la résilience structurelle de liquidité ?',
                        'a' => [
                            ['v' => La comparaison entre les ressources stables disponibles et les besoins de financement structurels', 'c' => true],
                            ['v' => 'Le nombre de transactions quotidiennes uniquement', 'c' => false],
                            ['v' => 'Le bénéfice par action uniquement', 'c' => false],
                            ['v' => 'Le nombre de comptes clients', 'c' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Dérivés, couverture et gestion dynamique des expositions',
                'questions' => [
                    [
                        'q' => 'Pourquoi une stratégie de couverture dynamique doit-elle être gouvernée par des règles précises ?',
                        'a' => [
                            ['v' => 'Les réajustements fréquents peuvent créer des coûts, des risques opérationnels et des positions involontaires', 'c' => true],
                            ['v' => 'Une couverture dynamique ne produit jamais de coûts', 'c' => false],
                            ['v' => 'Les expositions ne changent jamais', 'c' => false],
                            ['v' => 'Les règles rendent les pertes impossibles', 'c' => false],
                        ],
                    ],
                    [
                        'q' => 'Quel est le principal avantage d’une option par rapport à un forward pour une exposition incertaine ?',
                        'a' => [
                            ['v' => 'Elle peut fournir une protection tout en conservant une certaine flexibilité si l’exposition réelle diffère de la prévision', 'c' => true],
                            ['v' => 'Elle est toujours moins chère', 'c' => false],
                            ['v' => 'Elle garantit une couverture parfaite', 'c' => false],
                            ['v' => 'Elle élimine le risque de marché', 'c' => false],
                        ],
                    ],
                    [
                        'q' => 'Quel risque est créé par une couverture excessive ?',
                        'a' => [
                            ['v' => L’entreprise peut prendre une position nette qui dépasse son exposition économique réelle', 'c' => true],
                            ['v' => 'Le risque de marché disparaît', 'c' => false],
                            ['v' => 'La liquidité augmente automatiquement', 'c' => false],
                            ['v' => 'Le dérivé perd toujours toute valeur', 'c' => false],
                        ],
                    ],
                    [
                        'q' => 'Pourquoi les coûts de transaction sont-ils importants dans une stratégie de couverture dynamique ?',
                        'a' => [
                            ['v' => Des rééquilibrages trop fréquents peuvent réduire significativement le bénéfice économique de la couverture', 'c' => true],
                            ['v' => 'Les coûts sont toujours nuls', 'c' => false],
                            ['v' => 'Ils ne concernent que les obligations', 'c' => false],
                            ['v' => 'Ils augmentent toujours la performance', 'c' => false],
                        ],
                    ],
                    [
                        'q' => 'Quel est le rôle d’un hedge ratio ?',
                        'a' => [
                            ['v' => 'Il indique la proportion de l’exposition à couvrir par rapport à l’instrument de couverture', 'c' => true],
                            ['v' => 'Il mesure uniquement la rentabilité', 'c' => false],
                            ['v' => 'Il indique la PD', 'c' => false],
                            ['v' => 'Il mesure la qualité comptable', 'c' => false],
                        ],
                    ],
                    [
                        'q' => 'Pourquoi un hedge ratio optimal peut-il différer de 100 % ?',
                        'a' => [
                            ['v' => 'Les corrélations, volatilités, coûts et imperfections de l’instrument de couverture peuvent rendre une couverture partielle optimale', 'c' => true],
                            ['v' => 'Une couverture à 100 % est toujours illégale', 'c' => false],
                            ['v' => 'Les marchés ne permettent jamais une couverture complète', 'c' => false],
                            ['v' => 'Le ratio est toujours arbitraire', 'c' => false],
                        ],
                    ],
                    [
                        'q' => 'Pourquoi le basis risk doit-il être suivi après la mise en place d’une couverture ?',
                        'a' => [
                            ['v' => 'La relation entre l’exposition et l’instrument de couverture peut évoluer dans le temps', 'c' => true],
                            ['v' => 'La corrélation reste toujours constante', 'c' => false],
                            ['v' => 'Le basis risk disparaît après signature du contrat', 'c' => false],
                            ['v' => 'Il ne concerne que les opérations comptables', 'c' => false],
                        ],
                    ],
                    [
                        'q' => 'Pourquoi une couverture peut-elle produire une perte comptable tout en restant économiquement efficace ?',
                        'a' => [
                            ['v' => 'L’instrument de couverture et l’exposition couverte peuvent être comptabilisés ou valorisés selon des temporalités différentes', 'c' => true],
                            ['v' => 'Une couverture efficace ne peut jamais produire de perte', 'c' => false],
                            ['v' => 'La comptabilité élimine toujours les pertes', 'c' => false],
                            ['v' => 'Les dérivés ne sont jamais valorisés', 'c' => false],
                        ],
                    ],
                    [
                        'q' => 'Pourquoi les limites de dérivés doivent-elles intégrer le risque de contrepartie ?',
                        'a' => [
                            ['v' => 'La valeur positive future des contrats peut créer une exposition importante envers une même contrepartie', 'c' => true],
                            ['v' => 'Les dérivés ne créent jamais de risque de crédit', 'c' => false],
                            ['v' => 'Les contrats sont toujours garantis intégralement', 'c' => false],
                            ['v' => 'La contrepartie n’a aucune importance après signature', 'c' => false],
                        ],
                    ],
                    [
                        'q' => 'Quel est l’objectif d’un programme de couverture documenté ?',
                        'a' => [
                            ['v' => Définir les expositions admissibles, les instruments autorisés, les limites, les responsabilités et les méthodes de suivi', 'c' => true],
                            ['v' => Autoriser toutes les opérations sans contrôle', 'c' => false],
                            ['v' => Garantir un profit sur chaque dérivé', 'c' => false],
                            ['v' => Remplacer la fonction risque', 'c' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Risque de contrepartie et ajustements de valorisation',
                'questions' => [
                    [
                        'q' => 'Pourquoi le CVA est-il pertinent dans la valorisation de certains dérivés ?',
                        'a' => [
                            ['v' => 'Il reflète notamment l’ajustement lié au risque de crédit de la contrepartie sur les expositions positives futures', 'c' => true],
                            ['v' => 'Il mesure uniquement le risque opérationnel', 'c' => false],
                            ['v' => 'Il garantit le recouvrement intégral', 'c' => false],
                            ['v' => 'Il mesure uniquement la liquidité', 'c' => false],
                        ],
                    ],
                    [
                        'q' => 'Quel est le principe général du DVA ?',
                        'a' => [
                            ['v' => 'Il reflète un ajustement associé au risque de crédit propre de l’entité dans certaines valorisations de passifs', 'c' => true],
                            ['v' => 'Il mesure uniquement le risque de marché', 'c' => false],
                            ['v' => 'Il représente toujours une charge opérationnelle', 'c' => false],
                            ['v' => 'Il mesure le risque de change', 'c' => false],
                        ],
                    ],
                    [
                        'q' => 'Pourquoi l’exposition future potentielle est-elle importante pour les dérivés à long terme ?',
                        'a' => [
                            ['v' => 'La valeur d’un contrat peut devenir fortement positive ou négative selon les mouvements futurs des facteurs de marché', 'c' => true],
                            ['v' => 'La valeur future reste toujours égale à zéro', 'c' => false],
                            ['v' => 'Le notionnel représente toujours la perte réelle', 'c' => false],
                            ['v' => 'Les marchés ne changent jamais après la transaction', 'c' => false],
                        ],
                    ],
                    [
                        'q' => 'Pourquoi les accords de collateralisation peuvent-ils réduire mais pas éliminer le risque de contrepartie ?',
                        'a' => [
                            ['v' => Il peut subsister des délais, des seuils, des disputes de marge, des risques de liquidation et des risques juridiques', 'c' => true],
                            ['v' => Le collatéral garantit toujours 100 % de récupération', 'c' => false],
                            ['v' => Les appels de marge sont toujours instantanés', 'c' => false],
                            ['v' => Les garanties éliminent tous les risques opérationnels', 'c' => false],
                        ],
                    ],
                    [
                        'q' => 'Pourquoi le netting juridique est-il crucial dans le calcul de l’exposition ?',
                        'a' => [
                            ['v' => Une compensation juridiquement opposable peut réduire l’exposition nette en cas de défaut', 'c' => true],
                            ['v' => Toute compensation économique est automatiquement juridiquement valable', 'c' => false],
                            ['v' => Le netting augmente toujours l’exposition', 'c' => false],
                            ['v' => Il ne dépend jamais des contrats', 'c' => false],
                        ],
                    ],
                    [
                        'q' => 'Pourquoi les appels de marge peuvent-ils devenir procycliques ?',
                        'a' => [
                            ['v' => 'Une hausse des besoins de collatéral pendant une baisse de marché peut forcer des ventes et amplifier la pression sur les prix', 'c' => true],
                            ['v' => 'Ils réduisent toujours les ventes forcées', 'c' => false],
                            ['v' => 'Ils n’ont aucun effet sur la liquidité', 'c' => false],
                            ['v' => 'Ils interviennent uniquement lorsque les marchés montent', 'c' => false],
                        ],
                    ],
                    [
                        'q' => 'Pourquoi faut-il tester régulièrement les accords de compensation ?',
                        'a' => [
                            ['v' => 'La validité juridique et l’applicabilité des clauses doivent être vérifiées dans les juridictions concernées', 'c' => true],
                            ['v' => 'Les contrats sont automatiquement valides pour toujours', 'c' => false],
                            ['v' => 'La compensation ne dépend jamais du droit', 'c' => false],
                            ['v' => 'Les contrats n’ont aucun impact sur l’exposition', 'c' => false],
                        ],
                    ],
                    [
                        'q' => 'Quel est l’intérêt d’une limite de concentration par contrepartie ?',
                        'a' => [
                            ['v' => 'Elle empêche qu’un défaut individuel puisse générer une perte disproportionnée au niveau du portefeuille', 'c' => true],
                            ['v' => 'Elle garantit la solvabilité de chaque contrepartie', 'c' => false],
                            ['v' => 'Elle élimine le risque systémique', 'c' => false],
                            ['v' => 'Elle interdit tous les dérivés', 'c' => false],
                        ],
                    ],
                    [
                        'q' => 'Pourquoi les ratings externes ne doivent-ils pas constituer l’unique source d’analyse du crédit ?',
                        'a' => [
                            ['v' => 'Ils peuvent être retardés, réviser tardivement le risque ou ne pas capturer certaines vulnérabilités spécifiques', 'c' => true],
                            ['v' => 'Ils sont toujours faux', 'c' => false],
                            ['v' => 'Ils ne mesurent jamais le crédit', 'c' => false],
                            ['v' => 'Ils garantissent tous les défauts futurs', 'c' => false],
                        ],
                    ],
                    [
                        'q' => 'Quel principe doit guider la gestion d’une contrepartie en difficulté ?',
                        'a' => [
                            ['v' => Réduire l’exposition lorsque cela est possible tout en tenant compte du cadre contractuel, du collatéral et du risque de liquidation', 'c' => true],
                            ['v' => 'Augmenter automatiquement toutes les positions', 'c' => false],
                            ['v' => 'Ignorer les changements de qualité de crédit', 'c' => false],
                            ['v' => 'Supprimer les limites de contrepartie', 'c' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Risque systémique, contagion et stabilité financière',
                'questions' => [
                    [
                        'q' => 'Pourquoi la corrélation entre pertes peut-elle augmenter pendant une crise systémique ?',
                        'a' => [
                            ['v' => 'Les institutions deviennent simultanément exposées aux mêmes facteurs macrofinanciers et contraintes de liquidité', 'c' => true],
                            ['v' => 'Les facteurs communs disparaissent', 'c' => false],
                            ['v' => 'La diversification devient parfaite', 'c' => false],
                            ['v' => 'Les marchés cessent toute interaction', 'c' => false],
                        ],
                    ],
                    [
                        'q' => 'Quel mécanisme peut transformer un choc de marché en crise financière plus large ?',
                        'a' => [
                            ['v' => 'La combinaison du levier, des appels de marge, des ventes forcées et des interconnexions de financement', 'c' => true],
                            ['v' => 'Une hausse automatique des liquidités', 'c' => false],
                            ['v' => 'Une réduction systématique des corrélations', 'c' => false],
                            ['v' => 'Une disparition des besoins de financement', 'c' => false],
                        ],
                    ],
                    [
                        'q' => 'Pourquoi les institutions systémiques nécessitent-elles une surveillance renforcée ?',
                        'a' => [
                            ['v' => 'Leur défaillance ou leur désorganisation peut avoir des effets importants sur d’autres acteurs et marchés', 'c' => true],
                            ['v' => 'Elles ne prennent jamais de risques', 'c' => false],
                            ['v' => 'Elles sont toujours indépendantes', 'c' => false],
                            ['v' => 'Leur taille élimine les pertes', 'c' => false],
                        ],
                    ],
                    [
                        'q' => 'Qu’est-ce que le wrong-way risk ?',
                        'a' => [
                            ['v' => 'Une situation où l’exposition à une contrepartie augmente précisément lorsque la qualité de crédit de cette contrepartie se détériore', 'c' => true],
                            ['v' => 'Une réduction de l’exposition lorsque le risque augmente', 'c' => false],
                            ['v' => 'Un risque exclusivement opérationnel', 'c' => false],
                            ['v' => 'Une absence de corrélation', 'c' => false],
                        ],
                    ],
                    [
                        'q' => 'Pourquoi le wrong-way risk est-il particulièrement dangereux ?',
                        'a' => [
                            ['v' => 'Le risque de crédit et l’exposition évoluent dans une direction défavorable simultanément', 'c' => true],
                            ['v' => 'Il réduit toujours la perte potentielle', 'c' => false],
                            ['v' => 'Il rend les garanties plus liquides', 'c' => false],
                            ['v' => 'Il élimine les pertes extrêmes', 'c' => false],
                        ],
                    ],
                    [
                        'q' => 'Pourquoi les réseaux d’interconnexion sont-ils utiles dans l’analyse systémique ?',
                        'a' => [
                            ['v' => 'Ils permettent d’identifier les canaux par lesquels un choc peut se propager entre institutions', 'c' => true],
                            ['v' => 'Ils prouvent que les institutions sont indépendantes', 'c' => false],
                            ['v' => 'Ils éliminent les risques de contagion', 'c' => false],
                            ['v' => 'Ils remplacent les stress tests', 'c' => false],
                        ],
                    ],
                    [
                        'q' => 'Quel effet peut produire une hausse simultanée des exigences de marge ?',
                        'a' => [
                            ['v' => 'Elle peut provoquer une demande de liquidité collective et renforcer les ventes d’actifs', 'c' => true],
                            ['v' => 'Elle réduit toujours la volatilité', 'c' => false],
                            ['v' => 'Elle augmente automatiquement les prix', 'c' => false],
                            ['v' => 'Elle élimine les besoins de financement', 'c' => false],
                        ],
                    ],
                    [
                        'q' => 'Pourquoi les scénarios systémiques doivent-ils intégrer des boucles de rétroaction ?',
                        'a' => [
                            ['v' => 'Les pertes initiales peuvent provoquer des réactions qui génèrent ensuite de nouvelles pertes', 'c' => true],
                            ['v' => 'Les marchés n’ont aucun mécanisme de rétroaction', 'c' => false],
                            ['v' => 'Les pertes ne peuvent jamais se propager', 'c' => false],
                            ['v' => 'Les prix restent indépendants des ventes', 'c' => false],
                        ],
                    ],
                    [
                        'q' => 'Pourquoi le risque systémique ne peut-il pas être évalué uniquement au niveau d’une institution ?',
                        'a' => [
                            ['v' => 'Les vulnérabilités peuvent provenir des interactions entre plusieurs institutions, marchés et infrastructures', 'c' => true],
                            ['v' => 'Les institutions n’ont aucune interaction', 'c' => false],
                            ['v' => 'Le risque individuel suffit toujours', 'c' => false],
                            ['v' => 'Les marchés financiers sont totalement isolés', 'c' => false],
                        ],
                    ],
                    [
                        'q' => 'Quel objectif poursuit une analyse macroprudentielle ?',
                        'a' => [
                            ['v' => Identifier et réduire les risques susceptibles de menacer la stabilité du système financier dans son ensemble', 'c' => true],
                            ['v' => Maximiser le rendement d’une seule action', 'c' => false],
                            ['v' => Éliminer toutes les fluctuations de marché', 'c' => false],
                            ['v' => Remplacer la gestion individuelle des risques', 'c' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Stress testing professionnel et scénarios de rupture',
                'questions' => [
                    [
                        'q' => 'Quel est le principal objectif d’un reverse stress test professionnel ?',
                        'a' => [
                            ['v' => 'Identifier les scénarios ou combinaisons de scénarios susceptibles de rendre le modèle économique ou la solvabilité non viables', 'c' => true],
                            ['v' => 'Identifier uniquement les scénarios favorables', 'c' => false],
                            ['v' => 'Maximiser les revenus dans toutes les conditions', 'c' => false],
                            ['v' => 'Éliminer les hypothèses de risque', 'c' => false],
                        ],
                    ],
                    [
                        'q' => 'Pourquoi les scénarios de stress doivent-ils être cohérents entre les différents types de risque ?',
                        'a' => [
                            ['v' => 'Un même choc macroéconomique peut simultanément affecter le crédit, le marché, la liquidité et le financement', 'c' => true],
                            ['v' => 'Chaque risque évolue toujours indépendamment', 'c' => false],
                            ['v' => 'Les scénarios séparés sont toujours plus réalistes', 'c' => false],
                            ['v' => 'Les interactions entre risques sont négligeables', 'c' => false],
                        ],
                    ],
                    [
                        'q' => 'Quel est le risque d’un stress test basé uniquement sur des scénarios historiques ?',
                        'a' => [
                            ['v' => 'Il peut manquer des événements futurs structurellement différents des crises observées', 'c' => true],
                            ['v' => 'Il capture automatiquement tous les risques futurs', 'c' => false],
                            ['v' => 'Il élimine les risques émergents', 'c' => false],
                            ['v' => 'Il est toujours plus conservateur', 'c' => false],
                        ],
                    ],
                    [
                        'q' => 'Pourquoi faut-il tester les hypothèses comportementales dans les scénarios de liquidité ?',
                        'a' => [
                            ['v' => 'Les comportements peuvent changer de manière non linéaire lorsque la confiance se dégrade', 'c' => true],
                            ['v' => 'Les clients suivent toujours les hypothèses contractuelles', 'c' => false],
                            ['v' => 'La confiance n’a aucun impact sur les retraits', 'c' => false],
                            ['v' => 'Les comportements sont parfaitement déterministes', 'c' => false],
                        ],
                    ],
                    [
                        'q' => 'Pourquoi la durée d’un scénario de stress est-elle importante ?',
                        'a' => [
                            ['v' => 'Les besoins de liquidité, les échéances de financement et les capacités de réaction dépendent du temps', 'c' => true],
                            ['v' => 'La durée n’a aucun effet sur les flux', 'c' => false],
                            ['v' => 'Toutes les pertes se réalisent instantanément', 'c' => false],
                            ['v' => 'Les marchés ont toujours une profondeur constante', 'c' => false],
                        ],
                    ],
                    [
                        'q' => 'Pourquoi faut-il analyser les effets de second tour dans un stress test ?',
                        'a' => [
                            ['v' => 'Les premières pertes peuvent déclencher des réactions qui amplifient les pertes ultérieures', 'c' => true],
                            ['v' => 'Les effets de second tour réduisent toujours le risque', 'c' => false],
                            ['v' => 'Ils ne concernent jamais la liquidité', 'c' => false],
                            ['v' => 'Ils sont toujours impossibles à modéliser', 'c' => false],
                        ],
                    ],
                    [
                        'q' => 'Quel est l’intérêt d’un scénario combinant récession, hausse des spreads et retrait des financements ?',
                        'a' => [
                            ['v' => 'Il permet d’évaluer une situation où plusieurs mécanismes de risque se renforcent simultanément', 'c' => true],
                            ['v' => 'Il ne mesure qu’un seul risque', 'c' => false],
                            ['v' => 'Il garantit une perte nulle', 'c' => false],
                            ['v' => 'Il élimine les interactions financières', 'c' => false],
                        ],
                    ],
                    [
                        'q' => 'Pourquoi les stress tests doivent-ils être intégrés à la planification stratégique ?',
                        'a' => [
                            ['v' => 'Ils peuvent révéler des limites de croissance, de levier, de financement ou de concentration', 'c' => true],
                            ['v' => 'Ils servent uniquement à produire des rapports réglementaires', 'c' => false],
                            ['v' => 'Ils n’ont aucun impact sur la stratégie', 'c' => false],
                            ['v' => 'Ils garantissent la croissance', 'c' => false],
                        ],
                    ],
                    [
                        'q' => 'Quel élément rend un scénario de stress particulièrement utile à la direction ?',
                        'a' => [
                            ['v' => 'La traduction des pertes estimées en impacts sur capital, liquidité, limites et décisions possibles', 'c' => true],
                            ['v' => 'Une simple liste de variables économiques', 'c' => false],
                            ['v' => 'L’absence de seuil critique', 'c' => false],
                            ['v' => 'L’utilisation exclusive de données historiques', 'c' => false],
                        ],
                    ],
                    [
                        'q' => 'Pourquoi les scénarios doivent-ils être soumis à une gouvernance formelle ?',
                        'a' => [
                            ['v' => 'Pour garantir la pertinence, la traçabilité, la cohérence et l’approbation des hypothèses utilisées', 'c' => true],
                            ['v' => 'Pour empêcher toute discussion critique', 'c' => false],
                            ['v' => 'Pour garantir que les résultats seront positifs', 'c' => false],
                            ['v' => 'Pour éviter toute révision', 'c' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Risque de modèle, données et validation indépendante',
                'questions' => [
                    [
                        'q' => 'Quel est le principal enjeu d’un modèle de risque utilisé hors de son domaine de calibration ?',
                        'a' => [
                            ['v' => 'Ses relations statistiques peuvent ne plus être valides et produire des estimations fortement biaisées', 'c' => true],
                            ['v' => 'Le modèle devient automatiquement plus conservateur', 'c' => false],
                            ['v' => 'La qualité des données devient sans importance', 'c' => false],
                            ['v' => 'Le modèle garantit une précision supérieure', 'c' => false],
                        ],
                    ],
                    [
                        'q' => 'Pourquoi les modèles doivent-ils être soumis à des analyses de sensibilité ?',
                        'a' => [
                            ['v' => 'Pour déterminer comment les résultats changent lorsque les hypothèses ou paramètres importants sont modifiés', 'c' => true],
                            ['v' => 'Pour empêcher toute modification du modèle', 'c' => false],
                            ['v' => 'Pour supprimer les paramètres', 'c' => false],
                            ['v' => 'Pour garantir des résultats constants', 'c' => false],
                        ],
                    ],
                    [
                        'q' => 'Quel est le risque d’un modèle très complexe mais peu explicable ?',
                        'a' => [
                            ['v' => 'Il peut être difficile de détecter ses erreurs, de challenger ses hypothèses et de comprendre ses résultats', 'c' => true],
                            ['v' => 'Il est nécessairement plus précis', 'c' => false],
                            ['v' => 'Il élimine le risque de modèle', 'c' => false],
                            ['v' => 'Il ne nécessite aucune validation', 'c' => false],
                        ],
                    ],
                    [
                        'q' => 'Pourquoi la qualité des données doit-elle être contrôlée en amont de la modélisation ?',
                        'a' => [
                            ['v' => 'Les erreurs, valeurs manquantes ou biais de sélection peuvent contaminer directement les estimations de risque', 'c' => true],
                            ['v' => 'Les modèles corrigent toujours toutes les erreurs de données', 'c' => false],
                            ['v' => 'Les données n’influencent pas les paramètres', 'c' => false],
                            ['v' => 'Les données historiques sont toujours parfaites', 'c' => false],
                        ],
                    ],
                    [
                        'q' => 'Pourquoi la validation back-to-back est-elle utile dans certains modèles de valorisation ?',
                        'a' => [
                            ['v' => 'Elle permet de comparer les résultats du modèle aux valeurs observées ou indépendamment déterminées', 'c' => true],
                            ['v' => 'Elle remplace toute validation théorique', 'c' => false],
                            ['v' => 'Elle garantit une absence de volatilité', 'c' => false],
                            ['v' => 'Elle mesure uniquement le risque opérationnel', 'c' => false],
                        ],
                    ],
                    [
                        'q' => 'Qu’est-ce qu’un modèle challenger ?',
                        'a' => [
                            ['v' => 'Un modèle alternatif utilisé pour comparer les résultats et identifier d’éventuelles anomalies du modèle principal', 'c' => true],
                            ['v' => 'Un modèle destiné à remplacer automatiquement le modèle principal', 'c' => false],
                            ['v' => 'Un outil sans données', 'c' => false],
                            ['v' => 'Un modèle uniquement comptable', 'c' => false],
                        ],
                    ],
                    [
                        'q' => 'Pourquoi le suivi des performances du modèle après déploiement est-il nécessaire ?',
                        'a' => [
                            ['v' => 'Les relations entre variables et le comportement des marchés peuvent évoluer après la calibration initiale', 'c' => true],
                            ['v' => 'La calibration initiale reste toujours parfaite', 'c' => false],
                            ['v' => 'Les modèles ne vieillissent jamais', 'c' => false],
                            ['v' => 'Le suivi est uniquement administratif', 'c' => false],
                        ],
                    ],
                    [
                        'q' => 'Pourquoi les exceptions du modèle doivent-elles être documentées ?',
                        'a' => [
                            ['v' => 'Elles permettent de comprendre les limites du modèle et d’éviter son utilisation inappropriée', 'c' => true],
                            ['v' => 'Elles doivent toujours être supprimées', 'c' => false],
                            ['v' => 'Elles prouvent que le modèle est parfait', 'c' => false],
                            ['v' => 'Elles n’ont aucun intérêt de gouvernance', 'c' => false],
                        ],
                    ],
                    [
                        'q' => 'Quel est le rôle d’une validation indépendante dans le cycle de vie d’un modèle ?',
                        'a' => [
                            ['v' => 'Évaluer séparément la conception, les données, les hypothèses, les performances et les limites du modèle', 'c' => true],
                            ['v' => 'Développer directement toutes les positions de marché', 'c' => false],
                            ['v' => 'Garantir les profits', 'c' => false],
                            ['v' => 'Remplacer la gouvernance du risque', 'c' => false],
                        ],
                    ],
                    [
                        'q' => 'Pourquoi les modèles doivent-ils avoir une documentation complète ?',
                        'a' => [
                            ['v' => 'Pour assurer la reproductibilité, la compréhension, la gouvernance, la validation et la traçabilité des décisions', 'c' => true],
                            ['v' => 'Pour empêcher toute revue indépendante', 'c' => false],
                            ['v' => 'Pour cacher les hypothèses', 'c' => false],
                            ['v' => 'Pour éviter les tests de robustesse', 'c' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Gestion intégrée du capital, du risque et de la rentabilité',
                'questions' => [
                    [
                        'q' => 'Pourquoi le capital doit-il être alloué en fonction du risque ?',
                        'a' => [
                            ['v' => 'Pour tenir compte de la consommation de capital liée aux différents profils de risque et comparer leur rentabilité ajustée du risque', 'c' => true],
                            ['v' => 'Pour maximiser uniquement le volume des actifs', 'c' => false],
                            ['v' => 'Pour supprimer les activités risquées sans analyse', 'c' => false],
                            ['v' => 'Pour garantir le rendement de chaque activité', 'c' => false],
                        ],
                    ],
                    [
                        'q' => 'Que cherche à mesurer une rentabilité ajustée du risque ?',
                        'a' => [
                            ['v' => 'La rentabilité obtenue relativement au niveau de risque ou de capital consommé', 'c' => true],
                            ['v' => 'Le bénéfice brut sans tenir compte du risque', 'c' => false],
                            ['v' => 'La volatilité des taux uniquement', 'c' => false],
                            ['v' => 'La liquidité du marché uniquement', 'c' => false],
                        ],
                    ],
                    [
                        'q' => 'Pourquoi une activité très rentable peut-elle être économiquement peu attractive ?',
                        'a' => [
                            ['v' => 'Elle peut consommer beaucoup de capital ou présenter des pertes extrêmes disproportionnées par rapport à son rendement', 'c' => true],
                            ['v' => 'Une forte rentabilité élimine toujours le risque', 'c' => false],
                            ['v' => 'Le capital n’a aucun coût', 'c' => false],
                            ['v' => 'Le risque n’influence jamais la rentabilité', 'c' => false],
                        ],
                    ],
                    [
                        'q' => 'Pourquoi le capital économique doit-il être comparé au capital réglementaire sans les confondre ?',
                        'a' => [
                            ['v' => 'Ils répondent à des objectifs et méthodologies différents, même s’ils peuvent se compléter dans la gestion globale du capital', 'c' => true],
                            ['v' => 'Ils sont toujours strictement identiques', 'c' => false],
                            ['v' => 'Le capital réglementaire est toujours inférieur', 'c' => false],
                            ['v' => 'Le capital économique ne dépend jamais du risque', 'c' => false],
                        ],
                    ],
                    [
                        'q' => 'Quel est l’intérêt d’une analyse de rentabilité ajustée du risque par ligne d’activité ?',
                        'a' => [
                            ['v' => 'Comparer les activités en tenant compte à la fois des revenus, coûts, pertes attendues et consommation de capital', 'c' => true],
                            ['v' => 'Comparer uniquement les chiffres d’affaires', 'c' => false],
                            ['v' => 'Ignorer le coût du financement', 'c' => false],
                            ['v' => 'Garantir que chaque activité soit rentable', 'c' => false],
                        ],
                    ],
                    [
                        'q' => 'Pourquoi le coût de liquidité doit-il parfois être intégré à l’analyse de rentabilité ?',
                        'a' => [
                            ['v' => 'Certaines activités consomment davantage de financement ou de liquidité que d’autres', 'c' => true],
                            ['v' => 'La liquidité n’a jamais de coût', 'c' => false],
                            ['v' => 'Le financement est toujours gratuit', 'c' => false],
                            ['v' => 'Toutes les activités consomment la même liquidité', 'c' => false],
                        ],
                    ],
                    [
                        'q' => 'Pourquoi une stratégie de croissance rapide peut-elle augmenter fortement le risque ?',
                        'a' => [
                            ['v' => 'Elle peut accroître simultanément le levier, les concentrations, les besoins de financement et l’exposition opérationnelle', 'c' => true],
                            ['v' => 'La croissance réduit toujours les risques', 'c' => false],
                            ['v' => 'Le capital augmente automatiquement au même rythme', 'c' => false],
                            ['v' => 'Les concentrations diminuent toujours avec la croissance', 'c' => false],
                        ],
                    ],
                    [
                        'q' => 'Quel est l’intérêt de relier les limites de risque aux objectifs commerciaux ?',
                        'a' => [
                            ['v' => 'Cela permet de développer les activités dans les limites compatibles avec l’appétit pour le risque et le capital disponible', 'c' => true],
                            ['v' => 'Cela permet de supprimer toutes les limites', 'c' => false],
                            ['v' => 'Cela garantit une croissance sans perte', 'c' => false],
                            ['v' => 'Cela rend le capital inutile', 'c' => false],
                        ],
                    ],
                    [
                        'q' => 'Pourquoi le capital doit-il être testé sous stress ?',
                        'a' => [
                            ['v' => 'Des pertes sévères peuvent réduire les fonds disponibles et modifier rapidement les ratios de solvabilité', 'c' => true],
                            ['v' => 'Le capital ne varie jamais', 'c' => false],
                            ['v' => 'Les pertes extrêmes n’affectent pas la solvabilité', 'c' => false],
                            ['v' => 'Les stress tests mesurent uniquement la liquidité', 'c' => false],
                        ],
                    ],
                    [
                        'q' => 'Quel principe résume le mieux une gestion professionnelle du risque financier ?',
                        'a' => [
                            ['v' => 'Accepter consciemment les risques rémunérateurs tout en maintenant les expositions compatibles avec le capital, la liquidité et l’appétit pour le risque', 'c' => true],
                            ['v' => 'Éliminer toute prise de risque', 'c' => false],
                            ['v' => 'Maximiser systématiquement le levier', 'c' => false],
                            ['v' => 'Se fier uniquement aux performances historiques', 'c' => false],
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
