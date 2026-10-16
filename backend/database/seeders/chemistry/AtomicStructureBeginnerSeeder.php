<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class AtomicStructureBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'atomic-structure')->firstOrFail();

        $settings = [
            ['duration' => 15, 'passing_score' => 50],
            ['duration' => 20, 'passing_score' => 55],
            ['duration' => 20, 'passing_score' => 60],
            ['duration' => 20, 'passing_score' => 60],
            ['duration' => 20, 'passing_score' => 60],
            ['duration' => 20, 'passing_score' => 60],
            ['duration' => 20, 'passing_score' => 65],
            ['duration' => 25, 'passing_score' => 65],
            ['duration' => 25, 'passing_score' => 70],
            ['duration' => 25, 'passing_score' => 70],
        ];

        // 'a' = index (0-based) de la bonne réponse dans 'c'
        $quizzes = [
            [
                'title' => "Découvrir l’atome",
                'description' => "Découvrez ce qu’est un atome, ses principales particules et la manière dont elles sont organisées.",
                'questions' => [
                    ['q' => "Qu’est-ce qu’un atome ?", 'c' => ["Un assemblage de plusieurs molécules identiques", "Le plus petit constituant d’un élément chimique", "Une particule chargée présente dans les métaux", "Un grain de matière visible à la loupe ou au microscope"], 'a' => 1, 'e' => "L’atome est la brique de base d’un élément : en le coupant, on n’obtient plus la matière de cet élément. Il est bien trop petit pour être vu à la loupe."],
                    ['q' => "Parmi ces éléments de l’atome, lequel porte une charge négative ?", 'c' => ["Le proton du noyau", "Le neutron", "Le noyau", "L’électron"], 'a' => 3, 'e' => "Les électrons sont négatifs. Le proton est positif, le neutron n’a pas de charge, donc le noyau est globalement positif."],
                    ['q' => "Où se trouvent les protons et les neutrons ?", 'c' => ["Dans le noyau, au centre de l’atome", "Dans le nuage électronique", "Sur les couches externes, autour du noyau", "Entre deux atomes voisins"], 'a' => 0, 'e' => "Protons et neutrons sont serrés au centre et forment le noyau ; les électrons tournent autour, dans le nuage électronique."],
                    ['q' => "Un atome d’oxygène neutre compte 8 protons. Combien d’électrons l’accompagnent ?", 'c' => ["4", "16", "8", "10"], 'a' => 2, 'e' => "Pour que l’atome soit neutre, les 8 charges + des protons doivent être compensées par 8 charges − : 8 électrons."],
                    ['q' => "Quelle particule du noyau est électriquement neutre ?", 'c' => ["Le proton du noyau", "L’anion", "Le cation", "Le neutron"], 'a' => 3, 'e' => "Le nom le dit presque : neutron, neutre. Anion et cation sont des ions, pas des particules du noyau."],
                    ['q' => "Pourquoi la quasi-totalité de la masse d’un atome est-elle concentrée dans le noyau ?", 'c' => ["Parce que les électrons sont plus lourds que les nucléons", "Parce qu’un nucléon pèse près de 2 000 fois un électron", "Parce que le nuage électronique n’a pas de masse du tout", "Parce que le noyau est plus volumineux que le nuage"], 'a' => 1, 'e' => "Un proton ou un neutron est environ 1 800 fois plus massif qu’un électron. Le noyau, minuscule mais dense, porte donc presque toute la masse."],
                    ['q' => "Un atome de sodium compte 11 protons, 11 électrons et 12 neutrons. Quelle est sa charge globale ?", 'c' => ["0", "+1", "−1", "+12"], 'a' => 0, 'e' => "11 charges + et 11 charges − s’annulent ; les neutrons n’ont pas de charge, donc ils ne comptent pas dans le bilan."],
                    ['q' => "Laquelle de ces phrases sur l’atome est exacte ?", 'c' => ["Les électrons sont au centre, les protons autour", "Les neutrons portent une charge positive", "Le noyau est chargé positivement", "Un atome neutre a plus d’électrons que de protons"], 'a' => 2, 'e' => "Le noyau contient les protons (+) et les neutrons (0) : sa charge est positive. Les électrons, eux, sont à l’extérieur."],
                    ['q' => "Un élève affirme : « Si un atome perd un électron, il devient un autre élément. » Que lui répondre ?", 'c' => ["Perdre un électron détruit le noyau et crée un autre atome", "Il devient un ion positif, mais reste le même élément", "Il devient un neutron en perdant sa charge", "Il perd un proton en même temps que l’électron"], 'a' => 1, 'e' => "C’est le nombre de protons qui fait l’élément, et le noyau n’est pas touché. L’atome devient seulement un ion chargé positivement."],
                    ['q' => "Un atome de carbone (6 protons, 6 électrons) capte 2 électrons. Quelle est sa nouvelle charge ?", 'c' => ["−2", "+2", "0", "+14"], 'a' => 0, 'e' => "Le bilan s’écrit 6 charges + contre 8 charges − : 6 − 8 = −2. Capter des électrons rend l’espèce négative."],
                ],
            ],
            [
                'title' => "Protons, neutrons et électrons",
                'description' => "Entraînez-vous à compter les particules subatomiques et à relier ces nombres au comportement de l’atome.",
                'questions' => [
                    ['q' => "Le numéro atomique Z d’un élément indique le nombre de :", 'c' => ["neutrons du noyau", "nucléons du noyau", "protons du noyau", "électrons de valence"], 'a' => 2, 'e' => "Z est le nombre de protons : c’est la carte d’identité de l’élément. Le carbone, c’est Z = 6, point."],
                    ['q' => "Un atome neutre de fluor possède 9 protons. Combien a-t-il d’électrons ?", 'c' => ["9", "10", "18", "8"], 'a' => 0, 'e' => "Neutre veut dire autant d’électrons que de protons, donc 9."],
                    ['q' => "Un noyau contient 17 protons et 18 neutrons. Combien compte-t-il de nucléons ?", 'c' => ["18", "17", "306", "35"], 'a' => 3, 'e' => "Les nucléons sont les protons et les neutrons réunis : 17 + 18 = 35."],
                    ['q' => "Un atome de sodium possède 11 protons et 12 neutrons. Quel est son nombre de masse A ?", 'c' => ["12", "23", "11", "132"], 'a' => 1, 'e' => "A = Z + N = 11 + 12 = 23. On additionne, on ne multiplie pas."],
                    ['q' => "Deux atomes ont 12 protons ; l’un a 12 neutrons, l’autre 14. Que sont-ils ?", 'c' => ["Deux éléments différents, car leurs masses diffèrent", "Deux ions de même charge", "Deux isotopes du même élément", "Un atome et son cation"], 'a' => 2, 'e' => "Même nombre de protons donc même élément (le magnésium), mais pas le même nombre de neutrons : ce sont des isotopes."],
                    ['q' => "Un ion possède 13 protons et 10 électrons. Quelle est sa charge ?", 'c' => ["+3", "−3", "+23", "0"], 'a' => 0, 'e' => "Trois charges + en excès : 13 − 10 = +3. C’est l’ion Al³⁺."],
                    ['q' => "Le noyau d’un atome compte 6 protons et 6 neutrons. Quelle est la charge de ce noyau ?", 'c' => ["0", "+12", "−6", "+6"], 'a' => 3, 'e' => "Seuls les protons comptent : 6 × (+1) = +6. Les neutrons ajoutent de la masse mais pas de charge."],
                    ['q' => "Un ion de l’oxygène (Z = 8) a 10 électrons. Quel symbole lui convient ?", 'c' => ["O²⁺", "O²⁻", "O¹⁰⁻", "F²⁻"], 'a' => 1, 'e' => "8 protons et 10 électrons : deux charges − de trop, soit O²⁻. Le symbole F²⁻ serait faux car Z = 9 pour le fluor."],
                    ['q' => "Pour ne plus confondre Z et A, quelle phrase est exacte ?", 'c' => ["A compte les protons, Z compte les protons et les neutrons", "Z et A comptent tous deux les électrons", "A est plus petit que Z", "Z compte les protons, A compte protons et neutrons"], 'a' => 3, 'e' => "Z vient d’abord et ne compte que les protons ; A les compte avec les neutrons, donc A ≥ Z."],
                    ['q' => "Un atome neutre de calcium a 20 protons et 22 neutrons. Combien d’électrons possède-t-il ?", 'c' => ["22", "42", "20", "202"], 'a' => 2, 'e' => "Les neutrons ne jouent aucun rôle dans la charge : autant d’électrons que de protons, soit 20."],
                ],
            ],
            [
                'title' => "Numéro atomique et nombre de masse",
                'description' => "Apprenez à lire et à utiliser les nombres qui décrivent la composition du noyau d’un atome.",
                'questions' => [
                    ['q' => "En notation nucléaire, quelle lettre désigne le nombre de masse ?", 'c' => ["Z", "N", "E", "A"], 'a' => 3, 'e' => "A comme « atomique » au sens de masse ; Z (de l’allemand Zahl, nombre) sert pour les protons."],
                    ['q' => "Quelle relation donne le nombre de neutrons N ?", 'c' => ["N = A + Z", "N = A − Z", "N = Z − A", "N = A × Z"], 'a' => 1, 'e' => "A = Z + N, donc N = A − Z. On retire les protons du total des nucléons."],
                    ['q' => "Un atome a Z = 8 et A = 16. Combien de neutrons contient-il ?", 'c' => ["16", "24", "8", "4"], 'a' => 2, 'e' => "N = 16 − 8 = 8. Pour l’oxygène, il y a autant de neutrons que de protons."],
                    ['q' => "Un noyau a un nombre de masse A = 31 et contient 16 neutrons. Quel est son numéro atomique ?", 'c' => ["15", "16", "47", "31"], 'a' => 0, 'e' => "Z = A − N = 31 − 16 = 15 : c’est le phosphore."],
                    ['q' => "Les atomes ²³₁₁Na et ²⁴₁₁Na diffèrent par :", 'c' => ["leur nombre de protons", "leur nombre d’électrons (atomes neutres)", "leur nombre de neutrons", "leur numéro atomique"], 'a' => 2, 'e' => "Même Z = 11 donc mêmes protons et mêmes électrons ; seul A change, de 23 à 24, ce qui ajoute un neutron."],
                    ['q' => "Un atome neutre a un numéro atomique égal à 6. Que peut-on en déduire immédiatement ?", 'c' => ["Il a 6 neutrons et 12 nucléons", "Il a 12 électrons", "C’est un ion de charge +6", "Il a 6 protons et 6 électrons"], 'a' => 3, 'e' => "Z = 6 donne 6 protons, et la neutralité impose 6 électrons. Le nombre de neutrons reste inconnu sans A."],
                    ['q' => "Un noyau a un nombre de masse de 31 et un numéro atomique de 15. Combien de nucléons contient-il ?", 'c' => ["31", "16", "46", "15"], 'a' => 0, 'e' => "Le nombre de masse est justement le nombre de nucléons : 31. Les 16 neutrons en font partie, mais ne sont pas le total."],
                    ['q' => "Pourquoi deux isotopes neutres d’un même élément réagissent-ils de façon quasi identique ?", 'c' => ["Leurs noyaux ont exactement la même masse et la même charge", "Ils ont les mêmes électrons, qui gouvernent la réactivité", "Ils contiennent le même nombre de neutrons dans leur noyau", "Leurs électrons sont répartis différemment selon leur masse"], 'a' => 1, 'e' => "La chimie se joue au niveau des électrons. Même Z donne mêmes électrons, donc même comportement, malgré des masses différentes."],
                    ['q' => "Pour un atome avec Z = 12 et A = 25, un élève annonce 13 électrons (atome neutre). Quelle est son erreur ?", 'c' => ["Il a donné les neutrons (A − Z) au lieu de Z", "Il a oublié de soustraire Z de A au départ", "Il a additionné Z et A au lieu de soustraire", "Il a confondu électron et proton dans son calcul"], 'a' => 0, 'e' => "Un atome neutre a Z = 12 électrons. Le 13 est le résultat de 25 − 12, c’est-à-dire les neutrons."],
                    ['q' => "Un atome de phosphore (15 protons, 16 neutrons) perd un électron. Qu’est-ce qui change ?", 'c' => ["Son nombre de protons", "Son élément chimique", "Sa charge électrique", "Son nombre de neutrons"], 'a' => 2, 'e' => "Le noyau reste intact : même Z, même élément. Seule la charge passe de 0 à +1."],
                ],
            ],
            [
                'title' => "Isotopes : une même famille, des noyaux différents",
                'description' => "Comprenez la notion d’isotope et apprenez à comparer des atomes ayant le même nombre de protons mais un nombre différent de neutrons.",
                'questions' => [
                    ['q' => "Qu’est-ce qu’un isotope d’un élément ?", 'c' => ["Un atome d’un élément avec un nombre de neutrons donné", "Un atome qui a gagné ou perdu des neutrons et se charge", "Un atome de même masse mais d’un autre élément", "Un atome de cet élément avec un nombre d’électrons différent"], 'a' => 0, 'e' => "Les isotopes partagent Z mais pas N. Ils sont donc du même élément, avec des masses légèrement différentes."],
                    ['q' => "Le carbone-12 et le carbone-14 ont en commun :", 'c' => ["le nombre de neutrons", "le nombre de nucléons", "le nombre de protons", "la masse du noyau"], 'a' => 2, 'e' => "Ce sont tous deux du carbone, donc 6 protons. Les 12 et 14 sont les nombres de nucléons, qui diffèrent."],
                    ['q' => "Le carbone-14 a pour numéro atomique 6. Combien de neutrons contient son noyau ?", 'c' => ["6", "8", "14", "20"], 'a' => 1, 'e' => "N = A − Z = 14 − 6 = 8. Le « 14 » du nom est le nombre de nucléons, pas de neutrons."],
                    ['q' => "Le chlore existe sous forme de ³⁵Cl et de ³⁷Cl. De combien de neutrons diffèrent ces deux noyaux ?", 'c' => ["1", "17", "18", "2"], 'a' => 3, 'e' => "Même Z = 17, donc l’écart de neutrons est l’écart de A : 37 − 35 = 2."],
                    ['q' => "Laquelle de ces paires est formée de deux isotopes ?", 'c' => ["¹²₆C et ¹⁴₆C", "¹⁴₆C et ¹⁴₇N", "²³₁₁Na et ²⁴₁₂Mg", "¹⁶₈O et ¹⁹₉F"], 'a' => 0, 'e' => "Il faut le même Z (en bas) avec des A différents (en haut). Ici 6 et 6 pour le carbone ; les autres paires ont des Z différents."],
                    ['q' => "Entre ¹²C et ¹⁴C, lequel a la plus grande masse ?", 'c' => ["¹²C, car il possède plus de protons que ¹⁴C", "Ils ont la même masse, car même élément", "¹²C, car il contient plus d’électrons", "¹⁴C, car il contient deux neutrons de plus"], 'a' => 3, 'e' => "Les protons et électrons sont en nombre égal ; la différence vient des 2 neutrons supplémentaires, chacun pesant presque 1 u."],
                    ['q' => "Le néon existe sous forme de ²⁰Ne et de ²²Ne. Combien de protons contient chacun de ces noyaux ?", 'c' => ["20 et 22", "12", "10", "22"], 'a' => 2, 'e' => "Le néon a Z = 10, quel que soit l’isotope. Les 12 neutrons n’appartiennent qu’à ²²Ne."],
                    ['q' => "Un étudiant dit : « Deux isotopes ont des masses différentes, ce sont donc des éléments différents. » Que penser de cette affirmation ?", 'c' => ["Il a raison : la masse du noyau fixe l’élément", "Il a tort : Z fixe l’élément, pas la masse", "Il a raison : les isotopes n’ont pas les mêmes propriétés", "Il a tort : les isotopes diffèrent par leur nombre de protons"], 'a' => 1, 'e' => "C’est Z qui définit l’élément. La masse varie avec les neutrons sans changer d’élément."],
                    ['q' => "Combien de nucléons compte un noyau d’uranium 235 ?", 'c' => ["92", "143", "235", "327"], 'a' => 2, 'e' => "Le nombre qui suit le nom est le nombre de masse, donc 235 nucléons. Avec Z = 92, cela fait 143 neutrons."],
                    ['q' => "Un échantillon de bore contient des atomes ¹⁰B et ¹¹B (Z = 5). Combien d’électrons possède chaque atome neutre ?", 'c' => ["10 et 11 respectivement", "5 pour chacun", "5 et 6", "6 pour chacun"], 'a' => 1, 'e' => "Atome neutre : autant d’électrons que de protons, soit 5 dans les deux cas. Les isotopes ne se distinguent que par leurs neutrons (5 et 6)."],
                ],
            ],
            [
                'title' => "Les ions et leur charge",
                'description' => "Comprenez comment les atomes deviennent des ions, apprenez à déterminer leur charge et distinguez cations et anions.",
                'questions' => [
                    ['q' => "Qu’est-ce qu’un ion ?", 'c' => ["Un atome qui a changé de noyau", "Une espèce portant une charge électrique", "Un atome ayant plus de neutrons que de protons", "Une molécule formée de plusieurs éléments"], 'a' => 1, 'e' => "Un ion a un nombre d’électrons différent de son nombre de protons, d’où sa charge. Son noyau, lui, n’a pas changé."],
                    ['q' => "Le calcium forme l’ion Ca²⁺. Comment nomme-t-on ce type d’ion ?", 'c' => ["Un cation", "Un anion", "Un isotope", "Un radical"], 'a' => 0, 'e' => "Un ion positif est un cation. Astuce : le « t » de cation ressemble à un +."],
                    ['q' => "Les ions Cl⁻ et O²⁻ sont des :", 'c' => ["cations", "isotopes", "molécules", "anions"], 'a' => 3, 'e' => "Ils portent une charge négative : ce sont des anions. Le « n » d’anion rappelle négatif."],
                    ['q' => "Un atome perd un électron. Quel est le résultat ?", 'c' => ["Un anion portant une charge −1", "Un atome neutre d’un autre élément", "Un cation portant une charge +1", "Un isotope de l’atome de départ"], 'a' => 2, 'e' => "En perdant une charge −, il reste une charge + en excès : cation +1. Le noyau n’a pas bougé, donc ni nouvel élément ni isotope."],
                    ['q' => "Un atome de soufre capte deux électrons. Quel symbole désigne l’ion obtenu ?", 'c' => ["S²⁻", "S²⁺", "S⁻", "S₂"], 'a' => 0, 'e' => "Deux électrons gagnés donnent deux charges − en plus, d’où S²⁻. S₂ serait une molécule et non un ion."],
                    ['q' => "Un ion possède 12 protons et 10 électrons. Quelle est sa charge ?", 'c' => ["−2", "+22", "+2", "0"], 'a' => 2, 'e' => "Le nombre de protons dépasse celui des électrons de 2 : charge +2, c’est l’ion Mg²⁺."],
                    ['q' => "Un ion possède 17 protons et 18 électrons. Quelle est sa charge ?", 'c' => ["+1", "0", "−17", "−1"], 'a' => 3, 'e' => "Un électron de plus que de protons, donc −1 : c’est Cl⁻."],
                    ['q' => "Quelle particule faut-il écrire à droite pour équilibrer : Na → Na⁺ + … ?", 'c' => ["n", "e⁻", "p⁺", "2 e⁻"], 'a' => 1, 'e' => "Les charges doivent s’équilibrer : 0 = +1 + (−1). L’atome libère donc un électron."],
                    ['q' => "Un élève écrit O⁺ pour un atome d’oxygène qui a capté deux électrons. Quelle écriture est correcte ?", 'c' => ["O²⁺", "O⁺", "O⁻", "O²⁻"], 'a' => 3, 'e' => "Capter deux électrons donne une charge −2, notée O²⁻. Le signe doit être négatif et le chiffre doit valoir 2."],
                    ['q' => "Un atome de potassium (19 protons) forme l’ion K⁺. Combien d’électrons possède cet ion ?", 'c' => ["18", "20", "19", "1"], 'a' => 0, 'e' => "Charge +1 avec 19 protons : 19 − e = +1, d’où e = 18. L’atome a perdu un électron."],
                ],
            ],
            [
                'title' => "Couches électroniques et configuration simple",
                'description' => "Découvrez comment les électrons sont répartis autour du noyau et utilisez des configurations électroniques simples adaptées au niveau débutant.",
                'questions' => [
                    ['q' => "Dans le modèle en couches, les électrons sont répartis :", 'c' => ["dans le noyau, avec les neutrons", "tous sur la même couche, quel que soit leur nombre", "sur des couches successives autour du noyau", "en dehors de l’atome, dans le vide environnant"], 'a' => 2, 'e' => "Les électrons occupent des niveaux d’énergie successifs autour du noyau, que l’on imagine comme des couches emboîtées."],
                    ['q' => "Dans quel ordre remplit-on les couches électroniques ?", 'c' => ["De la plus éloignée du noyau vers la plus proche", "Toutes en même temps, à parts égales", "En commençant par la troisième couche, la plus stable", "De la plus proche du noyau vers la plus éloignée"], 'a' => 3, 'e' => "On remplit d’abord les niveaux de plus basse énergie, c’est-à-dire les plus proches du noyau."],
                    ['q' => "Combien d’électrons au maximum la deuxième couche peut-elle contenir (modèle simplifié) ?", 'c' => ["2", "8", "4", "18"], 'a' => 1, 'e' => "La première couche en prend 2, la deuxième jusqu’à 8. Le chiffre 18 est réservé à la troisième couche dans un modèle plus complet."],
                    ['q' => "Un atome neutre de carbone possède 6 électrons. Comment sont-ils répartis ?", 'c' => ["2-4", "2-2-2", "3-3", "4-2"], 'a' => 0, 'e' => "On remplit la première couche (2), puis le reste va sur la deuxième : 6 − 2 = 4. D’où 2-4."],
                    ['q' => "Le sodium compte 11 électrons. Combien se trouvent sur sa couche externe ?", 'c' => ["8", "1", "2", "11"], 'a' => 1, 'e' => "11 = 2 + 8 + 1 : la troisième couche ne reçoit que le dernier électron. D’où la configuration 2-8-1."],
                    ['q' => "Le phosphore possède 15 électrons. Quelle répartition correspond au modèle simplifié ?", 'c' => ["2-8-5", "2-5-8", "5-8-2", "2-8-2-3"], 'a' => 0, 'e' => "2 sur la première, 8 sur la deuxième, il en reste 15 − 10 = 5 pour la troisième : 2-8-5."],
                    ['q' => "Pourquoi s’intéresse-t-on surtout à la couche externe ?", 'c' => ["Elle contient les neutrons de l’atome", "Elle concentre presque toute la masse", "Ses électrons forment les liaisons", "Elle détermine le nombre de protons"], 'a' => 2, 'e' => "Ce sont les électrons les plus éloignés du noyau qui interagissent avec les autres atomes. Ils fixent le comportement chimique."],
                    ['q' => "Un atome a pour répartition 2-8-8. Combien d’électrons possède-t-il au total ?", 'c' => ["16", "10", "20", "18"], 'a' => 3, 'e' => "On additionne les couches : 2 + 8 + 8 = 18. Cet atome est l’argon."],
                    ['q' => "Un élève écrit 2-8-9 pour un atome de 19 électrons. Où est le problème ?", 'c' => ["La couche 3 s’arrête à 8 : il faut 2-8-8-1", "Il manque un électron : la première couche devrait en avoir 3", "Il faudrait inverser et écrire 2-9-8", "La somme des électrons ne fait pas 19"], 'a' => 0, 'e' => "2 + 8 + 9 = 19, donc le total est bon, mais la troisième couche ne dépasse pas 8 à ce niveau. Le dernier électron commence une quatrième couche."],
                    ['q' => "Lequel de ces atomes n’a pas un seul électron externe ?", 'c' => ["Li : 2-1", "Na : 2-8-1", "Ne : 2-8", "K : 2-8-8-1"], 'a' => 2, 'e' => "Li, Na et K, la famille des alcalins, ont tous 1 électron externe. Le néon en a 8 : c’est l’intrus."],
                ],
            ],
            [
                'title' => "Électrons de valence et stabilité",
                'description' => "Comprenez le rôle des électrons externes et l’idée générale de stabilité électronique dans les réactions simples.",
                'questions' => [
                    ['q' => "Comment nomme-t-on les électrons de la couche la plus externe ?", 'c' => ["Électrons de valence", "Électrons de cœur", "Nucléons externes", "Électrons de la couche K"], 'a' => 0, 'e' => "Valence vient du latin pour « pouvoir de combinaison » : ce sont eux qui font les liaisons. Les électrons de cœur, eux, sont les couches internes."],
                    ['q' => "Le lithium (2-1) tend à former quel ion ?", 'c' => ["Li⁻", "Li⁺", "Li²⁺", "Li²⁻"], 'a' => 1, 'e' => "Perdre son unique électron externe lui donne la structure 2 du gaz noble hélium, d’où Li⁺."],
                    ['q' => "Le soufre (2-8-6) tend à former l’ion :", 'c' => ["S⁶⁺", "S⁺", "S⁶⁻", "S²⁻"], 'a' => 3, 'e' => "Il lui manque 2 électrons pour avoir 8 sur sa couche externe : il en capte 2 et devient S²⁻, de structure 2-8-8."],
                    ['q' => "Pourquoi le magnésium (2-8-2) donne-t-il Mg²⁺ ?", 'c' => ["Il capte 2 électrons et acquiert la structure 2-8-4", "Il perd 2 protons et acquiert la structure 2-8", "Il perd 2 électrons et prend la structure 2-8", "Il perd 2 neutrons et garde la structure 2-8-2"], 'a' => 2, 'e' => "Il cède ses deux électrons externes, ce qui laisse la couche 2-8 stable. Un noyau ne perd pas de protons dans une réaction chimique."],
                    ['q' => "Parmi ces atomes, lequel a déjà une couche externe particulièrement stable ?", 'c' => ["Na (2-8-1)", "Cl (2-8-7)", "O (oxygène, 2-6)", "Ar (2-8-8)"], 'a' => 3, 'e' => "L’argon a 8 électrons externes, c’est un gaz noble : il réagit très peu. Les trois autres cherchent à gagner ou perdre des électrons."],
                    ['q' => "Complétez : Cl + e⁻ → ?", 'c' => ["Cl⁻", "Cl⁺", "Cl²⁻", "Cl₂"], 'a' => 0, 'e' => "Avec 7 électrons externes, le chlore en gagne un pour en avoir 8. Il se charge −1 : Cl⁻."],
                    ['q' => "Pourquoi le sodium et le fluor forment-ils facilement NaF ?", 'c' => ["Na et F partagent chacun 7 électrons", "Les deux atomes perdent leurs neutrons", "Na cède un électron à F, d’où Na⁺ et F⁻", "F cède un électron à Na, ce qui donne Na⁻ et F⁺"], 'a' => 2, 'e' => "Le sodium (1 électron externe) le donne volontiers au fluor (7 électrons externes). Les deux ions obtenus ont 8 électrons externes et s’attirent."],
                    ['q' => "Un élève dit : « Un atome cherche à avoir 8 électrons au total. » Quelle correction apporter ?", 'c' => ["Le sodium (11 électrons) en aurait trop", "Il s’agit de 8 électrons externes, pas du total", "8 est le nombre de protons de l’atome stable", "Les atomes cherchent plutôt 18 électrons au total"], 'a' => 1, 'e' => "La règle de l’octet porte sur la couche de valence : l’argon stable a 18 électrons au total mais 8 sur sa couche externe."],
                    ['q' => "Le calcium (Z = 20) forme un ion stable. Lequel ?", 'c' => ["Ca⁺", "Ca⁻", "Ca²⁺", "Ca²⁻"], 'a' => 2, 'e' => "Sa répartition 2-8-8-2 s’achève par 2 électrons externes. En les perdant, il prend la structure 2-8-8 de l’argon."],
                    ['q' => "L’aluminium (2-8-3) a 3 électrons externes. Quelle charge porte l’ion stable qu’il forme ?", 'c' => ["−3", "+1", "+2", "+3"], 'a' => 3, 'e' => "Perdre 3 électrons laisse la couche 2-8 du néon. La charge est +3 : Al³⁺."],
                ],
            ],
            [
                'title' => "Masse atomique et comparaison des atomes",
                'description' => "Travaillez sur la masse des particules, la masse atomique relative et des comparaisons simples entre différents atomes.",
                'questions' => [
                    ['q' => "Parmi ces particules, laquelle est la plus légère ?", 'c' => ["Le proton", "Le neutron", "Le noyau d’hélium", "L’électron"], 'a' => 3, 'e' => "L’électron pèse environ 1/1836 d’un proton. Il est hors catégorie."],
                    ['q' => "La masse d’un neutron est, par rapport à celle d’un proton :", 'c' => ["environ 1 800 fois plus grande", "environ 1 800 fois plus petite", "quasiment identique", "nulle"], 'a' => 2, 'e' => "Proton et neutron pèsent chacun environ 1 u, le neutron étant à peine plus lourd. C’est avec l’électron que l’écart est énorme."],
                    ['q' => "Par définition, un atome de ¹²C pèse 12 u. Quelle est la masse approximative d’un atome de ¹³C ?", 'c' => ["13 u", "12,5 u", "6 u", "25 u"], 'a' => 0, 'e' => "Chaque nucléon pèse environ 1 u : 13 nucléons font à peu près 13 u."],
                    ['q' => "Un atome compte 10 protons et 11 neutrons. Quelle est sa masse approximative ?", 'c' => ["10 u", "21 u", "11 u", "110 u"], 'a' => 1, 'e' => "Environ 1 u par nucléon : 10 + 11 = 21 u. Les électrons ne changent presque rien au total."],
                    ['q' => "Parmi ces atomes, lequel est le plus lourd ?", 'c' => ["¹²₆C", "¹⁴₇N", "¹⁶₈O", "¹₁H"], 'a' => 2, 'e' => "À masse proportionnelle au nombre de nucléons, ¹⁶₈O (16 nucléons) devance ¹⁴₇N, ¹²₆C et enfin l’hydrogène, qui n’en a qu’un."],
                    ['q' => "Un atome de zinc ⁶⁵₃₀Zn : combien contient-il de neutrons ?", 'c' => ["30", "35", "65", "95"], 'a' => 1, 'e' => "N = A − Z = 65 − 30 = 35. Le 95 viendrait d’une addition par erreur."],
                    ['q' => "La masse totale des 11 électrons d’un atome de sodium (23 u) représente, par rapport à celle de l’atome :", 'c' => ["environ la moitié", "environ 10 %", "environ 1 %", "moins de 0,05 %"], 'a' => 3, 'e' => "Un électron pèse 0,00055 u, donc 11 électrons font environ 0,006 u, soit 0,026 % de 23 u. C’est négligeable."],
                    ['q' => "Un atome X a 7 protons et 7 neutrons ; un atome Y a 6 protons et 8 neutrons. Quelle affirmation est exacte ?", 'c' => ["Même nombre de masse (14), mais éléments différents", "X est plus lourd que Y, car il a plus de protons", "Ils sont isotopes l’un de l’autre, car A est identique", "Y a moins de nucléons que X, car il a moins de protons"], 'a' => 0, 'e' => "7 + 7 = 14 et 6 + 8 = 14, mais les Z diffèrent (azote et carbone). Des isotopes demanderaient le même Z."],
                    ['q' => "Un étudiant pense que l’atome qui a le plus d’électrons est forcément le plus lourd. Que lui répondre ?", 'c' => ["Il a raison, car les électrons sont les particules les plus lourdes", "Il a tort, car la masse vient surtout des nucléons", "Il a raison, car la masse égale le nombre d’électrons", "Il a tort, car les électrons n’ont aucune masse"], 'a' => 1, 'e' => "Les électrons ont bien une masse, mais minuscule. Un ion peut avoir plus d’électrons qu’un atome plus lourd sans le dépasser."],
                    ['q' => "Un atome de phosphore (15 protons, 16 neutrons, 15 électrons) reçoit un neutron de plus. Qu’est-ce qui augmente ?", 'c' => ["Le nombre de masse, qui passe à 32", "Le numéro atomique, qui passe à 16", "La charge, qui passe à +1", "Le nombre d’électrons, qui passe à 16"], 'a' => 0, 'e' => "Un nucléon de plus : A passe de 31 à 32. Le neutron n’a pas de charge, donc Z et la charge restent identiques."],
                ],
            ],
            [
                'title' => "Lire une représentation atomique",
                'description' => "Interprétez des notations atomiques simples et entraînez-vous à déduire rapidement le nombre de protons, neutrons et électrons.",
                'questions' => [
                    ['q' => "Dans la notation nucléaire ᴬ_ZX, où se place le numéro atomique Z ?", 'c' => ["En haut à gauche", "En bas à gauche", "En haut à droite", "En bas à droite"], 'a' => 1, 'e' => "Z est en bas à gauche, A en haut à gauche. Le haut à droite est réservé à la charge de l’ion."],
                    ['q' => "Pour l’atome ³⁹₁₉K, combien y a-t-il de protons ?", 'c' => ["39", "20", "19", "58"], 'a' => 2, 'e' => "Les protons se lisent en bas à gauche : 19. Le 39 en haut est le nombre de nucléons."],
                    ['q' => "Pour l’atome ¹⁸₈O, combien y a-t-il de neutrons ?", 'c' => ["10", "8", "18", "26"], 'a' => 0, 'e' => "N = A − Z = 18 − 8 = 10. C’est un isotope plus lourd que le ¹⁶O courant."],
                    ['q' => "Combien de nucléons compte un noyau noté ¹⁴₇N ?", 'c' => ["7", "21", "28", "14"], 'a' => 3, 'e' => "Les nucléons, c’est A, le nombre du haut : 14. Ils se répartissent en 7 protons et 7 neutrons."],
                    ['q' => "Dans ³⁵₁₇Cl, le nombre 17 représente :", 'c' => ["Z, le nombre de protons", "A, le nombre de nucléons", "le nombre de neutrons", "la charge de l’atome"], 'a' => 0, 'e' => "Le nombre du bas est Z, soit 17 protons. Le haut, 35, donne les nucléons, et on en déduit 18 neutrons."],
                    ['q' => "Un ion est noté ²⁴₁₂Mg²⁺. Combien possède-t-il d’électrons ?", 'c' => ["14", "12", "24", "10"], 'a' => 3, 'e' => "L’atome neutre a 12 électrons, et la charge 2+ signale qu’il en a perdu 2 : 12 − 2 = 10."],
                    ['q' => "Combien d’électrons possède l’ion noté ¹⁹₉F⁻ ?", 'c' => ["9", "10", "11", "19"], 'a' => 1, 'e' => "Le fluor neutre a 9 électrons, la charge − indique un électron de plus : 10."],
                    ['q' => "Un noyau de 20 protons et 20 neutrons est entouré de 18 électrons. Quel est le symbole complet ?", 'c' => ["⁴⁰₂₀Ca²⁻", "²⁰₂₀Ca²⁺", "⁴⁰₂₀Ca²⁺", "⁴⁰₂₀Ca⁺"], 'a' => 2, 'e' => "A = 20 + 20 = 40, Z = 20, et la charge vaut 20 − 18 = +2. D’où ⁴⁰₂₀Ca²⁺."],
                    ['q' => "Un élève affirme que ²³₁₁Na possède 23 protons. Quelle confusion fait-il ?", 'c' => ["Il compte aussi les électrons de l’atome", "Il confond neutrons et protons", "Il soustrait Z de A", "Il prend le nombre de masse pour Z"], 'a' => 3, 'e' => "Le 23 en haut est A, qui inclut les 12 neutrons. Les protons sont donnés par Z = 11."],
                    ['q' => "Pour ²⁷₁₃Al³⁺, quel triplet (protons ; neutrons ; électrons) est correct ?", 'c' => ["13 ; 14 ; 13", "13 ; 14 ; 10", "13 ; 27 ; 10", "13 ; 14 ; 16"], 'a' => 1, 'e' => "Z = 13 donne 13 protons, A − Z donne 27 − 13 = 14 neutrons. La charge 3+ ôte 3 électrons à 13, il en reste 10."],
                ],
            ],
            [
                'title' => "Révision intégrée de la structure atomique",
                'description' => "Mettez ensemble vos connaissances sur les particules, les isotopes, les ions, les nombres atomiques et la répartition électronique.",
                'questions' => [
                    ['q' => "Quelle grandeur définit à elle seule l’élément auquel appartient un atome ?", 'c' => ["Le nombre de neutrons", "Le nombre de masse", "Le nombre de protons", "Le nombre de couches"], 'a' => 2, 'e' => "Z, le nombre de protons, est unique à chaque élément. Neutrons et électrons peuvent varier sans changer d’élément."],
                    ['q' => "Un atome neutre possède 10 protons et 10 neutrons. Quelle est sa notation complète ?", 'c' => ["¹⁰₂₀Ne", "²⁰₁₀Ne", "²⁰₁₀Ne²⁻", "¹⁰₁₀Ne"], 'a' => 1, 'e' => "Z = 10 en bas, A = 10 + 10 = 20 en haut, sans charge puisque l’atome est neutre. Dans les autres écritures, A et Z sont inversés ou mal calculés."],
                    ['q' => "Un atome de silicium (14 protons) a un nombre de masse égal à 30. Combien contient-il de neutrons ?", 'c' => ["14", "44", "30", "16"], 'a' => 3, 'e' => "N = A − Z = 30 − 14 = 16. Penser « total moins protons »."],
                    ['q' => "Un ion compte 9 protons et 10 électrons. Quel symbole lui convient ?", 'c' => ["F⁻", "Ne", "F⁺", "O⁻"], 'a' => 0, 'e' => "Z = 9 est le fluor, et un électron en excès donne F⁻. Ne aurait 10 protons, O aurait 8."],
                    ['q' => "L’hydrogène possède trois isotopes : ¹H, ²H et ³H (tritium). Combien de neutrons contient ³H ?", 'c' => ["1", "2", "3", "0"], 'a' => 1, 'e' => "Z = 1 pour tout hydrogène, donc N = 3 − 1 = 2. L’isotope ¹H, lui, n’en a aucun."],
                    ['q' => "Le magnésium a 12 électrons. Quelle est sa répartition en couches ?", 'c' => ["2-8-1", "2-10", "2-8-2", "2-2-8"], 'a' => 2, 'e' => "2 sur la première, 8 sur la deuxième, il reste 12 − 10 = 2 pour la troisième. La couche 2 ne peut pas contenir 10 électrons."],
                    ['q' => "Combien d’électrons possède l’ion Na⁺ (Z = 11), et quelle est sa répartition ?", 'c' => ["10 ; 2-8", "11 ; 2-8-1", "10 ; 2-8-1", "12 ; 2-8-2"], 'a' => 0, 'e' => "Il a perdu l’électron de la couche externe : 11 − 1 = 10 électrons, répartis 2-8, comme le néon."],
                    ['q' => "Parmi ces espèces, laquelle n’a pas la répartition 2-8 ?", 'c' => ["Ne", "Na⁺", "F⁻", "Cl⁻"], 'a' => 3, 'e' => "Ne, Na⁺ et F⁻ ont 10 électrons, répartis 2-8. Cl⁻, avec 18 électrons, est en 2-8-8."],
                    ['q' => "L’ion Fe³⁺ vient d’un atome ⁵⁶Fe (Z = 26). Combien a-t-il d’électrons et de neutrons ?", 'c' => ["23 électrons, 30 neutrons", "29 électrons, 30 neutrons, 26 protons", "23 électrons, 26 neutrons", "26 électrons, 30 neutrons"], 'a' => 0, 'e' => "Électrons : 26 − 3 = 23. Neutrons : 56 − 26 = 30, inchangés par la perte d’électrons."],
                    ['q' => "Une espèce compte 12 protons, 12 neutrons et 10 électrons. Laquelle de ces descriptions lui convient ?", 'c' => ["Un atome neutre de nombre de masse 24", "Un ion de charge −2 et de nombre de masse 22", "Un ion +2, de nombre de masse 24", "Un ion de charge +2 et de nombre de masse 22"], 'a' => 2, 'e' => "Charge : 12 − 10 = +2. Nombre de masse : 12 + 12 = 24. C’est l’ion Mg²⁺."],
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
