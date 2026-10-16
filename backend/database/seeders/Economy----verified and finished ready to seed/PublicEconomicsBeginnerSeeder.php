<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class PublicEconomicsBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'public-economics')->firstOrFail();

        $settings = [
            ['duration' => 15, 'passing_score' => 50],
            ['duration' => 15, 'passing_score' => 55],
            ['duration' => 15, 'passing_score' => 60],
            ['duration' => 15, 'passing_score' => 60],
            ['duration' => 15, 'passing_score' => 60],
            ['duration' => 15, 'passing_score' => 65],
            ['duration' => 20, 'passing_score' => 65],
            ['duration' => 15, 'passing_score' => 70],
        ];

        // 'a' = index (0-based) de la bonne réponse dans 'c'
        $quizzes = [
            [
                'title' => "Introduction à l’économie publique",
                'description' => "Notions fondamentales sur le rôle de l’État, les biens publics et les principales questions de l’économie publique.",
                'questions' => [
                    ['q' => "Quel sujet relève directement de l’économie publique ?", 'c' => ["La publicité d’une marque de yaourts", "Le calcul du coût de production d’une usine", "Le choix de financer un hôpital par l’impôt", "La fixation du cours d’une monnaie étrangère"], 'a' => 2, 'e' => "L’économie publique étudie ce que l’État décide de financer, de taxer ou de réglementer. Les trois autres sujets relèvent de la gestion d’entreprise ou de la finance internationale."],
                    ['q' => "Un ménage paie la TVA en achetant un téléphone. Du point de vue de l’État, ce paiement est :", 'c' => ["une recette publique", "une dépense publique", "un investissement privé", "une subvention reçue"], 'a' => 0, 'e' => "Ce que l’État encaisse est une recette ; ce qu’il verse est une dépense. Astuce : l’impôt entre dans la caisse, il n’en sort pas."],
                    ['q' => "Laquelle de ces opérations est une dépense publique ?", 'c' => ["Le paiement du loyer d’une famille", "L’achat de matières premières par une usine", "Le remboursement d’un prêt par un commerçant", "Le salaire d’un enseignant du public"], 'a' => 3, 'e' => "Les salaires des agents de l’État sont payés par le budget public : ils constituent donc une dépense publique. Les autres opérations sont réalisées par des acteurs privés."],
                    ['q' => "Quand le marché ne fournit pas assez d’un service utile à tous, comme l’éclairage des rues, on parle de :", 'c' => ["excédent budgétaire", "défaillance du marché", "croissance économique équilibrée", "inflation importée"], 'a' => 1, 'e' => "Une défaillance du marché désigne une situation où l’échange libre aboutit à un résultat insuffisant ou inefficace. C’est la justification classique d’une intervention de l’État."],
                    ['q' => "Selon Musgrave, laquelle de ces fonctions fait partie du rôle économique de l’État ?", 'c' => ["La production de biens de consommation courante", "La fixation du prix de chaque produit", "La stabilisation de la conjoncture", "La gestion des stocks des entreprises"], 'a' => 2, 'e' => "Musgrave distingue trois fonctions : allocation des ressources, redistribution et stabilisation. Les trois autres propositions ne relèvent pas de cette classification."],
                    ['q' => "Quel est l’intrus parmi ces ressources de l’État ?", 'c' => ["Le salaire versé aux fonctionnaires", "Les droits de douane", "L’impôt sur les sociétés", "Les redevances d’un service public payant"], 'a' => 0, 'e' => "Le salaire des fonctionnaires sort du budget : c’est une dépense. Droits de douane, impôt sur les sociétés et redevances rentrent dans les caisses publiques."],
                    ['q' => "Un État encaisse 120 milliards de DH de recettes et dépense 135 milliards. Quel est son solde budgétaire ?", 'c' => ["Un excédent de 15 milliards", "Un déficit de 15 milliards", "Un déficit de 255 milliards", "Un solde nul"], 'a' => 1, 'e' => "Solde = recettes − dépenses = 120 − 135 = −15 milliards. Le résultat est négatif, donc il s’agit d’un déficit."],
                    ['q' => "Parmi ces institutions, laquelle appartient aux administrations publiques ?", 'c' => ["Une banque commerciale privée", "Une entreprise de transport cotée en bourse", "Une coopérative de producteurs agricoles", "Une commune gérant écoles et voirie"], 'a' => 3, 'e' => "Les collectivités territoriales, comme les communes, font partie des administrations publiques avec l’État et la sécurité sociale. Les autres structures sont privées."],
                    ['q' => "Dans l’expression « politique budgétaire », sur quoi agit l’État ?", 'c' => ["Les taux d’intérêt directeurs", "Ses recettes et ses dépenses", "La quantité de monnaie en circulation", "Le taux de change officiel"], 'a' => 1, 'e' => "La politique budgétaire joue sur les impôts et les dépenses publiques. Taux directeurs et masse monétaire relèvent de la politique monétaire, menée par la banque centrale."],
                    ['q' => "Une taxe sur le tabac peut à la fois :", 'c' => ["décourager la consommation et rapporter des recettes", "augmenter la consommation et rapporter des dépenses", "réduire les prix et rapporter des recettes", "supprimer le marché et accroître le déficit"], 'a' => 0, 'e' => "En renchérissant le produit, la taxe freine la demande ; chaque paquet vendu rapporte aussi un prélèvement à l’État. C’est un double effet incitatif et budgétaire."],
                ],
            ],
            [
                'title' => "Les biens publics",
                'description' => "Comprendre les caractéristiques des biens publics et leur différence avec les biens privés.",
                'questions' => [
                    ['q' => "Un bien est dit non rival lorsque :", 'c' => ["son prix est nul pour tous", "un usager de plus ne gêne pas les autres", "il est produit par l’administration publique", "personne ne peut être empêché d’en profiter"], 'a' => 1, 'e' => "La rivalité concerne l’usage simultané : si ma consommation ne réduit pas la vôtre, le bien est non rival. Le dernier choix décrit la non-exclusion, une autre propriété."],
                    ['q' => "Un phare guide tous les navires qui longent une côte. Quel est son profil ?", 'c' => ["Rival et excluable", "Rival et non excluable", "Non rival et excluable", "Ni rival ni excluable"], 'a' => 3, 'e' => "Un navire de plus ne diminue pas la lumière reçue par les autres, et on ne peut pas refuser la lumière à un bateau précis. C’est un bien public pur."],
                    ['q' => "Un passager clandestin (free rider) est celui qui :", 'c' => ["profite du bien sans payer sa part", "achète plus que sa consommation prévue", "refuse par principe tout bien collectif", "revend un bien public au prix du marché"], 'a' => 0, 'e' => "Quand on ne peut pas exclure, chacun a intérêt à laisser les autres payer. Le mot « clandestin » rappelle le voyageur sans billet."],
                    ['q' => "Lequel de ces biens est un bien privé pur ?", 'c' => ["L’éclairage d’une avenue", "La défense nationale", "Un kilo de pommes", "Un feu d’artifice offert à la ville"], 'a' => 2, 'e' => "Des pommes sont rivales (mangées par un seul) et excluables (il faut payer). Les trois autres bénéficient à tous les habitants à la fois."],
                    ['q' => "Une autoroute à péage fluide est généralement classée comme :", 'c' => ["bien public pur", "ressource commune", "bien privé pur", "bien de club"], 'a' => 3, 'e' => "Le péage permet d’exclure ceux qui ne paient pas, mais tant que la route est fluide, un usager de plus ne gêne pas les autres. C’est la logique d’un bien de club."],
                    ['q' => "Pourquoi le marché fournit-il peu de biens publics purs ?", 'c' => ["Leur coût de production est jugé négligeable par les firmes", "Le passager clandestin rend la vente difficile", "Les consommateurs n’en veulent pas", "Les entreprises n’ont pas le droit d’en produire"], 'a' => 1, 'e' => "Si chacun peut en profiter gratuitement, les recettes de vente sont trop faibles pour couvrir les coûts. D’où le financement par l’impôt."],
                    ['q' => "Dans une pêcherie ouverte, chacun pêche à volonté et les poissons se raréfient. Ce bien est :", 'c' => ["une ressource commune", "un bien public pur", "un bien de club", "un bien tutélaire de l’État"], 'a' => 0, 'e' => "Les poissons sont rivaux (ce qui est pêché n’est plus disponible) mais non excluables : c’est la configuration de la « tragédie des biens communs »."],
                    ['q' => "Trois voisins évaluent un lampadaire à 40, 30 et 20 DH. Il coûte 80 DH à installer. Que conclut-on ?", 'c' => ["Non : aucun voisin ne l’évalue à 80 DH", "Non : la valeur moyenne, 30 DH, est inférieure à 80", "Oui : la somme des valeurs, 90 DH, dépasse le coût", "Oui : le plus offrant accepte de payer 40 DH"], 'a' => 2, 'e' => "Pour un bien non rival, on additionne les valeurs individuelles : 40 + 30 + 20 = 90 DH, supérieur à 80 DH. Le projet est donc collectivement rentable."],
                    ['q' => "Quel bien est financé principalement par l’impôt plutôt que par un prix payé à chaque usage ?", 'c' => ["La défense nationale", "Une boisson gazeuse", "Un abonnement de streaming", "Un billet de cinéma"], 'a' => 0, 'e' => "On ne peut pas vendre la défense à chaque habitant séparément, puisque tous sont protégés. Elle est donc payée par le budget public."],
                    ['q' => "Un parc public gratuit devient surchargé le week-end. Que signale cette congestion ?", 'c' => ["Le parc est devenu excluable par nature", "Le parc est devenu un bien privé pur", "Son coût d’entretien est devenu nul pour la ville", "L’usage devient rival au-delà d’un seuil"], 'a' => 3, 'e' => "Tant qu’il y a de la place, un visiteur de plus ne gêne personne. Une fois le seuil dépassé, chacun réduit le confort des autres : la non-rivalité n’est plus parfaite."],
                ],
            ],
            [
                'title' => "Les externalités",
                'description' => "Découvrir le concept d’externalité et comprendre les effets favorables ou défavorables des activités économiques sur des tiers.",
                'questions' => [
                    ['q' => "Une usine rejette des fumées qui gênent les habitants voisins, sans aucune compensation. C’est :", 'c' => ["une externalité positive", "un bien public pur et gratuit", "une externalité négative", "une subvention implicite"], 'a' => 2, 'e' => "Un tiers subit un coût qu’il n’a pas choisi et qui ne passe pas par le prix : c’est une externalité négative."],
                    ['q' => "Un apiculteur installe ses ruches près d’un verger et les arbres sont mieux pollinisés. Pour l’arboriculteur, c’est :", 'c' => ["une externalité positive", "une externalité négative", "une taxe pigouvienne", "un coût de production interne"], 'a' => 0, 'e' => "L’arboriculteur reçoit un bénéfice sans le payer : l’effet est positif et extérieur au marché."],
                    ['q' => "Comment calcule-t-on le coût social d’une activité polluante ?", 'c' => ["Coût privé moins coût externe", "Coût privé du producteur seul", "Coût externe seul", "Coût privé plus coût externe"], 'a' => 3, 'e' => "Le coût social additionne ce que paie le producteur et ce que subissent les tiers. Le marché libre ne voit que le premier terme."],
                    ['q' => "Une usine a un coût privé de 50 DH par unité et cause 15 DH de dommages aux riverains. Quel est le coût social unitaire ?", 'c' => ["35 DH", "65 DH", "15 DH", "750 DH"], 'a' => 1, 'e' => "50 + 15 = 65 DH. Les 15 DH de dommages s’ajoutent au coût du producteur, ils ne s’en retranchent pas."],
                    ['q' => "Quelle taxe vise à faire payer au pollueur le dommage qu’il cause ?", 'c' => ["La taxe sur la valeur ajoutée", "La taxe d’habitation", "Le droit d’enregistrement", "La taxe pigouvienne"], 'a' => 3, 'e' => "Proposée par l’économiste Pigou, elle ajoute au coût privé la valeur du dommage, ce qui « internalise » l’externalité."],
                    ['q' => "Pourquoi un marché laissé libre produit-il trop de pollution ?", 'c' => ["Le producteur ne paie pas le dommage subi par les tiers", "Le coût de production est trop élevé pour les entreprises", "Les consommateurs achètent trop peu de produits", "L’État fixe un prix trop bas pour ces biens"], 'a' => 0, 'e' => "Comme une partie du coût est supportée par d’autres, le prix est trop faible et la quantité produite trop forte par rapport à l’optimum social."],
                    ['q' => "La vaccination protège aussi les personnes non vaccinées. Cette externalité positive justifie souvent :", 'c' => ["une taxe sur les vaccins", "une interdiction de vacciner", "une subvention à la vaccination", "un impôt sur les patients vaccinés"], 'a' => 2, 'e' => "Sans aide, chacun ne tient compte que de son propre bénéfice et se vaccine trop peu. Subventionner rapproche la demande de l’intérêt collectif."],
                    ['q' => "Comment fonctionne un marché de permis de polluer ?", 'c' => ["L’État rembourse les dommages de chaque entreprise", "L’État fixe un plafond global et les entreprises s’échangent des droits", "Chaque entreprise choisit librement son niveau de pollution", "Les riverains vendent leur air aux industriels"], 'a' => 1, 'e' => "Le plafond limite la pollution totale ; l’échange de permis pousse les entreprises qui dépolluent à bas coût à le faire et à vendre leurs droits."],
                    ['q' => "Selon Coase, une externalité peut se régler par négociation privée si :", 'c' => ["les droits de propriété sont clairs et la négociation peu coûteuse", "les taxes sont nulles", "la pollution est strictement nulle", "l’État possède les ressources concernées"], 'a' => 0, 'e' => "Quand chacun sait à qui appartient le droit (polluer ou respirer un air pur) et que négocier coûte peu, les parties peuvent s’entendre sans l’État."],
                    ['q' => "Un élève affirme : « une externalité est un impôt payé par les entreprises ». Où est son erreur ?", 'c' => ["Il oublie que l’impôt est facultatif", "Il confond externalité positive et subvention", "Il confond effet sur des tiers hors marché et prélèvement", "Il croit que seules les entreprises produisent"], 'a' => 2, 'e' => "Une externalité est un effet subi par un tiers sans passer par le prix. Un impôt est un prélèvement obligatoire : même si une taxe peut corriger l’externalité, ce n’est pas la même chose."],
                ],
            ],
            [
                'title' => "Principes fondamentaux de la fiscalité",
                'description' => "Comprendre les notions de base relatives aux impôts, aux contribuables et à la structure fiscale.",
                'questions' => [
                    ['q' => "Qui est le contribuable ?", 'c' => ["Le fonctionnaire qui perçoit l’impôt", "Le ministre qui vote le budget", "La banque qui garde les fonds", "Celui qui doit payer l’impôt"], 'a' => 3, 'e' => "Le contribuable est la personne ou l’entreprise redevable de l’impôt. Celui qui le collecte appartient à l’administration fiscale."],
                    ['q' => "Lequel de ces prélèvements est un impôt direct ?", 'c' => ["La TVA", "L’impôt sur le revenu", "Les droits de douane", "La taxe sur les carburants"], 'a' => 1, 'e' => "Un impôt direct frappe directement le revenu ou le patrimoine de la personne qui le paie. La TVA et les taxes sur les produits sont des impôts indirects."],
                    ['q' => "Un salarié gagne 8 000 DH et paie 800 DH d’impôt. Quel est son taux moyen d’imposition ?", 'c' => ["10 %", "8 %", "1 %", "12,5 %"], 'a' => 0, 'e' => "Taux moyen = impôt ÷ revenu = 800 ÷ 8 000 = 0,10, soit 10 %."],
                    ['q' => "Un impôt est progressif lorsque :", 'c' => ["le montant payé est identique pour tous", "le taux baisse quand le revenu augmente", "le taux moyen augmente avec le revenu", "le taux dépend de l’âge du contribuable"], 'a' => 2, 'e' => "Plus le revenu est élevé, plus la part prélevée est forte. Le mot « progressif » rappelle que le taux progresse avec le revenu."],
                    ['q' => "Sur qui pèse finalement la TVA ?", 'c' => ["Le consommateur final", "L’entreprise exportatrice", "L’administration fiscale", "Le fournisseur de matières premières"], 'a' => 0, 'e' => "Les entreprises reversent la TVA à l’État, mais elles la déduisent à chaque étape : seul le consommateur final la supporte réellement."],
                    ['q' => "Un article coûte 200 DH hors taxe et la TVA est de 20 %. Quel est son prix TTC ?", 'c' => ["204 DH", "220 DH", "2 400 DH", "240 DH"], 'a' => 3, 'e' => "TVA = 20 % × 200 = 40 DH, donc TTC = 200 + 40 = 240 DH."],
                    ['q' => "Qu’appelle-t-on l’assiette d’un impôt ?", 'c' => ["Le taux appliqué", "La base de calcul de l’impôt", "La date limite de paiement", "L’organisme chargé de le collecter"], 'a' => 1, 'e' => "Impôt = assiette × taux. L’assiette peut être un revenu, un bénéfice, un prix, un bien immobilier."],
                    ['q' => "Un impôt proportionnel de 15 % frappe les bénéfices. Une société réalise 400 000 DH de bénéfice. Combien paie-t-elle ?", 'c' => ["15 000 DH", "6 000 DH", "60 000 DH", "415 000 DH"], 'a' => 2, 'e' => "400 000 × 0,15 = 60 000 DH. Attention à ne pas confondre 15 % et 15 000 DH : on multiplie par le taux."],
                    ['q' => "Quel impôt a tendance à être régressif, c’est-à-dire à peser davantage sur les revenus modestes ?", 'c' => ["L’impôt sur le revenu à barème", "Les droits de succession sur les grosses fortunes", "L’impôt sur les bénéfices", "La TVA sur les produits de première nécessité"], 'a' => 3, 'e' => "Les ménages modestes consacrent une plus grande part de leur revenu à ces achats courants, donc la TVA les touche proportionnellement plus."],
                    ['q' => "Quel principe d’équité demande que des contribuables de capacités différentes paient des montants différents ?", 'c' => ["L’équité verticale", "L’équité horizontale", "Le principe du bénéfice", "La neutralité fiscale"], 'a' => 0, 'e' => "L’équité verticale traite différemment les situations différentes ; l’équité horizontale demande un traitement identique pour des situations identiques."],
                ],
            ],
            [
                'title' => "Redistribution des revenus",
                'description' => "Introduction aux mécanismes de redistribution et au rôle de l’État dans la réduction des inégalités.",
                'questions' => [
                    ['q' => "Que signifie redistribuer les revenus ?", 'c' => ["Fixer le prix de tous les produits", "Transférer des revenus entre groupes par impôts et prestations", "Vendre des biens publics aux entreprises", "Imprimer de la monnaie pour les ménages"], 'a' => 1, 'e' => "On prélève sur certains (impôts, cotisations) pour verser à d’autres (allocations, aides) afin de réduire les écarts de niveau de vie."],
                    ['q' => "Laquelle de ces ressources est une prestation sociale ?", 'c' => ["La TVA", "L’impôt sur les sociétés", "Une allocation familiale", "Un droit d’enregistrement foncier"], 'a' => 2, 'e' => "Une prestation est une somme versée aux ménages. Les trois autres éléments sont des prélèvements qui alimentent les caisses de l’État."],
                    ['q' => "Le coefficient de Gini est égal à 0 lorsque :", 'c' => ["tous les revenus sont identiques", "un seul individu détient tout le revenu", "les revenus ont doublé", "le budget de l’État est équilibré chaque année"], 'a' => 0, 'e' => "Gini = 0 correspond à l’égalité parfaite ; Gini = 1 à l’inégalité maximale, où une personne détient tout."],
                    ['q' => "Après la mise en place d’un impôt progressif et d’allocations, le Gini baisse. Cela montre que :", 'c' => ["le chômage a disparu", "la croissance du PIB s’est nettement accélérée", "les prix ont diminué", "les inégalités de revenu ont reculé"], 'a' => 3, 'e' => "Le Gini mesure les inégalités. S’il baisse après impôts et allocations, la redistribution a rapproché les revenus disponibles."],
                    ['q' => "Un ménage gagne 3 000 DH, reçoit 600 DH d’allocations et paie 400 DH d’impôts. Quel est son revenu disponible ?", 'c' => ["3 600 DH, sans les impôts", "2 800 DH", "3 200 DH", "4 000 DH"], 'a' => 2, 'e' => "Revenu disponible = 3 000 + 600 − 400 = 3 200 DH : on ajoute les prestations reçues et on retire les prélèvements."],
                    ['q' => "Lequel de ces dispositifs relève de l’assurance sociale ?", 'c' => ["Une bourse d’études entièrement financée par le budget de l’État", "Une pension de retraite financée par des cotisations", "Un minimum social financé par l’impôt", "Une subvention sur un produit de base"], 'a' => 1, 'e' => "L’assurance sociale repose sur des cotisations versées par les travailleurs et les employeurs ; les autres aides sont financées par le budget."],
                    ['q' => "Subventionner un produit de base permet de :", 'c' => ["augmenter le prix payé par le consommateur final", "alourdir la charge fiscale des ménages", "supprimer la demande pour ce produit", "faire baisser le prix payé par le consommateur"], 'a' => 3, 'e' => "La subvention est payée par l’État, ce qui réduit le prix à la caisse. Elle coûte au budget, mais soutient le pouvoir d’achat."],
                    ['q' => "Quel avantage un transfert ciblé sur les ménages pauvres a-t-il sur une subvention générale ?", 'c' => ["Il concentre l’aide sur ceux qui en ont besoin", "Il fait baisser le prix pour tous les consommateurs", "Il dispense de connaître les revenus des ménages", "Il réduit le coût de gestion de l’aide"], 'a' => 0, 'e' => "Une subvention générale profite aussi aux ménages aisés. Le ciblage évite ce gaspillage, au prix d’un travail d’identification des bénéficiaires."],
                    ['q' => "Le dilemme équité-efficacité signifie qu’une forte redistribution peut :", 'c' => ["effacer les différences de talent", "réduire les incitations à travailler ou à investir", "augmenter la rivalité des biens", "rendre l’impôt régressif"], 'a' => 1, 'e' => "Si une grande part du gain supplémentaire est taxée, l’effort rapporte moins. D’où la recherche d’un équilibre entre justice et dynamisme."],
                    ['q' => "Les 20 % de ménages les plus riches perçoivent 45 % du revenu total, les 20 % les plus pauvres 8 %. Que peut-on dire ?", 'c' => ["Les revenus sont également répartis", "Les plus pauvres gagnent davantage que les riches", "Le revenu est très concentré chez les plus riches", "Le revenu moyen est égal à 45 %"], 'a' => 2, 'e' => "Un cinquième de la population reçoit presque la moitié du revenu, contre moins d’un dixième pour le cinquième le plus pauvre : la répartition est très inégale."],
                ],
            ],
            [
                'title' => "Les dépenses publiques",
                'description' => "Comprendre les différentes formes de dépenses publiques et leur rôle dans l’économie.",
                'questions' => [
                    ['q' => "L’État finance la construction d’un barrage. Cette dépense est classée en dépense :", 'c' => ["d’investissement", "de fonctionnement", "de transfert", "de remboursement de la dette"], 'a' => 0, 'e' => "Un barrage est un équipement durable qui servira pendant des décennies : c’est de l’investissement, par opposition aux dépenses courantes."],
                    ['q' => "Le salaire des fonctionnaires est classé parmi les :", 'c' => ["dépenses d’investissement", "charges d’intérêts de la dette publique", "dépenses de transfert", "dépenses de fonctionnement"], 'a' => 3, 'e' => "Les salaires font tourner l’administration au quotidien : ce sont des dépenses courantes, dites de fonctionnement."],
                    ['q' => "Une pension versée sans contrepartie de production est une dépense :", 'c' => ["de consommation de l’État", "de transfert", "de production publique", "de placement financier"], 'a' => 1, 'e' => "L’État redistribue de l’argent sans recevoir de service en échange : on parle de transfert, comme pour les allocations."],
                    ['q' => "Les emprunts massifs de l’État font monter les taux d’intérêt et freinent l’investissement privé. Quel nom porte cet effet ?", 'c' => ["L’effet de cliquet", "L’effet de levier", "L’effet d’éviction", "L’effet de substitution"], 'a' => 2, 'e' => "L’État « évince » les entreprises du marché du crédit en captant l’épargne disponible. Éviction vient du verbe évincer : chasser."],
                    ['q' => "Avec un multiplicateur de 1,5, une dépense publique supplémentaire de 20 milliards de DH augmente le PIB de :", 'c' => ["13,3 milliards", "20 milliards", "21,5 milliards", "30 milliards"], 'a' => 3, 'e' => "Variation du PIB = multiplicateur × dépense = 1,5 × 20 = 30 milliards. Diviser (20 ÷ 1,5) donnerait 13,3, ce qui est une erreur classique."],
                    ['q' => "Laquelle de ces dépenses est une dépense de fonctionnement ?", 'c' => ["La facture d’électricité d’un ministère", "La construction d’une autoroute entre deux villes", "L’achat d’un terrain pour un futur lycée", "Le lancement d’un grand port"], 'a' => 0, 'e' => "Électricité, fournitures et salaires servent à faire fonctionner les services au jour le jour. Les trois autres créent des équipements durables."],
                    ['q' => "Quelle mission relève des fonctions régaliennes de l’État ?", 'c' => ["Le financement d’un festival culturel", "La construction de logements sociaux", "La police et la justice", "Les aides à l’agriculture"], 'a' => 2, 'e' => "Les fonctions régaliennes (défense, sécurité, justice, diplomatie) sont celles que seul l’État exerce, par opposition aux interventions économiques ou sociales."],
                    ['q' => "Les dépenses publiques passent de 30 % à 33 % du PIB. Si le PIB est de 1 000 milliards de DH, de combien augmentent-elles ?", 'c' => ["3 milliards", "30 milliards", "300 milliards", "330 milliards"], 'a' => 1, 'e' => "Trois points de PIB, c’est 3 % × 1 000 = 30 milliards. Le résultat ne dépend pas du niveau de départ une fois les parts connues."],
                    ['q' => "Pourquoi la dépense d’éducation est-elle souvent vue comme un investissement ?", 'c' => ["Elle accroît le capital humain et la productivité future", "Elle augmente immédiatement les recettes fiscales", "Elle remplace la consommation des ménages", "Elle réduit mécaniquement la dette"], 'a' => 0, 'e' => "Des élèves mieux formés produisent davantage plus tard. Le bénéfice est durable, comme pour une infrastructure, mais il n’est pas immédiat."],
                    ['q' => "Une commune hésite entre refaire une route et construire une crèche avec le même budget. Quel concept résume ce choix ?", 'c' => ["Le multiplicateur", "La taxe pigouvienne", "Le coût d’opportunité", "Le surplus du consommateur"], 'a' => 2, 'e' => "Choisir l’un, c’est renoncer à l’autre : le coût d’opportunité est la valeur de la meilleure option abandonnée."],
                ],
            ],
            [
                'title' => "Efficacité et choix publics",
                'description' => "Notions introductives sur l’efficacité économique, les arbitrages publics et les décisions collectives.",
                'questions' => [
                    ['q' => "Une situation est efficace au sens de Pareto lorsque :", 'c' => ["tout le monde a le même revenu", "on ne peut aider l’un sans pénaliser un autre", "le budget de l’État est équilibré", "les prix sont fixés par l’administration"], 'a' => 1, 'e' => "L’optimum de Pareto ne dit rien sur la justice : il décrit une situation où plus aucun gain gratuit n’est possible."],
                    ['q' => "Un projet coûte 100 millions de DH et procure 130 millions d’avantages. Que conclut une analyse coûts-avantages ?", 'c' => ["Rejeté : le coût dépasse 100 millions", "Indifférent : les coûts et les avantages s’annulent", "Rejeté : les avantages sont incertains", "Accepté : l’avantage net est de 30 millions"], 'a' => 3, 'e' => "Avantage net = 130 − 100 = 30 millions, positif : le projet crée de la valeur pour la collectivité."],
                    ['q' => "Selon le théorème de l’électeur médian, dans un vote à la majorité entre deux options sur un axe, le résultat se rapproche :", 'c' => ["de la préférence de l’électeur médian", "de la préférence de l’électeur le plus riche", "de la moyenne des budgets proposés", "de l’option la plus coûteuse"], 'a' => 0, 'e' => "Les partis cherchent à séduire celui qui sépare l’électorat en deux moitiés égales, car il fait basculer la majorité."],
                    ['q' => "Que montre le paradoxe de Condorcet ?", 'c' => ["Le vote majoritaire donne le même gagnant quel que soit l’ordre", "Les électeurs votent contre leur propre intérêt", "Des préférences individuelles cohérentes peuvent produire une préférence collective cyclique", "Le vote secret fausse les résultats"], 'a' => 2, 'e' => "Avec trois électeurs et trois options, A peut battre B, B battre C et C battre A : la majorité n’est alors pas transitive."],
                    ['q' => "Des élus qui visent la réélection favorisent des dépenses visibles à court terme. Quelle approche l’illustre ?", 'c' => ["La théorie du bien de club", "La théorie des choix publics", "La théorie quantitative de la monnaie", "La théorie du commerce international"], 'a' => 1, 'e' => "L’école des choix publics applique l’analyse économique aux décideurs politiques, supposés poursuivre aussi leurs propres objectifs."],
                    ['q' => "Qu’appelle-t-on l’ignorance rationnelle de l’électeur ?", 'c' => ["Il s’abstient par protestation contre l’ensemble des partis", "Il vote au hasard par principe", "Il se fie à un tirage au sort", "Il juge que s’informer coûte plus que son vote ne rapporte"], 'a' => 3, 'e' => "Une voix pèse très peu dans une élection ; il est donc raisonnable de ne pas passer des heures à étudier chaque programme."],
                    ['q' => "Une subvention coûte 1 DH à chacun des 10 millions de contribuables et rapporte 5 millions de DH à 100 entreprises. Pourquoi le lobbying de ces entreprises est-il efficace ?", 'c' => ["Les coûts sont concentrés et les avantages diffus", "La subvention est efficace au sens de Pareto", "Les avantages sont concentrés et les coûts dispersés", "Les contribuables votent tous contre"], 'a' => 2, 'e' => "Les gagnants ont un fort intérêt à s’organiser, tandis que chaque contribuable perd trop peu pour se mobiliser."],
                    ['q' => "Un service public a un coût marginal de 8 DH et un bénéfice marginal de 12 DH par usager supplémentaire. Faut-il l’étendre ?", 'c' => ["Oui, car 12 DH dépasse 8 DH", "Non, car le coût marginal est positif", "Non, car le service existe déjà", "Oui, car le coût moyen est nul"], 'a' => 0, 'e' => "Tant que le bénéfice marginal dépasse le coût marginal, chaque usager de plus augmente le bien-être collectif."],
                    ['q' => "La perte sèche (poids mort) d’un impôt correspond à :", 'c' => ["la somme collectée par l’État", "la baisse des recettes publiques après la réforme", "le coût administratif de collecte", "la perte de surplus qui échappe à tous"], 'a' => 3, 'e' => "L’impôt décourage certains échanges avantageux ; le surplus qui disparaît n’est ni gardé par les agents ni encaissé par l’État."],
                    ['q' => "Les décideurs publics ne gèrent pas leur propre argent. Quel risque en tire l’analyse des choix publics ?", 'c' => ["Une explosion des exportations", "Peu d’incitation à maîtriser les coûts", "Une baisse des prix du marché", "Un excès de concurrence entre ministères"], 'a' => 1, 'e' => "Quand le coût est supporté par les contribuables et non par le décideur, il y a moins de raisons de chercher à économiser."],
                    ['q' => "Pourquoi actualise-t-on les avantages futurs dans une analyse coûts-avantages ?", 'c' => ["Parce que l’inflation est nulle", "Parce que les coûts futurs sont connus avec certitude", "Parce qu’un dirham futur vaut moins qu’aujourd’hui", "Parce que l’État emprunte gratuitement"], 'a' => 2, 'e' => "On préfère recevoir de l’argent plus tôt, et l’avenir est incertain : on réduit donc la valeur des gains lointains avant de les comparer aux coûts."],
                ],
            ],
            [
                'title' => "Principes de base des finances publiques",
                'description' => "Réviser les notions fondamentales de budget public, déficit, dette et gestion des ressources publiques.",
                'questions' => [
                    ['q' => "Un déficit budgétaire apparaît lorsque :", 'c' => ["les dépenses dépassent les recettes", "les recettes dépassent les dépenses", "la dette est entièrement remboursée", "les exportations dépassent les importations"], 'a' => 0, 'e' => "Le déficit est l’écart négatif entre recettes et dépenses sur une année. La dernière proposition décrit un excédent commercial, sans lien avec le budget."],
                    ['q' => "Qu’est-ce que la dette publique ?", 'c' => ["Le déficit d’une seule année", "Les recettes cumulées de l’État depuis sa création", "Le stock des emprunts accumulés", "Le total des impôts impayés"], 'a' => 2, 'e' => "Le déficit est un flux annuel ; la dette est le stock qui résulte de l’addition des déficits passés. Image : le robinet et la baignoire."],
                    ['q' => "La dette de départ est de 300 milliards. Deux déficits successifs de 20 milliards s’y ajoutent, sans remboursement. Quelle est la dette ?", 'c' => ["320 milliards de DH", "340 milliards", "360 milliards", "600 milliards"], 'a' => 1, 'e' => "300 + 20 + 20 = 340 milliards : chaque déficit alourdit le stock de dette."],
                    ['q' => "La dette publique est de 600 milliards de DH et le PIB de 1 000 milliards. Quel est le ratio dette/PIB ?", 'c' => ["6 %", "16,7 %", "160 %", "60 %"], 'a' => 3, 'e' => "600 ÷ 1 000 = 0,6, soit 60 % du PIB. Ce ratio compare la dette à la richesse produite en un an."],
                    ['q' => "Le solde primaire est le solde budgétaire :", 'c' => ["avant les recettes fiscales", "y compris les charges d’intérêts", "hors charges d’intérêts", "hors dépenses d’investissement"], 'a' => 2, 'e' => "On retire les intérêts pour juger l’effort budgétaire courant, indépendamment du poids de la dette passée."],
                    ['q' => "Par quel moyen un État finance-t-il généralement son déficit ?", 'c' => ["L’émission de bons du Trésor", "La vente de ses réserves de devises", "La baisse de ses taux d’impôt", "Le remboursement anticipé de sa dette"], 'a' => 0, 'e' => "L’État emprunte en vendant des titres (bons du Trésor) aux banques, aux assureurs ou aux épargnants, qu’il remboursera plus tard avec intérêts."],
                    ['q' => "Que prévoit la loi de finances annuelle ?", 'c' => ["Les prix de marché des produits agricoles de base", "Les recettes et dépenses de l’État pour l’année", "Les taux de change des devises", "Les salaires du secteur privé"], 'a' => 1, 'e' => "Votée par le Parlement, elle autorise le gouvernement à percevoir les recettes et à engager les dépenses de l’année."],
                    ['q' => "Quelle politique budgétaire est contracyclique en période de récession ?", 'c' => ["Réduire les dépenses publiques et hausser les impôts", "Augmenter les impôts pour réduire la dette", "Maintenir un budget parfaitement stable", "Augmenter les dépenses ou baisser les impôts"], 'a' => 3, 'e' => "Contracyclique signifie aller à contre-courant : on soutient la demande quand l’économie ralentit, quitte à creuser le déficit."],
                    ['q' => "Quand la dette devient très élevée, quel risque pèse sur les finances publiques ?", 'c' => ["Une hausse des charges d’intérêts qui pèse sur le budget", "Une disparition des recettes fiscales", "Une baisse automatique des taux d’intérêt", "Un excédent commercial garanti"], 'a' => 0, 'e' => "Plus la dette est lourde, plus une part importante des recettes sert à payer les intérêts, ce qui limite les dépenses utiles."],
                    ['q' => "La règle d’or autorise l’emprunt seulement pour investir. Quelle est sa logique ?", 'c' => ["L’investissement ne rapporte rien", "Les dépenses de fonctionnement sont gratuites", "L’investissement profite aussi aux générations futures", "L’emprunt est sans intérêt pour l’investissement"], 'a' => 2, 'e' => "Faire payer par l’emprunt un équipement durable répartit son coût sur ceux qui en profiteront. Emprunter pour payer les salaires du jour reporterait la charge sans bénéfice."],
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
