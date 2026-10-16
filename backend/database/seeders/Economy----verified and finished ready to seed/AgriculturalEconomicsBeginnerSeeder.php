<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class AgriculturalEconomicsBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'agricultural-economics')->firstOrFail();

        $settings = [
            ['duration' => 20, 'passing_score' => 50],
            ['duration' => 20, 'passing_score' => 55],
            ['duration' => 20, 'passing_score' => 60],
            ['duration' => 20, 'passing_score' => 60],
            ['duration' => 20, 'passing_score' => 60],
            ['duration' => 20, 'passing_score' => 65],
        ];

        // 'a' = index (0-based) de la bonne réponse dans 'c'
        $quizzes = [
            [
                'title' => "Fondamentaux de l’économie agricole",
                'description' => "Révision des notions de base : facteurs de production, rendement, productivité et coût d’opportunité dans une exploitation agricole.",
                'questions' => [
                    ['q' => "Une exploitation produit du blé grâce à la terre, au travail des ouvriers et à des machines. Comment appelle-t-on ces éléments ?", 'c' => ["Des biens de consommation finale", "Des recettes d’exploitation", "Des facteurs de production", "Des subventions publiques"], 'a' => 2, 'e' => "Terre, travail et capital sont combinés pour produire : ce sont les facteurs de production. Retiens le trio T-T-C : terre, travail, capital."],
                    ['q' => "Un agriculteur peut cultiver sa parcelle en blé ou en légumes, pas les deux la même saison. Que représente le revenu du légume auquel il renonce en semant du blé ?", 'c' => ["Un coût d’opportunité", "Un coût fixe", "Une productivité marginale", "Un coût de production moyen"], 'a' => 0, 'e' => "Choisir une option, c’est abandonner la meilleure alternative : ce renoncement s’appelle le coût d’opportunité, même sans dépense visible."],
                    ['q' => "Une ferme passe de 100 à 120 tonnes de maïs avec le même nombre de travailleurs. De combien a augmenté la productivité du travail ?", 'c' => ["De 120 %", "De 12 %", "De 100 %", "De 20 %"], 'a' => 3, 'e' => "Même main-d’œuvre, donc la production par travailleur évolue comme la production : (120 − 100) ÷ 100 = 20 %."],
                    ['q' => "Parmi ces éléments liés à une culture de tomates, lequel est l’intrus ?", 'c' => ["Les semences achetées", "Le prix de vente au souk", "L’eau d’irrigation", "L’engrais épandu"], 'a' => 1, 'e' => "Semences, eau et engrais sont consommés pour produire : ce sont des intrants. Le prix de vente se forme sur le marché, il n’entre pas dans le champ."],
                    ['q' => "Une sécheresse réduit fortement les récoltes de céréales d’une région. Que devient l’offre locale, toutes choses égales par ailleurs ?", 'c' => ["Elle augmente", "Elle diminue", "Elle reste identique", "Elle devient parfaitement élastique"], 'a' => 1, 'e' => "Moins de grain à vendre : la courbe d’offre se décale vers la gauche. Le prix local a donc tendance à monter."],
                    ['q' => "Quelle mesure traduit une productivité, et non un simple volume de production ?", 'c' => ["Cent quintaux récoltés au total", "Quarante hectares cultivés", "Un chiffre d’affaires de 300 000 DH", "Dix quintaux de blé par hectare"], 'a' => 3, 'e' => "La productivité rapporte la production à un intrant (ici la terre) : c’est un ratio. Les autres chiffres sont des totaux."],
                    ['q' => "Une coopérative annonce : « production en hausse de 10 %, productivité inchangée ». Que suggère cette phrase ?", 'c' => ["Les intrants ont crû de 10 %", "Les prix de vente ont monté de 10 %", "Les coûts de production ont baissé de 10 %", "Les agriculteurs ont changé de culture"], 'a' => 0, 'e' => "Si la production et les intrants montent dans la même proportion, leur rapport ne bouge pas : produire plus n’est pas produire mieux."],
                    ['q' => "Pourquoi la terre agricole est-elle un facteur de production peu extensible ?", 'c' => ["Elle disparaît à chaque récolte", "Elle ne peut pas être louée", "Sa surface est limitée et immobile", "Elle appartient à l’État dans la plupart des pays"], 'a' => 2, 'e' => "Contrairement à une machine, on ne fabrique pas d’hectares supplémentaires à un endroit donné. D’où l’importance de la location et du rendement par hectare."],
                    ['q' => "Un maraîcher encaisse l’essentiel de ses recettes en trois mois, mais paie des charges toute l’année. Quel problème en découle ?", 'c' => ["Un excès de main-d’œuvre permanent", "Une hausse automatique des prix toute l’année", "Une disparition de ses coûts fixes", "Un besoin de trésorerie entre deux récoltes"], 'a' => 3, 'e' => "Recettes concentrées, dépenses étalées : il faut financer les mois creux, par l’épargne ou le crédit. C’est le rythme des saisons qui crée ce décalage."],
                    ['q' => "Une famille cultive ses petits champs avec très peu de machines mais beaucoup de bras disponibles. Quel type de production pratique-t-elle ?", 'c' => ["Une production intensive en travail", "Une production intensive en capital", "Une production sans aucun facteur de production", "Une production intensive en innovation"], 'a' => 0, 'e' => "Quand le travail domine et le capital est rare, on parle de production intensive en travail. L’inverse (beaucoup de machines, peu de bras) est intensif en capital."],
                    ['q' => "Un petit exploitant sème à la fois de l’orge, des lentilles et de la luzerne au lieu d’une seule céréale. Quel avantage économique en tire-t-il ?", 'c' => ["Les prix de ses trois productions montent ensemble", "Il n’a plus besoin d’eau ni d’engrais", "Une culture ratée ne ruine pas tout son revenu", "Il évite les coûts de main-d’œuvre"], 'a' => 2, 'e' => "Ne pas mettre tous ses œufs dans le même panier : des cultures différentes réagissent différemment au climat et aux prix, ce qui stabilise le revenu."],
                    ['q' => "Un tracteur, une serre et une pompe d’irrigation relèvent de quel facteur de production ?", 'c' => ["Du travail", "Du capital", "De la terre", "Du revenu"], 'a' => 1, 'e' => "Ce sont des biens durables fabriqués pour produire : du capital physique. Le travail désigne les personnes, la terre les ressources naturelles du sol."],
                ],
            ],
            [
                'title' => "Marchés agricoles, offre et demande",
                'description' => "Comprendre comment l’offre, la demande et les prix s’articulent sur les marchés de produits agricoles.",
                'questions' => [
                    ['q' => "Après une excellente récolte de tomates, la demande restant la même, que devient le prix de la tomate ?", 'c' => ["Il monte", "Il baisse", "Il reste inchangé", "Il double"], 'a' => 1, 'e' => "Plus de tomates à écouler face à la même demande : pour vendre tout le stock, il faut accepter un prix plus bas."],
                    ['q' => "À prix et revenu inchangés, une campagne de santé publique fait aimer l’huile d’olive. Que se passe-t-il sur le marché ?", 'c' => ["On se déplace vers le bas le long de la courbe de demande", "La courbe d’offre se déplace vers la gauche", "La courbe de demande se déplace vers la gauche", "La courbe de demande se déplace vers la droite"], 'a' => 3, 'e' => "Un changement de goût modifie la demande à chaque prix : c’est un déplacement de la courbe, pas un mouvement le long de celle-ci."],
                    ['q' => "Un agriculteur vend 500 kg de carottes à 4 DH le kilo. Quelle est sa recette totale ?", 'c' => ["2 000 DH", "125 DH", "504 DH", "20 000 DH"], 'a' => 0, 'e' => "Recette = prix × quantité = 4 × 500 = 2 000 DH. Diviser (500 ÷ 4) donnerait 125, une erreur classique."],
                    ['q' => "Les engrais deviennent beaucoup plus chers. Quel effet attendre sur le marché du blé, toutes choses égales par ailleurs ?", 'c' => ["L’offre progresse et le prix d’équilibre tend à baisser", "La demande recule et le prix tend à baisser", "L’offre recule et le prix d’équilibre tend à monter", "L’offre reste stable et la demande monte"], 'a' => 2, 'e' => "Un intrant plus coûteux fait remonter le coût de production, donc l’offre se contracte à chaque prix. Moins de blé disponible, prix plus élevé."],
                    ['q' => "Pourquoi le prix de produits comme les tomates varie-t-il tant d’une année à l’autre ?", 'c' => ["Les consommateurs changent de goût chaque mois", "Les agriculteurs se concertent pour fixer le prix", "L’offre suit le climat, la demande réagit peu", "L’État fixe le prix tous les jours"], 'a' => 2, 'e' => "Une récolte variable décale l’offre, et comme on mange à peu près la même quantité quel que soit le prix, c’est le prix qui encaisse l’essentiel du choc."],
                    ['q' => "Au souk, le kilo d’oranges passe de 6 à 4 DH. Que se passe-t-il pour la demande, toutes choses égales par ailleurs ?", 'c' => ["La quantité demandée augmente", "La quantité demandée diminue", "La courbe de demande se déplace vers la gauche", "La demande devient insensible au prix"], 'a' => 0, 'e' => "C’est la loi de la demande : moins cher, plus acheté. Le mouvement se fait le long de la courbe, qui elle ne bouge pas."],
                    ['q' => "Les autorités fixent un prix minimum du lait supérieur au prix d’équilibre. Que constate-t-on ?", 'c' => ["Une quantité demandée supérieure à la quantité offerte", "Un marché qui s’équilibre aussitôt", "Un prix de marché sous le prix d’équilibre", "Une offre supérieure à la demande"], 'a' => 3, 'e' => "À un prix trop haut, les éleveurs produisent davantage et les acheteurs se détournent : il reste un excédent invendu, sauf si l’État le rachète."],
                    ['q' => "Le prix des clémentines baisse nettement. Que devient la demande de mandarines, un produit proche, toutes choses égales ?", 'c' => ["Elle augmente, car les fruits sont complémentaires", "Elle diminue : on se reporte sur les clémentines", "Elle reste inchangée puisque ce sont deux produits", "Elle disparaît entièrement du marché"], 'a' => 1, 'e' => "Pour des biens substituables, la baisse du prix de l’un détourne les acheteurs de l’autre. Les complémentaires (pain et beurre) évolueraient dans le même sens."],
                    ['q' => "Un négociant achète des pommes de terre à la récolte et les revend en fin d’hiver. Quel rôle joue-t-il sur le marché ?", 'c' => ["Il reporte l’offre dans le temps et lisse les prix", "Il fait baisser la demande hors saison", "Il augmente la production de la saison suivante", "Il remplace le capital par du travail"], 'a' => 0, 'e' => "En achetant quand c’est abondant et en revendant quand c’est rare, il amortit la chute du prix à la récolte et la flambée de fin d’hiver."],
                    ['q' => "Sur un marché de gros de légumes, aucun vendeur n’est assez gros pour influencer le prix. Comment qualifie-t-on ces vendeurs ?", 'c' => ["Des fixeurs de prix", "Des monopoleurs", "Des intermédiaires obligés", "Des preneurs de prix"], 'a' => 3, 'e' => "Quand les acteurs sont nombreux et petits, ils subissent le prix du marché : ils sont preneurs de prix (concurrence)."],
                    ['q' => "La demande de pommes est Qd = 100 − 5P et l’offre Qs = 20 + 3P (P en DH par kilo, Q en tonnes). Quel est le prix d’équilibre ?", 'c' => ["8 DH", "10 DH", "12,5 DH", "5 DH"], 'a' => 1, 'e' => "À l’équilibre Qd = Qs : 100 − 5P = 20 + 3P, donc 80 = 8P et P = 10 DH (quantité échangée : 50 tonnes)."],
                    ['q' => "Un élève écrit : « La récolte est excellente, donc la demande de blé baisse. » Où est l’erreur ?", 'c' => ["Une bonne récolte réduit les coûts mais jamais l’offre", "Une bonne récolte n’influence ni les quantités ni les prix", "C’est l’offre qui augmente, pas la demande qui baisse", "Il n’y a pas d’erreur, la demande suit la récolte"], 'a' => 2, 'e' => "La récolte touche d’abord ce qui est produit : l’offre se décale vers la droite. La demande dépend des goûts, du revenu et des prix des autres biens."],
                ],
            ],
            [
                'title' => "Risque, revenus et soutien à l’agriculture",
                'description' => "Identifier les risques qui pèsent sur les revenus agricoles et les outils simples d’assurance, d’épargne et de soutien public.",
                'questions' => [
                    ['q' => "Grêle, maladie des arbres et gel tardif menacent un verger. De quel type de risques s’agit-il ?", 'c' => ["Des risques de marché liés aux prix", "Des risques financiers liés au crédit", "Des risques politiques liés à la réglementation", "Des risques de production liés à la nature"], 'a' => 3, 'e' => "Ces aléas climatiques et biologiques jouent sur les quantités récoltées : c’est le risque de production, très spécifique à l’agriculture."],
                    ['q' => "Une année de récolte exceptionnelle, le prix s’effondre et le revenu du producteur baisse. Quel risque s’est réalisé ?", 'c' => ["Le risque de rendement", "Le risque de prix", "Le risque de crédit", "Le risque de change"], 'a' => 1, 'e' => "Le rendement a été excellent : ce n’est pas lui qui pose problème. C’est le prix qui a chuté, plus vite que la quantité n’a augmenté."],
                    ['q' => "Un arboriculteur paie chaque année une prime à une assurance contre la grêle. Que reçoit-il en échange ?", 'c' => ["La certitude de vendre à un prix élevé sur le marché", "Une récolte plus abondante chaque année", "Une indemnité si la grêle détruit sa récolte", "Une exonération de ses charges fixes"], 'a' => 2, 'e' => "La prime est le prix de la protection : en cas de sinistre prévu au contrat, l’assureur compense la perte. Il ne couvre ni le prix ni le rendement normal."],
                    ['q' => "Une ferme encaisse 120 000 DH et supporte 85 000 DH de charges. Quel est son résultat avant impôt ?", 'c' => ["35 000 DH", "205 000 DH", "25 000 DH", "45 000 DH"], 'a' => 0, 'e' => "Résultat = recettes − charges = 120 000 − 85 000 = 35 000 DH. Additionner (205 000) est l’erreur à éviter."],
                    ['q' => "L’État rembourse 20 % du prix des semences achetées par les producteurs de blé. Quel effet attendre en premier lieu ?", 'c' => ["Leur coût baisse et l’offre peut augmenter", "Leur coût de production monte et l’offre recule", "Leur recette par kilo diminue mécaniquement", "Leur demande de semences recule"], 'a' => 0, 'e' => "Une subvention à l’intrant fait baisser le coût effectif : produire devient plus intéressant, ce qui pousse l’offre vers la droite."],
                    ['q' => "Le rendement moyen d’un champ est de 3 t par hectare. Une année sèche, il tombe à 1,8 t par hectare. De combien a-t-il baissé ?", 'c' => ["De près de 60 %", "De 25 %", "De 40 %", "De 18 %"], 'a' => 2, 'e' => "Perte = 3 − 1,8 = 1,2 t, soit 1,2 ÷ 3 = 40 %. Les 60 % correspondent à ce qui reste, pas à la baisse."],
                    ['q' => "Après une bonne année, un éleveur met de côté une partie de ses gains pour les années difficiles. De quoi s’agit-il ?", 'c' => ["D’un impôt volontaire sur ses ventes", "D’une épargne de précaution", "D’un investissement en machines", "D’une subvention à l’exportation"], 'a' => 1, 'e' => "Mettre de côté quand tout va bien pour tenir quand tout va mal : l’épargne de précaution lisse le revenu d’une année sur l’autre."],
                    ['q' => "En avril, un producteur de blé signe la vente de sa récolte de juin à un prix déjà fixé. Quel risque réduit-il ?", 'c' => ["Le risque de sécheresse sur ses parcelles cette année", "Le risque de hausse du prix des engrais", "Le risque de perdre ses semences", "Le risque de baisse du prix d’ici la récolte"], 'a' => 3, 'e' => "Le contrat fige le prix à l’avance : il protège d’une baisse, mais prive aussi d’une hausse éventuelle. Il ne dit rien du rendement."],
                    ['q' => "Qui supporte, en dernier ressort, le coût d’une subvention agricole financée par le budget de l’État ?", 'c' => ["Les banques qui prêtent aux agriculteurs", "Les assureurs agricoles", "Les contribuables", "Les grossistes du marché central"], 'a' => 2, 'e' => "L’argent versé aux producteurs vient des impôts : il n’y a pas de repas gratuit, quelqu’un finance la subvention."],
                    ['q' => "Un éleveur a 100 000 DH de recettes, 60 000 DH d’alimentation du bétail et 20 000 DH d’autres charges. Le lait monte de 10 % et l’aliment de 25 %, quantités inchangées. Quelle est sa nouvelle marge ?", 'c' => ["20 000 DH", "15 000 DH", "25 000 DH environ", "35 000 DH"], 'a' => 1, 'e' => "Recettes : 110 000 ; aliment : 60 000 × 1,25 = 75 000 ; autres charges : 20 000. Marge = 110 000 − 75 000 − 20 000 = 15 000 DH, en baisse malgré le prix du lait."],
                    ['q' => "Un agriculteur gagne 100 000 DH, puis 40 000 DH, puis 100 000 DH sur trois années. Quel est son revenu annuel moyen ?", 'c' => ["240 000 DH", "70 000 DH", "100 000 DH", "80 000 DH"], 'a' => 3, 'e' => "Moyenne = (100 000 + 40 000 + 100 000) ÷ 3 = 80 000 DH. Cette moyenne cache pourtant une année très creuse, d’où l’intérêt de l’épargne."],
                    ['q' => "Pourquoi un assureur a-t-il du mal à couvrir une sécheresse générale touchant tous ses clients en même temps ?", 'c' => ["Tous les sinistres surviennent ensemble", "Les agriculteurs refusent de payer une prime", "La sécheresse est un risque trop faible pour être indemnisé", "Les indemnités dépendent du prix du pétrole"], 'a' => 0, 'e' => "L’assurance repose sur le fait que peu d’assurés sont touchés à la fois. Un risque commun à tous se mutualise mal : l’État intervient parfois comme réassureur."],
                ],
            ],
            [
                'title' => "Intrants, irrigation et productivité agricole",
                'description' => "Relier intrants, irrigation et technologie aux gains de productivité, avec quelques calculs courts.",
                'questions' => [
                    ['q' => "Le premier sac d’engrais ajoute 10 quintaux de blé, le deuxième 6, le troisième 3. Quelle notion illustre cette suite ?", 'c' => ["Les rendements décroissants", "Les rendements d’échelle constants", "Les économies d’échelle", "La productivité moyenne croissante"], 'a' => 0, 'e' => "Chaque dose supplémentaire rapporte moins que la précédente, sur une terre limitée. Au-delà d’un point, ajouter de l’engrais ne vaut plus son prix."],
                    ['q' => "Une exploitation passe au goutte-à-goutte et garde la même récolte avec moins d’eau. Que gagne-t-elle ?", 'c' => ["Une productivité de la terre plus faible", "Une eau devenue gratuite", "Une meilleure productivité de l’eau", "Un doublement du rendement par hectare"], 'a' => 2, 'e' => "Même production, moins d’eau : le rapport production ÷ eau augmente. Rien n’indique en revanche que le rendement par hectare double."],
                    ['q' => "Une ferme produit 80 tonnes avec 10 travailleurs, puis 100 tonnes avec les mêmes 10 travailleurs. De combien la productivité du travail a-t-elle augmenté ?", 'c' => ["De 20 %", "De 25 %", "De 10 %", "De 125 %"], 'a' => 1, 'e' => "On passe de 8 à 10 tonnes par travailleur : (10 − 8) ÷ 8 = 25 %. Les 20 % viennent d’une base mal choisie, celle de l’arrivée."],
                    ['q' => "Une ancienne pompe consommait 10 unités d’énergie par parcelle ; la nouvelle en consomme 7 pour le même arrosage. Quelle économie réalise-t-on ?", 'c' => ["70 %", "3 %", "environ 43 %", "30 %"], 'a' => 3, 'e' => "Économie = (10 − 7) ÷ 10 = 30 % de l’énergie de départ. Diviser par 7 (43 %) fausse la base de comparaison."],
                    ['q' => "Deux voisins cultivent la même surface avec le même travail. L’un récolte 30 % de plus grâce à des semences sélectionnées. Qu’est-ce qui explique l’écart ?", 'c' => ["Un coût d’opportunité plus faible", "Une taille de marché plus grande", "Un écart de demande entre les deux fermes", "La qualité de l’intrant utilisé"], 'a' => 3, 'e' => "À surface et travail égaux, la différence vient de l’intrant : des semences adaptées donnent plus de grain par hectare."],
                    ['q' => "Avec 10 000 DH, on peut acheter de l’engrais (gain estimé : 4 t) ou réparer un canal d’irrigation (gain estimé : 7 t). Que choisir sur le seul critère du rendement obtenu ?", 'c' => ["Acheter l’engrais, car c’est le plus rapide à épandre", "Réparer le canal, plus de tonnes pour la même somme", "Partager à parts égales sans comparer", "Acheter l’engrais, qui rapporte plus de tonnes"], 'a' => 1, 'e' => "À dépense égale, on retient l’option qui produit le plus : 7 t contre 4 t. Comparer des gains par DH dépensé est le réflexe de l’économiste."],
                    ['q' => "Quel exemple illustre une hausse du rendement à l’hectare ?", 'c' => ["Passer de 3 à 4 hectares en gardant 3 t par hectare", "Vendre le blé 10 % plus cher", "Passer de 3 à 4 tonnes de blé sur la même parcelle", "Embaucher un ouvrier de plus"], 'a' => 2, 'e' => "Le rendement se mesure par unité de surface. Agrandir la ferme ou monter les prix ne change pas ce qu’un hectare produit."],
                    ['q' => "Grâce à l’irrigation, une exploitation dépend moins de la pluie. Quelle conséquence économique en découle ?", 'c' => ["Ses rendements varient moins", "Ses coûts fixes disparaissent", "Son prix de vente devient garanti", "Sa surface cultivable s’agrandit d’elle-même"], 'a' => 0, 'e' => "L’eau maîtrisée réduit l’incertitude climatique, donc la variabilité de la récolte. Elle ne protège pas du risque de prix."],
                    ['q' => "Quel est l’intrus parmi ces facteurs de gain de productivité ?", 'c' => ["L’emploi de semences sélectionnées", "Une hausse du prix du blé", "La mécanisation de la récolte", "Un système d’irrigation plus efficace"], 'a' => 1, 'e' => "Un prix plus haut augmente la recette, mais pas la quantité produite par unité d’intrant. Les trois autres font produire plus avec autant de ressources."],
                    ['q' => "Deux fermes obtiennent le même revenu total, mais la première utilise moins d’engrais et d’eau. Laquelle est la plus efficace ?", 'c' => ["La seconde, qui emploie davantage de ressources", "Les deux, puisque le revenu total est égal", "La première, autant avec moins d’intrants", "La première, qui vend son blé plus cher"], 'a' => 2, 'e' => "L’efficacité compare ce qu’on obtient à ce qu’on consomme. À résultat identique, moins d’intrants veut dire plus d’efficacité."],
                    ['q' => "Quelle dépense constitue un investissement et non une consommation intermédiaire ?", 'c' => ["L’achat d’un tracteur utilisé pendant dix ans", "L’achat d’engrais pour la prochaine campagne", "L’achat de semences de blé", "Le paiement de l’électricité de la pompe"], 'a' => 0, 'e' => "Un investissement sert sur plusieurs campagnes. Engrais, semences et énergie sont consommés dans le cycle de production."],
                    ['q' => "Un sac d’engrais coûte 300 DH et apporte 2 quintaux de blé supplémentaires, vendus 200 DH le quintal. Est-il rentable ?", 'c' => ["Non : 300 DH dépassent le prix d’un quintal", "Oui : il rapporte 600 DH au total", "Impossible de conclure sans connaître la surface", "Oui : il rapporte 400 DH pour 300 DH dépensés"], 'a' => 3, 'e' => "Gain = 2 × 200 = 400 DH contre 300 DH de coût, soit 100 DH de bénéfice net. On compare toujours le gain marginal au coût marginal."],
                ],
            ],
            [
                'title' => "Agriculture, sécurité alimentaire et économie rurale",
                'description' => "Explorer le lien entre agriculture, sécurité alimentaire, crédit, infrastructures et revenus des ménages ruraux.",
                'questions' => [
                    ['q' => "Un pays produit assez de blé, mais des ménages pauvres n’ont pas les moyens d’en acheter. Quelle dimension de la sécurité alimentaire est défaillante ?", 'c' => ["La disponibilité nationale", "L’utilisation nutritionnelle", "L’accès économique aux aliments", "La capacité d’exportation"], 'a' => 2, 'e' => "Les aliments existent, mais ne sont pas abordables pour tous. La sécurité alimentaire ne se réduit pas à la production nationale."],
                    ['q' => "Après une mauvaise récolte, le boutiquier et le coiffeur du village voient leurs ventes baisser. Comment l’expliquer ?", 'c' => ["Le revenu des champs baisse, la dépense locale aussi", "Les prix à la consommation ont tous diminué", "Les agriculteurs ont acheté davantage de machines", "Les boutiques ont perdu leur clientèle urbaine"], 'a' => 0, 'e' => "Dans un village agricole, le revenu des ménages vient des champs. S’il chute, il circule moins d’argent dans les commerces voisins."],
                    ['q' => "Une famille consomme une partie de sa récolte et vend le reste. Comment nomme-t-on la part consommée par la famille ?", 'c' => ["La commercialisation", "L’autoconsommation", "L’épargne forcée", "La consommation intermédiaire"], 'a' => 1, 'e' => "Produire pour sa propre table, sans passer par le marché : c’est l’autoconsommation, très présente chez les petits exploitants."],
                    ['q' => "Un petit agriculteur emprunte à l’automne pour semer. Pourquoi ?", 'c' => ["Il veut éviter de vendre sa récolte", "Il cherche à payer moins d’impôts", "Il compte sur la hausse du prix des engrais", "Il paie semences et travail avant la récolte"], 'a' => 3, 'e' => "Les dépenses viennent avant les recettes : le crédit comble ce décalage. Sans lui, beaucoup de petits producteurs sèmeraient moins."],
                    ['q' => "Une piste goudronnée relie un village agricole au marché de la ville. Quel effet économique direct peut-on attendre ?", 'c' => ["Un accès plus facile à un marché plus large", "Une disparition de la demande locale", "Une baisse de la qualité des produits", "Un prix imposé par les transporteurs"], 'a' => 0, 'e' => "Moins de temps et de coût de transport : le producteur peut vendre plus loin et à de meilleures conditions."],
                    ['q' => "Sur 100 tonnes de tomates récoltées, 15 tonnes sont perdues avant la vente, au prix de 4 DH le kilo. Quelle est la valeur perdue ?", 'c' => ["6 000 DH", "15 000 DH", "400 000 DH", "60 000 DH"], 'a' => 3, 'e' => "15 t = 15 000 kg, et 15 000 × 4 = 60 000 DH. Attention aux conversions de tonnes en kilos."],
                    ['q' => "Un membre d’un ménage rural travaille dans une conserverie voisine. Quel intérêt pour le ménage ?", 'c' => ["Une garantie de prix pour sa récolte", "Un revenu hors champ, indépendant de la météo", "Une hausse du rendement de ses cultures", "Une baisse de ses charges fixes"], 'a' => 1, 'e' => "Une paie régulière complète les gains des champs : les revenus de sources différentes se compensent en cas de mauvaise année."],
                    ['q' => "Dans un pays, la productivité agricole progresse nettement : moins de travailleurs suffisent à nourrir la population. Que peut-il se passer ?", 'c' => ["La population agricole doit augmenter pour compenser", "Les salaires ruraux deviennent nuls", "Des travailleurs partent vers l’industrie", "La demande alimentaire disparaît"], 'a' => 2, 'e' => "Le progrès agricole libère de la main-d’œuvre, qui peut aller occuper d’autres emplois : c’est la transformation structurelle."],
                    ['q' => "Un pays garde des réserves de blé pour les mauvaises années. Quel rôle jouent-elles ?", 'c' => ["Faire baisser la production des années normales", "Remplacer durablement les importations", "Rendre le blé moins nutritif", "Freiner la flambée des prix après une mauvaise récolte"], 'a' => 3, 'e' => "En relâchant du stock quand l’offre manque, l’État limite la hausse des prix et protège les consommateurs modestes."],
                    ['q' => "Cinquante petits agriculteurs commandent leur engrais ensemble et obtiennent 10 % de remise. Quel avantage la coopérative leur procure-t-elle ?", 'c' => ["Un droit de fixer le prix des tomates au détail", "Plus de pouvoir de négociation, un coût unitaire plus bas", "La fin de tout risque climatique", "Une baisse automatique des salaires"], 'a' => 1, 'e' => "Acheter en grand quantité donne du poids face au fournisseur. C’est le principe de l’achat groupé."],
                    ['q' => "Un agriculteur suit une formation sur la taille des oliviers et améliore son rendement. De quoi s’agit-il ?", 'c' => ["D’un investissement en capital humain", "D’un gain de capital financier", "D’une dépense de consommation", "D’une hausse du capital physique"], 'a' => 0, 'e' => "Les connaissances et compétences d’une personne forment son capital humain : on investit en elle, comme dans une machine, pour produire plus."],
                    ['q' => "Quel indicateur suit le mieux le niveau de vie d’un ménage rural ?", 'c' => ["Le nombre d’exploitations du douar", "Le nombre de tracteurs du village", "Sa consommation ou son revenu par personne", "Le prix mondial du blé"], 'a' => 2, 'e' => "Le niveau de vie se mesure à ce que chacun peut consommer ou gagner. Les autres indicateurs sont des données collectives ou extérieures."],
                ],
            ],
            [
                'title' => "Applications en économie agricole",
                'description' => "Appliquer le raisonnement économique à des décisions concrètes de producteurs et à des marchés agricoles.",
                'questions' => [
                    ['q' => "Une parcelle de 5 hectares donne 15 tonnes de blé, une autre de 8 hectares donne 20 tonnes. Laquelle a le meilleur rendement ?", 'c' => ["La seconde, car elle produit plus au total", "La première : 3 t/ha contre 2,5", "Les deux, car l’écart est faible", "La seconde, avec 2,5 t par hectare contre 3"], 'a' => 1, 'e' => "Le rendement divise la production par la surface : 15 ÷ 5 = 3 t/ha contre 20 ÷ 8 = 2,5 t/ha. Le total ne dit rien de l’efficacité du sol."],
                    ['q' => "Un agriculteur compare deux cultures. A rapporte 40 000 DH avec 25 000 DH de charges, B rapporte 30 000 DH avec 10 000 DH de charges. Laquelle est la plus avantageuse en gain net ?", 'c' => ["A, avec 40 000 DH de recette contre 30 000", "A, avec 15 000 DH net contre 20 000 pour B", "B : 20 000 DH net contre 15 000", "Aucune, les deux se valent"], 'a' => 2, 'e' => "Il faut comparer le résultat, pas la recette : A donne 40 000 − 25 000 = 15 000 DH, B donne 30 000 − 10 000 = 20 000 DH."],
                    ['q' => "Le prix des courgettes double ce printemps ; l’an suivant, les surfaces semées augmentent beaucoup. Que devient plausiblement le prix ensuite, toutes choses égales ?", 'c' => ["Il continue de doubler", "Il reste figé par la demande", "Il tend à monter car l’offre a diminué", "Il tend à baisser, car l’offre a augmenté"], 'a' => 3, 'e' => "Le prix élevé a attiré les producteurs, d’où une offre abondante l’année d’après : c’est l’alternance hausse-baisse des marchés agricoles."],
                    ['q' => "Un exploitant loue sa moissonneuse inutilisée 20 jours par an, à 600 DH par jour, avec 200 DH de charges quotidiennes (carburant, chauffeur). Quel est son gain annuel ?", 'c' => ["8 000 DH", "12 000 DH", "4 000 DH", "400 DH"], 'a' => 0, 'e' => "Gain journalier = 600 − 200 = 400 DH, soit 400 × 20 = 8 000 DH. Oublier les charges conduit à 12 000 DH."],
                    ['q' => "Un producteur peut accéder à un nouveau marché, mais les normes sanitaires y sont plus strictes. Que doit-il comparer avant de se lancer ?", 'c' => ["Le prix local actuel, sans tenir compte des normes", "La surface de l’exploitation voisine", "Le surcoût des normes et le prix espéré", "Le nombre de camions disponibles dans la région"], 'a' => 2, 'e' => "Une nouvelle porte de sortie n’est rentable que si le prix supplémentaire couvre ce que coûte l’adaptation aux normes."],
                    ['q' => "L’eau d’irrigation est presque gratuite pour les agriculteurs d’une région sèche. Quel risque économique cela crée-t-il ?", 'c' => ["Elle est utilisée sans tenir compte de sa rareté", "Elle devient plus chère à produire", "Les agriculteurs en demandent moins", "Son offre augmente d’elle-même"], 'a' => 0, 'e' => "Un bien rare à prix nul est gaspillé : le prix sert de signal de rareté, et en son absence on arrose trop."],
                    ['q' => "Des éleveurs livrent leur lait à une coopérative qui fabrique du fromage. Quel est leur avantage ?", 'c' => ["Ils n’ont plus aucun coût de production", "Le lait devient imperméable aux saisons", "La demande de fromage ne dépend plus du prix", "Une part de la valeur ajoutée leur revient"], 'a' => 3, 'e' => "Transformer le lait en fromage crée de la valeur ; en étant membres, les éleveurs en captent une part plutôt que de la laisser à d’autres."],
                    ['q' => "Une ferme supporte 50 000 DH de coûts pour 25 tonnes de pommes de terre, vendues 1,8 DH le kilo. Quel est son résultat ?", 'c' => ["Un bénéfice de 5 000 DH", "Une perte de 5 000 DH", "Un bénéfice de 45 000 DH", "Une perte de 25 000 DH"], 'a' => 1, 'e' => "Recette : 25 000 kg × 1,8 = 45 000 DH. Coûts : 50 000 DH. Résultat : 45 000 − 50 000 = −5 000 DH ; le coût moyen (2 DH le kilo) dépasse le prix."],
                    ['q' => "Le prix de la farine baisse de 10 %, mais les achats de pain n’augmentent que de 2 %. Que dire de la demande ?", 'c' => ["Elle est peu sensible au prix", "Elle est très sensible au prix", "Elle est parfaitement élastique", "Elle a un signe positif"], 'a' => 0, 'e' => "Une variation de quantité (2 %) bien inférieure à celle du prix (10 %) montre une demande peu élastique, typique des produits de base."],
                    ['q' => "Le producteur vend ses tomates 2 DH le kilo, et le consommateur les paie 6 DH. Que représentent ces 4 DH d’écart ?", 'c' => ["Le bénéfice net du producteur", "Une taxe reversée au producteur", "Les frais et marges du transport et de la vente", "Une subvention à la consommation"], 'a' => 2, 'e' => "Entre le champ et l’assiette, chaque maillon (transport, grossiste, détaillant) supporte des frais et prend une marge, qui s’ajoutent au prix de départ."],
                    ['q' => "Une serre coûte 12 000 DH par an (amortissement), qu’on cultive ou non. Cultiver demande 8 000 DH de charges variables pour 15 000 DH de recettes. Que faire à court terme ?", 'c' => ["Ne pas cultiver : avec 20 000 DH de charges au total, l’activité perd de l’argent", "Cultiver : les recettes couvrent les charges variables et une part du coût fixe", "Cultiver : le bénéfice est de 7 000 DH", "Ne pas cultiver : le coût fixe disparaît alors"], 'a' => 1, 'e' => "Le coût fixe est dû de toute façon. Cultiver rapporte 15 000 − 8 000 = 7 000 DH qui réduisent la perte (de −12 000 à −5 000)."],
                    ['q' => "Un agriculteur peut vendre sa récolte maintenant à 3 DH le kilo, ou la stocker deux mois et la vendre 3,4 DH, avec 0,5 DH de frais de stockage par kilo. Que choisir ?", 'c' => ["Stocker, car 3,4 DH dépasse 3 DH", "Stocker, car le gain est de 0,9 DH par kilo", "Indifférent : les deux rapportent 3 DH", "Vendre maintenant : 3 DH contre 2,9 DH net"], 'a' => 3, 'e' => "Net du stockage : 3,4 − 0,5 = 2,9 DH, soit moins que les 3 DH immédiats. Un prix futur plus élevé ne suffit pas, il faut déduire les frais."],
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
