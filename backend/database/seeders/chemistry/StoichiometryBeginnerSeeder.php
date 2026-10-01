<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class StoichiometryBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'stoichiometry')->firstOrFail();

        $quizzes = [
            [
                'title' => 'Comprendre la mole',
                'description' => 'Découvrez la mole comme unité de quantité de matière et apprenez à l’utiliser dans des situations chimiques très simples.',
                'questions' => [
                    [
                        'question' => 'En chimie, la mole sert principalement à mesurer :',
                        'choices' => [
                            ['choice_text' => 'La quantité de matière', 'is_correct' => true],
                            ['choice_text' => 'La température d’une solution', 'is_correct' => false],
                            ['choice_text' => 'Le volume d’un récipient', 'is_correct' => false],
                            ['choice_text' => 'La vitesse d’une réaction', 'is_correct' => false],
                        ],
                        'explanation' => 'La mole est une unité utilisée pour exprimer une quantité de matière, notamment lorsqu’on compte un très grand nombre de particules.'
                    ],
                    [
                        'question' => 'Combien de particules contient environ une mole de substance ?',
                        'choices' => [
                            ['choice_text' => 6,02 × 10²³ particules', 'is_correct' => true],
                            ['choice_text' => 6,02 × 10² particules', 'is_correct' => false],
                            ['choice_text' => 6,02 × 10¹² particules', 'is_correct' => false],
                            ['choice_text' => 602 particules', 'is_correct' => false],
                        ],
                        'explanation' => 'Une mole contient environ 6,02 × 10²³ entités. Ce nombre est appelé constante d’Avogadro.'
                    ],
                    [
                        'question' => 'Si un échantillon contient 2 moles de molécules d’eau, contient-il plus ou moins de molécules qu’un échantillon de 1 mole ?',
                        'choices' => [
                            ['choice_text' => Plus, environ deux fois plus', 'is_correct' => true],
                            ['choice_text' => Moins, deux fois moins', 'is_correct' => false],
                            ['choice_text' => Exactement la même quantité', 'is_correct' => false],
                            ['choice_text' => Impossible à comparer', 'is_correct' => false],
                        ],
                        'explanation' => 'La quantité de particules est proportionnelle au nombre de moles. Deux moles contiennent donc environ deux fois plus de molécules qu’une mole.'
                    ],
                    [
                        'question' => 'Une élève écrit « 0,5 mol » dans son cahier. Que signifie cette valeur ?',
                        'choices' => [
                            ['choice_text' => 'Elle possède la moitié d’une mole de particules', 'is_correct' => true],
                            ['choice_text' => 'Elle possède 0,5 gramme de substance', 'is_correct' => false],
                            ['choice_text' => 'La substance est à 0,5 °C', 'is_correct' => false],
                            ['choice_text' => 'La substance occupe forcément 0,5 litre', 'is_correct' => false],
                        ],
                        'explanation' => '0,5 mol représente une demi-mole. Ce n’est pas directement une masse ou un volume.'
                    ],
                    [
                        'question' => 'Quelle quantité de matière correspond à 3,0 moles de sodium ?',
                        'choices' => [
                            ['choice_text' => 3,0 mol', 'is_correct' => true],
                            ['choice_text' => 0,3 mol', 'is_correct' => false],
                            ['choice_text' => 30 mol', 'is_correct' => false],
                            ['choice_text' => 6,02 × 10²³ mol', 'is_correct' => false],
                        ],
                        'explanation' => 'Le nombre donné est déjà une quantité de matière : l’échantillon contient 3,0 moles.'
                    ],
                    [
                        'question' => 'Pourquoi utilise-t-on la mole plutôt que de compter une par une les molécules dans un laboratoire ?',
                        'choices' => [
                            ['choice_text' => 'Parce que les échantillons contiennent énormément de particules', 'is_correct' => true],
                            ['choice_text' => 'Parce que les molécules sont toujours visibles', 'is_correct' => false],
                            ['choice_text' => 'Parce que les atomes ne possèdent pas de masse', 'is_correct' => false],
                            ['choice_text' => 'Parce que la mole donne directement une température', 'is_correct' => false],
                        ],
                        'explanation' => 'Les échantillons ordinaires contiennent un nombre immense de particules. La mole permet de travailler avec ces quantités sans les compter individuellement.'
                    ],
                    [
                        'question' => 'Un échantillon contient 0,25 mol de CO₂. Quel nombre est le plus proche du nombre de molécules présentes ?',
                        'choices' => [
                            ['choice_text' => '1,505 × 10²³ molécules', 'is_correct' => true],
                            ['choice_text' => '6,02 × 10²³ molécules', 'is_correct' => false],
                            ['choice_text' => '2,408 × 10²⁴ molécules', 'is_correct' => false],
                            ['choice_text' => '2,5 × 10² molécules', 'is_correct' => false],
                        ],
                        'explanation' => 'Nombre de molécules = quantité de matière × constante d’Avogadro = 0,25 × 6,02 × 10²³ ≈ 1,505 × 10²³.'
                    ],
                    [
                        'question' => 'Une mole d’atomes de fer et une mole d’atomes de cuivre contiennent-elles le même nombre d’atomes ?',
                        'choices' => [
                            ['choice_text' => 'Oui, une mole contient le même nombre d’entités', 'is_correct' => true],
                            ['choice_text' => 'Non, le fer contient toujours plus d’atomes', 'is_correct' => false],
                            ['choice_text' => 'Non, le cuivre contient toujours moins d’atomes', 'is_correct' => false],
                            ['choice_text' => 'Seulement si leurs masses sont identiques', 'is_correct' => false],
                        ],
                        'explanation' => 'Une mole correspond au même nombre d’entités quel que soit l’élément. Ce qui change, c’est la masse d’une mole.'
                    ],
                    [
                        'question' => 'Quelle affirmation évite une confusion fréquente entre mole et masse ?',
                        'choices' => [
                            ['choice_text' => 'Deux échantillons d’une mole peuvent avoir des masses différentes selon la substance', 'is_correct' => true],
                            ['choice_text' => 'Une mole vaut toujours 1 gramme', 'is_correct' => false],
                            ['choice_text' => 'Une mole et un gramme sont deux noms pour la même unité', 'is_correct' => false],
                            ['choice_text' => 'La masse n’a aucun rapport avec la quantité de matière', 'is_correct' => false],
                        ],
                        'explanation' => 'Une mole donne un nombre d’entités, tandis que le gramme mesure une masse. La masse d’une mole dépend de la substance étudiée.'
                    ],
                    [
                        'question' => 'Un étudiant compare 0,5 mol de N₂ et 0,5 mol de O₂. Que peut-il conclure sans connaître leur masse ?',
                        'choices' => [
                            ['choice_text' => 'Les deux échantillons contiennent le même nombre de molécules', 'is_correct' => true],
                            ['choice_text' => 'Ils ont forcément la même masse', 'is_correct' => false],
                            ['choice_text' => 'Ils ont exactement le même volume dans toutes les conditions', 'is_correct' => false],
                            ['choice_text' => 'Ils contiennent le même nombre d’atomes au total', 'is_correct' => false],
                        ],
                        'explanation' => 'Une même quantité de matière signifie un même nombre de molécules. Leur masse diffère cependant car N₂ et O₂ n’ont pas la même masse molaire.'
                    ],
                ],
            ],

            [
                'title' => 'Calculer une masse molaire',
                'description' => 'Apprenez à déterminer la masse molaire à partir des masses atomiques et de formules chimiques simples.',
                'questions' => [
                    [
                        'question' => 'La masse molaire du carbone atomique C est d’environ :',
                        'choices' => [
                            ['choice_text' => '12 g/mol', 'is_correct' => true],
                            ['choice_text' => '1 g/mol', 'is_correct' => false],
                            ['choice_text' => '6 g/mol', 'is_correct' => false],
                            ['choice_text' => '24 g/mol', 'is_correct' => false],
                        ],
                        'explanation' => 'La masse atomique du carbone est d’environ 12 u, donc sa masse molaire atomique est d’environ 12 g/mol.'
                    ],
                    [
                        'question' => 'On prend H ≈ 1 g/mol et O ≈ 16 g/mol. Quelle est la masse molaire de H₂O ?',
                        'choices' => [
                            ['choice_text' => '18 g/mol', 'is_correct' => true],
                            ['choice_text' => '17 g/mol', 'is_correct' => false],
                            ['choice_text' => '16 g/mol', 'is_correct' => false],
                            ['choice_text' => '34 g/mol', 'is_correct' => false],
                        ],
                        'explanation' => 'H₂O contient deux H et un O : 2 × 1 + 16 = 18 g/mol.'
                    ],
                    [
                        'question' => 'Avec C ≈ 12 g/mol et O ≈ 16 g/mol, quelle est la masse molaire du CO₂ ?',
                        'choices' => [
                            ['choice_text' => '44 g/mol', 'is_correct' => true],
                            ['choice_text' => '28 g/mol', 'is_correct' => false],
                            ['choice_text' => '32 g/mol', 'is_correct' => false],
                            ['choice_text' => '48 g/mol', 'is_correct' => false],
                        ],
                        'explanation' => 'CO₂ contient un C et deux O : 12 + 2 × 16 = 44 g/mol.'
                    ],
                    [
                        'question' => 'Avec Na ≈ 23 g/mol et Cl ≈ 35,5 g/mol, quelle est la masse molaire de NaCl ?',
                        'choices' => [
                            ['choice_text' => '58,5 g/mol', 'is_correct' => true],
                            ['choice_text' => '47,0 g/mol', 'is_correct' => false],
                            ['choice_text' => '35,5 g/mol', 'is_correct' => false],
                            ['choice_text' => '81,5 g/mol', 'is_correct' => false],
                        ],
                        'explanation' => 'NaCl contient un Na et un Cl : 23 + 35,5 = 58,5 g/mol.'
                    ],
                    [
                        'question' => 'Avec H ≈ 1 g/mol et O ≈ 16 g/mol, quelle est la masse molaire de H₂O₂ ?',
                        'choices' => [
                            ['choice_text' => '34 g/mol', 'is_correct' => true],
                            ['choice_text' => '18 g/mol', 'is_correct' => false],
                            ['choice_text' => '32 g/mol', 'is_correct' => false],
                            ['choice_text' => '36 g/mol', 'is_correct' => false],
                        ],
                        'explanation' => 'H₂O₂ contient deux H et deux O : 2 × 1 + 2 × 16 = 34 g/mol.'
                    ],
                    [
                        'question' => 'Une élève calcule la masse molaire de NH₃ avec N ≈ 14 g/mol et H ≈ 1 g/mol. Quel résultat doit-elle obtenir ?',
                        'choices' => [
                            ['choice_text' => '17 g/mol', 'is_correct' => true],
                            ['choice_text' => '15 g/mol', 'is_correct' => false],
                            ['choice_text' => '42 g/mol', 'is_correct' => false],
                            ['choice_text' => '14 g/mol', 'is_correct' => false],
                        ],
                        'explanation' => 'NH₃ contient un azote et trois hydrogènes : 14 + 3 × 1 = 17 g/mol.'
                    ],
                    [
                        'question' => 'Pourquoi faut-il tenir compte des petits indices dans une formule lorsqu’on calcule une masse molaire ?',
                        'choices' => [
                            ['choice_text' => 'Ils indiquent combien d’atomes de chaque élément sont présents', 'is_correct' => true],
                            ['choice_text' => 'Ils indiquent la température du composé', 'is_correct' => false],
                            ['choice_text' => 'Ils donnent directement le nombre de moles dans le récipient', 'is_correct' => false],
                            ['choice_text' => 'Ils indiquent la charge de chaque neutron', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans une formule comme CO₂, l’indice 2 signifie qu’il y a deux atomes d’oxygène. Il faut donc compter deux fois leur masse.'
                    ],
                    [
                        'question' => 'Avec Ca ≈ 40 g/mol et O ≈ 16 g/mol, quelle est la masse molaire de CaO ?',
                        'choices' => [
                            ['choice_text' => '56 g/mol', 'is_correct' => true],
                            ['choice_text' => '24 g/mol', 'is_correct' => false],
                            ['choice_text' => '40 g/mol', 'is_correct' => false],
                            ['choice_text' => '96 g/mol', 'is_correct' => false],
                        ],
                        'explanation' => 'CaO contient un Ca et un O : 40 + 16 = 56 g/mol.'
                    ],
                    [
                        'question' => 'Avec C ≈ 12, H ≈ 1 et O ≈ 16 g/mol, quelle est la masse molaire de CH₄ ?',
                        'choices' => [
                            ['choice_text' => '16 g/mol', 'is_correct' => true],
                            ['choice_text' => '13 g/mol', 'is_correct' => false],
                            ['choice_text' => '20 g/mol', 'is_correct' => false],
                            ['choice_text' => '12 g/mol', 'is_correct' => false],
                        ],
                        'explanation' => 'CH₄ contient un carbone et quatre hydrogènes : 12 + 4 × 1 = 16 g/mol.'
                    ],
                    [
                        'question' => 'Un étudiant trouve 30 g/mol pour CO₂. Quelle erreur a-t-il probablement faite avec C = 12 et O = 16 ?',
                        'choices' => [
                            ['choice_text' => 'Il n’a pas compté les deux atomes d’oxygène', 'is_correct' => true],
                            ['choice_text' => 'Il a ajouté les deux oxygènes deux fois de trop', 'is_correct' => false],
                            ['choice_text' => 'Il a utilisé la masse du sodium', 'is_correct' => false],
                            ['choice_text' => 'Il a converti les grammes en litres', 'is_correct' => false],
                        ],
                        'explanation' => 'Pour CO₂, il faut calculer 12 + 2 × 16 = 44 g/mol. Oublier le deuxième oxygène donne une valeur incorrecte.'
                    ],
                ],
            ],

            [
                'title' => 'Passer des grammes aux moles',
                'description' => 'Utilisez la masse molaire pour convertir une masse en quantité de matière et reconnaissez les erreurs de conversion courantes.',
                'questions' => [
                    [
                        'question' => 'Quelle formule permet de calculer la quantité de matière à partir de la masse et de la masse molaire ?',
                        'choices' => [
                            ['choice_text' => 'n = m / M', 'is_correct' => true],
                            ['choice_text' => 'n = M / m', 'is_correct' => false],
                            ['choice_text' => 'n = m × M', 'is_correct' => false],
                            ['choice_text' => 'n = m + M', 'is_correct' => false],
                        ],
                        'explanation' => 'La relation fondamentale est n = m / M, où n est la quantité de matière, m la masse et M la masse molaire.'
                    ],
                    [
                        'question' => 'Un échantillon de 18 g d’eau possède une masse molaire de 18 g/mol. Combien de moles contient-il ?',
                        'choices' => [
                            ['choice_text' => '1 mol', 'is_correct' => true],
                            ['choice_text' => '18 mol', 'is_correct' => false],
                            ['choice_text' => '0,5 mol', 'is_correct' => false],
                            ['choice_text' => '36 mol', 'is_correct' => false],
                        ],
                        'explanation' => 'n = m / M = 18 / 18 = 1 mol.'
                    ],
                    [
                        'question' => 'On dispose de 44 g de CO₂, dont la masse molaire est 44 g/mol. Quelle est la quantité de matière ?',
                        'choices' => [
                            ['choice_text' => '1 mol', 'is_correct' => true],
                            ['choice_text' => '44 mol', 'is_correct' => false],
                            ['choice_text' => '0,1 mol', 'is_correct' => false],
                            ['choice_text' => '88 mol', 'is_correct' => false],
                        ],
                        'explanation' => 'n = 44 / 44 = 1 mol.'
                    ],
                    [
                        'question' => 'Une solution contient 36 g d’eau. En prenant M(H₂O) = 18 g/mol, combien de moles d’eau sont présentes ?',
                        'choices' => [
                            ['choice_text' => '2 mol', 'is_correct' => true],
                            ['choice_text' => '0,5 mol', 'is_correct' => false],
                            ['choice_text' => '18 mol', 'is_correct' => false],
                            ['choice_text' => '54 mol', 'is_correct' => false],
                        ],
                        'explanation' => 'n = m / M = 36 / 18 = 2 mol.'
                    ],
                    [
                        'question' => 'Un étudiant pèse 29,25 g de NaCl. Avec M(NaCl) = 58,5 g/mol, quelle quantité de matière a-t-il ?',
                        'choices' => [
                            ['choice_text' => '0,50 mol', 'is_correct' => true],
                            ['choice_text' => '2,00 mol', 'is_correct' => false],
                            ['choice_text' => '29,25 mol', 'is_correct' => false],
                            ['choice_text' => '58,5 mol', 'is_correct' => false],
                        ],
                        'explanation' => 'n = 29,25 / 58,5 = 0,50 mol.'
                    ],
                    [
                        'question' => 'Une masse de 8 g d’oxygène O₂ correspond à combien de moles si M(O₂) = 32 g/mol ?',
                        'choices' => [
                            ['choice_text' => '0,25 mol', 'is_correct' => true],
                            ['choice_text' => '4 mol', 'is_correct' => false],
                            ['choice_text' => '8 mol', 'is_correct' => false],
                            ['choice_text' => '0,50 mol', 'is_correct' => false],
                        ],
                        'explanation' => 'n = 8 / 32 = 0,25 mol.'
                    ],
                    [
                        'question' => 'Pourquoi doit-on connaître la masse molaire avant de convertir des grammes en moles ?',
                        'choices' => [
                            ['choice_text' => 'Elle relie la masse mesurée à une mole de la substance', 'is_correct' => true],
                            ['choice_text' => 'Elle donne le numéro atomique de chaque élément', 'is_correct' => false],
                            ['choice_text' => 'Elle indique directement le volume du récipient', 'is_correct' => false],
                            ['choice_text' => 'Elle remplace toujours la balance', 'is_correct' => false],
                        ],
                        'explanation' => 'La masse molaire indique combien pèse une mole d’une substance. Elle permet donc de relier une masse en grammes à une quantité en moles.'
                    ],
                    [
                        'question' => 'Un élève calcule n = 18 × 18 pour 18 g d’eau. Quelle erreur fait-il ?',
                        'choices' => [
                            ['choice_text' => 'Il a multiplié la masse par la masse molaire au lieu de les diviser', 'is_correct' => true],
                            ['choice_text' => 'Il a oublié le numéro atomique de l’oxygène', 'is_correct' => false],
                            ['choice_text' => 'Il a utilisé une température incorrecte', 'is_correct' => false],
                            ['choice_text' => 'Il a compté les neutrons au lieu des molécules', 'is_correct' => false],
                        ],
                        'explanation' => 'La relation est n = m / M. Pour 18 g d’eau : 18 / 18 = 1 mol.'
                    ],
                    [
                        'question' => 'Une bouteille contient 90 g d’eau. Avec M(H₂O) = 18 g/mol, combien de moles d’eau contient-elle ?',
                        'choices' => [
                            ['choice_text' => '5 mol', 'is_correct' => true],
                            ['choice_text' => '0,2 mol', 'is_correct' => false],
                            ['choice_text' => '18 mol', 'is_correct' => false],
                            ['choice_text' => '108 mol', 'is_correct' => false],
                        ],
                        'explanation' => 'n = 90 / 18 = 5 mol.'
                    ],
                    [
                        'question' => 'Un laboratoire utilise 0,75 mol d’une substance dont la masse molaire est 40 g/mol. Quelle masse faut-il peser ?',
                        'choices' => [
                            ['choice_text' => '30 g', 'is_correct' => true],
                            ['choice_text' => '53,3 g', 'is_correct' => false],
                            ['choice_text' => '40,75 g', 'is_correct' => false],
                            ['choice_text' => '0,01875 g', 'is_correct' => false],
                        ],
                        'explanation' => 'On utilise m = n × M : 0,75 × 40 = 30 g.'
                    ],
                ],
            ],

            [
                'title' => 'Compter les particules avec la constante d’Avogadro',
                'description' => 'Transformez une quantité de matière en nombre d’atomes, de molécules ou d’ions grâce à la constante d’Avogadro.',
                'questions' => [
                    [
                        'question' => 'Quelle constante permet de convertir des moles en nombre de particules ?',
                        'choices' => [
                            ['choice_text' => 'La constante d’Avogadro', 'is_correct' => true],
                            ['choice_text' => 'La constante des gaz uniquement', 'is_correct' => false],
                            ['choice_text' => 'La constante de gravité', 'is_correct' => false],
                            ['choice_text' => 'La constante de Faraday uniquement', 'is_correct' => false],
                        ],
                        'explanation' => 'La constante d’Avogadro, environ 6,02 × 10²³ mol⁻¹, donne le nombre d’entités correspondant à une mole.'
                    ],
                    [
                        'question' => 'Une mole de molécules d’eau contient environ :',
                        'choices' => [
                            ['choice_text' => '6,02 × 10²³ molécules', 'is_correct' => true],
                            ['choice_text' => '18 molécules', 'is_correct' => false],
                            ['choice_text' => '1,8 × 10²² molécules', 'is_correct' => false],
                            ['choice_text' => '3,01 × 10¹⁰ molécules', 'is_correct' => false],
                        ],
                        'explanation' => 'Une mole de n’importe quelle espèce contient environ 6,02 × 10²³ entités de cette espèce.'
                    ],
                    [
                        'question' => 'Combien de molécules trouve-t-on dans 2 mol de CO₂ ?',
                        'choices' => [
                            ['choice_text' => '1,204 × 10²⁴ molécules', 'is_correct' => true],
                            ['choice_text' => '6,02 × 10²³ molécules', 'is_correct' => false],
                            ['choice_text' => '3,01 × 10²³ molécules', 'is_correct' => false],
                            ['choice_text' => '2,0 × 10²⁴ molécules', 'is_correct' => false],
                        ],
                        'explanation' => 'N = n × Nₐ = 2 × 6,02 × 10²³ = 1,204 × 10²⁴ molécules.'
                    ],
                    [
                        'question' => 'Combien de molécules y a-t-il dans 0,5 mol de O₂ ?',
                        'choices' => [
                            ['choice_text' => '3,01 × 10²³ molécules', 'is_correct' => true],
                            ['choice_text' => '6,02 × 10²³ molécules', 'is_correct' => false],
                            ['choice_text' => '1,204 × 10²⁴ molécules', 'is_correct' => false],
                            ['choice_text' => '0,5 × 10²³ molécules', 'is_correct' => false],
                        ],
                        'explanation' => 'N = 0,5 × 6,02 × 10²³ = 3,01 × 10²³ molécules.'
                    ],
                    [
                        'question' => 'Un échantillon contient 6,02 × 10²³ atomes de fer. Quelle quantité de matière cela représente-t-il ?',
                        'choices' => [
                            ['choice_text' => '1 mol', 'is_correct' => true],
                            ['choice_text' => '6,02 mol', 'is_correct' => false],
                            ['choice_text' => '0,1 mol', 'is_correct' => false],
                            ['choice_text' => '10 mol', 'is_correct' => false],
                        ],
                        'explanation' => '6,02 × 10²³ entités correspondent approximativement à une mole.'
                    ],
                    [
                        'question' => 'Pourquoi une mole de NaCl ne contient-elle pas des « molécules de NaCl » au sens d’une petite molécule indépendante ?',
                        'choices' => [
                            ['choice_text' => 'Le chlorure de sodium forme un réseau ionique composé d’ions', 'is_correct' => true],
                            ['choice_text' => 'Le sodium et le chlore sont des gaz', 'is_correct' => false],
                            ['choice_text' => 'NaCl ne contient aucun ion', 'is_correct' => false],
                            ['choice_text' => 'Le nombre d’Avogadro ne fonctionne pas pour NaCl', 'is_correct' => false],
                        ],
                        'explanation' => 'NaCl est un solide ionique. On parle plutôt d’unités formulaires et d’ions Na⁺ et Cl⁻ dans son réseau.'
                    ],
                    [
                        'question' => 'Une quantité de 0,25 mol d’atomes de cuivre contient environ :',
                        'choices' => [
                            ['choice_text' => '1,505 × 10²³ atomes', 'is_correct' => true],
                            ['choice_text' => '6,02 × 10²³ atomes', 'is_correct' => false],
                            ['choice_text' => '2,408 × 10²⁴ atomes', 'is_correct' => false],
                            ['choice_text' => '2,5 × 10²² atomes', 'is_correct' => false],
                        ],
                        'explanation' => 'N = 0,25 × 6,02 × 10²³ = 1,505 × 10²³ atomes.'
                    ],
                    [
                        'question' => 'Une élève possède 3,01 × 10²³ molécules de H₂O. Quelle quantité de matière a-t-elle ?',
                        'choices' => [
                            ['choice_text' => '0,50 mol', 'is_correct' => true],
                            ['choice_text' => '3,01 mol', 'is_correct' => false],
                            ['choice_text' => '2 mol', 'is_correct' => false],
                            ['choice_text' => '1 mol', 'is_correct' => false],
                        ],
                        'explanation' => 'n = N / Nₐ = 3,01 × 10²³ ÷ 6,02 × 10²³ = 0,50 mol.'
                    ],
                    [
                        'question' => 'Une mole de molécules de H₂O contient combien d’atomes d’hydrogène au total ?',
                        'choices' => [
                            ['choice_text' => '1,204 × 10²⁴ atomes d’hydrogène', 'is_correct' => true],
                            ['choice_text' => '6,02 × 10²³ atomes d’hydrogène', 'is_correct' => false],
                            ['choice_text' => '3,01 × 10²³ atomes d’hydrogène', 'is_correct' => false],
                            ['choice_text' => '2 atomes d’hydrogène', 'is_correct' => false],
                        ],
                        'explanation' => 'Chaque molécule d’eau contient 2 H. Une mole d’eau contient donc 2 × 6,02 × 10²³ = 1,204 × 10²⁴ atomes d’hydrogène.'
                    ],
                    [
                        'question' => 'Une mole de CO₂ contient combien d’atomes au total par molécule ?',
                        'choices' => [
                            ['choice_text' => '3 atomes', 'is_correct' => true],
                            ['choice_text' => '2 atomes', 'is_correct' => false],
                            ['choice_text' => '1 atome', 'is_correct' => false],
                            ['choice_text' => '6 atomes', 'is_correct' => false],
                        ],
                        'explanation' => 'Chaque molécule de CO₂ contient un atome de carbone et deux atomes d’oxygène, soit trois atomes au total.'
                    ],
                ],
            ],

            [
                'title' => 'Lire et équilibrer une équation chimique',
                'description' => 'Apprenez à lire une équation chimique, à conserver les atomes et à placer correctement les coefficients devant les formules.',
                'questions' => [
                    [
                        'question' => 'Dans une équation chimique, les substances placées à gauche de la flèche sont appelées :',
                        'choices' => [
                            ['choice_text' => 'Réactifs', 'is_correct' => true],
                            ['choice_text' => 'Produits', 'is_correct' => false],
                            ['choice_text' => 'Catalyseurs uniquement', 'is_correct' => false],
                            ['choice_text' => 'Solvants obligatoirement', 'is_correct' => false],
                        ],
                        'explanation' => 'Les réactifs sont les substances présentes au départ d’une réaction. Les produits apparaissent à droite de la flèche.'
                    ],
                    [
                        'question' => 'Pourquoi équilibre-t-on une équation chimique ?',
                        'choices' => [
                            ['choice_text' => 'Pour conserver le même nombre d’atomes de chaque élément des deux côtés', 'is_correct' => true],
                            ['choice_text' => 'Pour rendre tous les coefficients égaux à 1', 'is_correct' => false],
                            ['choice_text' => 'Pour changer les éléments présents', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer les molécules inutiles', 'is_correct' => false],
                        ],
                        'explanation' => 'Lors d’une réaction chimique ordinaire, les atomes sont réarrangés mais ne sont pas créés ni détruits. Le nombre de chaque type d’atome doit donc être conservé.'
                    ],
                    [
                        'question' => 'Dans l’équation H₂ + Cl₂ → HCl, quel coefficient faut-il placer devant HCl pour équilibrer l’hydrogène et le chlore ?',
                        'choices' => [
                            ['choice_text' => 2', 'is_correct' => true],
                            ['choice_text' => 1', 'is_correct' => false],
                            ['choice_text' => 3', 'is_correct' => false],
                            ['choice_text' => 4', 'is_correct' => false],
                        ],
                        'explanation' => 'H₂ contient 2 H et Cl₂ contient 2 Cl. Il faut donc 2 HCl pour avoir 2 H et 2 Cl.'
                    ],
                    [
                        'question' => 'Quelle équation est correctement équilibrée pour la formation de l’eau ?',
                        'choices' => [
                            ['choice_text' => '2H₂ + O₂ → 2H₂O', 'is_correct' => true],
                            ['choice_text' => 'H₂ + O₂ → H₂O', 'is_correct' => false],
                            ['choice_text' => 'H₂ + 2O₂ → 2H₂O', 'is_correct' => false],
                            ['choice_text' => '2H₂ + 2O₂ → H₂O', 'is_correct' => false],
                        ],
                        'explanation' => 'À gauche, on a 4 H et 2 O. À droite, 2H₂O donne également 4 H et 2 O. L’équation est donc équilibrée.'
                    ],
                    [
                        'question' => 'Dans 2H₂ + O₂ → 2H₂O, combien de molécules d’eau sont formées selon l’équation ?',
                        'choices' => [
                            ['choice_text' => 2', 'is_correct' => true],
                            ['choice_text' => 1', 'is_correct' => false],
                            ['choice_text' => 3', 'is_correct' => false],
                            ['choice_text' => 4', 'is_correct' => false],
                        ],
                        'explanation' => 'Le coefficient 2 placé devant H₂O signifie que deux molécules d’eau participent au rapport indiqué par l’équation.'
                    ],
                    [
                        'question' => 'Quelle équation représente correctement la réaction entre le sodium et le chlore ?',
                        'choices' => [
                            ['choice_text' => '2Na + Cl₂ → 2NaCl', 'is_correct' => true],
                            ['choice_text' => 'Na + Cl₂ → NaCl', 'is_correct' => false],
                            ['choice_text' => 'Na₂ + Cl → 2NaCl', 'is_correct' => false],
                            ['choice_text' => '2Na + 2Cl₂ → NaCl', 'is_correct' => false],
                        ],
                        'explanation' => 'Cl₂ contient deux atomes de chlore. Il faut donc deux Na pour former deux unités de NaCl : 2Na + Cl₂ → 2NaCl.'
                    ],
                    [
                        'question' => 'Lorsqu’on équilibre une équation, que faut-il modifier en priorité ?',
                        'choices' => [
                            ['choice_text' => 'Les coefficients devant les formules', 'is_correct' => true],
                            ['choice_text' => 'Les indices à l’intérieur des formules', 'is_correct' => false],
                            ['choice_text' => 'Les symboles des éléments', 'is_correct' => false],
                            ['choice_text' => 'Les noms des produits', 'is_correct' => false],
                        ],
                        'explanation' => 'On modifie les coefficients pour changer le nombre de particules. Modifier un indice changerait l’identité chimique de la substance.'
                    ],
                    [
                        'question' => 'Un étudiant transforme H₂O en H₂O₂ pour équilibrer une réaction. Pourquoi ce geste est-il incorrect ?',
                        'choices' => [
                            ['choice_text' => 'Il a changé la formule chimique de la substance au lieu de modifier un coefficient', 'is_correct' => true],
                            ['choice_text' => 'Il a utilisé trop peu de coefficients', 'is_correct' => false],
                            ['choice_text' => 'Il a oublié la flèche de réaction', 'is_correct' => false],
                            ['choice_text' => 'Il a ajouté un métal', 'is_correct' => false],
                        ],
                        'explanation' => 'H₂O et H₂O₂ sont deux substances différentes. Pour équilibrer une équation, on doit conserver les formules et modifier seulement les coefficients.'
                    ],
                    [
                        'question' => 'Quelle est la bonne forme équilibrée de N₂ + H₂ → NH₃ ?',
                        'choices' => [
                            ['choice_text' => 'N₂ + 3H₂ → 2NH₃', 'is_correct' => true],
                            ['choice_text' => 'N₂ + H₂ → 2NH₃', 'is_correct' => false],
                            ['choice_text' => '2N₂ + H₂ → 2NH₃', 'is_correct' => false],
                            ['choice_text' => 'N₂ + 2H₂ → NH₃', 'is_correct' => false],
                        ],
                        'explanation' => 'Deux molécules de NH₃ contiennent 2 N et 6 H. Il faut donc 1 N₂ et 3 H₂ pour obtenir ces quantités.'
                    ],
                    [
                        'question' => 'Un élève trouve 4 atomes d’oxygène à gauche d’une équation et 6 à droite. Que doit-il faire ?',
                        'choices' => [
                            ['choice_text' => 'Modifier les coefficients jusqu’à obtenir le même nombre d’atomes d’oxygène des deux côtés', 'is_correct' => true],
                            ['choice_text' => 'Changer le symbole O en un autre élément', 'is_correct' => false],
                            ['choice_text' => 'Supprimer les oxygènes du côté gauche', 'is_correct' => false],
                            ['choice_text' => 'Ajouter une nouvelle flèche sans modifier l’équation', 'is_correct' => false],
                        ],
                        'explanation' => 'Une équation équilibrée doit conserver chaque élément. Les coefficients doivent donc être ajustés jusqu’à égaliser les nombres d’atomes.'
                    ],
                ],
            ],

            [
                'title' => 'Rapports stœchiométriques simples',
                'description' => 'Utilisez les coefficients d’une équation équilibrée pour relier les quantités de réactifs et de produits.',
                'questions' => [
                    [
                        'question' => 'Dans l’équation 2H₂ + O₂ → 2H₂O, quel est le rapport entre H₂ et O₂ ?',
                        'choices' => [
                            ['choice_text' => '2 pour 1', 'is_correct' => true],
                            ['choice_text' => '1 pour 2', 'is_correct' => false],
                            ['choice_text' => '2 pour 2', 'is_correct' => false],
                            ['choice_text' => '1 pour 1', 'is_correct' => false],
                        ],
                        'explanation' => 'Les coefficients indiquent 2 moles de H₂ pour 1 mole de O₂. Le rapport H₂:O₂ est donc 2:1.'
                    ],
                    [
                        'question' => 'Selon 2H₂ + O₂ → 2H₂O, combien de moles de H₂O sont formées à partir de 1 mol de O₂ si H₂ est en quantité suffisante ?',
                        'choices' => [
                            ['choice_text' => 2 mol', 'is_correct' => true],
                            ['choice_text' => 1 mol', 'is_correct' => false],
                            ['choice_text' => 0,5 mol', 'is_correct' => false],
                            ['choice_text' => 3 mol', 'is_correct' => false],
                        ],
                        'explanation' => 'L’équation indique 1 mol de O₂ → 2 mol de H₂O. Le rapport est donc directement 1:2.'
                    ],
                    [
                        'question' => 'Dans N₂ + 3H₂ → 2NH₃, combien de moles de NH₃ peuvent être produites par 3 mol de H₂ si N₂ est en excès ?',
                        'choices' => [
                            ['choice_text' => 2 mol', 'is_correct' => true],
                            ['choice_text' => 3 mol', 'is_correct' => false],
                            ['choice_text' => 1 mol', 'is_correct' => false],
                            ['choice_text' => 6 mol', 'is_correct' => false],
                        ],
                        'explanation' => 'Le rapport est 3 mol H₂ pour 2 mol NH₃. Donc 3 mol H₂ permettent de former 2 mol NH₃.'
                    ],
                    [
                        'question' => 'Dans 2Na + Cl₂ → 2NaCl, combien de moles de NaCl forment 2 mol de Na si Cl₂ est suffisant ?',
                        'choices' => [
                            ['choice_text' => 2 mol', 'is_correct' => true],
                            ['choice_text' => 1 mol', 'is_correct' => false],
                            ['choice_text' => 4 mol', 'is_correct' => false],
                            ['choice_text' => 0,5 mol', 'is_correct' => false],
                        ],
                        'explanation' => 'Le rapport 2Na : 2NaCl se simplifie en 1:1. Deux moles de Na donnent donc deux moles de NaCl.'
                    ],
                    [
                        'question' => 'Selon CaCO₃ → CaO + CO₂, combien de moles de CO₂ sont produites par 1 mol de CaCO₃ ?',
                        'choices' => [
                            ['choice_text' => 1 mol', 'is_correct' => true],
                            ['choice_text' => 2 mol', 'is_correct' => false],
                            ['choice_text' => 0,5 mol', 'is_correct' => false],
                            ['choice_text' => 3 mol', 'is_correct' => false],
                        ],
                        'explanation' => 'Tous les coefficients sont égaux à 1. Une mole de CaCO₃ donne donc une mole de CO₂.'
                    ],
                    [
                        'question' => 'Dans 2H₂ + O₂ → 2H₂O, un élève dispose de 4 mol de H₂ et de suffisamment de O₂. Combien de moles d’eau peuvent se former ?',
                        'choices' => [
                            ['choice_text' => 4 mol', 'is_correct' => true],
                            ['choice_text' => 2 mol', 'is_correct' => false],
                            ['choice_text' => 8 mol', 'is_correct' => false],
                            ['choice_text' => 1 mol', 'is_correct' => false],
                        ],
                        'explanation' => 'Le rapport H₂:H₂O est 2:2, donc 1:1. Quatre moles de H₂ permettent de former quatre moles de H₂O.'
                    ],
                    [
                        'question' => 'Dans N₂ + 3H₂ → 2NH₃, combien de moles de N₂ faut-il pour réagir avec 6 mol de H₂ ?',
                        'choices' => [
                            ['choice_text' => 2 mol', 'is_correct' => true],
                            ['choice_text' => 6 mol', 'is_correct' => false],
                            ['choice_text' => 3 mol', 'is_correct' => false],
                            ['choice_text' => 1 mol', 'is_correct' => false],
                        ],
                        'explanation' => 'Le rapport est 1 mol N₂ pour 3 mol H₂. Pour 6 mol H₂, il faut donc 6 ÷ 3 = 2 mol de N₂.'
                    ],
                    [
                        'question' => 'Pourquoi utilise-t-on les coefficients d’une équation équilibrée dans les calculs stœchiométriques ?',
                        'choices' => [
                            ['choice_text' => 'Ils donnent les proportions dans lesquelles les substances réagissent', 'is_correct' => true],
                            ['choice_text' => 'Ils donnent directement les masses en grammes', 'is_correct' => false],
                            ['choice_text' => 'Ils indiquent la température de réaction', 'is_correct' => false],
                            ['choice_text' => 'Ils remplacent toujours les unités de volume', 'is_correct' => false],
                        ],
                        'explanation' => 'Les coefficients représentent des rapports de quantités de matière entre les réactifs et les produits.'
                    ],
                    [
                        'question' => 'Une recette chimique imaginaire suit la relation A + 2B → C. Si on utilise 3 mol de A avec assez de B, combien de moles de C obtient-on ?',
                        'choices' => [
                            ['choice_text' => 3 mol', 'is_correct' => true],
                            ['choice_text' => 6 mol', 'is_correct' => false],
                            ['choice_text' => 1,5 mol', 'is_correct' => false],
                            ['choice_text' => 2 mol', 'is_correct' => false],
                        ],
                        'explanation' => 'Le rapport A:C est 1:1. Trois moles de A permettent donc de produire trois moles de C si B est en excès.'
                    ],
                    [
                        'question' => 'Pour l’équation 2A + 3B → 4C, combien de moles de C correspondent à 6 mol de B si A est en excès ?',
                        'choices' => [
                            ['choice_text' => 8 mol', 'is_correct' => true],
                            ['choice_text' => 6 mol', 'is_correct' => false],
                            ['choice_text' => 4 mol', 'is_correct' => false],
                            ['choice_text' => 12 mol', 'is_correct' => false],
                        ],
                        'explanation' => 'Le rapport B:C est 3:4. Avec 6 mol de B, soit deux fois 3 mol, on obtient 8 mol de C.'
                    ],
                ],
            ],

            [
                'title' => 'Le réactif limitant',
                'description' => 'Comprenez pourquoi une réaction s’arrête lorsque l’un des réactifs est épuisé et apprenez à identifier le réactif limitant dans des cas simples.',
                'questions' => [
                    [
                        'question' => 'Qu’appelle-t-on réactif limitant ?',
                        'choices' => [
                            ['choice_text' => 'Le réactif qui est consommé en premier et limite la quantité de produit formé', 'is_correct' => true],
                            ['choice_text' => 'Le réactif qui reste toujours en plus grande quantité', 'is_correct' => false],
                            ['choice_text' => 'Le produit formé en dernier', 'is_correct' => false],
                            ['choice_text' => 'Le catalyseur de la réaction', 'is_correct' => false],
                        ],
                        'explanation' => 'Le réactif limitant est celui dont la quantité disponible ne permet plus de poursuivre la réaction. Il détermine la quantité maximale de produit.'
                    ],
                    [
                        'question' => 'Dans une recette nécessitant 2 œufs pour 1 gâteau, vous avez 6 œufs et beaucoup de farine. Les œufs sont-ils limitants si vous préparez 3 gâteaux ?',
                        'choices' => [
                            ['choice_text' => 'Non, ils permettent exactement de préparer 3 gâteaux', 'is_correct' => true],
                            ['choice_text' => 'Oui, dès le premier gâteau', 'is_correct' => false],
                            ['choice_text' => 'Oui, après deux gâteaux', 'is_correct' => false],
                            ['choice_text' => 'Impossible à savoir', 'is_correct' => false],
                        ],
                        'explanation' => 'Il faut 2 œufs par gâteau. Six œufs permettent exactement 6 ÷ 2 = 3 gâteaux, à condition que les autres ingrédients soient suffisants.'
                    ],
                    [
                        'question' => 'Dans 2H₂ + O₂ → 2H₂O, on dispose de 2 mol de H₂ et de 2 mol de O₂. Quel réactif est limitant ?',
                        'choices' => [
                            ['choice_text' => H₂', 'is_correct' => true],
                            ['choice_text' => O₂', 'is_correct' => false],
                            ['choice_text' => H₂O', 'is_correct' => false],
                            ['choice_text' => Aucun, la réaction ne peut pas commencer', 'is_correct' => false],
                        ],
                        'explanation' => 'Il faut 2 mol de H₂ pour 1 mol de O₂. Les 2 mol de H₂ ne peuvent consommer qu’1 mol de O₂, donc H₂ est épuisé en premier.'
                    ],
                    [
                        'question' => 'Dans la même réaction, 2H₂ + O₂ → 2H₂O, si H₂ est limitant avec 2 mol disponibles, combien de moles d’eau peuvent être formées ?',
                        'choices' => [
                            ['choice_text' => 2 mol', 'is_correct' => true],
                            ['choice_text' => 1 mol', 'is_correct' => false],
                            ['choice_text' => 4 mol', 'is_correct' => false],
                            ['choice_text' => 0,5 mol', 'is_correct' => false],
                        ],
                        'explanation' => 'Le rapport H₂:H₂O est 2:2, donc 1:1. Deux moles de H₂ permettent de former deux moles de H₂O.'
                    ],
                    [
                        'question' => 'Dans N₂ + 3H₂ → 2NH₃, on dispose de 1 mol de N₂ et de 2 mol de H₂. Quel est le réactif limitant ?',
                        'choices' => [
                            ['choice_text' => H₂', 'is_correct' => true],
                            ['choice_text' => N₂', 'is_correct' => false],
                            ['choice_text' => NH₃', 'is_correct' => false],
                            ['choice_text' => Aucun', 'is_correct' => false],
                        ],
                        'explanation' => 'Une mole de N₂ nécessite 3 moles de H₂. Comme seulement 2 moles de H₂ sont disponibles, H₂ s’épuise en premier.'
                    ],
                    [
                        'question' => 'Dans N₂ + 3H₂ → 2NH₃, avec 1 mol de N₂ et 2 mol de H₂, combien de moles de NH₃ peuvent théoriquement se former ?',
                        'choices' => [
                            ['choice_text' => 4/3 mol', 'is_correct' => true],
                            ['choice_text' => 2 mol', 'is_correct' => false],
                            ['choice_text' => 1 mol', 'is_correct' => false],
                            ['choice_text' => 3 mol', 'is_correct' => false],
                        ],
                        'explanation' => 'Le rapport H₂:NH₃ est 3:2. Avec 2 mol de H₂, on obtient 2 × (2/3) = 4/3 mol de NH₃.'
                    ],
                    [
                        'question' => 'Pourquoi un réactif en excès reste-t-il après la réaction ?',
                        'choices' => [
                            ['choice_text' => 'Parce qu’il était présent en quantité supérieure à celle nécessaire selon les proportions de l’équation', 'is_correct' => true],
                            ['choice_text' => 'Parce qu’il ne réagit jamais', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’il devient automatiquement un produit', 'is_correct' => false],
                            ['choice_text' => 'Parce que tous les coefficients étaient faux', 'is_correct' => false],
                        ],
                        'explanation' => 'Le réactif en excès est présent en plus grande quantité que nécessaire par rapport au réactif limitant. Une partie reste donc après la réaction.'
                    ],
                    [
                        'question' => 'Une expérience nécessite 1 mol de A pour 2 mol de B. Le laboratoire possède 3 mol de A et 4 mol de B. Quel est le réactif limitant ?',
                        'choices' => [
                            ['choice_text' => B', 'is_correct' => true],
                            ['choice_text' => A', 'is_correct' => false],
                            ['choice_text' => Le produit C', 'is_correct' => false],
                            ['choice_text' => Aucun', 'is_correct' => false],
                        ],
                        'explanation' => 'Pour 3 mol de A, il faudrait 6 mol de B. Comme seulement 4 mol de B sont disponibles, B est le réactif limitant.'
                    ],
                    [
                        'question' => 'Un élève choisit comme réactif limitant la substance qui possède la plus petite masse en grammes. Pourquoi cette méthode peut-elle être fausse ?',
                        'choices' => [
                            ['choice_text' => 'Le réactif limitant dépend des quantités de matière et des proportions de l’équation, pas seulement de la masse', 'is_correct' => true],
                            ['choice_text' => 'La masse n’existe pas en chimie', 'is_correct' => false],
                            ['choice_text' => 'Le réactif limitant est toujours le produit', 'is_correct' => false],
                            ['choice_text' => 'Tous les réactifs ont la même masse molaire', 'is_correct' => false],
                        ],
                        'explanation' => 'Deux substances ayant des masses différentes peuvent contenir des quantités de matière très différentes. Il faut donc comparer les moles aux proportions stœchiométriques.'
                    ],
                    [
                        'question' => 'Dans une petite expérience, A + B → C. On utilise 5 mol de A et 2 mol de B. Si la réaction exige les mêmes quantités de A et B, que se passe-t-il ?',
                        'choices' => [
                            ['choice_text' => B est limitant et 2 mol de C peuvent se former', 'is_correct' => true],
                            ['choice_text' => A est limitant et 5 mol de C se forment', 'is_correct' => false],
                            ['choice_text' => Les deux sont entièrement consommés et 7 mol de C se forment', 'is_correct' => false],
                            ['choice_text' => Aucun produit ne peut se former', 'is_correct' => false],
                        ],
                        'explanation' => 'Le rapport demandé est 1:1. Les 2 mol de B peuvent réagir avec seulement 2 mol de A, donc B limite la réaction et 2 mol de C se forment.'
                    ],
                ],
            ],

            [
                'title' => 'De la stœchiométrie à la masse du produit',
                'description' => 'Combinez équation équilibrée, rapport molaire et masse molaire pour résoudre des problèmes simples en plusieurs étapes.',
                'questions' => [
                    [
                        'question' => 'Pour calculer une masse de produit à partir d’une masse de réactif, quelle suite d’étapes est généralement correcte ?',
                        'choices' => [
                            ['choice_text' => 'Masse → moles → rapport stœchiométrique → moles → masse', 'is_correct' => true],
                            ['choice_text' => 'Masse → température → volume → masse', 'is_correct' => false],
                            ['choice_text' => 'Masse → symbole chimique → température → moles', 'is_correct' => false],
                            ['choice_text' => 'Masse → nombre atomique → volume uniquement', 'is_correct' => false],
                        ],
                        'explanation' => 'La stœchiométrie travaille principalement avec les moles. On convertit donc d’abord la masse en moles, puis on utilise le rapport de l’équation avant de revenir à une masse.'
                    ],
                    [
                        'question' => 'Dans CaCO₃ → CaO + CO₂, 1 mol de CaCO₃ produit combien de moles de CO₂ ?',
                        'choices' => [
                            ['choice_text' => 1 mol', 'is_correct' => true],
                            ['choice_text' => 2 mol', 'is_correct' => false],
                            ['choice_text' => 0,5 mol', 'is_correct' => false],
                            ['choice_text' => 3 mol', 'is_correct' => false],
                        ],
                        'explanation' => 'Les coefficients sont 1:1. Une mole de CaCO₃ produit donc une mole de CO₂.'
                    ],
                    [
                        'question' => 'La masse molaire du CO₂ est 44 g/mol. Quelle masse correspond à 2 mol de CO₂ ?',
                        'choices' => [
                            ['choice_text' => 88 g', 'is_correct' => true],
                            ['choice_text' => 22 g', 'is_correct' => false],
                            ['choice_text' => 46 g', 'is_correct' => false],
                            ['choice_text' => 132 g', 'is_correct' => false],
                        ],
                        'explanation' => 'm = n × M = 2 × 44 = 88 g.'
                    ],
                    [
                        'question' => 'Dans 2H₂ + O₂ → 2H₂O, combien de grammes d’eau sont produits par 1 mol de O₂ ? On prend M(H₂O) = 18 g/mol.',
                        'choices' => [
                            ['choice_text' => 36 g', 'is_correct' => true],
                            ['choice_text' => 18 g', 'is_correct' => false],
                            ['choice_text' => 9 g', 'is_correct' => false],
                            ['choice_text' => 54 g', 'is_correct' => false],
                        ],
                        'explanation' => '1 mol de O₂ produit 2 mol de H₂O. La masse est donc 2 × 18 = 36 g.'
                    ],
                    [
                        'question' => 'Dans CaCO₃ → CaO + CO₂, on chauffe 100 g de CaCO₃. Avec M(CaCO₃) = 100 g/mol, combien de moles de CaCO₃ utilise-t-on ?',
                        'choices' => [
                            ['choice_text' => 1 mol', 'is_correct' => true],
                            ['choice_text' => 100 mol', 'is_correct' => false],
                            ['choice_text' => 0,1 mol', 'is_correct' => false],
                            ['choice_text' => 10 mol', 'is_correct' => false],
                        ],
                        'explanation' => 'n = m / M = 100 / 100 = 1 mol.'
                    ],
                    [
                        'question' => 'Avec 1 mol de CaCO₃ dans la réaction CaCO₃ → CaO + CO₂, quelle masse de CO₂ peut théoriquement être obtenue ? M(CO₂) = 44 g/mol.',
                        'choices' => [
                            ['choice_text' => 44 g', 'is_correct' => true],
                            ['choice_text' => 100 g', 'is_correct' => false],
                            ['choice_text' => 22 g', 'is_correct' => false],
                            ['choice_text' => 56 g', 'is_correct' => false],
                        ],
                        'explanation' => 'Le rapport CaCO₃:CO₂ est 1:1. Une mole de CaCO₃ donne donc une mole de CO₂, soit 44 g.'
                    ],
                    [
                        'question' => 'Dans 2Na + Cl₂ → 2NaCl, combien de moles de NaCl peuvent être produites à partir de 3 mol de Na si Cl₂ est en excès ?',
                        'choices' => [
                            ['choice_text' => 3 mol', 'is_correct' => true],
                            ['choice_text' => 1,5 mol', 'is_correct' => false],
                            ['choice_text' => 6 mol', 'is_correct' => false],
                            ['choice_text' => 2 mol', 'is_correct' => false],
                        ],
                        'explanation' => 'Le rapport Na:NaCl est 2:2, donc 1:1. Trois moles de sodium donnent trois moles de NaCl.'
                    ],
                    [
                        'question' => 'Avec M(NaCl) = 58,5 g/mol, quelle masse de NaCl correspond à 3 mol produites ?',
                        'choices' => [
                            ['choice_text' => 175,5 g', 'is_correct' => true],
                            ['choice_text' => 117 g', 'is_correct' => false],
                            ['choice_text' => 58,5 g', 'is_correct' => false],
                            ['choice_text' => 19,5 g', 'is_correct' => false],
                        ],
                        'explanation' => 'm = n × M = 3 × 58,5 = 175,5 g.'
                    ],
                    [
                        'question' => 'Un élève trouve directement 44 g de CO₂ à partir de 100 g de CaCO₃ sans passer par les moles. Pourquoi son calcul peut-il parfois sembler fonctionner ici ?',
                        'choices' => [
                            ['choice_text' => 'Parce que les valeurs de masse molaire choisies rendent le calcul très simple dans ce cas précis', 'is_correct' => true],
                            ['choice_text' => 'Parce qu’il ne faut jamais utiliser les moles', 'is_correct' => false],
                            ['choice_text' => 'Parce que toute masse de CaCO₃ vaut toujours 44 g de CO₂', 'is_correct' => false],
                            ['choice_text' => 'Parce que les masses molaires sont toujours égales', 'is_correct' => false],
                        ],
                        'explanation' => 'Ici, 100 g de CaCO₃ correspondent exactement à 1 mol avec la valeur donnée. Le détour par les moles reste la méthode générale et fiable pour les autres situations.'
                    ],
                    [
                        'question' => 'Une réaction suit A → 2B. Si 5 mol de A réagissent complètement, combien de moles de B sont formées ?',
                        'choices' => [
                            ['choice_text' => 10 mol', 'is_correct' => true],
                            ['choice_text' => 5 mol', 'is_correct' => false],
                            ['choice_text' => 2,5 mol', 'is_correct' => false],
                            ['choice_text' => 7 mol', 'is_correct' => false],
                        ],
                        'explanation' => 'Le rapport A:B est 1:2. Donc 5 mol de A donnent 5 × 2 = 10 mol de B.'
                    ],
                ],
            ],

            [
                'title' => 'Rendement, excès et pertes',
                'description' => 'Comprenez pourquoi une expérience réelle peut produire moins de matière que prévu et distinguez rendement théorique et résultat expérimental.',
                'questions' => [
                    [
                        'question' => 'Le rendement théorique correspond à :',
                        'choices' => [
                            ['choice_text' => 'La quantité maximale de produit calculée à partir de la stœchiométrie', 'is_correct' => true],
                            ['choice_text' => 'La quantité réellement mesurée après l’expérience', 'is_correct' => false],
                            ['choice_text' => 'La quantité de réactif restant uniquement', 'is_correct' => false],
                            ['choice_text' => 'La température maximale de la réaction', 'is_correct' => false],
                        ],
                        'explanation' => 'Le rendement théorique est la quantité maximale que la réaction devrait produire selon les calculs, dans des conditions idéales.'
                    ],
                    [
                        'question' => 'Pourquoi le rendement réel d’une expérience peut-il être inférieur au rendement théorique ?',
                        'choices' => [
                            ['choice_text' => 'Il peut y avoir des pertes, des réactions secondaires ou une conversion incomplète', 'is_correct' => true],
                            ['choice_text' => 'Les atomes cessent d’exister', 'is_correct' => false],
                            ['choice_text' => 'La masse molaire devient toujours nulle', 'is_correct' => false],
                            ['choice_text' => 'Une équation équilibrée ne peut jamais prédire de produit', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans une vraie expérience, une partie du produit peut être perdue ou la réaction peut ne pas aller complètement jusqu’au bout.'
                    ],
                    [
                        'question' => 'Une réaction devrait produire théoriquement 10 g et le laboratoire récupère 8 g. Quel rendement réel est obtenu ?',
                        'choices' => [
                            ['choice_text' => 80 %', 'is_correct' => true],
                            ['choice_text' => 20 %', 'is_correct' => false],
                            ['choice_text' => 125 %', 'is_correct' => false],
                            ['choice_text' => 8 %', 'is_correct' => false],
                        ],
                        'explanation' => 'Rendement = (masse réelle / masse théorique) × 100 = (8 / 10) × 100 = 80 %.'
                    ],
                    [
                        'question' => 'Une expérience a un rendement de 50 %. Que signifie simplement cette valeur ?',
                        'choices' => [
                            ['choice_text' => 'On a obtenu la moitié de la quantité théorique de produit', 'is_correct' => true],
                            ['choice_text' => 'La moitié des réactifs n’a jamais existé', 'is_correct' => false],
                            ['choice_text' => 'La réaction s’est déroulée à 50 °C', 'is_correct' => false],
                            ['choice_text' => 'La moitié des atomes a été détruite', 'is_correct' => false],
                        ],
                        'explanation' => 'Un rendement de 50 % signifie que la quantité réellement obtenue correspond à la moitié de la quantité théorique calculée.'
                    ],
                    [
                        'question' => 'Si le rendement théorique d’un produit est 25 g et que le rendement est de 60 %, quelle masse réelle obtient-on ?',
                        'choices' => [
                            ['choice_text' => 15 g', 'is_correct' => true],
                            ['choice_text' => 10 g', 'is_correct' => false],
                            ['choice_text' => 40 g', 'is_correct' => false],
                            ['choice_text' => 20 g', 'is_correct' => false],
                        ],
                        'explanation' => 'Masse réelle = 25 × 0,60 = 15 g.'
                    ],
                    [
                        'question' => 'Pourquoi utilise-t-on parfois un réactif en excès volontairement ?',
                        'choices' => [
                            ['choice_text' => 'Pour s’assurer que l’autre réactif puisse être consommé autant que possible', 'is_correct' => true],
                            ['choice_text' => 'Pour empêcher toute réaction', 'is_correct' => false],
                            ['choice_text' => 'Pour changer la formule du produit', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer le besoin d’équilibrer l’équation', 'is_correct' => false],
                        ],
                        'explanation' => 'Mettre un réactif en excès peut aider à faire réagir complètement le réactif que l’on souhaite utiliser comme limite.'
                    ],
                    [
                        'question' => 'Un produit récupéré pèse plus que la masse théorique calculée. Quelle explication simple peut être envisagée ?',
                        'choices' => [
                            ['choice_text' => 'Le produit peut contenir des impuretés ou du solvant résiduel', 'is_correct' => true],
                            ['choice_text' => 'Les lois de conservation ne s’appliquent plus', 'is_correct' => false],
                            ['choice_text' => 'La réaction a créé de nouveaux éléments à partir de rien', 'is_correct' => false],
                            ['choice_text' => 'Le réactif limitant n’existe pas', 'is_correct' => false],
                        ],
                        'explanation' => 'Un rendement apparent supérieur à 100 % signale souvent un produit humide ou contaminé, ou encore une erreur expérimentale.'
                    ],
                    [
                        'question' => 'Une réaction devrait donner 20 g mais donne 18 g. Quelle perte de masse correspond à l’écart entre théorie et expérience ?',
                        'choices' => [
                            ['choice_text' => 2 g', 'is_correct' => true],
                            ['choice_text' => 18 g', 'is_correct' => false],
                            ['choice_text' => 20 g', 'is_correct' => false],
                            ['choice_text' => 38 g', 'is_correct' => false],
                        ],
                        'explanation' => 'La différence est 20 - 18 = 2 g.'
                    ],
                    [
                        'question' => 'Un étudiant obtient 9 g alors que le calcul théorique prévoit 12 g. Quel est son rendement ?',
                        'choices' => [
                            ['choice_text' => 75 %', 'is_correct' => true],
                            ['choice_text' => 25 %', 'is_correct' => false],
                            ['choice_text' => 67 %', 'is_correct' => false],
                            ['choice_text' => 133 %', 'is_correct' => false],
                        ],
                        'explanation' => 'Rendement = (9 / 12) × 100 = 75 %.'
                    ],
                    [
                        'question' => 'Un chimiste obtient moins de produit que prévu et souhaite comprendre pourquoi. Quelle démarche est la plus utile ?',
                        'choices' => [
                            ['choice_text' => 'Vérifier les quantités mesurées, le protocole, les pertes et la réaction', 'is_correct' => true],
                            ['choice_text' => 'Modifier la formule du produit après coup', 'is_correct' => false],
                            ['choice_text' => 'Ignorer complètement le résultat', 'is_correct' => false],
                            ['choice_text' => 'Augmenter le nombre de protons dans les réactifs', 'is_correct' => false],
                        ],
                        'explanation' => 'Une différence entre théorie et expérience peut avoir plusieurs causes. Vérifier les mesures et les étapes permet d’identifier les pertes ou erreurs possibles.'
                    ],
                ],
            ],

            [
                'title' => 'Révision générale de stœchiométrie',
                'description' => 'Mettez en pratique les idées essentielles : mole, masse molaire, équations équilibrées, rapports stœchiométriques et réactif limitant.',
                'questions' => [
                    [
                        'question' => 'Quelle relation relie correctement quantité de matière, masse et masse molaire ?',
                        'choices' => [
                            ['choice_text' => 'n = m / M', 'is_correct' => true],
                            ['choice_text' => 'n = m × M', 'is_correct' => false],
                            ['choice_text' => 'm = n / M', 'is_correct' => false],
                            ['choice_text' => 'M = n × m', 'is_correct' => false],
                        ],
                        'explanation' => 'La relation de base est n = m/M. On peut aussi en déduire m = nM.'
                    ],
                    [
                        'question' => 'Avec M(H₂O) = 18 g/mol, quelle quantité de matière correspond à 9 g d’eau ?',
                        'choices' => [
                            ['choice_text' => 0,50 mol', 'is_correct' => true],
                            ['choice_text' => 2 mol', 'is_correct' => false],
                            ['choice_text' => 9 mol', 'is_correct' => false],
                            ['choice_text' => 18 mol', 'is_correct' => false],
                        ],
                        'explanation' => 'n = 9/18 = 0,50 mol.'
                    ],
                    [
                        'question' => 'Une mole contient environ :',
                        'choices' => [
                            ['choice_text' => 6,02 × 10²³ entités', 'is_correct' => true],
                            ['choice_text' => 6,02 × 10² entités', 'is_correct' => false],
                            ['choice_text' => 602 entités', 'is_correct' => false],
                            ['choice_text' => 1,00 × 10⁶ entités', 'is_correct' => false],
                        ],
                        'explanation' => 'La constante d’Avogadro vaut environ 6,02 × 10²³ entités par mole.'
                    ],
                    [
                        'question' => 'Quelle équation est équilibrée ?',
                        'choices' => [
                            ['choice_text' => '2H₂ + O₂ → 2H₂O', 'is_correct' => true],
                            ['choice_text' => 'H₂ + O₂ → H₂O', 'is_correct' => false],
                            ['choice_text' => '2H₂ + 2O₂ → H₂O', 'is_correct' => false],
                            ['choice_text' => 'H₂ + 2O₂ → 2H₂O', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans 2H₂ + O₂ → 2H₂O, il y a 4 H et 2 O de chaque côté.'
                    ],
                    [
                        'question' => 'Dans 2Na + Cl₂ → 2NaCl, quel rapport molaire existe entre Na et NaCl ?',
                        'choices' => [
                            ['choice_text' => '1:1', 'is_correct' => true],
                            ['choice_text' => '2:1', 'is_correct' => false],
                            ['choice_text' => '1:2', 'is_correct' => false],
                            ['choice_text' => '2:3', 'is_correct' => false],
                        ],
                        'explanation' => 'Les coefficients de Na et NaCl sont tous les deux 2. Le rapport se simplifie donc en 1:1.'
                    ],
                    [
                        'question' => 'Dans N₂ + 3H₂ → 2NH₃, combien de moles de NH₃ sont produites par 6 mol de H₂ si N₂ est en excès ?',
                        'choices' => [
                            ['choice_text' => 4 mol', 'is_correct' => true],
                            ['choice_text' => 6 mol', 'is_correct' => false],
                            ['choice_text' => 2 mol', 'is_correct' => false],
                            ['choice_text' => 3 mol', 'is_correct' => false],
                        ],
                        'explanation' => '3 mol de H₂ donnent 2 mol de NH₃. Donc 6 mol de H₂ donnent 4 mol de NH₃.'
                    ],
                    [
                        'question' => 'Dans 2H₂ + O₂ → 2H₂O, on dispose de 1 mol de H₂ et de 1 mol de O₂. Quel est le réactif limitant ?',
                        'choices' => [
                            ['choice_text' => H₂', 'is_correct' => true],
                            ['choice_text' => O₂', 'is_correct' => false],
                            ['choice_text' => H₂O', 'is_correct' => false],
                            ['choice_text' => Aucun', 'is_correct' => false],
                        ],
                        'explanation' => 'Il faut 2 mol de H₂ pour 1 mol de O₂. Avec seulement 1 mol de H₂, celui-ci s’épuise avant l’oxygène.'
                    ],
                    [
                        'question' => 'Si 1 mol de H₂ est le réactif limitant dans 2H₂ + O₂ → 2H₂O, combien de moles d’eau peuvent être formées ?',
                        'choices' => [
                            ['choice_text' => 1 mol', 'is_correct' => true],
                            ['choice_text' => 2 mol', 'is_correct' => false],
                            ['choice_text' => 0,5 mol', 'is_correct' => false],
                            ['choice_text' => 3 mol', 'is_correct' => false],
                        ],
                        'explanation' => 'Le rapport H₂:H₂O est 2:2, donc 1:1. Une mole de H₂ permet donc de former une mole de H₂O.'
                    ],
                    [
                        'question' => 'Une réaction devrait produire 50 g mais le laboratoire récupère 40 g. Quel est le rendement ?',
                        'choices' => [
                            ['choice_text' => 80 %', 'is_correct' => true],
                            ['choice_text' => 20 %', 'is_correct' => false],
                            ['choice_text' => 125 %', 'is_correct' => false],
                            ['choice_text' => 90 %', 'is_correct' => false],
                        ],
                        'explanation' => 'Rendement = (40/50) × 100 = 80 %.'
                    ],
                    [
                        'question' => 'Un étudiant doit résoudre un problème de stœchiométrie à partir d’une masse de réactif. Quelle première étape est généralement la plus utile ?',
                        'choices' => [
                            ['choice_text' => 'Convertir la masse en moles à l’aide de la masse molaire', 'is_correct' => true],
                            ['choice_text' => 'Changer les indices de la formule chimique', 'is_correct' => false],
                            ['choice_text' => 'Multiplier directement toutes les masses', 'is_correct' => false],
                            ['choice_text' => 'Ignorer l’équation chimique', 'is_correct' => false],
                        ],
                        'explanation' => 'Les rapports stœchiométriques s’expriment en quantités de matière. Il faut donc souvent passer d’abord des grammes aux moles.'
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
            5 => ['duration' => 25, 'passing_score' => 65],
            6 => ['duration' => 25, 'passing_score' => 65],
            7 => ['duration' => 25, 'passing_score' => 70],
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