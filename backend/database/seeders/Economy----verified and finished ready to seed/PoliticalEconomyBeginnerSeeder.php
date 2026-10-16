<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class PoliticalEconomyBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'political-economy')->firstOrFail();

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
                'title' => "Introduction à l’économie politique",
                'description' => "Découvrez les liens entre économie, institutions et décisions collectives.",
                'questions' => [
                    ['q' => "L’économie politique étudie surtout…", 'c' => ["la tenue des comptes d’une entreprise", "l’évolution des cours de la Bourse", "les liens entre pouvoir politique et économie", "les techniques de fabrication industrielle"], 'a' => 2, 'e' => "Son terrain, c’est la rencontre entre décisions politiques et activité économique : qui décide, au profit de qui, avec quels effets."],
                    ['q' => "Au Maroc, le Code de la route encadre le comportement des conducteurs. En économie politique, on le range parmi…", 'c' => ["les institutions", "les ressources rares", "les biens d’investissement", "les indicateurs de prix"], 'a' => 0, 'e' => "Une institution est une règle ou une organisation qui encadre les comportements ; le code de la route en est une, comme un tribunal ou une banque centrale."],
                    ['q' => "Laquelle de ces institutions est dite informelle ?", 'c' => ["Le Code de commerce voté par le Parlement", "La Constitution adoptée par référendum", "Les règlements d’un ministère", "L’habitude de négocier le prix au souk"], 'a' => 3, 'e' => "Formelle = écrite et sanctionnée par l’État ; informelle = coutume ou norme sociale non écrite, comme le marchandage au souk."],
                    ['q' => "Dans un douar, 200 familles doivent décider ensemble de financer ou non un puits commun. Cette décision est…", 'c' => ["un choix individuel de consommation", "un choix collectif", "un échange de marché", "une décision d’entreprise"], 'a' => 1, 'e' => "Quand un groupe doit trancher une question qui engage tous ses membres, c’est un choix collectif, et non une somme d’achats privés."],
                    ['q' => "Pourquoi une hausse de la taxe sur le tabac est-elle à la fois une décision politique et économique ?", 'c' => ["Elle pèse sur les fabricants mais laisse les ménages indifférents", "Elle fait baisser mécaniquement le prix payé en magasin", "Elle touche les recettes de l’État mais pas la demande", "Elle change le prix payé, la demande et les recettes publiques"], 'a' => 3, 'e' => "Une taxe modifie le prix, donc les quantités achetées, donc les rentrées de l’État : le politique fixe la règle, l’économie en subit et en transmet les effets."],
                    ['q' => "Qui vote la loi de finances au Maroc ?", 'c' => ["Le Parlement", "Bank Al-Maghrib", "Le Conseil de la concurrence", "Une association de consommateurs"], 'a' => 0, 'e' => "Le budget de l’État est adopté par les représentants élus ; la banque centrale gère la monnaie et les associations peuvent alerter, pas voter."],
                    ['q' => "Un entrepreneur perd des mois à recouvrer des factures impayées parce que les contrats ne sont pas respectés dans sa région. Quelle institution lui manque ?", 'c' => ["Une banque proposant des comptes d’épargne", "Un marché aux enchères pour les matières premières", "Une justice qui fait exécuter les contrats", "Une chambre de commerce qui organise des salons"], 'a' => 2, 'e' => "Sans tribunal crédible, un contrat n’engage personne : c’est l’institution judiciaire qui donne de la force aux règles."],
                    ['q' => "Laquelle de ces mesures relève de l’intérêt collectif plutôt que d’un intérêt privé ?", 'c' => ["Une subvention versée à une seule usine de la ville", "Un réseau d’égouts raccordant tous les quartiers", "Une exemption fiscale pour un grand propriétaire", "Un marché public attribué à un cousin du maire"], 'a' => 1, 'e' => "L’intérêt collectif concerne la communauté entière ; une usine, un propriétaire ou un proche du maire profitent seuls de l’avantage."],
                    ['q' => "Pourquoi un gouvernement doit-il arbitrer entre plusieurs usages de son budget ?", 'c' => ["Les ressources sont limitées, les besoins nombreux", "Les électeurs se désintéressent des dépenses publiques", "Les entreprises échappent presque toutes à l’impôt", "Les prix doivent rester fixes pendant l’année budgétaire"], 'a' => 0, 'e' => "Un dirham dépensé pour une route n’est plus disponible pour une école : la rareté oblige à choisir, et choisir est un acte politique."],
                    ['q' => "Une entreprise proche du pouvoir décroche un marché public sans appel d’offres. Ce que l’économie politique analyse ici, c’est…", 'c' => ["une innovation technique qui réduit les coûts de production", "une variation saisonnière de la demande des ménages", "un effet de la rareté des matières premières importées", "le pouvoir qui oriente l’attribution des fonds publics"], 'a' => 3, 'e' => "Qui décide, qui profite : la répartition des ressources publiques dépend du pouvoir, ce que le simple jeu de l’offre et de la demande n’explique pas."],
                ],
            ],
            [
                'title' => "État, marché et biens collectifs",
                'description' => "Comprenez les rôles possibles de l’État et les caractéristiques des biens collectifs.",
                'questions' => [
                    ['q' => "Parmi ces missions, laquelle l’État assume-t-il typiquement dans une économie de marché ?", 'c' => ["Fixer à l’avance le prix de chaque produit vendu", "Faire respecter la propriété et les contrats", "Choisir les achats de chaque ménage", "Garantir un bénéfice à chaque entreprise"], 'a' => 1, 'e' => "Un marché fonctionne si la propriété et les contrats sont protégés ; l’État joue l’arbitre sans pour autant tout produire ni tout décider."],
                    ['q' => "Un phare guide tous les bateaux d’un port : impossible d’en exclure un, et chaque navire de plus ne l’use pas. C’est…", 'c' => ["un bien privé, rival et excluable", "un bien de club, non rival et excluable", "une ressource commune, rivale mais non excluable", "un bien public, non rival et non excluable"], 'a' => 3, 'e' => "Non rival (un bateau de plus ne prive personne) et non excluable (on ne peut empêcher un navire de profiter du feu) : c’est la définition du bien public pur."],
                    ['q' => "Un pâturage communal est ouvert à tous les éleveurs d’un douar, mais chaque bête de plus réduit l’herbe des autres. Ce bien est…", 'c' => ["rival et non excluable : une ressource commune", "non rival et excluable : un bien de club", "non rival et non excluable : un bien public pur", "rival et excluable : un bien privé"], 'a' => 0, 'e' => "L’herbe broutée par l’un manque à l’autre (rivalité) mais l’accès est libre : d’où le risque de surexploitation, la fameuse « tragédie des communs »."],
                    ['q' => "Une cimenterie rejette des poussières qui encrassent les toits du quartier voisin, sans payer. Pour les habitants, ce coût est…", 'c' => ["une externalité positive", "une taxe locale", "une externalité négative", "un transfert social"], 'a' => 2, 'e' => "Les habitants subissent un coût qu’ils n’ont pas choisi et qui n’apparaît pas dans le prix du ciment : c’est le cas type d’une externalité négative."],
                    ['q' => "Chaque tonne produite cause 40 DH de dégâts à des tiers. Quelle taxe par tonne fait payer au producteur le coût réel pour la société ?", 'c' => ["20 DH, la moitié du dommage", "400 DH, dix fois le dommage", "40 DH, soit le dommage causé par tonne", "0 DH, le marché corrige seul"], 'a' => 2, 'e' => "On aligne le coût privé sur le coût social : taxe égale au dommage, ici 40 DH par tonne (idée de la taxe de Pigou)."],
                    ['q' => "Pourquoi l’État peut-il subventionner la vaccination des enfants ?", 'c' => ["Un vaccin coûte très peu à fabriquer, donc il doit être gratuit", "Elle protège aussi des tiers, ce qui profite à la collectivité", "Les laboratoires privés ne peuvent pas en vendre", "Les ménages sont incapables de comprendre le prix d’un vaccin"], 'a' => 1, 'e' => "En me vaccinant, je protège aussi les autres sans être payé pour cela : c’est une externalité positive, que le marché laisse sous-produite."],
                    ['q' => "Un impôt sur les hauts revenus finance des allocations versées aux familles modestes. Ce mécanisme s’appelle…", 'c' => ["une dévaluation monétaire", "une privatisation", "une subvention à l’exportation", "une redistribution des revenus"], 'a' => 3, 'e' => "Prélever d’un côté, verser de l’autre : impôts et transferts modifient la répartition des revenus, c’est la redistribution."],
                    ['q' => "Pourquoi le marché finance-t-il mal un bien public ?", 'c' => ["On ne peut pas faire payer ceux qui en profitent", "Les consommateurs refusent d’en consommer", "Son coût de production dépasse celui des biens privés", "Les prix y sont fixés par la loi et non par l’offre"], 'a' => 0, 'e' => "Si l’on ne peut pas exclure les non-payeurs, chacun préfère laisser les autres payer : le marché finance trop peu, d’où le recours à l’impôt."],
                    ['q' => "Le gouvernement plafonne le prix du pain sous son niveau d’équilibre. Quel risque apparaît ?", 'c' => ["Un excès d’offre de pain chez les boulangers", "Une hausse automatique des salaires", "Une pénurie : la demande dépasse l’offre", "Une disparition de la demande des ménages"], 'a' => 2, 'e' => "Un prix bloqué trop bas fait monter la demande et décourage l’offre : files d’attente ou marché noir. Tout objectif public a un coût ou un effet secondaire."],
                    ['q' => "L’État construit un hôpital financé par l’impôt. Qu’est-ce qui illustre le coût d’opportunité de cette décision ?", 'c' => ["Le salaire total versé au personnel soignant chaque mois", "L’école que la même somme aurait permis de bâtir", "Le prix du terrain acheté auprès des propriétaires", "Les frais d’inauguration et de communication officielle"], 'a' => 1, 'e' => "Le coût d’opportunité est la meilleure alternative abandonnée : chaque dirham public dépensé ici ne l’est pas ailleurs."],
                ],
            ],
            [
                'title' => "Vote et décisions collectives",
                'description' => "Explorez les mécanismes de vote et les difficultés du choix collectif.",
                'questions' => [
                    ['q' => "Trois candidats obtiennent 40, 35 et 25 voix sur 100. Qui l’emporte à la majorité simple (relative) ?", 'c' => ["Le premier, avec 40 voix", "Personne : il faut obtenir 51 voix", "Le deuxième, car 35 + 25 dépasse 40", "Le troisième, au bénéfice de l’âge"], 'a' => 0, 'e' => "À la majorité relative, il suffit d’arriver en tête : 40 voix devancent 35 et 25. Il en faudrait 51 pour la majorité absolue."],
                    ['q' => "Pourquoi un électeur peut-il renoncer à s’informer en détail avant un scrutin local ?", 'c' => ["Son vote compte autant que celui de dix électeurs", "L’information sur les candidats est réservée aux élus et aux partis", "Son vote pèse peu, alors que s’informer coûte du temps", "Les programmes se ressemblent trop pour être comparés"], 'a' => 2, 'e' => "C’est l’ignorance rationnelle : le bénéfice attendu d’un vote isolé est minuscule, donc l’effort pour s’informer ne paie pas."],
                    ['q' => "Dans un immeuble, tous profitent de l’ascenseur réparé, mais un copropriétaire refuse de payer sa quote-part. Il se comporte en…", 'c' => ["spéculateur immobilier", "passager clandestin", "monopoleur de l’énergie", "lobbyiste mandaté"], 'a' => 1, 'e' => "Il profite d’un avantage collectif sans en supporter le coût ; si tous l’imitent, l’ascenseur ne sera jamais réparé."],
                    ['q' => "Cent habitants gagneraient chacun 10 DH si un trottoir était refait, pour un coût de 600 DH. Si personne n’est obligé de payer, que se passe-t-il probablement ?", 'c' => ["Il est refait, puisque le gain total de 1000 DH dépasse le coût de 600 DH", "Il est refait, car quelqu’un acceptera sûrement de tout financer", "Une entreprise le refait gratuitement pour sa publicité", "Il reste en l’état malgré un gain total de 1000 DH"], 'a' => 3, 'e' => "Chacun gagne 10 DH mais devrait avancer bien plus : l’action isolée est irrationnelle alors que 6 DH chacun serait rentable. C’est le problème de l’action collective."],
                    ['q' => "Karim classe A>B>C, Salma B>C>A, Omar C>A>B. À la majorité, A bat B, B bat C et C bat A, chaque fois par 2 voix contre 1. Que montre ce cas ?", 'c' => ["Que la majorité dégage toujours un gagnant net", "Qu’une majorité peut tourner en rond, sans gagnant", "Qu’un des trois votants a menti sur ses préférences", "Que le vote à la majorité exige l’unanimité"], 'a' => 1, 'e' => "C’est le paradoxe de Condorcet : des préférences individuelles cohérentes peuvent donner une préférence collective cyclique, donc pas de gagnant stable."],
                    ['q' => "Un parti cherche à séduire l’électeur médian. De qui s’agit-il ?", 'c' => ["L’électeur dont le revenu est le plus élevé", "L’électeur qui s’abstient le plus souvent", "L’électeur dont l’âge est la moyenne du pays", "L’électeur au centre de l’échelle des opinions"], 'a' => 3, 'e' => "Sur un axe gauche-droite, l’électeur médian a autant d’avis de chaque côté : c’est lui qui fait basculer une majorité, d’où l’intérêt des partis à viser son opinion."],
                    ['q' => "Un électeur préfère le candidat X mais le croit sans chance ; il vote pour Y, son second choix, qui peut gagner. Ce comportement s’appelle…", 'c' => ["le vote stratégique, dit aussi vote utile", "le vote par clientélisme local", "le vote blanc de protestation", "le vote censitaire"], 'a' => 0, 'e' => "Il ne vote pas pour son premier choix mais pour le meilleur résultat réalisable, en anticipant le vote des autres."],
                    ['q' => "Un parti obtient 30 % des voix dans une élection de 100 sièges à la proportionnelle pure. Combien de sièges obtient-il à peu près ?", 'c' => ["Environ 10 sièges, un tiers de ses voix", "Au moins 51 sièges, car il arrive en tête", "Environ 30 sièges, à parts proportionnelles", "Environ 70 sièges, le complément de ses voix"], 'a' => 2, 'e' => "À la proportionnelle, la part des sièges suit la part des voix : 30 % des suffrages valent environ 30 sièges sur 100, à l’inverse d’un scrutin où le gagnant ramasse tout."],
                    ['q' => "Deux députés échangent leurs voix : l’un soutient un projet agricole, l’autre un projet routier. Cette pratique s’appelle…", 'c' => ["le vote à la majorité qualifiée", "le vote par procuration", "l’abstention concertée", "l’échange de voix (logrolling)"], 'a' => 3, 'e' => "Chacun soutient le projet de l’autre en retour du sien : c’est le logrolling, un « renvoi d’ascenseur » qui crée des majorités mais peut gonfler la dépense publique."],
                    ['q' => "Pourquoi organiser une consultation publique avant un grand projet (barrage, autoroute) ?", 'c' => ["Elle fait connaître l’avis et les réserves des riverains", "Elle dispense le Parlement de voter le projet", "Elle assure que le projet plaira à l’ensemble des habitants", "Elle réduit le coût du projet en supprimant les études"], 'a' => 0, 'e' => "Les décideurs ne savent pas tout : écouter les riverains révèle des coûts ou des usages invisibles depuis un bureau, sans remplacer le vote ni garantir l’unanimité."],
                ],
            ],
            [
                'title' => "Intérêts, groupes de pression et incitations",
                'description' => "Identifiez les intérêts organisés, les incitations et les risques de recherche de rente.",
                'questions' => [
                    ['q' => "Un syndicat de transporteurs rencontre le ministre pour exposer l’effet d’une taxe sur le gasoil. Il agit comme…", 'c' => ["un organe de régulation indépendant", "un tribunal administratif", "un parti présentant des candidats", "un groupe de pression sectoriel"], 'a' => 3, 'e' => "Il cherche à influencer une décision publique en apportant ses arguments : c’est le rôle d’un groupe de pression, légitime tant qu’il agit au grand jour."],
                    ['q' => "Une protection douanière rapporte 5 millions de DH à 10 producteurs et coûte 5 DH à chacun de 1 million de consommateurs. Qui se mobilisera le plus, probablement ?", 'c' => ["Les consommateurs, car ils sont plus nombreux", "Les producteurs, qui gagnent beaucoup chacun", "Les deux autant, puisque le total est égal", "Personne : le gain est trop faible"], 'a' => 1, 'e' => "Gain concentré (500 000 DH par producteur) contre perte diluée (5 DH par consommateur) : les producteurs ont tout intérêt à s’organiser, pas les consommateurs. C’est la logique d’Olson."],
                    ['q' => "Un exploitant de carrière obtient par ses relations un permis exclusif, sans gagner en productivité, et ses revenus augmentent. Ce gain est…", 'c' => ["un profit d’innovation technique", "un gain de productivité du travail", "une rente de situation", "un intérêt sur un capital prêté"], 'a' => 2, 'e' => "Il s’enrichit grâce au jeu des règles, pas en créant plus de richesse : c’est de la recherche de rente. Mnémo : on se dispute le gâteau au lieu de l’agrandir."],
                    ['q' => "Un hôpital rémunère ses médecins selon le nombre d’actes réalisés. Quelle incitation en découle ?", 'c' => ["Multiplier les actes, même peu utiles", "Réduire le nombre de consultations", "Améliorer la qualité sans changer le volume", "Limiter les dépenses de l’hôpital"], 'a' => 0, 'e' => "On produit ce qui est payé : une rémunération à l’acte pousse à augmenter le nombre d’actes. Changer la règle de paiement change les comportements."],
                    ['q' => "Un ministre attribue un marché public à une société dont il est actionnaire. De quel problème s’agit-il ?", 'c' => ["d’une externalité positive", "d’un conflit d’intérêts public-privé", "d’un partage de coûts", "d’une aide sociale"], 'a' => 1, 'e' => "Son intérêt privé, les dividendes, peut dicter sa décision au détriment de sa mission publique ; d’où les obligations de déclaration et de retrait."],
                    ['q' => "Pourquoi publier les marchés publics et leurs résultats limite-t-il les abus ?", 'c' => ["Les prix baissent de moitié dès la publication", "Les entreprises renoncent à candidater", "Les citoyens et la presse peuvent contrôler les choix", "L’État n’a plus besoin d’audits"], 'a' => 2, 'e' => "Ce qui est public peut être vérifié : journalistes, concurrents et citoyens repèrent les écarts. La transparence complète les audits, elle ne les remplace pas."],
                    ['q' => "Un régulateur des télécoms recrute ses cadres chez les opérateurs qu’il surveille et adopte des règles qui les arrangent. Quel phénomène suspecte-t-on ?", 'c' => ["Une capture du régulateur", "Une hausse de l’offre", "Un effet d’échelle", "Une baisse du taux directeur"], 'a' => 0, 'e' => "Quand le contrôleur finit par servir le contrôlé, on parle de capture réglementaire : carrières croisées et information détenue par les opérateurs en sont les ressorts."],
                    ['q' => "Quel dispositif limite le mieux la corruption lors de l’attribution d’un permis de construire ?", 'c' => ["Un guichet unique sans trace écrite", "Un pouvoir de décision confié à un seul agent", "Des délais flous pour décourager les demandes", "Des critères publics et un dossier traçable"], 'a' => 3, 'e' => "La corruption prospère là où le pouvoir est discrétionnaire et opaque ; des critères connus et une trace écrite réduisent la marge de manœuvre de l’agent."],
                    ['q' => "Parmi ces pratiques, laquelle sort du cadre légal du lobbying ?", 'c' => ["Rencontrer un ministre pour exposer ses arguments", "Publier une étude chiffrée sur un projet de loi", "Verser un pot-de-vin pour obtenir un marché", "Être auditionné par une commission parlementaire"], 'a' => 2, 'e' => "Argumenter, publier, être entendu sont des moyens d’influence ouverts ; un pot-de-vin relève de la corruption, un délit."],
                    ['q' => "Une maire donne des emplois municipaux à ceux qui votent pour elle. Ce système d’échange de faveurs contre des voix s’appelle…", 'c' => ["la démocratie directe", "le clientélisme", "la décentralisation", "la planification"], 'a' => 1, 'e' => "Faveurs individuelles contre soutien électoral : le clientélisme détourne des ressources publiques d’un usage collectif vers des fidèles."],
                ],
            ],
            [
                'title' => "Institutions, inégalités et politiques publiques",
                'description' => "Révisez les liens entre institutions, répartition des ressources et choix publics.",
                'questions' => [
                    ['q' => "Un indice de Gini égal à 0 décrit un pays où…", 'c' => ["tout le revenu est capté par une seule personne", "tous les habitants ont le même revenu", "plus personne n’est sous le seuil de pauvreté", "le revenu moyen du pays est nul"], 'a' => 1, 'e' => "Le Gini va de 0 (égalité parfaite) à 1 (une personne détient tout). Mnémo : plus on se rapproche de 1, plus c’est inégal."],
                    ['q' => "Barème fictif : 0 % jusqu’à 30 000 DH, puis 20 % sur la part au-delà. Combien paie un contribuable de 50 000 DH ?", 'c' => ["10 000 DH, soit 20 % de 50 000", "6 000 DH, soit 20 % de 30 000", "0 DH, tout le revenu est exonéré", "4 000 DH, soit 20 % de 20 000"], 'a' => 3, 'e' => "Seule la tranche au-delà de 30 000 DH est taxée : 20 000 × 20 % = 4 000 DH, soit un taux moyen de 8 %. Ce taux moyen croît avec le revenu : c’est la progressivité."],
                    ['q' => "Un agriculteur n’investit pas dans son terrain car il craint de le perdre faute de titre sûr. Quel lien avec la croissance ?", 'c' => ["Des droits de propriété peu sûrs découragent l’investissement", "Le titre foncier n’a pas d’effet sur le crédit bancaire", "Le prix des engrais décide à lui seul de l’investissement", "L’investissement ne dépend pas des règles juridiques"], 'a' => 0, 'e' => "Sans garantie de conserver ce qu’on a planté, investir est risqué ; un titre sûr rassure, facilite le crédit et stimule la croissance."],
                    ['q' => "Dans un pays A, les dirigeants saisissent des biens sans contrôle d’un juge ; dans un pays B, un tribunal indépendant protège les propriétés. Sur le long terme, que peut-on attendre ?", 'c' => ["A attire plus d’investissement, car il décide plus vite", "Les deux pays investissent pareil, les règles n’influençant rien", "B attire plus d’investissement, grâce à la prévisibilité", "B investit moins, car la justice ralentit les affaires"], 'a' => 2, 'e' => "Des institutions qui limitent l’arbitraire rendent les gains futurs prévisibles, donc encouragent l’investissement : c’est un résultat central des travaux sur institutions et croissance."],
                    ['q' => "Trois ans après le lancement d’une aide aux familles pauvres, comment mesurer sérieusement son effet ?", 'c' => ["Constater que le budget prévu a été entièrement dépensé dans les délais", "Mesurer la satisfaction des concepteurs du programme", "Compter les articles de presse favorables à l’aide", "Comparer les bénéficiaires à des ménages semblables sans aide"], 'a' => 3, 'e' => "Dépenser le budget ne prouve pas l’efficacité : il faut une situation de comparaison (groupe témoin) pour isoler l’effet réel de la mesure."],
                    ['q' => "Le seuil de pauvreté relative est fixé à 50 % du revenu médian, qui vaut 4 000 DH par mois. Quel ménage est sous le seuil ?", 'c' => ["Un ménage vivant avec 2 500 DH par mois", "Un ménage qui perçoit 1 800 DH", "Un ménage à 3 000 DH", "Un ménage dont le revenu est de 4 200 DH"], 'a' => 1, 'e' => "50 % de 4 000 = 2 000 DH : seul le ménage à 1 800 DH est en dessous. Un seuil relatif dépend de la médiane du pays."],
                    ['q' => "Relever fortement l’impôt sur les hauts revenus réduit les écarts mais peut décourager le travail déclaré. Comment nomme-t-on ce dilemme ?", 'c' => ["L’arbitrage entre équité et efficacité", "Le paradoxe de l’eau et du diamant", "La loi des rendements décroissants", "La règle de l’offre et de la demande"], 'a' => 0, 'e' => "Redistribuer davantage réduit les inégalités (équité) mais peut affaiblir les incitations (efficacité) : c’est un arbitrage, pas une solution gratuite."],
                    ['q' => "Une subvention du pain destinée à tous profite aussi aux ménages aisés. Quelle alternative corrigerait ce défaut ?", 'c' => ["Doubler le montant de la subvention pour l’ensemble des foyers", "Retirer la subvention sans compensation pour les foyers modestes", "Cibler une aide en espèces sur les ménages modestes", "Imposer un prix unique pour toutes les denrées de base"], 'a' => 2, 'e' => "Le ciblage concentre l’argent public sur ceux qui en ont besoin ; une subvention universelle est simple mais une part de la dépense profite aux ménages aisés."],
                    ['q' => "Parmi ces dispositifs, lequel contribue au contrôle des gouvernants ?", 'c' => ["Un monopole public de l’information", "Un budget préparé et voté sans débat", "La nomination des juges par le ministre", "Une cour des comptes qui audite l’État"], 'a' => 3, 'e' => "Auditer les comptes publics permet au Parlement et aux citoyens de vérifier l’usage de l’argent ; les autres dispositifs affaiblissent le contrôle."],
                    ['q' => "Un pays connaît une croissance rapide, mais son Gini passe de 0,35 à 0,45 en dix ans. Que peut-on en conclure ?", 'c' => ["Que la pauvreté a nettement reculé dans tout le pays", "Que les revenus se répartissent moins également", "Que le revenu moyen par habitant a diminué", "Que les prix ont augmenté de dix points"], 'a' => 1, 'e' => "Un Gini en hausse signale une répartition plus inégale ; il ne dit rien du revenu moyen ni des prix, et la croissance peut coexister avec davantage d’inégalités."],
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
