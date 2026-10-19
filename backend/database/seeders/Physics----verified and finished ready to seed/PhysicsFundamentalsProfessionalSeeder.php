<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class PhysicsFundamentalsProfessionalSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'physics-fundamentals')->firstOrFail();

        $quizzes = [

            // ============================================================
            // QUIZ 1 — Mécanique et modélisation
            // ============================================================

            [
                'title' => 'Modélisation professionnelle des systèmes mécaniques',
                'description' => 'Analyse de systèmes mécaniques réels à partir des forces, des contraintes, de l’énergie et des approximations physiques.',
                'questions' => [

                    [
                        'question' => 'Un véhicule de masse m roule à vitesse constante sur une route horizontale malgré une force motrice et des résistances aérodynamiques. Quelle conclusion est correcte sur la résultante horizontale des forces ?',
                        'choices' => [
                            ['choice_text' => 'Elle est nulle', 'is_correct' => true],
                            ['choice_text' => 'Elle est égale à la force motrice', 'is_correct' => false],
                            ['choice_text' => 'Elle est égale au poids du véhicule', 'is_correct' => false],
                            ['choice_text' => 'Elle est nécessairement dirigée vers l’avant', 'is_correct' => false],
                        ],
                        'explanation' => 'Une vitesse constante implique une accélération nulle. La deuxième loi de Newton impose donc une résultante nulle.',
                    ],

                    [
                        'question' => 'Lors de la modélisation d’un véhicule soumis à une résistance aérodynamique proportionnelle au carré de la vitesse, quelle grandeur devient fortement pénalisante à grande vitesse ?',
                        'choices' => [
                            ['choice_text' => 'La puissance nécessaire pour vaincre la traînée', 'is_correct' => true],
                            ['choice_text' => 'La masse du véhicule', 'is_correct' => false],
                            ['choice_text' => 'Le poids dans un champ gravitationnel uniforme', 'is_correct' => false],
                            ['choice_text' => 'La longueur du véhicule seule', 'is_correct' => false],
                        ],
                        'explanation' => 'Si la force de traînée varie comme v², la puissance associée à cette force varie approximativement comme v³, ce qui rend les grandes vitesses très coûteuses énergétiquement.',
                    ],

                    [
                        'question' => 'Un ingénieur veut réduire les vibrations d’un système mécanique soumis à une excitation périodique proche de sa fréquence propre. Quelle stratégie est particulièrement pertinente ?',
                        'choices' => [
                            ['choice_text' => 'Modifier la fréquence propre ou augmenter l’amortissement', 'is_correct' => true],
                            ['choice_text' => 'Réduire systématiquement la masse à zéro', 'is_correct' => false],
                            ['choice_text' => 'Supprimer toute force extérieure sans analyser le système', 'is_correct' => false],
                            ['choice_text' => 'Augmenter nécessairement la rigidité sans considérer la nouvelle fréquence', 'is_correct' => false],
                        ],
                        'explanation' => 'Près de la résonance, modifier la fréquence propre ou augmenter l’amortissement peut réduire fortement l’amplitude des oscillations.',
                    ],

                    [
                        'question' => 'Pour analyser correctement une machine mobile complexe, pourquoi est-il important d’établir d’abord un diagramme de corps libre ?',
                        'choices' => [
                            ['choice_text' => 'Pour identifier systématiquement les forces et moments pertinents', 'is_correct' => true],
                            ['choice_text' => 'Pour déterminer automatiquement la solution numérique exacte', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer les inconnues du modèle', 'is_correct' => false],
                            ['choice_text' => 'Pour éviter l’utilisation des lois de conservation', 'is_correct' => false],
                        ],
                        'explanation' => 'Le diagramme de corps libre permet d’identifier les actions mécaniques pertinentes avant d’écrire les équations de mouvement.',
                    ],

                    [
                        'question' => 'Dans une simulation mécanique, un modèle prédit une accélération très différente de l’expérience. Quelle vérification est la plus pertinente en premier lieu ?',
                        'choices' => [
                            ['choice_text' => 'Vérifier les hypothèses, les forces négligées et les conditions initiales', 'is_correct' => true],
                            ['choice_text' => 'Augmenter arbitrairement la précision numérique', 'is_correct' => false],
                            ['choice_text' => 'Changer les unités sans raison physique', 'is_correct' => false],
                            ['choice_text' => 'Ignorer les données expérimentales', 'is_correct' => false],
                        ],
                        'explanation' => 'Un écart important provient souvent d’une hypothèse de modélisation incorrecte, d’une force oubliée ou de conditions initiales inadéquates avant d’être un problème de précision numérique.',
                    ],

                    [
                        'question' => 'Un satellite en orbite circulaire voit son altitude augmenter sans apport de poussée tangentielle après une manœuvre. Quelle conséquence générale faut-il attendre sur sa vitesse orbitale circulaire ?',
                        'choices' => [
                            ['choice_text' => 'La vitesse orbitale circulaire diminue', 'is_correct' => true],
                            ['choice_text' => 'La vitesse double automatiquement', 'is_correct' => false],
                            ['choice_text' => 'La vitesse reste identique quelle que soit l’altitude', 'is_correct' => false],
                            ['choice_text' => 'La vitesse devient nulle', 'is_correct' => false],
                        ],
                        'explanation' => 'Pour une orbite circulaire autour d’un même astre, v = √(GM/r). Une augmentation de r diminue donc la vitesse circulaire.',
                    ],

                    [
                        'question' => 'Dans une analyse énergétique d’un système mécanique réel, pourquoi est-il utile de séparer les forces conservatives et dissipatives ?',
                        'choices' => [
                            ['choice_text' => 'Pour distinguer l’énergie potentielle stockée des pertes irréversibles', 'is_correct' => true],
                            ['choice_text' => 'Parce que toutes les forces conservatives dissipent de l’énergie', 'is_correct' => false],
                            ['choice_text' => 'Pour rendre la masse dépendante du temps', 'is_correct' => false],
                            ['choice_text' => 'Pour éliminer automatiquement toutes les erreurs expérimentales', 'is_correct' => false],
                        ],
                        'explanation' => 'Cette séparation permet de suivre les échanges d’énergie mécaniques et les pertes liées au frottement, à la traînée ou à d’autres mécanismes dissipatifs.',
                    ],

                    [
                        'question' => 'Dans un mécanisme rotatif, une force est appliquée à une distance r de l’axe avec un angle θ entre le rayon et la force. Quelle expression donne la norme du moment de cette force ?',
                        'choices' => [
                            ['choice_text' => 'τ = rF sin(θ)', 'is_correct' => true],
                            ['choice_text' => 'τ = rF cos(θ) pour toute convention', 'is_correct' => false],
                            ['choice_text' => 'τ = F/r', 'is_correct' => false],
                            ['choice_text' => 'τ = r/F', 'is_correct' => false],
                        ],
                        'explanation' => 'La norme du moment est τ = rF sin(θ), où θ est l’angle entre le vecteur position et la force.',
                    ],

                    [
                        'question' => 'Un rotor accélère sous l’action d’un couple résultant constant. Quelle équation analogue à F = ma décrit sa dynamique rotationnelle autour d’un axe fixe ?',
                        'choices' => [
                            ['choice_text' => τ = Iα', 'is_correct' => true],
                            ['choice_text' => 'τ = I/α', 'is_correct' => false],
                            ['choice_text' => 'τ = α/I', 'is_correct' => false],
                            ['choice_text' => 'τ = I + α', 'is_correct' => false],
                        ],
                        'explanation' => 'Pour un axe fixe, la deuxième loi de Newton en rotation s’écrit τ = Iα.',
                    ],

                    [
                        'question' => 'Lors de la conception d’un système mécanique destiné à fonctionner plusieurs années, quelle propriété physique est particulièrement importante en plus des performances instantanées ?',
                        'choices' => [
                            ['choice_text' => 'La fatigue mécanique et la fiabilité', 'is_correct' => true],
                            ['choice_text' => 'La couleur du composant uniquement', 'is_correct' => false],
                            ['choice_text' => 'La masse nulle', 'is_correct' => false],
                            ['choice_text' => 'L’absence obligatoire de toute déformation', 'is_correct' => false],
                        ],
                        'explanation' => 'Pour un fonctionnement prolongé, les cycles de charge peuvent provoquer de la fatigue et la fiabilité devient une contrainte de conception majeure.',
                    ],
                ],
            ],

            // ============================================================
            // QUIZ 2 — Thermodynamique professionnelle
            // ============================================================

            [
                'title' => 'Thermodynamique appliquée et systèmes énergétiques',
                'description' => 'Analyse professionnelle de cycles thermodynamiques, bilans énergétiques, rendement et transferts de chaleur.',
                'questions' => [

                    [
                        'question' => 'Dans un cycle thermodynamique complet, quelle grandeur d’état revient nécessairement à sa valeur initiale ?',
                        'choices' => [
                            ['choice_text' => L’énergie interne', 'is_correct' => true],
                            ['choice_text' => 'La chaleur échangée cumulée', 'is_correct' => false],
                            ['choice_text' => 'Le travail fourni cumulativement', 'is_correct' => false],
                            ['choice_text' => 'L’entropie produite dans un système irréversible', 'is_correct' => false],
                        ],
                        'explanation' => 'Une grandeur d’état possède la même valeur à l’état initial et final d’un cycle. L’énergie interne vérifie donc ΔU = 0.',
                    ],

                    [
                        'question' => 'Une machine thermique reçoit Qc = 1000 kJ de la source chaude et rejette 600 kJ vers la source froide. Quel travail net fournit-elle par cycle ?',
                        'choices' => [
                            ['choice_text' => '400 kJ', 'is_correct' => true],
                            ['choice_text' => '600 kJ', 'is_correct' => false],
                            ['choice_text' => '1600 kJ', 'is_correct' => false],
                            ['choice_text' => '0,4 kJ', 'is_correct' => false],
                        ],
                        'explanation' => 'Pour un cycle, le travail net fourni vaut W = Qc - Qf = 1000 - 600 = 400 kJ.',
                    ],

                    [
                        'question' => 'Dans une machine thermique réelle, pourquoi le rendement est-il inférieur à celui d’un cycle de Carnot fonctionnant entre les mêmes températures extrêmes ?',
                        'choices' => [
                            ['choice_text' => 'En raison des irréversibilités et des pertes réelles', 'is_correct' => true],
                            ['choice_text' => 'Parce que la conservation de l’énergie ne s’applique plus', 'is_correct' => false],
                            ['choice_text' => 'Parce que la machine réelle ne possède jamais de source chaude', 'is_correct' => false],
                            ['choice_text' => 'Parce que le rendement de Carnot est toujours nul', 'is_correct' => false],
                        ],
                        'explanation' => 'Le cycle de Carnot représente une limite idéale réversible. Les frottements, gradients finis et autres irréversibilités réduisent le rendement réel.',
                    ],

                    [
                        'question' => 'Pourquoi l’analyse d’entropie est-elle particulièrement utile dans l’évaluation d’un système énergétique réel ?',
                        'choices' => [
                            ['choice_text' => 'Elle permet d’identifier et de quantifier les irréversibilités', 'is_correct' => true],
                            ['choice_text' => 'Elle remplace toujours le premier principe', 'is_correct' => false],
                            ['choice_text' => 'Elle garantit un rendement égal à 100 %', 'is_correct' => false],
                            ['choice_text' => 'Elle détermine uniquement la masse du fluide', 'is_correct' => false],
                        ],
                        'explanation' => 'La production d’entropie permet d’identifier les irréversibilités et de repérer les mécanismes responsables des pertes de performance.',
                    ],

                    [
                        'question' => 'Dans un échangeur thermique idéal sans pertes vers l’extérieur, la chaleur perdue par le fluide chaud est approximativement...',
                        'choices' => [
                            ['choice_text' => 'Égale à la chaleur gagnée par le fluide froid', 'is_correct' => true],
                            ['choice_text' => 'Toujours supérieure à celle gagnée par le fluide froid', 'is_correct' => false],
                            ['choice_text' => 'Toujours nulle', 'is_correct' => false],
                            ['choice_text' => 'Indépendante des températures des deux fluides', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans un échangeur idéal isolé, la conservation de l’énergie impose que l’énergie perdue par le fluide chaud soit gagnée par le fluide froid.',
                    ],

                    [
                        'question' => 'Pour un gaz parfait, pourquoi faut-il utiliser la température absolue dans PV = nRT ?',
                        'choices' => [
                            ['choice_text' => 'Parce que la relation thermodynamique utilise une échelle proportionnelle à l’énergie thermique', 'is_correct' => true],
                            ['choice_text' => 'Parce que Celsius est une unité d’énergie', 'is_correct' => false],
                            ['choice_text' => 'Parce que Kelvin est uniquement utilisé en mécanique', 'is_correct' => false],
                            ['choice_text' => 'Parce que la pression ne peut être exprimée qu’en kelvins', 'is_correct' => false],
                        ],
                        'explanation' => 'L’équation d’état des gaz parfaits est formulée avec la température absolue en kelvins, définie à partir du zéro thermodynamique.',
                    ],

                    [
                        'question' => 'Une pompe thermique fonctionne entre une source froide à 270 K et une source chaude à 300 K. Pour une pompe réversible idéale, le coefficient de performance en chauffage augmente lorsque...',
                        'choices' => [
                            ['choice_text' => 'L’écart de température entre les sources diminue', 'is_correct' => true],
                            ['choice_text' => 'La source froide devient toujours plus froide', 'is_correct' => false],
                            ['choice_text' => 'La source chaude devient nécessairement plus chaude', 'is_correct' => false],
                            ['choice_text' => 'Le compresseur consomme davantage pour la même chaleur utile', 'is_correct' => false],
                        ],
                        'explanation' => 'Le COP idéal d’une pompe à chaleur dépend de Tc/(Tc - Tf). Réduire l’écart entre les températures augmente donc le COP idéal.',
                    ],

                    [
                        'question' => 'Dans un système thermiquement isolé contenant plusieurs sous-systèmes en interaction, quelle condition caractérise l’équilibre thermique final ?',
                        'choices' => [
                            ['choice_text' => 'Tous les sous-systèmes atteignent la même température', 'is_correct' => true],
                            ['choice_text' => 'Tous les sous-systèmes ont nécessairement la même masse', 'is_correct' => false],
                            ['choice_text' => 'La pression devient nulle partout', 'is_correct' => false],
                            ['choice_text' => 'L’énergie totale devient nulle', 'is_correct' => false],
                        ],
                        'explanation' => 'À l’équilibre thermique, il n’existe plus de transfert thermique net et les températures s’égalent.',
                    ],

                    [
                        'question' => 'Lorsqu’on améliore l’isolation thermique d’un bâtiment, quel effet énergétique est directement recherché en hiver ?',
                        'choices' => [
                            ['choice_text' => 'Réduire le flux thermique vers l’extérieur', 'is_correct' => true],
                            ['choice_text' => 'Augmenter volontairement les pertes thermiques', 'is_correct' => false],
                            ['choice_text' => 'Augmenter la conductivité des parois', 'is_correct' => false],
                            ['choice_text' => 'Supprimer toute production interne de chaleur', 'is_correct' => false],
                        ],
                        'explanation' => 'Une bonne isolation augmente la résistance thermique des parois et réduit les pertes d’énergie vers l’extérieur.',
                    ],

                    [
                        'question' => 'Dans l’optimisation d’un échangeur thermique industriel, augmenter la surface d’échange peut améliorer le transfert mais entraîne généralement aussi...',
                        'choices' => [
                            ['choice_text' => 'Une augmentation du volume, du coût ou des pertes de charge potentielles', 'is_correct' => true],
                            ['choice_text' => 'La suppression complète des irréversibilités', 'is_correct' => false],
                            ['choice_text' => 'Une conservation automatique du coût total', 'is_correct' => false],
                            ['choice_text' => 'Une disparition de la différence de température nécessaire au transfert', 'is_correct' => false],
                        ],
                        'explanation' => 'Une conception thermique réelle impose un compromis entre performance, encombrement, coût, pertes de charge et complexité.',
                    ],
                ],
            ],

            // ============================================================
            // QUIZ 3 — Électromagnétisme avancé
            // ============================================================

            [
                'title' => 'Électromagnétisme appliqué',
                'description' => 'Analyse de champs électromagnétiques, d’induction et de systèmes électriques physiques.',
                'questions' => [

                    [
                        'question' => 'Dans une région où le champ électrique électrostatique est nul, que peut-on conclure sur le potentiel dans une région connectée ?',
                        'choices' => [
                            ['choice_text' => 'Le potentiel y est constant', 'is_correct' => true],
                            ['choice_text' => 'Le potentiel augmente nécessairement avec le temps', 'is_correct' => false],
                            ['choice_text' => 'Le potentiel est forcément nul', 'is_correct' => false],
                            ['choice_text' => 'Le potentiel est nécessairement infini', 'is_correct' => false],
                        ],
                        'explanation' => 'Le champ électrostatique vérifie E = -∇V. Si E est nul dans une région connectée, le potentiel y est constant.',
                    ],

                    [
                        'question' => 'Une charge se déplace parallèlement à un champ magnétique uniforme. Quelle est la force magnétique sur cette charge ?',
                        'choices' => [
                            ['choice_text' => 'Nulle', 'is_correct' => true],
                            ['choice_text' => 'Maximale', 'is_correct' => false],
                            ['choice_text' => 'Égale à qvB', 'is_correct' => false],
                            ['choice_text' => 'Indépendante de l’angle', 'is_correct' => false],
                        ],
                        'explanation' => 'La norme de la force magnétique est |F| = |q|vB sin(θ). Pour θ = 0°, elle est nulle.',
                    ],

                    [
                        'question' => 'Une particule chargée entre perpendiculairement dans un champ magnétique uniforme. Si la vitesse initiale augmente et que le champ reste constant, le rayon de sa trajectoire circulaire...',
                        'choices' => [
                            ['choice_text' => 'Augmente', 'is_correct' => true],
                            ['choice_text' => 'Diminue', 'is_correct' => false],
                            ['choice_text' => 'Reste constant', 'is_correct' => false],
                            ['choice_text' => 'Devient nul', 'is_correct' => false],
                        ],
                        'explanation' => 'Le rayon cyclotronique vaut r = mv/(|q|B). Il augmente donc avec la vitesse.',
                    ],

                    [
                        'question' => 'Dans un accélérateur utilisant un champ magnétique uniforme pour courber une particule chargée, quelle limitation pratique apparaît lorsque la vitesse devient très élevée ?',
                        'choices' => [
                            ['choice_text' => Les effets relativistes modifient la relation entre quantité de mouvement et vitesse', 'is_correct' => true],
                            ['choice_text' => 'La charge électrique disparaît', 'is_correct' => false],
                            ['choice_text' => 'Le champ magnétique devient automatiquement nul', 'is_correct' => false],
                            ['choice_text' => 'La particule cesse nécessairement d’avoir une énergie', 'is_correct' => false],
                        ],
                        'explanation' => 'À haute énergie, p n’est plus simplement mv. La dynamique relativiste doit être prise en compte pour dimensionner correctement l’orbite et les champs.',
                    ],

                    [
                        'question' => 'Une bobine est soumise à une variation rapide du flux magnétique. Que doit-on attendre qualitativement de la force électromotrice induite ?',
                        'choices' => [
                            ['choice_text' => 'Une augmentation de son amplitude si la variation du flux par unité de temps augmente', 'is_correct' => true],
                            ['choice_text' => 'Une diminution obligatoire', 'is_correct' => false],
                            ['choice_text' => 'Une valeur nulle indépendante du flux', 'is_correct' => false],
                            ['choice_text' => 'Une dépendance uniquement à la masse du fil', 'is_correct' => false],
                        ],
                        'explanation' => 'La loi de Faraday relie la force électromotrice à -dΦ/dt. Une variation plus rapide du flux produit donc généralement une FEM plus importante.',
                    ],

                    [
                        'question' => 'Dans une alimentation à découpage, pourquoi les composants magnétiques fonctionnant à haute fréquence peuvent-ils être beaucoup plus compacts qu’à basse fréquence pour une même fonction énergétique ?',
                        'choices' => [
                            ['choice_text' => 'Parce que des fréquences plus élevées permettent d’utiliser des composants magnétiques plus petits dans une conception adaptée', 'is_correct' => true],
                            ['choice_text' => 'Parce que la conservation de l’énergie ne s’applique plus à haute fréquence', 'is_correct' => false],
                            ['choice_text' => 'Parce que la puissance devient indépendante du volume', 'is_correct' => false],
                            ['choice_text' => 'Parce que les champs magnétiques disparaissent à haute fréquence', 'is_correct' => false],
                        ],
                        'explanation' => 'L’augmentation de fréquence permet notamment de réduire la taille des transformateurs et inductances, sous réserve des pertes, de l’échauffement et des limitations des matériaux.',
                    ],

                    [
                        'question' => 'Dans un condensateur réel à fréquence élevée, pourquoi la capacité idéale seule ne suffit-elle plus à décrire le comportement ?',
                        'choices' => [
                            ['choice_text' => 'Les résistances et inductances parasites deviennent significatives', 'is_correct' => true],
                            ['choice_text' => 'La charge électrique cesse d’exister', 'is_correct' => false],
                            ['choice_text' => 'La permittivité devient toujours nulle', 'is_correct' => false],
                            ['choice_text' => 'Le condensateur devient nécessairement une source indépendante', 'is_correct' => false],
                        ],
                        'explanation' => 'À haute fréquence, les éléments parasites et les propriétés distribuées peuvent modifier fortement l’impédance réelle d’un composant.',
                    ],

                    [
                        'question' => 'Pourquoi une cage de Faraday peut-elle atténuer un champ électromagnétique à l’intérieur d’une enceinte conductrice ?',
                        'choices' => [
                            ['choice_text' => 'Les charges libres du conducteur se redistribuent pour produire un champ intérieur réduit dans certaines conditions', 'is_correct' => true],
                            ['choice_text' => 'Les électrons cessent définitivement de bouger', 'is_correct' => false],
                            ['choice_text' => 'Le conducteur absorbe toute forme d’énergie sans interaction', 'is_correct' => false],
                            ['choice_text' => 'La vitesse de la lumière devient nulle dans le métal', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans certaines conditions électrostatiques, les charges libres se redistribuent de manière à annuler le champ électrique à l’intérieur du conducteur.',
                    ],

                    [
                        'question' => 'Dans une ligne de transmission haute fréquence, pourquoi les pertes et l’adaptation d’impédance deviennent-elles critiques ?',
                        'choices' => [
                            ['choice_text' => 'Les réflexions peuvent provoquer des pertes, des ondes stationnaires et une mauvaise transmission de puissance', 'is_correct' => true],
                            ['choice_text' => 'La résistance électrique devient nécessairement nulle', 'is_correct' => false],
                            ['choice_text' => 'La tension ne peut plus être mesurée', 'is_correct' => false],
                            ['choice_text' => 'Les champs électromagnétiques cessent de transporter de l’énergie', 'is_correct' => false],
                        ],
                        'explanation' => 'Une désadaptation provoque des réflexions. À haute fréquence, ces phénomènes sont essentiels à la conception des systèmes RF et de transmission.',
                    ],

                    [
                        'question' => 'Pour réduire les interférences électromagnétiques dans un système électronique professionnel, quelle approche est généralement la plus robuste ?',
                        'choices' => [
                            ['choice_text' => Combiner réduction de la source, blindage, filtrage et maîtrise des chemins de couplage', 'is_correct' => true],
                            ['choice_text' => 'Ajouter uniquement une couche métallique sans analyser le câblage', 'is_correct' => false],
                            ['choice_text' => 'Augmenter systématiquement toutes les tensions', 'is_correct' => false],
                            ['choice_text' => 'Ignorer les fréquences des signaux', 'is_correct' => false],
                        ],
                        'explanation' => 'La compatibilité électromagnétique repose sur une approche système : réduire les émissions, contrôler les couplages et améliorer l’immunité.',
                    ],
                ],
            ],

            // ============================================================
            // QUIZ 4 — Physique des fluides appliquée
            // ============================================================

            [
                'title' => 'Fluides appliqués et ingénierie des écoulements',
                'description' => 'Analyse des écoulements, pertes de charge, régimes et compromis de conception dans des systèmes réels.',
                'questions' => [

                    [
                        'question' => 'Dans une conduite où le diamètre est réduit progressivement et où le fluide est incompressible, quelle conséquence idéale faut-il attendre sur la vitesse ?',
                        'choices' => [
                            ['choice_text' => 'Elle augmente', 'is_correct' => true],
                            ['choice_text' => 'Elle diminue nécessairement', 'is_correct' => false],
                            ['choice_text' => 'Elle devient nulle', 'is_correct' => false],
                            ['choice_text' => 'Elle reste constante quel que soit le diamètre', 'is_correct' => false],
                        ],
                        'explanation' => 'La conservation du débit impose Av = constante. Une section plus petite entraîne donc une vitesse plus grande.',
                    ],

                    [
                        'question' => 'Dans une installation hydraulique réelle, pourquoi augmenter fortement le débit peut-il entraîner une augmentation importante de la puissance de pompage nécessaire ?',
                        'choices' => [
                            ['choice_text' => 'Les pertes de charge augmentent avec le débit et peuvent donc accroître fortement la puissance requise', 'is_correct' => true],
                            ['choice_text' => 'La masse volumique devient toujours nulle', 'is_correct' => false],
                            ['choice_text' => 'La gravité disparaît quand le débit augmente', 'is_correct' => false],
                            ['choice_text' => 'La pression atmosphérique devient automatiquement négative', 'is_correct' => false],
                        ],
                        'explanation' => 'Les pertes de charge augmentent avec le débit et la pompe doit fournir davantage d’énergie au fluide.',
                    ],

                    [
                        'question' => 'Pour choisir une pompe dans une installation industrielle, quels paramètres doivent être considérés ensemble ?',
                        'choices' => [
                            ['choice_text' => 'Le débit requis, la hauteur manométrique, le rendement et les pertes du réseau', 'is_correct' => true],
                            ['choice_text' => 'Uniquement le diamètre du tuyau', 'is_correct' => false],
                            ['choice_text' => 'Uniquement la température extérieure', 'is_correct' => false],
                            ['choice_text' => 'Uniquement la masse totale du fluide', 'is_correct' => false],
                        ],
                        'explanation' => 'Le choix d’une pompe est un problème système. Il faut confronter la courbe de pompe aux besoins en débit, pression, pertes de charge et rendement.',
                    ],

                    [
                        'question' => 'Un écoulement dans une conduite devient turbulent. Quelle conséquence pratique est souvent observée ?',
                        'choices' => [
                            ['choice_text' => Une augmentation des pertes de charge et du mélange', 'is_correct' => true],
                            ['choice_text' => 'Une disparition de toute dissipation énergétique', 'is_correct' => false],
                            ['choice_text' => 'Une vitesse nécessairement constante partout', 'is_correct' => false],
                            ['choice_text' => 'Une viscosité strictement nulle', 'is_correct' => false],
                        ],
                        'explanation' => 'Les écoulements turbulents favorisent le mélange mais s’accompagnent généralement de pertes énergétiques plus importantes.',
                    ],

                    [
                        'question' => 'Dans un système de refroidissement liquide, pourquoi la viscosité du fluide est-elle un paramètre de conception important ?',
                        'choices' => [
                            ['choice_text' => 'Elle influence les pertes de charge et donc la puissance de pompage', 'is_correct' => true],
                            ['choice_text' => 'Elle détermine uniquement la couleur du fluide', 'is_correct' => false],
                            ['choice_text' => 'Elle rend la densité toujours égale à zéro', 'is_correct' => false],
                            ['choice_text' => 'Elle n’a aucun effet dans les conduites réelles', 'is_correct' => false],
                        ],
                        'explanation' => 'La viscosité influence directement les contraintes de cisaillement et les pertes de charge dans un écoulement réel.',
                    ],

                    [
                        'question' => 'Une conduite est allongée tout en conservant le même diamètre et le même fluide. À débit constant, la perte de charge régulière tend à...',
                        'choices' => [
                            ['choice_text' => 'Augmenter avec la longueur', 'is_correct' => true],
                            ['choice_text' => 'Diminuer automatiquement', 'is_correct' => false],
                            ['choice_text' => 'Rester nulle', 'is_correct' => false],
                            ['choice_text' => 'Devenir indépendante de la viscosité', 'is_correct' => false],
                        ],
                        'explanation' => 'Les pertes de charge régulières sont généralement proportionnelles à la longueur de la conduite, toutes choses égales par ailleurs.',
                    ],

                    [
                        'question' => 'Dans un système hydraulique, pourquoi une cavitation dans une pompe est-elle préoccupante ?',
                        'choices' => [
                            ['choice_text' => 'Elle peut provoquer du bruit, des vibrations, une perte de performance et l’érosion des composants', 'is_correct' => true],
                            ['choice_text' => 'Elle augmente toujours le rendement', 'is_correct' => false],
                            ['choice_text' => 'Elle supprime toutes les contraintes mécaniques', 'is_correct' => false],
                            ['choice_text' => 'Elle garantit une pression parfaitement stable', 'is_correct' => false],
                        ],
                        'explanation' => 'La cavitation apparaît lorsqu’une pression locale devient suffisamment faible pour vaporiser partiellement le liquide, ce qui peut endommager la pompe.',
                    ],

                    [
                        'question' => 'Dans un système de ventilation, pourquoi une augmentation importante de la vitesse de l’air peut-elle devenir énergétiquement coûteuse ?',
                        'choices' => [
                            ['choice_text' => 'Les pertes aérodynamiques et la puissance nécessaire croissent fortement avec la vitesse', 'is_correct' => true],
                            ['choice_text' => 'La masse volumique de l’air devient toujours nulle', 'is_correct' => false],
                            ['choice_text' => 'La gravité devient dominante à toute vitesse', 'is_correct' => false],
                            ['choice_text' => 'La pression atmosphérique cesse d’exister', 'is_correct' => false],
                        ],
                        'explanation' => 'Les pertes aérodynamiques deviennent plus importantes lorsque les vitesses augmentent, ce qui élève la puissance requise par les ventilateurs.',
                    ],

                    [
                        'question' => 'Pour améliorer l’efficacité énergétique d’un réseau hydraulique existant sans changer immédiatement la pompe, quelle action peut être pertinente ?',
                        'choices' => [
                            ['choice_text' => 'Réduire les pertes du réseau en optimisant les diamètres, longueurs et singularités', 'is_correct' => true],
                            ['choice_text' => 'Augmenter volontairement toutes les pertes de charge', 'is_correct' => false],
                            ['choice_text' => 'Ajouter des coudes supplémentaires sans raison', 'is_correct' => false],
                            ['choice_text' => 'Réduire le diamètre partout indépendamment du débit', 'is_correct' => false],
                        ],
                        'explanation' => 'Réduire les pertes de charge permet de diminuer le travail demandé à la pompe sans nécessairement remplacer immédiatement l’équipement.',
                    ],

                    [
                        'question' => 'Dans un modèle CFD, quel compromis existe entre une maille plus fine et le coût de calcul ?',
                        'choices' => [
                            ['choice_text' => 'Une maille plus fine peut améliorer la résolution mais augmente généralement le coût numérique', 'is_correct' => true],
                            ['choice_text' => 'Une maille plus fine réduit toujours le temps de calcul', 'is_correct' => false],
                            ['choice_text' => 'La taille de maille n’a aucune influence', 'is_correct' => false],
                            ['choice_text' => 'Une maille grossière produit systématiquement une solution exacte', 'is_correct' => false],
                        ],
                        'explanation' => 'Le raffinement spatial permet de mieux représenter certaines structures mais augmente le nombre de degrés de liberté et donc le coût numérique.',
                    ],
                ],
            ],

            // ============================================================
            // QUIZ 5 — Optique et photonique
            // ============================================================

            [
                'title' => 'Optique appliquée et photonique',
                'description' => 'Analyse professionnelle des systèmes optiques, de l’imagerie, de la diffraction et des limites instrumentales.',
                'questions' => [

                    [
                        'question' => 'Dans un système optique réel, pourquoi l’ouverture numérique d’un objectif influence-t-elle la résolution ?',
                        'choices' => [
                            ['choice_text' => 'Elle contrôle notamment l’angle de collecte des rayons et donc la capacité à distinguer de petits détails', 'is_correct' => true],
                            ['choice_text' => 'Elle détermine uniquement la couleur du matériau', 'is_correct' => false],
                            ['choice_text' => 'Elle rend toujours la longueur d’onde nulle', 'is_correct' => false],
                            ['choice_text' => 'Elle ne joue aucun rôle dans la diffraction', 'is_correct' => false],
                        ],
                        'explanation' => 'Une plus grande ouverture numérique permet généralement une meilleure résolution spatiale, dans les limites imposées par la diffraction et les aberrations.',
                    ],

                    [
                        'question' => 'Pourquoi une lentille réelle peut-elle présenter des aberrations même si elle respecte les lois géométriques de réfraction ?',
                        'choices' => [
                            ['choice_text' => 'Parce que les rayons provenant de différentes positions ou hauteurs ne convergent pas toujours au même point idéal', 'is_correct' => true],
                            ['choice_text' => 'Parce que la lumière cesse d’être électromagnétique', 'is_correct' => false],
                            ['choice_text' => 'Parce que la focale n’existe jamais', 'is_correct' => false],
                            ['choice_text' => 'Parce que la conservation de l’énergie est violée', 'is_correct' => false],
                        ],
                        'explanation' => 'Les lentilles réelles présentent notamment des aberrations sphériques, chromatiques et autres défauts qui limitent la qualité de l’image.',
                    ],

                    [
                        'question' => 'Pour réduire l’aberration chromatique d’un système optique, quelle stratégie classique peut être utilisée ?',
                        'choices' => [
                            ['choice_text' => 'Combiner plusieurs matériaux ou éléments optiques présentant des dispersions différentes', 'is_correct' => true],
                            ['choice_text' => 'Utiliser uniquement une surface parfaitement noire', 'is_correct' => false],
                            ['choice_text' => 'Augmenter toujours la température de la lentille', 'is_correct' => false],
                            ['choice_text' => 'Supprimer complètement la réfraction', 'is_correct' => false],
                        ],
                        'explanation' => 'Les doublets achromatiques exploitent plusieurs verres aux dispersions différentes pour réduire la variation de mise au point avec la longueur d’onde.',
                    ],

                    [
                        'question' => 'Dans un système d’imagerie scientifique, pourquoi la diffraction fixe-t-elle une limite même avec une optique parfaite ?',
                        'choices' => [
                            ['choice_text' => 'Parce que la nature ondulatoire de la lumière empêche une localisation arbitrairement fine', 'is_correct' => true],
                            ['choice_text' => 'Parce que les photons cessent de transporter de l’énergie', 'is_correct' => false],
                            ['choice_text' => 'Parce que le capteur est toujours parfaitement bruité', 'is_correct' => false],
                            ['choice_text' => 'Parce que les lentilles ne peuvent jamais transmettre de lumière', 'is_correct' => false],
                        ],
                        'explanation' => 'La diffraction impose une limite fondamentale à la résolution des systèmes optiques, indépendamment des défauts de fabrication.',
                    ],

                    [
                        'question' => 'Une fibre optique guide principalement la lumière grâce à...',
                        'choices' => [
                            ['choice_text' => 'La réflexion totale interne', 'is_correct' => true],
                            ['choice_text' => 'La conduction électrique du cœur', 'is_correct' => false],
                            ['choice_text' => 'La gravitation terrestre', 'is_correct' => false],
                            ['choice_text' => 'La diffusion thermique', 'is_correct' => false],
                        ],
                        'explanation' => 'La différence d’indice entre le cœur et la gaine permet la réflexion totale interne dans les conditions appropriées.',
                    ],

                    [
                        'question' => 'Dans une liaison optique à fibre longue distance, pourquoi la dispersion est-elle une limitation importante ?',
                        'choices' => [
                            ['choice_text' => 'Elle élargit temporellement les impulsions et peut provoquer leur recouvrement', 'is_correct' => true],
                            ['choice_text' => 'Elle augmente toujours la puissance reçue', 'is_correct' => false],
                            ['choice_text' => 'Elle supprime les pertes optiques', 'is_correct' => false],
                            ['choice_text' => 'Elle rend la vitesse de la lumière identique dans tous les matériaux', 'is_correct' => false],
                        ],
                        'explanation' => 'La dispersion fait arriver différentes composantes du signal à des instants différents, ce qui élargit les impulsions et limite le débit ou la distance.',
                    ],

                    [
                        'question' => 'Dans un interféromètre, pourquoi la stabilité mécanique est-elle cruciale ?',
                        'choices' => [
                            ['choice_text' => 'De très petites variations de chemin optique peuvent modifier fortement la phase et les franges', 'is_correct' => true],
                            ['choice_text' => 'Parce que la lumière n’a pas de phase', 'is_correct' => false],
                            ['choice_text' => 'Parce que les vibrations augmentent toujours la cohérence', 'is_correct' => false],
                            ['choice_text' => 'Parce que la longueur d’onde devient indépendante de la source', 'is_correct' => false],
                        ],
                        'explanation' => 'Les franges d’interférence dépendent de la différence de phase. Des vibrations mécaniques très faibles peuvent donc dégrader les mesures.',
                    ],

                    [
                        'question' => 'Dans un système laser, l’inversion de population est importante parce qu’elle permet...',
                        'choices' => [
                            ['choice_text' => 'De rendre l’émission stimulée dominante et de réaliser l’amplification optique', 'is_correct' => true],
                            ['choice_text' => 'D’empêcher toute interaction entre photons et matière', 'is_correct' => false],
                            ['choice_text' => 'De supprimer tous les niveaux d’énergie atomiques', 'is_correct' => false],
                            ['choice_text' => 'De rendre la lumière mécaniquement rigide', 'is_correct' => false],
                        ],
                        'explanation' => 'Une inversion de population permet une amplification nette par émission stimulée dans le milieu actif du laser.',
                    ],

                    [
                        'question' => 'Pour améliorer le rapport signal/bruit d’un détecteur optique lorsque le signal est faible, quelle approche est généralement pertinente ?',
                        'choices' => [
                            ['choice_text' => 'Optimiser la collecte optique, réduire le bruit et contrôler la bande passante', 'is_correct' => true],
                            ['choice_text' => 'Augmenter arbitrairement toutes les sources de bruit', 'is_correct' => false],
                            ['choice_text' => 'Ignorer la longueur d’onde du signal', 'is_correct' => false],
                            ['choice_text' => 'Supprimer toute électronique de lecture', 'is_correct' => false],
                        ],
                        'explanation' => 'L’optimisation d’un détecteur faible signal repose sur la collecte de photons, la réduction des sources de bruit et un filtrage adapté.',
                    ],

                    [
                        'question' => 'Lors de la conception d’un instrument optique de précision, pourquoi faut-il considérer simultanément diffraction, aberrations et bruit du détecteur ?',
                        'choices' => [
                            ['choice_text' => 'Parce que la performance finale est limitée par l’ensemble de ces mécanismes', 'is_correct' => true],
                            ['choice_text' => 'Parce qu’un seul de ces mécanismes existe dans tout instrument réel', 'is_correct' => false],
                            ['choice_text' => 'Parce que le bruit du détecteur améliore toujours la résolution', 'is_correct' => false],
                            ['choice_text' => 'Parce que les aberrations n’ont aucun effet sur les mesures', 'is_correct' => false],
                        ],
                        'explanation' => 'Une performance réaliste doit tenir compte des limites physiques de propagation, des imperfections optiques et des limitations électroniques du capteur.',
                    ],
                ],
            ],

            // ============================================================
            // QUIZ 6 — Physique quantique et matériaux
            // ============================================================

            [
                'title' => 'Physique quantique et propriétés des matériaux',
                'description' => 'Applications de la quantification, des bandes d’énergie et des phénomènes microscopiques aux matériaux.',
                'questions' => [

                    [
                        'question' => 'Dans un semi-conducteur intrinsèque à l’équilibre, la concentration en électrons et en trous est...',
                        'choices' => [
                            ['choice_text' => 'Égale', 'is_correct' => true],
                            ['choice_text' => 'Toujours nulle pour les deux', 'is_correct' => false],
                            ['choice_text' => 'Toujours infiniment différente', 'is_correct' => false],
                            ['choice_text' => 'Indépendante de la température', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans un semi-conducteur intrinsèque, les électrons et les trous sont générés en paires, ce qui conduit à des concentrations égales à l’équilibre.',
                    ],

                    [
                        'question' => 'Pourquoi augmenter la température d’un semi-conducteur modifie-t-il fortement sa conductivité ?',
                        'choices' => [
                            ['choice_text' => 'Parce que la population de porteurs et la mobilité peuvent varier avec la température', 'is_correct' => true],
                            ['choice_text' => 'Parce que la charge élémentaire change', 'is_correct' => false],
                            ['choice_text' => 'Parce que toutes les bandes électroniques disparaissent', 'is_correct' => false],
                            ['choice_text' => 'Parce que le matériau devient automatiquement supraconducteur', 'is_correct' => false],
                        ],
                        'explanation' => 'La température agit sur la génération des porteurs et sur les mécanismes de diffusion, ce qui modifie la conductivité.',
                    ],

                    [
                        'question' => 'Dans un semi-conducteur dopé de type n, le dopage introduit principalement...',
                        'choices' => [
                            ['choice_text' => Des électrons supplémentaires comme porteurs majoritaires', 'is_correct' => true],
                            ['choice_text' => 'Des trous uniquement comme porteurs majoritaires', 'is_correct' => false],
                            ['choice_text' => 'Une suppression totale des porteurs', 'is_correct' => false],
                            ['choice_text' => 'Une charge macroscopique infinie', 'is_correct' => false],
                        ],
                        'explanation' => 'Les dopants donneurs fournissent des électrons supplémentaires, qui deviennent les porteurs majoritaires dans un matériau de type n.',
                    ],

                    [
                        'question' => 'Pourquoi un photon de fréquence plus élevée possède-t-il davantage d’énergie qu’un photon de fréquence plus faible ?',
                        'choices' => [
                            ['choice_text' => 'Parce que l’énergie du photon est proportionnelle à sa fréquence', 'is_correct' => true],
                            ['choice_text' => 'Parce que sa masse augmente linéairement avec la fréquence', 'is_correct' => false],
                            ['choice_text' => 'Parce que la vitesse dans le vide augmente avec la fréquence', 'is_correct' => false],
                            ['choice_text' => 'Parce que la charge du photon augmente', 'is_correct' => false],
                        ],
                        'explanation' => 'L’énergie d’un photon est E = hf. Elle est donc proportionnelle à la fréquence.',
                    ],

                    [
                        'question' => 'Dans un matériau métallique, pourquoi la résistance électrique peut-elle augmenter avec la température ?',
                        'choices' => [
                            ['choice_text' => 'Les vibrations du réseau cristallin augmentent la diffusion des électrons', 'is_correct' => true],
                            ['choice_text' => 'Les électrons cessent complètement d’être chargés', 'is_correct' => false],
                            ['choice_text' => 'La charge élémentaire devient plus faible', 'is_correct' => false],
                            ['choice_text' => 'Le champ électrique disparaît systématiquement', 'is_correct' => false],
                        ],
                        'explanation' => 'À température plus élevée, les vibrations du réseau augmentent généralement la diffusion des électrons et donc la résistivité métallique.',
                    ],

                    [
                        'question' => 'Dans une jonction p-n polarisée en direct, pourquoi le courant augmente-t-il fortement après une certaine tension ?',
                        'choices' => [
                            ['choice_text' => 'La barrière de potentiel est davantage réduite et l’injection de porteurs augmente fortement', 'is_correct' => true],
                            ['choice_text' => 'La jonction devient instantanément métallique idéale', 'is_correct' => false],
                            ['choice_text' => 'La mobilité devient infinie', 'is_correct' => false],
                            ['choice_text' => 'Les porteurs perdent automatiquement leur charge', 'is_correct' => false],
                        ],
                        'explanation' => 'La polarisation directe réduit la barrière de la jonction et permet une injection accrue de porteurs, conduisant à une croissance forte du courant.',
                    ],

                    [
                        'question' => 'Dans un matériau soumis à un champ magnétique, l’effet Hall peut être utilisé pour mesurer indirectement...',
                        'choices' => [
                            ['choice_text' => 'Le signe et certains paramètres des porteurs de charge', 'is_correct' => true],
                            ['choice_text' => 'Uniquement la température ambiante', 'is_correct' => false],
                            ['choice_text' => 'Uniquement la masse du matériau', 'is_correct' => false],
                            ['choice_text' => 'La longueur du laboratoire', 'is_correct' => false],
                        ],
                        'explanation' => 'La tension de Hall fournit des informations sur le signe des porteurs, leur concentration et certains paramètres de transport.',
                    ],

                    [
                        'question' => 'Pourquoi les propriétés électriques d’un matériau sont-elles étroitement liées à sa structure de bandes ?',
                        'choices' => [
                            ['choice_text' => 'La disponibilité des états électroniques et de la bande interdite contrôle notamment le transport', 'is_correct' => true],
                            ['choice_text' => 'La structure de bandes détermine uniquement la couleur', 'is_correct' => false],
                            ['choice_text' => 'Elle ne concerne que les matériaux gazeux', 'is_correct' => false],
                            ['choice_text' => 'Elle supprime les interactions électroniques', 'is_correct' => false],
                        ],
                        'explanation' => 'La distinction entre bande de valence, bande de conduction et bande interdite joue un rôle central dans les propriétés électriques des matériaux.',
                    ],

                    [
                        'question' => 'Dans une photodiode utilisée pour la détection optique, quel paramètre est particulièrement important pour convertir efficacement les photons en signal électrique ?',
                        'choices' => [
                            ['choice_text' => 'La responsivité spectrale', 'is_correct' => true],
                            ['choice_text' => 'La couleur extérieure du boîtier uniquement', 'is_correct' => false],
                            ['choice_text' => 'La masse totale du capteur uniquement', 'is_correct' => false],
                            ['choice_text' => 'La gravité locale', 'is_correct' => false],
                        ],
                        'explanation' => 'La responsivité décrit la conversion du flux optique incident en courant électrique et dépend notamment de la longueur d’onde.',
                    ],

                    [
                        'question' => 'Dans la conception d’un capteur quantique ou semi-conducteur, pourquoi le contrôle thermique peut-il devenir critique ?',
                        'choices' => [
                            ['choice_text' => 'Parce que la température influence le bruit, les populations de porteurs et les propriétés de transport', 'is_correct' => true],
                            ['choice_text' => 'Parce que la température ne modifie jamais les matériaux', 'is_correct' => false],
                            ['choice_text' => 'Parce que la résistance devient toujours nulle à haute température', 'is_correct' => false],
                            ['choice_text' => 'Parce que les photons cessent d’exister au-dessus de 0 °C', 'is_correct' => false],
                        ],
                        'explanation' => 'Le contrôle thermique peut être déterminant pour la stabilité, le bruit, les mécanismes de transport et la reproductibilité d’un capteur.',
                    ],
                ],
            ],

            // ============================================================
            // QUIZ 7 — Mesures, incertitudes et expérimentation
            // ============================================================

            [
                'title' => 'Métrologie et analyse expérimentale en physique',
                'description' => 'Méthodes professionnelles de mesure, incertitudes, propagation des erreurs et validation expérimentale.',
                'questions' => [

                    [
                        'question' => 'Lorsqu’une mesure expérimentale est répétée plusieurs fois dans des conditions identiques, l’écart-type caractérise principalement...',
                        'choices' => [
                            ['choice_text' => 'La dispersion des mesures', 'is_correct' => true],
                            ['choice_text' => 'La valeur exacte de la grandeur physique', 'is_correct' => false],
                            ['choice_text' => 'La résolution théorique parfaite de l’instrument', 'is_correct' => false],
                            ['choice_text' => 'La masse du dispositif', 'is_correct' => false],
                        ],
                        'explanation' => 'L’écart-type quantifie la dispersion des résultats autour de leur moyenne dans un ensemble de mesures.',
                    ],

                    [
                        'question' => 'Une mesure est écrite x = 10,0 ± 0,2. Que représente principalement ±0,2 ?',
                        'choices' => [
                            ['choice_text' => 'Une estimation de l’incertitude associée à la mesure', 'is_correct' => true],
                            ['choice_text' => 'Une deuxième valeur exacte de x', 'is_correct' => false],
                            ['choice_text' => 'La masse de l’instrument', 'is_correct' => false],
                            ['choice_text' => 'La variation obligatoire à chaque seconde', 'is_correct' => false],
                        ],
                        'explanation' => 'Le terme ±0,2 représente l’incertitude associée à la mesure selon le modèle d’incertitude choisi.',
                    ],

                    [
                        'question' => 'Une erreur systématique constante peut-elle être réduite simplement en répétant davantage les mesures ?',
                        'choices' => [
                            ['choice_text' => 'Non, car elle déplace les résultats de manière cohérente', 'is_correct' => true],
                            ['choice_text' => 'Oui, toujours par un facteur égal au nombre de mesures', 'is_correct' => false],
                            ['choice_text' => 'Oui, automatiquement après dix mesures', 'is_correct' => false],
                            ['choice_text' => 'Non, uniquement parce qu’elle détruit la précision aléatoire', 'is_correct' => false],
                        ],
                        'explanation' => 'La répétition réduit généralement l’incertitude aléatoire mais ne supprime pas un biais systématique non corrigé.',
                    ],

                    [
                        'question' => 'Lorsqu’une grandeur y dépend de plusieurs variables mesurées avec incertitude, pourquoi faut-il utiliser une propagation d’incertitude ?',
                        'choices' => [
                            ['choice_text' => 'Pour estimer comment les incertitudes d’entrée influencent l’incertitude finale', 'is_correct' => true],
                            ['choice_text' => 'Pour supprimer toutes les erreurs physiques', 'is_correct' => false],
                            ['choice_text' => 'Pour remplacer les mesures expérimentales', 'is_correct' => false],
                            ['choice_text' => 'Pour obtenir automatiquement une valeur exacte', 'is_correct' => false],
                        ],
                        'explanation' => 'La propagation d’incertitude permet d’évaluer la contribution des incertitudes sur les variables d’entrée à celle du résultat final.',
                    ],

                    [
                        'question' => 'Deux méthodes expérimentales donnent 10,0 ± 0,1 et 10,0 ± 1,0 pour la même grandeur. Quelle méthode présente la meilleure précision, toutes choses égales par ailleurs ?',
                        'choices' => [
                            ['choice_text' => 'La première', 'is_correct' => true],
                            ['choice_text' => 'La deuxième', 'is_correct' => false],
                            ['choice_text' => 'Les deux ont nécessairement la même précision', 'is_correct' => false],
                            ['choice_text' => 'Aucune, car une incertitude est toujours inutile', 'is_correct' => false],
                        ],
                        'explanation' => 'Une incertitude plus faible indique une dispersion ou une incertitude instrumentale plus faible et donc une meilleure précision.',
                    ],

                    [
                        'question' => 'Une série de mesures est très regroupée mais toutes les valeurs sont décalées par rapport à la valeur de référence. Cela indique principalement...',
                        'choices' => [
                            ['choice_text' => 'Une bonne précision mais une mauvaise exactitude', 'is_correct' => true],
                            ['choice_text' => 'Une mauvaise précision mais une excellente exactitude', 'is_correct' => false],
                            ['choice_text' => 'Une absence totale d’erreur', 'is_correct' => false],
                            ['choice_text' => 'Une incertitude nécessairement nulle', 'is_correct' => false],
                        ],
                        'explanation' => 'Des mesures très regroupées indiquent une bonne précision, mais leur décalage par rapport à la référence indique un biais ou une mauvaise exactitude.',
                    ],

                    [
                        'question' => 'Dans une calibration instrumentale, pourquoi utilise-t-on plusieurs points de référence plutôt qu’un seul ?',
                        'choices' => [
                            ['choice_text' => 'Pour caractériser la réponse de l’instrument sur une plage et détecter d’éventuelles non-linéarités', 'is_correct' => true],
                            ['choice_text' => 'Pour éviter d’utiliser des unités', 'is_correct' => false],
                            ['choice_text' => 'Pour rendre la mesure indépendante de toute référence', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer automatiquement tout bruit électronique', 'is_correct' => false],
                        ],
                        'explanation' => 'Plusieurs points permettent de caractériser la courbe d’étalonnage et d’identifier les écarts à un comportement idéal.',
                    ],

                    [
                        'question' => 'Lorsqu’un modèle physique ajuste très bien des données mais contient beaucoup plus de paramètres libres que nécessaire, quel risque faut-il considérer ?',
                        'choices' => [
                            ['choice_text' => 'Le surajustement', 'is_correct' => true],
                            ['choice_text' => 'La conservation de l’énergie', 'is_correct' => false],
                            ['choice_text' => 'La disparition de l’incertitude', 'is_correct' => false],
                            ['choice_text' => 'La quantification automatique de toutes les variables', 'is_correct' => false],
                        ],
                        'explanation' => 'Un modèle trop complexe peut reproduire les fluctuations ou le bruit des données sans représenter correctement la physique générale.',
                    ],

                    [
                        'question' => 'Pourquoi comparer un modèle physique aux données sur plusieurs régimes de fonctionnement ?',
                        'choices' => [
                            ['choice_text' => 'Pour vérifier la robustesse des hypothèses et identifier leurs limites de validité', 'is_correct' => true],
                            ['choice_text' => 'Pour garantir que le modèle sera toujours exact', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer la nécessité de toute théorie', 'is_correct' => false],
                            ['choice_text' => 'Pour augmenter artificiellement le nombre de paramètres', 'is_correct' => false],
                        ],
                        'explanation' => 'Un modèle peut fonctionner dans un domaine limité. Tester plusieurs régimes permet d’identifier ses limites et la pertinence de ses hypothèses.',
                    ],

                    [
                        'question' => 'Dans une expérience de haute précision, pourquoi est-il important de contrôler les conditions environnementales comme la température et les vibrations ?',
                        'choices' => [
                            ['choice_text' => 'Elles peuvent introduire des variations systématiques ou du bruit dans les mesures', 'is_correct' => true],
                            ['choice_text' => 'Elles n’ont jamais d’effet sur les instruments', 'is_correct' => false],
                            ['choice_text' => 'Elles rendent toujours le signal plus fort', 'is_correct' => false],
                            ['choice_text' => 'Elles empêchent toute calibration', 'is_correct' => false],
                        ],
                        'explanation' => 'Les variations environnementales peuvent modifier les composants, les alignements ou les signaux et devenir significatives dans les mesures de précision.',
                    ],
                ],
            ],

            // ============================================================
            // QUIZ 8 — Systèmes complexes, simulation et optimisation
            // ============================================================

            [
                'title' => 'Simulation, optimisation et prise de décision physique',
                'description' => 'Résolution de problèmes complexes en combinant modélisation, simulation numérique, validation expérimentale et compromis de conception.',
                'questions' => [

                    [
                        'question' => 'Lorsqu’un système physique complexe contient plusieurs échelles de temps très différentes, quel problème numérique peut apparaître ?',
                        'choices' => [
                            ['choice_text' => Une difficulté de résolution liée au caractère raide du système', 'is_correct' => true],
                            ['choice_text' => 'Une disparition de toutes les variables lentes', 'is_correct' => false],
                            ['choice_text' => 'Une impossibilité physique de définir les unités', 'is_correct' => false],
                            ['choice_text' => 'Une conservation automatique de toutes les approximations', 'is_correct' => false],
                        ],
                        'explanation' => 'Des échelles de temps très différentes peuvent rendre les équations raides et imposer des méthodes numériques adaptées pour conserver stabilité et précision.',
                    ],

                    [
                        'question' => 'Dans une simulation numérique d’un système dynamique, pourquoi faut-il réaliser une étude de convergence ?',
                        'choices' => [
                            ['choice_text' => 'Pour vérifier que le résultat tend vers une solution stable lorsque la résolution est améliorée', 'is_correct' => true],
                            ['choice_text' => 'Pour garantir que les données expérimentales sont inutiles', 'is_correct' => false],
                            ['choice_text' => 'Pour augmenter uniquement le nombre de paramètres physiques', 'is_correct' => false],
                            ['choice_text' => 'Pour empêcher toute variation temporelle', 'is_correct' => false],
                        ],
                        'explanation' => 'Une étude de convergence permet de vérifier que les résultats numériques ne dépendent pas excessivement de la discrétisation choisie.',
                    ],

                    [
                        'question' => 'Dans une optimisation énergétique, pourquoi maximiser uniquement le rendement n’est-il pas toujours le meilleur choix ?',
                        'choices' => [
                            ['choice_text' => 'Parce que le coût, la masse, la fiabilité, la sécurité et la maintenabilité peuvent aussi être des contraintes', 'is_correct' => true],
                            ['choice_text' => 'Parce que le rendement n’a aucun intérêt', 'is_correct' => false],
                            ['choice_text' => 'Parce que les lois de conservation interdisent l’optimisation', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’un rendement élevé implique toujours un coût nul', 'is_correct' => false],
                        ],
                        'explanation' => 'Les problèmes d’ingénierie physique sont multi-objectifs : une solution optimale doit équilibrer performance, coût, sécurité, durée de vie et autres contraintes.',
                    ],

                    [
                        'question' => 'Un modèle numérique reproduit les données d’un laboratoire mais échoue sur un autre dispositif géométriquement différent. Quelle cause est particulièrement plausible ?',
                        'choices' => [
                            ['choice_text' => 'Le modèle capture peut-être une corrélation spécifique au premier dispositif plutôt qu’un mécanisme physique général', 'is_correct' => true],
                            ['choice_text' => 'Les lois physiques changent automatiquement avec le laboratoire', 'is_correct' => false],
                            ['choice_text' => 'Les unités SI cessent d’être valides', 'is_correct' => false],
                            ['choice_text' => 'Une nouvelle constante fondamentale doit nécessairement être introduite', 'is_correct' => false],
                        ],
                        'explanation' => 'Un modèle peut être trop spécifique à une configuration. La validation croisée sur d’autres géométries permet de vérifier sa généralité physique.',
                    ],

                    [
                        'question' => 'Dans une simulation multiphysique thermique-mécanique, pourquoi le couplage entre les phénomènes doit-il être pris en compte lorsque les déformations modifient les échanges thermiques ?',
                        'choices' => [
                            ['choice_text' => 'Parce que les phénomènes s’influencent mutuellement et qu’un modèle découplé peut devenir incohérent', 'is_correct' => true],
                            ['choice_text' => 'Parce que les températures sont toujours indépendantes de la géométrie', 'is_correct' => false],
                            ['choice_text' => 'Parce que la mécanique ne possède aucune équation propre', 'is_correct' => false],
                            ['choice_text' => 'Parce que la chaleur ne peut jamais produire de déformation', 'is_correct' => false],
                        ],
                        'explanation' => 'Lorsque les champs thermiques modifient la géométrie et que cette géométrie modifie à son tour les échanges thermiques, un couplage multiphysique devient nécessaire.',
                    ],

                    [
                        'question' => 'Pour choisir entre deux modèles physiques de complexité différente, quel critère professionnel est le plus pertinent ?',
                        'choices' => [
                            ['choice_text' => 'Choisir le modèle le plus simple qui reste suffisamment précis pour l’objectif', 'is_correct' => true],
                            ['choice_text' => 'Toujours choisir le modèle comportant le plus de paramètres', 'is_correct' => false],
                            ['choice_text' => 'Toujours choisir le modèle le moins précis', 'is_correct' => false],
                            ['choice_text' => 'Éviter toute validation expérimentale', 'is_correct' => false],
                        ],
                        'explanation' => 'Le principe de parcimonie favorise un modèle suffisamment précis sans complexité inutile, ce qui améliore souvent la robustesse et la maintenabilité.',
                    ],

                    [
                        'question' => 'Une simulation prédit une température maximale de 80 °C alors que l’expérience mesure 110 °C. Quelle démarche est la plus professionnelle ?',
                        'choices' => [
                            ['choice_text' => 'Analyser les paramètres, les conditions aux limites, les pertes et les hypothèses du modèle avant de modifier arbitrairement les résultats', 'is_correct' => true],
                            ['choice_text' => 'Remplacer directement le résultat simulé par la valeur expérimentale', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les données expérimentales', 'is_correct' => false],
                            ['choice_text' => 'Multiplier toutes les températures par un facteur choisi au hasard', 'is_correct' => false],
                        ],
                        'explanation' => 'Un écart entre simulation et expérience doit conduire à une analyse structurée du modèle, des paramètres et des conditions aux limites.',
                    ],

                    [
                        'question' => 'Dans un système physique surveillé en production, pourquoi une approche basée sur plusieurs capteurs redondants peut-elle améliorer la fiabilité ?',
                        'choices' => [
                            ['choice_text' => 'Elle permet de détecter certaines incohérences et défaillances de capteurs', 'is_correct' => true],
                            ['choice_text' => 'Elle garantit que toutes les mesures seront exactes', 'is_correct' => false],
                            ['choice_text' => 'Elle supprime la nécessité de calibrer les capteurs', 'is_correct' => false],
                            ['choice_text' => 'Elle rend les capteurs indépendants des lois physiques', 'is_correct' => false],
                        ],
                        'explanation' => 'La redondance permet de comparer plusieurs mesures cohérentes et d’identifier des dérives ou pannes, améliorant ainsi la robustesse du système.',
                    ],

                    [
                        'question' => 'Lorsqu’un système physique critique doit fonctionner dans des conditions extrêmes, pourquoi effectuer une analyse de sensibilité ?',
                        'choices' => [
                            ['choice_text' => 'Pour identifier les paramètres qui influencent le plus fortement la performance ou le risque', 'is_correct' => true],
                            ['choice_text' => 'Pour supprimer toutes les incertitudes', 'is_correct' => false],
                            ['choice_text' => 'Pour rendre tous les paramètres également importants', 'is_correct' => false],
                            ['choice_text' => 'Pour éviter toute mesure expérimentale', 'is_correct' => false],
                        ],
                        'explanation' => 'L’analyse de sensibilité permet de hiérarchiser les paramètres influents et de concentrer les efforts de mesure, de contrôle ou d’optimisation.',
                    ],

                    [
                        'question' => 'Dans une conception professionnelle soumise à des incertitudes de fabrication, pourquoi une analyse de tolérance est-elle nécessaire ?',
                        'choices' => [
                            ['choice_text' => 'Pour vérifier que les variations réalistes des paramètres restent compatibles avec les performances et la sécurité', 'is_correct' => true],
                            ['choice_text' => 'Pour supposer que toutes les pièces sont idéales', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer les variations dimensionnelles', 'is_correct' => false],
                            ['choice_text' => 'Pour augmenter arbitrairement les marges sans analyse', 'is_correct' => false],
                        ],
                        'explanation' => 'Les tolérances permettent d’évaluer l’effet des dispersions de fabrication sur les performances et de définir des marges de conception adaptées.',
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
                // is_correct avec la bonne réponse.
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