<?php

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class ReactionKineticsBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'reaction-kinetics')->firstOrFail();

        $quizSettings = [
            0 => ['duration' => 15, 'passing_score' => 50],
            1 => ['duration' => 15, 'passing_score' => 55],
            2 => ['duration' => 20, 'passing_score' => 60],
            3 => ['duration' => 20, 'passing_score' => 60],
            4 => ['duration' => 20, 'passing_score' => 60],
            5 => ['duration' => 20, 'passing_score' => 65],
            6 => ['duration' => 20, 'passing_score' => 65],
            7 => ['duration' => 25, 'passing_score' => 70],
            8 => ['duration' => 25, 'passing_score' => 70],
        ];

        $quizzes = [
            [
                'title' => 'Les bases de la cinétique chimique',
                'description' => 'Comprendre la notion de vitesse de réaction et reconnaître les principaux indicateurs de l’avancement d’une réaction.',
                'questions' => [
                    [
                        'question' => 'Que mesure principalement la cinétique chimique ?',
                        'explanation' => 'La cinétique étudie la vitesse à laquelle une réaction chimique se produit et les facteurs qui influencent cette vitesse.',
                        'choices' => [
                            ['choice_text' => 'La vitesse de la réaction', 'is_correct' => true],
                            ['choice_text' => 'La masse atomique des éléments', 'is_correct' => false],
                            ['choice_text' => 'La couleur du récipient', 'is_correct' => false],
                            ['choice_text' => 'La constante d’équilibre uniquement', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une réaction est dite rapide lorsqu’elle...',
                        'explanation' => 'Une réaction rapide consomme les réactifs ou forme les produits en peu de temps, dans les conditions étudiées.',
                        'choices' => [
                            ['choice_text' => 'atteint rapidement une transformation mesurable', 'is_correct' => true],
                            ['choice_text' => 'produit toujours beaucoup de chaleur', 'is_correct' => false],
                            ['choice_text' => 'a forcément un rendement de 100 %', 'is_correct' => false],
                            ['choice_text' => 'contient uniquement des gaz', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Comment peut-on suivre la vitesse d’une réaction qui produit un gaz ?',
                        'explanation' => 'Si un gaz est formé, mesurer son volume à différents instants permet de suivre l’évolution de la réaction.',
                        'choices' => [
                            ['choice_text' => 'En mesurant le volume de gaz au cours du temps', 'is_correct' => true],
                            ['choice_text' => 'En pesant uniquement le thermomètre', 'is_correct' => false],
                            ['choice_text' => 'En mesurant le point de fusion du bécher', 'is_correct' => false],
                            ['choice_text' => 'En observant seulement la lumière de la pièce', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Au début de nombreuses réactions, la vitesse est souvent plus grande parce que...',
                        'explanation' => 'Au début, les réactifs sont souvent plus concentrés, ce qui augmente la fréquence des collisions efficaces entre leurs particules.',
                        'choices' => [
                            ['choice_text' => 'les réactifs sont généralement plus concentrés', 'is_correct' => true],
                            ['choice_text' => 'les produits ont déjà disparu', 'is_correct' => false],
                            ['choice_text' => 'la réaction est déjà à l’équilibre', 'is_correct' => false],
                            ['choice_text' => 'la température est forcément maximale', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Si la concentration d’un réactif diminue pendant une réaction, que peut-on souvent observer sur la vitesse ?',
                        'explanation' => 'Quand la concentration des réactifs diminue, les collisions entre particules réactives deviennent généralement moins fréquentes, donc la vitesse baisse.',
                        'choices' => [
                            ['choice_text' => 'La vitesse augmente toujours', 'is_correct' => false],
                            ['choice_text' => 'La vitesse diminue généralement', 'is_correct' => true],
                            ['choice_text' => 'La vitesse devient forcément nulle immédiatement', 'is_correct' => false],
                            ['choice_text' => 'La température devient égale à zéro', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle unité peut être utilisée pour exprimer une vitesse de réaction basée sur une concentration ?',
                        'explanation' => 'Une vitesse de réaction basée sur une concentration s’exprime comme une variation de concentration par unité de temps, par exemple mol·L⁻¹·s⁻¹.',
                        'choices' => [
                            ['choice_text' => 'mol·L⁻¹·s⁻¹', 'is_correct' => true],
                            ['choice_text' => 'g uniquement', 'is_correct' => false],
                            ['choice_text' => 'L·mol uniquement', 'is_correct' => false],
                            ['choice_text' => '°C·mol', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une réaction transforme 0,20 mol/L d’un réactif en 10 s. Quelle est la vitesse moyenne de disparition de ce réactif ?',
                        'explanation' => 'La vitesse moyenne vaut 0,20 / 10 = 0,020 mol·L⁻¹·s⁻¹.',
                        'choices' => [
                            ['choice_text' => '0,002 mol·L⁻¹·s⁻¹', 'is_correct' => false],
                            ['choice_text' => '0,020 mol·L⁻¹·s⁻¹', 'is_correct' => true],
                            ['choice_text' => '0,20 mol·L⁻¹·s⁻¹', 'is_correct' => false],
                            ['choice_text' => '2,0 mol·L⁻¹·s⁻¹', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi la vitesse moyenne ne décrit-elle pas toujours exactement ce qui se passe à chaque seconde ?',
                        'explanation' => 'La vitesse peut varier pendant la réaction. Une vitesse moyenne résume donc l’évolution sur un intervalle de temps, pas nécessairement à chaque instant.',
                        'choices' => [
                            ['choice_text' => 'Parce que la vitesse peut changer au cours du temps', 'is_correct' => true],
                            ['choice_text' => 'Parce que la masse ne se conserve jamais', 'is_correct' => false],
                            ['choice_text' => 'Parce que les produits n’existent pas', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’une réaction n’a jamais de durée', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel graphique est typiquement utile pour suivre la formation d’un produit au cours du temps ?',
                        'explanation' => 'Tracer la quantité ou la concentration du produit en fonction du temps permet de visualiser son évolution et de relier la pente à la vitesse.',
                        'choices' => [
                            ['choice_text' => 'Concentration du produit en fonction du temps', 'is_correct' => true],
                            ['choice_text' => 'Masse atomique en fonction de la couleur', 'is_correct' => false],
                            ['choice_text' => 'Point d’ébullition en fonction du nom du bécher', 'is_correct' => false],
                            ['choice_text' => 'Densité en fonction du numéro de salle', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Sur un graphique concentration-produit en fonction du temps, une pente forte au début signifie généralement...',
                        'explanation' => 'Une pente forte signifie que la concentration du produit augmente rapidement : la vitesse de formation est donc élevée.',
                        'choices' => [
                            ['choice_text' => 'une formation rapide du produit', 'is_correct' => true],
                            ['choice_text' => 'une absence de réaction', 'is_correct' => false],
                            ['choice_text' => 'une concentration toujours nulle', 'is_correct' => false],
                            ['choice_text' => 'un refroidissement obligatoire', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Théorie des collisions',
                'description' => 'Comprendre pourquoi les collisions entre particules ne produisent pas toutes une réaction.',
                'questions' => [
                    [
                        'question' => 'Selon la théorie des collisions, une collision efficace doit notamment avoir...',
                        'explanation' => 'Pour conduire à une réaction, les particules doivent se rencontrer avec une orientation adaptée et une énergie suffisante.',
                        'choices' => [
                            ['choice_text' => 'une énergie suffisante et une orientation favorable', 'is_correct' => true],
                            ['choice_text' => 'toujours la même température', 'is_correct' => false],
                            ['choice_text' => 'une masse exactement identique', 'is_correct' => false],
                            ['choice_text' => 'une couleur particulière', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi toutes les collisions entre molécules réactives ne provoquent-elles pas une réaction ?',
                        'explanation' => 'Certaines collisions ne disposent pas de suffisamment d’énergie ou ne se produisent pas avec la bonne orientation.',
                        'choices' => [
                            ['choice_text' => 'Parce que certaines collisions ne sont pas efficaces', 'is_correct' => true],
                            ['choice_text' => 'Parce que les molécules cessent toujours de bouger', 'is_correct' => false],
                            ['choice_text' => 'Parce que les réactifs sont tous solides', 'is_correct' => false],
                            ['choice_text' => 'Parce que la masse se détruit', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Que représente l’énergie d’activation ?',
                        'explanation' => 'L’énergie d’activation est l’énergie minimale qu’une collision doit généralement atteindre pour pouvoir conduire à la transformation chimique.',
                        'choices' => [
                            ['choice_text' => 'L’énergie minimale nécessaire pour permettre la réaction', 'is_correct' => true],
                            ['choice_text' => 'L’énergie totale contenue dans tous les produits', 'is_correct' => false],
                            ['choice_text' => 'La chaleur du laboratoire', 'is_correct' => false],
                            ['choice_text' => 'La masse du catalyseur', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Si on chauffe un mélange réactionnel, pourquoi la vitesse peut-elle augmenter ?',
                        'explanation' => 'Une température plus élevée augmente l’énergie cinétique moyenne des particules et la proportion de collisions ayant assez d’énergie.',
                        'choices' => [
                            ['choice_text' => 'Davantage de collisions peuvent dépasser l’énergie d’activation', 'is_correct' => true],
                            ['choice_text' => 'Les molécules deviennent plus lourdes', 'is_correct' => false],
                            ['choice_text' => 'La réaction devient automatiquement irréversible', 'is_correct' => false],
                            ['choice_text' => 'Le volume disparaît toujours', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une collision avec beaucoup d’énergie mais une mauvaise orientation est-elle nécessairement efficace ?',
                        'explanation' => 'Non. L’énergie doit être suffisante, mais l’orientation des particules doit aussi être compatible avec la formation des nouvelles liaisons.',
                        'choices' => [
                            ['choice_text' => 'Oui, toujours', 'is_correct' => false],
                            ['choice_text' => 'Non', 'is_correct' => true],
                            ['choice_text' => 'Seulement pour les gaz', 'is_correct' => false],
                            ['choice_text' => 'Seulement à basse température', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'À température constante, augmenter la concentration d’un réactif peut accélérer une réaction parce que...',
                        'explanation' => 'Avec davantage de particules dans le même volume, les collisions entre réactifs deviennent plus fréquentes.',
                        'choices' => [
                            ['choice_text' => 'les collisions deviennent plus fréquentes', 'is_correct' => true],
                            ['choice_text' => 'l’énergie d’activation disparaît', 'is_correct' => false],
                            ['choice_text' => 'les produits deviennent des réactifs supplémentaires', 'is_correct' => false],
                            ['choice_text' => 'la température baisse automatiquement', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel changement augmente généralement le nombre de collisions entre particules dans une solution ?',
                        'explanation' => 'Une concentration plus élevée place davantage de particules dans un même volume, ce qui augmente la fréquence des rencontres.',
                        'choices' => [
                            ['choice_text' => 'Augmenter la concentration des réactifs', 'is_correct' => true],
                            ['choice_text' => 'Retirer la moitié des réactifs', 'is_correct' => false],
                            ['choice_text' => 'Baisser la température sans autre changement', 'is_correct' => false],
                            ['choice_text' => 'Diluer fortement la solution', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une réaction lente peut-elle avoir beaucoup de collisions ?',
                        'explanation' => 'Oui. Ce qui compte n’est pas seulement le nombre de collisions, mais aussi la proportion de collisions suffisamment énergétiques et bien orientées.',
                        'choices' => [
                            ['choice_text' => 'Oui', 'is_correct' => true],
                            ['choice_text' => 'Non, jamais', 'is_correct' => false],
                            ['choice_text' => 'Seulement si elle est exothermique', 'is_correct' => false],
                            ['choice_text' => 'Seulement dans un solide', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel énoncé décrit correctement une collision efficace ?',
                        'explanation' => 'Une collision efficace possède les conditions nécessaires pour permettre la rupture et la formation de liaisons dans la bonne configuration.',
                        'choices' => [
                            ['choice_text' => 'Elle permet réellement la transformation des réactifs en produits', 'is_correct' => true],
                            ['choice_text' => 'Elle arrête le mouvement des particules', 'is_correct' => false],
                            ['choice_text' => 'Elle change uniquement la masse', 'is_correct' => false],
                            ['choice_text' => 'Elle produit toujours une explosion', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une température plus élevée augmente-t-elle généralement la fraction de collisions efficaces ?',
                        'explanation' => 'À plus haute température, une plus grande proportion des particules possède une énergie suffisante pour franchir la barrière d’activation.',
                        'choices' => [
                            ['choice_text' => 'Parce qu’une plus grande fraction des particules a assez d’énergie', 'is_correct' => true],
                            ['choice_text' => 'Parce que l’énergie d’activation devient toujours nulle', 'is_correct' => false],
                            ['choice_text' => 'Parce que les produits sont détruits', 'is_correct' => false],
                            ['choice_text' => 'Parce que la masse molaire augmente', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Concentration et vitesse de réaction',
                'description' => 'Analyser l’effet des concentrations sur la vitesse et interpréter des observations expérimentales simples.',
                'questions' => [
                    [
                        'question' => 'Dans deux expériences identiques, laquelle est généralement plus rapide : une solution à 1,0 mol/L ou à 0,1 mol/L du même réactif ?',
                        'explanation' => 'La solution à 1,0 mol/L contient davantage de particules par unité de volume. Les collisions sont donc généralement plus fréquentes.',
                        'choices' => [
                            ['choice_text' => 'La solution à 1,0 mol/L', 'is_correct' => true],
                            ['choice_text' => 'La solution à 0,1 mol/L', 'is_correct' => false],
                            ['choice_text' => 'Les deux sont nécessairement identiques', 'is_correct' => false],
                            ['choice_text' => 'Aucune ne peut réagir', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Diluer une solution réactive fait généralement quoi à sa concentration ?',
                        'explanation' => 'Lors d’une dilution, on ajoute du solvant sans ajouter de soluté. La concentration diminue donc.',
                        'choices' => [
                            ['choice_text' => 'Elle augmente', 'is_correct' => false],
                            ['choice_text' => 'Elle diminue', 'is_correct' => true],
                            ['choice_text' => 'Elle devient toujours nulle', 'is_correct' => false],
                            ['choice_text' => 'Elle ne change jamais', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un acide réagit avec un métal plus rapidement lorsqu’on utilise une solution plus concentrée. Quelle explication est la plus logique ?',
                        'explanation' => 'Une concentration plus forte augmente le nombre de particules réactives par volume, ce qui peut augmenter la fréquence des collisions efficaces.',
                        'choices' => [
                            ['choice_text' => 'Il y a davantage de collisions efficaces par unité de temps', 'is_correct' => true],
                            ['choice_text' => 'Le métal devient automatiquement plus chaud', 'is_correct' => false],
                            ['choice_text' => 'La masse du métal double', 'is_correct' => false],
                            ['choice_text' => 'L’énergie d’activation disparaît complètement', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Si la concentration d’un réactif est divisée par deux, peut-on toujours affirmer que la vitesse est exactement divisée par deux ?',
                        'explanation' => 'Pas nécessairement. La relation entre concentration et vitesse dépend de la loi de vitesse de la réaction étudiée.',
                        'choices' => [
                            ['choice_text' => 'Oui, pour toutes les réactions', 'is_correct' => false],
                            ['choice_text' => 'Non, cela dépend de la loi de vitesse', 'is_correct' => true],
                            ['choice_text' => 'Oui, mais seulement pour les liquides', 'is_correct' => false],
                            ['choice_text' => 'Non, la concentration n’a jamais d’effet', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pour une réaction ayant une loi de vitesse v = k[A], que se passe-t-il si [A] double ?',
                        'explanation' => 'Comme la vitesse est proportionnelle à [A], doubler [A] double la vitesse, toutes choses égales par ailleurs.',
                        'choices' => [
                            ['choice_text' => 'La vitesse est divisée par deux', 'is_correct' => false],
                            ['choice_text' => 'La vitesse double', 'is_correct' => true],
                            ['choice_text' => 'La vitesse quadruple', 'is_correct' => false],
                            ['choice_text' => 'La vitesse reste forcément identique', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pour v = k[A]², si [A] double, par combien la vitesse est-elle multipliée ?',
                        'explanation' => 'On a v’ = k(2[A])² = 4k[A]². La vitesse est donc multipliée par 4.',
                        'choices' => [
                            ['choice_text' => '2', 'is_correct' => false],
                            ['choice_text' => '3', 'is_correct' => false],
                            ['choice_text' => '4', 'is_correct' => true],
                            ['choice_text' => '8', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Dans une expérience, une concentration passe de 0,80 mol/L à 0,60 mol/L en 5 s. Quelle est la vitesse moyenne de disparition du réactif ?',
                        'explanation' => 'La variation de concentration vaut 0,80 − 0,60 = 0,20 mol/L. Donc v = 0,20 / 5 = 0,040 mol·L⁻¹·s⁻¹.',
                        'choices' => [
                            ['choice_text' => '0,004 mol·L⁻¹·s⁻¹', 'is_correct' => false],
                            ['choice_text' => '0,040 mol·L⁻¹·s⁻¹', 'is_correct' => true],
                            ['choice_text' => '0,20 mol·L⁻¹·s⁻¹', 'is_correct' => false],
                            ['choice_text' => '0,40 mol·L⁻¹·s⁻¹', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une réaction ralentit-elle souvent lorsque les réactifs sont consommés ?',
                        'explanation' => 'Les concentrations diminuent, ce qui réduit généralement la fréquence des collisions entre particules réactives.',
                        'choices' => [
                            ['choice_text' => 'Parce que les collisions entre réactifs deviennent moins fréquentes', 'is_correct' => true],
                            ['choice_text' => 'Parce que toutes les particules deviennent solides', 'is_correct' => false],
                            ['choice_text' => 'Parce que la masse disparaît', 'is_correct' => false],
                            ['choice_text' => 'Parce que les produits ne peuvent plus exister', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un élève compare deux réactions mais change à la fois la concentration et la température. Pourquoi est-ce une mauvaise comparaison expérimentale ?',
                        'explanation' => 'Pour isoler l’effet d’un seul facteur, les autres conditions doivent rester constantes. Sinon, on ne sait pas quelle modification est responsable.',
                        'choices' => [
                            ['choice_text' => 'Parce que deux variables changent en même temps', 'is_correct' => true],
                            ['choice_text' => 'Parce qu’une réaction ne peut avoir qu’un seul réactif', 'is_correct' => false],
                            ['choice_text' => 'Parce que la température n’a aucun effet sur la vitesse', 'is_correct' => false],
                            ['choice_text' => 'Parce que la concentration est toujours invisible', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle pratique permet de tester correctement l’effet de la concentration sur une réaction ?',
                        'explanation' => 'On varie la concentration étudiée et on garde les autres facteurs, comme la température et les volumes pertinents, aussi constants que possible.',
                        'choices' => [
                            ['choice_text' => 'Ne modifier que la concentration étudiée', 'is_correct' => true],
                            ['choice_text' => 'Modifier la concentration, la température et le volume à chaque essai', 'is_correct' => false],
                            ['choice_text' => 'Changer de réaction à chaque essai', 'is_correct' => false],
                            ['choice_text' => 'Mesurer seulement la couleur du bécher', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Température et vitesse de réaction',
                'description' => 'Relier la température à la vitesse de réaction et expliquer l’effet observé avec la théorie des collisions.',
                'questions' => [
                    [
                        'question' => 'Pourquoi les aliments cuisent-ils généralement plus vite à température plus élevée ?',
                        'explanation' => 'Une température plus élevée augmente l’énergie des particules et la fréquence des collisions suffisamment énergétiques pour provoquer les transformations chimiques.',
                        'choices' => [
                            ['choice_text' => 'Les réactions chimiques responsables des transformations sont généralement plus rapides', 'is_correct' => true],
                            ['choice_text' => 'La nourriture devient plus lourde', 'is_correct' => false],
                            ['choice_text' => 'L’eau cesse de bouillir', 'is_correct' => false],
                            ['choice_text' => 'Les molécules cessent de bouger', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel changement augmente généralement la vitesse d’une réaction ?',
                        'explanation' => 'Augmenter la température augmente généralement la vitesse, car davantage de particules peuvent franchir l’énergie d’activation.',
                        'choices' => [
                            ['choice_text' => 'Augmenter la température', 'is_correct' => true],
                            ['choice_text' => 'Refroidir fortement le mélange', 'is_correct' => false],
                            ['choice_text' => 'Diluer le mélange sans autre changement', 'is_correct' => false],
                            ['choice_text' => 'Retirer tous les réactifs', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une augmentation de température agit surtout sur quelle partie de la théorie des collisions ?',
                        'explanation' => 'Elle augmente l’énergie cinétique moyenne et surtout la proportion de particules ayant une énergie suffisante pour franchir la barrière d’activation.',
                        'choices' => [
                            ['choice_text' => 'La proportion de collisions ayant assez d’énergie', 'is_correct' => true],
                            ['choice_text' => 'La masse des noyaux', 'is_correct' => false],
                            ['choice_text' => 'Le nombre de protons', 'is_correct' => false],
                            ['choice_text' => 'La charge totale de la solution', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une réaction double sa vitesse lorsque la température passe de 20 °C à 30 °C. Peut-on conclure que toutes les réactions doublent dans ces mêmes conditions ?',
                        'explanation' => 'Non. La sensibilité à la température dépend de la réaction et de son énergie d’activation.',
                        'choices' => [
                            ['choice_text' => 'Oui, c’est une règle universelle', 'is_correct' => false],
                            ['choice_text' => 'Non, cela dépend de la réaction', 'is_correct' => true],
                            ['choice_text' => 'Oui, mais seulement pour les solides', 'is_correct' => false],
                            ['choice_text' => 'Non, car la température n’a jamais d’effet', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'À basse température, pourquoi certaines réactions deviennent-elles très lentes ?',
                        'explanation' => 'À basse température, une plus petite fraction des particules possède l’énergie nécessaire pour franchir la barrière d’activation.',
                        'choices' => [
                            ['choice_text' => 'Moins de collisions ont suffisamment d’énergie', 'is_correct' => true],
                            ['choice_text' => 'Les réactifs disparaissent', 'is_correct' => false],
                            ['choice_text' => 'La réaction devient automatiquement impossible', 'is_correct' => false],
                            ['choice_text' => 'Le volume devient toujours nul', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi conserver certains aliments au réfrigérateur ralentit-il leur dégradation ?',
                        'explanation' => 'Le froid ralentit de nombreuses réactions chimiques et enzymatiques impliquées dans la dégradation des aliments.',
                        'choices' => [
                            ['choice_text' => 'La vitesse de nombreuses réactions de dégradation diminue', 'is_correct' => true],
                            ['choice_text' => 'Toutes les réactions deviennent impossibles', 'is_correct' => false],
                            ['choice_text' => 'Les bactéries deviennent plus lourdes', 'is_correct' => false],
                            ['choice_text' => 'L’eau n’existe plus', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une étudiante veut étudier uniquement l’effet de la température. Que doit-elle garder aussi constant que possible ?',
                        'explanation' => 'Pour une comparaison propre, la concentration, la quantité de réactifs et les autres conditions doivent rester constantes.',
                        'choices' => [
                            ['choice_text' => 'La concentration des réactifs', 'is_correct' => true],
                            ['choice_text' => 'Tout, sauf la réaction elle-même', 'is_correct' => false],
                            ['choice_text' => 'La température aussi', 'is_correct' => false],
                            ['choice_text' => 'Le nom de l’expérimentatrice uniquement', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle relation entre température et vitesse est généralement observée ?',
                        'explanation' => 'Dans de nombreuses réactions, une hausse de température provoque une augmentation de la vitesse, mais l’ampleur de l’effet dépend de la réaction.',
                        'choices' => [
                            ['choice_text' => 'La vitesse augmente généralement quand la température augmente', 'is_correct' => true],
                            ['choice_text' => 'La vitesse diminue toujours quand la température augmente', 'is_correct' => false],
                            ['choice_text' => 'La température ne joue aucun rôle', 'is_correct' => false],
                            ['choice_text' => 'La vitesse devient toujours égale à zéro', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une température plus élevée ne signifie-t-elle pas que chaque collision provoque une réaction ?',
                        'explanation' => 'Même à température élevée, certaines collisions n’ont pas l’énergie suffisante ou la bonne orientation pour être efficaces.',
                        'choices' => [
                            ['choice_text' => 'Parce que toutes les collisions ne sont pas efficaces', 'is_correct' => true],
                            ['choice_text' => 'Parce que les molécules sont immobiles', 'is_correct' => false],
                            ['choice_text' => 'Parce que les produits n’existent plus', 'is_correct' => false],
                            ['choice_text' => 'Parce que la masse est détruite', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Si une réaction est très sensible à une petite hausse de température, que peut-on soupçonner ?',
                        'explanation' => 'Une forte dépendance à la température peut être liée à une énergie d’activation importante, même si seule l’expérience permet de quantifier précisément l’effet.',
                        'choices' => [
                            ['choice_text' => 'L’énergie d’activation joue un rôle important dans cette réaction', 'is_correct' => true],
                            ['choice_text' => 'La réaction n’a aucun réactif', 'is_correct' => false],
                            ['choice_text' => 'La constante d’équilibre vaut forcément 1', 'is_correct' => false],
                            ['choice_text' => 'La masse molaire est forcément très élevée', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Surface de contact et état des réactifs',
                'description' => 'Comprendre pourquoi la surface de contact et la division d’un solide peuvent modifier la vitesse d’une réaction.',
                'questions' => [
                    [
                        'question' => 'Pourquoi une poudre réagit-elle souvent plus vite qu’un gros morceau du même solide ?',
                        'explanation' => 'La poudre possède une plus grande surface de contact. Une plus grande partie du solide peut donc entrer en contact avec l’autre réactif.',
                        'choices' => [
                            ['choice_text' => 'Elle offre une plus grande surface de contact', 'is_correct' => true],
                            ['choice_text' => 'Elle a toujours une masse plus grande', 'is_correct' => false],
                            ['choice_text' => 'Elle contient moins d’atomes', 'is_correct' => false],
                            ['choice_text' => 'Elle a forcément une température plus élevée', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une pastille effervescente entière est comparée à la même pastille écrasée dans l’eau. Laquelle réagit généralement plus vite ?',
                        'explanation' => 'La pastille écrasée présente davantage de surface en contact avec l’eau, ce qui augmente les possibilités de collisions entre réactifs.',
                        'choices' => [
                            ['choice_text' => 'La pastille écrasée', 'is_correct' => true],
                            ['choice_text' => 'La pastille entière', 'is_correct' => false],
                            ['choice_text' => 'Les deux toujours à la même vitesse', 'is_correct' => false],
                            ['choice_text' => 'Aucune ne réagit dans l’eau', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Que change principalement le broyage d’un solide utilisé comme réactif ?',
                        'explanation' => 'Le broyage augmente la surface disponible pour les collisions avec les autres réactifs. Il ne change pas nécessairement la quantité totale de matière.',
                        'choices' => [
                            ['choice_text' => 'La surface de contact', 'is_correct' => true],
                            ['choice_text' => 'Le nombre de protons de chaque atome', 'is_correct' => false],
                            ['choice_text' => 'La masse totale du solide par magie', 'is_correct' => false],
                            ['choice_text' => 'La formule chimique du composé', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un morceau de craie réagit-il généralement plus vite lorsqu’il est fragmenté ?',
                        'explanation' => 'Les fragments exposent une plus grande surface au réactif. Les contacts sont donc plus nombreux et la réaction peut être plus rapide.',
                        'choices' => [
                            ['choice_text' => 'La surface exposée au réactif augmente', 'is_correct' => true],
                            ['choice_text' => 'La craie change forcément de composition', 'is_correct' => false],
                            ['choice_text' => 'Les atomes deviennent plus petits', 'is_correct' => false],
                            ['choice_text' => 'La réaction devient automatiquement exothermique', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Dans une réaction entre un solide et une solution, quelle modification accélère souvent la réaction sans changer la nature du solide ?',
                        'explanation' => 'Diviser le solide augmente sa surface de contact. C’est une façon simple d’augmenter le nombre de collisions possibles avec la solution.',
                        'choices' => [
                            ['choice_text' => 'Le réduire en petits morceaux', 'is_correct' => true],
                            ['choice_text' => 'Le placer plus loin du liquide', 'is_correct' => false],
                            ['choice_text' => 'Diminuer sa surface exposée', 'is_correct' => false],
                            ['choice_text' => 'Retirer le réactif liquide', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un gros cristal et une poudre ont exactement la même masse. Pourquoi la poudre peut-elle réagir plus vite ?',
                        'explanation' => 'La masse totale est la même, mais la poudre possède une surface externe totale beaucoup plus grande.',
                        'choices' => [
                            ['choice_text' => 'Parce que sa surface totale exposée est plus grande', 'is_correct' => true],
                            ['choice_text' => 'Parce qu’elle contient forcément plus de matière', 'is_correct' => false],
                            ['choice_text' => 'Parce que sa masse molaire change', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’elle devient un catalyseur', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'La surface de contact influence surtout quelle situation ?',
                        'explanation' => 'La surface de contact est particulièrement importante lorsqu’un solide est en réaction avec un autre réactif qui doit atteindre sa surface.',
                        'choices' => [
                            ['choice_text' => 'Une réaction impliquant un solide', 'is_correct' => true],
                            ['choice_text' => 'La mesure de la masse atomique', 'is_correct' => false],
                            ['choice_text' => 'La couleur du papier indicateur uniquement', 'is_correct' => false],
                            ['choice_text' => 'Une réaction sans aucune matière', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi l’agitation d’un solide dans une solution peut-elle accélérer certaines réactions ?',
                        'explanation' => 'L’agitation renouvelle le contact entre la solution et la surface du solide, ce qui peut faciliter les collisions et le transport des espèces réactives.',
                        'choices' => [
                            ['choice_text' => 'Elle favorise le renouvellement du contact entre réactifs', 'is_correct' => true],
                            ['choice_text' => 'Elle crée toujours de nouveaux éléments', 'is_correct' => false],
                            ['choice_text' => 'Elle supprime l’énergie d’activation', 'is_correct' => false],
                            ['choice_text' => 'Elle transforme le solide en gaz', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un élève dit : « Écraser un solide augmente sa masse et donc la vitesse. » Quelle correction est la plus juste ?',
                        'explanation' => 'À masse égale, écraser le solide augmente surtout sa surface de contact. C’est cette surface supplémentaire qui explique l’effet sur la vitesse.',
                        'choices' => [
                            ['choice_text' => 'L’effet principal vient de l’augmentation de la surface de contact', 'is_correct' => true],
                            ['choice_text' => 'La masse double toujours', 'is_correct' => false],
                            ['choice_text' => 'Le nombre de nucléons change', 'is_correct' => false],
                            ['choice_text' => 'La température devient forcément plus basse', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'À masse égale, pourquoi deux morceaux très différents d’un même solide peuvent-ils réagir à des vitesses différentes ?',
                        'explanation' => 'La forme et la taille des morceaux changent la surface disponible. Un solide plus finement divisé présente généralement davantage de surface accessible au réactif.',
                        'choices' => [
                            ['choice_text' => 'Parce que leur surface de contact peut être différente', 'is_correct' => true],
                            ['choice_text' => 'Parce que leurs atomes changent automatiquement d’identité', 'is_correct' => false],
                            ['choice_text' => 'Parce que leur masse molaire devient différente', 'is_correct' => false],
                            ['choice_text' => 'Parce que la quantité de matière disparaît', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Catalyse et énergie d’activation',
                'description' => 'Comprendre comment un catalyseur modifie le chemin réactionnel et réduit l’énergie d’activation.',
                'questions' => [
                    [
                        'question' => 'Quel est le rôle principal d’un catalyseur ?',
                        'explanation' => 'Un catalyseur propose un chemin réactionnel alternatif avec une énergie d’activation plus faible, ce qui augmente la vitesse.',
                        'choices' => [
                            ['choice_text' => 'Accélérer la réaction en abaissant l’énergie d’activation', 'is_correct' => true],
                            ['choice_text' => 'Augmenter la quantité finale de matière', 'is_correct' => false],
                            ['choice_text' => 'Changer obligatoirement les produits obtenus', 'is_correct' => false],
                            ['choice_text' => 'Fournir toute l’énergie de la réaction', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un catalyseur change-t-il la valeur de l’énergie d’activation ?',
                        'explanation' => 'Oui. Le chemin catalysé possède généralement une énergie d’activation plus faible que le chemin non catalysé.',
                        'choices' => [
                            ['choice_text' => 'Oui, il la diminue', 'is_correct' => true],
                            ['choice_text' => 'Non, jamais', 'is_correct' => false],
                            ['choice_text' => 'Oui, il la double toujours', 'is_correct' => false],
                            ['choice_text' => 'Il la rend toujours nulle', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Que montre un diagramme énergétique pour une réaction catalysée ?',
                        'explanation' => 'Le diagramme montre un sommet énergétique plus bas pour le chemin catalysé, ce qui correspond à une énergie d’activation plus faible.',
                        'choices' => [
                            ['choice_text' => 'Un chemin avec un sommet énergétique plus bas', 'is_correct' => true],
                            ['choice_text' => 'Une disparition des réactifs', 'is_correct' => false],
                            ['choice_text' => 'Une température toujours plus élevée', 'is_correct' => false],
                            ['choice_text' => 'Une masse des produits plus grande', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un catalyseur augmente la vitesse d’une réaction. Que peut-on dire de l’énergie globale entre réactifs et produits ?',
                        'explanation' => 'Le catalyseur change le chemin suivi, mais pas la différence énergétique globale entre les réactifs et les produits.',
                        'choices' => [
                            ['choice_text' => 'La différence d’énergie entre réactifs et produits n’est pas modifiée par le catalyseur', 'is_correct' => true],
                            ['choice_text' => 'Elle double toujours', 'is_correct' => false],
                            ['choice_text' => 'Elle devient toujours nulle', 'is_correct' => false],
                            ['choice_text' => 'Elle dépend seulement de la couleur du catalyseur', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi le platine peut-il servir de catalyseur dans certaines réactions ?',
                        'explanation' => 'Le platine peut fournir une surface ou un chemin réactionnel facilitant certaines transformations et diminuant la barrière d’activation.',
                        'choices' => [
                            ['choice_text' => 'Il peut faciliter un chemin réactionnel plus rapide', 'is_correct' => true],
                            ['choice_text' => 'Il devient toujours le produit final', 'is_correct' => false],
                            ['choice_text' => 'Il augmente toujours la température', 'is_correct' => false],
                            ['choice_text' => 'Il fournit tous les atomes nécessaires aux produits', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un catalyseur est-il forcément consommé de façon permanente dans la réaction ?',
                        'explanation' => 'Un catalyseur participe au mécanisme mais est régénéré à la fin du cycle catalytique dans le modèle idéal.',
                        'choices' => [
                            ['choice_text' => 'Non, il est généralement régénéré', 'is_correct' => true],
                            ['choice_text' => 'Oui, il devient toujours le produit principal', 'is_correct' => false],
                            ['choice_text' => 'Oui, il disparaît avant toute collision', 'is_correct' => false],
                            ['choice_text' => 'Non, car aucune réaction n’a lieu', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi un catalyseur ne garantit-il pas qu’une réaction se produira à n’importe quelle température ?',
                        'explanation' => 'Le catalyseur baisse la barrière d’activation mais n’élimine pas toutes les contraintes cinétiques. La température et les autres conditions restent importantes.',
                        'choices' => [
                            ['choice_text' => 'Parce que les conditions du système restent importantes', 'is_correct' => true],
                            ['choice_text' => 'Parce qu’un catalyseur rend les réactifs immobiles', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’il supprime tous les produits', 'is_correct' => false],
                            ['choice_text' => 'Parce qu’il change l’identité des éléments', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Dans une expérience, la même réaction se produit avec et sans catalyseur. Quelle différence observera-t-on généralement ?',
                        'explanation' => 'La réaction catalysée atteint un même état chimique plus rapidement, avec une vitesse plus élevée pendant la transformation.',
                        'choices' => [
                            ['choice_text' => 'La réaction catalysée est plus rapide', 'is_correct' => true],
                            ['choice_text' => 'La réaction non catalysée change obligatoirement de produit', 'is_correct' => false],
                            ['choice_text' => 'Le catalyseur augmente forcément la masse totale', 'is_correct' => false],
                            ['choice_text' => 'La réaction catalysée devient automatiquement irréversible', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel dessin représente le mieux l’effet d’un catalyseur sur un profil énergétique ?',
                        'explanation' => 'Le profil catalysé possède un ou plusieurs sommets plus bas, correspondant à une ou plusieurs étapes dont l’énergie d’activation est réduite.',
                        'choices' => [
                            ['choice_text' => 'Une barrière énergétique plus basse', 'is_correct' => true],
                            ['choice_text' => 'Des réactifs placés plus haut uniquement', 'is_correct' => false],
                            ['choice_text' => 'Des produits toujours plus énergétiques', 'is_correct' => false],
                            ['choice_text' => 'Une ligne sans aucune barrière', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle proposition distingue correctement un catalyseur de la température ?',
                        'explanation' => 'La température augmente l’énergie cinétique moyenne des particules, tandis qu’un catalyseur modifie le chemin réactionnel en abaissant l’énergie d’activation.',
                        'choices' => [
                            ['choice_text' => 'Ils accélèrent la réaction par des mécanismes différents', 'is_correct' => true],
                            ['choice_text' => 'Ils ont exactement le même rôle microscopique', 'is_correct' => false],
                            ['choice_text' => 'La température ne modifie jamais la vitesse', 'is_correct' => false],
                            ['choice_text' => 'Le catalyseur augmente toujours la température du mélange', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Lois de vitesse et ordre de réaction',
                'description' => 'Lire et utiliser des lois de vitesse simples pour relier les concentrations à la vitesse.',
                'questions' => [
                    [
                        'question' => 'Dans la loi v = k[A], quel est l’ordre par rapport à A ?',
                        'explanation' => 'L’exposant de [A] est 1. La réaction est donc du premier ordre par rapport à A.',
                        'choices' => [
                            ['choice_text' => '0', 'is_correct' => false],
                            ['choice_text' => '1', 'is_correct' => true],
                            ['choice_text' => '2', 'is_correct' => false],
                            ['choice_text' => '3', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Dans v = k[A]², si la concentration de A est multipliée par 3, la vitesse est multipliée par...',
                        'explanation' => 'v’ = k(3[A])² = 9k[A]². La vitesse est donc multipliée par 9.',
                        'choices' => [
                            ['choice_text' => '3', 'is_correct' => false],
                            ['choice_text' => '6', 'is_correct' => false],
                            ['choice_text' => '9', 'is_correct' => true],
                            ['choice_text' => '12', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pour v = k[A][B], que se passe-t-il si [A] double et [B] reste constante ?',
                        'explanation' => 'La vitesse est directement proportionnelle à [A]. Doubler [A] double donc la vitesse si [B] ne change pas.',
                        'choices' => [
                            ['choice_text' => 'La vitesse double', 'is_correct' => true],
                            ['choice_text' => 'La vitesse quadruple', 'is_correct' => false],
                            ['choice_text' => 'La vitesse est divisée par deux', 'is_correct' => false],
                            ['choice_text' => 'La vitesse reste inchangée', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pour v = k[B]², si [B] est divisée par 2, la vitesse est multipliée par...',
                        'explanation' => 'v’ = k([B]/2)² = k[B]²/4. La nouvelle vitesse représente donc un quart de la vitesse initiale.',
                        'choices' => [
                            ['choice_text' => '4', 'is_correct' => false],
                            ['choice_text' => '2', 'is_correct' => false],
                            ['choice_text' => '1/2', 'is_correct' => false],
                            ['choice_text' => '1/4', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Dans v = k[A]²[B], quel est l’ordre global de la réaction ?',
                        'explanation' => 'L’ordre global est la somme des exposants : 2 + 1 = 3.',
                        'choices' => [
                            ['choice_text' => '1', 'is_correct' => false],
                            ['choice_text' => '2', 'is_correct' => false],
                            ['choice_text' => '3', 'is_correct' => true],
                            ['choice_text' => '4', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Dans une loi de vitesse, que représente généralement k ?',
                        'explanation' => 'k est la constante de vitesse. Sa valeur dépend notamment de la température et de la nature de la réaction.',
                        'choices' => [
                            ['choice_text' => 'La constante de vitesse', 'is_correct' => true],
                            ['choice_text' => 'La masse totale des réactifs', 'is_correct' => false],
                            ['choice_text' => 'La température finale uniquement', 'is_correct' => false],
                            ['choice_text' => 'Le nombre de produits', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Deux expériences donnent une vitesse différente alors que les concentrations sont identiques. Quelle raison peut l’expliquer ?',
                        'explanation' => 'La constante de vitesse k peut changer si la température ou d’autres conditions pertinentes changent.',
                        'choices' => [
                            ['choice_text' => 'La constante de vitesse peut être différente', 'is_correct' => true],
                            ['choice_text' => 'Les concentrations doivent être forcément nulles', 'is_correct' => false],
                            ['choice_text' => 'La matière a disparu', 'is_correct' => false],
                            ['choice_text' => 'La loi de vitesse devient toujours impossible', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pour v = k[A]⁰, quel est l’effet d’une variation de [A] sur la vitesse ?',
                        'explanation' => 'Toute quantité non nulle élevée à la puissance 0 vaut 1. Dans ce modèle, la vitesse ne dépend donc pas de [A].',
                        'choices' => [
                            ['choice_text' => 'La vitesse ne dépend pas de [A]', 'is_correct' => true],
                            ['choice_text' => 'La vitesse double quand [A] double', 'is_correct' => false],
                            ['choice_text' => 'La vitesse quadruple quand [A] double', 'is_correct' => false],
                            ['choice_text' => 'La vitesse devient toujours nulle', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Si v = k[A] et [A] passe de 0,20 à 0,60 mol/L, par combien la vitesse est-elle multipliée ?',
                        'explanation' => 'La concentration est multipliée par 0,60 / 0,20 = 3. Comme la réaction est du premier ordre en A, la vitesse est multipliée par 3.',
                        'choices' => [
                            ['choice_text' => '1,5', 'is_correct' => false],
                            ['choice_text' => '2', 'is_correct' => false],
                            ['choice_text' => '3', 'is_correct' => true],
                            ['choice_text' => '6', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi faut-il connaître la loi de vitesse avant de prédire précisément l’effet d’un changement de concentration ?',
                        'explanation' => 'L’effet dépend de l’exposant associé à chaque réactif. Sans cette information, on ne sait pas si la vitesse varie proportionnellement, au carré, ou autrement.',
                        'choices' => [
                            ['choice_text' => 'Parce que l’effet dépend de l’ordre de réaction', 'is_correct' => true],
                            ['choice_text' => 'Parce que la concentration n’a jamais d’effet', 'is_correct' => false],
                            ['choice_text' => 'Parce que toutes les réactions ont la même loi', 'is_correct' => false],
                            ['choice_text' => 'Parce que la température remplace toujours la concentration', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Interpréter les données expérimentales',
                'description' => 'Lire des tableaux et graphiques simples pour estimer une vitesse et identifier les tendances cinétiques.',
                'questions' => [
                    [
                        'question' => 'Un tableau donne une concentration de produit de 0,00 mol/L à t = 0 s et 0,30 mol/L à t = 10 s. Quelle est la vitesse moyenne de formation ?',
                        'explanation' => 'v = (0,30 − 0,00) / 10 = 0,030 mol·L⁻¹·s⁻¹.',
                        'choices' => [
                            ['choice_text' => '0,003 mol·L⁻¹·s⁻¹', 'is_correct' => false],
                            ['choice_text' => '0,030 mol·L⁻¹·s⁻¹', 'is_correct' => true],
                            ['choice_text' => '0,30 mol·L⁻¹·s⁻¹', 'is_correct' => false],
                            ['choice_text' => '3,0 mol·L⁻¹·s⁻¹', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Sur un graphique de formation d’un produit, la courbe devient progressivement moins pentue. Que suggère cette forme ?',
                        'explanation' => 'Une pente qui diminue indique que la vitesse instantanée de formation du produit baisse au cours du temps.',
                        'choices' => [
                            ['choice_text' => 'La réaction ralentit', 'is_correct' => true],
                            ['choice_text' => 'La réaction accélère sans limite', 'is_correct' => false],
                            ['choice_text' => 'La concentration devient négative', 'is_correct' => false],
                            ['choice_text' => 'La température est forcément constante', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Deux expériences donnent 0,50 mol/L de produit en 20 s et 0,50 mol/L en 40 s. Laquelle a la vitesse moyenne la plus élevée ?',
                        'explanation' => 'Pour atteindre la même quantité en moins de temps, la première expérience a une vitesse moyenne plus grande.',
                        'choices' => [
                            ['choice_text' => 'L’expérience de 20 s', 'is_correct' => true],
                            ['choice_text' => 'L’expérience de 40 s', 'is_correct' => false],
                            ['choice_text' => 'Les deux sont identiques', 'is_correct' => false],
                            ['choice_text' => 'On ne peut rien comparer', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Si une courbe de concentration en réactif descend rapidement, que représente généralement la pente ?',
                        'explanation' => 'La pente d’une courbe de concentration d’un réactif traduit sa vitesse de disparition. Plus elle est négative en valeur brute, plus la disparition est rapide.',
                        'choices' => [
                            ['choice_text' => 'La disparition du réactif au cours du temps', 'is_correct' => true],
                            ['choice_text' => 'La masse molaire du réactif', 'is_correct' => false],
                            ['choice_text' => 'L’énergie nucléaire totale', 'is_correct' => false],
                            ['choice_text' => 'La couleur du produit', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une courbe devient horizontale à la fin d’une réaction. Que peut signifier cette zone ?',
                        'explanation' => 'Une courbe horizontale signifie que la grandeur mesurée ne change presque plus. Dans un contexte de réaction limitée, cela peut indiquer que la transformation est pratiquement terminée.',
                        'choices' => [
                            ['choice_text' => 'La transformation observée est presque terminée', 'is_correct' => true],
                            ['choice_text' => 'La vitesse devient infinie', 'is_correct' => false],
                            ['choice_text' => 'La concentration augmente très vite', 'is_correct' => false],
                            ['choice_text' => 'La masse a été détruite', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi répéter une mesure de vitesse dans une expérience ?',
                        'explanation' => 'Répéter les mesures aide à repérer d’éventuelles erreurs et à obtenir des résultats plus fiables.',
                        'choices' => [
                            ['choice_text' => 'Pour vérifier la reproductibilité des résultats', 'is_correct' => true],
                            ['choice_text' => 'Pour changer la réaction à chaque essai', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer les unités', 'is_correct' => false],
                            ['choice_text' => 'Pour rendre la réaction irréversible', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un résultat expérimental est très éloigné de tous les autres. Quelle attitude est la plus scientifique ?',
                        'explanation' => 'Un résultat atypique doit être vérifié : erreur de mesure, problème de manipulation ou autre cause possible. Il ne faut pas simplement l’ignorer sans analyse.',
                        'choices' => [
                            ['choice_text' => 'Vérifier la mesure et les conditions expérimentales', 'is_correct' => true],
                            ['choice_text' => 'Le supprimer automatiquement', 'is_correct' => false],
                            ['choice_text' => 'Le considérer automatiquement comme exact', 'is_correct' => false],
                            ['choice_text' => 'Changer la formule chimique', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une réaction produit 12 mL de gaz en 6 s, puis 4 mL supplémentaires pendant les 6 s suivantes. Que peut-on conclure ?',
                        'explanation' => 'La première tranche produit 12/6 = 2 mL/s, contre 4/6 ≈ 0,67 mL/s ensuite. La réaction a donc ralenti.',
                        'choices' => [
                            ['choice_text' => 'La réaction ralentit avec le temps', 'is_correct' => true],
                            ['choice_text' => 'La réaction accélère', 'is_correct' => false],
                            ['choice_text' => 'La vitesse reste exactement constante', 'is_correct' => false],
                            ['choice_text' => 'Le gaz ne provient pas de la réaction', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Sur un graphique vitesse-temps, une valeur de vitesse proche de zéro indique généralement...',
                        'explanation' => 'Une vitesse proche de zéro signifie que la transformation observée est devenue très lente ou pratiquement terminée.',
                        'choices' => [
                            ['choice_text' => 'Une évolution très lente', 'is_correct' => true],
                            ['choice_text' => 'Une réaction infiniment rapide', 'is_correct' => false],
                            ['choice_text' => 'Une température infinie', 'is_correct' => false],
                            ['choice_text' => 'Une concentration obligatoirement négative', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel élément doit apparaître sur les axes d’un graphique scientifique bien construit ?',
                        'explanation' => 'Les axes doivent porter le nom ou le symbole de la grandeur et son unité. Cela permet d’interpréter correctement les données.',
                        'choices' => [
                            ['choice_text' => 'La grandeur mesurée et son unité', 'is_correct' => true],
                            ['choice_text' => 'Le nom du laboratoire uniquement', 'is_correct' => false],
                            ['choice_text' => 'La couleur favorite de l’expérimentateur', 'is_correct' => false],
                            ['choice_text' => 'Aucune information', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Facteurs combinés et raisonnement cinétique',
                'description' => 'Combiner plusieurs facteurs de vitesse et éviter les confusions fréquentes entre effets expérimentaux.',
                'questions' => [
                    [
                        'question' => 'Quelle combinaison rend généralement une réaction entre un solide et une solution plus rapide ?',
                        'explanation' => 'Une température plus élevée et une plus grande surface de contact augmentent souvent la vitesse, toutes choses égales par ailleurs.',
                        'choices' => [
                            ['choice_text' => 'Solide finement divisé et température plus élevée', 'is_correct' => true],
                            ['choice_text' => 'Gros morceau et température plus basse', 'is_correct' => false],
                            ['choice_text' => 'Gros morceau et solution plus diluée', 'is_correct' => false],
                            ['choice_text' => 'Solide moins exposé et plus froid', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Deux variables changent en même temps et la réaction devient plus rapide. Peut-on dire laquelle est responsable ?',
                        'explanation' => 'Pas avec certitude. Lorsque plusieurs variables changent simultanément, leurs effets ne peuvent pas être séparés proprement sans expérimentation complémentaire.',
                        'choices' => [
                            ['choice_text' => 'Pas directement', 'is_correct' => true],
                            ['choice_text' => 'Oui, toujours la première variable', 'is_correct' => false],
                            ['choice_text' => 'Oui, toujours la température', 'is_correct' => false],
                            ['choice_text' => 'Oui, toujours la concentration', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle démarche permet de comparer l’effet de deux températures ?',
                        'explanation' => 'Il faut garder la composition et les autres conditions aussi identiques que possible, puis comparer les vitesses obtenues aux deux températures.',
                        'choices' => [
                            ['choice_text' => 'Changer uniquement la température', 'is_correct' => true],
                            ['choice_text' => 'Changer la température et la concentration', 'is_correct' => false],
                            ['choice_text' => 'Changer de réaction', 'is_correct' => false],
                            ['choice_text' => 'Changer le réactif principal', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une réaction A est plus rapide que B. Peut-on conclure que A a toujours une énergie d’activation plus faible ?',
                        'explanation' => 'Pas forcément. La vitesse dépend aussi de la température, des concentrations, du mécanisme et d’autres facteurs. Une vitesse observée seule ne suffit pas.',
                        'choices' => [
                            ['choice_text' => 'Non, plusieurs facteurs peuvent expliquer la différence', 'is_correct' => true],
                            ['choice_text' => 'Oui, toujours', 'is_correct' => false],
                            ['choice_text' => 'Oui, si les deux réactions sont colorées', 'is_correct' => false],
                            ['choice_text' => 'Oui, si elles ont des produits différents', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Si la concentration augmente et la température diminue, que peut-on dire de la vitesse sans connaître les données expérimentales ?',
                        'explanation' => 'Les deux changements ont des effets opposés en général. La concentration peut accélérer, tandis que la baisse de température ralentit. Il faut donc des données pour savoir quel effet domine.',
                        'choices' => [
                            ['choice_text' => 'On ne peut pas prévoir précisément l’effet global sans plus d’informations', 'is_correct' => true],
                            ['choice_text' => 'La vitesse augmente toujours', 'is_correct' => false],
                            ['choice_text' => 'La vitesse diminue toujours', 'is_correct' => false],
                            ['choice_text' => 'La réaction s’arrête automatiquement', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi faut-il préciser les conditions lorsqu’on annonce qu’une réaction est « rapide » ?',
                        'explanation' => 'La vitesse dépend de facteurs comme la température et la concentration. Une même réaction peut être rapide dans une condition et lente dans une autre.',
                        'choices' => [
                            ['choice_text' => 'Parce que la vitesse dépend des conditions expérimentales', 'is_correct' => true],
                            ['choice_text' => 'Parce qu’une réaction n’a jamais de vitesse', 'is_correct' => false],
                            ['choice_text' => 'Parce que la masse est toujours variable', 'is_correct' => false],
                            ['choice_text' => 'Parce que les produits changent de nom', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un catalyseur et une hausse de température peuvent tous deux accélérer une réaction. Comment diffèrent-ils ?',
                        'explanation' => 'Le catalyseur baisse l’énergie d’activation en proposant un autre chemin, tandis que la hausse de température augmente l’énergie disponible pour les particules.',
                        'choices' => [
                            ['choice_text' => 'Ils agissent par des mécanismes différents', 'is_correct' => true],
                            ['choice_text' => 'Ils changent tous deux la formule chimique', 'is_correct' => false],
                            ['choice_text' => 'Ils ont exactement le même mécanisme', 'is_correct' => false],
                            ['choice_text' => 'Le catalyseur refroidit toujours la réaction', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une solution très diluée peut-elle réagir plus lentement qu’une solution concentrée ?',
                        'explanation' => 'La dilution réduit le nombre de particules réactives par volume, ce qui diminue généralement la fréquence des collisions.',
                        'choices' => [
                            ['choice_text' => 'Les collisions entre réactifs deviennent moins fréquentes', 'is_correct' => true],
                            ['choice_text' => 'L’énergie d’activation augmente toujours', 'is_correct' => false],
                            ['choice_text' => 'La masse atomique disparaît', 'is_correct' => false],
                            ['choice_text' => 'Les produits deviennent forcément solides', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Dans une expérience, on augmente la température et on utilise un catalyseur. Quelle est la meilleure conclusion si la réaction accélère fortement ?',
                        'explanation' => 'Les deux modifications sont connues pour accélérer de nombreuses réactions. Comme elles changent ensemble, on ne peut pas attribuer toute l’augmentation à un seul facteur.',
                        'choices' => [
                            ['choice_text' => 'Les deux modifications ont probablement contribué à l’augmentation observée', 'is_correct' => true],
                            ['choice_text' => 'Seul le catalyseur a forcément agi', 'is_correct' => false],
                            ['choice_text' => 'Seule la température a forcément agi', 'is_correct' => false],
                            ['choice_text' => 'Aucune modification n’a pu avoir d’effet', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel principe aide à construire une expérience fiable en cinétique ?',
                        'explanation' => 'Le contrôle des variables permet d’isoler l’effet du facteur étudié et de comparer les résultats de manière significative.',
                        'choices' => [
                            ['choice_text' => 'Ne faire varier qu’un facteur à la fois lorsque c’est possible', 'is_correct' => true],
                            ['choice_text' => 'Changer toutes les variables à chaque essai', 'is_correct' => false],
                            ['choice_text' => 'Ne jamais répéter les mesures', 'is_correct' => false],
                            ['choice_text' => 'Ignorer les unités', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Révision générale de cinétique chimique',
                'description' => 'Réinvestir les notions essentielles de cinétique : vitesse, collisions, température, concentration, catalyse, surface et données expérimentales.',
                'questions' => [
                    [
                        'question' => 'Quelle phrase résume le mieux la cinétique chimique ?',
                        'explanation' => 'La cinétique étudie la vitesse des réactions et les facteurs qui font varier cette vitesse.',
                        'choices' => [
                            ['choice_text' => 'Elle étudie la vitesse des réactions et les facteurs qui l’influencent', 'is_correct' => true],
                            ['choice_text' => 'Elle étudie uniquement les masses molaires', 'is_correct' => false],
                            ['choice_text' => 'Elle étudie uniquement l’équilibre', 'is_correct' => false],
                            ['choice_text' => 'Elle décrit seulement la couleur des réactions', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle condition est essentielle pour qu’une collision provoque une réaction ?',
                        'explanation' => 'Une collision efficace doit disposer d’une énergie suffisante et d’une orientation favorable.',
                        'choices' => [
                            ['choice_text' => 'Une énergie suffisante et une orientation adaptée', 'is_correct' => true],
                            ['choice_text' => 'Une masse identique pour les réactifs', 'is_correct' => false],
                            ['choice_text' => 'Une couleur identique', 'is_correct' => false],
                            ['choice_text' => 'Une pression nulle', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Que fait généralement une augmentation de concentration d’un réactif ?',
                        'explanation' => 'Elle augmente le nombre de particules réactives par unité de volume et peut donc accélérer la réaction.',
                        'choices' => [
                            ['choice_text' => 'Elle augmente généralement la fréquence des collisions', 'is_correct' => true],
                            ['choice_text' => 'Elle supprime l’énergie d’activation', 'is_correct' => false],
                            ['choice_text' => 'Elle empêche les collisions', 'is_correct' => false],
                            ['choice_text' => 'Elle rend tous les produits solides', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi une hausse de température accélère-t-elle généralement une réaction ?',
                        'explanation' => 'Une température plus élevée augmente l’énergie cinétique moyenne et la proportion de collisions capables de franchir l’énergie d’activation.',
                        'choices' => [
                            ['choice_text' => 'Davantage de particules possèdent une énergie suffisante', 'is_correct' => true],
                            ['choice_text' => 'Les particules deviennent plus grandes', 'is_correct' => false],
                            ['choice_text' => 'Les réactifs cessent de bouger', 'is_correct' => false],
                            ['choice_text' => 'La masse est automatiquement multipliée', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est l’effet d’un catalyseur sur l’énergie d’activation ?',
                        'explanation' => 'Le catalyseur fournit un chemin réactionnel alternatif dont l’énergie d’activation est plus faible.',
                        'choices' => [
                            ['choice_text' => 'Il la diminue', 'is_correct' => true],
                            ['choice_text' => 'Il la double toujours', 'is_correct' => false],
                            ['choice_text' => 'Il la rend toujours nulle', 'is_correct' => false],
                            ['choice_text' => 'Il n’a aucun effet sur le chemin réactionnel', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une vitesse moyenne de 0,05 mol·L⁻¹·s⁻¹ signifie que...',
                        'explanation' => 'En moyenne, la concentration varie de 0,05 mol/L par seconde sur l’intervalle étudié, selon la grandeur suivie.',
                        'choices' => [
                            ['choice_text' => 'La variation de concentration est de 0,05 mol/L chaque seconde en moyenne', 'is_correct' => true],
                            ['choice_text' => 'La masse est de 0,05 kg', 'is_correct' => false],
                            ['choice_text' => 'La température augmente de 0,05 °C', 'is_correct' => false],
                            ['choice_text' => 'La réaction dure exactement 0,05 s', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pour v = k[A]², que se passe-t-il si [A] est multipliée par 2 ?',
                        'explanation' => 'La vitesse devient k(2[A])² = 4k[A]². Elle est donc multipliée par 4.',
                        'choices' => [
                            ['choice_text' => 'Elle double', 'is_correct' => false],
                            ['choice_text' => 'Elle triple', 'is_correct' => false],
                            ['choice_text' => 'Elle quadruple', 'is_correct' => true],
                            ['choice_text' => 'Elle reste constante', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi écraser un solide réactif peut-il accélérer une réaction ?',
                        'explanation' => 'Le broyage augmente la surface de contact entre le solide et l’autre réactif.',
                        'choices' => [
                            ['choice_text' => 'La surface de contact augmente', 'is_correct' => true],
                            ['choice_text' => 'La formule chimique change toujours', 'is_correct' => false],
                            ['choice_text' => 'La masse disparaît', 'is_correct' => false],
                            ['choice_text' => 'L’énergie d’activation devient nulle', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Deux expériences doivent comparer l’effet d’un catalyseur. Quelle condition faut-il respecter ?',
                        'explanation' => 'Pour isoler l’effet du catalyseur, les autres conditions importantes doivent rester les mêmes.',
                        'choices' => [
                            ['choice_text' => 'Conserver les mêmes conditions sauf la présence du catalyseur', 'is_correct' => true],
                            ['choice_text' => 'Changer aussi la température et les concentrations', 'is_correct' => false],
                            ['choice_text' => 'Changer de réaction', 'is_correct' => false],
                            ['choice_text' => 'Utiliser des quantités différentes à chaque essai', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une courbe de formation de produit devient presque horizontale. Que peut-on raisonnablement conclure ?',
                        'explanation' => 'La pente est devenue faible, ce qui indique que la formation du produit est devenue très lente ou pratiquement terminée.',
                        'choices' => [
                            ['choice_text' => 'La vitesse de formation est devenue faible', 'is_correct' => true],
                            ['choice_text' => 'La vitesse devient infinie', 'is_correct' => false],
                            ['choice_text' => 'Le produit disparaît automatiquement', 'is_correct' => false],
                            ['choice_text' => 'La température est nécessairement nulle', 'is_correct' => false],
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
