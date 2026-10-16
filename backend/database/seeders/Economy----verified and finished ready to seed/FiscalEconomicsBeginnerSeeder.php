<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class FiscalEconomicsBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'fiscal-economics')->firstOrFail();

        $settings = [
            ['duration' => 15, 'passing_score' => 50],
            ['duration' => 15, 'passing_score' => 55],
            ['duration' => 15, 'passing_score' => 60],
            ['duration' => 15, 'passing_score' => 60],
            ['duration' => 15, 'passing_score' => 60],
            ['duration' => 15, 'passing_score' => 65],
            ['duration' => 15, 'passing_score' => 65],
            ['duration' => 15, 'passing_score' => 70],
            ['duration' => 15, 'passing_score' => 70],
        ];

        // 'a' = index (0-based) de la bonne réponse dans 'c'
        $quizzes = [
            [
                'title' => "Fondamentaux de la politique budgétaire",
                'description' => "Quiz débutant sur les fondamentaux de la politique budgétaire.",
                'questions' => [
                    ['q' => "Qu’est-ce que la politique budgétaire ?", 'c' => ["La fixation des taux d’intérêt par la banque centrale pour contrôler les prix", "La négociation des salaires entre syndicats et employeurs d’un secteur", "L’usage des dépenses publiques et des impôts pour peser sur l’activité", "La gestion du cours de la monnaie sur le marché des changes"], 'a' => 2, 'e' => "Deux leviers : ce que l’État dépense et ce qu’il prélève. Les taux d’intérêt relèvent de la politique monétaire."],
                    ['q' => "Au Maroc, qui prépare le projet de loi de finances, et qui le vote ?", 'c' => ["Le gouvernement le prépare, le Parlement le vote", "La banque centrale le prépare, le gouvernement le vote", "Les communes le préparent, les entreprises le votent", "Le Parlement le prépare, la banque centrale le vote"], 'a' => 0, 'e' => "L’exécutif propose le budget, les élus l’adoptent : cette séparation des rôles fonde le contrôle démocratique."],
                    ['q' => "Parmi ces opérations, laquelle est une dépense publique ?", 'c' => ["Un ménage paie son loyer à son propriétaire", "Un contribuable verse son impôt à l’administration fiscale", "Une entreprise règle une facture à un fournisseur étranger", "L’État paie les salaires des enseignants des écoles publiques"], 'a' => 3, 'e' => "Dépense publique = argent qui sort des caisses de l’État. Le versement d’un impôt est, à l’inverse, une recette."],
                    ['q' => "Qu’est-ce qui distingue un impôt du prix d’un produit acheté sur un marché ?", 'c' => ["Il est facultatif et dépend du service demandé", "Il est obligatoire, sans contrepartie directe", "Il est versé par l’État aux ménages les plus modestes", "Il est un prêt consenti à l’État et remboursé avec intérêts"], 'a' => 1, 'e' => "On paie l’impôt même sans utiliser un service précis ; c’est ce qui le sépare d’un prix ou d’une redevance."],
                    ['q' => "Dans l’égalité PIB = C + I + G + (X − M), que désigne G ?", 'c' => ["Les gains réalisés par les entreprises privées", "Les dépenses publiques en biens et services", "Le total des importations", "La croissance annuelle du PIB"], 'a' => 1, 'e' => "G comme Gouvernement. Les transferts n’y figurent pas : ils ne rémunèrent aucune production."],
                    ['q' => "À quoi sert un budget public ?", 'c' => ["Il recense les dépenses faites par un ménage dans l’année", "Il fixe le prix de vente des produits de grande consommation", "Il enregistre les exportations et les importations du pays", "Il prévoit les recettes et les dépenses de l’État pour une période donnée"], 'a' => 3, 'e' => "C’est un document de prévision et d’autorisation, en général annuel, qui chiffre ce que l’État compte encaisser et dépenser."],
                    ['q' => "Quelle opération est un transfert public, au sens économique ?", 'c' => ["Le versement d’allocations familiales à des ménages", "L’achat d’ambulances pour un hôpital", "Le salaire d’un agent de la préfecture", "La construction d’une route par une entreprise de travaux"], 'a' => 0, 'e' => "Dans un transfert, l’État verse de l’argent sans recevoir de bien ni de travail en échange ; acheter ou salarier est une dépense de consommation ou d’investissement."],
                    ['q' => "Toutes choses égales par ailleurs, que provoque une baisse de l’impôt sur le revenu ?", 'c' => ["Une diminution du revenu disponible des ménages", "La disparition des dépenses publiques du pays", "Une hausse du revenu disponible des ménages", "Une hausse des prix fixée par l’État"], 'a' => 2, 'e' => "Moins de prélèvement, c’est plus de revenu à garder : revenu disponible = revenu − impôts + prestations."],
                    ['q' => "Pourquoi les routes et les ports sont-ils souvent financés par l’État ?", 'c' => ["Le marché les finance en priorité, sans difficulté", "Seuls des étrangers savent les construire", "Les entreprises privées n’ont pas besoin de transport", "Leurs bénéfices profitent à toute la société et se facturent mal"], 'a' => 3, 'e' => "Ce que rapporte une route dépasse ce qu’un investisseur privé pourrait encaisser ; la collectivité finance donc ce qui sert à tous."],
                    ['q' => "Un ménage gagne 10 000 MAD, paie 1 500 MAD d’impôts et reçoit 500 MAD d’allocations. Quel est son revenu disponible ?", 'c' => ["9 000 MAD", "8 500 MAD", "10 500 MAD", "11 000 MAD"], 'a' => 0, 'e' => "10 000 − 1 500 + 500 = 9 000. Les impôts se retranchent, les prestations s’ajoutent."],
                ],
            ],
            [
                'title' => "Recettes publiques et fiscalité",
                'description' => "Quiz débutant sur les recettes publiques et les principaux types d’impôts.",
                'questions' => [
                    ['q' => "La TVA est classée parmi les impôts indirects. Pourquoi ?", 'c' => ["Elle est calculée sur le revenu déclaré chaque année", "Elle est payée à l’achat d’un bien ou d’un service", "Elle est versée une fois par an par chaque salarié", "Elle taxe uniquement les bénéfices des sociétés"], 'a' => 1, 'e' => "Le consommateur la règle dans le prix, et le commerçant la reverse à l’État : l’impôt passe par un intermédiaire."],
                    ['q' => "Lequel de ces prélèvements est un impôt direct ?", 'c' => ["La TVA sur un téléphone", "Les droits de douane sur une voiture importée", "La taxe sur les boissons gazeuses", "L’impôt sur le revenu d’un salarié"], 'a' => 3, 'e' => "Un impôt direct frappe directement le revenu ou le patrimoine de la personne qui le paie, sans passer par le prix d’un bien."],
                    ['q' => "Un article coûte 250 MAD hors taxe et la TVA est de 20 %. Quel est le prix toutes taxes comprises ?", 'c' => ["300 MAD", "270 MAD", "275 MAD", "350 MAD, en doublant le taux de TVA"], 'a' => 0, 'e' => "20 % de 250 font 50 ; 250 + 50 = 300. Astuce : multiplier par 1,2."],
                    ['q' => "Laquelle de ces ressources n’est PAS une recette fiscale de l’État ?", 'c' => ["L’impôt sur les sociétés", "La TVA collectée sur les ventes", "Un emprunt émis sur le marché financier", "Les droits d’enregistrement sur une vente immobilière"], 'a' => 2, 'e' => "Emprunter procure des liquidités mais se rembourse : c’est un financement, pas une recette définitive comme l’impôt."],
                    ['q' => "Qu’est-ce qui caractérise un impôt progressif ?", 'c' => ["Son taux est le même pour tous les contribuables", "Son montant diminue quand le revenu augmente", "Son taux grimpe quand le revenu monte", "Il ne concerne que les plus jeunes"], 'a' => 2, 'e' => "Plus la base est élevée, plus la part prélevée augmente : c’est la logique des tranches de l’impôt sur le revenu."],
                    ['q' => "Que désigne l’assiette d’un impôt ?", 'c' => ["La base sur laquelle on applique le taux", "Le pourcentage prélevé sur chaque dirham gagné ou dépensé", "La date limite de paiement", "L’administration qui encaisse le produit"], 'a' => 0, 'e' => "Impôt = assiette × taux. L’assiette de l’impôt sur le revenu est le revenu imposable ; celle de la TVA, la valeur ajoutée."],
                    ['q' => "Un barème taxe à 0 % jusqu’à 30 000 MAD et à 10 % au-delà. Quel impôt pour un revenu de 40 000 MAD ?", 'c' => ["4 000 MAD, en taxant tout le revenu", "3 000 MAD", "0 MAD", "1 000 MAD"], 'a' => 3, 'e' => "Seuls les 10 000 MAD qui dépassent 30 000 sont taxés : 10 % × 10 000 = 1 000. Chaque tranche a son propre taux."],
                    ['q' => "Sur quoi porte principalement l’impôt sur les sociétés ?", 'c' => ["Sur le chiffre d’affaires encaissé auprès des clients", "Sur le bénéfice réalisé par l’entreprise", "Sur le salaire versé à chaque employé", "Sur le prix des marchandises importées"], 'a' => 1, 'e' => "On taxe ce qui reste après les charges : le bénéfice. La TVA, elle, suit les ventes. Au Maroc, une cotisation minimale peut tout de même être due en l’absence de bénéfice, sous réserve des exonérations."],
                    ['q' => "Quel est le but d’un droit de douane ?", 'c' => ["Taxer les produits qui franchissent la frontière", "Récompenser les entreprises qui exportent", "Financer les retraites des fonctionnaires", "Fixer le salaire minimum dans un secteur"], 'a' => 0, 'e' => "Il renchérit les importations : cela rapporte à l’État et protège parfois les producteurs nationaux."],
                    ['q' => "Une personne gagne 50 000 MAD et paie 5 000 MAD d’impôt ; son dernier dirham est taxé à 20 %. Quel est son taux moyen d’imposition ?", 'c' => ["5 %", "20 %", "50 %, la moitié du revenu", "10 %"], 'a' => 3, 'e' => "Taux moyen = impôt ÷ revenu = 5 000 ÷ 50 000 = 10 %. Le taux marginal de 20 % ne s’applique qu’à la dernière tranche."],
                ],
            ],
            [
                'title' => "Budget, déficit et dette publique",
                'description' => "Quiz débutant sur le budget public, le déficit et la dette publique.",
                'questions' => [
                    ['q' => "Qu’appelle-t-on déficit budgétaire ?", 'c' => ["Le fait que les recettes de l’année dépassent les dépenses", "Le total des emprunts accumulés depuis la création de l’État", "La baisse du PIB d’un trimestre à l’autre", "Le fait que les dépenses de l’année dépassent les recettes"], 'a' => 3, 'e' => "Le déficit se mesure sur une année : recettes − dépenses < 0. Le cas inverse s’appelle un excédent."],
                    ['q' => "Les recettes de l’État sont de 300 milliards de MAD et ses dépenses de 340. Quel est le solde budgétaire ?", 'c' => ["Un excédent de 40 milliards", "Un déficit de 40 milliards", "Un déficit de 640 milliards", "Un déficit de 14 milliards"], 'a' => 1, 'e' => "300 − 340 = −40. Le signe négatif indique un déficit, à financer par l’emprunt."],
                    ['q' => "Qu’est-ce que la dette publique ?", 'c' => ["Les impôts que les ménages n’ont pas encore payés", "Le déficit budgétaire d’une seule année", "L’ensemble des emprunts de l’État non remboursés", "Les dépenses prévues dans la loi de finances"], 'a' => 2, 'e' => "C’est un stock : la somme des déficits passés, nette des remboursements, que l’État doit encore aux prêteurs."],
                    ['q' => "Quelle phrase distingue correctement déficit et dette ?", 'c' => ["Le déficit est un flux annuel, la dette est un stock cumulé", "Le déficit est un stock, la dette est un flux annuel", "Le déficit et la dette désignent exactement la même chose", "La dette n’existe que lorsque le budget est en excédent"], 'a' => 0, 'e' => "Image de la baignoire : le déficit est le robinet qui coule cette année, la dette est le niveau d’eau accumulé."],
                    ['q' => "Une dette publique de 600 milliards pour un PIB de 1 000 milliards représente quel ratio dette/PIB ?", 'c' => ["40 %", "600 %", "60 %", "167 %"], 'a' => 2, 'e' => "600 ÷ 1 000 = 0,6, soit 60 %. On rapporte la dette au PIB pour juger de la capacité du pays à la porter."],
                    ['q' => "Que sont les intérêts de la dette ?", 'c' => ["Le prix payé à l’État par les prêteurs", "La rémunération versée aux prêteurs", "Une taxe sur les placements des épargnants", "Le remboursement du capital emprunté"], 'a' => 1, 'e' => "Emprunter coûte : l’État verse chaque année une charge d’intérêts, distincte du remboursement du capital."],
                    ['q' => "Recettes : 300 ; dépenses hors intérêts : 290 ; intérêts : 25 (en milliards). Quel est le solde primaire ?", 'c' => ["Un déficit de 15 milliards", "Un déficit de 25 milliards, intérêts compris", "Un excédent de 15 milliards", "Un excédent de 10 milliards"], 'a' => 3, 'e' => "Le solde primaire exclut les intérêts : 300 − 290 = +10. Le solde total est 300 − 315 = −15."],
                    ['q' => "Un journal titre : « La dette recule, car le déficit est passé de 50 à 30 milliards. » Quelle est l’erreur ?", 'c' => ["Un déficit, même réduit, ajoute encore à la dette", "Un déficit plus faible fait toujours baisser la dette", "La dette ne dépend jamais du déficit", "Le déficit se mesure en pourcentage et jamais en milliards"], 'a' => 0, 'e' => "Tant qu’il y a déficit, l’État emprunte : la dette augmente de 30 milliards, seulement moins vite qu’avant."],
                    ['q' => "Qu’est-ce que la dette extérieure d’un État ?", 'c' => ["La part de la dette détenue par les banques du pays", "La part de la dette détenue par des créanciers non résidents", "La dette contractée uniquement auprès du FMI", "La dette qui concerne les dépenses militaires"], 'a' => 1, 'e' => "Le critère est la résidence du créancier : un prêteur étranger, qu’il soit banque, fonds ou État, relève de la dette extérieure."],
                    ['q' => "Pourquoi un État peut-il juger acceptable d’emprunter pour construire un barrage ?", 'c' => ["Parce qu’un emprunt n’a jamais besoin d’être remboursé", "Parce que les intérêts sont toujours nuls", "L’ouvrage servira longtemps et sera utile", "Parce que cela supprime le besoin de voter un budget"], 'a' => 2, 'e' => "Financer un actif durable par l’emprunt répartit le coût sur les générations qui en profitent, à condition que le projet soit utile."],
                ],
            ],
            [
                'title' => "Dépenses publiques et biens collectifs",
                'description' => "Quiz débutant sur les dépenses publiques, les biens publics et les services collectifs.",
                'questions' => [
                    ['q' => "Un bien public pur se reconnaît à deux propriétés. Lesquelles ?", 'c' => ["Non-rivalité et non-exclusion", "Rareté et prix élevé", "Rivalité et exclusion par le prix", "Production par l’État et gratuité pour tous"], 'a' => 0, 'e' => "Mon usage n’empêche pas le vôtre (non-rivalité) et on ne peut écarter personne (non-exclusion). Être produit par l’État n’en fait pas un bien public pur."],
                    ['q' => "Lequel de ces biens se rapproche le plus d’un bien public pur ?", 'c' => ["Un repas pris dans un restaurant du centre-ville", "Un abonnement de téléphonie mobile", "Le signal lumineux d’un phare pour les navires", "Une place dans une salle de cinéma"], 'a' => 2, 'e' => "Impossible d’empêcher un navire de profiter de la lumière, et un navire de plus ne la réduit pas pour les autres."],
                    ['q' => "Pourquoi le marché produit-il trop peu de biens publics purs ?", 'c' => ["Les consommateurs n’en ont aucun besoin", "Il est impossible de faire payer ceux qui en profitent", "Les entreprises privées préfèrent produire à perte", "Les prix y sont fixés par la banque centrale"], 'a' => 1, 'e' => "Chacun peut profiter sans payer (passager clandestin) ; aucune entreprise privée ne couvre donc ses coûts."],
                    ['q' => "Un habitant refuse de cotiser à l’éclairage de son quartier en pensant que ses voisins paieront. Quel comportement décrit-on ?", 'c' => ["L’aléa moral", "L’effet d’éviction", "La concurrence parfaite", "Le passager clandestin"], 'a' => 3, 'e' => "Il compte profiter du service sans en supporter le coût : c’est le comportement de passager clandestin."],
                    ['q' => "Le salaire d’une infirmière de l’hôpital public et la construction d’un barrage sont respectivement…", 'c' => ["Investissement, puis fonctionnement", "Fonctionnement, puis investissement", "Deux dépenses de fonctionnement", "Un transfert, puis une recette fiscale de l’État"], 'a' => 1, 'e' => "Fonctionnement = coûts courants de l’année ; investissement = équipements durables qui serviront longtemps."],
                    ['q' => "Les poissons d’une zone de pêche ouverte à tous sont un bien commun. Quelle propriété les distingue d’un bien public pur ?", 'c' => ["Il est interdit à tout le monde d’en consommer", "Il n’est jamais rare", "Il est produit uniquement par l’État", "Chaque prise réduit le stock des autres"], 'a' => 3, 'e' => "Non-exclusion comme le bien public, mais rivalité en plus : chaque prise diminue le stock, d’où le risque de surexploitation."],
                    ['q' => "Une commune dispose de 10 millions de MAD : un stade ou une école. Quel est le coût d’opportunité du stade ?", 'c' => ["L’école que l’on ne pourra pas construire", "Les 10 millions de MAD déjà dépensés pour l’étude du terrain", "Le salaire du maire", "Le prix d’achat du terrain voisin"], 'a' => 0, 'e' => "Le coût d’opportunité est la meilleure alternative sacrifiée : ici, le projet auquel on renonce."],
                    ['q' => "Pourquoi une autoroute à péage n’est-elle pas un bien public pur ?", 'c' => ["Elle est gérée par une société concessionnaire", "Elle est trop longue pour servir à tous", "On peut empêcher un usager de passer s’il ne paie pas", "Les véhicules ne s’y gênent jamais"], 'a' => 2, 'e' => "Le péage rend l’exclusion possible, ce qui contredit la non-exclusion. Un bien public pur ne peut pas être réservé aux seuls payeurs."],
                    ['q' => "Les dépenses de l’État sont de 400 milliards pour un PIB de 1 000 milliards. Quelle part du PIB cela représente-t-il ?", 'c' => ["25 %", "2,5 %", "400 %", "40 %"], 'a' => 3, 'e' => "400 ÷ 1 000 = 0,40. Ce ratio mesure le poids de l’État dans l’économie."],
                    ['q' => "Retraites et allocations de santé sont des dépenses sociales. Comment se financent-elles en général ?", 'c' => ["Par la vente de monnaie à l’étranger", "Par les droits d’entrée des musées", "Par des cotisations sociales et des impôts", "Par les bénéfices des seules banques privées"], 'a' => 2, 'e' => "Les régimes sociaux reposent sur les cotisations des actifs et sur une partie du budget de l’État."],
                ],
            ],
            [
                'title' => "Politique budgétaire et cycle économique",
                'description' => "Quiz débutant sur la politique budgétaire, les récessions, les stabilisateurs automatiques et le multiplicateur.",
                'questions' => [
                    ['q' => "Quel signal décrit le mieux une récession ?", 'c' => ["Une hausse rapide des prix dans tous les secteurs", "Une baisse prolongée de l’activité, avec un PIB qui recule", "Une forte hausse des exportations", "Une réduction volontaire du déficit public"], 'a' => 1, 'e' => "Le PIB recule et le chômage tend à monter. La hausse générale des prix, elle, s’appelle inflation."],
                    ['q' => "En pleine récession, quelle mesure relève d’une politique budgétaire de relance ?", 'c' => ["Augmenter l’investissement public et baisser certains impôts", "Réduire les dépenses et relever la TVA", "Interdire les importations", "Vendre des actifs de l’État pour rembourser la dette"], 'a' => 0, 'e' => "On soutient la demande : plus de dépenses publiques, plus de revenu laissé aux ménages. Le but est de relancer l’activité."],
                    ['q' => "Quand l’économie surchauffe et que l’inflation s’emballe, quelle orientation budgétaire est adaptée ?", 'c' => ["Multiplier les chantiers publics et les aides", "Baisser tous les impôts sur la consommation", "Augmenter les salaires des fonctionnaires", "Réduire les dépenses ou relever les impôts"], 'a' => 3, 'e' => "On refroidit la demande pour limiter la hausse des prix : c’est une politique restrictive ou de rigueur."],
                    ['q' => "Les allocations chômage augmentent quand l’emploi baisse, sans nouveau vote. De quoi s’agit-il ?", 'c' => ["D’une mesure discrétionnaire du gouvernement", "D’un effet d’éviction", "D’un stabilisateur automatique", "D’une politique monétaire"], 'a' => 2, 'e' => "Les dépenses sociales montent et les impôts rentrent moins en récession, ce qui amortit la chute de la demande sans décision nouvelle."],
                    ['q' => "Avec une propension marginale à consommer de 0,8, quel est le multiplicateur simple ?", 'c' => ["5", "4", "8", "1,25"], 'a' => 0, 'e' => "k = 1 ÷ (1 − 0,8) = 1 ÷ 0,2 = 5. Une dépense supplémentaire de 2 milliards ferait monter le PIB d’environ 10 milliards, dans ce modèle simplifié."],
                    ['q' => "Qu’appelle-t-on effet d’éviction ?", 'c' => ["Les entreprises quittent le pays à cause des impôts", "Les ménages dépensent tout leur revenu", "L’emprunt public fait monter les taux d’intérêt", "L’État supprime des emplois publics"], 'a' => 2, 'e' => "L’emprunt public absorbe l’épargne et peut renchérir le crédit : une partie de l’investissement privé est « évincée »."],
                    ['q' => "Quel est le principal problème des mesures de relance décidées par le Parlement ?", 'c' => ["Elles sont immédiatement efficaces dans tous les cas", "Elles arrivent parfois trop tard", "Elles ne coûtent rien à l’État", "Elles réduisent forcément la dette"], 'a' => 1, 'e' => "Entre le diagnostic et l’effet réel, des mois peuvent passer : la relance risque d’arriver quand la reprise est déjà là."],
                    ['q' => "Pourquoi le multiplicateur est-il plus faible dans un pays qui importe beaucoup ?", 'c' => ["Les importations font baisser les prix intérieurs", "Les ménages consomment alors moins de produits locaux par choix", "Les droits de douane sont toujours nuls", "Une partie de la demande profite aux producteurs étrangers"], 'a' => 3, 'e' => "Les dirhams dépensés en produits importés quittent le circuit national : c’est une fuite qui réduit l’effet en chaîne."],
                    ['q' => "En récession, le déficit se creuse même sans nouvelle mesure. Pourquoi ?", 'c' => ["Les recettes baissent et les dépenses sociales montent", "Les impôts sont relevés automatiquement", "L’État prête davantage aux banques", "Les prix des biens publics sont gelés"], 'a' => 0, 'e' => "Moins de revenus et de bénéfices, donc moins d’impôts ; plus de chômeurs, donc plus d’allocations : l’écart se creuse tout seul."],
                    ['q' => "Un plan de relance voté par le Parlement après le début d’une crise est…", 'c' => ["Un stabilisateur automatique", "Une action discrétionnaire", "Une règle fixe du barème", "Un effet multiplicateur"], 'a' => 1, 'e' => "Discrétionnaire = décidée volontairement, par opposition aux stabilisateurs qui agissent d’eux-mêmes."],
                ],
            ],
            [
                'title' => "Redistribution et inégalités",
                'description' => "Quiz débutant sur la redistribution, les impôts, les transferts et les inégalités.",
                'questions' => [
                    ['q' => "Que désigne la redistribution des revenus ?", 'c' => ["Le fait de répartir les revenus de manière strictement égale entre tous", "La vente des entreprises publiques à des investisseurs", "Des prélèvements suivis de versements qui modifient la répartition", "Le partage des bénéfices entre actionnaires d’une société"], 'a' => 2, 'e' => "Impôts et cotisations d’un côté, prestations et services de l’autre : l’État corrige en partie la répartition issue du marché."],
                    ['q' => "Pourquoi un impôt progressif réduit-il les inégalités de revenu disponible ?", 'c' => ["Il frappe de la même façon chaque ménage", "Il impose davantage les bas revenus que les hauts revenus", "Il supprime le revenu des plus aisés", "Il prélève une part plus forte sur les hauts revenus"], 'a' => 3, 'e' => "Quand la part prélevée croît avec le revenu, l’écart entre revenus disponibles se resserre."],
                    ['q' => "Lequel de ces versements est un transfert social ?", 'c' => ["Le salaire d’un enseignant du privé", "Une allocation de chômage", "Le loyer payé à un propriétaire", "Le dividende d’une société cotée"], 'a' => 1, 'e' => "Un transfert social est une prestation versée sans contrepartie de travail, financée par des cotisations ou des impôts."],
                    ['q' => "Le coefficient de Gini vaut 0,2 dans un pays A et 0,5 dans un pays B. Que peut-on en déduire ?", 'c' => ["Les revenus sont plus également répartis dans le pays A", "Les revenus sont plus également répartis dans le pays B", "Le pays B est plus riche que le pays A", "Le pays A n’a pas de pauvres"], 'a' => 0, 'e' => "Gini égal à 0 : égalité parfaite ; égal à 1 : un seul individu détient tout. Plus il est bas, moins les inégalités sont marquées."],
                    ['q' => "Un salarié perçoit 8 000 MAD, paie 1 200 MAD d’impôts et de cotisations, et reçoit 700 MAD de prestations. Quel est son revenu disponible ?", 'c' => ["7 100 MAD", "9 900 MAD, en ajoutant les prélèvements", "6 800 MAD", "7 500 MAD"], 'a' => 3, 'e' => "8 000 − 1 200 + 700 = 7 500. Retenez : on retire les prélèvements, on ajoute les prestations."],
                    ['q' => "Pourquoi dit-on que la TVA est plutôt régressive ?", 'c' => ["Les ménages modestes consomment presque tout leur revenu", "Son taux baisse quand le prix du produit augmente, selon le barème", "Elle ne s’applique qu’aux ménages aisés", "Elle est calculée sur le patrimoine immobilier de chaque ménage"], 'a' => 0, 'e' => "Un ménage modeste dépense presque tout son revenu et supporte donc la TVA sur presque tout, alors qu’un ménage aisé en épargne une partie."],
                    ['q' => "Pourquoi appliquer un taux réduit de TVA à certains produits de première nécessité ?", 'c' => ["Pour augmenter le prix de ces produits", "Pour freiner la consommation de ces produits", "Pour alléger le budget des ménages modestes", "Pour encourager l’épargne des ménages aisés"], 'a' => 2, 'e' => "Ces produits pèsent lourd dans le budget des ménages modestes ; un taux réduit allège ce poids, même si l’outil reste imparfait."],
                    ['q' => "L’école publique gratuite est-elle une forme de redistribution ?", 'c' => ["Non, car aucun argent n’est versé aux familles", "Oui, c’est une redistribution en nature", "Non, seuls les transferts monétaires redistribuent", "Oui, mais seulement si l’école est privée"], 'a' => 1, 'e' => "L’État fournit un service financé par l’impôt : toutes les familles y ont accès, quelle que soit leur contribution."],
                    ['q' => "L’équité horizontale en matière d’impôt signifie que…", 'c' => ["Les plus riches paient forcément le double des autres", "Chaque ménage paie un impôt de même montant", "Les ménages en situation identique sont traités de la même façon", "Les ménages modestes ne paient aucun impôt"], 'a' => 2, 'e' => "Deux contribuables aux mêmes revenus et charges doivent payer la même chose. L’équité verticale concerne, elle, les situations différentes."],
                    ['q' => "Un taux d’imposition très élevé peut décourager le travail supplémentaire. Quel arbitrage cela illustre-t-il ?", 'c' => ["Entre équité et efficacité", "Entre importations et exportations", "Entre épargne et consommation de la banque centrale", "Entre salaire nominal et salaire réel"], 'a' => 0, 'e' => "Redistribuer davantage réduit les inégalités, mais un prélèvement trop lourd peut freiner l’effort : il faut chercher un équilibre."],
                ],
            ],
            [
                'title' => "Fiscalité et comportement économique",
                'description' => "Quiz débutant sur les taxes, les externalités, les avantages fiscaux et la fraude fiscale.",
                'questions' => [
                    ['q' => "Une usine rejette des fumées qui dégradent la santé des riverains. De quel phénomène s’agit-il ?", 'c' => ["D’une externalité positive", "D’un bien public pur", "D’une subvention à la production", "D’une externalité négative"], 'a' => 3, 'e' => "Un coût est imposé à des tiers sans compensation : l’usine ne le paie pas, la société oui."],
                    ['q' => "Qu’est-ce qu’une taxe pigouvienne ?", 'c' => ["Une taxe sur les bénéfices de toutes les entreprises", "Une taxe qui fait payer au pollueur le dommage causé", "Une taxe réservée aux produits importés", "Une taxe versée par les ménages modestes"], 'a' => 1, 'e' => "Elle « internalise » l’externalité : le prix reflète le dommage causé, ce qui incite à polluer moins."],
                    ['q' => "Pourquoi l’État taxe-t-il fortement le tabac ?", 'c' => ["Pour réduire la consommation et couvrir une partie des coûts de santé", "Pour encourager les agriculteurs à en produire davantage", "Pour faire baisser le prix des cigarettes", "Pour obliger les fumeurs à épargner"], 'a' => 0, 'e' => "Le tabac coûte à la société (soins, maladies) au-delà du fumeur : la taxe corrige le prix et rapporte des recettes."],
                    ['q' => "Une entreprise installe des panneaux solaires et obtient une réduction d’impôt. Que révèle cet avantage fiscal ?", 'c' => ["Une volonté de décourager l’investissement écologique", "Une hausse automatique de l’impôt sur le revenu", "Une incitation à investir dans une activité jugée utile", "Une règle de répartition des dividendes"], 'a' => 2, 'e' => "Un avantage fiscal baisse le coût d’une action que l’État veut encourager ; en contrepartie, il renonce à une recette."],
                    ['q' => "Quelle situation relève de la fraude fiscale ?", 'c' => ["Un contribuable choisit un dispositif légal de réduction d’impôt", "Un commerçant dissimule une partie de ses ventes pour payer moins", "Une entreprise reporte une perte sur l’année suivante comme la loi le permet", "Un salarié place une partie de son épargne sur un compte exonéré"], 'a' => 1, 'e' => "La fraude est illégale : on cache des revenus ou on falsifie. Les autres cas relèvent de l’optimisation permise par la loi."],
                    ['q' => "Une taxe de 2 MAD par litre de carburant : la consommation passe de 100 à 90 millions de litres. Quelles recettes pour l’État ?", 'c' => ["200 millions de MAD, sans effet sur la demande", "20 millions de MAD", "90 millions de MAD", "180 millions de MAD"], 'a' => 3, 'e' => "2 × 90 = 180 millions de MAD. La taxe rapporte moins que prévu, car la consommation a un peu reculé."],
                    ['q' => "Pourquoi taxer un bien dont la demande réagit peu au prix rapporte-t-il beaucoup ?", 'c' => ["Parce que les producteurs baissent leur prix de moitié", "Parce que ce bien est exempté de TVA", "Parce que les acheteurs en achètent à peine moins", "Parce que les importations augmentent aussitôt"], 'a' => 2, 'e' => "Demande peu élastique : le volume change peu, donc l’assiette reste large. C’est l’argument pour taxer le sel, l’essence ou les cigarettes."],
                    ['q' => "Lorsqu’une taxe est instaurée sur les ventes, qui en supporte réellement le poids ?", 'c' => ["Les deux, selon la sensibilité de la demande et de l’offre", "Le seul producteur, puisque c’est lui qui la reverse à l’État", "Uniquement le consommateur final", "Ni l’un ni l’autre : l’État absorbe la taxe"], 'a' => 0, 'e' => "C’est l’incidence fiscale : la partie du prix qui monte pour l’acheteur dépend des élasticités, pas de celui qui remplit le formulaire."],
                    ['q' => "Que dit en substance la courbe de Laffer ?", 'c' => ["Plus le taux est élevé, plus les recettes augmentent", "Au-delà d’un taux, les recettes peuvent baisser", "Les recettes sont indépendantes du taux d’imposition", "Le taux optimal d’impôt est de 50 %"], 'a' => 1, 'e' => "À 0 % comme à 100 %, rien n’est collecté (plus d’activité ou plus de déclaration) ; entre les deux, il existe un maximum."],
                    ['q' => "La vaccination protège aussi les personnes non vaccinées. Pourquoi l’État la subventionne-t-il parfois ?", 'c' => ["Elle ne coûte rien à produire", "Elle est interdite aux entreprises privées", "Elle crée un bénéfice collectif que le prix de marché ignore", "Elle fait monter la demande de médicaments de luxe"], 'a' => 2, 'e' => "Externalité positive : l’individu ne perçoit que son bénéfice propre, le marché en produit trop peu ; la subvention rapproche l’offre de l’intérêt collectif."],
                ],
            ],
            [
                'title' => "Fiscalité, croissance et investissement",
                'description' => "Quiz débutant sur les liens entre fiscalité, investissement, productivité et croissance économique.",
                'questions' => [
                    ['q' => "Pourquoi les dépenses publiques en routes, ports et réseaux électriques peuvent-elles soutenir la croissance ?", 'c' => ["Elles abaissent les coûts des entreprises", "Elles réduisent la population active", "Elles font disparaître le besoin d’investissement privé", "Elles rendent les importations obligatoires"], 'a' => 0, 'e' => "De meilleures infrastructures raccourcissent les délais et réduisent les coûts : chaque dirham privé investi produit alors davantage."],
                    ['q' => "Un crédit d’impôt recherche vise principalement à…", 'c' => ["Réduire le déficit en quelques mois", "Freiner l’embauche d’ingénieurs", "Encourager les entreprises à financer des activités d’innovation", "Récompenser les entreprises qui exportent le plus"], 'a' => 2, 'e' => "En diminuant le coût net de la recherche, on incite à investir dans l’innovation, moteur de gains de productivité à long terme."],
                    ['q' => "Une baisse de l’impôt sur les sociétés peut stimuler l’investissement parce que…", 'c' => ["Elle augmente les coûts de production des entreprises", "Elle rend les prêts bancaires gratuits", "Elle supprime la concurrence", "Elle améliore la rentabilité des projets"], 'a' => 3, 'e' => "Si l’État prélève moins sur le bénéfice, un projet qui paraissait juste rentable le devient. L’effet n’est pas garanti pour autant."],
                    ['q' => "Quelle dépense publique relève de l’investissement dans le capital humain ?", 'c' => ["Le financement d’un nouveau stade de sport", "Le financement de la formation des enseignants et des écoles", "Le versement des intérêts de la dette", "L’achat de véhicules de fonction"], 'a' => 1, 'e' => "Capital humain = savoirs et compétences des travailleurs. Éducation et santé augmentent leur productivité future."],
                    ['q' => "Les recettes fiscales atteignent 250 milliards de MAD pour un PIB de 1 000 milliards. Quelle est la pression fiscale ?", 'c' => ["25 %", "4 %", "40 %", "250 %"], 'a' => 0, 'e' => "250 ÷ 1 000 = 25 %. La pression fiscale rapporte les prélèvements au PIB."],
                    ['q' => "Dans un pays voisin, l’impôt sur les sociétés est abaissé pour attirer des entreprises. Comment nomme-t-on cette stratégie ?", 'c' => ["L’effet de levier", "Le multiplicateur budgétaire de l’État", "La concurrence fiscale entre États", "La redistribution verticale"], 'a' => 2, 'e' => "Les États se disputent les investisseurs en baissant les taux ; si tous le font, les recettes publiques diminuent sans que personne ne gagne."],
                    ['q' => "Une politique de l’offre cherche surtout à…", 'c' => ["Augmenter la demande des ménages en distribuant des allocations", "Augmenter les prix des produits agricoles", "Fixer un plafond de salaires dans chaque secteur", "Accroître la capacité de production des entreprises"], 'a' => 3, 'e' => "On agit sur la production : coûts, incitations, formation. À l’inverse, la politique de la demande agit sur la consommation et les commandes."],
                    ['q' => "Le PIB passe de 500 à 515 milliards de MAD en un an. Quel est le taux de croissance ?", 'c' => ["30 %", "3 %", "15 %", "0,3 %"], 'a' => 1, 'e' => "(515 − 500) ÷ 500 = 0,03, soit 3 %. Le taux se calcule sur la valeur de départ."],
                    ['q' => "Un État accorde à de nouveaux investisseurs étrangers une exonération d’impôt pendant cinq ans. Quel est le principal risque de ce type de mesure ?", 'c' => ["Un gain de recettes pour l’État dès la première année", "Une baisse de la valeur de la monnaie", "Un manque à gagner pour les finances de l’État", "Une interdiction de produire dans le pays"], 'a' => 2, 'e' => "L’exonération coûte des recettes ; elle n’est utile que si elle fait venir des projets qui ne seraient pas arrivés sans elle."],
                    ['q' => "Emprunter pour financer des projets peut se justifier si…", 'c' => ["Le taux d’intérêt est supérieur au taux de croissance", "Le rendement économique du projet dépasse le coût de l’emprunt", "L’emprunt est destiné à payer des dépenses courantes", "Le pays n’a pas de budget voté"], 'a' => 1, 'e' => "Si l’investissement rapporte plus que ce que coûtent les intérêts, la dette se finance par les gains qu’elle crée."],
                ],
            ],
            [
                'title' => "Finances publiques et gestion économique",
                'description' => "Quiz débutant sur le budget de l’État, son vote, son contrôle et les règles de gestion des finances publiques.",
                'questions' => [
                    ['q' => "Que prévoit en général la loi de finances de l’année ?", 'c' => ["Les salaires du secteur privé", "Les recettes et les dépenses autorisées pour l’année", "Les taux d’intérêt directeurs", "Les prix des produits subventionnés dans chaque région"], 'a' => 1, 'e' => "C’est le texte voté par le Parlement qui autorise l’État à encaisser les recettes et à engager les dépenses de l’exercice."],
                    ['q' => "Le principe d’annualité budgétaire signifie que…", 'c' => ["L’autorisation de dépenser est valable plusieurs dizaines d’années", "Les impôts sont fixés une fois pour toutes", "Le budget est voté pour dix ans à la fois", "L’autorisation est donnée pour un an, puis renouvelée"], 'a' => 3, 'e' => "Chaque année, le Parlement redonne son feu vert : cela permet un contrôle régulier de l’usage de l’argent public."],
                    ['q' => "Quel est le rôle de la Cour des comptes ?", 'c' => ["Contrôler la régularité de l’usage des fonds publics", "Voter les lois de finances", "Fixer les taux d’intérêt", "Percevoir les impôts à la place de l’administration fiscale"], 'a' => 0, 'e' => "Institution indépendante : elle vérifie que l’argent public est utilisé selon les règles et publie ses constats."],
                    ['q' => "Selon la « règle d’or » budgétaire, un État ne devrait emprunter que pour…", 'c' => ["Rembourser des dettes plus anciennes", "Payer les salaires de l’année", "Financer des investissements", "Augmenter les prestations sociales"], 'a' => 2, 'e' => "Idée : financer à crédit ce qui servira longtemps (routes, écoles), mais couvrir les dépenses courantes par les recettes courantes."],
                    ['q' => "Que signifie le principe d’universalité du budget ?", 'c' => ["Seules les recettes les plus importantes sont inscrites", "Chaque recette finance obligatoirement une dépense précise", "Le budget s’applique à tous les pays voisins", "Toutes les recettes et dépenses sont inscrites sans compensation"], 'a' => 3, 'e' => "On inscrit les montants bruts, sans les compenser : le Parlement voit tout et peut contrôler l’ensemble."],
                    ['q' => "Les critères de Maastricht fixent notamment un déficit maximal de 3 % du PIB et une dette maximale de…", 'c' => ["60 % du PIB", "30 % du PIB", "100 % du PIB", "3 % du PIB"], 'a' => 0, 'e' => "Repère : 3 et 60. Ce sont des règles de discipline budgétaire pour les pays de l’Union européenne qui adoptent l’euro."],
                    ['q' => "Dans l’ordre, quelles sont les grandes étapes du cycle budgétaire ?", 'c' => ["Exécution, vote, contrôle, préparation", "Contrôle, préparation, vote, puis exécution", "Préparation, vote, exécution, contrôle", "Vote, contrôle, exécution, préparation"], 'a' => 2, 'e' => "On prépare le projet, le Parlement le vote, l’administration l’exécute, puis des organes vérifient. Le cycle redémarre avec l’année suivante."],
                    ['q' => "Pourquoi sépare-t-on l’ordonnateur (qui décide la dépense) du comptable (qui paie) ?", 'c' => ["Pour augmenter le nombre de fonctionnaires", "Pour réduire les risques d’erreur ou de détournement", "Pour accélérer tous les paiements", "Pour supprimer toute vérification"], 'a' => 1, 'e' => "Deux personnes différentes, donc un contrôle croisé : celui qui engage la dépense ne manipule pas lui-même les fonds."],
                    ['q' => "Un budget pluriannuel, sur trois ans par exemple, sert surtout à…", 'c' => ["Planifier les recettes et les dépenses au-delà de l’année en cours", "Supprimer le vote annuel du Parlement", "Empêcher toute dépense nouvelle", "Fixer les prix des biens sur trois ans"], 'a' => 0, 'e' => "Un horizon de plusieurs années aide à programmer les grands projets et à vérifier que les engagements restent finançables."],
                    ['q' => "Recettes : 450 ; dépenses totales : 480 dont intérêts : 30 (en milliards). Quel est le solde primaire ?", 'c' => ["Un déficit de 30 milliards", "Un excédent de 30 milliards", "Un déficit de 60 milliards", "Un équilibre"], 'a' => 3, 'e' => "Hors intérêts, les dépenses valent 450 : 450 − 450 = 0. Le déficit total de 30 vient entièrement de la charge de la dette."],
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
