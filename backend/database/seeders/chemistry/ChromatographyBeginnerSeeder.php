<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class ChromatographyBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'chromatography')->firstOrFail();

        $settings = [
            ['duration' => 15, 'passing_score' => 50],
            ['duration' => 20, 'passing_score' => 55],
            ['duration' => 20, 'passing_score' => 60],
            ['duration' => 20, 'passing_score' => 60],
            ['duration' => 15, 'passing_score' => 55],
            ['duration' => 20, 'passing_score' => 60],
            ['duration' => 25, 'passing_score' => 65],
            ['duration' => 25, 'passing_score' => 70],
        ];

        // 'a' = index (0-based) de la bonne réponse dans 'c'
        $quizzes = [
            [
                'title' => "Les bases de la chromatographie",
                'description' => "Comprendre le principe de la séparation, le rôle des deux phases et les gestes de base d’une chromatographie.",
                'questions' => [
                    ['q' => "Le but principal d’une chromatographie est de…", 'c' => ["mesurer la masse totale d’un échantillon", "synthétiser un produit à partir du mélange", "séparer les espèces d’un mélange", "éliminer les impuretés par chauffage"], 'a' => 2, 'e' => "On répartit les espèces dans l’espace ou dans le temps, ce qui permet ensuite de les identifier ou de les doser."],
                    ['q' => "Une séparation chromatographique est possible parce que les espèces du mélange…", 'c' => ["n’ont pas la même affinité pour les deux phases", "réagissent chimiquement avec le solvant de migration", "ont toutes la même vitesse de migration", "se transforment au contact du support"], 'a' => 0, 'e' => "Chaque espèce partage son temps entre phase mobile et phase stationnaire dans une proportion qui lui est propre ; la vitesse de migration en découle."],
                    ['q' => "Dans une colonne remplie de silice et traversée par un solvant, le solvant joue le rôle de…", 'c' => ["phase stationnaire", "échantillon", "détecteur", "phase mobile"], 'a' => 3, 'e' => "Ce qui circule et entraîne les espèces est la phase mobile ; la silice, elle, reste en place."],
                    ['q' => "Une espèce est très retenue par la phase stationnaire. Comparée à une espèce peu retenue, elle migre…", 'c' => ["plus vite, car elle est plus attirée par le support", "moins vite, car elle est plus longtemps fixée", "à la même vitesse que le solvant", "en sens inverse du solvant"], 'a' => 1, 'e' => "Plus le temps passé fixé sur la phase stationnaire est grand, plus la progression avec la phase mobile est lente."],
                    ['q' => "Deux colorants A et B migrent à des vitesses différentes sur une plaque. Que voit-on en fin de développement ?", 'c' => ["Deux taches bien distinctes", "Une seule tache de couleur mélangée", "Deux taches à la même hauteur", "Aucune tache visible"], 'a' => 0, 'e' => "Des vitesses différentes donnent des distances parcourues différentes : les taches se retrouvent à des hauteurs distinctes."],
                    ['q' => "Laquelle de ces techniques n’est PAS une chromatographie ?", 'c' => ["la CCM", "la HPLC", "la distillation simple", "la chromatographie sur papier"], 'a' => 2, 'e' => "La distillation sépare selon les températures d’ébullition, sans phase stationnaire. Les trois autres utilisent bien deux phases."],
                    ['q' => "On dépose une goutte beaucoup trop concentrée d’échantillon. Quel défaut risque-t-on d’observer ?", 'c' => ["Une tache fine et nette", "Une tache étalée et déformée", "Une tache qui disparaît dès le départ", "Une tache qui dépasse le front du solvant"], 'a' => 1, 'e' => "La surcharge sature la phase stationnaire : les zones s’élargissent et se chevauchent. Mieux vaut peu d’échantillon, bien dilué."],
                    ['q' => "Trois espèces déposées sur la même plaque montent à trois hauteurs différentes. Pourquoi ?", 'c' => ["Le solvant les pousse au hasard", "La silice modifie leurs masses", "Elles ont la même solubilité dans l’éluant", "Leurs affinités pour les phases diffèrent"], 'a' => 3, 'e' => "Polarité, taille et capacité à former des liaisons fixent la compétition entre éluant et silice pour chaque espèce."],
                    ['q' => "Pour doser une espèce après l’avoir séparée, il faut en plus…", 'c' => ["un étalonnage avec des solutions connues", "chauffer l’échantillon jusqu’à sa fusion", "connaître la couleur de l’espèce", "utiliser un solvant plus polaire que l’eau"], 'a' => 0, 'e' => "Le signal (aire du pic, intensité de la tache) n’a de sens quantitatif qu’en le comparant à des étalons de concentration connue."],
                    ['q' => "On veut savoir si l’encre d’un feutre noir est un mélange de colorants, avec très peu de matériel. Que choisir ?", 'c' => ["Une pesée de l’encre", "Un titrage acido-basique", "Une chromatographie sur papier", "Une mesure de la masse volumique"], 'a' => 2, 'e' => "Une bande de papier et un peu d’eau suffisent : si l’encre est un mélange, plusieurs bandes colorées apparaissent."],
                ],
            ],
            [
                'title' => "Phase stationnaire et phase mobile",
                'description' => "Relier polarité, rétention et choix de l’éluant, et distinguer phase normale et phase inverse.",
                'questions' => [
                    ['q' => "Une plaque de CCM est recouverte de silice. Cette silice est…", 'c' => ["la phase mobile, car elle est polaire", "la phase stationnaire, car elle reste fixe", "l’éluant, car elle est en contact avec lui", "l’échantillon, car elle porte les dépôts"], 'a' => 1, 'e' => "Ce qui ne bouge pas pendant l’expérience est la phase stationnaire. L’éluant, lui, monte le long de la plaque."],
                    ['q' => "Sur silice, une espèce très polaire est fortement retenue. Son Rf sera plutôt…", 'c' => ["élevé, proche de 1", "nul quel que soit l’éluant", "indépendant de l’éluant", "faible, proche du dépôt"], 'a' => 3, 'e' => "La silice est polaire : elle retient les espèces polaires par des liaisons hydrogène. Elles avancent peu, donc Rf petit."],
                    ['q' => "On passe d’un éluant peu polaire (cyclohexane) à un éluant plus polaire (éthanol) sur silice. Les taches ont tendance à…", 'c' => ["monter, avec des Rf plus grands", "rester au dépôt, avec des Rf plus petits", "disparaître de la plaque", "descendre sous la ligne de dépôt"], 'a' => 0, 'e' => "Un éluant polaire concurrence la silice et décroche les espèces : elles sont davantage entraînées vers le haut."],
                    ['q' => "Un composé A est apolaire, un composé B polaire. Sur silice avec un éluant peu polaire, lequel monte le plus haut ?", 'c' => ["B, car il est plus attiré par la silice", "B, car il est plus soluble dans l’éluant", "A, car il interagit peu avec la silice", "A, car il est plus polaire que l’éluant"], 'a' => 2, 'e' => "A n’est presque pas retenu par la silice, l’éluant l’entraîne. B reste collé au support par ses interactions polaires."],
                    ['q' => "Le mot « éluant » désigne…", 'c' => ["le solide poreux du support", "le mélange déposé au départ", "le révélateur des taches incolores", "le solvant de migration"], 'a' => 3, 'e' => "Éluer, c’est entraîner : l’éluant est la phase mobile liquide. Retenez : éluant, il Élimine du dépôt les espèces vers le haut."],
                    ['q' => "En chromatographie en phase normale, la phase stationnaire est…", 'c' => ["apolaire et l’éluant polaire", "polaire et l’éluant peu polaire", "apolaire et l’éluant apolaire", "polaire et l’éluant très polaire"], 'a' => 1, 'e' => "Phase normale = silice (polaire) avec un éluant moins polaire. La phase inverse fait exactement l’inverse, d’où son nom."],
                    ['q' => "Quel solvant est le plus éluant (le plus polaire) sur silice ?", 'c' => ["le méthanol", "l’éther de pétrole", "le cyclohexane", "le toluène"], 'a' => 0, 'e' => "Le méthanol possède un groupe OH qui forme des liaisons hydrogène avec la silice. Hydrocarbures et toluène sont bien moins polaires."],
                    ['q' => "Deux taches presque confondues se trouvent près du front. Pour mieux les séparer sur silice, on va…", 'c' => ["employer un éluant plus polaire", "déposer davantage d’échantillon", "employer un éluant moins polaire", "remplacer la plaque par du verre nu"], 'a' => 2, 'e' => "Des Rf proches de 1 signalent un éluant trop fort. En le rendant moins polaire, les taches montent moins et s’écartent."],
                    ['q' => "Parmi ces phrases sur une CCM, laquelle est correcte ?", 'c' => ["La phase stationnaire est le solvant qui monte", "La phase mobile est la silice de la plaque", "La phase mobile reste fixée sur la plaque", "La silice reste fixe, l’éluant monte"], 'a' => 3, 'e' => "Le solide reste en place, le liquide se déplace. Les phrases inversées confondent les deux rôles."],
                    ['q' => "Sur silice, une espèce polaire a un Rf de 0,80 avec l’éluant A et de 0,30 avec l’éluant B. Que peut-on en déduire ?", 'c' => ["B est plus polaire que A", "A est plus polaire que B", "A et B ont la même polarité", "L’espèce a changé de nature"], 'a' => 1, 'e' => "A entraîne beaucoup plus l’espèce polaire : c’est le plus éluant, donc le plus polaire des deux."],
                ],
            ],
            [
                'title' => "Chromatographie sur couche mince (CCM)",
                'description' => "Réaliser une CCM, calculer des rapports frontaux et interpréter les taches avec prudence.",
                'questions' => [
                    ['q' => "Pourquoi trace-t-on la ligne de dépôt au crayon à papier ?", 'c' => ["Le graphite est plus visible que l’encre", "Le crayon abîme moins la silice", "Le graphite colore les espèces déposées", "L’encre pourrait migrer avec l’éluant"], 'a' => 3, 'e' => "L’encre contient des colorants solubles qui monteraient avec le solvant et créeraient des taches parasites. Le graphite reste en place."],
                    ['q' => "Une tache est à 3,0 cm de la ligne de dépôt ; le front du solvant est à 7,5 cm de cette même ligne. Quel est le Rf ?", 'c' => ["0,25", "0,40", "2,5 cm", "0,60"], 'a' => 1, 'e' => "Rf = 3,0 / 7,5 = 0,40. Le numérateur est la distance de la tache, le dénominateur celle du front : le résultat est inférieur à 1."],
                    ['q' => "Le front du solvant est à 8,0 cm du dépôt, une tache à 5,6 cm du dépôt. Calculez le Rf.", 'c' => ["0,57", "1,43", "0,70", "0,30"], 'a' => 2, 'e' => "Rf = 5,6 / 8,0 = 0,70. Le résultat 1,43 vient d’une division à l’envers, et 0,30 de la soustraction 1 − Rf."],
                    ['q' => "Ligne de dépôt à 1,5 cm du bas de la plaque, front à 9,5 cm du bas, centre de la tache à 5,5 cm du bas. Quel est le Rf ?", 'c' => ["0,50", "0,58", "0,42", "0,69"], 'a' => 0, 'e' => "Les distances se comptent depuis le dépôt : (5,5 − 1,5) / (9,5 − 1,5) = 4 / 8 = 0,50. Mesurer depuis le bas fausse le résultat."],
                    ['q' => "Pourquoi le Rf n’a-t-il pas d’unité ?", 'c' => ["C’est une masse ramenée à un volume", "C’est une durée divisée par une autre durée", "C’est le rapport de deux longueurs", "C’est une concentration normalisée"], 'a' => 2, 'e' => "Rf est le quotient de deux distances exprimées dans la même unité, qui se simplifie. Il est sans dimension."],
                    ['q' => "Un élève annonce un Rf de 1,3. Que lui répondre ?", 'c' => ["C’est possible si l’éluant est très polaire", "C’est possible pour une espèce très apolaire", "C’est possible si la plaque est assez longue", "Impossible, distances sans doute inversées"], 'a' => 3, 'e' => "Une tache ne peut pas dépasser le front du solvant, donc Rf est compris entre 0 et 1. Vérifier quelle distance est au numérateur."],
                    ['q' => "Après développement, pour repérer des taches incolores sur une plaque séchée, on peut…", 'c' => ["l’observer sous UV ou la révéler", "la tremper longuement dans de l’eau pure", "la peser avant puis après le développement", "la chauffer au-delà de 1000 °C"], 'a' => 0, 'e' => "Une plaque à indicateur de fluorescence montre les espèces absorbant les UV ; des révélateurs (iode, ninhydrine…) colorent les autres."],
                    ['q' => "La piste de l’échantillon montre deux taches (Rf 0,25 et 0,60). L’étalon du composé A, dans les mêmes conditions, donne Rf = 0,60. Conclusion prudente ?", 'c' => ["A est absent de l’échantillon", "A est peut-être présent", "L’échantillon ne contient que A", "La tache à 0,25 est une erreur"], 'a' => 1, 'e' => "Un même Rf est compatible avec A mais ne le prouve pas : d’autres espèces peuvent avoir le même Rf. On confirme avec un autre éluant."],
                    ['q' => "Pourquoi le niveau d’éluant dans la cuve doit-il rester sous la ligne de dépôt ?", 'c' => ["Pour que la plaque reste sèche", "Pour que l’éluant ne monte pas par capillarité", "Pour limiter l’évaporation de l’éluant", "Pour éviter la dissolution des dépôts"], 'a' => 3, 'e' => "Si le dépôt trempe dans l’éluant, les espèces passent directement dans la cuve au lieu de migrer sur la plaque."],
                    ['q' => "Les taches forment de longues traînées qui se chevauchent. Quelle correction essayer d’abord ?", 'c' => ["Déposer une solution plus diluée", "Déposer une solution plus concentrée", "Utiliser une plaque plus petite", "Tracer la ligne de dépôt au stylo"], 'a' => 0, 'e' => "Les traînées viennent souvent d’une surcharge. Diluer l’échantillon, voire ajuster la polarité de l’éluant, resserre les taches."],
                ],
            ],
            [
                'title' => "Chromatographie sur papier et en colonne",
                'description' => "Comprendre la capillarité, l’élution sur colonne de silice et la récupération de fractions.",
                'questions' => [
                    ['q' => "En chromatographie sur papier, la phase stationnaire est l’eau liée à la cellulose. La phase mobile est…", 'c' => ["l’éluant qui monte", "l’eau fixée à la cellulose", "la feuille de papier", "la ligne de dépôt"], 'a' => 0, 'e' => "Le papier n’est que le support : c’est l’éluant qui se déplace et entraîne les espèces."],
                    ['q' => "Pourquoi l’éluant monte-t-il dans une bande de papier tenue verticalement ?", 'c' => ["Une pompe l’aspire vers le haut", "La poussée d’Archimède le soulève", "La capillarité dans les fibres", "La pesanteur l’attire vers le haut"], 'a' => 2, 'e' => "Les fins interstices entre les fibres de cellulose font monter le liquide, comme dans un morceau de sucre qui trempe dans le café."],
                    ['q' => "Sur une colonne de silice éluée avec un solvant peu polaire, quel composé sort en premier ?", 'c' => ["le plus polaire, retenu par la silice", "le moins polaire des deux", "le plus lourd des deux", "le plus coloré des deux"], 'a' => 1, 'e' => "En phase normale, le moins polaire est le moins retenu : il traverse la colonne le plus vite."],
                    ['q' => "En colonne, on augmente progressivement la polarité de l’éluant (gradient). Pourquoi ?", 'c' => ["Pour ralentir les composés apolaires", "Pour durcir la phase stationnaire", "Pour réduire le débit de la colonne", "Pour déloger les composés polaires"], 'a' => 3, 'e' => "Un éluant de plus en plus polaire finit par déloger les espèces fortement retenues, qui sortent alors en un temps raisonnable."],
                    ['q' => "On a recueilli douze tubes à la sortie d’une colonne. Comment décider lesquels réunir ?", 'c' => ["En mesurant la masse de chaque tube", "En analysant chaque fraction par CCM", "En comparant la couleur de la colonne", "En mesurant la température des tubes"], 'a' => 1, 'e' => "Une CCM de chaque tube montre quelles espèces il contient : on regroupe ceux qui présentent la même tache unique."],
                    ['q' => "Le mélange est déposé sur la colonne dans un grand volume de solvant, formant une zone large. Conséquence ?", 'c' => ["Les bandes s’élargissent et se recouvrent", "Les composés sortent plus vite et mieux séparés", "Les composés restent bloqués en haut", "La phase stationnaire devient mobile"], 'a' => 0, 'e' => "Une bande de départ étalée donne des bandes larges à la sortie. On dépose donc un volume minimal."],
                    ['q' => "Quel défaut de remplissage dégrade la séparation sur une colonne ?", 'c' => ["Une silice bien tassée", "Un niveau de solvant au-dessus du lit", "Des bulles d’air ou des fissures", "Un robinet fermé pendant le dépôt"], 'a' => 2, 'e' => "Bulles et fissures créent des chemins préférentiels : le mélange contourne une partie de la silice et les bandes se déforment."],
                    ['q' => "La CCM de la fraction A montre une tache (Rf 0,45) ; celle de B en montre deux (Rf 0,45 et 0,20). Que faire ?", 'c' => ["Mélanger A et B puis évaporer", "Éliminer A et garder B", "Considérer B comme pure", "Garder A, repasser B"], 'a' => 3, 'e' => "A contient un seul composé. B en contient deux, donc elle est impure : il faut la purifier à nouveau."],
                    ['q' => "On souhaite récupérer plusieurs centaines de milligrammes d’un composé pur. Quelle méthode convient ?", 'c' => ["La CCM analytique", "Le chromatogramme sur papier", "La colonne préparative", "Le calcul du Rf"], 'a' => 2, 'e' => "Une colonne de grande taille traite de grandes quantités et permet de recueillir les composés séparés. CCM et papier sont analytiques."],
                    ['q' => "Deux composés ont des Rf de 0,52 et 0,48 dans l’éluant choisi. Pour les séparer sur colonne, on va plutôt…", 'c' => ["prendre un éluant plus polaire pour aller plus vite", "prendre un éluant moins polaire", "prendre une colonne plus courte et plus large", "déposer une quantité de mélange plus grande"], 'a' => 1, 'e' => "Des Rf voisins de 0,5 sortent trop vite, sans temps pour se séparer. On vise plutôt 0,2 à 0,3 avec un éluant moins polaire."],
                ],
            ],
            [
                'title' => "Chromatographie en phase gazeuse (GC)",
                'description' => "Connaître les éléments d’un chromatographe en phase gazeuse, l’ordre d’élution et les temps de rétention.",
                'questions' => [
                    ['q' => "En GC, la phase mobile est…", 'c' => ["un liquide non polaire", "un solide granulaire", "un gaz (He ou N₂)", "la vapeur d’eau"], 'a' => 2, 'e' => "Le gaz vecteur entraîne les composés vaporisés sans réagir avec eux, d’où le choix d’un gaz inerte comme l’hélium ou le diazote."],
                    ['q' => "Quelle condition un composé doit-il remplir pour être analysé directement en GC ?", 'c' => ["Être vaporisable sans se décomposer", "Être soluble dans l’eau", "Être ionique", "Avoir une masse molaire supérieure à 2000 g/mol"], 'a' => 0, 'e' => "L’échantillon est vaporisé dans l’injecteur puis chauffé dans le four : il doit supporter ces températures sans se dégrader."],
                    ['q' => "Sur une colonne apolaire, avec le même programme de température, quel alcane linéaire sort en premier ?", 'c' => ["l’octane", "l’hexane", "le décane", "le nonane"], 'a' => 1, 'e' => "Sur colonne apolaire, l’ordre suit à peu près les températures d’ébullition : le plus court, le plus volatil, sort le premier."],
                    ['q' => "Éthanol (Téb 78 °C), propan-1-ol (97 °C) et butan-1-ol (118 °C) passent sur une colonne apolaire. Quel est l’ordre d’élution ?", 'c' => ["butan-1-ol, propan-1-ol, éthanol", "propanol, éthanol, butanol", "éthanol, butanol, propanol", "éthanol, propanol, butanol"], 'a' => 3, 'e' => "Le plus volatil est le moins retenu. L’ordre d’élution suit ici les températures d’ébullition croissantes."],
                    ['q' => "Si l’on augmente la température du four (isotherme), les temps de rétention…", 'c' => ["diminuent", "augmentent", "restent identiques", "s’inversent entre composés"], 'a' => 0, 'e' => "Un four plus chaud rend les composés plus volatils : ils passent moins de temps dans la phase stationnaire."],
                    ['q' => "Un chromatogramme GC présente des pics à 2,1 min ; 4,8 min et 4,9 min. Quelle remarque est juste ?", 'c' => ["Le premier pic est le plus abondant", "Le premier pic est mal séparé du second", "Les deux derniers se chevauchent", "Le gaz vecteur est épuisé"], 'a' => 2, 'e' => "Seulement 0,1 min sépare les deux derniers pics : leur résolution est insuffisante, contrairement à celle du premier pic."],
                    ['q' => "Un composé non retenu sort à t₀ = 0,8 min. Un autre sort à tR = 5,2 min. Quel est son temps de rétention réduit t′R = tR − t₀ ?", 'c' => ["6,0 min", "0,15 min", "6,5 min", "4,4 min"], 'a' => 3, 'e' => "On retire le temps passé dans la phase mobile : 5,2 − 0,8 = 4,4 min. Les autres valeurs viennent d’une somme ou d’un quotient."],
                    ['q' => "Pourquoi l’injecteur d’un chromatographe en phase gazeuse est-il chauffé ?", 'c' => ["Pour dégrader les composés", "Pour vaporiser l’échantillon", "Pour refroidir la colonne", "Pour dissoudre le gaz vecteur"], 'a' => 1, 'e' => "L’échantillon liquide doit se vaporiser instantanément pour entrer en bloc dans la colonne et donner des pics fins."],
                    ['q' => "Lequel de ces composés n’est PAS analysable directement par GC ?", 'c' => ["NaCl", "l’éthanol", "le toluène", "le propane"], 'a' => 0, 'e' => "Le sel est un solide ionique non volatil : il se décomposerait avant de se vaporiser. Les trois autres sont volatils."],
                    ['q' => "Deux composés aux températures d’ébullition voisines sortent presque ensemble. Pour mieux les séparer, on peut…", 'c' => ["chauffer le four au maximum", "raccourcir la colonne", "injecter plus d’échantillon", "refroidir le four"], 'a' => 3, 'e' => "Un four plus froid augmente la rétention et amplifie les petites différences entre composés. Chauffer plus fait l’inverse."],
                ],
            ],
            [
                'title' => "HPLC : principes et pratique",
                'description' => "Comprendre la HPLC, la phase inverse C18, l’ordre d’élution et un premier dosage par étalonnage.",
                'questions' => [
                    ['q' => "En HPLC, la phase mobile liquide est mise en mouvement…", 'c' => ["par capillarité", "par une pompe", "par la gravité seule", "par un gaz comprimé"], 'a' => 1, 'e' => "La phase stationnaire est faite de grains très fins qui opposent une forte résistance : seule une pompe haute pression assure le débit."],
                    ['q' => "Une colonne C18 en phase inverse est…", 'c' => ["polaire, avec un éluant apolaire", "polaire, avec de l’eau pure", "apolaire, avec un éluant apolaire", "apolaire, avec eau/acétonitrile"], 'a' => 3, 'e' => "Les chaînes à 18 carbones sont apolaires, alors que l’éluant est polaire : c’est l’inverse de la phase normale sur silice."],
                    ['q' => "Du phénol et du toluène sont injectés sur colonne C18 avec un éluant eau/méthanol. Lequel sort en premier ?", 'c' => ["le toluène, car il est le plus apolaire", "le toluène, car il est le plus polaire", "le phénol, car il est le plus polaire", "le phénol, car il est le plus apolaire"], 'a' => 2, 'e' => "En phase inverse, le plus polaire a peu d’affinité pour les chaînes C18 : il est élué en premier."],
                    ['q' => "En phase inverse, pour diminuer les temps de rétention, on…", 'c' => ["ajoute du méthanol", "augmente la part d’eau", "allonge la colonne", "diminue le débit"], 'a' => 0, 'e' => "Un éluant plus riche en solvant organique est plus fort : il décroche plus vite les espèces apolaires."],
                    ['q' => "Pourquoi dégaze-t-on l’éluant avant de l’utiliser ?", 'c' => ["Pour augmenter la polarité de l’éluant", "Pour éviter les bulles dans la pompe", "Pour concentrer l’échantillon", "Pour colorer les composés"], 'a' => 1, 'e' => "Des bulles perturbent le débit et créent du bruit sur la ligne de base du détecteur."],
                    ['q' => "En HPLC phase normale (silice nue, éluant hexane/isopropanol), quel composé sort en premier ?", 'c' => ["le plus polaire", "celui de plus grande masse", "celui qui absorbe le plus en UV", "le moins polaire"], 'a' => 3, 'e' => "C’est l’ordre inverse de la phase inverse : sur silice polaire, c’est l’espèce la moins polaire qui est la moins retenue."],
                    ['q' => "Un composé sort à tR = 6,0 min, le temps mort valant t₀ = 1,0 min. Quel est son facteur de rétention k = (tR − t₀) / t₀ ?", 'c' => ["5,0", "6,0", "0,20", "1,2"], 'a' => 0, 'e' => "k = (6,0 − 1,0) / 1,0 = 5,0. Penser à retrancher t₀ au numérateur."],
                    ['q' => "On injecte un composé dépourvu de groupe absorbant les UV (le glucose, par exemple) avec un détecteur UV. Que se passe-t-il ?", 'c' => ["Il donne un pic très haut", "Il ne sera pas élué", "Il sera peu visible", "Il sortira avant t₀"], 'a' => 2, 'e' => "Le composé est bien élué mais le détecteur UV ne le voit pas. Il faut un autre détecteur, par exemple réfractométrique."],
                    ['q' => "Un étalon à 0,20 g/L donne un pic d’aire 400. L’échantillon, injecté dans les mêmes conditions, donne une aire de 600. La réponse est proportionnelle à la concentration. Quelle est sa concentration ?", 'c' => ["0,13 g/L", "0,30 g/L", "0,40 g/L", "0,60 g/L"], 'a' => 1, 'e' => "L’aire est proportionnelle à C : C = 0,20 × 600 / 400 = 0,30 g/L."],
                    ['q' => "Pourquoi filtre-t-on l’échantillon sur un filtre de 0,45 µm avant de l’injecter ?", 'c' => ["Pour ne garder que l’eau", "Pour augmenter la concentration", "Pour bloquer les poussières", "Pour changer la polarité de l’éluant"], 'a' => 2, 'e' => "Les grains de la colonne sont minuscules : une poussière suffit à l’obstruer et à faire monter la pression."],
                ],
            ],
            [
                'title' => "Lire et interpréter un chromatogramme",
                'description' => "Exploiter temps de rétention, aires, résolution et étalonnage pour une analyse qualitative et quantitative.",
                'questions' => [
                    ['q' => "Sur un chromatogramme, l’abscisse du sommet d’un pic donne…", 'c' => ["son temps de rétention", "la quantité de composé injectée", "la largeur du pic", "la polarité du composé"], 'a' => 0, 'e' => "L’axe horizontal est le temps écoulé depuis l’injection : le sommet repère le tR."],
                    ['q' => "Deux pics ont la même hauteur, l’un étroit et l’autre large. Pour un même détecteur, lequel correspond à la plus grande quantité ?", 'c' => ["l’étroit", "les deux, à égalité", "le large", "on ne peut rien dire"], 'a' => 2, 'e' => "La quantité est liée à l’aire, pas à la hauteur : à hauteur égale, le pic le plus large a la plus grande aire."],
                    ['q' => "Quatre pics ont pour aires 20 ; 30 ; 10 et 40 (unités arbitraires). Si la réponse du détecteur est la même pour tous, quel pourcentage de l’aire totale représente le deuxième ?", 'c' => ["20 %", "25 %", "40 %", "30 %"], 'a' => 3, 'e' => "Total = 100, donc 30 / 100 = 30 %. Chaque pourcentage est l’aire du pic divisée par la somme des aires."],
                    ['q' => "Deux pics sortent à 4,0 et 5,0 min, avec des largeurs à la base de 0,5 min chacun. Calculez Rs = 2(tR2 − tR1) / (w1 + w2).", 'c' => ["1,0", "2,0", "0,5", "4,0"], 'a' => 1, 'e' => "Rs = 2 × 1,0 / (0,5 + 0,5) = 2,0. Cette valeur dépasse 1,5 : les pics sont séparés jusqu’à la ligne de base."],
                    ['q' => "Quelle valeur minimale de la résolution Rs vise-t-on pour une séparation complète de deux pics ?", 'c' => ["0,5", "1,0", "1,5", "0,1"], 'a' => 2, 'e' => "À Rs = 1,5, les pics se touchent à peine à la base. À 1,0, ils se recouvrent encore un peu."],
                    ['q' => "La droite d’étalonnage est A = 2000 × C (C en mmol/L). Un échantillon donne une aire de 5000. Quelle est sa concentration ?", 'c' => ["2,5 mmol/L", "0,4 mmol/L", "10⁷ mmol/L", "7000 mmol/L"], 'a' => 0, 'e' => "C = A / 2000 = 5000 / 2000 = 2,5 mmol/L. Le résultat 0,4 vient d’une division à l’envers."],
                    ['q' => "Un échantillon dilué 20 fois avant injection donne 0,15 g/L d’après la droite d’étalonnage. Quelle est la concentration de la solution initiale ?", 'c' => ["0,0075 g/L", "3,0 g/L", "0,15 g/L", "20,15 g/L"], 'a' => 1, 'e' => "On multiplie par le facteur de dilution : 0,15 × 20 = 3,0 g/L. La droite donne la concentration de la solution injectée."],
                    ['q' => "Un pic présente un épaulement sur son flanc. Quelle est l’interprétation la plus probable ?", 'c' => ["Du bruit sur la ligne de base", "La disparition de la phase mobile", "Un pic unique mais trop petit", "Deux composés mal séparés"], 'a' => 3, 'e' => "L’épaulement trahit un second pic qui se superpose au premier, donc une coélution partielle."],
                    ['q' => "Un échantillon a le même tR qu’un étalon. Pour confirmer l’identité, on peut…", 'c' => ["comparer la hauteur des deux pics", "doper avec l’étalon", "réinjecter à l’identique", "doubler le débit"], 'a' => 1, 'e' => "Si l’ajout d’étalon ne fait que grandir le pic, sans épaulement ni second pic, l’identité devient plus vraisemblable."],
                    ['q' => "Les temps de rétention dérivent peu à peu vers des valeurs plus petites au cours de la journée. Que contrôler en premier ?", 'c' => ["la concentration de l’échantillon", "l’aire du pic du blanc", "le débit et l’éluant", "la hauteur des pics"], 'a' => 2, 'e' => "Un débit qui varie ou un éluant qui s’évapore (donc change de composition) décale tous les pics en même temps."],
                ],
            ],
            [
                'title' => "Choisir et contrôler une méthode chromatographique",
                'description' => "Choisir la technique adaptée, interpréter des ordres d’élution en phase normale et inverse, et fiabiliser les résultats.",
                'questions' => [
                    ['q' => "On veut doser la vitamine C (acide ascorbique, soluble dans l’eau et fragile à la chaleur) dans un jus. Quelle technique choisir ?", 'c' => ["GC, après chauffage à 300 °C", "CCM, avec le seul Rf comme dosage", "Colonne préparative de silice", "HPLC phase inverse, UV"], 'a' => 3, 'e' => "Composé polaire, non volatil et thermolabile : la HPLC convient, sans vaporisation. Le détecteur UV permet le dosage."],
                    ['q' => "Pour analyser les composés volatils de l’arôme d’une pomme, on utilise plutôt…", 'c' => ["la GC avec un four programmé", "la HPLC en phase normale", "la chromatographie sur papier", "la colonne préparative"], 'a' => 0, 'e' => "Les arômes sont volatils et stables à chaud : la GC les sépare selon leur volatilité et leur affinité pour la colonne."],
                    ['q' => "Un composé a un Rf de 0,60 avec un mélange cyclohexane/acétate d’éthyle, et son échantillon inconnu un Rf de 0,60 avec de l’éthanol pur. Sont-ils identiques ?", 'c' => ["Oui, les deux Rf sont égaux à 0,60", "Non, deux Rf ne peuvent jamais coïncider", "Pas de conclusion : éluants différents", "Oui, car l’écart est inférieur à 0,01"], 'a' => 2, 'e' => "Le Rf dépend de l’éluant et du support : on ne compare que des valeurs mesurées dans les mêmes conditions."],
                    ['q' => "On injecte trois fois le même échantillon : tR = 5,02 ; 5,00 et 4,98 min. Que dire ?", 'c' => ["moyenne 5,00 min, valeurs très dispersées", "moyenne 5,00 min, valeurs très proches", "moyenne 5,02 min, valeurs très proches", "moyenne 4,98 min, valeurs très dispersées"], 'a' => 1, 'e' => "(5,02 + 5,00 + 4,98) / 3 = 5,00 min. L’écart de 0,04 min seulement indique une bonne reproductibilité."],
                    ['q' => "Benzène, toluène et naphtalène sont injectés sur colonne C18 avec un éluant méthanol/eau. Quel est l’ordre d’élution ?", 'c' => ["benzène, toluène, naphtalène", "naphtalène, toluène, benzène", "toluène, benzène, naphtalène", "benzène, naphtalène, toluène"], 'a' => 0, 'e' => "En phase inverse, plus l’hydrocarbure est grand et apolaire, plus il est retenu : benzène < toluène < naphtalène."],
                    ['q' => "À quoi sert un étalon interne ajouté à tous les échantillons et étalons ?", 'c' => ["À changer la polarité de l’éluant", "À augmenter l’aire des pics", "À calibrer la balance", "À corriger l’injection"], 'a' => 3, 'e' => "On utilise le rapport entre l’aire du composé et celle de l’étalon interne : les erreurs d’injection s’éliminent."],
                    ['q' => "Quelle phrase sur les phases normale et inverse est correcte ?", 'c' => ["En phase normale, les composés apolaires sont les plus retenus", "En phase inverse, les composés polaires sortent en premier", "En phase inverse, la silice nue est la phase stationnaire", "En phase normale, l’éluant est un mélange eau/acétonitrile"], 'a' => 1, 'e' => "Phase inverse : colonne apolaire, éluant polaire, donc les composés polaires sortent d’abord. Les autres phrases inversent les rôles."],
                    ['q' => "Un chromatogramme GC montre un seul pic alors que l’on attend deux composés. Pour vérifier une coélution, on peut…", 'c' => ["chauffer plus vite le four", "injecter le double d’échantillon", "ralentir la rampe", "raccourcir la colonne"], 'a' => 2, 'e' => "Une montée en température plus lente accroît la résolution : si deux composés coéluaient, un deuxième pic peut apparaître."],
                    ['q' => "Pour identifier un composé de façon fiable, il vaut mieux utiliser…", 'c' => ["un Rf unique dans un seul éluant", "un tR unique sur une seule colonne", "l’aire et la hauteur du même pic", "deux conditions différentes"], 'a' => 3, 'e' => "Deux espèces peuvent coïncider dans une seule condition. Une concordance dans deux conditions indépendantes réduit nettement ce risque."],
                    ['q' => "La droite d’étalonnage d’une méthode HPLC donne un coefficient R² = 0,90, avec des points visiblement dispersés. Que faire ?", 'c' => ["Refaire la droite après contrôle", "L’utiliser quand même, c’est suffisant", "Doubler toutes les aires", "Ne pas tenir compte du blanc"], 'a' => 0, 'e' => "Un dosage fiable demande une droite très linéaire, avec un R² proche de 1. Il faut chercher l’erreur avant d’exploiter les résultats."],
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
