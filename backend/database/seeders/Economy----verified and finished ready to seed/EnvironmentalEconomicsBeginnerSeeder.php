<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class EnvironmentalEconomicsBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'environmental-economics')->firstOrFail();

        $settings = [
            ['duration' => 20, 'passing_score' => 50],
            ['duration' => 20, 'passing_score' => 55],
            ['duration' => 20, 'passing_score' => 60],
            ['duration' => 20, 'passing_score' => 60],
            ['duration' => 20, 'passing_score' => 60],
            ['duration' => 20, 'passing_score' => 65],
            ['duration' => 20, 'passing_score' => 65],
            ['duration' => 20, 'passing_score' => 70],
        ];

        // 'a' = index (0-based) de la bonne réponse dans 'c'
        $quizzes = [
            [
                'title' => "Fondamentaux de l’économie de l’environnement",
                'description' => "Quiz d’introduction sur les ressources environnementales, les externalités, les biens publics et les principaux enjeux économiques liés à l’environnement.",
                'questions' => [
                    ['q' => "Une usine rejette de la fumée qui dégrade la qualité de l’air pour les habitants voisins. Quel concept économique décrit cette situation ?", 'c' => ["Économie d’échelle", "Bien de club marchand", "Externalité négative", "Externalité positive"], 'a' => 2, 'e' => "L’usine impose un coût à des tiers sans être payée ni faire payer : c’est le propre d’une externalité, ici négative puisque les voisins y perdent."],
                    ['q' => "Pourquoi un marché laissé à lui-même peut-il produire trop de pollution ?", 'c' => ["Le pollueur ne paie pas les dégâts causés aux autres", "Les prix baissent dès que la pollution augmente fortement", "Les consommateurs refusent d’acheter les produits propres", "L’État fixe tous les prix industriels du pays"], 'a' => 0, 'e' => "Le producteur ne compte que ses coûts privés. Les dégâts supportés par autrui ne figurent pas dans son calcul, donc il en produit davantage que l’optimum."],
                    ['q' => "L’éclairage d’une rue profite à tous les passants : un passant de plus ne gêne personne et on ne peut exclure personne. De quel type de bien s’agit-il ?", 'c' => ["Bien privé", "Ressource commune", "Bien de club", "Bien public"], 'a' => 3, 'e' => "Non-rivalité et non-exclusion : ce sont les deux marques d’un bien public pur."],
                    ['q' => "Laquelle de ces situations est une externalité positive ?", 'c' => ["Un agriculteur sur-fertilise son champ et pollue une rivière", "Un apiculteur dont les abeilles pollinisent des vergers", "Un automobiliste provoque un embouteillage", "Une usine rejette de la fumée sur un quartier"], 'a' => 1, 'e' => "Les voisins gagnent de meilleures récoltes sans payer l’apiculteur. Les trois autres cas imposent un coût à autrui."],
                    ['q' => "Une entreprise supporte 50 MAD de coût de production par unité et cause 20 MAD de dommages à des riverains. Quel est le coût social de l’unité ?", 'c' => ["70 MAD", "30 MAD", "50 MAD", "120 MAD"], 'a' => 0, 'e' => "Coût social = coût privé + dommage aux tiers, soit 50 + 20 = 70 MAD. Soustraire serait une erreur de signe classique."],
                    ['q' => "Une commune pêche davantage cette année et le stock de poissons sera plus faible l’an prochain. Quelle idée cela illustre-t-il ?", 'c' => ["La gratuité des ressources naturelles", "Une externalité positive", "Un arbitrage entre consommation présente et disponibilité future", "L’absence de coût d’opportunité"], 'a' => 2, 'e' => "Consommer plus maintenant signifie moins plus tard : c’est un arbitrage dans le temps, dit intertemporel."],
                    ['q' => "À quoi sert avant tout une taxe sur chaque tonne de polluant émise ?", 'c' => ["Cacher la pollution dans les statistiques officielles", "Faire entrer le dommage dans le calcul du pollueur", "Fermer toutes les usines du pays", "Réduire les salaires du secteur industriel"], 'a' => 1, 'e' => "Une fois la tonne payée, polluer n’est plus gratuit : le pollueur compare le coût de la taxe à celui de dépolluer."],
                    ['q' => "Une commune hésite à transformer un terrain en parking plutôt qu’en jardin public. Le coût d’opportunité du parking, c’est…", 'c' => ["le prix des panneaux de signalisation", "le salaire du gardien", "la hauteur des immeubles voisins", "la valeur du jardin public auquel on renonce en faisant ce choix"], 'a' => 3, 'e' => "Le coût d’opportunité est la meilleure alternative abandonnée, ici le jardin. Les autres éléments sont des coûts ordinaires ou sans rapport."],
                    ['q' => "Laquelle de ces situations n’est pas une externalité ?", 'c' => ["Un client paie sa baguette 10 MAD", "Le bruit d’un chantier gêne les voisins", "Les fumées d’une briqueterie irritent le quartier", "Un verger fleuri profite aux apiculteurs voisins"], 'a' => 0, 'e' => "L’achat de la baguette est un échange où chacun est payé ou paie. Il n’y a pas d’effet subi par un tiers hors marché."],
                    ['q' => "On ne peut pas réserver l’air pur d’une ville à certains habitants seulement. Comment appelle-t-on cette propriété ?", 'c' => ["La rivalité", "La rareté", "La non-exclusion : personne ne peut être écarté de l’usage", "La concurrence imparfaite"], 'a' => 2, 'e' => "Quand personne ne peut être exclu de l’usage d’un bien, on parle de non-exclusion. Ne la confondez pas avec la non-rivalité, qui concerne l’usure par l’usage."],
                    ['q' => "Un acheteur valorise un produit 120 MAD. Il coûte 100 MAD à produire et cause 40 MAD de dommages à des tiers. Du point de vue de la société, cette production est…", 'c' => ["souhaitable, car le producteur encaisse un gain de 20 MAD sur chaque unité vendue", "non souhaitable : le coût social de 140 MAD dépasse la valeur de 120 MAD", "souhaitable, car la valeur de 120 MAD dépasse le coût privé de 100 MAD", "neutre, car les dommages aux tiers ne se chiffrent pas en monnaie"], 'a' => 1, 'e' => "Le coût social vaut 100 + 40 = 140 MAD, pour une valeur de 120 : la société y perd 20 MAD même si le producteur y gagne."],
                ],
            ],
            [
                'title' => "Externalités et défaillances du marché",
                'description' => "Exercices d’application pour reconnaître les externalités, distinguer coûts privés et sociaux et comprendre pourquoi une intervention peut être nécessaire.",
                'questions' => [
                    ['q' => "On parle de défaillance du marché lorsque…", 'c' => ["l’État fixe un prix plafond sur un marché clé", "le marché alloue mal les ressources de la société", "une grande entreprise fait faillite brutalement", "les prix montent fortement d’une année à l’autre"], 'a' => 1, 'e' => "La défaillance concerne l’efficacité de l’allocation, pas la santé d’une firme ni l’inflation. Pollution et biens publics en sont des exemples."],
                    ['q' => "Une cimenterie a un coût privé de 60 MAD la tonne et cause 15 MAD de dommages par tonne au voisinage. Quel est le coût social de 10 tonnes ?", 'c' => ["600 MAD", "150 MAD", "1 050 MAD", "750 MAD"], 'a' => 3, 'e' => "Par tonne : 60 + 15 = 75 MAD, donc 750 MAD pour 10 tonnes. 600 oublie les dommages et 150 oublie le coût de production."],
                    ['q' => "Quand le coût social d’un bien dépasse son coût privé, la quantité produite par le marché est…", 'c' => ["supérieure à l’optimum social, car des coûts sont ignorés", "inférieure à l’optimum social", "identique à l’optimum social", "impossible à déterminer précisément"], 'a' => 0, 'e' => "Le producteur ne voit qu’une partie des coûts, il vend donc davantage que ce qu’il faudrait pour la société."],
                    ['q' => "Un propriétaire plante des arbres devant chez lui et rafraîchit toute la rue. Si ce bienfait n’est jamais rémunéré, le nombre d’arbres plantés sera…", 'c' => ["trop élevé", "exactement optimal", "trop faible", "impossible à observer"], 'a' => 2, 'e' => "Il ne perçoit qu’une partie du bénéfice qu’il crée. Avec une externalité positive, on produit trop peu."],
                    ['q' => "Selon le théorème de Coase, pollueur et victimes peuvent s’entendre sans l’État quand…", 'c' => ["la pollution est difficile à voir pour les victimes", "l’État fixe le prix de chaque négociation", "les victimes se comptent par milliers de personnes", "les droits sont clairs et négocier coûte peu"], 'a' => 3, 'e' => "Il faut des droits de propriété bien définis et des coûts de transaction faibles, sinon l’accord n’a pas lieu."],
                    ['q' => "Karim affirme : « Une taxe sur la pollution ne change rien, l’entreprise la paie et continue comme avant. » Quelle est son erreur ?", 'c' => ["Il oublie que la taxe est reversée aux victimes du dommage", "Il oublie que payer par tonne rend la réduction rentable", "Il ignore que la taxe fixe le prix du produit final fabriqué", "Il confond une taxe avec une subvention aux entreprises"], 'a' => 1, 'e' => "Chaque tonne évitée économise la taxe : tant que dépolluer coûte moins cher, l’entreprise a intérêt à réduire."],
                    ['q' => "Un pêcheur ne tient pas compte de l’effet de ses prises sur les revenus des autres pêcheurs. Cet effet est…", 'c' => ["une externalité négative subie par les autres pêcheurs", "une externalité positive pour les autres", "un coût fixe", "une rente"], 'a' => 0, 'e' => "Ses prises réduisent le stock disponible pour les autres sans qu’il en supporte le prix : c’est un coût externe."],
                    ['q' => "Pour encourager une externalité positive comme l’isolation des logements, l’État peut…", 'c' => ["taxer l’isolation", "interdire l’isolation", "subventionner l’isolation", "laisser faire sans aucune règle"], 'a' => 2, 'e' => "Une subvention rapproche le gain du ménage du gain pour la société. Taxer ferait l’inverse."],
                    ['q' => "Un jardin rapporte 30 MAD à son propriétaire et 10 MAD aux voisins, pour un coût de 35 MAD. Est-il souhaitable pour la société ?", 'c' => ["Non : le propriétaire y perd 5 MAD, donc la société aussi", "Non : le bénéfice des voisins ne compte pas", "Impossible à dire sans connaître le prix du terrain", "Oui : le bénéfice social de 40 MAD dépasse 35 MAD"], 'a' => 3, 'e' => "Le bénéfice social est 30 + 10 = 40 MAD, supérieur à 35. Le marché seul ne le plantera pourtant pas, car 30 est inférieur à 35."],
                    ['q' => "Quel est l’intrus parmi ces situations ?", 'c' => ["Un prix du blé en baisse après la récolte", "Un bien public que personne n’a intérêt à financer", "Une usine qui pollue sans compensation pour les voisins", "Un monopole qui restreint volontairement la production"], 'a' => 0, 'e' => "Un prix qui baisse quand l’offre augmente est le marché qui fonctionne. Les trois autres cas sont des défaillances."],
                    ['q' => "Des élevages polluent une nappe utilisée par 2000 villageois, chacun subissant un petit dommage. Pourquoi la négociation spontanée échoue-t-elle souvent ?", 'c' => ["Parce que la nappe n’a aucune valeur pour les villageois", "Parce que négocier à 2000 coûte cher et chacun attend les autres", "Parce que les éleveurs ne produisent rien d’utile à personne dans la région", "Parce que l’eau est gratuite par nature"], 'a' => 1, 'e' => "Les coûts de transaction sont élevés et chacun préfère laisser les autres se mobiliser. L’intervention publique devient alors utile."],
                ],
            ],
            [
                'title' => "Pollution et instruments de politique environnementale",
                'description' => "Quiz consacré aux taxes, normes, permis échangeables et autres instruments utilisés pour limiter les émissions et orienter les comportements.",
                'questions' => [
                    ['q' => "À l’optimum, une taxe pigouvienne est fixée au niveau…", 'c' => ["des profits de l’entreprise", "du prix du marché", "des recettes souhaitées par l’État", "du dommage marginal causé"], 'a' => 3, 'e' => "On fait payer au pollueur ce que sa dernière unité coûte à la société : c’est l’idée de Pigou."],
                    ['q' => "Une taxe de 20 MAD la tonne s’applique. Dépolluer coûte 15 MAD la tonne à la firme A et 30 MAD à la firme B. Que font-elles ?", 'c' => ["Aucune des deux ne dépollue", "A dépollue, B préfère payer la taxe", "B dépollue, A paie la taxe", "Les deux dépolluent, car la taxe vise tout le monde"], 'a' => 1, 'e' => "Chacune compare son coût de dépollution à la taxe : 15 est inférieur à 20, donc A réduit ; 30 est supérieur à 20, donc B paie."],
                    ['q' => "Une norme impose le même plafond d’émissions à toutes les usines. Quel est son défaut par rapport à une taxe ?", 'c' => ["Elle rapporte trop de recettes à l’État chaque année", "Elle ne peut pas être contrôlée par l’administration", "Elle ignore les écarts de coût entre usines", "Elle laisse polluer sans limite les petites usines"], 'a' => 2, 'e' => "Une usine pour qui dépolluer est cher doit faire autant que celle pour qui c’est facile, ce qui coûte plus à la société."],
                    ['q' => "Dans un système de permis échangeables, que fixe l’État ?", 'c' => ["Le nombre total de permis, donc le plafond", "Le prix de chaque permis, réajusté chaque jour", "La production exacte de chacune des usines", "Le bénéfice garanti de chaque usine du pays"], 'a' => 0, 'e' => "L’État limite la quantité totale. Le prix se forme ensuite entre acheteurs et vendeurs."],
                    ['q' => "Le permis s’échange à 25 MAD. Dépolluer une tonne coûte 40 MAD à l’usine Atlas et 10 MAD à l’usine Rif. Que se passe-t-il ?", 'c' => ["Atlas vend des permis et Rif en achète aussitôt", "Les deux usines dépolluent chacune une tonne", "Atlas achète, Rif dépollue et vend ses permis", "Les deux usines achètent chacune des permis"], 'a' => 2, 'e' => "Atlas paie 25 plutôt que 40 ; Rif gagne 25 en vendant un permis alors que dépolluer lui coûte 10. Les réductions se font là où elles coûtent le moins."],
                    ['q' => "Une consigne de 1 MAD sur les bouteilles en verre sert à…", 'c' => ["inciter à rapporter les bouteilles vides pour qu’elles soient réutilisées", "financer les routes de la commune", "interdire les bouteilles en plastique", "taxer les ménages sans contrepartie"], 'a' => 0, 'e' => "Le ménage récupère sa pièce en rapportant la bouteille : jeter devient un coût."],
                    ['q' => "Après l’instauration d’une taxe, les émissions d’une région passent de 200 à 150 tonnes. De quel pourcentage ont-elles baissé ?", 'c' => ["50 %", "33 %", "12,5 %", "25 %"], 'a' => 3, 'e' => "La baisse est de 50 tonnes sur 200, soit 25 %. Piège : 50 % serait le résultat de 50 divisé par 100."],
                    ['q' => "Quel instrument fixe une limite à la quantité totale d’émissions tout en laissant le prix varier ?", 'c' => ["La taxe pigouvienne", "Le marché de permis plafonné", "La campagne de sensibilisation", "La subvention à l’achat"], 'a' => 1, 'e' => "Dans un marché de permis, la quantité est fixée et le prix du permis s’ajuste. C’est l’inverse d’une taxe."],
                    ['q' => "Un élève dit : « Avec une taxe, la pollution tombe forcément à zéro. » Pourquoi est-ce faux ?", 'c' => ["Parce que la taxe est facultative pour les grandes entreprises du pays", "Parce qu’une taxe ne coûte presque rien au pollueur moyen du secteur", "Parce qu’elle ne réduit que tant que dépolluer coûte moins que la taxe", "Parce que les taxes concernent les ménages et jamais les usines"], 'a' => 2, 'e' => "Au-delà d’un certain point, dépolluer coûte plus que la taxe et l’entreprise préfère la payer. La pollution baisse sans disparaître."],
                    ['q' => "Lequel de ces instruments est dit « fondé sur le marché » ?", 'c' => ["Le permis d’émission échangeable entre entreprises", "L’interdiction d’un produit", "La norme technique obligatoire", "L’inspection des usines"], 'a' => 0, 'e' => "Il utilise un prix pour orienter les choix. Interdictions et normes imposent un comportement, sans passer par les prix."],
                    ['q' => "Une usine émet 100 tonnes avec une taxe de 30 MAD la tonne. Si elle réduit ses émissions à 60 tonnes, quelle taxe paie-t-elle ?", 'c' => ["3 000 MAD", "1 200 MAD", "18 000 MAD", "1 800 MAD"], 'a' => 3, 'e' => "60 × 30 = 1 800 MAD. 1 200 serait l’économie réalisée en réduisant de 40 tonnes, pas la taxe restante."],
                ],
            ],
            [
                'title' => "Ressources naturelles et développement durable",
                'description' => "Questions sur les ressources renouvelables et non renouvelables, la gestion dans le temps et l’idée de développement durable.",
                'questions' => [
                    ['q' => "Laquelle de ces ressources est non renouvelable à l’échelle humaine ?", 'c' => ["Le pétrole", "Le vent", "Le bois d’une forêt gérée", "Le stock d’un poisson géré"], 'a' => 0, 'e' => "Le pétrole met des millions d’années à se former. Les autres se reconstituent à un rythme comparable à celui de leur usage."],
                    ['q' => "Une forêt gagne 5 % de bois par an par sa croissance. Couper chaque année plus de 5 % du stock conduit à…", 'c' => ["une hausse du stock", "un stock stable", "un stock qui s’érode d’année en année", "un doublement du stock"], 'a' => 2, 'e' => "Si on prélève plus que la croissance, le capital forestier s’érode année après année."],
                    ['q' => "Le développement durable consiste à répondre aux besoins du présent…", 'c' => ["en épuisant d’abord toutes les ressources faciles d’accès", "sans compromettre les besoins des générations futures", "en protégeant la nature par une interdiction générale", "en visant surtout la croissance à court terme"], 'a' => 1, 'e' => "C’est la définition du rapport Brundtland : on tient compte des générations futures, sans pour autant geler toute activité."],
                    ['q' => "Un taux d’actualisation élevé conduit à accorder…", 'c' => ["plus de poids aux bénéfices de l’avenir", "le même poids à toutes les dates", "aucun poids au présent", "moins de poids aux gains lointains qu’aux gains proches"], 'a' => 3, 'e' => "Plus le taux est haut, plus un gain futur est dévalué : les bénéfices éloignés pèsent peu dans la décision."],
                    ['q' => "Quelle est la valeur actuelle de 110 MAD reçus dans un an, avec un taux d’actualisation de 10 % ?", 'c' => ["110 MAD", "100 MAD", "90 MAD", "1 100 MAD"], 'a' => 1, 'e' => "On divise par 1,10 : 110 / 1,10 = 100 MAD. 121 serait le calcul inverse, la valeur dans deux ans de 100."],
                    ['q' => "Un stock de 1000 tonnes de poissons se reconstitue de 100 tonnes par an. Que dire d’une pêche de 150 tonnes par an ?", 'c' => ["Elle est durable, car 150 tonnes restent une petite part du stock", "Elle est durable, car le stock se renouvelle chaque année", "Elle n’a aucun effet sur le stock", "Non durable : les prises dépassent le renouvellement"], 'a' => 3, 'e' => "Chaque année le stock perd 50 tonnes nettes. À ce rythme il s’effondre."],
                    ['q' => "Quand un minerai devient plus rare, son prix monte. Quel effet cela peut-il avoir ?", 'c' => ["Il pousse à épuiser très vite le gisement restant", "Il pousse à utiliser davantage ce minerai", "Il encourage les substituts et le recyclage", "Il supprime la rareté du minerai"], 'a' => 2, 'e' => "Un prix élevé rend rentables des alternatives que personne n’aurait envisagées à bas prix."],
                    ['q' => "Le Maroc possède une part importante des réserves mondiales de phosphate. Cette ressource est…", 'c' => ["non renouvelable : chaque tonne extraite diminue le stock restant", "renouvelable à vitesse humaine", "inépuisable à l’échelle du siècle", "non rivale, car tout le monde peut en profiter"], 'a' => 0, 'e' => "Une tonne extraite n’est plus disponible demain. Gérer le rythme d’extraction est donc un choix intertemporel."],
                    ['q' => "Quel intérêt économique y a-t-il à recycler de l’aluminium usagé plutôt qu’à extraire du minerai ?", 'c' => ["Cela rend l’aluminium gratuit", "Cela supprime les déchets", "Cela augmente le besoin de minerai neuf", "Cela économise du minerai et de l’énergie de fabrication"], 'a' => 3, 'e' => "Refondre du métal déjà produit demande bien moins d’énergie que de partir du minerai, et préserve le stock."],
                    ['q' => "Quel est l’intrus parmi ces sources d’énergie ?", 'c' => ["Le charbon extrait des mines", "Le gaz naturel liquéfié", "Le rayonnement solaire", "Le pétrole brut"], 'a' => 2, 'e' => "Le soleil est renouvelable, tandis que charbon, gaz et pétrole sont des stocks fossiles qui s’épuisent."],
                    ['q' => "Un projet coûte 100 MAD aujourd’hui et rapporte 108 MAD dans un an. Avec un taux d’actualisation de 10 %, est-il rentable ?", 'c' => ["Oui, car 108 MAD dépasse largement 100 MAD", "Non : 108 actualisés valent environ 98", "Oui, car le taux est positif", "Non, car il faudrait gagner 120 MAD"], 'a' => 1, 'e' => "108 / 1,10 ≈ 98,2, inférieur à 100. Comparer 108 à 100 sans actualiser conduit à une mauvaise décision."],
                ],
            ],
            [
                'title' => "Changement climatique et émissions de carbone",
                'description' => "Introduction aux émissions de gaz à effet de serre, aux incitations économiques et aux choix de réduction des émissions.",
                'questions' => [
                    ['q' => "Quel gaz à effet de serre est le principal émis par les activités humaines ?", 'c' => ["Le dioxygène de l’air", "Le gaz carbonique", "L’azote atmosphérique", "L’hélium des ballons"], 'a' => 1, 'e' => "Le CO2 provient surtout de la combustion de pétrole, de charbon et de gaz. Dioxygène, azote et hélium ne retiennent pas la chaleur de la même façon."],
                    ['q' => "Les émissions de CO2 sont souvent qualifiées de…", 'c' => ["externalité négative globale", "bien privé à effet local", "externalité positive pour tous", "coût fixe de production"], 'a' => 0, 'e' => "Où que le CO2 soit émis, le dommage climatique est partagé par toute la planète sans que l’émetteur paie."],
                    ['q' => "Le prix du carbone est de 50 MAD la tonne. Combien paie une centrale qui émet 1000 tonnes ?", 'c' => ["5 000 MAD", "500 000 MAD", "50 000 MAD", "1 000 MAD"], 'a' => 2, 'e' => "1000 × 50 = 50 000 MAD. Attention aux zéros !"],
                    ['q' => "Chaque pays profite des efforts de réduction des autres sans en payer le coût. Comment appelle-t-on ce comportement ?", 'c' => ["Le protectionnisme", "La concurrence parfaite", "L’aléa moral", "Le passager clandestin"], 'a' => 3, 'e' => "Le bénéfice d’un climat stable est partagé : chacun est tenté de ne rien faire en espérant que les autres paieront."],
                    ['q' => "Réduire une tonne d’émissions coûte 20 MAD à la firme A et 60 MAD à la firme B. Pour réduire les émissions totales au moindre coût, qui doit réduire davantage ?", 'c' => ["La firme A, car chaque tonne y coûte moins cher à éviter", "La firme B, car son coût de réduction est élevé", "Les deux de façon égale", "Aucune des deux"], 'a' => 0, 'e' => "On réduit d’abord là où c’est le moins coûteux. Une réduction identique pour tous gaspillerait de l’argent."],
                    ['q' => "Construire une digue pour se protéger de la montée de la mer relève de…", 'c' => ["l’atténuation", "la compensation", "l’adaptation", "la dépollution"], 'a' => 2, 'e' => "Atténuer, c’est réduire les émissions. S’adapter, c’est limiter les dégâts d’un changement déjà en cours."],
                    ['q' => "Pourquoi subventionner les combustibles fossiles nuit-il à la lutte contre le changement climatique ?", 'c' => ["Cela les rend plus rares", "Cela abaisse leur prix, donc stimule la demande", "Cela augmente leur coût de production pour tous", "Cela réduit les émissions de CO2"], 'a' => 1, 'e' => "Un prix plus bas pousse à consommer davantage, donc à émettre davantage."],
                    ['q' => "Un ménage émet 6 tonnes de CO2 par an et réduit ses émissions de 25 %. Quelles émissions lui reste-t-il ?", 'c' => ["4,5 tonnes", "1,5 tonne", "4,75 tonnes", "3 tonnes"], 'a' => 0, 'e' => "25 % de 6 font 1,5 tonne ; 6 − 1,5 = 4,5 tonnes. 1,5 est la réduction, pas ce qui reste."],
                    ['q' => "Une taxe carbone fait monter le prix de l’essence. Quel effet attendre à moyen terme ?", 'c' => ["Une hausse durable de la consommation d’essence des ménages", "Aucun effet sur les choix de transport", "Une baisse du prix des voitures thermiques", "Moins d’essence consommée et d’autres modes de transport"], 'a' => 3, 'e' => "Quand un bien devient plus cher, on en achète moins et l’on cherche des alternatives, comme le bus ou le train."],
                    ['q' => "Un pays taxe fortement ses usines, qui déménagent dans un pays sans taxe : les émissions mondiales ne baissent pas. Comment nomme-t-on ce phénomène ?", 'c' => ["La rareté carbone", "La compensation carbone", "La fuite de carbone", "La captation de carbone"], 'a' => 2, 'e' => "Les émissions « fuient » vers des territoires moins régulés. C’est l’argument pour une action coordonnée entre pays."],
                    ['q' => "Pourquoi est-il difficile de fixer le bon prix du carbone ?", 'c' => ["Le CO2 n’est pas mesurable avec les instruments actuels", "Le dommage est futur, mondial et difficile à chiffrer", "Les taxes sont interdites par la loi", "Les entreprises fixent elles-mêmes les prix"], 'a' => 1, 'e' => "Il faut estimer des dégâts lointains qui touchent le monde entier, avec beaucoup d’incertitude. Les émissions, elles, se mesurent bien."],
                ],
            ],
            [
                'title' => "Biens publics, ressources communes et passager clandestin",
                'description' => "Quiz pratique pour distinguer biens privés, biens publics et ressources communes, avec des situations de gestion collective.",
                'questions' => [
                    ['q' => "Un sandwich acheté par Sara est un bien…", 'c' => ["non rival et non excluable", "non rival et excluable", "rival et non excluable", "rival et excluable"], 'a' => 3, 'e' => "Si Sara le mange, personne d’autre ne le peut (rival), et le vendeur peut refuser de le donner sans paiement (excluable) : c’est un bien privé."],
                    ['q' => "Pourquoi le marché produit-il peu de phares ?", 'c' => ["Parce que les phares n’ont aucune utilité économique pour les navires", "Parce que chacun profite sans payer, donc personne ne finance", "Parce que l’État interdit aux entreprises privées de les construire", "Parce que leur construction est infiniment coûteuse à réaliser"], 'a' => 1, 'e' => "Impossible de faire payer chaque navire qui profite de la lumière. Sans recettes, aucun investisseur privé ne se lance."],
                    ['q' => "Un pâturage ouvert à tous les éleveurs d’un douar est…", 'c' => ["une ressource commune : rivale mais difficile à protéger", "un bien public pur et simple", "un bien privé de consommation", "un bien de club payant"], 'a' => 0, 'e' => "On ne peut guère exclure personne, mais l’herbe mangée par l’un manque à l’autre : rivalité sans exclusion."],
                    ['q' => "Dix éleveurs partagent un pâturage. Chacun ajoute une bête : il garde tout le profit mais ne supporte qu’une part du surpâturage. Que va-t-il arriver ?", 'c' => ["Le pâturage s’améliore", "Le profit total augmente sans limite", "Le pâturage est surexploité", "Les éleveurs se mettent d’accord spontanément"], 'a' => 2, 'e' => "C’est la tragédie des communs : l’intérêt individuel pousse à une surexploitation qui ruine le groupe."],
                    ['q' => "Quelle solution aux ressources communes a été étudiée par Elinor Ostrom ?", 'c' => ["Des règles définies par les usagers eux-mêmes", "La vente de la ressource au plus offrant de la région", "Un accès libre et sans règle commune à tous", "Une taxe unique imposée à tous les pays du monde"], 'a' => 0, 'e' => "Elle a montré que des communautés gèrent durablement forêts, eaux ou pâturages par des règles locales, comme l’agdal dans l’Atlas."],
                    ['q' => "Dans un immeuble, chaque habitant espère que les autres paieront le nettoyage de l’escalier. Ce comportement est celui…", 'c' => ["d’un monopoleur", "d’un rentier", "d’un bénéficiaire d’une externalité positive", "d’un passager clandestin"], 'a' => 3, 'e' => "Chacun profite d’un escalier propre sans y contribuer : si tous raisonnent ainsi, personne ne le nettoie."],
                    ['q' => "Quel est l’intrus parmi ces biens publics purs ?", 'c' => ["Un phare signalant les récifs", "Une glace à la vanille", "La défense du territoire national", "L’éclairage d’une rue de quartier"], 'a' => 1, 'e' => "La glace est rivale et excluable, donc privée. Les trois autres profitent à tous sans s’épuiser."],
                    ['q' => "Une autoroute à péage fluide permet d’exclure ceux qui ne paient pas, mais les usagers se gênent peu. De quel type de bien se rapproche-t-elle ?", 'c' => ["Un bien privé pur", "Un bien public pur", "Un bien de club", "Une ressource commune"], 'a' => 2, 'e' => "Exclusion possible et faible rivalité : c’est la définition d’un bien de club. En cas d’embouteillage, la rivalité apparaît."],
                    ['q' => "Un éclairage de quartier coûte 600 MAD. 30 habitants le valorisent chacun 25 MAD. Faut-il le réaliser ?", 'c' => ["Non, car personne ne paierait", "Non, car chaque habitant ne valorise que 25 MAD", "Oui, mais personne n’en profiterait", "Oui : 750 MAD de valeur pour 600 MAD de coût"], 'a' => 3, 'e' => "30 × 25 = 750 MAD de bénéfice total. Le projet est efficace, mais il faut un financement collectif pour éviter les passagers clandestins."],
                    ['q' => "Pourquoi finance-t-on souvent les biens publics par l’impôt ?", 'c' => ["Pour empêcher que chacun profite du bien sans contribuer", "Parce que l’impôt ne coûte rien à personne", "Pour rendre le bien rival", "Pour rendre le bien excluable"], 'a' => 0, 'e' => "L’impôt oblige tout le monde à contribuer, ce qui règle le problème du passager clandestin."],
                    ['q' => "Pour une ressource commune comme la pêche, instaurer un quota par bateau vise à…", 'c' => ["augmenter le nombre de bateaux en mer chaque année", "limiter les prises au niveau de reconstitution", "supprimer le coût de la pêche", "rendre la mer propriété privée"], 'a' => 1, 'e' => "Un quota crée une limite collective sur ce que chacun prélève, évitant que le stock ne s’effondre."],
                ],
            ],
            [
                'title' => "Gestion environnementale et choix des ménages",
                'description' => "Applications simples aux comportements de consommation, aux déchets, à l’énergie et aux décisions quotidiennes ayant un impact environnemental.",
                'questions' => [
                    ['q' => "Un ménage jette ses piles usagées dans la poubelle ordinaire pour gagner du temps. Quel coût en résulte pour la société ?", 'c' => ["Aucun, car les piles sont très petites", "Le coût de la collecte", "La pollution des sols et de l’eau", "Le prix des piles neuves"], 'a' => 2, 'e' => "Le ménage économise du temps, mais la pollution diffuse retombe sur tous : c’est une externalité."],
                    ['q' => "Une ampoule LED de 8 W remplace une ampoule de 40 W, allumée 5 h par jour pendant 30 jours. Combien de kWh économise-t-on ?", 'c' => ["4,8 kWh", "1,2 kWh", "6 kWh", "0,48 kWh"], 'a' => 0, 'e' => "32 W d’écart × 5 h × 30 jours = 4 800 Wh, soit 4,8 kWh. 1,2 kWh serait seulement la consommation de la LED."],
                    ['q' => "Un ménage achète une voiture plus économe et roule beaucoup plus : l’économie d’essence est réduite. Comment nomme-t-on cet effet ?", 'c' => ["Effet de levier", "Effet d’éviction", "Effet de cliquet", "Effet rebond"], 'a' => 3, 'e' => "Quand l’usage devient moins cher, on le consomme davantage, ce qui annule une partie du gain."],
                    ['q' => "Une facture d’eau plus chère au-delà d’un certain seuil de consommation vise à…", 'c' => ["réduire le prix pour les très gros consommateurs", "limiter le gaspillage sans priver les ménages", "supprimer la facture d’eau des ménages modestes", "obliger les ménages à stocker l’eau"], 'a' => 1, 'e' => "Les premiers mètres cubes restent peu coûteux et les suivants sont facturés plus cher, d’où une incitation à économiser."],
                    ['q' => "Un chauffe-eau solaire coûte 4 000 MAD et fait économiser 800 MAD par an. Au bout de combien d’années est-il remboursé ?", 'c' => ["3 ans", "8 ans", "5 ans", "10 ans"], 'a' => 2, 'e' => "4 000 / 800 = 5 ans. C’est le délai de retour sur investissement, hors actualisation."],
                    ['q' => "À quoi sert une étiquette énergie sur les appareils électroménagers ?", 'c' => ["informer le consommateur sur la consommation d’énergie avant l’achat", "faire monter le prix de tous les appareils neufs", "interdire les appareils anciens", "remplacer la concurrence entre marques"], 'a' => 0, 'e' => "Sans étiquette, difficile de comparer des consommations futures. L’information aide à acheter malin."],
                    ['q' => "Une commune fait payer 1 MAD chaque sac plastique en caisse. Quel effet attendre ?", 'c' => ["Une hausse de la consommation de sacs en caisse", "Aucun changement de comportement", "Une baisse du prix des produits", "Moins de sacs et plus de cabas réutilisables"], 'a' => 3, 'e' => "Un coût apparaît là où le sac était jusque-là gratuit : les clients s’adaptent."],
                    ['q' => "Le frigo A coûte 3 000 MAD et consomme 100 kWh par mois ; le frigo B coûte 3 600 MAD et consomme 60 kWh. Le kWh vaut 1,5 MAD. Au bout de combien de mois B devient-il plus avantageux ?", 'c' => ["10 mois", "6 mois", "40 mois", "100 mois"], 'a' => 0, 'e' => "B économise 40 × 1,5 = 60 MAD par mois pour 600 MAD de surcoût : 600 / 60 = 10 mois."],
                    ['q' => "Nadia dit : « Éteindre mes appareils en veille ne change rien, ma maison est négligeable. » Quelle idée ignore-t-elle ?", 'c' => ["Les rendements d’échelle", "L’inflation importée", "L’addition de millions de petits gestes", "Le prix de l’électricité fixé par l’État"], 'a' => 2, 'e' => "Un geste est minuscule, mais multiplié par des millions de foyers il pèse sur la consommation du pays."],
                    ['q' => "Acheter un objet d’occasion plutôt que neuf réduit l’impact environnemental parce que…", 'c' => ["l’objet est moins utile", "le vendeur subit une taxe sur chaque revente d’objet", "la livraison est gratuite", "on évite les ressources d’une fabrication neuve"], 'a' => 3, 'e' => "La fabrication est souvent la phase la plus lourde. Prolonger la vie d’un objet la repousse."],
                    ['q' => "Quel est l’intrus parmi ces gestes qui réduisent la facture énergétique d’un ménage ?", 'c' => ["Isoler les fenêtres et les portes de la maison", "Laisser la clim allumée en son absence", "Choisir le programme éco du lave-linge", "Éteindre les lumières inutiles"], 'a' => 1, 'e' => "Climatiser une pièce vide gaspille de l’électricité. Les trois autres gestes réduisent la consommation."],
                ],
            ],
            [
                'title' => "Évaluation des politiques environnementales",
                'description' => "Révision générale sur le choix des instruments, les coûts et bénéfices, l’efficacité environnementale et les arbitrages de politique publique.",
                'questions' => [
                    ['q' => "Une station d’épuration coûte 8 millions de MAD et procure 11 millions de MAD de bénéfices actualisés. Quel est son bénéfice net ?", 'c' => ["−3 millions de MAD", "3 millions de MAD", "19 millions de MAD", "8 millions de MAD"], 'a' => 1, 'e' => "Bénéfice net = bénéfices − coûts = 11 − 8 = 3 millions de MAD. Positif, le projet crée de la valeur pour la société."],
                    ['q' => "Un ratio bénéfices/coûts supérieur à 1 signifie que…", 'c' => ["le projet est trop cher à réaliser", "les bénéfices égalent les coûts", "le projet n’a pas d’effet sur l’environnement", "les bénéfices dépassent les coûts"], 'a' => 3, 'e' => "Le ratio compare ce qu’on gagne à ce qu’on dépense : au-dessus de 1, le projet rapporte plus qu’il ne coûte."],
                    ['q' => "Jusqu’où faut-il réduire la pollution pour que ce soit efficace économiquement ?", 'c' => ["Jusqu’à ce que le coût total de la dépollution devienne nul", "Jusqu’à zéro émission, quel que soit le prix à payer", "Jusqu’à ce que le coût marginal égale le bénéfice marginal", "Jusqu’à ce que les entreprises soient toutes en perte"], 'a' => 2, 'e' => "Au-delà de ce point, chaque tonne évitée coûte plus que le dommage qu’elle prévient. En deçà, il reste du gain à réaliser."],
                    ['q' => "Pour valoriser un parc, on demande aux visiteurs combien ils paieraient au maximum pour y accéder. Comment s’appelle cette méthode ?", 'c' => ["L’évaluation contingente", "La comptabilité nationale", "La méthode des prix fixes", "L’amortissement du capital"], 'a' => 0, 'e' => "On fait déclarer un consentement à payer, faute de prix de marché. C’est la méthode d’évaluation contingente."],
                    ['q' => "Une taxe sur le carburant pèse proportionnellement plus sur les ménages modestes. Quel aspect de la politique cela concerne-t-il ?", 'c' => ["L’efficacité allocative", "La concurrence", "L’inflation", "L’équité entre ménages"], 'a' => 3, 'e' => "L’effet distributif est une question d’équité, distincte de l’efficacité. On peut le corriger en redistribuant les recettes."],
                    ['q' => "La politique A réduit 100 tonnes pour 5 000 MAD ; la politique B réduit 40 tonnes pour 3 200 MAD. Laquelle coûte le moins par tonne évitée ?", 'c' => ["B, car son coût total est plus bas", "A : 50 MAD par tonne contre 80", "B, car elle réduit moins", "Les deux, à 50 MAD par tonne"], 'a' => 1, 'e' => "5 000 / 100 = 50 MAD contre 3 200 / 40 = 80 MAD. Comparer les coûts totaux est un piège, car les volumes diffèrent."],
                    ['q' => "Pour une substance très toxique, où une seule dose excessive est dangereuse, quel instrument est le plus adapté ?", 'c' => ["Un permis échangeable sans plafond", "Une campagne de sensibilisation", "Une interdiction ou une norme stricte et contrôlée", "Une subvention à la production"], 'a' => 2, 'e' => "Quand le risque est grave, on ne peut pas laisser le prix décider : une règle claire garantit la limite."],
                    ['q' => "Deux politiques obtiennent la même baisse de 10 % des émissions : l’une à 100 MAD la tonne, l’autre à 40 MAD la tonne. Laquelle est la plus coût-efficace ?", 'c' => ["Celle à 40 MAD la tonne", "Celle à 100 MAD la tonne", "Aucune, elles se valent", "On ne peut pas comparer"], 'a' => 0, 'e' => "À résultat égal, la moins chère est préférable : elle laisse des ressources pour d’autres usages."],
                    ['q' => "Avec un taux d’actualisation élevé, un bénéfice de 1000 MAD dans 50 ans a aujourd’hui une valeur…", 'c' => ["supérieure à 1000 MAD", "égale à 1000 MAD", "très faible", "négative"], 'a' => 2, 'e' => "L’actualisation écrase les gains lointains. D’où le débat sur le taux à utiliser pour le climat."],
                    ['q' => "Avant d’adopter une taxe, un ministère examine le risque de délocalisation des usines. Il s’intéresse alors à…", 'c' => ["la maximisation du profit de chaque usine", "ses effets indirects sur la compétitivité", "la mesure de l’inflation", "le calcul du PIB"], 'a' => 1, 'e' => "Une bonne évaluation regarde aussi les conséquences indirectes, pas seulement l’effet sur l’environnement."],
                    ['q' => "Un seul budget permet de financer un projet. A coûte 20 et rapporte 30 ; B coûte 50 et rapporte 65 (millions de MAD). Selon le bénéfice net, que choisir ?", 'c' => ["A, car son ratio bénéfices/coûts est plus élevé", "A, car il coûte moins", "Aucun des deux", "B, car son bénéfice net de 15 dépasse celui de 10 pour A"], 'a' => 3, 'e' => "B : 65 − 50 = 15 ; A : 30 − 20 = 10. Le ratio favorise A, mais le critère retenu est le bénéfice net."],
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
