<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class EconometricsBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'econometrics')->firstOrFail();

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
                'title' => "Introduction à l’économétrie",
                'description' => "Quiz débutant sur les concepts fondamentaux de l’économétrie.",
                'questions' => [
                    ['q' => "Que fait l’économétrie ?", 'c' => ["Elle classe les théories économiques par ordre chronologique", "Elle fixe les prix des produits sur un marché", "Elle mesure des relations économiques avec des données et des outils statistiques", "Elle remplace la comptabilité des entreprises"], 'a' => 2, 'e' => "Son métier : mettre des chiffres sur les liens que la théorie suggère (prix et quantités, études et salaire…) et les tester sur des observations."],
                    ['q' => "Dans le modèle Consommation = a + b × Revenu + erreur, quelle est la variable expliquée ?", 'c' => ["La consommation", "Le revenu", "Le coefficient b", "La constante a"], 'a' => 0, 'e' => "Ce que l’on cherche à expliquer est à gauche du signe égal ; le revenu, lui, est la variable explicative."],
                    ['q' => "Un économètre étudie l’effet du nombre d’années d’études sur le salaire. Le salaire est…", 'c' => ["la variable explicative", "un paramètre à fixer", "le terme d’erreur", "la variable dépendante"], 'a' => 3, 'e' => "Le salaire dépend (en partie) des études : c’est la variable dépendante, notée y."],
                    ['q' => "Laquelle de ces informations est une variable qualitative ?", 'c' => ["Le revenu mensuel en DH", "Le secteur d’activité", "Le nombre d’employés", "Le prix d’un kilo de tomates"], 'a' => 1, 'e' => "Un secteur (agriculture, industrie, services) est une catégorie, pas une quantité mesurable."],
                    ['q' => "Pourquoi ajoute-t-on un terme d’erreur au modèle ?", 'c' => ["Pour résumer les facteurs non observés et les écarts aléatoires", "Pour corriger les fautes de frappe dans les données", "Pour forcer la droite à passer par tous les points", "Pour rendre le coefficient égal à zéro"], 'a' => 0, 'e' => "Aucun modèle ne capte tout : goûts, chance, variables absentes… l’erreur regroupe ce qui échappe au modèle."],
                    ['q' => "Estimer un modèle, c’est…", 'c' => ["choisir parmi plusieurs théories la plus élégante", "vérifier que les données sont publiques", "donner des valeurs chiffrées aux paramètres à partir d’un échantillon", "supprimer les observations atypiques"], 'a' => 2, 'e' => "On passe de a et b inconnus à des estimations numériques calculées sur les données."],
                    ['q' => "Les ventes de glaces et le nombre de noyades augmentent tous deux en été. Quelle conclusion est correcte ?", 'c' => ["Manger des glaces augmente le risque de noyade", "Les noyades poussent les gens à acheter des glaces", "Les deux variables n’ont aucun lien statistique observable", "La chaleur explique sans doute les deux : corrélation n’est pas causalité"], 'a' => 3, 'e' => "Un facteur commun (la chaleur) crée la corrélation. Retenez : deux courbes qui montent ensemble ne prouvent pas que l’une cause l’autre."],
                    ['q' => "Le PIB du Maroc observé chaque année de 2000 à 2020 forme une donnée…", 'c' => ["en coupe transversale", "de série temporelle", "de panel", "purement qualitative"], 'a' => 1, 'e' => "Une même variable suivie dans le temps est une série temporelle."],
                    ['q' => "Que contient une base de données en coupe transversale ?", 'c' => ["Une seule unité suivie sur vingt ans", "Des moyennes calculées sur plusieurs siècles", "Des unités variées à une même date", "Les mêmes ménages interrogés chaque année"], 'a' => 2, 'e' => "Coupe = photographie à un instant donné de nombreuses unités (ménages, firmes, pays)."],
                    ['q' => "Un modèle économétrique est utile avant tout lorsque…", 'c' => ["il confronte une idée économique claire aux données", "il contient le plus grand nombre de variables possible", "il affiche un R² de 1 sur n’importe quel échantillon", "il évite de faire des hypothèses sur les données"], 'a' => 0, 'e' => "Sans question économique précise, empiler des variables ne mène à rien ; la théorie guide le choix du modèle."],
                ],
            ],
            [
                'title' => "Régression linéaire simple",
                'description' => "Quiz débutant sur la régression linéaire simple.",
                'questions' => [
                    ['q' => "Dans y = b0 + b1·x + u, que représente b1 ?", 'c' => ["La valeur que prend y lorsque x est égal à 1", "L’effet moyen sur y d’une unité de x en plus", "Le résidu moyen", "La part de y expliquée par x"], 'a' => 1, 'e' => "b1 est la pente : de combien y varie en moyenne quand x augmente d’une unité."],
                    ['q' => "Le modèle estimé est Dépense = 200 + 0,6 × Revenu (en DH). Quelle dépense prédit-il pour un revenu de 3 000 DH ?", 'c' => ["1 800 DH (constante oubliée)", "1 200 DH", "2 600 DH", "2 000 DH"], 'a' => 3, 'e' => "0,6 × 3 000 = 1 800, puis on ajoute la constante 200 : 2 000 DH. Ne pas oublier b0."],
                    ['q' => "Dans l’équation précédente, que signifie le coefficient 0,6 ?", 'c' => ["1 DH de revenu en plus : environ 0,6 DH de dépense en plus", "60 % des ménages de l’échantillon dépensent tout leur revenu", "Le revenu explique 60 % de la variance de la dépense observée", "La dépense minimale est de 0,6 DH"], 'a' => 0, 'e' => "C’est une pente (propension marginale à consommer ici), pas un pourcentage de ménages ni un R²."],
                    ['q' => "La constante b0 s’interprète comme…", 'c' => ["la pente de la droite de régression estimée", "l’erreur moyenne du modèle", "la valeur prédite de y quand x est nul", "le coefficient de corrélation"], 'a' => 2, 'e' => "C’est l’ordonnée à l’origine : le point où la droite coupe l’axe de y."],
                    ['q' => "Quantité demandée de tomates expliquée par leur prix : quel signe attend-on pour la pente ?", 'c' => ["Positif, car un prix élevé attire les clients", "Nul, car la quantité ne dépend pas du prix", "Indéterminé, car seule l’offre fixe la quantité échangée", "Négatif, car la demande baisse quand le prix monte"], 'a' => 3, 'e' => "Loi de la demande : plus c’est cher, moins on en achète, toutes choses égales par ailleurs."],
                    ['q' => "Loyer = 500 + 40 × Surface (surface en m², loyer en DH). Quel loyer prédit-on pour 50 m² ?", 'c' => ["2 040 DH", "2 500 DH", "2 000 DH, sans la constante", "4 500 DH"], 'a' => 1, 'e' => "40 × 50 = 2 000, auquel on ajoute 500 : 2 500 DH."],
                    ['q' => "Le résidu d’une observation est…", 'c' => ["l’écart entre y observé et y prédit", "la différence entre deux valeurs de x", "l’écart entre la moyenne de x et celle de y", "la pente multipliée par x"], 'a' => 0, 'e' => "Résidu = observé − prédit : c’est ce que la droite n’a pas réussi à expliquer pour ce point."],
                    ['q' => "Pourquoi parle-t-on de régression « simple » ?", 'c' => ["Parce que les calculs se font à la main", "Parce que le modèle n’a pas de terme d’erreur", "Parce qu’il y a un seul régresseur", "Parce que la relation supposée est croissante"], 'a' => 2, 'e' => "Simple = un seul x ; avec plusieurs x on passe à la régression multiple."],
                    ['q' => "Pourquoi est-il risqué de prédire y pour une valeur de x très éloignée de l’échantillon ?", 'c' => ["La pente change de signe dès qu’on sort de l’échantillon", "La relation peut ne plus tenir hors des données", "Le R² devient nul pour les valeurs extrêmes", "Les résidus disparaissent"], 'a' => 1, 'e' => "Rien ne prouve que la relation reste linéaire loin des données : c’est de l’extrapolation."],
                    ['q' => "On mesure désormais le revenu en milliers de DH au lieu de DH. Que devient la pente estimée ?", 'c' => ["Elle est divisée par 1 000", "Elle change de signe et d’échelle", "Elle reste identique", "Elle est multipliée par 1 000"], 'a' => 3, 'e' => "Une unité de x vaut maintenant 1 000 DH : l’effet d’une unité est 1 000 fois plus grand."],
                ],
            ],
            [
                'title' => "Moindres carrés ordinaires",
                'description' => "Quiz débutant sur la méthode des moindres carrés ordinaires.",
                'questions' => [
                    ['q' => "Le principe des MCO est de choisir la droite qui…", 'c' => ["passe par le plus grand nombre de points possible", "ne laisse aucun point au-dessus d’elle", "minimise la plus grande erreur observée", "minimise la somme des carrés des résidus"], 'a' => 3, 'e' => "Les « moindres carrés », ce sont les résidus élevés au carré dont on cherche la somme minimale."],
                    ['q' => "Pourquoi élève-t-on les résidus au carré avant de les additionner ?", 'c' => ["Pour rendre tous les résidus égaux", "Pour éviter que +5 et −5 s’annulent", "Pour réduire la taille de l’échantillon", "Pour que la pente soit positive"], 'a' => 1, 'e' => "Sans le carré, +5 et −5 s’annulent et une très mauvaise droite aurait une somme nulle."],
                    ['q' => "Quelle est la formule de la pente MCO en régression simple ?", 'c' => ["Var(x) / Cov(x, y)", "Cov(x, y) × Var(x)", "Cov(x, y) / Var(x)", "Moyenne de y / moyenne de x"], 'a' => 2, 'e' => "La pente compare la façon dont x et y varient ensemble à la variabilité propre de x."],
                    ['q' => "Avec x = 1, 2, 3 et y = 2, 4, 6, quelle est la pente MCO ?", 'c' => ["2", "1", "3", "0,5"], 'a' => 0, 'e' => "Les points sont exactement alignés sur y = 2x : la pente vaut 2 et les résidus sont nuls."],
                    ['q' => "Avec x = 1, 2, 3 et y = 3, 5, 7, quelle est la constante estimée ?", 'c' => ["0, la droite part de l’origine", "2", "1", "3"], 'a' => 2, 'e' => "Ces points suivent y = 1 + 2x : pour x = 1, on a bien 1 + 2 = 3."],
                    ['q' => "Dans une régression MCO avec constante, la somme des résidus vaut…", 'c' => ["zéro", "un", "la variance de y", "la pente"], 'a' => 0, 'e' => "Cette propriété découle des équations de minimisation : les erreurs positives et négatives se compensent exactement."],
                    ['q' => "Par quel point passe toujours la droite MCO (modèle avec constante) ?", 'c' => ["(0 ; 0), le centre du repère et du nuage", "(moyenne de x ; moyenne de y)", "(médiane de x ; médiane de y)", "(plus petit x ; plus petit y)"], 'a' => 1, 'e' => "La droite est « ancrée » sur le point moyen ; on en déduit b0 = moyenne de y − b1 × moyenne de x."],
                    ['q' => "Moyenne de x = 4, moyenne de y = 10 et pente estimée = 2. Quelle est la constante ?", 'c' => ["18", "8", "6", "2"], 'a' => 3, 'e' => "b0 = 10 − 2 × 4 = 2."],
                    ['q' => "Cov(x, y) = 12 et Var(x) = 4. Quelle pente MCO obtient-on ?", 'c' => ["3", "8", "48", "0,33"], 'a' => 0, 'e' => "Pente = covariance ÷ variance de x = 12 ÷ 4 = 3 ; attention à ne pas inverser le rapport."],
                    ['q' => "Une observation très éloignée des autres (point atypique) va probablement…", 'c' => ["être écartée automatiquement par les MCO car son résidu est élevé", "laisser la droite inchangée par construction", "attirer la droite, car le carré amplifie son écart", "annuler la somme des carrés des résidus"], 'a' => 2, 'e' => "Les gros écarts coûtent très cher une fois au carré : la droite se déplace pour les réduire."],
                ],
            ],
            [
                'title' => "Corrélation, covariance et interprétation",
                'description' => "Quiz débutant sur la corrélation et la covariance.",
                'questions' => [
                    ['q' => "Entre quelles valeurs se situe le coefficient de corrélation linéaire ?", 'c' => ["−1 et 1", "0 et 1", "−100 et 100", "0 et l’infini"], 'a' => 0, 'e' => "Il est normalisé : −1 pour un lien linéaire parfait décroissant, +1 pour un lien parfait croissant."],
                    ['q' => "Un coefficient de corrélation de −0,9 indique…", 'c' => ["une absence de lien", "un lien faible", "un lien linéaire fort, de sens opposé", "une erreur de calcul, car il est négatif"], 'a' => 2, 'e' => "Le signe donne le sens (quand l’un monte, l’autre baisse) ; la valeur absolue, proche de 1, donne l’intensité."],
                    ['q' => "La covariance de x et y est positive. Cela signifie que…", 'c' => ["x est la cause de y dans l’échantillon", "x et y varient plutôt dans le même sens", "y reste constant quand x augmente", "la corrélation entre x et y est égale à 1"], 'a' => 1, 'e' => "Signe positif : au-dessus de leur moyenne, x et y se trouvent plutôt ensemble. Aucune causalité là-dedans."],
                    ['q' => "La covariance dépend des unités. Pour obtenir un indicateur sans unité, on la divise par…", 'c' => ["n, le nombre d’observations de l’échantillon", "la moyenne de x et de y réunies", "la variance de y", "le produit des écarts-types"], 'a' => 3, 'e' => "r = Cov(x, y) / (σx × σy) : les unités se simplifient, d’où une valeur comparable d’un cas à l’autre."],
                    ['q' => "Deux variables peuvent être corrélées uniquement à cause d’un troisième facteur. Comment appelle-t-on cette corrélation ?", 'c' => ["Un biais d’arrondi", "Une corrélation fallacieuse", "Une relation déterministe", "Une erreur de mesure systématique"], 'a' => 1, 'e' => "Elle est trompeuse : l’association statistique existe, mais le lien direct, lui, n’existe pas."],
                    ['q' => "Si le coefficient de corrélation entre x et y vaut 0, on peut dire que…", 'c' => ["x et y sont forcément indépendants, quelle que soit la forme du lien", "y est une constante", "la pente de régression de y sur x est égale à 1", "il n’y a pas de lien linéaire, mais un lien non linéaire reste possible"], 'a' => 3, 'e' => "r ne détecte que les relations en ligne droite : une courbe en U peut donner r proche de 0."],
                    ['q' => "Dans 30 magasins, la corrélation entre dépenses de publicité et ventes est de 0,6. Quelle lecture est prudente ?", 'c' => ["La publicité explique 60 % des ventes des magasins", "Les ventes chutent sans publicité", "Les deux varient dans le même sens, sans prouver un effet causal", "Chaque DH de publicité rapporte 0,6 DH de ventes en plus"], 'a' => 2, 'e' => "Une corrélation décrit une association ; les magasins les plus grands peuvent à la fois vendre plus et dépenser plus en publicité."],
                    ['q' => "Cov(x, y) = 6, écart-type de x = 2, écart-type de y = 3. Que vaut la corrélation ?", 'c' => ["1", "2", "0,5", "3"], 'a' => 0, 'e' => "r = 6 / (2 × 3) = 1 : les points sont parfaitement alignés sur une droite croissante."],
                    ['q' => "On double toutes les valeurs de x (changement d’unité). Que devient la corrélation entre x et y ?", 'c' => ["Elle double", "Elle est divisée par deux", "Elle devient nulle", "Elle reste inchangée"], 'a' => 3, 'e' => "La covariance et l’écart-type de x doublent tous deux : le rapport ne bouge pas."],
                    ['q' => "Lequel de ces outils n’est PAS un indicateur chiffré du lien entre deux variables ?", 'c' => ["La covariance", "Le nuage de points", "Le coefficient de corrélation", "La pente de régression"], 'a' => 1, 'e' => "Le nuage de points est un graphique : très utile pour repérer une relation, mais il ne donne pas de nombre."],
                ],
            ],
            [
                'title' => "R², résidus et qualité du modèle",
                'description' => "Quiz débutant sur le R², les résidus et la qualité d’ajustement.",
                'questions' => [
                    ['q' => "Que mesure le R² d’une régression ?", 'c' => ["La probabilité que le modèle soit vrai", "La taille de l’échantillon", "La part de la variance de y expliquée par le modèle", "La pente de la droite"], 'a' => 2, 'e' => "R² = variance expliquée / variance totale : une mesure d’ajustement, pas une probabilité."],
                    ['q' => "Un modèle a un R² de 0,64. Quelle phrase est exacte ?", 'c' => ["64 % des observations sont bien prédites", "La pente vaut 0,64", "Le modèle est faux à 64 %", "64 % de la variation de y est expliquée"], 'a' => 3, 'e' => "Le R² porte sur la variation de y autour de sa moyenne, pas sur un nombre d’observations."],
                    ['q' => "En régression simple, la corrélation entre x et y est de 0,8. Quel est le R² ?", 'c' => ["0,64", "0,8, la corrélation elle-même", "0,4", "1,6"], 'a' => 0, 'e' => "R² = r² = 0,8 × 0,8 = 0,64."],
                    ['q' => "Entre quelles valeurs se situe le R² d’un modèle MCO avec constante ?", 'c' => ["−1 et 1", "0 et 1", "1 et 100", "−∞ et +∞"], 'a' => 1, 'e' => "C’est une proportion : 0 si le modèle n’explique rien, 1 s’il explique tout."],
                    ['q' => "SCT = 200 et SCR = 50 (somme des carrés totale et des résidus). Que vaut le R² ?", 'c' => ["0,25, soit SCR sur SCT", "0,5", "4", "0,75"], 'a' => 3, 'e' => "R² = 1 − SCR/SCT = 1 − 50/200 = 0,75 ; 0,25 est la part non expliquée."],
                    ['q' => "SCE = 30 et SCT = 120 (somme des carrés expliquée et totale). Que vaut le R² ?", 'c' => ["0,25", "4, soit SCT sur SCE", "0,75", "30"], 'a' => 0, 'e' => "R² = SCE/SCT = 30/120 = 0,25. Le rapport inverse dépasserait 1, signe d’une erreur."],
                    ['q' => "Un chercheur obtient un R² de 0,05 sur des données de ménages. Que peut-on en conclure ?", 'c' => ["Le modèle est inutilisable et doit être abandonné", "La pente est nécessairement nulle ou presque", "La variable explique peu la variance de y, mais son effet peut rester significatif", "Les données sont forcément erronées ou mal collectées"], 'a' => 2, 'e' => "Les comportements individuels sont très dispersés : un R² bas est courant en coupe transversale."],
                    ['q' => "On ajoute une variable explicative, même inutile, à un modèle MCO avec constante. Le R²…", 'c' => ["baisse nécessairement", "ne baisse pas", "retombe à zéro", "devient égal à la corrélation"], 'a' => 1, 'e' => "Le R² ne peut qu’augmenter ou rester stable ; d’où l’intérêt du R² ajusté pour comparer."],
                    ['q' => "À quoi sert le R² ajusté ?", 'c' => ["À pénaliser les variables peu utiles", "À remplacer le terme d’erreur par un indicateur", "À prouver la causalité", "À calculer les résidus"], 'a' => 0, 'e' => "Il tient compte du nombre de variables : il baisse si la nouvelle variable n’apporte presque rien."],
                    ['q' => "Valeur observée de y = 120, valeur prédite = 105. Quel est le résidu ?", 'c' => ["−15", "105", "15", "225"], 'a' => 2, 'e' => "Résidu = observé − prédit = 120 − 105 = 15 ; le signe positif signale une sous-estimation."],
                ],
            ],
            [
                'title' => "Hypothèses de régression et erreurs",
                'description' => "Quiz débutant sur les principales hypothèses de régression.",
                'questions' => [
                    ['q' => "Parmi les hypothèses usuelles du modèle linéaire, l’espérance de l’erreur (sachant x) est égale à…", 'c' => ["1", "0", "la variance de y", "la moyenne de x"], 'a' => 1, 'e' => "En moyenne, les facteurs non observés ne poussent ni vers le haut ni vers le bas."],
                    ['q' => "Que signifie l’homoscédasticité ?", 'c' => ["La variance des erreurs est constante", "Les erreurs sont corrélées entre elles", "La moyenne des erreurs change avec x", "Les variables ont la même moyenne"], 'a' => 0, 'e' => "« Homo » = même : la dispersion des erreurs est la même quelle que soit la valeur de x."],
                    ['q' => "Quelle situation illustre l’hétéroscédasticité ?", 'c' => ["Un échantillon de dix observations", "Des résidus de moyenne nulle", "Des erreurs indépendantes d’un mois à l’autre", "Des dépenses plus dispersées chez les riches"], 'a' => 3, 'e' => "Les ménages aisés ont des dépenses très variables, les modestes beaucoup moins : la variance de l’erreur croît avec x."],
                    ['q' => "Où rencontre-t-on surtout l’autocorrélation des erreurs ?", 'c' => ["Dans les enquêtes tirées au hasard à une date donnée", "Dans les variables qualitatives", "Dans les séries temporelles, où l’erreur d’une période prolonge celle de la précédente", "Dès que l’échantillon est grand"], 'a' => 2, 'e' => "Un choc (sécheresse, crise) pèse sur plusieurs périodes successives, donc les erreurs ne sont plus indépendantes."],
                    ['q' => "On oublie une variable pertinente, corrélée avec x. Quelle conséquence sur l’estimation du coefficient de x ?", 'c' => ["Il est biaisé", "Il devient exactement nul", "Aucune, tout reste correct", "Le R² devient négatif"], 'a' => 0, 'e' => "x récupère une partie de l’effet de la variable omise : c’est le biais de variable omise."],
                    ['q' => "On régresse le salaire sur les années d’études sans tenir compte des aptitudes. Le coefficient des études est probablement…", 'c' => ["exactement égal à zéro, faute de contrôle", "sans aucun lien avec les aptitudes des étudiants", "surestimé : l’aptitude joue sur études et salaire", "indépendant de l’échantillon utilisé pour l’estimer"], 'a' => 2, 'e' => "Les plus aptes étudient plus et gagnent plus : une part de leur avantage est attribuée à tort aux études."],
                    ['q' => "Sous les hypothèses de Gauss-Markov, les MCO sont…", 'c' => ["le seul estimateur qu’on puisse calculer ici", "un estimateur biaisé, mais de variance très faible", "un estimateur de variance nulle", "le meilleur estimateur linéaire sans biais"], 'a' => 3, 'e' => "Best Linear Unbiased Estimator : parmi les estimateurs linéaires sans biais, c’est celui de plus petite variance."],
                    ['q' => "Pourquoi les MCO échouent-ils en cas de multicolinéarité parfaite ?", 'c' => ["Les résidus deviennent trop grands pour être calculés", "On ne peut pas isoler l’effet de chaque variable", "L’échantillon devient vide", "La constante disparaît"], 'a' => 1, 'e' => "Si x2 = 2 × x1, impossible de savoir à laquelle attribuer l’effet : le système n’a pas de solution unique."],
                    ['q' => "À quoi sert surtout l’hypothèse de normalité des erreurs ?", 'c' => ["Garantir l’absence de biais", "Supprimer la constante", "Obtenir des tests t et des intervalles exacts en petit échantillon", "Rendre le R² égal à 1"], 'a' => 2, 'e' => "L’absence de biais n’en dépend pas ; la loi des erreurs sert à connaître la loi des statistiques de test."],
                    ['q' => "Quel graphique regarde-t-on d’abord pour repérer une hétéroscédasticité ?", 'c' => ["La moyenne de x comparée à celle de y", "Les résidus selon les valeurs prédites", "Un camembert de la répartition des variables", "La médiane de y et ses variations"], 'a' => 1, 'e' => "Si le nuage des résidus s’évase en entonnoir, la variance n’est pas constante."],
                ],
            ],
            [
                'title' => "Données économiques et modèles",
                'description' => "Quiz débutant sur les différents types de données économétriques.",
                'questions' => [
                    ['q' => "Qu’est-ce qu’une série temporelle ?", 'c' => ["Des ménages comparés à une date donnée", "Des pays comparés une même année", "Des moyennes régionales sans date", "La même variable sur plusieurs dates"], 'a' => 3, 'e' => "Exemple : l’inflation marocaine mois après mois. L’ordre des dates compte."],
                    ['q' => "Que caractérise un panel ?", 'c' => ["Un individu observé une seule fois, à une seule date", "Les mêmes unités suivies sur plusieurs périodes", "Un sondage réalisé en un jour", "Un recensement unique"], 'a' => 1, 'e' => "Panel = dimension individus × dimension temps, comme 500 entreprises suivies pendant dix ans."],
                    ['q' => "Une enquête auprès de 1 000 ménages marocains menée en 2023 fournit des données…", 'c' => ["en coupe transversale", "en série temporelle", "en panel", "agrégées au niveau mondial"], 'a' => 0, 'e' => "Beaucoup d’unités, une seule date : c’est une coupe."],
                    ['q' => "Laquelle de ces variables est quantitative discrète ?", 'c' => ["La taille d’une personne en cm", "Le revenu exact d’un ménage", "Le nombre d’enfants du ménage", "La température de la ville"], 'a' => 2, 'e' => "Elle ne prend que des valeurs entières (0, 1, 2…), à la différence des variables continues."],
                    ['q' => "Qu’est-ce qu’une variable indicatrice (dummy) ?", 'c' => ["Une variable mesurant un montant en dirhams chaque année", "Une variable valant 1 pour les ruraux, 0 sinon", "Une variable égale à la moyenne de l’échantillon", "Le terme d’erreur du modèle"], 'a' => 1, 'e' => "Elle code une catégorie par 0/1 pour l’introduire dans une régression."],
                    ['q' => "Pour comparer les salaires de 2010 et de 2023, on utilise de préférence des valeurs…", 'c' => ["nominales, sans correction", "arrondies au millier", "exprimées en pourcentage de la population", "réelles, corrigées de l’inflation"], 'a' => 3, 'e' => "Un même nombre de dirhams n’achète pas la même chose en 2010 et en 2023 : on déflate."],
                    ['q' => "Dans log(y) = a + b × log(x), le coefficient b s’interprète comme…", 'c' => ["une élasticité : des % de y pour 1 % de x", "une variation de y en DH pour 1 DH de x", "un taux de variation du chômage entre deux dates", "un R² mesurant l’ajustement du modèle"], 'a' => 0, 'e' => "Avec deux logarithmes, on compare des variations relatives, donc des pourcentages."],
                    ['q' => "Dans une enquête, les revenus les plus élevés refusent souvent de répondre. Quel risque cela crée-t-il ?", 'c' => ["Avoir trop d’observations", "Perdre toute variance dans l’échantillon", "Sous-représenter les hauts revenus", "Transformer l’échantillon en panel"], 'a' => 2, 'e' => "Les non-réponses ne sont pas aléatoires : l’échantillon ne reflète plus la population."],
                    ['q' => "Pourquoi cherche-t-on un échantillon aléatoire ?", 'c' => ["Il supprime le terme d’erreur", "Il garantit un R² élevé", "Il rend toutes les variables identiques", "Il évite un biais de sélection"], 'a' => 3, 'e' => "Chaque unité a une chance connue d’être tirée : on peut généraliser à l’ensemble."],
                    ['q' => "Un modèle de salaire contient une indicatrice Femme (1 si femme, 0 sinon). Son coefficient mesure…", 'c' => ["l’écart moyen de salaire entre femmes et hommes, à autres variables égales", "le salaire moyen de toutes les femmes de l’échantillon", "le nombre de femmes de l’échantillon", "le salaire minimum légal"], 'a' => 0, 'e' => "Pour une indicatrice, le coefficient est l’écart avec le groupe de référence (ici les hommes)."],
                ],
            ],
            [
                'title' => "Interprétation économique des résultats",
                'description' => "Quiz débutant sur l’interprétation des résultats économétriques.",
                'questions' => [
                    ['q' => "Un coefficient estimé vaut 0,6 avec un écart-type de 0,2. Quelle est la statistique t pour H0 : b = 0 ?", 'c' => ["3", "0,12", "0,8", "1,2"], 'a' => 0, 'e' => "t = estimation / écart-type = 0,6 / 0,2 = 3."],
                    ['q' => "Avec |t| = 3 et un échantillon assez grand (seuil critique proche de 2 à 5 %), que décide-t-on ?", 'c' => ["On ne rejette pas H0 : le coefficient est nul", "On conclut que le R² vaut 3", "On rejette H0 : le coefficient est significativement différent de zéro", "On conclut que le coefficient du modèle vaut exactement 3"], 'a' => 2, 'e' => "3 dépasse largement 2 : un tel écart par rapport à zéro serait très rare si b valait réellement 0."],
                    ['q' => "Une p-value de 0,03 signifie que…", 'c' => ["l’hypothèse H0 a 3 % de chances d’être vraie", "si H0 était vraie, un résultat aussi extrême surviendrait dans environ 3 % des cas", "le modèle explique 3 % de la variance de y observée", "l’erreur de prévision du modèle est de 3 % en moyenne"], 'a' => 1, 'e' => "La p-value se calcule en supposant H0 vraie ; ce n’est pas la probabilité de H0."],
                    ['q' => "Un coefficient est significatif au seuil de 5 % lorsque sa p-value est…", 'c' => ["supérieure à 0,05", "égale à 1", "supérieure à 0,95, donc proche de 1", "inférieure à 0,05"], 'a' => 3, 'e' => "Petite p-value = résultat difficile à expliquer par le seul hasard si b valait 0."],
                    ['q' => "L’intervalle de confiance à 95 % d’un coefficient est [0,2 ; 1,0]. Que peut-on dire au seuil de 5 % ?", 'c' => ["Il n’est pas significatif, car l’intervalle est trop large", "Il vaut exactement 0,6", "Il est significatif, car 0 n’est pas dans l’intervalle", "Il est forcément causal"], 'a' => 2, 'e' => "Intervalle et test disent la même chose : si 0 n’est pas dans l’intervalle, on rejette b = 0."],
                    ['q' => "Salaire = 3 000 + 450 × Études (salaire en DH, études en années). Quelle lecture est correcte ?", 'c' => ["Chaque personne diplômée gagne exactement 450 DH de plus qu’un non-diplômé", "Une année d’études de plus est associée en moyenne à 450 DH de salaire en plus", "Les études font monter le salaire de 450 %", "Le salaire de départ est de 450 DH"], 'a' => 1, 'e' => "La pente se lit en unités de y par unité de x ; 3 000 est la valeur prédite sans étude."],
                    ['q' => "Dans log(salaire) = a + 0,08 × Études, une année d’études supplémentaire s’accompagne d’une hausse du salaire d’environ…", 'c' => ["0,08 DH", "8 DH", "0,08 %", "8 %"], 'a' => 3, 'e' => "Avec log(y) à gauche et x en niveau, b × 100 donne la variation en pourcentage : 0,08 devient environ 8 %."],
                    ['q' => "Sur 500 000 observations, un coefficient est très significatif mais ne vaut que 0,01 DH. Quelle conclusion s’impose ?", 'c' => ["Effet net statistiquement, mais économiquement négligeable", "L’effet est énorme, vu la très forte significativité du test", "Le modèle est sans biais", "Le R² vaut 1"], 'a' => 0, 'e' => "Avec un grand échantillon, même un minuscule effet devient détectable ; significatif ne veut pas dire important."],
                    ['q' => "Pour défendre un effet causal et pas seulement une corrélation, il faut surtout…", 'c' => ["un R² supérieur à 0,5", "des arguments solides contre les variables omises ou une expérience crédible", "un grand nombre de variables explicatives en plus", "une p-value de 0,10"], 'a' => 1, 'e' => "La causalité vient de la méthode d’identification (expérience, instrument…), pas d’un indicateur d’ajustement."],
                    ['q' => "Un étudiant écrit : « p = 0,03, donc il y a 97 % de chances que H0 soit fausse ». Que lui répondre ?", 'c' => ["Rien, c’est exact", "La p-value est le R² du modèle", "La p-value est égale à 1 moins l’erreur de prévision", "Elle se calcule en supposant H0 vraie ; ce n’est pas la probabilité que H0 soit fausse"], 'a' => 3, 'e' => "Erreur classique : la p-value est P(données | H0), non P(H0 | données)."],
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
