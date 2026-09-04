<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class ElectromagnetismAdvancedSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'electromagnetism')->firstOrFail();

        $quizzes = [

            // ============================================================
            // QUIZ 1 — Électrostatique avancée
            // ============================================================

            [
                'title' => 'Électrostatique avancée',
                'description' => 'Étude avancée des champs électriques, distributions de charges, symétrie et flux.',
                'questions' => [

                    [
                        'question' => 'Quelle loi permet de relier le flux du champ électrique à la charge enfermée par une surface fermée ?',
                        'choices' => [
                            ['choice_text' => 'La loi de Gauss', 'is_correct' => true],
                            ['choice_text' => 'La loi de Faraday', 'is_correct' => false],
                            ['choice_text' => 'La loi de Lenz', 'is_correct' => false],
                            ['choice_text' => 'La loi de Biot-Savart', 'is_correct' => false],
                        ],
                        'explanation' => 'La loi de Gauss relie le flux électrique à travers une surface fermée à la charge nette qu’elle contient.',
                    ],

                    [
                        'question' => 'Dans le vide, quelle expression donne la forme intégrale de la loi de Gauss ?',
                        'choices' => [
                            ['choice_text' => '∮E·dA = Qint/ε0', 'is_correct' => true],
                            ['choice_text' => '∮E·dA = ε0Qint', 'is_correct' => false],
                            ['choice_text' => '∮E·dA = Qintε0²', 'is_correct' => false],
                            ['choice_text' => '∮E·dA = Qint²/ε0', 'is_correct' => false],
                        ],
                        'explanation' => 'Le flux électrique à travers une surface fermée vaut Qint/ε0.',
                    ],

                    [
                        'question' => 'Pourquoi la loi de Gauss est-elle particulièrement efficace pour une distribution de charge possédant une forte symétrie ?',
                        'choices' => [
                            ['choice_text' => 'La symétrie peut rendre le champ constant en norme sur une surface de Gauss adaptée', 'is_correct' => true],
                            ['choice_text' => 'Elle rend toujours le champ nul', 'is_correct' => false],
                            ['choice_text' => 'Elle élimine la charge de la région étudiée', 'is_correct' => false],
                            ['choice_text' => 'Elle ne nécessite aucune définition de surface', 'is_correct' => false],
                        ],
                        'explanation' => 'Une géométrie sphérique, cylindrique ou plane appropriée peut simplifier fortement l’intégrale de flux.',
                    ],

                    [
                        'question' => 'Quel champ électrique est créé à l’extérieur d’une distribution sphérique de charge possédant une symétrie sphérique, dans le cas idéal ?',
                        'choices' => [
                            ['choice_text' => 'Celui d’une charge ponctuelle égale à la charge totale placée au centre', 'is_correct' => true],
                            ['choice_text' => 'Un champ nécessairement uniforme', 'is_correct' => false],
                            ['choice_text' => 'Un champ toujours nul', 'is_correct' => false],
                            ['choice_text' => 'Un champ proportionnel à r²', 'is_correct' => false],
                        ],
                        'explanation' => 'Par symétrie et avec la loi de Gauss, le champ extérieur est celui d’une charge ponctuelle équivalente au centre.',
                    ],

                    [
                        'question' => 'À l’intérieur d’un conducteur parfait en équilibre électrostatique, le champ électrique est...',
                        'choices' => [
                            ['choice_text' => 'Nul', 'is_correct' => true],
                            ['choice_text' => 'Toujours maximal', 'is_correct' => false],
                            ['choice_text' => 'Uniforme et non nul', 'is_correct' => false],
                            ['choice_text' => 'Proportionnel à la distance au centre', 'is_correct' => false],
                        ],
                        'explanation' => 'Les charges libres se redistribuent jusqu’à annuler le champ électrique intérieur en équilibre électrostatique.',
                    ],

                    [
                        'question' => 'Dans un conducteur en équilibre électrostatique, les charges libres se trouvent principalement...',
                        'choices' => [
                            ['choice_text' => 'À la surface', 'is_correct' => true],
                            ['choice_text' => 'Uniformément dans tout le volume', 'is_correct' => false],
                            ['choice_text' => 'Uniquement au centre', 'is_correct' => false],
                            ['choice_text' => 'Toujours dans le vide extérieur', 'is_correct' => false],
                        ],
                        'explanation' => 'En équilibre électrostatique, la charge libre excédentaire réside sur les surfaces du conducteur.',
                    ],

                    [
                        'question' => 'Quelle relation relie le champ électrique et le potentiel dans un espace tridimensionnel ?',
                        'choices' => [
                            ['choice_text' => 'E = -∇V', 'is_correct' => true],
                            ['choice_text' => 'E = ∇V', 'is_correct' => false],
                            ['choice_text' => 'E = V²', 'is_correct' => false],
                            ['choice_text' => 'E = -V/r² dans tous les cas', 'is_correct' => false],
                        ],
                        'explanation' => 'Le champ électrique est l’opposé du gradient du potentiel.',
                    ],

                    [
                        'question' => 'Quelle équation locale est associée à la loi de Gauss en électrostatique ?',
                        'choices' => [
                            ['choice_text' => '∇·E = ρ/ε0', 'is_correct' => true],
                            ['choice_text' => '∇×E = ρ/ε0', 'is_correct' => false],
                            ['choice_text' => '∇·E = ε0ρ', 'is_correct' => false],
                            ['choice_text' => '∇×E = μ0J', 'is_correct' => false],
                        ],
                        'explanation' => 'La forme différentielle de la loi de Gauss est ∇·E = ρ/ε0.',
                    ],

                    [
                        'question' => 'En électrostatique, quel est le rotationnel du champ électrique dans une région sans variation temporelle du champ magnétique ?',
                        'choices' => [
                            ['choice_text' => 'Nul', 'is_correct' => true],
                            ['choice_text' => 'Égal à ρ/ε0', 'is_correct' => false],
                            ['choice_text' => 'Toujours égal à μ0J', 'is_correct' => false],
                            ['choice_text' => 'Proportionnel à B²', 'is_correct' => false],
                        ],
                        'explanation' => 'En électrostatique, ∇×E = 0. Le champ est alors conservatif.',
                    ],

                    [
                        'question' => 'Pourquoi l’absence de rotationnel du champ électrostatique permet-elle d’introduire un potentiel scalaire ?',
                        'choices' => [
                            ['choice_text' => 'Le champ est conservatif et peut s’écrire comme l’opposé du gradient d’un potentiel', 'is_correct' => true],
                            ['choice_text' => 'Le champ devient nécessairement nul partout', 'is_correct' => false],
                            ['choice_text' => 'Le potentiel devient vectoriel', 'is_correct' => false],
                            ['choice_text' => 'La charge électrique disparaît', 'is_correct' => false],
                        ],
                        'explanation' => 'Un champ irrotationnel dans un domaine simplement connexe peut être représenté par E = -∇V.',
                    ],

                    [
                        'question' => 'Pourquoi une surface équipotentielle est-elle perpendiculaire au champ électrique ?',
                        'choices' => [
                            ['choice_text' => Le champ est orienté selon la direction de variation maximale du potentiel', 'is_correct' => true],
                            ['choice_text' => 'Le champ est toujours parallèle à une équipotentielle', 'is_correct' => false],
                            ['choice_text' => 'Le potentiel est vectoriel', 'is_correct' => false],
                            ['choice_text' => 'Une équipotentielle possède toujours un champ nul', 'is_correct' => false],
                        ],
                        'explanation' => 'Comme E = -∇V, le gradient est normal aux surfaces où V est constant.',
                    ],
                ],
            ],

            // ============================================================
            // QUIZ 2 — Magnétostatique
            // ============================================================

            [
                'title' => 'Magnétostatique avancée',
                'description' => 'Étude des courants stationnaires, loi d’Ampère, Biot-Savart et propriétés du champ magnétique.',
                'questions' => [

                    [
                        'question' => 'Quelle loi permet de calculer le champ magnétique créé par un élément de courant dans une géométrie générale ?',
                        'choices' => [
                            ['choice_text' => 'La loi de Biot-Savart', 'is_correct' => true],
                            ['choice_text' => 'La loi de Gauss électrique', 'is_correct' => false],
                            ['choice_text' => 'La loi de Snell-Descartes', 'is_correct' => false],
                            ['choice_text' => 'La loi de Malus', 'is_correct' => false],
                        ],
                        'explanation' => 'La loi de Biot-Savart exprime la contribution infinitésimale d’un élément de courant au champ magnétique.',
                    ],

                    [
                        'question' => 'Quelle forme locale de la loi d’Ampère est valable en magnétostatique ?',
                        'choices' => [
                            ['choice_text' => '∇×B = μ0J', 'is_correct' => true],
                            ['choice_text' => '∇×B = J/μ0', 'is_correct' => false],
                            ['choice_text' => '∇·B = μ0J', 'is_correct' => false],
                            ['choice_text' => '∇B = μ0J', 'is_correct' => false],
                        ],
                        'explanation' => 'En magnétostatique, le rotationnel de B est égal à μ0J.',
                    ],

                    [
                        'question' => 'Quelle équation locale exprime l’absence de monopôles magnétiques classiques ?',
                        'choices' => [
                            ['choice_text' => '∇·B = 0', 'is_correct' => true],
                            ['choice_text' => '∇·B = ρm', 'is_correct' => false],
                            ['choice_text' => '∇×B = 0 dans tous les cas', 'is_correct' => false],
                            ['choice_text' => '∇·B = μ0J', 'is_correct' => false],
                        ],
                        'explanation' => 'La divergence du champ magnétique est nulle dans l’électromagnétisme classique.',
                    ],

                    [
                        'question' => 'Pourquoi les lignes de champ magnétique forment-elles des boucles fermées dans le modèle classique ?',
                        'choices' => [
                            ['choice_text' => Leur divergence est nulle', 'is_correct' => true],
                            ['choice_text' => 'Le champ magnétique est toujours uniforme', 'is_correct' => false],
                            ['choice_text' => 'Les charges magnétiques existent en couples indépendants', 'is_correct' => false],
                            ['choice_text' => 'Le champ magnétique possède toujours un potentiel scalaire global', 'is_correct' => false],
                        ],
                        'explanation' => 'La condition ∇·B = 0 implique qu’il n’existe pas de sources ou puits magnétiques isolés dans le modèle classique.',
                    ],

                    [
                        'question' => 'Pour un fil rectiligne infini parcouru par un courant I, quelle dépendance du champ magnétique avec la distance r est correcte ?',
                        'choices' => [
                            ['choice_text' => 'B ∝ 1/r', 'is_correct' => true],
                            ['choice_text' => 'B ∝ 1/r²', 'is_correct' => false],
                            ['choice_text' => 'B ∝ r', 'is_correct' => false],
                            ['choice_text' => 'B ∝ r²', 'is_correct' => false],
                        ],
                        'explanation' => 'Le champ d’un fil infini vaut B = μ0I/(2πr).',
                    ],

                    [
                        'question' => 'Pourquoi la loi d’Ampère est-elle particulièrement simple pour un solénoïde idéal très long ?',
                        'choices' => [
                            ['choice_text' => La symétrie rend le champ intérieur approximativement uniforme et axial', 'is_correct' => true],
                            ['choice_text' => 'Le champ extérieur est toujours plus grand', 'is_correct' => false],
                            ['choice_text' => 'La densité de courant est nulle partout', 'is_correct' => false],
                            ['choice_text' => 'Le solénoïde est nécessairement sans champ magnétique', 'is_correct' => false],
                        ],
                        'explanation' => 'La forte symétrie du solénoïde permet une application directe de la loi d’Ampère.',
                    ],

                    [
                        'question' => 'Dans un solénoïde long comportant n spires par unité de longueur, le champ intérieur idéal vaut approximativement...',
                        'choices' => [
                            ['choice_text' => 'B = μ0nI', 'is_correct' => true],
                            ['choice_text' => 'B = μ0I/n', 'is_correct' => false],
                            ['choice_text' => 'B = nI/μ0', 'is_correct' => false],
                            ['choice_text' => 'B = μ0n/I', 'is_correct' => false],
                        ],
                        'explanation' => 'Pour un solénoïde long dans le vide, B = μ0nI.',
                    ],

                    [
                        'question' => 'Pourquoi le potentiel vecteur magnétique A peut-il être introduit ?',
                        'choices' => [
                            ['choice_text' => Parce que ∇·B = 0 permet d’écrire B = ∇×A', 'is_correct' => true],
                            ['choice_text' => 'Parce que le champ magnétique est toujours conservatif', 'is_correct' => false],
                            ['choice_text' => 'Parce que B = -∇A dans tous les cas', 'is_correct' => false],
                            ['choice_text' => 'Parce que A représente directement le courant', 'is_correct' => false],
                        ],
                        'explanation' => 'Tout champ à divergence nulle peut localement être représenté comme le rotationnel d’un potentiel vecteur.',
                    ],

                    [
                        'question' => 'Pourquoi une transformation de jauge du potentiel vecteur ne modifie-t-elle pas directement le champ magnétique ?',
                        'choices' => [
                            ['choice_text' => Ajouter un gradient à A ne change pas son rotationnel', 'is_correct' => true],
                            ['choice_text' => 'Parce que A est toujours nul', 'is_correct' => false],
                            ['choice_text' => 'Parce que B est indépendant de A', 'is_correct' => false],
                            ['choice_text' => 'Parce que le rotationnel d’un gradient est non nul', 'is_correct' => false],
                        ],
                        'explanation' => 'Sous A′ = A + ∇χ, on a ∇×A′ = ∇×A puisque ∇×∇χ = 0.',
                    ],

                    [
                        'question' => 'Pourquoi les symétries jouent-elles un rôle aussi important en magnétostatique ?',
                        'choices' => [
                            ['choice_text' => 'Elles permettent de déterminer la direction et les dépendances spatiales possibles du champ', 'is_correct' => true],
                            ['choice_text' => 'Elles rendent toutes les distributions équivalentes', 'is_correct' => false],
                            ['choice_text' => 'Elles annulent toujours les courants', 'is_correct' => false],
                            ['choice_text' => 'Elles remplacent les équations de Maxwell', 'is_correct' => false],
                        ],
                        'explanation' => 'Une bonne identification des symétries peut réduire fortement le nombre de variables inconnues.',
                    ],

                ],
            ],

            // ============================================================
            // QUIZ 3 — Forces électromagnétiques
            // ============================================================

            [
                'title' => 'Forces électromagnétiques et mouvement des charges',
                'description' => 'Analyse des forces de Lorentz, trajectoires chargées et mouvements dans des champs combinés.',
                'questions' => [

                    [
                        'question' => 'Quelle est la forme complète de la force de Lorentz exercée sur une charge q ?',
                        'choices' => [
                            ['choice_text' => 'F = q(E + v × B)', 'is_correct' => true],
                            ['choice_text' => 'F = q(E · B)', 'is_correct' => false],
                            ['choice_text' => 'F = q(E + B)', 'is_correct' => false],
                            ['choice_text' => 'F = q(v + E × B)', 'is_correct' => false],
                        ],
                        'explanation' => 'La force de Lorentz combine les contributions électrique et magnétique.',
                    ],

                    [
                        'question' => 'Pourquoi le champ magnétique ne modifie-t-il pas l’énergie cinétique d’une charge dans le cas idéal ?',
                        'choices' => [
                            ['choice_text' => La force magnétique est perpendiculaire à la vitesse', 'is_correct' => true],
                            ['choice_text' => 'La force magnétique est toujours nulle', 'is_correct' => false],
                            ['choice_text' => 'Le champ magnétique ne crée jamais de force', 'is_correct' => false],
                            ['choice_text' => 'La masse de la particule est constante', 'is_correct' => false],
                        ],
                        'explanation' => 'La puissance magnétique instantanée q(v × B)·v est nulle.',
                    ],

                    [
                        'question' => 'Une charge positive se déplace perpendiculairement à B avec une vitesse constante. Comment varie le rayon de sa trajectoire si B double ?',
                        'choices' => [
                            ['choice_text' => 'Il est divisé par 2', 'is_correct' => true],
                            ['choice_text' => 'Il double', 'is_correct' => false],
                            ['choice_text' => 'Il est multiplié par 4', 'is_correct' => false],
                            ['choice_text' => 'Il reste constant', 'is_correct' => false],
                        ],
                        'explanation' => 'r = mv/(qB), donc r est inversement proportionnel à B.',
                    ],

                    [
                        'question' => 'Quelle est la fréquence cyclotron non relativiste d’une particule chargée dans un champ magnétique uniforme ?',
                        'choices' => [
                            ['choice_text' => 'fc = |q|B/(2πm)', 'is_correct' => true],
                            ['choice_text' => 'fc = 2πm/(|q|B)', 'is_correct' => false],
                            ['choice_text' => 'fc = |q|/(2πmB)', 'is_correct' => false],
                            ['choice_text' => 'fc = mB/(2π|q|)', 'is_correct' => false],
                        ],
                        'explanation' => 'ωc = |q|B/m et f = ω/(2π).',
                    ],

                    [
                        'question' => 'Dans des champs E et B croisés, quelle condition permet à une particule de traverser sans déviation dans le sélecteur de vitesse idéal ?',
                        'choices' => [
                            ['choice_text' => E = vB en norme lorsque les forces sont opposées', 'is_correct' => true],
                            ['choice_text' => 'E = B/v', 'is_correct' => false],
                            ['choice_text' => 'E = v/B', 'is_correct' => false],
                            ['choice_text' => 'E = v²B', 'is_correct' => false],
                        ],
                        'explanation' => 'Pour aucune déviation, qE et qv×B doivent se compenser : E = vB dans la géométrie perpendiculaire.',
                    ],

                    [
                        'question' => 'Pourquoi une charge ayant une composante de vitesse parallèle à B décrit-elle une hélice ?',
                        'choices' => [
                            ['choice_text' => La composante perpendiculaire produit le mouvement circulaire tandis que la composante parallèle reste uniforme', 'is_correct' => true],
                            ['choice_text' => 'La vitesse parallèle disparaît immédiatement', 'is_correct' => false],
                            ['choice_text' => 'Le champ accélère directement la charge dans sa direction', 'is_correct' => false],
                            ['choice_text' => 'La charge reste toujours immobile dans le plan perpendiculaire', 'is_correct' => false],
                        ],
                        'explanation' => 'La superposition d’un mouvement circulaire transversal et d’un mouvement rectiligne uniforme parallèle produit une hélice.',
                    ],

                    [
                        'question' => 'Pourquoi un champ électrique uniforme peut-il modifier la norme de la vitesse contrairement à un champ magnétique statique idéal ?',
                        'choices' => [
                            ['choice_text' => La force électrique peut avoir une composante parallèle à la vitesse', 'is_correct' => true],
                            ['choice_text' => 'La force magnétique est toujours parallèle à la vitesse', 'is_correct' => false],
                            ['choice_text' => 'Le champ électrique ne produit aucune force', 'is_correct' => false],
                            ['choice_text' => 'La masse varie sous l’effet du champ électrique', 'is_correct' => false],
                        ],
                        'explanation' => 'La puissance qE·v peut être non nulle, donc le champ électrique peut modifier l’énergie cinétique.',
                    ],

                    [
                        'question' => 'Pourquoi un rapport masse/charge faible facilite-t-il une forte courbure dans un champ magnétique donné ?',
                        'choice_text' => 'Parce que r = mv_perp/(|q|B), donc une faible valeur de m/|q| donne un rayon plus petit.',
                    ],

                    [
                        'question' => 'Dans un champ magnétique non uniforme, la trajectoire d’une particule peut-elle être différente de celle d’un cercle parfait ?',
                        'choices' => [
                            ['choice_text' => 'Oui, car la norme et la direction du champ peuvent varier spatialement', 'is_correct' => true],
                            ['choice_text' => 'Non, toute particule chargée suit toujours un cercle', 'is_correct' => false],
                            ['choice_text' => 'Oui, mais uniquement si sa charge est nulle', 'is_correct' => false],
                            ['choice_text' => 'Non, car B est toujours constant', 'is_correct' => false],
                        ],
                        'explanation' => 'La géométrie du mouvement dépend du champ local et de ses variations spatiales.',
                    ],

                    [
                        'question' => 'Pourquoi le mouvement d’une charge dans des champs électromagnétiques combinés peut-il devenir difficile à résoudre analytiquement ?',
                        'choices' => [
                            ['choice_text' => 'Les champs variables ou non uniformes couplent les composantes du mouvement dans des équations différentielles complexes', 'is_correct' => true],
                            ['choice_text' => 'La charge cesse d’être une variable dynamique', 'is_correct' => false],
                            ['choice_text' => 'Les équations deviennent toujours algébriques simples', 'is_correct' => false],
                            ['choice_text' => 'Les champs n’influencent jamais simultanément la particule', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans les configurations générales, les équations de Lorentz peuvent nécessiter des méthodes numériques.',
                    ],

                ],
            ],

            // ============================================================
            // QUIZ 4 — Induction et équations de Maxwell
            // ============================================================

            [
                'title' => 'Induction et équations de Maxwell',
                'description' => 'Étude avancée de l’induction, du courant de déplacement et des équations de Maxwell.',
                'questions' => [

                    [
                        'question' => 'Quelle équation de Maxwell décrit l’induction électrique par un champ magnétique variable ?',
                        'choices' => [
                            ['choice_text' => '∇×E = -∂B/∂t', 'is_correct' => true],
                            ['choice_text' => '∇×E = μ0J', 'is_correct' => false],
                            ['choice_text' => '∇·E = ∂B/∂t', 'is_correct' => false],
                            ['choice_text' => '∇×B = -∂E/∂t', 'is_correct' => false],
                        ],
                        'explanation' => 'La loi de Faraday-Maxwell relie le rotationnel du champ électrique à la variation temporelle de B.',
                    ],

                    [
                        'question' => 'Quelle correction Maxwell a-t-il introduite dans la loi d’Ampère ?',
                        'choices' => [
                            ['choice_text' => Le courant de déplacement associé à la variation temporelle de E', 'is_correct' => true],
                            ['choice_text' => 'La charge magnétique monopolaire', 'is_correct' => false],
                            ['choice_text' => 'Une correction gravitationnelle', 'is_correct' => false],
                            ['choice_text' => 'Une correction thermique', 'is_correct' => false],
                        ],
                        'explanation' => 'La loi d’Ampère-Maxwell inclut le terme ε0 ∂E/∂t.',
                    ],

                    [
                        'question' => 'Quelle forme différentielle correspond à la loi d’Ampère-Maxwell dans le vide ?',
                        'choices' => [
                            ['choice_text' => '∇×B = μ0J + μ0ε0 ∂E/∂t', 'is_correct' => true],
                            ['choice_text' => '∇×B = μ0J - μ0ε0 ∂E/∂t', 'is_correct' => false],
                            ['choice_text' => '∇·B = μ0J + ε0E', 'is_correct' => false],
                            ['choice_text' => '∇×B = ε0J + μ0∂E/∂t', 'is_correct' => false],
                        ],
                        'explanation' => 'Le terme de déplacement complète la loi d’Ampère pour les champs variables.',
                    ],

                    [
                        'question' => 'Pourquoi le courant de déplacement est-il nécessaire dans l’analyse d’un condensateur en charge ?',
                        'choices' => [
                            ['choice_text' => Il permet de conserver la cohérence de la loi d’Ampère dans une région où aucun courant de conduction ne traverse l’isolant', 'is_correct' => true],
                            ['choice_text' => 'Il représente un courant mécanique de charges à travers le diélectrique', 'is_correct' => false],
                            ['choice_text' => 'Il annule toujours le champ électrique', 'is_correct' => false],
                            ['choice_text' => 'Il n’a aucun rapport avec la variation du champ électrique', 'is_correct' => false],
                        ],
                        'explanation' => 'Entre les plaques d’un condensateur en charge, la variation du champ électrique joue le rôle de courant de déplacement.',
                    ],

                    [
                        'question' => 'Quelle équation de Maxwell exprime l’absence de monopôles magnétiques ?',
                        'choices' => [
                            ['choice_text' => '∇·B = 0', 'is_correct' => true],
                            ['choice_text' => '∇·E = 0', 'is_correct' => false],
                            ['choice_text' => '∇×B = 0', 'is_correct' => false],
                            ['choice_text' => '∇×E = 0 toujours', 'is_correct' => false],
                        ],
                        'explanation' => 'La divergence du champ magnétique est nulle.',
                    ],

                    [
                        'question' => 'Quelle équation de Maxwell relie la divergence du champ électrique à la densité de charge ?',
                        'choices' => [
                            ['choice_text' => '∇·E = ρ/ε0', 'is_correct' => true],
                            ['choice_text' => '∇×E = ρ/ε0', 'is_correct' => false],
                            ['choice_text' => '∇·E = μ0ρ', 'is_correct' => false],
                            ['choice_text' => '∇·E = ε0ρ', 'is_correct' => false],
                        ],
                        'explanation' => 'C’est la forme locale de la loi de Gauss électrique.',
                    ],

                    [
                        'question' => 'Pourquoi les équations de Maxwell prédisent-elles l’existence d’ondes électromagnétiques dans le vide ?',
                        'choices' => [
                            ['choice_text' => Un champ électrique variable produit un champ magnétique et inversement', 'is_correct' => true],
                            ['choice_text' => 'Les charges doivent être présentes partout', 'is_correct' => false],
                            ['choice_text' => 'Les champs sont nécessairement statiques', 'is_correct' => false],
                            ['choice_text' => 'Le vide possède une conductivité électrique infinie', 'is_correct' => false],
                        ],
                        'explanation' => 'Le couplage entre champs variables permet une propagation autonome dans le vide.',
                    ],

                    [
                        'question' => 'Quelle vitesse les équations de Maxwell prédisent-elles pour les ondes électromagnétiques dans le vide ?',
                        'choices' => [
                            ['choice_text' => 'c = 1/√(μ0ε0)', 'is_correct' => true],
                            ['choice_text' => 'c = μ0ε0', 'is_correct' => false],
                            ['choice_text' => 'c = √(μ0ε0)', 'is_correct' => false],
                            ['choice_text' => 'c = μ0/ε0', 'is_correct' => false],
                        ],
                        'explanation' => 'La vitesse théorique issue des équations de Maxwell est c = 1/√(μ0ε0).',
                    ],

                    [
                        'question' => 'Pourquoi une onde électromagnétique dans le vide est-elle transversale ?',
                        'choices' => [
                            ['choice_text' => Les champs E et B sont perpendiculaires à la direction de propagation', 'is_correct' => true],
                            ['choice_text' => 'E et B sont tous deux parallèles à la propagation', 'is_correct' => false],
                            ['choice_text' => 'Les champs n’ont aucune direction', 'is_correct' => false],
                            ['choice_text' => 'Le champ électrique est toujours nul', 'is_correct' => false],
                        ],
                        'explanation' => 'Une onde plane dans le vide possède des champs transverses et orthogonaux entre eux.',
                    ],

                    [
                        'question' => 'Pourquoi le terme de déplacement est-il essentiel à la conservation locale de la charge dans les équations de Maxwell ?',
                        'choices' => [
                            ['choice_text' => Il rend la divergence de l’équation d’Ampère compatible avec l’équation de continuité', 'is_correct' => true],
                            ['choice_text' => 'Il supprime la densité de courant', 'is_correct' => false],
                            ['choice_text' => 'Il introduit des monopôles magnétiques', 'is_correct' => false],
                            ['choice_text' => 'Il remplace la loi de Gauss', 'is_correct' => false],
                        ],
                        'explanation' => 'Le terme ε0∂E/∂t assure la compatibilité mathématique avec la conservation de la charge.',
                    ],

                ],
            ],

            // ============================================================
            // QUIZ 5 — Ondes électromagnétiques et énergie
            // ============================================================

            [
                'title' => 'Ondes électromagnétiques et transport d’énergie',
                'description' => 'Analyse avancée de la propagation, de l’énergie électromagnétique et du vecteur de Poynting.',
                'questions' => [

                    [
                        'question' => 'Dans une onde plane dans le vide, quelle relation entre E et B est correcte ?',
                        'choices' => [
                            ['choice_text' => 'E = cB', 'is_correct' => true],
                            ['choice_text' => 'E = B/c', 'is_correct' => false],
                            ['choice_text' => 'E = c²B', 'is_correct' => false],
                            ['choice_text' => 'E = B²/c', 'is_correct' => false],
                        ],
                        'explanation' => 'Pour une onde électromagnétique plane dans le vide, E/B = c.',
                    ],

                    [
                        'question' => 'Quelle expression donne le vecteur de Poynting dans le vide ?',
                        'choices' => [
                            ['choice_text' => 'S = (1/μ0)(E × B)', 'is_correct' => true],
                            ['choice_text' => 'S = μ0(E × B)', 'is_correct' => false],
                            ['choice_text' => 'S = E · B', 'is_correct' => false],
                            ['choice_text' => 'S = E + B', 'is_correct' => false],
                        ],
                        'explanation' => 'Le vecteur de Poynting représente le flux d’énergie électromagnétique.',
                    ],

                    [
                        'question' => 'Dans une onde plane harmonique, l’intensité moyenne transportée est proportionnelle à...',
                        'choices' => [
                            ['choice_text' => 'Le carré de l’amplitude du champ électrique', 'is_correct' => true],
                            ['choice_text' => 'L’inverse de l’amplitude', 'is_correct' => false],
                            ['choice_text' => 'La fréquence seule', 'is_correct' => false],
                            ['choice_text' => 'La longueur d’onde seule', 'is_correct' => false],
                        ],
                        'explanation' => 'La densité moyenne de puissance d’une onde plane varie comme E0².',
                    ],

                    [
                        'question' => 'Si l’amplitude du champ électrique d’une onde plane est doublée, son intensité moyenne est multipliée par...',
                        'choices' => [
                            ['choice_text' => '4', 'is_correct' => true],
                            ['choice_text' => '2', 'is_correct' => false],
                            ['choice_text' => '8', 'is_correct' => false],
                            ['choice_text' => '1/2', 'is_correct' => false],
                        ],
                        'explanation' => 'L’intensité est proportionnelle au carré de l’amplitude.',
                    ],

                    [
                        'question' => 'Pourquoi une onde électromagnétique exerce-t-elle une pression sur une surface absorbante ou réfléchissante ?',
                        'choices' => [
                            ['choice_text' => Elle transporte de la quantité de mouvement qui peut être transférée à la matière', 'is_correct' => true],
                            ['choice_text' => 'Elle possède une masse au repos classique', 'is_correct' => false],
                            ['choice_text' => 'Elle est nécessairement chargée électriquement', 'is_correct' => false],
                            ['choice_text' => 'Elle est toujours accompagnée d’un courant matériel', 'is_correct' => false],
                        ],
                        'explanation' => 'Le transport de quantité de mouvement électromagnétique entraîne une pression de radiation.',
                    ],

                    [
                        'question' => 'Pourquoi la pression de radiation est-elle différente selon qu’une surface absorbe ou réfléchit la lumière ?',
                        'choices' => [
                            ['choice_text' => La quantité de mouvement transférée dépend de la variation de quantité de mouvement du rayonnement', 'is_correct' => true],
                            ['choice_text' => 'La fréquence de la lumière disparaît lors de toute réflexion', 'is_correct' => false],
                            ['choice_text' => 'Une surface réfléchissante ne reçoit aucune quantité de mouvement', 'is_correct' => false],
                            ['choice_text' => 'L’absorption ne transfère jamais de moment', 'is_correct' => false],
                        ],
                        'explanation' => 'La réflexion inverse la composante normale du moment électromagnétique, ce qui peut conduire à un transfert plus important.',
                    ],

                    [
                        'question' => 'Dans le vide, les densités moyennes d’énergie électrique et magnétique d’une onde plane sont...',
                        'choices' => [
                            ['choice_text' => 'Égales', 'is_correct' => true],
                            ['choice_text' => 'Toujours nulles', 'is_correct' => false],
                            ['choice_text' => 'Toujours dans un rapport 2', 'is_correct' => false],
                            ['choice_text' => 'Indépendantes de E et B', 'is_correct' => false],
                        ],
                        'explanation' => 'Pour une onde plane dans le vide, les contributions moyenne électrique et magnétique sont égales.',
                    ],

                    [
                        'question' => 'Pourquoi le vecteur de Poynting est-il orienté selon la propagation d’une onde plane ?',
                        'choices' => [
                            ['choice_text' => E, B et la direction de propagation forment un trièdre orthogonal cohérent', 'is_correct' => true],
                            ['choice_text' => 'E et B sont parallèles à la propagation', 'is_correct' => false],
                            ['choice_text' => 'S est indépendant des champs', 'is_correct' => false],
                            ['choice_text' => 'La propagation est toujours opposée à E × B', 'is_correct' => false],
                        ],
                        'explanation' => 'Pour une onde plane, E × B pointe dans la direction du transport d’énergie.',
                    ],

                    [
                        'question' => 'Pourquoi une onde électromagnétique peut-elle transporter de l’énergie dans le vide sans transport matériel de support ?',
                        'choices' => [
                            ['choice_text' => Les champs électrique et magnétique dynamiques se propagent mutuellement selon les équations de Maxwell', 'is_correct' => true],
                            ['choice_text' => 'Le vide est rempli de particules matérielles obligatoires', 'is_correct' => false],
                            ['choice_text' => 'Les photons ont besoin d’un milieu mécanique', 'is_correct' => false],
                            ['choice_text' => 'Le champ magnétique est toujours immobile', 'is_correct' => false],
                        ],
                        'explanation' => 'Les ondes électromagnétiques sont des solutions propagatives des équations de Maxwell dans le vide.',
                    ],

                    [
                        'question' => 'Pourquoi l’énergie d’un photon augmente-t-elle avec la fréquence ?',
                        'choices' => [
                            ['choice_text' => 'Parce que E = hf', 'is_correct' => true],
                            ['choice_text' => 'Parce que E = h/f', 'is_correct' => false],
                            ['choice_text' => 'Parce que E = f/h', 'is_correct' => false],
                            ['choice_text' => 'Parce que l’énergie ne dépend pas de la fréquence', 'is_correct' => false],
                        ],
                        'explanation' => 'L’énergie quantifiée d’un photon est proportionnelle à sa fréquence.',
                    ],

                ],
            ],

            // ============================================================
            // QUIZ 6 — Matériaux diélectriques et magnétiques
            // ============================================================

            [
                'title' => 'Milieux matériels et électromagnétisme',
                'description' => 'Étude des diélectriques, polarisation, aimantation et paramètres constitutifs.',
                'questions' => [

                    [
                        'question' => 'Que représente la polarisation électrique P dans un diélectrique ?',
                        'choices' => [
                            ['choice_text' => Le moment dipolaire électrique moyen par unité de volume', 'is_correct' => true],
                            ['choice_text' => 'Le courant libre total', 'is_correct' => false],
                            ['choice_text' => 'La densité de charge libre uniquement', 'is_correct' => false],
                            ['choice_text' => 'Le champ magnétique local', 'is_correct' => false],
                        ],
                        'explanation' => 'La polarisation P caractérise la densité volumique de moment dipolaire électrique induit ou permanent.',
                    ],

                    [
                        'question' => 'Dans un diélectrique linéaire isotrope, quelle relation simple relie P et E ?',
                        'choices' => [
                            ['choice_text' => 'P = ε0χeE', 'is_correct' => true],
                            ['choice_text' => 'P = E/ε0χe', 'is_correct' => false],
                            ['choice_text' => 'P = μ0χeE', 'is_correct' => false],
                            ['choice_text' => 'P = ε0E/χe', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans un matériau linéaire isotrope, la polarisation est proportionnelle au champ électrique via la susceptibilité électrique.',
                    ],

                    [
                        'question' => 'Quelle grandeur D est définie par D = ε0E + P ?',
                        'choices' => [
                            ['choice_text' => Le déplacement électrique', 'is_correct' => true],
                            ['choice_text' => 'Le champ magnétique', 'is_correct' => false],
                            ['choice_text' => 'La densité de courant', 'is_correct' => false],
                            ['choice_text' => 'Le potentiel électrique', 'is_correct' => false],
                        ],
                        'explanation' => 'Le déplacement électrique D permet notamment de distinguer les charges libres des charges liées.',
                    ],

                    [
                        'question' => 'Dans un milieu linéaire isotrope, quelle relation relie ε, ε0 et la permittivité relative εr ?',
                        'choices' => [
                            ['choice_text' => 'ε = εrε0', 'is_correct' => true],
                            ['choice_text' => 'ε = εr/ε0', 'is_correct' => false],
                            ['choice_text' => 'ε = ε0/εr', 'is_correct' => false],
                            ['choice_text' => 'ε = εr + ε0', 'is_correct' => false],
                        ],
                        'explanation' => 'Par définition, εr = ε/ε0.',
                    ],

                    [
                        'question' => 'Que représente l’aimantation M d’un matériau ?',
                        'choices' => [
                            ['choice_text' => Le moment magnétique moyen par unité de volume', 'is_correct' => true],
                            ['choice_text' => 'La charge électrique par unité de volume', 'is_correct' => false],
                            ['choice_text' => 'Le flux électrique total', 'is_correct' => false],
                            ['choice_text' => 'Le potentiel vecteur uniquement', 'is_correct' => false],
                        ],
                        'explanation' => 'L’aimantation décrit la densité de moments dipolaires magnétiques du matériau.',
                    ],

                    [
                        'question' => 'Quelle grandeur H est couramment introduite pour décrire un matériau magnétique ?',
                        'choices' => [
                            ['choice_text' => Le champ magnétisant H', 'is_correct' => true],
                            ['choice_text' => 'Le potentiel électrostatique V', 'is_correct' => false],
                            ['choice_text' => 'Le courant total Q', 'is_correct' => false],
                            ['choice_text' => 'La température magnétique', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans les milieux matériels, B, H et M permettent de distinguer la réponse du matériau des sources libres.',
                    ],

                    [
                        'question' => 'Quelle relation relie B, H et M dans un matériau magnétique ?',
                        'choices' => [
                            ['choice_text' => 'B = μ0(H + M)', 'is_correct' => true],
                            ['choice_text' => 'B = H + M/μ0', 'is_correct' => false],
                            ['choice_text' => 'B = μ0H - M', 'is_correct' => false],
                            ['choice_text' => 'B = μ0H/M', 'is_correct' => false],
                        ],
                        'explanation' => 'La relation générale en SI est B = μ0(H + M).',
                    ],

                    [
                        'question' => 'Dans un matériau magnétique linéaire isotrope, quelle relation simplifiée peut-on utiliser pour M ?',
                        'choices' => [
                            ['choice_text' => 'M = χmH', 'is_correct' => true],
                            ['choice_text' => 'M = χmB', 'is_correct' => false],
                            ['choice_text' => 'M = H/χm', 'is_correct' => false],
                            ['choice_text' => 'M = μ0χmB', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans un milieu linéaire, M = χmH.',
                    ],

                    [
                        'question' => 'Pourquoi les matériaux ferromagnétiques ne sont-ils pas bien décrits par une relation linéaire simple M = χmH sur toute leur plage de fonctionnement ?',
                        'choices' => [
                            ['choice_text' => Leur réponse peut être non linéaire et présenter de l’hystérésis', 'is_correct' => true],
                            ['choice_text' => 'Ils possèdent toujours une susceptibilité nulle', 'is_correct' => false],
                            ['choice_text' => 'Leur aimantation est toujours indépendante du champ', 'is_correct' => false],
                            ['choice_text' => 'Ils ne possèdent aucun moment magnétique', 'is_correct' => false],
                        ],
                        'explanation' => 'La relation B-H des matériaux ferromagnétiques peut dépendre de l’histoire du matériau.',
                    ],

                    [
                        'question' => 'Pourquoi un matériau diélectrique placé dans un condensateur peut-il augmenter sa capacité ?',
                        'choices' => [
                            ['choice_text' => La polarisation du matériau réduit le champ interne efficace pour une charge libre donnée', 'is_correct' => true],
                            ['choice_text' => 'Le diélectrique crée toujours des charges libres supplémentaires', 'is_correct' => false],
                            ['choice_text' => 'Il supprime toute différence de potentiel', 'is_correct' => false],
                            ['choice_text' => 'La capacité devient indépendante de la géométrie', 'is_correct' => false],
                        ],
                        'explanation' => 'La polarisation réduit le champ pour une charge libre donnée et augmente ainsi C = Q/V.',
                    ],

                ],
            ],

            // ============================================================
            // QUIZ 7 — Circuits AC et analyse fréquentielle
            // ============================================================

            [
                'title' => 'Circuits alternatifs et analyse fréquentielle',
                'description' => 'Analyse avancée des impédances, régimes sinusoïdaux, résonance et filtres.',
                'questions' => [

                    [
                        'question' => 'Quelle est l’impédance complexe d’une résistance idéale R ?',
                        'choices' => [
                            ['choice_text' => 'Z = R', 'is_correct' => true],
                            ['choice_text' => 'Z = jR', 'is_correct' => false],
                            ['choice_text' => 'Z = 1/(jR)', 'is_correct' => false],
                            ['choice_text' => 'Z = 0 toujours', 'is_correct' => false],
                        ],
                        'explanation' => 'Une résistance idéale possède une impédance réelle R.',
                    ],

                    [
                        'question' => 'Quelle est l’impédance complexe d’un condensateur idéal ?',
                        'choices' => [
                            ['choice_text' => 'ZC = 1/(jωC)', 'is_correct' => true],
                            ['choice_text' => 'ZC = jωC', 'is_correct' => false],
                            ['choice_text' => 'ZC = R + jωC', 'is_correct' => false],
                            ['choice_text' => 'ZC = ω/C', 'is_correct' => false],
                        ],
                        'explanation' => 'L’impédance capacitive est ZC = 1/(jωC), soit -j/(ωC).',
                    ],

                    [
                        'question' => 'Quelle est l’impédance complexe d’une inductance idéale ?',
                        'choices' => [
                            ['choice_text' => 'ZL = jωL', 'is_correct' => true],
                            ['choice_text' => 'ZL = 1/(jωL)', 'is_correct' => false],
                            ['choice_text' => 'ZL = ωL', 'is_correct' => false],
                            ['choice_text' => 'ZL = L/ω', 'is_correct' => false],
                        ],
                        'explanation' => 'Une inductance idéale possède l’impédance ZL = jωL.',
                    ],

                    [
                        'question' => 'Pour un circuit RLC série, à quelle condition la résonance électrique idéale apparaît-elle ?',
                        'choices' => [
                            ['choice_text' => 'ωL = 1/(ωC)', 'is_correct' => true],
                            ['choice_text' => 'R = L + C', 'is_correct' => false],
                            ['choice_text' => 'ωL = R', 'is_correct' => false],
                            ['choice_text' => 'ωC = 1/R', 'is_correct' => false],
                        ],
                        'explanation' => 'À la résonance, les réactances inductive et capacitive se compensent.',
                    ],

                    [
                        'question' => 'Quelle pulsation correspond à la résonance idéale d’un circuit LC ?',
                        'choices' => [
                            ['choice_text' => 'ω0 = 1/√(LC)', 'is_correct' => true],
                            ['choice_text' => 'ω0 = √(LC)', 'is_correct' => false],
                            ['choice_text' => 'ω0 = L/C', 'is_correct' => false],
                            ['choice_text' => 'ω0 = 1/(LC)', 'is_correct' => false],
                        ],
                        'explanation' => 'La condition ωL = 1/(ωC) donne ω0 = 1/√(LC).',
                    ],

                    [
                        'question' => 'Pourquoi un circuit RLC série présente-t-il un courant maximal à la résonance ?',
                        'choices' => [
                            ['choice_text' => 'Les réactances inductive et capacitive se compensent, minimisant le module de l’impédance', 'is_correct' => true],
                            ['choice_text' => 'La résistance devient nulle', 'is_correct' => false],
                            ['choice_text' => 'La tension de source devient infinie', 'is_correct' => false],
                            ['choice_text' => 'L’inductance et la capacité disparaissent', 'is_correct' => false],
                        ],
                        'explanation' => 'À la résonance série, Z = R dans le modèle idéal, donc le courant est maximal.',
                    ],

                    [
                        'question' => 'Quelle grandeur caractérise la sélectivité d’un circuit résonant ?',
                        'choices' => [
                            ['choice_text' => 'Le facteur de qualité Q', 'is_correct' => true],
                            ['choice_text' => 'La charge élémentaire e', 'is_correct' => false],
                            ['choice_text' => 'La constante de Planck h', 'is_correct' => false],
                            ['choice_text' => 'La permittivité du vide uniquement', 'is_correct' => false],
                        ],
                        'explanation' => 'Le facteur de qualité mesure notamment la finesse de la résonance.',
                    ],

                    [
                        'question' => 'Pour un circuit RLC série idéal, le facteur de qualité peut s’écrire sous une forme proportionnelle à...',
                        'choices' => [
                            ['choice_text' => 'Q = ω0L/R', 'is_correct' => true],
                            ['choice_text' => 'Q = R/(ω0L)', 'is_correct' => false],
                            ['choice_text' => 'Q = ω0R/L', 'is_correct' => false],
                            ['choice_text' => 'Q = RL/ω0', 'is_correct' => false],
                        ],
                        'explanation' => 'Pour un RLC série, Q = ω0L/R = 1/(ω0CR).',
                    ],

                    [
                        'question' => 'Pourquoi l’analyse en fréquence est-elle utile dans un système électromagnétique ?',
                        'choices' => [
                            ['choice_text' => 'Elle montre comment amplitude et phase évoluent selon la fréquence d’excitation', 'is_correct' => true],
                            ['choice_text' => 'Elle élimine toujours les transitoires', 'is_correct' => false],
                            ['choice_text' => 'Elle remplace toutes les équations temporelles', 'is_correct' => false],
                            ['choice_text' => 'Elle rend tous les composants résistifs', 'is_correct' => false],
                        ],
                        'explanation' => 'La réponse fréquentielle est fondamentale pour les filtres, résonateurs et systèmes de communication.',
                    ],

                    [
                        'question' => 'Pourquoi un condensateur bloque-t-il idéalement une composante continue à l’état permanent ?',
                        'choices' => [
                            ['choice_text' => Sa réactance devient infinie lorsque ω tend vers 0', 'is_correct' => true],
                            ['choice_text' => 'Sa résistance devient nulle à haute fréquence uniquement', 'is_correct' => false],
                            ['choice_text' => 'Le champ électrique disparaît instantanément', 'is_correct' => false],
                            ['choice_text' => 'La tension continue est toujours nulle', 'is_correct' => false],
                        ],
                        'explanation' => 'XC = 1/(ωC), donc XC → ∞ lorsque ω → 0.',
                    ],

                ],
            ],

            // ============================================================
            // QUIZ 8 — Synthèse professionnelle
            // ============================================================

            [
                'title' => 'Synthèse avancée de l’électromagnétisme',
                'description' => 'Problèmes intégrés sur champs, équations de Maxwell, ondes, matériaux et circuits.',
                'questions' => [

                    [
                        'question' => 'Une charge q = 3 μC est placée dans un champ électrique uniforme E = 4 × 10^4 N/C. Quelle est la norme de la force électrique ?',
                        'choices' => [
                            ['choice_text' => '0,12 N', 'is_correct' => true],
                            ['choice_text' => '1,2 N', 'is_correct' => false],
                            ['choice_text' => '0,012 N', 'is_correct' => false],
                            ['choice_text' => '12 N', 'is_correct' => false],
                        ],
                        'explanation' => 'F = qE = 3×10^-6 × 4×10^4 = 0,12 N.',
                    ],

                    [
                        'question' => 'Une particule de masse m et charge q entre perpendiculairement dans un champ B. Si sa vitesse est triplée, son rayon cyclotron devient...',
                        'choices' => [
                            ['choice_text' => 'Trois fois plus grand', 'is_correct' => true],
                            ['choice_text' => 'Trois fois plus petit', 'is_correct' => false],
                            ['choice_text' => 'Neuf fois plus grand', 'is_correct' => false],
                            ['choice_text' => 'Inchangé', 'is_correct' => false],
                        ],
                        'explanation' => 'r = mv/(|q|B), donc r est proportionnel à la vitesse.',
                    ],

                    [
                        'question' => 'Une surface fermée contient une charge totale Q. Si le flux électrique est ΦE, quelle relation est correcte dans le vide ?',
                        'choices' => [
                            ['choice_text' => 'ΦE = Q/ε0', 'is_correct' => true],
                            ['choice_text' => 'ΦE = ε0Q', 'is_correct' => false],
                            ['choice_text' => 'ΦE = Q²/ε0', 'is_correct' => false],
                            ['choice_text' => 'ΦE = ε0/Q', 'is_correct' => false],
                        ],
                        'explanation' => 'La loi de Gauss impose ΦE = Qint/ε0.',
                    ],

                    [
                        'question' => 'Une bobine de 500 spires voit son flux par spire varier de 2 × 10^-4 Wb en 0,01 s. Quelle est la f.e.m. moyenne induite en valeur absolue ?',
                        'choices' => [
                            ['choice_text' => '10 V', 'is_correct' => true],
                            ['choice_text' => '0,1 V', 'is_correct' => false],
                            ['choice_text' => '1 V', 'is_correct' => false],
                            ['choice_text' => '100 V', 'is_correct' => false],
                        ],
                        'explanation' => '|ε| = N|ΔΦ|/Δt = 500 × 2×10^-4 / 0,01 = 10 V.',
                    ],

                    [
                        'question' => 'Dans le vide, une onde électromagnétique possède E0 = 300 V/m. Quelle est approximativement l’amplitude B0 ?',
                        'choices' => [
                            ['choice_text' => '1 × 10^-6 T', 'is_correct' => true],
                            ['choice_text' => '9 × 10^4 T', 'is_correct' => false],
                            ['choice_text' => '3 × 10^-8 T', 'is_correct' => false],
                            ['choice_text' => '100 T', 'is_correct' => false],
                        ],
                        'explanation' => 'B0 = E0/c = 300/(3×10^8) = 1×10^-6 T.',
                    ],

                    [
                        'question' => 'Pourquoi une onde électromagnétique peut-elle se propager dans le vide alors qu’une onde sonore ne le peut pas ?',
                        'choices' => [
                            ['choice_text' => 'L’onde électromagnétique est soutenue par le couplage des champs E et B et ne nécessite pas de milieu matériel', 'is_correct' => true],
                            ['choice_text' => 'Le son possède une vitesse nulle dans tous les milieux', 'is_correct' => false],
                            ['choice_text' => 'Le vide contient nécessairement un gaz invisible', 'is_correct' => false],
                            ['choice_text' => 'La lumière est une onde mécanique', 'is_correct' => false],
                        ],
                        'explanation' => 'Les ondes électromagnétiques sont des solutions propagatives des équations de Maxwell dans le vide, contrairement aux ondes mécaniques.',
                    ],

                    [
                        'question' => 'Pourquoi la condition ∇·B = 0 ne signifie-t-elle pas que B est partout nul ?',
                        'choices' => [
                            ['choice_text' => Une divergence nulle signifie absence de sources magnétiques locales, pas absence de champ', 'is_correct' => true],
                            ['choice_text' => 'La divergence est toujours égale au champ', 'is_correct' => false],
                            ['choice_text' => 'B est nul uniquement à l’extérieur des aimants', 'is_correct' => false],
                            ['choice_text' => 'La divergence de tout champ non nul est nécessairement non nulle', 'is_correct' => false],
                        ],
                        'explanation' => 'Un champ peut être non nul tout en ayant une divergence nulle, comme un champ magnétique classique.',
                    ],

                    [
                        'question' => 'Pourquoi les équations de Maxwell permettent-elles de relier électrostatique, magnétostatique et ondes électromagnétiques dans un même cadre ?',
                        'choices' => [
                            ['choice_text' => 'Elles décrivent à la fois les sources, les couplages et les variations temporelles des champs', 'is_correct' => true],
                            ['choice_text' => 'Elles ne concernent que les champs constants', 'is_correct' => false],
                            ['choice_text' => 'Elles excluent totalement les charges', 'is_correct' => false],
                            ['choice_text' => 'Elles ne peuvent pas décrire les ondes', 'is_correct' => false],
                        ],
                        'explanation' => 'Les quatre équations de Maxwell fournissent un cadre unifié pour les champs électriques et magnétiques.',
                    ],

                    [
                        'question' => 'Pourquoi les conditions aux limites sont-elles essentielles lorsqu’un champ électromagnétique traverse une interface entre deux matériaux ?',
                        'choices' => [
                            ['choice_text' => 'Elles déterminent comment les composantes des champs se raccordent en présence de charges et courants surfaciques', 'is_correct' => true],
                            ['choice_text' => 'Les champs peuvent toujours être raccordés arbitrairement', 'is_correct' => false],
                            ['choice_text' => 'Les matériaux ne modifient jamais les champs', 'is_correct' => false],
                            ['choice_text' => 'Les interfaces suppriment toujours le champ magnétique', 'is_correct' => false],
                        ],
                        'explanation' => 'Les conditions aux limites dérivent des équations intégrales de Maxwell et gouvernent réflexion, transmission et réfraction.',
                    ],

                    [
                        'question' => 'Pourquoi l’électromagnétisme professionnel exige-t-il de combiner une description locale et globale des champs ?',
                        'choices' => [
                            ['choice_text' => 'Les formes différentielles décrivent les comportements locaux tandis que les formes intégrales exploitent souvent les géométries et flux globaux', 'is_correct' => true],
                            ['choice_text' => 'Les deux descriptions sont contradictoires', 'is_correct' => false],
                            ['choice_text' => 'La forme différentielle ne concerne jamais les champs', 'is_correct' => false],
                            ['choice_text' => 'La forme intégrale ne peut être utilisée qu’en électrostatique', 'is_correct' => false],
                        ],
                        'explanation' => 'Les formulations intégrales et différentielles sont complémentaires et reliées par les théorèmes vectoriels.',
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

                // Mélange des choix pour éviter toute position
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