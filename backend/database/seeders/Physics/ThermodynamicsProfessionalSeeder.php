<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class ThermodynamicsProfessionalSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'thermodynamics')->firstOrFail();

        $quizzes = [

            // ============================================================
            // QUIZ 1 — Thermodynamique classique avancée
            // ============================================================

            [
                'title' => 'Thermodynamique classique et équations d’état',
                'description' => 'Analyse professionnelle des systèmes thermodynamiques, équations d’état et transformations réelles.',
                'questions' => [

                    [
                        'question' => 'Pour un système simple compressible fermé, quelles variables sont généralement suffisantes pour déterminer l’état thermodynamique d’un gaz pur à l’équilibre ?',
                        'choices' => [
                            ['choice_text' => 'Deux variables d’état intensives indépendantes', 'is_correct' => true],
                            ['choice_text' => 'Une seule variable toujours', 'is_correct' => false],
                            ['choice_text' => 'Toutes les variables macroscopiques simultanément', 'is_correct' => false],
                            ['choice_text' => 'Uniquement la masse totale', 'is_correct' => false],
                        ],
                        'explanation' => 'Pour une substance pure simple compressible, deux variables intensives indépendantes suffisent généralement à fixer l’état.',
                    ],

                    [
                        'question' => 'Pourquoi l’équation d’état d’un gaz réel peut-elle nécessiter des termes supplémentaires par rapport à PV = nRT ?',
                        'choices' => [
                            ['choice_text' => Les interactions moléculaires et le volume propre des particules ne sont pas négligeables', 'is_correct' => true],
                            ['choice_text' => 'La constante R change avec la pression', 'is_correct' => false],
                            ['choice_text' => 'La température absolue cesse d’être définie', 'is_correct' => false],
                            ['choice_text' => 'La conservation de la masse devient invalide', 'is_correct' => false],
                        ],
                        'explanation' => 'Le gaz parfait néglige les interactions et le volume moléculaire. Les modèles réels corrigent ces approximations.',
                    ],

                    [
                        'question' => 'Quelle forme de l’équation d’état de Van der Waals est correcte pour une quantité n de gaz ?',
                        'choices' => [
                            ['choice_text' => '(P + an²/V²)(V - nb) = nRT', 'is_correct' => true],
                            ['choice_text' => '(P - an²/V²)(V + nb) = nRT', 'is_correct' => false],
                            ['choice_text' => 'P(V + nb) = nRT + a', 'is_correct' => false],
                            ['choice_text' => '(P + aV²)(V - b) = RT', 'is_correct' => false],
                        ],
                        'explanation' => 'L’équation de Van der Waals corrige l’attraction moléculaire et le volume propre des particules.',
                    ],

                    [
                        'question' => 'Pourquoi le point critique est-il important pour l’étude d’un fluide réel ?',
                        'choices' => [
                            ['choice_text' => Il marque la disparition de la distinction entre liquide et vapeur', 'is_correct' => true],
                            ['choice_text' => 'Il correspond toujours au zéro absolu', 'is_correct' => false],
                            ['choice_text' => 'Il correspond à une pression toujours nulle', 'is_correct' => false],
                            ['choice_text' => 'Il indique que le fluide devient idéal à toute pression', 'is_correct' => false],
                        ],
                        'explanation' => 'Au point critique, les propriétés des phases liquide et vapeur deviennent indiscernables.',
                    ],

                    [
                        'question' => 'Pourquoi les diagrammes P-V, T-S et H-S sont-ils utilisés conjointement dans l’ingénierie thermodynamique ?',
                        'choices' => [
                            ['choice_text' => Chaque diagramme met en évidence différentes propriétés et transformations du système', 'is_correct' => true],
                            ['choice_text' => 'Ils contiennent exactement la même information visuelle', 'is_correct' => false],
                            ['choice_text' => 'Ils remplacent toutes les propriétés thermodynamiques', 'is_correct' => false],
                            ['choice_text' => 'Ils servent uniquement aux gaz parfaits', 'is_correct' => false],
                        ],
                        'explanation' => 'Chaque représentation facilite l’analyse d’un aspect différent : travail sur P-V, entropie sur T-S, transformations d’écoulement sur H-S.',
                    ],

                    [
                        'question' => 'Pour une substance pure compressible simple, pourquoi l’enthalpie peut-elle être utilisée comme fonction d’état ?',
                        'choices' => [
                            ['choice_text' => Elle est définie à partir de fonctions d’état U, P et V', 'is_correct' => true],
                            ['choice_text' => 'Elle dépend uniquement du chemin thermodynamique', 'is_correct' => false],
                            ['choice_text' => 'Elle n’est définie que pour les gaz idéaux', 'is_correct' => false],
                            ['choice_text' => 'Elle représente uniquement la chaleur transférée', 'is_correct' => false],
                        ],
                        'explanation' => 'H = U + PV et U, P et V sont des variables d’état ; H est donc également une fonction d’état.',
                    ],

                    [
                        'question' => 'Pourquoi une grandeur intensive ne dépend-elle pas de la quantité totale de matière du système ?',
                        'choices' => [
                            ['choice_text' => Elle ne varie pas lorsqu’on divise un système homogène en sous-systèmes identiques', 'is_correct' => true],
                            ['choice_text' => 'Elle est toujours égale à zéro', 'is_correct' => false],
                            ['choice_text' => 'Elle possède nécessairement des unités SI fondamentales', 'is_correct' => false],
                            ['choice_text' => 'Elle ne peut jamais être mesurée', 'is_correct' => false],
                        ],
                        'explanation' => 'La température, la pression et la masse volumique sont des exemples de propriétés intensives.',
                    ],

                    [
                        'question' => 'Pourquoi le volume est-il une grandeur extensive ?',
                        'choices' => [
                            ['choice_text' => Il dépend de la quantité de matière du système', 'is_correct' => true],
                            ['choice_text' => 'Il est indépendant de la taille du système', 'is_correct' => false],
                            ['choice_text' => 'Il n’a aucune unité', 'is_correct' => false],
                            ['choice_text' => 'Il est toujours constant', 'is_correct' => false],
                        ],
                        'explanation' => 'Le volume total double lorsque deux systèmes identiques sont réunis.',
                    ],

                    [
                        'question' => 'Pourquoi la température et la pression ne sont-elles pas toujours des variables indépendantes dans une phase monophasée ?',
                        'choices' => [
                            ['choice_text' => Une équation d’état relie les variables d’état du système', 'is_correct' => true],
                            ['choice_text' => 'Elles représentent toujours la même grandeur', 'is_correct' => false],
                            ['choice_text' => 'La pression est une variable extensive', 'is_correct' => false],
                            ['choice_text' => 'La température ne peut être définie qu’à volume constant', 'is_correct' => false],
                        ],
                        'explanation' => 'Une équation d’état ou des relations thermodynamiques imposent des contraintes entre les variables.',
                    ],

                    [
                        'question' => 'Pourquoi la modélisation d’un fluide réel doit-elle être validée sur la plage de fonctionnement réelle ?',
                        'choices' => [
                            ['choice_text' => 'La précision d’un modèle peut dépendre fortement de la température et de la pression', 'is_correct' => true],
                            ['choice_text' => 'Un modèle est nécessairement exact partout', 'is_correct' => false],
                            ['choice_text' => 'Les propriétés thermodynamiques ne dépendent jamais des conditions', 'is_correct' => false],
                            ['choice_text' => 'La validation n’a qu’un rôle administratif', 'is_correct' => false],
                        ],
                        'explanation' => 'Un modèle ajusté dans une région du diagramme de phase peut être moins fiable ailleurs.',
                    ],
                ],
            ],

            // ============================================================
            // QUIZ 2 — Exergie et efficacité
            // ============================================================

            [
                'title' => 'Exergie, irréversibilités et efficacité',
                'description' => 'Analyse professionnelle de la qualité de l’énergie, de l’exergie et des pertes dues aux irréversibilités.',
                'questions' => [

                    [
                        'question' => 'Que représente l’exergie d’un système par rapport à son environnement de référence ?',
                        'choices' => [
                            ['choice_text' => Le travail maximal théorique récupérable lorsque le système évolue réversiblement vers l’équilibre avec l’environnement', 'is_correct' => true],
                            ['choice_text' => 'L’énergie totale du système sans référence à l’environnement', 'is_correct' => false],
                            ['choice_text' => 'La chaleur toujours disponible à température constante', 'is_correct' => false],
                            ['choice_text' => 'La masse thermodynamique du système', 'is_correct' => false],
                        ],
                        'explanation' => 'L’exergie mesure le potentiel maximal de produire du travail utile relativement à un environnement donné.',
                    ],

                    [
                        'question' => 'Quelle relation relie la destruction d’exergie à la génération d’entropie dans le cadre du théorème de Gouy-Stodola ?',
                        'choices' => [
                            ['choice_text' => Ex_destroyed = T0 S_gen', 'is_correct' => true],
                            ['choice_text' => 'Ex_destroyed = S_gen/T0', 'is_correct' => false],
                            ['choice_text' => 'Ex_destroyed = T0/S_gen', 'is_correct' => false],
                            ['choice_text' => 'Ex_destroyed = Q/T0', 'is_correct' => false],
                        ],
                        'explanation' => 'La destruction d’exergie vaut T0 multiplié par la génération d’entropie dans le cadre approprié.',
                    ],

                    [
                        'question' => 'Pourquoi un transfert thermique à travers une grande différence de température produit-il davantage d’irréversibilité ?',
                        'choices' => [
                            ['choice_text' => Le transfert direct à travers un gradient fini génère de l’entropie', 'is_correct' => true],
                            ['choice_text' => 'Parce que la chaleur devient négative', 'is_correct' => false],
                            ['choice_text' => 'Parce que l’énergie totale n’est plus conservée', 'is_correct' => false],
                            ['choice_text' => 'Parce que la température absolue disparaît', 'is_correct' => false],
                        ],
                        'explanation' => 'Une différence finie de température est une source d’irréversibilité et donc de génération d’entropie.',
                    ],

                    [
                        'question' => 'Pourquoi la destruction d’exergie est-elle toujours non négative pour un processus physique réel ?',
                        'choices' => [
                            ['choice_text' => Elle est directement liée à une production d’entropie non négative', 'is_correct' => true],
                            ['choice_text' => 'Elle dépend uniquement du volume initial', 'is_correct' => false],
                            ['choice_text' => 'Elle peut toujours être négative', 'is_correct' => false],
                            ['choice_text' => 'Elle ne dépend jamais des irréversibilités', 'is_correct' => false],
                        ],
                        'explanation' => 'Puisque S_gen ≥ 0 et T0 > 0, la destruction d’exergie est également positive ou nulle.',
                    ],

                    [
                        'question' => 'Pourquoi une source d’énergie peut-elle avoir une grande quantité d’énergie mais une exergie relativement faible ?',
                        'choices' => [
                            ['choice_text' => Une partie de cette énergie peut être peu convertible en travail utile compte tenu de l’environnement', 'is_correct' => true],
                            ['choice_text' => 'L’énergie totale n’est jamais conservée', 'is_correct' => false],
                            ['choice_text' => 'L’exergie est toujours égale à l’énergie', 'is_correct' => false],
                            ['choice_text' => 'Une faible exergie signifie que la masse est faible', 'is_correct' => false],
                        ],
                        'explanation' => 'L’exergie dépend de la qualité de l’énergie et de son écart par rapport à l’état de référence environnemental.',
                    ],

                    [
                        'question' => 'Pourquoi l’exergie est-elle un indicateur particulièrement utile pour comparer deux conceptions thermiques ?',
                        'choices' => [
                            ['choice_text' => Elle révèle où le potentiel de produire du travail utile est détruit par les irréversibilités', 'is_correct' => true],
                            ['choice_text' => 'Elle remplace toujours les bilans énergétiques', 'is_correct' => false],
                            ['choice_text' => 'Elle ne dépend jamais de l’environnement', 'is_correct' => false],
                            ['choice_text' => 'Elle mesure uniquement la température maximale', 'is_correct' => false],
                        ],
                        'explanation' => 'Une analyse énergétique peut montrer la conservation de l’énergie sans révéler où sa qualité est dégradée.',
                    ],

                    [
                        'question' => 'Dans un échangeur thermique, quelle zone est généralement responsable d’une importante destruction d’exergie ?',
                        'choices' => [
                            ['choice_text' => 'Les régions où les différences de température sont élevées', 'is_correct' => true],
                            ['choice_text' => 'Les régions où les températures sont identiques', 'is_correct' => false],
                            ['choice_text' => 'Uniquement les parois parfaitement isolées', 'is_correct' => false],
                            ['choice_text' => 'Les zones où aucun transfert n’a lieu', 'is_correct' => false],
                        ],
                        'explanation' => 'Un transfert thermique avec un grand gradient produit davantage d’entropie et donc davantage de destruction d’exergie.',
                    ],

                    [
                        'question' => 'Pourquoi réduire les pertes de charge peut-il améliorer l’efficacité énergétique d’un système à écoulement ?',
                        'choices' => [
                            ['choice_text' => Une partie du travail disponible est autrement dissipée dans les frottements fluides', 'is_correct' => true],
                            ['choice_text' => 'Les pertes de charge augmentent toujours le rendement', 'is_correct' => false],
                            ['choice_text' => 'La pression n’a aucun lien avec le travail', 'is_correct' => false],
                            ['choice_text' => 'Une perte de charge représente une création d’exergie', 'is_correct' => false],
                        ],
                        'explanation' => 'Les pertes de charge sont associées à des irréversibilités et à une consommation de disponibilité énergétique.',
                    ],

                    [
                        'question' => 'Pourquoi l’optimisation d’un système thermodynamique ne doit-elle pas viser uniquement la réduction de la consommation d’énergie ?',
                        'choices' => [
                            ['choice_text' => Une réduction énergétique apparente peut déplacer les irréversibilités sans améliorer réellement la qualité de l’énergie utilisée', 'is_correct' => true],
                            ['choice_text' => 'L’énergie n’est jamais pertinente', 'is_correct' => false],
                            ['choice_text' => 'L’exergie et l’énergie sont toujours identiques', 'is_correct' => false],
                            ['choice_text' => 'Une consommation plus faible signifie toujours une meilleure conception', 'is_correct' => false],
                        ],
                        'explanation' => 'L’exergie complète l’analyse énergétique en indiquant la qualité et la dégradation potentielle de l’énergie.',
                    ],

                    [
                        'question' => 'Dans un système idéal totalement réversible, la destruction d’exergie est...',
                        'choices' => [
                            ['choice_text' => 'Nulle', 'is_correct' => true],
                            ['choice_text' => 'Maximale', 'is_correct' => false],
                            ['choice_text' => 'Toujours égale à l’énergie interne', 'is_correct' => false],
                            ['choice_text' => 'Égale à la chaleur reçue', 'is_correct' => false],
                        ],
                        'explanation' => 'Un processus réversible ne produit pas d’entropie et ne détruit donc pas d’exergie.',
                    ],
                ],
            ],

            // ============================================================
            // QUIZ 3 — Systèmes ouverts et écoulements
            // ============================================================

            [
                'title' => 'Systèmes ouverts et machines à écoulement permanent',
                'description' => 'Bilans de masse et d’énergie pour turbines, compresseurs, pompes, buses et échangeurs.',
                'questions' => [

                    [
                        'question' => 'Dans un volume de contrôle en régime permanent avec une entrée et une sortie, le débit massique entrant est égal au débit sortant lorsque le volume de contrôle ne se remplit pas.',
                        'choices' => [
                            ['choice_text' => 'Vrai', 'is_correct' => true],
                            ['choice_text' => 'Faux', 'is_correct' => false],
                            ['choice_text' => 'Uniquement pour les liquides', 'is_correct' => false],
                            ['choice_text' => 'Uniquement pour les systèmes adiabatiques', 'is_correct' => false],
                        ],
                        'explanation' => 'En régime permanent, l’accumulation de masse dans le volume de contrôle est nulle.',
                    ],

                    [
                        'question' => 'Dans une turbine adiabatique en régime permanent, en négligeant les variations d’énergie cinétique et potentielle, le travail spécifique produit est approximativement égal à...',
                        'choices' => [
                            ['choice_text' => 'h1 - h2', 'is_correct' => true],
                            ['choice_text' => 'h2 - h1', 'is_correct' => false],
                            ['choice_text' => 'u1 - u2 uniquement', 'is_correct' => false],
                            ['choice_text' => 'P1 - P2', 'is_correct' => false],
                        ],
                        'explanation' => 'Pour une turbine adiabatique avec variations cinétique et potentielle négligeables, wt ≈ h1 - h2.',
                    ],

                    [
                        'question' => 'Dans un compresseur adiabatique en régime permanent, le travail spécifique fourni au fluide est approximativement...',
                        'choices' => [
                            ['choice_text' => 'h2 - h1', 'is_correct' => true],
                            ['choice_text' => 'h1 - h2', 'is_correct' => false],
                            ['choice_text' => 'P2 - P1 sans autre condition', 'is_correct' => false],
                            ['choice_text' => 'u1 + u2', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans un compresseur adiabatique, l’augmentation d’enthalpie est liée au travail fourni au fluide.',
                    ],

                    [
                        'question' => 'Pourquoi l’enthalpie apparaît-elle naturellement dans l’équation énergétique d’un système ouvert ?',
                        'choices' => [
                            ['choice_text' => Elle inclut l’énergie interne et le travail d’écoulement associé au terme Pv', 'is_correct' => true],
                            ['choice_text' => 'Elle est identique à la pression', 'is_correct' => false],
                            ['choice_text' => 'Elle ne dépend que de la masse', 'is_correct' => false],
                            ['choice_text' => 'Elle remplace toujours l’énergie cinétique', 'is_correct' => false],
                        ],
                        'explanation' => 'Le terme Pv représente le travail d’écoulement nécessaire pour faire traverser la frontière au fluide.',
                    ],

                    [
                        'question' => 'Dans une buse adiabatique idéale, une chute d’enthalpie peut principalement être convertie en...',
                        'choices' => [
                            ['choice_text' => 'Énergie cinétique', 'is_correct' => true],
                            ['choice_text' => 'Énergie potentielle chimique uniquement', 'is_correct' => false],
                            ['choice_text' => 'Masse', 'is_correct' => false],
                            ['choice_text' => 'Chaleur externe nécessairement', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans une buse idéale, la diminution d’enthalpie peut se traduire principalement par une augmentation de l’énergie cinétique.',
                    ],

                    [
                        'question' => 'Pourquoi la vitesse d’un fluide augmente-t-elle souvent dans une buse convergente subsonique ?',
                        'choices' => [
                            ['choice_text' => Une diminution de la section peut accompagner une accélération du fluide sous les conditions appropriées', 'is_correct' => true],
                            ['choice_text' => 'La masse du fluide disparaît', 'is_correct' => false],
                            ['choice_text' => 'La pression doit toujours augmenter dans une buse', 'is_correct' => false],
                            ['choice_text' => 'La température devient infinie', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans une buse subsonique convenablement conçue, la réduction de section peut transformer l’enthalpie en énergie cinétique.',
                    ],

                    [
                        'question' => 'Dans une pompe idéale pour un liquide incompressible, le travail spécifique dépend principalement de...',
                        'choices' => [
                            ['choice_text' => 'La variation de pression et le volume spécifique du liquide', 'is_correct' => true],
                            ['choice_text' => 'La température uniquement', 'is_correct' => false],
                            ['choice_text' => 'La masse molaire du gaz', 'is_correct' => false],
                            ['choice_text' => 'La puissance radiative', 'is_correct' => false],
                        ],
                        'explanation' => 'Pour un liquide incompressible, le travail de pompe idéal est approximativement vΔP.',
                    ],

                    [
                        'question' => 'Pourquoi les pertes de charge dans une conduite augmentent-elles avec les frottements ?',
                        'choices' => [
                            ['choice_text' => Une partie de l’énergie mécanique du fluide est dissipée sous forme interne', 'is_correct' => true],
                            ['choice_text' => 'La masse du fluide augmente toujours', 'is_correct' => false],
                            ['choice_text' => 'La pression est créée gratuitement', 'is_correct' => false],
                            ['choice_text' => 'Les frottements sont des processus parfaitement réversibles', 'is_correct' => false],
                        ],
                        'explanation' => 'Les frottements fluides sont irréversibles et entraînent une dégradation de l’énergie mécanique disponible.',
                    ],

                    [
                        'question' => 'Pourquoi une analyse de turbine réelle doit-elle comparer le rendement isentropique au comportement idéal ?',
                        'choices' => [
                            ['choice_text' => 'Le rendement isentropique quantifie l’écart entre la machine réelle et sa référence réversible idéale', 'is_correct' => true],
                            ['choice_text' => 'Il garantit une absence de pertes', 'is_correct' => false],
                            ['choice_text' => 'Il est indépendant des états d’entrée et de sortie', 'is_correct' => false],
                            ['choice_text' => 'Il est toujours supérieur à 100 %', 'is_correct' => false],
                        ],
                        'explanation' => 'Le rendement isentropique est un indicateur pratique des irréversibilités d’une turbine ou d’un compresseur.',
                    ],

                    [
                        'question' => 'Pourquoi les termes d’énergie cinétique et potentielle ne doivent-ils pas être supprimés automatiquement d’un bilan d’énergie ?',
                        'choices' => [
                            ['choice_text' => Ils peuvent devenir importants dans des buses, turbines, écoulements rapides ou grands dénivelés', 'is_correct' => true],
                            ['choice_text' => 'Ils sont toujours plus grands que l’énergie interne', 'is_correct' => false],
                            ['choice_text' => 'Ils sont toujours nuls en régime permanent', 'is_correct' => false],
                            ['choice_text' => 'Ils n’ont jamais d’unité énergétique', 'is_correct' => false],
                        ],
                        'explanation' => 'Les termes peuvent être négligeables dans certaines applications mais dominants dans d’autres.',
                    ],
                ],
            ],

            // ============================================================
            // QUIZ 4 — Cycles de puissance
            // ============================================================

            [
                'title' => 'Cycles de puissance et performance',
                'description' => 'Analyse professionnelle des cycles de Rankine, Brayton, Otto, Diesel et des stratégies d’amélioration.',
                'questions' => [

                    [
                        'question' => 'Quel cycle idéal est couramment associé aux centrales thermiques à vapeur ?',
                        'choices' => [
                            ['choice_text' => 'Le cycle de Rankine', 'is_correct' => true],
                            ['choice_text' => 'Le cycle Otto uniquement', 'is_correct' => false],
                            ['choice_text' => 'Le cycle Joule uniquement', 'is_correct' => false],
                            ['choice_text' => 'Le cycle Stirling uniquement dans tous les cas', 'is_correct' => false],
                        ],
                        'explanation' => 'Le cycle de Rankine constitue le modèle de base des centrales à vapeur.',
                    ],

                    [
                        'question' => 'Quel cycle idéal représente généralement le principe d’un moteur à allumage commandé ?',
                        'choices' => [
                            ['choice_text' => 'Le cycle d’Otto', 'is_correct' => true],
                            ['choice_text' => 'Le cycle de Rankine', 'is_correct' => false],
                            ['choice_text' => 'Le cycle de Brayton uniquement', 'is_correct' => false],
                            ['choice_text' => 'Le cycle de Carnot dans les moteurs réels', 'is_correct' => false],
                        ],
                        'explanation' => 'Le cycle Otto est un modèle idéal des moteurs à allumage commandé.',
                    ],

                    [
                        'question' => 'Quel cycle idéal est couramment utilisé pour modéliser une turbine à gaz ?',
                        'choices' => [
                            ['choice_text' => 'Le cycle de Brayton', 'is_correct' => true],
                            ['choice_text' => 'Le cycle de Rankine', 'is_correct' => false],
                            ['choice_text' => 'Le cycle Otto uniquement', 'is_correct' => false],
                            ['choice_text' => 'Le cycle de Carnot pour toute architecture réelle', 'is_correct' => false],
                        ],
                        'explanation' => 'Le cycle de Brayton représente idéalement la compression, combustion à pression quasi constante et détente dans une turbine à gaz.',
                    ],

                    [
                        'question' => 'Dans un cycle de Rankine, pourquoi utilise-t-on une pompe pour le liquide condensé avant la chaudière ?',
                        'choices' => [
                            ['choice_text' => 'Pour augmenter sa pression avant son entrée dans la chaudière', 'is_correct' => true],
                            ['choice_text' => 'Pour diminuer la pression à zéro', 'is_correct' => false],
                            ['choice_text' => 'Pour convertir directement le liquide en vapeur', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer toute énergie interne', 'is_correct' => false],
                        ],
                        'explanation' => 'La pompe augmente la pression du condensat afin de l’amener à la pression de la chaudière.',
                    ],

                    [
                        'question' => 'Pourquoi la surchauffe de la vapeur dans un cycle de Rankine peut-elle améliorer certaines performances du cycle ?',
                        'choices' => [
                            ['choice_text' => 'Elle augmente la température moyenne d’addition de chaleur et peut réduire l’humidité en sortie de turbine', 'is_correct' => true],
                            ['choice_text' => 'Elle réduit toujours le travail de turbine à zéro', 'is_correct' => false],
                            ['choice_text' => 'Elle diminue systématiquement la température d’entrée', 'is_correct' => false],
                            ['choice_text' => 'Elle supprime le besoin de condensation', 'is_correct' => false],
                        ],
                        'explanation' => 'La surchauffe peut augmenter le travail de turbine et améliorer la qualité de la vapeur en sortie.',
                    ],

                    [
                        'question' => 'Pourquoi la régénération dans un cycle de Rankine peut-elle améliorer le rendement ?',
                        'choices' => [
                            ['choice_text' => 'Elle élève la température moyenne d’addition de chaleur en préchauffant l’eau alimentaire', 'is_correct' => true],
                            ['choice_text' => 'Elle augmente toutes les pertes de chaleur', 'is_correct' => false],
                            ['choice_text' => 'Elle supprime complètement le travail de pompe', 'is_correct' => false],
                            ['choice_text' => 'Elle transforme directement toute la chaleur rejetée en travail', 'is_correct' => false],
                        ],
                        'explanation' => 'Le préchauffage régénératif réduit les pertes associées à l’addition de chaleur à basse température.',
                    ],

                    [
                        'question' => 'Dans un cycle de Brayton idéal avec rapport de pression fixé, augmenter la température maximale d’entrée turbine peut généralement...',
                        'choice_text' => 'Augmenter le travail net et le rendement sous certaines conditions', 
                    ],

                    [
                        'question' => 'Pourquoi l’intercooling d’un compresseur multistade peut-il réduire le travail de compression ?',
                        'choices' => [
                            ['choice_text' => 'Le refroidissement intermédiaire réduit le volume spécifique avant l’étape de compression suivante', 'is_correct' => true],
                            ['choice_text' => 'Il augmente systématiquement la température de chaque étage', 'is_correct' => false],
                            ['choice_text' => 'Il supprime la nécessité de toute compression', 'is_correct' => false],
                            ['choice_text' => 'Il rend le fluide incompressible dans tous les cas', 'is_correct' => false],
                        ],
                        'explanation' => 'Le refroidissement réduit la température et donc le volume spécifique, diminuant le travail requis pour atteindre la pression finale.',
                    ],

                    [
                        'question' => 'Pourquoi une récupération de chaleur à l’échappement peut-elle améliorer l’efficacité d’un cycle moteur ?',
                        'choices' => [
                            ['choice_text' => 'Elle valorise une partie de l’énergie thermique qui serait autrement rejetée', 'is_correct' => true],
                            ['choice_text' => 'Elle viole le deuxième principe', 'is_correct' => false],
                            ['choice_text' => 'Elle rend toute chaleur intégralement convertible en travail', 'is_correct' => false],
                            ['choice_text' => 'Elle annule toutes les pertes mécaniques', 'is_correct' => false],
                        ],
                        'explanation' => 'La récupération énergétique permet d’utiliser plus efficacement la chaleur disponible dans les gaz d’échappement.',
                    ],

                    [
                        'question' => 'Pourquoi le cycle de Carnot reste-t-il une référence même lorsqu’il n’est pas directement réalisable industriellement ?',
                        'choices' => [
                            ['choice_text' => 'Il définit une limite théorique du rendement entre deux températures', 'is_correct' => true],
                            ['choice_text' => 'Il décrit exactement tous les moteurs réels', 'is_correct' => false],
                            ['choice_text' => 'Il fonctionne sans source froide', 'is_correct' => false],
                            ['choice_text' => 'Il ne dépend pas des températures des sources', 'is_correct' => false],
                        ],
                        'explanation' => 'Le cycle de Carnot permet de comparer les performances réelles à une limite thermodynamique idéale.',
                    ],
                ],
            ],

            // ============================================================
            // QUIZ 5 — Réfrigération et pompes à chaleur
            // ============================================================

            [
                'title' => 'Réfrigération et pompes à chaleur professionnelles',
                'description' => 'Analyse des cycles frigorifiques, COP, compresseurs, détente et optimisation thermique.',
                'questions' => [

                    [
                        'question' => 'Pour un réfrigérateur fonctionnant en cycle, quelle relation énergétique relie la chaleur extraite QL, le travail W et la chaleur rejetée QH ?',
                        'choices' => [
                            ['choice_text' => 'QH = QL + W', 'is_correct' => true],
                            ['choice_text' => 'QH = QL - W', 'is_correct' => false],
                            ['choice_text' => 'QL = QH + W', 'is_correct' => false],
                            ['choice_text' => 'W = QH + QL', 'is_correct' => false],
                        ],
                        'explanation' => 'Sur un cycle, le bilan énergétique donne QH = QL + W pour les grandeurs positives définies ici.',
                    ],

                    [
                        'question' => 'Pourquoi un compresseur est-il indispensable dans la plupart des cycles frigorifiques à compression de vapeur ?',
                        'choices' => [
                            ['choice_text' => 'Il élève la pression et la température du fluide afin de permettre le rejet de chaleur vers la source chaude', 'is_correct' => true],
                            ['choice_text' => 'Il diminue toujours la pression du fluide', 'is_correct' => false],
                            ['choice_text' => 'Il liquéfie directement toute la vapeur sans travail', 'is_correct' => false],
                            ['choice_text' => 'Il supprime le besoin d’un évaporateur', 'is_correct' => false],
                        ],
                        'explanation' => 'La compression crée le niveau de pression nécessaire pour condenser le fluide à une température supérieure à celle de l’environnement extérieur.',
                    ],

                    [
                        'question' => 'Dans une détente par vanne d’expansion idéale, quelle propriété du fluide reste approximativement constante ?',
                        'choices' => [
                            ['choice_text' => 'L’enthalpie', 'is_correct' => true],
                            ['choice_text' => 'La pression', 'is_correct' => false],
                            ['choice_text' => 'La température dans tous les cas', 'is_correct' => false],
                            ['choice_text' => 'L’entropie nécessairement', 'is_correct' => false],
                        ],
                        'explanation' => 'Une vanne d’étranglement est généralement modélisée comme un processus isenthalpique.',
                    ],

                    [
                        'question' => 'Pourquoi le COP d’un réfrigérateur augmente-t-il généralement lorsque la température d’évaporation augmente, toutes choses égales par ailleurs ?',
                        'choices' => [
                            ['choice_text' => 'Le levage thermodynamique entre source froide et source chaude devient moins important', 'is_correct' => true],
                            ['choice_text' => 'Le compresseur doit toujours fournir plus de travail', 'is_correct' => false],
                            ['choice_text' => 'La chaleur extraite devient nulle', 'is_correct' => false],
                            ['choice_text' => 'La température de condensation devient nécessairement plus basse', 'is_correct' => false],
                        ],
                        'explanation' => 'Une température d’évaporation plus élevée réduit généralement le rapport de compression et améliore le COP.',
                    ],

                    [
                        'question' => 'Pourquoi un sous-refroidissement du liquide à la sortie du condenseur peut-il être bénéfique dans un cycle frigorifique ?',
                        'choices' => [
                            ['choice_text' => 'Il peut augmenter l’effet frigorifique massique en réduisant la qualité à l’entrée de l’évaporateur', 'is_correct' => true],
                            ['choice_text' => 'Il augmente nécessairement la puissance de compression', 'is_correct' => false],
                            ['choice_text' => 'Il supprime l’évaporateur', 'is_correct' => false],
                            ['choice_text' => 'Il transforme le liquide en vapeur avant la détente', 'is_correct' => false],
                        ],
                        'explanation' => 'Le sous-refroidissement réduit l’enthalpie du liquide avant la détente et peut augmenter l’effet frigorifique utile.',
                    ],

                    [
                        'question' => 'Pourquoi la surchauffe à l’entrée du compresseur est-elle généralement maintenue dans une installation frigorifique ?',
                        'choices' => [
                            ['choice_text' => 'Pour éviter l’entrée de liquide dans le compresseur', 'is_correct' => true],
                            ['choice_text' => 'Pour garantir une condensation complète à l’évaporateur', 'is_correct' => false],
                            ['choice_text' => 'Pour diminuer systématiquement la température de refoulement', 'is_correct' => false],
                            ['choice_text' => 'Pour augmenter la quantité de liquide aspirée', 'is_correct' => false],
                        ],
                        'explanation' => 'La présence de liquide dans un compresseur alternatif ou similaire peut provoquer des dommages mécaniques.',
                    ],

                    [
                        'question' => 'Pourquoi augmenter excessivement la température de condensation peut-il réduire le COP ?',
                        'choices' => [
                            ['choice_text' => 'Le compresseur doit généralement fournir davantage de travail', 'is_correct' => true],
                            ['choice_text' => 'La chaleur à rejeter disparaît', 'is_correct' => false],
                            ['choice_text' => 'Le fluide devient automatiquement idéal', 'is_correct' => false],
                            ['choice_text' => 'La pression de condensation diminue', 'is_correct' => false],
                        ],
                        'explanation' => 'Une température de condensation plus élevée augmente généralement la pression de condensation et le travail de compression.',
                    ],

                    [
                        'question' => 'Dans une pompe à chaleur, quelle chaleur est l’objectif utile principal en mode chauffage ?',
                        'choices' => [
                            ['choice_text' => 'La chaleur rejetée vers la source chaude', 'is_correct' => true],
                            ['choice_text' => 'La chaleur extraite de la source froide uniquement', 'is_correct' => false],
                            ['choice_text' => 'Le travail du compresseur', 'is_correct' => false],
                            ['choice_text' => 'La chaleur perdue par le réseau électrique', 'is_correct' => false],
                        ],
                        'explanation' => 'Le COP chauffage est défini à partir de la chaleur fournie à la zone à chauffer.',
                    ],

                    [
                        'question' => 'Pourquoi les performances d’un système frigorifique réel dépendent-elles fortement des températures extérieures ?',
                        'choices' => [
                            ['choice_text' => Elles modifient les conditions de condensation, les rapports de compression et les échanges thermiques', 'is_correct' => true],
                            ['choice_text' => 'La température extérieure ne peut jamais modifier un cycle frigorifique', 'is_correct' => false],
                            ['choice_text' => 'Le fluide frigorigène devient automatiquement incompressible', 'is_correct' => false],
                            ['choice_text' => 'Le COP est universellement constant', 'is_correct' => false],
                        ],
                        'explanation' => 'Les conditions de fonctionnement des échangeurs et du compresseur changent avec l’environnement.',
                    ],

                    [
                        'question' => 'Pourquoi la régulation d’une installation frigorifique doit-elle être étudiée en régime transitoire et pas seulement en régime permanent ?',
                        'choices' => [
                            ['choice_text' => 'Les variations de charge, de température et de pression peuvent modifier fortement la dynamique et les risques de fonctionnement', 'is_correct' => true],
                            ['choice_text' => 'Un système frigorifique n’a jamais de régime transitoire', 'is_correct' => false],
                            ['choice_text' => 'Les transitoires n’influencent pas les pressions', 'is_correct' => false],
                            ['choice_text' => 'Les compresseurs fonctionnent uniquement à puissance constante', 'is_correct' => false],
                        ],
                        'explanation' => 'Les démarrages, arrêts, changements de charge et variations climatiques nécessitent une analyse dynamique.',
                    ],
                ],
            ],

            // ============================================================
            // QUIZ 6 — Thermodynamique chimique et équilibres
            // ============================================================

            [
                'title' => 'Potentiels thermodynamiques et équilibre',
                'description' => 'Utilisation professionnelle de Gibbs, Helmholtz, potentiels chimiques et critères d’équilibre.',
                'questions' => [

                    [
                        'question' => 'Quelle condition caractérise l’équilibre de deux phases d’une même substance à température et pression fixées ?',
                        'choices' => [
                            ['choice_text' => 'L’égalité des potentiels chimiques des phases', 'is_correct' => true],
                            ['choice_text' => 'L’égalité de leurs masses', 'is_correct' => false],
                            ['choice_text' => 'L’égalité de leurs volumes', 'is_correct' => false],
                            ['choice_text' => 'La nullité de toutes les énergies internes', 'is_correct' => false],
                        ],
                        'explanation' => 'À l’équilibre de phase, les potentiels chimiques des phases coexistantes sont égaux.',
                    ],

                    [
                        'question' => 'À température et pression constantes, quel critère indique une transformation spontanée ?',
                        'choices' => [
                            ['choice_text' => 'ΔG < 0', 'is_correct' => true],
                            ['choice_text' => 'ΔG > 0', 'is_correct' => false],
                            ['choice_text' => 'ΔG = TΔS toujours', 'is_correct' => false],
                            ['choice_text' => 'ΔG = 0 pour toute transformation spontanée', 'is_correct' => false],
                        ],
                        'explanation' => 'À T et P constantes, une transformation spontanée s’accompagne d’une diminution de G.',
                    ],

                    [
                        'question' => 'À l’équilibre thermodynamique sous T et P constants, quelle condition s’applique à la variation infinitésimale appropriée de G ?',
                        'choices' => [
                            ['choice_text' => 'dG = 0 pour une variation admissible à l’équilibre', 'is_correct' => true],
                            ['choice_text' => 'dG > 0', 'is_correct' => false],
                            ['choice_text' => 'dG < 0 indéfiniment', 'is_correct' => false],
                            ['choice_text' => 'dG = T uniquement', 'is_correct' => false],
                        ],
                        'explanation' => 'L’équilibre correspond à un extremum de G, qui est un minimum stable dans le cas approprié.',
                    ],

                    [
                        'question' => 'Pourquoi l’énergie libre de Gibbs est-elle plus adaptée que Helmholtz pour de nombreux processus industriels à pression atmosphérique approximativement constante ?',
                        'choices' => [
                            ['choice_text' => 'Les variables naturelles de G incluent T et P', 'is_correct' => true],
                            ['choice_text' => 'G ne dépend jamais de la pression', 'is_correct' => false],
                            ['choice_text' => 'Helmholtz ne peut être défini qu’à température variable', 'is_correct' => false],
                            ['choice_text' => 'G est identique à l’énergie interne', 'is_correct' => false],
                        ],
                        'explanation' => 'G est naturellement adaptée aux conditions de température et pression contrôlées.',
                    ],

                    [
                        'question' => 'Quelle relation différentielle est correcte pour l’énergie libre de Gibbs d’un système simple compressible de composition fixe ?',
                        'choices' => [
                            ['choice_text' => 'dG = -S dT + V dP', 'is_correct' => true],
                            ['choice_text' => 'dG = S dT - V dP', 'is_correct' => false],
                            ['choice_text' => 'dG = T dS + P dV', 'is_correct' => false],
                            ['choice_text' => 'dG = V dT + S dP', 'is_correct' => false],
                        ],
                        'explanation' => 'La différentielle fondamentale de G est dG = -S dT + V dP pour une composition fixe.',
                    ],

                    [
                        'question' => 'Quelle relation de Maxwell découle de dG = -S dT + V dP ?',
                        'choices' => [
                            ['choice_text' => (∂S/∂P)_T = -(∂V/∂T)_P', 'is_correct' => true],
                            ['choice_text' => '(∂S/∂P)_T = (∂V/∂T)_P', 'is_correct' => false],
                            ['choice_text' => '(∂S/∂T)_P = (∂V/∂P)_T', 'is_correct' => false],
                            ['choice_text' => '(∂G/∂T)_P = V', 'is_correct' => false],
                        ],
                        'explanation' => 'L’égalité des dérivées croisées de G conduit à cette relation de Maxwell.',
                    ],

                    [
                        'question' => 'Pourquoi les relations de Maxwell sont-elles utiles en thermodynamique appliquée ?',
                        'choices' => [
                            ['choice_text' => 'Elles permettent de relier des propriétés difficiles à mesurer directement à d’autres propriétés accessibles expérimentalement', 'is_correct' => true],
                            ['choice_text' => 'Elles remplacent toujours les équations d’état', 'is_correct' => false],
                            ['choice_text' => 'Elles ne s’appliquent qu’aux gaz parfaits', 'is_correct' => false],
                            ['choice_text' => 'Elles donnent toujours une constante numérique universelle', 'is_correct' => false],
                        ],
                        'explanation' => 'Les relations de Maxwell exploitent la structure mathématique des potentiels thermodynamiques pour établir des identités entre dérivées.',
                    ],

                    [
                        'question' => 'Pourquoi une valeur négative de ΔG ne signifie-t-elle pas que l’énergie totale du système diminue nécessairement ?',
                        'choices' => [
                            ['choice_text' => ΔG mesure un potentiel de transformation à T et P données, pas une perte directe de l’énergie totale', 'is_correct' => true],
                            ['choice_text' => 'G est exactement égal à l’énergie totale', 'is_correct' => false],
                            ['choice_text' => 'La conservation de l’énergie est violée', 'is_correct' => false],
                            ['choice_text' => 'ΔG est une température', 'is_correct' => false],
                        ],
                        'explanation' => 'Une diminution de G représente une direction spontanée sous les contraintes considérées, tandis que l’énergie globale reste conservée.',
                    ],

                    [
                        'question' => 'Pourquoi le potentiel chimique est-il fondamental dans les systèmes multicomposants ?',
                        'choices' => [
                            ['choice_text' => 'Il détermine les échanges de matière et les conditions d’équilibre chimique et de phase', 'is_correct' => true],
                            ['choice_text' => 'Il mesure uniquement la pression mécanique', 'is_correct' => false],
                            ['choice_text' => 'Il est indépendant de la composition', 'is_correct' => false],
                            ['choice_text' => 'Il n’existe que dans les solides', 'is_correct' => false],
                        ],
                        'explanation' => 'Le potentiel chimique est la grandeur motrice fondamentale des transferts de matière et de l’équilibre des mélanges.',
                    ],

                    [
                        'question' => 'Pourquoi la connaissance de G(T,P,x) est-elle particulièrement puissante pour une analyse de mélange ?',
                        'choices' => [
                            ['choice_text' => 'Elle permet d’obtenir les potentiels chimiques par dérivation par rapport aux quantités de matière', 'is_correct' => true],
                            ['choice_text' => 'Elle ne contient aucune information sur la composition', 'is_correct' => false],
                            ['choice_text' => 'Elle permet uniquement de calculer la température', 'is_correct' => false],
                            ['choice_text' => 'Elle remplace la conservation de la masse', 'is_correct' => false],
                        ],
                        'explanation' => 'Le potentiel chimique d’un constituant est la dérivée partielle de G par rapport à sa quantité de matière sous les autres variables appropriées fixées.',
                    ],
                ],
            ],

            // ============================================================
            // QUIZ 7 — Transferts irréversibles et systèmes réels
            // ============================================================

            [
                'title' => 'Irréversibilités et phénomènes de transport',
                'description' => 'Analyse des mécanismes irréversibles de conduction, diffusion, viscosité et transfert couplé.',
                'questions' => [

                    [
                        'question' => 'Quel mécanisme est responsable de la dissipation d’énergie mécanique dans un fluide visqueux ?',
                        'choices' => [
                            ['choice_text' => Les gradients de vitesse et les contraintes visqueuses', 'is_correct' => true],
                            ['choice_text' => 'La conservation de la masse uniquement', 'is_correct' => false],
                            ['choice_text' => 'La température absolue seule', 'is_correct' => false],
                            ['choice_text' => 'La pression hydrostatique seule', 'is_correct' => false],
                        ],
                        'explanation' => 'Les gradients de vitesse créent des contraintes visqueuses qui dissipent de l’énergie mécanique en énergie interne.',
                    ],

                    [
                        'question' => 'Pourquoi la conduction thermique selon Fourier est-elle irréversible lorsque le gradient de température est fini ?',
                        'choices' => [
                            ['choice_text' => 'Le transfert de chaleur dans le sens du gradient opposé produit de l’entropie', 'is_correct' => true],
                            ['choice_text' => 'La chaleur se conserve comme une masse', 'is_correct' => false],
                            ['choice_text' => 'Le gradient est toujours nul', 'is_correct' => false],
                            ['choice_text' => 'La conduction est toujours réversible', 'is_correct' => false],
                        ],
                        'explanation' => 'La conduction spontanée à travers un gradient fini est un processus irréversible et s’accompagne de génération d’entropie.',
                    ],

                    [
                        'question' => 'Dans un fluide, pourquoi les pertes de charge sont-elles associées à une augmentation d’entropie ?',
                        'choices' => [
                            ['choice_text' => 'Les frottements visqueux constituent une source d’irréversibilité', 'is_correct' => true],
                            ['choice_text' => 'La pression se transforme sans pertes en énergie utile', 'is_correct' => false],
                            ['choice_text' => 'Le fluide devient parfaitement inviscide', 'is_correct' => false],
                            ['choice_text' => 'Les pertes de charge sont toujours réversibles', 'is_correct' => false],
                        ],
                        'explanation' => 'La dissipation visqueuse et les mélanges irréversibles produisent de l’entropie.',
                    ],

                    [
                        'question' => 'Pourquoi une diffusion de matière contre un gradient de concentration exige-t-elle généralement un apport d’énergie ou un couplage approprié ?',
                        'choice_text' => 'Le transport spontané suit les gradients de potentiel chimique, et l’inversion nécessite une force motrice externe', 
                    ],

                    [
                        'question' => 'Quel principe général relie les flux thermodynamiques aux forces motrices dans la thermodynamique hors équilibre linéaire ?',
                        'choices' => [
                            ['choice_text' => 'Les flux peuvent être approximativement proportionnels aux forces thermodynamiques proches de l’équilibre', 'is_correct' => true],
                            ['choice_text' => 'Tous les flux sont toujours constants', 'is_correct' => false],
                            ['choice_text' => 'Les forces thermodynamiques n’ont aucune relation avec les flux', 'is_correct' => false],
                            ['choice_text' => 'La relation n’existe que pour les gaz parfaits', 'is_correct' => false],
                        ],
                        'explanation' => 'La thermodynamique linéaire hors équilibre relie localement flux et forces par des coefficients de transport.',
                    ],

                    [
                        'question' => 'Pourquoi l’effet Seebeck est-il un exemple de phénomène thermoélectrique couplé ?',
                        'choices' => [
                            ['choice_text' => 'Un gradient de température peut générer une tension électrique', 'is_correct' => true],
                            ['choice_text' => 'Une tension électrique crée toujours une pression mécanique', 'is_correct' => false],
                            ['choice_text' => 'La température devient une charge électrique', 'is_correct' => false],
                            ['choice_text' => 'La conduction thermique est supprimée', 'is_correct' => false],
                        ],
                        'explanation' => 'L’effet Seebeck couple transport thermique et électrique dans certains matériaux.',
                    ],

                    [
                        'question' => 'Pourquoi la présence de gradients multiples peut-elle conduire à des flux couplés ?',
                        'choices' => [
                            ['choice_text' => 'Plusieurs forces thermodynamiques peuvent influencer simultanément plusieurs flux', 'is_correct' => true],
                            ['choice_text' => 'Chaque flux est toujours indépendant de tous les autres', 'is_correct' => false],
                            ['choice_text' => 'Les flux ne dépendent jamais des gradients', 'is_correct' => false],
                            ['choice_text' => 'Les matériaux réels ne permettent aucun couplage', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans les phénomènes hors équilibre, chaleur, matière et charge peuvent être couplées.',
                    ],

                    [
                        'question' => 'Pourquoi un choc entre particules ou molécules peut-il contribuer à l’approche vers l’équilibre thermique ?',
                        'choices' => [
                            ['choice_text' => 'Les interactions redistribuent l’énergie et la quantité de mouvement entre degrés de liberté', 'is_correct' => true],
                            ['choice_text' => 'Les collisions détruisent l’énergie totale', 'is_correct' => false],
                            ['choice_text' => 'Les particules cessent de bouger après chaque collision', 'is_correct' => false],
                            ['choice_text' => 'Les collisions augmentent toujours l’énergie cinétique totale', 'is_correct' => false],
                        ],
                        'explanation' => 'Les collisions microscopiques redistribuent l’énergie et permettent l’établissement d’une distribution proche de l’équilibre.',
                    ],

                    [
                        'question' => 'Pourquoi la viscosité d’un fluide peut-elle influencer fortement la consommation énergétique d’une installation de pompage ?',
                        'choices' => [
                            ['choice_text' => Une viscosité plus élevée peut accroître les pertes de charge et donc le travail de pompage requis', 'is_correct' => true],
                            ['choice_text' => 'La viscosité ne modifie jamais les pertes', 'is_correct' => false],
                            ['choice_text' => 'Une viscosité élevée supprime toute turbulence', 'is_correct' => false],
                            ['choice_text' => 'La viscosité est une température', 'is_correct' => false],
                        ],
                        'explanation' => 'La viscosité augmente les contraintes internes et peut accroître fortement les pertes de charge selon le régime d’écoulement.',
                    ],

                    [
                        'question' => 'Pourquoi la réduction des irréversibilités est-elle un objectif majeur dans les systèmes énergétiques industriels ?',
                        'choices' => [
                            ['choice_text' => Elle augmente la fraction d’énergie disponible qui peut être convertie en travail utile', 'is_correct' => true],
                            ['choice_text' => 'Elle viole le deuxième principe', 'is_correct' => false],
                            ['choice_text' => 'Elle rend toujours les composants plus simples', 'is_correct' => false],
                            ['choice_text' => 'Elle signifie que toute énergie devient du travail', 'is_correct' => false],
                        ],
                        'explanation' => 'Réduire les irréversibilités réduit la production d’entropie et la destruction d’exergie.',
                    ],
                ],
            ],

            // ============================================================
            // QUIZ 8 — Conception thermodynamique professionnelle
            // ============================================================

            [
                'title' => 'Conception et optimisation thermodynamique',
                'description' => 'Approche professionnelle de dimensionnement, optimisation, validation et analyse des performances thermodynamiques.',
                'questions' => [

                    [
                        'question' => 'Pourquoi un bilan énergétique global doit-il précéder toute optimisation détaillée d’un système thermique ?',
                        'choices' => [
                            ['choice_text' => 'Il établit les flux d’énergie disponibles, les contraintes fondamentales et les ordres de grandeur', 'is_correct' => true],
                            ['choice_text' => 'Il remplace toute analyse d’exergie', 'is_correct' => false],
                            ['choice_text' => 'Il donne automatiquement le meilleur design', 'is_correct' => false],
                            ['choice_text' => 'Il rend inutiles les propriétés thermophysiques', 'is_correct' => false],
                        ],
                        'explanation' => 'Le bilan global fournit la structure énergétique du problème avant l’analyse détaillée des performances.',
                    ],

                    [
                        'question' => 'Pourquoi une analyse d’exergie doit-elle souvent compléter un bilan énergétique dans une centrale thermique ?',
                        'choices' => [
                            ['choice_text' => 'Elle localise mieux les destructions de potentiel de travail dues aux irréversibilités', 'is_correct' => true],
                            ['choice_text' => 'Elle remplace la conservation de l’énergie', 'is_correct' => false],
                            ['choice_text' => 'Elle mesure uniquement la masse du fluide', 'is_correct' => false],
                            ['choice_text' => 'Elle ne dépend jamais des températures', 'is_correct' => false],
                        ],
                        'explanation' => 'Deux composants peuvent avoir des pertes énergétiques comparables mais des destructions d’exergie très différentes.',
                    ],

                    [
                        'question' => 'Pourquoi la température maximale admissible d’un matériau limite-t-elle souvent la température de fonctionnement d’un cycle ?',
                        'choices' => [
                            ['choice_text' => Les propriétés mécaniques, thermiques et chimiques du matériau peuvent se dégrader à haute température', 'is_correct' => true],
                            ['choice_text' => 'Les matériaux deviennent tous parfaitement résistants à haute température', 'is_correct' => false],
                            ['choice_text' => 'La thermodynamique impose toujours une température maximale universelle', 'is_correct' => false],
                            ['choice_text' => 'La température maximale n’a aucun effet sur les matériaux', 'is_correct' => false],
                        ],
                        'explanation' => 'Les limites de matériaux conditionnent souvent la température maximale des turbines, chaudières, échangeurs et composants.',
                    ],

                    [
                        'question' => 'Pourquoi l’augmentation de la température source chaude peut-elle être limitée même si elle améliore le rendement théorique ?',
                        'choices' => [
                            ['choice_text' => 'Les contraintes de matériaux, les émissions, les pertes et la stabilité chimique peuvent imposer des limites', 'is_correct' => true],
                            ['choice_text' => 'Le rendement diminue toujours lorsque la température chaude augmente', 'is_correct' => false],
                            ['choice_text' => 'Une température élevée supprime toute énergie utile', 'is_correct' => false],
                            ['choice_text' => 'La source chaude n’influence pas les performances du cycle', 'is_correct' => false],
                        ],
                        'explanation' => 'L’optimisation réelle est un compromis entre avantage thermodynamique et contraintes physiques ou économiques.',
                    ],

                    [
                        'question' => 'Pourquoi le pincement thermique d’un échangeur est-il une contrainte importante de conception ?',
                        'choices' => [
                            ['choice_text' => Un pincement trop faible exige souvent une grande surface d’échange et peut augmenter les coûts et irréversibilités associées', 'is_correct' => true],
                            ['choice_text' => 'Un pincement faible signifie toujours une surface plus petite', 'is_correct' => false],
                            ['choice_text' => 'Le pincement n’a aucune relation avec les températures', 'is_correct' => false],
                            ['choice_text' => 'Un échangeur idéal doit avoir un pincement exactement nul dans tous les cas réels', 'is_correct' => false],
                        ],
                        'explanation' => 'Rapprocher fortement les températures de deux fluides demande une grande surface d’échange et des gradients thermiques faibles.',
                    ],

                    [
                        'question' => 'Pourquoi une optimisation thermodynamique doit-elle intégrer les coûts d’investissement et d’exploitation ?',
                        'choices' => [
                            ['choice_text' => 'Le meilleur rendement n’est pas nécessairement la meilleure solution économique sur le cycle de vie', 'is_correct' => true],
                            ['choice_text' => 'Le coût est toujours indépendant de l’efficacité', 'is_correct' => false],
                            ['choice_text' => 'Une efficacité maximale minimise toujours le coût initial', 'is_correct' => false],
                            ['choice_text' => 'L’exploitation ne dépend jamais de la température ou de la pression', 'is_correct' => false],
                        ],
                        'explanation' => 'Une conception professionnelle doit équilibrer performance, investissement, maintenance, disponibilité et coût énergétique.',
                    ],

                    [
                        'question' => 'Pourquoi une analyse de sensibilité est-elle importante lorsqu’on optimise un cycle complexe ?',
                        'choices' => [
                            ['choice_text' => 'Elle identifie les paramètres dont la variation influence le plus fortement les performances', 'is_correct' => true],
                            ['choice_text' => 'Elle garantit toujours un optimum global exact', 'is_correct' => false],
                            ['choice_text' => 'Elle supprime toutes les contraintes physiques', 'is_correct' => false],
                            ['choice_text' => 'Elle rend les paramètres indépendants', 'is_correct' => false],
                        ],
                        'explanation' => 'L’analyse de sensibilité aide à prioriser les variables critiques et à éviter des efforts d’optimisation peu utiles.',
                    ],

                    [
                        'question' => 'Pourquoi les propriétés thermophysiques utilisées dans une simulation industrielle doivent-elles être vérifiées dans la plage de fonctionnement ?',
                        'choices' => [
                            ['choice_text' => 'Une mauvaise corrélation de propriétés peut entraîner des erreurs importantes sur les bilans et le dimensionnement', 'is_correct' => true],
                            ['choice_text' => 'Les propriétés sont toujours constantes quelles que soient les conditions', 'is_correct' => false],
                            ['choice_text' => 'Les propriétés n’influencent jamais les performances', 'is_correct' => false],
                            ['choice_text' => 'Une approximation grossière est toujours suffisante', 'is_correct' => false],
                        ],
                        'explanation' => 'Conductivité, viscosité, enthalpie, masse volumique et capacité thermique peuvent varier fortement avec T et P.',
                    ],

                    [
                        'question' => 'Pourquoi une validation expérimentale finale reste-t-elle indispensable pour un système thermodynamique industriel optimisé numériquement ?',
                        'choices' => [
                            ['choice_text' => 'Les modèles peuvent négliger des pertes, dispersions, couplages et phénomènes de fonctionnement réels', 'is_correct' => true],
                            ['choice_text' => 'La simulation numérique est toujours physiquement exacte', 'is_correct' => false],
                            ['choice_text' => 'Une expérimentation ne peut pas mesurer les performances thermiques', 'is_correct' => false],
                            ['choice_text' => 'La validation ne sert qu’à confirmer les hypothèses sans les tester', 'is_correct' => false],
                        ],
                        'explanation' => 'La validation confronte les prédictions du modèle aux performances réelles et révèle les effets qui n’ont pas été correctement modélisés.',
                    ],

                    [
                        'question' => 'Pourquoi la documentation des hypothèses de calcul est-elle essentielle dans une étude thermodynamique professionnelle ?',
                        'choices' => [
                            ['choice_text' => 'Elle permet de comprendre le domaine de validité du modèle et de reproduire les résultats', 'is_correct' => true],
                            ['choice_text' => 'Elle rend automatiquement les hypothèses vraies', 'is_correct' => false],
                            ['choice_text' => 'Elle remplace toutes les données expérimentales', 'is_correct' => false],
                            ['choice_text' => 'Elle supprime la nécessité de préciser les unités', 'is_correct' => false],
                        ],
                        'explanation' => 'Les hypothèses déterminent directement la portée du modèle, les équations utilisées et la fiabilité des conclusions.',
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
                    'difficulty' => 'Professional',
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

                // Mélange des objets complets afin de conserver
                // is_correct associé à la bonne réponse.
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