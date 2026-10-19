<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class WavesOpticsProfessionalSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'waves-optics')->firstOrFail();

        $quizzes = [

            // ============================================================
            // QUIZ 1 — Théorie des ondes et dispersion
            // ============================================================

            [
                'title' => 'Théorie des ondes et dispersion professionnelle',
                'description' => 'Analyse professionnelle des équations d’onde, relations de dispersion, vitesses de phase et de groupe.',
                'questions' => [

                    [
                        'question' => 'Pour une onde plane monochromatique de la forme ψ(x,t) = A exp[i(kx - ωt)], quelle relation définit sa vitesse de phase ?',
                        'choices' => [
                            ['choice_text' => 'vφ = ω/k', 'is_correct' => true],
                            ['choice_text' => 'vφ = k/ω', 'is_correct' => false],
                            ['choice_text' => 'vφ = ωk', 'is_correct' => false],
                            ['choice_text' => 'vφ = dω/dt', 'is_correct' => false],
                        ],
                        'explanation' => 'Une surface de phase constante vérifie kx - ωt = constante, d’où dx/dt = ω/k.',
                    ],

                    [
                        'question' => 'Quelle expression définit la vitesse de groupe dans un milieu dispersif ?',
                        'choices' => [
                            ['choice_text' => 'vg = dω/dk', 'is_correct' => true],
                            ['choice_text' => 'vg = ω/k', 'is_correct' => false],
                            ['choice_text' => 'vg = k/ω', 'is_correct' => false],
                            ['choice_text' => 'vg = d k/dt', 'is_correct' => false],
                        ],
                        'explanation' => 'La vitesse de groupe est la pente locale de la relation de dispersion ω(k).',
                    ],

                    [
                        'question' => 'Dans un milieu non dispersif, quelle relation entre vitesse de phase et vitesse de groupe est généralement satisfaite ?',
                        'choices' => [
                            ['choice_text' => 'vg = vφ', 'is_correct' => true],
                            ['choice_text' => 'vg = 2vφ', 'is_correct' => false],
                            ['choice_text' => 'vg = vφ²', 'is_correct' => false],
                            ['choice_text' => 'vg = 1/vφ', 'is_correct' => false],
                        ],
                        'explanation' => 'Si ω = vk avec v constant, alors dω/dk = v = ω/k.',
                    ],

                    [
                        'question' => 'Pourquoi une impulsion lumineuse peut-elle s’élargir temporellement dans une fibre optique ?',
                        'choices' => [
                            ['choice_text' => Les différentes composantes spectrales peuvent avoir des vitesses de groupe différentes', 'is_correct' => true],
                            ['choice_text' => 'La fréquence de chaque photon diminue toujours pendant la propagation', 'is_correct' => false],
                            ['choice_text' => 'La vitesse de la lumière dans le vide dépend de la longueur d’onde', 'is_correct' => false],
                            ['choice_text' => 'Le cœur de la fibre devient progressivement opaque dans tous les cas', 'is_correct' => false],
                        ],
                        'explanation' => 'La dispersion chromatique provoque des temps de propagation différents pour les différentes composantes spectrales.',
                    ],

                    [
                        'question' => 'Quelle forme prend l’équation d’onde unidimensionnelle classique dans un milieu homogène non dispersif ?',
                        'choices' => [
                            ['choice_text' => '∂²ψ/∂x² = (1/v²) ∂²ψ/∂t²', 'is_correct' => true],
                            ['choice_text' => '∂ψ/∂x = v² ∂ψ/∂t', 'is_correct' => false],
                            ['choice_text' => '∂²ψ/∂x² = v² ∂²ψ/∂t²', 'is_correct' => false],
                            ['choice_text' => '∂ψ/∂x = 1/v²', 'is_correct' => false],
                        ],
                        'explanation' => 'La forme standard de l’équation d’onde relie les dérivées spatiale et temporelle par la célérité v.',
                    ],

                    [
                        'question' => 'Pour une relation de dispersion donnée ω(k), que représente physiquement la pente dω/dk ?',
                        'choices' => [
                            ['choice_text' => 'La vitesse de groupe locale', 'is_correct' => true],
                            ['choice_text' => 'La longueur d’onde', 'is_correct' => false],
                            ['choice_text' => 'La fréquence absolue', 'is_correct' => false],
                            ['choice_text' => 'L’amplitude du champ', 'is_correct' => false],
                        ],
                        'explanation' => 'Par définition, vg = dω/dk.',
                    ],

                    [
                        'question' => 'Pourquoi une forte dispersion peut-elle limiter la transmission de données numériques à haut débit ?',
                        'choices' => [
                            ['choice_text' => Elle élargit les impulsions et peut provoquer des recouvrements entre symboles', 'is_correct' => true],
                            ['choice_text' => 'Elle augmente nécessairement la puissance reçue', 'is_correct' => false],
                            ['choice_text' => 'Elle rend toutes les fréquences parfaitement synchrones', 'is_correct' => false],
                            ['choice_text' => 'Elle supprime toujours toute atténuation', 'is_correct' => false],
                        ],
                        'explanation' => 'L’élargissement temporel des impulsions réduit l’œil du signal et peut créer de l’interférence intersymbole.',
                    ],

                    [
                        'question' => 'Pourquoi une onde sinusoïdale infinie ne permet-elle pas à elle seule de représenter fidèlement un signal impulsionnel localisé ?',
                        'choices' => [
                            ['choice_text' => Une impulsion localisée nécessite une superposition d’un éventail de fréquences', 'is_correct' => true],
                            ['choice_text' => 'Une onde sinusoïdale ne possède aucune fréquence', 'is_correct' => false],
                            ['choice_text' => 'Une impulsion possède toujours une seule fréquence', 'is_correct' => false],
                            ['choice_text' => 'La localisation est impossible dans tout système physique', 'is_correct' => false],
                        ],
                        'explanation' => 'Un signal temporel localisé est obtenu par superposition de composantes spectrales.',
                    ],

                    [
                        'question' => 'Pourquoi l’analyse de Fourier est-elle fondamentale dans l’étude professionnelle des ondes ?',
                        'choices' => [
                            ['choice_text' => 'Elle décompose un signal complexe en composantes fréquentielles analysables séparément', 'is_correct' => true],
                            ['choice_text' => 'Elle élimine les interactions entre toutes les composantes', 'is_correct' => false],
                            ['choice_text' => 'Elle impose toujours un signal périodique', 'is_correct' => false],
                            ['choice_text' => 'Elle remplace toute mesure expérimentale', 'is_correct' => false],
                        ],
                        'explanation' => 'La représentation fréquentielle permet d’étudier propagation, filtrage, dispersion et réponse spectrale.',
                    ],

                    [
                        'question' => 'Pourquoi une relation de dispersion non linéaire entre ω et k implique-t-elle généralement que le milieu est dispersif ?',
                        'choices' => [
                            ['choice_text' => Le rapport ω/k varie alors avec k', 'is_correct' => true],
                            ['choice_text' => 'ω devient toujours nul', 'is_correct' => false],
                            ['choice_text' => 'La longueur d’onde cesse d’exister', 'is_correct' => false],
                            ['choice_text' => 'Toutes les fréquences acquièrent exactement la même vitesse de phase', 'is_correct' => false],
                        ],
                        'explanation' => 'Une non-linéarité de ω(k) signifie que vφ = ω/k dépend généralement de la fréquence.',
                    ],
                ],
            ],

            // ============================================================
            // QUIZ 2 — Interférométrie professionnelle
            // ============================================================

            [
                'title' => 'Interférométrie et cohérence',
                'description' => 'Analyse des interféromètres, cohérence temporelle et spatiale, phase et métrologie optique.',
                'questions' => [

                    [
                        'question' => 'Quelle grandeur doit rester suffisamment stable pour observer des franges d’interférence stationnaires ?',
                        'choices' => [
                            ['choice_text' => 'La différence de phase entre les faisceaux', 'is_correct' => true],
                            ['choice_text' => 'La masse totale des faisceaux', 'is_correct' => false],
                            ['choice_text' => 'La température du détecteur uniquement', 'is_correct' => false],
                            ['choice_text' => 'La longueur du câble électrique uniquement', 'is_correct' => false],
                        ],
                        'explanation' => 'La stabilité temporelle de la phase relative est au cœur de la cohérence nécessaire à l’interférence.',
                    ],

                    [
                        'question' => 'Pour une source de largeur spectrale Δν, comment varie qualitativement sa longueur de cohérence ?',
                        'choices' => [
                            ['choice_text' => Elle augmente lorsque Δν diminue', 'is_correct' => true],
                            ['choice_text' => 'Elle augmente lorsque Δν augmente', 'is_correct' => false],
                            ['choice_text' => 'Elle est indépendante de Δν', 'is_correct' => false],
                            ['choice_text' => 'Elle devient toujours nulle dès que Δν est non nul', 'is_correct' => false],
                        ],
                        'explanation' => 'Une bande spectrale étroite correspond à une cohérence temporelle plus longue.',
                    ],

                    [
                        'question' => 'Dans un interféromètre de Michelson, un déplacement du miroir de Δx entraîne idéalement une variation de différence de marche de...',
                        'choices' => [
                            ['choice_text' => '2Δx', 'is_correct' => true],
                            ['choice_text' => 'Δx', 'is_correct' => false],
                            ['choice_text' => 'Δx/2', 'is_correct' => false],
                            ['choice_text' => '4Δx', 'is_correct' => false],
                        ],
                        'explanation' => 'La lumière parcourt deux fois la distance entre le séparateur et le miroir.',
                    ],

                    [
                        'question' => 'Dans une mesure interférométrique, un déplacement correspondant à un cycle complet de phase représente une variation de différence de marche de...',
                        'choices' => [
                            ['choice_text' => 'Une longueur d’onde', 'is_correct' => true],
                            ['choice_text' => 'Une demi-longueur d’onde', 'is_correct' => false],
                            ['choice_text' => 'Deux longueurs d’onde', 'is_correct' => false],
                            ['choice_text' => 'Un quart de longueur d’onde', 'is_correct' => false],
                        ],
                        'explanation' => 'Une variation de phase de 2π correspond à une différence de marche de λ.',
                    ],

                    [
                        'question' => 'Pourquoi l’interférométrie est-elle adaptée à la mesure de très faibles déplacements ?',
                        'choices' => [
                            ['choice_text' => 'La phase optique peut être mesurée avec une sensibilité bien inférieure à une longueur d’onde', 'is_correct' => true],
                            ['choice_text' => 'Les photons ont une taille macroscopique', 'is_correct' => false],
                            ['choice_text' => 'La lumière change automatiquement de fréquence lorsqu’un miroir bouge', 'is_correct' => false],
                            ['choice_text' => 'La longueur d’onde devient plus petite que zéro', 'is_correct' => false],
                        ],
                        'explanation' => 'Une mesure de phase permet une résolution sub-longueur d’onde lorsque le système est correctement stabilisé.',
                    ],

                    [
                        'question' => 'Pourquoi une vibration mécanique de l’interféromètre peut-elle dégrader une mesure de phase ?',
                        'choices' => [
                            ['choice_text' => 'Elle modifie physiquement les différences de marche entre les bras', 'is_correct' => true],
                            ['choice_text' => 'Elle change nécessairement la constante de Planck', 'is_correct' => false],
                            ['choice_text' => 'Elle annule automatiquement la fréquence optique', 'is_correct' => false],
                            ['choice_text' => 'Elle n’a aucun effet géométrique', 'is_correct' => false],
                        ],
                        'explanation' => 'Les vibrations modifient les chemins optiques et introduisent du bruit de phase.',
                    ],

                    [
                        'question' => 'Pourquoi un interféromètre à faible cohérence peut-il être utilisé pour mesurer une distance absolue ou localiser une interface ?',
                        'choices' => [
                            ['choice_text' => La localisation de l’enveloppe d’interférence permet de repérer une différence de marche avec faible ambiguïté cyclique', 'is_correct' => true],
                            ['choice_text' => 'La cohérence faible interdit toute localisation', 'is_correct' => false],
                            ['choice_text' => 'La phase devient toujours constante sur tout le trajet', 'is_correct' => false],
                            ['choice_text' => 'La source n’émet plus de lumière', 'is_correct' => false],
                        ],
                        'explanation' => 'Les techniques à faible cohérence exploitent l’enveloppe de corrélation plutôt qu’une phase périodique seule.',
                    ],

                    [
                        'question' => 'Pourquoi la stabilité de polarisation peut-elle être importante dans un interféromètre réel ?',
                        'choices' => [
                            ['choice_text' => Des polarisations mal alignées peuvent réduire la visibilité des interférences', 'is_correct' => true],
                            ['choice_text' => 'La polarisation n’intervient jamais dans l’interférence', 'is_correct' => false],
                            ['choice_text' => 'Une polarisation différente augmente toujours la visibilité', 'is_correct' => false],
                            ['choice_text' => 'Les deux faisceaux doivent toujours être orthogonaux', 'is_correct' => false],
                        ],
                        'explanation' => 'L’interférence efficace nécessite des composantes de polarisation compatibles.',
                    ],

                    [
                        'question' => 'Pourquoi une source spatialement incohérente peut-elle limiter les contrastes d’interférence sur une grande surface ?',
                        'choices' => [
                            ['choice_text' => Des contributions provenant de différentes zones de la source peuvent produire des franges décalées qui se moyennent', 'is_correct' => true],
                            ['choice_text' => 'Une source étendue a toujours une fréquence nulle', 'is_correct' => false],
                            ['choice_text' => 'L’incohérence spatiale augmente nécessairement le contraste', 'is_correct' => false],
                            ['choice_text' => 'La source ne produit aucune lumière', 'is_correct' => false],
                        ],
                        'explanation' => 'La cohérence spatiale contrôle la capacité des différents points de la source à produire un motif cohérent sur le détecteur.',
                    ],

                    [
                        'question' => 'Pourquoi l’étalonnage d’une chaîne interférométrique est-il indispensable en métrologie professionnelle ?',
                        'choices' => [
                            ['choice_text' => 'Il permet de relier la phase mesurée à une grandeur physique avec une traçabilité connue', 'is_correct' => true],
                            ['choice_text' => 'Il supprime toutes les fluctuations environnementales', 'is_correct' => false],
                            ['choice_text' => 'Il rend les optiques parfaitement idéales', 'is_correct' => false],
                            ['choice_text' => 'Il élimine la nécessité de contrôler la température', 'is_correct' => false],
                        ],
                        'explanation' => 'Une mesure métrologique nécessite une relation quantitative et traçable entre signal et grandeur mesurée.',
                    ],
                ],
            ],

            // ============================================================
            // QUIZ 3 — Diffraction et résolution professionnelle
            // ============================================================

            [
                'title' => 'Diffraction, imagerie et résolution',
                'description' => 'Analyse des limites de diffraction, fonctions d’étalement et résolution des systèmes optiques.',
                'questions' => [

                    [
                        'question' => 'Pourquoi l’image d’un point produite par un système optique parfait n’est-elle pas un point mathématique ?',
                        'choices' => [
                            ['choice_text' => 'La diffraction transforme un point objet en une figure de diffraction finie', 'is_correct' => true],
                            ['choice_text' => 'Les lentilles parfaites créent toujours une aberration géométrique', 'is_correct' => false],
                            ['choice_text' => 'La lumière ne peut pas être focalisée', 'is_correct' => false],
                            ['choice_text' => 'La masse du photon empêche toute focalisation', 'is_correct' => false],
                        ],
                        'explanation' => 'Une ouverture finie impose une réponse impulsionnelle spatiale limitée par diffraction.',
                    ],

                    [
                        'question' => 'Pour une ouverture circulaire de diamètre D, comment évolue approximativement l’angle du premier minimum de la tache d’Airy ?',
                        'choices' => [
                            ['choice_text' => θ ≈ 1,22λ/D', 'is_correct' => true],
                            ['choice_text' => 'θ ≈ D/λ', 'is_correct' => false],
                            ['choice_text' => 'θ ≈ λD', 'is_correct' => false],
                            ['choice_text' => 'θ ≈ 1,22D/λ', 'is_correct' => false],
                        ],
                        'explanation' => 'Le premier zéro du motif d’Airy satisfait approximativement sinθ ≈ 1,22λ/D.',
                    ],

                    [
                        'question' => 'Pourquoi augmenter le diamètre d’un télescope améliore-t-il sa résolution angulaire ?',
                        'choices' => [
                            ['choice_text' => 'Le diamètre augmente la largeur de la pupille et réduit la limite de diffraction', 'is_correct' => true],
                            ['choice_text' => 'Il modifie la longueur d’onde de la lumière', 'is_correct' => false],
                            ['choice_text' => 'Il supprime toute turbulence atmosphérique', 'is_correct' => false],
                            ['choice_text' => 'Il rend les sources plus lumineuses sans effet sur la résolution', 'is_correct' => false],
                        ],
                        'explanation' => 'La limite de diffraction varie approximativement comme λ/D.',
                    ],

                    [
                        'question' => 'Quel objet mathématique est couramment utilisé pour représenter la réponse d’un système optique à une source ponctuelle ?',
                        'choices' => [
                            ['choice_text' => 'La fonction d’étalement du point (PSF)', 'is_correct' => true],
                            ['choice_text' => 'La transformée de Laplace de la masse', 'is_correct' => false],
                            ['choice_text' => 'Le tenseur des contraintes', 'is_correct' => false],
                            ['choice_text' => 'La fonction de température', 'is_correct' => false],
                        ],
                        'explanation' => 'La PSF décrit l’image formée par le système à partir d’un point objet.',
                    ],

                    [
                        'question' => 'Pourquoi la fonction de transfert optique est-elle utile pour caractériser une chaîne d’imagerie ?',
                        'choices' => [
                            ['choice_text' => 'Elle décrit la réponse du système aux différentes fréquences spatiales', 'is_correct' => true],
                            ['choice_text' => 'Elle donne directement la masse de l’objectif', 'is_correct' => false],
                            ['choice_text' => 'Elle mesure uniquement la température', 'is_correct' => false],
                            ['choice_text' => 'Elle ne dépend jamais de l’ouverture', 'is_correct' => false],
                        ],
                        'explanation' => 'La MTF notamment permet d’évaluer la conservation du contraste selon la fréquence spatiale.',
                    ],

                    [
                        'question' => 'Pourquoi une augmentation de l’ouverture numérique d’un microscope améliore-t-elle généralement la résolution ?',
                        'choices' => [
                            ['choice_text' => 'Elle permet de collecter des angles plus élevés et réduit la limite de diffraction', 'is_correct' => true],
                            ['choice_text' => 'Elle augmente la longueur d’onde', 'is_correct' => false],
                            ['choice_text' => 'Elle élimine toute lumière diffractée', 'is_correct' => false],
                            ['choice_text' => 'Elle supprime les lois de la réfraction', 'is_correct' => false],
                        ],
                        'explanation' => 'La résolution est liée à l’ouverture numérique par des relations de type d ≈ λ/(2NA) selon le critère utilisé.',
                    ],

                    [
                        'question' => 'Pourquoi deux points peuvent-ils être détectés sans être réellement résolus comme deux structures distinctes ?',
                        'choices' => [
                            ['choice_text' => Le détecteur peut enregistrer une variation de signal alors que les PSF restent fortement recouvertes', 'is_correct' => true],
                            ['choice_text' => 'La diffraction interdit toute détection', 'is_correct' => false],
                            ['choice_text' => 'La détection et la résolution sont exactement la même notion', 'is_correct' => false],
                            ['choice_text' => 'Deux points ne peuvent jamais être distingués', 'is_correct' => false],
                        ],
                        'explanation' => 'La détection d’un signal et la capacité à séparer spatialement deux structures sont deux critères distincts.',
                    ],

                    [
                        'question' => 'Pourquoi la résolution réelle d’un télescope terrestre peut-elle être limitée par la turbulence avant d’atteindre la limite de diffraction ?',
                        'choices' => [
                            ['choice_text' => Les fluctuations atmosphériques modifient les fronts d’onde et dégradent la PSF', 'is_correct' => true],
                            ['choice_text' => 'La turbulence augmente toujours le diamètre du miroir', 'is_correct' => false],
                            ['choice_text' => 'La turbulence réduit la longueur d’onde du photon', 'is_correct' => false],
                            ['choice_text' => 'La turbulence rend le vide plus parfait', 'is_correct' => false],
                        ],
                        'explanation' => 'Les variations d’indice dans l’atmosphère déforment les fronts d’onde et dégradent la qualité d’image.',
                    ],

                    [
                        'question' => 'Pourquoi l’optique adaptative peut-elle améliorer la résolution astronomique au sol ?',
                        'choices' => [
                            ['choice_text' => 'Elle compense dynamiquement une partie des aberrations introduites par l’atmosphère', 'is_correct' => true],
                            ['choice_text' => 'Elle supprime la diffraction fondamentale', 'is_correct' => false],
                            ['choice_text' => 'Elle modifie la vitesse de la lumière dans le vide', 'is_correct' => false],
                            ['choice_text' => 'Elle augmente la masse du miroir', 'is_correct' => false],
                        ],
                        'explanation' => 'Les miroirs déformables et capteurs de front d’onde permettent de corriger certaines perturbations atmosphériques.',
                    ],

                    [
                        'question' => 'Pourquoi une ouverture plus grande n’améliore-t-elle pas indéfiniment la résolution d’un instrument terrestre ?',
                        'choices' => [
                            ['choice_text' => 'D’autres limitations comme la turbulence, les aberrations ou le traitement du signal peuvent devenir dominantes', 'is_correct' => true],
                            ['choice_text' => 'La diffraction augmente toujours avec D', 'is_correct' => false],
                            ['choice_text' => 'La résolution devient automatiquement infinie', 'is_correct' => false],
                            ['choice_text' => 'La longueur d’onde disparaît', 'is_correct' => false],
                        ],
                        'explanation' => 'La limite de diffraction n’est qu’un des nombreux facteurs qui déterminent la résolution réelle.',
                    ],
                ],
            ],

            // ============================================================
            // QUIZ 4 — Fibres optiques et guidage
            // ============================================================

            [
                'title' => 'Fibres optiques et propagation guidée',
                'description' => 'Étude professionnelle du guidage, des modes, de l’atténuation et de la dispersion dans les fibres.',
                'questions' => [

                    [
                        'question' => 'Quelle condition fondamentale permet le guidage par réflexion totale interne dans une fibre classique ?',
                        'choices' => [
                            ['choice_text' => 'n_core > n_cladding', 'is_correct' => true],
                            ['choice_text' => 'n_core < n_cladding', 'is_correct' => false],
                            ['choice_text' => 'n_core = 1 toujours', 'is_correct' => false],
                            ['choice_text' => 'n_core = n_cladding dans tous les cas', 'is_correct' => false],
                        ],
                        'explanation' => 'Le cœur doit avoir un indice supérieur à celui de la gaine pour permettre le guidage par réflexion totale.',
                    ],

                    [
                        'question' => 'Quelle grandeur caractérise la capacité d’une fibre à accepter des rayons sur une plage angulaire donnée ?',
                        'choices' => [
                            ['choice_text' => 'L’ouverture numérique', 'is_correct' => true],
                            ['choice_text' => 'La masse linéique', 'is_correct' => false],
                            ['choice_text' => 'La période temporelle', 'is_correct' => false],
                            ['choice_text' => 'La puissance mécanique', 'is_correct' => false],
                        ],
                        'explanation' => 'L’ouverture numérique est liée à l’angle d’acceptation et aux indices des régions guidantes.',
                    ],

                    [
                        'question' => 'Pourquoi une fibre monomode possède-t-elle une dispersion modale fortement réduite ?',
                        'choices' => [
                            ['choice_text' => Un seul mode spatial dominant est guidé', 'is_correct' => true],
                            ['choice_text' => 'Elle possède une fréquence unique imposée par la fibre', 'is_correct' => false],
                            ['choice_text' => 'La lumière ne subit aucune dispersion chromatique', 'is_correct' => false],
                            ['choice_text' => 'Le cœur est nécessairement métallique', 'is_correct' => false],
                        ],
                        'explanation' => 'L’absence de plusieurs modes de propagation réduit fortement le délai différentiel modal.',
                    ],

                    [
                        'question' => 'Pourquoi la dispersion chromatique peut-elle subsister dans une fibre monomode ?',
                        'choices' => [
                            ['choice_text' => 'Le temps de groupe peut encore dépendre de la longueur d’onde', 'is_correct' => true],
                            ['choice_text' => 'Plusieurs modes spatiaux sont obligatoirement présents', 'is_correct' => false],
                            ['choice_text' => 'La fréquence devient aléatoire', 'is_correct' => false],
                            ['choice_text' => 'Le cœur ne possède aucun indice', 'is_correct' => false],
                        ],
                        'explanation' => 'La dispersion chromatique comprend notamment les contributions du matériau et du guidage.',
                    ],

                    [
                        'question' => 'Pourquoi l’atténuation est-elle une métrique essentielle pour une liaison fibre optique ?',
                        'choices' => [
                            ['choice_text' => 'Elle détermine la diminution de puissance disponible après propagation', 'is_correct' => true],
                            ['choice_text' => 'Elle détermine uniquement la fréquence porteuse', 'is_correct' => false],
                            ['choice_text' => 'Elle n’a aucun effet sur la distance maximale', 'is_correct' => false],
                            ['choice_text' => 'Elle mesure la vitesse de phase uniquement', 'is_correct' => false],
                        ],
                        'explanation' => 'L’atténuation limite directement la distance avant qu’un amplificateur ou répéteur ne soit nécessaire.',
                    ],

                    [
                        'question' => 'Pourquoi les fenêtres spectrales des fibres silice ont-elles été exploitées pour les télécommunications ?',
                        'choices' => [
                            ['choice_text' => 'Certaines plages de longueur d’onde offrent une atténuation et une dispersion favorables', 'is_correct' => true],
                            ['choice_text' => 'La silice ne possède aucune interaction avec la lumière', 'is_correct' => false],
                            ['choice_text' => 'Toutes les longueurs d’onde ont exactement les mêmes pertes', 'is_correct' => false],
                            ['choice_text' => 'La vitesse de la lumière y devient supérieure à c', 'is_correct' => false],
                        ],
                        'explanation' => 'Les systèmes sont conçus autour de plages spectrales offrant un compromis favorable entre pertes et dispersion.',
                    ],

                    [
                        'question' => 'Pourquoi la non-linéarité optique devient-elle importante à forte puissance dans une fibre ?',
                        'choices' => [
                            ['choice_text' => 'L’indice ou la réponse du milieu peut dépendre de l’intensité du champ', 'is_correct' => true],
                            ['choice_text' => 'La fréquence du photon devient nécessairement nulle', 'is_correct' => false],
                            ['choice_text' => 'La réflexion totale disparaît toujours', 'is_correct' => false],
                            ['choice_text' => 'La fibre devient mécaniquement rigide', 'is_correct' => false],
                        ],
                        'explanation' => 'Des effets comme Kerr, auto-modulation de phase ou mélange à quatre ondes apparaissent selon les conditions.',
                    ],

                    [
                        'question' => 'Quel phénomène non linéaire peut générer un élargissement spectral autour d’une impulsion intense ?',
                        'choices' => [
                            ['choice_text' => L’auto-modulation de phase', 'is_correct' => true],
                            ['choice_text' => 'La réflexion totale uniquement', 'is_correct' => false],
                            ['choice_text' => 'La polarisation linéaire passive', 'is_correct' => false],
                            ['choice_text' => 'La simple réfraction sans non-linéarité', 'is_correct' => false],
                        ],
                        'explanation' => 'La dépendance de l’indice à l’intensité peut produire une modulation temporelle de phase qui élargit le spectre.',
                    ],

                    [
                        'question' => 'Pourquoi les pertes par courbure peuvent-elles devenir importantes dans une fibre ?',
                        'choices' => [
                            ['choice_text' => Une courbure suffisamment forte peut modifier le champ guidé et augmenter les pertes radiatives', 'is_correct' => true],
                            ['choice_text' => 'Une courbure augmente toujours le contraste d’indice', 'is_correct' => false],
                            ['choice_text' => 'La fibre cesse d’avoir une longueur d’onde', 'is_correct' => false],
                            ['choice_text' => 'Les pertes sont indépendantes de la géométrie', 'is_correct' => false],
                        ],
                        'explanation' => 'Des courbures trop fortes peuvent perturber le confinement du mode et provoquer une fuite de puissance.',
                    ],

                    [
                        'question' => 'Pourquoi le bilan d’une liaison fibre doit-il considérer simultanément atténuation et dispersion ?',
                        'choices' => [
                            ['choice_text' => 'L’une limite la puissance disponible et l’autre la capacité à préserver la forme temporelle du signal', 'is_correct' => true],
                            ['choice_text' => 'Les deux grandeurs sont strictement identiques', 'is_correct' => false],
                            ['choice_text' => 'La dispersion ne concerne que les systèmes électriques', 'is_correct' => false],
                            ['choice_text' => 'L’atténuation n’a aucun lien avec le budget optique', 'is_correct' => false],
                        ],
                        'explanation' => 'Une liaison peut être limitée par le budget de puissance ou par les contraintes de débit imposées par la dispersion.',
                    ],
                ],
            ],

            // ============================================================
            // QUIZ 5 — Optique non linéaire
            // ============================================================

            [
                'title' => 'Optique non linéaire',
                'description' => 'Introduction professionnelle aux effets non linéaires dans les matériaux optiques.',
                'questions' => [

                    [
                        'question' => 'Dans un milieu optique linéaire, la polarisation induite est-elle proportionnelle au champ électrique ?',
                        'choices' => [
                            ['choice_text' => 'Oui, dans l’approximation linéaire', 'is_correct' => true],
                            ['choice_text' => 'Non, elle est toujours proportionnelle au carré du champ', 'is_correct' => false],
                            ['choice_text' => 'Elle est indépendante du champ', 'is_correct' => false],
                            ['choice_text' => 'Elle est nécessairement nulle', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans le régime linéaire, P = ε0χ^(1)E.',
                    ],

                    [
                        'question' => 'Quelle grandeur supplémentaire apparaît dans la polarisation d’un milieu non linéaire du second ordre ?',
                        'choices' => [
                            ['choice_text' => 'Un terme proportionnel à E²', 'is_correct' => true],
                            ['choice_text' => 'Un terme uniquement proportionnel à 1/E', 'is_correct' => false],
                            ['choice_text' => 'Un terme indépendant de toute excitation', 'is_correct' => false],
                            ['choice_text' => 'Un terme nécessairement nul dans tous les matériaux', 'is_correct' => false],
                        ],
                        'explanation' => 'La polarisation peut s’écrire P = ε0[χ^(1)E + χ^(2)E² + ...].',
                    ],

                    [
                        'question' => 'Quel phénomène correspond à la génération d’une onde à fréquence double de celle du champ incident dans un milieu non linéaire approprié ?',
                        'choices' => [
                            ['choice_text' => 'La génération de seconde harmonique', 'is_correct' => true],
                            ['choice_text' => 'La diffraction de Fraunhofer', 'is_correct' => false],
                            ['choice_text' => 'La réflexion totale', 'is_correct' => false],
                            ['choice_text' => 'La polarisation naturelle', 'is_correct' => false],
                        ],
                        'explanation' => 'La seconde harmonique produit une composante à 2ω à partir d’une excitation à ω.',
                    ],

                    [
                        'question' => 'Pourquoi un faisceau laser est-il particulièrement adapté à certaines expériences non linéaires ?',
                        'choices' => [
                            ['choice_text' => 'Sa forte intensité et sa cohérence facilitent l’obtention d’effets non linéaires mesurables', 'is_correct' => true],
                            ['choice_text' => 'Il possède toujours une fréquence nulle', 'is_correct' => false],
                            ['choice_text' => 'Il ne peut pas être focalisé', 'is_correct' => false],
                            ['choice_text' => 'Il est toujours incohérent spatialement', 'is_correct' => false],
                        ],
                        'explanation' => 'Les effets non linéaires peuvent être faibles et nécessitent souvent des intensités importantes.',
                    ],

                    [
                        'question' => 'Quel phénomène est associé à une dépendance de l’indice de réfraction avec l’intensité ?',
                        'choices' => [
                            ['choice_text' => 'L’effet Kerr optique', 'is_correct' => true],
                            ['choice_text' => 'La loi de Snell uniquement', 'is_correct' => false],
                            ['choice_text' => 'La réflexion métallique', 'is_correct' => false],
                            ['choice_text' => 'L’effet Doppler mécanique', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans certains milieux, n = n0 + n2I dans l’approximation de Kerr.',
                    ],

                    [
                        'question' => 'Pourquoi l’auto-modulation de phase peut-elle élargir le spectre d’une impulsion laser ?',
                        'choices' => [
                            ['choice_text' => Une variation temporelle d’indice induit une variation temporelle de phase', 'is_correct' => true],
                            ['choice_text' => 'La fréquence centrale est nécessairement détruite', 'is_correct' => false],
                            ['choice_text' => 'La diffraction devient nulle', 'is_correct' => false],
                            ['choice_text' => 'La puissance est convertie entièrement en chaleur', 'is_correct' => false],
                        ],
                        'explanation' => 'Une phase non linéaire dépendant de l’intensité crée de nouvelles composantes fréquentielles.',
                    ],

                    [
                        'question' => 'Pourquoi la conversion non linéaire efficace nécessite-t-elle souvent une condition de synchronisme de phase ?',
                        'choices' => [
                            ['choice_text' => 'Les contributions générées doivent rester constructivement cohérentes sur la longueur d’interaction', 'is_correct' => true],
                            ['choice_text' => 'Le matériau doit être parfaitement absorbant', 'is_correct' => false],
                            ['choice_text' => 'La fréquence du laser doit être nulle', 'is_correct' => false],
                            ['choice_text' => 'Le champ généré doit toujours être opposé au champ incident', 'is_correct' => false],
                        ],
                        'explanation' => 'Sans accord de phase adéquat, les contributions générées peuvent s’annuler progressivement.',
                    ],

                    [
                        'question' => 'Pourquoi l’accord de phase peut-il être obtenu par biréfringence dans certains cristaux ?',
                        'choices' => [
                            ['choice_text' => 'Les indices dépendant de la polarisation peuvent être choisis pour compenser le désaccord de phase', 'is_correct' => true],
                            ['choice_text' => 'La biréfringence supprime toutes les fréquences', 'is_correct' => false],
                            ['choice_text' => 'Tous les indices deviennent égaux', 'is_correct' => false],
                            ['choice_text' => 'La propagation cesse d’être dispersive', 'is_correct' => false],
                        ],
                        'explanation' => 'La biréfringence permet de contrôler les indices effectifs vus par différentes composantes polarisées.',
                    ],

                    [
                        'question' => 'Pourquoi la longueur d’interaction influence-t-elle la conversion dans un processus non linéaire ?',
                        'choices' => [
                            ['choice_text' => Une interaction cohérente plus longue peut accumuler davantage de signal généré lorsque le synchronisme est satisfait', 'is_correct' => true],
                            ['choice_text' => 'La conversion est toujours indépendante de la longueur', 'is_correct' => false],
                            ['choice_text' => 'Une grande longueur réduit toujours le champ généré', 'is_correct' => false],
                            ['choice_text' => 'La longueur n’a aucune dimension physique', 'is_correct' => false],
                        ],
                        'explanation' => 'Sous accord de phase, l’amplitude générée peut croître fortement avec la longueur d’interaction dans le régime approprié.',
                    ],

                    [
                        'question' => 'Pourquoi l’optique non linéaire est-elle importante pour certaines sources laser et télécommunications avancées ?',
                        'choices' => [
                            ['choice_text' => 'Elle permet conversion de fréquence, modulation de phase et génération de nouvelles composantes spectrales', 'is_correct' => true],
                            ['choice_text' => 'Elle interdit toute propagation de lumière', 'is_correct' => false],
                            ['choice_text' => 'Elle rend tous les matériaux parfaitement transparents', 'is_correct' => false],
                            ['choice_text' => 'Elle élimine toute dispersion', 'is_correct' => false],
                        ],
                        'explanation' => 'Les effets non linéaires sont exploités dans les lasers, convertisseurs de fréquence et systèmes de communication optique.',
                    ],
                ],
            ],

            // ============================================================
            // QUIZ 6 — Polarisation, anisotropie et cristaux
            // ============================================================

            [
                'title' => 'Polarisation et milieux anisotropes',
                'description' => 'Étude professionnelle de la polarisation, biréfringence et propagation dans les matériaux anisotropes.',
                'questions' => [

                    [
                        'question' => 'Dans un matériau biréfringent, pourquoi deux composantes polarisées différemment peuvent-elles accumuler des phases différentes ?',
                        'choices' => [
                            ['choice_text' => Elles peuvent voir des indices de réfraction effectifs différents', 'is_correct' => true],
                            ['choice_text' => 'Elles possèdent nécessairement des fréquences différentes', 'is_correct' => false],
                            ['choice_text' => 'La constante de Planck dépend de la polarisation', 'is_correct' => false],
                            ['choice_text' => 'Les deux composantes ne peuvent jamais se propager ensemble', 'is_correct' => false],
                        ],
                        'explanation' => 'L’anisotropie du matériau crée des indices différents selon l’état de polarisation.',
                    ],

                    [
                        'question' => 'Quelle est la fonction principale d’une lame demi-onde ?',
                        'choices' => [
                            ['choice_text' => 'Introduire un retard de phase de π entre deux composantes orthogonales', 'is_correct' => true],
                            ['choice_text' => 'Introduire toujours un retard de π/2', 'is_correct' => false],
                            ['choice_text' => 'Doubler la fréquence lumineuse', 'is_correct' => false],
                            ['choice_text' => 'Supprimer totalement la polarisation', 'is_correct' => false],
                        ],
                        'explanation' => 'Une lame demi-onde introduit un déphasage de π entre ses axes propres.',
                    ],

                    [
                        'question' => 'Quelle est la fonction principale d’une lame quart d’onde ?',
                        'choices' => [
                            ['choice_text' => 'Introduire un retard de phase de π/2 entre deux composantes orthogonales', 'is_correct' => true],
                            ['choice_text' => 'Introduire un retard de 2π', 'is_correct' => false],
                            ['choice_text' => 'Doubler l’intensité', 'is_correct' => false],
                            ['choice_text' => 'Changer la fréquence dans le vide', 'is_correct' => false],
                        ],
                        'explanation' => 'Une lame quart d’onde crée un déphasage de π/2 entre ses axes propres.',
                    ],

                    [
                        'question' => 'Dans quelles conditions une lame quart d’onde peut-elle convertir une polarisation linéaire en polarisation circulaire ?',
                        'choices' => [
                            ['choice_text' => Lorsque les composantes sur les deux axes propres ont des amplitudes égales et acquièrent un déphasage de π/2', 'is_correct' => true],
                            ['choice_text' => 'Lorsque les composantes ont des amplitudes nulles', 'is_correct' => false],
                            ['choice_text' => 'Lorsque le retard est π', 'is_correct' => false],
                            ['choice_text' => 'Uniquement lorsque la lumière est incohérente', 'is_correct' => false],
                        ],
                        'explanation' => 'Deux composantes orthogonales de même amplitude et en quadrature produisent une polarisation circulaire.',
                    ],

                    [
                        'question' => 'Pourquoi une polarisation elliptique constitue-t-elle le cas général d’une superposition de deux composantes orthogonales cohérentes ?',
                        'choices' => [
                            ['choice_text' => Les amplitudes et le déphasage relatifs peuvent être arbitraires', 'is_correct' => true],
                            ['choice_text' => 'Une polarisation elliptique exige toujours des amplitudes identiques', 'is_correct' => false],
                            ['choice_text' => 'La polarisation elliptique n’est pas liée à la phase', 'is_correct' => false],
                            ['choice_text' => 'Elle n’existe que pour les ondes mécaniques', 'is_correct' => false],
                        ],
                        'explanation' => 'L’état elliptique apparaît naturellement lorsque les composantes orthogonales ont une relation d’amplitude et de phase générale.',
                    ],

                    [
                        'question' => 'Pourquoi l’orientation d’une lame demi-onde modifie-t-elle la direction d’une polarisation linéaire ?',
                        'choices' => [
                            ['choice_text' => La relation de phase entre les axes propres transforme l’orientation de la composante globale', 'is_correct' => true],
                            ['choice_text' => 'La lame modifie nécessairement la fréquence', 'is_correct' => false],
                            ['choice_text' => 'La lumière devient automatiquement circulaire', 'is_correct' => false],
                            ['choice_text' => 'L’axe optique n’a aucun rôle', 'is_correct' => false],
                        ],
                        'explanation' => 'Une lame demi-onde peut faire tourner l’état de polarisation selon son orientation par rapport au champ incident.',
                    ],

                    [
                        'question' => 'Pourquoi l’anisotropie doit-elle être prise en compte dans l’analyse d’un cristal optique ?',
                        'choices' => [
                            ['choice_text' => 'La propagation peut dépendre de la direction et de la polarisation', 'is_correct' => true],
                            ['choice_text' => 'Un cristal est toujours optiquement isotrope', 'is_correct' => false],
                            ['choice_text' => 'La polarisation n’existe jamais dans les cristaux', 'is_correct' => false],
                            ['choice_text' => 'L’indice devient nécessairement nul', 'is_correct' => false],
                        ],
                        'explanation' => 'L’anisotropie peut rendre l’indice tensoriel et produire des modes propres distincts.',
                    ],

                    [
                        'question' => 'Pourquoi la polarisation peut-elle être utilisée pour révéler des contraintes mécaniques dans certains matériaux transparents ?',
                        'choices' => [
                            ['choice_text' => Les contraintes peuvent induire une biréfringence photoélastique', 'is_correct' => true],
                            ['choice_text' => 'Les contraintes modifient toujours la fréquence du vide', 'is_correct' => false],
                            ['choice_text' => 'La lumière devient mécanique dans le matériau', 'is_correct' => false],
                            ['choice_text' => 'La polarisation ne dépend jamais des propriétés mécaniques', 'is_correct' => false],
                        ],
                        'explanation' => 'La photoélasticité relie contraintes mécaniques et variations d’anisotropie optique.',
                    ],

                    [
                        'question' => 'Pourquoi les mesures de polarisation exigent-elles généralement une bonne connaissance des axes optiques du système ?',
                        'choices' => [
                            ['choice_text' => 'Les rotations d’axes et les retards de phase déterminent directement l’état de polarisation mesuré', 'is_correct' => true],
                            ['choice_text' => 'Les axes n’ont aucune influence sur le signal', 'is_correct' => false],
                            ['choice_text' => 'La polarisation est indépendante de toute orientation', 'is_correct' => false],
                            ['choice_text' => 'Les cristaux sont nécessairement isotropes', 'is_correct' => false],
                        ],
                        'explanation' => 'Une mauvaise connaissance des axes propres peut conduire à une interprétation erronée de l’état de polarisation.',
                    ],

                    [
                        'question' => 'Pourquoi les éléments polarisants sont-ils importants dans les systèmes d’imagerie avancée ?',
                        'choices' => [
                            ['choice_text' => Ils peuvent contrôler contraste, orientation, réflexions parasites et informations liées aux propriétés anisotropes', 'is_correct' => true],
                            ['choice_text' => 'Ils empêchent toute lumière d’atteindre le détecteur', 'is_correct' => false],
                            ['choice_text' => 'Ils sont uniquement décoratifs', 'is_correct' => false],
                            ['choice_text' => 'Ils rendent les matériaux automatiquement transparents', 'is_correct' => false],
                        ],
                        'explanation' => 'La polarimétrie trouve des applications en imagerie, métrologie et caractérisation des matériaux.',
                    ],
                ],
            ],

            // ============================================================
            // QUIZ 7 — Spectroscopie et interactions lumière-matière
            // ============================================================

            [
                'title' => 'Spectroscopie et interactions lumière-matière',
                'description' => 'Analyse professionnelle des mécanismes spectraux, absorption, émission et diffusion.',
                'questions' => [

                    [
                        'question' => 'Quelle relation fondamentale relie l’énergie d’un photon à sa fréquence ?',
                        'choices' => [
                            ['choice_text' => 'E = hf', 'is_correct' => true],
                            ['choice_text' => 'E = h/f', 'is_correct' => false],
                            ['choice_text' => 'E = f/h', 'is_correct' => false],
                            ['choice_text' => 'E = hf²', 'is_correct' => false],
                        ],
                        'explanation' => 'L’énergie d’un photon est proportionnelle à sa fréquence via la constante de Planck.',
                    ],

                    [
                        'question' => 'Comment relier l’énergie d’un photon à sa longueur d’onde dans le vide ?',
                        'choices' => [
                            ['choice_text' => 'E = hc/λ', 'is_correct' => true],
                            ['choice_text' => 'E = hλ/c', 'is_correct' => false],
                            ['choice_text' => 'E = λ/hc', 'is_correct' => false],
                            ['choice_text' => 'E = hcλ', 'is_correct' => false],
                        ],
                        'explanation' => 'En utilisant f = c/λ dans E = hf, on obtient E = hc/λ.',
                    ],

                    [
                        'question' => 'Pourquoi une raie spectrale d’émission est-elle associée à une transition énergétique quantifiée ?',
                        'choices' => [
                            ['choice_text' => 'La différence entre deux états d’énergie correspond à une fréquence photonique précise', 'is_correct' => true],
                            ['choice_text' => 'La lumière possède une masse différente pour chaque raie', 'is_correct' => false],
                            ['choice_text' => 'Toutes les transitions sont continues en énergie', 'is_correct' => false],
                            ['choice_text' => 'La fréquence est déterminée uniquement par la température', 'is_correct' => false],
                        ],
                        'explanation' => 'Une transition entre états quantifiés émet ou absorbe un photon d’énergie ΔE = hf.',
                    ],

                    [
                        'question' => 'Pourquoi l’élargissement Doppler des raies spectrales est-il lié à la température d’un gaz ?',
                        'choices' => [
                            ['choice_text' => Les vitesses thermiques des particules produisent une distribution de décalages fréquentiels', 'is_correct' => true],
                            ['choice_text' => 'La température change la constante de Planck', 'is_correct' => false],
                            ['choice_text' => 'La température supprime toutes les transitions', 'is_correct' => false],
                            ['choice_text' => 'Le Doppler n’a aucune relation avec le mouvement des émetteurs', 'is_correct' => false],
                        ],
                        'explanation' => 'La distribution des vitesses selon la ligne de visée élargit statistiquement les fréquences observées.',
                    ],

                    [
                        'question' => 'Pourquoi un décalage spectral vers le rouge peut-il fournir une information sur la vitesse radiale d’une source astronomique ?',
                        'choices' => [
                            ['choice_text' => Le mouvement relatif modifie les fréquences observées par effet Doppler', 'is_correct' => true],
                            ['choice_text' => 'La masse de l’étoile change la fréquence du photon', 'is_correct' => false],
                            ['choice_text' => 'La longueur d’onde n’a aucun lien avec la vitesse radiale', 'is_correct' => false],
                            ['choice_text' => 'Le redshift ne peut avoir qu’une origine thermique', 'is_correct' => false],
                        ],
                        'explanation' => 'L’effet Doppler permet d’inférer une composante de vitesse le long de la ligne de visée.',
                    ],

                    [
                        'question' => 'Pourquoi l’absorption sélective d’un matériau dépend-elle de la longueur d’onde ?',
                        'choices' => [
                            ['choice_text' => Les transitions et mécanismes de couplage sont sélectifs en énergie', 'is_correct' => true],
                            ['choice_text' => 'Tous les matériaux absorbent toutes les longueurs d’onde de manière identique', 'is_correct' => false],
                            ['choice_text' => 'La lumière visible n’a aucune énergie quantifiée', 'is_correct' => false],
                            ['choice_text' => 'L’absorption dépend uniquement de la masse totale', 'is_correct' => false],
                        ],
                        'explanation' => 'Les structures électroniques, vibrationnelles et rotationnelles introduisent des dépendances spectrales.',
                    ],

                    [
                        'question' => 'Quelle loi décrit l’atténuation exponentielle d’un faisceau monochromatique traversant un milieu absorbant homogène ?',
                        'choices' => [
                            ['choice_text' => 'I = I0e^{-αL}', 'is_correct' => true],
                            ['choice_text' => 'I = I0 + αL', 'is_correct' => false],
                            ['choice_text' => 'I = I0α/L', 'is_correct' => false],
                            ['choice_text' => 'I = I0L²', 'is_correct' => false],
                        ],
                        'explanation' => 'L’atténuation selon Beer-Lambert prend une forme exponentielle dans le modèle simple.',
                    ],

                    [
                        'question' => 'Pourquoi la spectroscopie Raman est-elle différente de l’absorption infrarouge classique ?',
                        'choices' => [
                            ['choice_text' => 'Elle repose sur une diffusion inélastique avec échange d’énergie entre lumière et vibrations', 'is_correct' => true],
                            ['choice_text' => 'Elle mesure uniquement la réflexion spéculaire', 'is_correct' => false],
                            ['choice_text' => 'Elle n’implique aucun échange énergétique', 'is_correct' => false],
                            ['choice_text' => 'Elle est identique à la fluorescence dans tous les cas', 'is_correct' => false],
                        ],
                        'explanation' => 'Le Raman met en évidence des décalages de fréquence liés à des excitations vibrationnelles ou rotationnelles.',
                    ],

                    [
                        'question' => 'Pourquoi la fluorescence se produit-elle généralement à une longueur d’onde plus grande que l’excitation ?',
                        'choices' => [
                            ['choice_text' => Une partie de l’énergie absorbée est dissipée avant la réémission radiative', 'is_correct' => true],
                            ['choice_text' => 'La fréquence est toujours doublée par émission', 'is_correct' => false],
                            ['choice_text' => 'L’énergie du photon est conservée exactement dans toutes les transitions internes', 'is_correct' => false],
                            ['choice_text' => 'La matière crée de l’énergie supplémentaire', 'is_correct' => false],
                        ],
                        'explanation' => 'Les relaxations non radiatives réduisent souvent l’énergie disponible pour le photon réémis.',
                    ],

                    [
                        'question' => 'Pourquoi la spectroscopie est-elle particulièrement puissante pour caractériser un matériau sans l’endommager ?',
                        'choices' => [
                            ['choice_text' => Les signatures spectrales peuvent révéler composition, structure et interactions sans prélèvement destructif dans de nombreux cas', 'is_correct' => true],
                            ['choice_text' => 'Toute spectroscopie nécessite la destruction de l’échantillon', 'is_correct' => false],
                            ['choice_text' => 'Le spectre ne contient aucune information matérielle', 'is_correct' => false],
                            ['choice_text' => 'Les photons ne peuvent pas interagir avec la matière', 'is_correct' => false],
                        ],
                        'explanation' => 'De nombreuses techniques spectroscopiques sont non destructives ou faiblement invasives.',
                    ],
                ],
            ],

            // ============================================================
            // QUIZ 8 — Conception optique et analyse système
            // ============================================================

            [
                'title' => 'Conception optique et analyse système',
                'description' => 'Évaluation professionnelle des systèmes optiques, compromis de conception, métrologie et validation.',
                'questions' => [

                    [
                        'question' => 'Pourquoi la conception d’un système optique professionnel doit-elle optimiser simultanément résolution, transmission, champ et aberrations ?',
                        'choices' => [
                            ['choice_text' => 'Ces performances sont souvent couplées et peuvent imposer des compromis', 'is_correct' => true],
                            ['choice_text' => 'Elles sont toujours totalement indépendantes', 'is_correct' => false],
                            ['choice_text' => 'La résolution dépend uniquement du matériau', 'is_correct' => false],
                            ['choice_text' => 'Le champ n’a jamais d’effet sur les aberrations', 'is_correct' => false],
                        ],
                        'explanation' => 'Une bonne conception optique est multidimensionnelle et doit équilibrer plusieurs objectifs souvent contradictoires.',
                    ],

                    [
                        'question' => 'Pourquoi l’évaluation d’un objectif ne doit-elle pas se limiter à sa distance focale ?',
                        'choices' => [
                            ['choice_text' => 'La qualité dépend également de l’ouverture, des aberrations, de la MTF, du champ et de la transmission', 'is_correct' => true],
                            ['choice_text' => 'La distance focale suffit toujours à caractériser la performance', 'is_correct' => false],
                            ['choice_text' => 'Les aberrations n’existent pas dans les systèmes réels', 'is_correct' => false],
                            ['choice_text' => 'La transmission est toujours de 100 %', 'is_correct' => false],
                        ],
                        'explanation' => 'La performance globale d’un système d’imagerie ne peut pas être résumée par une seule grandeur géométrique.',
                    ],

                    [
                        'question' => 'Pourquoi la PSF d’un système réel peut-elle être asymétrique ?',
                        'choices' => [
                            ['choice_text' => Certaines aberrations ou défauts d’alignement rompent la symétrie idéale', 'is_correct' => true],
                            ['choice_text' => 'La diffraction produit toujours une PSF parfaitement uniforme', 'is_correct' => false],
                            ['choice_text' => 'L’asymétrie est impossible dans un système optique', 'is_correct' => false],
                            ['choice_text' => 'La longueur d’onde impose toujours une PSF rectangulaire', 'is_correct' => false],
                        ],
                        'explanation' => 'Coma, astigmatisme, désalignement et autres défauts peuvent rendre la PSF asymétrique.',
                    ],

                    [
                        'question' => 'Pourquoi l’alignement mécanique est-il critique dans un système interférométrique ou imageant de haute précision ?',
                        'choices' => [
                            ['choice_text' => De petits désalignements peuvent introduire des variations de phase et des aberrations significatives', 'is_correct' => true],
                            ['choice_text' => 'L’alignement ne modifie jamais le trajet optique', 'is_correct' => false],
                            ['choice_text' => 'La lumière se réoriente automatiquement sans aucune conséquence', 'is_correct' => false],
                            ['choice_text' => 'Les optiques restent toujours parfaites malgré les vibrations', 'is_correct' => false],
                        ],
                        'explanation' => 'À haute précision, les erreurs angulaires et positionnelles peuvent devenir comparables aux tolérances optiques.',
                    ],

                    [
                        'question' => 'Pourquoi la température doit-elle être contrôlée dans une métrologie optique de haute précision ?',
                        'choices' => [
                            ['choice_text' => 'La dilatation mécanique et la variation des indices peuvent modifier les chemins optiques', 'is_correct' => true],
                            ['choice_text' => 'La température change la constante de Planck', 'is_correct' => false],
                            ['choice_text' => 'La température n’a aucun effet sur les dimensions physiques', 'is_correct' => false],
                            ['choice_text' => 'Le contrôle thermique est uniquement nécessaire pour les lasers infrarouges', 'is_correct' => false],
                        ],
                        'explanation' => 'La stabilité thermique influence dimensions, indices de réfraction et donc la mesure.',
                    ],

                    [
                        'question' => 'Pourquoi la validation d’un modèle optique numérique doit-elle inclure des mesures expérimentales ?',
                        'choices' => [
                            ['choice_text' => 'Les modèles peuvent négliger dispersion, rugosité, défauts d’alignement ou phénomènes de diffusion', 'is_correct' => true],
                            ['choice_text' => 'Les simulations sont toujours parfaitement exactes', 'is_correct' => false],
                            ['choice_text' => 'Les mesures expérimentales ne peuvent pas caractériser un système optique', 'is_correct' => false],
                            ['choice_text' => 'Une validation n’est nécessaire que pour les systèmes mécaniques', 'is_correct' => false],
                        ],
                        'explanation' => 'La comparaison modèle-expérience permet d’identifier les écarts et de vérifier le domaine de validité des hypothèses.',
                    ],

                    [
                        'question' => 'Pourquoi l’incertitude de mesure doit-elle être propagée jusqu’à la grandeur finale dans un instrument optique ?',
                        'choices' => [
                            ['choice_text' => 'Une petite incertitude sur plusieurs paramètres peut se combiner et dominer le résultat final', 'is_correct' => true],
                            ['choice_text' => 'Les incertitudes s’annulent toujours', 'is_correct' => false],
                            ['choice_text' => 'Une seule grandeur expérimentale possède nécessairement une incertitude nulle', 'is_correct' => false],
                            ['choice_text' => 'La propagation des incertitudes ne concerne que la mécanique', 'is_correct' => false],
                        ],
                        'explanation' => 'L’analyse d’incertitude permet d’identifier les contributions dominantes et d’associer une fiabilité quantitative au résultat.',
                    ],

                    [
                        'question' => 'Pourquoi les systèmes optiques haute performance utilisent-ils souvent des éléments asphériques ?',
                        'choices' => [
                            ['choice_text' => 'Ils permettent de contrôler plus finement les aberrations avec une géométrie de surface non sphérique', 'is_correct' => true],
                            ['choice_text' => 'Ils suppriment toute diffraction', 'is_correct' => false],
                            ['choice_text' => 'Ils imposent une focale nulle', 'is_correct' => false],
                            ['choice_text' => 'Ils sont toujours moins sensibles aux défauts de fabrication', 'is_correct' => false],
                        ],
                        'explanation' => 'Les surfaces asphériques offrent des degrés de liberté supplémentaires pour corriger les aberrations.',
                    ],

                    [
                        'question' => 'Pourquoi le choix de longueur d’onde est-il un paramètre de conception majeur dans un système optique professionnel ?',
                        'choices' => [
                            ['choice_text' => Il influence diffraction, dispersion, absorption, sensibilité des détecteurs et interactions avec les matériaux', 'is_correct' => true],
                            ['choice_text' => 'La longueur d’onde n’influence que la couleur perçue', 'is_correct' => false],
                            ['choice_text' => 'Toutes les optiques ont exactement le même comportement spectral', 'is_correct' => false],
                            ['choice_text' => 'La diffraction est indépendante de λ', 'is_correct' => false],
                        ],
                        'explanation' => 'La longueur d’onde influence de nombreux aspects fondamentaux de la conception et de la performance.',
                    ],

                    [
                        'question' => 'Pourquoi une architecture optique professionnelle doit-elle être évaluée dans ses conditions d’utilisation réelles plutôt qu’uniquement avec un modèle idéal ?',
                        'choices' => [
                            ['choice_text' => 'Les performances dépendent de l’environnement, de la tolérance, des détecteurs, des matériaux et du traitement des signaux', 'is_correct' => true],
                            ['choice_text' => 'Un modèle idéal suffit toujours pour prédire le système réel', 'is_correct' => false],
                            ['choice_text' => 'Les vibrations et variations thermiques n’ont aucun effet', 'is_correct' => false],
                            ['choice_text' => 'Les détecteurs sont indépendants de la longueur d’onde', 'is_correct' => false],
                        ],
                        'explanation' => 'La performance système est déterminée par l’ensemble de la chaîne, pas uniquement par l’optique théorique.',
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

                // Randomisation pour éviter une position prévisible
                // de la bonne réponse.
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