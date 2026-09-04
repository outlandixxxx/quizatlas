```php
<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Major;
use App\Models\Subject;
use App\Models\Quiz;
use App\Models\Question;
use App\Models\Answer;

class FinancialStatementAnalysisAdvancedSeeder extends Seeder
{
    public function run(): void
    {
        $major = Major::where('slug', 'finance')->firstOrFail();

        $subject = Subject::where('major_id', $major->id)
            ->where('slug', 'financial-statement-analysis')
            ->firstOrFail();

        $quizzes = [
            [
                'title' => 'Analyse avancée de la qualité des bénéfices',
                'questions' => [
                    [
                        'question' => 'Quel élément est le plus pertinent pour évaluer la qualité du résultat net ?',
                        'answers' => [
                            ['answer' => 'Sa capacité à être soutenu par des flux de trésorerie opérationnels récurrents', 'iscorrect' => true],
                            ['answer' => 'Son montant absolu uniquement', 'iscorrect' => false],
                            ['answer' => 'La valeur nominale du capital social', 'iscorrect' => false],
                            ['answer' => 'Le nombre de salariés uniquement', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise présente une forte hausse du résultat net mais une baisse durable du flux de trésorerie opérationnel. Quelle hypothèse mérite une analyse approfondie ?',
                        'answers' => [
                            ['answer' => 'Une part importante du résultat peut provenir d’éléments non encaissés ou d’une détérioration du BFR', 'iscorrect' => true],
                            ['answer' => 'La rentabilité est nécessairement excellente', 'iscorrect' => false],
                            ['answer' => 'La dette a nécessairement diminué', 'iscorrect' => false],
                            ['answer' => 'Les stocks sont nécessairement inexistants', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une forte progression des créances clients peut-elle réduire la qualité apparente de la croissance du résultat ?',
                        'answers' => [
                            ['answer' => 'Parce que les ventes comptabilisées ne sont pas encore entièrement converties en trésorerie', 'iscorrect' => true],
                            ['answer' => 'Parce que les créances sont toujours des pertes', 'iscorrect' => false],
                            ['answer' => 'Parce que les créances diminuent toujours le chiffre d’affaires', 'iscorrect' => false],
                            ['answer' => 'Parce que les créances sont des immobilisations', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel signal peut constituer un indicateur de reconnaissance agressive du chiffre d’affaires ?',
                        'answers' => [
                            ['answer' => 'Une croissance inhabituelle des ventes accompagnée d’une forte augmentation des créances clients', 'iscorrect' => true],
                            ['answer' => 'Une baisse régulière des créances', 'iscorrect' => false],
                            ['answer' => 'Une stabilité du BFR', 'iscorrect' => false],
                            ['answer' => 'Une réduction des délais clients', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les éléments non récurrents doivent-ils être isolés dans l’analyse du résultat ?',
                        'answers' => [
                            ['answer' => 'Ils peuvent rendre le bénéfice courant moins représentatif de la performance future', 'iscorrect' => true],
                            ['answer' => 'Ils sont toujours sans importance', 'iscorrect' => false],
                            ['answer' => 'Ils remplacent le chiffre d’affaires', 'iscorrect' => false],
                            ['answer' => 'Ils garantissent une croissance durable', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Une baisse du taux d’impôt effectif peut augmenter le résultat net sans amélioration opérationnelle. Pourquoi ?',
                        'answers' => [
                            ['answer' => 'La baisse de la charge fiscale peut augmenter le résultat net indépendamment de la performance opérationnelle', 'iscorrect' => true],
                            ['answer' => 'L’impôt augmente toujours le résultat opérationnel', 'iscorrect' => false],
                            ['answer' => 'La baisse fiscale augmente automatiquement les ventes', 'iscorrect' => false],
                            ['answer' => 'La fiscalité n’a aucun effet sur le résultat net', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel indicateur permet de rapprocher le résultat comptable de la génération de trésorerie ?',
                        'answers' => [
                            ['answer' => 'Le flux de trésorerie opérationnel', 'iscorrect' => true],
                            ['answer' => 'Le capital social', 'iscorrect' => false],
                            ['answer' => 'Le montant des dividendes autorisés', 'iscorrect' => false],
                            ['answer' => 'La valeur nominale des actions', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise affiche plusieurs années de croissance du bénéfice par action grâce à des rachats d’actions. Quelle analyse complémentaire est nécessaire ?',
                        'answers' => [
                            ['answer' => 'Évaluer si la croissance du bénéfice total et de la performance opérationnelle justifie cette progression', 'iscorrect' => true],
                            ['answer' => 'Conclure automatiquement à une amélioration opérationnelle', 'iscorrect' => false],
                            ['answer' => 'Ignorer les flux de trésorerie', 'iscorrect' => false],
                            ['answer' => 'Supposer que la dette a disparu', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel phénomène peut rendre un bénéfice comptable élevé peu durable ?',
                        'answers' => [
                            ['answer' => 'Une dépendance importante à des gains exceptionnels ou à des estimations comptables favorables', 'iscorrect' => true],
                            ['answer' => 'Une génération régulière de trésorerie', 'iscorrect' => false],
                            ['answer' => 'Une baisse durable du BFR', 'iscorrect' => false],
                            ['answer' => 'Une amélioration structurelle des marges', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle conclusion est la plus robuste concernant la qualité du résultat ?',
                        'answers' => [
                            ['answer' => 'Un résultat durable doit être analysé avec les flux, les marges, le BFR et les éléments exceptionnels', 'iscorrect' => true],
                            ['answer' => 'Le résultat net suffit toujours', 'iscorrect' => false],
                            ['answer' => 'Le chiffre d’affaires suffit toujours', 'iscorrect' => false],
                            ['answer' => 'Le bénéfice par action suffit toujours', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Analyse avancée du bilan et de la structure financière',
                'questions' => [
                    [
                        'question' => 'Quel est l’intérêt d’analyser la structure des actifs d’une entreprise ?',
                        'answers' => [
                            ['answer' => 'Évaluer la flexibilité financière, l’intensité capitalistique et la composition des ressources économiques', 'iscorrect' => true],
                            ['answer' => 'Déterminer uniquement le chiffre d’affaires', 'iscorrect' => false],
                            ['answer' => 'Calculer uniquement les impôts', 'iscorrect' => false],
                            ['answer' => 'Ignorer les immobilisations', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Une forte proportion d’immobilisations dans les actifs peut caractériser :',
                        'answers' => [
                            ['answer' => Un modèle économique relativement capitalistique', 'iscorrect' => true],
                            ['answer' => 'Une entreprise sans coûts fixes', 'iscorrect' => false],
                            ['answer' => 'Une absence de besoin de financement', 'iscorrect' => false],
                            ['answer' => 'Une activité nécessairement très liquide', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la maturité des dettes est-elle importante dans l’analyse de solvabilité ?',
                        'answers' => [
                            ['answer' => 'Parce qu’un volume important de dettes arrivant simultanément à échéance peut créer un risque de refinancement', 'iscorrect' => true],
                            ['answer' => 'Parce qu’elle détermine directement le chiffre d’affaires', 'iscorrect' => false],
                            ['answer' => 'Parce que les dettes longues sont toujours sans risque', 'iscorrect' => false],
                            ['answer' => 'Parce qu’elle élimine les charges financières', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel effet peut avoir une hausse des taux d’intérêt sur une entreprise fortement endettée à taux variable ?',
                        'answers' => [
                            ['answer' => 'Une augmentation des charges financières et une pression sur le résultat et les flux', 'iscorrect' => true],
                            ['answer' => 'Une baisse automatique de la dette', 'iscorrect' => false],
                            ['answer' => 'Une hausse garantie du ROA', 'iscorrect' => false],
                            ['answer' => 'Une diminution obligatoire des stocks', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi comparer la dette nette avec l’EBITDA peut-il être utile ?',
                        'answers' => [
                            ['answer' => 'Pour apprécier approximativement le poids de la dette par rapport à une capacité opérationnelle avant certains éléments', 'iscorrect' => true],
                            ['answer' => 'Pour mesurer directement la liquidité bancaire', 'iscorrect' => false],
                            ['answer' => 'Pour calculer les capitaux propres', 'iscorrect' => false],
                            ['answer' => 'Pour déterminer les ventes futures', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise possède une dette nette de 600 000 € et un EBITDA de 200 000 €. Le ratio dette nette/EBITDA est de :',
                        'answers' => [
                            ['answer' => '3 fois', 'iscorrect' => true],
                            ['answer' => '0,33 fois', 'iscorrect' => false],
                            ['answer' => '2 fois', 'iscorrect' => false],
                            ['answer' => '4 fois', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel risque peut apparaître lorsqu’une entreprise finance des actifs très longs par des dettes très courtes ?',
                        'answers' => [
                            ['answer' => 'Un risque de refinancement et de tension de liquidité', 'iscorrect' => true],
                            ['answer' => 'Une diminution automatique des intérêts', 'iscorrect' => false],
                            ['answer' => 'Une augmentation garantie du bénéfice', 'iscorrect' => false],
                            ['answer' => 'Une disparition du besoin en fonds de roulement', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la valeur comptable des capitaux propres ne reflète-t-elle pas nécessairement la valeur économique de l’entreprise ?',
                        'answers' => [
                            ['answer' => 'Les normes comptables, les estimations et les actifs incorporels peuvent créer des écarts avec la valeur économique', 'iscorrect' => true],
                            ['answer' => 'Les capitaux propres sont toujours égaux à la valeur de marché', 'iscorrect' => false],
                            ['answer' => 'Les actifs sont toujours évalués à leur prix futur', 'iscorrect' => false],
                            ['answer' => 'La comptabilité ignore toutes les transactions', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Une augmentation rapide des goodwill après plusieurs acquisitions doit notamment conduire à examiner :',
                        'answers' => [
                            ['answer' => 'Le prix payé, les hypothèses d’évaluation et le risque de dépréciation', 'iscorrect' => true],
                            ['answer' => 'Uniquement le nombre d’employés', 'iscorrect' => false],
                            ['answer' => 'Uniquement les dividendes', 'iscorrect' => false],
                            ['answer' => 'Uniquement les stocks', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est l’objectif principal d’une analyse de la structure financière à long terme ?',
                        'answers' => [
                            ['answer' => 'Évaluer la capacité de l’entreprise à financer durablement ses actifs et à supporter ses engagements', 'iscorrect' => true],
                            ['answer' => 'Calculer uniquement les ventes mensuelles', 'iscorrect' => false],
                            ['answer' => 'Déterminer uniquement les créances', 'iscorrect' => false],
                            ['answer' => 'Éliminer le besoin d’analyse des flux', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Ratios avancés de rentabilité',
                'questions' => [
                    [
                        'question' => 'Quelle différence fondamentale existe entre ROA et ROE ?',
                        'answers' => [
                            ['answer' => 'Le ROA rapporte la performance aux actifs tandis que le ROE la rapporte aux capitaux propres', 'iscorrect' => true],
                            ['answer' => 'Le ROA mesure uniquement la liquidité', 'iscorrect' => false],
                            ['answer' => 'Le ROE mesure uniquement le chiffre d’affaires', 'iscorrect' => false],
                            ['answer' => 'Les deux ratios sont toujours identiques', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Une hausse du ROE provoquée uniquement par une forte augmentation du levier financier doit être interprétée comme :',
                        'answers' => [
                            ['answer' => 'Une amélioration accompagnée d’un risque financier potentiellement plus élevé', 'iscorrect' => true],
                            ['answer' => 'Une amélioration sans aucun risque supplémentaire', 'iscorrect' => false],
                            ['answer' => 'Une baisse automatique de la rentabilité', 'iscorrect' => false],
                            ['answer' => 'Une absence totale d’effet de la dette', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Dans une analyse DuPont, une amélioration du ROE peut provenir de :',
                        'answers' => [
                            ['answer' => 'Une meilleure marge, une meilleure rotation des actifs ou un levier financier plus élevé', 'iscorrect' => true],
                            ['answer' => 'Uniquement d’une hausse des stocks', 'iscorrect' => false],
                            ['answer' => 'Uniquement d’une baisse du chiffre d’affaires', 'iscorrect' => false],
                            ['answer' => 'Uniquement d’une hausse des impôts', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise améliore sa marge nette mais son ROE diminue. Quelle explication est possible ?',
                        'answers' => [
                            ['answer' => 'Une diminution importante de la rotation des actifs ou du levier financier peut compenser la hausse de marge', 'iscorrect' => true],
                            ['answer' => 'Une hausse de marge entraîne toujours une hausse du ROE', 'iscorrect' => false],
                            ['answer' => 'Le ROE ne dépend jamais de la marge', 'iscorrect' => false],
                            ['answer' => 'Le chiffre d’affaires devient nécessairement nul', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi le ROIC peut-il être plus pertinent que le ROE pour comparer certaines performances opérationnelles ?',
                        'answers' => [
                            ['answer' => 'Il se concentre davantage sur le rendement du capital investi indépendamment de certaines décisions de financement', 'iscorrect' => true],
                            ['answer' => 'Il mesure uniquement les dividendes', 'iscorrect' => false],
                            ['answer' => 'Il exclut toujours les actifs opérationnels', 'iscorrect' => false],
                            ['answer' => 'Il est identique au ratio courant', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise possède un ROIC inférieur à son coût moyen pondéré du capital. Cela signifie généralement que :',
                        'answers' => [
                            ['answer' => 'Elle détruit de la valeur économique sur le capital investi', 'iscorrect' => true],
                            ['answer' => 'Elle crée nécessairement de la valeur', 'iscorrect' => false],
                            ['answer' => 'Elle n’a aucun financement externe', 'iscorrect' => false],
                            ['answer' => 'Son ROE est nécessairement négatif', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une entreprise à faible marge peut-elle néanmoins obtenir un rendement élevé sur ses actifs ?',
                        'answers' => [
                            ['answer' => 'Une forte rotation des actifs peut compenser une marge relativement faible', 'iscorrect' => true],
                            ['answer' => 'La marge n’a jamais d’importance', 'iscorrect' => false],
                            ['answer' => 'Les actifs ne sont pas nécessaires', 'iscorrect' => false],
                            ['answer' => 'La dette garantit toujours un ROA élevé', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Une forte rentabilité des capitaux propres peut être trompeuse lorsque :',
                        'answers' => [
                            ['answer' => 'Les capitaux propres sont faibles en raison d’un endettement très important', 'iscorrect' => true],
                            ['answer' => 'Les flux opérationnels sont solides', 'iscorrect' => false],
                            ['answer' => 'La dette est faible', 'iscorrect' => false],
                            ['answer' => 'Les marges sont stables', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel indicateur aide à analyser l’efficacité d’utilisation des actifs ?',
                        'answers' => [
                            ['answer' => 'La rotation des actifs', 'iscorrect' => true],
                            ['answer' => 'Le ratio de couverture des intérêts', 'iscorrect' => false],
                            ['answer' => 'Le délai fournisseur uniquement', 'iscorrect' => false],
                            ['answer' => 'Le ratio de liquidité immédiate uniquement', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle approche est la plus pertinente pour analyser une rentabilité exceptionnellement élevée ?',
                        'answers' => [
                            ['answer' => 'Décomposer le ratio et rechercher les effets de marge, rotation, levier et éléments exceptionnels', 'iscorrect' => true],
                            ['answer' => 'Conclure immédiatement à une excellente performance durable', 'iscorrect' => false],
                            ['answer' => 'Ignorer la structure financière', 'iscorrect' => false],
                            ['answer' => 'Analyser uniquement le chiffre d’affaires', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Analyse avancée du cash-flow et de la conversion de trésorerie',
                'questions' => [
                    [
                        'question' => 'Quel est l’intérêt du flux de trésorerie disponible pour l’analyse financière ?',
                        'answers' => [
                            ['answer' => 'Il permet d’apprécier les ressources de trésorerie disponibles après les investissements nécessaires à l’activité', 'iscorrect' => true],
                            ['answer' => 'Il mesure uniquement le chiffre d’affaires', 'iscorrect' => false],
                            ['answer' => 'Il remplace le résultat net', 'iscorrect' => false],
                            ['answer' => 'Il exclut toutes les dépenses', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise génère un flux opérationnel positif mais un flux disponible négatif. Quelle explication est possible ?',
                        'answers' => [
                            ['answer' => 'Ses investissements en immobilisations sont importants', 'iscorrect' => true],
                            ['answer' => 'Elle n’a aucune activité opérationnelle', 'iscorrect' => false],
                            ['answer' => 'Elle ne possède aucun actif', 'iscorrect' => false],
                            ['answer' => 'Son chiffre d’affaires est nécessairement nul', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une hausse rapide du BFR peut-elle absorber une partie importante de la croissance du cash-flow ?',
                        'answers' => [
                            ['answer' => 'La croissance peut nécessiter davantage de stocks et de créances avant les encaissements correspondants', 'iscorrect' => true],
                            ['answer' => 'Le BFR augmente toujours la trésorerie', 'iscorrect' => false],
                            ['answer' => 'Les stocks sont toujours des flux entrants', 'iscorrect' => false],
                            ['answer' => 'Les créances sont immédiatement encaissées', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel signal est préoccupant lorsqu’il persiste plusieurs années ?',
                        'answers' => [
                            ['answer' => 'Un résultat net positif accompagné d’un flux opérationnel structurellement faible ou négatif', 'iscorrect' => true],
                            ['answer' => 'Un flux opérationnel supérieur au résultat net', 'iscorrect' => false],
                            ['answer' => 'Une baisse du BFR', 'iscorrect' => false],
                            ['answer' => 'Une réduction des créances', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise finance régulièrement ses investissements par de nouvelles dettes alors que son flux disponible reste négatif. Quel risque apparaît ?',
                        'answers' => [
                            ['answer' => 'Une dépendance croissante au financement externe', 'iscorrect' => true],
                            ['answer' => 'Une baisse automatique de l’endettement', 'iscorrect' => false],
                            ['answer' => 'Une amélioration certaine de la solvabilité', 'iscorrect' => false],
                            ['answer' => 'Une disparition du risque financier', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel effet peut avoir une réduction durable du cycle de conversion de trésorerie ?',
                        'answers' => [
                            ['answer' => 'Elle peut améliorer la disponibilité de trésorerie à niveau d’activité comparable', 'iscorrect' => true],
                            ['answer' => 'Elle augmente nécessairement les immobilisations', 'iscorrect' => false],
                            ['answer' => 'Elle réduit toujours le chiffre d’affaires', 'iscorrect' => false],
                            ['answer' => 'Elle augmente automatiquement les intérêts', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les flux de trésorerie doivent-ils être analysés sur plusieurs exercices ?',
                        'answers' => [
                            ['answer' => 'Pour distinguer les effets temporaires des tendances structurelles', 'iscorrect' => true],
                            ['answer' => 'Parce qu’un seul exercice ne contient jamais de données', 'iscorrect' => false],
                            ['answer' => 'Pour éliminer les variations saisonnières automatiquement', 'iscorrect' => false],
                            ['answer' => 'Pour garantir les résultats futurs', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Une baisse des stocks libère de la trésorerie à court terme mais peut-elle être durablement positive ?',
                        'answers' => [
                            ['answer' => 'Oui, si elle résulte d’une meilleure gestion plutôt que d’une contraction problématique de l’activité', 'iscorrect' => true],
                            ['answer' => 'Non, une baisse des stocks est toujours négative', 'iscorrect' => false],
                            ['answer' => 'Oui, car elle augmente toujours les ventes', 'iscorrect' => false],
                            ['answer' => 'Non, les stocks n’ont aucun lien avec la trésorerie', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel élément peut expliquer un écart important entre EBITDA et flux de trésorerie opérationnel ?',
                        'answers' => [
                            ['answer' => 'Les impôts, intérêts, variations du BFR et autres éléments de trésorerie', 'iscorrect' => true],
                            ['answer' => 'Uniquement le capital social', 'iscorrect' => false],
                            ['answer' => 'Uniquement le nombre d’actions', 'iscorrect' => false],
                            ['answer' => 'Uniquement les dividendes futurs', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle caractéristique décrit le mieux une génération de trésorerie de haute qualité ?',
                        'answers' => [
                            ['answer' => 'Des flux opérationnels récurrents et cohérents avec les résultats économiques', 'iscorrect' => true],
                            ['answer' => 'Une dépendance permanente aux émissions de dette', 'iscorrect' => false],
                            ['answer' => 'Une croissance constante des créances', 'iscorrect' => false],
                            ['answer' => 'Des gains exceptionnels uniquement', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Analyse avancée du BFR et du cycle d’exploitation',
                'questions' => [
                    [
                        'question' => 'Quelle combinaison tend à réduire le besoin en fonds de roulement ?',
                        'answers' => [
                            ['answer' => 'Réduction des délais clients, optimisation des stocks et allongement raisonnable des délais fournisseurs', 'iscorrect' => true],
                            ['answer' => 'Augmentation des stocks et allongement des délais clients', 'iscorrect' => false],
                            ['answer' => 'Réduction des délais fournisseurs uniquement', 'iscorrect' => false],
                            ['answer' => 'Augmentation simultanée des créances et des stocks', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une croissance très rapide peut-elle détériorer temporairement la trésorerie ?',
                        'answers' => [
                            ['answer' => 'La croissance exige souvent de financer les stocks et les créances avant les encaissements', 'iscorrect' => true],
                            ['answer' => 'La croissance réduit toujours les créances', 'iscorrect' => false],
                            ['answer' => 'Les ventes créent immédiatement toute la trésorerie', 'iscorrect' => false],
                            ['answer' => 'La croissance élimine le BFR', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Une hausse du DSO de 45 à 70 jours peut-elle être préoccupante même si le chiffre d’affaires augmente ?',
                        'answers' => [
                            ['answer' => 'Oui, car une part plus importante des ventes peut rester immobilisée dans les créances', 'iscorrect' => true],
                            ['answer' => 'Non, le DSO n’a aucun rapport avec la trésorerie', 'iscorrect' => false],
                            ['answer' => 'Non, une hausse du DSO signifie toujours une meilleure liquidité', 'iscorrect' => false],
                            ['answer' => 'Oui, car elle signifie nécessairement une baisse des ventes', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une comparaison du BFR en valeur absolue peut-elle être trompeuse entre entreprises de tailles différentes ?',
                        'answers' => [
                            ['answer' => 'Il est souvent plus pertinent de le rapporter au chiffre d’affaires ou à d’autres bases comparables', 'iscorrect' => true],
                            ['answer' => 'Les entreprises de tailles différentes ont toujours le même BFR', 'iscorrect' => false],
                            ['answer' => 'Le BFR ne peut jamais être comparé', 'iscorrect' => false],
                            ['answer' => 'Le chiffre d’affaires n’a aucun lien avec le BFR', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise réduit fortement ses stocks mais constate une hausse des ruptures de stock. Quelle conclusion est la plus pertinente ?',
                        'answers' => [
                            ['answer' => 'L’amélioration du BFR peut avoir été obtenue au prix d’une dégradation opérationnelle', 'iscorrect' => true],
                            ['answer' => 'La réduction des stocks est toujours optimale', 'iscorrect' => false],
                            ['answer' => 'Les ruptures améliorent nécessairement les ventes', 'iscorrect' => false],
                            ['answer' => 'Le BFR n’est jamais lié à l’activité', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le risque d’une politique excessivement restrictive de crédit client ?',
                        'answers' => [
                            ['answer' => 'Elle peut réduire le risque de créances mais également limiter les ventes et la croissance', 'iscorrect' => true],
                            ['answer' => 'Elle augmente toujours les ventes', 'iscorrect' => false],
                            ['answer' => 'Elle élimine tous les coûts', 'iscorrect' => false],
                            ['answer' => 'Elle augmente nécessairement le DSO', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi le délai fournisseur doit-il être analysé avec la qualité des relations fournisseurs ?',
                        'answers' => [
                            ['answer' => 'Un délai élevé peut soutenir la trésorerie mais devenir risqué s’il reflète des tensions de paiement', 'iscorrect' => true],
                            ['answer' => 'Les fournisseurs ne sont jamais concernés par le BFR', 'iscorrect' => false],
                            ['answer' => 'Un délai élevé est toujours optimal', 'iscorrect' => false],
                            ['answer' => 'Le délai fournisseur n’a aucun impact financier', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel indicateur permet de relier les délais clients, stocks et fournisseurs ?',
                        'answers' => [
                            ['answer' => 'Le cycle de conversion de trésorerie', 'iscorrect' => true],
                            ['answer' => 'Le ROE uniquement', 'iscorrect' => false],
                            ['answer' => 'Le ratio de couverture des intérêts', 'iscorrect' => false],
                            ['answer' => 'La marge brute uniquement', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise possède un cycle de conversion de trésorerie négatif. Que peut-on en déduire avec prudence ?',
                        'answers' => [
                            ['answer' => 'Elle encaisse potentiellement ses clients avant de payer certains fournisseurs', 'iscorrect' => true],
                            ['answer' => 'Elle est nécessairement en difficulté', 'iscorrect' => false],
                            ['answer' => 'Elle ne possède aucun stock', 'iscorrect' => false],
                            ['answer' => 'Elle n’a aucune dette', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le meilleur moyen d’évaluer une amélioration du BFR ?',
                        'answers' => [
                            ['answer' => Vérifier son impact sur la trésorerie tout en évaluant ses conséquences sur les ventes, les stocks et les relations fournisseurs', 'iscorrect' => true],
                            ['answer' => 'Regarder uniquement la baisse des stocks', 'iscorrect' => false],
                            ['answer' => 'Regarder uniquement les dettes fournisseurs', 'iscorrect' => false],
                            ['answer' => 'Ignorer les indicateurs opérationnels', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Analyse avancée des risques financiers',
                'questions' => [
                    [
                        'question' => 'Quel est le principal effet du levier financier sur le risque des actionnaires ?',
                        'answers' => [
                            ['answer' => 'Il peut amplifier les variations du rendement des capitaux propres', 'iscorrect' => true],
                            ['answer' => 'Il élimine toutes les pertes', 'iscorrect' => false],
                            ['answer' => 'Il réduit toujours les charges financières', 'iscorrect' => false],
                            ['answer' => 'Il garantit une hausse du ROE', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une entreprise peut-elle être solvable mais connaître une crise de liquidité ?',
                        'answers' => [
                            ['answer' => 'Elle peut posséder suffisamment d’actifs à long terme mais manquer de trésorerie pour honorer des échéances immédiates', 'iscorrect' => true],
                            ['answer' => 'La solvabilité signifie toujours une trésorerie abondante', 'iscorrect' => false],
                            ['answer' => 'La liquidité et la solvabilité sont identiques', 'iscorrect' => false],
                            ['answer' => 'Les actifs longs sont toujours immédiatement liquides', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel indicateur peut signaler une pression croissante sur le service de la dette ?',
                        'answers' => [
                            ['answer' => 'Une baisse du ratio de couverture des intérêts', 'iscorrect' => true],
                            ['answer' => 'Une hausse de la marge brute uniquement', 'iscorrect' => false],
                            ['answer' => 'Une baisse du chiffre d’affaires uniquement', 'iscorrect' => false],
                            ['answer' => 'Une hausse du capital social uniquement', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise possède une couverture des intérêts de 1,2 fois. Quelle interprétation est la plus prudente ?',
                        'answers' => [
                            ['answer' => 'La marge de sécurité pour couvrir les charges financières est relativement faible', 'iscorrect' => true],
                            ['answer' => 'La solvabilité est garantie', 'iscorrect' => false],
                            ['answer' => 'Les intérêts sont inexistants', 'iscorrect' => false],
                            ['answer' => 'La dette est nécessairement nulle', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les covenants financiers sont-ils importants dans l’analyse du risque de crédit ?',
                        'answers' => [
                            ['answer' => 'Ils peuvent imposer des limites financières dont le non-respect déclenche certaines conséquences contractuelles', 'iscorrect' => true],
                            ['answer' => 'Ils augmentent automatiquement les bénéfices', 'iscorrect' => false],
                            ['answer' => 'Ils suppriment les dettes', 'iscorrect' => false],
                            ['answer' => 'Ils remplacent les états financiers', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel risque est associé à une concentration élevée des créances sur quelques clients ?',
                        'answers' => [
                            ['answer' => Une défaillance d’un client important peut avoir un impact significatif sur les flux de trésorerie', 'iscorrect' => true],
                            ['answer' => 'Le risque de crédit disparaît', 'iscorrect' => false],
                            ['answer' => 'La liquidité augmente automatiquement', 'iscorrect' => false],
                            ['answer' => 'Les ventes deviennent sans risque', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les garanties données et engagements hors bilan peuvent-ils être importants ?',
                        'answers' => [
                            ['answer' => 'Ils peuvent représenter des obligations ou risques futurs non entièrement visibles dans les dettes classiques', 'iscorrect' => true],
                            ['answer' => 'Ils n’ont jamais d’impact financier', 'iscorrect' => false],
                            ['answer' => 'Ils sont toujours des actifs liquides', 'iscorrect' => false],
                            ['answer' => 'Ils remplacent les capitaux propres', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel risque peut résulter d’une forte dépendance à un seul mode de financement ?',
                        'answers' => [
                            ['answer' => 'Une vulnérabilité accrue si cette source devient plus coûteuse ou indisponible', 'iscorrect' => true],
                            ['answer' => 'Une diminution automatique du risque', 'iscorrect' => false],
                            ['answer' => 'Une hausse garantie des ventes', 'iscorrect' => false],
                            ['answer' => 'Une disparition des charges financières', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une analyse de sensibilité est-elle utile pour une entreprise fortement endettée ?',
                        'answers' => [
                            ['answer' => 'Elle permet d’évaluer l’effet de variations du chiffre d’affaires, des marges ou des taux sur la capacité de remboursement', 'iscorrect' => true],
                            ['answer' => 'Elle garantit les résultats futurs', 'iscorrect' => false],
                            ['answer' => 'Elle élimine le risque financier', 'iscorrect' => false],
                            ['answer' => 'Elle remplace les états financiers', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle combinaison représente le profil de risque financier le plus préoccupant ?',
                        'answers' => [
                            ['answer' => 'Dette élevée, faible couverture des intérêts, flux opérationnels faibles et échéances concentrées', 'iscorrect' => true],
                            ['answer' => 'Dette modérée, flux solides et échéances bien réparties', 'iscorrect' => false],
                            ['answer' => 'Faible endettement et liquidité élevée', 'iscorrect' => false],
                            ['answer' => 'Flux opérationnels solides et couverture élevée', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Analyse comparative et benchmarking financier',
                'questions' => [
                    [
                        'question' => 'Pourquoi le benchmarking financier doit-il privilégier des entreprises comparables ?',
                        'answers' => [
                            ['answer' => 'Les différences de modèle économique et d’intensité capitalistique peuvent modifier fortement les ratios', 'iscorrect' => true],
                            ['answer' => 'Toutes les entreprises ont les mêmes ratios', 'iscorrect' => false],
                            ['answer' => 'Les ratios sont indépendants du secteur', 'iscorrect' => false],
                            ['answer' => 'La taille n’a jamais d’importance', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise possède une marge nette supérieure au secteur mais une rotation des actifs inférieure. Quelle conclusion est possible ?',
                        'answers' => [
                            ['answer' => 'Elle peut compenser une utilisation moins intensive des actifs par une meilleure marge', 'iscorrect' => true],
                            ['answer' => 'Elle est nécessairement moins rentable', 'iscorrect' => false],
                            ['answer' => 'La marge n’a aucune importance', 'iscorrect' => false],
                            ['answer' => 'La rotation supérieure est toujours préférable', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les médianes sectorielles peuvent-elles être préférables aux moyennes pour certains ratios ?',
                        'answers' => [
                            ['answer' => 'Elles sont moins sensibles aux valeurs extrêmes', 'iscorrect' => true],
                            ['answer' => 'Elles ignorent toutes les entreprises', 'iscorrect' => false],
                            ['answer' => 'Elles garantissent une meilleure performance', 'iscorrect' => false],
                            ['answer' => 'Elles remplacent les données individuelles', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise possède un ROE supérieur à ses concurrents mais un ROA inférieur. Quelle hypothèse est plausible ?',
                        'answers' => [
                            ['answer' => 'Elle utilise davantage de levier financier', 'iscorrect' => true],
                            ['answer' => 'Elle n’a aucune dette', 'iscorrect' => false],
                            ['answer' => 'Elle possède nécessairement une meilleure marge', 'iscorrect' => false],
                            ['answer' => 'Elle a forcément une meilleure liquidité', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi faut-il normaliser certains ratios avant de comparer des entreprises ?',
                        'answers' => [
                            ['answer' => 'Pour réduire l’effet des différences de taille, de structure ou d’éléments exceptionnels', 'iscorrect' => true],
                            ['answer' => 'Pour supprimer toutes les données comptables', 'iscorrect' => false],
                            ['answer' => 'Pour garantir des résultats identiques', 'iscorrect' => false],
                            ['answer' => 'Pour éliminer les différences économiques', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise affiche une marge supérieure mais un cash-flow inférieur à celui de ses concurrents. Quelle analyse est pertinente ?',
                        'answers' => [
                            ['answer' => 'Examiner le BFR, les investissements, la conversion du résultat en trésorerie et les politiques comptables', 'iscorrect' => true],
                            ['answer' => 'Conclure automatiquement à une meilleure performance', 'iscorrect' => false],
                            ['answer' => 'Ignorer les flux', 'iscorrect' => false],
                            ['answer' => 'Comparer uniquement les bénéfices', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une comparaison sur une seule année peut-elle être insuffisante ?',
                        'answers' => [
                            ['answer' => 'Elle peut capturer un événement exceptionnel plutôt qu’une tendance structurelle', 'iscorrect' => true],
                            ['answer' => 'Une année ne contient aucune information', 'iscorrect' => false],
                            ['answer' => 'Les ratios ne fonctionnent que sur dix ans', 'iscorrect' => false],
                            ['answer' => 'Les états financiers annuels sont inutiles', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel facteur macroéconomique peut modifier la comparaison des entreprises fortement endettées ?',
                        'answers' => [
                            ['answer' => 'Le niveau et l’évolution des taux d’intérêt', 'iscorrect' => true],
                            ['answer' => 'La couleur du logo', 'iscorrect' => false],
                            ['answer' => 'Le nombre de bureaux uniquement', 'iscorrect' => false],
                            ['answer' => 'Le nom commercial', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi comparer les tendances des ratios plutôt que leurs niveaux uniquement ?',
                        'answers' => [
                            ['answer' => 'La direction et la vitesse des changements peuvent révéler une amélioration ou une détérioration', 'iscorrect' => true],
                            ['answer' => 'Les niveaux n’ont aucune importance', 'iscorrect' => false],
                            ['answer' => 'Les tendances garantissent les bénéfices', 'iscorrect' => false],
                            ['answer' => 'Les ratios ne doivent jamais être comparés', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle méthode fournit généralement l’évaluation comparative la plus robuste ?',
                        'answers' => [
                            ['answer' => 'Combiner analyse historique, comparaison sectorielle, ratios et contexte économique', 'iscorrect' => true],
                            ['answer' => 'Utiliser uniquement le ratio courant', 'iscorrect' => false],
                            ['answer' => 'Utiliser uniquement le bénéfice net', 'iscorrect' => false],
                            ['answer' => 'Comparer uniquement le chiffre d’affaires', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Détection avancée des signaux comptables',
                'questions' => [
                    [
                        'question' => 'Quel changement peut signaler une détérioration potentielle de la qualité des créances ?',
                        'answers' => [
                            ['answer' => 'Une forte hausse des créances et des retards de paiement par rapport aux ventes', 'iscorrect' => true],
                            ['answer' => 'Une baisse du DSO', 'iscorrect' => false],
                            ['answer' => 'Une baisse des créances', 'iscorrect' => false],
                            ['answer' => 'Une hausse des encaissements', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une hausse rapide des stocks par rapport aux ventes mérite-t-elle une analyse ?',
                        'answers' => [
                            ['answer' => 'Elle peut signaler un ralentissement de la demande, une accumulation ou un risque d’obsolescence', 'iscorrect' => true],
                            ['answer' => 'Elle prouve toujours une croissance saine', 'iscorrect' => false],
                            ['answer' => 'Elle réduit automatiquement le BFR', 'iscorrect' => false],
                            ['answer' => 'Elle garantit une hausse des marges', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel signal peut indiquer une utilisation importante d’estimations comptables ?',
                        'answers' => [
                            ['answer' => 'Des variations significatives de provisions ou dépréciations liées à des hypothèses sensibles', 'iscorrect' => true],
                            ['answer' => 'Une stabilité parfaite des résultats', 'iscorrect' => false],
                            ['answer' => 'Une baisse des créances', 'iscorrect' => false],
                            ['answer' => 'Une hausse des encaissements', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les changements de méthodes comptables doivent-ils être pris en compte dans une analyse historique ?',
                        'answers' => [
                            ['answer' => 'Ils peuvent limiter la comparabilité des données entre les périodes', 'iscorrect' => true],
                            ['answer' => 'Ils augmentent toujours les bénéfices', 'iscorrect' => false],
                            ['answer' => 'Ils éliminent les différences sectorielles', 'iscorrect' => false],
                            ['answer' => 'Ils n’ont jamais d’impact sur l’analyse', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise capitalise davantage de coûts auparavant comptabilisés en charges. Quel effet potentiel peut apparaître ?',
                        'answers' => [
                            ['answer' => 'Le résultat courant peut augmenter à court terme tandis que les actifs augmentent également', 'iscorrect' => true],
                            ['answer' => 'Le chiffre d’affaires disparaît', 'iscorrect' => false],
                            ['answer' => 'Les capitaux propres deviennent nécessairement nuls', 'iscorrect' => false],
                            ['answer' => 'La trésorerie augmente nécessairement du même montant', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi analyser les dépréciations d’actifs ?',
                        'answers' => [
                            ['answer' => 'Elles peuvent révéler une baisse de valeur économique ou un changement significatif dans les hypothèses', 'iscorrect' => true],
                            ['answer' => 'Elles sont toujours des entrées de trésorerie', 'iscorrect' => false],
                            ['answer' => 'Elles augmentent toujours les actifs', 'iscorrect' => false],
                            ['answer' => 'Elles n’ont jamais de lien avec la performance', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Une baisse inhabituelle des provisions malgré une hausse des risques opérationnels doit-elle être examinée ?',
                        'answers' => [
                            ['answer' => 'Oui, car elle peut modifier artificiellement la charge comptable et le résultat', 'iscorrect' => true],
                            ['answer' => 'Non, les provisions n’influencent jamais le résultat', 'iscorrect' => false],
                            ['answer' => 'Non, elles sont toujours indépendantes des risques', 'iscorrect' => false],
                            ['answer' => 'Oui, car elle augmente nécessairement les ventes', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel indicateur peut aider à repérer une divergence entre croissance des ventes et recouvrement ?',
                        'answers' => [
                            ['answer' => 'L’évolution du délai moyen de recouvrement par rapport à celle du chiffre d’affaires', 'iscorrect' => true],
                            ['answer' => 'Le nombre d’actions uniquement', 'iscorrect' => false],
                            ['answer' => 'Le capital social uniquement', 'iscorrect' => false],
                            ['answer' => 'La valeur nominale des obligations', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les transactions avec les parties liées peuvent-elles être importantes dans une analyse ?',
                        'answers' => [
                            ['answer' => 'Elles peuvent ne pas avoir les mêmes conditions économiques qu’une transaction avec un tiers indépendant', 'iscorrect' => true],
                            ['answer' => 'Elles sont toujours frauduleuses', 'iscorrect' => false],
                            ['answer' => 'Elles n’ont jamais d’impact financier', 'iscorrect' => false],
                            ['answer' => 'Elles remplacent les ventes normales', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle approche est la plus appropriée face à un signal comptable inhabituel ?',
                        'answers' => [
                            ['answer' => 'Rechercher des explications dans les notes, les flux, les tendances et le contexte avant de conclure', 'iscorrect' => true],
                            ['answer' => 'Conclure immédiatement à une fraude', 'iscorrect' => false],
                            ['answer' => 'Ignorer le signal', 'iscorrect' => false],
                            ['answer' => 'Supposer automatiquement une excellente performance', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Cas intégrés d’analyse financière',
                'questions' => [
                    [
                        'question' => 'Une entreprise affiche une croissance des ventes de 25 %, des créances de 45 % et un flux opérationnel en baisse. Quelle zone mérite une attention prioritaire ?',
                        'answers' => [
                            ['answer' => 'La conversion des ventes en trésorerie et la qualité des créances', 'iscorrect' => true],
                            ['answer' => 'Uniquement le capital social', 'iscorrect' => false],
                            ['answer' => 'Uniquement les immobilisations', 'iscorrect' => false],
                            ['answer' => 'Uniquement les dividendes', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise augmente son ROE de 12 % à 20 % tandis que son endettement progresse fortement. Quelle analyse est nécessaire ?',
                        'answers' => [
                            ['answer' => 'Décomposer le ROE et évaluer si le gain provient principalement du levier financier', 'iscorrect' => true],
                            ['answer' => 'Conclure immédiatement à une amélioration opérationnelle', 'iscorrect' => false],
                            ['answer' => 'Ignorer la dette', 'iscorrect' => false],
                            ['answer' => 'Conclure que le risque a diminué', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Une société possède une marge nette supérieure au secteur mais un flux de trésorerie disponible négatif depuis trois ans. Quelle hypothèse est pertinente ?',
                        'answers' => [
                            ['answer' => 'Les investissements ou le BFR peuvent absorber une partie importante des résultats générés', 'iscorrect' => true],
                            ['answer' => 'La marge est nécessairement fausse', 'iscorrect' => false],
                            ['answer' => 'Le chiffre d’affaires est nécessairement surestimé', 'iscorrect' => false],
                            ['answer' => 'La société n’a aucun actif', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise réduit son ratio d’endettement mais voit sa liquidité se détériorer. Quelle explication est possible ?',
                        'answers' => [
                            ['answer' => 'Elle peut avoir utilisé sa trésorerie pour rembourser la dette sans améliorer suffisamment son cycle d’exploitation', 'iscorrect' => true],
                            ['answer' => 'La dette et la liquidité sont toujours identiques', 'iscorrect' => false],
                            ['answer' => 'Le remboursement de dette augmente toujours la trésorerie', 'iscorrect' => false],
                            ['answer' => 'La liquidité ne dépend jamais de la trésorerie', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise possède un ratio courant de 2,0 mais un ratio de liquidité réduite de 0,8. Que peut-on en déduire ?',
                        'answers' => [
                            ['answer' => 'Une part importante des actifs courants est constituée d’éléments moins immédiatement liquides, notamment les stocks', 'iscorrect' => true],
                            ['answer' => 'La solvabilité est nécessairement excellente', 'iscorrect' => false],
                            ['answer' => 'Les stocks sont inexistants', 'iscorrect' => false],
                            ['answer' => 'Les dettes sont nécessairement nulles', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise présente une hausse des bénéfices, une hausse du goodwill et une baisse du ROIC. Quelle interprétation mérite d’être étudiée ?',
                        'answers' => [
                            ['answer' => 'Les acquisitions peuvent avoir accru le capital investi plus rapidement que les résultats opérationnels', 'iscorrect' => true],
                            ['answer' => 'Les acquisitions ont nécessairement créé de la valeur', 'iscorrect' => false],
                            ['answer' => 'Le goodwill est toujours sans risque', 'iscorrect' => false],
                            ['answer' => 'Le ROIC ne dépend jamais du capital investi', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise affiche une forte croissance mais son cycle de conversion de trésorerie passe de 30 à 75 jours. Quel risque apparaît ?',
                        'answers' => [
                            ['answer' => 'La croissance peut consommer davantage de trésorerie et accroître les besoins de financement', 'iscorrect' => true],
                            ['answer' => 'La croissance devient automatiquement plus rentable', 'iscorrect' => false],
                            ['answer' => 'La liquidité augmente nécessairement', 'iscorrect' => false],
                            ['answer' => 'Le BFR diminue nécessairement', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise possède un flux opérationnel solide mais une couverture des intérêts en baisse. Quelle conclusion est la plus appropriée ?',
                        'answers' => [
                            ['answer' => 'La génération de trésorerie est favorable, mais la structure de dette et le coût du financement doivent être surveillés', 'iscorrect' => true],
                            ['answer' => 'La dette est sans risque', 'iscorrect' => false],
                            ['answer' => 'La solvabilité est automatiquement garantie', 'iscorrect' => false],
                            ['answer' => 'Les flux opérationnels n’ont aucune importance', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle situation représente le meilleur profil financier global parmi les suivantes ?',
                        'answers' => [
                            ['answer' => 'Croissance rentable, flux opérationnels récurrents, BFR maîtrisé, liquidité adéquate et dette soutenable', 'iscorrect' => true],
                            ['answer' => 'Forte croissance accompagnée d’une dette excessive et de flux négatifs', 'iscorrect' => false],
                            ['answer' => 'Bénéfice élevé mais créances en forte explosion et flux négatifs', 'iscorrect' => false],
                            ['answer' => 'ROE élevé uniquement grâce à un levier extrême', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle démarche constitue une conclusion professionnelle d’analyse financière ?',
                        'answers' => [
                            ['answer' => 'Identifier les forces, faiblesses, tendances, risques et facteurs explicatifs en croisant plusieurs sources financières', 'iscorrect' => true],
                            ['answer' => 'Se baser sur un seul ratio', 'iscorrect' => false],
                            ['answer' => 'Se baser uniquement sur le résultat net', 'iscorrect' => false],
                            ['answer' => 'Ignorer le secteur et le contexte économique', 'iscorrect' => false],
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

                // Mélange des réponses pour éviter que la bonne réponse
                // soit systématiquement placée en première position.
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
