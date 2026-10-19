<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Major;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class FinancialEconomicsBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('major_id', Major::where('slug', 'economy')->firstOrFail()->id)->where('name', 'Financial Economics')->firstOrFail();

        $settings = [
            ['duration' => 20, 'passing_score' => 50],
            ['duration' => 20, 'passing_score' => 55],
            ['duration' => 20, 'passing_score' => 60],
            ['duration' => 20, 'passing_score' => 60],
            ['duration' => 20, 'passing_score' => 60],
        ];

        // 'a' = index (0-based) de la bonne réponse dans 'c'
        $quizzes = [
            [
                'title' => "Marchés financiers et actifs",
                'description' => "Une première prise de contact avec les marchés financiers, les actions, les obligations, les banques et la liquidité.",
                'questions' => [
                    ['q' => "À quoi sert avant tout un marché financier ?", 'c' => ["À fixer le prix des biens de consommation courante", "À rapprocher épargnants et demandeurs de fonds", "À répartir les subventions entre les ménages", "À vérifier la qualité des produits importés"], 'a' => 1, 'e' => "Il met en contact ceux qui ont de l’épargne et ceux qui cherchent à financer un projet ; les prix des biens courants se forment sur d’autres marchés."],
                    ['q' => "Karim achète 10 actions d’une société cotée à Casablanca. Il devient :", 'c' => ["Créancier de la société", "Salarié de la société", "Fournisseur de la société", "Copropriétaire de la société"], 'a' => 3, 'e' => "Une action est une part du capital : son détenteur possède une fraction de l’entreprise, il ne lui prête pas d’argent."],
                    ['q' => "Que reçoit normalement celui qui achète une obligation émise par une entreprise ?", 'c' => ["Intérêts et remboursement du prêt", "Une part variable des bénéfices", "Un droit de vote en assemblée", "Un siège au conseil d’administration"], 'a' => 0, 'e' => "Acheter une obligation, c’est prêter : en échange on attend des intérêts puis la restitution du capital. Vote et bénéfices relèvent des actionnaires."],
                    ['q' => "Parmi ces actifs, lequel est le plus liquide ?", 'c' => ["Un terrain agricole isolé", "Un appartement en cours de construction", "L’argent disponible sur un compte courant", "Un tableau de collection"], 'a' => 2, 'e' => "Est liquide ce qu’on peut transformer en monnaie vite et sans perdre de valeur ; l’argent d’un compte courant l’est déjà, alors qu’un terrain peut mettre des mois à se vendre."],
                    ['q' => "Une entreprise lève des fonds en introduisant ses titres en Bourse pour la première fois. Elle intervient sur :", 'c' => ["Le marché secondaire", "Le marché des changes", "Le marché primaire", "Le marché des biens"], 'a' => 2, 'e' => "Le marché primaire est celui des titres nouvellement émis, là où l’émetteur encaisse les fonds. Moyen simple : primaire = première vente."],
                    ['q' => "Un épargnant revend à un autre investisseur des actions achetées l’an dernier. L’entreprise émettrice reçoit alors :", 'c' => ["Rien : l’opération est entre investisseurs", "La totalité du prix de vente, versée par l’acheteur", "Une partie du prix sous forme de dividende", "Le remboursement de son capital social"], 'a' => 0, 'e' => "Sur le marché secondaire, les titres changent de main mais l’argent va au vendeur, pas à l’entreprise qui les avait émis."],
                    ['q' => "Une banque collecte les dépôts des ménages et prête à une PME. Cette fonction s’appelle :", 'c' => ["La planification budgétaire de l’État", "La redistribution fiscale", "L’indexation des salaires", "L’intermédiation financière"], 'a' => 3, 'e' => "La banque se place entre déposants et emprunteurs ; c’est ce rôle de passerelle qu’on nomme intermédiation."],
                    ['q' => "Quelle phrase contient une erreur ?", 'c' => ["L’actionnaire participe aux résultats de l’entreprise", "L’obligataire détient une part du capital", "L’obligation prévoit un remboursement à l’échéance", "L’action peut être revendue en Bourse"], 'a' => 1, 'e' => "L’obligataire est un prêteur, donc un créancier ; seul l’actionnaire possède une part du capital."],
                    ['q' => "Nadia place toute son épargne dans les actions d’une seule entreprise. Quel principe néglige-t-elle ?", 'c' => ["La diversification", "L’actualisation", "L’intermédiation", "La capitalisation boursière"], 'a' => 0, 'e' => "Tout miser sur un seul titre expose à la faillite de cette société ; répartir l’épargne sur plusieurs titres limite ce danger."],
                    ['q' => "Quel est l’intrus parmi ces éléments ?", 'c' => ["Une action cotée en Bourse", "Une obligation d’entreprise", "Un camion de livraison", "Un bon du Trésor marocain"], 'a' => 2, 'e' => "Les trois autres sont des titres financiers ; le camion est un bien physique utilisé pour produire, pas un actif financier."],
                    ['q' => "Le dividende est :", 'c' => ["Un intérêt versé à celui qui prête", "La part du bénéfice qui est distribuée", "Le prix d’émission d’une obligation", "Le remboursement d’un crédit bancaire à l’échéance"], 'a' => 1, 'e' => "Quand une société décide de distribuer une partie de son bénéfice, chaque actionnaire touche un dividende ; l’intérêt, lui, rémunère un prêt."],
                ],
            ],
            [
                'title' => "Risque, rendement et diversification",
                'description' => "Calculer un rendement, distinguer les sortes de risque et comprendre pourquoi répartir ses placements protège en partie.",
                'questions' => [
                    ['q' => "Un titre acheté 50 MAD est revendu 56 MAD, sans dividende. Son rendement est de :", 'c' => ["6 %", "10 %", "12 %", "0,12 %"], 'a' => 2, 'e' => "Gain de 6 MAD rapporté à la mise de départ : 6 ÷ 50 = 0,12, soit 12 %. Le gain se divise toujours par le prix d’achat."],
                    ['q' => "Une action achetée 200 MAD verse 10 MAD de dividende puis est revendue 190 MAD. Son rendement total est de :", 'c' => ["0 %", "−5 %", "5 %", "10 %"], 'a' => 0, 'e' => "Moins-value de 10 MAD compensée par 10 MAD de dividende : gain total nul. Le dividende fait partie du rendement."],
                    ['q' => "Un portefeuille de 5 000 MAD vaut 4 750 MAD un an plus tard, sans apport ni retrait. Son rendement est de :", 'c' => ["+5 %", "−2,5 %", "−25 %", "−5 %"], 'a' => 3, 'e' => "Perte de 250 MAD sur 5 000 : −250 ÷ 5 000 = −0,05. Attention au signe, c’est une perte."],
                    ['q' => "Une grève paralyse une seule entreprise du portefeuille. Ce risque, propre à cette société, est dit :", 'c' => ["Systématique", "Spécifique", "De change", "De taux"], 'a' => 1, 'e' => "Un événement qui ne touche qu’une entreprise est un risque spécifique ; c’est celui que la diversification sait atténuer."],
                    ['q' => "Une récession fait baisser presque tous les titres à la fois. Ce risque de marché :", 'c' => ["Disparaît dès qu’on détient 30 actions différentes", "Ne touche que les obligations", "Est propre à chaque entreprise", "Subsiste malgré la diversification"], 'a' => 3, 'e' => "Quand tout le marché recule, avoir beaucoup de titres n’y change rien : la diversification n’efface que le risque propre à chaque société."],
                    ['q' => "Un placement annonce 15 % par an alors que les autres offrent 4 %. Cet écart suggère plutôt :", 'c' => ["Un risque très faible, vu le rendement", "Un risque élevé, voire une arnaque", "Une garantie apportée par l’État", "Une forte liquidité du placement"], 'a' => 1, 'e' => "Le marché rémunère le risque : un rendement très supérieur à la moyenne doit éveiller la méfiance, pas la confiance."],
                    ['q' => "Quand le pétrole monte, les compagnies aériennes souffrent et les pétrolières gagnent. Détenir les deux titres permet :", 'c' => ["D’adoucir les variations du total", "D’obtenir un gain à chaque période", "De supprimer tout risque lié au pétrole", "De rendre les deux titres identiques"], 'a' => 0, 'e' => "Des actifs qui réagissent en sens inverse se compensent en partie, ce qui lisse le résultat sans l’annuler."],
                    ['q' => "Un analyste annonce un rendement attendu de 8 % pour un fonds. Cela veut dire que :", 'c' => ["Le fonds rapportera 8 % à coup sûr, chaque année", "Le rendement ne pourra jamais dépasser 8 % cette année", "L’issue réelle peut différer de l’estimation", "Le capital est garanti par la banque dépositaire"], 'a' => 2, 'e' => "Un rendement attendu est une moyenne anticipée, pas une promesse : le résultat final peut être meilleur ou moins bon."],
                    ['q' => "Un portefeuille contient 60 % d’un actif A (rendement 10 %) et 40 % d’un actif B (rendement 5 %). Son rendement est de :", 'c' => ["7,5 %", "8 %", "15 %", "6 %"], 'a' => 1, 'e' => "On pondère : 0,6 × 10 + 0,4 × 5 = 6 + 2 = 8 %. La moyenne simple (7,5 %) oublierait les poids."],
                    ['q' => "Le risque de change concerne un investisseur qui :", 'c' => ["Achète des titres à crédit auprès d’une banque", "Détient des titres rarement échangés en Bourse", "Investit dans une société déjà très endettée", "Possède des actifs en devises étrangères"], 'a' => 3, 'e' => "Si l’euro ou le dollar américain baisse face au dirham, la valeur en MAD de ces actifs diminue, même si leur prix local ne bouge pas."],
                    ['q' => "Quel élément n’entre PAS dans le rendement total d’une action ?", 'c' => ["Le salaire du dirigeant", "Le dividende perçu", "La plus-value à la revente", "La moins-value à la revente"], 'a' => 0, 'e' => "Le rendement vient des dividendes et de la variation du cours ; la rémunération du dirigeant n’en fait pas partie."],
                ],
            ],
            [
                'title' => "Obligations et taux d’intérêt",
                'description' => "Coupon, prix, remboursement et risque de crédit : le fonctionnement d’une obligation et son lien avec les taux du marché.",
                'questions' => [
                    ['q' => "Une obligation de 1 000 MAD verse 50 MAD de coupon par an. Son taux de coupon est de :", 'c' => ["50 %", "0,5 %", "20 %", "5 %"], 'a' => 3, 'e' => "Taux de coupon = coupon ÷ nominal = 50 ÷ 1 000 = 5 %."],
                    ['q' => "Pour l’entreprise qui l’émet, une obligation est :", 'c' => ["Un apport en capital sans remboursement", "Une dette à rembourser avec des intérêts", "Un revenu tiré de ses clients", "Une réserve de bénéfices"], 'a' => 1, 'e' => "L’émetteur emprunte : il devra payer les coupons puis rendre le capital, contrairement à une augmentation de capital."],
                    ['q' => "Les taux du marché passent de 3 % à 5 %. Une obligation déjà émise à 3 % fixe voit son prix :", 'c' => ["Baisser, car les nouveaux titres rapportent plus", "Monter, car son coupon devient plus rare sur le marché", "Rester stable puisque le coupon est fixe", "Doubler pour compenser la hausse"], 'a' => 0, 'e' => "Personne ne paie le plein prix un titre à 3 % quand on trouve du 5 % : son prix doit baisser pour que son rendement rattrape le marché."],
                    ['q' => "Une obligation à 1 an rembourse au total 1 050 MAD (capital et coupon). Le taux du marché est de 5 %. Son prix d’aujourd’hui est :", 'c' => ["1 102,5 MAD", "1 050 MAD", "1 000 MAD", "950 MAD"], 'a' => 2, 'e' => "On actualise : 1 050 ÷ 1,05 = 1 000 MAD. Multiplier par 1,05 (1 102,5) irait dans le mauvais sens."],
                    ['q' => "Une obligation de nominal 1 000 MAD verse 60 MAD par an ; on l’achète 750 MAD. Son rendement courant (coupon ÷ prix payé) est de :", 'c' => ["8 %", "6 %", "7,5 %", "10 %"], 'a' => 0, 'e' => "60 ÷ 750 = 0,08. Le coupon est calculé sur le nominal, mais le rendement du porteur se mesure sur ce qu’il a payé."],
                    ['q' => "Deux obligations de même durée : l’une émise par l’État, l’autre par une entreprise fragile. La seconde offre en général :", 'c' => ["Un taux plus bas, par prudence des investisseurs", "Le même taux, la durée étant égale", "Un taux nul, faute de garantie", "Un taux plus haut, pour le risque"], 'a' => 3, 'e' => "Plus l’émetteur risque de ne pas payer, plus il doit offrir de rendement pour attirer des prêteurs : c’est la prime de risque de crédit."],
                    ['q' => "Les taux montent d’un point. Quel titre perd le plus de valeur ?", 'c' => ["Une obligation arrivant à échéance dans 3 mois", "Une obligation à 20 ans à coupon fixe", "Un dépôt à vue sans échéance", "Une obligation arrivant à échéance dans 1 an"], 'a' => 1, 'e' => "Plus les flux sont lointains, plus leur valeur actuelle est touchée par un changement de taux ; l’échéance courte protège."],
                    ['q' => "Une obligation de nominal 1 000 MAD cote 1 040 MAD. On dit qu’elle cote :", 'c' => ["À l’échéance finale", "Exactement au pair", "Au-dessus du pair", "En situation de défaut"], 'a' => 2, 'e' => "Le pair, c’est le nominal ; un prix supérieur signifie « au-dessus du pair », fréquent quand son coupon dépasse les taux actuels."],
                    ['q' => "On achète 960 MAD une obligation qui verse 40 MAD de coupon dans l’année, puis est remboursée 1 000 MAD. Le gain total est de :", 'c' => ["40 MAD", "60 MAD", "100 MAD", "80 MAD"], 'a' => 3, 'e' => "Coupon de 40 plus gain en capital de 1 000 − 960 = 40 : au total 80 MAD. Oublier l’un des deux donne 40."],
                    ['q' => "En cas de faillite de l’entreprise, qui est servi en premier ?", 'c' => ["Les obligataires passent d’abord", "Les actionnaires, avant les obligataires", "Les deux au même rang", "Les dirigeants, avant tous"], 'a' => 0, 'e' => "Les créanciers passent avant les propriétaires : l’actionnaire n’est payé que sur ce qui reste, d’où un risque plus grand."],
                    ['q' => "Aïcha prête 2 000 MAD pendant un an à 4 % d’intérêt simple. Elle recevra en tout :", 'c' => ["2 008 MAD", "2 040 MAD", "2 080 MAD", "Plus de 2 400 MAD"], 'a' => 2, 'e' => "Intérêt : 2 000 × 0,04 = 80 MAD, à ajouter au capital : 2 080 MAD."],
                ],
            ],
            [
                'title' => "Valeur temporelle de l’argent et inflation",
                'description' => "Actualiser des flux, calculer une valeur actuelle nette et mesurer l’effet de l’inflation sur le rendement réel.",
                'questions' => [
                    ['q' => "Ali préfère recevoir 1 000 MAD aujourd’hui plutôt que dans un an, même sans inflation. Quelle raison économique l’explique ?", 'c' => ["Il peut les placer et toucher des intérêts", "Les billets perdent leur valeur légale", "Les banques refusent les paiements différés", "L’État taxe les sommes reçues plus tard"], 'a' => 0, 'e' => "Une somme disponible tout de suite peut être placée ou investie : c’est l’intérêt perdu qui fait le prix de l’attente."],
                    ['q' => "On place 100 MAD à 5 % pendant 2 ans, intérêts composés. Le montant final est de :", 'c' => ["110 MAD", "120 MAD", "110,25 MAD", "Plus de 120 MAD"], 'a' => 2, 'e' => "100 × 1,05 = 105, puis 105 × 1,05 = 110,25. La 2e année, les intérêts rapportent eux aussi des intérêts."],
                    ['q' => "La valeur actuelle de 2 200 MAD reçus dans un an, avec un taux d’actualisation de 10 %, est de :", 'c' => ["1 980 MAD", "2 000 MAD", "2 200 MAD", "Plus de 2 400 MAD"], 'a' => 1, 'e' => "On divise par 1,10 : 2 200 ÷ 1,10 = 2 000. Retirer 10 % du montant (1 980) est l’erreur classique."],
                    ['q' => "Un projet coûte 1 000 MAD aujourd’hui et rapporte 1 100 MAD dans un an ; le taux d’actualisation est de 8 %. Sa VAN est d’environ :", 'c' => ["+100 MAD", "+8 MAD", "−18,52 MAD", "+18,5 MAD"], 'a' => 3, 'e' => "Valeur actuelle des 1 100 : 1 100 ÷ 1,08 ≈ 1 018,5, d’où VAN ≈ 1 018,5 − 1 000 = +18,5 MAD : le projet crée de la valeur."],
                    ['q' => "La VAN calculée pour un autre projet est négative. On peut conclure que :", 'c' => ["Le projet est sans risque", "Il rapporte moins que le rendement exigé", "Il fait perdre tout le capital investi", "Le taux d’actualisation est nul"], 'a' => 1, 'e' => "VAN négative : les flux actualisés ne couvrent pas la dépense initiale, le projet rapporte moins que le taux demandé, sans forcément tout perdre."],
                    ['q' => "Un placement offre 5 % nominal pendant que l’inflation est de 3 %. Son rendement réel est proche de :", 'c' => ["2 %", "8 %", "3 %", "Plus de 5 %"], 'a' => 0, 'e' => "On retire la hausse des prix du rendement nominal : 5 − 3 ≈ 2 % (exactement 1,05 ÷ 1,03 − 1 ≈ 1,9 %)."],
                    ['q' => "Un livret rapporte 3 % alors que l’inflation est de 5 %. Le pouvoir d’achat de l’épargne :", 'c' => ["Augmente d’environ 2 %", "Augmente de 3 %", "Baisse d’environ 2 %", "Reste stable"], 'a' => 2, 'e' => "Les prix montent plus vite que le capital : rendement réel ≈ 3 − 5 = −2 %, l’épargne achète moins qu’avant."],
                    ['q' => "Le prix du kilo de sardines augmente de 10 % alors que l’indice général des prix est stable. Parle-t-on d’inflation ?", 'c' => ["Oui, une seule hausse suffit à la définir", "Oui, car les sardines sont un bien essentiel", "Oui, dès que le prix grimpe de plus de 10 %", "Non, seule une hausse générale compte"], 'a' => 3, 'e' => "L’inflation désigne l’élévation du niveau général des prix ; le renchérissement d’un seul produit est un changement de prix relatif."],
                    ['q' => "Un panier de courses coûte 500 MAD. Avec 4 % d’inflation, il coûtera dans un an :", 'c' => ["520 MAD", "504 MAD", "525 MAD", "Plus de 540 MAD"], 'a' => 0, 'e' => "4 % de 500, c’est 20 MAD : 500 + 20 = 520 MAD."],
                    ['q' => "Le taux d’actualisation passe de 5 % à 10 %, les flux futurs restant inchangés. Leur valeur actuelle :", 'c' => ["Augmente", "Reste identique", "Diminue", "Devient nulle"], 'a' => 2, 'e' => "Un taux plus élevé signifie un diviseur plus grand : les euros ou dirhams lointains « pèsent » moins aujourd’hui."],
                    ['q' => "Selon la règle de 70, une somme placée à 7 % par an double en environ :", 'c' => ["7 ans", "10 ans", "14 ans", "Plus de 20 ans"], 'a' => 1, 'e' => "On divise 70 par le taux : 70 ÷ 7 = 10 ans (1,07 puissance 10 donne bien près de 2)."],
                ],
            ],
            [
                'title' => "Intermédiaires financiers et décisions d’investissement",
                'description' => "Rôle des banques, fonds et assurances, puis arbitrages entre liquidité, risque, horizon et rendement pour construire un portefeuille.",
                'questions' => [
                    ['q' => "Pourquoi un épargnant passe-t-il souvent par une banque plutôt que de prêter directement à une PME qu’il ne connaît pas ?", 'c' => ["La banque garantit à l’épargnant que la PME réussira", "Elle évalue le risque et répartit les prêts", "La loi interdit les prêts entre particuliers", "La banque fixe le prix de la PME"], 'a' => 1, 'e' => "La banque a les moyens d’analyser les emprunteurs et de mélanger de nombreux prêts, ce qu’un particulier ne peut guère faire seul."],
                    ['q' => "Une banque finance des crédits immobiliers sur 20 ans avec des dépôts que les clients peuvent retirer à tout moment. Ce décalage l’expose à :", 'c' => ["Un risque de change", "Un risque de dividendes futurs", "Un risque de salaires", "Un risque de liquidité"], 'a' => 3, 'e' => "Si trop de déposants retirent leur argent en même temps, la banque ne peut pas récupérer les prêts longs aussitôt : elle manque de liquidités."],
                    ['q' => "Un fonds commun de placement réunit l’argent de nombreux épargnants et l’investit en titres variés. Quel est son avantage pour un petit épargnant ?", 'c' => ["Un rendement assuré par la société de gestion", "Une absence totale de frais", "Une diversification avec peu d’argent", "Le choix du prix des titres"], 'a' => 2, 'e' => "Avec quelques centaines de MAD, on détient une part d’un panier de titres. Frais et rendement, eux, ne sont jamais garantis."],
                    ['q' => "Samira économise pour un achat prévu dans 6 mois. Quel placement convient le mieux ?", 'c' => ["Un compte sur livret, disponible à tout moment", "Des actions de petites sociétés", "Une obligation à 20 ans", "Un terrain à revendre"], 'a' => 0, 'e' => "À court terme, on privilégie la sécurité et la disponibilité : des actions peuvent baisser juste avant la date du paiement."],
                    ['q' => "Un jeune actif épargne pour sa retraite, dans 35 ans. Pourquoi peut-il accepter une grande part d’actions ?", 'c' => ["Elles assurent un gain à long terme", "Elles sont plus liquides que les dépôts", "Il a le temps d’absorber les baisses", "Elles échappent à l’inflation"], 'a' => 2, 'e' => "Un horizon long laisse le temps d’encaisser les baisses de cours ; cela réduit le risque d’avoir à vendre au pire moment, sans rien garantir."],
                    ['q' => "Karim répartit 10 000 MAD : 6 000 en actions (rendement −10 %) et 4 000 en obligations (+5 %). Le rendement du portefeuille est de :", 'c' => ["−5 %", "−4 %", "−2,5 %", "+2 %"], 'a' => 1, 'e' => "Actions : −600 MAD ; obligations : +200 MAD ; total −400 sur 10 000, soit −4 %. Moyenne simple (−2,5 %) fausse car les parts diffèrent."],
                    ['q' => "Une compagnie d’assurance encaisse les primes de milliers de clients et indemnise ceux qui subissent un sinistre. Ce principe repose sur :", 'c' => ["La fixation de la monnaie", "La concentration du risque sur un client", "L’impôt sur les primes", "La mutualisation des risques"], 'a' => 3, 'e' => "Peu d’assurés ont un sinistre la même année : les primes de tous financent les pertes de quelques-uns."],
                    ['q' => "Un fonds gagne 6 % brut et prélève 1,5 % de frais de gestion. Le rendement net pour l’épargnant est de :", 'c' => ["4,5 %", "Environ 7,5 %", "6 %", "3 %"], 'a' => 0, 'e' => "Les frais se retranchent : 6 − 1,5 = 4,5 %. C’est ce rendement net qui compte vraiment."],
                    ['q' => "Du point de vue de l’ensemble de l’économie, que peut devenir l’épargne des ménages transitant par le système financier ?", 'c' => ["Elle est détruite par la Bourse", "Elle sert surtout à rembourser la dette de l’État", "Elle finance l’investissement des entreprises", "Elle se transforme aussitôt en consommation"], 'a' => 2, 'e' => "Banques et marchés orientent l’épargne vers les entreprises qui achètent des machines ou construisent des usines."],
                    ['q' => "Un démarcheur promet 3 % par mois, garantis et sans risque. Quelle réaction est la plus raisonnable ?", 'c' => ["Investir rapidement pour profiter de l’offre", "Se méfier, c’est trop beau pour être vrai", "Investir la moitié et attendre un mois pour voir", "Emprunter pour investir encore davantage"], 'a' => 1, 'e' => "Un rendement élevé s’accompagne d’un risque élevé ; une promesse des deux, sans risque, est le signe typique d’une arnaque."],
                    ['q' => "Un investisseur compare un livret (2 %, retrait immédiat) et un placement bloqué 5 ans (4 %). L’écart de taux traduit surtout :", 'c' => ["Une erreur du marché à exploiter", "Un effet de l’inflation", "Une garantie de l’État sur le second", "Une compensation pour l’argent immobilisé"], 'a' => 3, 'e' => "Renoncer à sa liquidité a un prix : le placement bloqué doit rapporter davantage pour séduire."],
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
