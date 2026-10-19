<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class FinancialAccountingBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'financial-accounting')->firstOrFail();

        $quizSettings = [
            ['duration' => 10, 'passing_score' => 80],
            ['duration' => 10, 'passing_score' => 80],
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
                'title' => 'Comptabilité financière — Introduction à la comptabilité',
                'description' => 'Découvrez les principes fondamentaux de la comptabilité financière et son rôle dans l’entreprise.',
                'questions' => [
                    [
                        'question' => 'Quel est l’objectif principal de la comptabilité financière ?',
                        'explanation' => 'La comptabilité financière consiste notamment à enregistrer, classer et présenter les opérations financières d’une organisation.',
                        'choices' => [
                            ['choice_text' => 'Calculer et déclarer chaque mois les impôts dus par l’entreprise à l’administration fiscale', 'is_correct' => false],
                            ['choice_text' => 'Enregistrer et présenter de manière structurée les opérations financières de l’entreprise', 'is_correct' => true],
                            ['choice_text' => 'Analyser les coûts de production de chaque produit pour fixer les prix de vente', 'is_correct' => false],
                            ['choice_text' => 'Prévoir les résultats futurs de l’entreprise pour guider les décisions de la direction', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'À qui les états financiers peuvent-ils notamment fournir des informations ?',
                        'explanation' => 'Les investisseurs, dirigeants, prêteurs et autres parties prenantes utilisent les informations financières pour prendre des décisions.',
                        'choices' => [
                            ['choice_text' => 'Aux équipes de production, qui s’en servent pour planifier les cadences de fabrication', 'is_correct' => false],
                            ['choice_text' => 'Aux salariés, qui s’en servent pour calculer le montant de leur fiche de paie', 'is_correct' => false],
                            ['choice_text' => 'Aux clients, qui s’en servent pour comparer les prix des produits vendus', 'is_correct' => false],
                            ['choice_text' => 'Aux investisseurs, prêteurs, dirigeants et autres parties prenantes', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce qu’une opération comptable ?',
                        'explanation' => 'Une opération comptable est un événement économique ou financier qui peut être enregistré dans les comptes.',
                        'choices' => [
                            ['choice_text' => 'Un document commercial remis au client pour justifier le montant d’une vente', 'is_correct' => false],
                            ['choice_text' => 'Une prévision de recettes et de dépenses établie pour l’année à venir', 'is_correct' => false],
                            ['choice_text' => 'Un événement économique ou financier ayant un effet enregistrable dans les comptes', 'is_correct' => true],
                            ['choice_text' => 'Un contrôle effectué par un auditeur externe pour vérifier la fiabilité des comptes annuels', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce qu’un compte comptable ?',
                        'explanation' => 'Un compte regroupe les opérations de même nature afin de suivre leur évolution.',
                        'choices' => [
                            ['choice_text' => 'Un état de synthèse présentant la situation financière à une date donnée', 'is_correct' => false],
                            ['choice_text' => 'Un document remis au client pour demander le paiement d’une vente', 'is_correct' => false],
                            ['choice_text' => 'Un registre chronologique où les opérations sont notées jour après jour', 'is_correct' => false],
                            ['choice_text' => 'Un outil permettant de regrouper et suivre des opérations de même nature', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Quel document présente la situation financière d’une entreprise à une date donnée ?',
                        'explanation' => 'Le bilan présente les actifs, passifs et capitaux propres à une date déterminée.',
                        'choices' => [
                            ['choice_text' => 'Le compte de résultat', 'is_correct' => false],
                            ['choice_text' => 'Le bilan', 'is_correct' => true],
                            ['choice_text' => 'Le budget prévisionnel annuel', 'is_correct' => false],
                            ['choice_text' => 'Le grand livre des comptes', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel document présente principalement les produits, charges et résultat d’une période ?',
                        'explanation' => 'Le compte de résultat mesure la performance financière sur une période.',
                        'choices' => [
                            ['choice_text' => 'Le bilan', 'is_correct' => false],
                            ['choice_text' => 'Le tableau des flux de trésorerie', 'is_correct' => false],
                            ['choice_text' => 'Le compte de résultat', 'is_correct' => true],
                            ['choice_text' => 'Le journal des achats', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la comptabilité utilise-t-elle des règles et méthodes structurées ?',
                        'explanation' => 'Des règles cohérentes permettent d’enregistrer et de présenter les informations de manière comparable et compréhensible.',
                        'choices' => [
                            ['choice_text' => 'Pour laisser chaque entreprise présenter ses comptes selon sa convenance', 'is_correct' => false],
                            ['choice_text' => 'Pour réduire le montant des impôts payés par l’entreprise chaque année', 'is_correct' => false],
                            ['choice_text' => 'Pour fixer à l’avance le résultat que l’entreprise doit atteindre', 'is_correct' => false],
                            ['choice_text' => 'Pour assurer une information financière cohérente et comparable', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Quelle est la principale différence entre comptabilité financière et simple gestion de trésorerie ?',
                        'explanation' => 'La comptabilité financière ne suit pas uniquement les encaissements et décaissements ; elle applique des règles d’enregistrement plus larges.',
                        'choices' => [
                            ['choice_text' => 'La comptabilité financière couvre davantage d’éléments que les seuls mouvements de trésorerie', 'is_correct' => true],
                            ['choice_text' => 'La comptabilité financière se limite aux opérations réglées au comptant dans l’exercice', 'is_correct' => false],
                            ['choice_text' => 'La gestion de trésorerie couvre un périmètre plus large que la comptabilité financière', 'is_correct' => false],
                            ['choice_text' => 'La gestion de trésorerie suit les créances et les dettes, la comptabilité financière suit la caisse', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les entreprises doivent-elles conserver des informations comptables organisées ?',
                        'explanation' => 'Une documentation structurée facilite le suivi, le contrôle, l’analyse et la préparation des états financiers.',
                        'choices' => [
                            ['choice_text' => 'Pour déterminer les prix de vente et fixer les objectifs commerciaux de chaque service', 'is_correct' => false],
                            ['choice_text' => 'Pour assurer le suivi, le contrôle et la préparation fiable des informations financières', 'is_correct' => true],
                            ['choice_text' => 'Pour archiver les échanges commerciaux et faciliter la prospection de nouveaux clients', 'is_correct' => false],
                            ['choice_text' => 'Pour planifier les achats futurs et optimiser la gestion physique des stocks de l’entrepôt', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle qualité est essentielle pour une information comptable utile ?',
                        'explanation' => 'Une information comptable utile doit notamment être fiable, pertinente et compréhensible.',
                        'choices' => [
                            ['choice_text' => 'Elle doit être confidentielle, prévisionnelle et réservée à la direction', 'is_correct' => false],
                            ['choice_text' => 'Elle doit être optimiste, favorable à l’entreprise et sélective', 'is_correct' => false],
                            ['choice_text' => 'Elle doit être rapide, arrondie et limitée aux opérations importantes', 'is_correct' => false],
                            ['choice_text' => 'Elle doit être fiable, pertinente et compréhensible', 'is_correct' => true],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Comptabilité financière — Actifs, passifs et capitaux propres',
                'description' => 'Maîtrisez les trois grandes composantes de la situation financière.',
                'questions' => [
                    [
                        'question' => 'Qu’est-ce qu’un actif en comptabilité ?',
                        'explanation' => 'Un actif est une ressource économique contrôlée par l’entreprise.',
                        'choices' => [
                            ['choice_text' => 'Une obligation actuelle envers une autre partie', 'is_correct' => false],
                            ['choice_text' => 'Une augmentation des ressources liée à l’activité de la période', 'is_correct' => false],
                            ['choice_text' => 'L’intérêt résiduel des propriétaires dans l’entreprise', 'is_correct' => false],
                            ['choice_text' => 'Une ressource économique contrôlée par l’entreprise', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Lequel des éléments suivants est un actif courant ?',
                        'explanation' => 'Les créances clients font partie des actifs courants dans une situation normale.',
                        'choices' => [
                            ['choice_text' => 'Les créances clients', 'is_correct' => true],
                            ['choice_text' => 'Un emprunt bancaire à long terme', 'is_correct' => false],
                            ['choice_text' => 'Les capitaux propres', 'is_correct' => false],
                            ['choice_text' => 'Une dette fournisseur', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce qu’un passif ?',
                        'explanation' => 'Un passif représente une obligation actuelle envers une autre partie.',
                        'choices' => [
                            ['choice_text' => 'Une obligation financière ou économique envers une autre partie', 'is_correct' => true],
                            ['choice_text' => 'Une ressource économique contrôlée par l’entreprise', 'is_correct' => false],
                            ['choice_text' => 'Une diminution de ressources liée à l’activité de la période', 'is_correct' => false],
                            ['choice_text' => 'Une somme versée aux associés à partir des bénéfices de l’exercice', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Lequel est un exemple de passif courant ?',
                        'explanation' => 'Les dettes fournisseurs sont généralement des obligations à court terme.',
                        'choices' => [
                            ['choice_text' => 'Un emprunt sur dix ans', 'is_correct' => false],
                            ['choice_text' => 'Les dettes fournisseurs', 'is_correct' => true],
                            ['choice_text' => 'Les stocks de marchandises', 'is_correct' => false],
                            ['choice_text' => 'Les capitaux propres', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Que représentent les capitaux propres ?',
                        'explanation' => 'Ils représentent l’intérêt résiduel des propriétaires après déduction des passifs des actifs.',
                        'choices' => [
                            ['choice_text' => 'L’ensemble des sommes dues aux fournisseurs et aux banques', 'is_correct' => false],
                            ['choice_text' => 'Le total des produits encaissés au cours de l’exercice', 'is_correct' => false],
                            ['choice_text' => 'La trésorerie disponible en banque et en caisse à la clôture', 'is_correct' => false],
                            ['choice_text' => 'L’intérêt résiduel des propriétaires dans l’entreprise', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Quelle équation représente le principe comptable fondamental ?',
                        'explanation' => 'L’équation fondamentale est : Actifs = Passifs + Capitaux propres.',
                        'choices' => [
                            ['choice_text' => 'Actifs = Revenus + Dépenses', 'is_correct' => false],
                            ['choice_text' => 'Passifs = Actifs + Capitaux propres', 'is_correct' => false],
                            ['choice_text' => 'Actifs = Passifs + Capitaux propres', 'is_correct' => true],
                            ['choice_text' => 'Capitaux propres = Actifs + Passifs', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Si une entreprise possède 200 000 € d’actifs et 80 000 € de passifs, quels sont ses capitaux propres ?',
                        'explanation' => 'Capitaux propres = 200 000 € - 80 000 € = 120 000 €.',
                        'choices' => [
                            ['choice_text' => '80 000 €', 'is_correct' => false],
                            ['choice_text' => '120 000 €', 'is_correct' => true],
                            ['choice_text' => '200 000 €', 'is_correct' => false],
                            ['choice_text' => '280 000 €', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les stocks sont-ils généralement classés parmi les actifs ?',
                        'explanation' => 'Les stocks sont des ressources contrôlées par l’entreprise qui peuvent générer des avantages économiques futurs.',
                        'choices' => [
                            ['choice_text' => 'Ils représentent des ressources détenues pour être utilisées ou vendues', 'is_correct' => true],
                            ['choice_text' => 'Ils représentent des sommes que l’entreprise doit régler à ses fournisseurs', 'is_correct' => false],
                            ['choice_text' => 'Ils représentent des biens durables utilisés pendant plusieurs exercices', 'is_correct' => false],
                            ['choice_text' => 'Ils représentent la consommation de ressources enregistrée sur la période', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un emprunt bancaire augmente-t-il généralement les passifs ?',
                        'explanation' => 'L’emprunt crée une obligation de remboursement envers la banque.',
                        'choices' => [
                            ['choice_text' => 'Parce qu’il augmente directement les revenus', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’il crée une obligation de remboursement envers la banque', 'is_correct' => true],
                            ['choice_text' => 'Parce qu’il réduit toujours les actifs', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’il représente automatiquement un bénéfice', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel effet peut avoir un bénéfice conservé dans l’entreprise sur les capitaux propres ?',
                        'explanation' => 'Un bénéfice conservé augmente généralement les capitaux propres.',
                        'choices' => [
                            ['choice_text' => 'Il peut diminuer les capitaux propres', 'is_correct' => false],
                            ['choice_text' => 'Il peut augmenter les capitaux propres', 'is_correct' => true],
                            ['choice_text' => 'Il augmente les dettes envers les associés', 'is_correct' => false],
                            ['choice_text' => 'Il réduit les actifs de l’entreprise', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Comptabilité financière — Débits, crédits et écritures',
                'description' => 'Apprenez les principes élémentaires de l’enregistrement comptable.',
                'questions' => [
                    [
                        'question' => 'Que représentent le débit et le crédit en comptabilité ?',
                        'explanation' => 'Le débit et le crédit sont les deux côtés utilisés pour enregistrer les opérations comptables.',
                        'choices' => [
                            ['choice_text' => 'Les deux types de documents justifiant une vente', 'is_correct' => false],
                            ['choice_text' => 'Les deux postes principaux du bilan, actif et passif', 'is_correct' => false],
                            ['choice_text' => 'Les deux issues du résultat : bénéfice ou perte', 'is_correct' => false],
                            ['choice_text' => 'Les deux côtés d’une écriture comptable', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Quel principe doit respecter toute écriture comptable en partie double ?',
                        'explanation' => 'Le total des montants au débit doit être égal au total des montants au crédit.',
                        'choices' => [
                            ['choice_text' => 'Le total des actifs doit être égal au total des charges', 'is_correct' => false],
                            ['choice_text' => 'Le total des produits doit être égal au total des charges', 'is_correct' => false],
                            ['choice_text' => 'Chaque débit doit être suivi d’un crédit au même compte', 'is_correct' => false],
                            ['choice_text' => 'Le total des débits doit être égal au total des crédits', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Lorsqu’une entreprise reçoit de l’argent comptant provenant d’une vente, quel compte d’actif augmente généralement ?',
                        'explanation' => 'La trésorerie augmente lorsque l’entreprise reçoit le paiement.',
                        'choices' => [
                            ['choice_text' => 'Le compte de trésorerie', 'is_correct' => true],
                            ['choice_text' => 'Le compte des créances clients', 'is_correct' => false],
                            ['choice_text' => 'Le compte d’immobilisations', 'is_correct' => false],
                            ['choice_text' => 'Le compte de stocks', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel document sert souvent de preuve à une opération comptable ?',
                        'explanation' => 'Une facture, un reçu ou un relevé bancaire peut servir de pièce justificative selon l’opération.',
                        'choices' => [
                            ['choice_text' => 'Un budget prévisionnel établi par la direction pour l’année à venir', 'is_correct' => false],
                            ['choice_text' => 'Un état de synthèse tel que le bilan ou le compte de résultat', 'is_correct' => false],
                            ['choice_text' => 'Une pièce justificative telle qu’une facture ou un reçu', 'is_correct' => true],
                            ['choice_text' => 'Un plan comptable listant les numéros et intitulés des comptes', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les écritures comptables doivent-elles être documentées ?',
                        'explanation' => 'La documentation facilite le contrôle, l’audit et la vérification des opérations.',
                        'choices' => [
                            ['choice_text' => 'Pour permettre de modifier librement les écritures après la clôture', 'is_correct' => false],
                            ['choice_text' => 'Pour permettre de vérifier l’origine et la justification des opérations', 'is_correct' => true],
                            ['choice_text' => 'Pour réduire le nombre de comptes utilisés dans les états financiers de l’entreprise', 'is_correct' => false],
                            ['choice_text' => 'Pour accélérer l’encaissement des factures émises auprès des clients', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Lorsqu’une entreprise achète une machine en payant comptant, quels éléments sont principalement concernés ?',
                        'explanation' => 'Une immobilisation augmente tandis que la trésorerie diminue.',
                        'choices' => [
                            ['choice_text' => 'Une charge augmente et la trésorerie diminue d’autant', 'is_correct' => false],
                            ['choice_text' => 'Une immobilisation augmente et une dette fournisseur apparaît', 'is_correct' => false],
                            ['choice_text' => 'Une immobilisation augmente et la trésorerie diminue', 'is_correct' => true],
                            ['choice_text' => 'Un stock augmente et les capitaux propres diminuent', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Lorsqu’une entreprise reçoit une facture fournisseur non encore payée, quelle situation apparaît généralement ?',
                        'explanation' => 'Une dette fournisseur est constatée jusqu’au règlement de la facture.',
                        'choices' => [
                            ['choice_text' => 'Une créance client est enregistrée', 'is_correct' => false],
                            ['choice_text' => 'Une dette bancaire est enregistrée', 'is_correct' => false],
                            ['choice_text' => 'Une vente est enregistrée en résultat', 'is_correct' => false],
                            ['choice_text' => 'Une dette fournisseur est enregistrée', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la partie double est-elle utile ?',
                        'explanation' => 'Elle permet de maintenir l’équilibre de l’équation comptable et de mieux contrôler les opérations.',
                        'choices' => [
                            ['choice_text' => 'Elle permet de réduire le nombre de comptes à tenir et de simplifier le plan comptable', 'is_correct' => false],
                            ['choice_text' => 'Elle permet de conserver l’équilibre comptable et de suivre les effets des opérations', 'is_correct' => true],
                            ['choice_text' => 'Elle permet de calculer les impôts dus et de préparer les déclarations fiscales', 'is_correct' => false],
                            ['choice_text' => 'Elle permet d’enregistrer chaque opération une seule fois dans le compte de trésorerie', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Que se passe-t-il si une écriture présente 1 500 € au débit et 1 500 € au crédit ?',
                        'explanation' => 'L’écriture est équilibrée du point de vue de la partie double.',
                        'choices' => [
                            ['choice_text' => 'L’écriture est équilibrée', 'is_correct' => true],
                            ['choice_text' => 'L’écriture est déséquilibrée', 'is_correct' => false],
                            ['choice_text' => 'L’écriture dégage un bénéfice', 'is_correct' => false],
                            ['choice_text' => 'L’écriture porte sur un seul compte', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi faut-il identifier correctement les comptes avant d’enregistrer une opération ?',
                        'explanation' => 'Une mauvaise classification peut fausser les états financiers.',
                        'choices' => [
                            ['choice_text' => 'Pour que l’opération soit réglée plus rapidement par le client ou le fournisseur', 'is_correct' => false],
                            ['choice_text' => 'Pour que le montant de l’opération soit réduit lors du calcul des impôts', 'is_correct' => false],
                            ['choice_text' => 'Pour que l’opération soit classée correctement dans les états financiers', 'is_correct' => true],
                            ['choice_text' => 'Pour que l’opération apparaisse dans les statistiques commerciales du secteur', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Comptabilité financière — Produits, charges et résultat',
                'description' => 'Comprenez la comptabilisation des produits, charges et du résultat de l’exercice.',
                'questions' => [
                    [
                        'question' => 'Qu’est-ce qu’un produit en comptabilité financière ?',
                        'explanation' => 'Un produit représente une augmentation des ressources économiques résultant notamment de l’activité.',
                        'choices' => [
                            ['choice_text' => 'Une diminution des ressources économiques liée notamment à l’activité de l’entreprise', 'is_correct' => false],
                            ['choice_text' => 'Une obligation de payer une somme à un tiers résultant d’une opération passée', 'is_correct' => false],
                            ['choice_text' => 'Un bien acheté par l’entreprise pour être utilisé durablement dans son activité principale', 'is_correct' => false],
                            ['choice_text' => 'Une augmentation des ressources économiques liée notamment à l’activité de l’entreprise', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce qu’une charge ?',
                        'explanation' => 'Une charge représente une consommation ou diminution de ressources économiques liée à l’activité.',
                        'choices' => [
                            ['choice_text' => 'Une augmentation des ressources économiques liée à l’activité', 'is_correct' => false],
                            ['choice_text' => 'Une somme que l’entreprise doit encore payer à un fournisseur', 'is_correct' => false],
                            ['choice_text' => 'Une consommation ou diminution de ressources économiques', 'is_correct' => true],
                            ['choice_text' => 'Une somme versée par les propriétaires pour financer l’entreprise', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Comment calcule-t-on généralement le résultat comptable simplifié ?',
                        'explanation' => 'Le résultat correspond aux produits moins les charges.',
                        'choices' => [
                            ['choice_text' => 'Charges moins produits', 'is_correct' => false],
                            ['choice_text' => 'Actifs moins immobilisations', 'is_correct' => false],
                            ['choice_text' => 'Passifs plus capitaux propres', 'is_correct' => false],
                            ['choice_text' => 'Produits moins charges', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Si les produits sont de 80 000 € et les charges de 65 000 €, quel est le résultat ?',
                        'explanation' => '80 000 € - 65 000 € = 15 000 € de bénéfice.',
                        'choices' => [
                            ['choice_text' => '15 000 € de bénéfice', 'is_correct' => true],
                            ['choice_text' => '65 000 € de bénéfice', 'is_correct' => false],
                            ['choice_text' => '80 000 € de perte', 'is_correct' => false],
                            ['choice_text' => '145 000 € de bénéfice', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Si les charges dépassent les produits, quel résultat apparaît généralement ?',
                        'explanation' => 'Lorsque les charges sont supérieures aux produits, l’entreprise réalise une perte.',
                        'choices' => [
                            ['choice_text' => 'Un bénéfice', 'is_correct' => false],
                            ['choice_text' => 'Un actif', 'is_correct' => false],
                            ['choice_text' => 'Une perte', 'is_correct' => true],
                            ['choice_text' => 'Une créance', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une charge peut-elle être comptabilisée avant son paiement ?',
                        'explanation' => 'La comptabilité d’engagement rattache les opérations à la période concernée, indépendamment du moment du paiement.',
                        'choices' => [
                            ['choice_text' => 'Parce que l’entreprise peut choisir librement la date d’enregistrement de chaque dépense selon ses besoins', 'is_correct' => false],
                            ['choice_text' => 'Parce que seuls les décaissements importants font l’objet d’une écriture, les autres étant ignorés', 'is_correct' => false],
                            ['choice_text' => 'Parce que l’enregistrement comptable peut être lié à la période concernée et non uniquement au paiement', 'is_correct' => true],
                            ['choice_text' => 'Parce que le paiement estimé à l’avance remplace l’enregistrement de la charge de la période', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une vente à crédit peut-elle constituer un produit avant l’encaissement ?',
                        'explanation' => 'Selon les règles comptables applicables, le produit peut être constaté lorsque les conditions de reconnaissance sont remplies.',
                        'choices' => [
                            ['choice_text' => 'Parce que la reconnaissance du produit n’est pas nécessairement liée au moment de l’encaissement', 'is_correct' => true],
                            ['choice_text' => 'Parce que le produit n’est comptabilisé qu’à la date où le client reçoit la facture', 'is_correct' => false],
                            ['choice_text' => 'Parce que la vente à crédit est d’abord enregistrée en trésorerie, puis corrigée au paiement', 'is_correct' => false],
                            ['choice_text' => 'Parce que le produit n’est constaté qu’après l’expiration du délai de paiement accordé', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi comparer les produits et charges par période ?',
                        'explanation' => 'Cela permet d’évaluer la performance de l’entreprise au cours de chaque période.',
                        'choices' => [
                            ['choice_text' => 'Pour déterminer le montant des capitaux propres à une date précise', 'is_correct' => false],
                            ['choice_text' => 'Pour vérifier que chaque écriture est équilibrée entre débit et crédit', 'is_correct' => false],
                            ['choice_text' => 'Pour mesurer l’évolution de la performance financière dans le temps', 'is_correct' => true],
                            ['choice_text' => 'Pour fixer les prix de vente futurs de chaque produit de l’entreprise', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise augmente ses ventes mais ses charges progressent davantage. Quel effet peut apparaître ?',
                        'explanation' => 'Si les charges augmentent plus vite que les produits, le résultat peut diminuer.',
                        'choices' => [
                            ['choice_text' => 'Une diminution du bénéfice ou une augmentation de la perte', 'is_correct' => true],
                            ['choice_text' => 'Une augmentation du bénéfice proportionnelle à celle des ventes', 'is_correct' => false],
                            ['choice_text' => 'Une stabilité du résultat malgré la hausse des charges', 'is_correct' => false],
                            ['choice_text' => 'Une diminution des ventes enregistrées au compte de résultat', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle période couvre généralement un compte de résultat ?',
                        'explanation' => 'Le compte de résultat mesure la performance sur une période, généralement l’exercice annuel, alors que le bilan est établi à une date donnée.',
                        'choices' => [
                            ['choice_text' => 'Une période déterminée, le plus souvent un exercice annuel', 'is_correct' => true],
                            ['choice_text' => 'Une date précise, celle de la clôture de l’exercice', 'is_correct' => false],
                            ['choice_text' => 'La totalité de la durée de vie de l’entreprise depuis sa création', 'is_correct' => false],
                            ['choice_text' => 'Une période future, correspondant au budget de l’année suivante', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Comptabilité financière — Achats, ventes et factures',
                'description' => 'Maîtrisez les opérations courantes liées aux achats, aux ventes et aux factures.',
                'questions' => [
                    [
                        'question' => 'Quel document est généralement émis par un vendeur pour demander le paiement d’une vente ?',
                        'explanation' => 'La facture formalise généralement le montant dû par le client.',
                        'choices' => [
                            ['choice_text' => 'Le bilan', 'is_correct' => false],
                            ['choice_text' => 'Le compte de résultat', 'is_correct' => false],
                            ['choice_text' => 'La facture', 'is_correct' => true],
                            ['choice_text' => 'Le budget annuel', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Lorsqu’une entreprise vend à crédit, quel élément apparaît généralement ?',
                        'explanation' => 'Une créance client est constatée jusqu’au paiement.',
                        'choices' => [
                            ['choice_text' => 'Une dette fournisseur', 'is_correct' => false],
                            ['choice_text' => 'Une créance client', 'is_correct' => true],
                            ['choice_text' => 'Une diminution automatique des actifs', 'is_correct' => false],
                            ['choice_text' => 'Une augmentation des charges sans autre effet', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Lorsqu’une entreprise achète des marchandises à crédit, quelle obligation apparaît généralement ?',
                        'explanation' => 'L’entreprise doit payer le fournisseur ultérieurement.',
                        'choices' => [
                            ['choice_text' => 'Une créance client', 'is_correct' => false],
                            ['choice_text' => 'Une dette fournisseur', 'is_correct' => true],
                            ['choice_text' => 'Un bénéfice', 'is_correct' => false],
                            ['choice_text' => 'Une augmentation automatique des capitaux propres', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les factures sont-elles importantes en comptabilité ?',
                        'explanation' => 'Elles constituent des pièces justificatives pour les opérations commerciales.',
                        'choices' => [
                            ['choice_text' => 'Elles servent de base pour fixer le budget prévisionnel de l’année suivante', 'is_correct' => false],
                            ['choice_text' => 'Elles servent à calculer le résultat comptable à la place du compte de résultat', 'is_correct' => false],
                            ['choice_text' => 'Elles servent de pièces justificatives pour les opérations commerciales', 'is_correct' => true],
                            ['choice_text' => 'Elles servent à suivre l’état des stocks en magasin et en entrepôt', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une entreprise doit-elle contrôler les factures reçues ?',
                        'explanation' => 'Le contrôle permet de vérifier la réalité, l’exactitude et l’autorisation des dépenses.',
                        'choices' => [
                            ['choice_text' => 'Pour négocier une remise commerciale auprès du fournisseur concerné', 'is_correct' => false],
                            ['choice_text' => 'Pour prévoir le montant des achats de la période suivante', 'is_correct' => false],
                            ['choice_text' => 'Pour s’assurer que les clients paieront dans les délais prévus', 'is_correct' => false],
                            ['choice_text' => 'Pour vérifier leur exactitude, leur justification et leur conformité', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce qu’une remise commerciale ?',
                        'explanation' => 'Une remise est une réduction accordée sur le prix ou le montant d’une opération commerciale.',
                        'choices' => [
                            ['choice_text' => 'Un paiement versé à l’avance au fournisseur', 'is_correct' => false],
                            ['choice_text' => 'Une majoration appliquée en cas de retard de paiement', 'is_correct' => false],
                            ['choice_text' => 'Un délai supplémentaire accordé pour régler une facture', 'is_correct' => false],
                            ['choice_text' => 'Une réduction accordée sur le prix d’une opération', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une facture fournisseur non encore payée constitue-t-elle une obligation ?',
                        'explanation' => 'L’entreprise doit encore régler le montant dû au fournisseur.',
                        'choices' => [
                            ['choice_text' => 'Parce que le fournisseur doit encore verser une somme à l’entreprise', 'is_correct' => false],
                            ['choice_text' => 'Parce que l’entreprise doit encore régler le montant facturé', 'is_correct' => true],
                            ['choice_text' => 'Parce que la facture constitue déjà une charge payée par l’entreprise', 'is_correct' => false],
                            ['choice_text' => 'Parce que la facture représente un produit à encaisser prochainement', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi le rapprochement entre factures, commandes et réceptions peut-il être utile ?',
                        'explanation' => 'Il permet de vérifier que les biens ou services facturés correspondent aux opérations réellement réalisées.',
                        'choices' => [
                            ['choice_text' => 'Pour négocier de meilleures conditions de paiement', 'is_correct' => false],
                            ['choice_text' => 'Pour calculer l’amortissement des biens achetés', 'is_correct' => false],
                            ['choice_text' => 'Pour estimer le prix de vente des produits achetés', 'is_correct' => false],
                            ['choice_text' => 'Pour contrôler la réalité et l’exactitude des achats', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi le délai de paiement d’une facture est-il important pour la trésorerie ?',
                        'explanation' => 'Le délai détermine la date à laquelle l’entreprise encaisse ou décaisse les liquidités.',
                        'choices' => [
                            ['choice_text' => 'Il modifie le montant du produit enregistré lors de la vente', 'is_correct' => false],
                            ['choice_text' => 'Il détermine le montant de la remise accordée sur la facture', 'is_correct' => false],
                            ['choice_text' => 'Il influence le moment des encaissements ou décaissements', 'is_correct' => true],
                            ['choice_text' => 'Il détermine le résultat de la période indépendamment des ventes', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les ventes et achats doivent-ils être correctement documentés ?',
                        'explanation' => 'Une documentation complète facilite le contrôle, la justification et l’établissement des comptes.',
                        'choices' => [
                            ['choice_text' => 'Pour assurer la traçabilité et la fiabilité des opérations comptables', 'is_correct' => true],
                            ['choice_text' => 'Pour réduire le nombre d’opérations à enregistrer dans les comptes', 'is_correct' => false],
                            ['choice_text' => 'Pour accélérer le règlement des factures par les clients et fournisseurs', 'is_correct' => false],
                            ['choice_text' => 'Pour limiter le montant des charges enregistrées sur l’exercice', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Comptabilité financière — Créances clients et dettes fournisseurs',
                'description' => 'Comprenez la gestion comptable des créances clients et des obligations fournisseurs.',
                'questions' => [
                    [
                        'question' => 'Qu’est-ce qu’une créance client ?',
                        'explanation' => 'Une créance client représente une somme que les clients doivent à l’entreprise.',
                        'choices' => [
                            ['choice_text' => 'Une dette de l’entreprise envers un fournisseur', 'is_correct' => false],
                            ['choice_text' => 'Une somme due par un client à l’entreprise', 'is_correct' => true],
                            ['choice_text' => 'Un apport des actionnaires', 'is_correct' => false],
                            ['choice_text' => 'Une charge salariale', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce qu’une dette fournisseur ?',
                        'explanation' => 'Elle représente une somme que l’entreprise doit à un fournisseur.',
                        'choices' => [
                            ['choice_text' => 'Une somme due par l’entreprise à un fournisseur', 'is_correct' => true],
                            ['choice_text' => 'Une somme due par un client à l’entreprise', 'is_correct' => false],
                            ['choice_text' => 'Une somme prêtée par une banque à l’entreprise', 'is_correct' => false],
                            ['choice_text' => 'Une somme versée par l’entreprise à ses salariés', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi suivre l’âge des créances ?',
                        'explanation' => 'Une créance ancienne peut présenter un risque plus important de retard ou de non-recouvrement.',
                        'choices' => [
                            ['choice_text' => 'Pour détecter les créances susceptibles de devenir difficiles à recouvrer', 'is_correct' => true],
                            ['choice_text' => 'Pour déterminer le montant des remises accordées aux nouveaux clients', 'is_correct' => false],
                            ['choice_text' => 'Pour calculer l’amortissement des créances sur leur durée d’utilisation', 'is_correct' => false],
                            ['choice_text' => 'Pour vérifier que les dettes fournisseurs sont réglées dans les délais', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une entreprise accorde-t-elle parfois un délai de paiement à ses clients ?',
                        'explanation' => 'Le crédit client peut soutenir les ventes ou être une pratique commerciale du secteur.',
                        'choices' => [
                            ['choice_text' => 'Pour réduire le montant des dettes envers les fournisseurs', 'is_correct' => false],
                            ['choice_text' => 'Pour encaisser immédiatement la totalité du prix de vente', 'is_correct' => false],
                            ['choice_text' => 'Pour éviter d’enregistrer une créance dans les comptes de l’entreprise', 'is_correct' => false],
                            ['choice_text' => 'Pour faciliter les ventes ou respecter les pratiques commerciales', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Quel risque apparaît lorsqu’une créance client devient difficile à recouvrer ?',
                        'explanation' => 'L’entreprise peut devoir constater une perte ou une dépréciation selon les règles applicables.',
                        'choices' => [
                            ['choice_text' => 'Un risque de rupture de stock lié aux délais de livraison', 'is_correct' => false],
                            ['choice_text' => 'Un risque de perte financière lié au non-recouvrement', 'is_correct' => true],
                            ['choice_text' => 'Un risque de perte de change lié aux ventes à l’étranger', 'is_correct' => false],
                            ['choice_text' => 'Un risque de dépassement du budget lié aux achats de la période', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une entreprise peut-elle négocier des délais de paiement avec ses fournisseurs ?',
                        'explanation' => 'Des délais adaptés peuvent aider à gérer les sorties de trésorerie.',
                        'choices' => [
                            ['choice_text' => 'Pour organiser ses décaissements et gérer sa trésorerie', 'is_correct' => true],
                            ['choice_text' => 'Pour supprimer les obligations envers les fournisseurs', 'is_correct' => false],
                            ['choice_text' => 'Pour transformer les dettes en revenus', 'is_correct' => false],
                            ['choice_text' => 'Pour éviter toute comptabilisation', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une croissance rapide des créances peut-elle être préoccupante ?',
                        'explanation' => 'Elle peut signaler un recouvrement plus lent ou des conditions de crédit plus généreuses.',
                        'choices' => [
                            ['choice_text' => 'Elle réduit le besoin de financement de l’exploitation et améliore la liquidité', 'is_correct' => false],
                            ['choice_text' => 'Elle diminue le risque de crédit mais augmente les dettes fournisseurs', 'is_correct' => false],
                            ['choice_text' => 'Elle peut immobiliser davantage de trésorerie et augmenter le risque de crédit', 'is_correct' => true],
                            ['choice_text' => 'Elle prouve que les clients règlent plus rapidement leurs factures', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi rapprocher périodiquement les comptes clients des documents commerciaux ?',
                        'explanation' => 'Le rapprochement peut permettre de détecter des erreurs ou des soldes incorrects.',
                        'choices' => [
                            ['choice_text' => 'Pour détecter les erreurs et confirmer la réalité des soldes', 'is_correct' => true],
                            ['choice_text' => 'Pour modifier les conditions de paiement accordées aux clients', 'is_correct' => false],
                            ['choice_text' => 'Pour calculer les remises accordées à chaque client', 'is_correct' => false],
                            ['choice_text' => 'Pour convertir les créances en trésorerie à la clôture', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les dettes fournisseurs sont-elles utiles à analyser dans le cycle d’exploitation ?',
                        'explanation' => 'Elles représentent une source de financement opérationnel à court terme.',
                        'choices' => [
                            ['choice_text' => 'Parce qu’elles déterminent le montant du bénéfice distribuable aux propriétaires', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’elles influencent le calendrier des décaissements et le financement de l’exploitation', 'is_correct' => true],
                            ['choice_text' => 'Parce qu’elles augmentent les encaissements attendus des clients sur l’exercice', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’elles représentent des actifs durables utilisés dans la production de l’entreprise', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel principe résume une bonne gestion comptable des créances et dettes ?',
                        'explanation' => 'Il faut assurer l’exactitude, le suivi, le recouvrement et le paiement dans les délais.',
                        'choices' => [
                            ['choice_text' => 'Suivre précisément les soldes, les échéances et les risques de recouvrement ou de paiement', 'is_correct' => true],
                            ['choice_text' => 'Regrouper les créances et les dettes dans un même compte pour simplifier le suivi', 'is_correct' => false],
                            ['choice_text' => 'Enregistrer créances et dettes à la date de leur règlement, non à la date de la facture', 'is_correct' => false],
                            ['choice_text' => 'Maintenir des soldes identiques entre créances clients et dettes fournisseurs', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Comptabilité financière — Trésorerie et rapprochement bancaire',
                'description' => 'Maîtrisez les principes fondamentaux du suivi de trésorerie et du rapprochement bancaire.',
                'questions' => [
                    [
                        'question' => 'Qu’est-ce qu’un rapprochement bancaire ?',
                        'explanation' => 'Il consiste à comparer les enregistrements comptables de trésorerie avec les relevés bancaires.',
                        'choices' => [
                            ['choice_text' => 'Une comparaison entre les factures émises et les commandes reçues', 'is_correct' => false],
                            ['choice_text' => 'Une comparaison entre les écritures comptables et le relevé bancaire', 'is_correct' => true],
                            ['choice_text' => 'Une comparaison entre le solde du bilan et celui du compte de résultat', 'is_correct' => false],
                            ['choice_text' => 'Une comparaison entre les stocks comptables et l’inventaire physique', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les soldes comptables et bancaires peuvent-ils être différents temporairement ?',
                        'explanation' => 'Certaines opérations peuvent être enregistrées à des dates différentes.',
                        'choices' => [
                            ['choice_text' => 'La banque applique des règles comptables différentes de celles de l’entreprise', 'is_correct' => false],
                            ['choice_text' => 'Le solde comptable inclut les capitaux propres, contrairement au solde bancaire', 'is_correct' => false],
                            ['choice_text' => 'Le relevé bancaire n’est mis à jour qu’une fois par an, contrairement à la comptabilité', 'is_correct' => false],
                            ['choice_text' => 'Certaines opérations peuvent être enregistrées ou traitées à des dates différentes', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un rapprochement bancaire régulier est-il important ?',
                        'explanation' => 'Il permet de détecter les erreurs, omissions et opérations inhabituelles.',
                        'choices' => [
                            ['choice_text' => 'Pour déterminer le montant des impôts dus sur les intérêts bancaires', 'is_correct' => false],
                            ['choice_text' => 'Pour identifier les écarts, erreurs ou opérations non enregistrées', 'is_correct' => true],
                            ['choice_text' => 'Pour négocier le taux d’intérêt des emprunts avec la banque', 'is_correct' => false],
                            ['choice_text' => 'Pour vérifier que les clients règlent leurs factures à l’échéance', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce qu’un chèque ou paiement enregistré en comptabilité mais pas encore débité par la banque ?',
                        'explanation' => 'Il peut créer temporairement un écart entre le solde comptable et le relevé bancaire.',
                        'choices' => [
                            ['choice_text' => 'Un prélèvement bancaire non enregistré', 'is_correct' => false],
                            ['choice_text' => 'Une dette en cours de remboursement', 'is_correct' => false],
                            ['choice_text' => 'Une opération en circulation', 'is_correct' => true],
                            ['choice_text' => 'Un solde de caisse négatif', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les frais bancaires doivent-ils être enregistrés en comptabilité ?',
                        'explanation' => 'Ils représentent une charge engagée par l’entreprise.',
                        'choices' => [
                            ['choice_text' => 'Parce qu’ils constituent un produit qui augmente le résultat de l’exercice', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’ils représentent un apport des propriétaires à l’entreprise', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’ils correspondent à une immobilisation qui sera amortie sur plusieurs années', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’ils constituent une charge financière ou bancaire à comptabiliser', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une différence inhabituelle lors d’un rapprochement bancaire doit-elle être examinée ?',
                        'explanation' => 'Elle peut signaler une erreur, une opération oubliée ou une transaction inhabituelle.',
                        'choices' => [
                            ['choice_text' => 'Elle indique que la banque doit corriger son relevé avant toute écriture', 'is_correct' => false],
                            ['choice_text' => 'Elle correspond à un intérêt qui sera enregistré en produit à la clôture', 'is_correct' => false],
                            ['choice_text' => 'Elle peut révéler une erreur, une omission ou une opération inhabituelle', 'is_correct' => true],
                            ['choice_text' => 'Elle correspond à un écart normal qui disparaît de lui-même lors de la clôture', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la trésorerie disponible ne doit-elle pas être confondue avec le bénéfice ?',
                        'explanation' => 'Le bénéfice comptable et les flux de trésorerie suivent des logiques différentes.',
                        'choices' => [
                            ['choice_text' => 'Parce que le bénéfice peut inclure des opérations qui ne produisent pas immédiatement un mouvement de trésorerie', 'is_correct' => true],
                            ['choice_text' => 'Parce que la trésorerie intègre les amortissements et les provisions, contrairement au bénéfice', 'is_correct' => false],
                            ['choice_text' => 'Parce que le bénéfice correspond au solde bancaire diminué des dettes fournisseurs de la période', 'is_correct' => false],
                            ['choice_text' => 'Parce que la trésorerie est calculée sur plusieurs exercices alors que le bénéfice l’est sur un seul', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les encaissements clients influencent-ils le solde bancaire ?',
                        'explanation' => 'Lorsqu’un client paie, les liquidités disponibles augmentent.',
                        'choices' => [
                            ['choice_text' => 'Ils augmentent généralement les créances clients', 'is_correct' => false],
                            ['choice_text' => 'Ils augmentent généralement la trésorerie disponible', 'is_correct' => true],
                            ['choice_text' => 'Ils réduisent généralement les dettes fournisseurs', 'is_correct' => false],
                            ['choice_text' => 'Ils diminuent généralement le chiffre d’affaires de la période', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les paiements fournisseurs doivent-ils être rapprochés des dettes comptables ?',
                        'explanation' => 'Le rapprochement permet de s’assurer que les obligations ont été correctement enregistrées et réglées.',
                        'choices' => [
                            ['choice_text' => 'Pour s’assurer que les créances clients sont recouvrées dans les délais prévus', 'is_correct' => false],
                            ['choice_text' => 'Pour calculer l’amortissement des biens payés aux fournisseurs de l’entreprise', 'is_correct' => false],
                            ['choice_text' => 'Pour déterminer le bénéfice réalisé sur les achats de la période', 'is_correct' => false],
                            ['choice_text' => 'Pour vérifier que les paiements correspondent aux obligations comptabilisées', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Un virement reçu d’un client apparaît sur le relevé bancaire mais n’est pas encore enregistré en comptabilité. Que faut-il faire ?',
                        'explanation' => 'Une opération présente sur le relevé mais absente des comptes doit être enregistrée : le client a payé, donc la trésorerie augmente et la créance diminue.',
                        'choices' => [
                            ['choice_text' => 'L’enregistrer en comptabilité : la trésorerie augmente et la créance client diminue', 'is_correct' => true],
                            ['choice_text' => 'L’ignorer, car seule la banque doit conserver la trace de cet encaissement', 'is_correct' => false],
                            ['choice_text' => 'L’enregistrer comme une dette envers le client afin d’équilibrer les soldes comptables', 'is_correct' => false],
                            ['choice_text' => 'Attendre le prochain exercice, car un relevé bancaire ne permet pas de modifier les comptes', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Comptabilité financière — Immobilisations et amortissement',
                'description' => 'Comprenez le traitement comptable élémentaire des immobilisations et de leur amortissement.',
                'questions' => [
                    [
                        'question' => 'Qu’est-ce qu’une immobilisation ?',
                        'explanation' => 'Une immobilisation est un actif destiné à être utilisé durablement par l’entreprise.',
                        'choices' => [
                            ['choice_text' => 'Un actif destiné à être revendu dans le cours normal de l’activité', 'is_correct' => false],
                            ['choice_text' => 'Une somme due par un client à la suite d’une vente à crédit', 'is_correct' => false],
                            ['choice_text' => 'Une ressource financière apportée par les propriétaires', 'is_correct' => false],
                            ['choice_text' => 'Un actif destiné à être utilisé durablement dans l’activité', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Lequel est généralement une immobilisation corporelle ?',
                        'explanation' => 'Une machine est un bien physique utilisé durablement dans l’activité.',
                        'choices' => [
                            ['choice_text' => 'Une facture client impayée', 'is_correct' => false],
                            ['choice_text' => 'Une dette fournisseur', 'is_correct' => false],
                            ['choice_text' => 'Un salaire à payer', 'is_correct' => false],
                            ['choice_text' => 'Une machine', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi l’amortissement est-il comptabilisé ?',
                        'explanation' => 'Il permet de répartir le coût d’une immobilisation sur sa durée d’utilisation prévue.',
                        'choices' => [
                            ['choice_text' => 'Pour répartir le coût d’une immobilisation sur sa durée d’utilisation', 'is_correct' => true],
                            ['choice_text' => 'Pour constituer une réserve de trésorerie destinée à racheter le bien', 'is_correct' => false],
                            ['choice_text' => 'Pour ajuster chaque année la valeur de l’immobilisation à son prix de marché', 'is_correct' => false],
                            ['choice_text' => 'Pour enregistrer la totalité du coût en charge l’année de l’achat', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'L’amortissement représente-t-il nécessairement une sortie de trésorerie de chaque période ?',
                        'explanation' => 'L’amortissement est généralement une charge comptable sans nouveau décaissement correspondant chaque période.',
                        'choices' => [
                            ['choice_text' => 'Oui, il correspond chaque année au paiement d’une fraction du prix d’achat du bien', 'is_correct' => false],
                            ['choice_text' => 'Oui, il correspond au remboursement périodique de l’emprunt ayant servi à financer l’achat', 'is_correct' => false],
                            ['choice_text' => 'Non, il représente une mise de côté de trésorerie destinée à racheter le bien plus tard', 'is_correct' => false],
                            ['choice_text' => 'Non, il représente généralement une charge comptable sans nouveau décaissement périodique', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la durée d’utilisation estimée d’une immobilisation est-elle importante ?',
                        'explanation' => 'Elle influence la répartition du coût dans le temps.',
                        'choices' => [
                            ['choice_text' => 'Elle détermine le prix auquel l’immobilisation pourra être revendue', 'is_correct' => false],
                            ['choice_text' => 'Elle fixe le montant de l’emprunt nécessaire à son financement', 'is_correct' => false],
                            ['choice_text' => 'Elle détermine la date à laquelle l’immobilisation sera payée', 'is_correct' => false],
                            ['choice_text' => 'Elle influence la période sur laquelle le coût est réparti', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une entreprise doit-elle identifier correctement une immobilisation ?',
                        'explanation' => 'Une mauvaise classification peut fausser les charges et la valeur des actifs.',
                        'choices' => [
                            ['choice_text' => 'Pour comptabiliser immédiatement le coût total du bien en charge sur l’exercice d’acquisition de l’actif', 'is_correct' => false],
                            ['choice_text' => 'Pour appliquer un traitement comptable approprié et représenter correctement la situation financière', 'is_correct' => true],
                            ['choice_text' => 'Pour augmenter la valeur de l’actif afin de faciliter l’obtention de nouveaux crédits', 'is_correct' => false],
                            ['choice_text' => 'Pour permettre le suivi des achats de petit matériel et des fournitures consommées', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Que se passe-t-il généralement lorsqu’une immobilisation est amortie sur plusieurs années ?',
                        'explanation' => 'Son coût est progressivement réparti comme charge sur sa durée d’utilisation.',
                        'choices' => [
                            ['choice_text' => 'Son coût est entièrement comptabilisé en produit sur la période d’acquisition', 'is_correct' => false],
                            ['choice_text' => 'Sa valeur est réévaluée à la hausse chaque année par l’entreprise', 'is_correct' => false],
                            ['choice_text' => 'Une partie de son coût est progressivement comptabilisée en charge', 'is_correct' => true],
                            ['choice_text' => 'Elle est progressivement remboursée au fournisseur selon l’échéancier', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les entreprises investissent-elles dans des immobilisations ?',
                        'explanation' => 'Les immobilisations servent à soutenir durablement l’activité.',
                        'choices' => [
                            ['choice_text' => 'Pour revendre ces biens rapidement avec une marge', 'is_correct' => false],
                            ['choice_text' => 'Pour disposer de ressources durables utiles à leur activité', 'is_correct' => true],
                            ['choice_text' => 'Pour diminuer leurs charges d’exploitation dès l’année d’achat', 'is_correct' => false],
                            ['choice_text' => 'Pour améliorer immédiatement leur trésorerie disponible', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi l’amortissement influence-t-il le résultat ?',
                        'explanation' => 'L’amortissement constitue généralement une charge comptable qui réduit le résultat.',
                        'choices' => [
                            ['choice_text' => 'Parce qu’il constitue un décaissement enregistré à chaque période', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’il augmente les produits d’exploitation de la période', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’il constitue généralement une charge comptable', 'is_correct' => true],
                            ['choice_text' => 'Parce qu’il réduit directement le montant des dettes de l’entreprise', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la comptabilisation des immobilisations contribue-t-elle à présenter une image correcte de l’entreprise ?',
                        'explanation' => 'Elle permet de refléter les ressources durables et leur consommation au cours du temps.',
                        'choices' => [
                            ['choice_text' => 'Elle permet de représenter les ressources durables et leur consommation dans le temps', 'is_correct' => true],
                            ['choice_text' => 'Elle permet de répartir les bénéfices entre propriétaires selon leurs apports', 'is_correct' => false],
                            ['choice_text' => 'Elle permet de suivre les encaissements et décaissements liés aux biens durables de l’entreprise', 'is_correct' => false],
                            ['choice_text' => 'Elle permet de calculer la valeur de revente exacte des biens à chaque clôture', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Comptabilité financière — Clôture et régularisation des comptes',
                'description' => 'Découvrez les principes fondamentaux de la clôture comptable et des opérations de régularisation.',
                'questions' => [
                    [
                        'question' => 'Pourquoi une entreprise procède-t-elle à une clôture comptable ?',
                        'explanation' => 'La clôture permet notamment de déterminer le résultat d’une période et de préparer les états financiers.',
                        'choices' => [
                            ['choice_text' => 'Pour arrêter l’activité et répartir les actifs entre les propriétaires', 'is_correct' => false],
                            ['choice_text' => 'Pour effacer les écritures de la période et repartir d’un registre entièrement vierge', 'is_correct' => false],
                            ['choice_text' => 'Pour fixer le budget et les objectifs commerciaux de la période suivante', 'is_correct' => false],
                            ['choice_text' => 'Pour finaliser les comptes d’une période et préparer les états financiers', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi faut-il vérifier les comptes avant leur clôture ?',
                        'explanation' => 'La vérification permet de détecter les omissions, erreurs et anomalies.',
                        'choices' => [
                            ['choice_text' => 'Pour déterminer le montant des impôts à payer avant la production des déclarations fiscales', 'is_correct' => false],
                            ['choice_text' => 'Pour détecter les erreurs, omissions et anomalies avant la production des états financiers', 'is_correct' => true],
                            ['choice_text' => 'Pour obtenir le paiement des factures clients avant la fin de l’exercice', 'is_correct' => false],
                            ['choice_text' => 'Pour choisir les nouveaux investissements à réaliser sur l’exercice suivant', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce qu’une régularisation comptable ?',
                        'explanation' => 'Une régularisation permet d’ajuster les comptes pour rattacher correctement les opérations à la période concernée.',
                        'choices' => [
                            ['choice_text' => 'Une écriture qui régularise la situation de l’entreprise auprès de l’administration fiscale', 'is_correct' => false],
                            ['choice_text' => 'Une écriture qui corrige l’erreur d’un fournisseur sur une facture reçue', 'is_correct' => false],
                            ['choice_text' => 'Une écriture qui ajuste les comptes afin de présenter correctement la période concernée', 'is_correct' => true],
                            ['choice_text' => 'Une écriture qui enregistre le paiement différé d’une facture à son échéance', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi certaines charges doivent-elles être rattachées à une période même si elles seront payées plus tard ?',
                        'explanation' => 'La comptabilité d’engagement vise à rattacher les charges à la période à laquelle elles se rapportent.',
                        'choices' => [
                            ['choice_text' => 'Pour enregistrer les charges à la date exacte du paiement bancaire', 'is_correct' => false],
                            ['choice_text' => 'Pour reporter les charges sur l’exercice suivant et améliorer le résultat', 'is_correct' => false],
                            ['choice_text' => 'Pour respecter le rattachement des charges à la période concernée', 'is_correct' => true],
                            ['choice_text' => 'Pour limiter le montant des dettes affichées au bilan à la clôture', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi faut-il vérifier les créances clients avant la clôture ?',
                        'explanation' => 'Il faut s’assurer que les soldes sont réels, correctement évalués et correctement suivis.',
                        'choices' => [
                            ['choice_text' => 'Pour ajuster leur montant aux prévisions de ventes de l’exercice suivant', 'is_correct' => false],
                            ['choice_text' => 'Pour confirmer leur existence, leur exactitude et leur recouvrabilité', 'is_correct' => true],
                            ['choice_text' => 'Pour déterminer les remises qui seront accordées l’an prochain', 'is_correct' => false],
                            ['choice_text' => 'Pour vérifier le délai de paiement négocié avec les fournisseurs', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi vérifier les stocks à la clôture ?',
                        'explanation' => 'Les stocks doivent être correctement identifiés et évalués pour présenter une situation financière fiable.',
                        'choices' => [
                            ['choice_text' => 'Pour vérifier leur existence, leur quantité et leur évaluation comptable', 'is_correct' => true],
                            ['choice_text' => 'Pour déterminer les quantités à commander auprès des fournisseurs du secteur', 'is_correct' => false],
                            ['choice_text' => 'Pour amortir les stocks sur leur durée d’utilisation estimée en magasin', 'is_correct' => false],
                            ['choice_text' => 'Pour transférer les stocks vers les immobilisations de l’entreprise', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les comptes bancaires doivent-ils être rapprochés avant la clôture ?',
                        'explanation' => 'Cela permet d’assurer que la trésorerie comptable est correctement rapprochée des informations bancaires.',
                        'choices' => [
                            ['choice_text' => 'Pour s’assurer que les créances clients sont correctement recouvrées', 'is_correct' => false],
                            ['choice_text' => 'Pour calculer les intérêts que la banque versera à l’entreprise', 'is_correct' => false],
                            ['choice_text' => 'Pour s’assurer que les soldes de trésorerie sont correctement justifiés', 'is_correct' => true],
                            ['choice_text' => 'Pour réduire le montant des frais bancaires de l’exercice suivant', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les immobilisations doivent-elles être examinées à la clôture ?',
                        'explanation' => 'Il faut vérifier leur existence, leur état et les traitements comptables applicables.',
                        'choices' => [
                            ['choice_text' => 'Pour vérifier leur paiement intégral auprès des fournisseurs et leur affectation aux services', 'is_correct' => false],
                            ['choice_text' => 'Pour vérifier leur existence et la correcte prise en compte de leur amortissement ou de leur valeur', 'is_correct' => true],
                            ['choice_text' => 'Pour les réévaluer à la clôture au prix de revente observé sur le marché', 'is_correct' => false],
                            ['choice_text' => 'Pour contrôler que leur financement par emprunt a été intégralement remboursé', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les écritures de clôture doivent-elles être contrôlées ?',
                        'explanation' => 'Elles ont un impact direct sur les états financiers et le résultat.',
                        'choices' => [
                            ['choice_text' => 'Parce qu’elles modifient le montant des factures émises auprès des clients', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’elles influencent directement les comptes présentés dans les états financiers', 'is_correct' => true],
                            ['choice_text' => 'Parce qu’elles déterminent les prix de vente appliqués par l’entreprise à l’exercice suivant', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’elles remplacent les pièces justificatives lors des contrôles externes', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est l’objectif final d’une clôture comptable bien réalisée ?',
                        'explanation' => 'Elle doit produire des comptes cohérents, justifiés et représentatifs de la période.',
                        'choices' => [
                            ['choice_text' => 'Obtenir un résultat conforme au budget fixé par la direction pour l’exercice', 'is_correct' => false],
                            ['choice_text' => 'Réduire le nombre de comptes ouverts pour faciliter la gestion de l’exercice suivant', 'is_correct' => false],
                            ['choice_text' => 'Produire des états financiers cohérents, fiables et correctement rattachés à la période', 'is_correct' => true],
                            ['choice_text' => 'Présenter des comptes détaillant l’ensemble des opérations prévues pour la période suivante', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Comptabilité financière — États financiers et analyse de base',
                'description' => 'Appliquez les connaissances comptables à l’interprétation élémentaire des états financiers.',
                'questions' => [
                    [
                        'question' => 'Une entreprise possède 300 000 € d’actifs et 180 000 € de passifs. Quel montant correspond aux capitaux propres ?',
                        'explanation' => '300 000 € - 180 000 € = 120 000 €.',
                        'choices' => [
                            ['choice_text' => '120 000 €', 'is_correct' => true],
                            ['choice_text' => '180 000 €', 'is_correct' => false],
                            ['choice_text' => '300 000 €', 'is_correct' => false],
                            ['choice_text' => '480 000 €', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Si une entreprise réalise 150 000 € de produits et 110 000 € de charges, quel est son résultat simplifié ?',
                        'explanation' => '150 000 € - 110 000 € = 40 000 €.',
                        'choices' => [
                            ['choice_text' => '40 000 € de bénéfice', 'is_correct' => true],
                            ['choice_text' => '110 000 € de bénéfice', 'is_correct' => false],
                            ['choice_text' => '150 000 € de perte', 'is_correct' => false],
                            ['choice_text' => '260 000 € de bénéfice', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise possède beaucoup de créances mais peu de trésorerie. Quelle situation cela peut-il indiquer ?',
                        'explanation' => 'Les ventes peuvent être réalisées mais les encaissements tardent.',
                        'choices' => [
                            ['choice_text' => 'Les clients règlent leurs factures plus rapidement que les fournisseurs', 'is_correct' => false],
                            ['choice_text' => 'Les ventes ont été réalisées au comptant et la trésorerie a été distribuée', 'is_correct' => false],
                            ['choice_text' => 'Les dettes fournisseurs dépassent les capitaux propres de l’entreprise à la clôture', 'is_correct' => false],
                            ['choice_text' => 'Une partie importante des ressources est immobilisée dans les créances clients', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un analyste consulte-t-il le bilan et le compte de résultat ensemble ?',
                        'explanation' => 'Le bilan montre la situation à une date tandis que le compte de résultat explique la performance sur une période.',
                        'choices' => [
                            ['choice_text' => 'Pour calculer le résultat à partir des seuls actifs inscrits au bilan', 'is_correct' => false],
                            ['choice_text' => 'Pour relier la situation financière à la performance de la période', 'is_correct' => true],
                            ['choice_text' => 'Pour comparer la trésorerie réelle aux prévisions de la direction', 'is_correct' => false],
                            ['choice_text' => 'Pour vérifier que chaque écriture respecte le principe de la partie double', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une baisse des dettes fournisseurs peut-elle avoir un effet sur la trésorerie ?',
                        'explanation' => 'Le règlement des fournisseurs entraîne des décaissements.',
                        'choices' => [
                            ['choice_text' => 'Le règlement des dettes fournisseurs entraîne une entrée de trésorerie', 'is_correct' => false],
                            ['choice_text' => 'La baisse des dettes fournisseurs se traduit par une hausse des créances clients', 'is_correct' => false],
                            ['choice_text' => 'Le règlement des dettes fournisseurs entraîne une sortie de trésorerie', 'is_correct' => true],
                            ['choice_text' => 'Les dettes fournisseurs sont inscrites en trésorerie à la réception de la facture', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les capitaux propres peuvent-ils augmenter après un bénéfice non distribué ?',
                        'explanation' => 'Le bénéfice conservé appartient économiquement aux propriétaires et augmente les capitaux propres.',
                        'choices' => [
                            ['choice_text' => 'Parce que le bénéfice conservé est enregistré comme une dette envers les propriétaires', 'is_correct' => false],
                            ['choice_text' => 'Parce que le bénéfice conservé réduit les actifs et augmente les charges de l’exercice', 'is_correct' => false],
                            ['choice_text' => 'Parce que le bénéfice conservé est transformé en produit pour l’exercice suivant, sans effet sur l’actif', 'is_correct' => false],
                            ['choice_text' => 'Parce que le bénéfice conservé augmente généralement la part résiduelle des propriétaires', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les pertes peuvent-elles réduire les capitaux propres ?',
                        'explanation' => 'Une perte diminue généralement le résultat accumulé de l’entreprise.',
                        'choices' => [
                            ['choice_text' => 'Parce qu’elles réduisent généralement les ressources revenant aux propriétaires', 'is_correct' => true],
                            ['choice_text' => 'Parce qu’elles correspondent à des dividendes versés aux associés', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’elles diminuent le chiffre d’affaires cumulé de l’entreprise', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’elles sont comptabilisées comme un passif envers les propriétaires de l’entreprise', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la comparaison de plusieurs exercices est-elle utile ?',
                        'explanation' => 'Elle permet d’identifier les tendances et les changements de performance ou de structure.',
                        'choices' => [
                            ['choice_text' => 'Pour identifier les tendances et changements financiers', 'is_correct' => true],
                            ['choice_text' => 'Pour corriger les écritures des exercices passés', 'is_correct' => false],
                            ['choice_text' => 'Pour déterminer le montant exact des impôts à payer l’an prochain', 'is_correct' => false],
                            ['choice_text' => 'Pour calculer les amortissements des biens pour l’exercice suivant', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un seul indicateur financier ne suffit-il généralement pas pour juger une entreprise ?',
                        'explanation' => 'La santé financière comporte plusieurs dimensions : rentabilité, liquidité, solvabilité et efficacité.',
                        'choices' => [
                            ['choice_text' => 'Parce que les indicateurs financiers sont modifiés à la demande des actionnaires', 'is_correct' => false],
                            ['choice_text' => 'Parce que le bilan et le compte de résultat donnent des chiffres contradictoires', 'is_correct' => false],
                            ['choice_text' => 'Parce que la situation financière comporte plusieurs dimensions complémentaires', 'is_correct' => true],
                            ['choice_text' => 'Parce que les indicateurs sont calculés à partir de données trop anciennes', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel principe est essentiel pour interpréter les états financiers ?',
                        'explanation' => 'Ils doivent être interprétés en tenant compte du secteur, de l’historique et du contexte de l’entreprise.',
                        'choices' => [
                            ['choice_text' => 'Les interpréter à partir du seul résultat net de la dernière année', 'is_correct' => false],
                            ['choice_text' => 'Les comparer aux comptes d’entreprises de secteurs très différents', 'is_correct' => false],
                            ['choice_text' => 'Les interpréter avec leur contexte économique, historique et sectoriel', 'is_correct' => true],
                            ['choice_text' => 'Se fier au montant des actifs pour juger la rentabilité de l’entreprise', 'is_correct' => false],
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
