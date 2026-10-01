<?php

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class MaterialsChemistryBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'materials-chemistry')->firstOrFail();

        $quizSettings = [
            ['duration' => 15, 'passing_score' => 50],
            ['duration' => 15, 'passing_score' => 55],
            ['duration' => 20, 'passing_score' => 60],
            ['duration' => 20, 'passing_score' => 60],
            ['duration' => 20, 'passing_score' => 60],
            ['duration' => 20, 'passing_score' => 65],
            ['duration' => 20, 'passing_score' => 65],
            ['duration' => 25, 'passing_score' => 70],
            ['duration' => 25, 'passing_score' => 70],
        ];

        $quizzes = [
            [
                'title' => 'Les grandes familles de matériaux',
                'description' => 'Identifier les principales familles de matériaux et relier quelques propriétés à leurs usages.',
                'questions' => [
                    ['question' => 'Lequel est un matériau métallique couramment utilisé pour fabriquer des fils électriques ?', 'choices' => ['Le cuivre', 'Le verre', 'Le caoutchouc', 'La porcelaine'], 'correct' => 0, 'explanation' => 'Le cuivre est un bon conducteur électrique et peut être étiré en fils, ce qui explique son usage fréquent dans les câbles.'],
                    ['question' => 'Le verre est généralement classé parmi les matériaux...', 'choices' => ['métalliques', 'céramiques et vitreux', 'polymériques uniquement', 'biologiques'], 'correct' => 1, 'explanation' => 'Le verre est un matériau inorganique amorphe ; il est généralement rattaché à la grande famille des céramiques et matériaux vitreux.'],
                    ['question' => 'Pourquoi la microstructure d’un matériau intéresse-t-elle le chimiste des matériaux ?', 'choices' => ['Parce qu’elle peut modifier ses propriétés', 'Parce qu’elle détermine uniquement son prix', 'Parce qu’elle change toujours sa masse', 'Parce qu’elle remplace tous les essais'], 'correct' => 0, 'explanation' => 'La taille des grains, les phases et l’organisation des constituants influencent des propriétés comme la résistance, la conductivité ou la corrosion.'],
                    ['question' => 'Un matériau composé d’une matrice et d’un renfort appartient généralement à la famille des...', 'choices' => ['composites', 'gaz nobles', 'sels purs', 'métaux alcalins'], 'correct' => 0, 'explanation' => 'Un composite associe plusieurs constituants pour combiner leurs propriétés, par exemple une matrice résineuse et des fibres.'],
                    ['question' => 'Pour une pièce qui doit supporter une charge importante, quelle propriété faut-il regarder en priorité ?', 'choices' => ['La résistance mécanique', 'La couleur', 'L’odeur', 'La miscibilité avec l’eau'], 'correct' => 0, 'explanation' => 'La résistance mécanique renseigne sur la capacité du matériau à supporter des efforts sans déformation ou rupture excessive.'],
                    ['question' => 'Deux matériaux ont la même masse mais des volumes différents. Quelle grandeur permet de les comparer directement ?', 'choices' => ['La densité ou masse volumique', 'Le pH', 'La température d’ébullition de l’eau', 'La viscosité de l’air'], 'correct' => 0, 'explanation' => 'La masse volumique se calcule par la relation rho = m/V. Elle permet de relier directement masse et volume.'],
                    ['question' => 'Pourquoi choisit-on parfois un alliage plutôt qu’un métal pur ?', 'choices' => ['Pour ajuster certaines propriétés', 'Pour rendre le matériau toujours liquide', 'Pour supprimer tous les défauts', 'Pour empêcher tout changement de température'], 'correct' => 0, 'explanation' => 'Modifier la composition peut améliorer ou ajuster la dureté, la résistance, la corrosion, la mise en forme ou d’autres propriétés.'],
                    ['question' => 'Lequel est un exemple de céramique technique ?', 'choices' => ['L’alumine', 'Le cuivre', 'Le polyéthylène', 'L’acier inoxydable'], 'correct' => 0, 'explanation' => 'L’alumine, Al2O3, est une céramique technique utilisée notamment pour sa dureté, sa résistance à l’usure et sa tenue à la chaleur.'],
                    ['question' => 'Un matériau utilisé autour d’un conducteur électrique doit généralement être...', 'choices' => ['isolant', 'très conducteur', 'liquide', 'soluble dans l’eau'], 'correct' => 0, 'explanation' => 'L’isolant empêche le courant de passer vers les zones voisines et contribue à la sécurité du dispositif.'],
                    ['question' => 'Avant de choisir un matériau pour une pièce, quel réflexe est le plus pertinent ?', 'choices' => ['Identifier les contraintes de service', 'Choisir le matériau le plus cher', 'Choisir uniquement selon la couleur', 'Choisir toujours le matériau le plus léger'], 'correct' => 0, 'explanation' => 'Le choix dépend de l’usage : efforts, température, environnement chimique, masse, durée de vie, coût et fabrication.'],
                ],
            ],
            [
                'title' => 'Métaux, alliages et propriétés mécaniques',
                'description' => 'Comprendre ductilité, fragilité, dureté et quelques principes simples sur les alliages métalliques.',
                'questions' => [
                    ['question' => 'Un métal que l’on peut étirer facilement en fil possède une bonne...', 'choices' => ['ductilité', 'fragilité', 'solubilité', 'volatilité'], 'correct' => 0, 'explanation' => 'La ductilité est l’aptitude à subir une déformation plastique importante avant la rupture, ce qui est utile pour fabriquer des fils.'],
                    ['question' => 'Un matériau qui se casse avec très peu de déformation est plutôt...', 'choices' => ['fragile', 'ductile', 'malléable', 'élastique par définition'], 'correct' => 0, 'explanation' => 'La fragilité correspond à une rupture après peu de déformation plastique. Beaucoup de céramiques présentent ce comportement.'],
                    ['question' => 'La dureté mesure surtout la résistance d’un matériau à...', 'choices' => ['la pénétration ou la rayure', 'la dissolution dans l’eau', 'l’évaporation', 'la décoloration'], 'correct' => 0, 'explanation' => 'La dureté caractérise la résistance locale à la pénétration, à la rayure ou à une déformation de surface selon l’essai utilisé.'],
                    ['question' => 'Pourquoi l’acier inoxydable résiste-t-il mieux à la corrosion que de nombreux aciers ordinaires ?', 'choices' => ['La présence de chrome favorise une couche protectrice', 'Il ne contient aucun métal', 'Il est toujours recouvert de peinture', 'Il est totalement inerte dans tous les milieux'], 'correct' => 0, 'explanation' => 'Le chrome favorise la formation d’une couche passive protectrice à la surface de nombreux aciers inoxydables.'],
                    ['question' => 'L’aluminium est souvent choisi pour alléger une structure parce que...', 'choices' => ['sa masse volumique est relativement faible', 'il est toujours plus résistant que tous les aciers', 'il ne conduit pas la chaleur', 'il est impossible à corroder'], 'correct' => 0, 'explanation' => 'L’aluminium est nettement moins dense que l’acier, ce qui peut réduire la masse d’une structure lorsque ses performances conviennent.'],
                    ['question' => 'On fabrique un alliage avec 80 g de métal A et 20 g de métal B. Quelle est la fraction massique de B ?', 'choices' => ['20 %', '2 %', '50 %', '80 %'], 'correct' => 0, 'explanation' => 'La masse totale est de 100 g. La fraction massique de B vaut 20/100 = 0,20, soit 20 %.'],
                    ['question' => 'Pourquoi le refroidissement d’un métal fondu peut-il influencer ses propriétés finales ?', 'choices' => ['Parce qu’il forme une microstructure particulière', 'Parce que les atomes disparaissent', 'Parce que sa masse devient nulle', 'Parce qu’il devient automatiquement fragile'], 'correct' => 0, 'explanation' => 'La vitesse de solidification influence la taille des grains et les phases formées, donc les propriétés du métal.'],
                    ['question' => 'Une clé doit résister aux rayures et à l’usure de surface. Quelle propriété est particulièrement intéressante ?', 'choices' => ['Une bonne dureté', 'Une forte solubilité', 'Une faible masse volumique uniquement', 'Une grande transparence'], 'correct' => 0, 'explanation' => 'Une surface dure résiste mieux à la pénétration, à la rayure et à certaines formes d’usure.'],
                    ['question' => 'Une pièce métallique doit travailler dans un environnement marin. Quel problème faut-il anticiper ?', 'choices' => ['La corrosion', 'La sublimation', 'La fusion à température ambiante', 'La disparition des électrons'], 'correct' => 0, 'explanation' => 'L’humidité et les ions chlorure du milieu marin peuvent favoriser différentes formes de corrosion.'],
                    ['question' => 'Pourquoi même une petite quantité d’un élément d’alliage peut-elle modifier les propriétés d’un métal ?', 'choices' => ['Elle peut changer la microstructure', 'Elle change toujours la masse totale par dix', 'Elle supprime tous les défauts', 'Elle transforme automatiquement le métal en céramique'], 'correct' => 0, 'explanation' => 'Un ajout d’élément peut modifier les phases et la microstructure, ce qui se répercute sur les propriétés mécaniques et chimiques.'],
                ],
            ],
            [
                'title' => 'Céramiques, verres et matériaux réfractaires',
                'description' => 'Reconnaître les caractéristiques et les usages courants des céramiques et des verres.',
                'questions' => [
                    ['question' => 'Quelle propriété est souvent recherchée dans une céramique destinée à un four industriel ?', 'choices' => ['Une bonne tenue à haute température', 'Une grande ductilité', 'Une faible dureté', 'Une forte solubilité dans l’eau'], 'correct' => 0, 'explanation' => 'Les matériaux réfractaires sont conçus pour supporter de fortes températures sans perdre rapidement leurs propriétés.'],
                    ['question' => 'Par rapport à beaucoup de métaux, les céramiques sont souvent...', 'choices' => ['plus fragiles', 'plus ductiles', 'plus malléables', 'plus faciles à déformer plastiquement'], 'correct' => 0, 'explanation' => 'Les céramiques peuvent être très dures et résistantes, mais elles supportent souvent moins bien les déformations plastiques que les métaux.'],
                    ['question' => 'Le verre ordinaire est généralement décrit comme un solide...', 'choices' => ['amorphe', 'métallique', 'poreux par définition', 'gazeux'], 'correct' => 0, 'explanation' => 'Le verre ne possède pas l’ordre cristallin régulier d’un cristal classique. On le décrit donc comme amorphe.'],
                    ['question' => 'Pourquoi le verre convient-il bien à une fenêtre ?', 'choices' => ['Il laisse passer une grande partie de la lumière visible', 'Il conduit très bien le courant', 'Il est plus ductile que le cuivre', 'Il résiste mieux que tous les métaux aux chocs'], 'correct' => 0, 'explanation' => 'La transparence ou au moins la transmission de la lumière visible est précisément une propriété recherchée pour une fenêtre.'],
                    ['question' => 'Quel matériau est particulièrement adapté à une zone soumise à une très forte température ?', 'choices' => ['Une brique réfractaire', 'Du papier', 'Du caoutchouc souple', 'Une mousse alimentaire'], 'correct' => 0, 'explanation' => 'Les briques réfractaires sont formulées pour résister aux températures élevées des fours et installations thermiques.'],
                    ['question' => 'Pourquoi certaines céramiques sont-elles de bons isolants électriques ?', 'choices' => ['Les charges électriques y sont peu mobiles', 'Elles contiennent toujours du cuivre', 'Elles sont toutes liquides', 'Elles créent spontanément un champ électrique'], 'correct' => 0, 'explanation' => 'Dans beaucoup de céramiques isolantes, les porteurs de charge sont peu mobiles, ce qui limite le passage du courant.'],
                    ['question' => 'Pourquoi une pièce en verre peut-elle se briser lors d’une variation thermique très rapide ?', 'choices' => ['Des contraintes internes peuvent apparaître', 'Le verre devient automatiquement gazeux', 'Les atomes quittent le matériau', 'Sa masse disparaît'], 'correct' => 0, 'explanation' => 'Une variation rapide de température peut créer des différences de dilatation et donc des contraintes internes responsables d’un choc thermique.'],
                    ['question' => 'Une vaisselle doit résister à la chaleur d’un four. Quelle famille de matériaux peut convenir ?', 'choices' => ['Certaines céramiques', 'Les gaz nobles', 'Le sodium métallique', 'Le caoutchouc naturel uniquement'], 'correct' => 0, 'explanation' => 'Des céramiques adaptées à la cuisson peuvent supporter des températures bien plus élevées que de nombreux polymères.'],
                    ['question' => 'Pour comparer la résistance de deux céramiques à un choc, quelle démarche est la plus sérieuse ?', 'choices' => ['Réaliser un essai mécanique contrôlé', 'Comparer uniquement leurs couleurs', 'Sentir les deux échantillons', 'Mesurer leur pH'], 'correct' => 0, 'explanation' => 'Un essai contrôlé permet de comparer objectivement leur comportement dans des conditions identiques.'],
                    ['question' => 'Une céramique est très dure mais se fissure facilement. Quelle caractéristique cela illustre-t-il ?', 'choices' => ['La dureté n’empêche pas forcément la fragilité', 'La dureté signifie toujours grande ductilité', 'La fragilité signifie bonne conductivité', 'La dureté est identique à la ténacité'], 'correct' => 0, 'explanation' => 'Dureté et résistance à la rupture ne sont pas la même propriété. Une céramique peut être très dure tout en restant fragile.'],
                ],
            ],
            [
                'title' => 'Propriétés thermiques et mécaniques',
                'description' => 'Relier quelques propriétés physiques des matériaux à des usages concrets.',
                'questions' => [
                    ['question' => 'Un échantillon reprend sa forme après retrait d’une petite charge. Quel comportement observe-t-on ?', 'choices' => ['Un comportement élastique', 'Une corrosion', 'Une fusion', 'Une fracture'], 'correct' => 0, 'explanation' => 'Dans le domaine élastique, la déformation disparaît lorsque la charge est retirée, tant que la limite élastique n’est pas dépassée.'],
                    ['question' => 'Une casserole possède souvent un fond métallique parce qu’un métal...', 'choices' => ['conduit bien la chaleur', 'bloque toute chaleur', 'est toujours isolant', 'absorbe l’eau'], 'correct' => 0, 'explanation' => 'Une bonne conductivité thermique facilite le transfert de chaleur depuis la plaque ou la flamme vers les aliments.'],
                    ['question' => 'Pourquoi laisse-t-on des joints entre certains éléments métalliques d’un pont ?', 'choices' => ['Pour tenir compte de la dilatation thermique', 'Pour empêcher le métal de conduire', 'Pour rendre le pont transparent', 'Pour supprimer la charge du pont'], 'correct' => 0, 'explanation' => 'Les métaux se dilatent généralement lorsqu’ils chauffent. Les joints permettent d’absorber ces variations de longueur.'],
                    ['question' => 'La pièce A s’allonge davantage que la pièce B pour la même hausse de température. On peut dire simplement que A a...', 'choices' => ['un coefficient de dilatation plus élevé', 'une dureté plus élevée', 'une conductivité électrique nulle', 'une masse plus grande par définition'], 'correct' => 0, 'explanation' => 'À conditions identiques, une variation de longueur plus importante indique une sensibilité plus grande à la dilatation thermique.'],
                    ['question' => 'Pour une surface qui doit résister au frottement et aux rayures, quelle propriété est importante ?', 'choices' => ['La dureté', 'La transparence', 'Le pH', 'La miscibilité'], 'correct' => 0, 'explanation' => 'La dureté caractérise notamment la résistance à la pénétration et à certaines formes de rayure et d’usure.'],
                    ['question' => 'Un matériau qui peut être transformé en feuille métallique sans se fissurer facilement est...', 'choices' => ['malléable', 'fragile', 'volatile', 'soluble'], 'correct' => 0, 'explanation' => 'La malléabilité est la capacité à subir une déformation plastique sous compression, ce qui est utile pour former des feuilles.'],
                    ['question' => 'Une poignée de casserole doit limiter la chaleur vers la main. Quel type de matériau convient ?', 'choices' => ['Un bon isolant thermique', 'Un excellent conducteur thermique', 'Un métal nu très fin', 'Un gaz chaud'], 'correct' => 0, 'explanation' => 'Un isolant thermique ralentit le transfert de chaleur vers la main et rend la poignée plus sûre à manipuler.'],
                    ['question' => 'Deux matériaux ont la même forme, mais le premier supporte une charge plus grande avant rupture. Il possède vraisemblablement...', 'choices' => ['une résistance mécanique plus élevée', 'une densité forcément plus faible', 'une transparence plus faible', 'un pH différent'], 'correct' => 0, 'explanation' => 'La capacité à supporter une charge avant rupture est directement liée à la résistance mécanique du matériau et de la pièce testée.'],
                    ['question' => 'Un matériau se déforme beaucoup avant de casser sous traction. Cette observation indique souvent une bonne...', 'choices' => ['ductilité', 'fragilité', 'isolabilité thermique', 'transparence'], 'correct' => 0, 'explanation' => 'Un matériau ductile peut subir une déformation plastique importante avant la rupture.'],
                    ['question' => 'Pourquoi faut-il parfois connaître plusieurs propriétés au lieu de chercher « le matériau le plus résistant » ?', 'choices' => ['Parce qu’un bon choix implique plusieurs compromis', 'Parce que toutes les propriétés sont identiques', 'Parce que la résistance n’a aucune importance', 'Parce que le prix suffit toujours'], 'correct' => 0, 'explanation' => 'En pratique, résistance, masse, coût, corrosion, température de service et facilité de fabrication doivent souvent être considérés ensemble.'],
                ],
            ],
            [
                'title' => 'Conducteurs, isolants et semi-conducteurs',
                'description' => 'Distinguer les comportements électriques de base et comprendre quelques usages de matériaux fonctionnels.',
                'questions' => [
                    ['question' => 'Lequel est un bon conducteur électrique ?', 'choices' => ['Le cuivre', 'Le verre', 'Le caoutchouc', 'La céramique isolante'], 'correct' => 0, 'explanation' => 'Le cuivre possède une forte conductivité électrique et est largement utilisé pour les connexions et les câbles.'],
                    ['question' => 'Pourquoi le verre peut-il servir d’isolant électrique ?', 'choices' => ['Les charges électriques y circulent difficilement', 'Il contient beaucoup de cuivre', 'Il est liquide à température ambiante', 'Il produit du courant'], 'correct' => 0, 'explanation' => 'Dans le verre, les charges ne sont pas assez mobiles pour permettre facilement le passage du courant électrique.'],
                    ['question' => 'Un semi-conducteur possède une conductivité située, de manière générale, entre celle...', 'choices' => ['d’un conducteur et d’un isolant', 'de deux conducteurs identiques', 'de deux liquides', 'd’un métal et d’un gaz'], 'correct' => 0, 'explanation' => 'Les semi-conducteurs ont une conductivité intermédiaire et contrôlable, ce qui les rend utiles en électronique.'],
                    ['question' => 'Pourquoi le silicium est-il très présent dans les composants électroniques ?', 'choices' => ['Ses propriétés électriques peuvent être contrôlées', 'C’est un excellent conducteur métallique pur', 'Il ne contient pas d’électrons', 'Il est liquide à température ambiante'], 'correct' => 0, 'explanation' => 'Le silicium est un semi-conducteur dont les propriétés peuvent être ajustées, notamment par dopage.'],
                    ['question' => 'Dans une cellule photovoltaïque, le semi-conducteur sert notamment à...', 'choices' => ['convertir l’énergie lumineuse en énergie électrique', 'empêcher toute lumière de pénétrer', 'refroidir l’installation', 'jouer uniquement le rôle de support'], 'correct' => 0, 'explanation' => 'Le semi-conducteur photovoltaïque absorbe la lumière et participe à la séparation des charges électriques qui produit le courant.'],
                    ['question' => 'Pourquoi utilise-t-on un matériau conducteur pour un contact électrique ?', 'choices' => ['Pour limiter la résistance du contact', 'Pour bloquer les électrons', 'Pour augmenter les pertes', 'Pour isoler la connexion'], 'correct' => 0, 'explanation' => 'Un bon conducteur facilite le passage du courant et réduit les pertes par effet Joule dans la connexion.'],
                    ['question' => 'Pour séparer électriquement deux pistes sur une carte électronique, on choisit plutôt...', 'choices' => ['un isolant', 'un fil de cuivre nu', 'un métal liquide', 'un conducteur parfait'], 'correct' => 0, 'explanation' => 'L’isolant empêche le courant de passer d’une piste à l’autre lorsqu’on ne veut pas de connexion électrique.'],
                    ['question' => 'Pourquoi la stabilité chimique compte-t-elle pour un matériau électronique ?', 'choices' => ['Une dégradation peut modifier ses propriétés électriques', 'Elle ne sert qu’à choisir sa couleur', 'Elle empêche toute mesure', 'Elle rend le matériau toujours conducteur'], 'correct' => 0, 'explanation' => 'Corrosion, humidité ou réactions chimiques peuvent dégrader une surface et donc changer les performances du composant.'],
                    ['question' => 'Un capteur doit donner une réponse reproductible lorsqu’une température change. Quelle propriété du matériau est particulièrement utile ?', 'choices' => ['Une réponse stable et bien caractérisée au changement de température', 'Une forte solubilité', 'Une couleur vive', 'Une densité maximale'], 'correct' => 0, 'explanation' => 'La réponse du matériau au stimulus doit être connue et reproductible pour obtenir des mesures fiables.'],
                    ['question' => 'Une carte électronique utilise des conducteurs, des semi-conducteurs et des isolants. Pourquoi ?', 'choices' => ['Parce que chaque famille remplit une fonction différente', 'Parce qu’un seul matériau ne peut jamais être utilisé', 'Pour augmenter volontairement toutes les résistances', 'Pour éviter toute conduction'], 'correct' => 0, 'explanation' => 'Les circuits ont besoin de chemins conducteurs, de dispositifs semi-conducteurs et de zones isolantes pour contrôler la circulation des charges.'],
                ],
            ],
            [
                'title' => 'Matériaux composites et renforts',
                'description' => 'Comprendre simplement le rôle de la matrice, du renfort et de l’interface dans un composite.',
                'questions' => [
                    ['question' => 'Dans un composite fibre-résine, les fibres servent principalement à...', 'choices' => ['renforcer le matériau', 'dissoudre la résine', 'rendre la pièce liquide', 'supprimer toute contrainte'], 'correct' => 0, 'explanation' => 'Les fibres portent une partie importante des efforts mécaniques, notamment lorsqu’elles sont orientées dans la bonne direction.'],
                    ['question' => 'Dans le même composite, la matrice sert notamment à...', 'choices' => ['maintenir les fibres en place et transmettre les efforts', 'faire fondre les fibres', 'remplacer toutes les fibres', 'isoler le matériau de l’air uniquement'], 'correct' => 0, 'explanation' => 'La matrice donne la forme au composite, protège souvent le renfort et aide à transférer les charges.'],
                    ['question' => 'Pourquoi l’orientation des fibres peut-elle changer le comportement d’un composite ?', 'choices' => ['Les propriétés mécaniques peuvent dépendre de la direction', 'Les fibres changent d’élément chimique', 'La couleur dépend toujours de l’orientation', 'L’orientation ne change jamais les propriétés'], 'correct' => 0, 'explanation' => 'Les fibres renforcent surtout dans les directions où elles sont orientées. Le matériau peut donc être anisotrope.'],
                    ['question' => 'Un composite contient 30 % de fibres en masse. Quelle masse de fibres y a-t-il dans 2 kg de composite ?', 'choices' => ['0,6 kg', '0,3 kg', '1,4 kg', '2,6 kg'], 'correct' => 0, 'explanation' => '30 % de 2 kg = 0,30 × 2 = 0,6 kg.'],
                    ['question' => 'Que peut provoquer une mauvaise adhérence entre les fibres et la matrice ?', 'choices' => ['Un mauvais transfert des efforts', 'Une augmentation automatique de la résistance', 'Une conductivité parfaite', 'La disparition de la matrice'], 'correct' => 0, 'explanation' => 'Si l’interface adhère mal, les charges passent moins efficacement de la matrice au renfort et la pièce peut se dégrader plus facilement.'],
                    ['question' => 'Le béton armé est un exemple de...', 'choices' => ['matériau composite', 'métal pur', 'verre amorphe', 'semi-conducteur'], 'correct' => 0, 'explanation' => 'Le béton forme la matrice minérale et les armatures apportent notamment une meilleure résistance en traction.'],
                    ['question' => 'Pourquoi les composites sont-ils utilisés dans certaines structures aéronautiques ?', 'choices' => ['Ils peuvent offrir un bon compromis entre masse et performances', 'Ils sont toujours moins chers que tous les métaux', 'Ils ne peuvent jamais se fissurer', 'Ils sont tous transparents'], 'correct' => 0, 'explanation' => 'La réduction de masse tout en gardant des performances mécaniques suffisantes est un avantage important dans plusieurs applications aéronautiques.'],
                    ['question' => 'Un ingénieur aligne des fibres dans le sens principal des efforts. Quel est son objectif ?', 'choices' => ['Exploiter le renforcement dans la direction la plus sollicitée', 'Rendre le composite plus soluble', 'Augmenter sa température de fusion', 'Empêcher toute déformation'], 'correct' => 0, 'explanation' => 'L’orientation permet de placer le renfort là où les charges principales seront appliquées.'],
                    ['question' => 'Pourquoi faut-il aussi étudier la matrice et pas seulement le renfort ?', 'choices' => ['Parce que la matrice influence la tenue, la protection et le transfert des charges', 'Parce que la matrice n’a aucun rôle', 'Parce qu’elle remplace toujours les fibres', 'Parce qu’elle détermine uniquement la couleur'], 'correct' => 0, 'explanation' => 'Un composite fonctionne comme un ensemble. La matrice et l’interface entre constituants influencent fortement ses performances.'],
                    ['question' => 'Avant de choisir un composite pour une pièce, quelle information est particulièrement utile ?', 'choices' => ['La direction des efforts et l’environnement d’utilisation', 'Seulement sa couleur', 'Seulement son nom commercial', 'Uniquement sa masse totale'], 'correct' => 0, 'explanation' => 'Les efforts, la température, l’humidité, les produits chimiques et la géométrie influencent le choix du composite.'],
                ],
            ],
            [
                'title' => 'Corrosion et protection des matériaux',
                'description' => 'Identifier les mécanismes simples de corrosion et les méthodes courantes de protection.',
                'questions' => [
                    ['question' => 'La corrosion d’un métal est principalement...', 'choices' => ['une dégradation chimique ou électrochimique', 'une déformation élastique', 'une simple fusion', 'une transformation nucléaire'], 'correct' => 0, 'explanation' => 'La corrosion correspond à une dégradation du métal par des réactions avec son environnement, souvent électrochimiques.'],
                    ['question' => 'Pourquoi le fer rouille-t-il plus facilement en présence d’eau et d’oxygène ?', 'choices' => ['Ces conditions permettent les réactions de corrosion', 'L’eau transforme le fer en aluminium', 'L’oxygène fait fondre le fer', 'Le fer devient un gaz'], 'correct' => 0, 'explanation' => 'L’eau facilite les échanges ioniques et l’oxygène participe aux réactions qui conduisent à la corrosion du fer.'],
                    ['question' => 'Quel moyen simple peut ralentir la corrosion d’une pièce en acier ?', 'choices' => ['Appliquer un revêtement adapté', 'Ajouter de l’eau salée', 'Rayer régulièrement la surface', 'Chauffer la pièce en permanence'], 'correct' => 0, 'explanation' => 'Une peinture ou un autre revêtement adapté peut isoler le métal de l’eau et de l’oxygène.'],
                    ['question' => 'Pourquoi la galvanisation protège-t-elle l’acier ?', 'choices' => ['Le zinc protège la surface et peut se corroder à la place de l’acier', 'Le zinc rend l’acier transparent', 'Le zinc supprime toute eau du milieu', 'Le zinc empêche toute réaction chimique'], 'correct' => 0, 'explanation' => 'Le zinc forme une protection et peut jouer un rôle sacrificiel, en se consommant préférentiellement dans certaines conditions.'],
                    ['question' => 'Une rayure profonde traverse une peinture protectrice sur une pièce en acier. Que faut-il surveiller ?', 'choices' => ['Le début d’une corrosion locale', 'Une fusion', 'Une sublimation', 'Une disparition de la masse'], 'correct' => 0, 'explanation' => 'Le métal exposé à l’environnement devient plus vulnérable à la corrosion, surtout dans un milieu humide.'],
                    ['question' => 'Pourquoi l’air marin est-il particulièrement agressif pour certains métaux ?', 'choices' => ['Il apporte humidité, oxygène et sels', 'Il ne contient pas d’oxygène', 'Il empêche tout échange ionique', 'Il transforme tous les métaux en verre'], 'correct' => 0, 'explanation' => 'Les ions chlorure et l’humidité peuvent favoriser les réactions électrochimiques et certaines formes de corrosion.'],
                    ['question' => 'Lequel est un signe courant de corrosion du fer ?', 'choices' => ['Des produits brun-rouge en surface', 'Une transparence accrue', 'Une odeur sucrée', 'Une liquéfaction à température ambiante'], 'correct' => 0, 'explanation' => 'La rouille regroupe plusieurs produits de corrosion du fer souvent visibles sous forme de dépôts brunâtres ou rougeâtres.'],
                    ['question' => 'Pourquoi un entretien régulier des pièces métalliques est-il utile ?', 'choices' => ['Il permet de repérer tôt les défauts et de renouveler les protections', 'Il empêche toute oxydation pour toujours', 'Il rend tous les métaux inoxydables', 'Il supprime la nécessité de concevoir la pièce correctement'], 'correct' => 0, 'explanation' => 'Une inspection et un entretien réguliers permettent d’intervenir avant que les dommages de corrosion deviennent importants.'],
                    ['question' => 'Dans une solution saline, la corrosion peut être favorisée parce que...', 'choices' => ['le milieu conduit mieux les charges ioniques', 'le métal devient automatiquement isolant', 'les sels retirent toute l’eau', 'les ions chlorure arrêtent toutes les réactions'], 'correct' => 0, 'explanation' => 'Une meilleure conductivité ionique peut faciliter les courants de corrosion et certains mécanismes électrochimiques.'],
                    ['question' => 'Lors du choix d’un matériau pour une canalisation humide, pourquoi faut-il connaître l’environnement chimique ?', 'choices' => ['Le milieu peut accélérer la corrosion du matériau', 'L’environnement ne joue aucun rôle', 'La corrosion dépend seulement de la couleur', 'Seuls les métaux purs peuvent rouiller'], 'correct' => 0, 'explanation' => 'Le pH, les sels, l’oxygène, la température et les espèces présentes influencent fortement la vitesse et la forme de la corrosion.'],
                ],
            ],
            [
                'title' => 'Matériaux pour l’énergie et les hautes températures',
                'description' => 'Associer quelques propriétés des matériaux aux usages énergétiques et thermiques.',
                'questions' => [
                    ['question' => 'Pourquoi utilise-t-on des matériaux réfractaires dans les fours industriels ?', 'choices' => ['Ils résistent à de très fortes températures', 'Ils fondent très facilement', 'Ils sont toujours de bons conducteurs électriques', 'Ils sont tous biodégradables'], 'correct' => 0, 'explanation' => 'Les réfractaires sont conçus pour conserver leurs propriétés dans des environnements thermiques sévères.'],
                    ['question' => 'Pour limiter les pertes de chaleur dans une maison, on recherche surtout...', 'choices' => ['un bon isolant thermique', 'un métal très conducteur', 'un liquide chaud', 'un matériau très poreux à l’air'], 'correct' => 0, 'explanation' => 'Un isolant thermique réduit le transfert de chaleur entre l’intérieur et l’extérieur.'],
                    ['question' => 'Pourquoi un métal est-il souvent utilisé dans un échangeur thermique ?', 'choices' => ['Il conduit bien la chaleur', 'Il bloque totalement la chaleur', 'Il ne chauffe jamais', 'Il est toujours plus léger que l’air'], 'correct' => 0, 'explanation' => 'La bonne conductivité thermique de nombreux métaux facilite le transfert de chaleur à travers les parois.'],
                    ['question' => 'Dans une batterie, le matériau d’électrode est important parce qu’il...', 'choices' => ['participe aux réactions électrochimiques', 'sert uniquement de décoration', 'empêche toute circulation d’électrons', 'remplace toujours le boîtier'], 'correct' => 0, 'explanation' => 'Les électrodes sont au cœur des réactions d’oxydoréduction qui permettent à la batterie de fournir ou de stocker de l’énergie.'],
                    ['question' => 'Pourquoi les matériaux utilisés dans un moteur chaud doivent-ils être résistants à la température ?', 'choices' => ['Ils doivent garder des propriétés mécaniques suffisantes en fonctionnement', 'Parce que la chaleur empêche toute contrainte', 'Parce que les métaux deviennent tous plus résistants', 'Parce que le moteur ne reçoit aucune charge'], 'correct' => 0, 'explanation' => 'Une pièce chaude reste soumise à des efforts. Elle doit donc conserver une résistance et une stabilité suffisantes à sa température de service.'],
                    ['question' => 'Pourquoi un matériau d’isolation doit-il être stable dans le temps ?', 'choices' => ['Pour conserver ses performances thermiques', 'Pour augmenter la corrosion', 'Pour devenir conducteur', 'Pour changer automatiquement de couleur'], 'correct' => 0, 'explanation' => 'Un isolant qui se tasse, se dégrade ou absorbe trop d’humidité peut perdre une partie de son efficacité.'],
                    ['question' => 'Un réservoir cryogénique fonctionne à très basse température. Pourquoi le choix du matériau est-il particulier ?', 'choices' => ['Certains matériaux deviennent plus fragiles à basse température', 'Tous les matériaux deviennent liquides', 'La masse disparaît', 'Les atomes cessent d’exister'], 'correct' => 0, 'explanation' => 'Le comportement mécanique et thermique de certains matériaux change fortement à basse température. Il faut donc sélectionner des matériaux adaptés.'],
                    ['question' => 'Une installation énergétique doit être à la fois légère, résistante et durable. Que cela montre-t-il ?', 'choices' => ['Le choix du matériau demande un compromis entre plusieurs propriétés', 'Une seule propriété suffit toujours', 'Le coût est toujours nul', 'La température n’a aucune importance'], 'correct' => 0, 'explanation' => 'En ingénierie, les propriétés techniques, la masse, le coût, la durée de vie et l’environnement d’usage doivent être considérés ensemble.'],
                    ['question' => 'Pourquoi des ponts thermiques dans une isolation peuvent-ils poser problème ?', 'choices' => ['Ils créent des zones où la chaleur passe davantage', 'Ils rendent la maison totalement étanche', 'Ils empêchent toute conduction', 'Ils augmentent toujours l’épaisseur d’isolant'], 'correct' => 0, 'explanation' => 'Une zone mal isolée augmente localement le transfert de chaleur et peut réduire l’efficacité globale de l’isolation.'],
                    ['question' => 'Quel critère est important pour un matériau utilisé dans un environnement très chaud et chimiquement agressif ?', 'choices' => ['La stabilité thermique et chimique', 'La couleur uniquement', 'La transparence uniquement', 'Le prix historique du matériau'], 'correct' => 0, 'explanation' => 'Le matériau doit résister à la fois à la température et aux espèces chimiques présentes dans son environnement.'],
                ],
            ],
            [
                'title' => 'Nanomatériaux et matériaux à propriétés particulières',
                'description' => 'Comprendre simplement pourquoi la taille et la surface peuvent changer le comportement d’un matériau.',
                'questions' => [
                    ['question' => 'Quand une particule devient beaucoup plus petite, que devient généralement son rapport surface/volume ?', 'choices' => ['Il augmente', 'Il diminue toujours', 'Il devient nul', 'Il reste forcément identique'], 'correct' => 0, 'explanation' => 'Plus une particule est petite, plus une grande fraction de ses atomes se trouve près de la surface. Le rapport surface/volume augmente.'],
                    ['question' => 'Pourquoi des nanoparticules peuvent-elles être très réactives ?', 'choices' => ['Elles présentent une grande surface spécifique', 'Parce qu’elles sont toutes radioactives', 'Parce qu’elles ne contiennent aucun atome', 'Parce qu’elles sont toutes gazeuses'], 'correct' => 0, 'explanation' => 'Une surface spécifique élevée offre beaucoup de sites d’interaction avec le milieu extérieur.'],
                    ['question' => 'Lequel est un nanomatériau carboné bien connu ?', 'choices' => ['Les nanotubes de carbone', 'Le cuivre en lingot', 'Le sel de cuisine en gros cristal', 'L’eau distillée'], 'correct' => 0, 'explanation' => 'Les nanotubes de carbone sont des structures carbonées de taille nanométrique étudiées pour leurs propriétés mécaniques et électriques.'],
                    ['question' => 'Pourquoi la taille des particules peut-elle influencer une propriété du matériau ?', 'choices' => ['Parce que les effets de surface deviennent importants', 'Parce que les atomes disparaissent', 'Parce que la matière perd sa masse', 'Parce que toutes les particules deviennent liquides'], 'correct' => 0, 'explanation' => 'À petite échelle, la proportion d’atomes de surface augmente et peut modifier la réactivité, les propriétés optiques ou d’autres comportements.'],
                    ['question' => 'Une peinture contenant des nanoparticules résiste mieux aux rayures. Que montre cet exemple ?', 'choices' => ['La structure et la taille des constituants peuvent modifier les propriétés finales', 'La peinture devient un métal', 'Les nanoparticules suppriment toutes les rayures', 'La couleur détermine la dureté'], 'correct' => 0, 'explanation' => 'L’ajout de petites charges peut modifier la microstructure du revêtement et donc améliorer certaines propriétés de surface.'],
                    ['question' => 'Lorsqu’on manipule une poudre nanométrique au laboratoire, quelle précaution est particulièrement raisonnable ?', 'choices' => ['Limiter l’exposition par inhalation et contact', 'La chauffer à mains nues', 'La disperser dans l’air volontairement', 'La mélanger sans protection'], 'correct' => 0, 'explanation' => 'La très petite taille des particules peut rendre l’inhalation ou le contact particulièrement importants à maîtriser.'],
                    ['question' => 'Pourquoi dit-on que les propriétés d’un nanomatériau peuvent différer de celles du matériau massif ?', 'choices' => ['L’échelle et la surface deviennent déterminantes', 'Parce qu’il n’est plus composé d’atomes', 'Parce qu’il devient automatiquement liquide', 'Parce qu’il perd toute structure'], 'correct' => 0, 'explanation' => 'À l’échelle nanométrique, les effets de surface et certains effets liés à la taille peuvent conduire à un comportement différent du matériau massif.'],
                    ['question' => 'Pourquoi faut-il caractériser la taille des nanoparticules dans un produit ?', 'choices' => ['La taille influence souvent leurs propriétés et leur comportement', 'La taille ne joue aucun rôle', 'Pour déterminer seulement leur couleur', 'Pour savoir si elles sont métalliques dans tous les cas'], 'correct' => 0, 'explanation' => 'La distribution de taille peut influencer la surface spécifique, la réactivité, les propriétés optiques et d’autres performances.'],
                    ['question' => 'Quel ensemble de critères est raisonnable avant d’utiliser un nanomatériau dans un produit ?', 'choices' => ['Performances, stabilité, sécurité et impact environnemental', 'Uniquement le prix', 'Uniquement la couleur', 'Uniquement la publicité'], 'correct' => 0, 'explanation' => 'Un matériau moderne doit être évalué pour ses performances mais aussi pour sa sécurité, sa stabilité et son impact sur l’environnement.'],
                    ['question' => 'Pourquoi les méthodes de caractérisation sont-elles importantes pour les nanomatériaux ?', 'choices' => ['Il faut relier leur taille et leur structure à leurs propriétés', 'Parce qu’ils ne peuvent jamais être solides', 'Parce qu’ils sont tous invisibles à toute méthode', 'Parce qu’une seule mesure suffit toujours'], 'correct' => 0, 'explanation' => 'Mesurer la taille, la surface et la structure permet de comprendre pourquoi un matériau possède les performances observées.'],
                ],
            ],
            [
                'title' => 'Choisir un matériau et penser au cycle de vie',
                'description' => 'Appliquer une démarche de sélection tenant compte des performances, du coût, de la durabilité et de la fin de vie.',
                'questions' => [
                    ['question' => 'Pourquoi ne faut-il pas choisir un matériau uniquement parce qu’il est recyclable ?', 'choices' => ['Il doit aussi répondre aux contraintes de l’usage', 'Parce que le recyclage n’existe jamais', 'Parce qu’un matériau recyclable est toujours fragile', 'Parce que le prix n’a aucune importance'], 'correct' => 0, 'explanation' => 'Un matériau doit être adapté à la fonction, à la sécurité, au coût et à l’environnement de service, en plus de sa fin de vie.'],
                    ['question' => 'Que signifie « cycle de vie » pour un matériau ?', 'choices' => ['Considérer sa production, son utilisation et sa fin de vie', 'Considérer uniquement son prix', 'Considérer uniquement le transport', 'Considérer seulement la matière première'], 'correct' => 0, 'explanation' => 'Le cycle de vie couvre les différentes étapes, de l’extraction et de la fabrication jusqu’à l’utilisation puis la réutilisation, le recyclage ou l’élimination.'],
                    ['question' => 'Pourquoi alléger un véhicule peut-il réduire sa consommation d’énergie ?', 'choices' => ['Une masse plus faible demande souvent moins d’énergie pour déplacer le véhicule', 'Parce qu’un véhicule léger n’a plus besoin de moteur', 'Parce que la température baisse automatiquement', 'Parce que l’air devient moins dense autour du véhicule'], 'correct' => 0, 'explanation' => 'À conditions comparables, réduire la masse peut diminuer l’énergie nécessaire pour accélérer et déplacer le véhicule.'],
                    ['question' => 'Un matériau moins cher se corrode deux fois plus vite qu’un autre. Quelle comparaison est la plus pertinente ?', 'choices' => ['Comparer le coût total sur toute la durée de vie', 'Comparer uniquement le prix d’achat', 'Ignorer l’entretien', 'Choisir automatiquement le moins cher'], 'correct' => 0, 'explanation' => 'Le coût réel comprend aussi l’entretien, les réparations, les remplacements et les arrêts éventuels.'],
                    ['question' => 'Pourquoi la durée de vie d’une pièce peut-elle avoir un intérêt environnemental ?', 'choices' => ['Une durée de vie plus longue peut réduire les remplacements', 'Parce qu’une pièce durable est toujours biodégradable', 'Parce qu’elle ne demande aucune matière', 'Parce qu’elle devient plus légère avec le temps'], 'correct' => 0, 'explanation' => 'Faire durer un produit peut éviter une partie des matières et de l’énergie nécessaires à des remplacements fréquents.'],
                    ['question' => 'Pourquoi concevoir une pièce pour être démontée peut faciliter son recyclage ?', 'choices' => ['Les matériaux peuvent être séparés plus facilement', 'Le produit devient automatiquement biodégradable', 'La pièce ne nécessite plus aucun contrôle', 'Tous les matériaux deviennent identiques'], 'correct' => 0, 'explanation' => 'Un démontage simple peut faciliter le tri des matériaux et la récupération des composants valorisables.'],
                    ['question' => 'Quel principe permet de réduire directement la quantité de matière utilisée ?', 'choices' => ['La réduction à la source', 'L’augmentation des déchets', 'Le remplacement systématique par un métal', 'Le stockage sans fin'], 'correct' => 0, 'explanation' => 'Utiliser moins de matière lorsque les performances restent suffisantes réduit la consommation de ressources dès la conception.'],
                    ['question' => 'Un matériau très performant est impossible à réparer dans l’usage prévu. Quelle question faut-il poser ?', 'choices' => ['Existe-t-il un meilleur compromis entre performance et maintenance ?', 'Est-il forcément le meilleur matériau ?', 'Est-il toujours moins cher ?', 'Peut-on ignorer sa durée de vie ?'], 'correct' => 0, 'explanation' => 'La réparabilité et la maintenance peuvent avoir un impact important sur la durée de vie et le coût global d’un produit.'],
                    ['question' => 'Pourquoi la réutilisation d’une pièce en bon état peut-elle être intéressante ?', 'choices' => ['Elle évite de fabriquer immédiatement une pièce neuve', 'Elle augmente automatiquement la corrosion', 'Elle rend la pièce plus lourde', 'Elle supprime tout contrôle qualité'], 'correct' => 0, 'explanation' => 'Réutiliser une pièce encore fonctionnelle peut éviter une nouvelle consommation de matières et d’énergie.'],
                    ['question' => 'Quel ensemble de critères donne une vision réaliste du choix d’un matériau ?', 'choices' => ['Performance, sécurité, coût, durabilité et impact environnemental', 'Couleur, publicité et marque uniquement', 'Prix initial uniquement', 'Dureté uniquement'], 'correct' => 0, 'explanation' => 'Le choix d’un matériau est un compromis multidimensionnel qui combine les exigences techniques, économiques et environnementales.'],
                ],
            ],
        ];

        foreach ($quizzes as $quizIndex => $quizData) {
            $settings = $quizSettings[$quizIndex];

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
                        'explanation' => $questionData['explanation'],
                    ]
                );

                $question->choices()->delete();

                $choices = [];
                foreach ($questionData['choices'] as $choiceIndex => $choiceText) {
                    $choices[] = [
                        'choice_text' => $choiceText,
                        'is_correct' => $choiceIndex === $questionData['correct'],
                    ];
                }

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
