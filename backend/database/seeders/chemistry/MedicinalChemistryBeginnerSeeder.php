<?php

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class MedicinalChemistryBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'medicinal-chemistry')->firstOrFail();

        $quizSettings = [
            0 => ['duration' => 15, 'passing_score' => 50],
            1 => ['duration' => 15, 'passing_score' => 55],
            2 => ['duration' => 20, 'passing_score' => 60],
            3 => ['duration' => 20, 'passing_score' => 60],
            4 => ['duration' => 20, 'passing_score' => 60],
            5 => ['duration' => 20, 'passing_score' => 65],
            6 => ['duration' => 20, 'passing_score' => 65],
            7 => ['duration' => 20, 'passing_score' => 65],
            8 => ['duration' => 25, 'passing_score' => 70],
            9 => ['duration' => 25, 'passing_score' => 70],
        ];

        $quizzes = [
            [
                'title' => 'Introduction à la chimie médicinale',
                'description' => 'Découvrir le rôle de la chimie médicinale et comprendre les notions de principe actif, cible et relation structure-propriété.',
                'questions' => [
                    [
                        'question' => 'Quel est le rôle principal de la chimie médicinale ?',
                        'explanation' => 'La chimie médicinale cherche notamment à concevoir et améliorer des molécules capables d’avoir un effet biologique utile, en étudiant leur structure et leurs propriétés.',
                        'choices' => [
                            [
                                'choice_text' => 'Étudier uniquement les minéraux',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Concevoir et améliorer des molécules à activité biologique',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Mesurer seulement la température du corps',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Fabriquer uniquement des matériaux de construction',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Dans un médicament, qu’appelle-t-on généralement le principe actif ?',
                        'explanation' => 'Le principe actif est la substance responsable de l’effet pharmacologique recherché. Les autres composants servent notamment à la formulation ou à la conservation.',
                        'choices' => [
                            [
                                'choice_text' => 'Le récipient',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'La substance responsable de l’effet recherché',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'L’étiquette',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Le colorant uniquement',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la structure chimique d’un médicament est-elle importante ?',
                        'explanation' => 'La structure influence des propriétés comme la solubilité, la capacité à se lier à une cible biologique et la manière dont la molécule est transformée dans l’organisme.',
                        'choices' => [
                            [
                                'choice_text' => 'Elle n’a aucun lien avec les propriétés',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Elle détermine seulement la couleur',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Elle influence les propriétés et l’activité de la molécule',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Elle sert uniquement à calculer la masse',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Qu’appelle-t-on une cible biologique dans le contexte d’un médicament ?',
                        'explanation' => 'Une cible biologique peut être une protéine, une enzyme ou un autre élément cellulaire avec lequel le médicament interagit pour produire ou modifier une réponse biologique.',
                        'choices' => [
                            [
                                'choice_text' => 'Un récipient en verre',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Une protéine ou une autre structure biologique avec laquelle le médicament interagit',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Une balance de laboratoire',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Un solvant industriel',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Deux molécules très proches peuvent-elles avoir des activités différentes ?',
                        'explanation' => 'Oui. Une petite modification structurale peut changer la façon dont une molécule se fixe à une cible ou se répartit dans l’organisme.',
                        'choices' => [
                            [
                                'choice_text' => 'Non, jamais',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Oui, une petite modification peut changer leur comportement',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Seulement si leur masse est identique',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Seulement si elles ont la même couleur',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un chimiste médicinal compare-t-il plusieurs analogues d’une même molécule ?',
                        'explanation' => 'Comparer des analogues permet de voir quelles modifications améliorent ou diminuent l’activité, la solubilité, la stabilité ou d’autres propriétés importantes.',
                        'choices' => [
                            [
                                'choice_text' => 'Pour changer leur nom seulement',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Pour comprendre l’effet des modifications de structure',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Pour éviter toute mesure expérimentale',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Pour rendre les molécules toutes identiques',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quel énoncé décrit correctement une relation structure-activité ?',
                        'explanation' => 'La relation structure-activité relie les changements de structure chimique aux changements observés dans l’activité biologique.',
                        'choices' => [
                            [
                                'choice_text' => 'La relation entre couleur et température',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Le lien entre structure chimique et activité biologique',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Le lien entre masse du flacon et pression',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'La relation entre volume et couleur',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Un composé produit un effet biologique intéressant mais se dégrade très vite. Quel aspect faut-il probablement améliorer ?',
                        'explanation' => 'Une bonne activité ne suffit pas. La stabilité chimique ou métabolique fait aussi partie des propriétés à prendre en compte lors de l’optimisation d’un candidat.',
                        'choices' => [
                            [
                                'choice_text' => 'Sa stabilité',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Uniquement son étiquette',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'La forme du laboratoire',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Le nom du composé',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la chimie médicinale travaille-t-elle souvent avec des séries de molécules proches ?',
                        'explanation' => 'Une série de composés proches permet de tester méthodiquement l’effet de petites modifications et de repérer les tendances utiles pour l’optimisation.',
                        'choices' => [
                            [
                                'choice_text' => 'Parce qu’une seule molécule ne peut jamais être étudiée',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Parce que les petites variations structurales donnent des informations comparables',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Parce que toutes les molécules doivent avoir la même formule',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Parce que les séries évitent les analyses',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quel objectif est compatible avec une démarche de chimie médicinale ?',
                        'explanation' => 'L’optimisation cherche un équilibre entre activité, sélectivité, stabilité et propriétés physicochimiques adaptées à l’usage prévu.',
                        'choices' => [
                            [
                                'choice_text' => 'Obtenir la molécule la plus colorée possible',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Améliorer plusieurs propriétés importantes en même temps',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Supprimer toute différence entre composés',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Éviter de caractériser les molécules',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Groupes fonctionnels des molécules médicinales',
                'description' => 'Reconnaître quelques groupes fonctionnels fréquents et relier leur présence à des propriétés simples.',
                'questions' => [
                    [
                        'question' => 'Quel groupe fonctionnel caractérise un alcool ?',
                        'explanation' => 'Un alcool possède un groupe hydroxyle –OH lié à un carbone saturé.',
                        'choices' => [
                            [
                                'choice_text' => '–COOH',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '–OH',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => '–NH₂',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '–CHO',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quel groupe fonctionnel est présent dans un acide carboxylique ?',
                        'explanation' => 'Un acide carboxylique contient le groupe –COOH, qui combine un carbonyle et un hydroxyle.',
                        'choices' => [
                            [
                                'choice_text' => '–COOH',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => '–OH seul',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '–NH₂',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '–O–O–',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quelle fonction contient un groupe carbonyle C=O situé au milieu d’une chaîne carbonée ?',
                        'explanation' => 'Dans une cétone, le groupe carbonyle est lié à deux carbones. Dans un aldéhyde, il est en bout de chaîne et porte un hydrogène.',
                        'choices' => [
                            [
                                'choice_text' => 'Cétone',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Amine',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Alcool',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Éther',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quel groupe caractérise une amine primaire simple comme R–NH₂ ?',
                        'explanation' => 'Une amine primaire de formule simplifiée R–NH₂ contient un atome d’azote lié à un groupe carboné et à deux hydrogènes.',
                        'choices' => [
                            [
                                'choice_text' => '–COOH',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '–NH₂',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => '–CHO',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '–O–',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Dans un éther de type R–O–R’, quel atome relie les deux groupes carbonés ?',
                        'explanation' => 'L’oxygène est l’atome central de la fonction éther, reliant deux groupes carbonés.',
                        'choices' => [
                            [
                                'choice_text' => 'Azote',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Soufre',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Oxygène',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Phosphore',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la présence d’un groupe hydroxyle peut-elle augmenter l’affinité d’une molécule pour l’eau ?',
                        'explanation' => 'Le groupe –OH est polaire et peut participer à des liaisons hydrogène avec l’eau, ce qui peut améliorer la solubilité dans certains cas.',
                        'choices' => [
                            [
                                'choice_text' => 'Parce que –OH est totalement apolaire',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Parce qu’il peut interagir avec l’eau par polarité et liaisons hydrogène',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Parce qu’il transforme la molécule en métal',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Parce qu’il supprime toute liaison chimique',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Une molécule contient un groupe amine basique. Que peut-il se passer en présence d’un acide ?',
                        'explanation' => 'Une amine peut accepter un proton et former une espèce chargée positivement.',
                        'choices' => [
                            [
                                'choice_text' => 'Elle perd forcément tous ses atomes de carbone',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Elle peut être protonée',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Elle devient automatiquement un alcool',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Elle devient un gaz noble',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quelle fonction possède le motif –CONH– ?',
                        'explanation' => 'Le motif –CONH– correspond à une fonction amide : un carbonyle directement lié à un atome d’azote.',
                        'choices' => [
                            [
                                'choice_text' => 'Amide',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Éther',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Alcool',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Aldéhyde',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les groupes fonctionnels sont-ils utiles pour comprendre une molécule médicinale ?',
                        'explanation' => 'Ils donnent des indices sur la réactivité, la polarité, les possibilités de liaisons et parfois l’ionisation de la molécule.',
                        'choices' => [
                            [
                                'choice_text' => 'Ils indiquent uniquement sa couleur',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Ils aident à prévoir plusieurs de ses propriétés chimiques et physiques',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Ils remplacent toutes les expériences',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Ils indiquent seulement sa masse',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quelle modification ajoute directement une fonction alcool à une chaîne carbonée simple ?',
                        'explanation' => 'Ajouter un groupe hydroxyle –OH au carbone concerné permet d’introduire une fonction alcool, selon la structure finale obtenue.',
                        'choices' => [
                            [
                                'choice_text' => 'Ajouter –OH',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Ajouter seulement H₂',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Retirer tous les oxygènes',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Ajouter NaCl',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Solubilité, polarité et partage',
                'description' => 'Comprendre comment polarité, solubilité et caractère hydrophile ou lipophile influencent le comportement des molécules.',
                'questions' => [
                    [
                        'question' => 'Quelle molécule a généralement le plus de facilité à interagir avec l’eau ?',
                        'explanation' => 'Les molécules polaires peuvent établir des interactions favorables avec l’eau. Elles sont donc souvent plus hydrophiles.',
                        'choices' => [
                            [
                                'choice_text' => 'Une molécule très apolaire',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Une molécule polaire',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Une molécule sans aucun atome',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Une molécule métallique uniquement',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Que signifie simplement « hydrophile » ?',
                        'explanation' => 'Hydrophile signifie qui a une affinité pour l’eau, souvent grâce à des interactions polaires ou ioniques.',
                        'choices' => [
                            [
                                'choice_text' => 'Qui évite l’eau',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Qui a une affinité pour l’eau',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Qui réagit toujours violemment avec l’eau',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Qui est forcément solide',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Que signifie simplement « lipophile » ?',
                        'explanation' => 'Une substance lipophile présente une affinité plus importante pour les milieux riches en lipides ou peu polaires que pour l’eau.',
                        'choices' => [
                            [
                                'choice_text' => 'Qui aime exclusivement l’eau',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Qui a une affinité pour les milieux lipidiques ou peu polaires',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Qui est toujours chargée',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Qui ne peut pas se dissoudre',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Une molécule possède plusieurs groupes polaires mais une longue chaîne hydrocarbonée. Que peut-on attendre ?',
                        'explanation' => 'Les deux parties influencent le comportement. La chaîne hydrocarbonée augmente le caractère lipophile alors que les groupes polaires favorisent les interactions avec l’eau.',
                        'choices' => [
                            [
                                'choice_text' => 'Le comportement dépend uniquement de la chaîne',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Les différentes parties de la structure contribuent toutes à ses propriétés',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'La molécule devient automatiquement un sel',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Elle ne peut plus interagir avec aucun solvant',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi deux médicaments peuvent-ils avoir des solubilités très différentes dans l’eau ?',
                        'explanation' => 'Le nombre et la nature des groupes polaires, la charge, la structure et l’organisation du solide peuvent modifier fortement la solubilité.',
                        'choices' => [
                            [
                                'choice_text' => 'Parce que toutes les molécules ont la même polarité',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Parce que leur structure et leur état d’ionisation peuvent différer',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Uniquement à cause de leur nom',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Uniquement à cause du volume du flacon',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Une substance se dissout mieux après formation d’un sel ionique. Quelle explication est plausible ?',
                        'explanation' => 'La forme ionisée peut avoir des interactions plus fortes avec l’eau et peut donc être plus soluble que la forme neutre.',
                        'choices' => [
                            [
                                'choice_text' => 'La charge peut augmenter les interactions avec l’eau',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'La molécule perd toute sa masse',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Le sel empêche toute interaction avec l’eau',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'La température devient forcément nulle',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quel type d’interaction aide souvent une molécule polaire à rester dans l’eau ?',
                        'explanation' => 'Les liaisons hydrogène et les interactions dipôle-dipôle peuvent stabiliser une molécule polaire dans un milieu aqueux.',
                        'choices' => [
                            [
                                'choice_text' => 'Uniquement des interactions avec les métaux',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Des interactions polaires et parfois des liaisons hydrogène',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Aucune interaction',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Seulement des forces magnétiques fortes',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Dans une expérience de partage entre eau et huile, une molécule lipophile aura tendance à…',
                        'explanation' => 'Une molécule lipophile préfère généralement le milieu organique peu polaire par rapport à l’eau, même si le partage exact dépend de sa structure.',
                        'choices' => [
                            [
                                'choice_text' => 'Rester exclusivement dans l’eau',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Se répartir davantage vers la phase organique',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Disparaître',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Se transformer automatiquement en sel',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la solubilité est-elle importante lors de la mise au point d’un médicament ?',
                        'explanation' => 'Une solubilité adaptée facilite notamment la formulation et, selon la voie d’administration, peut influencer la disponibilité de la substance.',
                        'choices' => [
                            [
                                'choice_text' => 'Parce qu’un médicament doit toujours être coloré',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Parce qu’elle influence la formulation et le comportement dans les milieux biologiques',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Parce qu’elle remplace l’activité biologique',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Parce qu’elle détermine seule la toxicité',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Une molécule devient ionisée à un pH donné. Que peut-il arriver à sa solubilité dans l’eau ?',
                        'explanation' => 'La forme ionisée est souvent plus hydrophile que la forme neutre. La solubilité aqueuse peut donc augmenter, selon la molécule.',
                        'choices' => [
                            [
                                'choice_text' => 'Elle peut augmenter',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Elle devient forcément nulle',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Elle ne peut jamais changer',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Elle devient automatiquement insoluble dans tous les solvants',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'pKa, ionisation et pH',
                'description' => 'Introduire le lien entre pH, pKa et forme ionisée des molécules médicinales.',
                'questions' => [
                    [
                        'question' => 'Que représente le pKa d’un acide faible ?',
                        'explanation' => 'Le pKa caractérise la tendance d’un acide à céder un proton. Plus le pKa est faible, plus l’acide est facilement dissocié, toutes choses égales par ailleurs.',
                        'choices' => [
                            [
                                'choice_text' => 'Sa masse molaire',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Un indicateur de sa tendance à céder un proton',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Sa température d’ébullition',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Son volume',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Pour un acide faible, que se passe-t-il approximativement lorsque pH = pKa ?',
                        'explanation' => 'À pH égal au pKa, les formes acide et basique conjuguée sont présentes en proportions comparables dans le modèle de Henderson-Hasselbalch.',
                        'choices' => [
                            [
                                'choice_text' => 'La forme ionisée est toujours absente',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Les deux formes sont présentes en proportions comparables',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'La molécule est forcément détruite',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'La solution devient automatiquement neutre',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Si le pH est inférieur au pKa d’un acide faible, quelle forme est généralement davantage présente ?',
                        'explanation' => 'Pour un acide HA, un pH inférieur au pKa favorise la forme protonée HA par rapport à A⁻.',
                        'choices' => [
                            [
                                'choice_text' => 'La forme protonée',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'La forme totalement déprotonée uniquement',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Une forme métallique',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Aucune espèce',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Si le pH augmente au-dessus du pKa d’un acide faible, que devient généralement la fraction ionisée ?',
                        'explanation' => 'Lorsque le pH devient supérieur au pKa, la déprotonation de l’acide augmente et la fraction sous forme A⁻ devient plus importante.',
                        'choices' => [
                            [
                                'choice_text' => 'Elle diminue toujours',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Elle augmente',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Elle devient forcément nulle',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Elle ne peut pas évoluer',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi l’ionisation peut-elle modifier la solubilité d’un médicament ?',
                        'explanation' => 'La charge électrique augmente souvent les interactions avec l’eau et peut rendre la forme ionisée plus soluble que la forme neutre.',
                        'choices' => [
                            [
                                'choice_text' => 'Parce que la charge peut améliorer les interactions avec l’eau',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Parce que la charge supprime la molécule',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Parce que l’ionisation change toujours la masse atomique',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Parce qu’une molécule ionisée ne peut plus se dissoudre',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Un médicament contient une fonction amine basique. Dans un milieu plus acide, elle a tendance à…',
                        'explanation' => 'Une amine basique accepte plus facilement un proton lorsque le milieu devient acide, ce qui favorise sa forme protonée et chargée.',
                        'choices' => [
                            [
                                'choice_text' => 'Perdre un proton',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Gagner un proton',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Perdre tous ses atomes d’azote',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Devenir un acide carboxylique',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quelle équation simple relie pH, pKa et rapport base/acide pour un couple acide-base ?',
                        'explanation' => 'L’équation de Henderson-Hasselbalch relie pH et pKa au logarithme du rapport entre les formes basique et acide.',
                        'choices' => [
                            [
                                'choice_text' => 'pH = pKa + log([base]/[acide])',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'pH = masse × volume',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'pH = température + masse',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'pH = [acide] + [base]',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Pour un acide faible avec pH = pKa + 1, quel rapport [A⁻]/[HA] obtient-on approximativement ?',
                        'explanation' => 'Avec Henderson-Hasselbalch : 1 = log([A⁻]/[HA]), donc [A⁻]/[HA] ≈ 10.',
                        'choices' => [
                            [
                                'choice_text' => '1/10',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '1',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '10',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => '1000',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'À quoi sert le calcul du pKa en chimie médicinale ?',
                        'explanation' => 'Il aide à prévoir l’état d’ionisation d’une molécule selon le pH, ce qui peut influencer solubilité, distribution et interactions avec des cibles.',
                        'choices' => [
                            [
                                'choice_text' => 'À connaître uniquement sa couleur',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'À prévoir son état d’ionisation dans différents milieux',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'À remplacer toutes les mesures de laboratoire',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'À calculer directement sa masse molaire',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Une molécule est neutre à un certain pH puis devient chargée lorsque le pH change. Comment expliquer ce phénomène ?',
                        'explanation' => 'Le changement de pH modifie l’équilibre acide-base de la molécule et donc la proportion de ses formes protonées et déprotonées.',
                        'choices' => [
                            [
                                'choice_text' => 'Le pH modifie l’équilibre de protonation',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'La molécule devient un élément différent',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'La formule brute est toujours détruite',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Le pH ne peut pas influencer une molécule',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Absorption et distribution des médicaments',
                'description' => 'Comprendre simplement comment les propriétés chimiques d’une molécule influencent son passage dans les milieux biologiques.',
                'questions' => [
                    [
                        'question' => 'Pourquoi une molécule très polaire traverse-t-elle parfois moins facilement une membrane lipidique ?',
                        'explanation' => 'Les membranes cellulaires possèdent une partie lipidique. Une molécule très polaire peut avoir plus de difficulté à passer dans cette région hydrophobe.',
                        'choices' => [
                            [
                                'choice_text' => 'Parce que la membrane est principalement constituée de métal',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Parce que la partie lipidique de la membrane est peu favorable aux molécules très polaires',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Parce que l’eau bloque toutes les molécules',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Parce qu’elle est toujours trop lourde',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quel type de molécule traverse généralement plus facilement une bicouche lipidique par diffusion passive ?',
                        'explanation' => 'Une petite molécule relativement lipophile et non fortement chargée traverse souvent plus facilement la phase lipidique qu’une grosse molécule très polaire.',
                        'choices' => [
                            [
                                'choice_text' => 'Une petite molécule assez lipophile et neutre',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Une grosse molécule toujours très chargée',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Un ion métallique libre',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Une protéine entière',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la charge électrique d’un médicament peut-elle influencer sa distribution ?',
                        'explanation' => 'La charge modifie l’affinité pour les milieux aqueux et lipidiques et peut donc affecter le passage des membranes et la répartition dans l’organisme.',
                        'choices' => [
                            [
                                'choice_text' => 'La charge n’a aucun effet',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Elle peut modifier les interactions avec les membranes et les milieux aqueux',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Elle change seulement le nom du médicament',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Elle empêche toute dissolution',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Que signifie simplement « diffusion passive » ?',
                        'explanation' => 'La diffusion passive correspond à un déplacement spontané selon un gradient de concentration, sans consommation directe d’énergie cellulaire.',
                        'choices' => [
                            [
                                'choice_text' => 'Un transport qui exige toujours de l’ATP',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Un déplacement selon un gradient sans apport direct d’énergie cellulaire',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Une réaction nucléaire',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Une réaction qui ne dépend jamais de la concentration',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la solubilité dans l’eau seule ne suffit-elle pas à prévoir le passage d’une membrane ?',
                        'explanation' => 'Une bonne solubilité aqueuse peut être utile, mais le passage membranaire dépend aussi de la lipophilie, de la taille, de la charge et d’autres facteurs.',
                        'choices' => [
                            [
                                'choice_text' => 'Parce qu’il faut aussi considérer la phase lipidique et l’état d’ionisation',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Parce que l’eau n’existe pas dans l’organisme',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Parce que seule la masse compte',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Parce que les membranes sont faites uniquement de sucre',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Une molécule devient davantage ionisée dans un milieu donné. Quel effet est souvent observé sur sa capacité à traverser une membrane lipidique par diffusion passive ?',
                        'explanation' => 'La forme chargée est généralement moins à l’aise dans un environnement lipidique que la forme neutre, ce qui peut réduire la diffusion passive.',
                        'choices' => [
                            [
                                'choice_text' => 'Elle traverse toujours beaucoup plus facilement',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'La diffusion passive peut diminuer',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Elle devient automatiquement un gaz',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Elle ne peut plus se dissoudre dans l’eau',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi les chimistes médicinaux s’intéressent-ils à la masse moléculaire ?',
                        'explanation' => 'La taille d’une molécule influence notamment sa diffusion, sa solubilité et sa capacité à atteindre certains compartiments biologiques.',
                        'choices' => [
                            [
                                'choice_text' => 'Elle n’a aucune importance',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Elle peut influencer plusieurs propriétés biologiques et physicochimiques',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Elle détermine seulement la couleur',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Elle remplace le pKa',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Une molécule est très lipophile et presque insoluble dans l’eau. Quel problème peut-elle rencontrer ?',
                        'explanation' => 'Une lipophilie excessive peut s’accompagner d’une faible solubilité aqueuse, ce qui peut compliquer la formulation et certains aspects de l’absorption.',
                        'choices' => [
                            [
                                'choice_text' => 'Elle peut avoir des difficultés à rester en solution aqueuse',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Elle devient forcément très soluble',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Elle devient un ion métallique',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Elle ne peut plus interagir avec les lipides',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi parle-t-on souvent d’un équilibre entre hydrophilie et lipophilie ?',
                        'explanation' => 'Une molécule destinée à agir dans l’organisme doit souvent être suffisamment compatible avec les milieux aqueux tout en pouvant atteindre des environnements plus lipidiques.',
                        'choices' => [
                            [
                                'choice_text' => 'Parce qu’aucun médicament ne doit être soluble',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Parce que différents milieux biologiques imposent des propriétés parfois opposées',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Parce que toutes les membranes sont identiques à l’eau',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Parce que le pKa n’existe pas',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quel facteur peut modifier le passage d’un médicament à travers une membrane sans changer sa formule brute ?',
                        'explanation' => 'La forme d’ionisation peut changer avec le pH sans modifier la formule brute de la molécule, et cette forme influence son passage membranaire.',
                        'choices' => [
                            [
                                'choice_text' => 'Le pH du milieu',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'La couleur du récipient',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Le nom commercial',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'La taille de l’étiquette',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Métabolisme et biotransformation',
                'description' => 'Comprendre les grandes idées de biotransformation, d’oxydation, de conjugaison et de transformation des médicaments.',
                'questions' => [
                    [
                        'question' => 'Pourquoi l’organisme transforme-t-il de nombreux médicaments ?',
                        'explanation' => 'Le métabolisme peut modifier les molécules pour faciliter leur élimination, même si la transformation peut aussi modifier leur activité.',
                        'choices' => [
                            [
                                'choice_text' => 'Pour les rendre forcément plus actifs',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Souvent pour faciliter leur transformation et leur élimination',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Pour augmenter systématiquement leur masse',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Pour empêcher toute réaction chimique',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quel organe joue un rôle majeur dans le métabolisme de nombreux médicaments ?',
                        'explanation' => 'Le foie contient de nombreuses enzymes impliquées dans la biotransformation des substances étrangères à l’organisme.',
                        'choices' => [
                            [
                                'choice_text' => 'Le foie',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Les os uniquement',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Les cheveux',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Les dents uniquement',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Que signifie « biotransformation » dans ce contexte ?',
                        'explanation' => 'Il s’agit de transformations chimiques enzymatiques ou métaboliques qui modifient la structure d’une substance dans l’organisme.',
                        'choices' => [
                            [
                                'choice_text' => 'Une transformation chimique d’une substance dans l’organisme',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Une simple dilution dans l’eau',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Une mesure de température',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Une fabrication industrielle sans réaction',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Une réaction métabolique ajoute un groupe polaire à une molécule. Quel effet peut être attendu ?',
                        'explanation' => 'L’ajout d’un groupe polaire peut augmenter l’affinité pour l’eau et parfois faciliter l’élimination, selon la structure formée.',
                        'choices' => [
                            [
                                'choice_text' => 'Une augmentation possible de l’hydrophilie',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Une disparition automatique de la molécule',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Une transformation en métal',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Une suppression de tous les oxygènes',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quelle famille d’enzymes est souvent associée aux réactions d’oxydation des médicaments ?',
                        'explanation' => 'Les cytochromes P450 constituent une grande famille d’enzymes impliquées dans de nombreuses réactions de phase I.',
                        'choices' => [
                            [
                                'choice_text' => 'Les cytochromes P450',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Les enzymes de la photosynthèse végétale uniquement',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Les amylases seulement',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Les collagènes',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une molécule peut-elle devenir moins active après métabolisme ?',
                        'explanation' => 'La transformation peut modifier les groupes chimiques nécessaires à l’interaction avec la cible, ce qui peut diminuer son activité.',
                        'choices' => [
                            [
                                'choice_text' => 'Parce que le métabolisme détruit toujours les atomes',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Parce que la structure peut être modifiée de façon à réduire son interaction avec la cible',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Parce qu’elle devient forcément plus colorée',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Parce que toutes les enzymes sont des bases',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Un métabolite est-il forcément inactif ?',
                        'explanation' => 'Non. Certains métabolites sont inactifs, certains gardent une activité et d’autres peuvent même être plus actifs ou présenter un profil différent.',
                        'choices' => [
                            [
                                'choice_text' => 'Oui, toujours',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Non, son activité peut différer de celle du composé initial',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Oui, s’il contient de l’oxygène',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Seulement pour les acides',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'À quoi servent souvent les réactions de conjugaison ?',
                        'explanation' => 'Les réactions de conjugaison fixent des groupes très polaires à une molécule, ce qui peut augmenter sa solubilité aqueuse et faciliter son élimination.',
                        'choices' => [
                            [
                                'choice_text' => 'À rendre toujours la molécule lipophile',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'À augmenter souvent sa polarité et faciliter son élimination',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'À supprimer toutes les fonctions chimiques',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'À bloquer définitivement le rein',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi connaître le métabolisme d’un candidat médicament est-il important ?',
                        'explanation' => 'Le métabolisme peut influencer la durée de présence dans l’organisme, l’activité, les interactions et la sécurité du composé.',
                        'choices' => [
                            [
                                'choice_text' => 'Parce qu’il n’a aucun rapport avec l’action du médicament',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Parce qu’il peut modifier activité, durée d’action et sécurité',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Parce qu’il donne seulement la couleur',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Parce qu’il permet de calculer le pH de l’eau pure',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quel énoncé décrit correctement une transformation de phase I au niveau débutant ?',
                        'explanation' => 'Les réactions de phase I comprennent notamment oxydation, réduction ou hydrolyse et peuvent introduire ou révéler une fonction chimique.',
                        'choices' => [
                            [
                                'choice_text' => 'Elle comprend notamment oxydation, réduction ou hydrolyse',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Elle consiste uniquement à ajouter du sucre',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Elle est toujours une conjugaison',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Elle ne modifie jamais la structure',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Structure et activité biologique',
                'description' => 'Relier des modifications simples de structure à l’activité, la sélectivité et les interactions avec une cible.',
                'questions' => [
                    [
                        'question' => 'Que signifie qu’un médicament est sélectif pour une cible ?',
                        'explanation' => 'La sélectivité signifie qu’il interagit préférentiellement avec une cible par rapport à d’autres, dans les conditions étudiées.',
                        'choices' => [
                            [
                                'choice_text' => 'Il agit uniquement sur toutes les protéines',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Il préfère interagir avec une cible plutôt qu’avec d’autres',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Il ne peut pas se dissoudre',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Il est toujours sans effet biologique',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la forme tridimensionnelle d’une molécule peut-elle être importante ?',
                        'explanation' => 'Une cible biologique possède une architecture tridimensionnelle. La complémentarité de forme et d’interactions influence donc la liaison.',
                        'choices' => [
                            [
                                'choice_text' => 'Elle n’a aucun rôle',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Elle peut conditionner la complémentarité avec la cible',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Elle détermine seulement le point de fusion',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Elle remplace la formule brute',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Deux molécules ont la même formule brute mais des arrangements différents. Que peuvent-elles être ?',
                        'explanation' => 'Des molécules de même formule brute mais de structure différente peuvent être des isomères, selon le type d’arrangement concerné.',
                        'choices' => [
                            [
                                'choice_text' => 'Toujours le même composé',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Des isomères',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Des éléments chimiques différents',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Des ions métalliques',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une modification qui augmente trop la taille d’une molécule peut-elle devenir défavorable ?',
                        'explanation' => 'Une molécule trop volumineuse peut moins bien s’adapter à la poche de liaison ou présenter de moins bonnes propriétés de solubilité et de diffusion.',
                        'choices' => [
                            [
                                'choice_text' => 'Parce que la taille n’influence jamais rien',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Parce qu’elle peut réduire l’ajustement à la cible ou certaines propriétés physicochimiques',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Parce qu’elle devient forcément radioactive',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Parce que l’atome de carbone disparaît',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quelle interaction est possible entre un groupe polaire du médicament et une fonction polaire de la cible ?',
                        'explanation' => 'Des liaisons hydrogène ou des interactions dipôle-dipôle peuvent contribuer à la reconnaissance moléculaire.',
                        'choices' => [
                            [
                                'choice_text' => 'Des liaisons hydrogène',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Uniquement des liaisons métalliques',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Aucune interaction',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Seulement une réaction nucléaire',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi remplacer un groupe fonctionnel par un autre peut-il changer l’activité ?',
                        'explanation' => 'Le remplacement peut modifier la forme, la polarité, la capacité à créer des liaisons et l’ionisation, donc la manière dont la molécule interagit avec la cible.',
                        'choices' => [
                            [
                                'choice_text' => 'Parce que toutes les fonctions ont exactement le même comportement',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Parce que les propriétés et les interactions avec la cible peuvent changer',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Parce que la masse atomique du carbone disparaît',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Parce que la cible devient toujours un solide',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Un analogue se fixe moins bien à la cible après une petite modification. Quelle conclusion prudente peut-on tirer ?',
                        'explanation' => 'La modification peut avoir perturbé une interaction importante ou la géométrie de liaison. Il faut cependant d’autres expériences pour identifier précisément la cause.',
                        'choices' => [
                            [
                                'choice_text' => 'La modification a probablement changé les interactions avec la cible',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'La cible a forcément disparu',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'La molécule est automatiquement toxique',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'La solubilité est forcément devenue nulle',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Qu’appelle-t-on généralement un site de liaison ?',
                        'explanation' => 'Le site de liaison est une région d’une cible biologique où une molécule peut interagir de manière spécifique ou préférentielle.',
                        'choices' => [
                            [
                                'choice_text' => 'Une partie de la molécule où elle se fixe à une cible',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Le récipient de réaction',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Le pH du laboratoire',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'La surface extérieure d’un comprimé uniquement',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un groupe hydrophobe peut-il être utile dans une molécule médicinale ?',
                        'explanation' => 'Certaines poches de liaison contiennent des régions hydrophobes. Un groupe hydrophobe peut donc contribuer à une interaction favorable dans ce type d’environnement.',
                        'choices' => [
                            [
                                'choice_text' => 'Parce que toutes les cibles sont hydrophobes',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Parce qu’il peut interagir favorablement avec une région hydrophobe de la cible',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Parce qu’il rend toujours la molécule soluble dans l’eau',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Parce qu’il ajoute une charge positive',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quel est l’objectif général d’une optimisation structurelle ?',
                        'explanation' => 'On cherche à améliorer l’ensemble des propriétés utiles plutôt qu’un seul paramètre, par exemple activité, sélectivité, solubilité et stabilité.',
                        'choices' => [
                            [
                                'choice_text' => 'Maximiser uniquement la masse moléculaire',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Trouver un compromis satisfaisant entre plusieurs propriétés importantes',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Supprimer toutes les fonctions polaires',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Éviter toute comparaison entre molécules',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Formulation, dose et stabilité',
                'description' => 'Comprendre quelques notions de formulation, concentration, stabilité et calculs simples liés aux médicaments.',
                'questions' => [
                    [
                        'question' => 'Pourquoi ajoute-t-on des excipients à une formulation pharmaceutique ?',
                        'explanation' => 'Les excipients peuvent améliorer la fabrication, la stabilité, la conservation ou les caractéristiques physiques du produit. Ils ne sont pas le principe actif recherché.',
                        'choices' => [
                            [
                                'choice_text' => 'Pour remplacer toujours le principe actif',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Pour aider à la fabrication, la stabilité ou la forme du médicament',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Pour rendre la molécule radioactive',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Pour supprimer toute activité',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Une solution contient 100 mg de substance dans 10 mL. Quelle est la concentration massique ?',
                        'explanation' => 'La concentration massique vaut m/V = 100 mg / 10 mL = 10 mg/mL.',
                        'choices' => [
                            [
                                'choice_text' => '1 mg/mL',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '5 mg/mL',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '10 mg/mL',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => '1000 mg/mL',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'On veut préparer 20 mL d’une solution à 5 mg/mL. Quelle masse faut-il utiliser ?',
                        'explanation' => 'On utilise m = C × V = 5 mg/mL × 20 mL = 100 mg.',
                        'choices' => [
                            [
                                'choice_text' => '25 mg',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '50 mg',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '100 mg',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => '200 mg',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Une formulation perd progressivement son principe actif pendant le stockage. Quelle propriété faut-il surveiller ?',
                        'explanation' => 'Une perte du principe actif peut signaler une instabilité chimique ou physique. La stabilité est donc un paramètre essentiel à surveiller.',
                        'choices' => [
                            [
                                'choice_text' => 'La stabilité',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'La couleur du laboratoire uniquement',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Le nom du fabricant',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'La forme du bouchon seulement',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la lumière peut-elle poser problème pour certains médicaments ?',
                        'explanation' => 'Certaines molécules sont photosensibles et peuvent subir des réactions induites par la lumière, ce qui diminue leur stabilité.',
                        'choices' => [
                            [
                                'choice_text' => 'La lumière transforme toujours les médicaments en eau',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Certains composés peuvent se dégrader sous l’effet de la lumière',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'La lumière supprime toutes les liaisons carbone',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'La lumière empêche toute réaction chimique',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Une solution est diluée de moitié. Que devient approximativement sa concentration ?',
                        'explanation' => 'Lorsque le volume est doublé avec le même nombre de moles de soluté, la concentration est divisée par deux.',
                        'choices' => [
                            [
                                'choice_text' => 'Elle double',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Elle est divisée par deux',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Elle devient nulle',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Elle est multipliée par quatre',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Pour une dilution, quelle relation simple est souvent utilisée entre concentration et volume ?',
                        'explanation' => 'Lorsque la quantité de soluté reste la même, on utilise la relation C₁V₁ = C₂V₂.',
                        'choices' => [
                            [
                                'choice_text' => 'C₁ + V₁ = C₂ + V₂',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'C₁V₁ = C₂V₂',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'C₁/V₁ = C₂/V₂ toujours',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'C₁ − C₂ = V₁ − V₂',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Une substance est stable à 20 °C mais se dégrade rapidement à 50 °C. Quelle information est importante ?',
                        'explanation' => 'La température influence la vitesse de nombreuses réactions de dégradation. Les conditions de stockage doivent donc être étudiées.',
                        'choices' => [
                            [
                                'choice_text' => 'La température n’a aucun effet',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'La stabilité dépend des conditions de température',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'La molécule est forcément un gaz',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Le pKa est obligatoirement nul',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la forme solide du principe actif peut-elle influencer sa mise en formulation ?',
                        'explanation' => 'La taille des particules, la forme cristalline et d’autres propriétés du solide peuvent modifier dissolution, stabilité et comportement lors de la fabrication.',
                        'choices' => [
                            [
                                'choice_text' => 'Parce que le solide ne contient jamais de molécules',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Parce que ses propriétés physiques peuvent influencer dissolution et stabilité',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Parce que tous les solides ont exactement les mêmes propriétés',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Parce que cela modifie forcément le nombre d’atomes',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Un laboratoire veut comparer deux formulations contenant la même quantité de principe actif. Que faut-il garder comparable pour interpréter le test ?',
                        'explanation' => 'Il faut contrôler les conditions expérimentales pertinentes, notamment composition, volume, température et protocole, afin d’attribuer les différences à la formulation étudiée.',
                        'choices' => [
                            [
                                'choice_text' => 'Uniquement le nom des formulations',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Les principales conditions expérimentales',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Seulement la couleur',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Uniquement la taille des flacons',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Sécurité, toxicité et sélectivité',
                'description' => 'Comprendre les bases de la sécurité des candidats médicaments et la différence entre activité et sélectivité.',
                'questions' => [
                    [
                        'question' => 'Pourquoi un composé très actif n’est-il pas automatiquement un bon candidat médicament ?',
                        'explanation' => 'Une molécule doit aussi présenter des propriétés acceptables de sécurité, sélectivité, stabilité, exposition et formulation.',
                        'choices' => [
                            [
                                'choice_text' => 'Parce que l’activité n’a aucune importance',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Parce qu’il faut aussi considérer sécurité et autres propriétés',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Parce qu’un candidat doit être coloré',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Parce que toutes les molécules actives sont interdites',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Que signifie généralement « toxicité » ?',
                        'explanation' => 'La toxicité décrit la capacité d’une substance à provoquer des effets nocifs dans certaines conditions d’exposition.',
                        'choices' => [
                            [
                                'choice_text' => 'La capacité à produire un effet recherché',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'La capacité à provoquer des effets nocifs dans certaines conditions',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'La capacité à se dissoudre dans l’eau',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'La capacité à changer de couleur',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la sélectivité peut-elle être importante pour un médicament ?',
                        'explanation' => 'Une meilleure sélectivité peut réduire certaines interactions non souhaitées avec d’autres cibles biologiques, même si la sélectivité n’est jamais le seul critère de sécurité.',
                        'choices' => [
                            [
                                'choice_text' => 'Elle peut réduire certaines interactions non souhaitées',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Elle rend toujours le médicament sans danger',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Elle supprime toute interaction biologique',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Elle remplace les études de sécurité',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Un composé se fixe fortement à une cible mais aussi à de nombreuses autres protéines. Quel problème peut apparaître ?',
                        'explanation' => 'Des interactions avec plusieurs cibles peuvent entraîner des effets biologiques supplémentaires non recherchés. Cela motive l’étude de la sélectivité.',
                        'choices' => [
                            [
                                'choice_text' => 'Une plus grande sélectivité',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Des effets non souhaités liés à des interactions supplémentaires',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Une disparition de la molécule',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Une augmentation automatique de la solubilité',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi étudier la stabilité d’un médicament est-il aussi lié à la sécurité ?',
                        'explanation' => 'Un produit de dégradation peut être moins actif, mais il peut aussi avoir un profil différent. La stabilité aide donc à contrôler la composition du produit au cours du temps.',
                        'choices' => [
                            [
                                'choice_text' => 'Parce que les produits de dégradation sont toujours identiques',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Parce que la dégradation peut changer la composition et parfois le profil biologique',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Parce que la stabilité concerne seulement la couleur',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Parce que le stockage n’influence jamais la chimie',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Une molécule est très réactive chimiquement. Pourquoi cela peut-il inquiéter un chimiste médicinal ?',
                        'explanation' => 'Une réactivité excessive peut favoriser des interactions non prévues avec des biomolécules et augmenter le risque d’effets indésirables.',
                        'choices' => [
                            [
                                'choice_text' => 'Elle est forcément plus sélective',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Elle peut réagir avec des biomolécules de manière non souhaitée',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Elle ne peut plus être étudiée',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Elle devient automatiquement inactive',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quel principe de laboratoire est important lors de l’évaluation d’un candidat ?',
                        'explanation' => 'Des méthodes contrôlées, des témoins appropriés et des répétitions permettent de distinguer un effet réel d’une variation expérimentale.',
                        'choices' => [
                            [
                                'choice_text' => 'Changer toutes les conditions à chaque essai',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Utiliser des contrôles et des conditions expérimentales bien définies',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Ignorer les résultats contradictoires',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Ne faire qu’une seule mesure sans contrôle',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi comparer l’activité d’un composé à sa toxicité est-il utile ?',
                        'explanation' => 'Un composé peut être actif à une concentration qui provoque aussi des effets indésirables. Il est donc utile de considérer la fenêtre entre effet recherché et effets nocifs.',
                        'choices' => [
                            [
                                'choice_text' => 'Pour savoir si l’effet recherché apparaît dans des conditions acceptables',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Pour supprimer toute mesure biologique',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Pour calculer uniquement la masse molaire',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Pour choisir une couleur',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Une mesure montre un effet biologique, mais le contrôle donne aussi le même effet. Que faut-il faire ?',
                        'explanation' => 'Un contrôle qui donne le même effet suggère que l’observation ne peut pas être attribuée automatiquement au composé testé.',
                        'choices' => [
                            [
                                'choice_text' => 'Conclure immédiatement que le composé est très puissant',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Examiner le contrôle et rechercher une autre explication',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Jeter toutes les données',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Multiplier la concentration sans analyse',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quel énoncé est raisonnable pour un candidat médicament au stade débutant ?',
                        'explanation' => 'Le développement d’un médicament est un équilibre entre plusieurs critères : activité, sélectivité, propriétés physicochimiques, métabolisme et sécurité.',
                        'choices' => [
                            [
                                'choice_text' => 'L’activité seule suffit',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Plusieurs propriétés doivent être évaluées ensemble',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Seule la solubilité compte',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'La masse molaire décide à elle seule du succès',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Révision pratique de chimie médicinale',
                'description' => 'Mettre en relation plusieurs notions de chimie médicinale à partir de petits cas et de calculs simples.',
                'questions' => [
                    [
                        'question' => 'Un composé contient une amine basique et un pH acide est imposé. Que peut-on raisonnablement prévoir ?',
                        'explanation' => 'L’amine basique a tendance à être protonée en milieu acide, ce qui augmente la proportion de forme chargée.',
                        'choices' => [
                            [
                                'choice_text' => 'Une augmentation de la protonation',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Une disparition de l’azote',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Une déprotonation totale',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Une transformation automatique en alcool',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Un candidat est très soluble dans l’eau mais traverse très mal les membranes lipidiques. Quelle propriété peut expliquer ce comportement ?',
                        'explanation' => 'Une forte polarité ou une charge élevée favorise l’eau mais peut rendre le passage à travers une phase lipidique plus difficile.',
                        'choices' => [
                            [
                                'choice_text' => 'Une forte polarité ou une ionisation importante',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Une absence totale de groupes polaires',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Une très grande lipophilie',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Une masse nulle',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Une solution contient 50 mg dans 5 mL. Quelle est sa concentration massique ?',
                        'explanation' => 'C = m/V = 50 mg / 5 mL = 10 mg/mL.',
                        'choices' => [
                            [
                                'choice_text' => '2 mg/mL',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '5 mg/mL',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => '10 mg/mL',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => '25 mg/mL',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Un analogue gagne un groupe hydroxyle. Quelle propriété peut changer ?',
                        'explanation' => 'Le groupe hydroxyle ajoute une fonction polaire capable d’établir des liaisons hydrogène, ce qui peut modifier solubilité et interactions avec une cible.',
                        'choices' => [
                            [
                                'choice_text' => 'Seulement sa couleur',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Sa polarité et potentiellement sa solubilité',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Le nombre de noyaux atomiques dans la cible',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'La valeur du pH de toute solution',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un chimiste compare-t-il parfois une série de dix analogues plutôt qu’un seul composé ?',
                        'explanation' => 'Une série permet de relier les changements structuraux aux changements de propriété ou d’activité et de dégager des tendances.',
                        'choices' => [
                            [
                                'choice_text' => 'Pour éviter toute conclusion',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Pour établir des relations entre structure et propriétés',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Parce qu’un seul composé est toujours inutilisable',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Pour rendre les résultats plus compliqués',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Une molécule devient plus stable mais beaucoup moins soluble après modification. Quelle leçon en tirer ?',
                        'explanation' => 'L’optimisation est souvent un compromis : améliorer une propriété peut en détériorer une autre. Il faut donc chercher un équilibre adapté à l’usage.',
                        'choices' => [
                            [
                                'choice_text' => 'Une propriété est toujours plus importante que toutes les autres',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'L’optimisation implique souvent des compromis entre plusieurs propriétés',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'La solubilité n’a jamais d’importance',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'La stabilité est inutile',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Un composé a Kd très faible pour une cible, sans entrer dans les détails avancés. Que suggère qualitativement ce résultat ?',
                        'explanation' => 'Une faible constante de dissociation correspond généralement à une liaison plus forte, toutes choses égales par ailleurs.',
                        'choices' => [
                            [
                                'choice_text' => 'Une interaction faible',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Une interaction relativement forte',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Une absence de liaison',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Une forte solubilité dans l’eau',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Une molécule est très lipophile et très difficile à dissoudre dans l’eau. Quelle modification pourrait, dans certains cas, améliorer son affinité pour l’eau ?',
                        'explanation' => 'Introduire un groupe polaire approprié peut augmenter les interactions avec l’eau, à condition de ne pas perturber excessivement les autres propriétés.',
                        'choices' => [
                            [
                                'choice_text' => 'Ajouter un groupe polaire adapté',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Ajouter uniquement une longue chaîne carbonée',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Supprimer tous les hétéroatomes',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Augmenter uniquement la masse du flacon',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Lors d’un test biologique, le composé A donne un effet à une concentration plus faible que B. Que peut-on dire prudemment ?',
                        'explanation' => 'Dans les conditions du test, A est plus puissant pour l’effet mesuré. Cela ne suffit pas à conclure sur la sécurité, la sélectivité ou l’efficacité globale.',
                        'choices' => [
                            [
                                'choice_text' => 'A est automatiquement le meilleur médicament',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'A est plus puissant dans les conditions de l’expérience',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'A est forcément plus sûr',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'A sera forcément mieux absorbé',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                    [
                        'question' => 'Quel ensemble de propriétés représente le mieux la démarche de chimie médicinale ?',
                        'explanation' => 'La chimie médicinale cherche à concilier activité biologique et propriétés physicochimiques, métaboliques et de sécurité adaptées au développement.',
                        'choices' => [
                            [
                                'choice_text' => 'Uniquement couleur et masse',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Activité, sélectivité, solubilité, stabilité, métabolisme et sécurité',
                                'is_correct' => true,
                            ],
                            [
                                'choice_text' => 'Seulement le goût',
                                'is_correct' => false,
                            ],
                            [
                                'choice_text' => 'Seulement le point de fusion',
                                'is_correct' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ];

        foreach ($quizzes as $index => $quizData) {
            $settings = $quizSettings[$index] ?? ['duration' => 20, 'passing_score' => 60];

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
