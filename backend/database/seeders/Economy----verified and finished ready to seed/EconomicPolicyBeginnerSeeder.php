<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class EconomicPolicyBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'economic-policy')->firstOrFail();

        $settings = [
            ['duration' => 15, 'passing_score' => 50],
            ['duration' => 15, 'passing_score' => 55],
            ['duration' => 15, 'passing_score' => 60],
            ['duration' => 15, 'passing_score' => 60],
            ['duration' => 15, 'passing_score' => 60],
        ];

        // 'a' = index (0-based) de la bonne réponse dans 'c'
        $quizzes = [
            [
                'title' => "Introduction à la politique économique",
                'description' => "Notions de base, objectifs et instruments de la politique économique.",
                'questions' => [
                    ['q' => "Un gouvernement annonce vouloir réduire le chômage et contenir les prix. Ces buts sont des…", 'c' => ["instruments budgétaires", "indicateurs comptables", "objectifs de politique économique", "sanctions administratives envers les firmes"], 'a' => 2, 'e' => "Un objectif est le résultat visé ; les instruments (impôts, taux, dépenses) sont les moyens employés pour l’atteindre."],
                    ['q' => "Laquelle de ces actions est un véritable instrument de politique économique ?", 'c' => ["Modifier le taux d’un impôt", "Mesurer le taux de chômage trimestriel", "Publier un indice des prix mensuel", "Recenser la population du pays"], 'a' => 0, 'e' => "Changer un impôt, c’est agir sur l’économie ; les trois autres actions sont des mesures statistiques qui décrivent sans agir."],
                    ['q' => "Le PIB réel d’un pays passe de 200 à 210 milliards en un an, à prix constants. Quel est son taux de croissance ?", 'c' => ["2,5 %", "10 %", "21 %", "5 %"], 'a' => 3, 'e' => "(210 − 200) ÷ 200 = 0,05, soit 5 % : on rapporte la variation à la valeur de départ, pas à la valeur d’arrivée."],
                    ['q' => "Quel est l’intrus parmi les grands objectifs du carré magique de Kaldor ?", 'c' => ["Le plein emploi", "Un déficit public élevé", "L’équilibre des échanges extérieurs", "La stabilité des prix"], 'a' => 1, 'e' => "Le carré magique réunit croissance, plein emploi, stabilité des prix et équilibre extérieur ; un déficit élevé n’est pas un but recherché."],
                    ['q' => "Les courses d’un ménage marocain coûtent 10 % de plus qu’il y a un an, alors que son revenu n’a pas bougé. Son pouvoir d’achat…", 'c' => ["a augmenté", "est resté stable", "a été multiplié par deux", "a diminué"], 'a' => 3, 'e' => "Les prix montent, pas le revenu : le même budget achète moins de produits, donc le pouvoir d’achat recule."],
                    ['q' => "Dans un régime parlementaire, qui vote la loi de finances ?", 'c' => ["Le Parlement", "La banque centrale", "Les syndicats de salariés", "Les entreprises publiques"], 'a' => 0, 'e' => "Le gouvernement prépare le projet, mais ce sont les parlementaires qui l’examinent et l’adoptent."],
                    ['q' => "Quel indicateur sert le plus directement à suivre l’inflation ?", 'c' => ["Le produit intérieur brut par habitant", "Le taux de chômage au sens du BIT", "L’indice des prix à la consommation", "Le solde de la balance commerciale"], 'a' => 2, 'e' => "L’indice des prix à la consommation suit le coût d’un panier type de produits achetés par les ménages ; sa hausse mesure l’inflation."],
                    ['q' => "Un pays veut baisser fortement le chômage et réduire vite son déficit. Pourquoi est-ce délicat ?", 'c' => ["Ces deux buts ne se rencontrent jamais dans les faits", "Couper les dépenses peut freiner l’emploi", "Le chômage ne relève d’aucune décision de l’État", "Le déficit n’intéresse que les banques commerciales"], 'a' => 1, 'e' => "Réduire les dépenses pour combler le déficit peut ralentir l’activité et donc l’emploi : c’est un arbitrage entre deux objectifs."],
                    ['q' => "Pourquoi parle-t-on d’arbitrage en politique économique ?", 'c' => ["Parce qu’avancer sur un but peut en éloigner un autre", "Parce qu’un arbitre indépendant fixe les prix de vente", "Parce que tous les objectifs sont atteints en même temps", "Parce que les tribunaux votent le budget de l’État"], 'a' => 0, 'e' => "Les ressources sont limitées : privilégier la lutte contre le chômage peut, par exemple, coûter en déficit ou en prix."],
                    ['q' => "Le taux de chômage passe de 12 % à 10 %. Que peut-on en conclure ?", 'c' => ["Le nombre d’emplois a doublé", "Les prix ont baissé dans la foulée", "La population active a disparu", "La part des chômeurs dans la population active a reculé"], 'a' => 3, 'e' => "Le taux de chômage est le rapport entre chômeurs et actifs : sa baisse signifie simplement que cette part a diminué, sans dire pourquoi."],
                ],
            ],
            [
                'title' => "Politique budgétaire et dépenses publiques",
                'description' => "Comprendre les recettes, les dépenses et le solde budgétaire.",
                'questions' => [
                    ['q' => "Un budget prévoit 400 milliards de recettes et 430 milliards de dépenses. Quel est le solde ?", 'c' => ["Un excédent de 30 milliards", "Un déficit de 30 milliards", "Un déficit de 830 milliards", "Un équilibre parfait des comptes"], 'a' => 1, 'e' => "Recettes − dépenses = 400 − 430 = −30 : les dépenses dépassent les recettes, il y a déficit."],
                    ['q' => "Parmi ces éléments, lequel est une recette publique ?", 'c' => ["Le salaire des fonctionnaires", "Les subventions aux entreprises", "Le remboursement de la dette", "Le produit de la TVA"], 'a' => 3, 'e' => "La TVA est prélevée sur la consommation et alimente le budget ; les trois autres éléments sont des sorties d’argent."],
                    ['q' => "Que désigne la dette publique ?", 'c' => ["Le cumul des emprunts non remboursés de l’État", "Le déficit constaté sur une seule année budgétaire", "Le total des impôts collectés par l’État en un an", "L’argent que l’État doit aux seuls fournisseurs étrangers"], 'a' => 0, 'e' => "Le déficit est un flux annuel ; la dette est le stock accumulé des emprunts. Astuce : déficit = flux, dette = stock."],
                    ['q' => "Pour relancer une économie en récession, l’État peut…", 'c' => ["alourdir la fiscalité des ménages", "réduire les dépenses courantes de l’administration", "lancer des chantiers d’infrastructure", "relever les prix des services publics"], 'a' => 2, 'e' => "Des travaux publics créent des commandes et des emplois, ce qui soutient la demande ; les autres mesures la freinent."],
                    ['q' => "Un impôt est dit progressif lorsque…", 'c' => ["son taux baisse quand le revenu monte", "son montant est identique pour tous les foyers", "son taux augmente avec le revenu", "il ne frappe que les sociétés commerciales"], 'a' => 2, 'e' => "Plus le revenu est élevé, plus la part prélevée est forte : c’est le principe des tranches de l’impôt sur le revenu."],
                    ['q' => "Un revenu imposable de 10 000 MAD est taxé au taux de 20 %. Quel est l’impôt dû ?", 'c' => ["2 000 MAD", "200 MAD", "8 000 MAD", "12 000 MAD"], 'a' => 0, 'e' => "20 % de 10 000 = 10 000 × 0,2 = 2 000 MAD ; 8 000 est ce qu’il reste après impôt."],
                    ['q' => "Une politique budgétaire expansionniste consiste à…", 'c' => ["relever les impôts tout en réduisant les dépenses publiques", "dépenser plus ou baisser les impôts", "garder un taux directeur très élevé pendant des années", "restreindre la quantité de monnaie en circulation"], 'a' => 1, 'e' => "On soutient la demande en augmentant les dépenses ou en allégeant la fiscalité, au prix d’un déficit plus lourd."],
                    ['q' => "Quel effet immédiat attend-on d’une baisse de l’impôt sur le revenu ?", 'c' => ["Le revenu disponible des ménages diminue", "Le taux d’épargne des ménages tombe à zéro", "La consommation des ménages est plafonnée", "Le revenu disponible des ménages s’accroît"], 'a' => 3, 'e' => "Moins d’impôt, c’est plus de revenu après prélèvement, donc un budget de consommation ou d’épargne plus large."],
                    ['q' => "La dette d’un pays est de 100 et son déficit de l’année est de 5. Sans autre changement, la dette…", 'c' => ["baisse à 95", "monte à 105", "est multipliée par cinq", "reste inchangée à 100"], 'a' => 1, 'e' => "Le déficit se finance par l’emprunt : il s’ajoute au stock existant, 100 + 5 = 105."],
                    ['q' => "Les stabilisateurs automatiques sont…", 'c' => ["des mesures votées à chaque début de trimestre", "des taux fixés chaque mois par la banque centrale", "des mécanismes qui jouent sans nouvelle loi", "des plafonds de dépenses imposés aux communes"], 'a' => 2, 'e' => "En récession, les impôts rentrent moins et les allocations chômage augmentent, ce qui amortit le choc sans décision nouvelle."],
                ],
            ],
            [
                'title' => "Politique monétaire et inflation",
                'description' => "Rôle de la banque centrale, taux d’intérêt et stabilité des prix.",
                'questions' => [
                    ['q' => "Quelle institution conduit la politique monétaire au Maroc ?", 'c' => ["Le ministère de l’Intérieur", "La Cour des comptes", "Le Parlement", "Bank Al-Maghrib"], 'a' => 3, 'e' => "Bank Al-Maghrib est la banque centrale du royaume : elle fixe le taux directeur et veille à la stabilité des prix."],
                    ['q' => "Quand la banque centrale relève son taux directeur, le crédit devient…", 'c' => ["plus accessible, donc davantage demandé", "plus coûteux, donc moins demandé", "gratuit pour les ménages modestes", "interdit pour les petites entreprises"], 'a' => 1, 'e' => "Un taux plus haut renchérit l’emprunt des banques puis des clients ; ceux-ci empruntent et dépensent moins."],
                    ['q' => "Un panier de produits coûtait 200 MAD l’an dernier et coûte 210 MAD cette année. Quelle est l’inflation ?", 'c' => ["5 %", "10 %", "2,1 %", "21 %"], 'a' => 0, 'e' => "(210 − 200) ÷ 200 = 0,05, soit 5 % de hausse des prix sur l’année."],
                    ['q' => "Pourquoi une forte inflation pénalise-t-elle l’épargnant qui garde son argent sur un compte peu rémunéré ?", 'c' => ["Elle fait grimper la valeur réelle de son épargne", "Elle supprime les intérêts bancaires versés", "Elle réduit la valeur réelle de son épargne", "Elle l’oblige à épargner davantage"], 'a' => 2, 'e' => "Si les prix montent plus vite que l’intérêt reçu, chaque dirham épargné achètera moins demain qu’aujourd’hui."],
                    ['q' => "Un taux d’intérêt nominal de 4 % et une inflation de 3 % donnent un taux réel proche de…", 'c' => ["1 %", "7 %", "12 %", "−1 %"], 'a' => 0, 'e' => "Taux réel ≈ taux nominal − inflation = 4 − 3 = 1 % ; on retranche la hausse des prix."],
                    ['q' => "Quel est l’objectif habituel d’une banque centrale vis-à-vis des prix ?", 'c' => ["Les faire progresser d’environ 10 % chaque année", "Les bloquer définitivement pour tous les produits", "Les fixer un par un dans chaque magasin", "Les garder stables, autour d’une faible inflation"], 'a' => 3, 'e' => "On vise une inflation basse et prévisible, pas un gel des prix, qui serait impossible à tenir."],
                    ['q' => "Lequel de ces outils relève de la politique monétaire ?", 'c' => ["Le taux de la TVA", "Le taux directeur", "Le salaire minimum", "Les droits de douane"], 'a' => 1, 'e' => "Le taux directeur est le prix auquel la banque centrale prête aux banques ; les autres outils sont fiscaux, sociaux ou commerciaux."],
                    ['q' => "Face à une inflation qui s’emballe, quelle réaction de la banque centrale est cohérente ?", 'c' => ["Baisser son taux directeur pour encourager le crédit", "Racheter massivement des titres publics", "Remonter son taux directeur", "Réduire les réserves obligatoires des banques"], 'a' => 2, 'e' => "Un taux plus élevé refroidit la demande de crédit et donc de biens, ce qui calme la hausse des prix."],
                    ['q' => "Lequel de ces constats décrit réellement de l’inflation ?", 'c' => ["Le prix des tomates double pendant une semaine", "La plupart des prix augmentent pendant plusieurs mois", "Le prix d’une voiture baisse après une promotion", "Un commerçant change l’étiquette d’un article"], 'a' => 1, 'e' => "L’inflation est une hausse générale et durable des prix ; une variation isolée ou passagère n’en est pas une."],
                    ['q' => "Que signifie la déflation ?", 'c' => ["Une baisse générale et durable des prix", "Un ralentissement de la hausse des prix", "Une hausse brutale du taux de change", "Une baisse du taux de chômage"], 'a' => 0, 'e' => "Attention à ne pas la confondre avec la désinflation, où les prix montent encore mais moins vite."],
                ],
            ],
            [
                'title' => "Emploi, chômage et politiques de soutien",
                'description' => "Mesures économiques pouvant soutenir l’emploi et les compétences.",
                'questions' => [
                    ['q' => "Une personne sans emploi, disponible et qui en cherche activement est comptée comme…", 'c' => ["inactive", "salariée à temps partiel", "chômeuse", "retraitée anticipée"], 'a' => 2, 'e' => "Au sens du BIT, il faut trois conditions : être sans emploi, disponible et en recherche active."],
                    ['q' => "Sur 1 000 actifs, 90 sont au chômage. Quel est le taux de chômage ?", 'c' => ["9 %", "90 %", "10 %", "0,9 %"], 'a' => 0, 'e' => "90 ÷ 1 000 = 0,09, soit 9 % ; on divise par les actifs, pas par la population totale."],
                    ['q' => "Un menuisier perd son emploi parce que la demande de meubles s’effondre en pleine récession. Ce chômage est surtout…", 'c' => ["frictionnel", "conjoncturel", "volontaire", "saisonnier"], 'a' => 1, 'e' => "Il découle du ralentissement général de l’activité ; il disparaîtra en grande partie quand la conjoncture se redressera."],
                    ['q' => "Une formation professionnelle financée par l’État vise surtout à…", 'c' => ["freiner la hausse des prix des produits importés", "relever le taux directeur de la banque centrale", "réduire mécaniquement le déficit de la balance commerciale", "améliorer l’employabilité des travailleurs"], 'a' => 3, 'e' => "Des compétences à jour rendent les travailleurs plus attractifs pour les entreprises et facilitent le retour à l’emploi."],
                    ['q' => "Pourquoi un salaire minimum très élevé est-il parfois critiqué ?", 'c' => ["Il fait baisser le revenu de tous les salariés", "Il peut décourager l’embauche des moins qualifiés", "Il supprime la concurrence entre les entreprises", "Il réduit le déficit public par automatisme"], 'a' => 1, 'e' => "S’il dépasse la productivité de certains postes, l’employeur peut renoncer à recruter ; c’est un arbitrage entre revenu et emploi."],
                    ['q' => "Une subvention à l’embauche des jeunes est un exemple de…", 'c' => ["politique monétaire", "politique de change", "politique de l’emploi", "politique douanière"], 'a' => 2, 'e' => "Elle réduit le coût du travail d’une catégorie ciblée pour encourager les recrutements."],
                    ['q' => "Un programme de travaux publics emploie des chômeurs d’une région. Quel effet attend-on à court terme ?", 'c' => ["Davantage de chômage local", "Une baisse des revenus des ménages", "Un recul de la consommation", "Des emplois et des revenus créés"], 'a' => 3, 'e' => "Les salaires versés sont dépensés sur place, ce qui soutient commerces et activité : c’est l’effet de relance."],
                    ['q' => "Le chômage frictionnel correspond…", 'c' => ["au temps de recherche entre deux emplois", "à un manque durable de demande de biens", "à la disparition complète d’un métier", "à un refus de travailler malgré les offres"], 'a' => 0, 'e' => "Même quand l’économie va bien, trouver le bon poste prend du temps : c’est un chômage de transition, souvent court."],
                    ['q' => "Pourquoi le taux de chômage seul peut-il masquer un problème d’emploi ?", 'c' => ["Parce qu’il inclut aussi les retraités et les étudiants", "Parce qu’il ne concerne que l’industrie", "Parce que les découragés qui cessent de chercher n’y figurent plus", "Parce qu’il est publié chaque jour"], 'a' => 2, 'e' => "Quelqu’un qui abandonne sa recherche sort des chômeurs et passe dans l’inactivité, ce qui peut faire baisser le taux sans créer d’emploi."],
                    ['q' => "Quel est l’intrus parmi ces dispositifs de soutien à l’emploi ?", 'c' => ["Une aide à la formation", "Une prime à l’embauche", "Un contrat d’insertion professionnelle pour jeunes", "Une hausse des droits de succession"], 'a' => 3, 'e' => "Les trois premiers visent directement l’emploi ; un droit de succession est un impôt sur le patrimoine transmis."],
                ],
            ],
            [
                'title' => "Évaluation et limites des politiques économiques",
                'description' => "Indicateurs, délais, arbitrages et effets inattendus des mesures publiques.",
                'questions' => [
                    ['q' => "Pourquoi une mesure économique met-elle du temps à produire ses effets ?", 'c' => ["Parce que les statistiques sont gardées secrètes", "Parce que les prix sont gelés par la loi", "Parce qu’il n’existe aucun instrument efficace", "Parce que les agents réagissent progressivement"], 'a' => 3, 'e' => "Ménages et entreprises ajustent leurs achats et leurs investissements peu à peu : d’où des délais entre décision et résultats."],
                    ['q' => "Une baisse du taux directeur décidée aujourd’hui ne relance pas l’investissement dès demain. Cela illustre…", 'c' => ["un décalage d’action de la mesure", "une inversion de la courbe des prix", "un effet de seuil sur les salaires", "un arbitrage entre deux objectifs"], 'a' => 0, 'e' => "Entre la décision, sa transmission aux banques et la réaction des entreprises, plusieurs mois peuvent s’écouler."],
                    ['q' => "Quand l’État emprunte massivement, il peut rendre le crédit plus cher pour les entreprises. Cet effet s’appelle…", 'c' => ["l’effet de cliquet", "l’effet de levier", "l’effet d’éviction", "l’effet de structure"], 'a' => 2, 'e' => "L’État évince les investisseurs privés du marché du crédit : mnémotechnique, il prend la place des entreprises."],
                    ['q' => "Une taxe sur un produit nocif fait baisser sa consommation mais encourage la contrebande. Cette conséquence est un…", 'c' => ["effet attendu", "effet pervers", "effet de mode", "effet de taille"], 'a' => 1, 'e' => "Un effet pervers est une conséquence opposée ou étrangère au but visé, ici le développement d’un marché parallèle."],
                    ['q' => "Pourquoi compare-t-on la situation observée avec ce qui se serait passé sans la mesure ?", 'c' => ["Pour connaître le nombre d’électeurs concernés", "Pour fixer les prix des services publics", "Pour calculer le taux d’intérêt directeur", "Pour isoler l’effet propre de la mesure"], 'a' => 3, 'e' => "Sans ce point de comparaison, on ne sait pas si l’évolution observée vient de la mesure ou d’autres facteurs."],
                    ['q' => "Le PIB augmente de 4 % mais les inégalités se creusent. Que montre cette situation ?", 'c' => ["Que la croissance est partagée de façon équitable", "Que le PIB suffit à mesurer le bien-être collectif", "Qu’il faut d’autres indicateurs en plus du PIB", "Que les inégalités se réduisent avec le temps"], 'a' => 2, 'e' => "Le PIB mesure la production totale, pas sa répartition : on le complète par des indicateurs d’inégalités ou de pauvreté."],
                    ['q' => "Un plafonnement du prix du pain est fixé nettement sous le prix du marché. Quel risque est le plus courant ?", 'c' => ["Des pénuries ou un marché parallèle", "Une hausse spontanée de l’offre des boulangers", "Une forte baisse des coûts de production du blé", "Un surplus de pain resté invendu partout"], 'a' => 0, 'e' => "À prix trop bas, les producteurs offrent moins alors que la demande augmente : le pain manque ou se vend sous le manteau."],
                    ['q' => "Le multiplicateur budgétaire est estimé à 1,5. Une dépense publique supplémentaire de 10 accroît le revenu national de…", 'c' => ["10", "15", "1,5", "25"], 'a' => 1, 'e' => "10 × 1,5 = 15 : chaque unité dépensée en génère davantage grâce aux revenus qui se dépensent à leur tour."],
                    ['q' => "Une politique est dite procyclique lorsqu’elle…", 'c' => ["compense les fluctuations de l’activité", "n’a aucun effet sur l’emploi", "amplifie les fluctuations de l’activité", "fixe le taux de change du pays"], 'a' => 2, 'e' => "Par exemple, une austérité décidée en pleine récession aggrave le ralentissement au lieu de l’amortir."],
                    ['q' => "Une aide vise les familles pauvres, mais une grande part de l’argent va à des familles aisées. Quel défaut cela révèle-t-il ?", 'c' => ["Un excès de transparence", "Une inflation importée", "Un manque de croissance potentielle", "Un mauvais ciblage des bénéficiaires"], 'a' => 3, 'e' => "Une mesure doit atteindre ceux qu’elle vise ; le ciblage est un critère clé pour juger l’efficacité d’une aide."],
                ],
            ],
        ];

        foreach ($quizzes as $position => $quizData) {
            $quiz = Quiz::updateOrCreate(
                [
                    'subject_id' => $subject->id,
                    'title' => $quizData['title'],
                ],
                [
                    'owner_id' => null,
                    'description' => $quizData['description'],
                    'duration' => $settings[$position]['duration'],
                    'passing_score' => $settings[$position]['passing_score'],
                    'total_marks' => count($quizData['questions']),
                    'is_active' => true,
                    'difficulty' => 'Beginner',
                ]
            );

            foreach ($quizData['questions'] as $qIndex => $item) {
                $question = Question::updateOrCreate(
                    [
                        'quiz_id' => $quiz->id,
                        'order' => $qIndex + 1,
                    ],
                    [
                        'question' => $item['q'],
                        'type' => 'multiple_choice',
                        'marks' => 1,
                        'explanation' => $item['e'],
                    ]
                );

                foreach ($item['c'] as $cIndex => $text) {
                    Choice::updateOrCreate(
                        [
                            'question_id' => $question->id,
                            'order' => $cIndex + 1,
                        ],
                        [
                            'choice_text' => $text,
                            'is_correct' => $cIndex === $item['a'],
                        ]
                    );
                }

                $question->choices()->where('order', '>', count($item['c']))->delete();
            }
        }
    }
}
