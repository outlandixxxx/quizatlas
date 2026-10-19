<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class IslamicFinanceBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'islamic-finance')->firstOrFail();

        $quizSettings = [
            ['duration' => 20, 'passing_score' => 55],
            ['duration' => 21, 'passing_score' => 60],
            ['duration' => 23, 'passing_score' => 60],
            ['duration' => 19, 'passing_score' => 50],
            ['duration' => 22, 'passing_score' => 60],
            ['duration' => 20, 'passing_score' => 55],
            ['duration' => 24, 'passing_score' => 60],
            ['duration' => 25, 'passing_score' => 55],
            ['duration' => 27, 'passing_score' => 60],
        ];

        $quizzes = [
            [
                'title' => 'Principes fondamentaux de la finance islamique',
                'description' => 'Découvrir les grands principes de la finance islamique, la place du commerce, les interdictions de riba, gharar et maysir, et le lien entre finance et activité économique réelle.',
                'questions' => [
                    [
                        'question' => 'Qu’est-ce qui distingue avant tout la finance islamique d’un financement fondé sur l’intérêt ?',
                        'explanation' => 'Pas de riba, donc pas d’intérêt sur un prêt. À la place, la banque passe par la vente, la location ou le partage des profits et des pertes.',
                        'choices' => [
                            ['choice_text' => 'L’interdiction pour la banque de réaliser le moindre bénéfice sur ses opérations', 'is_correct' => false],
                            ['choice_text' => 'L’obligation de ne financer que des achats de biens immobiliers', 'is_correct' => false],
                            ['choice_text' => 'L’obligation d’offrir à chaque déposant un rendement fixé à l’avance', 'is_correct' => false],
                            ['choice_text' => 'L’interdiction du riba (l’intérêt) et l’usage de contrats conformes à la Sharia', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Que veut dire « riba » ?',
                        'explanation' => 'Le riba, c’est le gain obtenu simplement parce qu’on a prêté de l’argent, par exemple un intérêt sur un prêt. Un bénéfice tiré d’une vente ou d’une activité réelle n’est pas du riba.',
                        'choices' => [
                            ['choice_text' => 'La part de profit versée à un associé dans un partenariat', 'is_correct' => false],
                            ['choice_text' => 'L’aumône annuelle versée aux personnes dans le besoin', 'is_correct' => false],
                            ['choice_text' => 'Le bénéfice réalisé par un commerçant lorsqu’il revend un bien', 'is_correct' => false],
                            ['choice_text' => 'L’intérêt prélevé sur un prêt, interdit en finance islamique', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'À quoi sert l’actif ou l’activité sous-jacente dans un financement islamique ?',
                        'explanation' => 'L’argent doit passer par un achat, une location ou une activité réelle. On évite ainsi un financement détaché de l’économie réelle.',
                        'choices' => [
                            ['choice_text' => 'À relier l’opération à une vraie activité économique, et pas à un simple prêt d’argent', 'is_correct' => true],
                            ['choice_text' => 'À supprimer le risque pour la banque qui finance l’opération', 'is_correct' => false],
                            ['choice_text' => 'À laisser la banque fixer librement le prix sans avoir à le justifier auprès du client', 'is_correct' => false],
                            ['choice_text' => 'À permettre au client de connaître son bénéfice dès la signature', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une transaction comporte une incertitude excessive sur l’objet vendu, son prix ou ses principales conditions. Quel principe peut être concerné ?',
                        'explanation' => 'Le gharar désigne une incertitude ou une ambiguïté excessive dans une transaction. Les contrats islamiques cherchent donc à définir clairement les éléments essentiels de l’opération.',
                        'choices' => [
                            ['choice_text' => 'Le principe de maysir', 'is_correct' => false],
                            ['choice_text' => 'Le principe de la zakat', 'is_correct' => false],
                            ['choice_text' => 'Le principe de riba', 'is_correct' => false],
                            ['choice_text' => 'Le principe de gharar', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Quel mot désigne le jeu de hasard, interdit en finance islamique ?',
                        'explanation' => 'Le maysir, c’est un gain qui dépend du hasard, comme dans un jeu d’argent. Il fait partie des pratiques interdites avec le riba.',
                        'choices' => [
                            ['choice_text' => 'Zakat', 'is_correct' => false],
                            ['choice_text' => 'Riba', 'is_correct' => false],
                            ['choice_text' => 'Takaful', 'is_correct' => false],
                            ['choice_text' => 'Maysir', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Samira ouvre une épicerie et sa banque islamique accepte de la financer par un contrat de vente conforme. Est-ce cohérent avec la finance islamique ?',
                        'explanation' => 'Commercer est permis, et même encouragé. Ce qui est interdit, c’est le riba, pas le fait de gagner de l’argent sur une vente réelle.',
                        'choices' => [
                            ['choice_text' => 'Non, car la finance islamique ne finance que des projets publics, jamais des commerces privés', 'is_correct' => false],
                            ['choice_text' => 'Oui, le commerce licite est permis : c’est l’intérêt sur un prêt qui est interdit', 'is_correct' => true],
                            ['choice_text' => 'Non, car toute marge prise par la banque sur une vente est assimilée au riba', 'is_correct' => false],
                            ['choice_text' => 'Non, car une épicerie ne peut pas être financée par un contrat de vente', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Dans certaines structures islamiques, que veut dire partager les profits et les risques ?',
                        'explanation' => 'C’est le cas dans la Mudarabah et la Musharakah : le résultat du projet est partagé selon des règles fixées au contrat, au lieu d’un intérêt fixe sur un prêt.',
                        'choices' => [
                            ['choice_text' => 'Les partenaires se partagent gains et pertes selon le contrat', 'is_correct' => true],
                            ['choice_text' => 'Le prêteur reçoit un intérêt fixe, que le projet gagne ou perde de l’argent', 'is_correct' => false],
                            ['choice_text' => 'Les profits reviennent à la banque et les pertes au client', 'is_correct' => false],
                            ['choice_text' => 'La banque reprend tout le risque et rembourse le capital au client', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Parmi ces objectifs, lequel correspond à la finance islamique ?',
                        'explanation' => 'On finance des projets licites avec des contrats conformes. Le rendement compte, mais il ne justifie pas de financer n’importe quelle activité, comme les jeux d’argent ou l’alcool.',
                        'choices' => [
                            ['choice_text' => 'Financer des activités et des contrats licites selon la Sharia', 'is_correct' => true],
                            ['choice_text' => 'Chercher le rendement le plus élevé, quelle que soit l’activité financée', 'is_correct' => false],
                            ['choice_text' => 'Offrir au client un capital sans risque, protégé par la banque', 'is_correct' => false],
                            ['choice_text' => 'Prêter de l’argent à taux fixe en évitant d’acheter ou de louer des biens', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Dans un contrat de vente, que faut-il préciser pour éviter le gharar ?',
                        'explanation' => 'Si l’on ne sait pas exactement ce que l’on achète, à quel prix et à quelles conditions, l’incertitude est trop grande. Ces trois points doivent être clairs dès la signature.',
                        'choices' => [
                            ['choice_text' => 'L’évolution du prix du bien sur le marché dans les années à venir', 'is_correct' => false],
                            ['choice_text' => 'Le bien vendu, son prix et les conditions de la vente', 'is_correct' => true],
                            ['choice_text' => 'Le bénéfice exact que l’acheteur fera en revendant le bien', 'is_correct' => false],
                            ['choice_text' => 'La situation financière de l’acheteur dans cinq ans', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Laquelle de ces phrases sur le rendement en finance islamique est vraie ?',
                        'explanation' => 'La finance islamique n’interdit pas de gagner de l’argent. Elle contrôle comment le gain est obtenu : pas de riba, et un vrai contrat derrière.',
                        'choices' => [
                            ['choice_text' => 'Seuls les dons et les aumônes peuvent rapporter de l’argent', 'is_correct' => false],
                            ['choice_text' => 'Tout rendement est interdit, car il ressemble à de l’intérêt', 'is_correct' => false],
                            ['choice_text' => 'On peut gagner de l’argent si le contrat et l’activité sont conformes', 'is_correct' => true],
                            ['choice_text' => 'Un rendement est permis dès qu’il est fixé à l’avance et garanti par la banque', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Laquelle de ces activités une banque islamique refuse-t-elle de financer ?',
                        'explanation' => 'Même avec un contrat bien rédigé, l’activité financée doit être licite. L’alcool est exclu, alors que la vente à crédit et les autres activités citées sont permises.',
                        'choices' => [
                            ['choice_text' => 'Une brasserie qui produit de l’alcool', 'is_correct' => true],
                            ['choice_text' => 'Une usine d’emballage qui exporte ses produits', 'is_correct' => false],
                            ['choice_text' => 'Une boulangerie qui vend une partie de ses produits à crédit', 'is_correct' => false],
                            ['choice_text' => 'Un cabinet de conseil qui facture ses clients à la mission', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Murabaha : achat, marge et revente',
                'description' => 'Comprendre la structure de base de la Murabaha et distinguer une vente avec marge d\'un prêt conventionnel à intérêt.',
                'questions' => [
                    [
                        'question' => 'Qu’est-ce qu’une Murabaha, dans un financement ?',
                        'explanation' => 'La banque achète le bien, puis le revend au client en lui disant combien elle l’a payé et quelle marge elle ajoute.',
                        'choices' => [
                            ['choice_text' => 'Une location où le client verse un loyer sans devenir propriétaire', 'is_correct' => false],
                            ['choice_text' => 'Un prêt où la banque est remboursée avec un taux d’intérêt', 'is_correct' => false],
                            ['choice_text' => 'Une association où la banque et le client partagent les profits', 'is_correct' => false],
                            ['choice_text' => 'Une vente où la banque annonce son coût d’achat et sa marge', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Avant de revendre le bien à son client, que doit d’abord faire la banque dans une Murabaha ?',
                        'explanation' => 'La banque doit d’abord acquérir le bien. C’est cette étape qui fait de la Murabaha une vente et non un simple prêt d’argent.',
                        'choices' => [
                            ['choice_text' => 'Acheter elle-même le bien chez le fournisseur', 'is_correct' => true],
                            ['choice_text' => 'Remettre au client une somme d’argent à rembourser avec intérêt', 'is_correct' => false],
                            ['choice_text' => 'Entrer au capital de l’entreprise du client', 'is_correct' => false],
                            ['choice_text' => 'Louer le bien au client pour une durée fixée à l’avance', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une banque achète une machine 100 000 MAD et la revend 115 000 MAD à Youssef, payable plus tard. Quelle est sa marge ?',
                        'explanation' => 'Marge = prix de revente moins prix d’achat : 115 000 - 100 000 = 15 000 MAD.',
                        'choices' => [
                            ['choice_text' => '10 000 MAD', 'is_correct' => false],
                            ['choice_text' => '15 000 MAD', 'is_correct' => true],
                            ['choice_text' => '100 000 MAD', 'is_correct' => false],
                            ['choice_text' => '215 000 MAD', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Dans une Murabaha, qu’est-ce que le client doit connaître avant de signer ?',
                        'explanation' => 'La Murabaha est une vente à coût majoré : le client sait combien la banque a payé et combien elle gagne. Cette transparence évite le gharar.',
                        'choices' => [
                            ['choice_text' => 'Le taux directeur fixé par la banque centrale', 'is_correct' => false],
                            ['choice_text' => 'Le coût d’achat du bien et la marge de la banque', 'is_correct' => true],
                            ['choice_text' => 'Le prix auquel la banque a revendu des biens semblables à d’autres clients', 'is_correct' => false],
                            ['choice_text' => 'Le bénéfice que le client fera en utilisant le bien', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce qui distingue une Murabaha d’un prêt classique ?',
                        'explanation' => 'Dans un prêt, on rend l’argent avec un intérêt. Dans une Murabaha, la banque vend un bien déterminé à un prix connu dès le départ.',
                        'choices' => [
                            ['choice_text' => 'Le client paie un loyer et la banque garde la propriété du bien', 'is_correct' => false],
                            ['choice_text' => 'Le prix final dépend des bénéfices que le client réalise', 'is_correct' => false],
                            ['choice_text' => 'Il y a une vraie vente d’un bien, avec une marge connue', 'is_correct' => true],
                            ['choice_text' => 'La banque partage les pertes de l’entreprise du client', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Karim finance une voiture en Murabaha. Qu’est-ce qui est vendu dans cette opération ?',
                        'explanation' => 'L’objet de la vente est la voiture elle-même : la banque l’achète, puis la revend à Karim.',
                        'choices' => [
                            ['choice_text' => 'La voiture, identifiée dès le départ', 'is_correct' => true],
                            ['choice_text' => 'Le droit d’utiliser la voiture pendant quelques années', 'is_correct' => false],
                            ['choice_text' => 'Une part du capital de la banque', 'is_correct' => false],
                            ['choice_text' => 'Un certificat donnant droit à plusieurs voitures', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Youssef achète un bien en Murabaha. La banque l’a payé 80 000 MAD et ajoute une marge de 12 000 MAD. Quel est le prix de vente ?',
                        'explanation' => 'Prix de vente = coût + marge, soit 80 000 + 12 000 = 92 000 MAD.',
                        'choices' => [
                            ['choice_text' => '68 000 MAD', 'is_correct' => false],
                            ['choice_text' => '80 000 MAD', 'is_correct' => false],
                            ['choice_text' => '92 000 MAD', 'is_correct' => true],
                            ['choice_text' => '104 000 MAD', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un ami dit : « La Murabaha, c’est un prêt avec un autre nom. » Qu’est-ce qui montre qu’il se trompe ?',
                        'explanation' => 'Dans une vraie Murabaha, la banque achète le bien, en supporte le risque entre l’achat et la revente, puis le vend avec une marge. Ce n’est pas un simple transfert d’argent.',
                        'choices' => [
                            ['choice_text' => 'La banque achète le bien et en devient propriétaire avant de le revendre', 'is_correct' => true],
                            ['choice_text' => 'La marge est fixée par la banque centrale et non par la banque elle-même', 'is_correct' => false],
                            ['choice_text' => 'Le prix est calculé en pourcentage du salaire du client', 'is_correct' => false],
                            ['choice_text' => 'La banque ne demande aucun paiement au client avant la fin du contrat', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Samira paie finalement 126 000 MAD pour un bien que la banque a acheté 120 000 MAD. Quelle marge a été prévue ?',
                        'explanation' => '126 000 - 120 000 = 6 000 MAD de marge.',
                        'choices' => [
                            ['choice_text' => '4 000 MAD', 'is_correct' => false],
                            ['choice_text' => '6 000 MAD', 'is_correct' => true],
                            ['choice_text' => '120 000 MAD', 'is_correct' => false],
                            ['choice_text' => '246 000 MAD', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Youssef achète un bien en Murabaha et le paie en plusieurs échéances. Que devient le prix de vente au fil des mois ?',
                        'explanation' => 'En Murabaha, le prix est connu et fixé dès la signature, même s’il est payé en plusieurs fois. Il ne grossit pas avec le temps comme le ferait un intérêt.',
                        'choices' => [
                            ['choice_text' => 'Il reste celui fixé à la signature', 'is_correct' => true],
                            ['choice_text' => 'Il augmente à chaque échéance, comme un intérêt', 'is_correct' => false],
                            ['choice_text' => 'Il est recalculé chaque année selon les bénéfices de Youssef', 'is_correct' => false],
                            ['choice_text' => 'Il est fixé par le fournisseur à la fin du contrat', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Samira demande à la banque d’acheter un camion précis pour le lui revendre ensuite. Est-ce possible en Murabaha ?',
                        'explanation' => 'Le client peut désigner le bien, mais la banque doit vraiment l’acquérir puis le revendre. Si elle ne fait que prêter de l’argent, ce n’est plus une Murabaha.',
                        'choices' => [
                            ['choice_text' => 'Oui, à condition que la banque achète réellement le camion avant de le lui revendre', 'is_correct' => true],
                            ['choice_text' => 'Oui, mais la banque devient alors locataire du camion', 'is_correct' => false],
                            ['choice_text' => 'Non, le client n’a pas le droit de choisir le bien', 'is_correct' => false],
                            ['choice_text' => 'Oui, la banque peut simplement lui verser l’argent et réclamer plus tard une somme majorée', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Mudarabah et Musharakah : partage des profits et des risques',
                'description' => 'Comparer Mudarabah et Musharakah et comprendre les rôles du capital, du travail, de la gestion et du partage du résultat.',
                'questions' => [
                    [
                        'question' => 'Dans une Mudarabah, quel est le rôle typique du Rabb al-Mal ?',
                        'explanation' => 'Le Rabb al-Mal fournit le capital. Le gestionnaire, appelé Mudarib, apporte son travail et son savoir-faire.',
                        'choices' => [
                            ['choice_text' => 'Louer un bien à l’entrepreneur', 'is_correct' => false],
                            ['choice_text' => 'Gérer l’activité au quotidien', 'is_correct' => false],
                            ['choice_text' => 'Garantir un revenu fixe au gestionnaire', 'is_correct' => false],
                            ['choice_text' => 'Fournir le capital', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Dans une Mudarabah, que fait le Mudarib ?',
                        'explanation' => 'Le Mudarib apporte son travail et son expérience. Le capital vient de l’autre partie, le Rabb al-Mal.',
                        'choices' => [
                            ['choice_text' => 'Il emprunte de l’argent à la banque et lui verse un intérêt', 'is_correct' => false],
                            ['choice_text' => 'Il gère l’activité avec son travail et son savoir-faire', 'is_correct' => true],
                            ['choice_text' => 'Il garantit à l’investisseur un profit minimum', 'is_correct' => false],
                            ['choice_text' => 'Il apporte tout le capital et supporte seul les pertes', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une Mudarabah réalise un bénéfice de 50 000 MAD et le contrat prévoit 70 % du profit pour l’investisseur et 30 % pour le gestionnaire. Combien revient au gestionnaire ?',
                        'explanation' => 'La part du gestionnaire est 30 % de 50 000 MAD, soit 15 000 MAD.',
                        'choices' => [
                            ['choice_text' => '15 000 MAD', 'is_correct' => true],
                            ['choice_text' => '20 000 MAD', 'is_correct' => false],
                            ['choice_text' => '30 000 MAD', 'is_correct' => false],
                            ['choice_text' => '35 000 MAD', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Dans une Musharakah, qu’est-ce qui est au centre du contrat ?',
                        'explanation' => 'La Musharakah est une association : chacun apporte du capital et peut participer à la gestion, selon l’accord conclu.',
                        'choices' => [
                            ['choice_text' => 'Plusieurs partenaires mettent du capital dans un même projet', 'is_correct' => true],
                            ['choice_text' => 'Une banque prête de l’argent à un client et en reçoit un intérêt fixe', 'is_correct' => false],
                            ['choice_text' => 'Un client loue un bien contre un loyer régulier', 'is_correct' => false],
                            ['choice_text' => 'Un groupe de participants cotise pour couvrir des sinistres', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Deux partenaires investissent 60 000 MAD et 40 000 MAD dans une Musharakah. Quel est le total du capital apporté ?',
                        'explanation' => 'Le capital total est la somme des deux apports : 60 000 + 40 000 = 100 000 MAD.',
                        'choices' => [
                            ['choice_text' => '20 000 MAD', 'is_correct' => false],
                            ['choice_text' => '60 000 MAD', 'is_correct' => false],
                            ['choice_text' => '100 000 MAD', 'is_correct' => true],
                            ['choice_text' => '140 000 MAD', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle phrase distingue le mieux la Mudarabah de la Musharakah ?',
                        'explanation' => 'Retiens : Mudarabah = un met l’argent, l’autre met le travail. Musharakah = chacun met de l’argent dans le projet.',
                        'choices' => [
                            ['choice_text' => 'Dans la Mudarabah, tous apportent du capital ; dans la Musharakah, un seul gère sans capital', 'is_correct' => false],
                            ['choice_text' => 'La Mudarabah sépare capital et gestion, la Musharakah réunit des apports de capital', 'is_correct' => true],
                            ['choice_text' => 'La Mudarabah garantit un intérêt fixe, la Musharakah partage les profits', 'is_correct' => false],
                            ['choice_text' => 'La Mudarabah est une location et la Musharakah une vente avec marge', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un investisseur confie 200 000 MAD à un gestionnaire dans une Mudarabah. Le projet perd de l’argent sans faute du gestionnaire. Qui supporte la perte du capital ?',
                        'explanation' => 'Celui qui met le capital supporte la perte financière. Le gestionnaire perd son travail et son temps, sauf s’il a commis une faute ou une négligence.',
                        'choices' => [
                            ['choice_text' => 'L’investisseur et le gestionnaire, à parts égales', 'is_correct' => false],
                            ['choice_text' => 'Le gestionnaire, qui doit rembourser les 200 000 MAD', 'is_correct' => false],
                            ['choice_text' => 'La banque centrale, qui compense la perte', 'is_correct' => false],
                            ['choice_text' => 'L’investisseur, qui a fourni le capital', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Dans une Mudarabah, que reçoit l’investisseur ?',
                        'explanation' => 'Le partage se fait sur le profit réalisé, avec un ratio convenu à l’avance (par exemple 70/30). Un rendement garanti, quel que soit le résultat, irait à l’encontre de ce principe.',
                        'choices' => [
                            ['choice_text' => 'Un intérêt fixe calculé sur le capital apporté', 'is_correct' => false],
                            ['choice_text' => 'Un loyer mensuel fixe, versé même si le projet perd de l’argent', 'is_correct' => false],
                            ['choice_text' => 'Une part du chiffre d’affaires, même sans bénéfice', 'is_correct' => false],
                            ['choice_text' => 'Une part du profit réalisé, fixée en pourcentage dans le contrat', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Dans une Musharakah, Karim et Samira décident que Karim gérera l’activité au quotidien. Est-ce possible ?',
                        'explanation' => 'Les partenaires s’organisent comme ils le veulent. Le fait que Karim gère davantage ne change pas la nature de partenariat du contrat.',
                        'choices' => [
                            ['choice_text' => 'Oui, les partenaires répartissent les rôles dans le contrat', 'is_correct' => true],
                            ['choice_text' => 'Oui, mais le contrat devient alors un prêt à intérêt', 'is_correct' => false],
                            ['choice_text' => 'Non, la gestion d’un projet commun doit être confiée à un tiers extérieur', 'is_correct' => false],
                            ['choice_text' => 'Oui, mais Samira perd alors sa part dans les profits', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Dans une Musharakah, Youssef apporte 70 % du capital et Samira 30 %. Le projet perd de l’argent. Comment la perte est-elle répartie ?',
                        'explanation' => 'En Musharakah, les pertes suivent les apports en capital. Les profits, eux, peuvent être partagés selon un ratio différent si le contrat le prévoit.',
                        'choices' => [
                            ['choice_text' => 'À parts égales, 50 % chacun, quel que soit l’apport', 'is_correct' => false],
                            ['choice_text' => 'Entièrement par celui des deux associés qui gère l’activité au quotidien', 'is_correct' => false],
                            ['choice_text' => 'Entièrement par la banque qui a organisé le partenariat', 'is_correct' => false],
                            ['choice_text' => 'En proportion des apports : 70 % pour Youssef, 30 % pour Samira', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Parmi ces exemples, lequel est une Mudarabah ?',
                        'explanation' => 'Une personne met le capital, l’autre met son travail, et le profit est partagé selon un ratio. C’est le schéma classique de la Mudarabah.',
                        'choices' => [
                            ['choice_text' => 'Une banque loue un local à un commerçant contre un loyer mensuel fixe', 'is_correct' => false],
                            ['choice_text' => 'Un groupe de familles verse des cotisations pour s’entraider en cas d’accident', 'is_correct' => false],
                            ['choice_text' => 'Samira confie son épargne à un artisan et ils se partagent le profit', 'is_correct' => true],
                            ['choice_text' => 'Un concessionnaire revend un véhicule à Youssef avec une marge annoncée', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Ijarah et financement par la location',
                'description' => 'Comprendre la logique d\'Ijarah, les rôles du bailleur et du preneur, ainsi que les différences avec une vente financée.',
                'questions' => [
                    [
                        'question' => 'À quoi correspond le contrat d’Ijarah ?',
                        'explanation' => 'L’Ijarah, c’est la location : on paie pour utiliser un bien pendant une durée définie, et le bailleur reste propriétaire.',
                        'choices' => [
                            ['choice_text' => 'À la vente d’un bien avec une marge connue du client', 'is_correct' => false],
                            ['choice_text' => 'À une cotisation versée pour couvrir des sinistres', 'is_correct' => false],
                            ['choice_text' => 'À un partenariat où chacun apporte du capital', 'is_correct' => false],
                            ['choice_text' => 'À la location de l’usage d’un bien contre un loyer fixé au contrat', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Dans une Ijarah, le bailleur est celui qui…',
                        'explanation' => 'Le bailleur est le propriétaire qui loue. Celui qui utilise le bien et paie le loyer est le preneur.',
                        'choices' => [
                            ['choice_text' => 'achète le bien chez un fournisseur puis le revend avec une marge', 'is_correct' => false],
                            ['choice_text' => 'possède le bien et en cède l’usage contre un loyer', 'is_correct' => true],
                            ['choice_text' => 'assure le bien en échange d’une cotisation', 'is_correct' => false],
                            ['choice_text' => 'utilise le bien et verse le loyer', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise loue une machine pendant 3 ans pour 8 000 MAD par mois. Quel est le total des loyers sur 36 mois ?',
                        'explanation' => '36 mois × 8 000 MAD = 288 000 MAD de loyers au total.',
                        'choices' => [
                            ['choice_text' => '96 000 MAD', 'is_correct' => false],
                            ['choice_text' => '216 000 MAD', 'is_correct' => false],
                            ['choice_text' => '288 000 MAD', 'is_correct' => true],
                            ['choice_text' => '360 000 MAD', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelle est la différence entre une Ijarah et une Murabaha ?',
                        'explanation' => 'Avec l’Ijarah, le bien reste au bailleur et on paie un loyer. Avec la Murabaha, le bien est vendu au client avec une marge.',
                        'choices' => [
                            ['choice_text' => 'La Murabaha loue le bien, l’Ijarah le vend avec une marge', 'is_correct' => false],
                            ['choice_text' => 'L’Ijarah est un partenariat en capital, la Murabaha une location', 'is_correct' => false],
                            ['choice_text' => 'L’Ijarah loue l’usage d’un bien, la Murabaha le vend', 'is_correct' => true],
                            ['choice_text' => 'L’Ijarah est un prêt avec intérêt, la Murabaha une assurance', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Dans une Ijarah, que loue-t-on exactement ?',
                        'explanation' => 'On loue l’usage, pas le bien lui-même. C’est pourquoi le bien et la durée doivent être bien identifiés dans le contrat.',
                        'choices' => [
                            ['choice_text' => 'Le bien lui-même, qui change de propriétaire dès la signature', 'is_correct' => false],
                            ['choice_text' => 'Le droit d’utiliser un bien précis pendant une durée donnée', 'is_correct' => true],
                            ['choice_text' => 'Une part du capital de l’entreprise qui exploite le bien', 'is_correct' => false],
                            ['choice_text' => 'Une somme d’argent remboursable avec un supplément', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un contrat d’Ijarah précise le véhicule loué, la durée (24 mois) et le loyer mensuel. Quel problème cette précision réduit-elle ?',
                        'explanation' => 'Quand le bien, la durée et le prix sont clairs, personne n’a de mauvaise surprise : c’est exactement ce que cherche à éviter la règle sur le gharar.',
                        'choices' => [
                            ['choice_text' => 'Le riba, c’est-à-dire l’intérêt ajouté à un prêt', 'is_correct' => false],
                            ['choice_text' => 'Le gharar, c’est-à-dire l’incertitude excessive sur ce qui est loué', 'is_correct' => true],
                            ['choice_text' => 'Le maysir, c’est-à-dire le gain obtenu par un jeu de hasard', 'is_correct' => false],
                            ['choice_text' => 'Le risque de change, c’est-à-dire la variation du cours d’une devise', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une société paie 12 500 MAD par mois pour une Ijarah de 2 ans. Quel montant total de loyers est prévu ?',
                        'explanation' => 'Deux ans représentent 24 mois. Le total est donc 24 × 12 500 = 300 000 MAD.',
                        'choices' => [
                            ['choice_text' => '150 000 MAD', 'is_correct' => false],
                            ['choice_text' => '275 000 MAD', 'is_correct' => false],
                            ['choice_text' => '300 000 MAD', 'is_correct' => true],
                            ['choice_text' => '312 500 MAD', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Lequel de ces exemples est une Ijarah ?',
                        'explanation' => 'Louer un camion pour une durée définie contre un loyer régulier, c’est le cas typique de l’Ijarah.',
                        'choices' => [
                            ['choice_text' => 'Une banque prête de l’argent à un client et lui fait payer un intérêt chaque mois de l’année', 'is_correct' => false],
                            ['choice_text' => 'Une société loue un camion à un transporteur pour 36 mois, avec un loyer mensuel', 'is_correct' => true],
                            ['choice_text' => 'Une entreprise émet une obligation classique à coupon fixe', 'is_correct' => false],
                            ['choice_text' => 'Deux associés mettent chacun du capital dans une société', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pourquoi précise-t-on, dans un contrat de location, qui paie l’entretien et qui répond des dommages ?',
                        'explanation' => 'Sans règle claire, une panne peut mener à un litige. Le contrat doit dire qui supporte quoi.',
                        'choices' => [
                            ['choice_text' => 'Pour que le bien ne subisse aucun dommage pendant la location', 'is_correct' => false],
                            ['choice_text' => 'Pour remplacer le loyer par une part des bénéfices du locataire', 'is_correct' => false],
                            ['choice_text' => 'Pour que chaque partie sache de quoi elle est responsable', 'is_correct' => true],
                            ['choice_text' => 'Pour que le locataire devienne propriétaire dès la première échéance', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce que le loyer rémunère dans une Ijarah ?',
                        'explanation' => 'Le loyer est le prix de l’usage du bien. Il n’est ni un intérêt sur un prêt ni un dividende.',
                        'choices' => [
                            ['choice_text' => 'Le capital prêté par le bailleur, comme un intérêt', 'is_correct' => false],
                            ['choice_text' => 'L’usage du bien, selon les conditions du contrat', 'is_correct' => true],
                            ['choice_text' => 'Une part des bénéfices réalisés par le locataire', 'is_correct' => false],
                            ['choice_text' => 'La propriété du bien, qui passe au locataire', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Sukuk et financement des actifs',
                'description' => 'Découvrir les Sukuk, leur relation avec des actifs ou droits sous-jacents et leurs principales différences avec une obligation conventionnelle.',
                'questions' => [
                    [
                        'question' => 'Que sont les Sukuk ?',
                        'explanation' => 'Un Sukuk est un titre qui représente une part d’un actif, d’un projet ou d’une activité, et non une simple dette.',
                        'choices' => [
                            ['choice_text' => 'Des certificats qui donnent des droits sur des actifs ou des projets conformes à la Sharia', 'is_correct' => true],
                            ['choice_text' => 'Des contrats d’assurance qui indemnisent les souscripteurs lorsqu’un sinistre survient dans l’année', 'is_correct' => false],
                            ['choice_text' => 'Des prêts à taux variable accordés par une banque à des entreprises', 'is_correct' => false],
                            ['choice_text' => 'Des actions qui donnent un droit de vote dans une société cotée', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'En quoi un Sukuk diffère-t-il d’une obligation classique ?',
                        'explanation' => 'Celui qui achète une obligation prête de l’argent et touche des intérêts. Celui qui achète un Sukuk détient un droit sur un actif et touche une part de ses revenus.',
                        'choices' => [
                            ['choice_text' => 'Le Sukuk donne droit à des intérêts, l’obligation à une part d’actifs', 'is_correct' => false],
                            ['choice_text' => 'L’obligation donne droit à des intérêts sur un prêt, le Sukuk à des droits liés à des actifs', 'is_correct' => true],
                            ['choice_text' => 'Le Sukuk est réservé aux États, l’obligation aux entreprises', 'is_correct' => false],
                            ['choice_text' => 'Le Sukuk est un titre de propriété de toute l’entreprise émettrice, comme une action ordinaire cotée', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un Sukuk finance un immeuble de bureaux. D’où viennent les revenus versés aux investisseurs ?',
                        'explanation' => 'Les investisseurs sont payés grâce à ce que rapporte l’actif financé, ici les loyers des bureaux.',
                        'choices' => [
                            ['choice_text' => 'Des loyers ou de l’exploitation de l’immeuble', 'is_correct' => true],
                            ['choice_text' => 'D’un intérêt fixé sur la somme prêtée à l’émetteur', 'is_correct' => false],
                            ['choice_text' => 'De la hausse du cours de bourse, sans lien avec l’immeuble', 'is_correct' => false],
                            ['choice_text' => 'D’une aide de l’État versée aux investisseurs', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Qui peut émettre des Sukuk ?',
                        'explanation' => 'Les émetteurs de Sukuk sont des organisations qui cherchent des fonds pour un projet ou un actif : États, banques, entreprises.',
                        'choices' => [
                            ['choice_text' => 'Les banques centrales, pour fixer le taux directeur et surveiller les banques', 'is_correct' => false],
                            ['choice_text' => 'Les associations de quartier, pour distribuer des dons', 'is_correct' => false],
                            ['choice_text' => 'Un État, une banque ou une entreprise qui veut financer un projet licite', 'is_correct' => true],
                            ['choice_text' => 'Les sociétés de Takaful, pour payer les sinistres de leurs participants', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un Sukuk a une valeur nominale totale de 1 000 000 MAD et 10 000 certificats égaux sont émis. Quelle valeur nominale correspond à un certificat ?',
                        'explanation' => 'La valeur nominale par certificat est 1 000 000 ÷ 10 000 = 100 MAD.',
                        'choices' => [
                            ['choice_text' => '10 MAD', 'is_correct' => false],
                            ['choice_text' => '100 MAD', 'is_correct' => true],
                            ['choice_text' => '1 000 MAD', 'is_correct' => false],
                            ['choice_text' => '10 000 MAD', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'À quoi sert de connaître l’actif qui se trouve derrière un Sukuk ?',
                        'explanation' => 'Sans connaître l’actif, on ne sait pas ce que l’on possède ni ce qui produit les revenus.',
                        'choices' => [
                            ['choice_text' => 'À comprendre quels droits on détient et d’où viennent les revenus', 'is_correct' => true],
                            ['choice_text' => 'À être certain que l’actif gardera sa valeur', 'is_correct' => false],
                            ['choice_text' => 'À connaître le taux d’intérêt appliqué au prêt', 'is_correct' => false],
                            ['choice_text' => 'À empêcher la revente du Sukuk à un autre investisseur avant l’échéance', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Samira achète un Sukuk. Quel risque garde-t-elle malgré la conformité à la Sharia ?',
                        'explanation' => 'Être conforme à la Sharia ne protège pas des pertes. La valeur de l’actif, les loyers et la situation de l’émetteur peuvent évoluer mal.',
                        'choices' => [
                            ['choice_text' => 'Celui de devoir verser un intérêt à l’émetteur', 'is_correct' => false],
                            ['choice_text' => 'Les revenus ou la valeur de l’actif peuvent baisser', 'is_correct' => true],
                            ['choice_text' => 'Aucun, car un produit conforme à la Sharia est sans risque', 'is_correct' => false],
                            ['choice_text' => 'Celui d’être obligée de revendre ses certificats au prix de départ', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Avant d’acheter un Sukuk, que doit regarder Youssef en priorité ?',
                        'explanation' => 'Comme pour tout placement, il faut savoir ce que l’on achète, ce que ça rapporte et ce que l’on peut perdre.',
                        'choices' => [
                            ['choice_text' => 'Les actifs sous-jacents, les revenus attendus et les risques', 'is_correct' => true],
                            ['choice_text' => 'Le rendement affiché le plus élevé parmi les produits du marché', 'is_correct' => false],
                            ['choice_text' => 'Le nombre de certificats déjà vendus', 'is_correct' => false],
                            ['choice_text' => 'La réputation de l’émetteur sur les réseaux sociaux', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Karim détient 1 000 des 10 000 certificats d’un Sukuk adossé à un immeuble. Quelle part des loyers distribués lui revient, en principe ?',
                        'explanation' => 'Il détient 1 000 ÷ 10 000 = 10 % des certificats, donc environ 10 % des revenus distribués.',
                        'choices' => [
                            ['choice_text' => '10 %', 'is_correct' => true],
                            ['choice_text' => '1 %', 'is_correct' => false],
                            ['choice_text' => '50 %', 'is_correct' => false],
                            ['choice_text' => '90 %', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Les loyers de l’immeuble financé par un Sukuk chutent. Que peut-il arriver à Karim, qui détient des certificats ?',
                        'explanation' => 'Les revenus des investisseurs dépendent de ce que rapporte l’actif. Si les loyers baissent, les sommes distribuées peuvent baisser aussi.',
                        'choices' => [
                            ['choice_text' => 'L’immeuble est vendu et il est remboursé à 100 %', 'is_correct' => false],
                            ['choice_text' => 'Les revenus qu’il reçoit peuvent baisser', 'is_correct' => true],
                            ['choice_text' => 'Ses certificats sont convertis en actions', 'is_correct' => false],
                            ['choice_text' => 'La banque lui verse un complément pour maintenir son rendement', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Takaful et gestion mutualisée des risques',
                'description' => 'Comprendre la logique du Takaful, la mutualisation des risques, les contributions des participants et les différences générales avec l\'assurance conventionnelle.',
                'questions' => [
                    [
                        'question' => 'Quel principe est au cœur du Takaful ?',
                        'explanation' => 'Le Takaful fonctionne comme une entraide organisée : chacun cotise et le fonds aide ceux qui subissent un sinistre.',
                        'choices' => [
                            ['choice_text' => 'Les participants mutualisent le risque et s’entraident, selon la Sharia', 'is_correct' => true],
                            ['choice_text' => 'Un investisseur place son capital dans un fonds et reçoit un rendement garanti', 'is_correct' => false],
                            ['choice_text' => 'Un assureur prend le risque en échange d’une prime qu’il garde', 'is_correct' => false],
                            ['choice_text' => 'Un prêteur avance des fonds aux participants avec intérêt', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Dans le Takaful, qu’est-ce que la mutualisation ?',
                        'explanation' => 'Les cotisations de tous forment un fonds. Quand un événement couvert arrive, le fonds indemnise le participant touché.',
                        'choices' => [
                            ['choice_text' => 'L’État rembourse les pertes de chaque participant', 'is_correct' => false],
                            ['choice_text' => 'Chaque participant place son argent sur un compte à rendement garanti', 'is_correct' => false],
                            ['choice_text' => 'La société garde les cotisations comme bénéfice, quel que soit le sinistre', 'is_correct' => false],
                            ['choice_text' => 'Chacun cotise à un fonds commun qui aide ceux qui subissent un sinistre', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Karim verse 1 200 MAD par an à un programme Takaful. À quoi sert cette contribution ?',
                        'explanation' => 'La contribution va dans le fonds du programme, qui sert à aider les participants en cas d’événement prévu au contrat.',
                        'choices' => [
                            ['choice_text' => 'À constituer une épargne personnelle rémunérée à un taux fixe annuel', 'is_correct' => false],
                            ['choice_text' => 'À rembourser un prêt accordé par la société de Takaful', 'is_correct' => false],
                            ['choice_text' => 'À alimenter le fonds commun qui indemnise les participants', 'is_correct' => true],
                            ['choice_text' => 'À acheter une part du capital de la société de Takaful', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Dans un contrat Takaful auto, quel événement peut être indemnisé ?',
                        'explanation' => 'Le Takaful couvre les risques définis au contrat : véhicule, santé, biens. Il ne couvre pas les pertes de placement.',
                        'choices' => [
                            ['choice_text' => 'Une baisse de la bourse sur les actions de l’assuré', 'is_correct' => false],
                            ['choice_text' => 'Une dette que l’assuré n’arrive pas à rembourser', 'is_correct' => false],
                            ['choice_text' => 'Un placement qui rapporte moins que prévu', 'is_correct' => false],
                            ['choice_text' => 'Un accident de la voiture couvert par le contrat', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Quel est l’avantage de la mutualisation des risques ?',
                        'explanation' => 'Une perte importante pèse lourd pour une seule personne, mais elle est supportable quand beaucoup de personnes cotisent.',
                        'choices' => [
                            ['choice_text' => 'Les sinistres n’arrivent plus, car le fonds les empêche', 'is_correct' => false],
                            ['choice_text' => 'Le coût d’un sinistre est réparti entre les participants', 'is_correct' => true],
                            ['choice_text' => 'Le fonds est placé en bourse et ses gains sont versés à tous', 'is_correct' => false],
                            ['choice_text' => 'Chaque participant récupère plus que ce qu’il a versé', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Que doit préciser un contrat Takaful avant la signature ?',
                        'explanation' => 'Chaque participant doit savoir ce qu’il paie, ce qui est couvert et comment le fonds est géré. Cela évite le gharar.',
                        'choices' => [
                            ['choice_text' => 'Le prix de revente du contrat sur le marché boursier', 'is_correct' => false],
                            ['choice_text' => 'Le rendement que la société promet de verser aux participants en fin d’année', 'is_correct' => false],
                            ['choice_text' => 'La marge que la société réalisera sur chaque participant', 'is_correct' => false],
                            ['choice_text' => 'Les cotisations, les risques couverts et le fonctionnement du fonds', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Que veut dire « Takaful » ?',
                        'explanation' => 'Le mot vient de l’idée de garantie réciproque. Les participants se protègent ensemble contre certains risques.',
                        'choices' => [
                            ['choice_text' => 'Un placement dont le capital est garanti par la banque', 'is_correct' => false],
                            ['choice_text' => 'Un certificat représentant un droit sur un actif', 'is_correct' => false],
                            ['choice_text' => 'Une garantie mutuelle : les membres se portent garants', 'is_correct' => true],
                            ['choice_text' => 'Un partage des bénéfices d’une entreprise entre associés', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce qui distingue le Takaful d’une assurance classique ?',
                        'explanation' => 'Dans le Takaful, l’idée est la coopération entre participants. Dans l’assurance classique, l’assureur prend le risque en échange d’une prime.',
                        'choices' => [
                            ['choice_text' => 'La société de Takaful garantit un rendement fixe à chaque participant', 'is_correct' => false],
                            ['choice_text' => 'Il ne couvre que les décès, alors que l’assurance classique couvre tous les autres risques', 'is_correct' => false],
                            ['choice_text' => 'Les participants se prêtent de l’argent entre eux avec un intérêt', 'is_correct' => false],
                            ['choice_text' => 'Les participants s’entraident dans un fonds commun, sans assureur qui prend le risque', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Un programme Takaful compte 500 participants qui versent chacun 400 MAD. Quel est le total des contributions collectées ?',
                        'explanation' => '500 × 400 MAD = 200 000 MAD de contributions au total.',
                        'choices' => [
                            ['choice_text' => '20 000 MAD', 'is_correct' => false],
                            ['choice_text' => '100 000 MAD', 'is_correct' => false],
                            ['choice_text' => '200 000 MAD', 'is_correct' => true],
                            ['choice_text' => '400 000 MAD', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Que doit respecter la société qui gère les fonds d’un Takaful ?',
                        'explanation' => 'Les fonds appartiennent au programme. Leur gestion et leur placement doivent suivre le contrat et les principes de la Sharia.',
                        'choices' => [
                            ['choice_text' => 'Aucune règle particulière, tant que les sinistres sont payés', 'is_correct' => false],
                            ['choice_text' => 'Les règles du contrat et le cadre de la Sharia', 'is_correct' => true],
                            ['choice_text' => 'L’objectif de maximiser le bénéfice de la société de gestion', 'is_correct' => false],
                            ['choice_text' => 'L’obligation de placer les fonds en obligations classiques à intérêt', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Karim a cotisé trois ans à un Takaful sans déclarer de sinistre. Peut-il compter récupérer plus que ce qu’il a versé ?',
                        'explanation' => 'Le Takaful sert à se couvrir contre un risque. Ce que Karim touche dépend des sinistres et du résultat du fonds, pas d’un rendement promis.',
                        'choices' => [
                            ['choice_text' => 'Non, le Takaful est une protection, pas un placement à rendement garanti', 'is_correct' => true],
                            ['choice_text' => 'Oui, le fonds rend à chaque participant ses cotisations avec des intérêts', 'is_correct' => false],
                            ['choice_text' => 'Oui, car la société de Takaful s’engage à verser un rendement chaque année', 'is_correct' => false],
                            ['choice_text' => 'Non, car la société de Takaful garde les cotisations non utilisées', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Banque islamique et opérations de financement',
                'description' => 'Appliquer les notions de base à des situations bancaires : financement du commerce, partage des risques, contrats et choix d\'une structure adaptée.',
                'questions' => [
                    [
                        'question' => 'Youssef veut financer du matériel pour son atelier et sa banque islamique lui propose une Murabaha. Que fait la banque ?',
                        'explanation' => 'La banque achète d’abord le matériel, puis le revend à Youssef à un prix qui comprend sa marge.',
                        'choices' => [
                            ['choice_text' => 'Elle lui loue le matériel et reste propriétaire à la fin du contrat', 'is_correct' => false],
                            ['choice_text' => 'Elle lui prête la somme et reçoit un intérêt chaque mois', 'is_correct' => false],
                            ['choice_text' => 'Elle achète le matériel puis le lui revend avec une marge convenue', 'is_correct' => true],
                            ['choice_text' => 'Elle devient propriétaire de tout l’atelier', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise veut utiliser une machine pendant cinq ans sans en devenir propriétaire tout de suite. Quel contrat convient le mieux ?',
                        'explanation' => 'L’Ijarah met un bien à disposition pour une durée donnée contre un loyer, sans transfert immédiat de propriété.',
                        'choices' => [
                            ['choice_text' => 'Ijarah', 'is_correct' => true],
                            ['choice_text' => 'Takaful', 'is_correct' => false],
                            ['choice_text' => 'Murabaha', 'is_correct' => false],
                            ['choice_text' => 'Mudarabah', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Samira sait gérer une boulangerie mais n’a pas d’argent. Un investisseur apporte le capital et ils se partagent le profit. Quel contrat est utilisé ?',
                        'explanation' => 'Un apporte le capital, l’autre le travail, et le profit est partagé : c’est la Mudarabah.',
                        'choices' => [
                            ['choice_text' => 'Musharakah', 'is_correct' => false],
                            ['choice_text' => 'Mudarabah', 'is_correct' => true],
                            ['choice_text' => 'Murabaha', 'is_correct' => false],
                            ['choice_text' => 'Ijarah', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Youssef et Karim mettent chacun de l’argent dans un projet immobilier et se partagent le résultat. De quel contrat s’agit-il ?',
                        'explanation' => 'Quand plusieurs partenaires apportent du capital au même projet, c’est une Musharakah.',
                        'choices' => [
                            ['choice_text' => 'Takaful', 'is_correct' => false],
                            ['choice_text' => 'Ijarah', 'is_correct' => false],
                            ['choice_text' => 'Musharakah', 'is_correct' => true],
                            ['choice_text' => 'Murabaha', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce que la zakat ?',
                        'explanation' => 'La zakat est l’un des piliers de l’islam : on donne une petite part de sa richesse (2,5 % en général) à des personnes dans le besoin, une fois le seuil atteint.',
                        'choices' => [
                            ['choice_text' => 'Un impôt annuel sur les bénéfices que les banques islamiques versent à l’État', 'is_correct' => false],
                            ['choice_text' => 'Une commission payée à la banque pour gérer un compte', 'is_correct' => false],
                            ['choice_text' => 'Une aumône annuelle obligatoire, due au-delà d’un certain seuil de richesse', 'is_correct' => true],
                            ['choice_text' => 'Un don libre que l’on fait quand on le souhaite', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pour juger une opération de finance islamique, que faut-il lire en premier ?',
                        'explanation' => 'Ce qui compte, c’est ce que dit le contrat : quel bien, quels engagements, quels flux d’argent.',
                        'choices' => [
                            ['choice_text' => 'La brochure commerciale de la banque, avec les rendements annoncés', 'is_correct' => false],
                            ['choice_text' => 'Le bilan comptable de la banque pour l’année passée', 'is_correct' => false],
                            ['choice_text' => 'Le nom du produit, s’il contient le mot « islamique »', 'is_correct' => false],
                            ['choice_text' => 'Le contrat, avec le bien, les obligations et les paiements', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Une banque islamique reçoit 300 000 MAD à investir dans une Mudarabah. Le contrat prévoit 65 % du profit pour l’investisseur et 35 % pour le gestionnaire. Si le profit est de 40 000 MAD, quelle part revient au gestionnaire ?',
                        'explanation' => '35 % de 40 000 MAD = 14 000 MAD. La part du gestionnaire est donc de 14 000 MAD.',
                        'choices' => [
                            ['choice_text' => '12 000 MAD', 'is_correct' => false],
                            ['choice_text' => '14 000 MAD', 'is_correct' => true],
                            ['choice_text' => '20 000 MAD', 'is_correct' => false],
                            ['choice_text' => '26 000 MAD', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce qui distingue une banque islamique d’une banque classique dans ses financements ?',
                        'explanation' => 'La banque islamique gagne de l’argent, mais par la vente, la location ou le partage des résultats, et non par l’intérêt.',
                        'choices' => [
                            ['choice_text' => 'Elle ne réalise aucun bénéfice sur ses opérations', 'is_correct' => false],
                            ['choice_text' => 'Elle est gérée directement par l’État', 'is_correct' => false],
                            ['choice_text' => 'Elle ne finance que les particuliers', 'is_correct' => false],
                            ['choice_text' => 'Elle utilise des contrats conformes à la Sharia', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Une banque finance un bien par Murabaha. Le coût est de 150 000 MAD et la marge annoncée est de 18 000 MAD. Quel est le prix de vente ?',
                        'explanation' => 'Le prix de vente est égal au coût plus la marge : 150 000 + 18 000 = 168 000 MAD.',
                        'choices' => [
                            ['choice_text' => '132 000 MAD', 'is_correct' => false],
                            ['choice_text' => '150 000 MAD', 'is_correct' => false],
                            ['choice_text' => '168 000 MAD', 'is_correct' => true],
                            ['choice_text' => '178 000 MAD', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Karim propose un projet de casino en ligne, avec un contrat de location parfaitement rédigé. Une banque islamique peut-elle le financer ?',
                        'explanation' => 'Le contrat et l’activité doivent tous deux être conformes. Un casino reste un jeu de hasard (maysir), quel que soit le contrat.',
                        'choices' => [
                            ['choice_text' => 'Oui : tout projet rentable peut être financé', 'is_correct' => false],
                            ['choice_text' => 'Oui : un contrat de location suffit à rendre l’opération conforme', 'is_correct' => false],
                            ['choice_text' => 'Non : un bon contrat ne suffit pas, l’activité doit être licite', 'is_correct' => true],
                            ['choice_text' => 'Non : une banque islamique ne peut pas utiliser de contrat de location', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Entre Murabaha, Ijarah et Mudarabah, sur quoi la banque s’appuie-t-elle pour choisir ?',
                        'explanation' => 'Murabaha pour acheter un bien, Ijarah pour l’utiliser, Mudarabah pour financer un projet avec partage du profit.',
                        'choices' => [
                            ['choice_text' => 'Sur la marge la plus élevée possible pour la banque', 'is_correct' => false],
                            ['choice_text' => 'Sur l’ancienneté du client, qui détermine le contrat', 'is_correct' => false],
                            ['choice_text' => 'Sur le contrat le plus simple et le plus rapide à rédiger pour ses juristes', 'is_correct' => false],
                            ['choice_text' => 'Sur la nature du besoin : acheter, utiliser ou financer un projet', 'is_correct' => true],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Repères pratiques : comparer les principaux contrats islamiques',
                'description' => 'Réviser les différences entre Murabaha, Mudarabah, Musharakah, Ijarah, Sukuk et Takaful à travers des mini-cas et des comparaisons.',
                'questions' => [
                    [
                        'question' => 'Une institution achète un ordinateur 30 000 MAD et le revend 34 500 MAD au client, avec paiement différé. Quel contrat est-ce ?',
                        'explanation' => 'Achat à 30 000 MAD, revente à 34 500 MAD : une vente avec une marge de 4 500 MAD connue du client. C’est une Murabaha.',
                        'choices' => [
                            ['choice_text' => 'Takaful', 'is_correct' => false],
                            ['choice_text' => 'Murabaha', 'is_correct' => true],
                            ['choice_text' => 'Mudarabah', 'is_correct' => false],
                            ['choice_text' => 'Ijarah', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Youssef loue un local commercial pendant 4 ans contre un loyer mensuel fixé à l’avance. Quel contrat est utilisé ?',
                        'explanation' => 'On loue l’usage d’un bien pour une durée donnée contre un loyer : Ijarah.',
                        'choices' => [
                            ['choice_text' => 'Mudarabah', 'is_correct' => false],
                            ['choice_text' => 'Musharakah', 'is_correct' => false],
                            ['choice_text' => 'Ijarah', 'is_correct' => true],
                            ['choice_text' => 'Murabaha', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Samira apporte tout le capital, Karim gère le projet, et les profits sont partagés selon un pourcentage convenu. Quel contrat est-ce ?',
                        'explanation' => 'Un partenaire met le capital, l’autre le travail : c’est la Mudarabah.',
                        'choices' => [
                            ['choice_text' => 'Sukuk', 'is_correct' => false],
                            ['choice_text' => 'Ijarah', 'is_correct' => false],
                            ['choice_text' => 'Musharakah', 'is_correct' => false],
                            ['choice_text' => 'Mudarabah', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Deux associés mettent 80 000 MAD et 120 000 MAD dans une même activité. De quel contrat s’agit-il ?',
                        'explanation' => 'Plusieurs partenaires qui apportent du capital au même projet : c’est une Musharakah.',
                        'choices' => [
                            ['choice_text' => 'Takaful', 'is_correct' => false],
                            ['choice_text' => 'Murabaha', 'is_correct' => false],
                            ['choice_text' => 'Musharakah', 'is_correct' => true],
                            ['choice_text' => 'Ijarah', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Les participants cotisent à un fonds commun qui indemnise certains sinistres. De quel produit s’agit-il ?',
                        'explanation' => 'Un fonds alimenté par les cotisations de tous pour indemniser les sinistres : c’est le Takaful.',
                        'choices' => [
                            ['choice_text' => 'Mudarabah', 'is_correct' => false],
                            ['choice_text' => 'Murabaha', 'is_correct' => false],
                            ['choice_text' => 'Ijarah', 'is_correct' => false],
                            ['choice_text' => 'Takaful', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Des investisseurs détiennent des certificats donnant droit aux revenus d’un portefeuille d’actifs, dans un cadre conforme à la Sharia. Quel produit est-ce ?',
                        'explanation' => 'Des certificats adossés à des actifs qui produisent des revenus : ce sont des Sukuk.',
                        'choices' => [
                            ['choice_text' => 'Murabaha', 'is_correct' => false],
                            ['choice_text' => 'Sukuk', 'is_correct' => true],
                            ['choice_text' => 'Takaful', 'is_correct' => false],
                            ['choice_text' => 'Mudarabah', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel duo associe correctement chaque contrat à sa fonction principale ?',
                        'explanation' => 'À retenir : Murabaha, on achète un bien avec une marge ; Ijarah, on loue son usage.',
                        'choices' => [
                            ['choice_text' => 'Murabaha : vente avec marge ; Ijarah : location de l’usage', 'is_correct' => true],
                            ['choice_text' => 'Murabaha : partage de profit ; Ijarah : vente avec marge', 'is_correct' => false],
                            ['choice_text' => 'Murabaha : partenariat en capital ; Ijarah : mutualisation des risques', 'is_correct' => false],
                            ['choice_text' => 'Murabaha : location de l’usage ; Ijarah : vente avec marge', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel duo associe correctement Mudarabah et Musharakah ?',
                        'explanation' => 'Dans la Mudarabah, les rôles sont séparés : capital d’un côté, gestion de l’autre. Dans la Musharakah, les associés mettent tous du capital.',
                        'choices' => [
                            ['choice_text' => 'Mudarabah : un apporte le capital, l’autre gère ; Musharakah : tous apportent du capital', 'is_correct' => true],
                            ['choice_text' => 'Mudarabah : tous apportent du capital ; Musharakah : l’un apporte le capital, l’autre gère', 'is_correct' => false],
                            ['choice_text' => 'Mudarabah : vente avec marge ; Musharakah : location de l’usage', 'is_correct' => false],
                            ['choice_text' => 'Mudarabah : certificats d’actifs ; Musharakah : mutualisation des risques', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel point commun trouve-t-on dans la plupart des financements islamiques ?',
                        'explanation' => 'Vente, location ou partenariat : dans tous les cas, il y a une activité licite et un actif ou un service derrière l’argent.',
                        'choices' => [
                            ['choice_text' => 'Une absence de contrat écrit, remplacée par la confiance entre les parties', 'is_correct' => false],
                            ['choice_text' => 'Un rendement fixe annoncé dès le départ, quel que soit le résultat', 'is_correct' => false],
                            ['choice_text' => 'Une activité licite, un contrat clair et un lien avec un actif ou un service réel', 'is_correct' => true],
                            ['choice_text' => 'Un prêt d’argent rémunéré par un taux fixe, comme dans une banque classique', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Youssef a déjà choisi sa machine et demande à la banque de la financer. Murabaha ou Mudarabah ?',
                        'explanation' => 'Pour acheter un bien précis, on utilise la Murabaha. La Mudarabah sert à financer un projet par un apport de capital géré par un partenaire.',
                        'choices' => [
                            ['choice_text' => 'Les deux, car ils sont interchangeables pour un bien déjà choisi', 'is_correct' => false],
                            ['choice_text' => 'Mudarabah : la banque lui prête l’argent et se rembourse avec intérêts', 'is_correct' => false],
                            ['choice_text' => 'Murabaha, mais la banque ne doit pas acheter elle-même la machine', 'is_correct' => false],
                            ['choice_text' => 'Murabaha : la banque achète la machine puis la lui revend', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Quels types d’opérations le gharar et le maysir cherchent-ils à écarter ?',
                        'explanation' => 'Le gharar vise l’incertitude excessive sur l’objet ou le prix, le maysir les gains de type jeu. Un bénéfice commercial ou un paiement échelonné n’est pas visé.',
                        'choices' => [
                            ['choice_text' => 'Les bénéfices réalisés par une activité commerciale ordinaire', 'is_correct' => false],
                            ['choice_text' => 'Les opérations trop incertaines, floues ou proches d’un jeu', 'is_correct' => true],
                            ['choice_text' => 'Les paiements échelonnés dans une vente à crédit', 'is_correct' => false],
                            ['choice_text' => 'Les variations normales de prix d’un bien réel', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Étude de cas : choisir une structure conforme à la Sharia',
                'description' => 'Résoudre des mini-cas de finance islamique en sélectionnant une structure cohérente avec le besoin économique et les principes fondamentaux.',
                'questions' => [
                    [
                        'question' => 'Karim, gérant d’une PME, veut un camion précis. La banque l’achète puis le lui revend avec une marge connue, payable en plusieurs fois. Quel montage est-ce ?',
                        'explanation' => 'La banque achète un bien précis puis le revend avec une marge annoncée : c’est la Murabaha.',
                        'choices' => [
                            ['choice_text' => 'Mudarabah', 'is_correct' => false],
                            ['choice_text' => 'Musharakah', 'is_correct' => false],
                            ['choice_text' => 'Murabaha', 'is_correct' => true],
                            ['choice_text' => 'Takaful', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une imprimerie a besoin d’une presse pendant quatre ans, sans vouloir l’acheter. Quel contrat convient ?',
                        'explanation' => 'Elle veut seulement utiliser la presse sur une durée donnée : c’est une location, donc une Ijarah.',
                        'choices' => [
                            ['choice_text' => 'Ijarah', 'is_correct' => true],
                            ['choice_text' => 'Musharakah', 'is_correct' => false],
                            ['choice_text' => 'Sukuk', 'is_correct' => false],
                            ['choice_text' => 'Murabaha', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une jeune ingénieure a une idée rentable et sait gérer, mais n’a pas de capital. Un investisseur fournit les fonds et ils partagent le profit selon un pourcentage convenu. Quel contrat convient ?',
                        'explanation' => 'Le capital vient de l’investisseur, la gestion de l’ingénieure, et le profit est partagé : Mudarabah.',
                        'choices' => [
                            ['choice_text' => 'Takaful', 'is_correct' => false],
                            ['choice_text' => 'Musharakah', 'is_correct' => false],
                            ['choice_text' => 'Ijarah', 'is_correct' => false],
                            ['choice_text' => 'Mudarabah', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Deux investisseurs veulent chacun mettre du capital dans une résidence destinée à la location et se partager les résultats. Quelle structure leur convient ?',
                        'explanation' => 'Les deux apportent du capital au même projet et partagent le résultat : c’est une Musharakah.',
                        'choices' => [
                            ['choice_text' => 'Musharakah', 'is_correct' => true],
                            ['choice_text' => 'Ijarah', 'is_correct' => false],
                            ['choice_text' => 'Mudarabah', 'is_correct' => false],
                            ['choice_text' => 'Murabaha', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une association souhaite protéger ses membres contre certains dommages en mettant en commun leurs contributions. Quel concept correspond le mieux ?',
                        'explanation' => 'La mutualisation de contributions pour aider les participants en cas d’événement couvert correspond au principe général du Takaful.',
                        'choices' => [
                            ['choice_text' => 'Sukuk', 'is_correct' => false],
                            ['choice_text' => 'Takaful', 'is_correct' => true],
                            ['choice_text' => 'Murabaha', 'is_correct' => false],
                            ['choice_text' => 'Ijarah', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un promoteur immobilier veut lever des fonds en émettant des certificats qui donnent droit aux revenus d’un ensemble d’immeubles. Quel instrument utilise-t-il ?',
                        'explanation' => 'Des certificats adossés à des immeubles qui produisent des revenus : des Sukuk.',
                        'choices' => [
                            ['choice_text' => 'Musharakah', 'is_correct' => false],
                            ['choice_text' => 'Murabaha', 'is_correct' => false],
                            ['choice_text' => 'Takaful', 'is_correct' => false],
                            ['choice_text' => 'Sukuk', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Un vendeur décrit son bien de façon vague : ni prix précis, ni caractéristiques claires. Quel principe de la finance islamique est en cause ?',
                        'explanation' => 'Quand l’objet et le prix sont flous, l’incertitude est trop forte. C’est le gharar.',
                        'choices' => [
                            ['choice_text' => 'Le principe de riba', 'is_correct' => false],
                            ['choice_text' => 'Le principe de maysir', 'is_correct' => false],
                            ['choice_text' => 'Le principe de gharar', 'is_correct' => true],
                            ['choice_text' => 'Le principe de la zakat', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une société propose un gain qui dépend du résultat d’un jeu de hasard, sans activité économique derrière. Quel principe est en cause ?',
                        'explanation' => 'Un gain obtenu par le hasard, comme dans un jeu, relève du maysir, qui est interdit.',
                        'choices' => [
                            ['choice_text' => 'La zakat', 'is_correct' => false],
                            ['choice_text' => 'Le riba', 'is_correct' => false],
                            ['choice_text' => 'Le Takaful', 'is_correct' => false],
                            ['choice_text' => 'Le maysir', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Youssef remet 50 000 MAD à une société qui lui promet 6 % par an, sans vente, location ni partenariat derrière. Quel sujet de conformité se pose d’abord ?',
                        'explanation' => 'Un rendement fixe sur de l’argent prêté, c’est la définition du riba. Aucune vente, location ou association ne justifie ce gain.',
                        'choices' => [
                            ['choice_text' => 'Le maysir, car le gain dépend d’un jeu de hasard', 'is_correct' => false],
                            ['choice_text' => 'Le riba, car le rendement fixe vient d’un prêt d’argent', 'is_correct' => true],
                            ['choice_text' => 'Le gharar, car le bien vendu n’est pas décrit', 'is_correct' => false],
                            ['choice_text' => 'La zakat, car il faut déclarer ce rendement chaque année à l’État', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quelles informations aident le plus une banque à analyser un financement islamique avant de le lancer ?',
                        'explanation' => 'Pour savoir si un financement est sain et conforme, il faut regarder ce qui est financé, par quel contrat, avec quels flux et quels risques.',
                        'choices' => [
                            ['choice_text' => 'L’activité financée, le contrat, l’actif, les flux et les risques', 'is_correct' => true],
                            ['choice_text' => 'Le rendement espéré et la durée du financement', 'is_correct' => false],
                            ['choice_text' => 'Le prix du produit comparé à celui des concurrents', 'is_correct' => false],
                            ['choice_text' => 'La taille du réseau d’agences et le budget de publicité de la banque', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Youssef compare deux placements islamiques. Le premier promet un gros profit mais décrit mal ses actifs. Le second décrit clairement ses actifs, ses flux et les obligations des parties. Que doit-il faire en priorité ?',
                        'explanation' => 'Un contrat clair permet de comprendre ses droits et ses risques. Le rendement annoncé ne suffit pas pour juger.',
                        'choices' => [
                            ['choice_text' => 'Choisir l’un ou l’autre, car le mot « islamique » garantit la conformité', 'is_correct' => false],
                            ['choice_text' => 'Choisir le premier, car le rendement le plus élevé est le meilleur signe', 'is_correct' => false],
                            ['choice_text' => 'Vérifier la clarté du contrat et des actifs avant le rendement annoncé', 'is_correct' => true],
                            ['choice_text' => 'Comparer d’abord les frais de dossier, le reste étant secondaire', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un produit est présenté comme « conforme à la Sharia ». Quel est le bon réflexe ?',
                        'explanation' => 'Une étiquette ne prouve rien. Il faut comprendre l’activité, le contrat, les actifs et les flux.',
                        'choices' => [
                            ['choice_text' => 'Faire confiance au nom du produit, puisqu’il est annoncé conforme', 'is_correct' => false],
                            ['choice_text' => 'Lire seulement la brochure commerciale, sans le contrat', 'is_correct' => false],
                            ['choice_text' => 'Considérer comme conforme tout produit qui est rentable', 'is_correct' => false],
                            ['choice_text' => 'Regarder la structure réelle du produit, pas l’étiquette', 'is_correct' => true],
                        ],
                    ],
                ],
            ],
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
                        'explanation' => $questionData['explanation'] ?? null,
                    ]
                );

                $question->choices()->delete();

                foreach ($questionData['choices'] as $choiceIndex => $choice) {
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
