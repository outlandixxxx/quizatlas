<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class MacroeconomicsBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'macroeconomics')->firstOrFail();

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
                'title' => "Introduction à la macroéconomie",
                'description' => "Découvrez ce que la macroéconomie étudie, ses grands objectifs et ses premiers indicateurs.",
                'questions' => [
                    ['q' => "Laquelle de ces questions relève de la macroéconomie ?", 'c' => ["Combien de baguettes une boulangerie doit-elle produire ce matin ?", "Pourquoi le chômage augmente-t-il dans l’ensemble du pays ?", "Pourquoi Salma préfère-t-elle le thé au café le soir ?", "Quel salaire proposer au nouvel employé de la boutique ?"], 'a' => 1, 'e' => "La macroéconomie observe l’économie dans son ensemble : chômage national, production totale, prix en général. Les trois autres cas concernent un agent isolé, donc la microéconomie."],
                    ['q' => "Un agrégat macroéconomique est…", 'c' => ["le budget mensuel d’une famille de Fès", "le chiffre d’affaires d’un commerçant du souk", "le prix d’un kilo de tomates au marché", "la production totale d’un pays sur une année"], 'a' => 3, 'e' => "Un agrégat résume en un seul chiffre une grandeur de toute l’économie, comme la production ou l’emploi total. Les autres exemples restent à l’échelle d’un seul agent."],
                    ['q' => "Parmi ces objectifs, lequel fait partie de ceux que se fixe classiquement un gouvernement ?", 'c' => ["Réduire le chômage en maîtrisant les prix", "Faire monter au maximum les prix des logements", "Fermer les frontières à tous les produits étrangers", "Creuser fortement la dette publique chaque année"], 'a' => 0, 'e' => "Le « carré magique » associe croissance, plein emploi, prix stables et équilibre avec l’extérieur. Faire flamber les prix ou la dette n’est pas un but recherché."],
                    ['q' => "La production d’un pays recule pendant deux trimestres consécutifs. Comment qualifie-t-on généralement cette période ?", 'c' => ["Une phase d’expansion", "Une inflation modérée", "Une récession", "Un excédent commercial"], 'a' => 2, 'e' => "Deux trimestres de recul d’affilée, c’est le critère courant de la récession. L’expansion correspondrait à une production qui monte."],
                    ['q' => "Quel est l’intrus parmi ces indicateurs ?", 'c' => ["Le taux de chômage national", "Le taux d’inflation annuel", "Le PIB du pays", "Le prix d’un paquet de thé chez un épicier"], 'a' => 3, 'e' => "Chômage, inflation et PIB décrivent l’ensemble de l’économie. Le prix d’un produit chez un épicier est une donnée locale, pas un indicateur global."],
                    ['q' => "Dans un pays, de nombreuses entreprises licencient en même temps. Quelle suite est la plus probable ?", 'c' => ["Les revenus baissent, la consommation aussi", "Le PIB augmente grâce aux salaires économisés", "Les importations de l’État disparaissent", "Le pouvoir d’achat des ménages progresse partout"], 'a' => 0, 'e' => "Moins d’emplois, c’est moins de salaires, donc moins de consommation et moins de commandes aux entreprises : le cercle se referme. D’où l’importance de l’emploi en macro."],
                    ['q' => "L’inflation désigne…", 'c' => ["la hausse du prix d’un seul produit en une semaine", "une hausse ponctuelle des salaires dans une entreprise", "une hausse durable du niveau général des prix", "la baisse du chômage sur plusieurs années"], 'a' => 2, 'e' => "Il faut une hausse générale et durable des prix : un seul prix qui bouge ne suffit pas. C’est la monnaie qui perd du pouvoir d’achat."],
                    ['q' => "Le PIB réel d’un pays passe de 400 à 408 milliards de MAD en un an. De combien a-t-il progressé en pourcentage ?", 'c' => ["0,2 %", "2 %", "8 %", "20 %"], 'a' => 1, 'e' => "(408 − 400) ÷ 400 = 0,02, soit 2 %. Le chiffre 8 est la variation en milliards, pas en pourcentage."],
                    ['q' => "À quoi servent surtout les statistiques nationales comme le PIB ou le taux de chômage ?", 'c' => ["À suivre l’état de l’économie et à éclairer les décisions", "À prévoir exactement la conjoncture de l’année suivante", "À fixer le prix de chaque produit vendu au détail", "À remplacer le travail des entreprises privées"], 'a' => 0, 'e' => "Ces chiffres servent de thermomètre : ils situent l’économie et guident les choix publics. Aucun ne prédit l’avenir avec certitude."],
                    ['q' => "Dans le circuit économique simple, les entreprises versent des salaires aux ménages. Que leur apportent ceux-ci en échange ?", 'c' => ["des produits finis à vendre", "des subventions publiques", "leur force de travail", "des droits de douane"], 'a' => 2, 'e' => "Les ménages offrent leur travail et reçoivent des revenus, qu’ils dépensent ensuite en achetant les produits des entreprises. C’est la boucle du circuit."],
                ],
            ],
            [
                'title' => "Produit intérieur brut",
                'description' => "Découvrez comment on calcule le PIB, ses composantes et ses limites comme mesure du bien-être.",
                'questions' => [
                    ['q' => "Parmi ces opérations, laquelle entre dans le PIB marocain de l’année ?", 'c' => ["La revente d’une voiture d’occasion entre deux particuliers", "Un virement d’argent d’un oncle à son neveu", "La fabrication d’une voiture neuve à Kénitra", "L’achat d’actions d’une entreprise déjà cotée en bourse"], 'a' => 2, 'e' => "Le PIB compte la production nouvelle de l’année. Un virement, une action ou un bien d’occasion ne créent pas de nouvelle production, seule une éventuelle commission d’intermédiaire est comptée."],
                    ['q' => "Quelle formule donne le PIB par la dépense ?", 'c' => ["C + I + G + X − M", "C + I + G + M − X", "C + S + T + X − M", "C + I + G − X − M"], 'a' => 0, 'e' => "Consommation + investissement + dépenses publiques + exportations moins importations. On retire les importations car elles ne correspondent pas à une production nationale."],
                    ['q' => "Un boulanger achète 30 DH de farine et vend le pain obtenu 100 DH. Quelle est sa valeur ajoutée ?", 'c' => ["100 DH", "30 DH", "130 DH", "70 DH"], 'a' => 3, 'e' => "Valeur ajoutée = production − consommations intermédiaires = 100 − 30 = 70 DH. Additionner les ventes de tous les stades compterait la farine plusieurs fois."],
                    ['q' => "Le PIB nominal d’un pays passe de 500 à 550, alors que les prix ont augmenté de 10 % entre les deux années. Que dire de la production réelle ?", 'c' => ["Elle a progressé de 10 %", "Elle est restée stable", "Elle a reculé de 10 %", "Elle a progressé de 5 %"], 'a' => 1, 'e' => "550 ÷ 1,10 = 500 : la hausse nominale vient entièrement des prix, pas des quantités produites."],
                    ['q' => "Pourquoi le PIB reste-t-il un indicateur imparfait du bien-être ?", 'c' => ["Il laisse de côté les biens que le pays vend à l’étranger", "Il ignore le travail domestique gratuit et les dégâts sur l’environnement", "Il omet les services vendus sur le marché intérieur", "Il exclut les dépenses de santé financées par l’État"], 'a' => 1, 'e' => "Ce qui n’est pas échangé contre de l’argent, comme le travail à la maison, n’est pas compté, et la pollution n’est pas retranchée. Exportations, services et dépenses publiques y figurent bien."],
                    ['q' => "Une partie des artisans d’un pays travaille sans jamais déclarer son activité. Que risque-t-il d’arriver à la mesure de la production ?", 'c' => ["Elle est surestimée, car ces artisans sont comptés deux fois", "Elle reste exacte, car les revenus sont de toute façon connus", "Elle est surestimée, car les ménages déclarent trop de dépenses", "Elle risque d’être sous-estimée si l’activité n’est pas captée"], 'a' => 3, 'e' => "Ce qui n’est pas observé échappe à la comptabilité nationale, sauf estimation. Le PIB peut donc sembler plus faible que l’activité réelle."],
                    ['q' => "Un pays a un PIB de 120 milliards de MAD pour 40 millions d’habitants. Quel est son PIB par habitant ?", 'c' => ["3 000 MAD", "30 000 MAD", "300 MAD", "480 000 MAD"], 'a' => 0, 'e' => "120 000 millions ÷ 40 millions = 3 000 MAD. Attention à l’ordre de grandeur : on convertit les milliards en millions avant de diviser."],
                    ['q' => "Dans le calcul du PIB, comment classe-t-on la construction d’une nouvelle usine par une entreprise ?", 'c' => ["Comme de la consommation des ménages", "Comme une dépense publique", "Comme un investissement", "Comme une exportation"], 'a' => 2, 'e' => "L’investissement correspond à l’achat de biens durables servant à produire : machines, usines, bâtiments. Il ne s’agit ni de consommation finale ni de dépense de l’État."],
                    ['q' => "Une usine appartenant à une société étrangère produit à Tanger. Dans quel PIB entre sa production ?", 'c' => ["Celui du pays où la société a son siège social", "Celui des deux pays, à parts égales", "Aucun PIB, car le capital est étranger", "Celui du Maroc, lieu de la production"], 'a' => 3, 'e' => "Le PIB est territorial : il compte tout ce qui est produit à l’intérieur des frontières, quelle que soit la nationalité du propriétaire. Le revenu des nationaux relève plutôt du RNB."],
                    ['q' => "Lequel de ces éléments n’est PAS compté dans le PIB ?", 'c' => ["Un service rendu gratuitement à un voisin", "Le salaire versé à un enseignant du public", "La production d’une usine de textile à Casablanca", "Les soins d’un coiffeur déclaré à son compte"], 'a' => 0, 'e' => "Sans échange marchand ni rémunération, un service entre voisins n’est pas mesuré. Les trois autres sont des productions, marchandes ou non marchandes, bien comptabilisées."],
                ],
            ],
            [
                'title' => "Croissance économique",
                'description' => "Comprenez comment se mesure la croissance et quels facteurs, comme la productivité, la font progresser.",
                'questions' => [
                    ['q' => "Le PIB réel d’un pays passe de 250 à 260 milliards de MAD. Quel est son taux de croissance ?", 'c' => ["10 %", "2,5 %", "26 %", "4 %"], 'a' => 3, 'e' => "(260 − 250) ÷ 250 = 0,04, soit 4 %. On divise la variation par la valeur de départ, pas par la valeur d’arrivée."],
                    ['q' => "Un artisan fabrique 20 tapis par mois. Avec un métier à tisser plus performant, il en fait 30 dans le même temps. Que s’est-il produit ?", 'c' => ["Une baisse de la productivité du travail", "Un gain de productivité du travail", "Une inflation par les coûts", "Un recul du capital humain"], 'a' => 1, 'e' => "Plus de production avec la même quantité de travail : c’est la définition d’un gain de productivité, ici obtenu grâce à du capital physique."],
                    ['q' => "Laquelle de ces situations illustre une hausse du capital humain ?", 'c' => ["Une entreprise finance la formation de ses techniciens", "Une entreprise achète un camion supplémentaire", "L’État construit un nouveau pont", "Un agriculteur agrandit son champ"], 'a' => 0, 'e' => "Le capital humain regroupe les savoirs et les compétences des travailleurs : formation, éducation, santé. Camion, pont et champ sont du capital physique ou du foncier."],
                    ['q' => "Un pays produit davantage uniquement parce que plus de personnes travaillent, sans gain d’efficacité. De quel type de croissance s’agit-il ?", 'c' => ["Une croissance intensive", "Une croissance purement monétaire", "Une croissance extensive", "Une croissance par la productivité"], 'a' => 2, 'e' => "Mobiliser plus de travail ou de capital, c’est de l’extensive. L’intensive vient d’une meilleure productivité : produire plus avec autant."],
                    ['q' => "Quel est le principal moteur de la croissance de long terme selon la plupart des économistes ?", 'c' => ["Le progrès technique et la productivité", "Une hausse régulière du taux de change", "La baisse du nombre de travailleurs actifs", "Le gonflement des stocks invendus des usines"], 'a' => 0, 'e' => "Produire plus avec les mêmes ressources, grâce aux innovations et aux compétences, est ce qui élève durablement le niveau de vie. Les autres pistes n’y mènent pas."],
                    ['q' => "Un PIB croît de 7 % par an, de façon régulière. En combien d’années double-t-il à peu près ?", 'c' => ["Environ 3 ans", "Environ 7 ans", "Environ 10 ans", "Un peu plus de 14 ans"], 'a' => 2, 'e' => "Règle des 70 : 70 ÷ 7 = 10 ans. On vérifie : 1,07 puissance 10 vaut environ 1,97, donc presque le double."],
                    ['q' => "La croissance économique désigne…", 'c' => ["la hausse des prix d’une année sur l’autre", "la hausse durable de la production de biens et services d’un pays", "l’amélioration globale du bien-être et des conditions de vie", "la hausse du nombre d’entreprises créées"], 'a' => 1, 'e' => "La croissance est un phénomène quantitatif : la production s’accroît dans la durée. L’amélioration générale des conditions de vie relève plutôt du développement."],
                    ['q' => "Un pays enregistre 3 % de croissance par an alors que sa population augmente de 1 % par an. Que devient son PIB par habitant ?", 'c' => ["Il recule d’environ 2 % par an", "Il progresse d’environ 4 % chaque année", "Il stagne à peu près", "Il augmente de 2 % par an environ"], 'a' => 3, 'e' => "Le PIB par habitant évolue à peu près comme la croissance du PIB moins celle de la population : 3 − 1 = 2 %. Le gâteau grossit, mais il y a plus de convives."],
                    ['q' => "Pourquoi l’épargne peut-elle favoriser la croissance ?", 'c' => ["Parce qu’elle réduit la population active", "Parce qu’elle peut financer l’investissement par l’intermédiaire des banques", "Parce qu’elle remplace la consommation par des importations", "Parce qu’elle fait baisser mécaniquement le PIB"], 'a' => 1, 'e' => "Les dépôts sont prêtés aux entreprises qui investissent, donc le stock de capital augmente. À court terme, trop d’épargne peut pourtant freiner la demande."],
                    ['q' => "Deux pays ont le même PIB total. Le premier compte 10 millions d’habitants, le second 50 millions. Que peut-on en conclure ?", 'c' => ["Leur niveau de vie moyen est identique", "Le second pays a le niveau de vie moyen le plus élevé", "Le premier pays a un PIB par habitant plus élevé", "Le premier pays croît plus vite"], 'a' => 2, 'e' => "À PIB égal, moins d’habitants signifie plus de production par tête : cinq fois plus ici. Le total ne dit rien de la répartition ni de la vitesse de croissance."],
                ],
            ],
            [
                'title' => "Inflation et pouvoir d’achat",
                'description' => "Apprenez à calculer l’inflation, à distinguer ses causes et à mesurer son effet sur le pouvoir d’achat.",
                'questions' => [
                    ['q' => "Un panier de produits coûte 800 DH en 2023 et 840 DH en 2024. Quel est le taux d’inflation ?", 'c' => ["5 %", "4 %", "40 %", "8 %"], 'a' => 0, 'e' => "(840 − 800) ÷ 800 = 0,05, soit 5 %. Diviser par le prix d’arrivée donnerait environ 4,8 %, erreur à éviter."],
                    ['q' => "Un salaire nominal augmente de 3 % alors que les prix montent de 5 %. Que devient le pouvoir d’achat ?", 'c' => ["Il augmente d’environ 2 %", "Il reste identique", "Il baisse d’environ 2 %", "Il baisse de 8 %"], 'a' => 2, 'e' => "Salaire réel ≈ 3 − 5 = −2 % : on peut acheter un peu moins. Le salaire a monté en DH, mais moins vite que les prix."],
                    ['q' => "À quoi sert l’indice des prix à la consommation (IPC) ?", 'c' => ["À mesurer la valeur de la production nationale en volume", "À suivre le coût d’un panier type de consommation des ménages", "À comptabiliser le nombre de produits importés chaque mois", "À déterminer la valeur du dirham face aux autres devises"], 'a' => 1, 'e' => "L’IPC compare le prix d’un panier représentatif d’achats des ménages à deux dates : c’est le principal outil pour mesurer l’inflation."],
                    ['q' => "Quel terme décrit une baisse générale et durable des prix ?", 'c' => ["La désinflation", "L’hyperinflation", "La stagflation", "La déflation"], 'a' => 3, 'e' => "Déflation : les prix baissent. Piège fréquent : la désinflation n’est qu’un ralentissement de la hausse des prix, qui continuent de monter."],
                    ['q' => "La demande des ménages et de l’État dépasse ce que l’économie peut produire, et les prix montent. De quel type d’inflation s’agit-il ?", 'c' => ["Une inflation par les coûts de production", "Une inflation importée de l’étranger", "Une inflation par la demande", "Une désinflation"], 'a' => 2, 'e' => "Quand la demande globale excède l’offre disponible, les vendeurs relèvent leurs prix. Par les coûts, ce serait plutôt une hausse des salaires ou des matières premières."],
                    ['q' => "Un pays importe tout son pétrole. Le baril double de prix, et carburants et transports renchérissent partout. Quel mécanisme est à l’œuvre ?", 'c' => ["Une hausse des coûts qui se répercute dans les prix de vente", "Un manque de monnaie en circulation qui freine les achats", "Une surchauffe de la demande des ménages et de l’État", "Une baisse des importations de produits finis"], 'a' => 0, 'e' => "Une matière première plus chère augmente les coûts des entreprises, qui relèvent leurs prix : c’est une inflation par les coûts, ici importée de l’extérieur."],
                    ['q' => "Qui est généralement avantagé par une inflation que personne n’avait prévue ?", 'c' => ["Un épargnant qui garde des billets chez lui", "Un retraité dont la pension est fixe", "Un prêteur à taux fixe", "Un emprunteur à taux fixe"], 'a' => 3, 'e' => "Il rembourse en dirhams qui valent moins qu’au moment du prêt : sa dette réelle s’allège. Épargnant et prêteur perdent au contraire du pouvoir d’achat."],
                    ['q' => "Un livret d’épargne rapporte 2 % par an alors que l’inflation est de 4 %. Quel est le rendement réel approximatif ?", 'c' => ["+6 %", "−2 %", "+2 %", "Nul, les intérêts compensent la hausse des prix"], 'a' => 1, 'e' => "Taux réel ≈ taux nominal − inflation = 2 − 4 = −2 %. L’épargne rapporte moins que ce que les prix augmentent."],
                    ['q' => "Laquelle de ces situations correspond à de l’hyperinflation ?", 'c' => ["Les prix doublent en quelques semaines et les gens fuient la monnaie", "Les prix augmentent de 6 % sur un an et les salaires suivent à peu près", "Le prix de l’électricité augmente nettement alors que les autres restent stables", "Les prix baissent de 1 % par an pendant plusieurs années consécutives"], 'a' => 0, 'e' => "L’hyperinflation est une hausse des prix si rapide que la monnaie perd sa valeur d’un jour à l’autre. Les autres cas sont une inflation modérée, une hausse sectorielle et une déflation."],
                    ['q' => "Que fait d’ordinaire une banque centrale pour freiner une inflation trop forte ?", 'c' => ["Elle baisse son taux directeur", "Elle achète massivement des titres d’État", "Elle distribue des billets aux ménages", "Elle relève son taux directeur"], 'a' => 3, 'e' => "Un taux plus élevé rend le crédit plus cher, ce qui refroidit la demande et calme les prix. Baisser le taux ferait l’inverse."],
                ],
            ],
            [
                'title' => "Chômage et emploi",
                'description' => "Maîtrisez le calcul du taux de chômage et les grands types de chômage à travers des situations concrètes.",
                'questions' => [
                    ['q' => "Un pays compte 10 millions de personnes en emploi et 1 million de chômeurs. Quel est son taux de chômage ?", 'c' => ["1 %", "9,1 %", "10 %", "10,5 %"], 'a' => 1, 'e' => "Taux = chômeurs ÷ population active = 1 ÷ (10 + 1) ≈ 9,1 %. Diviser par les seuls actifs occupés donnerait 10 %, ce qui est faux."],
                    ['q' => "Laquelle de ces personnes est classée parmi les inactifs ?", 'c' => ["Une couturière qui travaille à son compte", "Un jeune sans emploi qui cherche activement et peut commencer demain", "Une employée en congé payé", "Un étudiant à temps plein qui ne cherche pas d’emploi"], 'a' => 3, 'e' => "Les inactifs ne travaillent pas et ne cherchent pas d’emploi : étudiants, retraités, personnes au foyer. Le chômeur doit chercher et être disponible."],
                    ['q' => "Un menuisier quitte son entreprise et met deux mois à trouver un poste mieux adapté. De quel type de chômage s’agit-il ?", 'c' => ["Conjoncturel", "Structurel", "Frictionnel", "Saisonnier"], 'a' => 2, 'e' => "Le chômage frictionnel naît du temps normal de recherche entre deux emplois. Il n’est lié ni à la crise ni à une inadéquation durable des qualifications."],
                    ['q' => "Un ralentissement général de l’économie pousse des entreprises de tous les secteurs à licencier. Ce chômage est…", 'c' => ["lié à la conjoncture", "d’origine frictionnelle", "d’origine structurelle", "d’origine saisonnière"], 'a' => 0, 'e' => "Il suit le cycle : quand la demande chute, les entreprises réduisent leurs effectifs, et l’emploi remonte avec la reprise. Conjoncture = situation du moment."],
                    ['q' => "Des dactylographes se retrouvent sans emploi car leur métier a disparu au profit de l’informatique et leurs compétences ne correspondent plus à l’offre. Ce chômage est surtout…", 'c' => ["frictionnel", "structurel", "saisonnier", "conjoncturel"], 'a' => 1, 'e' => "Quand les qualifications offertes ne correspondent plus durablement à celles demandées, le chômage est structurel. La reprise seule ne suffit pas : il faut former."],
                    ['q' => "Comment calcule-t-on le taux d’activité ?", 'c' => ["Actifs occupés ÷ population en âge de travailler", "Chômeurs ÷ population active", "Inactifs ÷ population en âge de travailler", "Population active ÷ population en âge de travailler"], 'a' => 3, 'e' => "Le taux d’activité compare actifs (occupés + chômeurs) et population en âge de travailler. Le premier choix est le taux d’emploi, le deuxième le taux de chômage."],
                    ['q' => "Sur une population active de 12 millions de personnes, le taux de chômage est de 10 %. Combien y a-t-il de chômeurs ?", 'c' => ["1,2 million", "10 millions", "2,4 millions", "120 000"], 'a' => 0, 'e' => "10 % de 12 millions = 1,2 million. Les chômeurs forment une part de la population active, pas de la population totale."],
                    ['q' => "Lequel de ces phénomènes peut faire baisser le taux de chômage officiel sans créer le moindre emploi ?", 'c' => ["La hausse des investissements des entreprises", "Une baisse des taux d’intérêt", "Le découragement de chômeurs qui cessent de chercher", "Une reprise de la consommation"], 'a' => 2, 'e' => "Ceux qui abandonnent leurs recherches sortent de la population active : le taux baisse alors que personne n’a trouvé de travail. C’est l’effet de découragement."],
                    ['q' => "Une jeune diplômée travaille 15 heures par semaine comme vendeuse alors qu’elle souhaiterait un temps plein. Comment qualifie-t-on sa situation ?", 'c' => ["Chômage de longue durée", "Sous-emploi", "Inactivité", "Chômage frictionnel"], 'a' => 1, 'e' => "Elle est en emploi mais travaille moins qu’elle ne le voudrait : c’est du sous-emploi. Elle compte comme occupée, pas comme chômeuse."],
                    ['q' => "Pourquoi un chômage élevé pèse-t-il aussi sur les finances de l’État ?", 'c' => ["Plus de salariés paient des cotisations sociales qu’auparavant", "Les dépenses d’indemnisation baissent car les gens consomment moins", "Moins de revenus taxés, donc moins de recettes et plus d’aides à verser", "Les prix des services publics baissent faute d’acheteurs"], 'a' => 2, 'e' => "Sans emploi, il y a moins d’impôts et de cotisations perçus, et davantage d’allocations ou d’aides à financer. Le budget se dégrade des deux côtés."],
                ],
            ],
            [
                'title' => "Politique budgétaire",
                'description' => "Comprenez comment l’État utilise ses dépenses, ses impôts et sa dette pour influencer l’activité.",
                'questions' => [
                    ['q' => "Que désigne la politique budgétaire ?", 'c' => ["Les décisions de la banque centrale sur les taux d’intérêt", "Les règles de change fixées avec les partenaires commerciaux", "L’action de l’État par ses dépenses et ses recettes", "La fixation des salaires dans les entreprises privées"], 'a' => 2, 'e' => "C’est l’usage du budget de l’État, dépenses et impôts, pour soutenir ou calmer l’activité. Les taux d’intérêt relèvent de la politique monétaire."],
                    ['q' => "Face à une récession, un gouvernement lance un grand programme de construction de routes. De quel type de politique s’agit-il ?", 'c' => ["Une relance budgétaire", "Une rigueur budgétaire", "Une politique monétaire restrictive", "Une dévaluation compétitive"], 'a' => 0, 'e' => "Augmenter les dépenses publiques pour soutenir la demande et l’emploi, c’est relancer par le budget. La rigueur ferait l’inverse : réduire les dépenses ou relever les impôts."],
                    ['q' => "Un État perçoit 90 milliards de MAD de recettes et dépense 100 milliards. Quel est son solde budgétaire ?", 'c' => ["Un excédent de 10 milliards", "Un déficit de 10 milliards", "Un déficit de 190 milliards", "Un équilibre"], 'a' => 1, 'e' => "Recettes − dépenses = 90 − 100 = −10 : c’est un déficit. Il s’agit d’un flux annuel, à ne pas confondre avec la dette, qui est un stock accumulé."],
                    ['q' => "Quelle différence y a-t-il entre déficit et dette publique ?", 'c' => ["Le déficit est un stock accumulé, la dette un flux annuel", "Les deux désignent exactement la même chose", "La dette correspond aux impôts non payés par les citoyens", "Le déficit vaut pour un an, la dette cumule les années"], 'a' => 3, 'e' => "Le déficit est le manque de recettes d’une année ; la dette est la somme des emprunts qui restent à rembourser. Flux d’un côté, stock de l’autre."],
                    ['q' => "Un impôt est dit progressif lorsque…", 'c' => ["son taux est le même quel que soit le revenu", "son taux baisse quand le revenu augmente", "il porte sur les produits importés à la frontière", "son taux augmente avec le revenu du contribuable"], 'a' => 3, 'e' => "Plus le revenu monte, plus le taux appliqué à la tranche supérieure est élevé, comme pour l’impôt sur le revenu. Un taux identique est dit proportionnel."],
                    ['q' => "Laquelle de ces dépenses de l’État est un transfert plutôt qu’un achat de bien ou de service ?", 'c' => ["Le salaire d’un enseignant", "Une allocation familiale", "La construction d’un barrage", "L’achat de fournitures de bureau"], 'a' => 1, 'e' => "Un transfert est un versement sans contrepartie directe de production : allocations, retraites, subventions. Salaire, barrage et fournitures rémunèrent un travail ou un bien."],
                    ['q' => "Qu’appelle-t-on les stabilisateurs automatiques du budget ?", 'c' => ["Des mécanismes qui amortissent le cycle sans nouvelle décision", "Des plafonds de prix sur certains produits de base", "Des subventions destinées aux entreprises exportatrices", "Des ajustements mensuels du taux directeur"], 'a' => 0, 'e' => "En récession, les recettes d’impôts baissent et les allocations montent sans loi nouvelle : le budget soutient l’activité de lui-même. Le mouvement inverse se produit en expansion."],
                    ['q' => "Une hausse de 10 milliards des dépenses publiques s’accompagne d’un multiplicateur de 1,5. De combien le PIB augmente-t-il ?", 'c' => ["10 milliards", "1,5 milliard", "15 milliards", "Plus de 20 milliards"], 'a' => 2, 'e' => "Effet = multiplicateur × variation = 1,5 × 10 = 15 milliards. Chaque dirham dépensé crée des revenus qui sont à leur tour dépensés."],
                    ['q' => "La dette publique d’un pays vaut 60 % de son PIB. Que signifie ce chiffre ?", 'c' => ["La dette équivaut à 60 % du PIB annuel", "L’État rembourse chaque année 60 % de ce qu’il doit", "L’État verse 60 % de ses recettes en intérêts", "Les ménages détiennent 60 % de la dette"], 'a' => 0, 'e' => "Le ratio dette/PIB rapporte la dette accumulée à la production d’une année, pour comparer des pays de tailles différentes. Il ne dit rien du rythme de remboursement."],
                    ['q' => "Pour financer son déficit, un État émet des obligations. Que fait-il concrètement ?", 'c' => ["Il crée aussitôt un nouvel impôt", "Il emprunte aux épargnants et aux banques", "Il ordonne aux entreprises de baisser leurs prix", "Il demande à la banque centrale d’annuler sa dette"], 'a' => 1, 'e' => "Une obligation est un titre de dette : l’État reçoit l’argent maintenant et promet de rembourser avec intérêts plus tard. Le déficit d’une année s’ajoute alors à la dette."],
                ],
            ],
            [
                'title' => "Politique monétaire et système bancaire",
                'description' => "Explorez le rôle de la banque centrale, des taux d’intérêt et des banques dans la création de monnaie et de crédit.",
                'questions' => [
                    ['q' => "Parmi ces institutions, laquelle est la banque centrale du Maroc ?", 'c' => ["Attijariwafa bank", "Le ministère des Finances", "La Caisse de dépôt et de gestion", "Bank Al-Maghrib"], 'a' => 3, 'e' => "Bank Al-Maghrib émet la monnaie nationale et conduit la politique monétaire. Attijariwafa est une banque commerciale, et le ministère des Finances gère le budget."],
                    ['q' => "Quelles sont les trois fonctions de la monnaie ?", 'c' => ["Réserve de valeur, moyen de crédit et garantie d’État", "Moyen d’échange, unité de compte, réserve de valeur", "Épargne, impôt et revenu national", "Unité de compte, moyen de production et titre de propriété"], 'a' => 1, 'e' => "La monnaie sert à payer, à compter les prix et à conserver du pouvoir d’achat dans le temps. Crédit, impôt ou propriété sont d’autres notions."],
                    ['q' => "La banque centrale relève son taux directeur. Quel effet attend-on sur le crédit aux entreprises ?", 'c' => ["Il devient moins cher et plus demandé", "Son coût reste fixé par l’État", "Il devient plus cher et moins demandé", "Il disparaît du marché"], 'a' => 2, 'e' => "Un taux directeur plus haut renchérit le refinancement des banques, qui répercutent sur leurs prêts : moins d’emprunts, donc moins d’investissement et de consommation."],
                    ['q' => "Un client dépose 1 000 DH en banque. Que peut faire la banque de cet argent ?", 'c' => ["En prêter l’essentiel et garder une petite réserve", "Le garder entièrement en coffre jusqu’au retrait", "Le reverser aux autres déposants sous forme de dividendes", "Le détruire pour limiter la quantité de monnaie"], 'a' => 0, 'e' => "Les banques ne gardent qu’une fraction des dépôts en réserve et prêtent le reste, ce qui crée de la monnaie de crédit."],
                    ['q' => "Avec un taux de réserves de 10 %, un dépôt initial de 1 000 DH peut conduire, au maximum, à quel total de dépôts dans le système bancaire ?", 'c' => ["1 100 DH", "5 000 DH", "10 000 DH", "100 000 DH"], 'a' => 2, 'e' => "Multiplicateur = 1 ÷ taux de réserves = 10, donc 1 000 × 10 = 10 000 DH au maximum, si chaque prêt revient sous forme de dépôt."],
                    ['q' => "Pour relancer une économie en récession, que peut faire la banque centrale ?", 'c' => ["Baisser son taux directeur", "Relever les réserves obligatoires des banques", "Vendre massivement des titres publics aux banques", "Relever fortement son taux directeur"], 'a' => 0, 'e' => "Des taux plus bas stimulent crédit, investissement et consommation. Relever les réserves obligatoires ou vendre des titres retire de la liquidité : effet inverse."],
                    ['q' => "Quelle est la mission première d’une banque centrale ?", 'c' => ["Maximiser les profits des banques commerciales", "Maintenir la stabilité des prix", "Financer les dépenses courantes de l’État", "Fixer les salaires du secteur public"], 'a' => 1, 'e' => "On lui confie surtout la stabilité des prix, souvent avec celle du système financier. Elle ne vise ni les profits des banques ni le financement courant de l’État."],
                    ['q' => "Un ménage place 10 000 DH à 3 % par an. Quel montant d’intérêts reçoit-il après un an ?", 'c' => ["30 DH", "3 000 DH", "10 300 DH", "300 DH"], 'a' => 3, 'e' => "3 % de 10 000 = 300 DH. Le montant 10 300 DH est le capital final, intérêts compris, et 3 000 DH correspondrait à 30 %."],
                    ['q' => "Laquelle de ces opérations d’open market vise à injecter de la liquidité dans le système bancaire ?", 'c' => ["Vendre des bons du Trésor aux banques", "Relever le taux de réserve obligatoire", "Acheter des titres aux banques", "Interdire de nouveaux crédits"], 'a' => 2, 'e' => "En achetant des titres, la banque centrale verse de la monnaie aux banques : la liquidité augmente. En vendre en retirerait."],
                    ['q' => "Pourquoi une hausse des taux d’intérêt tend-elle à faire baisser l’investissement des entreprises ?", 'c' => ["Parce que les salaires des ingénieurs montent dans la même proportion", "Parce que les machines perdent de leur utilité pour la production", "Parce que le dirham se déprécie dès l’annonce de la hausse", "Parce que l’emprunt coûte plus cher et rentabilise moins de projets"], 'a' => 3, 'e' => "Un projet financé à crédit doit rapporter plus que le taux d’intérêt. Quand celui-ci monte, moins de projets passent ce test."],
                ],
            ],
            [
                'title' => "Commerce international et taux de change",
                'description' => "Analysez les échanges avec l’étranger, les taux de change et leurs effets sur les prix et la compétitivité.",
                'questions' => [
                    ['q' => "Un pays exporte pour 400 milliards de MAD et importe pour 500 milliards. Quel est le solde de sa balance commerciale ?", 'c' => ["Un excédent de 100 milliards", "Un déficit de 100 milliards", "Un déficit de 900 milliards", "Un solde nul"], 'a' => 1, 'e' => "Exportations − importations = 400 − 500 = −100 : c’est un déficit commercial. Le taux de couverture serait de 400 ÷ 500, soit 80 %."],
                    ['q' => "Un euro vaut 11 dirhams. Combien de dirhams faut-il pour acheter un article vendu 20 euros ?", 'c' => ["31 DH", "110 DH", "1,82 DH", "220 DH"], 'a' => 3, 'e' => "On multiplie le prix en euros par le cours : 20 × 11 = 220 DH. Réflexe de contrôle : le dirham valant moins, il en faut davantage que d’euros."],
                    ['q' => "Le dirham s’apprécie face à l’euro. Que devient, en dirhams, le prix d’un produit importé de la zone euro, toutes choses égales par ailleurs ?", 'c' => ["Il baisse", "Il monte", "Il reste identique", "Il double"], 'a' => 0, 'e' => "Un dirham plus fort achète plus d’euros : pour un même prix en euros, il faut moins de dirhams. Les importations coûtent moins cher, les exportations deviennent plus difficiles."],
                    ['q' => "Qui profite, en général, d’une dépréciation de la monnaie nationale ?", 'c' => ["Les touristes en voyage à l’étranger", "Les importateurs de produits finis", "Les exportateurs de produits nationaux", "Les ménages qui achètent des biens importés"], 'a' => 2, 'e' => "Leurs produits deviennent moins chers en devises, donc plus compétitifs à l’étranger. Importateurs, voyageurs et acheteurs de produits importés paient davantage."],
                    ['q' => "D’après la théorie de l’avantage comparatif de Ricardo, deux pays ont intérêt à…", 'c' => ["tout produire localement pour limiter la dépendance", "taxer les importations pour protéger toutes les branches", "copier les produits étrangers pour ne plus importer", "se spécialiser selon leurs coûts relatifs et échanger"], 'a' => 3, 'e' => "Chaque pays se concentre sur ce qu’il produit au moindre coût relatif, puis échange : les deux obtiennent plus que s’ils produisaient tout seuls."],
                    ['q' => "Un produit importé coûte 500 DH à la frontière. On applique un droit de douane de 20 %. Quel est son prix après droit ?", 'c' => ["520 DH", "600 DH", "100 DH", "700 DH"], 'a' => 1, 'e' => "20 % de 500 = 100 DH, qui s’ajoutent au prix : 600 DH. Le droit renchérit l’importation, ce qui protège les producteurs locaux mais pénalise le consommateur."],
                    ['q' => "Quelle conséquence possible peut avoir l’instauration de droits de douane élevés par un pays ?", 'c' => ["Une baisse des prix pour ses consommateurs", "Une hausse de ses exportations grâce aux taxes", "Des représailles commerciales de ses partenaires", "Une hausse immédiate de la compétitivité de ses exportateurs"], 'a' => 2, 'e' => "Les partenaires touchés répondent souvent par leurs propres taxes, ce qui nuit aux exportateurs du pays. Les consommateurs, eux, paient plus cher le produit importé."],
                    ['q' => "Que retrace la balance des paiements d’un pays ?", 'c' => ["Les flux avec l’étranger : biens, services, capitaux", "Les recettes et dépenses de l’État sur l’année budgétaire", "Le détail des prix de chaque produit importé sur un an", "Les crédits accordés par les banques aux résidents du pays"], 'a' => 0, 'e' => "C’est le compte de toutes les opérations économiques et financières entre un pays et le reste du monde. La balance commerciale n’en est qu’une partie."],
                    ['q' => "Un grand constructeur étranger ouvre une usine à Tanger. Comment appelle-t-on ce type d’apport de capitaux ?", 'c' => ["Un prêt à court terme", "Un investissement direct étranger", "Une aide publique au développement", "Un transfert de la diaspora"], 'a' => 1, 'e' => "L’investissement direct étranger (IDE) est une implantation durable d’une entreprise dans un autre pays. Contrairement à un placement boursier, l’usine reste sur place."],
                    ['q' => "Un pays augmente ses exportations de 10 % en volume, mais ses prix à l’export chutent de 15 %. Que devient la valeur de ses exportations ?", 'c' => ["Elle augmente de 10 %, comme les volumes", "Elle augmente de 25 %, volumes et prix cumulés", "Elle baisse de 5 %, somme des deux variations", "Elle baisse d’environ 6,5 %"], 'a' => 3, 'e' => "Valeur = volume × prix : 1,10 × 0,85 = 0,935, soit environ −6,5 %. On ne peut pas simplement additionner +10 et −15."],
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
