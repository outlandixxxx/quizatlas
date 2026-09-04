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

        $quizzes = [
            [
                'title' => 'Comptabilité financière — Introduction à la comptabilité',
                'description' => 'Découvrez les principes fondamentaux de la comptabilité financière et son rôle dans l’entreprise.',
                'questions' => [
                    [
                        'question' => 'Quel est l’objectif principal de la comptabilité financière ?',
                        'explanation' => 'La comptabilité financière consiste notamment à enregistrer, classer et présenter les opérations financières d’une organisation.',
                        'choices' => [
                            ['choice_text' => 'Enregistrer et présenter de manière structurée les opérations financières de l’entreprise', 'is_correct' => true],
                            ['choice_text' => 'Déterminer uniquement les salaires des employés', 'is_correct' => false],
                            ['choice_text' => 'Prévoir uniquement les ventes futures', 'is_correct' => false],
                            ['choice_text' => 'Gérer uniquement les stocks physiques', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'À qui les états financiers peuvent-ils notamment fournir des informations ?',
                        'explanation' => 'Les investisseurs, dirigeants, prêteurs et autres parties prenantes utilisent les informations financières pour prendre des décisions.',
                        'choices' => [
                            ['choice_text' => 'Aux investisseurs, prêteurs, dirigeants et autres parties prenantes', 'is_correct' => true],
                            ['choice_text' => 'Uniquement aux employés du service informatique', 'is_correct' => false],
                            ['choice_text' => 'Uniquement aux clients particuliers', 'is_correct' => false],
                            ['choice_text' => 'Uniquement aux fournisseurs de logiciels', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce qu’une opération comptable ?',
                        'explanation' => 'Une opération comptable est un événement économique ou financier qui peut être enregistré dans les comptes.',
                        'choices' => [
                            ['choice_text' => 'Un événement économique ou financier ayant un effet enregistrable dans les comptes', 'is_correct' => true],
                            ['choice_text' => 'Une conversation informelle entre deux employés', 'is_correct' => false],
                            ['choice_text' => 'Une prévision sans aucune donnée financière', 'is_correct' => false],
                            ['choice_text' => 'Une réunion administrative sans conséquence économique', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce qu’un compte comptable ?',
                        'explanation' => 'Un compte regroupe les opérations de même nature afin de suivre leur évolution.',
                        'choices' => [
                            ['choice_text' => 'Un outil permettant de regrouper et suivre des opérations de même nature', 'is_correct' => true],
                            ['choice_text' => 'Un document utilisé uniquement par les banques', 'is_correct' => false],
                            ['choice_text' => 'Un contrat commercial', 'is_correct' => false],
                            ['choice_text' => 'Une facture client', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel document présente la situation financière d’une entreprise à une date donnée ?',
                        'explanation' => 'Le bilan présente les actifs, passifs et capitaux propres à une date déterminée.',
                        'choices' => [
                            ['choice_text' => 'Le bilan', 'is_correct' => true],
                            ['choice_text' => 'Le budget commercial', 'is_correct' => false],
                            ['choice_text' => 'Le bon de commande', 'is_correct' => false],
                            ['choice_text' => 'Le relevé de présence', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel document présente principalement les produits, charges et résultat d’une période ?',
                        'explanation' => 'Le compte de résultat mesure la performance financière sur une période.',
                        'choices' => [
                            ['choice_text' => 'Le compte de résultat', 'is_correct' => true],
                            ['choice_text' => 'Le bilan', 'is_correct' => false],
                            ['choice_text' => 'Le registre des immobilisations uniquement', 'is_correct' => false],
                            ['choice_text' => 'Le contrat de travail', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la comptabilité utilise-t-elle des règles et méthodes structurées ?',
                        'explanation' => 'Des règles cohérentes permettent d’enregistrer et de présenter les informations de manière comparable et compréhensible.',
                        'choices' => [
                            ['choice_text' => 'Pour assurer une information financière cohérente et comparable', 'is_correct' => true],
                            ['choice_text' => 'Pour empêcher toute analyse financière', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer les transactions commerciales', 'is_correct' => false],
                            ['choice_text' => 'Pour remplacer complètement la gestion de l’entreprise', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle est la principale différence entre comptabilité financière et simple gestion de trésorerie ?',
                        'explanation' => 'La comptabilité financière ne suit pas uniquement les encaissements et décaissements ; elle applique des règles d’enregistrement plus larges.',
                        'choices' => [
                            ['choice_text' => 'La comptabilité financière couvre davantage d’éléments que les seuls mouvements de trésorerie', 'is_correct' => true],
                            ['choice_text' => 'La comptabilité financière ne concerne jamais l’argent', 'is_correct' => false],
                            ['choice_text' => 'La gestion de trésorerie remplace toujours les états financiers', 'is_correct' => false],
                            ['choice_text' => 'Les deux notions sont toujours strictement identiques', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les entreprises doivent-elles conserver des informations comptables organisées ?',
                        'explanation' => 'Une documentation structurée facilite le suivi, le contrôle, l’analyse et la préparation des états financiers.',
                        'choices' => [
                            ['choice_text' => 'Pour assurer le suivi, le contrôle et la préparation fiable des informations financières', 'is_correct' => true],
                            ['choice_text' => 'Pour éviter toute décision future', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer les documents commerciaux', 'is_correct' => false],
                            ['choice_text' => 'Pour remplacer les contrats', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle qualité est essentielle pour une information comptable utile ?',
                        'explanation' => 'Une information comptable utile doit notamment être fiable, pertinente et compréhensible.',
                        'choices' => [
                            ['choice_text' => 'Elle doit être fiable, pertinente et compréhensible', 'is_correct' => true],
                            ['choice_text' => 'Elle doit être volontairement complexe', 'is_correct' => false],
                            ['choice_text' => 'Elle doit être basée uniquement sur des estimations non documentées', 'is_correct' => false],
                            ['choice_text' => 'Elle doit être produite sans contrôle', 'is_correct' => false],
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
                            ['choice_text' => 'Une ressource économique contrôlée par l’entreprise', 'is_correct' => true],
                            ['choice_text' => 'Une dette envers un fournisseur', 'is_correct' => false],
                            ['choice_text' => 'Une charge de fonctionnement', 'is_correct' => false],
                            ['choice_text' => 'Une perte comptable', 'is_correct' => false],
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
                            ['choice_text' => 'Une ressource détenue par l’entreprise', 'is_correct' => false],
                            ['choice_text' => 'Une vente réalisée', 'is_correct' => false],
                            ['choice_text' => 'Un bénéfice distribué', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Lequel est un exemple de passif courant ?',
                        'explanation' => 'Les dettes fournisseurs sont généralement des obligations à court terme.',
                        'choices' => [
                            ['choice_text' => 'Les dettes fournisseurs', 'is_correct' => true],
                            ['choice_text' => 'Les stocks', 'is_correct' => false],
                            ['choice_text' => 'La trésorerie', 'is_correct' => false],
                            ['choice_text' => 'Les immobilisations', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Que représentent les capitaux propres ?',
                        'explanation' => 'Ils représentent l’intérêt résiduel des propriétaires après déduction des passifs des actifs.',
                        'choices' => [
                            ['choice_text' => 'L’intérêt résiduel des propriétaires dans l’entreprise', 'is_correct' => true],
                            ['choice_text' => 'Toutes les dettes de l’entreprise', 'is_correct' => false],
                            ['choice_text' => 'Uniquement les revenus de l’exercice', 'is_correct' => false],
                            ['choice_text' => 'Uniquement la trésorerie disponible', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle équation représente le principe comptable fondamental ?',
                        'explanation' => 'L’équation fondamentale est : Actifs = Passifs + Capitaux propres.',
                        'choices' => [
                            ['choice_text' => 'Actifs = Passifs + Capitaux propres', 'is_correct' => true],
                            ['choice_text' => 'Actifs = Revenus + Dépenses', 'is_correct' => false],
                            ['choice_text' => 'Passifs = Actifs + Capitaux propres', 'is_correct' => false],
                            ['choice_text' => 'Capitaux propres = Actifs + Passifs', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Si une entreprise possède 200 000 € d’actifs et 80 000 € de passifs, quels sont ses capitaux propres ?',
                        'explanation' => 'Capitaux propres = 200 000 € - 80 000 € = 120 000 €.',
                        'choices' => [
                            ['choice_text' => '120 000 €', 'is_correct' => true],
                            ['choice_text' => '80 000 €', 'is_correct' => false],
                            ['choice_text' => '200 000 €', 'is_correct' => false],
                            ['choice_text' => '280 000 €', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les stocks sont-ils généralement classés parmi les actifs ?',
                        'explanation' => 'Les stocks sont des ressources contrôlées par l’entreprise qui peuvent générer des avantages économiques futurs.',
                        'choices' => [
                            ['choice_text' => 'Ils représentent des ressources détenues pour être utilisées ou vendues', 'is_correct' => true],
                            ['choice_text' => 'Ils représentent toujours une dette', 'is_correct' => false],
                            ['choice_text' => 'Ils représentent une charge déjà consommée', 'is_correct' => false],
                            ['choice_text' => 'Ils représentent les capitaux propres', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une dette bancaire augmente-t-elle généralement les passifs ?',
                        'explanation' => 'L’emprunt crée une obligation de remboursement envers la banque.',
                        'choices' => [
                            ['choice_text' => 'Parce qu’il crée une obligation de remboursement envers la banque', 'is_correct' => true],
                            ['choice_text' => 'Parce qu’il augmente directement les revenus', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’il réduit toujours les actifs', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’il représente automatiquement un bénéfice', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel effet peut avoir un bénéfice conservé dans l’entreprise sur les capitaux propres ?',
                        'explanation' => 'Un bénéfice conservé augmente généralement les capitaux propres.',
                        'choices' => [
                            ['choice_text' => 'Il peut augmenter les capitaux propres', 'is_correct' => true],
                            ['choice_text' => 'Il diminue toujours les capitaux propres', 'is_correct' => false],
                            ['choice_text' => 'Il devient automatiquement une dette', 'is_correct' => false],
                            ['choice_text' => 'Il réduit toujours les actifs', 'is_correct' => false],
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
                            ['choice_text' => 'Les deux côtés d’une écriture comptable', 'is_correct' => true],
                            ['choice_text' => 'Deux types de bénéfices', 'is_correct' => false],
                            ['choice_text' => 'Deux catégories d’actifs uniquement', 'is_correct' => false],
                            ['choice_text' => 'Deux types de factures commerciales', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel principe doit respecter toute écriture comptable en partie double ?',
                        'explanation' => 'Le total des montants au débit doit être égal au total des montants au crédit.',
                        'choices' => [
                            ['choice_text' => 'Le total des débits doit être égal au total des crédits', 'is_correct' => true],
                            ['choice_text' => 'Le débit doit toujours être supérieur au crédit', 'is_correct' => false],
                            ['choice_text' => 'Le crédit doit toujours être supérieur au débit', 'is_correct' => false],
                            ['choice_text' => 'Une écriture ne peut contenir qu’un seul compte', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Lorsqu’une entreprise reçoit de l’argent comptant provenant d’une vente, quel compte d’actif augmente généralement ?', 'explanation' => 'La trésorerie augmente lorsque l’entreprise reçoit le paiement.',
                        'choices' => [
                            ['choice_text' => 'Le compte de trésorerie', 'is_correct' => true],
                            ['choice_text' => 'Le compte de dette fournisseur', 'is_correct' => false],
                            ['choice_text' => 'Le compte de capitaux propres uniquement', 'is_correct' => false],
                            ['choice_text' => 'Le compte de charge', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel document sert souvent de preuve à une opération comptable ?', 'explanation' => 'Une facture, un reçu ou un relevé bancaire peut servir de pièce justificative selon l’opération.',
                        'choices' => [
                            ['choice_text' => 'Une pièce justificative telle qu’une facture ou un reçu', 'is_correct' => true],
                            ['choice_text' => 'Une simple conversation orale non documentée', 'is_correct' => false],
                            ['choice_text' => 'Une publicité', 'is_correct' => false],
                            ['choice_text' => 'Un organigramme', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les écritures comptables doivent-elles être documentées ?', 'explanation' => 'La documentation facilite le contrôle, l’audit et la vérification des opérations.',
                        'choices' => [
                            ['choice_text' => 'Pour permettre de vérifier l’origine et la justification des opérations', 'is_correct' => true],
                            ['choice_text' => 'Pour empêcher toute opération future', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer les documents commerciaux', 'is_correct' => false],
                            ['choice_text' => 'Pour éviter la préparation des états financiers', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Lorsqu’une entreprise achète une machine en payant comptant, quels éléments sont principalement concernés ?', 'explanation' => 'Une immobilisation augmente tandis que la trésorerie diminue.',
                        'choices' => [
                            ['choice_text' => 'Une immobilisation augmente et la trésorerie diminue', 'is_correct' => true],
                            ['choice_text' => 'Les revenus augmentent et les dettes disparaissent', 'is_correct' => false],
                            ['choice_text' => 'Les capitaux propres augmentent automatiquement', 'is_correct' => false],
                            ['choice_text' => 'Les charges deviennent nulles', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Lorsqu’une entreprise reçoit une facture fournisseur non encore payée, quelle situation apparaît généralement ?', 'explanation' => 'Une dette fournisseur est constatée jusqu’au règlement de la facture.',
                        'choices' => [
                            ['choice_text' => 'Une dette fournisseur est enregistrée', 'is_correct' => true],
                            ['choice_text' => 'Une créance client est enregistrée', 'is_correct' => false],
                            ['choice_text' => 'La trésorerie augmente automatiquement', 'is_correct' => false],
                            ['choice_text' => 'Les capitaux propres augmentent automatiquement', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la partie double est-elle utile ?', 'explanation' => 'Elle permet de maintenir l’équilibre de l’équation comptable et de mieux contrôler les opérations.',
                        'choices' => [
                            ['choice_text' => 'Elle permet de conserver l’équilibre comptable et de suivre les effets des opérations', 'is_correct' => true],
                            ['choice_text' => 'Elle permet de supprimer les pièces justificatives', 'is_correct' => false],
                            ['choice_text' => 'Elle évite tout contrôle comptable', 'is_correct' => false],
                            ['choice_text' => 'Elle garantit automatiquement un bénéfice', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Que se passe-t-il si une écriture présente 1 500 € au débit et 1 500 € au crédit ?', 'explanation' => 'L’écriture est équilibrée du point de vue de la partie double.',
                        'choices' => [
                            ['choice_text' => 'L’écriture est équilibrée', 'is_correct' => true],
                            ['choice_text' => 'L’écriture est nécessairement fausse', 'is_correct' => false],
                            ['choice_text' => 'L’écriture augmente automatiquement le bénéfice', 'is_correct' => false],
                            ['choice_text' => 'L’écriture supprime tous les passifs', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi faut-il identifier correctement les comptes avant d’enregistrer une opération ?', 'explanation' => 'Une mauvaise classification peut fausser les états financiers.',
                        'choices' => [
                            ['choice_text' => 'Pour que l’opération soit classée correctement dans les états financiers', 'is_correct' => true],
                            ['choice_text' => 'Pour augmenter systématiquement les actifs', 'is_correct' => false],
                            ['choice_text' => 'Pour éviter toute écriture au crédit', 'is_correct' => false],
                            ['choice_text' => 'Pour transformer automatiquement les dépenses en actifs', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Comptabilité financière — Produits, charges et résultat',
                'description' => 'Comprenez la comptabilisation des produits, charges et du résultat de l’exercice.',
                'questions' => [
                    [
                        'question' => 'Qu’est-ce qu’un produit en comptabilité financière ?', 'explanation' => 'Un produit représente une augmentation des ressources économiques résultant notamment de l’activité.', 'choices' => [
                            ['choice_text' => 'Une augmentation des ressources économiques liée notamment à l’activité de l’entreprise', 'is_correct' => true],
                            ['choice_text' => 'Une dette envers un fournisseur', 'is_correct' => false],
                            ['choice_text' => 'Une sortie de trésorerie uniquement', 'is_correct' => false],
                            ['choice_text' => 'Une immobilisation achetée', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce qu’une charge ?', 'explanation' => 'Une charge représente une consommation ou diminution de ressources économiques liée à l’activité.', 'choices' => [
                            ['choice_text' => 'Une consommation ou diminution de ressources économiques', 'is_correct' => true],
                            ['choice_text' => 'Un apport en capital', 'is_correct' => false],
                            ['choice_text' => 'Une créance client', 'is_correct' => false],
                            ['choice_text' => 'Une nouvelle ressource financière', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Comment calcule-t-on généralement le résultat comptable simplifié ?', 'explanation' => 'Le résultat correspond aux produits moins les charges.', 'choices' => [
                            ['choice_text' => 'Produits moins charges', 'is_correct' => true],
                            ['choice_text' => 'Charges moins produits', 'is_correct' => false],
                            ['choice_text' => 'Actifs moins immobilisations', 'is_correct' => false],
                            ['choice_text' => 'Passifs plus capitaux propres', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Si les produits sont de 80 000 € et les charges de 65 000 €, quel est le résultat ?', 'explanation' => '80 000 € - 65 000 € = 15 000 € de bénéfice.',
                        'choices' => [
                            ['choice_text' => '15 000 € de bénéfice', 'is_correct' => true],
                            ['choice_text' => '65 000 € de bénéfice', 'is_correct' => false],
                            ['choice_text' => '80 000 € de perte', 'is_correct' => false],
                            ['choice_text' => '145 000 € de bénéfice', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Si les charges dépassent les produits, quel résultat apparaît généralement ?', 'explanation' => 'Lorsque les charges sont supérieures aux produits, l’entreprise réalise une perte.', 'choices' => [
                            ['choice_text' => 'Une perte', 'is_correct' => true],
                            ['choice_text' => 'Un bénéfice', 'is_correct' => false],
                            ['choice_text' => 'Un actif', 'is_correct' => false],
                            ['choice_text' => 'Une créance', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une charge peut-elle être comptabilisée avant son paiement ?', 'explanation' => 'La comptabilité d’engagement rattache les opérations à la période concernée, indépendamment du moment du paiement.', 'choices' => [
                            ['choice_text' => 'Parce que l’enregistrement comptable peut être lié à la période concernée et non uniquement au paiement', 'is_correct' => true],
                            ['choice_text' => 'Parce qu’une charge n’est jamais payée', 'is_correct' => false],
                            ['choice_text' => 'Parce que le paiement n’a aucun effet économique', 'is_correct' => false],
                            ['choice_text' => 'Parce que les dépenses sont toujours enregistrées après paiement', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une vente à crédit peut-elle constituer un produit avant l’encaissement ?', 'explanation' => 'Selon les règles comptables applicables, le produit peut être constaté lorsque les conditions de reconnaissance sont remplies.', 'choices' => [
                            ['choice_text' => 'Parce que la reconnaissance du produit n’est pas nécessairement liée au moment de l’encaissement', 'is_correct' => true],
                            ['choice_text' => 'Parce que les clients paient toujours immédiatement', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’une créance est un passif', 'is_correct' => false],
                            ['choice_text' => 'Parce que les ventes à crédit ne sont jamais comptabilisées', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi comparer les produits et charges par période ?', 'explanation' => 'Cela permet d’évaluer la performance de l’entreprise au cours de chaque période.', 'choices' => [
                            ['choice_text' => 'Pour mesurer l’évolution de la performance financière dans le temps', 'is_correct' => true],
                            ['choice_text' => 'Pour supprimer les dépenses', 'is_correct' => false],
                            ['choice_text' => 'Pour garantir un bénéfice futur', 'is_correct' => false],
                            ['choice_text' => 'Pour remplacer le bilan', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise augmente ses ventes mais ses charges progressent davantage. Quel effet peut apparaître ?', 'explanation' => 'Si les charges augmentent plus vite que les produits, le résultat peut diminuer.', 'choices' => [
                            ['choice_text' => 'Une diminution du bénéfice ou une augmentation de la perte', 'is_correct' => true],
                            ['choice_text' => 'Une hausse automatique des capitaux propres', 'is_correct' => false],
                            ['choice_text' => 'Une disparition des charges', 'is_correct' => false],
                            ['choice_text' => 'Une augmentation automatique de la trésorerie', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le rôle principal du compte de résultat ?', 'explanation' => 'Il explique comment les produits et charges conduisent au résultat de la période.', 'choices' => [
                            ['choice_text' => 'Présenter les produits, les charges et le résultat d’une période', 'is_correct' => true],
                            ['choice_text' => 'Présenter uniquement les actifs', 'is_correct' => false],
                            ['choice_text' => 'Présenter uniquement les dettes bancaires', 'is_correct' => false],
                            ['choice_text' => 'Présenter uniquement les flux de trésorerie', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Comptabilité financière — Achats, ventes et factures',
                'description' => 'Maîtrisez les opérations courantes liées aux achats, aux ventes et aux factures.',
                'questions' => [
                    [
                        'question' => 'Quel document est généralement émis par un vendeur pour demander le paiement d’une vente ?', 'explanation' => 'La facture formalise généralement le montant dû par le client.', 'choices' => [
                            ['choice_text' => 'La facture', 'is_correct' => true],
                            ['choice_text' => 'Le bilan', 'is_correct' => false],
                            ['choice_text' => 'Le compte de résultat', 'is_correct' => false],
                            ['choice_text' => 'Le budget annuel', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Lorsqu’une entreprise vend à crédit, quel élément apparaît généralement ?', 'explanation' => 'Une créance client est constatée jusqu’au paiement.', 'choices' => [
                            ['choice_text' => 'Une créance client', 'is_correct' => true],
                            ['choice_text' => 'Une dette fournisseur', 'is_correct' => false],
                            ['choice_text' => 'Une diminution automatique des actifs', 'is_correct' => false],
                            ['choice_text' => 'Une augmentation des charges sans autre effet', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Lorsqu’une entreprise achète des marchandises à crédit, quelle obligation apparaît généralement ?', 'explanation' => 'L’entreprise doit payer le fournisseur ultérieurement.', 'choices' => [
                            ['choice_text' => 'Une dette fournisseur', 'is_correct' => true],
                            ['choice_text' => 'Une créance client', 'is_correct' => false],
                            ['choice_text' => 'Un bénéfice', 'is_correct' => false],
                            ['choice_text' => 'Une augmentation automatique des capitaux propres', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les factures sont-elles importantes en comptabilité ?', 'explanation' => 'Elles constituent des pièces justificatives pour les opérations commerciales.', 'choices' => [
                            ['choice_text' => 'Elles servent de pièces justificatives pour les opérations commerciales', 'is_correct' => true],
                            ['choice_text' => 'Elles remplacent tous les états financiers', 'is_correct' => false],
                            ['choice_text' => 'Elles garantissent toujours le paiement', 'is_correct' => false],
                            ['choice_text' => 'Elles déterminent automatiquement le bénéfice', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une entreprise doit-elle contrôler les factures reçues ?', 'explanation' => 'Le contrôle permet de vérifier la réalité, l’exactitude et l’autorisation des dépenses.', 'choices' => [
                            ['choice_text' => 'Pour vérifier leur exactitude, leur justification et leur conformité', 'is_correct' => true],
                            ['choice_text' => 'Pour augmenter automatiquement les charges', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer toutes les dettes fournisseurs', 'is_correct' => false],
                            ['choice_text' => 'Pour éviter toute relation commerciale', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce qu’une remise commerciale ?', 'explanation' => 'Une remise est une réduction accordée sur le prix ou le montant d’une opération commerciale.', 'choices' => [
                            ['choice_text' => 'Une réduction accordée sur le prix d’une opération', 'is_correct' => true],
                            ['choice_text' => 'Une nouvelle dette bancaire', 'is_correct' => false],
                            ['choice_text' => 'Une taxe supplémentaire', 'is_correct' => false],
                            ['choice_text' => 'Un apport en capital', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une facture fournisseur non encore payée constitue-t-elle une obligation ?', 'explanation' => 'L’entreprise doit encore régler le montant dû au fournisseur.', 'choices' => [
                            ['choice_text' => 'Parce que l’entreprise doit encore régler le montant facturé', 'is_correct' => true],
                            ['choice_text' => 'Parce que le fournisseur doit payer l’entreprise', 'is_correct' => false],
                            ['choice_text' => 'Parce que la facture est déjà un bénéfice', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’elle représente automatiquement une immobilisation', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi le rapprochement entre factures, commandes et réceptions peut-il être utile ?', 'explanation' => 'Il permet de vérifier que les biens ou services facturés correspondent aux opérations réellement réalisées.', 'choices' => [
                            ['choice_text' => 'Pour contrôler la réalité et l’exactitude des achats', 'is_correct' => true],
                            ['choice_text' => 'Pour augmenter les commandes', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer le contrôle interne', 'is_correct' => false],
                            ['choice_text' => 'Pour éviter la comptabilisation des factures', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi le délai de paiement d’une facture est-il important pour la trésorerie ?', 'explanation' => 'Le délai détermine la date à laquelle l’entreprise encaisse ou décaisse les liquidités.', 'choices' => [
                            ['choice_text' => 'Il influence le moment des encaissements ou décaissements', 'is_correct' => true],
                            ['choice_text' => 'Il change automatiquement le montant de la facture', 'is_correct' => false],
                            ['choice_text' => 'Il supprime les créances', 'is_correct' => false],
                            ['choice_text' => 'Il garantit un bénéfice plus élevé', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les ventes et achats doivent-ils être correctement documentés ?', 'explanation' => 'Une documentation complète facilite le contrôle, la justification et l’établissement des comptes.', 'choices' => [
                            ['choice_text' => 'Pour assurer la traçabilité et la fiabilité des opérations comptables', 'is_correct' => true],
                            ['choice_text' => 'Pour éviter toute analyse financière', 'is_correct' => false],
                            ['choice_text' => 'Pour empêcher les ventes à crédit', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer les obligations fiscales', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Comptabilité financière — Créances clients et dettes fournisseurs',
                'description' => 'Comprenez la gestion comptable des créances clients et des obligations fournisseurs.',
                'questions' => [
                    [
                        'question' => 'Qu’est-ce qu’une créance client ?', 'explanation' => 'Une créance client représente une somme que les clients doivent à l’entreprise.', 'choices' => [
                            ['choice_text' => 'Une somme due par un client à l’entreprise', 'is_correct' => true],
                            ['choice_text' => 'Une dette de l’entreprise envers un fournisseur', 'is_correct' => false],
                            ['choice_text' => 'Un apport des actionnaires', 'is_correct' => false],
                            ['choice_text' => 'Une charge salariale', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce qu’une dette fournisseur ?', 'explanation' => 'Elle représente une somme que l’entreprise doit à un fournisseur.', 'choices' => [
                            ['choice_text' => 'Une somme due par l’entreprise à un fournisseur', 'is_correct' => true],
                            ['choice_text' => 'Une somme due par un client', 'is_correct' => false],
                            ['choice_text' => 'Une immobilisation', 'is_correct' => false],
                            ['choice_text' => 'Une réserve de trésorerie', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi suivre l’âge des créances ?', 'explanation' => 'Une créance ancienne peut présenter un risque plus important de retard ou de non-recouvrement.', 'choices' => [
                            ['choice_text' => 'Pour détecter les créances susceptibles de devenir difficiles à recouvrer', 'is_correct' => true],
                            ['choice_text' => 'Pour augmenter automatiquement les ventes', 'is_correct' => false],
                            ['choice_text' => 'Pour diminuer les actifs courants', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer les factures', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une entreprise accorde-t-elle parfois un délai de paiement à ses clients ?', 'explanation' => 'Le crédit client peut soutenir les ventes ou être une pratique commerciale du secteur.', 'choices' => [
                            ['choice_text' => 'Pour faciliter les ventes ou respecter les pratiques commerciales', 'is_correct' => true],
                            ['choice_text' => 'Pour garantir que les clients ne paieront jamais', 'is_correct' => false],
                            ['choice_text' => 'Pour réduire toujours la rentabilité', 'is_correct' => false],
                            ['choice_text' => 'Pour transformer toutes les ventes en pertes', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel risque apparaît lorsqu’une créance client devient difficile à recouvrer ?', 'explanation' => 'L’entreprise peut devoir constater une perte ou une dépréciation selon les règles applicables.', 'choices' => [
                            ['choice_text' => 'Un risque de perte financière lié au non-recouvrement', 'is_correct' => true],
                            ['choice_text' => 'Une augmentation automatique de la trésorerie', 'is_correct' => false],
                            ['choice_text' => 'Une réduction des dettes fournisseurs', 'is_correct' => false],
                            ['choice_text' => 'Une hausse automatique des capitaux propres', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une entreprise peut-elle négocier des délais de paiement avec ses fournisseurs ?', 'explanation' => 'Des délais adaptés peuvent aider à gérer les sorties de trésorerie.', 'choices' => [
                            ['choice_text' => 'Pour organiser ses décaissements et gérer sa trésorerie', 'is_correct' => true],
                            ['choice_text' => 'Pour supprimer les obligations envers les fournisseurs', 'is_correct' => false],
                            ['choice_text' => 'Pour transformer les dettes en revenus', 'is_correct' => false],
                            ['choice_text' => 'Pour éviter toute comptabilisation', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une croissance rapide des créances peut-elle être préoccupante ?', 'explanation' => 'Elle peut signaler un recouvrement plus lent ou des conditions de crédit plus généreuses.', 'choices' => [
                            ['choice_text' => 'Elle peut immobiliser davantage de trésorerie et augmenter le risque de crédit', 'is_correct' => true],
                            ['choice_text' => 'Elle garantit toujours une meilleure liquidité', 'is_correct' => false],
                            ['choice_text' => 'Elle réduit toujours les besoins de financement', 'is_correct' => false],
                            ['choice_text' => 'Elle supprime les ventes à crédit', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi rapprocher périodiquement les comptes clients des documents commerciaux ?', 'explanation' => 'Le rapprochement peut permettre de détecter des erreurs ou des soldes incorrects.', 'choices' => [
                            ['choice_text' => 'Pour détecter les erreurs et confirmer la réalité des soldes', 'is_correct' => true],
                            ['choice_text' => 'Pour augmenter automatiquement les créances', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer les factures impayées', 'is_correct' => false],
                            ['choice_text' => 'Pour empêcher les encaissements', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les dettes fournisseurs sont-elles utiles à analyser dans le cycle d’exploitation ?', 'explanation' => 'Elles représentent une source de financement opérationnel à court terme.', 'choices' => [
                            ['choice_text' => 'Parce qu’elles influencent le calendrier des décaissements et le financement de l’exploitation', 'is_correct' => true],
                            ['choice_text' => 'Parce qu’elles représentent toujours un bénéfice', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’elles ne seront jamais payées', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’elles sont des actifs', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel principe résume une bonne gestion comptable des créances et dettes ?', 'explanation' => 'Il faut assurer l’exactitude, le suivi, le recouvrement et le paiement dans les délais.', 'choices' => [
                            ['choice_text' => 'Suivre précisément les soldes, les échéances et les risques de recouvrement ou de paiement', 'is_correct' => true],
                            ['choice_text' => 'Ignorer les échéances', 'is_correct' => false],
                            ['choice_text' => 'Conserver toutes les créances indéfiniment', 'is_correct' => false],
                            ['choice_text' => 'Payer tous les fournisseurs immédiatement sans analyse', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Comptabilité financière — Trésorerie et rapprochement bancaire',
                'description' => 'Maîtrisez les principes fondamentaux du suivi de trésorerie et du rapprochement bancaire.',
                'questions' => [
                    [
                        'question' => 'Qu’est-ce qu’un rapprochement bancaire ?', 'explanation' => 'Il consiste à comparer les enregistrements comptables de trésorerie avec les relevés bancaires.', 'choices' => [
                            ['choice_text' => 'Une comparaison entre les écritures comptables et le relevé bancaire', 'is_correct' => true],
                            ['choice_text' => 'Une comparaison entre les ventes et les stocks', 'is_correct' => false],
                            ['choice_text' => 'Une comparaison entre les employés et les clients', 'is_correct' => false],
                            ['choice_text' => 'Une comparaison entre les immobilisations et les capitaux propres', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les soldes comptables et bancaires peuvent-ils être différents temporairement ?', 'explanation' => 'Certaines opérations peuvent être enregistrées à des dates différentes.', 'choices' => [
                            ['choice_text' => 'Certaines opérations peuvent être enregistrées ou traitées à des dates différentes', 'is_correct' => true],
                            ['choice_text' => 'Les deux soldes doivent toujours être différents', 'is_correct' => false],
                            ['choice_text' => 'Les banques ne conservent aucune information', 'is_correct' => false],
                            ['choice_text' => 'La comptabilité n’enregistre jamais la trésorerie', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un rapprochement bancaire régulier est-il important ?', 'explanation' => 'Il permet de détecter les erreurs, omissions et opérations inhabituelles.', 'choices' => [
                            ['choice_text' => 'Pour identifier les écarts, erreurs ou opérations non enregistrées', 'is_correct' => true],
                            ['choice_text' => 'Pour augmenter automatiquement la trésorerie', 'is_correct' => false],
                            ['choice_text' => 'Pour éviter les paiements', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer les relevés bancaires', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce qu’un chèque ou paiement enregistré en comptabilité mais pas encore débité par la banque ?', 'explanation' => 'Il peut créer temporairement un écart entre le solde comptable et le relevé bancaire.', 'choices' => [
                            ['choice_text' => 'Une opération en circulation', 'is_correct' => true],
                            ['choice_text' => 'Une immobilisation', 'is_correct' => false],
                            ['choice_text' => 'Un produit exceptionnel', 'is_correct' => false],
                            ['choice_text' => 'Une créance client', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les frais bancaires doivent-ils être enregistrés en comptabilité ?', 'explanation' => 'Ils représentent une charge engagée par l’entreprise.', 'choices' => [
                            ['choice_text' => 'Parce qu’ils constituent une charge financière ou bancaire à comptabiliser', 'is_correct' => true],
                            ['choice_text' => 'Parce qu’ils augmentent automatiquement le chiffre d’affaires', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’ils sont toujours des actifs', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’ils représentent des capitaux propres', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une différence inhabituelle lors d’un rapprochement bancaire doit-elle être examinée ?', 'explanation' => 'Elle peut signaler une erreur, une opération oubliée ou une transaction inhabituelle.', 'choices' => [
                            ['choice_text' => 'Elle peut révéler une erreur, une omission ou une opération inhabituelle', 'is_correct' => true],
                            ['choice_text' => 'Elle signifie toujours que la banque a commis une fraude', 'is_correct' => false],
                            ['choice_text' => 'Elle garantit une hausse de la trésorerie', 'is_correct' => false],
                            ['choice_text' => 'Elle n’a jamais d’importance', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la trésorerie disponible ne doit-elle pas être confondue avec le bénéfice ?', 'explanation' => 'Le bénéfice comptable et les flux de trésorerie suivent des logiques différentes.', 'choices' => [
                            ['choice_text' => 'Parce que le bénéfice peut inclure des opérations qui ne produisent pas immédiatement un mouvement de trésorerie', 'is_correct' => true],
                            ['choice_text' => 'Parce que la trésorerie est toujours supérieure au bénéfice', 'is_correct' => false],
                            ['choice_text' => 'Parce que le bénéfice n’existe jamais en comptabilité', 'is_correct' => false],
                            ['choice_text' => 'Parce que toutes les ventes sont toujours encaissées immédiatement', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les encaissements clients influencent-ils le solde bancaire ?', 'explanation' => 'Lorsqu’un client paie, les liquidités disponibles augmentent.', 'choices' => [
                            ['choice_text' => 'Ils augmentent généralement la trésorerie disponible', 'is_correct' => true],
                            ['choice_text' => 'Ils réduisent automatiquement les actifs', 'is_correct' => false],
                            ['choice_text' => 'Ils augmentent toujours les dettes', 'is_correct' => false],
                            ['choice_text' => 'Ils diminuent toujours les capitaux propres', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les paiements fournisseurs doivent-ils être rapprochés des dettes comptables ?', 'explanation' => 'Le rapprochement permet de s’assurer que les obligations ont été correctement enregistrées et réglées.', 'choices' => [
                            ['choice_text' => 'Pour vérifier que les paiements correspondent aux obligations comptabilisées', 'is_correct' => true],
                            ['choice_text' => 'Pour augmenter les dettes fournisseurs', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer les pièces justificatives', 'is_correct' => false],
                            ['choice_text' => 'Pour éviter toute sortie de trésorerie', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est l’objectif général du rapprochement bancaire ?', 'explanation' => 'Il permet d’améliorer la fiabilité du solde de trésorerie présenté dans la comptabilité.', 'choices' => [
                            ['choice_text' => 'S’assurer que les informations de trésorerie enregistrées sont cohérentes avec les mouvements bancaires', 'is_correct' => true],
                            ['choice_text' => 'Garantir que la banque ne facturera jamais de frais', 'is_correct' => false],
                            ['choice_text' => 'Augmenter le chiffre d’affaires', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les transactions bancaires', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Comptabilité financière — Immobilisations et amortissement',
                'description' => 'Comprenez le traitement comptable élémentaire des immobilisations et de leur amortissement.',
                'questions' => [
                    [
                        'question' => 'Qu’est-ce qu’une immobilisation ?', 'explanation' => 'Une immobilisation est un actif destiné à être utilisé durablement par l’entreprise.', 'choices' => [
                            ['choice_text' => 'Un actif destiné à être utilisé durablement dans l’activité', 'is_correct' => true],
                            ['choice_text' => 'Une dette à court terme', 'is_correct' => false],
                            ['choice_text' => 'Une charge de consommation immédiate', 'is_correct' => false],
                            ['choice_text' => 'Un produit financier', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Lequel est généralement une immobilisation corporelle ?', 'explanation' => 'Une machine est un bien physique utilisé durablement dans l’activité.', 'choices' => [
                            ['choice_text' => 'Une machine', 'is_correct' => true],
                            ['choice_text' => 'Une facture client impayée', 'is_correct' => false],
                            ['choice_text' => 'Une dette fournisseur', 'is_correct' => false],
                            ['choice_text' => 'Un salaire à payer', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi l’amortissement est-il comptabilisé ?', 'explanation' => 'Il permet de répartir le coût d’une immobilisation sur sa durée d’utilisation prévue.', 'choices' => [
                            ['choice_text' => 'Pour répartir le coût d’une immobilisation sur sa durée d’utilisation', 'is_correct' => true],
                            ['choice_text' => 'Pour augmenter sa valeur de marché', 'is_correct' => false],
                            ['choice_text' => 'Pour transformer l’immobilisation en trésorerie', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer l’actif dès son acquisition', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'L’amortissement représente-t-il nécessairement une sortie de trésorerie de chaque période ?', 'explanation' => 'L’amortissement est généralement une charge comptable sans nouveau décaissement correspondant chaque période.', 'choices' => [
                            ['choice_text' => 'Non, il représente généralement une charge comptable sans nouveau décaissement périodique', 'is_correct' => true],
                            ['choice_text' => 'Oui, toujours un paiement bancaire identique', 'is_correct' => false],
                            ['choice_text' => 'Oui, toujours un paiement en espèces', 'is_correct' => false],
                            ['choice_text' => 'Oui, toujours une dette nouvelle', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la durée d’utilisation estimée d’une immobilisation est-elle importante ?', 'explanation' => 'Elle influence la répartition du coût dans le temps.', 'choices' => [
                            ['choice_text' => 'Elle influence la période sur laquelle le coût est réparti', 'is_correct' => true],
                            ['choice_text' => 'Elle détermine automatiquement les ventes', 'is_correct' => false],
                            ['choice_text' => 'Elle détermine le chiffre d’affaires', 'is_correct' => false],
                            ['choice_text' => 'Elle transforme les actifs en passifs', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une entreprise doit-elle identifier correctement une immobilisation ?', 'explanation' => 'Une mauvaise classification peut fausser les charges et la valeur des actifs.', 'choices' => [
                            ['choice_text' => 'Pour appliquer un traitement comptable approprié et représenter correctement la situation financière', 'is_correct' => true],
                            ['choice_text' => 'Pour augmenter automatiquement les revenus', 'is_correct' => false],
                            ['choice_text' => 'Pour éviter toute dépense', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer les capitaux propres', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Que se passe-t-il généralement lorsqu’une immobilisation est amortie sur plusieurs années ?', 'explanation' => 'Son coût est progressivement réparti comme charge sur sa durée d’utilisation.', 'choices' => [
                            ['choice_text' => 'Une partie de son coût est progressivement comptabilisée en charge', 'is_correct' => true],
                            ['choice_text' => 'Son coût devient immédiatement un revenu', 'is_correct' => false],
                            ['choice_text' => 'Elle devient automatiquement une dette', 'is_correct' => false],
                            ['choice_text' => 'Elle disparaît automatiquement du patrimoine dès la première année', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les entreprises investissent-elles dans des immobilisations ?', 'explanation' => 'Les immobilisations servent à soutenir durablement l’activité.', 'choices' => [
                            ['choice_text' => 'Pour disposer de ressources durables utiles à leur activité', 'is_correct' => true],
                            ['choice_text' => 'Pour éviter toutes les charges', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer les ventes', 'is_correct' => false],
                            ['choice_text' => 'Pour remplacer tous les salariés', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi l’amortissement influence-t-il le résultat ?', 'explanation' => 'L’amortissement constitue généralement une charge comptable qui réduit le résultat.', 'choices' => [
                            ['choice_text' => 'Parce qu’il constitue généralement une charge comptable', 'is_correct' => true],
                            ['choice_text' => 'Parce qu’il constitue toujours un produit', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’il augmente toujours les ventes', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’il représente un encaissement', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la comptabilisation des immobilisations contribue-t-elle à présenter une image correcte de l’entreprise ?', 'explanation' => 'Elle permet de refléter les ressources durables et leur consommation au cours du temps.', 'choices' => [
                            ['choice_text' => 'Elle permet de représenter les ressources durables et leur consommation dans le temps', 'is_correct' => true],
                            ['choice_text' => 'Elle garantit une augmentation du bénéfice', 'is_correct' => false],
                            ['choice_text' => 'Elle supprime les dettes', 'is_correct' => false],
                            ['choice_text' => 'Elle transforme les immobilisations en revenus', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Comptabilité financière — Clôture et régularisation des comptes',
                'description' => 'Découvrez les principes fondamentaux de la clôture comptable et des opérations de régularisation.',
                'questions' => [
                    [
                        'question' => 'Pourquoi une entreprise procède-t-elle à une clôture comptable ?', 'explanation' => 'La clôture permet notamment de déterminer le résultat d’une période et de préparer les états financiers.', 'choices' => [
                            ['choice_text' => 'Pour finaliser les comptes d’une période et préparer les états financiers', 'is_correct' => true],
                            ['choice_text' => 'Pour supprimer toutes les écritures', 'is_correct' => false],
                            ['choice_text' => 'Pour empêcher toute activité future', 'is_correct' => false],
                            ['choice_text' => 'Pour annuler automatiquement les dettes', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi faut-il vérifier les comptes avant leur clôture ?', 'explanation' => 'La vérification permet de détecter les omissions, erreurs et anomalies.', 'choices' => [
                            ['choice_text' => 'Pour détecter les erreurs, omissions et anomalies avant la production des états financiers', 'is_correct' => true],
                            ['choice_text' => 'Pour augmenter automatiquement les bénéfices', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer les pièces justificatives', 'is_correct' => false],
                            ['choice_text' => 'Pour éviter toute comparaison historique', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce qu’une régularisation comptable ?', 'explanation' => 'Une régularisation permet d’ajuster les comptes pour rattacher correctement les opérations à la période concernée.', 'choices' => [
                            ['choice_text' => 'Une écriture qui ajuste les comptes afin de présenter correctement la période concernée', 'is_correct' => true],
                            ['choice_text' => 'Une suppression d’une transaction valide', 'is_correct' => false],
                            ['choice_text' => 'Une augmentation automatique du chiffre d’affaires', 'is_correct' => false],
                            ['choice_text' => 'Un transfert entre banques', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi certaines charges doivent-elles être rattachées à une période même si elles seront payées plus tard ?', 'explanation' => 'La comptabilité d’engagement vise à rattacher les charges à la période à laquelle elles se rapportent.', 'choices' => [
                            ['choice_text' => 'Pour respecter le rattachement des charges à la période concernée', 'is_correct' => true],
                            ['choice_text' => 'Parce que les paiements futurs n’existent jamais', 'is_correct' => false],
                            ['choice_text' => 'Pour augmenter artificiellement le bénéfice', 'is_correct' => false],
                            ['choice_text' => 'Pour éviter toute dette', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi faut-il vérifier les créances clients avant la clôture ?', 'explanation' => 'Il faut s’assurer que les soldes sont réels, correctement évalués et correctement suivis.', 'choices' => [
                            ['choice_text' => 'Pour confirmer leur existence, leur exactitude et leur recouvrabilité', 'is_correct' => true],
                            ['choice_text' => 'Pour augmenter leur montant automatiquement', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer toutes les créances', 'is_correct' => false],
                            ['choice_text' => 'Pour les transformer en passifs', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi vérifier les stocks à la clôture ?', 'explanation' => 'Les stocks doivent être correctement identifiés et évalués pour présenter une situation financière fiable.', 'choices' => [
                            ['choice_text' => 'Pour vérifier leur existence, leur quantité et leur évaluation comptable', 'is_correct' => true],
                            ['choice_text' => 'Pour augmenter systématiquement leur valeur', 'is_correct' => false],
                            ['choice_text' => 'Pour les supprimer du bilan', 'is_correct' => false],
                            ['choice_text' => 'Pour convertir automatiquement les stocks en trésorerie', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les comptes bancaires doivent-ils être rapprochés avant la clôture ?', 'explanation' => 'Cela permet d’assurer que la trésorerie comptable est correctement rapprochée des informations bancaires.', 'choices' => [
                            ['choice_text' => 'Pour s’assurer que les soldes de trésorerie sont correctement justifiés', 'is_correct' => true],
                            ['choice_text' => 'Pour empêcher les mouvements bancaires', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer les frais bancaires', 'is_correct' => false],
                            ['choice_text' => 'Pour augmenter les capitaux propres', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les immobilisations doivent-elles être examinées à la clôture ?', 'explanation' => 'Il faut vérifier leur existence, leur état et les traitements comptables applicables.', 'choices' => [
                            ['choice_text' => 'Pour vérifier leur existence et la correcte prise en compte de leur amortissement ou de leur valeur', 'is_correct' => true],
                            ['choice_text' => 'Pour supprimer toutes les immobilisations anciennes', 'is_correct' => false],
                            ['choice_text' => 'Pour augmenter automatiquement leur valeur', 'is_correct' => false],
                            ['choice_text' => 'Pour transformer les immobilisations en charges immédiatement', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les écritures de clôture doivent-elles être contrôlées ?', 'explanation' => 'Elles ont un impact direct sur les états financiers et le résultat.', 'choices' => [
                            ['choice_text' => 'Parce qu’elles influencent directement les comptes présentés dans les états financiers', 'is_correct' => true],
                            ['choice_text' => 'Parce qu’elles n’ont jamais d’impact financier', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer les exercices antérieurs', 'is_correct' => false],
                            ['choice_text' => 'Pour empêcher toute analyse', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est l’objectif final d’une clôture comptable bien réalisée ?', 'explanation' => 'Elle doit produire des comptes cohérents, justifiés et représentatifs de la période.', 'choices' => [
                            ['choice_text' => 'Produire des états financiers cohérents, fiables et correctement rattachés à la période', 'is_correct' => true],
                            ['choice_text' => 'Maximiser artificiellement le bénéfice', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les écritures complexes', 'is_correct' => false],
                            ['choice_text' => 'Éviter tout contrôle futur', 'is_correct' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Comptabilité financière — États financiers et analyse de base',
                'description' => 'Appliquez les connaissances comptables à l’interprétation élémentaire des états financiers.',
                'questions' => [
                    [
                        'question' => 'Une entreprise possède 300 000 € d’actifs et 180 000 € de passifs. Quel montant correspond aux capitaux propres ?', 'explanation' => '300 000 € - 180 000 € = 120 000 €.', 'choices' => [
                            ['choice_text' => '120 000 €', 'is_correct' => true],
                            ['choice_text' => '180 000 €', 'is_correct' => false],
                            ['choice_text' => '300 000 €', 'is_correct' => false],
                            ['choice_text' => '480 000 €', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Si une entreprise réalise 150 000 € de produits et 110 000 € de charges, quel est son résultat simplifié ?', 'explanation' => '150 000 € - 110 000 € = 40 000 €.', 'choices' => [
                            ['choice_text' => '40 000 € de bénéfice', 'is_correct' => true],
                            ['choice_text' => '110 000 € de bénéfice', 'is_correct' => false],
                            ['choice_text' => '150 000 € de perte', 'is_correct' => false],
                            ['choice_text' => '260 000 € de bénéfice', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise possède beaucoup de créances mais peu de trésorerie. Quelle situation cela peut-il indiquer ?', 'explanation' => 'Les ventes peuvent être réalisées mais les encaissements tardent.', 'choices' => [
                            ['choice_text' => 'Une partie importante des ressources est immobilisée dans les créances clients', 'is_correct' => true],
                            ['choice_text' => 'Les clients ont déjà payé toutes les factures', 'is_correct' => false],
                            ['choice_text' => 'Les dettes sont nécessairement nulles', 'is_correct' => false],
                            ['choice_text' => 'La trésorerie est automatiquement plus élevée que les créances', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un analyste consulte-t-il le bilan et le compte de résultat ensemble ?', 'explanation' => 'Le bilan montre la situation à une date tandis que le compte de résultat explique la performance sur une période.', 'choices' => [
                            ['choice_text' => 'Pour relier la situation financière à la performance de la période', 'is_correct' => true],
                            ['choice_text' => 'Parce que les deux documents sont identiques', 'is_correct' => false],
                            ['choice_text' => 'Pour éviter toute analyse de trésorerie', 'is_correct' => false],
                            ['choice_text' => 'Parce que le bilan contient toutes les ventes futures', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une baisse des dettes fournisseurs peut-elle avoir un effet sur la trésorerie ?', 'explanation' => 'Le règlement des fournisseurs entraîne des décaissements.', 'choices' => [
                            ['choice_text' => 'Le règlement des dettes fournisseurs entraîne une sortie de trésorerie', 'is_correct' => true],
                            ['choice_text' => 'La diminution des dettes augmente toujours le cash', 'is_correct' => false],
                            ['choice_text' => 'Les dettes fournisseurs sont des actifs', 'is_correct' => false],
                            ['choice_text' => 'Les paiements fournisseurs créent toujours un bénéfice', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les capitaux propres peuvent-ils augmenter après un bénéfice non distribué ?', 'explanation' => 'Le bénéfice conservé appartient économiquement aux propriétaires et augmente les capitaux propres.', 'choices' => [
                            ['choice_text' => 'Parce que le bénéfice conservé augmente généralement la part résiduelle des propriétaires', 'is_correct' => true],
                            ['choice_text' => 'Parce que les dettes augmentent', 'is_correct' => false],
                            ['choice_text' => 'Parce que les charges augmentent', 'is_correct' => false],
                            ['choice_text' => 'Parce que les actifs diminuent automatiquement', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les pertes peuvent-elles réduire les capitaux propres ?', 'explanation' => 'Une perte diminue généralement le résultat accumulé de l’entreprise.', 'choices' => [
                            ['choice_text' => 'Parce qu’elles réduisent généralement les ressources revenant aux propriétaires', 'is_correct' => true],
                            ['choice_text' => 'Parce qu’elles augmentent automatiquement les revenus', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’elles transforment les passifs en actifs', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’elles augmentent toujours la trésorerie', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la comparaison de plusieurs exercices est-elle utile ?', 'explanation' => 'Elle permet d’identifier les tendances et les changements de performance ou de structure.', 'choices' => [
                            ['choice_text' => 'Pour identifier les tendances et changements financiers', 'is_correct' => true],
                            ['choice_text' => 'Pour garantir les résultats futurs', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer les données anciennes', 'is_correct' => false],
                            ['choice_text' => 'Pour remplacer le contrôle interne', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un seul indicateur financier ne suffit-il généralement pas pour juger une entreprise ?', 'explanation' => 'La santé financière comporte plusieurs dimensions : rentabilité, liquidité, solvabilité et efficacité.', 'choices' => [
                            ['choice_text' => 'Parce que la situation financière comporte plusieurs dimensions complémentaires', 'is_correct' => true],
                            ['choice_text' => 'Parce que les indicateurs sont toujours faux', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’aucun indicateur n’est utile', 'is_correct' => false],
                            ['choice_text' => 'Parce que l’entreprise ne possède qu’un seul compte', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel principe est essentiel pour interpréter les états financiers ?', 'explanation' => 'Ils doivent être interprétés en tenant compte du secteur, de l’historique et du contexte de l’entreprise.', 'choices' => [
                            ['choice_text' => 'Les interpréter avec leur contexte économique, historique et sectoriel', 'is_correct' => true],
                            ['choice_text' => 'Les considérer indépendamment du secteur', 'is_correct' => false],
                            ['choice_text' => 'Utiliser uniquement le chiffre d’affaires', 'is_correct' => false],
                            ['choice_text' => 'Ignorer les informations complémentaires', 'is_correct' => false],
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
                    'description' => $quizData['description'],
                    'duration' => 18,
                    'passing_score' => 70,
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
                        'explanation' => $questionData['explanation'],
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