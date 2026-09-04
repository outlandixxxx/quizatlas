```php
<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Major;
use App\Models\Subject;
use App\Models\Quiz;
use App\Models\Question;
use App\Models\Answer;

class MacroeconomicsBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $major = Major::where('slug', 'economy')->firstOrFail();

        $subject = Subject::where('major_id', $major->id)
            ->where('slug', 'macroeconomics')
            ->firstOrFail();

        $quizzes = [
            [
                'title' => 'Introduction à la macroéconomie',
                'questions' => [
                    [
                        'question' => 'Que cherche principalement à étudier la macroéconomie ?',
                        'answers' => [
                            ['answer' => 'Le fonctionnement de l’économie dans son ensemble à travers les grands agrégats économiques', 'iscorrect' => true],
                            ['answer' => 'Uniquement les décisions d’un consommateur', 'iscorrect' => false],
                            ['answer' => 'Uniquement les coûts d’une entreprise', 'iscorrect' => false],
                            ['answer' => 'Uniquement les prix d’un produit', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quels sont des objectifs classiques de la macroéconomie ?',
                        'answers' => [
                            ['answer' => 'La croissance, l’emploi, la stabilité des prix et la stabilité économique', 'iscorrect' => true],
                            ['answer' => 'Uniquement l’augmentation des profits des entreprises', 'iscorrect' => false],
                            ['answer' => 'Uniquement la hausse des exportations', 'iscorrect' => false],
                            ['answer' => 'Uniquement la réduction de la population', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce qu’un agrégat macroéconomique ?',
                        'answers' => [
                            ['answer' => 'Une mesure globale représentant une dimension importante de l’économie', 'iscorrect' => true],
                            ['answer' => 'Une dépense effectuée par un seul ménage', 'iscorrect' => false],
                            ['answer' => 'Une facture d’entreprise', 'iscorrect' => false],
                            ['answer' => 'Un prix fixé par un seul vendeur', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la macroéconomie étudie-t-elle les fluctuations économiques ?',
                        'answers' => [
                            ['answer' => 'Pour comprendre les variations de la production, de l’emploi, des revenus et des prix au cours du temps', 'iscorrect' => true],
                            ['answer' => 'Pour fixer le prix de chaque produit', 'iscorrect' => false],
                            ['answer' => 'Pour déterminer les préférences de chaque consommateur', 'iscorrect' => false],
                            ['answer' => 'Pour supprimer toutes les entreprises privées', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel indicateur est particulièrement utilisé pour mesurer la production globale ?',
                        'answers' => [
                            ['answer' => 'Le produit intérieur brut', 'iscorrect' => true],
                            ['answer' => 'Le taux de chômage uniquement', 'iscorrect' => false],
                            ['answer' => 'Le taux d’intérêt uniquement', 'iscorrect' => false],
                            ['answer' => 'Le salaire minimum', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi l’emploi est-il une question macroéconomique importante ?',
                        'answers' => [
                            ['answer' => 'Parce qu’il influence les revenus des ménages, la production et la demande globale', 'iscorrect' => true],
                            ['answer' => 'Parce qu’il détermine uniquement les exportations', 'iscorrect' => false],
                            ['answer' => 'Parce qu’il n’a aucun lien avec la production', 'iscorrect' => false],
                            ['answer' => 'Parce qu’il concerne uniquement les banques centrales', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi l’inflation est-elle suivie par les autorités économiques ?',
                        'answers' => [
                            ['answer' => 'Parce qu’une variation durable du niveau général des prix affecte le pouvoir d’achat et les décisions économiques', 'iscorrect' => true],
                            ['answer' => 'Parce qu’elle mesure directement la croissance démographique', 'iscorrect' => false],
                            ['answer' => 'Parce qu’elle détermine automatiquement les exportations', 'iscorrect' => false],
                            ['answer' => 'Parce qu’elle mesure uniquement les bénéfices des entreprises', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce qu’une récession ?',
                        'answers' => [
                            ['answer' => 'Une période de recul significatif de l’activité économique', 'iscorrect' => true],
                            ['answer' => 'Une période de croissance exceptionnelle', 'iscorrect' => false],
                            ['answer' => 'Une période où tous les prix restent constants', 'iscorrect' => false],
                            ['answer' => 'Une période où les exportations deviennent nulles', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel rôle les statistiques macroéconomiques jouent-elles ?',
                        'answers' => [
                            ['answer' => 'Elles permettent de mesurer et d’analyser l’état et l’évolution de l’économie', 'iscorrect' => true],
                            ['answer' => 'Elles garantissent des prévisions parfaitement exactes', 'iscorrect' => false],
                            ['answer' => 'Elles remplacent toutes les décisions économiques', 'iscorrect' => false],
                            ['answer' => 'Elles éliminent toutes les incertitudes', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les décisions économiques sont-elles parfois difficiles au niveau macroéconomique ?',
                        'answers' => [
                            ['answer' => 'Parce que les objectifs économiques peuvent entrer en tension et que les effets des politiques sont incertains', 'iscorrect' => true],
                            ['answer' => 'Parce que toutes les économies réagissent exactement de la même manière', 'iscorrect' => false],
                            ['answer' => 'Parce que les politiques économiques n’ont aucun effet', 'iscorrect' => false],
                            ['answer' => 'Parce que les indicateurs économiques sont toujours constants', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Produit intérieur brut',
                'questions' => [
                    [
                        'question' => 'Que mesure principalement le PIB ?',
                        'answers' => [
                            ['answer' => 'La valeur des biens et services finaux produits sur un territoire pendant une période donnée', 'iscorrect' => true],
                            ['answer' => 'Le patrimoine total des ménages', 'iscorrect' => false],
                            ['answer' => 'Le montant total des exportations uniquement', 'iscorrect' => false],
                            ['answer' => 'Le nombre total de travailleurs', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les biens intermédiaires ne sont-ils généralement pas comptés séparément dans le PIB ?',
                        'answers' => [
                            ['answer' => 'Pour éviter le double comptage de leur valeur dans la production finale', 'iscorrect' => true],
                            ['answer' => 'Parce qu’ils n’ont aucune valeur économique', 'iscorrect' => false],
                            ['answer' => 'Parce qu’ils sont toujours importés', 'iscorrect' => false],
                            ['answer' => 'Parce qu’ils ne sont jamais utilisés dans la production', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Dans l’approche par les dépenses, la consommation correspond principalement :',
                        'answers' => [
                            ['answer' => 'Aux dépenses des ménages en biens et services finaux', 'iscorrect' => true],
                            ['answer' => 'Aux achats de machines par les entreprises', 'iscorrect' => false],
                            ['answer' => 'Aux dépenses publiques uniquement', 'iscorrect' => false],
                            ['answer' => 'Aux exportations uniquement', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Dans l’approche par les dépenses, l’investissement comprend notamment :',
                        'answers' => [
                            ['answer' => 'Les dépenses en capital productif et certaines variations de stocks', 'iscorrect' => true],
                            ['answer' => 'Les achats alimentaires des ménages', 'iscorrect' => false],
                            ['answer' => 'Les recettes fiscales', 'iscorrect' => false],
                            ['answer' => 'Les salaires des fonctionnaires uniquement', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Que représentent les exportations nettes ?',
                        'answers' => [
                            ['answer' => 'Les exportations moins les importations', 'iscorrect' => true],
                            ['answer' => 'Les importations moins les exportations', 'iscorrect' => false],
                            ['answer' => 'Les dépenses publiques moins les impôts', 'iscorrect' => false],
                            ['answer' => 'La consommation moins l’épargne', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les importations sont-elles soustraites dans le calcul du PIB par les dépenses ?',
                        'answers' => [
                            ['answer' => 'Parce qu’une partie des dépenses intérieures correspond à une production réalisée à l’étranger', 'iscorrect' => true],
                            ['answer' => 'Parce que les importations sont toujours nuisibles', 'iscorrect' => false],
                            ['answer' => 'Parce qu’elles ne représentent jamais une dépense', 'iscorrect' => false],
                            ['answer' => 'Parce qu’elles réduisent toujours la consommation', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Que signifie le terme « intérieur » dans le PIB ?',
                        'answers' => [
                            ['answer' => 'La production est réalisée à l’intérieur du territoire économique considéré', 'iscorrect' => true],
                            ['answer' => 'Seules les entreprises nationales sont comptabilisées', 'iscorrect' => false],
                            ['answer' => 'Les échanges extérieurs sont exclus', 'iscorrect' => false],
                            ['answer' => 'Seules les entreprises publiques sont incluses', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce que le PIB par habitant ?',
                        'answers' => [
                            ['answer' => 'Le PIB rapporté au nombre d’habitants', 'iscorrect' => true],
                            ['answer' => 'Le PIB multiplié par le nombre d’habitants', 'iscorrect' => false],
                            ['answer' => 'Le revenu exact de chaque personne', 'iscorrect' => false],
                            ['answer' => 'Le patrimoine moyen de chaque entreprise', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Une hausse du PIB nominal peut résulter :',
                        'answers' => [
                            ['answer' => 'D’une hausse de la production, des prix, ou des deux', 'iscorrect' => true],
                            ['answer' => 'Uniquement d’une hausse des quantités produites', 'iscorrect' => false],
                            ['answer' => 'Uniquement d’une baisse des prix', 'iscorrect' => false],
                            ['answer' => 'Uniquement d’une baisse du chômage', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle est une limite importante du PIB comme mesure du bien-être ?',
                        'answers' => [
                            ['answer' => 'Il ne mesure pas complètement les inégalités, le loisir, l’environnement ou certaines activités non marchandes', 'iscorrect' => true],
                            ['answer' => 'Il ne mesure aucune production', 'iscorrect' => false],
                            ['answer' => 'Il mesure parfaitement la qualité de vie', 'iscorrect' => false],
                            ['answer' => 'Il mesure uniquement la production agricole', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Croissance économique',
                'questions' => [
                    [
                        'question' => 'Qu’est-ce que la croissance économique ?',
                        'answers' => [
                            ['answer' => 'Une augmentation durable de la production de biens et services d’une économie', 'iscorrect' => true],
                            ['answer' => 'Une hausse temporaire d’un seul prix', 'iscorrect' => false],
                            ['answer' => 'Une réduction obligatoire du chômage', 'iscorrect' => false],
                            ['answer' => 'Une augmentation des importations uniquement', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi le PIB réel est-il utilisé pour mesurer la croissance ?',
                        'answers' => [
                            ['answer' => 'Il permet de mieux isoler l’évolution des quantités produites des variations générales des prix', 'iscorrect' => true],
                            ['answer' => 'Il mesure uniquement l’inflation', 'iscorrect' => false],
                            ['answer' => 'Il élimine toutes les erreurs statistiques', 'iscorrect' => false],
                            ['answer' => 'Il mesure directement le bonheur', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel facteur contribue fortement à la croissance économique à long terme ?',
                        'answers' => [
                            ['answer' => 'Les gains de productivité', 'iscorrect' => true],
                            ['answer' => 'Une inflation très élevée', 'iscorrect' => false],
                            ['answer' => 'Une diminution permanente du capital', 'iscorrect' => false],
                            ['answer' => 'Une baisse continue de l’efficacité', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Comment le progrès technologique favorise-t-il la croissance ?',
                        'answers' => [
                            ['answer' => 'Il peut permettre de produire davantage ou plus efficacement avec les ressources disponibles', 'iscorrect' => true],
                            ['answer' => 'Il réduit toujours la production', 'iscorrect' => false],
                            ['answer' => 'Il rend les ressources illimitées', 'iscorrect' => false],
                            ['answer' => 'Il supprime automatiquement toutes les dépenses', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce que le capital humain ?',
                        'answers' => [
                            ['answer' => 'L’ensemble des connaissances, compétences et capacités productives des personnes', 'iscorrect' => true],
                            ['answer' => 'Uniquement les machines', 'iscorrect' => false],
                            ['answer' => 'Uniquement les ressources naturelles', 'iscorrect' => false],
                            ['answer' => 'La monnaie détenue par les ménages', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi l’éducation peut-elle contribuer à la croissance économique ?',
                        'answers' => [
                            ['answer' => 'Elle peut améliorer la productivité, les compétences et la capacité d’innovation', 'iscorrect' => true],
                            ['answer' => 'Elle réduit toujours la productivité', 'iscorrect' => false],
                            ['answer' => 'Elle élimine tous les besoins de capital physique', 'iscorrect' => false],
                            ['answer' => 'Elle garantit automatiquement un emploi', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les infrastructures sont-elles importantes pour la croissance ?',
                        'answers' => [
                            ['answer' => 'Elles peuvent réduire certains coûts de transport, de communication et de production', 'iscorrect' => true],
                            ['answer' => 'Elles empêchent toujours les échanges', 'iscorrect' => false],
                            ['answer' => 'Elles remplacent tous les travailleurs', 'iscorrect' => false],
                            ['answer' => 'Elles réduisent nécessairement la productivité', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la productivité du travail est-elle importante ?',
                        'answers' => [
                            ['answer' => 'Elle indique la quantité de production obtenue par unité de travail', 'iscorrect' => true],
                            ['answer' => 'Elle mesure uniquement le chômage', 'iscorrect' => false],
                            ['answer' => 'Elle mesure uniquement les exportations', 'iscorrect' => false],
                            ['answer' => 'Elle détermine directement le taux d’intérêt', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce qu’une croissance intensive ?',
                        'answers' => [
                            ['answer' => 'Une croissance reposant principalement sur l’amélioration de la productivité des facteurs', 'iscorrect' => true],
                            ['answer' => 'Une croissance obtenue uniquement en augmentant la population', 'iscorrect' => false],
                            ['answer' => 'Une croissance obtenue uniquement par des importations', 'iscorrect' => false],
                            ['answer' => 'Une diminution de la production par travailleur', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les institutions économiques peuvent-elles soutenir la croissance ?',
                        'answers' => [
                            ['answer' => 'Des institutions efficaces peuvent sécuriser les droits, les contrats et les incitations à investir et innover', 'iscorrect' => true],
                            ['answer' => 'Elles rendent toutes les ressources gratuites', 'iscorrect' => false],
                            ['answer' => 'Elles éliminent tous les risques économiques', 'iscorrect' => false],
                            ['answer' => 'Elles garantissent exactement le même niveau de vie partout', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Inflation et pouvoir d’achat',
                'questions' => [
                    [
                        'question' => 'Qu’est-ce que l’inflation ?',
                        'answers' => [
                            ['answer' => 'Une hausse générale et persistante du niveau des prix', 'iscorrect' => true],
                            ['answer' => 'Une hausse du prix d’un seul produit', 'iscorrect' => false],
                            ['answer' => 'Une baisse générale des prix', 'iscorrect' => false],
                            ['answer' => 'Une augmentation des salaires uniquement', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce que la déflation ?',
                        'answers' => [
                            ['answer' => 'Une baisse générale et persistante du niveau des prix', 'iscorrect' => true],
                            ['answer' => 'Une baisse d’un seul prix', 'iscorrect' => false],
                            ['answer' => 'Une hausse générale des salaires', 'iscorrect' => false],
                            ['answer' => 'Une hausse du PIB réel', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Que se passe-t-il généralement avec le pouvoir d’achat de la monnaie lorsque les prix augmentent ?',
                        'answers' => [
                            ['answer' => 'Il diminue', 'iscorrect' => true],
                            ['answer' => 'Il augmente toujours', 'iscorrect' => false],
                            ['answer' => 'Il reste toujours identique', 'iscorrect' => false],
                            ['answer' => 'Il devient automatiquement nul', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce qu’un indice des prix à la consommation ?',
                        'answers' => [
                            ['answer' => 'Un indicateur de l’évolution des prix d’un panier de biens et services consommés par les ménages', 'iscorrect' => true],
                            ['answer' => 'Un indicateur du chômage uniquement', 'iscorrect' => false],
                            ['answer' => 'Un indicateur de la production uniquement', 'iscorrect' => false],
                            ['answer' => 'Un indicateur du patrimoine national', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une inflation élevée peut-elle perturber les décisions économiques ?',
                        'answers' => [
                            ['answer' => 'Elle augmente l’incertitude concernant les prix, les revenus réels et les décisions futures', 'iscorrect' => true],
                            ['answer' => 'Elle supprime toute incertitude', 'iscorrect' => false],
                            ['answer' => 'Elle garantit une baisse du chômage', 'iscorrect' => false],
                            ['answer' => 'Elle rend les prix parfaitement prévisibles', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce que l’inflation importée ?',
                        'answers' => [
                            ['answer' => 'Une inflation liée notamment au renchérissement des biens ou intrants provenant de l’étranger', 'iscorrect' => true],
                            ['answer' => 'Une inflation causée uniquement par les salaires domestiques', 'iscorrect' => false],
                            ['answer' => 'Une diminution du prix des importations', 'iscorrect' => false],
                            ['answer' => 'Une baisse de la demande intérieure', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une dépréciation de la monnaie peut-elle accroître certaines pressions inflationnistes ?',
                        'answers' => [
                            ['answer' => 'Elle peut rendre les biens importés plus chers en monnaie nationale', 'iscorrect' => true],
                            ['answer' => 'Elle réduit toujours le prix des importations', 'iscorrect' => false],
                            ['answer' => 'Elle supprime les importations', 'iscorrect' => false],
                            ['answer' => 'Elle garantit une baisse des salaires', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Une inflation inattendue peut redistribuer le revenu réel entre :',
                        'answers' => [
                            ['answer' => 'Les créanciers et les débiteurs', 'iscorrect' => true],
                            ['answer' => 'Uniquement les exportateurs et les importateurs', 'iscorrect' => false],
                            ['answer' => 'Uniquement les producteurs agricoles', 'iscorrect' => false],
                            ['answer' => 'Uniquement les banques centrales', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une faible inflation prévisible peut-elle être plus facile à gérer qu’une inflation forte et instable ?',
                        'answers' => [
                            ['answer' => 'Les agents peuvent mieux anticiper l’évolution des prix et adapter leurs décisions', 'iscorrect' => true],
                            ['answer' => 'Une inflation prévisible supprime tous les coûts', 'iscorrect' => false],
                            ['answer' => 'Elle garantit automatiquement la croissance', 'iscorrect' => false],
                            ['answer' => 'Elle élimine tous les écarts de revenus', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la stabilité des prix est-elle un objectif important ?',
                        'answers' => [
                            ['answer' => 'Elle facilite les décisions économiques et protège davantage la valeur de la monnaie', 'iscorrect' => true],
                            ['answer' => 'Elle garantit toujours le plein emploi', 'iscorrect' => false],
                            ['answer' => 'Elle élimine toutes les crises', 'iscorrect' => false],
                            ['answer' => 'Elle garantit une croissance identique chaque année', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Chômage et emploi',
                'questions' => [
                    [
                        'question' => 'Qu’est-ce que la population active ?',
                        'answers' => [
                            ['answer' => 'Les personnes en emploi et les personnes sans emploi qui recherchent activement un emploi selon la définition retenue', 'iscorrect' => true],
                            ['answer' => 'Toutes les personnes d’un pays', 'iscorrect' => false],
                            ['answer' => 'Uniquement les salariés du secteur public', 'iscorrect' => false],
                            ['answer' => 'Uniquement les retraités', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce que le taux de chômage ?',
                        'answers' => [
                            ['answer' => 'Le nombre de chômeurs rapporté à la population active', 'iscorrect' => true],
                            ['answer' => 'Le nombre de chômeurs rapporté à la population totale', 'iscorrect' => false],
                            ['answer' => 'Le nombre d’emplois rapporté au PIB', 'iscorrect' => false],
                            ['answer' => 'Le nombre de travailleurs rapporté au nombre d’entreprises', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce que le chômage frictionnel ?',
                        'answers' => [
                            ['answer' => 'Le chômage lié notamment aux transitions entre emplois et au temps nécessaire pour trouver un poste', 'iscorrect' => true],
                            ['answer' => 'Le chômage provoqué uniquement par les crises financières', 'iscorrect' => false],
                            ['answer' => 'Le chômage causé uniquement par l’inflation', 'iscorrect' => false],
                            ['answer' => 'Le chômage uniquement saisonnier', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce que le chômage structurel ?',
                        'answers' => [
                            ['answer' => 'Le chômage lié notamment aux inadéquations durables entre les compétences et les emplois disponibles', 'iscorrect' => true],
                            ['answer' => 'Le chômage causé uniquement par une baisse temporaire de la demande', 'iscorrect' => false],
                            ['answer' => 'Le chômage lié uniquement aux vacances', 'iscorrect' => false],
                            ['answer' => 'Le chômage lié uniquement aux importations', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce que le chômage cyclique ?',
                        'answers' => [
                            ['answer' => 'Le chômage associé aux fluctuations de l’activité économique', 'iscorrect' => true],
                            ['answer' => 'Le chômage lié uniquement à la formation', 'iscorrect' => false],
                            ['answer' => 'Le chômage permanent de certains métiers', 'iscorrect' => false],
                            ['answer' => 'Le chômage volontaire uniquement', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi le chômage augmente-t-il généralement pendant une récession ?',
                        'answers' => [
                            ['answer' => 'La demande diminue, la production ralentit et les entreprises peuvent réduire leurs embauches', 'iscorrect' => true],
                            ['answer' => 'Les entreprises recrutent toujours davantage', 'iscorrect' => false],
                            ['answer' => 'Les salaires deviennent toujours nuls', 'iscorrect' => false],
                            ['answer' => 'La population active disparaît', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la formation peut-elle réduire le chômage structurel ?',
                        'answers' => [
                            ['answer' => 'Elle peut rapprocher les compétences disponibles des compétences recherchées par les employeurs', 'iscorrect' => true],
                            ['answer' => 'Elle réduit toujours les qualifications', 'iscorrect' => false],
                            ['answer' => 'Elle supprime automatiquement tous les emplois peu qualifiés', 'iscorrect' => false],
                            ['answer' => 'Elle augmente nécessairement le chômage', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi le chômage de longue durée peut-il être préoccupant ?',
                        'answers' => [
                            ['answer' => 'Il peut entraîner une perte de compétences et réduire l’employabilité de certaines personnes', 'iscorrect' => true],
                            ['answer' => 'Il augmente toujours la productivité', 'iscorrect' => false],
                            ['answer' => 'Il garantit un meilleur salaire futur', 'iscorrect' => false],
                            ['answer' => 'Il élimine automatiquement les inadéquations de compétences', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce que le plein emploi dans un sens macroéconomique courant ?',
                        'answers' => [
                            ['answer' => 'Une situation où le chômage est proche de son niveau structurel et frictionnel, sans chômage cyclique important', 'iscorrect' => true],
                            ['answer' => 'Une situation où absolument personne n’est sans emploi', 'iscorrect' => false],
                            ['answer' => 'Une situation où tous les travailleurs ont le même salaire', 'iscorrect' => false],
                            ['answer' => 'Une situation où les entreprises ne recrutent plus', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les créations d’emplois sont-elles importantes pour la croissance ?',
                        'answers' => [
                            ['answer' => 'Elles peuvent augmenter la production, les revenus et la demande globale', 'iscorrect' => true],
                            ['answer' => 'Elles réduisent toujours la productivité', 'iscorrect' => false],
                            ['answer' => 'Elles n’ont aucun lien avec la production', 'iscorrect' => false],
                            ['answer' => 'Elles diminuent automatiquement la consommation', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Politique budgétaire',
                'questions' => [
                    [
                        'question' => 'Qu’est-ce que la politique budgétaire ?',
                        'answers' => [
                            ['answer' => 'L’utilisation des dépenses publiques et des recettes fiscales pour influencer l’activité économique', 'iscorrect' => true],
                            ['answer' => 'La gestion des taux de change uniquement', 'iscorrect' => false],
                            ['answer' => 'La fixation des prix des entreprises', 'iscorrect' => false],
                            ['answer' => 'La gestion de la monnaie uniquement', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce qu’une politique budgétaire expansionniste ?',
                        'answers' => [
                            ['answer' => 'Une politique visant à soutenir la demande globale par une hausse des dépenses publiques, une baisse des impôts, ou les deux', 'iscorrect' => true],
                            ['answer' => 'Une politique visant à réduire toujours la demande', 'iscorrect' => false],
                            ['answer' => 'Une politique visant à supprimer les dépenses publiques', 'iscorrect' => false],
                            ['answer' => 'Une politique qui augmente nécessairement le chômage', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce qu’une politique budgétaire restrictive ?',
                        'answers' => [
                            ['answer' => 'Une politique visant généralement à réduire la demande globale', 'iscorrect' => true],
                            ['answer' => 'Une politique qui augmente toutes les dépenses publiques', 'iscorrect' => false],
                            ['answer' => 'Une politique qui réduit toujours les impôts', 'iscorrect' => false],
                            ['answer' => 'Une politique destinée à augmenter automatiquement le crédit bancaire', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce qu’un déficit budgétaire ?',
                        'answers' => [
                            ['answer' => 'Une situation où les dépenses publiques dépassent les recettes publiques sur une période donnée', 'iscorrect' => true],
                            ['answer' => 'Une situation où les recettes dépassent les dépenses', 'iscorrect' => false],
                            ['answer' => 'Une hausse du PIB réel', 'iscorrect' => false],
                            ['answer' => 'Une baisse des exportations uniquement', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les stabilisateurs automatiques sont-ils utiles ?',
                        'answers' => [
                            ['answer' => 'Ils peuvent amortir les fluctuations de l’activité sans nouvelle décision discrétionnaire', 'iscorrect' => true],
                            ['answer' => 'Ils éliminent toutes les crises économiques', 'iscorrect' => false],
                            ['answer' => 'Ils augmentent toujours les impôts pendant les récessions', 'iscorrect' => false],
                            ['answer' => 'Ils remplacent toutes les politiques publiques', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pendant une récession, que peuvent faire les dépenses publiques ?',
                        'answers' => [
                            ['answer' => 'Elles peuvent soutenir la demande globale et l’activité économique', 'iscorrect' => true],
                            ['answer' => 'Elles réduisent nécessairement la production', 'iscorrect' => false],
                            ['answer' => 'Elles suppriment toujours l’inflation', 'iscorrect' => false],
                            ['answer' => 'Elles réduisent automatiquement la population active', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une baisse des impôts peut-elle stimuler la consommation ?',
                        'answers' => [
                            ['answer' => 'Elle peut augmenter le revenu disponible des ménages', 'iscorrect' => true],
                            ['answer' => 'Elle réduit toujours le revenu disponible', 'iscorrect' => false],
                            ['answer' => 'Elle supprime automatiquement l’épargne', 'iscorrect' => false],
                            ['answer' => 'Elle réduit toujours les importations', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce que la dette publique ?',
                        'answers' => [
                            ['answer' => 'L’accumulation des engagements financiers des administrations publiques selon la définition retenue', 'iscorrect' => true],
                            ['answer' => 'La dette de tous les ménages', 'iscorrect' => false],
                            ['answer' => 'La dette d’une entreprise publique uniquement', 'iscorrect' => false],
                            ['answer' => 'Le montant des exportations', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une forte dette publique peut-elle limiter certaines politiques futures ?',
                        'answers' => [
                            ['answer' => 'Le service de la dette peut mobiliser une part importante des ressources publiques', 'iscorrect' => true],
                            ['answer' => 'La dette rend les recettes publiques illimitées', 'iscorrect' => false],
                            ['answer' => 'Elle garantit une croissance élevée', 'iscorrect' => false],
                            ['answer' => 'Elle supprime les besoins de financement', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la politique budgétaire peut-elle être difficile à calibrer ?',
                        'answers' => [
                            ['answer' => 'Les effets dépendent du contexte économique, du comportement des agents et des délais de mise en œuvre', 'iscorrect' => true],
                            ['answer' => 'Les effets sont toujours instantanés et certains', 'iscorrect' => false],
                            ['answer' => 'Les ménages ne réagissent jamais aux impôts', 'iscorrect' => false],
                            ['answer' => 'Les entreprises n’ajustent jamais leurs investissements', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Politique monétaire et système bancaire',
                'questions' => [
                    [
                        'question' => 'Quel est le rôle général d’une banque centrale ?',
                        'answers' => [
                            ['answer' => 'Conduire la politique monétaire et contribuer à la stabilité monétaire et financière selon son mandat', 'iscorrect' => true],
                            ['answer' => 'Produire tous les biens de consommation', 'iscorrect' => false],
                            ['answer' => 'Fixer tous les salaires', 'iscorrect' => false],
                            ['answer' => 'Gérer les entreprises privées', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce qu’un taux directeur ?',
                        'answers' => [
                            ['answer' => 'Un taux d’intérêt fixé ou guidé par la banque centrale pour influencer les conditions financières', 'iscorrect' => true],
                            ['answer' => 'Le taux de chômage', 'iscorrect' => false],
                            ['answer' => 'Le taux d’imposition', 'iscorrect' => false],
                            ['answer' => 'Le taux de croissance de la population', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Que cherche généralement une politique monétaire restrictive ?',
                        'answers' => [
                            ['answer' => 'Ralentir la demande et les pressions inflationnistes', 'iscorrect' => true],
                            ['answer' => 'Stimuler fortement le crédit dans tous les cas', 'iscorrect' => false],
                            ['answer' => 'Réduire directement les impôts', 'iscorrect' => false],
                            ['answer' => 'Augmenter automatiquement les dépenses publiques', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Que cherche généralement une politique monétaire expansionniste ?',
                        'answers' => [
                            ['answer' => 'Soutenir l’activité en assouplissant les conditions monétaires et financières', 'iscorrect' => true],
                            ['answer' => 'Réduire systématiquement le crédit', 'iscorrect' => false],
                            ['answer' => 'Augmenter automatiquement les impôts', 'iscorrect' => false],
                            ['answer' => 'Réduire obligatoirement la consommation', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une hausse du taux directeur peut-elle réduire l’emprunt ?',
                        'answers' => [
                            ['answer' => 'Elle peut augmenter le coût du financement pour les ménages et les entreprises', 'iscorrect' => true],
                            ['answer' => 'Elle rend toujours le crédit moins cher', 'iscorrect' => false],
                            ['answer' => 'Elle augmente automatiquement les revenus', 'iscorrect' => false],
                            ['answer' => 'Elle supprime les banques commerciales', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les banques commerciales sont-elles importantes dans la transmission monétaire ?',
                        'answers' => [
                            ['answer' => 'Leur offre de crédit influence les conditions de financement de nombreux agents économiques', 'iscorrect' => true],
                            ['answer' => 'Elles fixent directement l’inflation', 'iscorrect' => false],
                            ['answer' => 'Elles contrôlent seules le PIB', 'iscorrect' => false],
                            ['answer' => 'Elles remplacent nécessairement la banque centrale', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi le taux d’intérêt influence-t-il l’investissement ?',
                        'answers' => [
                            ['answer' => 'Il influence le coût du financement et la rentabilité de certains projets', 'iscorrect' => true],
                            ['answer' => 'Il détermine uniquement les exportations', 'iscorrect' => false],
                            ['answer' => 'Il n’a aucun lien avec le coût du capital', 'iscorrect' => false],
                            ['answer' => 'Il fixe directement les salaires', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la crédibilité de la banque centrale est-elle importante ?',
                        'answers' => [
                            ['answer' => 'Elle peut contribuer à ancrer les anticipations d’inflation', 'iscorrect' => true],
                            ['answer' => 'Elle garantit une croissance élevée', 'iscorrect' => false],
                            ['answer' => 'Elle supprime tous les chocs d’offre', 'iscorrect' => false],
                            ['answer' => 'Elle fixe tous les prix des biens', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la politique monétaire peut-elle avoir des effets retardés ?',
                        'answers' => [
                            ['answer' => 'Les changements de taux se transmettent progressivement au crédit, aux dépenses, à la demande et aux prix', 'iscorrect' => true],
                            ['answer' => 'Tous les agents réagissent instantanément', 'iscorrect' => false],
                            ['answer' => 'Les banques ne réagissent jamais aux taux', 'iscorrect' => false],
                            ['answer' => 'L’inflation répond toujours immédiatement', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une banque centrale ne peut-elle pas contrôler directement chaque décision économique ?',
                        'answers' => [
                            ['answer' => 'Elle agit principalement à travers les conditions monétaires et financières, tandis que les ménages et entreprises prennent leurs propres décisions', 'iscorrect' => true],
                            ['answer' => 'Elle n’a aucun instrument monétaire', 'iscorrect' => false],
                            ['answer' => 'Elle dirige toutes les entreprises privées', 'iscorrect' => false],
                            ['answer' => 'Elle fixe tous les revenus des ménages', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Commerce international et taux de change',
                'questions' => [
                    [
                        'question' => 'Qu’est-ce qu’une exportation ?',
                        'answers' => [
                            ['answer' => 'La vente d’un bien ou service à l’étranger', 'iscorrect' => true],
                            ['answer' => 'L’achat d’un bien étranger', 'iscorrect' => false],
                            ['answer' => 'Une dépense publique', 'iscorrect' => false],
                            ['answer' => 'Un investissement intérieur', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce qu’une importation ?',
                        'answers' => [
                            ['answer' => 'L’achat d’un bien ou service provenant de l’étranger', 'iscorrect' => true],
                            ['answer' => 'La vente d’un produit national à l’étranger', 'iscorrect' => false],
                            ['answer' => 'Une recette fiscale', 'iscorrect' => false],
                            ['answer' => 'Une dépense des ménages uniquement', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce que le taux de change ?',
                        'answers' => [
                            ['answer' => 'Le prix d’une monnaie exprimé dans une autre monnaie', 'iscorrect' => true],
                            ['answer' => 'Le taux de chômage', 'iscorrect' => false],
                            ['answer' => 'Le taux de croissance', 'iscorrect' => false],
                            ['answer' => 'Le niveau des impôts', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Que signifie une appréciation de la monnaie nationale ?',
                        'answers' => [
                            ['answer' => 'Une hausse de sa valeur relative par rapport à une autre monnaie', 'iscorrect' => true],
                            ['answer' => 'Une baisse automatique de sa valeur', 'iscorrect' => false],
                            ['answer' => 'Une hausse du chômage', 'iscorrect' => false],
                            ['answer' => 'Une baisse obligatoire du PIB', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Une monnaie nationale qui s’apprécie peut rendre les exportations :',
                        'answers' => [
                            ['answer' => 'Relativement plus coûteuses pour les acheteurs étrangers', 'iscorrect' => true],
                            ['answer' => 'Toujours moins coûteuses', 'iscorrect' => false],
                            ['answer' => 'Toujours gratuites', 'iscorrect' => false],
                            ['answer' => 'Indépendantes du taux de change', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Une dépréciation de la monnaie peut rendre les importations :',
                        'answers' => [
                            ['answer' => 'Plus coûteuses en monnaie nationale', 'iscorrect' => true],
                            ['answer' => 'Toujours moins coûteuses', 'iscorrect' => false],
                            ['answer' => 'Toujours gratuites', 'iscorrect' => false],
                            ['answer' => 'Indépendantes du taux de change', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce que la balance commerciale ?',
                        'answers' => [
                            ['answer' => 'La différence entre les exportations et les importations de biens', 'iscorrect' => true],
                            ['answer' => 'La différence entre impôts et dépenses publiques', 'iscorrect' => false],
                            ['answer' => 'La différence entre consommation et épargne', 'iscorrect' => false],
                            ['answer' => 'La différence entre salaires et bénéfices', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les pays échangent-ils des biens et services ?',
                        'answers' => [
                            ['answer' => 'Pour bénéficier de la spécialisation et de différences de coûts et de ressources', 'iscorrect' => true],
                            ['answer' => 'Parce qu’aucun pays ne peut produire localement', 'iscorrect' => false],
                            ['answer' => 'Pour supprimer toute concurrence nationale', 'iscorrect' => false],
                            ['answer' => 'Pour éviter toute production intérieure', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce qu’un avantage comparatif ?',
                        'answers' => [
                            ['answer' => 'La capacité à produire un bien avec un coût d’opportunité relativement inférieur', 'iscorrect' => true],
                            ['answer' => 'La capacité à tout produire à moindre coût absolu', 'iscorrect' => false],
                            ['answer' => 'La capacité à contrôler toutes les monnaies', 'iscorrect' => false],
                            ['answer' => 'La capacité à fixer tous les prix mondiaux', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel effet un droit de douane peut-il avoir ?',
                        'answers' => [
                            ['answer' => 'Il peut augmenter le prix intérieur d’un produit importé et réduire les importations', 'iscorrect' => true],
                            ['answer' => 'Il réduit toujours les prix intérieurs', 'iscorrect' => false],
                            ['answer' => 'Il augmente nécessairement les importations', 'iscorrect' => false],
                            ['answer' => 'Il supprime toujours la production nationale', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],
        ];

        foreach ($quizzes as $quizData) {
            $quiz = Quiz::create([
                'subject_id' => $subject->id,
                'title' => $quizData['title'],
                'level' => 'Beginner',
            ]);

            foreach ($quizData['questions'] as $questionData) {
                $question = Question::create([
                    'quiz_id' => $quiz->id,
                    'question' => $questionData['question'],
                ]);

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
