```php
<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Major;
use App\Models\Subject;
use App\Models\Quiz;
use App\Models\Question;
use App\Models\Answer;

class InternationalEconomicsProfessionalSeeder extends Seeder
{
    public function run(): void
    {
        $major = Major::where('slug', 'economy')->firstOrFail();

        $subject = Subject::where('major_id', $major->id)
            ->where('slug', 'international-economics')
            ->firstOrFail();

        $quizzes = [
            [
                'title' => 'International Trade Theory and Welfare',
                'questions' => [
                    [
                        'question' => 'Dans un modèle ricardien, quelle condition est essentielle pour que les différences de productivité créent un avantage comparatif ?',
                        'answers' => [
                            ['answer' => 'Les ratios de productivité entre les biens doivent différer entre les pays', 'iscorrect' => true],
                            ['answer' => 'Les niveaux absolus de productivité doivent être identiques', 'iscorrect' => false],
                            ['answer' => 'Les taux de change doivent être fixes', 'iscorrect' => false],
                            ['answer' => 'Les coûts de transport doivent être nuls dans tous les cas', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un pays qui possède un avantage absolu dans tous les biens peut-il néanmoins importer certains biens ?',
                        'answers' => [
                            ['answer' => 'Parce que son coût d’opportunité relatif peut être plus élevé pour ces biens', 'iscorrect' => true],
                            ['answer' => 'Parce qu’un avantage absolu interdit toute spécialisation', 'iscorrect' => false],
                            ['answer' => 'Parce que la productivité absolue détermine toujours les importations directement', 'iscorrect' => false],
                            ['answer' => 'Parce que les importations sont indépendantes des coûts relatifs', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les termes de l’échange peuvent-ils affecter directement le revenu réel d’un pays ?',
                        'answers' => [
                            ['answer' => 'Ils déterminent la quantité de biens importables obtenue pour une quantité donnée d’exportations', 'iscorrect' => true],
                            ['answer' => 'Ils déterminent uniquement le nombre d’emplois domestiques', 'iscorrect' => false],
                            ['answer' => 'Ils modifient automatiquement la productivité du travail', 'iscorrect' => false],
                            ['answer' => 'Ils sont indépendants des prix internationaux', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle distinction est fondamentale entre gains statiques et gains dynamiques du commerce ?',
                        'answers' => [
                            ['answer' => 'Les gains statiques viennent notamment de la spécialisation et de l’échange, tandis que les gains dynamiques peuvent provenir de l’innovation, de l’apprentissage et de la concurrence', 'iscorrect' => true],
                            ['answer' => 'Les gains statiques concernent uniquement les marchés financiers', 'iscorrect' => false],
                            ['answer' => 'Les gains dynamiques excluent toute innovation', 'iscorrect' => false],
                            ['answer' => 'Les deux notions sont nécessairement identiques', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une amélioration des termes de l’échange ne garantit-elle pas toujours une amélioration sans ambiguïté du bien-être ?',
                        'answers' => [
                            ['answer' => 'Les effets peuvent dépendre des distorsions existantes, des transferts de revenu et de la manière dont la production et la consommation réagissent', 'iscorrect' => true],
                            ['answer' => 'Les termes de l’échange n’ont aucun lien avec le bien-être', 'iscorrect' => false],
                            ['answer' => 'Une amélioration des termes de l’échange réduit toujours la consommation', 'iscorrect' => false],
                            ['answer' => 'Le bien-être dépend exclusivement du taux de change nominal', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les coûts de transport peuvent-ils modifier l’avantage comparatif effectif observé ?',
                        'answers' => [
                            ['answer' => 'Ils augmentent le coût d’accès aux marchés et peuvent rendre certaines spécialisations moins rentables malgré un avantage de production', 'iscorrect' => true],
                            ['answer' => 'Ils n’affectent que les importations et jamais les exportations', 'iscorrect' => false],
                            ['answer' => 'Ils sont toujours identiques entre les pays', 'iscorrect' => false],
                            ['answer' => 'Ils améliorent nécessairement la compétitivité de tous les exportateurs', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les gains agrégés du commerce peuvent-ils coexister avec des pertes pour certains travailleurs ?',
                        'answers' => [
                            ['answer' => 'La réallocation des ressources entre secteurs modifie les revenus et les opportunités selon l’exposition à la concurrence internationale', 'iscorrect' => true],
                            ['answer' => 'Les travailleurs sont toujours parfaitement mobiles sans coût', 'iscorrect' => false],
                            ['answer' => 'Le commerce augmente tous les salaires de la même manière', 'iscorrect' => false],
                            ['answer' => 'La répartition des revenus est indépendante de la spécialisation', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une analyse professionnelle du libre-échange doit-elle distinguer efficacité et distribution ?',
                        'answers' => [
                            ['answer' => 'Une politique peut augmenter les gains totaux tout en modifiant la répartition entre ménages, facteurs et secteurs', 'iscorrect' => true],
                            ['answer' => 'L’efficacité et la distribution sont toujours exactement la même chose', 'iscorrect' => false],
                            ['answer' => 'La distribution ne dépend jamais du commerce', 'iscorrect' => false],
                            ['answer' => 'Les gains d’efficacité sont toujours répartis uniformément', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les biens non échangeables sont-ils importants dans l’analyse de l’économie ouverte ?',
                        'answers' => [
                            ['answer' => 'Ils limitent l’ajustement international des prix et peuvent faire diverger les niveaux de prix entre pays', 'iscorrect' => true],
                            ['answer' => 'Ils sont toujours exportés davantage que les biens échangeables', 'iscorrect' => false],
                            ['answer' => 'Ils rendent la politique commerciale inutile', 'iscorrect' => false],
                            ['answer' => 'Ils ont nécessairement le même prix mondial', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi l’analyse empirique du commerce doit-elle aller au-delà du simple volume d’échanges ?',
                        'answers' => [
                            ['answer' => 'La composition des échanges, les valeurs ajoutées, les secteurs et les caractéristiques des partenaires sont essentiels pour comprendre les effets économiques', 'iscorrect' => true],
                            ['answer' => 'Le volume des échanges suffit toujours à identifier le bien-être', 'iscorrect' => false],
                            ['answer' => 'La structure des échanges n’a aucun intérêt', 'iscorrect' => false],
                            ['answer' => 'Les échanges de biens et services sont toujours économiquement identiques', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Trade Policy and Strategic Protection',
                'questions' => [
                    [
                        'question' => 'Pourquoi un grand pays peut-il théoriquement bénéficier d’un tarif optimal ?',
                        'answers' => [
                            ['answer' => 'Il peut exercer un pouvoir de marché et améliorer son prix d’importation, générant un gain de termes de l’échange', 'iscorrect' => true],
                            ['answer' => 'Parce qu’un tarif élimine toujours les distorsions domestiques', 'iscorrect' => false],
                            ['answer' => 'Parce que les représailles étrangères sont impossibles', 'iscorrect' => false],
                            ['answer' => 'Parce qu’un grand pays ne peut jamais subir de perte de bien-être', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la protection optimale est-elle difficile à mettre en œuvre dans la réalité ?',
                        'answers' => [
                            ['answer' => 'Les effets dépendent du pouvoir de marché, des représailles, des distorsions intérieures et de réactions stratégiques difficiles à prévoir', 'iscorrect' => true],
                            ['answer' => 'Les gouvernements connaissent toujours exactement toutes les élasticités', 'iscorrect' => false],
                            ['answer' => 'Les partenaires commerciaux ne réagissent jamais', 'iscorrect' => false],
                            ['answer' => 'Les tarifs n’ont aucun effet sur les prix intérieurs', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une guerre commerciale peut-elle rendre les deux pays moins bien lotis ?',
                        'answers' => [
                            ['answer' => 'Les représailles réciproques réduisent les échanges mutuellement bénéfiques et peuvent augmenter les coûts pour les consommateurs et producteurs utilisant des intrants étrangers', 'iscorrect' => true],
                            ['answer' => 'Les tarifs augmentent toujours la productivité mondiale', 'iscorrect' => false],
                            ['answer' => 'Les deux pays bénéficient automatiquement des recettes tarifaires étrangères', 'iscorrect' => false],
                            ['answer' => 'Les échanges augmentent nécessairement après chaque représaille', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les tarifs sur les biens intermédiaires peuvent-ils être particulièrement coûteux pour les exportateurs ?',
                        'answers' => [
                            ['answer' => 'Ils augmentent les coûts des intrants et peuvent réduire la compétitivité des biens destinés aux marchés étrangers', 'iscorrect' => true],
                            ['answer' => 'Les exportateurs n’utilisent jamais de biens importés', 'iscorrect' => false],
                            ['answer' => 'Les intrants deviennent automatiquement moins chers après un tarif', 'iscorrect' => false],
                            ['answer' => 'Les droits de douane ne concernent que les consommateurs', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les barrières non tarifaires peuvent-elles produire des effets protectionnistes même sans taxe explicite ?',
                        'answers' => [
                            ['answer' => 'Des licences, normes, procédures ou exigences administratives peuvent accroître le coût effectif d’accès au marché', 'iscorrect' => true],
                            ['answer' => 'Elles n’affectent jamais les coûts', 'iscorrect' => false],
                            ['answer' => 'Elles sont toujours plus transparentes qu’un tarif', 'iscorrect' => false],
                            ['answer' => 'Elles garantissent toujours une concurrence accrue', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une politique commerciale stratégique peut-elle être pertinente dans un secteur oligopolistique mondial ?',
                        'answers' => [
                            ['answer' => 'Une intervention peut parfois déplacer des profits entre entreprises ou pays lorsque les décisions des firmes sont interdépendantes', 'iscorrect' => true],
                            ['answer' => 'Les entreprises oligopolistiques sont toujours indépendantes', 'iscorrect' => false],
                            ['answer' => 'La politique commerciale n’affecte jamais les profits', 'iscorrect' => false],
                            ['answer' => 'Les marchés oligopolistiques ne connaissent aucune économie d’échelle', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une subvention à l’exportation peut-elle être inefficace malgré une hausse des exportations ?',
                        'answers' => [
                            ['answer' => 'Le coût budgétaire et les distorsions peuvent dépasser les gains associés à l’augmentation des ventes extérieures', 'iscorrect' => true],
                            ['answer' => 'Les subventions sont toujours autofinancées', 'iscorrect' => false],
                            ['answer' => 'Une hausse des exportations réduit toujours le bien-être', 'iscorrect' => false],
                            ['answer' => 'Le gouvernement ne supporte jamais le coût de la subvention', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les règles commerciales multilatérales peuvent-elles limiter le protectionnisme ?',
                        'answers' => [
                            ['answer' => 'Elles créent des engagements communs et augmentent le coût institutionnel de certaines mesures discriminatoires', 'iscorrect' => true],
                            ['answer' => 'Elles interdisent toute politique économique domestique', 'iscorrect' => false],
                            ['answer' => 'Elles garantissent que tous les pays ont les mêmes intérêts', 'iscorrect' => false],
                            ['answer' => 'Elles rendent les représailles commerciales impossibles dans tous les cas', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les négociations commerciales peuvent-elles produire des coalitions sectorielles fortes ?',
                        'answers' => [
                            ['answer' => Les gains et pertes peuvent être concentrés dans quelques secteurs alors que les coûts sont diffus pour l’ensemble des consommateurs', 'iscorrect' => true],
                            ['answer' => 'Tous les groupes ont toujours le même intérêt', 'iscorrect' => false],
                            ['answer' => 'Les consommateurs sont toujours parfaitement organisés', 'iscorrect' => false],
                            ['answer' => 'Les effets redistributifs du commerce sont toujours nuls', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une évaluation sérieuse d’une mesure protectionniste doit-elle intégrer les effets généraux d’équilibre ?',
                        'answers' => [
                            ['answer' => 'Les prix, les intrants, les exportations, les emplois et les réactions étrangères peuvent tous s’ajuster simultanément', 'iscorrect' => true],
                            ['answer' => 'Les marchés liés ne réagissent jamais aux tarifs', 'iscorrect' => false],
                            ['answer' => 'Seul le secteur directement protégé change', 'iscorrect' => false],
                            ['answer' => 'Les prix relatifs restent nécessairement constants', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'International Finance and Exchange Rate Economics',
                'questions' => [
                    [
                        'question' => 'Pourquoi la parité non couverte des taux d’intérêt relie-t-elle le différentiel de taux aux anticipations de change ?',
                        'answers' => [
                            ['answer' => 'Les investisseurs arbitrent entre actifs en tenant compte du rendement attendu après conversion entre monnaies', 'iscorrect' => true],
                            ['answer' => 'Les investisseurs comparent uniquement les taux nominaux sans risque de change', 'iscorrect' => false],
                            ['answer' => 'Les anticipations de change n’ont aucun rôle', 'iscorrect' => false],
                            ['answer' => 'Les marchés de capitaux sont toujours fermés aux investisseurs étrangers', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la parité de pouvoir d’achat absolue n’est-elle généralement pas vérifiée exactement à court terme ?',
                        'answers' => [
                            ['answer' => 'Les biens non échangeables, coûts de transport, taxes et différences de qualité empêchent l’égalisation immédiate des niveaux de prix', 'iscorrect' => true],
                            ['answer' => 'Tous les biens sont parfaitement échangeables sans coût', 'iscorrect' => false],
                            ['answer' => 'Les taux de change n’ont aucun lien avec les prix', 'iscorrect' => false],
                            ['answer' => 'Les prix domestiques sont toujours constants', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une hausse du taux directeur peut-elle provoquer une appréciation temporaire de la monnaie ?',
                        'answers' => [
                            ['answer' => 'Elle peut améliorer le rendement relatif attendu des actifs domestiques et augmenter la demande de monnaie nationale', 'iscorrect' => true],
                            ['answer' => 'Une hausse des taux réduit toujours la demande d’actifs domestiques', 'iscorrect' => false],
                            ['answer' => 'Les marchés de capitaux ignorent les taux d’intérêt', 'iscorrect' => false],
                            ['answer' => 'Une monnaie ne peut pas réagir aux politiques monétaires', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une appréciation nominale peut-elle avoir un effet différent d’une appréciation réelle ?',
                        'answers' => [
                            ['answer' => 'L’évolution des prix domestiques et étrangers peut compenser ou amplifier le mouvement du taux nominal', 'iscorrect' => true],
                            ['answer' => 'Les deux concepts sont toujours identiques', 'iscorrect' => false],
                            ['answer' => 'Le taux réel ne dépend jamais des niveaux de prix', 'iscorrect' => false],
                            ['answer' => 'L’inflation ne modifie jamais la compétitivité', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi le risque de change est-il particulièrement important pour une entreprise ayant des flux futurs en devises ?',
                        'answers' => [
                            ['answer' => 'La valeur domestique des flux futurs dépend du taux de change au moment de la conversion', 'iscorrect' => true],
                            ['answer' => 'Les flux en devises sont toujours fixes en monnaie nationale', 'iscorrect' => false],
                            ['answer' => 'Le taux de change ne concerne que les banques centrales', 'iscorrect' => false],
                            ['answer' => 'Les devises étrangères n’ont jamais de volatilité', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un forward de change peut-il réduire un risque sans supprimer toutes les incertitudes économiques ?',
                        'answers' => [
                            ['answer' => 'Il fixe un taux de conversion futur mais ne supprime pas les risques commerciaux, opérationnels ou de volume', 'iscorrect' => true],
                            ['answer' => 'Il garantit le chiffre d’affaires futur', 'iscorrect' => false],
                            ['answer' => 'Il supprime le risque de défaut du client', 'iscorrect' => false],
                            ['answer' => 'Il élimine toute volatilité économique', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une dépréciation de la monnaie peut-elle avoir des effets différents selon la structure de la dette extérieure ?',
                        'answers' => [
                            ['answer' => 'Les emprunteurs exposés à une dette en devise étrangère voient la valeur de leurs obligations augmenter en monnaie nationale', 'iscorrect' => true],
                            ['answer' => 'La dette étrangère devient toujours plus facile à rembourser', 'iscorrect' => false],
                            ['answer' => 'La devise de dette n’a aucun effet sur le bilan', 'iscorrect' => false],
                            ['answer' => 'Les entreprises exportatrices sont les seules concernées', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la couverture naturelle peut-elle réduire le risque de change ?',
                        'answers' => [
                            ['answer' => 'Une entreprise peut faire correspondre une partie de ses recettes et dépenses dans la même devise', 'iscorrect' => true],
                            ['answer' => 'Elle transforme automatiquement toute devise en monnaie domestique', 'iscorrect' => false],
                            ['answer' => 'Elle élimine toute variation de prix', 'iscorrect' => false],
                            ['answer' => 'Elle garantit toujours un taux de change avantageux', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les investisseurs internationaux exigent-ils parfois une prime de risque élevée sur certains marchés ?',
                        'answers' => [
                            ['answer' => 'Ils doivent être compensés pour des risques de crédit, de change, de liquidité ou de risque politique plus élevés', 'iscorrect' => true],
                            ['answer' => 'Les actifs risqués ont toujours des rendements plus faibles', 'iscorrect' => false],
                            ['answer' => 'Les investisseurs ignorent les risques', 'iscorrect' => false],
                            ['answer' => 'La prime de risque est toujours nulle', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les chocs mondiaux peuvent-ils provoquer une fuite vers la qualité ?',
                        'answers' => [
                            ['answer' => 'Les investisseurs réallouent leurs portefeuilles vers des actifs perçus comme plus sûrs et liquides', 'iscorrect' => true],
                            ['answer' => 'Les investisseurs augmentent toujours leur exposition aux actifs les plus risqués', 'iscorrect' => false],
                            ['answer' => 'La perception du risque ne change jamais', 'iscorrect' => false],
                            ['answer' => 'Les actifs sûrs deviennent automatiquement plus risqués', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Balance of Payments and External Sustainability',
                'questions' => [
                    [
                        'question' => 'Pourquoi un déficit courant implique-t-il une relation avec les flux financiers internationaux ?',
                        'answers' => [
                            ['answer' => 'Il correspond à une demande nette de financement extérieur qui doit être compensée par les composantes financières de la balance des paiements', 'iscorrect' => true],
                            ['answer' => 'Le compte courant et le compte financier sont totalement indépendants', 'iscorrect' => false],
                            ['answer' => 'Un déficit courant signifie toujours absence de capitaux', 'iscorrect' => false],
                            ['answer' => 'Les flux financiers ne figurent pas dans la balance des paiements', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un déficit courant peut-il être soutenable dans certains cas ?',
                        'answers' => [
                            ['answer' => 'S’il finance des investissements productifs et reste compatible avec la capacité future de remboursement ou de génération de revenus', 'iscorrect' => true],
                            ['answer' => 'Tout déficit courant est automatiquement soutenable', 'iscorrect' => false],
                            ['answer' => 'Les créanciers financent toujours indéfiniment les déficits', 'iscorrect' => false],
                            ['answer' => 'La soutenabilité ne dépend jamais des perspectives économiques', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la composition des passifs extérieurs compte-t-elle pour la vulnérabilité d’un pays ?',
                        'answers' => [
                            ['answer' => 'La maturité, la devise, la structure contractuelle et la volatilité des flux diffèrent selon les types de financement', 'iscorrect' => true],
                            ['answer' => 'Toutes les dettes extérieures ont exactement le même risque', 'iscorrect' => false],
                            ['answer' => 'La devise de la dette est sans importance', 'iscorrect' => false],
                            ['answer' => 'Les investissements directs sont toujours plus volatils que tous les autres actifs', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une dette extérieure à court terme peut-elle accroître le risque de crise ?',
                        'answers' => [
                            ['answer' => 'Elle nécessite des refinancements fréquents et peut devenir difficile à renouveler lors d’une perte de confiance', 'iscorrect' => true],
                            ['answer' => 'La dette à court terme ne doit jamais être remboursée', 'iscorrect' => false],
                            ['answer' => 'Les créanciers renouvellent toujours les contrats', 'iscorrect' => false],
                            ['answer' => 'La maturité n’a aucun effet sur la liquidité', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une forte dette en monnaie étrangère est-elle dangereuse lors d’une dépréciation ?',
                        'answers' => [
                            ['answer' => 'La valeur de la dette augmente en monnaie domestique alors que les revenus peuvent ne pas augmenter proportionnellement', 'iscorrect' => true],
                            ['answer' => 'La dépréciation réduit automatiquement la dette', 'iscorrect' => false],
                            ['answer' => 'La monnaie de libellé est sans effet sur le bilan', 'iscorrect' => false],
                            ['answer' => 'Les créanciers convertissent toujours la dette gratuitement', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi l’accumulation de réserves de change peut-elle fournir une protection contre certains chocs externes ?',
                        'answers' => [
                            ['answer' => 'Elle offre une réserve de liquidité en devises pour honorer certains besoins externes ou intervenir sur le marché', 'iscorrect' => true],
                            ['answer' => 'Elle élimine toujours la nécessité d’un ajustement macroéconomique', 'iscorrect' => false],
                            ['answer' => 'Elle finance automatiquement tous les déficits budgétaires', 'iscorrect' => false],
                            ['answer' => 'Elle rend le taux de change nécessairement fixe', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un excédent courant persistant peut-il aussi soulever des questions de politique économique ?',
                        'answers' => [
                            ['answer' => 'Il peut refléter une demande intérieure faible, une épargne élevée ou une structure de compétitivité dont les effets distributifs méritent analyse', 'iscorrect' => true],
                            ['answer' => 'Un excédent courant est toujours optimal dans tous les modèles', 'iscorrect' => false],
                            ['answer' => 'Les excédents n’ont aucun lien avec l’épargne', 'iscorrect' => false],
                            ['answer' => 'Les partenaires commerciaux ne sont jamais concernés', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les déséquilibres mondiaux sont-ils difficiles à interpréter à partir d’un seul pays ?',
                        'answers' => [
                            ['answer' => 'Les excédents et déficits sont interconnectés par l’épargne, l’investissement et les flux financiers mondiaux', 'iscorrect' => true],
                            ['answer' => 'Chaque pays détermine son compte courant sans influence extérieure', 'iscorrect' => false],
                            ['answer' => 'Les flux financiers sont complètement domestiques', 'iscorrect' => false],
                            ['answer' => 'Les balances courantes sont indépendantes entre elles', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la soutenabilité externe dépend-elle aussi du rendement des actifs et passifs internationaux ?',
                        'answers' => [
                            ['answer' => 'Les revenus futurs du capital peuvent influencer la capacité du pays à financer ses engagements extérieurs', 'iscorrect' => true],
                            ['answer' => 'Les revenus du capital sont sans lien avec le compte extérieur', 'iscorrect' => false],
                            ['answer' => 'Les taux de rendement internationaux sont toujours nuls', 'iscorrect' => false],
                            ['answer' => 'Les actifs étrangers ne génèrent jamais de revenus', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une crise de balance des paiements peut-elle devenir rapidement une crise financière domestique ?',
                        'answers' => [
                            ['answer' => 'Une pénurie de devises peut affecter les banques, entreprises et emprunteurs exposés aux engagements extérieurs', 'iscorrect' => true],
                            ['answer' => 'Les institutions domestiques sont toujours isolées des devises', 'iscorrect' => false],
                            ['answer' => 'Les crises externes n’affectent jamais le crédit domestique', 'iscorrect' => false],
                            ['answer' => 'Les banques détiennent toujours uniquement des actifs domestiques', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Global Value Chains and Foreign Direct Investment',
                'questions' => [
                    [
                        'question' => 'Pourquoi les chaînes de valeur mondiales peuvent-elles augmenter la productivité des entreprises ?',
                        'answers' => [
                            ['answer' => 'Elles permettent une spécialisation plus fine des tâches et l’accès à des fournisseurs, technologies et marchés internationaux', 'iscorrect' => true],
                            ['answer' => 'Elles obligent toujours les entreprises à produire tous les composants localement', 'iscorrect' => false],
                            ['answer' => 'Elles suppriment toute concurrence', 'iscorrect' => false],
                            ['answer' => 'Elles empêchent toute diffusion technologique', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une entreprise peut-elle préférer l’IDE à l’exportation ?',
                        'answers' => [
                            ['answer' => 'Pour éviter certains coûts commerciaux, protéger des actifs spécifiques, contrôler la production ou se rapprocher des clients', 'iscorrect' => true],
                            ['answer' => 'Parce que l’exportation est toujours plus coûteuse', 'iscorrect' => false],
                            ['answer' => 'Parce que l’IDE élimine tous les risques politiques', 'iscorrect' => false],
                            ['answer' => 'Parce qu’une entreprise multinationale ne peut jamais exporter', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les économies d’agglomération peuvent-elles influencer la localisation des IDE ?',
                        'answers' => [
                            ['answer' => 'La concentration géographique peut offrir un meilleur accès aux fournisseurs, travailleurs spécialisés, infrastructures et connaissances', 'iscorrect' => true],
                            ['answer' => 'L’agglomération augmente toujours les coûts sans aucun bénéfice', 'iscorrect' => false],
                            ['answer' => 'Les entreprises préfèrent toujours être isolées', 'iscorrect' => false],
                            ['answer' => 'Les compétences sont indépendantes de la localisation', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les transferts technologiques liés à l’IDE ne sont-ils pas automatiques ?',
                        'answers' => [
                            ['answer' => 'Ils dépendent notamment des capacités locales d’absorption, des liens avec les entreprises domestiques et des incitations des multinationales', 'iscorrect' => true],
                            ['answer' => 'La technologie se diffuse toujours sans interaction', 'iscorrect' => false],
                            ['answer' => 'Les entreprises locales n’ont aucun rôle dans la diffusion', 'iscorrect' => false],
                            ['answer' => 'Les multinationales transfèrent toujours toutes leurs technologies', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la fragmentation internationale augmente-t-elle la sensibilité aux perturbations logistiques ?',
                        'answers' => [
                            ['answer' => 'Une interruption sur un maillon critique peut retarder ou bloquer plusieurs étapes de production dans différents pays', 'iscorrect' => true],
                            ['answer' => 'Les chaînes de valeur sont toujours redondantes', 'iscorrect' => false],
                            ['answer' => 'Les stocks sont toujours illimités', 'iscorrect' => false],
                            ['answer' => 'Les entreprises peuvent toujours remplacer instantanément tout fournisseur', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les entreprises diversifient-elles parfois leurs fournisseurs internationaux ?',
                        'answers' => [
                            ['answer' => 'Pour réduire leur dépendance à un seul fournisseur ou pays et améliorer leur résilience', 'iscorrect' => true],
                            ['answer' => 'Pour augmenter systématiquement les coûts logistiques', 'iscorrect' => false],
                            ['answer' => 'Pour supprimer les économies d’échelle dans tous les cas', 'iscorrect' => false],
                            ['answer' => 'Parce que les fournisseurs uniques sont toujours interdits', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les règles d’origine sont-elles importantes pour les chaînes de valeur régionales ?',
                        'answers' => [
                            ['answer' => 'Elles déterminent comment l’origine des produits est établie et donc l’accès aux préférences commerciales', 'iscorrect' => true],
                            ['answer' => 'Elles fixent toujours les prix de marché', 'iscorrect' => false],
                            ['answer' => 'Elles interdisent tout commerce de composants', 'iscorrect' => false],
                            ['answer' => 'Elles remplacent les contrats entre entreprises', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la relocalisation d’une chaîne de valeur peut-elle augmenter les coûts à court terme ?',
                        'answers' => [
                            ['answer' => 'Le transfert peut nécessiter de nouvelles installations, compétences, fournisseurs et coûts de coordination', 'iscorrect' => true],
                            ['answer' => 'La relocalisation réduit toujours immédiatement les coûts', 'iscorrect' => false],
                            ['answer' => 'Les capacités productives sont parfaitement mobiles', 'iscorrect' => false],
                            ['answer' => 'Les investissements de transition sont toujours nuls', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les politiques industrielles peuvent-elles modifier les chaînes de valeur internationales ?',
                        'answers' => [
                            ['answer' => 'Les subventions, normes, crédits, restrictions et infrastructures peuvent modifier les coûts relatifs de localisation', 'iscorrect' => true],
                            ['answer' => 'Les chaînes de valeur sont totalement indépendantes des politiques publiques', 'iscorrect' => false],
                            ['answer' => 'Les politiques industrielles ne modifient jamais les coûts', 'iscorrect' => false],
                            ['answer' => 'Les multinationales ignorent toujours les réglementations', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la dépendance à des fournisseurs étrangers critiques peut-elle constituer un risque stratégique ?',
                        'answers' => [
                            ['answer' => 'Des chocs géopolitiques, sanitaires, logistiques ou commerciaux peuvent interrompre l’approvisionnement de secteurs essentiels', 'iscorrect' => true],
                            ['answer' => 'Les chaînes internationales sont toujours plus sûres que les chaînes domestiques', 'iscorrect' => false],
                            ['answer' => 'Les fournisseurs étrangers ne subissent jamais de perturbation', 'iscorrect' => false],
                            ['answer' => 'La géopolitique n’affecte jamais les échanges', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'International Macroeconomic Policy and Crisis Management',
                'questions' => [
                    [
                        'question' => Pourquoi un régime de change fixe peut-il amplifier une crise de balance des paiements ?',
                        'answers' => [
                            ['answer' => 'La défense de la parité peut nécessiter des réserves et des ajustements monétaires qui deviennent difficiles lorsque la confiance s’effondre', 'iscorrect' => true],
                            ['answer' => 'Un régime fixe supprime tous les mouvements de capitaux', 'iscorrect' => false],
                            ['answer' => 'Les réserves internationales sont toujours illimitées', 'iscorrect' => false],
                            ['answer' => 'La parité n’a aucune influence sur la politique monétaire', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => Pourquoi une fuite des capitaux peut-elle provoquer une forte dépréciation ?',
                        'answers' => [
                            ['answer' => 'La demande de devises étrangères augmente tandis que la demande d’actifs domestiques diminue', 'iscorrect' => true],
                            ['answer' => 'Les sorties de capitaux augmentent toujours la demande de monnaie domestique', 'iscorrect' => false],
                            ['answer' => 'Les investisseurs achètent davantage d’actifs domestiques lors d’une fuite', 'iscorrect' => false],
                            ['answer' => 'Le marché des changes n’est pas affecté par les flux financiers', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => Pourquoi une crise bancaire peut-elle devenir une crise de change ?',
                        'answers' => [
                            ['answer' => 'Les banques peuvent devoir obtenir des devises pour honorer leurs passifs externes, augmentant la demande de monnaie étrangère', 'iscorrect' => true],
                            ['answer' => 'Les banques ne détiennent jamais de dette étrangère', 'iscorrect' => false],
                            ['answer' => 'Les crises bancaires n’ont jamais d’effet sur les devises', 'iscorrect' => false],
                            ['answer' => 'Le taux de change est indépendant de la liquidité bancaire', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => Pourquoi la politique monétaire peut-elle être contrainte en présence d’une forte mobilité des capitaux et d’un taux fixe ?',
                        'answers' => [
                            ['answer' => 'Une divergence durable des taux peut déclencher des flux de capitaux incompatibles avec la défense de la parité', 'iscorrect' => true],
                            ['answer' => 'Les capitaux internationaux n’affectent jamais les taux de change', 'iscorrect' => false],
                            ['answer' => 'Les banques centrales disposent toujours d’une autonomie illimitée', 'iscorrect' => false],
                            ['answer' => 'Un taux fixe rend la politique monétaire totalement indépendante', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => Pourquoi les réserves internationales ne constituent-elles pas une protection infinie ?',
                        'answers' => [
                            ['answer' => 'Une crise prolongée peut épuiser les réserves si les pressions sur la monnaie persistent', 'iscorrect' => true],
                            ['answer' => 'Les réserves se reconstituent automatiquement sans aucun coût', 'iscorrect' => false],
                            ['answer' => 'Les réserves ne peuvent jamais être utilisées', 'iscorrect' => false],
                            ['answer' => 'Le montant des réserves n’a aucun lien avec les besoins extérieurs', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => Pourquoi une dépréciation peut-elle avoir un effet contractionnaire dans une économie très endettée en devises ?',
                        'answers' => [
                            ['answer' => 'La hausse de la dette en monnaie domestique peut détériorer les bilans et réduire l’investissement et le crédit', 'iscorrect' => true],
                            ['answer' => 'Une dépréciation réduit toujours les charges de dette étrangère', 'iscorrect' => false],
                            ['answer' => 'Les bilans ne dépendent jamais du taux de change', 'iscorrect' => false],
                            ['answer' => 'Le crédit augmente toujours après une dépréciation', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => Pourquoi les interventions de change peuvent-elles être stérilisées ?',
                        'answers' => [
                            ['answer' => 'La banque centrale peut compenser l’effet monétaire de l’intervention afin de limiter son impact sur la masse monétaire', 'iscorrect' => true],
                            ['answer' => 'La stérilisation signifie que les réserves deviennent nulles', 'iscorrect' => false],
                            ['answer' => 'Elle empêche toute intervention sur le marché', 'iscorrect' => false],
                            ['answer' => 'Elle garantit une monnaie fixe pour toujours', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => Pourquoi les contrôles de capitaux peuvent-ils être utilisés dans certaines crises ?',
                        'answers' => [
                            ['answer' => 'Ils peuvent ralentir certaines sorties ou entrées de capitaux et donner davantage de marge de manœuvre à la politique économique', 'iscorrect' => true],
                            ['answer' => 'Ils augmentent toujours la mobilité des capitaux', 'iscorrect' => false],
                            ['answer' => 'Ils garantissent automatiquement la croissance', 'iscorrect' => false],
                            ['answer' => 'Ils suppriment tous les risques de change', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => Pourquoi une politique d’austérité peut-elle améliorer certaines balances extérieures mais avec un coût domestique ?',
                        'answers' => [
                            ['answer' => 'Une baisse de la demande intérieure peut réduire les importations tout en pesant sur la production et l’emploi', 'iscorrect' => true],
                            ['answer' => 'L’austérité augmente toujours simultanément la consommation et les importations', 'iscorrect' => false],
                            ['answer' => 'La demande intérieure n’a aucun lien avec les importations', 'iscorrect' => false],
                            ['answer' => 'L’emploi augmente nécessairement sous austérité', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => Pourquoi les programmes d’ajustement externe doivent-ils tenir compte de la composition des secteurs exportateurs ?',
                        'answers' => [
                            ['answer' => 'La capacité à générer durablement des devises dépend des secteurs, de leur productivité et de leur élasticité à la demande mondiale', 'iscorrect' => true],
                            ['answer' => 'Toutes les exportations réagissent exactement de la même façon', 'iscorrect' => false],
                            ['answer' => 'La structure productive n’a aucun effet sur les revenus extérieurs', 'iscorrect' => false],
                            ['answer' => 'Les secteurs exportateurs sont toujours substituables instantanément', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Development, Trade and Global Distribution',
                'questions' => [
                    [
                        'question' => Pourquoi la spécialisation dans les matières premières peut-elle limiter certains gains de long terme du commerce ?',
                        'answers' => [
                            ['answer' => 'Elle peut exposer l’économie à une forte volatilité des prix et limiter la diversification des capacités productives dans certains contextes', 'iscorrect' => true],
                            ['answer' => 'Les matières premières sont toujours plus stables que les biens manufacturés', 'iscorrect' => false],
                            ['answer' => 'La spécialisation en ressources garantit toujours une croissance rapide', 'iscorrect' => false],
                            ['answer' => 'Les matières premières n’ont aucun risque de prix', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => Pourquoi les exportations manufacturières peuvent-elles favoriser l’apprentissage par la pratique ?',
                        'answers' => [
                            ['answer' => 'La production destinée à des marchés exigeants peut encourager l’amélioration des procédés, de la qualité et des compétences', 'iscorrect' => true],
                            ['answer' => 'L’exposition internationale réduit toujours les compétences', 'iscorrect' => false],
                            ['answer' => 'Les entreprises exportatrices n’apprennent jamais', 'iscorrect' => false],
                            ['answer' => 'Les marchés étrangers n’imposent aucune exigence de qualité', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => Pourquoi l’accès aux marchés internationaux peut-il créer des économies d’échelle dynamiques ?',
                        'answers' => [
                            ['answer' => 'Un marché plus vaste peut soutenir davantage d’investissement, d’innovation et d’accumulation de connaissances', 'iscorrect' => true],
                            ['answer' => 'Les marchés plus vastes réduisent toujours l’investissement', 'iscorrect' => false],
                            ['answer' => 'Les économies d’échelle n’ont aucune dimension dynamique', 'iscorrect' => false],
                            ['answer' => 'L’innovation est indépendante de la taille du marché dans tous les cas', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => Pourquoi les infrastructures logistiques sont-elles particulièrement importantes pour les économies exportatrices ?',
                        'answers' => [
                            ['answer' => 'Elles influencent le coût, la fiabilité et la rapidité des échanges internationaux', 'iscorrect' => true],
                            ['answer' => 'Elles affectent uniquement la consommation locale', 'iscorrect' => false],
                            ['answer' => 'Elles remplacent les compétences professionnelles', 'iscorrect' => false],
                            ['answer' => 'Elles n’ont aucun effet sur la compétitivité', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => Pourquoi la qualité des institutions peut-elle influencer le bénéfice du commerce ?',
                        'answers' => [
                            ['answer' => Des institutions fiables peuvent réduire l’incertitude, faciliter les contrats et améliorer l’investissement lié au commerce', 'iscorrect' => true],
                            ['answer' => 'Les institutions n’affectent jamais les coûts de transaction', 'iscorrect' => false],
                            ['answer' => 'Les contrats internationaux sont toujours sans risque', 'iscorrect' => false],
                            ['answer' => 'La gouvernance est indépendante du commerce dans tous les cas', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => Pourquoi le commerce peut-il avoir des effets différents selon le niveau de qualification des travailleurs ?',
                        'answers' => [
                            ['answer' => 'La spécialisation internationale peut modifier la demande relative de compétences selon les secteurs en expansion et en contraction', 'iscorrect' => true],
                            ['answer' => 'Toutes les qualifications bénéficient nécessairement de la même manière', 'iscorrect' => false],
                            ['answer' => 'Le commerce ne modifie jamais la demande de facteurs', 'iscorrect' => false],
                            ['answer' => 'Les compétences sont inutiles dans les secteurs exportateurs', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => Pourquoi les politiques d’éducation et de formation peuvent-elles compléter l’ouverture commerciale ?',
                        'answers' => [
                            ['answer' => 'Elles facilitent l’ajustement des travailleurs vers les secteurs bénéficiant de nouvelles opportunités internationales', 'iscorrect' => true],
                            ['answer' => 'Elles empêchent nécessairement la spécialisation', 'iscorrect' => false],
                            ['answer' => 'Elles réduisent toujours la mobilité professionnelle', 'iscorrect' => false],
                            ['answer' => 'Elles rendent les échanges inutiles', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => Pourquoi la diversification géographique des exportations peut-elle améliorer la résilience ?',
                        'answers' => [
                            ['answer' => 'Elle réduit la dépendance envers un seul marché étranger et peut répartir certains risques de demande', 'iscorrect' => true],
                            ['answer' => 'Elle supprime tous les chocs mondiaux', 'iscorrect' => false],
                            ['answer' => 'Elle oblige les entreprises à abandonner toute spécialisation', 'iscorrect' => false],
                            ['answer' => 'Elle augmente toujours la dépendance à un seul partenaire', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => Pourquoi la dépendance aux exportations de ressources naturelles peut-elle influencer la politique budgétaire ?',
                        'answers' => [
                            ['answer' => 'Les recettes publiques peuvent devenir sensibles aux cycles des prix mondiaux des ressources', 'iscorrect' => true],
                            ['answer' => 'Les recettes liées aux ressources sont toujours fixes', 'iscorrect' => false],
                            ['answer' => 'Le budget public n’a aucun lien avec les exportations', 'iscorrect' => false],
                            ['answer' => 'Les prix mondiaux n’affectent jamais les recettes fiscales', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => Pourquoi les gains du commerce peuvent-ils nécessiter une politique redistributive ?',
                        'answers' => [
                            ['answer' => 'Les gains globaux peuvent être diffus tandis que les pertes d’ajustement sont concentrées sur certains ménages ou secteurs', 'iscorrect' => true],
                            ['answer' => 'Le commerce garantit toujours une répartition identique des revenus', 'iscorrect' => false],
                            ['answer' => 'Les travailleurs ne subissent jamais de coûts d’ajustement', 'iscorrect' => false],
                            ['answer' => 'Les politiques redistributives sont incompatibles avec l’ouverture', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Professional Applications of International Economics',
                'questions' => [
                    [
                        'question' => Pourquoi une entreprise multinationale analyse-t-elle simultanément le taux de change, les tarifs et les coûts logistiques avant de localiser une activité ?',
                        'answers' => [
                            ['answer' => 'Ces facteurs déterminent ensemble le coût effectif de production, d’importation et de distribution entre marchés', 'iscorrect' => true],
                            ['answer' => 'Seul le salaire domestique importe pour une décision de localisation', 'iscorrect' => false],
                            ['answer' => 'Les tarifs n’affectent jamais les chaînes de valeur', 'iscorrect' => false],
                            ['answer' => 'Le taux de change est indépendant de toute décision commerciale', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => Pourquoi une entreprise exportatrice peut-elle préférer une chaîne d’approvisionnement plus coûteuse mais plus diversifiée ?',
                        'answers' => [
                            ['answer' => 'Elle peut réduire le risque de rupture et améliorer la résilience face aux chocs géopolitiques ou logistiques', 'iscorrect' => true],
                            ['answer' => 'La diversification augmente toujours le risque opérationnel', 'iscorrect' => false],
                            ['answer' => 'Les coûts ne jouent aucun rôle dans la chaîne de valeur', 'iscorrect' => false],
                            ['answer' => 'Une chaîne diversifiée interdit les économies d’échelle', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => Pourquoi un décideur public doit-il analyser l’incidence d’un tarif au-delà du secteur protégé ?',
                        'answers' => [
                            ['answer' => 'Les intrants, consommateurs, exportateurs, recettes publiques et partenaires étrangers peuvent tous être affectés', 'iscorrect' => true],
                            ['answer' => 'Les autres secteurs ne réagissent jamais', 'iscorrect' => false],
                            ['answer' => 'Un tarif touche uniquement les importateurs', 'iscorrect' => false],
                            ['answer' => 'Le reste de l’économie reste parfaitement inchangé', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => Pourquoi l’effet d’une dépréciation sur la compétitivité doit-il être évalué en termes réels ?',
                        'answers' => [
                            ['answer' => 'Parce que l’inflation domestique et étrangère peut modifier le gain de compétitivité apparent lié au taux nominal', 'iscorrect' => true],
                            ['answer' => 'Parce que le taux nominal suffit toujours à lui seul', 'iscorrect' => false],
                            ['answer' => 'Parce que les niveaux de prix sont sans importance', 'iscorrect' => false],
                            ['answer' => 'Parce que le taux réel ne dépend jamais des prix', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => Pourquoi une amélioration de la balance commerciale peut-elle coexister avec une situation macroéconomique difficile ?',
                        'answers' => [
                            ['answer' => 'La baisse des importations peut provenir d’une faiblesse de la demande intérieure plutôt que d’une amélioration durable de la compétitivité', 'iscorrect' => true],
                            ['answer' => 'Une amélioration commerciale garantit toujours une forte croissance', 'iscorrect' => false],
                            ['answer' => 'Les importations ne dépendent jamais de l’activité intérieure', 'iscorrect' => false],
                            ['answer' => 'Le commerce détermine directement tout le PIB', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => Pourquoi l’analyse des élasticités est-elle importante pour les politiques commerciales et de change ?',
                        'answers' => [
                            ['answer' => 'Les réactions quantitatives des exportations et importations aux prix déterminent une partie importante des effets des mesures', 'iscorrect' => true],
                            ['answer' => 'Les élasticités sont toujours égales à zéro', 'iscorrect' => false],
                            ['answer' => 'Les volumes ne réagissent jamais aux prix', 'iscorrect' => false],
                            ['answer' => 'Les élasticités ne concernent que les marchés domestiques', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => Pourquoi une analyse professionnelle des flux commerciaux doit-elle considérer les données en valeur ajoutée ?',
                        'answers' => [
                            ['answer' => 'Les exportations brutes peuvent compter plusieurs fois des composants importés au cours d’une chaîne de production internationale', 'iscorrect' => true],
                            ['answer' => 'La valeur ajoutée est toujours identique à la valeur brute', 'iscorrect' => false],
                            ['answer' => 'Les intrants importés ne sont jamais réexportés', 'iscorrect' => false],
                            ['answer' => 'Les chaînes de valeur ne modifient jamais les statistiques commerciales', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => Pourquoi les données commerciales seules peuvent-elles être insuffisantes pour évaluer la dépendance économique d’un pays ?',
                        'answers' => [
                            ['answer' => 'Il faut aussi considérer les services, revenus, investissements, dette et autres flux internationaux', 'iscorrect' => true],
                            ['answer' => 'Le commerce des biens représente toujours toute l’économie extérieure', 'iscorrect' => false],
                            ['answer' => 'Les flux financiers n’ont aucun intérêt', 'iscorrect' => false],
                            ['answer' => 'Les services sont toujours négligeables', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => Pourquoi les scénarios de politique économique doivent-ils intégrer les réactions des partenaires commerciaux ?',
                        'answers' => [
                            ['answer' => 'Les mesures prises par un pays peuvent entraîner des représailles, des réallocations de commerce ou des changements de prix internationaux', 'iscorrect' => true],
                            ['answer' => 'Les partenaires n’ajustent jamais leurs politiques', 'iscorrect' => false],
                            ['answer' => 'Les économies sont complètement indépendantes', 'iscorrect' => false],
                            ['answer' => 'Une politique commerciale ne produit jamais d’effet extérieur', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => Quel principe résume le mieux une analyse professionnelle de l’économie internationale ?',
                        'answers' => [
                            ['answer' => 'Évaluer simultanément les mécanismes commerciaux, financiers, institutionnels, distributifs et macroéconomiques ainsi que les réactions internationales', 'iscorrect' => true],
                            ['answer' => 'Choisir uniquement la politique qui maximise les exportations', 'iscorrect' => false],
                            ['answer' => 'Interpréter tout excédent commercial comme une preuve de bonne performance', 'iscorrect' => false],
                            ['answer' => 'Analyser les taux de change sans tenir compte des flux commerciaux', 'iscorrect' => false],
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

                // Mélange des réponses : la bonne réponse n'est pas systématiquement en première position.
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
