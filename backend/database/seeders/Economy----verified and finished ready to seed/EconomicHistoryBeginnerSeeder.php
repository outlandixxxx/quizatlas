<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class EconomicHistoryBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'economic-history')->firstOrFail();

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
                'title' => "Introduction à l’histoire économique",
                'description' => "Les grandes notions et périodes de l’histoire économique.",
                'questions' => [
                    ['q' => "Un chercheur compare, à partir de registres de marché du XIXe siècle, l’évolution du prix du blé et des revenus paysans. De quelle discipline relève son travail ?", 'c' => ["L’histoire militaire", "L’histoire de l’art", "L’histoire économique", "La paléontologie humaine"], 'a' => 2, 'e' => "Prix, revenus et marchés sont des objets économiques observés dans la durée : c’est le terrain de l’histoire économique."],
                    ['q' => "Qu’est-ce qui caractérise la révolution néolithique ?", 'c' => ["Le passage de la cueillette et de la chasse à l’agriculture et à l’élevage", "L’essor des premières manufactures et des machines à vapeur", "La création des premières banques et des lettres de change", "Le développement du commerce maritime entre l’Europe et l’Amérique"], 'a' => 0, 'e' => "Vers 10 000 ans avant notre ère, notamment au Proche-Orient, des groupes se mettent à cultiver et à domestiquer des animaux ; machines et banques arrivent des millénaires plus tard."],
                    ['q' => "Des familles abandonnent leurs campements saisonniers pour s’installer durablement près de leurs champs. Ce mouvement s’appelle :", 'c' => ["l’exode rural vers les usines", "la tertiarisation de l’économie", "la mondialisation des échanges", "la sédentarisation"], 'a' => 3, 'e' => "Se sédentariser, c’est se fixer en un lieu au lieu de se déplacer ; ce mouvement accompagne les débuts de l’agriculture."],
                    ['q' => "Une famille paysanne consomme l’essentiel de sa récolte et n’en vend qu’une petite partie. Elle vit dans une économie…", 'c' => ["d’exportation", "de subsistance", "de services", "de consommation de masse"], 'a' => 1, 'e' => "Produire d’abord pour ses propres besoins de base, voilà la subsistance ; le marché ne joue qu’un rôle d’appoint."],
                    ['q' => "Un potier veut du blé, mais le paysan cherche des outils en fer, pas des pots. Quel obstacle du troc cette situation illustre-t-elle ?", 'c' => ["Une hausse générale des prix qui gêne l’échange", "Un déficit commercial entre les deux régions", "Une dévaluation de la monnaie utilisée localement", "L’absence de double coïncidence des besoins"], 'a' => 3, 'e' => "Le troc exige que chacun veuille exactement ce que l’autre offre ; la monnaie joue l’intermédiaire et lève cette contrainte."],
                    ['q' => "Parmi ces rôles, lequel n’est PAS une fonction de la monnaie ?", 'c' => ["Facteur de production", "Intermédiaire des échanges", "Unité de compte", "Réserve de valeur"], 'a' => 0, 'e' => "Intermédiaire, unité de compte et réserve de valeur sont les trois fonctions classiques ; la monnaie permet d’acheter des facteurs de production sans en être un."],
                    ['q' => "Où et quand apparaissent, parmi les toutes premières, des pièces de monnaie frappées en métal ?", 'c' => ["Dans les foires de Champagne, au XIIe siècle", "À Venise, au XVe siècle, avec les premières banques", "En Lydie, vers le VIIe siècle avant notre ère", "À Londres, au XVIIIe siècle, avec la Banque d’Angleterre"], 'a' => 2, 'e' => "Les rois de Lydie (actuelle Turquie) font frapper des pièces d’électrum au VIIe siècle avant notre ère ; foires et banques médiévales ou modernes viennent bien après."],
                    ['q' => "Un pays voit sa production augmenter d’environ 3 % par an pendant trente ans. Que peut-on dire ?", 'c' => ["Il traverse une longue récession", "Il connaît une croissance durable", "Il subit une déflation prolongée", "Il reste dans une économie stationnaire"], 'a' => 1, 'e' => "Une production qui progresse sur plusieurs décennies, c’est la croissance de long terme ; une récession serait une baisse."],
                    ['q' => "Pourquoi une ville bâtie au croisement de plusieurs routes commerciales a-t-elle souvent prospéré au Moyen Âge ?", 'c' => ["Les marchands y faisaient halte, ce qui nourrissait marchés et artisanat", "Les habitants y vivaient presque tous de leurs propres récoltes", "Les voyageurs la contournaient afin d’éviter les taxes", "Les artisans s’y installaient pour fuir la clientèle étrangère"], 'a' => 0, 'e' => "Un carrefour concentre acheteurs, vendeurs et besoins de services (auberges, entrepôts, ateliers) : pensez à Fès, Marrakech ou Venise."],
                    ['q' => "Pour reconstituer les prix dans un port au XVIIIe siècle, quelle source est la plus directe ?", 'c' => ["Les cartes de relief de la région", "Les poèmes épiques de l’époque", "Les traités de théologie locaux", "Les livres de comptes et registres de douane"], 'a' => 3, 'e' => "Comptes de marchands et registres de douane notent de vrais prix et de vraies quantités ; cartes ou poèmes n’en disent rien."],
                ],
            ],
            [
                'title' => "Commerce et échanges dans l’histoire",
                'description' => "Comprendre le développement historique du commerce et des marchés.",
                'questions' => [
                    ['q' => "Au marché, Karim propose trois poules contre un sac de lentilles, sans aucune pièce ni billet. Cet échange est :", 'c' => ["un prêt", "du troc", "un impôt en nature", "une subvention"], 'a' => 1, 'e' => "Des biens contre des biens, sans monnaie : c’est la définition du troc."],
                    ['q' => "Quel avantage la monnaie apporte-t-elle par rapport au troc ?", 'c' => ["Elle fixe les mêmes prix dans toutes les villes", "Elle rend chaque producteur autosuffisant", "Elle supprime le besoin de produire des surplus", "On peut vendre à l’un et acheter à l’autre"], 'a' => 3, 'e' => "Vente et achat se séparent : plus besoin de trouver un partenaire qui désire précisément notre produit."],
                    ['q' => "Les caravanes transsahariennes reliaient le Maghreb à l’Afrique de l’Ouest. Que transportaient-elles typiquement ?", 'c' => ["De l’or vers le nord, du sel et des produits manufacturés vers le sud", "Du blé vers le nord, de l’or vers le sud", "Des épices d’Inde vers le nord, du coton vers le sud", "De la soie chinoise vers le nord, du thé vers le sud"], 'a' => 0, 'e' => "L’or soudanais montait vers le nord, le sel saharien et des objets fabriqués descendaient ; la soie relève plutôt des routes d’Asie."],
                    ['q' => "Aux XIIe–XIIIe siècles, les foires de Champagne servaient surtout à…", 'c' => ["ravitailler en vivres les armées du roi de France pendant ses campagnes", "distribuer du grain aux pauvres des villes", "réunir des marchands de toute l’Europe et régler leurs paiements", "fixer le prix de l’or pour tous les États"], 'a' => 2, 'e' => "Tenues à tour de rôle dans quelques villes, elles attiraient drapiers italiens et flamands, et on y compensait les dettes entre marchands."],
                    ['q' => "Au Maroc, une heure de travail donne 4 kg d’oranges ou 2 kg de tissu ; dans le pays B, 1 kg d’oranges ou 1 kg de tissu. Qui a l’avantage comparatif dans les oranges ?", 'c' => ["Le pays B, car il produit moins de chaque bien", "Le Maroc : 1 kg d’oranges lui coûte 0,5 kg de tissu, contre 1 kg pour B", "Le Maroc : 1 kg d’oranges lui coûte 2 kg de tissu", "Aucun des deux, car le Maroc est meilleur dans les deux productions"], 'a' => 1, 'e' => "Coût d’opportunité des oranges : 2/4 = 0,5 kg de tissu au Maroc contre 1 kg en B. Le Maroc se spécialise donc en oranges, même s’il est plus productif partout."],
                    ['q' => "Une entreprise marocaine vend des conserves de sardines à la France. Pour le Maroc, cette opération est :", 'c' => ["une importation", "un investissement direct étranger", "une exportation", "un transfert de souveraineté"], 'a' => 2, 'e' => "Vendre à l’étranger un bien produit sur place, c’est exporter ; importer reviendrait à acheter à l’étranger."],
                    ['q' => "En un an, un pays exporte pour 50 milliards de MAD de biens et en importe pour 65 milliards. Quel est son solde commercial ?", 'c' => ["Un excédent de 15 milliards de MAD", "Un déficit de 115 milliards de MAD", "Un excédent de 65 milliards de MAD", "Un déficit de 15 milliards de MAD"], 'a' => 3, 'e' => "Solde = exportations − importations = 50 − 65 = −15, donc un déficit. Additionner les flux mesure seulement le volume des échanges."],
                    ['q' => "Quel événement de 1869 a raccourci la route maritime entre l’Europe et l’Asie ?", 'c' => ["L’ouverture du canal de Suez", "Le percement du canal de Panama", "L’ouverture du tunnel sous la Manche", "La construction du transsibérien"], 'a' => 0, 'e' => "Suez relie la Méditerranée à la mer Rouge et évite le tour de l’Afrique ; Panama n’ouvre qu’en 1914, la Manche en 1994."],
                    ['q' => "Aux XVIe–XVIIIe siècles, des États européens cherchent à accumuler de l’or en exportant plus qu’ils n’importent. Cette doctrine s’appelle :", 'c' => ["le physiocratisme", "le libre-échange", "le mercantilisme", "le marxisme"], 'a' => 2, 'e' => "Pour les mercantilistes, la richesse d’un État tient à son stock de métaux précieux, d’où l’excédent commercial ; les physiocrates, eux, la voyaient dans la terre."],
                    ['q' => "Depuis les années 1950-1960, le conteneur standardisé a surtout permis…", 'c' => ["de supprimer les droits de douane entre pays", "de réduire le coût et la durée du transbordement", "de remplacer le transport maritime par l’avion", "de faire disparaître les grands ports de commerce"], 'a' => 1, 'e' => "Une boîte normalisée passe du navire au camion sans être déballée : escales plus courtes, fret moins cher. Les douanes, elles, restent en place."],
                ],
            ],
            [
                'title' => "Révolution industrielle",
                'description' => "Les causes et conséquences économiques de la révolution industrielle.",
                'questions' => [
                    ['q' => "Dans quel pays la révolution industrielle démarre-t-elle à la fin du XVIIIe siècle ?", 'c' => ["La France", "L’Allemagne", "Les États-Unis", "L’Angleterre"], 'a' => 3, 'e' => "Charbon abondant, capitaux, marchés coloniaux et inventions s’y combinent ; Allemagne et États-Unis rattrapent au XIXe siècle."],
                    ['q' => "Quelle innovation de James Watt a rendu la machine à vapeur bien plus efficace et utilisable dans l’industrie ?", 'c' => ["Le métier Jacquard", "Le condenseur séparé", "Le haut-fourneau au coke", "La locomotive sur rails"], 'a' => 1, 'e' => "Vers 1769, Watt sépare le condenseur du cylindre et réduit le gaspillage de chaleur de la machine de Newcomen ; Jacquard, c’est le tissage."],
                    ['q' => "Quelle énergie alimente en priorité les machines et les hauts-fourneaux de la première révolution industrielle ?", 'c' => ["Le pétrole", "Le gaz naturel", "Le charbon", "L’uranium"], 'a' => 2, 'e' => "Le charbon domine au XIXe siècle ; pétrole et électricité s’imposent surtout avec la seconde révolution industrielle."],
                    ['q' => "Au XIXe siècle, quel effet économique le chemin de fer a-t-il surtout eu ?", 'c' => ["Il a fait baisser le coût du transport et élargi les marchés", "Il a rendu le commerce local plus rentable que le commerce lointain", "Il a remplacé le charbon comme source d’énergie", "Il a réduit la demande d’acier"], 'a' => 0, 'e' => "Transport plus rapide et moins cher : les marchés régionaux se relient en marché national, et rails et locomotives font grimper la demande de charbon et d’acier."],
                    ['q' => "Un atelier fabrique 120 pièces par jour avec 10 ouvriers. Après l’achat de machines, il en fabrique 300 avec 12 ouvriers. Quelle est la productivité par ouvrier après l’achat ?", 'c' => ["30 pièces par jour", "25 pièces par jour", "180 pièces par jour", "12 pièces par jour"], 'a' => 1, 'e' => "Productivité du travail = production ÷ travailleurs : 300 ÷ 12 = 25, contre 120 ÷ 10 = 12 avant. Elle a plus que doublé."],
                    ['q' => "Que sont les « enclosures » dans l’Angleterre rurale ?", 'c' => ["L’interdiction faite aux paysans de quitter leur village", "La création de zones franches autour des ports", "La limitation légale du nombre de machines par usine", "Le regroupement et la clôture de terres, qui met fin à de nombreux usages collectifs"], 'a' => 3, 'e' => "Les terres sont regroupées et clôturées, les communaux disparaissent : le rendement agricole progresse, et beaucoup de paysans partent chercher un travail ailleurs."],
                    ['q' => "Au XIXe siècle, des ouvriers d’une usine textile vivent en ville de leur seul salaire. Quel changement social cela illustre-t-il ?", 'c' => ["Le retour du travail à domicile dans les campagnes", "La disparition progressive des villes marchandes", "L’essor du salariat et d’une classe ouvrière", "Le remplacement du salaire par le paiement en nature"], 'a' => 2, 'e' => "L’usine regroupe des travailleurs qui ne possèdent pas leurs outils et vendent leur travail contre salaire : c’est la naissance de la classe ouvrière industrielle."],
                    ['q' => "Dans sa manufacture d’épingles, Adam Smith décrit des ouvriers qui se partagent près de vingt opérations. Quel principe illustre-t-il ?", 'c' => ["La division du travail", "L’avantage comparatif entre nations", "La loi des rendements décroissants", "La destruction créatrice"], 'a' => 0, 'e' => "Dans La Richesse des nations (1776), chacun se spécialise dans une tâche, ce qui accroît la production par ouvrier. L’avantage comparatif est de Ricardo, la destruction créatrice de Schumpeter."],
                    ['q' => "Quelle série d’innovations caractérise la seconde révolution industrielle, vers 1870-1914 ?", 'c' => ["Machine à vapeur, métier à filer et charbon", "Ordinateur, internet et robots", "Moulin à eau, charrue et rotation des cultures", "Électricité, acier, chimie et pétrole"], 'a' => 3, 'e' => "Dynamo, acier moderne, chimie de synthèse et moteur à explosion marquent cette phase ; vapeur et coton appartiennent à la première, l’informatique à l’après-1945."],
                    ['q' => "En 1913, Henry Ford installe la chaîne de montage mobile pour la Ford T. Pourquoi son prix de vente a-t-il pu baisser ?", 'c' => ["Les ouvriers ont accepté des salaires inférieurs à ceux du marché", "Le temps de fabrication par voiture a nettement diminué, donc le coût unitaire aussi", "L’État a subventionné chaque véhicule vendu", "Le prix de l’acier a été divisé par dix en un an"], 'a' => 1, 'e' => "Standardisation et chaîne produisent en masse à moindre coût unitaire ; Ford a d’ailleurs relevé les salaires, à cinq dollars par jour en 1914."],
                ],
            ],
            [
                'title' => "Transformations économiques au XXe siècle",
                'description' => "Les grandes transformations économiques du XXe siècle.",
                'questions' => [
                    ['q' => "Octobre 1929 reste célèbre pour…", 'c' => ["le krach de Wall Street, début de la Grande Dépression", "la création du FMI et de la Banque mondiale à Bretton Woods", "le lancement du plan Marshall", "la signature du traité de Rome"], 'a' => 0, 'e' => "Les cours s’effondrent à la Bourse de New York fin octobre 1929 ; FMI (1944), plan Marshall (1947) et traité de Rome (1957) sont postérieurs."],
                    ['q' => "Au début des années 1930, la production s’effondre, des banques font faillite et, aux États-Unis, environ un actif sur quatre est sans emploi. Comment qualifier cette période ?", 'c' => ["Une stagflation", "Une hyperinflation", "Une grande dépression", "Un boom de reconstruction"], 'a' => 2, 'e' => "Production en chute et chômage massif et durable : c’est une dépression. La stagflation (années 1970) mêle inflation et croissance faible."],
                    ['q' => "Dans l’analyse de Keynes (1936), que doit faire l’État face à un chômage de masse ?", 'c' => ["Réduire ses dépenses pour rassurer les marchés", "Soutenir la demande par la dépense publique", "Laisser les salaires baisser jusqu’à l’équilibre", "Fermer ses frontières aux produits étrangers"], 'a' => 1, 'e' => "Pour Keynes, un chômage durable vient d’une demande insuffisante, que la dépense publique peut relever ; l’austérité l’aggraverait."],
                    ['q' => "En 1944, à Bretton Woods, quelles institutions sont décidées pour organiser le système monétaire d’après-guerre ?", 'c' => ["L’OMC et l’Union européenne", "L’OPEP et la Banque centrale européenne", "L’ONU et l’OTAN", "Le FMI et la Banque mondiale"], 'a' => 3, 'e' => "Le FMI surveille les changes et aide les pays en difficulté de paiement, la Banque mondiale finance la reconstruction ; OMC (1995) et BCE (1998) sont bien plus tardives."],
                    ['q' => "Entre 1948 et 1951, les États-Unis financent la reconstruction de l’Europe occidentale par un programme d’aide. Comment s’appelle-t-il ?", 'c' => ["Le plan Marshall", "Le plan Dawes de 1924", "Le New Deal", "Le plan Schuman"], 'a' => 0, 'e' => "Marshall, du nom du secrétaire d’État américain. Dawes (1924) traitait des réparations allemandes, le New Deal de la crise américaine, Schuman (1950) du charbon et de l’acier."],
                    ['q' => "Que désigne-t-on par « Trente Glorieuses » ?", 'c' => ["1870-1900, la grande dépression de fin de siècle en Europe", "1980-2010, l’essor de la mondialisation financière", "1945-1975 environ, forte croissance des pays riches", "1919-1949, l’entre-deux-guerres"], 'a' => 2, 'e' => "L’expression de Jean Fourastié (1979) couvre trois décennies de croissance rapide, de plein emploi et de hausse du niveau de vie jusqu’au milieu des années 1970."],
                    ['q' => "En 1973, après la guerre du Kippour, le prix du pétrole est à peu près multiplié par quatre. Quel effet cela a-t-il pour un importateur comme le Maroc ?", 'c' => ["Ses recettes d’exportation de pétrole augmentent mécaniquement", "Ses importations de pétrole deviennent moins coûteuses", "Son déficit commercial se réduit de lui-même", "Sa facture énergétique augmente, ce qui creuse son déficit extérieur"], 'a' => 3, 'e' => "Pour un importateur net, une même quantité coûte bien plus cher en devises ; ce choc a aussi contribué au ralentissement mondial des années 1970."],
                    ['q' => "Un pays affiche 8 % de hausse des prix, une croissance nulle et un chômage en hausse. Cette situation est typique de :", 'c' => ["la déflation", "la stagflation", "une expansion de plein emploi", "un boom de reconstruction"], 'a' => 1, 'e' => "Stagnation + inflation = stagflation, répandue dans les années 1970 ; la déflation, au contraire, correspond à une baisse des prix."],
                    ['q' => "Le commerce, la banque et le tourisme emploient de plus en plus de monde dans un pays, alors que l’agriculture recule. Quel mot décrit ce mouvement ?", 'c' => ["La tertiarisation", "La mondialisation", "La nationalisation", "La mécanisation"], 'a' => 0, 'e' => "Le secteur tertiaire regroupe les services ; sa part dans l’emploi et la production grandit : c’est la tertiarisation."],
                    ['q' => "Un fabricant marocain de faisceaux de câbles pour automobiles fournit des usines européennes qui assemblent les voitures. Cette relation illustre :", 'c' => ["une économie de subsistance tournée vers l’autoconsommation", "le mercantilisme d’État", "l’insertion dans les chaînes de valeur mondiales", "l’autarcie industrielle"], 'a' => 2, 'e' => "La fabrication d’un produit est découpée entre pays, chacun faisant une étape ; c’est une marque de la mondialisation productive récente."],
                ],
            ],
            [
                'title' => "Grandes tendances de l’histoire économique",
                'description' => "Révision des principales transformations économiques sur longue période.",
                'questions' => [
                    ['q' => "Le PIB d’un pays passe de 200 à 230 milliards de MAD alors que les prix ont augmenté de 10 %. Que dire de la croissance réelle ?", 'c' => ["Elle est de 15 %, car le PIB a gagné 30 milliards", "Elle est de 25 %, somme des deux hausses", "Environ 4,5 %, loin des 15 % nominaux", "Elle est nulle, car l’inflation efface toute hausse"], 'a' => 2, 'e' => "Nominal : +15 %. En déflatant, 230 ÷ 1,10 ≈ 209, soit environ +4,5 % en volume."],
                    ['q' => "Un pays croît de 2 % par an en moyenne. En combien d’années son PIB double-t-il environ ?", 'c' => ["Environ 35 ans", "Environ 50 ans", "Environ 20 ans", "Environ 100 ans"], 'a' => 0, 'e' => "Règle des 70 : 70 ÷ 2 = 35. Diviser 100 par 2 donnerait 50, mais oublie que chaque année la hausse porte sur un PIB déjà augmenté."],
                    ['q' => "Malthus (1798) craignait que la population croisse plus vite que les subsistances. Pourquoi les pays industrialisés ont-ils échappé à ce piège ?", 'c' => ["La population a cessé de croître dès le XVIIIe siècle", "Les terres ont été partagées également entre habitants", "Les importations de nourriture ont été interdites dans tous les pays", "La productivité a fait croître la production par habitant"], 'a' => 3, 'e' => "Malthus raisonnait à technique constante ; progrès technique et industrialisation ont fait monter le revenu par habitant malgré la hausse de la population."],
                    ['q' => "Dans un pays où l’État peut reprendre une terre sans recours possible, un agriculteur hésite à planter des arbres fruitiers rentables dans dix ans. Quel mécanisme l’explique ?", 'c' => ["L’abondance de terres gratuites rend l’effort inutile", "Le risque de ne pas récolter les fruits de son effort décourage d’investir", "Le coût élevé du crédit supprime tout intérêt à produire", "La concurrence des importations rend la terre sans valeur"], 'a' => 1, 'e' => "Sans droits de propriété sûrs, un investissement long se perd trop facilement ; les institutions qui protègent la propriété encouragent donc l’investissement."],
                    ['q' => "Grâce au pétrole, un pays double son PIB par habitant, mais l’espérance de vie et la scolarisation stagnent. Que peut-on conclure ?", 'c' => ["Il y a développement sans aucune croissance économique", "Il y a récession masquée par les prix", "Il y a croissance sans véritable développement", "Le PIB par habitant est faux par définition"], 'a' => 2, 'e' => "Le développement ajoute santé et éducation au revenu, comme le fait l’indice de développement humain (IDH) : une hausse du PIB seule ne suffit pas à l’établir."],
                    ['q' => "Quel ordre décrit le mieux les sources d’énergie dominantes en Europe depuis 1750 ?", 'c' => ["Bois, puis pétrole, puis charbon, puis électricité", "Bois et force animale, puis charbon, puis pétrole", "Charbon et vapeur, puis bois, puis pétrole et gaz", "Gaz, puis vapeur, puis bois"], 'a' => 1, 'e' => "Au XVIIIe siècle dominent bois et force animale ; le charbon prend la tête au XIXe, le pétrole au XXe siècle."],
                    ['q' => "Quand les chemins de fer ont fait disparaître les diligences et leurs relais, quel concept de Schumpeter s’applique ?", 'c' => ["La destruction créatrice", "La main invisible", "Le cercle vertueux de la demande", "La loi des débouchés"], 'a' => 0, 'e' => "Une innovation crée de nouvelles activités et en détruit d’anciennes : c’est la destruction créatrice. La main invisible est de Smith, la loi des débouchés de Say."],
                    ['q' => "Pourquoi parle-t-on de « Grande Divergence » ?", 'c' => ["Les prix européens et asiatiques ont évolué en sens opposé après 1950", "Les économies d’Afrique ont cessé d’échanger avec l’Europe", "La population européenne a diminué au XIXe siècle", "Dès le XIXe siècle, l’écart de revenu entre l’Europe occidentale et le reste du monde s’est fortement creusé"], 'a' => 3, 'e' => "L’industrialisation fait grimper les revenus en Europe occidentale (puis en Amérique du Nord) bien plus vite qu’ailleurs ; les historiens discutent encore des causes."],
                    ['q' => "Au XIXe siècle, dans les pays industrialisés, la mortalité recule avant la natalité. Quelle conséquence démographique en résulte ?", 'c' => ["Un vieillissement immédiat de la population", "Une forte croissance de la population", "Une chute du nombre d’habitants", "Une stabilité de la population"], 'a' => 1, 'e' => "Moins de décès pour autant de naissances : le solde naturel est positif et la population augmente vite. C’est une étape de la transition démographique."],
                    ['q' => "Un ministre affirme que l’histoire économique permet de prédire les crises à venir avec exactitude. Que lui répondre ?", 'c' => ["Elle éclaire des mécanismes récurrents, mais chaque crise a ses particularités", "Il a raison : les crises reviennent à l’identique tous les dix ans", "Il a tort : l’histoire n’apporte rien d’utile à l’économiste", "Il a raison, car les données du passé suffisent à calculer l’avenir"], 'a' => 0, 'e' => "Le passé offre des analogies et des leçons (1929, 1973), pas des prévisions précises ; aucun cycle exact de dix ans n’existe."],
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
