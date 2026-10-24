<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class WorkEnergyPowerBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'work-energy-power')->firstOrFail();

        // Chaque question est notée sur un point. Le troisième argument indique
        // l'indice de la bonne réponse, en commençant à zéro.
        $question = static function (string $text, array $choices, int $answer, string $explanation): array {
            return [
                'question' => $text,
                'choices' => array_map(
                    static fn (string $choice, int $index): array => [
                        'choice_text' => $choice,
                        'is_correct' => $index === $answer,
                    ],
                    $choices,
                    array_keys($choices)
                ),
                'explanation' => $explanation,
            ];
        };

        $quizzes = [
            [
                'title' => 'Travail d’une force',
                'description' => 'Comprendre le travail mécanique et déterminer son signe dans des situations simples.',
                'duration' => 12,
                'passing_score' => 60,
                'questions' => [
                    $question('En mécanique, que mesure le travail d’une force ?', ['Le transfert d’énergie dû à une force pendant un déplacement', 'La durée pendant laquelle la force agit', 'La masse déplacée', 'La vitesse de l’objet'], 0, 'Une force fournit ou retire de l’énergie à un objet lorsqu’elle agit pendant son déplacement.'),
                    $question('Quelle est l’unité du travail dans le Système international ?', ['Le newton (N)', 'Le watt (W)', 'Le joule (J)', 'Le mètre (m)'], 2, 'Le travail est une énergie transférée ; il se mesure donc en joules.'),
                    $question('Une force constante a la même direction et le même sens que le déplacement. Quelle formule donne son travail ?', ['W = F + d', 'W = F × d', 'W = F ÷ d', 'W = d ÷ F'], 1, 'Quand force et déplacement ont la même direction, le travail vaut le produit de leurs intensités : W = Fd.'),
                    $question('Quel est le travail d’une force perpendiculaire au déplacement ?', ['Il est positif', 'Il est négatif', 'Il est nul', 'Il dépend seulement de la masse'], 2, 'Le travail vaut Fd cos(θ). Pour un angle de 90°, cos(90°) = 0.'),
                    $question('Une force de 8 N déplace une caisse de 3 m dans sa direction. Quel travail fournit-elle ?', ['11 J', '24 J', '5 J', '2,7 J'], 1, 'W = Fd = 8 × 3 = 24 J.'),
                    $question('Un objet se déplace vers la droite. Une force de frottement agit vers la gauche. Le travail du frottement est :', ['positif', 'nul', 'négatif', 'toujours égal au poids'], 2, 'Le frottement s’oppose au déplacement : son travail est négatif.'),
                    $question('Un élève porte un sac immobile à bout de bras. Quel est le travail de la force exercée par ses bras sur le sac pendant qu’il le tient ?', ['Positif', 'Négatif', 'Nul', 'Impossible à déterminer sans la masse'], 2, 'Le sac ne se déplace pas. Sans déplacement, le travail mécanique est nul.'),
                    $question('Une force de 10 N agit dans le même sens qu’un déplacement de 2 m. Quelle énergie est transférée par cette force ?', ['5 J', '12 J', '20 J', '0 J'], 2, 'W = 10 × 2 = 20 J.'),
                    $question('Une force de 6 N s’oppose au mouvement sur une distance de 4 m. Quel est son travail ?', ['24 J', '-24 J', '10 J', '0 J'], 1, 'La force est opposée au déplacement : W = -Fd = -6 × 4 = -24 J.'),
                    $question('Dans l’expression W = Fd cos(θ), que représente θ ?', ['L’angle entre la force et le déplacement', 'L’angle entre la force et la verticale', 'La durée du mouvement', 'La masse de l’objet'], 0, 'Seule la composante de la force parallèle au déplacement contribue au travail.'),
                ],
            ],
            [
                'title' => 'Énergie cinétique',
                'description' => 'Relier la masse et la vitesse à l’énergie du mouvement, puis appliquer le théorème de l’énergie cinétique.',
                'duration' => 14,
                'passing_score' => 60,
                'questions' => [
                    $question('À quoi l’énergie cinétique d’un objet est-elle associée ?', ['À son mouvement', 'À sa température uniquement', 'À sa hauteur uniquement', 'À sa couleur'], 0, 'L’énergie cinétique est l’énergie que possède un objet du fait de son mouvement.'),
                    $question('Quelle expression permet de calculer l’énergie cinétique d’un objet de masse m et de vitesse v ?', ['Ec = mv', 'Ec = ½mv²', 'Ec = mg', 'Ec = m/v²'], 1, 'Pour un objet en translation, Ec = ½mv².'),
                    $question('Un objet immobile a une énergie cinétique égale à :', ['sa masse', 'son poids', 'zéro', 'sa hauteur'], 2, 'À l’arrêt, v = 0 ; la formule Ec = ½mv² donne donc zéro.'),
                    $question('Un objet de 2 kg se déplace à 3 m/s. Quelle est son énergie cinétique ?', ['6 J', '9 J', '18 J', '3 J'], 1, 'Ec = ½ × 2 × 3² = 9 J.'),
                    $question('À masse constante, si la vitesse d’un objet double, son énergie cinétique est multipliée par :', ['2', '3', '4', '8'], 2, 'L’énergie cinétique dépend du carré de la vitesse : 2² = 4.'),
                    $question('Deux objets ont la même vitesse. Celui qui a la plus grande masse possède :', ['moins d’énergie cinétique', 'plus d’énergie cinétique', 'la même énergie cinétique dans tous les cas', 'une énergie cinétique nulle'], 1, 'À vitesse identique, Ec est proportionnelle à la masse.'),
                    $question('Quel théorème relie le travail de la résultante des forces à la variation d’énergie cinétique ?', ['Le théorème de l’énergie cinétique', 'Le principe d’Archimède', 'La loi d’Ohm', 'La loi de Snell-Descartes'], 0, 'Le théorème de l’énergie cinétique s’écrit Wrésultante = ΔEc.'),
                    $question('La résultante des forces fournit un travail positif à un objet. Que peut-on conclure ?', ['Son énergie cinétique augmente', 'Son énergie cinétique diminue nécessairement', 'Sa masse augmente', 'Sa vitesse devient nulle'], 0, 'Un travail total positif correspond à une augmentation de l’énergie cinétique.'),
                    $question('Un ballon ralentit en roulant sur le sol. Comment varie son énergie cinétique ?', ['Elle augmente', 'Elle diminue', 'Elle reste toujours constante', 'Elle devient négative'], 1, 'La vitesse diminue et l’énergie cinétique, proportionnelle à v², diminue aussi.'),
                    $question('Une voiture de 1 000 kg roule à 10 m/s. Quelle est son énergie cinétique ?', ['5 000 J', '10 000 J', '50 000 J', '100 000 J'], 2, 'Ec = ½ × 1 000 × 10² = 50 000 J.'),
                ],
            ],
            [
                'title' => 'Énergie potentielle de pesanteur',
                'description' => 'Étudier l’énergie liée à l’altitude et son évolution lors d’une montée ou d’une chute.',
                'duration' => 14,
                'passing_score' => 60,
                'questions' => [
                    $question('De quoi dépend l’énergie potentielle de pesanteur près de la surface de la Terre ?', ['De la masse, de l’intensité g du champ de pesanteur et de l’altitude par rapport au niveau de référence', 'De la couleur et du volume', 'De la vitesse uniquement', 'De la durée de la chute'], 0, 'Près de la Terre, la variation d’énergie potentielle s’écrit ΔEp = mgΔh.'),
                    $question('Quelle formule utilise-t-on près de la surface terrestre pour l’énergie potentielle de pesanteur ?', ['Ep = ½mv²', 'Ep = mgh', 'Ep = F/d', 'Ep = P/t'], 1, 'Dans un champ de pesanteur uniforme, Ep = mgh par rapport au niveau de référence choisi.'),
                    $question('Que devient l’énergie potentielle d’un livre que l’on pose sur une étagère plus haute ?', ['Elle augmente', 'Elle diminue', 'Elle devient forcément nulle', 'Elle ne peut pas changer'], 0, 'L’altitude augmente ; l’énergie potentielle de pesanteur augmente également.'),
                    $question('Quelle valeur approchée de g utilise-t-on souvent dans les exercices près de la Terre ?', ['1,0 m/s²', '9,8 m/s²', '100 m/s²', '0 m/s²'], 1, 'La valeur usuelle est g ≈ 9,8 m/s² ; on peut parfois arrondir à 10 m/s².'),
                    $question('On élève un objet de 2 kg de 5 m. Avec g = 9,8 m/s², de combien son énergie potentielle augmente-t-elle ?', ['19,6 J', '49 J', '98 J', '196 J'], 2, 'ΔEp = mgΔh = 2 × 9,8 × 5 = 98 J.'),
                    $question('Un objet tombe sans frottement depuis une certaine hauteur. Comment varie son énergie potentielle de pesanteur ?', ['Elle augmente', 'Elle diminue', 'Elle reste constante', 'Elle devient égale à sa masse'], 1, 'Pendant la chute, l’altitude baisse : l’énergie potentielle diminue.'),
                    $question('Le niveau où l’on choisit Ep = 0 est-il toujours imposé ?', ['Oui, il est toujours au niveau de la mer', 'Oui, il est toujours au sol', 'Non, on choisit un niveau de référence adapté au problème', 'Non, car Ep ne peut jamais être nulle'], 2, 'Le zéro de l’énergie potentielle est conventionnel. Ce sont surtout ses variations qui ont un sens physique.'),
                    $question('Une balle de 1 kg est soulevée de 2 m. En prenant g = 10 m/s², quelle énergie potentielle gagne-t-elle ?', ['2 J', '10 J', '20 J', '40 J'], 2, 'ΔEp = mgΔh = 1 × 10 × 2 = 20 J.'),
                    $question('Lorsqu’un objet descend, le travail de son poids est généralement :', ['positif', 'négatif', 'nul', 'égal à sa masse'], 0, 'Le poids est dirigé vers le bas et accompagne la descente ; son travail est positif.'),
                    $question('Une caisse de 4 kg descend de 3 m. Avec g = 10 m/s², quelle est la diminution de son énergie potentielle ?', ['12 J', '40 J', '120 J', '1 200 J'], 2, 'La diminution vaut mgΔh = 4 × 10 × 3 = 120 J.'),
                ],
            ],
            [
                'title' => 'Puissance mécanique',
                'description' => 'Distinguer énergie et puissance et calculer un débit de travail dans des cas concrets.',
                'duration' => 12,
                'passing_score' => 60,
                'questions' => [
                    $question('Que décrit la puissance ?', ['La quantité de matière d’un objet', 'La rapidité avec laquelle un travail est effectué ou une énergie transférée', 'La direction d’une force', 'La distance parcourue uniquement'], 1, 'La puissance mesure un transfert d’énergie par unité de temps.'),
                    $question('Quelle est l’unité de puissance dans le Système international ?', ['Le joule', 'Le newton', 'Le watt', 'Le kilogramme'], 2, 'La puissance s’exprime en watts (W). Un watt correspond à un joule par seconde.'),
                    $question('Comment calcule-t-on la puissance moyenne lorsque le travail W est effectué en un temps Δt ?', ['P = W × Δt', 'P = W ÷ Δt', 'P = Δt ÷ W', 'P = W + Δt'], 1, 'La puissance moyenne est le travail divisé par la durée : P = W/Δt.'),
                    $question('Un moteur effectue un travail de 600 J en 3 s. Quelle est sa puissance moyenne ?', ['200 W', '600 W', '1 800 W', '0,005 W'], 0, 'P = 600 ÷ 3 = 200 W.'),
                    $question('Deux personnes montent le même escalier et gagnent la même énergie potentielle. Laquelle développe la plus grande puissance ?', ['Celle qui met le plus de temps', 'Celle qui met le moins de temps', 'Elles ont toujours la même puissance', 'On ne peut pas comparer'], 1, 'Pour le même travail, la personne qui le réalise en moins de temps développe davantage de puissance.'),
                    $question('Que représente 1 watt ?', ['1 joule par seconde', '1 newton par mètre', '1 kilogramme par seconde', '1 mètre par joule'], 0, 'Par définition, 1 W = 1 J/s.'),
                    $question('Une machine fournit 2 400 J en 12 s. Quelle puissance moyenne délivre-t-elle ?', ['20 W', '200 W', '2 412 W', '28 800 W'], 1, 'P = W/t = 2 400/12 = 200 W.'),
                    $question('Si un appareil réalise le même travail en deux fois moins de temps, sa puissance moyenne :', ['est divisée par deux', 'double', 'ne change pas', 'devient nulle'], 1, 'À travail constant, réduire le temps de moitié double la puissance.'),
                    $question('Quelle relation donne la puissance instantanée d’une force F sur un objet de vitesse v, lorsque force et vitesse sont parallèles ?', ['P = Fv', 'P = F/v', 'P = F + v', 'P = v/F'], 0, 'La puissance instantanée est le produit scalaire de la force et de la vitesse ; ici P = Fv.'),
                    $question('Un appareil consomme 100 J en 10 s. Quelle est sa puissance moyenne ?', ['10 W', '90 W', '100 W', '1 000 W'], 0, 'P = 100/10 = 10 W.'),
                ],
            ],
            [
                'title' => 'Conservation de l’énergie mécanique',
                'description' => 'Suivre les transformations entre énergie cinétique et potentielle, avec ou sans frottement.',
                'duration' => 16,
                'passing_score' => 70,
                'questions' => [
                    $question('Comment définit-on l’énergie mécanique d’un système simple ?', ['Em = Ec + Ep', 'Em = Ec × Ep', 'Em = masse × vitesse', 'Em = puissance + durée'], 0, 'L’énergie mécanique est la somme de l’énergie cinétique et des énergies potentielles.'),
                    $question('Si seules des forces conservatives agissent sur un système, que peut-on dire de son énergie mécanique ?', ['Elle reste constante', 'Elle augmente toujours', 'Elle diminue toujours', 'Elle devient nulle'], 0, 'En l’absence de force non conservative, l’énergie mécanique se conserve.'),
                    $question('Une bille descend une pente sans frottement. Quelle transformation d’énergie a principalement lieu ?', ['Énergie cinétique en énergie potentielle', 'Énergie potentielle en énergie cinétique', 'Énergie thermique en énergie chimique', 'Aucune transformation'], 1, 'La bille perd de l’altitude et gagne de la vitesse : Ep se transforme en Ec.'),
                    $question('Une balle est lancée verticalement vers le haut. Pendant la montée, que fait son énergie cinétique ?', ['Elle augmente', 'Elle diminue', 'Elle reste constante', 'Elle devient négative'], 1, 'La balle ralentit en montant, donc son énergie cinétique diminue.'),
                    $question('Au point le plus haut d’un lancer vertical, quelle est la vitesse instantanée de la balle ?', ['Sa vitesse verticale est nulle', 'Sa vitesse est maximale', 'Elle est égale à g', 'Elle est infinie'], 0, 'À cet instant, la balle change de sens ; sa vitesse verticale vaut momentanément zéro.'),
                    $question('Quel effet les frottements ont-ils généralement sur l’énergie mécanique d’un objet en mouvement ?', ['Ils la transforment en partie en énergie thermique', 'Ils la font disparaître', 'Ils la convertissent en masse', 'Ils la rendent toujours constante'], 0, 'Les frottements dissipent une partie de l’énergie mécanique, souvent sous forme d’énergie interne et de chaleur.'),
                    $question('Un objet de 1 kg tombe de 5 m sans résistance de l’air. Avec g = 10 m/s², quelle énergie cinétique gagne-t-il ?', ['5 J', '10 J', '50 J', '500 J'], 2, 'La perte d’énergie potentielle est mgΔh = 1 × 10 × 5 = 50 J ; elle devient énergie cinétique.'),
                    $question('Une luge ralentit sur une piste horizontale rugueuse. Pourquoi son énergie cinétique baisse-t-elle ?', ['Le frottement effectue un travail négatif', 'Le poids disparaît', 'Sa masse diminue', 'La piste fournit un travail positif'], 0, 'Le frottement s’oppose au mouvement et retire de l’énergie cinétique à la luge.'),
                    $question('Dans une chute sans frottement, que devient la somme Ec + Ep ?', ['Elle reste constante', 'Elle double à chaque seconde', 'Elle est toujours nulle', 'Elle dépend de la couleur de l’objet'], 0, 'La somme des énergies cinétique et potentielle, c’est-à-dire l’énergie mécanique, se conserve.'),
                    $question('Pourquoi l’énergie est-elle souvent utile pour étudier un mouvement ?', ['Elle permet parfois de comparer deux positions sans calculer toute l’évolution du mouvement', 'Elle remplace toujours les unités', 'Elle donne directement la forme de l’objet', 'Elle supprime l’action des forces'], 0, 'Un bilan énergétique relie l’état initial à l’état final et peut éviter de détailler le mouvement à chaque instant.'),
                ],
            ],
            [
                'title' => 'Ressorts et énergie élastique',
                'description' => 'Découvrir la force de rappel d’un ressort idéal et l’énergie qu’il emmagasine.',
                'duration' => 16,
                'passing_score' => 70,
                'questions' => [
                    $question('Que décrit la loi de Hooke pour un ressort idéal ?', ['La force de rappel est proportionnelle à l’allongement ou à la compression', 'La masse du ressort augmente avec le temps', 'La force est toujours indépendante de la déformation', 'La puissance est égale à la longueur'], 0, 'Pour les petites déformations, la force de rappel suit F = -kx.'),
                    $question('Quelle expression donne l’énergie potentielle élastique d’un ressort idéal ?', ['Ee = kx', 'Ee = ½kx²', 'Ee = mgx', 'Ee = ½mv'], 1, 'L’énergie emmagasinée par un ressort déformé vaut Ee = ½kx².'),
                    $question('Quelle est l’unité du coefficient de raideur k ?', ['N/m', 'J/s', 'kg·m', 'm/s'], 0, 'Comme F = kx, on a k = F/x, donc son unité est le newton par mètre.'),
                    $question('On double la déformation d’un ressort. Par quel facteur son énergie élastique est-elle multipliée ?', ['2', '3', '4', '8'], 2, 'Ee est proportionnelle au carré de x ; doubler x multiplie Ee par 2² = 4.'),
                    $question('Dans F = -kx, que signifie le signe moins ?', ['La force du ressort tend à ramener le ressort vers sa position d’équilibre', 'Le ressort a une énergie négative', 'La raideur est toujours négative', 'La force est toujours nulle'], 0, 'La force de rappel est dirigée à l’opposé de la déformation.'),
                    $question('Un ressort de raideur 200 N/m est comprimé de 0,10 m. Quelle énergie élastique emmagasine-t-il ?', ['1 J', '2 J', '10 J', '20 J'], 0, 'Ee = ½ × 200 × (0,10)² = 1 J.'),
                    $question('À la position d’équilibre, sans déformation, quelle est l’énergie élastique du ressort ?', ['Nulle avec le niveau de référence usuel', 'Égale à k', 'Infinie', 'Égale à son poids'], 0, 'Pour x = 0, Ee = ½kx² = 0.'),
                    $question('Un ressort comprimé libère une bille sur une surface sans frottement. Quelle transformation attend-on ?', ['Énergie élastique en énergie cinétique', 'Énergie cinétique en énergie chimique', 'Énergie thermique en énergie élastique', 'Énergie potentielle de pesanteur en masse'], 0, 'En se détendant, le ressort cède son énergie à la bille, qui se met en mouvement.'),
                    $question('À déformation identique, quel ressort emmagasine le plus d’énergie ?', ['Celui dont la raideur k est la plus grande', 'Celui dont la raideur est la plus petite', 'Ils emmagasinent tous la même énergie', 'Aucun des deux'], 0, 'Pour une même valeur de x, Ee = ½kx² augmente avec la raideur k.'),
                    $question('La force exercée par un ressort idéal est-elle conservative ?', ['Oui, car elle est associée à une énergie potentielle élastique', 'Non, car elle dissipe toujours toute l’énergie', 'Oui, uniquement si le ressort est vertical', 'Non, car elle n’a pas de direction'], 0, 'La force de rappel dérive de l’énergie potentielle Ee = ½kx² ; elle est conservative dans le modèle idéal.'),
                ],
            ],
            [
                'title' => 'Rendement et conversions d’énergie',
                'description' => 'Évaluer la part utile de l’énergie reçue et repérer les principales pertes d’une machine.',
                'duration' => 14,
                'passing_score' => 60,
                'questions' => [
                    $question('Que mesure le rendement d’une machine ?', ['La proportion de l’énergie reçue transformée en énergie utile', 'La durée de vie de la machine', 'La masse de la machine', 'La vitesse maximale uniquement'], 0, 'Le rendement compare l’énergie utile obtenue à l’énergie fournie.'),
                    $question('Quelle formule donne le rendement énergétique η ?', ['η = énergie reçue / énergie utile', 'η = énergie utile / énergie reçue', 'η = énergie utile × énergie reçue', 'η = puissance + énergie'], 1, 'Le rendement est le rapport entre la sortie utile et l’énergie d’entrée.'),
                    $question('Une machine reçoit 1 000 J et fournit 800 J d’énergie utile. Quel est son rendement ?', ['20 %', '80 %', '100 %', '125 %'], 1, 'η = 800/1 000 = 0,80, soit 80 %.'),
                    $question('Pourquoi le rendement d’une machine réelle est-il généralement inférieur à 100 % ?', ['Une partie de l’énergie est dissipée, par exemple par frottement', 'L’énergie utile est toujours supérieure à l’énergie reçue', 'La machine ne peut pas transférer d’énergie', 'Le joule est une unité imprécise'], 0, 'Les frottements et d’autres phénomènes dissipatifs transforment une partie de l’énergie en chaleur ou en bruit.'),
                    $question('Une machine peut-elle fournir plus d’énergie utile qu’elle n’en reçoit ?', ['Oui, si elle est bien conçue', 'Oui, si son rendement est exprimé en pourcentage', 'Non, cela contredirait la conservation de l’énergie', 'Seulement si sa masse est élevée'], 2, 'L’énergie ne se crée pas : l’énergie utile est au plus égale à l’énergie reçue, donc le rendement ne dépasse pas 100 %.'),
                    $question('À énergie utile constante, si l’énergie reçue augmente, que devient le rendement ?', ['Il augmente', 'Il diminue', 'Il reste toujours égal à 100 %', 'Il devient une durée'], 1, 'Le numérateur reste fixe tandis que le dénominateur augmente ; le rapport diminue.'),
                    $question('Pourquoi une partie de l’énergie mécanique d’une machine se retrouve-t-elle souvent sous forme de chaleur ?', ['Les frottements convertissent une partie de l’énergie mécanique en énergie interne', 'La chaleur est créée sans transfert d’énergie', 'Le poids transforme toute l’énergie en lumière', 'La machine perd sa masse'], 0, 'Les frottements sont une cause fréquente de dissipation d’énergie mécanique en énergie thermique.'),
                    $question('Deux moteurs reçoivent la même énergie. Lequel a le meilleur rendement ?', ['Celui qui fournit le plus d’énergie utile', 'Celui qui chauffe le plus', 'Celui qui est le plus lourd', 'Celui qui met le plus de temps, quelles que soient les sorties'], 0, 'À énergie d’entrée identique, une sortie utile plus importante signifie un rendement supérieur.'),
                    $question('Un appareil a un rendement de 60 %. Quelle part de l’énergie reçue est utile ?', ['6 %', '40 %', '60 %', '160 %'], 2, 'Un rendement de 60 % signifie que 60 % de l’énergie reçue est convertie en énergie utile.'),
                    $question('Comment une meilleure lubrification peut-elle améliorer le rendement d’un mécanisme ?', ['Elle réduit généralement les pertes dues aux frottements', 'Elle supprime le besoin d’énergie', 'Elle augmente toujours la masse utile', 'Elle transforme le travail en distance'], 0, 'Une diminution des frottements limite l’énergie dissipée et augmente la part utile.'),
                ],
            ],
            [
                'title' => 'Bilan : travail, énergie et puissance',
                'description' => 'Mobiliser les notions du chapitre dans des situations courtes de calcul et de raisonnement.',
                'duration' => 20,
                'passing_score' => 70,
                'questions' => [
                    $question('Une force de 5 N tire une caisse sur 4 m dans la même direction. Quel est le travail de cette force ?', ['9 J', '20 J', '1,25 J', '0 J'], 1, 'W = Fd = 5 × 4 = 20 J.'),
                    $question('Un chariot de 4 kg roule à 5 m/s. Quelle est son énergie cinétique ?', ['20 J', '50 J', '100 J', '10 J'], 1, 'Ec = ½ × 4 × 5² = 50 J.'),
                    $question('On soulève un objet de 3 kg de 2 m. Avec g = 10 m/s², quelle énergie potentielle gagne-t-il ?', ['6 J', '30 J', '60 J', '120 J'], 2, 'ΔEp = mgΔh = 3 × 10 × 2 = 60 J.'),
                    $question('Une pompe fournit 2 000 J de travail en 10 s. Quelle est sa puissance moyenne ?', ['20 W', '200 W', '2 010 W', '20 000 W'], 1, 'P = W/t = 2 000/10 = 200 W.'),
                    $question('Un objet de 2 kg est lâché sans vitesse initiale et tombe de 5 m sans résistance de l’air. En prenant g = 10 m/s², quelle vitesse atteint-il juste avant le sol ?', ['5 m/s', '10 m/s', '20 m/s', '50 m/s'], 1, 'Par conservation de l’énergie, mgh = ½mv² ; v = √(2gh) = √100 = 10 m/s.'),
                    $question('Un ressort de raideur 100 N/m est comprimé de 0,20 m. Quelle énergie emmagasine-t-il ?', ['1 J', '2 J', '10 J', '20 J'], 1, 'Ee = ½ × 100 × (0,20)² = 2 J.'),
                    $question('Une machine reçoit 500 J et fournit 400 J d’énergie utile. Quel est son rendement ?', ['20 %', '80 %', '100 %', '125 %'], 1, 'η = 400/500 = 0,80, soit 80 %.'),
                    $question('Un cycliste roule à vitesse constante dans un virage. Son énergie cinétique change-t-elle ?', ['Oui, car la direction de son mouvement change', 'Non, car sa vitesse (sa valeur) reste constante', 'Oui, elle devient nulle', 'Non, car aucune force n’agit sur lui'], 1, 'L’énergie cinétique dépend de la valeur de la vitesse, pas de sa direction.'),
                    $question('Pendant un mouvement circulaire uniforme, pourquoi la force centripète ne fournit-elle pas de puissance ?', ['Elle est perpendiculaire à la vitesse instantanée', 'Elle est toujours nulle', 'Elle est parallèle à la vitesse', 'L’objet n’a pas de masse'], 0, 'La puissance instantanée vaut le produit scalaire F·v. Une force perpendiculaire à la vitesse a une puissance nulle.'),
                    $question('Quelle phrase distingue correctement travail, énergie et puissance ?', ['Le travail correspond à un transfert d’énergie, et la puissance indique sa rapidité', 'Le travail et la puissance sont la même grandeur', 'L’énergie se mesure en watts et la puissance en joules', 'La puissance est une force sans déplacement'], 0, 'Le travail traduit un transfert d’énergie ; la puissance mesure le rythme de ce transfert.'),
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
                    'duration' => $quizData['duration'],
                    'passing_score' => $quizData['passing_score'],
                    'total_marks' => count($quizData['questions']),
                    'is_active' => true,
                    'difficulty' => 'Beginner',
                ]
            );

            foreach ($quizData['questions'] as $index => $questionData) {
                $item = Question::updateOrCreate(
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

                $item->choices()->delete();

                foreach ($questionData['choices'] as $choiceIndex => $choiceData) {
                    Choice::create([
                        'question_id' => $item->id,
                        'choice_text' => $choiceData['choice_text'],
                        'is_correct' => $choiceData['is_correct'],
                        'order' => $choiceIndex + 1,
                    ]);
                }
            }
        }
    }
}
