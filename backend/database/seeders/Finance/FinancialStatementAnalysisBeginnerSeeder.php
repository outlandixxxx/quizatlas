<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Subject;
use App\Models\Quiz;
use App\Models\Question;
use App\Models\Choice;

class FinancialStatementAnalysisBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'financial-statement-analysis')->firstOrFail();

        $quizzes = [
            [
                'title' => 'Introduction à l’analyse des états financiers',
                'questions' => [
                    [
                        'question' => 'Quel est l’objectif principal de l’analyse des états financiers ?',
                        'answers' => [
                            ['answer' => 'Évaluer la situation financière et les performances d’une entreprise', 'iscorrect' => true],
                            ['answer' => 'Déterminer uniquement le prix des actions', 'iscorrect' => false],
                            ['answer' => 'Calculer uniquement les salaires', 'iscorrect' => false],
                            ['answer' => 'Préparer les campagnes publicitaires', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quels sont les principaux utilisateurs des états financiers ?',
                        'answers' => [
                            ['answer' => 'Les investisseurs, les créanciers, les dirigeants et d’autres parties prenantes', 'iscorrect' => true],
                            ['answer' => 'Uniquement les clients', 'iscorrect' => false],
                            ['answer' => 'Uniquement les employés', 'iscorrect' => false],
                            ['answer' => 'Uniquement les fournisseurs', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Que permet principalement l’analyse financière ?',
                        'answers' => [
                            ['answer' => 'Comprendre les forces, faiblesses, risques et performances financières d’une entreprise', 'iscorrect' => true],
                            ['answer' => 'Garantir les bénéfices futurs', 'iscorrect' => false],
                            ['answer' => 'Éliminer tous les risques commerciaux', 'iscorrect' => false],
                            ['answer' => 'Fixer automatiquement les prix des produits', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi compare-t-on les états financiers sur plusieurs années ?',
                        'answers' => [
                            ['answer' => 'Pour identifier les tendances et l’évolution de la situation financière', 'iscorrect' => true],
                            ['answer' => 'Pour supprimer les données anciennes', 'iscorrect' => false],
                            ['answer' => 'Pour garantir une croissance future', 'iscorrect' => false],
                            ['answer' => 'Pour éviter tout calcul financier', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce qu’un état financier ?',
                        'answers' => [
                            ['answer' => 'Un document présentant des informations financières structurées sur une entreprise', 'iscorrect' => true],
                            ['answer' => 'Un contrat commercial', 'iscorrect' => false],
                            ['answer' => 'Un plan marketing', 'iscorrect' => false],
                            ['answer' => 'Une facture client', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les états financiers sont-ils importants pour les investisseurs ?',
                        'answers' => [
                            ['answer' => 'Ils fournissent des informations utiles pour évaluer la performance et la situation financière', 'iscorrect' => true],
                            ['answer' => 'Ils garantissent le rendement des actions', 'iscorrect' => false],
                            ['answer' => 'Ils déterminent toujours le cours futur', 'iscorrect' => false],
                            ['answer' => 'Ils suppriment le risque d’investissement', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Que signifie analyser une entreprise dans le temps ?',
                        'answers' => [
                            ['answer' => 'Comparer ses résultats et indicateurs financiers entre différentes périodes', 'iscorrect' => true],
                            ['answer' => 'Ignorer ses résultats historiques', 'iscorrect' => false],
                            ['answer' => 'Utiliser uniquement les résultats du dernier mois', 'iscorrect' => false],
                            ['answer' => 'Comparer uniquement ses employés', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle information peut révéler une baisse continue du chiffre d’affaires ?',
                        'answers' => [
                            ['answer' => 'Une possible détérioration de l’activité commerciale', 'iscorrect' => true],
                            ['answer' => 'Une rentabilité nécessairement plus élevée', 'iscorrect' => false],
                            ['answer' => 'Une augmentation automatique des liquidités', 'iscorrect' => false],
                            ['answer' => 'Une diminution certaine des dettes', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi faut-il interpréter les chiffres financiers dans leur contexte ?',
                        'answers' => [
                            ['answer' => 'Un même chiffre peut avoir une signification différente selon le secteur et la situation de l’entreprise', 'iscorrect' => true],
                            ['answer' => 'Les chiffres financiers n’ont jamais de signification', 'iscorrect' => false],
                            ['answer' => 'Toutes les entreprises fonctionnent de la même manière', 'iscorrect' => false],
                            ['answer' => 'Le secteur n’a aucune influence sur les résultats', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle est une limite importante de l’analyse des états financiers ?',
                        'answers' => [
                            ['answer' => 'Elle repose en partie sur des données historiques qui ne garantissent pas les résultats futurs', 'iscorrect' => true],
                            ['answer' => 'Elle ne contient jamais aucune information utile', 'iscorrect' => false],
                            ['answer' => 'Elle garantit toujours les prévisions', 'iscorrect' => false],
                            ['answer' => 'Elle élimine tous les risques financiers', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Bilan et structure financière',
                'questions' => [
                    [
                        'question' => 'Que présente principalement le bilan ?',
                        'answers' => [
                            ['answer' => 'Les actifs, les passifs et les capitaux propres à une date donnée', 'iscorrect' => true],
                            ['answer' => 'Uniquement les ventes annuelles', 'iscorrect' => false],
                            ['answer' => 'Uniquement les flux de trésorerie', 'iscorrect' => false],
                            ['answer' => 'Uniquement les bénéfices futurs', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce qu’un actif ?',
                        'answers' => [
                            ['answer' => 'Une ressource contrôlée par l’entreprise pouvant procurer des avantages économiques futurs', 'iscorrect' => true],
                            ['answer' => 'Une dette envers une banque', 'iscorrect' => false],
                            ['answer' => 'Une dépense nécessairement perdue', 'iscorrect' => false],
                            ['answer' => 'Une obligation envers les actionnaires', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce qu’un passif ?',
                        'answers' => [
                            ['answer' => 'Une obligation actuelle de l’entreprise résultant d’événements passés', 'iscorrect' => true],
                            ['answer' => 'Un bien détenu par l’entreprise', 'iscorrect' => false],
                            ['answer' => 'Un revenu futur garanti', 'iscorrect' => false],
                            ['answer' => 'Une vente réalisée', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Que représentent les capitaux propres ?',
                        'answers' => [
                            ['answer' => 'La part résiduelle des actifs après déduction des passifs', 'iscorrect' => true],
                            ['answer' => 'Uniquement les dettes bancaires', 'iscorrect' => false],
                            ['answer' => 'Les ventes de l’entreprise', 'iscorrect' => false],
                            ['answer' => 'Les dépenses opérationnelles', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle relation fondamentale doit respecter le bilan ?',
                        'answers' => [
                            ['answer' => 'Actifs = Passifs + Capitaux propres', 'iscorrect' => true],
                            ['answer' => 'Actifs = Revenus - Dépenses', 'iscorrect' => false],
                            ['answer' => 'Passifs = Actifs + Capitaux propres', 'iscorrect' => false],
                            ['answer' => 'Capitaux propres = Actifs + Passifs', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Lequel est généralement un actif courant ?',
                        'answers' => [
                            ['answer' => 'Les créances clients', 'iscorrect' => true],
                            ['answer' => 'Un emprunt à long terme', 'iscorrect' => false],
                            ['answer' => 'Le capital social', 'iscorrect' => false],
                            ['answer' => 'Une dette obligataire à long terme', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Lequel est généralement un passif courant ?',
                        'answers' => [
                            ['answer' => 'Les dettes fournisseurs', 'iscorrect' => true],
                            ['answer' => 'Un terrain', 'iscorrect' => false],
                            ['answer' => 'Le capital social', 'iscorrect' => false],
                            ['answer' => 'Une immobilisation', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Que peut indiquer une forte proportion de dettes dans le bilan ?',
                        'answers' => [
                            ['answer' => 'Une dépendance plus importante au financement par endettement', 'iscorrect' => true],
                            ['answer' => 'Une absence totale de risque', 'iscorrect' => false],
                            ['answer' => 'Une rentabilité automatiquement élevée', 'iscorrect' => false],
                            ['answer' => 'Une trésorerie toujours abondante', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi analyse-t-on la structure des actifs ?',
                        'answers' => [
                            ['answer' => 'Pour comprendre comment les ressources de l’entreprise sont investies', 'iscorrect' => true],
                            ['answer' => 'Pour connaître uniquement les salaires', 'iscorrect' => false],
                            ['answer' => 'Pour déterminer automatiquement le cours de l’action', 'iscorrect' => false],
                            ['answer' => 'Pour supprimer les dettes', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Que peut signifier une augmentation importante des créances clients ?',
                        'answers' => [
                            ['answer' => 'Elle peut signaler une hausse des ventes à crédit ou des difficultés de recouvrement', 'iscorrect' => true],
                            ['answer' => 'Elle signifie toujours une hausse des bénéfices', 'iscorrect' => false],
                            ['answer' => 'Elle signifie que toutes les ventes sont encaissées', 'iscorrect' => false],
                            ['answer' => 'Elle élimine les besoins de trésorerie', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Compte de résultat et rentabilité',
                'questions' => [
                    [
                        'question' => 'Que présente principalement le compte de résultat ?',
                        'answers' => [
                            ['answer' => 'Les produits, les charges et le résultat d’une période', 'iscorrect' => true],
                            ['answer' => 'Uniquement les actifs', 'iscorrect' => false],
                            ['answer' => 'Uniquement les dettes', 'iscorrect' => false],
                            ['answer' => 'Uniquement les mouvements bancaires', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce que le chiffre d’affaires ?',
                        'answers' => [
                            ['answer' => 'Le montant des ventes réalisées par l’entreprise sur une période', 'iscorrect' => true],
                            ['answer' => 'Le bénéfice net', 'iscorrect' => false],
                            ['answer' => 'Le total des dettes', 'iscorrect' => false],
                            ['answer' => 'La trésorerie disponible', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Comment obtient-on généralement le résultat net ?',
                        'answers' => [
                            ['answer' => 'En tenant compte des produits et des charges de la période, y compris les éléments appropriés', 'iscorrect' => true],
                            ['answer' => 'En additionnant uniquement les actifs', 'iscorrect' => false],
                            ['answer' => 'En soustrayant les actifs des capitaux propres', 'iscorrect' => false],
                            ['answer' => 'En additionnant toutes les dettes', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Que mesure la marge bénéficiaire ?',
                        'answers' => [
                            ['answer' => 'La part du chiffre d’affaires conservée sous forme de bénéfice selon la marge considérée', 'iscorrect' => true],
                            ['answer' => 'Le montant total des actifs', 'iscorrect' => false],
                            ['answer' => 'La valeur des stocks uniquement', 'iscorrect' => false],
                            ['answer' => 'Le nombre d’employés', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce qu’une charge d’exploitation ?',
                        'answers' => [
                            ['answer' => 'Une dépense liée au fonctionnement courant de l’entreprise', 'iscorrect' => true],
                            ['answer' => 'Un apport en capital', 'iscorrect' => false],
                            ['answer' => 'Une créance client', 'iscorrect' => false],
                            ['answer' => 'Un actif financier nécessairement', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une hausse du chiffre d’affaires ne garantit-elle pas une hausse du bénéfice ?',
                        'answers' => [
                            ['answer' => 'Les charges peuvent augmenter plus rapidement que les ventes', 'iscorrect' => true],
                            ['answer' => 'Le chiffre d’affaires est toujours égal au bénéfice', 'iscorrect' => false],
                            ['answer' => 'Les charges n’ont aucune influence sur le bénéfice', 'iscorrect' => false],
                            ['answer' => 'Les ventes ne sont jamais liées aux résultats', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce que le résultat d’exploitation ?',
                        'answers' => [
                            ['answer' => 'Un résultat lié principalement à l’activité opérationnelle de l’entreprise', 'iscorrect' => true],
                            ['answer' => 'La trésorerie finale', 'iscorrect' => false],
                            ['answer' => 'Le total des capitaux propres', 'iscorrect' => false],
                            ['answer' => 'Le montant des dettes fournisseurs', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Que peut indiquer une baisse de la marge opérationnelle ?',
                        'answers' => [
                            ['answer' => 'Une détérioration de la rentabilité de l’activité opérationnelle', 'iscorrect' => true],
                            ['answer' => 'Une diminution automatique des dettes', 'iscorrect' => false],
                            ['answer' => 'Une augmentation certaine de la trésorerie', 'iscorrect' => false],
                            ['answer' => 'Une disparition des charges', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi compare-t-on les marges entre entreprises du même secteur ?',
                        'answers' => [
                            ['answer' => 'Pour mieux apprécier leur efficacité et leur rentabilité dans un contexte comparable', 'iscorrect' => true],
                            ['answer' => 'Parce que toutes les entreprises ont exactement les mêmes coûts', 'iscorrect' => false],
                            ['answer' => 'Pour garantir le cours de leurs actions', 'iscorrect' => false],
                            ['answer' => 'Pour supprimer leurs différences comptables', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise réalise 100 000 € de ventes et 80 000 € de charges. Quel est son résultat avant autres éléments pris en compte ?',
                        'answers' => [
                            ['answer' => '20 000 €', 'iscorrect' => true],
                            ['answer' => '180 000 €', 'iscorrect' => false],
                            ['answer' => '80 000 €', 'iscorrect' => false],
                            ['answer' => '100 000 €', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Tableau des flux de trésorerie',
                'questions' => [
                    [
                        'question' => 'Quel est l’objectif principal du tableau des flux de trésorerie ?',
                        'answers' => [
                            ['answer' => 'Présenter les entrées et sorties de trésorerie sur une période', 'iscorrect' => true],
                            ['answer' => 'Présenter uniquement les actifs immobilisés', 'iscorrect' => false],
                            ['answer' => 'Calculer uniquement le chiffre d’affaires', 'iscorrect' => false],
                            ['answer' => 'Présenter uniquement les capitaux propres', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelles sont les grandes catégories de flux de trésorerie ?',
                        'answers' => [
                            ['answer' => 'Flux opérationnels, d’investissement et de financement', 'iscorrect' => true],
                            ['answer' => 'Actifs, stocks et capitaux propres', 'iscorrect' => false],
                            ['answer' => 'Ventes, marketing et salaires', 'iscorrect' => false],
                            ['answer' => 'Clients, fournisseurs et employés uniquement', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Que représentent les flux de trésorerie opérationnels ?',
                        'answers' => [
                            ['answer' => 'Les flux liés principalement aux activités courantes de l’entreprise', 'iscorrect' => true],
                            ['answer' => 'Uniquement les achats d’immobilisations', 'iscorrect' => false],
                            ['answer' => 'Uniquement les émissions d’actions', 'iscorrect' => false],
                            ['answer' => 'Uniquement les remboursements d’emprunts', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel exemple correspond à un flux d’investissement ?',
                        'answers' => [
                            ['answer' => 'L’achat d’une immobilisation', 'iscorrect' => true],
                            ['answer' => 'Le paiement d’un fournisseur courant', 'iscorrect' => false],
                            ['answer' => 'La réception d’un paiement client', 'iscorrect' => false],
                            ['answer' => 'Le paiement d’un salaire courant', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel exemple correspond à un flux de financement ?',
                        'answers' => [
                            ['answer' => 'L’émission d’un emprunt', 'iscorrect' => true],
                            ['answer' => 'L’achat de marchandises', 'iscorrect' => false],
                            ['answer' => 'L’encaissement d’une vente', 'iscorrect' => false],
                            ['answer' => 'Le paiement d’une facture d’électricité', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi le bénéfice net et la trésorerie peuvent-ils être différents ?',
                        'answers' => [
                            ['answer' => 'Parce que certains produits et charges comptables ne correspondent pas immédiatement à des mouvements de trésorerie', 'iscorrect' => true],
                            ['answer' => 'Parce que le bénéfice est toujours égal à zéro', 'iscorrect' => false],
                            ['answer' => 'Parce que la trésorerie ne dépend jamais des opérations', 'iscorrect' => false],
                            ['answer' => 'Parce que les ventes ne sont jamais comptabilisées', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce qu’un flux de trésorerie positif ?',
                        'answers' => [
                            ['answer' => 'Une entrée nette de trésorerie sur la période considérée', 'iscorrect' => true],
                            ['answer' => 'Une augmentation obligatoire des dettes', 'iscorrect' => false],
                            ['answer' => 'Une baisse obligatoire du chiffre d’affaires', 'iscorrect' => false],
                            ['answer' => 'Une perte comptable certaine', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les flux opérationnels sont-ils importants pour une entreprise ?',
                        'answers' => [
                            ['answer' => 'Ils montrent dans quelle mesure l’activité courante génère ou consomme de la trésorerie', 'iscorrect' => true],
                            ['answer' => 'Ils indiquent uniquement la valeur des bâtiments', 'iscorrect' => false],
                            ['answer' => 'Ils remplacent toujours le bilan', 'iscorrect' => false],
                            ['answer' => 'Ils garantissent les bénéfices futurs', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise reçoit 50 000 € de ses clients et paie 30 000 € à ses fournisseurs. Quel est le flux net simplifié ?',
                        'answers' => [
                            ['answer' => '20 000 € d’entrée nette de trésorerie', 'iscorrect' => true],
                            ['answer' => '80 000 € d’entrée nette', 'iscorrect' => false],
                            ['answer' => '30 000 € de sortie nette', 'iscorrect' => false],
                            ['answer' => '50 000 € de sortie nette', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une entreprise rentable peut-elle connaître des difficultés de trésorerie ?',
                        'answers' => [
                            ['answer' => 'Ses bénéfices peuvent être immobilisés dans les créances, les stocks ou d’autres besoins de financement', 'iscorrect' => true],
                            ['answer' => 'Une entreprise rentable n’a jamais besoin de trésorerie', 'iscorrect' => false],
                            ['answer' => 'Les bénéfices sont toujours encaissés immédiatement', 'iscorrect' => false],
                            ['answer' => 'Les stocks génèrent toujours des entrées de trésorerie', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Analyse de la liquidité',
                'questions' => [
                    [
                        'question' => 'Que mesure principalement la liquidité ?',
                        'answers' => [
                            ['answer' => 'La capacité de l’entreprise à faire face à ses obligations à court terme', 'iscorrect' => true],
                            ['answer' => 'La rentabilité à long terme uniquement', 'iscorrect' => false],
                            ['answer' => 'La valeur de la marque', 'iscorrect' => false],
                            ['answer' => 'Le nombre d’employés', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Que compare généralement le ratio de liquidité générale ?',
                        'answers' => [
                            ['answer' => 'Les actifs courants aux passifs courants', 'iscorrect' => true],
                            ['answer' => 'Les ventes aux immobilisations', 'iscorrect' => false],
                            ['answer' => 'Les bénéfices aux capitaux propres uniquement', 'iscorrect' => false],
                            ['answer' => 'Les stocks aux ventes uniquement', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Une liquidité générale supérieure à 1 signifie généralement que :',
                        'answers' => [
                            ['answer' => 'Les actifs courants sont supérieurs aux passifs courants', 'iscorrect' => true],
                            ['answer' => 'L’entreprise n’a aucune dette', 'iscorrect' => false],
                            ['answer' => 'L’entreprise est nécessairement très rentable', 'iscorrect' => false],
                            ['answer' => 'Les actifs immobilisés sont supérieurs aux capitaux propres', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce que le ratio de liquidité réduite cherche notamment à exclure ?',
                        'answers' => [
                            ['answer' => 'Les stocks, car ils peuvent être moins rapidement convertibles en trésorerie', 'iscorrect' => true],
                            ['answer' => 'La trésorerie', 'iscorrect' => false],
                            ['answer' => 'Les créances clients', 'iscorrect' => false],
                            ['answer' => 'Les passifs courants', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les stocks peuvent-ils poser un problème de liquidité ?',
                        'answers' => [
                            ['answer' => 'Ils peuvent nécessiter du temps pour être vendus et encaissés', 'iscorrect' => true],
                            ['answer' => 'Ils sont toujours immédiatement convertibles en espèces', 'iscorrect' => false],
                            ['answer' => 'Ils sont toujours sans valeur', 'iscorrect' => false],
                            ['answer' => 'Ils représentent uniquement des dettes', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise possède 120 000 € d’actifs courants et 80 000 € de passifs courants. Quel est son ratio de liquidité générale ?',
                        'answers' => [
                            ['answer' => '1,5', 'iscorrect' => true],
                            ['answer' => '0,67', 'iscorrect' => false],
                            ['answer' => '2,0', 'iscorrect' => false],
                            ['answer' => '80', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une liquidité très faible peut-elle être préoccupante ?',
                        'answers' => [
                            ['answer' => 'L’entreprise peut avoir des difficultés à régler ses obligations à court terme', 'iscorrect' => true],
                            ['answer' => 'Elle garantit toujours une forte rentabilité', 'iscorrect' => false],
                            ['answer' => 'Elle signifie que l’entreprise n’a aucun actif', 'iscorrect' => false],
                            ['answer' => 'Elle implique automatiquement une forte croissance', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une liquidité élevée n’est-elle pas toujours synonyme d’efficacité ?',
                        'answers' => [
                            ['answer' => 'Des ressources trop importantes peuvent rester peu productives', 'iscorrect' => true],
                            ['answer' => 'Une liquidité élevée signifie toujours une perte', 'iscorrect' => false],
                            ['answer' => 'Les liquidités sont toujours des dettes', 'iscorrect' => false],
                            ['answer' => 'Une entreprise liquide ne peut jamais investir', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel élément peut améliorer directement la liquidité ?',
                        'answers' => [
                            ['answer' => 'Une augmentation des encaissements ou une réduction des sorties de trésorerie', 'iscorrect' => true],
                            ['answer' => 'Une augmentation automatique des stocks', 'iscorrect' => false],
                            ['answer' => 'Une hausse des créances non encaissées', 'iscorrect' => false],
                            ['answer' => 'Une augmentation des dépenses sans financement', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi faut-il comparer les ratios de liquidité dans le temps ?',
                        'answers' => [
                            ['answer' => 'Pour identifier une amélioration ou une détérioration de la capacité à faire face aux obligations courantes', 'iscorrect' => true],
                            ['answer' => 'Pour supprimer les variations saisonnières automatiquement', 'iscorrect' => false],
                            ['answer' => 'Pour garantir la solvabilité future', 'iscorrect' => false],
                            ['answer' => 'Pour déterminer le chiffre d’affaires futur avec certitude', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Analyse de l’endettement et de la solvabilité',
                'questions' => [
                    [
                        'question' => 'Que mesure principalement la solvabilité ?',
                        'answers' => [
                            ['answer' => 'La capacité d’une entreprise à faire face à ses obligations financières sur le long terme', 'iscorrect' => true],
                            ['answer' => 'Uniquement sa capacité à vendre ses produits', 'iscorrect' => false],
                            ['answer' => 'Uniquement ses stocks', 'iscorrect' => false],
                            ['answer' => 'Uniquement sa trésorerie quotidienne', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce que le ratio d’endettement ?',
                        'answers' => [
                            ['answer' => 'Un indicateur permettant d’évaluer l’importance du financement par dette', 'iscorrect' => true],
                            ['answer' => 'Un indicateur des ventes quotidiennes', 'iscorrect' => false],
                            ['answer' => 'Un indicateur du nombre d’employés', 'iscorrect' => false],
                            ['answer' => 'Un indicateur des stocks uniquement', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un niveau élevé d’endettement peut-il augmenter le risque financier ?',
                        'answers' => [
                            ['answer' => 'L’entreprise doit supporter des obligations financières qui peuvent devenir difficiles à honorer', 'iscorrect' => true],
                            ['answer' => 'La dette garantit toujours des bénéfices élevés', 'iscorrect' => false],
                            ['answer' => 'La dette élimine les charges financières', 'iscorrect' => false],
                            ['answer' => 'La dette réduit toujours les risques', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Que mesure généralement le ratio de couverture des intérêts ?',
                        'answers' => [
                            ['answer' => 'La capacité du résultat d’exploitation à couvrir les charges d’intérêts', 'iscorrect' => true],
                            ['answer' => 'La capacité à vendre les stocks', 'iscorrect' => false],
                            ['answer' => 'Le niveau de trésorerie uniquement', 'iscorrect' => false],
                            ['answer' => 'Le montant des dividendes', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise ayant beaucoup de dettes peut-elle malgré tout être solvable ?',
                        'answers' => [
                            ['answer' => 'Oui, si ses flux et ressources lui permettent de respecter ses obligations financières', 'iscorrect' => true],
                            ['answer' => 'Non, une dette implique toujours l’insolvabilité', 'iscorrect' => false],
                            ['answer' => 'Oui, mais uniquement si elle n’a aucun actif', 'iscorrect' => false],
                            ['answer' => 'Non, la dette n’est jamais compatible avec la solvabilité', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est un avantage possible du financement par dette ?',
                        'answers' => [
                            ['answer' => 'Il permet de financer des investissements sans diluer directement la propriété des actionnaires', 'iscorrect' => true],
                            ['answer' => 'Il élimine tous les risques', 'iscorrect' => false],
                            ['answer' => 'Il garantit un bénéfice', 'iscorrect' => false],
                            ['answer' => 'Il n’entraîne jamais de coût', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est un risque du financement excessif par dette ?',
                        'answers' => [
                            ['answer' => 'Une augmentation du risque de défaut et des charges financières', 'iscorrect' => true],
                            ['answer' => 'Une disparition automatique des intérêts', 'iscorrect' => false],
                            ['answer' => 'Une réduction garantie des obligations', 'iscorrect' => false],
                            ['answer' => 'Une hausse certaine du bénéfice net', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi compare-t-on l’endettement entre entreprises du même secteur ?',
                        'answers' => [
                            ['answer' => 'Les besoins de financement et les niveaux d’endettement peuvent varier selon le modèle économique', 'iscorrect' => true],
                            ['answer' => 'Toutes les entreprises ont exactement les mêmes structures financières', 'iscorrect' => false],
                            ['answer' => 'Les secteurs n’ont aucune influence', 'iscorrect' => false],
                            ['answer' => 'Pour garantir les mêmes résultats', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise possède 500 000 € de dettes et 1 000 000 € d’actifs. Quel est le ratio dettes/actifs simplifié ?',
                        'answers' => [
                            ['answer' => '50 %', 'iscorrect' => true],
                            ['answer' => '20 %', 'iscorrect' => false],
                            ['answer' => '100 %', 'iscorrect' => false],
                            ['answer' => '200 %', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Que peut indiquer une baisse régulière du ratio d’endettement ?',
                        'answers' => [
                            ['answer' => 'Une diminution relative du recours à la dette, selon la composition des autres éléments financiers', 'iscorrect' => true],
                            ['answer' => 'Une augmentation automatique des pertes', 'iscorrect' => false],
                            ['answer' => 'Une disparition obligatoire des actifs', 'iscorrect' => false],
                            ['answer' => 'Une hausse certaine du chiffre d’affaires', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Ratios de rentabilité et efficacité',
                'questions' => [
                    [
                        'question' => 'Que mesure le ROA ?',
                        'answers' => [
                            ['answer' => 'La rentabilité générée par les actifs de l’entreprise', 'iscorrect' => true],
                            ['answer' => 'Le niveau des dettes fournisseurs', 'iscorrect' => false],
                            ['answer' => 'La croissance du chiffre d’affaires uniquement', 'iscorrect' => false],
                            ['answer' => 'Le nombre d’employés', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Que mesure le ROE ?',
                        'answers' => [
                            ['answer' => 'La rentabilité des capitaux propres', 'iscorrect' => true],
                            ['answer' => 'La liquidité des stocks', 'iscorrect' => false],
                            ['answer' => 'Le montant des ventes', 'iscorrect' => false],
                            ['answer' => 'Le total des dettes fournisseurs', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi le ROE est-il important pour les actionnaires ?',
                        'answers' => [
                            ['answer' => 'Il indique la rentabilité générée relativement aux capitaux qu’ils ont investis', 'iscorrect' => true],
                            ['answer' => 'Il mesure uniquement les ventes', 'iscorrect' => false],
                            ['answer' => 'Il garantit le rendement futur', 'iscorrect' => false],
                            ['answer' => 'Il mesure uniquement les stocks', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce que la rotation des actifs ?',
                        'answers' => [
                            ['answer' => 'Un indicateur de l’efficacité avec laquelle les actifs sont utilisés pour générer des ventes', 'iscorrect' => true],
                            ['answer' => 'Un indicateur du montant des dettes', 'iscorrect' => false],
                            ['answer' => 'Un indicateur de la trésorerie uniquement', 'iscorrect' => false],
                            ['answer' => 'Un indicateur des capitaux propres uniquement', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Que peut indiquer une amélioration de la rotation des actifs ?',
                        'answers' => [
                            ['answer' => 'Une utilisation plus efficace des actifs pour générer du chiffre d’affaires', 'iscorrect' => true],
                            ['answer' => 'Une baisse certaine des ventes', 'iscorrect' => false],
                            ['answer' => 'Une augmentation automatique des dettes', 'iscorrect' => false],
                            ['answer' => 'Une diminution obligatoire de la productivité', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise réalise 200 000 € de bénéfice net avec 1 000 000 € de capitaux propres. Quel est son ROE simplifié ?',
                        'answers' => [
                            ['answer' => '20 %', 'iscorrect' => true],
                            ['answer' => '5 %', 'iscorrect' => false],
                            ['answer' => '50 %', 'iscorrect' => false],
                            ['answer' => '200 %', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une rentabilité élevée doit-elle être analysée avec le niveau de risque ?',
                        'answers' => [
                            ['answer' => 'Un rendement élevé peut être obtenu avec un niveau de risque ou d’endettement également élevé', 'iscorrect' => true],
                            ['answer' => 'La rentabilité n’a jamais de relation avec le risque', 'iscorrect' => false],
                            ['answer' => 'Une rentabilité élevée garantit toujours la sécurité', 'iscorrect' => false],
                            ['answer' => 'Le risque disparaît lorsque le bénéfice augmente', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi le ROE peut-il augmenter grâce à l’endettement ?',
                        'answers' => [
                            ['answer' => 'L’effet de levier peut amplifier la rentabilité des capitaux propres lorsque les conditions sont favorables', 'iscorrect' => true],
                            ['answer' => 'La dette augmente toujours le bénéfice', 'iscorrect' => false],
                            ['answer' => 'Les intérêts sont toujours nuls', 'iscorrect' => false],
                            ['answer' => 'L’endettement supprime tous les risques', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel indicateur permet de comparer le bénéfice net au chiffre d’affaires ?',
                        'answers' => [
                            ['answer' => 'La marge nette', 'iscorrect' => true],
                            ['answer' => 'Le ratio d’endettement', 'iscorrect' => false],
                            ['answer' => 'Le ratio de liquidité générale', 'iscorrect' => false],
                            ['answer' => 'La rotation des stocks', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les ratios de rentabilité doivent-ils être comparés dans le temps ?',
                        'answers' => [
                            ['answer' => 'Pour identifier les tendances et comprendre si la performance s’améliore ou se détériore', 'iscorrect' => true],
                            ['answer' => 'Pour garantir le bénéfice futur', 'iscorrect' => false],
                            ['answer' => 'Pour supprimer les données historiques', 'iscorrect' => false],
                            ['answer' => 'Pour éviter toute comparaison sectorielle', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Analyse comparative et interprétation financière',
                'questions' => [
                    [
                        'question' => 'Qu’est-ce que l’analyse horizontale ?',
                        'answers' => [
                            ['answer' => 'La comparaison d’une même donnée financière entre plusieurs périodes', 'iscorrect' => true],
                            ['answer' => 'La comparaison uniquement entre actifs et passifs', 'iscorrect' => false],
                            ['answer' => 'L’analyse uniquement des stocks', 'iscorrect' => false],
                            ['answer' => 'La comparaison des employés', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce que l’analyse verticale ?',
                        'answers' => [
                            ['answer' => 'L’étude de la composition d’un état financier en exprimant certains postes en pourcentage d’une base', 'iscorrect' => true],
                            ['answer' => 'L’étude des flux bancaires uniquement', 'iscorrect' => false],
                            ['answer' => 'La comparaison de deux années uniquement', 'iscorrect' => false],
                            ['answer' => 'L’analyse des salaires uniquement', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi utilise-t-on des ratios financiers ?',
                        'answers' => [
                            ['answer' => 'Pour faciliter l’interprétation et la comparaison de différentes informations financières', 'iscorrect' => true],
                            ['answer' => 'Pour garantir les résultats futurs', 'iscorrect' => false],
                            ['answer' => 'Pour remplacer complètement les états financiers', 'iscorrect' => false],
                            ['answer' => 'Pour supprimer toutes les différences entre entreprises', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi faut-il éviter d’interpréter un ratio isolément ?',
                        'answers' => [
                            ['answer' => 'Son évolution et sa signification dépendent du contexte, du secteur et d’autres indicateurs', 'iscorrect' => true],
                            ['answer' => 'Les ratios n’ont jamais de valeur', 'iscorrect' => false],
                            ['answer' => 'Tous les ratios donnent la même information', 'iscorrect' => false],
                            ['answer' => 'Un seul ratio suffit toujours pour juger une entreprise', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise augmente ses ventes de 10 % mais ses bénéfices diminuent de 5 %. Que peut-on envisager ?',
                        'answers' => [
                            ['answer' => 'Les coûts ou les charges ont probablement augmenté suffisamment pour réduire la rentabilité', 'iscorrect' => true],
                            ['answer' => 'Les coûts ont nécessairement diminué', 'iscorrect' => false],
                            ['answer' => 'La rentabilité a forcément augmenté', 'iscorrect' => false],
                            ['answer' => 'Les ventes n’ont aucune influence sur le résultat', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise possède une bonne rentabilité mais une faible liquidité. Quelle conclusion est la plus prudente ?',
                        'answers' => [
                            ['answer' => 'Elle peut être rentable tout en rencontrant des tensions de trésorerie à court terme', 'iscorrect' => true],
                            ['answer' => 'Elle est nécessairement en faillite', 'iscorrect' => false],
                            ['answer' => 'Elle n’a aucun actif', 'iscorrect' => false],
                            ['answer' => 'Elle n’a aucune dette', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi comparer une entreprise à ses concurrents directs ?',
                        'answers' => [
                            ['answer' => 'Pour apprécier sa performance et sa structure financière par rapport à des entreprises comparables', 'iscorrect' => true],
                            ['answer' => 'Pour garantir qu’elle aura les mêmes résultats', 'iscorrect' => false],
                            ['answer' => 'Pour éliminer les différences sectorielles', 'iscorrect' => false],
                            ['answer' => 'Pour remplacer l’analyse de ses propres états financiers', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise a une marge nette de 8 % alors que la moyenne du secteur est de 5 %. Que peut-on raisonnablement observer ?',
                        'answers' => [
                            ['answer' => 'Sa rentabilité nette est supérieure à la moyenne du secteur sur cet indicateur', 'iscorrect' => true],
                            ['answer' => 'Elle est nécessairement sans risque', 'iscorrect' => false],
                            ['answer' => 'Elle possède forcément plus de trésorerie', 'iscorrect' => false],
                            ['answer' => 'Elle aura nécessairement une croissance supérieure', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les méthodes comptables peuvent-elles affecter les comparaisons financières ?',
                        'answers' => [
                            ['answer' => 'Des méthodes différentes peuvent influencer la présentation ou la mesure de certains éléments financiers', 'iscorrect' => true],
                            ['answer' => 'Les méthodes comptables n’ont jamais d’effet', 'iscorrect' => false],
                            ['answer' => 'Toutes les entreprises utilisent nécessairement les mêmes méthodes dans tous les pays', 'iscorrect' => false],
                            ['answer' => 'Les ratios éliminent automatiquement toute différence comptable', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle approche fournit généralement une analyse financière plus fiable ?',
                        'answers' => [
                            ['answer' => 'Combiner plusieurs états financiers, ratios, tendances et comparaisons sectorielles', 'iscorrect' => true],
                            ['answer' => 'Utiliser uniquement le chiffre d’affaires', 'iscorrect' => false],
                            ['answer' => 'Utiliser uniquement le bénéfice net', 'iscorrect' => false],
                            ['answer' => 'Utiliser uniquement la trésorerie finale', 'iscorrect' => false],
                        ],
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
                    'description' => $quizData['title'],
                    'duration' => 10,
                    'passing_score' => 80,
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

                // Supprime les anciennes réponses avant de recréer les choix.
                $question->choices()->delete();

                $answers = $questionData['answers'];
                shuffle($answers);

                foreach ($answers as $order => $answerData) {
                    Choice::create([
                        'question_id' => $question->id,
                        'choice_text' => $answerData['answer'],
                        'is_correct' => $answerData['iscorrect'],
                        'order' => $order + 1,
                    ]);
                }
            }
        }
    }
}