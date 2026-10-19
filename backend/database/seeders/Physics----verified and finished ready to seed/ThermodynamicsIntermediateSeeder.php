<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class ThermodynamicsIntermediateSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'thermodynamics')->firstOrFail();

        $quizzes = [

            // ============================================================
            // QUIZ 1 — Gaz parfaits et transformations
            // ============================================================

            [
                'title' => 'Gaz parfaits et transformations thermodynamiques',
                'description' => 'Application de l’équation d’état des gaz parfaits et analyse des transformations isobares, isochores et isothermes.',
                'questions' => [

                    [
                        'question' => 'Un gaz parfait occupe un volume de 2,0 m³ à une pression de 100 kPa et une température de 300 K. Quelle est approximativement la quantité de matière ?',
                        'choices' => [
                            ['choice_text' => '80 mol', 'is_correct' => true],
                            ['choice_text' => '8 mol', 'is_correct' => false],
                            ['choice_text' => '800 mol', 'is_correct' => false],
                            ['choice_text' => '0,8 mol', 'is_correct' => false],
                        ],
                        'explanation' => 'n = PV/(RT) = (100000 × 2)/(8,314 × 300) ≈ 80,2 mol.',
                    ],

                    [
                        'question' => 'À température constante, un gaz parfait double son volume. Sa pression devient...',
                        'choices' => [
                            ['choice_text' => 'Deux fois plus faible', 'is_correct' => true],
                            ['choice_text' => 'Deux fois plus grande', 'is_correct' => false],
                            ['choice_text' => 'Quatre fois plus faible', 'is_correct' => false],
                            ['choice_text' => 'Inchangée', 'is_correct' => false],
                        ],
                        'explanation' => 'Pour une transformation isotherme, PV = constante. Doubler V divise donc P par deux.',
                    ],

                    [
                        'question' => 'À volume constant, si la température absolue d’un gaz passe de 300 K à 450 K, la pression est multipliée par...',
                        'choices' => [
                            ['choice_text' => '1,5', 'is_correct' => true],
                            ['choice_text' => '2', 'is_correct' => false],
                            ['choice_text' => '0,67', 'is_correct' => false],
                            ['choice_text' => '150', 'is_correct' => false],
                        ],
                        'explanation' => 'À volume et quantité de matière constants, P est proportionnelle à T. Donc 450/300 = 1,5.',
                    ],

                    [
                        'question' => 'Quelle transformation se produit à pression constante ?',
                        'choices' => [
                            ['choice_text' => Une transformation isobare', 'is_correct' => true],
                            ['choice_text' => 'Une transformation isochore', 'is_correct' => false],
                            ['choice_text' => 'Une transformation isotherme', 'is_correct' => false],
                            ['choice_text' => 'Une transformation adiabatique nécessairement', 'is_correct' => false],
                        ],
                        'explanation' => 'Une transformation isobare est caractérisée par une pression constante.',
                    ],

                    [
                        'question' => 'Quelle transformation se produit à volume constant ?',
                        'choices' => [
                            ['choice_text' => Une transformation isochore', 'is_correct' => true],
                            ['choice_text' => 'Une transformation isobare', 'is_correct' => false],
                            ['choice_text' => 'Une transformation isotherme', 'is_correct' => false],
                            ['choice_text' => 'Une transformation cyclique nécessairement', 'is_correct' => false],
                        ],
                        'explanation' => 'Une transformation isochore conserve le volume.',
                    ],

                    [
                        'question' => 'Quelle transformation se produit à température constante ?',
                        'choices' => [
                            ['choice_text' => Une transformation isotherme', 'is_correct' => true],
                            ['choice_text' => 'Une transformation isochore', 'is_correct' => false],
                            ['choice_text' => 'Une transformation isobare', 'is_correct' => false],
                            ['choice_text' => 'Une transformation isentropique nécessairement', 'is_correct' => false],
                        ],
                        'explanation' => 'Une transformation isotherme conserve la température.',
                    ],

                    [
                        'question' => 'Dans une transformation isobare d’un gaz parfait, le volume est proportionnel à...',
                        'choices' => [
                            ['choice_text' => 'La température absolue', 'is_correct' => true],
                            ['choice_text' => 'L’inverse de la température absolue', 'is_correct' => false],
                            ['choice_text' => 'La masse volumique uniquement', 'is_correct' => false],
                            ['choice_text' => 'La pression au carré', 'is_correct' => false],
                        ],
                        'explanation' => 'À pression constante, PV = nRT donne V ∝ T.',
                    ],

                    [
                        'question' => 'Un gaz parfait est comprimé de manière isotherme. Quelle grandeur reste constante pour une quantité de gaz donnée ?',
                        'choices' => [
                            ['choice_text' => 'Le produit PV', 'is_correct' => true],
                            ['choice_text' => 'Le produit P/T', 'is_correct' => false],
                            ['choice_text' => 'Le volume seul', 'is_correct' => false],
                            ['choice_text' => 'La pression seule', 'is_correct' => false],
                        ],
                        'explanation' => 'Pour n et T constants, l’équation d’état donne PV = constante.',
                    ],

                    [
                        'question' => 'Un gaz parfait est chauffé à volume constant. Le travail mécanique fourni par le gaz est...',
                        'choices' => [
                            ['choice_text' => 'Nul', 'is_correct' => true],
                            ['choice_text' => 'Toujours positif', 'is_correct' => false],
                            ['choice_text' => 'Toujours négatif', 'is_correct' => false],
                            ['choice_text' => 'Infini', 'is_correct' => false],
                        ],
                        'explanation' => 'Avec la convention W = ∫P dV, si le volume ne varie pas, dV = 0 et W = 0.',
                    ],

                    [
                        'question' => 'Pour un gaz parfait, l’équation PV = nRT montre que la pression augmente si, à volume et quantité de matière constants...',
                        'choices' => [
                            ['choice_text' => 'La température absolue augmente', 'is_correct' => true],
                            ['choice_text' => 'La température absolue diminue', 'is_correct' => false],
                            ['choice_text' => 'La constante des gaz parfaits diminue', 'is_correct' => false],
                            ['choice_text' => 'Le volume augmente', 'is_correct' => false],
                        ],
                        'explanation' => 'À V et n constants, P = nRT/V, donc P est proportionnelle à T.',
                    ],
                ],
            ],

            // ============================================================
            // QUIZ 2 — Premier principe et travail
            // ============================================================

            [
                'title' => 'Premier principe et travail thermodynamique',
                'description' => 'Application du bilan énergétique aux transformations thermodynamiques et au travail des gaz.',
                'questions' => [

                    [
                        'question' => 'Avec la convention ΔU = Q - W, que représente W ?',
                        'choices' => [
                            ['choice_text' => 'Le travail fourni par le système vers l’extérieur', 'is_correct' => true],
                            ['choice_text' => 'Le travail reçu par le système uniquement', 'is_correct' => false],
                            ['choice_text' => 'La chaleur reçue', 'is_correct' => false],
                            ['choice_text' => 'L’énergie interne finale', 'is_correct' => false],
                        ],
                        'explanation' => 'Avec cette convention, Q est la chaleur reçue par le système et W le travail fourni par le système.',
                    ],

                    [
                        'question' => 'Un gaz reçoit 500 J de chaleur et fournit 200 J de travail. Quelle est la variation de son énergie interne ?',
                        'choices' => [
                            ['choice_text' => '300 J', 'is_correct' => true],
                            ['choice_text' => '700 J', 'is_correct' => false],
                            ['choice_text' => '-300 J', 'is_correct' => false],
                            ['choice_text' => '-700 J', 'is_correct' => false],
                        ],
                        'explanation' => 'ΔU = Q - W = 500 - 200 = 300 J.',
                    ],

                    [
                        'question' => 'Un système reçoit 300 J de chaleur et subit un travail de 100 J effectué sur lui. Avec une convention où W est le travail fourni par le système, quelle est ΔU ?',
                        'choices' => [
                            ['choice_text' => '400 J', 'is_correct' => true],
                            ['choice_text' => '200 J', 'is_correct' => false],
                            ['choice_text' => '-200 J', 'is_correct' => false],
                            ['choice_text' => '-400 J', 'is_correct' => false],
                        ],
                        'explanation' => 'Le système reçoit 100 J de travail, donc W = -100 J dans la convention ΔU = Q - W. Ainsi ΔU = 300 - (-100) = 400 J.',
                    ],

                    [
                        'question' => 'Quel travail effectue un gaz lors d’une expansion à pression constante P entre V1 et V2 ?',
                        'choices' => [
                            ['choice_text' => 'W = P(V2 - V1)', 'is_correct' => true],
                            ['choice_text' => 'W = P(V1 + V2)', 'is_correct' => false],
                            ['choice_text' => 'W = P/(V2 - V1)', 'is_correct' => false],
                            ['choice_text' => 'W = P(V1 - V2)²', 'is_correct' => false],
                        ],
                        'explanation' => 'À pression constante, W = ∫P dV = P(V2 - V1).',
                    ],

                    [
                        'question' => 'Lors d’une compression d’un gaz, avec la convention W = ∫P dV, le travail du gaz est généralement...',
                        'choices' => [
                            ['choice_text' => 'Négatif', 'is_correct' => true],
                            ['choice_text' => 'Positif', 'is_correct' => false],
                            ['choice_text' => 'Toujours nul', 'is_correct' => false],
                            ['choice_text' => 'Infini', 'is_correct' => false],
                        ],
                        'explanation' => 'Lors d’une compression, V2 < V1, donc ∫P dV est négatif.',
                    ],

                    [
                        'question' => 'Lors d’une détente, si un gaz fournit 250 J de travail et reçoit 600 J de chaleur, sa variation d’énergie interne est...',
                        'choices' => [
                            ['choice_text' => '350 J', 'is_correct' => true],
                            ['choice_text' => '850 J', 'is_correct' => false],
                            ['choice_text' => '-350 J', 'is_correct' => false],
                            ['choice_text' => '-850 J', 'is_correct' => false],
                        ],
                        'explanation' => 'ΔU = Q - W = 600 - 250 = 350 J.',
                    ],

                    [
                        'question' => 'Dans une transformation cyclique complète, quelle propriété de l’énergie interne est utilisée dans le bilan global ?',
                        'choices' => [
                            ['choice_text' => 'ΔU = 0', 'is_correct' => true],
                            ['choice_text' => 'ΔU = Q', 'is_correct' => false],
                            ['choice_text' => 'ΔU = W', 'is_correct' => false],
                            ['choice_text' => 'ΔU = constante non nulle', 'is_correct' => false],
                        ],
                        'explanation' => 'Le système revient à son état initial et l’énergie interne étant une fonction d’état, sa variation totale est nulle.',
                    ],

                    [
                        'question' => 'Dans un cycle complet, si le système reçoit 1200 J de chaleur nette, le travail net fourni est de...',
                        'choices' => [
                            ['choice_text' => '1200 J', 'is_correct' => true],
                            ['choice_text' => '0 J', 'is_correct' => false],
                            ['choice_text' => '2400 J', 'is_correct' => false],
                            ['choice_text' => '-1200 J', 'is_correct' => false],
                        ],
                        'explanation' => 'Sur un cycle, 0 = Q - W, donc W = Q = 1200 J.',
                    ],

                    [
                        'question' => 'Pourquoi le travail d’un gaz est-il représenté par une aire sous la courbe P(V) ?',
                        'choices' => [
                            ['choice_text' => 'Parce que W = ∫P dV', 'is_correct' => true],
                            ['choice_text' => 'Parce que W = ∫V dP uniquement', 'is_correct' => false],
                            ['choice_text' => 'Parce que le travail est égal à P + V', 'is_correct' => false],
                            ['choice_text' => 'Parce que la pression est sans dimension', 'is_correct' => false],
                        ],
                        'explanation' => 'Le travail de pression-volume est l’intégrale de P par rapport au volume.',
                    ],

                    [
                        'question' => 'Deux transformations relient les mêmes états thermodynamiques mais suivent des chemins différents. Leur variation d’énergie interne est...',
                        'choices' => [
                            ['choice_text' => 'La même', 'is_correct' => true],
                            ['choice_text' => 'Toujours différente', 'is_correct' => false],
                            ['choice_text' => 'Nulle uniquement pour la première', 'is_correct' => false],
                            ['choice_text' => 'Égale au travail dans chaque cas', 'is_correct' => false],
                        ],
                        'explanation' => 'L’énergie interne est une fonction d’état. ΔU dépend uniquement des états initial et final.',
                    ],
                ],
            ],

            // ============================================================
            // QUIZ 3 — Capacités thermiques des gaz
            // ============================================================

            [
                'title' => 'Capacités thermiques et gaz parfaits',
                'description' => 'Étude de Cp, Cv et des relations énergétiques des gaz parfaits.',
                'questions' => [

                    [
                        'question' => 'Pour un gaz parfait monoatomique, la capacité thermique molaire à volume constant vaut idéalement...',
                        'choices' => [
                            ['choice_text' => '3R/2', 'is_correct' => true],
                            ['choice_text' => 'R/2', 'is_correct' => false],
                            ['choice_text' => '5R/2', 'is_correct' => false],
                            ['choice_text' => '3R', 'is_correct' => false],
                        ],
                        'explanation' => 'Pour un gaz parfait monoatomique, Cv,m = 3R/2 dans le modèle classique.',
                    ],

                    [
                        'question' => 'Pour un gaz parfait monoatomique, la capacité thermique molaire à pression constante vaut...',
                        'choices' => [
                            ['choice_text' => '5R/2', 'is_correct' => true],
                            ['choice_text' => '3R/2', 'is_correct' => false],
                            ['choice_text' => 'R', 'is_correct' => false],
                            ['choice_text' => '7R/2', 'is_correct' => false],
                        ],
                        'explanation' => 'Pour un gaz parfait, Cp = Cv + R. Donc Cp,m = 3R/2 + R = 5R/2.',
                    ],

                    [
                        'question' => 'Pour un gaz parfait, quelle relation générale relie Cp et Cv sur une base molaire ?',
                        'choices' => [
                            ['choice_text' => 'Cp - Cv = R', 'is_correct' => true],
                            ['choice_text' => 'Cp + Cv = R', 'is_correct' => false],
                            ['choice_text' => 'Cp/Cv = R', 'is_correct' => false],
                            ['choice_text' => 'Cp = Cv²', 'is_correct' => false],
                        ],
                        'explanation' => 'Pour un gaz parfait, la relation de Mayer donne Cp - Cv = R.',
                    ],

                    [
                        'question' => 'Le rapport γ = Cp/Cv d’un gaz parfait monoatomique vaut idéalement...',
                        'choices' => [
                            ['choice_text' => '5/3', 'is_correct' => true],
                            ['choice_text' => '4/3', 'is_correct' => false],
                            ['choice_text' => '7/5', 'is_correct' => false],
                            ['choice_text' => '3/2', 'is_correct' => false],
                        ],
                        'explanation' => 'γ = (5R/2)/(3R/2) = 5/3.',
                    ],

                    [
                        'question' => 'Pour chauffer un gaz à volume constant, quelle capacité thermique intervient directement dans ΔU = nCΔT ?',
                        'choices' => [
                            ['choice_text' => Cv', 'is_correct' => true],
                            ['choice_text' => 'Cp', 'is_correct' => false],
                            ['choice_text' => 'R uniquement', 'is_correct' => false],
                            ['choice_text' => 'γ uniquement', 'is_correct' => false],
                        ],
                        'explanation' => 'Pour un gaz parfait en système fermé, ΔU = nCvΔT lorsque Cv est considéré constant.',
                    ],

                    [
                        'question' => 'Pourquoi faut-il plus de chaleur pour augmenter d’une même température un gaz à pression constante qu’à volume constant ?',
                        'choices' => [
                            ['choice_text' => 'À pression constante, une partie de l’énergie reçue sert aussi à fournir du travail d’expansion', 'is_correct' => true],
                            ['choice_text' => 'Le gaz possède nécessairement une masse plus grande', 'is_correct' => false],
                            ['choice_text' => 'La température est différente par définition', 'is_correct' => false],
                            ['choice_text' => 'L’énergie interne diminue pendant le chauffage', 'is_correct' => false],
                        ],
                        'explanation' => 'À pression constante, le gaz se dilate et effectue un travail en plus de l’augmentation d’énergie interne.',
                    ],

                    [
                        'question' => 'Un gaz parfait possède une capacité thermique molaire Cv = 20 J/(mol·K). Pour 2 mol chauffées de 10 K à volume constant, quelle variation d’énergie interne obtient-on ?',
                        'choices' => [
                            ['choice_text' => '400 J', 'is_correct' => true],
                            ['choice_text' => '200 J', 'is_correct' => false],
                            ['choice_text' => '40 J', 'is_correct' => false],
                            ['choice_text' => '20 J', 'is_correct' => false],
                        ],
                        'explanation' => 'ΔU = nCvΔT = 2 × 20 × 10 = 400 J.',
                    ],

                    [
                        'question' => 'Pour un gaz parfait, l’énergie interne dépend principalement de...',
                        'choices' => [
                            ['choice_text' => 'La température pour une quantité de gaz donnée', 'is_correct' => true],
                            ['choice_text' => 'La pression seule', 'is_correct' => false],
                            ['choice_text' => 'Le volume seul', 'is_correct' => false],
                            ['choice_text' => 'La couleur du gaz', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans le modèle du gaz parfait, l’énergie interne est une fonction de la température uniquement pour une quantité de matière fixée.',
                    ],

                    [
                        'question' => 'À température constante pour un gaz parfait, la variation d’énergie interne est...',
                        'choices' => [
                            ['choice_text' => 'Nulle', 'is_correct' => true],
                            ['choice_text' => 'Toujours positive', 'is_correct' => false],
                            ['choice_text' => 'Toujours négative', 'is_correct' => false],
                            ['choice_text' => 'Égale au volume', 'is_correct' => false],
                        ],
                        'explanation' => 'Pour un gaz parfait, U dépend uniquement de T. Si T reste constante, ΔU = 0.',
                    ],

                    [
                        'question' => 'Un gaz parfait monoatomique reçoit de la chaleur à volume constant. Comme W = 0, toute la chaleur reçue augmente principalement...',
                        'choices' => [
                            ['choice_text' => 'Son énergie interne', 'is_correct' => true],
                            ['choice_text' => 'Son énergie potentielle gravitationnelle', 'is_correct' => false],
                            ['choice_text' => 'Son volume', 'is_correct' => false],
                            ['choice_text' => 'Sa masse', 'is_correct' => false],
                        ],
                        'explanation' => 'À volume constant, W = 0 et le premier principe donne ΔU = Q.',
                    ],
                ],
            ],

            // ============================================================
            // QUIZ 4 — Transformations adiabatiques
            // ============================================================

            [
                'title' => 'Transformations adiabatiques et isentropiques',
                'description' => 'Analyse des compressions et détentes adiabatiques réversibles des gaz parfaits.',
                'questions' => [

                    [
                        'question' => 'Dans une transformation adiabatique, quel transfert d’énergie est nul ?',
                        'choices' => [
                            ['choice_text' => 'Le transfert thermique Q', 'is_correct' => true],
                            ['choice_text' => 'Le travail W', 'is_correct' => false],
                            ['choice_text' => 'La variation d’énergie interne', 'is_correct' => false],
                            ['choice_text' => 'La variation de volume nécessairement', 'is_correct' => false],
                        ],
                        'explanation' => 'Une transformation adiabatique est définie par Q = 0.',
                    ],

                    [
                        'question' => 'Lors d’une compression adiabatique réversible d’un gaz parfait, la température...',
                        'choices' => [
                            ['choice_text' => 'Augmente', 'is_correct' => true],
                            ['choice_text' => 'Diminue toujours', 'is_correct' => false],
                            ['choice_text' => 'Reste constante', 'is_correct' => false],
                            ['choice_text' => 'Devient nulle', 'is_correct' => false],
                        ],
                        'explanation' => 'Le travail effectué sur le gaz augmente son énergie interne, donc sa température augmente.',
                    ],

                    [
                        'question' => 'Lors d’une détente adiabatique réversible d’un gaz parfait, la température...',
                        'choices' => [
                            ['choice_text' => 'Diminue', 'is_correct' => true],
                            ['choice_text' => 'Augmente toujours', 'is_correct' => false],
                            ['choice_text' => 'Reste constante', 'is_correct' => false],
                            ['choice_text' => 'Devient infinie', 'is_correct' => false],
                        ],
                        'explanation' => 'Le gaz fournit du travail sans recevoir de chaleur, ce qui réduit son énergie interne et sa température.',
                    ],

                    [
                        'question' => 'Pour une transformation adiabatique réversible d’un gaz parfait, quelle relation est correcte ?',
                        'choices' => [
                            ['choice_text' => 'PV^γ = constante', 'is_correct' => true],
                            ['choice_text' => 'PV = constante dans tous les cas', 'is_correct' => false],
                            ['choice_text' => 'P + V = constante', 'is_correct' => false],
                            ['choice_text' => 'P/V^γ = constante', 'is_correct' => false],
                        ],
                        'explanation' => 'Pour une transformation adiabatique réversible d’un gaz parfait, PV^γ = constante.',
                    ],

                    [
                        'question' => 'Quelle relation est également valable pour une transformation adiabatique réversible d’un gaz parfait ?',
                        'choices' => [
                            ['choice_text' => 'TV^(γ-1) = constante', 'is_correct' => true],
                            ['choice_text' => 'T/V = constante pour tout γ', 'is_correct' => false],
                            ['choice_text' => 'T + V = constante', 'is_correct' => false],
                            ['choice_text' => 'T^γV = constante', 'is_correct' => false],
                        ],
                        'explanation' => 'On peut déduire T V^(γ-1) = constante à partir de PV = nRT et PV^γ = constante.',
                    ],

                    [
                        'question' => 'Pourquoi une détente adiabatique peut-elle refroidir un gaz sans échange thermique avec l’extérieur ?',
                        'choices' => [
                            ['choice_text' => 'Le gaz fournit du travail au détriment de son énergie interne', 'is_correct' => true],
                            ['choice_text' => 'La chaleur entre spontanément depuis le vide', 'is_correct' => false],
                            ['choice_text' => 'La masse du gaz diminue toujours', 'is_correct' => false],
                            ['choice_text' => 'La pression n’a aucun lien avec le travail', 'is_correct' => false],
                        ],
                        'explanation' => 'Avec Q = 0 et W > 0 lors d’une détente, ΔU = -W < 0, donc la température du gaz parfait diminue.',
                    ],

                    [
                        'question' => 'Dans une transformation adiabatique réversible, l’entropie d’un système fermé reste constante.',
                        'choices' => [
                            ['choice_text' => 'Vrai', 'is_correct' => true],
                            ['choice_text' => 'Faux', 'is_correct' => false],
                            ['choice_text' => 'Uniquement pour les liquides', 'is_correct' => false],
                            ['choice_text' => 'Uniquement à volume constant', 'is_correct' => false],
                        ],
                        'explanation' => 'Une transformation adiabatique réversible est isentropique : ΔS = 0.',
                    ],

                    [
                        'question' => 'Une transformation adiabatique irréversible est nécessairement isentropique.',
                        'choices' => [
                            ['choice_text' => 'Faux', 'is_correct' => true],
                            ['choice_text' => 'Vrai', 'is_correct' => false],
                            ['choice_text' => 'Uniquement à température constante', 'is_correct' => false],
                            ['choice_text' => 'Uniquement pour les gaz parfaits', 'is_correct' => false],
                        ],
                        'explanation' => 'Une transformation adiabatique n’implique ΔS = 0 que si elle est également réversible. Une irréversibilité produit de l’entropie.',
                    ],

                    [
                        'question' => 'Pour un gaz parfait, une compression adiabatique réversible rapproche généralement le système de quelle relation entre P et V ?',
                        'choices' => [
                            ['choice_text' => 'P augmente lorsque V diminue selon PV^γ = constante', 'is_correct' => true],
                            ['choice_text' => 'P diminue lorsque V diminue', 'is_correct' => false],
                            ['choice_text' => 'P reste constante quelle que soit V', 'is_correct' => false],
                            ['choice_text' => 'P devient indépendante de V', 'is_correct' => false],
                        ],
                        'explanation' => 'La relation adiabatique impose P ∝ V^-γ, donc la pression augmente lorsque le volume diminue.',
                    ],

                    [
                        'question' => 'Pourquoi les processus adiabatiques sont-ils importants dans les moteurs et turbines ?',
                        'choices' => [
                            ['choice_text' => 'Ils peuvent modéliser approximativement certaines compressions et détentes rapides avec des échanges thermiques faibles', 'is_correct' => true],
                            ['choice_text' => 'Tous les moteurs fonctionnent sans aucun échange thermique', 'is_correct' => false],
                            ['choice_text' => 'Les turbines ne subissent jamais de variations de pression', 'is_correct' => false],
                            ['choice_text' => 'Une transformation adiabatique est toujours isotherme', 'is_correct' => false],
                        ],
                        'explanation' => 'Sur certaines échelles de temps et selon l’isolation, les échanges thermiques peuvent être faibles devant les phénomènes mécaniques.',
                    ],
                ],
            ],

            // ============================================================
            // QUIZ 5 — Deuxième principe et entropie
            // ============================================================

            [
                'title' => 'Deuxième principe et entropie',
                'description' => 'Introduction à l’entropie, aux irréversibilités et au sens naturel des transformations thermodynamiques.',
                'questions' => [

                    [
                        'question' => 'Quelle grandeur d’état est au cœur du deuxième principe de la thermodynamique ?',
                        'choices' => [
                            ['choice_text' => 'L’entropie', 'is_correct' => true],
                            ['choice_text' => 'La masse', 'is_correct' => false],
                            ['choice_text' => 'La vitesse', 'is_correct' => false],
                            ['choice_text' => 'La charge électrique', 'is_correct' => false],
                        ],
                        'explanation' => 'Le deuxième principe introduit l’entropie et impose des contraintes sur le sens des transformations.',
                    ],

                    [
                        'question' => 'Pour un système isolé réel, la variation d’entropie totale est généralement...',
                        'choices' => [
                            ['choice_text' => Positive ou nulle', 'is_correct' => true],
                            ['choice_text' => Toujours négative', 'is_correct' => false],
                            ['choice_text' => Toujours nulle', 'is_correct' => false],
                            ['choice_text' => Toujours infinie', 'is_correct' => false],
                        ],
                        'explanation' => 'Le deuxième principe impose ΔS_total ≥ 0 pour un système isolé, avec égalité dans une transformation réversible idéale.',
                    ],

                    [
                        'question' => 'Pour une transformation réversible, la variation d’entropie élémentaire est reliée à la chaleur par...',
                        'choices' => [
                            ['choice_text' => 'dS = δQ_rev/T', 'is_correct' => true],
                            ['choice_text' => 'dS = TδQ_rev', 'is_correct' => false],
                            ['choice_text' => 'dS = δQ_rev + T', 'is_correct' => false],
                            ['choice_text' => 'dS = δQ_rev/T² uniquement', 'is_correct' => false],
                        ],
                        'explanation' => 'La définition thermodynamique différentielle pour une transformation réversible est dS = δQ_rev/T.',
                    ],

                    [
                        'question' => 'Une transformation irréversible produit généralement de l’entropie.',
                        'choices' => [
                            ['choice_text' => 'Vrai', 'is_correct' => true],
                            ['choice_text' => 'Faux', 'is_correct' => false],
                            ['choice_text' => 'Uniquement dans les solides', 'is_correct' => false],
                            ['choice_text' => 'Uniquement sous pression constante', 'is_correct' => false],
                        ],
                        'explanation' => 'Les frottements, mélanges, gradients finis de température et autres irréversibilités génèrent de l’entropie.',
                    ],

                    [
                        'question' => 'Un transfert spontané de chaleur entre deux corps à températures différentes est irréversible dans le modèle réel.',
                        'choices' => [
                            ['choice_text' => 'Vrai', 'is_correct' => true],
                            ['choice_text' => 'Faux', 'is_correct' => false],
                            ['choice_text' => 'Uniquement si les masses sont égales', 'is_correct' => false],
                            ['choice_text' => 'Uniquement dans le vide', 'is_correct' => false],
                        ],
                        'explanation' => 'Un transfert à travers une différence finie de température génère de l’entropie et constitue une irréversibilité.',
                    ],

                    [
                        'question' => 'Pour un système isolé évoluant spontanément, quelle direction est compatible avec le deuxième principe ?',
                        'choices' => [
                            ['choice_text' => 'L’entropie totale augmente ou reste constante', 'is_correct' => true],
                            ['choice_text' => 'L’entropie totale diminue nécessairement', 'is_correct' => false],
                            ['choice_text' => 'L’entropie totale est toujours nulle', 'is_correct' => false],
                            ['choice_text' => 'L’entropie devient négative dans tous les cas', 'is_correct' => false],
                        ],
                        'explanation' => 'Pour un système isolé, ΔS ≥ 0.',
                    ],

                    [
                        'question' => 'Pourquoi l’entropie est-elle une fonction d’état alors que la chaleur ne l’est pas ?',
                        'choices' => [
                            ['choice_text' => 'La variation d’entropie dépend uniquement des états initial et final, contrairement à la chaleur échangée', 'is_correct' => true],
                            ['choice_text' => 'L’entropie dépend toujours du chemin', 'is_correct' => false],
                            ['choice_text' => 'La chaleur est toujours nulle', 'is_correct' => false],
                            ['choice_text' => 'L’entropie est une énergie', 'is_correct' => false],
                        ],
                        'explanation' => 'S est une fonction d’état. Q dépend du chemin, tandis que ΔS entre deux états est déterminé par ces états.',
                    ],

                    [
                        'question' => 'Pourquoi une machine thermique réversible peut-elle servir de référence pour établir un rendement maximal ?',
                        'choices' => [
                            ['choice_text' => 'Parce qu’elle ne produit pas d’entropie dans le modèle idéal', 'is_correct' => true],
                            ['choice_text' => 'Parce qu’elle transforme toute chaleur en travail', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’elle ne possède aucune source froide', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’elle fonctionne sans différence de température', 'is_correct' => false],
                        ],
                        'explanation' => 'Une machine réversible représente la limite idéale sans production d’entropie pour les mêmes températures de source.',
                    ],

                    [
                        'question' => 'Pour un transfert thermique réversible à température constante T, la variation d’entropie vaut...',
                        'choices' => [
                            ['choice_text' => 'ΔS = Q_rev/T', 'is_correct' => true],
                            ['choice_text' => 'ΔS = T/Q_rev', 'is_correct' => false],
                            ['choice_text' => 'ΔS = Q_revT', 'is_correct' => false],
                            ['choice_text' => 'ΔS = Q_rev + T', 'is_correct' => false],
                        ],
                        'explanation' => 'À température constante, l’intégrale ∫δQ_rev/T devient simplement Q_rev/T.',
                    ],

                    [
                        'question' => 'Dans un système réel, pourquoi l’entropie est-elle souvent considérée comme une mesure de la perte de capacité à convertir l’énergie en travail utile ?',
                        'choices' => [
                            ['choice_text' => Les irréversibilités limitent la quantité de travail utile récupérable', 'is_correct' => true],
                            ['choice_text' => 'L’entropie est exactement égale à la perte d’énergie', 'is_correct' => false],
                            ['choice_text' => 'Toute entropie détruit de la matière', 'is_correct' => false],
                            ['choice_text' => 'L’énergie totale cesse d’être conservée', 'is_correct' => false],
                        ],
                        'explanation' => 'L’entropie ne représente pas directement une énergie perdue, mais son augmentation est associée à des restrictions sur la conversion d’énergie en travail utile.',
                    ],
                ],
            ],

            // ============================================================
            // QUIZ 6 — Cycles thermodynamiques
            // ============================================================

            [
                'title' => 'Cycles thermodynamiques et rendement',
                'description' => 'Analyse élémentaire des cycles moteurs, frigorifiques et du cycle de Carnot.',
                'questions' => [

                    [
                        'question' => 'Dans un cycle thermodynamique complet, le système revient à son état initial. Que vaut ΔU ?',
                        'choices' => [
                            ['choice_text' => '0', 'is_correct' => true],
                            ['choice_text' => 'Q', 'is_correct' => false],
                            ['choice_text' => 'W', 'is_correct' => false],
                            ['choice_text' => 'Toujours positif', 'is_correct' => false],
                        ],
                        'explanation' => 'L’énergie interne est une fonction d’état et revient à sa valeur initiale après un cycle.',
                    ],

                    [
                        'question' => 'Une machine thermique reçoit Qh = 1000 J d’une source chaude et rejette Qc = 700 J. Quel travail net fournit-elle ?',
                        'choices' => [
                            ['choice_text' => '300 J', 'is_correct' => true],
                            ['choice_text' => '1700 J', 'is_correct' => false],
                            ['choice_text' => '700 J', 'is_correct' => false],
                            ['choice_text' => '-300 J', 'is_correct' => false],
                        ],
                        'explanation' => 'Sur un cycle, W = Qh - Qc = 1000 - 700 = 300 J.',
                    ],

                    [
                        'question' => 'Quel est le rendement thermique de la machine précédente ?',
                        'choices' => [
                            ['choice_text' => '30 %', 'is_correct' => true],
                            ['choice_text' => '70 %', 'is_correct' => false],
                            ['choice_text' => '43 %', 'is_correct' => false],
                            ['choice_text' => '300 %', 'is_correct' => false],
                        ],
                        'explanation' => 'η = W/Qh = 300/1000 = 0,30 = 30 %.',
                    ],

                    [
                        'question' => 'Quel cycle idéal fournit la limite supérieure du rendement entre deux températures de sources ?',
                        'choices' => [
                            ['choice_text' => 'Le cycle de Carnot', 'is_correct' => true],
                            ['choice_text' => 'Le cycle de Hooke', 'is_correct' => false],
                            ['choice_text' => 'Le cycle de Newton', 'is_correct' => false],
                            ['choice_text' => 'Le cycle de Bernoulli', 'is_correct' => false],
                        ],
                        'explanation' => 'Le cycle de Carnot est un cycle réversible idéal et donne la limite maximale théorique de rendement.',
                    ],

                    [
                        'question' => 'Quel est le rendement de Carnot d’une machine fonctionnant entre Th = 500 K et Tc = 300 K ?',
                        'choices' => [
                            ['choice_text' => '40 %', 'is_correct' => true],
                            ['choice_text' => '60 %', 'is_correct' => false],
                            ['choice_text' => '20 %', 'is_correct' => false],
                            ['choice_text' => '80 %', 'is_correct' => false],
                        ],
                        'explanation' => 'ηC = 1 - Tc/Th = 1 - 300/500 = 0,40.',
                    ],

                    [
                        'question' => 'Comment évolue le rendement de Carnot lorsque la température de la source froide augmente tandis que la source chaude reste fixe ?',
                        'choices' => [
                            ['choice_text' => 'Il diminue', 'is_correct' => true],
                            ['choice_text' => 'Il augmente', 'is_correct' => false],
                            ['choice_text' => 'Il reste toujours identique', 'is_correct' => false],
                            ['choice_text' => 'Il devient nécessairement égal à 100 %', 'is_correct' => false],
                        ],
                        'explanation' => 'ηC = 1 - Tc/Th. Une augmentation de Tc réduit donc le rendement maximal.',
                    ],

                    [
                        'question' => 'Quel est le coefficient de performance d’un réfrigérateur ?',
                        'choices' => [
                            ['choice_text' => 'COP = Qf/W', 'is_correct' => true],
                            ['choice_text' => 'COP = W/Qf', 'is_correct' => false],
                            ['choice_text' => 'COP = Qh/Qf', 'is_correct' => false],
                            ['choice_text' => 'COP = Qf + W', 'is_correct' => false],
                        ],
                        'explanation' => 'Pour un réfrigérateur, le COP est le rapport de la chaleur extraite de la source froide au travail fourni.',
                    ],

                    [
                        'question' => 'Pourquoi le coefficient de performance d’une pompe à chaleur peut-il être supérieur à 1 sans violer la conservation de l’énergie ?',
                        'choices' => [
                            ['choice_text' => Il mesure une chaleur transférée par rapport au travail fourni, et non un rendement énergétique classique', 'is_correct' => true],
                            ['choice_text' => 'La pompe crée de l’énergie', 'is_correct' => false],
                            ['choice_text' => 'Le deuxième principe n’est plus valable', 'is_correct' => false],
                            ['choice_text' => 'Le travail fourni est nécessairement négatif', 'is_correct' => false],
                        ],
                        'explanation' => 'Une pompe à chaleur déplace de la chaleur d’une source vers une autre. Le COP peut dépasser 1 sans créer d’énergie.',
                    ],

                    [
                        'question' => 'Dans le diagramme P-V d’un cycle moteur parcouru dans le sens horaire, l’aire enfermée représente généralement...',
                        'choices' => [
                            ['choice_text' => 'Le travail net fourni par le système', 'is_correct' => true],
                            ['choice_text' => 'La chaleur nette toujours nulle', 'is_correct' => false],
                            ['choice_text' => 'La variation d’énergie interne sur un cycle', 'is_correct' => false],
                            ['choice_text' => 'La masse du fluide', 'is_correct' => false],
                        ],
                        'explanation' => 'L’intégrale cyclique ∮P dV représente le travail net. Pour un cycle moteur dans le sens horaire, il est positif selon la convention utilisée ici.',
                    ],

                    [
                        'question' => 'Pourquoi aucun moteur thermique réel ne peut atteindre exactement le rendement de Carnot correspondant aux mêmes températures de fonctionnement ?',
                        'choices' => [
                            ['choice_text' => 'Les processus réels comportent des irréversibilités et des pertes', 'is_correct' => true],
                            ['choice_text' => 'La conservation de l’énergie est fausse dans les moteurs', 'is_correct' => false],
                            ['choice_text' => 'Le cycle de Carnot n’a aucun intérêt théorique', 'is_correct' => false],
                            ['choice_text' => 'Les machines réelles ne possèdent pas de source froide', 'is_correct' => false],
                        ],
                        'explanation' => 'Le rendement de Carnot est une limite idéale obtenue pour un cycle entièrement réversible.',
                    ],
                ],
            ],

            // ============================================================
            // QUIZ 7 — Mélanges et systèmes thermiques
            // ============================================================

            [
                'title' => 'Bilans thermiques et systèmes composés',
                'description' => 'Application de la conservation de l’énergie aux mélanges, calorimètres et échanges thermiques.',
                'questions' => [

                    [
                        'question' => 'Dans un calorimètre idéalement isolé, un objet chaud est placé dans de l’eau froide. Quelle condition énergétique peut être utilisée ?',
                        'choices' => [
                            ['choice_text' => 'La chaleur perdue par les corps chauds est égale à la chaleur gagnée par les corps froids', 'is_correct' => true],
                            ['choice_text' => 'Tous les corps gardent leur énergie initiale', 'is_correct' => false],
                            ['choice_text' => 'La température finale est toujours la moyenne arithmétique', 'is_correct' => false],
                            ['choice_text' => 'La chaleur totale devient nulle indépendamment des échanges internes', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans un système thermiquement isolé, l’énergie totale se conserve et les échanges internes se compensent.',
                    ],

                    [
                        'question' => 'On mélange 1 kg d’eau à 80 °C avec 1 kg d’eau à 20 °C dans un calorimètre idéal sans pertes. Quelle température finale obtient-on ?',
                        'choices' => [
                            ['choice_text' => '50 °C', 'is_correct' => true],
                            ['choice_text' => '40 °C', 'is_correct' => false],
                            ['choice_text' => '60 °C', 'is_correct' => false],
                            ['choice_text' => '80 °C', 'is_correct' => false],
                        ],
                        'explanation' => 'Les masses et capacités thermiques sont identiques, donc la température finale est la moyenne : (80 + 20)/2 = 50 °C.',
                    ],

                    [
                        'question' => 'Si les deux masses d’eau précédentes sont différentes, peut-on encore utiliser simplement la moyenne arithmétique des températures ?',
                        'choices' => [
                            ['choice_text' => 'Non, il faut pondérer par les capacités thermiques', 'is_correct' => true],
                            ['choice_text' => 'Oui, toujours', 'is_correct' => false],
                            ['choice_text' => 'Oui, mais seulement si les températures sont négatives', 'is_correct' => false],
                            ['choice_text' => 'Non, car la conservation de l’énergie ne s’applique plus', 'is_correct' => false],
                        ],
                        'explanation' => 'La température finale dépend de m c pour chaque corps, et non uniquement des températures initiales.',
                    ],

                    [
                        'question' => 'Un calorimètre réel absorbe une partie de la chaleur échangée. Quelle conséquence cela a-t-il sur un calcul qui suppose un calorimètre idéal ?',
                        'choices' => [
                            ['choice_text' => 'Le calcul peut présenter une erreur systématique si la capacité thermique du calorimètre est négligée', 'is_correct' => true],
                            ['choice_text' => 'Le résultat devient toujours exact', 'is_correct' => false],
                            ['choice_text' => 'La chaleur disparaît réellement', 'is_correct' => false],
                            ['choice_text' => 'La température finale devient indépendante des masses', 'is_correct' => false],
                        ],
                        'explanation' => 'Le calorimètre réel constitue une capacité thermique supplémentaire qui doit être incluse dans le bilan.',
                    ],

                    [
                        'question' => 'Lorsqu’une glace à 0 °C fond entièrement à pression atmosphérique, la température de la glace reste approximativement constante pendant la fusion.',
                        'choices' => [
                            ['choice_text' => 'Vrai', 'is_correct' => true],
                            ['choice_text' => 'Faux', 'is_correct' => false],
                            ['choice_text' => 'Uniquement si la masse est nulle', 'is_correct' => false],
                            ['choice_text' => 'Uniquement sous vide', 'is_correct' => false],
                        ],
                        'explanation' => 'Pour un corps pur au point de fusion et à pression donnée, la chaleur fournie sert principalement au changement de phase.',
                    ],

                    [
                        'question' => 'Quelle énergie est nécessaire pour faire fondre 0,5 kg de glace si la chaleur latente de fusion vaut 334 kJ/kg ?',
                        'choices' => [
                            ['choice_text' => '167 kJ', 'is_correct' => true],
                            ['choice_text' => '668 kJ', 'is_correct' => false],
                            ['choice_text' => '334 kJ', 'is_correct' => false],
                            ['choice_text' => '1670 kJ', 'is_correct' => false],
                        ],
                        'explanation' => 'Q = mLf = 0,5 × 334 = 167 kJ.',
                    ],

                    [
                        'question' => 'Lorsqu’une substance subit plusieurs étapes thermiques successives, le bilan énergétique total peut être obtenu en...',
                        'choices' => [
                            ['choice_text' => 'Additionnant les échanges d’énergie de chaque étape', 'is_correct' => true],
                            ['choice_text' => 'Considérant uniquement la dernière étape', 'is_correct' => false],
                            ['choice_text' => 'Ignorant les changements d’état', 'is_correct' => false],
                            ['choice_text' => 'Additionnant uniquement les températures', 'is_correct' => false],
                        ],
                        'explanation' => 'Le premier principe s’applique à chaque étape et les bilans énergétiques peuvent être combinés.',
                    ],

                    [
                        'question' => 'Pourquoi une température finale d’équilibre thermique se situe-t-elle généralement entre les températures initiales de deux corps isolés en contact, sans changement d’état ?',
                        'choices' => [
                            ['choice_text' => L’énergie se transfère du corps chaud vers le corps froid jusqu’à égalisation des températures', 'is_correct' => true],
                            ['choice_text' => 'La température moyenne est toujours imposée par la pression atmosphérique', 'is_correct' => false],
                            ['choice_text' => 'La chaleur se déplace du froid vers le chaud spontanément', 'is_correct' => false],
                            ['choice_text' => 'Les températures peuvent diverger indéfiniment', 'is_correct' => false],
                        ],
                        'explanation' => 'L’équilibre thermique s’établit par transfert d’énergie jusqu’à atteindre une température commune compatible avec la conservation de l’énergie.',
                    ],

                    [
                        'question' => 'Pourquoi un métal chaud placé dans l’eau peut-il atteindre une température finale différente de la simple moyenne des températures ?',
                        'choices' => [
                            ['choice_text' => Les capacités thermiques et les masses des deux matériaux peuvent être différentes', 'is_correct' => true],
                            ['choice_text' => 'La conservation de l’énergie est violée', 'is_correct' => false],
                            ['choice_text' => 'La température finale est toujours la moyenne', 'is_correct' => false],
                            ['choice_text' => 'L’eau ne possède pas de capacité thermique', 'is_correct' => false],
                        ],
                        'explanation' => 'La température finale dépend des capacités thermiques totales des deux corps.',
                    ],

                    [
                        'question' => 'Dans un système isolé contenant plusieurs composants, quelle grandeur globale doit être surveillée pour vérifier le bilan énergétique ?',
                        'choices' => [
                            ['choice_text' => L’énergie totale du système', 'is_correct' => true],
                            ['choice_text' => 'La température du composant le plus froid uniquement', 'is_correct' => false],
                            ['choice_text' => 'La masse du calorimètre uniquement', 'is_correct' => false],
                            ['choice_text' => 'La pression atmosphérique uniquement', 'is_correct' => false],
                        ],
                        'explanation' => 'L’énergie totale du système isolé se conserve, même si elle se répartit différemment entre ses composants.',
                    ],
                ],
            ],

            // ============================================================
            // QUIZ 8 — Applications et analyse thermodynamique
            // ============================================================

            [
                'title' => 'Applications et analyse thermodynamique',
                'description' => 'Analyse de situations réelles combinant bilans énergétiques, transferts thermiques et principes thermodynamiques.',
                'questions' => [

                    [
                        'question' => 'Pourquoi la compression d’un gaz dans un moteur peut-elle augmenter fortement sa température ?',
                        'choices' => [
                            ['choice_text' => Le travail exercé sur le gaz augmente son énergie interne', 'is_correct' => true],
                            ['choice_text' => 'La masse du gaz augmente', 'is_correct' => false],
                            ['choice_text' => 'La compression détruit l’énergie potentielle', 'is_correct' => false],
                            ['choice_text' => 'La pression n’a aucune relation avec l’énergie', 'is_correct' => false],
                        ],
                        'explanation' => 'Lors d’une compression rapide et approximativement adiabatique, le travail reçu augmente l’énergie interne et donc la température.',
                    ],

                    [
                        'question' => 'Pourquoi une détente Joule-Thomson peut-elle provoquer un changement de température d’un gaz réel ?',
                        'choices' => [
                            ['choice_text' => Les interactions moléculaires réelles rendent l’énergie interne dépendante de paramètres autres que la seule température', 'is_correct' => true],
                            ['choice_text' => 'Un gaz réel est toujours parfaitement idéal', 'is_correct' => false],
                            ['choice_text' => 'La conservation de l’énergie est violée', 'is_correct' => false],
                            ['choice_text' => 'La masse des molécules change lors de la détente', 'is_correct' => false],
                        ],
                        'explanation' => 'L’effet Joule-Thomson est lié au comportement non idéal des gaz et aux interactions moléculaires, notamment lors d’une détente par vanne sous enthalpie constante.',
                    ],

                    [
                        'question' => 'Dans un échangeur thermique idéal sans pertes vers l’extérieur, la chaleur perdue par le fluide chaud est égale à...',
                        'choices' => [
                            ['choice_text' => 'La chaleur gagnée par le fluide froid', 'is_correct' => true],
                            ['choice_text' => 'La moitié de la chaleur gagnée par le fluide froid', 'is_correct' => false],
                            ['choice_text' => 'Zéro dans tous les cas', 'is_correct' => false],
                            ['choice_text' => 'La chaleur du fluide chaud initiale entière sans tenir compte des températures finales', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans un échangeur adiabatique vis-à-vis de l’extérieur, les échanges internes de chaleur se compensent.',
                    ],

                    [
                        'question' => 'Pourquoi augmenter l’épaisseur d’un isolant thermique réduit-il généralement le flux de chaleur par conduction à travers une paroi plane ?',
                        'choices' => [
                            ['choice_text' => La résistance thermique de conduction augmente avec l’épaisseur', 'is_correct' => true],
                            ['choice_text' => 'La température devient automatiquement uniforme', 'is_correct' => false],
                            ['choice_text' => 'La conductivité du matériau devient nulle', 'is_correct' => false],
                            ['choice_text' => 'La chaleur cesse d’exister dans l’isolant', 'is_correct' => false],
                        ],
                        'explanation' => 'Pour une paroi plane, Rth = L/(kA), donc augmenter L augmente la résistance thermique.',
                    ],

                    [
                        'question' => 'Quel phénomène explique principalement la montée de chaleur d’un gaz lors d’une compression adiabatique rapide ?',
                        'choices' => [
                            ['choice_text' => 'Le travail reçu par le gaz', 'is_correct' => true],
                            ['choice_text' => 'Un transfert thermique depuis le vide', 'is_correct' => false],
                            ['choice_text' => 'Une diminution de sa masse', 'is_correct' => false],
                            ['choice_text' => 'Une radiation obligatoire vers l’extérieur', 'is_correct' => false],
                        ],
                        'explanation' => 'Comme Q ≈ 0, le travail effectué sur le gaz augmente son énergie interne.',
                    ],

                    [
                        'question' => 'Pourquoi les pertes thermiques d’un moteur augmentent-elles lorsque de grandes différences de température existent avec l’environnement ?',
                        'choices' => [
                            ['choice_text' => Les mécanismes de transfert thermique sont généralement renforcés par de plus grands écarts de température', 'is_correct' => true],
                            ['choice_text' => 'Les transferts diminuent toujours lorsque l’écart augmente', 'is_correct' => false],
                            ['choice_text' => 'La température n’influence jamais les échanges thermiques', 'is_correct' => false],
                            ['choice_text' => 'La chaleur devient sans unité', 'is_correct' => false],
                        ],
                        'explanation' => 'Conduction, convection et rayonnement dépendent généralement de la différence de température, avec des lois spécifiques à chaque mécanisme.',
                    ],

                    [
                        'question' => 'Pourquoi une pompe à chaleur peut-elle consommer beaucoup plus d’électricité lorsque l’écart de température entre source chaude et source froide augmente ?',
                        'choices' => [
                            ['choice_text' => Le transfert thermique devient thermodynamiquement plus exigeant et le COP peut diminuer', 'is_correct' => true],
                            ['choice_text' => 'La conservation de l’énergie cesse d’être valable', 'is_correct' => false],
                            ['choice_text' => 'La masse du fluide frigorigène disparaît', 'is_correct' => false],
                            ['choice_text' => 'Le COP augmente toujours avec l’écart de température', 'is_correct' => false],
                        ],
                        'explanation' => 'Un écart de température plus important impose généralement une élévation thermodynamique plus difficile et réduit les performances possibles.',
                    ],

                    [
                        'question' => 'Pourquoi une machine thermique réelle produit-elle de l’entropie ?',
                        'choices' => [
                            ['choice_text' => Les frottements, transferts à température finie et autres irréversibilités génèrent de l’entropie', 'is_correct' => true],
                            ['choice_text' => 'Parce que l’énergie n’est pas conservée', 'is_correct' => false],
                            ['choice_text' => 'Parce que la chaleur est toujours négative', 'is_correct' => false],
                            ['choice_text' => 'Parce que tout cycle réel est nécessairement isotherme', 'is_correct' => false],
                        ],
                        'explanation' => 'Les irréversibilités réelles entraînent une production d’entropie, ce qui réduit les performances par rapport au cycle réversible idéal.',
                    ],

                    [
                        'question' => 'Pourquoi un bilan thermodynamique professionnel doit-il préciser la convention de signe utilisée pour Q et W ?',
                        'choices' => [
                            ['choice_text' => 'Parce que les signes des échanges dépendent de la convention choisie et peuvent inverser les équations', 'is_correct' => true],
                            ['choice_text' => 'Parce que les signes sont sans importance', 'is_correct' => false],
                            ['choice_text' => 'Parce que Q est toujours positif', 'is_correct' => false],
                            ['choice_text' => 'Parce que W est toujours nul', 'is_correct' => false],
                        ],
                        'explanation' => 'Les conventions thermodynamiques diffèrent selon les domaines. Il faut donc définir clairement les signes avant les calculs.',
                    ],

                    [
                        'question' => 'Pourquoi l’utilisation des diagrammes P-V et T-S est-elle utile dans l’analyse des cycles thermodynamiques ?',
                        'choices' => [
                            ['choice_text' => 'Ils permettent de visualiser les transformations, les échanges et certaines propriétés du cycle', 'is_correct' => true],
                            ['choice_text' => 'Ils remplacent toutes les équations thermodynamiques', 'is_correct' => false],
                            ['choice_text' => 'Ils rendent automatiquement les cycles réversibles', 'is_correct' => false],
                            ['choice_text' => 'Ils ne servent qu’à représenter la masse du système', 'is_correct' => false],
                        ],
                        'explanation' => 'Les diagrammes thermodynamiques donnent une représentation géométrique des processus et facilitent l’interprétation des bilans.',
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
                    'difficulty' => 'Intermediate',
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

                // Mélange des choix avant d'attribuer l'ordre.
                // Ainsi, la bonne réponse n'est pas prévisible par sa position.
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