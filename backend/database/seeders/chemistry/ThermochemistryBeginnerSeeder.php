<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class ThermochemistryBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'thermochemistry')->firstOrFail();

        $quizzes = [
            [
                'title' => 'Les bases de la thermochimie',
                'description' => 'Découvrez la différence entre chaleur, température et énergie thermique et apprenez à lire des situations simples liées aux échanges d’énergie.',
                'questions' => [
                    [
                        'question' => 'La thermochimie étudie principalement les échanges de chaleur associés à :',
                        'choices' => [
                            ['choice_text' => 'Des réactions chimiques et des changements physiques', 'is_correct' => true],
                            ['choice_text' => 'La couleur des éléments uniquement', 'is_correct' => false],
                            ['choice_text' => 'La masse des électrons uniquement', 'is_correct' => false],
                            ['choice_text' => 'La vitesse de déplacement des planètes', 'is_correct' => false],
                        ],
                        'explanation' => 'La thermochimie s’intéresse aux transferts d’énergie, notamment de chaleur, qui accompagnent les réactions chimiques et certains changements physiques.'
                    ],
                    [
                        'question' => 'Quelle grandeur indique à quel point un objet est chaud ou froid ?',
                        'choices' => [
                            ['choice_text' => 'La température', 'is_correct' => true],
                            ['choice_text' => 'La masse', 'is_correct' => false],
                            ['choice_text' => 'Le volume', 'is_correct' => false],
                            ['choice_text' => 'La quantité de matière', 'is_correct' => false],
                        ],
                        'explanation' => 'La température décrit l’état thermique d’un objet, c’est-à-dire son niveau de chaud ou de froid.'
                    ],
                    [
                        'question' => 'Lorsqu’une tasse de café chaud est laissée sur une table, dans quelle direction la chaleur se transfère-t-elle spontanément ?',
                        'choices' => [
                            ['choice_text' => 'Du café chaud vers l’environnement plus froid', 'is_correct' => true],
                            ['choice_text' => 'De l’environnement froid vers le café sans apport extérieur', 'is_correct' => false],
                            ['choice_text' => 'Dans aucune direction', 'is_correct' => false],
                            ['choice_text' => 'Uniquement vers le fond de la tasse', 'is_correct' => false],
                        ],
                        'explanation' => 'La chaleur se transfère spontanément d’une région plus chaude vers une région plus froide jusqu’à ce que les températures se rapprochent.'
                    ],
                    [
                        'question' => 'Une cuillère en métal devient chaude après être restée dans une soupe chaude. Que s’est-il principalement passé ?',
                        'choices' => [
                            ['choice_text' => 'De l’énergie thermique a été transférée de la soupe vers la cuillère', 'is_correct' => true],
                            ['choice_text' => 'La cuillère a produit de nouvelles particules', 'is_correct' => false],
                            ['choice_text' => 'La soupe a perdu toute son énergie', 'is_correct' => false],
                            ['choice_text' => 'Le métal a changé d’élément chimique', 'is_correct' => false],
                        ],
                        'explanation' => 'La soupe, plus chaude, transfère de l’énergie thermique à la cuillère. La température de la cuillère augmente alors.'
                    ],
                    [
                        'question' => 'Quelle unité est couramment utilisée pour exprimer une variation de température dans un problème de thermochimie ?',
                        'choices' => [
                            ['choice_text' => 'Le degré Celsius', 'is_correct' => true],
                            ['choice_text' => 'Le gramme', 'is_correct' => false],
                            ['choice_text' => 'Le litre', 'is_correct' => false],
                            ['choice_text' => 'La mole uniquement', 'is_correct' => false],
                        ],
                        'explanation' => 'La température peut être exprimée en degrés Celsius ou en kelvins. Le gramme et le litre mesurent respectivement la masse et le volume.'
                    ],
                    [
                        'question' => 'Un étudiant confond chaleur et température. Quelle phrase l’aiderait le mieux ?',
                        'choices' => [
                            ['choice_text' => 'La température décrit l’état thermique, tandis que la chaleur correspond à une énergie transférée', 'is_correct' => true],
                            ['choice_text' => 'La chaleur et la température sont exactement la même grandeur', 'is_correct' => false],
                            ['choice_text' => 'La température est toujours une forme de masse', 'is_correct' => false],
                            ['choice_text' => 'La chaleur ne peut jamais passer d’un objet à un autre', 'is_correct' => false],
                        ],
                        'explanation' => 'La température décrit l’état thermique d’un système. La chaleur désigne un transfert d’énergie provoqué par une différence de température.'
                    ],
                    [
                        'question' => 'Deux morceaux de métal sont à la même température. Lequel possède forcément le plus d’énergie thermique ?',
                        'choices' => [
                            ['choice_text' => 'On ne peut pas le déterminer avec la température seule', 'is_correct' => true],
                            ['choice_text' => 'Toujours le plus petit morceau', 'is_correct' => false],
                            ['choice_text' => 'Toujours le morceau le plus brillant', 'is_correct' => false],
                            ['choice_text' => 'Toujours celui qui est le plus froid', 'is_correct' => false],
                        ],
                        'explanation' => 'L’énergie thermique dépend notamment de la quantité de matière et de la température. Deux objets à la même température peuvent donc avoir des énergies thermiques différentes.'
                    ],
                    [
                        'question' => 'Pourquoi une grande casserole d’eau chaude peut-elle contenir davantage d’énergie thermique qu’une petite tasse à la même température ?',
                        'choices' => [
                            ['choice_text' => 'Elle contient beaucoup plus de matière à la même température', 'is_correct' => true],
                            ['choice_text' => 'Sa température est forcément plus élevée', 'is_correct' => false],
                            ['choice_text' => 'L’eau dans une grande casserole change de nature', 'is_correct' => false],
                            ['choice_text' => 'Le récipient crée de l’énergie chimique', 'is_correct' => false],
                        ],
                        'explanation' => 'À température identique, une plus grande quantité d’eau contient davantage de particules et peut donc stocker davantage d’énergie thermique.'
                    ],
                    [
                        'question' => 'Un glaçon posé dans une boisson chaude fond. Quelle conclusion est la plus raisonnable ?',
                        'choices' => [
                            ['choice_text' => 'La boisson a transféré de l’énergie au glaçon', 'is_correct' => true],
                            ['choice_text' => 'Le glaçon a transféré de la chaleur à la boisson', 'is_correct' => false],
                            ['choice_text' => 'Le glaçon a créé de nouvelles molécules d’eau', 'is_correct' => false],
                            ['choice_text' => 'La température n’intervient pas dans le phénomène', 'is_correct' => false],
                        ],
                        'explanation' => 'La boisson est plus chaude que le glaçon. L’énergie thermique passe donc de la boisson vers le glaçon et favorise sa fusion.'
                    ],
                    [
                        'question' => 'Deux blocs de cuivre sont à des températures différentes : le premier est à 80 °C et le second à 20 °C. Que se passe-t-il si on les met en contact ?',
                        'choices' => [
                            ['choice_text' => 'La chaleur se transfère du bloc à 80 °C vers celui à 20 °C', 'is_correct' => true],
                            ['choice_text' => 'La chaleur se transfère du bloc froid vers le bloc chaud', 'is_correct' => false],
                            ['choice_text' => 'Aucun échange n’est possible puisque les deux blocs sont en cuivre', 'is_correct' => false],
                            ['choice_text' => 'Les deux blocs changent automatiquement de masse', 'is_correct' => false],
                        ],
                        'explanation' => 'Lorsqu’ils sont mis en contact, l’énergie thermique passe spontanément du corps le plus chaud vers le corps le plus froid jusqu’à l’équilibre thermique.'
                    ],
                ],
            ],

            [
                'title' => 'Réactions exothermiques et endothermiques',
                'description' => 'Apprenez à distinguer les réactions qui libèrent de l’énergie sous forme de chaleur de celles qui en absorbent.',
                'questions' => [
                    [
                        'question' => 'Une réaction exothermique est une réaction qui :',
                        'choices' => [
                            ['choice_text' => 'Libère de l’énergie thermique vers le milieu extérieur', 'is_correct' => true],
                            ['choice_text' => 'Absorbe toujours de la lumière sans échange thermique', 'is_correct' => false],
                            ['choice_text' => 'Ne provoque aucun transfert d’énergie', 'is_correct' => false],
                            ['choice_text' => 'Transforme toute la matière en gaz', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans une réaction exothermique, le système libère de l’énergie vers son environnement, souvent sous forme de chaleur.'
                    ],
                    [
                        'question' => 'Une réaction endothermique :',
                        'choices' => [
                            ['choice_text' => 'Absorbe de l’énergie de son environnement', 'is_correct' => true],
                            ['choice_text' => 'Libère toujours plus de chaleur qu’elle n’en reçoit', 'is_correct' => false],
                            ['choice_text' => 'Ne peut avoir lieu qu’à 100 °C', 'is_correct' => false],
                            ['choice_text' => 'Est forcément une réaction explosive', 'is_correct' => false],
                        ],
                        'explanation' => 'Une transformation endothermique nécessite un apport d’énergie provenant de l’environnement ou d’une autre source.'
                    ],
                    [
                        'question' => 'Un sachet chauffant devient chaud lorsqu’on l’active. Quel type de processus est cohérent avec cette observation ?',
                        'choices' => [
                            ['choice_text' => 'Un processus exothermique', 'is_correct' => true],
                            ['choice_text' => 'Un processus endothermique uniquement', 'is_correct' => false],
                            ['choice_text' => 'Un processus sans transfert d’énergie', 'is_correct' => false],
                            ['choice_text' => 'Une transformation nucléaire obligatoire', 'is_correct' => false],
                        ],
                        'explanation' => 'Le sachet chauffe l’environnement en libérant de l’énergie thermique. Cela correspond à un processus exothermique.'
                    ],
                    [
                        'question' => 'Un mélange devient nettement plus froid lorsqu’une réaction se produit. Que peut-on soupçonner ?',
                        'choices' => [
                            ['choice_text' => 'La réaction absorbe probablement de l’énergie thermique de son environnement', 'is_correct' => true],
                            ['choice_text' => 'La réaction est forcément exothermique', 'is_correct' => false],
                            ['choice_text' => 'Aucune énergie n’est échangée', 'is_correct' => false],
                            ['choice_text' => 'Les molécules ont cessé de bouger', 'is_correct' => false],
                        ],
                        'explanation' => 'Si le mélange refroidit parce que le système prend de l’énergie à son environnement, le processus est endothermique.'
                    ],
                    [
                        'question' => 'La combustion d’un morceau de bois chauffe l’air autour du feu. La combustion est donc généralement :',
                        'choices' => [
                            ['choice_text' => 'Exothermique', 'is_correct' => true],
                            ['choice_text' => 'Endothermique', 'is_correct' => false],
                            ['choice_text' => 'Sans échange d’énergie', 'is_correct' => false],
                            ['choice_text' => 'Uniquement physique', 'is_correct' => false],
                        ],
                        'explanation' => 'La combustion libère de l’énergie sous forme de chaleur et de lumière. Elle est donc exothermique.'
                    ],
                    [
                        'question' => 'Lorsqu’un processus est endothermique, l’environnement du système a tendance à :',
                        'choices' => [
                            ['choice_text' => 'Se refroidir si aucune autre source ne compense l’énergie absorbée', 'is_correct' => true],
                            ['choice_text' => 'Toujours se réchauffer fortement', 'is_correct' => false],
                            ['choice_text' => 'Garder exactement la même température dans tous les cas', 'is_correct' => false],
                            ['choice_text' => 'Devenir automatiquement solide', 'is_correct' => false],
                        ],
                        'explanation' => 'Le système absorbe de l’énergie depuis son environnement. Dans une expérience simple, cette perte d’énergie peut se traduire par un refroidissement du milieu.'
                    ],
                    [
                        'question' => 'Un élève dit : « Si une réaction produit de la chaleur, les produits doivent contenir plus d’énergie que les réactifs. » Que peut-on lui répondre ?',
                        'choices' => [
                            ['choice_text' => 'Pour une réaction exothermique, les produits sont généralement à un niveau d’énergie plus bas que les réactifs', 'is_correct' => true],
                            ['choice_text' => 'Les produits ont toujours plus d’énergie dans une réaction exothermique', 'is_correct' => false],
                            ['choice_text' => 'La réaction n’a pas de relation avec l’énergie', 'is_correct' => false],
                            ['choice_text' => 'Les réactifs disparaissent sans transformation énergétique', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans une réaction exothermique, une partie de l’énergie du système est libérée vers l’extérieur. Les produits ont donc généralement une énergie chimique plus faible que les réactifs.'
                    ],
                    [
                        'question' => 'On place un récipient contenant une réaction sur une table. Le récipient chauffe sans chauffage extérieur. Quelle explication est la plus simple ?',
                        'choices' => [
                            ['choice_text' => 'La réaction libère de l’énergie thermique vers le récipient', 'is_correct' => true],
                            ['choice_text' => 'Le récipient crée spontanément de la matière', 'is_correct' => false],
                            ['choice_text' => 'La réaction absorbe forcément toute la chaleur de la pièce', 'is_correct' => false],
                            ['choice_text' => 'La température du récipient ne peut pas changer', 'is_correct' => false],
                        ],
                        'explanation' => 'Une réaction exothermique peut chauffer le récipient simplement parce que de l’énergie thermique est transférée vers lui.'
                    ],
                    [
                        'question' => 'Quel exemple est le plus clairement endothermique ?',
                        'choices' => [
                            ['choice_text' => 'La fusion d’un glaçon qui absorbe de l’énergie de la boisson', 'is_correct' => true],
                            ['choice_text' => 'La combustion du bois', 'is_correct' => false],
                            ['choice_text' => 'Le fonctionnement d’un sachet chauffant', 'is_correct' => false],
                            ['choice_text' => 'Une flamme qui chauffe une casserole', 'is_correct' => false],
                        ],
                        'explanation' => 'La fusion nécessite un apport d’énergie. Le glaçon absorbe de l’énergie thermique de la boisson pour changer d’état.'
                    ],
                    [
                        'question' => 'Une expérience libère de la chaleur mais absorbe aussi une petite quantité d’énergie sous une autre forme. Peut-on tout de même la qualifier d’exothermique ?',
                        'choices' => [
                            ['choice_text' => 'Oui, si le bilan énergétique net correspond à une libération de chaleur vers l’extérieur', 'is_correct' => true],
                            ['choice_text' => 'Non, une réaction ne peut échanger qu’une seule forme d’énergie', 'is_correct' => false],
                            ['choice_text' => 'Oui, parce que toute réaction est automatiquement exothermique', 'is_correct' => false],
                            ['choice_text' => 'Non, car une réaction exothermique ne produit jamais d’énergie', 'is_correct' => false],
                        ],
                        'explanation' => 'La classification dépend du bilan énergétique global. Si le système libère de la chaleur vers l’environnement, le processus est classé exothermique.'
                    ],
                ],
            ],

            [
                'title' => 'Calculer une chaleur avec Q = mcΔT',
                'description' => 'Utilisez la relation Q = mcΔT dans des calculs courts pour relier masse, capacité thermique et variation de température.',
                'questions' => [
                    [
                        'question' => 'Dans la relation Q = mcΔT, que représente m ?',
                        'choices' => [
                            ['choice_text' => 'La masse de la substance', 'is_correct' => true],
                            ['choice_text' => 'La température finale', 'is_correct' => false],
                            ['choice_text' => 'La capacité thermique massique', 'is_correct' => false],
                            ['choice_text' => 'La vitesse de la réaction', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans Q = mcΔT, m représente la masse de la substance, c sa capacité thermique massique et ΔT la variation de température.'
                    ],
                    [
                        'question' => 'Dans Q = mcΔT, quelle grandeur représente c ?',
                        'choices' => [
                            ['choice_text' => 'La capacité thermique massique', 'is_correct' => true],
                            ['choice_text' => 'La concentration', 'is_correct' => false],
                            ['choice_text' => 'La charge électrique', 'is_correct' => false],
                            ['choice_text' => 'La quantité de matière', 'is_correct' => false],
                        ],
                        'explanation' => 'c indique la capacité thermique massique : elle mesure la quantité d’énergie nécessaire pour modifier la température d’une masse donnée de substance.'
                    ],
                    [
                        'question' => 'Une masse de 100 g d’eau est chauffée de 20 °C à 30 °C. Quelle est la variation de température ?',
                        'choices' => [
                            ['choice_text' => '10 °C', 'is_correct' => true],
                            ['choice_text' => '50 °C', 'is_correct' => false],
                            ['choice_text' => '30 °C', 'is_correct' => false],
                            ['choice_text' => '0 °C', 'is_correct' => false],
                        ],
                        'explanation' => 'ΔT = Tfinale - Tinitiale = 30 - 20 = 10 °C.'
                    ],
                    [
                        'question' => 'On chauffe 100 g d’eau de 20 °C à 30 °C. On prend c = 4,18 J/(g·°C). Quelle chaleur est nécessaire ?',
                        'choices' => [
                            ['choice_text' => '4 180 J', 'is_correct' => true],
                            ['choice_text' => '418 J', 'is_correct' => false],
                            ['choice_text' => '41,8 J', 'is_correct' => false],
                            ['choice_text' => '8 360 J', 'is_correct' => false],
                        ],
                        'explanation' => 'Q = mcΔT = 100 × 4,18 × 10 = 4 180 J.'
                    ],
                    [
                        'question' => 'Un objet de 50 g possède une capacité thermique massique de 2 J/(g·°C) et se réchauffe de 5 °C. Quelle énergie reçoit-il ?',
                        'choices' => [
                            ['choice_text' => '500 J', 'is_correct' => true],
                            ['choice_text' => '100 J', 'is_correct' => false],
                            ['choice_text' => '250 J', 'is_correct' => false],
                            ['choice_text' => '20 J', 'is_correct' => false],
                        ],
                        'explanation' => 'Q = 50 × 2 × 5 = 500 J.'
                    ],
                    [
                        'question' => 'Deux échantillons de même masse reçoivent la même quantité de chaleur. Celui qui possède la plus grande capacité thermique massique aura généralement :',
                        'choices' => [
                            ['choice_text' => 'Une plus petite variation de température', 'is_correct' => true],
                            ['choice_text' => 'Une plus grande variation de température', 'is_correct' => false],
                            ['choice_text' => 'Toujours exactement la même température finale', 'is_correct' => false],
                            ['choice_text' => 'Une masse plus importante', 'is_correct' => false],
                        ],
                        'explanation' => 'À masse et chaleur reçue identiques, un matériau ayant une capacité thermique massique plus élevée nécessite davantage d’énergie pour chauffer d’un degré. Sa variation de température est donc plus faible.'
                    ],
                    [
                        'question' => 'Une casserole reçoit 2 000 J et sa température augmente de 10 °C. Si sa masse reste la même, que se passerait-il avec 4 000 J dans les mêmes conditions ?',
                        'choices' => [
                            ['choice_text' => 'La variation de température serait approximativement deux fois plus grande', 'is_correct' => true],
                            ['choice_text' => 'La variation de température serait deux fois plus faible', 'is_correct' => false],
                            ['choice_text' => 'La température ne changerait pas', 'is_correct' => false],
                            ['choice_text' => 'La masse doublerait automatiquement', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans Q = mcΔT, si m et c restent constants, ΔT est proportionnelle à Q. Doubler Q double donc la variation de température.'
                    ],
                    [
                        'question' => 'Un étudiant utilise Q = mcT au lieu de Q = mcΔT. Quelle information a-t-il oubliée ?',
                        'choices' => [
                            ['choice_text' => 'La différence entre la température finale et initiale', 'is_correct' => true],
                            ['choice_text' => 'La masse de l’échantillon', 'is_correct' => false],
                            ['choice_text' => 'La capacité thermique massique', 'is_correct' => false],
                            ['choice_text' => 'L’unité de la chaleur', 'is_correct' => false],
                        ],
                        'explanation' => 'La relation utilise la variation de température ΔT, calculée par Tfinale - Tinitiale, et non une seule température.'
                    ],
                    [
                        'question' => 'Une masse de 200 g d’un matériau reçoit 1 000 J. Sa capacité thermique massique est de 2 J/(g·°C). Quelle est la variation de température ?',
                        'choices' => [
                            ['choice_text' => '2,5 °C', 'is_correct' => true],
                            ['choice_text' => '5 °C', 'is_correct' => false],
                            ['choice_text' => '10 °C', 'is_correct' => false],
                            ['choice_text' => '1 °C', 'is_correct' => false],
                        ],
                        'explanation' => 'ΔT = Q/(mc) = 1 000/(200 × 2) = 2,5 °C.'
                    ],
                    [
                        'question' => 'Une substance de 100 g reçoit 840 J et sa température augmente de 4 °C. Quelle est sa capacité thermique massique ?',
                        'choices' => [
                            ['choice_text' => '2,1 J/(g·°C)', 'is_correct' => true],
                            ['choice_text' => '0,021 J/(g·°C)', 'is_correct' => false],
                            ['choice_text' => '21 J/(g·°C)', 'is_correct' => false],
                            ['choice_text' => '210 J/(g·°C)', 'is_correct' => false],
                        ],
                        'explanation' => 'c = Q/(mΔT) = 840/(100 × 4) = 2,1 J/(g·°C).'
                    ],
                ],
            ],

            [
                'title' => 'Changements d’état et énergie',
                'description' => 'Comprenez les échanges d’énergie lors de la fusion, de la vaporisation, de la solidification et de la condensation.',
                'questions' => [
                    [
                        'question' => 'Pour faire fondre de la glace, faut-il généralement fournir ou retirer de l’énergie ?',
                        'choices' => [
                            ['choice_text' => 'Fournir de l’énergie', 'is_correct' => true],
                            ['choice_text' => 'Retirer de l’énergie', 'is_correct' => false],
                            ['choice_text' => 'Ni fournir ni retirer d’énergie', 'is_correct' => false],
                            ['choice_text' => 'Seulement ajouter de la masse', 'is_correct' => false],
                        ],
                        'explanation' => 'La fusion est un changement d’état qui nécessite de l’énergie pour modifier l’organisation des particules du solide.'
                    ],
                    [
                        'question' => 'Lors de la solidification de l’eau, l’eau liquide :',
                        'choices' => [
                            ['choice_text' => 'Libère de l’énergie vers son environnement', 'is_correct' => true],
                            ['choice_text' => 'Absorbe toujours de l’énergie', 'is_correct' => false],
                            ['choice_text' => 'Devient un autre élément', 'is_correct' => false],
                            ['choice_text' => 'Perd toutes ses molécules', 'is_correct' => false],
                        ],
                        'explanation' => 'La solidification est l’inverse de la fusion. Le système libère l’énergie associée au changement d’état vers l’environnement.'
                    ],
                    [
                        'question' => 'Pourquoi la vaporisation d’un liquide nécessite-t-elle de l’énergie ?',
                        'choices' => [
                            ['choice_text' => 'Les particules doivent acquérir assez d’énergie pour s’éloigner davantage', 'is_correct' => true],
                            ['choice_text' => 'Les molécules sont détruites', 'is_correct' => false],
                            ['choice_text' => 'Le liquide doit devenir un nouvel élément', 'is_correct' => false],
                            ['choice_text' => 'La masse du liquide doit devenir nulle', 'is_correct' => false],
                        ],
                        'explanation' => 'Pour passer du liquide au gaz, les particules doivent pouvoir se séparer beaucoup plus. Cela demande un apport d’énergie.'
                    ],
                    [
                        'question' => 'La vapeur d’eau se transforme en eau liquide sur une vitre froide. Quel échange d’énergie accompagne généralement cette condensation ?',
                        'choices' => [
                            ['choice_text' => 'De l’énergie est libérée', 'is_correct' => true],
                            ['choice_text' => 'De l’énergie doit toujours être absorbée', 'is_correct' => false],
                            ['choice_text' => 'Aucun échange d’énergie n’a lieu', 'is_correct' => false],
                            ['choice_text' => 'La masse devient automatiquement deux fois plus grande', 'is_correct' => false],
                        ],
                        'explanation' => 'La condensation est l’inverse de la vaporisation. Le passage vers un état plus lié libère l’énergie correspondante vers l’environnement.'
                    ],
                    [
                        'question' => 'Pendant l’ébullition d’une substance pure à pression constante, pourquoi la température peut-elle rester stable pendant un certain temps ?',
                        'choices' => [
                            ['choice_text' => 'L’énergie fournie sert principalement au changement d’état', 'is_correct' => true],
                            ['choice_text' => 'La substance cesse de recevoir de l’énergie', 'is_correct' => false],
                            ['choice_text' => 'Les molécules arrêtent complètement de bouger', 'is_correct' => false],
                            ['choice_text' => 'La masse disparaît', 'is_correct' => false],
                        ],
                        'explanation' => 'Pendant l’ébullition, l’énergie fournie sert à séparer davantage les particules et à réaliser le changement d’état, plutôt qu’à augmenter directement la température.'
                    ],
                    [
                        'question' => 'Quel changement d’état libère généralement de l’énergie vers l’environnement ?',
                        'choices' => [
                            ['choice_text' => 'La condensation', 'is_correct' => true],
                            ['choice_text' => 'La fusion', 'is_correct' => false],
                            ['choice_text' => 'La vaporisation', 'is_correct' => false],
                            ['choice_text' => 'La sublimation', 'is_correct' => false],
                        ],
                        'explanation' => 'La condensation fait passer un gaz à un liquide et s’accompagne généralement d’une libération d’énergie.'
                    ],
                    [
                        'question' => 'Une boisson très froide est laissée sur la table. De la vapeur d’eau de l’air se transforme en gouttes sur le verre. Pourquoi la surface reste-t-elle froide ?',
                        'choices' => [
                            ['choice_text' => 'Le verre froid peut recevoir de la chaleur de l’environnement tout en favorisant la condensation de la vapeur', 'is_correct' => true],
                            ['choice_text' => 'Les gouttes retirent toute la chaleur de l’air', 'is_correct' => false],
                            ['choice_text' => 'La condensation détruit l’énergie thermique', 'is_correct' => false],
                            ['choice_text' => 'Le verre produit du froid chimiquement', 'is_correct' => false],
                        ],
                        'explanation' => 'La bouteille reçoit progressivement de la chaleur de l’environnement. La vapeur qui se condense à sa surface libère également de l’énergie, mais cela ne signifie pas que le verre produit du froid.'
                    ],
                    [
                        'question' => 'Quel processus demande de l’énergie pour passer directement d’un solide à un gaz ?',
                        'choices' => [
                            ['choice_text' => 'La sublimation', 'is_correct' => true],
                            ['choice_text' => 'La condensation', 'is_correct' => false],
                            ['choice_text' => 'La solidification', 'is_correct' => false],
                            ['choice_text' => 'La liquéfaction', 'is_correct' => false],
                        ],
                        'explanation' => 'La sublimation est un passage direct du solide au gaz. Comme la vaporisation, elle nécessite un apport d’énergie.'
                    ],
                    [
                        'question' => 'Un étudiant pense que « si la température ne change pas pendant un changement d’état, aucune énergie n’est échangée ». Pourquoi est-ce faux ?',
                        'choices' => [
                            ['choice_text' => 'L’énergie peut être utilisée pour modifier l’organisation des particules sans augmenter leur température', 'is_correct' => true],
                            ['choice_text' => 'La température n’a jamais de rapport avec l’énergie', 'is_correct' => false],
                            ['choice_text' => 'Les particules cessent d’exister pendant le changement d’état', 'is_correct' => false],
                            ['choice_text' => 'Les changements d’état sont toujours sans énergie', 'is_correct' => false],
                        ],
                        'explanation' => 'Pendant un changement d’état, l’énergie transférée peut servir à modifier les interactions et l’organisation des particules plutôt qu’à augmenter leur température.'
                    ],
                    [
                        'question' => 'Un glaçon absorbe 100 J pour fondre. Dans quelle direction l’énergie a-t-elle été transférée ?',
                        'choices' => [
                            ['choice_text' => 'De l’environnement vers le glaçon', 'is_correct' => true],
                            ['choice_text' => 'Du glaçon vers l’environnement', 'is_correct' => false],
                            ['choice_text' => 'Du noyau vers les électrons', 'is_correct' => false],
                            ['choice_text' => 'Aucune énergie n’a été transférée', 'is_correct' => false],
                        ],
                        'explanation' => 'Le mot « absorbe » indique que le système reçoit de l’énergie. Ici, les 100 J viennent donc de l’environnement vers le glaçon.'
                    ],
                ],
            ],

            [
                'title' => 'Calorimétrie simple',
                'description' => 'Utilisez des situations de calorimétrie pour suivre les échanges de chaleur et relier les températures des objets mis en contact.',
                'questions' => [
                    [
                        'question' => 'À quoi sert principalement un calorimètre dans une expérience simple ?',
                        'choices' => [
                            ['choice_text' => 'À limiter les échanges de chaleur avec l’extérieur afin de mesurer un transfert d’énergie', 'is_correct' => true],
                            ['choice_text' => 'À mesurer uniquement la masse', 'is_correct' => false],
                            ['choice_text' => 'À produire de la chaleur gratuitement', 'is_correct' => false],
                            ['choice_text' => 'À transformer un liquide en gaz', 'is_correct' => false],
                        ],
                        'explanation' => 'Un calorimètre est conçu pour limiter les échanges de chaleur avec l’environnement afin d’étudier plus précisément les transferts d’énergie dans le système.'
                    ],
                    [
                        'question' => 'On met un objet chaud dans de l’eau froide. Avant l’équilibre thermique, que fait généralement l’objet chaud ?',
                        'choices' => [
                            ['choice_text' => 'Il cède de l’énergie thermique à l’eau', 'is_correct' => true],
                            ['choice_text' => 'Il reçoit toute la chaleur de l’eau', 'is_correct' => false],
                            ['choice_text' => 'Il ne peut pas changer de température', 'is_correct' => false],
                            ['choice_text' => 'Il transforme l’eau en un nouvel élément', 'is_correct' => false],
                        ],
                        'explanation' => 'La chaleur passe spontanément du corps chaud vers le corps froid jusqu’à ce que les températures se rapprochent.'
                    ],
                    [
                        'question' => 'À l’équilibre thermique, les deux objets en contact ont généralement :',
                        'choices' => [
                            ['choice_text' => 'La même température', 'is_correct' => true],
                            ['choice_text' => 'La même masse', 'is_correct' => false],
                            ['choice_text' => 'La même capacité thermique massique', 'is_correct' => false],
                            ['choice_text' => 'La même quantité de matière', 'is_correct' => false],
                        ],
                        'explanation' => 'À l’équilibre thermique, les températures des corps en contact sont devenues égales ou suffisamment proches pour qu’il n’y ait plus de transfert net de chaleur.'
                    ],
                    [
                        'question' => 'Un morceau de métal chaud à 80 °C est placé dans de l’eau à 20 °C. Dans quelle direction la chaleur se déplace-t-elle au début ?',
                        'choices' => [
                            ['choice_text' => 'Du métal vers l’eau', 'is_correct' => true],
                            ['choice_text' => 'De l’eau vers le métal', 'is_correct' => false],
                            ['choice_text' => 'Dans les deux directions avec le même transfert net', 'is_correct' => false],
                            ['choice_text' => 'Dans aucune direction', 'is_correct' => false],
                        ],
                        'explanation' => 'Le métal est à une température plus élevée. L’énergie thermique se transfère donc initialement du métal vers l’eau.'
                    ],
                    [
                        'question' => 'Dans un calorimètre idéalement isolé, si un objet perd 500 J de chaleur, que peut-on dire de l’autre partie du système ?',
                        'choices' => [
                            ['choice_text' => 'Elle reçoit environ 500 J', 'is_correct' => true],
                            ['choice_text' => 'Elle perd aussi 500 J obligatoirement', 'is_correct' => false],
                            ['choice_text' => 'Elle reçoit 0 J', 'is_correct' => false],
                            ['choice_text' => 'Elle reçoit toujours 1 000 J', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans un système isolé, l’énergie transférée d’une partie à l’autre se conserve. Une perte de 500 J pour une partie correspond donc à un gain d’environ 500 J pour l’autre.'
                    ],
                    [
                        'question' => 'Pourquoi un bain d’eau est-il souvent utilisé pour chauffer doucement un échantillon au laboratoire ?',
                        'choices' => [
                            ['choice_text' => 'L’eau permet de transférer la chaleur de manière relativement uniforme et contrôlée', 'is_correct' => true],
                            ['choice_text' => 'L’eau produit toujours une réaction chimique avec l’échantillon', 'is_correct' => false],
                            ['choice_text' => 'L’eau empêche toute montée de température', 'is_correct' => false],
                            ['choice_text' => 'L’eau détruit les molécules de l’échantillon', 'is_correct' => false],
                        ],
                        'explanation' => 'Un bain d’eau fournit un environnement chauffé de façon relativement uniforme et évite souvent un contact direct avec une flamme.'
                    ],
                    [
                        'question' => 'Un étudiant mesure 25 °C avant le mélange et 32 °C après. Que montre directement cette mesure ?',
                        'choices' => [
                            ['choice_text' => 'La température du mélange a augmenté de 7 °C', 'is_correct' => true],
                            ['choice_text' => 'Le mélange a reçu exactement 7 J', 'is_correct' => false],
                            ['choice_text' => 'La masse a augmenté de 7 g', 'is_correct' => false],
                            ['choice_text' => 'La réaction a libéré exactement 32 J', 'is_correct' => false],
                        ],
                        'explanation' => 'La variation de température est 32 - 25 = 7 °C. Pour connaître une quantité de chaleur, il faudrait également d’autres informations comme la masse et la capacité thermique.'
                    ],
                    [
                        'question' => 'On mélange 100 g d’eau chaude avec 100 g d’eau froide dans un récipient isolé. La température finale sera généralement :',
                        'choices' => [
                            ['choice_text' => 'Entre les deux températures initiales', 'is_correct' => true],
                            ['choice_text' => 'Toujours égale à la température de l’eau chaude', 'is_correct' => false],
                            ['choice_text' => 'Toujours égale à 0 °C', 'is_correct' => false],
                            ['choice_text' => 'Plus élevée que les deux températures initiales', 'is_correct' => false],
                        ],
                        'explanation' => 'La chaleur se transfère de l’eau chaude vers l’eau froide. Sans apport extérieur, la température finale se situe généralement entre les deux températures initiales.'
                    ],
                    [
                        'question' => 'Deux groupes réalisent la même expérience de calorimétrie, mais l’un laisse le calorimètre ouvert. Pourquoi son résultat peut-il être moins fiable ?',
                        'choices' => [
                            ['choice_text' => 'Davantage de chaleur peut être échangée avec l’environnement', 'is_correct' => true],
                            ['choice_text' => 'La masse des électrons change', 'is_correct' => false],
                            ['choice_text' => 'Le calorimètre crée de la matière', 'is_correct' => false],
                            ['choice_text' => 'La température devient impossible à mesurer', 'is_correct' => false],
                        ],
                        'explanation' => 'Une mauvaise isolation permet à la chaleur de sortir ou d’entrer depuis l’environnement, ce qui perturbe le bilan énergétique que l’on cherche à mesurer.'
                    ],
                    [
                        'question' => 'Un morceau de métal chaud est placé dans un calorimètre contenant de l’eau froide. Après quelques minutes, la température de l’eau augmente tandis que celle du métal diminue. Pourquoi ?',
                        'choices' => [
                            ['choice_text' => 'Le métal a cédé une partie de son énergie thermique à l’eau', 'is_correct' => true],
                            ['choice_text' => 'L’eau a détruit l’énergie du métal', 'is_correct' => false],
                            ['choice_text' => 'Le métal a créé de nouvelles molécules d’eau', 'is_correct' => false],
                            ['choice_text' => 'La température de l’eau augmente sans aucun transfert d’énergie', 'is_correct' => false],
                        ],
                        'explanation' => 'Le métal était initialement plus chaud que l’eau. Il a donc transféré de l’énergie thermique à l’eau, ce qui réchauffe l’eau et refroidit le métal.'
                    ],
                ],
            ],

            [
                'title' => 'Diagrammes énergétiques et enthalpie',
                'description' => 'Lisez des diagrammes énergétiques simples, comprenez ΔH et reliez la différence d’énergie entre réactifs et produits au caractère exothermique ou endothermique.',
                'questions' => [
                    [
                        'question' => 'Dans un diagramme énergétique simple, si les produits sont plus bas que les réactifs, la réaction est généralement :',
                        'choices' => [
                            ['choice_text' => 'Exothermique', 'is_correct' => true],
                            ['choice_text' => 'Endothermique', 'is_correct' => false],
                            ['choice_text' => 'Sans transfert d’énergie', 'is_correct' => false],
                            ['choice_text' => 'Impossible à interpréter', 'is_correct' => false],
                        ],
                        'explanation' => 'Si les produits sont à un niveau d’énergie plus faible que les réactifs, la différence est libérée vers l’extérieur. La réaction est exothermique.'
                    ],
                    [
                        'question' => 'Pour une réaction exothermique, le signe de ΔH est généralement :',
                        'choices' => [
                            ['choice_text' => 'Négatif', 'is_correct' => true],
                            ['choice_text' => 'Positif', 'is_correct' => false],
                            ['choice_text' => 'Toujours nul', 'is_correct' => false],
                            ['choice_text' => 'Impossible à définir', 'is_correct' => false],
                        ],
                        'explanation' => 'Une réaction exothermique libère de l’énergie. La variation d’enthalpie ΔH est donc négative.'
                    ],
                    [
                        'question' => 'Pour une réaction endothermique, les produits ont généralement :',
                        'choices' => [
                            ['choice_text' => 'Une énergie chimique plus élevée que les réactifs', 'is_correct' => true],
                            ['choice_text' => 'Une énergie toujours nulle', 'is_correct' => false],
                            ['choice_text' => 'Une énergie plus faible parce que de la chaleur est libérée', 'is_correct' => false],
                            ['choice_text' => 'La même énergie dans tous les cas', 'is_correct' => false],
                        ],
                        'explanation' => 'Une réaction endothermique absorbe de l’énergie. Les produits se trouvent donc à un niveau d’énergie chimique supérieur à celui des réactifs.'
                    ],
                    [
                        'question' => 'Une réaction possède ΔH = -50 kJ. Que signifie surtout ce signe ?',
                        'choices' => [
                            ['choice_text' => 'Le système libère 50 kJ selon la quantité de réaction considérée', 'is_correct' => true],
                            ['choice_text' => 'Le système absorbe 50 kJ', 'is_correct' => false],
                            ['choice_text' => 'La réaction refroidit toujours de 50 °C', 'is_correct' => false],
                            ['choice_text' => 'La masse diminue de 50 kg', 'is_correct' => false],
                        ],
                        'explanation' => 'Le signe négatif de ΔH indique une diminution d’enthalpie du système. L’énergie correspondante est libérée vers l’extérieur.'
                    ],
                    [
                        'question' => 'Une réaction possède ΔH = +25 kJ. Comment la classer ?',
                        'choices' => [
                            ['choice_text' => 'Endothermique', 'is_correct' => true],
                            ['choice_text' => 'Exothermique', 'is_correct' => false],
                            ['choice_text' => 'Sans échange thermique', 'is_correct' => false],
                            ['choice_text' => 'Forcément nucléaire', 'is_correct' => false],
                        ],
                        'explanation' => 'Un ΔH positif signifie que le système a gagné de l’enthalpie. Le processus est donc endothermique.'
                    ],
                    [
                        'question' => 'Sur un diagramme énergétique, les réactifs sont à 100 kJ et les produits à 70 kJ. Quelle est la variation d’enthalpie ΔH ?',
                        'choices' => [
                            ['choice_text' => '-30 kJ', 'is_correct' => true],
                            ['choice_text' => '+30 kJ', 'is_correct' => false],
                            ['choice_text' => '-170 kJ', 'is_correct' => false],
                            ['choice_text' => '+170 kJ', 'is_correct' => false],
                        ],
                        'explanation' => 'ΔH = énergie des produits - énergie des réactifs = 70 - 100 = -30 kJ. La réaction est donc exothermique.'
                    ],
                    [
                        'question' => 'Un diagramme montre des réactifs à 40 kJ et des produits à 90 kJ. Quelle conclusion est correcte ?',
                        'choices' => [
                            ['choice_text' => 'ΔH = +50 kJ et la réaction est endothermique', 'is_correct' => true],
                            ['choice_text' => 'ΔH = -50 kJ et la réaction est exothermique', 'is_correct' => false],
                            ['choice_text' => 'ΔH = +130 kJ et la réaction est exothermique', 'is_correct' => false],
                            ['choice_text' => 'ΔH = 0 kJ', 'is_correct' => false],
                        ],
                        'explanation' => 'ΔH = 90 - 40 = +50 kJ. Les produits ont une enthalpie plus élevée, donc la réaction absorbe de l’énergie.'
                    ],
                    [
                        'question' => 'Un élève pense que le sommet d’un diagramme énergétique représente forcément l’énergie des produits. Que représente-t-il souvent ?',
                        'choices' => [
                            ['choice_text' => 'Un état d’énergie élevé associé au passage par l’état de transition', 'is_correct' => true],
                            ['choice_text' => 'Toujours le niveau final des produits', 'is_correct' => false],
                            ['choice_text' => 'La masse totale des réactifs', 'is_correct' => false],
                            ['choice_text' => 'La température finale du mélange', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans un profil énergétique simple, le sommet représente un état de haute énergie correspondant à l’état de transition. Les produits se trouvent ensuite à un autre niveau.'
                    ],
                    [
                        'question' => 'Quelle affirmation distingue correctement ΔH de l’énergie d’activation ?',
                        'choices' => [
                            ['choice_text' => 'ΔH compare l’énergie des produits et des réactifs, tandis que l’énergie d’activation correspond à la barrière à franchir', 'is_correct' => true],
                            ['choice_text' => 'ΔH et énergie d’activation sont toujours exactement la même grandeur', 'is_correct' => false],
                            ['choice_text' => 'L’énergie d’activation donne toujours le nombre de moles', 'is_correct' => false],
                            ['choice_text' => 'ΔH ne concerne que la température', 'is_correct' => false],
                        ],
                        'explanation' => 'ΔH décrit la différence d’enthalpie entre l’état initial et final. L’énergie d’activation concerne la barrière énergétique nécessaire pour atteindre l’état de transition.'
                    ],
                    [
                        'question' => 'Une réaction est exothermique et possède une énergie d’activation importante. Que peut-on dire ?',
                        'choices' => [
                            ['choice_text' => 'Elle peut libérer de l’énergie tout en nécessitant un apport initial pour démarrer', 'is_correct' => true],
                            ['choice_text' => 'Elle ne peut pas démarrer', 'is_correct' => false],
                            ['choice_text' => 'Elle est forcément endothermique', 'is_correct' => false],
                            ['choice_text' => 'Elle n’a aucune barrière énergétique', 'is_correct' => false],
                        ],
                        'explanation' => 'Une réaction peut être globalement exothermique tout en ayant besoin d’une énergie initiale pour franchir sa barrière d’activation, par exemple une étincelle pour une combustion.'
                    ],
                ],
            ],

            [
                'title' => 'Énergie des liaisons et réactions chimiques',
                'description' => 'Découvrez simplement comment la rupture et la formation des liaisons sont liées aux échanges d’énergie dans une réaction.',
                'questions' => [
                    [
                        'question' => 'Que faut-il généralement faire pour casser une liaison chimique ?',
                        'choices' => [
                            ['choice_text' => 'Fournir de l’énergie', 'is_correct' => true],
                            ['choice_text' => 'Retirer toute la masse du système', 'is_correct' => false],
                            ['choice_text' => 'Créer un neutron', 'is_correct' => false],
                            ['choice_text' => 'Refroidir toujours jusqu’à 0 K', 'is_correct' => false],
                        ],
                        'explanation' => 'Rompre une liaison demande de fournir de l’énergie pour surmonter l’attraction entre les atomes concernés.'
                    ],
                    [
                        'question' => 'Que se passe-t-il généralement lorsqu’une nouvelle liaison chimique se forme ?',
                        'choices' => [
                            ['choice_text' => 'De l’énergie est libérée', 'is_correct' => true],
                            ['choice_text' => 'De l’énergie doit toujours être absorbée', 'is_correct' => false],
                            ['choice_text' => 'Les atomes disparaissent', 'is_correct' => false],
                            ['choice_text' => 'La masse devient nulle', 'is_correct' => false],
                        ],
                        'explanation' => 'La formation d’une liaison vers un état plus stable s’accompagne généralement d’une libération d’énergie.'
                    ],
                    [
                        'question' => 'Dans une réaction chimique, pourquoi peut-il y avoir un échange net de chaleur même si des liaisons sont à la fois cassées et formées ?',
                        'choices' => [
                            ['choice_text' => 'Parce que l’énergie nécessaire pour casser les liaisons peut être différente de celle libérée lors de leur formation', 'is_correct' => true],
                            ['choice_text' => 'Parce que les liaisons n’ont aucune énergie', 'is_correct' => false],
                            ['choice_text' => 'Parce que seuls les réactifs ont des liaisons', 'is_correct' => false],
                            ['choice_text' => 'Parce que la chaleur ne dépend jamais des liaisons', 'is_correct' => false],
                        ],
                        'explanation' => 'La réaction implique un bilan entre l’énergie absorbée pour rompre certaines liaisons et celle libérée lors de la formation des nouvelles liaisons.'
                    ],
                    [
                        'question' => 'Une réaction forme des liaisons très stables qui libèrent beaucoup d’énergie, alors que les liaisons cassées demandent moins d’énergie. Le bilan sera probablement :',
                        'choices' => [
                            ['choice_text' => 'Exothermique', 'is_correct' => true],
                            ['choice_text' => 'Endothermique', 'is_correct' => false],
                            ['choice_text' => 'Toujours nul', 'is_correct' => false],
                            ['choice_text' => 'Sans aucun échange', 'is_correct' => false],
                        ],
                        'explanation' => 'Si la formation des nouvelles liaisons libère plus d’énergie que la rupture des anciennes n’en consomme, le bilan est exothermique.'
                    ],
                    [
                        'question' => 'Un élève dit : « Former une liaison demande toujours de la chaleur. » Quelle correction est la plus juste ?',
                        'choices' => [
                            ['choice_text' => 'La formation d’une liaison libère généralement de l’énergie ; c’est sa rupture qui demande de l’énergie', 'is_correct' => true],
                            ['choice_text' => 'Former et casser une liaison ont exactement le même effet énergétique dans tous les cas', 'is_correct' => false],
                            ['choice_text' => 'Une liaison n’a jamais de relation avec l’énergie', 'is_correct' => false],
                            ['choice_text' => 'Toutes les liaisons se forment uniquement par refroidissement', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans le modèle énergétique habituel, casser une liaison nécessite un apport d’énergie, tandis que sa formation libère de l’énergie.'
                    ],
                    [
                        'question' => 'La rupture de 2 liaisons demande respectivement 100 kJ et 150 kJ. Quelle énergie totale faut-il fournir pour les casser ?',
                        'choices' => [
                            ['choice_text' => '250 kJ', 'is_correct' => true],
                            ['choice_text' => '50 kJ', 'is_correct' => false],
                            ['choice_text' => '150 kJ', 'is_correct' => false],
                            ['choice_text' => '100 kJ', 'is_correct' => false],
                        ],
                        'explanation' => 'L’énergie totale nécessaire est 100 + 150 = 250 kJ.'
                    ],
                    [
                        'question' => 'La formation de trois liaisons libère 80 kJ, 60 kJ et 40 kJ. Quelle énergie totale est libérée ?',
                        'choices' => [
                            ['choice_text' => '180 kJ', 'is_correct' => true],
                            ['choice_text' => '120 kJ', 'is_correct' => false],
                            ['choice_text' => '140 kJ', 'is_correct' => false],
                            ['choice_text' => '200 kJ', 'is_correct' => false],
                        ],
                        'explanation' => 'Énergie libérée = 80 + 60 + 40 = 180 kJ.'
                    ],
                    [
                        'question' => 'Une réaction nécessite 300 kJ pour casser des liaisons et libère 360 kJ lors de la formation des nouvelles liaisons. Quel est le bilan énergétique simplifié ?',
                        'choices' => [
                            ['choice_text' => 'Une libération nette de 60 kJ', 'is_correct' => true],
                            ['choice_text' => 'Une absorption nette de 60 kJ', 'is_correct' => false],
                            ['choice_text' => 'Une libération nette de 660 kJ', 'is_correct' => false],
                            ['choice_text' => 'Aucun échange énergétique', 'is_correct' => false],
                        ],
                        'explanation' => 'Le bilan est 300 - 360 = -60 kJ. La réaction libère donc 60 kJ nette.'
                    ],
                    [
                        'question' => 'Une réaction nécessite 500 kJ pour casser les liaisons et libère 420 kJ en formant les nouvelles. Quel est le caractère du bilan ?',
                        'choices' => [
                            ['choice_text' => 'Endothermique de 80 kJ', 'is_correct' => true],
                            ['choice_text' => 'Exothermique de 80 kJ', 'is_correct' => false],
                            ['choice_text' => 'Exothermique de 920 kJ', 'is_correct' => false],
                            ['choice_text' => 'Neutre', 'is_correct' => false],
                        ],
                        'explanation' => '500 - 420 = +80 kJ. Comme il reste 80 kJ à fournir, le bilan est endothermique.'
                    ],
                    [
                        'question' => 'Pourquoi une étincelle peut-elle être nécessaire pour démarrer une combustion pourtant exothermique ?',
                        'choices' => [
                            ['choice_text' => 'Elle apporte l’énergie d’activation nécessaire pour amorcer la réaction', 'is_correct' => true],
                            ['choice_text' => 'Elle fournit tous les produits de la réaction', 'is_correct' => false],
                            ['choice_text' => 'Elle transforme l’oxygène en carburant', 'is_correct' => false],
                            ['choice_text' => 'Elle supprime les liaisons du produit final uniquement', 'is_correct' => false],
                        ],
                        'explanation' => 'Même une réaction exothermique peut avoir une barrière énergétique. L’étincelle fournit l’énergie initiale nécessaire pour la franchir.'
                    ],
                ],
            ],

            [
                'title' => 'Applications de la thermochimie',
                'description' => 'Appliquez les notions de thermochimie à la cuisine, aux systèmes de chauffage, aux boissons, aux matériaux et aux situations de laboratoire.',
                'questions' => [
                    [
                        'question' => 'Pourquoi une casserole en métal chauffe-t-elle rapidement sur une plaque de cuisson ?',
                        'choices' => [
                            ['choice_text' => 'Le métal transfère efficacement l’énergie thermique', 'is_correct' => true],
                            ['choice_text' => 'Le métal crée de la chaleur à partir de rien', 'is_correct' => false],
                            ['choice_text' => 'Le métal ne contient aucune particule', 'is_correct' => false],
                            ['choice_text' => 'Le métal est toujours une substance gazeuse', 'is_correct' => false],
                        ],
                        'explanation' => 'Les métaux sont généralement de bons conducteurs thermiques. Ils permettent donc au chauffage de se répartir rapidement dans le matériau.'
                    ],
                    [
                        'question' => 'Pourquoi un manche en bois peut-il rester plus froid qu’une casserole métallique chauffée ?',
                        'choices' => [
                            ['choice_text' => 'Le bois conduit généralement moins bien la chaleur', 'is_correct' => true],
                            ['choice_text' => 'Le bois n’a aucune énergie thermique', 'is_correct' => false],
                            ['choice_text' => 'Le bois devient automatiquement un gaz', 'is_correct' => false],
                            ['choice_text' => 'Le métal absorbe toute la chaleur sans la transmettre', 'is_correct' => false],
                        ],
                        'explanation' => 'Le bois est un moins bon conducteur thermique que le métal. La chaleur se propage donc plus lentement dans le manche.'
                    ],
                    [
                        'question' => 'Pourquoi une boisson chaude refroidit-elle plus rapidement dans une tasse large que dans un récipient très fermé, toutes choses égales par ailleurs ?',
                        'choices' => [
                            ['choice_text' => 'Une plus grande surface exposée facilite les échanges de chaleur avec l’environnement', 'is_correct' => true],
                            ['choice_text' => 'La boisson perd automatiquement sa masse', 'is_correct' => false],
                            ['choice_text' => 'La tasse large change la composition chimique de la boisson', 'is_correct' => false],
                            ['choice_text' => 'Le récipient fermé produit du froid', 'is_correct' => false],
                        ],
                        'explanation' => 'Une plus grande surface de contact avec l’air peut favoriser les transferts thermiques et, selon la situation, l’évaporation.'
                    ],
                    [
                        'question' => 'Une poche froide devient très froide lorsqu’on mélange ses composants. Quel type de transformation est cohérent avec cette observation ?',
                        'choices' => [
                            ['choice_text' => 'Une transformation endothermique', 'is_correct' => true],
                            ['choice_text' => 'Une transformation exothermique', 'is_correct' => false],
                            ['choice_text' => 'Une transformation sans échange d’énergie', 'is_correct' => false],
                            ['choice_text' => 'Une transformation nucléaire obligatoire', 'is_correct' => false],
                        ],
                        'explanation' => 'Si la poche se refroidit parce que le processus absorbe de l’énergie de son environnement, il s’agit d’un processus endothermique.'
                    ],
                    [
                        'question' => 'Pourquoi un manteau aide-t-il à garder le corps chaud ?',
                        'choices' => [
                            ['choice_text' => 'Il réduit les transferts de chaleur entre le corps et l’environnement', 'is_correct' => true],
                            ['choice_text' => 'Il produit en permanence de l’énergie chimique', 'is_correct' => false],
                            ['choice_text' => 'Il augmente automatiquement la température du corps de plusieurs dizaines de degrés', 'is_correct' => false],
                            ['choice_text' => 'Il empêche toutes les particules de bouger', 'is_correct' => false],
                        ],
                        'explanation' => 'Un bon vêtement isolant ralentit les échanges thermiques avec l’environnement. Il ne crée pas la chaleur du corps, mais aide à la conserver.'
                    ],
                    [
                        'question' => 'Pourquoi les boissons sont-elles souvent conservées dans des bouteilles isothermes ?',
                        'choices' => [
                            ['choice_text' => 'Pour ralentir les échanges de chaleur avec l’extérieur', 'is_correct' => true],
                            ['choice_text' => 'Pour augmenter la masse de la boisson', 'is_correct' => false],
                            ['choice_text' => 'Pour provoquer une réaction chimique permanente', 'is_correct' => false],
                            ['choice_text' => 'Pour supprimer la température de la boisson', 'is_correct' => false],
                        ],
                        'explanation' => 'Une bouteille isotherme est conçue pour limiter les transferts thermiques et conserver plus longtemps une boisson chaude ou froide.'
                    ],
                    [
                        'question' => 'Un cuisinier ajoute de l’eau froide dans une soupe très chaude. Quelle est la conséquence thermique immédiate la plus probable ?',
                        'choices' => [
                            ['choice_text' => 'La température de la soupe diminue', 'is_correct' => true],
                            ['choice_text' => 'La température double immédiatement', 'is_correct' => false],
                            ['choice_text' => 'La soupe devient automatiquement solide', 'is_correct' => false],
                            ['choice_text' => 'Aucun échange d’énergie ne se produit', 'is_correct' => false],
                        ],
                        'explanation' => 'L’eau froide reçoit de l’énergie thermique de la soupe chaude. Le mélange atteint donc une température intermédiaire plus basse que celle de la soupe initiale.'
                    ],
                    [
                        'question' => 'Pourquoi une personne peut-elle ressentir un refroidissement après être sortie d’une piscine même lorsqu’il ne fait pas très froid ?',
                        'choices' => [
                            ['choice_text' => 'L’évaporation de l’eau sur la peau consomme de l’énergie', 'is_correct' => true],
                            ['choice_text' => 'L’eau crée du froid directement', 'is_correct' => false],
                            ['choice_text' => 'La peau perd tous ses électrons', 'is_correct' => false],
                            ['choice_text' => 'La température extérieure devient automatiquement négative', 'is_correct' => false],
                        ],
                        'explanation' => 'L’évaporation nécessite de l’énergie. Une partie de cette énergie peut être prise à la peau, ce qui produit une sensation de refroidissement.'
                    ],
                    [
                        'question' => 'Une plaque chauffante fournit 3 000 J à un récipient contenant de l’eau. Que signifie cette valeur ?',
                        'choices' => [
                            ['choice_text' => 'Le système a reçu 3 000 J d’énergie thermique dans les conditions de l’expérience', 'is_correct' => true],
                            ['choice_text' => 'L’eau a augmenté de 3 000 °C', 'is_correct' => false],
                            ['choice_text' => 'La masse de l’eau est devenue 3 000 g', 'is_correct' => false],
                            ['choice_text' => 'La température est exactement de 3 000 °C', 'is_correct' => false],
                        ],
                        'explanation' => 'Le joule est une unité d’énergie. La valeur 3 000 J indique une quantité d’énergie transférée, pas directement une température ou une masse.'
                    ],
                    [
                        'question' => 'Un ingénieur compare deux matériaux pour fabriquer une paroi qui doit limiter les échanges de chaleur. Quelle propriété sera particulièrement intéressante ?',
                        'choices' => [
                            ['choice_text' => 'Une faible conductivité thermique', 'is_correct' => true],
                            ['choice_text' => 'Une très grande conductivité électrique uniquement', 'is_correct' => false],
                            ['choice_text' => 'Une forte masse atomique uniquement', 'is_correct' => false],
                            ['choice_text' => 'Une couleur sombre obligatoire', 'is_correct' => false],
                        ],
                        'explanation' => 'Une faible conductivité thermique signifie que le matériau transmet difficilement la chaleur. C’est utile pour l’isolation.'
                    ],
                ],
            ],

            [
                'title' => 'Révision générale de thermochimie',
                'description' => 'Révisez les concepts clés de thermochimie à travers des calculs, des situations pratiques et des interprétations de bilans énergétiques.',
                'questions' => [
                    [
                        'question' => 'Quelle affirmation distingue correctement chaleur et température ?',
                        'choices' => [
                            ['choice_text' => 'La chaleur est une énergie transférée, tandis que la température décrit l’état thermique d’un système', 'is_correct' => true],
                            ['choice_text' => 'La chaleur et la température sont exactement la même grandeur', 'is_correct' => false],
                            ['choice_text' => 'La température mesure directement la masse', 'is_correct' => false],
                            ['choice_text' => 'La chaleur ne peut jamais être transférée', 'is_correct' => false],
                        ],
                        'explanation' => 'La température caractérise l’état thermique d’un objet. La chaleur correspond à un transfert d’énergie provoqué par une différence de température.'
                    ],
                    [
                        'question' => 'Une réaction fait passer la température d’un mélange de 22 °C à 30 °C sans chauffage extérieur. Quelle interprétation est plausible ?',
                        'choices' => [
                            ['choice_text' => 'La réaction a probablement libéré de l’énergie thermique', 'is_correct' => true],
                            ['choice_text' => 'La réaction est forcément endothermique', 'is_correct' => false],
                            ['choice_text' => 'Aucune énergie n’a été échangée', 'is_correct' => false],
                            ['choice_text' => 'La masse du mélange a forcément doublé', 'is_correct' => false],
                        ],
                        'explanation' => 'Une hausse de température sans chauffage extérieur est cohérente avec une libération d’énergie thermique par le processus, donc avec un caractère exothermique.'
                    ],
                    [
                        'question' => 'Une réaction possède ΔH = +40 kJ. Quel énoncé est correct ?',
                        'choices' => [
                            ['choice_text' => 'La réaction est endothermique et absorbe de l’énergie', 'is_correct' => true],
                            ['choice_text' => 'La réaction est exothermique et libère 40 kJ', 'is_correct' => false],
                            ['choice_text' => 'La réaction n’échange aucune énergie', 'is_correct' => false],
                            ['choice_text' => 'La température augmente obligatoirement de 40 °C', 'is_correct' => false],
                        ],
                        'explanation' => 'Un ΔH positif signifie que l’enthalpie du système augmente. Le processus est donc endothermique.'
                    ],
                    [
                        'question' => 'On chauffe 50 g d’un matériau ayant c = 2 J/(g·°C) de 20 °C à 30 °C. Quelle chaleur reçoit-il ?',
                        'choices' => [
                            ['choice_text' => '1 000 J', 'is_correct' => true],
                            ['choice_text' => '100 J', 'is_correct' => false],
                            ['choice_text' => '500 J', 'is_correct' => false],
                            ['choice_text' => '2 000 J', 'is_correct' => false],
                        ],
                        'explanation' => 'Q = mcΔT = 50 × 2 × (30 - 20) = 1 000 J.'
                    ],
                    [
                        'question' => 'Pourquoi une grande quantité de matière demande-t-elle souvent plus d’énergie pour subir la même variation de température qu’une petite quantité du même matériau ?',
                        'choices' => [
                            ['choice_text' => 'Il y a davantage de matière à chauffer', 'is_correct' => true],
                            ['choice_text' => 'La grande quantité a forcément une température plus élevée', 'is_correct' => false],
                            ['choice_text' => 'La capacité thermique massique change automatiquement avec la masse', 'is_correct' => false],
                            ['choice_text' => 'Les grandes quantités ne peuvent pas recevoir de chaleur', 'is_correct' => false],
                        ],
                        'explanation' => 'Dans Q = mcΔT, si le matériau et la variation de température restent les mêmes, augmenter la masse augmente la chaleur nécessaire.'
                    ],
                    [
                        'question' => 'Un calorimètre presque idéal est utilisé pour une expérience. Pourquoi cette précaution améliore-t-elle les calculs ?',
                        'choices' => [
                            ['choice_text' => 'Elle limite les échanges de chaleur avec l’environnement', 'is_correct' => true],
                            ['choice_text' => 'Elle augmente toujours la température initiale', 'is_correct' => false],
                            ['choice_text' => 'Elle change la masse molaire des substances', 'is_correct' => false],
                            ['choice_text' => 'Elle empêche toute réaction chimique', 'is_correct' => false],
                        ],
                        'explanation' => 'Limiter les échanges avec l’extérieur rend le bilan énergétique du système plus proche de l’idéal et facilite l’interprétation des résultats.'
                    ],
                    [
                        'question' => 'Lorsqu’un glaçon fond dans une boisson, quel type d’échange décrit le mieux la situation ?',
                        'choices' => [
                            ['choice_text' => 'Le glaçon absorbe de l’énergie thermique provenant de la boisson', 'is_correct' => true],
                            ['choice_text' => 'La boisson absorbe toute l’énergie du glaçon', 'is_correct' => false],
                            ['choice_text' => 'Le glaçon libère de l’énergie pour se refroidir', 'is_correct' => false],
                            ['choice_text' => 'Aucun transfert thermique ne se produit', 'is_correct' => false],
                        ],
                        'explanation' => 'La glace doit recevoir de l’énergie pour fondre. La boisson plus chaude fournit donc une partie de cette énergie.'
                    ],
                    [
                        'question' => 'Dans une réaction, 200 kJ sont nécessaires pour casser les liaisons et 260 kJ sont libérés lors de la formation des nouvelles liaisons. Quel est le bilan ?',
                        'choices' => [
                            ['choice_text' => 'Une libération nette de 60 kJ', 'is_correct' => true],
                            ['choice_text' => 'Une absorption nette de 60 kJ', 'is_correct' => false],
                            ['choice_text' => 'Une libération nette de 460 kJ', 'is_correct' => false],
                            ['choice_text' => 'Un bilan nul', 'is_correct' => false],
                        ],
                        'explanation' => 'Le bilan est 200 - 260 = -60 kJ. La formation des nouvelles liaisons libère donc 60 kJ de plus que ce qui est nécessaire pour casser les anciennes.'
                    ],
                    [
                        'question' => 'Un étudiant résume : « Une réaction exothermique ne demande jamais d’énergie. » Quelle correction est importante ?',
                        'choices' => [
                            ['choice_text' => 'Elle peut nécessiter une énergie d’activation pour démarrer tout en libérant ensuite de l’énergie', 'is_correct' => true],
                            ['choice_text' => 'Une réaction exothermique est toujours instantanée', 'is_correct' => false],
                            ['choice_text' => 'Une réaction exothermique ne contient aucune liaison', 'is_correct' => false],
                            ['choice_text' => 'Une réaction exothermique est forcément endothermique au départ', 'is_correct' => false],
                        ],
                        'explanation' => 'Le caractère exothermique décrit le bilan global. Une réaction peut tout de même avoir besoin d’une énergie initiale pour franchir sa barrière d’activation.'
                    ],
                    [
                        'question' => 'On chauffe 200 g d’un matériau ayant une capacité thermique massique de 2,5 J/(g·°C) de 20 °C à 26 °C. Quelle quantité de chaleur reçoit-il ?',
                        'choices' => [
                            ['choice_text' => '3 000 J', 'is_correct' => true],
                            ['choice_text' => '750 J', 'is_correct' => false],
                            ['choice_text' => '1 500 J', 'is_correct' => false],
                            ['choice_text' => '5 000 J', 'is_correct' => false],
                        ],
                        'explanation' => 'Q = mcΔT = 200 × 2,5 × (26 - 20) = 200 × 2,5 × 6 = 3 000 J.'
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
            5 => ['duration' => 20, 'passing_score' => 65],
            6 => ['duration' => 20, 'passing_score' => 65],
            7 => ['duration' => 25, 'passing_score' => 70],
            8 => ['duration' => 25, 'passing_score' => 70],
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