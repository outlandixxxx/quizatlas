<?php

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class SpectroscopyBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'spectroscopy')->firstOrFail();

        $quizSettings = [
            0 => ['duration' => 15, 'passing_score' => 50],
            1 => ['duration' => 15, 'passing_score' => 55],
            2 => ['duration' => 20, 'passing_score' => 60],
            3 => ['duration' => 20, 'passing_score' => 60],
            4 => ['duration' => 20, 'passing_score' => 65],
            5 => ['duration' => 20, 'passing_score' => 65],
            6 => ['duration' => 25, 'passing_score' => 70],
            7 => ['duration' => 25, 'passing_score' => 70],
        ];

        $quizzes = [
            [
                'title' => "Découvrir la spectroscopie",
                'description' => "Comprendre l’idée générale de la spectroscopie et le rôle de la lumière dans l’analyse des substances.",
                'questions' => [
                    [
                        'question' => "À quoi sert principalement la spectroscopie en chimie ?",
                        'explanation' => "La spectroscopie permet d’étudier l’interaction entre la matière et un rayonnement. Elle aide à identifier ou à caractériser des substances.",
                        'choices' => [
                            ['choice_text' => "À mesurer uniquement la masse d’un solide", 'is_correct' => false],
                            ['choice_text' => "À étudier l’interaction entre la matière et un rayonnement", 'is_correct' => true],
                            ['choice_text' => "À remplacer toutes les réactions chimiques", 'is_correct' => false],
                            ['choice_text' => "À déterminer directement la vitesse d’une réaction", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quand une substance absorbe une certaine longueur d’onde, que signifie ce phénomène ?",
                        'explanation' => "L’absorption correspond à une prise d’énergie par la matière. La longueur d’onde absorbée dépend des transitions possibles dans les molécules ou les atomes.",
                        'choices' => [
                            ['choice_text' => "La matière reçoit de l’énergie du rayonnement", 'is_correct' => true],
                            ['choice_text' => "La matière disparaît", 'is_correct' => false],
                            ['choice_text' => "La température devient forcément nulle", 'is_correct' => false],
                            ['choice_text' => "Toutes les longueurs d’onde sont absorbées de la même façon", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Dans un spectre, que représente généralement la longueur d’onde ?",
                        'explanation' => "La longueur d’onde décrit une caractéristique du rayonnement. Elle est souvent exprimée en nanomètres dans les spectres UV-visible.",
                        'choices' => [
                            ['choice_text' => "La distance entre deux points équivalents successifs d’une onde", 'is_correct' => true],
                            ['choice_text' => "La masse de l’échantillon", 'is_correct' => false],
                            ['choice_text' => "Le nombre de molécules dans le bécher", 'is_correct' => false],
                            ['choice_text' => "La pression du laboratoire", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quelle unité est couramment utilisée pour exprimer une longueur d’onde en spectroscopie UV-visible ?",
                        'explanation' => "Le nanomètre, noté nm, est très pratique pour les rayonnements UV-visible, dont les longueurs d’onde sont de l’ordre de quelques centaines de nanomètres.",
                        'choices' => [
                            ['choice_text' => "Le nanomètre", 'is_correct' => true],
                            ['choice_text' => "Le kilogramme", 'is_correct' => false],
                            ['choice_text' => "La mole", 'is_correct' => false],
                            ['choice_text' => "Le litre", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Pourquoi deux substances peuvent-elles donner des spectres différents ?",
                        'explanation' => "Chaque substance possède une structure et des niveaux d’énergie particuliers. Elle n’interagit donc pas avec le rayonnement exactement de la même manière.",
                        'choices' => [
                            ['choice_text' => "Parce qu’elles n’ont pas les mêmes propriétés électroniques ou moléculaires", 'is_correct' => true],
                            ['choice_text' => "Parce que toutes les substances ont une couleur fixe", 'is_correct' => false],
                            ['choice_text' => "Parce que la lumière change la masse atomique", 'is_correct' => false],
                            ['choice_text' => "Parce que la spectroscopie compare seulement les volumes", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Un spectromètre sert surtout à…",
                        'explanation' => "Un spectromètre mesure ou sépare le rayonnement selon une grandeur comme la longueur d’onde afin d’obtenir un spectre exploitable.",
                        'choices' => [
                            ['choice_text' => "analyser un rayonnement en fonction de sa longueur d’onde", 'is_correct' => true],
                            ['choice_text' => "chauffer automatiquement un échantillon", 'is_correct' => false],
                            ['choice_text' => "peser les molécules une par une", 'is_correct' => false],
                            ['choice_text' => "faire précipiter toutes les substances", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quel principe explique qu’une molécule n’absorbe pas n’importe quelle énergie ?",
                        'explanation' => "Les molécules possèdent des niveaux d’énergie quantifiés. Une absorption est possible lorsque l’énergie du rayonnement correspond à une transition autorisée.",
                        'choices' => [
                            ['choice_text' => "Les niveaux d’énergie sont quantifiés", 'is_correct' => true],
                            ['choice_text' => "Toutes les énergies sont toujours absorbées", 'is_correct' => false],
                            ['choice_text' => "La masse devient nulle pendant l’analyse", 'is_correct' => false],
                            ['choice_text' => "La lumière n’a aucune énergie", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Un spectre peut-il être considéré comme une sorte d’empreinte d’une substance ?",
                        'explanation' => "Oui, dans de nombreuses méthodes spectroscopiques, le profil obtenu contient des informations caractéristiques qui aident à reconnaître une substance.",
                        'choices' => [
                            ['choice_text' => "Oui, dans de nombreuses méthodes", 'is_correct' => true],
                            ['choice_text' => "Non, tous les spectres sont identiques", 'is_correct' => false],
                            ['choice_text' => "Seulement pour l’eau", 'is_correct' => false],
                            ['choice_text' => "Seulement pour les métaux", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quelle différence simple existe entre absorption et émission ?",
                        'explanation' => "En absorption, la matière prend de l’énergie au rayonnement. En émission, elle libère de l’énergie sous forme de rayonnement.",
                        'choices' => [
                            ['choice_text' => "L’absorption prend de l’énergie et l’émission en libère", 'is_correct' => true],
                            ['choice_text' => "L’absorption et l’émission sont exactement opposées uniquement pour les liquides", 'is_correct' => false],
                            ['choice_text' => "L’émission ne concerne jamais les atomes", 'is_correct' => false],
                            ['choice_text' => "L’absorption signifie toujours une réaction chimique", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Pourquoi un échantillon doit-il être préparé correctement avant une analyse spectroscopique ?",
                        'explanation' => "Une mauvaise préparation peut introduire des impuretés, modifier la concentration ou perturber le signal. Une bonne préparation améliore donc la qualité du résultat.",
                        'choices' => [
                            ['choice_text' => "Pour obtenir un signal représentatif et limiter les perturbations", 'is_correct' => true],
                            ['choice_text' => "Pour changer volontairement l’identité de la substance", 'is_correct' => false],
                            ['choice_text' => "Pour rendre toutes les substances transparentes", 'is_correct' => false],
                            ['choice_text' => "Pour éviter toute mesure", 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => "Spectroscopie UV-visible et absorbance",
                'description' => "Lire un spectre UV-visible, comprendre l’absorbance et relier le signal à la concentration.",
                'questions' => [
                    [
                        'question' => "Que mesure principalement l’absorbance en UV-visible ?",
                        'explanation' => "L’absorbance indique dans quelle mesure l’échantillon atténue le rayonnement à une longueur d’onde donnée.",
                        'choices' => [
                            ['choice_text' => "La quantité de rayonnement absorbée selon une longueur d’onde", 'is_correct' => true],
                            ['choice_text' => "La masse totale du récipient", 'is_correct' => false],
                            ['choice_text' => "Le point d’ébullition du solvant", 'is_correct' => false],
                            ['choice_text' => "La densité de l’air ambiant", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Dans la loi de Beer-Lambert, l’absorbance est généralement proportionnelle à…",
                        'explanation' => "Dans des conditions adaptées, A = εlc. L’absorbance augmente donc avec la concentration et la longueur du trajet optique.",
                        'choices' => [
                            ['choice_text' => "la concentration et la longueur du trajet optique", 'is_correct' => true],
                            ['choice_text' => "la masse du solvant uniquement", 'is_correct' => false],
                            ['choice_text' => "la température uniquement", 'is_correct' => false],
                            ['choice_text' => "la couleur du bécher uniquement", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Si la concentration d’une solution est doublée, que prévoit la loi de Beer-Lambert dans sa zone de validité ?",
                        'explanation' => "À trajet optique et coefficient d’extinction constants, doubler la concentration double l’absorbance.",
                        'choices' => [
                            ['choice_text' => "L’absorbance est approximativement doublée", 'is_correct' => true],
                            ['choice_text' => "L’absorbance devient toujours nulle", 'is_correct' => false],
                            ['choice_text' => "L’absorbance est divisée par quatre", 'is_correct' => false],
                            ['choice_text' => "La longueur d’onde change forcément", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Une solution présente une absorbance de 0,30. Que peut-on dire sans autre information ?",
                        'explanation' => "L’absorbance seule donne une information sur l’atténuation du faisceau. Pour obtenir une concentration, il faut connaître au minimum les paramètres nécessaires ou utiliser une calibration.",
                        'choices' => [
                            ['choice_text' => "Elle absorbe une partie du rayonnement à la longueur d’onde étudiée", 'is_correct' => true],
                            ['choice_text' => "Sa concentration vaut forcément 0,30 mol/L", 'is_correct' => false],
                            ['choice_text' => "Son pH vaut forcément 0,30", 'is_correct' => false],
                            ['choice_text' => "Elle contient exactement 0,30 g de soluté", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Pourquoi choisit-on souvent λmax pour un dosage UV-visible ?",
                        'explanation' => "À λmax, l’absorbance de l’espèce étudiée est forte, ce qui peut améliorer la sensibilité du dosage et réduire l’effet relatif d’une petite erreur de mesure.",
                        'choices' => [
                            ['choice_text' => "Parce que le signal de l’espèce y est généralement maximal", 'is_correct' => true],
                            ['choice_text' => "Parce que le solvant devient automatiquement solide", 'is_correct' => false],
                            ['choice_text' => "Parce que toutes les espèces ont le même λmax", 'is_correct' => false],
                            ['choice_text' => "Parce que la concentration n’a plus d’importance", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Une solution plus concentrée absorbe-t-elle nécessairement toutes les longueurs d’onde ?",
                        'explanation' => "Non. L’augmentation de concentration renforce le signal aux longueurs d’onde où l’espèce absorbe, mais elle ne crée pas une absorption uniforme sur tout le spectre.",
                        'choices' => [
                            ['choice_text' => "Non, elle absorbe surtout aux longueurs d’onde caractéristiques", 'is_correct' => true],
                            ['choice_text' => "Oui, toutes les longueurs d’onde sont absorbées de façon identique", 'is_correct' => false],
                            ['choice_text' => "Oui, mais seulement au-dessus de 1000 nm", 'is_correct' => false],
                            ['choice_text' => "Non, car une solution concentrée n’absorbe jamais", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Pourquoi utilise-t-on souvent un blanc en spectrophotométrie UV-visible ?",
                        'explanation' => "Le blanc permet de tenir compte de l’absorption ou du signal provenant du solvant et des éléments de mesure, afin d’isoler au mieux celui de l’échantillon.",
                        'choices' => [
                            ['choice_text' => "Pour corriger le signal dû au solvant et au système de mesure", 'is_correct' => true],
                            ['choice_text' => "Pour augmenter artificiellement la concentration", 'is_correct' => false],
                            ['choice_text' => "Pour chauffer la cuve", 'is_correct' => false],
                            ['choice_text' => "Pour transformer le soluté en précipité", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Une droite d’étalonnage donne A = 0,20 pour une solution standard et A = 0,40 pour un échantillon, dans la même gamme linéaire. Quelle concentration est attendue si le standard vaut 2,0 mg/L ?",
                        'explanation' => "Dans une relation linéaire passant par l’origine, doubler l’absorbance correspond à doubler la concentration : 2,0 × (0,40/0,20) = 4,0 mg/L.",
                        'choices' => [
                            ['choice_text' => "1,0 mg/L", 'is_correct' => false],
                            ['choice_text' => "2,0 mg/L", 'is_correct' => false],
                            ['choice_text' => "4,0 mg/L", 'is_correct' => true],
                            ['choice_text' => "8,0 mg/L", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Une absorbance très élevée peut poser quel problème pratique en UV-visible ?",
                        'explanation' => "Quand l’absorbance devient trop élevée, très peu de lumière atteint le détecteur et la mesure peut devenir moins fiable. On peut alors diluer l’échantillon.",
                        'choices' => [
                            ['choice_text' => "Le signal transmis devient très faible et la mesure peut perdre en qualité", 'is_correct' => true],
                            ['choice_text' => "La loi de Beer-Lambert devient toujours exacte", 'is_correct' => false],
                            ['choice_text' => "Le solvant change automatiquement d’identité", 'is_correct' => false],
                            ['choice_text' => "La longueur d’onde devient négative", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Avant de comparer deux absorbances, que faut-il notamment garder identique ?",
                        'explanation' => "Pour une comparaison correcte, on garde notamment la même longueur d’onde, la même cuve et des conditions instrumentales comparables.",
                        'choices' => [
                            ['choice_text' => "Les conditions de mesure, notamment la longueur d’onde et le trajet optique", 'is_correct' => true],
                            ['choice_text' => "La masse des opérateurs", 'is_correct' => false],
                            ['choice_text' => "La couleur du laboratoire", 'is_correct' => false],
                            ['choice_text' => "Le nombre de béchers sur la paillasse", 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => "Spectroscopie infrarouge et groupes fonctionnels",
                'description' => "Associer les vibrations moléculaires aux principales bandes IR et reconnaître quelques groupes fonctionnels courants.",
                'questions' => [
                    [
                        'question' => "Que met principalement en évidence la spectroscopie infrarouge ?",
                        'explanation' => "Le rayonnement infrarouge provoque notamment des vibrations de liaisons. Le spectre obtenu fournit des informations sur les groupes fonctionnels présents.",
                        'choices' => [
                            ['choice_text' => "Les vibrations des liaisons chimiques", 'is_correct' => true],
                            ['choice_text' => "Uniquement la masse du noyau", 'is_correct' => false],
                            ['choice_text' => "La température de fusion sans mesure", 'is_correct' => false],
                            ['choice_text' => "Le nombre exact de neutrons de chaque atome sans autre donnée", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Une large bande vers 3200–3600 cm⁻¹ peut être associée, de façon simple, à quel groupe ?",
                        'explanation' => "Une bande large dans cette zone est typique de l’étirement O–H, notamment dans les alcools et parfois les acides carboxyliques sous forme très large.",
                        'choices' => [
                            ['choice_text' => "O–H", 'is_correct' => true],
                            ['choice_text' => "C=O uniquement", 'is_correct' => false],
                            ['choice_text' => "C–Cl uniquement", 'is_correct' => false],
                            ['choice_text' => "N≡N uniquement", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Une bande forte proche de 1700 cm⁻¹ est souvent un indice de la présence d’une liaison…",
                        'explanation' => "L’étirement de la liaison C=O apparaît souvent vers 1700 cm⁻¹, avec une position exacte qui varie selon le groupe fonctionnel.",
                        'choices' => [
                            ['choice_text' => "C=O", 'is_correct' => true],
                            ['choice_text' => "O–H libre uniquement", 'is_correct' => false],
                            ['choice_text' => "C–C simple uniquement", 'is_correct' => false],
                            ['choice_text' => "H–H", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Pourquoi la bande O–H d’un alcool peut-elle être assez large ?",
                        'explanation' => "Les liaisons hydrogène entre molécules modifient l’environnement de la liaison O–H et élargissent souvent la bande observée.",
                        'choices' => [
                            ['choice_text' => "À cause notamment des interactions par liaison hydrogène", 'is_correct' => true],
                            ['choice_text' => "Parce que l’alcool contient toujours du métal", 'is_correct' => false],
                            ['choice_text' => "Parce que toutes les liaisons vibrent à la même fréquence", 'is_correct' => false],
                            ['choice_text' => "Parce que le détecteur ajoute des molécules", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "À quoi sert souvent la région dite « empreinte digitale » d’un spectre IR ?",
                        'explanation' => "La région basse en nombre d’onde contient de nombreuses bandes caractéristiques. Elle est particulièrement utile pour comparer un spectre à celui d’un composé connu.",
                        'choices' => [
                            ['choice_text' => "À comparer finement un composé avec une référence", 'is_correct' => true],
                            ['choice_text' => "À mesurer directement le pH", 'is_correct' => false],
                            ['choice_text' => "À calculer automatiquement la masse molaire", 'is_correct' => false],
                            ['choice_text' => "À remplacer toute analyse chimique", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Si un spectre montre une forte bande C=O mais aucune large bande O–H typique, quelle famille peut être envisagée parmi les suivantes ?",
                        'explanation' => "Une cétone possède un groupe carbonyle C=O sans groupe O–H. L’absence d’une large bande O–H rend cette interprétation cohérente.",
                        'choices' => [
                            ['choice_text' => "Une cétone", 'is_correct' => true],
                            ['choice_text' => "Un alcool simple", 'is_correct' => false],
                            ['choice_text' => "Un alcane pur sans autre groupe", 'is_correct' => false],
                            ['choice_text' => "Un métal alcalin", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Pourquoi un spectre IR permet-il souvent de distinguer deux molécules qui ont la même formule brute ?",
                        'explanation' => "Des isomères peuvent posséder des arrangements et des groupes fonctionnels différents. Leurs vibrations moléculaires et donc leurs spectres peuvent être différents.",
                        'choices' => [
                            ['choice_text' => "Parce que leur structure peut modifier les vibrations des liaisons", 'is_correct' => true],
                            ['choice_text' => "Parce que la formule brute suffit à fixer un seul spectre pour tous les isomères", 'is_correct' => false],
                            ['choice_text' => "Parce que le solvant change la formule brute", 'is_correct' => false],
                            ['choice_text' => "Parce que l’IR mesure seulement la couleur", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quelle précaution simple est importante lors d’une mesure IR sur une pastille ou une cellule ?",
                        'explanation' => "L’humidité et les contaminations peuvent ajouter des bandes parasites. Une préparation propre et adaptée est donc essentielle.",
                        'choices' => [
                            ['choice_text' => "Éviter les contaminations et l’excès d’humidité", 'is_correct' => true],
                            ['choice_text' => "Ajouter systématiquement du sucre", 'is_correct' => false],
                            ['choice_text' => "Chauffer l’appareil jusqu’à ébullition", 'is_correct' => false],
                            ['choice_text' => "Utiliser obligatoirement une lumière visible très forte", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Un étudiant voit une bande autour de 1700 cm⁻¹ et conclut immédiatement « c’est forcément une cétone ». Pourquoi son raisonnement est-il incomplet ?",
                        'explanation' => "La liaison C=O est présente dans plusieurs familles, notamment les aldéhydes, cétones, acides carboxyliques, esters et amides. Il faut regarder d’autres bandes.",
                        'choices' => [
                            ['choice_text' => "Parce que plusieurs familles possèdent une liaison C=O", 'is_correct' => true],
                            ['choice_text' => "Parce que la zone 1700 cm⁻¹ correspond uniquement aux liaisons O–H", 'is_correct' => false],
                            ['choice_text' => "Parce que l’IR ne détecte jamais les carbonyles", 'is_correct' => false],
                            ['choice_text' => "Parce qu’un seul pic ne peut jamais donner aucune information", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Dans un spectre IR, le nombre d’onde en cm⁻¹ augmente-t-il quand la longueur d’onde augmente ?",
                        'explanation' => "Le nombre d’onde est inversement proportionnel à la longueur d’onde. Quand λ augmente, le nombre d’onde diminue.",
                        'choices' => [
                            ['choice_text' => "Non, ils varient en sens inverse", 'is_correct' => true],
                            ['choice_text' => "Oui, toujours dans la même proportion directe", 'is_correct' => false],
                            ['choice_text' => "Ils sont exactement la même grandeur", 'is_correct' => false],
                            ['choice_text' => "Le nombre d’onde ne dépend jamais de la longueur d’onde", 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => "Spectroscopie Raman : premières notions",
                'description' => "Découvrir le principe général de la spectroscopie Raman et comprendre ce que fournit un spectre Raman.",
                'questions' => [
                    [
                        'question' => "Quel phénomène est à la base de la spectroscopie Raman ?",
                        'explanation' => "La spectroscopie Raman repose sur la diffusion inélastique d’une partie de la lumière incidente, ce qui fournit des informations sur les vibrations moléculaires.",
                        'choices' => [
                            ['choice_text' => "La diffusion inélastique de la lumière", 'is_correct' => true],
                            ['choice_text' => "La fusion complète de l’échantillon", 'is_correct' => false],
                            ['choice_text' => "La dissolution obligatoire du solide", 'is_correct' => false],
                            ['choice_text' => "La mesure directe de la masse atomique", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Pourquoi Raman et IR donnent-ils des informations complémentaires ?",
                        'explanation' => "Les deux méthodes sondent les vibrations moléculaires, mais leurs règles de sélection diffèrent. Certaines vibrations sont donc plus visibles en Raman qu’en IR, et inversement.",
                        'choices' => [
                            ['choice_text' => "Parce que leurs règles de sélection ne sont pas les mêmes", 'is_correct' => true],
                            ['choice_text' => "Parce que Raman ne concerne jamais les molécules", 'is_correct' => false],
                            ['choice_text' => "Parce que l’IR mesure uniquement la masse", 'is_correct' => false],
                            ['choice_text' => "Parce que les deux techniques utilisent toujours exactement la même longueur d’onde", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Un avantage pratique fréquent de Raman est qu’on peut parfois analyser…",
                        'explanation' => "Raman permet souvent d’examiner des échantillons avec une préparation limitée et peut être adapté à certaines analyses à travers des contenants transparents au laser utilisé.",
                        'choices' => [
                            ['choice_text' => "des échantillons avec une préparation relativement simple", 'is_correct' => true],
                            ['choice_text' => "uniquement des gaz à très haute température", 'is_correct' => false],
                            ['choice_text' => "uniquement des échantillons radioactifs", 'is_correct' => false],
                            ['choice_text' => "uniquement des métaux fondus", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quel élément du montage Raman fournit généralement l’excitation ?",
                        'explanation' => "Un laser fournit une lumière monochromatique intense qui éclaire l’échantillon et permet d’observer la lumière diffusée.",
                        'choices' => [
                            ['choice_text' => "Un laser", 'is_correct' => true],
                            ['choice_text' => "Un thermomètre", 'is_correct' => false],
                            ['choice_text' => "Une balance analytique", 'is_correct' => false],
                            ['choice_text' => "Une burette", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Pourquoi la lumière laser est-elle intéressante en Raman ?",
                        'explanation' => "Sa lumière est suffisamment intense et étroite spectralement pour faciliter la détection des faibles décalages associés à la diffusion Raman.",
                        'choices' => [
                            ['choice_text' => "Parce qu’elle fournit une excitation intense et bien définie spectralement", 'is_correct' => true],
                            ['choice_text' => "Parce qu’elle chauffe toujours l’échantillon jusqu’à ébullition", 'is_correct' => false],
                            ['choice_text' => "Parce qu’elle ne contient aucune énergie", 'is_correct' => false],
                            ['choice_text' => "Parce qu’elle remplace le détecteur", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Un pic Raman correspond principalement à…",
                        'explanation' => "Un pic du spectre Raman correspond à une diffusion décalée en énergie, liée à un mode vibrationnel ou rotationnel de la molécule.",
                        'choices' => [
                            ['choice_text' => "Un mode de vibration ou de rotation caractéristique", 'is_correct' => true],
                            ['choice_text' => "Une mesure directe de la masse du bécher", 'is_correct' => false],
                            ['choice_text' => "Une valeur de pH", 'is_correct' => false],
                            ['choice_text' => "La densité de l’échantillon sans autre information", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Pourquoi une fluorescence forte peut-elle gêner une mesure Raman ?",
                        'explanation' => "La fluorescence peut produire un signal beaucoup plus intense que le signal Raman et masquer les faibles bandes recherchées.",
                        'choices' => [
                            ['choice_text' => "Elle peut masquer le faible signal Raman", 'is_correct' => true],
                            ['choice_text' => "Elle diminue toujours la quantité de matière", 'is_correct' => false],
                            ['choice_text' => "Elle transforme le laser en infrarouge", 'is_correct' => false],
                            ['choice_text' => "Elle rend tous les échantillons transparents", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quelle information peut aider à identifier une substance par Raman ?",
                        'explanation' => "Les positions et l’intensité relative de certaines bandes Raman forment un profil caractéristique qui peut être comparé à une bibliothèque de références.",
                        'choices' => [
                            ['choice_text' => "Le profil de ses bandes Raman", 'is_correct' => true],
                            ['choice_text' => "La couleur du laboratoire", 'is_correct' => false],
                            ['choice_text' => "Le numéro du flacon", 'is_correct' => false],
                            ['choice_text' => "La température de la pièce uniquement", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quel type de vibration est observé dans les spectroscopies vibratoires comme Raman et IR ?",
                        'explanation' => "Les molécules peuvent vibrer en étirement et en déformation de leurs liaisons. Ces mouvements correspondent à des modes vibratoires observables spectroscopiquement.",
                        'choices' => [
                            ['choice_text' => "Des étirements et des déformations des liaisons", 'is_correct' => true],
                            ['choice_text' => "Uniquement des déplacements du bécher", 'is_correct' => false],
                            ['choice_text' => "Uniquement des changements de masse nucléaire", 'is_correct' => false],
                            ['choice_text' => "Des réactions de combustion obligatoires", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Pourquoi faut-il rester prudent avec un laser lors d’une analyse Raman ?",
                        'explanation' => "Un laser peut être dangereux pour les yeux et la peau selon sa puissance et sa longueur d’onde. La sécurité du montage est donc essentielle.",
                        'choices' => [
                            ['choice_text' => "Parce qu’un faisceau laser peut présenter un risque pour les yeux et la peau", 'is_correct' => true],
                            ['choice_text' => "Parce qu’il est toujours radioactif", 'is_correct' => false],
                            ['choice_text' => "Parce qu’il fait exploser automatiquement l’échantillon", 'is_correct' => false],
                            ['choice_text' => "Parce qu’il empêche toute mesure", 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => "Spectroscopie atomique",
                'description' => "Comprendre les spectres atomiques, les niveaux d’énergie et les applications simples de l’analyse des éléments.",
                'questions' => [
                    [
                        'question' => "Pourquoi les atomes peuvent-ils émettre des raies à des longueurs d’onde précises ?",
                        'explanation' => "Les électrons des atomes occupent des niveaux d’énergie quantifiés. Une transition entre deux niveaux donne un photon d’énergie bien définie.",
                        'choices' => [
                            ['choice_text' => "Parce que leurs niveaux d’énergie sont quantifiés", 'is_correct' => true],
                            ['choice_text' => "Parce que toutes les transitions ont la même énergie", 'is_correct' => false],
                            ['choice_text' => "Parce que la lumière n’a pas d’énergie", 'is_correct' => false],
                            ['choice_text' => "Parce que les noyaux changent tous de masse", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Dans une émission atomique, un photon est émis lorsqu’un électron…",
                        'explanation' => "Lorsqu’un électron passe d’un niveau d’énergie plus élevé à un niveau plus bas, la différence d’énergie est libérée sous forme de photon.",
                        'choices' => [
                            ['choice_text' => "passe vers un niveau d’énergie plus bas", 'is_correct' => true],
                            ['choice_text' => "disparaît du noyau", 'is_correct' => false],
                            ['choice_text' => "devient un neutron", 'is_correct' => false],
                            ['choice_text' => "quitte toujours l’atome sans émettre d’énergie", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quelle information donne principalement un spectre d’émission atomique ?",
                        'explanation' => "Les raies d’émission sont caractéristiques des éléments et peuvent donc servir à les identifier, puis à les doser avec une calibration adaptée.",
                        'choices' => [
                            ['choice_text' => "La présence de certains éléments", 'is_correct' => true],
                            ['choice_text' => "Le volume exact du laboratoire", 'is_correct' => false],
                            ['choice_text' => "Le pH de tous les liquides sans mesure", 'is_correct' => false],
                            ['choice_text' => "La vitesse d’agitation", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Pourquoi deux éléments différents peuvent-ils être distingués par leurs raies spectrales ?",
                        'explanation' => "Chaque élément possède une structure électronique particulière et donc un ensemble caractéristique de transitions énergétiques.",
                        'choices' => [
                            ['choice_text' => "Leurs structures électroniques produisent des transitions différentes", 'is_correct' => true],
                            ['choice_text' => "Tous les éléments ont exactement les mêmes niveaux d’énergie", 'is_correct' => false],
                            ['choice_text' => "La température du laboratoire donne directement l’élément", 'is_correct' => false],
                            ['choice_text' => "La masse du bécher crée les raies", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "En absorption atomique, que mesure-t-on de manière générale ?",
                        'explanation' => "En absorption atomique, les atomes de l’échantillon absorbent certaines longueurs d’onde spécifiques. L’intensité de cette absorption permet de déterminer la quantité de l’élément après étalonnage.",
                        'choices' => [
                            ['choice_text' => "L’absorption de longueurs d’onde caractéristiques par les atomes", 'is_correct' => true],
                            ['choice_text' => "La chaleur dégagée par une combustion", 'is_correct' => false],
                            ['choice_text' => "Le volume de gaz uniquement", 'is_correct' => false],
                            ['choice_text' => "La masse du solvant seul", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Pourquoi une source lumineuse adaptée à l’élément analysé est-elle importante en absorption atomique ?",
                        'explanation' => "La source doit émettre les longueurs d’onde que l’élément peut absorber. On obtient ainsi un signal sélectif et exploitable.",
                        'choices' => [
                            ['choice_text' => "Pour fournir les longueurs d’onde correspondant aux transitions de l’élément", 'is_correct' => true],
                            ['choice_text' => "Pour augmenter la masse de l’échantillon", 'is_correct' => false],
                            ['choice_text' => "Pour faire varier automatiquement le pH", 'is_correct' => false],
                            ['choice_text' => "Pour remplacer toute calibration", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Un signal d’émission plus intense signifie-t-il toujours que la concentration est exactement deux fois plus grande ?",
                        'explanation' => "Pas nécessairement. La relation entre signal et concentration dépend de la méthode, de la gamme de travail et de l’étalonnage expérimental.",
                        'choices' => [
                            ['choice_text' => "Non, il faut utiliser la relation d’étalonnage de la méthode", 'is_correct' => true],
                            ['choice_text' => "Oui, toujours et dans tous les appareils", 'is_correct' => false],
                            ['choice_text' => "Oui, sans tenir compte des conditions expérimentales", 'is_correct' => false],
                            ['choice_text' => "Non, le signal n’a jamais de lien avec la concentration", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Pourquoi transforme-t-on souvent un échantillon en atomes libres avant une analyse atomique ?",
                        'explanation' => "Les techniques atomiques mesurent les transitions des atomes libres. La mise en phase gazeuse et l’atomisation permettent donc d’obtenir les espèces recherchées.",
                        'choices' => [
                            ['choice_text' => "Pour obtenir des atomes capables d’absorber ou d’émettre aux longueurs d’onde caractéristiques", 'is_correct' => true],
                            ['choice_text' => "Pour détruire toute information chimique", 'is_correct' => false],
                            ['choice_text' => "Pour refroidir l’échantillon jusqu’à zéro", 'is_correct' => false],
                            ['choice_text' => "Pour augmenter volontairement la masse atomique", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Une raie d’absorption très nette à une longueur d’onde connue peut être utile pour…",
                        'explanation' => "Une raie caractéristique sert à cibler un élément précis. Après calibration, l’intensité du signal peut être utilisée pour déterminer sa concentration.",
                        'choices' => [
                            ['choice_text' => "identifier puis doser l’élément concerné", 'is_correct' => true],
                            ['choice_text' => "déterminer directement le point de fusion du bécher", 'is_correct' => false],
                            ['choice_text' => "mesurer automatiquement le pH sans étalonnage", 'is_correct' => false],
                            ['choice_text' => "remplacer la préparation de l’échantillon", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quelle erreur simple peut perturber une analyse atomique si l’échantillon n’est pas préparé correctement ?",
                        'explanation' => "Une mauvaise dilution, des particules ou des interférences de matrice peuvent modifier le signal. La préparation et l’étalonnage sont donc essentiels.",
                        'choices' => [
                            ['choice_text' => "Une concentration mal préparée ou une matrice perturbatrice", 'is_correct' => true],
                            ['choice_text' => "La couleur du cahier de laboratoire", 'is_correct' => false],
                            ['choice_text' => "Le nombre de stylos sur la paillasse", 'is_correct' => false],
                            ['choice_text' => "La forme du logo de l’appareil", 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => "Fluorescence et phosphorescence",
                'description' => "Différencier fluorescence et phosphorescence et comprendre les bases des phénomènes photoluminescents.",
                'questions' => [
                    [
                        'question' => "Que se passe-t-il lors d’une fluorescence ?",
                        'explanation' => "Après excitation, la molécule revient rapidement vers un état d’énergie plus bas en émettant de la lumière. L’émission cesse généralement peu après l’arrêt de l’excitation.",
                        'choices' => [
                            ['choice_text' => "La molécule émet rapidement de la lumière après excitation", 'is_correct' => true],
                            ['choice_text' => "La molécule devient toujours radioactive", 'is_correct' => false],
                            ['choice_text' => "La molécule change obligatoirement de formule brute", 'is_correct' => false],
                            ['choice_text' => "La fluorescence ne nécessite aucune excitation", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quelle différence simple distingue la phosphorescence de la fluorescence ?",
                        'explanation' => "La phosphorescence peut persister après l’arrêt de l’excitation. Elle implique généralement des transitions plus lentes que celles de la fluorescence.",
                        'choices' => [
                            ['choice_text' => "La phosphorescence peut continuer après l’arrêt de l’excitation", 'is_correct' => true],
                            ['choice_text' => "La fluorescence continue toujours pendant plusieurs heures", 'is_correct' => false],
                            ['choice_text' => "La phosphorescence n’implique jamais de lumière", 'is_correct' => false],
                            ['choice_text' => "Les deux phénomènes sont exactement identiques", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Pourquoi une molécule fluorescente peut-elle être détectée à faible concentration ?",
                        'explanation' => "La fluorescence peut fournir un signal émis directement par les molécules, souvent mesuré avec une bonne sensibilité dans des conditions adaptées.",
                        'choices' => [
                            ['choice_text' => "Parce que le signal émis peut être très sensible", 'is_correct' => true],
                            ['choice_text' => "Parce qu’elle n’absorbe jamais de lumière", 'is_correct' => false],
                            ['choice_text' => "Parce que toutes les molécules sont fluorescentes", 'is_correct' => false],
                            ['choice_text' => "Parce que la concentration n’influence jamais le signal", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Que doit généralement faire une molécule pour fluorescer ?",
                        'explanation' => "Elle doit pouvoir absorber une énergie d’excitation puis réémettre une partie de cette énergie sous forme de lumière à une longueur d’onde différente.",
                        'choices' => [
                            ['choice_text' => "Absorber de l’énergie puis réémettre une partie sous forme de lumière", 'is_correct' => true],
                            ['choice_text' => "Perdre instantanément tous ses électrons", 'is_correct' => false],
                            ['choice_text' => "Se transformer obligatoirement en ion métallique", 'is_correct' => false],
                            ['choice_text' => "Être toujours un gaz", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Pourquoi la lumière de fluorescence a-t-elle souvent une longueur d’onde plus grande que celle d’excitation ?",
                        'explanation' => "Une partie de l’énergie absorbée est perdue par des processus non radiatifs avant l’émission. Le photon émis possède donc souvent moins d’énergie et une longueur d’onde plus grande.",
                        'choices' => [
                            ['choice_text' => "Parce qu’une partie de l’énergie est perdue avant l’émission", 'is_correct' => true],
                            ['choice_text' => "Parce que la lumière émise doit toujours être ultraviolette", 'is_correct' => false],
                            ['choice_text' => "Parce que l’énergie augmente après excitation", 'is_correct' => false],
                            ['choice_text' => "Parce que le détecteur étire les molécules", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quel type d’échantillon peut être étudié par fluorescence ?",
                        'explanation' => "Des molécules naturellement fluorescentes ou rendues fluorescentes par marquage peuvent être étudiées avec cette méthode.",
                        'choices' => [
                            ['choice_text' => "Des molécules fluorescentes ou marquées avec un fluorophore", 'is_correct' => true],
                            ['choice_text' => "Uniquement les métaux solides", 'is_correct' => false],
                            ['choice_text' => "Uniquement les gaz nobles", 'is_correct' => false],
                            ['choice_text' => "Uniquement l’eau pure", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Une solution fluorescente devient beaucoup moins lumineuse lorsque sa concentration devient très élevée. Quelle explication simple est plausible ?",
                        'explanation' => "À forte concentration, des effets comme l’auto-absorption ou l’extinction peuvent réduire l’intensité observée. La relation n’est donc pas toujours linéaire à toutes les concentrations.",
                        'choices' => [
                            ['choice_text' => "Des phénomènes d’auto-absorption ou d’extinction peuvent apparaître", 'is_correct' => true],
                            ['choice_text' => "La molécule perd toujours son identité chimique", 'is_correct' => false],
                            ['choice_text' => "La fluorescence ne dépend jamais de la concentration", 'is_correct' => false],
                            ['choice_text' => "Le solvant devient forcément fluorescent", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Pourquoi l’environnement chimique peut-il modifier une fluorescence ?",
                        'explanation' => "Le pH, la polarité du solvant, les interactions avec d’autres molécules ou la température peuvent modifier les états électroniques et donc l’émission.",
                        'choices' => [
                            ['choice_text' => "Parce que l’environnement peut modifier les états électroniques et les voies de désactivation", 'is_correct' => true],
                            ['choice_text' => "Parce que le pH change toujours la masse du noyau", 'is_correct' => false],
                            ['choice_text' => "Parce que la fluorescence est totalement indépendante du milieu", 'is_correct' => false],
                            ['choice_text' => "Parce que le solvant détruit toujours le fluorophore", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Dans une expérience de fluorescence, pourquoi faut-il souvent limiter la lumière parasite ?",
                        'explanation' => "Le signal fluorescent peut être faible. Une lumière parasite trop importante augmente le bruit de fond et rend le signal plus difficile à mesurer correctement.",
                        'choices' => [
                            ['choice_text' => "Pour améliorer le rapport entre le signal mesuré et le bruit de fond", 'is_correct' => true],
                            ['choice_text' => "Pour changer la formule brute du fluorophore", 'is_correct' => false],
                            ['choice_text' => "Pour faire bouillir le solvant", 'is_correct' => false],
                            ['choice_text' => "Pour supprimer la concentration", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quel énoncé est correct concernant la fluorescence et la température ?",
                        'explanation' => "Une augmentation de température peut favoriser certaines collisions et désactivations non radiatives, ce qui réduit souvent la fluorescence, même si l’effet exact dépend du système.",
                        'choices' => [
                            ['choice_text' => "La température peut modifier l’intensité de fluorescence", 'is_correct' => true],
                            ['choice_text' => "La température n’a jamais aucun effet", 'is_correct' => false],
                            ['choice_text' => "La température transforme toujours la fluorescence en radioactivité", 'is_correct' => false],
                            ['choice_text' => "La température fixe toujours l’intensité à 100 %", 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => "Interpréter un spectre et éviter les erreurs",
                'description' => "Apprendre à lire un spectre avec méthode, distinguer signal utile et artefacts, et éviter les conclusions trop rapides.",
                'questions' => [
                    [
                        'question' => "Avant d’identifier un composé à partir d’un spectre, quelle bonne habitude faut-il avoir ?",
                        'explanation' => "Il est préférable d’examiner l’ensemble du spectre et de croiser plusieurs indices plutôt que de conclure à partir d’un seul pic.",
                        'choices' => [
                            ['choice_text' => "Regarder plusieurs caractéristiques du spectre avant de conclure", 'is_correct' => true],
                            ['choice_text' => "Choisir le premier pic rencontré", 'is_correct' => false],
                            ['choice_text' => "Ignorer les conditions de mesure", 'is_correct' => false],
                            ['choice_text' => "Supposer que tous les spectres sont identiques", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Un spectre présente une bande supplémentaire qui n’apparaît pas dans la référence du composé pur. Quelle cause faut-il envisager en premier ?",
                        'explanation' => "Une bande supplémentaire peut venir d’une impureté, du solvant, de l’humidité ou d’un problème de préparation. Il faut vérifier la méthode avant de modifier l’identification.",
                        'choices' => [
                            ['choice_text' => "Une impureté ou un signal provenant de la préparation", 'is_correct' => true],
                            ['choice_text' => "Un changement obligatoire du numéro atomique", 'is_correct' => false],
                            ['choice_text' => "La disparition du détecteur", 'is_correct' => false],
                            ['choice_text' => "Une masse molaire devenue négative", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Pourquoi faut-il connaître le solvant utilisé lors d’une analyse spectroscopique ?",
                        'explanation' => "Le solvant peut lui-même absorber ou émettre dans certaines régions du spectre. Le connaître permet donc d’éviter de lui attribuer à tort un signal de l’échantillon.",
                        'choices' => [
                            ['choice_text' => "Parce que le solvant peut contribuer au signal observé", 'is_correct' => true],
                            ['choice_text' => "Parce que le solvant fixe toujours la masse molaire du soluté", 'is_correct' => false],
                            ['choice_text' => "Parce que le solvant empêche toute mesure quantitative", 'is_correct' => false],
                            ['choice_text' => "Parce que le solvant doit toujours être fluorescent", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Un appareil donne un spectre très bruité. Quelle action est la plus raisonnable avant d’interpréter finement les petits pics ?",
                        'explanation' => "Avant de tirer une conclusion, il faut vérifier le signal, le blanc, la préparation, le temps d’intégration et les conditions instrumentales afin de distinguer le vrai signal du bruit.",
                        'choices' => [
                            ['choice_text' => "Vérifier la qualité de la mesure et les conditions expérimentales", 'is_correct' => true],
                            ['choice_text' => "Inventer un nouveau composé correspondant à chaque petit pic", 'is_correct' => false],
                            ['choice_text' => "Ignorer complètement le bruit", 'is_correct' => false],
                            ['choice_text' => "Changer la formule brute du solvant", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Pourquoi fait-on parfois plusieurs mesures du même échantillon ?",
                        'explanation' => "Les répétitions permettent d’évaluer la reproductibilité et de repérer une mesure aberrante. Elles donnent davantage confiance dans le résultat obtenu.",
                        'choices' => [
                            ['choice_text' => "Pour vérifier la répétabilité de la mesure", 'is_correct' => true],
                            ['choice_text' => "Pour changer progressivement l’identité du composé", 'is_correct' => false],
                            ['choice_text' => "Pour rendre le spectre automatiquement parfait", 'is_correct' => false],
                            ['choice_text' => "Pour éviter toute calibration", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Une droite d’étalonnage n’est plus linéaire aux fortes concentrations. Que peut-on faire dans un dosage UV-visible ?",
                        'explanation' => "On peut diluer l’échantillon pour le ramener dans la zone de validité de la calibration. Il faut ensuite tenir compte du facteur de dilution.",
                        'choices' => [
                            ['choice_text' => "Diluer l’échantillon et appliquer correctement le facteur de dilution", 'is_correct' => true],
                            ['choice_text' => "Multiplier arbitrairement l’absorbance par dix", 'is_correct' => false],
                            ['choice_text' => "Changer la substance analysée", 'is_correct' => false],
                            ['choice_text' => "Ignorer la non-linéarité", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Pourquoi une référence connue est-elle utile pour identifier un spectre ?",
                        'explanation' => "Comparer le spectre de l’échantillon à celui d’une référence permet de vérifier la position et le profil des signaux au lieu de se baser uniquement sur un souvenir ou une valeur isolée.",
                        'choices' => [
                            ['choice_text' => "Elle permet de comparer les caractéristiques spectrales observées", 'is_correct' => true],
                            ['choice_text' => "Elle remplace toujours la préparation de l’échantillon", 'is_correct' => false],
                            ['choice_text' => "Elle rend tous les spectres identiques", 'is_correct' => false],
                            ['choice_text' => "Elle fixe la concentration sans mesure", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Un étudiant voit deux pics proches et affirme qu’ils correspondent forcément à deux substances différentes. Pourquoi faut-il être prudent ?",
                        'explanation' => "Deux pics peuvent correspondre à deux transitions d’une même molécule, à deux conformations, à des isotopes ou à deux espèces différentes. Le contexte de la méthode est indispensable.",
                        'choices' => [
                            ['choice_text' => "Parce qu’un même composé peut produire plusieurs signaux", 'is_correct' => true],
                            ['choice_text' => "Parce qu’un spectre ne peut contenir qu’un seul pic", 'is_correct' => false],
                            ['choice_text' => "Parce que tous les pics proviennent obligatoirement du solvant", 'is_correct' => false],
                            ['choice_text' => "Parce que les détecteurs ne mesurent jamais plus d’un signal", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quelle information est particulièrement importante lorsqu’on compare deux spectres enregistrés à des moments différents ?",
                        'explanation' => "Les conditions d’acquisition, la préparation, l’appareil, la concentration et le traitement du signal peuvent changer le résultat. Une comparaison fiable demande des conditions compatibles.",
                        'choices' => [
                            ['choice_text' => "Les conditions de mesure et de préparation", 'is_correct' => true],
                            ['choice_text' => "La météo extérieure uniquement", 'is_correct' => false],
                            ['choice_text' => "La couleur des cahiers de laboratoire", 'is_correct' => false],
                            ['choice_text' => "Le nombre de personnes dans la salle", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quel réflexe aide le plus à éviter une surinterprétation d’un spectre ?",
                        'explanation' => "Une conclusion solide repose sur plusieurs indices cohérents et, lorsque c’est possible, sur une comparaison avec des données de référence ou une autre méthode analytique.",
                        'choices' => [
                            ['choice_text' => "Croiser plusieurs indices avant de conclure", 'is_correct' => true],
                            ['choice_text' => "Se fier à un seul pic sans contexte", 'is_correct' => false],
                            ['choice_text' => "Ignorer le blanc et le solvant", 'is_correct' => false],
                            ['choice_text' => "Supposer que toute bande inconnue est une impureté", 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => "Applications pratiques de la spectroscopie",
                'description' => "Relier différentes techniques spectroscopiques à des situations réelles de laboratoire, d’industrie et de contrôle qualité.",
                'questions' => [
                    [
                        'question' => "Un laboratoire doit vérifier rapidement la concentration d’un colorant dissous. Quelle technique simple peut convenir ?",
                        'explanation' => "Si le colorant absorbe dans l’UV-visible et que les conditions sont adaptées, un dosage spectrophotométrique peut relier l’absorbance à la concentration.",
                        'choices' => [
                            ['choice_text' => "La spectrophotométrie UV-visible", 'is_correct' => true],
                            ['choice_text' => "Une simple observation au microscope sans mesure spectrale", 'is_correct' => false],
                            ['choice_text' => "Une chromatographie obligatoire dans tous les cas", 'is_correct' => false],
                            ['choice_text' => "Une pesée du bécher seul", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Une entreprise veut vérifier rapidement la présence d’un groupe carbonyle dans une matière première organique. Quelle méthode est particulièrement adaptée ?",
                        'explanation' => "La spectroscopie IR permet de rechercher les vibrations caractéristiques des groupes fonctionnels, dont la liaison C=O.",
                        'choices' => [
                            ['choice_text' => "La spectroscopie infrarouge", 'is_correct' => true],
                            ['choice_text' => "La mesure de densité uniquement", 'is_correct' => false],
                            ['choice_text' => "Un test de couleur sans aucune référence", 'is_correct' => false],
                            ['choice_text' => "Une simple filtration", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Pour identifier rapidement un matériau solide sans le détruire fortement, quelle technique peut être intéressante ?",
                        'explanation' => "Raman est souvent adapté à l’analyse de solides avec une préparation limitée et peut fournir une signature spectrale du matériau.",
                        'choices' => [
                            ['choice_text' => "La spectroscopie Raman", 'is_correct' => true],
                            ['choice_text' => "Une combustion systématique", 'is_correct' => false],
                            ['choice_text' => "Une titration qui consomme tout l’échantillon", 'is_correct' => false],
                            ['choice_text' => "Une mesure de masse uniquement", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Pour rechercher la présence d’un métal à faible concentration dans un échantillon aqueux, quelle approche peut convenir ?",
                        'explanation' => "Les méthodes de spectroscopie atomique, comme l’absorption atomique selon le métal et la matrice, sont couramment utilisées pour doser des éléments.",
                        'choices' => [
                            ['choice_text' => "Une méthode de spectroscopie atomique adaptée à l’élément", 'is_correct' => true],
                            ['choice_text' => "Une observation à l’œil nu uniquement", 'is_correct' => false],
                            ['choice_text' => "Une mesure du volume du flacon", 'is_correct' => false],
                            ['choice_text' => "Une simple agitation", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Une substance est connue pour être fluorescente. Quel avantage peut offrir une méthode fluorimétrique ?",
                        'explanation' => "La fluorescence peut permettre une détection très sensible, notamment lorsque le signal fluorescent est bien séparé du fond.",
                        'choices' => [
                            ['choice_text' => "Une bonne sensibilité pour de faibles concentrations", 'is_correct' => true],
                            ['choice_text' => "La suppression de toute interférence possible", 'is_correct' => false],
                            ['choice_text' => "L’absence totale de calibration", 'is_correct' => false],
                            ['choice_text' => "La mesure directe de la masse molaire sans modèle", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Pourquoi un analyste peut-il utiliser deux techniques spectroscopiques sur le même produit ?",
                        'explanation' => "Les techniques donnent des informations différentes et complémentaires. Les combiner peut renforcer l’identification ou aider à résoudre une ambiguïté.",
                        'choices' => [
                            ['choice_text' => "Pour obtenir des informations complémentaires", 'is_correct' => true],
                            ['choice_text' => "Parce qu’une seule technique est toujours inutile", 'is_correct' => false],
                            ['choice_text' => "Pour changer la composition de l’échantillon", 'is_correct' => false],
                            ['choice_text' => "Pour éviter de faire une calibration", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Dans le contrôle qualité d’un médicament, pourquoi une signature spectrale de référence est-elle utile ?",
                        'explanation' => "Une référence permet de comparer le produit analysé à un profil attendu et de repérer une différence pouvant signaler une mauvaise matière première ou une contamination.",
                        'choices' => [
                            ['choice_text' => "Pour vérifier que le profil du produit correspond au profil attendu", 'is_correct' => true],
                            ['choice_text' => "Pour garantir automatiquement l’absence de toute erreur de fabrication", 'is_correct' => false],
                            ['choice_text' => "Pour remplacer toutes les autres vérifications réglementaires", 'is_correct' => false],
                            ['choice_text' => "Pour déterminer la masse du comprimé sans balance", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Un analyste obtient un résultat inattendu. Quelle approche est la plus raisonnable ?",
                        'explanation' => "Il faut d’abord vérifier la préparation, le blanc, l’étalonnage, l’instrument et les conditions expérimentales avant d’inventer une explication chimique.",
                        'choices' => [
                            ['choice_text' => "Vérifier d’abord la qualité de la mesure et de la préparation", 'is_correct' => true],
                            ['choice_text' => "Changer immédiatement la formule du composé", 'is_correct' => false],
                            ['choice_text' => "Ignorer le résultat", 'is_correct' => false],
                            ['choice_text' => "Conclure immédiatement à une nouvelle substance", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Pourquoi la spectroscopie est-elle largement utilisée en recherche et en industrie ?",
                        'explanation' => "Elle peut fournir rapidement des informations sur l’identité, la structure, la concentration ou l’environnement chimique des espèces étudiées.",
                        'choices' => [
                            ['choice_text' => "Parce qu’elle fournit des informations chimiques utiles de façon souvent rapide", 'is_correct' => true],
                            ['choice_text' => "Parce qu’elle ne demande jamais de préparation ni d’étalonnage", 'is_correct' => false],
                            ['choice_text' => "Parce qu’elle remplace toutes les autres analyses", 'is_correct' => false],
                            ['choice_text' => "Parce qu’elle mesure uniquement la masse", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Dans un laboratoire pédagogique, quelle attitude est importante lors d’une analyse spectroscopique ?",
                        'explanation' => "Il faut respecter les consignes de sécurité, utiliser correctement l’appareil, noter les conditions de mesure et interpréter les résultats avec prudence.",
                        'choices' => [
                            ['choice_text' => "Respecter la sécurité, documenter les conditions et vérifier l’interprétation", 'is_correct' => true],
                            ['choice_text' => "Changer les réglages au hasard", 'is_correct' => false],
                            ['choice_text' => "Ne pas noter la longueur d’onde utilisée", 'is_correct' => false],
                            ['choice_text' => "Regarder directement un laser pour vérifier son fonctionnement", 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => "Révision générale de spectroscopie",
                'description' => "Revoir les notions essentielles de spectroscopie UV-visible, IR, Raman, atomique et fluorescence.",
                'questions' => [
                    [
                        'question' => "Quelle technique est particulièrement adaptée à la recherche de groupes fonctionnels comme O–H ou C=O ?",
                        'explanation' => "La spectroscopie infrarouge relie les bandes observées aux vibrations des liaisons et permet donc de reconnaître de nombreux groupes fonctionnels.",
                        'choices' => [
                            ['choice_text' => "La spectroscopie infrarouge", 'is_correct' => true],
                            ['choice_text' => "La spectroscopie atomique uniquement", 'is_correct' => false],
                            ['choice_text' => "Une balance analytique", 'is_correct' => false],
                            ['choice_text' => "Une simple mesure de température", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quelle technique relie facilement l’absorbance d’une solution à sa concentration dans une gamme adaptée ?",
                        'explanation' => "La spectrophotométrie UV-visible utilise souvent la loi de Beer-Lambert ou une droite d’étalonnage pour relier le signal à la concentration.",
                        'choices' => [
                            ['choice_text' => "La spectrophotométrie UV-visible", 'is_correct' => true],
                            ['choice_text' => "La spectroscopie Raman uniquement", 'is_correct' => false],
                            ['choice_text' => "La spectroscopie IR sans mesure d’absorbance", 'is_correct' => false],
                            ['choice_text' => "La mesure du volume du récipient", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quelle caractéristique rend les raies atomiques utiles pour identifier un élément ?",
                        'explanation' => "Les niveaux électroniques des atomes produisent des transitions à des énergies caractéristiques de chaque élément.",
                        'choices' => [
                            ['choice_text' => "Leur position spectrale est caractéristique de l’élément", 'is_correct' => true],
                            ['choice_text' => "Toutes les raies ont exactement la même position", 'is_correct' => false],
                            ['choice_text' => "Elles dépendent uniquement de la couleur du flacon", 'is_correct' => false],
                            ['choice_text' => "Elles sont identiques pour tous les éléments", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quel phénomène peut fournir un signal très sensible pour une molécule fluorescente ?",
                        'explanation' => "La fluorescence correspond à une émission de lumière après excitation. Dans des conditions adaptées, ce signal peut être détecté à très faible concentration.",
                        'choices' => [
                            ['choice_text' => "L’émission de fluorescence", 'is_correct' => true],
                            ['choice_text' => "La précipitation seule", 'is_correct' => false],
                            ['choice_text' => "La fusion du verre", 'is_correct' => false],
                            ['choice_text' => "La mesure de la masse du bouchon", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quel énoncé décrit correctement Raman ?",
                        'explanation' => "Raman mesure la lumière diffusée de manière inélastique et donne des informations vibrationnelles complémentaires de celles de l’IR.",
                        'choices' => [
                            ['choice_text' => "Il étudie une diffusion inélastique de la lumière", 'is_correct' => true],
                            ['choice_text' => "Il mesure uniquement le pH", 'is_correct' => false],
                            ['choice_text' => "Il exige toujours la destruction complète de l’échantillon", 'is_correct' => false],
                            ['choice_text' => "Il ne fournit aucune information moléculaire", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Dans un dosage UV-visible, pourquoi une calibration est-elle importante ?",
                        'explanation' => "La calibration établit la relation entre le signal mesuré et la concentration dans les conditions de la méthode.",
                        'choices' => [
                            ['choice_text' => "Pour relier quantitativement le signal à la concentration", 'is_correct' => true],
                            ['choice_text' => "Pour rendre toutes les longueurs d’onde identiques", 'is_correct' => false],
                            ['choice_text' => "Pour supprimer toute absorption du soluté", 'is_correct' => false],
                            ['choice_text' => "Pour changer la loi de Beer-Lambert", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Un étudiant veut identifier une molécule en regardant uniquement un seul pic. Quel conseil est le plus pertinent ?",
                        'explanation' => "Un seul pic peut être partagé par plusieurs composés ou groupes. Il vaut mieux comparer plusieurs bandes et utiliser le contexte de l’échantillon.",
                        'choices' => [
                            ['choice_text' => "Comparer plusieurs signaux et utiliser le contexte", 'is_correct' => true],
                            ['choice_text' => "Conclure immédiatement", 'is_correct' => false],
                            ['choice_text' => "Ignorer toutes les autres bandes", 'is_correct' => false],
                            ['choice_text' => "Changer de solvant sans raison", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Si une mesure spectroscopique est mauvaise à cause d’une concentration trop élevée, quelle solution simple est souvent utilisée ?",
                        'explanation' => "La dilution permet de ramener l’échantillon dans une plage où le signal reste mesurable et où la relation avec la concentration est mieux respectée.",
                        'choices' => [
                            ['choice_text' => "Diluer l’échantillon correctement", 'is_correct' => true],
                            ['choice_text' => "Multiplier l’absorbance au hasard", 'is_correct' => false],
                            ['choice_text' => "Supprimer la calibration", 'is_correct' => false],
                            ['choice_text' => "Ajouter n’importe quel produit", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quel rôle joue le blanc dans une mesure spectrophotométrique ?",
                        'explanation' => "Le blanc sert à corriger la contribution du solvant, de la cuve et du système instrumental afin de mieux isoler le signal de l’échantillon.",
                        'choices' => [
                            ['choice_text' => "Il corrige le signal de fond du système de mesure", 'is_correct' => true],
                            ['choice_text' => "Il ajoute toujours du soluté", 'is_correct' => false],
                            ['choice_text' => "Il change la longueur d’onde de l’échantillon", 'is_correct' => false],
                            ['choice_text' => "Il remplace l’étalonnage", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quelle attitude résume une bonne pratique en spectroscopie ?",
                        'explanation' => "Une bonne analyse associe une préparation correcte, des mesures contrôlées, une calibration quand nécessaire et une interprétation basée sur plusieurs indices.",
                        'choices' => [
                            ['choice_text' => "Mesurer soigneusement, vérifier les références et interpréter avec plusieurs indices", 'is_correct' => true],
                            ['choice_text' => "Se fier uniquement à la couleur de l’échantillon", 'is_correct' => false],
                            ['choice_text' => "Changer les réglages sans noter les conditions", 'is_correct' => false],
                            ['choice_text' => "Conclure à partir d’un seul chiffre isolé", 'is_correct' => false],
                        ],
                    ],
                ],
            ],
        ];

        foreach ($quizzes as $index => $quizData) {
            $settings = $quizSettings[$index] ?? ['duration' => 20, 'passing_score' => 60];

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
