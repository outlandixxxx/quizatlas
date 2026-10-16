<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class EconomicsFundamentalsBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'economics-fundamentals')->firstOrFail();

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
        ];

        // 'a' = index (0-based) de la bonne réponse dans 'c'
        $quizzes = [
            [
                'title' => "Introduction à l’économie",
                'description' => "Les notions de départ : rareté, choix, coût d’opportunité et agents économiques.",
                'questions' => [
                    ['q' => "Une famille ne peut pas tout acheter avec son budget du mois et doit faire des choix. Quelle notion cette situation illustre-t-elle ?", 'c' => ["L’inflation des prix", "La rareté des ressources", "Le chômage structurel", "La croissance du PIB"], 'a' => 1, 'e' => "Les besoins sont plus étendus que les moyens disponibles : c’est cet écart qui rend les choix nécessaires."],
                    ['q' => "Karim a deux heures libres : il pourrait livrer des colis (80 MAD à la clé) mais préfère réviser. Quel est son coût d’opportunité ?", 'c' => ["0 MAD, puisque réviser ne coûte rien", "Le prix des cahiers qu’il utilise", "Les 80 MAD auxquels il renonce", "Le total de ses dépenses de la semaine"], 'a' => 2, 'e' => "On compte ce que l’on abandonne en choisissant : ici le gain de la meilleure autre option, pas une dépense."],
                    ['q' => "Parmi ces exemples, lequel est un service ?", 'c' => ["Une baguette de pain", "Une consultation chez le médecin", "Un sac de ciment", "Une paire de chaussures"], 'a' => 1, 'e' => "Un service est immatériel : on ne le stocke pas et on ne le touche pas, contrairement aux trois autres, qui sont des biens."],
                    ['q' => "Lequel de ces éléments est un bien économique, c’est-à-dire rare et payant ?", 'c' => ["L’air d’une montagne", "Le soleil en été", "Le vent sur la côte", "Un kilo d’oranges au souk"], 'a' => 3, 'e' => "Les oranges demandent du travail et des terres, donc on les paie. Air, soleil et vent sont des dons de la nature disponibles sans prix."],
                    ['q' => "Laquelle de ces questions relève de la macroéconomie ?", 'c' => ["Pourquoi le prix du thé monte-t-il dans mon quartier ?", "Combien de serveurs mon café doit-il embaucher ?", "Pourquoi le chômage national a-t-il reculé cette année ?", "Comment une mère de famille répartit-elle ses courses ?"], 'a' => 2, 'e' => "La macroéconomie regarde les grands ensembles (chômage, production, prix généraux) ; les autres cas concernent un marché ou un agent précis."],
                    ['q' => "Choisir quoi produire, comment le produire et pour qui : à quel problème de fond ces trois questions répondent-elles ?", 'c' => ["Répartir des ressources rares entre usages", "Fixer le niveau du taux de change", "Équilibrer le budget d’un seul ménage", "Mesurer le PIB par habitant"], 'a' => 0, 'e' => "Toute société dispose de ressources limitées : elle doit décider de leur emploi, d’où ces trois questions classiques."],
                    ['q' => "Dans le circuit économique simple, les ménages perçoivent des salaires en contrepartie de…", 'c' => ["leur travail", "leurs achats de produits finis", "leurs impôts payés à l’État", "leur épargne placée en banque"], 'a' => 0, 'e' => "Les ménages offrent leur travail aux entreprises et reçoivent un revenu ; ils dépensent ensuite ce revenu en achetant des produits."],
                    ['q' => "Une coopérative agricole produit et vend de l’huile d’olive. Dans le circuit économique, quel agent est-elle ?", 'c' => ["Un ménage", "Une administration publique", "Une institution financière", "Une entreprise"], 'a' => 3, 'e' => "Elle produit des biens destinés au marché : c’est la fonction d’une entreprise, même sous forme coopérative."],
                    ['q' => "Laquelle de ces phrases est un simple constat (et non un jugement de valeur) ?", 'c' => ["Le SMIG devrait être doublé", "L’État doit taxer davantage les produits de luxe", "Le prix du pain a augmenté ce trimestre", "Il est injuste que les loyers soient si élevés"], 'a' => 2, 'e' => "Un constat se vérifie avec des données ; « devrait », « doit » et « injuste » expriment des opinions."],
                    ['q' => "Un artisan fabrique soit 4 tapis, soit 8 coussins par jour avec le même temps. En faisant un tapis de plus, à combien de coussins renonce-t-il ?", 'c' => ["1 coussin", "2 coussins", "4 coussins", "12 coussins"], 'a' => 1, 'e' => "4 tapis valent 8 coussins, donc 1 tapis vaut 8 ÷ 4 = 2 coussins : c’est son coût d’opportunité."],
                ],
            ],
            [
                'title' => "Offre et demande",
                'description' => "La loi de l’offre et de la demande, l’équilibre du marché et l’élasticité.",
                'questions' => [
                    ['q' => "Toutes choses égales par ailleurs, si le prix du thé à la menthe en terrasse monte, la quantité demandée…", 'c' => ["augmente", "reste identique", "varie au hasard", "diminue"], 'a' => 3, 'e' => "C’est la loi de la demande : plus un bien est cher, moins les consommateurs en achètent, le reste étant inchangé."],
                    ['q' => "Le prix de vente de la tomate grimpe sur le marché. Que sont incités à faire les producteurs ?", 'c' => ["Offrir davantage de tomates", "Réduire leurs volumes mis en vente", "Fermer leur exploitation", "Baisser leurs salaires"], 'a' => 0, 'e' => "Un prix plus élevé rend la production plus rentable, donc l’offre augmente : loi de l’offre."],
                    ['q' => "Le revenu des ménages augmente et la demande de voitures neuves progresse à chaque prix. Sur le graphique, cela se traduit par…", 'c' => ["un glissement le long de la courbe", "une hausse de l’offre du bien", "un décalage de la demande vers la droite", "une baisse de la demande"], 'a' => 2, 'e' => "Un facteur autre que le prix (ici le revenu) déplace toute la courbe ; seul le prix fait glisser le long de la courbe."],
                    ['q' => "Demande : Qd = 100 − 2P ; offre : Qs = 20 + 2P. Quel est le prix d’équilibre ?", 'c' => ["P = 10", "P = 20", "P = 30", "P = 120"], 'a' => 1, 'e' => "À l’équilibre Qd = Qs : 100 − 2P = 20 + 2P, donc 80 = 4P et P = 20 (quantité échangée : 60)."],
                    ['q' => "À 15 DH le kilo, les consommateurs veulent 800 kg et les producteurs en proposent 500. Que constate-t-on ?", 'c' => ["Un surplus de 300 kg", "Un équilibre du marché", "Un excédent de 800 kg", "Une pénurie de 300 kg"], 'a' => 3, 'e' => "La demande dépasse l’offre de 800 − 500 = 300 kg : il manque de la marchandise, et le prix aura tendance à monter."],
                    ['q' => "Quand le prix du beurre augmente nettement, la demande de margarine, son substitut, tend à…", 'c' => ["rester stable", "baisser sensiblement", "augmenter", "disparaître"], 'a' => 2, 'e' => "Les consommateurs se reportent sur le produit voisin devenu relativement moins cher : c’est le propre des substituts."],
                    ['q' => "Quel événement déplace la courbe d’offre de blé vers la droite ?", 'c' => ["De bonnes pluies sur les champs", "Une hausse du revenu des ménages", "Un goût croissant pour le pain complet", "Une baisse du nombre de consommateurs"], 'a' => 0, 'e' => "De bonnes pluies augmentent les rendements, donc l’offre. Les trois autres facteurs jouent du côté de la demande."],
                    ['q' => "Le prix passe de 10 à 12 DH et la quantité demandée tombe de 100 à 70. La demande est…", 'c' => ["inélastique : la quantité baisse moins que le prix ne monte", "élastique : −30 % de quantité pour +20 % de prix", "à élasticité unitaire : variations égales", "parfaitement élastique : la quantité tombe à zéro"], 'a' => 1, 'e' => "Le prix monte de 20 % et la quantité chute de 30 % : la réaction est plus que proportionnelle, élasticité d’environ 1,5."],
                    ['q' => "Pourquoi la demande de sel de cuisine est-elle peu sensible à son prix ?", 'c' => ["Parce que c’est un bien de luxe recherché", "Parce qu’il en existe mille substituts", "Parce qu’il pèse peu dans le budget et se remplace mal", "Parce que sa production est très coûteuse"], 'a' => 2, 'e' => "Un produit bon marché, courant et sans équivalent proche pousse peu à changer de comportement quand son prix bouge."],
                    ['q' => "Un État plafonne les loyers en dessous du prix d’équilibre. À court terme, que doit-on attendre ?", 'c' => ["Une pénurie de logements à louer", "Un excédent de logements vides", "Une hausse de l’offre de logements", "Un nouvel équilibre à un loyer supérieur"], 'a' => 0, 'e' => "À prix bloqué bas, plus de gens cherchent un logement alors que les propriétaires en proposent moins : la demande excède l’offre."],
                ],
            ],
            [
                'title' => "Prix, marché et concurrence",
                'description' => "Les structures de marché, le rôle des prix et les effets des interventions sur les prix.",
                'questions' => [
                    ['q' => "Sur un marché de concurrence parfaite, chaque producteur…", 'c' => ["fixe librement son prix", "subit le prix du marché", "s’entend avec ses rivaux sur les prix", "vend un produit sans équivalent"], 'a' => 1, 'e' => "Les vendeurs sont nombreux et vendent le même produit : aucun ne pèse assez pour imposer son prix, il s’aligne sur celui du marché."],
                    ['q' => "Le seul distributeur d’eau d’une petite ville peut relever son prix sans perdre l’ensemble de ses clients. Quelle structure de marché ?", 'c' => ["La concurrence parfaite", "L’oligopole", "Le monopsone", "Le monopole"], 'a' => 3, 'e' => "Un vendeur unique face à de nombreux acheteurs, c’est un monopole. Le monopsone est son inverse : un acheteur unique."],
                    ['q' => "Trois opérateurs se partagent presque tout le marché de la téléphonie mobile d’un pays. Cette structure s’appelle…", 'c' => ["un oligopole", "un monopole", "une concurrence parfaite", "un monopsone"], 'a' => 0, 'e' => "Quelques grands vendeurs, qui se surveillent mutuellement : c’est un oligopole (olig- = peu nombreux)."],
                    ['q' => "Le prix de l’huile d’argan grimpe fortement. Quel signal les producteurs reçoivent-ils ?", 'c' => ["Il vaut mieux cesser de produire", "Les stocks sont à détruire", "Produire en plus devient rentable", "Les clients sont indifférents"], 'a' => 2, 'e' => "Le prix informe sur la rareté et incite à produire plus ; c’est le rôle de signal du mécanisme des prix."],
                    ['q' => "L’État garantit aux éleveurs un prix minimum du lait fixé au-dessus du prix d’équilibre. Que risque-t-on d’observer ?", 'c' => ["Une pénurie de lait", "Des surplus invendus", "Une baisse de l’offre", "Une disparition des laiteries"], 'a' => 1, 'e' => "Un prix élevé attire plus de production et décourage des acheteurs : l’offre dépasse la demande, d’où des excédents."],
                    ['q' => "Pourquoi un marché noir apparaît-il souvent lorsque l’État plafonne le prix d’un produit très demandé ?", 'c' => ["Parce que le prix légal est inférieur au prix d’équilibre", "Parce que l’offre légale excède la demande des ménages", "Parce que l’État subventionne fortement l’offre", "Parce que plus personne ne souhaite acheter"], 'a' => 0, 'e' => "Des acheteurs prêts à payer plus cher que le prix légal rencontrent des vendeurs tentés de contourner la règle."],
                    ['q' => "Un boulanger de quartier propose un pain légèrement différent de celui de ses voisins. Quel type de marché décrit cette situation ?", 'c' => ["La concurrence parfaite", "Le monopole pur", "L’oligopole fermé", "La concurrence monopolistique"], 'a' => 3, 'e' => "Beaucoup de vendeurs, mais des produits un peu différenciés : chacun a une petite marge de manœuvre sur son prix."],
                    ['q' => "Laquelle de ces situations constitue une barrière à l’entrée sur un marché ?", 'c' => ["Une demande en forte croissance", "Des salaires peu élevés", "Un brevet protégé par la loi", "Un grand nombre de fournisseurs"], 'a' => 2, 'e' => "Un brevet réserve l’exploitation d’une invention à son titulaire et empêche des concurrents d’entrer."],
                    ['q' => "Aïcha était prête à payer 50 DH pour un sac et l’achète 35 DH. Son surplus de consommatrice est de…", 'c' => ["35 DH", "15 DH", "50 DH", "85 DH, somme des deux prix"], 'a' => 1, 'e' => "Surplus = prix maximal accepté − prix payé = 50 − 35 = 15 DH."],
                    ['q' => "Un seul vendeur de glaces règne sur la plage et double ses prix en août. Un second vendeur s’installe. À terme, le prix tend à…", 'c' => ["rester doublé", "encore monter", "se figer par décret", "baisser"], 'a' => 3, 'e' => "L’arrivée d’un concurrent oblige à attirer les clients par des prix plus bas : la concurrence discipline les prix."],
                ],
            ],
            [
                'title' => "Production et facteurs de production",
                'description' => "Travail, capital, productivité, coûts et profit de l’entreprise.",
                'questions' => [
                    ['q' => "Une menuiserie emploie 5 ouvriers, des machines et du bois. Quel élément correspond au capital productif ?", 'c' => ["Les ouvriers", "Le bois acheté", "Les machines", "Le salaire versé"], 'a' => 2, 'e' => "Le capital est ce qui sert durablement à produire (machines, locaux). Le bois est consommé dans la fabrication, les ouvriers sont du travail."],
                    ['q' => "Une usine fabrique 600 pièces par jour avec 20 ouvriers. Quelle est la productivité par ouvrier ?", 'c' => ["30 pièces", "12 pièces", "120 pièces", "3 pièces"], 'a' => 0, 'e' => "Productivité = production ÷ nombre de travailleurs = 600 ÷ 20 = 30 pièces."],
                    ['q' => "Une boulangerie achète 400 DH de farine et vend 1 000 DH de pain. Quelle est sa valeur ajoutée ?", 'c' => ["1 400 DH", "400 DH", "1 000 DH", "600 DH"], 'a' => 3, 'e' => "Valeur ajoutée = production − consommations intermédiaires = 1 000 − 400 = 600 DH."],
                    ['q' => "Dans une conserverie, quel coût reste inchangé quand la production varie à court terme ?", 'c' => ["Le coût des matières premières", "Le loyer de l’atelier", "L’emballage par boîte", "Les heures supplémentaires payées"], 'a' => 1, 'e' => "Le loyer se paie que l’on produise peu ou beaucoup : c’est un coût fixe. Matières et emballage suivent le volume."],
                    ['q' => "On ajoute des ouvriers dans un petit atelier sans acheter de machines. Passé un certain seuil, la production gagnée avec chaque nouvel ouvrier…", 'c' => ["s’accroît de plus en plus", "reste constante à l’infini", "devient négative dès le premier", "diminue"], 'a' => 3, 'e' => "Ils se partagent les mêmes machines et se gênent : ce sont les rendements marginaux décroissants."],
                    ['q' => "Le coût total d’une production de 250 unités est de 5 000 DH. Le coût moyen par unité vaut…", 'c' => ["20 DH", "25 DH", "200 DH", "12,5 DH"], 'a' => 0, 'e' => "Coût moyen = coût total ÷ quantité = 5 000 ÷ 250 = 20 DH."],
                    ['q' => "En économie, on appelle « long terme » la période pendant laquelle…", 'c' => ["les prix sont gelés", "tous les facteurs de production peuvent être ajustés", "seul le travail peut varier", "l’entreprise cesse de produire"], 'a' => 1, 'e' => "À court terme certains facteurs (locaux, machines) sont fixes ; à long terme l’entreprise peut tout modifier."],
                    ['q' => "Une entreprise encaisse 12 000 DH de recettes pour 9 500 DH de coûts totaux. Son profit est de…", 'c' => ["21 500 DH", "1 200 DH", "2 500 DH", "9 500 DH"], 'a' => 2, 'e' => "Profit = recettes − coûts = 12 000 − 9 500 = 2 500 DH."],
                    ['q' => "Le coût moyen baisse parce que l’entreprise produit davantage (achats en gros, machines mieux utilisées). On parle de…", 'c' => ["rendements décroissants", "coûts d’opportunité", "déséconomies d’échelle", "économies d’échelle"], 'a' => 3, 'e' => "Produire en grande quantité répartit les coûts fixes sur plus d’unités : ce sont des économies d’échelle."],
                    ['q' => "Un pêcheur de Safi et une usine de conserves de sardines relèvent respectivement de quels secteurs ?", 'c' => ["Primaire, puis tertiaire", "Primaire, puis secondaire", "Secondaire, puis tertiaire", "Secondaire, puis primaire"], 'a' => 1, 'e' => "La pêche prélève une ressource naturelle (primaire) ; la mise en conserve la transforme (secondaire)."],
                ],
            ],
            [
                'title' => "Consommation et comportement des ménages",
                'description' => "Revenu, épargne, utilité et choix de consommation des ménages.",
                'questions' => [
                    ['q' => "Un ménage reçoit 10 000 DH dans le mois et en dépense 8 000. Les 2 000 DH restants représentent…", 'c' => ["une consommation de 2 000 DH", "une épargne de 2 000 DH", "un déficit de 2 000 DH", "un crédit de 2 000 DH"], 'a' => 1, 'e' => "L’épargne est la part du revenu qui n’est pas consommée."],
                    ['q' => "Revenu primaire d’un ménage : 7 000 DH. Prélèvements obligatoires : 1 000 DH. Prestations sociales reçues : 500 DH. Quel est son revenu disponible ?", 'c' => ["8 500 DH", "6 000 DH", "6 500 DH", "7 000 DH, sans changement"], 'a' => 2, 'e' => "Revenu disponible = 7 000 − 1 000 + 500 = 6 500 DH."],
                    ['q' => "À mesure que le revenu d’un ménage augmente, la part de son budget consacrée à l’alimentation tend à…", 'c' => ["diminuer", "augmenter", "rester identique", "doubler"], 'a' => 0, 'e' => "C’est la loi d’Engel : l’alimentation absorbe moins du budget quand le revenu monte, même si les dépenses totales augmentent."],
                    ['q' => "Au troisième verre de jus d’orange d’affilée, Yassine apprécie moins qu’au premier. Quelle notion explique cela ?", 'c' => ["Les rendements d’échelle croissants", "Le coût d’opportunité du temps", "Le multiplicateur d’investissement", "L’utilité marginale décroissante"], 'a' => 3, 'e' => "Chaque unité consommée en plus procure une satisfaction supplémentaire plus faible que la précédente."],
                    ['q' => "Quand son revenu monte, Hind achète moins de pain industriel bas de gamme et plus de pain artisanal. Pour elle, le pain bas de gamme est un bien…", 'c' => ["de luxe", "complémentaire", "inférieur", "public"], 'a' => 2, 'e' => "Un bien inférieur voit sa demande baisser quand le revenu augmente, car on lui préfère une version de meilleure qualité."],
                    ['q' => "Quel facteur influence le plus directement la consommation d’un ménage à court terme ?", 'c' => ["Son revenu disponible", "Le taux de change du dirham", "Le niveau du PIB mondial", "Le nombre de banques du pays"], 'a' => 0, 'e' => "On consomme avant tout avec ce que l’on peut dépenser : le revenu disponible fixe l’enveloppe du budget."],
                    ['q' => "Pourquoi un ménage constitue-t-il une épargne de précaution ?", 'c' => ["Pour payer moins d’impôts", "Pour faire face à un imprévu", "Pour faire monter les prix", "Pour accroître ses besoins"], 'a' => 1, 'e' => "Une panne, une maladie ou une perte d’emploi peuvent survenir : cette réserve évite de s’endetter dans l’urgence."],
                    ['q' => "Le salaire de Nadia reste fixé à 5 000 DH alors que les prix montent d’environ 4 %. Son pouvoir d’achat…", 'c' => ["augmente d’environ 4 %", "reste inchangé en valeur réelle", "augmente un peu grâce aux prix", "baisse d’environ 4 %"], 'a' => 3, 'e' => "Avec la même somme elle achète moins de produits : le pouvoir d’achat suit le revenu corrigé de l’évolution des prix."],
                    ['q' => "Acheter un réfrigérateur à crédit revient à…", 'c' => ["épargner avant d’acheter", "revenir sur son achat sans frais", "consommer maintenant et payer plus tard", "payer moins cher qu’au comptant"], 'a' => 2, 'e' => "Le crédit avance la consommation grâce à un revenu futur, mais les intérêts rendent le total plus élevé."],
                    ['q' => "La farine achetée par une boulangerie pour fabriquer son pain relève de la consommation…", 'c' => ["intermédiaire", "finale", "collective", "ostentatoire"], 'a' => 0, 'e' => "Elle est transformée pendant la production ; seule la consommation faite pour satisfaire un besoin directement est finale."],
                ],
            ],
            [
                'title' => "Monnaie, banques et système financier",
                'description' => "Fonctions de la monnaie, rôle des banques, intérêts, inflation et marchés financiers.",
                'questions' => [
                    ['q' => "Le dirham permet de comparer la valeur d’un kilo de sucre et celle d’une coupe de cheveux. Quelle fonction de la monnaie est à l’œuvre ?", 'c' => ["Réserve de valeur", "Moyen de paiement", "Unité de compte", "Instrument de crédit"], 'a' => 2, 'e' => "Exprimer tous les prix dans la même unité permet de les comparer : c’est la fonction d’unité de compte."],
                    ['q' => "Quel inconvénient du troc la monnaie a-t-elle permis de lever ?", 'c' => ["Le manque de marchandises à échanger", "Il faut que chacun veuille ce que l’autre offre", "L’absence totale de marchés", "Le trop grand nombre d’acheteurs"], 'a' => 1, 'e' => "Sans monnaie, il faut trouver une double coïncidence des besoins ; avec elle, on vend d’abord, on achète ensuite."],
                    ['q' => "Bank Al-Maghrib est…", 'c' => ["une banque commerciale parmi d’autres", "un ministère du gouvernement", "la bourse de Casablanca", "la banque centrale du Maroc"], 'a' => 3, 'e' => "Elle émet les billets, conduit la politique monétaire et supervise les banques du pays."],
                    ['q' => "On emprunte 10 000 DH à 5 % par an, intérêt simple. Quel est l’intérêt dû au bout d’un an ?", 'c' => ["500 DH", "50 DH", "5 000 DH", "10 500 DH"], 'a' => 0, 'e' => "Intérêt = 10 000 × 5 % = 500 DH. Le total remboursé serait de 10 500 DH, mais cela comprend aussi le capital."],
                    ['q' => "Comment une banque commerciale gagne-t-elle l’essentiel de ses revenus ?", 'c' => ["En imprimant elle-même les billets du pays", "En fixant le taux directeur de l’économie", "Sur l’écart entre crédits et dépôts", "En collectant l’impôt pour l’État"], 'a' => 2, 'e' => "Elle prête à un taux plus élevé que celui qu’elle verse aux déposants : la marge couvre ses frais et son bénéfice."],
                    ['q' => "Une inflation de 3 % par an signifie que…", 'c' => ["la monnaie gagne 3 % de valeur", "les prix montent en moyenne de 3 %", "chaque produit coûte 3 % de plus", "le PIB augmente de 3 %"], 'a' => 1, 'e' => "L’inflation mesure la hausse du niveau général des prix ; certains prix montent plus, d’autres moins, voire baissent."],
                    ['q' => "La banque centrale relève son taux directeur. Quel effet attend-on sur le coût des crédits bancaires ?", 'c' => ["Il baisse nettement", "Il disparaît", "Il reste figé", "Il tend à augmenter"], 'a' => 3, 'e' => "Les banques se refinancent plus cher et répercutent la hausse sur leurs clients, ce qui freine l’emprunt."],
                    ['q' => "Acheter une action d’une entreprise cotée, c’est…", 'c' => ["détenir une part de son capital", "lui prêter de l’argent à taux fixé", "souscrire un dépôt à terme chez elle", "financer le budget de l’État"], 'a' => 0, 'e' => "L’actionnaire est copropriétaire et touche des dividendes ; le prêteur, lui, détient une obligation."],
                    ['q' => "Un virement de 2 000 DH entre deux comptes bancaires utilise surtout…", 'c' => ["des pièces de monnaie", "des billets de banque", "de la monnaie scripturale", "des lingots d’or"], 'a' => 2, 'e' => "La monnaie scripturale n’existe que sous forme d’écritures dans les comptes ; le virement déplace ces écritures."],
                    ['q' => "1 euro vaut 11 MAD. Un touriste change 200 euros. Combien de dirhams reçoit-il, hors frais ?", 'c' => ["2 000 MAD", "2 200 MAD", "environ 18 MAD", "2 400 MAD"], 'a' => 1, 'e' => "On multiplie : 200 × 11 = 2 200 MAD. Diviser par 11 donnerait environ 18, ce qui est le sens inverse."],
                ],
            ],
            [
                'title' => "Indicateurs économiques fondamentaux",
                'description' => "PIB, chômage, inflation, croissance et autres chiffres pour lire une économie.",
                'questions' => [
                    ['q' => "Le PIB mesure…", 'c' => ["la production annuelle sur le territoire", "les exportations d’un pays", "le patrimoine total des habitants", "le solde du budget de l’État"], 'a' => 0, 'e' => "Le produit intérieur brut mesure la richesse produite à l’intérieur d’un pays sur une période, pas la richesse accumulée."],
                    ['q' => "La population active d’un pays compte 1 000 000 de personnes, dont 90 000 chômeurs. Quel est le taux de chômage ?", 'c' => ["90 %", "0,9 %", "11 %", "9 %"], 'a' => 3, 'e' => "Taux de chômage = chômeurs ÷ population active = 90 000 ÷ 1 000 000 = 9 %."],
                    ['q' => "Un panier de courses coûtait 200 DH l’an dernier et 210 DH cette année. Quelle est l’inflation ?", 'c' => ["2 %", "5 %", "10 %", "21 %"], 'a' => 1, 'e' => "La hausse est de 10 DH sur 200 DH, soit 10 ÷ 200 = 5 %."],
                    ['q' => "Le PIB nominal progresse de 6 % alors que les prix augmentent de 4 %. La croissance réelle est proche de…", 'c' => ["10 %", "24 %", "2 %", "6 %"], 'a' => 2, 'e' => "On retire l’effet des prix : environ 6 % − 4 % = 2 % de production supplémentaire en volume."],
                    ['q' => "Un pays a un PIB de 1 200 milliards de DH pour 40 millions d’habitants. Quel est son PIB par habitant ?", 'c' => ["30 000 DH", "300 000 DH", "48 000 DH", "3 000 DH"], 'a' => 0, 'e' => "1 200 milliards ÷ 40 millions = 30 000 DH par habitant."],
                    ['q' => "Un pays exporte pour 300 milliards de DH et importe pour 340 milliards. Quel est son solde commercial ?", 'c' => ["+40 milliards, excédent", "+640 milliards", "0, équilibre", "−40 milliards, déficit"], 'a' => 3, 'e' => "Solde = exportations − importations = 300 − 340 = −40 : le pays achète plus qu’il ne vend."],
                    ['q' => "Un PIB réel passe de 500 à 520 milliards de DH. Le taux de croissance est de…", 'c' => ["20 %", "4 %", "2 %", "5,2 %"], 'a' => 1, 'e' => "(520 − 500) ÷ 500 = 0,04, soit 4 %. Le « 20 » est l’écart en valeur, pas un pourcentage."],
                    ['q' => "Quels éléments l’indice de développement humain (IDH) combine-t-il ?", 'c' => ["PIB, inflation et chômage", "Exportations, importations et dette", "Santé, éducation et niveau de vie", "Population, superficie et climat"], 'a' => 2, 'e' => "L’IDH complète le PIB avec l’espérance de vie, la durée de scolarisation et le revenu par habitant."],
                    ['q' => "Quel indicateur sert à mesurer la répartition des revenus plutôt que leur montant total ?", 'c' => ["Le PIB", "Le taux de chômage", "L’indice des prix", "L’indice de Gini"], 'a' => 3, 'e' => "Le coefficient de Gini va de 0 (égalité parfaite) à 1 (un seul détient tout) et renseigne sur les inégalités."],
                    ['q' => "Pourquoi le travail domestique non rémunéré ne figure-t-il pas dans le PIB ?", 'c' => ["Parce qu’il n’est pas vendu sur un marché", "Parce qu’il est illégal d’en tenir la comptabilité", "Parce qu’il n’a aucune utilité pour la famille", "Parce qu’il est inclus dans les impôts payés"], 'a' => 0, 'e' => "Le PIB compte la production marchande ou comptabilisée ; cuisiner ou garder ses enfants chez soi n’est pas échangé, donc non mesuré."],
                ],
            ],
            [
                'title' => "Commerce international et économie mondiale",
                'description' => "Échanges entre pays, avantage comparatif, protection douanière et mondialisation.",
                'questions' => [
                    ['q' => "Le Maroc vend des agrumes à la France. Du point de vue marocain, cette vente est…", 'c' => ["une importation", "une exportation", "un investissement direct", "un transfert de revenus"], 'a' => 1, 'e' => "Un bien vendu à l’étranger est une exportation ; ce qui est acheté à l’étranger est une importation."],
                    ['q' => "Selon la théorie de l’avantage comparatif, un pays gagne à se spécialiser dans…", 'c' => ["le bien au plus faible coût d’opportunité", "le bien dont le prix mondial est le plus élevé", "le bien qu’il consomme le plus", "le bien que ses voisins ne produisent pas"], 'a' => 0, 'e' => "Chacun produit ce qui lui fait renoncer à le moins d’autres productions, puis échange : tous les pays peuvent y gagner."],
                    ['q' => "Un droit de douane est…", 'c' => ["une aide versée aux exportateurs", "une limite fixée en quantité", "une taxe sur les bénéfices", "une taxe sur les produits importés"], 'a' => 3, 'e' => "Il renchérit les produits étrangers à leur entrée ; la limite en quantité, elle, s’appelle un quota."],
                    ['q' => "Le dirham s’apprécie face à l’euro. Pour un Marocain, un séjour à Paris devient…", 'c' => ["plus coûteux en dirhams", "identique, le change n’agit pas", "moins coûteux en dirhams", "limité par un quota de change"], 'a' => 2, 'e' => "Un dirham plus fort achète plus d’euros : les dépenses faites en euros reviennent moins cher."],
                    ['q' => "Un constructeur étranger ouvre une usine au Maroc. Il s’agit d’un…", 'c' => ["investissement direct étranger", "emprunt d’État", "droit de douane", "quota à l’importation"], 'a' => 0, 'e' => "Une entreprise qui s’installe et contrôle une activité dans un autre pays réalise un investissement direct à l’étranger (IDE)."],
                    ['q' => "Quel est le rôle de l’OMC ?", 'c' => ["Créer une monnaie mondiale commune", "Financer les pays en difficulté de paiement", "Fixer les prix mondiaux du pétrole", "Encadrer les règles du commerce mondial"], 'a' => 3, 'e' => "L’Organisation mondiale du commerce négocie et surveille les règles ; le financement des pays en difficulté relève plutôt du FMI."],
                    ['q' => "Quel argument avance-t-on pour protéger une « industrie naissante » par des droits de douane ?", 'c' => ["Faire baisser le prix payé par les clients", "Éviter toute hausse des prix intérieurs", "Lui donner le temps de grandir", "Accroître la dépendance aux importations"], 'a' => 2, 'e' => "Une jeune entreprise ne peut pas rivaliser tout de suite avec les géants étrangers ; on la protège le temps qu’elle devienne compétitive."],
                    ['q' => "La mondialisation économique désigne…", 'c' => ["le repli des économies sur elles-mêmes", "l’interdépendance croissante des économies", "la fusion de toutes les monnaies", "la suppression des entreprises nationales"], 'a' => 1, 'e' => "Les échanges de biens, de capitaux et d’informations relient de plus en plus les pays, sans pour autant supprimer les monnaies ou les États."],
                    ['q' => "Un pays importe plus qu’il n’exporte depuis des années. Comment son déficit est-il financé ?", 'c' => ["En créant des devises étrangères à volonté", "En relevant ses droits de douane", "Par l’épargne de ses seuls ménages", "Par des entrées de capitaux et des emprunts"], 'a' => 3, 'e' => "Le pays doit se procurer des devises : investissements étrangers, emprunts extérieurs ou recours à ses réserves. Il ne peut pas les fabriquer."],
                    ['q' => "Les envois d’argent des Marocains résidant à l’étranger vers leur famille sont une source de…", 'c' => ["devises pour le pays", "droits de douane", "impôts sur les sociétés", "dépenses publiques"], 'a' => 0, 'e' => "Ces transferts apportent des euros et d’autres monnaies, qui améliorent les entrées de devises du pays."],
                ],
            ],
            [
                'title' => "Politiques économiques fondamentales",
                'description' => "Politique budgétaire, politique monétaire et objectifs de l’action de l’État.",
                'questions' => [
                    ['q' => "Quel outil relève de la politique budgétaire ?", 'c' => ["Le taux directeur", "Le taux de change", "Les réserves obligatoires", "Le niveau des dépenses publiques"], 'a' => 3, 'e' => "La politique budgétaire joue sur les dépenses et les impôts de l’État ; les trois autres outils dépendent de la banque centrale."],
                    ['q' => "Quelle institution mène la politique monétaire d’un pays ?", 'c' => ["Le Parlement", "La banque centrale", "La Cour des comptes", "L’administration fiscale"], 'a' => 1, 'e' => "Elle agit sur les taux d’intérêt et la quantité de monnaie en circulation."],
                    ['q' => "En pleine récession, quelle mesure correspond à une relance budgétaire ?", 'c' => ["Augmenter les impôts pour réduire le déficit", "Geler les salaires publics", "Investir davantage dans les infrastructures", "Réduire en priorité la dette"], 'a' => 2, 'e' => "Plus de dépenses publiques ou moins d’impôts soutiennent la demande et donc l’activité."],
                    ['q' => "Les recettes de l’État sont de 280 milliards de DH et ses dépenses de 310 milliards. Quel est le solde budgétaire ?", 'c' => ["Déficit de 30 milliards", "Excédent de 30 milliards", "Équilibre", "Déficit de 590 milliards"], 'a' => 0, 'e' => "Solde = recettes − dépenses = 280 − 310 = −30 : l’État dépense plus qu’il ne reçoit."],
                    ['q' => "Pour freiner une inflation forte, la banque centrale a tendance à…", 'c' => ["baisser son taux directeur", "imprimer plus de billets", "relever son taux directeur", "supprimer les réserves obligatoires"], 'a' => 2, 'e' => "Un crédit plus cher refroidit la demande et calme la hausse des prix ; baisser les taux produirait l’effet inverse."],
                    ['q' => "Dans un impôt progressif, le taux appliqué…", 'c' => ["est identique pour chacun", "augmente avec le revenu", "diminue quand le revenu monte", "dépend de l’âge du contribuable"], 'a' => 1, 'e' => "Plus le revenu s’élève, plus la part prélevée sur la tranche supérieure est forte : c’est ce qui distingue la progressivité de l’impôt proportionnel."],
                    ['q' => "Qu’appelle-t-on dette publique ?", 'c' => ["Les réserves de change de la banque centrale", "Le déficit d’une seule année", "Le total des impôts d’un exercice", "Le cumul des emprunts non remboursés"], 'a' => 3, 'e' => "Le déficit est un flux annuel ; la dette est le stock accumulé des emprunts qu’il reste à rendre."],
                    ['q' => "L’État subventionne le gaz butane. Pour les ménages, le prix payé est…", 'c' => ["supérieur au coût réel", "identique au coût réel", "inférieur au coût réel", "fixé chaque jour par la bourse"], 'a' => 2, 'e' => "L’État prend en charge une partie du coût, ce qui permet de vendre le produit moins cher que ce qu’il coûte vraiment."],
                    ['q' => "Quelle mesure vise surtout le chômage structurel, lié à un manque de compétences adaptées ?", 'c' => ["La formation professionnelle", "La baisse temporaire des impôts", "Le relèvement du taux directeur", "Le gel des dépenses de l’État"], 'a' => 0, 'e' => "Quand les emplois existent mais que les qualifications ne correspondent pas, il faut former ; soutenir la demande ne suffit pas."],
                    ['q' => "Lequel de ces objectifs fait partie du « carré magique » des politiques économiques ?", 'c' => ["Un budget de l’État excédentaire", "Le plein-emploi", "L’augmentation du taux directeur", "La hausse des droits de douane"], 'a' => 1, 'e' => "Les quatre objectifs sont : croissance, plein-emploi, stabilité des prix, équilibre extérieur."],
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
