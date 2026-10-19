```php
<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Major;
use App\Models\Subject;
use App\Models\Quiz;
use App\Models\Question;
use App\Models\Answer;

class FinancialStatementAnalysisIntermediateSeeder extends Seeder
{
    public function run(): void
    {
        $major = Major::where('slug', 'finance')->firstOrFail();

        $subject = Subject::where('major_id', $major->id)
            ->where('slug', 'financial-statement-analysis')
            ->firstOrFail();

        $quizzes = [
            [
                'title' => 'Analyse horizontale et verticale',
                'questions' => [
                    ['question' => 'Quel est l’objectif principal de l’analyse horizontale ?', 'answers' => [
                        ['answer' => 'Identifier l’évolution des postes financiers entre plusieurs périodes', 'iscorrect' => true],
                        ['answer' => 'Mesurer uniquement la trésorerie disponible', 'iscorrect' => false],
                        ['answer' => 'Calculer uniquement les capitaux propres', 'iscorrect' => false],
                        ['answer' => 'Déterminer le prix futur d’une action', 'iscorrect' => false],
                    ]],
                    ['question' => 'Dans une analyse horizontale, une hausse de 20 % du chiffre d’affaires signifie que :', 'answers' => [
                        ['answer' => 'Le chiffre d’affaires a augmenté d’un cinquième par rapport à la période de référence', 'iscorrect' => true],
                        ['answer' => 'Le bénéfice a nécessairement augmenté de 20 %', 'iscorrect' => false],
                        ['answer' => 'Les actifs ont nécessairement augmenté de 20 %', 'iscorrect' => false],
                        ['answer' => 'Les charges ont diminué de 20 %', 'iscorrect' => false],
                    ]],
                    ['question' => 'Quelle est la principale caractéristique de l’analyse verticale ?', 'answers' => [
                        ['answer' => 'Elle exprime les postes financiers en pourcentage d’une base de référence', 'iscorrect' => true],
                        ['answer' => 'Elle compare uniquement deux années', 'iscorrect' => false],
                        ['answer' => 'Elle exclut les charges', 'iscorrect' => false],
                        ['answer' => 'Elle utilise uniquement les flux de trésorerie', 'iscorrect' => false],
                    ]],
                    ['question' => 'Dans une analyse verticale du compte de résultat, le chiffre d’affaires sert souvent de :', 'answers' => [
                        ['answer' => 'Base de référence égale à 100 %', 'iscorrect' => true],
                        ['answer' => 'Dette financière', 'iscorrect' => false],
                        ['answer' => 'Capitaux propres', 'iscorrect' => false],
                        ['answer' => 'Trésorerie minimale', 'iscorrect' => false],
                    ]],
                    ['question' => 'Une charge représente 30 000 € pour un chiffre d’affaires de 150 000 €. Quel est son poids relatif ?', 'answers' => [
                        ['answer' => '20 %', 'iscorrect' => true],
                        ['answer' => '15 %', 'iscorrect' => false],
                        ['answer' => '30 %', 'iscorrect' => false],
                        ['answer' => '50 %', 'iscorrect' => false],
                    ]],
                    ['question' => 'Pourquoi l’analyse horizontale est-elle utile ?', 'answers' => [
                        ['answer' => 'Elle permet de repérer les tendances et variations significatives', 'iscorrect' => true],
                        ['answer' => 'Elle garantit la rentabilité future', 'iscorrect' => false],
                        ['answer' => 'Elle supprime les effets économiques', 'iscorrect' => false],
                        ['answer' => 'Elle remplace tous les ratios financiers', 'iscorrect' => false],
                    ]],
                    ['question' => 'Une diminution des stocks alors que les ventes augmentent peut notamment indiquer :', 'answers' => [
                        ['answer' => 'Une amélioration possible de la gestion ou de la rotation des stocks', 'iscorrect' => true],
                        ['answer' => 'Une baisse certaine de la rentabilité', 'iscorrect' => false],
                        ['answer' => 'Une hausse obligatoire de la dette', 'iscorrect' => false],
                        ['answer' => 'Une disparition des créances clients', 'iscorrect' => false],
                    ]],
                    ['question' => 'Quel est le principal risque d’une comparaison horizontale sans contexte ?', 'answers' => [
                        ['answer' => 'Attribuer une signification incorrecte à une variation', 'iscorrect' => true],
                        ['answer' => 'Obtenir toujours un résultat nul', 'iscorrect' => false],
                        ['answer' => 'Éliminer les données comptables', 'iscorrect' => false],
                        ['answer' => 'Transformer automatiquement une perte en bénéfice', 'iscorrect' => false],
                    ]],
                    ['question' => 'Si les actifs passent de 500 000 € à 600 000 €, leur croissance est de :', 'answers' => [
                        ['answer' => '20 %', 'iscorrect' => true],
                        ['answer' => '10 %', 'iscorrect' => false],
                        ['answer' => '16,7 %', 'iscorrect' => false],
                        ['answer' => '25 %', 'iscorrect' => false],
                    ]],
                    ['question' => 'Pourquoi combiner analyse horizontale et verticale ?', 'answers' => [
                        ['answer' => 'Pour comprendre à la fois l’évolution et la composition des états financiers', 'iscorrect' => true],
                        ['answer' => 'Pour éviter toute analyse du bilan', 'iscorrect' => false],
                        ['answer' => 'Pour garantir les bénéfices futurs', 'iscorrect' => false],
                        ['answer' => 'Pour remplacer les données comptables', 'iscorrect' => false],
                    ]],
                ],
            ],

            [
                'title' => 'Analyse approfondie de la liquidité',
                'questions' => [
                    ['question' => 'Quelle formule correspond au ratio de liquidité générale ?', 'answers' => [
                        ['answer' => 'Actifs courants / Passifs courants', 'iscorrect' => true],
                        ['answer' => 'Passifs courants / Actifs non courants', 'iscorrect' => false],
                        ['answer' => 'Résultat net / Capitaux propres', 'iscorrect' => false],
                        ['answer' => 'Chiffre d’affaires / Actifs totaux', 'iscorrect' => false],
                    ]],
                    ['question' => 'Une entreprise possède 300 000 € d’actifs courants et 200 000 € de passifs courants. Son ratio de liquidité générale est :', 'answers' => [
                        ['answer' => '1,5', 'iscorrect' => true],
                        ['answer' => '0,67', 'iscorrect' => false],
                        ['answer' => '2,0', 'iscorrect' => false],
                        ['answer' => '100 %', 'iscorrect' => false],
                    ]],
                    ['question' => 'Quel élément est généralement exclu du ratio de liquidité réduite ?', 'answers' => [
                        ['answer' => 'Les stocks', 'iscorrect' => true],
                        ['answer' => 'La trésorerie', 'iscorrect' => false],
                        ['answer' => 'Les créances clients', 'iscorrect' => false],
                        ['answer' => 'Les placements rapidement disponibles', 'iscorrect' => false],
                    ]],
                    ['question' => 'Pourquoi une créance client n’est-elle pas équivalente à de la trésorerie ?', 'answers' => [
                        ['answer' => 'Elle doit encore être recouvrée avant de devenir une entrée de trésorerie', 'iscorrect' => true],
                        ['answer' => 'Elle est toujours une dette', 'iscorrect' => false],
                        ['answer' => 'Elle ne peut jamais être encaissée', 'iscorrect' => false],
                        ['answer' => 'Elle représente toujours une perte', 'iscorrect' => false],
                    ]],
                    ['question' => 'Que peut provoquer une augmentation excessive du besoin en fonds de roulement ?', 'answers' => [
                        ['answer' => 'Une pression accrue sur la trésorerie', 'iscorrect' => true],
                        ['answer' => 'Une disparition automatique des dettes', 'iscorrect' => false],
                        ['answer' => 'Une hausse garantie du résultat net', 'iscorrect' => false],
                        ['answer' => 'Une diminution automatique des stocks', 'iscorrect' => false],
                    ]],
                    ['question' => 'Une hausse importante du délai moyen de recouvrement peut indiquer :', 'answers' => [
                        ['answer' => 'Un ralentissement des encaissements clients', 'iscorrect' => true],
                        ['answer' => 'Une diminution certaine des créances', 'iscorrect' => false],
                        ['answer' => 'Une amélioration automatique de la trésorerie', 'iscorrect' => false],
                        ['answer' => 'Une réduction obligatoire des ventes', 'iscorrect' => false],
                    ]],
                    ['question' => 'Pourquoi une entreprise avec un ratio courant élevé peut-elle malgré tout manquer de liquidités ?', 'answers' => [
                        ['answer' => 'Une partie importante de ses actifs courants peut être difficile à convertir rapidement en trésorerie', 'iscorrect' => true],
                        ['answer' => 'Les actifs courants sont toujours des dettes', 'iscorrect' => false],
                        ['answer' => 'Le ratio courant mesure uniquement le bénéfice', 'iscorrect' => false],
                        ['answer' => 'La trésorerie n’a aucune importance', 'iscorrect' => false],
                    ]],
                    ['question' => 'Quel facteur améliore directement le cycle de conversion de trésorerie ?', 'answers' => [
                        ['answer' => Une réduction du délai de recouvrement des créances', 'iscorrect' => true],
                        ['answer' => 'Une augmentation permanente des stocks', 'iscorrect' => false],
                        ['answer' => 'Un allongement du délai client', 'iscorrect' => false],
                        ['answer' => 'Une diminution des encaissements', 'iscorrect' => false],
                    ]],
                    ['question' => 'Pourquoi faut-il comparer les ratios de liquidité avec ceux du secteur ?', 'answers' => [
                        ['answer' => 'Les besoins de liquidité diffèrent selon les modèles économiques', 'iscorrect' => true],
                        ['answer' => 'Toutes les entreprises ont les mêmes cycles opérationnels', 'iscorrect' => false],
                        ['answer' => 'Le secteur détermine automatiquement le bénéfice', 'iscorrect' => false],
                        ['answer' => 'Les ratios sont identiques dans toutes les industries', 'iscorrect' => false],
                    ]],
                    ['question' => 'Une baisse du ratio de liquidité générale sur trois années doit principalement conduire à :', 'answers' => [
                        ['answer' => 'Une analyse des causes de la détérioration de la capacité à court terme', 'iscorrect' => true],
                        ['answer' => 'Conclure automatiquement à la faillite', 'iscorrect' => false],
                        ['answer' => 'Ignorer les flux de trésorerie', 'iscorrect' => false],
                        ['answer' => 'Augmenter automatiquement les dividendes', 'iscorrect' => false],
                    ]],
                ],
            ],

            [
                'title' => 'Analyse de la solvabilité et du levier financier',
                'questions' => [
                    ['question' => 'Que mesure principalement le ratio dettes/actifs ?', 'answers' => [
                        ['answer' => 'La proportion des actifs financée par les dettes', 'iscorrect' => true],
                        ['answer' => 'La rentabilité des capitaux propres', 'iscorrect' => false],
                        ['answer' => 'La rotation des stocks', 'iscorrect' => false],
                        ['answer' => 'La marge brute', 'iscorrect' => false],
                    ]],
                    ['question' => 'Si les dettes sont de 400 000 € et les actifs de 1 000 000 €, le ratio dettes/actifs est :', 'answers' => [
                        ['answer' => '40 %', 'iscorrect' => true],
                        ['answer' => '25 %', 'iscorrect' => false],
                        ['answer' => '60 %', 'iscorrect' => false],
                        ['answer' => '2,5 %', 'iscorrect' => false],
                    ]],
                    ['question' => 'Que mesure le ratio d’autonomie financière lorsqu’il est basé sur les capitaux propres ?', 'answers' => [
                        ['answer' => La part du financement provenant des capitaux propres', 'iscorrect' => true],
                        ['answer' => 'La vitesse de rotation des stocks', 'iscorrect' => false],
                        ['answer' => 'Le montant des ventes à crédit', 'iscorrect' => false],
                        ['answer' => 'La marge opérationnelle', 'iscorrect' => false],
                    ]],
                    ['question' => 'Quel est l’effet potentiel d’un levier financier élevé ?', 'answers' => [
                        ['answer' => 'Il peut amplifier les gains comme les pertes pour les actionnaires', 'iscorrect' => true],
                        ['answer' => 'Il élimine automatiquement le risque', 'iscorrect' => false],
                        ['answer' => 'Il garantit une hausse du bénéfice', 'iscorrect' => false],
                        ['answer' => 'Il empêche tout financement externe', 'iscorrect' => false],
                    ]],
                    ['question' => 'Que mesure généralement le ratio de couverture des intérêts ?', 'answers' => [
                        ['answer' => 'La capacité du résultat d’exploitation à couvrir les intérêts', 'iscorrect' => true],
                        ['answer' => 'La capacité des stocks à générer des ventes', 'iscorrect' => false],
                        ['answer' => 'La liquidité des capitaux propres', 'iscorrect' => false],
                        ['answer' => 'La valeur comptable des immobilisations', 'iscorrect' => false],
                    ]],
                    ['question' => 'Une baisse continue de la couverture des intérêts peut signaler :', 'answers' => [
                        ['answer' => 'Une capacité réduite à supporter les charges financières', 'iscorrect' => true],
                        ['answer' => 'Une amélioration certaine de la solvabilité', 'iscorrect' => false],
                        ['answer' => 'Une baisse obligatoire de la dette', 'iscorrect' => false],
                        ['answer' => 'Une hausse automatique des capitaux propres', 'iscorrect' => false],
                    ]],
                    ['question' => 'Pourquoi une entreprise peut-elle augmenter son ROE grâce à l’endettement ?', 'answers' => [
                        ['answer' => 'Le levier peut amplifier le rendement des capitaux propres lorsque le rendement des actifs dépasse le coût de la dette', 'iscorrect' => true],
                        ['answer' => 'Les intérêts sont toujours nuls', 'iscorrect' => false],
                        ['answer' => 'La dette crée automatiquement du bénéfice', 'iscorrect' => false],
                        ['answer' => 'Le risque financier disparaît', 'iscorrect' => false],
                    ]],
                    ['question' => 'Quel est le principal risque d’un levier financier excessif ?', 'answers' => [
                        ['answer' => 'Une plus grande vulnérabilité aux baisses de résultat et aux charges financières', 'iscorrect' => true],
                        ['answer' => 'Une réduction garantie des intérêts', 'iscorrect' => false],
                        ['answer' => 'Une amélioration automatique de la trésorerie', 'iscorrect' => false],
                        ['answer' => 'Une diminution certaine des obligations', 'iscorrect' => false],
                    ]],
                    ['question' => 'Pourquoi analyser l’échéancier des dettes ?', 'answers' => [
                        ['answer' => 'Pour évaluer les besoins futurs de remboursement et les risques de refinancement', 'iscorrect' => true],
                        ['answer' => 'Pour déterminer uniquement les ventes', 'iscorrect' => false],
                        ['answer' => 'Pour calculer la marge brute', 'iscorrect' => false],
                        ['answer' => 'Pour supprimer les dettes existantes', 'iscorrect' => false],
                    ]],
                    ['question' => 'Une entreprise dispose d’un résultat d’exploitation de 120 000 € et de charges d’intérêts de 30 000 €. Sa couverture des intérêts est :', 'answers' => [
                        ['answer' => '4 fois', 'iscorrect' => true],
                        ['answer' => '0,25 fois', 'iscorrect' => false],
                        ['answer' => '3 fois', 'iscorrect' => false],
                        ['answer' => '150 fois', 'iscorrect' => false],
                    ]],
                ],
            ],

            [
                'title' => 'Analyse du compte de résultat',
                'questions' => [
                    ['question' => 'Pourquoi analyser séparément les différentes marges ?', 'answers' => [
                        ['answer' => 'Pour identifier à quel niveau de l’activité la rentabilité se crée ou se détériore', 'iscorrect' => true],
                        ['answer' => 'Pour ignorer les charges financières', 'iscorrect' => false],
                        ['answer' => 'Pour calculer uniquement la trésorerie', 'iscorrect' => false],
                        ['answer' => 'Pour éviter toute comparaison sectorielle', 'iscorrect' => false],
                    ]],
                    ['question' => 'Une baisse de la marge brute peut être causée par :', 'answers' => [
                        ['answer' => 'Une augmentation du coût des ventes plus rapide que celle des ventes', 'iscorrect' => true],
                        ['answer' => 'Une diminution obligatoire des charges financières', 'iscorrect' => false],
                        ['answer' => 'Une hausse automatique des capitaux propres', 'iscorrect' => false],
                        ['answer' => 'Une baisse nécessaire des stocks', 'iscorrect' => false],
                    ]],
                    ['question' => 'Une marge opérationnelle en baisse alors que la marge brute reste stable peut indiquer :', 'answers' => [
                        ['answer' => 'Une augmentation des charges d’exploitation', 'iscorrect' => true],
                        ['answer' => 'Une disparition des frais commerciaux', 'iscorrect' => false],
                        ['answer' => 'Une baisse automatique des salaires', 'iscorrect' => false],
                        ['answer' => 'Une hausse obligatoire de la trésorerie', 'iscorrect' => false],
                    ]],
                    ['question' => 'Quelle différence fondamentale existe entre résultat opérationnel et résultat net ?', 'answers' => [
                        ['answer' => 'Le résultat net tient compte notamment des éléments financiers et fiscaux appropriés', 'iscorrect' => true],
                        ['answer' => 'Le résultat opérationnel comprend toujours les dividendes', 'iscorrect' => false],
                        ['answer' => 'Le résultat net est toujours supérieur au résultat opérationnel', 'iscorrect' => false],
                        ['answer' => 'Ils sont toujours identiques', 'iscorrect' => false],
                    ]],
                    ['question' => 'Une hausse du chiffre d’affaires accompagnée d’une baisse du résultat net peut révéler :', 'answers' => [
                        ['answer' => 'Une dégradation des marges ou une hausse des charges', 'iscorrect' => true],
                        ['answer' => 'Une amélioration certaine de l’efficacité', 'iscorrect' => false],
                        ['answer' => 'Une baisse obligatoire des coûts', 'iscorrect' => false],
                        ['answer' => 'Une hausse automatique des flux opérationnels', 'iscorrect' => false],
                    ]],
                    ['question' => 'Pourquoi examiner les éléments non récurrents du résultat ?', 'answers' => [
                        ['answer' => 'Pour distinguer la performance habituelle des effets exceptionnels', 'iscorrect' => true],
                        ['answer' => 'Pour augmenter artificiellement le bénéfice', 'iscorrect' => false],
                        ['answer' => 'Pour éliminer toutes les charges', 'iscorrect' => false],
                        ['answer' => 'Pour remplacer le chiffre d’affaires', 'iscorrect' => false],
                    ]],
                    ['question' => 'Quel indicateur relie généralement le bénéfice net aux ventes ?', 'answers' => [
                        ['answer' => 'La marge nette', 'iscorrect' => true],
                        ['answer' => 'Le ratio d’endettement', 'iscorrect' => false],
                        ['answer' => 'Le ratio courant', 'iscorrect' => false],
                        ['answer' => 'Le délai fournisseur', 'iscorrect' => false],
                    ]],
                    ['question' => 'Une entreprise réalise 500 000 € de ventes et 50 000 € de bénéfice net. Sa marge nette est :', 'answers' => [
                        ['answer' => '10 %', 'iscorrect' => true],
                        ['answer' => '5 %', 'iscorrect' => false],
                        ['answer' => '50 %', 'iscorrect' => false],
                        ['answer' => '20 %', 'iscorrect' => false],
                    ]],
                    ['question' => 'Pourquoi analyser les charges en pourcentage du chiffre d’affaires ?', 'answers' => [
                        ['answer' => 'Pour évaluer leur évolution relative et leur poids dans l’activité', 'iscorrect' => true],
                        ['answer' => 'Pour supprimer les charges', 'iscorrect' => false],
                        ['answer' => 'Pour déterminer automatiquement les dividendes', 'iscorrect' => false],
                        ['answer' => 'Pour garantir la croissance future', 'iscorrect' => false],
                    ]],
                    ['question' => 'Quel signal est généralement favorable lors de l’analyse du compte de résultat ?', 'answers' => [
                        ['answer' => 'Une progression durable des ventes accompagnée d’une amélioration des marges', 'iscorrect' => true],
                        ['answer' => 'Une hausse des ventes accompagnée d’une explosion des charges sans contrôle', 'iscorrect' => false],
                        ['answer' => 'Une baisse constante du résultat opérationnel', 'iscorrect' => false],
                        ['answer' => 'Une augmentation continue des pertes', 'iscorrect' => false],
                    ]],
                ],
            ],

            [
                'title' => 'Analyse des flux de trésorerie',
                'questions' => [
                    ['question' => 'Pourquoi le flux de trésorerie opérationnel est-il important ?', 'answers' => [
                        ['answer' => 'Il indique si l’activité courante génère suffisamment de trésorerie', 'iscorrect' => true],
                        ['answer' => 'Il mesure uniquement les investissements', 'iscorrect' => false],
                        ['answer' => 'Il mesure uniquement les dividendes', 'iscorrect' => false],
                        ['answer' => 'Il remplace le compte de résultat', 'iscorrect' => false],
                    ]],
                    ['question' => 'Une entreprise rentable mais dont le flux opérationnel est négatif doit notamment examiner :', 'answers' => [
                        ['answer' => 'Les variations du besoin en fonds de roulement et les éléments non encaissés', 'iscorrect' => true],
                        ['answer' => 'Uniquement ses immobilisations', 'iscorrect' => false],
                        ['answer' => 'Uniquement son capital social', 'iscorrect' => false],
                        ['answer' => 'Uniquement ses dividendes futurs', 'iscorrect' => false],
                    ]],
                    ['question' => 'Un achat important d’immobilisations apparaît généralement comme :', 'answers' => [
                        ['answer' => 'Un flux de trésorerie d’investissement négatif', 'iscorrect' => true],
                        ['answer' => 'Un flux opérationnel positif', 'iscorrect' => false],
                        ['answer' => 'Un flux de financement positif', 'iscorrect' => false],
                        ['answer' => 'Un produit d’exploitation', 'iscorrect' => false],
                    ]],
                    ['question' => 'Une émission d’actions génère généralement :', 'answers' => [
                        ['answer' => 'Un flux de financement positif', 'iscorrect' => true],
                        ['answer' => 'Un flux d’investissement négatif', 'iscorrect' => false],
                        ['answer' => 'Une charge d’exploitation', 'iscorrect' => false],
                        ['answer' => 'Une diminution obligatoire des capitaux propres', 'iscorrect' => false],
                    ]],
                    ['question' => 'Pourquoi les amortissements sont-ils généralement ajoutés au résultat dans la méthode indirecte ?', 'answers' => [
                        ['answer' => 'Ils réduisent le résultat comptable sans constituer une sortie de trésorerie de la période', 'iscorrect' => true],
                        ['answer' => 'Ils représentent toujours une entrée de trésorerie', 'iscorrect' => false],
                        ['answer' => 'Ils augmentent les ventes', 'iscorrect' => false],
                        ['answer' => 'Ils diminuent les capitaux propres directement', 'iscorrect' => false],
                    ]],
                    ['question' => 'Une hausse des créances clients, toutes choses égales par ailleurs, tend à :', 'answers' => [
                        ['answer' => 'Réduire le flux de trésorerie opérationnel', 'iscorrect' => true],
                        ['answer' => 'Augmenter automatiquement la trésorerie', 'iscorrect' => false],
                        ['answer' => 'Réduire les ventes', 'iscorrect' => false],
                        ['answer' => 'Augmenter les flux de financement', 'iscorrect' => false],
                    ]],
                    ['question' => 'Une hausse des dettes fournisseurs, toutes choses égales par ailleurs, tend à :', 'answers' => [
                        ['answer' => 'Augmenter temporairement le flux de trésorerie opérationnel', 'iscorrect' => true],
                        ['answer' => 'Réduire automatiquement le chiffre d’affaires', 'iscorrect' => false],
                        ['answer' => 'Créer une perte comptable', 'iscorrect' => false],
                        ['answer' => 'Diminuer les capitaux propres directement', 'iscorrect' => false],
                    ]],
                    ['question' => 'Que peut indiquer un flux opérationnel constamment positif ?', 'answers' => [
                        ['answer' => 'Une capacité récurrente de l’activité à générer de la trésorerie', 'iscorrect' => true],
                        ['answer' => 'Une absence totale de dettes', 'iscorrect' => false],
                        ['answer' => 'Une rentabilité garantie', 'iscorrect' => false],
                        ['answer' => 'Une absence totale d’investissements', 'iscorrect' => false],
                    ]],
                    ['question' => 'Pourquoi analyser le flux de trésorerie disponible ?', 'answers' => [
                        ['answer' => 'Pour apprécier les ressources restantes après certains investissements nécessaires', 'iscorrect' => true],
                        ['answer' => 'Pour calculer uniquement le chiffre d’affaires', 'iscorrect' => false],
                        ['answer' => 'Pour déterminer automatiquement le cours de l’action', 'iscorrect' => false],
                        ['answer' => 'Pour supprimer les charges financières', 'iscorrect' => false],
                    ]],
                    ['question' => 'Quel problème peut apparaître si les flux de financement servent constamment à couvrir les pertes opérationnelles ?', 'answers' => [
                        ['answer' => 'Une dépendance croissante au financement externe', 'iscorrect' => true],
                        ['answer' => 'Une amélioration automatique de l’autonomie financière', 'iscorrect' => false],
                        ['answer' => 'Une réduction certaine du risque', 'iscorrect' => false],
                        ['answer' => 'Une hausse obligatoire de la rentabilité', 'iscorrect' => false],
                    ]],
                ],
            ],

            [
                'title' => 'Analyse du fonds de roulement et du BFR',
                'questions' => [
                    ['question' => 'Que représente généralement le fonds de roulement ?', 'answers' => [
                        ['answer' => 'La marge de ressources stables disponible pour financer une partie de l’actif courant', 'iscorrect' => true],
                        ['answer' => 'Le chiffre d’affaires annuel', 'iscorrect' => false],
                        ['answer' => 'Le bénéfice net', 'iscorrect' => false],
                        ['answer' => 'Les seules dettes fournisseurs', 'iscorrect' => false],
                    ]],
                    ['question' => 'Que représente le besoin en fonds de roulement ?', 'answers' => [
                        ['answer' => 'Le besoin de financement lié principalement au cycle d’exploitation', 'iscorrect' => true],
                        ['answer' => 'Le total des immobilisations', 'iscorrect' => false],
                        ['answer' => 'Le capital social uniquement', 'iscorrect' => false],
                        ['answer' => 'Le bénéfice avant impôt', 'iscorrect' => false],
                    ]],
                    ['question' => 'Une augmentation des stocks, toutes choses égales par ailleurs, tend à :', 'answers' => [
                        ['answer' => 'Augmenter le besoin en fonds de roulement', 'iscorrect' => true],
                        ['answer' => 'Réduire automatiquement le BFR', 'iscorrect' => false],
                        ['answer' => 'Augmenter les capitaux propres', 'iscorrect' => false],
                        ['answer' => 'Créer automatiquement une entrée de trésorerie', 'iscorrect' => false],
                    ]],
                    ['question' => 'Une augmentation des dettes fournisseurs tend généralement à :', 'answers' => [
                        ['answer' => 'Réduire le besoin de financement du cycle d’exploitation', 'iscorrect' => true],
                        ['answer' => 'Augmenter automatiquement les stocks', 'iscorrect' => false],
                        ['answer' => 'Réduire les ventes', 'iscorrect' => false],
                        ['answer' => 'Créer une immobilisation', 'iscorrect' => false],
                    ]],
                    ['question' => 'Pourquoi un BFR élevé peut-il être préoccupant ?', 'answers' => [
                        ['answer' => 'Il peut immobiliser une part importante de la trésorerie dans le cycle d’exploitation', 'iscorrect' => true],
                        ['answer' => 'Il signifie toujours une perte', 'iscorrect' => false],
                        ['answer' => 'Il élimine les besoins de financement', 'iscorrect' => false],
                        ['answer' => 'Il garantit une forte liquidité', 'iscorrect' => false],
                    ]],
                    ['question' => 'Quel facteur peut contribuer à réduire le BFR ?', 'answers' => [
                        ['answer' => 'Réduire le délai de recouvrement des clients', 'iscorrect' => true],
                        ['answer' => 'Augmenter fortement les stocks sans hausse des ventes', 'iscorrect' => false],
                        ['answer' => 'Allonger les délais clients', 'iscorrect' => false],
                        ['answer' => 'Réduire les délais fournisseurs', 'iscorrect' => false],
                    ]],
                    ['question' => 'Une entreprise peut-elle avoir un BFR négatif ?', 'answers' => [
                        ['answer' => 'Oui, notamment lorsque les ressources du cycle d’exploitation dépassent ses besoins', 'iscorrect' => true],
                        ['answer' => 'Non, c’est mathématiquement impossible', 'iscorrect' => false],
                        ['answer' => 'Uniquement lorsqu’elle est en faillite', 'iscorrect' => false],
                        ['answer' => 'Uniquement si elle n’a aucun client', 'iscorrect' => false],
                    ]],
                    ['question' => 'Pourquoi le secteur d’activité influence-t-il le BFR ?', 'answers' => [
                        ['answer' => 'Les cycles de production, de stockage et de paiement varient selon les activités', 'iscorrect' => true],
                        ['answer' => 'Toutes les entreprises ont les mêmes cycles', 'iscorrect' => false],
                        ['answer' => 'Le BFR dépend uniquement du capital social', 'iscorrect' => false],
                        ['answer' => 'Le secteur n’a aucune influence', 'iscorrect' => false],
                    ]],
                    ['question' => 'Une entreprise réduit son délai client de 60 à 40 jours. Quel effet potentiel cela peut-il avoir ?', 'answers' => [
                        ['answer' => 'Une libération de trésorerie grâce à des encaissements plus rapides', 'iscorrect' => true],
                        ['answer' => 'Une augmentation automatique des stocks', 'iscorrect' => false],
                        ['answer' => 'Une baisse obligatoire du chiffre d’affaires', 'iscorrect' => false],
                        ['answer' => 'Une hausse automatique des charges financières', 'iscorrect' => false],
                    ]],
                    ['question' => 'Pourquoi suivre le BFR sur plusieurs périodes ?', 'answers' => [
                        ['answer' => 'Pour détecter les changements dans les besoins de financement du cycle d’exploitation', 'iscorrect' => true],
                        ['answer' => 'Pour garantir la croissance des ventes', 'iscorrect' => false],
                        ['answer' => 'Pour remplacer le bilan', 'iscorrect' => false],
                        ['answer' => 'Pour éliminer les dettes', 'iscorrect' => false],
                    ]],
                ],
            ],

            [
                'title' => 'Analyse de la rentabilité et décomposition du ROE',
                'questions' => [
                    ['question' => 'Quel est le principal intérêt du ROE ?', 'answers' => [
                        ['answer' => 'Mesurer la rentabilité générée pour les capitaux propres', 'iscorrect' => true],
                        ['answer' => 'Mesurer uniquement la liquidité', 'iscorrect' => false],
                        ['answer' => 'Mesurer uniquement le chiffre d’affaires', 'iscorrect' => false],
                        ['answer' => 'Mesurer les stocks', 'iscorrect' => false],
                    ]],
                    ['question' => 'Que permet notamment une décomposition de type DuPont ?', 'answers' => [
                        ['answer' => 'Identifier les principaux facteurs qui expliquent le ROE', 'iscorrect' => true],
                        ['answer' => 'Garantir le rendement futur', 'iscorrect' => false],
                        ['answer' => 'Calculer uniquement les dettes', 'iscorrect' => false],
                        ['answer' => 'Éliminer l’effet du risque financier', 'iscorrect' => false],
                    ]],
                    ['question' => 'Quels éléments sont classiquement associés à la décomposition DuPont du ROE ?', 'answers' => [
                        ['answer' => 'Marge nette, rotation des actifs et levier financier', 'iscorrect' => true],
                        ['answer' => 'Stocks, salaires et dividendes uniquement', 'iscorrect' => false],
                        ['answer' => 'Trésorerie, impôts et ventes uniquement', 'iscorrect' => false],
                        ['answer' => 'Dettes fournisseurs uniquement', 'iscorrect' => false],
                    ]],
                    ['question' => 'Si la marge nette augmente mais que la rotation des actifs diminue fortement, le ROE peut :', 'answers' => [
                        ['answer' => 'Augmenter ou diminuer selon l’ampleur relative des variations', 'iscorrect' => true],
                        ['answer' => 'Augmenter nécessairement', 'iscorrect' => false],
                        ['answer' => 'Diminuer nécessairement', 'iscorrect' => false],
                        ['answer' => 'Rester toujours identique', 'iscorrect' => false],
                    ]],
                    ['question' => 'Une faible marge nette compensée par une forte rotation des actifs peut indiquer :', 'answers' => [
                        ['answer' => 'Un modèle fondé sur un volume élevé de ventes relativement aux actifs', 'iscorrect' => true],
                        ['answer' => 'Une absence totale de rentabilité', 'iscorrect' => false],
                        ['answer' => 'Une dépendance obligatoire aux obligations', 'iscorrect' => false],
                        ['answer' => 'Une trésorerie toujours négative', 'iscorrect' => false],
                    ]],
                    ['question' => 'Une amélioration du ROE due uniquement à une forte hausse de l’endettement doit être interprétée avec prudence car :', 'answers' => [
                        ['answer' => 'Le risque financier peut également avoir augmenté', 'iscorrect' => true],
                        ['answer' => 'La dette n’a aucun coût', 'iscorrect' => false],
                        ['answer' => 'Le risque disparaît automatiquement', 'iscorrect' => false],
                        ['answer' => 'Les intérêts deviennent nécessairement nuls', 'iscorrect' => false],
                    ]],
                    ['question' => 'Une entreprise a une marge nette de 8 % et une rotation des actifs de 1,5. Sans levier supplémentaire, leur produit est :', 'answers' => [
                        ['answer' => '12 %', 'iscorrect' => true],
                        ['answer' => '5,33 %', 'iscorrect' => false],
                        ['answer' => '9,5 %', 'iscorrect' => false],
                        ['answer' => '15 %', 'iscorrect' => false],
                    ]],
                    ['question' => 'Pourquoi comparer le ROA et le ROE ?', 'answers' => [
                        ['answer' => 'Pour mieux comprendre l’effet du financement par dette sur la rentabilité des actionnaires', 'iscorrect' => true],
                        ['answer' => 'Pour calculer uniquement les stocks', 'iscorrect' => false],
                        ['answer' => 'Pour supprimer les charges', 'iscorrect' => false],
                        ['answer' => 'Pour déterminer automatiquement le cours de l’action', 'iscorrect' => false],
                    ]],
                    ['question' => 'Une entreprise améliore sa marge nette sans augmenter ses actifs. Quel effet peut-on attendre sur sa performance ?', 'answers' => [
                        ['answer' => 'Une amélioration potentielle de la rentabilité si les autres facteurs restent constants', 'iscorrect' => true],
                        ['answer' => 'Une baisse nécessaire du ROE', 'iscorrect' => false],
                        ['answer' => 'Une disparition automatique des dettes', 'iscorrect' => false],
                        ['answer' => 'Une baisse obligatoire du chiffre d’affaires', 'iscorrect' => false],
                    ]],
                    ['question' => 'Quel est l’avantage principal d’une analyse multidimensionnelle de la rentabilité ?', 'answers' => [
                        ['answer' => 'Elle permet de comprendre les causes plutôt que de constater uniquement le niveau du ratio', 'iscorrect' => true],
                        ['answer' => 'Elle garantit les résultats futurs', 'iscorrect' => false],
                        ['answer' => 'Elle élimine les risques', 'iscorrect' => false],
                        ['answer' => 'Elle remplace les états financiers', 'iscorrect' => false],
                    ]],
                ],
            ],

            [
                'title' => 'Analyse des créances, stocks et dettes fournisseurs',
                'questions' => [
                    ['question' => 'Que mesure principalement le délai moyen de recouvrement ?', 'answers' => [
                        ['answer' => 'Le temps moyen nécessaire pour encaisser les créances clients', 'iscorrect' => true],
                        ['answer' => 'Le temps nécessaire pour vendre les immobilisations', 'iscorrect' => false],
                        ['answer' => 'La durée des emprunts', 'iscorrect' => false],
                        ['answer' => 'La durée des contrats de travail', 'iscorrect' => false],
                    ]],
                    ['question' => 'Une hausse du délai client peut avoir pour conséquence :', 'answers' => [
                        ['answer' => 'Une immobilisation plus importante de trésorerie dans les créances', 'iscorrect' => true],
                        ['answer' => 'Une amélioration automatique de la liquidité', 'iscorrect' => false],
                        ['answer' => 'Une diminution obligatoire des ventes', 'iscorrect' => false],
                        ['answer' => 'Une baisse certaine des créances', 'iscorrect' => false],
                    ]],
                    ['question' => 'Que mesure la rotation des stocks ?', 'answers' => [
                        ['answer' => 'La vitesse à laquelle les stocks sont renouvelés ou consommés sur une période', 'iscorrect' => true],
                        ['answer' => 'Le montant des capitaux propres', 'iscorrect' => false],
                        ['answer' => 'La durée des emprunts', 'iscorrect' => false],
                        ['answer' => 'La marge nette', 'iscorrect' => false],
                    ]],
                    ['question' => 'Une baisse importante de la rotation des stocks peut indiquer :', 'answers' => [
                        ['answer' => 'Une accumulation de stocks ou un ralentissement des ventes', 'iscorrect' => true],
                        ['answer' => 'Une amélioration certaine de l’efficacité', 'iscorrect' => false],
                        ['answer' => 'Une baisse automatique du BFR', 'iscorrect' => false],
                        ['answer' => 'Une hausse obligatoire de la trésorerie', 'iscorrect' => false],
                    ]],
                    ['question' => 'Quel risque est associé à un niveau de stocks excessif ?', 'answers' => [
                        ['answer' => 'Une immobilisation de trésorerie et un risque d’obsolescence', 'iscorrect' => true],
                        ['answer' => 'Une augmentation automatique du bénéfice', 'iscorrect' => false],
                        ['answer' => 'Une disparition des coûts de stockage', 'iscorrect' => false],
                        ['answer' => 'Une réduction obligatoire des dettes', 'iscorrect' => false],
                    ]],
                    ['question' => 'Pourquoi analyser le délai de paiement fournisseurs ?', 'answers' => [
                        ['answer' => 'Pour comprendre la manière dont l’entreprise finance une partie de son cycle d’exploitation', 'iscorrect' => true],
                        ['answer' => 'Pour mesurer uniquement les ventes', 'iscorrect' => false],
                        ['answer' => 'Pour calculer le bénéfice net directement', 'iscorrect' => false],
                        ['answer' => 'Pour déterminer la valeur des immobilisations', 'iscorrect' => false],
                    ]],
                    ['question' => 'Un délai fournisseur très long peut être risqué car :', 'answers' => [
                        ['answer' => 'Il peut signaler des tensions avec les fournisseurs ou une dépendance excessive à ce financement', 'iscorrect' => true],
                        ['answer' => 'Il garantit toujours une meilleure rentabilité', 'iscorrect' => false],
                        ['answer' => 'Il élimine les dettes', 'iscorrect' => false],
                        ['answer' => 'Il rend les fournisseurs inutiles', 'iscorrect' => false],
                    ]],
                    ['question' => 'Une réduction du délai de recouvrement des clients a généralement pour effet de :', 'answers' => [
                        ['answer' => 'Libérer plus rapidement de la trésorerie', 'iscorrect' => true],
                        ['answer' => 'Augmenter automatiquement les stocks', 'iscorrect' => false],
                        ['answer' => 'Réduire automatiquement le chiffre d’affaires', 'iscorrect' => false],
                        ['answer' => 'Augmenter les charges financières', 'iscorrect' => false],
                    ]],
                    ['question' => 'Pourquoi comparer les ratios de rotation avec les entreprises comparables ?', 'answers' => [
                        ['answer' => 'Pour déterminer si la gestion du cycle d’exploitation est relativement efficace', 'iscorrect' => true],
                        ['answer' => 'Pour garantir une performance identique', 'iscorrect' => false],
                        ['answer' => 'Pour éliminer les différences sectorielles', 'iscorrect' => false],
                        ['answer' => 'Pour remplacer l’analyse interne', 'iscorrect' => false],
                    ]],
                    ['question' => 'Quel ensemble décrit le mieux le cycle d’exploitation ?', 'answers' => [
                        ['answer' => 'Achats, stockage, ventes, créances clients puis encaissement', 'iscorrect' => true],
                        ['answer' => 'Emprunt, dividende, capital puis liquidation', 'iscorrect' => false],
                        ['answer' => 'Immobilisation, amortissement puis émission d’actions uniquement', 'iscorrect' => false],
                        ['answer' => 'Impôts, capitaux propres et obligations uniquement', 'iscorrect' => false],
                    ]],
                ],
            ],

            [
                'title' => 'Interprétation intégrée des états financiers',
                'questions' => [
                    ['question' => 'Pourquoi analyser simultanément bilan, compte de résultat et tableau des flux ?', 'answers' => [
                        ['answer' => 'Pour obtenir une vision plus complète de la performance, de la situation financière et de la trésorerie', 'iscorrect' => true],
                        ['answer' => 'Parce qu’un seul état financier est toujours inutile', 'iscorrect' => false],
                        ['answer' => 'Pour éviter toute analyse des ratios', 'iscorrect' => false],
                        ['answer' => 'Pour garantir la valeur future de l’entreprise', 'iscorrect' => false],
                    ]],
                    ['question' => 'Une entreprise affiche une forte croissance des ventes mais une trésorerie opérationnelle négative. Quelle analyse est pertinente ?', 'answers' => [
                        ['answer' => 'Examiner notamment les créances, les stocks et les autres composantes du BFR', 'iscorrect' => true],
                        ['answer' => 'Conclure immédiatement à une excellente santé financière', 'iscorrect' => false],
                        ['answer' => 'Ignorer le tableau des flux', 'iscorrect' => false],
                        ['answer' => 'Conclure automatiquement à la faillite', 'iscorrect' => false],
                    ]],
                    ['question' => 'Une entreprise présente une bonne marge nette mais une dette très élevée. Quelle conclusion est la plus prudente ?', 'answers' => [
                        ['answer' => 'La rentabilité est favorable mais le risque financier doit également être évalué', 'iscorrect' => true],
                        ['answer' => 'L’entreprise est sans risque', 'iscorrect' => false],
                        ['answer' => 'La dette n’a aucune importance', 'iscorrect' => false],
                        ['answer' => 'La rentabilité garantit la solvabilité', 'iscorrect' => false],
                    ]],
                    ['question' => 'Une entreprise améliore ses ratios de liquidité mais réduit fortement sa rentabilité. Que faut-il examiner ?', 'answers' => [
                        ['answer' => 'La composition des actifs courants et l’utilisation des ressources financières', 'iscorrect' => true],
                        ['answer' => 'Uniquement le chiffre d’affaires', 'iscorrect' => false],
                        ['answer' => 'Uniquement les dividendes', 'iscorrect' => false],
                        ['answer' => 'Uniquement les immobilisations', 'iscorrect' => false],
                    ]],
                    ['question' => 'Pourquoi les tendances financières sont-elles souvent plus informatives qu’un ratio isolé ?', 'answers' => [
                        ['answer' => 'Elles montrent la direction et la persistance des changements', 'iscorrect' => true],
                        ['answer' => 'Elles garantissent les résultats futurs', 'iscorrect' => false],
                        ['answer' => 'Elles éliminent les effets économiques', 'iscorrect' => false],
                        ['answer' => 'Elles rendent les états financiers inutiles', 'iscorrect' => false],
                    ]],
                    ['question' => 'Une hausse du bénéfice accompagnée d’une forte baisse des flux opérationnels doit conduire à :', 'answers' => [
                        ['answer' => 'Examiner la qualité du bénéfice et les différences entre résultat comptable et trésorerie', 'iscorrect' => true],
                        ['answer' => 'Conclure automatiquement à une amélioration de la liquidité', 'iscorrect' => false],
                        ['answer' => 'Ignorer les créances', 'iscorrect' => false],
                        ['answer' => 'Augmenter automatiquement les investissements', 'iscorrect' => false],
                    ]],
                    ['question' => 'Quel élément peut rendre une comparaison entre entreprises moins fiable ?', 'answers' => [
                        ['answer' => 'Des différences de méthodes comptables, de structure ou de modèle économique', 'iscorrect' => true],
                        ['answer' => 'Le fait qu’elles aient des états financiers', 'iscorrect' => false],
                        ['answer' => 'L’utilisation de ratios', 'iscorrect' => false],
                        ['answer' => 'La présence de capitaux propres', 'iscorrect' => false],
                    ]],
                    ['question' => 'Pourquoi faut-il tenir compte de la saisonnalité dans l’analyse financière ?', 'answers' => [
                        ['answer' => 'Certains soldes et résultats peuvent varier fortement selon la période de l’année', 'iscorrect' => true],
                        ['answer' => 'La saisonnalité garantit toujours les bénéfices', 'iscorrect' => false],
                        ['answer' => 'Elle élimine les dettes', 'iscorrect' => false],
                        ['answer' => 'Elle rend les ratios inutiles', 'iscorrect' => false],
                    ]],
                    ['question' => 'Quel signal pourrait indiquer une amélioration globale de la qualité financière ?', 'answers' => [
                        ['answer' => 'Une rentabilité durable, des flux opérationnels solides, une liquidité adéquate et un endettement maîtrisé', 'iscorrect' => true],
                        ['answer' => 'Une hausse isolée du chiffre d’affaires', 'iscorrect' => false],
                        ['answer' => 'Une augmentation constante des stocks', 'iscorrect' => false],
                        ['answer' => 'Une hausse de la dette sans amélioration des résultats', 'iscorrect' => false],
                    ]],
                    ['question' => 'Quelle est la meilleure approche pour conclure une analyse financière ?', 'answers' => [
                        ['answer' => 'Croiser les ratios, les tendances, les états financiers, le secteur et le contexte économique', 'iscorrect' => true],
                        ['answer' => 'Utiliser uniquement le bénéfice net', 'iscorrect' => false],
                        ['answer' => 'Utiliser uniquement le ratio courant', 'iscorrect' => false],
                        ['answer' => 'Se baser uniquement sur une année', 'iscorrect' => false],
                    ]],
                ],
            ],
        ];

        foreach ($quizzes as $quizData) {
            $quiz = Quiz::create([
                'subject_id' => $subject->id,
                'title' => $quizData['title'],
                'level' => 'Intermediate',
            ]);

            foreach ($quizData['questions'] as $questionData) {
                $question = Question::create([
                    'quiz_id' => $quiz->id,
                    'question' => $questionData['question'],
                ]);

                // Mélange des réponses afin que la bonne réponse
                // ne soit pas systématiquement en première position.
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
