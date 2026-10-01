<?php

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class EvolutionBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'evolution')->firstOrFail();

        $quizzes = [
            [
                'title' => 'Bases de l’évolution biologique',
                'description' => 'Comprendre les notions d’évolution, de variation et de descendance avec modification.',
                'settings' => ['duration' => 15, 'passing_score' => 50],
                'questions' => [
                    [
                        'question' => 'En biologie, l’évolution correspond principalement à :',
                        'choices' => [
                            ['choice_text' => 'aux changements héréditaires des populations au cours des générations', 'is_correct' => true],
                            ['choice_text' => 'à la croissance d’un individu pendant son enfance', 'is_correct' => false],
                            ['choice_text' => 'à une transformation volontaire d’un organisme pendant sa vie', 'is_correct' => false],
                            ['choice_text' => 'à un changement du climat uniquement', 'is_correct' => false],
                        ],
                        'explanation' => 'L’évolution concerne les changements héréditaires au niveau des populations au fil des générations.',
                    ],
                    [
                        'question' => 'La variation génétique d’une population fournit la matière première de l’évolution parce qu’elle :',
                        'choices' => [
                            ['choice_text' => 'offre des différences héréditaires sur lesquelles peuvent agir différents mécanismes évolutifs', 'is_correct' => true],
                            ['choice_text' => 'empêche toute reproduction', 'is_correct' => false],
                            ['choice_text' => 'rend tous les individus identiques', 'is_correct' => false],
                            ['choice_text' => 'supprime les mutations', 'is_correct' => false],
                        ],
                        'explanation' => 'La diversité génétique permet l’existence de différences transmissibles qui peuvent modifier les fréquences alléliques au cours du temps.',
                    ],
                    [
                        'question' => 'Un caractère transmis des parents à la descendance est dit :',
                        'choices' => [
                            ['choice_text' => 'héréditaire', 'is_correct' => true],
                            ['choice_text' => 'abiotique', 'is_correct' => false],
                            ['choice_text' => 'acquis par définition', 'is_correct' => false],
                            ['choice_text' => 'géologique', 'is_correct' => false],
                        ],
                        'explanation' => 'Un caractère héréditaire dépend d’une information génétique transmissible à la descendance.',
                    ],
                    [
                        'question' => 'Une adaptation biologique est mieux décrite comme :',
                        'choices' => [
                            ['choice_text' => 'un caractère héréditaire qui améliore la survie ou la reproduction dans un environnement donné', 'is_correct' => true],
                            ['choice_text' => 'un effort volontaire d’un individu pour survivre', 'is_correct' => false],
                            ['choice_text' => 'un changement temporaire sans base héréditaire', 'is_correct' => false],
                            ['choice_text' => 'une caractéristique identique dans tous les milieux', 'is_correct' => false],
                        ],
                        'explanation' => 'Une adaptation est une caractéristique héritée qui augmente la réussite biologique dans un contexte environnemental donné.',
                    ],
                    [
                        'question' => 'Pourquoi deux individus d’une même espèce peuvent-ils avoir des caractères différents ?',
                        'choices' => [
                            ['choice_text' => 'à cause notamment de différences génétiques et de l’environnement', 'is_correct' => true],
                            ['choice_text' => 'parce qu’ils appartiennent nécessairement à deux espèces différentes', 'is_correct' => false],
                            ['choice_text' => 'parce que leur ADN est toujours entièrement différent', 'is_correct' => false],
                            ['choice_text' => 'uniquement à cause de la température', 'is_correct' => false],
                        ],
                        'explanation' => 'Les différences observées entre individus peuvent avoir des origines génétiques, environnementales ou une combinaison des deux.',
                    ],
                    [
                        'question' => 'Une fréquence allélique est :',
                        'choices' => [
                            ['choice_text' => 'la proportion d’un allèle parmi les allèles d’un gène dans une population', 'is_correct' => true],
                            ['choice_text' => 'le nombre d’espèces dans un habitat', 'is_correct' => false],
                            ['choice_text' => 'le nombre d’individus d’un écosystème', 'is_correct' => false],
                            ['choice_text' => 'la fréquence des naissances chez une seule personne', 'is_correct' => false],
                        ],
                        'explanation' => 'La fréquence allélique mesure la proportion relative d’un allèle dans la population.',
                    ],
                    [
                        'question' => 'Une population peut évoluer même si aucun individu ne change génétiquement pendant sa vie parce que :',
                        'choices' => [
                            ['choice_text' => 'les fréquences des allèles peuvent changer entre les générations', 'is_correct' => true],
                            ['choice_text' => 'l’évolution concerne uniquement la croissance individuelle', 'is_correct' => false],
                            ['choice_text' => 'les individus acquièrent toujours de nouveaux chromosomes', 'is_correct' => false],
                            ['choice_text' => 'la population reste nécessairement génétiquement identique', 'is_correct' => false],
                        ],
                        'explanation' => 'L’évolution est un phénomène de population et de générations : les fréquences alléliques peuvent changer sans transformation génétique individuelle au cours de la vie.',
                    ],
                    [
                        'question' => 'Le terme « descendance avec modification » souligne que :',
                        'choices' => [
                            ['choice_text' => 'les descendants héritent d’une histoire commune mais peuvent différer de leurs ancêtres', 'is_correct' => true],
                            ['choice_text' => 'toutes les espèces apparaissent identiques', 'is_correct' => false],
                            ['choice_text' => 'les individus ne transmettent aucun caractère', 'is_correct' => false],
                            ['choice_text' => 'l’évolution s’arrête après une génération', 'is_correct' => false],
                        ],
                        'explanation' => 'Les populations descendent de populations ancestrales tout en accumulant des changements héréditaires au fil du temps.',
                    ],
                    [
                        'question' => 'Un changement dans la séquence d’ADN pouvant créer une nouvelle variante génétique est :',
                        'choices' => [
                            ['choice_text' => 'une mutation', 'is_correct' => true],
                            ['choice_text' => 'une population', 'is_correct' => false],
                            ['choice_text' => 'une niche', 'is_correct' => false],
                            ['choice_text' => 'une prédation', 'is_correct' => false],
                        ],
                        'explanation' => 'Une mutation est une modification de la séquence d’ADN et peut produire une nouvelle variante génétique.',
                    ],
                    [
                        'question' => 'À propos de l’évolution, quelle affirmation est correcte ?',
                        'choices' => [
                            ['choice_text' => 'les populations évoluent ; les individus ne « décident » pas d’évoluer', 'is_correct' => true],
                            ['choice_text' => 'un individu change volontairement son ADN pour répondre à un besoin', 'is_correct' => false],
                            ['choice_text' => 'tous les caractères nouveaux sont immédiatement héréditaires', 'is_correct' => false],
                            ['choice_text' => 'l’évolution suit toujours une direction unique', 'is_correct' => false],
                        ],
                        'explanation' => 'L’évolution résulte de changements dans les populations sur plusieurs générations ; elle n’est pas une décision consciente des individus.',
                    ],
                ],
            ],
            [
                'title' => 'Sélection naturelle',
                'description' => 'Identifier les mécanismes de la sélection naturelle à partir de situations simples.',
                'settings' => ['duration' => 20, 'passing_score' => 55],
                'questions' => [
                    [
                        'question' => 'Pour qu’un caractère puisse être favorisé par sélection naturelle, il doit notamment :',
                        'choices' => [
                            ['choice_text' => 'présenter une variation héréditaire associée à une différence de réussite reproductive', 'is_correct' => true],
                            ['choice_text' => 'être acquis uniquement par entraînement', 'is_correct' => false],
                            ['choice_text' => 'être identique chez tous les individus', 'is_correct' => false],
                            ['choice_text' => 'apparaître seulement après la reproduction', 'is_correct' => false],
                        ],
                        'explanation' => 'La sélection naturelle agit sur des variations héréditaires lorsqu’elles influencent la survie ou la reproduction.',
                    ],
                    [
                        'question' => 'Dans une population de coléoptères, les oiseaux repèrent plus facilement les individus clairs sur une écorce sombre. Si les individus sombres laissent plus de descendants, on observe :',
                        'choices' => [
                            ['choice_text' => 'une sélection en faveur de la coloration sombre', 'is_correct' => true],
                            ['choice_text' => 'une mutation dirigée vers la couleur sombre', 'is_correct' => false],
                            ['choice_text' => 'une disparition immédiate de toute variation', 'is_correct' => false],
                            ['choice_text' => 'une sélection naturelle indépendante de l’environnement', 'is_correct' => false],
                        ],
                        'explanation' => 'Le contraste avec le milieu influence la prédation ; si les coléoptères sombres ont davantage de descendants, leur fréquence peut augmenter.',
                    ],
                    [
                        'question' => 'Une bactérie résistante à un antibiotique survit puis se multiplie en présence du médicament. La résistance peut devenir plus fréquente parce que :',
                        'choices' => [
                            ['choice_text' => 'les bactéries résistantes laissent davantage de descendants dans cette condition', 'is_correct' => true],
                            ['choice_text' => 'l’antibiotique transforme toutes les bactéries en espèces différentes', 'is_correct' => false],
                            ['choice_text' => 'les bactéries choisissent consciemment la résistance', 'is_correct' => false],
                            ['choice_text' => 'la résistance est toujours apparue uniquement après exposition', 'is_correct' => false],
                        ],
                        'explanation' => 'La résistance peut préexister grâce à une variation génétique puis être favorisée par la sélection sous traitement.',
                    ],
                    [
                        'question' => 'La sélection naturelle ne crée pas directement une mutation adaptée. Elle :',
                        'choices' => [
                            ['choice_text' => 'modifie la fréquence relative de variantes déjà présentes ou apparues par mutation', 'is_correct' => true],
                            ['choice_text' => 'fabrique volontairement les gènes nécessaires', 'is_correct' => false],
                            ['choice_text' => 'supprime toute variation génétique', 'is_correct' => false],
                            ['choice_text' => 'change le climat pour les organismes', 'is_correct' => false],
                        ],
                        'explanation' => 'Les mutations et recombinaisons produisent de la variation ; la sélection agit ensuite sur cette variation.',
                    ],
                    [
                        'question' => 'Un environnement devient plus froid. Une fourrure plus épaisse, si elle est héréditaire et avantageuse, peut augmenter en fréquence au fil des générations. Cela illustre :',
                        'choices' => [
                            ['choice_text' => 'la sélection naturelle', 'is_correct' => true],
                            ['choice_text' => 'la conversion d’un individu en autre espèce pendant sa vie', 'is_correct' => false],
                            ['choice_text' => 'un changement sans transmission héréditaire', 'is_correct' => false],
                            ['choice_text' => 'la dérive des continents', 'is_correct' => false],
                        ],
                        'explanation' => 'Si l’épaisseur de la fourrure est héréditaire et améliore la reproduction dans le froid, les variantes favorables peuvent devenir plus fréquentes.',
                    ],
                    [
                        'question' => 'Pourquoi dit-on que la sélection naturelle dépend du milieu ?',
                        'choices' => [
                            ['choice_text' => 'Parce qu’un même caractère peut être avantageux dans un milieu et moins avantageux dans un autre', 'is_correct' => true],
                            ['choice_text' => 'Parce que tous les environnements sélectionnent toujours les mêmes caractères', 'is_correct' => false],
                            ['choice_text' => 'Parce que le milieu modifie directement les allèles nécessaires', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’un organisme contrôle les pressions de sélection', 'is_correct' => false],
                        ],
                        'explanation' => 'La valeur sélective d’un caractère dépend du contexte environnemental et des interactions avec les autres organismes.',
                    ],
                    [
                        'question' => 'Si un caractère augmente la survie mais empêche totalement la reproduction, son effet évolutif est probablement :',
                        'choices' => [
                            ['choice_text' => 'limité ou défavorable à sa transmission dans la population', 'is_correct' => true],
                            ['choice_text' => 'toujours fortement favorable', 'is_correct' => false],
                            ['choice_text' => 'indépendant de la reproduction', 'is_correct' => false],
                            ['choice_text' => 'certain de conduire à la fixation', 'is_correct' => false],
                        ],
                        'explanation' => 'Pour qu’un caractère se répande, il doit contribuer à la transmission des variantes associées, directement ou indirectement.',
                    ],
                    [
                        'question' => 'La sélection naturelle favorise les individus ayant une plus grande réussite reproductive. Cette réussite est souvent appelée :',
                        'choices' => [
                            ['choice_text' => 'fitness ou valeur sélective', 'is_correct' => true],
                            ['choice_text' => 'densité absolue', 'is_correct' => false],
                            ['choice_text' => 'niche climatique', 'is_correct' => false],
                            ['choice_text' => 'biomasse minérale', 'is_correct' => false],
                        ],
                        'explanation' => 'La fitness décrit la contribution relative d’un individu ou génotype à la génération suivante dans un contexte donné.',
                    ],
                    [
                        'question' => 'Deux variantes d’un caractère sont équivalentes pour la survie et la reproduction dans un milieu donné. La sélection entre elles sera :',
                        'choices' => [
                            ['choice_text' => 'faible ou absente', 'is_correct' => true],
                            ['choice_text' => 'nécessairement très forte', 'is_correct' => false],
                            ['choice_text' => 'toujours dirigée vers la première', 'is_correct' => false],
                            ['choice_text' => 'toujours dirigée vers la seconde', 'is_correct' => false],
                        ],
                        'explanation' => 'Sans différence de succès reproductif associée aux variantes, la sélection naturelle ne les favorisera pas systématiquement l’une par rapport à l’autre.',
                    ],
                    [
                        'question' => 'Un caractère devenu fréquent parce qu’il augmente la reproduction des porteurs dans un contexte donné est compatible avec :',
                        'choices' => [
                            ['choice_text' => 'une adaptation par sélection naturelle', 'is_correct' => true],
                            ['choice_text' => 'une acquisition volontaire', 'is_correct' => false],
                            ['choice_text' => 'une preuve de transformation individuelle', 'is_correct' => false],
                            ['choice_text' => 'une absence totale de variation', 'is_correct' => false],
                        ],
                        'explanation' => 'Une augmentation héréditaire d’un caractère liée à un avantage de reproduction est compatible avec une adaptation issue de la sélection naturelle.',
                    ],
                ],
            ],
            [
                'title' => 'Dérive génétique et flux de gènes',
                'description' => 'Comprendre le rôle du hasard, des petites populations et des migrations dans l’évolution.',
                'settings' => ['duration' => 20, 'passing_score' => 60],
                'questions' => [
                    [
                        'question' => 'La dérive génétique correspond à :',
                        'choices' => [
                            ['choice_text' => 'des changements aléatoires des fréquences alléliques', 'is_correct' => true],
                            ['choice_text' => 'une sélection toujours dirigée par le milieu', 'is_correct' => false],
                            ['choice_text' => 'la création volontaire de mutations', 'is_correct' => false],
                            ['choice_text' => 'un changement climatique', 'is_correct' => false],
                        ],
                        'explanation' => 'La dérive génétique est due à l’effet du hasard sur la transmission des allèles d’une génération à l’autre.',
                    ],
                    [
                        'question' => 'La dérive génétique a généralement un effet plus important dans :',
                        'choices' => [
                            ['choice_text' => 'les petites populations', 'is_correct' => true],
                            ['choice_text' => 'les populations infiniment grandes', 'is_correct' => false],
                            ['choice_text' => 'les écosystèmes sans organismes', 'is_correct' => false],
                            ['choice_text' => 'les populations sans reproduction', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans une petite population, le hasard de la reproduction peut modifier fortement les fréquences alléliques.',
                    ],
                    [
                        'question' => 'La dérive génétique peut conduire à :',
                        'choices' => [
                            ['choice_text' => 'la fixation ou la disparition aléatoire de certains allèles', 'is_correct' => true],
                            ['choice_text' => 'une adaptation volontaire', 'is_correct' => false],
                            ['choice_text' => 'la disparition automatique des mutations', 'is_correct' => false],
                            ['choice_text' => 'la création d’un nouvel écosystème', 'is_correct' => false],
                        ],
                        'explanation' => 'Au fil des générations, le hasard peut faire devenir un allèle très fréquent, voire le fixer, ou au contraire le faire disparaître.',
                    ],
                    [
                        'question' => 'Une inondation tue par hasard plusieurs individus d’une petite population. Les survivants ne représentent qu’une partie de la diversité initiale. Cette situation rappelle :',
                        'choices' => [
                            ['choice_text' => 'un effet de réduction aléatoire de la diversité', 'is_correct' => true],
                            ['choice_text' => 'une sélection artificielle contrôlée', 'is_correct' => false],
                            ['choice_text' => 'une adaptation instantanée', 'is_correct' => false],
                            ['choice_text' => 'une mutation nécessairement bénéfique', 'is_correct' => false],
                        ],
                        'explanation' => 'Une réduction brutale et aléatoire peut modifier fortement les fréquences alléliques et entraîner une perte de diversité.',
                    ],
                    [
                        'question' => 'L’effet fondateur se produit lorsqu’ :',
                        'choices' => [
                            ['choice_text' => 'une nouvelle population est établie par un petit nombre d’individus', 'is_correct' => true],
                            ['choice_text' => 'une population entière devient identique', 'is_correct' => false],
                            ['choice_text' => 'une espèce disparaît partout dans le monde', 'is_correct' => false],
                            ['choice_text' => 'tous les individus migrent simultanément', 'is_correct' => false],
                        ],
                        'explanation' => 'Le petit groupe fondateur ne contient qu’une partie de la diversité de la population d’origine, ce qui peut modifier les fréquences alléliques.',
                    ],
                    [
                        'question' => 'Le flux de gènes entre deux populations correspond :',
                        'choices' => [
                            ['choice_text' => 'au transfert d’allèles par déplacement et reproduction d’individus ou de gamètes', 'is_correct' => true],
                            ['choice_text' => 'à une extinction locale', 'is_correct' => false],
                            ['choice_text' => 'à une division cellulaire', 'is_correct' => false],
                            ['choice_text' => 'à une modification du climat', 'is_correct' => false],
                        ],
                        'explanation' => 'Le flux de gènes introduit ou exporte des allèles entre populations par migration suivie de reproduction, ou par déplacement de gamètes.',
                    ],
                    [
                        'question' => 'Si des individus migrent régulièrement d’une population A vers une population B et s’y reproduisent, la diversité génétique de B peut :',
                        'choices' => [
                            ['choice_text' => 'recevoir de nouvelles variantes', 'is_correct' => true],
                            ['choice_text' => 'devenir nécessairement nulle', 'is_correct' => false],
                            ['choice_text' => 'cesser toute évolution', 'is_correct' => false],
                            ['choice_text' => 'perdre obligatoirement tous ses allèles', 'is_correct' => false],
                        ],
                        'explanation' => 'Les migrants peuvent introduire des allèles absents ou rares dans la population B.',
                    ],
                    [
                        'question' => 'Une population très isolée de seulement 30 individus peut subir un changement important d’un allèle par hasard lors d’une génération. Le mécanisme le plus probable est :',
                        'choices' => [
                            ['choice_text' => 'la dérive génétique', 'is_correct' => true],
                            ['choice_text' => 'la sélection artificielle', 'is_correct' => false],
                            ['choice_text' => 'la photosynthèse', 'is_correct' => false],
                            ['choice_text' => 'la succession écologique', 'is_correct' => false],
                        ],
                        'explanation' => 'La petite taille de la population renforce l’effet du hasard sur la transmission des allèles.',
                    ],
                    [
                        'question' => 'Une fréquence allélique passe de 0,50 à 0,30 sans avantage connu pour l’un des allèles et dans une très petite population. Une explication possible est :',
                        'choices' => [
                            ['choice_text' => 'la dérive génétique', 'is_correct' => true],
                            ['choice_text' => 'une adaptation certaine', 'is_correct' => false],
                            ['choice_text' => 'une mutation nécessairement massive', 'is_correct' => false],
                            ['choice_text' => 'une compétition entre espèces', 'is_correct' => false],
                        ],
                        'explanation' => 'En l’absence de différence sélective connue, un changement aléatoire dans une petite population peut être dû à la dérive.',
                    ],
                    [
                        'question' => 'Le flux de gènes tend généralement à :',
                        'choices' => [
                            ['choice_text' => 'réduire certaines différences génétiques entre populations connectées', 'is_correct' => true],
                            ['choice_text' => 'augmenter toujours toutes les différences', 'is_correct' => false],
                            ['choice_text' => 'empêcher toute migration', 'is_correct' => false],
                            ['choice_text' => 'créer instantanément une nouvelle espèce', 'is_correct' => false],
                        ],
                        'explanation' => 'L’introduction régulière d’allèles entre populations peut les rendre génétiquement plus semblables.',
                    ],
                ],
            ],
            [
                'title' => 'Mutations, recombinaison et variation',
                'description' => 'Relier mutations et reproduction sexuée à la diversité génétique.',
                'settings' => ['duration' => 20, 'passing_score' => 60],
                'questions' => [
                    [
                        'question' => 'Une mutation est :',
                        'choices' => [
                            ['choice_text' => 'une modification de la séquence d’ADN', 'is_correct' => true],
                            ['choice_text' => 'un changement volontaire du comportement', 'is_correct' => false],
                            ['choice_text' => 'une interaction entre prédateurs', 'is_correct' => false],
                            ['choice_text' => 'une migration saisonnière', 'is_correct' => false],
                        ],
                        'explanation' => 'Une mutation correspond à une modification de la séquence d’ADN.',
                    ],
                    [
                        'question' => 'Quelle mutation peut être transmise à la descendance d’un organisme sexué ?',
                        'choices' => [
                            ['choice_text' => 'une mutation présente dans une lignée cellulaire à l’origine des gamètes', 'is_correct' => true],
                            ['choice_text' => 'une mutation uniquement dans une cellule de peau non reproductrice', 'is_correct' => false],
                            ['choice_text' => 'une cicatrice', 'is_correct' => false],
                            ['choice_text' => 'un apprentissage', 'is_correct' => false],
                        ],
                        'explanation' => 'Pour être transmise à la descendance, une variation doit affecter les cellules germinales ou leurs précurseurs.',
                    ],
                    [
                        'question' => 'La recombinaison génétique pendant la méiose contribue à :',
                        'choices' => [
                            ['choice_text' => 'produire de nouvelles combinaisons d’allèles', 'is_correct' => true],
                            ['choice_text' => 'supprimer toutes les différences entre descendants', 'is_correct' => false],
                            ['choice_text' => 'transformer un chromosome en organe', 'is_correct' => false],
                            ['choice_text' => 'empêcher toute diversité', 'is_correct' => false],
                        ],
                        'explanation' => 'La recombinaison et l’assortiment des chromosomes créent de nombreuses combinaisons génétiques nouvelles.',
                    ],
                    [
                        'question' => 'Deux frères et sœurs peuvent avoir des combinaisons génétiques différentes malgré les mêmes parents parce que :',
                        'choices' => [
                            ['choice_text' => 'la méiose et la fécondation brassent les allèles', 'is_correct' => true],
                            ['choice_text' => 'leurs parents ont nécessairement des espèces différentes', 'is_correct' => false],
                            ['choice_text' => 'leur ADN est créé de zéro après la naissance', 'is_correct' => false],
                            ['choice_text' => 'la sélection naturelle agit avant la conception de façon identique', 'is_correct' => false],
                        ],
                        'explanation' => 'Le brassage génétique rend les combinaisons d’allèles des enfants différentes, sauf cas particuliers comme les jumeaux monozygotes.',
                    ],
                    [
                        'question' => 'Une mutation n’est pas nécessairement défavorable. Elle peut être :',
                        'choices' => [
                            ['choice_text' => 'neutre, défavorable ou avantageuse selon le contexte', 'is_correct' => true],
                            ['choice_text' => 'toujours mortelle', 'is_correct' => false],
                            ['choice_text' => 'toujours avantageuse', 'is_correct' => false],
                            ['choice_text' => 'toujours sans effet sur l’ADN', 'is_correct' => false],
                        ],
                        'explanation' => 'L’effet d’une mutation dépend du changement produit, de l’organisme et de son environnement.',
                    ],
                    [
                        'question' => 'Une mutation modifie une protéine mais n’affecte pas la survie ni la reproduction dans le milieu étudié. Elle peut être considérée comme :',
                        'choices' => [
                            ['choice_text' => 'neutre dans ce contexte', 'is_correct' => true],
                            ['choice_text' => 'toujours délétère', 'is_correct' => false],
                            ['choice_text' => 'toujours adaptative', 'is_correct' => false],
                            ['choice_text' => 'nécessairement létale', 'is_correct' => false],
                        ],
                        'explanation' => 'Une mutation peut être neutre si elle n’a pas d’effet mesurable sur la réussite biologique dans le contexte considéré.',
                    ],
                    [
                        'question' => 'Pourquoi les mutations sont-elles une source fondamentale de variation génétique ?',
                        'choices' => [
                            ['choice_text' => 'Elles peuvent introduire de nouvelles variantes d’ADN', 'is_correct' => true],
                            ['choice_text' => 'Elles empêchent la transmission des gènes', 'is_correct' => false],
                            ['choice_text' => 'Elles réduisent toujours la diversité', 'is_correct' => false],
                            ['choice_text' => 'Elles sont produites uniquement par la sélection', 'is_correct' => false],
                        ],
                        'explanation' => 'Les mutations introduisent de nouvelles variantes génétiques qui peuvent ensuite être influencées par la sélection, la dérive et d’autres mécanismes.',
                    ],
                    [
                        'question' => 'Une recombinaison ne crée pas nécessairement un nouvel allèle, mais elle peut :',
                        'choices' => [
                            ['choice_text' => 'assembler différemment des allèles déjà présents', 'is_correct' => true],
                            ['choice_text' => 'supprimer tous les chromosomes', 'is_correct' => false],
                            ['choice_text' => 'créer un nouvel écosystème', 'is_correct' => false],
                            ['choice_text' => 'modifier le climat', 'is_correct' => false],
                        ],
                        'explanation' => 'La recombinaison réorganise les variantes existantes et contribue ainsi à la diversité des génotypes.',
                    ],
                    [
                        'question' => 'Une mutation présente uniquement dans une cellule musculaire acquise pendant la vie est généralement :',
                        'choices' => [
                            ['choice_text' => 'non transmissible aux enfants', 'is_correct' => true],
                            ['choice_text' => 'toujours héritée par tous les descendants', 'is_correct' => false],
                            ['choice_text' => 'une nouvelle espèce', 'is_correct' => false],
                            ['choice_text' => 'un caractère écologique', 'is_correct' => false],
                        ],
                        'explanation' => 'Une mutation somatique n’est généralement pas transmise à la descendance par les gamètes.',
                    ],
                    [
                        'question' => 'Laquelle est une source de diversité génétique dans une population ?',
                        'choices' => [
                            ['choice_text' => 'mutation et reproduction sexuée', 'is_correct' => true],
                            ['choice_text' => 'uniquement la croissance', 'is_correct' => false],
                            ['choice_text' => 'uniquement la température', 'is_correct' => false],
                            ['choice_text' => 'uniquement la compétition', 'is_correct' => false],
                        ],
                        'explanation' => 'Les mutations créent de nouvelles variantes et la reproduction sexuée produit de nouvelles combinaisons de ces variantes.',
                    ],
                ],
            ],
            [
                'title' => 'Spéciation et isolement reproductif',
                'description' => 'Comprendre comment des populations peuvent diverger jusqu’à former des espèces distinctes.',
                'settings' => ['duration' => 25, 'passing_score' => 65],
                'questions' => [
                    [
                        'question' => 'La spéciation correspond à :',
                        'choices' => [
                            ['choice_text' => 'la formation de nouvelles espèces', 'is_correct' => true],
                            ['choice_text' => 'la croissance d’un individu', 'is_correct' => false],
                            ['choice_text' => 'la disparition d’un allèle chez une seule personne', 'is_correct' => false],
                            ['choice_text' => 'la migration quotidienne d’un animal', 'is_correct' => false],
                        ],
                        'explanation' => 'La spéciation est le processus évolutif par lequel apparaissent de nouvelles espèces.',
                    ],
                    [
                        'question' => 'Une barrière géographique sépare une population en deux groupes qui ne se reproduisent plus entre eux. Il s’agit d’un :',
                        'choices' => [
                            ['choice_text' => 'isolement géographique', 'is_correct' => true],
                            ['choice_text' => 'mutualisme', 'is_correct' => false],
                            ['choice_text' => 'flux de gènes accru', 'is_correct' => false],
                            ['choice_text' => 'cycle biogéochimique', 'is_correct' => false],
                        ],
                        'explanation' => 'L’isolement géographique sépare spatialement les populations et peut réduire ou arrêter le flux de gènes.',
                    ],
                    [
                        'question' => 'Deux populations vivent dans la même région mais se reproduisent à des périodes différentes de l’année. Cela peut constituer un isolement :',
                        'choices' => [
                            ['choice_text' => 'temporel', 'is_correct' => true],
                            ['choice_text' => 'géologique', 'is_correct' => false],
                            ['choice_text' => 'nutritionnel uniquement', 'is_correct' => false],
                            ['choice_text' => 'climatique mondial', 'is_correct' => false],
                        ],
                        'explanation' => 'Des périodes de reproduction différentes peuvent empêcher les croisements entre populations.',
                    ],
                    [
                        'question' => 'Si deux populations ne peuvent plus produire de descendants fertiles ensemble, leur isolement reproductif est :',
                        'choices' => [
                            ['choice_text' => 'important', 'is_correct' => true],
                            ['choice_text' => 'nul', 'is_correct' => false],
                            ['choice_text' => 'toujours uniquement géographique', 'is_correct' => false],
                            ['choice_text' => 'identique au flux de gènes', 'is_correct' => false],
                        ],
                        'explanation' => 'L’impossibilité de produire une descendance fertile indique une barrière reproductive importante.',
                    ],
                    [
                        'question' => 'Une montagne se forme entre deux populations et limite leurs échanges génétiques. À long terme, cela peut favoriser :',
                        'choices' => [
                            ['choice_text' => 'leur divergence génétique', 'is_correct' => true],
                            ['choice_text' => 'une identité génétique parfaite', 'is_correct' => false],
                            ['choice_text' => 'la suppression de toutes les mutations', 'is_correct' => false],
                            ['choice_text' => 'une augmentation obligatoire du flux de gènes', 'is_correct' => false],
                        ],
                        'explanation' => 'La séparation réduit le flux de gènes et permet aux populations d’évoluer indépendamment.',
                    ],
                    [
                        'question' => 'Après une longue séparation, deux groupes présentent des différences génétiques et comportementales. Pour parler de nouvelles espèces, il faut notamment rechercher :',
                        'choices' => [
                            ['choice_text' => 'des barrières au flux de gènes ou à la reproduction', 'is_correct' => true],
                            ['choice_text' => 'uniquement une différence de taille', 'is_correct' => false],
                            ['choice_text' => 'uniquement une différence de couleur', 'is_correct' => false],
                            ['choice_text' => 'un changement de climat', 'is_correct' => false],
                        ],
                        'explanation' => 'La divergence seule ne suffit pas toujours ; l’existence de barrières reproductives est importante pour caractériser la spéciation.',
                    ],
                    [
                        'question' => 'Une population de poissons préfère deux types de partenaires et les groupes se croisent très peu. Cela peut :',
                        'choices' => [
                            ['choice_text' => 'réduire le flux de gènes et favoriser une divergence', 'is_correct' => true],
                            ['choice_text' => 'augmenter automatiquement le brassage entre les groupes', 'is_correct' => false],
                            ['choice_text' => 'empêcher toute mutation', 'is_correct' => false],
                            ['choice_text' => 'transformer les poissons en plantes', 'is_correct' => false],
                        ],
                        'explanation' => 'Une préférence d’accouplement peut réduire les croisements entre groupes et favoriser leur divergence.',
                    ],
                    [
                        'question' => 'Une barrière qui empêche la fécondation entre deux espèces est une barrière :',
                        'choices' => [
                            ['choice_text' => 'prézygotique', 'is_correct' => true],
                            ['choice_text' => 'postzygotique', 'is_correct' => false],
                            ['choice_text' => 'abiotique', 'is_correct' => false],
                            ['choice_text' => 'trophique', 'is_correct' => false],
                        ],
                        'explanation' => 'Une barrière prézygotique agit avant la formation du zygote, par exemple en empêchant l’accouplement ou la fécondation.',
                    ],
                    [
                        'question' => 'Un hybride se forme mais est stérile. Cela correspond à une barrière :',
                        'choices' => [
                            ['choice_text' => 'postzygotique', 'is_correct' => true],
                            ['choice_text' => 'prézygotique', 'is_correct' => false],
                            ['choice_text' => 'géographique seulement', 'is_correct' => false],
                            ['choice_text' => 'écosystémique', 'is_correct' => false],
                        ],
                        'explanation' => 'Une stérilité de l’hybride apparaît après la fécondation : c’est une barrière postzygotique.',
                    ],
                    [
                        'question' => 'Pour qu’une divergence puisse conduire à la spéciation, un facteur important est :',
                        'choices' => [
                            ['choice_text' => 'la réduction durable du flux de gènes entre les populations', 'is_correct' => true],
                            ['choice_text' => 'l’augmentation permanente des croisements', 'is_correct' => false],
                            ['choice_text' => 'l’absence totale de variation', 'is_correct' => false],
                            ['choice_text' => 'la disparition de toute sélection', 'is_correct' => false],
                        ],
                        'explanation' => 'Une réduction du flux de gènes permet aux populations d’accumuler des différences pouvant conduire à un isolement reproductif.',
                    ],
                ],
            ],
            [
                'title' => 'Preuves de l’évolution',
                'description' => 'Fossiles, anatomie comparée, embryologie, biogéographie et biologie moléculaire.',
                'settings' => ['duration' => 25, 'passing_score' => 65],
                'questions' => [
                    [
                        'question' => 'Les fossiles fournissent des informations sur :',
                        'choices' => [
                            ['choice_text' => 'les organismes et environnements du passé', 'is_correct' => true],
                            ['choice_text' => 'uniquement les organismes actuels', 'is_correct' => false],
                            ['choice_text' => 'uniquement les gènes humains modernes', 'is_correct' => false],
                            ['choice_text' => 'la météo du jour', 'is_correct' => false],
                        ],
                        'explanation' => 'Les fossiles documentent la vie passée et peuvent montrer des changements de formes et de distributions au cours du temps.',
                    ],
                    [
                        'question' => 'Des membres antérieurs de l’humain, de la chauve-souris et de la baleine ont un plan général comparable. Ces structures sont dites :',
                        'choices' => [
                            ['choice_text' => 'homologues', 'is_correct' => true],
                            ['choice_text' => 'minérales', 'is_correct' => false],
                            ['choice_text' => 'analogues par définition', 'is_correct' => false],
                            ['choice_text' => 'abiotiques', 'is_correct' => false],
                        ],
                        'explanation' => 'Des structures homologues partagent une origine évolutive commune même si leurs fonctions peuvent être différentes.',
                    ],
                    [
                        'question' => 'L’aile d’un oiseau et l’aile d’un insecte ont la même fonction de vol mais pas la même origine évolutive. Elles sont plutôt :',
                        'choices' => [
                            ['choice_text' => 'analogues', 'is_correct' => true],
                            ['choice_text' => 'homologues', 'is_correct' => false],
                            ['choice_text' => 'identiques génétiquement', 'is_correct' => false],
                            ['choice_text' => 'des caractères acquis', 'is_correct' => false],
                        ],
                        'explanation' => 'Les structures analogues ont une fonction similaire mais des origines évolutives différentes.',
                    ],
                    [
                        'question' => 'La comparaison des séquences d’ADN entre espèces permet notamment d’estimer :',
                        'choices' => [
                            ['choice_text' => 'leurs relations de parenté évolutive', 'is_correct' => true],
                            ['choice_text' => 'la taille exacte de leur habitat', 'is_correct' => false],
                            ['choice_text' => 'leur régime alimentaire dans tous les cas', 'is_correct' => false],
                            ['choice_text' => 'leur âge individuel', 'is_correct' => false],
                        ],
                        'explanation' => 'Des séquences moléculaires comparées permettent d’inférer des degrés de parenté entre espèces.',
                    ],
                    [
                        'question' => 'Si deux espèces ont des séquences d’ADN très proches pour un gène étudié, cela peut suggérer :',
                        'choices' => [
                            ['choice_text' => 'une parenté évolutive relativement étroite pour les lignées étudiées', 'is_correct' => true],
                            ['choice_text' => 'qu’elles sont forcément de la même espèce', 'is_correct' => false],
                            ['choice_text' => 'qu’elles vivent dans le même habitat', 'is_correct' => false],
                            ['choice_text' => 'qu’elles ont toujours le même comportement', 'is_correct' => false],
                        ],
                        'explanation' => 'Des similitudes moléculaires importantes peuvent indiquer un ancêtre commun plus récent, selon les séquences et méthodes étudiées.',
                    ],
                    [
                        'question' => 'La biogéographie étudie notamment :',
                        'choices' => [
                            ['choice_text' => 'la répartition géographique des organismes et son histoire', 'is_correct' => true],
                            ['choice_text' => 'la structure des protéines', 'is_correct' => false],
                            ['choice_text' => 'la composition chimique des os uniquement', 'is_correct' => false],
                            ['choice_text' => 'la croissance d’un individu', 'is_correct' => false],
                        ],
                        'explanation' => 'La distribution géographique des espèces fournit des indices sur leur histoire évolutive et les changements de territoires.',
                    ],
                    [
                        'question' => 'La présence de groupes d’espèces apparentées sur des îles séparées peut aider à comprendre :',
                        'choices' => [
                            ['choice_text' => 'la diversification et l’histoire des colonisations', 'is_correct' => true],
                            ['choice_text' => 'uniquement la météo actuelle', 'is_correct' => false],
                            ['choice_text' => 'le fonctionnement d’un chromosome', 'is_correct' => false],
                            ['choice_text' => 'la respiration cellulaire uniquement', 'is_correct' => false],
                        ],
                        'explanation' => 'La répartition des espèces insulaires peut révéler des événements de colonisation, d’isolement et de diversification.',
                    ],
                    [
                        'question' => 'Les organes vestigiaux sont intéressants pour l’évolution parce qu’ils :',
                        'choices' => [
                            ['choice_text' => 'peuvent conserver des traces d’une histoire fonctionnelle ancestrale', 'is_correct' => true],
                            ['choice_text' => 'sont toujours essentiels à la survie actuelle', 'is_correct' => false],
                            ['choice_text' => 'sont toujours des organes nouveaux', 'is_correct' => false],
                            ['choice_text' => 'ne contiennent jamais de tissus', 'is_correct' => false],
                        ],
                        'explanation' => 'Un organe vestigial peut être réduit par rapport à une fonction ancestrale, fournissant un indice sur l’histoire évolutive de la lignée.',
                    ],
                    [
                        'question' => 'L’embryologie comparée peut apporter des indices évolutifs lorsqu’elle révèle :',
                        'choices' => [
                            ['choice_text' => 'des similitudes de développement entre groupes apparentés', 'is_correct' => true],
                            ['choice_text' => 'que tous les embryons appartiennent à la même espèce', 'is_correct' => false],
                            ['choice_text' => 'que le milieu n’influence jamais le développement', 'is_correct' => false],
                            ['choice_text' => 'qu’aucun gène n’intervient dans le développement', 'is_correct' => false],
                        ],
                        'explanation' => 'Les similitudes de développement peuvent refléter des héritages évolutifs communs.',
                    ],
                    [
                        'question' => 'Une similarité observée dans une protéine entre deux espèces peut constituer :',
                        'choices' => [
                            ['choice_text' => 'un indice de parenté évolutive', 'is_correct' => true],
                            ['choice_text' => 'une preuve qu’elles occupent le même habitat', 'is_correct' => false],
                            ['choice_text' => 'une preuve qu’elles ont le même régime alimentaire', 'is_correct' => false],
                            ['choice_text' => 'une preuve qu’elles appartiennent forcément à la même espèce', 'is_correct' => false],
                        ],
                        'explanation' => 'Des similitudes moléculaires peuvent refléter un héritage commun et fournir une ligne de preuve supplémentaire sur la parenté évolutive.',
                    ],
                ],
            ],
            [
                'title' => 'Adaptation et évolution en pratique',
                'description' => 'Analyser des exemples d’adaptation, de sélection et de changement des populations.',
                'settings' => ['duration' => 20, 'passing_score' => 65],
                'questions' => [
                    [
                        'question' => 'Dans une région enneigée, les lièvres dont le pelage correspond mieux à la couleur du sol sont moins repérés. Si ce caractère est héréditaire, on peut prévoir :',
                        'choices' => [
                            ['choice_text' => 'une augmentation possible de sa fréquence par sélection', 'is_correct' => true],
                            ['choice_text' => 'sa disparition obligatoire', 'is_correct' => false],
                            ['choice_text' => 'un changement identique chez tous les individus pendant leur vie', 'is_correct' => false],
                            ['choice_text' => 'aucun effet sur la reproduction', 'is_correct' => false],
                        ],
                        'explanation' => 'Un meilleur camouflage peut réduire la prédation et augmenter la reproduction des individus porteurs si le caractère est héréditaire.',
                    ],
                    [
                        'question' => 'Une plante à fleurs rouges attire davantage son pollinisateur local que les plantes à fleurs moins visibles. Si cette différence augmente le nombre de graines produites, on observe :',
                        'choices' => [
                            ['choice_text' => 'une différence de succès reproductif pouvant favoriser le caractère rouge', 'is_correct' => true],
                            ['choice_text' => 'une mutation dirigée par la plante', 'is_correct' => false],
                            ['choice_text' => 'une adaptation acquise uniquement pendant la floraison', 'is_correct' => false],
                            ['choice_text' => 'une disparition nécessaire des autres couleurs', 'is_correct' => false],
                        ],
                        'explanation' => 'Une meilleure attraction des pollinisateurs peut augmenter la reproduction ; si la couleur est héréditaire, la sélection peut en modifier la fréquence.',
                    ],
                    [
                        'question' => 'Une population de bactéries contient 1 % de résistantes à un antibiotique avant traitement. Après plusieurs générations sous traitement, elles représentent 40 %. L’interprétation la plus directe est :',
                        'choices' => [
                            ['choice_text' => 'la fréquence de la résistance a fortement augmenté sous cette pression de sélection', 'is_correct' => true],
                            ['choice_text' => 'l’antibiotique a forcément créé toutes les mutations après le traitement', 'is_correct' => false],
                            ['choice_text' => 'toutes les bactéries sont devenues identiques', 'is_correct' => false],
                            ['choice_text' => 'la résistance n’a aucun lien avec la survie', 'is_correct' => false],
                        ],
                        'explanation' => 'La proportion de bactéries résistantes a augmenté dans les conditions de traitement, ce qui est compatible avec une sélection en leur faveur.',
                    ],
                    [
                        'question' => 'Un caractère utile dans un désert devient moins avantageux dans un environnement très humide. Cela montre que :',
                        'choices' => [
                            ['choice_text' => 'l’avantage sélectif d’un caractère dépend du contexte', 'is_correct' => true],
                            ['choice_text' => 'un caractère avantageux est toujours avantageux partout', 'is_correct' => false],
                            ['choice_text' => 'la sélection naturelle est indépendante du milieu', 'is_correct' => false],
                            ['choice_text' => 'les caractères ne peuvent jamais changer de fréquence', 'is_correct' => false],
                        ],
                        'explanation' => 'La valeur sélective d’un caractère dépend des conditions environnementales et des interactions présentes.',
                    ],
                    [
                        'question' => 'Deux populations de lézards occupent des habitats différents et présentent des formes de pattes distinctes associées à leurs substrats. Pour tester une hypothèse d’adaptation, on peut :',
                        'choices' => [
                            ['choice_text' => 'mesurer le lien entre le caractère, le milieu et la réussite reproductive', 'is_correct' => true],
                            ['choice_text' => 'supposer directement que toute différence est adaptative', 'is_correct' => false],
                            ['choice_text' => 'ignorer les différences génétiques', 'is_correct' => false],
                            ['choice_text' => 'observer uniquement la couleur du ciel', 'is_correct' => false],
                        ],
                        'explanation' => 'Une hypothèse d’adaptation demande de relier le caractère à l’environnement et à un avantage biologique, tout en évaluant l’hérédité.',
                    ],
                    [
                        'question' => 'Un caractère évolue sans avantage apparent et surtout dans une petite population isolée. Quel mécanisme peut être envisagé ?',
                        'choices' => [
                            ['choice_text' => 'la dérive génétique', 'is_correct' => true],
                            ['choice_text' => 'la sélection naturelle uniquement', 'is_correct' => false],
                            ['choice_text' => 'la photosynthèse', 'is_correct' => false],
                            ['choice_text' => 'la reproduction asexuée obligatoire', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans une petite population, des changements aléatoires de fréquences alléliques peuvent se produire sans avantage sélectif identifié.',
                    ],
                    [
                        'question' => 'Pourquoi dit-on qu’une adaptation est relative et non absolue ?',
                        'choices' => [
                            ['choice_text' => 'Parce qu’elle peut être avantageuse dans certaines conditions et pas dans d’autres', 'is_correct' => true],
                            ['choice_text' => 'Parce qu’elle change chaque jour chez tous les individus', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’elle ne peut jamais être héréditaire', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’elle existe uniquement chez les fossiles', 'is_correct' => false],
                        ],
                        'explanation' => 'Un caractère adapté à un environnement donné peut devenir moins avantageux lorsque les conditions changent.',
                    ],
                    [
                        'question' => 'Une population de moustiques devient moins sensible à un insecticide après plusieurs générations. Ce résultat illustre le mieux :',
                        'choices' => [
                            ['choice_text' => 'une évolution de la fréquence de variantes de résistance', 'is_correct' => true],
                            ['choice_text' => 'une transformation instantanée de chaque moustique', 'is_correct' => false],
                            ['choice_text' => 'une adaptation consciente des moustiques', 'is_correct' => false],
                            ['choice_text' => 'une absence de sélection', 'is_correct' => false],
                        ],
                        'explanation' => 'La diminution de sensibilité peut résulter d’une augmentation des variantes génétiques conférant une résistance.',
                    ],
                    [
                        'question' => 'Si un caractère favorise la survie mais diminue fortement le nombre de descendants, son évolution dans la population peut être :',
                        'choices' => [
                            ['choice_text' => 'moins favorable que ne le suggère la seule survie', 'is_correct' => true],
                            ['choice_text' => 'nécessairement très rapide', 'is_correct' => false],
                            ['choice_text' => 'indépendante de la reproduction', 'is_correct' => false],
                            ['choice_text' => 'toujours associée à une fixation', 'is_correct' => false],
                        ],
                        'explanation' => 'La sélection agit sur la contribution à la génération suivante : la reproduction compte aussi, pas seulement la survie.',
                    ],
                    [
                        'question' => 'Une population contient 100 individus, dont 30 portent une variante avantageuse. Si cette variante donne en moyenne davantage de descendants et reste héréditaire, au fil des générations sa fréquence peut :',
                        'choices' => [
                            ['choice_text' => 'augmenter', 'is_correct' => true],
                            ['choice_text' => 'devenir forcément nulle', 'is_correct' => false],
                            ['choice_text' => 'rester exactement 30 % sans exception', 'is_correct' => false],
                            ['choice_text' => 'changer uniquement sous l’effet du climat', 'is_correct' => false],
                        ],
                        'explanation' => 'Une variante héréditaire associée à une meilleure réussite reproductive peut voir sa fréquence augmenter au fil des générations.',
                    ],
                ],
            ],
            [
                'title' => 'Révision générale de l’évolution',
                'description' => 'Synthèse sur sélection naturelle, dérive, variation, spéciation et preuves évolutives.',
                'settings' => ['duration' => 25, 'passing_score' => 70],
                'questions' => [
                    [
                        'question' => 'Quel énoncé distingue correctement sélection naturelle et dérive génétique ?',
                        'choices' => [
                            ['choice_text' => 'La sélection est liée à des différences de réussite reproductive, la dérive à des effets aléatoires', 'is_correct' => true],
                            ['choice_text' => 'Les deux sont exactement le même processus', 'is_correct' => false],
                            ['choice_text' => 'La dérive dépend toujours d’un avantage adaptatif', 'is_correct' => false],
                            ['choice_text' => 'La sélection est toujours entièrement aléatoire', 'is_correct' => false],
                        ],
                        'explanation' => 'La sélection naturelle modifie les fréquences alléliques en lien avec des différences de fitness, tandis que la dérive agit de façon aléatoire.',
                    ],
                    [
                        'question' => 'Une population de 200 individus possède 40 copies d’un allèle dans un ensemble de 400 copies. Sa fréquence allélique est :',
                        'choices' => [
                            ['choice_text' => '0,10', 'is_correct' => true],
                            ['choice_text' => '0,20', 'is_correct' => false],
                            ['choice_text' => '0,40', 'is_correct' => false],
                            ['choice_text' => '0,05', 'is_correct' => false],
                        ],
                        'explanation' => 'La fréquence est 40 ÷ 400 = 0,10, soit 10 %.',
                    ],
                    [
                        'question' => 'Une population est séparée géographiquement et accumule des différences jusqu’à ce que les croisements deviennent impossibles. Le processus global peut correspondre à :',
                        'choices' => [
                            ['choice_text' => 'une spéciation', 'is_correct' => true],
                            ['choice_text' => 'une croissance', 'is_correct' => false],
                            ['choice_text' => 'une succession écologique', 'is_correct' => false],
                            ['choice_text' => 'une digestion', 'is_correct' => false],
                        ],
                        'explanation' => 'Une divergence accompagnée d’un isolement reproductif peut conduire à la formation de nouvelles espèces.',
                    ],
                    [
                        'question' => 'Quel événement peut augmenter la diversité génétique disponible dans une population ?',
                        'choices' => [
                            ['choice_text' => 'l’apparition d’une nouvelle mutation héréditaire', 'is_correct' => true],
                            ['choice_text' => 'la disparition de tous les reproducteurs', 'is_correct' => false],
                            ['choice_text' => 'la réduction de toute reproduction', 'is_correct' => false],
                            ['choice_text' => 'la perte de tous les allèles rares', 'is_correct' => false],
                        ],
                        'explanation' => 'Une nouvelle mutation transmissible peut créer une nouvelle variante d’ADN dans la population.',
                    ],
                    [
                        'question' => 'Un fossile présente une combinaison de caractères intermédiaires entre deux groupes connus. Il peut être utile comme :',
                        'choices' => [
                            ['choice_text' => 'indice de relations et de transitions évolutives', 'is_correct' => true],
                            ['choice_text' => 'preuve que tous les organismes sont identiques', 'is_correct' => false],
                            ['choice_text' => 'mesure directe de la fréquence allélique actuelle', 'is_correct' => false],
                            ['choice_text' => 'preuve que l’environnement ne change jamais', 'is_correct' => false],
                        ],
                        'explanation' => 'Les fossiles peuvent documenter des formes anciennes et des changements morphologiques au cours de l’histoire de la vie.',
                    ],
                    [
                        'question' => 'Deux espèces partagent des gènes très similaires et une structure osseuse comparable. Ces observations ensemble :',
                        'choices' => [
                            ['choice_text' => 'renforcent l’hypothèse d’une parenté évolutive', 'is_correct' => true],
                            ['choice_text' => 'prouvent qu’elles appartiennent à la même population', 'is_correct' => false],
                            ['choice_text' => 'montrent qu’elles ont toujours vécu au même endroit', 'is_correct' => false],
                            ['choice_text' => 'annulent toutes les différences morphologiques', 'is_correct' => false],
                        ],
                        'explanation' => 'Des données moléculaires et anatomiques concordantes constituent plusieurs lignes de preuve en faveur d’une parenté.',
                    ],
                    [
                        'question' => 'Une variante génétique passe de 5 % à 15 % dans une population après plusieurs générations, sans migration observée. Pour conclure à la sélection, il faut notamment vérifier :',
                        'choices' => [
                            ['choice_text' => 'si la variante est associée à une différence de survie ou de reproduction et est héréditaire', 'is_correct' => true],
                            ['choice_text' => 'uniquement si la population est grande', 'is_correct' => false],
                            ['choice_text' => 'uniquement la couleur des individus', 'is_correct' => false],
                            ['choice_text' => 'que toute variation est forcément adaptative', 'is_correct' => false],
                        ],
                        'explanation' => 'Une hausse de fréquence seule ne suffit pas à identifier le mécanisme ; l’hérédité et la différence de fitness sont des éléments importants.',
                    ],
                    [
                        'question' => 'Une mutation est présente dans une cellule du foie d’un adulte. Dans le cas général, elle :',
                        'choices' => [
                            ['choice_text' => 'n’est pas transmise aux enfants', 'is_correct' => true],
                            ['choice_text' => 'est obligatoirement présente dans les gamètes', 'is_correct' => false],
                            ['choice_text' => 'crée une nouvelle espèce', 'is_correct' => false],
                            ['choice_text' => 'augmente toujours la fitness', 'is_correct' => false],
                        ],
                        'explanation' => 'Une mutation somatique n’est généralement pas transmise à la descendance.',
                    ],
                    [
                        'question' => 'Pourquoi une petite population isolée est-elle souvent vulnérable à la perte de diversité génétique ?',
                        'choices' => [
                            ['choice_text' => 'parce que la dérive génétique et la consanguinité peuvent y avoir des effets plus importants', 'is_correct' => true],
                            ['choice_text' => 'parce qu’elle contient toujours plus d’allèles', 'is_correct' => false],
                            ['choice_text' => 'parce que le flux de gènes y est nécessairement maximal', 'is_correct' => false],
                            ['choice_text' => 'parce que les mutations y sont impossibles', 'is_correct' => false],
                        ],
                        'explanation' => 'La petite taille augmente l’effet du hasard et peut renforcer la consanguinité, deux facteurs pouvant réduire la diversité génétique.',
                    ],
                    [
                        'question' => 'Quel mécanisme peut faire augmenter la fréquence d’un allèle avantageux dans une population au fil des générations ?',
                        'choices' => [
                            ['choice_text' => 'la sélection naturelle', 'is_correct' => true],
                            ['choice_text' => 'la condensation de l’eau', 'is_correct' => false],
                            ['choice_text' => 'la digestion', 'is_correct' => false],
                            ['choice_text' => 'la sédimentation', 'is_correct' => false],
                        ],
                        'explanation' => 'Si un allèle héréditaire augmente la survie ou la reproduction dans un environnement donné, la sélection naturelle peut favoriser son augmentation en fréquence.',
                    ],
                ],
            ],
        ];

        foreach ($quizzes as $quizData) {
            $settings = $quizData['settings'];

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
