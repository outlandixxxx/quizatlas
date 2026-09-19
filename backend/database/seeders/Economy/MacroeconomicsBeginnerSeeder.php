<?php

namespace Database\Seeders;

use App\Models\Subject;
use App\Models\Quiz;
use App\Models\Question;
use App\Models\Choice;
use Illuminate\Database\Seeder;

class MacroeconomicsBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'macroeconomics')->firstOrFail();

        $quizzes = [

            // ============================================================
            // QUIZ 1
            // ============================================================
            [
                'title' => 'Introduction à la macroéconomie',
                'description' => 'Quiz débutant sur les fondamentaux de la macroéconomie.',
                'questions' => [
                    [
                        'question' => 'Que cherche principalement à étudier la macroéconomie ?',
                        'choices' => [
                            'Le fonctionnement de l’économie dans son ensemble à travers les grands agrégats économiques',
                            'Uniquement les décisions d’un consommateur',
                            'Uniquement les coûts d’une entreprise',
                            'Uniquement les prix d’un produit',
                        ],
                        'correct' => 0,
                        'explanation' => 'La macroéconomie étudie l’économie dans son ensemble à travers des agrégats comme la production, l’emploi et les prix.',
                    ],
                    [
                        'question' => 'Quels sont des objectifs classiques de la macroéconomie ?',
                        'choices' => [
                            'La croissance, l’emploi, la stabilité des prix et la stabilité économique',
                            'Uniquement l’augmentation des profits des entreprises',
                            'Uniquement la hausse des exportations',
                            'Uniquement la réduction de la population',
                        ],
                        'correct' => 0,
                        'explanation' => 'La croissance, l’emploi et la stabilité des prix font partie des objectifs macroéconomiques classiques.',
                    ],
                    [
                        'question' => 'Qu’est-ce qu’un agrégat macroéconomique ?',
                        'choices' => [
                            'Une mesure globale représentant une dimension importante de l’économie',
                            'Une dépense effectuée par un seul ménage',
                            'Une facture d’entreprise',
                            'Un prix fixé par un seul vendeur',
                        ],
                        'correct' => 0,
                        'explanation' => 'Un agrégat macroéconomique est une mesure globale comme le PIB, le taux de chômage ou l’inflation.',
                    ],
                    [
                        'question' => 'Pourquoi la macroéconomie étudie-t-elle les fluctuations économiques ?',
                        'choices' => [
                            'Pour comprendre les variations de la production, de l’emploi, des revenus et des prix au cours du temps',
                            'Pour fixer le prix de chaque produit',
                            'Pour déterminer les préférences de chaque consommateur',
                            'Pour supprimer toutes les entreprises privées',
                        ],
                        'correct' => 0,
                        'explanation' => 'Les fluctuations décrivent les variations de l’activité économique, de l’emploi et d’autres agrégats au cours du temps.',
                    ],
                    [
                        'question' => 'Quel indicateur est particulièrement utilisé pour mesurer la production globale ?',
                        'choices' => [
                            'Le produit intérieur brut',
                            'Le taux de chômage uniquement',
                            'Le taux d’intérêt uniquement',
                            'Le salaire minimum',
                        ],
                        'correct' => 0,
                        'explanation' => 'Le PIB mesure la valeur de la production finale réalisée sur un territoire pendant une période donnée.',
                    ],
                    [
                        'question' => 'Pourquoi l’emploi est-il une question macroéconomique importante ?',
                        'choices' => [
                            'Parce qu’il influence les revenus des ménages, la production et la demande globale',
                            'Parce qu’il détermine uniquement les exportations',
                            'Parce qu’il n’a aucun lien avec la production',
                            'Parce qu’il concerne uniquement les banques centrales',
                        ],
                        'correct' => 0,
                        'explanation' => 'L’emploi influence les revenus, la production et la capacité de consommation des ménages.',
                    ],
                    [
                        'question' => 'Pourquoi l’inflation est-elle suivie par les autorités économiques ?',
                        'choices' => [
                            'Parce qu’une variation durable du niveau général des prix affecte le pouvoir d’achat et les décisions économiques',
                            'Parce qu’elle mesure directement la croissance démographique',
                            'Parce qu’elle détermine automatiquement les exportations',
                            'Parce qu’elle mesure uniquement les bénéfices des entreprises',
                        ],
                        'correct' => 0,
                        'explanation' => 'L’inflation influence le pouvoir d’achat et les décisions économiques des ménages et des entreprises.',
                    ],
                    [
                        'question' => 'Qu’est-ce qu’une récession ?',
                        'choices' => [
                            'Une période de recul significatif de l’activité économique',
                            'Une période de croissance exceptionnelle',
                            'Une période où tous les prix restent constants',
                            'Une période où les exportations deviennent nulles',
                        ],
                        'correct' => 0,
                        'explanation' => 'Une récession correspond généralement à une période de baisse significative de l’activité économique.',
                    ],
                    [
                        'question' => 'Quel rôle les statistiques macroéconomiques jouent-elles ?',
                        'choices' => [
                            'Elles permettent de mesurer et d’analyser l’état et l’évolution de l’économie',
                            'Elles garantissent des prévisions parfaitement exactes',
                            'Elles remplacent toutes les décisions économiques',
                            'Elles éliminent toutes les incertitudes',
                        ],
                        'correct' => 0,
                        'explanation' => 'Les statistiques macroéconomiques permettent de mesurer les grands phénomènes économiques.',
                    ],
                    [
                        'question' => 'Pourquoi les décisions économiques sont-elles parfois difficiles au niveau macroéconomique ?',
                        'choices' => [
                            'Parce que les objectifs économiques peuvent entrer en tension et que les effets des politiques sont incertains',
                            'Parce que toutes les économies réagissent exactement de la même manière',
                            'Parce que les politiques économiques n’ont aucun effet',
                            'Parce que les indicateurs économiques sont toujours constants',
                        ],
                        'correct' => 0,
                        'explanation' => 'Les objectifs peuvent être difficiles à concilier et les effets des politiques économiques peuvent être incertains ou retardés.',
                    ],
                ],
            ],

            // ============================================================
            // QUIZ 2
            // ============================================================
            [
                'title' => 'Produit intérieur brut',
                'description' => 'Quiz débutant sur le PIB, ses composantes et ses limites.',
                'questions' => [
                    [
                        'question' => 'Que mesure principalement le PIB ?',
                        'choices' => [
                            'La valeur des biens et services finaux produits sur un territoire pendant une période donnée',
                            'Le patrimoine total des ménages',
                            'Le montant total des exportations uniquement',
                            'Le nombre total de travailleurs',
                        ],
                        'correct' => 0,
                        'explanation' => 'Le PIB mesure la valeur de la production finale réalisée sur un territoire pendant une période.',
                    ],
                    [
                        'question' => 'Pourquoi les biens intermédiaires ne sont-ils généralement pas comptés séparément dans le PIB ?',
                        'choices' => [
                            'Pour éviter le double comptage de leur valeur dans la production finale',
                            'Parce qu’ils n’ont aucune valeur économique',
                            'Parce qu’ils sont toujours importés',
                            'Parce qu’ils ne sont jamais utilisés dans la production',
                        ],
                        'correct' => 0,
                        'explanation' => 'Compter les biens intermédiaires séparément pourrait compter plusieurs fois une même valeur de production.',
                    ],
                    [
                        'question' => 'Dans l’approche par les dépenses, la consommation correspond principalement :',
                        'choices' => [
                            'Aux dépenses des ménages en biens et services finaux',
                            'Aux achats de machines par les entreprises',
                            'Aux dépenses publiques uniquement',
                            'Aux exportations uniquement',
                        ],
                        'correct' => 0,
                        'explanation' => 'La consommation correspond principalement aux dépenses des ménages en biens et services finaux.',
                    ],
                    [
                        'question' => 'Dans l’approche par les dépenses, l’investissement comprend notamment :',
                        'choices' => [
                            'Les dépenses en capital productif et certaines variations de stocks',
                            'Les achats alimentaires des ménages',
                            'Les recettes fiscales',
                            'Les salaires des fonctionnaires uniquement',
                        ],
                        'correct' => 0,
                        'explanation' => 'L’investissement comprend notamment le capital productif et certaines variations de stocks.',
                    ],
                    [
                        'question' => 'Que représentent les exportations nettes ?',
                        'choices' => [
                            'Les exportations moins les importations',
                            'Les importations moins les exportations',
                            'Les dépenses publiques moins les impôts',
                            'La consommation moins l’épargne',
                        ],
                        'correct' => 0,
                        'explanation' => 'Les exportations nettes correspondent à X - M, c’est-à-dire les exportations moins les importations.',
                    ],
                    [
                        'question' => 'Pourquoi les importations sont-elles soustraites dans le calcul du PIB par les dépenses ?',
                        'choices' => [
                            'Parce qu’une partie des dépenses intérieures correspond à une production réalisée à l’étranger',
                            'Parce que les importations sont toujours nuisibles',
                            'Parce qu’elles ne représentent jamais une dépense',
                            'Parce qu’elles réduisent toujours la consommation',
                        ],
                        'correct' => 0,
                        'explanation' => 'Les importations sont retirées pour ne pas attribuer à la production nationale des biens produits à l’étranger.',
                    ],
                    [
                        'question' => 'Que signifie le terme « intérieur » dans le PIB ?',
                        'choices' => [
                            'La production est réalisée à l’intérieur du territoire économique considéré',
                            'Seules les entreprises nationales sont comptabilisées',
                            'Les échanges extérieurs sont exclus',
                            'Seules les entreprises publiques sont incluses',
                        ],
                        'correct' => 0,
                        'explanation' => 'Le terme « intérieur » concerne le lieu où la production est réalisée.',
                    ],
                    [
                        'question' => 'Qu’est-ce que le PIB par habitant ?',
                        'choices' => [
                            'Le PIB rapporté au nombre d’habitants',
                            'Le PIB multiplié par le nombre d’habitants',
                            'Le revenu exact de chaque personne',
                            'Le patrimoine moyen de chaque entreprise',
                        ],
                        'correct' => 0,
                        'explanation' => 'Le PIB par habitant correspond au PIB divisé par la population.',
                    ],
                    [
                        'question' => 'Une hausse du PIB nominal peut résulter :',
                        'choices' => [
                            'D’une hausse de la production, des prix, ou des deux',
                            'Uniquement d’une hausse des quantités produites',
                            'Uniquement d’une baisse des prix',
                            'Uniquement d’une baisse du chômage',
                        ],
                        'correct' => 0,
                        'explanation' => 'Le PIB nominal est mesuré aux prix courants et peut donc augmenter à cause des prix ou des quantités.',
                    ],
                    [
                        'question' => 'Quelle est une limite importante du PIB comme mesure du bien-être ?',
                        'choices' => [
                            'Il ne mesure pas complètement les inégalités, le loisir, l’environnement ou certaines activités non marchandes',
                            'Il ne mesure aucune production',
                            'Il mesure parfaitement la qualité de vie',
                            'Il mesure uniquement la production agricole',
                        ],
                        'correct' => 0,
                        'explanation' => 'Le PIB ne résume pas toutes les dimensions du bien-être économique et social.',
                    ],
                ],
            ],

            // ============================================================
            // QUIZ 3
            // ============================================================
            [
                'title' => 'Croissance économique',
                'description' => 'Quiz débutant sur la croissance, la productivité, le capital humain et le progrès technologique.',
                'questions' => [
                    [
                        'question' => 'Qu’est-ce que la croissance économique ?',
                        'choices' => [
                            'Une augmentation durable de la production de biens et services d’une économie',
                            'Une hausse temporaire d’un seul prix',
                            'Une réduction obligatoire du chômage',
                            'Une augmentation des importations uniquement',
                        ],
                        'correct' => 0,
                        'explanation' => 'La croissance économique correspond à une augmentation durable de la production.',
                    ],
                    [
                        'question' => 'Pourquoi le PIB réel est-il utilisé pour mesurer la croissance ?',
                        'choices' => [
                            'Il permet de mieux isoler l’évolution des quantités produites des variations générales des prix',
                            'Il mesure uniquement l’inflation',
                            'Il élimine toutes les erreurs statistiques',
                            'Il mesure directement le bonheur',
                        ],
                        'correct' => 0,
                        'explanation' => 'Le PIB réel permet de distinguer plus clairement les variations de production des variations de prix.',
                    ],
                    [
                        'question' => 'Quel facteur contribue fortement à la croissance économique à long terme ?',
                        'choices' => [
                            'Les gains de productivité',
                            'Une inflation très élevée',
                            'Une diminution permanente du capital',
                            'Une baisse continue de l’efficacité',
                        ],
                        'correct' => 0,
                        'explanation' => 'Les gains de productivité permettent d’obtenir plus de production avec les ressources disponibles.',
                    ],
                    [
                        'question' => 'Comment le progrès technologique favorise-t-il la croissance ?',
                        'choices' => [
                            'Il peut permettre de produire davantage ou plus efficacement avec les ressources disponibles',
                            'Il réduit toujours la production',
                            'Il rend les ressources illimitées',
                            'Il supprime automatiquement toutes les dépenses',
                        ],
                        'correct' => 0,
                        'explanation' => 'Le progrès technologique peut améliorer l’efficacité et la productivité.',
                    ],
                    [
                        'question' => 'Qu’est-ce que le capital humain ?',
                        'choices' => [
                            'L’ensemble des connaissances, compétences et capacités productives des personnes',
                            'Uniquement les machines',
                            'Uniquement les ressources naturelles',
                            'La monnaie détenue par les ménages',
                        ],
                        'correct' => 0,
                        'explanation' => 'Le capital humain regroupe les connaissances et compétences qui améliorent la capacité productive.',
                    ],
                    [
                        'question' => 'Pourquoi l’éducation peut-elle contribuer à la croissance économique ?',
                        'choices' => [
                            'Elle peut améliorer la productivité, les compétences et la capacité d’innovation',
                            'Elle réduit toujours la productivité',
                            'Elle élimine tous les besoins de capital physique',
                            'Elle garantit automatiquement un emploi',
                        ],
                        'correct' => 0,
                        'explanation' => 'L’éducation peut améliorer les compétences et la productivité du travail.',
                    ],
                    [
                        'question' => 'Pourquoi les infrastructures sont-elles importantes pour la croissance ?',
                        'choices' => [
                            'Elles peuvent réduire certains coûts de transport, de communication et de production',
                            'Elles empêchent toujours les échanges',
                            'Elles remplacent tous les travailleurs',
                            'Elles réduisent nécessairement la productivité',
                        ],
                        'correct' => 0,
                        'explanation' => 'Des infrastructures efficaces peuvent réduire certains coûts et faciliter l’activité économique.',
                    ],
                    [
                        'question' => 'Pourquoi la productivité du travail est-elle importante ?',
                        'choices' => [
                            'Elle indique la quantité de production obtenue par unité de travail',
                            'Elle mesure uniquement le chômage',
                            'Elle mesure uniquement les exportations',
                            'Elle détermine directement le taux d’intérêt',
                        ],
                        'correct' => 0,
                        'explanation' => 'La productivité du travail mesure la production réalisée par unité de travail.',
                    ],
                    [
                        'question' => 'Qu’est-ce qu’une croissance intensive ?',
                        'choices' => [
                            'Une croissance reposant principalement sur l’amélioration de la productivité des facteurs',
                            'Une croissance obtenue uniquement en augmentant la population',
                            'Une croissance obtenue uniquement par des importations',
                            'Une diminution de la production par travailleur',
                        ],
                        'correct' => 0,
                        'explanation' => 'La croissance intensive provient principalement d’une meilleure productivité des facteurs.',
                    ],
                    [
                        'question' => 'Pourquoi les institutions économiques peuvent-elles soutenir la croissance ?',
                        'choices' => [
                            'Des institutions efficaces peuvent sécuriser les droits, les contrats et les incitations à investir et innover',
                            'Elles rendent toutes les ressources gratuites',
                            'Elles éliminent tous les risques économiques',
                            'Elles garantissent exactement le même niveau de vie partout',
                        ],
                        'correct' => 0,
                        'explanation' => 'Des institutions efficaces peuvent favoriser les investissements, les contrats et l’innovation.',
                    ],
                ],
            ],

            // ============================================================
            // QUIZ 4
            // ============================================================
            [
                'title' => 'Inflation et pouvoir d’achat',
                'description' => 'Quiz débutant sur l’inflation, la déflation et le pouvoir d’achat.',
                'questions' => [
                    [
                        'question' => 'Qu’est-ce que l’inflation ?',
                        'choices' => [
                            'Une hausse générale et persistante du niveau des prix',
                            'Une hausse du prix d’un seul produit',
                            'Une baisse générale des prix',
                            'Une augmentation des salaires uniquement',
                        ],
                        'correct' => 0,
                        'explanation' => 'L’inflation correspond à une hausse générale et persistante du niveau des prix.',
                    ],
                    [
                        'question' => 'Qu’est-ce que la déflation ?',
                        'choices' => [
                            'Une baisse générale et persistante du niveau des prix',
                            'Une baisse d’un seul prix',
                            'Une hausse générale des salaires',
                            'Une hausse du PIB réel',
                        ],
                        'correct' => 0,
                        'explanation' => 'La déflation correspond à une baisse générale et persistante du niveau des prix.',
                    ],
                    [
                        'question' => 'Que se passe-t-il généralement avec le pouvoir d’achat de la monnaie lorsque les prix augmentent ?',
                        'choices' => [
                            'Il diminue',
                            'Il augmente toujours',
                            'Il reste toujours identique',
                            'Il devient automatiquement nul',
                        ],
                        'correct' => 0,
                        'explanation' => 'Lorsque les prix augmentent, une même quantité de monnaie permet généralement d’acheter moins.',
                    ],
                    [
                        'question' => 'Qu’est-ce qu’un indice des prix à la consommation ?',
                        'choices' => [
                            'Un indicateur de l’évolution des prix d’un panier de biens et services consommés par les ménages',
                            'Un indicateur du chômage uniquement',
                            'Un indicateur de la production uniquement',
                            'Un indicateur du patrimoine national',
                        ],
                        'correct' => 0,
                        'explanation' => 'L’indice des prix à la consommation suit l’évolution du prix d’un panier de consommation.',
                    ],
                    [
                        'question' => 'Pourquoi une inflation élevée peut-elle perturber les décisions économiques ?',
                        'choices' => [
                            'Elle augmente l’incertitude concernant les prix, les revenus réels et les décisions futures',
                            'Elle supprime toute incertitude',
                            'Elle garantit une baisse du chômage',
                            'Elle rend les prix parfaitement prévisibles',
                        ],
                        'correct' => 0,
                        'explanation' => 'Une inflation forte et instable peut accroître l’incertitude économique.',
                    ],
                    [
                        'question' => 'Qu’est-ce que l’inflation importée ?',
                        'choices' => [
                            'Une inflation liée notamment au renchérissement des biens ou intrants provenant de l’étranger',
                            'Une inflation causée uniquement par les salaires domestiques',
                            'Une diminution du prix des importations',
                            'Une baisse de la demande intérieure',
                        ],
                        'correct' => 0,
                        'explanation' => 'L’inflation importée peut venir du renchérissement de produits et d’intrants importés.',
                    ],
                    [
                        'question' => 'Pourquoi une dépréciation de la monnaie peut-elle accroître certaines pressions inflationnistes ?',
                        'choices' => [
                            'Elle peut rendre les biens importés plus chers en monnaie nationale',
                            'Elle réduit toujours le prix des importations',
                            'Elle supprime les importations',
                            'Elle garantit une baisse des salaires',
                        ],
                        'correct' => 0,
                        'explanation' => 'Une dépréciation rend généralement les importations plus coûteuses en monnaie nationale.',
                    ],
                    [
                        'question' => 'Une inflation inattendue peut redistribuer le revenu réel entre :',
                        'choices' => [
                            'Les créanciers et les débiteurs',
                            'Uniquement les exportateurs et les importateurs',
                            'Uniquement les producteurs agricoles',
                            'Uniquement les banques centrales',
                        ],
                        'correct' => 0,
                        'explanation' => 'Une inflation inattendue peut modifier la valeur réelle des dettes et donc affecter créanciers et débiteurs différemment.',
                    ],
                    [
                        'question' => 'Pourquoi une faible inflation prévisible peut-elle être plus facile à gérer qu’une inflation forte et instable ?',
                        'choices' => [
                            'Les agents peuvent mieux anticiper l’évolution des prix et adapter leurs décisions',
                            'Une inflation prévisible supprime tous les coûts',
                            'Elle garantit automatiquement la croissance',
                            'Elle élimine tous les écarts de revenus',
                        ],
                        'correct' => 0,
                        'explanation' => 'Une inflation prévisible permet aux agents de mieux adapter leurs décisions.',
                    ],
                    [
                        'question' => 'Pourquoi la stabilité des prix est-elle un objectif important ?',
                        'choices' => [
                            'Elle facilite les décisions économiques et protège davantage la valeur de la monnaie',
                            'Elle garantit toujours le plein emploi',
                            'Elle élimine toutes les crises',
                            'Elle garantit une croissance identique chaque année',
                        ],
                        'correct' => 0,
                        'explanation' => 'Une évolution plus stable des prix facilite les décisions économiques et protège le pouvoir d’achat de la monnaie.',
                    ],
                ],
            ],

            // ============================================================
            // QUIZ 5
            // ============================================================
            [
                'title' => 'Chômage et emploi',
                'description' => 'Quiz débutant sur le chômage, la population active et les différents types de chômage.',
                'questions' => [
                    [
                        'question' => 'Qu’est-ce que la population active ?',
                        'choices' => [
                            'Les personnes en emploi et les personnes sans emploi qui recherchent activement un emploi selon la définition retenue',
                            'Toutes les personnes d’un pays',
                            'Uniquement les salariés du secteur public',
                            'Uniquement les retraités',
                        ],
                        'correct' => 0,
                        'explanation' => 'La population active comprend les personnes en emploi et les chômeurs selon la définition statistique retenue.',
                    ],
                    [
                        'question' => 'Qu’est-ce que le taux de chômage ?',
                        'choices' => [
                            'Le nombre de chômeurs rapporté à la population active',
                            'Le nombre de chômeurs rapporté à la population totale',
                            'Le nombre d’emplois rapporté au PIB',
                            'Le nombre de travailleurs rapporté au nombre d’entreprises',
                        ],
                        'correct' => 0,
                        'explanation' => 'Le taux de chômage est le nombre de chômeurs rapporté à la population active.',
                    ],
                    [
                        'question' => 'Qu’est-ce que le chômage frictionnel ?',
                        'choices' => [
                            'Le chômage lié notamment aux transitions entre emplois et au temps nécessaire pour trouver un poste',
                            'Le chômage provoqué uniquement par les crises financières',
                            'Le chômage causé uniquement par l’inflation',
                            'Le chômage uniquement saisonnier',
                        ],
                        'correct' => 0,
                        'explanation' => 'Le chômage frictionnel correspond notamment au temps nécessaire pour passer d’un emploi à un autre.',
                    ],
                    [
                        'question' => 'Qu’est-ce que le chômage structurel ?',
                        'choices' => [
                            'Le chômage lié notamment aux inadéquations durables entre les compétences et les emplois disponibles',
                            'Le chômage causé uniquement par une baisse temporaire de la demande',
                            'Le chômage lié uniquement aux vacances',
                            'Le chômage lié uniquement aux importations',
                        ],
                        'correct' => 0,
                        'explanation' => 'Le chômage structurel peut provenir d’une inadéquation durable entre les compétences et les emplois.',
                    ],
                    [
                        'question' => 'Qu’est-ce que le chômage cyclique ?',
                        'choices' => [
                            'Le chômage associé aux fluctuations de l’activité économique',
                            'Le chômage lié uniquement à la formation',
                            'Le chômage permanent de certains métiers',
                            'Le chômage volontaire uniquement',
                        ],
                        'correct' => 0,
                        'explanation' => 'Le chômage cyclique varie avec les fluctuations de l’activité économique.',
                    ],
                    [
                        'question' => 'Pourquoi le chômage augmente-t-il généralement pendant une récession ?',
                        'choices' => [
                            'La demande diminue, la production ralentit et les entreprises peuvent réduire leurs embauches',
                            'Les entreprises recrutent toujours davantage',
                            'Les salaires deviennent toujours nuls',
                            'La population active disparaît',
                        ],
                        'correct' => 0,
                        'explanation' => 'Une récession peut réduire la demande et donc les besoins de recrutement des entreprises.',
                    ],
                    [
                        'question' => 'Pourquoi la formation peut-elle réduire le chômage structurel ?',
                        'choices' => [
                            'Elle peut rapprocher les compétences disponibles des compétences recherchées par les employeurs',
                            'Elle réduit toujours les qualifications',
                            'Elle supprime automatiquement tous les emplois peu qualifiés',
                            'Elle augmente nécessairement le chômage',
                        ],
                        'correct' => 0,
                        'explanation' => 'La formation peut réduire certaines inadéquations entre les compétences des travailleurs et les besoins des entreprises.',
                    ],
                    [
                        'question' => 'Pourquoi le chômage de longue durée peut-il être préoccupant ?',
                        'choices' => [
                            'Il peut entraîner une perte de compétences et réduire l’employabilité de certaines personnes',
                            'Il augmente toujours la productivité',
                            'Il garantit un meilleur salaire futur',
                            'Il élimine automatiquement les inadéquations de compétences',
                        ],
                        'correct' => 0,
                        'explanation' => 'Une longue période sans emploi peut entraîner une perte de compétences ou d’employabilité.',
                    ],
                    [
                        'question' => 'Qu’est-ce que le plein emploi dans un sens macroéconomique courant ?',
                        'choices' => [
                            'Une situation où le chômage est proche de son niveau structurel et frictionnel, sans chômage cyclique important',
                            'Une situation où absolument personne n’est sans emploi',
                            'Une situation où tous les travailleurs ont le même salaire',
                            'Une situation où les entreprises ne recrutent plus',
                        ],
                        'correct' => 0,
                        'explanation' => 'Le plein emploi ne signifie pas zéro chômage, car le chômage frictionnel et structurel peut subsister.',
                    ],
                    [
                        'question' => 'Pourquoi les créations d’emplois sont-elles importantes pour la croissance ?',
                        'choices' => [
                            'Elles peuvent augmenter la production, les revenus et la demande globale',
                            'Elles réduisent toujours la productivité',
                            'Elles n’ont aucun lien avec la production',
                            'Elles diminuent automatiquement la consommation',
                        ],
                        'correct' => 0,
                        'explanation' => 'La création d’emplois peut accroître la production et les revenus disponibles.',
                    ],
                ],
            ],

            // ============================================================
            // QUIZ 6
            // ============================================================
            [
                'title' => 'Politique budgétaire',
                'description' => 'Quiz débutant sur la politique budgétaire, les dépenses publiques, les impôts et la dette.',
                'questions' => [
                    [
                        'question' => 'Qu’est-ce que la politique budgétaire ?',
                        'choices' => [
                            'L’utilisation des dépenses publiques et des recettes fiscales pour influencer l’activité économique',
                            'La gestion des taux de change uniquement',
                            'La fixation des prix des entreprises',
                            'La gestion de la monnaie uniquement',
                        ],
                        'correct' => 0,
                        'explanation' => 'La politique budgétaire utilise principalement les dépenses publiques et les recettes fiscales.',
                    ],
                    [
                        'question' => 'Qu’est-ce qu’une politique budgétaire expansionniste ?',
                        'choices' => [
                            'Une politique visant à soutenir la demande globale par une hausse des dépenses publiques, une baisse des impôts, ou les deux',
                            'Une politique visant à réduire toujours la demande',
                            'Une politique visant à supprimer les dépenses publiques',
                            'Une politique qui augmente nécessairement le chômage',
                        ],
                        'correct' => 0,
                        'explanation' => 'Une politique expansionniste cherche généralement à soutenir la demande globale.',
                    ],
                    [
                        'question' => 'Qu’est-ce qu’une politique budgétaire restrictive ?',
                        'choices' => [
                            'Une politique visant généralement à réduire la demande globale',
                            'Une politique qui augmente toutes les dépenses publiques',
                            'Une politique qui réduit toujours les impôts',
                            'Une politique destinée à augmenter automatiquement le crédit bancaire',
                        ],
                        'correct' => 0,
                        'explanation' => 'Une politique restrictive cherche généralement à réduire la demande globale ou le déficit.',
                    ],
                    [
                        'question' => 'Qu’est-ce qu’un déficit budgétaire ?',
                        'choices' => [
                            'Une situation où les dépenses publiques dépassent les recettes publiques sur une période donnée',
                            'Une situation où les recettes dépassent les dépenses',
                            'Une hausse du PIB réel',
                            'Une baisse des exportations uniquement',
                        ],
                        'correct' => 0,
                        'explanation' => 'Un déficit apparaît lorsque les dépenses publiques dépassent les recettes.',
                    ],
                    [
                        'question' => 'Pourquoi les stabilisateurs automatiques sont-ils utiles ?',
                        'choices' => [
                            'Ils peuvent amortir les fluctuations de l’activité sans nouvelle décision discrétionnaire',
                            'Ils éliminent toutes les crises économiques',
                            'Ils augmentent toujours les impôts pendant les récessions',
                            'Ils remplacent toutes les politiques publiques',
                        ],
                        'correct' => 0,
                        'explanation' => 'Les stabilisateurs automatiques réagissent à la conjoncture sans nécessiter de nouvelle mesure discrétionnaire.',
                    ],
                    [
                        'question' => 'Pendant une récession, que peuvent faire les dépenses publiques ?',
                        'choices' => [
                            'Elles peuvent soutenir la demande globale et l’activité économique',
                            'Elles réduisent nécessairement la production',
                            'Elles suppriment toujours l’inflation',
                            'Elles réduisent automatiquement la population active',
                        ],
                        'correct' => 0,
                        'explanation' => 'Une hausse des dépenses publiques peut soutenir la demande globale pendant une période de faible activité.',
                    ],
                    [
                        'question' => 'Pourquoi une baisse des impôts peut-elle stimuler la consommation ?',
                        'choices' => [
                            'Elle peut augmenter le revenu disponible des ménages',
                            'Elle réduit toujours le revenu disponible',
                            'Elle supprime automatiquement l’épargne',
                            'Elle réduit toujours les importations',
                        ],
                        'correct' => 0,
                        'explanation' => 'Une baisse d’impôt peut augmenter le revenu disponible des ménages.',
                    ],
                    [
                        'question' => 'Qu’est-ce que la dette publique ?',
                        'choices' => [
                            'L’accumulation des engagements financiers des administrations publiques selon la définition retenue',
                            'La dette de tous les ménages',
                            'La dette d’une entreprise publique uniquement',
                            'Le montant des exportations',
                        ],
                        'correct' => 0,
                        'explanation' => 'La dette publique est un stock d’engagements financiers accumulés des administrations publiques.',
                    ],
                    [
                        'question' => 'Pourquoi une forte dette publique peut-elle limiter certaines politiques futures ?',
                        'choices' => [
                            'Le service de la dette peut mobiliser une part importante des ressources publiques',
                            'La dette rend les recettes publiques illimitées',
                            'Elle garantit une croissance élevée',
                            'Elle supprime les besoins de financement',
                        ],
                        'correct' => 0,
                        'explanation' => 'Le service de la dette peut réduire les ressources disponibles pour d’autres usages publics.',
                    ],
                    [
                        'question' => 'Pourquoi la politique budgétaire peut-elle être difficile à calibrer ?',
                        'choices' => [
                            'Les effets dépendent du contexte économique, du comportement des agents et des délais de mise en œuvre',
                            'Les effets sont toujours instantanés et certains',
                            'Les ménages ne réagissent jamais aux impôts',
                            'Les entreprises n’ajustent jamais leurs investissements',
                        ],
                        'correct' => 0,
                        'explanation' => 'Les effets dépendent du contexte et peuvent être retardés ou différents des effets prévus.',
                    ],
                ],
            ],

            // ============================================================
            // QUIZ 7
            // ============================================================
            [
                'title' => 'Politique monétaire et système bancaire',
                'description' => 'Quiz débutant sur la banque centrale, les taux d’intérêt, le crédit et la politique monétaire.',
                'questions' => [
                    [
                        'question' => 'Quel est le rôle général d’une banque centrale ?',
                        'choices' => [
                            'Conduire la politique monétaire et contribuer à la stabilité monétaire et financière selon son mandat',
                            'Produire tous les biens de consommation',
                            'Fixer tous les salaires',
                            'Gérer les entreprises privées',
                        ],
                        'correct' => 0,
                        'explanation' => 'Une banque centrale conduit la politique monétaire conformément à son mandat.',
                    ],
                    [
                        'question' => 'Qu’est-ce qu’un taux directeur ?',
                        'choices' => [
                            'Un taux d’intérêt fixé ou guidé par la banque centrale pour influencer les conditions financières',
                            'Le taux de chômage',
                            'Le taux d’imposition',
                            'Le taux de croissance de la population',
                        ],
                        'correct' => 0,
                        'explanation' => 'Le taux directeur est un instrument central utilisé pour influencer les conditions monétaires et financières.',
                    ],
                    [
                        'question' => 'Que cherche généralement une politique monétaire restrictive ?',
                        'choices' => [
                            'Ralentir la demande et les pressions inflationnistes',
                            'Stimuler fortement le crédit dans tous les cas',
                            'Réduire directement les impôts',
                            'Augmenter automatiquement les dépenses publiques',
                        ],
                        'correct' => 0,
                        'explanation' => 'Une politique restrictive cherche généralement à ralentir la demande et les pressions inflationnistes.',
                    ],
                    [
                        'question' => 'Que cherche généralement une politique monétaire expansionniste ?',
                        'choices' => [
                            'Soutenir l’activité en assouplissant les conditions monétaires et financières',
                            'Réduire systématiquement le crédit',
                            'Augmenter automatiquement les impôts',
                            'Réduire obligatoirement la consommation',
                        ],
                        'correct' => 0,
                        'explanation' => 'Une politique expansionniste cherche généralement à soutenir l’activité en facilitant les conditions financières.',
                    ],
                    [
                        'question' => 'Pourquoi une hausse du taux directeur peut-elle réduire l’emprunt ?',
                        'choices' => [
                            'Elle peut augmenter le coût du financement pour les ménages et les entreprises',
                            'Elle rend toujours le crédit moins cher',
                            'Elle augmente automatiquement les revenus',
                            'Elle supprime les banques commerciales',
                        ],
                        'correct' => 0,
                        'explanation' => 'Une hausse des taux peut rendre le crédit plus coûteux pour les emprunteurs.',
                    ],
                    [
                        'question' => 'Pourquoi les banques commerciales sont-elles importantes dans la transmission monétaire ?',
                        'choices' => [
                            'Leur offre de crédit influence les conditions de financement de nombreux agents économiques',
                            'Elles fixent directement l’inflation',
                            'Elles contrôlent seules le PIB',
                            'Elles remplacent nécessairement la banque centrale',
                        ],
                        'correct' => 0,
                        'explanation' => 'Les banques transmettent une partie des conditions monétaires aux ménages et entreprises par le crédit.',
                    ],
                    [
                        'question' => 'Pourquoi le taux d’intérêt influence-t-il l’investissement ?',
                        'choices' => [
                            'Il influence le coût du financement et la rentabilité de certains projets',
                            'Il détermine uniquement les exportations',
                            'Il n’a aucun lien avec le coût du capital',
                            'Il fixe directement les salaires',
                        ],
                        'correct' => 0,
                        'explanation' => 'Les taux d’intérêt influencent le coût d’emprunt et donc l’attractivité de certains investissements.',
                    ],
                    [
                        'question' => 'Pourquoi la crédibilité de la banque centrale est-elle importante ?',
                        'choices' => [
                            'Elle peut contribuer à ancrer les anticipations d’inflation',
                            'Elle garantit une croissance élevée',
                            'Elle supprime tous les chocs d’offre',
                            'Elle fixe tous les prix des biens',
                        ],
                        'correct' => 0,
                        'explanation' => 'La crédibilité peut influencer les anticipations des agents concernant l’inflation future.',
                    ],
                    [
                        'question' => 'Pourquoi la politique monétaire peut-elle avoir des effets retardés ?',
                        'choices' => [
                            'Les changements de taux se transmettent progressivement au crédit, aux dépenses, à la demande et aux prix',
                            'Tous les agents réagissent instantanément',
                            'Les banques ne réagissent jamais aux taux',
                            'L’inflation répond toujours immédiatement',
                        ],
                        'correct' => 0,
                        'explanation' => 'Les effets des changements monétaires passent par plusieurs étapes avant d’affecter pleinement l’économie.',
                    ],
                    [
                        'question' => 'Pourquoi une banque centrale ne peut-elle pas contrôler directement chaque décision économique ?',
                        'choices' => [
                            'Elle agit principalement à travers les conditions monétaires et financières, tandis que les ménages et entreprises prennent leurs propres décisions',
                            'Elle n’a aucun instrument monétaire',
                            'Elle dirige toutes les entreprises privées',
                            'Elle fixe tous les revenus des ménages',
                        ],
                        'correct' => 0,
                        'explanation' => 'La banque centrale influence les conditions financières mais ne décide pas directement des choix de chaque agent.',
                    ],
                ],
            ],

            // ============================================================
            // QUIZ 8
            // ============================================================
            [
                'title' => 'Commerce international et taux de change',
                'description' => 'Quiz débutant sur les exportations, les importations, les taux de change et le commerce international.',
                'questions' => [
                    [
                        'question' => 'Qu’est-ce qu’une exportation ?',
                        'choices' => [
                            'La vente d’un bien ou service à l’étranger',
                            'L’achat d’un bien étranger',
                            'Une dépense publique',
                            'Un investissement intérieur',
                        ],
                        'correct' => 0,
                        'explanation' => 'Une exportation correspond à une vente de biens ou services à l’étranger.',
                    ],
                    [
                        'question' => 'Qu’est-ce qu’une importation ?',
                        'choices' => [
                            'L’achat d’un bien ou service provenant de l’étranger',
                            'La vente d’un produit national à l’étranger',
                            'Une recette fiscale',
                            'Une dépense des ménages uniquement',
                        ],
                        'correct' => 0,
                        'explanation' => 'Une importation correspond à un achat de biens ou services à l’étranger.',
                    ],
                    [
                        'question' => 'Qu’est-ce que le taux de change ?',
                        'choices' => [
                            'Le prix d’une monnaie exprimé dans une autre monnaie',
                            'Le taux de chômage',
                            'Le taux de croissance',
                            'Le niveau des impôts',
                        ],
                        'correct' => 0,
                        'explanation' => 'Le taux de change exprime la valeur d’une monnaie en unités d’une autre monnaie.',
                    ],
                    [
                        'question' => 'Que signifie une appréciation de la monnaie nationale ?',
                        'choices' => [
                            'Une hausse de sa valeur relative par rapport à une autre monnaie',
                            'Une baisse automatique de sa valeur',
                            'Une hausse du chômage',
                            'Une baisse obligatoire du PIB',
                        ],
                        'correct' => 0,
                        'explanation' => 'Une appréciation signifie que la monnaie gagne de la valeur par rapport à une autre monnaie.',
                    ],
                    [
                        'question' => 'Une monnaie nationale qui s’apprécie peut rendre les exportations :',
                        'choices' => [
                            'Relativement plus coûteuses pour les acheteurs étrangers',
                            'Toujours moins coûteuses',
                            'Toujours gratuites',
                            'Indépendantes du taux de change',
                        ],
                        'correct' => 0,
                        'explanation' => 'Une monnaie plus forte peut rendre les produits domestiques plus chers pour les acheteurs étrangers.',
                    ],
                    [
                        'question' => 'Une dépréciation de la monnaie peut rendre les importations :',
                        'choices' => [
                            'Plus coûteuses en monnaie nationale',
                            'Toujours moins coûteuses',
                            'Toujours gratuites',
                            'Indépendantes du taux de change',
                        ],
                        'correct' => 0,
                        'explanation' => 'Une dépréciation rend généralement les biens étrangers plus chers en monnaie nationale.',
                    ],
                    [
                        'question' => 'Qu’est-ce que la balance commerciale ?',
                        'choices' => [
                            'La différence entre les exportations et les importations de biens',
                            'La différence entre impôts et dépenses publiques',
                            'La différence entre consommation et épargne',
                            'La différence entre salaires et bénéfices',
                        ],
                        'correct' => 0,
                        'explanation' => 'La balance commerciale correspond à la différence entre exportations et importations de biens.',
                    ],
                    [
                        'question' => 'Pourquoi les pays échangent-ils des biens et services ?',
                        'choices' => [
                            'Pour bénéficier de la spécialisation et de différences de coûts et de ressources',
                            'Parce qu’aucun pays ne peut produire localement',
                            'Pour supprimer toute concurrence nationale',
                            'Pour éviter toute production intérieure',
                        ],
                        'correct' => 0,
                        'explanation' => 'Les échanges permettent notamment de profiter de la spécialisation et des différences entre les pays.',
                    ],
                    [
                        'question' => 'Qu’est-ce qu’un avantage comparatif ?',
                        'choices' => [
                            'La capacité à produire un bien avec un coût d’opportunité relativement inférieur',
                            'La capacité à tout produire à moindre coût absolu',
                            'La capacité à contrôler toutes les monnaies',
                            'La capacité à fixer tous les prix mondiaux',
                        ],
                        'correct' => 0,
                        'explanation' => 'L’avantage comparatif repose sur un coût d’opportunité relativement plus faible.',
                    ],
                    [
                        'question' => 'Quel effet un droit de douane peut-il avoir ?',
                        'choices' => [
                            'Il peut augmenter le prix intérieur d’un produit importé et réduire les importations',
                            'Il réduit toujours les prix intérieurs',
                            'Il augmente nécessairement les importations',
                            'Il supprime toujours la production nationale',
                        ],
                        'correct' => 0,
                        'explanation' => 'Un droit de douane peut augmenter le prix intérieur d’un bien importé et réduire sa quantité importée.',
                    ],
                ],
            ],
        ];

        foreach ($quizzes as $quizData) {

            $quiz = Quiz::updateOrCreate(
                [
                    'subject_id' => $subject->id,
                    'title' => $quizData['title'],
                ],
                [
                    'owner_id' => null,
                    'description' => $quizData['description'],
                    'duration' => 10,
                    'passing_score' => 50,
                    'total_marks' => 10,
                    'is_active' => true,
                    'difficulty' => 'Beginner',
                ]
            );

            foreach ($quizData['questions'] as $index => $questionData) {

                $question = Question::updateOrCreate(
                    [
                        'quiz_id' => $quiz->id,
                        'order' => $index + 1,
                    ],
                    [
                        'question' => $questionData['question'],
                        'type' => 'multiple_choice',
                        'marks' => 1,
                        'explanation' => $questionData['explanation'] ?? null,
                    ]
                );

                $question->choices()->delete();

                $choices = [];

                foreach ($questionData['choices'] as $choiceIndex => $choiceText) {
                    $choices[] = [
                        'choice_text' => $choiceText,
                        'is_correct' => $choiceIndex === $questionData['correct'],
                    ];
                }

                shuffle($choices);

                foreach ($choices as $choiceIndex => $choice) {
                    Choice::create([
                        'question_id' => $question->id,
                        'choice_text' => $choice['choice_text'],
                        'is_correct' => $choice['is_correct'],
                        'order' => $choiceIndex + 1,
                    ]);
                }
            }
        }
    }
}