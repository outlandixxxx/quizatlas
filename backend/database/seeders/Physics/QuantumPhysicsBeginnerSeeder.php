<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class QuantumPhysicsBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'quantum-physics')->firstOrFail();

        $quizzes = [
            [
                'title' => 'Introduction à la physique quantique',
                'description' => 'Découvrir les idées fondamentales de la mécanique quantique et comprendre pourquoi elle est nécessaire à l’échelle microscopique.',
                'questions' => [
                    [
                        'question' => 'Pourquoi la mécanique quantique est-elle nécessaire pour étudier les systèmes microscopiques ?',
                        'choices' => [
                            ['choice_text' => 'Parce que les lois classiques ne fonctionnent jamais pour les objets macroscopiques', 'is_correct' => false],
                            ['choice_text' => 'Parce que certains phénomènes atomiques et subatomiques ne sont pas correctement décrits par la physique classique', 'is_correct' => true],
                            ['choice_text' => 'Parce que les particules microscopiques n’ont aucune énergie', 'is_correct' => false],
                            ['choice_text' => 'Parce que la gravité devient toujours la force dominante à petite échelle', 'is_correct' => false],
                        ],
                        'explanation' => 'La physique classique ne suffit pas à expliquer certains phénomènes microscopiques comme les spectres atomiques, l’effet photoélectrique et la quantification des niveaux d’énergie.',
                    ],
                    [
                        'question' => 'Quelle idée est fondamentale en mécanique quantique ?',
                        'choices' => [
                            ['choice_text' => 'Toutes les grandeurs sont nécessairement continues', 'is_correct' => false],
                            ['choice_text' => 'Les particules n’interagissent jamais entre elles', 'is_correct' => false],
                            ['choice_text' => 'Certaines grandeurs physiques ne peuvent prendre que certaines valeurs autorisées', 'is_correct' => true],
                            ['choice_text' => 'Toutes les énergies microscopiques sont infinies', 'is_correct' => false],
                        ],
                        'explanation' => 'La quantification de certaines grandeurs, notamment l’énergie dans les systèmes liés, est une caractéristique importante de la physique quantique.',
                    ],
                    [
                        'question' => 'Comment appelle-t-on la plus petite quantité élémentaire d’une grandeur quantifiée dans un contexte donné ?',
                        'choices' => [
                            ['choice_text' => 'Un isotope', 'is_correct' => false],
                            ['choice_text' => 'Un photon sonore', 'is_correct' => false],
                            ['choice_text' => 'Un référentiel inertiel', 'is_correct' => false],
                            ['choice_text' => 'Un quantum', 'is_correct' => true],
                        ],
                        'explanation' => 'Le terme quantum désigne une quantité discrète d’énergie ou d’une autre grandeur quantifiée dans le contexte approprié.',
                    ],
                    [
                        'question' => 'Quelle constante fondamentale apparaît très souvent en mécanique quantique ?',
                        'choices' => [
                            ['choice_text' => 'La constante gravitationnelle G uniquement', 'is_correct' => false],
                            ['choice_text' => 'La constante de Planck h', 'is_correct' => true],
                            ['choice_text' => 'La constante des gaz R uniquement', 'is_correct' => false],
                            ['choice_text' => 'La constante de raideur k', 'is_correct' => false],
                        ],
                        'explanation' => 'La constante de Planck h intervient dans plusieurs relations fondamentales de la physique quantique.',
                    ],
                    [
                        'question' => 'Quelle relation relie l’énergie d’un photon à sa fréquence ?',
                        'choices' => [
                            ['choice_text' => 'E = h/ν', 'is_correct' => false],
                            ['choice_text' => 'E = ν/h', 'is_correct' => false],
                            ['choice_text' => 'E = hν', 'is_correct' => true],
                            ['choice_text' => 'E = h + ν', 'is_correct' => false],
                        ],
                        'explanation' => 'L’énergie d’un photon est proportionnelle à sa fréquence selon E = hν.',
                    ],
                    [
                        'question' => 'La mécanique quantique décrit-elle nécessairement les résultats d’une mesure individuelle avec certitude ?',
                        'choices' => [
                            ['choice_text' => 'Non, elle fournit souvent des probabilités pour les résultats possibles', 'is_correct' => true],
                            ['choice_text' => 'Oui, toutes les mesures sont déterminées avec certitude', 'is_correct' => false],
                            ['choice_text' => 'Oui, mais seulement pour les électrons', 'is_correct' => false],
                            ['choice_text' => 'Non, parce qu’aucune mesure physique n’est possible', 'is_correct' => false],
                        ],
                        'explanation' => 'La mécanique quantique permet de calculer les probabilités associées aux différents résultats d’une mesure.',
                    ],
                    [
                        'question' => 'Quel phénomène montre qu’une particule peut être associée à un comportement ondulatoire ?',
                        'choices' => [
                            ['choice_text' => 'La diffraction des électrons', 'is_correct' => true],
                            ['choice_text' => 'La simple chute d’une pierre', 'is_correct' => false],
                            ['choice_text' => 'La pression hydrostatique', 'is_correct' => false],
                            ['choice_text' => 'La dilatation thermique d’un métal', 'is_correct' => false],
                        ],
                        'explanation' => 'Les électrons peuvent produire des figures de diffraction, ce qui constitue une manifestation de leur caractère ondulatoire.',
                    ],
                    [
                        'question' => 'Quelle idée résume la dualité onde-particule ?',
                        'choices' => [
                            ['choice_text' => 'Toutes les particules sont simplement des ondes classiques', 'is_correct' => false],
                            ['choice_text' => 'Toutes les ondes sont des particules classiques ordinaires', 'is_correct' => false],
                            ['choice_text' => 'Une particule ne peut jamais produire d’interférences', 'is_correct' => false],
                            ['choice_text' => 'Les objets quantiques peuvent présenter des propriétés ondulatoires et corpusculaires selon l’expérience', 'is_correct' => true],
                        ],
                        'explanation' => 'La dualité onde-particule est une caractéristique fondamentale du comportement quantique.',
                    ],
                    [
                        'question' => 'La mécanique quantique s’applique-t-elle uniquement aux électrons ?',
                        'choices' => [
                            ['choice_text' => 'Oui, elle concerne uniquement les électrons', 'is_correct' => false],
                            ['choice_text' => 'Non, elle s’applique à de nombreux systèmes microscopiques, notamment les photons, électrons et atomes', 'is_correct' => true],
                            ['choice_text' => 'Oui, mais seulement dans les métaux', 'is_correct' => false],
                            ['choice_text' => 'Non, mais uniquement aux objets astronomiques', 'is_correct' => false],
                        ],
                        'explanation' => 'La mécanique quantique constitue un cadre général pour décrire de nombreux systèmes microscopiques.',
                    ],
                    [
                        'question' => 'Quel scientifique a joué un rôle majeur dans la formulation de la mécanique quantique moderne avec l’équation portant son nom ?',
                        'choices' => [
                            ['choice_text' => 'Erwin Schrödinger', 'is_correct' => true],
                            ['choice_text' => 'Isaac Newton', 'is_correct' => false],
                            ['choice_text' => 'James Watt', 'is_correct' => false],
                            ['choice_text' => 'Archimède', 'is_correct' => false],
                        ],
                        'explanation' => 'Erwin Schrödinger a formulé une équation fondamentale permettant de décrire l’évolution des états quantiques.',
                    ],
                ],
            ],

            [
                'title' => 'Quantification de l’énergie',
                'description' => 'Comprendre les niveaux d’énergie discrets et les transitions quantiques dans les systèmes atomiques.',
                'questions' => [
                    [
                        'question' => 'Que signifie qu’un système possède des niveaux d’énergie quantifiés ?',
                        'choices' => [
                            ['choice_text' => 'Le système peut prendre toutes les énergies possibles sans restriction', 'is_correct' => false],
                            ['choice_text' => 'Le système ne peut occuper que certaines valeurs d’énergie autorisées', 'is_correct' => true],
                            ['choice_text' => 'Le système possède toujours une énergie nulle', 'is_correct' => false],
                            ['choice_text' => 'Le système n’échange jamais d’énergie', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans de nombreux systèmes quantiques liés, l’énergie prend des valeurs discrètes appelées niveaux d’énergie.',
                    ],
                    [
                        'question' => 'Lorsqu’un électron passe d’un niveau élevé à un niveau plus bas, il peut :',
                        'choices' => [
                            ['choice_text' => 'Émettre un photon', 'is_correct' => true],
                            ['choice_text' => 'Créer automatiquement un proton', 'is_correct' => false],
                            ['choice_text' => 'Perdre sa charge électrique', 'is_correct' => false],
                            ['choice_text' => 'Devenir nécessairement un neutron', 'is_correct' => false],
                        ],
                        'explanation' => 'Une transition vers un niveau inférieur peut s’accompagner de l’émission d’un photon.',
                    ],
                    [
                        'question' => 'Lorsqu’un électron absorbe un photon d’énergie appropriée, il peut :',
                        'choices' => [
                            ['choice_text' => 'Devenir automatiquement un proton', 'is_correct' => false],
                            ['choice_text' => 'Perdre toute son énergie', 'is_correct' => false],
                            ['choice_text' => 'Passer vers un niveau d’énergie supérieur', 'is_correct' => true],
                            ['choice_text' => 'Quitter nécessairement l’atome', 'is_correct' => false],
                        ],
                        'explanation' => 'L’absorption d’un photon peut provoquer une transition vers un état excité si son énergie correspond à la différence entre les niveaux.',
                    ],
                    [
                        'question' => 'L’énergie du photon émis lors d’une transition atomique correspond à :',
                        'choices' => [
                            ['choice_text' => 'La somme des deux niveaux dans tous les cas', 'is_correct' => false],
                            ['choice_text' => 'La différence entre les deux niveaux d’énergie', 'is_correct' => true],
                            ['choice_text' => 'La masse totale de l’atome', 'is_correct' => false],
                            ['choice_text' => 'La température du laboratoire', 'is_correct' => false],
                        ],
                        'explanation' => 'L’énergie du photon correspond à l’écart énergétique entre l’état initial et l’état final.',
                    ],
                    [
                        'question' => 'Quelle expression peut décrire l’énergie d’un photon ?',
                        'choices' => [
                            ['choice_text' => 'E = ν/h', 'is_correct' => false],
                            ['choice_text' => 'E = h + ν', 'is_correct' => false],
                            ['choice_text' => 'E = hν', 'is_correct' => true],
                            ['choice_text' => 'E = hν²', 'is_correct' => false],
                        ],
                        'explanation' => 'La relation de Planck donne E = hν.',
                    ],
                    [
                        'question' => 'Un atome dans son état de plus basse énergie est dans son :',
                        'choices' => [
                            ['choice_text' => 'État ionisé', 'is_correct' => false],
                            ['choice_text' => 'État relativiste', 'is_correct' => false],
                            ['choice_text' => 'État dispersif', 'is_correct' => false],
                            ['choice_text' => 'État fondamental', 'is_correct' => true],
                        ],
                        'explanation' => 'L’état fondamental est l’état d’énergie minimale du système.',
                    ],
                    [
                        'question' => 'Comment appelle-t-on un atome dont un électron se trouve dans un niveau supérieur à l’état fondamental ?',
                        'choices' => [
                            ['choice_text' => 'Un atome excité', 'is_correct' => true],
                            ['choice_text' => 'Un atome incompressible', 'is_correct' => false],
                            ['choice_text' => 'Un atome neutre uniquement', 'is_correct' => false],
                            ['choice_text' => 'Un atome classique', 'is_correct' => false],
                        ],
                        'explanation' => 'Un atome excité possède au moins un électron dans un état d’énergie supérieur au fondamental.',
                    ],
                    [
                        'question' => 'Pourquoi les spectres atomiques sont-ils souvent constitués de raies ?',
                        'choices' => [
                            ['choice_text' => 'Parce que les électrons peuvent prendre toutes les énergies possibles', 'is_correct' => false],
                            ['choice_text' => 'Parce que les atomes n’émettent jamais de lumière', 'is_correct' => false],
                            ['choice_text' => 'Parce que la lumière visible n’a aucune fréquence', 'is_correct' => false],
                            ['choice_text' => 'Parce que les transitions entre niveaux d’énergie quantifiés produisent des photons d’énergies précises', 'is_correct' => true],
                        ],
                        'explanation' => 'Les différences discrètes entre niveaux d’énergie donnent des fréquences de photons bien déterminées.',
                    ],
                    [
                        'question' => 'Si la différence d’énergie entre deux niveaux augmente, la fréquence du photon associé :',
                        'choices' => [
                            ['choice_text' => 'Diminue nécessairement', 'is_correct' => false],
                            ['choice_text' => 'Augmente', 'is_correct' => true],
                            ['choice_text' => 'Devient nulle', 'is_correct' => false],
                            ['choice_text' => 'Reste toujours identique', 'is_correct' => false],
                        ],
                        'explanation' => 'Comme ΔE = hν, une plus grande différence d’énergie correspond à une fréquence plus élevée.',
                    ],
                    [
                        'question' => 'L’ionisation d’un atome nécessite-t-elle une énergie suffisante pour arracher un électron ?',
                        'choices' => [
                            ['choice_text' => 'Non, elle se produit toujours sans énergie', 'is_correct' => false],
                            ['choice_text' => 'Seulement pour les photons infrarouges', 'is_correct' => false],
                            ['choice_text' => 'Oui', 'is_correct' => true],
                            ['choice_text' => 'Seulement dans le vide', 'is_correct' => false],
                        ],
                        'explanation' => 'Il faut fournir au moins l’énergie d’ionisation pour arracher complètement un électron à l’atome.',
                    ],
                ],
            ],

            [
                'title' => 'Fonction d’onde et probabilité',
                'description' => 'Découvrir la fonction d’onde et son interprétation probabiliste dans la mécanique quantique.',
                'questions' => [
                    [
                        'question' => 'Comment note-t-on souvent la fonction d’onde d’un système quantique ?',
                        'choices' => [
                            ['choice_text' => 'ψ', 'is_correct' => true],
                            ['choice_text' => 'ρ uniquement', 'is_correct' => false],
                            ['choice_text' => 'F exclusivement', 'is_correct' => false],
                            ['choice_text' => 'R seulement', 'is_correct' => false],
                        ],
                        'explanation' => 'La fonction d’onde est souvent notée ψ et contient l’information nécessaire à la description de l’état quantique.',
                    ],
                    [
                        'question' => 'Que représente principalement |ψ|² dans une interprétation probabiliste ?',
                        'choices' => [
                            ['choice_text' => 'La masse de la particule', 'is_correct' => false],
                            ['choice_text' => 'La vitesse exacte de la particule', 'is_correct' => false],
                            ['choice_text' => 'La charge totale de l’atome', 'is_correct' => false],
                            ['choice_text' => 'Une densité de probabilité de présence', 'is_correct' => true],
                        ],
                        'explanation' => 'Le carré du module de la fonction d’onde donne une densité de probabilité pour la position dans l’interprétation de Born.',
                    ],
                    [
                        'question' => 'La fonction d’onde elle-même est-elle directement une probabilité ?',
                        'choices' => [
                            ['choice_text' => 'Oui, ψ est toujours une probabilité positive', 'is_correct' => false],
                            ['choice_text' => 'Oui, ψ est toujours comprise entre 0 et 1', 'is_correct' => false],
                            ['choice_text' => 'Non, c’est |ψ|² qui est associé à la densité de probabilité', 'is_correct' => true],
                            ['choice_text' => 'Non, parce qu’aucune probabilité n’existe en physique quantique', 'is_correct' => false],
                        ],
                        'explanation' => 'La fonction d’onde peut être complexe ; c’est son module au carré qui possède l’interprétation probabiliste.',
                    ],
                    [
                        'question' => 'Que signifie normaliser une fonction d’onde ?',
                        'choices' => [
                            ['choice_text' => 'Rendre la fonction d’onde toujours nulle', 'is_correct' => false],
                            ['choice_text' => 'Donner une masse égale à 1 kg à la particule', 'is_correct' => false],
                            ['choice_text' => 'Supprimer toute incertitude', 'is_correct' => false],
                            ['choice_text' => 'Faire en sorte que la probabilité totale de trouver la particule soit égale à 1', 'is_correct' => true],
                        ],
                        'explanation' => 'La normalisation impose que la probabilité totale de trouver le système quelque part soit égale à 1.',
                    ],
                    [
                        'question' => 'Une mesure de position en mécanique quantique donne-t-elle toujours une trajectoire classique continue ?',
                        'choices' => [
                            ['choice_text' => 'Oui, exactement comme en mécanique classique', 'is_correct' => false],
                            ['choice_text' => 'Oui, mais seulement pour les photons', 'is_correct' => false],
                            ['choice_text' => 'Oui, si la température est élevée', 'is_correct' => false],
                            ['choice_text' => 'Non', 'is_correct' => true],
                        ],
                        'explanation' => 'La mécanique quantique ne décrit pas une trajectoire classique déterminée entre toutes les mesures de la même manière que la mécanique classique.',
                    ],
                    [
                        'question' => 'Une particule quantique peut-elle être décrite par une superposition de plusieurs états ?',
                        'choices' => [
                            ['choice_text' => 'Oui', 'is_correct' => true],
                            ['choice_text' => 'Non, jamais', 'is_correct' => false],
                            ['choice_text' => 'Seulement lorsqu’elle est au repos', 'is_correct' => false],
                            ['choice_text' => 'Seulement si elle est macroscopique', 'is_correct' => false],
                        ],
                        'explanation' => 'Le principe de superposition permet à un état quantique d’être une combinaison de plusieurs états possibles.',
                    ],
                    [
                        'question' => 'Que signifie une superposition quantique ?',
                        'choices' => [
                            ['choice_text' => 'Une particule qui devient nécessairement deux particules distinctes', 'is_correct' => false],
                            ['choice_text' => 'Une augmentation automatique de la masse', 'is_correct' => false],
                            ['choice_text' => 'Un état qui peut être représenté comme une combinaison linéaire de plusieurs états', 'is_correct' => true],
                            ['choice_text' => 'Une impossibilité de mesurer quoi que ce soit', 'is_correct' => false],
                        ],
                        'explanation' => 'La superposition est une propriété mathématique centrale de l’espace des états quantiques.',
                    ],
                    [
                        'question' => 'Que signifie une probabilité nulle pour un résultat de mesure ?',
                        'choices' => [
                            ['choice_text' => 'Le résultat est certain', 'is_correct' => false],
                            ['choice_text' => 'Le système n’existe pas', 'is_correct' => false],
                            ['choice_text' => 'Ce résultat n’est pas obtenu dans l’état quantique et les conditions considérées', 'is_correct' => true],
                            ['choice_text' => 'La fonction d’onde est nécessairement infinie', 'is_correct' => false],
                        ],
                        'explanation' => 'Une probabilité nulle signifie que le résultat correspondant est exclu dans les conditions considérées.',
                    ],
                    [
                        'question' => 'Pourquoi la fonction d’onde doit-elle être suffisamment régulière dans de nombreux problèmes quantiques ?',
                        'choices' => [
                            ['choice_text' => 'Parce qu’elle représente toujours une température', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’elle doit respecter les conditions mathématiques imposées par l’équation quantique et le système', 'is_correct' => true],
                            ['choice_text' => 'Parce qu’elle est une masse', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’elle doit être toujours égale à 1 en tout point', 'is_correct' => false],
                        ],
                        'explanation' => 'Les états physiques admissibles doivent satisfaire certaines conditions mathématiques, notamment celles imposées par l’équation de Schrödinger.',
                    ],
                    [
                        'question' => 'Peut-on associer une probabilité à différents résultats d’une mesure quantique ?',
                        'choices' => [
                            ['choice_text' => 'Oui', 'is_correct' => true],
                            ['choice_text' => 'Non, les mesures quantiques sont toujours arbitraires', 'is_correct' => false],
                            ['choice_text' => 'Seulement pour les atomes neutres', 'is_correct' => false],
                            ['choice_text' => 'Seulement dans le vide', 'is_correct' => false],
                        ],
                        'explanation' => 'Les amplitudes et probabilités de transition permettent de prévoir statistiquement les résultats des mesures.',
                    ],
                    [
                        'question' => 'Une fonction d’onde correctement normalisée doit donner une probabilité totale :',
                        'choices' => [
                            ['choice_text' => 'Égale à 0', 'is_correct' => false],
                            ['choice_text' => 'Égale à 1', 'is_correct' => true],
                            ['choice_text' => 'Supérieure à 1', 'is_correct' => false],
                            ['choice_text' => 'Nécessairement infinie', 'is_correct' => false],
                        ],
                        'explanation' => 'La probabilité totale de trouver la particule dans tout l’espace doit être égale à 1.',
                    ],
                ],
            ],

            [
                'title' => 'Principe d’incertitude',
                'description' => 'Introduire le principe d’incertitude de Heisenberg et comprendre sa signification physique.',
                'questions' => [
                    [
                        'question' => 'Quel principe est associé aux incertitudes sur la position et la quantité de mouvement ?',
                        'choices' => [
                            ['choice_text' => 'Le principe d’incertitude de Heisenberg', 'is_correct' => true],
                            ['choice_text' => 'Le principe de Pascal', 'is_correct' => false],
                            ['choice_text' => 'Le principe d’Archimède', 'is_correct' => false],
                            ['choice_text' => 'Le principe de Bernoulli', 'is_correct' => false],
                        ],
                        'explanation' => 'Le principe d’incertitude de Heisenberg constitue une propriété fondamentale des systèmes quantiques.',
                    ],
                    [
                        'question' => 'Quelle relation résume le principe d’incertitude position-quantité de mouvement ?',
                        'choices' => [
                            ['choice_text' => 'Δx Δp = 0 dans tous les cas', 'is_correct' => false],
                            ['choice_text' => 'Δx + Δp = ħ', 'is_correct' => false],
                            ['choice_text' => 'Δx Δp ≥ ħ/2', 'is_correct' => true],
                            ['choice_text' => 'Δx/Δp = ħ', 'is_correct' => false],
                        ],
                        'explanation' => 'La relation de Heisenberg s’écrit ΔxΔp ≥ ħ/2, où ħ est la constante de Planck réduite.',
                    ],
                    [
                        'question' => 'Que représente ħ ?',
                        'choices' => [
                            ['choice_text' => 'La constante gravitationnelle', 'is_correct' => false],
                            ['choice_text' => 'La constante de Planck réduite, h/(2π)', 'is_correct' => true],
                            ['choice_text' => 'La vitesse de la lumière', 'is_correct' => false],
                            ['choice_text' => 'La masse d’un électron', 'is_correct' => false],
                        ],
                        'explanation' => 'La constante réduite est définie par ħ = h/(2π).',
                    ],
                    [
                        'question' => 'Le principe d’incertitude signifie-t-il qu’un instrument de mesure est simplement trop imprécis ?',
                        'choices' => [
                            ['choice_text' => 'Oui, c’est uniquement un défaut des appareils', 'is_correct' => false],
                            ['choice_text' => 'Oui, il disparaît avec un instrument plus performant', 'is_correct' => false],
                            ['choice_text' => 'Seulement dans les expériences avec des photons', 'is_correct' => false],
                            ['choice_text' => 'Non, il s’agit d’une propriété fondamentale de l’état quantique', 'is_correct' => true],
                        ],
                        'explanation' => 'L’incertitude de Heisenberg ne résulte pas simplement d’une imperfection instrumentale ; elle découle de la structure quantique elle-même.',
                    ],
                    [
                        'question' => 'Si l’incertitude sur la position diminue fortement, que se passe-t-il généralement pour l’incertitude sur la quantité de mouvement ?',
                        'choices' => [
                            ['choice_text' => 'Elle devient automatiquement nulle', 'is_correct' => false],
                            ['choice_text' => 'Elle reste toujours identique', 'is_correct' => false],
                            ['choice_text' => 'Elle devient négative', 'is_correct' => false],
                            ['choice_text' => 'Elle augmente', 'is_correct' => true],
                        ],
                        'explanation' => 'Le produit des incertitudes doit respecter la borne de Heisenberg, ce qui implique une compensation entre ces deux incertitudes.',
                    ],
                    [
                        'question' => 'Peut-on connaître simultanément avec une précision arbitrairement grande la position et la quantité de mouvement d’une particule quantique ?',
                        'choices' => [
                            ['choice_text' => 'Non', 'is_correct' => true],
                            ['choice_text' => 'Oui, toujours', 'is_correct' => false],
                            ['choice_text' => 'Oui, si la particule est un électron', 'is_correct' => false],
                            ['choice_text' => 'Oui, uniquement à température nulle', 'is_correct' => false],
                        ],
                        'explanation' => 'Le principe d’incertitude impose une limite fondamentale au produit des incertitudes.',
                    ],
                    [
                        'question' => 'Quelle quantité est conjuguée à la position dans le principe d’incertitude correspondant ?',
                        'choices' => [
                            ['choice_text' => 'La température', 'is_correct' => false],
                            ['choice_text' => 'La masse volumique', 'is_correct' => false],
                            ['choice_text' => 'La pression atmosphérique', 'is_correct' => false],
                            ['choice_text' => 'La quantité de mouvement', 'is_correct' => true],
                        ],
                        'explanation' => 'La position x et la quantité de mouvement p_x forment une paire de grandeurs conjuguées.',
                    ],
                    [
                        'question' => 'Le principe d’incertitude est-il important pour expliquer pourquoi un électron ne peut pas simplement rester exactement au repos dans une région infiniment petite ?',
                        'choices' => [
                            ['choice_text' => 'Non, il n’a aucun lien avec cette idée', 'is_correct' => false],
                            ['choice_text' => 'Oui', 'is_correct' => true],
                            ['choice_text' => 'Seulement pour les photons', 'is_correct' => false],
                            ['choice_text' => 'Seulement dans les liquides', 'is_correct' => false],
                        ],
                        'explanation' => 'Confinement spatial très fort implique une grande incertitude sur la quantité de mouvement.',
                    ],
                    [
                        'question' => 'Quel symbole représente généralement l’incertitude sur une grandeur physique ?',
                        'choices' => [
                            ['choice_text' => 'Σ uniquement', 'is_correct' => false],
                            ['choice_text' => '∞', 'is_correct' => false],
                            ['choice_text' => 'Δ', 'is_correct' => true],
                            ['choice_text' => 'Ω uniquement', 'is_correct' => false],
                        ],
                        'explanation' => 'Le symbole Δ est couramment utilisé pour désigner une variation ou une incertitude selon le contexte.',
                    ],
                    [
                        'question' => 'Le principe d’incertitude concerne-t-il uniquement la position et la quantité de mouvement ?',
                        'choices' => [
                            ['choice_text' => 'Non, il existe d’autres relations d’incertitude entre grandeurs conjuguées', 'is_correct' => true],
                            ['choice_text' => 'Oui, aucune autre relation n’existe', 'is_correct' => false],
                            ['choice_text' => 'Oui, mais seulement pour les photons', 'is_correct' => false],
                            ['choice_text' => 'Non, mais uniquement en mécanique classique', 'is_correct' => false],
                        ],
                        'explanation' => 'Le principe général concerne différentes paires de grandeurs observables dont les opérateurs ne commutent pas.',
                    ],
                ],
            ],

            [
                'title' => 'Particule dans une boîte',
                'description' => 'Découvrir un modèle quantique simple avec une particule confinée dans une région.',
                'questions' => [
                    [
                        'question' => 'Pourquoi le modèle de la particule dans une boîte est-il utile ?',
                        'choices' => [
                            ['choice_text' => 'Il permet d’illustrer simplement la quantification des niveaux d’énergie', 'is_correct' => true],
                            ['choice_text' => 'Il démontre que toutes les énergies sont continues', 'is_correct' => false],
                            ['choice_text' => 'Il décrit uniquement la gravité terrestre', 'is_correct' => false],
                            ['choice_text' => 'Il sert uniquement à calculer la pression atmosphérique', 'is_correct' => false],
                        ],
                        'explanation' => 'Le modèle montre qu’une particule confinée ne peut posséder que certaines valeurs d’énergie.',
                    ],
                    [
                        'question' => 'Dans une boîte quantique unidimensionnelle idéale, l’énergie de la particule peut-elle prendre n’importe quelle valeur ?',
                        'choices' => [
                            ['choice_text' => 'Oui, toutes les valeurs sont autorisées', 'is_correct' => false],
                            ['choice_text' => 'Non, elle est quantifiée', 'is_correct' => true],
                            ['choice_text' => 'Seulement des valeurs négatives', 'is_correct' => false],
                            ['choice_text' => 'Seulement une valeur égale à zéro', 'is_correct' => false],
                        ],
                        'explanation' => 'Les conditions aux limites imposent des états propres associés à des niveaux d’énergie discrets.',
                    ],
                    [
                        'question' => 'Pour une particule dans une boîte 1D idéale, les niveaux d’énergie sont-ils généralement proportionnels à n ?',
                        'choices' => [
                            ['choice_text' => 'Non, ils sont proportionnels à n²', 'is_correct' => true],
                            ['choice_text' => 'Oui, exactement à n', 'is_correct' => false],
                            ['choice_text' => 'Ils sont indépendants de n', 'is_correct' => false],
                            ['choice_text' => 'Ils sont toujours égaux à zéro', 'is_correct' => false],
                        ],
                        'explanation' => 'Pour une boîte de largeur L, E_n = n²π²ħ²/(2mL²).',
                    ],
                    [
                        'question' => 'Que représente le nombre quantique n dans le modèle de la boîte ?',
                        'choices' => [
                            ['choice_text' => 'La masse de la particule', 'is_correct' => false],
                            ['choice_text' => 'Un entier positif qui numérote les états d’énergie', 'is_correct' => true],
                            ['choice_text' => 'La température du système', 'is_correct' => false],
                            ['choice_text' => 'La vitesse de la lumière', 'is_correct' => false],
                        ],
                        'explanation' => 'Les niveaux quantifiés sont indexés par un nombre entier n = 1, 2, 3, ...',
                    ],
                    [
                        'question' => 'Quelle est la plus petite valeur autorisée de n dans la boîte quantique idéale ?',
                        'choices' => [
                            ['choice_text' => '0', 'is_correct' => false],
                            ['choice_text' => '-1', 'is_correct' => false],
                            ['choice_text' => '1/2', 'is_correct' => false],
                            ['choice_text' => '1', 'is_correct' => true],
                        ],
                        'explanation' => 'Dans le modèle standard de la boîte infinie, les états sont indexés par n = 1, 2, 3, ...',
                    ],
                    [
                        'question' => 'Si le nombre quantique n double, l’énergie correspondante est multipliée par :',
                        'choices' => [
                            ['choice_text' => '4', 'is_correct' => true],
                            ['choice_text' => '2', 'is_correct' => false],
                            ['choice_text' => '1/2', 'is_correct' => false],
                            ['choice_text' => '8', 'is_correct' => false],
                        ],
                        'explanation' => 'Puisque E_n est proportionnelle à n², doubler n multiplie l’énergie par 4.',
                    ],
                    [
                        'question' => 'Si la largeur de la boîte augmente, les niveaux d’énergie :',
                        'choices' => [
                            ['choice_text' => 'Augmentent toujours', 'is_correct' => false],
                            ['choice_text' => 'Restent strictement identiques', 'is_correct' => false],
                            ['choice_text' => 'Diminuent', 'is_correct' => true],
                            ['choice_text' => 'Deviennent tous infinis', 'is_correct' => false],
                        ],
                        'explanation' => 'L’énergie varie comme 1/L² : une boîte plus grande correspond à des niveaux plus rapprochés.',
                    ],
                    [
                        'question' => 'Pourquoi une particule confinée possède-t-elle une énergie minimale non nulle dans ce modèle ?',
                        'choices' => [
                            ['choice_text' => 'Parce que la particule doit toujours être chaude', 'is_correct' => false],
                            ['choice_text' => 'Parce que la masse de la particule augmente automatiquement', 'is_correct' => false],
                            ['choice_text' => 'Le principe d’incertitude et les conditions de confinement empêchent un état de position et de quantité de mouvement simultanément nuls', 'is_correct' => true],
                            ['choice_text' => 'Parce que la gravité devient infinie dans la boîte', 'is_correct' => false],
                        ],
                        'explanation' => 'L’énergie de l’état fondamental est positive dans le modèle de la boîte quantique.',
                    ],
                    [
                        'question' => 'L’état n = 1 est appelé :',
                        'choices' => [
                            ['choice_text' => 'Le premier état ionisé', 'is_correct' => false],
                            ['choice_text' => 'L’état relativiste', 'is_correct' => false],
                            ['choice_text' => 'L’état de température nulle', 'is_correct' => false],
                            ['choice_text' => 'L’état fondamental', 'is_correct' => true],
                        ],
                        'explanation' => 'Le niveau n = 1 est le niveau d’énergie le plus bas du système.',
                    ],
                    [
                        'question' => 'Une transition entre deux niveaux d’énergie dans la boîte peut-elle être associée à l’absorption ou à l’émission d’un photon ?',
                        'choices' => [
                            ['choice_text' => 'Non, jamais', 'is_correct' => false],
                            ['choice_text' => 'Oui, si le système interagit avec le rayonnement', 'is_correct' => true],
                            ['choice_text' => 'Seulement si les deux niveaux sont identiques', 'is_correct' => false],
                            ['choice_text' => 'Seulement dans le vide sans interaction', 'is_correct' => false],
                        ],
                        'explanation' => 'Une transition quantique peut être accompagnée d’un échange d’énergie avec le champ électromagnétique.',
                    ],
                ],
            ],

            [
                'title' => 'Spin et moment cinétique',
                'description' => 'Introduire la notion de spin et quelques propriétés du moment cinétique quantique.',
                'questions' => [
                    [
                        'question' => 'Qu’est-ce que le spin en mécanique quantique ?',
                        'choices' => [
                            ['choice_text' => 'La vitesse de rotation classique réelle de la particule sur elle-même', 'is_correct' => false],
                            ['choice_text' => 'Une propriété intrinsèque quantique d’une particule', 'is_correct' => true],
                            ['choice_text' => 'La température de la particule', 'is_correct' => false],
                            ['choice_text' => 'Sa masse gravitationnelle uniquement', 'is_correct' => false],
                        ],
                        'explanation' => 'Le spin est un moment cinétique intrinsèque quantique qui ne doit pas être assimilé littéralement à une petite bille classique qui tourne.',
                    ],
                    [
                        'question' => 'Quelle valeur de spin possède un électron ?',
                        'choices' => [
                            ['choice_text' => '1', 'is_correct' => false],
                            ['choice_text' => '2', 'is_correct' => false],
                            ['choice_text' => '1/2', 'is_correct' => true],
                            ['choice_text' => '0', 'is_correct' => false],
                        ],
                        'explanation' => 'L’électron est une particule de spin 1/2.',
                    ],
                    [
                        'question' => 'Quelle unité naturelle est utilisée pour exprimer le spin angulaire quantique ?',
                        'choices' => [
                            ['choice_text' => 'La constante gravitationnelle G', 'is_correct' => false],
                            ['choice_text' => 'La vitesse c uniquement', 'is_correct' => false],
                            ['choice_text' => 'La constante des gaz R', 'is_correct' => false],
                            ['choice_text' => 'La constante de Planck réduite ħ', 'is_correct' => true],
                        ],
                        'explanation' => 'Les valeurs de moment cinétique quantique sont quantifiées en unités de ħ.',
                    ],
                    [
                        'question' => 'Un électron de spin 1/2 possède-t-il deux résultats possibles pour la mesure d’une composante de spin selon un axe donné ?',
                        'choices' => [
                            ['choice_text' => 'Non, il existe une infinité de résultats continus', 'is_correct' => false],
                            ['choice_text' => 'Oui, généralement +ħ/2 ou -ħ/2', 'is_correct' => true],
                            ['choice_text' => 'Oui, mais uniquement 0 et ħ', 'is_correct' => false],
                            ['choice_text' => 'Seulement +ħ', 'is_correct' => false],
                        ],
                        'explanation' => 'Pour une particule de spin 1/2, une composante mesurée du spin selon un axe possède deux valeurs propres : ±ħ/2.',
                    ],
                    [
                        'question' => 'Le spin d’un électron est-il une conséquence de sa masse ?',
                        'choices' => [
                            ['choice_text' => 'Non, c’est une propriété quantique intrinsèque distincte de sa masse', 'is_correct' => true],
                            ['choice_text' => 'Oui, le spin est exactement égal à la masse', 'is_correct' => false],
                            ['choice_text' => 'Oui, il varie linéairement avec la température', 'is_correct' => false],
                            ['choice_text' => 'Non, parce que l’électron n’a aucune propriété intrinsèque', 'is_correct' => false],
                        ],
                        'explanation' => 'Le spin et la masse sont deux propriétés physiques différentes.',
                    ],
                    [
                        'question' => 'Quel principe interdit à deux électrons identiques d’un même atome de posséder exactement le même ensemble de nombres quantiques ?',
                        'choices' => [
                            ['choice_text' => 'Le principe de Pascal', 'is_correct' => false],
                            ['choice_text' => 'Le principe d’Archimède', 'is_correct' => false],
                            ['choice_text' => 'Le principe d’exclusion de Pauli', 'is_correct' => true],
                            ['choice_text' => 'Le principe de relativité', 'is_correct' => false],
                        ],
                        'explanation' => 'Le principe d’exclusion de Pauli interdit à deux fermions identiques d’occuper exactement le même état quantique.',
                    ],
                    [
                        'question' => 'L’électron est-il un fermion ou un boson ?',
                        'choices' => [
                            ['choice_text' => 'Un boson', 'is_correct' => false],
                            ['choice_text' => 'Ni l’un ni l’autre', 'is_correct' => false],
                            ['choice_text' => 'Les deux simultanément dans tous les cas', 'is_correct' => false],
                            ['choice_text' => 'Un fermion', 'is_correct' => true],
                        ],
                        'explanation' => 'L’électron est un fermion de spin demi-entier.',
                    ],
                    [
                        'question' => 'Quel type de particule possède un spin entier ?',
                        'choices' => [
                            ['choice_text' => 'Un fermion uniquement', 'is_correct' => false],
                            ['choice_text' => 'Un électron uniquement', 'is_correct' => false],
                            ['choice_text' => 'Un boson', 'is_correct' => true],
                            ['choice_text' => 'Aucune particule', 'is_correct' => false],
                        ],
                        'explanation' => 'Les bosons possèdent un spin entier, tandis que les fermions ont un spin demi-entier.',
                    ],
                    [
                        'question' => 'Le photon est-il un boson ?',
                        'choices' => [
                            ['choice_text' => 'Non, c’est un fermion', 'is_correct' => false],
                            ['choice_text' => 'Oui', 'is_correct' => true],
                            ['choice_text' => 'Seulement dans les métaux', 'is_correct' => false],
                            ['choice_text' => 'Seulement lorsqu’il est visible', 'is_correct' => false],
                        ],
                        'explanation' => 'Le photon est un boson de spin 1.',
                    ],
                    [
                        'question' => 'Pourquoi le spin est-il appelé intrinsèque ?',
                        'choices' => [
                            ['choice_text' => 'Parce qu’il appartient à la particule indépendamment de son mouvement orbital autour d’un autre objet', 'is_correct' => true],
                            ['choice_text' => 'Parce qu’il dépend uniquement de la vitesse de translation', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’il représente toujours sa rotation classique réelle', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’il est identique à sa masse', 'is_correct' => false],
                        ],
                        'explanation' => 'Le spin est une propriété intrinsèque du système quantique et se distingue du moment cinétique orbital.',
                    ],
                ],
            ],

            [
                'title' => 'Effet tunnel quantique',
                'description' => 'Découvrir l’effet tunnel et comprendre pourquoi une particule quantique peut franchir certaines barrières.',
                'questions' => [
                    [
                        'question' => 'Qu’est-ce que l’effet tunnel quantique ?',
                        'choices' => [
                            ['choice_text' => 'Une particule qui traverse toujours n’importe quelle barrière', 'is_correct' => false],
                            ['choice_text' => 'La disparition de la masse de la particule', 'is_correct' => false],
                            ['choice_text' => 'Un phénomène exclusivement gravitationnel', 'is_correct' => false],
                            ['choice_text' => 'La possibilité pour une particule quantique de traverser une barrière qu’elle ne pourrait pas franchir classiquement avec son énergie', 'is_correct' => true],
                        ],
                        'explanation' => 'La fonction d’onde peut pénétrer dans une barrière et donner une probabilité non nulle de trouver la particule de l’autre côté.',
                    ],
                    [
                        'question' => 'Une particule classique possédant une énergie inférieure à une barrière de potentiel peut-elle normalement la franchir sans énergie supplémentaire ?',
                        'choices' => [
                            ['choice_text' => 'Non', 'is_correct' => true],
                            ['choice_text' => 'Oui, toujours', 'is_correct' => false],
                            ['choice_text' => 'Oui, mais seulement à température nulle', 'is_correct' => false],
                            ['choice_text' => 'Seulement si elle est immobile', 'is_correct' => false],
                        ],
                        'explanation' => 'Classiquement, une particule dont l’énergie est insuffisante ne franchit pas une barrière de potentiel idéale.',
                    ],
                    [
                        'question' => 'Dans l’effet tunnel, quelle quantité permet d’estimer la possibilité de trouver la particule derrière la barrière ?',
                        'choices' => [
                            ['choice_text' => 'La température du mur uniquement', 'is_correct' => false],
                            ['choice_text' => 'La masse du récipient', 'is_correct' => false],
                            ['choice_text' => 'La fonction d’onde et donc la densité de probabilité associée', 'is_correct' => true],
                            ['choice_text' => 'La couleur de la barrière', 'is_correct' => false],
                        ],
                        'explanation' => 'La présence d’une amplitude quantique au-delà de la barrière conduit à une probabilité non nulle de transmission.',
                    ],
                    [
                        'question' => 'L’effet tunnel est-il important dans certains composants électroniques modernes ?',
                        'choices' => [
                            ['choice_text' => 'Non, jamais', 'is_correct' => false],
                            ['choice_text' => 'Seulement dans les circuits hydrauliques', 'is_correct' => false],
                            ['choice_text' => 'Oui', 'is_correct' => true],
                            ['choice_text' => 'Uniquement dans les lampes à incandescence', 'is_correct' => false],
                        ],
                        'explanation' => 'L’effet tunnel intervient dans certains composants électroniques et dispositifs de nanotechnologie.',
                    ],
                    [
                        'question' => 'Quel instrument exploite directement l’effet tunnel pour sonder une surface à l’échelle atomique ?',
                        'choices' => [
                            ['choice_text' => 'Le baromètre', 'is_correct' => false],
                            ['choice_text' => 'Le microscope à effet tunnel', 'is_correct' => true],
                            ['choice_text' => 'Le thermomètre à mercure', 'is_correct' => false],
                            ['choice_text' => 'Le microscope optique classique uniquement', 'is_correct' => false],
                        ],
                        'explanation' => 'Le microscope à effet tunnel mesure un courant tunnel entre une pointe et une surface conductrice.',
                    ],
                    [
                        'question' => 'Que devient généralement la probabilité de tunnel lorsque la barrière devient beaucoup plus large ?',
                        'choices' => [
                            ['choice_text' => 'Elle diminue fortement', 'is_correct' => true],
                            ['choice_text' => 'Elle augmente toujours', 'is_correct' => false],
                            ['choice_text' => 'Elle devient automatiquement égale à 1', 'is_correct' => false],
                            ['choice_text' => 'Elle ne dépend jamais de la largeur', 'is_correct' => false],
                        ],
                        'explanation' => 'Plus la barrière est large, plus l’amplitude de la fonction d’onde diminue à l’intérieur et donc plus la transmission est faible.',
                    ],
                    [
                        'question' => 'Que devient généralement la probabilité de tunnel lorsque la barrière devient plus haute ?',
                        'choices' => [
                            ['choice_text' => 'Elle augmente nécessairement', 'is_correct' => false],
                            ['choice_text' => 'Elle devient toujours exactement 1/2', 'is_correct' => false],
                            ['choice_text' => 'Elle diminue', 'is_correct' => true],
                            ['choice_text' => 'Elle ne dépend jamais de la hauteur', 'is_correct' => false],
                        ],
                        'explanation' => 'Une barrière plus haute tend à réduire la transmission tunnel.',
                    ],
                    [
                        'question' => 'L’effet tunnel signifie-t-il que la particule gagne nécessairement de l’énergie en traversant la barrière ?',
                        'choices' => [
                            ['choice_text' => 'Oui, toujours', 'is_correct' => false],
                            ['choice_text' => 'Non', 'is_correct' => true],
                            ['choice_text' => 'Oui, toute l’énergie de la barrière est transférée', 'is_correct' => false],
                            ['choice_text' => 'Seulement pour les électrons', 'is_correct' => false],
                        ],
                        'explanation' => 'L’effet tunnel n’implique pas nécessairement un gain d’énergie ; il résulte de la nature ondulatoire quantique de la particule.',
                    ],
                    [
                        'question' => 'Quel phénomène nucléaire est lié à l’effet tunnel ?',
                        'choices' => [
                            ['choice_text' => 'La réflexion de la lumière sur un miroir', 'is_correct' => false],
                            ['choice_text' => 'La conduction thermique classique', 'is_correct' => false],
                            ['choice_text' => 'La pression hydrostatique', 'is_correct' => false],
                            ['choice_text' => 'La désintégration alpha', 'is_correct' => true],
                        ],
                        'explanation' => 'Dans la désintégration alpha, la particule alpha peut traverser par effet tunnel la barrière de potentiel nucléaire.',
                    ],
                    [
                        'question' => 'Pourquoi l’effet tunnel est-il généralement peu visible à l’échelle macroscopique ?',
                        'choices' => [
                            ['choice_text' => 'Les objets macroscopiques n’ont aucune énergie', 'is_correct' => false],
                            ['choice_text' => 'La mécanique quantique ne s’applique jamais aux objets réels', 'is_correct' => false],
                            ['choice_text' => 'La gravité interdit toute superposition', 'is_correct' => false],
                            ['choice_text' => 'Les longueurs d’onde associées aux objets macroscopiques sont extrêmement petites et les probabilités de tunnel sont généralement négligeables', 'is_correct' => true],
                        ],
                        'explanation' => 'Les effets quantiques deviennent extrêmement faibles pour les objets macroscopiques ordinaires.',
                    ],
                ],
            ],

            [
                'title' => 'Oscillateur harmonique quantique',
                'description' => 'Découvrir le modèle de l’oscillateur harmonique quantique et la notion d’énergie de point zéro.',
                'questions' => [
                    [
                        'question' => 'L’oscillateur harmonique quantique possède-t-il des niveaux d’énergie discrets ?',
                        'choices' => [
                            ['choice_text' => 'Non, toutes les énergies sont possibles', 'is_correct' => false],
                            ['choice_text' => 'Seulement dans le vide', 'is_correct' => false],
                            ['choice_text' => 'Oui', 'is_correct' => true],
                            ['choice_text' => 'Uniquement pour les photons', 'is_correct' => false],
                        ],
                        'explanation' => 'Le modèle quantique de l’oscillateur harmonique possède une série discrète de niveaux d’énergie.',
                    ],
                    [
                        'question' => 'Quelle forme générale prennent les niveaux d’énergie de l’oscillateur harmonique quantique ?',
                        'choices' => [
                            ['choice_text' => 'E_n = (n + 1/2)ħω', 'is_correct' => true],
                            ['choice_text' => 'E_n = nħ/ω', 'is_correct' => false],
                            ['choice_text' => 'E_n = n²ħω', 'is_correct' => false],
                            ['choice_text' => 'E_n = ħω/n', 'is_correct' => false],
                        ],
                        'explanation' => 'Les niveaux sont E_n = (n + 1/2)ħω avec n = 0, 1, 2, ...',
                    ],
                    [
                        'question' => 'Quel est le niveau fondamental de l’oscillateur harmonique quantique ?',
                        'choices' => [
                            ['choice_text' => 'E_0 = 0', 'is_correct' => false],
                            ['choice_text' => 'E_0 = ħω', 'is_correct' => false],
                            ['choice_text' => 'E_0 = 2ħω', 'is_correct' => false],
                            ['choice_text' => 'E_0 = 1/2 ħω', 'is_correct' => true],
                        ],
                        'explanation' => 'Même dans l’état fondamental, l’énergie n’est pas nulle : E_0 = ħω/2.',
                    ],
                    [
                        'question' => 'Comment appelle-t-on l’énergie présente même dans l’état fondamental de l’oscillateur quantique ?',
                        'choices' => [
                            ['choice_text' => 'L’énergie gravitationnelle terrestre', 'is_correct' => false],
                            ['choice_text' => 'L’énergie de point zéro', 'is_correct' => true],
                            ['choice_text' => 'L’énergie classique maximale', 'is_correct' => false],
                            ['choice_text' => 'L’énergie de masse du récipient', 'is_correct' => false],
                        ],
                        'explanation' => 'L’énergie de point zéro correspond à l’énergie minimale non nulle de l’oscillateur quantique.',
                    ],
                    [
                        'question' => 'Pourquoi l’énergie fondamentale de l’oscillateur quantique n’est-elle pas nulle ?',
                        'choices' => [
                            ['choice_text' => 'Le principe d’incertitude interdit une position et une quantité de mouvement toutes deux déterminées exactement à zéro', 'is_correct' => true],
                            ['choice_text' => 'Parce que la température est toujours positive', 'is_correct' => false],
                            ['choice_text' => 'Parce que la masse augmente spontanément', 'is_correct' => false],
                            ['choice_text' => 'Parce que la gravité est infinie', 'is_correct' => false],
                        ],
                        'explanation' => 'L’état fondamental conserve une fluctuation quantique minimale, cohérente avec le principe d’incertitude.',
                    ],
                    [
                        'question' => 'Quelle grandeur détermine l’espacement entre les niveaux consécutifs de l’oscillateur harmonique quantique ?',
                        'choices' => [
                            ['choice_text' => 'ħω', 'is_correct' => true],
                            ['choice_text' => 'ħ/ω', 'is_correct' => false],
                            ['choice_text' => 'ω² uniquement', 'is_correct' => false],
                            ['choice_text' => 'mω²', 'is_correct' => false],
                        ],
                        'explanation' => 'La différence entre deux niveaux successifs est ΔE = ħω.',
                    ],
                    [
                        'question' => 'Les niveaux d’énergie de l’oscillateur harmonique quantique sont-ils régulièrement espacés ?',
                        'choices' => [
                            ['choice_text' => 'Non, l’écart augmente avec n dans le modèle idéal', 'is_correct' => false],
                            ['choice_text' => 'Oui', 'is_correct' => true],
                            ['choice_text' => 'Non, ils sont tous égaux à zéro', 'is_correct' => false],
                            ['choice_text' => 'Seulement pour n = 0', 'is_correct' => false],
                        ],
                        'explanation' => 'Les niveaux sont régulièrement espacés de ħω.',
                    ],
                    [
                        'question' => 'Quelle valeur de n correspond à l’état fondamental ?',
                        'choices' => [
                            ['choice_text' => 'n = 1', 'is_correct' => false],
                            ['choice_text' => 'n = -1', 'is_correct' => false],
                            ['choice_text' => 'n = 0', 'is_correct' => true],
                            ['choice_text' => 'n = 1/2', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans ce modèle, les états sont indexés par n = 0, 1, 2, ...',
                    ],
                    [
                        'question' => 'Une transition entre deux niveaux voisins de l’oscillateur harmonique idéal correspond à une énergie :',
                        'choices' => [
                            ['choice_text' => 'ħω/2', 'is_correct' => false],
                            ['choice_text' => '2ħω', 'is_correct' => false],
                            ['choice_text' => 'ω/ħ', 'is_correct' => false],
                            ['choice_text' => 'ħω', 'is_correct' => true],
                        ],
                        'explanation' => 'Deux niveaux consécutifs diffèrent de ħω.',
                    ],
                    [
                        'question' => 'Le modèle de l’oscillateur harmonique quantique est-il utilisé pour approximer certains systèmes réels ?',
                        'choices' => [
                            ['choice_text' => 'Non, il n’a aucune application', 'is_correct' => false],
                            ['choice_text' => 'Seulement pour les planètes', 'is_correct' => false],
                            ['choice_text' => 'Seulement pour les circuits électriques classiques', 'is_correct' => false],
                            ['choice_text' => 'Oui, notamment certaines vibrations moléculaires et oscillations autour d’un équilibre', 'is_correct' => true],
                        ],
                        'explanation' => 'De nombreux systèmes physiques proches d’un équilibre peuvent être approximés par un oscillateur harmonique.',
                    ],
                ],
            ],

            [
                'title' => 'Applications de la mécanique quantique',
                'description' => 'Découvrir quelques technologies qui reposent directement ou indirectement sur les principes quantiques.',
                'questions' => [
                    [
                        'question' => 'Quel dispositif repose directement sur l’émission stimulée de rayonnement ?',
                        'choices' => [
                            ['choice_text' => 'Le baromètre', 'is_correct' => false],
                            ['choice_text' => 'Le pendule', 'is_correct' => false],
                            ['choice_text' => 'Le laser', 'is_correct' => true],
                            ['choice_text' => 'Le manomètre', 'is_correct' => false],
                        ],
                        'explanation' => 'Le fonctionnement du laser repose notamment sur l’émission stimulée et l’inversion de population.',
                    ],
                    [
                        'question' => 'Quelle technologie dépend fortement des propriétés quantiques des semi-conducteurs ?',
                        'choices' => [
                            ['choice_text' => 'Les leviers mécaniques simples', 'is_correct' => false],
                            ['choice_text' => 'Les transistors', 'is_correct' => true],
                            ['choice_text' => 'Les thermomètres à alcool uniquement', 'is_correct' => false],
                            ['choice_text' => 'Les pendules anciens uniquement', 'is_correct' => false],
                        ],
                        'explanation' => 'Le comportement électronique des semi-conducteurs est décrit grâce à la mécanique quantique.',
                    ],
                    [
                        'question' => 'Quel phénomène est exploité par les cellules photovoltaïques ?',
                        'choices' => [
                            ['choice_text' => 'L’interaction entre photons et électrons dans un matériau semi-conducteur', 'is_correct' => true],
                            ['choice_text' => 'La poussée d’Archimède', 'is_correct' => false],
                            ['choice_text' => 'La gravitation uniquement', 'is_correct' => false],
                            ['choice_text' => 'La conduction d’un gaz parfait', 'is_correct' => false],
                        ],
                        'explanation' => 'Le fonctionnement photovoltaïque repose sur l’absorption de photons et la génération de porteurs de charge dans un semi-conducteur.',
                    ],
                    [
                        'question' => 'Quel appareil permet d’observer une surface conductrice grâce à un courant tunnel ?',
                        'choices' => [
                            ['choice_text' => 'Le microscope optique classique', 'is_correct' => false],
                            ['choice_text' => 'Le thermomètre', 'is_correct' => false],
                            ['choice_text' => 'Le spectromètre de masse uniquement', 'is_correct' => false],
                            ['choice_text' => 'Le microscope à effet tunnel', 'is_correct' => true],
                        ],
                        'explanation' => 'Le microscope à effet tunnel utilise le courant tunnel entre une pointe et une surface.',
                    ],
                    [
                        'question' => 'Les horloges atomiques utilisent principalement :',
                        'choices' => [
                            ['choice_text' => 'Des transitions ou fréquences atomiques extrêmement stables', 'is_correct' => true],
                            ['choice_text' => 'La pression atmosphérique', 'is_correct' => false],
                            ['choice_text' => 'La longueur d’un ressort mécanique uniquement', 'is_correct' => false],
                            ['choice_text' => 'La vitesse du son dans l’air', 'is_correct' => false],
                        ],
                        'explanation' => 'Les horloges atomiques exploitent des fréquences associées à des transitions quantiques très précises.',
                    ],
                    [
                        'question' => 'Quelle technique médicale utilise des principes quantiques liés au spin nucléaire ?',
                        'choices' => [
                            ['choice_text' => 'La radiographie mécanique', 'is_correct' => false],
                            ['choice_text' => 'L’IRM', 'is_correct' => true],
                            ['choice_text' => 'Le stéthoscope', 'is_correct' => false],
                            ['choice_text' => 'Le tensiomètre classique uniquement', 'is_correct' => false],
                        ],
                        'explanation' => 'L’IRM exploite notamment les propriétés magnétiques des noyaux et leurs transitions dans un champ magnétique.',
                    ],
                    [
                        'question' => 'Quel appareil médical utilise des rayons X, eux-mêmes constitués de photons de haute énergie ?',
                        'choices' => [
                            ['choice_text' => 'L’appareil de radiographie', 'is_correct' => true],
                            ['choice_text' => 'Le stéthoscope', 'is_correct' => false],
                            ['choice_text' => 'Le thermomètre', 'is_correct' => false],
                            ['choice_text' => 'Le spiromètre acoustique uniquement', 'is_correct' => false],
                        ],
                        'explanation' => 'Les rayons X sont des photons électromagnétiques de haute énergie utilisés notamment pour l’imagerie médicale.',
                    ],
                    [
                        'question' => 'Pourquoi les LED dépendent-elles de la physique quantique ?',
                        'choices' => [
                            ['choice_text' => 'Parce qu’elles fonctionnent uniquement avec des fluides', 'is_correct' => false],
                            ['choice_text' => 'Parce que la lumière est générée par la gravité', 'is_correct' => false],
                            ['choice_text' => 'Parce que leurs électrons n’ont aucun niveau d’énergie', 'is_correct' => false],
                            ['choice_text' => 'L’émission de lumière est liée aux transitions électroniques dans un semi-conducteur', 'is_correct' => true],
                        ],
                        'explanation' => 'Dans une LED, des transitions électroniques à travers la structure énergétique du semi-conducteur produisent des photons.',
                    ],
                    [
                        'question' => 'Quel composant quantique est essentiel au fonctionnement des ordinateurs classiques modernes ?',
                        'choices' => [
                            ['choice_text' => 'Le pendule', 'is_correct' => false],
                            ['choice_text' => 'Le piston hydraulique', 'is_correct' => false],
                            ['choice_text' => 'Le transistor', 'is_correct' => true],
                            ['choice_text' => 'Le baromètre', 'is_correct' => false],
                        ],
                        'explanation' => 'Les transistors reposent sur les propriétés quantiques des électrons dans les matériaux semi-conducteurs.',
                    ],
                    [
                        'question' => 'Pourquoi la mécanique quantique est-elle importante pour la chimie moderne ?',
                        'choices' => [
                            ['choice_text' => 'Elle remplace complètement les lois de conservation', 'is_correct' => false],
                            ['choice_text' => 'Elle permet de décrire les électrons, les liaisons chimiques et les niveaux d’énergie moléculaires', 'is_correct' => true],
                            ['choice_text' => 'Elle ne concerne que les noyaux lourds', 'is_correct' => false],
                            ['choice_text' => 'Elle n’a aucun lien avec les électrons', 'is_correct' => false],
                        ],
                        'explanation' => 'La structure électronique des atomes et des molécules est fondamentalement quantique.',
                    ],
                ],
            ],

            [
                'title' => 'Révision générale de physique quantique',
                'description' => 'Réviser les notions essentielles : quanta, photons, fonctions d’onde, incertitude, niveaux d’énergie et applications.',
                'questions' => [
                    [
                        'question' => 'Quelle relation relie l’énergie d’un photon à sa fréquence ?',
                        'choices' => [
                            ['choice_text' => 'E = h/ν', 'is_correct' => false],
                            ['choice_text' => 'E = ν/h', 'is_correct' => false],
                            ['choice_text' => 'E = hν', 'is_correct' => true],
                            ['choice_text' => 'E = h + ν', 'is_correct' => false],
                        ],
                        'explanation' => 'L’énergie d’un photon est proportionnelle à sa fréquence.',
                    ],
                    [
                        'question' => 'Quelle grandeur est associée à |ψ|² ?',
                        'choices' => [
                            ['choice_text' => 'La masse au repos', 'is_correct' => false],
                            ['choice_text' => 'La densité de probabilité', 'is_correct' => true],
                            ['choice_text' => 'La charge élémentaire', 'is_correct' => false],
                            ['choice_text' => 'La vitesse de la lumière', 'is_correct' => false],
                        ],
                        'explanation' => 'Selon l’interprétation de Born, |ψ|² fournit une densité de probabilité.',
                    ],
                    [
                        'question' => 'Quel principe interdit une précision arbitraire simultanée sur la position et la quantité de mouvement ?',
                        'choices' => [
                            ['choice_text' => 'Le principe d’incertitude de Heisenberg', 'is_correct' => true],
                            ['choice_text' => 'Le principe d’exclusion de Pauli', 'is_correct' => false],
                            ['choice_text' => 'Le principe de relativité', 'is_correct' => false],
                            ['choice_text' => 'Le principe d’Archimède', 'is_correct' => false],
                        ],
                        'explanation' => 'La relation ΔxΔp ≥ ħ/2 impose une limite fondamentale sur ces deux incertitudes.',
                    ],
                    [
                        'question' => 'Comment appelle-t-on un état quantique constitué d’une combinaison de plusieurs états ?',
                        'choices' => [
                            ['choice_text' => 'Une ionisation', 'is_correct' => false],
                            ['choice_text' => 'Une réflexion', 'is_correct' => false],
                            ['choice_text' => 'Une superposition', 'is_correct' => true],
                            ['choice_text' => 'Une compression', 'is_correct' => false],
                        ],
                        'explanation' => 'Un état quantique peut être une combinaison linéaire de plusieurs états de base.',
                    ],
                    [
                        'question' => 'Quel phénomène permet à une particule de franchir avec une probabilité non nulle une barrière classiquement interdite ?',
                        'choices' => [
                            ['choice_text' => 'L’effet tunnel', 'is_correct' => true],
                            ['choice_text' => 'La convection', 'is_correct' => false],
                            ['choice_text' => 'La réfraction acoustique', 'is_correct' => false],
                            ['choice_text' => 'La dilatation thermique', 'is_correct' => false],
                        ],
                        'explanation' => 'L’effet tunnel est une conséquence du caractère ondulatoire de l’état quantique.',
                    ],
                    [
                        'question' => 'Quelle particule possède un spin 1/2 ?',
                        'choices' => [
                            ['choice_text' => 'Le photon', 'is_correct' => false],
                            ['choice_text' => 'Un graviton observé expérimentalement', 'is_correct' => false],
                            ['choice_text' => 'L’électron', 'is_correct' => true],
                            ['choice_text' => 'Une particule de spin nul', 'is_correct' => false],
                        ],
                        'explanation' => 'L’électron est un fermion de spin 1/2.',
                    ],
                    [
                        'question' => 'Quel principe explique pourquoi deux électrons identiques ne peuvent pas occuper exactement le même état quantique ?',
                        'choices' => [
                            ['choice_text' => 'Le principe de superposition', 'is_correct' => false],
                            ['choice_text' => 'Le principe d’inertie', 'is_correct' => false],
                            ['choice_text' => 'Le principe de Pascal', 'is_correct' => false],
                            ['choice_text' => 'Le principe d’exclusion de Pauli', 'is_correct' => true],
                        ],
                        'explanation' => 'Les électrons sont des fermions et obéissent au principe d’exclusion de Pauli.',
                    ],
                    [
                        'question' => 'Pourquoi les niveaux d’énergie atomiques sont-ils discrets ?',
                        'choices' => [
                            ['choice_text' => 'Parce que l’énergie n’existe pas entre deux transitions', 'is_correct' => false],
                            ['choice_text' => 'Parce que les états liés admissibles du système quantique sont quantifiés', 'is_correct' => true],
                            ['choice_text' => 'Parce que les électrons sont parfaitement immobiles', 'is_correct' => false],
                            ['choice_text' => 'Parce que la température impose toujours les mêmes niveaux', 'is_correct' => false],
                        ],
                        'explanation' => 'Les conditions quantiques imposées au système conduisent à un ensemble discret d’états d’énergie pour les systèmes liés.',
                    ],
                    [
                        'question' => 'Quelle est l’énergie de repos d’une particule de masse m selon la relativité ?',
                        'choices' => [
                            ['choice_text' => 'E₀ = mv', 'is_correct' => false],
                            ['choice_text' => 'E₀ = m/c²', 'is_correct' => false],
                            ['choice_text' => 'E₀ = mc', 'is_correct' => false],
                            ['choice_text' => 'E₀ = mc²', 'is_correct' => true],
                        ],
                        'explanation' => 'La relation E₀ = mc² vient de la relativité restreinte et constitue un autre pilier de la physique moderne.',
                    ],
                    [
                        'question' => 'Quel modèle quantique simple montre directement que l’énergie peut être quantifiée en raison du confinement ?',
                        'choices' => [
                            ['choice_text' => 'Le mouvement uniforme sur une route', 'is_correct' => false],
                            ['choice_text' => 'La chute libre classique', 'is_correct' => false],
                            ['choice_text' => 'Le fluide incompressible au repos', 'is_correct' => false],
                            ['choice_text' => 'La particule dans une boîte', 'is_correct' => true],
                        ],
                        'explanation' => 'Le modèle de la particule dans une boîte est un exemple élémentaire où les conditions aux limites conduisent à des niveaux d’énergie discrets.',
                    ],
                    [
                        'question' => 'Quel énoncé résume le mieux la mécanique quantique ?',
                        'choices' => [
                            ['choice_text' => 'Elle affirme que toutes les particules suivent des trajectoires classiques parfaitement connues', 'is_correct' => false],
                            ['choice_text' => 'Elle fournit un cadre mathématique pour décrire les systèmes microscopiques avec quantification, superposition et probabilités', 'is_correct' => true],
                            ['choice_text' => 'Elle concerne uniquement les photons visibles', 'is_correct' => false],
                            ['choice_text' => 'Elle remplace toutes les théories physiques dans toutes les situations', 'is_correct' => false],
                        ],
                        'explanation' => 'La mécanique quantique décrit les systèmes microscopiques avec des états quantiques, des observables et des prédictions probabilistes.',
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