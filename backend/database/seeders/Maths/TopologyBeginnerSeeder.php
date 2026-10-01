<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class TopologyBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'topology')->firstOrFail();

        $settings = [
            'duration' => 25,
            'passing_score' => 60,
        ];

        $makeQuestion = static function (
            string $question,
            string $correct,
            string $wrong1,
            string $wrong2,
            string $wrong3,
            string $explanation
        ): array {
            return [
                'question' => $question,
                'choices' => [
                    ['choice_text' => $correct, 'is_correct' => true],
                    ['choice_text' => $wrong1, 'is_correct' => false],
                    ['choice_text' => $wrong2, 'is_correct' => false],
                    ['choice_text' => $wrong3, 'is_correct' => false],
                ],
                'explanation' => $explanation,
            ];
        };

        $quizzes = [
            [
                'title' => "Notions de base en topologie",
                'description' => "Découvrir les espaces topologiques, les ensembles ouverts et les voisinages dans des exemples simples.",
                'questions' => [
                    $makeQuestion(
                        "Que cherche principalement à étudier la topologie ?",
                        "Les propriétés des espaces qui restent préservées par les déformations continues.",
                        "Uniquement les distances entre les points.",
                        "Uniquement les angles dans les triangles.",
                        "Les nombres premiers seulement.",
                        "La topologie s'intéresse notamment aux propriétés qualitatives qui ne changent pas sous certaines déformations continues."
                    ),
                    $makeQuestion(
                        "Dans un espace topologique, une famille d'ensembles ouverts sert notamment à définir :",
                        "La structure topologique de l'espace.",
                        "Une multiplication sur les points.",
                        "Une dérivée pour chaque point.",
                        "Une suite numérique obligatoire.",
                        "La topologie est caractérisée par sa collection d'ouverts, qui doit satisfaire certains axiomes."
                    ),
                    $makeQuestion(
                        "Quelle propriété doit posséder l'intersection de deux ouverts ?",
                        "Elle doit être ouverte.",
                        "Elle doit toujours être fermée.",
                        "Elle doit contenir tous les points de l'espace.",
                        "Elle doit être vide.",
                        "Une des propriétés d'une topologie est la stabilité par intersections finies, notamment l'intersection de deux ouverts."
                    ),
                    $makeQuestion(
                        "L'union quelconque d'ouverts est-elle toujours ouverte ?",
                        "Oui",
                        "Non",
                        "Seulement s'il y a exactement deux ensembles.",
                        "Seulement dans les espaces finis.",
                        "La stabilité par unions quelconques fait partie des axiomes d'une topologie."
                    ),
                    $makeQuestion(
                        "Dans toute topologie sur un ensemble X, X est :",
                        "Ouvert",
                        "Toujours fermé seulement",
                        "Jamais ouvert",
                        "Forcément un singleton",
                        "Une topologie contient toujours l'ensemble vide et l'espace tout entier X comme ouverts."
                    ),
                    $makeQuestion(
                        "Dans toute topologie sur X, l'ensemble vide est :",
                        "Ouvert",
                        "Toujours non ouvert",
                        "Toujours un singleton",
                        "Toujours égal à X",
                        "L'ensemble vide appartient nécessairement à toute topologie."
                    ),
                    $makeQuestion(
                        "Dans la topologie usuelle de ℝ, l'intervalle ]0 ; 1[ est :",
                        "Ouvert",
                        "Fermé seulement",
                        "Ni ouvert ni fermé",
                        "Un point",
                        "Les extrémités 0 et 1 ne sont pas incluses, ce qui fait de ]0 ; 1[ un ouvert de ℝ."
                    ),
                    $makeQuestion(
                        "Dans ℝ avec sa topologie usuelle, [0 ; 1] est :",
                        "Fermé",
                        "Ouvert",
                        "Ni ouvert ni fermé",
                        "Un ensemble dense seulement",
                        "Le complémentaire de [0 ; 1] est ouvert, donc [0 ; 1] est fermé."
                    ),
                    $makeQuestion(
                        "Un voisinage d'un point x contient généralement :",
                        "Un ouvert contenant x.",
                        "Uniquement le point x.",
                        "Tous les points de l'espace.",
                        "Aucun ensemble ouvert.",
                        "Un voisinage de x est un ensemble qui contient au moins un ouvert contenant x."
                    ),
                    $makeQuestion(
                        "Quelle idée distingue la topologie d'une étude purement métrique ?",
                        "On peut étudier l'ouverture et la continuité sans disposer nécessairement d'une distance explicite.",
                        "La topologie interdit toute notion d'ensemble.",
                        "La topologie utilise uniquement les nombres entiers.",
                        "La topologie exige toujours une formule de distance.",
                        "La notion de topologie est plus générale qu'une structure métrique : une distance n'est pas indispensable pour définir des ouverts."
                    ),
                ],
            ],
            [
                'title' => "Ensembles ouverts et fermés",
                'description' => "Identifier les ensembles ouverts et fermés et utiliser les propriétés des complémentaires dans des espaces usuels.",
                'questions' => [
                    $makeQuestion(
                        "Dans ℝ, l'ensemble ]-2 ; 3[ est :",
                        "Ouvert",
                        "Fermé",
                        "Ni ouvert ni fermé",
                        "Un singleton",
                        "Un intervalle ouvert est ouvert pour la topologie usuelle de ℝ."
                    ),
                    $makeQuestion(
                        "Dans ℝ, l'ensemble [-2 ; 3] est :",
                        "Fermé",
                        "Ouvert",
                        "Ni ouvert ni fermé",
                        "Dense dans ℝ",
                        "Ses deux extrémités appartiennent à l'ensemble et son complémentaire est ouvert."
                    ),
                    $makeQuestion(
                        "Dans ℝ, l'ensemble [0 ; 1[ est :",
                        "Ni ouvert ni fermé",
                        "Ouvert",
                        "Fermé",
                        "Égal à ℝ",
                        "Il contient 0 mais pas 1 : il n'est pas ouvert à 0 et son complémentaire n'est pas ouvert à 1."
                    ),
                    $makeQuestion(
                        "Quel est le complémentaire de ]0 ; 2[ dans ℝ ?",
                        "]-∞ ; 0] ∪ [2 ; +∞[",
                        "]-∞ ; 0[ ∪ ]2 ; +∞[",
                        "[0 ; 2]",
                        "]0 ; 2]",
                        "Le complémentaire contient les points x ≤ 0 et x ≥ 2."
                    ),
                    $makeQuestion(
                        "Si A est fermé dans ℝ, que peut-on dire de son complémentaire ?",
                        "Il est ouvert.",
                        "Il est toujours fermé.",
                        "Il est toujours vide.",
                        "Il est toujours compact.",
                        "Par définition, un ensemble fermé est un ensemble dont le complémentaire est ouvert."
                    ),
                    $makeQuestion(
                        "Si A est ouvert, son complémentaire est :",
                        "Fermé",
                        "Toujours ouvert uniquement",
                        "Forcément vide",
                        "Toujours un singleton",
                        "Le complémentaire d'un ouvert est fermé, et réciproquement."
                    ),
                    $makeQuestion(
                        "L'ensemble ℝ tout entier est-il fermé dans sa topologie usuelle ?",
                        "Oui",
                        "Non",
                        "Seulement pour les nombres positifs",
                        "Seulement si ℝ est fini",
                        "Le complémentaire de ℝ est l'ensemble vide, qui est ouvert ; ℝ est donc fermé."
                    ),
                    $makeQuestion(
                        "L'ensemble ℝ tout entier est-il aussi ouvert dans sa topologie usuelle ?",
                        "Oui",
                        "Non",
                        "Seulement si 0 appartient à ℝ",
                        "Seulement pour une topologie discrète",
                        "Tout l'espace est toujours ouvert dans sa propre topologie."
                    ),
                    $makeQuestion(
                        "L'ensemble vide est-il fermé ?",
                        "Oui",
                        "Non",
                        "Seulement dans ℝ",
                        "Seulement dans un espace fini",
                        "Le complémentaire de l'ensemble vide est X, qui est ouvert ; l'ensemble vide est donc fermé."
                    ),
                    $makeQuestion(
                        "Dans la topologie usuelle de ℝ, une union finie d'ensembles fermés est :",
                        "Fermée",
                        "Toujours ouverte",
                        "Toujours vide",
                        "Jamais fermée",
                        "Les ensembles fermés sont stables par unions finies et intersections arbitraires."
                    ),
                ],
            ],
            [
                'title' => "Intérieur, adhérence et frontière",
                'description' => "Comprendre l'intérieur, l'adhérence et la frontière d'un ensemble dans des exemples de ℝ.",
                'questions' => [
                    $makeQuestion(
                        "L'intérieur d'un ensemble A contient les points qui :",
                        "Possèdent un voisinage ouvert entièrement contenu dans A.",
                        "Sont forcément à l'extérieur de A.",
                        "Sont les seuls points de la frontière.",
                        "Appartiennent nécessairement à tous les ouverts de l'espace.",
                        "Un point intérieur possède un voisinage suffisamment petit qui reste complètement dans l'ensemble."
                    ),
                    $makeQuestion(
                        "Dans ℝ, quel est l'intérieur de [0 ; 1] ?",
                        "]0 ; 1[",
                        "[0 ; 1]",
                        "{0, 1}",
                        "ℝ",
                        "Les points strictement compris entre 0 et 1 possèdent un petit intervalle ouvert contenu dans [0 ; 1]."
                    ),
                    $makeQuestion(
                        "Dans ℝ, quel est l'intérieur de ℤ ?",
                        "L'ensemble vide",
                        "ℤ",
                        "ℝ",
                        "{0}",
                        "Aucun entier ne contient un petit intervalle ouvert entièrement constitué d'entiers."
                    ),
                    $makeQuestion(
                        "L'adhérence de A contient notamment :",
                        "Tous les points de A et les points qu'on peut approcher arbitrairement par des points de A.",
                        "Uniquement les points extérieurs à A.",
                        "Seulement les points isolés.",
                        "Uniquement les points de la frontière.",
                        "L'adhérence regroupe A et tous ses points d'accumulation ou points limites dans le cadre usuel."
                    ),
                    $makeQuestion(
                        "Dans ℝ, quelle est l'adhérence de ]0 ; 1[ ?",
                        "[0 ; 1]",
                        "]0 ; 1[",
                        "ℝ",
                        "{0, 1}",
                        "Les points 0 et 1 peuvent être approchés par des points de ]0 ; 1[, donc ils appartiennent à l'adhérence."
                    ),
                    $makeQuestion(
                        "Dans ℝ, quelle est la frontière de ]0 ; 1[ ?",
                        "{0, 1}",
                        "]0 ; 1[",
                        "[0 ; 1]",
                        "ℝ",
                        "La frontière correspond aux points de l'adhérence qui ne sont pas intérieurs ; ici ce sont 0 et 1."
                    ),
                    $makeQuestion(
                        "Quel lien existe entre un ensemble ouvert A et son intérieur A° ?",
                        "A° = A",
                        "A° = ∅ toujours",
                        "A° contient uniquement la frontière",
                        "A° est toujours le complémentaire de A",
                        "Un ensemble est ouvert exactement lorsqu'il coïncide avec son intérieur."
                    ),
                    $makeQuestion(
                        "Quel lien existe entre un ensemble fermé A et son adhérence ?",
                        "L'adhérence de A est A.",
                        "L'adhérence de A est toujours vide.",
                        "L'adhérence de A est son complémentaire.",
                        "L'adhérence est toujours ℝ.",
                        "Un ensemble est fermé s'il contient tous ses points limites, donc son adhérence ne lui ajoute aucun point."
                    ),
                    $makeQuestion(
                        "Dans ℝ, quel est l'intérieur de {2} ?",
                        "L'ensemble vide",
                        "{2}",
                        "ℝ",
                        "[-1 ; 3]",
                        "Aucun intervalle ouvert non vide autour de 2 n'est contenu dans le singleton {2}."
                    ),
                    $makeQuestion(
                        "Dans ℝ, quel est l'intérieur de ℝ ?",
                        "ℝ",
                        "∅",
                        "{0}",
                        "Les entiers seulement",
                        "Chaque point réel possède un intervalle ouvert autour de lui qui reste dans ℝ."
                    ),
                ],
            ],
            [
                'title' => "Bases métriques et voisinages",
                'description' => "Relier la topologie à la distance euclidienne et interpréter boules ouvertes, voisinages et convergence simple.",
                'questions' => [
                    $makeQuestion(
                        "Dans ℝ, la distance usuelle entre x et y est :",
                        "|x - y|",
                        "x + y",
                        "x² + y²",
                        "x / y",
                        "La distance euclidienne sur la droite réelle est donnée par la valeur absolue de la différence."
                    ),
                    $makeQuestion(
                        "Dans ℝ, une boule ouverte de centre x0 et de rayon r > 0 est :",
                        "]x0 - r ; x0 + r[",
                        "[x0 - r ; x0 + r]",
                        "]x0 ; x0 + r]",
                        "{x0}",
                        "Une boule ouverte contient les points dont la distance au centre est strictement inférieure à r."
                    ),
                    $makeQuestion(
                        "Quelle boule ouverte de centre 2 et de rayon 3 contient le point 4 ?",
                        "Oui",
                        "Non",
                        "Seulement si le rayon vaut 2",
                        "Impossible à savoir",
                        "La distance entre 4 et 2 est 2, et 2 < 3 ; donc 4 appartient à la boule."
                    ),
                    $makeQuestion(
                        "Le point 5 appartient-il à la boule ouverte de centre 2 et de rayon 3 ?",
                        "Non",
                        "Oui",
                        "Seulement dans un espace discret",
                        "Toujours",
                        "La distance |5 - 2| = 3 est exactement le rayon, or une boule ouverte exige une distance strictement inférieure à 3."
                    ),
                    $makeQuestion(
                        "Que signifie x_n → L pour une suite réelle ?",
                        "Les termes x_n deviennent arbitrairement proches de L.",
                        "Tous les termes sont égaux à L dès le début.",
                        "La suite est toujours croissante.",
                        "La suite est forcément constante.",
                        "La convergence signifie que la distance |x_n - L| devient aussi petite que souhaité lorsque n augmente."
                    ),
                    $makeQuestion(
                        "Dans ℝ, l'ensemble ]1 ; 2[ peut-il être vu comme une union de boules ouvertes ?",
                        "Oui",
                        "Non",
                        "Seulement si l'intervalle est fermé",
                        "Seulement dans ℂ",
                        "Tout ouvert de ℝ est union de boules ouvertes, et chaque point de ]1 ; 2[ possède un petit intervalle ouvert contenu dans l'ensemble."
                    ),
                    $makeQuestion(
                        "Un point x est intérieur à A s'il existe :",
                        "Un rayon r > 0 tel que la boule ouverte B(x,r) soit contenue dans A.",
                        "Un rayon r = 0 uniquement.",
                        "Une boule entièrement extérieure à A.",
                        "Un intervalle de longueur infinie contenu dans A.",
                        "La définition locale de l'intérieur repose sur l'existence d'une boule ouverte centrée au point et incluse dans A."
                    ),
                    $makeQuestion(
                        "La distance entre -2 et 3 est :",
                        "5",
                        "1",
                        "-5",
                        "6",
                        "On calcule |-2 - 3| = |-5| = 5."
                    ),
                    $makeQuestion(
                        "Une boule ouverte de rayon r est-elle incluse dans la boule fermée de même centre et de même rayon ?",
                        "Oui",
                        "Non",
                        "Seulement pour r = 0",
                        "Seulement dans un espace fini",
                        "La condition distance < r implique automatiquement distance ≤ r, donc la boule ouverte est contenue dans la boule fermée correspondante."
                    ),
                    $makeQuestion(
                        "Pourquoi la notion de boule est-elle utile en topologie métrique ?",
                        "Elle permet de décrire localement les voisinages et l'ouverture.",
                        "Elle remplace toutes les fonctions.",
                        "Elle sert uniquement à calculer des volumes.",
                        "Elle interdit les ensembles ouverts.",
                        "Les boules permettent de formuler de façon concrète les notions locales d'intérieur, de voisinage et de continuité dans un espace métrique."
                    ),
                ],
            ],
            [
                'title' => "Compacité et connexité",
                'description' => "Introduire intuitivement la compacité et la connexité avec des exemples classiques de la droite réelle.",
                'questions' => [
                    $makeQuestion(
                        "Dans ℝ, quel intervalle est compact ?",
                        "[0 ; 1]",
                        "]0 ; 1[",
                        "]0 ; +∞[",
                        "ℝ",
                        "Dans ℝ, un ensemble est compact s'il est fermé et borné. [0 ; 1] vérifie ces deux propriétés."
                    ),
                    $makeQuestion(
                        "Dans ℝ, l'intervalle ouvert ]0 ; 1[ est-il compact ?",
                        "Non",
                        "Oui",
                        "Seulement parce qu'il est borné",
                        "Seulement parce qu'il est ouvert",
                        "]0 ; 1[ est borné mais pas fermé dans ℝ, donc il n'est pas compact."
                    ),
                    $makeQuestion(
                        "Quel résultat simple caractérise les compacts de ℝ ?",
                        "Un ensemble de ℝ est compact s'il est fermé et borné.",
                        "Un ensemble doit être ouvert et non borné.",
                        "Un ensemble doit être un singleton.",
                        "Un ensemble doit contenir 0.",
                        "C'est le théorème de Heine-Borel appliqué à ℝ."
                    ),
                    $makeQuestion(
                        "Que signifie intuitivement qu'un ensemble est connexe ?",
                        "Il ne peut pas être séparé en deux morceaux ouverts disjoints non vides dans l'espace considéré.",
                        "Il est forcément fini.",
                        "Il contient toujours exactement deux points.",
                        "Il est toujours compact.",
                        "La connexité exprime l'idée d'un ensemble qui n'est pas séparé en deux parties ouvertes disjointes non vides."
                    ),
                    $makeQuestion(
                        "Dans ℝ, un intervalle non vide est-il connexe ?",
                        "Oui",
                        "Non",
                        "Seulement s'il est fermé",
                        "Seulement s'il est borné",
                        "Tous les intervalles de ℝ sont connexes, qu'ils soient ouverts, fermés ou semi-ouverts."
                    ),
                    $makeQuestion(
                        "L'ensemble [0 ; 1] ∪ [2 ; 3] est-il connexe dans ℝ ?",
                        "Non",
                        "Oui",
                        "Seulement s'il contient 0",
                        "Seulement si les deux intervalles ont la même longueur",
                        "Il y a un espace entre 1 et 2, ce qui sépare l'ensemble en deux composantes non vides."
                    ),
                    $makeQuestion(
                        "Un espace discret fini est-il compact ?",
                        "Oui",
                        "Non",
                        "Seulement s'il contient exactement deux points",
                        "Jamais",
                        "Tout espace topologique fini est compact ; on peut aussi le voir directement avec les recouvrements ouverts."
                    ),
                    $makeQuestion(
                        "Tout ensemble compact de ℝ est-il borné ?",
                        "Oui",
                        "Non",
                        "Seulement s'il est ouvert",
                        "Seulement s'il est un intervalle",
                        "Dans ℝ, la compacité implique la bornitude, conformément au théorème de Heine-Borel."
                    ),
                    $makeQuestion(
                        "Tout ensemble compact de ℝ est-il fermé ?",
                        "Oui",
                        "Non",
                        "Seulement s'il contient 0",
                        "Seulement s'il est connexe",
                        "Dans ℝ, un compact est nécessairement fermé et borné."
                    ),
                    $makeQuestion(
                        "Quelle notion est particulièrement liée au théorème des valeurs intermédiaires ?",
                        "La connexité des intervalles combinée à la continuité.",
                        "La compacité des nombres entiers uniquement.",
                        "La fermeture du vide uniquement.",
                        "La notion de permutation.",
                        "Le théorème des valeurs intermédiaires exploite la structure connexe d'un intervalle et la continuité de la fonction."
                    ),
                ],
            ],
            [
                'title' => "Continuité topologique",
                'description' => "Comprendre la continuité à partir des ouverts et reconnaître quelques applications simples.",
                'questions' => [
                    $makeQuestion(
                        "Une définition topologique standard de la continuité utilise notamment :",
                        "Les images réciproques des ouverts.",
                        "Uniquement les dérivées secondes.",
                        "Les déterminants des matrices.",
                        "Les factorisations entières.",
                        "Une fonction est continue lorsque l'image réciproque de tout ouvert de l'espace d'arrivée est ouverte dans l'espace de départ."
                    ),
                    $makeQuestion(
                        "Sur ℝ, toute fonction polynomiale est-elle continue ?",
                        "Oui",
                        "Non",
                        "Seulement les polynômes de degré pair",
                        "Seulement sur [0 ; 1]",
                        "Les polynômes sont continus sur toute la droite réelle."
                    ),
                    $makeQuestion(
                        "La fonction f(x) = 1/x est-elle continue sur son domaine naturel ?",
                        "Oui",
                        "Non",
                        "Seulement en 0",
                        "Uniquement pour x < 0",
                        "La fonction rationnelle 1/x est continue partout où elle est définie, c'est-à-dire sur ℝ privé de 0."
                    ),
                    $makeQuestion(
                        "Une composition de deux fonctions continues est :",
                        "Continue, lorsque la composition est bien définie.",
                        "Toujours discontinue.",
                        "Toujours constante.",
                        "Toujours non bornée.",
                        "La continuité est stable par composition dès que les domaines et codomaines permettent la composition."
                    ),
                    $makeQuestion(
                        "Une application constante entre deux espaces topologiques est-elle continue ?",
                        "Oui",
                        "Non",
                        "Seulement si l'espace de départ est fini",
                        "Seulement si la constante vaut 0",
                        "La préimage d'un ouvert est soit l'espace entier, soit l'ensemble vide, et ces deux ensembles sont ouverts."
                    ),
                    $makeQuestion(
                        "La continuité topologique dépend-elle nécessairement d'une formule explicite pour la fonction ?",
                        "Non",
                        "Oui",
                        "Seulement pour les fonctions réelles",
                        "Seulement dans les espaces compacts",
                        "La continuité peut être définie uniquement à partir des structures topologiques, sans formule analytique particulière."
                    ),
                    $makeQuestion(
                        "Que devient la notion de continuité classique de ℝ dans un espace métrique ?",
                        "Elle peut être formulée avec des boules et des distances.",
                        "Elle disparaît complètement.",
                        "Elle devient uniquement une propriété algébrique.",
                        "Elle ne concerne plus les fonctions.",
                        "Une métrique permet de décrire les voisinages et donc la continuité via des distances."
                    ),
                    $makeQuestion(
                        "Si f est continue et A est fermé dans l'espace d'arrivée, que peut-on dire de f^{-1}(A) ?",
                        "Il est fermé dans l'espace de départ.",
                        "Il est toujours ouvert seulement.",
                        "Il est toujours vide.",
                        "Il est forcément compact.",
                        "C'est une caractérisation équivalente de la continuité : les préimages des fermés sont fermées."
                    ),
                    $makeQuestion(
                        "Quelle fonction simple est continue sur ℝ ?",
                        "f(x) = |x|",
                        "f(x) = 1/x",
                        "f(x) = √x sur tout ℝ",
                        "f(x) = 1/(x - 1)",
                        "La valeur absolue est continue sur toute la droite réelle ; les autres fonctions ont des restrictions de domaine."
                    ),
                    $makeQuestion(
                        "Quel principe important relie compacité et continuité ?",
                        "L'image continue d'un compact est compacte.",
                        "L'image continue d'un compact est toujours ouverte.",
                        "Toute image continue est finie.",
                        "Une fonction continue détruit la connexité.",
                        "Une propriété fondamentale est que les applications continues envoient les compacts sur des compacts."
                    ),
                ],
            ],
            [
                'title' => "Révision générale de topologie",
                'description' => "Réviser les notions essentielles : ouverts, fermés, intérieur, adhérence, boules, compacité, connexité et continuité.",
                'questions' => [
                    $makeQuestion(
                        "Dans toute topologie sur X, lesquels sont toujours ouverts ?",
                        "∅ et X",
                        "Seulement les singletons",
                        "Uniquement les ensembles fermés",
                        "Aucun ensemble n'est imposé",
                        "Les axiomes d'une topologie imposent que l'ensemble vide et l'espace entier appartiennent à la topologie."
                    ),
                    $makeQuestion(
                        "Dans ℝ, quel ensemble est à la fois ouvert et fermé ?",
                        "ℝ",
                        "]0 ; 1]",
                        "[0 ; 1[",
                        "ℚ",
                        "ℝ est ouvert et fermé dans lui-même : il est ouvert par définition et son complémentaire, l'ensemble vide, est ouvert."
                    ),
                    $makeQuestion(
                        "Dans ℝ, quel est l'intérieur de [2 ; 5] ?",
                        "]2 ; 5[",
                        "[2 ; 5]",
                        "{2, 5}",
                        "ℝ",
                        "Les extrémités ne sont pas des points intérieurs, tandis que tous les points strictement entre 2 et 5 le sont."
                    ),
                    $makeQuestion(
                        "Dans ℝ, quelle est l'adhérence de ]2 ; 5[ ?",
                        "[2 ; 5]",
                        "]2 ; 5[",
                        "{2, 5}",
                        "ℝ",
                        "2 et 5 peuvent être approchés par des points de ]2 ; 5[, donc ils appartiennent à son adhérence."
                    ),
                    $makeQuestion(
                        "Quelle propriété caractérise un compact de ℝ ?",
                        "Être fermé et borné.",
                        "Être ouvert et non borné.",
                        "Être uniquement connexe.",
                        "Contenir l'origine.",
                        "Le théorème de Heine-Borel donne exactement cette caractérisation dans ℝ."
                    ),
                    $makeQuestion(
                        "Quel ensemble est connexe dans ℝ ?",
                        "]0 ; 4[",
                        "]0 ; 1[ ∪ ]2 ; 3[",
                        "{0, 2}",
                        "ℤ",
                        "Les intervalles réels sont connexes, alors que les ensembles présentant des morceaux séparés ne le sont pas."
                    ),
                    $makeQuestion(
                        "Une fonction constante est :",
                        "Toujours continue.",
                        "Toujours discontinue.",
                        "Continue seulement sur les ensembles finis.",
                        "Continue uniquement si sa constante vaut 0.",
                        "La préimage d'un ouvert par une fonction constante est soit vide, soit tout l'espace de départ, deux ouverts."
                    ),
                    $makeQuestion(
                        "Une boule ouverte de centre 1 et de rayon 2 dans ℝ est :",
                        "]-1 ; 3[",
                        "[-1 ; 3]",
                        "]1 ; 3]",
                        "[-2 ; 2]",
                        "On prend les réels dont la distance à 1 est strictement inférieure à 2 : -1 < x < 3."
                    ),
                    $makeQuestion(
                        "Quel énoncé est vrai pour un ensemble ouvert A ?",
                        "Chaque point de A possède un voisinage ouvert contenu dans A.",
                        "A contient nécessairement sa frontière.",
                        "A est nécessairement compact.",
                        "A est nécessairement borné.",
                        "C'est précisément l'idée locale derrière l'ouverture dans une topologie métrique."
                    ),
                    $makeQuestion(
                        "Quel énoncé résume le mieux la topologie ?",
                        "Elle étudie des notions comme ouverture, continuité, compacité et connexité dans des espaces abstraits.",
                        "Elle étudie uniquement les triangles rectangles.",
                        "Elle remplace toutes les autres branches des mathématiques.",
                        "Elle concerne seulement les nombres entiers.",
                        "La topologie fournit un cadre général pour étudier la structure des espaces et certaines propriétés qualitatives qui leur sont associées."
                    ),
                ],
            ],
        ];

        foreach ($quizzes as $quizData) {
            $quiz = Quiz::updateOrCreate(
                [
                    'subject_id' => $subject->id,
                    'title' => $quizData['title'],
                ],
                [
                    'owner_id' => null,
                    'description' => $quizData['description'],
                    'duration' => $settings['duration'],
                    'passing_score' => $settings['passing_score'],
                    'total_marks' => count($quizData['questions']),
                    'is_active' => true,
                    'difficulty' => 'Beginner',
                ]
            );

            foreach ($quizData['questions'] as $index => $questionData) {
                $question = Question::updateOrCreate(
                    [
                        'quiz_id' => $quiz->id,
                        'order' => $index + 1,
                    ],
                    [
                        'question' => $questionData['question'],
                        'type' => 'multiple_choice',
                        'marks' => 1,
                        'explanation' => $questionData['explanation'] ?? null,
                    ]
                );

                $question->choices()->delete();

                $choices = $questionData['choices'];
                shuffle($choices);

                foreach ($choices as $choiceIndex => $choice) {
                    Choice::create([
                        'question_id' => $question->id,
                        'choice_text' => $choice['choice_text'],
                        'is_correct' => $choice['is_correct'],
                        'order' => $choiceIndex + 1,
                    ]);
                }
            }
        }
    }
}
