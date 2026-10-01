<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class PeriodicTableBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'periodic-table')->firstOrFail();

        $quizzes = [
            [
                'title' => 'Découvrir le tableau périodique',
                'description' => 'Familiarisez-vous avec l’organisation générale du tableau périodique et apprenez à repérer les informations essentielles sur les éléments.',
                'questions' => [
                    [
                        'question' => 'À quoi sert principalement le tableau périodique des éléments ?',
                        'choices' => [
                            ['choice_text' => 'À organiser les éléments chimiques selon leur numéro atomique et leurs propriétés', 'is_correct' => true],
                            ['choice_text' => 'À classer les laboratoires par ordre de sécurité', 'is_correct' => false],
                            ['choice_text' => 'À mesurer directement la masse de chaque substance', 'is_correct' => false],
                            ['choice_text' => 'À montrer uniquement les éléments présents dans la nature', 'is_correct' => false],
                        ],
                        'explanation' => 'Le tableau périodique organise les éléments chimiques en fonction notamment de leur numéro atomique et met en évidence des ressemblances entre leurs propriétés.'
                    ],
                    [
                        'question' => 'Dans le tableau périodique, que représente le numéro atomique d’un élément ?',
                        'choices' => [
                            ['choice_text' => 'Le nombre de protons dans son noyau', 'is_correct' => true],
                            ['choice_text' => 'Le nombre de neutrons uniquement', 'is_correct' => false],
                            ['choice_text' => 'Le nombre total de couches électroniques', 'is_correct' => false],
                            ['choice_text' => 'La masse exacte de l’élément en grammes', 'is_correct' => false],
                        ],
                        'explanation' => 'Le numéro atomique correspond au nombre de protons dans le noyau. C’est ce nombre qui définit l’identité de l’élément.'
                    ],
                    [
                        'question' => 'Que trouve-t-on généralement dans la case d’un élément du tableau périodique ?',
                        'choices' => [
                            ['choice_text' => 'Son symbole, son nom et son numéro atomique, entre autres informations', 'is_correct' => true],
                            ['choice_text' => 'Seulement sa couleur', 'is_correct' => false],
                            ['choice_text' => Uniquement sa température de fusion', 'is_correct' => false],
                            ['choice_text' => 'Seulement le nombre de neutrons', 'is_correct' => false],
                        ],
                        'explanation' => 'Une case du tableau périodique présente généralement plusieurs informations, notamment le symbole chimique, le nom et le numéro atomique.'
                    ],
                    [
                        'question' => 'Le symbole chimique O correspond à quel élément ?',
                        'choices' => [
                            ['choice_text' => Oxygène', 'is_correct' => true],
                            ['choice_text' => Or', 'is_correct' => false],
                            ['choice_text' => Osmium', 'is_correct' => false],
                            ['choice_text' => Oganesson', 'is_correct' => false],
                        ],
                        'explanation' => 'Le symbole O désigne l’oxygène. L’or a le symbole Au, l’osmium Os et l’oganesson Og.'
                    ],
                    [
                        'question' => 'Pourquoi le tableau périodique est-il organisé en lignes et en colonnes plutôt qu’en une simple liste ?',
                        'choices' => [
                            ['choice_text' => Parce que certains éléments présentent des propriétés chimiques qui se répètent régulièrement', 'is_correct' => true],
                            ['choice_text' => Pour classer les éléments selon leur couleur', 'is_correct' => false],
                            ['choice_text' => Pour mettre les métaux uniquement en haut', 'is_correct' => false],
                            ['choice_text' => Parce que tous les éléments d’une même ligne ont toujours la même masse', 'is_correct' => false],
                        ],
                        'explanation' => 'L’organisation en lignes et en colonnes permet de repérer des régularités dans les propriétés des éléments.'
                    ],
                    [
                        'question' => 'Un élève cherche le sodium dans le tableau périodique. Quel symbole doit-il rechercher ?',
                        'choices' => [
                            ['choice_text' => Na', 'is_correct' => true],
                            ['choice_text' => S', 'is_correct' => false],
                            ['choice_text' => So', 'is_correct' => false],
                            ['choice_text' => Sd', 'is_correct' => false],
                        ],
                        'explanation' => 'Le sodium a pour symbole Na. Ce symbole vient de son nom latin, natrium.'
                    ],
                    [
                        'question' => 'Quelle information permet de distinguer directement deux éléments différents ?',
                        'choices' => [
                            ['choice_text' => Leur numéro atomique', 'is_correct' => true],
                            ['choice_text' => Leur couleur à l’état solide uniquement', 'is_correct' => false],
                            ['choice_text' => Leur température du jour', 'is_correct' => false],
                            ['choice_text' => La taille du récipient qui les contient', 'is_correct' => false],
                        ],
                        'explanation' => 'Deux éléments différents ont des nombres de protons différents. Le numéro atomique permet donc de les distinguer.'
                    ],
                    [
                        'question' => 'Un étudiant voit deux cases portant les numéros atomiques 8 et 9. Quel élément a le numéro atomique le plus élevé ?',
                        'choices' => [
                            ['choice_text' => Celui qui porte le numéro 9', 'is_correct' => true],
                            ['choice_text' => Celui qui porte le numéro 8', 'is_correct' => false],
                            ['choice_text' => Ils ont le même numéro atomique', 'is_correct' => false],
                            ['choice_text' => Impossible à comparer', 'is_correct' => false],
                        ],
                        'explanation' => 'Le numéro atomique augmente d’une unité lorsque l’on passe à l’élément suivant dans le tableau. 9 est donc supérieur à 8.'
                    ],
                    [
                        'question' => 'Lequel de ces éléments est un gaz à température ambiante ?',
                        'choices' => [
                            ['choice_text' => Oxygène', 'is_correct' => true],
                            ['choice_text' => Fer', 'is_correct' => false],
                            ['choice_text' => Cuivre', 'is_correct' => false],
                            ['choice_text' => Aluminium', 'is_correct' => false],
                        ],
                        'explanation' => 'L’oxygène est un gaz à température ambiante, contrairement au fer, au cuivre et à l’aluminium qui sont solides dans ces conditions.'
                    ],
                    [
                        'question' => 'Un élève dit : « Plus un élément est placé à droite du tableau, plus sa masse est forcément faible. » Pourquoi cette règle n’est-elle pas correcte ?',
                        'choices' => [
                            ['choice_text' => La position dans le tableau ne permet pas de déduire à elle seule une masse toujours plus faible', 'is_correct' => true],
                            ['choice_text' => La masse n’existe pas pour les éléments chimiques', 'is_correct' => false],
                            ['choice_text' => Tous les éléments à droite ont la même masse', 'is_correct' => false],
                            ['choice_text' => Les éléments à droite sont tous des gaz', 'is_correct' => false],
                        ],
                        'explanation' => 'La position dans le tableau renseigne surtout sur le numéro atomique, la structure électronique et certaines tendances de propriétés. Elle ne signifie pas simplement que la masse diminue toujours.'
                    ],
                ],
            ],

            [
                'title' => 'Périodes et groupes',
                'description' => 'Apprenez à lire les lignes et les colonnes du tableau périodique et à comprendre ce que leur position peut révéler sur les éléments.',
                'questions' => [
                    [
                        'question' => 'Comment appelle-t-on une ligne horizontale du tableau périodique ?',
                        'choices' => [
                            ['choice_text' => Une période', 'is_correct' => true],
                            ['choice_text' => Un groupe', 'is_correct' => false],
                            ['choice_text' => Une famille verticale', 'is_correct' => false],
                            ['choice_text' => Un bloc de masse', 'is_correct' => false],
                        ],
                        'explanation' => 'Les lignes horizontales sont appelées périodes. Elles correspondent à des niveaux d’énergie électroniques occupés.'
                    ],
                    [
                        'question' => 'Comment appelle-t-on une colonne verticale du tableau périodique ?',
                        'choices' => [
                            ['choice_text' => Un groupe', 'is_correct' => true],
                            ['choice_text' => Une période', 'is_correct' => false],
                            ['choice_text' => Une rangée', 'is_correct' => false],
                            ['choice_text' => Une série de neutrons', 'is_correct' => false],
                        ],
                        'explanation' => 'Les colonnes verticales sont appelées groupes. Les éléments d’un même groupe présentent souvent des propriétés chimiques semblables.'
                    ],
                    [
                        'question' => 'Deux éléments placés dans le même groupe ont souvent :',
                        'choices' => [
                            ['choice_text' => Des propriétés chimiques qui se ressemblent', 'is_correct' => true],
                            ['choice_text' => Exactement la même masse', 'is_correct' => false],
                            ['choice_text' => Le même nombre total de neutrons', 'is_correct' => false],
                            ['choice_text' => Toujours le même état physique', 'is_correct' => false],
                        ],
                        'explanation' => 'Les éléments d’un même groupe ont souvent un nombre d’électrons de valence similaire, ce qui contribue à leurs propriétés chimiques communes.'
                    ],
                    [
                        'question' => 'L’oxygène et le soufre se trouvent dans la même colonne. Quelle conclusion simple peut-on tirer ?',
                        'choices' => [
                            ['choice_text' => Ils appartiennent à la même famille chimique', 'is_correct' => true],
                            ['choice_text' => Ils sont le même élément', 'is_correct' => false],
                            ['choice_text' => Ils ont forcément la même masse', 'is_correct' => false],
                            ['choice_text' => Ils ont exactement le même nombre de neutrons', 'is_correct' => false],
                        ],
                        'explanation' => 'L’oxygène et le soufre appartiennent au même groupe, la famille des chalcogènes. Ils ont certaines propriétés chimiques en commun.'
                    ],
                    [
                        'question' => 'Que peut-on associer simplement au numéro de période d’un élément ?',
                        'choices' => [
                            ['choice_text' => Au nombre de couches électroniques occupées dans le modèle simplifié', 'is_correct' => true],
                            ['choice_text' => Au nombre de neutrons uniquement', 'is_correct' => false],
                            ['choice_text' => À la charge de l’élément', 'is_correct' => false],
                            ['choice_text' => À la masse en grammes d’un atome', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans un modèle simple, le numéro de période est lié au niveau électronique principal le plus élevé occupé par les électrons.'
                    ],
                    [
                        'question' => 'Le sodium est situé dans la période 3. Combien de couches électroniques occupées possède-t-il dans le modèle simplifié ?',
                        'choices' => [
                            ['choice_text' => 3', 'is_correct' => true],
                            ['choice_text' => 2', 'is_correct' => false],
                            ['choice_text' => 8', 'is_correct' => false],
                            ['choice_text' => 11', 'is_correct' => false],
                        ],
                        'explanation' => 'Le sodium appartient à la troisième période, ce qui correspond à trois couches électroniques occupées dans le modèle simplifié.'
                    ],
                    [
                        'question' => 'Un élève confond groupe et période. Laquelle de ces affirmations peut l’aider à les distinguer ?',
                        'choices' => [
                            ['choice_text' => 'Les périodes sont horizontales et les groupes sont verticaux', 'is_correct' => true],
                            ['choice_text' => 'Les périodes sont verticales et les groupes horizontaux', 'is_correct' => false],
                            ['choice_text' => 'Les deux sont uniquement des nombres atomiques', 'is_correct' => false],
                            ['choice_text' => 'Les groupes correspondent seulement aux masses atomiques', 'is_correct' => false],
                        ],
                        'explanation' => 'Une période est une ligne horizontale du tableau, alors qu’un groupe est une colonne verticale.'
                    ],
                    [
                        'question' => 'Le lithium et le sodium sont placés dans la même colonne. Pourquoi cela est-il utile pour un chimiste débutant ?',
                        'choices' => [
                            ['choice_text' => Leur position suggère des comportements chimiques comparables à certains égards', 'is_correct' => true],
                            ['choice_text' => Ils ont exactement les mêmes propriétés physiques', 'is_correct' => false],
                            ['choice_text' => Ils sont des isotopes l’un de l’autre', 'is_correct' => false],
                            ['choice_text' => Ils possèdent forcément le même nombre de protons', 'is_correct' => false],
                        ],
                        'explanation' => 'Le lithium et le sodium appartiennent au même groupe, les alcalins. Ils ont notamment un seul électron de valence et des comportements chimiques qui se ressemblent.'
                    ],
                    [
                        'question' => 'Un élément est dans la période 2 et un autre dans la période 4. Lequel possède, dans le modèle simplifié, davantage de couches électroniques occupées ?',
                        'choices' => [
                            ['choice_text' => L’élément de la période 4', 'is_correct' => true],
                            ['choice_text' => L’élément de la période 2', 'is_correct' => false],
                            ['choice_text' => Ils en possèdent toujours le même nombre', 'is_correct' => false],
                            ['choice_text' => Cela dépend uniquement du nombre de neutrons', 'is_correct' => false],
                        ],
                        'explanation' => 'Le numéro de période est lié au nombre de couches électroniques occupées. L’élément de la période 4 en possède donc davantage dans ce modèle.'
                    ],
                    [
                        'question' => 'Pourquoi les éléments d’un même groupe ne sont-ils pas exactement identiques ?',
                        'choices' => [
                            ['choice_text' => Ils ont le même type général de comportement chimique, mais des nombres de couches et des masses différents', 'is_correct' => true],
                            ['choice_text' => Ils sont tous des isotopes du même atome', 'is_correct' => false],
                            ['choice_text' => Ils ont toujours le même numéro atomique', 'is_correct' => false],
                            ['choice_text' => Ils ont tous exactement la même taille atomique', 'is_correct' => false],
                        ],
                        'explanation' => 'Les éléments d’un groupe partagent certaines caractéristiques, mais ils restent des éléments différents avec des nombres de protons et de couches électroniques différents.'
                    ],
                ],
            ],

            [
                'title' => 'Métaux, non-métaux et métalloïdes',
                'description' => 'Sachez reconnaître les grandes catégories d’éléments et associez leur position à quelques propriétés physiques et chimiques simples.',
                'questions' => [
                    [
                        'question' => Dans le tableau périodique, où se trouvent principalement les métaux ?',
                        'choices' => [
                            ['choice_text' => 'Dans la partie gauche et au centre', 'is_correct' => true],
                            ['choice_text' => 'Uniquement dans le coin supérieur droit', 'is_correct' => false],
                            ['choice_text' => 'Seulement dans la dernière colonne', 'is_correct' => false],
                            ['choice_text' => 'Uniquement dans la première période', 'is_correct' => false],
                        ],
                        'explanation' => 'La majorité des éléments du tableau périodique sont des métaux et se trouvent principalement à gauche et au centre.'
                    ],
                    [
                        'question' => Lequel de ces éléments est un non-métal ?',
                        'choices' => [
                            ['choice_text' => Soufre', 'is_correct' => true],
                            ['choice_text' => Fer', 'is_correct' => false],
                            ['choice_text' => Cuivre', 'is_correct' => false],
                            ['choice_text' => Sodium', 'is_correct' => false],
                        ],
                        'explanation' => 'Le soufre est un non-métal. Le fer, le cuivre et le sodium sont des métaux.'
                    ],
                    [
                        'question' => 'Quelle propriété est typique de nombreux métaux ?',
                        'choices' => [
                            ['choice_text' => 'Ils conduisent généralement bien la chaleur et l’électricité', 'is_correct' => true],
                            ['choice_text' => 'Ils sont tous gazeux à température ambiante', 'is_correct' => false],
                            ['choice_text' => 'Ils sont tous transparents', 'is_correct' => false],
                            ['choice_text' => 'Ils ne peuvent jamais être déformés', 'is_correct' => false],
                        ],
                        'explanation' => 'De nombreux métaux sont de bons conducteurs de chaleur et d’électricité. Ils sont aussi souvent malléables et brillants.'
                    ],
                    [
                        'question' => 'Lequel de ces éléments est connu pour être un bon conducteur électrique ?',
                        'choices' => [
                            ['choice_text' => Cuivre', 'is_correct' => true],
                            ['choice_text' => Soufre', 'is_correct' => false],
                            ['choice_text' => Chlore', 'is_correct' => false],
                            ['choice_text' => Néon', 'is_correct' => false],
                        ],
                        'explanation' => 'Le cuivre est un excellent conducteur électrique, ce qui explique son utilisation fréquente dans les fils électriques.'
                    ],
                    [
                        'question' => 'Quel élément est un gaz non métallique très présent dans l’air ?',
                        'choices' => [
                            ['choice_text' => Azote', 'is_correct' => true],
                            ['choice_text' => Aluminium', 'is_correct' => false],
                            ['choice_text' => Fer', 'is_correct' => false],
                            ['choice_text' => Zinc', 'is_correct' => false],
                        ],
                        'explanation' => 'L’azote est un non-métal gazeux qui constitue la plus grande partie de l’air terrestre.'
                    ],
                    [
                        'question' => 'Pourquoi les métalloïdes portent-ils ce nom ?',
                        'choices' => [
                            ['choice_text' => 'Ils présentent certaines propriétés des métaux et certaines propriétés des non-métaux', 'is_correct' => true],
                            ['choice_text' => 'Ils sont composés uniquement de métaux', 'is_correct' => false],
                            ['choice_text' => 'Ils sont tous liquides', 'is_correct' => false],
                            ['choice_text' => 'Ils n’ont aucune propriété chimique', 'is_correct' => false],
                        ],
                        'explanation' => 'Les métalloïdes ont des propriétés intermédiaires entre celles de certains métaux et de certains non-métaux.'
                    ],
                    [
                        'question' => 'Le silicium est souvent utilisé dans les composants électroniques. Quelle propriété explique en partie cet usage ?',
                        'choices' => [
                            ['choice_text' => 'Il est un semi-conducteur', 'is_correct' => true],
                            ['choice_text' => 'Il est toujours un excellent isolant', 'is_correct' => false],
                            ['choice_text' => 'Il est liquide à température ambiante', 'is_correct' => false],
                            ['choice_text' => 'Il ne possède aucun électron', 'is_correct' => false],
                        ],
                        'explanation' => 'Le silicium possède des propriétés électroniques intermédiaires qui permettent de contrôler le passage du courant, ce qui est très utile pour les semi-conducteurs.'
                    ],
                    [
                        'question' => 'Une entreprise cherche un matériau pour fabriquer un fil électrique. Pourquoi le cuivre est-il un choix logique ?',
                        'choices' => [
                            ['choice_text' => 'C’est un métal qui conduit bien l’électricité', 'is_correct' => true],
                            ['choice_text' => 'Le cuivre ne contient aucun électron', 'is_correct' => false],
                            ['choice_text' => 'Le cuivre est un gaz à température ambiante', 'is_correct' => false],
                            ['choice_text' => 'Le cuivre ne peut pas être déformé', 'is_correct' => false],
                        ],
                        'explanation' => 'Le cuivre possède une très bonne conductivité électrique et peut être transformé en fils, ce qui le rend pratique pour les installations électriques.'
                    ],
                    [
                        'question' => 'Laquelle de ces situations correspond le mieux à un non-métal ?',
                        'choices' => [
                            ['choice_text' => 'Un élément qui est un gaz et qui conduit très mal l’électricité', 'is_correct' => true],
                            ['choice_text' => 'Un élément brillant et très conducteur', 'is_correct' => false],
                            ['choice_text' => 'Un métal malléable utilisé dans les câbles', 'is_correct' => false],
                            ['choice_text' => 'Un matériau métallique qui conduit très bien la chaleur', 'is_correct' => false],
                        ],
                        'explanation' => 'Les non-métaux conduisent généralement mal l’électricité, et plusieurs d’entre eux sont gazeux à température ambiante.'
                    ],
                    [
                        'question' => 'Un élève pense que tout élément situé à droite du tableau est un gaz. Quelle correction est la plus juste ?',
                        'choices' => [
                            ['choice_text' => 'La partie droite contient beaucoup de non-métaux, mais ils ne sont pas tous gazeux', 'is_correct' => true],
                            ['choice_text' => 'Tous les éléments à droite sont forcément des métaux', 'is_correct' => false],
                            ['choice_text' => 'Tous les éléments à droite sont liquides', 'is_correct' => false],
                            ['choice_text' => 'La position dans le tableau ne donne aucune information', 'is_correct' => false],
                        ],
                        'explanation' => 'La partie droite contient de nombreux non-métaux et gaz nobles, mais certains éléments y sont solides à température ambiante, comme le carbone ou le soufre.'
                    ],
                ],
            ],

            [
                'title' => 'Les métaux alcalins et alcalino-terreux',
                'description' => 'Découvrez les groupes 1 et 2 et leurs caractéristiques générales grâce à des exemples simples comme le lithium, le sodium, le magnésium et le calcium.',
                'questions' => [
                    [
                        'question' => Dans quel groupe trouve-t-on le sodium ?',
                        'choices' => [
                            ['choice_text' => 'Groupe 1', 'is_correct' => true],
                            ['choice_text' => 'Groupe 2', 'is_correct' => false],
                            ['choice_text' => 'Groupe 17', 'is_correct' => false],
                            ['choice_text' => 'Groupe 18', 'is_correct' => false],
                        ],
                        'explanation' => 'Le sodium appartient au groupe 1, celui des métaux alcalins.'
                    ],
                    [
                        'question' => 'Quelle caractéristique simple partagent les éléments du groupe 1 ?',
                        'choices' => [
                            ['choice_text' => 'Ils possèdent généralement un électron de valence', 'is_correct' => true],
                            ['choice_text' => 'Ils possèdent tous 8 électrons de valence', 'is_correct' => false],
                            ['choice_text' => 'Ils sont tous des gaz', 'is_correct' => false],
                            ['choice_text' => 'Ils possèdent toujours exactement 2 protons', 'is_correct' => false],
                        ],
                        'explanation' => 'Les métaux alcalins ont généralement un seul électron sur leur couche externe, ce qui contribue à leur réactivité.'
                    ],
                    [
                        'question' => Lequel de ces éléments appartient au groupe 2 ?',
                        'choices' => [
                            ['choice_text' => Magnésium', 'is_correct' => true],
                            ['choice_text' => Sodium', 'is_correct' => false],
                            ['choice_text' => Chlore', 'is_correct' => false],
                            ['choice_text' => Néon', 'is_correct' => false],
                        ],
                        'explanation' => 'Le magnésium appartient au groupe 2, celui des métaux alcalino-terreux.'
                    ],
                    [
                        'question' => 'Combien d’électrons de valence possède généralement un élément du groupe 2 ?',
                        'choices' => [
                            ['choice_text' => 2', 'is_correct' => true],
                            ['choice_text' => 1', 'is_correct' => false],
                            ['choice_text' => 7', 'is_correct' => false],
                            ['choice_text' => 8', 'is_correct' => false],
                        ],
                        'explanation' => 'Les éléments du groupe 2 possèdent généralement deux électrons de valence dans le modèle simplifié.'
                    ],
                    [
                        'question' => 'Pourquoi le sodium forme-t-il facilement un ion Na⁺ ?',
                        'choices' => [
                            ['choice_text' => 'Il peut perdre son électron de valence', 'is_correct' => true],
                            ['choice_text' => 'Il doit gagner sept protons', 'is_correct' => false],
                            ['choice_text' => 'Il perd toujours tous ses neutrons', 'is_correct' => false],
                            ['choice_text' => 'Il gagne huit noyaux', 'is_correct' => false],
                        ],
                        'explanation' => 'Le sodium possède un seul électron de valence. Sa perte donne un ion positif Na⁺ avec une configuration électronique plus stable.'
                    ],
                    [
                        'question' => 'Le calcium forme couramment l’ion Ca²⁺. Que s’est-il passé au niveau des électrons ?',
                        'choices' => [
                            ['choice_text' => 'Le calcium a perdu deux électrons', 'is_correct' => true],
                            ['choice_text' => 'Le calcium a gagné deux électrons', 'is_correct' => false],
                            ['choice_text' => 'Le calcium a perdu deux protons', 'is_correct' => false],
                            ['choice_text' => 'Le calcium a gagné deux neutrons', 'is_correct' => false],
                        ],
                        'explanation' => 'Le calcium est dans le groupe 2 et possède deux électrons de valence. Leur perte conduit à Ca²⁺.'
                    ],
                    [
                        'question' => 'Un étudiant compare le lithium et le sodium, qui sont dans la même colonne. Quelle propriété commune est la plus pertinente ?',
                        'choices' => [
                            ['choice_text' => 'Ils ont tous les deux un électron de valence', 'is_correct' => true],
                            ['choice_text' => 'Ils ont le même numéro atomique', 'is_correct' => false],
                            ['choice_text' => 'Ils ont le même nombre de couches électroniques', 'is_correct' => false],
                            ['choice_text' => 'Ils possèdent exactement la même masse', 'is_correct' => false],
                        ],
                        'explanation' => 'Le lithium et le sodium sont tous deux dans le groupe 1. Ils possèdent donc un électron de valence dans le modèle simplifié.'
                    ],
                    [
                        'question' => 'Pourquoi faut-il manipuler le sodium métallique avec précaution, notamment en présence d’eau ?',
                        'choices' => [
                            ['choice_text' => 'Il est très réactif et peut réagir rapidement avec l’eau', 'is_correct' => true],
                            ['choice_text' => 'Il est complètement inerte', 'is_correct' => false],
                            ['choice_text' => 'Il est naturellement gazeux à température ambiante', 'is_correct' => false],
                            ['choice_text' => 'Il ne possède aucun électron externe', 'is_correct' => false],
                        ],
                        'explanation' => 'Le sodium métallique est un métal alcalin très réactif. Son contact avec l’eau peut provoquer une réaction rapide avec dégagement de chaleur et de gaz.'
                    ],
                    [
                        'question' => 'Quelle tendance générale est associée aux métaux alcalins ?',
                        'choices' => [
                            ['choice_text' => 'Ils sont réactifs et forment facilement des ions positifs', 'is_correct' => true],
                            ['choice_text' => 'Ils forment toujours des ions négatifs', 'is_correct' => false],
                            ['choice_text' => 'Ils sont tous des gaz nobles', 'is_correct' => false],
                            ['choice_text' => 'Ils ne réagissent jamais avec les autres éléments', 'is_correct' => false],
                        ],
                        'explanation' => 'Les métaux alcalins perdent facilement leur électron externe et forment donc couramment des cations.'
                    ],
                    [
                        'question' => 'Un élève confond le calcium et le sodium parce qu’ils sont tous les deux des métaux. Quelle information du tableau permet de les distinguer clairement ?',
                        'choices' => [
                            ['choice_text' => 'Leur numéro atomique et leur groupe ne sont pas les mêmes', 'is_correct' => true],
                            ['choice_text' => 'Ils ont le même numéro atomique', 'is_correct' => false],
                            ['choice_text' => 'Ils appartiennent tous deux au groupe 1', 'is_correct' => false],
                            ['choice_text' => 'Ils ont exactement le même symbole', 'is_correct' => false],
                        ],
                        'explanation' => 'Le sodium est Na et appartient au groupe 1, tandis que le calcium est Ca et appartient au groupe 2. Leurs numéros atomiques sont également différents.'
                    ],
                ],
            ],

            [
                'title' => 'Halogènes et gaz nobles',
                'description' => 'Découvrez deux familles importantes du tableau périodique : les halogènes et les gaz nobles, et comparez leur comportement chimique.',
                'questions' => [
                    [
                        'question' => Dans quel groupe se trouvent les halogènes ?',
                        'choices' => [
                            ['choice_text' => 'Groupe 17', 'is_correct' => true],
                            ['choice_text' => 'Groupe 1', 'is_correct' => false],
                            ['choice_text' => 'Groupe 2', 'is_correct' => false],
                            ['choice_text' => 'Groupe 18', 'is_correct' => false],
                        ],
                        'explanation' => 'Les halogènes occupent le groupe 17 du tableau périodique.'
                    ],
                    [
                        'question' => 'Le chlore possède combien d’électrons de valence dans le modèle simplifié ?',
                        'choices' => [
                            ['choice_text' => 7', 'is_correct' => true],
                            ['choice_text' => 1', 'is_correct' => false],
                            ['choice_text' => 8', 'is_correct' => false],
                            ['choice_text' => 17', 'is_correct' => false],
                        ],
                        'explanation' => 'Le chlore possède 7 électrons de valence, ce qui explique en partie sa tendance à gagner un électron.'
                    ],
                    [
                        'question' => Lequel de ces éléments est un halogène ?',
                        'choices' => [
                            ['choice_text' => Fluor', 'is_correct' => true],
                            ['choice_text' => Sodium', 'is_correct' => false],
                            ['choice_text' => Magnésium', 'is_correct' => false],
                            ['choice_text' => Argon', 'is_correct' => false],
                        ],
                        'explanation' => 'Le fluor appartient au groupe 17, celui des halogènes.'
                    ],
                    [
                        'question' => 'Dans quel groupe trouve-t-on les gaz nobles ?',
                        'choices' => [
                            ['choice_text' => 'Groupe 18', 'is_correct' => true],
                            ['choice_text' => 'Groupe 17', 'is_correct' => false],
                            ['choice_text' => 'Groupe 1', 'is_correct' => false],
                            ['choice_text' => 'Groupe 2', 'is_correct' => false],
                        ],
                        'explanation' => 'Les gaz nobles constituent le groupe 18 du tableau périodique.'
                    ],
                    [
                        'question' => 'Lequel de ces éléments est un gaz noble ?',
                        'choices' => [
                            ['choice_text' => Néon', 'is_correct' => true],
                            ['choice_text' => Chlore', 'is_correct' => false],
                            ['choice_text' => Fluor', 'is_correct' => false],
                            ['choice_text' => Sodium', 'is_correct' => false],
                        ],
                        'explanation' => 'Le néon appartient au groupe 18 et est donc un gaz noble.'
                    ],
                    [
                        'question' => 'Pourquoi les gaz nobles réagissent-ils généralement peu avec les autres éléments ?',
                        'choices' => [
                            ['choice_text' => 'Leur couche électronique externe est déjà particulièrement stable', 'is_correct' => true],
                            ['choice_text' => 'Ils ne possèdent aucun électron', 'is_correct' => false],
                            ['choice_text' => 'Ils ont tous un seul proton', 'is_correct' => false],
                            ['choice_text' => 'Ils sont tous solides', 'is_correct' => false],
                        ],
                        'explanation' => 'Les gaz nobles possèdent une configuration électronique externe très stable, ce qui réduit leur tendance à gagner, perdre ou partager des électrons.'
                    ],
                    [
                        'question' => 'Entre le sodium et le chlore, lequel a tendance à gagner un électron dans une réaction simple ?',
                        'choices' => [
                            ['choice_text' => 'Le chlore', 'is_correct' => true],
                            ['choice_text' => 'Le sodium', 'is_correct' => false],
                            ['choice_text' => 'Les deux toujours', 'is_correct' => false],
                            ['choice_text' => 'Aucun des deux', 'is_correct' => false],
                        ],
                        'explanation' => 'Le chlore possède 7 électrons de valence et peut en gagner un pour compléter sa couche externe. Le sodium, lui, tend plutôt à en perdre un.'
                    ],
                    [
                        'question' => 'Pourquoi le fluor est-il très réactif parmi les éléments simples ?',
                        'choices' => [
                            ['choice_text' => 'Il lui manque un seul électron pour compléter sa couche externe', 'is_correct' => true],
                            ['choice_text' => 'Il possède une couche externe complètement vide', 'is_correct' => false],
                            ['choice_text' => 'Il a déjà une couche parfaitement stable comme un gaz noble', 'is_correct' => false],
                            ['choice_text' => 'Il ne possède pas de noyau', 'is_correct' => false],
                        ],
                        'explanation' => 'Le fluor possède 7 électrons de valence et tend fortement à en gagner un pour atteindre une configuration plus stable.'
                    ],
                    [
                        'question' => 'Un ballon est rempli avec de l’hélium pour une fête. Pourquoi l’hélium est-il choisi plutôt qu’un métal ?',
                        'choices' => [
                            ['choice_text' => 'L’hélium est un gaz noble, léger et peu réactif', 'is_correct' => true],
                            ['choice_text' => 'L’hélium est un métal liquide', 'is_correct' => false],
                            ['choice_text' => 'L’hélium possède 17 électrons de valence', 'is_correct' => false],
                            ['choice_text' => 'L’hélium réagit très fortement avec l’air', 'is_correct' => false],
                        ],
                        'explanation' => 'L’hélium est un gaz noble très peu réactif et possède une faible masse. Il convient donc à de nombreuses utilisations où un gaz léger et peu réactif est recherché.'
                    ],
                    [
                        'question' => 'Le sodium et le chlore réagissent pour former du chlorure de sodium. Quelle idée du tableau périodique aide à comprendre cette réaction ?',
                        'choices' => [
                            ['choice_text' => 'Le sodium perd facilement un électron tandis que le chlore peut en gagner un', 'is_correct' => true],
                            ['choice_text' => 'Le sodium et le chlore sont tous deux des gaz nobles', 'is_correct' => false],
                            ['choice_text' => 'Les deux éléments cherchent à perdre leurs noyaux', 'is_correct' => false],
                            ['choice_text' => 'Aucun électron ne participe à la formation du composé', 'is_correct' => false],
                        ],
                        'explanation' => 'La position de ces éléments dans le tableau indique des configurations électroniques externes différentes et complémentaires : le sodium forme Na⁺ et le chlore forme Cl⁻.'
                    ],
                ],
            ],

            [
                'title' => 'Tendances dans le tableau périodique',
                'description' => 'Observez les grandes tendances du tableau périodique, notamment la variation du rayon atomique et de l’attraction exercée sur les électrons.',
                'questions' => [
                    [
                        'question' => 'Lorsque l’on descend dans un groupe, le nombre de couches électroniques occupées augmente généralement. Que devient alors le rayon atomique ?',
                        'choices' => [
                            ['choice_text' => 'Il augmente généralement', 'is_correct' => true],
                            ['choice_text' => 'Il devient toujours nul', 'is_correct' => false],
                            ['choice_text' => 'Il reste exactement identique', 'is_correct' => false],
                            ['choice_text' => 'Il diminue toujours fortement', 'is_correct' => false],
                        ],
                        'explanation' => 'En descendant dans un groupe, de nouvelles couches électroniques sont ajoutées. Les électrons externes se trouvent donc généralement plus loin du noyau.'
                    ],
                    [
                        'question' => 'Dans une même période, lorsqu’on se déplace de gauche à droite, le numéro atomique :',
                        'choices' => [
                            ['choice_text' => 'Augmente', 'is_correct' => true],
                            ['choice_text' => 'Diminue toujours', 'is_correct' => false],
                            ['choice_text' => 'Reste constant', 'is_correct' => false],
                            ['choice_text' => 'Change au hasard', 'is_correct' => false],
                        ],
                        'explanation' => 'Le tableau périodique est organisé par numéro atomique croissant. Celui-ci augmente donc de gauche à droite dans une période.'
                    ],
                    [
                        'question' => 'Quel élément possède le plus grand rayon atomique dans ce groupe simplifié : Li, Na ou K ?',
                        'choices' => [
                            ['choice_text' => K', 'is_correct' => true],
                            ['choice_text' => Na', 'is_correct' => false],
                            ['choice_text' => Li', 'is_correct' => false],
                            ['choice_text' => Ils ont exactement le même rayon', 'is_correct' => false],
                        ],
                        'explanation' => 'Li, Na et K appartiennent au même groupe. En descendant, ils possèdent davantage de couches électroniques, donc le rayon atomique augmente généralement.'
                    ],
                    [
                        'question' => 'Pourquoi un atome situé plus bas dans un même groupe possède-t-il souvent un rayon plus grand ?',
                        'choices' => [
                            ['choice_text' => 'Il possède davantage de couches électroniques occupées', 'is_correct' => true],
                            ['choice_text' => 'Il possède moins de protons', 'is_correct' => false],
                            ['choice_text' => 'Il perd automatiquement tous ses électrons', 'is_correct' => false],
                            ['choice_text' => 'Son noyau disparaît progressivement', 'is_correct' => false],
                        ],
                        'explanation' => 'Chaque période supplémentaire ajoute généralement une nouvelle couche électronique, ce qui augmente la taille globale de l’atome.'
                    ],
                    [
                        'question' => 'Entre le sodium et le chlore, situés dans la même période, lequel attire généralement plus fortement ses électrons de valence ?',
                        'choices' => [
                            ['choice_text' => 'Le chlore', 'is_correct' => true],
                            ['choice_text' => 'Le sodium', 'is_correct' => false],
                            ['choice_text' => 'Ils ont exactement la même attraction', 'is_correct' => false],
                            ['choice_text' => 'Impossible à comparer', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans une période, l’attraction exercée par le noyau sur les électrons de valence augmente généralement de gauche à droite. Le chlore attire donc plus fortement les siens que le sodium.'
                    ],
                    [
                        'question' => 'Quelle tendance générale observe-t-on pour l’électronégativité en allant vers la droite d’une période ?',
                        'choices' => [
                            ['choice_text' => 'Elle augmente généralement', 'is_correct' => true],
                            ['choice_text' => 'Elle diminue toujours', 'is_correct' => false],
                            ['choice_text' => 'Elle reste exactement constante', 'is_correct' => false],
                            ['choice_text' => 'Elle dépend uniquement du nombre de neutrons', 'is_correct' => false],
                        ],
                        'explanation' => 'De gauche à droite dans une période, les atomes attirent généralement plus fortement les électrons impliqués dans les liaisons.'
                    ],
                    [
                        'question' => 'Que se passe-t-il généralement pour le rayon atomique lorsqu’on avance de gauche à droite dans une période ?',
                        'choices' => [
                            ['choice_text' => 'Il diminue globalement', 'is_correct' => true],
                            ['choice_text' => 'Il augmente toujours', 'is_correct' => false],
                            ['choice_text' => 'Il devient immédiatement nul', 'is_correct' => false],
                            ['choice_text' => 'Il est complètement aléatoire', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans une période, le nombre de protons augmente tandis que les électrons ajoutés occupent généralement la même couche principale. L’attraction nucléaire augmente, ce qui tend à réduire le rayon atomique.'
                    ],
                    [
                        'question' => 'Un élève compare deux éléments d’une même famille : l’un est en haut et l’autre en bas. Lequel devrait généralement avoir les électrons externes les plus éloignés du noyau ?',
                        'choices' => [
                            ['choice_text' => 'Celui qui est le plus bas dans le groupe', 'is_correct' => true],
                            ['choice_text' => 'Celui qui est le plus haut', 'is_correct' => false],
                            ['choice_text' => 'Les deux sont toujours identiques', 'is_correct' => false],
                            ['choice_text' => 'Cela dépend uniquement de leur symbole', 'is_correct' => false],
                        ],
                        'explanation' => 'L’élément placé plus bas possède davantage de couches électroniques. Sa couche externe est donc généralement plus éloignée du noyau.'
                    ],
                    [
                        'question' => 'Pourquoi les propriétés chimiques peuvent-elles changer progressivement de gauche à droite dans une période ?',
                        'choices' => [
                            ['choice_text' => 'Parce que le nombre d’électrons de valence et l’attraction du noyau évoluent progressivement', 'is_correct' => true],
                            ['choice_text' => 'Parce que tous les noyaux disparaissent', 'is_correct' => false],
                            ['choice_text' => 'Parce que les neutrons cessent d’exister', 'is_correct' => false],
                            ['choice_text' => 'Parce que les éléments changent de symbole', 'is_correct' => false],
                        ],
                        'explanation' => 'La structure électronique évolue le long d’une période, ce qui modifie notamment le nombre d’électrons de valence et la manière dont les atomes interagissent.'
                    ],
                    [
                        'question' => 'On compare le lithium et le fluor, tous deux dans la deuxième période. Quelle différence générale peut-on prévoir ?',
                        'choices' => [
                            ['choice_text' => 'Le fluor attire plus fortement les électrons et possède un rayon atomique plus petit', 'is_correct' => true],
                            ['choice_text' => 'Le lithium possède toujours plus de protons que le fluor', 'is_correct' => false],
                            ['choice_text' => 'Ils ont exactement les mêmes propriétés chimiques', 'is_correct' => false],
                            ['choice_text' => 'Le fluor est un métal alcalin', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans une même période, en allant vers la droite, l’attraction du noyau sur les électrons augmente généralement et le rayon atomique diminue. Le fluor se situe à droite du lithium.'
                    ],
                ],
            ],

            [
                'title' => 'Trouver les éléments et leurs symboles',
                'description' => 'Entraînez-vous à reconnaître les noms, symboles, numéros atomiques et positions des éléments courants du tableau périodique.',
                'questions' => [
                    [
                        'question' => 'Quel est le symbole chimique du fer ?',
                        'choices' => [
                            ['choice_text' => Fe', 'is_correct' => true],
                            ['choice_text' => F', 'is_correct' => false],
                            ['choice_text' => Fr', 'is_correct' => false],
                            ['choice_text' => Ir', 'is_correct' => false],
                        ],
                        'explanation' => 'Le symbole Fe désigne le fer. Le symbole vient du nom latin ferrum.'
                    ],
                    [
                        'question' => 'Quel élément correspond au symbole Cu ?',
                        'choices' => [
                            ['choice_text' => Cuivre', 'is_correct' => true],
                            ['choice_text' => Carbone', 'is_correct' => false],
                            ['choice_text' => Calcium', 'is_correct' => false],
                            ['choice_text' => Cobalt', 'is_correct' => false],
                        ],
                        'explanation' => 'Cu est le symbole chimique du cuivre.'
                    ],
                    [
                        'question' => 'Quel est le numéro atomique du carbone ?',
                        'choices' => [
                            ['choice_text' => 6', 'is_correct' => true],
                            ['choice_text' => 12', 'is_correct' => false],
                            ['choice_text' => 8', 'is_correct' => false],
                            ['choice_text' => 14', 'is_correct' => false],
                        ],
                        'explanation' => 'Le carbone possède 6 protons, donc son numéro atomique est 6.'
                    ],
                    [
                        'question' => 'Quel élément possède le symbole K ?',
                        'choices' => [
                            ['choice_text' => Potassium', 'is_correct' => true],
                            ['choice_text' => Krypton', 'is_correct' => false],
                            ['choice_text' => Calcium', 'is_correct' => false],
                            ['choice_text' => Carbone', 'is_correct' => false],
                        ],
                        'explanation' => 'Le symbole K correspond au potassium. Krypton a pour symbole Kr et calcium Ca.'
                    ],
                    [
                        'question' => 'Un étudiant recherche un élément ayant 17 protons. Lequel doit-il choisir ?',
                        'choices' => [
                            ['choice_text' => Chlore', 'is_correct' => true],
                            ['choice_text' => Soufre', 'is_correct' => false],
                            ['choice_text' => Argon', 'is_correct' => false],
                            ['choice_text' => Sodium', 'is_correct' => false],
                        ],
                        'explanation' => 'Le chlore a le numéro atomique 17, ce qui signifie qu’un atome de chlore possède 17 protons.'
                    ],
                    [
                        'question' => 'Un laboratoire utilise beaucoup l’élément Al dans la fabrication de matériaux légers. Quel est son nom ?',
                        'choices' => [
                            ['choice_text' => Aluminium', 'is_correct' => true],
                            ['choice_text' => Argent', 'is_correct' => false],
                            ['choice_text' => Aluminium-vert', 'is_correct' => false],
                            ['choice_text' => Azote', 'is_correct' => false],
                        ],
                        'explanation' => 'Le symbole Al correspond à l’aluminium, un métal léger largement utilisé dans les matériaux et emballages.'
                    ],
                    [
                        'question' => 'Quel couple nom-symbole est correct ?',
                        'choices' => [
                            ['choice_text' => Oxygène — O', 'is_correct' => true],
                            ['choice_text' => Oxygène — Ox', 'is_correct' => false],
                            ['choice_text' => Azote — A', 'is_correct' => false],
                            ['choice_text' => Chlore — C', 'is_correct' => false],
                        ],
                        'explanation' => 'L’oxygène a pour symbole O. Les symboles chimiques ne sont pas toujours formés des premières lettres françaises du nom.'
                    ],
                    [
                        'question' => 'Une personne cherche un métal dont le symbole est Ag. Quel élément trouve-t-elle ?',
                        'choices' => [
                            ['choice_text' => Argent', 'is_correct' => true],
                            ['choice_text' => Argon', 'is_correct' => false],
                            ['choice_text' => Aluminium', 'is_correct' => false],
                            ['choice_text' => Magnésium', 'is_correct' => false],
                        ],
                        'explanation' => 'Ag est le symbole de l’argent, dérivé de son nom latin argentum.'
                    ],
                    [
                        'question' => 'Pourquoi certains symboles chimiques comme Na, K ou Fe ne ressemblent-ils pas exactement au nom français de l’élément ?',
                        'choices' => [
                            ['choice_text' => 'Certains symboles proviennent de noms anciens ou latins', 'is_correct' => true],
                            ['choice_text' => 'Les symboles sont choisis au hasard chaque année', 'is_correct' => false],
                            ['choice_text' => 'Les éléments n’ont jamais eu de nom', 'is_correct' => false],
                            ['choice_text' => 'Les symboles représentent uniquement leur masse', 'is_correct' => false],
                        ],
                        'explanation' => 'Plusieurs symboles historiques viennent du latin ou d’anciens noms. C’est le cas notamment de Na pour le sodium, K pour le potassium et Fe pour le fer.'
                    ],
                    [
                        'question' => 'Un étudiant trouve un élément de numéro atomique 10. Quelle combinaison est correcte ?',
                        'choices' => [
                            ['choice_text' => Néon, symbole Ne', 'is_correct' => true],
                            ['choice_text' => Sodium, symbole Na', 'is_correct' => false],
                            ['choice_text' => Fluor, symbole F', 'is_correct' => false],
                            ['choice_text' => Magnésium, symbole Mg', 'is_correct' => false],
                        ],
                        'explanation' => 'Le numéro atomique 10 correspond au néon, dont le symbole est Ne.'
                    ],
                ],
            ],

            [
                'title' => 'Lire le tableau pour résoudre des problèmes',
                'description' => 'Utilisez plusieurs informations du tableau périodique dans de petites situations de raisonnement et d’application.',
                'questions' => [
                    [
                        'question' => 'Un atome possède 12 protons. Quel élément du tableau périodique correspond à cet atome ?',
                        'choices' => [
                            ['choice_text' => Magnésium', 'is_correct' => true],
                            ['choice_text' => Sodium', 'is_correct' => false],
                            ['choice_text' => Aluminium', 'is_correct' => false],
                            ['choice_text' => Carbone', 'is_correct' => false],
                        ],
                        'explanation' => 'Le magnésium possède le numéro atomique 12. Un atome ayant 12 protons est donc du magnésium.'
                    ],
                    [
                        'question' => 'Un élément se trouve dans le groupe 18. Quelle propriété générale peut-on attendre ?',
                        'choices' => [
                            ['choice_text' => 'Il appartient à la famille des gaz nobles et est généralement peu réactif', 'is_correct' => true],
                            ['choice_text' => 'Il possède toujours un électron de valence', 'is_correct' => false],
                            ['choice_text' => 'Il est forcément un métal alcalin', 'is_correct' => false],
                            ['choice_text' => 'Il doit toujours former un ion +2', 'is_correct' => false],
                        ],
                        'explanation' => 'Le groupe 18 correspond aux gaz nobles. Leur couche externe est particulièrement stable, ce qui explique leur faible réactivité.'
                    ],
                    [
                        'question' => 'Un élément est situé dans le groupe 1 et la période 3. De quel élément s’agit-il ?',
                        'choices' => [
                            ['choice_text' => Sodium', 'is_correct' => true],
                            ['choice_text' => Lithium', 'is_correct' => false],
                            ['choice_text' => Potassium', 'is_correct' => false],
                            ['choice_text' => Magnésium', 'is_correct' => false],
                        ],
                        'explanation' => 'Le groupe 1 contient les métaux alcalins. Dans la troisième période, l’élément de ce groupe est le sodium.'
                    ],
                    [
                        'question' => 'Un élément se trouve dans la période 2 et le groupe 17. Quel élément correspond à cette position ?',
                        'choices' => [
                            ['choice_text' => Fluor', 'is_correct' => true],
                            ['choice_text' => Chlore', 'is_correct' => false],
                            ['choice_text' => Oxygène', 'is_correct' => false],
                            ['choice_text' => Néon', 'is_correct' => false],
                        ],
                        'explanation' => 'Le fluor se trouve dans la deuxième période et le groupe 17. Le chlore est dans la troisième période, également au groupe 17.'
                    ],
                    [
                        'question' => 'Un élément possède 7 électrons de valence dans le modèle simplifié. Dans quelle famille peut-il se trouver ?',
                        'choices' => [
                            ['choice_text' => 'Les halogènes', 'is_correct' => true],
                            ['choice_text' => 'Les gaz nobles', 'is_correct' => false],
                            ['choice_text' => 'Les métaux alcalins', 'is_correct' => false],
                            ['choice_text' => 'Les alcalino-terreux', 'is_correct' => false],
                        ],
                        'explanation' => 'Les éléments du groupe 17, les halogènes, possèdent généralement 7 électrons de valence.'
                    ],
                    [
                        'question' => 'Un atome neutre possède 19 électrons. À quel élément correspond-il ?',
                        'choices' => [
                            ['choice_text' => Potassium', 'is_correct' => true],
                            ['choice_text' => Calcium', 'is_correct' => false],
                            ['choice_text' => Argon', 'is_correct' => false],
                            ['choice_text' => Sodium', 'is_correct' => false],
                        ],
                        'explanation' => 'Un atome neutre possède autant d’électrons que de protons. Le numéro atomique 19 correspond au potassium.'
                    ],
                    [
                        'question' => 'Une entreprise veut choisir entre le sodium et le chlore pour étudier un élément qui a tendance à former un ion négatif. Lequel correspond le mieux ?',
                        'choices' => [
                            ['choice_text' => Chlore', 'is_correct' => true],
                            ['choice_text' => Sodium', 'is_correct' => false],
                            ['choice_text' => Les deux ont exactement la même tendance', 'is_correct' => false],
                            ['choice_text' => Aucun des deux', 'is_correct' => false],
                        ],
                        'explanation' => 'Le chlore, situé dans le groupe 17, a tendance à gagner un électron et à former Cl⁻. Le sodium tend plutôt à perdre un électron pour former Na⁺.'
                    ],
                    [
                        'question' => 'Deux éléments sont dans la même colonne, mais pas dans la même ligne. Que peut-on raisonnablement penser ?',
                        'choices' => [
                            ['choice_text' => 'Ils ont probablement des propriétés chimiques similaires mais pas identiques', 'is_correct' => true],
                            ['choice_text' => 'Ils sont exactement le même élément', 'is_correct' => false],
                            ['choice_text' => 'Ils ont forcément le même nombre de protons', 'is_correct' => false],
                            ['choice_text' => 'Ils ont forcément la même masse', 'is_correct' => false],
                        ],
                        'explanation' => 'Une même colonne signifie un même groupe, ce qui indique souvent des comportements chimiques apparentés. Les éléments restent néanmoins différents.'
                    ],
                    [
                        'question' => 'Un élève cherche un élément situé à gauche du tableau, possédant un seul électron de valence et formant souvent un ion positif +1. Quelle famille devrait-il regarder ?',
                        'choices' => [
                            ['choice_text' => 'Les métaux alcalins', 'is_correct' => true],
                            ['choice_text' => 'Les halogènes', 'is_correct' => false],
                            ['choice_text' => 'Les gaz nobles', 'is_correct' => false],
                            ['choice_text' => 'Les chalcogènes', 'is_correct' => false],
                        ],
                        'explanation' => 'Les métaux alcalins du groupe 1 possèdent généralement un électron de valence et forment facilement des ions +1 en le perdant.'
                    ],
                    [
                        'question' => 'On vous donne les éléments Li, Na et K. Un élève affirme que Li doit avoir le plus grand rayon atomique parce qu’il est placé en haut du groupe. Quelle correction faut-il faire ?',
                        'choices' => [
                            ['choice_text' => 'Le rayon atomique augmente généralement vers le bas du groupe, donc K est plus grand', 'is_correct' => true],
                            ['choice_text' => 'Le rayon diminue toujours vers le bas, donc Li est le plus grand', 'is_correct' => false],
                            ['choice_text' => 'Les trois rayons sont exactement identiques', 'is_correct' => false],
                            ['choice_text' => 'Le rayon dépend seulement du symbole chimique', 'is_correct' => false],
                        ],
                        'explanation' => 'En descendant dans un groupe, de nouvelles couches électroniques sont ajoutées. Le rayon atomique augmente généralement de Li vers Na puis K.'
                    ],
                ],
            ],

            [
                'title' => 'Révision générale du tableau périodique',
                'description' => 'Révisez les notions essentielles du tableau périodique à travers des questions mêlant position, familles, symboles et propriétés.',
                'questions' => [
                    [
                        'question' => 'Que représente une colonne verticale du tableau périodique ?',
                        'choices' => [
                            ['choice_text' => 'Un groupe ou une famille d’éléments', 'is_correct' => true],
                            ['choice_text' => 'Une période', 'is_correct' => false],
                            ['choice_text' => 'Une série de masses identiques', 'is_correct' => false],
                            ['choice_text' => 'Une seule couche électronique', 'is_correct' => false],
                        ],
                        'explanation' => 'Une colonne verticale correspond à un groupe. Les éléments d’un même groupe présentent souvent des propriétés chimiques similaires.'
                    ],
                    [
                        'question' => 'Quel élément possède le numéro atomique 8 ?',
                        'choices' => [
                            ['choice_text' => Oxygène', 'is_correct' => true],
                            ['choice_text' => Azote', 'is_correct' => false],
                            ['choice_text' => Carbone', 'is_correct' => false],
                            ['choice_text' => Fluor', 'is_correct' => false],
                        ],
                        'explanation' => 'L’oxygène possède 8 protons, donc son numéro atomique est 8.'
                    ],
                    [
                        'question' => 'Lequel de ces éléments appartient au groupe 18 ?',
                        'choices' => [
                            ['choice_text' => Argon', 'is_correct' => true],
                            ['choice_text' => Chlore', 'is_correct' => false],
                            ['choice_text' => Sodium', 'is_correct' => false],
                            ['choice_text' => Magnésium', 'is_correct' => false],
                        ],
                        'explanation' => 'L’argon est un gaz noble du groupe 18. Le chlore est dans le groupe 17, le sodium dans le groupe 1 et le magnésium dans le groupe 2.'
                    ],
                    [
                        'question' => 'Quel élément est placé dans le groupe 1 et possède donc généralement un seul électron de valence ?',
                        'choices' => [
                            ['choice_text' => Potassium', 'is_correct' => true],
                            ['choice_text' => Oxygène', 'is_correct' => false],
                            ['choice_text' => Chlore', 'is_correct' => false],
                            ['choice_text' => Néon', 'is_correct' => false],
                        ],
                        'explanation' => 'Le potassium appartient au groupe 1. Comme les autres métaux alcalins, il possède généralement un seul électron de valence.'
                    ],
                    [
                        'question' => 'Quel élément est un métal parmi les choix suivants ?',
                        'choices' => [
                            ['choice_text' => Aluminium', 'is_correct' => true],
                            ['choice_text' => Soufre', 'is_correct' => false],
                            ['choice_text' => Oxygène', 'is_correct' => false],
                            ['choice_text' => Chlore', 'is_correct' => false],
                        ],
                        'explanation' => 'L’aluminium est un métal. Le soufre, l’oxygène et le chlore sont des non-métaux.'
                    ],
                    [
                        'question' => 'Un élément situé dans le groupe 17 possède généralement combien d’électrons de valence ?',
                        'choices' => [
                            ['choice_text' => 7', 'is_correct' => true],
                            ['choice_text' => 1', 'is_correct' => false],
                            ['choice_text' => 2', 'is_correct' => false],
                            ['choice_text' => 8', 'is_correct' => false],
                        ],
                        'explanation' => 'Les halogènes du groupe 17 possèdent généralement sept électrons de valence dans le modèle simplifié.'
                    ],
                    [
                        'question' => 'Quelle tendance générale est correcte lorsqu’on descend dans un groupe ?',
                        'choices' => [
                            ['choice_text' => 'Le nombre de couches électroniques augmente généralement', 'is_correct' => true],
                            ['choice_text' => 'Le nombre de protons diminue toujours', 'is_correct' => false],
                            ['choice_text' => 'Tous les éléments deviennent des gaz', 'is_correct' => false],
                            ['choice_text' => 'La couche externe disparaît', 'is_correct' => false],
                        ],
                        'explanation' => 'Chaque nouvelle période ajoute généralement un niveau électronique occupé. En descendant dans un groupe, le nombre de couches augmente.'
                    ],
                    [
                        'question' => 'Pourquoi le tableau périodique est-il utile lorsqu’on étudie une réaction chimique ?',
                        'choices' => [
                            ['choice_text' => 'La position des éléments donne des indices sur leurs électrons externes et leur comportement chimique', 'is_correct' => true],
                            ['choice_text' => 'Il donne directement la quantité exacte de produit obtenue dans chaque réaction', 'is_correct' => false],
                            ['choice_text' => 'Il remplace toujours toutes les expériences de laboratoire', 'is_correct' => false],
                            ['choice_text' => 'Il indique automatiquement la vitesse de toutes les réactions', 'is_correct' => false],
                        ],
                        'explanation' => 'La position d’un élément dans le tableau permet notamment de comprendre sa structure électronique externe et d’anticiper certaines tendances de réactivité.'
                    ],
                    [
                        'question' => 'Un élève doit choisir entre un gaz noble et un métal alcalin pour trouver un élément très peu réactif. Quelle famille correspond à son besoin ?',
                        'choices' => [
                            ['choice_text' => 'Les gaz nobles', 'is_correct' => true],
                            ['choice_text' => 'Les métaux alcalins', 'is_correct' => false],
                            ['choice_text' => 'Les halogènes', 'is_correct' => false],
                            ['choice_text' => 'Les chalcogènes', 'is_correct' => false],
                        ],
                        'explanation' => 'Les gaz nobles possèdent une couche électronique externe stable et sont généralement beaucoup moins réactifs que les métaux alcalins.'
                    ],
                    [
                        'question' => 'Un étudiant compare le sodium Na et le chlore Cl. Lequel des deux éléments est le plus susceptible de perdre un électron facilement ?',
                        'choices' => [
                            ['choice_text' => Sodium', 'is_correct' => true],
                            ['choice_text' => Chlore', 'is_correct' => false],
                            ['choice_text' => Ils ont toujours exactement la même tendance', 'is_correct' => false],
                            ['choice_text' => Aucun des deux', 'is_correct' => false],
                        ],
                        'explanation' => 'Le sodium est un métal alcalin avec un seul électron de valence, qu’il peut perdre facilement pour former Na⁺. Le chlore a plutôt tendance à gagner un électron.'
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