```php
<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Major;
use App\Models\Subject;
use App\Models\Quiz;
use App\Models\Question;
use App\Models\Answer;

class FinancialStatementAnalysisProfessionalSeeder extends Seeder
{
    public function run(): void
    {
        $major = Major::where('slug', 'finance')->firstOrFail();

        $subject = Subject::where('major_id', $major->id)
            ->where('slug', 'financial-statement-analysis')
            ->firstOrFail();

        $quizzes = [
            [
                'title' => 'Diagnostic financier professionnel et qualité de l’information',
                'questions' => [
                    [
                        'question' => 'Quelle démarche permet d’évaluer le plus rigoureusement la qualité du résultat publié ?',
                        'answers' => [
                            ['answer' => 'Rapprocher le résultat des flux de trésorerie, du BFR, des éléments non récurrents et des politiques comptables', 'iscorrect' => true],
                            ['answer' => 'Analyser uniquement la croissance du résultat net', 'iscorrect' => false],
                            ['answer' => 'Comparer uniquement le résultat par action', 'iscorrect' => false],
                            ['answer' => 'Examiner uniquement la marge brute', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Une société affiche une croissance de l’EBITDA de 18 %, mais son flux de trésorerie opérationnel baisse de 12 %. Quelle priorité analytique est la plus pertinente ?',
                        'answers' => [
                            ['answer' => 'Identifier les variations du BFR et les écarts entre performance comptable et encaissements', 'iscorrect' => true],
                            ['answer' => 'Conclure immédiatement à une amélioration de la rentabilité', 'iscorrect' => false],
                            ['answer' => 'Ignorer les créances clients', 'iscorrect' => false],
                            ['answer' => 'Analyser uniquement les dividendes', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un analyste professionnel doit-il retraiter les éléments exceptionnels avant de projeter les résultats ?',
                        'answers' => [
                            ['answer' => 'Pour construire une base de bénéfices plus représentative de la performance récurrente', 'iscorrect' => true],
                            ['answer' => 'Pour augmenter artificiellement le bénéfice', 'iscorrect' => false],
                            ['answer' => 'Pour supprimer toutes les charges', 'iscorrect' => false],
                            ['answer' => 'Pour rendre les flux de trésorerie inutiles', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Une hausse du résultat est principalement due à une reprise de provision. Quelle conclusion est la plus appropriée ?',
                        'answers' => [
                            ['answer' => 'La hausse doit être distinguée de la performance opérationnelle récurrente', 'iscorrect' => true],
                            ['answer' => 'La rentabilité opérationnelle s’est nécessairement améliorée', 'iscorrect' => false],
                            ['answer' => 'Le chiffre d’affaires a nécessairement augmenté', 'iscorrect' => false],
                            ['answer' => 'Le flux opérationnel augmente toujours du même montant', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel signal combiné peut justifier une revue approfondie de la reconnaissance du chiffre d’affaires ?',
                        'answers' => [
                            ['answer' => 'Croissance inhabituelle des ventes, hausse des créances et allongement des délais de recouvrement', 'iscorrect' => true],
                            ['answer' => 'Baisse des créances et amélioration des encaissements', 'iscorrect' => false],
                            ['answer' => 'Réduction du DSO et hausse des flux', 'iscorrect' => false],
                            ['answer' => 'Stabilité du BFR et baisse des stocks', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les notes annexes sont-elles essentielles dans une analyse professionnelle ?',
                        'answers' => [
                            ['answer' => 'Elles permettent de comprendre les méthodes comptables, estimations, engagements et éléments non visibles directement dans les états principaux', 'iscorrect' => true],
                            ['answer' => 'Elles remplacent toujours le bilan', 'iscorrect' => false],
                            ['answer' => 'Elles présentent uniquement les dividendes', 'iscorrect' => false],
                            ['answer' => 'Elles ne contiennent jamais d’information financière importante', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le principal risque d’une analyse fondée sur une seule année comptable ?',
                        'answers' => [
                            ['answer' => 'Confondre un événement exceptionnel avec une tendance structurelle', 'iscorrect' => true],
                            ['answer' => 'Ne pas pouvoir calculer le chiffre d’affaires', 'iscorrect' => false],
                            ['answer' => 'Ne pas pouvoir calculer les capitaux propres', 'iscorrect' => false],
                            ['answer' => 'Obtenir nécessairement un résultat négatif', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle approche est la plus robuste pour évaluer la performance d’une société cotée ?',
                        'answers' => [
                            ['answer' => 'Combiner analyse historique, comparaison sectorielle, flux, rentabilité, structure financière et contexte économique', 'iscorrect' => true],
                            ['answer' => 'Utiliser uniquement le PER', 'iscorrect' => false],
                            ['answer' => 'Utiliser uniquement le chiffre d’affaires', 'iscorrect' => false],
                            ['answer' => 'Utiliser uniquement le bénéfice net', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les changements d’estimations comptables doivent-ils être surveillés ?',
                        'answers' => [
                            ['answer' => 'Ils peuvent modifier significativement les résultats sans correspondre à une évolution économique équivalente', 'iscorrect' => true],
                            ['answer' => 'Ils n’ont jamais d’effet sur le résultat', 'iscorrect' => false],
                            ['answer' => 'Ils augmentent toujours les flux de trésorerie', 'iscorrect' => false],
                            ['answer' => 'Ils éliminent les risques financiers', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel principe doit guider une conclusion professionnelle sur la qualité des bénéfices ?',
                        'answers' => [
                            ['answer' => 'La conclusion doit être fondée sur plusieurs indicateurs cohérents et sur les facteurs explicatifs', 'iscorrect' => true],
                            ['answer' => 'Un seul ratio suffit toujours', 'iscorrect' => false],
                            ['answer' => 'Le résultat net suffit toujours', 'iscorrect' => false],
                            ['answer' => 'Les flux de trésorerie peuvent être ignorés', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Modélisation financière à partir des états financiers',
                'questions' => [
                    [
                        'question' => 'Quel est le principal objectif d’un modèle financier construit à partir des états financiers historiques ?',
                        'answers' => [
                            ['answer' => Identifier les relations économiques entre activité, marges, investissements, financement et trésorerie afin de projeter les résultats', 'iscorrect' => true],
                            ['answer' => Reproduire uniquement le chiffre d’affaires historique', 'iscorrect' => false],
                            ['answer' => Supprimer les hypothèses de marché', 'iscorrect' => false],
                            ['answer' => Remplacer les états financiers audités', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les hypothèses de croissance doivent-elles être cohérentes avec les capacités opérationnelles ?',
                        'answers' => [
                            ['answer' => Une croissance projetée doit être compatible avec les capacités de production, le marché, les investissements et le BFR', 'iscorrect' => true],
                            ['answer' => La croissance peut être supposée indépendamment des ressources', 'iscorrect' => false],
                            ['answer' => Les capacités opérationnelles n’ont aucun effet', 'iscorrect' => false],
                            ['answer' => Le BFR diminue toujours avec la croissance', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Une projection suppose une forte croissance du chiffre d’affaires mais aucun investissement supplémentaire dans une activité capitalistique. Quel problème peut apparaître ?',
                        'answers' => [
                            ['answer' => Le scénario peut être incohérent avec les besoins de capacité et d’investissement nécessaires à la croissance', 'iscorrect' => true],
                            ['answer' => La marge augmente automatiquement', 'iscorrect' => false],
                            ['answer' => Le BFR devient automatiquement nul', 'iscorrect' => false],
                            ['answer' => La dette disparaît automatiquement', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une projection du BFR en pourcentage du chiffre d’affaires peut-elle être insuffisante ?',
                        'answers' => [
                            ['answer' => Les délais clients, stocks et fournisseurs peuvent évoluer différemment selon le scénario', 'iscorrect' => true],
                            ['answer' => Le chiffre d’affaires n’a jamais de lien avec le BFR', 'iscorrect' => false],
                            ['answer' => Le BFR est toujours fixe', 'iscorrect' => false],
                            ['answer' => Les stocks sont indépendants des ventes', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel élément est essentiel dans un modèle intégré trois états ?',
                        'answers' => [
                            ['answer' => La cohérence entre compte de résultat, bilan et tableau des flux de trésorerie', 'iscorrect' => true],
                            ['answer' => Le chiffre d’affaires uniquement', 'iscorrect' => false],
                            ['answer' => Les dividendes uniquement', 'iscorrect' => false],
                            ['answer' => Les immobilisations uniquement', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les dépenses d’investissement doivent-elles être cohérentes avec les amortissements projetés ?',
                        'answers' => [
                            ['answer' => Le niveau d’investissement influence la base d’actifs amortissables et donc les charges futures', 'iscorrect' => true],
                            ['answer' => Les investissements n’ont aucun lien avec les actifs', 'iscorrect' => false],
                            ['answer' => Les amortissements sont toujours égaux au chiffre d’affaires', 'iscorrect' => false],
                            ['answer' => Les investissements sont toujours des charges immédiates', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel rôle joue le scénario de financement dans un modèle financier ?',
                        'answers' => [
                            ['answer' => Il détermine notamment l’évolution de la dette, des intérêts, des capitaux propres et de la trésorerie', 'iscorrect' => true],
                            ['answer' => Il détermine uniquement les stocks', 'iscorrect' => false],
                            ['answer' => Il n’affecte jamais le résultat', 'iscorrect' => false],
                            ['answer' => Il remplace les hypothèses opérationnelles', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi faut-il effectuer une analyse de sensibilité sur un modèle financier ?',
                        'answers' => [
                            ['answer' => Pour mesurer la sensibilité de la valeur ou des résultats à des variations des hypothèses clés', 'iscorrect' => true],
                            ['answer' => Pour garantir les résultats futurs', 'iscorrect' => false],
                            ['answer' => Pour éliminer toutes les incertitudes', 'iscorrect' => false],
                            ['answer' => Pour éviter toute hypothèse', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle hypothèse est particulièrement critique dans un modèle de valorisation à long terme ?',
                        'answers' => [
                            ['answer' => Le taux de croissance à long terme et le taux d’actualisation', 'iscorrect' => true],
                            ['answer' => Le nombre de salariés uniquement', 'iscorrect' => false],
                            ['answer' => Le montant du capital social uniquement', 'iscorrect' => false],
                            ['answer' => La couleur du logo', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel contrôle permet de détecter une incohérence majeure dans un modèle intégré ?',
                        'answers' => [
                            ['answer' => Vérifier l’équilibre du bilan et la cohérence entre variation de trésorerie et tableau des flux', 'iscorrect' => true],
                            ['answer' => Vérifier uniquement le chiffre d’affaires', 'iscorrect' => false],
                            ['answer' => Vérifier uniquement les dividendes', 'iscorrect' => false],
                            ['answer' => Vérifier uniquement les immobilisations', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Valorisation avancée fondée sur les états financiers',
                'questions' => [
                    [
                        'question' => 'Pourquoi le flux de trésorerie disponible est-il central dans une valorisation DCF ?',
                        'answers' => [
                            ['answer' => Il représente les flux disponibles pour les apporteurs de capitaux après les besoins opérationnels et investissements nécessaires', 'iscorrect' => true],
                            ['answer' => Il correspond toujours au résultat net', 'iscorrect' => false],
                            ['answer' => Il mesure uniquement le chiffre d’affaires', 'iscorrect' => false],
                            ['answer' => Il exclut toujours les investissements', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est l’effet d’une hausse du taux d’actualisation sur la valeur actuelle des flux futurs, toutes choses égales par ailleurs ?',
                        'answers' => [
                            ['answer' => Elle réduit la valeur actuelle des flux futurs', 'iscorrect' => true],
                            ['answer' => Elle augmente toujours la valeur', 'iscorrect' => false],
                            ['answer' => Elle n’a aucun effet', 'iscorrect' => false],
                            ['answer' => Elle augmente automatiquement les flux', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la valeur terminale représente-t-elle souvent une part importante de la valeur d’une entreprise dans un DCF ?',
                        'answers' => [
                            ['answer' => Elle capitalise les flux au-delà de la période de projection explicite', 'iscorrect' => true],
                            ['answer' => Elle représente uniquement les actifs courants', 'iscorrect' => false],
                            ['answer' => Elle correspond aux dettes à court terme', 'iscorrect' => false],
                            ['answer' => Elle remplace les flux historiques', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une hypothèse de croissance terminale excessive peut-elle être dangereuse ?',
                        'answers' => [
                            ['answer' => Elle peut gonfler fortement la valeur terminale et donc la valorisation globale', 'iscorrect' => true],
                            ['answer' => Elle réduit nécessairement la valeur', 'iscorrect' => false],
                            ['answer' => Elle n’a aucun effet sur le DCF', 'iscorrect' => false],
                            ['answer' => Elle diminue toujours les flux futurs', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Dans une valorisation par multiples, pourquoi faut-il privilégier des comparables réellement économiques ?',
                        'answers' => [
                            ['answer' => Les différences de croissance, marge, risque et structure financière influencent les multiples appropriés', 'iscorrect' => true],
                            ['answer' => Tous les multiples sont universels', 'iscorrect' => false],
                            ['answer' => Le secteur n’a aucune importance', 'iscorrect' => false],
                            ['answer' => La rentabilité n’influence jamais les multiples', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise possède un EV/EBITDA inférieur à celui de ses concurrents. Peut-on conclure automatiquement qu’elle est sous-évaluée ?',
                        'answers' => [
                            ['answer' => 'Non, il faut examiner les perspectives de croissance, marges, risques, dette et qualité des résultats', 'iscorrect' => true],
                            ['answer' => 'Oui, un multiple inférieur signifie toujours une sous-évaluation', 'iscorrect' => false],
                            ['answer' => 'Oui, les multiples ne dépendent jamais de la croissance', 'iscorrect' => false],
                            ['answer' => 'Non, car les multiples ne sont jamais utiles', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi le ROIC est-il particulièrement pertinent dans une analyse de création de valeur ?',
                        'answers' => [
                            ['answer' => Il peut être comparé au coût du capital investi pour apprécier la création ou destruction de valeur économique', 'iscorrect' => true],
                            ['answer' => Il mesure uniquement les dividendes', 'iscorrect' => false],
                            ['answer' => Il ignore totalement les actifs opérationnels', 'iscorrect' => false],
                            ['answer' => Il est identique au ratio courant', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise a un ROIC de 14 % et un WACC de 9 %. Quelle conclusion est généralement justifiée ?',
                        'answers' => [
                            ['answer' => Elle génère un rendement supérieur à son coût du capital investi, ce qui suggère une création de valeur', 'iscorrect' => true],
                            ['answer' => Elle détruit nécessairement de la valeur', 'iscorrect' => false],
                            ['answer' => Son ROE est nécessairement négatif', 'iscorrect' => false],
                            ['answer' => Elle ne possède aucune dette', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une entreprise très rentable peut-elle néanmoins être difficile à valoriser ?',
                        'answers' => [
                            ['answer' => Les hypothèses sur la croissance future, les marges, le risque et le réinvestissement peuvent être très incertaines', 'iscorrect' => true],
                            ['answer' => La rentabilité garantit toujours une valeur précise', 'iscorrect' => false],
                            ['answer' => Les flux futurs sont toujours certains', 'iscorrect' => false],
                            ['answer' => Les multiples ne dépendent jamais des attentes', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle approche réduit le risque de dépendre d’une seule méthode de valorisation ?',
                        'answers' => [
                            ['answer' => Croiser DCF, multiples de marché et analyse de scénarios', 'iscorrect' => true],
                            ['answer' => Utiliser uniquement le PER', 'iscorrect' => false],
                            ['answer' => Utiliser uniquement la valeur comptable', 'iscorrect' => false],
                            ['answer' => Utiliser uniquement le chiffre d’affaires', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Analyse professionnelle du risque de crédit',
                'questions' => [
                    [
                        'question' => 'Quel élément constitue une source majeure de risque pour un créancier ?',
                        'answers' => [
                            ['answer' => L’incapacité de l’emprunteur à générer suffisamment de trésorerie pour honorer ses engagements', 'iscorrect' => true],
                            ['answer' => Une hausse des ventes sans hausse des créances', 'iscorrect' => false],
                            ['answer' => Une amélioration de la couverture des intérêts', 'iscorrect' => false],
                            ['answer' => Une baisse du levier financier', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi le ratio dette nette/EBITDA doit-il être interprété avec prudence ?',
                        'answers' => [
                            ['answer' => Il dépend de la cyclicité, de la qualité de l’EBITDA, des besoins d’investissement et de la structure de dette', 'iscorrect' => true],
                            ['answer' => Il mesure directement la liquidité', 'iscorrect' => false],
                            ['answer' => Il garantit la solvabilité', 'iscorrect' => false],
                            ['answer' => Il est indépendant du secteur', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les échéances de dette doivent-elles être analysées avec les projections de trésorerie ?',
                        'answers' => [
                            ['answer' => Pour vérifier si les ressources disponibles et futures permettent de couvrir les remboursements', 'iscorrect' => true],
                            ['answer' => Les échéances n’ont aucun lien avec les flux', 'iscorrect' => false],
                            ['answer' => Les remboursements augmentent toujours la trésorerie', 'iscorrect' => false],
                            ['answer' => Les dettes longues sont toujours sans risque', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est le risque d’un covenant proche de sa limite contractuelle ?',
                        'answers' => [
                            ['answer' => Une faible détérioration des performances peut entraîner un non-respect du covenant et des conséquences contractuelles', 'iscorrect' => true],
                            ['answer' => Le risque financier disparaît', 'iscorrect' => false],
                            ['answer' => La dette est automatiquement annulée', 'iscorrect' => false],
                            ['answer' => Le chiffre d’affaires augmente automatiquement', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les flux opérationnels sont-ils particulièrement importants pour une analyse de crédit ?',
                        'answers' => [
                            ['answer' => Ils indiquent la capacité de l’activité à générer des ressources de trésorerie récurrentes', 'iscorrect' => true],
                            ['answer' => Ils mesurent uniquement les investissements', 'iscorrect' => false],
                            ['answer' => Ils sont toujours identiques au bénéfice net', 'iscorrect' => false],
                            ['answer' => Ils excluent toujours les variations du BFR', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise possède un EBITDA élevé mais des flux opérationnels faibles. Quelle préoccupation peut apparaître pour le prêteur ?',
                        'answers' => [
                            ['answer' => La capacité réelle de conversion de la performance opérationnelle en trésorerie peut être insuffisante', 'iscorrect' => true],
                            ['answer' => La solvabilité est automatiquement excellente', 'iscorrect' => false],
                            ['answer' => La dette est nécessairement faible', 'iscorrect' => false],
                            ['answer' => Le risque de crédit disparaît', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel rôle jouent les garanties dans l’analyse du risque de crédit ?',
                        'answers' => [
                            ['answer' => Elles peuvent réduire la perte potentielle du créancier en cas de défaut, selon leur qualité et leur valeur réalisable', 'iscorrect' => true],
                            ['answer' => Elles garantissent toujours le remboursement intégral', 'iscorrect' => false],
                            ['answer' => Elles éliminent le risque de défaut', 'iscorrect' => false],
                            ['answer' => Elles augmentent toujours les flux opérationnels', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une analyse de stress est-elle utile pour un crédit fortement endetté ?',
                        'answers' => [
                            ['answer' => Elle permet d’évaluer la résistance de la capacité de remboursement à des scénarios défavorables', 'iscorrect' => true],
                            ['answer' => Elle garantit l’absence de défaut', 'iscorrect' => false],
                            ['answer' => Elle supprime les charges financières', 'iscorrect' => false],
                            ['answer' => Elle remplace les états financiers', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel scénario est particulièrement défavorable pour une entreprise très endettée à taux variable ?',
                        'answers' => [
                            ['answer' => Baisse de l’EBITDA combinée à une hausse des taux d’intérêt', 'iscorrect' => true],
                            ['answer' => Hausse de l’EBITDA et baisse des taux', 'iscorrect' => false],
                            ['answer' => Hausse des flux et réduction de la dette', 'iscorrect' => false],
                            ['answer' => Baisse du BFR et amélioration de la marge', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle combinaison constitue généralement un profil de crédit plus robuste ?',
                        'answers' => [
                            ['answer' => Flux récurrents solides, dette soutenable, échéances réparties et couverture confortable des intérêts', 'iscorrect' => true],
                            ['answer' => Dette élevée, flux négatifs et échéances concentrées', 'iscorrect' => false],
                            ['answer' => EBITDA élevé mais flux constamment négatifs', 'iscorrect' => false],
                            ['answer' => Forte dépendance au refinancement à court terme', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Analyse avancée de la structure du capital',
                'questions' => [
                    [
                        'question' => 'Quel arbitrage central est étudié dans la structure du capital ?',
                        'answers' => [
                            ['answer' => L’équilibre entre avantages du financement par dette et risques associés au levier financier', 'iscorrect' => true],
                            ['answer' => L’équilibre entre stocks et chiffre d’affaires uniquement', 'iscorrect' => false],
                            ['answer' => La réduction obligatoire des capitaux propres', 'iscorrect' => false],
                            ['answer' => La suppression des charges financières', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi le coût de la dette peut-il être inférieur au coût des capitaux propres ?',
                        'answers' => [
                            ['answer' => Les créanciers ont généralement une priorité contractuelle et peuvent bénéficier d’un risque inférieur à celui des actionnaires', 'iscorrect' => true],
                            ['answer' => Les actionnaires sont toujours remboursés avant les créanciers', 'iscorrect' => false],
                            ['answer' => La dette n’a jamais de risque', 'iscorrect' => false],
                            ['answer' => Les intérêts sont toujours nuls', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est l’effet potentiel d’un endettement excessif sur le coût du capital ?',
                        'answers' => [
                            ['answer' => L’augmentation du risque financier peut finir par accroître les coûts de financement', 'iscorrect' => true],
                            ['answer' => Il diminue toujours le WACC', 'iscorrect' => false],
                            ['answer' => Il élimine le risque de faillite', 'iscorrect' => false],
                            ['answer' => Il réduit toujours le coût des capitaux propres', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la structure du capital doit-elle être analysée avec la stabilité des flux de trésorerie ?',
                        'answers' => [
                            ['answer' => Une entreprise à flux très volatils supporte généralement moins facilement un niveau élevé d’obligations fixes', 'iscorrect' => true],
                            ['answer' => Les flux n’ont aucun lien avec la dette', 'iscorrect' => false],
                            ['answer' => Les entreprises cycliques peuvent toujours maximiser leur dette', 'iscorrect' => false],
                            ['answer' => Les intérêts sont indépendants du financement', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise remplace des capitaux propres par une dette importante. Quel effet mécanique peut apparaître sur le ROE ?',
                        'answers' => [
                            ['answer' => Le ROE peut augmenter si le rendement des actifs dépasse suffisamment le coût de la dette', 'iscorrect' => true],
                            ['answer' => Le ROE diminue toujours', 'iscorrect' => false],
                            ['answer' => Le ROE devient automatiquement nul', 'iscorrect' => false],
                            ['answer' => Le ROE n’est jamais affecté', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi cet effet de levier peut-il devenir défavorable ?',
                        'answers' => [
                            ['answer' => Lorsque le rendement des actifs devient inférieur au coût de la dette, le financement par dette peut dégrader la rentabilité des actionnaires', 'iscorrect' => true],
                            ['answer' => La dette devient toujours gratuite', 'iscorrect' => false],
                            ['answer' => Le ROE augmente toujours avec la dette', 'iscorrect' => false],
                            ['answer' => Les intérêts disparaissent', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel élément doit être intégré dans l’analyse de la dette à taux variable ?',
                        'answers' => [
                            ['answer' => La sensibilité des charges financières aux variations des taux d’intérêt', 'iscorrect' => true],
                            ['answer' => Uniquement le nombre d’actions', 'iscorrect' => false],
                            ['answer' => Uniquement les stocks', 'iscorrect' => false],
                            ['answer' => Uniquement le chiffre d’affaires historique', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la maturité moyenne de la dette est-elle importante ?',
                        'answers' => [
                            ['answer' => Elle influence le profil de refinancement et le risque de concentration des échéances', 'iscorrect' => true],
                            ['answer' => Elle détermine directement la marge brute', 'iscorrect' => false],
                            ['answer' => Elle élimine le risque de taux', 'iscorrect' => false],
                            ['answer' => Elle mesure les créances clients', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel indicateur complémentaire est utile pour apprécier le poids de la dette ?',
                        'answers' => [
                            ['answer' => Le ratio dette nette/EBITDA combiné à la couverture des intérêts et à l’analyse des flux', 'iscorrect' => true],
                            ['answer' => Le nombre d’actions uniquement', 'iscorrect' => false],
                            ['answer' => La marge brute uniquement', 'iscorrect' => false],
                            ['answer' => Le chiffre d’affaires uniquement', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle approche professionnelle est la plus pertinente pour déterminer une structure de capital soutenable ?',
                        'answers' => [
                            ['answer' => Évaluer flux, volatilité, coût du financement, échéances, covenants et capacité de remboursement', 'iscorrect' => true],
                            ['answer' => Maximiser la dette indépendamment du risque', 'iscorrect' => false],
                            ['answer' => Minimiser toujours les capitaux propres', 'iscorrect' => false],
                            ['answer' => Ignorer les scénarios défavorables', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Analyse professionnelle de la performance durable',
                'questions' => [
                    [
                        'question' => 'Quel critère distingue le mieux une performance durable d’une performance temporaire ?',
                        'answers' => [
                            ['answer' => Sa capacité à être maintenue par les fondamentaux opérationnels et les flux récurrents', 'iscorrect' => true],
                            ['answer' => Son niveau exceptionnel sur une seule année', 'iscorrect' => false],
                            ['answer' => La présence d’un gain exceptionnel', 'iscorrect' => false],
                            ['answer' => Une hausse ponctuelle du cours', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la croissance des marges doit-elle être analysée avec le pouvoir de fixation des prix ?',
                        'answers' => [
                            ['answer' => Une amélioration durable des marges dépend notamment de la capacité à préserver les prix face aux coûts et à la concurrence', 'iscorrect' => true],
                            ['answer' => Les prix n’ont aucun effet sur les marges', 'iscorrect' => false],
                            ['answer' => Les marges augmentent toujours avec les ventes', 'iscorrect' => false],
                            ['answer' => Les coûts sont indépendants des prix', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise améliore ses marges grâce à une baisse exceptionnelle des coûts. Quelle analyse est nécessaire ?',
                        'answers' => [
                            ['answer' => Déterminer si les économies sont structurelles ou temporaires avant de les intégrer aux projections', 'iscorrect' => true],
                            ['answer' => Les intégrer automatiquement comme permanentes', 'iscorrect' => false],
                            ['answer' => Les ignorer sans analyse', 'iscorrect' => false],
                            ['answer' => Supposer qu’elles augmenteront toujours', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi le réinvestissement est-il essentiel à l’analyse d’une croissance durable ?',
                        'answers' => [
                            ['answer' => Une croissance durable nécessite généralement des investissements en capacité, innovation, fonds de roulement ou actifs immatériels', 'iscorrect' => true],
                            ['answer' => La croissance ne nécessite jamais de capital', 'iscorrect' => false],
                            ['answer' => Le réinvestissement réduit toujours les ventes', 'iscorrect' => false],
                            ['answer' => Les investissements n’ont aucun effet sur les flux', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel indicateur peut aider à apprécier l’efficacité du réinvestissement ?',
                        'answers' => [
                            ['answer' => Le rendement du capital investi comparé au coût du capital', 'iscorrect' => true],
                            ['answer' => Le nombre de salariés uniquement', 'iscorrect' => false],
                            ['answer' => Le montant des dividendes uniquement', 'iscorrect' => false],
                            ['answer' => Le chiffre d’affaires seul', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise croît rapidement mais son ROIC baisse continuellement. Quelle question stratégique doit être posée ?',
                        'answers' => [
                            ['answer' => La croissance supplémentaire crée-t-elle suffisamment de rendement pour justifier le capital investi ?', 'iscorrect' => true],
                            ['answer' => La croissance est-elle toujours positive ?', 'iscorrect' => false],
                            ['answer' => Le chiffre d’affaires est-il toujours supérieur à zéro ?', 'iscorrect' => false],
                            ['answer' => Les dividendes doivent-ils toujours augmenter ?', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une croissance externe peut-elle dégrader temporairement certains ratios ?',
                        'answers' => [
                            ['answer' => L’acquisition peut augmenter immédiatement le capital investi et la dette avant la réalisation complète des synergies', 'iscorrect' => true],
                            ['answer' => Les acquisitions diminuent toujours les actifs', 'iscorrect' => false],
                            ['answer' => Les synergies sont toujours immédiates', 'iscorrect' => false],
                            ['answer' => La dette disparaît après une acquisition', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel signal peut remettre en cause la durabilité d’une croissance très rapide ?',
                        'answers' => [
                            ['answer' => Une détérioration simultanée du BFR, des marges, du ROIC et de la génération de trésorerie', 'iscorrect' => true],
                            ['answer' => Une amélioration des flux', 'iscorrect' => false],
                            ['answer' => Une baisse de l’endettement', 'iscorrect' => false],
                            ['answer' => Une stabilité des marges', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la croissance du chiffre d’affaires ne suffit-elle pas pour conclure à une création de valeur ?',
                        'answers' => [
                            ['answer' => La croissance doit générer des rendements supérieurs au coût du capital après prise en compte du réinvestissement', 'iscorrect' => true],
                            ['answer' => Toute croissance crée automatiquement de la valeur', 'iscorrect' => false],
                            ['answer' => Le chiffre d’affaires mesure directement le rendement du capital', 'iscorrect' => false],
                            ['answer' => La croissance élimine toujours le risque', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle combinaison caractérise le mieux une croissance financièrement saine ?',
                        'answers' => [
                            ['answer' => Croissance rentable, génération de trésorerie solide, ROIC supérieur au coût du capital et BFR maîtrisé', 'iscorrect' => true],
                            ['answer' => Croissance accompagnée d’une destruction de valeur persistante', 'iscorrect' => false],
                            ['answer' => Croissance avec dette excessive et flux négatifs', 'iscorrect' => false],
                            ['answer' => Croissance fondée uniquement sur des éléments exceptionnels', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],

            [
                'title' => 'Cas professionnels intégrés de diagnostic financier',
                'questions' => [
                    [
                        'question' => 'Une société affiche +20 % de chiffre d’affaires, +35 % de créances, -10 % de flux opérationnel et +25 % de stocks. Quelle conclusion est la plus prudente ?',
                        'answers' => [
                            ['answer' => La croissance consomme fortement du BFR et nécessite une analyse de la qualité des ventes et des stocks', 'iscorrect' => true],
                            ['answer' => La croissance est nécessairement excellente', 'iscorrect' => false],
                            ['answer' => La liquidité s’est nécessairement améliorée', 'iscorrect' => false],
                            ['answer' => Le risque financier a disparu', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise possède un ROE de 24 %, un ROA de 7 % et un endettement très élevé. Quelle interprétation est la plus pertinente ?',
                        'answers' => [
                            ['answer' => Le ROE élevé peut être fortement amplifié par le levier financier et doit être évalué avec le risque de dette', 'iscorrect' => true],
                            ['answer' => Le ROE prouve une excellente performance sans risque', 'iscorrect' => false],
                            ['answer' => Le ROA est nécessairement faux', 'iscorrect' => false],
                            ['answer' => La dette n’a aucun effet', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise possède un ROIC de 8 %, un WACC de 11 % et une croissance de 15 %. Quelle question est prioritaire ?',
                        'answers' => [
                            ['answer' => La croissance supplémentaire risque-t-elle de détruire davantage de valeur si elle exige un capital dont le rendement reste inférieur au coût du capital ?', 'iscorrect' => true],
                            ['answer' => Comment maximiser immédiatement les investissements ?', 'iscorrect' => false],
                            ['answer' => Comment augmenter uniquement le chiffre d’affaires ?', 'iscorrect' => false],
                            ['answer' => Comment supprimer les flux de trésorerie ?', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise a une dette nette de 900 M€, un EBITDA de 150 M€ et des intérêts annuels de 60 M€. Quels indicateurs doivent être examinés ensemble ?',
                        'answers' => [
                            ['answer' => Le levier de dette, la couverture des intérêts, les flux disponibles et le profil des échéances', 'iscorrect' => true],
                            ['answer' => Le chiffre d’affaires uniquement', 'iscorrect' => false],
                            ['answer' => La marge brute uniquement', 'iscorrect' => false],
                            ['answer' => Le nombre d’actions uniquement', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise réduit son ratio courant mais augmente fortement son flux opérationnel. Quelle conclusion est la plus professionnelle ?',
                        'answers' => [
                            ['answer' => La baisse de liquidité comptable doit être mise en perspective avec l’amélioration réelle des flux et de la structure du BFR', 'iscorrect' => true],
                            ['answer' => La situation est nécessairement mauvaise', 'iscorrect' => false],
                            ['answer' => Le flux opérationnel doit être ignoré', 'iscorrect' => false],
                            ['answer' => Le ratio courant suffit à conclure', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Une société présente un bénéfice record, mais 60 % de la hausse provient de gains exceptionnels. Comment traiter ce résultat dans une valorisation ?',
                        'answers' => [
                            ['answer' => Retraiter les gains exceptionnels afin de construire une base de bénéfices récurrents', 'iscorrect' => true],
                            ['answer' => Capitaliser automatiquement le bénéfice record', 'iscorrect' => false],
                            ['answer' => Supposer que les gains se répéteront', 'iscorrect' => false],
                            ['answer' => Ignorer totalement le résultat', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Une société affiche une forte croissance mais doit constamment émettre de nouvelles actions pour financer son BFR. Quel risque existe pour les actionnaires ?',
                        'answers' => [
                            ['answer' => Une dilution importante si la génération interne de trésorerie ne suffit pas à financer la croissance', 'iscorrect' => true],
                            ['answer' => Une hausse automatique du bénéfice par action', 'iscorrect' => false],
                            ['answer' => Une diminution automatique du capital investi', 'iscorrect' => false],
                            ['answer' => Une disparition du besoin de financement', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise possède un EBITDA stable mais une hausse continue des investissements nécessaires pour maintenir son activité. Quel enjeu apparaît ?',
                        'answers' => [
                            ['answer' => Le flux de trésorerie réellement disponible peut être inférieur à ce que suggère l’EBITDA', 'iscorrect' => true],
                            ['answer' => L’EBITDA devient automatiquement un flux de trésorerie', 'iscorrect' => false],
                            ['answer' => Les investissements n’ont aucun impact', 'iscorrect' => false],
                            ['answer' => La dette devient nécessairement nulle', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise affiche une excellente rentabilité, une faible dette, des flux opérationnels solides mais une valorisation très élevée. Quelle question doit compléter l’analyse ?',
                        'answers' => [
                            ['answer' => Les attentes de croissance et de rentabilité intégrées dans le prix sont-elles suffisamment justifiées ?', 'iscorrect' => true],
                            ['answer' => La rentabilité suffit-elle toujours à justifier n’importe quel prix ?', 'iscorrect' => false],
                            ['answer' => Le prix n’a aucun rapport avec les attentes', 'iscorrect' => false],
                            ['answer' => La dette doit-elle être augmentée automatiquement ?', 'iscorrect' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle conclusion constitue le meilleur diagnostic professionnel après une analyse complète ?',
                        'answers' => [
                            ['answer' => Relier performance, qualité des bénéfices, génération de trésorerie, structure financière, risques et valorisation avant de conclure', 'iscorrect' => true],
                            ['answer' => Se baser uniquement sur le bénéfice net', 'iscorrect' => false],
                            ['answer' => Se baser uniquement sur le ratio courant', 'iscorrect' => false],
                            ['answer' => Se baser uniquement sur la croissance du chiffre d’affaires', 'iscorrect' => false],
                        ],
                    ],
                ],
            ],
        ];

        foreach ($quizzes as $quizData) {
            $quiz = Quiz::create([
                'subject_id' => $subject->id,
                'title' => $quizData['title'],
                'level' => 'Professional',
            ]);

            foreach ($quizData['questions'] as $questionData) {
                $question = Question::create([
                    'quiz_id' => $quiz->id,
                    'question' => $questionData['question'],
                ]);

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
