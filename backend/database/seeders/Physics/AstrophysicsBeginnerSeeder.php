<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class AstrophysicsBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'astrophysics')->firstOrFail();

        $quizzes = [
            [
                'title' => 'Introduction à l\'astrophysique',
                'description' => 'Découvrir les objets célestes, les grandes échelles de l\'Univers et les notions fondamentales de l\'astrophysique.',
                'questions' => [
                    [
                        'question' => 'Qu\'étudie principalement l\'astrophysique ?',
                        'choices' => [
                            ['choice_text' => 'Les propriétés physiques des objets et phénomènes de l\'Univers', 'is_correct' => true],
                            ['choice_text' => 'Uniquement les mouvements des objets sur Terre', 'is_correct' => false],
                            ['choice_text' => 'Uniquement les réactions chimiques en laboratoire', 'is_correct' => false],
                            ['choice_text' => 'La structure des océans terrestres', 'is_correct' => false],
                        ],
                        'explanation' => 'L\'astrophysique applique les lois de la physique à l\'étude des étoiles, planètes, galaxies, trous noirs et autres phénomènes cosmiques.',
                    ],
                    [
                        'question' => 'Quel est l\'objet au centre de notre système solaire ?',
                        'choices' => [
                            ['choice_text' => 'Le Soleil', 'is_correct' => true],
                            ['choice_text' => 'La Terre', 'is_correct' => false],
                            ['choice_text' => 'Jupiter', 'is_correct' => false],
                            ['choice_text' => 'La Lune', 'is_correct' => false],
                        ],
                        'explanation' => 'Le Soleil est l\'étoile située au centre du système solaire.',
                    ],
                    [
                        'question' => 'Quelle force joue un rôle majeur dans la formation et le maintien des systèmes astronomiques ?',
                        'choices' => [
                            ['choice_text' => 'La gravitation', 'is_correct' => true],
                            ['choice_text' => 'La force de frottement de l\'air', 'is_correct' => false],
                            ['choice_text' => 'La tension superficielle', 'is_correct' => false],
                            ['choice_text' => 'La force nucléaire forte à l\'échelle des galaxies', 'is_correct' => false],
                        ],
                        'explanation' => 'La gravitation structure les systèmes planétaires, les étoiles, les galaxies et les amas de galaxies.',
                    ],
                    [
                        'question' => 'Quelle unité est particulièrement utilisée pour mesurer les grandes distances astronomiques ?',
                        'choices' => [
                            ['choice_text' => L\'année-lumière', 'is_correct' => true],
                            ['choice_text' => 'Le kilogramme', 'is_correct' => false],
                            ['choice_text' => 'Le pascal', 'is_correct' => false],
                            ['choice_text' => 'Le litre', 'is_correct' => false],
                        ],
                        'explanation' => 'Une année-lumière correspond à la distance parcourue par la lumière dans le vide en une année.',
                    ],
                    [
                        'question' => 'Une année-lumière est-elle une unité de temps ?',
                        'choices' => [
                            ['choice_text' => 'Non, c\'est une unité de distance', 'is_correct' => true],
                            ['choice_text' => 'Oui, c\'est une unité de temps', 'is_correct' => false],
                            ['choice_text' => 'C\'est une unité de masse', 'is_correct' => false],
                            ['choice_text' => 'C\'est une unité de température', 'is_correct' => false],
                        ],
                        'explanation' => 'Malgré son nom, l\'année-lumière mesure une distance.',
                    ],
                    [
                        'question' => 'Quel objet céleste produit naturellement sa propre lumière grâce à des processus internes ?',
                        'choices' => [
                            ['choice_text' => 'Une étoile', 'is_correct' => true],
                            ['choice_text' => 'Une planète', 'is_correct' => false],
                            ['choice_text' => 'Un astéroïde', 'is_correct' => false],
                            ['choice_text' => 'La Lune', 'is_correct' => false],
                        ],
                        'explanation' => 'Les étoiles émettent leur propre rayonnement ; les planètes et la plupart des petits corps réfléchissent principalement la lumière reçue.',
                    ],
                    [
                        'question' => 'La Lune est-elle une étoile ?',
                        'choices' => [
                            ['choice_text' => 'Non, c\'est un satellite naturel de la Terre', 'is_correct' => true],
                            ['choice_text' => 'Oui, c\'est l\'étoile la plus proche de la Terre', 'is_correct' => false],
                            ['choice_text' => 'Oui, mais elle est plus froide que le Soleil', 'is_correct' => false],
                            ['choice_text' => 'Non, car elle est une planète', 'is_correct' => false],
                        ],
                        'explanation' => 'La Lune est le satellite naturel de la Terre et ne produit pas sa propre lumière visible comme une étoile.',
                    ],
                    [
                        'question' => 'Quelle branche de la science permet principalement d\'obtenir des informations sur les objets célestes grâce à leur lumière ?',
                        'choices' => [
                            ['choice_text' => L\'astronomie observationnelle', 'is_correct' => true],
                            ['choice_text' => 'La mécanique des fluides terrestre uniquement', 'is_correct' => false],
                            ['choice_text' => 'La géologie marine uniquement', 'is_correct' => false],
                            ['choice_text' => 'La chimie organique uniquement', 'is_correct' => false],
                        ],
                        'explanation' => 'L\'observation astronomique permet d\'étudier le rayonnement reçu des objets célestes.',
                    ],
                    [
                        'question' => 'Pourquoi l\'astrophysique utilise-t-elle beaucoup les lois de la physique ?',
                        'choices' => [
                            ['choice_text' => 'Parce qu\'elle cherche à expliquer les propriétés et l\'évolution des objets célestes', 'is_correct' => true],
                            ['choice_text' => 'Parce que les objets célestes sont tous fabriqués en laboratoire', 'is_correct' => false],
                            ['choice_text' => 'Parce que la gravitation n\'existe que dans l\'espace', 'is_correct' => false],
                            ['choice_text' => 'Parce que l\'Univers ne contient aucune matière', 'is_correct' => false],
                        ],
                        'explanation' => 'L\'astrophysique utilise la mécanique, la thermodynamique, l\'électromagnétisme, la relativité et d\'autres branches de la physique.',
                    ],
                    [
                        'question' => 'Une galaxie est principalement :',
                        'choices' => [
                            ['choice_text' => 'Un vaste ensemble d\'étoiles, de gaz, de poussières et de matière noire lié par la gravitation', 'is_correct' => true],
                            ['choice_text' => 'Une seule étoile très massive', 'is_correct' => false],
                            ['choice_text' => 'Un groupe de planètes autour d\'une seule planète', 'is_correct' => false],
                            ['choice_text' => 'Une région vide sans aucune matière', 'is_correct' => false],
                        ],
                        'explanation' => 'Une galaxie contient généralement des milliards d\'étoiles ainsi que du gaz, de la poussière et de la matière noire.',
                    ],
                ],
            ],

            [
                'title' => 'Les étoiles',
                'description' => 'Comprendre les propriétés de base des étoiles, leur formation, leur structure et leur évolution.',
                'questions' => [
                    [
                        'question' => 'Qu\'est-ce qu\'une étoile ?',
                        'choices' => [
                            ['choice_text' => 'Une grande sphère de plasma maintenue par sa propre gravité et produisant de l\'énergie', 'is_correct' => true],
                            ['choice_text' => 'Une planète recouverte de gaz froid', 'is_correct' => false],
                            ['choice_text' => 'Un satellite naturel sans énergie interne', 'is_correct' => false],
                            ['choice_text' => 'Un amas de roches sans gravité', 'is_correct' => false],
                        ],
                        'explanation' => 'Une étoile est un objet astrophysique massif dont la gravité maintient un plasma et dont l\'énergie provient principalement de processus nucléaires durant certaines phases.',
                    ],
                    [
                        'question' => 'Quelle réaction produit principalement l\'énergie du Soleil pendant sa phase actuelle ?',
                        'choices' => [
                            ['choice_text' => 'La fusion de l\'hydrogène en hélium', 'is_correct' => true],
                            ['choice_text' => 'La fission de l\'uranium', 'is_correct' => false],
                            ['choice_text' => 'La combustion du charbon', 'is_correct' => false],
                            ['choice_text' => 'La fusion de l\'oxygène en fer uniquement', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans le cœur du Soleil, l\'hydrogène est converti en hélium par des réactions de fusion nucléaire.',
                    ],
                    [
                        'question' => 'Pourquoi une étoile reste-t-elle globalement stable pendant certaines phases de sa vie ?',
                        'choices' => [
                            ['choice_text' => 'Un équilibre s\'établit entre la gravité et la pression interne', 'is_correct' => true],
                            ['choice_text' => 'Parce que la gravité n\'agit pas sur les étoiles', 'is_correct' => false],
                            ['choice_text' => 'Parce que les étoiles sont entièrement solides', 'is_correct' => false],
                            ['choice_text' => 'Parce qu\'elles ne contiennent aucune énergie', 'is_correct' => false],
                        ],
                        'explanation' => 'L\'équilibre hydrostatique oppose la tendance gravitationnelle à contracter l\'étoile à la pression interne.',
                    ],
                    [
                        'question' => 'Quelle couleur correspond généralement à une température de surface plus élevée parmi les étoiles visibles ?',
                        'choices' => [
                            ['choice_text' => 'Bleu', 'is_correct' => true],
                            ['choice_text' => 'Rouge', 'is_correct' => false],
                            ['choice_text' => 'Orange uniquement', 'is_correct' => false],
                            ['choice_text' => 'Brun sombre', 'is_correct' => false],
                        ],
                        'explanation' => 'Les étoiles plus chaudes apparaissent généralement plus bleues ou blanches, tandis que les étoiles plus froides paraissent plus rouges.',
                    ],
                    [
                        'question' => 'Quelle information peut-on obtenir à partir du spectre d\'une étoile ?',
                        'choices' => [
                            ['choice_text' => 'Des informations sur sa composition chimique et ses propriétés physiques', 'is_correct' => true],
                            ['choice_text' => 'Uniquement son âge exact à la seconde près', 'is_correct' => false],
                            ['choice_text' => 'Uniquement la taille de la Terre', 'is_correct' => false],
                            ['choice_text' => 'La masse de chaque électron de l\'Univers', 'is_correct' => false],
                        ],
                        'explanation' => 'Les raies spectrales permettent notamment d\'identifier certains éléments et d\'étudier la température, la vitesse et d\'autres propriétés.',
                    ],
                    [
                        'question' => 'Comment naissent généralement les étoiles ?',
                        'choices' => [
                            ['choice_text' => 'Par l\'effondrement gravitationnel de régions denses de nuages de gaz et de poussières', 'is_correct' => true],
                            ['choice_text' => 'Par la solidification instantanée d\'une planète', 'is_correct' => false],
                            ['choice_text' => 'Par la collision de deux photons', 'is_correct' => false],
                            ['choice_text' => 'Par l\'évaporation d\'un trou noir', 'is_correct' => false],
                        ],
                        'explanation' => 'Les étoiles se forment lorsque des régions suffisamment denses d\'un nuage moléculaire s\'effondrent sous l\'effet de leur gravité.',
                    ],
                    [
                        'question' => 'Qu\'arrive-t-il généralement à une étoile lorsqu\'elle épuise progressivement son combustible nucléaire principal ?',
                        'choices' => [
                            ['choice_text' => 'Sa structure et son évolution changent et elle peut entrer dans une nouvelle phase', 'is_correct' => true],
                            ['choice_text' => 'Elle disparaît instantanément sans transformation', 'is_correct' => false],
                            ['choice_text' => 'Elle devient toujours une planète', 'is_correct' => false],
                            ['choice_text' => 'Elle devient nécessairement un astéroïde', 'is_correct' => false],
                        ],
                        'explanation' => 'La diminution du combustible disponible modifie l\'équilibre interne et peut conduire l\'étoile vers de nouvelles phases évolutives.',
                    ],
                    [
                        'question' => 'Quelle étoile est la plus proche de la Terre ?',
                        'choices' => [
                            ['choice_text' => 'Le Soleil', 'is_correct' => true],
                            ['choice_text' => 'Sirius', 'is_correct' => false],
                            ['choice_text' => 'Bételgeuse', 'is_correct' => false],
                            ['choice_text' => 'Proxima du Centaure', 'is_correct' => false],
                        ],
                        'explanation' => 'Le Soleil est de très loin l\'étoile la plus proche de la Terre. Parmi les étoiles autres que le Soleil, Proxima du Centaure est la plus proche connue.',
                    ],
                    [
                        'question' => 'Quel diagramme est largement utilisé pour classer les étoiles selon leur luminosité et leur température ?',
                        'choices' => [
                            ['choice_text' => 'Le diagramme de Hertzsprung-Russell', 'is_correct' => true],
                            ['choice_text' => 'Le diagramme de Bernoulli', 'is_correct' => false],
                            ['choice_text' => 'Le diagramme de Pascal', 'is_correct' => false],
                            ['choice_text' => 'Le diagramme de Newton', 'is_correct' => false],
                        ],
                        'explanation' => 'Le diagramme de Hertzsprung-Russell relie notamment la luminosité des étoiles à leur température de surface ou à leur type spectral.',
                    ],
                    [
                        'question' => 'Une étoile de très grande masse évolue-t-elle généralement de la même manière qu\'une étoile de faible masse ?',
                        'choices' => [
                            ['choice_text' => 'Non, la masse initiale influence fortement son évolution', 'is_correct' => true],
                            ['choice_text' => 'Oui, toutes les étoiles ont exactement la même évolution', 'is_correct' => false],
                            ['choice_text' => 'Seulement si elles ont des couleurs différentes', 'is_correct' => false],
                            ['choice_text' => 'Non, mais uniquement à cause de leur distance à la Terre', 'is_correct' => false],
                        ],
                        'explanation' => 'La masse initiale est l\'un des facteurs les plus importants pour déterminer l\'évolution et le destin d\'une étoile.',
                    ],
                ],
            ],

            [
                'title' => 'Planètes et système solaire',
                'description' => 'Explorer les caractéristiques générales des planètes, des satellites et des petits corps du système solaire.',
                'questions' => [
                    [
                        'question' => 'Combien de planètes principales composent le système solaire selon la classification actuelle ?',
                        'choices' => [
                            ['choice_text' => 'Huit', 'is_correct' => true],
                            ['choice_text' => 'Sept', 'is_correct' => false],
                            ['choice_text' => 'Neuf', 'is_correct' => false],
                            ['choice_text' => 'Douze', 'is_correct' => false],
                        ],
                        'explanation' => 'Le système solaire compte huit planètes reconnues.',
                    ],
                    [
                        'question' => 'Quelle planète est la plus proche du Soleil ?',
                        'choices' => [
                            ['choice_text' => 'Mercure', 'is_correct' => true],
                            ['choice_text' => 'Vénus', 'is_correct' => false],
                            ['choice_text' => 'La Terre', 'is_correct' => false],
                            ['choice_text' => 'Mars', 'is_correct' => false],
                        ],
                        'explanation' => 'Mercure est la planète la plus proche du Soleil.',
                    ],
                    [
                        'question' => 'Quelle planète est connue pour ses anneaux particulièrement visibles ?',
                        'choices' => [
                            ['choice_text' => 'Saturne', 'is_correct' => true],
                            ['choice_text' => 'Mercure', 'is_correct' => false],
                            ['choice_text' => 'Mars', 'is_correct' => false],
                            ['choice_text' => 'Vénus', 'is_correct' => false],
                        ],
                        'explanation' => 'Saturne possède un système d\'anneaux très développé composé principalement de glace et de débris rocheux.',
                    ],
                    [
                        'question' => 'Quelle est la plus grande planète du système solaire ?',
                        'choices' => [
                            ['choice_text' => 'Jupiter', 'is_correct' => true],
                            ['choice_text' => 'Saturne', 'is_correct' => false],
                            ['choice_text' => 'Neptune', 'is_correct' => false],
                            ['choice_text' => 'La Terre', 'is_correct' => false],
                        ],
                        'explanation' => 'Jupiter est la plus grande planète du système solaire en diamètre et en masse.',
                    ],
                    [
                        'question' => 'Quelle planète possède la surface solide étudiée notamment par des missions robotisées et des rovers ?',
                        'choices' => [
                            ['choice_text' => 'Mars', 'is_correct' => true],
                            ['choice_text' => 'Jupiter', 'is_correct' => false],
                            ['choice_text' => 'Saturne', 'is_correct' => false],
                            ['choice_text' => 'Neptune', 'is_correct' => false],
                        ],
                        'explanation' => 'Mars est une planète rocheuse dont la surface peut être explorée par des sondes et des rovers.',
                    ],
                    [
                        'question' => 'Quelle planète est actuellement connue pour être notre lieu de vie ?',
                        'choices' => [
                            ['choice_text' => 'La Terre', 'is_correct' => true],
                            ['choice_text' => 'Mars', 'is_correct' => false],
                            ['choice_text' => 'Vénus', 'is_correct' => false],
                            ['choice_text' => 'Jupiter', 'is_correct' => false],
                        ],
                        'explanation' => 'La Terre est la planète où la vie est actuellement connue avec certitude.',
                    ],
                    [
                        'question' => 'Comment appelle-t-on les petits corps rocheux ou métalliques qui orbitent principalement autour du Soleil ?',
                        'choices' => [
                            ['choice_text' => 'Astéroïdes', 'is_correct' => true],
                            ['choice_text' => 'Étoiles', 'is_correct' => false],
                            ['choice_text' => 'Pulsars', 'is_correct' => false],
                            ['choice_text' => 'Quasars', 'is_correct' => false],
                        ],
                        'explanation' => 'Les astéroïdes sont de petits corps principalement rocheux ou métalliques en orbite autour du Soleil.',
                    ],
                    [
                        'question' => 'Une comète est généralement constituée principalement de :',
                        'choices' => [
                            ['choice_text' => 'Glaces, poussières et matériaux rocheux', 'is_correct' => true],
                            ['choice_text' => 'Plasma pur uniquement', 'is_correct' => false],
                            ['choice_text' => 'Hydrogène métallique liquide uniquement', 'is_correct' => false],
                            ['choice_text' => 'Électrons libres uniquement', 'is_correct' => false],
                        ],
                        'explanation' => 'Les noyaux cométaires contiennent des glaces volatiles mélangées à des poussières et des matériaux rocheux.',
                    ],
                    [
                        'question' => 'Pourquoi les planètes restent-elles en orbite autour du Soleil ?',
                        'choices' => [
                            ['choice_text' => 'Leur mouvement et l\'attraction gravitationnelle du Soleil produisent une trajectoire orbitale', 'is_correct' => true],
                            ['choice_text' => 'Parce que le Soleil pousse les planètes avec une force répulsive constante', 'is_correct' => false],
                            ['choice_text' => 'Parce que l\'espace est rempli d\'un liquide qui les porte', 'is_correct' => false],
                            ['choice_text' => 'Parce qu\'elles sont immobiles dans l\'espace', 'is_correct' => false],
                        ],
                        'explanation' => 'Une orbite résulte de la combinaison du mouvement inertiel de la planète et de l\'attraction gravitationnelle du Soleil.',
                    ],
                    [
                        'question' => 'Quel objet est le principal satellite naturel de la Terre ?',
                        'choices' => [
                            ['choice_text' => 'La Lune', 'is_correct' => true],
                            ['choice_text' => 'Mars', 'is_correct' => false],
                            ['choice_text' => 'Vénus', 'is_correct' => false],
                            ['choice_text' => 'Phobos', 'is_correct' => false],
                        ],
                        'explanation' => 'La Lune est le satellite naturel de la Terre.',
                    ],
                ],
            ],

            [
                'title' => 'Galaxies et structure de l\'Univers',
                'description' => 'Comprendre les galaxies, les amas et les grandes structures de l\'Univers observable.',
                'questions' => [
                    [
                        'question' => 'Dans quelle galaxie se trouve le système solaire ?',
                        'choices' => [
                            ['choice_text' => 'La Voie lactée', 'is_correct' => true],
                            ['choice_text' => 'Andromède', 'is_correct' => false],
                            ['choice_text' => 'Le Grand Nuage de Magellan', 'is_correct' => false],
                            ['choice_text' => 'Une galaxie elliptique proche', 'is_correct' => false],
                        ],
                        'explanation' => 'Le système solaire se situe dans la Voie lactée, une grande galaxie spirale barrée.',
                    ],
                    [
                        'question' => 'Quel type de galaxie possède généralement des bras spiraux bien définis ?',
                        'choices' => [
                            ['choice_text' => 'Une galaxie spirale', 'is_correct' => true],
                            ['choice_text' => 'Une galaxie elliptique', 'is_correct' => false],
                            ['choice_text' => 'Une galaxie sans étoiles', 'is_correct' => false],
                            ['choice_text' => 'Un amas globulaire', 'is_correct' => false],
                        ],
                        'explanation' => 'Les galaxies spirales présentent un disque et, pour beaucoup d\'entre elles, des bras spiraux.',
                    ],
                    [
                        'question' => 'Une galaxie elliptique se caractérise généralement par :',
                        'choices' => [
                            ['choice_text' => 'Une forme approximativement ellipsoïdale et moins de structure spirale visible', 'is_correct' => true],
                            ['choice_text' => 'Des bras spiraux toujours très lumineux', 'is_correct' => false],
                            ['choice_text' => 'L\'absence totale d\'étoiles', 'is_correct' => false],
                            ['choice_text' => 'Une seule étoile centrale', 'is_correct' => false],
                        ],
                        'explanation' => 'Les galaxies elliptiques ont une structure plus arrondie ou allongée et ne présentent généralement pas de bras spiraux.',
                    ],
                    [
                        'question' => 'Comment appelle-t-on un ensemble de plusieurs galaxies liées gravitationnellement ?',
                        'choices' => [
                            ['choice_text' => 'Un groupe ou un amas de galaxies selon sa taille', 'is_correct' => true],
                            ['choice_text' => 'Une étoile multiple', 'is_correct' => false],
                            ['choice_text' => 'Une nébuleuse planétaire', 'is_correct' => false],
                            ['choice_text' => 'Un satellite artificiel', 'is_correct' => false],
                        ],
                        'explanation' => 'Les galaxies peuvent se regrouper sous l\'effet de la gravitation en groupes et en amas.',
                    ],
                    [
                        'question' => 'La Voie lactée contient-elle un très grand nombre d\'étoiles ?',
                        'choices' => [
                            ['choice_text' => 'Oui, des centaines de milliards environ selon les estimations', 'is_correct' => true],
                            ['choice_text' => 'Non, seulement quelques milliers', 'is_correct' => false],
                            ['choice_text' => 'Elle ne contient aucune étoile', 'is_correct' => false],
                            ['choice_text' => 'Elle contient exactement huit étoiles', 'is_correct' => false],
                        ],
                        'explanation' => 'La Voie lactée est une immense galaxie contenant un nombre d\'étoiles estimé à plusieurs dizaines ou centaines de milliards.',
                    ],
                    [
                        'question' => 'Andromède est principalement connue comme :',
                        'choices' => [
                            ['choice_text' => 'Une grande galaxie voisine de la Voie lactée', 'is_correct' => true],
                            ['choice_text' => 'Une planète géante', 'is_correct' => false],
                            ['choice_text' => 'Une étoile du système solaire', 'is_correct' => false],
                            ['choice_text' => 'Un satellite naturel de Jupiter', 'is_correct' => false],
                        ],
                        'explanation' => 'La galaxie d\'Andromède est une grande galaxie du Groupe local et l\'une des grandes voisines de la Voie lactée.',
                    ],
                    [
                        'question' => 'Qu\'est-ce qu\'une nébuleuse dans le contexte astrophysique ?',
                        'choices' => [
                            ['choice_text' => 'Une région de gaz et de poussières dans l\'espace', 'is_correct' => true],
                            ['choice_text' => 'Une planète sans atmosphère', 'is_correct' => false],
                            ['choice_text' => 'Un trou noir uniquement', 'is_correct' => false],
                            ['choice_text' => 'Une étoile nécessairement éteinte', 'is_correct' => false],
                        ],
                        'explanation' => 'Les nébuleuses sont des régions interstellaires constituées principalement de gaz et de poussières.',
                    ],
                    [
                        'question' => 'Pourquoi les galaxies peuvent-elles présenter différentes formes ?',
                        'choices' => [
                            ['choice_text' => 'Leur histoire, leur dynamique, leurs interactions et leur contenu peuvent différer', 'is_correct' => true],
                            ['choice_text' => 'Toutes les galaxies ont exactement la même structure', 'is_correct' => false],
                            ['choice_text' => 'La gravité n\'agit pas sur les galaxies', 'is_correct' => false],
                            ['choice_text' => 'La forme dépend uniquement de leur couleur', 'is_correct' => false],
                        ],
                        'explanation' => 'La morphologie galactique dépend de nombreux facteurs, notamment la formation, les fusions et la dynamique interne.',
                    ],
                    [
                        'question' => 'La matière noire est-elle détectée principalement par la lumière qu\'elle émet directement ?',
                        'choices' => [
                            ['choice_text' => 'Non, elle est surtout étudiée à partir de ses effets gravitationnels', 'is_correct' => true],
                            ['choice_text' => 'Oui, elle émet une lumière visible très forte', 'is_correct' => false],
                            ['choice_text' => 'Oui, elle brille plus que les étoiles', 'is_correct' => false],
                            ['choice_text' => 'Non, mais elle ne possède aucun effet gravitationnel', 'is_correct' => false],
                        ],
                        'explanation' => 'La matière noire n\'est pas directement observée par son rayonnement électromagnétique ; son existence est notamment inférée de ses effets gravitationnels.',
                    ],
                    [
                        'question' => 'L\'Univers observable contient-il uniquement des étoiles individuelles ?',
                        'choices' => [
                            ['choice_text' => 'Non, il contient aussi des galaxies, des amas, du gaz, des rayonnements et d\'autres structures', 'is_correct' => true],
                            ['choice_text' => 'Oui, les galaxies n\'existent pas', 'is_correct' => false],
                            ['choice_text' => 'Oui, les planètes n\'existent qu\'à l\'intérieur du système solaire', 'is_correct' => false],
                            ['choice_text' => 'Non, mais il ne contient aucune matière', 'is_correct' => false],
                        ],
                        'explanation' => 'L\'Univers observable présente une grande variété d\'objets et de structures organisées sur de nombreuses échelles.',
                    ],
                ],
            ],

            [
                'title' => 'Rayonnement et observation astronomique',
                'description' => 'Découvrir comment les astronomes utilisent le rayonnement électromagnétique pour observer l\'Univers.',
                'questions' => [
                    [
                        'question' => 'Pourquoi la lumière est-elle essentielle à l\'astronomie moderne ?',
                        'choices' => [
                            ['choice_text' => 'Elle apporte des informations sur les objets que l\'on ne peut généralement pas atteindre directement', 'is_correct' => true],
                            ['choice_text' => 'Parce que toutes les étoiles se trouvent dans l\'atmosphère terrestre', 'is_correct' => false],
                            ['choice_text' => 'Parce que les planètes émettent toutes une lumière visible intense', 'is_correct' => false],
                            ['choice_text' => 'Parce que la gravitation n\'est observable qu\'avec la lumière', 'is_correct' => false],
                        ],
                        'explanation' => 'Le rayonnement électromagnétique transporte des informations sur la température, la composition, le mouvement et d\'autres propriétés des objets célestes.',
                    ],
                    [
                        'question' => 'La lumière visible représente-t-elle la totalité du spectre électromagnétique ?',
                        'choices' => [
                            ['choice_text' => 'Non', 'is_correct' => true],
                            ['choice_text' => 'Oui', 'is_correct' => false],
                            ['choice_text' => 'Oui, à l\'exception des ondes radio terrestres', 'is_correct' => false],
                            ['choice_text' => 'Oui, sauf dans le vide', 'is_correct' => false],
                        ],
                        'explanation' => 'Le spectre électromagnétique comprend également les ondes radio, micro-ondes, infrarouges, ultraviolets, rayons X et gamma.',
                    ],
                    [
                        'question' => 'Pourquoi utilise-t-on des télescopes infrarouges ?',
                        'choices' => [
                            ['choice_text' => 'Pour observer des sources ou phénomènes qui émettent fortement dans l\'infrarouge', 'is_correct' => true],
                            ['choice_text' => 'Pour mesurer uniquement le son des étoiles', 'is_correct' => false],
                            ['choice_text' => 'Pour observer uniquement les électrons terrestres', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer toute lumière visible', 'is_correct' => false],
                        ],
                        'explanation' => 'L\'infrarouge permet notamment d\'étudier des objets relativement froids, des régions poussiéreuses et certains processus de formation stellaire.',
                    ],
                    [
                        'question' => 'Pourquoi les télescopes spatiaux sont-ils utiles ?',
                        'choices' => [
                            ['choice_text' => 'Ils évitent certaines perturbations de l\'atmosphère terrestre et peuvent observer certaines longueurs d\'onde bloquées par l\'atmosphère', 'is_correct' => true],
                            ['choice_text' => 'Ils rendent toutes les étoiles plus proches', 'is_correct' => false],
                            ['choice_text' => 'Ils augmentent physiquement la luminosité des galaxies', 'is_correct' => false],
                            ['choice_text' => 'Ils suppriment la gravitation', 'is_correct' => false],
                        ],
                        'explanation' => 'L\'atmosphère déforme certaines observations et absorbe une partie du rayonnement électromagnétique.',
                    ],
                    [
                        'question' => 'Quel instrument décompose la lumière selon ses longueurs d\'onde ?',
                        'choices' => [
                            ['choice_text' => 'Un spectromètre', 'is_correct' => true],
                            ['choice_text' => 'Un baromètre', 'is_correct' => false],
                            ['choice_text' => 'Un accéléromètre', 'is_correct' => false],
                            ['choice_text' => 'Un manomètre', 'is_correct' => false],
                        ],
                        'explanation' => 'Un spectromètre permet d\'analyser la distribution du rayonnement selon la longueur d\'onde ou la fréquence.',
                    ],
                    [
                        'question' => 'Que peut indiquer un décalage vers le rouge des raies spectrales d\'une galaxie ?',
                        'choices' => [
                            ['choice_text' => 'Un éloignement de la source par rapport à l\'observateur dans le cadre de l\'interprétation Doppler simplifiée', 'is_correct' => true],
                            ['choice_text' => 'Une diminution obligatoire de sa masse', 'is_correct' => false],
                            ['choice_text' => 'Une absence totale de mouvement', 'is_correct' => false],
                            ['choice_text' => 'Une baisse automatique de son nombre d\'étoiles', 'is_correct' => false],
                        ],
                        'explanation' => 'Un décalage spectral vers les grandes longueurs d\'onde peut révéler une vitesse d\'éloignement dans le cadre Doppler ; à l\'échelle cosmologique, le redshift a aussi une interprétation liée à l\'expansion de l\'Univers.',
                    ],
                    [
                        'question' => 'Quel type de rayonnement possède une longueur d\'onde plus grande que la lumière visible ?',
                        'choices' => [
                            ['choice_text' => 'L\'infrarouge', 'is_correct' => true],
                            ['choice_text' => 'L\'ultraviolet', 'is_correct' => false],
                            ['choice_text' => 'Les rayons X', 'is_correct' => false],
                            ['choice_text' => 'Les rayons gamma', 'is_correct' => false],
                        ],
                        'explanation' => 'L\'infrarouge se situe du côté des longueurs d\'onde plus grandes que le visible.',
                    ],
                    [
                        'question' => 'Quel rayonnement possède une énergie photonique plus élevée que la lumière visible ?',
                        'choices' => [
                            ['choice_text' => 'Les rayons X', 'is_correct' => true],
                            ['choice_text' => 'Les ondes radio', 'is_correct' => false],
                            ['choice_text' => 'Les micro-ondes', 'is_correct' => false],
                            ['choice_text' => 'Une partie de l\'infrarouge', 'is_correct' => false],
                        ],
                        'explanation' => 'Les photons des rayons X possèdent une fréquence et une énergie supérieures à celles de la lumière visible.',
                    ],
                    [
                        'question' => 'Pourquoi les astronomes observent-ils parfois un même objet dans plusieurs domaines du spectre électromagnétique ?',
                        'choices' => [
                            ['choice_text' => 'Différentes longueurs d\'onde révèlent différents phénomènes physiques', 'is_correct' => true],
                            ['choice_text' => 'Toutes les longueurs d\'onde montrent exactement les mêmes informations', 'is_correct' => false],
                            ['choice_text' => 'La lumière visible est toujours inutilisable', 'is_correct' => false],
                            ['choice_text' => 'Les différentes bandes n\'ont aucune relation physique', 'is_correct' => false],
                        ],
                        'explanation' => 'Chaque domaine spectral peut révéler des températures, structures ou processus différents.',
                    ],
                    [
                        'question' => 'Que peut apprendre un astronome à partir des raies spectrales d\'un objet céleste ?',
                        'choices' => [
                            ['choice_text' => 'Sa composition et, selon le cas, des informations sur sa température et son mouvement', 'is_correct' => true],
                            ['choice_text' => 'Uniquement sa distance exacte sans aucune autre mesure', 'is_correct' => false],
                            ['choice_text' => 'Uniquement son nombre total de planètes', 'is_correct' => false],
                            ['choice_text' => 'La position de chaque atome de l\'Univers', 'is_correct' => false],
                        ],
                        'explanation' => 'Les spectres sont riches en informations sur la composition et les conditions physiques des sources.',
                    ],
                ],
            ],

            [
                'title' => 'Trous noirs et objets compacts',
                'description' => 'Introduire les trous noirs, les étoiles à neutrons et quelques objets astrophysiques compacts.',
                'questions' => [
                    [
                        'question' => 'Qu\'est-ce qu\'un trou noir ?',
                        'choices' => [
                            ['choice_text' => 'Une région de l\'espace-temps dont le champ gravitationnel est si intense qu\'au-delà de l\'horizon des événements, rien ne peut s\'en échapper, pas même la lumière', 'is_correct' => true],
                            ['choice_text' => 'Une planète totalement noire', 'is_correct' => false],
                            ['choice_text' => 'Une étoile sans gravité', 'is_correct' => false],
                            ['choice_text' => 'Une région vide de tout espace-temps', 'is_correct' => false],
                        ],
                        'explanation' => 'Un trou noir possède une région délimitée par un horizon des événements au-delà duquel les trajectoires dirigées vers l\'extérieur ne permettent pas de s\'échapper.',
                    ],
                    [
                        'question' => 'Comment appelle-t-on la limite autour d\'un trou noir au-delà de laquelle aucun signal ne peut revenir vers un observateur extérieur ?',
                        'choices' => [
                            ['choice_text' => 'L\'horizon des événements', 'is_correct' => true],
                            ['choice_text' => 'La photosphère', 'is_correct' => false],
                            ['choice_text' => 'La magnétosphère terrestre', 'is_correct' => false],
                            ['choice_text' => 'La ceinture de Kuiper', 'is_correct' => false],
                        ],
                        'explanation' => 'L\'horizon des événements est la frontière causale d\'un trou noir.',
                    ],
                    [
                        'question' => 'Un trou noir émet-il nécessairement sa propre lumière visible comme une étoile ordinaire ?',
                        'choices' => [
                            ['choice_text' => 'Non, sa présence peut notamment être révélée par les effets qu\'il exerce sur son environnement', 'is_correct' => true],
                            ['choice_text' => 'Oui, il est toujours visible à l\'œil nu', 'is_correct' => false],
                            ['choice_text' => 'Oui, il est nécessairement plus brillant que le Soleil', 'is_correct' => false],
                            ['choice_text' => 'Non, parce qu\'il ne possède aucune gravité', 'is_correct' => false],
                        ],
                        'explanation' => 'Un trou noir lui-même n\'émet pas de lumière qui puisse s\'échapper de l\'intérieur de l\'horizon, mais la matière autour peut émettre fortement.',
                    ],
                    [
                        'question' => 'Quel phénomène peut produire un rayonnement intense autour d\'un trou noir ?',
                        'choices' => [
                            ['choice_text' => 'L\'accrétion de matière chauffée dans un disque autour du trou noir', 'is_correct' => true],
                            ['choice_text' => 'La réflexion de la lumière depuis l\'intérieur de l\'horizon', 'is_correct' => false],
                            ['choice_text' => 'La solidification du trou noir', 'is_correct' => false],
                            ['choice_text' => 'La disparition de la gravité', 'is_correct' => false],
                        ],
                        'explanation' => 'La matière attirée vers un trou noir peut former un disque d\'accrétion très chaud et très lumineux.',
                    ],
                    [
                        'question' => 'Qu\'est-ce qu\'une étoile à neutrons ?',
                        'choices' => [
                            ['choice_text' => 'Le reste extrêmement dense du cœur d\'une étoile massive après certaines supernovas', 'is_correct' => true],
                            ['choice_text' => 'Une planète entièrement composée d\'eau', 'is_correct' => false],
                            ['choice_text' => 'Une étoile ordinaire sans électrons dans tout son volume', 'is_correct' => false],
                            ['choice_text' => 'Un trou noir qui ne possède pas d\'horizon', 'is_correct' => false],
                        ],
                        'explanation' => 'Une étoile à neutrons est un objet compact formé principalement de matière nucléaire extrêmement dense.',
                    ],
                    [
                        'question' => 'Qu\'est-ce qu\'un pulsar ?',
                        'choices' => [
                            ['choice_text' => 'Une étoile à neutrons en rotation qui émet des faisceaux de rayonnement détectables périodiquement', 'is_correct' => true],
                            ['choice_text' => 'Une planète qui tourne autour d\'un trou noir', 'is_correct' => false],
                            ['choice_text' => 'Une galaxie elliptique', 'is_correct' => false],
                            ['choice_text' => 'Une comète très brillante', 'is_correct' => false],
                        ],
                        'explanation' => 'Les pulsars sont des étoiles à neutrons fortement magnétisées et en rotation, dont le rayonnement peut être détecté sous forme d\'impulsions régulières.',
                    ],
                    [
                        'question' => 'Pourquoi les étoiles à neutrons sont-elles extrêmement compactes ?',
                        'choices' => [
                            ['choice_text' => 'Leur gravité comprime fortement la matière après l\'effondrement stellaire', 'is_correct' => true],
                            ['choice_text' => 'Parce qu\'elles ne contiennent aucune matière', 'is_correct' => false],
                            ['choice_text' => 'Parce qu\'elles sont faites uniquement de lumière', 'is_correct' => false],
                            ['choice_text' => 'Parce que la gravité y est nulle', 'is_correct' => false],
                        ],
                        'explanation' => 'L\'effondrement gravitationnel d\'une étoile massive peut comprimer la matière à des densités extraordinaires.',
                    ],
                    [
                        'question' => 'Peut-on détecter un trou noir grâce au mouvement d\'une étoile qui l\'orbite ?',
                        'choices' => [
                            ['choice_text' => 'Oui', 'is_correct' => true],
                            ['choice_text' => 'Non, les trous noirs n\'exercent aucune gravité', 'is_correct' => false],
                            ['choice_text' => 'Seulement si le trou noir émet une lumière visible forte', 'is_correct' => false],
                            ['choice_text' => 'Non, aucune interaction gravitationnelle n\'est observable', 'is_correct' => false],
                        ],
                        'explanation' => 'Le mouvement des objets environnants peut révéler la présence d\'une masse invisible.',
                    ],
                    [
                        'question' => 'Un trou noir peut-il être formé par l\'effondrement gravitationnel du cœur d\'une étoile massive ?',
                        'choices' => [
                            ['choice_text' => 'Oui, dans certaines conditions', 'is_correct' => true],
                            ['choice_text' => 'Non, seuls les astéroïdes peuvent former des trous noirs', 'is_correct' => false],
                            ['choice_text' => 'Oui, mais uniquement à partir d\'une planète rocheuse', 'is_correct' => false],
                            ['choice_text' => 'Non, les étoiles ne subissent jamais d\'effondrement', 'is_correct' => false],
                        ],
                        'explanation' => 'L\'effondrement gravitationnel de certaines étoiles massives peut donner naissance à un trou noir.',
                    ],
                    [
                        'question' => 'Quelle propriété distingue fortement une étoile à neutrons d\'une étoile ordinaire comme le Soleil ?',
                        'choices' => [
                            ['choice_text' => 'Sa densité est extraordinairement élevée et son rayon est beaucoup plus petit', 'is_correct' => true],
                            ['choice_text' => 'Elle ne possède aucune gravité', 'is_correct' => false],
                            ['choice_text' => 'Elle est toujours plus grande que toutes les étoiles', 'is_correct' => false],
                            ['choice_text' => 'Elle est principalement constituée de gaz froid', 'is_correct' => false],
                        ],
                        'explanation' => 'Une étoile à neutrons concentre une masse comparable à celle d\'une étoile dans un volume de quelques dizaines de kilomètres seulement.',
                    ],
                ],
            ],

            [
                'title' => 'Cosmologie et expansion de l\'Univers',
                'description' => 'Découvrir les notions élémentaires d\'expansion cosmique, de Big Bang et d\'évolution de l\'Univers.',
                'questions' => [
                    [
                        'question' => 'Que signifie l\'expression expansion de l\'Univers ?',
                        'choices' => [
                            ['choice_text' => 'Les distances à grande échelle entre les galaxies non liées gravitationnellement augmentent avec le temps', 'is_correct' => true],
                            ['choice_text' => 'Toutes les galaxies grossissent physiquement au même rythme', 'is_correct' => false],
                            ['choice_text' => 'La Terre se dilate', 'is_correct' => false],
                            ['choice_text' => 'Les étoiles s\'éloignent toutes de leur propre centre', 'is_correct' => false],
                        ],
                        'explanation' => 'L\'expansion cosmique concerne l\'évolution de l\'espace à grande échelle et des distances entre galaxies suffisamment éloignées.',
                    ],
                    [
                        'question' => 'Quel modèle cosmologique décrit l\'Univers primordial comme extrêmement chaud et dense ?',
                        'choices' => [
                            ['choice_text' => 'Le modèle du Big Bang', 'is_correct' => true],
                            ['choice_text' => 'Le modèle de la Terre plate', 'is_correct' => false],
                            ['choice_text' => 'Le modèle géocentrique classique', 'is_correct' => false],
                            ['choice_text' => 'Le modèle d\'un Univers statique permanent', 'is_correct' => false],
                        ],
                        'explanation' => 'Le modèle du Big Bang décrit un Univers primordial très chaud et dense qui a évolué avec son expansion.',
                    ],
                    [
                        'question' => 'Quel rayonnement fossile fournit une preuve importante de l\'histoire thermique de l\'Univers primordial ?',
                        'choices' => [
                            ['choice_text' => 'Le fond diffus cosmologique', 'is_correct' => true],
                            ['choice_text' => 'La lumière artificielle des villes', 'is_correct' => false],
                            ['choice_text' => 'Le rayonnement sonore de la Terre', 'is_correct' => false],
                            ['choice_text' => 'Les ondes de l\'océan Atlantique', 'is_correct' => false],
                        ],
                        'explanation' => 'Le fond diffus cosmologique est un rayonnement électromagnétique provenant d\'une époque très ancienne de l\'Univers.',
                    ],
                    [
                        'question' => 'Quelle relation observationnelle relie approximativement la vitesse de récession d\'une galaxie à sa distance dans le modèle cosmologique simple ?',
                        'choices' => [
                            ['choice_text' => 'La loi de Hubble-Lemaître', 'is_correct' => true],
                            ['choice_text' => 'La loi d\'Ohm', 'is_correct' => false],
                            ['choice_text' => 'La loi de Pascal', 'is_correct' => false],
                            ['choice_text' => 'La loi de Hooke', 'is_correct' => false],
                        ],
                        'explanation' => 'La loi de Hubble-Lemaître établit, dans sa forme simple, une relation entre vitesse de récession et distance à grande échelle.',
                    ],
                    [
                        'question' => 'Que révèle généralement le redshift cosmologique d\'une galaxie lointaine ?',
                        'choices' => [
                            ['choice_text' => 'L\'expansion de l\'Univers affecte les longueurs d\'onde de sa lumière observée', 'is_correct' => true],
                            ['choice_text' => 'La galaxie est nécessairement en train de devenir une étoile', 'is_correct' => false],
                            ['choice_text' => 'La galaxie n\'a aucune gravité', 'is_correct' => false],
                            ['choice_text' => 'La galaxie est toujours plus chaude que toutes les autres', 'is_correct' => false],
                        ],
                        'explanation' => 'L\'expansion de l\'espace étire la lumière pendant son trajet cosmologique, produisant un décalage vers les grandes longueurs d\'onde.',
                    ],
                    [
                        'question' => 'L\'Univers observable est-il nécessairement identique à la totalité de l\'Univers ?',
                        'choices' => [
                            ['choice_text' => 'Non, l\'Univers observable est limité par la vitesse de la lumière et l\'âge cosmique', 'is_correct' => true],
                            ['choice_text' => 'Oui, nous observons nécessairement tout l\'Univers', 'is_correct' => false],
                            ['choice_text' => 'Oui, parce que les galaxies sont toutes visibles depuis la Terre', 'is_correct' => false],
                            ['choice_text' => 'Non, parce que l\'Univers n\'a aucune limite d\'observation', 'is_correct' => false],
                        ],
                        'explanation' => 'Nous ne pouvons observer que les régions dont la lumière ou les signaux ont eu le temps de nous parvenir.',
                    ],
                    [
                        'question' => 'Quels éléments légers ont été principalement produits durant la nucléosynthèse primordiale ?',
                        'choices' => [
                            ['choice_text' => 'Principalement l\'hydrogène et l\'hélium, avec de petites quantités de lithium', 'is_correct' => true],
                            ['choice_text' => 'Principalement le fer et l\'uranium', 'is_correct' => false],
                            ['choice_text' => 'Uniquement le carbone et l\'oxygène', 'is_correct' => false],
                            ['choice_text' => 'Uniquement les éléments plus lourds que le plomb', 'is_correct' => false],
                        ],
                        'explanation' => 'Les premiers instants de l\'Univers ont surtout produit de l\'hydrogène et de l\'hélium, avec des traces de quelques éléments légers.',
                    ],
                    [
                        'question' => 'Les étoiles ont-elles contribué à la formation d\'éléments plus lourds que ceux produits principalement dans l\'Univers primordial ?',
                        'choices' => [
                            ['choice_text' => 'Oui', 'is_correct' => true],
                            ['choice_text' => 'Non, tous les éléments existaient déjà en quantités actuelles', 'is_correct' => false],
                            ['choice_text' => 'Non, les étoiles ne contiennent aucun noyau', 'is_correct' => false],
                            ['choice_text' => 'Seulement les planètes produisent les éléments lourds', 'is_correct' => false],
                        ],
                        'explanation' => 'Les étoiles produisent de nombreux éléments par fusion et par différents processus nucléaires au cours de leur évolution.',
                    ],
                    [
                        'question' => 'Pourquoi le fond diffus cosmologique est-il observé principalement dans le domaine des micro-ondes aujourd\'hui ?',
                        'choices' => [
                            ['choice_text' => 'L\'expansion de l\'Univers a étiré ses longueurs d\'onde depuis l\'époque de son émission', 'is_correct' => true],
                            ['choice_text' => 'Parce que l\'Univers primordial n\'a jamais émis de lumière', 'is_correct' => false],
                            ['choice_text' => 'Parce que les photons sont devenus des électrons', 'is_correct' => false],
                            ['choice_text' => 'Parce que toutes les étoiles émettent uniquement des micro-ondes', 'is_correct' => false],
                        ],
                        'explanation' => 'Le rayonnement primordial a été fortement décalé vers les grandes longueurs d\'onde au cours de l\'expansion cosmique.',
                    ],
                    [
                        'question' => 'L\'expansion de l\'Univers signifie-t-elle que toutes les distances, y compris celles à l\'intérieur des atomes, augmentent de la même manière ?',
                        'choices' => [
                            ['choice_text' => 'Non, les systèmes liés localement ne suivent pas simplement l\'expansion cosmique', 'is_correct' => true],
                            ['choice_text' => 'Oui, tout augmente exactement au même rythme', 'is_correct' => false],
                            ['choice_text' => 'Oui, les atomes deviennent constamment plus grands', 'is_correct' => false],
                            ['choice_text' => 'Non, parce que l\'Univers ne s\'étend jamais', 'is_correct' => false],
                        ],
                        'explanation' => 'L\'expansion est une propriété à grande échelle ; les systèmes fortement liés par des forces locales ne sont pas simplement étirés avec elle.',
                    ],
                ],
            ],

            [
                'title' => 'Gravitation et mouvements célestes',
                'description' => 'Réviser les notions de gravitation, d\'orbites et de mouvements des corps célestes.',
                'questions' => [
                    [
                        'question' => 'Quelle loi décrit l\'attraction gravitationnelle entre deux masses dans le modèle newtonien ?',
                        'choices' => [
                            ['choice_text' => 'La loi de la gravitation universelle', 'is_correct' => true],
                            ['choice_text' => 'La loi de Coulomb uniquement', 'is_correct' => false],
                            ['choice_text' => 'La loi d\'Ohm', 'is_correct' => false],
                            ['choice_text' => 'La loi de Pascal', 'is_correct' => false],
                        ],
                        'explanation' => 'La loi de Newton décrit la force gravitationnelle entre deux masses.',
                    ],
                    [
                        'question' => 'Comment varie la force gravitationnelle entre deux masses lorsque leur distance augmente, toutes choses égales par ailleurs ?',
                        'choices' => [
                            ['choice_text' => 'Elle diminue selon l\'inverse du carré de la distance dans le modèle newtonien', 'is_correct' => true],
                            ['choice_text' => 'Elle augmente avec la distance', 'is_correct' => false],
                            ['choice_text' => 'Elle reste toujours constante', 'is_correct' => false],
                            ['choice_text' => 'Elle devient proportionnelle au carré de la distance', 'is_correct' => false],
                        ],
                        'explanation' => 'La force gravitationnelle suit F ∝ 1/r² pour deux masses ponctuelles.',
                    ],
                    [
                        'question' => 'Pourquoi une planète ne tombe-t-elle pas directement sur le Soleil ?',
                        'choices' => [
                            ['choice_text' => 'Sa vitesse tangentielle et la gravitation produisent une trajectoire orbitale', 'is_correct' => true],
                            ['choice_text' => 'Parce que la gravitation ne s\'applique pas aux planètes', 'is_correct' => false],
                            ['choice_text' => 'Parce que le Soleil repousse les planètes', 'is_correct' => false],
                            ['choice_text' => 'Parce que la planète est immobile', 'is_correct' => false],
                        ],
                        'explanation' => 'La planète est constamment attirée vers le Soleil mais possède aussi une vitesse latérale qui lui permet de rester en orbite.',
                    ],
                    [
                        'question' => 'Quelle loi de Kepler relie la période orbitale d\'une planète à sa distance moyenne au Soleil ?',
                        'choices' => [
                            ['choice_text' => 'La troisième loi de Kepler', 'is_correct' => true],
                            ['choice_text' => 'La première loi de Kepler', 'is_correct' => false],
                            ['choice_text' => 'La deuxième loi de Kepler', 'is_correct' => false],
                            ['choice_text' => 'La loi de Snell', 'is_correct' => false],
                        ],
                        'explanation' => 'La troisième loi de Kepler relie le carré de la période au cube du demi-grand axe de l\'orbite.',
                    ],
                    [
                        'question' => 'Selon la première loi de Kepler, les orbites planétaires sont :',
                        'choices' => [
                            ['choice_text' => 'Des ellipses dont le Soleil occupe l\'un des foyers', 'is_correct' => true],
                            ['choice_text' => 'Toujours des cercles parfaits', 'is_correct' => false],
                            ['choice_text' => 'Des lignes droites', 'is_correct' => false],
                            ['choice_text' => 'Des paraboles dans tous les cas', 'is_correct' => false],
                        ],
                        'explanation' => 'La première loi de Kepler décrit les orbites planétaires comme des ellipses avec le Soleil à l\'un des foyers.',
                    ],
                    [
                        'question' => 'Quelle loi de Kepler indique que le rayon vecteur balaie des aires égales en des temps égaux ?',
                        'choices' => [
                            ['choice_text' => 'La deuxième loi de Kepler', 'is_correct' => true],
                            ['choice_text' => 'La première loi', 'is_correct' => false],
                            ['choice_text' => 'La troisième loi', 'is_correct' => false],
                            ['choice_text' => 'La loi de Newton sur la chaleur', 'is_correct' => false],
                        ],
                        'explanation' => 'La deuxième loi de Kepler exprime la conservation de la vitesse aréolaire.',
                    ],
                    [
                        'question' => 'Un satellite en orbite autour de la Terre est-il soumis à la gravitation terrestre ?',
                        'choices' => [
                            ['choice_text' => 'Oui', 'is_correct' => true],
                            ['choice_text' => 'Non, la gravitation s\'arrête dans l\'espace', 'is_correct' => false],
                            ['choice_text' => 'Seulement s\'il touche l\'atmosphère', 'is_correct' => false],
                            ['choice_text' => 'Non, car il est en état d\'apesanteur', 'is_correct' => false],
                        ],
                        'explanation' => 'Un satellite en orbite est constamment soumis à la gravitation ; son mouvement orbital correspond à une chute libre permanente autour de la Terre.',
                    ],
                    [
                        'question' => 'Pourquoi les astronautes en orbite semblent-ils en apesanteur ?',
                        'choices' => [
                            ['choice_text' => 'Ils sont en chute libre permanente avec leur véhicule spatial', 'is_correct' => true],
                            ['choice_text' => 'Parce que la gravité terrestre est totalement absente', 'is_correct' => false],
                            ['choice_text' => 'Parce que leur masse devient nulle', 'is_correct' => false],
                            ['choice_text' => 'Parce que l\'espace ne contient aucune force', 'is_correct' => false],
                        ],
                        'explanation' => 'L\'astronaute et le véhicule sont en chute libre orbitale, ce qui produit la sensation d\'apesanteur.',
                    ],
                    [
                        'question' => 'La Lune exerce-t-elle une force gravitationnelle sur la Terre ?',
                        'choices' => [
                            ['choice_text' => 'Oui', 'is_correct' => true],
                            ['choice_text' => 'Non, seuls les objets lumineux ont une gravité', 'is_correct' => false],
                            ['choice_text' => 'Uniquement pendant les éclipses', 'is_correct' => false],
                            ['choice_text' => 'Non, car elle est beaucoup plus petite que la Terre', 'is_correct' => false],
                        ],
                        'explanation' => 'Toutes les masses s\'attirent gravitationnellement, et l\'interaction Terre-Lune contribue notamment aux marées.',
                    ],
                    [
                        'question' => 'Pourquoi les marées terrestres sont-elles fortement influencées par la Lune ?',
                        'choices' => [
                            ['choice_text' => 'La gravitation lunaire crée des différences de force sur différentes régions de la Terre', 'is_correct' => true],
                            ['choice_text' => 'La Lune produit directement des vagues par contact', 'is_correct' => false],
                            ['choice_text' => 'La température de la Lune chauffe les océans', 'is_correct' => false],
                            ['choice_text' => 'La lumière lunaire fait monter l\'eau', 'is_correct' => false],
                        ],
                        'explanation' => 'Les différences de force gravitationnelle exercées par la Lune sur la Terre produisent l\'effet de marée.',
                    ],
                ],
            ],

            [
                'title' => 'Évolution et observation des objets célestes',
                'description' => 'Réunir les notions fondamentales sur l\'évolution stellaire, les observations astronomiques et les phénomènes cosmiques.',
                'questions' => [
                    [
                        'question' => 'Quel facteur joue un rôle majeur dans le destin final d\'une étoile ?',
                        'choices' => [
                            ['choice_text' => 'Sa masse initiale', 'is_correct' => true],
                            ['choice_text' => 'La couleur du ciel sur Terre', 'is_correct' => false],
                            ['choice_text' => 'La distance entre la Terre et la Lune', 'is_correct' => false],
                            ['choice_text' => 'La taille du télescope utilisé pour l\'observer', 'is_correct' => false],
                        ],
                        'explanation' => 'La masse initiale influence fortement la durée de vie, les réactions nucléaires et le stade final d\'une étoile.',
                    ],
                    [
                        'question' => 'Quel est un destin possible d\'une étoile de faible ou moyenne masse après sa phase géante ?',
                        'choices' => [
                            ['choice_text' => 'Devenir une naine blanche', 'is_correct' => true],
                            ['choice_text' => 'Devenir nécessairement un trou noir', 'is_correct' => false],
                            ['choice_text' => 'Devenir immédiatement une galaxie', 'is_correct' => false],
                            ['choice_text' => 'Disparaître sans laisser aucun résidu', 'is_correct' => false],
                        ],
                        'explanation' => 'Les étoiles comme le Soleil terminent leur évolution en laissant un cœur compact appelé naine blanche après l\'éjection de leurs couches externes.',
                    ],
                    [
                        'question' => 'Quel événement violent peut marquer la fin de certaines étoiles très massives ?',
                        'choices' => [
                            ['choice_text' => 'Une supernova', 'is_correct' => true],
                            ['choice_text' => 'Une éclipse lunaire', 'is_correct' => false],
                            ['choice_text' => 'Une marée océanique', 'is_correct' => false],
                            ['choice_text' => 'Une averse météorologique', 'is_correct' => false],
                        ],
                        'explanation' => 'Certaines étoiles massives terminent leur évolution par des explosions de supernovae.',
                    ],
                    [
                        'question' => 'Pourquoi les astronomes ne peuvent-ils généralement pas toucher ou prélever directement des échantillons d\'étoiles lointaines ?',
                        'choices' => [
                            ['choice_text' => 'Elles sont extrêmement éloignées, donc les observations reposent surtout sur les signaux qu\'elles émettent', 'is_correct' => true],
                            ['choice_text' => 'Parce qu\'elles sont toutes invisibles', 'is_correct' => false],
                            ['choice_text' => 'Parce qu\'elles n\'ont aucune matière', 'is_correct' => false],
                            ['choice_text' => 'Parce qu\'elles n\'émettent aucun rayonnement', 'is_correct' => false],
                        ],
                        'explanation' => 'Les distances astronomiques rendent impossibles les missions directes vers la plupart des étoiles ; les astronomes analysent donc leur rayonnement et leurs effets gravitationnels.',
                    ],
                    [
                        'question' => 'Quel phénomène permet de mesurer la vitesse radiale d\'une étoile à partir de son spectre ?',
                        'choices' => [
                            ['choice_text' => 'L\'effet Doppler', 'is_correct' => true],
                            ['choice_text' => 'La capillarité', 'is_correct' => false],
                            ['choice_text' => 'La conduction thermique', 'is_correct' => false],
                            ['choice_text' => 'La radioactivité alpha uniquement', 'is_correct' => false],
                        ],
                        'explanation' => 'Le décalage des raies spectrales permet de déduire la composante de vitesse le long de la ligne de visée.',
                    ],
                    [
                        'question' => 'Comment détecte-t-on souvent une exoplanète par la méthode du transit ?',
                        'choices' => [
                            ['choice_text' => 'On mesure une faible diminution périodique de la luminosité de l\'étoile', 'is_correct' => true],
                            ['choice_text' => 'On mesure directement la température de la planète avec un thermomètre', 'is_correct' => false],
                            ['choice_text' => 'On entend le passage de la planète avec un microphone', 'is_correct' => false],
                            ['choice_text' => 'On observe toujours la planète à l\'œil nu', 'is_correct' => false],
                        ],
                        'explanation' => 'Lorsqu\'une planète passe devant son étoile depuis notre ligne de visée, elle peut bloquer une petite fraction de sa lumière.',
                    ],
                    [
                        'question' => 'Quelle méthode de détection des exoplanètes repose sur l\'influence gravitationnelle de la planète sur son étoile ?',
                        'choices' => [
                            ['choice_text' => 'La méthode des vitesses radiales', 'is_correct' => true],
                            ['choice_text' => 'La méthode acoustique', 'is_correct' => false],
                            ['choice_text' => 'La méthode de capillarité', 'is_correct' => false],
                            ['choice_text' => 'La méthode des marées terrestres uniquement', 'is_correct' => false],
                        ],
                        'explanation' => 'La planète fait légèrement osciller son étoile autour du centre de masse commun, ce qui peut être détecté par effet Doppler.',
                    ],
                    [
                        'question' => 'Pourquoi les éléments chimiques lourds présents dans les planètes ont-ils une origine astrophysique ?',
                        'choices' => [
                            ['choice_text' => 'Ils ont été produits par différents processus nucléaires dans les étoiles et les événements cosmiques', 'is_correct' => true],
                            ['choice_text' => 'Ils ont tous été créés sur Terre', 'is_correct' => false],
                            ['choice_text' => 'Ils proviennent uniquement des océans terrestres', 'is_correct' => false],
                            ['choice_text' => 'Ils sont apparus après la formation des planètes sans source physique', 'is_correct' => false],
                        ],
                        'explanation' => 'Les éléments lourds ont été produits par la nucléosynthèse stellaire et d\'autres événements astrophysiques avant d\'être incorporés dans les systèmes planétaires.',
                    ],
                    [
                        'question' => 'Pourquoi les astronomes utilisent-ils des simulations numériques ?',
                        'choices' => [
                            ['choice_text' => 'Pour modéliser des phénomènes complexes et comparer les prédictions aux observations', 'is_correct' => true],
                            ['choice_text' => 'Pour remplacer toutes les observations', 'is_correct' => false],
                            ['choice_text' => 'Pour modifier les lois de la physique', 'is_correct' => false],
                            ['choice_text' => 'Pour rendre les objets célestes artificiellement plus lumineux', 'is_correct' => false],
                        ],
                        'explanation' => 'Les simulations permettent d\'étudier l\'évolution de systèmes astrophysiques difficiles ou impossibles à reproduire directement en laboratoire.',
                    ],
                    [
                        'question' => 'Pourquoi l\'étude des objets lointains permet-elle aussi d\'étudier le passé de l\'Univers ?',
                        'choices' => [
                            ['choice_text' => 'Parce que la lumière met un temps fini pour nous parvenir', 'is_correct' => true],
                            ['choice_text' => 'Parce que les galaxies sont immobiles', 'is_correct' => false],
                            ['choice_text' => 'Parce que la gravité voyage instantanément', 'is_correct' => false],
                            ['choice_text' => 'Parce que les étoiles cessent de produire de la lumière', 'is_correct' => false],
                        ],
                        'explanation' => 'Observer une galaxie très éloignée revient à recevoir aujourd\'hui une lumière qui a voyagé pendant des millions ou des milliards d\'années.',
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