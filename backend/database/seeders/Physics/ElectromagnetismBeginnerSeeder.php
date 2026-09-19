<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class ElectromagnetismBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'electromagnetism')->firstOrFail();

        $quizzes = [

            // ============================================================
            // QUIZ 1 — Charge électrique et loi de Coulomb
            // ============================================================

            [
                'title' => 'Charge électrique et loi de Coulomb',
                'description' => 'Introduction aux charges électriques, aux interactions électrostatiques et à la loi de Coulomb.',
                'questions' => [

                    [
                        'question' => 'Quelle propriété caractérise une charge électrique ?',
                        'choices' => [
                            ['choice_text' => 'Elle peut être positive ou négative et produit des interactions électriques', 'is_correct' => true],
                            ['choice_text' => 'Elle est toujours positive', 'is_correct' => false],
                            ['choice_text' => 'Elle n’agit que sur les objets massifs', 'is_correct' => false],
                            ['choice_text' => 'Elle est identique à la masse', 'is_correct' => false],
                        ],
                        'explanation' => 'La charge électrique est une propriété physique fondamentale pouvant être positive ou négative.',
                    ],

                    [
                        'question' => 'Quelle est l’unité SI de la charge électrique ?',
                        'choices' => [
                            ['choice_text' => 'Le coulomb', 'is_correct' => true],
                            ['choice_text' => 'Le volt', 'is_correct' => false],
                            ['choice_text' => 'L’ampère', 'is_correct' => false],
                            ['choice_text' => 'Le tesla', 'is_correct' => false],
                        ],
                        'explanation' => 'L’unité SI de la charge électrique est le coulomb (C).',
                    ],

                    [
                        'question' => 'Que se passe-t-il entre deux charges de même signe ?',
                        'choices' => [
                            ['choice_text' => 'Elles se repoussent', 'is_correct' => true],
                            ['choice_text' => 'Elles s’attirent', 'is_correct' => false],
                            ['choice_text' => 'Elles ne produisent aucune force', 'is_correct' => false],
                            ['choice_text' => 'Elles deviennent automatiquement neutres', 'is_correct' => false],
                        ],
                        'explanation' => 'Deux charges de même signe exercent l’une sur l’autre une force répulsive.',
                    ],

                    [
                        'question' => 'Que se passe-t-il entre deux charges de signes opposés ?',
                        'choices' => [
                            ['choice_text' => 'Elles s’attirent', 'is_correct' => true],
                            ['choice_text' => 'Elles se repoussent', 'is_correct' => false],
                            ['choice_text' => 'La force entre elles est toujours nulle', 'is_correct' => false],
                            ['choice_text' => 'Elles acquièrent nécessairement la même charge', 'is_correct' => false],
                        ],
                        'explanation' => 'Les charges de signes opposés s’attirent.',
                    ],

                    [
                        'question' => 'Quelle loi permet de calculer la force électrostatique entre deux charges ponctuelles ?',
                        'choices' => [
                            ['choice_text' => 'La loi de Coulomb', 'is_correct' => true],
                            ['choice_text' => 'La loi d’Ohm', 'is_correct' => false],
                            ['choice_text' => 'La loi de Faraday', 'is_correct' => false],
                            ['choice_text' => 'La loi de Hooke', 'is_correct' => false],
                        ],
                        'explanation' => 'La loi de Coulomb décrit l’interaction électrostatique entre charges ponctuelles.',
                    ],

                    [
                        'question' => 'Comment varie la norme de la force électrostatique entre deux charges ponctuelles lorsque leur distance est multipliée par 2 ?',
                        'choices' => [
                            ['choice_text' => 'Elle est divisée par 4', 'is_correct' => true],
                            ['choice_text' => 'Elle est divisée par 2', 'is_correct' => false],
                            ['choice_text' => 'Elle est multipliée par 2', 'is_correct' => false],
                            ['choice_text' => 'Elle reste constante', 'is_correct' => false],
                        ],
                        'explanation' => 'La loi de Coulomb donne F proportionnelle à 1/r². Doubler r divise donc F par quatre.',
                    ],

                    [
                        'question' => 'Comment varie la force électrostatique si l’une des deux charges est multipliée par 3, toutes les autres grandeurs restant constantes ?',
                        'choices' => [
                            ['choice_text' => 'La force est multipliée par 3', 'is_correct' => true],
                            ['choice_text' => 'La force est divisée par 3', 'is_correct' => false],
                            ['choice_text' => 'La force est multipliée par 9', 'is_correct' => false],
                            ['choice_text' => 'La force reste inchangée', 'is_correct' => false],
                        ],
                        'explanation' => 'La force de Coulomb est proportionnelle au produit q1q2.',
                    ],

                    [
                        'question' => 'Quelle direction possède la force électrostatique entre deux charges ponctuelles ?',
                        'choices' => [
                            ['choice_text' => 'Elle est portée par la droite reliant les deux charges', 'is_correct' => true],
                            ['choice_text' => 'Elle est toujours perpendiculaire à cette droite', 'is_correct' => false],
                            ['choice_text' => 'Elle est toujours verticale', 'is_correct' => false],
                            ['choice_text' => 'Elle est indépendante de la position des charges', 'is_correct' => false],
                        ],
                        'explanation' => 'Pour des charges ponctuelles, la force électrostatique est radiale selon la droite qui les relie.',
                    ],

                    [
                        'question' => 'Quelle valeur représente approximativement la charge élémentaire en valeur absolue ?',
                        'choices' => [
                            ['choice_text' => '1,6 × 10^-19 C', 'is_correct' => true],
                            ['choice_text' => '1,6 × 10^-9 C', 'is_correct' => false],
                            ['choice_text' => '9,8 × 10^-19 C', 'is_correct' => false],
                            ['choice_text' => '6,67 × 10^-11 C', 'is_correct' => false],
                        ],
                        'explanation' => 'La charge élémentaire a une valeur absolue d’environ 1,6 × 10^-19 C.',
                    ],

                    [
                        'question' => 'Pourquoi dit-on que la charge électrique est quantifiée ?',
                        'choices' => [
                            ['choice_text' => 'Elle apparaît généralement comme un multiple entier de la charge élémentaire dans les systèmes usuels', 'is_correct' => true],
                            ['choice_text' => 'Elle est toujours égale à 1 C', 'is_correct' => false],
                            ['choice_text' => 'Elle ne peut prendre que des valeurs positives', 'is_correct' => false],
                            ['choice_text' => 'Elle est toujours continue sans unité minimale', 'is_correct' => false],
                        ],
                        'explanation' => 'La charge électrique est quantifiée et la charge élémentaire constitue une unité fondamentale de charge.',
                    ],
                ],
            ],

            // ============================================================
            // QUIZ 2 — Champ électrique
            // ============================================================

            [
                'title' => 'Champ électrique',
                'description' => 'Introduction à la notion de champ électrique, aux lignes de champ et à la force exercée sur une charge.',
                'questions' => [

                    [
                        'question' => 'Qu’est-ce que le champ électrique en un point ?',
                        'choices' => [
                            ['choice_text' => 'Une grandeur vectorielle décrivant la force électrique par unité de charge positive test', 'is_correct' => true],
                            ['choice_text' => 'Une énergie totale exprimée en joules', 'is_correct' => false],
                            ['choice_text' => 'Une masse par unité de volume', 'is_correct' => false],
                            ['choice_text' => 'Une vitesse de propagation mécanique', 'is_correct' => false],
                        ],
                        'explanation' => 'Le champ électrique est défini par E = F/q pour une charge test positive suffisamment petite.',
                    ],

                    [
                        'question' => 'Quelle est l’unité SI du champ électrique ?',
                        'choices' => [
                            ['choice_text' => 'N/C', 'is_correct' => true],
                            ['choice_text' => 'C/N', 'is_correct' => false],
                            ['choice_text' => 'J/C²', 'is_correct' => false],
                            ['choice_text' => 'T/C', 'is_correct' => false],
                        ],
                        'explanation' => 'Le champ électrique s’exprime en newtons par coulomb. Il peut aussi s’exprimer en volts par mètre.',
                    ],

                    [
                        'question' => 'Dans quelle direction pointe le champ électrique créé par une charge ponctuelle positive ?',
                        'choices' => [
                            ['choice_text' => 'Radialement vers l’extérieur de la charge', 'is_correct' => true],
                            ['choice_text' => 'Radialement vers la charge', 'is_correct' => false],
                            ['choice_text' => 'Toujours perpendiculairement au rayon', 'is_correct' => false],
                            ['choice_text' => 'La direction est toujours nulle', 'is_correct' => false],
                        ],
                        'explanation' => 'Le champ d’une charge positive sort radialement de la charge.',
                    ],

                    [
                        'question' => 'Dans quelle direction pointe le champ électrique créé par une charge ponctuelle négative ?',
                        'choices' => [
                            ['choice_text' => 'Vers la charge', 'is_correct' => true],
                            ['choice_text' => 'À l’opposé de la charge', 'is_correct' => false],
                            ['choice_text' => 'Toujours tangentiellement', 'is_correct' => false],
                            ['choice_text' => 'Il n’a aucune direction', 'is_correct' => false],
                        ],
                        'explanation' => 'Les lignes de champ convergent vers une charge négative.',
                    ],

                    [
                        'question' => 'Quelle relation relie la force électrique F exercée sur une charge q dans un champ E ?',
                        'choices' => [
                            ['choice_text' => 'F = qE', 'is_correct' => true],
                            ['choice_text' => 'F = E/q', 'is_correct' => false],
                            ['choice_text' => 'F = q/E', 'is_correct' => false],
                            ['choice_text' => 'F = q + E', 'is_correct' => false],
                        ],
                        'explanation' => 'La force électrique sur une charge est F = qE.',
                    ],

                    [
                        'question' => 'Si une charge négative est placée dans un champ électrique uniforme, la force électrique est dirigée...',
                        'choices' => [
                            ['choice_text' => 'Dans la direction opposée au champ', 'is_correct' => true],
                            ['choice_text' => 'Dans la même direction que le champ', 'is_correct' => false],
                            ['choice_text' => 'Toujours perpendiculairement au champ', 'is_correct' => false],
                            ['choice_text' => 'Elle est nécessairement nulle', 'is_correct' => false],
                        ],
                        'explanation' => 'Comme F = qE et q < 0, la force est opposée au vecteur champ.',
                    ],

                    [
                        'question' => 'Que représentent les lignes de champ électrique ?',
                        'choices' => [
                            ['choice_text' => 'Une représentation graphique de la direction du champ', 'is_correct' => true],
                            ['choice_text' => 'Des trajectoires obligatoires des charges dans tous les cas', 'is_correct' => false],
                            ['choice_text' => 'Des surfaces équipotentielles', 'is_correct' => false],
                            ['choice_text' => 'Des lignes de courant électrique dans un conducteur', 'is_correct' => false],
                        ],
                        'explanation' => 'Les lignes de champ permettent de visualiser la direction et qualitativement l’intensité du champ.',
                    ],

                    [
                        'question' => 'Dans un champ électrique uniforme, les lignes de champ sont idéalement...',
                        'choices' => [
                            ['choice_text' => 'Parallèles et régulièrement espacées', 'is_correct' => true],
                            ['choice_text' => 'Toujours circulaires', 'is_correct' => false],
                            ['choice_text' => 'Concentrées en un seul point', 'is_correct' => false],
                            ['choice_text' => 'Toujours perpendiculaires entre elles', 'is_correct' => false],
                        ],
                        'explanation' => 'Un champ uniforme possède même direction, même sens et même intensité en tout point.',
                    ],

                    [
                        'question' => 'Comment varie le champ créé par une charge ponctuelle lorsqu’on s’éloigne de la charge ?',
                        'choices' => [
                            ['choice_text' => 'Il diminue comme 1/r²', 'is_correct' => true],
                            ['choice_text' => 'Il augmente comme r²', 'is_correct' => false],
                            ['choice_text' => 'Il varie comme r', 'is_correct' => false],
                            ['choice_text' => 'Il reste toujours constant', 'is_correct' => false],
                        ],
                        'explanation' => 'Le champ d’une charge ponctuelle vérifie E = k|q|/r².',
                    ],

                    [
                        'question' => 'Pourquoi le champ électrique résultant de plusieurs charges est-il calculé par addition vectorielle ?',
                        'choices' => [
                            ['choice_text' => 'Le principe de superposition permet d’additionner les contributions de chaque charge', 'is_correct' => true],
                            ['choice_text' => 'Les champs sont toujours scalaires', 'is_correct' => false],
                            ['choice_text' => 'Une seule charge peut créer un champ', 'is_correct' => false],
                            ['choice_text' => 'Les charges s’annulent toujours mutuellement', 'is_correct' => false],
                        ],
                        'explanation' => 'Le champ total est la somme vectorielle des champs produits individuellement par toutes les charges.',
                    ],
                ],
            ],

            // ============================================================
            // QUIZ 3 — Potentiel électrique et tension
            // ============================================================

            [
                'title' => 'Potentiel électrique et différence de potentiel',
                'description' => 'Introduction au potentiel électrique, à la tension et à l’énergie potentielle électrique.',
                'questions' => [

                    [
                        'question' => 'Qu’est-ce que le potentiel électrique en un point ?',
                        'choices' => [
                            ['choice_text' => 'L’énergie potentielle électrique par unité de charge', 'is_correct' => true],
                            ['choice_text' => 'La force électrique totale', 'is_correct' => false],
                            ['choice_text' => 'La puissance par unité de courant', 'is_correct' => false],
                            ['choice_text' => 'La charge totale du système', 'is_correct' => false],
                        ],
                        'explanation' => 'Le potentiel électrique est défini comme l’énergie potentielle électrique par unité de charge.',
                    ],

                    [
                        'question' => 'Quelle est l’unité SI du potentiel électrique ?',
                        'choices' => [
                            ['choice_text' => 'Le volt', 'is_correct' => true],
                            ['choice_text' => 'Le coulomb', 'is_correct' => false],
                            ['choice_text' => 'Le tesla', 'is_correct' => false],
                            ['choice_text' => 'Le watt', 'is_correct' => false],
                        ],
                        'explanation' => 'Le potentiel électrique et la différence de potentiel s’expriment en volts.',
                    ],

                    [
                        'question' => 'Quelle relation relie l’énergie potentielle électrique Ue, la charge q et le potentiel V ?',
                        'choices' => [
                            ['choice_text' => 'Ue = qV', 'is_correct' => true],
                            ['choice_text' => 'Ue = V/q', 'is_correct' => false],
                            ['choice_text' => 'Ue = q/V', 'is_correct' => false],
                            ['choice_text' => 'Ue = q + V', 'is_correct' => false],
                        ],
                        'explanation' => 'Par définition du potentiel, l’énergie potentielle électrique vaut Ue = qV.',
                    ],

                    [
                        'question' => 'Quelle grandeur mesure la différence de potentiel entre deux points ?',
                        'choices' => [
                            ['choice_text' => 'La tension électrique', 'is_correct' => true],
                            ['choice_text' => 'La résistance mécanique', 'is_correct' => false],
                            ['choice_text' => 'Le champ magnétique', 'is_correct' => false],
                            ['choice_text' => 'La fréquence électrique', 'is_correct' => false],
                        ],
                        'explanation' => 'La tension électrique est une différence de potentiel entre deux points.',
                    ],

                    [
                        'question' => 'Quelle relation locale relie le champ électrique E au potentiel V dans une dimension ?',
                        'choices' => [
                            ['choice_text' => 'E = -dV/dx', 'is_correct' => true],
                            ['choice_text' => 'E = dV/dx', 'is_correct' => false],
                            ['choice_text' => 'E = Vx', 'is_correct' => false],
                            ['choice_text' => 'E = x/V', 'is_correct' => false],
                        ],
                        'explanation' => 'Le champ électrique est l’opposé du gradient du potentiel : E = -∇V.',
                    ],

                    [
                        'question' => 'Quel signe possède généralement le potentiel d’une charge ponctuelle positive si la référence V = 0 est prise à l’infini ?',
                        'choices' => [
                            ['choice_text' => 'Positif', 'is_correct' => true],
                            ['choice_text' => 'Négatif', 'is_correct' => false],
                            ['choice_text' => 'Toujours nul', 'is_correct' => false],
                            ['choice_text' => 'Il est nécessairement imaginaire', 'is_correct' => false],
                        ],
                        'explanation' => 'Pour une charge positive, V = kq/r est positif avec la convention V(∞)=0.',
                    ],

                    [
                        'question' => 'Quel signe possède le potentiel d’une charge ponctuelle négative avec la même référence ?',
                        'choices' => [
                            ['choice_text' => 'Négatif', 'is_correct' => true],
                            ['choice_text' => 'Positif', 'is_correct' => false],
                            ['choice_text' => 'Toujours nul', 'is_correct' => false],
                            ['choice_text' => 'Toujours égal à 1 V', 'is_correct' => false],
                        ],
                        'explanation' => 'Pour q < 0, V = kq/r est négatif avec V(∞)=0.',
                    ],

                    [
                        'question' => 'Une charge positive se déplace spontanément dans un champ électrique uniforme. Dans quelle direction tend-elle à se déplacer si aucune autre force n’agit ?',
                        'choices' => [
                            ['choice_text' => 'Dans le sens du champ électrique', 'is_correct' => true],
                            ['choice_text' => 'Dans le sens opposé au champ', 'is_correct' => false],
                            ['choice_text' => 'Toujours perpendiculairement au champ', 'is_correct' => false],
                            ['choice_text' => 'Elle reste nécessairement immobile', 'is_correct' => false],
                        ],
                        'explanation' => 'Une charge positive subit une force F = qE dans le sens du champ.',
                    ],

                    [
                        'question' => 'Une charge négative est déplacée dans le sens du champ électrique. Son énergie potentielle électrique...',
                        'choices' => [
                            ['choice_text' => 'Augmente', 'is_correct' => true],
                            ['choice_text' => 'Diminue toujours', 'is_correct' => false],
                            ['choice_text' => 'Reste toujours constante', 'is_correct' => false],
                            ['choice_text' => 'Devient nécessairement nulle', 'is_correct' => false],
                        ],
                        'explanation' => 'Le potentiel diminue dans le sens du champ. Comme Ue = qV avec q négatif, Ue augmente lorsque V diminue.',
                    ],

                    [
                        'question' => 'Pourquoi deux points ayant le même potentiel sont-ils dits équipotentiels ?',
                        'choices' => [
                            ['choice_text' => 'Le potentiel électrique y possède la même valeur', 'is_correct' => true],
                            ['choice_text' => 'Le champ électrique y est toujours nul', 'is_correct' => false],
                            ['choice_text' => 'Les charges y sont nécessairement identiques', 'is_correct' => false],
                            ['choice_text' => 'La distance entre eux est nécessairement nulle', 'is_correct' => false],
                        ],
                        'explanation' => 'Une équipotentielle est un ensemble de points de même potentiel électrique.',
                    ],
                ],
            ],

            // ============================================================
            // QUIZ 4 — Courant électrique et circuits
            // ============================================================

            [
                'title' => 'Courant électrique et circuits simples',
                'description' => 'Introduction au courant électrique, à la résistance, à la loi d’Ohm et aux circuits élémentaires.',
                'questions' => [

                    [
                        'question' => 'Quelle grandeur représente le débit de charge électrique à travers une section ?',
                        'choices' => [
                            ['choice_text' => 'Le courant électrique', 'is_correct' => true],
                            ['choice_text' => 'La résistance', 'is_correct' => false],
                            ['choice_text' => 'La tension', 'is_correct' => false],
                            ['choice_text' => 'La capacitance', 'is_correct' => false],
                        ],
                        'explanation' => 'Le courant est défini par I = dQ/dt.',
                    ],

                    [
                        'question' => 'Quelle est l’unité SI du courant électrique ?',
                        'choices' => [
                            ['choice_text' => 'L’ampère', 'is_correct' => true],
                            ['choice_text' => 'Le volt', 'is_correct' => false],
                            ['choice_text' => 'Le coulomb', 'is_correct' => false],
                            ['choice_text' => 'L’ohm', 'is_correct' => false],
                        ],
                        'explanation' => 'L’unité SI du courant est l’ampère (A).',
                    ],

                    [
                        'question' => 'Quelle relation définit le courant moyen lorsque une charge ΔQ traverse une section pendant Δt ?',
                        'choices' => [
                            ['choice_text' => 'I = ΔQ/Δt', 'is_correct' => true],
                            ['choice_text' => 'I = Δt/ΔQ', 'is_correct' => false],
                            ['choice_text' => 'I = ΔQ × Δt', 'is_correct' => false],
                            ['choice_text' => 'I = ΔQ + Δt', 'is_correct' => false],
                        ],
                        'explanation' => 'Le courant est le débit de charge : I = ΔQ/Δt.',
                    ],

                    [
                        'question' => 'Quelle loi relie la tension, le courant et la résistance d’un conducteur ohmique ?',
                        'choices' => [
                            ['choice_text' => 'La loi d’Ohm : V = RI', 'is_correct' => true],
                            ['choice_text' => 'La loi de Coulomb : V = q/r²', 'is_correct' => false],
                            ['choice_text' => 'La loi de Faraday : V = B/I', 'is_correct' => false],
                            ['choice_text' => 'La loi de Newton : V = ma', 'is_correct' => false],
                        ],
                        'explanation' => 'Pour un conducteur ohmique, la tension est proportionnelle au courant : V = RI.',
                    ],

                    [
                        'question' => 'Quelle est l’unité SI de la résistance électrique ?',
                        'choices' => [
                            ['choice_text' => 'L’ohm', 'is_correct' => true],
                            ['choice_text' => 'Le watt', 'is_correct' => false],
                            ['choice_text' => 'Le coulomb', 'is_correct' => false],
                            ['choice_text' => 'Le tesla', 'is_correct' => false],
                        ],
                        'explanation' => 'La résistance électrique s’exprime en ohms (Ω).',
                    ],

                    [
                        'question' => 'Un résistor de 5 Ω est soumis à une tension de 10 V. Quel courant le traverse ?',
                        'choices' => [
                            ['choice_text' => '2 A', 'is_correct' => true],
                            ['choice_text' => '0,5 A', 'is_correct' => false],
                            ['choice_text' => '50 A', 'is_correct' => false],
                            ['choice_text' => '15 A', 'is_correct' => false],
                        ],
                        'explanation' => 'I = V/R = 10/5 = 2 A.',
                    ],

                    [
                        'question' => 'Deux résistances de 4 Ω et 6 Ω sont montées en série. Quelle est la résistance équivalente ?',
                        'choices' => [
                            ['choice_text' => '10 Ω', 'is_correct' => true],
                            ['choice_text' => '2,4 Ω', 'is_correct' => false],
                            ['choice_text' => '24 Ω', 'is_correct' => false],
                            ['choice_text' => '1 Ω', 'is_correct' => false],
                        ],
                        'explanation' => 'En série, les résistances s’additionnent : Req = 4 + 6 = 10 Ω.',
                    ],

                    [
                        'question' => 'Deux résistances de 6 Ω et 3 Ω sont montées en parallèle. Quelle est leur résistance équivalente ?',
                        'choices' => [
                            ['choice_text' => '2 Ω', 'is_correct' => true],
                            ['choice_text' => '9 Ω', 'is_correct' => false],
                            ['choice_text' => '3 Ω', 'is_correct' => false],
                            ['choice_text' => '18 Ω', 'is_correct' => false],
                        ],
                        'explanation' => '1/Req = 1/6 + 1/3 = 1/2, donc Req = 2 Ω.',
                    ],

                    [
                        'question' => 'Dans un circuit en série, le courant est-il identique à travers chaque élément idéal ?',
                        'choices' => [
                            ['choice_text' => 'Oui, dans un circuit série sans branchement', 'is_correct' => true],
                            ['choice_text' => 'Non, il devient nécessairement différent dans chaque composant', 'is_correct' => false],
                            ['choice_text' => 'Il est toujours nul', 'is_correct' => false],
                            ['choice_text' => 'Il dépend uniquement de la longueur des fils', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans une branche série, le même courant traverse successivement tous les composants.',
                    ],

                    [
                        'question' => 'Dans un circuit parallèle idéal, la tension aux bornes de branches connectées aux mêmes deux nœuds est...',
                        'choices' => [
                            ['choice_text' => 'La même', 'is_correct' => true],
                            ['choice_text' => 'Toujours nulle', 'is_correct' => false],
                            ['choice_text' => 'Toujours différente', 'is_correct' => false],
                            ['choice_text' => 'Proportionnelle à la longueur du fil', 'is_correct' => false],
                        ],
                        'explanation' => 'Toutes les branches entre les mêmes deux nœuds possèdent la même différence de potentiel.',
                    ],
                ],
            ],

            // ============================================================
            // QUIZ 5 — Puissance et énergie électrique
            // ============================================================

            [
                'title' => 'Puissance et énergie électrique',
                'description' => 'Étude de la puissance électrique, de l’énergie consommée et de l’effet Joule.',
                'questions' => [

                    [
                        'question' => 'Quelle relation donne la puissance électrique absorbée par un dipôle soumis à une tension V et traversé par un courant I ?',
                        'choices' => [
                            ['choice_text' => 'P = VI', 'is_correct' => true],
                            ['choice_text' => 'P = V/I', 'is_correct' => false],
                            ['choice_text' => 'P = I/V', 'is_correct' => false],
                            ['choice_text' => 'P = V + I', 'is_correct' => false],
                        ],
                        'explanation' => 'La puissance électrique instantanée est p = vi dans le cas usuel.',
                    ],

                    [
                        'question' => 'Quelle est l’unité SI de la puissance ?',
                        'choices' => [
                            ['choice_text' => 'Le watt', 'is_correct' => true],
                            ['choice_text' => 'Le joule', 'is_correct' => false],
                            ['choice_text' => 'L’ampère', 'is_correct' => false],
                            ['choice_text' => 'L’ohm', 'is_correct' => false],
                        ],
                        'explanation' => 'La puissance s’exprime en watts (W).',
                    ],

                    [
                        'question' => 'Un appareil fonctionne sous 12 V avec un courant de 3 A. Quelle est sa puissance ?',
                        'choices' => [
                            ['choice_text' => '36 W', 'is_correct' => true],
                            ['choice_text' => '4 W', 'is_correct' => false],
                            ['choice_text' => '15 W', 'is_correct' => false],
                            ['choice_text' => '9 W', 'is_correct' => false],
                        ],
                        'explanation' => 'P = VI = 12 × 3 = 36 W.',
                    ],

                    [
                        'question' => 'Quelle relation donne l’énergie consommée par un appareil de puissance constante P pendant une durée t ?',
                        'choices' => [
                            ['choice_text' => 'E = Pt', 'is_correct' => true],
                            ['choice_text' => 'E = P/t', 'is_correct' => false],
                            ['choice_text' => 'E = P + t', 'is_correct' => false],
                            ['choice_text' => 'E = P²t', 'is_correct' => false],
                        ],
                        'explanation' => 'Pour une puissance constante, l’énergie est E = Pt.',
                    ],

                    [
                        'question' => 'Quelle est l’unité SI de l’énergie électrique ?',
                        'choices' => [
                            ['choice_text' => 'Le joule', 'is_correct' => true],
                            ['choice_text' => 'Le watt', 'is_correct' => false],
                            ['choice_text' => 'Le volt', 'is_correct' => false],
                            ['choice_text' => 'L’ampère', 'is_correct' => false],
                        ],
                        'explanation' => 'L’énergie dans le SI s’exprime en joules (J).',
                    ],

                    [
                        'question' => 'Quelle expression représente la puissance dissipée par effet Joule dans une résistance R traversée par un courant I ?',
                        'choices' => [
                            ['choice_text' => 'P = I²R', 'is_correct' => true],
                            ['choice_text' => 'P = IR²', 'is_correct' => false],
                            ['choice_text' => 'P = I/R', 'is_correct' => false],
                            ['choice_text' => 'P = R/I²', 'is_correct' => false],
                        ],
                        'explanation' => 'En combinant P = VI et V = RI, on obtient P = I²R.',
                    ],

                    [
                        'question' => 'Quelle autre expression de la puissance dissipée par un résistor peut être obtenue à partir de V et R ?',
                        'choices' => [
                            ['choice_text' => 'P = V²/R', 'is_correct' => true],
                            ['choice_text' => 'P = VR²', 'is_correct' => false],
                            ['choice_text' => 'P = R/V²', 'is_correct' => false],
                            ['choice_text' => 'P = V/R²', 'is_correct' => false],
                        ],
                        'explanation' => 'En utilisant I = V/R dans P = VI, on obtient P = V²/R.',
                    ],

                    [
                        'question' => 'Un résistor de 10 Ω est traversé par un courant de 2 A. Quelle puissance dissipe-t-il ?',
                        'choices' => [
                            ['choice_text' => '40 W', 'is_correct' => true],
                            ['choice_text' => '20 W', 'is_correct' => false],
                            ['choice_text' => '5 W', 'is_correct' => false],
                            ['choice_text' => '100 W', 'is_correct' => false],
                        ],
                        'explanation' => 'P = I²R = 2² × 10 = 40 W.',
                    ],

                    [
                        'question' => 'Pourquoi un appareil électrique consomme-t-il de l’énergie lorsqu’il fonctionne pendant une durée non nulle ?',
                        'choices' => [
                            ['choice_text' => 'Une puissance non nulle intégrée dans le temps correspond à une énergie transférée', 'is_correct' => true],
                            ['choice_text' => 'La puissance et l’énergie sont exactement la même grandeur', 'is_correct' => false],
                            ['choice_text' => 'L’énergie ne dépend jamais du temps', 'is_correct' => false],
                            ['choice_text' => 'Le courant électrique détruit la charge', 'is_correct' => false],
                        ],
                        'explanation' => 'L’énergie transférée est l’intégrale temporelle de la puissance.',
                    ],

                    [
                        'question' => 'Si la puissance d’un appareil est doublée pendant la même durée de fonctionnement, l’énergie consommée est...',
                        'choices' => [
                            ['choice_text' => 'Doublée', 'is_correct' => true],
                            ['choice_text' => 'Divisée par deux', 'is_correct' => false],
                            ['choice_text' => 'Multipliée par quatre', 'is_correct' => false],
                            ['choice_text' => 'Inchangée', 'is_correct' => false],
                        ],
                        'explanation' => 'À durée constante, E = Pt est proportionnelle à P.',
                    ],
                ],
            ],

            // ============================================================
            // QUIZ 6 — Champ magnétique
            // ============================================================

            [
                'title' => 'Champ magnétique',
                'description' => 'Introduction au champ magnétique, aux aimants et aux forces exercées sur les charges en mouvement.',
                'questions' => [

                    [
                        'question' => 'Quelle unité SI mesure le champ magnétique B ?',
                        'choices' => [
                            ['choice_text' => 'Le tesla', 'is_correct' => true],
                            ['choice_text' => 'Le volt', 'is_correct' => false],
                            ['choice_text' => 'Le coulomb', 'is_correct' => false],
                            ['choice_text' => 'L’ampère', 'is_correct' => false],
                        ],
                        'explanation' => 'Le champ magnétique se mesure en teslas (T).',
                    ],

                    [
                        'question' => 'Un aimant possède généralement deux pôles appelés...',
                        'choices' => [
                            ['choice_text' => 'Nord et Sud', 'is_correct' => true],
                            ['choice_text' => 'Positif et négatif', 'is_correct' => false],
                            ['choice_text' => 'Rouge et bleu uniquement', 'is_correct' => false],
                            ['choice_text' => 'Alpha et bêta', 'is_correct' => false],
                        ],
                        'explanation' => 'Les deux pôles magnétiques sont conventionnellement appelés Nord et Sud.',
                    ],

                    [
                        'question' => 'Que se passe-t-il entre deux pôles magnétiques de même type ?',
                        'choices' => [
                            ['choice_text' => 'Ils se repoussent', 'is_correct' => true],
                            ['choice_text' => 'Ils s’attirent', 'is_correct' => false],
                            ['choice_text' => 'Ils cessent de produire un champ', 'is_correct' => false],
                            ['choice_text' => 'Ils deviennent électriques', 'is_correct' => false],
                        ],
                        'explanation' => 'Des pôles magnétiques de même type se repoussent.',
                    ],

                    [
                        'question' => 'Que se passe-t-il entre un pôle Nord et un pôle Sud ?',
                        'choices' => [
                            ['choice_text' => 'Ils s’attirent', 'is_correct' => true],
                            ['choice_text' => 'Ils se repoussent', 'is_correct' => false],
                            ['choice_text' => 'Ils deviennent neutres', 'is_correct' => false],
                            ['choice_text' => 'Ils ne peuvent pas interagir', 'is_correct' => false],
                        ],
                        'explanation' => 'Les pôles opposés s’attirent.',
                    ],

                    [
                        'question' => 'Quelle trajectoire peut suivre une charge qui entre perpendiculairement dans un champ magnétique uniforme, en l’absence d’autres forces ?',
                        'choices' => [
                            ['choice_text' => 'Une trajectoire circulaire', 'is_correct' => true],
                            ['choice_text' => 'Une trajectoire rectiligne accélérée dans le sens du champ', 'is_correct' => false],
                            ['choice_text' => 'Une trajectoire toujours verticale', 'is_correct' => false],
                            ['choice_text' => 'Une trajectoire sans mouvement', 'is_correct' => false],
                        ],
                        'explanation' => 'La force magnétique est alors perpendiculaire à la vitesse et peut fournir l’accélération centripète.',
                    ],

                    [
                        'question' => 'Quelle force agit sur une charge q se déplaçant avec une vitesse v dans un champ magnétique B ?',
                        'choices' => [
                            ['choice_text' => 'La composante magnétique de la force de Lorentz', 'is_correct' => true],
                            ['choice_text' => 'La force de Coulomb uniquement', 'is_correct' => false],
                            ['choice_text' => 'La force gravitationnelle uniquement', 'is_correct' => false],
                            ['choice_text' => 'La force élastique', 'is_correct' => false],
                        ],
                        'explanation' => 'La composante magnétique de la force de Lorentz est donnée par F = q(v × B).',
                    ],

                    [
                        'question' => 'Quelle est la norme de la force magnétique sur une charge en mouvement ?',
                        'choices' => [
                            ['choice_text' => 'F = |q|vB sinθ', 'is_correct' => true],
                            ['choice_text' => 'F = |q|vB cosθ dans tous les cas', 'is_correct' => false],
                            ['choice_text' => 'F = q/(vB)', 'is_correct' => false],
                            ['choice_text' => 'F = q + v + B', 'is_correct' => false],
                        ],
                        'explanation' => 'La force magnétique dépend de l’angle entre v et B via le produit vectoriel.',
                    ],

                    [
                        'question' => 'Quand la force magnétique sur une charge en mouvement est-elle nulle ?',
                        'choices' => [
                            ['choice_text' => 'Lorsque la vitesse est parallèle ou antiparallèle au champ magnétique', 'is_correct' => true],
                            ['choice_text' => 'Lorsque la vitesse est perpendiculaire au champ', 'is_correct' => false],
                            ['choice_text' => 'Uniquement lorsque q = 1 C', 'is_correct' => false],
                            ['choice_text' => 'Lorsque le champ est maximal', 'is_correct' => false],
                        ],
                        'explanation' => 'Si v est parallèle à B, sinθ = 0 et la force magnétique est nulle.',
                    ],

                    [
                        'question' => 'Une charge se déplace exactement perpendiculairement à un champ magnétique uniforme. La force magnétique est alors...',
                        'choices' => [
                            ['choice_text' => 'Maximale pour des valeurs données de q, v et B', 'is_correct' => true],
                            ['choice_text' => 'Nulle', 'is_correct' => false],
                            ['choice_text' => 'Indépendante de la vitesse', 'is_correct' => false],
                            ['choice_text' => 'Toujours dirigée dans le sens du champ', 'is_correct' => false],
                        ],
                        'explanation' => 'Lorsque θ = 90°, sinθ = 1 et la norme F = |q|vB est maximale.',
                    ],

                    [
                        'question' => 'Pourquoi la force magnétique ne fournit-elle idéalement aucun travail sur une charge ponctuelle ?',
                        'choices' => [
                            ['choice_text' => 'Elle est perpendiculaire à la vitesse de la charge', 'is_correct' => true],
                            ['choice_text' => 'Elle est toujours parallèle à la vitesse', 'is_correct' => false],
                            ['choice_text' => 'Elle est toujours nulle', 'is_correct' => false],
                            ['choice_text' => 'Elle agit uniquement sur les charges immobiles', 'is_correct' => false],
                        ],
                        'explanation' => 'Le travail instantané est nul puisque la force magnétique est perpendiculaire à la vitesse.',
                    ],
                ],
            ],

            // ============================================================
            // QUIZ 7 — Induction électromagnétique
            // ============================================================

            [
                'title' => 'Induction électromagnétique',
                'description' => 'Introduction au flux magnétique, à la loi de Faraday et à la loi de Lenz.',
                'questions' => [

                    [
                        'question' => 'Quel phénomène apparaît lorsqu’un flux magnétique à travers un circuit varie ?',
                        'choices' => [
                            ['choice_text' => 'Une force électromotrice induite peut apparaître', 'is_correct' => true],
                            ['choice_text' => 'La charge totale disparaît toujours', 'is_correct' => false],
                            ['choice_text' => 'La résistance devient automatiquement nulle', 'is_correct' => false],
                            ['choice_text' => 'Le champ électrique devient nécessairement uniforme', 'is_correct' => false],
                        ],
                        'explanation' => 'Une variation temporelle du flux magnétique peut induire une force électromotrice.',
                    ],

                    [
                        'question' => 'Quelle loi relie la force électromotrice induite à la variation du flux magnétique ?',
                        'choices' => [
                            ['choice_text' => 'La loi de Faraday', 'is_correct' => true],
                            ['choice_text' => 'La loi d’Ohm', 'is_correct' => false],
                            ['choice_text' => 'La loi de Coulomb', 'is_correct' => false],
                            ['choice_text' => 'La loi de Newton', 'is_correct' => false],
                        ],
                        'explanation' => 'La loi de Faraday relie la f.e.m. induite à la variation temporelle du flux magnétique.',
                    ],

                    [
                        'question' => 'Quelle expression donne la force électromotrice induite pour une seule spire ?',
                        'choices' => [
                            ['choice_text' => 'ε = -dΦB/dt', 'is_correct' => true],
                            ['choice_text' => 'ε = ΦB/t²', 'is_correct' => false],
                            ['choice_text' => 'ε = dΦB/dt sans signe dans tous les cas', 'is_correct' => false],
                            ['choice_text' => 'ε = BΦB', 'is_correct' => false],
                        ],
                        'explanation' => 'La loi de Faraday-Lenz s’écrit ε = -dΦB/dt.',
                    ],

                    [
                        'question' => 'Que représente le signe moins dans la loi de Faraday-Lenz ?',
                        'choices' => [
                            ['choice_text' => 'La loi de Lenz : l’effet induit s’oppose à la variation du flux qui le produit', 'is_correct' => true],
                            ['choice_text' => 'La force électromotrice est toujours négative', 'is_correct' => false],
                            ['choice_text' => 'Le champ magnétique est toujours négatif', 'is_correct' => false],
                            ['choice_text' => 'Le courant induit est toujours nul', 'is_correct' => false],
                        ],
                        'explanation' => 'Le signe exprime le sens de l’induction selon la convention d’orientation choisie.',
                    ],

                    [
                        'question' => 'Quel est le flux magnétique à travers une surface plane lorsque le champ B est uniforme ?',
                        'choices' => [
                            ['choice_text' => 'ΦB = BA cosθ', 'is_correct' => true],
                            ['choice_text' => 'ΦB = BA sinθ dans tous les cas', 'is_correct' => false],
                            ['choice_text' => 'ΦB = B/A', 'is_correct' => false],
                            ['choice_text' => 'ΦB = B + A', 'is_correct' => false],
                        ],
                        'explanation' => 'Le flux vaut ΦB = BA cosθ lorsque θ est l’angle entre B et la normale à la surface.',
                    ],

                    [
                        'question' => 'Quand le flux magnétique à travers une spire est-il maximal pour B et A fixés ?',
                        'choices' => [
                            ['choice_text' => 'Lorsque le champ est parallèle à la normale de la surface', 'is_correct' => true],
                            ['choice_text' => 'Lorsque le champ est parallèle à la surface', 'is_correct' => false],
                            ['choice_text' => 'Lorsque B = 0', 'is_correct' => false],
                            ['choice_text' => 'Lorsque A = 0', 'is_correct' => false],
                        ],
                        'explanation' => 'Pour θ = 0°, cosθ = 1 et ΦB = BA.',
                    ],

                    [
                        'question' => 'Quand le flux magnétique à travers une surface est-il nul pour B et A non nuls ?',
                        'choices' => [
                            ['choice_text' => 'Lorsque le champ est parallèle à la surface', 'is_correct' => true],
                            ['choice_text' => 'Lorsque le champ est parallèle à la normale', 'is_correct' => false],
                            ['choice_text' => 'Lorsque la surface est maximale', 'is_correct' => false],
                            ['choice_text' => 'Lorsque le champ est maximal', 'is_correct' => false],
                        ],
                        'explanation' => 'Si B est tangent à la surface, il est perpendiculaire à la normale et cos90° = 0.',
                    ],

                    [
                        'question' => 'Une variation plus rapide du flux magnétique produit généralement une force électromotrice induite...',
                        'choices' => [
                            ['choice_text' => 'Plus grande en valeur absolue', 'is_correct' => true],
                            ['choice_text' => 'Plus faible en valeur absolue', 'is_correct' => false],
                            ['choice_text' => 'Toujours nulle', 'is_correct' => false],
                            ['choice_text' => 'Indépendante de la variation du flux', 'is_correct' => false],
                        ],
                        'explanation' => 'La norme de la f.e.m. est proportionnelle à la rapidité de variation du flux.',
                    ],

                    [
                        'question' => 'Quel dispositif exploite directement l’induction électromagnétique pour produire de l’électricité à partir d’un mouvement ?',
                        'choices' => [
                            ['choice_text' => 'Un générateur électrique', 'is_correct' => true],
                            ['choice_text' => 'Un simple interrupteur ouvert', 'is_correct' => false],
                            ['choice_text' => 'Un thermomètre mécanique', 'is_correct' => false],
                            ['choice_text' => 'Un miroir plan', 'is_correct' => false],
                        ],
                        'explanation' => 'Les générateurs utilisent le mouvement relatif entre champ magnétique et conducteurs pour produire une f.e.m. induite.',
                    ],

                    [
                        'question' => 'Pourquoi un transformateur nécessite-t-il un flux magnétique variable pour transférer de l’énergie entre ses enroulements ?',
                        'choices' => [
                            ['choice_text' => 'Une variation de flux dans le secondaire induit une tension selon Faraday', 'is_correct' => true],
                            ['choice_text' => 'Un flux constant induit toujours une tension permanente', 'is_correct' => false],
                            ['choice_text' => 'Le courant continu produit toujours une induction stationnaire idéale', 'is_correct' => false],
                            ['choice_text' => 'Le transformateur fonctionne sans champ magnétique', 'is_correct' => false],
                        ],
                        'explanation' => 'Le fonctionnement du transformateur repose sur un flux variable créant une tension induite dans les enroulements.',
                    ],
                ],
            ],

            // ============================================================
            // QUIZ 8 — Synthèse électromagnétique
            // ============================================================

            [
                'title' => 'Synthèse des fondamentaux de l’électromagnétisme',
                'description' => 'Synthèse des concepts essentiels : charges, champs, circuits, magnétisme et induction.',
                'questions' => [

                    [
                        'question' => 'Une charge ponctuelle q = 2 μC est placée dans un champ électrique uniforme de 500 N/C. Quelle est la norme de la force électrique ?',
                        'choices' => [
                            ['choice_text' => '1 × 10^-3 N', 'is_correct' => true],
                            ['choice_text' => '1 × 10^-6 N', 'is_correct' => false],
                            ['choice_text' => '1 × 10^3 N', 'is_correct' => false],
                            ['choice_text' => '250 N', 'is_correct' => false],
                        ],
                        'explanation' => 'F = qE = 2 × 10^-6 × 500 = 1 × 10^-3 N.',
                    ],

                    [
                        'question' => 'Un résistor de 20 Ω est parcouru par un courant de 0,5 A. Quelle tension est appliquée ?',
                        'choices' => [
                            ['choice_text' => '10 V', 'is_correct' => true],
                            ['choice_text' => '40 V', 'is_correct' => false],
                            ['choice_text' => '0,025 V', 'is_correct' => false],
                            ['choice_text' => '20,5 V', 'is_correct' => false],
                        ],
                        'explanation' => 'V = RI = 20 × 0,5 = 10 V.',
                    ],

                    [
                        'question' => 'Un appareil de 100 W fonctionne pendant 60 s. Quelle énergie consomme-t-il ?',
                        'choices' => [
                            ['choice_text' => '6000 J', 'is_correct' => true],
                            ['choice_text' => '160 J', 'is_correct' => false],
                            ['choice_text' => '600 J', 'is_correct' => false],
                            ['choice_text' => '60 000 J', 'is_correct' => false],
                        ],
                        'explanation' => 'E = Pt = 100 × 60 = 6000 J.',
                    ],

                    [
                        'question' => 'Une charge se déplace dans un champ magnétique avec une vitesse parallèle au champ. Quelle est la force magnétique ?',
                        'choices' => [
                            ['choice_text' => 'Nulle', 'is_correct' => true],
                            ['choice_text' => 'Maximale', 'is_correct' => false],
                            ['choice_text' => 'Égale à qB', 'is_correct' => false],
                            ['choice_text' => 'Toujours dirigée dans le sens du mouvement', 'is_correct' => false],
                        ],
                        'explanation' => 'Avec v parallèle à B, sinθ = 0 et donc F = |q|vB sinθ = 0.',
                    ],

                    [
                        'question' => 'Une charge positive est placée dans un champ électrique uniforme. La force électrique sur cette charge est...',
                        'choices' => [
                            ['choice_text' => 'Dans le même sens que le champ', 'is_correct' => true],
                            ['choice_text' => 'Dans le sens opposé au champ', 'is_correct' => false],
                            ['choice_text' => 'Toujours perpendiculaire au champ', 'is_correct' => false],
                            ['choice_text' => 'Toujours nulle', 'is_correct' => false],
                        ],
                        'explanation' => 'Pour q > 0, F = qE possède le même sens que E.',
                    ],

                    [
                        'question' => 'Une charge négative est placée dans le même champ électrique. La force devient...',
                        'choices' => [
                            ['choice_text' => 'Opposée au champ électrique', 'is_correct' => true],
                            ['choice_text' => 'Dans le même sens que le champ', 'is_correct' => false],
                            ['choice_text' => 'Nécessairement nulle', 'is_correct' => false],
                            ['choice_text' => 'Indépendante du champ', 'is_correct' => false],
                        ],
                        'explanation' => 'Pour q < 0, F = qE est opposée au vecteur E.',
                    ],

                    [
                        'question' => 'Pourquoi le champ électrique et le champ magnétique sont-ils décrits par des vecteurs ?',
                        'choices' => [
                            ['choice_text' => 'Ils possèdent une intensité, une direction et un sens', 'is_correct' => true],
                            ['choice_text' => 'Ils sont toujours scalaires', 'is_correct' => false],
                            ['choice_text' => 'Ils représentent uniquement une énergie', 'is_correct' => false],
                            ['choice_text' => 'Ils ne peuvent pas être additionnés', 'is_correct' => false],
                        ],
                        'explanation' => 'Les champs électrique et magnétique sont des grandeurs vectorielles.',
                    ],

                    [
                        'question' => 'Pourquoi une variation de courant dans un conducteur peut-elle produire un champ magnétique variable ?',
                        'choices' => [
                            ['choice_text' => 'Les courants électriques sont associés à des champs magnétiques', 'is_correct' => true],
                            ['choice_text' => 'Le courant n’a aucun rapport avec le magnétisme', 'is_correct' => false],
                            ['choice_text' => 'Seuls les aimants permanents peuvent créer des champs', 'is_correct' => false],
                            ['choice_text' => 'Le courant détruit le champ électrique', 'is_correct' => false],
                        ],
                        'explanation' => 'Un courant électrique produit un champ magnétique ; si le courant varie, le champ peut également varier.',
                    ],

                    [
                        'question' => 'Quelle combinaison décrit correctement les quatre notions fondamentales étudiées dans un circuit électromagnétique simple ?',
                        'choices' => [
                            ['choice_text' => 'Charge, champ, courant et tension', 'is_correct' => true],
                            ['choice_text' => 'Masse, température, pression et volume', 'is_correct' => false],
                            ['choice_text' => 'Force, vitesse, distance et accélération uniquement', 'is_correct' => false],
                            ['choice_text' => 'Fréquence, longueur, masse et densité uniquement', 'is_correct' => false],
                        ],
                        'explanation' => 'Les charges produisent des champs, les courants décrivent les mouvements de charge et les tensions représentent des différences de potentiel.',
                    ],

                    [
                        'question' => 'Pourquoi l’électromagnétisme est-il essentiel au fonctionnement de nombreux dispositifs modernes ?',
                        'choices' => [
                            ['choice_text' => 'Il décrit les phénomènes liés aux charges, courants, champs électriques, champs magnétiques et à leur couplage', 'is_correct' => true],
                            ['choice_text' => 'Il concerne uniquement les aimants permanents', 'is_correct' => false],
                            ['choice_text' => 'Il ne s’applique qu’aux circuits simples', 'is_correct' => false],
                            ['choice_text' => 'Il exclut les phénomènes de transmission d’énergie', 'is_correct' => false],
                        ],
                        'explanation' => 'L’électromagnétisme constitue la base physique de nombreux systèmes électriques, électroniques, électromécaniques et de communication.',
                    ],
                ],
            ],
        ];

        // ================================================================
        // QUIZ SETTINGS
        // ================================================================

        $quizSettings = [
            0 => [
                'duration' => 15,
                'passing_score' => 50,
            ],
            1 => [
                'duration' => 20,
                'passing_score' => 60,
            ],
            2 => [
                'duration' => 20,
                'passing_score' => 60,
            ],
            3 => [
                'duration' => 20,
                'passing_score' => 60,
            ],
            4 => [
                'duration' => 20,
                'passing_score' => 60,
            ],
            5 => [
                'duration' => 20,
                'passing_score' => 60,
            ],
            6 => [
                'duration' => 25,
                'passing_score' => 60,
            ],
            7 => [
                'duration' => 25,
                'passing_score' => 60,
            ],
        ];

        foreach ($quizzes as $quizIndex => $quizData) {
            $settings = $quizSettings[$quizIndex] ?? [
                'duration' => 20,
                'passing_score' => 60,
            ];

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

                // Randomize choices while preserving the correct answer.
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