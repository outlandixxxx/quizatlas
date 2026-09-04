```php
<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Major;
use App\Models\Subject;
use App\Models\Quiz;
use App\Models\Question;
use App\Models\Answer;

class EconomicsFundamentalsAdvancedSeeder extends Seeder
{
    public function run(): void
    {
        $major = Major::where('slug', 'economy')->firstOrFail();

        $subject = Subject::where('major_id', $major->id)
            ->where('slug', 'economics-fundamentals')
            ->firstOrFail();

        $quizzes = [
            [
                'title' => 'Équilibre de marché et surplus économiques',
                'questions' => [
                    [
                        'question' => 'Dans un modèle concurrentiel standard, que représente le surplus du consommateur ?',
                        'answers' => [
                            ['answer' => 'La différence entre la disposition à payer des consommateurs et le prix effectivement payé', 'iscorrect' => true],
                            ['answer' => 'La différence entre les coûts fixes et les coûts variables', 'iscorrect' => false],
                            ['answer' => 'Le profit comptable total des producteurs', 'iscorrect' => false],
                            ['answer' => 'La différence entre exportations et importations', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Que représente le surplus du producteur dans un marché concurrentiel ?',
                        'answers' => [
                            ['answer' => 'La différence entre le prix reçu et le coût marginal ou coût d\'opportunité pertinent de production', 'iscorrect' => true],
                            ['answer' => 'La différence entre le chiffre d\'affaires et les impôts uniquement', 'iscorrect' => false],
                            ['answer' => 'Le montant total des salaires', 'iscorrect' => false],
                            ['answer' => 'La différence entre PIB nominal et PIB réel', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Dans un équilibre concurrentiel sans défaillance de marché, que suggère généralement l\'égalité entre prix et coût marginal ?',
                        'answers' => [
                            ['answer' => 'La dernière unité échangée valorise le bien à un niveau cohérent avec son coût marginal de production', 'iscorrect' => true],
                            ['answer' => 'Les entreprises réalisent nécessairement un profit économique positif', 'iscorrect' => false],
                            ['answer' => 'Les consommateurs ont tous le même revenu', 'iscorrect' => false],
                            ['answer' => 'Les coûts fixes sont nécessairement nuls', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel effet produit généralement un prix plafond contraignant placé sous le prix d\'équilibre ?',
                        'answers' => [
                            ['answer' => 'Une quantité demandée supérieure à la quantité offerte, créant une pénurie', 'iscorrect' => true],
                            ['answer' => 'Un excédent d\'offre durable', 'iscorrect' => false],
                            ['answer' => 'Une hausse automatique du surplus total', 'iscorrect' => false],
                            ['answer' => 'Une disparition du marché noir dans tous les cas', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel effet produit généralement un prix plancher contraignant placé au-dessus du prix d\'équilibre ?',
                        'answers' => [
                            ['answer' => 'Une quantité offerte supérieure à la quantité demandée', 'iscorrect' => true],
                            ['answer' => 'Une pénurie obligatoire', 'iscorrect' => false],
                            ['answer' => 'Une baisse certaine de la quantité offerte', 'iscorrect' => false],
                            ['answer' => 'Une disparition de l\'excédent', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une taxe sur un marché crée-t-elle généralement une perte sèche ?',
                        'answers' => [
                            ['answer' => 'Elle peut empêcher certains échanges mutuellement avantageux qui auraient eu lieu sans la taxe', 'iscorrect' => true],
                            ['answer' => 'Elle augmente toujours l\'efficacité allocative', 'iscorrect' => false],
                            ['answer' => 'Elle supprime automatiquement les coûts de transaction', 'iscorrect' => false],
                            ['answer' => 'Elle rend toutes les unités échangées plus productives', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'L\'incidence économique d\'une taxe dépend principalement de :',
                        'answers' => [
                            ['answer' => 'La sensibilité relative de l\'offre et de la demande aux variations de prix', 'iscorrect' => true],
                            ['answer' => 'La taille physique du marché uniquement', 'iscorrect' => false],
                            ['answer' => 'La monnaie utilisée uniquement', 'iscorrect' => false],
                            ['answer' => 'Le nombre de banques commerciales uniquement', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une demande très inélastique peut-elle conduire les consommateurs à supporter une grande partie d\'une taxe ?',
                        'answers' => [
                            ['answer' => 'Ils réduisent relativement peu leur quantité demandée lorsque le prix augmente', 'iscorrect' => true],
                            ['answer' => 'Ils deviennent automatiquement producteurs', 'iscorrect' => false],
                            ['answer' => 'L\'offre devient parfaitement inélastique', 'iscorrect' => false],
                            ['answer' => 'Le coût marginal devient nul', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu\'indique une perte sèche élevée associée à une politique publique ?',
                        'answers' => [
                            ['answer' => 'Une diminution importante des gains mutuels d\'échange ou d\'allocation par rapport à la situation de référence', 'iscorrect' => true],
                            ['answer' => 'Une hausse nécessaire du PIB réel', 'iscorrect' => false],
                            ['answer' => 'Une suppression automatique des inégalités', 'iscorrect' => false],
                            ['answer' => 'Une amélioration certaine de la productivité', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi le surplus total n\'est-il pas toujours suffisant pour juger une politique économique ?',
                        'answers' => [
                            ['answer' => 'Une politique peut modifier la répartition des gains entre groupes même si le surplus total change peu', 'iscorrect' => true],
                            ['answer' => 'Le surplus total est toujours égal à zéro', 'iscorrect' => false],
                            ['answer' => 'La répartition est indépendante de toute politique publique', 'iscorrect' => false],
                            ['answer' => 'Les marchés concurrentiels éliminent toutes les questions distributives', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Élasticités et décisions économiques avancées',
                'questions' => [
                    [
                        'question' => 'Si la demande d\'un produit a une élasticité-prix de -2, une hausse de prix de 5 % entraîne approximativement :',
                        'answers' => [
                            ['answer' => 'Une baisse de 10 % de la quantité demandée', 'iscorrect' => true],
                            ['answer' => 'Une hausse de 10 % de la quantité demandée', 'iscorrect' => false],
                            ['answer' => 'Une baisse de 2,5 % de la quantité demandée', 'iscorrect' => false],
                            ['answer' => 'Aucune variation de la quantité demandée', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une entreprise doit-elle connaître l\'élasticité de sa demande avant d\'augmenter fortement son prix ?',
                        'answers' => [
                            ['answer' => 'La réaction de la quantité demandée détermine en partie l\'effet sur le chiffre d\'affaires', 'iscorrect' => true],
                            ['answer' => 'L\'élasticité détermine directement le taux d\'impôt', 'iscorrect' => false],
                            ['answer' => 'Une demande élastique garantit un chiffre d\'affaires plus élevé après une hausse de prix', 'iscorrect' => false],
                            ['answer' => 'L\'élasticité ne concerne que les marchés publics', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu\'est-ce que l\'élasticité-revenu de la demande permet principalement d\'étudier ?',
                        'answers' => [
                            ['answer' => 'La réaction de la demande à une variation du revenu des consommateurs', 'iscorrect' => true],
                            ['answer' => 'La réaction de l\'offre à une variation des salaires nominaux uniquement', 'iscorrect' => false],
                            ['answer' => 'La sensibilité du taux de change à l\'inflation', 'iscorrect' => false],
                            ['answer' => 'La variation du chômage structurel', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Une élasticité-revenu négative caractérise généralement :',
                        'answers' => [
                            ['answer' => 'Un bien inférieur', 'iscorrect' => true],
                            ['answer' => 'Un bien normal supérieur', 'iscorrect' => false],
                            ['answer' => 'Un bien parfaitement concurrentiel', 'iscorrect' => false],
                            ['answer' => 'Un facteur de production fixe', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Une élasticité croisée de la demande positive entre deux biens suggère généralement qu\'ils sont :',
                        'answers' => [
                            ['answer' => 'Substituables', 'iscorrect' => true],
                            ['answer' => 'Complémentaires', 'iscorrect' => false],
                            ['answer' => 'Indépendants dans tous les cas', 'iscorrect' => false],
                            ['answer' => 'Nécessairement des biens publics', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi l\'élasticité de l\'offre est-elle souvent différente entre le court terme et le long terme ?',
                        'answers' => [
                            ['answer' => 'Les producteurs disposent de davantage de temps pour modifier leurs capacités, leurs équipements et leurs facteurs de production', 'iscorrect' => true],
                            ['answer' => 'Les producteurs cessent de répondre aux prix à long terme', 'iscorrect' => false],
                            ['answer' => 'Les coûts fixes deviennent toujours nuls', 'iscorrect' => false],
                            ['answer' => 'La demande devient parfaitement inélastique', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les producteurs ayant des capacités de production limitées à court terme peuvent-ils subir fortement un choc de demande ?',
                        'answers' => [
                            ['answer' => 'Ils ne peuvent pas augmenter rapidement la production, ce qui peut provoquer une hausse importante du prix', 'iscorrect' => true],
                            ['answer' => 'Ils peuvent toujours doubler instantanément leur capacité', 'iscorrect' => false],
                            ['answer' => 'Le prix devient nécessairement fixe', 'iscorrect' => false],
                            ['answer' => 'L\'élasticité devient automatiquement infinie', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel facteur tend à rendre la demande moins élastique ?',
                        'answers' => [
                            ['answer' => 'L\'absence de substituts proches', 'iscorrect' => true],
                            ['answer' => 'La présence de nombreux substituts proches', 'iscorrect' => false],
                            ['answer' => 'Une période d\'ajustement très longue', 'iscorrect' => false],
                            ['answer' => 'Une faible importance du bien dans le budget', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les biens qui représentent une grande part du budget ont-ils souvent une demande plus élastique ?',
                        'answers' => [
                            ['answer' => 'Une variation de prix crée un effet plus important sur le budget du consommateur', 'iscorrect' => true],
                            ['answer' => 'Les consommateurs cessent toujours de consommer ces biens', 'iscorrect' => false],
                            ['answer' => 'Ces biens sont nécessairement inférieurs', 'iscorrect' => false],
                            ['answer' => 'Leur offre est toujours parfaitement élastique', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une entreprise peut-elle pratiquer une discrimination par les prix uniquement sous certaines conditions ?',
                        'answers' => [
                            ['answer' => 'Elle doit notamment pouvoir distinguer des groupes de consommateurs et limiter la revente entre eux', 'iscorrect' => true],
                            ['answer' => 'Tous les marchés permettent naturellement une discrimination parfaite', 'iscorrect' => false],
                            ['answer' => 'Les consommateurs doivent avoir exactement le même revenu', 'iscorrect' => false],
                            ['answer' => 'La concurrence parfaite exige toujours des prix différents', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Coûts, productivité et structure de production',
                'questions' => [
                    [
                        'question' => 'Pourquoi le coût marginal peut-il augmenter à court terme selon la loi des rendements marginaux décroissants ?',
                        'answers' => [
                            ['answer' => 'Lorsque certains facteurs sont fixes, l\'ajout successif d\'un facteur variable peut générer des gains de production progressivement plus faibles', 'iscorrect' => true],
                            ['answer' => 'Parce que tous les facteurs deviennent immédiatement fixes', 'iscorrect' => false],
                            ['answer' => 'Parce que la demande disparaît', 'iscorrect' => false],
                            ['answer' => 'Parce que le prix de vente devient nul', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Que signifie un produit marginal du travail décroissant ?',
                        'answers' => [
                            ['answer' => 'Chaque unité supplémentaire de travail ajoute progressivement moins à la production, toutes choses égales par ailleurs', 'iscorrect' => true],
                            ['answer' => 'La production totale diminue nécessairement dès l\'embauche du premier travailleur', 'iscorrect' => false],
                            ['answer' => 'La productivité moyenne augmente toujours', 'iscorrect' => false],
                            ['answer' => 'Le capital devient automatiquement inutile', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu\'est-ce qu\'une économie d\'échelle croissante ?',
                        'answers' => [
                            ['answer' => 'Une situation dans laquelle le coût moyen diminue lorsque l\'échelle de production augmente', 'iscorrect' => true],
                            ['answer' => 'Une situation dans laquelle le coût moyen augmente toujours', 'iscorrect' => false],
                            ['answer' => 'Une diminution de la quantité produite', 'iscorrect' => false],
                            ['answer' => 'Une hausse automatique du prix d\'équilibre', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle différence existe entre économies d\'échelle et rendements d\'échelle ?',
                        'answers' => [
                            ['answer' => 'Les économies d\'échelle concernent le coût moyen, tandis que les rendements d\'échelle décrivent la réaction de la production lorsque plusieurs facteurs varient proportionnellement', 'iscorrect' => true],
                            ['answer' => 'Les deux concepts sont toujours strictement identiques', 'iscorrect' => false],
                            ['answer' => 'Les rendements d\'échelle concernent uniquement les salaires', 'iscorrect' => false],
                            ['answer' => 'Les économies d\'échelle concernent uniquement la demande', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une entreprise peut-elle connaître des déséconomies d\'échelle ?',
                        'answers' => [
                            ['answer' => 'Une taille excessive peut augmenter les coûts de coordination, de contrôle ou de gestion', 'iscorrect' => true],
                            ['answer' => 'Une grande entreprise possède toujours des coûts plus faibles', 'iscorrect' => false],
                            ['answer' => 'La productivité augmente toujours sans limite', 'iscorrect' => false],
                            ['answer' => 'Les marchés deviennent automatiquement parfaitement concurrentiels', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Que mesure la productivité multifactorielle ?',
                        'answers' => [
                            ['answer' => 'La part de la croissance de la production qui ne s\'explique pas uniquement par l\'augmentation mesurée des facteurs de production', 'iscorrect' => true],
                            ['answer' => 'Uniquement le nombre de travailleurs', 'iscorrect' => false],
                            ['answer' => 'Uniquement la quantité de capital', 'iscorrect' => false],
                            ['answer' => 'Uniquement le salaire moyen', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel facteur peut augmenter durablement la productivité du travail ?',
                        'answers' => [
                            ['answer' => 'L\'accumulation de capital humain et l\'adoption de technologies plus efficaces', 'iscorrect' => true],
                            ['answer' => 'Une réduction permanente de l\'investissement', 'iscorrect' => false],
                            ['answer' => 'Une diminution de la qualification', 'iscorrect' => false],
                            ['answer' => 'Une suppression des infrastructures', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les coûts irrécupérables, ou sunk costs, ne doivent-ils pas influencer une décision marginale future ?',
                        'answers' => [
                            ['answer' => 'Ils sont déjà engagés et ne peuvent pas être récupérés quel que soit le choix futur', 'iscorrect' => true],
                            ['answer' => 'Ils sont toujours égaux à zéro', 'iscorrect' => false],
                            ['answer' => 'Ils augmentent automatiquement avec chaque unité future', 'iscorrect' => false],
                            ['answer' => 'Ils représentent toujours le coût marginal', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi le coût d\'opportunité doit-il être pris en compte dans une décision économique ?',
                        'answers' => [
                            ['answer' => 'Une ressource utilisée pour une activité ne peut plus être utilisée simultanément dans sa meilleure alternative abandonnée', 'iscorrect' => true],
                            ['answer' => 'Seuls les coûts monétaires comptent économiquement', 'iscorrect' => false],
                            ['answer' => 'Le coût d\'opportunité est toujours nul', 'iscorrect' => false],
                            ['answer' => 'Les ressources peuvent toujours être utilisées deux fois au même moment', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise compare deux techniques de production. Quelle approche est la plus pertinente ?',
                        'answers' => [
                            ['answer' => 'Comparer les coûts d\'opportunité et les coûts pertinents selon le niveau de production et l\'horizon considéré', 'iscorrect' => true],
                            ['answer' => 'Choisir systématiquement la technologie la plus récente', 'iscorrect' => false],
                            ['answer' => 'Choisir systématiquement la technologie la moins chère à l\'achat', 'iscorrect' => false],
                            ['answer' => 'Ignorer les coûts futurs', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Marchés imparfaits et stratégie des entreprises',
                'questions' => [
                    [
                        'question' => 'Pourquoi la demande à laquelle fait face un monopole est-elle généralement décroissante ?',
                        'answers' => [
                            ['answer' => 'Pour vendre davantage, le monopole doit généralement réduire son prix sur la courbe de demande', 'iscorrect' => true],
                            ['answer' => 'Parce que le monopole est toujours preneur de prix', 'iscorrect' => false],
                            ['answer' => 'Parce que le coût marginal est décroissant', 'iscorrect' => false],
                            ['answer' => 'Parce que les consommateurs ne réagissent jamais au prix', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un monopole ne choisit-il généralement pas sa quantité au point où le prix est égal au coût marginal ?',
                        'answers' => [
                            ['answer' => 'Il maximise généralement son profit au point où le revenu marginal est égal au coût marginal', 'iscorrect' => true],
                            ['answer' => 'Le prix est toujours inférieur au coût marginal', 'iscorrect' => false],
                            ['answer' => 'Le coût fixe détermine directement le prix', 'iscorrect' => false],
                            ['answer' => 'Il ne fait face à aucune demande', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu\'est-ce qu\'une perte sèche de monopole ?',
                        'answers' => [
                            ['answer' => 'La perte de surplus total provenant des unités qui ne sont pas échangées alors qu\'elles seraient socialement avantageuses', 'iscorrect' => true],
                            ['answer' => 'La perte comptable du monopole uniquement', 'iscorrect' => false],
                            ['answer' => 'La totalité des recettes fiscales', 'iscorrect' => false],
                            ['answer' => 'Le coût total de production', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu\'est-ce qu\'un jeu stratégique en économie ?',
                        'answers' => [
                            ['answer' => 'Une situation dans laquelle le résultat d\'une décision dépend aussi des décisions prises par d\'autres agents', 'iscorrect' => true],
                            ['answer' => 'Une situation où les entreprises ne peuvent jamais interagir', 'iscorrect' => false],
                            ['answer' => 'Un modèle limité aux politiques fiscales', 'iscorrect' => false],
                            ['answer' => 'Un marché sans choix stratégiques', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu\'est-ce qu\'un équilibre de Nash ?',
                        'answers' => [
                            ['answer' => 'Une situation dans laquelle aucun joueur ne peut améliorer son résultat en changeant seul de stratégie, compte tenu des choix des autres', 'iscorrect' => true],
                            ['answer' => 'Une situation où tous les joueurs obtiennent le même profit', 'iscorrect' => false],
                            ['answer' => 'Une situation où les stratégies sont toujours socialement optimales', 'iscorrect' => false],
                            ['answer' => 'Une situation où aucun joueur ne choisit de stratégie', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les oligopoles sont-ils particulièrement intéressants pour la théorie des jeux ?',
                        'answers' => [
                            ['answer' => 'Les décisions d\'une entreprise peuvent avoir un effet important sur les résultats et les stratégies des autres', 'iscorrect' => true],
                            ['answer' => 'Les entreprises y sont toujours indépendantes', 'iscorrect' => false],
                            ['answer' => 'Il n\'existe aucune interaction stratégique', 'iscorrect' => false],
                            ['answer' => 'Le prix est toujours fixé par l\'État', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le problème d\'un dilemme du prisonnier appliqué à un oligopole ?',
                        'answers' => [
                            ['answer' => 'Les entreprises peuvent avoir intérêt individuellement à s\'écarter d\'une coopération qui serait pourtant meilleure collectivement', 'iscorrect' => true],
                            ['answer' => 'La coopération est toujours illégale et inefficace', 'iscorrect' => false],
                            ['answer' => 'Les entreprises n\'ont aucun intérêt propre', 'iscorrect' => false],
                            ['answer' => 'La demande n\'existe plus', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les barrières à l\'entrée sont-elles essentielles au maintien d\'un pouvoir de marché durable ?',
                        'answers' => [
                            ['answer' => 'Elles limitent la possibilité que de nouveaux concurrents érodent les profits existants', 'iscorrect' => true],
                            ['answer' => 'Elles garantissent toujours l\'innovation', 'iscorrect' => false],
                            ['answer' => 'Elles empêchent toute hausse des prix', 'iscorrect' => false],
                            ['answer' => 'Elles suppriment le coût fixe', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel risque économique peut résulter d\'une collusion durable ?',
                        'answers' => [
                            ['answer' => 'Des prix plus élevés, des quantités plus faibles et une perte de surplus pour les consommateurs', 'iscorrect' => true],
                            ['answer' => 'Une concurrence plus forte', 'iscorrect' => false],
                            ['answer' => 'Une hausse automatique du surplus du consommateur', 'iscorrect' => false],
                            ['answer' => 'Une disparition du pouvoir de marché', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une guerre des prix peut-elle être dangereuse pour les entreprises d\'un oligopole ?',
                        'answers' => [
                            ['answer' => 'Elle peut réduire fortement les marges de toutes les entreprises sans nécessairement augmenter durablement leurs parts de marché', 'iscorrect' => true],
                            ['answer' => 'Elle garantit toujours des profits supérieurs', 'iscorrect' => false],
                            ['answer' => 'Elle empêche toute réaction stratégique', 'iscorrect' => false],
                            ['answer' => 'Elle augmente nécessairement le prix d\'équilibre', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Défaillances de marché et intervention publique',
                'questions' => [
                    [
                        'question' => 'Pourquoi les externalités constituent-elles une défaillance de marché ?',
                        'answers' => [
                            ['answer' => 'Les décisions privées peuvent imposer des coûts ou procurer des bénéfices à des tiers non pris en compte dans les prix', 'iscorrect' => true],
                            ['answer' => 'Les prix reflètent toujours parfaitement tous les coûts sociaux', 'iscorrect' => false],
                            ['answer' => 'Les marchés cessent toujours de fonctionner', 'iscorrect' => false],
                            ['answer' => 'Les consommateurs n\'ont jamais de préférences', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est l\'objectif économique d\'une taxe pigouvienne ?',
                        'answers' => [
                            ['answer' => 'Faire supporter à l\'agent émetteur un coût reflétant l\'externalité marginale qu\'il impose', 'iscorrect' => true],
                            ['answer' => 'Subventionner systématiquement les externalités négatives', 'iscorrect' => false],
                            ['answer' => 'Supprimer toute production', 'iscorrect' => false],
                            ['answer' => 'Garantir une égalité parfaite des revenus', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une subvention peut-elle être utilisée pour certaines externalités positives ?',
                        'answers' => [
                            ['answer' => 'Elle peut rapprocher le bénéfice privé du bénéfice social en encourageant davantage l\'activité créatrice d’externalité positive', 'iscorrect' => true],
                            ['answer' => 'Elle réduit toujours la production', 'iscorrect' => false],
                            ['answer' => 'Elle élimine tous les coûts publics', 'iscorrect' => false],
                            ['answer' => 'Elle rend le bien nécessairement gratuit', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi le problème du passager clandestin peut-il limiter la fourniture privée d\'un bien public ?',
                        'answers' => [
                            ['answer' => 'Les individus peuvent profiter du bien sans contribuer suffisamment à son financement', 'iscorrect' => true],
                            ['answer' => 'Les biens publics sont toujours très faciles à exclure', 'iscorrect' => false],
                            ['answer' => 'Les producteurs peuvent toujours faire payer chaque utilisateur parfaitement', 'iscorrect' => false],
                            ['answer' => 'La demande pour les biens publics est toujours nulle', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle différence fondamentale existe entre bien public et ressource commune ?',
                        'answers' => [
                            ['answer' => 'Le bien public est non rival et non excluable, tandis que la ressource commune est généralement rivale mais difficilement excluable', 'iscorrect' => true],
                            ['answer' => 'Les deux sont toujours parfaitement privés', 'iscorrect' => false],
                            ['answer' => 'Une ressource commune est toujours non rivale', 'iscorrect' => false],
                            ['answer' => 'Un bien public est toujours vendu par un monopole', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu\'est-ce que la tragédie des biens communs ?',
                        'answers' => [
                            ['answer' => 'La surexploitation d\'une ressource commune lorsque les utilisateurs ne prennent pas suffisamment en compte le coût imposé aux autres', 'iscorrect' => true],
                            ['answer' => 'La sous-utilisation d\'un bien public parfaitement non rival', 'iscorrect' => false],
                            ['answer' => 'La disparition automatique des ressources naturelles', 'iscorrect' => false],
                            ['answer' => 'Une hausse des salaires liée à la concurrence', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi l\'information asymétrique peut-elle provoquer une inefficience du marché ?',
                        'answers' => [
                            ['answer' => 'Une partie possède des informations importantes que l\'autre partie ne possède pas, ce qui peut modifier les décisions et les contrats', 'iscorrect' => true],
                            ['answer' => 'Tous les agents connaissent toujours exactement la qualité du produit', 'iscorrect' => false],
                            ['answer' => 'Les prix éliminent automatiquement toute asymétrie', 'iscorrect' => false],
                            ['answer' => 'Les contrats deviennent toujours gratuits', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu\'est-ce que la sélection adverse ?',
                        'answers' => [
                            ['answer' => 'Un problème qui survient avant la transaction lorsque l\'asymétrie d\'information conduit à la présence disproportionnée de certains types d\'agents ou de produits', 'iscorrect' => true],
                            ['answer' => 'Une fraude qui survient uniquement après la transaction', 'iscorrect' => false],
                            ['answer' => 'Une politique monétaire restrictive', 'iscorrect' => false],
                            ['answer' => 'Une hausse de la productivité', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu\'est-ce que l\'aléa moral ?',
                        'answers' => [
                            ['answer' => 'Le changement de comportement après la conclusion d\'un contrat lorsque l\'une des parties est partiellement protégée contre les conséquences de ses actions', 'iscorrect' => true],
                            ['answer' => 'Une erreur de mesure du PIB', 'iscorrect' => false],
                            ['answer' => 'Une baisse automatique des taux', 'iscorrect' => false],
                            ['answer' => 'Une taxe sur la consommation', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi l\'intervention publique peut-elle elle-même créer des inefficiences ?',
                        'answers' => [
                            ['answer' => 'Les politiques publiques peuvent engendrer des coûts administratifs, des distorsions ou des incitations inattendues', 'iscorrect' => true],
                            ['answer' => 'L\'État possède toujours des informations parfaites', 'iscorrect' => false],
                            ['answer' => 'Les politiques publiques n\'ont jamais de coûts', 'iscorrect' => false],
                            ['answer' => 'Toute réglementation augmente automatiquement l\'efficacité', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Macroéconomie avancée : demande globale et cycle',
                'questions' => [
                    [
                        'question' => 'Quels sont les principaux composants de la demande globale dans une économie ouverte simplifiée ?',
                        'answers' => [
                            ['answer' => 'Consommation, investissement, dépenses publiques et exportations nettes', 'iscorrect' => true],
                            ['answer' => 'Uniquement consommation et salaires', 'iscorrect' => false],
                            ['answer' => 'Uniquement dépenses publiques et impôts', 'iscorrect' => false],
                            ['answer' => 'Uniquement exportations et importations', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une hausse de l\'investissement peut-elle avoir un effet supérieur à sa variation initiale sur le PIB dans certains modèles ?',
                        'answers' => [
                            ['answer' => 'Parce qu\'une dépense supplémentaire génère des revenus qui peuvent eux-mêmes provoquer d\'autres dépenses', 'iscorrect' => true],
                            ['answer' => 'Parce que l\'investissement est toujours égal au PIB', 'iscorrect' => false],
                            ['answer' => 'Parce que les importations disparaissent automatiquement', 'iscorrect' => false],
                            ['answer' => 'Parce que la consommation ne dépend jamais du revenu', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu\'est-ce que le multiplicateur budgétaire ?',
                        'answers' => [
                            ['answer' => 'La variation du niveau d\'activité provoquée par une variation initiale des dépenses publiques ou des impôts selon le modèle considéré', 'iscorrect' => true],
                            ['answer' => 'Le ratio entre dette publique et PIB', 'iscorrect' => false],
                            ['answer' => 'Le rapport entre exportations et importations', 'iscorrect' => false],
                            ['answer' => 'Le taux de croissance de la population', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi le multiplicateur est-il généralement plus faible dans une économie ouverte ?',
                        'answers' => [
                            ['answer' => 'Une partie de la dépense supplémentaire peut se porter sur des importations plutôt que sur la production domestique', 'iscorrect' => true],
                            ['answer' => 'Les importations réduisent toujours les revenus', 'iscorrect' => false],
                            ['answer' => 'Les exportations sont toujours nulles', 'iscorrect' => false],
                            ['answer' => 'La consommation devient automatiquement indépendante du revenu', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu\'est-ce qu\'un choc de demande négatif ?',
                        'answers' => [
                            ['answer' => 'Une baisse exogène de certaines composantes de la demande globale', 'iscorrect' => true],
                            ['answer' => 'Une hausse automatique du potentiel de production', 'iscorrect' => false],
                            ['answer' => 'Une augmentation des exportations', 'iscorrect' => false],
                            ['answer' => 'Une amélioration de la productivité', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel effet peut avoir un choc de confiance négatif des ménages ?',
                        'answers' => [
                            ['answer' => 'Une réduction de la consommation et potentiellement de la demande globale', 'iscorrect' => true],
                            ['answer' => 'Une hausse obligatoire de l\'investissement', 'iscorrect' => false],
                            ['answer' => 'Une hausse automatique des exportations', 'iscorrect' => false],
                            ['answer' => 'Une disparition de l\'inflation par définition', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les stabilisateurs automatiques peuvent-ils amortir un ralentissement ?',
                        'answers' => [
                            ['answer' => 'Les recettes fiscales diminuent et certaines dépenses augmentent automatiquement lorsque l\'activité se détériore', 'iscorrect' => true],
                            ['answer' => 'Ils réduisent toujours les dépenses sociales', 'iscorrect' => false],
                            ['answer' => 'Ils augmentent toujours les impôts pendant une récession', 'iscorrect' => false],
                            ['answer' => 'Ils empêchent toute baisse du PIB', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu\'est-ce qu\'un output gap négatif ?',
                        'answers' => [
                            ['answer' => 'Une production effective inférieure à une estimation de la production potentielle', 'iscorrect' => true],
                            ['answer' => 'Une inflation supérieure à zéro', 'iscorrect' => false],
                            ['answer' => 'Une balance commerciale déficitaire', 'iscorrect' => false],
                            ['answer' => 'Une croissance démographique négative', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les récessions peuvent-elles produire des effets persistants sur l\'emploi ?',
                        'answers' => [
                            ['answer' => 'Une durée prolongée du chômage peut provoquer une perte de compétences et réduire l\'employabilité de certaines personnes', 'iscorrect' => true],
                            ['answer' => 'Le chômage n\'affecte jamais le capital humain', 'iscorrect' => false],
                            ['answer' => 'Les travailleurs retrouvent toujours immédiatement un emploi', 'iscorrect' => false],
                            ['answer' => 'Les entreprises augmentent toujours leurs embauches pendant une récession', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les prévisions macroéconomiques sont-elles incertaines ?',
                        'answers' => [
                            ['answer' => 'Les relations économiques peuvent changer et les chocs futurs sont impossibles à connaître avec certitude', 'iscorrect' => true],
                            ['answer' => 'Le comportement humain est parfaitement prévisible', 'iscorrect' => false],
                            ['answer' => 'Les marchés ne connaissent jamais de ruptures', 'iscorrect' => false],
                            ['answer' => 'Toutes les données économiques sont parfaitement stables', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Inflation, politique monétaire et anticipations',
                'questions' => [
                    [
                        'question' => 'Pourquoi les anticipations d\'inflation influencent-elles l\'économie réelle ?',
                        'answers' => [
                            ['answer' => 'Elles peuvent influencer les décisions de consommation, d\'investissement, de fixation des salaires et des prix', 'iscorrect' => true],
                            ['answer' => 'Elles n\'affectent que les marchés financiers', 'iscorrect' => false],
                            ['answer' => 'Elles ne modifient jamais les comportements', 'iscorrect' => false],
                            ['answer' => 'Elles déterminent directement les exportations', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu\'est-ce qu\'une inflation importée ?',
                        'answers' => [
                            ['answer' => 'Une hausse des prix domestiques liée notamment à l\'augmentation du coût des biens, services ou intrants provenant de l\'étranger', 'iscorrect' => true],
                            ['answer' => 'Une inflation créée uniquement par les salaires domestiques', 'iscorrect' => false],
                            ['answer' => 'Une baisse du prix des importations', 'iscorrect' => false],
                            ['answer' => 'Une baisse des taxes nationales', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une dépréciation de la monnaie peut-elle alimenter l\'inflation ?',
                        'answers' => [
                            ['answer' => 'Elle peut renchérir les importations exprimées en monnaie domestique', 'iscorrect' => true],
                            ['answer' => 'Elle réduit toujours les prix importés', 'iscorrect' => false],
                            ['answer' => 'Elle supprime les échanges extérieurs', 'iscorrect' => false],
                            ['answer' => 'Elle rend automatiquement les biens domestiques gratuits', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu\'est-ce qu\'une spirale salaires-prix ?',
                        'answers' => [
                            ['answer' => 'Un mécanisme dans lequel la hausse des salaires et celle des prix peuvent se renforcer mutuellement', 'iscorrect' => true],
                            ['answer' => 'Une baisse simultanée des salaires et des prix', 'iscorrect' => false],
                            ['answer' => 'Une politique de change fixe', 'iscorrect' => false],
                            ['answer' => 'Une hausse automatique de la productivité', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la crédibilité d\'une banque centrale peut-elle faciliter la lutte contre l\'inflation ?',
                        'answers' => [
                            ['answer' => 'Des anticipations mieux ancrées peuvent réduire le risque que les agents incorporent durablement une inflation élevée dans leurs décisions', 'iscorrect' => true],
                            ['answer' => 'La crédibilité augmente automatiquement la production potentielle', 'iscorrect' => false],
                            ['answer' => 'Elle supprime tous les chocs d\'offre', 'iscorrect' => false],
                            ['answer' => 'Elle rend les taux d\'intérêt toujours nuls', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le rôle d\'un taux directeur dans la transmission monétaire ?',
                        'answers' => [
                            ['answer' => 'Il influence les conditions de financement et donc certaines décisions de consommation, d\'investissement et de crédit', 'iscorrect' => true],
                            ['answer' => 'Il fixe directement tous les prix de détail', 'iscorrect' => false],
                            ['answer' => 'Il détermine directement le salaire minimum', 'iscorrect' => false],
                            ['answer' => 'Il remplace la politique budgétaire', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une politique monétaire restrictive peut-elle ralentir l\'investissement privé ?',
                        'answers' => [
                            ['answer' => 'Une hausse des coûts de financement peut rendre certains projets moins rentables', 'iscorrect' => true],
                            ['answer' => 'Les entreprises deviennent automatiquement plus productives', 'iscorrect' => false],
                            ['answer' => 'Les taux élevés réduisent toujours les coûts du capital', 'iscorrect' => false],
                            ['answer' => 'Les investissements deviennent indépendants du financement', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les chocs d\'offre peuvent-ils créer simultanément inflation et baisse de production ?',
                        'answers' => [
                            ['answer' => 'Un renchérissement des coûts peut réduire la production tout en poussant les prix à la hausse', 'iscorrect' => true],
                            ['answer' => 'Les chocs d\'offre augmentent toujours la productivité', 'iscorrect' => false],
                            ['answer' => 'Ils réduisent toujours les prix', 'iscorrect' => false],
                            ['answer' => 'Ils éliminent le chômage immédiatement', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu\'est-ce que la déflation peut rendre problématique dans une économie très endettée ?',
                        'answers' => [
                            ['answer' => 'La valeur réelle du poids de certaines dettes peut augmenter lorsque les prix et revenus diminuent', 'iscorrect' => true],
                            ['answer' => 'Elle réduit toujours le poids réel de la dette', 'iscorrect' => false],
                            ['answer' => 'Elle augmente automatiquement les revenus nominaux', 'iscorrect' => false],
                            ['answer' => 'Elle garantit toujours la croissance', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une cible d\'inflation crédible peut-elle réduire l\'incertitude économique ?',
                        'answers' => [
                            ['answer' => 'Elle fournit un point d\'ancrage pour les anticipations des agents économiques', 'iscorrect' => true],
                            ['answer' => 'Elle garantit exactement l\'inflation future', 'iscorrect' => false],
                            ['answer' => 'Elle empêche tout choc extérieur', 'iscorrect' => false],
                            ['answer' => 'Elle fixe directement tous les salaires', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Croissance, productivité et développement économique',
                'questions' => [
                    [
                        'question' => 'Pourquoi la croissance du PIB par habitant est-elle généralement plus informative que la croissance du PIB total pour comparer le niveau de vie matériel ?',
                        'answers' => [
                            ['answer' => 'Elle tient compte de l\'évolution de la population', 'iscorrect' => true],
                            ['answer' => 'Elle élimine tous les problèmes d\'inégalité', 'iscorrect' => false],
                            ['answer' => 'Elle mesure directement le bonheur', 'iscorrect' => false],
                            ['answer' => 'Elle ne dépend jamais du PIB', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est un déterminant fondamental de la croissance à très long terme ?',
                        'answers' => [
                            ['answer' => 'La productivité soutenue par l\'accumulation de connaissances, le capital et les institutions', 'iscorrect' => true],
                            ['answer' => 'Une hausse permanente des prix', 'iscorrect' => false],
                            ['answer' => 'Une baisse continue de l\'efficacité', 'iscorrect' => false],
                            ['answer' => 'Une réduction permanente des investissements', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les institutions peuvent-elles influencer la croissance économique ?',
                        'answers' => [
                            ['answer' => 'Des institutions efficaces peuvent sécuriser les droits, réduire l\'incertitude et encourager l\'investissement et l\'innovation', 'iscorrect' => true],
                            ['answer' => 'Les institutions n\'ont aucun effet sur les incitations', 'iscorrect' => false],
                            ['answer' => 'Elles remplacent totalement les facteurs de production', 'iscorrect' => false],
                            ['answer' => 'Elles garantissent une croissance identique dans tous les pays', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le rôle du capital humain dans la croissance endogène ?',
                        'answers' => [
                            ['answer' => 'L\'accumulation de compétences et de connaissances peut générer des gains de productivité et favoriser l\'innovation', 'iscorrect' => true],
                            ['answer' => 'Le capital humain réduit toujours la productivité', 'iscorrect' => false],
                            ['answer' => 'Il ne concerne que les entreprises publiques', 'iscorrect' => false],
                            ['answer' => 'Il remplace complètement le capital physique', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les rendements décroissants du capital sont-ils importants pour les modèles de croissance ?',
                        'answers' => [
                            ['answer' => 'Ils impliquent qu\'à technologie constante, ajouter du capital peut produire des gains supplémentaires de plus en plus faibles par unité de capital', 'iscorrect' => true],
                            ['answer' => 'Ils signifient que le capital n\'a aucun effet', 'iscorrect' => false],
                            ['answer' => 'Ils rendent la croissance impossible dans tous les cas', 'iscorrect' => false],
                            ['answer' => 'Ils signifient que la productivité augmente sans limite', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi l\'innovation peut-elle permettre d\'éviter certains effets des rendements décroissants ?',
                        'answers' => [
                            ['answer' => 'Le progrès technologique peut déplacer la frontière productive et accroître l\'efficacité des facteurs', 'iscorrect' => true],
                            ['answer' => 'L\'innovation réduit toujours le capital disponible', 'iscorrect' => false],
                            ['answer' => 'La technologie n\'affecte jamais la productivité', 'iscorrect' => false],
                            ['answer' => 'Elle élimine automatiquement les contraintes de ressources', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est un obstacle structurel fréquent au développement économique ?',
                        'answers' => [
                            ['answer' => 'Un faible niveau d\'infrastructures, de capital humain ou de qualité institutionnelle', 'iscorrect' => true],
                            ['answer' => 'Une productivité trop élevée', 'iscorrect' => false],
                            ['answer' => 'Une innovation excessive', 'iscorrect' => false],
                            ['answer' => 'Une concurrence parfaite dans tous les secteurs', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi l\'industrialisation peut-elle accélérer la transformation structurelle d\'une économie ?',
                        'answers' => [
                            ['answer' => 'Elle peut déplacer la main-d\'œuvre vers des activités à productivité plus élevée et favoriser l\'accumulation de capital', 'iscorrect' => true],
                            ['answer' => 'Elle réduit toujours la productivité agricole à zéro', 'iscorrect' => false],
                            ['answer' => 'Elle empêche le développement des services', 'iscorrect' => false],
                            ['answer' => 'Elle supprime les échanges internationaux', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une croissance du PIB ne garantit-elle pas une amélioration proportionnelle du bien-être ?',
                        'answers' => [
                            ['answer' => 'Le PIB ne mesure pas entièrement les inégalités, la qualité environnementale, le loisir ou certains aspects de la qualité de vie', 'iscorrect' => true],
                            ['answer' => 'Le PIB mesure uniquement les loisirs', 'iscorrect' => false],
                            ['answer' => 'Le PIB inclut parfaitement le bien-être psychologique', 'iscorrect' => false],
                            ['answer' => 'Le PIB mesure directement toutes les externalités', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les gains de productivité sont-ils importants pour les salaires réels à long terme ?',
                        'answers' => [
                            ['answer' => Une productivité plus élevée augmente la quantité de valeur économique pouvant être créée par unité de travail', 'iscorrect' => true],
                            ['answer' => 'La productivité réduit toujours les salaires réels', 'iscorrect' => false],
                            ['answer' => 'Les salaires réels sont indépendants de la productivité', 'iscorrect' => false],
                            ['answer' => 'La productivité n\'a d\'effet que sur les prix des actifs', 'iscorrect' => false],
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

                // Mélange des réponses : la bonne réponse n'est jamais forcée en première position.
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
