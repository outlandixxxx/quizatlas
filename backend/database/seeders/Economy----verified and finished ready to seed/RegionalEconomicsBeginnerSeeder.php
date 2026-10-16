<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class RegionalEconomicsBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'regional-economics')->firstOrFail();

        $settings = [
            ['duration' => 20, 'passing_score' => 50],
            ['duration' => 20, 'passing_score' => 55],
            ['duration' => 20, 'passing_score' => 60],
            ['duration' => 20, 'passing_score' => 60],
            ['duration' => 20, 'passing_score' => 60],
            ['duration' => 20, 'passing_score' => 65],
            ['duration' => 20, 'passing_score' => 65],
            ['duration' => 20, 'passing_score' => 70],
            ['duration' => 20, 'passing_score' => 70],
        ];

        // 'a' = index (0-based) de la bonne réponse dans 'c'
        $quizzes = [
            [
                'title' => "Fondamentaux de l’économie régionale",
                'description' => "Notions de base sur les régions, la localisation de l’activité économique et les écarts territoriaux.",
                'questions' => [
                    ['q' => "Que cherche à étudier l’économie régionale ?", 'c' => ["La localisation des activités dans l’espace", "Le fonctionnement interne d’une seule entreprise", "Les relations de change entre monnaies étrangères", "Le budget mensuel d’un ménage"], 'a' => 0, 'e' => "Sa question centrale est spatiale : où les activités s’installent-elles et pourquoi certains territoires s’enrichissent plus que d’autres ?"],
                    ['q' => "Une région compte surtout des usines textiles et très peu d’autres activités. Comment qualifier sa structure productive ?", 'c' => ["Diversifiée", "Désindustrialisée", "Spécialisée", "Mondialisée"], 'a' => 2, 'e' => "Quand une région concentre l’essentiel de son activité dans un seul secteur, on parle de spécialisation régionale."],
                    ['q' => "Pour comparer le niveau de production de deux régions de tailles très différentes, quel indicateur est le mieux adapté ?", 'c' => ["Le PIB total de chaque région", "Le PIB par habitant", "Le nombre de communes", "La superficie en km²"], 'a' => 1, 'e' => "Le PIB total dépend de la taille ; en le divisant par la population, on obtient une comparaison plus juste du niveau de production par personne."],
                    ['q' => "Que désigne l’expression « disparités régionales » ?", 'c' => ["Une baisse générale des prix dans le pays", "Le déplacement saisonnier des touristes", "La répartition des impôts entre ménages", "Des écarts de revenu, d’emploi ou d’équipements entre régions"], 'a' => 3, 'e' => "Le mot « disparité » renvoie à l’inégalité : certaines régions sont mieux dotées en emplois, revenus et services que d’autres."],
                    ['q' => "Une région A produit 60 milliards de MAD de richesse pour 2 millions d’habitants. Quel est son PIB par habitant ?", 'c' => ["12 000 MAD", "20 000 MAD", "30 000 MAD", "120 000 MAD"], 'a' => 2, 'e' => "60 000 millions divisés par 2 millions d’habitants donnent 30 000 MAD par personne."],
                    ['q' => "Un exportateur s’installe près d’un grand port. Quel facteur de localisation motive surtout ce choix ?", 'c' => ["L’accès au port et aux routes", "La proximité d’une université", "Le taux directeur de la banque centrale", "Le niveau des droits de succession"], 'a' => 0, 'e' => "Pour expédier ses marchandises, l’entreprise cherche à réduire ses coûts et ses délais de transport."],
                    ['q' => "Les emplois d’une ville sont mieux payés que dans la région voisine. Quelle réaction est la plus plausible chez les actifs ?", 'c' => ["Ils cessent de chercher un emploi", "Ils demandent une baisse des salaires", "Ils renoncent à toute formation", "Certains viennent y travailler"], 'a' => 3, 'e' => "Un écart de rémunération pousse une partie des travailleurs à migrer ou à faire la navette vers la zone la mieux payée."],
                    ['q' => "Une grande université forme chaque année des ingénieurs dans une région. Quel atout cela représente-t-il pour les entreprises ?", 'c' => ["Un stock d’or plus élevé", "Une main-d’œuvre qualifiée locale", "Des droits de douane nettement plus bas", "Un taux de change durablement stable"], 'a' => 1, 'e' => "Les diplômés renforcent le capital humain local, ce qui facilite les recrutements et attire des activités à forte valeur ajoutée."],
                    ['q' => "Pourquoi les mines de phosphate ont-elles fixé des activités dans certaines régions du Maroc ?", 'c' => ["Les salaires y sont fixés par l’État", "Le climat y est plus doux qu’ailleurs", "On extrait là où se trouve le gisement", "Les banques y sont plus nombreuses"], 'a' => 2, 'e' => "Une ressource naturelle ne se déplace pas : l’extraction, puis une partie de la transformation, s’installent près du gisement."],
                    ['q' => "Quel est l’intrus parmi ces éléments, qui n’est pas un facteur de localisation d’entreprise ?", 'c' => ["Le nombre de pages d’un rapport", "Le coût des terrains", "La disponibilité de la main-d’œuvre", "La proximité des clients"], 'a' => 0, 'e' => "Foncier, main-d’œuvre et clientèle pèsent sur le choix d’un site ; la longueur d’un document comptable n’a aucun rapport."],
                    ['q' => "Le chômage atteint 8 % dans la région A et 14 % dans la région B. Quelle conclusion est correcte ?", 'c' => ["Les deux régions ont le même marché du travail", "Le marché du travail est plus dégradé en B", "La région A compte plus d’habitants", "La région B produit plus par habitant"], 'a' => 1, 'e' => "Un taux de chômage plus élevé signale plus de difficultés d’emploi ; il ne dit rien, en revanche, sur la population ni sur le PIB par habitant."],
                ],
            ],
            [
                'title' => "Localisation des entreprises et spécialisation",
                'description' => "Applications simples sur les facteurs de localisation, les coûts, la spécialisation et la diversification régionales.",
                'questions' => [
                    ['q' => "Une cimenterie vend un produit lourd et peu cher à la tonne. Où a-t-elle intérêt à s’installer ?", 'c' => ["Loin des chantiers, près d’un aéroport", "Dans un quartier de bureaux très chers", "À l’étranger, quel que soit le marché", "Près des carrières et des zones de construction"], 'a' => 3, 'e' => "Un produit pondéreux coûte cher à transporter : on le fabrique près de la matière première et des acheteurs."],
                    ['q' => "Une entreprise de logistique a besoin de grands entrepôts. Quel critère pèse le plus dans son choix de site ?", 'c' => ["Le prix des bureaux en centre-ville", "Le prix des terrains disponibles", "La notoriété touristique de la ville", "Le taux de natalité local"], 'a' => 1, 'e' => "Les entrepôts consomment beaucoup d’espace : le foncier abordable et libre est décisif."],
                    ['q' => "Dans une région, la conserverie de fruits fait vivre la moitié des emplois. Quel risque principal cette spécialisation comporte-t-elle ?", 'c' => ["Une forte dépendance à un seul secteur", "Une baisse des prix à la consommation", "Un manque de terres agricoles", "Une concurrence étrangère trop faible"], 'a' => 0, 'e' => "Si le secteur traverse une crise, c’est toute la région qui en souffre faute d’autres emplois."],
                    ['q' => "Quel est l’intérêt d’une économie régionale diversifiée ?", 'c' => ["Elle supprime le besoin d’échanges commerciaux", "Elle accélère mécaniquement la croissance du PIB", "Elle partage le risque entre activités", "Elle fait baisser les loyers"], 'a' => 2, 'e' => "Comme un investisseur qui ne met pas tous ses œufs dans le même panier, la région amortit les difficultés d’un secteur."],
                    ['q' => "Le textile représente 20 % des emplois d’une région contre 10 % au niveau national. Quel est le quotient de localisation du textile (part régionale ÷ part nationale) ?", 'c' => ["0,5", "2", "10", "30"], 'a' => 1, 'e' => "20 ÷ 10 = 2 : le textile est deux fois plus présent dans la région que dans l’ensemble du pays, signe de spécialisation."],
                    ['q' => "Un centre d’appels compare deux villes aux infrastructures identiques, avec des salariés de même qualification. À quoi s’intéresse-t-il en priorité ?", 'c' => ["Aux salaires les plus élevés", "À la ville la moins peuplée", "Aux loyers les plus chers", "Au coût du travail le plus faible"], 'a' => 3, 'e' => "À qualité égale, le coût salarial départage les sites, car il représente l’essentiel des dépenses d’un centre d’appels."],
                    ['q' => "Un fabricant de yaourts frais livre chaque jour des supermarchés. Quel emplacement est le plus logique ?", 'c' => ["Près des villes où il vend", "Près d’un port d’exportation", "Près de la zone la moins chère, même éloignée", "Près d’un aéroport de fret"], 'a' => 0, 'e' => "Un produit frais et périssable doit atteindre vite ses clients : la proximité du marché prime."],
                    ['q' => "Le Souss est connu pour ses primeurs et la région de Casablanca pour ses services. Que traduit cette situation ?", 'c' => ["Une structure productive identique dans les deux", "Une absence d’échanges entre les deux régions", "Des atouts différents, d’où la spécialisation", "Un transfert organisé des usines vers le Souss"], 'a' => 2, 'e' => "Chaque région met en valeur ses avantages propres (climat et terres d’un côté, concentration d’entreprises et de finance de l’autre), puis échange avec l’autre."],
                    ['q' => "Un élève écrit : « Une région spécialisée n’a plus besoin du commerce avec les autres ». Où est l’erreur ?", 'c' => ["Se spécialiser ne change pas la production", "Le commerce n’existe qu’entre pays", "Une région spécialisée produit tout ce qu’elle consomme", "Au contraire, elle doit échanger davantage"], 'a' => 3, 'e' => "Produire peu de choses mais en grande quantité oblige à acheter ailleurs tout le reste : la spécialisation augmente les échanges."],
                    ['q' => "Pourquoi les loyers de bureaux sont-ils plus élevés au centre d’une grande ville qu’en périphérie ?", 'c' => ["Le centre est moins accessible", "La demande y est forte, l’espace limité", "Les salaires y sont plafonnés par la loi", "Les entreprises y paient moins d’impôts locaux"], 'a' => 1, 'e' => "Beaucoup d’entreprises veulent le centre, mais il n’y a qu’une quantité limitée de mètres carrés : le prix monte."],
                    ['q' => "L’emploi d’une région se répartit ainsi : 60 % agriculture, 25 % services, 15 % industrie. Que dire de sa structure productive ?", 'c' => ["Elle est dominée par l’industrie", "Elle repose surtout sur les services", "Elle est dominée par l’agriculture", "Elle est équilibrée entre les trois secteurs"], 'a' => 2, 'e' => "Avec 60 % des emplois, l’agriculture est le premier secteur, loin devant les deux autres."],
                ],
            ],
            [
                'title' => "Disparités régionales et emploi",
                'description' => "Comprendre les écarts d’emploi, de productivité et de revenus entre territoires ainsi que leurs causes possibles.",
                'questions' => [
                    ['q' => "La productivité du travail d’une région peut être approchée par :", 'c' => ["Le nombre d’habitants par km²", "Le total des salaires versés", "La valeur ajoutée par travailleur", "Le taux de natalité"], 'a' => 2, 'e' => "Productivité = richesse créée ÷ quantité de travail ; plus chaque travailleur crée de valeur, plus la région est productive."],
                    ['q' => "Une région compte 400 000 actifs, dont 48 000 chômeurs. Quel est son taux de chômage ?", 'c' => ["12 %", "8,5 %", "48 %", "20 %"], 'a' => 0, 'e' => "48 000 ÷ 400 000 = 0,12, soit 12 % de la population active."],
                    ['q' => "Dans une région, beaucoup de jeunes ont renoncé à chercher du travail. Que peut-il arriver au taux de chômage officiel ?", 'c' => ["Il augmente forcément", "Il double", "Il devient négatif", "Il peut baisser sans amélioration réelle"], 'a' => 3, 'e' => "Un chômeur qui cesse de chercher sort de la population active : le taux baisse alors que la situation reste mauvaise."],
                    ['q' => "Pourquoi une région intérieure enclavée reste-t-elle souvent moins développée ?", 'c' => ["Elle a trop de ports de commerce", "Elle accède mal aux marchés", "Elle possède trop d’universités", "Sa monnaie est plus faible que celle de sa voisine"], 'a' => 1, 'e' => "Le coût et la durée des trajets découragent les entreprises ; notez que la monnaie est la même dans tout le pays."],
                    ['q' => "Une région pauvre attire peu d’entreprises, donc crée peu d’emplois et de recettes locales, donc investit peu. Comment appelle-t-on ce mécanisme ?", 'c' => ["Un cercle vicieux de pauvreté", "Un multiplicateur budgétaire", "Une économie d’échelle croissante", "Un effet de change sur les prix"], 'a' => 0, 'e' => "Chaque faiblesse entretient la suivante : c’est un cercle vicieux, dont il faut sortir par un choc extérieur positif (infrastructures, formation)."],
                    ['q' => "Quelques revenus très élevés tirent la moyenne d’une région vers le haut. Quel indicateur décrit le mieux le ménage typique ?", 'c' => ["Le revenu maximal", "Le revenu total régional", "Le revenu médian", "Le PIB régional"], 'a' => 2, 'e' => "La médiane coupe la population en deux moitiés égales et n’est pas déformée par les valeurs extrêmes."],
                    ['q' => "Le PIB par habitant est de 40 000 MAD dans la région A et de 25 000 MAD dans la région B. De combien A dépasse-t-elle B, en pourcentage de B ?", 'c' => ["15 %", "60 %", "37,5 %", "160 %"], 'a' => 1, 'e' => "L’écart est de 15 000 MAD ; rapporté à la base B, 15 000 ÷ 25 000 = 0,60, soit 60 %. Les 37,5 % viennent d’un mauvais choix de base."],
                    ['q' => "Une mine ferme et ses ex-salariés n’ont pas les compétences recherchées ailleurs dans la région. De quel chômage s’agit-il ?", 'c' => ["Frictionnel", "Saisonnier", "Conjoncturel", "Structurel"], 'a' => 3, 'e' => "Le désaccord durable entre compétences disponibles et emplois offerts caractérise le chômage structurel."],
                    ['q' => "Pourquoi les salaires sont-ils souvent plus élevés dans les grandes régions urbaines très productives ?", 'c' => ["Productivité et qualifications y sont plus élevées", "Le salaire minimum légal y est fixé ville par ville", "L’État y impose les mêmes prix à toutes les entreprises", "Les entreprises y emploient moins de salariés qu’ailleurs"], 'a' => 0, 'e' => "Un travailleur qui crée plus de valeur et dont les compétences sont rares peut être mieux payé."],
                    ['q' => "En dix ans, le revenu par habitant de la région pauvre passe de 50 % à 70 % de celui de la région riche. Que constate-t-on ?", 'c' => ["Une divergence régionale", "Une désindustrialisation", "Une hausse de l’inflation", "Une convergence régionale"], 'a' => 3, 'e' => "L’écart relatif se réduit : les régions se rapprochent, c’est une convergence."],
                    ['q' => "Un journaliste affirme que l’emploi va bien dans une région parce que son PIB total augmente. Quelle limite faut-il relever ?", 'c' => ["Le PIB d’une région ne peut pas se calculer", "Le PIB peut croître sans créer d’emplois", "Le PIB régional égale toujours celui du pays", "Le chômage ne dépend que de l’action de l’État"], 'a' => 1, 'e' => "La croissance peut venir d’un secteur très capitalistique ou d’une hausse de la population ; il faut regarder directement l’emploi."],
                ],
            ],
            [
                'title' => "Migration et mobilité régionale",
                'description' => "Applications sur les déplacements des personnes, les incitations économiques et les effets possibles sur les territoires.",
                'questions' => [
                    ['q' => "Un jeune quitte un village de l’Oriental pour travailler à Casablanca. De quel type de mobilité s’agit-il ?", 'c' => ["D’une migration internationale", "D’une migration interne", "D’un voyage touristique", "D’un déplacement quotidien"], 'a' => 1, 'e' => "Le déplacement reste à l’intérieur du pays : c’est une migration interne, par opposition à l’émigration."],
                    ['q' => "Le manque d’emplois dans une région est un facteur de :", 'c' => ["Concentration", "Attraction", "Croissance", "Répulsion"], 'a' => 3, 'e' => "Les raisons de partir (« push ») s’opposent aux raisons d’arriver (« pull ») ; l’absence d’emplois pousse à quitter la région."],
                    ['q' => "Un salarié habite Kénitra et travaille chaque jour à Rabat. Comment nomme-t-on ce déplacement régulier ?", 'c' => ["Un exode rural", "Une émigration", "Une migration pendulaire", "Une délocalisation"], 'a' => 2, 'e' => "Le mot « pendulaire » évoque le va-et-vient quotidien entre domicile et lieu de travail, sans changer de résidence."],
                    ['q' => "Malgré un salaire plus élevé ailleurs, pourquoi une personne peut-elle hésiter à déménager ?", 'c' => ["Logement cher et famille éloignée", "Les salaires affichés sont identiques partout", "Les entreprises interdisent la mobilité", "Le PIB baisse dès l’arrivée"], 'a' => 0, 'e' => "Le gain salarial doit être comparé aux coûts du déménagement, du logement et de la perte des proches."],
                    ['q' => "L’exode rural désigne :", 'c' => ["Le départ des citadins vers la campagne", "L’arrivée de touristes dans les villages", "La hausse de la production agricole", "Le départ des ruraux vers les villes"], 'a' => 3, 'e' => "Rural = campagne ; exode = départ en masse. Les habitants des campagnes migrent vers les villes."],
                    ['q' => "Une région voit partir ses jeunes diplômés vers la capitale. Que devient son capital humain ?", 'c' => ["Il se renforce", "Il s’appauvrit", "Il n’est pas affecté", "Il se transforme en capital physique"], 'a' => 1, 'e' => "Ses personnes les plus qualifiées partent : c’est la « fuite des cerveaux » à l’échelle régionale."],
                    ['q' => "Des migrants envoient une part de leur salaire à leur famille restée dans leur région d’origine. Quel effet peut en résulter ?", 'c' => ["Une baisse de la consommation des ménages locaux", "Une disparition des commerces de proximité", "Un revenu d’appoint pour les familles", "Une hausse des impôts locaux"], 'a' => 2, 'e' => "Ces transferts augmentent le revenu disponible des familles et soutiennent souvent les dépenses locales."],
                    ['q' => "Une ville accueille 12 000 arrivants et voit partir 9 000 habitants dans l’année. Quel est son solde migratoire ?", 'c' => ["+3 000", "−3 000", "+21 000", "+9 000"], 'a' => 0, 'e' => "Solde migratoire = entrées − sorties = 12 000 − 9 000 = +3 000."],
                    ['q' => "Quand les jeunes actifs quittent une région, que devient sa population ?", 'c' => ["Elle rajeunit", "Elle vieillit", "Elle voit sa natalité croître", "Elle conserve la même structure par âge"], 'a' => 1, 'e' => "Les départs concernent surtout les jeunes ; la part des personnes âgées augmente et la natalité diminue ensuite."],
                    ['q' => "Dans une grande ville, les loyers sont très élevés. Quelle conséquence est probable pour les nouveaux travailleurs ?", 'c' => ["Les arrivées s’accélèrent dans tous les quartiers", "Les arrivées ne sont pas affectées", "Certains s’installent en périphérie", "Les loyers baissent aussitôt"], 'a' => 2, 'e' => "Un coût du logement élevé réduit le gain réel de la migration et pousse à s’installer plus loin du centre."],
                    ['q' => "Entre deux recensements, la population d’une province baisse de 5 % alors que les naissances dépassent les décès. Quelle explication est la plus cohérente ?", 'c' => ["Une immigration internationale massive", "Une hausse de l’espérance de vie", "Un excédent de naissances", "Un solde migratoire fortement négatif"], 'a' => 3, 'e' => "Le solde naturel est positif, donc la baisse ne peut venir que d’un nombre de départs supérieur aux arrivées."],
                ],
            ],
            [
                'title' => "Infrastructures et développement régional",
                'description' => "Étudier le rôle des transports, du numérique et des équipements collectifs dans l’activité régionale.",
                'questions' => [
                    ['q' => "Lequel de ces équipements relève des infrastructures de transport ?", 'c' => ["Une autoroute", "Un brevet", "Un compte bancaire", "Un stock de marchandises"], 'a' => 0, 'e' => "Routes, rails, ports et aéroports forment les infrastructures de transport ; les autres choix sont des actifs immatériels ou financiers."],
                    ['q' => "Le désenclavement d’une vallée de montagne par une route goudronnée vise surtout à :", 'c' => ["Limiter l’arrivée de produits extérieurs", "Réduire la taille des exploitations agricoles", "Relier les habitants aux marchés", "Fixer les prix agricoles"], 'a' => 2, 'e' => "Enclavé veut dire isolé : la route rapproche la vallée des acheteurs, des écoles et des hôpitaux."],
                    ['q' => "Pourquoi un haut débit internet fiable peut-il aider une petite ville éloignée ?", 'c' => ["Il supprime les coûts de production", "Il oblige les habitants à rester", "Il double le salaire minimum", "Il permet le télétravail et les services en ligne"], 'a' => 3, 'e' => "Pour des activités de services, la distance compte moins quand les données voyagent par réseau."],
                    ['q' => "Un grand port moderne ouvre près d’une région industrielle. Quel effet est le plus probable pour les exportateurs locaux ?", 'c' => ["Des coûts de transport plus élevés", "Des coûts logistiques réduits", "Une baisse de la qualité des produits", "Une fermeture des usines voisines"], 'a' => 1, 'e' => "Un accès direct à la mer évite des trajets longs et coûteux, donc améliore la compétitivité des entreprises."],
                    ['q' => "Une commune étudie un pont de 50 millions de MAD qui procurerait 40 millions de gains estimés. Que dit le calcul coûts-avantages ?", 'c' => ["Un bénéfice net de 10 millions de MAD", "Des gains égaux au double du coût", "Un déficit de 10 millions de MAD", "Un coût couvert à 125 % par les gains"], 'a' => 2, 'e' => "40 − 50 = −10 : le bilan est négatif, sauf si d’autres bénéfices non chiffrés justifient la dépense. Les 125 % viennent d’un rapport inversé."],
                    ['q' => "Pourquoi les collectivités financent-elles souvent routes et réseaux d’eau ?", 'c' => ["Coût élevé, bénéfices partagés par tous", "Aucune entreprise n’a le droit d’en construire", "Ils ne produisent aucune activité", "Ils sont rentables dès la première année"], 'a' => 0, 'e' => "Le privé n’investit que si le profit est assuré ; or ces équipements coûtent cher et profitent à toute la collectivité."],
                    ['q' => "Une zone industrielle isolée subit des coupures d’électricité fréquentes. Quel risque cela fait-il courir ?", 'c' => ["Une baisse des impôts des entreprises", "Un afflux de main-d’œuvre", "Un accès élargi aux marchés", "Des pannes qui freinent les installations"], 'a' => 3, 'e' => "Une énergie peu fiable désorganise la production et décourage les investisseurs."],
                    ['q' => "Quel équipement collectif améliore le capital humain d’une région ?", 'c' => ["Un rond-point agrandi et éclairé", "Des écoles de formation", "Un parking de supermarché agrandi", "Une zone de stockage de marchandises"], 'a' => 1, 'e' => "Le capital humain, c’est l’ensemble des compétences ; il se construit par l’éducation et la formation."],
                    ['q' => "Pendant la construction d’une autoroute, des entreprises locales de BTP embauchent. Quel effet cela illustre-t-il ?", 'c' => ["Un effet de demande sur l’emploi local", "Un effet de change sur les exportations", "Une baisse des impôts locaux", "Une délocalisation d’usines"], 'a' => 0, 'e' => "Le chantier achète des biens et des services sur place, et les salaires versés alimentent ensuite la consommation locale."],
                    ['q' => "Un maire affirme : « Une nouvelle route fera forcément venir des usines ». Que lui répondre ?", 'c' => ["Une route n’a aucun effet sur l’économie locale", "Les usines évitent les zones bien desservies", "Elle aide, mais d’autres critères comptent", "Les usines vont toujours au lieu le plus cher"], 'a' => 2, 'e' => "L’accessibilité est une condition utile, rarement suffisante : l’entreprise compare plusieurs critères à la fois."],
                    ['q' => "Quand trop de véhicules empruntent la même route, le temps de trajet augmente pour tous. Quel phénomène est décrit ?", 'c' => ["Une économie d’échelle", "La congestion", "Une rente foncière", "Un effet multiplicateur"], 'a' => 1, 'e' => "Chaque usager supplémentaire ralentit les autres : c’est une externalité négative appelée congestion."],
                ],
            ],
            [
                'title' => "Agglomération et économies régionales",
                'description' => "Notions introductives sur la concentration spatiale des activités et les économies d’agglomération.",
                'questions' => [
                    ['q' => "Qu’appelle-t-on économies d’agglomération ?", 'c' => ["Les gains obtenus en réduisant la population", "Les économies d’un ménage sur son loyer", "Les subventions versées aux petites communes", "Les gains liés à la proximité de nombreux acteurs"], 'a' => 3, 'e' => "Entreprises et travailleurs regroupés au même endroit y gagnent en coûts, en rencontres et en idées."],
                    ['q' => "Dans une zone industrielle, plusieurs entreprises partagent le même fournisseur spécialisé et le même centre de formation. Quel avantage en tirent-elles ?", 'c' => ["Des coûts réduits par le partage", "Des prix de vente fixés par l’État", "Une absence totale de concurrents", "Une suppression de leurs impôts"], 'a' => 0, 'e' => "Un service mutualisé coûte moins cher à chacun qu’un service que chaque entreprise financerait seule."],
                    ['q' => "Dans une grande ville, un employeur trouve plus facilement un profil rare. Quelle économie d’agglomération cela illustre-t-il ?", 'c' => ["Le partage d’un port", "Un marché du travail étendu", "Une hausse des prix fonciers", "Une baisse de la demande"], 'a' => 1, 'e' => "Plus il y a de candidats et d’employeurs réunis, plus l’appariement entre compétences et postes est rapide."],
                    ['q' => "Des ingénieurs d’entreprises voisines échangent des idées dans des salons professionnels et des cafés. Quel type d’externalité est en jeu ?", 'c' => ["Environnementale", "Fiscale", "De connaissances", "Monétaire"], 'a' => 2, 'e' => "Les savoirs circulent plus facilement entre voisins, sans que personne ne les vende : c’est une externalité positive."],
                    ['q' => "Quel inconvénient peut apparaître quand une ville devient très dense ?", 'c' => ["Congestion et loyers en hausse", "Baisse générale des coûts de transport", "Amélioration de la qualité de l’air", "Disparition des services publics"], 'a' => 0, 'e' => "Au-delà d’un certain seuil, la densité provoque des coûts : embouteillages, immobilier cher, pollution."],
                    ['q' => "Le regroupement, sur un même territoire, d’entreprises, de fournisseurs et de centres de recherche d’un secteur s’appelle :", 'c' => ["Un monopole", "Une holding", "Un syndicat", "Un cluster"], 'a' => 3, 'e' => "Cluster signifie « grappe » : des acteurs liés par un même métier et regroupés sur un lieu."],
                    ['q' => "Une usine double sa production et son coût moyen par unité baisse. Quelle notion illustre ce cas ?", 'c' => ["Une économie d’agglomération", "Une externalité de réseau", "Une économie d’échelle interne", "Une rente de situation"], 'a' => 2, 'e' => "Le gain vient de la taille de l’entreprise elle-même, pas de la concentration d’autres acteurs autour d’elle."],
                    ['q' => "Une ville de 200 000 habitants a un PIB de 8 milliards de MAD ; une autre, de 1 million d’habitants, de 60 milliards. Que dire du PIB par habitant ?", 'c' => ["Il est plus élevé dans la petite ville", "Il est plus élevé en grande ville", "Il est identique dans les deux villes", "Il ne peut pas être calculé ici"], 'a' => 1, 'e' => "8 milliards ÷ 200 000 = 40 000 MAD ; 60 milliards ÷ 1 million = 60 000 MAD. La grande ville produit davantage par personne."],
                    ['q' => "Que décrit le schéma « centre-périphérie » ?", 'c' => ["Des activités réparties uniformément", "Un centre sans industrie ni services", "Des périphéries plus riches que le centre", "Un centre dense et dynamique face à une périphérie moins dotée"], 'a' => 3, 'e' => "Les activités se concentrent dans le centre, qui attire population et capitaux, tandis que la périphérie reste plus faiblement équipée."],
                    ['q' => "Pourquoi certaines entreprises quittent-elles le centre d’une métropole pour sa périphérie ?", 'c' => ["Foncier moins cher, accès plus simple", "Pour payer des loyers plus élevés", "Pour se rapprocher des concurrents étrangers", "Pour payer davantage de taxes"], 'a' => 0, 'e' => "L’espace coûte moins cher et l’accès routier est souvent plus simple, ce qui compense l’éloignement du centre."],
                    ['q' => "Une seule ville concentre un tiers de la population et la majorité des sièges d’entreprises du pays. Que dire de la hiérarchie urbaine ?", 'c' => ["Elle est répartie de façon équilibrée", "Elle est homogène d’une région à l’autre", "Elle est dominée par une métropole", "Elle est entièrement rurale"], 'a' => 2, 'e' => "Quand une ville dépasse largement les autres en poids économique et démographique, on parle de hiérarchie dominée par une métropole."],
                ],
            ],
            [
                'title' => "Politiques de développement régional",
                'description' => "Comprendre les instruments utilisés pour réduire certaines disparités et soutenir l’attractivité économique des territoires.",
                'questions' => [
                    ['q' => "Quel instrument vise à réduire les écarts entre régions ?", 'c' => ["Une taxe sur les importations de pétrole", "Des aides ciblées sur les régions en retard", "Une hausse du taux directeur de la banque centrale", "Un contrôle du prix du pain et de la farine"], 'a' => 1, 'e' => "Dotations et investissements publics orientés vers les territoires en retard compensent leurs handicaps."],
                    ['q' => "Que signifie la décentralisation ?", 'c' => ["Fermer progressivement les administrations locales", "Concentrer toutes les décisions à la capitale", "Donner des compétences aux collectivités locales", "Supprimer tous les impôts locaux"], 'a' => 2, 'e' => "Décentraliser, c’est rapprocher la décision du terrain en transférant des pouvoirs et des ressources aux régions et aux communes."],
                    ['q' => "Une zone franche d’exportation accorde des avantages fiscaux et douaniers aux entreprises qui s’y installent. Quel est l’objectif visé ?", 'c' => ["Attirer des investisseurs et des emplois", "Réduire le nombre d’entreprises exportatrices", "Fermer la frontière à certaines marchandises", "Fixer les salaires pour tout le pays"], 'a' => 0, 'e' => "L’avantage fiscal baisse le coût d’installation, dans l’espoir de créer de l’activité et de l’emploi."],
                    ['q' => "Un fonds prélève une part des recettes des régions riches pour aider les régions pauvres. Quel nom porte ce mécanisme ?", 'c' => ["Une nationalisation", "Une taxe carbone", "Un emprunt d’État", "Une péréquation"], 'a' => 3, 'e' => "La péréquation redistribue entre territoires, comme l’impôt progressif le fait entre ménages."],
                    ['q' => "Une région subventionne l’installation d’une usine qui s’y serait implantée de toute façon. Comment nomme-t-on ce gaspillage ?", 'c' => ["Un effet d’éviction", "Un effet d’aubaine", "Un effet de levier", "Un effet de seuil"], 'a' => 1, 'e' => "L’entreprise profite de l’aide sans qu’elle ait changé sa décision : c’est une aubaine pour elle, une perte pour les finances publiques."],
                    ['q' => "Une région dépense 6 millions de MAD en aides et obtient 120 emplois. Quel est le coût public par emploi créé ?", 'c' => ["5 000 MAD", "20 000 MAD", "50 000 MAD", "720 000 MAD"], 'a' => 2, 'e' => "6 000 000 ÷ 120 = 50 000 MAD par emploi. Les 720 000 viennent d’une multiplication au lieu d’une division."],
                    ['q' => "Une région à fort chômage et faible qualification veut agir sur l’offre de travail. Quelle politique est adaptée ?", 'c' => ["Une formation professionnelle", "Une hausse des droits de douane", "Une baisse de la masse monétaire", "Une nouvelle taxe sur les salaires"], 'a' => 0, 'e' => "Former améliore les compétences des chômeurs et les rapproche des emplois proposés."],
                    ['q' => "Une commune baisse fortement sa fiscalité locale pour attirer des entreprises. Quel risque prend-elle ?", 'c' => ["Une hausse de ses recettes", "Un surplus d’infrastructures", "Un excès de main-d’œuvre", "Perdre des recettes sans gagner d’entreprises"], 'a' => 3, 'e' => "Si l’avantage fiscal ne suffit pas à convaincre les investisseurs, la commune se prive de ressources pour rien."],
                    ['q' => "Deux régions voisines baissent tour à tour leurs impôts pour attirer les mêmes entreprises. Que craindre ?", 'c' => ["Des recettes plus élevées dans les deux régions", "Un monopole régional", "Une surenchère sans activité nouvelle", "Une hausse automatique des salaires"], 'a' => 2, 'e' => "Chacun annule l’avantage de l’autre ; au final, les entreprises payent moins et les deux régions ont moins à dépenser."],
                    ['q' => "Quel est l’objectif d’une politique d’aménagement du territoire ?", 'c' => ["Concentrer toute l’activité dans la capitale", "Équilibrer équipements et opportunités", "Supprimer les échanges entre régions", "Agrandir les plus grandes villes"], 'a' => 1, 'e' => "Aménager, c’est organiser l’espace pour que routes, écoles, hôpitaux et emplois ne soient pas réservés à quelques pôles."],
                    ['q' => "Pour évaluer une aide régionale, quel indicateur est le plus pertinent ?", 'c' => ["Le montant total dépensé chaque année", "Les emplois durables rapportés au coût", "Le nombre de dossiers déposés auprès de l’agence", "Le nombre d’entreprises contactées"], 'a' => 0, 'e' => "Une évaluation compare les résultats obtenus à l’argent public engagé ; les chiffres d’activité administrative ne prouvent rien."],
                ],
            ],
            [
                'title' => "Spécialisation, chocs et résilience régionale",
                'description' => "Exercices de synthèse sur les spécialisations territoriales, les chocs économiques et la capacité d’adaptation des régions.",
                'questions' => [
                    ['q' => "Qu’est-ce qu’un choc économique régional ?", 'c' => ["Une variation lente des habitudes de consommation", "Un déplacement de population annoncé à l’avance", "Un événement brutal qui perturbe la région", "Une hausse régulière des salaires"], 'a' => 2, 'e' => "Fermeture d’une usine, sécheresse, chute d’un prix : le choc est brutal et dégrade le fonctionnement habituel."],
                    ['q' => "Que désigne la résilience économique d’une région ?", 'c' => ["Sa taille géographique", "Le fait de ne subir aucun choc", "Son niveau d’endettement", "Sa capacité à absorber un choc et à rebondir"], 'a' => 3, 'e' => "Résilient vient d’un mot latin qui veut dire « rebondir » : la région encaisse puis retrouve son niveau d’activité."],
                    ['q' => "La seule grande usine d’une ville de 30 000 habitants ferme et supprime 4 000 emplois. Pourquoi l’impact dépasse-t-il ces 4 000 emplois ?", 'c' => ["Le PIB du pays entier recule aussitôt", "Les commerces locaux perdent des clients", "La monnaie nationale perd de la valeur", "Les routes et réseaux de la ville se dégradent"], 'a' => 1, 'e' => "Les salaires perdus réduisent les achats locaux, donc les emplois des commerces et sous-traitants : c’est un effet en cascade."],
                    ['q' => "Une chute du prix d’un minerai frappe fortement une région minière mais peu les autres. Comment qualifie-t-on ce choc ?", 'c' => ["Asymétrique", "Symétrique", "Monétaire", "Démographique"], 'a' => 0, 'e' => "Un choc qui n’affecte pas toutes les régions de la même manière est asymétrique."],
                    ['q' => "Une région vit à 70 % du tourisme ; une autre répartit son emploi entre cinq secteurs. Laquelle résistera sans doute mieux à une crise du tourisme ?", 'c' => ["La première, car elle maîtrise parfaitement ce secteur", "La première, car le tourisme est stable", "La seconde, car la crise n’en touche qu’une partie", "Les deux, à l’identique"], 'a' => 2, 'e' => "Plus l’économie est variée, plus la perte d’un secteur est compensée par les autres."],
                    ['q' => "Après une crise, une région a vu partir ses jeunes qualifiés. Que peut-on en attendre pour sa reprise ?", 'c' => ["Elle sera plus rapide", "Elle ne sera pas affectée", "Elle dépendra surtout du climat", "Elle sera freinée par le manque de compétences"], 'a' => 3, 'e' => "Sans main-d’œuvre qualifiée, les entreprises hésitent à investir, ce qui prolonge les effets de la crise."],
                    ['q' => "L’emploi régional passe de 200 000 à 170 000 après un choc. Quelle est la variation ?", 'c' => ["−30 %", "−15 %", "−17,6 %", "+15 %"], 'a' => 1, 'e' => "La baisse de 30 000 est rapportée à la valeur de départ : 30 000 ÷ 200 000 = 15 %. Les −17,6 % partent de la mauvaise base."],
                    ['q' => "Une province agricole dépend de la pluie. Après deux années de sécheresse, comment le choc se transmet-il à l’économie locale ?", 'c' => ["Les revenus agricoles reculent, la demande suit", "Les prix baissent, donc les revenus augmentent", "Les impôts agricoles disparaissent", "Les exportations industrielles s’effondrent aussitôt"], 'a' => 0, 'e' => "Des agriculteurs moins payés consomment moins chez les commerçants et artisans, qui à leur tour réduisent leur activité."],
                    ['q' => "Quelle stratégie aide une ancienne région minière à se relever ?", 'c' => ["Attendre que le prix du minerai remonte de lui-même", "Interdire aux jeunes de partir", "Se spécialiser encore davantage dans l’extraction", "Former les travailleurs, créer d’autres activités"], 'a' => 3, 'e' => "Reconversion = nouvelles compétences et nouveaux secteurs, pour ne plus dépendre d’une seule ressource."],
                    ['q' => "Quel élément ne contribue PAS à la résilience régionale ?", 'c' => ["Une main-d’œuvre bien formée et mobile", "Des activités variées", "Une dépendance à un client unique", "Des finances locales saines"], 'a' => 2, 'e' => "Dépendre d’un seul client expose la région : s’il part ou réduit ses commandes, rien ne compense."],
                    ['q' => "Deux régions perdent 10 % de leur emploi en crise. Dix-huit mois plus tard, A a retrouvé son niveau d’avant, B reste 6 % en dessous. Que conclure ?", 'c' => ["B est plus résiliente", "A a mieux rebondi", "Elles ont le même profil", "A a connu un choc plus fort"], 'a' => 1, 'e' => "La vitesse de retour au niveau initial mesure la capacité de rebond : A a récupéré plus complètement que B."],
                ],
            ],
            [
                'title' => "Cas pratiques d’économie régionale",
                'description' => "Mise en application des notions de localisation, mobilité, infrastructures, agglomération et politique régionale.",
                'questions' => [
                    ['q' => "Une conserverie de sardines hésite entre une ville portuaire et une ville de l’intérieur à 300 km du port. Quel site réduit le plus ses coûts d’approvisionnement ?", 'c' => ["La ville portuaire", "La ville intérieure, aux loyers plus bas", "L’intérieur, car l’air y est plus sec", "Aucune différence de coût"], 'a' => 0, 'e' => "Le poisson est frais, périssable et débarqué au port : transformer sur place évite 300 km de transport."],
                    ['q' => "Une ligne de tramway relie une banlieue aux zones d’emploi. Quel effet attend-on pour les salariés de la banlieue ?", 'c' => ["Une hausse de leurs trajets en voiture seuls", "Un accès élargi à des emplois éloignés", "Une baisse de leurs qualifications", "Une hausse du chômage des jeunes"], 'a' => 1, 'e' => "Un transport rapide et peu cher agrandit la zone d’emploi accessible, donc les chances de trouver un poste."],
                    ['q' => "Une ville gagne 3 000 habitants par an. Chaque nouveau ménage compte 4 personnes et a besoin d’un logement. Combien de logements faut-il construire par an ?", 'c' => ["300", "1 200", "750", "12 000"], 'a' => 2, 'e' => "3 000 personnes ÷ 4 par ménage = 750 logements ; 12 000 vient d’une multiplication."],
                    ['q' => "Une région littorale choisit entre un parc d’activités isolé et un parc relié au port et à l’autoroute. Pour attirer des exportateurs, que retenir ?", 'c' => ["Le parc isolé, car le foncier y est gratuit", "Le parc isolé, car il est plus calme", "Aucun des deux, les exportateurs ignorent les transports", "Le parc relié au port et à l’autoroute"], 'a' => 3, 'e' => "Pour un exportateur, chaque heure et chaque kilomètre gagnés se traduisent en compétitivité."],
                    ['q' => "Dans une ville, des dizaines d’ateliers de cuir partagent artisans, grossistes et écoles de formation. Qu’apporte cette organisation à un nouvel atelier ?", 'c' => ["Fournisseurs et compétences à portée de main", "Un monopole sur le marché du cuir", "Des clients assurés grâce à la réputation de la ville", "Des impôts réduits pour les ateliers"], 'a' => 0, 'e' => "C’est l’avantage d’un cluster : fournisseurs et compétences sont déjà sur place."],
                    ['q' => "Un village perd 20 % de ses habitants en dix ans ; l’école ferme, puis le médecin part. Quel mécanisme décrit cette suite ?", 'c' => ["Une économie d’échelle interne", "Un cercle vicieux de déclin", "Une hausse de la productivité locale", "Une convergence entre régions"], 'a' => 1, 'e' => "Moins d’habitants, moins de services, donc plus de départs : chaque étape aggrave la précédente."],
                    ['q' => "Une coopérative de femmes valorise l’huile d’argan grâce à un label d’origine. Quel levier de développement local utilise-t-elle ?", 'c' => ["Un transfert budgétaire", "Une dévaluation", "Un contrôle des loyers", "Un produit du terroir valorisé"], 'a' => 3, 'e' => "Le label protège un savoir-faire propre au territoire et permet de vendre plus cher."],
                    ['q' => "Un salarié met 90 minutes par jour en aller-retour. Une nouvelle route ramène son temps à 50 minutes. Sur 20 jours travaillés, combien de temps gagne-t-il par mois ?", 'c' => ["8 h", "20 h", "13 h 20", "40 h"], 'a' => 2, 'e' => "40 minutes gagnées × 20 jours = 800 minutes, soit 13 h 20."],
                    ['q' => "Un projet de zone d’activités coûte 40 millions de MAD pour 200 emplois ; un centre de formation, 8 millions pour 80 emplois. Quel est le coût le plus faible par emploi ?", 'c' => ["La zone d’activités, à 200 000 MAD par emploi", "Le centre, à 100 000 MAD par emploi", "Les deux, à 150 000 MAD par emploi", "Le centre, à 10 000 MAD par emploi"], 'a' => 1, 'e' => "40 000 000 ÷ 200 = 200 000 MAD ; 8 000 000 ÷ 80 = 100 000 MAD : le centre est deux fois moins coûteux par emploi."],
                    ['q' => "Une région affiche un PIB par habitant élevé mais un revenu médian bas. Que suggère cette différence ?", 'c' => ["Une richesse concentrée et inégale", "Une population trop jeune pour travailler", "Une absence de ressources naturelles locales", "Un taux de change défavorable aux exportateurs"], 'a' => 0, 'e' => "Une moyenne élevée avec une médiane faible indique que la richesse profite à une minorité."],
                    ['q' => "Pour relancer une ville moyenne enclavée en déclin, quelle combinaison est la plus cohérente ?", 'c' => ["Alourdir la fiscalité des entreprises locales", "Attendre l’arrivée spontanée d’entreprises", "Subventionner une grande usine sans lien avec le territoire", "Désenclavement, formation et appui aux activités locales"], 'a' => 3, 'e' => "On agit sur les trois freins ensemble : accès, compétences et activités déjà présentes."],
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
