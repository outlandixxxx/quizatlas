<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class BehavioralEconomicsBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'behavioral-economics')->firstOrFail();

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
                'title' => "Découvrir l’économie comportementale",
                'description' => "Notions fondamentales sur les décisions économiques et les limites de la rationalité.",
                'questions' => [
                    ['q' => "L’économie comportementale étudie surtout…", 'c' => ["la manière dont les États fixent les taux de change", "la façon dont les entreprises organisent leur production", "l’effet de la psychologie sur les décisions économiques", "la mesure de la croissance des pays en développement"], 'a' => 2, 'e' => "Elle associe économie et psychologie : on observe comment les gens décident réellement, pas comment ils devraient décider."],
                    ['q' => "À la caisse d’un supermarché, un client prend sans réfléchir des bonbons exposés près du tapis. Quel comportement décrit-il ?", 'c' => ["un achat impulsif", "une décision mûrement calculée", "un arbitrage entre travail et loisir", "une substitution entre deux biens"], 'a' => 0, 'e' => "Pas de comparaison ni de calcul ici : l’achat est déclenché sur le moment par l’exposition du produit."],
                    ['q' => "Pourquoi Herbert Simon parle-t-il de rationalité limitée ?", 'c' => ["Parce que les individus choisissent au hasard", "Parce que les prix limitent les achats possibles", "Parce que les individus refusent de comparer les options", "Parce que le temps, l’information et l’attention sont limités"], 'a' => 3, 'e' => "On cherche à être rationnel, mais avec des ressources mentales et des informations bornées ; ce n’est ni du hasard ni un refus de réfléchir."],
                    ['q' => "Karim cherche un appartement : il visite jusqu’à en trouver un qui répond à ses critères, puis il s’arrête. Cette démarche correspond à…", 'c' => ["l’examen exhaustif de toutes les offres du marché", "le choix d’une option qui satisfait ses critères", "l’application mécanique de la loi de l’offre", "la recherche du prix le plus bas possible"], 'a' => 1, 'e' => "C’est le « satisficing » de Simon : s’arrêter à une solution suffisamment bonne plutôt que chercher la meilleure à tout prix."],
                    ['q' => "Un yaourt est présenté soit « 90 % sans matières grasses », soit « 10 % de matières grasses ». Les ventes diffèrent alors que le produit est identique. Qu’est-ce qui joue ?", 'c' => ["la variation du coût de production", "un changement du revenu des acheteurs", "la modification de la composition du produit", "la manière dont l’information est présentée"], 'a' => 3, 'e' => "Même contenu, formulation différente : c’est le cadrage. Les options réelles n’ont pas changé, seule leur présentation."],
                    ['q' => "Une heuristique est…", 'c' => ["un raccourci mental pour décider vite", "une règle fiscale appliquée aux entreprises", "un calcul exact de toutes les issues possibles", "une méthode de mesure de la production nationale"], 'a' => 0, 'e' => "Pense à « règle du pouce » : simple et rapide, souvent utile, parfois source d’erreurs."],
                    ['q' => "Lequel de ces comportements relève d’une préférence sociale ?", 'c' => ["Comparer deux taux d’intérêt avant d’emprunter", "Acheter le produit le moins cher du rayon", "Faire un don mensuel à une association", "Placer son épargne sur un compte rémunéré"], 'a' => 2, 'e' => "Une préférence sociale pèse le sort des autres dans la décision : donner, partager ou exiger l’équité ne rapporte rien à soi-même."],
                    ['q' => "Quelle hypothèse du modèle économique classique l’économie comportementale remet-elle en cause ?", 'c' => ["La rareté des ressources", "La rationalité parfaite des individus", "L’existence d’une contrainte budgétaire", "Le rôle des prix sur les marchés"], 'a' => 1, 'e' => "Les budgets limités et les prix restent valables ; ce que l’on conteste, c’est l’homo oeconomicus qui calcule tout sans erreur."],
                    ['q' => "Nadia achète le même thé depuis des années sans comparer, simplement parce qu’elle le connaît. Quel facteur explique son choix ?", 'c' => ["la familiarité avec la marque", "la recherche du prix minimal", "l’arbitrage entre travail et loisir", "l’anticipation d’une pénurie"], 'a' => 0, 'e' => "Connaître un produit rassure et évite l’effort de comparer : l’habitude pèse sur le choix indépendamment du prix."],
                    ['q' => "Quel énoncé décrit le mieux une décision économique réelle ?", 'c' => ["Elle ne dépend que du revenu disponible", "Elle est la même pour tous face aux mêmes prix", "Elle ne varie pas selon la façon dont l’offre est présentée", "Elle peut varier selon le contexte et les incitations"], 'a' => 3, 'e' => "Revenu et prix comptent, mais la présentation, les habitudes et l’environnement modifient aussi le choix."],
                ],
            ],
            [
                'title' => "Heuristiques et biais de jugement",
                'description' => "Reconnaître les raccourcis mentaux et les biais fréquents dans les choix économiques.",
                'questions' => [
                    ['q' => "Un vendeur affiche d’abord 900 DH barré, puis 600 DH. Le premier chiffre sert de repère pour juger le second : c’est…", 'c' => ["l’effet de dotation", "l’effet d’ancrage", "l’aversion au risque", "la préférence pour le présent"], 'a' => 1, 'e' => "Le chiffre de départ « ancre » le jugement : 600 DH paraît bon seulement parce qu’on le compare à 900."],
                    ['q' => "Après plusieurs reportages sur des crashs d’avion, Omar juge l’avion plus dangereux que la route. Quel biais l’explique ?", 'c' => ["l’effet de cadrage des probabilités", "la comptabilité mentale du ménage", "le biais de confirmation des idées", "l’heuristique de disponibilité"], 'a' => 3, 'e' => "Ce qui revient facilement en mémoire paraît fréquent. Or la route tue bien plus que l’avion."],
                    ['q' => "Un investisseur ne lit que les articles qui soutiennent son choix d’action et ignore les autres. Quel biais montre-t-il ?", 'c' => ["un biais de confirmation", "une aversion aux pertes", "un effet de dotation", "une comptabilité mentale"], 'a' => 0, 'e' => "On cherche ce qui nous donne raison. Pour s’en protéger, il faut aller lire exprès l’avis contraire."],
                    ['q' => "Imane juge qu’un candidat réussira en affaires parce qu’il ressemble à l’image qu’elle se fait d’un chef d’entreprise. Elle raisonne surtout par…", 'c' => ["l’ancrage sur un premier chiffre", "la disponibilité des souvenirs récents", "la ressemblance à un modèle type", "la diversification des placements"], 'a' => 2, 'e' => "Juger sur la ressemblance à un stéréotype, sans regarder les statistiques de réussite, c’est l’heuristique de représentativité."],
                    ['q' => "Yassine a payé six mois d’abonnement à une salle de sport qu’il n’aime plus et y va quand même « pour ne pas perdre l’argent ». Quel biais est en cause ?", 'c' => ["l’effet d’ancrage sur le prix affiché", "la préférence pour l’équité", "le biais des coûts irrécupérables", "le cadrage positif de l’offre"], 'a' => 2, 'e' => "L’argent déjà versé est perdu quoi qu’il fasse ; seule compte la comparaison entre coûts et bénéfices à venir."],
                    ['q' => "Pourquoi une heuristique est-elle souvent utile malgré ses limites ?", 'c' => ["Elle économise du temps et de l’attention", "Elle donne le résultat optimal dans les cas complexes", "Elle élimine l’incertitude sur l’avenir", "Elle rend l’information sur les prix inutile"], 'a' => 0, 'e' => "Elle offre une réponse acceptable à moindre effort, mais ne garantit pas l’optimum et peut conduire à des biais."],
                    ['q' => "Après sa promotion, Sara l’attribue à son talent ; après un échec, elle accuse la malchance. Quel biais ?", 'c' => ["l’effet de dotation", "le biais d’auto-complaisance", "l’aversion au risque", "le biais du statu quo"], 'a' => 1, 'e' => "Se féliciter des succès et rejeter la faute des échecs sur l’extérieur protège l’image de soi, mais fausse l’analyse."],
                    ['q' => "Quel comportement illustre le biais du statu quo ?", 'c' => ["Changer d’opérateur dès qu’une promotion apparaît", "Surévaluer un objet parce qu’on le possède déjà", "Imiter le choix de la majorité de son entourage", "Rester sur son forfait sans comparer d’offres"], 'a' => 3, 'e' => "Le statu quo, c’est ne rien changer par défaut. La deuxième réponse décrit l’effet de dotation, la troisième la preuve sociale."],
                    ['q' => "Un site affiche « Meilleure vente » sur un article, ce qui pousse Zineb à l’acheter. Elle est sensible à…", 'c' => ["l’ancrage sur le prix", "la preuve sociale", "la comptabilité mentale", "la préférence pour le présent"], 'a' => 1, 'e' => "Si beaucoup d’autres l’ont choisi, on suppose que c’est un bon choix : on se fie au comportement des autres."],
                    ['q' => "Quel moyen aide à limiter un biais de jugement ?", 'c' => ["Décider vite sans relire son choix", "Trancher dès la première impression", "Chercher les données qui contredisent son idée", "Reprendre l’option qu’on a l’habitude de choisir"], 'a' => 2, 'e' => "Se confronter aux informations qui nous donnent tort, c’est le meilleur antidote aux biais de confirmation et d’ancrage."],
                ],
            ],
            [
                'title' => "Aversion aux pertes et choix risqués",
                'description' => "Comprendre les réactions aux gains, aux pertes et à l’incertitude.",
                'questions' => [
                    ['q' => "Selon l’aversion aux pertes, une perte de 100 DH est ressentie…", 'c' => ["plus fortement qu’un gain de 100 DH", "moins fortement qu’un gain de 100 DH", "avec la même intensité qu’un gain de 100 DH", "comme une simple variation de prix"], 'a' => 0, 'e' => "Kahneman et Tversky observent qu’une perte pèse environ deux fois plus qu’un gain de même montant."],
                    ['q' => "Houda refuse de vendre sa vieille montre 200 DH, alors qu’elle ne l’achèterait pas à ce prix. Quel phénomène est à l’œuvre ?", 'c' => ["la sélection adverse", "l’effet de réseau", "l’effet de dotation", "le biais de confirmation"], 'a' => 2, 'e' => "Posséder un objet le fait valoir plus à nos yeux : c’est l’effet de dotation, lié à l’aversion aux pertes."],
                    ['q' => "Une loterie donne 50 % de chances de gagner 100 DH et 50 % de ne rien gagner. Quel est le gain espéré ?", 'c' => ["25 DH", "50 DH", "75 DH", "100 DH"], 'a' => 1, 'e' => "Espérance = 0,5 × 100 + 0,5 × 0 = 50 DH : on pondère chaque gain par sa probabilité."],
                    ['q' => "Deux ménages de même revenu ont le même placement risqué sous les yeux : l’un l’accepte, l’autre le refuse. Pourquoi est-ce possible ?", 'c' => ["La probabilité du gain change pour chacun", "Le rendement espéré dépend du métier exercé", "Un seul des deux ménages subit l’inflation", "Leur tolérance au risque n’est pas la même"], 'a' => 3, 'e' => "Le risque objectif est identique ; c’est l’attitude face au risque, propre à chacun, qui diffère."],
                    ['q' => "Rachida préfère recevoir 50 DH sûrs plutôt que jouer une loterie à 50 % de gagner 100 DH, sinon rien. Son attitude est…", 'c' => ["l’aversion au risque", "le goût du risque", "l’indifférence au risque", "la préférence pour le présent"], 'a' => 0, 'e' => "À espérance égale (50 DH), elle choisit le sûr : elle fuit l’incertitude, c’est l’aversion au risque."],
                    ['q' => "Après avoir perdu au jeu, Amine mise davantage pour « se refaire ». Que traduit ce comportement ?", 'c' => ["Il réduit son risque pour protéger son capital", "Il prend plus de risque pour se refaire", "Il compare froidement l’espérance de gain", "Il ajuste sa mise au taux d’intérêt"], 'a' => 1, 'e' => "Dans le domaine des pertes, on tend à accepter un risque plus grand pour retrouver son point de départ."],
                    ['q' => "Dans la théorie des perspectives, un résultat est jugé comme un gain ou une perte…", 'c' => ["d’après sa valeur absolue en dirhams", "d’après le prix du marché mondial", "d’après le taux de croissance du pays", "par rapport à une situation de départ"], 'a' => 3, 'e' => "Recevoir 3 000 DH est un gain si l’on en attendait 2 000, une déception si l’on en attendait 4 000 : tout dépend du point de référence."],
                    ['q' => "Un ménage averse au risque souscrit une assurance habitation. Quel est l’effet principal pour lui ?", 'c' => ["Elle diminue la probabilité qu’un incendie survienne", "Elle augmente son revenu disponible de chaque mois", "Elle atténue le choc financier d’un sinistre", "Elle supprime ses dépenses d’entretien courant"], 'a' => 2, 'e' => "L’assurance ne change pas la probabilité du sinistre : elle échange une petite dépense certaine contre la protection d’une grosse perte."],
                    ['q' => "Laquelle de ces situations est un cas de risque, au sens de plusieurs issues possibles de probabilités connues ?", 'c' => ["Un salaire fixe versé chaque mois", "Un loyer fixé par contrat de bail", "Un tirage à une chance sur cent", "Un prix imposé par l’administration"], 'a' => 2, 'e' => "Les trois autres sont des montants certains. Le tirage a deux issues possibles avec des probabilités connues."],
                    ['q' => "Quelle notion n’appartient PAS à la théorie des perspectives ?", 'c' => ["le coût marginal", "le point de référence", "l’aversion aux pertes", "la sensibilité décroissante"], 'a' => 0, 'e' => "Le coût marginal relève de la théorie de la production. Les trois autres décrivent comment on perçoit gains et pertes."],
                ],
            ],
            [
                'title' => "Préférences dans le temps et consommation",
                'description' => "Explorer la préférence pour le présent, la procrastination et la comptabilité mentale.",
                'questions' => [
                    ['q' => "On propose à Hamza 100 DH aujourd’hui ou 110 DH dans un mois ; il prend les 100 DH tout de suite. Cela illustre…", 'c' => ["l’aversion aux pertes subies", "l’effet de dotation sur l’objet", "la comptabilité mentale du budget", "la préférence pour le présent"], 'a' => 3, 'e' => "Une récompense immédiate attire plus qu’une récompense plus grande mais différée : on survalorise le présent."],
                    ['q' => "Lina remet chaque semaine l’ouverture d’un plan d’épargne dont elle connaît l’utilité. Comment nomme-t-on ce comportement ?", 'c' => ["Une préférence sociale marquée", "La procrastination", "Un effet de réseau", "Une illusion monétaire"], 'a' => 1, 'e' => "Repousser une décision utile à plus tard : le coût est immédiat, le bénéfice lointain, donc on diffère."],
                    ['q' => "Ali dépense sans compter une prime inattendue, mais surveille chaque dirham de son salaire. Quel mécanisme est à l’œuvre ?", 'c' => ["l’aversion au risque", "l’effet d’ancrage", "la comptabilité mentale", "la rationalité parfaite"], 'a' => 2, 'e' => "L’argent est rangé dans des « comptes » mentaux (salaire sérieux, prime plaisir), alors qu’un dirham reste un dirham."],
                    ['q' => "Avec un taux d’intérêt de 10 % par an, 1000 DH placés aujourd’hui valent, dans un an…", 'c' => ["1 100 DH", "1 010 DH", "1 200 DH", "1 000 DH"], 'a' => 0, 'e' => "1000 × (1 + 0,10) = 1 100 DH. Ce principe sert à comparer une somme tout de suite et une somme plus tard."],
                    ['q' => "Un étudiant décide le soir de se lever tôt, mais éteint son réveil le matin. Quel phénomène illustre-t-il ?", 'c' => ["l’effet d’ancrage sur l’heure", "l’incohérence temporelle", "l’aversion aux pertes de sommeil", "l’heuristique de disponibilité"], 'a' => 1, 'e' => "Ses préférences changent avec le temps : le soir il valorise l’avenir, le matin il privilégie le confort immédiat."],
                    ['q' => "Pour épargner, Rachid demande à sa banque un virement automatique le jour de la paie. Quelle stratégie utilise-t-il ?", 'c' => ["la diversification du portefeuille", "la recherche du meilleur taux", "la discrimination par les prix", "l’engagement préalable"], 'a' => 3, 'e' => "Il s’attache d’avance les mains : une fois le virement programmé, la tentation de dépenser ne peut plus l’emporter."],
                    ['q' => "Mina répartit son budget en deux enveloppes, « courses » et « loisirs », et refuse de prendre dans l’une pour l’autre, même quand cela l’arrangerait. Son comportement montre que l’argent est…", 'c' => ["classé dans des comptes mentaux", "valorisé selon le taux d’intérêt", "jugé d’après sa seule valeur réelle", "réparti de façon optimale"], 'a' => 0, 'e' => "En théorie, l’argent est fongible. En pratique, on lui attribue des usages et on s’interdit de les mélanger."],
                    ['q' => "Une personne préfère 100 DH aujourd’hui à 110 DH demain, mais préfère 110 DH dans 31 jours à 100 DH dans 30 jours. Ce renversement caractérise…", 'c' => ["l’escompte exponentiel", "l’aversion pour l’inégalité", "l’escompte hyperbolique", "l’effet de cadrage"], 'a' => 2, 'e' => "Avec un escompte constant, l’écart d’un jour serait jugé pareil partout. Ici le présent pèse trop : c’est l’escompte hyperbolique."],
                    ['q' => "On dépense souvent plus avec une carte bancaire qu’avec des espèces. Quelle explication donne l’économie comportementale ?", 'c' => ["Les prix affichés y sont plus élevés qu’en espèces", "La monnaie scripturale est moins répandue", "Le revenu du ménage augmente lors du paiement", "La douleur de payer est atténuée"], 'a' => 3, 'e' => "Voir des billets partir fait mal ; la carte rend le paiement abstrait et facilite l’achat."],
                    ['q' => "Quel comportement n’est PAS une manifestation de la préférence pour le présent ?", 'c' => ["Reporter ses économies à plus tard", "Épargner chaque mois pour sa retraite", "Prendre 100 DH tout de suite plutôt que 120 DH plus tard", "Acheter à crédit sur un coup de tête"], 'a' => 1, 'e' => "Mettre de côté chaque mois sacrifie le présent pour l’avenir ; les autres exemples donnent la priorité à l’immédiat."],
                ],
            ],
            [
                'title' => "Cadrage, normes sociales et nudges",
                'description' => "Étudier les choix par défaut, les normes sociales et les incitations douces.",
                'questions' => [
                    ['q' => "Deux publicités annoncent pour le même traitement « 90 % de réussite » et « 10 % d’échec ». Les réactions du public diffèrent : on parle d’…", 'c' => ["effet de dotation", "ancrage sur un prix", "effet de cadrage", "illusion monétaire"], 'a' => 2, 'e' => "Les chiffres sont équivalents, mais la formulation positive ou négative oriente le jugement."],
                    ['q' => "Dans une entreprise, l’inscription au plan d’épargne retraite est automatique, sauf refus du salarié. Pourquoi y a-t-il plus d’épargnants ?", 'c' => ["L’option par défaut est rarement modifiée", "Le salaire brut des inscrits augmente aussitôt", "L’État impose le même versement à tous", "Les intérêts deviennent garantis par la loi"], 'a' => 0, 'e' => "Changer demande un effort ; la plupart restent sur l’option pré-cochée, d’où l’importance du choix par défaut."],
                    ['q' => "Dans une cantine, on place les fruits à hauteur des yeux sans rien interdire. Il s’agit…", 'c' => ["d’une taxe sur les produits gras", "d’un nudge, ou incitation douce", "d’une interdiction des desserts", "d’une subvention aux producteurs"], 'a' => 1, 'e' => "Le nudge (coup de coude) modifie l’environnement de choix sans contrainte ni prix : tout reste disponible."],
                    ['q' => "Une compagnie d’eau envoie aux ménages un message comparant leur consommation à celle de leurs voisins. Quel levier utilise-t-elle ?", 'c' => ["Une hausse du tarif de l’eau", "Une interdiction légale d’arroser", "Une subvention aux plus économes", "La pression de la norme sociale"], 'a' => 3, 'e' => "On aime se conformer à ce que font les autres : voir qu’on consomme plus que ses voisins pousse à réduire."],
                    ['q' => "Qu’est-ce qui distingue un nudge d’une interdiction ?", 'c' => ["Il supprime certaines options", "Il fixe une amende en cas de refus", "Il oriente en laissant le choix libre", "Il modifie le prix de tous les biens"], 'a' => 2, 'e' => "Un nudge garde toutes les options accessibles ; il oriente sans contraindre ni punir."],
                    ['q' => "Dans le jeu de l’ultimatum, A propose de partager 100 DH ; si B refuse, aucun des deux ne reçoit rien. B refuse une offre de 10 DH. Quelle préférence l’explique ?", 'c' => ["Le souci d’équité", "La recherche du gain maximal", "L’aversion au risque de change", "Le biais de confirmation"], 'a' => 0, 'e' => "Accepter 10 DH vaut mieux que rien : refuser prouve que B tient plus à l’équité qu’au gain pur."],
                    ['q' => "Pour augmenter le don d’organes, un pays passe du consentement explicite (cocher pour donner) au consentement présumé (cocher pour refuser). Que vise-t-il ?", 'c' => ["Réduire les coûts des hôpitaux publics", "Informer chacun sur les risques d’une greffe", "Rendre les dons rémunérés par l’État", "S’appuyer sur le biais du statu quo"], 'a' => 3, 'e' => "Peu de gens modifient l’option par défaut : en la changeant, on obtient plus de donneurs sans obliger personne."],
                    ['q' => "Un restaurant ajoute au menu un plat très cher, ce qui fait paraître les autres plats plus abordables. Quel effet est en jeu ?", 'c' => ["L’effet de réseau", "L’ancrage sur le plat cher", "La loi des rendements décroissants", "L’effet de dotation"], 'a' => 1, 'e' => "Le plat très cher sert de repère : par comparaison, les autres semblent raisonnables."],
                    ['q' => "Une clinique envoie un SMS de rappel avant les rendez-vous. Ce SMS est un nudge parce qu’il…", 'c' => ["rappelle sans contraindre", "taxe les rendez-vous manqués", "interdit d’annuler", "rémunère les patients présents"], 'a' => 0, 'e' => "Un simple rappel combat l’oubli sans pénalité ni obligation, ce qui définit l’incitation douce."],
                    ['q' => "Quel est un risque éthique reproché aux nudges ?", 'c' => ["Ils font mécaniquement monter les prix de détail", "Ils obligent les ménages à épargner davantage", "Ils peuvent orienter à l’insu des personnes", "Ils suppriment la concurrence entre les marques"], 'a' => 2, 'e' => "Si la personne ignore qu’on oriente son choix, la frontière avec la manipulation devient floue : d’où l’exigence de transparence."],
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
