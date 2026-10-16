<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class ManagementAccountingBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'management-accounting')->firstOrFail();

        $quizSettings = [
            ['duration' => 10, 'passing_score' => 80],
            ['duration' => 10, 'passing_score' => 80],
            ['duration' => 10, 'passing_score' => 80],
            ['duration' => 10, 'passing_score' => 80],
            ['duration' => 10, 'passing_score' => 80],
            ['duration' => 10, 'passing_score' => 80],
            ['duration' => 10, 'passing_score' => 80],
            ['duration' => 10, 'passing_score' => 80],
        ];

        $quizzes = [
            [
                'title' => 'Comptabilité de gestion — Introduction',
                'description' => 'Découvrez les objectifs et concepts fondamentaux de la comptabilité de gestion.',
                'questions' => [
                    [
                        'question' => 'À quoi sert la comptabilité de gestion dans une entreprise ?',
                        'explanation' => 'C’est un tableau de bord interne : on prévoit, on suit, puis on choisit en connaissance de cause.',
                        'choices' => [
                            ['choice_text' => 'À préparer les comptes publiés pour les actionnaires et les banques', 'is_correct' => false],
                            ['choice_text' => 'À aider les dirigeants à planifier, à contrôler et à décider', 'is_correct' => true],
                            ['choice_text' => 'À calculer l’impôt que l’entreprise doit verser à l’État', 'is_correct' => false],
                            ['choice_text' => 'À tenir le registre légal des ventes et des achats de l’année', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Samira compare la comptabilité financière et la comptabilité de gestion. Quelle phrase est vraie ?',
                        'explanation' => 'La comptabilité financière s’adresse surtout à l’extérieur (banques, administration fiscale, actionnaires). La comptabilité de gestion, elle, s’adapte aux questions des managers.',
                        'choices' => [
                            ['choice_text' => 'La comptabilité de gestion sert surtout les besoins internes de l’entreprise', 'is_correct' => true],
                            ['choice_text' => 'La comptabilité de gestion est imposée par la loi et publiée chaque année', 'is_correct' => false],
                            ['choice_text' => 'La comptabilité financière sert surtout à calculer le coût de chaque produit', 'is_correct' => false],
                            ['choice_text' => 'La comptabilité de gestion suit les mêmes règles dans toutes les entreprises', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un coût mesure ___.',
                        'explanation' => 'Matières, salaires, électricité : tout ce que l’on consomme pour fabriquer ou offrir quelque chose forme un coût.',
                        'choices' => [
                            ['choice_text' => 'l’argent encaissé quand le produit est vendu à un client de l’entreprise', 'is_correct' => false],
                            ['choice_text' => 'la part des bénéfices de l’année reversée aux associés de l’entreprise', 'is_correct' => false],
                            ['choice_text' => 'le montant des dettes qui restent à rembourser auprès de la banque', 'is_correct' => false],
                            ['choice_text' => 'la valeur des ressources utilisées pour produire un bien ou un service', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Qui utilise principalement les informations de la comptabilité de gestion ?',
                        'explanation' => 'C’est un outil interne : la direction et les chefs de service s’en servent pour piloter au quotidien.',
                        'choices' => [
                            ['choice_text' => 'Les clients qui achètent les produits de l’entreprise', 'is_correct' => false],
                            ['choice_text' => 'Les fournisseurs qui livrent les matières premières', 'is_correct' => false],
                            ['choice_text' => 'Les inspecteurs des impôts lors d’un contrôle', 'is_correct' => false],
                            ['choice_text' => 'Les responsables et managers de l’organisation', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'À quoi sert de connaître ses coûts ?',
                        'explanation' => 'Si tu ignores ce que te coûte un produit, tu ne peux pas savoir à quel prix le vendre sans perdre d’argent.',
                        'choices' => [
                            ['choice_text' => 'À savoir combien de clients ont payé en retard', 'is_correct' => false],
                            ['choice_text' => 'À fixer des prix et à surveiller les dépenses', 'is_correct' => true],
                            ['choice_text' => 'À choisir le montant du capital à déclarer au départ', 'is_correct' => false],
                            ['choice_text' => 'À mesurer le niveau de satisfaction des employés', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce qu’un centre de coûts ?',
                        'explanation' => 'Par exemple l’atelier ou le service livraison : on y regroupe les coûts pour voir ce que chacun consomme.',
                        'choices' => [
                            ['choice_text' => 'Un état qui récapitule les dépenses prévues pour l’année suivante dans l’entreprise', 'is_correct' => false],
                            ['choice_text' => 'Une unité ou fonction dans laquelle des coûts sont regroupés et analysés', 'is_correct' => true],
                            ['choice_text' => 'Un service chargé d’encaisser les paiements et de suivre les clients en retard', 'is_correct' => false],
                            ['choice_text' => 'Un ensemble de produits vendus au même prix à la même clientèle visée', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle donnée non financière peut aider un manager à décider ?',
                        'explanation' => 'Un manager décide aussi avec des volumes, des délais, de la qualité ou de la productivité, pas seulement avec des montants.',
                        'choices' => [
                            ['choice_text' => 'Le taux de produits défectueux ou le délai de livraison', 'is_correct' => true],
                            ['choice_text' => 'Le montant des charges payées au cours du mois dernier', 'is_correct' => false],
                            ['choice_text' => 'Le chiffre d’affaires réalisé au cours du dernier trimestre', 'is_correct' => false],
                            ['choice_text' => 'Le résultat net publié dans les comptes annuels de l’entreprise', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les coûts sont-ils souvent regroupés par produit, service ou activité ?',
                        'explanation' => 'On voit ainsi où partent les ressources et quel produit ou service rapporte vraiment.',
                        'choices' => [
                            ['choice_text' => 'Pour analyser la consommation de ressources et la performance des différentes activités', 'is_correct' => true],
                            ['choice_text' => 'Pour réduire le nombre de comptes à tenir et simplifier la clôture annuelle de l’exercice', 'is_correct' => false],
                            ['choice_text' => 'Pour respecter l’obligation légale de publier les comptes détaillés de chaque produit', 'is_correct' => false],
                            ['choice_text' => 'Pour comparer l’entreprise avec ses concurrents cotés sur le marché boursier', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Youssef utilise les mêmes chiffres de coûts pour deux décisions différentes. Que doit-il vérifier ?',
                        'explanation' => 'Un coût utile pour une décision à court terme peut ne servir à rien pour un choix stratégique : tout dépend de la question posée.',
                        'choices' => [
                            ['choice_text' => 'Que le total de ces coûts est identique d’une décision à l’autre', 'is_correct' => false],
                            ['choice_text' => 'Que chaque coût est classé comme fixe plutôt que variable', 'is_correct' => false],
                            ['choice_text' => 'Que ces coûts sont utiles pour la décision précise qu’il étudie', 'is_correct' => true],
                            ['choice_text' => 'Que ces coûts figurent bien dans la comptabilité générale de l’année', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est un résultat attendu d’une bonne comptabilité de gestion ?',
                        'explanation' => 'Mieux comprendre ses chiffres aide à prendre de meilleures décisions : c’est le but.',
                        'choices' => [
                            ['choice_text' => 'Réduire le nombre de factures à enregistrer', 'is_correct' => false],
                            ['choice_text' => 'Améliorer la qualité des décisions de gestion', 'is_correct' => true],
                            ['choice_text' => 'Obtenir des comptes plus simples à publier chaque année', 'is_correct' => false],
                            ['choice_text' => 'Faire disparaître les charges fixes de l’entreprise', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Comptabilité de gestion — Coûts fixes et coûts variables',
                'description' => 'Comprenez les principales catégories de coûts selon leur comportement.',
                'questions' => [
                    [
                        'question' => 'Qu’est-ce qu’un coût fixe ?',
                        'explanation' => 'Le loyer ne change pas que tu produises 100 ou 1 000 pièces : c’est ça, un coût fixe.',
                        'choices' => [
                            ['choice_text' => 'Un coût qui augmente ou diminue en proportion du nombre d’unités produites', 'is_correct' => false],
                            ['choice_text' => 'Un coût payé une seule fois, au moment de la création de l’entreprise', 'is_correct' => false],
                            ['choice_text' => 'Un coût qui n’apparaît que pendant les mois où des ventes sont réalisées', 'is_correct' => false],
                            ['choice_text' => 'Un coût qui ne change pas quand le volume produit varie, sur une courte période', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Lequel est un exemple courant de coût fixe pour une entreprise ?',
                        'explanation' => 'Le loyer reste le même que le local serve beaucoup ou peu ; les matières, l’emballage ou les commissions, eux, suivent les ventes.',
                        'choices' => [
                            ['choice_text' => 'Le loyer mensuel d’un local', 'is_correct' => true],
                            ['choice_text' => 'Les matières premières par unité produite', 'is_correct' => false],
                            ['choice_text' => 'Les commissions directement liées aux ventes', 'is_correct' => false],
                            ['choice_text' => 'Les emballages utilisés pour chaque unité', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un coût variable est un coût qui ___.',
                        'explanation' => 'Plus tu produis, plus tu consommes de matières ou d’énergie : le coût total monte avec l’activité.',
                        'choices' => [
                            ['choice_text' => 'augmente ou diminue avec le volume produit ou vendu', 'is_correct' => true],
                            ['choice_text' => 'reste le même d’un mois à l’autre, même si l’activité change', 'is_correct' => false],
                            ['choice_text' => 'est payé en une fois au moment de l’achat d’une machine', 'is_correct' => false],
                            ['choice_text' => 'concerne les services administratifs et non la production', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Lequel est un exemple de coût variable dans une usine ?',
                        'explanation' => 'Plus on fabrique, plus on consomme de matières : leur coût monte avec la production, alors que le loyer ou le salaire du directeur ne bougent pas.',
                        'choices' => [
                            ['choice_text' => 'Le loyer annuel du bâtiment qui abrite toute l’usine', 'is_correct' => false],
                            ['choice_text' => 'Le salaire mensuel du directeur général de l’usine', 'is_correct' => false],
                            ['choice_text' => 'L’abonnement annuel au logiciel de comptabilité de l’usine', 'is_correct' => false],
                            ['choice_text' => 'Les matières premières consommées pour produire', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Si la production double et que le coût variable unitaire reste constant, que se passe-t-il généralement au coût variable total ?',
                        'explanation' => 'Deux fois plus d’unités au même coût par unité : la facture totale double. Exemple : 3 € × 100 = 300 €, puis 3 € × 200 = 600 €.',
                        'choices' => [
                            ['choice_text' => 'Il augmente de 50 %', 'is_correct' => false],
                            ['choice_text' => 'Il reste au même niveau', 'is_correct' => false],
                            ['choice_text' => 'Il double', 'is_correct' => true],
                            ['choice_text' => 'Il est divisé par deux', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Karim arrête sa production pendant un mois, mais son loyer et ses assurances restent dus : 10 000 € de coûts fixes par mois. Que paie-t-il ce mois-là ?',
                        'explanation' => 'Les coûts fixes se paient même sans production. Seuls les coûts variables tombent à zéro.',
                        'choices' => [
                            ['choice_text' => '0 €', 'is_correct' => false],
                            ['choice_text' => '5 000 €', 'is_correct' => false],
                            ['choice_text' => '10 000 €', 'is_correct' => true],
                            ['choice_text' => '20 000 €', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'À quoi sert de séparer les coûts fixes des coûts variables ?',
                        'explanation' => 'C’est la base du seuil de rentabilité, des prévisions et de la fixation des prix.',
                        'choices' => [
                            ['choice_text' => 'À voir comment le résultat réagit quand l’activité monte ou baisse', 'is_correct' => true],
                            ['choice_text' => 'À répartir les coûts communs entre les produits vendus par l’entreprise', 'is_correct' => false],
                            ['choice_text' => 'À séparer les dépenses déjà payées de celles qui restent encore à payer', 'is_correct' => false],
                            ['choice_text' => 'À distinguer les dépenses courantes des dépenses d’investissement durable', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Le loyer d’un atelier est de 6 000 € par mois. Que devient le loyer par pièce quand l’atelier produit 3 000 pièces au lieu de 1 500 ?',
                        'explanation' => '6 000 ÷ 1 500 = 4 €, puis 6 000 ÷ 3 000 = 2 €. Le loyer total ne bouge pas, mais chaque pièce en supporte une part plus petite.',
                        'choices' => [
                            ['choice_text' => 'Il passe de 4 à 8 € : plus de pièces demandent plus de loyer', 'is_correct' => false],
                            ['choice_text' => 'Il reste à 4 € : le loyer par pièce est fixé par le propriétaire', 'is_correct' => false],
                            ['choice_text' => 'Il passe de 4 à 2 € : le même loyer est partagé entre plus de pièces', 'is_correct' => true],
                            ['choice_text' => 'Il tombe à 0 € : le loyer est entièrement payé dès la première pièce', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Karim produit deux fois plus, mais le prix de ses matières grimpe en même temps. Que peut-il arriver à son coût variable total ?',
                        'explanation' => 'Coût variable total = quantité × coût par unité. Si les deux montent, le total augmente plus vite que la production.',
                        'choices' => [
                            ['choice_text' => 'Il peut augmenter plus vite que la production', 'is_correct' => true],
                            ['choice_text' => 'Il reste identique, car il ne dépend pas du volume', 'is_correct' => false],
                            ['choice_text' => 'Il baisse, puisque les coûts fixes sont mieux répartis', 'is_correct' => false],
                            ['choice_text' => 'Il double tout juste, comme le volume produit', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Laquelle de ces phrases sur le comportement des coûts est vraie ?',
                        'explanation' => 'Un loyer reste le même, des matières premières suivent la production : deux comportements différents.',
                        'choices' => [
                            ['choice_text' => 'L’ensemble des coûts varie dans les mêmes proportions que l’activité', 'is_correct' => false],
                            ['choice_text' => 'Les coûts fixes augmentent avec le volume et les coûts variables restent stables', 'is_correct' => false],
                            ['choice_text' => 'Les coûts fixes et variables ne réagissent pas pareil quand l’activité change', 'is_correct' => true],
                            ['choice_text' => 'Les coûts variables se rencontrent dans les usines, mais pas dans les services', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Comptabilité de gestion — Coûts directs et indirects',
                'description' => 'Apprenez à distinguer les coûts directement traçables des coûts nécessitant une répartition.',
                'questions' => [
                    [
                        'question' => 'Qu’est-ce qu’un coût direct ?',
                        'explanation' => 'Si l’on peut dire exactement pour quel produit ou service le coût a été engagé, il est direct. Exemple : le tissu d’une djellaba.',
                        'choices' => [
                            ['choice_text' => 'Un coût qui concerne plusieurs produits et doit être réparti entre eux', 'is_correct' => false],
                            ['choice_text' => 'Un coût qui est payé comptant plutôt qu’à crédit au fournisseur', 'is_correct' => false],
                            ['choice_text' => 'Un coût qui ne varie pas avec le volume de production', 'is_correct' => false],
                            ['choice_text' => 'Un coût qui peut être directement rattaché à un objet de coût', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Un atelier de couture achète du tissu utilisé seulement pour ses djellabas. Pour le produit « djellaba », ce tissu est ...',
                        'explanation' => 'Le tissu va dans un seul produit : on peut le rattacher sans calcul de répartition, c’est un coût direct.',
                        'choices' => [
                            ['choice_text' => 'un coût indirect, car il faut le répartir entre plusieurs produits', 'is_correct' => false],
                            ['choice_text' => 'un coût fixe, car le tissu est acheté une seule fois par an', 'is_correct' => false],
                            ['choice_text' => 'un coût de structure, car il concerne toute l’entreprise', 'is_correct' => false],
                            ['choice_text' => 'un coût direct, car on sait à quel produit il est destiné', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce qu’un coût indirect ?',
                        'explanation' => 'Le coût sert à plusieurs produits à la fois, comme l’électricité de l’atelier : il faut le partager avec une clé de répartition.',
                        'choices' => [
                            ['choice_text' => 'Un coût qui varie avec le nombre d’unités fabriquées dans le mois en cours', 'is_correct' => false],
                            ['choice_text' => 'Un coût qui se rattache à un seul produit sans aucun calcul de répartition', 'is_correct' => false],
                            ['choice_text' => 'Un coût qui concerne plusieurs objets de coût et doit être réparti', 'is_correct' => true],
                            ['choice_text' => 'Un coût qui n’est enregistré qu’en fin d’année dans les comptes de l’entreprise', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel exemple peut représenter un coût indirect dans une usine ?',
                        'explanation' => 'Le superviseur suit plusieurs lignes : son salaire ne se rattache pas à un seul produit, on le partage.',
                        'choices' => [
                            ['choice_text' => 'La matière première achetée pour fabriquer un seul produit bien précis', 'is_correct' => false],
                            ['choice_text' => 'Le salaire d’un superviseur de production travaillant pour plusieurs produits', 'is_correct' => true],
                            ['choice_text' => 'La commission versée à un vendeur pour une vente précise, faite à un client identifié', 'is_correct' => false],
                            ['choice_text' => 'L’emballage posé sur chaque unité d’un produit bien identifié et suivi', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le but de la répartition des coûts indirects entre les produits ?',
                        'explanation' => 'On ne peut pas relier un coût commun à un produit d’un seul coup : on le partage avec une clé de répartition.',
                        'choices' => [
                            ['choice_text' => 'Faire disparaître ces coûts de la comptabilité de toute l’entreprise', 'is_correct' => false],
                            ['choice_text' => 'Donner à chaque produit une part raisonnable des coûts communs', 'is_correct' => true],
                            ['choice_text' => 'Transformer ces coûts en coûts variables pour chaque produit vendu', 'is_correct' => false],
                            ['choice_text' => 'Faire apparaître un bénéfice plus élevé sur chacun des produits', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pour répartir la facture d’électricité d’un atelier entre deux produits, quelle clé est la plus logique ?',
                        'explanation' => 'Une bonne clé suit la consommation réelle : plus un produit fait tourner les machines, plus il supporte d’électricité.',
                        'choices' => [
                            ['choice_text' => 'Les heures machine utilisées par chaque produit', 'is_correct' => true],
                            ['choice_text' => 'Le prix de vente unitaire affiché pour chaque produit', 'is_correct' => false],
                            ['choice_text' => 'Le nombre de commandes reçues pour chaque produit', 'is_correct' => false],
                            ['choice_text' => 'L’ancienneté de chaque produit dans le catalogue', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Le chef de la ligne A est payé 9 000 € par mois. La ligne A fabrique trois produits. Pour le coût de chacun de ces trois produits, ce salaire est ...',
                        'explanation' => 'Le même salaire est direct pour la ligne A, mais indirect pour chaque produit, car il sert aux trois. Tout dépend de l’objet de coût choisi.',
                        'choices' => [
                            ['choice_text' => 'un coût direct, puisqu’il correspond à un seul salarié', 'is_correct' => false],
                            ['choice_text' => 'un coût variable, puisqu’il change si la production change', 'is_correct' => false],
                            ['choice_text' => 'un coût à ignorer, puisque les salaires ne font pas partie du coût d’un produit', 'is_correct' => false],
                            ['choice_text' => 'un coût indirect, à répartir entre les trois produits', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Que risque-t-on avec une mauvaise répartition des coûts indirects ?',
                        'explanation' => 'Si un produit supporte trop peu de coûts communs, il paraît rentable alors qu’il ne l’est pas, et les prix et décisions suivent.',
                        'choices' => [
                            ['choice_text' => 'On ne peut plus calculer les coûts directs de chaque produit fabriqué', 'is_correct' => false],
                            ['choice_text' => 'On doit refaire l’inventaire complet des stocks à la fin de l’année', 'is_correct' => false],
                            ['choice_text' => 'On peut croire qu’un produit est rentable alors qu’il ne l’est pas', 'is_correct' => true],
                            ['choice_text' => 'On paie plus d’impôts que prévu à la fin de l’exercice comptable', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est l’objectif d’une bonne base de répartition ?',
                        'explanation' => 'La clé doit coller à l’usage réel : celui qui consomme plus de ressources doit supporter plus de coût.',
                        'choices' => [
                            ['choice_text' => 'Partager le coût en parts égales entre les produits, quel que soit l’usage de chacun', 'is_correct' => false],
                            ['choice_text' => 'Faire supporter la plus grande part du coût au produit qui se vend le plus', 'is_correct' => false],
                            ['choice_text' => 'Réduire le montant total des coûts indirects pour améliorer les marges de l’entreprise', 'is_correct' => false],
                            ['choice_text' => 'Représenter de manière raisonnable la consommation du coût par les objets de coût', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Dans une imprimerie, quel coût est le plus facile à attribuer à une commande précise ?',
                        'explanation' => 'Le papier se mesure commande par commande : c’est un coût direct. Le loyer ou l’électricité sont partagés entre toutes les commandes, donc indirects.',
                        'choices' => [
                            ['choice_text' => 'Le loyer du local où se trouvent toutes les machines', 'is_correct' => false],
                            ['choice_text' => 'Le papier acheté spécialement pour cette commande', 'is_correct' => true],
                            ['choice_text' => 'La facture d’électricité payée pour l’ensemble de l’atelier', 'is_correct' => false],
                            ['choice_text' => 'Le salaire de la comptable qui suit toutes les commandes', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Comptabilité de gestion — Coût total et coût unitaire',
                'description' => 'Comprenez les calculs de base relatifs au coût total et au coût par unité.',
                'questions' => [
                    [
                        'question' => 'Comment obtient-on le coût total ?',
                        'explanation' => 'Coût total = coûts fixes + coûts variables (et les autres coûts retenus).',
                        'choices' => [
                            ['choice_text' => 'En additionnant tous les coûts liés à ce que l’on étudie', 'is_correct' => true],
                            ['choice_text' => 'En retranchant les coûts du chiffre d’affaires', 'is_correct' => false],
                            ['choice_text' => 'En divisant le chiffre d’affaires par le nombre d’unités', 'is_correct' => false],
                            ['choice_text' => 'En additionnant les coûts fixes, sans les coûts variables', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Samira fabrique 3 000 savons pour un coût total de 30 000 €. Quel est le coût moyen d’un savon ?',
                        'explanation' => '30 000 ÷ 3 000 = 10 € par savon.',
                        'choices' => [
                            ['choice_text' => '3 €', 'is_correct' => false],
                            ['choice_text' => '10 €', 'is_correct' => true],
                            ['choice_text' => '30 €', 'is_correct' => false],
                            ['choice_text' => '100 €', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Karim a 20 000 € de coûts fixes et 30 000 € de coûts variables ce mois-ci. Quel est son coût total ?',
                        'explanation' => '20 000 + 30 000 = 50 000 €.',
                        'choices' => [
                            ['choice_text' => '10 000 €', 'is_correct' => false],
                            ['choice_text' => '20 000 €', 'is_correct' => false],
                            ['choice_text' => '50 000 €', 'is_correct' => true],
                            ['choice_text' => '100 000 €', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un coût fixe de 12 000 € est partagé entre 1 000 puis 2 000 unités. Que se passe-t-il pour le coût fixe par unité ?',
                        'explanation' => '12 000 ÷ 1 000 = 12 €, puis 12 000 ÷ 2 000 = 6 €. Le total ne change pas, mais il est partagé entre deux fois plus d’unités.',
                        'choices' => [
                            ['choice_text' => 'Il passe de 12 à 24 €, car le coût fixe suit le nombre d’unités produites', 'is_correct' => false],
                            ['choice_text' => 'Il reste à 12 €, car le coût fixe par unité est lui aussi une donnée fixe', 'is_correct' => false],
                            ['choice_text' => 'Il passe de 12 à 3 €, car le coût fixe total est divisé par quatre ici', 'is_correct' => false],
                            ['choice_text' => 'Il passe de 12 à 6 €, car le même total est réparti sur plus d’unités', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Un atelier fabrique 5 000 pièces avec 25 000 € de coûts variables. Quel est le coût variable par pièce ?',
                        'explanation' => '25 000 ÷ 5 000 = 5 € par pièce.',
                        'choices' => [
                            ['choice_text' => '5 €', 'is_correct' => true],
                            ['choice_text' => '20 €', 'is_correct' => false],
                            ['choice_text' => '25 €', 'is_correct' => false],
                            ['choice_text' => '125 €', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Youssef a 40 000 € de coûts fixes et produit 8 000 unités. Quel est le coût fixe par unité ?',
                        'explanation' => '40 000 ÷ 8 000 = 5 € par unité.',
                        'choices' => [
                            ['choice_text' => '0,20 €', 'is_correct' => false],
                            ['choice_text' => '5 €', 'is_correct' => true],
                            ['choice_text' => '8 €', 'is_correct' => false],
                            ['choice_text' => '40 €', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'À quoi sert le coût moyen pour un manager ?',
                        'explanation' => 'Un coût moyen par unité permet de voir si un produit, un mois ou un niveau de production coûte plus ou moins cher qu’un autre.',
                        'choices' => [
                            ['choice_text' => 'À prévoir avec certitude les bénéfices des prochaines années de l’entreprise', 'is_correct' => false],
                            ['choice_text' => 'À remplacer les états financiers que l’entreprise publie chaque année', 'is_correct' => false],
                            ['choice_text' => 'À éliminer les coûts fixes du calcul du prix de revient de chaque produit', 'is_correct' => false],
                            ['choice_text' => 'À comparer le coût de fabrication entre produits, périodes ou volumes', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Le coût par unité baisse. Le coût total peut-il quand même monter ?',
                        'explanation' => 'Exemple : 10 € × 100 unités = 1 000 €, mais 9 € × 200 unités = 1 800 €. Le coût par unité baisse, le total monte.',
                        'choices' => [
                            ['choice_text' => 'Non, car coût total et coût par unité évoluent dans le même sens', 'is_correct' => false],
                            ['choice_text' => 'Non, car le coût total ne dépend pas du nombre d’unités produites', 'is_correct' => false],
                            ['choice_text' => 'Oui, mais cela suppose que les coûts fixes augmentent aussi', 'is_correct' => false],
                            ['choice_text' => 'Oui, si le volume augmente assez pour faire monter le total', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Un restaurant a dépensé 100 000 € en un an pour servir 10 000 repas. Quel est le coût moyen d’un repas ?',
                        'explanation' => '100 000 ÷ 10 000 = 10 € par repas.',
                        'choices' => [
                            ['choice_text' => '1 €', 'is_correct' => false],
                            ['choice_text' => '10 €', 'is_correct' => true],
                            ['choice_text' => '100 €', 'is_correct' => false],
                            ['choice_text' => '1 000 €', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Le coût unitaire est égal au ___.',
                        'explanation' => 'Coût unitaire = coût total ÷ nombre d’unités. Avec 50 000 € pour 5 000 unités, on obtient 10 €.',
                        'choices' => [
                            ['choice_text' => 'coût fixe total divisé par le prix de vente', 'is_correct' => false],
                            ['choice_text' => 'prix de vente diminué du coût variable total', 'is_correct' => false],
                            ['choice_text' => 'coût total multiplié par le nombre d’unités', 'is_correct' => false],
                            ['choice_text' => 'coût total divisé par le nombre d’unités', 'is_correct' => true],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Comptabilité de gestion — Coût de revient et rentabilité',
                'description' => 'Apprenez à relier les coûts aux prix et à la rentabilité.',
                'questions' => [
                    [
                        'question' => 'Qu’est-ce que le coût de revient ?',
                        'explanation' => 'Le coût de revient regroupe tout ce que le produit a coûté jusqu’à sa mise à disposition du client : matières, main-d’œuvre, frais communs répartis.',
                        'choices' => [
                            ['choice_text' => 'Le prix payé par le client, taxes comprises, pour acheter le produit', 'is_correct' => false],
                            ['choice_text' => 'Le coût des matières premières achetées pour le produit', 'is_correct' => false],
                            ['choice_text' => 'Le total des coûts fixes de l’entreprise sur toute l’année', 'is_correct' => false],
                            ['choice_text' => 'L’ensemble des coûts supportés pour fabriquer et vendre un produit', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Un fabricant de bougies vend une bougie 50 € et son coût de revient est de 35 €. Quelle est sa marge par bougie ?',
                        'explanation' => 'Marge = prix de vente − coût de revient = 50 − 35 = 15 €.',
                        'choices' => [
                            ['choice_text' => '15 €', 'is_correct' => true],
                            ['choice_text' => '35 €', 'is_correct' => false],
                            ['choice_text' => '50 €', 'is_correct' => false],
                            ['choice_text' => '85 €', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est l’intérêt de connaître le coût de revient avant de fixer un prix ?',
                        'explanation' => 'Un prix inférieur au coût de revient fait perdre de l’argent à chaque vente. Le coût de revient donne donc un plancher pour le prix.',
                        'choices' => [
                            ['choice_text' => 'Être sûr que les clients accepteront le prix que l’on propose', 'is_correct' => false],
                            ['choice_text' => 'Éviter d’avoir à étudier la demande et la concurrence du marché', 'is_correct' => false],
                            ['choice_text' => 'Vérifier que le prix couvre les coûts et laisse une marge', 'is_correct' => true],
                            ['choice_text' => 'Supprimer les coûts indirects du calcul du prix de vente', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Deux produits d’une même entreprise ont des marges différentes. Quelle explication est possible ?',
                        'explanation' => 'Marge = prix − coût. Si l’un ou l’autre diffère d’un produit à l’autre, la marge diffère aussi.',
                        'choices' => [
                            ['choice_text' => 'Leurs prix de vente et leurs coûts de revient ne sont pas les mêmes', 'is_correct' => true],
                            ['choice_text' => 'La comptabilité de gestion calcule une seule marge pour toute l’entreprise', 'is_correct' => false],
                            ['choice_text' => 'Les ventes de l’un des deux produits n’ont pas été enregistrées', 'is_correct' => false],
                            ['choice_text' => 'Le produit le plus vendu a forcément la plus faible marge', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Chaque produit dégage une marge positive, et pourtant l’entreprise perd de l’argent sur l’année. Comment est-ce possible ?',
                        'explanation' => 'Exemple : trois produits dégagent 40 000 € de marge au total, mais les coûts fixes sont de 55 000 €. Résultat : −15 000 €.',
                        'choices' => [
                            ['choice_text' => 'Les marges positives sont annulées lorsque le volume des ventes augmente', 'is_correct' => false],
                            ['choice_text' => 'Les coûts variables ont été comptés deux fois dans chaque marge', 'is_correct' => false],
                            ['choice_text' => 'La somme des marges ne suffit pas à couvrir les coûts fixes et autres charges', 'is_correct' => true],
                            ['choice_text' => 'Les produits à marge positive n’entrent pas dans le calcul du résultat', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Samira vend 2 000 pots de confiture avec une marge de 12 € par pot. Quelle est sa marge totale ?',
                        'explanation' => '2 000 × 12 € = 24 000 € de marge totale.',
                        'choices' => [
                            ['choice_text' => '2 012 €', 'is_correct' => false],
                            ['choice_text' => '12 000 €', 'is_correct' => false],
                            ['choice_text' => '24 000 €', 'is_correct' => true],
                            ['choice_text' => '240 000 €', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Le prix des matières premières monte de 10 %. Que faut-il faire du coût de revient d’un produit ?',
                        'explanation' => 'Si les matières coûtent plus cher, le coût de revient augmente et la marge peut fondre. Un coût de revient se remet à jour régulièrement.',
                        'choices' => [
                            ['choice_text' => 'Le conserver, car un coût de revient est fixé une fois pour toutes', 'is_correct' => false],
                            ['choice_text' => 'Le recalculer, car la rentabilité du produit peut avoir changé', 'is_correct' => true],
                            ['choice_text' => 'Le remplacer par le prix de vente de l’année précédente', 'is_correct' => false],
                            ['choice_text' => 'Attendre que le produit soit vendu avant de s’en préoccuper', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une boutique lance un nouveau produit et le vend avec une marge très faible pendant deux mois. Quelle raison peut justifier ce choix ?',
                        'explanation' => 'Une marge faible peut être un choix à court terme : on gagne peu au début pour se faire connaître, puis on espère fidéliser les clients.',
                        'choices' => [
                            ['choice_text' => 'Attirer de nouveaux clients qui reviendront acheter ensuite', 'is_correct' => true],
                            ['choice_text' => 'Les coûts de revient ne comptent pas pendant un lancement', 'is_correct' => false],
                            ['choice_text' => 'Une marge faible rapporte plus qu’une marge élevée à volume égal', 'is_correct' => false],
                            ['choice_text' => 'Le prix de vente n’a pas de lien avec la stratégie commerciale', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Parmi ces objectifs, lequel justifie de comparer les marges des produits ?',
                        'explanation' => 'Un produit à forte marge rapporte plus à chaque vente. Comparer permet de savoir où concentrer les efforts.',
                        'choices' => [
                            ['choice_text' => 'Repérer les produits qui rapportent le plus à l’entreprise', 'is_correct' => true],
                            ['choice_text' => 'Arrêter de vendre les produits dont les ventes sont faibles', 'is_correct' => false],
                            ['choice_text' => 'Imposer la même marge à chaque produit du catalogue', 'is_correct' => false],
                            ['choice_text' => 'Se dispenser d’analyser le chiffre d’affaires par produit', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle formule donne la marge d’un produit ?',
                        'explanation' => 'Marge = prix de vente − coût. Si le résultat est négatif, on vend à perte.',
                        'choices' => [
                            ['choice_text' => 'Coût retenu pour le produit − prix de vente du produit', 'is_correct' => false],
                            ['choice_text' => 'Prix de vente − coût retenu pour le produit', 'is_correct' => true],
                            ['choice_text' => 'Prix de vente ÷ coût retenu pour le produit étudié', 'is_correct' => false],
                            ['choice_text' => 'Prix de vente × quantité vendue du produit étudié', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Comptabilité de gestion — Budgets de base',
                'description' => 'Découvrez les principes de préparation, suivi et analyse des budgets.',
                'questions' => [
                    [
                        'question' => 'Qu’est-ce qu’un budget ?',
                        'explanation' => 'C’est un plan en chiffres, fait avant la période : ventes prévues, dépenses prévues, ressources nécessaires.',
                        'choices' => [
                            ['choice_text' => 'Un état qui récapitule les opérations réalisées depuis le début de l’année', 'is_correct' => false],
                            ['choice_text' => 'Un plan chiffré des ressources et activités prévues pour une période', 'is_correct' => true],
                            ['choice_text' => 'Un document qui compare les prix pratiqués par les concurrents du secteur', 'is_correct' => false],
                            ['choice_text' => 'Un contrat qui fixe les prix payés aux fournisseurs de l’année', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'À quoi sert un budget dans une entreprise ?',
                        'explanation' => 'Le budget fixe un cap chiffré au départ. En fin de période, on le compare à la réalité pour voir où l’on s’est écarté.',
                        'choices' => [
                            ['choice_text' => 'À s’assurer que les ventes prévues seront bien réalisées par les équipes', 'is_correct' => false],
                            ['choice_text' => 'À remplacer la comptabilité financière par un document de prévisions', 'is_correct' => false],
                            ['choice_text' => 'À décrire en détail toutes les opérations qui ont été réalisées l’an dernier', 'is_correct' => false],
                            ['choice_text' => 'À prévoir les ressources nécessaires et à vérifier ensuite les résultats', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce qu’un budget des ventes ?',
                        'explanation' => 'On y note les quantités que l’on pense vendre et le chiffre d’affaires qui en découle.',
                        'choices' => [
                            ['choice_text' => 'Une prévision des salaires et charges sociales à payer aux employés', 'is_correct' => false],
                            ['choice_text' => 'La liste des équipements et machines détenus par l’entreprise', 'is_correct' => false],
                            ['choice_text' => 'Un état des dettes que l’entreprise doit encore rembourser', 'is_correct' => false],
                            ['choice_text' => 'Une prévision des quantités vendues et des revenus attendus', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Quel budget prépare-t-on en premier dans la plupart des entreprises ?',
                        'explanation' => 'Les ventes prévues décident de ce qu’il faut produire, acheter et embaucher : les autres budgets en découlent.',
                        'choices' => [
                            ['choice_text' => 'Celui de la trésorerie, car il se calcule avant les ventes et les achats', 'is_correct' => false],
                            ['choice_text' => 'Celui des ventes, car il détermine la production, les achats et le personnel', 'is_correct' => true],
                            ['choice_text' => 'Celui des achats, car il fixe le prix auquel les produits seront vendus', 'is_correct' => false],
                            ['choice_text' => 'Celui des investissements, car il décide de la taille du marché visé', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi comparer les résultats réels avec le budget ?',
                        'explanation' => 'Le but n’est pas de donner raison au budget, mais de repérer les écarts et d’en chercher la cause pour réagir.',
                        'choices' => [
                            ['choice_text' => 'Pour confirmer que les prévisions de départ étaient justes', 'is_correct' => false],
                            ['choice_text' => 'Pour corriger après coup les comptes déjà arrêtés en fin d’année', 'is_correct' => false],
                            ['choice_text' => 'Pour remplacer le budget par les chiffres de l’année passée', 'is_correct' => false],
                            ['choice_text' => 'Pour identifier les écarts et comprendre leurs causes', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce qu’un écart budgétaire ?',
                        'explanation' => 'Budget de 80 000 € de ventes, réalisé 72 000 € : l’écart est de 8 000 €. On cherche ensuite à comprendre pourquoi.',
                        'choices' => [
                            ['choice_text' => 'La différence entre le chiffre d’affaires et le coût de revient d’un produit', 'is_correct' => false],
                            ['choice_text' => 'La différence entre les produits et les charges de l’exercice', 'is_correct' => false],
                            ['choice_text' => 'La différence entre le budget de cette année et celui de l’an dernier', 'is_correct' => false],
                            ['choice_text' => 'La différence entre ce qui a été réalisé et ce qui était prévu au budget', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Les achats de matières ont dépassé le budget de 5 %. Quelle est la réaction la plus raisonnable ?',
                        'explanation' => 'Un écart n’est pas une faute : il peut venir de plus de ventes, d’un prix qui monte ou d’une vraie erreur. On cherche d’abord à comprendre.',
                        'choices' => [
                            ['choice_text' => 'Sanctionner aussitôt le responsable des achats du mois concerné par l’écart', 'is_correct' => false],
                            ['choice_text' => 'Réduire immédiatement les prix de vente pour compenser la dépense en trop', 'is_correct' => false],
                            ['choice_text' => 'Chercher la cause avant de juger : hausse des prix, plus de ventes, erreur ?', 'is_correct' => true],
                            ['choice_text' => 'Supprimer ce budget, puisqu’il ne s’est pas réalisé comme prévu au départ', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Au milieu de l’année, un grand client s’en va. Que doit faire l’entreprise de son budget des ventes ?',
                        'explanation' => 'Quand les conditions changent beaucoup (ventes, coûts, clients), un budget fondé sur d’anciennes hypothèses perd son sens. On le met à jour.',
                        'choices' => [
                            ['choice_text' => 'Le garder sans changement et ne plus regarder les résultats réels', 'is_correct' => false],
                            ['choice_text' => 'Le réviser, car les hypothèses de départ ne sont plus valables', 'is_correct' => true],
                            ['choice_text' => 'Le refaire chaque semaine jusqu’à la fin de l’exercice comptable', 'is_correct' => false],
                            ['choice_text' => 'Le supprimer puisqu’il ne sert plus à rien après cet événement', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Comment un budget aide-t-il les services à travailler ensemble ?',
                        'explanation' => 'Les ventes prévues servent de base à la production, aux achats et aux recrutements : tout le monde travaille avec les mêmes chiffres.',
                        'choices' => [
                            ['choice_text' => 'Il donne à chaque service les mêmes hypothèses pour planifier son travail', 'is_correct' => true],
                            ['choice_text' => 'Il évite aux services d’avoir à partager leurs informations entre eux', 'is_correct' => false],
                            ['choice_text' => 'Il remplace les décisions que prennent les responsables au quotidien', 'is_correct' => false],
                            ['choice_text' => 'Il fixe à l’avance les résultats exacts que chaque service obtiendra', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un budget sert de ___ pour piloter l’entreprise.',
                        'explanation' => 'Le budget donne le cap ; les résultats réels permettent de voir si l’on s’en écarte.',
                        'choices' => [
                            ['choice_text' => 'référence commune', 'is_correct' => true],
                            ['choice_text' => 'garantie que les objectifs seront atteints', 'is_correct' => false],
                            ['choice_text' => 'preuve des dépenses de l’exercice précédent', 'is_correct' => false],
                            ['choice_text' => 'substitut au suivi des résultats réels', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Comptabilité de gestion — Seuil de rentabilité',
                'description' => 'Découvrez les notions élémentaires de seuil de rentabilité et de point mort.',
                'questions' => [
                    [
                        'question' => 'Qu’est-ce que le seuil de rentabilité ?',
                        'explanation' => 'À ce niveau de ventes, on ne gagne rien et on ne perd rien : le résultat est de zéro.',
                        'choices' => [
                            ['choice_text' => 'Le niveau d’activité où l’entreprise réalise son bénéfice le plus élevé possible', 'is_correct' => false],
                            ['choice_text' => 'Le niveau d’activité où les recettes couvrent les coûts et où le résultat est nul', 'is_correct' => true],
                            ['choice_text' => 'Le niveau d’activité à partir duquel l’entreprise ne paie plus de coûts fixes', 'is_correct' => false],
                            ['choice_text' => 'Le chiffre d’affaires le plus élevé que l’entreprise ait déjà atteint depuis sa création', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'À quoi sert de calculer le seuil de rentabilité ?',
                        'explanation' => 'Sous le seuil, l’entreprise perd de l’argent ; au-dessus, elle en gagne.',
                        'choices' => [
                            ['choice_text' => 'À savoir combien il faut vendre au minimum pour ne pas perdre d’argent', 'is_correct' => true],
                            ['choice_text' => 'À calculer le montant de l’impôt dû sur le bénéfice de l’année écoulée', 'is_correct' => false],
                            ['choice_text' => 'À savoir combien d’argent il faut emprunter pour démarrer l’activité', 'is_correct' => false],
                            ['choice_text' => 'À fixer le prix de vente qui rapporte le bénéfice maximal à l’entreprise', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’appelle-t-on généralement la marge sur coût variable ?',
                        'explanation' => 'Marge sur coût variable = chiffre d’affaires − coûts variables. Elle sert d’abord à payer les coûts fixes, puis à faire du bénéfice.',
                        'choices' => [
                            ['choice_text' => 'Le chiffre d’affaires diminué des coûts fixes de la période', 'is_correct' => false],
                            ['choice_text' => 'Le chiffre d’affaires diminué de l’ensemble des coûts, fixes et variables', 'is_correct' => false],
                            ['choice_text' => 'Le chiffre d’affaires diminué des coûts variables', 'is_correct' => true],
                            ['choice_text' => 'Le prix de vente multiplié par la quantité vendue', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Youssef vend un pull 40 € et paie 25 € de matières et de façon pour chaque pull. Quelle est sa marge sur coût variable par pull ?',
                        'explanation' => '40 € − 25 € = 15 € par pull.',
                        'choices' => [
                            ['choice_text' => '5 €', 'is_correct' => false],
                            ['choice_text' => '15 €', 'is_correct' => true],
                            ['choice_text' => '25 €', 'is_correct' => false],
                            ['choice_text' => '40 €', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Le loyer de l’usine augmente, mais le prix de vente et le coût variable par unité restent les mêmes. Que devient le seuil de rentabilité ?',
                        'explanation' => 'Plus de coûts fixes à couvrir avec la même marge par unité : il faut vendre plus. Ex. : 30 000 ÷ 10 = 3 000 unités, mais 40 000 ÷ 10 = 4 000.',
                        'choices' => [
                            ['choice_text' => 'Il baisse : chaque unité vendue rapporte davantage à l’entreprise', 'is_correct' => false],
                            ['choice_text' => 'Il reste identique : le loyer n’intervient pas dans le calcul du seuil', 'is_correct' => false],
                            ['choice_text' => 'Il devient nul : le loyer est payé avant le début des ventes', 'is_correct' => false],
                            ['choice_text' => 'Il monte : il faut vendre plus d’unités pour couvrir le nouveau loyer', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Chaque unité vendue rapporte maintenant plus de marge sur coût variable. Pour le seuil de rentabilité, cela veut dire que ...',
                        'explanation' => 'Avec une marge unitaire plus élevée, chaque vente couvre une plus grande part des coûts fixes : le seuil est atteint plus tôt.',
                        'choices' => [
                            ['choice_text' => 'il faut vendre davantage d’unités pour couvrir l’ensemble des coûts fixes', 'is_correct' => false],
                            ['choice_text' => 'les coûts fixes se transforment peu à peu en coûts variables de l’entreprise', 'is_correct' => false],
                            ['choice_text' => 'il faut vendre moins d’unités pour couvrir l’ensemble des coûts fixes', 'is_correct' => true],
                            ['choice_text' => 'l’entreprise doit baisser son prix de vente pour rester rentable', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un atelier de poterie a 30 000 € de coûts fixes par an. Chaque vase vendu dégage 10 € de marge sur coût variable. Combien de vases doit-il vendre pour atteindre le seuil de rentabilité ?',
                        'explanation' => '30 000 ÷ 10 = 3 000 vases.',
                        'choices' => [
                            ['choice_text' => '300 vases', 'is_correct' => false],
                            ['choice_text' => '3 000 vases', 'is_correct' => true],
                            ['choice_text' => '10 000 vases', 'is_correct' => false],
                            ['choice_text' => '30 000 vases', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Le prix de vente passe de 40 € à 45 €, le coût variable restant à 25 €. Que devient le seuil de rentabilité ?',
                        'explanation' => 'Marge de 40 − 25 = 15 €, puis de 45 − 25 = 20 €. Plus la marge par unité est grande, moins il faut d’unités pour couvrir les coûts fixes.',
                        'choices' => [
                            ['choice_text' => 'Il monte, car un prix plus élevé augmente les coûts à couvrir', 'is_correct' => false],
                            ['choice_text' => 'Il reste le même, car le prix modifie le chiffre d’affaires mais pas le seuil', 'is_correct' => false],
                            ['choice_text' => 'Il baisse, car chaque unité rapporte 20 € de marge au lieu de 15 €', 'is_correct' => true],
                            ['choice_text' => 'Il devient nul, car les coûts fixes sont couverts dès la première vente', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Samira négocie un meilleur prix pour ses matières : son coût variable par unité baisse. Quel est l’effet sur le seuil de rentabilité ?',
                        'explanation' => 'Une baisse du coût variable augmente la marge par unité, toutes choses égales par ailleurs : il faut vendre moins pour s’en sortir.',
                        'choices' => [
                            ['choice_text' => 'Il monte, car l’entreprise a moins de coûts variables à répartir', 'is_correct' => false],
                            ['choice_text' => 'Il ne change pas, car seuls les coûts fixes le déterminent', 'is_correct' => false],
                            ['choice_text' => 'Il baisse, car la marge sur coût variable par unité augmente', 'is_correct' => true],
                            ['choice_text' => 'Il reste stable, car le prix de vente baisse en même temps', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Karim vend juste assez pour atteindre son seuil de rentabilité. Que se passe-t-il s’il vend une unité de plus ?',
                        'explanation' => 'Au seuil, le résultat est nul. Chaque unité en plus apporte sa marge en bénéfice, puisque les coûts fixes sont déjà couverts.',
                        'choices' => [
                            ['choice_text' => 'Il commence à gagner de l’argent grâce à la marge de cette unité', 'is_correct' => true],
                            ['choice_text' => 'Il perd de l’argent, car ses coûts fixes augmentent aussitôt', 'is_correct' => false],
                            ['choice_text' => 'Son résultat reste nul tant qu’il n’a pas doublé ses ventes', 'is_correct' => false],
                            ['choice_text' => 'Ses coûts fixes disparaissent et il ne paie plus que les coûts variables', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Comptabilité de gestion — Décisions simples de court terme',
                'description' => 'Appliquez les coûts pertinents à des décisions opérationnelles simples.',
                'questions' => [
                    [
                        'question' => 'Pour choisir entre deux options à court terme, quels coûts faut-il comparer ?',
                        'explanation' => 'Un coût identique dans les deux options ne peut pas aider à choisir. Seules les différences comptent.',
                        'choices' => [
                            ['choice_text' => 'Ceux qui seront différents selon l’option que l’on choisit', 'is_correct' => true],
                            ['choice_text' => 'Ceux qui apparaissent dans les comptes de l’exercice précédent', 'is_correct' => false],
                            ['choice_text' => 'Ceux qui ont déjà été payés avant que la décision soit prise', 'is_correct' => false],
                            ['choice_text' => 'Ceux qui représentent le plus gros montant dans le budget', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Fabriquer un composant revient à 18 € en interne, un fournisseur le vend 15 €. Avant d’acheter, que faut-il examiner ?',
                        'explanation' => 'Une partie des 18 € (loyer, machines) sera payée quoi qu’il arrive. Il faut comparer ce qu’on économise vraiment avec le prix d’achat, sans oublier ce que la capacité libre pourrait rapporter.',
                        'choices' => [
                            ['choice_text' => 'Le coût complet de 18 €, qu’il suffit de comparer au prix d’achat de 15 €', 'is_correct' => false],
                            ['choice_text' => 'Le prix auquel le fournisseur vend le même composant à ses autres clients', 'is_correct' => false],
                            ['choice_text' => 'Les coûts réellement évités en achetant et l’usage possible de la capacité libérée', 'is_correct' => true],
                            ['choice_text' => 'La part du composant dans le chiffre d’affaires de l’entreprise', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un coût pertinent pour une décision est un coût ___.',
                        'explanation' => 'Seul ce qui peut encore changer, et qui diffère d’une option à l’autre, aide à décider.',
                        'choices' => [
                            ['choice_text' => 'passé, déjà enregistré en comptabilité', 'is_correct' => false],
                            ['choice_text' => 'fixe, c’est-à-dire identique quelle que soit l’option retenue', 'is_correct' => false],
                            ['choice_text' => 'indirect, c’est-à-dire partagé entre plusieurs services', 'is_correct' => false],
                            ['choice_text' => 'à venir, qui n’est pas le même selon l’option choisie', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'L’an dernier, Samira a payé 5 000 € pour une étude de marché. Elle hésite aujourd’hui entre deux projets. Cette dépense compte-t-elle dans son choix ?',
                        'explanation' => 'L’argent déjà dépensé ne peut plus être récupéré, quelle que soit la décision. Ce coût est dit « irrécupérable » et on ne le compte pas.',
                        'choices' => [
                            ['choice_text' => 'Oui, car elle réduit la marge du projet qui sera finalement retenu', 'is_correct' => false],
                            ['choice_text' => 'Oui, car il faut d’abord récupérer ce qui a déjà été dépensé avant de choisir', 'is_correct' => false],
                            ['choice_text' => 'Non : elle est déjà payée et ne changera pas avec le choix du projet', 'is_correct' => true],
                            ['choice_text' => 'Oui, car les montants déjà payés sont les plus fiables pour décider', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Youssef peut louer son local 800 € par mois à un voisin, ou l’utiliser pour son propre atelier. Que représentent ces 800 € pour l’atelier ?',
                        'explanation' => 'Le coût d’opportunité est le gain auquel on renonce en choisissant une option. Aucun euro ne sort, mais il compte dans la décision.',
                        'choices' => [
                            ['choice_text' => 'Une charge déjà enregistrée dans la comptabilité générale de l’atelier', 'is_correct' => false],
                            ['choice_text' => 'Un coût irrécupérable, déjà payé et sans lien avec la décision à prendre', 'is_correct' => false],
                            ['choice_text' => 'Un coût d’opportunité : ce qu’il perd en renonçant à la location', 'is_correct' => true],
                            ['choice_text' => 'Un coût variable qui dépend du nombre de pièces que l’atelier produit', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une usine tourne à 60 % de sa capacité. Un client propose une commande spéciale. Quels coûts regarder en priorité ?',
                        'explanation' => 'Avec de la capacité libre, les coûts fixes sont déjà payés. Seuls les coûts supplémentaires pèsent dans la décision.',
                        'choices' => [
                            ['choice_text' => 'Le coût complet moyen de chaque produit que l’usine fabrique habituellement', 'is_correct' => false],
                            ['choice_text' => 'Les coûts que la commande ajoute vraiment, comme les matières et le travail en plus', 'is_correct' => true],
                            ['choice_text' => 'Les coûts fixes déjà engagés, qu’il faut répartir sur toute la commande', 'is_correct' => false],
                            ['choice_text' => 'Le chiffre d’affaires réalisé l’année dernière avec ce même client', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une commande spéciale est proposée à 8 € l’unité, alors que le prix habituel est de 10 €. Le coût variable est de 7 € par unité, l’atelier a de la capacité libre, et les ventes habituelles ne sont pas touchées. Que peut-on dire ?',
                        'explanation' => 'Chaque unité apporte 8 − 7 = 1 € de plus, sans nouveau coût fixe. Tant que les clients habituels ne sont pas gênés, c’est un gain.',
                        'choices' => [
                            ['choice_text' => 'Elle peut être acceptée : chaque unité dégage 1 € de marge supplémentaire', 'is_correct' => true],
                            ['choice_text' => 'Elle doit être refusée : 8 € est inférieur au prix habituel de 10 €', 'is_correct' => false],
                            ['choice_text' => 'Elle doit être refusée : il faut couvrir aussi les coûts fixes de l’atelier', 'is_correct' => false],
                            ['choice_text' => 'Elle ne peut pas être jugée : on ne connaît pas le bénéfice net de l’année', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un restaurant envisage de fermer son service traiteur, qui a 40 000 € de coûts attribués par an. Que faut-il vérifier avant de décider ?',
                        'explanation' => 'Une partie des coûts attribués (loyer, direction) continuera après la fermeture : ce ne sera pas une économie. Seuls les coûts évitables comptent.',
                        'choices' => [
                            ['choice_text' => 'Si ce service coûte plus cher que les autres services du restaurant', 'is_correct' => false],
                            ['choice_text' => 'Si les 40 000 € ont été correctement enregistrés dans les comptes', 'is_correct' => false],
                            ['choice_text' => 'Quelle part de ces 40 000 € disparaîtrait réellement avec la fermeture', 'is_correct' => true],
                            ['choice_text' => 'Si les frais généraux du restaurant sont répartis à parts égales', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Parmi ces informations, laquelle est qualitative (difficile à chiffrer) mais peut peser dans une décision ?',
                        'explanation' => 'La réputation, la satisfaction des clients ou les compétences de l’équipe n’apparaissent pas dans les coûts, mais peuvent changer la décision.',
                        'choices' => [
                            ['choice_text' => 'La réputation de l’entreprise auprès de ses clients', 'is_correct' => true],
                            ['choice_text' => 'Le total des coûts variables de la période qui est étudiée', 'is_correct' => false],
                            ['choice_text' => 'Le prix d’achat des machines qui sont installées à l’atelier', 'is_correct' => false],
                            ['choice_text' => 'Le montant du loyer que l’atelier paie chaque mois au propriétaire', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Que fait-on dans une bonne décision de court terme ?',
                        'explanation' => 'On regarde les revenus et coûts à venir qui diffèrent d’une option à l’autre, puis on ajoute les éléments difficiles à chiffrer (qualité, réputation).',
                        'choices' => [
                            ['choice_text' => 'Retenir l’option dont le prix d’achat est le plus bas à court terme', 'is_correct' => false],
                            ['choice_text' => 'Reprendre les coûts complets de l’an dernier sans les modifier du tout', 'is_correct' => false],
                            ['choice_text' => 'Poursuivre l’option dans laquelle on a déjà dépensé le plus d’argent jusqu’ici', 'is_correct' => false],
                            ['choice_text' => 'Comparer ce qui change entre les options, en chiffres comme en qualité', 'is_correct' => true],
                        ],
                    ],
                ],
            ],
        ];

        foreach ($quizzes as $quizIndex => $quizData) {
            $settings = $quizSettings[$quizIndex];

            $quiz = Quiz::updateOrCreate(
                [
                    'subject_id' => $subject->id,
                    'title' => $quizData['title'],
                ],
                [
                    'owner_id' => null,
                    'description' => $quizData['description'],
                    'duration' => $settings['duration'],
                    'passing_score' => $settings['passing_score'],
                    'total_marks' => count($quizData['questions']),
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

                foreach ($questionData['choices'] as $choiceIndex => $choice) {
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
