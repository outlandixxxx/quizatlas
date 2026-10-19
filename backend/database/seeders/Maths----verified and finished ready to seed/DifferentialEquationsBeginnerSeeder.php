<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class DifferentialEquationsBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'differential-equations')->firstOrFail();

        $choicePositions = [2,3,3,2,2,1,3,1,1,4,3,1,2,1,2,2,3,3,2,4,3,1,2,3,4,1,3,2,4,4,3,2,4,1,3,4,3,4,4,2,3,4,3,3,1,3,3,1,2,2,1,2,1,2,4,4,2,4,4,1,1,4,2,1,3,3,1,4,2,1,4,4,1,4,2,1,2,1,4,3];
        $choicePositionIndex = 0;

        $makeQuestion = function (
            string $question,
            string $correct,
            string $wrong1,
            string $wrong2,
            string $wrong3,
            string $explanation
        ) use (&$choicePositions, &$choicePositionIndex): array {
            $wrongs = [$wrong1, $wrong2, $wrong3];
            $position = $choicePositions[$choicePositionIndex++];
            $choices = [];
            $wrongIndex = 0;
            for ($slot = 1; $slot <= 4; $slot++) {
                if ($slot === $position) {
                    $choices[] = ['choice_text' => $correct, 'is_correct' => true];
                } else {
                    $choices[] = ['choice_text' => $wrongs[$wrongIndex], 'is_correct' => false];
                    $wrongIndex++;
                }
            }

            return [
                'question' => $question,
                'choices' => $choices,
                'explanation' => $explanation,
            ];
        };

        $quizzes = [
            [
                'title' => 'Bases des équations différentielles',
                'description' => 'Découvrir les notions d\'ordre, solution et dérivée.',
                'duration' => 20,
                'passing_score' => 60,
                'questions' => [
                    $makeQuestion(
                        'Une équation différentielle contient :',
                        'Une fonction inconnue et au moins une dérivée',
                        'Uniquement des nombres entiers',
                        'Seulement une matrice',
                        'Aucune variable',
                        'La fonction recherchée apparaît avec une ou plusieurs de ses dérivées.'
                    ),
                    $makeQuestion(
                        'L\'ordre d\'une équation différentielle est le plus grand :',
                        'Ordre de dérivée présent',
                        'Nombre de solutions',
                        'Degré du polynôme',
                        'Coefficient',
                        'L\'ordre correspond à la dérivée la plus élevée qui apparaît.'
                    ),
                    $makeQuestion(
                        'La solution de y\'=0 est :',
                        'Une constante',
                        'Une droite non constante',
                        'Une exponentielle uniquement',
                        'y=x²',
                        'Une dérivée nulle signifie que la fonction reste constante.'
                    ),
                    $makeQuestion(
                        'Pour y\'=2y, une famille de solutions est :',
                        'y=Ce^{2x}',
                        'y=2x+C',
                        'y=Cx²',
                        'y=e^x+C',
                        'La dérivée de Ce^{2x} est 2Ce^{2x}=2y.'
                    ),
                    $makeQuestion(
                        'Une condition y(0)=3 sert à :',
                        'Déterminer une solution particulière',
                        'Changer l\'ordre de l\'équation',
                        'Supprimer la dérivée',
                        'Rendre l\'équation linéaire',
                        'Elle fixe une valeur initiale parmi la famille générale de solutions.'
                    ),
                    $makeQuestion(
                        'Dans y\'=ky, si k>0, on parle de :',
                        'Croissance exponentielle',
                        'Décroissance linéaire',
                        'Oscillation périodique',
                        'Constante',
                        'Un taux proportionnel positif produit une croissance exponentielle.'
                    ),
                    $makeQuestion(
                        'Une équation est séparable lorsque :',
                        'On peut regrouper les termes en y d\'un côté et ceux en x de l\'autre',
                        'Elle n\'a aucune constante',
                        'Elle est toujours du second ordre',
                        'Elle est quadratique',
                        'La séparation permet d\'intégrer chaque variable de son côté.'
                    ),
                    $makeQuestion(
                        'Une solution d\'une équation différentielle est :',
                        'Une fonction qui vérifie l\'équation',
                        'Une constante au hasard',
                        'Une dérivée seule',
                        'Un point unique',
                        'Elle doit satisfaire l\'égalité différentielle sur le domaine considéré.'
                    ),
                    $makeQuestion(
                        'Pour y\'+y=0, la solution générale est de type :',
                        'Ce^{-x}',
                        'Ce^x+1',
                        'x+C',
                        'C-x',
                        'La dérivée de Ce^{-x} vaut -Ce^{-x}, donc y\'+y=0.'
                    ),
                    $makeQuestion(
                        'Pourquoi les équations différentielles servent-elles en modélisation ?',
                        'Elles décrivent des évolutions et des taux de variation',
                        'Elles comptent des permutations',
                        'Elles définissent des matrices',
                        'Elles remplacent les unités',
                        'De nombreux phénomènes physiques, économiques ou biologiques sont décrits par des lois d\'évolution.'
                    ),
                ],
            ],
            [
                'title' => 'Équations séparables',
                'description' => 'Résoudre des équations simples par séparation des variables.',
                'duration' => 20,
                'passing_score' => 60,
                'questions' => [
                    $makeQuestion(
                        'Une équation différentielle est dite séparable lorsque :',
                        'On peut écrire dy/f(y) = g(x) dx',
                        'Elle n\'a pas de solution',
                        'Elle est toujours linéaire',
                        'Elle ne contient pas de dérivée',
                        'La séparation consiste à isoler les termes en y d\'un côté et les termes en x de l\'autre.'
                    ),
                    $makeQuestion(
                        'Pour résoudre dy/dx = x, on écrit :',
                        'y = x²/2 + C',
                        'y = x + C',
                        'y = 2x + C',
                        'y = x³/3 + C',
                        'En intégrant dy = x dx, on obtient y = x²/2 + C.'
                    ),
                    $makeQuestion(
                        'Pour l\'équation dy/dx = 2x, après séparation on écrit :',
                        'dy = 2x dx',
                        'dy = 2 dx',
                        'dx = 2y dy',
                        'y dy = 2x dx',
                        'La séparation isole dy sur un côté et le terme en x multiplié par dx sur l\'autre.'
                    ),
                    $makeQuestion(
                        'En intégrant dy = (2x) dx, on obtient :',
                        'y = x² + C',
                        'y = x²/2 + C',
                        'y = 2x² + C',
                        'y = x + C',
                        'L\'intégrale de 2x par rapport à x est x², plus une constante.'
                    ),
                    $makeQuestion(
                        'En intégrant y dy = 2x dx de chaque côté, on obtient :',
                        'y²/2 = x² + C',
                        'y² = x² + C',
                        'y²/2 = x²/2 + C',
                        'y = x² + C',
                        'L\'intégrale de y dy est y²/2, celle de 2x dx est x².'
                    ),
                    $makeQuestion(
                        'Pour y\'=3y avec y(0)=2, la solution est :',
                        'y=2e^{3x}',
                        'y=3e^{2x}',
                        'y=2e^{3x}+1',
                        'y=2x+3',
                        'La solution générale de y\'=3y est y=Ce^{3x}; y(0)=2 donne C=2.'
                    ),
                    $makeQuestion(
                        'Après séparation des variables, la dernière étape pour résoudre l\'équation est :',
                        'Intégrer chaque membre séparément',
                        'Dériver chaque membre',
                        'Multiplier par zéro',
                        'Remplacer y par x',
                        'Une fois les variables séparées, il faut intégrer chaque côté pour obtenir la solution.'
                    ),
                    $makeQuestion(
                        'Dans la résolution de dy/y = dx, pourquoi exclut-on y=0 ?',
                        'Parce que la division par y n\'est pas définie en y=0',
                        'Parce que y=0 est toujours une solution fausse',
                        'Parce que dx ne peut pas être nul',
                        'Parce que l\'équation devient du second ordre',
                        'Diviser par y suppose y≠0 ; y=0 doit être étudié séparément comme solution constante éventuelle.'
                    ),
                    $makeQuestion(
                        'Pour dy/y = dx/x, la séparation correcte regroupe :',
                        'Les termes en y avec dy, les termes en x avec dx',
                        'Tous les termes du même côté',
                        'Seulement les constantes',
                        'y et x du même côté',
                        'La séparation sépare les variables y et x chacune avec sa propre différentielle.'
                    ),
                    $makeQuestion(
                        'Après intégration de dy/y = dx/x, on obtient :',
                        'ln|y| = ln|x| + C',
                        'y = x + C',
                        'y² = x² + C',
                        'ln|y| = x + C',
                        'L\'intégrale de dy/y est ln|y| et celle de dx/x est ln|x|.'
                    ),
                ],
            ],
            [
                'title' => 'Problèmes à valeur initiale',
                'description' => 'Utiliser une condition initiale pour sélectionner une solution.',
                'duration' => 20,
                'passing_score' => 60,
                'questions' => [
                    $makeQuestion(
                        'Un problème à valeur initiale (IVP) associe à une équation différentielle :',
                        'Une ou plusieurs conditions fixant la solution en un point donné',
                        'Une solution sans constante',
                        'Une équation du second degré',
                        'Une valeur maximale obligatoire',
                        'Une condition initiale précise la valeur de la solution (et éventuellement de ses dérivées) en un point, ce qui sélectionne une solution unique.'
                    ),
                    $makeQuestion(
                        'Pour y\'=3, y(0)=5, la solution est :',
                        'y=3x+5',
                        'y=5x+3',
                        'y=3x',
                        'y=5x',
                        'La solution générale de y\'=3 est y=3x+C ; y(0)=5 donne C=5.'
                    ),
                    $makeQuestion(
                        'Pour y\'=2y, y(0)=1, la solution est :',
                        'y=e^{2x}',
                        'y=2e^x',
                        'y=e^{2x}+1',
                        'y=2e^{2x}',
                        'La solution générale est y=Ce^{2x} ; y(0)=1 donne C=1.'
                    ),
                    $makeQuestion(
                        'Pour y\'=-y, y(0)=4, la valeur de y(1) est :',
                        '4e^{-1}',
                        '4e',
                        '-4e',
                        '4',
                        'La solution est y=4e^{-x} ; en x=1, y(1)=4e^{-1}.'
                    ),
                    $makeQuestion(
                        'Une équation différentielle du premier ordre nécessite, pour fixer une solution unique :',
                        'Une condition initiale',
                        'Deux conditions initiales',
                        'Aucune condition',
                        'Une condition finale uniquement',
                        'Une équation du premier ordre a une constante arbitraire, donc une seule condition suffit à la déterminer.'
                    ),
                    $makeQuestion(
                        'Une équation différentielle du second ordre nécessite, en général, pour fixer une solution unique :',
                        'Deux conditions initiales',
                        'Une seule condition',
                        'Trois conditions',
                        'Aucune condition',
                        'Une équation du second ordre comporte deux constantes arbitraires, donc deux conditions sont nécessaires.'
                    ),
                    $makeQuestion(
                        'Pour y\'=4x, y(1)=3, la solution est :',
                        'y=2x²+1',
                        'y=2x²+3',
                        'y=4x²+3',
                        'y=2x²-1',
                        'La primitive de 4x est 2x²+C ; y(1)=3 donne 2+C=3, donc C=1.'
                    ),
                    $makeQuestion(
                        'Pourquoi un problème à valeur initiale est-il utile en modélisation ?',
                        'Il permet de choisir, parmi toutes les solutions possibles, celle qui correspond à la situation réelle',
                        'Il simplifie toujours l\'équation en une équation algébrique',
                        'Il élimine la dérivée',
                        'Il transforme l\'équation en matrice',
                        'La condition initiale ancre la solution générale à des données concrètes observées.'
                    ),
                    $makeQuestion(
                        'Pour y\'=6x², y(0)=2, la solution est :',
                        'y=2x³+2',
                        'y=2x³+6',
                        'y=6x³+2',
                        'y=2x³-2',
                        'La primitive de 6x² est 2x³+C ; y(0)=2 donne C=2.'
                    ),
                    $makeQuestion(
                        'Si deux solutions distinctes d\'une même équation différentielle vérifient la même condition initiale, cela signifie que :',
                        'Les hypothèses garantissant l\'unicité de la solution ne sont pas satisfaites',
                        'L\'équation n\'a pas de solution',
                        'La condition initiale est fausse',
                        'L\'équation est forcément linéaire',
                        'Sous des hypothèses de régularité suffisantes, un problème à valeur initiale admet une unique solution ; leur absence peut produire plusieurs solutions.'
                    ),
                ],
            ],
            [
                'title' => 'Croissance et décroissance exponentielle',
                'description' => 'Modéliser des évolutions proportionnelles à la quantité présente.',
                'duration' => 20,
                'passing_score' => 60,
                'questions' => [
                    $makeQuestion(
                        'Dans le modèle y\'=ky avec k>0, la quantité y :',
                        'Croît de façon exponentielle',
                        'Décroît vers zéro',
                        'Reste constante',
                        'Oscille périodiquement',
                        'Un taux de variation proportionnel positif à y produit une croissance exponentielle.'
                    ),
                    $makeQuestion(
                        'Dans le modèle y\'=ky avec k<0, la quantité y :',
                        'Décroît de façon exponentielle vers zéro',
                        'Croît indéfiniment',
                        'Reste constante',
                        'Devient négative puis croît',
                        'Un taux proportionnel négatif entraîne une diminution exponentielle vers zéro.'
                    ),
                    $makeQuestion(
                        'Pour y(0)=200 et y\'=0.1y, la solution est :',
                        'y=200e^{0.1t}',
                        'y=0.1e^{200t}',
                        'y=200e^{-0.1t}',
                        'y=200+0.1t',
                        'La solution générale de y\'=ky est y=Ce^{kt} ; y(0)=200 donne C=200.'
                    ),
                    $makeQuestion(
                        'Le temps nécessaire pour qu\'une population en croissance exponentielle double dépend :',
                        'Du taux de croissance k',
                        'Uniquement de la population initiale',
                        'D\'un facteur constant indépendant de k',
                        'Du nombre de solutions de l\'équation',
                        'Le temps de doublement est ln(2)/k, donc il dépend directement de k.'
                    ),
                    $makeQuestion(
                        'Dans un modèle de décroissance radioactive y\'=-ky (k>0), le signe négatif traduit :',
                        'Une diminution de la quantité au cours du temps',
                        'Une croissance accélérée',
                        'Une inversion de la variable temps',
                        'Une erreur de modélisation',
                        'Le signe négatif devant ky indique que la quantité diminue proportionnellement à elle-même.'
                    ),
                    $makeQuestion(
                        'La loi de refroidissement de Newton s\'écrit typiquement :',
                        'T\'=-k(T-T_{ambiant})',
                        'T\'=kT²',
                        'T\'=k',
                        'T\'=-kT_{ambiant}',
                        'Le taux de refroidissement est proportionnel à l\'écart entre la température de l\'objet et celle du milieu ambiant.'
                    ),
                    $makeQuestion(
                        'Si k=0 dans y\'=ky, la solution est :',
                        'Une constante',
                        'Une exponentielle croissante',
                        'Une droite de pente non nulle',
                        'Indéfinie',
                        'Avec k=0, l\'équation devient y\'=0, dont la solution est y=C, une constante.'
                    ),
                    $makeQuestion(
                        'Une population double tous les 3 ans selon un modèle exponentiel. Cela implique que :',
                        'Le taux de croissance k est une constante positive',
                        'Le taux de croissance k est nul',
                        'La croissance est linéaire',
                        'La population diminue',
                        'Un doublement régulier à intervalles fixes est la signature d\'une croissance exponentielle à taux constant positif.'
                    ),
                    $makeQuestion(
                        'L\'équation y\'=ky est qualifiée de modèle de croissance (ou décroissance) proportionnelle car :',
                        'Le taux de variation de y est proportionnel à y lui-même',
                        'Le taux de variation est constant',
                        'Le taux de variation dépend du temps uniquement',
                        'Le taux de variation est toujours nul',
                        'C\'est précisément la caractéristique qui définit la croissance exponentielle : y\' est proportionnel à y.'
                    ),
                    $makeQuestion(
                        'Pour y(0)=50 et un taux k=-0.2, après un temps t la quantité restante est :',
                        '50e^{-0.2t}',
                        '50e^{0.2t}',
                        '50-0.2t',
                        '-50e^{0.2t}',
                        'La solution de y\'=-0.2y avec y(0)=50 est y=50e^{-0.2t}.'
                    ),
                ],
            ],
            [
                'title' => 'Équations linéaires du premier ordre',
                'description' => 'Comprendre les formes simples et leur structure.',
                'duration' => 20,
                'passing_score' => 60,
                'questions' => [
                    $makeQuestion(
                        'La forme standard d\'une équation linéaire du premier ordre est :',
                        'y\'+p(x)y=q(x)',
                        'y\'\'+p(x)y=q(x)',
                        'y\'·y=q(x)',
                        'p(x)y\'=q(x)y',
                        'C\'est la forme canonique des équations linéaires du premier ordre, avec y\' et y apparaissant au premier degré.'
                    ),
                    $makeQuestion(
                        'Pour résoudre y\'+p(x)y=q(x), on utilise généralement :',
                        'Un facteur intégrant e^{∫p(x)dx}',
                        'Une séparation des variables uniquement',
                        'Une matrice de coefficients',
                        'Une transformée de Fourier',
                        'Le facteur intégrant permet de réécrire le membre de gauche comme la dérivée d\'un produit.'
                    ),
                    $makeQuestion(
                        'Pour y\'+y=0, le facteur intégrant est :',
                        'e^x',
                        'e^{-x}',
                        'x',
                        '1/x',
                        'Ici p(x)=1, donc le facteur intégrant est e^{∫1 dx}=e^x.'
                    ),
                    $makeQuestion(
                        'En multipliant y\'+y=0 par e^x, on obtient :',
                        '(ye^x)\'=0',
                        '(ye^{-x})\'=0',
                        '(y/e^x)\'=1',
                        '(y+e^x)\'=0',
                        'Le facteur intégrant transforme le membre de gauche en la dérivée du produit ye^x.'
                    ),
                    $makeQuestion(
                        'À partir de (ye^x)\'=0, on conclut que :',
                        'y=Ce^{-x}',
                        'y=Ce^x',
                        'y=C',
                        'y=Cx',
                        '(ye^x)\'=0 implique ye^x=C, donc y=Ce^{-x}.'
                    ),
                    $makeQuestion(
                        'Une équation linéaire y\'+p(x)y=q(x) est dite homogène lorsque :',
                        'q(x)=0',
                        'p(x)=0',
                        'p(x)=q(x)',
                        'y=0',
                        'L\'équation homogène associée correspond à un second membre nul.'
                    ),
                    $makeQuestion(
                        'Pour y\'+2y=4, une solution constante est :',
                        'y=2',
                        'y=4',
                        'y=0',
                        'y=-2',
                        'Si y est constant, y\'=0, donc 2y=4, soit y=2.'
                    ),
                    $makeQuestion(
                        'La solution générale d\'une équation linéaire non homogène s\'écrit comme :',
                        'La somme d\'une solution de l\'équation homogène et d\'une solution particulière',
                        'Le produit de deux solutions homogènes',
                        'La différence de deux solutions particulières',
                        'Une constante multipliée par q(x)',
                        'C\'est la structure générale des solutions des équations linéaires non homogènes.'
                    ),
                    $makeQuestion(
                        'Dans y\'+p(x)y=q(x), la fonction q(x) est appelée :',
                        'Le second membre (ou terme source)',
                        'Le facteur intégrant',
                        'La solution homogène',
                        'La condition initiale',
                        'q(x) représente l\'apport externe de l\'équation, distinct du terme homogène p(x)y.'
                    ),
                    $makeQuestion(
                        'Si p(x) et q(x) sont continues sur un intervalle, l\'équation linéaire y\'+p(x)y=q(x) admet :',
                        'Une solution unique vérifiant une condition initiale donnée sur cet intervalle',
                        'Aucune solution',
                        'Une infinité de solutions même avec une condition initiale fixée',
                        'Uniquement des solutions constantes',
                        'Sous ces hypothèses de continuité, le théorème d\'existence et d\'unicité garantit une solution unique pour chaque condition initiale.'
                    ),
                ],
            ],
            [
                'title' => 'Équilibres et équations autonomes',
                'description' => 'Étudier les équilibres et le signe d\'une dérivée.',
                'duration' => 20,
                'passing_score' => 60,
                'questions' => [
                    $makeQuestion(
                        'Une équation différentielle autonome est une équation de la forme :',
                        'y\'=f(y), où le second membre ne dépend pas explicitement de x',
                        'y\'=f(x), où le second membre ne dépend que de x',
                        'y\'\'=f(x,y)',
                        'y\'=x·y',
                        'Dans une équation autonome, le taux de variation dépend seulement de l\'état y, pas du temps x explicitement.'
                    ),
                    $makeQuestion(
                        'Un point d\'équilibre d\'une équation autonome y\'=f(y) est une valeur y* telle que :',
                        'f(y*)=0',
                        'f(y*)=1',
                        'y*=0',
                        'f\'(y*)=0',
                        'Un équilibre correspond à un taux de variation nul, donc à une solution constante.'
                    ),
                    $makeQuestion(
                        'Pour y\'=y(1-y), les équilibres sont :',
                        'y=0 et y=1',
                        'y=0 uniquement',
                        'y=1 uniquement',
                        'y=-1 et y=1',
                        'f(y)=y(1-y)=0 lorsque y=0 ou y=1.'
                    ),
                    $makeQuestion(
                        'Dans le modèle logistique y\'=y(1-y), la valeur y=1 représente :',
                        'La capacité limite (ou capacité de charge)',
                        'Le taux de croissance initial',
                        'Une valeur toujours instable',
                        'Une valeur jamais atteinte',
                        'Dans le modèle logistique normalisé, l\'équilibre non nul correspond à la capacité limite du milieu.'
                    ),
                    $makeQuestion(
                        'Pour y\'=y-3, l\'équilibre est :',
                        'y=3',
                        'y=0',
                        'y=-3',
                        'y=1',
                        'f(y)=y-3=0 lorsque y=3.'
                    ),
                    $makeQuestion(
                        'Un équilibre est dit asymptotiquement stable lorsque :',
                        'Les solutions proches de cet équilibre s\'en rapprochent au cours du temps',
                        'Les solutions proches s\'en éloignent toujours',
                        'Aucune solution ne peut l\'atteindre',
                        'Il n\'existe qu\'une seule solution possible',
                        'Un équilibre asymptotiquement stable attire les solutions suffisamment proches : elles restent proches et convergent vers lui avec le temps.'
                    ),
                    $makeQuestion(
                        'Un équilibre est dit instable lorsque :',
                        'Les solutions proches de cet équilibre s\'en éloignent au cours du temps',
                        'Les solutions proches s\'en rapprochent toujours',
                        'L\'équation n\'a pas de solution',
                        'Il correspond à f(y)≠0',
                        'L\'instabilité signifie que les petites perturbations autour de l\'équilibre s\'amplifient.'
                    ),
                    $makeQuestion(
                        'Pour déterminer la stabilité d\'un équilibre y* de y\'=f(y), on étudie généralement :',
                        'Le signe de f(y) autour de y*',
                        'La valeur de y* uniquement',
                        'Le signe de x autour de y*',
                        'La valeur de f(0)',
                        'Le signe de f(y) de part et d\'autre de l\'équilibre indique si les solutions s\'en approchent ou s\'en éloignent.'
                    ),
                    $makeQuestion(
                        'Pour y\'=-y+2, l\'équilibre y=2 est :',
                        'Stable, car f(y)=-y+2 est positif pour y<2 et négatif pour y>2',
                        'Instable',
                        'Indéterminé',
                        'Inexistant',
                        'Comme f(y) pousse y vers 2 des deux côtés, l\'équilibre est stable.'
                    ),
                    $makeQuestion(
                        'L\'un des intérêts des équations autonomes est que :',
                        'Leur comportement qualitatif peut être analysé sans résoudre explicitement l\'équation',
                        'Elles n\'ont jamais de solution constante',
                        'Elles sont toujours du second ordre',
                        'Elles ne dépendent jamais de y',
                        'L\'étude du signe de f(y) permet de décrire le comportement des solutions sans intégration explicite.'
                    ),
                ],
            ],
            [
                'title' => 'Équations du second ordre',
                'description' => 'Découvrir les formes simples d\'équations du second ordre.',
                'duration' => 20,
                'passing_score' => 60,
                'questions' => [
                    $makeQuestion(
                        'Une équation différentielle du second ordre contient :',
                        'Une dérivée seconde de la fonction inconnue',
                        'Uniquement des dérivées premières',
                        'Aucune dérivée',
                        'Une intégrale double',
                        'L\'ordre d\'une équation est déterminé par la plus haute dérivée présente, ici la dérivée seconde.'
                    ),
                    $makeQuestion(
                        'Pour y\'\'=0, la solution générale est :',
                        'y=Ax+B',
                        'y=Ax²+B',
                        'y=Ae^x',
                        'y=A',
                        'Intégrer deux fois y\'\'=0 donne y\'=A puis y=Ax+B.'
                    ),
                    $makeQuestion(
                        'Une équation différentielle du second ordre comporte, dans sa solution générale :',
                        'Deux constantes arbitraires',
                        'Une seule constante arbitraire',
                        'Trois constantes arbitraires',
                        'Aucune constante',
                        'Deux intégrations successives introduisent deux constantes indépendantes.'
                    ),
                    $makeQuestion(
                        'Pour y\'\'=-y, la solution générale est :',
                        'y=A cos(x)+B sin(x)',
                        'y=Ae^x+Be^{-x}',
                        'y=Ax+B',
                        'y=Ae^{-x}',
                        'L\'équation y\'\'+y=0 a pour solutions les combinaisons de cosinus et sinus.'
                    ),
                    $makeQuestion(
                        'Pour y\'\'=y, la solution générale est :',
                        'y=Ae^x+Be^{-x}',
                        'y=A cos(x)+B sin(x)',
                        'y=Ax²+B',
                        'y=Ae^x',
                        'L\'équation y\'\'-y=0 admet les exponentielles e^x et e^{-x} comme solutions de base.'
                    ),
                    $makeQuestion(
                        'Pour l\'équation y\'\'+y=0, l\'équation caractéristique associée est :',
                        'r²+1=0',
                        'r²-1=0',
                        'r+1=0',
                        'r²=0',
                        'On remplace y\'\' par r² et y par 1 dans l\'équation, ce qui donne r²+1=0.'
                    ),
                    $makeQuestion(
                        'Les racines de l\'équation caractéristique r²+1=0 sont :',
                        'r=i et r=-i',
                        'r=1 et r=-1',
                        'r=0 (racine double)',
                        'r=2 et r=-2',
                        'r²=-1 donne des racines complexes conjuguées r=±i.'
                    ),
                    $makeQuestion(
                        'Lorsque les racines de l\'équation caractéristique sont complexes conjuguées ±bi, la solution générale fait intervenir :',
                        'Des fonctions sinus et cosinus',
                        'Des exponentielles réelles uniquement',
                        'Des polynômes',
                        'Des logarithmes',
                        'Des racines complexes conjuguées produisent des solutions oscillantes en sinus et cosinus.'
                    ),
                    $makeQuestion(
                        'Pour y\'\'-y=0, l\'équation caractéristique est r²-1=0, dont les racines sont :',
                        'r=1 et r=-1',
                        'r=i et r=-i',
                        'r=0 et r=1',
                        'r=-1 (racine double)',
                        'r²-1=0 se factorise en (r-1)(r+1)=0, donnant r=1 et r=-1.'
                    ),
                    $makeQuestion(
                        'Pour fixer complètement une solution d\'une équation du second ordre, il faut en général :',
                        'Deux conditions initiales, par exemple y(0) et y\'(0)',
                        'Une seule condition initiale',
                        'Aucune condition',
                        'Une condition sur y\'\' uniquement',
                        'Les deux constantes arbitraires de la solution générale nécessitent deux conditions pour être déterminées.'
                    ),
                ],
            ],
            [
                'title' => 'Modélisation et révision',
                'description' => 'Relier équations différentielles et phénomènes concrets.',
                'duration' => 20,
                'passing_score' => 60,
                'questions' => [
                    $makeQuestion(
                        'Pour y\'=5, la solution générale est :',
                        'y=5x+C',
                        'y=5x',
                        'y=Ce^{5x}',
                        'y=x/5+C',
                        'L\'intégrale de 5 par rapport à x est 5x, plus une constante.'
                    ),
                    $makeQuestion(
                        'Pour y\'=-2y, y(0)=10, la solution est :',
                        'y=10e^{-2x}',
                        'y=10e^{2x}',
                        'y=-2e^{10x}',
                        'y=10-2x',
                        'La solution générale de y\'=-2y est y=Ce^{-2x} ; y(0)=10 donne C=10.'
                    ),
                    $makeQuestion(
                        'Un équilibre d\'une équation autonome y\'=f(y) correspond à :',
                        'Une solution constante de l\'équation',
                        'Une solution qui croît indéfiniment',
                        'Une solution périodique',
                        'L\'absence de solution',
                        'Un équilibre est une valeur constante y* pour laquelle f(y*)=0, donc y\'=0.'
                    ),
                    $makeQuestion(
                        'Pour y\'\'=0 avec y(0)=1 et y\'(0)=2, la solution est :',
                        'y=2x+1',
                        'y=x+2',
                        'y=2x+2',
                        'y=x²+1',
                        'y=Ax+B avec y\'(0)=A=2 et y(0)=B=1 donne y=2x+1.'
                    ),
                    $makeQuestion(
                        'Dans une équation séparable, regrouper les termes en y et en x permet ensuite de :',
                        'Intégrer chaque membre séparément',
                        'Éliminer toutes les constantes',
                        'Transformer l\'équation en matrice',
                        'Supprimer la dérivée sans l\'intégrer',
                        'Une fois séparées, les variables s\'intègrent indépendamment de chaque côté de l\'égalité.'
                    ),
                    $makeQuestion(
                        'Le rôle du facteur intégrant dans une équation linéaire du premier ordre est de :',
                        'Transformer le membre de gauche en la dérivée d\'un produit',
                        'Annuler le second membre',
                        'Rendre l\'équation du second ordre',
                        'Supprimer la fonction inconnue',
                        'Le facteur intégrant permet d\'écrire y\'+p(x)y sous la forme (y·facteur)\'.'
                    ),
                    $makeQuestion(
                        'Dans un modèle de croissance exponentielle y\'=ky avec k>0, à mesure que t augmente, y :',
                        'Augmente de plus en plus rapidement',
                        'Augmente à vitesse constante',
                        'Diminue progressivement',
                        'Reste constante',
                        'Comme y\' est proportionnel à y, une valeur de y plus grande produit un taux de croissance plus grand.'
                    ),
                    $makeQuestion(
                        'Pour y\'\'+4y=0, l\'équation caractéristique r²+4=0 a pour racines :',
                        'r=2i et r=-2i',
                        'r=2 et r=-2',
                        'r=4i et r=-4i',
                        'r=0 (racine double)',
                        'r²=-4 donne r=±√(-4)=±2i.'
                    ),
                    $makeQuestion(
                        'Pourquoi les équations différentielles occupent-elles une place centrale en modélisation ?',
                        'Parce qu\'elles décrivent comment une quantité évolue en fonction de son taux de variation',
                        'Parce qu\'elles ne contiennent jamais de constantes',
                        'Parce qu\'elles remplacent toujours les statistiques',
                        'Parce qu\'elles éliminent le besoin de données',
                        'De nombreux phénomènes (population, température, finance) sont naturellement décrits par des relations entre une quantité et son taux de variation.'
                    ),
                    $makeQuestion(
                        'Une condition initiale associée à une équation différentielle permet de :',
                        'Sélectionner une solution particulière parmi la famille de solutions générales',
                        'Changer l\'ordre de l\'équation',
                        'Transformer l\'équation en inéquation',
                        'Annuler toutes les dérivées',
                        'La condition initiale fixe la ou les constantes arbitraires de la solution générale.'
                    ),
                ],
            ],
        ];

        foreach ($quizzes as $quizIndex => $quizData) {
            $quiz = Quiz::updateOrCreate(
                [
                    'subject_id' => $subject->id,
                    'title' => $quizData['title'],
                ],
                [
                    'owner_id' => null,
                    'description' => $quizData['description'],
                    'duration' => $quizData['duration'],
                    'passing_score' => $quizData['passing_score'],
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
                        'explanation' => $questionData['explanation'],
                    ]
                );

                $question->choices()->delete();
                $choices = $questionData['choices'];

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
