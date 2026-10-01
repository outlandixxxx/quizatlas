<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class AtomicStructureBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'atomic-structure')->firstOrFail();

        $quizzes = [
            [
                'title' => 'Découvrir l’atome',
                'description' => 'Découvrez ce qu’est un atome, ses principales particules et la manière dont elles sont organisées.',
                'questions' => [
                    [
                        'question' => 'Quelle phrase décrit le mieux un atome ?',
                        'choices' => [
                            ['choice_text' => 'Une très petite unité de matière qui conserve l’identité d’un élément', 'is_correct' => true],
                            ['choice_text' => 'Une molécule toujours composée de trois éléments', 'is_correct' => false],
                            ['choice_text' => 'Une particule visible à l’œil nu', 'is_correct' => false],
                            ['choice_text' => 'Un mélange de plusieurs substances', 'is_correct' => false],
                        ],
                        'explanation' => 'Un atome est une unité fondamentale d’un élément chimique. Il est extrêmement petit et ne peut pas être observé directement à l’œil nu.'
                    ],
                    [
                        'question' => 'Laquelle de ces particules possède une charge électrique négative ?',
                        'choices' => [
                            ['choice_text' => 'Le proton', 'is_correct' => false],
                            ['choice_text' => 'Le neutron', 'is_correct' => false],
                            ['choice_text' => 'L’électron', 'is_correct' => true],
                            ['choice_text' => 'Le noyau', 'is_correct' => false],
                        ],
                        'explanation' => 'L’électron porte une charge négative. Le proton est positif et le neutron est électriquement neutre.'
                    ],
                    [
                        'question' => 'Où trouve-t-on principalement les protons et les neutrons dans un atome ?',
                        'choices' => [
                            ['choice_text' => 'Dans le noyau', 'is_correct' => true],
                            ['choice_text' => 'Dans les couches électroniques uniquement', 'is_correct' => false],
                            ['choice_text' => 'À l’extérieur de l’atome', 'is_correct' => false],
                            ['choice_text' => 'Dans les liaisons entre molécules', 'is_correct' => false],
                        ],
                        'explanation' => 'Le noyau est la partie centrale de l’atome. Il contient les protons et les neutrons, tandis que les électrons occupent la région autour du noyau.'
                    ],
                    [
                        'question' => 'Un atome neutre possède 8 protons. Combien d’électrons possède-t-il ?',
                        'choices' => [
                            ['choice_text' => '4', 'is_correct' => false],
                            ['choice_text' => '8', 'is_correct' => true],
                            ['choice_text' => '16', 'is_correct' => false],
                            ['choice_text' => '2', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans un atome neutre, le nombre de protons positifs est égal au nombre d’électrons négatifs. Il possède donc 8 électrons.'
                    ],
                    [
                        'question' => 'Quelle particule n’a pas de charge électrique ?',
                        'choices' => [
                            ['choice_text' => 'Le proton', 'is_correct' => false],
                            ['choice_text' => 'L’électron', 'is_correct' => false],
                            ['choice_text' => 'Le neutron', 'is_correct' => true],
                            ['choice_text' => 'Le cation', 'is_correct' => false],
                        ],
                        'explanation' => 'Le neutron est électriquement neutre. Il se trouve dans le noyau avec les protons.'
                    ],
                    [
                        'question' => 'Pourquoi dit-on que le noyau contient presque toute la masse de l’atome ?',
                        'choices' => [
                            ['choice_text' => 'Les protons et les neutrons sont beaucoup plus massifs que les électrons', 'is_correct' => true],
                            ['choice_text' => 'Les électrons n’existent que dans certains atomes', 'is_correct' => false],
                            ['choice_text' => 'Le noyau est toujours vide', 'is_correct' => false],
                            ['choice_text' => 'Les électrons sont plus gros que les protons', 'is_correct' => false],
                        ],
                        'explanation' => 'Les électrons ont une masse beaucoup plus faible que celle des protons et des neutrons. L’essentiel de la masse de l’atome se trouve donc dans le noyau.'
                    ],
                    [
                        'question' => 'Un atome possède 11 protons, 11 électrons et 12 neutrons. Quelle est sa charge globale ?',
                        'choices' => [
                            ['choice_text' => '+1', 'is_correct' => false],
                            ['choice_text' => '-1', 'is_correct' => false],
                            ['choice_text' => '0', 'is_correct' => true],
                            ['choice_text' => '+12', 'is_correct' => false],
                        ],
                        'explanation' => 'Les 11 protons positifs sont compensés par les 11 électrons négatifs. La charge totale est donc nulle.'
                    ],
                    [
                        'question' => 'Quelle différence principale existe entre un proton et un électron ?',
                        'choices' => [
                            ['choice_text' => 'Le proton est positif et l’électron est négatif', 'is_correct' => true],
                            ['choice_text' => 'Les deux sont toujours positifs', 'is_correct' => false],
                            ['choice_text' => 'Le proton est neutre et l’électron positif', 'is_correct' => false],
                            ['choice_text' => 'Ils ont exactement la même charge', 'is_correct' => false],
                        ],
                        'explanation' => 'Le proton porte une charge positive alors que l’électron porte une charge négative. Leurs masses sont également très différentes.'
                    ],
                    [
                        'question' => 'Un élève affirme : « Si un atome perd un électron, il devient un nouvel élément. » Quelle correction faut-il lui donner ?',
                        'choices' => [
                            ['choice_text' => 'Perdre un électron forme un ion mais ne change pas l’élément', 'is_correct' => true],
                            ['choice_text' => 'Perdre un électron détruit le noyau', 'is_correct' => false],
                            ['choice_text' => 'Perdre un électron transforme toujours l’atome en neutron', 'is_correct' => false],
                            ['choice_text' => 'Perdre un électron double le nombre de protons', 'is_correct' => false],
                        ],
                        'explanation' => 'L’identité d’un élément dépend de son nombre de protons. Perdre un électron change la charge de l’atome, mais pas son élément.'
                    ],
                    [
                        'question' => 'Un atome possède 6 protons et 6 électrons. Il gagne ensuite 2 électrons. Quelle est sa nouvelle charge ?',
                        'choices' => [
                            ['choice_text' => '+2', 'is_correct' => false],
                            ['choice_text' => '0', 'is_correct' => false],
                            ['choice_text' => '-2', 'is_correct' => true],
                            ['choice_text' => '-6', 'is_correct' => false],
                        ],
                        'explanation' => 'Après avoir gagné deux électrons, l’atome possède 6 charges positives et 8 charges négatives. La charge nette est donc de -2.'
                    ],
                ],
            ],

            [
                'title' => 'Protons, neutrons et électrons',
                'description' => 'Entraînez-vous à compter les particules subatomiques et à relier ces nombres au comportement de l’atome.',
                'questions' => [
                    [
                        'question' => 'Le numéro atomique d’un élément correspond au nombre de :',
                        'choices' => [
                            ['choice_text' => 'Protons dans le noyau', 'is_correct' => true],
                            ['choice_text' => 'Neutrons seulement', 'is_correct' => false],
                            ['choice_text' => 'Électrons plus neutrons', 'is_correct' => false],
                            ['choice_text' => 'Particules du noyau au total', 'is_correct' => false],
                        ],
                        'explanation' => 'Le numéro atomique Z indique le nombre de protons dans le noyau. C’est lui qui définit l’identité de l’élément.'
                    ],
                    [
                        'question' => 'Un atome neutre de fluor possède 9 protons. Combien a-t-il d’électrons ?',
                        'choices' => [
                            ['choice_text' => '18', 'is_correct' => false],
                            ['choice_text' => '9', 'is_correct' => true],
                            ['choice_text' => '10', 'is_correct' => false],
                            ['choice_text' => '8', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans un atome neutre, les charges positives des protons et négatives des électrons se compensent. Il y a donc 9 électrons.'
                    ],
                    [
                        'question' => 'Un noyau contient 17 protons et 18 neutrons. Quel est le nombre de nucléons ?',
                        'choices' => [
                            ['choice_text' => '18', 'is_correct' => false],
                            ['choice_text' => '17', 'is_correct' => false],
                            ['choice_text' => '35', 'is_correct' => true],
                            ['choice_text' => '1', 'is_correct' => false],
                        ],
                        'explanation' => 'Le nombre de nucléons correspond au nombre total de protons et de neutrons. Ici, 17 + 18 = 35.'
                    ],
                    [
                        'question' => 'Un atome de sodium possède 11 protons et 12 neutrons. Quel est son nombre de masse ?',
                        'choices' => [
                            ['choice_text' => '11', 'is_correct' => false],
                            ['choice_text' => '12', 'is_correct' => false],
                            ['choice_text' => '23', 'is_correct' => true],
                            ['choice_text' => '132', 'is_correct' => false],
                        ],
                        'explanation' => 'Le nombre de masse A est la somme des protons et des neutrons : 11 + 12 = 23.'
                    ],
                    [
                        'question' => 'Deux atomes ont tous deux 12 protons. L’un possède 12 neutrons et l’autre 14. S’agit-il du même élément ?',
                        'choices' => [
                            ['choice_text' => 'Oui, car ils ont le même nombre de protons', 'is_correct' => true],
                            ['choice_text' => 'Non, car le nombre de neutrons est différent', 'is_correct' => false],
                            ['choice_text' => 'Non, car l’un doit être un métal', 'is_correct' => false],
                            ['choice_text' => 'Impossible de le savoir', 'is_correct' => false],
                        ],
                        'explanation' => 'Le nombre de protons détermine l’élément. Ces deux atomes appartiennent donc au même élément mais peuvent être des isotopes différents.'
                    ],
                    [
                        'question' => 'Un ion possède 13 protons et 10 électrons. Quelle est sa charge ?',
                        'choices' => [
                            ['choice_text' => '-3', 'is_correct' => false],
                            ['choice_text' => '+3', 'is_correct' => true],
                            ['choice_text' => '+23', 'is_correct' => false],
                            ['choice_text' => '0', 'is_correct' => false],
                        ],
                        'explanation' => 'Il y a trois charges positives de plus que de charges négatives : 13 - 10 = +3.'
                    ],
                    [
                        'question' => 'Pourquoi un neutron peut-il être présent dans un noyau sans rendre l’atome électriquement positif ?',
                        'choices' => [
                            ['choice_text' => 'Parce qu’un neutron n’a pas de charge électrique', 'is_correct' => true],
                            ['choice_text' => 'Parce qu’il porte une charge négative', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’il est situé hors du noyau', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’il détruit les protons', 'is_correct' => false],
                        ],
                        'explanation' => 'Le neutron est électriquement neutre. Il contribue à la masse du noyau sans ajouter de charge positive ou négative.'
                    ],
                    [
                        'question' => 'Un ion négatif possède 8 protons et 10 électrons. Combien de charges négatives de plus que de charges positives possède-t-il ?',
                        'choices' => [
                            ['choice_text' => '1', 'is_correct' => false],
                            ['choice_text' => '2', 'is_correct' => true],
                            ['choice_text' => '8', 'is_correct' => false],
                            ['choice_text' => '18', 'is_correct' => false],
                        ],
                        'explanation' => 'Il y a 10 électrons négatifs contre 8 protons positifs. La différence est de 2 charges négatives.'
                    ],
                    [
                        'question' => 'Un élève confond le nombre de masse et le numéro atomique. Quelle phrase peut l’aider ?',
                        'choices' => [
                            ['choice_text' => 'Le numéro atomique compte les protons ; le nombre de masse compte protons et neutrons', 'is_correct' => true],
                            ['choice_text' => 'Les deux nombres comptent uniquement les électrons', 'is_correct' => false],
                            ['choice_text' => 'Le nombre de masse compte seulement les neutrons', 'is_correct' => false],
                            ['choice_text' => 'Le numéro atomique change selon la température', 'is_correct' => false],
                        ],
                        'explanation' => 'Le numéro atomique Z est le nombre de protons. Le nombre de masse A représente la somme des protons et des neutrons.'
                    ],
                    [
                        'question' => 'Un atome possède un noyau contenant 20 protons et 22 neutrons. S’il est neutre, combien d’électrons possède-t-il ?',
                        'choices' => [
                            ['choice_text' => '22', 'is_correct' => false],
                            ['choice_text' => '42', 'is_correct' => false],
                            ['choice_text' => '20', 'is_correct' => true],
                            ['choice_text' => '2', 'is_correct' => false],
                        ],
                        'explanation' => 'Pour être neutre, l’atome doit avoir autant d’électrons que de protons. Il possède donc 20 électrons.'
                    ],
                ],
            ],

            [
                'title' => 'Numéro atomique et nombre de masse',
                'description' => 'Apprenez à lire et à utiliser les nombres qui décrivent la composition du noyau d’un atome.',
                'questions' => [
                    [
                        'question' => 'Quel symbole représente généralement le numéro atomique ?',
                        'choices' => [
                            ['choice_text' => 'Z', 'is_correct' => true],
                            ['choice_text' => 'A', 'is_correct' => false],
                            ['choice_text' => 'N', 'is_correct' => false],
                            ['choice_text' => 'E', 'is_correct' => false],
                        ],
                        'explanation' => 'En notation nucléaire, Z désigne le numéro atomique, c’est-à-dire le nombre de protons.'
                    ],
                    [
                        'question' => 'Le nombre de masse A représente :',
                        'choices' => [
                            ['choice_text' => 'Le nombre de protons uniquement', 'is_correct' => false],
                            ['choice_text' => 'Le nombre total de protons et de neutrons', 'is_correct' => true],
                            ['choice_text' => 'Le nombre d’électrons uniquement', 'is_correct' => false],
                            ['choice_text' => 'Le nombre de couches électroniques', 'is_correct' => false],
                        ],
                        'explanation' => 'Le nombre de masse correspond au total des nucléons, c’est-à-dire des protons et des neutrons présents dans le noyau.'
                    ],
                    [
                        'question' => 'Un atome a Z = 8 et A = 16. Combien possède-t-il de neutrons ?',
                        'choices' => [
                            ['choice_text' => '8', 'is_correct' => true],
                            ['choice_text' => '16', 'is_correct' => false],
                            ['choice_text' => '24', 'is_correct' => false],
                            ['choice_text' => '4', 'is_correct' => false],
                        ],
                        'explanation' => 'Le nombre de neutrons est A - Z. Ici, 16 - 8 = 8 neutrons.'
                    ],
                    [
                        'question' => 'Un atome possède Z = 17 et A = 37. Combien de neutrons trouve-t-on dans son noyau ?',
                        'choices' => [
                            ['choice_text' => '20', 'is_correct' => true],
                            ['choice_text' => '17', 'is_correct' => false],
                            ['choice_text' => '37', 'is_correct' => false],
                            ['choice_text' => '54', 'is_correct' => false],
                        ],
                        'explanation' => 'Nombre de neutrons = A - Z = 37 - 17 = 20.'
                    ],
                    [
                        'question' => 'Deux atomes ont respectivement A = 23 et A = 24, mais possèdent tous deux Z = 11. Que peut-on dire ?',
                        'choices' => [
                            ['choice_text' => 'Ce sont deux isotopes du même élément', 'is_correct' => true],
                            ['choice_text' => 'Ce sont forcément deux éléments différents', 'is_correct' => false],
                            ['choice_text' => 'Ils ont le même nombre de neutrons', 'is_correct' => false],
                            ['choice_text' => 'Ils doivent avoir des charges opposées', 'is_correct' => false],
                        ],
                        'explanation' => 'Même Z signifie même élément. Comme A est différent, le nombre de neutrons est différent : ce sont donc des isotopes.'
                    ],
                    [
                        'question' => 'Un atome neutre a un numéro atomique de 6. Que peut-on déduire immédiatement ?',
                        'choices' => [
                            ['choice_text' => 'Il possède 6 protons et 6 électrons', 'is_correct' => true],
                            ['choice_text' => 'Il possède 6 neutrons et 12 électrons', 'is_correct' => false],
                            ['choice_text' => 'Il possède 12 protons', 'is_correct' => false],
                            ['choice_text' => 'Il est forcément un ion', 'is_correct' => false],
                        ],
                        'explanation' => 'Z = 6 signifie 6 protons. Comme l’atome est neutre, il possède aussi 6 électrons.'
                    ],
                    [
                        'question' => 'Un noyau possède 9 protons et 10 neutrons. Quel est son nombre de masse ?',
                        'choices' => [
                            ['choice_text' => '9', 'is_correct' => false],
                            ['choice_text' => '10', 'is_correct' => false],
                            ['choice_text' => '19', 'is_correct' => true],
                            ['choice_text' => '90', 'is_correct' => false],
                        ],
                        'explanation' => 'Le nombre de masse est la somme des protons et des neutrons : 9 + 10 = 19.'
                    ],
                    [
                        'question' => 'Pourquoi deux isotopes d’un même élément ont-ils des propriétés chimiques souvent très proches ?',
                        'choices' => [
                            ['choice_text' => 'Ils ont le même nombre de protons et, pour des atomes neutres, la même organisation électronique', 'is_correct' => true],
                            ['choice_text' => 'Ils ont toujours exactement le même nombre de neutrons', 'is_correct' => false],
                            ['choice_text' => 'Ils ont des numéros atomiques différents', 'is_correct' => false],
                            ['choice_text' => 'Ils sont tous des ions', 'is_correct' => false],
                        ],
                        'explanation' => 'Les propriétés chimiques dépendent principalement des électrons. Deux isotopes neutres ont le même nombre de protons et d’électrons, même si leur nombre de neutrons diffère.'
                    ],
                    [
                        'question' => 'Un élève trouve un atome avec Z = 12 et A = 25. Son calcul donne 13 électrons pour un atome neutre. Où est son erreur ?',
                        'choices' => [
                            ['choice_text' => 'Il a utilisé le nombre de neutrons à la place du nombre de protons pour trouver les électrons', 'is_correct' => true],
                            ['choice_text' => 'Il a oublié d’additionner les neutrons', 'is_correct' => false],
                            ['choice_text' => 'Il a multiplié Z par A', 'is_correct' => false],
                            ['choice_text' => 'Il a utilisé la mauvaise unité', 'is_correct' => false],
                        ],
                        'explanation' => 'Pour un atome neutre, le nombre d’électrons est égal à Z, donc à 12. Le nombre 13 correspond ici au nombre de neutrons : 25 - 12 = 13.'
                    ],
                    [
                        'question' => 'Un atome possède 15 protons et 16 neutrons. Après avoir perdu un électron, quelle caractéristique change ?',
                        'choices' => [
                            ['choice_text' => 'Sa charge électrique', 'is_correct' => true],
                            ['choice_text' => 'Son nombre de protons', 'is_correct' => false],
                            ['choice_text' => 'Son nombre de neutrons', 'is_correct' => false],
                            ['choice_text' => 'Son élément chimique', 'is_correct' => false],
                        ],
                        'explanation' => 'Perdre un électron ne modifie ni le noyau ni l’identité de l’élément. Cela rend simplement l’atome plus positif.'
                    ],
                ],
            ],

            [
                'title' => 'Isotopes : une même famille, des noyaux différents',
                'description' => 'Comprenez la notion d’isotope et apprenez à comparer des atomes ayant le même nombre de protons mais un nombre différent de neutrons.',
                'questions' => [
                    [
                        'question' => 'Qu’est-ce qu’un isotope ?',
                        'choices' => [
                            ['choice_text' => 'Un atome d’un même élément qui possède un nombre différent de neutrons', 'is_correct' => true],
                            ['choice_text' => 'Un ion qui a toujours une charge négative', 'is_correct' => false],
                            ['choice_text' => 'Une molécule faite de deux éléments', 'is_correct' => false],
                            ['choice_text' => 'Un élément ayant un nouveau numéro atomique', 'is_correct' => false],
                        ],
                        'explanation' => 'Les isotopes appartiennent au même élément, donc ils ont le même nombre de protons, mais ils possèdent des nombres de neutrons différents.'
                    ],
                    [
                        'question' => 'Deux isotopes de carbone possèdent tous les deux :',
                        'choices' => [
                            ['choice_text' => '6 protons', 'is_correct' => true],
                            ['choice_text' => '6 neutrons', 'is_correct' => false],
                            ['choice_text' => 'Le même nombre de masse', 'is_correct' => false],
                            ['choice_text' => 'Des numéros atomiques différents', 'is_correct' => false],
                        ],
                        'explanation' => 'Le carbone a toujours 6 protons. Ce qui varie entre ses isotopes est le nombre de neutrons.'
                    ],
                    [
                        'question' => 'Le carbone-12 possède 6 protons. Combien a-t-il de neutrons ?',
                        'choices' => [
                            ['choice_text' => '6', 'is_correct' => true],
                            ['choice_text' => '12', 'is_correct' => false],
                            ['choice_text' => '18', 'is_correct' => false],
                            ['choice_text' => '4', 'is_correct' => false],
                        ],
                        'explanation' => 'Le nombre de neutrons est 12 - 6 = 6.'
                    ],
                    [
                        'question' => 'Le carbone-14 possède 6 protons. Combien de neutrons contient son noyau ?',
                        'choices' => [
                            ['choice_text' => '8', 'is_correct' => true],
                            ['choice_text' => '14', 'is_correct' => false],
                            ['choice_text' => '6', 'is_correct' => false],
                            ['choice_text' => '20', 'is_correct' => false],
                        ],
                        'explanation' => 'Nombre de neutrons = nombre de masse - numéro atomique = 14 - 6 = 8.'
                    ],
                    [
                        'question' => 'Le carbone-12 et le carbone-14 sont-ils le même élément ?',
                        'choices' => [
                            ['choice_text' => 'Oui, car ils ont tous les deux 6 protons', 'is_correct' => true],
                            ['choice_text' => 'Non, car leurs nombres de masse sont différents', 'is_correct' => false],
                            ['choice_text' => 'Non, car l’un est forcément un métal', 'is_correct' => false],
                            ['choice_text' => 'On ne peut pas le savoir', 'is_correct' => false],
                        ],
                        'explanation' => 'L’identité d’un élément est déterminée par le nombre de protons. Les deux atomes ont 6 protons et sont donc du carbone.'
                    ],
                    [
                        'question' => 'Pourquoi des isotopes ont-ils des masses différentes ?',
                        'choices' => [
                            ['choice_text' => 'Parce qu’ils n’ont pas le même nombre de neutrons', 'is_correct' => true],
                            ['choice_text' => 'Parce qu’ils ont toujours des charges différentes', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’ils n’ont pas le même nombre de protons', 'is_correct' => false],
                            ['choice_text' => 'Parce que leurs électrons sont beaucoup plus lourds', 'is_correct' => false],
                        ],
                        'explanation' => 'Les neutrons contribuent de façon importante à la masse du noyau. Plus il y en a, plus l’isotope possède une masse élevée.'
                    ],
                    [
                        'question' => 'Un élément possède deux isotopes : l’un a 10 neutrons et l’autre 12, mais ils ont le même nombre de protons. Que peut-on affirmer ?',
                        'choices' => [
                            ['choice_text' => 'Ils appartiennent au même élément', 'is_correct' => true],
                            ['choice_text' => 'Ils sont nécessairement deux ions', 'is_correct' => false],
                            ['choice_text' => 'Ils ont des numéros atomiques différents', 'is_correct' => false],
                            ['choice_text' => 'Ils ont la même masse', 'is_correct' => false],
                        ],
                        'explanation' => 'Le même nombre de protons signifie le même élément. La différence de neutrons explique simplement qu’il s’agit de deux isotopes.'
                    ],
                    [
                        'question' => 'Un étudiant dit : « Les isotopes sont des éléments complètement différents parce qu’ils ont des masses différentes. » Quelle réponse est correcte ?',
                        'choices' => [
                            ['choice_text' => 'La masse peut changer sans changer l’élément, si le nombre de protons reste identique', 'is_correct' => true],
                            ['choice_text' => 'Toute différence de masse crée un nouvel élément', 'is_correct' => false],
                            ['choice_text' => 'Seuls les électrons définissent l’élément', 'is_correct' => false],
                            ['choice_text' => 'Un isotope est toujours une molécule', 'is_correct' => false],
                        ],
                        'explanation' => 'Le nombre de protons détermine l’élément. Une variation du nombre de neutrons change l’isotope, pas l’identité de l’élément.'
                    ],
                    [
                        'question' => 'Un isotope contient 17 protons et 20 neutrons. Quel est son nombre de masse ?',
                        'choices' => [
                            ['choice_text' => '37', 'is_correct' => true],
                            ['choice_text' => '20', 'is_correct' => false],
                            ['choice_text' => '17', 'is_correct' => false],
                            ['choice_text' => '3', 'is_correct' => false],
                        ],
                        'explanation' => 'Le nombre de masse est la somme des protons et des neutrons : 17 + 20 = 37.'
                    ],
                    [
                        'question' => 'Un laboratoire étudie deux isotopes du même élément. Quelle grandeur reste nécessairement identique ?',
                        'choices' => [
                            ['choice_text' => 'Le numéro atomique', 'is_correct' => true],
                            ['choice_text' => 'Le nombre de neutrons', 'is_correct' => false],
                            ['choice_text' => 'Le nombre de masse', 'is_correct' => false],
                            ['choice_text' => 'La masse du noyau', 'is_correct' => false],
                        ],
                        'explanation' => 'Deux isotopes du même élément ont obligatoirement le même numéro atomique, puisque celui-ci correspond au nombre de protons.'
                    ],
                ],
            ],

            [
                'title' => 'Les ions et leur charge',
                'description' => 'Comprenez comment les atomes deviennent des ions, apprenez à déterminer leur charge et distinguez cations et anions.',
                'questions' => [
                    [
                        'question' => 'Un ion est :',
                        'choices' => [
                            ['choice_text' => 'Un atome ou groupe d’atomes qui possède une charge électrique', 'is_correct' => true],
                            ['choice_text' => 'Un atome qui contient forcément plus de neutrons que de protons', 'is_correct' => false],
                            ['choice_text' => 'Une particule toujours neutre', 'is_correct' => false],
                            ['choice_text' => 'Un mélange de deux éléments', 'is_correct' => false],
                        ],
                        'explanation' => 'Un ion possède une charge électrique parce qu’il a gagné ou perdu des électrons, ou, pour un ion polyatomique, parce que plusieurs atomes partagent une charge nette.'
                    ],
                    [
                        'question' => 'Comment appelle-t-on un ion positif ?',
                        'choices' => [
                            ['choice_text' => 'Un cation', 'is_correct' => true],
                            ['choice_text' => 'Un anion', 'is_correct' => false],
                            ['choice_text' => 'Un isotope', 'is_correct' => false],
                            ['choice_text' => 'Un neutron', 'is_correct' => false],
                        ],
                        'explanation' => 'Un cation est un ion positif. Il se forme généralement lorsqu’un atome perd un ou plusieurs électrons.'
                    ],
                    [
                        'question' => 'Comment appelle-t-on un ion négatif ?',
                        'choices' => [
                            ['choice_text' => 'Un anion', 'is_correct' => true],
                            ['choice_text' => 'Un cation', 'is_correct' => false],
                            ['choice_text' => 'Un isotope', 'is_correct' => false],
                            ['choice_text' => 'Un proton', 'is_correct' => false],
                        ],
                        'explanation' => 'Un anion est un ion négatif. Il possède plus d’électrons que l’atome neutre correspondant.'
                    ],
                    [
                        'question' => 'Un atome perd un électron. Que devient-il ?',
                        'choices' => [
                            ['choice_text' => 'Un ion positif', 'is_correct' => true],
                            ['choice_text' => 'Un ion négatif', 'is_correct' => false],
                            ['choice_text' => 'Un neutron', 'is_correct' => false],
                            ['choice_text' => 'Un isotope différent', 'is_correct' => false],
                        ],
                        'explanation' => 'Perdre une charge négative laisse un excès de charge positive. L’atome devient donc un cation.'
                    ],
                    [
                        'question' => 'Un atome gagne deux électrons. Quelle charge porte-t-il alors ?',
                        'choices' => [
                            ['choice_text' => '-2', 'is_correct' => true],
                            ['choice_text' => '+2', 'is_correct' => false],
                            ['choice_text' => '0', 'is_correct' => false],
                            ['choice_text' => '+1', 'is_correct' => false],
                        ],
                        'explanation' => 'Chaque électron apporte une charge -1. Le gain de deux électrons donne donc une charge nette de -2.'
                    ],
                    [
                        'question' => 'Un ion possède 12 protons et 10 électrons. Quelle est sa charge ?',
                        'choices' => [
                            ['choice_text' => '+2', 'is_correct' => true],
                            ['choice_text' => '-2', 'is_correct' => false],
                            ['choice_text' => '+22', 'is_correct' => false],
                            ['choice_text' => '0', 'is_correct' => false],
                        ],
                        'explanation' => 'Il y a 12 charges positives et 10 charges négatives. La charge nette est donc +2.'
                    ],
                    [
                        'question' => 'Un ion possède 17 protons et 18 électrons. Quelle est sa charge ?',
                        'choices' => [
                            ['choice_text' => '-1', 'is_correct' => true],
                            ['choice_text' => '+1', 'is_correct' => false],
                            ['choice_text' => '-17', 'is_correct' => false],
                            ['choice_text' => '0', 'is_correct' => false],
                        ],
                        'explanation' => 'Il y a une charge négative de plus que de charges positives : 17 - 18 = -1.'
                    ],
                    [
                        'question' => 'Pourquoi un atome de sodium devient-il généralement Na⁺ lorsqu’il forme un ion ?',
                        'choices' => [
                            ['choice_text' => 'Il perd un électron', 'is_correct' => true],
                            ['choice_text' => 'Il gagne un proton', 'is_correct' => false],
                            ['choice_text' => 'Il gagne un neutron', 'is_correct' => false],
                            ['choice_text' => 'Il perd un proton', 'is_correct' => false],
                        ],
                        'explanation' => 'Le sodium neutre possède autant de protons que d’électrons. En perdant un électron, il conserve une charge positive nette de +1.'
                    ],
                    [
                        'question' => 'Un élève écrit O⁺ pour représenter un atome d’oxygène qui a gagné deux électrons. Quelle écriture convient mieux ?',
                        'choices' => [
                            ['choice_text' => 'O²⁻', 'is_correct' => true],
                            ['choice_text' => 'O²⁺', 'is_correct' => false],
                            ['choice_text' => 'O⁻', 'is_correct' => false],
                            ['choice_text' => 'O⁰', 'is_correct' => false],
                        ],
                        'explanation' => 'Gagner deux électrons ajoute deux charges négatives. L’ion porte donc une charge de -2 : O²⁻.'
                    ],
                    [
                        'question' => 'Un atome neutre possède 19 protons et devient un ion portant une charge +1. Combien d’électrons possède-t-il après la transformation ?',
                        'choices' => [
                            ['choice_text' => '18', 'is_correct' => true],
                            ['choice_text' => '19', 'is_correct' => false],
                            ['choice_text' => '20', 'is_correct' => false],
                            ['choice_text' => '1', 'is_correct' => false],
                        ],
                        'explanation' => 'Pour avoir une charge +1 avec 19 protons, l’ion doit avoir une charge négative de 18 électrons : 19 - 18 = +1.'
                    ],
                ],
            ],

            [
                'title' => 'Couches électroniques et configuration simple',
                'description' => 'Découvrez comment les électrons sont répartis autour du noyau et utilisez des configurations électroniques simples adaptées au niveau débutant.',
                'questions' => [
                    [
                        'question' => 'Les électrons d’un atome se trouvent principalement :',
                        'choices' => [
                            ['choice_text' => 'Autour du noyau, dans des régions d’énergie différentes', 'is_correct' => true],
                            ['choice_text' => 'Tous à l’intérieur des neutrons', 'is_correct' => false],
                            ['choice_text' => 'Tous dans le noyau', 'is_correct' => false],
                            ['choice_text' => 'Seulement à l’extérieur du matériau', 'is_correct' => false],
                        ],
                        'explanation' => 'Les électrons occupent des régions autour du noyau. Dans une représentation simple, on parle de couches électroniques de niveaux d’énergie différents.'
                    ],
                    [
                        'question' => 'Dans un modèle simplifié, quelle couche électronique est remplie en premier ?',
                        'choices' => [
                            ['choice_text' => 'La première couche, la plus proche du noyau', 'is_correct' => true],
                            ['choice_text' => 'La dernière couche uniquement', 'is_correct' => false],
                            ['choice_text' => 'Toutes les couches en même temps', 'is_correct' => false],
                            ['choice_text' => 'Une couche choisie au hasard', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans le modèle débutant, les électrons occupent d’abord les niveaux d’énergie les plus bas, en commençant par la couche la plus proche du noyau.'
                    ],
                    [
                        'question' => 'Dans le modèle par couches utilisé au niveau débutant, combien d’électrons la première couche peut-elle contenir au maximum ?',
                        'choices' => [
                            ['choice_text' => '2', 'is_correct' => true],
                            ['choice_text' => '4', 'is_correct' => false],
                            ['choice_text' => '8', 'is_correct' => false],
                            ['choice_text' => '18', 'is_correct' => false],
                        ],
                        'explanation' => 'La première couche électronique peut contenir au maximum 2 électrons dans ce modèle simplifié.'
                    ],
                    [
                        'question' => 'Un atome neutre possède 6 électrons. Comment les répartit-on simplement sur les premières couches ?',
                        'choices' => [
                            ['choice_text' => '2 sur la première couche et 4 sur la deuxième', 'is_correct' => true],
                            ['choice_text' => '6 sur la première couche', 'is_correct' => false],
                            ['choice_text' => '3 sur chaque couche', 'is_correct' => false],
                            ['choice_text' => '4 sur la première et 2 sur la deuxième', 'is_correct' => false],
                        ],
                        'explanation' => 'La première couche peut accueillir 2 électrons. Les 4 électrons restants vont dans la deuxième couche : 2,4.'
                    ],
                    [
                        'question' => 'Combien d’électrons possède la couche externe d’un atome de sodium dans le modèle simplifié 2-8-1 ?',
                        'choices' => [
                            ['choice_text' => '1', 'is_correct' => true],
                            ['choice_text' => '2', 'is_correct' => false],
                            ['choice_text' => '8', 'is_correct' => false],
                            ['choice_text' => '11', 'is_correct' => false],
                        ],
                        'explanation' => 'La configuration 2-8-1 signifie que la couche externe contient un seul électron.'
                    ],
                    [
                        'question' => 'Le chlore possède 17 électrons. Quelle répartition correspond au modèle simplifié ?',
                        'choices' => [
                            ['choice_text' => '2-8-7', 'is_correct' => true],
                            ['choice_text' => '2-7-8', 'is_correct' => false],
                            ['choice_text' => '8-8-1', 'is_correct' => false],
                            ['choice_text' => '2-9-6', 'is_correct' => false],
                        ],
                        'explanation' => 'Les 17 électrons se répartissent 2 dans la première couche, 8 dans la deuxième et 7 dans la troisième : 2-8-7.'
                    ],
                    [
                        'question' => 'Pourquoi les électrons de la couche externe sont-ils particulièrement importants en chimie ?',
                        'choices' => [
                            ['choice_text' => 'Ils participent souvent aux liaisons et aux réactions chimiques', 'is_correct' => true],
                            ['choice_text' => 'Ils déterminent toujours le nombre de neutrons', 'is_correct' => false],
                            ['choice_text' => 'Ils se trouvent dans le noyau', 'is_correct' => false],
                            ['choice_text' => 'Ils portent toute la masse de l’atome', 'is_correct' => false],
                        ],
                        'explanation' => 'Les électrons de valence sont directement impliqués dans de nombreuses interactions chimiques, notamment les liaisons entre atomes.'
                    ],
                    [
                        'question' => 'Un atome possède la configuration simplifiée 2-8-8. Combien d’électrons possède-t-il au total ?',
                        'choices' => [
                            ['choice_text' => '18', 'is_correct' => true],
                            ['choice_text' => '16', 'is_correct' => false],
                            ['choice_text' => '10', 'is_correct' => false],
                            ['choice_text' => '20', 'is_correct' => false],
                        ],
                        'explanation' => 'On additionne les électrons des trois couches : 2 + 8 + 8 = 18 électrons.'
                    ],
                    [
                        'question' => 'Un élève écrit la configuration 2-8-9 pour un atome ayant 19 électrons. Quel est son problème ?',
                        'choices' => [
                            ['choice_text' => 'Il a mal réparti les électrons et la couche externe devrait être 2-8-8-1', 'is_correct' => true],
                            ['choice_text' => 'Le premier nombre devrait être 3', 'is_correct' => false],
                            ['choice_text' => 'Un atome de 19 électrons ne peut pas exister', 'is_correct' => false],
                            ['choice_text' => 'Les électrons doivent tous être sur la première couche', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans le modèle simplifié utilisé ici, après 2 puis 8 électrons, le dix-neuvième occupe une nouvelle couche : 2-8-8-1.'
                    ],
                    [
                        'question' => 'Deux atomes ont respectivement 1 et 7 électrons sur leur couche externe. Quelle différence peut-on raisonnablement prévoir au niveau débutant ?',
                        'choices' => [
                            ['choice_text' => 'Ils n’auront pas exactement le même comportement chimique', 'is_correct' => true],
                            ['choice_text' => 'Ils doivent avoir le même numéro atomique', 'is_correct' => false],
                            ['choice_text' => 'Ils doivent contenir le même nombre de neutrons', 'is_correct' => false],
                            ['choice_text' => 'Ils sont forcément des isotopes du même élément', 'is_correct' => false],
                        ],
                        'explanation' => 'Le nombre d’électrons de valence influence fortement la manière dont un atome interagit avec les autres. Des couches externes très différentes conduisent donc à des comportements chimiques différents.'
                    ],
                ],
            ],

            [
                'title' => 'Électrons de valence et stabilité',
                'description' => 'Comprenez le rôle des électrons externes et l’idée générale de stabilité électronique dans les réactions simples.',
                'questions' => [
                    [
                        'question' => 'Comment appelle-t-on les électrons situés sur la couche la plus externe d’un atome ?',
                        'choices' => [
                            ['choice_text' => 'Électrons de valence', 'is_correct' => true],
                            ['choice_text' => 'Neutrons externes', 'is_correct' => false],
                            ['choice_text' => 'Nucléons', 'is_correct' => false],
                            ['choice_text' => 'Protons de surface', 'is_correct' => false],
                        ],
                        'explanation' => 'Les électrons de la couche externe sont appelés électrons de valence. Ils jouent un rôle important dans les liaisons chimiques.'
                    ],
                    [
                        'question' => 'Un atome avec une couche externe presque complète a tendance à :',
                        'choices' => [
                            ['choice_text' => 'Gagner ou partager des électrons selon l’élément pour atteindre une configuration plus stable', 'is_correct' => true],
                            ['choice_text' => 'Perdre toujours tous ses protons', 'is_correct' => false],
                            ['choice_text' => 'Devenir automatiquement un neutron', 'is_correct' => false],
                            ['choice_text' => 'Ne plus jamais réagir', 'is_correct' => false],
                        ],
                        'explanation' => 'De nombreux atomes réagissent de manière à atteindre une configuration électronique plus stable. Ils peuvent gagner, perdre ou partager des électrons.'
                    ],
                    [
                        'question' => 'Pourquoi le sodium forme-t-il facilement un ion Na⁺ ?',
                        'choices' => [
                            ['choice_text' => 'Il possède un seul électron sur sa couche externe dans le modèle simplifié', 'is_correct' => true],
                            ['choice_text' => 'Il possède 17 électrons externes', 'is_correct' => false],
                            ['choice_text' => 'Il a besoin de perdre tous ses neutrons', 'is_correct' => false],
                            ['choice_text' => 'Son noyau est chargé négativement', 'is_correct' => false],
                        ],
                        'explanation' => 'Le sodium possède la configuration 2-8-1. Perdre son unique électron externe lui donne une configuration plus stable et produit Na⁺.'
                    ],
                    [
                        'question' => 'Le chlore possède 7 électrons de valence dans le modèle simplifié. Quelle tendance simple peut-on attendre ?',
                        'choices' => [
                            ['choice_text' => 'Il peut gagner un électron pour compléter sa couche externe', 'is_correct' => true],
                            ['choice_text' => 'Il doit toujours perdre 7 protons', 'is_correct' => false],
                            ['choice_text' => 'Il doit perdre tous ses électrons', 'is_correct' => false],
                            ['choice_text' => 'Il ne peut jamais former d’ion', 'is_correct' => false],
                        ],
                        'explanation' => 'Avec 7 électrons de valence, le chlore est proche d’une couche externe complète. Gagner un électron lui donne une configuration plus stable.'
                    ],
                    [
                        'question' => 'Un atome possède une couche externe avec 8 électrons dans le modèle simplifié. Que peut-on dire de manière générale ?',
                        'choices' => [
                            ['choice_text' => 'Sa couche externe est particulièrement stable', 'is_correct' => true],
                            ['choice_text' => 'Il doit forcément être un métal', 'is_correct' => false],
                            ['choice_text' => 'Il possède forcément 8 protons', 'is_correct' => false],
                            ['choice_text' => 'Il doit nécessairement perdre 8 électrons', 'is_correct' => false],
                        ],
                        'explanation' => 'Une couche externe complète, avec 8 électrons dans le modèle courant des éléments légers, correspond à une configuration particulièrement stable.'
                    ],
                    [
                        'question' => 'Pourquoi le magnésium peut-il former Mg²⁺ ?',
                        'choices' => [
                            ['choice_text' => 'Il peut perdre deux électrons de sa couche externe', 'is_correct' => true],
                            ['choice_text' => 'Il gagne deux protons', 'is_correct' => false],
                            ['choice_text' => 'Il perd deux neutrons', 'is_correct' => false],
                            ['choice_text' => 'Il gagne deux couches électroniques', 'is_correct' => false],
                        ],
                        'explanation' => 'Le magnésium possède deux électrons de valence dans le modèle simplifié. Leur perte donne un ion de charge +2.'
                    ],
                    [
                        'question' => 'Le fluor possède 7 électrons de valence et le sodium en possède 1. Pourquoi ces deux éléments peuvent-ils former facilement un composé ionique ?',
                        'choices' => [
                            ['choice_text' => 'Le sodium peut perdre un électron tandis que le fluor peut en gagner un', 'is_correct' => true],
                            ['choice_text' => 'Le sodium et le fluor perdent tous leurs neutrons', 'is_correct' => false],
                            ['choice_text' => 'Les deux éléments gagnent exactement 7 électrons', 'is_correct' => false],
                            ['choice_text' => 'Aucun électron ne participe à leur interaction', 'is_correct' => false],
                        ],
                        'explanation' => 'Le sodium et le fluor ont des tendances complémentaires : le sodium perd facilement un électron et le fluor peut en gagner un. Cela conduit à Na⁺ et F⁻.'
                    ],
                    [
                        'question' => 'Un élève dit : « Un atome cherche toujours à avoir exactement 8 électrons au total. » Pourquoi cette phrase est-elle fausse ?',
                        'choices' => [
                            ['choice_text' => 'La règle concerne principalement la couche externe dans un modèle simplifié, pas le nombre total d’électrons', 'is_correct' => true],
                            ['choice_text' => 'Tous les atomes ont toujours seulement 8 électrons', 'is_correct' => false],
                            ['choice_text' => 'Les électrons ne jouent aucun rôle', 'is_correct' => false],
                            ['choice_text' => 'Le nombre 8 concerne les neutrons', 'is_correct' => false],
                        ],
                        'explanation' => 'La règle de l’octet concerne la couche de valence dans de nombreux cas simples. Elle ne signifie pas que l’atome entier contient seulement huit électrons.'
                    ],
                    [
                        'question' => 'Un atome neutre de calcium possède 20 électrons. Dans le modèle simplifié, combien d’électrons trouve-t-on sur sa couche externe ?',
                        'choices' => [
                            ['choice_text' => '2', 'is_correct' => true],
                            ['choice_text' => '8', 'is_correct' => false],
                            ['choice_text' => '10', 'is_correct' => false],
                            ['choice_text' => '20', 'is_correct' => false],
                        ],
                        'explanation' => 'La répartition simplifiée du calcium est 2-8-8-2. La dernière couche contient donc 2 électrons.'
                    ],
                    [
                        'question' => 'Quelle situation montre le mieux le lien entre électrons de valence et charge d’un ion ?',
                        'choices' => [
                            ['choice_text' => 'Un atome qui possède un seul électron externe peut perdre cet électron et devenir positif', 'is_correct' => true],
                            ['choice_text' => 'Un atome devient positif en gagnant toujours des électrons', 'is_correct' => false],
                            ['choice_text' => 'Les électrons de valence sont tous dans le noyau', 'is_correct' => false],
                            ['choice_text' => 'Le nombre d’électrons externes ne peut jamais changer', 'is_correct' => false],
                        ],
                        'explanation' => 'La perte d’un électron externe enlève une charge négative. L’atome devient alors positif. C’est une idée importante pour comprendre la formation de nombreux ions.'
                    ],
                ],
            ],

            [
                'title' => 'Masse atomique et comparaison des atomes',
                'description' => 'Travaillez sur la masse des particules, la masse atomique relative et des comparaisons simples entre différents atomes.',
                'questions' => [
                    [
                        'question' => 'Quelle particule contribue le plus à la masse d’un atome ?',
                        'choices' => [
                            ['choice_text' => 'Le proton ou le neutron', 'is_correct' => true],
                            ['choice_text' => 'L’électron', 'is_correct' => false],
                            ['choice_text' => 'Le photon', 'is_correct' => false],
                            ['choice_text' => 'La charge électrique', 'is_correct' => false],
                        ],
                        'explanation' => 'Les protons et les neutrons sont beaucoup plus massifs que les électrons. Ils représentent donc presque toute la masse de l’atome.'
                    ],
                    [
                        'question' => 'Si deux isotopes ont le même nombre de protons mais que l’un possède plus de neutrons, lequel est le plus lourd ?',
                        'choices' => [
                            ['choice_text' => 'Celui qui possède le plus de neutrons', 'is_correct' => true],
                            ['choice_text' => 'Celui qui possède le moins de neutrons', 'is_correct' => false],
                            ['choice_text' => 'Ils ont toujours exactement la même masse', 'is_correct' => false],
                            ['choice_text' => 'Impossible à comparer', 'is_correct' => false],
                        ],
                        'explanation' => 'Les neutrons ont une masse importante. Un isotope qui en possède davantage a donc une masse plus élevée.'
                    ],
                    [
                        'question' => 'Dans une approximation simple, pourquoi peut-on considérer la masse d’un atome comme proche de son nombre de masse ?',
                        'choices' => [
                            ['choice_text' => 'Parce que le nombre de masse compte les protons et les neutrons, qui portent presque toute la masse', 'is_correct' => true],
                            ['choice_text' => 'Parce que chaque électron pèse autant qu’un proton', 'is_correct' => false],
                            ['choice_text' => 'Parce que les neutrons n’ont aucune masse', 'is_correct' => false],
                            ['choice_text' => 'Parce que la charge remplace la masse', 'is_correct' => false],
                        ],
                        'explanation' => 'Le nombre de masse compte les nucléons. Comme les électrons ont une masse beaucoup plus faible, cette approximation fonctionne bien pour une première approche.'
                    ],
                    [
                        'question' => 'Un isotope contient 10 protons et 11 neutrons. Quel est son nombre de masse ?',
                        'choices' => [
                            ['choice_text' => '21', 'is_correct' => true],
                            ['choice_text' => '11', 'is_correct' => false],
                            ['choice_text' => '10', 'is_correct' => false],
                            ['choice_text' => '110', 'is_correct' => false],
                        ],
                        'explanation' => 'Nombre de masse = protons + neutrons = 10 + 11 = 21.'
                    ],
                    [
                        'question' => 'Deux atomes ont respectivement 8 et 12 protons. Lequel a le plus grand numéro atomique ?',
                        'choices' => [
                            ['choice_text' => 'Celui qui possède 12 protons', 'is_correct' => true],
                            ['choice_text' => 'Celui qui possède 8 protons', 'is_correct' => false],
                            ['choice_text' => 'Ils ont le même numéro atomique', 'is_correct' => false],
                            ['choice_text' => 'Cela dépend seulement des neutrons', 'is_correct' => false],
                        ],
                        'explanation' => 'Le numéro atomique est égal au nombre de protons. Un atome avec 12 protons a donc un numéro atomique supérieur à celui qui en possède 8.'
                    ],
                    [
                        'question' => 'Un atome possède un nombre de masse de 27 et un numéro atomique de 13. Combien de neutrons contient-il ?',
                        'choices' => [
                            ['choice_text' => '14', 'is_correct' => true],
                            ['choice_text' => '13', 'is_correct' => false],
                            ['choice_text' => '27', 'is_correct' => false],
                            ['choice_text' => '40', 'is_correct' => false],
                        ],
                        'explanation' => 'Le nombre de neutrons est A - Z = 27 - 13 = 14.'
                    ],
                    [
                        'question' => 'Pourquoi la masse d’un électron est-elle souvent négligée dans une première estimation de la masse atomique ?',
                        'choices' => [
                            ['choice_text' => 'Sa masse est beaucoup plus faible que celle d’un proton ou d’un neutron', 'is_correct' => true],
                            ['choice_text' => 'L’électron n’a aucune masse', 'is_correct' => false],
                            ['choice_text' => 'Les électrons sont dans le noyau', 'is_correct' => false],
                            ['choice_text' => 'Les électrons sont plus lourds que les neutrons', 'is_correct' => false],
                        ],
                        'explanation' => 'L’électron possède bien une masse, mais elle est très faible par rapport à celle des protons et des neutrons.'
                    ],
                    [
                        'question' => 'Un atome A possède 6 protons et 8 neutrons. Un atome B possède 6 protons et 6 neutrons. Lequel a le nombre de masse le plus élevé ?',
                        'choices' => [
                            ['choice_text' => 'L’atome A', 'is_correct' => true],
                            ['choice_text' => 'L’atome B', 'is_correct' => false],
                            ['choice_text' => 'Ils ont le même nombre de masse', 'is_correct' => false],
                            ['choice_text' => 'Impossible à déterminer', 'is_correct' => false],
                        ],
                        'explanation' => 'A a un nombre de masse de 6 + 8 = 14, tandis que B a 6 + 6 = 12. A a donc le nombre de masse le plus élevé.'
                    ],
                    [
                        'question' => 'Un étudiant pense que l’atome ayant le plus d’électrons est toujours celui qui a la plus grande masse. Quelle correction convient ?',
                        'choices' => [
                            ['choice_text' => 'La masse dépend surtout des protons et des neutrons', 'is_correct' => true],
                            ['choice_text' => 'La masse dépend uniquement des électrons', 'is_correct' => false],
                            ['choice_text' => 'Les électrons n’existent que dans les isotopes lourds', 'is_correct' => false],
                            ['choice_text' => 'La masse ne dépend d’aucune particule', 'is_correct' => false],
                        ],
                        'explanation' => 'Les protons et les neutrons constituent l’essentiel de la masse. Le nombre d’électrons seul ne permet donc pas de comparer correctement les masses.'
                    ],
                    [
                        'question' => 'Un atome a 15 protons, 16 neutrons et 15 électrons. Si on ajoute un neutron sans modifier le reste, quelle grandeur augmente ?',
                        'choices' => [
                            ['choice_text' => 'Le nombre de masse', 'is_correct' => true],
                            ['choice_text' => 'Le numéro atomique', 'is_correct' => false],
                            ['choice_text' => 'La charge électrique', 'is_correct' => false],
                            ['choice_text' => 'Le nombre de protons', 'is_correct' => false],
                        ],
                        'explanation' => 'Ajouter un neutron augmente le nombre de nucléons, donc le nombre de masse. Le numéro atomique et la charge ne changent pas.'
                    ],
                ],
            ],

            [
                'title' => 'Lire une représentation atomique',
                'description' => 'Interprétez des notations atomiques simples et entraînez-vous à déduire rapidement le nombre de protons, neutrons et électrons.',
                'questions' => [
                    [
                        'question' => 'Dans une notation nucléaire, où trouve-t-on généralement le numéro atomique Z ?',
                        'choices' => [
                            ['choice_text' => 'En bas à gauche du symbole de l’élément', 'is_correct' => true],
                            ['choice_text' => 'En haut à droite uniquement', 'is_correct' => false],
                            ['choice_text' => 'Toujours à côté du nombre de neutrons', 'is_correct' => false],
                            ['choice_text' => 'Sous le symbole du neutron', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans la notation nucléaire classique, le nombre de masse A se trouve en haut à gauche et le numéro atomique Z en bas à gauche.'
                    ],
                    [
                        'question' => 'Pour l’atome noté ²³₁₁Na, combien y a-t-il de protons ?',
                        'choices' => [
                            ['choice_text' => '11', 'is_correct' => true],
                            ['choice_text' => '23', 'is_correct' => false],
                            ['choice_text' => '12', 'is_correct' => false],
                            ['choice_text' => '34', 'is_correct' => false],
                        ],
                        'explanation' => 'Le nombre situé en bas à gauche est Z = 11. L’atome possède donc 11 protons.'
                    ],
                    [
                        'question' => 'Pour ²³₁₁Na, combien y a-t-il de neutrons ?',
                        'choices' => [
                            ['choice_text' => '12', 'is_correct' => true],
                            ['choice_text' => '11', 'is_correct' => false],
                            ['choice_text' => '23', 'is_correct' => false],
                            ['choice_text' => '34', 'is_correct' => false],
                        ],
                        'explanation' => 'Le nombre de neutrons est A - Z = 23 - 11 = 12.'
                    ],
                    [
                        'question' => 'Pour un atome neutre noté ¹⁶₈O, combien d’électrons possède-t-il ?',
                        'choices' => [
                            ['choice_text' => '8', 'is_correct' => true],
                            ['choice_text' => '16', 'is_correct' => false],
                            ['choice_text' => '24', 'is_correct' => false],
                            ['choice_text' => '7', 'is_correct' => false],
                        ],
                        'explanation' => 'L’atome est neutre et possède 8 protons. Il doit donc avoir 8 électrons.'
                    ],
                    [
                        'question' => 'Que représente le nombre 35 dans la notation ³⁵₁₇Cl ?',
                        'choices' => [
                            ['choice_text' => 'Le nombre de masse', 'is_correct' => true],
                            ['choice_text' => 'Le nombre de protons', 'is_correct' => false],
                            ['choice_text' => 'Le nombre d’électrons', 'is_correct' => false],
                            ['choice_text' => 'La charge de l’atome', 'is_correct' => false],
                        ],
                        'explanation' => 'Le nombre placé en haut à gauche est le nombre de masse A. Il correspond à la somme des protons et des neutrons.'
                    ],
                    [
                        'question' => 'Un ion est noté ²⁴₁₂Mg²⁺. Combien possède-t-il d’électrons ?',
                        'choices' => [
                            ['choice_text' => '10', 'is_correct' => true],
                            ['choice_text' => '12', 'is_correct' => false],
                            ['choice_text' => '14', 'is_correct' => false],
                            ['choice_text' => '24', 'is_correct' => false],
                        ],
                        'explanation' => 'Le magnésium possède 12 protons. Avec une charge +2, il a perdu 2 électrons : 12 - 2 = 10.'
                    ],
                    [
                        'question' => 'Un ion est noté ³⁵₁₇Cl⁻. Combien possède-t-il d’électrons ?',
                        'choices' => [
                            ['choice_text' => '18', 'is_correct' => true],
                            ['choice_text' => '17', 'is_correct' => false],
                            ['choice_text' => '16', 'is_correct' => false],
                            ['choice_text' => '35', 'is_correct' => false],
                        ],
                        'explanation' => 'Le chlore possède 17 protons. La charge -1 indique qu’il a gagné un électron : 17 + 1 = 18 électrons.'
                    ],
                    [
                        'question' => 'Un atome est représenté par ⁴⁰₂₀Ca. Combien y a-t-il de neutrons ?',
                        'choices' => [
                            ['choice_text' => '20', 'is_correct' => true],
                            ['choice_text' => '40', 'is_correct' => false],
                            ['choice_text' => '60', 'is_correct' => false],
                            ['choice_text' => '10', 'is_correct' => false],
                        ],
                        'explanation' => 'Le nombre de neutrons est 40 - 20 = 20.'
                    ],
                    [
                        'question' => 'Un élève affirme que ²³₁₁Na possède 23 protons. Quelle confusion fait-il ?',
                        'choices' => [
                            ['choice_text' => 'Il confond le nombre de masse avec le numéro atomique', 'is_correct' => true],
                            ['choice_text' => 'Il confond les électrons avec les neutrons', 'is_correct' => false],
                            ['choice_text' => 'Il confond la charge et la masse', 'is_correct' => false],
                            ['choice_text' => 'Il a simplement oublié l’unité', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans la notation, 23 est le nombre de masse A et 11 est le numéro atomique Z, donc le nombre de protons.'
                    ],
                    [
                        'question' => 'Quelle information ne peut pas être obtenue directement à partir de la seule notation ²⁷₁₃Al sans autre indication sur la charge ?',
                        'choices' => [
                            ['choice_text' => 'Le nombre exact d’électrons si l’espèce est ionisée', 'is_correct' => true],
                            ['choice_text' => 'Le nombre de protons', 'is_correct' => false],
                            ['choice_text' => 'Le nombre de neutrons', 'is_correct' => false],
                            ['choice_text' => 'Le nombre de masse', 'is_correct' => false],
                        ],
                        'explanation' => 'La notation donne Z et A, donc les protons et les neutrons. Pour connaître les électrons d’une espèce chargée, il faut aussi connaître sa charge.'
                    ],
                ],
            ],

            [
                'title' => 'Révision intégrée de la structure atomique',
                'description' => 'Mettez ensemble vos connaissances sur les particules, les isotopes, les ions, les nombres atomiques et la répartition électronique.',
                'questions' => [
                    [
                        'question' => 'Quelle particule détermine l’identité chimique d’un élément ?',
                        'choices' => [
                            ['choice_text' => 'Le proton', 'is_correct' => true],
                            ['choice_text' => 'Le neutron', 'is_correct' => false],
                            ['choice_text' => 'L’électron', 'is_correct' => false],
                            ['choice_text' => 'Le photon', 'is_correct' => false],
                        ],
                        'explanation' => 'Le nombre de protons dans le noyau est unique à chaque élément. Il correspond au numéro atomique.'
                    ],
                    [
                        'question' => 'Un atome neutre possède 10 protons. Que peut-on dire immédiatement ?',
                        'choices' => [
                            ['choice_text' => 'Il possède 10 électrons', 'is_correct' => true],
                            ['choice_text' => 'Il possède forcément 20 neutrons', 'is_correct' => false],
                            ['choice_text' => 'Il porte une charge +10', 'is_correct' => false],
                            ['choice_text' => 'Il possède 5 électrons', 'is_correct' => false],
                        ],
                        'explanation' => 'Un atome neutre possède autant d’électrons que de protons. Avec 10 protons, il possède donc 10 électrons.'
                    ],
                    [
                        'question' => 'Un noyau contient 14 protons et 16 neutrons. Quel est son nombre de masse ?',
                        'choices' => [
                            ['choice_text' => '30', 'is_correct' => true],
                            ['choice_text' => '16', 'is_correct' => false],
                            ['choice_text' => '14', 'is_correct' => false],
                            ['choice_text' => '2', 'is_correct' => false],
                        ],
                        'explanation' => 'A = nombre de protons + nombre de neutrons = 14 + 16 = 30.'
                    ],
                    [
                        'question' => 'Un ion possède 9 protons et 10 électrons. De quelle nature est sa charge ?',
                        'choices' => [
                            ['choice_text' => 'Négative', 'is_correct' => true],
                            ['choice_text' => 'Positive', 'is_correct' => false],
                            ['choice_text' => 'Nulle', 'is_correct' => false],
                            ['choice_text' => 'Impossible à déterminer', 'is_correct' => false],
                        ],
                        'explanation' => 'Il y a une charge négative de plus que de charges positives. L’ion est donc négatif, avec une charge globale de -1.'
                    ],
                    [
                        'question' => 'Deux atomes possèdent le même nombre de protons mais des nombres différents de neutrons. Comment les appelle-t-on ?',
                        'choices' => [
                            ['choice_text' => 'Des isotopes', 'is_correct' => true],
                            ['choice_text' => 'Des cations', 'is_correct' => false],
                            ['choice_text' => 'Des molécules', 'is_correct' => false],
                            ['choice_text' => 'Des ions monoatomiques uniquement', 'is_correct' => false],
                        ],
                        'explanation' => 'Des isotopes sont des atomes du même élément avec le même nombre de protons mais un nombre différent de neutrons.'
                    ],
                    [
                        'question' => 'Un atome de chlore neutre possède 17 électrons. Quelle configuration simplifiée correspond à ses couches électroniques ?',
                        'choices' => [
                            ['choice_text' => '2-8-7', 'is_correct' => true],
                            ['choice_text' => '2-7-8', 'is_correct' => false],
                            ['choice_text' => '8-8-1', 'is_correct' => false],
                            ['choice_text' => '2-9-6', 'is_correct' => false],
                        ],
                        'explanation' => 'Les 17 électrons se répartissent en 2 sur la première couche, 8 sur la deuxième et 7 sur la troisième : 2-8-7.'
                    ],
                    [
                        'question' => 'Un atome de sodium devient Na⁺. Quelle modification a eu lieu ?',
                        'choices' => [
                            ['choice_text' => 'Il a perdu un électron', 'is_correct' => true],
                            ['choice_text' => 'Il a gagné un électron', 'is_correct' => false],
                            ['choice_text' => 'Il a perdu un proton', 'is_correct' => false],
                            ['choice_text' => 'Il a gagné un neutron', 'is_correct' => false],
                        ],
                        'explanation' => 'Le sodium forme Na⁺ en perdant un électron. Le noyau ne change pas.'
                    ],
                    [
                        'question' => 'Un atome est noté ²⁷₁₃Al. Combien possède-t-il de neutrons ?',
                        'choices' => [
                            ['choice_text' => '14', 'is_correct' => true],
                            ['choice_text' => '13', 'is_correct' => false],
                            ['choice_text' => '27', 'is_correct' => false],
                            ['choice_text' => '40', 'is_correct' => false],
                        ],
                        'explanation' => 'Nombre de neutrons = A - Z = 27 - 13 = 14.'
                    ],
                    [
                        'question' => 'Un élève affirme qu’un isotope différent possède forcément un numéro atomique différent. Quelle réponse corrige cette idée ?',
                        'choices' => [
                            ['choice_text' => 'Deux isotopes d’un même élément ont le même numéro atomique mais un nombre de neutrons différent', 'is_correct' => true],
                            ['choice_text' => 'Le numéro atomique dépend uniquement des neutrons', 'is_correct' => false],
                            ['choice_text' => 'Un isotope est toujours un nouvel élément', 'is_correct' => false],
                            ['choice_text' => 'Les isotopes n’ont aucun proton', 'is_correct' => false],
                        ],
                        'explanation' => 'Le numéro atomique correspond aux protons et reste donc identique pour les isotopes d’un même élément.'
                    ],
                    [
                        'question' => 'Un élève doit identifier une espèce composée de 12 protons, 12 neutrons et 10 électrons. Quelle description convient le mieux ?',
                        'choices' => [
                            ['choice_text' => 'Un ion positif de charge +2, avec un nombre de masse de 24', 'is_correct' => true],
                            ['choice_text' => 'Un atome neutre de nombre de masse 22', 'is_correct' => false],
                            ['choice_text' => 'Un ion négatif de charge -2, avec 24 neutrons', 'is_correct' => false],
                            ['choice_text' => 'Un isotope sans électrons', 'is_correct' => false],
                        ],
                        'explanation' => 'La charge vaut 12 - 10 = +2. Le nombre de masse vaut 12 + 12 = 24. L’espèce est donc un ion positif de charge +2 et de nombre de masse 24.'
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