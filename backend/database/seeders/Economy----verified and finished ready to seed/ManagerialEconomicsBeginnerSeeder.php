<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class ManagerialEconomicsBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'managerial-economics')->firstOrFail();

        $settings = [
            ['duration' => 20, 'passing_score' => 50],
            ['duration' => 20, 'passing_score' => 55],
            ['duration' => 20, 'passing_score' => 60],
            ['duration' => 20, 'passing_score' => 60],
            ['duration' => 20, 'passing_score' => 60],
            ['duration' => 20, 'passing_score' => 65],
            ['duration' => 20, 'passing_score' => 65],
        ];

        // 'a' = index (0-based) de la bonne réponse dans 'c'
        $quizzes = [
            [
                'title' => "Fondamentaux de la décision managériale",
                'description' => "Révisez les notions de base qu’un responsable d’entreprise mobilise pour arbitrer entre plusieurs choix avec des ressources limitées.",
                'questions' => [
                    ['q' => "Une entreprise choisit de moderniser sa machine plutôt que de financer une campagne publicitaire. Que représente son coût d’opportunité ?", 'c' => ["Le prix d’achat de la nouvelle machine", "Ce que la campagne publicitaire aurait rapporté", "Les frais d’entretien de la machine chaque année", "Le bénéfice comptable réalisé l’an dernier"], 'a' => 1, 'e' => "Le coût d’opportunité, c’est la valeur de la meilleure option sacrifiée : ici, le gain qu’aurait procuré la publicité. Le prix de la machine est une dépense, pas un renoncement."],
                    ['q' => "Une boulangerie cuit déjà 100 baguettes par jour et se demande si elle doit en cuire une 101e. Que compare le gérant ?", 'c' => ["Le prix moyen des 100 premières baguettes et le loyer", "La recette de la veille et le coût total de la journée", "Le salaire du boulanger et le prix de la farine l’an passé", "Le coût et la recette de cette baguette en plus"], 'a' => 3, 'e' => "Raisonner à la marge, c’est ne regarder que ce qui change avec une unité de plus. Tout le reste (loyer, salaire passé) est déjà décidé."],
                    ['q' => "Une boutique vend 100 articles à 20 DH l’un. Quel est son chiffre d’affaires ?", 'c' => ["2 000 DH", "120 DH", "200 DH", "20 000 DH"], 'a' => 0, 'e' => "Chiffre d’affaires = prix × quantité = 20 × 100 = 2 000 DH. Additionner 100 et 20 donnerait 120 : erreur classique."],
                    ['q' => "Un restaurateur a versé 5 000 DH non remboursables pour son enseigne. Il hésite à poursuivre l’activité : comment traiter ces 5 000 DH ?", 'c' => ["Comme un coût marginal à ajouter à chaque repas servi", "Comme un gain à retirer des recettes futures", "Comme un coût irrécupérable à ignorer", "Comme le coût d’opportunité de la prochaine commande"], 'a' => 2, 'e' => "Une dépense déjà faite et non récupérable ne change pas selon la décision : elle est ignorée. Seuls comptent les coûts et recettes à venir."],
                    ['q' => "Une usine garde ses 20 salariés, réorganise le travail et produit davantage. Que peut-on conclure ?", 'c' => ["Le capital est devenu inutile", "La demande du marché a reculé", "La productivité du travail a augmenté", "Le coût fixe est tombé à zéro"], 'a' => 2, 'e' => "Plus de production avec le même travail signifie une meilleure production par salarié, donc une productivité en hausse. Rien n’indique ici un changement de la demande."],
                    ['q' => "Laquelle de ces situations illustre le mieux la rareté pour une entreprise ?", 'c' => ["Trois projets de 80 000 DH pour 100 000 DH de budget", "Un stock invendu qui occupe un entrepôt depuis plusieurs mois", "Une facture de fournisseur réglée avec trois jours de retard", "Un client mécontent qui demande le remboursement d’un achat"], 'a' => 0, 'e' => "Les besoins (240 000 DH) dépassent les moyens (100 000 DH) : il faut choisir. Les trois autres sont des incidents de gestion, pas un manque de ressources."],
                    ['q' => "Quel élément n’est PAS un facteur de production ?", 'c' => ["Le travail des salariés", "Le capital : machines et locaux", "Les matières et ressources naturelles", "Le chiffre d’affaires réalisé"], 'a' => 3, 'e' => "Les facteurs sont les moyens que l’on combine pour produire. Le chiffre d’affaires est un résultat de la vente, pas un moyen de produire."],
                    ['q' => "Le bénéfice qu’apporterait une unité supplémentaire dépasse son coût marginal. Quelle décision est cohérente ?", 'c' => ["Réduire la production d’une unité", "Produire cette unité supplémentaire", "Maintenir la production actuelle sans y toucher", "Fermer l’atelier à court terme"], 'a' => 1, 'e' => "Si l’unité en plus rapporte plus qu’elle ne coûte, elle augmente le profit. On continue tant que cet écart reste positif."],
                    ['q' => "Un chef d’équipe dispose de six techniciens pour deux chantiers. Quelle décision relève de l’allocation des ressources ?", 'c' => ["Répartir les techniciens entre les deux chantiers", "Négocier un prix de vente plus élevé avec le client", "Déclarer les salaires du mois à la CNSS", "Enregistrer une facture fournisseur en comptabilité"], 'a' => 0, 'e' => "Allouer, c’est répartir des moyens limités entre des usages concurrents. Les autres tâches sont commerciales ou administratives."],
                    ['q' => "Un artisan peut fabriquer 10 tapis ou 20 coussins par semaine. Quel est le coût d’opportunité d’un tapis, exprimé en coussins ?", 'c' => ["0,5 coussin", "10 coussins", "2 coussins", "20 coussins"], 'a' => 2, 'e' => "Pour obtenir 10 tapis, on renonce à 20 coussins : 20 ÷ 10 = 2 coussins par tapis. Inverser le rapport donnerait 0,5, ce qui est le prix d’un coussin en tapis."],
                    ['q' => "Un gérant dit : « Ce projet rapporte 50 000 DH, donc je le choisis. » Quelle erreur de raisonnement commet-il ?", 'c' => ["Il confond le coût marginal et la recette totale", "Il ne compare pas ce gain à la meilleure autre option", "Il oublie de vérifier la date de création de l’entreprise", "Il ignore que le chiffre d’affaires n’est jamais calculable"], 'a' => 1, 'e' => "Un gain n’est intéressant que comparé à ce qu’on abandonne. Si une autre option rapporte 70 000 DH, le projet coûte en réalité 20 000 DH de manque à gagner."],
                    ['q' => "Une coopérative d’huile d’argan gagne 8 DH de recette en plus avec une bouteille supplémentaire, pour 5 DH de coût en plus. Que devient son profit ?", 'c' => ["Il baisse de 3 DH", "Il augmente de 13 DH", "Il reste inchangé", "Il augmente de 3 DH"], 'a' => 3, 'e' => "Recette marginale − coût marginal = 8 − 5 = +3 DH. On ajoute les deux chiffres seulement si on confond gain et coût."],
                ],
            ],
            [
                'title' => "Demande, prix et recettes",
                'description' => "Travaillez la loi de la demande, l’élasticité et le calcul des recettes d’une entreprise.",
                'questions' => [
                    ['q' => "Le prix d’un jus passe de 10 à 12 DH, les autres conditions restant identiques. Que fait la quantité demandée ?", 'c' => ["Elle augmente", "Elle reste identique", "Elle diminue", "Elle devient nulle"], 'a' => 2, 'e' => "C’est la loi de la demande : à conditions égales, un prix plus haut décourage une partie des acheteurs. Elle diminue, sans forcément disparaître."],
                    ['q' => "Les revenus des ménages progressent et ils achètent plus de viande au même prix. Que se passe-t-il pour la demande de viande ?", 'c' => ["La courbe de demande se déplace vers la droite", "On descend le long de la même courbe de demande", "La courbe de demande se déplace vers la gauche", "La courbe d’offre glisse vers le bas"], 'a' => 0, 'e' => "Le prix n’a pas bougé : c’est un autre facteur, le revenu, qui change. Toute la courbe se décale, ici vers la droite."],
                    ['q' => "Un traiteur vend 240 plateaux à 15 DH. Quelle est sa recette totale ?", 'c' => ["255 DH", "3 000 DH", "36 000 DH", "3 600 DH"], 'a' => 3, 'e' => "15 × 240 = 3 600 DH. Vérifiez l’ordre de grandeur : 15 × 200 = 3 000, un peu moins que le résultat."],
                    ['q' => "Le prix passe de 10 à 12 DH (+20 %) et la quantité vendue de 100 à 90 (−10 %). Quelle est l’élasticité-prix, en valeur absolue ?", 'c' => ["2", "0,5", "12", "10"], 'a' => 1, 'e' => "On divise la variation de quantité par celle du prix : 10 ÷ 20 = 0,5. Inférieure à 1, la demande est peu sensible au prix."],
                    ['q' => "Une pharmacie augmente de 10 % le prix d’un médicament sans substitut proche. Sa demande est peu élastique. Que devient sa recette sur ce produit ?", 'c' => ["Elle chute de plus de 10 %", "Elle diminue légèrement", "Elle reste inchangée", "Elle augmente"], 'a' => 3, 'e' => "Les clients achètent à peine moins : la baisse de quantité est inférieure à 10 %, donc le gain sur le prix l’emporte."],
                    ['q' => "Qu’est-ce qui rend plutôt la demande d’un bien élastique ?", 'c' => ["L’absence de produit proche pour le remplacer", "L’existence de nombreux substituts proches", "Son caractère de première nécessité", "Une part minime dans le budget du ménage"], 'a' => 1, 'e' => "Quand on peut facilement passer à un autre produit, une hausse de prix fait fuir les clients. Nécessité, absence de substitut ou dépense minime rendent au contraire la demande rigide."],
                    ['q' => "Un artisan vend 10 sacs à 50 DH (500 DH), puis 11 sacs à 48 DH (528 DH) en baissant son prix. Quelle est la recette marginale du 11e sac ?", 'c' => ["28 DH", "48 DH", "528 DH", "2 DH"], 'a' => 0, 'e' => "La recette marginale est la variation de recette : 528 − 500 = 28 DH. Elle est inférieure au prix de 48 DH, car la baisse s’applique aussi aux 10 premiers sacs."],
                    ['q' => "Le prix du thé monte nettement au Maroc. Que peut-on attendre pour la demande de café, un bien substitut ?", 'c' => ["Elle baisse, car on boit moins en général", "Elle reste stable, les deux biens étant indépendants", "Elle augmente : certains passent au café", "Elle se déplace à gauche, car le café devient moins cher"], 'a' => 2, 'e' => "Quand un bien devient plus cher, une partie de la clientèle se reporte sur son substitut : la demande de café se déplace vers la droite."],
                    ['q' => "À 10 DH le kilo, les clients demandent 500 kg d’oranges alors que les producteurs en proposent 700 kg. Que va-t-il probablement se passer ?", 'c' => ["Les clients vont manquer d’oranges", "Le prix va monter faute d’offre suffisante", "Le prix baisse pour écouler le surplus", "Le marché est déjà à l’équilibre"], 'a' => 2, 'e' => "Il y a 200 kg invendus : les vendeurs baissent leur prix pour les écouler, ce qui rapproche offre et demande."],
                    ['q' => "La demande d’un produit est Q = 100 − 2P (P en DH). Quelle recette totale obtient-on au prix de 20 DH ?", 'c' => ["1 200 DH", "1 000 DH", "600 DH", "2 000 DH"], 'a' => 0, 'e' => "À 20 DH, Q = 100 − 40 = 60 unités ; recette = 20 × 60 = 1 200 DH. Les autres résultats viennent d’une quantité mal calculée."],
                    ['q' => "Un commerçant affirme : « Si je baisse mon prix, ma recette augmente. » Que lui répondre ?", 'c' => ["C’est vrai, car on vend plus d’unités", "C’est faux si la demande est peu sensible au prix", "C’est vrai si son coût de production diminue aussi", "C’est faux, la recette ne dépend pas du prix"], 'a' => 1, 'e' => "Tout dépend de l’élasticité : si la demande est rigide, la quantité vendue augmente trop peu pour compenser la baisse du prix, et la recette diminue."],
                    ['q' => "Lequel de ces événements déplace la courbe de demande de smartphones, au lieu de nous faire glisser le long de celle-ci ?", 'c' => ["Une baisse du prix des smartphones", "Une hausse du prix des smartphones", "Une baisse des coûts des fabricants", "Une hausse du revenu des ménages"], 'a' => 3, 'e' => "Un changement du prix du bien lui-même est un mouvement le long de la courbe. Le revenu est un facteur extérieur : il décale toute la courbe."],
                ],
            ],
            [
                'title' => "Coûts et décisions de production",
                'description' => "Distinguez coûts fixes, variables, moyens et marginaux pour décider combien produire.",
                'questions' => [
                    ['q' => "Un salon de coiffure paie 4 000 DH de loyer par mois, qu’il reçoive 50 ou 500 clients. Ce loyer est un coût…", 'c' => ["fixe", "variable", "marginal", "unitaire"], 'a' => 0, 'e' => "Un coût fixe ne dépend pas du volume d’activité à court terme. Le loyer reste le même quel que soit le nombre de clients."],
                    ['q' => "Parmi ces dépenses d’un atelier de menuiserie, laquelle est un coût variable ?", 'c' => ["L’assurance annuelle du local", "L’amortissement de la scie à ruban", "Le bois acheté pour chaque meuble fabriqué", "Le salaire mensuel du comptable"], 'a' => 2, 'e' => "Un coût variable augmente avec la production : plus de meubles, plus de bois. Les autres dépenses sont payées quel que soit le nombre de meubles."],
                    ['q' => "Un atelier a 3 000 DH de coûts fixes et 8 DH de coût variable par unité. Quel est son coût total pour 500 unités ?", 'c' => ["4 000 DH", "7 000 DH", "11 000 DH", "3 008 DH"], 'a' => 1, 'e' => "CT = CF + CV = 3 000 + 8 × 500 = 7 000 DH. Pensez à multiplier le coût variable unitaire par la quantité avant d’additionner."],
                    ['q' => "Le coût total de 500 unités est de 7 000 DH. Quel est le coût moyen par unité ?", 'c' => ["35 DH", "7 DH", "0,07 DH", "14 DH"], 'a' => 3, 'e' => "Coût moyen = coût total ÷ quantité = 7 000 ÷ 500 = 14 DH."],
                    ['q' => "Produire 100 unités coûte 1 500 DH, et 101 unités coûtent 1 512 DH. Quel est le coût marginal de la 101e unité ?", 'c' => ["12 DH", "15 DH", "1 512 DH", "15,12 DH"], 'a' => 0, 'e' => "Le coût marginal est la hausse du coût total : 1 512 − 1 500 = 12 DH. Le coût moyen, lui, vaudrait environ 15 DH, c’est un autre concept."],
                    ['q' => "Pourquoi le coût fixe par unité baisse-t-il quand une usine produit davantage ?", 'c' => ["Parce que le total des coûts fixes diminue aussi", "Parce que les matières premières deviennent moins chères", "Parce que les salaires sont réduits à chaque unité", "Parce que le même montant se répartit sur plus d’unités"], 'a' => 3, 'e' => "Le total des coûts fixes ne bouge pas, mais on le divise par une quantité plus grande. 10 000 DH sur 100 unités font 100 DH, sur 1 000 unités seulement 10 DH."],
                    ['q' => "Une pizzeria est en perte, mais sa recette couvre ses coûts variables et une partie du loyer. Que suggère l’analyse à court terme ?", 'c' => ["Fermer tout de suite, puisque le résultat est négatif", "Baisser le prix sous le coût variable pour attirer du monde", "Continuer : la recette dépasse les coûts variables", "Augmenter les prix de moitié pour couvrir le loyer"], 'a' => 2, 'e' => "Le loyer est dû de toute façon. Tant que la recette couvre les coûts variables, le surplus réduit la perte ; en fermant, on perdrait tout le loyer."],
                    ['q' => "Fatima quitte un emploi à 6 000 DH par mois pour ouvrir son salon. Quel élément un économiste ajoute-t-il aux coûts comptables du salon ?", 'c' => ["Le prix des ciseaux déjà achetés", "Le salaire de 6 000 DH auquel elle renonce", "Le chiffre d’affaires mensuel du salon", "Les impôts payés l’année dernière"], 'a' => 1, 'e' => "Le salaire abandonné est un coût d’opportunité implicite : aucune facture n’existe, mais c’est bien un renoncement. Le profit économique le déduit."],
                    ['q' => "Dans un petit atelier, le coût marginal grimpe après 200 unités. Quelle explication est la plus plausible ?", 'c' => ["Le loyer augmente à chaque unité produite", "Machines et locaux limités, ils se saturent", "Le coût fixe total baisse quand on produit plus", "Les clients acceptent de payer moins cher"], 'a' => 1, 'e' => "Avec une capacité fixe, chaque ouvrier en plus gêne un peu les autres : on produit moins par heure supplémentaire, donc l’unité coûte davantage."],
                    ['q' => "Le coût marginal d’une unité (9 DH) est inférieur au coût moyen actuel (12 DH). Que va devenir le coût moyen ?", 'c' => ["Il va augmenter", "Il restera à 12 DH", "Il passera à 9 DH aussitôt", "Il va diminuer"], 'a' => 3, 'e' => "Ajouter une valeur inférieure à la moyenne la fait baisser, comme une note faible dans une moyenne scolaire. Elle ne tombe pas à 9 DH d’un coup."],
                    ['q' => "Quel élément n’est PAS un coût fixe pour une imprimerie à court terme ?", 'c' => ["L’encre de chaque tirage", "La location annuelle du local", "L’amortissement de la presse", "L’assurance annuelle de l’atelier"], 'a' => 0, 'e' => "L’encre se consomme avec chaque impression : elle varie avec la production. Les trois autres sont dus même à l’arrêt."],
                    ['q' => "Un traiteur a un coût total CT = 2 000 + 5Q (en DH). Quel est son coût moyen pour Q = 100 ?", 'c' => ["20 DH", "5 DH", "25 DH", "2 500 DH"], 'a' => 2, 'e' => "CT = 2 000 + 500 = 2 500 DH ; coût moyen = 2 500 ÷ 100 = 25 DH. Oublier le coût variable donnerait 20 DH."],
                ],
            ],
            [
                'title' => "Recettes, profit et seuil de rentabilité",
                'description' => "Reliez recettes, coûts et profit, puis calculez et interprétez un seuil de rentabilité.",
                'questions' => [
                    ['q' => "Un vendeur de jus a 12 000 DH de recettes et 9 500 DH de coûts totaux. Quel est son profit ?", 'c' => ["21 500 DH", "9 500 DH", "12 000 DH", "2 500 DH"], 'a' => 3, 'e' => "Profit = recette totale − coût total = 12 000 − 9 500 = 2 500 DH."],
                    ['q' => "Un produit se vend 30 DH et son coût variable est de 18 DH par unité. Quelle est la marge sur coût variable unitaire ?", 'c' => ["18 DH", "12 DH", "1,7 DH", "48 DH"], 'a' => 1, 'e' => "Chaque vente laisse 30 − 18 = 12 DH pour payer les coûts fixes, puis dégager du profit."],
                    ['q' => "Coûts fixes : 6 000 DH ; prix : 25 DH ; coût variable : 10 DH par unité. Quel est le seuil de rentabilité en unités ?", 'c' => ["240 unités", "600 unités", "400 unités", "2 400 unités"], 'a' => 2, 'e' => "Marge unitaire = 25 − 10 = 15 DH ; seuil = 6 000 ÷ 15 = 400 unités. Diviser par le prix seul donne 240, un seuil trop bas."],
                    ['q' => "Que vaut le profit au seuil de rentabilité ?", 'c' => ["Zéro, car la recette égale le coût total", "Positif mais inférieur aux coûts fixes", "Égal à l’opposé des coûts fixes", "Égal à la marge totale sur coûts variables"], 'a' => 0, 'e' => "Le seuil est le niveau d’activité où l’on ne gagne ni ne perd : recette totale et coût total sont égaux."],
                    ['q' => "Une entreprise a 12 000 DH de coûts fixes et un taux de marge sur coût variable de 40 %. À partir de quel chiffre d’affaires est-elle rentable ?", 'c' => ["120 000 DH", "12 000 DH", "30 000 DH", "48 000 DH"], 'a' => 2, 'e' => "Seuil en valeur = coûts fixes ÷ taux de marge = 12 000 ÷ 0,4 = 30 000 DH. Chaque dirham de vente ne laisse que 0,40 DH pour couvrir les coûts fixes."],
                    ['q' => "Le loyer d’un café passe de 5 000 à 6 000 DH par mois, le reste étant inchangé. Que devient son seuil de rentabilité ?", 'c' => ["Il augmente", "Il diminue", "Il reste le même", "Il devient nul"], 'a' => 0, 'e' => "Des coûts fixes plus lourds exigent plus de marge cumulée pour être couverts : il faut vendre davantage avant de gagner de l’argent."],
                    ['q' => "Prix 25 DH, coût variable 10 DH, coûts fixes 6 000 DH. L’entreprise baisse son prix à 20 DH. Quel est son nouveau seuil de rentabilité ?", 'c' => ["400 unités", "600 unités", "300 unités", "1 200 unités"], 'a' => 1, 'e' => "La marge unitaire tombe à 20 − 10 = 10 DH, donc seuil = 6 000 ÷ 10 = 600 unités. Baisser le prix repousse le seuil."],
                    ['q' => "Une entreprise vend 800 unités par mois, pour un seuil de rentabilité de 500 unités. Quelle est sa marge de sécurité en unités ?", 'c' => ["500 unités", "800 unités", "1 300 unités", "300 unités"], 'a' => 3, 'e' => "Marge de sécurité = ventes − seuil = 800 − 500 = 300 unités. C’est la baisse de ventes supportable avant de passer en perte."],
                    ['q' => "Coûts fixes : 6 000 DH ; marge unitaire : 15 DH. Quel profit pour 500 unités vendues ?", 'c' => ["1 500 DH", "7 500 DH", "13 500 DH", "500 DH"], 'a' => 0, 'e' => "La marge totale vaut 15 × 500 = 7 500 DH ; il reste 7 500 − 6 000 = 1 500 DH de profit après les coûts fixes."],
                    ['q' => "Un élève calcule le seuil de rentabilité en divisant les coûts fixes par le prix de vente. Où est l’erreur ?", 'c' => ["Il faut diviser par le coût fixe unitaire", "Il faut diviser par le coût marginal total", "Il faut diviser par prix − coût variable", "Il faut multiplier plutôt que diviser"], 'a' => 2, 'e' => "Chaque unité vendue ne contribue aux coûts fixes qu’à hauteur de sa marge, pas de son prix entier : le dénominateur est prix − coût variable."],
                    ['q' => "Un artisan dégage un profit comptable de 4 000 DH par mois, mais gagnerait 5 000 DH comme salarié. Quel est son profit économique ?", 'c' => ["Positif et égal à 4 000 DH", "Positif et égal à 1 000 DH", "Nul", "Négatif : −1 000 DH"], 'a' => 3, 'e' => "Le profit économique soustrait le coût d’opportunité : 4 000 − 5 000 = −1 000 DH. Rester indépendant lui fait perdre de l’argent par rapport à l’emploi."],
                    ['q' => "Selon la règle de décision, jusqu’à quel point une entreprise a-t-elle intérêt à augmenter sa production ?", 'c' => ["Jusqu’à ce que la recette totale atteigne son maximum", "Jusqu’à l’égalité recette marginale = coût marginal", "Jusqu’à ce que le coût moyen soit au plus haut", "Jusqu’à ce que les coûts fixes soient remboursés"], 'a' => 1, 'e' => "Tant qu’une unité rapporte plus qu’elle ne coûte, elle accroît le profit. Au point d’égalité, le profit est maximal."],
                ],
            ],
            [
                'title' => "Production et productivité",
                'description' => "Comprenez la fonction de production, les facteurs, la productivité et les rendements.",
                'questions' => [
                    ['q' => "Un atelier produit 600 pièces avec 20 ouvriers. Quelle est la productivité moyenne du travail ?", 'c' => ["12 pièces par ouvrier", "30 pièces par ouvrier", "12 000 pièces par ouvrier", "0,03 pièce par ouvrier"], 'a' => 1, 'e' => "Productivité = production ÷ travail = 600 ÷ 20 = 30 pièces par ouvrier."],
                    ['q' => "Dans une conserverie de sardines, quel élément relève du capital ?", 'c' => ["La machine à sertir", "Les ouvriers de la chaîne", "Le poisson acheté au port", "Le gérant de l’usine"], 'a' => 0, 'e' => "Le capital regroupe les équipements durables utilisés pour produire. Les ouvriers et le gérant relèvent du travail, le poisson est une matière première."],
                    ['q' => "Un atelier a 2 machines. La production est de 10 avec 1 ouvrier, 24 avec 2, 32 avec 3, 36 avec 4. À partir de quel ouvrier la production supplémentaire commence-t-elle à baisser ?", 'c' => ["Dès le 1er", "Dès le 2e", "Dès le 4e", "Dès le 3e"], 'a' => 3, 'e' => "Gains successifs : +10, +14, +8, +4. Le 2e ouvrier apporte le plus, et c’est à partir du 3e que l’apport recule : rendements décroissants."],
                    ['q' => "En économie, que désigne le court terme ?", 'c' => ["Une durée de moins de six mois", "Une période sans coût fixe", "Une période où au moins un facteur reste fixe", "Une période où les prix des intrants sont gelés"], 'a' => 2, 'e' => "La frontière n’est pas une durée de calendrier : au court terme, l’entreprise ne peut pas tout ajuster, par exemple la taille de son usine."],
                    ['q' => "Une usine passe de 400 à 480 unités avec les mêmes 20 salariés. De combien progresse la productivité du travail ?", 'c' => ["20 %", "80 %", "16,7 %", "120 %"], 'a' => 0, 'e' => "On passe de 20 à 24 unités par salarié : (24 − 20) ÷ 20 = 20 %. Les 80 unités gagnées sont une variation en valeur, pas un taux."],
                    ['q' => "Le salaire des ouvriers monte fortement tandis que le prix des robots reste stable. Que peut faire l’entreprise ?", 'c' => ["Remplacer des robots par des ouvriers", "Embaucher plus d’ouvriers pour compenser", "Remplacer du travail par des machines", "Maintenir sa combinaison de facteurs actuelle"], 'a' => 2, 'e' => "Quand un facteur devient relativement plus cher, on substitue l’autre : plus de machines, moins de travail."],
                    ['q' => "Une brasserie double toutes ses quantités de facteurs et sa production fait plus que doubler. De quoi s’agit-il ?", 'c' => ["De rendements d’échelle décroissants", "De rendements d’échelle constants", "D’un effet de substitution", "De rendements d’échelle croissants"], 'a' => 3, 'e' => "Tous les facteurs sont multipliés par 2 et la production par plus de 2 : l’entreprise gagne à grandir. À l’inverse, moins que 2 donnerait des rendements décroissants."],
                    ['q' => "Un boulanger hésite à acheter un four à 30 000 DH qui produit 50 baguettes de plus par heure. Quelle information est la plus utile ?", 'c' => ["Le prix d’achat du four, sans regarder les ventes", "Le gain en plus rapporté au coût du four", "Le nombre d’heures d’ouverture des concurrents", "Le loyer payé le mois dernier"], 'a' => 1, 'e' => "Un investissement se juge en comparant ce qu’il rapporte à ce qu’il coûte. Le prix seul ou le loyer passé n’informent pas sur la rentabilité."],
                    ['q' => "Avec 10 ouvriers, un atelier produit 100 unités ; avec 11 ouvriers, 108 unités. Quelle est la productivité marginale du 11e ouvrier ?", 'c' => ["108 unités", "9,8 unités", "8 unités", "10 unités"], 'a' => 2, 'e' => "Elle mesure la production en plus : 108 − 100 = 8 unités. Les 9,8 unités (108 ÷ 11) sont la productivité moyenne."],
                    ['q' => "Que décrit la fonction de production ?", 'c' => ["La production maximale avec des facteurs donnés", "Le coût minimal pour produire une quantité donnée", "Le prix de vente fixé par l’entreprise pour son produit", "Le nombre de salariés exigé par la loi"], 'a' => 0, 'e' => "Elle relie les quantités de facteurs (travail, capital) à la quantité maximale que l’on peut en tirer."],
                    ['q' => "Quelle mesure améliore le plus directement la productivité du travail sans embaucher ?", 'c' => ["Augmenter le loyer du local commercial", "Réduire le prix de vente de la gamme", "Allonger la liste des fournisseurs", "Former les salariés à de meilleures méthodes"], 'a' => 3, 'e' => "Une meilleure formation permet à chaque salarié de produire plus dans le même temps. Les autres actions n’agissent pas sur la production par salarié."],
                ],
            ],
            [
                'title' => "Prévision, risque et décision",
                'description' => "Testez vos bases sur la prévision de la demande, l’incertitude et les choix entre plusieurs scénarios.",
                'questions' => [
                    ['q' => "Pour prévoir ses ventes de glaces de l’été prochain, un gérant se base sur celles des étés passés. Quelle méthode utilise-t-il ?", 'c' => ["Une enquête auprès des clients", "Un modèle fondé sur le prix du pétrole", "L’extrapolation de données passées", "Un sondage auprès de ses concurrents"], 'a' => 2, 'e' => "Prolonger une tendance observée, c’est de l’extrapolation. Elle suppose que le futur ressemblera au passé."],
                    ['q' => "Les ventes des trois derniers mois ont été de 90, 100 et 110 unités. Quelle est la prévision par moyenne mobile sur trois mois ?", 'c' => ["90 unités", "110 unités", "300 unités", "100 unités"], 'a' => 3, 'e' => "(90 + 100 + 110) ÷ 3 = 100 unités. Les 300 sont la somme, pas la moyenne."],
                    ['q' => "Quelle situation relève du risque, c’est-à-dire d’un hasard dont on connaît les probabilités ?", 'c' => ["Un nouveau produit sans historique de ventes", "Une flotte de camions dont 2 % subissent un sinistre par an", "Une technologie dont l’adoption est imprévisible", "Une future réglementation encore inconnue"], 'a' => 1, 'e' => "Le risque se chiffre : ici, 2 % d’accidents observés. L’incertitude pure désigne les cas où l’on ne sait même pas attribuer des probabilités."],
                    ['q' => "Un projet rapporte 100 000 DH avec une probabilité de 0,6, et 20 000 DH avec une probabilité de 0,4. Quel est son gain espéré ?", 'c' => ["68 000 DH", "60 000 DH", "120 000 DH", "50 000 DH"], 'a' => 0, 'e' => "Espérance = 0,6 × 100 000 + 0,4 × 20 000 = 60 000 + 8 000 = 68 000 DH. La moyenne simple de 60 000 DH ignorerait les probabilités."],
                    ['q' => "Deux projets ont le même gain espéré de 50 000 DH. A est certain ; B donne 0 ou 100 000 DH à pile ou face. Que choisit un gérant averse au risque ?", 'c' => ["Le projet B, qui peut rapporter 100 000 DH", "Le projet A, au résultat certain", "Le projet B, dont l’espérance est supérieure", "Aucun, faute de gain espéré positif"], 'a' => 1, 'e' => "À espérance égale, une personne qui craint le risque préfère le résultat sûr. B n’a pas une espérance supérieure : elle vaut aussi 50 000 DH."],
                    ['q' => "Pourquoi un exploitant agricole cultive-t-il à la fois du blé, des olives et des agrumes ?", 'c' => ["Pour qu’une mauvaise récolte ne ruine pas tous ses revenus", "Pour augmenter l’espérance de gain de chaque culture", "Pour supprimer le risque climatique", "Pour obtenir un prix garanti sur toutes les ventes"], 'a' => 0, 'e' => "Répartir ses activités, c’est diversifier : un mauvais résultat sur une culture est compensé par les autres. Le risque est réduit, pas supprimé."],
                    ['q' => "Un commerçant prévoit un bénéfice de 40 000 DH (cas optimiste), 10 000 DH (cas central) ou −20 000 DH (cas pessimiste). Quelle est l’étendue des résultats possibles ?", 'c' => ["30 000 DH", "20 000 DH", "60 000 DH", "−20 000 DH"], 'a' => 2, 'e' => "Étendue = résultat maximal − résultat minimal = 40 000 − (−20 000) = 60 000 DH. Elle donne une idée de l’ampleur du risque."],
                    ['q' => "Un entrepreneur neutre face au risque compare A (gain sûr de 30 000 DH) à B (une chance sur deux de gagner 80 000 DH, une sur deux de perdre 10 000 DH). Que choisit-il ?", 'c' => ["A, dont l’espérance vaut 30 000 DH", "Indifférent, car les deux ont la même espérance", "B, car il peut rapporter jusqu’à 80 000 DH", "B, dont l’espérance vaut 35 000 DH"], 'a' => 3, 'e' => "Espérance de B : 0,5 × 80 000 + 0,5 × (−10 000) = 35 000 DH, supérieure à 30 000 DH. Un décideur neutre ne regarde que cette valeur moyenne."],
                    ['q' => "Un magasin avait prévu 500 ventes et en a réalisé 450. Quelle est son erreur de prévision, en pourcentage de la prévision ?", 'c' => ["10 %", "50 %", "5 %", "90 %"], 'a' => 0, 'e' => "L’écart est de 50 unités, soit 50 ÷ 500 = 10 % de la prévision. Les 50 unités ne sont pas des 50 %."],
                    ['q' => "Pourquoi une entreprise souscrit-elle une assurance incendie ?", 'c' => ["Pour attirer de nouveaux clients", "Pour réduire la probabilité qu’un incendie se produise", "Pour diminuer ses coûts fixes quotidiens", "Pour limiter ses pertes si un sinistre rare survient"], 'a' => 3, 'e' => "En payant une petite prime régulière, elle transfère à l’assureur le coût d’un événement peu probable mais très lourd. La probabilité du sinistre, elle, ne change pas."],
                    ['q' => "Une enquête de marché à 5 000 DH réduit l’incertitude avant un lancement qui pourrait faire perdre 100 000 DH. Quand est-elle rentable ?", 'c' => ["Quand elle coûte moins que le prix de vente du produit", "Quand la perte évitée, en espérance, dépasse son coût", "Quand elle confirme les intuitions du dirigeant", "Quand les concurrents ont déjà fait la même enquête"], 'a' => 1, 'e' => "L’information a une valeur : la perte qu’elle permet d’éviter, pondérée par sa probabilité. Si elle dépasse 5 000 DH, l’enquête vaut son prix."],
                    ['q' => "Une commande a une probabilité de 0,05 d’être annulée. Sur 200 commandes, combien d’annulations attend-on en moyenne ?", 'c' => ["5", "20", "10", "100"], 'a' => 2, 'e' => "Espérance = 200 × 0,05 = 10 annulations. 0,05 correspond à 5 %, pas à 5 commandes."],
                ],
            ],
            [
                'title' => "Tarification et allocation des ressources",
                'description' => "Mettez en pratique la fixation des prix, le choix des quantités et l’allocation efficace des ressources.",
                'questions' => [
                    ['q' => "Une pâtisserie a un coût moyen de 8 DH par gâteau et applique une majoration de 25 % sur ce coût. Quel prix fixe-t-elle ?", 'c' => ["10 DH", "8,25 DH", "6 DH", "16 DH"], 'a' => 0, 'e' => "Majoration de 25 % : 8 × 1,25 = 10 DH. Ajouter 25 centimes ou retirer 25 % ne répond pas à la question."],
                    ['q' => "Un producteur vend à 40 DH, prix du marché qu’il ne peut influencer. Son coût marginal est de 35 DH pour la 100e unité et de 45 DH pour la 101e. Jusqu’où produit-il ?", 'c' => ["99 unités", "100 unités", "101 unités", "Au-delà de 101 unités"], 'a' => 1, 'e' => "On produit tant que le prix couvre le coût marginal. La 100e coûte 35 DH (< 40 DH) : on la fait ; la 101e coûte 45 DH (> 40 DH) : on s’arrête."],
                    ['q' => "Un cinéma de Casablanca propose un tarif réduit aux étudiants. Quelle logique de prix applique-t-il ?", 'c' => ["Un prix psychologique pour toute la clientèle", "Une majoration uniforme sur le coût", "Un alignement sur le coût marginal", "Un prix adapté à la sensibilité de chaque groupe"], 'a' => 3, 'e' => "Les étudiants, très sensibles au prix, ne viendraient pas à plein tarif. Un prix par groupe permet de les remplir sans baisser le prix pour les autres."],
                    ['q' => "Une marque lance un smartphone très innovant à prix élevé pour des clients prêts à payer, puis baisse son prix peu à peu. Quelle stratégie est-ce ?", 'c' => ["Le prix de pénétration", "Le prix d’alignement", "L’écrémage", "La tarification au coût moyen"], 'a' => 2, 'e' => "On écrème d’abord les clients les moins sensibles au prix, puis on élargit. La pénétration fait l’inverse : un prix bas pour conquérir le marché."],
                    ['q' => "À quelle condition une ressource rare est-elle affectée efficacement ?", 'c' => ["Elle est partagée en parts égales entre tous les usages", "Elle va à l’entreprise la plus grande", "Elle revient à l’usage le plus ancien", "Elle va à l’usage qui en tire la plus grande valeur"], 'a' => 3, 'e' => "L’allocation est efficace quand on ne peut plus gagner en déplaçant la ressource vers un usage plus valorisé. Taille et ancienneté n’y changent rien."],
                    ['q' => "Un atelier dispose de 100 heures de travail. Le produit A rapporte 30 DH par heure (demande limitée à 60 heures), le produit B 24 DH par heure. Quel gain maximal ?", 'c' => ["2 400 DH", "2 760 DH", "3 000 DH", "960 DH"], 'a' => 1, 'e' => "On sert d’abord le plus rentable : 60 × 30 = 1 800 DH, puis les 40 heures restantes en B : 40 × 24 = 960 DH. Total 2 760 DH."],
                    ['q' => "L’État impose un prix maximum de 5 DH pour un produit dont le prix d’équilibre est de 8 DH. Que risque-t-on d’observer ?", 'c' => ["Un excédent de production invendu", "Une hausse de la quantité offerte", "Une pénurie, la demande excédant l’offre", "Une baisse de la quantité demandée"], 'a' => 2, 'e' => "À 5 DH, plus d’acheteurs veulent le produit et moins de vendeurs acceptent de le proposer. La demande dépasse l’offre."],
                    ['q' => "Un client est prêt à payer 120 DH pour un repas facturé 90 DH. Quel est son surplus ?", 'c' => ["30 DH", "90 DH", "120 DH", "210 DH"], 'a' => 0, 'e' => "Surplus du consommateur = consentement à payer − prix payé = 120 − 90 = 30 DH."],
                    ['q' => "Le projet A rapporte 18 000 DH pour 40 000 DH investis, le projet B 12 000 DH pour 20 000 DH. Lequel choisir à rendement comparé ?", 'c' => ["A, car 18 000 DH dépasse 12 000 DH", "B, dont le rendement de 60 % dépasse les 45 % de A", "A, car il mobilise plus de capital", "Les deux ont le même rendement"], 'a' => 1, 'e' => "Rendement de A : 18 000 ÷ 40 000 = 45 % ; de B : 12 000 ÷ 20 000 = 60 %. Pour comparer, on rapporte le gain à la somme investie."],
                    ['q' => "Un restaurant presque vide à 15 h propose un menu à prix réduit. Quelle logique le guide ?", 'c' => ["Vendre sous le coût marginal pour éliminer un concurrent", "Faire monter le prix d’équilibre du marché", "Remplir une capacité inutilisée tant que le prix couvre le coût marginal", "Appliquer la règle du coût moyen complet"], 'a' => 2, 'e' => "Les tables et le cuisinier sont déjà là : un client de plus ne coûte que quelques ingrédients. Tout prix au-dessus de ce coût marginal améliore le résultat."],
                    ['q' => "Pourquoi un prix libre, sur un marché concurrentiel, aide-t-il à allouer les ressources ?", 'c' => ["Il signale la rareté et oriente les ressources vers les usages les plus valorisés", "Il assure un profit positif à chaque producteur", "Il rend les coûts de production égaux entre entreprises", "Il fixe la quantité que chaque ménage doit acheter"], 'a' => 0, 'e' => "Un prix élevé indique un bien rare ou très demandé : les producteurs y consacrent plus de moyens. Il ne garantit aucun profit."],
                    ['q' => "Un artisan a 10 000 DH de coûts fixes et 12 DH de coût variable par unité. Pour vendre 500 unités avec 5 000 DH de profit, quel prix doit-il fixer ?", 'c' => ["30 DH", "21 000 DH", "36 DH", "42 DH"], 'a' => 3, 'e' => "Recette nécessaire = 10 000 + 12 × 500 + 5 000 = 21 000 DH ; prix = 21 000 ÷ 500 = 42 DH. Les 21 000 DH sont la recette, pas le prix."],
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
