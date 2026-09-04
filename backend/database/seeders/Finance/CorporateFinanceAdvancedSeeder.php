<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Major;
use App\Models\Subject;
use App\Models\Quiz;
use App\Models\Question;
use App\Models\Answer;

class CorporateFinanceAdvancedSeeder extends Seeder
{
    public function run(): void
    {
        $major = Major::where('slug', 'finance')->firstOrFail();

        $subject = Subject::where('major_id', $major->id)
            ->where('slug', 'corporate-finance')
            ->firstOrFail();

        $quizzes = [

            /*
            |--------------------------------------------------------------------------
            | QUIZ 1 — Évaluation avancée de l'entreprise
            |--------------------------------------------------------------------------
            */
            [
                'title' => 'Évaluation avancée de l’entreprise',
                'questions' => [
                    [
                        'question' => 'Dans une valorisation par flux de trésorerie actualisés, une hausse du WACC entraîne généralement :',
                        'answers' => [
                            ['text' => 'Une baisse de la valeur actuelle des flux futurs', 'iscorrect' => true],
                            ['text' => 'Une hausse automatique des flux opérationnels', 'iscorrect' => false],
                            ['text' => 'Une diminution du chiffre d’affaires prévisionnel', 'iscorrect' => false],
                            ['text' => 'Une augmentation mécanique de la valeur terminale', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Dans un modèle DCF, la valeur terminale fondée sur une croissance perpétuelle est particulièrement sensible :',
                        'answers' => [
                            ['text' => 'Au taux de croissance perpétuelle et au taux d’actualisation', 'iscorrect' => true],
                            ['text' => 'Uniquement au nombre d’employés', 'iscorrect' => false],
                            ['text' => 'Uniquement au taux d’impôt historique', 'iscorrect' => false],
                            ['text' => 'Au montant du capital social juridique', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise dont le flux de trésorerie disponible augmente alors que le risque perçu reste constant devrait normalement voir :',
                        'answers' => [
                            ['text' => 'Sa valeur intrinsèque augmenter', 'iscorrect' => true],
                            ['text' => 'Sa valeur intrinsèque diminuer', 'iscorrect' => false],
                            ['text' => 'Son WACC devenir nécessairement nul', 'iscorrect' => false],
                            ['text' => 'Sa dette disparaître automatiquement', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Lorsqu’on utilise le bêta désendetté pour comparer plusieurs entreprises, l’objectif principal est de :',
                        'answers' => [
                            ['text' => 'Neutraliser l’effet de leur structure financière respective', 'iscorrect' => true],
                            ['text' => 'Supprimer leur risque opérationnel', 'iscorrect' => false],
                            ['text' => 'Éliminer leur risque de marché', 'iscorrect' => false],
                            ['text' => 'Transformer leurs dettes en capitaux propres', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Dans une valorisation par multiples, un multiple EV/EBITDA élevé peut être justifié lorsque :',
                        'answers' => [
                            ['text' => 'Les perspectives de croissance et de rentabilité sont supérieures à celles des comparables', 'iscorrect' => true],
                            ['text' => 'L’entreprise ne génère aucun flux économique', 'iscorrect' => false],
                            ['text' => 'La dette est nécessairement inexistante', 'iscorrect' => false],
                            ['text' => 'Le secteur est systématiquement en déclin', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Une valeur terminale représentant une part extrêmement élevée de la valeur totale d’un DCF doit principalement inciter l’analyste à :',
                        'answers' => [
                            ['text' => 'Tester fortement les hypothèses de long terme', 'iscorrect' => true],
                            ['text' => 'Ignorer les flux de trésorerie explicites', 'iscorrect' => false],
                            ['text' => 'Supprimer le taux d’actualisation', 'iscorrect' => false],
                            ['text' => 'Remplacer automatiquement le DCF par la valeur comptable', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Dans une approche FCFF, les flux sont actualisés au :',
                        'answers' => [
                            ['text' => 'WACC', 'iscorrect' => true],
                            ['text' => 'Coût des capitaux propres uniquement', 'iscorrect' => false],
                            ['text' => 'Taux de croissance du chiffre d’affaires', 'iscorrect' => false],
                            ['text' => 'Taux d’inflation uniquement', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'La valeur des capitaux propres peut être obtenue à partir de la valeur d’entreprise en :',
                        'answers' => [
                            ['text' => 'Soustrayant la dette nette et en ajustant les autres éléments pertinents', 'iscorrect' => true],
                            ['text' => 'Ajoutant systématiquement toute la dette brute', 'iscorrect' => false],
                            ['text' => 'Soustrayant le chiffre d’affaires', 'iscorrect' => false],
                            ['text' => 'Multipliant l’EBITDA par le taux d’impôt', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Une analyse de sensibilité dans une valorisation sert principalement à :',
                        'answers' => [
                            ['text' => 'Mesurer l’impact de variations des hypothèses sur la valeur obtenue', 'iscorrect' => true],
                            ['text' => 'Garantir une valeur exacte de marché', 'iscorrect' => false],
                            ['text' => 'Supprimer toute incertitude du modèle', 'iscorrect' => false],
                            ['text' => 'Remplacer les hypothèses financières', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Dans un DCF, une augmentation durable du besoin en fonds de roulement, toutes choses égales par ailleurs, entraîne :',
                        'answers' => [
                            ['text' => 'Une diminution du flux de trésorerie disponible', 'iscorrect' => true],
                            ['text' => 'Une augmentation automatique du FCFF', 'iscorrect' => false],
                            ['text' => 'Une réduction mécanique du chiffre d’affaires', 'iscorrect' => false],
                            ['text' => 'Une suppression du risque financier', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],

            /*
            |--------------------------------------------------------------------------
            | QUIZ 2 — Structure du capital et politique d’endettement
            |--------------------------------------------------------------------------
            */
            [
                'title' => 'Structure du capital et politique d’endettement avancées',
                'questions' => [
                    [
                        'question' => 'Selon la proposition de Modigliani et Miller sans impôts ni coûts de faillite, la structure du capital :',
                        'answers' => [
                            ['text' => 'N’affecte pas la valeur totale de l’entreprise', 'iscorrect' => true],
                            ['text' => 'Détermine entièrement la rentabilité opérationnelle', 'iscorrect' => false],
                            ['text' => 'Supprime le risque économique', 'iscorrect' => false],
                            ['text' => 'Détermine directement le chiffre d’affaires', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Avec l’impôt sur les sociétés, la dette peut créer un avantage fiscal principalement grâce :',
                        'answers' => [
                            ['text' => 'À la déductibilité fiscale des intérêts', 'iscorrect' => true],
                            ['text' => 'À la déductibilité du chiffre d’affaires', 'iscorrect' => false],
                            ['text' => 'À la suppression des dividendes', 'iscorrect' => false],
                            ['text' => 'À l’absence totale de risque de défaut', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'La théorie du compromis concernant la structure du capital met en balance :',
                        'answers' => [
                            ['text' => 'Les avantages fiscaux de la dette et ses coûts potentiels', 'iscorrect' => true],
                            ['text' => 'Le chiffre d’affaires et les stocks uniquement', 'iscorrect' => false],
                            ['text' => 'Les dividendes et les ventes uniquement', 'iscorrect' => false],
                            ['text' => 'Les immobilisations et les créances uniquement', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Un niveau très élevé d’endettement peut augmenter le coût des capitaux propres parce que :',
                        'answers' => [
                            ['text' => 'Le risque financier supporté par les actionnaires augmente', 'iscorrect' => true],
                            ['text' => 'Le risque opérationnel disparaît', 'iscorrect' => false],
                            ['text' => 'Les flux futurs deviennent certains', 'iscorrect' => false],
                            ['text' => 'Les intérêts deviennent automatiquement nuls', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Dans un environnement où le risque de faillite augmente fortement, une entreprise très endettée peut connaître :',
                        'answers' => [
                            ['text' => 'Une hausse du coût de la dette et du coût des capitaux propres', 'iscorrect' => true],
                            ['text' => 'Une baisse automatique de tous ses risques', 'iscorrect' => false],
                            ['text' => 'Une suppression du risque de crédit', 'iscorrect' => false],
                            ['text' => 'Une diminution certaine du WACC', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'La capacité d’endettement d’une entreprise dépend notamment :',
                        'answers' => [
                            ['text' => 'De la stabilité de ses flux de trésorerie et de son profil de risque', 'iscorrect' => true],
                            ['text' => 'Uniquement du nombre d’actionnaires', 'iscorrect' => false],
                            ['text' => 'Uniquement du montant du capital social', 'iscorrect' => false],
                            ['text' => 'Uniquement du bénéfice comptable d’une année', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Un covenant financier a principalement pour objectif de :',
                        'answers' => [
                            ['text' => 'Protéger les créanciers en limitant certains comportements financiers de l’emprunteur', 'iscorrect' => true],
                            ['text' => 'Garantir un rendement minimum aux actionnaires', 'iscorrect' => false],
                            ['text' => 'Supprimer les intérêts de la dette', 'iscorrect' => false],
                            ['text' => 'Augmenter automatiquement les ventes', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise ayant des flux de trésorerie très volatils devrait généralement être prudente concernant :',
                        'answers' => [
                            ['text' => 'Un recours excessif à la dette', 'iscorrect' => true],
                            ['text' => 'La diversification de ses activités', 'iscorrect' => false],
                            ['text' => 'La gestion de sa liquidité', 'iscorrect' => false],
                            ['text' => 'La planification financière', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'La structure optimale du capital correspond théoriquement à celle qui :',
                        'answers' => [
                            ['text' => 'Maximise la valeur de l’entreprise compte tenu des coûts et avantages du financement', 'iscorrect' => true],
                            ['text' => 'Maximise systématiquement la dette', 'iscorrect' => false],
                            ['text' => 'Minimise systématiquement les capitaux propres', 'iscorrect' => false],
                            ['text' => 'Élimine toute forme de risque', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Un ratio dette/EBITDA très élevé est généralement interprété comme un indicateur :',
                        'answers' => [
                            ['text' => 'D’un levier financier et d’un risque de crédit plus importants', 'iscorrect' => true],
                            ['text' => 'D’une absence totale de dette', 'iscorrect' => false],
                            ['text' => 'D’une rentabilité garantie', 'iscorrect' => false],
                            ['text' => 'D’une liquidité nécessairement excellente', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],

            /*
            |--------------------------------------------------------------------------
            | QUIZ 3 — Fusions, acquisitions et création de valeur
            |--------------------------------------------------------------------------
            */
            [
                'title' => 'Fusions-acquisitions et création de valeur',
                'questions' => [
                    [
                        'question' => 'Dans une acquisition, une synergie opérationnelle correspond notamment à :',
                        'answers' => [
                            ['text' => 'Des économies de coûts ou des revenus supplémentaires résultant du rapprochement', 'iscorrect' => true],
                            ['text' => 'Une hausse automatique du cours de l’action', 'iscorrect' => false],
                            ['text' => 'Une suppression obligatoire de toute dette', 'iscorrect' => false],
                            ['text' => 'Une réduction comptable du capital social', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Une acquisition crée de la valeur pour l’acquéreur lorsque :',
                        'answers' => [
                            ['text' => 'La valeur des synergies et avantages obtenus dépasse le coût total de l’acquisition', 'iscorrect' => true],
                            ['text' => 'Le prix payé est toujours supérieur à la valeur autonome de la cible', 'iscorrect' => false],
                            ['text' => 'La cible possède nécessairement plus de dette', 'iscorrect' => false],
                            ['text' => 'Les coûts d’intégration sont ignorés', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'La prime d’acquisition représente principalement :',
                        'answers' => [
                            ['text' => 'L’écart entre le prix offert et la valeur ou le cours de référence de la cible', 'iscorrect' => true],
                            ['text' => 'Le coût annuel de la dette', 'iscorrect' => false],
                            ['text' => 'Le taux d’impôt de l’acquéreur', 'iscorrect' => false],
                            ['text' => 'Le montant des amortissements futurs', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Une acquisition financée majoritairement par dette augmente généralement :',
                        'answers' => [
                            ['text' => 'Le levier financier de l’acquéreur', 'iscorrect' => true],
                            ['text' => 'La trésorerie disponible de manière permanente', 'iscorrect' => false],
                            ['text' => 'La solvabilité automatiquement', 'iscorrect' => false],
                            ['text' => 'Le chiffre d’affaires organique de l’acquéreur', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'La due diligence financière sert notamment à :',
                        'answers' => [
                            ['text' => 'Vérifier la qualité des résultats, des flux et des risques financiers de la cible', 'iscorrect' => true],
                            ['text' => 'Garantir la réussite commerciale de l’acquisition', 'iscorrect' => false],
                            ['text' => 'Fixer légalement le cours futur de l’action', 'iscorrect' => false],
                            ['text' => 'Supprimer les risques d’intégration', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Une synergie surestimée lors d’une acquisition peut conduire à :',
                        'answers' => [
                            ['text' => 'Un prix d’acquisition excessif et une destruction de valeur', 'iscorrect' => true],
                            ['text' => 'Une diminution automatique du prix payé', 'iscorrect' => false],
                            ['text' => 'Une suppression des coûts d’intégration', 'iscorrect' => false],
                            ['text' => 'Une réduction certaine de la dette', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Dans une acquisition, le goodwill peut notamment refléter :',
                        'answers' => [
                            ['text' => 'La différence entre le prix payé et la juste valeur identifiable nette des actifs et passifs acquis', 'iscorrect' => true],
                            ['text' => 'Uniquement les liquidités acquises', 'iscorrect' => false],
                            ['text' => 'Uniquement la dette bancaire', 'iscorrect' => false],
                            ['text' => 'Le montant des dividendes futurs garantis', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Une analyse de création de valeur post-acquisition doit comparer notamment :',
                        'answers' => [
                            ['text' => 'Les performances réalisées avec les hypothèses utilisées lors de l’acquisition', 'iscorrect' => true],
                            ['text' => 'Uniquement le nombre d’employés', 'iscorrect' => false],
                            ['text' => 'Uniquement le cours de l’action à une date donnée', 'iscorrect' => false],
                            ['text' => 'Uniquement le chiffre d’affaires consolidé', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Une acquisition horizontale concerne principalement :',
                        'answers' => [
                            ['text' => 'Des entreprises opérant au même niveau de la chaîne de valeur et dans des activités proches', 'iscorrect' => true],
                            ['text' => 'Deux entreprises sans aucun lien économique', 'iscorrect' => false],
                            ['text' => 'Uniquement une banque et un État', 'iscorrect' => false],
                            ['text' => 'Une entreprise et son fournisseur exclusivement', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Une intégration post-acquisition mal maîtrisée peut réduire les synergies parce que :',
                        'answers' => [
                            ['text' => 'Les coûts, retards et difficultés organisationnelles peuvent dépasser les gains prévus', 'iscorrect' => true],
                            ['text' => 'Les synergies sont toujours garanties contractuellement', 'iscorrect' => false],
                            ['text' => 'Les coûts d’intégration sont toujours nuls', 'iscorrect' => false],
                            ['text' => 'La cible devient automatiquement plus rentable', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],

            /*
            |--------------------------------------------------------------------------
            | QUIZ 4 — Gestion avancée du risque financier
            |--------------------------------------------------------------------------
            */
            [
                'title' => 'Gestion avancée des risques financiers',
                'questions' => [
                    [
                        'question' => 'Le risque de change affecte directement une entreprise lorsqu’elle :',
                        'answers' => [
                            ['text' => 'Dispose de flux futurs libellés dans une devise étrangère', 'iscorrect' => true],
                            ['text' => 'Utilise uniquement des capitaux propres domestiques', 'iscorrect' => false],
                            ['text' => 'N’a aucune transaction internationale', 'iscorrect' => false],
                            ['text' => 'Ne possède aucun actif', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Un contrat à terme de change permet principalement :',
                        'answers' => [
                            ['text' => 'De fixer à l’avance un taux de change pour une transaction future', 'iscorrect' => true],
                            ['text' => 'De supprimer tous les risques opérationnels', 'iscorrect' => false],
                            ['text' => 'De garantir une hausse de la devise', 'iscorrect' => false],
                            ['text' => 'De transformer une dette en capitaux propres', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Une option de change se distingue d’un contrat à terme notamment parce qu’elle :',
                        'answers' => [
                            ['text' => 'Donne un droit sans imposer nécessairement l’exercice de la transaction', 'iscorrect' => true],
                            ['text' => 'Ne comporte jamais de coût', 'iscorrect' => false],
                            ['text' => 'Supprime tous les risques de marché', 'iscorrect' => false],
                            ['text' => 'Oblige toujours à effectuer la transaction', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Le risque de taux d’intérêt est particulièrement important pour une entreprise ayant :',
                        'answers' => [
                            ['text' => 'Une dette importante à taux variable', 'iscorrect' => true],
                            ['text' => 'Uniquement des capitaux propres sans dette', 'iscorrect' => false],
                            ['text' => 'Aucun besoin de financement', 'iscorrect' => false],
                            ['text' => 'Uniquement des actifs non financiers', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Un swap de taux peut être utilisé pour :',
                        'answers' => [
                            ['text' => 'Transformer économiquement une exposition à taux variable en exposition à taux fixe', 'iscorrect' => true],
                            ['text' => 'Supprimer le principal de la dette', 'iscorrect' => false],
                            ['text' => 'Créer automatiquement un bénéfice', 'iscorrect' => false],
                            ['text' => 'Éliminer le risque de crédit de la contrepartie', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'La Value at Risk mesure principalement :',
                        'answers' => [
                            ['text' => 'Une perte potentielle sur un horizon et un niveau de confiance donnés', 'iscorrect' => true],
                            ['text' => 'Le bénéfice comptable annuel garanti', 'iscorrect' => false],
                            ['text' => 'La valeur exacte future d’une entreprise', 'iscorrect' => false],
                            ['text' => 'Le montant obligatoire des dividendes', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Un stress test financier vise principalement à :',
                        'answers' => [
                            ['text' => 'Évaluer la résistance de l’entreprise face à des scénarios fortement défavorables', 'iscorrect' => true],
                            ['text' => 'Prévoir exactement le cours futur d’une action', 'iscorrect' => false],
                            ['text' => 'Éliminer tous les scénarios négatifs', 'iscorrect' => false],
                            ['text' => 'Remplacer les états financiers', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'La couverture naturelle du risque de change consiste notamment à :',
                        'answers' => [
                            ['text' => 'Faire correspondre autant que possible les revenus et dépenses dans la même devise', 'iscorrect' => true],
                            ['text' => 'Éviter toute transaction internationale', 'iscorrect' => false],
                            ['text' => 'Acheter systématiquement des options', 'iscorrect' => false],
                            ['text' => 'Augmenter systématiquement la dette', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Le risque de contrepartie est particulièrement pertinent lors de l’utilisation :',
                        'answers' => [
                            ['text' => 'D’instruments dérivés négociés de gré à gré', 'iscorrect' => true],
                            ['text' => 'D’un paiement comptant déjà exécuté', 'iscorrect' => false],
                            ['text' => 'D’un apport en capital entièrement libéré', 'iscorrect' => false],
                            ['text' => 'D’une immobilisation physique', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Une stratégie de couverture parfaite n’est pas toujours optimale car :',
                        'answers' => [
                            ['text' => 'Le coût de la couverture peut dépasser le bénéfice de réduction du risque', 'iscorrect' => true],
                            ['text' => 'La couverture ne comporte jamais de coût', 'iscorrect' => false],
                            ['text' => 'Le risque financier est toujours nul', 'iscorrect' => false],
                            ['text' => 'Toutes les entreprises ont les mêmes expositions', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],

            /*
            |--------------------------------------------------------------------------
            | QUIZ 5 — Politique de dividendes et rachats d’actions
            |--------------------------------------------------------------------------
            */
            [
                'title' => 'Politique de dividendes et rachats d’actions',
                'questions' => [
                    [
                        'question' => 'Selon la théorie de Modigliani et Miller sous hypothèses idéales, la politique de dividendes :',
                        'answers' => [
                            ['text' => 'N’affecte pas la valeur de l’entreprise', 'iscorrect' => true],
                            ['text' => 'Détermine toujours le WACC', 'iscorrect' => false],
                            ['text' => 'Supprime le risque opérationnel', 'iscorrect' => false],
                            ['text' => 'Détermine directement le chiffre d’affaires', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise mature avec peu d’opportunités d’investissement peut être davantage susceptible de :',
                        'answers' => [
                            ['text' => 'Distribuer une partie importante de ses flux aux actionnaires', 'iscorrect' => true],
                            ['text' => 'Réinvestir systématiquement tout son flux de trésorerie', 'iscorrect' => false],
                            ['text' => 'Supprimer tous ses capitaux propres', 'iscorrect' => false],
                            ['text' => 'Augmenter automatiquement son risque opérationnel', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Un rachat d’actions peut augmenter le bénéfice par action lorsque :',
                        'answers' => [
                            ['text' => 'Le nombre d’actions en circulation diminue suffisamment et les autres éléments restent compatibles', 'iscorrect' => true],
                            ['text' => 'Le chiffre d’affaires devient automatiquement nul', 'iscorrect' => false],
                            ['text' => 'La dette disparaît toujours', 'iscorrect' => false],
                            ['text' => 'Le bénéfice total est nécessairement multiplié', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Une politique de dividende résiduelle consiste à :',
                        'answers' => [
                            ['text' => 'Financer d’abord les investissements créateurs de valeur puis distribuer le surplus disponible', 'iscorrect' => true],
                            ['text' => 'Distribuer toujours 100 % du bénéfice', 'iscorrect' => false],
                            ['text' => 'Ne jamais distribuer de dividendes', 'iscorrect' => false],
                            ['text' => 'Financer tous les investissements uniquement par dette', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Un signal de hausse du dividende peut être interprété par le marché comme :',
                        'answers' => [
                            ['text' => 'Une indication potentiellement favorable concernant les perspectives futures de l’entreprise', 'iscorrect' => true],
                            ['text' => 'Une preuve certaine de faillite', 'iscorrect' => false],
                            ['text' => 'Une preuve de disparition de la dette', 'iscorrect' => false],
                            ['text' => 'Une garantie juridique de croissance', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise qui distribue des dividendes élevés malgré de nombreux projets à VAN positive risque de :',
                        'answers' => [
                            ['text' => 'Réduire sa capacité à financer des investissements créateurs de valeur', 'iscorrect' => true],
                            ['text' => 'Augmenter automatiquement sa VAN', 'iscorrect' => false],
                            ['text' => 'Éliminer tout risque financier', 'iscorrect' => false],
                            ['text' => 'Augmenter mécaniquement sa productivité', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Le rachat d’actions peut être préféré au dividende lorsque l’entreprise souhaite notamment :',
                        'answers' => [
                            ['text' => 'Offrir davantage de flexibilité dans la distribution de liquidités', 'iscorrect' => true],
                            ['text' => 'Garantir un dividende permanent', 'iscorrect' => false],
                            ['text' => 'Éliminer toute volatilité du cours', 'iscorrect' => false],
                            ['text' => 'Supprimer toutes les actions restantes', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Une hausse du dividende financée par une augmentation excessive de dette peut :',
                        'answers' => [
                            ['text' => 'Augmenter le risque financier de l’entreprise', 'iscorrect' => true],
                            ['text' => 'Réduire nécessairement le coût du capital', 'iscorrect' => false],
                            ['text' => 'Supprimer les obligations contractuelles', 'iscorrect' => false],
                            ['text' => 'Garantir une hausse du résultat opérationnel', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'La capacité de distribution durable dépend principalement :',
                        'answers' => [
                            ['text' => 'Des flux de trésorerie, des besoins d’investissement et de la structure financière', 'iscorrect' => true],
                            ['text' => 'Uniquement du bénéfice comptable', 'iscorrect' => false],
                            ['text' => 'Uniquement du cours de l’action', 'iscorrect' => false],
                            ['text' => 'Uniquement du capital social', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise qui rachète ses actions à un prix largement supérieur à leur valeur intrinsèque risque de :',
                        'answers' => [
                            ['text' => 'Détruire de la valeur pour les actionnaires restants', 'iscorrect' => true],
                            ['text' => 'Créer automatiquement une VAN positive', 'iscorrect' => false],
                            ['text' => 'Réduire nécessairement le risque opérationnel', 'iscorrect' => false],
                            ['text' => 'Augmenter automatiquement sa valeur intrinsèque', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],

            /*
            |--------------------------------------------------------------------------
            | QUIZ 6 — Gestion avancée du fonds de roulement
            |--------------------------------------------------------------------------
            */
            [
                'title' => 'Gestion avancée du fonds de roulement',
                'questions' => [
                    [
                        'question' => 'Une réduction du délai moyen de recouvrement des créances permet généralement :',
                        'answers' => [
                            ['text' => 'D’améliorer la conversion des ventes en trésorerie', 'iscorrect' => true],
                            ['text' => 'D’augmenter automatiquement les ventes', 'iscorrect' => false],
                            ['text' => 'De supprimer le besoin en stocks', 'iscorrect' => false],
                            ['text' => 'D’augmenter nécessairement la dette', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Le cycle de conversion de trésorerie mesure approximativement :',
                        'answers' => [
                            ['text' => 'Le temps entre le décaissement lié aux achats et l’encaissement des ventes', 'iscorrect' => true],
                            ['text' => 'La durée de vie des immobilisations', 'iscorrect' => false],
                            ['text' => 'La maturité moyenne des capitaux propres', 'iscorrect' => false],
                            ['text' => 'La durée d’un emprunt obligataire uniquement', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Une politique de crédit client trop généreuse peut :',
                        'answers' => [
                            ['text' => 'Augmenter les ventes mais aussi les besoins de financement et le risque d’impayé', 'iscorrect' => true],
                            ['text' => 'Supprimer tout risque de crédit', 'iscorrect' => false],
                            ['text' => 'Réduire toujours le besoin en fonds de roulement', 'iscorrect' => false],
                            ['text' => 'Garantir une hausse du flux de trésorerie', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Une stratégie agressive de financement du fonds de roulement implique généralement :',
                        'answers' => [
                            ['text' => 'Une utilisation plus importante de financements à court terme', 'iscorrect' => true],
                            ['text' => 'L’absence totale de risque de refinancement', 'iscorrect' => false],
                            ['text' => 'Uniquement des capitaux propres', 'iscorrect' => false],
                            ['text' => 'Une suppression des besoins saisonniers', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Une politique de stocks excessivement restrictive peut entraîner :',
                        'answers' => [
                            ['text' => 'Des ruptures de stock et des pertes potentielles de ventes', 'iscorrect' => true],
                            ['text' => 'Une augmentation certaine du chiffre d’affaires', 'iscorrect' => false],
                            ['text' => 'Une suppression des coûts logistiques', 'iscorrect' => false],
                            ['text' => 'Une hausse automatique de la marge', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Allonger les délais de paiement fournisseurs peut améliorer la trésorerie mais aussi :',
                        'answers' => [
                            ['text' => 'Détériorer les relations fournisseurs ou entraîner la perte de remises', 'iscorrect' => true],
                            ['text' => 'Supprimer toutes les dettes', 'iscorrect' => false],
                            ['text' => 'Garantir une baisse des coûts d’achat', 'iscorrect' => false],
                            ['text' => 'Augmenter automatiquement la qualité des produits', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Une augmentation du besoin en fonds de roulement représente généralement :',
                        'answers' => [
                            ['text' => 'Une consommation de trésorerie', 'iscorrect' => true],
                            ['text' => 'Une source automatique de trésorerie', 'iscorrect' => false],
                            ['text' => 'Une augmentation certaine du bénéfice', 'iscorrect' => false],
                            ['text' => 'Une diminution obligatoire des stocks', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'L’affacturage peut permettre à une entreprise :',
                        'answers' => [
                            ['text' => 'D’obtenir plus rapidement de la liquidité à partir de ses créances clients', 'iscorrect' => true],
                            ['text' => 'De supprimer toute dette financière', 'iscorrect' => false],
                            ['text' => 'De garantir le paiement de tous les clients', 'iscorrect' => false],
                            ['text' => 'D’augmenter automatiquement sa marge opérationnelle', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Une gestion optimale du fonds de roulement cherche principalement à équilibrer :',
                        'answers' => [
                            ['text' => 'Liquidité, rentabilité et risque', 'iscorrect' => true],
                            ['text' => 'Chiffre d’affaires et capital social uniquement', 'iscorrect' => false],
                            ['text' => 'Dividendes et amortissements uniquement', 'iscorrect' => false],
                            ['text' => 'Dette et immobilisations uniquement', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise peut réduire son besoin en fonds de roulement sans réduire ses ventes en :',
                        'answers' => [
                            ['text' => 'Améliorant le recouvrement des créances et la rotation des stocks', 'iscorrect' => true],
                            ['text' => 'Augmentant systématiquement les délais clients', 'iscorrect' => false],
                            ['text' => 'Augmentant les stocks de sécurité sans limite', 'iscorrect' => false],
                            ['text' => 'Réduisant automatiquement ses capitaux propres', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],

            /*
            |--------------------------------------------------------------------------
            | QUIZ 7 — Décisions d’investissement et allocation du capital
            |--------------------------------------------------------------------------
            */
            [
                'title' => 'Décisions d’investissement et allocation du capital',
                'questions' => [
                    [
                        'question' => 'Pour comparer deux projets mutuellement exclusifs, le critère théorique privilégié est généralement :',
                        'answers' => [
                            ['text' => 'La VAN, lorsque les flux sont correctement estimés et actualisés', 'iscorrect' => true],
                            ['text' => 'Le délai de récupération uniquement', 'iscorrect' => false],
                            ['text' => 'Le chiffre d’affaires uniquement', 'iscorrect' => false],
                            ['text' => 'Le nombre d’années du projet uniquement', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Un projet présentant une VAN positive signifie que :',
                        'answers' => [
                            ['text' => 'La valeur actuelle des flux futurs excède l’investissement initial au taux d’actualisation retenu', 'iscorrect' => true],
                            ['text' => 'Le projet ne comporte aucun risque', 'iscorrect' => false],
                            ['text' => 'Le projet générera nécessairement un bénéfice comptable chaque année', 'iscorrect' => false],
                            ['text' => 'Le projet ne nécessite aucun financement', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Un projet peut avoir un TRI supérieur au WACC tout en étant moins intéressant qu’un autre projet lorsque :',
                        'answers' => [
                            ['text' => 'Les projets sont mutuellement exclusifs et leurs tailles ou profils de flux diffèrent fortement', 'iscorrect' => true],
                            ['text' => 'Le WACC est toujours nul', 'iscorrect' => false],
                            ['text' => 'Les deux projets ont exactement les mêmes flux', 'iscorrect' => false],
                            ['text' => 'Les investissements initiaux sont nécessairement identiques', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Le rationnement du capital oblige l’entreprise à :',
                        'answers' => [
                            ['text' => 'Sélectionner les projets créant le plus de valeur sous une contrainte de financement', 'iscorrect' => true],
                            ['text' => 'Accepter tous les projets positifs sans limite', 'iscorrect' => false],
                            ['text' => 'Refuser tous les investissements', 'iscorrect' => false],
                            ['text' => 'Choisir uniquement les projets les plus longs', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Un coût irrécupérable doit normalement être :',
                        'answers' => [
                            ['text' => 'Exclu des flux différentiels futurs d’une décision d’investissement', 'iscorrect' => true],
                            ['text' => 'Ajouté systématiquement au flux terminal', 'iscorrect' => false],
                            ['text' => 'Actualisé comme un flux futur', 'iscorrect' => false],
                            ['text' => 'Considéré comme une entrée de trésorerie', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Le coût d’opportunité d’un actif utilisé dans un projet correspond :',
                        'answers' => [
                            ['text' => 'À la valeur économique de la meilleure utilisation alternative sacrifiée', 'iscorrect' => true],
                            ['text' => 'À son coût historique uniquement', 'iscorrect' => false],
                            ['text' => 'À son amortissement comptable annuel', 'iscorrect' => false],
                            ['text' => 'À son prix d’achat initial dans tous les cas', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Dans l’analyse d’un projet, les flux différentiels doivent intégrer :',
                        'answers' => [
                            ['text' => 'Les variations de revenus, coûts, impôts, investissements et besoin en fonds de roulement causées par le projet', 'iscorrect' => true],
                            ['text' => 'Tous les coûts historiques de l’entreprise', 'iscorrect' => false],
                            ['text' => 'Uniquement les bénéfices comptables', 'iscorrect' => false],
                            ['text' => 'Uniquement les investissements initiaux', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Une analyse par scénarios permet notamment de :',
                        'answers' => [
                            ['text' => 'Évaluer la VAN dans plusieurs environnements économiques possibles', 'iscorrect' => true],
                            ['text' => 'Garantir la réalisation du scénario central', 'iscorrect' => false],
                            ['text' => 'Supprimer le risque du projet', 'iscorrect' => false],
                            ['text' => 'Éviter toute estimation des flux', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Une option réelle peut avoir de la valeur lorsqu’un projet permet à l’entreprise :',
                        'answers' => [
                            ['text' => 'De différer, abandonner, développer ou modifier un investissement selon l’évolution du marché', 'iscorrect' => true],
                            ['text' => 'De supprimer toute incertitude', 'iscorrect' => false],
                            ['text' => 'De garantir un rendement fixe', 'iscorrect' => false],
                            ['text' => 'D’éviter toute dépense future', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Une augmentation du risque spécifique d’un projet devrait conduire l’analyste à :',
                        'answers' => [
                            ['text' => 'Réexaminer le taux d’actualisation ou ajuster les flux selon une méthode cohérente', 'iscorrect' => true],
                            ['text' => 'Ignorer le risque', 'iscorrect' => false],
                            ['text' => 'Augmenter automatiquement les ventes', 'iscorrect' => false],
                            ['text' => 'Réduire artificiellement l’investissement initial', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],

            /*
            |--------------------------------------------------------------------------
            | QUIZ 8 — Gouvernance financière et création de valeur
            |--------------------------------------------------------------------------
            */
            [
                'title' => 'Gouvernance financière et création de valeur',
                'questions' => [
                    [
                        'question' => 'Le problème principal étudié par la théorie de l’agence entre dirigeants et actionnaires est :',
                        'answers' => [
                            ['text' => 'Le risque que les intérêts des dirigeants divergent de ceux des actionnaires', 'iscorrect' => true],
                            ['text' => 'L’absence totale de risque financier', 'iscorrect' => false],
                            ['text' => 'La disparition automatique des bénéfices', 'iscorrect' => false],
                            ['text' => 'L’impossibilité de financer une entreprise', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'La rémunération des dirigeants liée à la performance vise notamment à :',
                        'answers' => [
                            ['text' => 'Aligner davantage leurs incitations avec les intérêts des actionnaires', 'iscorrect' => true],
                            ['text' => 'Supprimer toute rémunération fixe', 'iscorrect' => false],
                            ['text' => 'Éliminer le risque opérationnel', 'iscorrect' => false],
                            ['text' => 'Garantir un cours boursier constant', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Un conseil d’administration indépendant peut contribuer à :',
                        'answers' => [
                            ['text' => 'Renforcer la surveillance des décisions de la direction', 'iscorrect' => true],
                            ['text' => 'Garantir une hausse annuelle du bénéfice', 'iscorrect' => false],
                            ['text' => 'Supprimer tous les conflits d’intérêts', 'iscorrect' => false],
                            ['text' => 'Éliminer le risque de marché', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'La création de valeur pour les actionnaires est davantage liée à :',
                        'answers' => [
                            ['text' => 'La capacité de l’entreprise à générer des rendements supérieurs à son coût du capital', 'iscorrect' => true],
                            ['text' => 'La seule croissance du chiffre d’affaires', 'iscorrect' => false],
                            ['text' => 'La seule augmentation du nombre d’employés', 'iscorrect' => false],
                            ['text' => 'La seule hausse des actifs comptables', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Si le ROIC est durablement inférieur au WACC, l’entreprise :',
                        'answers' => [
                            ['text' => 'Détruit en principe de la valeur économique', 'iscorrect' => true],
                            ['text' => 'Crée nécessairement de la valeur', 'iscorrect' => false],
                            ['text' => 'Ne possède aucun risque financier', 'iscorrect' => false],
                            ['text' => 'Doit automatiquement augmenter ses dividendes', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Un investissement dans un projet dont le rendement attendu est inférieur au coût du capital :',
                        'answers' => [
                            ['text' => 'Peut détruire de la valeur même s’il augmente le chiffre d’affaires', 'iscorrect' => true],
                            ['text' => 'Crée toujours de la valeur', 'iscorrect' => false],
                            ['text' => 'Est toujours sans risque', 'iscorrect' => false],
                            ['text' => 'Augmente nécessairement le cours de l’action', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'La gouvernance financière doit notamment surveiller :',
                        'answers' => [
                            ['text' => 'L’allocation du capital, les risques, les contrôles et les conflits d’intérêts', 'iscorrect' => true],
                            ['text' => 'Uniquement les ventes mensuelles', 'iscorrect' => false],
                            ['text' => 'Uniquement les salaires', 'iscorrect' => false],
                            ['text' => 'Uniquement les stocks', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Une politique d’investissement fondée uniquement sur la croissance du chiffre d’affaires peut être dangereuse si :',
                        'answers' => [
                            ['text' => 'La croissance génère des rendements inférieurs au coût du capital', 'iscorrect' => true],
                            ['text' => 'Le chiffre d’affaires augmente rapidement', 'iscorrect' => false],
                            ['text' => 'L’entreprise possède des clients', 'iscorrect' => false],
                            ['text' => 'Les actifs sont correctement enregistrés', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'L’EVA cherche principalement à mesurer :',
                        'answers' => [
                            ['text' => 'La valeur économique créée après rémunération du capital investi', 'iscorrect' => true],
                            ['text' => 'Le chiffre d’affaires avant impôt', 'iscorrect' => false],
                            ['text' => 'Le montant total des actifs comptables', 'iscorrect' => false],
                            ['text' => 'La capitalisation boursière uniquement', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Une bonne décision financière stratégique doit idéalement :',
                        'answers' => [
                            ['text' => 'Améliorer la valeur de l’entreprise tout en tenant compte du risque et des contraintes financières', 'iscorrect' => true],
                            ['text' => 'Maximiser uniquement le bénéfice comptable à court terme', 'iscorrect' => false],
                            ['text' => 'Maximiser systématiquement la dette', 'iscorrect' => false],
                            ['text' => 'Ignorer le coût du capital', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],
        ];

        foreach ($quizzes as $quizData) {

            $quiz = Quiz::create([
                'subject_id' => $subject->id,
                'title' => $quizData['title'],
                'level' => 'Advanced',
            ]);

            foreach ($quizData['questions'] as $questionData) {

                $question = Question::create([
                    'quiz_id' => $quiz->id,
                    'question' => $questionData['question'],
                ]);

               $answers = $questionData['answers'];

// Mélanger les réponses pour éviter que la bonne réponse soit toujours en première position.
shuffle($answers);

foreach ($answers as $answerData) {
    Answer::create([
        'question_id' => $question->id,
        'answer' => $answerData['text'],
        'iscorrect' => $answerData['iscorrect'],
    ]);
}
            }
        }
    }
}