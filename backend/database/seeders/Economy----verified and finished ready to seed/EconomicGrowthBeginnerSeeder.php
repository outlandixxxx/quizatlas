<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class EconomicGrowthBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'economic-growth')->firstOrFail();

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
                'title' => "Les notions fondamentales de la croissance économique",
                'description' => "Découvrez les définitions et les indicateurs de base de la croissance économique.",
                'questions' => [
                    ['q' => "Un pays produit 200 milliards de MAD de biens et services une année, puis 206 milliards l’année suivante, à prix constants. Quel est son taux de croissance ?", 'c' => ["2 %", "3 %", "6 %", "206 %"], 'a' => 1, 'e' => "Le taux se calcule ainsi : (206 − 200) ÷ 200 = 0,03, soit 3 %. Les 6 milliards ne sont que la variation en valeur, pas le taux."],
                    ['q' => "Pourquoi compare-t-on des PIB en volume (réels) d’une année à l’autre ?", 'c' => ["Pour ajouter au calcul les activités non déclarées des ménages", "Pour isoler la production des seuls services marchands", "Pour intégrer les revenus du patrimoine accumulé par le passé", "Pour neutraliser l’effet de la hausse des prix"], 'a' => 3, 'e' => "Un PIB en valeur peut gonfler simplement parce que les prix montent. En volume, on mesure ce qui est réellement produit."],
                    ['q' => "Le PIB d’un pays est de 300 milliards de MAD pour 30 millions d’habitants. Que vaut le PIB par habitant ?", 'c' => ["10 000 MAD", "100 000 MAD", "1 000 MAD", "9 000 000 MAD"], 'a' => 0, 'e' => "On divise : 300 000 millions ÷ 30 millions = 10 000. Attention aux zéros, c’est là que l’on se trompe le plus."],
                    ['q' => "Un meunier vend de la farine à 40 MAD à un boulanger, qui vend ensuite son pain 100 MAD aux clients. Quelle est la contribution de cette filière au PIB ?", 'c' => ["40 MAD de farine", "60 MAD de pain", "100 MAD", "140 MAD au total"], 'a' => 2, 'e' => "La farine est déjà comprise dans le prix du pain : additionner 40 et 100 la compterait deux fois. Les valeurs ajoutées (40 + 60) donnent bien 100."],
                    ['q' => "Une économie croît de 4 % en volume pendant que sa population augmente de 4 %. Que devient le PIB par habitant ?", 'c' => ["Il augmente d’environ 4 %", "Il augmente d’environ 8 %", "Il baisse d’environ 4 %", "Il reste stable"], 'a' => 3, 'e' => "Le gâteau grossit de 4 % mais il y a 4 % de convives en plus : la part moyenne ne change guère."],
                    ['q' => "Au sens usuel et simplifié, qu’appelle-t-on une récession ?", 'c' => ["Un ralentissement de la croissance de 5 % à 3 % sur l’année", "Un recul du PIB réel sur deux trimestres consécutifs", "Une hausse des prix de 3 % sur douze mois consécutifs", "Un déficit de la balance commerciale durant toute une année"], 'a' => 1, 'e' => "Récession = la production recule, pas seulement elle ralentit. Un ralentissement de 5 % à 3 % reste une croissance positive."],
                    ['q' => "Laquelle de ces opérations n’est PAS comptée dans le PIB de l’année ?", 'c' => ["Un ménage revend sa voiture à un voisin", "Le salaire versé à une infirmière d’un hôpital", "La construction d’une école publique", "La vente d’un téléphone assemblé dans le pays"], 'a' => 0, 'e' => "Le PIB ne retient que la production nouvelle de l’année. Un bien d’occasion échangé entre particuliers a déjà été compté lors de sa fabrication."],
                    ['q' => "Une usine embauche 100 ouvriers de plus et achète des machines identiques aux anciennes. De quel type de croissance s’agit-il surtout ?", 'c' => ["Intensive, grâce à l’innovation", "Inclusive, car elle crée des emplois", "Extensive, par ajout de facteurs", "Verte, au sens écologique du terme"], 'a' => 2, 'e' => "Plus de travail et plus de capital, mais pas de méthode meilleure : c’est de la croissance extensive. L’intensive viendrait d’une productivité accrue."],
                    ['q' => "Le PIB nominal passe de 100 à 110 pendant que les prix montent de 10 %. Que vaut à peu près la croissance réelle ?", 'c' => ["10 %", "0 %", "20 %", "−10 %"], 'a' => 1, 'e' => "Toute la hausse s’explique par les prix : en volume, la production n’a pas bougé. C’est l’illusion monétaire que le PIB réel dissipe."],
                    ['q' => "Quel indicateur convient le mieux pour suivre l’évolution du niveau de vie moyen d’un pays dans le temps ?", 'c' => ["Le PIB nominal total", "Le nombre d’entreprises créées", "Les exportations totales", "Le PIB réel par habitant"], 'a' => 3, 'e' => "Le « réel » écarte l’effet des prix et le « par habitant » tient compte de la population. Il reste imparfait, mais c’est le repère de base."],
                ],
            ],
            [
                'title' => "Les facteurs de la croissance économique",
                'description' => "Identifiez le rôle du travail, du capital, des compétences et de la technologie.",
                'questions' => [
                    ['q' => "Parmi ces éléments, lequel relève du capital physique d’une entreprise de transport ?", 'c' => ["Le diplôme de son chauffeur principal", "Le salaire versé à la fin du mois", "Les camions de sa flotte", "Sa bonne réputation auprès des clients"], 'a' => 2, 'e' => "Le capital physique regroupe les équipements durables qui servent à produire : machines, véhicules, bâtiments. Le diplôme relève du capital humain."],
                    ['q' => "Quel exemple correspond à un investissement en capital humain ?", 'c' => ["Un ouvrier suit une formation de soudure", "Une entreprise achète un terrain voisin", "L’État emprunte auprès d’une banque étrangère", "Un ménage place son épargne en actions"], 'a' => 0, 'e' => "Le capital humain, ce sont les savoirs et savoir-faire incorporés aux personnes. Se former les accroît, comme une machine neuve accroît le capital physique."],
                    ['q' => "Un pays possède d’abondants gisements mais peu d’écoles et d’infrastructures. Pourquoi sa croissance peut-elle rester faible ?", 'c' => ["Parce que les ressources naturelles ne comptent pas parmi les facteurs de production", "Parce qu’exploiter un gisement diminue mécaniquement le PIB", "Parce que les travailleurs refusent de s’employer dans ces secteurs", "Parce que sans capital ni compétences, les ressources sont mal valorisées"], 'a' => 3, 'e' => "Les ressources sont un atout, pas une garantie : il faut des routes, des machines et des gens formés pour en tirer de la valeur."],
                    ['q' => "Une entreprise passe de 8 à 10 machines identiques, avec le même personnel, et sa production monte de 400 à 500 unités. Que vaut la production par machine après l’achat ?", 'c' => ["40 unités", "50 unités", "100 unités", "500 unités"], 'a' => 1, 'e' => "500 ÷ 10 = 50, exactement comme avant (400 ÷ 8). Ajouter du capital identique augmente la production totale, sans gain de productivité en soi."],
                    ['q' => "Quel changement accroît directement le facteur travail d’une économie ?", 'c' => ["Une hausse du nombre de personnes en emploi", "L’achat de robots destinés aux chaînes de montage", "La baisse du prix du carburant sur le marché", "L’ouverture d’un laboratoire de recherche public"], 'a' => 0, 'e' => "Le facteur travail se mesure en personnes employées ou en heures travaillées. Les robots relèvent du capital, la recherche du progrès technique."],
                    ['q' => "Un port moderne réduit les délais et les coûts d’expédition des entreprises exportatrices. Quel effet peut-on en attendre ?", 'c' => ["Une baisse du capital humain disponible", "Une hausse mécanique du prix des biens importés", "Des coûts réduits et plus de compétitivité", "Une baisse de l’épargne nationale"], 'a' => 2, 'e' => "Une infrastructure efficace abaisse les coûts de production et d’échange. Les entreprises vendent plus facilement, ce qui nourrit la croissance."],
                    ['q' => "Deux pays ont le même capital et le même nombre de travailleurs, mais l’un produit nettement plus. Quelle explication relève de la productivité globale des facteurs ?", 'c' => ["Une population plus nombreuse", "Des machines plus nombreuses", "Un taux d’épargne plus élevé", "Une meilleure technologie"], 'a' => 3, 'e' => "Quand les quantités de facteurs sont égales, l’écart vient de la façon de les combiner : technologie, méthodes, organisation."],
                    ['q' => "Pourquoi une population en meilleure santé peut-elle soutenir la croissance ?", 'c' => ["Elle fait baisser le prix des machines importées", "Elle travaille davantage, avec moins d’absences", "Elle diminue le nombre de naissances dans le pays", "Elle supprime le besoin d’investir dans l’éducation"], 'a' => 1, 'e' => "La santé est une composante du capital humain : des travailleurs en forme sont plus présents et plus productifs."],
                    ['q' => "Quel exemple illustre une meilleure organisation de la production, sans nouvelle machine ni embauche ?", 'c' => ["Une usine ajoute une seconde chaîne de montage", "Un atelier recrute dix couturières supplémentaires", "Une boulangerie réaménage ses postes de travail", "Un commerçant ouvre une succursale dans un autre quartier"], 'a' => 2, 'e' => "Réorganiser les tâches fait gagner du temps avec les mêmes moyens. Les autres cas ajoutent du capital ou du travail."],
                    ['q' => "Un élève affirme : « Plus on accumule de machines, plus la production augmente au même rythme. » Quelle notion corrige cette idée ?", 'c' => ["Les rendements décroissants du capital", "L’inflation importée", "Le multiplicateur budgétaire", "La balance des paiements"], 'a' => 0, 'e' => "À technologie et main-d’œuvre données, chaque machine supplémentaire apporte un peu moins que la précédente : dix machines pour un seul ouvrier ne servent plus à rien."],
                ],
            ],
            [
                'title' => "Productivité et progrès technique",
                'description' => "Comprenez les gains de productivité, l’innovation et leurs effets économiques.",
                'questions' => [
                    ['q' => "Un atelier fabrique 120 pièces avec 10 salariés. Avec les mêmes 10 salariés, il en fabrique ensuite 150. Comment évolue la production par salarié ?", 'c' => ["De 10 à 12 pièces", "De 12 à 14 pièces", "De 12 à 16 pièces", "De 12 à 15"], 'a' => 3, 'e' => "120 ÷ 10 = 12, puis 150 ÷ 10 = 15 : le gain est de 3 pièces par salarié, soit 25 %."],
                    ['q' => "Une boulangerie produit 600 baguettes en 40 heures de travail cumulées. Quelle est sa productivité horaire ?", 'c' => ["12 baguettes par heure", "15 baguettes par heure", "16 baguettes par heure", "24 000 baguettes par heure"], 'a' => 1, 'e' => "On divise la production par le temps de travail : 600 ÷ 40 = 15. Multiplier au lieu de diviser donne le 24 000 absurde."],
                    ['q' => "La production d’une usine augmente de 10 % alors que les heures travaillées augmentent aussi de 10 %. Que fait la productivité horaire ?", 'c' => ["Elle augmente de 10 %", "Elle augmente de 20 %", "Elle reste stable", "Elle baisse de 10 %"], 'a' => 2, 'e' => "Production et heures progressent au même rythme : le rapport entre les deux ne change pas. Produire plus parce qu’on travaille plus n’est pas un gain de productivité."],
                    ['q' => "Une conserverie installe un robot qui emballe deux fois plus vite. De quel type d’innovation s’agit-il ?", 'c' => ["De procédé : la méthode de fabrication change", "De produit : un nouveau bien est proposé aux clients", "De marketing : l’image de la marque est modifiée", "De marché : une nouvelle clientèle est visée"], 'a' => 0, 'e' => "Le produit reste le même, c’est la manière de le fabriquer qui change : innovation de procédé."],
                    ['q' => "Laquelle de ces situations illustre une innovation de produit ?", 'c' => ["Une usine passe en trois équipes successives", "Un fabricant lance un téléphone à fonction inédite", "Un transporteur optimise ses tournées de livraison", "Une ferme installe un système d’irrigation plus économe"], 'a' => 1, 'e' => "L’innovation de produit met sur le marché un bien nouveau ou nettement amélioré. Les trois autres cas modifient la façon de produire."],
                    ['q' => "Un chercheur met au point le prototype d’une batterie, jamais fabriquée en série ni vendue. Comment qualifier cette réalisation ?", 'c' => ["Une innovation, puisqu’elle est nouvelle", "Un investissement, puisqu’il a coûté de l’argent", "Un gain de productivité, puisqu’il économise du travail", "Une invention, pas encore une innovation"], 'a' => 3, 'e' => "L’invention est la découverte ; l’innovation commence quand elle est diffusée et utilisée sur un marché. Sans production ni vente, il n’y a pas encore d’effet économique."],
                    ['q' => "Pourquoi l’automatisation d’une chaîne peut-elle réduire l’emploi dans un atelier tout en créant des emplois ailleurs ?", 'c' => ["Elle supprime des tâches répétitives mais demande des postes de maintenance", "Elle réduit le capital disponible et donc le besoin de techniciens", "Elle renchérit les machines, ce qui détruit les emplois partout", "Elle abaisse la productivité, ce qui oblige à réduire l’effectif"], 'a' => 0, 'e' => "Les robots remplacent certaines tâches mais exigent conception, installation, réglage et entretien. L’effet net dépend de la formation des travailleurs."],
                    ['q' => "Pourquoi une entreprise dépense-t-elle en recherche et développement alors que le résultat est incertain ?", 'c' => ["Pour payer moins d’impôts, sans autre objectif", "Pour se passer de recruter à l’avenir", "Pour prendre l’avantage sur ses concurrents si l’innovation aboutit", "Pour réduire volontairement ses ventes actuelles"], 'a' => 2, 'e' => "La R&D est un pari : en cas de succès, un produit meilleur ou un coût plus bas procure un avantage durable face à la concurrence."],
                    ['q' => "Une entreprise publie les résultats d’une découverte et d’autres firmes s’en inspirent sans payer. Quel phénomène décrit-on ?", 'c' => ["Un monopole naturel", "Une externalité négative", "Un dumping sur les prix prolongé", "Une externalité positive"], 'a' => 3, 'e' => "Un bénéfice qui déborde sur des tiers sans compensation est une externalité positive. C’est une raison classique de soutenir publiquement la recherche."],
                    ['q' => "Un secteur double sa productivité. Qui peut profiter de ce gain ?", 'c' => ["Les propriétaires des machines, par définition", "Salariés, consommateurs ou profits, selon le partage", "L’État, par la hausse des taxes prévue", "Personne, la productivité n’influe pas sur les revenus"], 'a' => 1, 'e' => "Le gain peut aller aux salaires, aux prix plus bas ou aux profits : tout dépend de la négociation et de la concurrence. Il n’est pas automatiquement redistribué."],
                ],
            ],
            [
                'title' => "Croissance, développement et limites",
                'description' => "Distinguez croissance et développement et étudiez leurs limites sociales et environnementales.",
                'questions' => [
                    ['q' => "Le PIB par habitant d’un pays double, mais la scolarisation et l’espérance de vie stagnent. Que peut-on en dire ?", 'c' => ["Croissance sans progrès net de développement", "Développement accompli, mais sans croissance", "Décroissance accompagnée d’un recul du bien-être", "Récession suivie d’un rattrapage rapide"], 'a' => 0, 'e' => "La croissance désigne l’augmentation de la production ; le développement touche aux conditions de vie. L’un ne suit pas forcément l’autre."],
                    ['q' => "Quelles dimensions l’indice de développement humain (IDH) combine-t-il ?", 'c' => ["PIB, inflation et chômage", "Exportations, importations et taux de change", "Santé, éducation et niveau de vie", "Épargne, investissement et dette publique"], 'a' => 2, 'e' => "L’IDH associe espérance de vie, durée de scolarisation et revenu par habitant. Il élargit la mesure au-delà du seul PIB."],
                    ['q' => "Pourquoi le PIB par habitant ne dit-il pas tout du bien-être ?", 'c' => ["Il ne tient pas compte de la taille de la population", "Il ne reflète ni les inégalités ni le travail non marchand", "Il mesure plutôt la dette des ménages", "Il exclut les biens produits dans les grandes villes"], 'a' => 1, 'e' => "Une moyenne cache la répartition, et le travail domestique ou bénévole n’est pas compté. Deux pays au même PIB par habitant peuvent vivre très différemment."],
                    ['q' => "Le revenu total d’un pays augmente de 5 %, mais ce gain va presque entièrement aux 1 % les plus riches. Quel qualificatif convient le moins à cette croissance ?", 'c' => ["Positive", "Mesurée par le PIB", "Peu redistributive", "Inclusive"], 'a' => 3, 'e' => "Une croissance inclusive profite largement à toutes les catégories de la population. Ici le gain est très concentré."],
                    ['q' => "Qu’appelle-t-on croissance verte ?", 'c' => ["Une croissance obtenue en étendant les surfaces agricoles", "Une croissance fondée sur l’usage accru des énergies fossiles", "Une croissance qui limite les pressions sur l’environnement", "Une croissance réservée aux métiers du jardinage"], 'a' => 2, 'e' => "L’idée est de produire davantage tout en consommant moins de ressources et en polluant moins par unité produite."],
                    ['q' => "Une usine rejette des fumées qui gênent les riverains, sans payer pour ce dommage. Comment appelle-t-on ce coût supporté par des tiers ?", 'c' => ["Une externalité négative", "Une rente de situation", "Un coût d’opportunité", "Un investissement productif"], 'a' => 0, 'e' => "Quand une activité impose un coût à d’autres sans compensation, c’est une externalité négative : le prix de marché ne reflète pas le dommage."],
                    ['q' => "Que vise le développement durable ?", 'c' => ["Maximiser le PIB à court terme", "Réduire la population pour limiter la production", "Arrêter les activités industrielles polluantes", "Satisfaire les besoins présents sans hypothéquer ceux de demain"], 'a' => 3, 'e' => "Telle est la définition classique du rapport Brundtland. Elle relie l’économie, le social et l’environnement dans la durée."],
                    ['q' => "Un pays tire l’essentiel de sa croissance de l’extraction d’une ressource non renouvelable. Quel risque court-il ?", 'c' => ["Une hausse rapide du capital humain", "Un épuisement progressif et une dépendance aux prix", "Une baisse des importations de biens de consommation", "Une disparition des inégalités de revenus"], 'a' => 1, 'e' => "Une ressource qui s’épuise ne peut pas porter indéfiniment la croissance, et son prix, fixé à l’international, fluctue."],
                    ['q' => "Deux pays ont un PIB par habitant voisin, mais l’un a un IDH élevé et l’autre un IDH faible. Que suggère cet écart ?", 'c' => ["Le niveau du revenu ne suffit pas à fixer le développement", "Le PIB est mal calculé dans le pays à IDH élevé", "Le pays à IDH faible compte plus d’habitants", "Le pays à IDH élevé exporte davantage"], 'a' => 0, 'e' => "L’usage du revenu, notamment dans la santé, l’éducation et la répartition, compte autant que son niveau."],
                    ['q' => "Quel énoncé résume le mieux une approche équilibrée de la croissance ?", 'c' => ["Il faut sacrifier l’un des deux objectifs, croissance ou environnement", "La hausse du PIB suffit à garantir le bien-être de tous", "La croissance est un moyen à orienter vers le bien-être et la soutenabilité", "Réduire le PIB doit être le but de toute politique publique"], 'a' => 2, 'e' => "Ni course au PIB à tout prix, ni rejet de la croissance : on la juge à ce qu’elle apporte aux populations et à ce qu’elle coûte à la planète."],
                ],
            ],
            [
                'title' => "Modèles simples et politiques de croissance",
                'description' => "Appliquez des raisonnements élémentaires sur l’épargne, l’investissement et les politiques favorables à la croissance.",
                'questions' => [
                    ['q' => "Dans une économie simplifiée sans échanges extérieurs, que finance l’épargne des ménages ?", 'c' => ["La consommation courante des ménages", "Les importations de l’État", "L’investissement des entreprises", "Les salaires des fonctionnaires"], 'a' => 2, 'e' => "Épargner, c’est ne pas consommer : ces ressources, via les banques, servent à financer les machines et les bâtiments des entreprises."],
                    ['q' => "Un pays dont le PIB est de 500 investit 100 par an. Quel est son taux d’investissement ?", 'c' => ["10 %", "20 %", "25 %", "0,2 %"], 'a' => 1, 'e' => "100 ÷ 500 = 0,2, soit 20 % du PIB. Le 25 % vient d’une division par 400 au lieu de 500."],
                    ['q' => "Une économie fermée dont le PIB est de 1 000 épargne 20 % de ce PIB. Quel montant peut-elle consacrer à l’investissement ?", 'c' => ["20", "100", "1 000", "200"], 'a' => 3, 'e' => "Sans échanges extérieurs, investissement et épargne s’égalent : 20 % de 1 000 donne 200."],
                    ['q' => "Pourquoi des règles stables (droit de propriété, justice fiable) favorisent-elles l’investissement ?", 'c' => ["Elles rassurent sur la protection des gains futurs", "Elles dispensent les entreprises de financer leurs projets", "Elles rendent les profits assurés pour chaque projet", "Elles fixent à l’avance l’ensemble des prix"], 'a' => 0, 'e' => "Investir, c’est payer aujourd’hui pour gagner demain. Si les règles changent sans cesse ou si les gains peuvent être confisqués, on y renonce."],
                    ['q' => "Une artisane n’obtient pas de crédit pour acheter un four plus performant. Quelle conséquence est probable ?", 'c' => ["Aucune, car le capital n’a pas d’effet sur la production", "Une hausse de sa productivité malgré tout", "Un investissement retardé, donc moins de production future", "Une baisse de la population active locale"], 'a' => 2, 'e' => "Faute de financement, le projet est repoussé ou abandonné. Multiplié par de nombreuses petites entreprises, cela freine la croissance."],
                    ['q' => "Comment une politique de formation professionnelle peut-elle soutenir la croissance ?", 'c' => ["En réduisant le stock de capital physique", "En élevant les compétences des travailleurs", "En imposant un prix plafond sur les salaires", "En diminuant le nombre d’heures travaillées"], 'a' => 1, 'e' => "Des salariés mieux formés produisent davantage par heure et s’adaptent mieux aux technologies nouvelles : c’est un investissement en capital humain."],
                    ['q' => "Pourquoi diversifier son économie peut-il être utile à un pays ?", 'c' => ["Pour limiter les chocs venant d’un secteur ou d’un produit unique", "Pour interrompre les échanges avec le reste du monde", "Pour concentrer les exportations sur une seule marchandise", "Pour décourager l’arrivée de nouveaux concurrents"], 'a' => 0, 'e' => "Quand toutes les recettes dépendent d’un produit, une baisse de son prix mondial frappe tout le pays. Plusieurs activités répartissent le risque."],
                    ['q' => "Que désigne la croissance potentielle d’une économie ?", 'c' => ["La croissance relevée l’an dernier", "La croissance maximale que le pays pourrait imaginer", "La croissance annoncée dans le budget de l’État", "Le rythme soutenable sans tensions sur les prix"], 'a' => 3, 'e' => "C’est le rythme que permettent durablement les facteurs disponibles et la technologie. Au-delà, la demande bute sur l’offre et les prix s’emballent."],
                    ['q' => "Le taux de croissance d’un pays passe de 6 % à 3 % en un an. Que peut-on en conclure ?", 'c' => ["Le PIB a diminué de moitié", "Le PIB a baissé de 3 %", "Le PIB continue d’augmenter, mais plus lentement", "Le pays est entré en récession"], 'a' => 2, 'e' => "Un taux de 3 % reste positif : la production augmente encore. C’est la croissance qui ralentit."],
                    ['q' => "Un ministre déclare : « Une croissance de 4 % suffit, peu importe l’épuisement des nappes phréatiques. » Quelle objection est la plus solide ?", 'c' => ["Le PIB ne peut pas dépasser 4 % par an", "L’épuisement du capital naturel menace la production future", "Les nappes n’ont aucune valeur économique réelle", "L’eau reste gratuite dans toute analyse économique"], 'a' => 1, 'e' => "Les ressources naturelles sont un capital : le consommer sans le renouveler fragilise l’agriculture et l’industrie de demain. D’où l’intérêt d’intégrer l’environnement aux politiques de croissance."],
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
