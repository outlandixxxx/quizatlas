<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class IndustrialEconomicsBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'industrial-economics')->firstOrFail();

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
                'title' => "Fondements des structures de marché",
                'description' => "Ce quiz introduit les principales structures de marché et les critères qui permettent de les distinguer.",
                'questions' => [
                    ['q' => "Des centaines de maraîchers vendent des tomates quasi identiques sur un grand marché de gros, et aucun ne peut peser sur le prix. Quelle structure de marché est la plus proche ?", 'c' => ["Monopole", "Oligopole", "Concurrence parfaite", "Concurrence monopolistique"], 'a' => 2, 'e' => "Beaucoup de vendeurs, produit homogène, aucun pouvoir sur le prix : c’est le schéma de la concurrence pure et parfaite."],
                    ['q' => "Sur une petite île, une seule entreprise vend du gaz en bouteille et aucun substitut proche n’existe. Elle est en situation de :", 'c' => ["monopole", "concurrence parfaite", "oligopole", "concurrence monopolistique"], 'a' => 0, 'e' => "Un seul offreur et pas de produit de remplacement : on parle de monopole (mono = un seul)."],
                    ['q' => "Trois opérateurs se partagent l’essentiel des abonnements mobiles d’un pays. Ce marché relève surtout :", 'c' => ["du monopole", "de la concurrence parfaite", "de la concurrence monopolistique", "de l’oligopole"], 'a' => 3, 'e' => "Quelques grands vendeurs dominent la demande : c’est la définition d’un oligopole."],
                    ['q' => "Une entreprise est dite « preneuse de prix » lorsqu’elle :", 'c' => ["choisit librement son prix selon sa demande", "prend le prix du marché comme une donnée qu’elle ne contrôle pas", "fixe son prix en accord avec ses rivales", "vend uniquement à des clients publics"], 'a' => 1, 'e' => "Dans la concurrence parfaite, chaque vendeur est trop petit pour influencer le prix ; il l’accepte tel quel."],
                    ['q' => "Dans une même rue, vingt restaurants proposent chacun une cuisine et une ambiance distinctes, et chacun peut ouvrir ou fermer librement. Quelle structure de marché est la plus proche ?", 'c' => ["Concurrence monopolistique", "Concurrence pure et parfaite", "Monopole", "Oligopole"], 'a' => 0, 'e' => "Nombreux vendeurs et entrée libre, mais produits différenciés : chacun a un petit pouvoir sur son prix, c’est la concurrence monopolistique."],
                    ['q' => "Lequel de ces éléments constitue une barrière à l’entrée ?", 'c' => ["Une forte demande des consommateurs", "Une baisse du coût du transport", "Un brevet protégeant une invention", "Une hausse du nombre d’acheteurs"], 'a' => 2, 'e' => "Le brevet interdit temporairement l’imitation et protège l’entreprise en place des entrants ; une demande forte, au contraire, attire de nouveaux vendeurs."],
                    ['q' => "Lequel de ces termes désigne un marché où il y a un seul acheteur plutôt qu’un seul vendeur ?", 'c' => ["Monopole naturel", "Monopsone", "Duopole", "Oligopole"], 'a' => 1, 'e' => "Le monopsone est le miroir du monopole, côté demande. Moyen mnémotechnique : psone ~ « je suis seul à acheter »."],
                    ['q' => "Cinq entreprises réalisent des ventes de 50, 30, 10, 5 et 5 millions de DH. Quelle part du marché la plus grande détient-elle ?", 'c' => ["Un tiers du marché", "Près des deux tiers du marché", "Un dixième du marché", "La moitié du marché"], 'a' => 3, 'e' => "Le total vaut 100 millions ; 50 divisé par 100 donne 50 %."],
                    ['q' => "Karim dit : « Un monopole, c’est simplement une très grande entreprise. » Quelle correction est exacte ?", 'c' => ["Un monopole appartient nécessairement à l’État", "Un monopole est une firme qui rachète ses fournisseurs", "Un monopole est une firme face à de nombreux rivaux proches", "Ce qui compte, c’est d’être seul vendeur, pas la taille"], 'a' => 3, 'e' => "Une petite boutique peut être monopoleur dans un village isolé : c’est l’absence de concurrents, et non la taille, qui définit le monopole."],
                    ['q' => "Le blé tendre de qualité standard livré par deux coopératives différentes est, pour un minotier, un bien :", 'c' => ["différencié verticalement", "homogène", "de luxe", "différencié horizontalement"], 'a' => 1, 'e' => "Si l’acheteur ne distingue pas les deux lots, le produit est homogène, condition de la concurrence parfaite."],
                    ['q' => "Dans le modèle de concurrence parfaite, l’entrée sur le marché est :", 'c' => ["libre pour tout producteur qui souhaite produire", "soumise à une licence", "réservée aux entreprises déjà cotées", "impossible à court terme"], 'a' => 0, 'e' => "Sans barrière, tout producteur qui voit des profits peut entrer ; c’est ce qui tire les profits vers zéro à long terme."],
                    ['q' => "Deux entreprises détiennent 90 % des ventes d’un secteur. Ce chiffre suggère plutôt :", 'c' => ["un marché très atomisé", "une concurrence parfaite", "un marché très concentré", "l’absence de barrières à l’entrée"], 'a' => 2, 'e' => "Quand deux acteurs captent presque tout, les autres se partagent des miettes : forte concentration, proche du duopole."],
                ],
            ],
            [
                'title' => "Concurrence, pouvoir de marché et monopole",
                'description' => "Ce quiz porte sur le pouvoir de marché, le comportement d’un monopole et les effets élémentaires de la concurrence.",
                'questions' => [
                    ['q' => "Par rapport à la concurrence parfaite, un monopole non régulé tend à produire :", 'c' => ["plus, avec un prix plus élevé", "moins, à un prix plus élevé", "moins, avec un prix plus bas", "autant, avec le même prix"], 'a' => 1, 'e' => "Le monopole restreint la quantité pour faire monter le prix ; c’est ce qui pénalise les consommateurs."],
                    ['q' => "Pour maximiser son profit, un monopole augmente sa production tant que :", 'c' => ["le prix reste supérieur au coût fixe", "la recette totale n’atteint pas zéro", "le coût moyen continue de monter", "la recette de l’unité en plus dépasse son coût"], 'a' => 3, 'e' => "Chaque unité supplémentaire ajoute du profit si elle rapporte plus qu’elle ne coûte ; on s’arrête quand Rm = Cm."],
                    ['q' => "Un monopole vend 200 unités à 30 DH l’unité et supporte 4 500 DH de coûts totaux. Son profit vaut :", 'c' => ["1 500 DH", "6 000 DH", "4 500 DH", "10 500 DH"], 'a' => 0, 'e' => "Recette = 200 × 30 = 6 000 DH ; profit = 6 000 − 4 500 = 1 500 DH."],
                    ['q' => "Une boulangerie passe le prix du pain de 2,00 à 2,20 DH, soit +10 %, et ses ventes baissent de 20 %. La demande est :", 'c' => ["inélastique", "parfaitement inélastique", "élastique", "d’élasticité unitaire"], 'a' => 2, 'e' => "La quantité réagit deux fois plus que le prix (élasticité en valeur absolue égale à 2) ; la recette baisse, la demande est élastique."],
                    ['q' => "Un prix de 50 DH, un coût marginal de 40 DH : l’indice de Lerner (P − Cm) / P vaut :", 'c' => ["0,25", "0,8", "0,2", "10"], 'a' => 2, 'e' => "(50 − 40) / 50 = 0,2. Plus l’indice est élevé, plus le pouvoir de marché est grand ; il vaut 0 en concurrence parfaite."],
                    ['q' => "Le monopole réduit la quantité échangée, et des échanges profitables pour les deux parties n’ont pas lieu. Cette perte de bien-être est appelée :", 'c' => ["la perte sèche", "la rente du producteur", "le surplus du consommateur", "la subvention implicite"], 'a' => 0, 'e' => "Ces échanges manquants ne profitent à personne : ni au vendeur, ni à l’acheteur. On parle de perte sèche (ou perte nette)."],
                    ['q' => "Un laboratoire détient un brevet et pourrait passer son prix de 100 à 1 000 DH. Pourquoi ne le fait-il pas forcément ?", 'c' => ["Une loi interdit à tout monopole de dépasser 200 DH", "Son coût marginal deviendrait nul", "Un brevet ne permet pas de choisir son prix", "Les ventes chuteraient et réduiraient son profit"], 'a' => 3, 'e' => "La demande décroît avec le prix : au-delà d’un certain niveau, le volume perdu l’emporte sur le gain par unité."],
                    ['q' => "Un cinéma fait payer moins cher les étudiants que les adultes pour la même séance. Cette pratique est :", 'c' => ["une vente à perte volontaire", "une discrimination par les prix", "une stratégie de prix prédateur", "une entente sur les prix"], 'a' => 1, 'e' => "Même produit, prix différent selon la disposition à payer du groupe : c’est de la discrimination tarifaire."],
                    ['q' => "Laquelle de ces situations n’est pas une source de pouvoir de marché ?", 'c' => ["De nombreux rivaux vendant le même produit", "Le contrôle exclusif d’une matière première rare", "Une licence exclusive d’exploitation", "Un brevet encore en vigueur"], 'a' => 0, 'e' => "Beaucoup de rivaux proches obligent à aligner son prix. Les trois autres cas écartent ou limitent les concurrents."],
                    ['q' => "Pourquoi la distribution d’eau par canalisations est-elle souvent présentée comme un monopole naturel ?", 'c' => ["L’eau est un produit essentiel sans aucun substitut", "La loi interdit l’importation de l’eau", "Un seul réseau coûte moins cher que plusieurs", "Les ménages refusent de comparer les prix"], 'a' => 2, 'e' => "Les coûts fixes du réseau sont énormes : dupliquer les tuyaux ferait grimper le coût moyen, donc un seul opérateur est plus efficace."],
                    ['q' => "Un secteur dégage de gros profits et personne n’empêche d’y entrer. Que prévoit-on ?", 'c' => ["Une hausse continue des profits des firmes en place", "Des entrants arrivent, l’offre augmente et les profits reculent", "La sortie progressive des entreprises du secteur", "Une montée des prix portée par l’offre"], 'a' => 1, 'e' => "Les profits attirent des entrants ; l’offre augmente, les prix reculent et les profits se réduisent."],
                    ['q' => "Un monopole peut se montrer prudent sur ses prix si des concurrents pourraient entrer facilement et à faible coût. Cette idée porte le nom de :", 'c' => ["marché captif", "marché à terme dérivé", "marché parallèle informel", "marché contestable"], 'a' => 3, 'e' => "Même seul sur le marché, le vendeur redoute l’entrée d’un rival : la simple menace discipline ses prix."],
                ],
            ],
            [
                'title' => "Oligopole et stratégies des entreprises",
                'description' => "Ce quiz explore l’interdépendance entre quelques grandes entreprises et quelques décisions stratégiques simples.",
                'questions' => [
                    ['q' => "Sur une ligne aérienne desservie par deux compagnies seulement, l’une baisse son tarif et l’autre perd des passagers. Ce lien entre leurs résultats s’appelle :", 'c' => ["l’indépendance des décisions", "l’économie d’échelle", "la différenciation verticale", "l’interdépendance"], 'a' => 3, 'e' => "Dans un oligopole, le résultat de chacun dépend aussi du choix des rivaux : on doit anticiper leurs réactions."],
                    ['q' => "Deux entreprises choisissent en même temps la quantité à produire, en tenant compte de celle de l’autre. Ce modèle est celui de :", 'c' => ["Bertrand", "Cournot", "Hotelling", "Lerner"], 'a' => 1, 'e' => "Cournot : concurrence en quantités. Bertrand : concurrence en prix. Pense « Q comme Cournot »."],
                    ['q' => "Deux firmes vendent un produit identique, ont le même coût marginal et se concurrencent sur les prix (modèle de Bertrand). Le prix d’équilibre est :", 'c' => ["égal au prix de monopole", "égal à la moitié du prix de monopole", "égal au coût marginal", "supérieur au coût moyen"], 'a' => 2, 'e' => "Si l’une fixe un prix plus haut, tous les clients vont chez l’autre ; la surenchère à la baisse s’arrête quand P = Cm."],
                    ['q' => "Deux brasseurs gagnent chacun 10 s’ils gardent un prix élevé, 6 chacun s’ils baissent tous deux, et 14 contre 4 si un seul baisse. À l’équilibre de Nash :", 'c' => ["les deux baissent leur prix", "les deux gardent un prix élevé", "l’un baisse et l’autre non", "aucun équilibre n’existe"], 'a' => 0, 'e' => "Baisser est préférable quel que soit le choix de l’autre (14 > 10 et 6 > 4) : les deux baissent et finissent à 6, moins bien qu’à 10. C’est le dilemme du prisonnier."],
                    ['q' => "Pourquoi un cartel est-il fragile ?", 'c' => ["Les membres voient leurs coûts monter ensemble", "Chaque membre gagne à tricher en dépassant son quota", "La demande augmente dès que le prix est fixé", "Les membres perdent le droit de fixer leur prix"], 'a' => 1, 'e' => "Le prix élevé est profitable à tous, mais celui qui triche encaisse davantage ; la tentation de dévier menace l’accord."],
                    ['q' => "Trois cimentiers conviennent par téléphone de relever leurs prix le même jour. Cette décision est :", 'c' => ["une fusion horizontale entre rivaux", "une intégration verticale", "une innovation de procédé", "une entente illicite sur les prix"], 'a' => 3, 'e' => "Se concerter sur les prix supprime la concurrence : c’est une entente, sanctionnée par le droit de la concurrence."],
                    ['q' => "Une grande firme annonce son nouveau prix et les plus petites s’alignent aussitôt. Il s’agit de :", 'c' => ["leadership de prix", "discrimination par les prix", "prix prédateur", "vente liée"], 'a' => 0, 'e' => "Une entreprise dominante donne le ton, les autres suivent : c’est le price leadership, qui n’exige pas d’accord explicite."],
                    ['q' => "Dans un jeu répété sur de nombreuses périodes, la collusion tacite devient plus facile, car :", 'c' => ["chacun ignore le prix du rival", "les coûts des firmes baissent peu à peu", "la tricherie peut être punie par une guerre des prix ensuite", "les clients paient moins cher chaque année"], 'a' => 2, 'e' => "La menace d’une guerre des prix future pèse davantage que le gain d’une tricherie ponctuelle."],
                    ['q' => "Deux vendeurs de glaces s’installent sur une plage, les clients allant au vendeur le plus proche. Dans le modèle de Hotelling, ils s’installent :", 'c' => ["aux deux extrémités de la plage", "aux quarts de la plage, loin l’un de l’autre", "côte à côte, au milieu de la plage", "au hasard le long de la plage"], 'a' => 2, 'e' => "Chacun gagne des clients en se rapprochant du centre ; au final ils sont collés, alors que le placement aux quarts serait plus avantageux pour les clients."],
                    ['q' => "Deux marques de téléphones affichent des prix presque identiques et se battent sur la qualité de l’appareil photo et la durée de garantie. C’est de :", 'c' => ["la concurrence hors prix", "une guerre des prix ouverte", "une entente entre les deux marques", "le dumping sur les marchés étrangers"], 'a' => 0, 'e' => "Quand le prix est stable, la rivalité se déplace vers la qualité, le service, la publicité : concurrence hors prix."],
                    ['q' => "Une firme installée construit volontairement une usine très au-dessus de la demande actuelle, pour pouvoir inonder le marché si un rival arrive. Elle cherche à :", 'c' => ["réduire ses coûts fixes à court terme", "relever son prix dès la mise en service", "cesser son activité", "décourager de nouveaux entrants"], 'a' => 3, 'e' => "La capacité excédentaire rend crédible la menace d’une baisse des prix : c’est une barrière stratégique."],
                    ['q' => "Dans le modèle de la demande coudée, les prix tendent à être rigides parce que :", 'c' => ["les rivaux suivent les hausses mais pas les baisses", "les rivaux suivent les baisses mais pas les hausses", "l’État fixe les prix de tous les produits du secteur", "la demande ne réagit jamais au prix"], 'a' => 1, 'e' => "Monter seul fait perdre des clients, baisser seul n’en fait pas gagner car les autres s’alignent : on préfère ne pas bouger."],
                ],
            ],
            [
                'title' => "Barrières à l’entrée, concentration et économies d’échelle",
                'description' => "Ce quiz porte sur les facteurs qui influencent l’entrée sur un marché et le degré de concentration d’une industrie.",
                'questions' => [
                    ['q' => "Les coûts fixes d’une usine sont de 10 000 DH. Quand la production passe de 1 000 à 2 000 unités, le coût fixe par unité passe :", 'c' => ["de 10 à 20 DH", "de 5 à 10 DH", "de 10 DH à 10 DH", "de 10 à 5 DH"], 'a' => 3, 'e' => "10 000 / 1 000 = 10 DH, puis 10 000 / 2 000 = 5 DH : le coût fixe est dilué sur plus d’unités."],
                    ['q' => "Une cimenterie double sa production et son coût total augmente de 60 %. Que constate-t-on ?", 'c' => ["Des déséconomies d’échelle : le coût moyen monte de 20 %", "Des économies d’échelle : le coût moyen baisse de 20 %", "Des rendements constants : le coût moyen reste stable", "Des économies d’échelle : le coût moyen baisse de 40 %"], 'a' => 1, 'e' => "Le coût moyen est multiplié par 1,6 / 2 = 0,8, donc il recule de 20 %."],
                    ['q' => "L’échelle minimale efficace d’une industrie représente 40 % du marché. Combien d’entreprises efficaces peut-il y avoir au maximum ?", 'c' => ["1", "4", "2", "40"], 'a' => 2, 'e' => "100 / 40 = 2,5 : deux entreprises seulement atteignent la taille efficace ; ce marché tend vers le duopole."],
                    ['q' => "Dans un secteur, les quatre premières entreprises détiennent 30 %, 25 %, 15 % et 10 % des ventes. Que vaut le ratio CR4 ?", 'c' => ["80 %, somme des parts des quatre plus grandes", "30 %, part de la plus grande firme", "20 %, moyenne des quatre parts", "70 %, somme des trois premières parts"], 'a' => 0, 'e' => "On additionne les parts des quatre premières : 30 + 25 + 15 + 10 = 80 %. Le CR4 mesure le poids cumulé des quatre plus grandes."],
                    ['q' => "Lequel de ces exemples constitue une barrière réglementaire à l’entrée ?", 'c' => ["Une marque connue depuis longtemps", "Des agréments plafonnés par l’administration", "Un coût de transport élevé vers la région", "Une technologie difficile à maîtriser"], 'a' => 1, 'e' => "Les agréments plafonnés viennent d’une décision publique ; marque, logistique et technique sont des obstacles de marché, pas de règles."],
                    ['q' => "Pour entrer sur son marché, un entrant doit bâtir une usine sur mesure, impossible à revendre s’il échoue. Cette dépense est un coût :", 'c' => ["marginal", "variable", "d’opportunité nul", "irrécupérable"], 'a' => 3, 'e' => "Un coût irrécupérable (ou échoué) ne se récupère pas à la sortie : il rend l’entrée plus risquée."],
                    ['q' => "Parmi ces éléments, lequel n’est pas une barrière à l’entrée mais plutôt un attrait pour les entrants ?", 'c' => ["Une demande en forte croissance", "Un brevet détenu par l’entreprise en place", "L’accès exclusif à une matière première", "Une licence limitée à quelques opérateurs"], 'a' => 0, 'e' => "Une demande qui s’envole promet des ventes à qui arrive ; les trois autres éléments bloquent l’accès au marché."],
                    ['q' => "Un nouveau réseau social, techniquement meilleur, n’arrive pas à décoller car tous les contacts des utilisateurs sont sur l’ancien. Quel phénomène l’explique ?", 'c' => ["Les économies d’envergure", "La hausse des coûts variables", "Les effets de réseau", "L’élasticité-prix de la demande"], 'a' => 2, 'e' => "L’utilité d’un réseau croît avec le nombre d’utilisateurs : l’acteur installé garde un avantage difficile à rattraper."],
                    ['q' => "Changer d’opérateur mobile oblige à changer de numéro et à reconfigurer ses services. Ce frein a pour nom :", 'c' => ["coût de transport", "coût variable moyen", "coût de changement", "coût marginal"], 'a' => 2, 'e' => "Les clients restent chez leur fournisseur pour éviter ces efforts, ce qui protège l’entreprise en place."],
                    ['q' => "Entre 2015 et 2025, l’indice HHI d’un secteur passe de 800 à 2 400. Cela signifie :", 'c' => ["que la concentration a fortement augmenté depuis 2015", "que la concurrence s’est intensifiée", "que le nombre d’entreprises a augmenté", "que les prix ont baissé dans le secteur"], 'a' => 0, 'e' => "Le HHI s’accroît quand quelques acteurs prennent plus de parts ; il ne dit rien directement sur les prix."],
                    ['q' => "Une laiterie fabrique lait, yaourts et fromages avec les mêmes machines et les mêmes camions, à un coût inférieur à celui de trois entreprises séparées. Il s’agit :", 'c' => ["d’économies d’échelle", "d’effets de réseau", "de rendements décroissants", "d’économies d’envergure"], 'a' => 3, 'e' => "Produire plusieurs biens ensemble partage des moyens communs : c’est l’économie d’envergure (de gamme), distincte de l’échelle."],
                    ['q' => "Une firme installée fixe volontairement un prix assez bas pour qu’un entrant potentiel ne puisse pas être rentable. Cette stratégie s’appelle :", 'c' => ["le prix d’appel", "le prix limite", "le prix de transfert", "le prix psychologique"], 'a' => 1, 'e' => "Le prix limite décourage l’entrée en sacrifiant une partie du profit présent pour protéger sa position."],
                ],
            ],
            [
                'title' => "Prix, coûts, produits et organisation industrielle",
                'description' => "Ce quiz relie les notions de prix, de coûts, de différenciation et de taille des entreprises dans l’analyse industrielle.",
                'questions' => [
                    ['q' => "Une entreprise vend 500 unités à 40 DH l’unité et supporte 14 000 DH de coûts totaux. Son profit est de :", 'c' => ["20 000 DH", "6 000 DH", "14 000 DH", "34 000 DH"], 'a' => 1, 'e' => "Recette = 500 × 40 = 20 000 DH ; profit = 20 000 − 14 000 = 6 000 DH."],
                    ['q' => "Une unité supplémentaire rapporterait 80 DH de recette pour 50 DH de coût supplémentaire. Que conseille le raisonnement marginal ?", 'c' => ["S’en abstenir, car 50 DH s’ajoutent aux coûts", "Attendre que le coût marginal tombe à zéro", "La produire seulement si la recette moyenne dépasse 80 DH", "La produire, car elle ajoute 30 DH de profit"], 'a' => 3, 'e' => "Tant que la recette marginale excède le coût marginal (80 > 50), produire augmente le profit."],
                    ['q' => "Une marque de fromage propose le même produit en trois goûts (nature, poivre, fines herbes) au même prix. Cette différenciation est :", 'c' => ["horizontale", "verticale", "par les coûts", "temporelle"], 'a' => 0, 'e' => "Les goûts diffèrent sans que l’un soit meilleur pour tous : la différenciation est horizontale."],
                    ['q' => "Deux téléphones coûtent le même prix, mais l’un offre deux fois plus de mémoire et un meilleur écran. Presque tous préféreraient celui-ci. Cette différenciation est :", 'c' => ["horizontale", "spatiale", "verticale", "fiscale"], 'a' => 2, 'e' => "Quand tout le monde classe les produits dans le même ordre selon la qualité, la différenciation est verticale."],
                    ['q' => "Une boulangerie dont le coût de revient d’une baguette est de 0,80 DH applique une marge de 25 % sur ce coût. Le prix de vente est :", 'c' => ["1,07 DH", "0,85 DH", "1,00 DH", "1,25 DH"], 'a' => 2, 'e' => "0,80 × 1,25 = 1,00 DH. Attention : 1,07 correspondrait à une marge de 25 % sur le prix, non sur le coût."],
                    ['q' => "Les coûts fixes sont de 12 000 DH ; un article se vend 50 DH pour 30 DH de coût variable. Le seuil de rentabilité est de :", 'c' => ["600 unités", "400 unités", "240 unités", "1 200 unités"], 'a' => 0, 'e' => "Chaque unité dégage 50 − 30 = 20 DH de marge ; 12 000 / 20 = 600 unités."],
                    ['q' => "Le coût marginal croise la courbe de coût moyen :", 'c' => ["en son maximum", "à l’origine", "quand la production est nulle", "en son minimum"], 'a' => 3, 'e' => "Tant que le coût marginal est sous le coût moyen, il le tire vers le bas ; au-dessus, il le tire vers le haut : le croisement est au point bas."],
                    ['q' => "Sur un marché de concurrence parfaite sans barrières, des profits positifs attirent des entrants. À long terme, le profit économique d’une entreprise tend vers :", 'c' => ["un niveau positif stable", "zéro", "un niveau négatif", "le montant de la recette"], 'a' => 1, 'e' => "Les entrées font baisser le prix jusqu’au coût moyen minimum, donc il ne reste plus de profit au-delà de la rémunération normale."],
                    ['q' => "Un parc d’attractions fait payer un droit d’entrée puis un prix par manège. Cette tarification est :", 'c' => ["à deux parties", "au coût marginal pur", "prédatrice", "fondée sur un prix plafond"], 'a' => 0, 'e' => "Un montant fixe (l’entrée) plus un prix à l’usage : c’est la tarification en deux parties."],
                    ['q' => "Une marque investit beaucoup en publicité pour fidéliser sa clientèle. L’effet recherché sur sa demande est de la rendre :", 'c' => ["plus élastique au prix", "parfaitement élastique", "moins élastique au prix", "indépendante de la qualité"], 'a' => 2, 'e' => "Des clients attachés à la marque réagissent moins à une hausse de prix, ce qui donne à l’entreprise une marge de manœuvre."],
                    ['q' => "Le prix de l’électricité augmente fortement pour une cimenterie. Quel est l’effet immédiat sur l’entreprise ?", 'c' => ["Sa demande augmente", "Ses coûts de production montent et sa marge diminue à prix inchangé", "Ses coûts fixes disparaissent", "Ses barrières à l’entrée sont supprimées"], 'a' => 1, 'e' => "L’électricité est un intrant : plus cher, elle alourdit le coût, ce qui réduit la marge si le prix de vente ne bouge pas."],
                    ['q' => "Une entreprise devient si grande que la lourdeur de sa gestion fait remonter son coût moyen. On parle de :", 'c' => ["économies d’envergure et de gamme", "effets de réseau", "coûts irrécupérables", "déséconomies d’échelle"], 'a' => 3, 'e' => "Au-delà d’une certaine taille, la coordination coûte plus qu’elle ne rapporte : le coût moyen se remet à croître."],
                ],
            ],
            [
                'title' => "Fusions, concurrence et stratégie industrielle",
                'description' => "Ce quiz aborde les fusions, la concentration et quelques principes simples de politique de concurrence.",
                'questions' => [
                    ['q' => "Deux cimentiers concurrents décident de fusionner. Cette opération est :", 'c' => ["une intégration verticale", "une fusion conglomérale", "une fusion horizontale", "une scission"], 'a' => 2, 'e' => "Les deux entreprises sont au même stade de production du même produit : la fusion est horizontale."],
                    ['q' => "Un fabricant de meubles rachète la scierie qui lui fournit son bois. Il s’agit d’une intégration :", 'c' => ["verticale en amont", "verticale en aval de la chaîne", "horizontale", "conglomérale"], 'a' => 0, 'e' => "Il remonte vers son fournisseur : amont. Rachetant son distributeur, ce serait l’aval."],
                    ['q' => "Un groupe agroalimentaire rachète une chaîne de salons de coiffure, sans aucun lien d’activité. Cette opération est :", 'c' => ["horizontale", "conglomérale", "verticale en amont", "verticale en aval"], 'a' => 1, 'e' => "Les activités sont sans rapport : c’est un conglomérat, qui pose peu de problèmes de concurrence directe."],
                    ['q' => "Quatre entreprises ont des parts de 30 %, 30 %, 20 % et 20 %. Les deux premières fusionnent. De combien le HHI augmente-t-il ?", 'c' => ["900", "600", "3 600", "1 800"], 'a' => 3, 'e' => "Avant : 900 + 900 + 400 + 400 = 2 600. Après : 3 600 + 400 + 400 = 4 400. Écart : 1 800 (soit 2 × 30 × 30)."],
                    ['q' => "Une fusion fait craindre une hausse des prix, mais les entreprises promettent de fortes économies de coûts. Que met en balance l’autorité de concurrence ?", 'c' => ["Les profits attendus des actionnaires des deux groupes", "Le nombre de magasins avant et après", "La part de l’État dans le capital", "Gains d’efficience contre risque de hausse des prix"], 'a' => 3, 'e' => "L’autorité vérifie si les gains de coûts seraient réellement partagés avec les clients ou si le pouvoir de marché accru l’emporterait."],
                    ['q' => "Une entreprise dominante vend sous son coût pendant quelques mois, puis remonte ses prix après le départ de plusieurs rivaux. Cette pratique est :", 'c' => ["une discrimination tarifaire", "une prédation par les prix", "une vente liée", "une innovation de produit"], 'a' => 1, 'e' => "On sacrifie du profit pour évincer des concurrents, puis on récupère la perte une fois seul : c’est la prédation."],
                    ['q' => "Une entreprise détient 60 % d’un marché. Cette part, à elle seule, est-elle illicite ?", 'c' => ["Oui, toute part au-dessus de 30 % est interdite", "Oui, dès qu’il reste moins de trois concurrents", "Non : seul l’abus de cette position est sanctionné", "Non : seules les ententes sont surveillées"], 'a' => 2, 'e' => "Être dominant n’est pas interdit ; ce sont les comportements abusifs (prix prédateurs, exclusivités verrouillées) qui le sont."],
                    ['q' => "Au Maroc comme ailleurs, une autorité de concurrence est surtout chargée de :", 'c' => ["préserver le jeu concurrentiel au profit des consommateurs", "fixer le prix de tous les biens", "garantir un profit minimal aux entreprises", "limiter le nombre d’entreprises dans chaque secteur"], 'a' => 0, 'e' => "Elle surveille ententes, abus et fusions pour que la concurrence continue de jouer."],
                    ['q' => "Une autorité autorise une fusion à condition que le groupe cède deux usines à un concurrent. Cette condition vise à :", 'c' => ["faire monter le prix de vente des produits", "maintenir une concurrence suffisante", "réduire la taille de l’administration publique", "empêcher toute baisse de coûts"], 'a' => 1, 'e' => "La cession recrée un rival et compense la concentration créée ; ces engagements sont appelés remèdes."],
                    ['q' => "Les parts de marché changent selon qu’on parle du « marché des boissons » ou de celui de l’eau minérale. Pourquoi définit-on le marché pertinent ?", 'c' => ["Pour compter les employés du secteur", "Pour fixer le prix légal des produits", "Pour choisir la forme juridique des entreprises", "Pour repérer les produits réellement substituables aux yeux des clients"], 'a' => 3, 'e' => "La puissance d’une firme se mesure par rapport aux substituts réels : plus le marché est large, moins sa part paraît grande."],
                    ['q' => "Pour délimiter un marché, on se demande si un vendeur unique de ces produits pourrait relever son prix de 5 à 10 % durablement sans perdre trop de clients. Ce test est celui :", 'c' => ["du monopoleur hypothétique", "de la demande coudée des rivaux", "du prix limite fixé par l’entrant", "de l’indice de Lerner"], 'a' => 0, 'e' => "Si la hausse est rentable, les produits forment un marché ; sinon, il faut élargir à d’autres substituts."],
                    ['q' => "Une grande plateforme rachète une jeune start-up susceptible de la concurrencer demain. Quel risque l’autorité de concurrence redoute-t-elle ?", 'c' => ["Une hausse du prix de rachat de la start-up", "Une baisse du nombre de salariés", "L’élimination d’un futur concurrent", "Un excès d’innovation"], 'a' => 2, 'e' => "Racheter un rival naissant peut éviter que le marché ne devienne plus concurrentiel : le contrôle des concentrations porte aussi sur ces cas."],
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
