<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class ElectromagnetismIntermediateSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'electromagnetism')->firstOrFail();

        $quizzes = [

            // ============================================================
            // QUIZ 1 — Électrostatique et loi de Coulomb
            // ============================================================

            [
                'title' => 'Électrostatique et loi de Coulomb',
                'description' => 'Analyse intermédiaire des interactions électrostatiques, de la loi de Coulomb et du principe de superposition.',
                'questions' => [

                    [
                        'question' => 'Deux charges ponctuelles q1 = 2 μC et q2 = 3 μC sont séparées de 0,5 m dans le vide. Quelle est approximativement la norme de la force électrostatique ?',
                        'choices' => [
                            ['choice_text' => '0,216 N', 'is_correct' => true],
                            ['choice_text' => '2,16 N', 'is_correct' => false],
                            ['choice_text' => '0,0216 N', 'is_correct' => false],
                            ['choice_text' => '21,6 N', 'is_correct' => false],
                        ],
                        'explanation' => 'F = k|q1q2|/r² = 9×10^9 × (2×10^-6)(3×10^-6)/(0,5²) ≈ 0,216 N.',
                    ],

                    [
                        'question' => 'Si la distance entre deux charges ponctuelles est multipliée par 3, la force électrostatique est...',
                        'choices' => [
                            ['choice_text' => 'Divisée par 9', 'is_correct' => true],
                            ['choice_text' => 'Divisée par 3', 'is_correct' => false],
                            ['choice_text' => 'Multipliée par 3', 'is_correct' => false],
                            ['choice_text' => 'Multipliée par 9', 'is_correct' => false],
                        ],
                        'explanation' => 'La loi de Coulomb donne F ∝ 1/r².',
                    ],

                    [
                        'question' => 'Deux charges de même signe sont placées sur un axe. Quelle est la direction de la force exercée par la première sur la seconde ?',
                        'choices' => [
                            ['choice_text' => 'Elle est dirigée à l’opposé de la première charge', 'is_correct' => true],
                            ['choice_text' => 'Elle est dirigée vers la première charge', 'is_correct' => false],
                            ['choice_text' => 'Elle est perpendiculaire à la ligne joignant les charges', 'is_correct' => false],
                            ['choice_text' => 'Elle est toujours nulle', 'is_correct' => false],
                        ],
                        'explanation' => 'Deux charges de même signe se repoussent selon la droite qui les relie.',
                    ],

                    [
                        'question' => 'Une charge q = 4 μC est placée dans un champ électrique uniforme de 2000 N/C. Quelle est la norme de la force électrique ?',
                        'choices' => [
                            ['choice_text' => '8 × 10^-3 N', 'is_correct' => true],
                            ['choice_text' => '8 × 10^-6 N', 'is_correct' => false],
                            ['choice_text' => '5 × 10^8 N', 'is_correct' => false],
                            ['choice_text' => '500 N', 'is_correct' => false],
                        ],
                        'explanation' => 'F = qE = 4×10^-6 × 2000 = 8×10^-3 N.',
                    ],

                    [
                        'question' => 'Pourquoi le champ électrique résultant de plusieurs charges est-il obtenu par une somme vectorielle ?',
                        'choices' => [
                            ['choice_text' => 'Parce que le principe de superposition s’applique aux champs électriques', 'is_correct' => true],
                            ['choice_text' => 'Parce que les champs sont des scalaires', 'is_correct' => false],
                            ['choice_text' => 'Parce que les charges s’annulent toujours deux à deux', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’un seul champ peut exister dans un espace', 'is_correct' => false],
                        ],
                        'explanation' => 'Le champ total est la somme vectorielle des champs créés individuellement par chaque charge.',
                    ],

                    [
                        'question' => 'Deux charges identiques et positives sont placées symétriquement de part et d’autre de l’origine. Au point milieu, le champ électrique résultant est...',
                        'choices' => [
                            ['choice_text' => 'Nul', 'is_correct' => true],
                            ['choice_text' => 'Maximum', 'is_correct' => false],
                            ['choice_text' => 'Dirigé vers la charge de droite', 'is_correct' => false],
                            ['choice_text' => 'Dirigé vers la charge de gauche', 'is_correct' => false],
                        ],
                        'explanation' => 'Les deux champs ont même norme et des directions opposées au point milieu.',
                    ],

                    [
                        'question' => 'Quel est le champ électrique créé par une charge ponctuelle q à une distance r dans le vide ?',
                        'choices' => [
                            ['choice_text' => 'E = k|q|/r²', 'is_correct' => true],
                            ['choice_text' => 'E = k|q|r²', 'is_correct' => false],
                            ['choice_text' => 'E = k/rq', 'is_correct' => false],
                            ['choice_text' => 'E = qr²/k', 'is_correct' => false],
                        ],
                        'explanation' => 'La norme du champ d’une charge ponctuelle vaut E = k|q|/r².',
                    ],

                    [
                        'question' => 'Une charge test positive est déplacée dans la direction opposée à un champ électrique uniforme. Son énergie potentielle électrique...',
                        'choices' => [
                            ['choice_text' => 'Augmente', 'is_correct' => true],
                            ['choice_text' => 'Diminue', 'is_correct' => false],
                            ['choice_text' => 'Reste toujours constante', 'is_correct' => false],
                            ['choice_text' => 'Devient nécessairement nulle', 'is_correct' => false],
                        ],
                        'explanation' => 'Le potentiel augmente dans la direction opposée au champ. Pour q > 0, U = qV augmente.',
                    ],

                    [
                        'question' => 'Pourquoi le principe de superposition permet-il de traiter un système contenant de nombreuses charges ?',
                        'choices' => [
                            ['choice_text' => 'Chaque contribution peut être calculée séparément puis additionnée vectoriellement', 'is_correct' => true],
                            ['choice_text' => 'Toutes les charges produisent exactement le même champ', 'is_correct' => false],
                            ['choice_text' => 'Les interactions cessent entre charges multiples', 'is_correct' => false],
                            ['choice_text' => 'La loi de Coulomb ne s’applique qu’à une seule charge', 'is_correct' => false],
                        ],
                        'explanation' => 'La linéarité du champ permet de sommer les contributions individuelles.',
                    ],

                    [
                        'question' => 'Si chacune de deux charges est doublée, avec une distance inchangée, la force électrostatique est...',
                        'choices' => [
                            ['choice_text' => 'Multipliée par 4', 'is_correct' => true],
                            ['choice_text' => 'Multipliée par 2', 'is_correct' => false],
                            ['choice_text' => 'Divisée par 2', 'is_correct' => false],
                            ['choice_text' => 'Inchangée', 'is_correct' => false],
                        ],
                        'explanation' => 'F ∝ q1q2. Doubler les deux charges multiplie leur produit par 4.',
                    ],

                ],
            ],

            // ============================================================
            // QUIZ 2 — Potentiel, énergie et condensateurs
            // ============================================================

            [
                'title' => 'Potentiel électrique et condensateurs',
                'description' => 'Étude intermédiaire du potentiel, de l’énergie électrique et des condensateurs.',
                'questions' => [

                    [
                        'question' => 'Quel est le potentiel créé par une charge ponctuelle q à une distance r dans le vide, avec V(∞) = 0 ?',
                        'choices' => [
                            ['choice_text' => 'V = kq/r', 'is_correct' => true],
                            ['choice_text' => 'V = kq/r²', 'is_correct' => false],
                            ['choice_text' => 'V = kr/q', 'is_correct' => false],
                            ['choice_text' => 'V = q/(kr)', 'is_correct' => false],
                        ],
                        'explanation' => 'Pour une charge ponctuelle, V = kq/r avec la référence nulle à l’infini.',
                    ],

                    [
                        'question' => 'Quelle relation locale relie le champ électrique au potentiel ?',
                        'choices' => [
                            ['choice_text' => 'E = -∇V', 'is_correct' => true],
                            ['choice_text' => 'E = ∇V', 'is_correct' => false],
                            ['choice_text' => 'E = V²', 'is_correct' => false],
                            ['choice_text' => 'E = 1/V', 'is_correct' => false],
                        ],
                        'explanation' => 'Le champ électrique est l’opposé du gradient du potentiel.',
                    ],

                    [
                        'question' => 'Dans un condensateur plan idéal, le champ entre les plaques est approximativement uniforme. Quelle relation donne sa norme ?',
                        'choices' => [
                            ['choice_text' => E ≈ V/d', 'is_correct' => true],
                            ['choice_text' => E ≈ Vd', 'is_correct' => false],
                            ['choice_text' => E ≈ d/V', 'is_correct' => false],
                            ['choice_text' => E ≈ V²/d', 'is_correct' => false],
                        ],
                        'explanation' => 'Pour deux plaques parallèles séparées de d, E ≈ ΔV/d en négligeant les effets de bord.',
                    ],

                    [
                        'question' => 'Quelle est l’unité SI de la capacité électrique ?',
                        'choice_text' => 'Le farad',
                    ],

                    [
                        'question' => 'Quelle relation définit la capacité d’un condensateur ?',
                        'choices' => [
                            ['choice_text' => 'C = Q/V', 'is_correct' => true],
                            ['choice_text' => 'C = V/Q', 'is_correct' => false],
                            ['choice_text' => 'C = QV', 'is_correct' => false],
                            ['choice_text' => 'C = Q + V', 'is_correct' => false],
                        ],
                        'explanation' => 'Par définition, Q = CV pour un condensateur linéaire.',
                    ],

                    [
                        'question' => 'Quelle expression donne l’énergie stockée dans un condensateur ?',
                        'choices' => [
                            ['choice_text' => U = 1/2 CV²', 'is_correct' => true],
                            ['choice_text' => 'U = CV²', 'is_correct' => false],
                            ['choice_text' => 'U = 1/2 C²V', 'is_correct' => false],
                            ['choice_text' => 'U = V²/C²', 'is_correct' => false],
                        ],
                        'explanation' => 'L’énergie électrostatique stockée vaut U = 1/2 CV² = Q²/(2C) = 1/2 QV.',
                    ],

                    [
                        'question' => 'Deux condensateurs identiques de capacité C sont montés en parallèle. La capacité équivalente vaut...',
                        'choices' => [
                            ['choice_text' => '2C', 'is_correct' => true],
                            ['choice_text' => 'C/2', 'is_correct' => false],
                            ['choice_text' => 'C', 'is_correct' => false],
                            ['choice_text' => 'C²', 'is_correct' => false],
                        ],
                        'explanation' => 'En parallèle, les capacités s’additionnent.',
                    ],

                    [
                        'question' => 'Deux condensateurs identiques de capacité C sont montés en série. La capacité équivalente vaut...',
                        'choices' => [
                            ['choice_text' => 'C/2', 'is_correct' => true],
                            ['choice_text' => '2C', 'is_correct' => false],
                            ['choice_text' => 'C', 'is_correct' => false],
                            ['choice_text' => 'C²/2', 'is_correct' => false],
                        ],
                        'explanation' => 'En série, 1/Ceq = 1/C + 1/C, donc Ceq = C/2.',
                    ],

                    [
                        'question' => 'Pourquoi le potentiel est-il souvent plus facile à additionner que le champ électrique dans un problème à plusieurs charges ?',
                        'choices' => [
                            ['choice_text' => 'Le potentiel est une grandeur scalaire', 'is_correct' => true],
                            ['choice_text' => 'Le champ électrique n’existe qu’avec une seule charge', 'is_correct' => false],
                            ['choice_text' => 'Le potentiel est toujours nul', 'is_correct' => false],
                            ['choice_text' => 'Les charges n’ont aucun effet sur le champ', 'is_correct' => false],
                        ],
                        'explanation' => 'Les potentiels scalaires s’additionnent algébriquement, contrairement aux champs qui nécessitent une somme vectorielle.',
                    ],

                    [
                        'question' => 'Lorsqu’un diélectrique est introduit entre les plaques d’un condensateur isolé, la capacité augmente généralement parce que...',
                        'choices' => [
                            ['choice_text' => La polarisation du diélectrique réduit le champ effectif et modifie la relation entre Q et V', 'is_correct' => true],
                            ['choice_text' => 'La charge libre devient toujours nulle', 'is_correct' => false],
                            ['choice_text' => 'Le vide est remplacé par un conducteur parfait', 'is_correct' => false],
                            ['choice_text' => 'La tension augmente toujours sans limite', 'is_correct' => false],
                        ],
                        'explanation' => 'Un diélectrique linéaire augmente généralement la capacité d’un facteur relatif εr.',
                    ],

                    [
                        'question' => 'Pourquoi un condensateur peut-il stocker de l’énergie sans stocker nécessairement un courant permanent ?',
                        'choices' => [
                            ['choice_text' => Il stocke de l’énergie dans son champ électrique une fois chargé', 'is_correct' => true],
                            ['choice_text' => 'Il convertit toujours l’énergie en courant continu permanent', 'is_correct' => false],
                            ['choice_text' => 'Il doit nécessairement laisser circuler un courant constant', 'is_correct' => false],
                            ['choice_text' => 'Il ne peut stocker que de la chaleur', 'is_correct' => false],
                        ],
                        'explanation' => 'Un condensateur chargé possède une énergie électrostatique même lorsque le courant devient nul.',
                    ],

                ],
            ],

            // ============================================================
            // QUIZ 3 — Courant continu et lois de Kirchhoff
            // ============================================================

            [
                'title' => 'Courant continu et lois de Kirchhoff',
                'description' => 'Analyse intermédiaire des circuits résistifs, lois de Kirchhoff et associations de résistances.',
                'questions' => [

                    [
                        'question' => 'Quelle loi exprime la conservation de la charge à un nœud électrique ?',
                        'choices' => [
                            ['choice_text' => La loi des nœuds de Kirchhoff', 'is_correct' => true],
                            ['choice_text' => 'La loi de Faraday', 'is_correct' => false],
                            ['choice_text' => 'La loi de Lenz', 'is_correct' => false],
                            ['choice_text' => 'La loi de Biot-Savart', 'is_correct' => false],
                        ],
                        'explanation' => 'La somme algébrique des courants entrant et sortant d’un nœud est nulle.',
                    ],

                    [
                        'question' => 'Quelle loi exprime la somme des variations de potentiel autour d’une maille fermée ?',
                        'choices' => [
                            ['choice_text' => La loi des mailles de Kirchhoff', 'is_correct' => true],
                            ['choice_text' => 'La loi de Coulomb', 'is_correct' => false],
                            ['choice_text' => 'La loi de Snell-Descartes', 'is_correct' => false],
                            ['choice_text' => 'La loi de Newton', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans un circuit quasi-stationnaire, la somme algébrique des différences de potentiel autour d’une maille fermée est nulle.',
                    ],

                    [
                        'question' => 'Un générateur de 12 V alimente en série deux résistances de 2 Ω et 4 Ω. Quel courant circule dans le circuit idéal ?',
                        'choices' => [
                            ['choice_text' => '2 A', 'is_correct' => true],
                            ['choice_text' => '3 A', 'is_correct' => false],
                            ['choice_text' => '6 A', 'is_correct' => false],
                            ['choice_text' => '0,5 A', 'is_correct' => false],
                        ],
                        'explanation' => 'Req = 2 + 4 = 6 Ω. Donc I = V/Req = 12/6 = 2 A.',
                    ],

                    [
                        'question' => 'Dans le circuit précédent, quelle tension est aux bornes de la résistance de 4 Ω ?',
                        'choices' => [
                            ['choice_text' => '8 V', 'is_correct' => true],
                            ['choice_text' => '4 V', 'is_correct' => false],
                            ['choice_text' => '6 V', 'is_correct' => false],
                            ['choice_text' => '12 V', 'is_correct' => false],
                        ],
                        'explanation' => 'V4Ω = IR = 2 × 4 = 8 V.',
                    ],

                    [
                        'question' => 'Deux résistances de 6 Ω et 3 Ω sont en parallèle. Quelle est leur résistance équivalente ?',
                        'choices' => [
                            ['choice_text' => '2 Ω', 'is_correct' => true],
                            ['choice_text' => '9 Ω', 'is_correct' => false],
                            ['choice_text' => '18 Ω', 'is_correct' => false],
                            ['choice_text' => '3 Ω', 'is_correct' => false],
                        ],
                        'explanation' => '1/Req = 1/6 + 1/3 = 1/2, donc Req = 2 Ω.',
                    ],

                    [
                        'question' => 'Dans un montage parallèle idéal, quelle grandeur est commune aux différentes branches reliées aux mêmes deux nœuds ?',
                        'choices' => [
                            ['choice_text' => La tension', 'is_correct' => true],
                            ['choice_text' => Le courant dans chaque branche', 'is_correct' => false],
                            ['choice_text' => La puissance dans chaque branche', 'is_correct' => false],
                            ['choice_text' => La résistance', 'is_correct' => false],
                        ],
                        'explanation' => 'Toutes les branches parallèles partagent la même différence de potentiel.',
                    ],

                    [
                        'question' => 'Un nœud reçoit 5 A et deux courants de 2 A et 3 A en sortent. La loi des nœuds est-elle satisfaite ?',
                        'choices' => [
                            ['choice_text' => 'Oui, car 5 = 2 + 3', 'is_correct' => true],
                            ['choice_text' => 'Non, car 5 ≠ 2 + 3', 'is_correct' => false],
                            ['choice_text' => 'Oui, uniquement si les résistances sont égales', 'is_correct' => false],
                            ['choice_text' => 'Non, car un nœud ne peut recevoir qu’un courant', 'is_correct' => false],
                        ],
                        'explanation' => 'La conservation de la charge exige que le courant entrant égale le courant sortant.',
                    ],

                    [
                        'question' => 'Pourquoi la loi des mailles est-elle directement liée à la conservation de l’énergie dans un circuit ?',
                        'choices' => [
                            ['choice_text' => 'Elle impose que le bilan énergétique associé aux différences de potentiel sur une boucle soit cohérent', 'is_correct' => true],
                            ['choice_text' => 'Elle impose que tous les courants soient nuls', 'is_correct' => false],
                            ['choice_text' => 'Elle remplace la loi d’Ohm', 'is_correct' => false],
                            ['choice_text' => 'Elle dépend uniquement de la masse des électrons', 'is_correct' => false],
                        ],
                        'explanation' => 'La loi des mailles exprime, dans le cadre approprié, la conservation de l’énergie électrique.',
                    ],

                    [
                        'question' => 'Pourquoi la méthode nodale est-elle particulièrement efficace pour les réseaux électriques complexes ?',
                        'choices' => [
                            ['choice_text' => 'Elle réduit l’analyse à des équations portant sur les potentiels des nœuds', 'is_correct' => true],
                            ['choice_text' => 'Elle supprime toutes les résistances', 'is_correct' => false],
                            ['choice_text' => 'Elle ne nécessite aucune relation courant-tension', 'is_correct' => false],
                            ['choice_text' => 'Elle ne fonctionne que sur un seul composant', 'is_correct' => false],
                        ],
                        'explanation' => 'L’analyse nodale utilise les tensions nodales et les lois de Kirchhoff pour construire un système d’équations.',
                    ],

                    [
                        'question' => 'Pourquoi une source idéale de tension impose-t-elle une tension définie indépendamment du courant dans le modèle idéal ?',
                        'choices' => [
                            ['choice_text' => Sa tension est imposée par le modèle de source, tandis que le courant dépend du circuit connecté', 'is_correct' => true],
                            ['choice_text' => 'Le courant est toujours nul', 'is_correct' => false],
                            ['choice_text' => 'La tension dépend uniquement de la résistance interne du fil', 'is_correct' => false],
                            ['choice_text' => 'La source ne peut alimenter aucun circuit', 'is_correct' => false],
                        ],
                        'explanation' => 'Une source idéale de tension maintient sa différence de potentiel imposée, et le circuit détermine le courant.',
                    ],

                ],
            ],

            // ============================================================
            // QUIZ 4 — Champ magnétique et forces magnétiques
            // ============================================================

            [
                'title' => 'Champ magnétique et forces de Lorentz',
                'description' => 'Étude intermédiaire des champs magnétiques, forces de Lorentz et trajectoires chargées.',
                'questions' => [

                    [
                        'question' => 'Quelle expression vectorielle donne la force magnétique sur une charge q en mouvement ?',
                        'choices' => [
                            ['choice_text' => 'F = q(v × B)', 'is_correct' => true],
                            ['choice_text' => 'F = q(v · B)', 'is_correct' => false],
                            ['choice_text' => 'F = qB/v', 'is_correct' => false],
                            ['choice_text' => 'F = q(v + B)', 'is_correct' => false],
                        ],
                        'explanation' => 'La composante magnétique de la force de Lorentz est F = q v × B.',
                    ],

                    [
                        'question' => 'Une charge positive entre perpendiculairement dans un champ magnétique uniforme. Quel type de mouvement peut-elle effectuer ?',
                        'choices' => [
                            ['choice_text' => Un mouvement circulaire uniforme', 'is_correct' => true],
                            ['choice_text' => 'Un mouvement rectiligne uniformément accéléré parallèle au champ', 'is_correct' => false],
                            ['choice_text' => 'Un mouvement immobile', 'is_correct' => false],
                            ['choice_text' => 'Un mouvement radial vers le centre du champ', 'is_correct' => false],
                        ],
                        'explanation' => 'La force magnétique est perpendiculaire à la vitesse et fournit l’accélération centripète.',
                    ],

                    [
                        'question' => 'Quelle est la norme de la force magnétique lorsqu’une charge se déplace perpendiculairement à B ?',
                        'choices' => [
                            ['choice_text' => 'F = |q|vB', 'is_correct' => true],
                            ['choice_text' => 'F = |q|v/B', 'is_correct' => false],
                            ['choice_text' => 'F = |q|B/v', 'is_correct' => false],
                            ['choice_text' => 'F = |q| + v + B', 'is_correct' => false],
                        ],
                        'explanation' => 'Pour θ = 90°, sinθ = 1 dans F = |q|vB sinθ.',
                    ],

                    [
                        'question' => 'Dans un champ magnétique uniforme, une charge dont la vitesse est parallèle au champ subit une force magnétique...',
                        'choices' => [
                            ['choice_text' => 'Nulle', 'is_correct' => true],
                            ['choice_text' => 'Maximale', 'is_correct' => false],
                            ['choice_text' => 'Proportionnelle à v²', 'is_correct' => false],
                            ['choice_text' => 'Toujours dirigée selon B', 'is_correct' => false],
                        ],
                        'explanation' => 'Avec v parallèle à B, le produit vectoriel est nul.',
                    ],

                    [
                        'question' => 'Pourquoi la force magnétique ne modifie-t-elle pas la norme de la vitesse d’une charge dans un champ magnétique statique idéal ?',
                        'choices' => [
                            ['choice_text' => 'Elle est perpendiculaire à la vitesse et son travail est nul', 'is_correct' => true],
                            ['choice_text' => 'Elle est toujours parallèle à la vitesse', 'is_correct' => false],
                            ['choice_text' => 'Elle est toujours nulle', 'is_correct' => false],
                            ['choice_text' => 'Elle augmente nécessairement l’énergie cinétique', 'is_correct' => false],
                        ],
                        'explanation' => 'Une force perpendiculaire au déplacement instantané ne fournit pas de travail.',
                    ],

                    [
                        'question' => 'Une particule chargée de vitesse v perpendiculaire à B décrit un cercle de rayon r. Quelle relation est correcte ?',
                        'choices' => [
                            ['choice_text' => 'r = mv/(|q|B)', 'is_correct' => true],
                            ['choice_text' => 'r = |q|B/(mv)', 'is_correct' => false],
                            ['choice_text' => 'r = mB/(|q|v)', 'is_correct' => false],
                            ['choice_text' => 'r = mvB/|q|', 'is_correct' => false],
                        ],
                        'explanation' => 'En égalant |q|vB à mv²/r, on obtient r = mv/(|q|B).',
                    ],

                    [
                        'question' => 'À vitesse et charge données, si l’intensité du champ magnétique double, le rayon de la trajectoire circulaire devient...',
                        'choices' => [
                            ['choice_text' => 'Deux fois plus petit', 'is_correct' => true],
                            ['choice_text' => 'Deux fois plus grand', 'is_correct' => false],
                            ['choice_text' => 'Quatre fois plus grand', 'is_correct' => false],
                            ['choice_text' => 'Inchangé', 'is_correct' => false],
                        ],
                        'explanation' => 'r = mv/(|q|B), donc r est inversement proportionnel à B.',
                    ],

                    [
                        'question' => 'Quelle est la pulsation cyclotron d’une charge dans un champ magnétique uniforme non relativiste ?',
                        'choices' => [
                            ['choice_text' => 'ωc = |q|B/m', 'is_correct' => true],
                            ['choice_text' => 'ωc = m/(|q|B)', 'is_correct' => false],
                            ['choice_text' => 'ωc = |q|/(mB)', 'is_correct' => false],
                            ['choice_text' => 'ωc = mB/|q|²', 'is_correct' => false],
                        ],
                        'explanation' => 'La fréquence angulaire cyclotron vaut ωc = |q|B/m dans le régime non relativiste.',
                    ],

                    [
                        'question' => 'Une particule possède une composante de vitesse parallèle à B et une composante perpendiculaire. Quelle trajectoire obtient-on dans un champ uniforme ?',
                        'choices' => [
                            ['choice_text' => Une hélice', 'is_correct' => true],
                            ['choice_text' => 'Une ligne droite perpendiculaire au champ', 'is_correct' => false],
                            ['choice_text' => 'Un cercle sans translation', 'is_correct' => false],
                            ['choice_text' => 'Une parabole dans tous les cas', 'is_correct' => false],
                        ],
                        'explanation' => 'La composante perpendiculaire produit une rotation tandis que la composante parallèle reste uniforme.',
                    ],

                    [
                        'question' => 'Pourquoi le spectromètre de masse peut-il séparer des ions de rapports m/|q| différents ?',
                        'choices' => [
                            ['choice_text' => Leur rayon de courbure ou leur fréquence cyclotron dépend de m/|q|', 'is_correct' => true],
                            ['choice_text' => 'Tous les ions suivent exactement la même trajectoire', 'is_correct' => false],
                            ['choice_text' => 'La charge ne joue aucun rôle dans le mouvement magnétique', 'is_correct' => false],
                            ['choice_text' => 'La masse n’influence jamais la trajectoire', 'is_correct' => false],
                        ],
                        'explanation' => 'La dynamique dans B dépend directement du rapport masse/charge.',
                    ],

                ],
            ],

            // ============================================================
            // QUIZ 5 — Biot-Savart et loi d’Ampère
            // ============================================================

            [
                'title' => 'Sources du champ magnétique',
                'description' => 'Étude intermédiaire du champ créé par les courants et des symétries magnétiques.',
                'questions' => [

                    [
                        'question' => 'Quelle loi permet de calculer le champ magnétique produit par une distribution de courant dans des géométries générales ?',
                        'choices' => [
                            ['choice_text' => 'La loi de Biot-Savart', 'is_correct' => true],
                            ['choice_text' => 'La loi de Coulomb', 'is_correct' => false],
                            ['choice_text' => 'La loi d’Ohm', 'is_correct' => false],
                            ['choice_text' => 'La loi de Snell-Descartes', 'is_correct' => false],
                        ],
                        'explanation' => 'La loi de Biot-Savart permet de calculer le champ magnétique dû à des éléments de courant.',
                    ],

                    [
                        'question' => 'Quel est approximativement le champ magnétique à une distance r d’un fil rectiligne infini parcouru par un courant I ?',
                        'choices' => [
                            ['choice_text' => 'B = μ0I/(2πr)', 'is_correct' => true],
                            ['choice_text' => 'B = μ0Ir', 'is_correct' => false],
                            ['choice_text' => 'B = μ0I/(2πr²)', 'is_correct' => false],
                            ['choice_text' => 'B = 2πr/(μ0I)', 'is_correct' => false],
                        ],
                        'explanation' => 'Pour un fil rectiligne infini, B = μ0I/(2πr).',
                    ],

                    [
                        'question' => 'Si la distance à un fil rectiligne infini est doublée, son champ magnétique est...',
                        'choices' => [
                            ['choice_text' => 'Divisé par 2', 'is_correct' => true],
                            ['choice_text' => 'Divisé par 4', 'is_correct' => false],
                            ['choice_text' => 'Multiplié par 2', 'is_correct' => false],
                            ['choice_text' => 'Inchangé', 'is_correct' => false],
                        ],
                        'explanation' => 'Pour un fil infini, B ∝ 1/r.',
                    ],

                    [
                        'question' => 'Quelle règle permet de déterminer le sens du champ autour d’un fil parcouru par un courant ?',
                        'choices' => [
                            ['choice_text' => La règle de la main droite', 'is_correct' => true],
                            ['choice_text' => 'La règle de Snell', 'is_correct' => false],
                            ['choice_text' => 'La règle du triangle', 'is_correct' => false],
                            ['choice_text' => 'La règle de Kirchhoff', 'is_correct' => false],
                        ],
                        'explanation' => 'Le pouce indique le sens du courant et les doigts enroulés donnent le sens du champ magnétique.',
                    ],

                    [
                        'question' => 'Quelle loi est particulièrement efficace pour calculer B dans une géométrie présentant une forte symétrie ?',
                        'choices' => [
                            ['choice_text' => 'La loi d’Ampère', 'is_correct' => true],
                            ['choice_text' => 'La loi de Coulomb', 'is_correct' => false],
                            ['choice_text' => 'La loi de Faraday', 'is_correct' => false],
                            ['choice_text' => 'La loi de Malus', 'is_correct' => false],
                        ],
                        'explanation' => 'La loi d’Ampère est particulièrement utile lorsque la symétrie permet de simplifier l’intégrale curviligne.',
                    ],

                    [
                        'question' => 'Pour un solénoïde suffisamment long, quelle expression approximative donne le champ magnétique intérieur ?',
                        'choices' => [
                            ['choice_text' => 'B ≈ μ0nI', 'is_correct' => true],
                            ['choice_text' => 'B ≈ μ0I/n', 'is_correct' => false],
                            ['choice_text' => 'B ≈ nI/μ0', 'is_correct' => false],
                            ['choice_text' => 'B ≈ μ0n/I', 'is_correct' => false],
                        ],
                        'explanation' => 'Pour un solénoïde long, B ≈ μ0nI dans l’approximation idéale.',
                    ],

                    [
                        'question' => 'Que représente n dans la formule B ≈ μ0nI pour un solénoïde long ?',
                        'choices' => [
                            ['choice_text' => 'Le nombre de spires par unité de longueur', 'is_correct' => true],
                            ['choice_text' => 'L’indice de réfraction', 'is_correct' => false],
                            ['choice_text' => 'La charge par unité de longueur', 'is_correct' => false],
                            ['choice_text' => 'Le nombre total de charges', 'is_correct' => false],
                        ],
                        'explanation' => 'n = N/L est la densité linéique de spires.',
                    ],

                    [
                        'question' => 'Dans un tore idéal, la symétrie permet de considérer le champ magnétique principalement...',
                        'choices' => [
                            ['choice_text' => Tangentiel aux cercles centrés sur l’axe du tore', 'is_correct' => true],
                            ['choice_text' => 'Radial vers l’extérieur uniquement', 'is_correct' => false],
                            ['choice_text' => 'Uniforme partout dans l’espace', 'is_correct' => false],
                            ['choice_text' => 'Perpendiculaire à toutes les surfaces', 'is_correct' => false],
                        ],
                        'explanation' => 'La symétrie cylindrique autour du tore guide la direction du champ dans la région interne.',
                    ],

                    [
                        'question' => 'Pourquoi la symétrie est-elle essentielle dans l’application pratique de la loi d’Ampère ?',
                        'choices' => [
                            ['choice_text' => 'Elle peut rendre le champ constant sur une boucle d’Ampère choisie', 'is_correct' => true],
                            ['choice_text' => 'Elle rend toujours le champ nul', 'is_correct' => false],
                            ['choice_text' => 'Elle élimine le courant source', 'is_correct' => false],
                            ['choice_text' => 'Elle permet d’éviter toute intégration dans tous les cas', 'is_correct' => false],
                        ],
                        'explanation' => 'La connaissance de la symétrie peut transformer l’intégrale en une relation algébrique simple.',
                    ],

                    [
                        'question' => 'Pourquoi un courant électrique peut-il créer un champ magnétique alors qu’une charge immobile ne produit pas le même champ magnétique stationnaire ?',
                        'choices' => [
                            ['choice_text' => Le mouvement des charges constitue une source du champ magnétique', 'is_correct' => true],
                            ['choice_text' => 'Une charge immobile possède toujours un champ magnétique nul dans tous les contextes', 'is_correct' => false],
                            ['choice_text' => 'Le champ magnétique est indépendant du mouvement', 'is_correct' => false],
                            ['choice_text' => 'Le courant détruit le champ électrique', 'is_correct' => false],
                        ],
                        'explanation' => 'Les courants, c’est-à-dire les charges en mouvement organisées, produisent des champs magnétiques.',
                    ],

                    [
                        'question' => 'Pourquoi les champs magnétiques de plusieurs courants peuvent-ils être superposés dans l’approximation linéaire classique ?',
                        'choices' => [
                            ['choice_text' => Les contributions magnétiques individuelles s’additionnent vectoriellement', 'is_correct' => true],
                            ['choice_text' => 'Les champs magnétiques ne peuvent jamais interagir', 'is_correct' => false],
                            ['choice_text' => 'Un seul courant peut produire un champ', 'is_correct' => false],
                            ['choice_text' => 'Les champs magnétiques sont toujours scalaires', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans les régimes linéaires usuels, le champ total est la somme des contributions.',
                    ],

                ],
            ],

            // ============================================================
            // QUIZ 6 — Induction électromagnétique
            // ============================================================

            [
                'title' => 'Induction électromagnétique et loi de Faraday',
                'description' => 'Analyse intermédiaire de l’induction, du flux magnétique, de Lenz et des systèmes générateurs.',
                'questions' => [

                    [
                        'question' => 'Quelle expression donne le flux magnétique à travers une surface plane dans un champ uniforme ?',
                        'choices' => [
                            ['choice_text' => 'ΦB = BA cosθ', 'is_correct' => true],
                            ['choice_text' => 'ΦB = BA sinθ', 'is_correct' => false],
                            ['choice_text' => 'ΦB = B/A', 'is_correct' => false],
                            ['choice_text' => 'ΦB = B + A', 'is_correct' => false],
                        ],
                        'explanation' => 'θ est l’angle entre le champ et la normale à la surface.',
                    ],

                    [
                        'question' => 'Une spire de 0,02 m² est placée perpendiculairement à un champ B = 0,5 T. Quel est le flux magnétique ?',
                        'choices' => [
                            ['choice_text' => '0,01 Wb', 'is_correct' => true],
                            ['choice_text' => '0,025 Wb', 'is_correct' => false],
                            ['choice_text' => '0,25 Wb', 'is_correct' => false],
                            ['choice_text' => '1 Wb', 'is_correct' => false],
                        ],
                        'explanation' => 'Φ = BA = 0,5 × 0,02 = 0,01 Wb puisque θ = 0°.',
                    ],

                    [
                        'question' => 'Une variation du flux magnétique à travers une bobine de 100 spires produit une f.e.m. induite dont la norme est liée à...',
                        'choices' => [
                            ['choice_text' => '100 fois la variation temporelle du flux d’une seule spire', 'is_correct' => true],
                            ['choice_text' => 'La moitié de la variation du flux', 'is_correct' => false],
                            ['choice_text' => 'Une variation indépendante du nombre de spires', 'is_correct' => false],
                            ['choice_text' => 'Le carré du nombre de spires uniquement', 'is_correct' => false],
                        ],
                        'explanation' => 'Pour N spires, ε = -N dΦ/dt.',
                    ],

                    [
                        'question' => 'Quelle loi décrit le sens du courant induit ?',
                        'choices' => [
                            ['choice_text' => La loi de Lenz', 'is_correct' => true],
                            ['choice_text' => 'La loi de Snell-Descartes', 'is_correct' => false],
                            ['choice_text' => 'La loi d’Ohm', 'is_correct' => false],
                            ['choice_text' => 'La loi de Hooke', 'is_correct' => false],
                        ],
                        'explanation' => 'La loi de Lenz indique que l’effet induit s’oppose à la variation du flux qui lui donne naissance.',
                    ],

                    [
                        'question' => 'Une barre conductrice de longueur L se déplace à vitesse v perpendiculairement à un champ B, dans une configuration idéale. Quelle f.e.m. motrice peut apparaître ?',
                        'choices' => [
                            ['choice_text' => 'ε = BLv', 'is_correct' => true],
                            ['choice_text' => 'ε = B/(Lv)', 'is_correct' => false],
                            ['choice_text' => 'ε = B + L + v', 'is_correct' => false],
                            ['choice_text' => 'ε = Lv/B', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans la géométrie idéale, la f.e.m. de mouvement vaut BLv.',
                    ],

                    [
                        'question' => 'Pourquoi un courant induit peut-il produire un champ qui s’oppose à la variation du flux ?',
                        'choices' => [
                            ['choice_text' => 'Cela découle du signe négatif de la loi de Faraday-Lenz', 'is_correct' => true],
                            ['choice_text' => 'Le courant induit cherche toujours à annuler le champ total', 'is_correct' => false],
                            ['choice_text' => 'La résistance impose toujours une opposition au champ externe', 'is_correct' => false],
                            ['choice_text' => 'Le champ induit est nécessairement nul', 'is_correct' => false],
                        ],
                        'explanation' => 'Le signe moins de ε = -dΦ/dt encode le principe d’opposition à la variation du flux.',
                    ],

                    [
                        'question' => 'Dans un générateur électrique idéal, l’induction électromagnétique convertit principalement...',
                        'choices' => [
                            ['choice_text' => De l’énergie mécanique en énergie électrique', 'is_correct' => true],
                            ['choice_text' => 'De l’énergie électrique en masse', 'is_correct' => false],
                            ['choice_text' => 'De l’énergie thermique en charge sans champ', 'is_correct' => false],
                            ['choice_text' => 'De l’énergie magnétique en matière', 'is_correct' => false],
                        ],
                        'explanation' => 'Un générateur exploite un mouvement mécanique pour créer une f.e.m. électrique par induction.',
                    ],

                    [
                        'question' => 'Pourquoi un courant alternatif est-il particulièrement adapté au fonctionnement d’un transformateur classique ?',
                        'choices' => [
                            ['choice_text' => 'Il crée un flux magnétique variable nécessaire à l’induction secondaire', 'is_correct' => true],
                            ['choice_text' => 'Le courant continu produit toujours une tension secondaire constante', 'is_correct' => false],
                            ['choice_text' => 'Le transformateur n’utilise aucun flux magnétique', 'is_correct' => false],
                            ['choice_text' => 'Le secondaire fonctionne seulement avec un champ constant', 'is_correct' => false],
                        ],
                        'explanation' => 'Une variation temporelle du flux est nécessaire pour induire une tension dans l’enroulement secondaire.',
                    ],

                    [
                        'question' => 'Si la fréquence de variation du flux augmente, toutes choses égales par ailleurs, la f.e.m. induite maximale augmente généralement parce que...',
                        'choices' => [
                            ['choice_text' => La variation temporelle du flux est plus rapide', 'is_correct' => true],
                            ['choice_text' => 'La charge électronique augmente automatiquement', 'is_correct' => false],
                            ['choice_text' => 'La résistance disparaît', 'is_correct' => false],
                            ['choice_text' => 'Le nombre de spires diminue', 'is_correct' => false],
                        ],
                        'explanation' => 'Faraday donne une f.e.m. proportionnelle à la rapidité de variation du flux.',
                    ],

                    [
                        'question' => 'Pourquoi une bobine de transformateur possédant davantage de spires secondaires produit-elle une tension secondaire plus élevée dans le modèle idéal ?',
                        'choices' => [
                            ['choice_text' => 'La tension induite est proportionnelle au nombre de spires', 'is_correct' => true],
                            ['choice_text' => 'Le champ magnétique devient nécessairement nul', 'is_correct' => false],
                            ['choice_text' => 'La puissance devient infinie', 'is_correct' => false],
                            ['choice_text' => 'La fréquence change avec le nombre de spires', 'is_correct' => false],
                        ],
                        'explanation' => 'Pour un même flux variable, |ε| = N|dΦ/dt|.',
                    ],

                ],
            ],

            // ============================================================
            // QUIZ 7 — Courant alternatif et circuits RC/RL
            // ============================================================

            [
                'title' => 'Courant alternatif et régimes transitoires',
                'description' => 'Étude intermédiaire des circuits sinusoïdaux, résistifs, capacitifs et inductifs.',
                'questions' => [

                    [
                        'question' => 'Dans un circuit alternatif sinusoïdal idéalement résistif, le courant et la tension sont...',
                        'choices' => [
                            ['choice_text' => 'En phase', 'is_correct' => true],
                            ['choice_text' => 'Déphasés de 90°', 'is_correct' => false],
                            ['choice_text' => 'Déphasés de 180° toujours', 'is_correct' => false],
                            ['choice_text' => 'Sans relation de phase', 'is_correct' => false],
                        ],
                        'explanation' => 'Pour une résistance idéale, V = RI avec R réel, donc courant et tension sont en phase.',
                    ],

                    [
                        'question' => 'Dans un condensateur idéal soumis à une tension sinusoïdale, le courant est en avance sur la tension de...',
                        'choices' => [
                            ['choice_text' => '90°', 'is_correct' => true],
                            ['choice_text' => '45°', 'is_correct' => false],
                            ['choice_text' => '180°', 'is_correct' => false],
                            ['choice_text' => '0°', 'is_correct' => false],
                        ],
                        'explanation' => 'Pour un condensateur idéal, i = C dv/dt, ce qui donne un courant en avance de π/2.',
                    ],

                    [
                        'question' => 'Dans une inductance idéale, le courant est en retard sur la tension de...',
                        'choices' => [
                            ['choice_text' => '90°', 'is_correct' => true],
                            ['choice_text' => '30°', 'is_correct' => false],
                            ['choice_text' => '180°', 'is_correct' => false],
                            ['choice_text' => '0°', 'is_correct' => false],
                        ],
                        'explanation' => 'Pour une bobine idéale, v = L di/dt, donc la tension est en avance de 90° sur le courant.',
                    ],

                    [
                        'question' => 'Quelle est la réactance capacitive d’un condensateur de capacité C à la pulsation ω ?',
                        'choices' => [
                            ['choice_text' => 'XC = 1/(ωC)', 'is_correct' => true],
                            ['choice_text' => 'XC = ωC', 'is_correct' => false],
                            ['choice_text' => 'XC = C/ω', 'is_correct' => false],
                            ['choice_text' => 'XC = ω/C', 'is_correct' => false],
                        ],
                        'explanation' => 'La magnitude de l’impédance capacitive vaut 1/(ωC).',
                    ],

                    [
                        'question' => 'Quelle est la réactance inductive d’une bobine d’inductance L ?',
                        'choices' => [
                            ['choice_text' => 'XL = ωL', 'is_correct' => true],
                            ['choice_text' => 'XL = L/ω', 'is_correct' => false],
                            ['choice_text' => 'XL = 1/(ωL)', 'is_correct' => false],
                            ['choice_text' => 'XL = ω/L', 'is_correct' => false],
                        ],
                        'explanation' => 'La réactance inductive vaut XL = ωL.',
                    ],

                    [
                        'question' => 'Dans un circuit RC série, que représente la constante de temps τ ?',
                        'choices' => [
                            ['choice_text' => 'τ = RC', 'is_correct' => true],
                            ['choice_text' => 'τ = R/C', 'is_correct' => false],
                            ['choice_text' => 'τ = 1/RC', 'is_correct' => false],
                            ['choice_text' => 'τ = R + C', 'is_correct' => false],
                        ],
                        'explanation' => 'La constante de temps d’un circuit RC vaut τ = RC.',
                    ],

                    [
                        'question' => 'Après environ 5 constantes de temps lors de la charge d’un circuit RC idéal, le condensateur est...',
                        'choices' => [
                            ['choice_text' => Très proche de sa tension finale', 'is_correct' => true],
                            ['choice_text' => 'Toujours complètement déchargé', 'is_correct' => false],
                            ['choice_text' => 'À exactement 50 % dans tous les cas', 'is_correct' => false],
                            ['choice_text' => 'À une tension infinie', 'is_correct' => false],
                        ],
                        'explanation' => 'Après 5τ, la réponse exponentielle est pratiquement à son régime final à environ 99,3 % de la valeur finale.',
                    ],

                    [
                        'question' => 'Quelle est la constante de temps d’un circuit RL série ?',
                        'choices' => [
                            ['choice_text' => 'τ = L/R', 'is_correct' => true],
                            ['choice_text' => 'τ = R/L', 'is_correct' => false],
                            ['choice_text' => 'τ = RL', 'is_correct' => false],
                            ['choice_text' => 'τ = 1/(RL)', 'is_correct' => false],
                        ],
                        'explanation' => 'Pour un circuit RL série, τ = L/R.',
                    ],

                    [
                        'question' => 'Pourquoi le courant dans une inductance ne peut-il pas changer instantanément dans le modèle idéal ?',
                        'choices' => [
                            ['choice_text' => Une variation instantanée du courant nécessiterait une tension idéalement infinie', 'is_correct' => true],
                            ['choice_text' => 'Le courant dans une inductance est toujours nul', 'is_correct' => false],
                            ['choice_text' => 'La résistance de l’inductance est toujours infinie', 'is_correct' => false],
                            ['choice_text' => 'La loi d’Ohm interdit tout courant variable', 'is_correct' => false],
                        ],
                        'explanation' => 'v = L di/dt. Pour imposer une variation instantanée de courant, il faudrait une dérivée extrêmement grande.',
                    ],

                    [
                        'question' => 'Pourquoi un condensateur laisse-t-il passer davantage de courant alternatif lorsque la fréquence augmente, à amplitude de tension fixée ?',
                        'choices' => [
                            ['choice_text' => Sa réactance capacitive XC = 1/(ωC) diminue', 'is_correct' => true],
                            ['choice_text' => 'Sa capacité diminue toujours avec la fréquence', 'is_correct' => false],
                            ['choice_text' => 'La tension devient automatiquement nulle', 'is_correct' => false],
                            ['choice_text' => 'La résistance augmente comme ω²', 'is_correct' => false],
                        ],
                        'explanation' => 'Lorsque ω augmente, XC diminue, donc le courant I = V/XC augmente dans le modèle idéal.',
                    ],

                ],
            ],

            // ============================================================
            // QUIZ 8 — Électromagnétisme intégré
            // ============================================================

            [
                'title' => 'Analyse intégrée de l’électromagnétisme',
                'description' => 'Problèmes intermédiaires combinant champs, circuits, magnétisme et induction.',
                'questions' => [

                    [
                        'question' => 'Une charge q = 2 μC est accélérée par une différence de potentiel de 500 V. Quelle variation d’énergie potentielle électrique correspondante en valeur absolue est impliquée ?',
                        'choices' => [
                            ['choice_text' => '1 × 10^-3 J', 'is_correct' => true],
                            ['choice_text' => '1 × 10^-6 J', 'is_correct' => false],
                            ['choice_text' => '1 × 10^-2 J', 'is_correct' => false],
                            ['choice_text' => '250 J', 'is_correct' => false],
                        ],
                        'explanation' => '|ΔU| = |qΔV| = 2×10^-6 × 500 = 1×10^-3 J.',
                    ],

                    [
                        'question' => 'Une particule de charge q entre avec v perpendiculaire à B. Si sa vitesse est doublée, le rayon de son orbite cyclotron devient...',
                        'choices' => [
                            ['choice_text' => 'Deux fois plus grand', 'is_correct' => true],
                            ['choice_text' => 'Deux fois plus petit', 'is_correct' => false],
                            ['choice_text' => 'Quatre fois plus grand', 'is_correct' => false],
                            ['choice_text' => 'Inchangé', 'is_correct' => false],
                        ],
                        'explanation' => 'r = mv/(|q|B), donc r est proportionnel à v.',
                    ],

                    [
                        'question' => 'Une bobine de 200 spires voit son flux par spire varier de 3 × 10^-4 Wb à 0 en 0,02 s. Quelle est la norme moyenne de la f.e.m. induite ?',
                        'choices' => [
                            ['choice_text' => '3 V', 'is_correct' => true],
                            ['choice_text' => '0,3 V', 'is_correct' => false],
                            ['choice_text' => '30 V', 'is_correct' => false],
                            ['choice_text' => '6 V', 'is_correct' => false],
                        ],
                        'explanation' => 'ε_moy = N|ΔΦ|/Δt = 200 × 3×10^-4 / 0,02 = 3 V.',
                    ],

                    [
                        'question' => 'Un condensateur de 10 μF est chargé à 100 V. Quelle énergie stocke-t-il ?',
                        'choices' => [
                            ['choice_text' => '0,05 J', 'is_correct' => true],
                            ['choice_text' => '0,5 J', 'is_correct' => false],
                            ['choice_text' => '0,005 J', 'is_correct' => false],
                            ['choice_text' => '5 J', 'is_correct' => false],
                        ],
                        'explanation' => 'U = 1/2 CV² = 1/2 × 10×10^-6 × 100² = 0,05 J.',
                    ],

                    [
                        'question' => 'Un fil rectiligne infini est parcouru par un courant de 10 A. À 0,1 m du fil, le champ magnétique vaut approximativement...',
                        'choices' => [
                            ['choice_text' => '2 × 10^-5 T', 'is_correct' => true],
                            ['choice_text' => '2 × 10^-3 T', 'is_correct' => false],
                            ['choice_text' => '2 × 10^-7 T', 'is_correct' => false],
                            ['choice_text' => '2 × 10^-4 T', 'is_correct' => false],
                        ],
                        'explanation' => 'B = μ0I/(2πr) = (4π×10^-7×10)/(2π×0,1) = 2×10^-5 T.',
                    ],

                    [
                        'question' => 'Une résistance de 8 Ω est branchée à une source continue de 24 V. Quelle puissance dissipe-t-elle ?',
                        'choices' => [
                            ['choice_text' => '72 W', 'is_correct' => true],
                            ['choice_text' => '3 W', 'is_correct' => false],
                            ['choice_text' => '192 W', 'is_correct' => false],
                            ['choice_text' => '24 W', 'is_correct' => false],
                        ],
                        'explanation' => 'P = V²/R = 24²/8 = 72 W.',
                    ],

                    [
                        'question' => 'Une particule chargée entre dans un champ magnétique uniforme avec une composante de vitesse parallèle et une composante perpendiculaire. Quelle grandeur détermine le rayon de l’hélice ?',
                        'choices' => [
                            ['choice_text' => La composante perpendiculaire de la vitesse', 'is_correct' => true],
                            ['choice_text' => 'La composante parallèle uniquement', 'is_correct' => false],
                            ['choice_text' => 'La vitesse totale uniquement sans décomposition', 'is_correct' => false],
                            ['choice_text' => 'La charge seule', 'is_correct' => false],
                        ],
                        'explanation' => 'Le rayon dépend de v_perp : r = mv_perp/(|q|B).',
                    ],

                    [
                        'question' => 'Pourquoi une variation de champ magnétique peut-elle créer un champ électrique même en l’absence de conducteurs ?',
                        'choices' => [
                            ['choice_text' => 'La loi de Faraday-Maxwell relie la circulation du champ électrique à la variation du flux magnétique', 'is_correct' => true],
                            ['choice_text' => 'Un conducteur est toujours nécessaire à l’existence d’un champ électrique', 'is_correct' => false],
                            ['choice_text' => 'Le champ électrique ne peut exister que dans un fil', 'is_correct' => false],
                            ['choice_text' => 'Le champ magnétique détruit toujours le champ électrique', 'is_correct' => false],
                        ],
                        'explanation' => 'Une variation temporelle du champ magnétique produit un champ électrique tourbillonnaire.',
                    ],

                    [
                        'question' => 'Pourquoi les champs électrique et magnétique sont-ils réunis dans la théorie électromagnétique ?',
                        'choices' => [
                            ['choice_text' => 'Ils peuvent se coupler et évoluer l’un avec l’autre dans les phénomènes électromagnétiques', 'is_correct' => true],
                            ['choice_text' => 'Ils représentent exactement la même grandeur', 'is_correct' => false],
                            ['choice_text' => 'Le champ magnétique n’a aucune relation avec les courants', 'is_correct' => false],
                            ['choice_text' => 'Le champ électrique existe uniquement dans les conducteurs', 'is_correct' => false],
                        ],
                        'explanation' => 'Les équations de Maxwell unifient les champs électriques et magnétiques et décrivent leur couplage dynamique.',
                    ],

                    [
                        'question' => 'Pourquoi les équations de Maxwell constituent-elles un cadre plus général que les lois électrostatiques et magnétostatiques isolées ?',
                        'choices' => [
                            ['choice_text' => 'Elles incluent les champs variables dans le temps et leur couplage', 'is_correct' => true],
                            ['choice_text' => 'Elles ne concernent que les charges immobiles', 'is_correct' => false],
                            ['choice_text' => 'Elles excluent l’induction', 'is_correct' => false],
                            ['choice_text' => 'Elles ne peuvent décrire aucun champ magnétique', 'is_correct' => false],
                        ],
                        'explanation' => 'Les équations de Maxwell englobent l’électrostatique, la magnétostatique et les phénomènes électromagnétiques variables.',
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

                // Randomisation des choix pour éviter toute position
                // prévisible de la bonne réponse.
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