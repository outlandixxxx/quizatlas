<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class ElectromagnetismProfessionalSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'electromagnetism')->firstOrFail();

        $quizzes = [

            // ============================================================
            // QUIZ 1 — Formulation avancée des équations de Maxwell
            // ============================================================

            [
                'title' => 'Équations de Maxwell et formulation covariante',
                'description' => 'Analyse professionnelle des équations de Maxwell, des potentiels et des principes de conservation.',
                'questions' => [

                    [
                        'question' => 'Quelle équation de Maxwell exprime localement la conservation de la charge électrique ?',
                        'choices' => [
                            ['choice_text' => 'Elle est compatible avec l’équation de continuité ∂ρ/∂t + ∇·J = 0', 'is_correct' => true],
                            ['choice_text' => 'Elle impose ∇·E = 0 dans tout matériau', 'is_correct' => false],
                            ['choice_text' => 'Elle impose ∇×B = 0 pour tout courant', 'is_correct' => false],
                            ['choice_text' => 'Elle impose ρ = constante en tout point', 'is_correct' => false],
                        ],
                        'explanation' => 'La compatibilité des équations de Maxwell avec l’équation de continuité garantit la conservation locale de la charge.',
                    ],

                    [
                        'question' => 'Quelle forme différentielle de la loi de Faraday-Maxwell est correcte dans le vide ?',
                        'choices' => [
                            ['choice_text' => '∇×E = -∂B/∂t', 'is_correct' => true],
                            ['choice_text' => '∇×E = ∂B/∂t', 'is_correct' => false],
                            ['choice_text' => '∇·E = -∂B/∂t', 'is_correct' => false],
                            ['choice_text' => '∇×B = -∂E/∂t', 'is_correct' => false],
                        ],
                        'explanation' => 'La variation temporelle du champ magnétique produit un champ électrique tourbillonnaire.',
                    ],

                    [
                        'question' => 'Quelle forme différentielle de la loi d’Ampère-Maxwell est correcte dans le vide ?',
                        'choices' => [
                            ['choice_text' => '∇×B = μ0J + μ0ε0∂E/∂t', 'is_correct' => true],
                            ['choice_text' => '∇×B = μ0J - μ0ε0∂E/∂t', 'is_correct' => false],
                            ['choice_text' => '∇×B = ε0J + ε0μ0∂B/∂t', 'is_correct' => false],
                            ['choice_text' => '∇·B = μ0J + μ0ε0∂E/∂t', 'is_correct' => false],
                        ],
                        'explanation' => 'Le terme μ0ε0∂E/∂t est le courant de déplacement introduit par Maxwell.',
                    ],

                    [
                        'question' => 'Pourquoi le terme de courant de déplacement est-il indispensable dans l’équation d’Ampère généralisée ?',
                        'choices' => [
                            ['choice_text' => 'Il garantit la compatibilité avec la conservation locale de la charge et permet de traiter les champs électriques variables', 'is_correct' => true],
                            ['choice_text' => 'Il supprime le courant de conduction', 'is_correct' => false],
                            ['choice_text' => 'Il remplace le champ magnétique par un champ scalaire', 'is_correct' => false],
                            ['choice_text' => 'Il n’intervient que dans les matériaux ferromagnétiques', 'is_correct' => false],
                        ],
                        'explanation' => 'Sans terme de déplacement, la divergence de la loi d’Ampère serait incompatible avec l’équation de continuité pour une charge variable.',
                    ],

                    [
                        'question' => 'Quelle propriété permet d’introduire un potentiel vecteur magnétique A tel que B = ∇×A ?',
                        'choices' => [
                            ['choice_text' => 'La condition ∇·B = 0', 'is_correct' => true],
                            ['choice_text' => 'La condition ∇×B = 0', 'is_correct' => false],
                            ['choice_text' => 'La condition ∇·E = 0', 'is_correct' => false],
                            ['choice_text' => 'La condition B = constante partout', 'is_correct' => false],
                        ],
                        'explanation' => 'Tout champ de divergence nulle peut localement être représenté comme le rotationnel d’un potentiel vecteur.',
                    ],

                    [
                        'question' => 'En électromagnétisme, une transformation de jauge du potentiel vecteur A peut s’écrire...',
                        'choices' => [
                            ['choice_text' => 'A′ = A + ∇χ', 'is_correct' => true],
                            ['choice_text' => 'A′ = A + ∂χ/∂t', 'is_correct' => false],
                            ['choice_text' => 'A′ = A × χ', 'is_correct' => false],
                            ['choice_text' => 'A′ = χA²', 'is_correct' => false],
                        ],
                        'explanation' => 'L’ajout d’un gradient scalaire à A ne modifie pas B = ∇×A.',
                    ],

                    [
                        'question' => 'Pourquoi le champ électromagnétique reste-t-il invariant sous une transformation de jauge correctement construite ?',
                        'choices' => [
                            ['choice_text' => 'Les combinaisons dérivées des potentiels qui définissent E et B restent inchangées', 'is_correct' => true],
                            ['choice_text' => 'Les potentiels sont directement observables indépendamment des champs', 'is_correct' => false],
                            ['choice_text' => 'La transformation change nécessairement E et B de façon arbitraire', 'is_correct' => false],
                            ['choice_text' => 'La jauge supprime les champs physiques', 'is_correct' => false],
                        ],
                        'explanation' => 'Les champs physiques sont invariants sous les transformations de jauge appropriées des potentiels.',
                    ],

                    [
                        'question' => 'Quelle équation exprime la divergence du champ électrique dans un milieu matériel en termes de déplacement électrique D ?',
                        'choices' => [
                            ['choice_text' => '∇·D = ρlibre', 'is_correct' => true],
                            ['choice_text' => '∇·D = ρtot/ε0', 'is_correct' => false],
                            ['choice_text' => '∇×D = ρlibre', 'is_correct' => false],
                            ['choice_text' => '∇·D = μ0J', 'is_correct' => false],
                        ],
                        'explanation' => 'Le déplacement électrique permet d’écrire la loi de Gauss en ne faisant intervenir explicitement que les charges libres.',
                    ],

                    [
                        'question' => 'Pourquoi l’écriture avec D et H est-elle utile dans les milieux matériels ?',
                        'choices' => [
                            ['choice_text' => 'Elle sépare la réponse du matériau des sources libres dans une description macroscopique', 'is_correct' => true],
                            ['choice_text' => 'Elle élimine toutes les propriétés constitutives', 'is_correct' => false],
                            ['choice_text' => 'Elle impose toujours D = E et H = B', 'is_correct' => false],
                            ['choice_text' => 'Elle rend tous les matériaux isotropes', 'is_correct' => false],
                        ],
                        'explanation' => 'Les champs D et H permettent de traiter séparément charges et courants libres des contributions liées à la matière.',
                    ],

                    [
                        'question' => 'Pourquoi les équations de Maxwell permettent-elles de démontrer l’existence d’ondes électromagnétiques dans le vide ?',
                        'choices' => [
                            ['choice_text' => 'Le couplage entre les variations temporelles de E et B produit une équation d’onde auto-entretenue', 'is_correct' => true],
                            ['choice_text' => 'Les charges doivent remplir le vide', 'is_correct' => false],
                            ['choice_text' => 'Le champ électrique statique suffit à créer une onde', 'is_correct' => false],
                            ['choice_text' => 'Le champ magnétique est toujours indépendant du temps', 'is_correct' => false],
                        ],
                        'explanation' => 'Les équations de Maxwell dans le vide conduisent à des équations d’onde pour E et B.',
                    ],

                ],
            ],

            // ============================================================
            // QUIZ 2 — Ondes électromagnétiques et propagation
            // ============================================================

            [
                'title' => 'Ondes électromagnétiques et propagation',
                'description' => 'Analyse professionnelle de la propagation en espace libre, dans les diélectriques et les milieux dispersifs.',
                'questions' => [

                    [
                        'question' => 'Quelle vitesse de propagation est obtenue à partir des équations de Maxwell dans le vide ?',
                        'choices' => [
                            ['choice_text' => 'c = 1/√(μ0ε0)', 'is_correct' => true],
                            ['choice_text' => 'c = μ0ε0', 'is_correct' => false],
                            ['choice_text' => 'c = √(μ0ε0)', 'is_correct' => false],
                            ['choice_text' => 'c = μ0/ε0', 'is_correct' => false],
                        ],
                        'explanation' => 'La combinaison des constantes électriques et magnétiques du vide donne c = 1/√(μ0ε0).',
                    ],

                    [
                        'question' => 'Dans une onde plane électromagnétique dans le vide, quelle relation entre E et B est correcte ?',
                        'choices' => [
                            ['choice_text' => 'E/B = c', 'is_correct' => true],
                            ['choice_text' => 'E/B = 1/c', 'is_correct' => false],
                            ['choice_text' => 'E/B = c²', 'is_correct' => false],
                            ['choice_text' => 'E/B = μ0ε0', 'is_correct' => false],
                        ],
                        'explanation' => 'Pour une onde plane dans le vide, E = cB en norme.',
                    ],

                    [
                        'question' => 'Dans une onde plane, les champs E et B sont-ils parallèles ?',
                        'choices' => [
                            ['choice_text' => 'Non, ils sont perpendiculaires entre eux et à la direction de propagation', 'is_correct' => true],
                            ['choice_text' => 'Oui, toujours', 'is_correct' => false],
                            ['choice_text' => 'Ils sont nécessairement parallèles à la propagation', 'is_correct' => false],
                            ['choice_text' => 'Ils n’ont aucune direction définie', 'is_correct' => false],
                        ],
                        'explanation' => 'Une onde électromagnétique plane dans un milieu homogène isotrope usuel est transverse.',
                    ],

                    [
                        'question' => 'Quelle expression donne le nombre d’onde dans un milieu d’indice n pour une fréquence f ?',
                        'choices' => [
                            ['choice_text' => 'k = nω/c', 'is_correct' => true],
                            ['choice_text' => 'k = cω/n', 'is_correct' => false],
                            ['choice_text' => 'k = ω/(nc)', 'is_correct' => false],
                            ['choice_text' => 'k = n c/ω', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans un milieu non magnétique simple, k = nω/c.',
                    ],

                    [
                        'question' => 'Pourquoi une onde électromagnétique peut-elle avoir une vitesse de phase différente de c dans un matériau transparent ?',
                        'choices' => [
                            ['choice_text' => 'La polarisation du matériau modifie la relation de dispersion et donc la vitesse de propagation', 'is_correct' => true],
                            ['choice_text' => 'La constante de Planck change dans le matériau', 'is_correct' => false],
                            ['choice_text' => 'La lumière devient une onde mécanique', 'is_correct' => false],
                            ['choice_text' => 'La vitesse du vide dépend du matériau traversé', 'is_correct' => false],
                        ],
                        'explanation' => 'L’interaction du champ avec le milieu modifie la vitesse de phase.',
                    ],

                    [
                        'question' => 'Dans un milieu dispersif, pourquoi la vitesse de groupe diffère-t-elle généralement de la vitesse de phase ?',
                        'choices' => [
                            ['choice_text' => 'Parce que ω(k) n’est pas linéaire et que dω/dk diffère de ω/k', 'is_correct' => true],
                            ['choice_text' => 'Parce que la fréquence disparaît', 'is_correct' => false],
                            ['choice_text' => 'Parce que le nombre d’onde est toujours nul', 'is_correct' => false],
                            ['choice_text' => 'Parce que le champ magnétique cesse d’exister', 'is_correct' => false],
                        ],
                        'explanation' => 'La vitesse de phase est ω/k tandis que la vitesse de groupe est dω/dk.',
                    ],

                    [
                        'question' => 'Pourquoi une impulsion ultracourte est-elle particulièrement sensible à la dispersion ?',
                        'choices' => [
                            ['choice_text' => Sa large bande spectrale contient de nombreuses composantes qui acquièrent des retards différents', 'is_correct' => true],
                            ['choice_text' => 'Elle possède une seule fréquence exacte', 'is_correct' => false],
                            ['choice_text' => 'Elle ne contient aucun champ magnétique', 'is_correct' => false],
                            ['choice_text' => 'Elle ne peut pas être représentée en fréquence', 'is_correct' => false],
                        ],
                        'explanation' => 'Une faible durée temporelle implique une largeur spectrale importante et donc une forte sensibilité à la dispersion.',
                    ],

                    [
                        'question' => 'Pourquoi une phase de groupe n’est-elle pas toujours identique au transport d’énergie dans n’importe quel milieu ?',
                        'choices' => [
                            ['choice_text' => Les relations entre vitesse de groupe, énergie, absorption et causalité dépendent du régime de dispersion', 'is_correct' => true],
                            ['choice_text' => 'La vitesse de groupe est toujours égale à l’infini', 'is_correct' => false],
                            ['choice_text' => 'Le transport d’énergie ne dépend jamais du spectre', 'is_correct' => false],
                            ['choice_text' => 'Tous les milieux sont non dispersifs', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans les milieux complexes, les vitesses de phase, de groupe et de transport d’énergie peuvent nécessiter une interprétation distincte.',
                    ],

                    [
                        'question' => 'Pourquoi une onde plane monochromatique idéale est-elle insuffisante pour représenter un faisceau laser réel focalisé ?',
                        'choices' => [
                            ['choice_text' => Un faisceau focalisé possède une structure transverse et une distribution angulaire de composantes d’onde', 'is_correct' => true],
                            ['choice_text' => 'Une onde plane possède toujours une fréquence variable', 'is_correct' => false],
                            ['choice_text' => 'Un faisceau laser ne transporte aucune énergie', 'is_correct' => false],
                            ['choice_text' => 'Un laser réel ne peut pas être décrit par des champs', 'is_correct' => false],
                        ],
                        'explanation' => 'La focalisation exige une superposition de composantes spatiales et ne correspond pas à une onde plane unique.',
                    ],

                    [
                        'question' => 'Pourquoi les conditions de frontière déterminent-elles les coefficients de réflexion et de transmission à une interface ?',
                        'choices' => [
                            ['choice_text' => Les composantes tangentielles et normales des champs doivent satisfaire les conditions dérivées des équations de Maxwell', 'is_correct' => true],
                            ['choice_text' => 'Les coefficients sont totalement arbitraires', 'is_correct' => false],
                            ['choice_text' => 'Les interfaces ne modifient jamais les champs', 'is_correct' => false],
                            ['choice_text' => 'Seule la température fixe la réflexion', 'is_correct' => false],
                        ],
                        'explanation' => 'Les conditions aux limites imposent la continuité ou le saut approprié des composantes des champs.',
                    ],

                ],
            ],

            // ============================================================
            // QUIZ 3 — Guides d’onde et lignes de transmission
            // ============================================================

            [
                'title' => 'Guides d’onde et lignes de transmission',
                'description' => 'Étude professionnelle des modes guidés, impédance, réflexion et propagation dans les structures guidantes.',
                'questions' => [

                    [
                        'question' => 'Pourquoi un guide d’onde ne supporte-t-il généralement pas n’importe quelle fréquence ?',
                        'choices' => [
                            ['choice_text' => La géométrie impose des conditions aux limites qui sélectionnent des modes de propagation admissibles', 'is_correct' => true],
                            ['choice_text' => 'La fréquence est toujours fixée par la longueur du câble uniquement', 'is_correct' => false],
                            ['choice_text' => 'Le champ électrique est nécessairement nul à toute fréquence', 'is_correct' => false],
                            ['choice_text' => 'Tous les guides sont électriquement transparents', 'is_correct' => false],
                        ],
                        'explanation' => 'Les solutions propres du problème aux limites définissent les modes et leurs fréquences de coupure.',
                    ],

                    [
                        'question' => 'Que signifie physiquement une fréquence de coupure dans un guide métallique idéal ?',
                        'choices' => [
                            ['choice_text' => 'En dessous de cette fréquence, un mode donné ne se propage pas comme onde progressive dans le guide', 'is_correct' => true],
                            ['choice_text' => 'Le champ magnétique devient nécessairement infini', 'is_correct' => false],
                            ['choice_text' => 'Tous les modes deviennent identiques', 'is_correct' => false],
                            ['choice_text' => 'La puissance devient automatiquement nulle dans tout guide', 'is_correct' => false],
                        ],
                        'explanation' => 'Sous la coupure, la constante de propagation longitudinale devient non propagative pour le mode considéré.',
                    ],

                    [
                        'question' => 'Pourquoi les modes TE et TM sont-ils distingués dans les guides d’onde ?',
                        'choices' => [
                            ['choice_text' => Ils se distinguent par la présence ou l’absence d’une composante longitudinale de E ou de H', 'is_correct' => true],
                            ['choice_text' => 'Ils possèdent toujours la même structure de champ', 'is_correct' => false],
                            ['choice_text' => 'TE signifie température électrique', 'is_correct' => false],
                            ['choice_text' => 'TM interdit toute composante électrique', 'is_correct' => false],
                        ],
                        'explanation' => 'TE signifie Ez = 0 avec Hz non nul, tandis que TM signifie Hz = 0 avec Ez non nul, selon l’axe de propagation choisi.',
                    ],

                    [
                        'question' => 'Pourquoi un guide rectangulaire métallique ne supporte-t-il pas le mode TEM pur ?',
                        'choices' => [
                            ['choice_text' => Sa géométrie à conducteur unique ne permet pas les conditions nécessaires à une solution TEM non triviale', 'is_correct' => true],
                            ['choice_text' => 'Le mode TEM nécessite toujours un vide absolu', 'is_correct' => false],
                            ['choice_text' => 'Les conducteurs métalliques empêchent toute propagation électromagnétique', 'is_correct' => false],
                            ['choice_text' => 'Le mode TEM est réservé aux fibres optiques', 'is_correct' => false],
                        ],
                        'explanation' => 'Un guide creux métallique à conducteur unique supporte des modes TE/TM mais pas un mode TEM pur.',
                    ],

                    [
                        'question' => 'Quel mode est généralement le mode dominant d’un guide rectangulaire métallique ?',
                        'choices' => [
                            ['choice_text' => 'TE10', 'is_correct' => true],
                            ['choice_text' => 'TM00', 'is_correct' => false],
                            ['choice_text' => 'TEM', 'is_correct' => false],
                            ['choice_text' => 'TE00', 'is_correct' => false],
                        ],
                        'explanation' => 'Pour une section rectangulaire standard, TE10 possède la plus faible fréquence de coupure.',
                    ],

                    [
                        'question' => 'Pourquoi la vitesse de phase dans un guide d’onde peut-elle être supérieure à c sans violer la relativité ?',
                        'choices' => [
                            ['choice_text' => La vitesse de phase ne représente pas à elle seule la vitesse de transport de l’information', 'is_correct' => true],
                            ['choice_text' => 'La relativité ne s’applique pas aux ondes guidées', 'is_correct' => false],
                            ['choice_text' => 'L’information se déplace effectivement plus vite que c', 'is_correct' => false],
                            ['choice_text' => 'La vitesse de la lumière dans le vide augmente dans un guide', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans certains guides, vφ peut dépasser c tandis que la vitesse de groupe et le transport causal restent compatibles avec la relativité.',
                    ],

                    [
                        'question' => 'Pourquoi une désadaptation d’impédance sur une ligne de transmission crée-t-elle une réflexion ?',
                        'choices' => [
                            ['choice_text' => Les conditions de continuité du courant et de la tension exigent une onde réfléchie pour satisfaire l’interface', 'is_correct' => true],
                            ['choice_text' => 'L’énergie disparaît instantanément à la charge', 'is_correct' => false],
                            ['choice_text' => 'Une ligne parfaitement adaptée réfléchit toujours 100 % du signal', 'is_correct' => false],
                            ['choice_text' => 'La fréquence de la source devient nulle', 'is_correct' => false],
                        ],
                        'explanation' => 'Une charge différente de l’impédance caractéristique produit un coefficient de réflexion non nul.',
                    ],

                    [
                        'question' => 'Quelle expression donne le coefficient de réflexion en tension à l’extrémité d’une ligne idéale ?',
                        'choices' => [
                            ['choice_text' => Γ = (ZL - Z0)/(ZL + Z0)', 'is_correct' => true],
                            ['choice_text' => 'Γ = (ZL + Z0)/(ZL - Z0)', 'is_correct' => false],
                            ['choice_text' => 'Γ = ZLZ0', 'is_correct' => false],
                            ['choice_text' => 'Γ = Z0/ZL', 'is_correct' => false],
                        ],
                        'explanation' => 'Le coefficient de réflexion dépend de la différence entre la charge et l’impédance caractéristique.',
                    ],

                    [
                        'question' => 'Que se passe-t-il idéalement lorsque ZL = Z0 sur une ligne de transmission ?',
                        'choices' => [
                            ['choice_text' => 'Le coefficient de réflexion est nul', 'is_correct' => true],
                            ['choice_text' => 'Toute la puissance est réfléchie', 'is_correct' => false],
                            ['choice_text' => 'La tension devient infinie', 'is_correct' => false],
                            ['choice_text' => 'La vitesse de propagation devient nulle', 'is_correct' => false],
                        ],
                        'explanation' => 'Une charge adaptée élimine la réflexion dans le modèle idéal.',
                    ],

                    [
                        'question' => 'Pourquoi les guides d’onde et lignes de transmission doivent-ils être analysés comme des systèmes distribués à haute fréquence ?',
                        'choices' => [
                            ['choice_text' => Les dimensions physiques deviennent comparables à la longueur d’onde et les variations spatiales des champs ne sont plus négligeables', 'is_correct' => true],
                            ['choice_text' => 'Les courants deviennent toujours nuls', 'is_correct' => false],
                            ['choice_text' => 'Les champs deviennent automatiquement statiques', 'is_correct' => false],
                            ['choice_text' => 'La loi d’Ohm cesse toujours d’exister', 'is_correct' => false],
                        ],
                        'explanation' => 'À haute fréquence, la distribution spatiale des champs et les délais de propagation deviennent essentiels.',
                    ],

                ],
            ],

            // ============================================================
            // QUIZ 4 — Électromagnétisme dans les matériaux
            // ============================================================

            [
                'title' => 'Électromagnétisme dans les matériaux',
                'description' => 'Analyse professionnelle des diélectriques, matériaux magnétiques, anisotropie et relations constitutives.',
                'questions' => [

                    [
                        'question' => 'Dans un diélectrique linéaire isotrope, quelle relation lie le déplacement électrique D au champ E ?',
                        'choices' => [
                            ['choice_text' => 'D = εE', 'is_correct' => true],
                            ['choice_text' => 'D = μE', 'is_correct' => false],
                            ['choice_text' => 'D = E/ε', 'is_correct' => false],
                            ['choice_text' => 'D = ε/E', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans un milieu linéaire isotrope, D = εE.',
                    ],

                    [
                        'question' => 'Dans un matériau magnétique linéaire isotrope, quelle relation simple est utilisée entre B et H ?',
                        'choices' => [
                            ['choice_text' => 'B = μH', 'is_correct' => true],
                            ['choice_text' => 'B = H/μ', 'is_correct' => false],
                            ['choice_text' => 'B = μ/H', 'is_correct' => false],
                            ['choice_text' => 'B = H + μ', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans l’approximation linéaire isotrope, la perméabilité relie directement B et H.',
                    ],

                    [
                        'question' => 'Pourquoi la permittivité d’un matériau peut-elle dépendre de la fréquence ?',
                        'choices' => [
                            ['choice_text' => Les mécanismes de polarisation du matériau ne répondent pas tous instantanément de la même manière', 'is_correct' => true],
                            ['choice_text' => 'La constante de Planck dépend de la fréquence du matériau', 'is_correct' => false],
                            ['choice_text' => 'Tous les matériaux sont nécessairement non dispersifs', 'is_correct' => false],
                            ['choice_text' => 'La charge élémentaire varie avec la fréquence', 'is_correct' => false],
                        ],
                        'explanation' => 'Les différents mécanismes de polarisation possèdent des temps caractéristiques, ce qui produit une dispersion de ε(ω).',
                    ],

                    [
                        'question' => 'Pourquoi un matériau peut-il devenir fortement absorbant près d’une résonance ?',
                        'choices' => [
                            ['choice_text' => Le couplage du champ à un mécanisme résonant peut produire une susceptibilité complexe avec une partie dissipative importante', 'is_correct' => true],
                            ['choice_text' => 'La fréquence disparaît au voisinage de la résonance', 'is_correct' => false],
                            ['choice_text' => 'La permittivité devient toujours exactement nulle', 'is_correct' => false],
                            ['choice_text' => 'L’énergie électromagnétique ne peut plus pénétrer dans le matériau', 'is_correct' => false],
                        ],
                        'explanation' => 'La partie imaginaire des paramètres constitutifs traduit la dissipation électromagnétique.',
                    ],

                    [
                        'question' => 'Que représente physiquement la partie imaginaire d’une permittivité complexe dans un matériau absorbant ?',
                        'choices' => [
                            ['choice_text' => Elle est liée aux pertes et à la dissipation d’énergie électromagnétique', 'is_correct' => true],
                            ['choice_text' => 'Elle représente uniquement la charge libre totale', 'is_correct' => false],
                            ['choice_text' => 'Elle décrit la vitesse de la lumière dans le vide', 'is_correct' => false],
                            ['choice_text' => 'Elle est toujours nulle pour les matériaux réels', 'is_correct' => false],
                        ],
                        'explanation' => 'Une composante imaginaire de la réponse constitutive est associée aux pertes sous une convention harmonique donnée.',
                    ],

                    [
                        'question' => 'Pourquoi les matériaux anisotropes nécessitent-ils souvent une permittivité tensorielle plutôt que scalaire ?',
                        'choices' => [
                            ['choice_text' => 'La réponse du matériau peut dépendre de la direction du champ électrique', 'is_correct' => true],
                            ['choice_text' => 'La charge élémentaire devient directionnelle', 'is_correct' => false],
                            ['choice_text' => 'La vitesse de la lumière dans le vide devient tensorielle', 'is_correct' => false],
                            ['choice_text' => 'Tous les matériaux isotropes sont magnétiques', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans un matériau anisotrope, D n’est pas nécessairement colinéaire à E.',
                    ],

                    [
                        'question' => 'Pourquoi la biréfringence peut-elle séparer spatialement deux composantes de polarisation ?',
                        'choices' => [
                            ['choice_text' => Elles peuvent posséder des indices effectifs différents et donc des directions ou vitesses de propagation distinctes', 'is_correct' => true],
                            ['choice_text' => 'Les deux composantes ont nécessairement des fréquences différentes', 'is_correct' => false],
                            ['choice_text' => 'Le matériau détruit automatiquement l’une des composantes', 'is_correct' => false],
                            ['choice_text' => 'La biréfringence n’affecte que l’absorption', 'is_correct' => false],
                        ],
                        'explanation' => 'L’anisotropie optique crée des modes propres ayant des propriétés de propagation différentes.',
                    ],

                    [
                        'question' => 'Pourquoi l’hystérésis magnétique représente-t-elle une perte d’énergie sur un cycle ?',
                        'choices' => [
                            ['choice_text' => L’aire de la boucle B-H est liée à l’énergie dissipée par unité de volume et par cycle', 'is_correct' => true],
                            ['choice_text' => 'La boucle correspond uniquement à une erreur de mesure', 'is_correct' => false],
                            ['choice_text' => 'L’énergie est toujours récupérée intégralement', 'is_correct' => false],
                            ['choice_text' => 'L’aimantation n’intervient pas dans les pertes', 'is_correct' => false],
                        ],
                        'explanation' => 'L’aire de la boucle d’hystérésis correspond à l’énergie dissipée dans le matériau lors d’un cycle d’aimantation.',
                    ],

                    [
                        'question' => 'Pourquoi les matériaux ferromagnétiques présentent-ils une réponse fortement non linéaire ?',
                        'choices' => [
                            ['choice_text' => Leur structure magnétique permet des phénomènes de domaines, saturation et hystérésis', 'is_correct' => true],
                            ['choice_text' => 'Leur perméabilité est toujours égale à μ0', 'is_correct' => false],
                            ['choice_text' => 'Le champ magnétique ne pénètre jamais dans ces matériaux', 'is_correct' => false],
                            ['choice_text' => 'Ils ne possèdent aucun moment magnétique', 'is_correct' => false],
                        ],
                        'explanation' => 'La réponse macroscopique des ferromagnétiques résulte de mécanismes collectifs complexes.',
                    ],

                    [
                        'question' => 'Pourquoi les relations constitutives doivent-elles être vérifiées dans le domaine de fréquence et d’amplitude utilisé ?',
                        'choices' => [
                            ['choice_text' => 'Un modèle linéaire ou isotrope peut devenir invalide hors de son domaine d’application', 'is_correct' => true],
                            ['choice_text' => 'Les propriétés matérielles sont universellement constantes', 'is_correct' => false],
                            ['choice_text' => 'Les matériaux ont toujours une réponse instantanée', 'is_correct' => false],
                            ['choice_text' => 'La fréquence ne joue aucun rôle dans les matériaux réels', 'is_correct' => false],
                        ],
                        'explanation' => 'Dispersion, saturation, non-linéarité et anisotropie peuvent modifier fortement la réponse constitutive.',
                    ],

                ],
            ],

            // ============================================================
            // QUIZ 5 — Électrodynamique et rayonnement
            // ============================================================

            [
                'title' => 'Électrodynamique et rayonnement',
                'description' => 'Étude professionnelle des charges accélérées, du rayonnement électromagnétique et des champs retardés.',
                'questions' => [

                    [
                        'question' => 'Pourquoi une charge accélérée peut-elle émettre un rayonnement électromagnétique ?',
                        'choices' => [
                            ['choice_text' => Les champs générés par une charge accélérée possèdent des composantes qui se détachent du champ quasi-statique et se propagent', 'is_correct' => true],
                            ['choice_text' => 'Une charge immobile rayonne toujours avec la même puissance', 'is_correct' => false],
                            ['choice_text' => 'Le rayonnement n’a aucun lien avec l’accélération', 'is_correct' => false],
                            ['choice_text' => 'Une charge accélérée devient automatiquement neutre', 'is_correct' => false],
                        ],
                        'explanation' => 'Le rayonnement classique d’une charge est associé à l’accélération de la charge.',
                    ],

                    [
                        'question' => 'Quelle dépendance qualitative décrit la puissance rayonnée par une charge non relativiste accélérée ?',
                        'choices' => [
                            ['choice_text' => Elle est proportionnelle au carré de l’accélération', 'is_correct' => true],
                            ['choice_text' => 'Elle est proportionnelle à l’accélération elle-même uniquement', 'is_correct' => false],
                            ['choice_text' => 'Elle est indépendante de l’accélération', 'is_correct' => false],
                            ['choice_text' => 'Elle est proportionnelle à l’inverse de l’accélération²', 'is_correct' => false],
                        ],
                        'explanation' => 'La formule de Larmor donne P proportionnelle à a² dans le régime non relativiste.',
                    ],

                    [
                        'question' => 'Pourquoi le rayonnement lointain d’une source électromagnétique décroît-il généralement comme 1/r en amplitude ?',
                        'choices' => [
                            ['choice_text' => La conservation de l’énergie sur des surfaces sphériques implique une intensité en 1/r²', 'is_correct' => true],
                            ['choice_text' => 'Les champs deviennent toujours nuls dès que r augmente', 'is_correct' => false],
                            ['choice_text' => 'La fréquence décroît toujours comme 1/r²', 'is_correct' => false],
                            ['choice_text' => 'Le champ électrique est constant dans tout l’espace', 'is_correct' => false],
                        ],
                        'explanation' => 'L’amplitude des champs rayonnés varie comme 1/r, ce qui donne une densité de puissance en 1/r².',
                    ],

                    [
                        'question' => 'Pourquoi distingue-t-on les zones proche et lointaine d’une source rayonnante ?',
                        'choices' => [
                            ['choice_text' => Les termes de champ et leur dépendance en distance présentent des comportements différents', 'is_correct' => true],
                            ['choice_text' => 'La fréquence de la source change selon la distance', 'is_correct' => false],
                            ['choice_text' => 'Les charges disparaissent en zone lointaine', 'is_correct' => false],
                            ['choice_text' => 'Les équations de Maxwell cessent d’être valides près de la source', 'is_correct' => false],
                        ],
                        'explanation' => 'Les termes en 1/r, 1/r² et 1/r³ jouent des rôles différents selon la région spatiale.',
                    ],

                    [
                        'question' => 'Pourquoi l’antenne dipolaire rayonne-t-elle plus efficacement lorsque ses dimensions sont comparables à une fraction de la longueur d’onde ?',
                        'choice_text' => 'La distribution spatiale du courant devient compatible avec une émission constructive du champ rayonné dans certaines directions.',
                    ],

                    [
                        'question' => 'Pourquoi un courant alternatif dans une antenne peut-il produire une onde électromagnétique propagative ?',
                        'choices' => [
                            ['choice_text' => La variation temporelle du courant produit un champ magnétique variable tandis que le champ électrique associé se couple à sa variation', 'is_correct' => true],
                            ['choice_text' => 'Un courant constant rayonne toujours exactement de la même façon', 'is_correct' => false],
                            ['choice_text' => 'Le rayonnement exige une charge statique uniquement', 'is_correct' => false],
                            ['choice_text' => 'Le champ magnétique ne dépend jamais du temps', 'is_correct' => false],
                        ],
                        'explanation' => 'Une source variable dans le temps peut exciter des solutions propagatives des équations de Maxwell.',
                    ],

                    [
                        'question' => 'Pourquoi le rayonnement électromagnétique transporte-t-il de la quantité de mouvement ?',
                        'choices' => [
                            ['choice_text' => Le champ électromagnétique possède une densité de quantité de mouvement liée au flux d’énergie', 'is_correct' => true],
                            ['choice_text' => 'La lumière possède une masse au repos classique', 'is_correct' => false],
                            ['choice_text' => 'Le rayonnement ne transporte que de l’énergie et jamais de quantité de mouvement', 'is_correct' => false],
                            ['choice_text' => 'Le moment dépend uniquement de la masse de la source', 'is_correct' => false],
                        ],
                        'explanation' => 'La quantité de mouvement électromagnétique est responsable notamment de la pression de radiation.',
                    ],

                    [
                        'question' => 'Pourquoi les potentiels retardés sont-ils nécessaires pour décrire les champs d’une source variant dans le temps ?',
                        'choices' => [
                            ['choice_text' => L’information électromagnétique se propage à vitesse finie et les champs en un point dépendent de l’état passé de la source', 'is_correct' => true],
                            ['choice_text' => 'Les champs sont toujours instantanés dans tout repère', 'is_correct' => false],
                            ['choice_text' => 'La vitesse de propagation dépend toujours de la charge', 'is_correct' => false],
                            ['choice_text' => 'Le temps n’intervient pas dans l’électrodynamique', 'is_correct' => false],
                        ],
                        'explanation' => 'Les potentiels retardés incorporent la propagation causale à vitesse finie.',
                    ],

                    [
                        'question' => 'Pourquoi l’effet Doppler électromagnétique peut-il être utilisé pour mesurer une vitesse radiale ?',
                        'choices' => [
                            ['choice_text' => Le mouvement relatif modifie la fréquence observée de l’onde reçue', 'is_correct' => true],
                            ['choice_text' => 'La masse du photon augmente avec la distance', 'is_correct' => false],
                            ['choice_text' => 'La fréquence émise change nécessairement dans le référentiel source', 'is_correct' => false],
                            ['choice_text' => 'Le Doppler ne concerne que les ondes mécaniques', 'is_correct' => false],
                        ],
                        'explanation' => 'Le décalage Doppler encode la composante de vitesse selon la ligne de visée.',
                    ],

                    [
                        'question' => 'Pourquoi une antenne réelle possède-t-elle généralement un diagramme de rayonnement non isotrope ?',
                        'choices' => [
                            ['choice_text' => La géométrie et la distribution de courant imposent des interférences angulaires du champ rayonné', 'is_correct' => true],
                            ['choice_text' => 'Toutes les antennes rayonnent nécessairement de manière uniforme', 'is_correct' => false],
                            ['choice_text' => 'Le diagramme dépend uniquement de la masse', 'is_correct' => false],
                            ['choice_text' => 'La direction n’intervient pas dans le rayonnement', 'is_correct' => false],
                        ],
                        'explanation' => 'Le champ rayonné résulte de la superposition spatiale des contributions de la distribution de courant.',
                    ],

                ],
            ],

            // ============================================================
            // QUIZ 6 — Électromagnétisme quantitatif et relativiste
            // ============================================================

            [
                'title' => 'Électromagnétisme relativiste et formulation avancée',
                'description' => 'Analyse de l’unification relativiste des champs et des transformations électromagnétiques.',
                'questions' => [

                    [
                        'question' => 'Pourquoi les champs électrique et magnétique peuvent-ils être considérés comme deux aspects d’un même champ électromagnétique ?',
                        'choices' => [
                            ['choice_text' => Leur séparation en E et B dépend du référentiel d’observation', 'is_correct' => true],
                            ['choice_text' => 'Ils possèdent toujours la même valeur numérique', 'is_correct' => false],
                            ['choice_text' => 'Ils sont toujours colinéaires', 'is_correct' => false],
                            ['choice_text' => 'Le champ magnétique n’existe qu’en mécanique classique', 'is_correct' => false],
                        ],
                        'explanation' => 'La relativité restreinte montre que les composantes électrique et magnétique se mélangent sous changement de référentiel inertiel.',
                    ],

                    [
                        'question' => 'Quel objet mathématique combine E et B dans la formulation relativiste standard ?',
                        'choices' => [
                            ['choice_text' => 'Le tenseur électromagnétique Fμν', 'is_correct' => true],
                            ['choice_text' => 'Le tenseur des contraintes mécaniques uniquement', 'is_correct' => false],
                            ['choice_text' => 'Le scalaire potentiel V seul', 'is_correct' => false],
                            ['choice_text' => 'La matrice de masse', 'is_correct' => false],
                        ],
                        'explanation' => 'Le tenseur électromagnétique regroupe les composantes des champs E et B dans une description covariante.',
                    ],

                    [
                        'question' => 'Pourquoi une distribution de charges en mouvement peut-elle produire à la fois E et B ?',
                        'choices' => [
                            ['choice_text' => Dans une description relativiste, les transformations de référentiel mélangent les composantes électriques et magnétiques', 'is_correct' => true],
                            ['choice_text' => 'Le champ magnétique est indépendant de tout mouvement', 'is_correct' => false],
                            ['choice_text' => 'Les charges produisent uniquement un potentiel scalaire', 'is_correct' => false],
                            ['choice_text' => 'Le mouvement détruit toujours le champ électrique', 'is_correct' => false],
                        ],
                        'explanation' => 'Le champ électromagnétique forme une entité relativiste unique.',
                    ],

                    [
                        'question' => 'Quelle relation relativiste relie énergie et quantité de mouvement d’une particule massive ?',
                        'choices' => [
                            ['choice_text' => 'E² = p²c² + m²c⁴', 'is_correct' => true],
                            ['choice_text' => 'E = pc uniquement pour toute particule massive', 'is_correct' => false],
                            ['choice_text' => 'E = p²/c² + mc', 'is_correct' => false],
                            ['choice_text' => 'E² = p²/c² - m²c⁴', 'is_correct' => false],
                        ],
                        'explanation' => 'La relation énergie-impulsion relativiste générale est E² = p²c² + m²c⁴.',
                    ],

                    [
                        'question' => 'Dans la limite non relativiste, quelle approximation de l’énergie cinétique est valide ?',
                        'choices' => [
                            ['choice_text' => K ≈ p²/(2m)', 'is_correct' => true],
                            ['choice_text' => 'K = pc', 'is_correct' => false],
                            ['choice_text' => 'K = mc² uniquement', 'is_correct' => false],
                            ['choice_text' => 'K = p²c²/(2m)', 'is_correct' => false],
                        ],
                        'explanation' => 'Pour v << c, l’énergie cinétique se réduit à l’expression classique p²/(2m).',
                    ],

                    [
                        'question' => 'Pourquoi un champ électrique peut-il modifier l’énergie cinétique d’une particule chargée alors qu’un champ magnétique statique idéal ne le peut pas ?',
                        'choices' => [
                            ['choice_text' => La puissance électrique qE·v peut être non nulle tandis que [q(v×B)]·v = 0', 'is_correct' => true],
                            ['choice_text' => 'Le champ magnétique est toujours nul', 'is_correct' => false],
                            ['choice_text' => 'La force magnétique est toujours parallèle à v', 'is_correct' => false],
                            ['choice_text' => 'Le champ électrique n’exerce jamais de force', 'is_correct' => false],
                        ],
                        'explanation' => 'La composante magnétique de Lorentz est perpendiculaire à la vitesse, alors que la composante électrique peut effectuer un travail.',
                    ],

                    [
                        'question' => 'Pourquoi la formulation relativiste des équations de Maxwell est-elle importante en physique fondamentale ?',
                        'choices' => [
                            ['choice_text' => 'Elle rend explicitement compatibles les équations électromagnétiques avec les transformations de Lorentz', 'is_correct' => true],
                            ['choice_text' => 'Elle élimine toute notion de champ', 'is_correct' => false],
                            ['choice_text' => 'Elle remplace Maxwell par la mécanique newtonienne', 'is_correct' => false],
                            ['choice_text' => 'Elle ne s’applique qu’aux charges immobiles', 'is_correct' => false],
                        ],
                        'explanation' => 'Les équations de Maxwell possèdent une structure naturellement compatible avec la relativité restreinte.',
                    ],

                    [
                        'question' => 'Quelle propriété fondamentale de l’électromagnétisme est directement liée à l’invariance de jauge dans sa formulation quantique ?',
                        'choices' => [
                            ['choice_text' => La structure de la théorie de l’interaction électromagnétique et la conservation de la charge', 'is_correct' => true],
                            ['choice_text' => 'La disparition du photon', 'is_correct' => false],
                            ['choice_text' => 'La violation nécessaire de la conservation de la charge', 'is_correct' => false],
                            ['choice_text' => 'L’absence de champ électromagnétique', 'is_correct' => false],
                        ],
                        'explanation' => 'L’invariance de jauge U(1) est au cœur de l’électrodynamique quantique et est liée à la conservation de la charge.',
                    ],

                    [
                        'question' => 'Pourquoi le photon est-il associé à l’interaction électromagnétique dans le cadre de l’électrodynamique quantique ?',
                        ['choice_text' => 'Il constitue le quantum du champ électromagnétique dans la théorie quantique relativiste.',
                    ],

                    [
                        'question' => 'Pourquoi la formulation covariante est-elle particulièrement avantageuse pour les problèmes électromagnétiques relativistes ?',
                        'choices' => [
                            ['choice_text' => 'Elle exprime les lois sous une forme qui conserve leur structure sous transformation de Lorentz', 'is_correct' => true],
                            ['choice_text' => 'Elle supprime les coordonnées temporelles', 'is_correct' => false],
                            ['choice_text' => 'Elle rend E et B indépendants du référentiel', 'is_correct' => false],
                            ['choice_text' => 'Elle ne s’applique qu’aux champs statiques', 'is_correct' => false],
                        ],
                        'explanation' => 'La covariance relativiste fournit une représentation compacte et cohérente des lois électromagnétiques.',
                    ],

                ],
            ],

            // ============================================================
            // QUIZ 7 — Métrologie électromagnétique et ingénierie
            // ============================================================

            [
                'title' => 'Métrologie et ingénierie électromagnétique',
                'description' => 'Analyse professionnelle de la mesure des champs, incertitudes, compatibilité électromagnétique et intégrité du signal.',
                'questions' => [

                    [
                        'question' => 'Pourquoi l’étalonnage d’une sonde de champ électrique est-il nécessaire avant une mesure de précision ?',
                        'choices' => [
                            ['choice_text' => 'Il permet d’établir la relation entre le signal mesuré et la grandeur physique avec une incertitude connue', 'is_correct' => true],
                            ['choice_text' => 'Il supprime automatiquement tous les champs parasites', 'is_correct' => false],
                            ['choice_text' => 'Il rend la sonde indépendante de la fréquence', 'is_correct' => false],
                            ['choice_text' => 'Il garantit une précision infinie', 'is_correct' => false],
                        ],
                        'explanation' => 'L’étalonnage caractérise la réponse de la chaîne de mesure et sa traçabilité.',
                    ],

                    [
                        'question' => 'Pourquoi la bande passante d’un instrument de mesure électromagnétique doit-elle être connue ?',
                        'choices' => [
                            ['choice_text' => 'Elle détermine les fréquences que l’instrument peut mesurer sans atténuation ou distorsion excessive', 'is_correct' => true],
                            ['choice_text' => 'Elle définit uniquement la température de fonctionnement', 'is_correct' => false],
                            ['choice_text' => 'Elle supprime toutes les interférences', 'is_correct' => false],
                            ['choice_text' => 'Elle est indépendante du capteur', 'is_correct' => false],
                        ],
                        'explanation' => 'La réponse fréquentielle du capteur et de l’électronique conditionne la fidélité de la mesure.',
                    ],

                    [
                        'question' => 'Pourquoi les câbles coaxiaux sont-ils utilisés pour transporter des signaux haute fréquence ?',
                        'choices' => [
                            ['choice_text' => 'Leur géométrie guide le champ et limite fortement les rayonnements parasites', 'is_correct' => true],
                            ['choice_text' => 'Ils éliminent toujours toute perte', 'is_correct' => false],
                            ['choice_text' => 'Ils fonctionnent uniquement en courant continu', 'is_correct' => false],
                            ['choice_text' => 'Ils ne possèdent aucune capacité parasite', 'is_correct' => false],
                        ],
                        'explanation' => 'Le blindage et la structure distribuée d’un coaxial confinent efficacement les champs électromagnétiques.',
                    ],

                    [
                        'question' => 'Pourquoi l’impédance caractéristique d’un câble doit-elle être adaptée à la source et à la charge ?',
                        'choices' => [
                            ['choice_text' => 'Pour réduire les réflexions et préserver l’intégrité du signal', 'is_correct' => true],
                            ['choice_text' => 'Pour augmenter nécessairement la fréquence', 'is_correct' => false],
                            ['choice_text' => 'Pour annuler le champ électrique dans tous les cas', 'is_correct' => false],
                            ['choice_text' => 'Pour rendre la propagation instantanée', 'is_correct' => false],
                        ],
                        'explanation' => 'Une adaptation correcte limite les ondes réfléchies sur la ligne.',
                    ],

                    [
                        'question' => 'Pourquoi la compatibilité électromagnétique impose-t-elle à la fois des exigences d’émission et d’immunité ?',
                        'choices' => [
                            ['choice_text' => Un équipement doit limiter les perturbations qu’il génère tout en résistant aux perturbations externes', 'is_correct' => true],
                            ['choice_text' => 'Seules les émissions sont importantes', 'is_correct' => false],
                            ['choice_text' => 'L’immunité n’a aucun lien avec les champs externes', 'is_correct' => false],
                            ['choice_text' => 'La CEM ne concerne que les systèmes militaires', 'is_correct' => false],
                        ],
                        'explanation' => 'La compatibilité électromagnétique repose sur la coexistence maîtrisée des équipements.',
                    ],

                    [
                        'question' => 'Pourquoi la mise à la masse et le blindage ne sont-ils pas toujours équivalents ?',
                        'choices' => [
                            ['choice_text' => Le blindage agit sur les couplages de champ tandis que la mise à la masse concerne les références et chemins de courant', 'is_correct' => true],
                            ['choice_text' => 'Les deux concepts sont strictement identiques dans toute fréquence', 'is_correct' => false],
                            ['choice_text' => 'La masse ne peut jamais transporter de courant', 'is_correct' => false],
                            ['choice_text' => 'Un blindage ne peut jamais influencer un champ', 'is_correct' => false],
                        ],
                        'explanation' => 'Le comportement dépend de la géométrie, fréquence, impédances et chemins de retour.',
                    ],

                    [
                        'question' => 'Pourquoi les effets de peau augmentent-ils avec la fréquence dans un conducteur ?',
                        ['choice_text' => 'La profondeur de pénétration du courant diminue lorsque la fréquence augmente, concentrant davantage le courant vers la surface.',
                    ],

                    [
                        'question' => 'Pourquoi les pertes diélectriques deviennent-elles critiques à haute fréquence ?',
                        'choices' => [
                            ['choice_text' => 'Les mécanismes dissipatifs du matériau peuvent augmenter et convertir une partie de l’énergie électromagnétique en chaleur', 'is_correct' => true],
                            ['choice_text' => 'La permittivité devient toujours exactement nulle', 'is_correct' => false],
                            ['choice_text' => 'Le champ magnétique disparaît', 'is_correct' => false],
                            ['choice_text' => 'La fréquence réduit toujours toutes les pertes', 'is_correct' => false],
                        ],
                        'explanation' => 'La partie dissipative de la réponse constitutive augmente dans certaines bandes fréquentielles.',
                    ],

                    [
                        'question' => 'Pourquoi les câbles et interconnexions doivent-ils être modélisés comme des éléments distribués lorsque leur longueur devient importante devant λ ?',
                        'choices' => [
                            ['choice_text' => Les différences de phase et les délais de propagation deviennent significatifs le long du câble', 'is_correct' => true],
                            ['choice_text' => 'Le câble devient un composant purement capacitif dans tous les cas', 'is_correct' => false],
                            ['choice_text' => 'La tension devient uniforme instantanément', 'is_correct' => false],
                            ['choice_text' => 'Le courant ne dépend plus de la fréquence', 'is_correct' => false],
                        ],
                        'explanation' => 'Lorsque les dimensions sont électriquement longues, la propagation distribuée doit être prise en compte.',
                    ],

                    [
                        'question' => 'Pourquoi l’analyse d’incertitude est-elle essentielle pour une mesure électromagnétique de haut niveau ?',
                        'choices' => [
                            ['choice_text' => 'Elle permet de distinguer résolution, répétabilité, biais et contributions environnementales dans le résultat final', 'is_correct' => true],
                            ['choice_text' => 'Elle garantit que toutes les erreurs sont nulles', 'is_correct' => false],
                            ['choice_text' => 'Elle remplace l’étalonnage', 'is_correct' => false],
                            ['choice_text' => 'Elle ne concerne que les mesures mécaniques', 'is_correct' => false],
                        ],
                        'explanation' => 'Une mesure professionnelle doit être accompagnée d’une estimation quantitative de son incertitude.',
                    ],

                ],
            ],

            // ============================================================
            // QUIZ 8 — Synthèse professionnelle
            // ============================================================

            [
                'title' => 'Synthèse professionnelle de l’électromagnétisme',
                'description' => 'Problèmes intégrés de niveau professionnel couvrant Maxwell, propagation, matériaux, guides, rayonnement et métrologie.',
                'questions' => [

                    [
                        'question' => 'Dans le vide, quelle vitesse est obtenue pour une onde électromagnétique à partir des équations de Maxwell ?',
                        'choices' => [
                            ['choice_text' => 'c = 1/√(μ0ε0)', 'is_correct' => true],
                            ['choice_text' => 'c = μ0ε0', 'is_correct' => false],
                            ['choice_text' => 'c = √(μ0ε0)', 'is_correct' => false],
                            ['choice_text' => 'c = μ0/ε0', 'is_correct' => false],
                        ],
                        'explanation' => 'Les équations de Maxwell conduisent à une équation d’onde dont la vitesse est 1/√(μ0ε0).',
                    ],

                    [
                        'question' => 'Une onde plane dans le vide possède une amplitude de champ électrique E0 = 600 V/m. Quelle est l’amplitude du champ magnétique correspondante ?',
                        'choices' => [
                            ['choice_text' => '2 × 10^-6 T', 'is_correct' => true],
                            ['choice_text' => '2 × 10^-3 T', 'is_correct' => false],
                            ['choice_text' => '1,8 × 10^11 T', 'is_correct' => false],
                            ['choice_text' => '600 T', 'is_correct' => false],
                        ],
                        'explanation' => 'B0 = E0/c = 600/(3×10^8) = 2×10^-6 T.',
                    ],

                    [
                        'question' => 'Une charge q se déplace dans un champ magnétique uniforme avec v perpendiculaire à B. Si B est multiplié par 4, son rayon cyclotron devient...',
                        'choices' => [
                            ['choice_text' => 'Quatre fois plus petit', 'is_correct' => true],
                            ['choice_text' => 'Deux fois plus petit', 'is_correct' => false],
                            ['choice_text' => 'Quatre fois plus grand', 'is_correct' => false],
                            ['choice_text' => 'Inchangé', 'is_correct' => false],
                        ],
                        'explanation' => 'r = mv/(|q|B), donc r est inversement proportionnel à B.',
                    ],

                    [
                        'question' => 'Une ligne de transmission possède Z0 = 50 Ω et est terminée par une charge ZL = 100 Ω. Quel est le coefficient de réflexion en tension ?',
                        'choices' => [
                            ['choice_text' => '1/3', 'is_correct' => true],
                            ['choice_text' => '1/2', 'is_correct' => false],
                            ['choice_text' => '2/3', 'is_correct' => false],
                            ['choice_text' => '-1/3', 'is_correct' => false],
                        ],
                        'explanation' => 'Γ = (100 - 50)/(100 + 50) = 50/150 = 1/3.',
                    ],

                    [
                        'question' => 'Une bobine de N = 1000 spires voit son flux par spire changer de 5 × 10^-5 Wb à 0 en 0,005 s. Quelle est la f.e.m. moyenne induite en valeur absolue ?',
                        'choices' => [
                            ['choice_text' => '10 V', 'is_correct' => true],
                            ['choice_text' => '1 V', 'is_correct' => false],
                            ['choice_text' => '0,1 V', 'is_correct' => false],
                            ['choice_text' => '100 V', 'is_correct' => false],
                        ],
                        'explanation' => '|ε| = N|ΔΦ|/Δt = 1000 × 5×10^-5 / 0,005 = 10 V.',
                    ],

                    [
                        'question' => 'Pourquoi une charge accélérée rayonne-t-elle alors qu’une charge se déplaçant à vitesse constante en ligne droite ne présente pas le même rayonnement classique ?',
                        'choices' => [
                            ['choice_text' => Le rayonnement électromagnétique classique est associé aux champs variables produits par l’accélération', 'is_correct' => true],
                            ['choice_text' => 'Une charge à vitesse constante ne produit aucun champ', 'is_correct' => false],
                            ['choice_text' => 'Toute charge rayonne indépendamment de son mouvement', 'is_correct' => false],
                            ['choice_text' => 'L’accélération ne joue aucun rôle dans les champs rayonnés', 'is_correct' => false],
                        ],
                        'explanation' => 'Le rayonnement de type Larmor dépend de l’accélération de la charge dans le régime non relativiste.',
                    ],

                    [
                        'question' => 'Pourquoi une permittivité complexe est-elle utilisée pour modéliser un matériau dissipatif sous excitation harmonique ?',
                        'choices' => [
                            ['choice_text' => Elle permet de représenter simultanément stockage réactif et dissipation d’énergie', 'is_correct' => true],
                            ['choice_text' => 'Elle impose une absence totale de pertes', 'is_correct' => false],
                            ['choice_text' => 'Elle rend la fréquence nulle', 'is_correct' => false],
                            ['choice_text' => 'Elle interdit toute polarisation', 'is_correct' => false],
                        ],
                        'explanation' => 'La partie réelle décrit la réponse réactive tandis que la partie imaginaire, selon convention, décrit la dissipation.',
                    ],

                    [
                        'question' => 'Pourquoi le mode TE10 est-il dominant dans un guide rectangulaire standard ?',
                        'choices' => [
                            ['choice_text' => 'Il possède la plus faible fréquence de coupure parmi les modes admissibles usuels', 'is_correct' => true],
                            ['choice_text' => 'Il est toujours le seul mode possible', 'is_correct' => false],
                            ['choice_text' => 'Il possède une fréquence de coupure infinie', 'is_correct' => false],
                            ['choice_text' => 'Il correspond au mode TEM', 'is_correct' => false],
                        ],
                        'explanation' => 'La fréquence de coupure du TE10 est la plus basse pour une section rectangulaire classique.',
                    ],

                    [
                        'question' => 'Pourquoi la compatibilité électromagnétique exige-t-elle une approche système plutôt qu’un contrôle d’un seul composant ?',
                        'choices' => [
                            ['choice_text' => 'Les couplages par conduction, rayonnement, masse, câblage et alimentation peuvent interagir entre plusieurs sous-systèmes', 'is_correct' => true],
                            ['choice_text' => 'Chaque composant est toujours électromagnétiquement isolé', 'is_correct' => false],
                            ['choice_text' => 'Les champs parasites ne peuvent jamais se propager par les câbles', 'is_correct' => false],
                            ['choice_text' => 'La CEM ne dépend que de la puissance électrique', 'is_correct' => false],
                        ],
                        'explanation' => 'Les problèmes CEM apparaissent souvent au niveau des interfaces et des chemins de couplage entre sous-systèmes.',
                    ],

                    [
                        'question' => 'Pourquoi une analyse professionnelle de l’électromagnétisme doit-elle combiner modèles analytiques, simulation numérique et validation expérimentale ?',
                        'choices' => [
                            ['choice_text' => 'Les modèles analytiques donnent les principes, les simulations traitent la complexité géométrique et l’expérience vérifie le comportement réel', 'is_correct' => true],
                            ['choice_text' => 'Une seule méthode suffit toujours pour tous les systèmes', 'is_correct' => false],
                            ['choice_text' => 'Les simulations remplacent toute mesure', 'is_correct' => false],
                            ['choice_text' => 'Les expériences rendent inutile toute théorie', 'is_correct' => false],
                        ],
                        'explanation' => 'Les trois niveaux sont complémentaires pour obtenir compréhension physique, prédiction quantitative et validation.',
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

                // Randomisation des choix : la position de la bonne
                // réponse n'est pas prévisible.
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