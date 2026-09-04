<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class ThermodynamicsAdvancedSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'thermodynamics')->firstOrFail();

        $quizzes = [

            // ============================================================
            // QUIZ 1 — Transformations thermodynamiques avancées
            // ============================================================

            [
                'title' => 'Transformations thermodynamiques avancées',
                'description' => 'Analyse des transformations réversibles, irréversibles, isothermes, isobares, isochores et adiabatiques.',
                'questions' => [

                    [
                        'question' => 'Pour un gaz parfait, lors d’une transformation isotherme réversible, quelle relation entre pression et volume est correcte ?',
                        'choices' => [
                            ['choice_text' => 'PV = constante', 'is_correct' => true],
                            ['choice_text' => 'P/V = constante', 'is_correct' => false],
                            ['choice_text' => 'P + V = constante', 'is_correct' => false],
                            ['choice_text' => 'PV^2 = constante', 'is_correct' => false],
                        ],
                        'explanation' => 'Pour un gaz parfait à température et quantité de matière constantes, l’équation d’état impose PV = nRT = constante.',
                    ],

                    [
                        'question' => 'Lors d’une détente isotherme réversible d’un gaz parfait, quelle est la variation de son énergie interne ?',
                        'choices' => [
                            ['choice_text' => 'Nulle', 'is_correct' => true],
                            ['choice_text' => 'Toujours positive', 'is_correct' => false],
                            ['choice_text' => 'Toujours négative', 'is_correct' => false],
                            ['choice_text' => 'Également au travail fourni', 'is_correct' => false],
                        ],
                        'explanation' => 'Pour un gaz parfait, l’énergie interne dépend uniquement de la température. Une transformation isotherme donne donc ΔU = 0.',
                    ],

                    [
                        'question' => 'Dans une détente isotherme réversible d’un gaz parfait, si ΔU = 0, quelle relation entre chaleur reçue et travail fourni est correcte avec ΔU = Q - W ?',
                        'choices' => [
                            ['choice_text' => 'Q = W', 'is_correct' => true],
                            ['choice_text' => 'Q = -W', 'is_correct' => false],
                            ['choice_text' => 'Q = 0 et W = 0', 'is_correct' => false],
                            ['choice_text' => 'Q = 2W', 'is_correct' => false],
                        ],
                        'explanation' => 'Le premier principe donne 0 = Q - W, donc Q = W.',
                    ],

                    [
                        'question' => 'Pour une transformation adiabatique réversible d’un gaz parfait, quelle relation est correcte ?',
                        'choices' => [
                            ['choice_text' => 'PV^γ = constante', 'is_correct' => true],
                            ['choice_text' => 'PV = constante', 'is_correct' => false],
                            ['choice_text' => 'P/T = constante', 'is_correct' => false],
                            ['choice_text' => 'P + V = constante', 'is_correct' => false],
                        ],
                        'explanation' => 'L’équation caractéristique d’une adiabatique réversible est PV^γ = constante.',
                    ],

                    [
                        'question' => 'Pour une compression adiabatique réversible, quelle grandeur augmente généralement pour un gaz parfait ?',
                        'choices' => [
                            ['choice_text' => 'La température', 'is_correct' => true],
                            ['choice_text' => 'Le volume', 'is_correct' => false],
                            ['choice_text' => 'L’énergie interne diminue nécessairement', 'is_correct' => false],
                            ['choice_text' => 'L’entropie du gaz augmente nécessairement', 'is_correct' => false],
                        ],
                        'explanation' => 'Le travail reçu pendant la compression augmente l’énergie interne. Pour un gaz parfait, cela entraîne une augmentation de température.',
                    ],

                    [
                        'question' => 'Dans une transformation isochore d’un système fermé, quel est le travail de pression-volume ?',
                        'choices' => [
                            ['choice_text' => 'Nul', 'is_correct' => true],
                            ['choice_text' => 'Égal à PΔT', 'is_correct' => false],
                            ['choice_text' => 'Toujours positif', 'is_correct' => false],
                            ['choice_text' => 'Toujours négatif', 'is_correct' => false],
                        ],
                        'explanation' => 'Le travail W = ∫P dV est nul lorsque le volume reste constant.',
                    ],

                    [
                        'question' => 'Lors d’une transformation isobare d’un gaz parfait, quelle grandeur varie directement avec la température absolue ?',
                        'choices' => [
                            ['choice_text' => 'Le volume', 'is_correct' => true],
                            ['choice_text' => 'La pression', 'is_correct' => false],
                            ['choice_text' => 'La constante des gaz parfaits', 'is_correct' => false],
                            ['choice_text' => 'La masse molaire', 'is_correct' => false],
                        ],
                        'explanation' => 'À pression et quantité de matière constantes, V = nRT/P, donc V est proportionnel à T.',
                    ],

                    [
                        'question' => 'Pourquoi une transformation quasi statique n’est-elle pas nécessairement réversible ?',
                        'choices' => [
                            ['choice_text' => Elle peut être suffisamment lente tout en contenant des mécanismes dissipatifs comme le frottement', 'is_correct' => true],
                            ['choice_text' => 'Toute transformation lente est automatiquement réversible', 'is_correct' => false],
                            ['choice_text' => 'Une transformation réversible doit toujours être rapide', 'is_correct' => false],
                            ['choice_text' => 'La réversibilité dépend uniquement du volume', 'is_correct' => false],
                        ],
                        'explanation' => 'La lenteur ou quasi-staticité ne suffit pas. La réversibilité exige également l’absence d’irréversibilités dissipatives.',
                    ],

                    [
                        'question' => 'Pourquoi une différence finie de température entre deux réservoirs implique-t-elle une irréversibilité lors d’un transfert thermique ?',
                        'choices' => [
                            ['choice_text' => Le transfert à travers une différence finie de température produit de l’entropie', 'is_correct' => true],
                            ['choice_text' => 'La chaleur ne peut jamais être transférée à température finie', 'is_correct' => false],
                            ['choice_text' => 'La température doit être nulle dans les deux réservoirs', 'is_correct' => false],
                            ['choice_text' => 'La deuxième loi ne concerne que les gaz', 'is_correct' => false],
                        ],
                        'explanation' => 'Un transfert thermique spontané à travers un gradient fini de température est irréversible et produit de l’entropie.',
                    ],

                    [
                        'question' => 'Pour une transformation réversible adiabatique, quelle quantité reste constante ?',
                        'choices' => [
                            ['choice_text' => 'L’entropie', 'is_correct' => true],
                            ['choice_text' => 'La pression', 'is_correct' => false],
                            ['choice_text' => 'Le volume', 'is_correct' => false],
                            ['choice_text' => 'La température', 'is_correct' => false],
                        ],
                        'explanation' => 'Une transformation adiabatique réversible est isentropique, donc ΔS = 0.',
                    ],
                ],
            ],

            // ============================================================
            // QUIZ 2 — Premier et deuxième principes
            // ============================================================

            [
                'title' => 'Premier et deuxième principes',
                'description' => 'Analyse combinée de la conservation de l’énergie et des contraintes imposées par l’entropie.',
                'questions' => [

                    [
                        'question' => 'Pourquoi le premier principe seul ne permet-il pas de déterminer le sens spontané d’une transformation thermique ?',
                        'choices' => [
                            ['choice_text' => Il impose la conservation de l’énergie mais pas le sens d’évolution ni les irréversibilités', 'is_correct' => true],
                            ['choice_text' => 'Il interdit tout échange de chaleur', 'is_correct' => false],
                            ['choice_text' => 'Il ne définit pas l’énergie interne', 'is_correct' => false],
                            ['choice_text' => 'Il s’applique uniquement aux moteurs thermiques', 'is_correct' => false],
                        ],
                        'explanation' => 'Le premier principe exprime un bilan énergétique. Le deuxième principe introduit la notion d’entropie et la direction des transformations.',
                    ],

                    [
                        'question' => 'Dans un système isolé, une transformation spontanée réelle vérifie généralement...',
                        'choices' => [
                            ['choice_text' => 'ΔS_total ≥ 0', 'is_correct' => true],
                            ['choice_text' => 'ΔS_total < 0', 'is_correct' => false],
                            ['choice_text' => 'ΔS_total = -Q', 'is_correct' => false],
                            ['choice_text' => 'ΔS_total = 0 pour toute transformation', 'is_correct' => false],
                        ],
                        'explanation' => 'Le deuxième principe impose que l’entropie totale d’un système isolé ne diminue pas.',
                    ],

                    [
                        'question' => 'Une transformation réversible idéale d’un système isolé possède une production d’entropie...',
                        'choices' => [
                            ['choice_text' => 'Nulle', 'is_correct' => true],
                            ['choice_text' => 'Positive', 'is_correct' => false],
                            ['choice_text' => 'Négative', 'is_correct' => false],
                            ['choice_text' => 'Infinie', 'is_correct' => false],
                        ],
                        'explanation' => 'La réversibilité implique l’absence de production d’entropie.',
                    ],

                    [
                        'question' => 'Pourquoi les frottements mécaniques sont-ils associés à une production d’entropie ?',
                        'choices' => [
                            ['choice_text' => 'Ils dissipent de l’énergie mécanique par des processus irréversibles', 'is_correct' => true],
                            ['choice_text' => 'Ils violent la conservation de l’énergie', 'is_correct' => false],
                            ['choice_text' => 'Ils rendent toujours le système adiabatique et réversible', 'is_correct' => false],
                            ['choice_text' => 'Ils réduisent la température absolue à zéro', 'is_correct' => false],
                        ],
                        'explanation' => 'Les frottements sont une source classique d’irréversibilité et donc de génération d’entropie.',
                    ],

                    [
                        'question' => 'Quelle affirmation distingue correctement énergie et entropie ?',
                        'choices' => [
                            ['choice_text' => 'L’énergie se conserve globalement alors que l’entropie totale peut être produite', 'is_correct' => true],
                            ['choice_text' => 'L’énergie et l’entropie sont toujours exactement la même grandeur', 'is_correct' => false],
                            ['choice_text' => 'L’entropie remplace le premier principe', 'is_correct' => false],
                            ['choice_text' => 'L’énergie n’est conservée que pour les systèmes isolés', 'is_correct' => false],
                        ],
                        'explanation' => 'Le premier principe concerne la conservation de l’énergie. Le deuxième principe décrit l’évolution de l’entropie.',
                    ],

                    [
                        'question' => 'Dans une transformation réversible, quelle expression différentielle relie l’entropie et la chaleur ?',
                        'choices' => [
                            ['choice_text' => 'dS = δQ_rev/T', 'is_correct' => true],
                            ['choice_text' => 'dS = TδQ_rev', 'is_correct' => false],
                            ['choice_text' => 'dS = δQ_rev/T²', 'is_correct' => false],
                            ['choice_text' => 'dS = δQ_rev + T', 'is_correct' => false],
                        ],
                        'explanation' => 'Pour un transfert réversible, dS = δQ_rev/T.',
                    ],

                    [
                        'question' => 'Un système reçoit 1000 J de chaleur à température constante de 500 K dans une transformation réversible. Quelle est sa variation d’entropie ?',
                        'choices' => [
                            ['choice_text' => '2 J/K', 'is_correct' => true],
                            ['choice_text' => '500 J/K', 'is_correct' => false],
                            ['choice_text' => '0,5 J/K', 'is_correct' => false],
                            ['choice_text' => '2000 J/K', 'is_correct' => false],
                        ],
                        'explanation' => 'ΔS = Q_rev/T = 1000/500 = 2 J/K.',
                    ],

                    [
                        'question' => 'Pourquoi une transformation irréversible entre deux mêmes états possède-t-elle la même variation d’entropie qu’une transformation réversible équivalente ?',
                        'choices' => [
                            ['choice_text' => L’entropie est une fonction d’état', 'is_correct' => true],
                            ['choice_text' => 'La chaleur est une fonction d’état', 'is_correct' => false],
                            ['choice_text' => 'Le travail est toujours identique quel que soit le chemin', 'is_correct' => false],
                            ['choice_text' => 'Les transformations irréversibles ne peuvent pas avoir d’entropie', 'is_correct' => false],
                        ],
                        'explanation' => 'ΔS dépend uniquement des états initial et final. Une transformation réversible peut donc être utilisée comme chemin de calcul.',
                    ],

                    [
                        'question' => 'Pour un processus réel, la relation de Clausius peut être exprimée qualitativement par quelle condition ?',
                        'choices' => [
                            ['choice_text' => ∮δQ/T ≤ 0', 'is_correct' => true],
                            ['choice_text' => '∮δQ/T > 0 toujours', 'is_correct' => false],
                            ['choice_text' => '∮δQ/T = W pour tout cycle', 'is_correct' => false],
                            ['choice_text' => '∮δQ/T = 1 toujours', 'is_correct' => false],
                        ],
                        'explanation' => 'L’inégalité de Clausius impose ∮δQ/T ≤ 0 pour un cycle, avec égalité dans le cas réversible.',
                    ],

                    [
                        'question' => 'Pourquoi la production d’entropie doit-elle être positive ou nulle dans un système physique réel fermé ?',
                        'choice_text' => 'Parce que les irréversibilités ne peuvent pas produire une diminution nette de l’entropie totale du système isolé', 
                    ],
                ],
            ],

            // ============================================================
            // QUIZ 3 — Mélanges et propriétés des gaz
            // ============================================================

            [
                'title' => 'Gaz réels, mélanges et propriétés thermodynamiques',
                'description' => 'Analyse des propriétés des gaz, des mélanges et des limites du modèle du gaz parfait.',
                'questions' => [

                    [
                        'question' => 'Pourquoi l’équation PV = nRT peut-elle devenir moins précise à haute pression ?',
                        'choices' => [
                            ['choice_text' => Les interactions moléculaires et le volume propre des molécules deviennent importants', 'is_correct' => true],
                            ['choice_text' => 'La température absolue cesse d’exister', 'is_correct' => false],
                            ['choice_text' => 'La constante R change de valeur', 'is_correct' => false],
                            ['choice_text' => 'La masse des molécules devient nulle', 'is_correct' => false],
                        ],
                        'explanation' => 'Le modèle de gaz parfait néglige le volume des molécules et leurs interactions. Ces approximations deviennent moins valables à forte densité.',
                    ],

                    [
                        'question' => 'Pour un mélange idéal de gaz, la pression totale est égale...',
                        'choice_text' => 'À la somme des pressions partielles des constituants', 
                    ],
                    [
                        'question' => 'Dans la loi de Dalton pour un mélange de gaz idéaux, une pression partielle correspond à...',
                        'choices' => [
                            ['choice_text' => La pression qu’exercerait le constituant s’il occupait seul le volume total à la même température', 'is_correct' => true],
                            ['choice_text' => 'La pression uniquement due aux molécules les plus lourdes', 'is_correct' => false],
                            ['choice_text' => 'La pression totale divisée par la masse totale dans tous les cas', 'is_correct' => false],
                            ['choice_text' => 'La différence entre pression et température', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans le modèle idéal, chaque constituant contribue à la pression totale indépendamment des autres.',
                    ],

                    [
                        'question' => 'Pourquoi la chaleur spécifique d’un mélange peut-elle dépendre de sa composition ?',
                        'choices' => [
                            ['choice_text' => 'Les différents constituants possèdent des propriétés thermiques différentes', 'is_correct' => true],
                            ['choice_text' => 'Tous les gaz possèdent exactement la même capacité thermique', 'is_correct' => false],
                            ['choice_text' => 'La composition n’influence jamais l’énergie interne', 'is_correct' => false],
                            ['choice_text' => 'La masse totale disparaît au mélange', 'is_correct' => false],
                        ],
                        'explanation' => 'Les propriétés thermiques globales d’un mélange dépendent de la contribution de chacun de ses constituants.',
                    ],

                    [
                        'question' => 'Pourquoi les gaz réels peuvent-ils subir une liquéfaction ?',
                        'choices' => [
                            ['choice_text' => 'Les interactions attractives entre molécules permettent des états condensés sous des conditions appropriées', 'is_correct' => true],
                            ['choice_text' => 'Un gaz parfait se liquéfie toujours spontanément', 'is_correct' => false],
                            ['choice_text' => 'La température absolue doit devenir négative', 'is_correct' => false],
                            ['choice_text' => 'La pression doit être exactement nulle', 'is_correct' => false],
                        ],
                        'explanation' => 'Les interactions intermoléculaires réelles permettent la condensation sous pression et température appropriées.',
                    ],

                    [
                        'question' => 'Quelle propriété distingue particulièrement un gaz réel du modèle idéal ?',
                        'choices' => [
                            ['choice_text' => L’existence d’interactions intermoléculaires non négligeables', 'is_correct' => true],
                            ['choice_text' => 'L’absence de toute énergie interne', 'is_correct' => false],
                            ['choice_text' => 'L’impossibilité de changer de volume', 'is_correct' => false],
                            ['choice_text' => 'La disparition de la pression', 'is_correct' => false],
                        ],
                        'explanation' => 'Le gaz réel possède des interactions et un volume moléculaire qui sont négligés dans le modèle idéal.',
                    ],

                    [
                        'question' => 'Dans une détente Joule-Thomson d’un gaz réel, quelle grandeur reste constante dans le modèle classique de la vanne étranglée ?',
                        'choices' => [
                            ['choice_text' => 'L’enthalpie', 'is_correct' => true],
                            ['choice_text' => 'La température', 'is_correct' => false],
                            ['choice_text' => 'La pression', 'is_correct' => false],
                            ['choice_text' => 'L’énergie interne seule', 'is_correct' => false],
                        ],
                        'explanation' => 'Une détente par étranglement en régime stationnaire et sans échange de chaleur ni travail utile externe est approximativement isenthalpique.',
                    ],

                    [
                        'question' => 'Pourquoi le coefficient de Joule-Thomson d’un gaz parfait est-il nul ?',
                        'choice_text' => 'Parce que l’enthalpie d’un gaz parfait dépend uniquement de sa température', 
                    ],

                    [
                        'question' => 'Pourquoi le refroidissement Joule-Thomson peut-il être positif ou négatif selon le gaz et la température ?',
                        'choices' => [
                            ['choice_text' => 'Les interactions moléculaires réelles déterminent la réponse du gaz à pression constante d’enthalpie', 'is_correct' => true],
                            ['choice_text' => 'La température n’intervient jamais', 'is_correct' => false],
                            ['choice_text' => 'Tous les gaz possèdent le même coefficient', 'is_correct' => false],
                            ['choice_text' => 'La constante R change selon le gaz', 'is_correct' => false],
                        ],
                        'explanation' => 'Le signe du coefficient de Joule-Thomson dépend de l’état thermodynamique et des interactions moléculaires.',
                    ],

                    [
                        'question' => 'Pourquoi le modèle du gaz parfait reste-t-il extrêmement utile malgré ses approximations ?',
                        'choices' => [
                            ['choice_text' => 'Il fournit une approximation simple et souvent précise pour de nombreux gaz à faible densité', 'is_correct' => true],
                            ['choice_text' => 'Il décrit exactement toutes les phases de la matière', 'is_correct' => false],
                            ['choice_text' => 'Il prend explicitement toutes les interactions moléculaires en compte', 'is_correct' => false],
                            ['choice_text' => 'Il est valide uniquement à très haute pression', 'is_correct' => false],
                        ],
                        'explanation' => 'Le modèle idéal offre une description simple et efficace dans de nombreuses conditions usuelles.',
                    ],
                ],
            ],

            // ============================================================
            // QUIZ 4 — Entropie et changements de phase
            // ============================================================

            [
                'title' => 'Entropie et changements de phase',
                'description' => 'Étude des variations d’entropie associées aux transformations thermiques et aux changements d’état.',
                'questions' => [

                    [
                        'question' => 'Lors de la fusion réversible d’un corps pur à sa température de fusion T, quelle relation donne la variation d’entropie ?',
                        'choices' => [
                            ['choice_text' => 'ΔS = Lf/T', 'is_correct' => true],
                            ['choice_text' => 'ΔS = TLf', 'is_correct' => false],
                            ['choice_text' => 'ΔS = Lf/T²', 'is_correct' => false],
                            ['choice_text' => 'ΔS = T/Lf', 'is_correct' => false],
                        ],
                        'explanation' => 'À température constante, ΔS = Qrev/T et Qrev = mLf pour une masse m. Par unité de masse, Δs = Lf/T.',
                    ],

                    [
                        'question' => 'Pourquoi l’entropie augmente-t-elle généralement lors de la vaporisation d’un liquide ?',
                        'choices' => [
                            ['choice_text' => 'La phase gazeuse possède généralement davantage de configurations microscopiques accessibles', 'is_correct' => true],
                            ['choice_text' => 'La masse du système augmente', 'is_correct' => false],
                            ['choice_text' => 'La température devient nécessairement nulle', 'is_correct' => false],
                            ['choice_text' => 'La deuxième loi impose toujours une baisse d’entropie', 'is_correct' => false],
                        ],
                        'explanation' => 'Le passage vers la phase gazeuse augmente généralement la liberté de mouvement et le nombre d’états microscopiques accessibles.',
                    ],

                    [
                        'question' => 'Lors d’un changement d’état réversible à température constante, la chaleur latente est liée à l’entropie par...',
                        'choices' => [
                            ['choice_text' => 'Qrev = TΔS', 'is_correct' => true],
                            ['choice_text' => 'Qrev = ΔS/T', 'is_correct' => false],
                            ['choice_text' => 'Qrev = T/ΔS', 'is_correct' => false],
                            ['choice_text' => 'Qrev = ΔS - T', 'is_correct' => false],
                        ],
                        'explanation' => 'La définition de l’entropie pour un transfert réversible à température constante donne Qrev = TΔS.',
                    ],

                    [
                        'question' => 'Pourquoi un changement d’état peut-il absorber une quantité importante de chaleur sans augmenter la température ?',
                        'choices' => [
                            ['choice_text' => L’énergie fournie modifie principalement l’état de la matière au lieu d’augmenter immédiatement sa température', 'is_correct' => true],
                            ['choice_text' => 'La chaleur n’est pas une forme d’énergie', 'is_correct' => false],
                            ['choice_text' => 'La température devient négative', 'is_correct' => false],
                            ['choice_text' => 'L’énergie interne reste nécessairement nulle', 'is_correct' => false],
                        ],
                        'explanation' => 'Pendant une transition de phase, l’énergie fournie sert notamment à modifier l’organisation et les interactions microscopiques.',
                    ],

                    [
                        'question' => 'Pourquoi la température de changement d’état dépend-elle de la pression ?',
                        'choices' => [
                            ['choice_text' => L’équilibre entre phases dépend des potentiels thermodynamiques et donc de la pression', 'is_correct' => true],
                            ['choice_text' => 'La pression n’a aucun effet sur les phases', 'is_correct' => false],
                            ['choice_text' => 'La température de fusion est toujours universellement constante', 'is_correct' => false],
                            ['choice_text' => 'La masse moléculaire change avec la pression', 'is_correct' => false],
                        ],
                        'explanation' => 'Les conditions d’équilibre entre phases sont déterminées par les propriétés thermodynamiques du système, qui dépendent notamment de la pression.',
                    ],

                    [
                        'question' => 'Pourquoi la chaleur latente de vaporisation est généralement plus grande que la chaleur latente de fusion pour une même substance ?',
                        'choices' => [
                            ['choice_text' => La vaporisation implique une séparation beaucoup plus importante des molécules et une variation d’état plus étendue', 'is_correct' => true],
                            ['choice_text' => 'La fusion détruit les molécules', 'is_correct' => false],
                            ['choice_text' => 'La vaporisation ne nécessite aucune énergie', 'is_correct' => false],
                            ['choice_text' => 'Les deux chaleurs latentes sont nécessairement identiques', 'is_correct' => false],
                        ],
                        'explanation' => 'Passer du liquide au gaz nécessite généralement davantage d’énergie pour surmonter les interactions moléculaires que passer du solide au liquide.',
                    ],

                    [
                        'question' => 'Dans un diagramme de phases, le point critique correspond à...',
                        'choices' => [
                            ['choice_text' => La disparition de la distinction entre liquide et gaz', 'is_correct' => true],
                            ['choice_text' => 'La coexistence obligatoire de toutes les phases', 'is_correct' => false],
                            ['choice_text' => 'La température de zéro absolu', 'is_correct' => false],
                            ['choice_text' => 'La pression nulle', 'is_correct' => false],
                        ],
                        'explanation' => 'Au-delà du point critique, il n’existe plus de frontière de phase liquide-gaz conventionnelle.',
                    ],

                    [
                        'question' => 'Pourquoi l’entropie molaire d’une substance peut-elle changer fortement lors d’une vaporisation ?',
                        'choices' => [
                            ['choice_text' => Le passage au gaz modifie fortement le volume accessible et les possibilités microscopiques', 'is_correct' => true],
                            ['choice_text' => 'La masse molaire devient nulle', 'is_correct' => false],
                            ['choice_text' => 'Les molécules cessent d’exister', 'is_correct' => false],
                            ['choice_text' => 'La température n’a aucun rôle thermodynamique', 'is_correct' => false],
                        ],
                        'explanation' => 'La phase gazeuse possède généralement beaucoup plus de configurations accessibles que les phases condensées.',
                    ],

                    [
                        'question' => 'Pourquoi une transition de phase réversible contribue-t-elle à la définition de l’entropie ?',
                        'choices' => [
                            ['choice_text' => Elle fournit un processus réversible pratique permettant de relier chaleur et entropie', 'is_correct' => true],
                            ['choice_text' => 'Les changements d’état violent le deuxième principe', 'is_correct' => false],
                            ['choice_text' => 'Une transition réversible ne transfère jamais de chaleur', 'is_correct' => false],
                            ['choice_text' => 'La phase n’influence pas l’entropie', 'is_correct' => false],
                        ],
                        'explanation' => 'La chaleur latente réversible à température constante permet d’évaluer directement une variation d’entropie.',
                    ],

                    [
                        'question' => 'Quel phénomène est directement associé à la coexistence de deux phases à l’équilibre ?',
                        'choices' => [
                            ['choice_text' => 'L’égalité appropriée des potentiels chimiques des phases', 'is_correct' => true],
                            ['choice_text' => 'Une vitesse moléculaire nécessairement nulle', 'is_correct' => false],
                            ['choice_text' => 'Une énergie interne identique à zéro', 'is_correct' => false],
                            ['choice_text' => 'Une pression toujours nulle', 'is_correct' => false],
                        ],
                        'explanation' => 'À l’équilibre de phase, les potentiels chimiques des phases coexistantes sont égaux.',
                    ],
                ],
            ],

            // ============================================================
            // QUIZ 5 — Machines thermiques avancées
            // ============================================================

            [
                'title' => 'Machines thermiques et cycles avancés',
                'description' => 'Analyse des performances des cycles moteurs et frigorifiques et des limites thermodynamiques.',
                'questions' => [

                    [
                        'question' => 'Le rendement maximal d’une machine thermique réversible fonctionnant entre deux températures Th et Tc est...',
                        'choices' => [
                            ['choice_text' => 'η = 1 - Tc/Th', 'is_correct' => true],
                            ['choice_text' => 'η = 1 - Th/Tc', 'is_correct' => false],
                            ['choice_text' => 'η = Tc/Th', 'is_correct' => false],
                            ['choice_text' => 'η = Th - Tc', 'is_correct' => false],
                        ],
                        'explanation' => 'Le rendement de Carnot est ηC = 1 - Tc/Th avec les températures absolues.',
                    ],

                    [
                        'question' => 'Pourquoi les températures doivent-elles être exprimées en kelvins dans le rendement de Carnot ?',
                        'choices' => [
                            ['choice_text' => La relation thermodynamique utilise la température absolue', 'is_correct' => true],
                            ['choice_text' => 'Le degré Celsius est une unité d’énergie', 'is_correct' => false],
                            ['choice_text' => 'Les températures Celsius sont toujours négatives dans les moteurs', 'is_correct' => false],
                            ['choice_text' => 'Le rendement est indépendant de toute température', 'is_correct' => false],
                        ],
                        'explanation' => 'Le rapport Tc/Th doit être construit à partir des températures absolues.',
                    ],

                    [
                        'question' => 'Pour une même température chaude, comment évolue le rendement de Carnot lorsque Tc diminue ?',
                        'choices' => [
                            ['choice_text' => 'Il augmente', 'is_correct' => true],
                            ['choice_text' => 'Il diminue', 'is_correct' => false],
                            ['choice_text' => 'Il reste constant', 'is_correct' => false],
                            ['choice_text' => 'Il devient nécessairement nul', 'is_correct' => false],
                        ],
                        'explanation' => 'ηC = 1 - Tc/Th. Une diminution de Tc augmente donc le rendement maximal.',
                    ],

                    [
                        'question' => 'Dans un cycle moteur réel, pourquoi le rendement effectif est-il inférieur au rendement idéal associé aux mêmes températures extrêmes ?',
                        'choices' => [
                            ['choice_text' => 'Les irréversibilités, pertes thermiques et mécaniques réduisent les performances', 'is_correct' => true],
                            ['choice_text' => 'La conservation de l’énergie ne s’applique plus au moteur', 'is_correct' => false],
                            ['choice_text' => 'Le moteur réel fonctionne sans source froide', 'is_correct' => false],
                            ['choice_text' => 'La température n’intervient pas dans le rendement', 'is_correct' => false],
                        ],
                        'explanation' => 'Les processus réels génèrent de l’entropie et introduisent des pertes qui diminuent le rendement.',
                    ],

                    [
                        'question' => 'Un moteur reçoit 2 MJ de chaleur et produit 500 kJ de travail. Quel est son rendement ?',
                        'choices' => [
                            ['choice_text' => '25 %', 'is_correct' => true],
                            ['choice_text' => '40 %', 'is_correct' => false],
                            ['choice_text' => '50 %', 'is_correct' => false],
                            ['choice_text' => '75 %', 'is_correct' => false],
                        ],
                        'explanation' => 'η = W/Qh = 0,5 MJ / 2 MJ = 0,25 = 25 %.',
                    ],

                    [
                        'question' => 'Pour une pompe à chaleur, le COP chauffage est défini comme le rapport...',
                        'choices' => [
                            ['choice_text' => 'Qh/W', 'is_correct' => true],
                            ['choice_text' => 'W/Qh', 'is_correct' => false],
                            ['choice_text' => 'Qc/Qh', 'is_correct' => false],
                            ['choice_text' => 'Qh + W', 'is_correct' => false],
                        ],
                        'explanation' => 'Le COP chauffage mesure la chaleur fournie à la source chaude par unité de travail consommé.',
                    ],

                    [
                        'question' => 'Pour un réfrigérateur idéal de Carnot, quel est le COP lorsque Th = 300 K et Tc = 270 K ?',
                        'choices' => [
                            ['choice_text' => '9', 'is_correct' => true],
                            ['choice_text' => '10', 'is_correct' => false],
                            ['choice_text' => '0,9', 'is_correct' => false],
                            ['choice_text' => '1,11', 'is_correct' => false],
                        ],
                        'explanation' => 'COPf = Tc/(Th - Tc) = 270/(300 - 270) = 9.',
                    ],

                    [
                        'question' => 'Pourquoi le COP d’un réfrigérateur peut-il être supérieur à 1 ?',
                        'choice_text' => 'Parce qu’il mesure une chaleur transférée par rapport au travail fourni, et non une conversion intégrale de chaleur en travail', 
                    ],

                    [
                        'question' => 'Dans un cycle thermodynamique représenté sur un diagramme P-V, pourquoi l’aire enfermée est-elle importante ?',
                        'choices' => [
                            ['choice_text' => 'Elle représente le travail net du cycle selon la convention choisie', 'is_correct' => true],
                            ['choice_text' => 'Elle donne directement l’entropie absolue', 'is_correct' => false],
                            ['choice_text' => 'Elle représente toujours la chaleur rejetée uniquement', 'is_correct' => false],
                            ['choice_text' => 'Elle correspond à la température maximale', 'is_correct' => false],
                        ],
                        'explanation' => 'Le travail cyclique s’obtient par W = ∮P dV, qui correspond géométriquement à l’aire orientée du cycle.',
                    ],

                    [
                        'question' => 'Pourquoi les cycles réels utilisent-ils parfois des étapes de régénération ou de récupération thermique ?',
                        'choices' => [
                            ['choice_text' => 'Pour récupérer une partie de l’énergie thermique disponible et améliorer l’efficacité globale', 'is_correct' => true],
                            ['choice_text' => 'Pour supprimer la conservation de l’énergie', 'is_correct' => false],
                            ['choice_text' => 'Pour rendre toute transformation parfaitement réversible', 'is_correct' => false],
                            ['choice_text' => 'Pour réduire nécessairement la température chaude à zéro', 'is_correct' => false],
                        ],
                        'explanation' => 'La récupération thermique peut réduire les besoins énergétiques externes et améliorer les performances du cycle réel.',
                    ],
                ],
            ],

            // ============================================================
            // QUIZ 6 — Échangeurs et conduction
            // ============================================================

            [
                'title' => 'Transferts thermiques et échangeurs',
                'description' => 'Analyse des résistances thermiques, de la conduction, de la convection et des échangeurs de chaleur.',
                'questions' => [

                    [
                        'question' => 'Pour une paroi plane homogène, quelle relation donne approximativement le flux thermique conductif en régime stationnaire ?',
                        'choices' => [
                            ['choice_text' => Φ = kAΔT/L', 'is_correct' => true],
                            ['choice_text' => 'Φ = kLΔT/A', 'is_correct' => false],
                            ['choice_text' => 'Φ = AΔT/(kL)', 'is_correct' => false],
                            ['choice_text' => 'Φ = kA/(LΔT)', 'is_correct' => false],
                        ],
                        'explanation' => 'La loi de Fourier en géométrie plane donne Φ = kAΔT/L en régime stationnaire simplifié.',
                    ],

                    [
                        'question' => 'Si l’épaisseur d’une paroi conductrice est doublée toutes choses égales par ailleurs, le flux thermique conductif devient...',
                        'choices' => [
                            ['choice_text' => 'Deux fois plus faible', 'is_correct' => true],
                            ['choice_text' => 'Deux fois plus grand', 'is_correct' => false],
                            ['choice_text' => 'Quatre fois plus grand', 'is_correct' => false],
                            ['choice_text' => 'Inchangé', 'is_correct' => false],
                        ],
                        'explanation' => 'Le flux est inversement proportionnel à l’épaisseur L.',
                    ],

                    [
                        'question' => 'Pourquoi une grande conductivité thermique réduit-elle la résistance thermique d’une paroi ?',
                        'choices' => [
                            ['choice_text' => Une conductivité élevée facilite le transport de chaleur', 'is_correct' => true],
                            ['choice_text' => 'Elle empêche toute circulation thermique', 'is_correct' => false],
                            ['choice_text' => 'Elle augmente automatiquement l’épaisseur', 'is_correct' => false],
                            ['choice_text' => 'Elle rend le matériau parfaitement isolant', 'is_correct' => false],
                        ],
                        'explanation' => 'Pour une paroi plane, Rth = L/(kA), donc une grande valeur de k réduit la résistance thermique.',
                    ],

                    [
                        'question' => 'Dans la convection, le flux thermique de surface est souvent modélisé par quelle loi ?',
                        'choices' => [
                            ['choice_text' => 'Φ = hA(Ts - T∞)', 'is_correct' => true],
                            ['choice_text' => 'Φ = h/(A(Ts - T∞))', 'is_correct' => false],
                            ['choice_text' => 'Φ = kL(Ts - T∞)', 'is_correct' => false],
                            ['choice_text' => 'Φ = A/(h(Ts - T∞))', 'is_correct' => false],
                        ],
                        'explanation' => 'La loi de Newton du refroidissement utilise un coefficient de convection h : Φ = hA(Ts - T∞).',
                    ],

                    [
                        'question' => 'Pourquoi augmenter la surface d’un échangeur peut-elle améliorer le transfert thermique ?',
                        'choices' => [
                            ['choice_text' => La surface d’échange intervient directement dans le transfert de chaleur', 'is_correct' => true],
                            ['choice_text' => 'La surface n’a aucun rôle', 'is_correct' => false],
                            ['choice_text' => 'Elle réduit automatiquement la température du fluide à zéro', 'is_correct' => false],
                            ['choice_text' => 'Elle supprime toute résistance thermique', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans de nombreux modèles, le transfert thermique est proportionnel à la surface disponible.',
                    ],

                    [
                        'question' => 'Pourquoi le rayonnement thermique devient-il particulièrement important à haute température ?',
                        'choices' => [
                            ['choice_text' => 'La puissance radiative émise augmente fortement avec la température absolue', 'is_correct' => true],
                            ['choice_text' => 'Le rayonnement est indépendant de la température', 'is_correct' => false],
                            ['choice_text' => 'La conduction devient impossible', 'is_correct' => false],
                            ['choice_text' => 'La masse du corps augmente rapidement', 'is_correct' => false],
                        ],
                        'explanation' => 'Pour un corps noir idéal, la puissance radiative varie comme T⁴ selon la loi de Stefan-Boltzmann.',
                    ],

                    [
                        'question' => 'Une surface échange du rayonnement avec un environnement à température plus basse. Le transfert radiatif net est généralement...',
                        'choices' => [
                            ['choice_text' => 'Orienté du corps chaud vers l’environnement froid', 'is_correct' => true],
                            ['choice_text' => 'Orienté uniquement du froid vers le chaud', 'is_correct' => false],
                            ['choice_text' => 'Toujours nul quelle que soit la température', 'is_correct' => false],
                            ['choice_text' => 'Indépendant des propriétés radiatives', 'is_correct' => false],
                        ],
                        'explanation' => 'Le transfert radiatif net est dirigé du corps à température radiative plus élevée vers l’environnement plus froid.',
                    ],

                    [
                        'question' => 'Pourquoi les échangeurs à contre-courant sont-ils souvent thermiquement avantageux ?',
                        'choices' => [
                            ['choice_text' => Ils peuvent maintenir une différence de température moyenne favorable sur une plus grande partie de l’échangeur', 'is_correct' => true],
                            ['choice_text' => 'Ils empêchent toute conduction', 'is_correct' => false],
                            ['choice_text' => 'Ils imposent toujours la même température aux deux fluides', 'is_correct' => false],
                            ['choice_text' => 'Ils suppriment toute perte de charge', 'is_correct' => false],
                        ],
                        'explanation' => 'La configuration à contre-courant permet souvent une meilleure utilisation du gradient thermique disponible.',
                    ],

                    [
                        'question' => 'Pourquoi plusieurs résistances thermiques en série peuvent-elles être additionnées dans un modèle simple ?',
                        'choices' => [
                            ['choice_text' => Elles sont traversées successivement par le même flux thermique stationnaire', 'is_correct' => true],
                            ['choice_text' => 'Chaque résistance reçoit un flux différent nécessairement', 'is_correct' => false],
                            ['choice_text' => 'La température est identique de part et d’autre de toutes les résistances', 'is_correct' => false],
                            ['choice_text' => 'La résistance thermique est toujours sans relation avec la géométrie', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans un réseau thermique en série idéal, le même flux traverse successivement les résistances, qui s’additionnent.',
                    ],

                    [
                        'question' => 'Pourquoi une interface entre deux matériaux peut-elle ajouter une résistance thermique de contact ?',
                        'choices' => [
                            ['choice_text' => Les surfaces réelles ne sont jamais parfaitement en contact et peuvent emprisonner de l’air ou présenter des micro-irrégularités', 'is_correct' => true],
                            ['choice_text' => 'Les deux matériaux possèdent toujours exactement la même conductivité', 'is_correct' => false],
                            ['choice_text' => 'Une interface ne peut jamais influencer le transfert', 'is_correct' => false],
                            ['choice_text' => 'La température devient automatiquement uniforme à l’interface', 'is_correct' => false],
                        ],
                        'explanation' => 'Les rugosités, oxydes, faibles contacts réels et couches intermédiaires peuvent créer une résistance thermique supplémentaire.',
                    ],
                ],
            ],

            // ============================================================
            // QUIZ 7 — Potentiels et fonctions thermodynamiques
            // ============================================================

            [
                'title' => 'Fonctions thermodynamiques et potentiels',
                'description' => 'Introduction avancée à l’enthalpie, à l’énergie libre de Helmholtz et à l’énergie libre de Gibbs.',
                'questions' => [

                    [
                        'question' => 'Quelle définition de l’enthalpie est correcte ?',
                        'choices' => [
                            ['choice_text' => 'H = U + PV', 'is_correct' => true],
                            ['choice_text' => 'H = U - PV', 'is_correct' => false],
                            ['choice_text' => 'H = PV/U', 'is_correct' => false],
                            ['choice_text' => 'H = U + P/V', 'is_correct' => false],
                        ],
                        'explanation' => 'L’enthalpie est définie par H = U + PV.',
                    ],

                    [
                        'question' => 'Pourquoi l’enthalpie est-elle particulièrement utile dans les systèmes ouverts en régime stationnaire ?',
                        'choices' => [
                            ['choice_text' => Elle regroupe l’énergie interne et le travail d’écoulement associé au terme PV', 'is_correct' => true],
                            ['choice_text' => 'Elle remplace toujours l’énergie cinétique', 'is_correct' => false],
                            ['choice_text' => 'Elle est uniquement définie pour les solides', 'is_correct' => false],
                            ['choice_text' => 'Elle supprime tous les échanges de chaleur', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans les écoulements, l’enthalpie apparaît naturellement dans le bilan énergétique en raison du travail de pression nécessaire pour faire entrer et sortir la matière.',
                    ],

                    [
                        'question' => 'Pour un gaz parfait, quelle approximation est couramment utilisée pour la variation d’enthalpie ?',
                        'choices' => [
                            ['choice_text' => 'ΔH = nCpΔT', 'is_correct' => true],
                            ['choice_text' => 'ΔH = nCvΔT', 'is_correct' => false],
                            ['choice_text' => 'ΔH = PV/T', 'is_correct' => false],
                            ['choice_text' => 'ΔH = nR/T', 'is_correct' => false],
                        ],
                        'explanation' => 'Pour un gaz parfait avec Cp constant, ΔH = nCpΔT.',
                    ],

                    [
                        'question' => 'Quelle fonction thermodynamique est définie par F = U - TS ?',
                        'choices' => [
                            ['choice_text' => L’énergie libre de Helmholtz', 'is_correct' => true],
                            ['choice_text' => 'L’énergie libre de Gibbs', 'is_correct' => false],
                            ['choice_text' => 'L’enthalpie', 'is_correct' => false],
                            ['choice_text' => 'L’énergie cinétique', 'is_correct' => false],
                        ],
                        'explanation' => 'La fonction de Helmholtz est F = U - TS.',
                    ],

                    [
                        'question' => 'Quelle fonction thermodynamique est définie par G = H - TS ?',
                        'choices' => [
                            ['choice_text' => 'L’énergie libre de Gibbs', 'is_correct' => true],
                            ['choice_text' => 'L’énergie libre de Helmholtz', 'is_correct' => false],
                            ['choice_text' => 'L’énergie interne', 'is_correct' => false],
                            ['choice_text' => 'La capacité thermique', 'is_correct' => false],
                        ],
                        'explanation' => 'L’énergie libre de Gibbs est G = H - TS.',
                    ],

                    [
                        'question' => 'À température et pression constantes, quel critère indique le sens spontané d’une transformation pour un système fermé approprié ?',
                        'choices' => [
                            ['choice_text' => 'Une diminution de l’énergie libre de Gibbs', 'is_correct' => true],
                            ['choice_text' => 'Une augmentation obligatoire de G', 'is_correct' => false],
                            ['choice_text' => 'Une variation nulle de U dans tous les cas', 'is_correct' => false],
                            ['choice_text' => 'Une température nécessairement décroissante', 'is_correct' => false],
                        ],
                        'explanation' => 'À T et P constantes, une transformation spontanée est associée à ΔG < 0, tandis que ΔG = 0 caractérise l’équilibre.',
                    ],

                    [
                        'question' => 'Pourquoi l’énergie libre de Gibbs est-elle particulièrement utile en chimie et thermodynamique des phases ?',
                        'choices' => [
                            ['choice_text' => Elle permet d’analyser spontanéité et équilibre à température et pression constantes', 'is_correct' => true],
                            ['choice_text' => 'Elle remplace toujours l’énergie interne', 'is_correct' => false],
                            ['choice_text' => 'Elle est indépendante de la température', 'is_correct' => false],
                            ['choice_text' => 'Elle n’est définie que pour les gaz parfaits', 'is_correct' => false],
                        ],
                        'explanation' => 'Le potentiel de Gibbs est naturellement adapté aux conditions de température et pression constantes.',
                    ],

                    [
                        'question' => 'À température et volume constants, quel potentiel est particulièrement pertinent pour la spontanéité ?',
                        'choices' => [
                            ['choice_text' => 'L’énergie libre de Helmholtz', 'is_correct' => true],
                            ['choice_text' => 'L’enthalpie uniquement', 'is_correct' => false],
                            ['choice_text' => 'Le volume', 'is_correct' => false],
                            ['choice_text' => 'Le travail de frontière uniquement', 'is_correct' => false],
                        ],
                        'explanation' => 'À T et V constants, l’énergie libre de Helmholtz est le potentiel thermodynamique approprié.',
                    ],

                    [
                        'question' => 'Pourquoi l’équilibre thermodynamique à température et pression constantes correspond-il à un minimum de G dans les conditions appropriées ?',
                        'choices' => [
                            ['choice_text' => Une variation spontanée tend à diminuer G jusqu’à atteindre l’état d’équilibre', 'is_correct' => true],
                            ['choice_text' => 'G doit toujours être maximal à l’équilibre', 'is_correct' => false],
                            ['choice_text' => 'G est identique à la température', 'is_correct' => false],
                            ['choice_text' => 'L’équilibre impose toujours G = 0', 'is_correct' => false],
                        ],
                        'explanation' => 'À T et P constantes, le système évolue spontanément vers les états de plus faible G jusqu’à l’équilibre.',
                    ],

                    [
                        'question' => 'Quelle relation relie l’énergie libre de Gibbs à la chaleur et à l’entropie pour une transformation à pression constante, dans certaines conditions ?',
                        'choices' => [
                            ['choice_text' => 'ΔG = ΔH - TΔS', 'is_correct' => true],
                            ['choice_text' => 'ΔG = ΔH + TΔS', 'is_correct' => false],
                            ['choice_text' => 'ΔG = TΔH - ΔS', 'is_correct' => false],
                            ['choice_text' => 'ΔG = ΔH/T - ΔS', 'is_correct' => false],
                        ],
                        'explanation' => 'À température constante, G = H - TS conduit à ΔG = ΔH - TΔS.',
                    ],
                ],
            ],

            // ============================================================
            // QUIZ 8 — Analyse thermodynamique intégrée
            // ============================================================

            [
                'title' => 'Analyse thermodynamique intégrée',
                'description' => 'Résolution de problèmes combinant bilans énergétiques, entropie, transferts et performances thermodynamiques.',
                'questions' => [

                    [
                        'question' => 'Un gaz parfait subit une compression adiabatique réversible. Quel bilan énergétique explique l’augmentation de sa température ?',
                        'choices' => [
                            ['choice_text' => Le travail reçu augmente son énergie interne puisque Q = 0', 'is_correct' => true],
                            ['choice_text' => 'La chaleur reçue augmente alors que Q = 0', 'is_correct' => false],
                            ['choice_text' => 'L’énergie interne diminue nécessairement', 'is_correct' => false],
                            ['choice_text' => 'Le gaz absorbe spontanément de la chaleur depuis le vide', 'is_correct' => false],
                        ],
                        'explanation' => 'Pour Q = 0, le travail effectué sur le gaz augmente U. Pour un gaz parfait, cela augmente T.',
                    ],

                    [
                        'question' => 'Un moteur reçoit 5 MJ de chaleur et rejette 3,5 MJ vers la source froide. Quel travail net fournit-il ?',
                        'choices' => [
                            ['choice_text' => '1,5 MJ', 'is_correct' => true],
                            ['choice_text' => '8,5 MJ', 'is_correct' => false],
                            ['choice_text' => '3,5 MJ', 'is_correct' => false],
                            ['choice_text' => '0,7 MJ', 'is_correct' => false],
                        ],
                        'explanation' => 'Sur un cycle, ΔU = 0 et W = Qh - Qc = 5 - 3,5 = 1,5 MJ.',
                    ],

                    [
                        'question' => 'Le rendement du moteur précédent est...',
                        'choices' => [
                            ['choice_text' => '30 %', 'is_correct' => true],
                            ['choice_text' => '70 %', 'is_correct' => false],
                            ['choice_text' => '42,9 %', 'is_correct' => false],
                            ['choice_text' => '35 %', 'is_correct' => false],
                        ],
                        'explanation' => 'η = W/Qh = 1,5/5 = 0,30, soit 30 %.',
                    ],

                    [
                        'question' => 'Un échange thermique de 1000 J se produit entre une source chaude à 500 K et une source froide à 300 K. Quelle est la variation d’entropie totale des deux sources dans l’idéal où les températures restent constantes ?',
                        'choices' => [
                            ['choice_text' => '1000/300 - 1000/500 J/K', 'is_correct' => true],
                            ['choice_text' => '1000/500 - 1000/300 J/K', 'is_correct' => false],
                            ['choice_text' => '1000 × (500 - 300) J/K', 'is_correct' => false],
                            ['choice_text' => '0 J/K', 'is_correct' => false],
                        ],
                        'explanation' => 'La source chaude perd 1000 J : ΔSchaud = -1000/500. La source froide reçoit 1000 J : ΔSfroid = 1000/300. La somme est positive.',
                    ],

                    [
                        'question' => 'Pourquoi le résultat précédent confirme-t-il l’irréversibilité du transfert direct entre les deux sources ?',
                        'choices' => [
                            ['choice_text' => 'La variation totale d’entropie est positive', 'is_correct' => true],
                            ['choice_text' => 'La variation totale d’entropie est négative', 'is_correct' => false],
                            ['choice_text' => 'La chaleur totale n’est pas conservée', 'is_correct' => false],
                            ['choice_text' => 'La température absolue devient nulle', 'is_correct' => false],
                        ],
                        'explanation' => 'Un transfert à travers une différence finie de température produit de l’entropie, donc ΔStot > 0.',
                    ],

                    [
                        'question' => 'Dans un échangeur adiabatique, pourquoi la chaleur perdue par le fluide chaud peut-elle être égale à la chaleur gagnée par le fluide froid ?',
                        'choices' => [
                            ['choice_text' => Parce que l’échangeur ne reçoit ni ne rejette de chaleur vers son environnement', 'is_correct' => true],
                            ['choice_text' => 'Parce que les deux fluides doivent avoir la même température partout', 'is_correct' => false],
                            ['choice_text' => 'Parce que leur masse doit être identique', 'is_correct' => false],
                            ['choice_text' => 'Parce que l’entropie est toujours conservée', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans un échangeur adiabatique vis-à-vis de l’extérieur, le bilan énergétique global relie les variations d’enthalpie des deux fluides.',
                    ],

                    [
                        'question' => 'Pourquoi le calcul d’un rendement ou d’un COP nécessite-t-il une définition précise du système et des flux d’énergie ?',
                        'choices' => [
                            ['choice_text' => 'Parce que le numérateur et le dénominateur dépendent de ce qui est considéré comme entrée, sortie et travail utile', 'is_correct' => true],
                            ['choice_text' => 'Parce que le rendement est toujours universellement défini de la même façon', 'is_correct' => false],
                            ['choice_text' => 'Parce que les flux thermiques n’ont aucune unité', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’un COP est toujours égal à un rendement', 'is_correct' => false],
                        ],
                        'explanation' => 'Une définition correcte du périmètre du système est essentielle pour éviter de comparer des grandeurs énergétiques qui n’ont pas la même signification.',
                    ],

                    [
                        'question' => 'Pourquoi une production d’entropie élevée signale-t-elle généralement une faible efficacité exergétique ?',
                        'choices' => [
                            ['choice_text' => 'Les irréversibilités détruisent une partie du potentiel de produire du travail utile', 'is_correct' => true],
                            ['choice_text' => 'L’entropie créée devient directement de l’énergie utile', 'is_correct' => false],
                            ['choice_text' => 'Une forte entropie garantit un rendement maximal', 'is_correct' => false],
                            ['choice_text' => 'L’exergie est indépendante de toute irréversibilité', 'is_correct' => false],
                        ],
                        'explanation' => 'La destruction d’exergie est liée à la génération d’entropie par la relation de Gouy-Stodola dans le cadre approprié.',
                    ],

                    [
                        'question' => 'Pourquoi une analyse thermodynamique professionnelle doit-elle souvent combiner premier principe, deuxième principe et propriétés matérielles ?',
                        'choices' => [
                            ['choice_text' => Le premier principe donne le bilan énergétique, le deuxième le sens et les limites, et les propriétés décrivent le comportement du fluide ou matériau', 'is_correct' => true],
                            ['choice_text' => 'Un seul principe suffit toujours à décrire tous les systèmes', 'is_correct' => false],
                            ['choice_text' => 'Les propriétés matérielles ne jouent aucun rôle', 'is_correct' => false],
                            ['choice_text' => 'Le deuxième principe remplace toutes les équations d’état', 'is_correct' => false],
                        ],
                        'explanation' => 'Une analyse réaliste nécessite généralement un bilan d’énergie, une évaluation des irréversibilités et des propriétés thermophysiques adaptées au matériau.',
                    ],
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
                    'duration' => 10,
                    'passing_score' => 50,
                    'total_marks' => 10,
                    'is_active' => true,
                    'difficulty' => 'Advanced',
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

                // Mélange des objets complets pour conserver
                // is_correct avec la réponse correspondante.
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