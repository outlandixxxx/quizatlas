```php
<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Major;
use App\Models\Subject;
use App\Models\Quiz;
use App\Models\Question;
use App\Models\Answer;

class FinancialMarketsIntermediateSeeder extends Seeder
{
    public function run(): void
    {
        $major = Major::where('slug', 'finance')->firstOrFail();

        $subject = Subject::where('major_id', $major->id)
            ->where('slug', 'financial-markets')
            ->firstOrFail();

        $quizzes = [

            [
                'title' => 'Structure et fonctionnement des marchés financiers',
                'questions' => [
                    [
                        'question' => 'Quelle distinction décrit correctement le marché primaire ?',
                        'answers' => [
                            ['text' => 'Il concerne l’émission initiale de nouveaux titres par les émetteurs', 'iscorrect' => true],
                            ['text' => 'Il concerne uniquement la revente de titres déjà existants', 'iscorrect' => false],
                            ['text' => 'Il est réservé aux opérations de change', 'iscorrect' => false],
                            ['text' => 'Il concerne uniquement les matières premières', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le rôle principal du marché secondaire ?',
                        'answers' => [
                            ['text' => 'Permettre aux investisseurs d’échanger des titres déjà émis', 'iscorrect' => true],
                            ['text' => 'Créer directement le capital initial des entreprises', 'iscorrect' => false],
                            ['text' => 'Déterminer les taux d’imposition', 'iscorrect' => false],
                            ['text' => 'Émettre exclusivement la monnaie nationale', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi le marché secondaire est-il important pour le marché primaire ?',
                        'answers' => [
                            ['text' => 'Parce qu’il apporte de la liquidité aux investisseurs qui achètent les nouvelles émissions', 'iscorrect' => true],
                            ['text' => 'Parce qu’il garantit la valeur nominale de toutes les actions', 'iscorrect' => false],
                            ['text' => 'Parce qu’il supprime le risque de crédit', 'iscorrect' => false],
                            ['text' => 'Parce qu’il fixe les bénéfices futurs des entreprises', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Que signifie la liquidité d’un marché ?',
                        'answers' => [
                            ['text' => 'La capacité à exécuter des transactions rapidement avec un impact limité sur les prix', 'iscorrect' => true],
                            ['text' => 'La garantie d’un rendement positif', 'iscorrect' => false],
                            ['text' => 'L’absence totale de volatilité', 'iscorrect' => false],
                            ['text' => 'La garantie que tous les titres auront le même prix', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel élément peut généralement réduire la liquidité d’un titre ?',
                        'answers' => [
                            ['text' => 'Un faible volume de transactions et peu d’acheteurs ou vendeurs disponibles', 'iscorrect' => true],
                            ['text' => 'Une forte profondeur du carnet d’ordres', 'iscorrect' => false],
                            ['text' => 'Un grand nombre de participants actifs', 'iscorrect' => false],
                            ['text' => 'Une information largement disponible', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Que représente la profondeur d’un marché ?',
                        'answers' => [
                            ['text' => 'La quantité d’ordres disponibles autour des différents niveaux de prix', 'iscorrect' => true],
                            ['text' => 'La durée de vie juridique d’une entreprise', 'iscorrect' => false],
                            ['text' => 'Le nombre total de banques centrales', 'iscorrect' => false],
                            ['text' => 'La maturité moyenne des obligations uniquement', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Un marché efficient facilite principalement :',
                        'answers' => [
                            ['text' => 'L’intégration rapide de l’information disponible dans les prix', 'iscorrect' => true],
                            ['text' => 'La suppression de toute volatilité', 'iscorrect' => false],
                            ['text' => 'La garantie de rendements supérieurs', 'iscorrect' => false],
                            ['text' => 'La fixation administrative de tous les prix', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les marchés financiers permettent-ils une allocation des capitaux ?',
                        'answers' => [
                            ['text' => 'Ils permettent de transférer des ressources des agents disposant d’épargne vers ceux recherchant un financement', 'iscorrect' => true],
                            ['text' => 'Ils empêchent les entreprises d’emprunter', 'iscorrect' => false],
                            ['text' => 'Ils garantissent que chaque projet sera rentable', 'iscorrect' => false],
                            ['text' => 'Ils remplacent totalement les systèmes bancaires', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle information influence directement la formation du prix d’un actif coté ?',
                        'answers' => [
                            ['text' => Les ordres d’achat et de vente ainsi que les informations pertinentes disponibles', 'iscorrect' => true],
                            ['text' => 'Uniquement la valeur comptable historique', 'iscorrect' => false],
                            ['text' => 'Uniquement le montant du capital social', 'iscorrect' => false],
                            ['text' => 'Le nombre d’employés de la bourse', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est l’un des objectifs d’une infrastructure de marché moderne ?',
                        'answers' => [
                            ['text' => 'Faciliter la négociation, la compensation et le règlement des transactions', 'iscorrect' => true],
                            ['text' => 'Garantir que tous les investisseurs réalisent un bénéfice', 'iscorrect' => false],
                            ['text' => 'Fixer les résultats financiers des entreprises', 'iscorrect' => false],
                            ['text' => 'Supprimer toute possibilité de défaut', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Valorisation des actions et indicateurs boursiers',
                'questions' => [
                    [
                        'question' => 'Que mesure principalement le ratio cours/bénéfice, ou PER ?',
                        'answers' => [
                            ['text' => 'Le rapport entre le cours d’une action et le bénéfice par action', 'iscorrect' => true],
                            ['text' => 'Le rapport entre la dette et les actifs uniquement', 'iscorrect' => false],
                            ['text' => 'Le montant du dividende en valeur absolue', 'iscorrect' => false],
                            ['text' => 'Le rapport entre les liquidités et les salaires', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Un PER élevé peut notamment refléter :',
                        'answers' => [
                            ['text' => 'Des anticipations élevées concernant la croissance future des bénéfices', 'iscorrect' => true],
                            ['text' => 'Une absence certaine de croissance', 'iscorrect' => false],
                            ['text' => 'Une garantie de sous-évaluation', 'iscorrect' => false],
                            ['text' => 'Une obligation d’augmenter les dividendes', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce que le bénéfice par action ?',
                        'answers' => [
                            ['text' => 'Une mesure du bénéfice attribuable à chaque action selon la méthode retenue', 'iscorrect' => true],
                            ['text' => 'Le prix de marché d’une obligation', 'iscorrect' => false],
                            ['text' => 'Le dividende obligatoirement versé', 'iscorrect' => false],
                            ['text' => 'La valeur nominale de l’entreprise', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Que mesure approximativement le rendement du dividende ?',
                        'answers' => [
                            ['text' => 'Le dividende par action rapporté au cours de l’action', 'iscorrect' => true],
                            ['text' => 'Le bénéfice rapporté à la dette uniquement', 'iscorrect' => false],
                            ['text' => 'Le cours rapporté au nombre d’employés', 'iscorrect' => false],
                            ['text' => 'Le chiffre d’affaires rapporté aux actifs uniquement', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Si le cours d’une action augmente alors que son dividende reste inchangé, son rendement du dividende tend à :',
                        'answers' => [
                            ['text' => 'Diminuer', 'iscorrect' => true],
                            ['text' => 'Augmenter automatiquement', 'iscorrect' => false],
                            ['text' => 'Rester toujours identique', 'iscorrect' => false],
                            ['text' => 'Devenir nécessairement nul', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce qu’une capitalisation boursière ?',
                        'answers' => [
                            ['text' => 'La valeur de marché des actions en circulation d’une société', 'iscorrect' => true],
                            ['text' => 'La valeur comptable de toutes ses machines', 'iscorrect' => false],
                            ['text' => 'Le montant de ses dividendes annuels', 'iscorrect' => false],
                            ['text' => 'Le montant de ses impôts futurs', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Une augmentation des bénéfices futurs attendus peut influencer le cours d’une action en :',
                        'answers' => [
                            ['text' => 'Augmentant potentiellement sa valeur si les autres facteurs restent comparables', 'iscorrect' => true],
                            ['text' => 'Réduisant toujours automatiquement son cours', 'iscorrect' => false],
                            ['text' => 'Supprimant son risque de marché', 'iscorrect' => false],
                            ['text' => 'Garantissant un dividende constant', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les flux de trésorerie futurs sont-ils actualisés dans une valorisation ?',
                        'answers' => [
                            ['text' => 'Parce qu’un montant reçu dans le futur a généralement une valeur actuelle différente d’un même montant reçu aujourd’hui', 'iscorrect' => true],
                            ['text' => 'Parce que tous les flux futurs sont nécessairement nuls', 'iscorrect' => false],
                            ['text' => 'Parce que les entreprises ne peuvent pas générer de trésorerie', 'iscorrect' => false],
                            ['text' => 'Parce que le prix d’une action est toujours égal à sa valeur comptable', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Une action est souvent considérée comme sous-évaluée lorsque :',
                        'answers' => [
                            ['text' => 'Son prix de marché est inférieur à une estimation raisonnable de sa valeur intrinsèque', 'iscorrect' => true],
                            ['text' => 'Son prix est supérieur à toute estimation de valeur', 'iscorrect' => false],
                            ['text' => 'Son dividende est nécessairement nul', 'iscorrect' => false],
                            ['text' => 'Elle n’est pas cotée', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi comparer plusieurs indicateurs avant d’évaluer une action ?',
                        'answers' => [
                            ['text' => 'Parce qu’un seul indicateur peut donner une vision incomplète de la situation', 'iscorrect' => true],
                            ['text' => 'Parce qu’un indicateur unique est toujours faux', 'iscorrect' => false],
                            ['text' => 'Pour garantir le prix futur', 'iscorrect' => false],
                            ['text' => 'Pour supprimer le risque de marché', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Obligations, taux et courbe des rendements',
                'questions' => [
                    [
                        'question' => 'Pourquoi le prix d’une obligation à taux fixe évolue-t-il généralement en sens inverse des taux du marché ?',
                        'answers' => [
                            ['text' => 'Parce que les flux fixes deviennent plus ou moins attractifs par rapport aux nouvelles obligations', 'iscorrect' => true],
                            ['text' => 'Parce que le principal change automatiquement', 'iscorrect' => false],
                            ['text' => 'Parce que les coupons sont recalculés chaque jour', 'iscorrect' => false],
                            ['text' => 'Parce que les obligations cessent d’exister', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Une obligation dont le coupon est inférieur aux taux de marché peut généralement se négocier :',
                        'answers' => [
                            ['text' => 'Sous sa valeur nominale', 'iscorrect' => true],
                            ['text' => 'Toujours au-dessus de sa valeur nominale', 'iscorrect' => false],
                            ['text' => 'Uniquement à zéro', 'iscorrect' => false],
                            ['text' => 'À un prix indépendant des taux', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce que la duration d’une obligation ?',
                        'answers' => [
                            ['text' => 'Une mesure de sensibilité du prix de l’obligation aux variations des taux d’intérêt', 'iscorrect' => true],
                            ['text' => 'La durée légale d’une entreprise', 'iscorrect' => false],
                            ['text' => 'Le montant du coupon annuel', 'iscorrect' => false],
                            ['text' => 'Le nombre d’obligations émises', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Toutes choses égales par ailleurs, une obligation de duration plus élevée est généralement :',
                        'answers' => [
                            ['text' => 'Plus sensible aux variations des taux d’intérêt', 'iscorrect' => true],
                            ['text' => 'Moins sensible aux taux dans tous les cas', 'iscorrect' => false],
                            ['text' => 'Sans risque de taux', 'iscorrect' => false],
                            ['text' => 'Toujours plus rentable', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce qu’une courbe des taux ?',
                        'answers' => [
                            ['text' => 'Une représentation des rendements en fonction des maturités', 'iscorrect' => true],
                            ['text' => 'Une courbe représentant uniquement les dividendes', 'iscorrect' => false],
                            ['text' => 'Une mesure du volume d’actions', 'iscorrect' => false],
                            ['text' => 'Un graphique du chiffre d’affaires', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Une courbe des taux inversée signifie généralement que :',
                        'answers' => [
                            ['text' => 'Les taux à court terme sont supérieurs à certains taux à long terme', 'iscorrect' => true],
                            ['text' => 'Tous les taux sont égaux', 'iscorrect' => false],
                            ['text' => 'Les taux longs sont toujours nuls', 'iscorrect' => false],
                            ['text' => 'Les obligations ne sont plus négociables', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel risque concerne la capacité d’un émetteur à honorer ses paiements ?',
                        'answers' => [
                            ['text' => 'Le risque de crédit', 'iscorrect' => true],
                            ['text' => 'Le risque de liquidité uniquement', 'iscorrect' => false],
                            ['text' => 'Le risque opérationnel uniquement', 'iscorrect' => false],
                            ['text' => 'Le risque de change uniquement', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Un spread de crédit plus élevé peut indiquer :',
                        'answers' => [
                            ['text' => 'Une prime de risque plus importante exigée pour l’émetteur', 'iscorrect' => true],
                            ['text' => 'Une garantie de rendement négatif', 'iscorrect' => false],
                            ['text' => 'Une absence totale de risque', 'iscorrect' => false],
                            ['text' => 'Une baisse obligatoire des taux directeurs', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Que signifie la valeur actuelle des flux obligataires ?',
                        'answers' => [
                            ['text' => 'La valeur aujourd’hui des paiements futurs actualisés au taux approprié', 'iscorrect' => true],
                            ['text' => 'Le montant total des coupons sans actualisation', 'iscorrect' => false],
                            ['text' => 'Le nombre de titres en circulation', 'iscorrect' => false],
                            ['text' => 'Le chiffre d’affaires de l’émetteur', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Une hausse de la perception du risque de défaut d’un émetteur tend généralement à :',
                        'answers' => [
                            ['text' => 'Augmenter le rendement exigé et exercer une pression à la baisse sur le prix de ses obligations', 'iscorrect' => true],
                            ['text' => 'Réduire automatiquement le rendement exigé', 'iscorrect' => false],
                            ['text' => 'Garantir une hausse du prix obligataire', 'iscorrect' => false],
                            ['text' => 'Supprimer la prime de risque', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Gestion du risque et diversification des portefeuilles',
                'questions' => [
                    [
                        'question' => 'Quelle différence fondamentale existe entre risque systématique et risque spécifique ?',
                        'answers' => [
                            ['text' => 'Le risque systématique affecte largement le marché tandis que le risque spécifique concerne davantage un émetteur ou secteur', 'iscorrect' => true],
                            ['text' => 'Le risque spécifique concerne toujours tous les marchés', 'iscorrect' => false],
                            ['text' => 'Le risque systématique peut toujours être éliminé par une seule action', 'iscorrect' => false],
                            ['text' => 'Les deux termes désignent exactement le même risque', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel risque peut être fortement réduit par une diversification bien construite ?',
                        'answers' => [
                            ['text' => 'Le risque spécifique', 'iscorrect' => true],
                            ['text' => 'Tous les risques macroéconomiques', 'iscorrect' => false],
                            ['text' => 'Le risque systématique dans son intégralité', 'iscorrect' => false],
                            ['text' => 'Le risque d’inflation dans tous les cas', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Que signifie la corrélation entre deux actifs ?',
                        'answers' => [
                            ['text' => 'Elle mesure la relation statistique entre leurs variations de rendement', 'iscorrect' => true],
                            ['text' => 'Elle mesure uniquement leur prix nominal', 'iscorrect' => false],
                            ['text' => 'Elle garantit leur rendement futur', 'iscorrect' => false],
                            ['text' => 'Elle indique toujours lequel des deux actifs est meilleur', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi des actifs faiblement corrélés peuvent-ils être intéressants dans un portefeuille ?',
                        'answers' => [
                            ['text' => 'Leurs mouvements différents peuvent contribuer à réduire la volatilité globale du portefeuille', 'iscorrect' => true],
                            ['text' => 'Ils garantissent tous deux un rendement positif', 'iscorrect' => false],
                            ['text' => 'Ils suppriment le risque systématique', 'iscorrect' => false],
                            ['text' => 'Ils ont toujours exactement le même rendement', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Que mesure l’écart-type des rendements d’un actif ?',
                        'answers' => [
                            ['text' => 'La dispersion des rendements autour de leur moyenne', 'iscorrect' => true],
                            ['text' => 'Le dividende annuel', 'iscorrect' => false],
                            ['text' => 'Le nombre de titres du portefeuille', 'iscorrect' => false],
                            ['text' => 'La valeur nominale de l’actif', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Un portefeuille peut-il avoir une volatilité inférieure à celle de chacun de ses actifs ?',
                        'answers' => [
                            ['text' => 'Oui, selon les corrélations entre les actifs', 'iscorrect' => true],
                            ['text' => 'Non, c’est mathématiquement impossible', 'iscorrect' => false],
                            ['text' => 'Uniquement si tous les actifs sont identiques', 'iscorrect' => false],
                            ['text' => 'Uniquement lorsque les marchés sont fermés', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est l’effet d’une concentration excessive dans une seule entreprise ?',
                        'answers' => [
                            ['text' => 'Elle augmente l’exposition au risque spécifique de cette entreprise', 'iscorrect' => true],
                            ['text' => 'Elle élimine le risque spécifique', 'iscorrect' => false],
                            ['text' => 'Elle garantit une meilleure diversification', 'iscorrect' => false],
                            ['text' => 'Elle rend le portefeuille automatiquement sans risque', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel élément doit être pris en compte lors de la construction d’un portefeuille ?',
                        'answers' => [
                            ['text' => 'Les objectifs, l’horizon, les contraintes et la tolérance au risque de l’investisseur', 'iscorrect' => true],
                            ['text' => 'Uniquement le prix actuel d’une action', 'iscorrect' => false],
                            ['text' => 'Uniquement le rendement passé', 'iscorrect' => false],
                            ['text' => 'Uniquement le nombre de titres disponibles', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Que signifie rééquilibrer un portefeuille ?',
                        'answers' => [
                            ['text' => 'Ramener les pondérations des actifs vers les objectifs définis', 'iscorrect' => true],
                            ['text' => 'Vendre automatiquement tous les actifs', 'iscorrect' => false],
                            ['text' => 'Acheter uniquement l’actif ayant le plus augmenté', 'iscorrect' => false],
                            ['text' => 'Modifier les règles fiscales du portefeuille', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi le rendement passé ne garantit-il pas le rendement futur ?',
                        'answers' => [
                            ['text' => 'Les conditions économiques, les valorisations et les risques peuvent changer', 'iscorrect' => true],
                            ['text' => 'Parce que les marchés ne produisent jamais de rendement', 'iscorrect' => false],
                            ['text' => 'Parce que les prix sont toujours constants', 'iscorrect' => false],
                            ['text' => 'Parce que les dividendes sont interdits', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Marché des changes et risque de change',
                'questions' => [
                    [
                        'question' => 'Que signifie une appréciation d’une devise ?',
                        'answers' => [
                            ['text' => 'Sa valeur augmente relativement à une autre devise', 'iscorrect' => true],
                            ['text' => 'Sa valeur devient nécessairement nulle', 'iscorrect' => false],
                            ['text' => 'Son taux d’intérêt devient automatiquement nul', 'iscorrect' => false],
                            ['text' => 'Elle cesse d’être négociée', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise qui doit payer une dette en dollars alors que ses revenus sont principalement en dirhams est exposée à :',
                        'answers' => [
                            ['text' => 'Un risque de change lié à l’évolution du dollar contre le dirham', 'iscorrect' => true],
                            ['text' => 'Un risque de dividende uniquement', 'iscorrect' => false],
                            ['text' => 'Un risque de vote', 'iscorrect' => false],
                            ['text' => 'Un risque sans rapport avec les devises', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel instrument peut être utilisé pour fixer à l’avance un taux de change futur ?',
                        'answers' => [
                            ['text' => 'Un contrat de change à terme', 'iscorrect' => true],
                            ['text' => 'Une action ordinaire', 'iscorrect' => false],
                            ['text' => 'Un dividende', 'iscorrect' => false],
                            ['text' => 'Un indice boursier', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est l’objectif principal d’une couverture de change ?',
                        'answers' => [
                            ['text' => 'Réduire l’incertitude liée aux mouvements futurs des devises', 'iscorrect' => true],
                            ['text' => 'Maximiser obligatoirement les gains spéculatifs', 'iscorrect' => false],
                            ['text' => 'Empêcher le marché des changes de fonctionner', 'iscorrect' => false],
                            ['text' => 'Garantir un bénéfice commercial', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise exportatrice recevant des dollars peut être défavorisée si :',
                        'answers' => [
                            ['text' => 'Le dollar se déprécie contre sa devise de référence avant la conversion', 'iscorrect' => true],
                            ['text' => 'Le dollar s’apprécie fortement', 'iscorrect' => false],
                            ['text' => 'Elle augmente sa productivité', 'iscorrect' => false],
                            ['text' => 'Elle diversifie ses clients', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce qu’un taux de change direct pour un investisseur ?',
                        'answers' => [
                            ['text' => 'Une cotation exprimant le prix d’une devise dans une autre devise selon une convention donnée', 'iscorrect' => true],
                            ['text' => 'Le taux de rendement d’une action', 'iscorrect' => false],
                            ['text' => 'Le taux de défaut d’une entreprise', 'iscorrect' => false],
                            ['text' => 'Le taux de dividende', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les différentiels de taux d’intérêt peuvent-ils influencer les devises ?',
                        'answers' => [
                            ['text' => 'Ils peuvent modifier l’attractivité relative des placements libellés dans différentes devises', 'iscorrect' => true],
                            ['text' => 'Ils garantissent automatiquement une appréciation', 'iscorrect' => false],
                            ['text' => 'Ils déterminent uniquement les dividendes', 'iscorrect' => false],
                            ['text' => 'Ils n’ont jamais aucun lien avec les marchés de change', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel risque apparaît lorsqu’un investissement étranger est converti dans la devise de l’investisseur ?',
                        'answers' => [
                            ['text' => 'Le risque que les variations du taux de change modifient le rendement exprimé dans la devise de l’investisseur', 'iscorrect' => true],
                            ['text' => 'Uniquement le risque de liquidité domestique', 'iscorrect' => false],
                            ['text' => 'Le risque de dividende garanti', 'iscorrect' => false],
                            ['text' => 'Aucun risque supplémentaire', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'La spéculation sur le marché des changes consiste principalement à :',
                        'answers' => [
                            ['text' => 'Prendre une position en anticipant une évolution future des taux de change', 'iscorrect' => true],
                            ['text' => 'Supprimer toute exposition au change', 'iscorrect' => false],
                            ['text' => 'Garantir un taux de change', 'iscorrect' => false],
                            ['text' => 'Éviter toute transaction internationale', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une entreprise peut-elle préférer couvrir une partie de son exposition plutôt que toute son exposition ?',
                        'answers' => [
                            ['text' => 'Parce que sa politique de risque, ses coûts et son niveau d’incertitude acceptable peuvent justifier une couverture partielle', 'iscorrect' => true],
                            ['text' => 'Parce qu’une couverture totale est toujours illégale', 'iscorrect' => false],
                            ['text' => 'Parce qu’une couverture ne peut jamais réduire un risque', 'iscorrect' => false],
                            ['text' => 'Parce que les devises ne fluctuent pas', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Fonds, ETF et gestion passive',
                'questions' => [
                    [
                        'question' => 'Quelle est la principale différence entre gestion active et gestion passive ?',
                        'answers' => [
                            ['text' => 'La gestion active cherche généralement à sélectionner des investissements pour atteindre ou dépasser un objectif, tandis que la gestion passive cherche souvent à suivre un indice', 'iscorrect' => true],
                            ['text' => 'La gestion passive interdit toute diversification', 'iscorrect' => false],
                            ['text' => 'La gestion active garantit un rendement supérieur', 'iscorrect' => false],
                            ['text' => 'Les deux stratégies sont toujours identiques', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce que la tracking error d’un fonds indiciel ?',
                        'answers' => [
                            ['text' => 'L’écart entre les performances du fonds et celles de son indice de référence', 'iscorrect' => true],
                            ['text' => 'Le montant des dividendes distribués', 'iscorrect' => false],
                            ['text' => 'La valeur nominale du portefeuille', 'iscorrect' => false],
                            ['text' => 'Le nombre d’investisseurs', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un ETF peut-il se négocier avec une légère prime ou décote par rapport à sa valeur liquidative ?',
                        'answers' => [
                            ['text' => 'En raison notamment des conditions d’offre et de demande et des mécanismes de création-rachat', 'iscorrect' => true],
                            ['text' => 'Parce que sa valeur liquidative est toujours fausse', 'iscorrect' => false],
                            ['text' => 'Parce que les ETF ne détiennent jamais d’actifs', 'iscorrect' => false],
                            ['text' => 'Parce que les marchés sont nécessairement fermés', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Que représente la valeur liquidative d’un fonds ?',
                        'answers' => [
                            ['text' => 'La valeur nette des actifs du fonds rapportée au nombre de parts selon les règles applicables', 'iscorrect' => true],
                            ['text' => 'Le bénéfice annuel du gestionnaire', 'iscorrect' => false],
                            ['text' => 'Le prix maximal garanti', 'iscorrect' => false],
                            ['text' => 'Le dividende futur', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel avantage peut présenter un ETF à faibles frais ?',
                        'answers' => [
                            ['text' => 'Une réduction des coûts qui peuvent peser sur le rendement net à long terme', 'iscorrect' => true],
                            ['text' => 'Une garantie de surperformance', 'iscorrect' => false],
                            ['text' => 'Une suppression du risque de marché', 'iscorrect' => false],
                            ['text' => 'Une garantie de rendement positif', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Un fonds indiciel diversifié peut réduire le risque spécifique parce qu’il :',
                        'answers' => [
                            ['text' => 'Répartit l’exposition entre plusieurs titres', 'iscorrect' => true],
                            ['text' => 'Investit nécessairement dans une seule entreprise', 'iscorrect' => false],
                            ['text' => 'Garantit le prix de chaque action', 'iscorrect' => false],
                            ['text' => 'Supprime les fluctuations de marché', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce qu’un fonds à réplication physique ?',
                        'answers' => [
                            ['text' => 'Un fonds qui détient directement tout ou partie des titres constituant l’indice selon sa méthode de réplication', 'iscorrect' => true],
                            ['text' => 'Un fonds qui ne possède jamais d’actifs', 'iscorrect' => false],
                            ['text' => 'Un fonds investi uniquement en espèces', 'iscorrect' => false],
                            ['text' => 'Un fonds garanti par une banque centrale', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi le choix d’un indice de référence est-il important ?',
                        'answers' => [
                            ['text' => 'Parce qu’il détermine l’univers et l’objectif de comparaison de la performance', 'iscorrect' => true],
                            ['text' => 'Parce qu’il garantit la performance future', 'iscorrect' => false],
                            ['text' => 'Parce qu’il supprime les frais', 'iscorrect' => false],
                            ['text' => 'Parce qu’il empêche les changements de composition', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel facteur peut expliquer une différence entre un ETF et son indice ?',
                        'answers' => [
                            ['text' => 'Les frais, la fiscalité, les coûts de transaction et les modalités de réplication', 'iscorrect' => true],
                            ['text' => 'Uniquement le nombre de salariés du gestionnaire', 'iscorrect' => false],
                            ['text' => 'Le fait que l’indice soit toujours fixe', 'iscorrect' => false],
                            ['text' => 'L’absence totale de transactions', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un investisseur doit-il examiner la composition d’un ETF avant de l’acheter ?',
                        'answers' => [
                            ['text' => 'Pour connaître les actifs, secteurs, zones géographiques et risques auxquels il sera exposé', 'iscorrect' => true],
                            ['text' => 'Pour garantir son rendement futur', 'iscorrect' => false],
                            ['text' => 'Pour supprimer toute volatilité', 'iscorrect' => false],
                            ['text' => 'Pour éviter automatiquement tous les impôts', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Régulation, transparence et acteurs du marché',
                'questions' => [
                    [
                        'question' => 'Pourquoi les autorités réglementent-elles les marchés financiers ?',
                        'answers' => [
                            ['text' => 'Pour favoriser l’intégrité des marchés, la protection des investisseurs et la stabilité financière', 'iscorrect' => true],
                            ['text' => 'Pour garantir que chaque investisseur gagne de l’argent', 'iscorrect' => false],
                            ['text' => 'Pour empêcher toute innovation financière', 'iscorrect' => false],
                            ['text' => 'Pour fixer définitivement tous les cours', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Que vise principalement l’interdiction des manipulations de marché ?',
                        'answers' => [
                            ['text' => 'Empêcher les comportements artificiels destinés à fausser les prix ou le fonctionnement normal du marché', 'iscorrect' => true],
                            ['text' => 'Empêcher les investisseurs de vendre leurs actions', 'iscorrect' => false],
                            ['text' => 'Garantir une hausse permanente des indices', 'iscorrect' => false],
                            ['text' => 'Supprimer toute volatilité naturelle', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce qu’une information privilégiée dans le contexte boursier ?',
                        'answers' => [
                            ['text' => 'Une information précise, non publique et susceptible d’influencer sensiblement le prix d’un instrument financier', 'iscorrect' => true],
                            ['text' => 'Toute information publiée dans un journal', 'iscorrect' => false],
                            ['text' => 'Une information connue de tous les investisseurs', 'iscorrect' => false],
                            ['text' => 'Une opinion personnelle sans conséquence potentielle', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la transparence financière est-elle importante ?',
                        'answers' => [
                            ['text' => 'Elle aide les investisseurs à prendre des décisions à partir d’informations pertinentes et comparables', 'iscorrect' => true],
                            ['text' => 'Elle garantit les bénéfices futurs', 'iscorrect' => false],
                            ['text' => 'Elle empêche les entreprises de publier des résultats', 'iscorrect' => false],
                            ['text' => 'Elle supprime le risque de marché', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le rôle d’un dépositaire central de titres ?',
                        'answers' => [
                            ['text' => 'Assurer notamment la conservation et le règlement-livraison des titres selon l’organisation du marché', 'iscorrect' => true],
                            ['text' => 'Fixer les dividendes de toutes les entreprises', 'iscorrect' => false],
                            ['text' => 'Garantir les performances des actions', 'iscorrect' => false],
                            ['text' => 'Déterminer les politiques fiscales nationales', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Que signifie KYC dans les services financiers ?',
                        'answers' => [
                            ['text' => 'Know Your Customer, c’est-à-dire connaître et vérifier l’identité et certaines caractéristiques du client', 'iscorrect' => true],
                            ['text' => 'Keep Your Capital, une garantie de rendement', 'iscorrect' => false],
                            ['text' => 'Key Yield Control, un indice boursier', 'iscorrect' => false],
                            ['text' => 'Known Yearly Credit, une obligation publique', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est l’objectif général des règles de lutte contre le blanchiment de capitaux ?',
                        'answers' => [
                            ['text' => 'Réduire l’utilisation du système financier pour dissimuler ou intégrer des fonds d’origine criminelle', 'iscorrect' => true],
                            ['text' => 'Garantir les rendements boursiers', 'iscorrect' => false],
                            ['text' => 'Empêcher toute transaction internationale', 'iscorrect' => false],
                            ['text' => 'Fixer les cours des devises', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les conflits d’intérêts doivent-ils être identifiés et gérés ?',
                        'answers' => [
                            ['text' => 'Parce qu’ils peuvent influencer les décisions ou recommandations au détriment des clients', 'iscorrect' => true],
                            ['text' => 'Parce qu’ils garantissent une meilleure performance', 'iscorrect' => false],
                            ['text' => 'Parce qu’ils éliminent le risque financier', 'iscorrect' => false],
                            ['text' => 'Parce qu’ils empêchent toute activité commerciale', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel comportement est incompatible avec un marché financier intègre ?',
                        'answers' => [
                            ['text' => 'Diffuser volontairement de fausses informations afin d’influencer artificiellement un cours', 'iscorrect' => true],
                            ['text' => 'Analyser publiquement les résultats d’une entreprise', 'iscorrect' => false],
                            ['text' => 'Acheter un titre après avoir étudié les informations publiques', 'iscorrect' => false],
                            ['text' => 'Diversifier un portefeuille', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les obligations de déclaration et de transparence existent-elles pour certains acteurs financiers ?',
                        'answers' => [
                            ['text' => 'Pour améliorer l’information disponible et permettre une meilleure surveillance du marché', 'iscorrect' => true],
                            ['text' => 'Pour garantir la rentabilité de chaque investissement', 'iscorrect' => false],
                            ['text' => 'Pour empêcher les investisseurs institutionnels d’investir', 'iscorrect' => false],
                            ['text' => 'Pour supprimer les différences de prix', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Performance et analyse des investissements',
                'questions' => [
                    [
                        'question' => 'Pourquoi faut-il distinguer rendement nominal et rendement réel ?',
                        'answers' => [
                            ['text' => 'Le rendement réel tient compte de l’effet de l’inflation sur le pouvoir d’achat', 'iscorrect' => true],
                            ['text' => 'Le rendement nominal inclut toujours les impôts', 'iscorrect' => false],
                            ['text' => 'Le rendement réel ignore toujours l’inflation', 'iscorrect' => false],
                            ['text' => 'Les deux notions sont toujours identiques', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce que le rendement total d’une action ?',
                        'answers' => [
                            ['text' => 'Le gain en capital et les revenus distribués, rapportés à l’investissement selon la période considérée', 'iscorrect' => true],
                            ['text' => 'Uniquement le dividende', 'iscorrect' => false],
                            ['text' => 'Uniquement la variation du cours', 'iscorrect' => false],
                            ['text' => 'Uniquement le bénéfice comptable de l’entreprise', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi comparer un portefeuille à un indice de référence ?',
                        'answers' => [
                            ['text' => 'Pour évaluer sa performance relative par rapport à un objectif de marché pertinent', 'iscorrect' => true],
                            ['text' => 'Pour garantir qu’il dépassera l’indice', 'iscorrect' => false],
                            ['text' => 'Pour éliminer les frais de gestion', 'iscorrect' => false],
                            ['text' => 'Pour empêcher les pertes', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce que l’alpha d’un portefeuille dans une approche simplifiée ?',
                        'answers' => [
                            ['text' => 'Une mesure de la performance excédentaire par rapport à celle attendue selon un modèle ou une référence', 'iscorrect' => true],
                            ['text' => 'Le montant total investi', 'iscorrect' => false],
                            ['text' => 'Le taux de dividende', 'iscorrect' => false],
                            ['text' => 'La valeur nominale d’une obligation', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Que mesure le bêta d’une action par rapport au marché ?',
                        'answers' => [
                            ['text' => 'Sa sensibilité aux variations du marché de référence dans le cadre du modèle utilisé', 'iscorrect' => true],
                            ['text' => 'Son bénéfice annuel', 'iscorrect' => false],
                            ['text' => 'Son nombre d’actionnaires', 'iscorrect' => false],
                            ['text' => 'Son dividende garanti', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Une action avec un bêta supérieur à 1 est généralement considérée comme :',
                        'answers' => [
                            ['text' => 'Plus sensible aux mouvements du marché de référence que celui-ci', 'iscorrect' => true],
                            ['text' => 'Sans aucun risque de marché', 'iscorrect' => false],
                            ['text' => 'Toujours moins volatile que le marché', 'iscorrect' => false],
                            ['text' => 'Garantie de rendement positif', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Que mesure approximativement le ratio de Sharpe ?',
                        'answers' => [
                            ['text' => 'Le rendement excédentaire par unité de risque total mesuré par la volatilité', 'iscorrect' => true],
                            ['text' => 'Le montant total des dividendes', 'iscorrect' => false],
                            ['text' => 'La valeur nominale d’une obligation', 'iscorrect' => false],
                            ['text' => 'Le nombre de transactions quotidiennes', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un rendement élevé n’est-il pas suffisant pour juger un investissement ?',
                        'answers' => [
                            ['text' => 'Il faut également considérer le risque pris pour obtenir ce rendement', 'iscorrect' => true],
                            ['text' => 'Parce que les rendements n’ont jamais d’importance', 'iscorrect' => false],
                            ['text' => 'Parce qu’un rendement élevé signifie toujours une perte', 'iscorrect' => false],
                            ['text' => 'Parce que tous les actifs ont le même risque', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est l’intérêt d’analyser la performance sur plusieurs périodes ?',
                        'answers' => [
                            ['text' => 'Cela permet d’éviter de tirer des conclusions uniquement à partir d’une période exceptionnelle', 'iscorrect' => true],
                            ['text' => 'Cela garantit la performance future', 'iscorrect' => false],
                            ['text' => 'Cela supprime les fluctuations', 'iscorrect' => false],
                            ['text' => 'Cela rend inutile l’analyse du risque', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les frais sont-ils importants dans l’analyse d’un investissement ?',
                        'answers' => [
                            ['text' => 'Parce qu’ils diminuent le rendement net réellement obtenu par l’investisseur', 'iscorrect' => true],
                            ['text' => 'Parce qu’ils garantissent toujours une meilleure performance', 'iscorrect' => false],
                            ['text' => 'Parce qu’ils n’ont aucun impact à long terme', 'iscorrect' => false],
                            ['text' => 'Parce qu’ils remplacent le risque de marché', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Scénarios de marché et décisions d’investissement',
                'questions' => [
                    [
                        'question' => 'Une hausse inattendue de l’inflation peut exercer une pression sur les obligations à taux fixe parce que :',
                        'answers' => [
                            ['text' => 'Elle peut réduire le pouvoir d’achat des flux futurs et entraîner des anticipations de taux plus élevés', 'iscorrect' => true],
                            ['text' => 'Elle augmente automatiquement tous les coupons existants', 'iscorrect' => false],
                            ['text' => 'Elle garantit une hausse des prix obligataires', 'iscorrect' => false],
                            ['text' => 'Elle supprime le risque de taux', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Si une banque centrale augmente fortement ses taux directeurs, quel effet est plausible à court terme ?',
                        'answers' => [
                            ['text' => 'Le coût du financement à court terme peut augmenter', 'iscorrect' => true],
                            ['text' => 'Tous les cours d’actions augmentent automatiquement', 'iscorrect' => false],
                            ['text' => 'Tous les rendements obligataires deviennent nuls', 'iscorrect' => false],
                            ['text' => 'Le risque financier disparaît', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Une récession anticipée peut influencer les marchés financiers parce qu’elle peut :',
                        'answers' => [
                            ['text' => 'Modifier les anticipations de bénéfices, de taux d’intérêt et de risque de crédit', 'iscorrect' => true],
                            ['text' => 'Garantir une baisse de tous les actifs', 'iscorrect' => false],
                            ['text' => 'Garantir une hausse de toutes les obligations', 'iscorrect' => false],
                            ['text' => 'N’avoir aucun effet sur les anticipations des investisseurs', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une augmentation du risque perçu peut-elle provoquer une baisse des actions ?',
                        'answers' => [
                            ['text' => 'Les investisseurs peuvent exiger une prime de risque plus élevée et réduire leur valorisation des flux futurs', 'iscorrect' => true],
                            ['text' => 'Parce que les entreprises cessent automatiquement d’exister', 'iscorrect' => false],
                            ['text' => 'Parce que les dividendes deviennent toujours nuls', 'iscorrect' => false],
                            ['text' => 'Parce que les actions deviennent juridiquement des obligations', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une baisse des taux peut-elle soutenir la valorisation de certains actifs ?',
                        'answers' => [
                            ['text' => 'Des taux d’actualisation plus faibles peuvent augmenter la valeur actuelle de certains flux futurs', 'iscorrect' => true],
                            ['text' => 'Parce que tous les investissements deviennent sans risque', 'iscorrect' => false],
                            ['text' => 'Parce que les entreprises cessent d’avoir des dettes', 'iscorrect' => false],
                            ['text' => 'Parce que les dividendes sont automatiquement doublés', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Si le prix d’une matière première augmente fortement, quelle entreprise pourrait être directement pénalisée ?',
                        'answers' => [
                            ['text' => 'Une entreprise dont cette matière première représente une part importante des coûts et qui ne peut pas répercuter rapidement la hausse', 'iscorrect' => true],
                            ['text' => 'Une entreprise qui n’utilise aucune matière première', 'iscorrect' => false],
                            ['text' => 'Une banque centrale uniquement', 'iscorrect' => false],
                            ['text' => 'Une entreprise dont les coûts sont totalement indépendants de cette matière', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une dépréciation de la monnaie locale peut-elle aider certains exportateurs ?',
                        'answers' => [
                            ['text' => 'Elle peut rendre leurs produits moins chers pour des acheteurs étrangers, toutes choses égales par ailleurs', 'iscorrect' => true],
                            ['text' => 'Elle réduit toujours leurs revenus étrangers', 'iscorrect' => false],
                            ['text' => 'Elle garantit une hausse des bénéfices', 'iscorrect' => false],
                            ['text' => 'Elle supprime le risque de change', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Un investisseur qui anticipe une forte hausse des taux peut-il modifier son exposition obligataire ?',
                        'answers' => [
                            ['text' => 'Oui, il peut notamment réduire la duration ou adapter la composition du portefeuille selon sa stratégie', 'iscorrect' => true],
                            ['text' => 'Non, les obligations ne sont jamais sensibles aux taux', 'iscorrect' => false],
                            ['text' => 'Oui, mais uniquement en achetant davantage d’actions', 'iscorrect' => false],
                            ['text' => 'Non, car tous les portefeuilles doivent avoir la même duration', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les marchés peuvent-ils réagir avant la publication d’une donnée économique ?',
                        'answers' => [
                            ['text' => 'Les prix intègrent les anticipations des investisseurs avant que l’information officielle soit publiée', 'iscorrect' => true],
                            ['text' => 'Parce que les données économiques sont toujours connues à l’avance avec certitude', 'iscorrect' => false],
                            ['text' => 'Parce que les marchés ignorent les anticipations', 'iscorrect' => false],
                            ['text' => 'Parce que les prix ne dépendent jamais de l’information', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle approche est généralement la plus prudente face à une forte incertitude de marché ?',
                        'answers' => [
                            ['text' => 'Évaluer le risque, diversifier et adapter l’exposition aux objectifs et contraintes du portefeuille', 'iscorrect' => true],
                            ['text' => 'Investir tout le capital dans l’actif le plus volatil', 'iscorrect' => false],
                            ['text' => 'Supposer que toute baisse sera immédiatement suivie d’une hausse', 'iscorrect' => false],
                            ['text' => 'Ignorer complètement les conditions du marché', 'iscorrect' => false],
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

                $answers = $questionData['answers'];

                // Mélange de la position de la bonne réponse.
                shuffle($answers);

                foreach ($answers as $answerData) {
                    Answer::create([
                        'question_id' => $question->id,
                        'answer' => $answerData['text'],
                        'iscorrect' => $answerData['iscorrect'],
                    ]);
                }
            }
        }
    }
}
```
