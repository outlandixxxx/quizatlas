<?php

namespace Database\Seeders;

use App\Models\Subject;
use App\Models\Quiz;
use App\Models\Question;
use App\Models\Choice;
use Illuminate\Database\Seeder;

class FiscalEconomicsBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'fiscal-economics')->firstOrFail();

        $quizzes = [

            // ============================================================
            // QUIZ 1
            // ============================================================
            [
                'title' => 'Fondamentaux de la politique budgétaire',
                'description' => 'Quiz débutant sur les fondamentaux de la politique budgétaire.',
                'questions' => [
                    [
                        'question' => 'Qu’est-ce que la politique budgétaire ?',
                        'choices' => [
                            'La fixation des taux d’intérêt par la banque centrale pour contrôler l’inflation',
                            'La négociation des salaires entre les syndicats et les employeurs de chaque secteur',
                            'L’utilisation des dépenses publiques et des impôts pour influencer l’économie',
                            'La gestion des taux de change par les banques commerciales et les marchés',
                        ],
                        'correct' => 2,
                        'explanation' => 'La politique budgétaire agit par les dépenses publiques et les impôts. Les taux d’intérêt relèvent de la politique monétaire.',
                    ],
                    [
                        'question' => 'Quel acteur décide principalement de la politique budgétaire ?',
                        'choices' => [
                            'Le gouvernement, avec le vote du parlement',
                            'La banque centrale, de façon indépendante',
                            'Les banques commerciales, selon la demande de crédit',
                            'Les entreprises, à travers leurs prix de vente',
                        ],
                        'correct' => 0,
                        'explanation' => 'Le budget de l’État est préparé par le gouvernement et voté par le parlement. La banque centrale conduit la politique monétaire.',
                    ],
                    [
                        'question' => 'Qu’est-ce qu’une dépense publique ?',
                        'choices' => [
                            'Une somme payée par un ménage pour son logement ou son alimentation',
                            'Une somme versée par un contribuable à l’administration fiscale',
                            'Une somme payée par une entreprise à ses fournisseurs étrangers',
                            'Une somme dépensée par l’État pour financer des services, des transferts ou des investissements',
                        ],
                        'correct' => 3,
                        'explanation' => 'Une dépense publique est un paiement de l’État ou d’une collectivité. L’impôt payé par un contribuable est au contraire une recette publique.',
                    ],
                    [
                        'question' => 'Qu’est-ce qu’un impôt ?',
                        'choices' => [
                            'Un prêt volontaire accordé par un citoyen à l’État',
                            'Un prélèvement obligatoire effectué par l’État, sans contrepartie directe',
                            'Une somme versée par l’État aux ménages à faible revenu',
                            'Un paiement facultatif demandé pour utiliser un service public',
                        ],
                        'correct' => 1,
                        'explanation' => 'L’impôt est obligatoire et ne donne pas droit à une contrepartie directe. Une somme versée aux ménages est un transfert.',
                    ],
                    [
                        'question' => 'Dans la formule PIB = C + I + G + (X − M), que représente G ?',
                        'choices' => [
                            'Le total des importations du pays',
                            'Les gains réalisés par les entreprises',
                            'Les dépenses publiques en biens et services',
                            'La croissance annuelle du PIB',
                        ],
                        'correct' => 2,
                        'explanation' => 'G désigne les achats de biens et services de l’État. C est la consommation, I l’investissement, X les exportations et M les importations.',
                    ],
                    [
                        'question' => 'Qu’est-ce qu’un budget public ?',
                        'choices' => [
                            'Un document qui prévoit les recettes et les dépenses de l’État pour une période donnée',
                            'Un relevé des dépenses effectuées par un ménage pendant l’année',
                            'Une liste des prix fixés par l’État pour les biens de consommation',
                            'Un registre des exportations et des importations du pays',
                        ],
                        'correct' => 0,
                        'explanation' => 'Le budget prévoit, pour une période (souvent l’année), les recettes attendues et les dépenses autorisées de l’État.',
                    ],
                    [
                        'question' => 'Qu’est-ce qu’un transfert public, comme une allocation familiale ?',
                        'choices' => [
                            'L’achat par l’État d’un équipement pour un hôpital',
                            'Un versement de l’État à des ménages, sans achat de bien ou de service en échange',
                            'Un impôt prélevé sur le salaire des travailleurs',
                            'Un prêt accordé par une banque à une entreprise',
                        ],
                        'correct' => 1,
                        'explanation' => 'Un transfert est un versement sans contrepartie directe en biens ou en services. L’achat d’un équipement est une dépense en biens et services.',
                    ],
                    [
                        'question' => 'Que provoque en général une baisse des impôts, toutes choses égales par ailleurs ?',
                        'choices' => [
                            'Une baisse du revenu disponible des ménages',
                            'La disparition des dépenses publiques',
                            'Une hausse des prix décidée par l’État',
                            'Une hausse du revenu disponible des ménages',
                        ],
                        'correct' => 3,
                        'explanation' => 'Quand les impôts baissent, les contribuables gardent une plus grande part de leur revenu : leur revenu disponible augmente.',
                    ],
                    [
                        'question' => 'Pourquoi l’État finance-t-il des infrastructures comme les routes ou les hôpitaux ?',
                        'choices' => [
                            'Parce qu’elles rapportent plus de recettes que leur coût de construction',
                            'Parce que le secteur privé n’a pas le droit d’en construire',
                            'Parce qu’elles servent à toute la population et soutiennent l’activité économique',
                            'Parce qu’elles remplacent le besoin de payer des impôts',
                        ],
                        'correct' => 2,
                        'explanation' => 'Les infrastructures profitent à tous les habitants et facilitent l’activité économique. Elles ne rapportent pas forcément plus qu’elles ne coûtent.',
                    ],
                    [
                        'question' => 'Qu’est-ce qu’une subvention ?',
                        'choices' => [
                            'Une aide financière de l’État à une entreprise ou à une activité',
                            'Un impôt payé par les entreprises sur leurs bénéfices',
                            'Un prêt que l’État accorde et se fait rembourser avec intérêts',
                            'Une taxe appliquée aux produits importés',
                        ],
                        'correct' => 0,
                        'explanation' => 'Une subvention est une aide versée par l’État, alors qu’un impôt ou une taxe est un prélèvement.',
                    ],
                ],
            ],

            // ============================================================
            // QUIZ 2
            // ============================================================
            [
                'title' => 'Recettes publiques et fiscalité',
                'description' => 'Quiz débutant sur les recettes publiques et les principaux types d’impôts.',
                'questions' => [
                    [
                        'question' => 'Quelle est la principale source de recettes publiques ?',
                        'choices' => [
                            'Les dons volontaires des ménages',
                            'Les bénéfices des banques commerciales',
                            'Les ventes à l’étranger des entreprises privées',
                            'Les impôts et les cotisations obligatoires',
                        ],
                        'correct' => 3,
                        'explanation' => 'Les recettes de l’État viennent surtout des impôts et des cotisations obligatoires, pas de dons volontaires ni des ventes des entreprises privées.',
                    ],
                    [
                        'question' => 'Qu’est-ce qu’un impôt sur le revenu ?',
                        'choices' => [
                            'Une taxe payée sur chaque produit acheté',
                            'Un prélèvement calculé sur les revenus des personnes',
                            'Un prélèvement calculé sur les bénéfices des sociétés',
                            'Une taxe sur les produits importés',
                        ],
                        'correct' => 1,
                        'explanation' => 'L’impôt sur le revenu s’applique aux revenus des personnes, comme les salaires. Une taxe sur chaque achat est une taxe sur la consommation.',
                    ],
                    [
                        'question' => 'Qu’est-ce qu’un impôt sur les sociétés ?',
                        'choices' => [
                            'Un prélèvement sur les bénéfices réalisés par les entreprises',
                            'Une taxe payée par les ménages sur leurs salaires',
                            'Une taxe appliquée à chaque produit vendu au consommateur',
                            'Une aide versée par l’État aux entreprises',
                        ],
                        'correct' => 0,
                        'explanation' => 'L’impôt sur les sociétés porte sur les bénéfices des entreprises, alors que l’impôt sur les salaires vise les ménages.',
                    ],
                    [
                        'question' => 'La TVA (taxe sur la valeur ajoutée) est un impôt qui porte principalement sur :',
                        'choices' => [
                            'Les salaires des travailleurs',
                            'Les bénéfices des entreprises',
                            'La consommation de biens et de services',
                            'Le patrimoine des ménages',
                        ],
                        'correct' => 2,
                        'explanation' => 'La TVA est incluse dans le prix des biens et services achetés et supportée, en fin de compte, par le consommateur.',
                    ],
                    [
                        'question' => 'Qu’est-ce qu’un impôt direct ?',
                        'choices' => [
                            'Un impôt inclus dans le prix des biens et services achetés',
                            'Un impôt payé seulement lors de l’importation d’un produit',
                            'Une aide financière versée directement aux ménages',
                            'Un impôt payé directement par le contribuable sur son revenu ou son patrimoine',
                        ],
                        'correct' => 3,
                        'explanation' => 'Un impôt direct est payé directement par celui qu’il vise, comme l’impôt sur le revenu. Un impôt inclus dans un prix est un impôt indirect.',
                    ],
                    [
                        'question' => 'Qu’est-ce qu’un impôt indirect ?',
                        'choices' => [
                            'Un impôt payé lors d’un achat et inclus dans le prix du produit',
                            'Un impôt prélevé directement sur le salaire',
                            'Un impôt calculé sur le patrimoine d’un ménage',
                            'Un impôt prélevé sur les bénéfices d’une entreprise',
                        ],
                        'correct' => 0,
                        'explanation' => 'Un impôt indirect, comme la TVA, est intégré au prix payé lors de l’achat. Les impôts sur le salaire, le patrimoine et les bénéfices sont directs.',
                    ],
                    [
                        'question' => 'Que signifie qu’un impôt est progressif ?',
                        'choices' => [
                            'Le taux d’imposition diminue quand le revenu augmente',
                            'Le taux d’imposition augmente quand le revenu augmente',
                            'Le taux d’imposition est le même pour tous les revenus',
                            'Chaque contribuable paie exactement le même montant',
                        ],
                        'correct' => 1,
                        'explanation' => 'Dans un impôt progressif, la part du revenu payée en impôt augmente avec le revenu. Un taux identique pour tous correspond à un impôt proportionnel.',
                    ],
                    [
                        'question' => 'Un impôt proportionnel applique :',
                        'choices' => [
                            'Un taux plus élevé aux revenus élevés',
                            'Un taux plus faible aux revenus élevés',
                            'Le même taux à tous les revenus',
                            'Le même montant à tous les contribuables',
                        ],
                        'correct' => 2,
                        'explanation' => 'Un impôt proportionnel a un taux constant. Le montant payé augmente avec le revenu, mais la part du revenu reste la même.',
                    ],
                    [
                        'question' => 'Un impôt proportionnel de 20 % s’applique à un revenu de 500. Quel est le montant de l’impôt ?',
                        'choices' => [
                            '400',
                            '100',
                            '10',
                            '520',
                        ],
                        'correct' => 1,
                        'explanation' => '20 % de 500 = 0,20 × 500 = 100. Le montant 400 correspond au revenu restant après impôt.',
                    ],
                    [
                        'question' => 'Que représente la base d’imposition ?',
                        'choices' => [
                            'Le montant sur lequel on applique le taux de l’impôt',
                            'Le taux appliqué par l’administration fiscale',
                            'Le total des impôts perçus par l’État',
                            'Le nombre de contribuables d’un pays',
                        ],
                        'correct' => 0,
                        'explanation' => 'La base d’imposition est la somme taxée (revenu, bénéfice, prix). Impôt à payer = taux × base.',
                    ],
                ],
            ],

            // ============================================================
            // QUIZ 3
            // ============================================================
            [
                'title' => 'Budget, déficit et dette publique',
                'description' => 'Quiz débutant sur le budget public, le déficit et la dette publique.',
                'questions' => [
                    [
                        'question' => 'Qu’est-ce qu’un déficit budgétaire ?',
                        'choices' => [
                            'Une situation où les dépenses de l’État dépassent ses recettes sur une période',
                            'Une situation où les recettes de l’État dépassent ses dépenses sur une période',
                            'Un excès des importations sur les exportations du pays',
                            'Une baisse du PIB pendant plusieurs trimestres',
                        ],
                        'correct' => 0,
                        'explanation' => 'Le déficit budgétaire compare les dépenses et les recettes de l’État. L’excès des importations sur les exportations est un déficit commercial.',
                    ],
                    [
                        'question' => 'Qu’est-ce qu’un excédent budgétaire ?',
                        'choices' => [
                            'Une situation où l’État dépense plus qu’il ne reçoit',
                            'Un excès des exportations sur les importations du pays',
                            'Une situation où les recettes de l’État dépassent ses dépenses sur une période',
                            'Une hausse du PIB pendant plusieurs années',
                        ],
                        'correct' => 2,
                        'explanation' => 'Un excédent budgétaire signifie que les recettes dépassent les dépenses. Un excès des exportations sur les importations est un excédent commercial.',
                    ],
                    [
                        'question' => 'Comment l’État finance-t-il généralement un déficit budgétaire ?',
                        'choices' => [
                            'En attendant que les exportations privées augmentent',
                            'En empruntant, par exemple en émettant des obligations',
                            'En augmentant ses dépenses pour équilibrer son budget',
                            'En demandant aux ménages de ne plus payer d’impôts',
                        ],
                        'correct' => 1,
                        'explanation' => 'Pour dépenser plus qu’il ne reçoit, l’État doit emprunter, notamment en émettant des obligations. Dépenser davantage ne peut pas réduire un déficit.',
                    ],
                    [
                        'question' => 'Qu’est-ce que la dette publique ?',
                        'choices' => [
                            'Le total des dettes des ménages du pays',
                            'Le déficit budgétaire d’une seule année',
                            'Le total des impôts que l’État doit encore percevoir',
                            'L’ensemble des sommes que l’État a empruntées et doit encore rembourser',
                        ],
                        'correct' => 3,
                        'explanation' => 'La dette publique est le total accumulé des emprunts de l’État non encore remboursés. Le déficit d’une année n’en est qu’une partie.',
                    ],
                    [
                        'question' => 'Quelle est la différence entre déficit et dette publique ?',
                        'choices' => [
                            'Le déficit se mesure sur une période, la dette est un total accumulé à une date donnée',
                            'Le déficit est un total accumulé, la dette se mesure sur une seule année',
                            'Le déficit concerne les ménages, la dette concerne l’État',
                            'Il n’y a aucune différence entre les deux notions',
                        ],
                        'correct' => 0,
                        'explanation' => 'Le déficit est un flux (une année), la dette est un stock (l’ensemble des emprunts accumulés). Plusieurs déficits successifs augmentent la dette.',
                    ],
                    [
                        'question' => 'Pourquoi l’État paie-t-il des intérêts sur sa dette ?',
                        'choices' => [
                            'Pour financer directement les dépenses des ménages',
                            'Pour payer l’impôt sur ses propres recettes',
                            'Pour réduire le déficit de l’année en cours',
                            'Pour rémunérer les prêteurs qui lui ont confié leur argent',
                        ],
                        'correct' => 3,
                        'explanation' => 'Les prêteurs demandent une rémunération pour l’argent prêté à l’État. Ces intérêts sont un coût pour le budget et ne réduisent pas le déficit.',
                    ],
                    [
                        'question' => 'Si la dette publique est de 60 et le PIB de 100, quel est le ratio dette/PIB ?',
                        'choices' => [
                            '40 %',
                            '160 %',
                            '60 %',
                            '6 %',
                        ],
                        'correct' => 2,
                        'explanation' => 'Ratio dette/PIB = 60 / 100 = 60 %. Le résultat 40 % viendrait d’une soustraction (100 − 60), et 160 % d’une addition.',
                    ],
                    [
                        'question' => 'Pourquoi rapporte-t-on souvent la dette publique au PIB ?',
                        'choices' => [
                            'Pour connaître le nombre d’habitants du pays',
                            'Pour comparer la dette à la taille de l’économie du pays',
                            'Pour calculer le taux de chômage',
                            'Pour mesurer la production des entreprises privées',
                        ],
                        'correct' => 1,
                        'explanation' => 'Une même dette pèse moins lourd dans une grande économie que dans une petite : le ratio dette/PIB permet de comparer.',
                    ],
                    [
                        'question' => 'Si l’État finance son déficit par l’emprunt, que devient sa dette ?',
                        'choices' => [
                            'Elle diminue du montant du déficit',
                            'Elle reste stable, car le déficit est un flux',
                            'Elle est effacée à la fin de l’année',
                            'Elle augmente du montant emprunté',
                        ],
                        'correct' => 3,
                        'explanation' => 'Chaque emprunt s’ajoute aux emprunts déjà accumulés : la dette augmente du montant emprunté.',
                    ],
                    [
                        'question' => 'Pourquoi un gouvernement cherche-t-il à limiter son déficit ?',
                        'choices' => [
                            'Pour éviter que la dette et les intérêts à payer ne s’accumulent',
                            'Pour supprimer toutes les dépenses publiques',
                            'Pour augmenter les importations du pays',
                            'Pour empêcher les ménages de payer des impôts',
                        ],
                        'correct' => 0,
                        'explanation' => 'Un déficit répété fait grossir la dette, donc les intérêts à payer, ce qui réduit la marge de manœuvre du budget.',
                    ],
                ],
            ],

            // ============================================================
            // QUIZ 4
            // ============================================================
            [
                'title' => 'Dépenses publiques et biens collectifs',
                'description' => 'Quiz débutant sur les dépenses publiques, les biens publics et les services collectifs.',
                'questions' => [
                    [
                        'question' => 'Quelles sont les deux caractéristiques d’un bien public pur ?',
                        'choices' => [
                            'La rareté et un prix élevé',
                            'La rivalité et l’exclusion',
                            'La non-rivalité et la non-exclusion',
                            'La gratuité et la production privée',
                        ],
                        'correct' => 2,
                        'explanation' => 'Un bien public pur est non rival (l’usage par l’un n’empêche pas l’usage par l’autre) et non exclusif (on ne peut pas empêcher d’en profiter).',
                    ],
                    [
                        'question' => 'Que signifie la non-rivalité d’un bien ?',
                        'choices' => [
                            'Personne ne peut être empêché d’utiliser le bien',
                            'Le bien n’est produit que par l’État',
                            'Le bien est réservé à ceux qui le paient',
                            'L’usage du bien par une personne n’empêche pas les autres de l’utiliser',
                        ],
                        'correct' => 3,
                        'explanation' => 'Un bien est non rival quand son utilisation par une personne ne réduit pas ce qui reste disponible pour les autres, comme un phare. Ne pas pouvoir exclure quelqu’un est la non-exclusion.',
                    ],
                    [
                        'question' => 'Que signifie la non-exclusion d’un bien ?',
                        'choices' => [
                            'Il est difficile d’empêcher quelqu’un d’utiliser le bien, même s’il ne paie pas',
                            'L’usage du bien par une personne réduit celui des autres',
                            'Seuls les contribuables peuvent utiliser le bien',
                            'Le bien peut être vendu à un prix élevé',
                        ],
                        'correct' => 0,
                        'explanation' => 'Avec la non-exclusion, on ne peut pas réserver le bien à ceux qui paient : chacun peut en profiter sans payer.',
                    ],
                    [
                        'question' => 'Lequel de ces biens est un exemple classique de bien public pur ?',
                        'choices' => [
                            'Un repas au restaurant',
                            'La défense nationale',
                            'Un billet de cinéma',
                            'Un vêtement acheté en magasin',
                        ],
                        'correct' => 1,
                        'explanation' => 'La défense nationale protège tout le monde sans pouvoir exclure personne, et la protection d’une personne ne réduit pas celle des autres. Les autres exemples sont des biens privés.',
                    ],
                    [
                        'question' => 'Qu’est-ce qu’une dépense publique d’investissement ?',
                        'choices' => [
                            'Le paiement mensuel des salaires des fonctionnaires',
                            'Une dépense qui crée ou améliore des équipements durables, comme un pont',
                            'Le remboursement d’un impôt à un contribuable',
                            'L’achat quotidien de fournitures de bureau',
                        ],
                        'correct' => 1,
                        'explanation' => 'Un investissement public crée des équipements qui servent longtemps. Les salaires et les fournitures sont des dépenses de fonctionnement.',
                    ],
                    [
                        'question' => 'Laquelle de ces dépenses est une dépense de fonctionnement ?',
                        'choices' => [
                            'La construction d’une nouvelle autoroute',
                            'L’achat d’un terrain pour un futur hôpital',
                            'Le paiement des salaires des enseignants',
                            'La construction d’un barrage',
                        ],
                        'correct' => 2,
                        'explanation' => 'Les dépenses de fonctionnement couvrent le fonctionnement courant des services publics, comme les salaires. Construire une autoroute, un barrage ou un hôpital est un investissement.',
                    ],
                    [
                        'question' => 'Qu’est-ce qu’un service public ?',
                        'choices' => [
                            'Une activité réservée aux entreprises privées',
                            'Une activité qui ne coûte rien à financer',
                            'Une activité exercée uniquement à l’étranger',
                            'Une activité d’intérêt général assurée ou encadrée par les pouvoirs publics',
                        ],
                        'correct' => 3,
                        'explanation' => 'Un service public répond à un besoin d’intérêt général (école, santé, sécurité). Il a un coût, financé notamment par l’impôt.',
                    ],
                    [
                        'question' => 'Qu’est-ce qu’un bien privé ?',
                        'choices' => [
                            'Un bien réservé à celui qui le paie et consommé par une seule personne',
                            'Un bien que tout le monde peut utiliser sans payer',
                            'Un bien produit uniquement par l’État',
                            'Un bien qui ne coûte rien à produire',
                        ],
                        'correct' => 0,
                        'explanation' => 'Un bien privé est rival (consommé par une personne à la fois) et exclusif (réservé à celui qui paie), comme un vêtement.',
                    ],
                    [
                        'question' => 'Pourquoi l’État doit-il faire des choix entre ses dépenses ?',
                        'choices' => [
                            'Parce que toutes les dépenses ont le même effet',
                            'Parce que les impôts sont illimités',
                            'Parce que ses ressources sont limitées',
                            'Parce que les dépenses publiques sont interdites',
                        ],
                        'correct' => 2,
                        'explanation' => 'Les recettes de l’État sont limitées : financer une dépense signifie souvent renoncer à une autre.',
                    ],
                    [
                        'question' => 'Pourquoi évalue-t-on les résultats des dépenses publiques ?',
                        'choices' => [
                            'Pour augmenter automatiquement les impôts',
                            'Pour vérifier que l’argent public produit les effets attendus',
                            'Pour remplacer le vote du budget',
                            'Pour supprimer toutes les dépenses de l’État',
                        ],
                        'correct' => 1,
                        'explanation' => 'Comme les ressources sont limitées, on vérifie que chaque dépense atteint son objectif à un coût raisonnable.',
                    ],
                ],
            ],

            // ============================================================
            // QUIZ 5
            // ============================================================
            [
                'title' => 'Politique budgétaire et cycle économique',
                'description' => 'Quiz débutant sur la politique budgétaire, les récessions, les stabilisateurs automatiques et le multiplicateur.',
                'questions' => [
                    [
                        'question' => 'Qu’est-ce qu’une politique budgétaire expansionniste ?',
                        'choices' => [
                            'Une politique qui baisse les dépenses publiques ou augmente les impôts pour réduire la demande',
                            'Une politique qui augmente les dépenses publiques ou baisse les impôts pour soutenir la demande',
                            'Une politique qui fixe les taux d’intérêt pour soutenir le crédit',
                            'Une politique qui limite les importations pour protéger la production',
                        ],
                        'correct' => 1,
                        'explanation' => 'Une politique expansionniste soutient la demande en dépensant davantage ou en taxant moins. La politique inverse est restrictive, et les taux d’intérêt relèvent de la politique monétaire.',
                    ],
                    [
                        'question' => 'Qu’est-ce qu’une politique budgétaire restrictive ?',
                        'choices' => [
                            'Une politique qui réduit la demande ou le déficit, par une baisse des dépenses ou une hausse des impôts',
                            'Une politique qui soutient la demande par une hausse des dépenses publiques',
                            'Une politique qui baisse les impôts pour stimuler la consommation',
                            'Une politique qui relève les taux d’intérêt pour freiner le crédit',
                        ],
                        'correct' => 0,
                        'explanation' => 'Une politique restrictive freine la demande ou réduit le déficit en dépensant moins ou en taxant plus.',
                    ],
                    [
                        'question' => 'Pourquoi un gouvernement peut-il augmenter ses dépenses pendant une récession ?',
                        'choices' => [
                            'Pour freiner la hausse des prix',
                            'Pour réduire volontairement la production',
                            'Pour diminuer le nombre d’emplois disponibles',
                            'Pour soutenir la demande quand l’activité ralentit',
                        ],
                        'correct' => 3,
                        'explanation' => 'En récession, la demande est faible : les dépenses publiques la soutiennent. Freiner les prix concerne plutôt une économie en surchauffe.',
                    ],
                    [
                        'question' => 'Quand l’économie est en surchauffe, quelle politique budgétaire peut-on utiliser ?',
                        'choices' => [
                            'Une politique expansionniste, qui augmente la demande',
                            'Une hausse des dépenses financée par la dette',
                            'Une politique restrictive, qui réduit la demande',
                            'Une baisse des impôts pour stimuler l’emploi',
                        ],
                        'correct' => 2,
                        'explanation' => 'En surchauffe, la demande est trop forte et fait monter les prix : une politique restrictive la réduit.',
                    ],
                    [
                        'question' => 'Qu’est-ce qu’un stabilisateur automatique ?',
                        'choices' => [
                            'Un mécanisme du budget qui atténue les fluctuations sans nouvelle décision du gouvernement',
                            'Une décision prise par le gouvernement à chaque crise économique',
                            'Un taux d’intérêt fixé par la banque centrale',
                            'Un taux de change maintenu fixe par l’État',
                        ],
                        'correct' => 0,
                        'explanation' => 'Un stabilisateur automatique agit de lui-même quand l’activité varie, sans vote ni décision supplémentaire.',
                    ],
                    [
                        'question' => 'Lequel est un exemple de stabilisateur automatique ?',
                        'choices' => [
                            'Un plan de relance voté après une crise',
                            'Une baisse d’impôts décidée par le parlement',
                            'Les allocations chômage, qui augmentent quand le chômage augmente',
                            'Une hausse ponctuelle des droits de douane',
                        ],
                        'correct' => 2,
                        'explanation' => 'Les allocations chômage augmentent d’elles-mêmes en récession et soutiennent les revenus. Un plan de relance ou une baisse d’impôts votée sont des décisions volontaires.',
                    ],
                    [
                        'question' => 'Qu’est-ce qu’une politique budgétaire discrétionnaire ?',
                        'choices' => [
                            'Un mécanisme qui agit tout seul sans décision politique',
                            'Une politique menée en secret, sans vote du parlement',
                            'Une politique qui ne modifie ni les dépenses ni les impôts',
                            'Une mesure décidée volontairement par le gouvernement pour agir sur l’économie',
                        ],
                        'correct' => 3,
                        'explanation' => 'Une politique discrétionnaire résulte d’une décision volontaire du gouvernement. C’est l’opposé d’un stabilisateur automatique.',
                    ],
                    [
                        'question' => 'Qu’est-ce qu’un plan de relance ?',
                        'choices' => [
                            'Un plan de remboursement de la dette des ménages',
                            'Un ensemble de mesures budgétaires pour relancer l’activité économique',
                            'Un accord de libre-échange entre plusieurs pays',
                            'Un règlement qui fixe les prix des produits',
                        ],
                        'correct' => 1,
                        'explanation' => 'Un plan de relance regroupe des dépenses ou des baisses d’impôts destinées à soutenir l’activité, souvent après une crise.',
                    ],
                    [
                        'question' => 'Que mesure le multiplicateur budgétaire ?',
                        'choices' => [
                            'L’effet total sur l’activité d’une dépense publique supplémentaire',
                            'Le nombre de fonctionnaires embauchés par l’État',
                            'Le rapport entre la dette publique et la population',
                            'L’augmentation annuelle des impôts votée par le parlement',
                        ],
                        'correct' => 0,
                        'explanation' => 'Le multiplicateur compare l’augmentation totale de l’activité à la dépense initiale : une dépense crée des revenus, qui sont en partie dépensés à leur tour.',
                    ],
                    [
                        'question' => 'Avec un multiplicateur de 1,5, une dépense publique supplémentaire de 100 augmente l’activité de :',
                        'choices' => [
                            '100',
                            '67',
                            '250',
                            '150',
                        ],
                        'correct' => 3,
                        'explanation' => 'Augmentation de l’activité = 1,5 × 100 = 150. Diviser par 1,5 (environ 67) serait une erreur de sens.',
                    ],
                ],
            ],

            // ============================================================
            // QUIZ 6
            // ============================================================
            [
                'title' => 'Redistribution et inégalités',
                'description' => 'Quiz débutant sur la redistribution, les impôts, les transferts et les inégalités.',
                'questions' => [
                    [
                        'question' => 'Qu’est-ce que la redistribution ?',
                        'choices' => [
                            'La vente de biens publics à des entreprises privées',
                            'La baisse générale de tous les impôts',
                            'La répartition des bénéfices entre actionnaires',
                            'Le transfert de ressources entre groupes, par les impôts et les prestations',
                        ],
                        'correct' => 3,
                        'explanation' => 'La redistribution prélève de l’argent par l’impôt et le verse sous forme de prestations, ce qui modifie la répartition des revenus.',
                    ],
                    [
                        'question' => 'Qu’est-ce que le revenu disponible d’un ménage ?',
                        'choices' => [
                            'Le revenu avant tout impôt et toute prestation',
                            'L’épargne accumulée depuis plusieurs années',
                            'Le revenu après paiement des impôts et ajout des prestations reçues',
                            'Le montant total de ses dépenses de consommation',
                        ],
                        'correct' => 2,
                        'explanation' => 'Revenu disponible = revenu − impôts + prestations. C’est ce dont le ménage dispose réellement pour consommer ou épargner.',
                    ],
                    [
                        'question' => 'Pourquoi un impôt progressif peut-il réduire les inégalités ?',
                        'choices' => [
                            'Parce que tous les revenus paient le même montant',
                            'Parce que les revenus élevés paient un taux plus élevé',
                            'Parce que les revenus faibles paient un taux plus élevé',
                            'Parce qu’il supprime toute différence de revenu',
                        ],
                        'correct' => 1,
                        'explanation' => 'Avec un impôt progressif, les ménages aisés versent une plus grande part de leur revenu, ce qui réduit l’écart avec les autres. Il ne supprime pas toutes les différences.',
                    ],
                    [
                        'question' => 'Lequel de ces versements est une prestation sociale ?',
                        'choices' => [
                            'Les allocations familiales',
                            'La TVA payée sur les achats',
                            'L’impôt sur le revenu',
                            'Le salaire d’un employé d’une entreprise privée',
                        ],
                        'correct' => 0,
                        'explanation' => 'Une prestation sociale est un versement de l’État ou d’un organisme social aux ménages. La TVA et l’impôt sur le revenu sont des prélèvements.',
                    ],
                    [
                        'question' => 'Comment les transferts sociaux aident-ils les ménages à faibles revenus ?',
                        'choices' => [
                            'Ils réduisent leur revenu disponible',
                            'Ils augmentent leurs impôts',
                            'Ils augmentent leur revenu disponible',
                            'Ils fixent le prix des biens qu’ils achètent',
                        ],
                        'correct' => 2,
                        'explanation' => 'Un transfert est une somme reçue : elle s’ajoute au revenu du ménage et augmente son revenu disponible.',
                    ],
                    [
                        'question' => 'Que désignent les inégalités de revenus ?',
                        'choices' => [
                            'Les écarts de prix entre deux pays',
                            'Les écarts de revenu entre les personnes ou les ménages',
                            'La différence entre les recettes et les dépenses de l’État',
                            'Les écarts de production entre deux entreprises',
                        ],
                        'correct' => 1,
                        'explanation' => 'Les inégalités de revenus mesurent les écarts de revenu entre individus ou ménages, avant ou après impôts et prestations.',
                    ],
                    [
                        'question' => 'Qu’est-ce qu’une aide publique ciblée ?',
                        'choices' => [
                            'Une aide versée à tous les ménages, quel que soit leur revenu',
                            'Une aide versée uniquement aux entreprises',
                            'Une aide que les ménages doivent rembourser',
                            'Une aide réservée aux ménages qui en ont le plus besoin',
                        ],
                        'correct' => 3,
                        'explanation' => 'Une aide ciblée est réservée à certains bénéficiaires, souvent les ménages les plus modestes, au lieu d’être versée à tous.',
                    ],
                    [
                        'question' => 'Qu’est-ce qu’un impôt sur le patrimoine ?',
                        'choices' => [
                            'Un impôt calculé sur la valeur des biens possédés, comme un logement',
                            'Un impôt calculé sur le salaire mensuel',
                            'Une taxe payée sur chaque achat',
                            'Un impôt payé sur les produits importés',
                        ],
                        'correct' => 0,
                        'explanation' => 'Le patrimoine est l’ensemble de ce qu’on possède (logement, épargne). Un impôt sur le patrimoine se calcule sur cette valeur, pas sur le salaire ni sur les achats.',
                    ],
                    [
                        'question' => 'Un ménage gagne 500, paie 100 d’impôts et reçoit 50 de prestations. Quel est son revenu disponible ?',
                        'choices' => [
                            '400',
                            '550',
                            '650',
                            '450',
                        ],
                        'correct' => 3,
                        'explanation' => 'Revenu disponible = 500 − 100 + 50 = 450. Oublier les prestations donne 400, oublier les impôts donne 550.',
                    ],
                    [
                        'question' => 'Qu’est-ce que la pauvreté monétaire ?',
                        'choices' => [
                            'Une situation où le ménage ne paie aucun impôt',
                            'Une situation où le ménage épargne plus qu’il ne dépense',
                            'Une situation où le revenu du ménage est inférieur à un seuil fixé',
                            'Une situation où le ménage n’a aucune dette',
                        ],
                        'correct' => 2,
                        'explanation' => 'La pauvreté monétaire se définit par un revenu inférieur à un seuil (le seuil de pauvreté). Ne pas payer d’impôt ou ne pas avoir de dette ne suffit pas à la définir.',
                    ],
                ],
            ],

            // ============================================================
            // QUIZ 7
            // ============================================================
            [
                'title' => 'Fiscalité et comportement économique',
                'description' => 'Quiz débutant sur les taxes, les externalités, les avantages fiscaux et la fraude fiscale.',
                'questions' => [
                    [
                        'question' => 'Quel est l’effet direct d’une taxe sur un produit ?',
                        'choices' => [
                            'Une hausse du prix payé par les consommateurs',
                            'Une baisse du prix payé par les consommateurs',
                            'Une disparition totale de la demande pour ce produit',
                            'Une hausse des salaires des vendeurs',
                        ],
                        'correct' => 0,
                        'explanation' => 'Une taxe augmente le coût du produit, donc le prix payé par les consommateurs. La demande diminue en général, sans disparaître.',
                    ],
                    [
                        'question' => 'Qu’est-ce qu’un droit d’accise ?',
                        'choices' => [
                            'Une taxe sur tous les revenus du travail',
                            'Une taxe sur les bénéfices des entreprises',
                            'Un impôt sur la valeur du logement',
                            'Une taxe sur certains produits, comme l’alcool, le tabac ou les carburants',
                        ],
                        'correct' => 3,
                        'explanation' => 'Les droits d’accise visent des produits précis (alcool, tabac, carburants), et non l’ensemble des revenus, des bénéfices ou du patrimoine.',
                    ],
                    [
                        'question' => 'Qu’est-ce qu’une externalité négative ?',
                        'choices' => [
                            'Un impôt payé par une entreprise à l’étranger',
                            'Un bénéfice reçu par des personnes non concernées',
                            'Un coût subi par des tiers, que ne paie pas celui qui le cause',
                            'Une perte de revenu due à une hausse des prix',
                        ],
                        'correct' => 2,
                        'explanation' => 'Une externalité négative est un coût imposé à d’autres (bruit, pollution) sans compensation. Un bénéfice pour des tiers est une externalité positive.',
                    ],
                    [
                        'question' => 'Lequel est un exemple d’externalité négative ?',
                        'choices' => [
                            'L’achat d’un livre par un lecteur',
                            'La pollution d’une usine qui gêne les habitants voisins',
                            'Le salaire versé à un employé',
                            'Un vaccin qui protège la personne vaccinée et son entourage',
                        ],
                        'correct' => 1,
                        'explanation' => 'La pollution impose un coût aux voisins qui n’ont rien décidé. Le vaccin est au contraire une externalité positive.',
                    ],
                    [
                        'question' => 'Pourquoi l’État peut-il taxer les produits polluants ?',
                        'choices' => [
                            'Pour que le prix reflète le coût de la pollution pour la société',
                            'Pour rendre ces produits moins chers',
                            'Pour encourager leur consommation',
                            'Pour supprimer toute production dans le pays',
                        ],
                        'correct' => 0,
                        'explanation' => 'Une taxe sur un produit polluant en augmente le prix, ce qui intègre le coût de la pollution et incite à en consommer moins.',
                    ],
                    [
                        'question' => 'Pourquoi le tabac est-il souvent fortement taxé ?',
                        'choices' => [
                            'Pour rendre les cigarettes accessibles à tous',
                            'Pour augmenter les salaires des vendeurs',
                            'Pour réduire sa consommation et financer les dépenses de santé',
                            'Pour encourager les exportations de tabac',
                        ],
                        'correct' => 2,
                        'explanation' => 'Une taxe élevée fait monter le prix, ce qui peut réduire la consommation, et elle rapporte des recettes qui aident à financer la santé.',
                    ],
                    [
                        'question' => 'Qu’est-ce qu’un crédit d’impôt ?',
                        'choices' => [
                            'Un prêt accordé par une banque à un contribuable',
                            'Une réduction de l’impôt à payer accordée pour certaines dépenses',
                            'Une hausse de l’impôt sur les hauts revenus',
                            'Un impôt payé à la place d’une taxe',
                        ],
                        'correct' => 1,
                        'explanation' => 'Un crédit d’impôt diminue directement le montant de l’impôt dû, par exemple pour certaines dépenses d’énergie ou d’emploi.',
                    ],
                    [
                        'question' => 'Pourquoi un avantage fiscal réduit-il les recettes de l’État ?',
                        'choices' => [
                            'Parce qu’il augmente les taux d’imposition',
                            'Parce qu’il supprime toutes les dépenses publiques',
                            'Parce qu’il oblige l’État à emprunter à l’étranger',
                            'Parce que les contribuables paient moins d’impôt qu’auparavant',
                        ],
                        'correct' => 3,
                        'explanation' => 'Un avantage fiscal diminue l’impôt payé par certains contribuables : l’État encaisse donc moins.',
                    ],
                    [
                        'question' => 'Qu’est-ce que la fraude fiscale ?',
                        'choices' => [
                            'Le fait de payer moins d’impôts grâce à une déduction légale',
                            'Le fait de payer un impôt en retard avec l’accord de l’administration',
                            'Le fait d’échapper illégalement à l’impôt, par exemple en cachant des revenus',
                            'Le fait de verser un don à une association',
                        ],
                        'correct' => 2,
                        'explanation' => 'La fraude fiscale est illégale. Utiliser une déduction prévue par la loi est légal.',
                    ],
                    [
                        'question' => 'Qu’est-ce qu’une exonération fiscale ?',
                        'choices' => [
                            'Un impôt supplémentaire sur les grandes entreprises',
                            'La dispense de payer un impôt pour certains contribuables ou certaines activités',
                            'Un prêt de l’État à des contribuables',
                            'Le remboursement d’une dette publique',
                        ],
                        'correct' => 1,
                        'explanation' => 'Une exonération dispense certains contribuables ou activités de payer un impôt, ce qui réduit les recettes de l’État.',
                    ],
                ],
            ],

            // ============================================================
            // QUIZ 8
            // ============================================================
            [
                'title' => 'Fiscalité, croissance et investissement',
                'description' => 'Quiz débutant sur les liens entre fiscalité, investissement, productivité et croissance économique.',
                'questions' => [
                    [
                        'question' => 'Qu’est-ce que la croissance économique ?',
                        'choices' => [
                            'La hausse générale des prix pendant plusieurs années',
                            'L’augmentation du nombre d’habitants du pays',
                            'L’augmentation de la production de biens et de services d’un pays sur la durée',
                            'La hausse des impôts votée par le parlement',
                        ],
                        'correct' => 2,
                        'explanation' => 'La croissance économique est l’augmentation de la production d’un pays, mesurée le plus souvent par le PIB. La hausse des prix est l’inflation.',
                    ],
                    [
                        'question' => 'Qu’est-ce que la productivité ?',
                        'choices' => [
                            'Le nombre d’heures travaillées par un salarié',
                            'La quantité produite avec une quantité donnée de travail ou de capital',
                            'Le montant total des salaires versés',
                            'Le profit réalisé par une entreprise',
                        ],
                        'correct' => 1,
                        'explanation' => 'La productivité rapporte la production aux ressources utilisées. Produire plus avec les mêmes ressources, c’est gagner en productivité.',
                    ],
                    [
                        'question' => 'Comment l’éducation peut-elle favoriser la croissance ?',
                        'choices' => [
                            'Elle améliore les compétences et donc la productivité des travailleurs',
                            'Elle réduit le nombre de personnes qui travaillent',
                            'Elle supprime le besoin d’investir dans les machines',
                            'Elle fixe les salaires de tous les travailleurs',
                        ],
                        'correct' => 0,
                        'explanation' => 'Des travailleurs mieux formés produisent davantage par heure de travail, ce qui augmente la production du pays.',
                    ],
                    [
                        'question' => 'Comment un impôt élevé sur les bénéfices peut-il influencer l’investissement des entreprises ?',
                        'choices' => [
                            'Il augmente le bénéfice restant après impôt et encourage l’investissement',
                            'Il oblige les entreprises à investir davantage',
                            'Il n’a aucun lien avec les décisions des entreprises',
                            'Il réduit le bénéfice restant après impôt, ce qui peut freiner l’investissement',
                        ],
                        'correct' => 3,
                        'explanation' => 'Plus l’impôt est élevé, moins il reste de bénéfice à réinvestir, ce qui peut décourager certains projets.',
                    ],
                    [
                        'question' => 'Pourquoi une hausse des taux d’intérêt rend-elle l’emprunt public plus coûteux ?',
                        'choices' => [
                            'Parce que l’État reçoit moins d’impôts',
                            'Parce que les prix des biens publics baissent',
                            'Parce que le PIB baisse automatiquement',
                            'Parce que l’État doit payer plus d’intérêts sur ses emprunts',
                        ],
                        'correct' => 3,
                        'explanation' => 'Le coût d’un emprunt est constitué des intérêts : plus le taux est élevé, plus l’État doit payer.',
                    ],
                    [
                        'question' => 'Pourquoi des règles fiscales stables sont-elles utiles aux entreprises ?',
                        'choices' => [
                            'Elles permettent de prévoir les impôts à payer avant d’investir',
                            'Elles suppriment tous les impôts sur les entreprises',
                            'Elles obligent les entreprises à embaucher',
                            'Elles empêchent les entreprises de vendre à l’étranger',
                        ],
                        'correct' => 0,
                        'explanation' => 'Une entreprise qui connaît ses impôts futurs peut calculer la rentabilité d’un projet et décider d’investir.',
                    ],
                    [
                        'question' => 'Qu’est-ce qu’une dépense publique inefficace ?',
                        'choices' => [
                            'Une dépense financée uniquement par des impôts',
                            'Une dépense décidée par le parlement',
                            'Une dépense qui coûte cher sans produire assez de bénéfices',
                            'Une dépense qui rapporte plus qu’elle ne coûte',
                        ],
                        'correct' => 2,
                        'explanation' => 'Une dépense est inefficace quand ses résultats ne justifient pas son coût. Le mode de financement ou la décision du parlement ne disent rien sur son efficacité.',
                    ],
                    [
                        'question' => 'Qu’est-ce que la pression fiscale ?',
                        'choices' => [
                            'Le nombre de contrôles fiscaux réalisés chaque année',
                            'Le total des impôts et cotisations rapporté au PIB',
                            'Le montant d’impôt payé par un seul ménage',
                            'Le taux d’intérêt payé sur la dette publique',
                        ],
                        'correct' => 1,
                        'explanation' => 'La pression fiscale compare l’ensemble des prélèvements obligatoires à la taille de l’économie (le PIB).',
                    ],
                    [
                        'question' => 'Qu’est-ce que le PIB par habitant ?',
                        'choices' => [
                            'Le PIB divisé par le nombre d’habitants du pays',
                            'Le PIB multiplié par le nombre d’habitants',
                            'Le revenu exact de chaque habitant',
                            'Le total des impôts payés par habitant',
                        ],
                        'correct' => 0,
                        'explanation' => 'PIB par habitant = PIB / population. C’est une moyenne, qui ne donne pas le revenu de chaque personne.',
                    ],
                    [
                        'question' => 'Pourquoi l’État a-t-il besoin de recettes stables ?',
                        'choices' => [
                            'Pour éviter de dépenser quoi que ce soit',
                            'Pour pouvoir supprimer tous les impôts',
                            'Pour planifier et financer les services publics',
                            'Pour empêcher les entreprises de se développer',
                        ],
                        'correct' => 2,
                        'explanation' => 'Des recettes régulières permettent de prévoir les dépenses (écoles, hôpitaux, routes) sur plusieurs années.',
                    ],
                ],
            ],

            // ============================================================
            // QUIZ 9
            // ============================================================
            [
                'title' => 'Finances publiques et gestion économique',
                'description' => 'Quiz débutant sur le budget de l’État, son vote, son contrôle et les règles de gestion des finances publiques.',
                'questions' => [
                    [
                        'question' => 'Qu’est-ce qu’un budget équilibré ?',
                        'choices' => [
                            'Un budget où les dépenses dépassent les recettes',
                            'Un budget où les recettes sont égales aux dépenses',
                            'Un budget où l’État n’a aucune dépense',
                            'Un budget où tous les contribuables paient le même impôt',
                        ],
                        'correct' => 1,
                        'explanation' => 'Un budget est équilibré quand recettes et dépenses sont égales, donc sans déficit ni excédent.',
                    ],
                    [
                        'question' => 'Qui vote le budget de l’État dans la plupart des démocraties ?',
                        'choices' => [
                            'La banque centrale',
                            'Les entreprises privées',
                            'Le parlement',
                            'Les banques commerciales',
                        ],
                        'correct' => 2,
                        'explanation' => 'Le parlement autorise les recettes et les dépenses de l’État en votant le budget proposé par le gouvernement.',
                    ],
                    [
                        'question' => 'En quoi consiste une analyse coûts-bénéfices d’un projet public ?',
                        'choices' => [
                            'Calculer uniquement les impôts perçus grâce au projet',
                            'Compter le nombre de personnes employées par le projet',
                            'Fixer le prix de vente du projet au public',
                            'Comparer les coûts du projet avec les avantages qu’il apporte',
                        ],
                        'correct' => 3,
                        'explanation' => 'L’analyse coûts-bénéfices met en balance ce que coûte un projet et ce qu’il rapporte à la société, pour décider s’il vaut la peine d’être réalisé.',
                    ],
                    [
                        'question' => 'Que mesure le solde budgétaire ?',
                        'choices' => [
                            'La différence entre les recettes et les dépenses de l’État',
                            'Le total de la dette accumulée par l’État',
                            'La différence entre les exportations et les importations',
                            'Le montant total des impôts directs',
                        ],
                        'correct' => 0,
                        'explanation' => 'Solde budgétaire = recettes − dépenses : positif, c’est un excédent ; négatif, c’est un déficit. La dette est un stock accumulé.',
                    ],
                    [
                        'question' => 'Pourquoi la transparence budgétaire est-elle utile ?',
                        'choices' => [
                            'Elle empêche le parlement de contrôler le budget',
                            'Elle réduit automatiquement les impôts',
                            'Elle permet aux citoyens de savoir comment l’argent public est utilisé',
                            'Elle supprime le besoin d’un budget',
                        ],
                        'correct' => 2,
                        'explanation' => 'Un budget public clair permet aux citoyens et au parlement de contrôler l’usage de l’argent public.',
                    ],
                    [
                        'question' => 'Qu’est-ce qu’une règle budgétaire ?',
                        'choices' => [
                            'Une obligation de dépenser tout le budget avant la fin de l’année',
                            'Une loi qui interdit à l’État de lever des impôts',
                            'Un objectif de hausse de tous les salaires publics',
                            'Une limite fixée à certains niveaux de déficit ou de dette',
                        ],
                        'correct' => 3,
                        'explanation' => 'Une règle budgétaire fixe un plafond (par exemple sur le déficit) pour garder les finances publiques sous contrôle.',
                    ],
                    [
                        'question' => 'Pourquoi contrôle-t-on l’utilisation de l’argent public ?',
                        'choices' => [
                            'Pour vérifier que les fonds sont utilisés de façon régulière et efficace',
                            'Pour augmenter les impôts chaque année',
                            'Pour empêcher toute dépense publique',
                            'Pour remplacer le vote du budget',
                        ],
                        'correct' => 0,
                        'explanation' => 'Le contrôle vérifie que les dépenses respectent la loi et servent leur objectif.',
                    ],
                    [
                        'question' => 'Pourquoi un gouvernement doit-il penser à long terme quand il s’endette ?',
                        'choices' => [
                            'Parce que la dette disparaît toute seule après un an',
                            'Parce que la dette devra être remboursée, par les contribuables futurs',
                            'Parce que la dette n’a aucune conséquence sur les impôts',
                            'Parce que seuls les ménages actuels paient la dette',
                        ],
                        'correct' => 1,
                        'explanation' => 'Une dette doit être remboursée avec intérêts : les impôts futurs devront la financer.',
                    ],
                    [
                        'question' => 'Que désignent les prélèvements obligatoires ?',
                        'choices' => [
                            'Les dons que les citoyens choisissent de faire à l’État',
                            'Les prêts que les banques accordent à l’État',
                            'Les frais payés pour un service privé',
                            'L’ensemble des impôts et cotisations que la loi impose de payer',
                        ],
                        'correct' => 3,
                        'explanation' => 'Les prélèvements obligatoires sont les sommes que la loi oblige à payer (impôts, cotisations sociales), contrairement aux dons ou aux prêts.',
                    ],
                    [
                        'question' => 'À quoi sert la loi de finances ?',
                        'choices' => [
                            'À fixer les prix de tous les produits vendus',
                            'À autoriser les recettes et les dépenses de l’État pour l’année',
                            'À décider des taux d’intérêt de la banque centrale',
                            'À contrôler les salaires des entreprises privées',
                        ],
                        'correct' => 1,
                        'explanation' => 'La loi de finances est le texte voté par le parlement qui fixe les recettes et les dépenses de l’État pour l’année.',
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