<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class FluidMechanicsBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'fluid-mechanics')->firstOrFail();

        $quizzes = [
            [
                'title' => 'Notions fondamentales des fluides',
                'description' => 'Découvrir les propriétés essentielles des liquides et des gaz et les grandeurs utilisées en mécanique des fluides.',
                'questions' => [
                    [
                        'question' => 'Qu\'est-ce qu\'un fluide ?',
                        'choices' => [
                            ['choice_text' => 'Une substance qui peut se déformer continuellement sous l\'effet d\'une contrainte de cisaillement', 'is_correct' => true],
                            ['choice_text' => 'Une substance qui conserve toujours une forme rigide', 'is_correct' => false],
                            ['choice_text' => 'Une substance qui ne peut pas se déplacer', 'is_correct' => false],
                            ['choice_text' => 'Uniquement un liquide incompressible', 'is_correct' => false],
                        ],
                        'explanation' => 'Un fluide se déforme continuellement lorsqu\'une contrainte de cisaillement lui est appliquée.',
                    ],
                    [
                        'question' => 'Quels sont les deux grands types de fluides étudiés en mécanique des fluides ?',
                        'choices' => [
                            ['choice_text' => 'Les liquides et les gaz', 'is_correct' => true],
                            ['choice_text' => 'Les solides et les métaux', 'is_correct' => false],
                            ['choice_text' => 'Les plasmas et les solides uniquement', 'is_correct' => false],
                            ['choice_text' => 'Les cristaux et les gaz uniquement', 'is_correct' => false],
                        ],
                        'explanation' => 'La mécanique des fluides étudie principalement le comportement des liquides et des gaz.',
                    ],
                    [
                        'question' => 'Quelle grandeur représente la masse par unité de volume d\'un fluide ?',
                        'choices' => [
                            ['choice_text' => 'La masse volumique', 'is_correct' => true],
                            ['choice_text' => 'La pression', 'is_correct' => false],
                            ['choice_text' => 'La viscosité', 'is_correct' => false],
                            ['choice_text' => 'La vitesse', 'is_correct' => false],
                        ],
                        'explanation' => 'La masse volumique est définie par ρ = m/V.',
                    ],
                    [
                        'question' => 'Quelle est l\'unité SI de la masse volumique ?',
                        'choices' => [
                            ['choice_text' => 'kg/m³', 'is_correct' => true],
                            ['choice_text' => 'N/m²', 'is_correct' => false],
                            ['choice_text' => 'Pa·s', 'is_correct' => false],
                            ['choice_text' => 'm³/kg', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans le système international, la masse volumique s\'exprime en kilogrammes par mètre cube.',
                    ],
                    [
                        'question' => 'Quelle propriété décrit la résistance d\'un fluide à l\'écoulement ?',
                        'choices' => [
                            ['choice_text' => 'La viscosité', 'is_correct' => true],
                            ['choice_text' => 'La masse', 'is_correct' => false],
                            ['choice_text' => 'La température absolue uniquement', 'is_correct' => false],
                            ['choice_text' => 'La fréquence', 'is_correct' => false],
                        ],
                        'explanation' => 'La viscosité traduit la résistance interne d\'un fluide au mouvement relatif de ses couches.',
                    ],
                    [
                        'question' => 'La pression d\'un fluide correspond à :',
                        'choices' => [
                            ['choice_text' => 'Une force exercée par unité de surface', 'is_correct' => true],
                            ['choice_text' => 'Une masse par unité de volume', 'is_correct' => false],
                            ['choice_text' => 'Une vitesse par unité de temps', 'is_correct' => false],
                            ['choice_text' => 'Une énergie par unité de masse uniquement', 'is_correct' => false],
                        ],
                        'explanation' => 'La pression est définie comme une force normale rapportée à la surface sur laquelle elle agit.',
                    ],
                    [
                        'question' => 'Quelle est l\'unité SI de la pression ?',
                        'choices' => [
                            ['choice_text' => 'Le pascal (Pa)', 'is_correct' => true],
                            ['choice_text' => 'Le newton (N)', 'is_correct' => false],
                            ['choice_text' => 'Le joule (J)', 'is_correct' => false],
                            ['choice_text' => 'Le watt (W)', 'is_correct' => false],
                        ],
                        'explanation' => 'Un pascal correspond à un newton par mètre carré.',
                    ],
                    [
                        'question' => 'Un liquide est-il généralement beaucoup moins compressible qu\'un gaz ?',
                        'choices' => [
                            ['choice_text' => 'Oui', 'is_correct' => true],
                            ['choice_text' => 'Non, les gaz sont toujours moins compressibles', 'is_correct' => false],
                            ['choice_text' => 'Les deux sont toujours parfaitement incompressibles', 'is_correct' => false],
                            ['choice_text' => 'Cela dépend uniquement de la couleur du fluide', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans de nombreuses situations courantes, les liquides sont considérés comme presque incompressibles alors que les gaz sont beaucoup plus compressibles.',
                    ],
                    [
                        'question' => 'Que signifie l\'hypothèse d\'un fluide incompressible ?',
                        'choices' => [
                            ['choice_text' => 'Sa masse volumique est considérée comme constante dans les conditions étudiées', 'is_correct' => true],
                            ['choice_text' => 'Le fluide ne peut jamais se déplacer', 'is_correct' => false],
                            ['choice_text' => 'Le fluide ne possède aucune pression', 'is_correct' => false],
                            ['choice_text' => 'Le fluide est toujours un solide', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans le modèle incompressible, les variations de masse volumique sont négligées.',
                    ],
                    [
                        'question' => 'Quel état de la matière possède généralement une viscosité et une densité mais pas de forme propre ?',
                        'choices' => [
                            ['choice_text' => 'Un liquide', 'is_correct' => true],
                            ['choice_text' => 'Un solide rigide', 'is_correct' => false],
                            ['choice_text' => 'Un cristal parfait immobile', 'is_correct' => false],
                            ['choice_text' => 'Le vide', 'is_correct' => false],
                        ],
                        'explanation' => 'Un liquide possède un volume relativement défini mais prend la forme du récipient qui le contient.',
                    ],
                ],
            ],

            [
                'title' => 'Pression et hydrostatique',
                'description' => 'Comprendre la pression dans les fluides au repos et les principales conséquences de la loi hydrostatique.',
                'questions' => [
                    [
                        'question' => 'Dans un fluide au repos, comment évolue généralement la pression avec la profondeur ?',
                        'choices' => [
                            ['choice_text' => 'Elle augmente lorsque la profondeur augmente', 'is_correct' => true],
                            ['choice_text' => 'Elle diminue toujours avec la profondeur', 'is_correct' => false],
                            ['choice_text' => 'Elle reste toujours nulle', 'is_correct' => false],
                            ['choice_text' => 'Elle ne dépend jamais de la profondeur', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans un fluide au repos soumis à la gravité, la pression augmente avec la profondeur.',
                    ],
                    [
                        'question' => 'Quelle relation simplifiée donne la pression hydrostatique dans un liquide de masse volumique constante ?',
                        'choices' => [
                            ['choice_text' => 'p = p₀ + ρgh', 'is_correct' => true],
                            ['choice_text' => 'p = p₀ - ρgh dans tous les cas', 'is_correct' => false],
                            ['choice_text' => 'p = ρg/h', 'is_correct' => false],
                            ['choice_text' => 'p = ρ/hg', 'is_correct' => false],
                        ],
                        'explanation' => 'Pour une profondeur h mesurée vers le bas à partir d\'une pression de référence p₀, on a p = p₀ + ρgh.',
                    ],
                    [
                        'question' => 'Quelle pression est exercée par l\'atmosphère au niveau du sol ?',
                        'choices' => [
                            ['choice_text' => 'La pression atmosphérique', 'is_correct' => true],
                            ['choice_text' => 'La pression capillaire uniquement', 'is_correct' => false],
                            ['choice_text' => 'La pression acoustique uniquement', 'is_correct' => false],
                            ['choice_text' => 'La pression nucléaire', 'is_correct' => false],
                        ],
                        'explanation' => 'L\'air atmosphérique exerce une pression sur les surfaces qui l\'entourent.',
                    ],
                    [
                        'question' => 'À même profondeur dans un liquide homogène au repos, la pression est-elle la même dans toutes les directions ?',
                        'choices' => [
                            ['choice_text' => 'Oui, la pression est isotrope', 'is_correct' => true],
                            ['choice_text' => 'Non, elle dépend toujours de la direction', 'is_correct' => false],
                            ['choice_text' => 'Elle est nulle horizontalement', 'is_correct' => false],
                            ['choice_text' => 'Elle agit uniquement vers le bas', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans un fluide au repos, la pression en un point agit normalement aux surfaces dans toutes les directions avec la même valeur.',
                    ],
                    [
                        'question' => 'Quel principe est associé à la transmission d\'une pression appliquée à un fluide confiné ?',
                        'choices' => [
                            ['choice_text' => 'Le principe de Pascal', 'is_correct' => true],
                            ['choice_text' => 'Le principe de Pauli', 'is_correct' => false],
                            ['choice_text' => 'Le principe de Huygens', 'is_correct' => false],
                            ['choice_text' => 'Le principe de Bernoulli uniquement', 'is_correct' => false],
                        ],
                        'explanation' => 'Le principe de Pascal indique qu\'une variation de pression appliquée à un fluide confiné se transmet dans toutes les directions.',
                    ],
                    [
                        'question' => 'Quel dispositif utilise le principe de Pascal ?',
                        'choices' => [
                            ['choice_text' => 'Le vérin hydraulique', 'is_correct' => true],
                            ['choice_text' => 'Le microscope optique uniquement', 'is_correct' => false],
                            ['choice_text' => 'Le pendule simple', 'is_correct' => false],
                            ['choice_text' => 'Le spectromètre de masse uniquement', 'is_correct' => false],
                        ],
                        'explanation' => 'Les systèmes hydrauliques utilisent la transmission de pression dans un liquide pour amplifier une force.',
                    ],
                    [
                        'question' => 'Si deux points d\'un même liquide au repos sont à la même altitude, leur pression est-elle identique en l\'absence d\'autres effets ?',
                        'choices' => [
                            ['choice_text' => 'Oui', 'is_correct' => true],
                            ['choice_text' => 'Non, elle est toujours différente', 'is_correct' => false],
                            ['choice_text' => 'Elle est toujours nulle', 'is_correct' => false],
                            ['choice_text' => 'Elle dépend uniquement de la couleur du liquide', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans un liquide homogène au repos soumis à la gravité seule, la pression dépend de l\'altitude.',
                    ],
                    [
                        'question' => 'Si on descend plus profondément dans une piscine, que devient la pression de l\'eau ?',
                        'choices' => [
                            ['choice_text' => 'Elle augmente', 'is_correct' => true],
                            ['choice_text' => 'Elle diminue', 'is_correct' => false],
                            ['choice_text' => 'Elle reste nécessairement constante', 'is_correct' => false],
                            ['choice_text' => 'Elle devient immédiatement nulle', 'is_correct' => false],
                        ],
                        'explanation' => 'La colonne d\'eau située au-dessus du point considéré augmente avec la profondeur, ce qui augmente la pression.',
                    ],
                    [
                        'question' => 'Quelle grandeur intervient avec la profondeur dans la relation hydrostatique ?',
                        'choices' => [
                            ['choice_text' => 'La masse volumique du fluide', 'is_correct' => true],
                            ['choice_text' => 'La couleur du fluide', 'is_correct' => false],
                            ['choice_text' => 'La forme du récipient uniquement', 'is_correct' => false],
                            ['choice_text' => 'La fréquence sonore ambiante', 'is_correct' => false],
                        ],
                        'explanation' => 'La pression hydrostatique dépend notamment de ρ, g et de la profondeur h.',
                    ],
                    [
                        'question' => 'La pression hydrostatique dépend-elle directement de la quantité totale de liquide présente dans un récipient, indépendamment de la hauteur de liquide ?',
                        'choices' => [
                            ['choice_text' => 'Non, elle dépend surtout de la profondeur, de la masse volumique et de la gravité', 'is_correct' => true],
                            ['choice_text' => 'Oui, elle dépend uniquement de la masse totale', 'is_correct' => false],
                            ['choice_text' => 'Oui, elle dépend uniquement du volume total', 'is_correct' => false],
                            ['choice_text' => 'Non, elle ne dépend d\'aucune grandeur physique', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans l\'approximation hydrostatique simple, la pression à une profondeur donnée dépend de la colonne située au-dessus et donc principalement de ρgh.',
                    ],
                ],
            ],

            [
                'title' => 'Poussée d\'Archimède et flottabilité',
                'description' => 'Étudier la poussée d\'Archimède, la flottabilité et l\'équilibre des objets immergés.',
                'questions' => [
                    [
                        'question' => 'Dans quelle direction agit la poussée d\'Archimède sur un objet immergé ?',
                        'choices' => [
                            ['choice_text' => 'Vers le haut', 'is_correct' => true],
                            ['choice_text' => 'Toujours vers le bas', 'is_correct' => false],
                            ['choice_text' => 'Uniquement horizontalement', 'is_correct' => false],
                            ['choice_text' => 'Dans une direction aléatoire', 'is_correct' => false],
                        ],
                        'explanation' => 'La pression du fluide est plus importante en dessous de l\'objet qu\'au-dessus, ce qui produit une force résultante vers le haut.',
                    ],
                    [
                        'question' => 'La poussée d\'Archimède est égale à :',
                        'choices' => [
                            ['choice_text' => 'Le poids du fluide déplacé', 'is_correct' => true],
                            ['choice_text' => 'Le poids de l\'objet dans tous les cas', 'is_correct' => false],
                            ['choice_text' => 'La masse de l\'objet divisée par son volume', 'is_correct' => false],
                            ['choice_text' => 'La pression atmosphérique multipliée par le temps', 'is_correct' => false],
                        ],
                        'explanation' => 'La poussée d\'Archimède a pour intensité le poids du volume de fluide déplacé.',
                    ],
                    [
                        'question' => 'Un objet totalement immergé déplace-t-il un volume de fluide égal à :',
                        'choices' => [
                            ['choice_text' => 'Son propre volume immergé', 'is_correct' => true],
                            ['choice_text' => 'La moitié de son volume dans tous les cas', 'is_correct' => false],
                            ['choice_text' => 'Le volume total du récipient', 'is_correct' => false],
                            ['choice_text' => 'Un volume toujours nul', 'is_correct' => false],
                        ],
                        'explanation' => 'Un objet complètement immergé déplace un volume de fluide égal à son volume immergé.',
                    ],
                    [
                        'question' => 'Quand un objet flotte à l\'équilibre à la surface d\'un liquide, la poussée d\'Archimède est :',
                        'choices' => [
                            ['choice_text' => 'Égale au poids de l\'objet', 'is_correct' => true],
                            ['choice_text' => 'Toujours inférieure au poids', 'is_correct' => false],
                            ['choice_text' => 'Toujours supérieure au poids', 'is_correct' => false],
                            ['choice_text' => 'Nulle', 'is_correct' => false],
                        ],
                        'explanation' => 'À l\'équilibre, la somme des forces verticales est nulle, donc la poussée compense le poids.',
                    ],
                    [
                        'question' => 'Un objet moins dense que l\'eau a-t-il tendance à :',
                        'choices' => [
                            ['choice_text' => 'Flotter à la surface', 'is_correct' => true],
                            ['choice_text' => 'Couler immédiatement', 'is_correct' => false],
                            ['choice_text' => 'Rester nécessairement suspendu au milieu sans équilibre', 'is_correct' => false],
                            ['choice_text' => 'Voir sa masse devenir nulle', 'is_correct' => false],
                        ],
                        'explanation' => 'Un objet dont la densité moyenne est inférieure à celle du liquide peut flotter.',
                    ],
                    [
                        'question' => 'Un objet plus dense que le liquide dans lequel il est placé a généralement tendance à :',
                        'choices' => [
                            ['choice_text' => 'Couler', 'is_correct' => true],
                            ['choice_text' => 'Flotter automatiquement', 'is_correct' => false],
                            ['choice_text' => 'Monter sans accélération', 'is_correct' => false],
                            ['choice_text' => 'Devenir incompressible', 'is_correct' => false],
                        ],
                        'explanation' => 'Si le poids de l\'objet dépasse la poussée maximale disponible lorsqu\'il est immergé, il descend.',
                    ],
                    [
                        'question' => 'Pourquoi un bateau en acier peut-il flotter malgré la forte densité de l\'acier ?',
                        'choices' => [
                            ['choice_text' => 'Sa forme permet de déplacer suffisamment d\'eau pour que la poussée équilibre son poids', 'is_correct' => true],
                            ['choice_text' => 'L\'acier devient moins dense que l\'eau par magie', 'is_correct' => false],
                            ['choice_text' => 'La gravité ne s\'applique pas au bateau', 'is_correct' => false],
                            ['choice_text' => 'L\'eau n\'exerce aucune force sur le bateau', 'is_correct' => false],
                        ],
                        'explanation' => 'La densité moyenne du bateau, en tenant compte des volumes occupés par l\'acier et l\'air, peut être inférieure à celle de l\'eau.',
                    ],
                    [
                        'question' => 'La poussée d\'Archimède dépend-elle du volume de fluide déplacé ?',
                        'choices' => [
                            ['choice_text' => 'Oui', 'is_correct' => true],
                            ['choice_text' => 'Non, elle dépend uniquement de la couleur de l\'objet', 'is_correct' => false],
                            ['choice_text' => 'Non, elle est toujours constante quel que soit le volume', 'is_correct' => false],
                            ['choice_text' => 'Seulement dans les gaz', 'is_correct' => false],
                        ],
                        'explanation' => 'La poussée est F_A = ρfluide × g × Vdéplacé.',
                    ],
                    [
                        'question' => 'Si le volume immergé d\'un objet flottant augmente, la poussée d\'Archimède :',
                        'choices' => [
                            ['choice_text' => 'Augmente', 'is_correct' => true],
                            ['choice_text' => 'Diminue nécessairement', 'is_correct' => false],
                            ['choice_text' => 'Reste toujours nulle', 'is_correct' => false],
                            ['choice_text' => 'Devient indépendante de la masse volumique du liquide', 'is_correct' => false],
                        ],
                        'explanation' => 'La poussée est proportionnelle au volume de fluide déplacé.',
                    ],
                    [
                        'question' => 'La poussée d\'Archimède existe-t-elle aussi dans un gaz ?',
                        'choices' => [
                            ['choice_text' => 'Oui', 'is_correct' => true],
                            ['choice_text' => 'Non, jamais', 'is_correct' => false],
                            ['choice_text' => 'Seulement sous l\'eau', 'is_correct' => false],
                            ['choice_text' => 'Uniquement dans le vide', 'is_correct' => false],
                        ],
                        'explanation' => 'Tout fluide, y compris un gaz, exerce une poussée sur un objet qui déplace une certaine quantité de fluide.',
                    ],
                ],
            ],

            [
                'title' => 'Écoulement et débit',
                'description' => 'Introduire la vitesse d\'écoulement, le débit volumique et l\'équation de continuité.',
                'questions' => [
                    [
                        'question' => 'Qu\'appelle-t-on débit volumique ?',
                        'choices' => [
                            ['choice_text' => 'Le volume de fluide traversant une section par unité de temps', 'is_correct' => true],
                            ['choice_text' => 'La masse totale du fluide', 'is_correct' => false],
                            ['choice_text' => 'La pression par unité de volume', 'is_correct' => false],
                            ['choice_text' => 'La vitesse divisée par la masse', 'is_correct' => false],
                        ],
                        'explanation' => 'Le débit volumique représente le volume traversant une section pendant une unité de temps.',
                    ],
                    [
                        'question' => 'Quelle est l\'expression du débit volumique pour un écoulement uniforme à travers une section S ?',
                        'choices' => [
                            ['choice_text' => 'Q = S v', 'is_correct' => true],
                            ['choice_text' => 'Q = S/v', 'is_correct' => false],
                            ['choice_text' => 'Q = v/S', 'is_correct' => false],
                            ['choice_text' => 'Q = S + v', 'is_correct' => false],
                        ],
                        'explanation' => 'Pour une vitesse moyenne v normale à la section S, le débit volumique vaut Q = Sv.',
                    ],
                    [
                        'question' => 'Si la section d\'une conduite diminue et que le débit reste constant pour un fluide incompressible, la vitesse moyenne :',
                        'choices' => [
                            ['choice_text' => 'Augmente', 'is_correct' => true],
                            ['choice_text' => 'Diminue', 'is_correct' => false],
                            ['choice_text' => 'Devient nulle', 'is_correct' => false],
                            ['choice_text' => 'Reste forcément identique', 'is_correct' => false],
                        ],
                        'explanation' => 'Pour un débit constant, Q = Sv. Une section plus petite implique donc une vitesse plus grande.',
                    ],
                    [
                        'question' => 'L\'équation de continuité traduit principalement :',
                        'choices' => [
                            ['choice_text' => 'La conservation de la masse', 'is_correct' => true],
                            ['choice_text' => 'La conservation de la température uniquement', 'is_correct' => false],
                            ['choice_text' => 'La conservation de la couleur du fluide', 'is_correct' => false],
                            ['choice_text' => 'La conservation de la pression dans tous les écoulements', 'is_correct' => false],
                        ],
                        'explanation' => 'La continuité provient du principe de conservation de la masse.',
                    ],
                    [
                        'question' => 'Dans une conduite à section constante, un fluide incompressible en régime permanent possède-t-il le même débit le long de la conduite ?',
                        'choices' => [
                            ['choice_text' => 'Oui, en l\'absence de sources ou de fuites', 'is_correct' => true],
                            ['choice_text' => 'Non, le débit doit toujours varier', 'is_correct' => false],
                            ['choice_text' => 'Oui, mais uniquement pour les gaz compressibles', 'is_correct' => false],
                            ['choice_text' => 'Non, le débit est toujours nul', 'is_correct' => false],
                        ],
                        'explanation' => 'La conservation de la masse impose un débit constant dans une conduite sans apport ni perte de matière.',
                    ],
                    [
                        'question' => 'Quelle unité SI correspond au débit volumique ?',
                        'choices' => [
                            ['choice_text' => 'm³/s', 'is_correct' => true],
                            ['choice_text' => 'm/s', 'is_correct' => false],
                            ['choice_text' => 'kg/m³', 'is_correct' => false],
                            ['choice_text' => 'N/s', 'is_correct' => false],
                        ],
                        'explanation' => 'Un débit volumique est un volume par unité de temps, donc m³/s dans le SI.',
                    ],
                    [
                        'question' => 'Qu\'est-ce que la vitesse d\'écoulement ?',
                        'choices' => [
                            ['choice_text' => 'La vitesse à laquelle les particules de fluide ou leur mouvement moyen se déplacent', 'is_correct' => true],
                            ['choice_text' => 'La masse de fluide par unité de volume', 'is_correct' => false],
                            ['choice_text' => 'La pression par unité de temps', 'is_correct' => false],
                            ['choice_text' => 'La température du fluide', 'is_correct' => false],
                        ],
                        'explanation' => 'La vitesse d\'écoulement décrit le mouvement local ou moyen du fluide.',
                    ],
                    [
                        'question' => 'Si le débit volumique est de 2 m³/s et la section vaut 1 m², quelle est la vitesse moyenne ?',
                        'choices' => [
                            ['choice_text' => '2 m/s', 'is_correct' => true],
                            ['choice_text' => '0,5 m/s', 'is_correct' => false],
                            ['choice_text' => '1 m/s', 'is_correct' => false],
                            ['choice_text' => '3 m/s', 'is_correct' => false],
                        ],
                        'explanation' => 'Avec Q = Sv, on obtient v = Q/S = 2/1 = 2 m/s.',
                    ],
                    [
                        'question' => 'Que se passe-t-il généralement dans une buse lorsque son aire de section diminue ?',
                        'choices' => [
                            ['choice_text' => 'La vitesse du fluide augmente pour un fluide incompressible en régime permanent', 'is_correct' => true],
                            ['choice_text' => 'La vitesse devient toujours nulle', 'is_correct' => false],
                            ['choice_text' => 'Le débit disparaît nécessairement', 'is_correct' => false],
                            ['choice_text' => 'La masse du fluide diminue instantanément', 'is_correct' => false],
                        ],
                        'explanation' => 'La conservation du débit impose une vitesse plus élevée lorsque la section diminue.',
                    ],
                    [
                        'question' => 'Quelle grandeur complète la relation Q = Sv ?',
                        'choices' => [
                            ['choice_text' => 'La section traversée par le fluide', 'is_correct' => true],
                            ['choice_text' => 'La masse du récipient', 'is_correct' => false],
                            ['choice_text' => 'La température de la paroi uniquement', 'is_correct' => false],
                            ['choice_text' => 'La fréquence du son', 'is_correct' => false],
                        ],
                        'explanation' => 'Le débit volumique est obtenu en multipliant l\'aire de la section par la vitesse moyenne normale à cette section.',
                    ],
                ],
            ],

            [
                'title' => 'Équation de Bernoulli',
                'description' => 'Découvrir la relation de Bernoulli et son application aux écoulements idéalisés.',
                'questions' => [
                    [
                        'question' => 'L\'équation de Bernoulli relie principalement quelles grandeurs ?',
                        'choices' => [
                            ['choice_text' => 'La pression, la vitesse et l\'altitude', 'is_correct' => true],
                            ['choice_text' => 'La température, la masse et la couleur', 'is_correct' => false],
                            ['choice_text' => 'Le courant électrique et la tension', 'is_correct' => false],
                            ['choice_text' => 'La masse du noyau et son énergie', 'is_correct' => false],
                        ],
                        'explanation' => 'La relation de Bernoulli relie les contributions de pression, d\'énergie cinétique et d\'énergie potentielle gravitationnelle.',
                    ],
                    [
                        'question' => 'Dans sa forme classique, l\'équation de Bernoulli s\'applique à quel type d\'écoulement idéal ?',
                        'choices' => [
                            ['choice_text' => 'Un écoulement incompressible, permanent et sans viscosité le long d\'une ligne de courant', 'is_correct' => true],
                            ['choice_text' => 'Uniquement aux solides rigides', 'is_correct' => false],
                            ['choice_text' => 'Uniquement aux gaz très chauds avec frottement maximal', 'is_correct' => false],
                            ['choice_text' => 'À tous les écoulements sans aucune hypothèse', 'is_correct' => false],
                        ],
                        'explanation' => 'La forme élémentaire de Bernoulli repose sur des hypothèses simplificatrices telles que l\'écoulement permanent et l\'absence de pertes visqueuses.',
                    ],
                    [
                        'question' => 'Si la vitesse d\'un fluide augmente dans une conduite horizontale idéale, que devient généralement sa pression statique ?',
                        'choices' => [
                            ['choice_text' => 'Elle diminue', 'is_correct' => true],
                            ['choice_text' => 'Elle augmente toujours', 'is_correct' => false],
                            ['choice_text' => 'Elle reste nécessairement identique', 'is_correct' => false],
                            ['choice_text' => 'Elle devient nulle dans tous les cas', 'is_correct' => false],
                        ],
                        'explanation' => 'À altitude constante, la relation de Bernoulli montre que l\'augmentation de l\'énergie cinétique s\'accompagne d\'une diminution de la pression statique.',
                    ],
                    [
                        'question' => 'Quel terme représente l\'énergie cinétique par unité de volume dans Bernoulli ?',
                        'choices' => [
                            ['choice_text' => '½ρv²', 'is_correct' => true],
                            ['choice_text' => 'ρgh', 'is_correct' => false],
                            ['choice_text' => 'mg', 'is_correct' => false],
                            ['choice_text' => 'p/h', 'is_correct' => false],
                        ],
                        'explanation' => 'Le terme ½ρv² représente la contribution cinétique par unité de volume.',
                    ],
                    [
                        'question' => 'Quel terme de Bernoulli correspond à la contribution gravitationnelle par unité de volume ?',
                        'choices' => [
                            ['choice_text' => 'ρgh', 'is_correct' => true],
                            ['choice_text' => '½ρv²', 'is_correct' => false],
                            ['choice_text' => 'p/v', 'is_correct' => false],
                            ['choice_text' => 'ρ/v', 'is_correct' => false],
                        ],
                        'explanation' => 'Le terme ρgh représente l\'énergie potentielle gravitationnelle par unité de volume.',
                    ],
                    [
                        'question' => 'Dans une conduite horizontale idéale de section variable, où la vitesse est plus élevée, la pression statique tend à être :',
                        'choices' => [
                            ['choice_text' => 'Plus faible', 'is_correct' => true],
                            ['choice_text' => 'Plus élevée', 'is_correct' => false],
                            ['choice_text' => 'Toujours nulle', 'is_correct' => false],
                            ['choice_text' => 'Indépendante de la vitesse', 'is_correct' => false],
                        ],
                        'explanation' => 'À même altitude, Bernoulli donne p + ½ρv² = constante, donc une vitesse plus grande signifie une pression statique plus faible.',
                    ],
                    [
                        'question' => 'Quel dispositif simple peut illustrer l\'effet de la variation de pression avec la vitesse dans un écoulement ?',
                        'choices' => [
                            ['choice_text' => 'Le tube de Venturi', 'is_correct' => true],
                            ['choice_text' => 'Le pendule de Foucault uniquement', 'is_correct' => false],
                            ['choice_text' => 'La lentille convergente', 'is_correct' => false],
                            ['choice_text' => 'Le transformateur électrique', 'is_correct' => false],
                        ],
                        'explanation' => 'Le tube de Venturi comporte une zone rétrécie où la vitesse augmente et où la pression statique diminue.',
                    ],
                    [
                        'question' => 'Pourquoi l\'équation de Bernoulli est-elle liée à la conservation de l\'énergie ?',
                        'choices' => [
                            ['choice_text' => 'Elle exprime un bilan entre différentes formes d\'énergie mécanique du fluide', 'is_correct' => true],
                            ['choice_text' => 'Elle exprime uniquement la conservation de la masse', 'is_correct' => false],
                            ['choice_text' => 'Elle suppose que l\'énergie disparaît progressivement', 'is_correct' => false],
                            ['choice_text' => 'Elle décrit seulement la diffusion thermique', 'is_correct' => false],
                        ],
                        'explanation' => 'Bernoulli peut être interprétée comme une conservation de l\'énergie mécanique par unité de volume sous certaines hypothèses.',
                    ],
                    [
                        'question' => 'L\'effet Venturi est-il associé à un rétrécissement d\'une conduite ?',
                        'choices' => [
                            ['choice_text' => 'Oui', 'is_correct' => true],
                            ['choice_text' => 'Non, il nécessite une conduite parfaitement uniforme', 'is_correct' => false],
                            ['choice_text' => 'Uniquement dans le vide', 'is_correct' => false],
                            ['choice_text' => 'Seulement dans les solides', 'is_correct' => false],
                        ],
                        'explanation' => 'Le rétrécissement augmente la vitesse d\'un fluide incompressible et peut réduire sa pression statique.',
                    ],
                    [
                        'question' => 'La pression dans un fluide en mouvement peut-elle être différente de la pression dans le même fluide au repos ?',
                        'choices' => [
                            ['choice_text' => 'Oui', 'is_correct' => true],
                            ['choice_text' => 'Non, elle est toujours identique', 'is_correct' => false],
                            ['choice_text' => 'Seulement pour les solides', 'is_correct' => false],
                            ['choice_text' => 'Non, car un fluide en mouvement n\'a pas de pression', 'is_correct' => false],
                        ],
                        'explanation' => 'Le mouvement du fluide modifie la répartition entre pression statique et énergie cinétique.',
                    ],
                ],
            ],

            [
                'title' => 'Viscosité et écoulements réels',
                'description' => 'Comprendre la viscosité, les forces de frottement internes et leur influence sur les écoulements.',
                'questions' => [
                    [
                        'question' => 'La viscosité représente principalement :',
                        'choices' => [
                            ['choice_text' => 'La résistance interne d\'un fluide aux déformations de cisaillement', 'is_correct' => true],
                            ['choice_text' => 'La capacité d\'un fluide à produire du vide', 'is_correct' => false],
                            ['choice_text' => 'La masse totale contenue dans un récipient', 'is_correct' => false],
                            ['choice_text' => 'La vitesse de propagation de la lumière', 'is_correct' => false],
                        ],
                        'explanation' => 'La viscosité caractérise les frottements internes entre couches de fluide en mouvement relatif.',
                    ],
                    [
                        'question' => 'Quel fluide est généralement plus visqueux ?',
                        'choices' => [
                            ['choice_text' => 'Le miel', 'is_correct' => true],
                            ['choice_text' => 'L\'air dans des conditions usuelles', 'is_correct' => false],
                            ['choice_text' => 'L\'eau', 'is_correct' => false],
                            ['choice_text' => 'L\'hélium gazeux', 'is_correct' => false],
                        ],
                        'explanation' => 'Le miel oppose beaucoup plus de résistance à l\'écoulement que l\'eau ou l\'air dans les conditions ordinaires.',
                    ],
                    [
                        'question' => 'Quelle unité SI correspond à la viscosité dynamique ?',
                        'choices' => [
                            ['choice_text' => 'Pa·s', 'is_correct' => true],
                            ['choice_text' => 'N/m', 'is_correct' => false],
                            ['choice_text' => 'm/s', 'is_correct' => false],
                            ['choice_text' => 'kg/m³', 'is_correct' => false],
                        ],
                        'explanation' => 'La viscosité dynamique s\'exprime en pascal-seconde dans le système SI.',
                    ],
                    [
                        'question' => 'Dans un écoulement visqueux, les couches de fluide peuvent-elles exercer des forces de frottement les unes sur les autres ?',
                        'choices' => [
                            ['choice_text' => 'Oui', 'is_correct' => true],
                            ['choice_text' => 'Non, les couches ne peuvent jamais interagir', 'is_correct' => false],
                            ['choice_text' => 'Uniquement dans les solides', 'is_correct' => false],
                            ['choice_text' => 'Seulement lorsque la pression est nulle', 'is_correct' => false],
                        ],
                        'explanation' => 'Les interactions visqueuses entre couches sont à l\'origine des contraintes de cisaillement dans un fluide réel.',
                    ],
                    [
                        'question' => 'Dans un fluide newtonien, la contrainte de cisaillement est proportionnelle à :',
                        'choices' => [
                            ['choice_text' => 'Le gradient de vitesse', 'is_correct' => true],
                            ['choice_text' => 'La masse totale du récipient', 'is_correct' => false],
                            ['choice_text' => 'La température de la Terre uniquement', 'is_correct' => false],
                            ['choice_text' => 'La longueur d\'onde de la lumière', 'is_correct' => false],
                        ],
                        'explanation' => 'Pour un fluide newtonien, τ = μ dv/dy dans une géométrie simple.',
                    ],
                    [
                        'question' => 'Quelle est l\'origine principale des pertes de charge dans une conduite réelle ?',
                        'choices' => [
                            ['choice_text' => 'Les effets visqueux et les turbulences', 'is_correct' => true],
                            ['choice_text' => 'La conservation de la masse', 'is_correct' => false],
                            ['choice_text' => 'La couleur du liquide', 'is_correct' => false],
                            ['choice_text' => 'La poussée d\'Archimède uniquement', 'is_correct' => false],
                        ],
                        'explanation' => 'Les frottements visqueux et les effets turbulents dissipent de l\'énergie mécanique dans les conduites réelles.',
                    ],
                    [
                        'question' => 'Pour de nombreux liquides, que devient généralement la viscosité lorsque la température augmente ?',
                        'choices' => [
                            ['choice_text' => 'Elle diminue généralement', 'is_correct' => true],
                            ['choice_text' => 'Elle augmente toujours', 'is_correct' => false],
                            ['choice_text' => 'Elle devient automatiquement nulle', 'is_correct' => false],
                            ['choice_text' => 'Elle ne dépend jamais de la température', 'is_correct' => false],
                        ],
                        'explanation' => 'Pour les liquides usuels, une hausse de température réduit généralement la viscosité.',
                    ],
                    [
                        'question' => 'Pour de nombreux gaz, comment la viscosité évolue-t-elle généralement avec la température ?',
                        'choices' => [
                            ['choice_text' => 'Elle augmente généralement', 'is_correct' => true],
                            ['choice_text' => 'Elle diminue toujours', 'is_correct' => false],
                            ['choice_text' => 'Elle devient toujours nulle', 'is_correct' => false],
                            ['choice_text' => 'Elle reste nécessairement constante', 'is_correct' => false],
                        ],
                        'explanation' => 'Pour les gaz usuels, la viscosité augmente généralement avec la température.',
                    ],
                    [
                        'question' => 'Un fluide idéal dans le modèle de base possède-t-il une viscosité nulle ?',
                        'choices' => [
                            ['choice_text' => 'Oui', 'is_correct' => true],
                            ['choice_text' => 'Non, il possède toujours une viscosité très élevée', 'is_correct' => false],
                            ['choice_text' => 'Oui, mais uniquement s\'il est solide', 'is_correct' => false],
                            ['choice_text' => 'Cela signifie qu\'il n\'a aucune masse', 'is_correct' => false],
                        ],
                        'explanation' => 'Le fluide parfait ou idéal est modélisé sans viscosité afin de simplifier l\'étude des écoulements.',
                    ],
                    [
                        'question' => 'Quel phénomène est directement lié à la viscosité lorsqu\'un liquide s\'écoule dans un tube ?',
                        'choices' => [
                            ['choice_text' => 'Une perte d\'énergie mécanique par frottement', 'is_correct' => true],
                            ['choice_text' => 'Une création spontanée de masse', 'is_correct' => false],
                            ['choice_text' => 'Une disparition de la gravité', 'is_correct' => false],
                            ['choice_text' => 'Une transformation automatique en gaz', 'is_correct' => false],
                        ],
                        'explanation' => 'La viscosité entraîne une dissipation d\'énergie mécanique en chaleur lors de l\'écoulement réel.',
                    ],
                ],
            ],

            [
                'title' => 'Régimes laminaire et turbulent',
                'description' => 'Découvrir les différences entre écoulements laminaires et turbulents et introduire le nombre de Reynolds.',
                'questions' => [
                    [
                        'question' => 'Comment caractérise-t-on un écoulement laminaire ?',
                        'choices' => [
                            ['choice_text' => 'Le fluide s\'écoule de manière relativement ordonnée avec peu de mélange transversal', 'is_correct' => true],
                            ['choice_text' => 'Le fluide est toujours immobile', 'is_correct' => false],
                            ['choice_text' => 'Le mouvement est nécessairement chaotique à toutes les échelles', 'is_correct' => false],
                            ['choice_text' => 'La pression est toujours nulle', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans un écoulement laminaire, les trajectoires sont organisées et le mélange transversal est limité.',
                    ],
                    [
                        'question' => 'Comment caractérise-t-on généralement un écoulement turbulent ?',
                        'choices' => [
                            ['choice_text' => 'Par des fluctuations et un mélange importants dans le mouvement du fluide', 'is_correct' => true],
                            ['choice_text' => 'Par une immobilité complète', 'is_correct' => false],
                            ['choice_text' => 'Par l\'absence totale de fluctuations', 'is_correct' => false],
                            ['choice_text' => 'Par une vitesse nécessairement nulle', 'is_correct' => false],
                        ],
                        'explanation' => 'La turbulence comporte des fluctuations de vitesse et un mélange important entre différentes régions de l\'écoulement.',
                    ],
                    [
                        'question' => 'Quel nombre sans dimension est couramment utilisé pour caractériser le régime d\'écoulement dans une conduite ?',
                        'choices' => [
                            ['choice_text' => 'Le nombre de Reynolds', 'is_correct' => true],
                            ['choice_text' => 'Le nombre d\'Avogadro', 'is_correct' => false],
                            ['choice_text' => 'Le nombre quantique principal', 'is_correct' => false],
                            ['choice_text' => 'Le nombre atomique', 'is_correct' => false],
                        ],
                        'explanation' => 'Le nombre de Reynolds compare les effets inertiels aux effets visqueux.',
                    ],
                    [
                        'question' => 'Quelle expression simplifiée du nombre de Reynolds utilise-t-on souvent dans une conduite ?',
                        'choices' => [
                            ['choice_text' => 'Re = ρvD / μ', 'is_correct' => true],
                            ['choice_text' => 'Re = μD / ρv', 'is_correct' => false],
                            ['choice_text' => 'Re = ρμ / vD', 'is_correct' => false],
                            ['choice_text' => 'Re = v / ρμD', 'is_correct' => false],
                        ],
                        'explanation' => 'Pour une conduite, on utilise couramment Re = ρvD/μ, où D est le diamètre.',
                    ],
                    [
                        'question' => 'Que signifie un faible nombre de Reynolds ?',
                        'choices' => [
                            ['choice_text' => 'Les effets visqueux sont relativement importants par rapport aux effets inertiels', 'is_correct' => true],
                            ['choice_text' => 'Les effets inertiels dominent toujours fortement', 'is_correct' => false],
                            ['choice_text' => 'Le fluide est nécessairement solide', 'is_correct' => false],
                            ['choice_text' => 'La pression doit être nulle', 'is_correct' => false],
                        ],
                        'explanation' => 'Le nombre de Reynolds compare les forces inertielles aux effets visqueux ; une petite valeur indique une domination relative de la viscosité.',
                    ],
                    [
                        'question' => 'Dans un écoulement interne en conduite, un faible nombre de Reynolds favorise généralement quel régime ?',
                        'choices' => [
                            ['choice_text' => 'Le régime laminaire', 'is_correct' => true],
                            ['choice_text' => 'Le régime turbulent', 'is_correct' => false],
                            ['choice_text' => 'Le vide parfait', 'is_correct' => false],
                            ['choice_text' => 'Une fusion nucléaire', 'is_correct' => false],
                        ],
                        'explanation' => 'Les faibles nombres de Reynolds sont généralement associés à des écoulements laminaires.',
                    ],
                    [
                        'question' => 'Quel effet peut favoriser la transition vers la turbulence dans une conduite ?',
                        'choices' => [
                            ['choice_text' => 'Une augmentation du nombre de Reynolds', 'is_correct' => true],
                            ['choice_text' => 'Une diminution infinie de la vitesse', 'is_correct' => false],
                            ['choice_text' => 'La suppression complète de l\'inertie', 'is_correct' => false],
                            ['choice_text' => 'La disparition de la masse volumique', 'is_correct' => false],
                        ],
                        'explanation' => 'Une augmentation de la vitesse, de la taille caractéristique ou une diminution de la viscosité augmente le nombre de Reynolds.',
                    ],
                    [
                        'question' => 'La turbulence augmente-t-elle généralement le mélange dans un fluide ?',
                        'choices' => [
                            ['choice_text' => 'Oui', 'is_correct' => true],
                            ['choice_text' => 'Non, elle le supprime toujours', 'is_correct' => false],
                            ['choice_text' => 'Seulement dans les solides', 'is_correct' => false],
                            ['choice_text' => 'Non, un écoulement turbulent est toujours immobile', 'is_correct' => false],
                        ],
                        'explanation' => 'Les fluctuations turbulentes améliorent fortement le mélange de quantité de mouvement, de chaleur et parfois d\'espèces chimiques.',
                    ],
                    [
                        'question' => 'Dans un écoulement laminaire pleinement développé dans une conduite circulaire, le profil de vitesse est typiquement :',
                        'choices' => [
                            ['choice_text' => 'Parabolique', 'is_correct' => true],
                            ['choice_text' => 'Uniforme et identique à zéro partout', 'is_correct' => false],
                            ['choice_text' => 'Toujours triangulaire', 'is_correct' => false],
                            ['choice_text' => 'Indépendant de la position radiale', 'is_correct' => false],
                        ],
                        'explanation' => 'Pour l\'écoulement de Poiseuille, le profil de vitesse dans un tube cylindrique est parabolique.',
                    ],
                    [
                        'question' => 'Dans un écoulement laminaire dans un tube, où la vitesse est-elle généralement maximale ?',
                        'choices' => [
                            ['choice_text' => 'Près de l\'axe du tube', 'is_correct' => true],
                            ['choice_text' => 'À la paroi', 'is_correct' => false],
                            ['choice_text' => 'À l\'extérieur du tube', 'is_correct' => false],
                            ['choice_text' => 'La vitesse est identique partout', 'is_correct' => false],
                        ],
                        'explanation' => 'À cause de la condition de non-glissement, la vitesse est nulle à la paroi et maximale sur l\'axe.',
                    ],
                ],
            ],

            [
                'title' => 'Tension superficielle et capillarité',
                'description' => 'Comprendre les phénomènes de surface, la tension superficielle et la capillarité.',
                'questions' => [
                    [
                        'question' => 'Qu\'est-ce que la tension superficielle ?',
                        'choices' => [
                            ['choice_text' => 'Un effet lié aux forces de cohésion à la surface d\'un liquide', 'is_correct' => true],
                            ['choice_text' => 'Une pression exercée uniquement par les gaz', 'is_correct' => false],
                            ['choice_text' => 'Une force nucléaire dans le liquide', 'is_correct' => false],
                            ['choice_text' => 'Une propriété qui n\'existe que dans les solides', 'is_correct' => false],
                        ],
                        'explanation' => 'La tension superficielle résulte des interactions moléculaires à l\'interface entre le liquide et son environnement.',
                    ],
                    [
                        'question' => 'Pourquoi une petite goutte de liquide tend-elle à prendre une forme proche d\'une sphère ?',
                        'choices' => [
                            ['choice_text' => 'La tension superficielle cherche à réduire l\'aire de surface', 'is_correct' => true],
                            ['choice_text' => 'La gravité devient nulle dans la goutte', 'is_correct' => false],
                            ['choice_text' => 'Les molécules cessent complètement de bouger', 'is_correct' => false],
                            ['choice_text' => 'La pression atmosphérique disparaît', 'is_correct' => false],
                        ],
                        'explanation' => 'Pour un volume donné, la sphère minimise l\'aire de surface, ce qui réduit l\'énergie de surface.',
                    ],
                    [
                        'question' => 'Qu\'est-ce que la capillarité ?',
                        'choices' => [
                            ['choice_text' => 'L\'élévation ou l\'abaissement d\'un liquide dans un tube fin sous l\'effet des forces de surface', 'is_correct' => true],
                            ['choice_text' => 'La compression d\'un solide', 'is_correct' => false],
                            ['choice_text' => 'La fusion des noyaux d\'un liquide', 'is_correct' => false],
                            ['choice_text' => 'La transformation d\'un gaz en plasma uniquement', 'is_correct' => false],
                        ],
                        'explanation' => 'La capillarité résulte de la combinaison des forces de cohésion dans le liquide et d\'adhésion entre le liquide et la paroi.',
                    ],
                    [
                        'question' => 'L\'eau dans un tube capillaire en verre monte-t-elle généralement le long des parois ?',
                        'choices' => [
                            ['choice_text' => 'Oui', 'is_correct' => true],
                            ['choice_text' => 'Non, elle descend toujours', 'is_correct' => false],
                            ['choice_text' => 'Elle reste toujours parfaitement plate', 'is_correct' => false],
                            ['choice_text' => 'Elle devient instantanément un gaz', 'is_correct' => false],
                        ],
                        'explanation' => 'L\'adhésion entre l\'eau et le verre permet une montée capillaire lorsque les conditions favorisent le mouillage.',
                    ],
                    [
                        'question' => 'Le mercure dans le verre présente-t-il généralement une capillarité opposée à celle de l\'eau ?',
                        'choices' => [
                            ['choice_text' => 'Oui, il peut présenter un abaissement du niveau près des parois', 'is_correct' => true],
                            ['choice_text' => 'Non, tous les liquides se comportent exactement comme l\'eau', 'is_correct' => false],
                            ['choice_text' => 'Oui, mais uniquement dans le vide', 'is_correct' => false],
                            ['choice_text' => 'Non, la tension superficielle n\'existe pas pour le mercure', 'is_correct' => false],
                        ],
                        'explanation' => 'Le mercure adhère moins au verre que ses propres molécules ne se cohésionnent, ce qui produit un ménisque convexe et un abaissement capillaire.',
                    ],
                    [
                        'question' => 'La tension superficielle agit-elle uniquement à l\'intérieur du volume du liquide ?',
                        'choices' => [
                            ['choice_text' => 'Non, elle est particulièrement associée à l\'interface ou à la surface du liquide', 'is_correct' => true],
                            ['choice_text' => 'Oui, elle n\'a aucun lien avec les surfaces', 'is_correct' => false],
                            ['choice_text' => 'Elle agit uniquement dans les gaz', 'is_correct' => false],
                            ['choice_text' => 'Elle n\'existe que dans les solides', 'is_correct' => false],
                        ],
                        'explanation' => 'La tension superficielle est une propriété d\'interface résultant des interactions moléculaires près de la surface.',
                    ],
                    [
                        'question' => 'Quelle unité SI peut être utilisée pour exprimer la tension superficielle ?',
                        'choices' => [
                            ['choice_text' => 'N/m', 'is_correct' => true],
                            ['choice_text' => 'kg/m³', 'is_correct' => false],
                            ['choice_text' => 'Pa·s', 'is_correct' => false],
                            ['choice_text' => 'm³/s', 'is_correct' => false],
                        ],
                        'explanation' => 'La tension superficielle peut être exprimée en newtons par mètre.',
                    ],
                    [
                        'question' => 'La tension superficielle peut-elle permettre à certains petits insectes de se maintenir sur l\'eau ?',
                        'choices' => [
                            ['choice_text' => 'Oui', 'is_correct' => true],
                            ['choice_text' => 'Non, seule la poussée d\'Archimède peut intervenir', 'is_correct' => false],
                            ['choice_text' => 'Non, parce que les insectes sont sans masse', 'is_correct' => false],
                            ['choice_text' => 'Uniquement dans les liquides très visqueux', 'is_correct' => false],
                        ],
                        'explanation' => 'La tension superficielle de l\'eau contribue au soutien de petits organismes à la surface.',
                    ],
                    [
                        'question' => 'Pourquoi le savon peut-il modifier le comportement de l\'eau à sa surface ?',
                        'choices' => [
                            ['choice_text' => 'Il peut réduire la tension superficielle de l\'eau', 'is_correct' => true],
                            ['choice_text' => 'Il transforme toujours l\'eau en gaz', 'is_correct' => false],
                            ['choice_text' => 'Il augmente nécessairement la masse volumique de l\'eau sans autre effet', 'is_correct' => false],
                            ['choice_text' => 'Il supprime toute interaction moléculaire', 'is_correct' => false],
                        ],
                        'explanation' => 'Les tensioactifs comme le savon modifient les interactions à l\'interface et réduisent généralement la tension superficielle.',
                    ],
                    [
                        'question' => 'La capillarité est-elle importante dans le transport de l\'eau dans certaines plantes ?',
                        'choices' => [
                            ['choice_text' => 'Oui, elle contribue aux phénomènes de transport dans de très petits conduits', 'is_correct' => true],
                            ['choice_text' => 'Non, les phénomènes de surface n\'existent pas dans les plantes', 'is_correct' => false],
                            ['choice_text' => 'Seulement dans les racines mortes', 'is_correct' => false],
                            ['choice_text' => 'Non, l\'eau ne peut jamais monter dans un tube fin', 'is_correct' => false],
                        ],
                        'explanation' => 'La capillarité et les interactions entre l\'eau et les parois contribuent au transport dans les structures végétales fines.',
                    ],
                ],
            ],

            [
                'title' => 'Applications de la mécanique des fluides',
                'description' => 'Relier les principes de mécanique des fluides à des situations concrètes en ingénierie et dans la vie quotidienne.',
                'questions' => [
                    [
                        'question' => 'Pourquoi les ailes d\'un avion sont-elles étudiées avec la mécanique des fluides ?',
                        'choices' => [
                            ['choice_text' => 'Parce que l\'écoulement de l\'air autour de l\'aile influence les forces aérodynamiques', 'is_correct' => true],
                            ['choice_text' => 'Parce que l\'aile est un liquide', 'is_correct' => false],
                            ['choice_text' => 'Parce que le métal de l\'aile n\'a aucune force', 'is_correct' => false],
                            ['choice_text' => 'Parce que l\'air n\'exerce jamais de pression', 'is_correct' => false],
                        ],
                        'explanation' => 'La distribution de pression et les contraintes exercées par l\'écoulement de l\'air participent aux forces de portance et de traînée.',
                    ],
                    [
                        'question' => 'Quel système utilise directement les propriétés des fluides pour transmettre une force ?',
                        'choices' => [
                            ['choice_text' => 'Le système de freinage hydraulique', 'is_correct' => true],
                            ['choice_text' => 'Le pendule de laboratoire', 'is_correct' => false],
                            ['choice_text' => 'La boussole uniquement', 'is_correct' => false],
                            ['choice_text' => 'La pile électrique sèche uniquement', 'is_correct' => false],
                        ],
                        'explanation' => 'Les freins hydrauliques utilisent un liquide pour transmettre la pression créée par l\'action sur la pédale.',
                    ],
                    [
                        'question' => 'Pourquoi mesure-t-on le débit dans une canalisation d\'eau ?',
                        'choices' => [
                            ['choice_text' => 'Pour connaître la quantité de liquide transportée par unité de temps', 'is_correct' => true],
                            ['choice_text' => 'Pour déterminer le nombre de protons de l\'eau', 'is_correct' => false],
                            ['choice_text' => 'Pour mesurer uniquement la couleur du liquide', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer la pression', 'is_correct' => false],
                        ],
                        'explanation' => 'Le débit permet de quantifier le volume d\'eau transporté pendant une durée donnée.',
                    ],
                    [
                        'question' => 'Quel instrument est couramment utilisé pour mesurer une différence de pression dans un fluide ?',
                        'choices' => [
                            ['choice_text' => 'Un manomètre', 'is_correct' => true],
                            ['choice_text' => 'Un thermomètre', 'is_correct' => false],
                            ['choice_text' => 'Un luxmètre', 'is_correct' => false],
                            ['choice_text' => 'Un galvanomètre uniquement', 'is_correct' => false],
                        ],
                        'explanation' => 'Le manomètre mesure ou compare des pressions dans les systèmes fluidiques.',
                    ],
                    [
                        'question' => 'Pourquoi les conduites doivent-elles être dimensionnées en tenant compte de la vitesse du fluide ?',
                        'choices' => [
                            ['choice_text' => 'Une vitesse trop élevée peut augmenter les pertes de charge et certains risques de fonctionnement', 'is_correct' => true],
                            ['choice_text' => 'La vitesse n\'a jamais aucune conséquence', 'is_correct' => false],
                            ['choice_text' => 'Une vitesse élevée supprime toujours les frottements', 'is_correct' => false],
                            ['choice_text' => 'La vitesse transforme nécessairement l\'eau en solide', 'is_correct' => false],
                        ],
                        'explanation' => 'La vitesse influence les pertes de charge, les régimes d\'écoulement, le bruit et parfois l\'érosion.',
                    ],
                    [
                        'question' => 'Pourquoi les pompes sont-elles utilisées dans les réseaux de fluides ?',
                        'choices' => [
                            ['choice_text' => 'Pour fournir de l\'énergie au fluide et favoriser son déplacement', 'is_correct' => true],
                            ['choice_text' => 'Pour supprimer toute masse du fluide', 'is_correct' => false],
                            ['choice_text' => 'Pour rendre le fluide parfaitement immobile', 'is_correct' => false],
                            ['choice_text' => 'Pour transformer automatiquement un liquide en solide', 'is_correct' => false],
                        ],
                        'explanation' => 'Une pompe ajoute de l\'énergie au fluide afin de compenser les pertes et d\'assurer l\'écoulement souhaité.',
                    ],
                    [
                        'question' => 'Quel principe est particulièrement utile pour comprendre la circulation de l\'air autour d\'un véhicule ?',
                        'choices' => [
                            ['choice_text' => 'La mécanique des fluides et l\'étude des forces aérodynamiques', 'is_correct' => true],
                            ['choice_text' => 'La mécanique nucléaire uniquement', 'is_correct' => false],
                            ['choice_text' => 'La cristallographie uniquement', 'is_correct' => false],
                            ['choice_text' => 'La radioactivité uniquement', 'is_correct' => false],
                        ],
                        'explanation' => 'La circulation de l\'air autour d\'un véhicule détermine notamment la traînée aérodynamique.',
                    ],
                    [
                        'question' => 'Pourquoi les tuyaux deviennent-ils souvent plus difficiles à utiliser lorsque leur diamètre diminue fortement pour un même débit ?',
                        'choices' => [
                            ['choice_text' => 'La vitesse augmente et les pertes de charge peuvent devenir plus importantes', 'is_correct' => true],
                            ['choice_text' => 'La masse du fluide devient nulle', 'is_correct' => false],
                            ['choice_text' => 'La gravité cesse d\'agir', 'is_correct' => false],
                            ['choice_text' => 'La pression devient automatiquement infinie sans autre effet', 'is_correct' => false],
                        ],
                        'explanation' => 'À débit donné, une réduction de section augmente la vitesse et peut accroître fortement les pertes de charge.',
                    ],
                    [
                        'question' => 'Quel phénomène permet à un ballon de monter dans l\'air ?',
                        'choices' => [
                            ['choice_text' => 'La poussée d\'Archimède exercée par l\'air', 'is_correct' => true],
                            ['choice_text' => 'La force nucléaire forte', 'is_correct' => false],
                            ['choice_text' => 'La disparition du poids', 'is_correct' => false],
                            ['choice_text' => 'La tension superficielle de l\'air', 'is_correct' => false],
                        ],
                        'explanation' => 'Un ballon monte lorsque la poussée de l\'air dépasse son poids total.',
                    ],
                    [
                        'question' => 'Pourquoi les ingénieurs étudient-ils les pertes de charge dans les réseaux de fluides ?',
                        'choices' => [
                            ['choice_text' => 'Pour choisir les dimensions des conduites et la puissance nécessaire des pompes ou ventilateurs', 'is_correct' => true],
                            ['choice_text' => 'Pour supprimer toutes les lois de conservation', 'is_correct' => false],
                            ['choice_text' => 'Pour déterminer la masse des électrons', 'is_correct' => false],
                            ['choice_text' => 'Pour rendre les fluides parfaitement incompressibles dans la réalité', 'is_correct' => false],
                        ],
                        'explanation' => 'Les pertes de charge permettent de dimensionner correctement les installations et les équipements qui fournissent l\'énergie au fluide.',
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
                        'explanation' => $questionData['explanation'],
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