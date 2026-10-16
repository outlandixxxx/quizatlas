<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class ModernPhysicsBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'modern-physics')->firstOrFail();

        $quizzes = [
            [
                'title' => 'Introduction à la physique moderne',
                'description' => 'Découvrir les idées fondamentales qui ont conduit au développement de la physique moderne.',
                'questions' => [
                    [
                        'question' => 'Pourquoi la physique moderne s’est-elle développée à la fin du XIXe et au début du XXe siècle ?',
                        'choices' => [
                            ['choice_text' => 'Parce que les lois classiques avaient cessé de fonctionner pour les objets du quotidien', 'is_correct' => false],
                            ['choice_text' => 'Parce que certaines observations ne pouvaient pas être expliquées correctement par la physique classique', 'is_correct' => true],
                            ['choice_text' => 'Parce que la mécanique classique avait été complètement abandonnée', 'is_correct' => false],
                            ['choice_text' => 'Parce que les scientifiques ne pouvaient plus mesurer les longueurs', 'is_correct' => false],
                        ],
                        'explanation' => 'Des phénomènes comme le rayonnement du corps noir, l’effet photoélectrique et les spectres atomiques ont conduit à de nouvelles théories.',
                    ],
                    [
                        'question' => 'Quel phénomène a joué un rôle important dans la naissance de la physique quantique ?',
                        'choices' => [
                            ['choice_text' => 'L’effet photoélectrique', 'is_correct' => true],
                            ['choice_text' => 'La loi de la poussée d’Archimède', 'is_correct' => false],
                            ['choice_text' => 'La dilatation ordinaire des métaux', 'is_correct' => false],
                            ['choice_text' => 'Le mouvement uniforme d’une voiture', 'is_correct' => false],
                        ],
                        'explanation' => 'L’étude de l’effet photoélectrique a montré que la lumière échange de l’énergie par quantités discrètes dans certaines situations.',
                    ],
                    [
                        'question' => 'Quelle théorie décrit principalement les effets de la vitesse proche de celle de la lumière ?',
                        'choices' => [
                            ['choice_text' => 'La relativité restreinte', 'is_correct' => true],
                            ['choice_text' => 'La mécanique des fluides', 'is_correct' => false],
                            ['choice_text' => 'La thermodynamique classique uniquement', 'is_correct' => false],
                            ['choice_text' => 'La statique des solides', 'is_correct' => false],
                        ],
                        'explanation' => 'La relativité restreinte, proposée par Einstein, décrit notamment les effets relativistes pour les mouvements à grande vitesse.',
                    ],
                    [
                        'question' => 'Quelle idée est centrale en physique quantique ?',
                        'choices' => [
                            ['choice_text' => 'Toutes les grandeurs sont toujours continues sans exception', 'is_correct' => false],
                            ['choice_text' => 'Les particules ne possèdent jamais d’énergie', 'is_correct' => false],
                            ['choice_text' => 'Certaines grandeurs physiques présentent des comportements quantifiés ou probabilistes', 'is_correct' => true],
                            ['choice_text' => 'La lumière est toujours immobile', 'is_correct' => false],
                        ],
                        'explanation' => 'La physique quantique introduit notamment la quantification de certaines grandeurs et une description probabiliste des systèmes microscopiques.',
                    ],
                    [
                        'question' => 'Quelle relation célèbre relie l’énergie au nombre de quanta de fréquence ν ?',
                        'choices' => [
                            ['choice_text' => 'E = mc', 'is_correct' => false],
                            ['choice_text' => 'E = h/ν', 'is_correct' => false],
                            ['choice_text' => 'E = hν', 'is_correct' => true],
                            ['choice_text' => 'E = ν/h', 'is_correct' => false],
                        ],
                        'explanation' => 'Pour un photon, l’énergie est E = hν, où h est la constante de Planck.',
                    ],
                    [
                        'question' => 'Quelle relation d’Einstein relie la masse au repos à l’énergie ?',
                        'choices' => [
                            ['choice_text' => 'E = mv', 'is_correct' => false],
                            ['choice_text' => 'E = m/c²', 'is_correct' => false],
                            ['choice_text' => 'E = c/m', 'is_correct' => false],
                            ['choice_text' => 'E = mc²', 'is_correct' => true],
                        ],
                        'explanation' => 'L’équation E = mc² exprime l’équivalence entre masse au repos et énergie.',
                    ],
                    [
                        'question' => 'Dans la physique moderne, la lumière peut-elle être décrite à la fois comme une onde et comme un ensemble de photons ?',
                        'choices' => [
                            ['choice_text' => 'Non, elle est exclusivement une onde', 'is_correct' => false],
                            ['choice_text' => 'Non, elle est exclusivement composée de particules classiques', 'is_correct' => false],
                            ['choice_text' => 'Seulement dans le vide', 'is_correct' => false],
                            ['choice_text' => 'Oui', 'is_correct' => true],
                        ],
                        'explanation' => 'La dualité onde-particule est une idée fondamentale de la physique moderne.',
                    ],
                    [
                        'question' => 'Quel scientifique est particulièrement associé à la relativité restreinte ?',
                        'choices' => [
                            ['choice_text' => 'Albert Einstein', 'is_correct' => true],
                            ['choice_text' => 'Isaac Newton', 'is_correct' => false],
                            ['choice_text' => 'Archimède', 'is_correct' => false],
                            ['choice_text' => 'James Watt', 'is_correct' => false],
                        ],
                        'explanation' => 'Albert Einstein a publié la théorie de la relativité restreinte en 1905.',
                    ],
                    [
                        'question' => 'Quel scientifique a introduit l’idée de quantification de l’énergie dans l’étude du rayonnement du corps noir ?',
                        'choices' => [
                            ['choice_text' => 'Michael Faraday', 'is_correct' => false],
                            ['choice_text' => 'Max Planck', 'is_correct' => true],
                            ['choice_text' => 'Galilée', 'is_correct' => false],
                            ['choice_text' => 'Robert Hooke', 'is_correct' => false],
                        ],
                        'explanation' => 'Max Planck a introduit l’hypothèse des quanta d’énergie pour résoudre le problème du corps noir.',
                    ],
                    [
                        'question' => 'Pourquoi la physique moderne est-elle particulièrement importante pour comprendre les atomes ?',
                        'choices' => [
                            ['choice_text' => 'Les atomes suivent exactement les mêmes règles qu’une voiture', 'is_correct' => false],
                            ['choice_text' => 'Les phénomènes atomiques ne peuvent pas être décrits correctement par la seule physique classique', 'is_correct' => true],
                            ['choice_text' => 'Les atomes n’ont aucune structure interne', 'is_correct' => false],
                            ['choice_text' => 'La physique moderne ne concerne que les planètes', 'is_correct' => false],
                        ],
                        'explanation' => 'La structure et le comportement des atomes nécessitent des concepts quantiques pour être décrits correctement.',
                    ],
                ],
            ],

            [
                'title' => 'Corps noir et naissance des quanta',
                'description' => 'Comprendre le problème du corps noir et l’origine de l’hypothèse quantique de Planck.',
                'questions' => [
                    [
                        'question' => 'Qu’appelle-t-on un corps noir en physique ?',
                        'choices' => [
                            ['choice_text' => 'Un objet qui ne peut pas émettre de rayonnement', 'is_correct' => false],
                            ['choice_text' => 'Un objet idéal qui absorbe totalement le rayonnement électromagnétique incident', 'is_correct' => true],
                            ['choice_text' => 'Un objet nécessairement noir à l’œil nu dans toutes les situations', 'is_correct' => false],
                            ['choice_text' => 'Un objet dont la température est toujours nulle', 'is_correct' => false],
                        ],
                        'explanation' => 'Le corps noir est un modèle idéal qui absorbe parfaitement le rayonnement incident et possède un spectre d’émission déterminé par sa température.',
                    ],
                    [
                        'question' => 'Quelle grandeur influence fortement le spectre de rayonnement d’un corps noir ?',
                        'choices' => [
                            ['choice_text' => 'La couleur peinte sur sa surface', 'is_correct' => false],
                            ['choice_text' => 'La masse de l’observateur', 'is_correct' => false],
                            ['choice_text' => 'La température', 'is_correct' => true],
                            ['choice_text' => 'La pression atmosphérique uniquement', 'is_correct' => false],
                        ],
                        'explanation' => 'La température détermine la distribution spectrale du rayonnement d’un corps noir.',
                    ],
                    [
                        'question' => 'Quand la température d’un corps noir augmente, son rayonnement total émis :',
                        'choices' => [
                            ['choice_text' => 'Diminue toujours', 'is_correct' => false],
                            ['choice_text' => 'Augmente fortement', 'is_correct' => true],
                            ['choice_text' => 'Devient nécessairement nul', 'is_correct' => false],
                            ['choice_text' => 'Ne change jamais', 'is_correct' => false],
                        ],
                        'explanation' => 'La puissance totale rayonnée augmente fortement avec la température.',
                    ],
                    [
                        'question' => 'Quelle loi relie la puissance surfacique du rayonnement d’un corps noir à sa température absolue ?',
                        'choices' => [
                            ['choice_text' => 'La loi de Hooke', 'is_correct' => false],
                            ['choice_text' => 'La loi de Pascal', 'is_correct' => false],
                            ['choice_text' => 'La loi de Stefan-Boltzmann', 'is_correct' => true],
                            ['choice_text' => 'La loi de Faraday uniquement', 'is_correct' => false],
                        ],
                        'explanation' => 'La loi de Stefan-Boltzmann indique que la puissance rayonnée par unité de surface est proportionnelle à T⁴ pour un corps noir idéal.',
                    ],
                    [
                        'question' => 'Quelle loi décrit le déplacement du maximum du spectre d’un corps noir avec la température ?',
                        'choices' => [
                            ['choice_text' => 'La loi d’Ohm', 'is_correct' => false],
                            ['choice_text' => 'La loi de Coulomb', 'is_correct' => false],
                            ['choice_text' => 'La loi de Bernoulli', 'is_correct' => false],
                            ['choice_text' => 'La loi de déplacement de Wien', 'is_correct' => true],
                        ],
                        'explanation' => 'La loi de Wien relie la longueur d’onde au maximum d’émission à la température.',
                    ],
                    [
                        'question' => 'Lorsque la température d’un corps noir augmente, la longueur d’onde correspondant au maximum d’émission :',
                        'choices' => [
                            ['choice_text' => 'Augmente', 'is_correct' => false],
                            ['choice_text' => 'Reste toujours identique', 'is_correct' => false],
                            ['choice_text' => 'Diminue', 'is_correct' => true],
                            ['choice_text' => 'Devient infinie', 'is_correct' => false],
                        ],
                        'explanation' => 'La loi de Wien donne λ_max T = constante ; une température plus élevée correspond donc à une longueur d’onde maximale plus faible.',
                    ],
                    [
                        'question' => 'Quel problème classique a conduit Planck à introduire des quanta d’énergie ?',
                        'choices' => [
                            ['choice_text' => 'La mesure de la vitesse d’une voiture', 'is_correct' => false],
                            ['choice_text' => 'La loi de flottabilité', 'is_correct' => false],
                            ['choice_text' => 'La pression hydrostatique', 'is_correct' => false],
                            ['choice_text' => 'Le désaccord entre les prédictions classiques et le spectre du corps noir', 'is_correct' => true],
                        ],
                        'explanation' => 'La physique classique ne reproduisait pas correctement le spectre du corps noir, ce qui a conduit à l’hypothèse de quantification de Planck.',
                    ],
                    [
                        'question' => 'Que signifie l’idée de quantification de l’énergie ?',
                        'choices' => [
                            ['choice_text' => 'Dans certaines situations, l’énergie ne peut prendre que certaines valeurs discrètes', 'is_correct' => true],
                            ['choice_text' => 'L’énergie est toujours égale à zéro', 'is_correct' => false],
                            ['choice_text' => 'L’énergie ne peut jamais changer', 'is_correct' => false],
                            ['choice_text' => 'Toutes les énergies sont nécessairement infinies', 'is_correct' => false],
                        ],
                        'explanation' => 'La quantification signifie que certaines valeurs d’énergie accessibles sont discrètes plutôt que continues.',
                    ],
                    [
                        'question' => 'Dans E = hν, que représente h ?',
                        'choices' => [
                            ['choice_text' => 'La constante gravitationnelle', 'is_correct' => false],
                            ['choice_text' => 'La constante de Planck', 'is_correct' => true],
                            ['choice_text' => 'La constante des gaz parfaits', 'is_correct' => false],
                            ['choice_text' => 'La masse d’un photon', 'is_correct' => false],
                        ],
                        'explanation' => 'h est la constante de Planck, une constante fondamentale de la physique quantique.',
                    ],
                    [
                        'question' => 'Le rayonnement thermique d’un objet chaud peut-il contenir de la lumière visible ?',
                        'choices' => [
                            ['choice_text' => 'Oui, si sa température est suffisamment élevée', 'is_correct' => true],
                            ['choice_text' => 'Non, le rayonnement thermique est toujours invisible', 'is_correct' => false],
                            ['choice_text' => 'Seulement dans le vide', 'is_correct' => false],
                            ['choice_text' => 'Seulement lorsque l’objet est froid', 'is_correct' => false],
                        ],
                        'explanation' => 'À température suffisamment élevée, une partie du rayonnement thermique se situe dans le domaine visible.',
                    ],
                ],
            ],

            [
                'title' => 'Effet photoélectrique',
                'description' => 'Comprendre les bases de l’effet photoélectrique et l’idée de photon.',
                'questions' => [
                    [
                        'question' => 'Qu’est-ce que l’effet photoélectrique ?',
                        'choices' => [
                            ['choice_text' => 'La réflexion totale de la lumière sur un miroir', 'is_correct' => false],
                            ['choice_text' => 'L’émission d’électrons par un matériau lorsqu’il est éclairé dans des conditions appropriées', 'is_correct' => true],
                            ['choice_text' => 'La fusion du matériau sous l’effet de la lumière dans tous les cas', 'is_correct' => false],
                            ['choice_text' => 'La disparition de tous les photons incidents', 'is_correct' => false],
                        ],
                        'explanation' => 'L’effet photoélectrique correspond à l’émission d’électrons lorsqu’un rayonnement suffisamment énergétique frappe un matériau.',
                    ],
                    [
                        'question' => 'Quelle particule est émise lors de l’effet photoélectrique ?',
                        'choices' => [
                            ['choice_text' => 'Un électron', 'is_correct' => true],
                            ['choice_text' => 'Un proton', 'is_correct' => false],
                            ['choice_text' => 'Un neutron', 'is_correct' => false],
                            ['choice_text' => 'Un noyau d’hélium', 'is_correct' => false],
                        ],
                        'explanation' => 'L’effet photoélectrique provoque l’émission d’électrons depuis la surface d’un matériau.',
                    ],
                    [
                        'question' => 'Pour qu’un métal émette des électrons par effet photoélectrique, la lumière incidente doit généralement avoir :',
                        'choices' => [
                            ['choice_text' => 'Une intensité quelconque avec fréquence toujours nulle', 'is_correct' => false],
                            ['choice_text' => 'Une fréquence supérieure à une fréquence seuil', 'is_correct' => true],
                            ['choice_text' => 'Une longueur d’onde infinie', 'is_correct' => false],
                            ['choice_text' => 'Une fréquence obligatoirement inférieure à la fréquence seuil', 'is_correct' => false],
                        ],
                        'explanation' => 'Chaque matériau possède une fréquence seuil au-dessous de laquelle l’émission photoélectrique ne se produit pas.',
                    ],
                    [
                        'question' => 'Si la fréquence de la lumière augmente au-dessus du seuil, l’énergie cinétique maximale des électrons émis :',
                        'choices' => [
                            ['choice_text' => 'Diminue toujours', 'is_correct' => false],
                            ['choice_text' => 'Reste toujours exactement nulle', 'is_correct' => false],
                            ['choice_text' => 'Devient indépendante de la fréquence', 'is_correct' => false],
                            ['choice_text' => 'Augmente', 'is_correct' => true],
                        ],
                        'explanation' => 'Selon l’équation d’Einstein, une fréquence plus élevée donne des photons plus énergétiques et donc des électrons plus énergétiques.',
                    ],
                    [
                        'question' => 'Que se passe-t-il si l’intensité lumineuse augmente tout en gardant une fréquence au-dessus du seuil ?',
                        'choices' => [
                            ['choice_text' => 'L’énergie de chaque photon diminue automatiquement', 'is_correct' => false],
                            ['choice_text' => 'La fréquence devient nulle', 'is_correct' => false],
                            ['choice_text' => 'Le nombre d’électrons émis peut augmenter', 'is_correct' => true],
                            ['choice_text' => 'Le travail d’extraction du métal disparaît', 'is_correct' => false],
                        ],
                        'explanation' => 'Une intensité plus grande signifie davantage de photons incidents par unité de temps, ce qui peut augmenter le nombre d’électrons émis.',
                    ],
                    [
                        'question' => 'Quelle relation décrit l’énergie maximale d’un électron photoélectrique ?',
                        'choices' => [
                            ['choice_text' => 'K_max = h/ν + W', 'is_correct' => false],
                            ['choice_text' => 'K_max = W - hν pour ν > ν₀', 'is_correct' => false],
                            ['choice_text' => 'K_max = hν - W', 'is_correct' => true],
                            ['choice_text' => 'K_max = hνW', 'is_correct' => false],
                        ],
                        'explanation' => 'L’énergie du photon est répartie entre le travail d’extraction W et l’énergie cinétique de l’électron.',
                    ],
                    [
                        'question' => 'Que représente le travail d’extraction W d’un métal ?',
                        'choices' => [
                            ['choice_text' => 'L’énergie totale de tous les électrons du métal', 'is_correct' => false],
                            ['choice_text' => 'La masse d’un photon', 'is_correct' => false],
                            ['choice_text' => 'La vitesse de la lumière', 'is_correct' => false],
                            ['choice_text' => 'L’énergie minimale nécessaire pour extraire un électron du matériau', 'is_correct' => true],
                        ],
                        'explanation' => 'Le travail d’extraction est l’énergie minimale nécessaire pour libérer un électron de la surface du matériau.',
                    ],
                    [
                        'question' => 'L’effet photoélectrique a-t-il contribué à soutenir l’idée que la lumière possède un comportement corpusculaire ?',
                        'choices' => [
                            ['choice_text' => 'Oui', 'is_correct' => true],
                            ['choice_text' => 'Non', 'is_correct' => false],
                            ['choice_text' => 'Seulement pour les ondes sonores', 'is_correct' => false],
                            ['choice_text' => 'Uniquement dans les liquides', 'is_correct' => false],
                        ],
                        'explanation' => 'L’effet photoélectrique s’interprète naturellement en considérant la lumière comme constituée de photons individuels.',
                    ],
                    [
                        'question' => 'Un photon possède-t-il une énergie nulle ?',
                        'choices' => [
                            ['choice_text' => 'Oui, toujours', 'is_correct' => false],
                            ['choice_text' => 'Oui, uniquement pour la lumière visible', 'is_correct' => false],
                            ['choice_text' => 'L’énergie d’un photon ne peut pas être définie', 'is_correct' => false],
                            ['choice_text' => 'Non, son énergie vaut E = hν pour une fréquence non nulle', 'is_correct' => true],
                        ],
                        'explanation' => 'Un photon associé à une fréquence ν non nulle possède une énergie E = hν.',
                    ],
                    [
                        'question' => 'Pour une fréquence donnée, augmenter l’intensité lumineuse ne change pas directement :',
                        'choices' => [
                            ['choice_text' => 'Le nombre total de photons incidents', 'is_correct' => false],
                            ['choice_text' => 'Le nombre d’électrons pouvant être émis', 'is_correct' => false],
                            ['choice_text' => 'L’énergie de chaque photon', 'is_correct' => true],
                            ['choice_text' => 'La puissance lumineuse incidente', 'is_correct' => false],
                        ],
                        'explanation' => 'À fréquence fixée, chaque photon possède la même énergie ; une augmentation d’intensité correspond principalement à davantage de photons.',
                    ],
                ],
            ],

            [
                'title' => 'Dualité onde-particule',
                'description' => 'Découvrir la dualité onde-particule de la lumière et de la matière.',
                'questions' => [
                    [
                        'question' => 'Que signifie la dualité onde-particule ?',
                        'choices' => [
                            ['choice_text' => 'Toutes les particules sont simplement des ondes classiques', 'is_correct' => false],
                            ['choice_text' => 'Certaines entités microscopiques présentent à la fois des propriétés ondulatoires et corpusculaires selon l’expérience', 'is_correct' => true],
                            ['choice_text' => 'Toutes les ondes sont des objets matériels classiques', 'is_correct' => false],
                            ['choice_text' => 'Une particule doit toujours être observée comme un objet classique', 'is_correct' => false],
                        ],
                        'explanation' => 'La mécanique quantique montre que les objets microscopiques ne se comportent pas comme de simples particules ou de simples ondes classiques.',
                    ],
                    [
                        'question' => 'Quelle expérience met clairement en évidence le caractère ondulatoire de la lumière ?',
                        'choices' => [
                            ['choice_text' => 'La chute libre d’une balle', 'is_correct' => false],
                            ['choice_text' => 'La mesure de la pression dans un liquide', 'is_correct' => false],
                            ['choice_text' => 'La compression d’un ressort', 'is_correct' => false],
                            ['choice_text' => 'L’expérience des fentes de Young', 'is_correct' => true],
                        ],
                        'explanation' => 'Les franges d’interférences observées dans l’expérience de Young sont une manifestation du comportement ondulatoire de la lumière.',
                    ],
                    [
                        'question' => 'Quelle idée de Louis de Broglie concerne les particules matérielles ?',
                        'choices' => [
                            ['choice_text' => 'Une particule doit toujours être immobile', 'is_correct' => false],
                            ['choice_text' => 'Une particule peut être associée à une longueur d’onde', 'is_correct' => true],
                            ['choice_text' => 'Une particule ne peut avoir aucune énergie', 'is_correct' => false],
                            ['choice_text' => 'Toutes les particules ont exactement la même longueur d’onde', 'is_correct' => false],
                        ],
                        'explanation' => 'De Broglie a proposé l’association d’une longueur d’onde λ = h/p à une particule de quantité de mouvement p.',
                    ],
                    [
                        'question' => 'Quelle relation donne la longueur d’onde de De Broglie ?',
                        'choices' => [
                            ['choice_text' => 'λ = hp', 'is_correct' => false],
                            ['choice_text' => 'λ = p/h', 'is_correct' => false],
                            ['choice_text' => 'λ = h/p', 'is_correct' => true],
                            ['choice_text' => 'λ = h + p', 'is_correct' => false],
                        ],
                        'explanation' => 'La longueur d’onde de De Broglie est donnée par λ = h/p.',
                    ],
                    [
                        'question' => 'Que devient la longueur d’onde de De Broglie lorsque la quantité de mouvement augmente ?',
                        'choices' => [
                            ['choice_text' => 'Elle augmente toujours', 'is_correct' => false],
                            ['choice_text' => 'Elle devient infinie', 'is_correct' => false],
                            ['choice_text' => 'Elle diminue', 'is_correct' => true],
                            ['choice_text' => 'Elle reste nécessairement constante', 'is_correct' => false],
                        ],
                        'explanation' => 'Comme λ = h/p, une plus grande quantité de mouvement correspond à une longueur d’onde plus petite.',
                    ],
                    [
                        'question' => 'Pourquoi les propriétés ondulatoires des objets macroscopiques sont-elles rarement visibles ?',
                        'choices' => [
                            ['choice_text' => 'Ils n’ont aucune quantité de mouvement', 'is_correct' => false],
                            ['choice_text' => 'Ils ne peuvent jamais être en mouvement', 'is_correct' => false],
                            ['choice_text' => 'La constante de Planck est infinie', 'is_correct' => false],
                            ['choice_text' => 'Leur longueur d’onde de De Broglie est généralement extrêmement petite', 'is_correct' => true],
                        ],
                        'explanation' => 'Pour les objets macroscopiques, p est si grand que λ = h/p devient minuscule.',
                    ],
                    [
                        'question' => 'Un électron peut-il montrer des interférences ?',
                        'choices' => [
                            ['choice_text' => 'Oui', 'is_correct' => true],
                            ['choice_text' => 'Non, jamais', 'is_correct' => false],
                            ['choice_text' => 'Seulement lorsqu’il est immobile', 'is_correct' => false],
                            ['choice_text' => 'Uniquement dans un métal', 'is_correct' => false],
                        ],
                        'explanation' => 'Des expériences montrent que des électrons peuvent produire des figures d’interférences, révélant leur caractère ondulatoire quantique.',
                    ],
                    [
                        'question' => 'Le caractère ondulatoire de la matière signifie-t-il qu’un électron est simplement une onde classique ordinaire ?',
                        'choices' => [
                            ['choice_text' => 'Non, sa description relève de la mécanique quantique', 'is_correct' => true],
                            ['choice_text' => 'Oui, exactement comme une onde sonore', 'is_correct' => false],
                            ['choice_text' => 'Oui, exactement comme une vague à la surface de l’eau', 'is_correct' => false],
                            ['choice_text' => 'Non, car un électron n’a aucune propriété ondulatoire', 'is_correct' => false],
                        ],
                        'explanation' => 'La notion d’onde en mécanique quantique ne doit pas être assimilée directement à une onde mécanique classique.',
                    ],
                    [
                        'question' => 'Quelle constante apparaît dans les relations d’Einstein et de De Broglie ?',
                        'choices' => [
                            ['choice_text' => 'La constante gravitationnelle G', 'is_correct' => false],
                            ['choice_text' => 'La constante des gaz R', 'is_correct' => false],
                            ['choice_text' => 'La constante de Faraday F uniquement', 'is_correct' => false],
                            ['choice_text' => 'La constante de Planck h', 'is_correct' => true],
                        ],
                        'explanation' => 'La constante de Planck intervient dans E = hν et λ = h/p.',
                    ],
                    [
                        'question' => 'Quelle expérience célèbre montre la diffraction de particules matérielles ?',
                        'choices' => [
                            ['choice_text' => 'La diffraction des électrons par un cristal', 'is_correct' => true],
                            ['choice_text' => 'La chute d’un objet', 'is_correct' => false],
                            ['choice_text' => 'La réflexion d’un rayon laser sur un miroir', 'is_correct' => false],
                            ['choice_text' => 'La mesure de la température d’un gaz', 'is_correct' => false],
                        ],
                        'explanation' => 'La diffraction des électrons par des cristaux a fourni une confirmation expérimentale de leur nature ondulatoire.',
                    ],
                ],
            ],

            [
                'title' => 'Atomes et niveaux d’énergie',
                'description' => 'Comprendre les niveaux d’énergie des électrons et l’origine des spectres atomiques.',
                'questions' => [
                    [
                        'question' => 'Pourquoi dit-on que les niveaux d’énergie d’un atome sont quantifiés ?',
                        'choices' => [
                            ['choice_text' => 'Parce que toutes les énergies sont possibles sans restriction', 'is_correct' => false],
                            ['choice_text' => 'Parce que l’atome n’a aucune énergie', 'is_correct' => false],
                            ['choice_text' => 'Parce que l’électron ne peut occuper que certaines valeurs d’énergie autorisées', 'is_correct' => true],
                            ['choice_text' => 'Parce que l’énergie dépend uniquement de la température extérieure', 'is_correct' => false],
                        ],
                        'explanation' => 'Les états stationnaires accessibles à un électron dans un atome sont associés à des énergies discrètes.',
                    ],
                    [
                        'question' => 'Que se produit-il lorsqu’un électron passe d’un niveau d’énergie élevé à un niveau plus bas ?',
                        'choices' => [
                            ['choice_text' => 'Un neutron est automatiquement créé', 'is_correct' => false],
                            ['choice_text' => 'La masse du noyau disparaît', 'is_correct' => false],
                            ['choice_text' => 'L’atome perd nécessairement tous ses électrons', 'is_correct' => false],
                            ['choice_text' => 'Un photon peut être émis', 'is_correct' => true],
                        ],
                        'explanation' => 'Lors d’une transition vers un niveau inférieur, l’atome peut émettre un photon dont l’énergie correspond à la différence des niveaux.',
                    ],
                    [
                        'question' => 'Que se produit-il lorsqu’un électron absorbe un photon d’énergie appropriée ?',
                        'choices' => [
                            ['choice_text' => 'Il peut passer vers un niveau d’énergie supérieur', 'is_correct' => true],
                            ['choice_text' => 'Il disparaît toujours du système', 'is_correct' => false],
                            ['choice_text' => 'Le noyau est détruit', 'is_correct' => false],
                            ['choice_text' => 'La température devient automatiquement nulle', 'is_correct' => false],
                        ],
                        'explanation' => 'L’absorption d’un photon approprié peut provoquer une transition vers un état excité.',
                    ],
                    [
                        'question' => 'L’énergie d’un photon émis lors d’une transition atomique est égale à :',
                        'choices' => [
                            ['choice_text' => 'La différence entre les deux niveaux d’énergie', 'is_correct' => true],
                            ['choice_text' => 'La somme des masses des électrons', 'is_correct' => false],
                            ['choice_text' => 'La température du laboratoire', 'is_correct' => false],
                            ['choice_text' => 'La charge électrique totale de l’atome', 'is_correct' => false],
                        ],
                        'explanation' => 'L’énergie du photon est E_photon = E_initial - E_final lorsque l’électron descend vers un niveau inférieur.',
                    ],
                    [
                        'question' => 'Pourquoi chaque élément chimique possède-t-il un spectre caractéristique ?',
                        'choices' => [
                            ['choice_text' => 'Parce que chaque élément a une masse visible différente', 'is_correct' => false],
                            ['choice_text' => 'Parce que tous les électrons ont des charges différentes selon l’élément', 'is_correct' => false],
                            ['choice_text' => 'Parce que chaque noyau produit directement toutes les couleurs', 'is_correct' => false],
                            ['choice_text' => 'Parce que ses niveaux d’énergie électroniques possèdent une structure spécifique', 'is_correct' => true],
                        ],
                        'explanation' => 'Les différences entre niveaux d’énergie déterminent les fréquences des photons absorbés ou émis.',
                    ],
                    [
                        'question' => 'Le spectre d’émission d’un gaz atomique excité est souvent :',
                        'choices' => [
                            ['choice_text' => 'Totalement continu dans tous les cas', 'is_correct' => false],
                            ['choice_text' => 'Composé de raies caractéristiques', 'is_correct' => true],
                            ['choice_text' => 'Toujours invisible', 'is_correct' => false],
                            ['choice_text' => 'Identique pour tous les éléments', 'is_correct' => false],
                        ],
                        'explanation' => 'Les transitions entre niveaux d’énergie discrets donnent souvent un spectre de raies.',
                    ],
                    [
                        'question' => 'L’état de plus basse énergie d’un atome est appelé :',
                        'choices' => [
                            ['choice_text' => 'L’état ionisé', 'is_correct' => false],
                            ['choice_text' => 'L’état fondamental', 'is_correct' => true],
                            ['choice_text' => 'L’état critique', 'is_correct' => false],
                            ['choice_text' => 'L’état de dispersion', 'is_correct' => false],
                        ],
                        'explanation' => 'L’état fondamental est l’état de plus basse énergie accessible à l’atome.',
                    ],
                    [
                        'question' => 'Comment appelle-t-on un atome dont un ou plusieurs électrons ont acquis suffisamment d’énergie pour occuper un niveau supérieur ?',
                        'choices' => [
                            ['choice_text' => 'Un atome excité', 'is_correct' => true],
                            ['choice_text' => 'Un atome froid', 'is_correct' => false],
                            ['choice_text' => 'Un atome neutre uniquement', 'is_correct' => false],
                            ['choice_text' => 'Un atome incompressible', 'is_correct' => false],
                        ],
                        'explanation' => 'Un atome excité possède au moins un électron dans un état d’énergie supérieur à l’état fondamental.',
                    ],
                    [
                        'question' => 'Qu’appelle-t-on ionisation d’un atome ?',
                        'choices' => [
                            ['choice_text' => 'Le passage d’un niveau à un autre sans échange d’énergie', 'is_correct' => false],
                            ['choice_text' => 'Le processus par lequel un électron est complètement arraché à l’atome', 'is_correct' => true],
                            ['choice_text' => 'La fusion de deux atomes', 'is_correct' => false],
                            ['choice_text' => 'La transformation d’un photon en neutron', 'is_correct' => false],
                        ],
                        'explanation' => 'L’ionisation produit un ion en retirant au moins un électron de l’atome.',
                    ],
                    [
                        'question' => 'Que signifie un photon correspondant à une plus grande différence d’énergie entre deux niveaux ?',
                        'choices' => [
                            ['choice_text' => 'Il possède toujours une fréquence plus faible', 'is_correct' => false],
                            ['choice_text' => 'Il n’a aucune énergie', 'is_correct' => false],
                            ['choice_text' => 'Il possède une fréquence plus élevée', 'is_correct' => true],
                            ['choice_text' => 'Il doit nécessairement être un neutron', 'is_correct' => false],
                        ],
                        'explanation' => 'Comme E = hν, une différence d’énergie plus grande correspond à une fréquence photonique plus élevée.',
                    ],
                ],
            ],

            [
                'title' => 'Modèles atomiques',
                'description' => 'Revoir l’évolution des modèles de l’atome, de Dalton à la description quantique.',
                'questions' => [
                    [
                        'question' => 'Quel modèle ancien représentait l’atome comme une petite sphère indivisible ?',
                        'choices' => [
                            ['choice_text' => 'Le modèle de Bohr', 'is_correct' => false],
                            ['choice_text' => 'Le modèle de Dalton', 'is_correct' => true],
                            ['choice_text' => 'Le modèle de Schrödinger', 'is_correct' => false],
                            ['choice_text' => 'Le modèle nucléaire moderne', 'is_correct' => false],
                        ],
                        'explanation' => 'Le modèle atomique de Dalton décrivait les atomes comme des unités indivisibles dans le cadre de sa théorie.',
                    ],
                    [
                        'question' => 'Quelle expérience a contribué à montrer que l’atome contient des électrons ?',
                        'choices' => [
                            ['choice_text' => 'Les expériences sur les pendules', 'is_correct' => false],
                            ['choice_text' => 'Les expériences de thermodynamique des gaz uniquement', 'is_correct' => false],
                            ['choice_text' => 'Les observations des marées', 'is_correct' => false],
                            ['choice_text' => 'Les expériences sur les rayons cathodiques', 'is_correct' => true],
                        ],
                        'explanation' => 'Les travaux sur les rayons cathodiques ont conduit à l’identification de l’électron.',
                    ],
                    [
                        'question' => 'Qui est associé à la découverte expérimentale de l’électron ?',
                        'choices' => [
                            ['choice_text' => 'Niels Bohr', 'is_correct' => false],
                            ['choice_text' => 'Louis de Broglie', 'is_correct' => false],
                            ['choice_text' => 'J. J. Thomson', 'is_correct' => true],
                            ['choice_text' => 'Erwin Schrödinger', 'is_correct' => false],
                        ],
                        'explanation' => 'J. J. Thomson a mis en évidence l’électron grâce à l’étude des rayons cathodiques.',
                    ],
                    [
                        'question' => 'Quelle expérience de Rutherford a conduit à l’idée d’un noyau atomique petit et dense ?',
                        'choices' => [
                            ['choice_text' => 'L’expérience des fentes de Young', 'is_correct' => false],
                            ['choice_text' => 'L’expérience du corps noir', 'is_correct' => false],
                            ['choice_text' => 'L’expérience de diffusion des particules alpha sur une feuille d’or', 'is_correct' => true],
                            ['choice_text' => 'L’expérience de la balance de torsion', 'is_correct' => false],
                        ],
                        'explanation' => 'Les déviations importantes observées dans l’expérience de Rutherford ont conduit au modèle nucléaire de l’atome.',
                    ],
                    [
                        'question' => 'Selon le modèle nucléaire de Rutherford, la majeure partie du volume de l’atome est :',
                        'choices' => [
                            ['choice_text' => 'Remplie uniformément de matière dense', 'is_correct' => false],
                            ['choice_text' => 'Constituée d’espace où se trouvent les électrons autour d’un petit noyau', 'is_correct' => true],
                            ['choice_text' => 'Occupée entièrement par les protons', 'is_correct' => false],
                            ['choice_text' => 'Occupée entièrement par les neutrons', 'is_correct' => false],
                        ],
                        'explanation' => 'Le noyau est extrêmement petit par rapport à la taille totale de l’atome.',
                    ],
                    [
                        'question' => 'Quelle amélioration importante Bohr a-t-il apportée au modèle de Rutherford ?',
                        'choices' => [
                            ['choice_text' => 'La suppression complète du noyau', 'is_correct' => false],
                            ['choice_text' => 'La suppression des électrons', 'is_correct' => false],
                            ['choice_text' => 'L’introduction de niveaux d’énergie quantifiés pour les électrons', 'is_correct' => true],
                            ['choice_text' => 'L’affirmation que toutes les énergies sont continues', 'is_correct' => false],
                        ],
                        'explanation' => 'Le modèle de Bohr introduit des états électroniques quantifiés pour expliquer notamment les spectres de l’hydrogène.',
                    ],
                    [
                        'question' => 'Le modèle quantique moderne décrit-il les électrons comme de petites billes tournant simplement sur des orbites classiques parfaitement définies ?',
                        'choices' => [
                            ['choice_text' => 'Oui, exactement', 'is_correct' => false],
                            ['choice_text' => 'Non', 'is_correct' => true],
                            ['choice_text' => 'Oui, mais uniquement dans les solides', 'is_correct' => false],
                            ['choice_text' => 'Oui, mais seulement à température nulle', 'is_correct' => false],
                        ],
                        'explanation' => 'La mécanique quantique décrit les électrons à l’aide d’états quantiques et de probabilités de présence, pas comme des planètes classiques sur des orbites déterminées.',
                    ],
                    [
                        'question' => 'Quel concept quantique remplace l’idée d’une trajectoire électronique parfaitement définie ?',
                        'choices' => [
                            ['choice_text' => 'La trajectoire circulaire classique exacte', 'is_correct' => false],
                            ['choice_text' => 'La pression hydrostatique', 'is_correct' => false],
                            ['choice_text' => 'La température du noyau uniquement', 'is_correct' => false],
                            ['choice_text' => 'L’orbital atomique ou état quantique', 'is_correct' => true],
                        ],
                        'explanation' => 'Une orbitale décrit une distribution spatiale liée à la probabilité de présence de l’électron.',
                    ],
                    [
                        'question' => 'Quel scientifique a développé une équation fondamentale de la mécanique quantique décrivant l’évolution des états ?',
                        'choices' => [
                            ['choice_text' => 'Erwin Schrödinger', 'is_correct' => true],
                            ['choice_text' => 'James Joule', 'is_correct' => false],
                            ['choice_text' => 'Isaac Newton', 'is_correct' => false],
                            ['choice_text' => 'Charles Coulomb', 'is_correct' => false],
                        ],
                        'explanation' => 'L’équation de Schrödinger est l’une des équations centrales de la mécanique quantique.',
                    ],
                    [
                        'question' => 'Pourquoi les modèles atomiques ont-ils évolué au fil du temps ?',
                        'choices' => [
                            ['choice_text' => 'Parce que de nouvelles expériences ont apporté des résultats incompatibles avec certains modèles précédents', 'is_correct' => true],
                            ['choice_text' => 'Parce que les anciennes théories étaient toujours inutiles', 'is_correct' => false],
                            ['choice_text' => 'Parce que les atomes changeaient de nature avec les années', 'is_correct' => false],
                            ['choice_text' => 'Parce que les scientifiques ont cessé de faire des expériences', 'is_correct' => false],
                        ],
                        'explanation' => 'Les modèles scientifiques évoluent lorsque de nouvelles observations nécessitent une description plus précise.',
                    ],
                ],
            ],

            [
                'title' => 'Relativité restreinte',
                'description' => 'Découvrir les principes de base de la relativité restreinte et quelques conséquences simples.',
                'questions' => [
                    [
                        'question' => 'Quel est l’un des postulats fondamentaux de la relativité restreinte ?',
                        'choices' => [
                            ['choice_text' => 'La vitesse de la lumière dépend de la vitesse de l’observateur dans le vide', 'is_correct' => false],
                            ['choice_text' => 'Le temps est absolument identique pour tous les observateurs', 'is_correct' => false],
                            ['choice_text' => 'La longueur d’un objet est toujours infinie', 'is_correct' => false],
                            ['choice_text' => 'Les lois de la physique sont les mêmes dans tous les référentiels inertiels', 'is_correct' => true],
                        ],
                        'explanation' => 'La relativité restreinte repose notamment sur le principe de relativité et l’invariance de la vitesse de la lumière dans le vide.',
                    ],
                    [
                        'question' => 'Quelle est la vitesse de la lumière dans le vide selon la relativité restreinte ?',
                        'choices' => [
                            ['choice_text' => 'Une valeur qui augmente toujours avec la vitesse de l’observateur', 'is_correct' => false],
                            ['choice_text' => 'Une valeur nulle', 'is_correct' => false],
                            ['choice_text' => 'La même valeur c pour tous les observateurs inertiels', 'is_correct' => true],
                            ['choice_text' => 'Une valeur dépendant uniquement de la masse de la source', 'is_correct' => false],
                        ],
                        'explanation' => 'La vitesse de la lumière dans le vide est une constante fondamentale, notée c.',
                    ],
                    [
                        'question' => 'Que signifie la dilatation du temps ?',
                        'choices' => [
                            ['choice_text' => 'Le temps cesse d’exister à grande vitesse', 'is_correct' => false],
                            ['choice_text' => 'Toutes les horloges avancent toujours deux fois plus vite', 'is_correct' => false],
                            ['choice_text' => 'Une durée mesurée dans un référentiel peut être plus grande que la durée propre pour un système en mouvement relatif', 'is_correct' => true],
                            ['choice_text' => 'Le temps dépend uniquement de la température', 'is_correct' => false],
                        ],
                        'explanation' => 'Les intervalles de temps dépendent du mouvement relatif des référentiels en relativité restreinte.',
                    ],
                    [
                        'question' => 'Que signifie la contraction des longueurs ?',
                        'choices' => [
                            ['choice_text' => 'La longueur mesurée d’un objet en mouvement peut être plus courte dans la direction du mouvement', 'is_correct' => true],
                            ['choice_text' => 'Tous les objets deviennent physiquement plus petits pour eux-mêmes', 'is_correct' => false],
                            ['choice_text' => 'La longueur devient toujours nulle', 'is_correct' => false],
                            ['choice_text' => 'La contraction dépend uniquement de la température', 'is_correct' => false],
                        ],
                        'explanation' => 'Pour un observateur qui voit l’objet en mouvement, sa longueur dans la direction du mouvement est contractée.',
                    ],
                    [
                        'question' => 'À faible vitesse par rapport à c, les effets relativistes sont généralement :',
                        'choices' => [
                            ['choice_text' => 'Énormes dans tous les cas', 'is_correct' => false],
                            ['choice_text' => 'Infinis', 'is_correct' => false],
                            ['choice_text' => 'Très faibles', 'is_correct' => true],
                            ['choice_text' => 'Toujours dominants sur la gravité', 'is_correct' => false],
                        ],
                        'explanation' => 'Lorsque v << c, les résultats relativistes se rapprochent fortement de ceux de la mécanique classique.',
                    ],
                    [
                        'question' => 'Que représente γ dans les formules relativistes ?',
                        'choices' => [
                            ['choice_text' => 'La constante de Planck', 'is_correct' => false],
                            ['choice_text' => 'La charge de l’électron', 'is_correct' => false],
                            ['choice_text' => 'La masse du photon', 'is_correct' => false],
                            ['choice_text' => 'Le facteur de Lorentz', 'is_correct' => true],
                        ],
                        'explanation' => 'Le facteur de Lorentz γ = 1/√(1 - v²/c²) intervient dans plusieurs formules de relativité restreinte.',
                    ],
                    [
                        'question' => 'Que se passe-t-il pour le facteur de Lorentz lorsque la vitesse d’un objet se rapproche de c ?',
                        'choices' => [
                            ['choice_text' => 'Il augmente fortement', 'is_correct' => true],
                            ['choice_text' => 'Il devient toujours nul', 'is_correct' => false],
                            ['choice_text' => 'Il reste exactement égal à 1', 'is_correct' => false],
                            ['choice_text' => 'Il devient négatif', 'is_correct' => false],
                        ],
                        'explanation' => 'Lorsque v approche c, le dénominateur tend vers zéro et γ augmente fortement.',
                    ],
                    [
                        'question' => 'Un objet ayant une masse au repos non nulle peut-il atteindre exactement la vitesse de la lumière selon la relativité restreinte ?',
                        'choices' => [
                            ['choice_text' => 'Oui, avec suffisamment de carburant', 'is_correct' => false],
                            ['choice_text' => 'Non, cela nécessiterait une énergie qui diverge dans le cadre relativiste', 'is_correct' => true],
                            ['choice_text' => 'Oui, dès qu’il atteint 100 m/s', 'is_correct' => false],
                            ['choice_text' => 'Oui, si sa température est suffisamment élevée', 'is_correct' => false],
                        ],
                        'explanation' => 'Pour une particule massive, l’énergie nécessaire augmente sans limite lorsque sa vitesse tend vers c.',
                    ],
                    [
                        'question' => 'La relativité restreinte modifie-t-elle la notion classique de simultanéité ?',
                        'choices' => [
                            ['choice_text' => 'Non, la simultanéité est toujours absolue', 'is_correct' => false],
                            ['choice_text' => 'Oui', 'is_correct' => true],
                            ['choice_text' => 'Seulement pour les objets au repos', 'is_correct' => false],
                            ['choice_text' => 'Seulement dans les liquides', 'is_correct' => false],
                        ],
                        'explanation' => 'Deux événements simultanés pour un observateur peuvent ne pas l’être pour un autre observateur en mouvement relatif.',
                    ],
                    [
                        'question' => 'Quelle célèbre relation représente l’équivalence masse-énergie ?',
                        'choices' => [
                            ['choice_text' => 'E = m/c²', 'is_correct' => false],
                            ['choice_text' => 'E = mv²', 'is_correct' => false],
                            ['choice_text' => 'E = c/m', 'is_correct' => false],
                            ['choice_text' => 'E = mc²', 'is_correct' => true],
                        ],
                        'explanation' => 'L’équation E = mc² associe une énergie de repos à une masse m.',
                    ],
                ],
            ],

            [
                'title' => 'Noyau et radioactivité',
                'description' => 'Découvrir la structure du noyau atomique et les principaux types de radioactivité.',
                'questions' => [
                    [
                        'question' => 'Quelles particules constituent principalement le noyau atomique ?',
                        'choices' => [
                            ['choice_text' => 'Les électrons uniquement', 'is_correct' => false],
                            ['choice_text' => 'Les photons uniquement', 'is_correct' => false],
                            ['choice_text' => 'Les électrons et les photons uniquement', 'is_correct' => false],
                            ['choice_text' => 'Les protons et les neutrons', 'is_correct' => true],
                        ],
                        'explanation' => 'Le noyau est constitué de nucléons : protons et neutrons.',
                    ],
                    [
                        'question' => 'Quelle charge électrique possède un proton ?',
                        'choices' => [
                            ['choice_text' => 'Une charge négative', 'is_correct' => false],
                            ['choice_text' => 'Aucune charge électrique', 'is_correct' => false],
                            ['choice_text' => 'Une charge positive', 'is_correct' => true],
                            ['choice_text' => 'Une charge variable avec la température', 'is_correct' => false],
                        ],
                        'explanation' => 'Le proton porte la charge élémentaire positive +e.',
                    ],
                    [
                        'question' => 'Quelle charge électrique possède un neutron ?',
                        'choices' => [
                            ['choice_text' => 'Une charge électrique nette nulle', 'is_correct' => true],
                            ['choice_text' => 'Une charge positive égale à celle du proton', 'is_correct' => false],
                            ['choice_text' => 'Une charge négative', 'is_correct' => false],
                            ['choice_text' => 'Une charge qui dépend du nombre de neutrons', 'is_correct' => false],
                        ],
                        'explanation' => 'Le neutron est électriquement neutre.',
                    ],
                    [
                        'question' => 'Que signifie le numéro atomique Z d’un élément ?',
                        'choices' => [
                            ['choice_text' => 'Le nombre de neutrons uniquement', 'is_correct' => false],
                            ['choice_text' => 'Le nombre total de nucléons', 'is_correct' => false],
                            ['choice_text' => 'Le nombre d’électrons excités uniquement', 'is_correct' => false],
                            ['choice_text' => 'Le nombre de protons dans le noyau', 'is_correct' => true],
                        ],
                        'explanation' => 'Le numéro atomique Z identifie l’élément et correspond au nombre de protons.',
                    ],
                    [
                        'question' => 'Que représente le nombre de masse A ?',
                        'choices' => [
                            ['choice_text' => 'Le nombre de protons uniquement', 'is_correct' => false],
                            ['choice_text' => 'Le nombre d’électrons uniquement', 'is_correct' => false],
                            ['choice_text' => 'Le nombre total de protons et de neutrons', 'is_correct' => true],
                            ['choice_text' => 'La charge du noyau en coulombs', 'is_correct' => false],
                        ],
                        'explanation' => 'A correspond au nombre total de nucléons : A = Z + N.',
                    ],
                    [
                        'question' => 'Que sont deux isotopes d’un même élément ?',
                        'choices' => [
                            ['choice_text' => 'Des atomes ayant le même nombre de protons mais des nombres de neutrons différents', 'is_correct' => true],
                            ['choice_text' => 'Des atomes ayant des nombres de protons différents mais identiques', 'is_correct' => false],
                            ['choice_text' => 'Des atomes ayant uniquement des charges différentes', 'is_correct' => false],
                            ['choice_text' => 'Des noyaux composés uniquement d’électrons', 'is_correct' => false],
                        ],
                        'explanation' => 'Les isotopes ont le même Z mais des nombres de neutrons différents.',
                    ],
                    [
                        'question' => 'Qu’appelle-t-on radioactivité ?',
                        'choices' => [
                            ['choice_text' => 'La transformation spontanée de noyaux instables accompagnée d’un rayonnement', 'is_correct' => true],
                            ['choice_text' => 'La réflexion de la lumière sur un noyau stable', 'is_correct' => false],
                            ['choice_text' => 'La simple vibration d’un électron', 'is_correct' => false],
                            ['choice_text' => 'La compression d’un gaz', 'is_correct' => false],
                        ],
                        'explanation' => 'Un noyau radioactif se transforme spontanément vers un état plus stable en émettant un rayonnement.',
                    ],
                    [
                        'question' => 'Quel rayonnement correspond à l’émission d’un noyau d’hélium ?',
                        'choices' => [
                            ['choice_text' => 'Le rayonnement bêta moins uniquement', 'is_correct' => false],
                            ['choice_text' => 'Le rayonnement alpha', 'is_correct' => true],
                            ['choice_text' => 'Le rayonnement gamma uniquement', 'is_correct' => false],
                            ['choice_text' => 'Le rayonnement infrarouge', 'is_correct' => false],
                        ],
                        'explanation' => 'Une particule alpha est un noyau d’hélium composé de deux protons et deux neutrons.',
                    ],
                    [
                        'question' => 'Quel rayonnement correspond à l’émission d’un électron dans une désintégration bêta moins ?',
                        'choices' => [
                            ['choice_text' => 'Le rayonnement alpha', 'is_correct' => false],
                            ['choice_text' => 'Le rayonnement bêta moins', 'is_correct' => true],
                            ['choice_text' => 'Le rayonnement gamma', 'is_correct' => false],
                            ['choice_text' => 'Le rayonnement radio uniquement', 'is_correct' => false],
                        ],
                        'explanation' => 'Lors d’une désintégration bêta moins, un neutron se transforme en proton avec émission d’un électron et d’un antineutrino.',
                    ],
                    [
                        'question' => 'Quel rayonnement électromagnétique peut être émis par un noyau excité ?',
                        'choices' => [
                            ['choice_text' => 'Le rayonnement alpha', 'is_correct' => false],
                            ['choice_text' => 'Le rayonnement bêta moins', 'is_correct' => false],
                            ['choice_text' => 'Le rayonnement mécanique', 'is_correct' => false],
                            ['choice_text' => 'Le rayonnement gamma', 'is_correct' => true],
                        ],
                        'explanation' => 'La désexcitation d’un noyau peut produire des photons gamma très énergétiques.',
                    ],
                ],
            ],

            [
                'title' => 'Décroissance radioactive et demi-vie',
                'description' => 'Comprendre la loi de décroissance radioactive et la notion de demi-vie.',
                'questions' => [
                    [
                        'question' => 'Qu’est-ce que la demi-vie radioactive ?',
                        'choices' => [
                            ['choice_text' => 'Le temps nécessaire pour que la moitié des noyaux radioactifs initiaux se désintègrent', 'is_correct' => true],
                            ['choice_text' => 'Le temps nécessaire pour que tous les noyaux disparaissent', 'is_correct' => false],
                            ['choice_text' => 'La moitié de la masse du noyau', 'is_correct' => false],
                            ['choice_text' => 'Le temps nécessaire pour doubler le nombre de noyaux', 'is_correct' => false],
                        ],
                        'explanation' => 'La demi-vie T_1/2 est la durée au bout de laquelle il reste la moitié de la population radioactive initiale.',
                    ],
                    [
                        'question' => 'Après une demi-vie, quelle fraction des noyaux radioactifs initiaux reste-t-il ?',
                        'choices' => [
                            ['choice_text' => '1/2', 'is_correct' => true],
                            ['choice_text' => '1', 'is_correct' => false],
                            ['choice_text' => '1/4', 'is_correct' => false],
                            ['choice_text' => '0', 'is_correct' => false],
                        ],
                        'explanation' => 'Après une demi-vie, il reste 50 % de la population initiale.',
                    ],
                    [
                        'question' => 'Après deux demi-vies, quelle fraction des noyaux initiaux reste-t-il ?',
                        'choices' => [
                            ['choice_text' => '1/2', 'is_correct' => false],
                            ['choice_text' => '1/4', 'is_correct' => true],
                            ['choice_text' => '3/4', 'is_correct' => false],
                            ['choice_text' => '1/8', 'is_correct' => false],
                        ],
                        'explanation' => 'Après deux demi-vies, il reste (1/2)² = 1/4 des noyaux initiaux.',
                    ],
                    [
                        'question' => 'Après trois demi-vies, quelle fraction des noyaux initiaux reste-t-il ?',
                        'choices' => [
                            ['choice_text' => '1/8', 'is_correct' => true],
                            ['choice_text' => '1/3', 'is_correct' => false],
                            ['choice_text' => '1/6', 'is_correct' => false],
                            ['choice_text' => '3/8', 'is_correct' => false],
                        ],
                        'explanation' => 'Après trois demi-vies, il reste (1/2)³ = 1/8 de la population initiale.',
                    ],
                    [
                        'question' => 'La décroissance radioactive d’un grand ensemble de noyaux suit généralement une loi :',
                        'choices' => [
                            ['choice_text' => 'Linéaire sans limite', 'is_correct' => false],
                            ['choice_text' => 'Quadratique uniquement', 'is_correct' => false],
                            ['choice_text' => 'Exponentielle', 'is_correct' => true],
                            ['choice_text' => 'Constante', 'is_correct' => false],
                        ],
                        'explanation' => 'La loi de décroissance radioactive est N(t) = N₀e^(-λt).',
                    ],
                    [
                        'question' => 'Que représente λ dans la loi de décroissance radioactive ?',
                        'choices' => [
                            ['choice_text' => 'La longueur d’onde de la lumière uniquement', 'is_correct' => false],
                            ['choice_text' => 'La constante de désintégration radioactive', 'is_correct' => true],
                            ['choice_text' => 'La masse du noyau', 'is_correct' => false],
                            ['choice_text' => 'La température du matériau', 'is_correct' => false],
                        ],
                        'explanation' => 'λ caractérise la probabilité de désintégration par unité de temps dans le modèle radioactif.',
                    ],
                    [
                        'question' => 'Quelle relation relie la constante de désintégration λ à la demi-vie T_1/2 ?',
                        'choices' => [
                            ['choice_text' => 'T_1/2 = λ/ln(2)', 'is_correct' => false],
                            ['choice_text' => 'T_1/2 = 2λ', 'is_correct' => false],
                            ['choice_text' => 'T_1/2 = λ²', 'is_correct' => false],
                            ['choice_text' => 'T_1/2 = ln(2)/λ', 'is_correct' => true],
                        ],
                        'explanation' => 'La relation exacte est T_1/2 = ln(2)/λ.',
                    ],
                    [
                        'question' => 'Une substance possède une demi-vie de 10 jours. Après 20 jours, il reste idéalement :',
                        'choices' => [
                            ['choice_text' => '50 %', 'is_correct' => false],
                            ['choice_text' => '75 %', 'is_correct' => false],
                            ['choice_text' => '25 % des noyaux initiaux', 'is_correct' => true],
                            ['choice_text' => '10 %', 'is_correct' => false],
                        ],
                        'explanation' => '20 jours correspondent à deux demi-vies : (1/2)² = 1/4 = 25 %.',
                    ],
                    [
                        'question' => 'La demi-vie d’un isotope radioactif dépend-elle, dans le modèle nucléaire usuel, de la quantité initiale de cet isotope ?',
                        'choices' => [
                            ['choice_text' => 'Oui, elle double lorsque la quantité double', 'is_correct' => false],
                            ['choice_text' => 'Non', 'is_correct' => true],
                            ['choice_text' => 'Oui, elle dépend uniquement de la masse totale de l’échantillon', 'is_correct' => false],
                            ['choice_text' => 'Oui, mais seulement pour les isotopes légers', 'is_correct' => false],
                        ],
                        'explanation' => 'La demi-vie est une caractéristique de l’isotope considéré et ne dépend pas de la quantité initiale.',
                    ],
                    [
                        'question' => 'L’activité radioactive d’un échantillon représente principalement :',
                        'choices' => [
                            ['choice_text' => 'La masse totale de l’échantillon', 'is_correct' => false],
                            ['choice_text' => 'La température du noyau', 'is_correct' => false],
                            ['choice_text' => 'Le nombre total de protons de l’échantillon', 'is_correct' => false],
                            ['choice_text' => 'Le nombre de désintégrations par unité de temps', 'is_correct' => true],
                        ],
                        'explanation' => 'L’activité A mesure le taux de désintégration et s’exprime en becquerels.',
                    ],
                    [
                        'question' => 'Quelle est l’unité SI de l’activité radioactive ?',
                        'choices' => [
                            ['choice_text' => 'Le gray par seconde uniquement', 'is_correct' => false],
                            ['choice_text' => 'Le hertz électrique', 'is_correct' => false],
                            ['choice_text' => 'Le becquerel', 'is_correct' => true],
                            ['choice_text' => 'Le pascal', 'is_correct' => false],
                        ],
                        'explanation' => 'Le becquerel (Bq) correspond à une désintégration par seconde.',
                    ],
                ],
            ],

            [
                'title' => 'Applications de la physique moderne',
                'description' => 'Découvrir quelques applications concrètes des concepts de physique moderne dans la vie courante et la technologie.',
                'questions' => [
                    [
                        'question' => 'Quel phénomène physique est exploité par les panneaux photovoltaïques ?',
                        'choices' => [
                            ['choice_text' => 'La poussée d’Archimède', 'is_correct' => false],
                            ['choice_text' => 'La radioactivité alpha uniquement', 'is_correct' => false],
                            ['choice_text' => 'La dilatation thermique de l’air', 'is_correct' => false],
                            ['choice_text' => 'L’interaction de la lumière avec les électrons dans un matériau semi-conducteur', 'is_correct' => true],
                        ],
                        'explanation' => 'Les cellules photovoltaïques utilisent l’interaction entre photons et électrons dans un semi-conducteur pour produire une tension électrique.',
                    ],
                    [
                        'question' => 'Quel phénomène est exploité dans les lasers ?',
                        'choices' => [
                            ['choice_text' => 'La convection naturelle', 'is_correct' => false],
                            ['choice_text' => 'La pression hydrostatique', 'is_correct' => false],
                            ['choice_text' => 'La diffusion thermique uniquement', 'is_correct' => false],
                            ['choice_text' => 'L’émission stimulée de rayonnement', 'is_correct' => true],
                        ],
                        'explanation' => 'Le laser repose notamment sur l’émission stimulée et l’amplification cohérente de la lumière.',
                    ],
                    [
                        'question' => 'Quel appareil médical utilise fortement les rayons X ?',
                        'choices' => [
                            ['choice_text' => 'Le radiographe ou appareil de radiographie', 'is_correct' => true],
                            ['choice_text' => 'Le thermomètre classique', 'is_correct' => false],
                            ['choice_text' => 'Le manomètre', 'is_correct' => false],
                            ['choice_text' => 'Le voltmètre', 'is_correct' => false],
                        ],
                        'explanation' => 'La radiographie utilise des rayons X pour obtenir des images de l’intérieur du corps.',
                    ],
                    [
                        'question' => 'Pourquoi les rayons X peuvent-ils traverser certaines parties du corps humain ?',
                        'choices' => [
                            ['choice_text' => 'Leur absorption dépend du matériau et de sa densité', 'is_correct' => true],
                            ['choice_text' => 'Parce qu’ils ne transportent aucune énergie', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’ils sont identiques aux ondes sonores', 'is_correct' => false],
                            ['choice_text' => 'Parce que toutes les matières sont transparentes aux rayons X', 'is_correct' => false],
                        ],
                        'explanation' => 'Les rayons X sont absorbés différemment selon les tissus et les matériaux, ce qui permet de créer un contraste.',
                    ],
                    [
                        'question' => 'Quel appareil utilise l’effet tunnel quantique dans son fonctionnement fondamental ?',
                        'choices' => [
                            ['choice_text' => 'Le baromètre à mercure', 'is_correct' => false],
                            ['choice_text' => 'Le pendule simple', 'is_correct' => false],
                            ['choice_text' => 'Le microscope à effet tunnel', 'is_correct' => true],
                            ['choice_text' => 'Le thermomètre à liquide', 'is_correct' => false],
                        ],
                        'explanation' => 'Le microscope à effet tunnel mesure un courant tunnel entre une pointe conductrice et une surface.',
                    ],
                    [
                        'question' => 'Pourquoi les horloges atomiques sont-elles très précises ?',
                        'choices' => [
                            ['choice_text' => 'Elles reposent uniquement sur un ressort mécanique', 'is_correct' => false],
                            ['choice_text' => 'Elles utilisent des transitions atomiques à des fréquences très stables', 'is_correct' => true],
                            ['choice_text' => 'Elles utilisent exclusivement la pression atmosphérique', 'is_correct' => false],
                            ['choice_text' => 'Elles n’ont aucun oscillateur', 'is_correct' => false],
                        ],
                        'explanation' => 'Les horloges atomiques utilisent des transitions entre états quantiques bien définis pour réaliser une référence de fréquence extrêmement stable.',
                    ],
                    [
                        'question' => 'Le GPS doit-il tenir compte d’effets relativistes ?',
                        'choices' => [
                            ['choice_text' => 'Non, jamais', 'is_correct' => false],
                            ['choice_text' => 'Seulement si les satellites sont immobiles', 'is_correct' => false],
                            ['choice_text' => 'Seulement pour les signaux sonores', 'is_correct' => false],
                            ['choice_text' => 'Oui', 'is_correct' => true],
                        ],
                        'explanation' => 'Les systèmes de navigation satellitaire doivent corriger des effets liés à la relativité restreinte et à la relativité générale pour conserver leur précision.',
                    ],
                    [
                        'question' => 'Quelle technologie repose directement sur les propriétés quantiques des semi-conducteurs ?',
                        'choices' => [
                            ['choice_text' => 'Les leviers mécaniques', 'is_correct' => false],
                            ['choice_text' => 'Les transistors', 'is_correct' => true],
                            ['choice_text' => 'Les thermomètres à mercure uniquement', 'is_correct' => false],
                            ['choice_text' => 'Les pendules mécaniques', 'is_correct' => false],
                        ],
                        'explanation' => 'Le fonctionnement des semi-conducteurs et des jonctions utilisées dans les transistors repose sur des propriétés décrites par la physique quantique.',
                    ],
                    [
                        'question' => 'Quel phénomène est utilisé dans certains détecteurs de fumée ?',
                        'choices' => [
                            ['choice_text' => 'La mesure de la vitesse du vent', 'is_correct' => false],
                            ['choice_text' => 'La détection d’un rayonnement ionisant provenant d’une source radioactive', 'is_correct' => true],
                            ['choice_text' => 'La réflexion d’ondes sonores uniquement', 'is_correct' => false],
                            ['choice_text' => 'La poussée d’Archimède', 'is_correct' => false],
                        ],
                        'explanation' => 'Certains détecteurs de fumée à ionisation utilisent une petite source radioactive pour détecter les particules de fumée.',
                    ],
                    [
                        'question' => 'Quelle application utilise des isotopes radioactifs pour obtenir des informations sur le fonctionnement d’un organe ?',
                        'choices' => [
                            ['choice_text' => 'La mécanique des fluides', 'is_correct' => false],
                            ['choice_text' => 'La métallurgie classique uniquement', 'is_correct' => false],
                            ['choice_text' => 'La médecine nucléaire', 'is_correct' => true],
                            ['choice_text' => 'La météorologie sans rayonnement', 'is_correct' => false],
                        ],
                        'explanation' => 'La médecine nucléaire utilise des radio-isotopes comme traceurs pour explorer certaines fonctions biologiques.',
                    ],
                    [
                        'question' => 'Pourquoi les concepts de physique moderne sont-ils présents dans les technologies électroniques actuelles ?',
                        'choices' => [
                            ['choice_text' => 'Parce que les électrons n’existent que dans les appareils modernes', 'is_correct' => false],
                            ['choice_text' => 'Parce que les lois classiques ont disparu', 'is_correct' => false],
                            ['choice_text' => 'De nombreux composants électroniques reposent sur la structure quantique des matériaux', 'is_correct' => true],
                            ['choice_text' => 'Parce que les circuits électroniques fonctionnent uniquement grâce à la gravité', 'is_correct' => false],
                        ],
                        'explanation' => 'Les propriétés électroniques des semi-conducteurs, des matériaux et des dispositifs modernes sont profondément liées à la mécanique quantique.',
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