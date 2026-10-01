<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class ChemicalBondingBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'chemical-bonding')->firstOrFail();

        $quizzes = [
            [
                'title' => 'Premiers pas avec les liaisons chimiques',
                'description' => 'Découvrez pourquoi les atomes se lient, le rôle des électrons de valence et les grandes familles de liaisons chimiques.',
                'questions' => [
                    [
                        'question' => 'Pourquoi les atomes forment-ils des liaisons chimiques ?',
                        'choices' => [
                            ['choice_text' => 'Pour atteindre une situation électronique plus stable', 'is_correct' => true],
                            ['choice_text' => 'Pour augmenter leur nombre de protons', 'is_correct' => false],
                            ['choice_text' => 'Pour transformer tous leurs neutrons en électrons', 'is_correct' => false],
                            ['choice_text' => 'Pour perdre automatiquement toute leur masse', 'is_correct' => false],
                        ],
                        'explanation' => 'Les atomes se lient généralement parce qu’une nouvelle répartition des électrons peut être plus stable pour eux.'
                    ],
                    [
                        'question' => 'Quels électrons jouent un rôle particulièrement important dans la formation des liaisons ?',
                        'choices' => [
                            ['choice_text' => 'Les électrons de valence', 'is_correct' => true],
                            ['choice_text' => 'Les neutrons du noyau', 'is_correct' => false],
                            ['choice_text' => 'Les protons uniquement', 'is_correct' => false],
                            ['choice_text' => 'Les électrons qui n’existent pas encore', 'is_correct' => false],
                        ],
                        'explanation' => 'Les électrons de valence sont les électrons de la couche externe. Ils participent directement à de nombreuses liaisons chimiques.'
                    ],
                    [
                        'question' => 'Une liaison ionique se forme généralement entre :',
                        'choices' => [
                            ['choice_text' => 'Un métal et un non-métal', 'is_correct' => true],
                            ['choice_text' => 'Deux gaz nobles', 'is_correct' => false],
                            ['choice_text' => 'Deux neutrons', 'is_correct' => false],
                            ['choice_text' => 'Deux noyaux sans électrons', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans un modèle débutant, une liaison ionique apparaît souvent lorsqu’un métal cède des électrons à un non-métal.'
                    ],
                    [
                        'question' => 'Dans une liaison covalente, que font généralement les atomes avec certains électrons ?',
                        'choices' => [
                            ['choice_text' => 'Ils les partagent', 'is_correct' => true],
                            ['choice_text' => 'Ils les transforment en protons', 'is_correct' => false],
                            ['choice_text' => 'Ils les détruisent', 'is_correct' => false],
                            ['choice_text' => 'Ils les retirent du noyau', 'is_correct' => false],
                        ],
                        'explanation' => 'Une liaison covalente repose sur le partage d’une ou plusieurs paires d’électrons entre les atomes.'
                    ],
                    [
                        'question' => 'Quel exemple contient une liaison covalente ?',
                        'choices' => [
                            ['choice_text' => Une molécule d’eau H₂O', 'is_correct' => true],
                            ['choice_text' => Un morceau de sodium métallique seul', 'is_correct' => false],
                            ['choice_text' => Un noyau d’hélium isolé', 'is_correct' => false],
                            ['choice_text' => Un seul proton', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans H₂O, les atomes d’hydrogène et d’oxygène partagent des électrons. Les liaisons à l’intérieur de la molécule sont covalentes.'
                    ],
                    [
                        'question' => 'Lorsqu’un atome de sodium perd un électron, quelle espèce forme-t-il ?',
                        'choices' => [
                            ['choice_text' => Un cation Na⁺', 'is_correct' => true],
                            ['choice_text' => Un anion Na⁻', 'is_correct' => false],
                            ['choice_text' => Un neutron', 'is_correct' => false],
                            ['choice_text' => Un isotope différent', 'is_correct' => false],
                        ],
                        'explanation' => 'Perdre un électron retire une charge négative. Le sodium devient donc positif et forme le cation Na⁺.'
                    ],
                    [
                        'question' => 'Un atome de chlore gagne un électron. Quelle charge porte alors l’ion obtenu ?',
                        'choices' => [
                            ['choice_text' => -1', 'is_correct' => true],
                            ['choice_text' => +1', 'is_correct' => false],
                            ['choice_text' => 0', 'is_correct' => false],
                            ['choice_text' => -2', 'is_correct' => false],
                        ],
                        'explanation' => 'Gagner un électron ajoute une charge négative. Le chlore forme donc généralement l’ion Cl⁻.'
                    ],
                    [
                        'question' => 'Quel type de liaison explique surtout la cohésion d’un morceau de cuivre métallique ?',
                        'choices' => [
                            ['choice_text' => 'La liaison métallique', 'is_correct' => true],
                            ['choice_text' => 'La liaison hydrogène uniquement', 'is_correct' => false],
                            ['choice_text' => 'La liaison ionique', 'is_correct' => false],
                            ['choice_text' => 'La liaison entre neutrons', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans un métal, les atomes sont maintenus ensemble par une liaison métallique impliquant des électrons délocalisés.'
                    ],
                    [
                        'question' => 'Un élève dit : « Une liaison covalente signifie qu’un atome donne définitivement un électron à l’autre. » Que faut-il corriger ?',
                        'choices' => [
                            ['choice_text' => 'Dans une liaison covalente, les électrons concernés sont partagés', 'is_correct' => true],
                            ['choice_text' => 'Une liaison covalente détruit les électrons', 'is_correct' => false],
                            ['choice_text' => 'Une liaison covalente concerne seulement les neutrons', 'is_correct' => false],
                            ['choice_text' => 'Une liaison covalente exige toujours un métal et un métal', 'is_correct' => false],
                        ],
                        'explanation' => 'Le partage d’électrons est la caractéristique essentielle d’une liaison covalente. Le transfert d’électrons correspond plutôt au modèle de liaison ionique.'
                    ],
                    [
                        'question' => 'Une substance est constituée d’ions positifs et négatifs qui s’attirent. Quel type de liaison est le plus probable ?',
                        'choices' => [
                            ['choice_text' => 'Une liaison ionique', 'is_correct' => true],
                            ['choice_text' => 'Une liaison covalente non polaire uniquement', 'is_correct' => false],
                            ['choice_text' => 'Une liaison métallique', 'is_correct' => false],
                            ['choice_text' => 'Aucune interaction électrique', 'is_correct' => false],
                        ],
                        'explanation' => 'Une liaison ionique repose sur l’attraction électrique entre ions de charges opposées.'
                    ],
                ],
            ],

            [
                'title' => 'La liaison ionique',
                'description' => 'Comprenez le transfert d’électrons, la formation des cations et des anions et la construction de composés ioniques simples.',
                'questions' => [
                    [
                        'question' => 'Que se passe-t-il lors de la formation d’une liaison ionique ?',
                        'choices' => [
                            ['choice_text' => 'Des électrons sont transférés d’un atome à un autre', 'is_correct' => true],
                            ['choice_text' => 'Les noyaux fusionnent', 'is_correct' => false],
                            ['choice_text' => 'Les neutrons quittent les noyaux', 'is_correct' => false],
                            ['choice_text' => 'Les électrons sont transformés en protons', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans le modèle ionique simple, un atome perd un ou plusieurs électrons et un autre les gagne. Les ions formés s’attirent ensuite.'
                    ],
                    [
                        'question' => 'Le sodium et le chlore réagissent ensemble. Quel ion est formé par le sodium ?',
                        'choices' => [
                            ['choice_text' => Na⁺', 'is_correct' => true],
                            ['choice_text' => Na⁻', 'is_correct' => false],
                            ['choice_text' => Na²⁻', 'is_correct' => false],
                            ['choice_text' => Na²⁺', 'is_correct' => false],
                        ],
                        'explanation' => 'Le sodium possède un électron de valence qu’il peut perdre. Il devient alors Na⁺.'
                    ],
                    [
                        'question' => 'Quel ion forme généralement le chlore dans le chlorure de sodium ?',
                        'choices' => [
                            ['choice_text' => Cl⁻', 'is_correct' => true],
                            ['choice_text' => Cl⁺', 'is_correct' => false],
                            ['choice_text' => Cl²⁺', 'is_correct' => false],
                            ['choice_text' => Cl²⁻', 'is_correct' => false],
                        ],
                        'explanation' => 'Le chlore gagne généralement un électron pour compléter sa couche externe et devient l’anion Cl⁻.'
                    ],
                    [
                        'question' => 'Pourquoi Na⁺ et Cl⁻ restent-ils associés dans le chlorure de sodium ?',
                        'choices' => [
                            ['choice_text' => 'Leurs charges opposées provoquent une attraction électrique', 'is_correct' => true],
                            ['choice_text' => 'Ils ont exactement la même charge', 'is_correct' => false],
                            ['choice_text' => 'Leurs neutrons s’attirent fortement', 'is_correct' => false],
                            ['choice_text' => 'Ils fusionnent leurs noyaux', 'is_correct' => false],
                        ],
                        'explanation' => 'Les ions positifs et négatifs s’attirent par interaction électrostatique. Cette attraction contribue à la structure du solide ionique.'
                    ],
                    [
                        'question' => 'Un atome de magnésium perd deux électrons. Quelle charge porte l’ion obtenu ?',
                        'choices' => [
                            ['choice_text' => +2', 'is_correct' => true],
                            ['choice_text' => -2', 'is_correct' => false],
                            ['choice_text' => +1', 'is_correct' => false],
                            ['choice_text' => 0', 'is_correct' => false],
                        ],
                        'explanation' => 'Chaque électron perdu correspond à une charge positive supplémentaire. La perte de deux électrons donne Mg²⁺.'
                    ],
                    [
                        'question' => 'Un atome d’oxygène gagne deux électrons. Quelle charge porte-t-il ensuite ?',
                        'choices' => [
                            ['choice_text' => -2', 'is_correct' => true],
                            ['choice_text' => +2', 'is_correct' => false],
                            ['choice_text' => -1', 'is_correct' => false],
                            ['choice_text' => 0', 'is_correct' => false],
                        ],
                        'explanation' => 'L’oxygène gagne deux électrons, donc il acquiert deux charges négatives supplémentaires et forme O²⁻.'
                    ],
                    [
                        'question' => 'Quelle formule représente correctement le composé formé par Mg²⁺ et Cl⁻ ?',
                        'choices' => [
                            ['choice_text' => MgCl₂', 'is_correct' => true],
                            ['choice_text' => MgCl', 'is_correct' => false],
                            ['choice_text' => Mg₂Cl', 'is_correct' => false],
                            ['choice_text' => Mg₂Cl₂', 'is_correct' => false],
                        ],
                        'explanation' => 'Un ion Mg²⁺ doit être associé à deux ions Cl⁻ pour obtenir une charge totale nulle : +2 + (-1) + (-1) = 0.'
                    ],
                    [
                        'question' => 'Pourquoi un composé ionique comme NaCl est-il électriquement neutre dans son ensemble ?',
                        'choices' => [
                            ['choice_text' => 'Les charges positives et négatives se compensent', 'is_correct' => true],
                            ['choice_text' => 'Les ions n’ont en réalité aucune charge', 'is_correct' => false],
                            ['choice_text' => 'Tous les électrons ont disparu', 'is_correct' => false],
                            ['choice_text' => 'Le sodium annule la masse du chlore', 'is_correct' => false],
                        ],
                        'explanation' => 'NaCl contient un ion Na⁺ et un ion Cl⁻. Les charges +1 et -1 se compensent, donnant une charge globale nulle.'
                    ],
                    [
                        'question' => 'Un élève propose CaCl au lieu de CaCl₂ pour le chlorure de calcium. Quelle est son erreur ?',
                        'choices' => [
                            ['choice_text' => 'Il n’a pas équilibré la charge +2 du calcium avec deux ions chlorure -1', 'is_correct' => true],
                            ['choice_text' => 'Le calcium ne peut jamais former d’ions', 'is_correct' => false],
                            ['choice_text' => 'Le chlore porte toujours une charge +1', 'is_correct' => false],
                            ['choice_text' => 'La formule d’un composé ionique ne tient jamais compte des charges', 'is_correct' => false],
                        ],
                        'explanation' => 'Ca²⁺ porte deux charges positives et Cl⁻ une charge négative. Deux chlorures sont donc nécessaires pour obtenir un composé neutre.'
                    ],
                    [
                        'question' => 'On dispose de Al³⁺ et O²⁻. Quelle formule donne un composé électriquement neutre ?',
                        'choices' => [
                            ['choice_text' => Al₂O₃', 'is_correct' => true],
                            ['choice_text' => AlO', 'is_correct' => false],
                            ['choice_text' => AlO₂', 'is_correct' => false],
                            ['choice_text' => Al₃O₂', 'is_correct' => false],
                        ],
                        'explanation' => 'Deux ions Al³⁺ donnent +6 et trois ions O²⁻ donnent -6. La combinaison Al₂O₃ est donc neutre.'
                    ],
                ],
            ],

            [
                'title' => 'La liaison covalente',
                'description' => 'Explorez le partage d’électrons entre atomes et reconnaissez les liaisons covalentes dans des molécules simples.',
                'questions' => [
                    [
                        'question' => 'Dans une liaison covalente, les atomes mettent en commun :',
                        'choices' => [
                            ['choice_text' => 'Une ou plusieurs paires d’électrons', 'is_correct' => true],
                            ['choice_text' => 'Leurs noyaux', 'is_correct' => false],
                            ['choice_text' => 'Leurs neutrons', 'is_correct' => false],
                            ['choice_text' => 'Leur masse totale', 'is_correct' => false],
                        ],
                        'explanation' => 'Une liaison covalente correspond au partage d’électrons entre les atomes liés.'
                    ],
                    [
                        'question' => 'Quelle molécule contient seulement deux atomes liés par une liaison covalente ?',
                        'choices' => [
                            ['choice_text' => H₂', 'is_correct' => true],
                            ['choice_text' => NaCl', 'is_correct' => false],
                            ['choice_text' => MgO', 'is_correct' => false],
                            ['choice_text' => Fe', 'is_correct' => false],
                        ],
                        'explanation' => 'H₂ est formé de deux atomes d’hydrogène qui partagent une paire d’électrons.'
                    ],
                    [
                        'question' => 'Pourquoi deux atomes d’hydrogène peuvent-ils former H₂ ?',
                        'choices' => [
                            ['choice_text' => 'Ils partagent une paire d’électrons', 'is_correct' => true],
                            ['choice_text' => 'Ils fusionnent leurs noyaux', 'is_correct' => false],
                            ['choice_text' => 'L’un donne tous ses protons à l’autre', 'is_correct' => false],
                            ['choice_text' => 'Ils deviennent deux ions négatifs', 'is_correct' => false],
                        ],
                        'explanation' => 'Chaque hydrogène apporte un électron. Les deux électrons sont partagés et forment une liaison covalente.'
                    ],
                    [
                        'question' => 'Dans la molécule d’eau H₂O, combien d’atomes sont liés ensemble ?',
                        'choices' => [
                            ['choice_text' => 3', 'is_correct' => true],
                            ['choice_text' => 2', 'is_correct' => false],
                            ['choice_text' => 4', 'is_correct' => false],
                            ['choice_text' => 6', 'is_correct' => false],
                        ],
                        'explanation' => 'H₂O contient deux atomes d’hydrogène et un atome d’oxygène, soit trois atomes au total.'
                    ],
                    [
                        'question' => 'Le méthane CH₄ contient quatre atomes d’hydrogène liés à un atome de :',
                        'choices' => [
                            ['choice_text' => Carbone', 'is_correct' => true],
                            ['choice_text' => Chlore', 'is_correct' => false],
                            ['choice_text' => Calcium', 'is_correct' => false],
                            ['choice_text' => Cuivre', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans CH₄, la lettre C représente le carbone et H représente l’hydrogène. Le chiffre 4 indique quatre atomes d’hydrogène.'
                    ],
                    [
                        'question' => 'Une liaison covalente simple correspond au partage de :',
                        'choices' => [
                            ['choice_text' => 'Une paire d’électrons', 'is_correct' => true],
                            ['choice_text' => 'Deux paires d’électrons', 'is_correct' => false],
                            ['choice_text' => 'Un proton', 'is_correct' => false],
                            ['choice_text' => 'Un neutron', 'is_correct' => false],
                        ],
                        'explanation' => 'Une liaison covalente simple correspond au partage d’une paire d’électrons entre deux atomes.'
                    ],
                    [
                        'question' => 'Dans O₂, combien de paires d’électrons sont partagées entre les deux atomes d’oxygène ?',
                        'choices' => [
                            ['choice_text' => 2 paires', 'is_correct' => true],
                            ['choice_text' => 1 paire', 'is_correct' => false],
                            ['choice_text' => 3 paires', 'is_correct' => false],
                            ['choice_text' => 4 paires', 'is_correct' => false],
                        ],
                        'explanation' => 'O₂ possède une double liaison. Une double liaison correspond au partage de deux paires d’électrons.'
                    ],
                    [
                        'question' => 'Quelle formule représente une molécule composée d’un atome de carbone et de deux atomes d’oxygène ?',
                        'choices' => [
                            ['choice_text' => CO₂', 'is_correct' => true],
                            ['choice_text' => CO', 'is_correct' => false],
                            ['choice_text' => C₂O', 'is_correct' => false],
                            ['choice_text' => C₂O₂', 'is_correct' => false],
                        ],
                        'explanation' => 'Le symbole C représente un atome de carbone et le symbole O₂ indique deux atomes d’oxygène.'
                    ],
                    [
                        'question' => 'Un élève pense que la molécule H₂O contient deux molécules d’hydrogène. Que signifie réellement le petit 2 ?',
                        'choices' => [
                            ['choice_text' => 'Il indique qu’il y a deux atomes d’hydrogène dans une molécule d’eau', 'is_correct' => true],
                            ['choice_text' => 'Il indique deux molécules d’eau', 'is_correct' => false],
                            ['choice_text' => 'Il indique deux atomes d’oxygène', 'is_correct' => false],
                            ['choice_text' => 'Il indique deux électrons seulement', 'is_correct' => false],
                        ],
                        'explanation' => 'L’indice 2 placé après H signifie que chaque molécule d’eau contient deux atomes d’hydrogène.'
                    ],
                    [
                        'question' => 'Pourquoi les molécules covalentes forment-elles souvent des ensembles bien définis comme H₂O ou CO₂ ?',
                        'choices' => [
                            ['choice_text' => 'Les atomes partagent leurs électrons selon certaines combinaisons stables', 'is_correct' => true],
                            ['choice_text' => 'Les molécules choisissent leur formule au hasard', 'is_correct' => false],
                            ['choice_text' => 'Tous les atomes doivent être reliés à tous les autres', 'is_correct' => false],
                            ['choice_text' => 'Les noyaux fusionnent à chaque liaison', 'is_correct' => false],
                        ],
                        'explanation' => 'Les atomes forment certaines combinaisons de liaisons qui leur permettent d’atteindre une configuration électronique plus stable.'
                    ],
                ],
            ],

            [
                'title' => 'Représentations de Lewis',
                'description' => 'Apprenez à représenter simplement les électrons de valence, les paires liantes et les paires libres dans de petites molécules.',
                'questions' => [
                    [
                        'question' => 'Dans une représentation de Lewis, que représentent généralement les points autour du symbole d’un élément ?',
                        'choices' => [
                            ['choice_text' => 'Les électrons de valence', 'is_correct' => true],
                            ['choice_text' => 'Les neutrons du noyau', 'is_correct' => false],
                            ['choice_text' => 'Les protons de l’atome', 'is_correct' => false],
                            ['choice_text' => 'Les molécules voisines', 'is_correct' => false],
                        ],
                        'explanation' => 'Les points de Lewis représentent les électrons de valence, ceux qui interviennent le plus souvent dans les liaisons.'
                    ],
                    [
                        'question' => 'Combien d’électrons de valence possède l’oxygène ?',
                        'choices' => [
                            ['choice_text' => 6', 'is_correct' => true],
                            ['choice_text' => 2', 'is_correct' => false],
                            ['choice_text' => 8', 'is_correct' => false],
                            ['choice_text' => 4', 'is_correct' => false],
                        ],
                        'explanation' => 'L’oxygène appartient au groupe 16 et possède donc 6 électrons de valence.'
                    ],
                    [
                        'question' => 'Combien d’électrons de valence possède le carbone ?',
                        'choices' => [
                            ['choice_text' => 4', 'is_correct' => true],
                            ['choice_text' => 2', 'is_correct' => false],
                            ['choice_text' => 6', 'is_correct' => false],
                            ['choice_text' => 8', 'is_correct' => false],
                        ],
                        'explanation' => 'Le carbone est dans le groupe 14 et possède donc 4 électrons de valence.'
                    ],
                    [
                        'question' => 'Dans une représentation de Lewis, une ligne entre deux atomes représente généralement :',
                        'choices' => [
                            ['choice_text' => 'Une paire d’électrons partagée', 'is_correct' => true],
                            ['choice_text' => 'Deux protons', 'is_correct' => false],
                            ['choice_text' => 'Un neutron', 'is_correct' => false],
                            ['choice_text' => 'Une charge négative entière', 'is_correct' => false],
                        ],
                        'explanation' => 'Une ligne représente une liaison covalente, c’est-à-dire une paire d’électrons partagée entre les deux atomes.'
                    ],
                    [
                        'question' => 'Combien d’électrons sont représentés par une liaison covalente simple ?',
                        'choices' => [
                            ['choice_text' => 2', 'is_correct' => true],
                            ['choice_text' => 1', 'is_correct' => false],
                            ['choice_text' => 4', 'is_correct' => false],
                            ['choice_text' => 8', 'is_correct' => false],
                        ],
                        'explanation' => 'Une liaison covalente simple correspond à une paire d’électrons, donc à deux électrons partagés.'
                    ],
                    [
                        'question' => 'Dans H₂, chaque hydrogène apporte un électron. Combien d’électrons sont finalement partagés dans la liaison ?',
                        'choices' => [
                            ['choice_text' => 2', 'is_correct' => true],
                            ['choice_text' => 1', 'is_correct' => false],
                            ['choice_text' => 4', 'is_correct' => false],
                            ['choice_text' => 0', 'is_correct' => false],
                        ],
                        'explanation' => 'Chaque hydrogène apporte un électron. Les deux électrons forment ensemble une paire partagée.'
                    ],
                    [
                        'question' => 'L’azote possède 5 électrons de valence. Dans NH₃, combien d’atomes d’hydrogène sont liés à l’azote ?',
                        'choices' => [
                            ['choice_text' => 3', 'is_correct' => true],
                            ['choice_text' => 2', 'is_correct' => false],
                            ['choice_text' => 5', 'is_correct' => false],
                            ['choice_text' => 1', 'is_correct' => false],
                        ],
                        'explanation' => 'La formule NH₃ indique trois atomes d’hydrogène liés à un atome d’azote. L’azote conserve aussi une paire d’électrons non liante.'
                    ],
                    [
                        'question' => 'Dans une représentation simple de H₂O, combien de liaisons covalentes simples l’oxygène forme-t-il avec les hydrogènes ?',
                        'choices' => [
                            ['choice_text' => 2', 'is_correct' => true],
                            ['choice_text' => 1', 'is_correct' => false],
                            ['choice_text' => 3', 'is_correct' => false],
                            ['choice_text' => 4', 'is_correct' => false],
                        ],
                        'explanation' => 'L’oxygène est lié à deux hydrogènes dans H₂O. Il forme donc deux liaisons covalentes simples.'
                    ],
                    [
                        'question' => 'Un élève dessine quatre liaisons autour du carbone dans CH₄. Est-ce cohérent avec la formule ?',
                        'choices' => [
                            ['choice_text' => 'Oui, car le carbone est lié aux quatre atomes d’hydrogène', 'is_correct' => true],
                            ['choice_text' => 'Non, car le carbone ne peut former aucune liaison', 'is_correct' => false],
                            ['choice_text' => 'Non, car CH₄ contient quatre atomes de carbone', 'is_correct' => false],
                            ['choice_text' => 'Oui, mais seulement si les hydrogènes sont remplacés par des neutrons', 'is_correct' => false],
                        ],
                        'explanation' => 'CH₄ signifie un carbone entouré de quatre hydrogènes. Une représentation de Lewis cohérente montre donc quatre liaisons C-H.'
                    ],
                    [
                        'question' => 'Pourquoi les représentations de Lewis sont-elles utiles à un débutant ?',
                        'choices' => [
                            ['choice_text' => 'Elles permettent de voir simplement comment les électrons de valence participent aux liaisons', 'is_correct' => true],
                            ['choice_text' => 'Elles donnent directement la masse exacte d’une molécule', 'is_correct' => false],
                            ['choice_text' => 'Elles remplacent toutes les mesures expérimentales', 'is_correct' => false],
                            ['choice_text' => 'Elles montrent les neutrons avec précision', 'is_correct' => false],
                        ],
                        'explanation' => 'Les structures de Lewis offrent une représentation simple des électrons de valence et des liaisons, ce qui aide à comprendre la structure des molécules.'
                    ],
                ],
            ],

            [
                'title' => 'Liaisons simples, doubles et triples',
                'description' => 'Distinguez les différents types de liaisons covalentes et reliez leur représentation au nombre d’électrons partagés.',
                'questions' => [
                    [
                        'question' => 'Une liaison double correspond au partage de combien d’électrons ?',
                        'choices' => [
                            ['choice_text' => 4', 'is_correct' => true],
                            ['choice_text' => 2', 'is_correct' => false],
                            ['choice_text' => 6', 'is_correct' => false],
                            ['choice_text' => 8', 'is_correct' => false],
                        ],
                        'explanation' => 'Une liaison double contient deux paires d’électrons partagées, soit quatre électrons.'
                    ],
                    [
                        'question' => 'Une liaison triple contient :',
                        'choices' => [
                            ['choice_text' => 'Trois paires d’électrons partagées', 'is_correct' => true],
                            ['choice_text' => 'Une seule paire d’électrons', 'is_correct' => false],
                            ['choice_text' => 'Deux paires seulement', 'is_correct' => false],
                            ['choice_text' => 'Trois protons', 'is_correct' => false],
                        ],
                        'explanation' => 'Une liaison triple correspond au partage de trois paires d’électrons entre deux atomes.'
                    ],
                    [
                        'question' => 'Dans O₂, quelle représentation simple des liaisons est correcte ?',
                        'choices' => [
                            ['choice_text' => 'Une double liaison entre les deux oxygènes', 'is_correct' => true],
                            ['choice_text' => 'Aucune liaison', 'is_correct' => false],
                            ['choice_text' => 'Une seule liaison métallique', 'is_correct' => false],
                            ['choice_text' => 'Trois liaisons ioniques', 'is_correct' => false],
                        ],
                        'explanation' => 'La molécule O₂ est représentée par une double liaison, ce qui permet aux deux atomes d’oxygène de partager davantage d’électrons.'
                    ],
                    [
                        'question' => 'Quelle molécule contient typiquement une triple liaison entre ses deux atomes ?',
                        'choices' => [
                            ['choice_text' => N₂', 'is_correct' => true],
                            ['choice_text' => H₂', 'is_correct' => false],
                            ['choice_text' => F₂', 'is_correct' => false],
                            ['choice_text' => Cl₂', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans N₂, les deux atomes d’azote partagent trois paires d’électrons, formant une triple liaison.'
                    ],
                    [
                        'question' => 'Quelle liaison est généralement la plus riche en électrons partagés entre deux mêmes atomes ?',
                        'choices' => [
                            ['choice_text' => 'Une liaison triple', 'is_correct' => true],
                            ['choice_text' => 'Une liaison simple', 'is_correct' => false],
                            ['choice_text' => 'Une interaction sans liaison', 'is_correct' => false],
                            ['choice_text' => 'Une liaison ionique sans électrons', 'is_correct' => false],
                        ],
                        'explanation' => 'Une liaison triple comporte trois paires d’électrons partagées, davantage qu’une liaison simple ou double.'
                    ],
                    [
                        'question' => 'Le dioxyde de carbone CO₂ est souvent représenté par O=C=O. Combien de liaisons doubles trouve-t-on dans cette représentation ?',
                        'choices' => [
                            ['choice_text' => 2', 'is_correct' => true],
                            ['choice_text' => 1', 'is_correct' => false],
                            ['choice_text' => 3', 'is_correct' => false],
                            ['choice_text' => 4', 'is_correct' => false],
                        ],
                        'explanation' => 'Le carbone est relié à chacun des deux oxygènes par une liaison double. La structure contient donc deux liaisons doubles.'
                    ],
                    [
                        'question' => 'Pourquoi parle-t-on d’une liaison simple lorsqu’une seule paire d’électrons est partagée ?',
                        'choices' => [
                            ['choice_text' => 'Parce qu’une seule paire constitue la liaison', 'is_correct' => true],
                            ['choice_text' => 'Parce qu’un seul proton est partagé', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’il n’y a aucun électron', 'is_correct' => false],
                            ['choice_text' => 'Parce que les noyaux se touchent directement', 'is_correct' => false],
                        ],
                        'explanation' => 'La dénomination simple, double ou triple indique le nombre de paires d’électrons partagées entre deux atomes.'
                    ],
                    [
                        'question' => 'Un étudiant dessine F-F pour représenter F₂. Combien de paires d’électrons sont partagées ?',
                        'choices' => [
                            ['choice_text' => 1', 'is_correct' => true],
                            ['choice_text' => 2', 'is_correct' => false],
                            ['choice_text' => 3', 'is_correct' => false],
                            ['choice_text' => 4', 'is_correct' => false],
                        ],
                        'explanation' => 'Le trait unique représente une liaison covalente simple, donc une seule paire d’électrons partagée.'
                    ],
                    [
                        'question' => 'Si deux atomes partagent trois paires d’électrons, comment représente-t-on généralement cette liaison dans une formule de Lewis simplifiée ?',
                        'choices' => [
                            ['choice_text' => 'Par trois traits entre les atomes', 'is_correct' => true],
                            ['choice_text' => 'Par un seul point', 'is_correct' => false],
                            ['choice_text' => 'Par quatre traits', 'is_correct' => false],
                            ['choice_text' => 'Par aucun symbole', 'is_correct' => false],
                        ],
                        'explanation' => 'Chaque trait représente une paire d’électrons partagée. Trois paires donnent donc une triple liaison représentée par trois traits.'
                    ],
                    [
                        'question' => 'Pourquoi une liaison double n’est-elle pas simplement « deux liaisons séparées sans relation » ?',
                        'choices' => [
                            ['choice_text' => 'Elle correspond à deux paires d’électrons partagées entre les mêmes atomes', 'is_correct' => true],
                            ['choice_text' => 'Elle signifie que les noyaux ont fusionné', 'is_correct' => false],
                            ['choice_text' => 'Elle indique deux molécules indépendantes', 'is_correct' => false],
                            ['choice_text' => 'Elle ne contient aucun électron', 'is_correct' => false],
                        ],
                        'explanation' => 'Une liaison double décrit une seule connexion entre deux atomes impliquant deux paires d’électrons partagées.'
                    ],
                ],
            ],

            [
                'title' => 'La liaison métallique',
                'description' => 'Comprenez simplement comment les atomes métalliques restent associés et pourquoi les métaux conduisent bien l’électricité et la chaleur.',
                'questions' => [
                    [
                        'question' => 'Quel type de liaison maintient ensemble les atomes d’un métal solide ?',
                        'choices' => [
                            ['choice_text' => 'La liaison métallique', 'is_correct' => true],
                            ['choice_text' => 'La liaison ionique uniquement', 'is_correct' => false],
                            ['choice_text' => 'La liaison covalente entre tous les métaux', 'is_correct' => false],
                            ['choice_text' => 'Une liaison entre neutrons', 'is_correct' => false],
                        ],
                        'explanation' => 'Les métaux possèdent une liaison métallique dans laquelle les électrons de valence sont relativement délocalisés.'
                    ],
                    [
                        'question' => 'Dans un modèle simple d’un métal, les électrons de valence peuvent :',
                        'choices' => [
                            ['choice_text' => 'Se déplacer plus librement à travers le réseau métallique', 'is_correct' => true],
                            ['choice_text' => 'Rester tous enfermés dans les noyaux', 'is_correct' => false],
                            ['choice_text' => 'Devenir des neutrons', 'is_correct' => false],
                            ['choice_text' => 'Disparaître lorsque le métal est solide', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans le modèle métallique, certains électrons de valence sont délocalisés et peuvent se déplacer dans le réseau d’atomes métalliques.'
                    ],
                    [
                        'question' => 'Pourquoi les métaux conduisent-ils généralement bien l’électricité ?',
                        'choices' => [
                            ['choice_text' => 'Ils possèdent des électrons qui peuvent se déplacer relativement librement', 'is_correct' => true],
                            ['choice_text' => 'Ils n’ont aucun électron', 'is_correct' => false],
                            ['choice_text' => 'Leurs neutrons transportent directement le courant', 'is_correct' => false],
                            ['choice_text' => 'Leurs noyaux se déplacent dans le métal', 'is_correct' => false],
                        ],
                        'explanation' => 'La présence d’électrons mobiles ou délocalisés permet le transport de charge électrique à travers le métal.'
                    ],
                    [
                        'question' => 'Quel élément est un bon exemple de métal utilisé pour les fils électriques ?',
                        'choices' => [
                            ['choice_text' => Cuivre', 'is_correct' => true],
                            ['choice_text' => Soufre', 'is_correct' => false],
                            ['choice_text' => Chlore', 'is_correct' => false],
                            ['choice_text' => Néon', 'is_correct' => false],
                        ],
                        'explanation' => 'Le cuivre possède une bonne conductivité électrique et peut être transformé en fils, ce qui explique son utilisation courante.'
                    ],
                    [
                        'question' => 'Pourquoi un métal peut-il souvent être déformé sans se casser immédiatement ?',
                        'choices' => [
                            ['choice_text' => 'Les couches d’atomes peuvent se déplacer tout en restant liées', 'is_correct' => true],
                            ['choice_text' => 'Les atomes métalliques n’ont aucun noyau', 'is_correct' => false],
                            ['choice_text' => 'Toutes les liaisons chimiques disparaissent pendant la déformation', 'is_correct' => false],
                            ['choice_text' => 'Le métal devient un gaz lorsqu’on le plie', 'is_correct' => false],
                        ],
                        'explanation' => 'La liaison métallique permet aux couches d’atomes de glisser les unes par rapport aux autres sans détruire complètement la cohésion du matériau.'
                    ],
                    [
                        'question' => 'Quel comportement est typique d’un métal bien conducteur ?',
                        'choices' => [
                            ['choice_text' => 'Un courant électrique peut traverser facilement le matériau', 'is_correct' => true],
                            ['choice_text' => 'Aucun électron ne peut bouger', 'is_correct' => false],
                            ['choice_text' => 'Les neutrons deviennent des électrons', 'is_correct' => false],
                            ['choice_text' => 'Le matériau est forcément transparent', 'is_correct' => false],
                        ],
                        'explanation' => 'Une bonne conductivité électrique signifie que les charges peuvent se déplacer relativement facilement dans le matériau.'
                    ],
                    [
                        'question' => 'Un élève pense que la liaison métallique est la même chose qu’une liaison ionique. Quelle différence simple peut-il retenir ?',
                        'choices' => [
                            ['choice_text' => 'Dans le métal, les électrons sont délocalisés dans un réseau d’atomes métalliques', 'is_correct' => true],
                            ['choice_text' => 'Dans une liaison métallique, les noyaux sont partagés', 'is_correct' => false],
                            ['choice_text' => 'La liaison ionique concerne uniquement deux métaux', 'is_correct' => false],
                            ['choice_text' => 'Les deux modèles sont exactement identiques', 'is_correct' => false],
                        ],
                        'explanation' => 'La liaison ionique repose sur l’attraction entre ions de charges opposées, tandis que la liaison métallique implique des électrons délocalisés au sein d’un réseau métallique.'
                    ],
                    [
                        'question' => 'Pourquoi l’aluminium peut-il être utilisé à la fois dans des fils et dans des feuilles métalliques ?',
                        'choices' => [
                            ['choice_text' => 'Il conduit l’électricité et peut être déformé', 'is_correct' => true],
                            ['choice_text' => 'Il est un gaz noble', 'is_correct' => false],
                            ['choice_text' => 'Il ne contient aucun électron de valence', 'is_correct' => false],
                            ['choice_text' => 'Il est trop fragile pour être travaillé', 'is_correct' => false],
                        ],
                        'explanation' => 'L’aluminium est un métal conducteur et malléable. Ces deux propriétés expliquent plusieurs de ses usages pratiques.'
                    ],
                    [
                        'question' => 'Une entreprise choisit le cuivre pour fabriquer des câbles. Quelle propriété est directement recherchée ?',
                        'choices' => [
                            ['choice_text' => 'Sa bonne conductivité électrique', 'is_correct' => true],
                            ['choice_text' => 'Sa capacité à former du gaz', 'is_correct' => false],
                            ['choice_text' => 'Son absence totale d’électrons', 'is_correct' => false],
                            ['choice_text' => 'Sa très faible réactivité avec tous les matériaux', 'is_correct' => false],
                        ],
                        'explanation' => 'Le cuivre est utilisé dans les câbles principalement parce qu’il permet au courant électrique de circuler efficacement.'
                    ],
                    [
                        'question' => 'Quelle situation montre le mieux le rôle des électrons délocalisés dans un métal ?',
                        'choices' => [
                            ['choice_text' => Un courant traverse facilement un fil de cuivre', 'is_correct' => true],
                            ['choice_text' => Un cristal de sel se dissout dans l’eau', 'is_correct' => false],
                            ['choice_text' => Une molécule d’eau contient deux hydrogènes', 'is_correct' => false],
                            ['choice_text' => Un gaz noble reste peu réactif', 'is_correct' => false],
                        ],
                        'explanation' => 'La bonne conductivité électrique du cuivre est liée à la présence d’électrons pouvant se déplacer dans le réseau métallique.'
                    ],
                ],
            ],

            [
                'title' => 'Polarité et partage des électrons',
                'description' => 'Découvrez pourquoi certaines liaisons covalentes partagent les électrons de façon inégale et distinguez les molécules polaires et non polaires.',
                'questions' => [
                    [
                        'question' => 'Dans une liaison covalente polarisée, les électrons partagés sont :',
                        'choices' => [
                            ['choice_text' => 'Attirés davantage par l’un des deux atomes', 'is_correct' => true],
                            ['choice_text' => 'Transformés en protons', 'is_correct' => false],
                            ['choice_text' => 'Partagés toujours de façon parfaitement égale', 'is_correct' => false],
                            ['choice_text' => 'Retirés des deux atomes', 'is_correct' => false],
                        ],
                        'explanation' => 'Une liaison covalente polarisée apparaît lorsque les deux atomes n’attirent pas les électrons partagés avec la même intensité.'
                    ],
                    [
                        'question' => 'Lequel de ces éléments attire généralement plus fortement les électrons dans une liaison ?',
                        'choices' => [
                            ['choice_text' => Fluor', 'is_correct' => true],
                            ['choice_text' => Sodium', 'is_correct' => false],
                            ['choice_text' => Potassium', 'is_correct' => false],
                            ['choice_text' => Calcium', 'is_correct' => false],
                        ],
                        'explanation' => 'Le fluor possède une électronégativité très élevée et attire fortement les électrons de liaison.'
                    ],
                    [
                        'question' => 'Dans HCl, pourquoi la liaison est-elle polarisée ?',
                        'choices' => [
                            ['choice_text' => 'Le chlore attire davantage les électrons partagés que l’hydrogène', 'is_correct' => true],
                            ['choice_text' => 'L’hydrogène possède plus de protons que le chlore', 'is_correct' => false],
                            ['choice_text' => 'Les électrons sont absents de HCl', 'is_correct' => false],
                            ['choice_text' => 'Les noyaux fusionnent', 'is_correct' => false],
                        ],
                        'explanation' => 'Le chlore est plus électronégatif que l’hydrogène. La paire d’électrons de la liaison est donc davantage attirée vers le chlore.'
                    ],
                    [
                        'question' => 'Quelle partie d’une molécule d’eau porte une charge partielle négative ?',
                        'choices' => [
                            ['choice_text' => 'La région autour de l’oxygène', 'is_correct' => true],
                            ['choice_text' => 'La région autour des hydrogènes', 'is_correct' => false],
                            ['choice_text' => 'Le noyau de l’eau entier', 'is_correct' => false],
                            ['choice_text' => 'Aucune partie de la molécule', 'is_correct' => false],
                        ],
                        'explanation' => 'L’oxygène attire davantage les électrons de liaison que l’hydrogène. Il porte donc une charge partielle négative dans H₂O.'
                    ],
                    [
                        'question' => 'Dans une liaison covalente non polaire, les électrons sont :',
                        'choices' => [
                            ['choice_text' => 'Partagés de manière relativement équilibrée', 'is_correct' => true],
                            ['choice_text' => 'Complètement transférés à un seul atome', 'is_correct' => false],
                            ['choice_text' => 'Absents', 'is_correct' => false],
                            ['choice_text' => 'Transformés en neutrons', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans une liaison non polaire, les atomes attirent les électrons de manière similaire ou très proche, de sorte que le partage est relativement équilibré.'
                    ],
                    [
                        'question' => 'La molécule H₂ est-elle généralement polaire ?',
                        'choices' => [
                            ['choice_text' => 'Non, car les deux atomes sont identiques et partagent les électrons de façon équilibrée', 'is_correct' => true],
                            ['choice_text' => 'Oui, car l’hydrogène porte toujours une charge complète', 'is_correct' => false],
                            ['choice_text' => 'Oui, car elle contient deux atomes', 'is_correct' => false],
                            ['choice_text' => 'Impossible à savoir à partir des atomes', 'is_correct' => false],
                        ],
                        'explanation' => 'Les deux atomes d’hydrogène attirent les électrons de la même façon. La liaison est donc non polaire.'
                    ],
                    [
                        'question' => 'Pourquoi l’eau est-elle une molécule polaire alors que ses liaisons O-H sont covalentes ?',
                        'choices' => [
                            ['choice_text' => 'Les électrons sont partagés inégalement et la forme de la molécule crée un déséquilibre de charges', 'is_correct' => true],
                            ['choice_text' => 'L’eau contient des ions métalliques', 'is_correct' => false],
                            ['choice_text' => 'Tous les électrons sont transférés à l’oxygène', 'is_correct' => false],
                            ['choice_text' => 'Les noyaux d’hydrogène quittent la molécule', 'is_correct' => false],
                        ],
                        'explanation' => 'L’oxygène attire davantage les électrons et la forme courbée de H₂O fait que les effets de polarité ne s’annulent pas.'
                    ],
                    [
                        'question' => 'Un étudiant dit : « Une liaison polaire signifie que les atomes sont devenus des ions complets. » Que faut-il lui répondre ?',
                        'choices' => [
                            ['choice_text' => 'Une liaison polaire présente surtout des charges partielles, pas forcément des ions complets', 'is_correct' => true],
                            ['choice_text' => 'Une liaison polaire ne contient aucun électron', 'is_correct' => false],
                            ['choice_text' => 'Toute liaison polaire est automatiquement ionique', 'is_correct' => false],
                            ['choice_text' => 'Une liaison polaire détruit les atomes', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans une liaison covalente polaire, les électrons sont toujours partagés. Le partage est simplement inégal, ce qui crée des charges partielles.'
                    ],
                    [
                        'question' => 'Entre NaCl et HCl, lequel présente directement des ions dans son modèle de liaison principal ?',
                        'choices' => [
                            ['choice_text' => NaCl', 'is_correct' => true],
                            ['choice_text' => HCl', 'is_correct' => false],
                            ['choice_text' => Les deux de la même manière', 'is_correct' => false],
                            ['choice_text' => Aucun des deux', 'is_correct' => false],
                        ],
                        'explanation' => 'NaCl est un composé ionique formé de Na⁺ et Cl⁻. HCl possède une liaison covalente polarisée dans sa molécule.'
                    ],
                    [
                        'question' => 'Quel élément a tendance à attirer fortement les électrons dans les liaisons chimiques ?',
                        'choices' => [
                            ['choice_text' => Oxygène', 'is_correct' => true],
                            ['choice_text' => Sodium', 'is_correct' => false],
                            ['choice_text' => Potassium', 'is_correct' => false],
                            ['choice_text' => Césium', 'is_correct' => false],
                        ],
                        'explanation' => 'L’oxygène est nettement plus électronégatif que les métaux alcalins proposés. Il attire donc fortement les électrons de liaison.'
                    ],
                ],
            ],

            [
                'title' => 'Comparer les différents types de liaisons',
                'description' => 'Apprenez à choisir entre liaison ionique, covalente et métallique en observant la composition et les propriétés d’une substance.',
                'questions' => [
                    [
                        'question' => 'Un composé est formé d’un métal et d’un non-métal, avec transfert d’électrons. Quel type de liaison faut-il envisager ?',
                        'choices' => [
                            ['choice_text' => 'Liaison ionique', 'is_correct' => true],
                            ['choice_text' => 'Liaison métallique', 'is_correct' => false],
                            ['choice_text' => 'Liaison covalente non polaire', 'is_correct' => false],
                            ['choice_text' => 'Aucune liaison chimique', 'is_correct' => false],
                        ],
                        'explanation' => 'Le transfert d’électrons entre un métal et un non-métal conduit généralement à des ions opposés et donc à une liaison ionique.'
                    ],
                    [
                        'question' => 'Deux non-métaux partagent des électrons. Quel type de liaison est le plus probable ?',
                        'choices' => [
                            ['choice_text' => 'Liaison covalente', 'is_correct' => true],
                            ['choice_text' => 'Liaison métallique', 'is_correct' => false],
                            ['choice_text' => 'Liaison ionique pure', 'is_correct' => false],
                            ['choice_text' => 'Liaison nucléaire', 'is_correct' => false],
                        ],
                        'explanation' => 'Les liaisons entre non-métaux reposent généralement sur le partage d’électrons, donc sur des liaisons covalentes.'
                    ],
                    [
                        'question' => 'Un matériau est constitué d’atomes métalliques et conduit très bien le courant. Quel type de liaison caractérise principalement sa structure ?',
                        'choices' => [
                            ['choice_text' => 'Liaison métallique', 'is_correct' => true],
                            ['choice_text' => 'Liaison ionique', 'is_correct' => false],
                            ['choice_text' => 'Liaison covalente dans chaque paire d’atomes uniquement', 'is_correct' => false],
                            ['choice_text' => 'Aucune interaction', 'is_correct' => false],
                        ],
                        'explanation' => 'La liaison métallique implique des électrons délocalisés, ce qui contribue à la bonne conductivité des métaux.'
                    ],
                    [
                        'question' => 'Lequel de ces exemples est le plus typique d’un solide ionique ?',
                        'choices' => [
                            ['choice_text' => Chlorure de sodium', 'is_correct' => true],
                            ['choice_text' => Dioxygène', 'is_correct' => false],
                            ['choice_text' => Cuivre métallique', 'is_correct' => false],
                            ['choice_text' => Méthane', 'is_correct' => false],
                        ],
                        'explanation' => 'Le chlorure de sodium est constitué d’ions Na⁺ et Cl⁻ organisés dans un réseau cristallin.'
                    ],
                    [
                        'question' => 'Lequel est constitué de molécules covalentes ?',
                        'choices' => [
                            ['choice_text' => CO₂', 'is_correct' => true],
                            ['choice_text' => NaCl', 'is_correct' => false],
                            ['choice_text' => CaO', 'is_correct' => false],
                            ['choice_text' => Cu', 'is_correct' => false],
                        ],
                        'explanation' => 'CO₂ est une molécule formée d’un carbone et de deux oxygènes reliés par des liaisons covalentes.'
                    ],
                    [
                        'question' => 'Pourquoi les solides ioniques sont-ils généralement solides à température ambiante ?',
                        'choices' => [
                            ['choice_text' => 'Les ions opposés sont fortement attirés dans un réseau organisé', 'is_correct' => true],
                            ['choice_text' => 'Ils ne contiennent aucun électron', 'is_correct' => false],
                            ['choice_text' => 'Les noyaux sont fusionnés', 'is_correct' => false],
                            ['choice_text' => 'Ils sont constitués uniquement de gaz', 'is_correct' => false],
                        ],
                        'explanation' => 'Les attractions électrostatiques entre nombreux ions voisins maintiennent le réseau ionique dans une structure solide.'
                    ],
                    [
                        'question' => 'Un matériau peut être étiré en fil sans se casser facilement. Quelle famille de matériaux cela évoque-t-elle le plus ?',
                        'choices' => [
                            ['choice_text' => 'Les métaux', 'is_correct' => true],
                            ['choice_text' => 'Les gaz nobles uniquement', 'is_correct' => false],
                            ['choice_text' => 'Les sels ioniques uniquement', 'is_correct' => false],
                            ['choice_text' => 'Les molécules individuelles uniquement', 'is_correct' => false],
                        ],
                        'explanation' => 'La ductilité est une propriété fréquente des métaux. Leur liaison métallique permet aux couches atomiques de se déplacer tout en maintenant la cohésion.'
                    ],
                    [
                        'question' => 'Quelle différence simple distingue une liaison ionique d’une liaison covalente ?',
                        'choices' => [
                            ['choice_text' => 'La liaison ionique implique surtout un transfert d’électrons, tandis que la covalente implique un partage', 'is_correct' => true],
                            ['choice_text' => 'Les deux reposent uniquement sur les neutrons', 'is_correct' => false],
                            ['choice_text' => 'La liaison covalente n’implique jamais d’électrons', 'is_correct' => false],
                            ['choice_text' => 'La liaison ionique ne concerne jamais les charges', 'is_correct' => false],
                        ],
                        'explanation' => 'C’est la distinction de base à retenir : transfert d’électrons dans le modèle ionique et partage d’électrons dans le modèle covalent.'
                    ],
                    [
                        'question' => 'Une substance solide conduit très bien l’électricité et possède un aspect métallique brillant. Quel modèle de liaison paraît le plus cohérent ?',
                        'choices' => [
                            ['choice_text' => 'Liaison métallique', 'is_correct' => true],
                            ['choice_text' => 'Liaison ionique uniquement', 'is_correct' => false],
                            ['choice_text' => 'Liaison covalente entre petites molécules', 'is_correct' => false],
                            ['choice_text' => 'Absence de liaison', 'is_correct' => false],
                        ],
                        'explanation' => 'La conductivité élevée et l’aspect métallique sont des indices typiques d’un matériau métallique.'
                    ],
                    [
                        'question' => 'Un étudiant doit identifier la liaison principale dans H₂O, NaCl et Cu. Quelle série est correcte ?',
                        'choices' => [
                            ['choice_text' => 'Covalente, ionique, métallique', 'is_correct' => true],
                            ['choice_text' => 'Ionique, covalente, métallique', 'is_correct' => false],
                            ['choice_text' => 'Métallique, ionique, covalente', 'is_correct' => false],
                            ['choice_text' => 'Ionique, métallique, covalente', 'is_correct' => false],
                        ],
                        'explanation' => 'H₂O est une molécule covalente, NaCl est un solide ionique et Cu est un métal lié par des interactions métalliques.'
                    ],
                ],
            ],

            [
                'title' => 'Écrire des formules à partir des liaisons',
                'description' => 'Entraînez-vous à construire des formules simples à partir des charges ioniques et à lire correctement les indices dans les formules moléculaires.',
                'questions' => [
                    [
                        'question' => 'Quelle formule représente le composé formé par Na⁺ et Cl⁻ ?',
                        'choices' => [
                            ['choice_text' => NaCl', 'is_correct' => true],
                            ['choice_text' => Na₂Cl', 'is_correct' => false],
                            ['choice_text' => NaCl₂', 'is_correct' => false],
                            ['choice_text' => Na₂Cl₂', 'is_correct' => false],
                        ],
                        'explanation' => 'Une charge +1 et une charge -1 se compensent directement. La formule la plus simple est donc NaCl.'
                    ],
                    [
                        'question' => 'Quelle formule correspond à Mg²⁺ et O²⁻ ?',
                        'choices' => [
                            ['choice_text' => MgO', 'is_correct' => true],
                            ['choice_text' => Mg₂O', 'is_correct' => false],
                            ['choice_text' => MgO₂', 'is_correct' => false],
                            ['choice_text' => Mg₂O₂', 'is_correct' => false],
                        ],
                        'explanation' => 'Les charges +2 et -2 se compensent dans un rapport 1:1. La formule simplifiée est MgO.'
                    ],
                    [
                        'question' => 'Quelle formule faut-il écrire pour un composé constitué de Ca²⁺ et F⁻ ?',
                        'choices' => [
                            ['choice_text' => CaF₂', 'is_correct' => true],
                            ['choice_text' => CaF', 'is_correct' => false],
                            ['choice_text' => Ca₂F', 'is_correct' => false],
                            ['choice_text' => Ca₂F₂', 'is_correct' => false],
                        ],
                        'explanation' => 'Un Ca²⁺ nécessite deux F⁻ pour obtenir une charge totale nulle : +2 + (-1) + (-1) = 0.'
                    ],
                    [
                        'question' => 'Quel indice dans H₂O indique le nombre d’atomes d’hydrogène par molécule ?',
                        'choices' => [
                            ['choice_text' => 2', 'is_correct' => true],
                            ['choice_text' => 1', 'is_correct' => false],
                            ['choice_text' => 0', 'is_correct' => false],
                            ['choice_text' => 8', 'is_correct' => false],
                        ],
                        'explanation' => 'Le petit 2 placé après H signifie qu’une molécule d’eau contient deux atomes d’hydrogène.'
                    ],
                    [
                        'question' => 'Dans CO₂, combien y a-t-il d’atomes au total dans une molécule ?',
                        'choices' => [
                            ['choice_text' => 3', 'is_correct' => true],
                            ['choice_text' => 2', 'is_correct' => false],
                            ['choice_text' => 4', 'is_correct' => false],
                            ['choice_text' => 6', 'is_correct' => false],
                        ],
                        'explanation' => 'CO₂ contient un atome de carbone et deux atomes d’oxygène, soit trois atomes au total.'
                    ],
                    [
                        'question' => 'Quelle formule représente correctement le composé formé par Al³⁺ et O²⁻ ?',
                        'choices' => [
                            ['choice_text' => Al₂O₃', 'is_correct' => true],
                            ['choice_text' => AlO', 'is_correct' => false],
                            ['choice_text' => AlO₂', 'is_correct' => false],
                            ['choice_text' => Al₃O₂', 'is_correct' => false],
                        ],
                        'explanation' => 'Deux Al³⁺ donnent +6 et trois O²⁻ donnent -6. La formule Al₂O₃ est donc électriquement neutre.'
                    ],
                    [
                        'question' => 'Quelle formule correspond au composé formé par K⁺ et O²⁻ ?',
                        'choices' => [
                            ['choice_text' => K₂O', 'is_correct' => true],
                            ['choice_text' => KO', 'is_correct' => false],
                            ['choice_text' => KO₂', 'is_correct' => false],
                            ['choice_text' => K₂O₂', 'is_correct' => false],
                        ],
                        'explanation' => 'Il faut deux ions K⁺ pour compenser un ion O²⁻ : +1 + +1 + (-2) = 0. La formule est K₂O.'
                    ],
                    [
                        'question' => 'Un élève écrit Mg₂Cl pour le chlorure de magnésium. Pourquoi cette formule ne convient-elle pas ?',
                        'choices' => [
                            ['choice_text' => 'Elle donne deux Mg²⁺ pour un seul Cl⁻, donc les charges ne se compensent pas', 'is_correct' => true],
                            ['choice_text' => 'Le magnésium ne forme jamais de liaison ionique', 'is_correct' => false],
                            ['choice_text' => 'Le chlore est toujours positif', 'is_correct' => false],
                            ['choice_text' => 'Les indices n’ont aucune importance dans une formule', 'is_correct' => false],
                        ],
                        'explanation' => 'Deux Mg²⁺ donnent une charge totale de +4, tandis qu’un Cl⁻ ne donne que -1. La formule correcte est MgCl₂.'
                    ],
                    [
                        'question' => 'Quelle formule contient deux atomes d’oxygène et un atome de carbone dans chaque molécule ?',
                        'choices' => [
                            ['choice_text' => CO₂', 'is_correct' => true],
                            ['choice_text' => C₂O', 'is_correct' => false],
                            ['choice_text' => CO', 'is_correct' => false],
                            ['choice_text' => C₂O₂', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans CO₂, C apparaît une fois et O porte l’indice 2. Chaque molécule contient donc 1 carbone et 2 oxygènes.'
                    ],
                    [
                        'question' => 'On combine Li⁺ avec N³⁻. Quel rapport d’ions donne un composé neutre ?',
                        'choices' => [
                            ['choice_text' => 3 Li⁺ pour 1 N³⁻', 'is_correct' => true],
                            ['choice_text' => 1 Li⁺ pour 3 N³⁻', 'is_correct' => false],
                            ['choice_text' => 1 Li⁺ pour 1 N³⁻', 'is_correct' => false],
                            ['choice_text' => 2 Li⁺ pour 1 N³⁻', 'is_correct' => false],
                        ],
                        'explanation' => 'Trois ions Li⁺ donnent +3 et un ion N³⁻ donne -3. Le composé neutre a donc la formule Li₃N.'
                    ],
                ],
            ],

            [
                'title' => 'Révision intégrée des liaisons chimiques',
                'description' => 'Réunissez les notions essentielles sur les liaisons ioniques, covalentes et métalliques dans des situations simples de raisonnement.',
                'questions' => [
                    [
                        'question' => 'Une liaison chimique met principalement en jeu les :',
                        'choices' => [
                            ['choice_text' => 'Électrons de valence', 'is_correct' => true],
                            ['choice_text' => 'Neutrons du noyau', 'is_correct' => false],
                            ['choice_text' => 'Protons uniquement', 'is_correct' => false],
                            ['choice_text' => 'Photons uniquement', 'is_correct' => false],
                        ],
                        'explanation' => 'Les électrons de valence sont ceux qui participent le plus directement aux interactions et aux liaisons entre atomes.'
                    ],
                    [
                        'question' => 'Un métal perd un électron et un non-métal le gagne. Quel type de liaison peut alors se former entre eux ?',
                        'choices' => [
                            ['choice_text' => 'Une liaison ionique', 'is_correct' => true],
                            ['choice_text' => 'Une liaison métallique pure', 'is_correct' => false],
                            ['choice_text' => 'Une liaison covalente non polaire obligatoire', 'is_correct' => false],
                            ['choice_text' => 'Aucune attraction', 'is_correct' => false],
                        ],
                        'explanation' => 'Le transfert crée un ion positif et un ion négatif. Leur attraction électrique donne le modèle d’une liaison ionique.'
                    ],
                    [
                        'question' => 'Deux atomes de chlore forment Cl₂. Que font-ils avec leurs électrons de valence ?',
                        'choices' => [
                            ['choice_text' => 'Ils partagent une paire d’électrons', 'is_correct' => true],
                            ['choice_text' => 'L’un perd tous ses électrons', 'is_correct' => false],
                            ['choice_text' => 'Ils échangent leurs noyaux', 'is_correct' => false],
                            ['choice_text' => 'Ils transforment les électrons en neutrons', 'is_correct' => false],
                        ],
                        'explanation' => 'Les deux atomes de chlore partagent une paire d’électrons et forment une liaison covalente simple.'
                    ],
                    [
                        'question' => 'Un composé contient les ions Ca²⁺ et O²⁻. Quelle formule est correcte ?',
                        'choices' => [
                            ['choice_text' => CaO', 'is_correct' => true],
                            ['choice_text' => Ca₂O', 'is_correct' => false],
                            ['choice_text' => CaO₂', 'is_correct' => false],
                            ['choice_text' => Ca₂O₂', 'is_correct' => false],
                        ],
                        'explanation' => 'Les charges +2 et -2 s’annulent avec un ion de chaque type. La formule simplifiée est donc CaO.'
                    ],
                    [
                        'question' => 'Quel énoncé décrit le mieux une liaison covalente ?',
                        'choices' => [
                            ['choice_text' => 'Deux atomes partagent une ou plusieurs paires d’électrons', 'is_correct' => true],
                            ['choice_text' => 'Deux noyaux fusionnent', 'is_correct' => false],
                            ['choice_text' => 'Un neutron est transféré entre deux atomes', 'is_correct' => false],
                            ['choice_text' => 'Les électrons disparaissent', 'is_correct' => false],
                        ],
                        'explanation' => 'Le partage des électrons est la caractéristique fondamentale d’une liaison covalente.'
                    ],
                    [
                        'question' => 'Pourquoi le cuivre conduit-il mieux l’électricité que de nombreuses substances moléculaires ?',
                        'choices' => [
                            ['choice_text' => 'Ses électrons peuvent se déplacer relativement librement dans le réseau métallique', 'is_correct' => true],
                            ['choice_text' => 'Le cuivre ne possède aucun électron', 'is_correct' => false],
                            ['choice_text' => 'Ses neutrons circulent dans les fils', 'is_correct' => false],
                            ['choice_text' => 'Toutes ses molécules ont une triple liaison', 'is_correct' => false],
                        ],
                        'explanation' => 'La liaison métallique permet à certains électrons de se déplacer dans le matériau, ce qui favorise la conduction électrique.'
                    ],
                    [
                        'question' => 'Une molécule possède une liaison double entre deux atomes. Combien d’électrons sont partagés dans cette liaison ?',
                        'choices' => [
                            ['choice_text' => 4', 'is_correct' => true],
                            ['choice_text' => 2', 'is_correct' => false],
                            ['choice_text' => 6', 'is_correct' => false],
                            ['choice_text' => 8', 'is_correct' => false],
                        ],
                        'explanation' => 'Une liaison double contient deux paires d’électrons partagées, soit quatre électrons.'
                    ],
                    [
                        'question' => 'Un étudiant observe une substance solide qui conduit l’électricité et peut être étirée en fil. Quel type de liaison doit-il envisager en premier ?',
                        'choices' => [
                            ['choice_text' => 'Liaison métallique', 'is_correct' => true],
                            ['choice_text' => 'Liaison covalente entre petites molécules', 'is_correct' => false],
                            ['choice_text' => 'Liaison ionique uniquement', 'is_correct' => false],
                            ['choice_text' => 'Aucune liaison chimique', 'is_correct' => false],
                        ],
                        'explanation' => 'La conductivité électrique et la ductilité sont deux propriétés typiques des métaux et sont liées à leur structure métallique.'
                    ],
                    [
                        'question' => 'Un élève affirme que NaCl et H₂O sont tous deux des composés ioniques parce qu’ils contiennent plusieurs éléments. Quelle correction faut-il faire ?',
                        'choices' => [
                            ['choice_text' => 'NaCl est principalement ionique, tandis que les liaisons dans H₂O sont covalentes', 'is_correct' => true],
                            ['choice_text' => 'Tous les composés à plusieurs éléments sont ioniques', 'is_correct' => false],
                            ['choice_text' => 'H₂O est métallique', 'is_correct' => false],
                            ['choice_text' => 'NaCl ne contient aucune liaison', 'is_correct' => false],
                        ],
                        'explanation' => 'Le nombre d’éléments ne détermine pas à lui seul le type de liaison. NaCl forme des ions, tandis que H₂O est une molécule covalente.'
                    ],
                    [
                        'question' => 'Un atome A possède un électron de valence et un atome B en possède sept. Quelle situation pourrait se produire entre eux ?',
                        'choices' => [
                            ['choice_text' => 'A peut perdre un électron et B peut en gagner un', 'is_correct' => true],
                            ['choice_text' => 'A et B doivent tous les deux perdre sept électrons', 'is_correct' => false],
                            ['choice_text' => 'A et B ne peuvent jamais interagir', 'is_correct' => false],
                            ['choice_text' => 'Les deux atomes doivent devenir des métaux', 'is_correct' => false],
                        ],
                        'explanation' => 'Un électron de valence est relativement facile à perdre pour certains métaux, tandis qu’un atome qui en possède sept peut facilement en gagner un. Cela favorise une liaison ionique simple.'
                    ],
                ],
            ],
        ];

        $quizSettings = [
            0 => ['duration' => 15, 'passing_score' => 50],
            1 => ['duration' => 20, 'passing_score' => 55],
            2 => ['duration' => 20, 'passing_score' => 60],
            3 => ['duration' => 20, 'passing_score' => 60],
            4 => ['duration' => 20, 'passing_score' => 60],
            5 => ['duration' => 20, 'passing_score' => 60],
            6 => ['duration' => 20, 'passing_score' => 65],
            7 => ['duration' => 25, 'passing_score' => 65],
        ];

        foreach ($quizzes as $quizIndex => $quizData) {
            $settings = $quizSettings[$quizIndex];

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