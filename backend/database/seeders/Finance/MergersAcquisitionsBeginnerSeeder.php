<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class MergersAcquisitionsBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'mergers-acquisitions')->firstOrFail();

        $quizSettings = [
            ['duration' => 24, 'passing_score' => 55],
            ['duration' => 28, 'passing_score' => 57],
            ['duration' => 30, 'passing_score' => 58],
            ['duration' => 27, 'passing_score' => 56],
            ['duration' => 26, 'passing_score' => 57],
            ['duration' => 29, 'passing_score' => 58],
            ['duration' => 27, 'passing_score' => 60],
            ['duration' => 26, 'passing_score' => 58],
            ['duration' => 28, 'passing_score' => 61],
            ['duration' => 31, 'passing_score' => 62],
        ];

        $quizzes = [
            [
                'title' => 'Comprendre la logique des opérations de M&A',
                'description' => 'Quiz d’introduction sur les motivations, les acteurs et les mécanismes de base des opérations de M&A.',
                'questions' => [
                    [
                        'question' => 'Samira dirige une usine et veut racheter un concurrent qui vend aux mêmes clients. Quelle est la logique d’une acquisition horizontale ?',
                        'explanation' => 'Une acquisition horizontale rapproche deux entreprises du même marché. L’acheteur vise plus de parts de marché, des économies d’échelle ou des synergies commerciales.',
                        'choices' => [
                            ['choice_text' => 'Gagner des parts de marché et réaliser des économies d’échelle', 'is_correct' => true],
                            ['choice_text' => 'Sécuriser ses approvisionnements en rachetant un fournisseur', 'is_correct' => false],
                            ['choice_text' => 'Diversifier ses activités en entrant dans un secteur très différent du sien', 'is_correct' => false],
                            ['choice_text' => 'Faire entrer un nouvel actionnaire pour financer sa croissance', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Karim dirige une PME qui reçoit une offre de rachat. Avant de parler du prix, il demande à l’acheteur ce qu’il compte faire de l’entreprise. À quoi lui sert cette question ?',
                        'explanation' => 'Le projet de l’acheteur (industriel ou financier) décide des synergies qu’il peut espérer, de la forme de l’opération et du prix qu’il pourra justifier.',
                        'choices' => [
                            ['choice_text' => 'À remplacer la due diligence, que l’acheteur n’aura plus besoin de faire', 'is_correct' => false],
                            ['choice_text' => 'À savoir quelles synergies l’acheteur vise, ce qui pèse sur son offre', 'is_correct' => true],
                            ['choice_text' => 'À fixer le prix au niveau du cours de Bourse, sans négociation', 'is_correct' => false],
                            ['choice_text' => 'À calculer lui-même la prime de contrôle que l’acheteur devra payer', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Dans une opération de M&A, qui défend les intérêts des actionnaires de la cible quand on négocie le prix ?',
                        'explanation' => 'Ce sont les propriétaires de la cible qui vendent. Eux-mêmes, ou le conseil d’administration qui les représente, évaluent l’offre et négocient le prix.',
                        'choices' => [
                            ['choice_text' => 'Les actionnaires de la cible, ou leurs représentants', 'is_correct' => true],
                            ['choice_text' => 'La banque de l’acheteur, qui apporte le financement', 'is_correct' => false],
                            ['choice_text' => 'Le commissaire aux comptes, qui certifie les comptes de la cible', 'is_correct' => false],
                            ['choice_text' => 'L’autorité de la concurrence, qui contrôle l’opération', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une acquisition donne à l’acheteur accès à un réseau de distribution déjà en place pour vendre davantage de ses produits. De quel type de synergie s’agit-il ?',
                        'explanation' => 'Un réseau de distribution déjà en place permet de vendre davantage : c’est une synergie commerciale.',
                        'choices' => [
                            ['choice_text' => 'Synergie fiscale sur les déficits', 'is_correct' => false],
                            ['choice_text' => 'Synergie commerciale', 'is_correct' => true],
                            ['choice_text' => 'Synergie industrielle de production', 'is_correct' => false],
                            ['choice_text' => 'Synergie financière sur la dette', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Avant de signer, l’acheteur réclame des comptes détaillés à la cible. À quoi cela lui sert-il ?',
                        'explanation' => 'Les comptes montrent la qualité des résultats, la dette, le cash-flow et les engagements. L’acheteur s’en sert aussi pour tester ses hypothèses de valorisation.',
                        'choices' => [
                            ['choice_text' => 'À remplacer toute la due diligence juridique par une simple analyse des comptes', 'is_correct' => false],
                            ['choice_text' => 'À vérifier les résultats, la dette et les risques avant de fixer son prix', 'is_correct' => true],
                            ['choice_text' => 'À fixer le prix de vente à la place du vendeur, sans négociation', 'is_correct' => false],
                            ['choice_text' => 'À calculer les impôts que la cible devra payer au moment de la signature', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise A rachète 100 % des actions de B et prend le contrôle de B. Comment qualifier simplement cette opération ?',
                        'explanation' => 'L’achat de la totalité des actions donne, en principe, le contrôle de la société cible. C’est une acquisition de contrôle.',
                        'choices' => [
                            ['choice_text' => 'Une prise de participation minoritaire', 'is_correct' => false],
                            ['choice_text' => 'Une cession partielle des actifs de B', 'is_correct' => false],
                            ['choice_text' => 'Une augmentation de capital de B', 'is_correct' => false],
                            ['choice_text' => 'Une acquisition de contrôle', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Lorsqu’un acquéreur propose 30 € par action alors que le cours de la cible est de 24 €, les 6 € supplémentaires représentent principalement :',
                        'explanation' => 'La différence entre le prix offert et le cours de référence correspond à une prime d’acquisition. Elle reflète notamment la valeur du contrôle et les synergies espérées.',
                        'choices' => [
                            ['choice_text' => 'Des frais de conseil', 'is_correct' => false],
                            ['choice_text' => 'Une prime d’acquisition', 'is_correct' => true],
                            ['choice_text' => 'Un dividende exceptionnel', 'is_correct' => false],
                            ['choice_text' => 'Une décote de liquidité', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise réalise 20 M€ de chiffre d’affaires et la cible réalise 10 M€. Après l’acquisition, le groupe affiche 31 M€ de chiffre d’affaires. L’écart par rapport à la simple addition est de :',
                        'explanation' => '20 + 10 = 30 M€, alors que le groupe affiche 31 M€ : l’écart est de 1 M€. Il peut avoir plusieurs causes, et on ne l’appelle « synergie » qu’après analyse.',
                        'choices' => [
                            ['choice_text' => '1 M€', 'is_correct' => true],
                            ['choice_text' => '10 M€', 'is_correct' => false],
                            ['choice_text' => '21 M€', 'is_correct' => false],
                            ['choice_text' => '30 M€', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Dans une opération de M&A, à quoi sert une « deal team » réunissant des spécialistes de la finance, du juridique et de la fiscalité ?',
                        'explanation' => 'Une opération de M&A soulève des questions financières, juridiques et fiscales. Chaque spécialiste regarde ses risques, et tout est réuni avant la décision.',
                        'choices' => [
                            ['choice_text' => 'À prendre la décision finale à la place du conseil d’administration', 'is_correct' => false],
                            ['choice_text' => 'À examiner l’opération sous plusieurs angles avant de décider', 'is_correct' => true],
                            ['choice_text' => 'À assurer la communication financière de l’acheteur auprès du marché', 'is_correct' => false],
                            ['choice_text' => 'À gérer l’intégration informatique après la signature', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une acquisition est financée exclusivement par la trésorerie disponible de l’acheteur. Quel mode de financement est utilisé ?',
                        'explanation' => 'Lorsque l’acheteur paie le prix avec les liquidités dont il dispose, on parle simplement de financement en cash ou en numéraire.',
                        'choices' => [
                            ['choice_text' => 'Financement en cash', 'is_correct' => true],
                            ['choice_text' => 'Financement par emprunt bancaire', 'is_correct' => false],
                            ['choice_text' => 'Financement par émission d’actions', 'is_correct' => false],
                            ['choice_text' => 'Financement par échange d’actions', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Youssef dirige une entreprise de boissons. Il rachète un fabricant de produits laitiers pour entrer vite sur ce marché. Quel est son motif stratégique ?',
                        'explanation' => 'Racheter une entreprise déjà installée permet d’entrer sur un nouveau marché plus vite qu’avec une croissance organique, qui prend souvent des années.',
                        'choices' => [
                            ['choice_text' => 'Réaliser des économies d’échelle sur un marché qu’il occupe déjà', 'is_correct' => false],
                            ['choice_text' => 'Sécuriser ses approvisionnements en matières premières', 'is_correct' => false],
                            ['choice_text' => 'Récupérer les déficits fiscaux de la cible', 'is_correct' => false],
                            ['choice_text' => 'Accéder rapidement à un nouveau marché', 'is_correct' => true],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Processus d’acquisition et due diligence',
                'description' => 'Situations pratiques autour des étapes d’un processus d’acquisition et de la due diligence.',
                'questions' => [
                    [
                        'question' => 'Une cible annonce un EBITDA en hausse de 20 %, mais cette hausse vient d’un gros contrat exceptionnel qui ne sera pas renouvelé. Que fait l’acheteur ?',
                        'explanation' => 'Un contrat ponctuel gonfle l’EBITDA une seule année. L’acheteur le retire pour mesurer la performance qui se répétera : c’est l’EBITDA normalisé.',
                        'choices' => [
                            ['choice_text' => 'Il retient les 20 % de hausse comme une croissance durable de la cible', 'is_correct' => false],
                            ['choice_text' => 'Il ignore la hausse et ne regarde que le chiffre d’affaires', 'is_correct' => false],
                            ['choice_text' => 'Il retire l’effet de ce contrat pour obtenir un EBITDA normalisé', 'is_correct' => true],
                            ['choice_text' => 'Il augmente son prix d’offre pour récompenser la bonne performance', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pendant la due diligence, Samira repère beaucoup de créances clients très en retard chez la cible. Qu’est-ce que cela peut signaler ?',
                        'explanation' => 'Une créance très ancienne risque de ne jamais être encaissée. Cela réduit la valeur réelle des actifs et le cash que l’acheteur peut espérer.',
                        'choices' => [
                            ['choice_text' => 'Un excès de trésorerie que la cible n’a pas encore placé', 'is_correct' => false],
                            ['choice_text' => 'Une dette envers ses fournisseurs plus lourde que prévu', 'is_correct' => false],
                            ['choice_text' => 'Un stock trop élevé qui immobilise du cash', 'is_correct' => false],
                            ['choice_text' => 'Un risque de non-paiement qui peut réduire le cash-flow', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'La due diligence juridique révèle un gros litige entre la cible et un ancien partenaire. Quelle conséquence est la plus logique pour l’acheteur ?',
                        'explanation' => 'Un gros litige peut coûter du cash ou créer de l’incertitude. L’acheteur négocie alors des protections dans le contrat, baisse son prix ou réfléchit à renoncer.',
                        'choices' => [
                            ['choice_text' => 'Il doit renoncer à l’opération, car un litige interdit tout rachat', 'is_correct' => false],
                            ['choice_text' => 'Il peut ignorer le litige, qui reste un problème du vendeur seul', 'is_correct' => false],
                            ['choice_text' => 'Il peut revoir son prix, demander des garanties ou renoncer à l’opération', 'is_correct' => true],
                            ['choice_text' => 'Il doit augmenter son prix pour compenser le risque supporté par le vendeur', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'À quoi sert une data room dans une opération de M&A ?',
                        'explanation' => 'La data room rassemble les documents dont l’acheteur a besoin pour analyser la cible. L’accès y est limité et suivi : chacun ne voit que ce qu’il a le droit de voir.',
                        'choices' => [
                            ['choice_text' => 'À publier les comptes de la cible pour tous les investisseurs du marché', 'is_correct' => false],
                            ['choice_text' => 'À signer à distance le contrat d’acquisition entre les deux parties', 'is_correct' => false],
                            ['choice_text' => 'À fixer le prix des actions de la cible grâce aux offres déposées par les acheteurs', 'is_correct' => false],
                            ['choice_text' => 'À réunir les documents de la cible dans un espace où l’accès est contrôlé', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Youssef met sa société en vente et reçoit trois offres. La plus chère impose beaucoup de conditions suspensives. Que doit-il comparer ?',
                        'explanation' => 'Le prix n’est qu’un élément de l’offre. Les conditions, le financement et la certitude que l’opération aille au bout comptent aussi pour la vraie valeur de l’offre.',
                        'choices' => [
                            ['choice_text' => 'Le prix, mais aussi les conditions, les risques et les chances que l’offre se réalise', 'is_correct' => true],
                            ['choice_text' => 'Le prix et la réputation de l’acheteur, sans regarder les conditions', 'is_correct' => false],
                            ['choice_text' => 'Le prix et le mode de paiement, les conditions suspensives n’étant qu’une simple formalité', 'is_correct' => false],
                            ['choice_text' => 'Le nombre de conditions, l’offre qui en compte le moins étant la meilleure', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'La dette bancaire de la cible doit être remboursée juste après la date prévue du closing. Quel risque l’acheteur doit-il anticiper ?',
                        'explanation' => 'Une dette qui arrive à échéance doit être remboursée ou refinancée. L’acheteur mesure donc le besoin de financement et le risque de liquidité.',
                        'choices' => [
                            ['choice_text' => 'Une dilution des actionnaires, car la banque entre au capital de la cible', 'is_correct' => false],
                            ['choice_text' => 'Un besoin de liquidité si la cible n’arrive pas à refinancer cette dette', 'is_correct' => true],
                            ['choice_text' => 'Un risque de change sur le montant de la dette à rembourser', 'is_correct' => false],
                            ['choice_text' => 'Un risque commercial lié à la perte d’un client important', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'En due diligence commerciale, quel indicateur aide à juger la solidité du portefeuille clients ?',
                        'explanation' => 'Si trois clients font la moitié des ventes, en perdre un suffit à faire chuter les revenus. C’est ce risque de concentration que l’acheteur veut mesurer.',
                        'choices' => [
                            ['choice_text' => 'Le délai moyen de paiement des fournisseurs de la cible', 'is_correct' => false],
                            ['choice_text' => 'Le chiffre d’affaires total de l’an dernier, quelle que soit sa répartition', 'is_correct' => false],
                            ['choice_text' => 'La part du chiffre d’affaires réalisée avec les plus gros clients', 'is_correct' => true],
                            ['choice_text' => 'Le nombre de clients du fichier, sans leur chiffre d’affaires', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise cible dépend d’un seul fournisseur pour 70 % d’un composant critique. Quel risque cela met-il particulièrement en évidence ?',
                        'explanation' => 'Une forte dépendance à un fournisseur clé peut exposer l’entreprise à des ruptures d’approvisionnement, des hausses de prix ou des problèmes de négociation.',
                        'choices' => [
                            ['choice_text' => 'Risque de dépendance fournisseur', 'is_correct' => true],
                            ['choice_text' => 'Risque de contrepartie sur ses clients', 'is_correct' => false],
                            ['choice_text' => 'Risque de taux sur sa dette bancaire', 'is_correct' => false],
                            ['choice_text' => 'Risque de dilution pour ses actionnaires', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Avant de racheter une société, l’acheteur demande la liste de ses gros contrats et de leurs clauses de changement de contrôle. Que veut-il savoir ?',
                        'explanation' => 'Une clause de changement de contrôle peut imposer une notification, un accord du partenaire ou lui permettre de résilier. Ce point fait partie de la due diligence juridique.',
                        'choices' => [
                            ['choice_text' => 'Si certains contrats peuvent être rompus ou exiger l’accord du partenaire après le rachat', 'is_correct' => true],
                            ['choice_text' => 'Si les clients de la cible accepteront de payer plus cher après le rachat', 'is_correct' => false],
                            ['choice_text' => 'Si le fisc devra valider chaque contrat avant la signature', 'is_correct' => false],
                            ['choice_text' => 'Si le vendeur pourra revendre une partie de ses actions à un autre acheteur après la signature', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un vendeur fournit un business plan très optimiste. Quel comportement est le plus professionnel pour l’acheteur ?',
                        'explanation' => 'Un business plan sert de point de départ. Un analyste professionnel teste les hypothèses à partir des données historiques, du marché et de scénarios alternatifs.',
                        'choices' => [
                            ['choice_text' => 'Reprendre le business plan tel quel, puisque le vendeur connaît son entreprise', 'is_correct' => false],
                            ['choice_text' => 'Appliquer une réduction forfaitaire de 50 % à l’ensemble des chiffres du vendeur', 'is_correct' => false],
                            ['choice_text' => 'Écarter le business plan et valoriser la cible sur son chiffre d’affaires passé', 'is_correct' => false],
                            ['choice_text' => 'Croiser les hypothèses avec l’historique, le marché et des scénarios', 'is_correct' => true],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Valorisation d’une cible et prix d’acquisition',
                'description' => 'Exercices d’introduction sur Enterprise Value, Equity Value, multiples et prix payé pour une cible.',
                'questions' => [
                    [
                        'question' => 'Une société cible a une Enterprise Value de 120 M€, une dette financière de 30 M€ et une trésorerie de 10 M€. Quelle est son Equity Value ?',
                        'explanation' => 'Equity Value = Enterprise Value - dette nette. La dette nette est 30 - 10 = 20 M€. Donc Equity Value = 120 - 20 = 100 M€.',
                        'choices' => [
                            ['choice_text' => '90 M€', 'is_correct' => false],
                            ['choice_text' => '100 M€', 'is_correct' => true],
                            ['choice_text' => '130 M€', 'is_correct' => false],
                            ['choice_text' => '140 M€', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Que signifie un multiple EV/EBITDA de 8x ?',
                        'explanation' => 'Le multiple EV/EBITDA compare la valeur de l’entreprise à son EBITDA. À 8x, un acheteur paie 8 fois l’EBITDA d’une année : avec 15 M€ d’EBITDA, cela fait 120 M€.',
                        'choices' => [
                            ['choice_text' => 'La dette nette représente 8 fois l’EBITDA annuel', 'is_correct' => false],
                            ['choice_text' => 'Le bénéfice net représente 8 % de l’Enterprise Value', 'is_correct' => false],
                            ['choice_text' => 'L’Enterprise Value représente 8 fois l’EBITDA annuel', 'is_correct' => true],
                            ['choice_text' => 'L’EBITDA a progressé de 8 % par rapport à l’année précédente', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Deux sociétés comparables valent 6x et 8x leur EBITDA. Une cible semblable a un EBITDA de 10 M€. Quelle Enterprise Value obtient-on avec le multiple moyen ?',
                        'explanation' => 'Le multiple moyen est (6 + 8) / 2 = 7x. Avec 10 M€ d’EBITDA, on obtient 7 × 10 = 70 M€.',
                        'choices' => [
                            ['choice_text' => '17 M€', 'is_correct' => false],
                            ['choice_text' => '60 M€', 'is_correct' => false],
                            ['choice_text' => '70 M€', 'is_correct' => true],
                            ['choice_text' => '80 M€', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Lorsqu’un acheteur paie 90 M€ d’Enterprise Value pour une cible avec 15 M€ d’EBITDA, son multiple EV/EBITDA est de :',
                        'explanation' => 'Le multiple est 90 / 15 = 6x.',
                        'choices' => [
                            ['choice_text' => '0,17x', 'is_correct' => false],
                            ['choice_text' => '6x', 'is_correct' => true],
                            ['choice_text' => '75x', 'is_correct' => false],
                            ['choice_text' => '105x', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'La cible possède 5 M€ de dette nette. Un prix de 50 M€ est convenu pour les actions. Quelle Enterprise Value approximative cela représente-t-il ?',
                        'explanation' => 'Avec une dette nette positive de 5 M€, EV = Equity Value + dette nette, soit 50 + 5 = 55 M€.',
                        'choices' => [
                            ['choice_text' => '45 M€', 'is_correct' => false],
                            ['choice_text' => '50 M€', 'is_correct' => false],
                            ['choice_text' => '55 M€', 'is_correct' => true],
                            ['choice_text' => '250 M€', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un acquéreur constate qu’une cible a un EBITDA de 12 M€ mais 4 M€ de coûts exceptionnels non récurrents inclus dans les charges. À hypothèses constantes, quel serait l’EBITDA ajusté ?',
                        'explanation' => 'On ajoute les 4 M€ de coûts exceptionnels à l’EBITDA publié : 12 + 4 = 16 M€. Il faut quand même pouvoir justifier que ces coûts ne reviendront pas.',
                        'choices' => [
                            ['choice_text' => '8 M€', 'is_correct' => false],
                            ['choice_text' => '16 M€', 'is_correct' => true],
                            ['choice_text' => '12 M€', 'is_correct' => false],
                            ['choice_text' => '48 M€', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Karim voit que la cible est valorisée 10x son EBITDA, alors que ses comparables sont autour de 7x. Que doit-il chercher à comprendre en premier ?',
                        'explanation' => 'Un multiple plus haut peut s’expliquer par une meilleure croissance, de meilleures marges, un risque plus faible ou des synergies. Il faut le comprendre avant de l’accepter.',
                        'choices' => [
                            ['choice_text' => 'Pourquoi l’EBITDA n’a pas à être comparé à celui des autres sociétés', 'is_correct' => false],
                            ['choice_text' => 'Pourquoi le prix doit être ramené à 7x sans discussion', 'is_correct' => false],
                            ['choice_text' => 'Pourquoi la dette de la cible ne compte pas dans ce multiple', 'is_correct' => false],
                            ['choice_text' => 'Pourquoi la cible mérite un multiple plus élevé que ses pairs', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Youssef reçoit une offre à 25 € par action pour les 4 millions d’actions de sa société. Combien l’acheteur paie-t-il pour les titres ?',
                        'explanation' => '25 € × 4 millions d’actions = 100 M€.',
                        'choices' => [
                            ['choice_text' => '6,25 M€', 'is_correct' => false],
                            ['choice_text' => '29 M€', 'is_correct' => false],
                            ['choice_text' => '100 M€', 'is_correct' => true],
                            ['choice_text' => '125 M€', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un expert valorise une cible à 90 M€, mais le prix signé est de 100 M€. Qu’est-ce qui peut expliquer cet écart ?',
                        'explanation' => 'La valorisation donne une estimation de la valeur. Le prix signé dépend aussi de la négociation, de la concurrence entre acheteurs, des synergies et de la structure de l’opération.',
                        'choices' => [
                            ['choice_text' => 'La négociation, la concurrence entre acheteurs et les synergies espérées', 'is_correct' => true],
                            ['choice_text' => 'Le paiement des impôts du vendeur, qui s’ajoute au prix de l’action', 'is_correct' => false],
                            ['choice_text' => 'La valeur comptable des actifs, qui est égale au prix payé', 'is_correct' => false],
                            ['choice_text' => 'L’inflation de l’année, que la méthode de valorisation ne prend pas en compte', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un analyste applique un multiple de 5x à un EBITDA de 20 M€ et obtient une Enterprise Value de :',
                        'explanation' => '5 × 20 M€ = 100 M€.',
                        'choices' => [
                            ['choice_text' => '4 M€', 'is_correct' => false],
                            ['choice_text' => '25 M€', 'is_correct' => false],
                            ['choice_text' => '100 M€', 'is_correct' => true],
                            ['choice_text' => '1 000 M€', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une cible a une Enterprise Value de 80 M€ et 15 M€ de trésorerie sans dette financière. Toutes choses égales par ailleurs, quelle Equity Value obtient-on ?',
                        'explanation' => 'La trésorerie réduit la dette nette. Avec zéro dette et 15 M€ de cash, Equity Value = EV + cash = 95 M€.',
                        'choices' => [
                            ['choice_text' => '65 M€', 'is_correct' => false],
                            ['choice_text' => '80 M€', 'is_correct' => false],
                            ['choice_text' => '120 M€', 'is_correct' => false],
                            ['choice_text' => '95 M€', 'is_correct' => true],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Synergies et création de valeur',
                'description' => 'Questions pratiques sur les synergies de coûts, de revenus et les limites des estimations.',
                'questions' => [
                    [
                        'question' => 'Après une acquisition, le nouveau groupe prévoit de regrouper deux services comptables et d’économiser 1,2 M€ par an. Cette économie correspond à :',
                        'explanation' => 'La suppression de coûts redondants grâce au rapprochement constitue une synergie de coûts.',
                        'choices' => [
                            ['choice_text' => 'Une prime de contrôle', 'is_correct' => false],
                            ['choice_text' => 'Une dette nette', 'is_correct' => false],
                            ['choice_text' => 'Une variation de change', 'is_correct' => false],
                            ['choice_text' => 'Une synergie de coûts', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Une cible dispose d’un produit complémentaire que l’acheteur peut vendre à sa base de clients. Le gain attendu provient principalement de :',
                        'explanation' => 'La possibilité de vendre davantage de produits aux clients existants correspond à une synergie de revenus.',
                        'choices' => [
                            ['choice_text' => 'Synergies de coûts d’achat', 'is_correct' => false],
                            ['choice_text' => 'Synergies de revenus', 'is_correct' => true],
                            ['choice_text' => 'Synergies financières', 'is_correct' => false],
                            ['choice_text' => 'Synergies fiscales', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un groupe espère 5 M€ de synergies par an, mais doit dépenser 2 M€ de restructuration la première année. Quelle conclusion est correcte ?',
                        'explanation' => 'Les synergies peuvent être bien réelles et coûter de l’argent au départ. Ici, la première année rapporte 5 - 2 = 3 M€ si tout se passe comme prévu.',
                        'choices' => [
                            ['choice_text' => 'Les 5 M€ de synergies sont perdus dès que les 2 M€ de coûts sont payés', 'is_correct' => false],
                            ['choice_text' => 'Les coûts de restructuration s’ajoutent aux synergies pour donner un gain total de 7 M€ la première année', 'is_correct' => false],
                            ['choice_text' => 'Pour mesurer le gain réel, il faut déduire les coûts engagés pour obtenir les synergies', 'is_correct' => true],
                            ['choice_text' => 'Les coûts de restructuration ne se comptent qu’à partir de la deuxième année', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un acquéreur compte sur 10 M€ d’économies après le rapprochement, mais aucune mesure concrète n’est encore définie. Quelle prudence s’impose ?',
                        'explanation' => 'Une synergie n’est pas qu’un chiffre sur une présentation. Il faut savoir d’où elle vient, quand elle arrive, ce qu’elle coûte et ce qui peut la faire échouer.',
                        'choices' => [
                            ['choice_text' => 'Compter les 10 M€ en totalité dès la première année dans le business plan de l’acquéreur', 'is_correct' => false],
                            ['choice_text' => 'Appliquer une marge de prudence et vérifier que ces économies sont réalisables', 'is_correct' => true],
                            ['choice_text' => 'Ajouter les 10 M€ au prix d’achat, car le vendeur en est responsable', 'is_correct' => false],
                            ['choice_text' => 'Supprimer ces économies du business plan sans chercher à les évaluer', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Après une fusion, Samira veut réduire de 3 M€ les dépenses de marketing, mais cela pourrait aussi faire baisser les ventes. Que doit-elle vérifier ?',
                        'explanation' => 'Une économie de coûts n’a de valeur que si elle ne fait pas perdre davantage de ventes. Il faut regarder l’effet sur les revenus et sur la rentabilité.',
                        'choices' => [
                            ['choice_text' => 'Le niveau des taux directeurs, qui décide du budget marketing', 'is_correct' => false],
                            ['choice_text' => 'Le nombre de salariés du service marketing, qui fixe à lui seul l’économie réelle', 'is_correct' => false],
                            ['choice_text' => 'Le montant de 3 M€, qui est acquis dès que la fusion est signée', 'is_correct' => false],
                            ['choice_text' => 'Si la baisse des dépenses fait perdre plus de ventes qu’elle ne fait économiser', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Deux usines du groupe fusionné peuvent être coordonnées. Que faut-il étudier avant d’annoncer une grosse économie ?',
                        'explanation' => 'Une économie sur les usines doit être faisable techniquement et financièrement. Les transferts, les investissements et les contraintes de production peuvent réduire le gain.',
                        'choices' => [
                            ['choice_text' => 'Le coût des transferts et les investissements nécessaires', 'is_correct' => true],
                            ['choice_text' => 'La valeur comptable des deux usines, qui donne directement l’économie possible', 'is_correct' => false],
                            ['choice_text' => 'Le taux d’intérêt de la dette qui finance chaque usine', 'is_correct' => false],
                            ['choice_text' => 'Le chiffre d’affaires total des deux usines avant la fusion', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une synergie de 2 M€ par an n’apparaîtra qu’à partir de la troisième année. Qu’est-ce que cela change à sa valeur ?',
                        'explanation' => 'Un euro qu’on touche plus tard vaut moins qu’un euro touché aujourd’hui. Plus la synergie est lointaine, plus sa valeur actuelle baisse.',
                        'choices' => [
                            ['choice_text' => 'Sa valeur est nulle tant qu’elle n’est pas encaissée', 'is_correct' => false],
                            ['choice_text' => 'Sa valeur est la même, car 2 M€ restent 2 M€ à n’importe quelle date de versement', 'is_correct' => false],
                            ['choice_text' => 'Sa valeur actuelle est plus faible que si elle apparaissait tout de suite', 'is_correct' => true],
                            ['choice_text' => 'Sa valeur est plus forte, car elle s’accumule pendant l’attente', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Que veut dire « double counting » dans une valorisation ?',
                        'explanation' => 'Le double counting gonfle la valeur : un même gain est compté deux fois, par exemple dans le business plan et à nouveau dans la prime de synergie.',
                        'choices' => [
                            ['choice_text' => 'Appliquer deux multiples différents à l’EBITDA de la cible', 'is_correct' => false],
                            ['choice_text' => 'Compter deux fois le même bénéfice attendu', 'is_correct' => true],
                            ['choice_text' => 'Payer la cible une première fois en cash puis une seconde en actions', 'is_correct' => false],
                            ['choice_text' => 'Faire évaluer la cible par deux experts qui donnent des prix différents', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Karim paie 20 M€ de plus que la valeur de la cible seule et espère 30 M€ de synergies. Quelle marge théorique lui reste-t-il, avant coûts d’intégration ?',
                        'explanation' => '30 - 20 = 10 M€. Cette marge reste théorique tant que les synergies ne sont pas réalisées et que les coûts d’intégration ne sont pas déduits.',
                        'choices' => [
                            ['choice_text' => '5 M€', 'is_correct' => false],
                            ['choice_text' => '10 M€', 'is_correct' => true],
                            ['choice_text' => '20 M€', 'is_correct' => false],
                            ['choice_text' => '50 M€', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Parmi ces phrases, laquelle explique que les synergies de revenus soient plus difficiles à prévoir que les synergies de coûts ?',
                        'explanation' => 'Vendre plus dépend de la réaction des clients et des concurrents. Une économie de coûts se lit plus facilement dans les budgets.',
                        'choices' => [
                            ['choice_text' => 'Elles dépendent des clients et du marché, que l’entreprise ne contrôle pas', 'is_correct' => true],
                            ['choice_text' => 'Elles demandent l’autorisation préalable de l’autorité de la concurrence avant tout calcul', 'is_correct' => false],
                            ['choice_text' => 'Elles ne se calculent qu’après la clôture des comptes annuels', 'is_correct' => false],
                            ['choice_text' => 'Elles dépendent de la dette de l’acheteur plus que de ses clients', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'À mi-année, seulement 40 % des synergies prévues sont réalisées. Que fait le directeur de l’intégration ?',
                        'explanation' => 'Un bon suivi compare ce qui était prévu à ce qui est fait, cherche les causes de l’écart et adapte les plans d’action.',
                        'choices' => [
                            ['choice_text' => 'Il cherche pourquoi il y a un écart et revoit le calendrier et les actions', 'is_correct' => true],
                            ['choice_text' => 'Il arrête le projet d’intégration pour limiter les coûts', 'is_correct' => false],
                            ['choice_text' => 'Il attend la fin de l’année pour regarder les chiffres', 'is_correct' => false],
                            ['choice_text' => 'Il remplace l’équipe d’intégration avant d’avoir analysé les causes de l’écart', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Financement d’une acquisition',
                'description' => 'Introduction aux principales sources de financement d’une transaction et à leurs effets.',
                'questions' => [
                    [
                        'question' => 'Un acheteur utilise un prêt bancaire pour financer une partie du prix d’acquisition. Comment qualifier cette partie du financement ?',
                        'explanation' => 'Un prêt bancaire utilisé pour financer l’achat constitue de la dette d’acquisition et devra être remboursé selon les conditions du financement.',
                        'choices' => [
                            ['choice_text' => 'Prime d’acquisition', 'is_correct' => false],
                            ['choice_text' => 'Apport en fonds propres', 'is_correct' => false],
                            ['choice_text' => 'Provision pour risques', 'is_correct' => false],
                            ['choice_text' => 'Dette d’acquisition', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Samira peut payer une acquisition avec sa trésorerie, sans emprunter. Quel est l’avantage principal ?',
                        'explanation' => 'Payer en cash évite le coût d’un nouvel emprunt, même si la trésorerie disponible pour d’autres besoins diminue.',
                        'choices' => [
                            ['choice_text' => 'Elle évite de payer des intérêts sur un nouvel emprunt', 'is_correct' => true],
                            ['choice_text' => 'Elle garde intacte sa trésorerie pour d’autres projets', 'is_correct' => false],
                            ['choice_text' => 'Elle obtient un prix d’achat plus bas qu’avec un emprunt', 'is_correct' => false],
                            ['choice_text' => 'Elle déduit le prix payé de ses impôts de l’année', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une acquisition est financée par émission de nouvelles actions de l’acheteur. Quelle conséquence immédiate peut se produire pour les actionnaires existants ?',
                        'explanation' => 'L’émission de nouvelles actions augmente le nombre de titres. Les actionnaires existants peuvent donc voir leur pourcentage de détention diminuer.',
                        'choices' => [
                            ['choice_text' => 'Une hausse de la valeur nominale de leurs actions', 'is_correct' => false],
                            ['choice_text' => 'Une dilution de leur pourcentage de détention', 'is_correct' => true],
                            ['choice_text' => 'Une obligation de revendre une partie de leurs titres', 'is_correct' => false],
                            ['choice_text' => 'Une baisse de la dette nette de l’acheteur', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise finance une acquisition avec une combinaison de dette et de fonds propres. Comment appelle-t-on simplement ce montage ?',
                        'explanation' => 'Une combinaison de dette et de fonds propres constitue un financement mixte ou une structure de financement combinée.',
                        'choices' => [
                            ['choice_text' => 'Financement par dette seule', 'is_correct' => false],
                            ['choice_text' => 'Financement mixte', 'is_correct' => true],
                            ['choice_text' => 'Financement par fonds propres seuls', 'is_correct' => false],
                            ['choice_text' => 'Financement en cash', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un prêt de 40 M€ porte un taux annuel de 5 %. Sans tenir compte de l’amortissement, quelle charge d’intérêt annuelle approximative représente-t-il ?',
                        'explanation' => '40 M€ × 5 % = 2 M€ d’intérêts annuels, avant éventuels frais ou ajustements.',
                        'choices' => [
                            ['choice_text' => '0,5 M€', 'is_correct' => false],
                            ['choice_text' => '1 M€', 'is_correct' => false],
                            ['choice_text' => '2 M€', 'is_correct' => true],
                            ['choice_text' => '5 M€', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Avant d’emprunter beaucoup pour financer un rachat, que doit vérifier l’acheteur ?',
                        'explanation' => 'Intérêts et remboursements sont payés avec du cash. Si les flux futurs ne suffisent pas, un groupe trop endetté prend un vrai risque financier.',
                        'choices' => [
                            ['choice_text' => 'Que ses flux de trésorerie futurs suffiront à payer les intérêts et à rembourser le capital', 'is_correct' => true],
                            ['choice_text' => 'Que son bénéfice de l’an dernier dépasse le montant de l’emprunt', 'is_correct' => false],
                            ['choice_text' => 'Que les actionnaires accepteront de renoncer à leurs dividendes pendant toute la durée du prêt', 'is_correct' => false],
                            ['choice_text' => 'Que le prix payé est égal à la valeur comptable de la cible', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pour payer son rachat, Youssef emprunte au lieu d’utiliser sa trésorerie. Quel est le compromis ?',
                        'explanation' => 'La dette préserve le cash au moment du closing, mais augmente le levier financier et les intérêts à payer les années suivantes.',
                        'choices' => [
                            ['choice_text' => 'Il s’endette moins, mais doit vider sa trésorerie', 'is_correct' => false],
                            ['choice_text' => 'Il dilue ses actionnaires, mais garde intacte sa capacité d’emprunt', 'is_correct' => false],
                            ['choice_text' => 'Il paie moins d’impôts, mais perd le contrôle de la cible', 'is_correct' => false],
                            ['choice_text' => 'Il garde du cash, mais s’endette davantage et paie plus d’intérêts', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Karim paie 60 M€ pour une cible : 20 M€ viennent d’un prêt, le reste de sa trésorerie. Quelle part du prix est financée par la dette ?',
                        'explanation' => '20 / 60 = 0,333, soit un tiers du prix.',
                        'choices' => [
                            ['choice_text' => '20 %', 'is_correct' => false],
                            ['choice_text' => '33,3 %', 'is_correct' => true],
                            ['choice_text' => '50 %', 'is_correct' => false],
                            ['choice_text' => '66,7 %', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une banque conditionne un financement d’acquisition au respect de certains ratios financiers. Ces clauses sont généralement appelées :',
                        'explanation' => 'Les covenants sont des engagements contractuels qui peuvent imposer des limites ou des seuils financiers à l’emprunteur.',
                        'choices' => [
                            ['choice_text' => 'Coupons', 'is_correct' => false],
                            ['choice_text' => 'Covenants', 'is_correct' => true],
                            ['choice_text' => 'Spreads de crédit', 'is_correct' => false],
                            ['choice_text' => 'Nantissements', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Youssef a emprunté à taux variable pour racheter une société. Quel risque cela lui fait-il courir ?',
                        'explanation' => 'Avec un taux variable, la charge d’intérêts suit le marché. Quand les taux montent, le cash disponible diminue.',
                        'choices' => [
                            ['choice_text' => 'Si les taux baissent, ses intérêts augmentent et son cash-flow baisse', 'is_correct' => false],
                            ['choice_text' => 'Si les taux montent, le capital à rembourser augmente en même temps que les intérêts', 'is_correct' => false],
                            ['choice_text' => 'Si les taux montent, le prix payé pour la cible augmente de la même façon', 'is_correct' => false],
                            ['choice_text' => 'Si les taux montent, ses intérêts augmentent et son cash-flow baisse', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Karim ne veut pas dépendre d’un seul prêteur pour financer son rachat. Que peut-il faire ?',
                        'explanation' => 'Avec plusieurs prêteurs ou instruments, on dépend moins d’une seule source et on garde plus de souplesse.',
                        'choices' => [
                            ['choice_text' => 'Emprunter la totalité du prix auprès de la banque qui offre le meilleur taux', 'is_correct' => false],
                            ['choice_text' => 'Garder son prêteur actuel et lui demander une limite de crédit plus haute', 'is_correct' => false],
                            ['choice_text' => 'Choisir un prêt à taux fixe plutôt qu’un prêt à taux variable', 'is_correct' => false],
                            ['choice_text' => 'Répartir son financement entre plusieurs banques et plusieurs instruments', 'is_correct' => true],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Structure de transaction et prix payé',
                'description' => 'Cas d’initiation sur les structures d’offres, les ajustements de prix et les modalités de paiement.',
                'questions' => [
                    [
                        'question' => 'Un acheteur propose 70 % du prix en cash et 30 % en actions de l’acquéreur. Comment décrire cette offre ?',
                        'explanation' => 'Le prix est payé avec deux formes de considération : du cash et des actions de l’acquéreur.',
                        'choices' => [
                            ['choice_text' => 'Une offre entièrement en cash', 'is_correct' => false],
                            ['choice_text' => 'Une offre entièrement en actions', 'is_correct' => false],
                            ['choice_text' => 'Une offre mixte cash et actions', 'is_correct' => true],
                            ['choice_text' => 'Une offre avec complément de prix (earn-out)', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Samira vend sa société et accepte d’être payée en partie en actions de l’acheteur. Quel intérêt peut-elle y voir ?',
                        'explanation' => 'Avec des actions, le vendeur participe à la création de valeur du groupe. En échange, il prend le risque que le cours de l’acquéreur baisse.',
                        'choices' => [
                            ['choice_text' => 'Profiter de la future valeur du groupe réunissant les deux sociétés', 'is_correct' => true],
                            ['choice_text' => 'Toucher un revenu fixe, comme avec une obligation de l’acquéreur', 'is_correct' => false],
                            ['choice_text' => 'Être protégée contre toute baisse du cours de l’action de l’acquéreur', 'is_correct' => false],
                            ['choice_text' => 'Faire baisser le prix payé par l’acheteur', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une clause prévoit que le prix final sera ajusté si la dette nette à la date de closing diffère fortement de celle retenue pour le prix initial. À quoi sert cette clause ?',
                        'explanation' => 'Un mécanisme d’ajustement de prix peut tenir compte de la dette nette, du besoin en fonds de roulement ou d’autres éléments mesurés à la date de réalisation.',
                        'choices' => [
                            ['choice_text' => 'À faire payer au vendeur les frais de transaction de l’acheteur', 'is_correct' => false],
                            ['choice_text' => 'À donner à l’acheteur le droit d’annuler l’opération si le cours de Bourse baisse', 'is_correct' => false],
                            ['choice_text' => 'À rapprocher le prix final de la situation financière réellement constatée', 'is_correct' => true],
                            ['choice_text' => 'À partager les synergies entre le vendeur et l’acheteur', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un vendeur souhaite un prix complémentaire si certains objectifs de chiffre d’affaires sont atteints après la vente. Quel mécanisme peut correspondre à cette logique ?',
                        'explanation' => 'Un earn-out prévoit un paiement additionnel lié à des objectifs futurs définis dans le contrat.',
                        'choices' => [
                            ['choice_text' => 'Prime de contrôle', 'is_correct' => false],
                            ['choice_text' => 'Earn-out', 'is_correct' => true],
                            ['choice_text' => 'Garantie de passif', 'is_correct' => false],
                            ['choice_text' => 'Break-up fee', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est, pour l’acheteur, le principal intérêt d’un earn-out bien rédigé ?',
                        'explanation' => 'L’acheteur n’a pas à payer tout de suite une valeur future incertaine. Mieux vaut quand même définir l’earn-out très précisément pour éviter les litiges.',
                        'choices' => [
                            ['choice_text' => 'Réduire le prix total payé au vendeur, quelle que soit la performance de la cible après l’opération', 'is_correct' => false],
                            ['choice_text' => 'Se passer de due diligence sur la partie du prix payée plus tard', 'is_correct' => false],
                            ['choice_text' => 'Payer une partie du prix plus tard, seulement si la performance promise est au rendez-vous', 'is_correct' => true],
                            ['choice_text' => 'Transférer au vendeur le risque de change sur le prix payé', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une transaction prévoit un prix de 40 M€ et 3 M€ de frais de transaction. Les frais ne sont pas versés au vendeur. Quel montant total l’acheteur doit-il débourser, avant autres ajustements ?',
                        'explanation' => '40 + 3 = 43 M€. Les frais de transaction s’ajoutent aux fonds nécessaires pour réaliser l’opération, même s’ils ne constituent pas un paiement au vendeur.',
                        'choices' => [
                            ['choice_text' => '3 M€', 'is_correct' => false],
                            ['choice_text' => '37 M€', 'is_correct' => false],
                            ['choice_text' => '40 M€', 'is_correct' => false],
                            ['choice_text' => '43 M€', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Une offre publique est annoncée à 32 € alors que l’action de la cible cotait 28 € avant l’annonce. La prime annoncée est d’environ :',
                        'explanation' => 'Prime = (32 - 28) / 28 = 14,3 % environ. L’écart absolu est de 4 € par action.',
                        'choices' => [
                            ['choice_text' => '4 € par action, soit 12,5 %', 'is_correct' => false],
                            ['choice_text' => '4 € par action, soit 4 %', 'is_correct' => false],
                            ['choice_text' => '14,3 € par action, soit 4 %', 'is_correct' => false],
                            ['choice_text' => '4 € par action, soit 14,3 %', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Karim préfère payer son rachat en actions plutôt qu’en cash. Quel avantage y trouve-t-il ?',
                        'explanation' => 'Payer en actions limite le besoin de cash au closing. En contrepartie, les actionnaires existants sont dilués et le vendeur subit les variations du cours de l’acquéreur.',
                        'choices' => [
                            ['choice_text' => 'Il garde sa trésorerie et partage avec le vendeur une partie du risque', 'is_correct' => true],
                            ['choice_text' => 'Il n’a pas à émettre de nouveaux titres, ce qui protège ses actionnaires existants', 'is_correct' => false],
                            ['choice_text' => 'Il fixe le cours de son action pendant toute la durée de l’opération', 'is_correct' => false],
                            ['choice_text' => 'Il évite que le vendeur participe à la création de valeur du groupe', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise propose un prix élevé à condition que le vendeur garantisse l’absence de dette cachée. Cette logique concerne principalement :',
                        'explanation' => 'Les garanties et déclarations du vendeur servent notamment à répartir certains risques liés aux informations de la cible et à protéger l’acheteur en cas de problème couvert par le contrat.',
                        'choices' => [
                            ['choice_text' => 'Le calcul du multiple EV/EBITDA de la cible', 'is_correct' => false],
                            ['choice_text' => 'La répartition des risques entre vendeur et acheteur', 'is_correct' => true],
                            ['choice_text' => 'Le financement de l’opération par un prêt bancaire', 'is_correct' => false],
                            ['choice_text' => 'La fixation du prix par rapport au cours de Bourse de la cible', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Le vendeur préfère recevoir plus de cash tout de suite plutôt qu’un earn-out incertain. Quelle idée explique ce choix ?',
                        'explanation' => 'Le cash du closing est certain (une fois la vente conclue), alors qu’un earn-out dépend d’événements futurs. Le vendeur peut donc accepter un peu moins pour être payé tout de suite.',
                        'choices' => [
                            ['choice_text' => 'Un euro reçu aujourd’hui est certain et vaut plus qu’un euro espéré plus tard', 'is_correct' => true],
                            ['choice_text' => 'Un paiement différé rapporte au vendeur des intérêts garantis par l’acheteur', 'is_correct' => false],
                            ['choice_text' => 'L’earn-out est calculé sur les résultats de l’acheteur et non sur ceux de la cible', 'is_correct' => false],
                            ['choice_text' => 'Le cash reçu au closing ne peut pas être réinvesti, contrairement à l’earn-out', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Deux offres affichent le même prix nominal. La première est payable intégralement au closing, la seconde prévoit 30 % dans trois ans sans intérêt. Laquelle donne au vendeur plus de liquidité immédiate ?',
                        'explanation' => 'Avec le paiement intégral au closing, le vendeur a tout de suite les fonds. Un paiement différé de trois ans sans intérêt lui donne moins de liquidité et vaut moins en valeur actuelle.',
                        'choices' => [
                            ['choice_text' => 'La seconde, car les 30 % différés produisent des intérêts', 'is_correct' => false],
                            ['choice_text' => 'La première, car tout le prix est versé au closing', 'is_correct' => true],
                            ['choice_text' => 'Les deux offres, puisque le prix nominal est le même', 'is_correct' => false],
                            ['choice_text' => 'Cela dépend du taux de change, pas du calendrier de paiement', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Accrétion, dilution et impact sur les actionnaires',
                'description' => 'Questions d’introduction sur le BPA, la dilution et l’analyse simple de l’impact financier d’une acquisition.',
                'questions' => [
                    [
                        'question' => 'Après une acquisition, le bénéfice net du groupe passe de 20 M€ à 25 M€, tandis que le nombre d’actions passe de 10 à 15 millions. Quel est le nouveau BPA ?',
                        'explanation' => 'BPA = résultat net / nombre d’actions = 25 / 15 = 1,67 € environ.',
                        'choices' => [
                            ['choice_text' => '1,00 €', 'is_correct' => false],
                            ['choice_text' => '2,00 €', 'is_correct' => false],
                            ['choice_text' => '2,50 €', 'is_correct' => false],
                            ['choice_text' => '1,67 €', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Avant une transaction, un groupe réalise 12 M€ de bénéfice pour 6 millions d’actions. Quel est son BPA initial ?',
                        'explanation' => '12 / 6 = 2 € par action.',
                        'choices' => [
                            ['choice_text' => '0,50 €', 'is_correct' => false],
                            ['choice_text' => '2,00 €', 'is_correct' => true],
                            ['choice_text' => '6,00 €', 'is_correct' => false],
                            ['choice_text' => '18,00 €', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Si une acquisition fait monter le BPA du groupe, on dit qu’elle est :',
                        'explanation' => 'Une opération accrétive fait monter le bénéfice par action ; une opération dilutive le fait baisser.',
                        'choices' => [
                            ['choice_text' => 'Accrétive', 'is_correct' => true],
                            ['choice_text' => 'Dilutive', 'is_correct' => false],
                            ['choice_text' => 'Neutre en BPA', 'is_correct' => false],
                            ['choice_text' => 'Spéculative', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une acquisition payée avec beaucoup d’actions nouvelles peut faire baisser le BPA. Quelle est la cause la plus directe ?',
                        'explanation' => 'BPA = bénéfice / nombre d’actions. Une grosse émission augmente le dénominateur ; si le bénéfice ne suit pas, le BPA baisse.',
                        'choices' => [
                            ['choice_text' => 'Le bénéfice de la cible n’est pas pris en compte dans le calcul du BPA', 'is_correct' => false],
                            ['choice_text' => 'Le cours de l’action baisse, ce qui diminue le résultat net', 'is_correct' => false],
                            ['choice_text' => 'Le nombre d’actions augmente plus vite que le bénéfice', 'is_correct' => true],
                            ['choice_text' => 'La dette de l’acheteur augmente, ce qui réduit le nombre d’actions', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une cible apporte 4 M€ de bénéfice et l’acquéreur émet 2 millions d’actions nouvelles. Que faut-il comparer pour savoir si le BPA monte ?',
                        'explanation' => '4 M€ / 2 millions d’actions = 2 € de bénéfice par action nouvelle. Si ce montant dépasse le BPA actuel, l’opération est accrétive ; sinon elle est dilutive (avant coût du financement et synergies).',
                        'choices' => [
                            ['choice_text' => 'Le cours de Bourse de l’acquéreur et le prix demandé pour racheter la cible', 'is_correct' => false],
                            ['choice_text' => 'Les 2 € de bénéfice apportés par action nouvelle et le BPA de l’acquéreur', 'is_correct' => true],
                            ['choice_text' => 'Le chiffre d’affaires de la cible et celui de l’acquéreur', 'is_correct' => false],
                            ['choice_text' => 'La dette de la cible et le nombre d’actions nouvelles', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un analyste dit qu’une acquisition est forcément bonne puisqu’elle est accrétive dès la première année. Quelle réserve est pertinente ?',
                        'explanation' => 'Un BPA qui monte peut cacher un prix excessif ou des coûts futurs importants. Il faut le lire avec les autres indicateurs.',
                        'choices' => [
                            ['choice_text' => 'Le BPA n’est connu qu’après plusieurs années, donc la remarque est prématurée à ce stade', 'is_correct' => false],
                            ['choice_text' => 'Le BPA ne concerne que les actionnaires de la cible, pas ceux de l’acquéreur', 'is_correct' => false],
                            ['choice_text' => 'Le BPA ne mesure pas à lui seul la création de valeur : le prix peut être trop élevé', 'is_correct' => true],
                            ['choice_text' => 'Un BPA en hausse montre au contraire que le prix payé était trop élevé', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise a 8 millions d’actions et réalise 16 M€ de bénéfice. Après l’opération, elle réalise 18 M€ de bénéfice mais compte 10 millions d’actions. Le BPA passe de 2,00 € à :',
                        'explanation' => 'Avant : 16/8 = 2 €. Après : 18/10 = 1,80 €. Le BPA a donc diminué.',
                        'choices' => [
                            ['choice_text' => '1,60 €', 'is_correct' => false],
                            ['choice_text' => '1,80 €', 'is_correct' => true],
                            ['choice_text' => '2,00 €', 'is_correct' => false],
                            ['choice_text' => '2,25 €', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Après l’annonce d’un rachat, Youssef, actionnaire de l’acheteur, regarde l’effet sur le BPA et le cash-flow. À quoi lui servent ces deux indicateurs ?',
                        'explanation' => 'BPA et cash-flow aident à juger l’effet de l’opération, mais il faut les lire avec la stratégie, le risque, le prix et les perspectives à long terme.',
                        'choices' => [
                            ['choice_text' => 'À fixer légalement le prix payé aux actionnaires de la cible', 'is_correct' => false],
                            ['choice_text' => 'À remplacer l’analyse de la stratégie et du prix payé', 'is_correct' => false],
                            ['choice_text' => 'À vérifier que le chiffre d’affaires de l’acheteur reste identique après l’opération', 'is_correct' => false],
                            ['choice_text' => 'À estimer l’effet de l’opération sur le bénéfice et la trésorerie', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'La première année, le BPA baisse à cause des coûts d’intégration ; les synergies ne seront visibles qu’à partir de la deuxième année. Comment juger l’opération ?',
                        'explanation' => 'Les coûts arrivent d’abord et les gains ensuite. On juge donc l’opération sur toute sa durée, pas sur une seule année.',
                        'choices' => [
                            ['choice_text' => 'En suivant sur plusieurs années les coûts, les synergies et les flux de trésorerie', 'is_correct' => true],
                            ['choice_text' => 'En retenant le BPA de la première année, qui résume à lui seul l’effet de l’opération', 'is_correct' => false],
                            ['choice_text' => 'En ignorant les coûts d’intégration, qui ne sont payés qu’une fois', 'is_correct' => false],
                            ['choice_text' => 'En concluant à un échec, puisque le BPA baisse dès la première année', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise a 100 M€ de bénéfice et 50 millions d’actions avant transaction. Elle prévoit 10 M€ de bénéfice additionnel et émet 5 millions d’actions. Le BPA pro forma, sans autres effets, est :',
                        'explanation' => 'Le bénéfice pro forma est de 110 M€ et le nombre d’actions de 55 millions. BPA = 110 / 55 = 2,00 €.',
                        'choices' => [
                            ['choice_text' => '1,67 €', 'is_correct' => false],
                            ['choice_text' => '2,00 €', 'is_correct' => true],
                            ['choice_text' => '1,83 €', 'is_correct' => false],
                            ['choice_text' => '2,20 €', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Intégration après le closing',
                'description' => 'Cas pratiques sur les premières étapes d’intégration et le suivi de la création de valeur après acquisition.',
                'questions' => [
                    [
                        'question' => 'Après le rachat, les deux sociétés gardent chacune leur logiciel comptable. Quel problème pratique cela pose-t-il au groupe ?',
                        'explanation' => 'Avec deux systèmes, les rapprochements prennent du temps et les chiffres ne sont pas comparables. C’est pourquoi l’intégration s’y attaque vite.',
                        'choices' => [
                            ['choice_text' => 'Il devient difficile d’établir un reporting financier unique et fiable', 'is_correct' => true],
                            ['choice_text' => 'Les comptes de chaque société cessent d’être valables juridiquement', 'is_correct' => false],
                            ['choice_text' => 'Le taux de change entre les deux sociétés devient impossible à fixer', 'is_correct' => false],
                            ['choice_text' => 'Les synergies commerciales sont annulées par la différence de logiciels', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'L’équipe d’intégration doit suivre 20 initiatives de synergies. Quel outil simple l’aide à piloter le projet ?',
                        'explanation' => 'Chaque initiative a un responsable, une échéance, un montant attendu et un niveau d’avancement. Sans cela, personne ne sait où en est le projet.',
                        'choices' => [
                            ['choice_text' => 'Le cours de Bourse du groupe, qui indique l’avancement de chaque initiative', 'is_correct' => false],
                            ['choice_text' => 'Le bilan comptable de l’année précédente', 'is_correct' => false],
                            ['choice_text' => 'Le tableau d’amortissement des emprunts', 'is_correct' => false],
                            ['choice_text' => 'Un tableau de suivi : responsable, objectif, échéance, avancement', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Après le rachat, deux directions commerciales couvrent la même région. Quel enjeu d’intégration apparaît tout de suite ?',
                        'explanation' => 'Quand deux équipes font la même chose, il faut dire qui décide de quoi et examiner les doublons, qui coûtent de l’argent ou créent des tensions.',
                        'choices' => [
                            ['choice_text' => 'Clarifier les rôles et traiter les doublons entre les deux directions', 'is_correct' => true],
                            ['choice_text' => 'Réduire les prix de vente pour attirer les clients de l’autre direction', 'is_correct' => false],
                            ['choice_text' => 'Refinancer la dette commune aux deux directions', 'is_correct' => false],
                            ['choice_text' => 'Choisir la méthode de valorisation de chaque direction', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Que cherche-t-on en comparant les résultats au business case initial ?',
                        'explanation' => 'Le business case fixe un objectif. En le comparant à la réalité, on repère les écarts et on corrige les actions ou les hypothèses.',
                        'choices' => [
                            ['choice_text' => 'À vérifier que le prix payé reste conforme au contrat signé', 'is_correct' => false],
                            ['choice_text' => 'À remplacer la comptabilité du groupe par un suivi de projet propre à l’intégration', 'is_correct' => false],
                            ['choice_text' => 'À voir si la création de valeur promise se réalise et à corriger les écarts', 'is_correct' => true],
                            ['choice_text' => 'À mesurer l’avancement des paiements dus au vendeur', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Après la fusion, une entreprise perd plusieurs clients historiques qui étaient attachés à l’ancienne équipe commerciale. Quel type de problème cela illustre-t-il ?',
                        'explanation' => 'La perte de clients après une acquisition peut provenir d’un changement de relation commerciale, de service ou de marque. C’est un risque d’intégration commerciale.',
                        'choices' => [
                            ['choice_text' => 'Un risque de taux d’intérêt', 'is_correct' => false],
                            ['choice_text' => 'Un risque de change sur les ventes de la cible', 'is_correct' => false],
                            ['choice_text' => 'Un risque commercial lié à l’intégration', 'is_correct' => true],
                            ['choice_text' => 'Un risque de liquidité de la cible', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une acquisition promet une économie de 4 M€ mais nécessite 1 M€ de dépenses d’intégration. Quelle économie nette simple reste-t-il avant autres effets ?',
                        'explanation' => '4 - 1 = 3 M€. Cette approche simplifiée montre qu’il faut tenir compte des coûts nécessaires à la réalisation de la synergie.',
                        'choices' => [
                            ['choice_text' => '1 M€', 'is_correct' => false],
                            ['choice_text' => '3 M€', 'is_correct' => true],
                            ['choice_text' => '4 M€', 'is_correct' => false],
                            ['choice_text' => '5 M€', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'À quoi sert la communication interne après un rapprochement ?',
                        'explanation' => 'Un rachat crée de l’incertitude. Une communication claire aide les équipes à comprendre les rôles, les priorités et ce qui va changer.',
                        'choices' => [
                            ['choice_text' => 'À fixer les objectifs de synergies à la place de la direction', 'is_correct' => false],
                            ['choice_text' => 'À informer les actionnaires de la cible sur le prix payé', 'is_correct' => false],
                            ['choice_text' => 'À remplacer les indicateurs de performance par des messages internes', 'is_correct' => false],
                            ['choice_text' => 'À expliquer les changements et à rassurer les équipes', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Deux entreprises fusionnées utilisent des politiques commerciales différentes pour accorder des remises. Quel risque pratique faut-il surveiller ?',
                        'explanation' => 'Des règles de remise différentes peuvent créer des comportements incohérents et réduire la marge. L’intégration commerciale doit harmoniser les politiques pertinentes.',
                        'choices' => [
                            ['choice_text' => 'Une dilution des actionnaires de l’acheteur', 'is_correct' => false],
                            ['choice_text' => 'Un risque de change sur les ventes du groupe réalisées à l’export', 'is_correct' => false],
                            ['choice_text' => 'Une incohérence des prix et une érosion possible des marges', 'is_correct' => true],
                            ['choice_text' => 'Une hausse du coût de la dette', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Après le rachat, beaucoup de collaborateurs clés démissionnent. Quel danger cela représente-t-il ?',
                        'explanation' => 'Quand les personnes clés partent, elles emportent leur savoir-faire et leurs contacts clients. Les bénéfices attendus de l’opération peuvent s’en ressentir.',
                        'choices' => [
                            ['choice_text' => 'Une baisse du capital social de la cible, qui doit être reconstitué par l’acheteur', 'is_correct' => false],
                            ['choice_text' => 'Un remboursement du prix par le vendeur, prévu par la loi', 'is_correct' => false],
                            ['choice_text' => 'Un changement de méthode comptable imposé à tout le groupe', 'is_correct' => false],
                            ['choice_text' => 'La perte de savoir-faire et de relations clients, qui menace les synergies', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Une équipe d’intégration constate qu’une synergie prévue nécessite un investissement informatique qui n’avait pas été budgété. Quelle réaction est la plus professionnelle ?',
                        'explanation' => 'Le coût imprévu doit être intégré à l’analyse. Il faut comparer l’investissement supplémentaire aux gains attendus et à leur calendrier.',
                        'choices' => [
                            ['choice_text' => 'Mettre à jour le plan économique et recalculer le retour de l’investissement', 'is_correct' => true],
                            ['choice_text' => 'Annuler la synergie sans calculer son gain net', 'is_correct' => false],
                            ['choice_text' => 'Enregistrer le coût comme une dépense du vendeur', 'is_correct' => false],
                            ['choice_text' => 'Reporter la dépense en attendant que la synergie se réalise pour la financer avec ses gains', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Risques et erreurs fréquentes en M&A',
                'description' => 'Mise en situation autour des erreurs classiques : surpayer, sous-estimer les risques et négliger l’intégration.',
                'questions' => [
                    [
                        'question' => 'Un dirigeant affirme : « Nous devons acheter cette société parce que notre concurrent veut aussi l’acheter. » Quel risque de décision cette phrase illustre-t-elle ?',
                        'explanation' => 'La concurrence entre acquéreurs peut pousser à payer trop cher. Une discipline de prix reste importante même lorsque la pression concurrentielle augmente.',
                        'choices' => [
                            ['choice_text' => 'Le risque de dépendance envers un seul fournisseur', 'is_correct' => false],
                            ['choice_text' => 'La surenchère et la perte de discipline sur le prix', 'is_correct' => true],
                            ['choice_text' => 'Le risque de change sur le prix offert', 'is_correct' => false],
                            ['choice_text' => 'Le risque de taux sur la dette contractée pour l’acquisition', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise réalise une acquisition dans un secteur qu’elle connaît très peu. Quelle précaution devient particulièrement importante ?',
                        'explanation' => 'Une faible connaissance du secteur augmente le besoin d’analyse. L’acheteur doit comprendre la dynamique concurrentielle, les risques et les compétences requises.',
                        'choices' => [
                            ['choice_text' => 'Renforcer l’analyse du marché, des risques et des compétences', 'is_correct' => true],
                            ['choice_text' => 'Payer une prime plus élevée pour se couvrir contre l’inconnu du secteur', 'is_correct' => false],
                            ['choice_text' => 'S’appuyer sur le business plan du vendeur sans le contester', 'is_correct' => false],
                            ['choice_text' => 'Réduire la durée de la due diligence pour aller plus vite', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un analyste valorise une cible en ne retenant qu’un scénario de croissance très élevée. Quel est le problème ?',
                        'explanation' => 'Si tout repose sur une hypothèse très optimiste, la valeur devient fragile. Des scénarios alternatifs et des tests de sensibilité permettent de mesurer ce risque.',
                        'choices' => [
                            ['choice_text' => 'La dette nette de la cible est oubliée dans le calcul', 'is_correct' => false],
                            ['choice_text' => 'Le résultat dépend trop d’une hypothèse optimiste', 'is_correct' => true],
                            ['choice_text' => 'Le multiple retenu est trop bas par rapport aux comparables', 'is_correct' => false],
                            ['choice_text' => 'L’EBITDA est confondu avec le résultat net', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une cible croît vite mais dépense beaucoup de cash pour financer ses stocks. Que doit analyser l’acheteur en priorité ?',
                        'explanation' => 'Une forte croissance peut absorber du cash si les stocks et les créances augmentent vite. Le BFR et les flux de trésorerie montrent ce que la cible génère vraiment.',
                        'choices' => [
                            ['choice_text' => 'Le chiffre d’affaires de l’année, qui permet d’en déduire directement le cash généré', 'is_correct' => false],
                            ['choice_text' => 'Le besoin en fonds de roulement et les flux de trésorerie, pas seulement les ventes', 'is_correct' => true],
                            ['choice_text' => 'Le résultat net comptable, qui est égal au cash généré', 'is_correct' => false],
                            ['choice_text' => 'Le nombre de clients, dont la hausse prouve que le cash augmente', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une acquisition semble rentable sur le papier, mais les coûts de départ des salariés et de changement des systèmes sont très élevés. Que doit-on en retenir ?',
                        'explanation' => 'Restructuration, nouveaux systèmes et transition coûtent cher et prennent du temps. Ces coûts doivent figurer dans le business case.',
                        'choices' => [
                            ['choice_text' => 'Les coûts d’intégration sont déjà payés par le vendeur dans le prix de vente', 'is_correct' => false],
                            ['choice_text' => 'Seul le prix d’achat compte dans la rentabilité d’une acquisition', 'is_correct' => false],
                            ['choice_text' => 'Les coûts d’intégration peuvent réduire ou retarder la création de valeur annoncée', 'is_correct' => true],
                            ['choice_text' => 'Les coûts de départ des salariés ne concernent que la comptabilité de la cible avant la vente', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un acquéreur découvre après le closing qu’un chiffre de ventes avait été présenté sans distinguer les revenus récurrents et exceptionnels. Quelle bonne pratique aurait réduit ce risque ?',
                        'explanation' => 'La normalisation des résultats permet de mieux distinguer la performance durable des éléments exceptionnels et de réduire le risque d’une valorisation fondée sur des chiffres trompeurs.',
                        'choices' => [
                            ['choice_text' => 'Normaliser les données et approfondir la due diligence avant le deal', 'is_correct' => true],
                            ['choice_text' => 'Demander au vendeur un prix plus bas sans vérifier ses chiffres', 'is_correct' => false],
                            ['choice_text' => 'Se limiter au chiffre d’affaires de la dernière année pour valoriser la cible', 'is_correct' => false],
                            ['choice_text' => 'Attendre le closing pour vérifier les ventes récurrentes', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Samira a payé une prime élevée en comptant sur une synergie immédiate. Après le closing, elle met trois ans à se réaliser. Quelle conséquence pour sa valeur ?',
                        'explanation' => 'Plus une synergie arrive tard, moins elle vaut aujourd’hui. Le calendrier compte donc autant que le montant.',
                        'choices' => [
                            ['choice_text' => 'La synergie vaut le même montant, car seul le total des années compte', 'is_correct' => false],
                            ['choice_text' => 'La synergie perd toute valeur, car elle arrive trop tard', 'is_correct' => false],
                            ['choice_text' => 'La prime payée est remboursée par le vendeur à hauteur du retard', 'is_correct' => false],
                            ['choice_text' => 'La valeur actuelle de la synergie est plus faible que prévu', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Deux cibles ont le même chiffre d’affaires : l’une vend à trois gros clients, l’autre à des centaines de petits. Quel est le risque de la première ?',
                        'explanation' => 'Quand quelques clients font l’essentiel des ventes, le départ de l’un d’eux pèse lourd. Avec des centaines de clients, la perte d’un seul se remarque à peine.',
                        'choices' => [
                            ['choice_text' => 'Son EBITDA est plus faible, car les gros clients ne sont pas rentables pour elle', 'is_correct' => false],
                            ['choice_text' => 'Perdre un seul client ferait chuter ses revenus bien plus que pour l’autre', 'is_correct' => true],
                            ['choice_text' => 'Elle doit rembourser sa dette plus tôt que l’autre cible', 'is_correct' => false],
                            ['choice_text' => 'Son chiffre d’affaires ne peut pas être vérifié en due diligence', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une équipe M&A ne trouve aucune dette financière, mais découvre d’importants engagements de location. Quel principe doit-elle retenir ?',
                        'explanation' => 'Une entreprise sans dette bancaire peut avoir de lourds engagements par contrat, comme des loyers. Il faut les analyser et mesurer leur effet.',
                        'choices' => [
                            ['choice_text' => 'Les loyers à payer sont des capitaux propres de l’entreprise', 'is_correct' => false],
                            ['choice_text' => 'Les engagements de location n’ont pas d’effet sur le prix si le bail est signé', 'is_correct' => false],
                            ['choice_text' => 'L’absence de dette bancaire ne veut pas dire absence d’engagements financiers', 'is_correct' => true],
                            ['choice_text' => 'Seule la dette bancaire compte pour juger de la solidité financière de la cible', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Après une acquisition, le management refuse de suivre les indicateurs prévus dans le business case. Quel risque cela crée-t-il ?',
                        'explanation' => 'Sans indicateurs fiables ni responsable clair, on ne sait pas si l’opération tient ses promesses, et on ne peut pas corriger à temps.',
                        'choices' => [
                            ['choice_text' => 'Une baisse des coûts de reporting, qui améliore mécaniquement les synergies prévues', 'is_correct' => false],
                            ['choice_text' => 'Un manque de pilotage et une difficulté à mesurer si les objectifs sont atteints', 'is_correct' => true],
                            ['choice_text' => 'Un partage plus clair des responsabilités entre les équipes', 'is_correct' => false],
                            ['choice_text' => 'Un risque de change sur les synergies attendues', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Mini-cas d’acquisition pour débutants',
                'description' => 'Mini-cas de synthèse combinant prix, financement, synergies et analyse des risques.',
                'questions' => [
                    [
                        'question' => 'La société Alpha veut racheter Beta pour 75 M€ d’Equity Value. Beta a 10 M€ de dette nette. Quelle Enterprise Value correspond approximativement à l’opération ?',
                        'explanation' => 'EV = Equity Value + dette nette = 75 + 10 = 85 M€.',
                        'choices' => [
                            ['choice_text' => '85 M€', 'is_correct' => true],
                            ['choice_text' => '65 M€', 'is_correct' => false],
                            ['choice_text' => '75 M€', 'is_correct' => false],
                            ['choice_text' => '750 M€', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Beta réalise 10 M€ d’EBITDA. Avec une Enterprise Value de 85 M€, quel est le multiple EV/EBITDA approximatif ?',
                        'explanation' => '85 / 10 = 8,5x.',
                        'choices' => [
                            ['choice_text' => '5,5x', 'is_correct' => false],
                            ['choice_text' => '10x', 'is_correct' => false],
                            ['choice_text' => '8,5x', 'is_correct' => true],
                            ['choice_text' => '12,5x', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Alpha prévoit 3 M€ de synergies de coûts par an et 0,5 M€ de coûts d’intégration la première année. Quel est le gain net simplifié de la première année avant autres effets ?',
                        'explanation' => '3,0 - 0,5 = 2,5 M€ de gain net simplifié sur la première année.',
                        'choices' => [
                            ['choice_text' => '2,0 M€', 'is_correct' => false],
                            ['choice_text' => '3,0 M€', 'is_correct' => false],
                            ['choice_text' => '2,5 M€', 'is_correct' => true],
                            ['choice_text' => '3,5 M€', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Si Alpha finance 30 M€ de l’opération par dette au taux de 6 %, quelle charge d’intérêt annuelle approximative faut-il prévoir, sans amortissement ?',
                        'explanation' => '30 × 6 % = 1,8 M€ d’intérêts annuels, hors frais et autres ajustements.',
                        'choices' => [
                            ['choice_text' => '1,8 M€', 'is_correct' => true],
                            ['choice_text' => '0,6 M€', 'is_correct' => false],
                            ['choice_text' => '1,2 M€', 'is_correct' => false],
                            ['choice_text' => '2,4 M€', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'La direction de Beta affirme que 2 M€ de ses revenus annuels proviennent d’un client qui menace de partir. Que doit faire Alpha dans son analyse ?',
                        'explanation' => 'La concentration et le risque de perte d’un client majeur peuvent modifier les prévisions. Un scénario de perte permet de mesurer la sensibilité du business case.',
                        'choices' => [
                            ['choice_text' => 'Retirer 2 M€ de la dette nette de Beta', 'is_correct' => false],
                            ['choice_text' => 'Garder les prévisions inchangées jusqu’au départ réel du client concerné', 'is_correct' => false],
                            ['choice_text' => 'Baisser l’offre de 2 M€, soit le revenu annuel du client', 'is_correct' => false],
                            ['choice_text' => 'Tester le scénario de perte de ce client et son effet sur la valeur', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Alpha souhaite payer 60 % du prix en cash et 40 % en actions. Pour un prix de 50 M€, quel montant est payé en actions ?',
                        'explanation' => '40 % de 50 M€ = 20 M€. Les 30 M€ restants seraient payés en cash.',
                        'choices' => [
                            ['choice_text' => '20 M€', 'is_correct' => true],
                            ['choice_text' => '10 M€', 'is_correct' => false],
                            ['choice_text' => '30 M€', 'is_correct' => false],
                            ['choice_text' => '40 M€', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Après le closing, Alpha constate que les coûts de migration informatique seront de 4 M€ au lieu de 2 M€. Quel est l’effet immédiat sur le business case ?',
                        'explanation' => 'Le coût passe de 2 à 4 M€ : 2 M€ de plus à payer, donc 2 M€ de valeur nette en moins, toutes choses égales par ailleurs.',
                        'choices' => [
                            ['choice_text' => 'La valeur créée baisse de 2 M€ si les autres hypothèses ne changent pas', 'is_correct' => true],
                            ['choice_text' => 'Le prix payé au vendeur doit être réduit de 2 M€', 'is_correct' => false],
                            ['choice_text' => 'Les synergies prévues augmentent de 2 M€ pour compenser', 'is_correct' => false],
                            ['choice_text' => 'La valeur créée ne change pas, car ce coût est déjà dans le prix payé au vendeur', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Beta possède 5 M€ de trésorerie excédentaire non nécessaire à l’exploitation et 12 M€ de dette. Quelle est sa dette nette ?',
                        'explanation' => 'Dette nette = dette - cash = 12 - 5 = 7 M€.',
                        'choices' => [
                            ['choice_text' => '2,4 M€', 'is_correct' => false],
                            ['choice_text' => '7 M€', 'is_correct' => true],
                            ['choice_text' => '12 M€', 'is_correct' => false],
                            ['choice_text' => '17 M€', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'L’équipe d’Alpha estime que la moitié des synergies sera réalisée la première année. Sur 4 M€ de synergies annuelles à terme, quel montant prévoir simplement pour l’année 1 ?',
                        'explanation' => 'Si 50 % des synergies de 4 M€ sont réalisées la première année, l’effet attendu est de 2 M€ avant coûts et autres effets.',
                        'choices' => [
                            ['choice_text' => '2 M€', 'is_correct' => true],
                            ['choice_text' => '1 M€', 'is_correct' => false],
                            ['choice_text' => '3 M€', 'is_correct' => false],
                            ['choice_text' => '4 M€', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'La banque prête 25 M€ pour financer l’acquisition et impose un covenant sur le levier financier. À quoi sert ce covenant ?',
                        'explanation' => 'Un covenant de levier limite l’endettement de l’emprunteur. Si le seuil est dépassé, la banque peut réagir avant que sa situation ne se dégrade trop.',
                        'choices' => [
                            ['choice_text' => 'À garantir à la banque une part des synergies réalisées', 'is_correct' => false],
                            ['choice_text' => 'À protéger la banque si l’endettement de l’emprunteur augmente trop', 'is_correct' => true],
                            ['choice_text' => 'À obliger l’emprunteur à faire croître son chiffre d’affaires chaque année', 'is_correct' => false],
                            ['choice_text' => 'À fixer le taux d’intérêt du prêt selon le cours de Bourse', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Alpha et Beta ont chacune leur propre équipe achats. La direction estime pouvoir réduire 1 M€ de dépenses sans affecter les volumes. Quel type de synergie est envisagé ?',
                        'explanation' => 'Le regroupement des achats peut permettre d’éliminer des doublons ou d’améliorer les conditions négociées, ce qui constitue une synergie de coûts.',
                        'choices' => [
                            ['choice_text' => 'Synergie de revenus', 'is_correct' => false],
                            ['choice_text' => 'Synergie fiscale', 'is_correct' => false],
                            ['choice_text' => 'Synergie financière', 'is_correct' => false],
                            ['choice_text' => 'Synergie de coûts', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'À quoi sert une analyse de scénarios pour Alpha ?',
                        'explanation' => 'Les scénarios testent la solidité du business case quand la croissance, les marges, les synergies ou les coûts tournent moins bien que prévu.',
                        'choices' => [
                            ['choice_text' => 'À prouver que le prix négocié est le bon', 'is_correct' => false],
                            ['choice_text' => 'À voir comment la valeur réagit si les hypothèses sont moins favorables', 'is_correct' => true],
                            ['choice_text' => 'À remplacer la due diligence par des simulations', 'is_correct' => false],
                            ['choice_text' => 'À choisir le mode de paiement entre cash et actions selon le profil du vendeur', 'is_correct' => false],
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
