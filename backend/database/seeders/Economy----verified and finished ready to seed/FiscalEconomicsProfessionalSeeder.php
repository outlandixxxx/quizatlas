```php
<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Major;
use App\Models\Subject;
use App\Models\Quiz;
use App\Models\Question;
use App\Models\Answer;

class FiscalEconomicsProfessionalSeeder extends Seeder
{
    public function run(): void
    {
        $major = Major::where('slug', 'economy')->firstOrFail();

        $subject = Subject::where('major_id', $major->id)
            ->where('slug', 'fiscal-economics')
            ->firstOrFail();

        $quizzes = [
            [
                'title' => 'Politique budgétaire avancée et stabilisation',
                'questions' => [
                    [
                        'question' => 'Pourquoi le multiplicateur budgétaire peut-il dépendre du régime monétaire ?',
                        'answers' => [
                            ['answer' => 'Une réaction différente du taux d\\'intérêt à la relance modifie l\\'éviction de la demande privée et donc l\\'effet final sur la production', 'iscorrect' => true],
                            ['answer' => 'Le régime monétaire n\\'affecte jamais les taux d\\'intérêt', 'iscorrect' => false],
                            ['answer' => 'La politique budgétaire devient automatiquement neutre sous tous les régimes', 'iscorrect' => false],
                            ['answer' => 'Les ménages cessent toute consommation après une relance', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une politique budgétaire peut-elle être plus puissante lorsque la politique monétaire ne réagit pas fortement à la demande ?',
                        'answers' => [
                            ['answer' => 'Une moindre hausse des taux limite l\\'éviction de l\\'investissement et de certaines dépenses privées', 'iscorrect' => true],
                            ['answer' => 'Une politique monétaire passive réduit toujours la consommation', 'iscorrect' => false],
                            ['answer' => 'Les taux augmentent nécessairement davantage', 'iscorrect' => false],
                            ['answer' => 'L\\'investissement devient indépendant du financement', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les multiplicateurs sont-ils généralement plus faibles dans une économie très ouverte ?',
                        'answers' => [
                            ['answer' => 'Une partie de la demande supplémentaire se porte sur des biens et services importés', 'iscorrect' => true],
                            ['answer' => 'Les importations deviennent toujours nulles', 'iscorrect' => false],
                            ['answer' => 'Les économies ouvertes n\\'ont pas de demande intérieure', 'iscorrect' => false],
                            ['answer' => 'Les exportations diminuent automatiquement à zéro', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la taille du multiplicateur peut-elle varier avec la position dans le cycle ?',
                        'answers' => [
                            ['answer' => Des capacités inutilisées peuvent permettre une hausse plus importante de la production réelle avant que les contraintes de prix deviennent dominantes', 'iscorrect' => true],
                            ['answer' => 'Les capacités inutilisées empêchent toute hausse de la production', 'iscorrect' => false],
                            ['answer' => 'Les multiplicateurs sont constants par définition', 'iscorrect' => false],
                            ['answer' => 'Une économie en récession fonctionne toujours à pleine capacité', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une relance budgétaire peut-elle avoir un effet faible lorsque les ménages sont fortement endettés mais pessimistes ?',
                        'answers' => [
                            ['answer' => 'Une partie du revenu supplémentaire peut être consacrée au désendettement plutôt qu\\'à la consommation', 'iscorrect' => true],
                            ['answer' => 'Les ménages endettés consomment toujours la totalité de tout revenu supplémentaire', 'iscorrect' => false],
                            ['answer' => 'Le désendettement augmente nécessairement la demande courante', 'iscorrect' => false],
                            ['answer' => 'Les anticipations n\\'ont aucun effet sur la consommation', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une relance ciblée vers les ménages à forte propension marginale à consommer peut-elle avoir un multiplicateur relativement élevé ?',
                        'answers' => [
                            ['answer' => 'Une plus grande part du revenu transféré est rapidement dépensée, générant davantage de revenus induits', 'iscorrect' => true],
                            ['answer' => 'Ces ménages épargnent toujours 100 % du transfert', 'iscorrect' => false],
                            ['answer' => 'La propension à consommer est indépendante du revenu et de la liquidité', 'iscorrect' => false],
                            ['answer' => 'Les transferts ne peuvent jamais modifier la demande', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les délais administratifs peuvent-ils rendre une politique discrétionnaire procyclique ?',
                        'answers' => [
                            ['answer' => 'Une mesure conçue pour une récession peut entrer en vigueur lorsque l\\'économie s\\'est déjà redressée', 'iscorrect' => true],
                            ['answer' => 'Les politiques discrétionnaires sont toujours instantanées', 'iscorrect' => false],
                            ['answer' => 'Les récessions durent toujours exactement la même durée', 'iscorrect' => false],
                            ['answer' => 'Les délais n\\'affectent jamais la politique budgétaire', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les stabilisateurs automatiques réduisent-ils généralement le besoin d\\'intervention discrétionnaire ?',
                        'answers' => [
                            ['answer' => 'Ils ajustent automatiquement les recettes et transferts lorsque l\\'activité varie', 'iscorrect' => true],
                            ['answer' => 'Ils remplacent toutes les politiques publiques', 'iscorrect' => false],
                            ['answer' => 'Ils suppriment automatiquement toute récession', 'iscorrect' => false],
                            ['answer' => 'Ils fonctionnent uniquement après une décision parlementaire exceptionnelle', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une politique budgétaire expansionniste peut-elle augmenter les taux souverains ?',
                        'answers' => [
                            ['answer' => 'Une hausse anticipée des besoins de financement et de la demande peut accroître les rendements exigés selon les conditions de marché', 'iscorrect' => true],
                            ['answer' => 'Les déficits réduisent toujours les besoins de financement', 'iscorrect' => false],
                            ['answer' => 'Les obligations publiques ne réagissent jamais à l\\'offre de titres', 'iscorrect' => false],
                            ['answer' => 'Une relance garantit toujours une baisse des taux', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une politique budgétaire efficace doit-elle être calibrée en fonction de l\\'écart de production ?',
                        'answers' => [
                            ['answer' => 'La même impulsion nominale peut avoir des effets très différents selon les capacités inutilisées et les tensions inflationnistes', 'iscorrect' => true],
                            ['answer' => 'L\\'écart de production n\\'a aucun lien avec l\\'inflation', 'iscorrect' => false],
                            ['answer' => 'Toute relance a le même effet quelle que soit la conjoncture', 'iscorrect' => false],
                            ['answer' => 'La production potentielle est toujours nulle', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Fiscalité optimale et comportement des contribuables',
                'questions' => [
                    [
                        'question' => 'Pourquoi l\\'élasticité de l\\'assiette imposable est-elle centrale dans l\\'analyse d\\'un taux fiscal optimal ?',
                        'answers' => [
                            ['answer' => 'Elle mesure la réaction de la base taxable aux changements d\\'incitation et donc une partie du coût marginal de la taxation', 'iscorrect' => true],
                            ['answer' => 'Elle mesure uniquement les recettes publiques observées', 'iscorrect' => false],
                            ['answer' => 'Elle est indépendante des comportements des contribuables', 'iscorrect' => false],
                            ['answer' => 'Elle garantit toujours une hausse des recettes lorsque le taux augmente', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi l\\'offre de travail peut-elle réagir à une variation du taux marginal d\\'imposition ?',
                        'answers' => [
                            ['answer' => 'Le salaire net associé à une heure supplémentaire de travail change, ce qui modifie certaines incitations à travailler', 'iscorrect' => true],
                            ['answer' => 'Le taux marginal n\\'affecte jamais le salaire net', 'iscorrect' => false],
                            ['answer' => 'Les individus ne tiennent jamais compte du revenu net', 'iscorrect' => false],
                            ['answer' => 'L\\'offre de travail est toujours parfaitement fixe', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi l\\'élasticité du revenu imposable ne correspond-elle pas uniquement à une modification de l\\'offre de travail ?',
                        'answers' => [
                            ['answer' => 'Elle peut inclure des changements d\\'effort, de rémunération, de forme juridique, de calendrier, d\\'évasion ou d\\'optimisation', 'iscorrect' => true],
                            ['answer' => 'Elle ne reflète que les variations du chômage', 'iscorrect' => false],
                            ['answer' => 'Elle exclut tout comportement fiscal', 'iscorrect' => false],
                            ['answer' => 'Elle est déterminée uniquement par les dépenses publiques', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un taux marginal élevé peut-il réduire une partie de la base taxable sans nécessairement réduire le revenu avant impôt dans la même proportion ?',
                        'answers' => [
                            ['answer' => Les contribuables peuvent réorganiser leurs activités ou leur rémunération pour réduire la base imposable', 'iscorrect' => true],
                            ['answer' => 'La base taxable ne peut jamais être modifiée', 'iscorrect' => false],
                            ['answer' => 'Les contribuables ne répondent jamais à la fiscalité', 'iscorrect' => false],
                            ['answer' => 'Un taux élevé augmente toujours la base taxable', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une politique fiscale optimale doit-elle distinguer les marges intensives et extensives ?',
                        'answers' => [
                            ['answer' => 'Une taxe peut modifier soit l\\'intensité d\\'une activité existante, soit la décision même de participer à cette activité', 'iscorrect' => true],
                            ['answer' => 'Les deux marges désignent exactement le même comportement', 'iscorrect' => false],
                            ['answer' => 'La marge extensive ne concerne jamais le marché du travail', 'iscorrect' => false],
                            ['answer' => 'La marge intensive concerne uniquement les recettes publiques', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la taxation optimale des biens peut-elle dépendre de leurs élasticités de demande ?',
                        'answers' => [
                            ['answer' => Une taxe plus élevée sur une base moins élastique peut générer des recettes avec une distorsion quantitative relativement plus faible, sous les hypothèses du modèle', 'iscorrect' => true],
                            ['answer' => 'Les élasticités n\\'ont aucun rôle dans la fiscalité optimale', 'iscorrect' => false],
                            ['answer' => 'Les biens très élastiques doivent toujours être taxés davantage', 'iscorrect' => false],
                            ['answer' => 'La demande est toujours parfaitement inélastique', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi cette approche doit-elle être modifiée lorsqu\\'un bien génère une externalité négative ?',
                        'answers' => [
                            ['answer' => 'La taxe peut alors corriger une défaillance de marché en faisant entrer le coût externe dans la décision privée', 'iscorrect' => true],
                            ['answer' => 'Une externalité négative rend toute taxe inefficace', 'iscorrect' => false],
                            ['answer' => 'Les externalités ne modifient jamais le bien-être social', 'iscorrect' => false],
                            ['answer' => 'Un bien polluant doit toujours être subventionné', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la fiscalité du capital pose-t-elle une question d\\'arbitrage intertemporel ?',
                        'answers' => [
                            ['answer' => 'Elle peut affecter le rendement de l\\'épargne aujourd\\'hui et donc l\\'accumulation de capital et la consommation future', 'iscorrect' => true],
                            ['answer' => 'Le capital n\\'a aucun effet sur la consommation future', 'iscorrect' => false],
                            ['answer' => 'La fiscalité du capital concerne uniquement les dépenses publiques courantes', 'iscorrect' => false],
                            ['answer' => 'L\\'épargne est indépendante du rendement après impôt', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les arbitrages entre équité et efficacité sont-ils difficiles à quantifier ?',
                        'answers' => [
                            ['answer' => Ils nécessitent de comparer des coûts d\\'efficacité à des gains distributifs dont la valeur dépend des préférences sociales', 'iscorrect' => true],
                            ['answer' => 'Les gains distributifs sont toujours identiques aux gains de productivité', 'iscorrect' => false],
                            ['answer' => 'Les préférences sociales n\\'ont aucun rôle', 'iscorrect' => false],
                            ['answer' => 'L\\'efficacité et l\\'équité ont toujours la même mesure', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la taxation optimale ne peut-elle pas être déterminée uniquement à partir d\\'un taux maximal ?',
                        'answers' => [
                            ['answer' => 'La structure complète des taux, exonérations, transferts et comportements détermine les effets sur recettes, équité et efficacité', 'iscorrect' => true],
                            ['answer' => 'Le taux maximal résume toujours parfaitement tout le système fiscal', 'iscorrect' => false],
                            ['answer' => 'Les exonérations sont sans effet économique', 'iscorrect' => false],
                            ['answer' => 'Les transferts ne sont jamais liés à la fiscalité', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Incidence fiscale en équilibre général',
                'questions' => [
                    [
                        'question' => 'Pourquoi l\\'incidence d\\'un impôt peut-elle se propager au-delà du marché directement taxé ?',
                        'answers' => [
                            ['answer' => 'Les changements de prix, salaires, rendements et quantités peuvent modifier l\\'équilibre d\\'autres marchés', 'iscorrect' => true],
                            ['answer' => 'Les marchés sont toujours totalement indépendants', 'iscorrect' => false],
                            ['answer' => 'Un impôt affecte uniquement la personne juridiquement responsable', 'iscorrect' => false],
                            ['answer' => 'Les facteurs de production ne changent jamais de rémunération', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une taxe sur le capital peut-elle affecter les travailleurs dans un modèle d\\'équilibre général ?',
                        'answers' => [
                            ['answer' => Une réduction du capital utilisé peut modifier la productivité marginale du travail et donc les salaires', 'iscorrect' => true],
                            ['answer' => 'Le capital et le travail sont toujours totalement indépendants', 'iscorrect' => false],
                            ['answer' => 'Une taxe sur le capital touche uniquement le gouvernement', 'iscorrect' => false],
                            ['answer' => 'Les salaires ne dépendent jamais de la productivité', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la mobilité des facteurs est-elle déterminante pour l\\'incidence fiscale ?',
                        'answers' => [
                            ['answer' => 'Un facteur mobile peut éviter davantage une taxe en se déplaçant vers des activités ou juridictions moins taxées', 'iscorrect' => true],
                            ['answer' => 'La mobilité ne change jamais l\\'incidence', 'iscorrect' => false],
                            ['answer' => 'Les facteurs mobiles sont toujours complètement immobiles', 'iscorrect' => false],
                            ['answer' => 'Une forte mobilité garantit que le gouvernement supporte toute la taxe', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi l\\'incidence d\\'une taxe foncière peut-elle être différente de celle d\\'une taxe temporaire sur les transactions ?',
                        'answers' => [
                            ['answer' => 'Les impôts peuvent être capitalisés différemment dans la valeur des actifs selon leur permanence et les anticipations', 'iscorrect' => true],
                            ['answer' => 'Toutes les taxes immobilières ont exactement la même incidence', 'iscorrect' => false],
                            ['answer' => 'Les anticipations ne jouent aucun rôle dans les actifs', 'iscorrect' => false],
                            ['answer' => 'Les prix immobiliers ne réagissent jamais aux impôts futurs', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une taxe sur une industrie en amont peut-elle affecter les prix dans les industries en aval ?',
                        'answers' => [
                            ['answer' => 'Les intrants plus coûteux augmentent les coûts marginaux des producteurs qui les utilisent', 'iscorrect' => true],
                            ['answer' => 'Les industries en aval n\\'utilisent jamais d\\'intrants', 'iscorrect' => false],
                            ['answer' => 'Les coûts des intrants sont toujours indépendants des taxes', 'iscorrect' => false],
                            ['answer' => 'Les producteurs en aval bénéficient toujours d\\'une taxe en amont', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi l\\'équilibre général est-il particulièrement utile pour analyser une taxe sur le travail ?',
                        'answers' => [
                            ['answer' => 'Il permet d\\'étudier simultanément les effets sur salaires, emploi, profits, prix et allocation sectorielle', 'iscorrect' => true],
                            ['answer' => 'La taxe sur le travail ne modifie jamais d\\'autres marchés', 'iscorrect' => false],
                            ['answer' => 'Les salaires sont totalement indépendants des prix', 'iscorrect' => false],
                            ['answer' => 'L\\'emploi est toujours fixe par définition', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi l\\'incidence fiscale peut-elle varier selon l\\'horizon temporel ?',
                        'answers' => [
                            ['answer' => 'Les quantités de capital, l\\'entrée des entreprises et la mobilité des travailleurs peuvent s\\'ajuster davantage à long terme', 'iscorrect' => true],
                            ['answer' => 'Tous les facteurs sont fixes pour toujours', 'iscorrect' => false],
                            ['answer' => 'Les comportements restent exactement identiques à court et long terme', 'iscorrect' => false],
                            ['answer' => 'L\\'horizon temporel n\\'affecte jamais l\\'incidence', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une taxe internationale sur une base mobile peut-elle nécessiter une coordination entre pays ?',
                        'answers' => [
                            ['answer' => 'Sans coordination, les différences de taux peuvent encourager le déplacement de la base taxable vers les juridictions les moins imposées', 'iscorrect' => true],
                            ['answer' => 'Les différences fiscales ne modifient jamais la localisation', 'iscorrect' => false],
                            ['answer' => 'Les bases mobiles ne réagissent jamais aux taux', 'iscorrect' => false],
                            ['answer' => 'La coordination fiscale supprime toujours toute concurrence', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une taxe peut-elle être progressivement supportée par les propriétaires d\\'un facteur même si elle est initialement prélevée auprès d\\'une entreprise ?',
                        'answers' => [
                            ['answer' => 'Les prix des produits et facteurs peuvent s\\'ajuster jusqu\\'à modifier le rendement économique du facteur concerné', 'iscorrect' => true],
                            ['answer' => 'Les propriétaires de facteurs sont toujours protégés contre les impôts des entreprises', 'iscorrect' => false],
                            ['answer' => 'Les prix relatifs ne changent jamais après un impôt', 'iscorrect' => false],
                            ['answer' => 'L\\'incidence légale détermine toujours définitivement l\\'incidence économique', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les modèles d\\'incidence fiscale doivent-ils parfois intégrer les comportements de localisation ?',
                        'answers' => [
                            ['answer' => 'Les ménages et entreprises peuvent réagir aux différences de fiscalité en changeant de lieu, ce qui modifie les bases taxables et les prix locaux', 'iscorrect' => true],
                            ['answer' => 'La localisation est toujours indépendante de la fiscalité', 'iscorrect' => false],
                            ['answer' => 'Les entreprises ne peuvent jamais déplacer leurs activités', 'iscorrect' => false],
                            ['answer' => 'Les ménages restent toujours dans le même lieu malgré toute différence fiscale', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Dynamique de la dette et soutenabilité intertemporelle',
                'questions' => [
                    [
                        'question' => 'Pourquoi la relation entre taux d\\'intérêt réel et croissance économique est-elle fondamentale pour la dette publique ?',
                        'answers' => [
                            ['answer' => 'Elle détermine la vitesse à laquelle la charge d\\'intérêt peut faire croître le ratio dette/PIB relativement à l\\'activité économique', 'iscorrect' => true],
                            ['answer' => 'Elle concerne uniquement la dette privée', 'iscorrect' => false],
                            ['answer' => 'Elle ne change jamais la trajectoire de dette', 'iscorrect' => false],
                            ['answer' => 'Elle mesure uniquement le taux de change', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un taux d\\'intérêt réel supérieur à la croissance peut-il exiger un effort primaire plus important ?',
                        'answers' => [
                            ['answer' => 'La charge d\\'intérêt augmente relativement plus vite que la capacité de financement issue de la croissance économique', 'iscorrect' => true],
                            ['answer' => 'Lorsque r > g, les intérêts deviennent nécessairement négatifs', 'iscorrect' => false],
                            ['answer' => 'La croissance réduit toujours automatiquement le ratio dette/PIB', 'iscorrect' => false],
                            ['answer' => 'Le solde primaire n\\'a aucun effet sur la dette', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un déficit primaire peut-il être compatible avec une stabilisation de la dette dans certains cas ?',
                        'answers' => [
                            ['answer' => 'Si la croissance nominale ou réelle est suffisamment favorable par rapport au coût moyen de la dette, la dynamique du ratio peut rester maîtrisée', 'iscorrect' => true],
                            ['answer' => 'Un déficit primaire réduit toujours le stock de dette', 'iscorrect' => false],
                            ['answer' => 'La croissance n\\'a aucun rôle dans le ratio dette/PIB', 'iscorrect' => false],
                            ['answer' => 'Les intérêts publics sont toujours nuls', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi l\\'analyse de soutenabilité doit-elle intégrer un scénario de stress ?',
                        'answers' => [
                            ['answer' => 'Une combinaison défavorable de taux élevés, croissance faible et recettes insuffisantes peut modifier fortement la trajectoire de dette', 'iscorrect' => true],
                            ['answer' => 'Les chocs macroéconomiques sont toujours négligeables', 'iscorrect' => false],
                            ['answer' => 'Un scénario central garantit toujours la soutenabilité', 'iscorrect' => false],
                            ['answer' => 'Les taux et la croissance ne peuvent jamais changer simultanément', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la composition de la dette influence-t-elle le risque de refinancement ?',
                        'answers' => [
                            ['answer' => 'La maturité, le taux, la devise et les détenteurs déterminent l\\'exposition aux conditions de marché lors du renouvellement', 'iscorrect' => true],
                            ['answer' => 'Toutes les dettes ont le même risque de refinancement', 'iscorrect' => false],
                            ['answer' => 'La maturité ne joue aucun rôle', 'iscorrect' => false],
                            ['answer' => 'La devise d\\'émission est sans importance', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les passifs conditionnels de l\\'État doivent-ils être surveillés ?',
                        'answers' => [
                            ['answer' => 'Des garanties, recapitalisations ou engagements éventuels peuvent transformer un risque latent en charge budgétaire réelle', 'iscorrect' => true],
                            ['answer' => 'Les garanties publiques n\\'ont jamais d\\'effet budgétaire', 'iscorrect' => false],
                            ['answer' => 'Les engagements contingents sont toujours sans valeur', 'iscorrect' => false],
                            ['answer' => 'Ils sont toujours déjà inclus intégralement dans la dette observée', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la crédibilité d\\'une stratégie budgétaire peut-elle réduire le coût de financement ?',
                        'answers' => [
                            ['answer' => 'Une trajectoire jugée crédible peut réduire la prime de risque demandée par les investisseurs', 'iscorrect' => true],
                            ['answer' => 'La crédibilité augmente toujours le risque souverain', 'iscorrect' => false],
                            ['answer' => 'Les investisseurs ignorent totalement les trajectoires futures', 'iscorrect' => false],
                            ['answer' => 'Les taux souverains sont fixés uniquement par la banque centrale', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une consolidation budgétaire peut-elle améliorer la confiance mais réduire la demande à court terme ?',
                        'answers' => [
                            ['answer' => 'Elle peut améliorer les anticipations de soutenabilité tout en réduisant simultanément les dépenses ou revenus disponibles actuels', 'iscorrect' => true],
                            ['answer' => 'Une consolidation augmente toujours la demande immédiatement', 'iscorrect' => false],
                            ['answer' => 'Les anticipations et la demande sont toujours indépendantes', 'iscorrect' => false],
                            ['answer' => 'Une meilleure crédibilité élimine tout effet de contraction', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la dette publique nette peut-elle être différente de la dette brute ?',
                        'answers' => [
                            ['answer' => 'La position nette tient compte de certains actifs financiers publics venant compenser une partie des passifs', 'iscorrect' => true],
                            ['answer' => 'La dette nette est toujours supérieure à la dette brute', 'iscorrect' => false],
                            ['answer' => 'Les actifs publics ne sont jamais pris en compte dans aucune mesure', 'iscorrect' => false],
                            ['answer' => 'Les deux concepts sont toujours identiques', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la contrainte budgétaire intertemporelle est-elle importante ?',
                        'answers' => [
                            ['answer' => 'Elle impose qu\\'à long terme les engagements publics soient compatibles avec les ressources fiscales et économiques disponibles', 'iscorrect' => true],
                            ['answer' => 'Elle permet un financement illimité sans recettes futures', 'iscorrect' => false],
                            ['answer' => 'Elle concerne uniquement les dépenses locales', 'iscorrect' => false],
                            ['answer' => 'Elle supprime toute possibilité d\\'emprunt public', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Règles budgétaires, institutions et crédibilité',
                'questions' => [
                    [
                        'question' => 'Pourquoi une règle budgétaire peut-elle améliorer la crédibilité sans garantir automatiquement de bons résultats économiques ?',
                        'answers' => [
                            ['answer' => 'Une règle fournit un cadre mais son efficacité dépend de sa conception, de son application, des chocs et de la qualité des institutions', 'iscorrect' => true],
                            ['answer' => 'Une règle garantit toujours la croissance maximale', 'iscorrect' => false],
                            ['answer' => 'Les chocs économiques n\\'affectent jamais les résultats', 'iscorrect' => false],
                            ['answer' => 'Toutes les règles fonctionnent identiquement', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une clause d\\'exception crédible doit-elle être clairement définie ?',
                        'answers' => [
                            ['answer' => 'Des critères précis réduisent le risque que les autorités utilisent l\\'exception comme moyen permanent de contourner la règle', 'iscorrect' => true],
                            ['answer' => 'Une clause vague renforce toujours la discipline', 'iscorrect' => false],
                            ['answer' => 'Les exceptions n\\'ont jamais d\\'effet sur les anticipations', 'iscorrect' => false],
                            ['answer' => 'Toutes les crises peuvent être prévues à l\\'avance avec précision', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une règle de dépense peut-elle être utile même lorsque les recettes fiscales sont volatiles ?',
                        'answers' => [
                            ['answer' => 'Elle peut limiter la croissance procyclique des dépenses lorsque les recettes augmentent temporairement', 'iscorrect' => true],
                            ['answer' => 'Elle garantit toujours un déficit nul', 'iscorrect' => false],
                            ['answer' => 'Elle empêche automatiquement toute récession', 'iscorrect' => false],
                            ['answer' => 'Elle rend les recettes complètement fixes', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les institutions budgétaires indépendantes sont-elles utiles ?',
                        'answers' => [
                            ['answer' => 'Elles peuvent améliorer la transparence, évaluer les prévisions et signaler les risques budgétaires sans décider directement de la politique', 'iscorrect' => true],
                            ['answer' => 'Elles remplacent les gouvernements élus', 'iscorrect' => false],
                            ['answer' => 'Elles fixent directement les taux d\\'imposition', 'iscorrect' => false],
                            ['answer' => 'Elles garantissent l\\'absence de tout déficit', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les prévisions budgétaires peuvent-elles être biaisées politiquement ?',
                        'answers' => [
                            ['answer' => 'Les hypothèses de croissance, recettes ou coûts peuvent influencer la présentation de la trajectoire budgétaire', 'iscorrect' => true],
                            ['answer' => 'Les prévisions sont toujours indépendantes de leurs hypothèses', 'iscorrect' => false],
                            ['answer' => 'Les décideurs ne disposent jamais d\\'incitations politiques', 'iscorrect' => false],
                            ['answer' => 'Les prévisions ne dépendent d\\'aucune donnée', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les règles de déficit nominal peuvent-elles créer des ajustements procycliques ?',
                        'answers' => [
                            ['answer' => 'Une baisse cyclique des recettes peut obliger à couper les dépenses précisément lorsque l\\'activité est faible', 'iscorrect' => true],
                            ['answer' => 'Les recettes fiscales augmentent toujours pendant les récessions', 'iscorrect' => false],
                            ['answer' => 'Les règles nominales tiennent automatiquement compte du cycle', 'iscorrect' => false],
                            ['answer' => 'Les dépenses publiques sont indépendantes du cycle', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une cible de dette peut-elle être complétée par une trajectoire d\\'ajustement ?',
                        'answers' => [
                            ['answer' => 'La trajectoire indique comment atteindre la cible tout en tenant compte des conditions économiques et du rythme d\\'ajustement', 'iscorrect' => true],
                            ['answer' => 'Une cible suffit toujours à déterminer le rythme optimal', 'iscorrect' => false],
                            ['answer' => 'L\\'ajustement doit nécessairement être instantané', 'iscorrect' => false],
                            ['answer' => 'La trajectoire n\\'a aucun intérêt pour les investisseurs', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la transparence sur les hypothèses macroéconomiques améliore-t-elle l\\'évaluation budgétaire ?',
                        'answers' => [
                            ['answer' => 'Elle permet de vérifier la cohérence entre hypothèses de croissance, inflation, taux et recettes', 'iscorrect' => true],
                            ['answer' => 'Les hypothèses n\\'ont aucun effet sur les résultats budgétaires', 'iscorrect' => false],
                            ['answer' => 'La transparence empêche toute révision', 'iscorrect' => false],
                            ['answer' => 'Les recettes sont indépendantes de la croissance', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les règles budgétaires doivent-elles éviter de créer des incitations à déplacer les dépenses dans le temps ?',
                        'answers' => [
                            ['answer' => 'Une règle mal conçue peut encourager des pratiques comptables ou calendaires qui améliorent artificiellement l\\'indicateur sans améliorer les finances publiques réelles', 'iscorrect' => true],
                            ['answer' => 'Les gouvernements ne peuvent jamais modifier le calendrier des dépenses', 'iscorrect' => false],
                            ['answer' => 'Les indicateurs budgétaires sont toujours impossibles à manipuler', 'iscorrect' => false],
                            ['answer' => 'Le calendrier n\\'a aucun effet sur la présentation budgétaire', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la simplicité peut-elle être une qualité importante d\\'une règle budgétaire ?',
                        'answers' => [
                            ['answer' => 'Une règle plus simple est généralement plus transparente, plus facile à surveiller et plus difficile à interpréter de manière opportuniste', 'iscorrect' => true],
                            ['answer' => 'La complexité garantit toujours une meilleure discipline', 'iscorrect' => false],
                            ['answer' => 'Une règle simple ne peut jamais être crédible', 'iscorrect' => false],
                            ['answer' => 'La transparence augmente toujours avec le nombre de paramètres', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Fiscalité internationale et concurrence fiscale',
                'questions' => [
                    [
                        'question' => 'Pourquoi la mobilité internationale du capital complique-t-elle la taxation du capital ?',
                        'answers' => [
                            ['answer' => 'Les investisseurs peuvent déplacer certains actifs ou bénéfices vers des juridictions offrant une fiscalité plus favorable', 'iscorrect' => true],
                            ['answer' => 'Le capital international est toujours parfaitement immobile', 'iscorrect' => false],
                            ['answer' => 'Les différences de fiscalité n\\'affectent jamais les rendements', 'iscorrect' => false],
                            ['answer' => 'Les entreprises ne tiennent jamais compte de la fiscalité internationale', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les prix de transfert peuvent-ils être importants pour les administrations fiscales ?',
                        'answers' => [
                            ['answer' => 'Les groupes multinationaux utilisent des transactions intragroupe qui peuvent influencer la répartition des bénéfices entre juridictions', 'iscorrect' => true],
                            ['answer' => 'Les prix de transfert concernent uniquement les ménages', 'iscorrect' => false],
                            ['answer' => 'Les transactions intragroupe n\\'ont aucun effet sur les bénéfices fiscaux', 'iscorrect' => false],
                            ['answer' => 'Les groupes internationaux ne réalisent jamais de transactions internes', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la concurrence fiscale peut-elle exercer une pression à la baisse sur certains taux d\\'imposition ?',
                        'answers' => [
                            ['answer' => 'Une juridiction peut chercher à attirer ou retenir des bases mobiles en offrant une fiscalité relativement plus attractive', 'iscorrect' => true],
                            ['answer' => 'Les bases mobiles restent toujours indépendantes des taux', 'iscorrect' => false],
                            ['answer' => 'Tous les pays fixent nécessairement le même taux', 'iscorrect' => false],
                            ['answer' => 'La concurrence fiscale augmente toujours les taux', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la coordination fiscale internationale peut-elle réduire certains arbitrages ?',
                        'answers' => [
                            ['answer' => 'Des règles communes peuvent réduire les écarts artificiels qui encouragent le déplacement de certaines bases imposables', 'iscorrect' => true],
                            ['answer' => 'La coordination supprime automatiquement toute concurrence économique', 'iscorrect' => false],
                            ['answer' => 'Les entreprises deviennent immobiles après coordination', 'iscorrect' => false],
                            ['answer' => 'Les systèmes fiscaux doivent nécessairement devenir totalement identiques', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la taxation des multinationales est-elle plus complexe que celle d\\'une petite entreprise strictement domestique ?',
                        'answers' => [
                            ['answer' => 'Les bénéfices, actifs incorporels et transactions peuvent être répartis entre plusieurs juridictions', 'iscorrect' => true],
                            ['answer' => 'Les multinationales ne paient jamais d\\'impôt', 'iscorrect' => false],
                            ['answer' => 'Une entreprise internationale ne dispose jamais d\\'actifs incorporels', 'iscorrect' => false],
                            ['answer' => 'Les transactions internationales ne peuvent jamais être évaluées', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les échanges automatiques d\\'informations fiscales peuvent-ils améliorer la collecte ?',
                        'answers' => [
                            ['answer' => 'Ils peuvent réduire l\\'asymétrie d\\'information concernant certains revenus et actifs détenus à l\\'étranger', 'iscorrect' => true],
                            ['answer' => 'Ils rendent toute fraude impossible', 'iscorrect' => false],
                            ['answer' => 'Ils ne concernent que les taxes à la consommation', 'iscorrect' => false],
                            ['answer' => 'Ils suppriment toute mobilité financière', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une taxe minimale internationale peut-elle modifier les incitations à déplacer les bénéfices ?',
                        'answers' => [
                            ['answer' => 'Elle réduit l\\'avantage fiscal de certaines juridictions à très faible taux pour les bénéfices concernés', 'iscorrect' => true],
                            ['answer' => 'Elle augmente toujours l\\'écart entre taux internationaux', 'iscorrect' => false],
                            ['answer' => 'Elle empêche toute activité internationale', 'iscorrect' => false],
                            ['answer' => 'Elle ne modifie jamais le rendement après impôt', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les paradis fiscaux peuvent-ils compliquer la mesure des bases taxables ?',
                        'answers' => [
                            ['answer' => 'Des revenus ou actifs peuvent être localisés dans des juridictions où l\\'information fiscale est moins accessible ou la fiscalité plus faible', 'iscorrect' => true],
                            ['answer' => 'Les paradis fiscaux augmentent toujours la transparence', 'iscorrect' => false],
                            ['answer' => 'Tous les actifs étrangers sont automatiquement déclarés', 'iscorrect' => false],
                            ['answer' => 'Les bases fiscales ne peuvent jamais franchir les frontières', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une taxe sur le capital doit-elle être évaluée en tenant compte des effets sur l\\'investissement ?',
                        'answers' => [
                            ['answer' => 'Une charge fiscale plus élevée peut réduire le rendement après impôt et donc certains investissements domestiques', 'iscorrect' => true],
                            ['answer' => 'Le rendement après impôt n\\'affecte jamais l\\'investissement', 'iscorrect' => false],
                            ['answer' => 'Les entreprises investissent toujours indépendamment des rendements', 'iscorrect' => false],
                            ['answer' => 'Une taxe sur le capital augmente toujours l\\'accumulation', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les gouvernements peuvent-ils utiliser plusieurs bases fiscales malgré la mobilité internationale du capital ?',
                        'answers' => [
                            ['answer' => 'Les bases moins mobiles comme certains biens immobiliers, consommations ou revenus peuvent fournir des recettes complémentaires', 'iscorrect' => true],
                            ['answer' => 'Toutes les bases fiscales sont également mobiles', 'iscorrect' => false],
                            ['answer' => 'La mobilité du capital empêche toute autre taxation', 'iscorrect' => false],
                            ['answer' => 'Les biens immobiliers peuvent toujours être déplacés vers un autre pays', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Dépenses publiques et analyse coûts-bénéfices',
                'questions' => [
                    [
                        'question' => 'Pourquoi l\\'analyse coûts-bénéfices doit-elle actualiser les bénéfices futurs d\\'un projet public ?',
                        'answers' => [
                            ['answer' => 'Un bénéfice reçu dans le futur a généralement une valeur présente inférieure à un bénéfice identique reçu immédiatement', 'iscorrect' => true],
                            ['answer' => 'Les bénéfices futurs ont toujours une valeur supérieure sans actualisation', 'iscorrect' => false],
                            ['answer' => 'L\\'actualisation ne concerne que les entreprises privées', 'iscorrect' => false],
                            ['answer' => 'Les projets publics ne génèrent jamais de bénéfices futurs', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi le choix du taux d\\'actualisation social est-il important ?',
                        'answers' => [
                            ['answer' => 'Il influence fortement la valeur présente des coûts et bénéfices qui surviennent sur de longues périodes', 'iscorrect' => true],
                            ['answer' => 'Il n\\'affecte jamais la décision d\\'investissement', 'iscorrect' => false],
                            ['answer' => 'Tous les taux d\\'actualisation donnent le même résultat', 'iscorrect' => false],
                            ['answer' => 'Il sert uniquement à calculer les recettes fiscales', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les projets environnementaux posent-ils un problème particulier de valorisation ?',
                        'answers' => [
                            ['answer' => 'Une partie des bénéfices environnementaux est non marchande et peut s\\'étendre sur plusieurs générations', 'iscorrect' => true],
                            ['answer' => 'Les bénéfices environnementaux sont toujours observables sur les marchés', 'iscorrect' => false],
                            ['answer' => 'Les dommages environnementaux n\\'ont jamais de valeur sociale', 'iscorrect' => false],
                            ['answer' => 'Les générations futures ne comptent jamais dans l\\'analyse économique', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les coûts d\\'opportunité doivent-ils être inclus dans l\\'évaluation d\\'un projet public ?',
                        'answers' => [
                            ['answer' => 'Les ressources publiques utilisées auraient pu être affectées à d\\'autres projets ou services', 'iscorrect' => true],
                            ['answer' => 'Les ressources publiques sont illimitées', 'iscorrect' => false],
                            ['answer' => 'Le coût d\\'opportunité n\\'existe que sur les marchés privés', 'iscorrect' => false],
                            ['answer' => 'Les projets publics ne concurrencent jamais d\\'autres usages', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les externalités doivent-elles être monétisées lorsque cela est raisonnablement possible ?',
                        'answers' => [
                            ['answer' => 'Pour intégrer dans la comparaison des projets certains coûts ou bénéfices qui ne sont pas directement reflétés dans les prix de marché', 'iscorrect' => true],
                            ['answer' => 'Pour supprimer automatiquement les incertitudes', 'iscorrect' => false],
                            ['answer' => 'Les externalités ne peuvent jamais être prises en compte', 'iscorrect' => false],
                            ['answer' => 'La monétisation rend tous les projets rentables', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une analyse de sensibilité est-elle importante pour un projet public ?',
                        'answers' => [
                            ['answer' => 'Elle montre comment la décision change lorsque les hypothèses clés sur coûts, demande, durée ou actualisation varient', 'iscorrect' => true],
                            ['answer' => 'Elle garantit qu\\'une prévision est certaine', 'iscorrect' => false],
                            ['answer' => 'Elle remplace toutes les données observées', 'iscorrect' => false],
                            ['answer' => 'Elle supprime le risque économique', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les risques de dépassement de coûts doivent-ils être intégrés ex ante ?',
                        'answers' => [
                            ['answer' => 'La probabilité d\\'un dépassement influence la valeur économique attendue du projet', 'iscorrect' => true],
                            ['answer' => 'Les dépassements sont toujours impossibles', 'iscorrect' => false],
                            ['answer' => 'Un coût supplémentaire augmente nécessairement le rendement social', 'iscorrect' => false],
                            ['answer' => 'Les risques n\\'ont aucun effet sur la valeur attendue', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les coûts irrécupérables ne doivent-ils pas toujours déterminer une décision future ?',
                        'answers' => [
                            ['answer' => 'Une dépense déjà engagée ne peut généralement plus être récupérée et ne doit pas peser comme un coût marginal futur', 'iscorrect' => true],
                            ['answer' => 'Les coûts passés sont toujours les plus importants', 'iscorrect' => false],
                            ['answer' => 'Une dépense irrécupérable peut toujours être récupérée intégralement', 'iscorrect' => false],
                            ['answer' => 'Les décisions publiques doivent toujours poursuivre les projets déjà commencés', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi l\\'évaluation ex post complète l\\'analyse ex ante ?',
                        'answers' => [
                            ['answer' => 'Elle permet de comparer les coûts et résultats réalisés avec les hypothèses initiales et d\\'améliorer les décisions futures', 'iscorrect' => true],
                            ['answer' => 'Elle rend les prévisions passées parfaitement exactes', 'iscorrect' => false],
                            ['answer' => 'Elle n\\'a aucune utilité après la mise en œuvre', 'iscorrect' => false],
                            ['answer' => 'Elle remplace toute analyse ex ante', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les projets publics doivent-ils être comparés entre eux et non seulement évalués isolément ?',
                        'answers' => [
                            ['answer' => 'Les ressources limitées impliquent un arbitrage entre plusieurs usages possibles', 'iscorrect' => true],
                            ['answer' => 'Tous les projets publics peuvent être financés simultanément', 'iscorrect' => false],
                            ['answer' => 'Le coût d\\'opportunité n\\'existe pas en finances publiques', 'iscorrect' => false],
                            ['answer' => 'Un projet jugé utile rend automatiquement inutiles tous les autres', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Protection sociale, redistribution et incitations',
                'questions' => [
                    [
                        'question' => 'Pourquoi un système de prestations peut-il créer un taux marginal effectif d\\'imposition élevé ?',
                        'answers' => [
                            ['answer' => 'La combinaison de la perte progressive des prestations et de l\\'impôt sur un revenu supplémentaire peut réduire fortement le gain net du travail', 'iscorrect' => true],
                            ['answer' => 'Les prestations augmentent toujours avec le revenu sans aucune réduction', 'iscorrect' => false],
                            ['answer' => 'Les impôts et prestations ne peuvent jamais interagir', 'iscorrect' => false],
                            ['answer' => 'Un taux marginal effectif ne concerne que les entreprises', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un dispositif de crédit d\\'impôt remboursable peut-il soutenir les travailleurs à bas revenu ?',
                        'answers' => [
                            ['answer' => 'Il peut augmenter le revenu disponible même lorsque l\\'impôt dû est faible ou nul, selon les règles du dispositif', 'iscorrect' => true],
                            ['answer' => 'Il réduit toujours le revenu des travailleurs', 'iscorrect' => false],
                            ['answer' => 'Il ne peut profiter qu\\'aux hauts revenus', 'iscorrect' => false],
                            ['answer' => 'Il n\\'a aucun effet sur le revenu disponible', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi le retrait progressif d\\'une prestation peut-il améliorer l\\'efficacité mais créer des effets redistributifs particuliers ?',
                        'answers' => [
                            ['answer' => 'Il peut concentrer davantage l\\'aide sur les ménages les plus modestes mais introduire des taux marginaux effectifs sur la zone de sortie', 'iscorrect' => true],
                            ['answer' => 'Un retrait progressif n\\'affecte jamais les incitations', 'iscorrect' => false],
                            ['answer' => 'Les ménages perdent toujours toutes leurs prestations immédiatement', 'iscorrect' => false],
                            ['answer' => 'Les prestations sont toujours indépendantes du revenu', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi l\\'assurance chômage peut-elle avoir à la fois un effet stabilisateur et un effet d\\'incitation ?',
                        'answers' => [
                            ['answer' => 'Elle soutient le revenu pendant les périodes sans emploi mais peut modifier la durée ou l\\'intensité de la recherche d\\'emploi', 'iscorrect' => true],
                            ['answer' => 'Elle n\\'a qu\\'un effet macroéconomique positif sans aucun comportement', 'iscorrect' => false],
                            ['answer' => 'Elle réduit toujours l\\'offre de travail à zéro', 'iscorrect' => false],
                            ['answer' => 'Elle n\\'a aucun effet sur les décisions de recherche', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les prestations ciblées peuvent-elles être plus efficaces budgétairement mais plus complexes administrativement ?',
                        'answers' => [
                            ['answer' => 'Le ciblage réduit les bénéficiaires non prioritaires mais nécessite des critères, contrôles et procédures supplémentaires', 'iscorrect' => true],
                            ['answer' => 'Les programmes ciblés n\\'exigent aucune administration', 'iscorrect' => false],
                            ['answer' => 'La complexité administrative est toujours nulle', 'iscorrect' => false],
                            ['answer' => 'Les programmes universels sont toujours plus complexes', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les transferts universels et ciblés produisent-ils des profils budgétaires différents ?',
                        'answers' => [
                            ['answer' => 'Un transfert universel couvre davantage de ménages tandis qu\\'un programme ciblé concentre les ressources sur certains bénéficiaires', 'iscorrect' => true],
                            ['answer' => 'Les deux dispositifs ont toujours le même coût', 'iscorrect' => false],
                            ['answer' => 'Le ciblage augmente toujours le nombre de bénéficiaires', 'iscorrect' => false],
                            ['answer' => 'Un transfert universel ne touche jamais les ménages aisés', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi l\\'évaluation d\\'une politique de redistribution doit-elle mesurer aussi les effets sur la participation au marché du travail ?',
                        'answers' => [
                            ['answer' => 'Une politique peut améliorer le revenu disponible tout en modifiant certaines incitations à participer ou à travailler davantage', 'iscorrect' => true],
                            ['answer' => 'Les politiques de redistribution ne peuvent jamais modifier l\\'offre de travail', 'iscorrect' => false],
                            ['answer' => 'La participation n\\'a aucun lien avec le revenu net', 'iscorrect' => false],
                            ['answer' => 'Les ménages répondent toujours de façon identique', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les politiques de redistribution peuvent-elles améliorer le capital humain ?',
                        'answers' => [
                            ['answer' => 'Un meilleur accès aux soins, à l\\'éducation ou à la nutrition peut renforcer les capacités productives futures', 'iscorrect' => true],
                            ['answer' => 'La redistribution réduit toujours le capital humain', 'iscorrect' => false],
                            ['answer' => 'Les services publics n\\'affectent jamais la productivité future', 'iscorrect' => false],
                            ['answer' => 'Le capital humain dépend uniquement du secteur privé', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les politiques de redistribution en nature peuvent-elles différer des transferts monétaires ?',
                        'answers' => [
                            ['answer' => 'Les services en nature garantissent l\\'accès à certains biens comme la santé ou l\\'éducation, tandis qu\\'un transfert monétaire laisse davantage de choix au bénéficiaire', 'iscorrect' => true],
                            ['answer' => 'Les deux formes offrent toujours exactement la même liberté de choix', 'iscorrect' => false],
                            ['answer' => 'Les transferts monétaires ne peuvent jamais améliorer le bien-être', 'iscorrect' => false],
                            ['answer' => 'Les services publics n\\'ont aucun effet redistributif', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la conception d\\'un système de prestations doit-elle éviter des trappes à pauvreté excessives ?',
                        'answers' => [
                            ['answer' => 'Une réduction trop rapide des prestations lorsque le revenu augmente peut créer un taux marginal effectif élevé et diminuer l\\'incitation à augmenter les revenus', 'iscorrect' => true],
                            ['answer' => 'Les taux marginaux effectifs ne concernent jamais les ménages pauvres', 'iscorrect' => false],
                            ['answer' => 'Les prestations augmentent toujours plus vite que le revenu', 'iscorrect' => false],
                            ['answer' => 'Une trappe à pauvreté signifie toujours une forte offre de travail', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Crises budgétaires et gestion des risques',
                'questions' => [
                    [
                        'question' => 'Pourquoi une hausse des primes souveraines peut-elle créer un cercle défavorable pour un État très endetté ?',
                        'answers' => [
                            ['answer' => 'Elle augmente le coût de refinancement, ce qui peut détériorer davantage les perspectives budgétaires et renforcer la perception du risque', 'iscorrect' => true],
                            ['answer' => 'Une hausse des primes réduit toujours le service de la dette', 'iscorrect' => false],
                            ['answer' => 'Les investisseurs ignorent toujours le risque souverain', 'iscorrect' => false],
                            ['answer' => 'Le coût de refinancement devient nécessairement nul', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un État peut-il être confronté à un problème de liquidité sans être nécessairement insolvable ?',
                        'answers' => [
                            ['answer' => Il peut disposer d\\'actifs et de revenus futurs suffisants mais ne pas avoir immédiatement les liquidités nécessaires pour honorer ses échéances', 'iscorrect' => true],
                            ['answer' => 'Liquidité et solvabilité sont toujours identiques', 'iscorrect' => false],
                            ['answer' => 'Un État solvable ne peut jamais avoir de problème de financement', 'iscorrect' => false],
                            ['answer' => 'La solvabilité dépend uniquement des réserves à court terme', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une crise bancaire peut-elle devenir une crise budgétaire ?',
                        'answers' => [
                            ['answer' => 'L\\'État peut devoir recapitaliser des institutions ou honorer certaines garanties, transférant des pertes vers le secteur public', 'iscorrect' => true],
                            ['answer' => 'Les banques n\\'ont jamais de lien avec les finances publiques', 'iscorrect' => false],
                            ['answer' => 'Les garanties publiques ne peuvent jamais être appelées', 'iscorrect' => false],
                            ['answer' => 'Les crises bancaires augmentent toujours les recettes fiscales', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les risques liés aux partenariats public-privé doivent-ils être inclus dans l\\'analyse budgétaire ?',
                        'answers' => [
                            ['answer' => 'Des paiements futurs ou engagements contingents peuvent créer des obligations publiques même s\\'ils n\\'apparaissent pas immédiatement dans la dette', 'iscorrect' => true],
                            ['answer' => 'Les partenariats privés ne créent jamais d\\'engagement public', 'iscorrect' => false],
                            ['answer' => 'Les paiements futurs n\\'ont aucune valeur budgétaire', 'iscorrect' => false],
                            ['answer' => 'Les risques sont toujours intégralement supportés par les entreprises privées', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les stress tests budgétaires peuvent-ils être utiles ?',
                        'answers' => [
                            ['answer' => 'Ils montrent comment les finances publiques réagiraient à différents chocs de taux, croissance, inflation ou recettes', 'iscorrect' => true],
                            ['answer' => 'Ils prédisent avec certitude le prochain choc', 'iscorrect' => false],
                            ['answer' => 'Ils rendent les déficits impossibles', 'iscorrect' => false],
                            ['answer' => 'Ils remplacent les prévisions centrales', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un choc de taux peut-il être plus dangereux lorsque la maturité moyenne de la dette est courte ?',
                        'answers' => [
                            ['answer' => 'Une plus grande part de la dette est rapidement refinancée à des conditions potentiellement plus défavorables', 'iscorrect' => true],
                            ['answer' => 'Une maturité courte garantit toujours des taux plus faibles', 'iscorrect' => false],
                            ['answer' => 'La maturité ne change jamais la vitesse de transmission des taux', 'iscorrect' => false],
                            ['answer' => 'Une dette courte n\\'a jamais besoin de refinancement', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les réserves budgétaires peuvent-elles renforcer la résilience ?',
                        'answers' => [
                            ['answer' => 'Elles offrent une marge financière permettant de répondre à certains chocs sans augmenter immédiatement les impôts ou réduire fortement les dépenses', 'iscorrect' => true],
                            ['answer' => 'Les réserves garantissent l\\'absence de toute crise', 'iscorrect' => false],
                            ['answer' => 'Elles remplacent définitivement les recettes fiscales', 'iscorrect' => false],
                            ['answer' => 'Elles empêchent toute hausse future des taux', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les risques climatiques peuvent-ils devenir un problème budgétaire ?',
                        'answers' => [
                            ['answer' => 'Des catastrophes plus fréquentes ou des pertes économiques peuvent réduire les recettes et augmenter les dépenses publiques', 'iscorrect' => true],
                            ['answer' => 'Les risques climatiques n\\'affectent jamais les infrastructures publiques', 'iscorrect' => false],
                            ['answer' => 'Ils augmentent toujours les recettes fiscales', 'iscorrect' => false],
                            ['answer' => 'Les assurances privées absorbent nécessairement tous les coûts publics', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les garanties publiques constituent-elles un risque contingent ?',
                        'answers' => [
                            ['answer' => 'Elles ne génèrent pas nécessairement une dépense immédiate mais peuvent devenir coûteuses lorsque l\\'événement garanti se produit', 'iscorrect' => true],
                            ['answer' => 'Elles représentent toujours une dépense budgétaire immédiate', 'iscorrect' => false],
                            ['answer' => 'Elles n\\'ont jamais de valeur financière', 'iscorrect' => false],
                            ['answer' => 'Elles suppriment tous les risques du bénéficiaire', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une stratégie budgétaire robuste doit-elle utiliser plusieurs scénarios macroéconomiques ?',
                        'answers' => [
                            ['answer' => 'La dette et les recettes peuvent réagir très différemment selon les trajectoires de croissance, inflation et taux d\\'intérêt', 'iscorrect' => true],
                            ['answer' => 'Un seul scénario est toujours certain', 'iscorrect' => false],
                            ['answer' => 'Les scénarios alternatifs n\\'affectent jamais la soutenabilité', 'iscorrect' => false],
                            ['answer' => 'Les variables macroéconomiques évoluent toujours indépendamment', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Évaluation empirique et identification causale',
                'questions' => [
                    [
                        'question' => 'Pourquoi une corrélation entre dépenses publiques et croissance ne prouve-t-elle pas un effet causal ?',
                        'answers' => [
                            ['answer' => 'Les dépenses peuvent elles-mêmes répondre à la croissance et d\\'autres facteurs peuvent influencer simultanément les deux variables', 'iscorrect' => true],
                            ['answer' => 'Une corrélation implique toujours une causalité', 'iscorrect' => false],
                            ['answer' => 'Les dépenses publiques sont toujours exogènes', 'iscorrect' => false],
                            ['answer' => 'La croissance ne peut jamais influencer le budget', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi l\\'endogénéité est-elle un problème dans l\\'estimation des effets budgétaires ?',
                        'answers' => [
                            ['answer' => 'La variable fiscale étudiée peut être corrélée à des facteurs non observés qui influencent aussi le résultat économique', 'iscorrect' => true],
                            ['answer' => 'L\\'endogénéité signifie qu\\'une variable ne varie jamais', 'iscorrect' => false],
                            ['answer' => 'Elle garantit toujours une estimation non biaisée', 'iscorrect' => false],
                            ['answer' => 'Elle concerne uniquement les données financières privées', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les variations discrétionnaires de dépenses peuvent-elles être utilisées pour identifier un multiplicateur ?',
                        'answers' => [
                            ['answer' => 'Si elles sont suffisamment exogènes à la conjoncture, elles fournissent une variation plus proche d\\'un choc causal', 'iscorrect' => true],
                            ['answer' => 'Toute variation discrétionnaire est automatiquement exogène', 'iscorrect' => false],
                            ['answer' => 'Les dépenses publiques sont toujours indépendantes de la conjoncture', 'iscorrect' => false],
                            ['answer' => 'Un multiplicateur ne peut jamais être estimé empiriquement', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une régression simple de croissance sur dépenses publiques peut-elle produire un coefficient trompeur ?',
                        'answers' => [
                            ['answer' => 'Le coefficient peut capturer les réponses du budget aux conditions économiques plutôt que l\\'effet des dépenses sur la croissance', 'iscorrect' => true],
                            ['answer' => 'Une régression simple garantit toujours une identification causale', 'iscorrect' => false],
                            ['answer' => 'Les variables budgétaires ne sont jamais endogènes', 'iscorrect' => false],
                            ['answer' => 'La croissance ne varie jamais dans les données', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les différences de calendrier entre régions peuvent-elles être exploitées dans certaines évaluations ?',
                        'answers' => [
                            ['answer' => Elles peuvent fournir un groupe traité et un groupe de comparaison pour une approche en différences-de-différences sous hypothèses appropriées', 'iscorrect' => true],
                            ['answer' => Elles garantissent toujours des groupes parfaitement identiques', 'iscorrect' => false],
                            ['answer' => Elles éliminent toute hypothèse économétrique', 'iscorrect' => false],
                            ['answer' => Elles ne peuvent jamais être utilisées en économie publique', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle hypothèse est centrale dans une approche classique en différences-de-différences ?',
                        'answers' => [
                            ['answer' => 'L\\'hypothèse de tendances parallèles en l\\'absence de traitement', 'iscorrect' => true],
                            ['answer' => 'Les groupes doivent avoir exactement les mêmes niveaux de revenu à toutes les dates', 'iscorrect' => false],
                            ['answer' => 'Le traitement doit être attribué aléatoirement', 'iscorrect' => false],
                            ['answer' => 'Toutes les variables doivent être constantes', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les effets dynamiques sont-ils importants dans l\\'évaluation d\\'une réforme fiscale ?',
                        'answers' => [
                            ['answer' => 'Les agents peuvent ajuster progressivement leur travail, investissement, consommation ou localisation', 'iscorrect' => true],
                            ['answer' => 'Les réformes fiscales n\\'ont jamais d\\'effet retardé', 'iscorrect' => false],
                            ['answer' => 'Tous les effets apparaissent immédiatement', 'iscorrect' => false],
                            ['answer' => 'Les comportements restent fixes après une réforme', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi l\\'hétérogénéité des effets est-elle importante dans une évaluation fiscale ?',
                        'answers' => [
                            ['answer' => 'Une réforme peut bénéficier ou pénaliser différemment les ménages selon revenu, âge, emploi ou localisation', 'iscorrect' => true],
                            ['answer' => 'Toutes les catégories réagissent nécessairement de la même façon', 'iscorrect' => false],
                            ['answer' => 'Une réforme fiscale produit toujours un effet uniforme', 'iscorrect' => false],
                            ['answer' => 'Les groupes socioéconomiques ne peuvent jamais être comparés', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi l\\'effet d\\'une politique observé à court terme peut-il différer de l\\'effet de long terme ?',
                        'answers' => [
                            ['answer' => 'Les comportements, l\\'offre de facteurs, l\\'investissement et les attentes peuvent s\\'adapter progressivement', 'iscorrect' => true],
                            ['answer' => 'L\\'économie ne change jamais après une politique', 'iscorrect' => false],
                            ['answer' => 'Les effets économiques sont toujours instantanés', 'iscorrect' => false],
                            ['answer' => 'Les agents ne réagissent jamais après la première période', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les tests de robustesse sont-ils essentiels dans l\\'évaluation empirique ?',
                        'answers' => [
                            ['answer' => 'Ils permettent de vérifier si les résultats restent similaires lorsque les spécifications ou échantillons raisonnables sont modifiés', 'iscorrect' => true],
                            ['answer' => 'Ils garantissent automatiquement la causalité', 'iscorrect' => false],
                            ['answer' => 'Ils remplacent toutes les hypothèses économiques', 'iscorrect' => false],
                            ['answer' => 'Ils servent uniquement à augmenter la taille de l\\'échantillon', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Fiscalité, productivité et croissance de long terme',
                'questions' => [
                    [
                        'question' => 'Pourquoi la fiscalité peut-elle affecter la croissance potentielle plutôt que seulement la demande à court terme ?',
                        'answers' => [
                            ['answer' => 'Elle peut modifier les incitations à travailler, épargner, investir, innover et entreprendre', 'iscorrect' => true],
                            ['answer' => 'Les impôts n\\'affectent jamais les décisions à long terme', 'iscorrect' => false],
                            ['answer' => 'La croissance potentielle dépend uniquement des dépenses publiques', 'iscorrect' => false],
                            ['answer' => 'La fiscalité agit seulement sur les importations', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les taxes sur l\\'investissement peuvent-elles réduire l\\'accumulation de capital ?',
                        'answers' => [
                            ['answer' => 'Elles peuvent diminuer le rendement après impôt des projets et donc réduire certaines dépenses d\\'investissement', 'iscorrect' => true],
                            ['answer' => 'Elles augmentent toujours le rendement net', 'iscorrect' => false],
                            ['answer' => 'Le rendement après impôt n\\'a aucun effet sur l\\'investissement', 'iscorrect' => false],
                            ['answer' => 'Les entreprises investissent indépendamment de leur rentabilité', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les dépenses publiques d\\'infrastructure peuvent-elles améliorer la productivité totale des facteurs ?',
                        'answers' => [
                            ['answer' => 'Elles peuvent améliorer l\\'environnement productif dans lequel les facteurs privés sont utilisés', 'iscorrect' => true],
                            ['answer' => 'Les infrastructures remplacent nécessairement le capital privé', 'iscorrect' => false],
                            ['answer' => 'La productivité totale des facteurs ne dépend jamais des infrastructures', 'iscorrect' => false],
                            ['answer' => 'Les infrastructures n\\'affectent que la consommation', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les dépenses publiques en capital humain peuvent-elles avoir des rendements différés ?',
                        'answers' => [
                            ['answer' => 'Les compétences acquises aujourd\\'hui augmentent la productivité et les revenus sur une longue période', 'iscorrect' => true],
                            ['answer' => 'L\\'éducation produit toujours des bénéfices uniquement le jour du financement', 'iscorrect' => false],
                            ['answer' => 'Le capital humain ne peut jamais être accumulé', 'iscorrect' => false],
                            ['answer' => 'Les compétences n\\'ont aucune influence sur les salaires', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les dépenses publiques de recherche peuvent-elles avoir des retombées au-delà du secteur financé ?',
                        'answers' => [
                            ['answer' => 'Les connaissances peuvent se diffuser entre entreprises et secteurs et générer des externalités positives', 'iscorrect' => true],
                            ['answer' => 'Les connaissances restent toujours confinées à l\\'organisme qui finance la recherche', 'iscorrect' => false],
                            ['answer' => 'La recherche ne produit jamais d\\'externalité', 'iscorrect' => false],
                            ['answer' => 'Les innovations ne peuvent jamais être réutilisées', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la fiscalité de l\\'innovation doit-elle considérer les retombées sociales ?',
                        'answers' => [
                            ['answer' => 'Les bénéfices privés de l\\'innovation peuvent être inférieurs aux bénéfices sociaux générés par la diffusion des connaissances', 'iscorrect' => true],
                            ['answer' => 'Les innovations ont toujours uniquement des bénéfices privés', 'iscorrect' => false],
                            ['answer' => 'Les retombées technologiques n\\'existent jamais', 'iscorrect' => false],
                            ['answer' => 'L\\'innovation ne peut pas modifier la productivité d\\'autres entreprises', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une fiscalité stable peut-elle favoriser l\\'investissement même si le niveau des impôts reste élevé ?',
                        'answers' => [
                            ['answer' => 'La prévisibilité réduit l\\'incertitude sur les rendements après impôt des projets de long terme', 'iscorrect' => true],
                            ['answer' => 'Un niveau fiscal élevé garantit toujours davantage d\\'investissement', 'iscorrect' => false],
                            ['answer' => 'Les investisseurs ignorent toujours les règles futures', 'iscorrect' => false],
                            ['answer' => 'La stabilité n\\'a aucun lien avec les décisions d\\'investissement', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les taxes sur les bénéfices peuvent-elles influencer les décisions de financement des entreprises ?',
                        'answers' => [
                            ['answer' => 'Le traitement fiscal de la dette et des fonds propres peut modifier le coût relatif des différentes sources de financement', 'iscorrect' => true],
                            ['answer' => 'Toutes les sources de financement sont toujours taxées identiquement', 'iscorrect' => false],
                            ['answer' => 'La structure financière est indépendante de la fiscalité', 'iscorrect' => false],
                            ['answer' => 'Les entreprises ne comparent jamais leurs coûts de financement', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi le coût du capital après impôt est-il pertinent pour la productivité ?',
                        'answers' => [
                            ['answer' => 'Il influence l\\'attractivité des investissements qui améliorent les technologies et l\\'équipement par travailleur', 'iscorrect' => true],
                            ['answer' => 'Le coût du capital n\\'a aucun lien avec la productivité', 'iscorrect' => false],
                            ['answer' => 'Les investissements technologiques sont toujours gratuits', 'iscorrect' => false],
                            ['answer' => 'La productivité dépend uniquement du nombre de travailleurs', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une politique fiscale orientée vers la croissance doit-elle aussi considérer les inégalités ?',
                        'answers' => [
                            ['answer' => 'Une politique peut augmenter la croissance moyenne tout en produisant des effets très différents selon les groupes de population', 'iscorrect' => true],
                            ['answer' => 'La croissance et la distribution sont toujours identiques', 'iscorrect' => false],
                            ['answer' => 'Les politiques de croissance ne peuvent jamais modifier les revenus relatifs', 'iscorrect' => false],
                            ['answer' => 'Les inégalités n\\'ont aucun rôle économique', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Architecture professionnelle de la politique budgétaire',
                'questions' => [
                    [
                        'question' => 'Pourquoi une stratégie budgétaire professionnelle doit-elle séparer les objectifs de court terme et de long terme ?',
                        'answers' => [
                            ['answer' => 'Le soutien conjoncturel, la redistribution, l\\'investissement et la soutenabilité de la dette peuvent nécessiter des arbitrages sur différents horizons', 'iscorrect' => true],
                            ['answer' => 'Tous les objectifs budgétaires ont toujours le même horizon', 'iscorrect' => false],
                            ['answer' => 'La dette ne concerne jamais le long terme', 'iscorrect' => false],
                            ['answer' => 'La stabilisation conjoncturelle suffit à elle seule pour toute politique budgétaire', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la composition de l\\'ajustement fiscal importe-t-elle autant que son montant ?',
                        'answers' => [
                            ['answer' => 'Une réduction d\\'investissement, de transferts ou de dépenses courantes peut avoir des effets différents sur activité, équité et croissance future', 'iscorrect' => true],
                            ['answer' => 'Toutes les dépenses ont exactement le même multiplicateur', 'iscorrect' => false],
                            ['answer' => 'Le type de mesure n\\'a aucun effet sur l\\'économie', 'iscorrect' => false],
                            ['answer' => 'Une consolidation fiscale consiste toujours à réduire uniquement les investissements', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une réforme fiscale doit-elle être analysée en termes de recettes statiques et dynamiques ?',
                        'answers' => [
                            ['answer' => 'Les recettes statiques ignorent les changements de comportement tandis que les recettes dynamiques tiennent compte de l\\'adaptation de la base taxable', 'iscorrect' => true],
                            ['answer' => 'Les deux notions sont identiques', 'iscorrect' => false],
                            ['answer' => 'Les recettes dynamiques ignorent totalement les comportements', 'iscorrect' => false],
                            ['answer' => 'Les recettes statiques incluent toujours tous les effets macroéconomiques', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une réforme budgétaire doit-elle être accompagnée d\\'une stratégie de communication crédible ?',
                        'answers' => [
                            ['answer' => 'Les anticipations des ménages, entreprises et marchés peuvent influencer les effets de la réforme avant même sa mise en œuvre complète', 'iscorrect' => true],
                            ['answer' => 'La communication n\\'a jamais d\\'effet économique', 'iscorrect' => false],
                            ['answer' => 'Les agents ne tiennent jamais compte des politiques futures', 'iscorrect' => false],
                            ['answer' => 'Une réforme agit uniquement après sa fin', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la crédibilité d\\'un programme fiscal dépend-elle de la cohérence entre mesures annoncées et ressources disponibles ?',
                        'answers' => [
                            ['answer' => 'Des objectifs non financés peuvent réduire la confiance et conduire les marchés à anticiper davantage de dette ou de futurs ajustements', 'iscorrect' => true],
                            ['answer' => 'Les ressources disponibles n\\'ont aucun effet sur la crédibilité', 'iscorrect' => false],
                            ['answer' => 'Tout programme annoncé est automatiquement financé', 'iscorrect' => false],
                            ['answer' => 'Les marchés ignorent toujours les contraintes budgétaires', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la qualité des données fiscales est-elle essentielle à la conception des politiques ?',
                        'answers' => [
                            ['answer' => 'Des données fiables sur bases fiscales, dépenses et distribution des revenus sont nécessaires pour calibrer et évaluer les mesures', 'iscorrect' => true],
                            ['answer' => 'Les décisions fiscales peuvent toujours être prises sans données', 'iscorrect' => false],
                            ['answer' => 'Les statistiques fiscales n\\'affectent jamais les choix budgétaires', 'iscorrect' => false],
                            ['answer' => 'Toutes les données économiques sont automatiquement exactes', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un gouvernement doit-il distinguer une mesure temporaire d\\'une mesure permanente dans sa planification ?',
                        'answers' => [
                            ['answer' => 'Une mesure permanente modifie durablement les besoins de financement et la trajectoire des recettes ou dépenses', 'iscorrect' => true],
                            ['answer' => 'Les mesures temporaires et permanentes ont toujours exactement le même coût intertemporel', 'iscorrect' => false],
                            ['answer' => 'Une mesure permanente disparaît toujours sans coût', 'iscorrect' => false],
                            ['answer' => 'Le caractère temporaire n\\'a aucun effet sur les anticipations', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les scénarios de politique budgétaire doivent-ils inclure des réactions privées ?',
                        'answers' => [
                            ['answer' => 'La consommation, l\\'investissement, l\\'emploi, l\\'épargne et la localisation peuvent réagir aux impôts et dépenses publics', 'iscorrect' => true],
                            ['answer' => 'Le secteur privé reste toujours inchangé', 'iscorrect' => false],
                            ['answer' => 'Les impôts n\\'affectent jamais les comportements', 'iscorrect' => false],
                            ['answer' => 'Les entreprises ne réagissent jamais aux dépenses publiques', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi l\\'analyse distributive doit-elle accompagner l\\'analyse macroéconomique d\\'une réforme ?',
                        'answers' => [
                            ['answer' => 'Une même mesure peut modifier différemment les revenus réels, l\\'emploi et les prix selon les groupes', 'iscorrect' => true],
                            ['answer' => 'Les effets macroéconomiques sont toujours identiques pour tous', 'iscorrect' => false],
                            ['answer' => 'La distribution n\\'a aucune relation avec la fiscalité', 'iscorrect' => false],
                            ['answer' => 'Les revenus relatifs ne changent jamais après une réforme', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel principe résume le mieux une stratégie budgétaire professionnelle ?',
                        'answers' => [
                            ['answer' => 'Concilier stabilisation, soutenabilité, efficacité, équité et investissement en tenant compte des contraintes institutionnelles et des réactions économiques', 'iscorrect' => true],
                            ['answer' => 'Maximiser les dépenses publiques indépendamment des recettes', 'iscorrect' => false],
                            ['answer' => 'Réduire systématiquement tous les impôts', 'iscorrect' => false],
                            ['answer' => 'Évaluer uniquement le déficit de l\\'année courante', 'iscorrect' => false],
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
