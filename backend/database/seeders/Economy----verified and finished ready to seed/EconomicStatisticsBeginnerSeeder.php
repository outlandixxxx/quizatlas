<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class EconomicStatisticsBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'economic-statistics')->firstOrFail();

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
                'title' => "Introduction aux statistiques économiques",
                'description' => "Un premier tour des mots de base : population, échantillon, variable et rôle des chiffres en économie.",
                'questions' => [
                    ['q' => "À quoi servent avant tout les statistiques économiques ?", 'c' => ["À fixer le prix de chaque bien à la place du marché", "À prédire sans erreur l’évolution de la conjoncture", "À résumer et interpréter des données économiques", "À remplacer le raisonnement des économistes par des chiffres"], 'a' => 2, 'e' => "Elles transforment une masse de chiffres bruts en repères lisibles ; elles éclairent la décision sans la remplacer."],
                    ['q' => "Sur 5 000 clients d’une banque, on en interroge 200 tirés au hasard. Ces 200 clients forment :", 'c' => ["la population étudiée", "un échantillon, c’est-à-dire une partie de la population", "une variable statistique", "une modalité du caractère"], 'a' => 1, 'e' => "Une partie de la population choisie pour être observée s’appelle un échantillon ; les 5 000 clients forment la population."],
                    ['q' => "Parmi ces variables relevées sur des ménages, laquelle est quantitative ?", 'c' => ["la ville de résidence", "la profession du chef de ménage", "le type de logement (villa, appartement)", "le nombre de personnes vivant dans le ménage"], 'a' => 3, 'e' => "On peut compter ou mesurer le nombre de personnes et calculer dessus ; les trois autres sont des catégories (qualitatives)."],
                    ['q' => "Laquelle de ces variables est qualitative ?", 'c' => ["l’âge d’un salarié en années", "le secteur d’activité", "le chiffre d’affaires annuel en DH", "le nombre de machines installées"], 'a' => 1, 'e' => "Agriculture, industrie ou services sont des catégories : on ne fait pas de moyenne dessus. Les autres sont des nombres."],
                    ['q' => "Pour étudier le chômage des jeunes dans une région, la population statistique est :", 'c' => ["les jeunes actifs de cette région", "le taux de chômage calculé à la fin", "un seul jeune interrogé au hasard", "la liste des questions du questionnaire"], 'a' => 0, 'e' => "La population regroupe toutes les unités sur lesquelles porte l’étude ; le taux de chômage est un résultat, pas une unité."],
                    ['q' => "Dans un fichier, chaque ligne est une entreprise et chaque colonne une caractéristique (effectif, secteur, chiffre d’affaires). Une colonne correspond à :", 'c' => ["une population entière", "un échantillon aléatoire", "une unité statistique", "une variable"], 'a' => 3, 'e' => "Lignes = unités observées, colonnes = variables. Astuce : la variable « varie » d’une ligne à l’autre."],
                    ['q' => "Trouvez l’intrus : laquelle de ces données n’est pas quantitative ?", 'c' => ["le prix d’un kilo de tomates", "le nombre de salariés d’une PME", "la forme juridique de l’entreprise (SARL, SA)", "le salaire mensuel net"], 'a' => 2, 'e' => "SARL ou SA sont des catégories ; prix, effectifs et salaires sont des nombres sur lesquels on calcule."],
                    ['q' => "Un ministre veut savoir si le pouvoir d’achat progresse depuis cinq ans. De quoi a-t-il besoin en priorité ?", 'c' => ["d’un texte de loi fixant les salaires", "de séries de prix et de revenus", "de l’avis personnel de quelques chefs d’entreprise", "d’une prévision certaine du taux de change"], 'a' => 1, 'e' => "Pour juger d’une évolution, il faut des séries mesurées dans le temps ; une opinion ou une loi ne mesure rien."],
                    ['q' => "Quelle différence y a-t-il entre un recensement et un sondage ?", 'c' => ["le recensement interroge un échantillon, le sondage la population entière", "le sondage ne concerne que les entreprises privées", "le recensement est toujours le moins coûteux des deux", "le recensement couvre toute la population, le sondage une partie"], 'a' => 3, 'e' => "Recenser, c’est compter tout le monde ; sonder, c’est interroger une fraction pour estimer l’ensemble, moins cher mais avec une marge d’erreur."],
                    ['q' => "Le PIB d’un pays relevé chaque année de 2000 à 2020 forme :", 'c' => ["une série chronologique, observée à des dates successives", "une série purement qualitative", "un échantillon tiré au sort", "un recensement de ménages"], 'a' => 0, 'e' => "Une même variable observée à des dates successives s’appelle une série chronologique (ou temporelle)."],
                ],
            ],
            [
                'title' => "Tableaux, fréquences et distributions",
                'description' => "Calculer des effectifs, des fréquences et des fréquences cumulées pour lire une distribution.",
                'questions' => [
                    ['q' => "Dans une classe de 40 élèves, 10 ont choisi l’option économie. Quelle est la fréquence de ce choix ?", 'c' => ["10 %", "25 %", "40 %", "2,5 %"], 'a' => 1, 'e' => "Fréquence = effectif ÷ total = 10 ÷ 40 = 0,25, soit 25 %."],
                    ['q' => "Trois catégories ont des fréquences de 35 %, 25 % et 15 %. Quelle est la fréquence de la quatrième catégorie ?", 'c' => ["75 %", "100 %", "35 %", "25 %"], 'a' => 3, 'e' => "35 + 25 + 15 = 75 ; il reste 100 − 75 = 25 %, car le total des fréquences vaut toujours 100 %."],
                    ['q' => "Dans un tableau, 12 entreprises sur 48 appartiennent au textile. Le nombre 12 est :", 'c' => ["l’effectif de la modalité textile", "la fréquence de la modalité textile", "la fréquence cumulée croissante", "la moyenne de la série"], 'a' => 0, 'e' => "C’est un simple comptage : un effectif. La fréquence serait 12 ÷ 48 = 25 %."],
                    ['q' => "18 salariés sur 60 d’une PME de Tanger télétravaillent. Quelle est la part des télétravailleurs ?", 'c' => ["18 %", "33 %", "30 %", "3,3 %"], 'a' => 2, 'e' => "18 ÷ 60 = 0,30. Attention à ne pas inverser la division : 60 ÷ 18 donne 3,33, qui n’a pas de sens ici."],
                    ['q' => "Salaires : moins de 3 000 DH, 20 % ; de 3 000 à 5 000 DH, 35 % ; de 5 000 à 8 000 DH, 30 % ; plus de 8 000 DH, 15 %. Quelle part des salariés gagne moins de 8 000 DH ?", 'c' => ["65 %", "55 %", "100 %", "85 %"], 'a' => 3, 'e' => "On cumule les trois premières classes : 20 + 35 + 30 = 85 %. Autre chemin : 100 − 15."],
                    ['q' => "Pourquoi regroupe-t-on en classes les salaires de 5 000 ménages avant de les présenter ?", 'c' => ["pour faire disparaître les salaires les plus élevés", "pour rendre la distribution plus lisible", "pour obtenir des fréquences supérieures à 100 %", "pour convertir les salaires en fréquences cumulées"], 'a' => 1, 'e' => "Cinq mille valeurs isolées sont illisibles ; quelques tranches montrent la forme de la répartition, au prix d’une perte de détail."],
                    ['q' => "Un élève écrit : « mes fréquences valent 40 %, 35 % et 30 % ». Où est l’erreur ?", 'c' => ["elles devraient toutes être égales", "une fréquence ne s’exprime jamais en pourcentage", "leur somme fait 105 % au lieu de 100 %", "il manque une fréquence cumulée"], 'a' => 2, 'e' => "40 + 35 + 30 = 105. Pour une répartition complète, la somme des fréquences doit faire exactement 100 %."],
                    ['q' => "Région A : 30 entreprises exportatrices sur 200. Région B : 45 sur 500. Où la part d’exportatrices est-elle la plus forte ?", 'c' => ["en A, avec 15 % contre 9 %", "en B, parce que son effectif d’exportatrices est plus grand", "à égalité, car 30 et 45 sont proches", "on ne peut rien dire sans calculer la médiane"], 'a' => 0, 'e' => "30 ÷ 200 = 15 % ; 45 ÷ 500 = 9 %. Comparer des effectifs de populations de tailles différentes est trompeur, il faut passer aux fréquences."],
                    ['q' => "Sur 20 élèves, les notes sont : 4 (2 élèves), 5 (5 élèves), 6 (8 élèves), 7 (5 élèves). Quelle est la fréquence cumulée des notes inférieures ou égales à 6 ?", 'c' => ["8 élèves, soit 40 %", "7 élèves sur 20, soit 35 %", "12 élèves, soit 60 %", "15 élèves, soit 75 %"], 'a' => 3, 'e' => "2 + 5 + 8 = 15 élèves sur 20, soit 75 %. Le cumul additionne tout ce qui est situé jusqu’à la valeur donnée."],
                    ['q' => "Quelle colonne d’un tableau permet de comparer la répartition par secteur de deux régions de tailles très différentes ?", 'c' => ["l’effectif", "la fréquence relative", "la somme des effectifs", "le nombre de modalités"], 'a' => 1, 'e' => "Le pourcentage neutralise la taille de la région ; deux effectifs bruts ne sont pas comparables directement."],
                ],
            ],
            [
                'title' => "Moyenne, médiane et mode",
                'description' => "Calculer et interpréter les trois grandes mesures du centre d’une série.",
                'questions' => [
                    ['q' => "Trois épiciers vendent le kilo de sucre à 8, 9 et 13 DH. Quel est le prix moyen ?", 'c' => ["9 DH", "10,5 DH", "11 DH", "10 DH"], 'a' => 3, 'e' => "(8 + 9 + 13) ÷ 3 = 30 ÷ 3 = 10 DH. Le 9 est la médiane et le 10,5 le milieu entre min et max, pas la moyenne."],
                    ['q' => "Cinq salaires : 3 000, 3 200, 3 500, 4 000 et 9 000 DH. Quelle est la médiane ?", 'c' => ["3 500 DH", "4 540 DH", "3 200 DH", "22 700 DH"], 'a' => 0, 'e' => "Rangés dans l’ordre, la valeur du milieu (la 3e sur 5) est 3 500. La moyenne, tirée par 9 000, vaudrait 4 540."],
                    ['q' => "Quatre loyers : 1 200, 1 500, 1 900 et 3 000 DH. Quelle est la médiane ?", 'c' => ["1 900 DH", "1 500 DH", "1 700 DH", "2 100 DH"], 'a' => 2, 'e' => "Avec un nombre pair de valeurs, on prend le milieu des deux centrales : (1 500 + 1 900) ÷ 2 = 1 700."],
                    ['q' => "Pointures vendues en un jour : 38, 40, 40, 41, 43, 43, 43. Quel est le mode ?", 'c' => ["41", "43", "41,1", "40"], 'a' => 1, 'e' => "Le mode est la valeur la plus fréquente : 43 apparaît trois fois. Le 41 est la médiane et 41,1 la moyenne arrondie."],
                    ['q' => "Dans un village, 9 familles gagnent environ 3 000 DH par mois et une famille 60 000 DH. Quel indicateur décrit le mieux le revenu d’une famille typique ?", 'c' => ["la moyenne arithmétique des dix revenus", "le revenu maximal observé", "la médiane des dix revenus", "l’étendue des revenus"], 'a' => 2, 'e' => "La moyenne vaudrait 8 700 DH, bien au-dessus de ce que gagne presque tout le monde ; la médiane reste proche de 3 000."],
                    ['q' => "Tous les salaires d’une entreprise augmentent de 200 DH. Que deviennent la moyenne et la médiane ?", 'c' => ["elles augmentent chacune de 200 DH", "elles ne changent pas", "elles sont multipliées par 200", "la moyenne monte de 200 DH, la médiane reste fixe"], 'a' => 0, 'e' => "Ajouter une constante à toutes les valeurs déplace toute la série d’autant, donc son centre aussi, quelle que soit la mesure."],
                    ['q' => "Une note de 12 a le coefficient 1 et une note de 18 le coefficient 2. Quelle est la moyenne pondérée ?", 'c' => ["15", "14", "16", "16,5"], 'a' => 2, 'e' => "(12 × 1 + 18 × 2) ÷ 3 = 48 ÷ 3 = 16. La moyenne simple, 15, ignorerait les coefficients."],
                    ['q' => "La moyenne de 5 salaires est de 4 000 DH. Quatre d’entre eux valent 3 000, 3 500, 4 000 et 4 500 DH. Quel est le cinquième ?", 'c' => ["4 000 DH", "4 500 DH", "20 000 DH", "5 000 DH"], 'a' => 3, 'e' => "Total attendu : 5 × 4 000 = 20 000. Les quatre connus font 15 000, il reste 5 000 DH."],
                    ['q' => "Moyens de transport domicile-travail : bus 40 salariés, voiture 55, tram 30, vélo 15. Quel indicateur du centre peut-on calculer sur cette variable ?", 'c' => ["la moyenne des quatre moyens de transport", "le mode, c’est-à-dire la voiture", "la médiane des quatre moyens de transport", "la moyenne géométrique des effectifs"], 'a' => 1, 'e' => "Pour une variable qualitative sans ordre, seul le mode a un sens : la modalité la plus fréquente."],
                    ['q' => "Dans un pays, la moyenne des salaires est nettement supérieure à la médiane. Que peut-on en déduire ?", 'c' => ["quelques très hauts salaires tirent la moyenne", "la majorité des salariés gagne plus que la moyenne", "tous les salaires sont proches les uns des autres", "la médiane a été mal calculée"], 'a' => 0, 'e' => "Quelques gros salaires gonflent la moyenne, pas la médiane ; la plupart des gens gagnent donc moins que la moyenne."],
                ],
            ],
            [
                'title' => "Dispersion et étendue",
                'description' => "Comprendre pourquoi la moyenne ne suffit pas et mesurer l’écart entre extrêmes.",
                'questions' => [
                    ['q' => "Quelle est l’étendue des prix 12, 18, 25 et 40 DH ?", 'c' => ["22 DH", "40 DH", "28 DH", "23,75 DH"], 'a' => 2, 'e' => "Étendue = maximum − minimum = 40 − 12 = 28 DH."],
                    ['q' => "Deux boutiques ont un revenu moyen de 10 000 DH. En A, les revenus mensuels vont de 9 000 à 11 000 DH ; en B, de 2 000 à 18 000 DH. Laquelle a la plus grande étendue ?", 'c' => ["B, avec 16 000 DH contre 2 000 DH", "A, car ses revenus sont proches de la moyenne", "les deux, puisque leurs moyennes sont égales", "A, avec 11 000 DH contre 9 000 DH"], 'a' => 0, 'e' => "Étendue de B : 18 000 − 2 000 = 16 000 ; celle de A : 11 000 − 9 000 = 2 000. Même moyenne, dispersions très différentes."],
                    ['q' => "Chaque salarié reçoit une prime fixe de 500 DH. Que devient l’étendue des salaires ?", 'c' => ["Elle augmente de 500 DH, comme le salaire moyen", "Elle reste identique, max et min gagnent 500", "Elle est multipliée par 500, comme les primes", "Elle diminue de 500 DH, car l’écart se réduit"], 'a' => 1, 'e' => "Le maximum et le minimum gagnent 500 chacun : leur différence est inchangée. Seule une multiplication change l’étendue."],
                    ['q' => "Un statisticien convertit des montants d’euros en dirhams en les multipliant par 11. L’étendue vaut 40 en euros. Que vaut-elle en dirhams ?", 'c' => ["40", "51", "4 400", "440"], 'a' => 3, 'e' => "Multiplier toutes les valeurs par 11 multiplie aussi leur écart : 40 × 11 = 440."],
                    ['q' => "La série 10, 11, 11, 12, 12, 13, 90 a une étendue de 80. Pourquoi cette valeur est-elle trompeuse ?", 'c' => ["elle utilise la moyenne, faussée par le nombre 90", "elle compte deux fois chaque valeur répétée", "elle ne dépend que du minimum et du maximum", "elle devient négative quand une valeur est très grande"], 'a' => 2, 'e' => "Six valeurs sur sept sont entre 10 et 13 ; seule 90 fait exploser l’étendue, qui ignore tout le reste."],
                    ['q' => "Lequel de ces indicateurs n’est PAS une mesure de dispersion ?", 'c' => ["le mode (valeur la plus fréquente)", "l’étendue", "la variance", "l’écart-type"], 'a' => 0, 'e' => "Le mode indique la valeur la plus fréquente, donc un centre. Étendue, variance et écart-type mesurent l’éparpillement."],
                    ['q' => "Deux villes ont un salaire moyen de 5 000 DH. En A, les salaires vont de 4 800 à 5 200 DH ; en B, de 1 500 à 12 000 DH. Que peut-on dire ?", 'c' => ["A est plus dispersée, car sa moyenne est plus stable", "les deux villes sont identiques puisque la moyenne est la même", "B est plus homogène, car elle a des salaires plus variés", "B est plus dispersée, ses salaires s’écartent plus"], 'a' => 3, 'e' => "Étendue de A : 400 DH ; de B : 10 500 DH. À moyenne égale, la dispersion change complètement la réalité vécue."],
                    ['q' => "Une série A a une étendue de 8 et une série B de 80. Peut-on en conclure que B a une moyenne plus élevée ?", 'c' => ["oui, plus l’étendue est grande, plus la moyenne l’est", "non, l’étendue renseigne sur l’écart max − min, pas sur le niveau moyen", "oui, car 80 est supérieur à 8", "non, parce que l’étendue ne se calcule qu’avec des variables qualitatives"], 'a' => 1, 'e' => "On peut avoir une grande étendue autour de valeurs faibles. Niveau et dispersion sont deux informations distinctes."],
                    ['q' => "L’étendue d’une série de prix est de 35 DH et le prix minimal est de 12 DH. Quel est le prix maximal ?", 'c' => ["47 DH", "23 DH", "35 DH", "420 DH"], 'a' => 0, 'e' => "Maximum = minimum + étendue = 12 + 35 = 47 DH."],
                    ['q' => "Pourquoi un exportateur de fruits regarde-t-il la dispersion des cours, en plus du cours moyen ?", 'c' => ["parce que la dispersion remplace la moyenne dans les comptes", "parce qu’une forte dispersion garantit des recettes plus élevées", "parce que de fortes variations rendent les recettes incertaines", "parce que la dispersion indique le prix le plus fréquent"], 'a' => 2, 'e' => "Un cours moyen de 10 DH peut cacher des mois à 4 et des mois à 16 : la dispersion mesure l’incertitude des recettes."],
                ],
            ],
            [
                'title' => "Variance et écart-type",
                'description' => "Calculer variance et écart-type à la main et comprendre leur lien avec le risque.",
                'questions' => [
                    ['q' => "Quatre salaires en milliers de DH : 2, 4, 6 et 8. Quelle est la variance (division par n) ?", 'c' => ["20", "5", "√5 ≈ 2,24", "6,67"], 'a' => 1, 'e' => "Moyenne 5 ; écarts −3, −1, 1, 3 ; carrés 9, 1, 1, 9 ; somme 20 ; 20 ÷ 4 = 5. Le 6,67 vient d’une division par 3."],
                    ['q' => "Quel est l’écart-type de la série 3, 3, 7, 7 ?", 'c' => ["4", "5", "2,5", "2"], 'a' => 3, 'e' => "Moyenne 5, chaque écart vaut ±2, donc variance 4 et écart-type √4 = 2. Le 4 est la variance, pas l’écart-type."],
                    ['q' => "Pourquoi ne mesure-t-on pas la dispersion par la simple moyenne des écarts à la moyenne ?", 'c' => ["elle vaut zéro : les écarts se compensent", "elle donnerait toujours un nombre négatif", "elle ne tient pas compte du nombre d’observations", "elle est impossible à calculer sur des montants en DH"], 'a' => 0, 'e' => "Les écarts à la moyenne se compensent exactement ; élever au carré (puis prendre la racine) évite cette annulation."],
                    ['q' => "Des salaires en dirhams ont une variance de 90 000. Dans quelle unité cette variance est-elle exprimée ?", 'c' => ["en dirhams (DH)", "en pourcentage", "en dirhams carrés", "en racine de dirhams"], 'a' => 2, 'e' => "On élève des écarts en DH au carré, donc DH². L’écart-type, √90 000 = 300, repasse en DH."],
                    ['q' => "La variance d’une série de taux d’inflation vaut 0,16. Quel est son écart-type ?", 'c' => ["0,04", "0,08", "1,6", "0,4"], 'a' => 3, 'e' => "L’écart-type est la racine carrée de la variance : 0,4 × 0,4 = 0,16."],
                    ['q' => "Chaque prix d’un lot est multiplié par 5. L’écart-type, qui valait 4, devient :", 'c' => ["20", "100", "4", "9"], 'a' => 0, 'e' => "L’écart-type suit le facteur multiplicatif : 4 × 5 = 20. C’est la variance qui serait multipliée par 25."],
                    ['q' => "Deux projets rapportent en moyenne 6 % par an. L’écart-type des rendements est de 1 % pour A et de 7 % pour B. Lequel est le plus risqué ?", 'c' => ["A, car son écart-type est plus petit", "B : ses rendements s’écartent davantage de la moyenne", "ni l’un ni l’autre, puisque les moyennes sont égales", "ils le sont autant, le risque ne dépend que de la moyenne"], 'a' => 1, 'e' => "En finance, un écart-type élevé signifie des rendements plus imprévisibles, donc plus de risque pour un même rendement moyen."],
                    ['q' => "Pour une série de 4 observations, les carrés des écarts à la moyenne valent 4, 9, 16 et 11. Quelle est la variance ?", 'c' => ["40", "6,3", "10", "13,3"], 'a' => 2, 'e' => "Somme des carrés : 4 + 9 + 16 + 11 = 40, divisée par 4 donne 10. Le 13,3 correspond à 40 ÷ 3."],
                    ['q' => "Un étudiant calcule une variance de −4. Que faut-il en conclure ?", 'c' => ["la dispersion est négative, les valeurs se rapprochent", "c’est correct si la moyenne est négative", "il y a une erreur : une variance est positive ou nulle", "il suffit d’en prendre la racine carrée pour trouver −2"], 'a' => 2, 'e' => "Une variance est une moyenne de carrés, donc jamais négative. Elle vaut zéro seulement si toutes les valeurs sont identiques."],
                    ['q' => "Pour comparer la dispersion de salaires en DH et de prix en euros, on utilise le rapport écart-type ÷ moyenne. Comment l’appelle-t-on ?", 'c' => ["le coefficient de variation (écart-type ÷ moyenne)", "le coefficient de corrélation", "l’indice de Laspeyres", "le taux de croissance moyen"], 'a' => 0, 'e' => "Ce rapport est sans unité, donc comparable d’une série à l’autre : c’est le coefficient de variation."],
                ],
            ],
            [
                'title' => "Probabilités pour l’économie",
                'description' => "Maîtriser les probabilités simples pour raisonner sur le risque et l’incertitude.",
                'questions' => [
                    ['q' => "On lance un dé équilibré à six faces. Quelle est la probabilité d’obtenir un multiple de 3 ?", 'c' => ["1/6", "1/2", "1/3", "1/12"], 'a' => 2, 'e' => "Seuls 3 et 6 conviennent : 2 cas favorables sur 6, soit 1/3."],
                    ['q' => "La probabilité qu’un client paie sa facture en retard est de 0,15. Quelle est la probabilité qu’il paie à temps ?", 'c' => ["0,15", "0,85", "0,015", "0,75"], 'a' => 1, 'e' => "L’événement contraire a pour probabilité 1 − 0,15 = 0,85."],
                    ['q' => "Un étudiant annonce : « la probabilité que le taux de change monte est de 120 % ». Où est son erreur ?", 'c' => ["il a oublié d’ajouter la probabilité de l’événement contraire", "un taux de change n’est pas un événement aléatoire", "les probabilités ne s’expriment jamais en pourcentage", "une probabilité est comprise entre 0 et 1 (0 % et 100 %)"], 'a' => 3, 'e' => "Une probabilité ne peut pas dépasser 1, soit 100 % : 120 % n’a aucun sens."],
                    ['q' => "Deux entreprises indépendantes ont respectivement 0,5 et 0,2 de chances d’obtenir un marché. Quelle est la probabilité que les deux l’obtiennent ?", 'c' => ["0,7", "0,1", "0,25", "0,3"], 'a' => 1, 'e' => "Pour des événements indépendants, on multiplie : 0,5 × 0,2 = 0,1. Additionner (0,7) est l’erreur classique."],
                    ['q' => "Dans un tirage, le lot A sort avec la probabilité 1/10 et le lot B avec 3/10 (jamais ensemble). Quelle est la probabilité d’obtenir A ou B ?", 'c' => ["0,4", "0,03", "0,13", "0,2"], 'a' => 0, 'e' => "Les deux événements s’excluent : on additionne, 0,1 + 0,3 = 0,4. Le produit 0,03 serait pour « A et B »."],
                    ['q' => "Un projet rapporte 100 000 DH avec une probabilité de 0,6, et rien sinon. Quel est le gain espéré ?", 'c' => ["40 000 DH", "100 000 DH", "60 000 DH", "160 000 DH"], 'a' => 2, 'e' => "Espérance = 0,6 × 100 000 + 0,4 × 0 = 60 000 DH."],
                    ['q' => "Parmi 200 salariés, 80 sont des femmes et 20 d’entre elles sont cadres. On choisit une femme : quelle est la probabilité qu’elle soit cadre ?", 'c' => ["0,1", "0,4", "0,2", "0,25"], 'a' => 3, 'e' => "Sachant qu’on prend une femme, la base est 80 et non 200 : 20 ÷ 80 = 0,25."],
                    ['q' => "On lance deux fois une pièce équilibrée. Quelle est la probabilité d’obtenir deux fois pile ?", 'c' => ["50 %", "25 %", "12,5 %", "33,3 %"], 'a' => 1, 'e' => "Lancers indépendants : 1/2 × 1/2 = 1/4."],
                    ['q' => "Une banque estime à 2 % la probabilité de défaut d’un emprunteur. Sur 1 000 emprunteurs semblables, combien feront défaut environ ?", 'c' => ["environ 20 emprunteurs, soit 2 % de 1 000", "exactement 2", "environ 200", "aucun, puisque 2 % est faible"], 'a' => 0, 'e' => "2 % de 1 000 = 20. Sur un grand nombre de cas, la fréquence se rapproche de la probabilité."],
                    ['q' => "Pourquoi un assureur peut-il prévoir ses sinistres sur des milliers de contrats, mais pas un sinistre précis ?", 'c' => ["il choisit des clients qui ne seront jamais sinistrés", "les sinistres sont forcément indépendants du hasard", "avec beaucoup de cas, la fréquence se stabilise", "la probabilité d’un sinistre est nulle pour chaque client"], 'a' => 2, 'e' => "C’est la loi des grands nombres : le hasard individuel se compense dans la masse, ce qui fonde le métier d’assureur."],
                ],
            ],
            [
                'title' => "Corrélation et relation entre variables",
                'description' => "Lire un coefficient de corrélation et un nuage de points sans confondre association et causalité.",
                'questions' => [
                    ['q' => "La corrélation entre l’âge d’une machine et ses frais de réparation vaut +0,8. Comment l’interpréter ?", 'c' => ["les frais de réparation provoquent le vieillissement des machines", "les machines âgées coûtent en général plus cher à réparer", "80 % des machines tombent en panne", "les deux variables sont identiques à 80 %"], 'a' => 1, 'e' => "+0,8 indique une forte association positive : quand l’une monte, l’autre tend à monter. Cela ne dit rien du pourcentage de pannes."],
                    ['q' => "Le coefficient de corrélation linéaire ne peut prendre que des valeurs comprises entre :", 'c' => ["0 et 1", "−100 et +100", "0 et 100", "−1 et +1, bornes comprises"], 'a' => 3, 'e' => "Par construction, r reste dans [−1 ; +1] ; −1 et +1 correspondent à un alignement parfait des points."],
                    ['q' => "Le prix d’un bien et la quantité demandée ont une corrélation de −0,9. Que cela évoque-t-il ?", 'c' => ["une relation décroissante forte, cohérente avec la demande", "une relation croissante forte entre les deux variables", "une absence de relation linéaire", "une erreur de calcul, car une corrélation ne peut être négative"], 'a' => 0, 'e' => "Signe négatif : quand le prix monte, la quantité demandée tend à baisser ; −0,9 est proche de −1, donc la relation est forte."],
                    ['q' => "En été, les ventes de glaces et le nombre de noyades augmentent ensemble. Quelle explication est la plus sensée ?", 'c' => ["manger des glaces provoque des noyades", "les noyades poussent les gens à acheter des glaces", "la chaleur fait augmenter les deux phénomènes", "le hasard explique tout, sans lien avec la saison"], 'a' => 2, 'e' => "Une variable cachée, la température, agit sur les deux. Corrélation n’est pas causalité."],
                    ['q' => "Un nuage de points forme un U très net, pourtant r est proche de 0. Pourquoi ?", 'c' => ["r est toujours proche de 0 dès qu’il y a plus de 30 points", "il y a en réalité une relation linéaire négative cachée", "les variables sont forcément indépendantes", "r mesure uniquement une relation linéaire, pas courbe"], 'a' => 3, 'e' => "Une relation en U est forte mais pas linéaire : r la manque. D’où l’intérêt de regarder le graphique avant de conclure."],
                    ['q' => "Quel graphique permet de visualiser la relation entre le revenu et l’épargne de 40 ménages ?", 'c' => ["un diagramme circulaire des revenus", "un nuage de points, un point par ménage", "un histogramme d’une seule variable", "une courbe d’évolution dans le temps"], 'a' => 1, 'e' => "Chaque ménage devient un point (revenu, épargne) ; la forme du nuage révèle le sens et la force du lien."],
                    ['q' => "Sur 10 000 observations, on trouve r = 0,3 entre deux variables. Quelle lecture est prudente ?", 'c' => ["une association positive faible", "une forte association positive", "une relation causale établie entre les deux", "une relation négative"], 'a' => 0, 'e' => "0,3 est assez éloigné de 1 : le lien existe mais reste faible, et le nombre d’observations ne change pas cette lecture."],
                    ['q' => "On ajoute à un petit nuage de points une entreprise géante très atypique. Que peut-il arriver au coefficient r ?", 'c' => ["rien, r ignore les points extrêmes", "il devient obligatoirement égal à 1, car la grande entreprise domine", "il devient obligatoirement négatif", "il peut changer fortement, voire créer une corrélation"], 'a' => 3, 'e' => "Un point éloigné pèse beaucoup dans le calcul ; il faut toujours repérer les valeurs aberrantes avant d’interpréter r."],
                    ['q' => "La corrélation entre taille (cm) et poids (kg) vaut 0,7. On exprime le poids en livres, en le multipliant par 2,2. Que devient r ?", 'c' => ["il est multiplié par 2,2", "il diminue de 2,2 points", "il reste égal à 0,7, car r est sans unité", "il devient négatif"], 'a' => 2, 'e' => "r est sans unité et ne dépend pas de l’échelle de mesure : changer d’unité ne change pas la corrélation."],
                    ['q' => "Si r = −1 exactement, les points du nuage sont :", 'c' => ["alignés sur une droite croissante", "alignés sur une droite descendante", "dispersés sans aucune forme particulière", "répartis en deux groupes séparés"], 'a' => 1, 'e' => "−1 signifie une relation linéaire parfaite de sens opposé : tous les points sont sur une droite qui descend."],
                ],
            ],
            [
                'title' => "Indices économiques et évolution des prix",
                'description' => "Calculer des variations en pourcentage et interpréter un indice des prix et le pouvoir d’achat.",
                'questions' => [
                    ['q' => "Un indice des prix vaut 100 en 2020 et 108 en 2023. De combien les prix ont-ils augmenté ?", 'c' => ["8 %, car on retranche la base 100", "108 %", "0,8 %", "18 %"], 'a' => 0, 'e' => "L’indice de base vaut 100 : passer à 108 signifie +8 %, pas +108 %."],
                    ['q' => "Un indice passe de 160 à 120. Quelle est la baisse en pourcentage ?", 'c' => ["40 %", "33 %", "133 %", "25 %"], 'a' => 3, 'e' => "Baisse de 40 points, rapportée à la valeur de départ : 40 ÷ 160 = 0,25, soit 25 %."],
                    ['q' => "Un indice passe de 250 à 275. Quel est le taux d’augmentation ?", 'c' => ["25 %", "10 %", "9,1 %", "27,5 %"], 'a' => 1, 'e' => "(275 − 250) ÷ 250 = 25 ÷ 250 = 0,10. On divise toujours par la valeur de départ, pas d’arrivée (d’où 9,1 % faux)."],
                    ['q' => "Un indice en base 100 en 2015 vaut 120 en 2020 et 150 en 2025. Quelle est l’évolution entre 2020 et 2025 ?", 'c' => ["+ 30 %", "+ 50 %", "+ 25 %", "+ 125 %"], 'a' => 2, 'e' => "150 ÷ 120 = 1,25 : hausse de 25 %. L’écart de 30 points n’est pas 30 %, car la base de calcul est 120."],
                    ['q' => "Un salaire passe de 4 000 à 4 200 DH (+5 %) alors que l’indice des prix augmente de 8 %. Que devient le pouvoir d’achat ?", 'c' => ["il augmente, car le salaire a progressé", "il reste stable", "on ne peut pas le savoir sans l’année de base", "il baisse, les prix montant plus vite"], 'a' => 3, 'e' => "Le revenu réel évolue à peu près comme +5 % − 8 %, soit une perte d’environ 3 %."],
                    ['q' => "Dans l’indice, le logement pèse 30 % et les transports 10 %. Laquelle de ces hausses de 10 % influence le plus l’indice ?", 'c' => ["celle des loyers, pondérés trois fois plus", "celle des transports, qui est plus rare", "les deux autant, puisque la hausse est la même", "ni l’une ni l’autre, car les pondérations s’annulent"], 'a' => 0, 'e' => "Contribution : 30 % × 10 % = 3 points pour le logement, contre 1 point pour les transports."],
                    ['q' => "Un produit coûtait 20 DH en 2020 (indice 100) et coûte 23 DH en 2024. Quel est son indice en 2024 ?", 'c' => ["103", "123", "115", "86,96"], 'a' => 2, 'e' => "23 ÷ 20 × 100 = 115 : le prix a augmenté de 15 %."],
                    ['q' => "Le pain passe de 1,20 DH à 1,50 DH. Quel est l’indice de son prix avec le prix initial pour base 100 ?", 'c' => ["30", "125", "80", "150"], 'a' => 1, 'e' => "1,50 ÷ 1,20 × 100 = 125. Le 80 résulte de l’inversion de la division."],
                    ['q' => "Un élève affirme : « l’indice est passé de 100 à 150, donc les prix ont augmenté de 150 % ». Quelle est son erreur ?", 'c' => ["il fallait diviser 150 par 2", "un indice ne permet pas de mesurer une hausse", "l’indice a augmenté de 150 points", "la hausse est de 50 %, car on retranche 100"], 'a' => 3, 'e' => "(150 − 100) ÷ 100 = 50 %. La base 100 sert justement de point de départ."],
                    ['q' => "Pourquoi l’indice des prix à la consommation ne reflète-t-il pas exactement l’inflation vécue par chaque ménage ?", 'c' => ["il repose sur un panier moyen de ménages", "il ignore les prix des produits alimentaires", "il n’est calculé qu’une fois tous les dix ans", "il mesure les salaires et non les prix"], 'a' => 0, 'e' => "Le panier et ses pondérations sont ceux d’un ménage moyen ; un ménage qui dépense surtout en loyer ou en transport subit une autre inflation."],
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
