<?php

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

        $quizzes = [
            [
                'title' => 'Comprendre la logique des opérations de M&A',
                'description' => 'Quiz d’introduction sur les motivations, les acteurs et les mécanismes de base des opérations de M&A.',
                'duration' => 24,
                'passing_score' => 55,
                'questions' => [
                    [
                        'question' => 'Une entreprise industrielle envisage de racheter un concurrent qui vend à la même clientèle. Quelle motivation correspond le mieux à une logique de M&A horizontale ?',
                        'choices' => [
                            [
                                'choice_text' => 'Accroître les coûts de financement',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Réduire les délais de recrutement',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Gagner des parts de marché et réaliser éventuellement des synergies',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Remplacer les actifs physiques par des actifs numériques',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'Une acquisition horizontale rapproche des entreprises présentes sur le même marché. L\'acheteur peut chercher davantage de parts de marché, des économies d’échelle ou des synergies commerciales.',
                    ],
                    [
                        'question' => 'La direction d\'une PME reçoit une offre de rachat. Avant de discuter le prix, elle demande surtout à comprendre ce que l\'acquéreur veut faire de l\'entreprise. Pourquoi cette question est-elle importante ?',
                        'choices' => [
                            [
                                'choice_text' => 'Parce que le prix n\'a aucun rôle dans une acquisition',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Parce que la stratégie de l\'acquéreur peut influencer les synergies recherchées et les conditions du deal',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Parce que la due diligence devient inutile',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Parce que toutes les acquisitions ont le même objectif',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'La logique industrielle ou financière de l\'acquéreur conditionne les synergies attendues, la structure de l\'opération et parfois sa capacité à justifier un prix plus élevé.',
                    ],
                    [
                        'question' => 'Dans une opération de M&A, qui représente généralement l\'intérêt économique des actionnaires de la société cible lors de la négociation du prix ?',
                        'choices' => [
                            [
                                'choice_text' => 'Le fournisseur principal de la cible',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Les actionnaires et leurs représentants',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Le prestataire informatique de la cible',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Le transporteur des produits',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'Les actionnaires de la cible détiennent la propriété de l\'entreprise. Leurs représentants, notamment le conseil d\'administration selon le cadre applicable, participent à l\'évaluation et à la négociation de l\'offre.',
                    ],
                    [
                        'question' => 'Une acquisition permet à l\'acheteur d\'utiliser un réseau de distribution déjà existant pour vendre ses produits. De quel type de synergie parle-t-on ?',
                        'choices' => [
                            [
                                'choice_text' => 'Synergie commerciale',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Synergie fiscale automatique',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Synergie comptable sans effet économique',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Synergie de change',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'L\'accès à un réseau de distribution peut augmenter les ventes ou réduire les coûts commerciaux. Il s\'agit d\'une synergie commerciale.',
                    ],
                    [
                        'question' => 'Pourquoi un acquéreur demande-t-il généralement des informations financières détaillées sur la cible avant de signer ?',
                        'choices' => [
                            [
                                'choice_text' => 'Pour choisir le logo de la future société',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Pour vérifier les performances, les risques et les hypothèses utilisées pour valoriser la cible',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Pour éviter tout contrat juridique',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Pour déterminer le taux de TVA du pays entier',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'Les informations financières permettent d\'analyser la qualité des résultats, la dette, le cash flow et les engagements. Elles servent aussi à tester les hypothèses de valorisation.',
                    ],
                    [
                        'question' => 'Une entreprise A rachète 100 % des actions de B et prend le contrôle de B. Comment qualifier simplement cette opération ?',
                        'choices' => [
                            [
                                'choice_text' => 'Une acquisition de contrôle',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Une émission obligataire',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Une liquidation volontaire',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Un simple achat de stock',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'L\'achat de la totalité des actions donne, en principe, le contrôle de la société cible. C\'est une acquisition de contrôle.',
                    ],
                    [
                        'question' => 'Lorsqu\'un acquéreur propose 30 € par action alors que le cours de la cible est de 24 €, les 6 € supplémentaires représentent principalement :',
                        'choices' => [
                            [
                                'choice_text' => 'Un dividende obligatoire',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Une prime d\'acquisition',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Un coût de production',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Une provision pour litige',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'La différence entre le prix offert et le cours de référence correspond à une prime d\'acquisition. Elle reflète notamment la valeur du contrôle et les synergies espérées.',
                    ],
                    [
                        'question' => 'Une entreprise réalise 20 M€ de chiffre d\'affaires et la cible réalise 10 M€. Après l\'acquisition, le groupe affiche 31 M€ de chiffre d\'affaires. L\'écart par rapport à la simple addition est de :',
                        'choices' => [
                            [
                                'choice_text' => '1 M€',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => '10 M€',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '21 M€',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '31 M€',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => '20 + 10 = 30 M€. Si le groupe réalise 31 M€, l\'écart est de 1 M€. Il peut provenir, selon le cas, d\'effets commerciaux ou d\'autres ajustements, mais on ne peut pas appeler automatiquement cet écart une synergie sans analyse.',
                    ],
                    [
                        'question' => 'Dans une opération de M&A, une \'deal team\' composée de spécialistes Finance, Juridique et Fiscalité sert surtout à :',
                        'choices' => [
                            [
                                'choice_text' => 'Préparer une campagne publicitaire',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Examiner l\'opération sous plusieurs angles avant la décision',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Remplacer les dirigeants après la signature',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Fixer les salaires de tous les employés',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'Une opération de M&A mobilise plusieurs expertises. Finance, juridique et fiscalité examinent des risques et enjeux différents qui doivent être réunis avant la décision.',
                    ],
                    [
                        'question' => 'Une acquisition est financée exclusivement par la trésorerie disponible de l\'acheteur. Quel mode de financement est utilisé ?',
                        'choices' => [
                            [
                                'choice_text' => 'Financement en cash',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Financement par émission d\'actions nouvelles de la cible uniquement',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Financement par swap de taux',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Financement par crédit fournisseur',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'Lorsque l\'acheteur paie le prix avec les liquidités dont il dispose, on parle simplement de financement en cash ou en numéraire.',
                    ],
                    [
                        'question' => 'Une entreprise achète une autre entreprise principalement pour entrer rapidement sur un nouveau segment de marché. Quel motif stratégique est le plus direct ?',
                        'choices' => [
                            [
                                'choice_text' => 'Diversification ou expansion stratégique',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Réduction automatique des impôts',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Suppression des comptes bancaires',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Réduction mécanique du taux directeur',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'L\'acquisition peut servir à accéder à un nouveau marché ou une nouvelle activité plus rapidement qu\'une croissance organique.',
                    ],
                ],
            ],
            [
                'title' => 'Processus d’acquisition et due diligence',
                'description' => 'Situations pratiques autour des étapes d’un processus d’acquisition et de la due diligence.',
                'duration' => 28,
                'passing_score' => 57,
                'questions' => [
                    [
                        'question' => 'Une cible affirme que son EBITDA a progressé de 20 % grâce à un contrat exceptionnel non reconductible. Que doit faire l\'acheteur ?',
                        'choices' => [
                            [
                                'choice_text' => 'Ignorer l\'information',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Considérer automatiquement la croissance comme durable',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Examiner l\'élément et ajuster éventuellement l\'EBITDA normalisé',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Doubler la valorisation',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'Un élément exceptionnel peut gonfler temporairement l\'EBITDA. L\'acheteur cherche généralement à distinguer la performance récurrente de l\'élément non récurrent.',
                    ],
                    [
                        'question' => 'Lors d\'une due diligence financière, l\'analyste trouve plusieurs créances clients anciennes et très en retard. Pourquoi cela mérite-t-il une attention particulière ?',
                        'choices' => [
                            [
                                'choice_text' => 'Parce que cela peut signaler un risque de non-recouvrement et affecter le cash flow',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Parce que les créances sont toujours des dettes',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Parce que le chiffre d\'affaires doit être supprimé',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Parce que cela prouve automatiquement une fraude',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'Des créances anciennes peuvent être plus difficiles à recouvrer. Le risque porte alors sur la valeur réelle des actifs circulants et sur les flux de trésorerie futurs.',
                    ],
                    [
                        'question' => 'Une due diligence juridique révèle un important litige avec un ancien partenaire commercial. Quelle conséquence est la plus logique pour l\'acheteur ?',
                        'choices' => [
                            [
                                'choice_text' => 'Le risque peut influencer le prix, les garanties ou la décision de poursuivre l\'opération',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Le litige n\'a jamais d\'effet financier',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Le prix doit obligatoirement être doublé',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'La dette de la cible disparaît',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'Un litige important peut créer une sortie de cash ou une incertitude. L\'acquéreur peut demander des protections contractuelles, revoir le prix ou reconsidérer l\'opération.',
                    ],
                    [
                        'question' => 'Pourquoi une data room est-elle utilisée pendant un processus de M&A ?',
                        'choices' => [
                            [
                                'choice_text' => 'Pour centraliser et partager de manière contrôlée les documents de la cible',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Pour remplacer le contrat d\'acquisition',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Pour publier les données au grand public',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Pour fixer automatiquement le prix de l\'action',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'La data room regroupe les informations nécessaires à l\'analyse de la cible, avec des droits d\'accès et un suivi adaptés au processus de transaction.',
                    ],
                    [
                        'question' => 'Une entreprise reçoit trois offres de rachat. L\'une affiche le prix le plus élevé, mais demande beaucoup plus de conditions suspensives. Que faut-il comparer ?',
                        'choices' => [
                            [
                                'choice_text' => 'Uniquement le prix facial',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Le prix et l\'ensemble des conditions, risques et probabilités de réalisation',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Seulement le logo de l\'acheteur',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Uniquement le nombre de salariés',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'Le prix n\'est qu\'un élément de la transaction. Les conditions, le financement, les risques et la certitude d\'exécution influencent aussi l\'intérêt économique réel de l\'offre.',
                    ],
                    [
                        'question' => 'Une société cible a une dette bancaire arrivant à échéance juste après la date prévue de closing. Pourquoi l\'acheteur doit-il la regarder de près ?',
                        'choices' => [
                            [
                                'choice_text' => 'Parce que son refinancement peut créer un besoin de liquidité important',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Parce que toutes les dettes sont annulées au closing',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Parce qu\'une dette à court terme augmente toujours le chiffre d\'affaires',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Parce que la banque devient actionnaire automatiquement',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'Une dette qui arrive à échéance peut exiger un refinancement ou un remboursement. L\'acheteur doit donc mesurer le besoin de financement et le risque de liquidité.',
                    ],
                    [
                        'question' => 'Dans une due diligence commerciale, quel indicateur peut aider à juger la solidité du portefeuille clients ?',
                        'choices' => [
                            [
                                'choice_text' => 'La concentration du chiffre d\'affaires sur quelques clients',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'La couleur des bureaux',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Le nombre de pages du rapport annuel',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Le niveau des stocks de fournitures de bureau',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'Une forte concentration sur quelques clients peut créer un risque commercial. La perte d\'un client majeur peut alors affecter fortement les revenus.',
                    ],
                    [
                        'question' => 'Une entreprise cible dépend d\'un seul fournisseur pour 70 % d\'un composant critique. Quel risque cela met-il particulièrement en évidence ?',
                        'choices' => [
                            [
                                'choice_text' => 'Risque de dépendance fournisseur',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Risque de dilution des actions uniquement',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Risque de duration obligataire',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Risque de change automatique',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'Une forte dépendance à un fournisseur clé peut exposer l\'entreprise à des ruptures d\'approvisionnement, des hausses de prix ou des problèmes de négociation.',
                    ],
                    [
                        'question' => 'Avant une acquisition, l\'acheteur demande la liste des contrats importants et leurs clauses de changement de contrôle. Pourquoi ?',
                        'choices' => [
                            [
                                'choice_text' => 'Certains contrats peuvent être résiliés ou nécessiter un consentement après le changement de contrôle',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Parce que les contrats deviennent gratuits',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Parce que tous les contrats doivent être supprimés',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Parce que cela détermine le cours de change',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'Les clauses de changement de contrôle peuvent imposer une notification, un consentement ou permettre une résiliation. Leur examen fait partie de la due diligence juridique.',
                    ],
                    [
                        'question' => 'Un vendeur fournit un business plan très optimiste. Quel comportement est le plus professionnel pour l\'acheteur ?',
                        'choices' => [
                            [
                                'choice_text' => 'Accepter toutes les hypothèses sans test',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Croiser les hypothèses avec l\'historique, le marché et des scénarios',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Réduire immédiatement le chiffre d\'affaires à zéro',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Ignorer le business plan',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'Un business plan sert de point de départ. Un analyste professionnel teste les hypothèses à partir des données historiques, du marché et de scénarios alternatifs.',
                    ],
                ],
            ],
            [
                'title' => 'Valorisation d’une cible et prix d’acquisition',
                'description' => 'Exercices d’introduction sur Enterprise Value, Equity Value, multiples et prix payé pour une cible.',
                'duration' => 30,
                'passing_score' => 58,
                'questions' => [
                    [
                        'question' => 'Une société cible a une Enterprise Value de 120 M€, une dette financière de 30 M€ et une trésorerie de 10 M€. Quelle est son Equity Value ?',
                        'choices' => [
                            [
                                'choice_text' => '80 M€',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '100 M€',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => '120 M€',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '140 M€',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'Equity Value = Enterprise Value - dette nette. La dette nette est 30 - 10 = 20 M€. Donc Equity Value = 120 - 20 = 100 M€.',
                    ],
                    [
                        'question' => 'Un acquéreur valorise une cible à 8 fois son EBITDA de 15 M€. Quel est le multiple implicite utilisé pour l\'Enterprise Value ?',
                        'choices' => [
                            [
                                'choice_text' => '5x',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '8x',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => '15x',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '120x',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'Le multiple EV/EBITDA est directement de 8x. L\'Enterprise Value correspond ici à 8 × 15 = 120 M€.',
                    ],
                    [
                        'question' => 'Deux sociétés comparables valent respectivement 6x et 8x leur EBITDA. Une cible similaire affiche un EBITDA de 10 M€. Quelle valeur obtenue avec le multiple moyen de 7x ?',
                        'choices' => [
                            [
                                'choice_text' => '17 M€',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '70 M€',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => '80 M€',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '140 M€',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'La moyenne des multiples est (6 + 8) / 2 = 7x. Appliquée à 10 M€ d\'EBITDA, elle donne une Enterprise Value de 70 M€.',
                    ],
                    [
                        'question' => 'Lorsqu\'un acheteur paie 90 M€ d\'Enterprise Value pour une cible avec 15 M€ d\'EBITDA, son multiple EV/EBITDA est de :',
                        'choices' => [
                            [
                                'choice_text' => '4x',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '6x',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => '7x',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '15x',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'Le multiple est 90 / 15 = 6x.',
                    ],
                    [
                        'question' => 'La cible possède 5 M€ de dette nette. Un prix de 50 M€ est convenu pour les actions. Quelle Enterprise Value approximative cela représente-t-il ?',
                        'choices' => [
                            [
                                'choice_text' => '45 M€',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '50 M€',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '55 M€',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => '60 M€',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'Avec une dette nette positive de 5 M€, EV = Equity Value + dette nette, soit 50 + 5 = 55 M€.',
                    ],
                    [
                        'question' => 'Un acquéreur constate qu\'une cible a un EBITDA de 12 M€ mais 4 M€ de coûts exceptionnels non récurrents inclus dans les charges. À hypothèses constantes, quel serait l\'EBITDA ajusté ?',
                        'choices' => [
                            [
                                'choice_text' => '8 M€',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '12 M€',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '16 M€',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => '48 M€',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'Si 4 M€ de charges réellement exceptionnelles peuvent être ajoutées pour obtenir une mesure normalisée, l\'EBITDA ajusté serait de 12 + 4 = 16 M€. L\'ajustement doit toutefois être justifié.',
                    ],
                    [
                        'question' => 'Un acquéreur compare une cible à ses pairs avec un EV/EBITDA de 10x alors que les comparables se situent autour de 7x. Quel point mérite en premier lieu d\'être étudié ?',
                        'choices' => [
                            [
                                'choice_text' => 'Pourquoi la cible mérite une prime de multiple',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Pourquoi l\'EBITDA n\'a aucune importance',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Pourquoi le cours du pétrole est nul',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Pourquoi toutes les transactions doivent être à 10x',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'Un multiple supérieur aux comparables peut être justifié par une meilleure croissance, des marges, un risque plus faible ou des synergies, mais il doit être analysé plutôt qu\'accepté automatiquement.',
                    ],
                    [
                        'question' => 'Une offre de 25 € par action porte sur 4 millions d\'actions. Quel montant correspond au prix d\'achat des titres, avant ajustements éventuels ?',
                        'choices' => [
                            [
                                'choice_text' => '29 M€',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '75 M€',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '100 M€',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => '125 M€',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => '25 € × 4 millions d\'actions = 100 M€. Il s\'agit du montant pour les titres avant prise en compte d\'autres éléments de transaction.',
                    ],
                    [
                        'question' => 'Pourquoi la valorisation d\'une cible peut-elle différer du prix finalement payé ?',
                        'choices' => [
                            [
                                'choice_text' => 'Le prix tient compte aussi de la négociation, des synergies, du financement et des conditions du deal',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Parce que les méthodes de valorisation sont toujours fausses',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Parce que l\'Equity Value est identique à l\'EBITDA',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Parce que les dettes sont sans effet',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'Une valorisation fournit une analyse de valeur. Le prix de transaction résulte aussi de la négociation, du contexte concurrentiel, des synergies et de la structure de l\'opération.',
                    ],
                    [
                        'question' => 'Un analyste applique un multiple de 5x à un EBITDA de 20 M€ et obtient une Enterprise Value de :',
                        'choices' => [
                            [
                                'choice_text' => '4 M€',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '25 M€',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '100 M€',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => '400 M€',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => '5 × 20 M€ = 100 M€.',
                    ],
                    [
                        'question' => 'Une cible a une Enterprise Value de 80 M€ et 15 M€ de trésorerie sans dette financière. Toutes choses égales par ailleurs, quelle Equity Value obtient-on ?',
                        'choices' => [
                            [
                                'choice_text' => '65 M€',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '80 M€',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '95 M€',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => '120 M€',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'La trésorerie réduit la dette nette. Avec zéro dette et 15 M€ de cash, Equity Value = EV + cash = 95 M€.',
                    ],
                ],
            ],
            [
                'title' => 'Synergies et création de valeur',
                'description' => 'Questions pratiques sur les synergies de coûts, de revenus et les limites des estimations.',
                'duration' => 27,
                'passing_score' => 56,
                'questions' => [
                    [
                        'question' => 'Après une acquisition, le nouveau groupe prévoit de regrouper deux services comptables et d\'économiser 1,2 M€ par an. Cette économie correspond à :',
                        'choices' => [
                            [
                                'choice_text' => 'Une synergie de coûts',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Une prime de contrôle',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Une dette nette',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Une variation de change',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'La suppression de coûts redondants grâce au rapprochement constitue une synergie de coûts.',
                    ],
                    [
                        'question' => 'Une cible dispose d\'un produit complémentaire que l\'acheteur peut vendre à sa base de clients. Le gain attendu provient principalement de :',
                        'choices' => [
                            [
                                'choice_text' => 'Synergies de revenus',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Réduction automatique de la dette',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Baisse du besoin de fonds propres',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Hausse mécanique de la duration',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'La possibilité de vendre davantage de produits aux clients existants correspond à une synergie de revenus.',
                    ],
                    [
                        'question' => 'Une acquisition prévoit 5 M€ de synergies annuelles, mais leur réalisation nécessite 2 M€ de coûts de restructuration la première année. Que montre cet exemple ?',
                        'choices' => [
                            [
                                'choice_text' => 'Les synergies sont gratuites dès le premier jour',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Le bénéfice économique doit tenir compte des coûts nécessaires à leur réalisation',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Les coûts de restructuration n\'ont jamais d\'importance',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'La transaction est forcément déficitaire',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'Les synergies peuvent être réelles tout en nécessitant des dépenses initiales. L\'analyse doit considérer le coût de mise en œuvre et le calendrier de réalisation.',
                    ],
                    [
                        'question' => 'Un acquéreur estime qu\'il fera 10 M€ d\'économies grâce au rapprochement, mais aucune mesure concrète n\'est encore définie. Quelle prudence est appropriée ?',
                        'choices' => [
                            [
                                'choice_text' => 'Prendre les 10 M€ comme certains',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Appliquer un taux de confiance et tester la faisabilité des économies',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Doubler les synergies',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Ignorer complètement les coûts',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'Une synergie n\'est pas seulement une estimation sur un PowerPoint. Il faut identifier son origine, son calendrier, les investissements requis et les risques de réalisation.',
                    ],
                    [
                        'question' => 'Une entreprise prévoit de réduire de 3 M€ ses frais de marketing après une fusion, mais cette baisse pourrait aussi réduire les ventes. Que faut-il analyser ?',
                        'choices' => [
                            [
                                'choice_text' => 'Le seul montant des économies',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Le compromis entre économies de coûts et éventuelle perte de revenus',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Uniquement les taux directeurs',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Seulement le nombre d\'employés',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'Une réduction de coût n\'est positive que si elle n\'entraîne pas une destruction de valeur supérieure. Il faut donc analyser l\'effet sur les revenus et la rentabilité.',
                    ],
                    [
                        'question' => 'Deux usines du groupe fusionné peuvent être coordonnées. Quel élément doit être étudié avant d\'annoncer une économie importante ?',
                        'choices' => [
                            [
                                'choice_text' => 'Les capacités, coûts de transfert, investissements et contraintes opérationnelles',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'La couleur des machines',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Le cours d\'une action sans lien',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Le nombre de pages du contrat',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'Une économie de capacité doit être techniquement et financièrement réalisable. Les coûts de transfert, investissements et contraintes opérationnelles peuvent réduire le gain attendu.',
                    ],
                    [
                        'question' => 'Une synergie de 2 M€ par an est attendue mais uniquement à partir de la troisième année. Pourquoi ce calendrier est-il important ?',
                        'choices' => [
                            [
                                'choice_text' => 'Parce que la valeur actuelle de la synergie dépend du moment où elle apparaît',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Parce qu\'une synergie future vaut toujours zéro',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Parce que les années n\'ont aucun effet en Finance',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Parce que le prix de l\'action devient fixe',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'Une économie qui arrive plus tard est moins importante en valeur actuelle qu\'une économie immédiate, toutes choses égales par ailleurs.',
                    ],
                    [
                        'question' => 'Quelle affirmation décrit le mieux le risque de \'double counting\' dans une acquisition ?',
                        'choices' => [
                            [
                                'choice_text' => 'Compter deux fois le même bénéfice attendu dans la valorisation',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Compter deux fois le nombre de salariés',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Utiliser deux banques',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Avoir deux signatures juridiques',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'Le double counting peut surestimer la valeur en intégrant deux fois une même source de création de valeur, par exemple dans le business plan et dans une prime de synergie.',
                    ],
                    [
                        'question' => 'Un acquéreur paie 20 M€ de plus que sa propre estimation autonome de la cible, en espérant capter 30 M€ de synergies. Toutes choses égales par ailleurs, quelle marge théorique reste avant coûts d\'intégration ?',
                        'choices' => [
                            [
                                'choice_text' => '5 M€',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '10 M€',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => '20 M€',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '30 M€',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'Les synergies de 30 M€ dépassent la prime payée de 20 M€ de 10 M€. Cette marge reste théorique tant que les synergies ne sont pas réalisées et que les coûts associés ne sont pas déduits.',
                    ],
                    [
                        'question' => 'Pourquoi les synergies de revenus sont souvent plus difficiles à certifier que certaines synergies de coûts ?',
                        'choices' => [
                            [
                                'choice_text' => 'Parce qu\'elles dépendent davantage du comportement des clients, du marché et de la capacité commerciale',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Parce qu\'elles sont interdites dans tous les pays',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Parce qu\'elles ne peuvent jamais être mesurées',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Parce qu\'elles réduisent toujours les ventes',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'Les synergies de revenus dépendent souvent de réactions du marché et des clients, tandis que certaines économies de coûts peuvent être plus directement identifiables dans les budgets.',
                    ],
                    [
                        'question' => 'Après une acquisition, un indicateur de suivi montre que seulement 40 % des synergies prévues ont été réalisées à mi-année. Quelle réaction est la plus utile ?',
                        'choices' => [
                            [
                                'choice_text' => 'Arrêter immédiatement le projet',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Identifier les écarts, les causes et le calendrier avant de conclure',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Déclarer 100 % des synergies réalisées',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Modifier le chiffre sans analyse',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'Un suivi sérieux compare les objectifs à la réalisation, identifie les causes des écarts et ajuste les plans d\'action.',
                    ],
                ],
            ],
            [
                'title' => 'Financement d’une acquisition',
                'description' => 'Introduction aux principales sources de financement d’une transaction et à leurs effets.',
                'duration' => 26,
                'passing_score' => 57,
                'questions' => [
                    [
                        'question' => 'Un acheteur utilise un prêt bancaire pour financer une partie du prix d\'acquisition. Comment qualifier cette partie du financement ?',
                        'choices' => [
                            [
                                'choice_text' => 'Dette d\'acquisition',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Capital gratuit',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Prime de marché',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Provision comptable',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'Un prêt bancaire utilisé pour financer l\'achat constitue de la dette d\'acquisition et devra être remboursé selon les conditions du financement.',
                    ],
                    [
                        'question' => 'Une entreprise dispose de suffisamment de trésorerie pour payer une acquisition sans emprunter. Quel avantage principal présente ce choix ?',
                        'choices' => [
                            [
                                'choice_text' => 'Éviter de nouvelles charges d\'intérêt liées à la dette',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Garantir automatiquement les synergies',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Supprimer tous les risques de transaction',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Augmenter automatiquement le chiffre d\'affaires de 50 %',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'Financer en cash évite le coût financier d\'un nouvel emprunt, même si cela réduit la trésorerie disponible pour d\'autres besoins.',
                    ],
                    [
                        'question' => 'Une acquisition est financée par émission de nouvelles actions de l\'acheteur. Quelle conséquence immédiate peut se produire pour les actionnaires existants ?',
                        'choices' => [
                            [
                                'choice_text' => 'Une dilution de leur pourcentage de détention',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'La disparition de la dette',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Une hausse garantie du bénéfice par action',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Une baisse automatique du chiffre d\'affaires',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'L\'émission de nouvelles actions augmente le nombre de titres. Les actionnaires existants peuvent donc voir leur pourcentage de détention diminuer.',
                    ],
                    [
                        'question' => 'Une entreprise finance une acquisition avec une combinaison de dette et de fonds propres. Comment appelle-t-on simplement ce montage ?',
                        'choices' => [
                            [
                                'choice_text' => 'Financement mixte',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Financement sans capital',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Financement uniquement monétaire',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Liquidation',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'Une combinaison de dette et de fonds propres constitue un financement mixte ou une structure de financement combinée.',
                    ],
                    [
                        'question' => 'Un prêt de 40 M€ porte un taux annuel de 5 %. Sans tenir compte de l\'amortissement, quelle charge d\'intérêt annuelle approximative représente-t-il ?',
                        'choices' => [
                            [
                                'choice_text' => '0,5 M€',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '1 M€',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '2 M€',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => '5 M€',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => '40 M€ × 5 % = 2 M€ d\'intérêts annuels, avant éventuels frais ou ajustements.',
                    ],
                    [
                        'question' => 'Pourquoi un acheteur doit-il vérifier sa capacité de remboursement avant d\'augmenter fortement la dette pour financer une acquisition ?',
                        'choices' => [
                            [
                                'choice_text' => 'Parce que le service de la dette dépend des flux de trésorerie futurs',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Parce que la dette ne doit jamais être remboursée',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Parce que l\'EBITDA n\'a aucun rapport avec la dette',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Parce qu\'un emprunt réduit toujours les ventes',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'Le remboursement du principal et le paiement des intérêts doivent être compatibles avec les flux de trésorerie. Une structure trop endettée peut accroître le risque financier.',
                    ],
                    [
                        'question' => 'Une acquisition financée par dette permet de conserver la trésorerie de l\'acheteur, mais augmente ses intérêts. Quel compromis décrit le mieux la situation ?',
                        'choices' => [
                            [
                                'choice_text' => 'Liquidité conservée contre davantage de levier et de charges financières',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Aucune contrepartie',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Baisse du prix d\'achat contre plus de salariés',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Augmentation automatique des synergies',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'La dette permet de préserver du cash au closing mais augmente le levier financier et les paiements d\'intérêts futurs.',
                    ],
                    [
                        'question' => 'Un acquéreur paie 60 M€ pour une cible et finance 20 M€ par dette, le reste par cash disponible. Quelle part du prix est financée par dette ?',
                        'choices' => [
                            [
                                'choice_text' => '20 %',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '33,3 %',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => '50 %',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '66,7 %',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => '20 / 60 = 33,3 %. Environ un tiers du prix est financé par dette.',
                    ],
                    [
                        'question' => 'Une banque conditionne un financement d\'acquisition au respect de certains ratios financiers. Ces clauses sont généralement appelées :',
                        'choices' => [
                            [
                                'choice_text' => 'Covenants',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Dividendes',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Coupons',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Spreads de change',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'Les covenants sont des engagements contractuels qui peuvent imposer des limites ou des seuils financiers à l\'emprunteur.',
                    ],
                    [
                        'question' => 'Pourquoi un taux d\'intérêt variable peut-il créer un risque supplémentaire pour un acquéreur fortement endetté ?',
                        'choices' => [
                            [
                                'choice_text' => 'Une hausse des taux peut augmenter le coût du service de la dette',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Une hausse des taux réduit toujours la dette nominale',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Les intérêts deviennent automatiquement nuls',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Le capital de l\'entreprise disparaît',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'Avec une dette à taux variable, une hausse des taux peut augmenter les charges financières et réduire le cash flow disponible.',
                    ],
                    [
                        'question' => 'Une entreprise veut limiter son risque de financement en ne dépendant pas d\'un seul prêteur. Quelle approche peut-elle envisager ?',
                        'choices' => [
                            [
                                'choice_text' => 'Diversifier ses sources de financement',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Supprimer tous les contrats bancaires',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Financer uniquement en monnaie étrangère',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Ne plus établir de budget',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'Diversifier les prêteurs ou les instruments peut réduire la dépendance à une source unique et améliorer la flexibilité financière.',
                    ],
                ],
            ],
            [
                'title' => 'Structure de transaction et prix payé',
                'description' => 'Cas d’initiation sur les structures d’offres, les ajustements de prix et les modalités de paiement.',
                'duration' => 29,
                'passing_score' => 58,
                'questions' => [
                    [
                        'question' => 'Un acheteur propose 70 % du prix en cash et 30 % en actions de l\'acquéreur. Comment décrire cette offre ?',
                        'choices' => [
                            [
                                'choice_text' => 'Une offre entièrement en cash',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Une offre mixte cash et actions',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Une offre uniquement en dette',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Une offre sans contrepartie',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'Le prix est payé avec deux formes de considération : du cash et des actions de l\'acquéreur.',
                    ],
                    [
                        'question' => 'Pourquoi le vendeur peut-il accepter une partie du prix en actions de l\'acquéreur ?',
                        'choices' => [
                            [
                                'choice_text' => 'Pour conserver une exposition à la valeur future du groupe combiné',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Parce que les actions sont toujours sans risque',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Parce qu\'elles garantissent un dividende',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Parce que le cash est interdit',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'Recevoir des actions peut permettre au vendeur de participer à la future création de valeur du groupe, en échange d\'une exposition au risque de marché.',
                    ],
                    [
                        'question' => 'Une clause prévoit que le prix final sera ajusté si la dette nette à la date de closing diffère fortement de celle retenue pour le prix initial. À quoi sert cette clause ?',
                        'choices' => [
                            [
                                'choice_text' => 'À rapprocher le prix final de la situation financière réellement constatée',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'À garantir les synergies',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'À fixer le taux de change mondial',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'À éliminer les coûts d\'intégration',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'Un mécanisme d\'ajustement de prix peut tenir compte de la dette nette, du besoin en fonds de roulement ou d\'autres éléments mesurés à la date de réalisation.',
                    ],
                    [
                        'question' => 'Un vendeur souhaite un prix complémentaire si certains objectifs de chiffre d\'affaires sont atteints après la vente. Quel mécanisme peut correspondre à cette logique ?',
                        'choices' => [
                            [
                                'choice_text' => 'Earn-out',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Coupon fixe',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Duration',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Margin call',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'Un earn-out prévoit un paiement additionnel lié à des objectifs futurs définis dans le contrat.',
                    ],
                    [
                        'question' => 'Quel est le principal intérêt pour l\'acheteur d\'un earn-out bien structuré ?',
                        'choices' => [
                            [
                                'choice_text' => 'Reporter une partie du paiement et lier celle-ci à une performance future',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Supprimer le besoin de due diligence',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Garantir une baisse des ventes',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Éliminer les contrats commerciaux',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'L\'earn-out peut réduire le risque de payer immédiatement la totalité d\'une valeur future incertaine. Sa définition doit toutefois être précise pour éviter les litiges.',
                    ],
                    [
                        'question' => 'Une transaction prévoit un prix de 40 M€ et 3 M€ de frais de transaction. Les frais ne sont pas versés au vendeur. Quel est le montant total déboursé autour de l\'opération, avant autres ajustements ?',
                        'choices' => [
                            [
                                'choice_text' => '37 M€',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '40 M€',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '43 M€',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => '120 M€',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => '40 + 3 = 43 M€. Les frais de transaction s\'ajoutent aux fonds nécessaires pour réaliser l\'opération, même s\'ils ne constituent pas un paiement au vendeur.',
                    ],
                    [
                        'question' => 'Une offre publique est annoncée à 32 € alors que l\'action de la cible cotait 28 € avant l\'annonce. La prime annoncée est d\'environ :',
                        'choices' => [
                            [
                                'choice_text' => '4 € par action, soit 14,3 %',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => '4 €, soit 4 %',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '32 %, soit 28 %',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '60 %, soit 32 %',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'Prime = (32 - 28) / 28 = 14,3 % environ. L\'écart absolu est de 4 € par action.',
                    ],
                    [
                        'question' => 'Pourquoi un acheteur peut-il préférer une opération en actions plutôt qu\'en cash dans certaines situations ?',
                        'choices' => [
                            [
                                'choice_text' => 'Pour préserver sa trésorerie et partager une partie du risque de la transaction avec le vendeur',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Pour supprimer la dilution',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Pour éviter toute variation du cours',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Pour éviter de publier les résultats',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'Le paiement en actions limite le besoin de cash au closing. En contrepartie, il peut diluer les actionnaires existants et expose le vendeur à la variation du titre de l\'acquéreur.',
                    ],
                    [
                        'question' => 'Une entreprise propose un prix élevé à condition que le vendeur garantisse l\'absence de dette cachée. Cette logique concerne principalement :',
                        'choices' => [
                            [
                                'choice_text' => 'La répartition des risques entre vendeur et acheteur',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'La duration d\'une obligation',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Le coût du stock',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Le change au comptant',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'Les garanties et déclarations du vendeur servent notamment à répartir certains risques liés aux informations de la cible et à protéger l\'acheteur en cas de problème couvert par le contrat.',
                    ],
                    [
                        'question' => 'Une cible demande un paiement immédiat plus élevé plutôt qu\'un earn-out incertain. Quel élément économique explique le plus directement cette préférence ?',
                        'choices' => [
                            [
                                'choice_text' => 'La certitude du cash aujourd\'hui a une valeur pour le vendeur',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'L\'earn-out augmente toujours le prix total',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Le cash n\'a aucune valeur temporelle',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Le vendeur ne peut jamais investir',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'Un paiement immédiat est certain sous réserve de la réalisation du deal, tandis qu\'un earn-out dépend d\'événements futurs. Le vendeur peut donc préférer davantage de cash certain.',
                    ],
                    [
                        'question' => 'Deux offres affichent le même prix nominal. La première est payable intégralement au closing, la seconde prévoit 30 % dans trois ans sans intérêt. Laquelle donne au vendeur plus de liquidité immédiate ?',
                        'choices' => [
                            [
                                'choice_text' => 'La première',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'La seconde',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Elles sont identiques',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Aucune',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'Le paiement intégral au closing fournit immédiatement les fonds. Le paiement différé donne moins de liquidité immédiate et peut avoir une valeur économique moindre selon les conditions.',
                    ],
                ],
            ],
            [
                'title' => 'Accrétion, dilution et impact sur les actionnaires',
                'description' => 'Questions d’introduction sur le BPA, la dilution et l’analyse simple de l’impact financier d’une acquisition.',
                'duration' => 27,
                'passing_score' => 60,
                'questions' => [
                    [
                        'question' => 'Après une acquisition, le bénéfice net du groupe passe de 20 M€ à 25 M€, tandis que le nombre d\'actions passe de 10 à 15 millions. Quel est le nouveau BPA ?',
                        'choices' => [
                            [
                                'choice_text' => '1,00 €',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '1,67 €',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => '2,00 €',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '2,50 €',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'BPA = résultat net / nombre d\'actions = 25 / 15 = 1,67 € environ.',
                    ],
                    [
                        'question' => 'Avant une transaction, un groupe réalise 12 M€ de bénéfice pour 6 millions d\'actions. Quel est son BPA initial ?',
                        'choices' => [
                            [
                                'choice_text' => '0,50 €',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '2,00 €',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => '6,00 €',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '72 €',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => '12 / 6 = 2 € par action.',
                    ],
                    [
                        'question' => 'Si, toutes choses égales par ailleurs, une acquisition augmente le BPA du groupe combiné, on parle généralement d\'une opération :',
                        'choices' => [
                            [
                                'choice_text' => 'Accretive',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Dilutive',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Liquidée',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Neutre en dette',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'Une opération accretive augmente le bénéfice par action, tandis qu\'une opération dilutive le réduit, toutes choses égales par ailleurs.',
                    ],
                    [
                        'question' => 'Une acquisition financée par émission importante de nouvelles actions peut réduire le BPA si le bénéfice additionnel généré par la cible est insuffisant. Pourquoi ?',
                        'choices' => [
                            [
                                'choice_text' => 'Le dénominateur du BPA augmente plus vite que le bénéfice',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Les actions nouvelles n\'ont jamais de valeur',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Le chiffre d\'affaires disparaît',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'La dette devient nulle',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'Le BPA = bénéfice / nombre d\'actions. Une émission importante augmente le dénominateur. Si le bénéfice ne progresse pas suffisamment, le BPA peut diminuer.',
                    ],
                    [
                        'question' => 'Une cible apporte 4 M€ de bénéfice annuel. L\'acquéreur émet 2 millions de nouvelles actions pour financer la transaction. L\'effet mécanique sur le BPA avant intérêts, impôts et synergies dépend notamment de :',
                        'choices' => [
                            [
                                'choice_text' => 'La comparaison entre le bénéfice apporté et le nombre d\'actions nouvelles',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'La seule couleur du logo',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'La duration de la dette souveraine',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Le prix du pétrole uniquement',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'Pour apprécier l\'effet sur le BPA, on compare le bénéfice additionnel aux actions nouvelles et on intègre ensuite le coût du financement, les synergies et autres effets pertinents.',
                    ],
                    [
                        'question' => 'Un analyste affirme qu\'une acquisition est forcément bonne parce qu\'elle est accretive dès la première année. Quelle réserve est pertinente ?',
                        'choices' => [
                            [
                                'choice_text' => 'Le BPA n\'est qu\'un indicateur et ne résume pas à lui seul la création de valeur',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Une opération accretive ne peut jamais détruire de valeur',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Le BPA n\'est jamais calculable',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Les synergies ne comptent pas',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'Une opération peut augmenter le BPA à court terme tout en détruisant de la valeur si le prix payé est excessif ou si les risques et coûts futurs sont importants.',
                    ],
                    [
                        'question' => 'Une entreprise a 8 millions d\'actions et réalise 16 M€ de bénéfice. Après l\'opération, elle réalise 18 M€ de bénéfice mais compte 10 millions d\'actions. Le BPA passe de 2,00 € à :',
                        'choices' => [
                            [
                                'choice_text' => '1,20 €',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '1,50 €',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '1,80 €',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => '2,25 €',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'Avant : 16/8 = 2 €. Après : 18/10 = 1,80 €. Le BPA a donc diminué.',
                    ],
                    [
                        'question' => 'Pourquoi les actionnaires de l\'acquéreur surveillent-ils l\'impact d\'une acquisition sur le BPA et le cash flow ?',
                        'choices' => [
                            [
                                'choice_text' => 'Parce que ces éléments donnent des indications sur l\'effet économique et financier de l\'opération',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Parce que le BPA fixe juridiquement le prix du deal',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Parce que le cash flow est identique au chiffre d\'affaires',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Parce qu\'ils remplacent toute analyse stratégique',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'Le BPA et le cash flow aident à analyser l\'effet de la transaction, mais ils doivent être interprétés avec la stratégie, le risque, le prix et les perspectives de long terme.',
                    ],
                    [
                        'question' => 'Une acquisition fait baisser le BPA la première année à cause des coûts d\'intégration, puis l\'entreprise estime que les synergies seront plus visibles à partir de la deuxième année. Comment analyser la situation ?',
                        'choices' => [
                            [
                                'choice_text' => 'Regarder uniquement la première année',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Analyser le calendrier complet des coûts, synergies et flux de trésorerie',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Ignorer les coûts',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Conclure automatiquement à un échec',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'L\'effet d\'une acquisition se déploie dans le temps. Il faut distinguer les coûts initiaux et les bénéfices attendus, sans réduire l\'analyse à une seule période.',
                    ],
                    [
                        'question' => 'Une entreprise a 100 M€ de bénéfice et 50 millions d\'actions avant transaction. Elle prévoit 10 M€ de bénéfice additionnel et émet 5 millions d\'actions. Le BPA pro forma, sans autres effets, est :',
                        'choices' => [
                            [
                                'choice_text' => '1,67 €',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '1,83 €',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '2,00 €',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => '2,20 €',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'Le bénéfice pro forma est de 110 M€ et le nombre d\'actions de 55 millions. BPA = 110 / 55 = 2,00 €.',
                    ],
                ],
            ],
            [
                'title' => 'Intégration après le closing',
                'description' => 'Cas pratiques sur les premières étapes d’intégration et le suivi de la création de valeur après acquisition.',
                'duration' => 26,
                'passing_score' => 58,
                'questions' => [
                    [
                        'question' => 'Après le closing, deux entreprises utilisent des systèmes comptables différents. Pourquoi ce sujet peut-il devenir une priorité d\'intégration ?',
                        'choices' => [
                            [
                                'choice_text' => 'Parce qu\'il peut compliquer le reporting et le suivi financier du groupe',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Parce que les systèmes comptables déterminent le taux de change',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Parce qu\'il supprime les synergies commerciales',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Parce que les comptes deviennent inutiles',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'Des systèmes différents peuvent compliquer le reporting, les rapprochements et la production d\'informations homogènes. L\'intégration doit donc traiter ce point rapidement.',
                    ],
                    [
                        'question' => 'Une acquisition prévoit une équipe d\'intégration chargée de suivre 20 initiatives de synergies. Quel outil simple peut aider à piloter le projet ?',
                        'choices' => [
                            [
                                'choice_text' => 'Un tableau de suivi avec responsable, objectif, échéance et réalisation',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Une liste sans dates ni responsables',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Uniquement le cours de Bourse',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Le logo du groupe',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'Un suivi utile associe chaque initiative à un responsable, une échéance, un montant attendu et un niveau de réalisation.',
                    ],
                    [
                        'question' => 'Une entreprise intégrée compte deux directions commerciales couvrant le même secteur géographique. Quel enjeu d\'intégration apparaît immédiatement ?',
                        'choices' => [
                            [
                                'choice_text' => 'La clarification des rôles et l\'élimination possible des doublons',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'L\'arrêt automatique de toutes les ventes',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'La suppression des clients',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'La hausse automatique des taux',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'Lorsque deux structures se recouvrent, il faut définir les responsabilités et examiner les doublons qui peuvent créer des coûts inutiles ou des tensions.',
                    ],
                    [
                        'question' => 'Pourquoi les responsables d\'intégration suivent-ils souvent les résultats par rapport au business case initial ?',
                        'choices' => [
                            [
                                'choice_text' => 'Pour vérifier si les hypothèses de création de valeur sont réellement en train de se matérialiser',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Pour remplacer la comptabilité',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Pour éviter toute décision',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Parce que le business case devient légalement obligatoire',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'Le business case fournit un objectif. Le comparer à la réalité permet d\'identifier les écarts et de corriger les actions ou les hypothèses.',
                    ],
                    [
                        'question' => 'Après la fusion, une entreprise perd plusieurs clients historiques qui étaient attachés à l\'ancien fournisseur. Quel type de problème cela illustre-t-il ?',
                        'choices' => [
                            [
                                'choice_text' => 'Un risque commercial lié à l\'intégration',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Un risque de duration',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Un risque de couverture de change',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Une synergie de coûts',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'La perte de clients après une acquisition peut provenir d\'un changement de relation commerciale, de service ou de marque. C\'est un risque d\'intégration commerciale.',
                    ],
                    [
                        'question' => 'Une acquisition promet une économie de 4 M€ mais nécessite 1 M€ de dépenses d\'intégration. Quelle économie nette simple reste-t-il avant autres effets ?',
                        'choices' => [
                            [
                                'choice_text' => '1 M€',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '3 M€',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => '4 M€',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '5 M€',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => '4 - 1 = 3 M€. Cette approche simplifiée montre qu\'il faut tenir compte des coûts nécessaires à la réalisation de la synergie.',
                    ],
                    [
                        'question' => 'Pourquoi la communication interne est-elle importante après un rapprochement ?',
                        'choices' => [
                            [
                                'choice_text' => 'Pour expliquer les changements, limiter l\'incertitude et faciliter la coordination des équipes',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Pour fixer les taux d\'intérêt',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Pour calculer l\'EV',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Pour éviter toute mesure de performance',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'Une acquisition crée souvent de l\'incertitude. Une communication claire peut aider les équipes à comprendre les rôles, les priorités et les changements attendus.',
                    ],
                    [
                        'question' => 'Deux entreprises fusionnées utilisent des politiques commerciales différentes pour accorder des remises. Quel risque pratique faut-il surveiller ?',
                        'choices' => [
                            [
                                'choice_text' => 'Une incohérence des prix et une érosion possible des marges',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Une hausse automatique du capital',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Un défaut souverain',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Une hausse de la duration',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'Des règles de remise différentes peuvent créer des comportements incohérents et réduire la marge. L\'intégration commerciale doit harmoniser les politiques pertinentes.',
                    ],
                    [
                        'question' => 'Un indicateur d\'intégration montre que le turnover des employés clés augmente fortement. Pourquoi cela peut-il être préoccupant ?',
                        'choices' => [
                            [
                                'choice_text' => 'La perte de talents peut perturber les clients, les opérations et les synergies attendues',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Parce que le turnover augmente toujours le chiffre d\'affaires',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Parce que les employés ne créent aucune valeur',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Parce que le BPA devient automatiquement nul',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'La perte de collaborateurs clés peut entraîner une perte de savoir-faire, de relations clients ou de capacité d\'exécution, ce qui peut réduire les bénéfices attendus du deal.',
                    ],
                    [
                        'question' => 'Une équipe d\'intégration constate qu\'une synergie prévue nécessite un investissement informatique qui n\'avait pas été budgété. Quelle réaction est la plus professionnelle ?',
                        'choices' => [
                            [
                                'choice_text' => 'Mettre à jour le plan économique et comparer le retour attendu de l\'investissement',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Ignorer le coût',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Déclarer la synergie déjà réalisée',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Arrêter la comptabilité',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'Le coût imprévu doit être intégré à l\'analyse. Il faut comparer l\'investissement supplémentaire aux gains attendus et à leur calendrier.',
                    ],
                ],
            ],
            [
                'title' => 'Risques et erreurs fréquentes en M&A',
                'description' => 'Mise en situation autour des erreurs classiques : surpayer, sous-estimer les risques et négliger l’intégration.',
                'duration' => 28,
                'passing_score' => 61,
                'questions' => [
                    [
                        'question' => 'Un dirigeant affirme : « Nous devons acheter cette société parce que notre concurrent veut aussi l\'acheter. » Quel risque de décision cette phrase illustre-t-elle ?',
                        'choices' => [
                            [
                                'choice_text' => 'La surenchère et la perte de discipline sur le prix',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'La diversification parfaite',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'La baisse du coût du capital automatique',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'La réduction du besoin de due diligence',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'La concurrence entre acquéreurs peut pousser à payer trop cher. Une discipline de prix reste importante même lorsque la pression concurrentielle augmente.',
                    ],
                    [
                        'question' => 'Une entreprise réalise une acquisition dans un secteur qu\'elle connaît très peu. Quelle précaution devient particulièrement importante ?',
                        'choices' => [
                            [
                                'choice_text' => 'Renforcer l\'analyse du marché, des risques et des compétences nécessaires',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Supprimer la due diligence',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Augmenter automatiquement le prix',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Ignorer les concurrents',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'Une faible connaissance du secteur augmente le besoin d\'analyse. L\'acheteur doit comprendre la dynamique concurrentielle, les risques et les compétences requises.',
                    ],
                    [
                        'question' => 'Un analyste base la valorisation d\'une cible uniquement sur un scénario de croissance très élevée. Quel problème peut-on identifier ?',
                        'choices' => [
                            [
                                'choice_text' => 'Une sensibilité excessive à une hypothèse optimiste',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Une absence de chiffre d\'affaires',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Une impossibilité de calculer l\'EBITDA',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Une garantie de création de valeur',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'Une valorisation dépendante d\'hypothèses très optimistes peut être fragile. Les scénarios alternatifs et la sensibilité sont utiles pour mesurer ce risque.',
                    ],
                    [
                        'question' => 'Une cible affiche une forte croissance mais consomme beaucoup de cash pour financer ses stocks. Quelle erreur serait dangereuse pour l\'acheteur ?',
                        'choices' => [
                            [
                                'choice_text' => 'Regarder uniquement la croissance des ventes sans analyser le cash flow',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Analyser le besoin en fonds de roulement',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Examiner les stocks',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Vérifier les créances',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'Une forte croissance peut absorber du cash si les stocks et créances augmentent rapidement. L\'analyse doit donc intégrer le besoin en fonds de roulement et les flux de trésorerie.',
                    ],
                    [
                        'question' => 'Une acquisition semble rentable sur le papier, mais les coûts de départ des employés et de remplacement des systèmes sont très élevés. Que cela rappelle-t-il ?',
                        'choices' => [
                            [
                                'choice_text' => 'Les coûts d\'intégration peuvent réduire la création de valeur',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Les coûts n\'existent jamais en M&A',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Le prix d\'achat est toujours trop faible',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Les synergies de revenus sont garanties',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'Les coûts de restructuration, de systèmes et de transition peuvent retarder ou réduire les bénéfices attendus. Ils doivent être intégrés au business case.',
                    ],
                    [
                        'question' => 'Un acquéreur découvre après le closing qu\'un chiffre de ventes avait été présenté sans distinguer les revenus récurrents et exceptionnels. Quelle bonne pratique aurait réduit ce risque ?',
                        'choices' => [
                            [
                                'choice_text' => 'Normaliser les données et approfondir la due diligence avant le deal',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Payer plus cher',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Ignorer les éléments exceptionnels',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Réduire la période d\'analyse',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'La normalisation des résultats permet de mieux distinguer la performance durable des éléments exceptionnels et de réduire le risque d\'une valorisation fondée sur des chiffres trompeurs.',
                    ],
                    [
                        'question' => 'Une société paie une prime élevée en supposant qu\'une synergie se réalisera immédiatement. Après le closing, la synergie prend trois ans. Quelle conséquence économique peut survenir ?',
                        'choices' => [
                            [
                                'choice_text' => 'La valeur actuelle de la synergie est plus faible que si elle avait été immédiate',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'La synergie devient nécessairement nulle',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Le prix payé baisse automatiquement',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'La dette disparaît',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'Plus une synergie est éloignée dans le temps, plus sa valeur actuelle est réduite, toutes choses égales par ailleurs. Le timing est donc important dans la valorisation.',
                    ],
                    [
                        'question' => 'Pourquoi la concentration de clients peut-elle rendre une cible plus risquée qu\'une entreprise au même chiffre d\'affaires mais avec un portefeuille beaucoup plus diversifié ?',
                        'choices' => [
                            [
                                'choice_text' => 'La perte d\'un client majeur peut avoir un impact proportionnellement plus important',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'La diversification augmente toujours le risque',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Les clients concentrés ne paient jamais',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Le chiffre d\'affaires n\'a aucune importance',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'La dépendance à quelques clients augmente la sensibilité des revenus à un événement affectant l\'un d\'entre eux.',
                    ],
                    [
                        'question' => 'Une équipe M&A ne trouve aucune dette financière, mais découvre d\'importants engagements de location. Quel principe d\'analyse doit-elle retenir ?',
                        'choices' => [
                            [
                                'choice_text' => 'L\'absence de dette bancaire ne signifie pas l\'absence d\'engagements financiers',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Les loyers n\'ont jamais de coût',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Les locations sont toujours des capitaux propres',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Les engagements n\'ont aucun effet',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'Une entreprise peut ne pas avoir de dette bancaire importante tout en supportant des engagements contractuels significatifs. Il faut analyser leur traitement et leur impact économique.',
                    ],
                    [
                        'question' => 'Après une acquisition, le management refuse de suivre les indicateurs convenus dans le business case. Quel risque cela crée-t-il ?',
                        'choices' => [
                            [
                                'choice_text' => 'Un manque de pilotage et une difficulté à mesurer la réalisation des objectifs',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Une hausse automatique des synergies',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Une baisse garantie du taux d\'intérêt',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Une meilleure transparence',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'Sans indicateurs fiables ni responsabilité claire, il devient difficile de vérifier si la transaction produit les résultats prévus et de corriger les écarts.',
                    ],
                ],
            ],
            [
                'title' => 'Mini-cas d’acquisition pour débutants',
                'description' => 'Mini-cas de synthèse combinant prix, financement, synergies et analyse des risques.',
                'duration' => 31,
                'passing_score' => 62,
                'questions' => [
                    [
                        'question' => 'La société Alpha veut racheter Beta pour 75 M€ d\'Equity Value. Beta a 10 M€ de dette nette. Quelle Enterprise Value correspond approximativement à l\'opération ?',
                        'choices' => [
                            [
                                'choice_text' => '65 M€',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '75 M€',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '85 M€',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => '750 M€',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'EV = Equity Value + dette nette = 75 + 10 = 85 M€.',
                    ],
                    [
                        'question' => 'Beta réalise 10 M€ d\'EBITDA. Avec une Enterprise Value de 85 M€, quel est le multiple EV/EBITDA approximatif ?',
                        'choices' => [
                            [
                                'choice_text' => '5,5x',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '8,5x',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => '10x',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '12,5x',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => '85 / 10 = 8,5x.',
                    ],
                    [
                        'question' => 'Alpha prévoit 3 M€ de synergies de coûts par an et 0,5 M€ de coûts d\'intégration la première année. Quel est le gain net simplifié de la première année avant autres effets ?',
                        'choices' => [
                            [
                                'choice_text' => '2,0 M€',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '2,5 M€',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => '3,0 M€',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '3,5 M€',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => '3,0 - 0,5 = 2,5 M€ de gain net simplifié sur la première année.',
                    ],
                    [
                        'question' => 'Si Alpha finance 30 M€ de l\'opération par dette au taux de 6 %, quelle charge d\'intérêt annuelle approximative faut-il prévoir, sans amortissement ?',
                        'choices' => [
                            [
                                'choice_text' => '0,6 M€',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '1,2 M€',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '1,8 M€',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => '2,4 M€',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => '30 × 6 % = 1,8 M€ d\'intérêts annuels, hors frais et autres ajustements.',
                    ],
                    [
                        'question' => 'La direction de Beta affirme que 2 M€ de ses revenus annuels proviennent d\'un client qui menace de partir. Que doit faire Alpha dans son analyse ?',
                        'choices' => [
                            [
                                'choice_text' => 'Tester le scénario de perte de ce client et son effet sur la valeur',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Ajouter 2 M€ au cash',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Ignorer l\'information',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Multiplier le revenu par deux',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'La concentration et le risque de perte d\'un client majeur peuvent modifier les prévisions. Un scénario de perte permet de mesurer la sensibilité du business case.',
                    ],
                    [
                        'question' => 'Alpha souhaite payer 60 % du prix en cash et 40 % en actions. Pour un prix de 50 M€, quel montant est payé en actions ?',
                        'choices' => [
                            [
                                'choice_text' => '10 M€',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '20 M€',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => '30 M€',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '40 M€',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => '40 % de 50 M€ = 20 M€. Les 30 M€ restants seraient payés en cash.',
                    ],
                    [
                        'question' => 'Après le closing, Alpha constate que les coûts de migration informatique seront de 4 M€ au lieu de 2 M€. Quel est l\'effet immédiat sur le business case ?',
                        'choices' => [
                            [
                                'choice_text' => 'La création de valeur attendue est réduite si les autres hypothèses restent inchangées',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'La valeur augmente automatiquement',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Le prix payé diminue automatiquement',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Les synergies deviennent certaines',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'Un coût d\'intégration plus élevé consomme davantage de ressources et réduit, toutes choses égales par ailleurs, la valeur nette attendue de l\'opération.',
                    ],
                    [
                        'question' => 'Beta possède 5 M€ de trésorerie excédentaire non nécessaire à l\'exploitation et 12 M€ de dette. Quelle est sa dette nette ?',
                        'choices' => [
                            [
                                'choice_text' => '7 M€',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => '12 M€',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '17 M€',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '60 M€',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'Dette nette = dette - cash = 12 - 5 = 7 M€.',
                    ],
                    [
                        'question' => 'L\'équipe d\'Alpha estime que la moitié des synergies sera réalisée la première année. Sur 4 M€ de synergies annuelles à terme, quel montant prévoir simplement pour l\'année 1 ?',
                        'choices' => [
                            [
                                'choice_text' => '1 M€',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '2 M€',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => '3 M€',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '4 M€',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'Si 50 % des synergies de 4 M€ sont réalisées la première année, l\'effet attendu est de 2 M€ avant coûts et autres effets.',
                    ],
                    [
                        'question' => 'La banque prête 25 M€ pour financer l\'acquisition et impose un covenant sur le levier financier. Pourquoi ce covenant existe-t-il ?',
                        'choices' => [
                            [
                                'choice_text' => 'Pour limiter le risque de détérioration de la structure financière de l\'emprunteur',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Pour garantir la croissance du chiffre d\'affaires',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Pour supprimer les intérêts',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Pour rendre les synergies obligatoires',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'Un covenant de levier vise à encadrer l\'endettement de l\'emprunteur et à protéger le prêteur contre une dégradation excessive de sa capacité financière.',
                    ],
                    [
                        'question' => 'Alpha et Beta ont chacune leur propre équipe achats. La direction estime pouvoir réduire 1 M€ de dépenses sans affecter les volumes. Quel type de synergie est envisagé ?',
                        'choices' => [
                            [
                                'choice_text' => 'Synergie de coûts',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Synergie de change',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Synergie de taux',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Synergie de duration',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'Le regroupement des achats peut permettre d\'éliminer des doublons ou d\'améliorer les conditions négociées, ce qui constitue une synergie de coûts.',
                    ],
                    [
                        'question' => 'Une fois tous les risques identifiés, quelle est la meilleure utilisation d\'une analyse de scénarios dans ce mini-cas ?',
                        'choices' => [
                            [
                                'choice_text' => 'Tester comment la valeur du deal réagit à des hypothèses moins favorables',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Garantir que le prix sera correct',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Éviter la due diligence',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Remplacer le contrat d\'acquisition',
                                'is_correct' => false,
                            ],
                        ],
                        'explanation' => 'Les scénarios permettent d\'examiner la robustesse du business case lorsque la croissance, les marges, les synergies ou les coûts évoluent dans une direction moins favorable.',
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
                    'duration' => $quizData['duration'],
                    'passing_score' => $quizData['passing_score'],
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

                $choices = $questionData['choices'];
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
