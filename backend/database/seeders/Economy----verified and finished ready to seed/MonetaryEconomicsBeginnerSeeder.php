<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class MonetaryEconomicsBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'monetary-economics')->firstOrFail();

        $settings = [
            ['duration' => 15, 'passing_score' => 50],
            ['duration' => 15, 'passing_score' => 55],
            ['duration' => 15, 'passing_score' => 60],
            ['duration' => 15, 'passing_score' => 60],
            ['duration' => 15, 'passing_score' => 60],
            ['duration' => 15, 'passing_score' => 65],
            ['duration' => 15, 'passing_score' => 65],
            ['duration' => 15, 'passing_score' => 70],
            ['duration' => 15, 'passing_score' => 70],
            ['duration' => 15, 'passing_score' => 70],
        ];

        // 'a' = index (0-based) de la bonne réponse dans 'c'
        $quizzes = [
            [
                'title' => "Introduction à la monnaie",
                'description' => "Les fonctions de la monnaie, ses formes et la confiance qui la fait accepter.",
                'questions' => [
                    ['q' => "Une boulangère accepte des dirhams en échange de son pain parce qu’elle sait qu’elle pourra les dépenser ailleurs. Quelle fonction de la monnaie est à l’œuvre ?", 'c' => ["Réserve de valeur", "Moyen d’échange", "Unité de compte", "Instrument de redistribution"], 'a' => 1, 'e' => "La monnaie sert d’intermédiaire : on vend contre des dirhams, puis on achète autre chose avec. Elle est acceptée parce que chacun sait qu’elle le sera encore."],
                    ['q' => "Amina a des œufs et cherche du tissu, mais le tisserand ne veut que du sel. Quel est le blocage du troc ici ?", 'c' => ["Les œufs ne sont pas des biens économiques", "Le tisserand n’a pas le droit de produire", "Le troc est interdit par la loi", "Les besoins ne coïncident pas"], 'a' => 3, 'e' => "Le troc exige que chacun veuille exactement ce que l’autre offre. La monnaie résout cela : on vend d’abord, on achète ensuite à quelqu’un d’autre."],
                    ['q' => "Une épicerie affiche 25 DH le kilo d’oranges et 50 DH le kilo de viande. Quelle fonction de la monnaie permet de comparer ces deux produits ?", 'c' => ["Unité de compte", "Réserve de valeur", "Moyen de paiement différé", "Garantie de l’État"], 'a' => 0, 'e' => "Exprimer tous les prix dans la même unité donne un langage commun : ici, la viande vaut deux fois plus cher que les oranges au kilo."],
                    ['q' => "Youssef garde 1 000 DH dans un tiroir pour s’offrir un téléphone dans six mois. Quelle fonction de la monnaie utilise-t-il ?", 'c' => ["Unité de compte", "Intermédiation", "Réserve de valeur", "Création monétaire"], 'a' => 2, 'e' => "Mettre de l’argent de côté, c’est transporter du pouvoir d’achat dans le temps. Attention : elle n’est sûre que si les prix restent stables."],
                    ['q' => "Quel est l’intrus parmi ces éléments ?", 'c' => ["Une carte cadeau d’une enseigne", "Un billet de 100 DH", "Une pièce de 5 DH", "Le solde d’un compte courant"], 'a' => 0, 'e' => "Billets, pièces et dépôts à vue sont acceptés partout pour payer. Une carte cadeau n’est utilisable que chez un commerçant : ce n’est pas de la monnaie."],
                    ['q' => "Salma règle son loyer par virement bancaire. Quelle forme de monnaie utilise-t-elle ?", 'c' => ["La monnaie fiduciaire", "La monnaie métallique frappée", "La monnaie-marchandise ancienne", "La monnaie scripturale"], 'a' => 3, 'e' => "Un virement déplace des écritures entre comptes, sans billet ni pièce. Moyen simple : scripturale vient de « écrite »."],
                    ['q' => "Le kilo de sucre passe de 8 à 10 DH. Avec 40 DH, combien de kilos en moins peut-on acheter ?", 'c' => ["2 kilos", "1 kilo", "4 kilos", "5 kilos"], 'a' => 1, 'e' => "On passait de 40 ÷ 8 = 5 kilos à 40 ÷ 10 = 4 kilos : le même billet pèse moins lourd, c’est une perte de pouvoir d’achat."],
                    ['q' => "Pourquoi un billet de 200 DH, qui ne vaut presque rien comme papier, est-il pourtant accepté en paiement ?", 'c' => ["Il est échangeable contre de l’or à la banque", "Le papier utilisé coûte très cher à produire", "Chacun sait que les autres l’accepteront et la loi le reconnaît", "Il est fabriqué à la main par des artisans"], 'a' => 2, 'e' => "La monnaie fiduciaire repose sur la confiance (fiducia) et sur le cours légal. Sa valeur ne vient pas de la matière dont elle est faite."],
                    ['q' => "Qui a le privilège d’émettre les billets de banque au Maroc ?", 'c' => ["Le ministère de l’Économie et des Finances", "Chaque banque commerciale pour ses clients", "L’Office des changes", "Bank Al-Maghrib"], 'a' => 3, 'e' => "L’émission des billets est réservée à la banque centrale du pays, ce qui évite que chaque banque imprime sa propre monnaie."],
                    ['q' => "Parmi ces actifs, lequel est le plus liquide ?", 'c' => ["Un billet de 200 DH", "Un local commercial", "Une voiture d’occasion", "Un terrain en zone rurale"], 'a' => 0, 'e' => "Est liquide ce qui se transforme en monnaie vite et sans perte. Le billet est déjà de la monnaie, alors qu’un terrain demande des mois pour se vendre."],
                ],
            ],
            [
                'title' => "Banques et création monétaire",
                'description' => "Le métier des banques commerciales, les dépôts, les crédits et les réserves.",
                'questions' => [
                    ['q' => "Fatima dépose 5 000 DH sur son compte. Pour la banque, ce dépôt est :", 'c' => ["Un capital apporté par les actionnaires", "Un bénéfice de la période", "Une dette envers sa cliente", "Une subvention de l’État"], 'a' => 2, 'e' => "L’argent déposé reste la propriété de Fatima, qui peut le reprendre à tout moment. Il figure donc au passif de la banque, parmi ses dettes."],
                    ['q' => "Un crédit de 100 000 DH accordé à un artisan est, pour la banque :", 'c' => ["Une créance, donc un actif", "Une dette, donc un passif", "Un apport en fonds propres", "Une réserve obligatoire imposée"], 'a' => 0, 'e' => "La banque possède le droit de se faire rembourser, avec intérêts. Un droit sur quelqu’un d’autre se range à l’actif."],
                    ['q' => "La monnaie scripturale se crée surtout au moment où :", 'c' => ["Les clients déposent des billets", "Les clients remboursent leurs prêts", "L’État vote son budget", "Les banques accordent des crédits"], 'a' => 3, 'e' => "Quand une banque prête, elle inscrit la somme au compte de l’emprunteur : de la monnaie nouvelle apparaît. À l’inverse, rembourser un prêt en détruit."],
                    ['q' => "Le taux de réserves obligatoires est de 10 %. Sur un dépôt de 2 000 DH, la banque doit mettre de côté :", 'c' => ["20 DH", "200 DH", "1 800 DH", "2 200 DH"], 'a' => 1, 'e' => "10 % de 2 000 donnent 200 DH. Les 1 800 DH restants peuvent être prêtés."],
                    ['q' => "Avec un taux de réserves de 20 %, quel est le multiplicateur monétaire simple ?", 'c' => ["20", "80", "0,2", "5"], 'a' => 3, 'e' => "On divise 1 par le taux de réserves : 1 ÷ 0,20 = 5. Plus la banque doit garder de réserves, moins elle peut créer de monnaie."],
                    ['q' => "Karim dépose 1 000 DH et le taux de réserves est de 10 %. Au premier tour, la banque peut prêter au maximum :", 'c' => ["100 DH", "900 DH", "1 000 DH", "1 100 DH"], 'a' => 1, 'e' => "Elle garde 10 % (100 DH) et prête le reste. Les 900 DH prêtés finiront souvent en dépôt dans une banque, et le cycle repart."],
                    ['q' => "Quelle phrase est fausse ?", 'c' => ["Les banques commerciales ne créent jamais de monnaie", "Les dépôts à vue sont de la monnaie", "Un crédit nouveau fait apparaître un dépôt nouveau", "Un remboursement de crédit détruit de la monnaie"], 'a' => 0, 'e' => "Les crédits bancaires créent des dépôts, donc de la monnaie : l’affirmation absolue est donc erronée. Les trois autres décrivent bien le mécanisme."],
                    ['q' => "Une banque rémunère ses dépôts à 2 % et prête à 6 %. Sa marge d’intermédiation brute est de :", 'c' => ["3 points de pourcentage", "8 points de pourcentage", "4 points de pourcentage", "12 points de pourcentage"], 'a' => 2, 'e' => "La marge est la différence entre le taux auquel elle prête et celui auquel elle emprunte : 6 − 2 = 4. Piège classique : diviser 6 par 2 donne 3, ce qui n’a pas de sens ici."],
                    ['q' => "Pourquoi une banque garde-t-elle une partie de ses dépôts sous forme de liquidités ?", 'c' => ["Pour fixer elle-même le taux directeur", "Pour faire face aux retraits", "Pour distribuer des dividendes aux déposants", "Pour imprimer des billets au besoin"], 'a' => 1, 'e' => "Les clients peuvent retirer leur argent à tout moment. Sans liquidités, la banque ne pourrait pas les servir, même si elle a beaucoup prêté."],
                    ['q' => "Nadia vire 3 000 DH de son compte vers celui de son voisin, client de la même banque. La masse monétaire :", 'c' => ["Augmente de 3 000 DH", "Diminue de 3 000 DH", "Reste la même", "Double"], 'a' => 2, 'e' => "La somme change simplement de propriétaire : un compte baisse, l’autre monte du même montant. Rien n’est créé ni détruit."],
                ],
            ],
            [
                'title' => "Inflation et niveau général des prix",
                'description' => "Mesurer l’inflation, comprendre ses causes et ses effets sur le pouvoir d’achat.",
                'questions' => [
                    ['q' => "Que désigne l’inflation ?", 'c' => ["Une hausse générale et durable des prix", "La hausse du prix d’un seul bien", "Une flambée de prix pendant une fête", "Une augmentation de la quantité produite"], 'a' => 0, 'e' => "Il faut que la hausse touche l’ensemble des prix et dure. Un produit qui renchérit isolément, ou un pic passager, ne suffit pas."],
                    ['q' => "Un panier de courses coûtait 400 DH l’an dernier et coûte 420 DH cette année. Le taux d’inflation est de :", 'c' => ["20 %", "4,8 %", "5 %", "105 %"], 'a' => 2, 'e' => "La hausse est de 20 DH sur une base de 400 : 20 ÷ 400 = 5 %. On divise toujours par la valeur de départ, pas par la nouvelle."],
                    ['q' => "À quoi sert l’indice des prix à la consommation (IPC) ?", 'c' => ["À mesurer la production totale du pays", "À suivre le prix d’un panier de ménage type", "À calculer le nombre de chômeurs inscrits", "À suivre le cours des actions cotées"], 'a' => 1, 'e' => "L’IPC compare, d’une période à l’autre, le prix d’un panier moyen de biens et services. C’est l’outil de base pour mesurer l’inflation."],
                    ['q' => "Le salaire de Salma augmente de 3 % alors que les prix montent de 5 %. Son pouvoir d’achat :", 'c' => ["A augmenté de 3 %", "A augmenté de 8 %", "Est resté stable", "A diminué"], 'a' => 3, 'e' => "Ses revenus croissent moins vite que les prix : avec son salaire augmenté, elle achète un peu moins qu’avant (environ 2 % de moins)."],
                    ['q' => "Quelle situation correspond à une inflation par la demande ?", 'c' => ["Une hausse du prix de l’énergie importée", "Une augmentation des cotisations sociales des usines", "Une demande globale qui dépasse la production disponible", "Une chute de la productivité des ateliers"], 'a' => 2, 'e' => "Trop d’argent court après trop peu de biens : les vendeurs relèvent leurs prix. Dans les autres cas, ce sont les coûts de production qui poussent les prix."],
                    ['q' => "Le prix du blé importé double et le prix du pain monte. Il s’agit surtout d’une inflation :", 'c' => ["Par les coûts, importée", "Par excès de demande intérieure", "Par excès de masse monétaire", "Par baisse des taux directeurs"], 'a' => 0, 'e' => "Le choc part de la matière première, donc du côté des coûts, et vient de l’étranger. Les consommateurs ne demandent pas plus de pain."],
                    ['q' => "Les prix baissent dans presque tous les secteurs depuis plusieurs trimestres. Ce phénomène s’appelle :", 'c' => ["Une désinflation", "Une stagflation", "Une dévaluation", "Une déflation"], 'a' => 3, 'e' => "Déflation = baisse générale et durable des prix. Ne la confondez pas avec la désinflation, où les prix montent encore mais plus lentement."],
                    ['q' => "L’indice des prix vaut 100 en 2020 et 125 en 2024. Les prix ont augmenté, sur la période, de :", 'c' => ["125 %", "25 %", "20 %", "12,5 %"], 'a' => 1, 'e' => "On soustrait la base : 125 − 100 = 25 points, soit 25 % de la base 100. Ne pas lire 125 comme un pourcentage de hausse."],
                    ['q' => "Une inflation plus forte que prévue avantage plutôt :", 'c' => ["Un emprunteur à taux fixe", "Un prêteur à taux fixe", "Un retraité à pension fixe", "Un épargnant au livret peu rémunéré"], 'a' => 0, 'e' => "L’emprunteur rembourse avec une monnaie qui vaut moins qu’à la signature : sa dette s’allège en termes réels. Le prêteur, lui, est perdant."],
                    ['q' => "Un journal titre : « L’inflation recule à 2 %, donc les prix baissent. » Où est l’erreur ?", 'c' => ["Une inflation de 2 % est impossible à mesurer", "L’inflation ne concerne que les produits alimentaires", "Le taux d’inflation se calcule sur un seul produit", "Avec 2 % d’inflation, les prix montent encore, mais moins vite"], 'a' => 3, 'e' => "Une baisse du taux d’inflation n’est pas une baisse des prix : celle-ci supposerait un taux négatif. Les prix continuent simplement de croître plus lentement."],
                ],
            ],
            [
                'title' => "Taux d’intérêt et valeur de la monnaie",
                'description' => "Le taux d’intérêt comme prix du temps et de l’argent : taux réel, actualisation et effets sur le crédit.",
                'questions' => [
                    ['q' => "Karim emprunte 10 000 DH à 6 % par an, en intérêts simples. Les intérêts dus au bout d’un an sont de :", 'c' => ["60 DH", "6 000 DH", "10 600 DH", "600 DH"], 'a' => 3, 'e' => "6 % de 10 000 font 600 DH. Les 10 600 DH correspondent à la somme totale à rembourser, capital compris."],
                    ['q' => "Le taux d’intérêt est :", 'c' => ["Le prix d’une monnaie étrangère exprimé en dirhams", "Le prix à payer pour disposer de monnaie pendant un certain temps", "L’impôt prélevé sur l’épargne des ménages", "La hausse moyenne des prix du panier"], 'a' => 1, 'e' => "Prêter, c’est renoncer à son argent un moment : l’intérêt rémunère cet effort. Le prix d’une devise, lui, s’appelle le taux de change."],
                    ['q' => "Un livret rapporte 5 % et l’inflation est de 2 %. Le taux d’intérêt réel est d’environ :", 'c' => ["7 %", "2,5 %", "3 %", "10 %"], 'a' => 2, 'e' => "Taux réel ≈ taux nominal − inflation : 5 − 2 = 3. Les 2 points mangés par la hausse des prix ne comptent pas comme gain."],
                    ['q' => "Un livret rapporte 1 % alors que les prix augmentent de 4 % par an. L’épargnant :", 'c' => ["Voit son pouvoir d’achat baisser", "S’enrichit en pouvoir d’achat", "Est protégé de l’inflation par son livret", "Gagne 5 % au total en un an"], 'a' => 0, 'e' => "Taux réel = 1 − 4 = −3 %. Son capital grossit en dirhams, mais chaque dirham achète moins qu’avant."],
                    ['q' => "À un taux de 10 %, que vaut aujourd’hui une somme de 1 100 DH qui sera reçue dans un an ?", 'c' => ["990 DH", "1 000 DH", "1 210 DH", "1 100 DH environ"], 'a' => 1, 'e' => "Aujourd’hui 1 000 DH placés à 10 % deviennent 1 100 DH dans un an : les deux montants sont équivalents. Actualiser, c’est diviser par 1,10."],
                    ['q' => "Une entreprise envisage une machine de 1 million de DH qui lui rapporterait 5 % par an. Le taux du crédit passe de 4 % à 7 %. Que fera-t-elle probablement ?", 'c' => ["Investir davantage, car le crédit est plus cher", "Emprunter plus pour profiter du nouveau taux", "Renoncer, car le crédit coûte plus que le projet ne rapporte", "Ignorer le taux, qui ne concerne que l’épargne"], 'a' => 2, 'e' => "À 7 %, financer un projet qui rapporte 5 % fait perdre de l’argent. Un taux plus haut décourage donc l’investissement."],
                    ['q' => "Le crédit immobilier d’Hamza est à taux variable. Si les taux du marché montent, sa mensualité :", 'c' => ["Augmente à la prochaine révision", "Baisse à la prochaine révision", "Reste figée jusqu’à la fin du prêt", "Est annulée par la banque"], 'a' => 0, 'e' => "Un taux variable suit les conditions du marché. C’est le taux fixe qui protège l’emprunteur contre les hausses."],
                    ['q' => "Quand les taux d’intérêt du marché montent, le prix des obligations déjà émises à taux fixe tend à :", 'c' => ["Monter", "Rester égal au prix d’émission", "Doubler", "Baisser"], 'a' => 3, 'e' => "Une ancienne obligation rapporte moins que les nouvelles : pour la vendre, il faut accepter un prix plus bas. Taux et prix des obligations évoluent en sens inverse."],
                    ['q' => "Pourquoi une petite entreprise emprunte-t-elle en général plus cher que l’État ?", 'c' => ["Elle emprunte toujours des sommes plus petites", "La banque centrale lui impose un taux majoré", "Le risque de défaut est plus fort", "Elle produit des biens, pas des titres"], 'a' => 2, 'e' => "Le taux comprend une prime de risque : plus le prêteur craint de ne pas être remboursé, plus il exige d’intérêts."],
                    ['q' => "Karim place 1 000 DH à 10 % par an, avec intérêts composés. Après deux ans, il aura :", 'c' => ["1 200 DH", "1 210 DH", "1 100 DH", "10 210 DH"], 'a' => 1, 'e' => "La première année : 1 100 DH. La seconde, les 10 % portent sur 1 100 et non sur 1 000, soit 110 DH de plus. Total 1 210."],
                ],
            ],
            [
                'title' => "Politique monétaire",
                'description' => "Les objectifs, les instruments et la transmission de la politique d’une banque centrale.",
                'questions' => [
                    ['q' => "Quel est l’objectif prioritaire de Bank Al-Maghrib ?", 'c' => ["Maximiser les recettes fiscales de l’État", "Maintenir la stabilité des prix", "Fixer les salaires du secteur privé", "Équilibrer le budget de l’État"], 'a' => 1, 'e' => "Une inflation faible et stable protège le pouvoir d’achat et permet aux agents de planifier. Le budget et les impôts relèvent du gouvernement."],
                    ['q' => "Quel instrument la banque centrale manie-t-elle en premier pour influencer le coût du crédit ?", 'c' => ["Son taux directeur", "Le taux de la TVA", "Le niveau des droits de douane", "Le budget d’investissement de l’État"], 'a' => 0, 'e' => "Le taux directeur est le prix auquel elle prête aux banques : il se répercute sur tous les autres taux. Les trois autres leviers appartiennent à la politique budgétaire ou commerciale."],
                    ['q' => "Pour freiner une inflation forte, la banque centrale va plutôt :", 'c' => ["L’abaisser", "Acheter massivement des titres", "Réduire les réserves obligatoires", "Relever son taux directeur"], 'a' => 3, 'e' => "Crédit plus cher, demande plus faible, prix qui montent moins vite. Les trois autres mesures injectent de la liquidité et alimentent plutôt la demande."],
                    ['q' => "Après une hausse du taux directeur, les banques commerciales ont tendance à :", 'c' => ["Baisser leurs taux de crédit", "Rendre leurs réserves à la banque centrale", "Relever leurs taux de crédit", "Prêter davantage à tous leurs clients"], 'a' => 2, 'e' => "Leur propre refinancement coûte plus cher : elles répercutent le surcoût sur les emprunteurs. C’est le premier maillon de la transmission."],
                    ['q' => "L’économie est en récession et l’inflation est très faible. Que peut faire la banque centrale ?", 'c' => ["Baisser son taux directeur", "Relever ses taux pour calmer la demande", "Augmenter les réserves obligatoires", "Vendre des titres pour retirer des liquidités"], 'a' => 0, 'e' => "Quand l’activité est molle et les prix stables, un crédit moins cher encourage la consommation et l’investissement."],
                    ['q' => "La banque centrale achète des titres aux banques commerciales. Elle :", 'c' => ["Retire de la liquidité aux banques", "Finance directement les ménages", "Fixe le cours des actions", "Injecte des liquidités"], 'a' => 3, 'e' => "Elle paie ces titres avec de la monnaie de banque centrale : les banques ont davantage de liquidités à prêter. Vendre des titres produit l’effet inverse."],
                    ['q' => "Si la banque centrale relève le taux de réserves obligatoires, les banques peuvent prêter :", 'c' => ["Plus qu’avant", "Autant qu’avant", "Moins qu’avant", "Sans aucune limite"], 'a' => 2, 'e' => "Une plus grande part des dépôts doit rester immobilisée, donc la part prêtable diminue : c’est un resserrement."],
                    ['q' => "Quelle mesure relève de la politique budgétaire et non de la politique monétaire ?", 'c' => ["Modifier le taux directeur", "Hausser les dépenses publiques", "Acheter des titres sur le marché", "Changer le taux de réserves obligatoires"], 'a' => 1, 'e' => "Dépenses et impôts sont décidés par le gouvernement. Taux, titres et réserves sont les outils de la banque centrale."],
                    ['q' => "Pourquoi souhaite-t-on une banque centrale indépendante du gouvernement ?", 'c' => ["Pour éviter les pressions à financer l’État par la planche à billets", "Pour qu’elle décide du budget à la place du gouvernement", "Pour qu’elle ne rende de comptes à personne", "Pour qu’elle protège les banques privées avant tout"], 'a' => 0, 'e' => "Un gouvernement tenté de dépenser plus pourrait exiger de la monnaie facile, au prix de l’inflation. L’indépendance protège l’objectif de stabilité."],
                    ['q' => "Pourquoi les effets d’une baisse de taux ne se voient-ils pas tout de suite ?", 'c' => ["Les billets doivent d’abord être imprimés", "Les banques n’appliquent jamais les décisions", "Les taux ne concernent que l’État", "Ménages et entreprises mettent du temps à emprunter et dépenser"], 'a' => 3, 'e' => "La transmission passe par des projets, des signatures de prêts, des commandes : cela prend plusieurs trimestres. D’où l’importance d’anticiper."],
                ],
            ],
            [
                'title' => "Offre de monnaie et demande de monnaie",
                'description' => "Les agrégats monétaires, les motifs de détention de monnaie et l’équation quantitative.",
                'questions' => [
                    ['q' => "Que comprend l’agrégat monétaire M1 ?", 'c' => ["Seulement les billets en circulation", "Les dépôts à terme et les obligations", "Les pièces, les billets et les dépôts à vue", "Les réserves de change de la banque centrale"], 'a' => 2, 'e' => "M1 regroupe la monnaie immédiatement utilisable pour payer. Les placements moins liquides apparaissent dans les agrégats plus larges."],
                    ['q' => "Quel actif est compté dans M2 mais pas dans M1 ?", 'c' => ["Un billet de 50 DH", "Un dépôt à vue à la banque", "Une pièce de 10 DH", "Un livret d’épargne"], 'a' => 3, 'e' => "Les agrégats sont emboîtés du plus liquide au moins liquide. Un livret se transforme facilement en monnaie, mais n’est pas un moyen de paiement direct."],
                    ['q' => "Salma garde 2 000 DH disponibles au cas où sa voiture tomberait en panne. Quel motif de détention de monnaie illustre-t-elle ?", 'c' => ["La précaution", "La transaction", "La spéculation", "L’intermédiation"], 'a' => 0, 'e' => "On garde de l’argent pour les imprévus, sans projet précis. La transaction concerne les achats prévus, la spéculation les paris sur les prix des titres."],
                    ['q' => "Un investisseur garde de la monnaie car il redoute que les taux montent et que les prix des obligations s’effondrent. C’est :", 'c' => ["Un motif de transaction", "Un motif de spéculation", "Une création monétaire", "Un effet de multiplicateur"], 'a' => 1, 'e' => "Selon Keynes, on peut préférer l’argent liquide à des titres quand on s’attend à une baisse de leur prix : c’est le motif de spéculation."],
                    ['q' => "Un taux d’intérêt plus élevé rend la détention de monnaie plus coûteuse. La demande de monnaie tend alors à :", 'c' => ["Augmenter", "Doubler", "Ne dépendre que du taux de change", "Baisser"], 'a' => 3, 'e' => "Garder des billets, c’est renoncer aux intérêts d’un placement. Plus ce manque à gagner grandit, moins on veut garder de monnaie."],
                    ['q' => "Détenir 10 000 DH en espèces plutôt que dans un placement à 3 % par an coûte, en intérêts perdus :", 'c' => ["30 DH par an", "300 DH par an", "3 000 DH par an", "10 300 DH par an"], 'a' => 1, 'e' => "3 % de 10 000 donnent 300 DH : c’est le coût d’opportunité de la liquidité."],
                    ['q' => "Avec M = 200, V = 5 et Y = 500, l’équation quantitative MV = PY donne un niveau de prix P égal à :", 'c' => ["0,5", "5", "2", "10"], 'a' => 2, 'e' => "MV = 200 × 5 = 1 000. Il reste P × 500 = 1 000, donc P = 2. À V et Y constants, plus M monte, plus P monte."],
                    ['q' => "Que mesure la vitesse de circulation de la monnaie ?", 'c' => ["Le nombre moyen d’usages d’une unité de monnaie sur une période", "Le temps que met un virement à arriver", "Le rythme de fabrication des billets", "La durée moyenne des crédits accordés"], 'a' => 0, 'e' => "Si chaque dirham sert trois fois dans l’année pour payer, V = 3. Plus V est grande, plus la même masse de monnaie soutient d’achats."],
                    ['q' => "La masse monétaire est créée par :", 'c' => ["Le Trésor public seul", "Les ménages grâce à leur épargne", "La banque centrale et les banques", "Les entreprises exportatrices"], 'a' => 2, 'e' => "La banque centrale émet la monnaie centrale ; les banques commerciales créent des dépôts en prêtant. L’épargne, elle, ne fait que déplacer de la monnaie existante."],
                    ['q' => "Si l’offre de monnaie dépasse nettement la demande de monnaie, on s’attend à :", 'c' => ["Une hausse automatique des taux d’intérêt", "Une baisse des taux d’intérêt", "Un taux d’intérêt figé par la loi", "La disparition de l’inflation"], 'a' => 1, 'e' => "Quand il y a abondance de monnaie par rapport aux besoins, l’argent devient moins rare, donc moins cher à emprunter."],
                ],
            ],
            [
                'title' => "Création monétaire, multiplicateur et réserves",
                'description' => "Base monétaire, multiplicateur, fuites et réserves excédentaires, avec des calculs simples.",
                'questions' => [
                    ['q' => "La base monétaire est constituée :", 'c' => ["Des billets en circulation et des avoirs des banques à la banque centrale", "Des dépôts des ménages et des crédits", "Des actions et des obligations", "Des bons du Trésor et des devises"], 'a' => 0, 'e' => "C’est la monnaie émise par la banque centrale elle-même. Sur cette base, les banques commerciales construisent la masse monétaire."],
                    ['q' => "Avec un taux de réserves de 25 %, le multiplicateur simple vaut :", 'c' => ["25", "0,25", "1,25", "4"], 'a' => 3, 'e' => "1 ÷ 0,25 = 4. Chaque dirham de réserve peut soutenir jusqu’à 4 dirhams de dépôts."],
                    ['q' => "Dépôt initial de 500 DH, taux de réserves de 20 %, aucune fuite. Le total final des dépôts atteint :", 'c' => ["100 DH", "2 500 DH", "2 000 DH", "25 000 DH"], 'a' => 1, 'e' => "500 ÷ 0,20 = 2 500. Les 2 000 DH de différence sont les crédits créés, pas le total des dépôts."],
                    ['q' => "Qu’est-ce qui réduit le multiplicateur réel par rapport à la formule simple ?", 'c' => ["Les banques prêtent tout ce qu’elles peuvent", "Le taux de réserves est plus faible", "Les ménages gardent des espèces", "La demande de crédit est très forte"], 'a' => 2, 'e' => "Les billets conservés hors du système bancaire ne reviennent pas en dépôts : la chaîne de prêts s’interrompt plus tôt. C’est une fuite."],
                    ['q' => "En période d’incertitude, les banques gardent beaucoup de réserves excédentaires. Conséquence sur le multiplicateur :", 'c' => ["Il augmente", "Il diminue", "Il devient infini", "Il n’est pas concerné"], 'a' => 1, 'e' => "Des réserves qui dorment ne sont pas prêtées, donc ne génèrent pas de nouveaux dépôts. La monnaie se multiplie moins."],
                    ['q' => "La banque centrale accorde un prêt de 1 milliard de DH à une banque commerciale. La base monétaire :", 'c' => ["Augmente", "Diminue d’un milliard", "Reste inchangée", "Est détruite"], 'a' => 0, 'e' => "La banque commerciale reçoit une somme nouvelle en réserves à la banque centrale : de la monnaie centrale est créée."],
                    ['q' => "Un client rembourse un crédit de 10 000 DH par prélèvement sur son compte. Effet sur la masse monétaire :", 'c' => ["Elle augmente de 10 000 DH", "Elle ne change pas", "Elle double", "Elle baisse de 10 000 DH"], 'a' => 3, 'e' => "Le dépôt qui avait été créé avec le prêt est effacé en même temps que la dette. Rembourser détruit de la monnaie."],
                    ['q' => "Un État finance son déficit en demandant à sa banque centrale de créer de la monnaie. Le risque principal est :", 'c' => ["Une déflation durable", "Une hausse du multiplicateur", "Une poussée d’inflation", "Un excédent commercial immédiat"], 'a' => 2, 'e' => "Plus de monnaie sans plus de biens à acheter fait grimper les prix. L’hyperinflation naît souvent de ce mécanisme."],
                    ['q' => "Une banque a 40 millions de DH de dépôts et doit garder 8 % de réserves. Combien peut-elle prêter au maximum ?", 'c' => ["36,8 millions de DH", "3,2 millions de DH", "40 millions de DH", "43,2 millions de DH au total"], 'a' => 0, 'e' => "8 % de 40 = 3,2 millions à garder ; il reste 40 − 3,2 = 36,8 millions. Les 3,2 millions sont les réserves, pas le crédit."],
                    ['q' => "Le taux de réserves passe de 10 % à 5 %. Le multiplicateur simple :", 'c' => ["Est divisé par deux", "Reste égal à 10", "Passe à 15", "Double"], 'a' => 3, 'e' => "On passe de 1 ÷ 0,10 = 10 à 1 ÷ 0,05 = 20. Diviser le taux par deux multiplie le multiplicateur par deux."],
                ],
            ],
            [
                'title' => "Banque centrale et stabilité financière",
                'description' => "Prêteur en dernier ressort, liquidité, solvabilité et risque systémique.",
                'questions' => [
                    ['q' => "Une banque solide manque temporairement de liquidités. Qui peut lui prêter en dernier recours ?", 'c' => ["L’administration fiscale", "La banque centrale", "L’Office des changes", "Les compagnies d’assurance"], 'a' => 1, 'e' => "C’est le rôle de prêteur en dernier ressort : elle évite qu’un simple manque de cash ne devienne une faillite."],
                    ['q' => "Des rumeurs poussent tous les clients d’une banque à retirer leurs dépôts le même jour. Ce phénomène s’appelle :", 'c' => ["Une dévaluation", "Une désinflation", "Une panique bancaire", "Une titrisation de créances"], 'a' => 2, 'e' => "Comme la banque n’a jamais tout en caisse, une ruée sur les guichets peut la faire tomber, même si elle était saine au départ."],
                    ['q' => "Pourquoi la banque centrale supervise-t-elle les banques commerciales ?", 'c' => ["Pour protéger les déposants et éviter des faillites en chaîne", "Pour fixer elle-même leurs salaires", "Pour récupérer leurs bénéfices", "Pour les empêcher de prêter"], 'a' => 0, 'e' => "Un contrôle des fonds propres et des risques évite qu’une banque ne prenne trop de risques avec l’argent des déposants."],
                    ['q' => "À quoi servent avant tout les fonds propres d’une banque ?", 'c' => ["À régler les retraits courants aux guichets", "À fixer le taux directeur", "À rembourser l’État", "À absorber les pertes sans mettre en danger les déposants"], 'a' => 3, 'e' => "En cas de créances impayées, ce sont d’abord les actionnaires qui encaissent. Les retraits, eux, relèvent de la liquidité."],
                    ['q' => "Une banque a plus d’actifs que de dettes, mais ne peut pas payer les retraits du jour faute de cash. Elle souffre d’un problème de :", 'c' => ["Solvabilité", "Productivité", "Liquidité", "Change"], 'a' => 2, 'e' => "Solvable veut dire que l’actif dépasse les dettes ; liquide veut dire qu’on a du cash tout de suite. Ici seule la seconde manque."],
                    ['q' => "La faillite d’une grande banque entraîne celle de plusieurs autres qui lui avaient prêté. On parle de :", 'c' => ["Risque systémique", "Risque de change", "Risque d’inflation importée", "Risque souverain"], 'a' => 0, 'e' => "Les banques sont reliées par leurs dettes : la chute de l’une propage les pertes. C’est le risque que le système entier s’écroule."],
                    ['q' => "Les prix immobiliers montent très vite grâce au crédit facile, puis s’effondrent. On parle d’une :", 'c' => ["Dévaluation", "Bulle spéculative", "Stagflation durable", "Désintermédiation bancaire"], 'a' => 1, 'e' => "On achète parce que les prix montent, pas parce que le bien vaut ce prix. Quand la confiance disparaît, la bulle éclate."],
                    ['q' => "Pour limiter l’endettement excessif des ménages, une autorité monétaire peut :", 'c' => ["Réduire l’impôt sur le revenu", "Supprimer les réserves obligatoires", "Augmenter les prix du logement neuf", "Exiger un apport personnel minimum pour les prêts immobiliers"], 'a' => 3, 'e' => "Exiger un apport oblige l’emprunteur à financer une partie du bien lui-même : c’est une mesure macroprudentielle."],
                    ['q' => "Un facteur déclencheur de la crise financière de 2008 fut :", 'c' => ["Une pénurie mondiale de pétrole", "Des crédits immobiliers très risqués aux États-Unis", "Un effondrement des exportations chinoises", "Une dévaluation du franc"], 'a' => 1, 'e' => "Des prêts accordés à des ménages peu solvables ont été revendus sous forme de titres : quand ils ont cessé d’être payés, les pertes se sont propagées aux banques du monde entier."],
                    ['q' => "Pourquoi une banque centrale peut-elle hésiter à relever fortement ses taux ?", 'c' => ["Cela fait baisser l’épargne des ménages", "Cela annule l’effet sur l’inflation", "Cela fragilise les emprunteurs", "Cela réduit le nombre de billets en circulation"], 'a' => 2, 'e' => "Des taux brutalement plus hauts alourdissent les mensualités et peuvent provoquer des impayés. Lutter contre l’inflation ne doit pas déstabiliser le système financier."],
                ],
            ],
            [
                'title' => "Monnaie, production et activité économique",
                'description' => "Effets de la monnaie sur les prix et l’activité, à court et à long terme.",
                'questions' => [
                    ['q' => "Selon l’idée de neutralité de la monnaie à long terme, doubler la masse monétaire conduit à :", 'c' => ["Doubler la production réelle du pays", "Doubler le nombre d’emplois", "Doubler la productivité du travail", "Doubler les prix, production inchangée"], 'a' => 3, 'e' => "Sur la durée, ce sont les ressources et la technologie qui déterminent la production. Plus de monnaie ne fait que gonfler les prix."],
                    ['q' => "À court terme, une baisse des taux d’intérêt peut stimuler :", 'c' => ["L’investissement et la consommation", "La dette publique uniquement", "L’épargne des ménages comme des entreprises", "Le taux de chômage structurel"], 'a' => 0, 'e' => "Emprunter coûte moins cher, donc on achète une voiture ou on lance un projet plus facilement. L’activité s’en trouve soutenue."],
                    ['q' => "Pourquoi le crédit soutient-il l’activité ?", 'c' => ["Il augmente les ressources naturelles du pays", "Il fait baisser le prix de tous les biens", "Il permet de dépenser ou d’investir avant d’avoir encaissé", "Il remplace le travail des salariés"], 'a' => 2, 'e' => "Une entreprise qui achète une machine à crédit produit plus tard de quoi rembourser. Le prêt avance la dépense."],
                    ['q' => "Selon la courbe de Phillips à court terme, quand le chômage baisse fortement, l’inflation tend à :", 'c' => ["Diminuer", "Augmenter", "Devenir négative", "Disparaître"], 'a' => 1, 'e' => "Quand presque tout le monde travaille, les entreprises doivent proposer de meilleurs salaires, ce qui pousse les prix vers le haut."],
                    ['q' => "Le PIB nominal augmente de 8 % pendant que les prix montent de 5 %. La croissance réelle est d’environ :", 'c' => ["3 %", "13 %", "8 %", "5 %"], 'a' => 0, 'e' => "On retire la hausse des prix : 8 − 5 = 3. Une partie de la progression n’était que de l’inflation."],
                    ['q' => "Pourquoi une déflation durable est-elle redoutée ?", 'c' => ["Elle encourage les ménages à s’endetter davantage", "Elle réduit la valeur réelle des dettes", "Les ménages repoussent leurs achats et l’activité ralentit", "Elle fait monter les profits des entreprises"], 'a' => 2, 'e' => "Si l’on pense que tout sera moins cher demain, on attend. Les ventes baissent, les entreprises produisent moins, et les dettes pèsent plus lourd."],
                    ['q' => "Chômage élevé, croissance quasi nulle et prix qui montent vite : on parle de :", 'c' => ["Déflation", "Désinflation", "Surchauffe", "Stagflation"], 'a' => 3, 'e' => "Mot-valise : stagnation + inflation. C’est un cas gênant, car les remèdes habituels contre l’un aggravent l’autre."],
                    ['q' => "Quel signe annonce une économie en surchauffe ?", 'c' => ["Des usines qui tournent à moitié vide", "Des tensions sur les salaires", "Un chômage de masse en hausse", "Une baisse générale des prix"], 'a' => 1, 'e' => "La demande dépasse les capacités de production : il manque des bras et des biens, et tout renchérit."],
                    ['q' => "L’assouplissement quantitatif consiste à :", 'c' => ["Supprimer les réserves obligatoires des banques", "Vendre des devises pour soutenir la monnaie", "Acheter massivement des titres", "Plafonner le montant des crédits"], 'a' => 2, 'e' => "Quand le taux directeur est déjà près de zéro, la banque centrale agit autrement : elle achète des titres en grande quantité pour détendre les conditions de financement."],
                    ['q' => "Quand les prix doublent chaque mois, les habitants cherchent plutôt à :", 'c' => ["Dépenser vite leur argent", "Épargner en monnaie locale", "Prêter à taux fixe pour plusieurs années", "Garder leurs billets sous le matelas"], 'a' => 0, 'e' => "La monnaie perd tellement vite sa valeur qu’elle devient une patate chaude. On s’en débarrasse contre des biens ou des devises plus stables."],
                ],
            ],
            [
                'title' => "Système monétaire et échanges internationaux",
                'description' => "Taux de change, régimes de change, réserves et conséquences pour les échanges.",
                'questions' => [
                    ['q' => "Le taux de change est :", 'c' => ["Le prix d’un crédit exprimé en pourcentage", "Le prix moyen des importations", "Le prix d’une monnaie exprimé dans une autre monnaie", "Le rapport entre exportations et PIB"], 'a' => 2, 'e' => "Il dit combien de dirhams il faut pour obtenir un euro, par exemple. À ne pas confondre avec le taux d’intérêt."],
                    ['q' => "Un touriste change 200 euros alors que 1 euro vaut 11 DH. Il reçoit :", 'c' => ["18 DH", "2 200 DH", "211 DH", "20 000 DH"], 'a' => 1, 'e' => "200 × 11 = 2 200. Diviser 200 par 11 donnerait environ 18, ce qui serait un calcul dans le mauvais sens."],
                    ['q' => "Le dirham passe de 1 euro = 10,5 DH à 1 euro = 11 DH. Le dirham s’est :", 'c' => ["Apprécié", "Réévalué", "Stabilisé", "Déprécié"], 'a' => 3, 'e' => "Il faut davantage de dirhams pour obtenir un euro : le dirham vaut moins. La réévaluation, elle, est une décision officielle de hausse."],
                    ['q' => "Quand une monnaie se déprécie, les exportations deviennent en général :", 'c' => ["Plus compétitives", "Plus coûteuses pour les acheteurs étrangers", "Moins rentables par principe", "Interdites par les règles du commerce"], 'a' => 0, 'e' => "Un exportateur marocain vend en euros : un dirham plus faible rend ses produits moins chers pour un client européen."],
                    ['q' => "Le dirham se déprécie. Quel effet probable sur l’inflation au Maroc ?", 'c' => ["Elle baisse automatiquement", "Elle devient nulle", "Aucun effet n’est possible", "Elle tend à augmenter"], 'a' => 3, 'e' => "Importer coûte plus de dirhams : énergie, blé ou machines renchérissent, et cela se répercute sur les prix intérieurs."],
                    ['q' => "Quelle phrase décrit un régime de change flottant ?", 'c' => ["La banque centrale garantit un taux inchangé", "Le taux se forme sur le marché selon l’offre et la demande de devises", "L’État interdit l’échange de devises", "Le taux est fixé une fois pour toutes par la loi"], 'a' => 1, 'e' => "Sans engagement de la banque centrale sur un niveau, c’est la confrontation des acheteurs et des vendeurs de devises qui fait le cours."],
                    ['q' => "Au Maroc, le dirham est référencé à un panier de devises et peut fluctuer dans une bande. Ce régime est :", 'c' => ["Intermédiaire", "Un flottement libre complet", "Une dollarisation", "Une union monétaire"], 'a' => 0, 'e' => "Le taux n’est ni figé ni totalement libre : il peut bouger dans une marge autour d’un cours de référence."],
                    ['q' => "À quoi servent les réserves de change d’une banque centrale ?", 'c' => ["À financer le salaire des fonctionnaires", "À rembourser les crédits des ménages", "À payer les importations et à défendre la monnaie en cas de pression", "À imprimer les billets locaux"], 'a' => 2, 'e' => "Un stock de devises rassure sur la capacité du pays à régler ses achats à l’étranger et permet d’intervenir pour calmer le marché."],
                    ['q' => "Sous change flottant, un pays importe beaucoup plus qu’il n’exporte. La pression sur sa monnaie est plutôt :", 'c' => ["À la hausse", "Nulle, car l’État couvre l’écart", "À la hausse, mais seulement pour les importateurs", "À la baisse"], 'a' => 3, 'e' => "Payer les importations exige des devises : la demande de devises dépasse leur offre, ce qui fait baisser la valeur de la monnaie nationale."],
                    ['q' => "Sous l’étalon-or, quelle contrainte pesait sur l’émission de billets ?", 'c' => ["Les stocks d’or détenus", "Le niveau du chômage dans le pays", "Le nombre de banques commerciales", "Le cours du dollar uniquement"], 'a' => 0, 'e' => "Les billets étaient échangeables contre une quantité fixe d’or : la banque centrale ne pouvait donc pas en émettre davantage que ce que son stock d’or permettait."],
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
