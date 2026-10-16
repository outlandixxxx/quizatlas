<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class MicroeconomicsBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'microeconomics')->firstOrFail();

        $settings = [
            ['duration' => 15, 'passing_score' => 50],
            ['duration' => 15, 'passing_score' => 55],
            ['duration' => 15, 'passing_score' => 60],
            ['duration' => 15, 'passing_score' => 60],
            ['duration' => 15, 'passing_score' => 60],
            ['duration' => 15, 'passing_score' => 65],
            ['duration' => 15, 'passing_score' => 65],
            ['duration' => 15, 'passing_score' => 70],
        ];

        // 'a' = index (0-based) de la bonne réponse dans 'c'
        $quizzes = [
            [
                'title' => "Fondements de la microéconomie",
                'description' => "Rareté, coût d’opportunité, raisonnement marginal et rôle des prix : les bases de la microéconomie.",
                'questions' => [
                    ['q' => "Un ménage casablancais arbitre entre épargner et consommer, une entreprise choisit sa production : quel domaine étudie ces choix individuels ?", 'c' => ["La macroéconomie", "La comptabilité nationale", "La microéconomie", "La politique monétaire"], 'a' => 2, 'e' => "La micro part des décisions des agents pris un à un et de leur rencontre sur les marchés ; la macro étudie les grands agrégats comme le PIB ou le chômage."],
                    ['q' => "Une étudiante peut garder des enfants le samedi pour 150 MAD, ou suivre à la place un cours de langue à 100 MAD. Elle choisit le cours. Quel est le coût d’opportunité de ce choix ?", 'c' => ["150 MAD de gains abandonnés", "100 MAD, le prix du cours", "250 MAD, la somme des deux", "Aucun, car elle a choisi librement"], 'a' => 0, 'e' => "On mesure ce qu’on sacrifie : la meilleure option écartée, ici les 150 MAD du baby-sitting. Additionner les deux montants serait compter deux fois."],
                    ['q' => "Une boulangerie envisage une fournée de plus : elle coûterait 300 MAD de plus et rapporterait 260 MAD de recettes en plus. Que conseille le raisonnement marginal ?", 'c' => ["Accepter, car la boulangerie vend déjà beaucoup", "Accepter, car les coûts passés sont amortis", "Hésiter tant que le coût moyen est inconnu", "Refuser : 300 MAD de coût pour 260 de recette"], 'a' => 3, 'e' => "À la marge, on compare le coût de l’unité supplémentaire à son gain : 300 > 260, la fournée fait perdre 40 MAD. Le passé et la moyenne n’y changent rien."],
                    ['q' => "Lequel de ces éléments n’est PAS un facteur de production ?", 'c' => ["Une machine d’atelier", "Le bénéfice de l’entreprise", "Un terrain agricole", "Le travail des salariés"], 'a' => 1, 'e' => "Travail, capital et ressources naturelles sont des intrants. Le bénéfice, lui, est un revenu qui rémunère l’entrepreneur une fois la production vendue."],
                    ['q' => "Parmi ces phrases, laquelle est un jugement de valeur (économie normative) ?", 'c' => ["Le salaire minimum devrait être relevé", "Le prix du pain a augmenté cette année", "Le chômage touche davantage les jeunes", "La demande de thé baisse quand son prix monte"], 'a' => 0, 'e' => "Le mot « devrait » exprime une opinion. Les trois autres décrivent des faits qu’on peut vérifier : c’est l’économie positive."],
                    ['q' => "Un atelier fabrique soit 20 djellabas, soit 40 caftans par mois avec les mêmes moyens. Combien de caftans coûte une djellaba en plus ?", 'c' => ["0,5 caftan", "20 caftans", "2 caftans", "40 caftans"], 'a' => 2, 'e' => "Pour obtenir 20 djellabas on renonce à 40 caftans : 40 ÷ 20 = 2. Le chiffre 0,5 est l’inverse, c’est le coût d’un caftan en djellabas."],
                    ['q' => "Repère l’erreur dans cette phrase : « Les pays riches ont tant de ressources que la rareté ne les concerne plus. » Pourquoi est-ce faux ?", 'c' => ["La rareté ne dépend que des guerres", "Les moyens restent limités même dans un pays riche", "Seuls les pays pauvres doivent arbitrer", "La richesse supprime tout coût d’opportunité"], 'a' => 1, 'e' => "Les besoins dépassent les moyens partout : un État riche choisit encore entre un hôpital et une autoroute. La rareté est universelle."],
                    ['q' => "Une gelée détruit une partie de la récolte de tomates et leur prix grimpe. Que signale cette hausse aux acheteurs et aux vendeurs ?", 'c' => ["Un engouement soudain pour les tomates", "Une baisse des coûts des producteurs", "Une hausse des salaires des vendeurs", "Une rareté accrue du produit"], 'a' => 3, 'e' => "Le prix joue le rôle de signal : bien plus rare, il invite à acheter moins ou à se tourner vers d’autres légumes, sans qu’un chef d’orchestre ne décide."],
                    ['q' => "Une commune fait payer 1 MAD chaque sac plastique jusque-là gratuit, et la consommation de sacs chute. Quel principe est à l’œuvre ?", 'c' => ["Un effet d’incitation sur le coût perçu", "L’offre qui crée sa propre demande", "Les rendements décroissants de l’usage", "La neutralité de la monnaie sur les prix"], 'a' => 0, 'e' => "Quand le coût d’un choix change, les comportements suivent. C’est l’idée d’incitation, souvent résumée par « les gens réagissent aux avantages et aux coûts »."],
                    ['q' => "Qu’appelle-t-on un marché en économie ?", 'c' => ["Un souk ou un centre commercial précis", "Offreurs et demandeurs qui échangent un bien", "Une entreprise qui fixe seule son prix", "Un accord écrit entre l’État et un vendeur"], 'a' => 1, 'e' => "Le marché est une rencontre, pas forcément un lieu : la Bourse, un site de vente en ligne ou un marché de gros en sont aussi."],
                ],
            ],
            [
                'title' => "Demande et comportement du consommateur",
                'description' => "Loi de la demande, déterminants, utilité marginale, contrainte budgétaire et surplus du consommateur.",
                'questions' => [
                    ['q' => "Le prix de la botte de menthe passe de 5 à 8 MAD. Toutes choses égales par ailleurs, que se produit-il sur le graphique de la demande ?", 'c' => ["Un déplacement de la courbe vers la droite", "Un mouvement vers le haut de la courbe", "Un déplacement de la courbe vers la gauche", "Un mouvement vers le bas de la courbe"], 'a' => 1, 'e' => "Quand c’est le prix du bien lui-même qui change, on glisse le long de la même courbe : prix plus haut, quantité demandée plus basse."],
                    ['q' => "Les salaires augmentent et le thé en vrac est un bien normal. Que devient la courbe de demande de thé ?", 'c' => ["Elle reste identique, car le prix n’a pas changé", "Elle se déplace vers la gauche", "Elle devient plus pentue sans se déplacer", "Elle se déplace vers la droite"], 'a' => 3, 'e' => "Un revenu plus élevé accroît la quantité demandée à chaque prix pour un bien normal : toute la courbe se décale vers la droite."],
                    ['q' => "Quand le revenu d’une famille monte, elle achète moins de pain rassis et davantage de pâtisserie. Le pain rassis est pour elle un bien…", 'c' => ["inférieur", "normal", "complémentaire", "public"], 'a' => 0, 'e' => "Un bien inférieur est un bien dont la demande baisse quand le revenu augmente. Ce n’est pas un jugement sur sa qualité, seulement sur la réaction à la hausse de revenu."],
                    ['q' => "Le prix du café augmente fortement. Quel effet attend-on sur la demande de thé, son substitut ?", 'c' => ["Elle diminue, car les deux se boivent ensemble", "Elle reste identique, car les produits diffèrent", "Elle augmente : certains passent du café au thé", "Elle devient parfaitement inélastique"], 'a' => 2, 'e' => "Deux substituts se remplacent : quand l’un devient plus cher, une partie des consommateurs se reporte sur l’autre et sa demande monte."],
                    ['q' => "Le prix des imprimantes chute. Quel effet probable sur la demande de cartouches d’encre ?", 'c' => ["Elle baisse, car l’encre devient moins utile", "Elle baisse, car les imprimantes sont des substituts", "Elle reste stable, car les produits sont indépendants", "Elle augmente, car on achète plus d’imprimantes"], 'a' => 3, 'e' => "Imprimantes et cartouches sont complémentaires : plus d’imprimantes en service, c’est plus de cartouches à acheter."],
                    ['q' => "Trois verres de jus procurent successivement des satisfactions supplémentaires de 12, 8 puis 5. Quelle est l’utilité totale après les trois verres ?", 'c' => ["36", "25", "20, sans le 3e verre", "5"], 'a' => 1, 'e' => "On additionne les utilités marginales : 12 + 8 + 5 = 25. Elles décroissent, le 3e verre apporte bien moins que le 1er."],
                    ['q' => "Avec 200 MAD, Hind achète du pain à 5 MAD et du lait à 10 MAD la bouteille. Elle prend 12 pains. Combien de bouteilles peut-elle encore acheter au maximum ?", 'c' => ["20 bouteilles au plus", "12 bouteilles", "14 bouteilles", "16 bouteilles"], 'a' => 2, 'e' => "Les 12 pains coûtent 60 MAD, il reste 140 MAD ; 140 ÷ 10 = 14 bouteilles. La contrainte budgétaire limite l’ensemble des achats."],
                    ['q' => "Pour un consommateur, le bien A offre une utilité marginale de 20 pour un prix de 5 MAD, le bien B une utilité marginale de 18 pour 3 MAD. Comment doit-il réagir ?", 'c' => ["Acheter plus de B et moins de A", "Acheter plus de A, car son utilité marginale est supérieure", "Ne rien changer, l’équilibre est atteint", "Acheter autant de A que de B"], 'a' => 0, 'e' => "Le rapport utilité marginale / prix vaut 4 pour A et 6 pour B : un dirham dépensé en B rapporte davantage. À l’optimum, ces rapports sont égaux."],
                    ['q' => "Karim est prêt à payer jusqu’à 50 MAD pour une paire de baskets et il les achète 35 MAD. Quel est son surplus ?", 'c' => ["35 MAD", "50 MAD", "−15 MAD", "15 MAD"], 'a' => 3, 'e' => "Le surplus du consommateur est l’écart entre ce qu’il accepterait de payer et ce qu’il paie vraiment : 50 − 35 = 15 MAD."],
                    ['q' => "Lequel de ces changements ne déplace pas la courbe de demande de sardines ?", 'c' => ["Une hausse du revenu des ménages", "Une campagne vantant le poisson", "Une variation du prix des sardines", "Une baisse du prix du maquereau"], 'a' => 2, 'e' => "Le prix du bien lui-même fait bouger le point sur la courbe, pas la courbe. Revenu, goûts et prix des autres biens, eux, la déplacent."],
                ],
            ],
            [
                'title' => "Offre et décisions du producteur",
                'description' => "Loi de l’offre, coûts fixes et variables, coût marginal, profit et choix de production à court terme.",
                'questions' => [
                    ['q' => "Le prix du kilo d’oranges monte et les producteurs en proposent davantage. Quelle relation illustre cette réaction ?", 'c' => ["La loi de l’offre", "La loi de la demande", "L’utilité marginale décroissante", "Le surplus du consommateur"], 'a' => 0, 'e' => "À prix plus élevé, produire devient plus rentable : la quantité offerte augmente. C’est la pente positive de la courbe d’offre."],
                    ['q' => "Le prix des engrais baisse nettement. Que devient l’offre de tomates ?", 'c' => ["Elle se déplace vers la gauche", "Elle reste fixe, le prix des tomates n’a pas bougé", "Elle se déplace vers la droite", "Elle devient inélastique"], 'a' => 2, 'e' => "Des intrants moins chers abaissent le coût de production : à chaque prix, les agriculteurs proposent plus, donc l’offre se décale vers la droite."],
                    ['q' => "Pour un boulanger, quel coût reste identique, que le fournil cuise 100 ou 500 pains dans le mois ?", 'c' => ["La farine achetée", "Le gaz des fours", "Les sacs d’emballage", "Le loyer du fournil"], 'a' => 3, 'e' => "Le loyer est un coût fixe : il se paie même sans production. Farine, gaz et emballages varient avec la quantité cuite."],
                    ['q' => "Un atelier supporte 500 MAD de coûts fixes et 30 MAD de coût variable par pièce. Quel est son coût total pour 20 pièces ?", 'c' => ["600 MAD", "1100 MAD", "1000 MAD", "1500 MAD au total"], 'a' => 1, 'e' => "CT = CF + CV = 500 + 30 × 20 = 1100 MAD. Oublier les coûts fixes mène à 600, l’erreur la plus courante."],
                    ['q' => "Produire 10 unités coûte 400 MAD au total et 11 unités coûtent 425 MAD. Quel est le coût marginal de la 11e unité ?", 'c' => ["25 MAD", "38,6 MAD", "40 MAD", "425 MAD"], 'a' => 0, 'e' => "Le coût marginal est le supplément de coût de l’unité en plus : 425 − 400 = 25 MAD. Diviser 425 par 11 donnerait le coût moyen, pas le marginal."],
                    ['q' => "Une conserverie vend 100 boîtes à 40 MAD pièce pour un coût total de 3000 MAD. Quel est son profit ?", 'c' => ["4000 MAD, la recette", "3000 MAD", "7000 MAD", "1000 MAD"], 'a' => 3, 'e' => "Profit = recette − coût = 100 × 40 − 3000 = 1000 MAD. 4000 n’est que la recette."],
                    ['q' => "En concurrence parfaite, le prix est de 20 MAD et le coût marginal de la prochaine unité atteint 24 MAD. Que doit faire l’entreprise ?", 'c' => ["Produire plus, car le prix est positif", "Produire moins, car P est inférieur à Cm", "Fermer l’usine immédiatement", "Relever son prix jusqu’à 24 MAD"], 'a' => 1, 'e' => "L’unité en plus coûte 24 pour rapporter 20 : elle fait perdre de l’argent. Une entreprise preneuse de prix produit jusqu’à P = Cm et ne choisit pas son prix."],
                    ['q' => "Un atelier de 4 machines produit 10 pièces avec 1 ouvrier, 22 avec 2, 30 avec 3 et 36 avec 4. Quelle production supplémentaire apporte le 3e ouvrier ?", 'c' => ["10 pièces", "30 pièces", "8 pièces", "6 pièces"], 'a' => 2, 'e' => "30 − 22 = 8 pièces. Les ajouts successifs (12, 8, 6) diminuent : les machines étant fixes, ce sont les rendements décroissants."],
                    ['q' => "Le prix de vente est de 12 MAD, le coût variable moyen de 10 MAD et le coût fixe moyen de 5 MAD. À court terme, l’entreprise…", 'c' => ["produit encore : elle couvre ses coûts variables", "ferme tout de suite, car elle est en perte", "arrête, car son coût total moyen dépasse le prix", "double sa production pour effacer ses pertes"], 'a' => 0, 'e' => "Chaque unité rapporte 2 MAD de plus que son coût variable, ce qui aide à payer les coûts fixes déjà engagés. On ne ferme à court terme que si P descend sous le coût variable moyen."],
                    ['q' => "Un artisan réalise 100000 MAD de profit comptable ; comme salarié, il aurait gagné 120000 MAD. Quel est son profit économique ?", 'c' => ["100000 MAD, le profit comptable", "20000 MAD", "220000 MAD", "−20000 MAD"], 'a' => 3, 'e' => "Le profit économique retranche les coûts implicites, dont le salaire sacrifié : 100000 − 120000 = −20000 MAD. Sur le papier c’est rentable, économiquement non."],
                ],
            ],
            [
                'title' => "Équilibre de marché et formation des prix",
                'description' => "Équilibre, pénurie et excédent, déplacements de courbes, surplus et concurrence parfaite.",
                'questions' => [
                    ['q' => "Quand dit-on qu’un marché est à l’équilibre ?", 'c' => ["Quand le prix est fixé par l’État", "Quand les profits des vendeurs sont maximaux", "Quand tous les consommateurs ont un surplus nul", "Quand offre et demande s’égalisent"], 'a' => 3, 'e' => "À l’équilibre, la quantité que les acheteurs veulent prendre égale celle que les vendeurs veulent proposer : ni pénurie ni invendus."],
                    ['q' => "La demande est Qd = 100 − 2P et l’offre Qs = 20 + 3P. Quel est le prix d’équilibre ?", 'c' => ["12", "16", "20", "24,5"], 'a' => 1, 'e' => "On pose Qd = Qs : 100 − 2P = 20 + 3P, donc 5P = 80 et P = 16. La quantité échangée vaut alors 68."],
                    ['q' => "Avec Qd = 100 − 2P et Qs = 20 + 3P, le prix est bloqué à 10 MAD. Que se passe-t-il ?", 'c' => ["Un excédent de 20 unités", "Un excédent de 30 unités, donc des invendus", "Une pénurie de 30 unités", "Une pénurie de 20 unités"], 'a' => 2, 'e' => "À 10 MAD, Qd = 80 et Qs = 50 : on veut 80 mais on n’offre que 50, soit 30 unités manquantes."],
                    ['q' => "Qu’appelle-t-on le surplus du producteur ?", 'c' => ["Prix reçu moins coût minimal d’offre", "Le total des recettes d’une journée", "La quantité vendue au-delà de la demande", "Le bénéfice après impôt sur les sociétés"], 'a' => 0, 'e' => "C’est le gain du vendeur : l’écart entre le prix qu’il reçoit et le plus bas prix auquel il aurait accepté de vendre."],
                    ['q' => "Une vague de chaleur pousse les ménages à acheter plus de ventilateurs, l’offre restant inchangée. Que se passe-t-il à l’équilibre ?", 'c' => ["Le prix baisse et la quantité augmente", "Le prix et la quantité augmentent", "Le prix augmente et la quantité baisse", "Le prix et la quantité baissent"], 'a' => 1, 'e' => "La demande se décale vers la droite : on glisse vers le haut de la courbe d’offre, donc prix et quantité d’équilibre montent ensemble."],
                    ['q' => "La demande et l’offre de jus d’orange augmentent en même temps. Que peut-on affirmer à coup sûr ?", 'c' => ["Le prix augmente", "Le prix baisse", "La quantité échangée baisse", "La quantité échangée croît"], 'a' => 3, 'e' => "Les deux décalages poussent la quantité vers le haut ; pour le prix, l’un monte et l’autre baisse, le résultat dépend de l’ampleur de chaque décalage."],
                    ['q' => "Supposons un salaire minimum fixé au-dessus du salaire d’équilibre dans un métier peu qualifié. Quel effet probable dans ce métier ?", 'c' => ["Une pénurie de travailleurs", "Une hausse de l’emploi du métier", "Un excédent de candidats, donc du chômage", "Une baisse du salaire d’équilibre"], 'a' => 2, 'e' => "Au-dessus de l’équilibre, plus de personnes veulent travailler que d’entreprises n’en veulent embaucher : l’excédent d’offre de travail, c’est du chômage."],
                    ['q' => "Quelle condition caractérise la concurrence parfaite ?", 'c' => ["Beaucoup de vendeurs d’un produit identique", "Un seul vendeur sans concurrent proche", "Quelques grandes firmes qui s’entendent", "Des produits tous différenciés par la marque"], 'a' => 0, 'e' => "Nombreux vendeurs, produit homogène : chacun est trop petit pour influencer le prix et le prend comme une donnée."],
                    ['q' => "La demande inverse est P = 40 − 2Q et l’équilibre se situe à P = 20, Q = 10. Quel est le surplus du consommateur ?", 'c' => ["200 en prenant un rectangle", "100", "50", "400"], 'a' => 1, 'e' => "C’est le triangle sous la demande, au-dessus du prix : ½ × 10 × (40 − 20) = 100. Prendre un rectangle, soit 200, est l’erreur classique."],
                    ['q' => "Si le prix est au-dessus de l’équilibre, quelle force ramène le marché vers lui ?", 'c' => ["Les acheteurs offrent un prix plus élevé", "L’État rachète le surplus invendu", "Les vendeurs baissent leurs prix pour vendre", "Les producteurs augmentent leur production"], 'a' => 2, 'e' => "Les invendus s’accumulent : pour s’en défaire, les vendeurs baissent leurs prix, jusqu’à ce que la quantité demandée rejoigne celle offerte."],
                ],
            ],
            [
                'title' => "Élasticité et incidence économique",
                'description' => "Élasticités-prix, revenu et croisée, effet sur la recette, et qui supporte réellement une taxe.",
                'questions' => [
                    ['q' => "Comment définit-on l’élasticité-prix de la demande ?", 'c' => ["La variation en unités de la quantité demandée", "Variation en % de Q rapportée à celle de P", "La pente de la droite de demande", "Le rapport entre recette et coût total"], 'a' => 1, 'e' => "Elle compare des pourcentages, donc ne dépend pas des unités choisies : dirhams, kilos ou litres donnent le même résultat."],
                    ['q' => "Le prix passe de 10 à 12 MAD (+20 %) et la quantité demandée de 100 à 90 (−10 %). Que vaut l’élasticité en valeur absolue ?", 'c' => ["0,5", "2", "0,25", "1"], 'a' => 0, 'e' => "10 % ÷ 20 % = 0,5, inférieur à 1 : la demande est peu élastique. Piège courant : inverser le rapport et répondre 2."],
                    ['q' => "Le prix baisse de 5 % et la quantité demandée augmente de 15 %. Que devient la recette du vendeur ?", 'c' => ["Elle baisse de 10 %", "Elle ne change pas", "Elle augmente", "On ne peut pas conclure sans les coûts"], 'a' => 2, 'e' => "L’élasticité vaut 3 (15 ÷ 5) : la quantité réagit plus que le prix, donc le gain en volume compense plus que la perte par unité. Les coûts n’entrent pas dans la recette."],
                    ['q' => "Lequel de ces biens a probablement la demande la moins élastique à court terme ?", 'c' => ["Un voyage de vacances à l’étranger", "Un yaourt d’une marque parmi dix", "Un smartphone très haut de gamme", "Le sel de cuisine"], 'a' => 3, 'e' => "Le sel est peu coûteux, sans substitut proche et indispensable : même s’il double de prix, on en achète quasiment autant."],
                    ['q' => "Le revenu d’un ménage augmente de 10 % et sa demande de repas au restaurant de 25 %. Que vaut l’élasticité-revenu, et quel type de bien est-ce ?", 'c' => ["2,5 : bien de luxe", "0,4 : bien de nécessité", "2,5 : bien inférieur", "0,4 : bien de luxe"], 'a' => 0, 'e' => "25 ÷ 10 = 2,5. Au-delà de 1, la demande croît plus vite que le revenu : c’est un bien de luxe."],
                    ['q' => "Quand le prix du thé monte de 10 %, la demande de café augmente de 5 %. L’élasticité croisée est…", 'c' => ["négative : biens complémentaires", "positive : biens substituts", "nulle : biens indépendants", "égale à 2 : biens de luxe"], 'a' => 1, 'e' => "+5 % ÷ +10 % = +0,5. Un signe positif signifie que les deux biens se remplacent ; négatif, ils iraient ensemble."],
                    ['q' => "Un vendeur baisse son prix de 50 à 40 MAD et vend 220 unités au lieu de 200. Comment évolue sa recette, et que révèle ce résultat ?", 'c' => ["+1200 MAD, demande élastique", "Aucun changement, élasticité unitaire", "−2000 MAD, demande rigide", "−1200 MAD, demande inélastique"], 'a' => 3, 'e' => "La recette passe de 10000 à 8800 MAD. Les ventes n’ont gagné que 10 % pour 20 % de baisse de prix : la demande est inélastique, la baisse ne paie pas."],
                    ['q' => "Une taxe de 6 MAD par unité frappe un bien dont la demande est très inélastique et l’offre très élastique. Qui en supporte l’essentiel ?", 'c' => ["Les vendeurs", "L’État qui la collecte", "Les acheteurs", "Les deux à égalité"], 'a' => 2, 'e' => "Le côté le moins capable de fuir paie le plus : ici les acheteurs, qui ne réduisent guère leurs achats et acceptent donc un prix plus haut."],
                    ['q' => "Une taxe de 2 MAD par unité fait passer le prix payé par l’acheteur de 10 à 11,5 MAD. Quelle part reste à la charge du vendeur ?", 'c' => ["0,50 MAD par unité", "1,50 MAD par unité", "2 MAD par unité", "Rien, car l’acheteur paie plus"], 'a' => 0, 'e' => "L’acheteur absorbe 1,5 MAD ; le reste, 2 − 1,5 = 0,5 MAD, est supporté par le vendeur, dont le prix net baisse à 9,5. Qui paie le chèque n’est pas qui supporte la charge."],
                    ['q' => "Pourquoi la demande d’essence est-elle plus élastique à long terme qu’à court terme ?", 'c' => ["Les stations réduisent leurs marges", "Les ménages ont le temps de changer de véhicule", "Le prix du pétrole finit par se stabiliser", "Les revenus augmentent forcément avec le temps"], 'a' => 1, 'e' => "Avec du temps, on change de voiture, de logement ou de mode de transport : les substituts deviennent accessibles et la réaction au prix s’amplifie."],
                ],
            ],
            [
                'title' => "Externalités, biens publics et information",
                'description' => "Externalités, biens publics, ressources communes et défaillances liées à l’information.",
                'questions' => [
                    ['q' => "Une usine de papier rejette ses eaux sales dans la rivière et les pêcheurs en aval perdent leurs prises. Ce phénomène est…", 'c' => ["une subvention implicite aux pêcheurs", "un effet de réputation", "une externalité négative", "un partage des risques"], 'a' => 2, 'e' => "Un coût imposé à des tiers sans compensation ni accord est une externalité négative : l’usine ne paie pas le dommage qu’elle cause."],
                    ['q' => "Un voisin restaure la façade de sa maison et tout le quartier en profite sans payer. De quel type d’effet s’agit-il ?", 'c' => ["Une externalité négative", "Un bien public pur", "Un effet de substitution", "Une externalité positive"], 'a' => 3, 'e' => "Un avantage reçu par des tiers sans contrepartie est une externalité positive. Ce n’est pas un bien public pur, puisque la façade appartient à un propriétaire."],
                    ['q' => "Produire une tonne d’engrais coûte 30 MAD à l’entreprise et cause 10 MAD de dégâts à la nappe phréatique. Quel est le coût social ?", 'c' => ["30 MAD, le coût privé", "40 MAD", "20 MAD", "10 MAD"], 'a' => 1, 'e' => "Coût social = coût privé + coût externe = 30 + 10 = 40 MAD. Le marché, lui, ne voit que les 30."],
                    ['q' => "Pour corriger une pollution, la taxe par unité devrait idéalement être égale…", 'c' => ["au dégât externe d’une unité en plus", "au profit de l’entreprise sur une unité", "au prix de vente du produit", "à la moitié du coût de production"], 'a' => 0, 'e' => "C’est l’idée de la taxe pigouvienne : en la fixant au dommage marginal, le pollueur « internalise » ce qu’il impose aux autres."],
                    ['q' => "Lequel de ces biens se rapproche le plus d’un bien public pur ?", 'c' => ["Une place de parking en centre-ville", "Un tajine au restaurant", "Un phare qui guide les navires", "Une autoroute à péage"], 'a' => 2, 'e' => "Le phare est non rival (un navire de plus ne gêne pas les autres) et non exclusif (impossible d’en priver qui ne paie pas)."],
                    ['q' => "Dans un immeuble, chacun compte sur les autres pour payer l’éclairage de l’escalier. Ce comportement s’appelle…", 'c' => ["l’aléa moral", "la sélection adverse", "la tragédie des communs", "le passager clandestin"], 'a' => 3, 'e' => "Chacun profite du service sans contribuer : c’est le passager clandestin, raison pour laquelle l’État ou le syndic finance par contrainte."],
                    ['q' => "Des pêcheurs exploitent librement un banc de sardines en mer et le stock s’épuise. Pourquoi ?", 'c' => ["Personne ne paie l’épuisement du stock commun", "Les quotas imposés par l’État sont trop sévères", "Les sardines sont un bien public sans rivalité", "La demande de poisson baisse trop vite"], 'a' => 0, 'e' => "Une ressource commune est rivale mais non exclusive : chaque pêcheur gagne à prendre plus, et le coût de l’épuisement est partagé par tous. C’est la tragédie des communs."],
                    ['q' => "Un vendeur d’occasion connaît mieux l’état de sa voiture que l’acheteur. Les acheteurs, méfiants, ne proposent qu’un prix moyen et les bonnes voitures quittent le marché. Comment nomme-t-on ce problème ?", 'c' => ["L’aléa moral", "La sélection adverse", "Le coût d’opportunité", "La rente de situation"], 'a' => 1, 'e' => "L’information inégale avant l’échange chasse les bons produits : c’est la sélection adverse, illustrée par les « citrons » d’Akerlof."],
                    ['q' => "Après avoir souscrit une assurance tous risques, un conducteur roule moins prudemment. Il s’agit d’un exemple d’…", 'c' => ["externalité positive", "signal de qualité", "effet de réseau", "aléa moral"], 'a' => 3, 'e' => "L’aléa moral naît après le contrat : protégé contre le risque, l’assuré a moins d’intérêt à l’éviter, et l’assureur ne peut pas le surveiller en permanence."],
                    ['q' => "Une externalité négative n’est pas corrigée. Comparée à l’optimum social, la quantité produite par le marché est…", 'c' => ["trop faible", "égale à l’optimum social", "trop élevée", "nulle"], 'a' => 2, 'e' => "Le producteur ignore une partie des coûts réels : son coût paraît plus bas que le coût social, il produit donc plus que ce qui est souhaitable pour la société."],
                ],
            ],
            [
                'title' => "Microéconomie appliquée aux politiques publiques",
                'description' => "Effets des taxes, subventions, prix administrés et droits de douane, et critères d’évaluation d’une politique.",
                'questions' => [
                    ['q' => "Une subvention de 2 MAD par unité est versée aux producteurs d’un bien. Quel est son effet direct sur le graphique du marché ?", 'c' => ["La courbe d’offre se décale vers la droite", "La courbe d’offre se décale vers la gauche", "La courbe de demande se décale vers la droite", "La courbe de demande se décale vers la gauche"], 'a' => 0, 'e' => "Le coût net du producteur baisse : à chaque prix, il offre plus. L’offre se décale vers la droite et le prix payé par les acheteurs recule."],
                    ['q' => "Une taxe de 4 MAD par unité réduit la quantité échangée de 300 à 250. Quelle est la perte sèche ?", 'c' => ["200 MAD", "1000 MAD", "50 MAD", "100 MAD"], 'a' => 3, 'e' => "Le triangle de perte sèche vaut ½ × 4 × 50 = 100 MAD. 1000 est la recette fiscale (4 × 250), 200 oublie le facteur ½."],
                    ['q' => "Un droit de douane est établi sur un bien importé. Quel effet attend-on sur son prix sur le marché intérieur ?", 'c' => ["Il baisse, car l’offre étrangère s’accroît", "Il monte, car importer coûte plus cher", "Il reste stable, car l’étranger paie le droit", "Il s’aligne sur le prix mondial dans tous les cas"], 'a' => 1, 'e' => "Le droit renchérit chaque unité importée : les importateurs répercutent ce coût, et les producteurs locaux peuvent relever eux aussi leurs prix."],
                    ['q' => "L’État garantit aux producteurs de blé un prix minimum supérieur au prix d’équilibre. Que constate-t-on, toutes choses égales par ailleurs ?", 'c' => ["Une pénurie de blé sur le marché", "Une chute de la production de blé", "Un excédent que l’État doit absorber", "Une hausse de la demande des meuniers"], 'a' => 2, 'e' => "Un prix plancher efficace attire plus d’offre et décourage la demande : l’écart forme un excédent, acheté ou stocké par l’État."],
                    ['q' => "Le prix du butane est plafonné sous son niveau d’équilibre. Quelle conséquence est la plus probable ?", 'c' => ["Des invendus qui s’accumulent", "Une hausse de l’offre privée", "Un recul de la consommation", "Des files d’attente et une pénurie"], 'a' => 3, 'e' => "À prix trop bas, la demande dépasse l’offre : la quantité manquante crée des files, du rationnement, parfois un marché parallèle."],
                    ['q' => "Plutôt qu’une taxe, l’État distribue un nombre limité de permis d’émission négociables. Quel est l’avantage de ce système ?", 'c' => ["Dépolluer là où cela coûte le moins", "Chaque usine pollue exactement autant", "L’État fixe le prix de chaque permis", "La quantité de pollution reste illimitée"], 'a' => 0, 'e' => "Les entreprises qui dépolluent facilement vendent leurs permis à celles pour qui c’est coûteux : l’objectif global est atteint au moindre coût."],
                    ['q' => "Une subvention de 2 MAD par unité est versée pour 500 unités vendues. Quel est son coût budgétaire ?", 'c' => ["250 MAD", "500 MAD", "1000 MAD", "2500 MAD au total"], 'a' => 2, 'e' => "Coût = subvention unitaire × quantité vendue = 2 × 500 = 1000 MAD, à financer par l’impôt."],
                    ['q' => "Pourquoi la distribution d’eau par réseau est-elle souvent un monopole naturel ?", 'c' => ["Les usagers refusent d’avoir le choix", "Un seul réseau coûte moins que plusieurs", "L’eau est un bien de luxe peu demandé", "Les firmes s’entendent toujours entre elles"], 'a' => 1, 'e' => "Les coûts fixes de canalisations sont énormes : le coût moyen baisse quand un seul opérateur dessert tout le monde, d’où une régulation des tarifs."],
                    ['q' => "Un impôt progressif sur le revenu répond surtout à un objectif…", 'c' => ["d’équité entre ménages", "de correction d’une externalité", "de limitation des importations", "de stabilité des prix"], 'a' => 0, 'e' => "Plus le revenu est élevé, plus le taux marginal l’est : on cherche à réduire les écarts de niveau de vie, pas à corriger une défaillance de marché."],
                    ['q' => "Un projet coûte 8 millions de MAD et procure 11 millions de bénéfices sociaux. Que conclut l’analyse coût-bénéfice ?", 'c' => ["Le rejeter, car il coûte beaucoup", "Le rejeter, car il dépasse 10 millions", "L’accepter si les bénéfices sont nuls", "L’accepter : bénéfice net de 3 millions"], 'a' => 3, 'e' => "Bénéfices moins coûts : 11 − 8 = +3 millions. Un projet est souhaitable quand son bénéfice net est positif, quelle que soit la taille de la dépense."],
                ],
            ],
            [
                'title' => "Révision intégrée de microéconomie",
                'description' => "Révision mêlant calculs d’équilibre, d’élasticité, de coûts et de surplus, avec des situations concrètes.",
                'questions' => [
                    ['q' => "Un jeune renonce à un emploi à 3000 MAD par mois pour faire 2 ans d’études, avec 20000 MAD de frais au total. Quel est le coût économique complet de ces études ?", 'c' => ["20000 MAD", "72000 MAD", "92000 MAD", "144000 MAD"], 'a' => 2, 'e' => "Coût explicite 20000 + coût implicite 3000 × 24 = 72000, soit 92000 MAD. Ne compter que les frais, c’est oublier le salaire sacrifié."],
                    ['q' => "La demande est Qd = 50 − P et l’offre Qs = 2P − 10. Quelle quantité s’échange à l’équilibre ?", 'c' => ["20, qui est le prix", "30", "40", "10"], 'a' => 1, 'e' => "50 − P = 2P − 10 donne P = 20 ; on remplace : Q = 50 − 20 = 30. Attention à ne pas répondre 20, qui est le prix."],
                    ['q' => "Sur un marché, le prix des tomates monte alors que les quantités échangées baissent. Quelle cause est la plus plausible ?", 'c' => ["Une baisse de l’offre, due par exemple à un gel", "Une hausse de la demande des ménages", "Une subvention aux producteurs", "Une baisse du coût des intrants"], 'a' => 0, 'e' => "Prix en hausse et quantité en baisse signalent un décalage de l’offre vers la gauche. Une hausse de la demande ferait monter prix et quantité ensemble."],
                    ['q' => "L’élasticité-prix d’un bien est de −0,4 et son prix monte de 25 %. Que fait la quantité demandée ?", 'c' => ["Elle baisse de 62,5 %", "Elle baisse de 25 %", "Elle baisse de 0,4 %", "Elle baisse de 10 %"], 'a' => 3, 'e' => "Variation de Q = élasticité × variation de P = −0,4 × 25 % = −10 %. Diviser 25 par 0,4 donnerait 62,5, la même erreur d’inversion."],
                    ['q' => "Produire 10 pièces coûte 500 MAD et 11 pièces 545 MAD. Que fait le coût moyen quand on passe de 10 à 11 pièces ?", 'c' => ["Il augmente à 54,5 MAD", "Il baisse à environ 49,5 MAD", "Il reste égal à 50 MAD", "Il passe à 45 MAD"], 'a' => 1, 'e' => "Le coût marginal de la 11e pièce est 45, inférieur au coût moyen de 50 : il tire la moyenne vers le bas, à 545 ÷ 11 ≈ 49,5."],
                    ['q' => "L’offre inverse est P = Q + 10 et l’équilibre se situe à P = 30, Q = 20. Quel est le surplus du producteur ?", 'c' => ["400 en prenant un rectangle", "100", "200", "600"], 'a' => 2, 'e' => "Triangle entre le prix et la courbe d’offre : ½ × 20 × (30 − 10) = 200. 400 prend un rectangle, 600 est la recette totale."],
                    ['q' => "Le coût marginal privé d’une unité est de 20, le coût externe de 6 et le bénéfice marginal de 24. Cette unité est-elle socialement souhaitable ?", 'c' => ["Oui : 24 dépasse le coût privé de 20", "Oui : le coût externe reste modeste", "Oui : le profit privé est positif", "Non : 26 de coût social contre 24 de gain"], 'a' => 3, 'e' => "Coût social = 20 + 6 = 26 > 24 : la société y perd, même si le producteur y gagne. C’est le décalage typique des externalités."],
                    ['q' => "Une taxe frappe un bien dont la demande est élastique et l’offre peu élastique. Qui supporte l’essentiel du poids ?", 'c' => ["Les vendeurs", "Les acheteurs", "L’État", "Personne, la taxe est neutre"], 'a' => 0, 'e' => "Le côté qui réagit peu au prix reste coincé : les vendeurs, peu capables de réduire leur offre, absorbent la taxe tandis que les acheteurs se détournent."],
                    ['q' => "Un revendeur offre une garantie de deux ans sur ses voitures d’occasion. Que cherche-t-il ?", 'c' => ["À décourager les curieux", "À cacher des défauts possibles", "À signaler une qualité fiable", "À augmenter son coût marginal"], 'a' => 2, 'e' => "Seul un vendeur de bons véhicules peut se permettre d’offrir une garantie : c’est un signal qui réduit l’asymétrie d’information."],
                    ['q' => "Comparé à la concurrence parfaite, un monopole non régulé produit…", 'c' => ["plus et vend moins cher", "moins et vend plus cher", "autant et vend au coût marginal", "moins et vend au coût marginal"], 'a' => 1, 'e' => "Le monopoleur restreint la quantité pour faire monter le prix au-dessus du coût marginal : d’où une perte sèche pour la collectivité."],
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
