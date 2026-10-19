<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class PersonalFinanceBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'personal-finance')->firstOrFail();

        $quizSettings = [
            ['duration' => 22, 'passing_score' => 55],
            ['duration' => 24, 'passing_score' => 58],
            ['duration' => 26, 'passing_score' => 60],
            ['duration' => 27, 'passing_score' => 60],
            ['duration' => 30, 'passing_score' => 60],
            ['duration' => 28, 'passing_score' => 58],
            ['duration' => 29, 'passing_score' => 60],
            ['duration' => 31, 'passing_score' => 62],
            ['duration' => 25, 'passing_score' => 57],
            ['duration' => 34, 'passing_score' => 62],
        ];

        $quizzes = [
            [
                'title' => 'Construire un budget qui tient dans la vraie vie',
                'description' => 'Budget, revenus, dépenses fixes et variables, arbitrages et suivi mensuel.',
                'questions' => [
                    [
                        'question' => 'Samira reçoit 7 500 MAD par mois. Elle paie 2 800 MAD de loyer, 900 MAD pour les courses, 450 MAD de transport et environ 650 MAD de loisirs. Combien lui reste-t-il avant les autres dépenses ?',
                        'explanation' => 'On additionne les dépenses indiquées : 2 800 + 900 + 450 + 650 = 4 800 MAD. Il reste donc 7 500 - 4 800 = 2 700 MAD. Ce montant doit encore couvrir les dépenses qui ne figurent pas dans la liste.',
                        'choices' => [
                            ['choice_text' => '2 350 MAD', 'is_correct' => false],
                            ['choice_text' => '2 700 MAD', 'is_correct' => true],
                            ['choice_text' => '2 950 MAD', 'is_correct' => false],
                            ['choice_text' => '12 300 MAD', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Les dépenses d’un ménage dépassent ses revenus de 400 MAD chaque mois. Que faut-il faire en premier ?',
                        'explanation' => 'Un déficit qui se répète chaque mois est un signal d’alerte. Avant d’emprunter ou de prendre des risques, il faut savoir d’où vient l’écart, puis agir sur les dépenses ou sur les revenus.',
                        'choices' => [
                            ['choice_text' => 'Repérer les postes de dépenses qui créent le déficit', 'is_correct' => true],
                            ['choice_text' => 'Placer 400 MAD en Bourse pour rattraper la différence', 'is_correct' => false],
                            ['choice_text' => 'Contracter un crédit à la consommation pour couvrir l’écart', 'is_correct' => false],
                            ['choice_text' => 'Attendre une hausse de salaire avant de changer quoi que ce soit', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Parmi ces dépenses, laquelle est variable ?',
                        'explanation' => 'Le restaurant dépend de tes envies du mois : tu peux y aller deux fois ou dix fois. Le loyer, la mensualité de prêt et l’assurance sont fixés par contrat.',
                        'choices' => [
                            ['choice_text' => 'La mensualité d’un prêt immobilier', 'is_correct' => false],
                            ['choice_text' => 'La prime annuelle d’assurance auto', 'is_correct' => false],
                            ['choice_text' => 'Les sorties au restaurant', 'is_correct' => true],
                            ['choice_text' => 'Le loyer du logement', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Youssef veut suivre son budget sans y passer ses soirées. Quelle méthode est la plus simple pour démarrer ?',
                        'explanation' => 'Pas besoin d’un tableau compliqué : quelques grandes catégories et un point par semaine suffisent pour voir l’écart entre le prévu et le réel.',
                        'choices' => [
                            ['choice_text' => 'Ne suivre que les achats de plus de 1 000 MAD', 'is_correct' => false],
                            ['choice_text' => 'Comparer revenus et dépenses une seule fois, en fin d’année', 'is_correct' => false],
                            ['choice_text' => 'Classer ses dépenses en grandes catégories et faire le point chaque semaine', 'is_correct' => true],
                            ['choice_text' => 'Noter chaque achat à la minute dans un tableau très détaillé, avec des sous-catégories', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Karim avait prévu 1 200 MAD pour l’alimentation et en a dépensé 1 450. Quel est l’écart ?',
                        'explanation' => '1 450 - 1 200 = 250 MAD. Karim a dépensé 250 MAD de plus que son budget.',
                        'choices' => [
                            ['choice_text' => '250 MAD de plus que prévu', 'is_correct' => true],
                            ['choice_text' => '17 % de moins que prévu', 'is_correct' => false],
                            ['choice_text' => '250 MAD de moins que prévu', 'is_correct' => false],
                            ['choice_text' => '1 450 MAD de plus que prévu', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Les dépenses essentielles (loyer, courses) et les dépenses discrétionnaires (sorties, abonnements) se suivent séparément. Qu’est-ce que ça apporte ?',
                        'explanation' => 'Quand le revenu baisse, on réduit d’abord ce qui n’est pas vital : sorties, abonnements, achats plaisir. Séparer les deux familles permet de le faire sans toucher au loyer ni aux courses.',
                        'choices' => [
                            ['choice_text' => 'On voit plus vite où couper quand le revenu baisse', 'is_correct' => true],
                            ['choice_text' => 'On peut supprimer d’office toutes les dépenses discrétionnaires', 'is_correct' => false],
                            ['choice_text' => 'On rend inutile le suivi des dépenses variables', 'is_correct' => false],
                            ['choice_text' => 'On peut se dispenser de calculer le revenu net du ménage', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Hanane gagne 9 000 MAD nets par mois. Son logement (loyer et charges) lui coûte 3 000 MAD. Quelle part de son revenu net cela représente-t-il ?',
                        'explanation' => '3 000 / 9 000 = 0,333, donc un tiers du revenu net part dans le logement.',
                        'choices' => [
                            ['choice_text' => '25 %', 'is_correct' => false],
                            ['choice_text' => '30 %', 'is_correct' => false],
                            ['choice_text' => '33,3 %', 'is_correct' => true],
                            ['choice_text' => '40 %', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un étudiant a suivi ses dépenses pendant trois mois : ses achats impulsifs viennent surtout des livraisons de repas. Quelle décision est la plus logique ?',
                        'explanation' => 'Le suivi a servi à repérer un comportement précis, autant viser celui-là. Un plafond ciblé se tient mieux qu’une règle vague du genre « je dépense moins ».',
                        'choices' => [
                            ['choice_text' => 'Relever le plafond de sa carte pour avoir plus de marge', 'is_correct' => false],
                            ['choice_text' => 'Arrêter de regarder ses relevés pendant quelques mois', 'is_correct' => false],
                            ['choice_text' => 'Arrêter toute épargne tant que les dépenses n’ont pas baissé', 'is_correct' => false],
                            ['choice_text' => 'Fixer un plafond mensuel pour les livraisons et suivre ce poste à part', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Comment appelle-t-on ce qui reste du revenu une fois toutes les dépenses du mois payées ?',
                        'explanation' => 'C’est la part du revenu qu’on peut mettre de côté, utiliser pour rembourser une dette plus vite ou consacrer à un projet. Le taux d’endettement, lui, compare les remboursements au revenu.',
                        'choices' => [
                            ['choice_text' => 'Le total des charges fixes', 'is_correct' => false],
                            ['choice_text' => 'Le revenu brut', 'is_correct' => false],
                            ['choice_text' => 'La capacité d’épargne', 'is_correct' => true],
                            ['choice_text' => 'Le taux d’endettement', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Youssef paie une assurance de 6 000 MAD une fois par an, en janvier. Quel réflexe budgétaire est le bon ?',
                        'explanation' => '6 000 / 12 = 500 MAD par mois. En lissant la dépense sur l’année, janvier ne bouscule plus le budget.',
                        'choices' => [
                            ['choice_text' => 'La laisser hors du budget puisqu’elle n’arrive qu’une fois', 'is_correct' => false],
                            ['choice_text' => 'Commencer à épargner en décembre pour la payer', 'is_correct' => false],
                            ['choice_text' => 'La régler en janvier avec un crédit renouvelable', 'is_correct' => false],
                            ['choice_text' => 'Mettre 500 MAD de côté chaque mois pour cette dépense', 'is_correct' => true],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Épargne de précaution et sécurité financière',
                'description' => 'Fonds d\'urgence, objectifs d\'épargne, liquidité et gestion des imprévus.',
                'questions' => [
                    [
                        'question' => 'Où est-il le plus logique de placer un fonds d’urgence ?',
                        'explanation' => 'Un fonds d’urgence sert à encaisser un imprévu : réparation, perte d’emploi, frais médicaux. Ce qui compte, c’est de pouvoir le récupérer vite et sans perte, pas d’en tirer le meilleur rendement.',
                        'choices' => [
                            ['choice_text' => 'Dans un portefeuille d’actions pour viser le meilleur rendement', 'is_correct' => false],
                            ['choice_text' => 'Dans un placement bloqué pendant cinq ans', 'is_correct' => false],
                            ['choice_text' => 'Dans un bien immobilier mis en location à long terme', 'is_correct' => false],
                            ['choice_text' => 'Sur un compte d’épargne disponible à tout moment', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Le ménage de Nadia dépense en moyenne 5 000 MAD par mois pour ses besoins essentiels. Une réserve équivalente à trois mois représente :',
                        'explanation' => '5 000 × 3 = 15 000 MAD. Trois mois de dépenses essentielles, c’est la taille de réserve qu’on vise le plus souvent.',
                        'choices' => [
                            ['choice_text' => '8 000 MAD', 'is_correct' => false],
                            ['choice_text' => '12 500 MAD', 'is_correct' => false],
                            ['choice_text' => '15 000 MAD', 'is_correct' => true],
                            ['choice_text' => '20 000 MAD', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Salma a déjà son fonds d’urgence. Elle met de l’argent de côté pour acheter une voiture dans deux ans. Qu’est-ce qui doit guider le choix du placement ?',
                        'explanation' => 'À deux ans de l’achat, une grosse baisse de valeur au mauvais moment laisserait un budget voiture trop juste. Mieux vaut un placement stable et prévisible.',
                        'choices' => [
                            ['choice_text' => 'Copier le placement qui a le mieux marché l’an dernier', 'is_correct' => false],
                            ['choice_text' => 'Viser le rendement le plus élevé, même si la valeur peut fortement baisser', 'is_correct' => false],
                            ['choice_text' => 'Choisir un placement dont l’argent n’est pas disponible avant dix ans', 'is_correct' => false],
                            ['choice_text' => 'Protéger le capital pour qu’il soit bien là à la date d’achat', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Karim met 1 000 MAD de côté chaque mois. Après six mois, hors intérêts, il devrait avoir :',
                        'explanation' => 'Six versements de 1 000 MAD font 6 000 MAD, sans compter d’éventuels intérêts.',
                        'choices' => [
                            ['choice_text' => '5 500 MAD', 'is_correct' => false],
                            ['choice_text' => '6 000 MAD', 'is_correct' => true],
                            ['choice_text' => '6 500 MAD', 'is_correct' => false],
                            ['choice_text' => '12 000 MAD', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Fatima fait virer 500 MAD vers son compte d’épargne dès que son salaire arrive. Quel est l’avantage principal ?',
                        'explanation' => 'Quand le virement part tout seul, on épargne d’abord et on dépense ensuite. L’automatisation ne crée pas de rendement et ne remplace pas un budget.',
                        'choices' => [
                            ['choice_text' => 'Ses dettes en cours baissent sans qu’elle ait à les rembourser', 'is_correct' => false],
                            ['choice_text' => 'Le virement assure un rendement positif, quel que soit le placement', 'is_correct' => false],
                            ['choice_text' => 'Elle n’a plus besoin de suivre ses dépenses courantes', 'is_correct' => false],
                            ['choice_text' => 'L’épargne devient une priorité, plus un simple reste de fin de mois', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Une épargne de 24 000 MAD sert de réserve et les dépenses essentielles sont de 8 000 MAD par mois. Environ combien de mois cette réserve couvre-t-elle ?',
                        'explanation' => '24 000 / 8 000 = 3. La réserve représente donc environ trois mois de dépenses essentielles.',
                        'choices' => [
                            ['choice_text' => '2 mois', 'is_correct' => false],
                            ['choice_text' => '3 mois', 'is_correct' => true],
                            ['choice_text' => '4 mois', 'is_correct' => false],
                            ['choice_text' => '12 mois', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Laquelle de ces situations justifie de puiser dans un fonds d’urgence ?',
                        'explanation' => 'Un fonds d’urgence est fait pour les chocs qu’on n’a pas pu prévoir. Des vacances, un nouveau téléphone ou des sorties se planifient avec une épargne séparée.',
                        'choices' => [
                            ['choice_text' => 'Des sorties du week-end qui ont coûté plus cher que prévu', 'is_correct' => false],
                            ['choice_text' => 'Le remplacement d’un téléphone encore en état de marche', 'is_correct' => false],
                            ['choice_text' => 'Une panne de voiture à réparer pour pouvoir aller travailler', 'is_correct' => true],
                            ['choice_text' => 'Des vacances réservées dix mois à l’avance', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Houda a une réserve de précaution, mais sa carte de crédit est à fond tous les mois. Que révèle cette situation ?',
                        'explanation' => 'Une réserve protège des imprévus, pas d’un budget qui dépasse chaque mois. Si les dépenses courantes sont plus fortes que les revenus, il faut traiter ce déséquilibre à part.',
                        'choices' => [
                            ['choice_text' => 'Son niveau d’épargne est suffisant, donc son budget n’a pas de problème', 'is_correct' => false],
                            ['choice_text' => 'La carte de crédit joue le rôle d’un deuxième fonds d’urgence', 'is_correct' => false],
                            ['choice_text' => 'Sa réserve devrait être placée en actions pour mieux rapporter', 'is_correct' => false],
                            ['choice_text' => 'Avoir une réserve ne règle pas un budget courant déséquilibré', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Quel facteur peut justifier un fonds d’urgence plus important pour un ménage ?',
                        'explanation' => 'Quand le salaire change d’un mois à l’autre, une période creuse est plus probable. Un coussin plus gros permet de tenir plus longtemps.',
                        'choices' => [
                            ['choice_text' => 'Des revenus instables ou fortement variables', 'is_correct' => true],
                            ['choice_text' => 'Un salaire fixe versé chaque mois par un employeur stable', 'is_correct' => false],
                            ['choice_text' => 'Des charges fixes très faibles', 'is_correct' => false],
                            ['choice_text' => 'Un budget tenu à jour chaque semaine', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un compte d’épargne est dit « liquide » quand :',
                        'explanation' => 'La liquidité, c’est la rapidité avec laquelle on retrouve son argent sans perte. C’est la qualité qu’on cherche pour un fonds d’urgence, bien avant le rendement.',
                        'choices' => [
                            ['choice_text' => 'il rapporte plus qu’un placement en actions', 'is_correct' => false],
                            ['choice_text' => 'il protège entièrement contre l’inflation', 'is_correct' => false],
                            ['choice_text' => 'on peut récupérer son argent vite, sans perdre de valeur', 'is_correct' => true],
                            ['choice_text' => 'il est réservé aux petits montants', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Crédit, intérêts et remboursement des dettes',
                'description' => 'Coût du crédit, mensualités, dette et arbitrages de remboursement.',
                'questions' => [
                    [
                        'question' => 'Un prêt de 10 000 MAD porte un taux annuel simple de 6 % pour une année. Quel est l’intérêt correspondant sur cette année, hors frais ?',
                        'explanation' => 'Avec un taux simple de 6 %, l’intérêt est 10 000 × 0,06 = 600 MAD. Le coût total du crédit réel peut être supérieur si des frais ou des assurances s’ajoutent.',
                        'choices' => [
                            ['choice_text' => '60 MAD', 'is_correct' => false],
                            ['choice_text' => '600 MAD', 'is_correct' => true],
                            ['choice_text' => '940 MAD', 'is_correct' => false],
                            ['choice_text' => '1 060 MAD', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Samira hésite entre deux crédits : l’un a un taux plus bas mais des frais de dossier élevés, l’autre un taux un peu plus haut sans frais. Que doit-elle comparer ?',
                        'explanation' => 'Un taux bas ne dit pas tout : les frais, la durée et les autres charges s’ajoutent au coût final. On compare donc ce que l’emprunteur paiera au total.',
                        'choices' => [
                            ['choice_text' => 'Le coût total de chaque offre, frais compris', 'is_correct' => true],
                            ['choice_text' => 'Le montant de la première mensualité, qui donne le prix final', 'is_correct' => false],
                            ['choice_text' => 'Le taux nominal affiché, qui résume à lui seul le prix du crédit', 'is_correct' => false],
                            ['choice_text' => 'La durée du prêt, sans tenir compte des frais', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'On allonge la durée d’un prêt, avec le même taux et les mêmes conditions. Que se passe-t-il ?',
                        'explanation' => 'Étaler le remboursement allège chaque paiement, mais les intérêts courent plus longtemps. Exemple : 100 000 MAD sur 20 ans coûtent plus d’intérêts que sur 10 ans, même si la mensualité est plus petite.',
                        'choices' => [
                            ['choice_text' => 'La mensualité et le coût total baissent en même temps', 'is_correct' => false],
                            ['choice_text' => 'Le montant emprunté diminue pour compenser la durée', 'is_correct' => false],
                            ['choice_text' => 'La mensualité baisse, mais on paie plus d’intérêts au total', 'is_correct' => true],
                            ['choice_text' => 'La mensualité monte, mais le coût total des intérêts baisse', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Karim a un crédit à 9 % et un peu d’argent de côté. En le remboursant par anticipation, qu’y gagne-t-il ?',
                        'explanation' => 'Chaque dirham de capital remboursé est un dirham sur lequel on ne paie plus d’intérêts. Plus le taux est élevé, plus l’économie est grande. Il reste à vérifier les éventuelles pénalités du contrat.',
                        'choices' => [
                            ['choice_text' => 'Il récupère les frais de dossier payés à la signature', 'is_correct' => false],
                            ['choice_text' => 'Il évite les intérêts futurs sur le capital qu’il reste à rembourser', 'is_correct' => true],
                            ['choice_text' => 'Il obtient un rendement supérieur à celui de la Bourse', 'is_correct' => false],
                            ['choice_text' => 'Il convertit sa dette en épargne disponible', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un ménage rembourse 3 200 MAD de dettes chaque mois pour un revenu net de 10 000 MAD. La charge de dette représente :',
                        'explanation' => '3 200 / 10 000 = 0,32, soit 32 %. Autrement dit, près d’un tiers du revenu part dans les remboursements, et il en reste moins pour vivre et épargner.',
                        'choices' => [
                            ['choice_text' => '23,8 % du revenu net', 'is_correct' => false],
                            ['choice_text' => '32 % du revenu net', 'is_correct' => true],
                            ['choice_text' => '38 % du revenu net', 'is_correct' => false],
                            ['choice_text' => '320 % du revenu net', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Ghita a une dette de carte de crédit à taux élevé et un petit fonds d’urgence. Elle reçoit 15 000 MAD. Quelle précaution est la plus sage avant de tout verser sur la dette ?',
                        'explanation' => 'Rembourser une dette chère est une bonne idée, mais vider toute la réserve crée un nouveau risque. Il faut trouver l’équilibre entre intérêts économisés et marge de sécurité.',
                        'choices' => [
                            ['choice_text' => 'Vider toute la réserve pour solder la dette d’un coup', 'is_correct' => false],
                            ['choice_text' => 'Prendre un nouveau crédit pour améliorer sa trésorerie', 'is_correct' => false],
                            ['choice_text' => 'Ne pas regarder le taux de la carte, puisque la dette est personnelle', 'is_correct' => false],
                            ['choice_text' => 'Garder une petite réserve pour ne pas se réendetter au premier imprévu', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Dans un crédit, le taux d’intérêt sert avant tout à :',
                        'explanation' => 'Le taux est le prix de l’argent prêté, pour le temps et le risque que prend la banque. Les frais de dossier et l’assurance s’y ajoutent dans le coût total.',
                        'choices' => [
                            ['choice_text' => 'couvrir à lui seul les frais de dossier et l’assurance du contrat', 'is_correct' => false],
                            ['choice_text' => 'mesurer la valeur du patrimoine de l’emprunteur', 'is_correct' => false],
                            ['choice_text' => 'fixer le montant maximal que l’on peut emprunter', 'is_correct' => false],
                            ['choice_text' => 'payer le prêteur pour l’argent qu’il met à disposition', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Deux dettes ont le même montant et la même durée : l’une est à 4 %, l’autre à 9 %. Laquelle coûte le plus cher en intérêts ?',
                        'explanation' => 'À montant et durée identiques, plus le taux est élevé, plus on paie d’intérêts. Avant de trancher, on vérifie quand même les frais.',
                        'choices' => [
                            ['choice_text' => 'Celle à 9 %', 'is_correct' => true],
                            ['choice_text' => 'On ne peut pas savoir sans connaître les revenus de l’emprunteur', 'is_correct' => false],
                            ['choice_text' => 'Elles coûtent autant, car le capital emprunté est le même', 'is_correct' => false],
                            ['choice_text' => 'Celle à 4 %, car un taux bas allonge la durée du remboursement', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’est-ce qui rend un prêt à taux variable plus risqué qu’un prêt à taux fixe pour l’emprunteur ?',
                        'explanation' => 'Avec un taux variable, une hausse du taux de référence augmente les intérêts et la mensualité. Le risque vient de l’incertitude sur les conditions futures.',
                        'choices' => [
                            ['choice_text' => 'Les intérêts peuvent monter si le taux de référence augmente', 'is_correct' => true],
                            ['choice_text' => 'Il n’a pas de calendrier de remboursement défini à l’avance', 'is_correct' => false],
                            ['choice_text' => 'Le capital emprunté augmente quand le taux de référence baisse', 'is_correct' => false],
                            ['choice_text' => 'Il coûte plus cher qu’un prêt à taux fixe dès le premier mois', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pour un crédit immobilier, la banque demande un apport de 30 % au lieu de 10 %. Qu’est-ce que ça change pour elle ?',
                        'explanation' => 'Un apport plus important veut dire que l’emprunteur finance davantage avec son argent. Si le bien se vend moins cher que prévu, la perte de la banque est plus faible.',
                        'choices' => [
                            ['choice_text' => 'Le prêt devient un placement sans risque pour elle', 'is_correct' => false],
                            ['choice_text' => 'Elle n’a plus à craindre de défaut de paiement', 'is_correct' => false],
                            ['choice_text' => 'Elle est sûre que le bien va prendre de la valeur', 'is_correct' => false],
                            ['choice_text' => 'Elle prête moins par rapport à la valeur du bien, donc elle risque moins', 'is_correct' => true],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Comprendre le coût réel d\'un financement',
                'description' => 'Taux, frais, mensualités, coût total et comparaison de solutions de financement.',
                'questions' => [
                    [
                        'question' => 'Youssef emprunte 20 000 MAD et rembourse 24 mensualités de 900 MAD. Que lui coûte le crédit, c’est-à-dire ce qu’il paie en plus du capital ?',
                        'explanation' => '24 × 900 = 21 600 MAD remboursés au total. On retire les 20 000 MAD empruntés : le crédit lui coûte 1 600 MAD.',
                        'choices' => [
                            ['choice_text' => '900 MAD', 'is_correct' => false],
                            ['choice_text' => '1 600 MAD', 'is_correct' => true],
                            ['choice_text' => '2 400 MAD', 'is_correct' => false],
                            ['choice_text' => '21 600 MAD', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Meryem règle toujours le solde de sa carte en entier à la fin du mois. Quel élément pèse le plus dans le choix de sa carte ?',
                        'explanation' => 'Si le solde est remboursé avant de générer des intérêts, le taux sur le crédit reporté ne la touche pas. Ce sont les frais qu’elle paie réellement qui comptent.',
                        'choices' => [
                            ['choice_text' => 'Le taux appliqué au solde reporté', 'is_correct' => false],
                            ['choice_text' => 'Le plafond de dépenses autorisé', 'is_correct' => false],
                            ['choice_text' => 'Le taux directeur de la banque centrale', 'is_correct' => false],
                            ['choice_text' => 'Les frais annuels de la carte', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Un prêt de 30 000 MAD affiche 8 % et 1 200 MAD de frais de dossier. Que faire de ces 1 200 MAD quand on évalue le prêt ?',
                        'explanation' => 'Le coût d’un crédit comprend tout ce que l’emprunteur paie vraiment. Le taux affiché ne suffit pas à comparer deux offres dont les frais diffèrent.',
                        'choices' => [
                            ['choice_text' => 'Les compter seulement si le prêt dure plus de dix ans', 'is_correct' => false],
                            ['choice_text' => 'Les ignorer, puisque le taux affiché est de 8 %', 'is_correct' => false],
                            ['choice_text' => 'Les compter dans le coût, car l’emprunteur les paie en plus des intérêts', 'is_correct' => true],
                            ['choice_text' => 'Les voir comme un premier remboursement du capital', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Souad peut rembourser une dette à 10 % ou placer la même somme à 4 % de rendement attendu. Quel raisonnement tient la route ?',
                        'explanation' => 'Rembourser une dette à 10 %, c’est comme placer à 10 % sans risque. Un rendement attendu de 4 % peut décevoir, alors que l’économie d’intérêts est connue d’avance.',
                        'choices' => [
                            ['choice_text' => 'Le placement est meilleur, car il fait gagner de l’argent alors que la dette en fait perdre', 'is_correct' => false],
                            ['choice_text' => 'Rembourser fait économiser 10 % de façon sûre ; les 4 % du placement ne sont qu’espérés', 'is_correct' => true],
                            ['choice_text' => 'Le taux de la dette importe peu quand l’argent est emprunté à un proche', 'is_correct' => false],
                            ['choice_text' => 'Les deux choix se valent, puisque la somme est la même', 'is_correct' => false],
                        ],
                    ],
                  [
    'question' => 'Au Maroc, que mesure le taux effectif global (TEG) d’un crédit ?',
    'explanation' => 'Le TEG exprime le coût du crédit en pourcentage annuel et aide à comparer les offres. Il comprend les intérêts et les frais ou commissions pris en compte par les règles applicables. Les primes d’assurance liées au crédit sont exclues du TEG et doivent être indiquées séparément.',
    'choices' => [
        ['choice_text' => 'Le taux fixé chaque année par la banque centrale', 'is_correct' => false],
        ['choice_text' => 'Le coût annuel du crédit en pourcentage, calculé selon les règles applicables', 'is_correct' => true],
        ['choice_text' => 'Le taux auquel la banque rémunère l’épargne de l’emprunteur', 'is_correct' => false],
        ['choice_text' => 'Le rendement moyen du marché sur un an', 'is_correct' => false],
    ],
],
                    [
                        'question' => 'Karim a emprunté 50 000 MAD et rembourse un peu de capital chaque mois. À taux constant, que devient la part d’intérêts de ses mensualités ?',
                        'explanation' => 'Les intérêts se calculent sur le capital qu’il reste à rembourser. Comme il baisse mois après mois, la part d’intérêts diminue elle aussi.',
                        'choices' => [
                            ['choice_text' => 'Elle diminue, car le capital restant dû baisse', 'is_correct' => true],
                            ['choice_text' => 'Elle disparaît dès que la moitié du prêt est remboursée', 'is_correct' => false],
                            ['choice_text' => 'Elle augmente, car la banque ajoute des frais à chaque échéance', 'is_correct' => false],
                            ['choice_text' => 'Elle reste la même, car le taux ne change pas', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'L’assurance emprunteur sert surtout à :',
                        'explanation' => 'Si l’emprunteur ne peut plus payer pour cause de décès ou d’invalidité, c’est l’assureur qui rembourse tout ou partie du prêt. La banque et la famille sont protégées. Elle s’ajoute au coût du crédit.',
                        'choices' => [
                            ['choice_text' => 'empêcher le taux du prêt de monter', 'is_correct' => false],
                            ['choice_text' => 'payer les frais de dossier à la place de l’emprunteur', 'is_correct' => false],
                            ['choice_text' => 'rembourser la banque si l’emprunteur décède ou devient invalide', 'is_correct' => true],
                            ['choice_text' => 'compenser une baisse de valeur du bien acheté', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Samira peut refinancer son crédit à un taux plus bas, mais avec 8 000 MAD de frais. Quelle première vérification est logique ?',
                        'explanation' => 'Un refinancement n’est intéressant que si l’économie d’intérêts dépasse les frais de mise en place et les éventuelles pénalités.',
                        'choices' => [
                            ['choice_text' => 'Accepter, puisque le nouveau taux est plus bas', 'is_correct' => false],
                            ['choice_text' => 'Refuser, car les frais annulent en général l’économie réalisée', 'is_correct' => false],
                            ['choice_text' => 'Regarder si la nouvelle mensualité est plus basse que l’ancienne, d’un mois sur l’autre', 'is_correct' => false],
                            ['choice_text' => 'Comparer les intérêts économisés avec les frais du refinancement', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Hicham est à découvert tous les mois depuis trois ans. Que doit-on en retenir ?',
                        'explanation' => 'Un découvert de temps en temps absorbe un décalage. Utilisé tous les mois pendant des années, il montre que les dépenses dépassent les ressources.',
                        'choices' => [
                            ['choice_text' => 'Le découvert finance en permanence un déficit qui se répète', 'is_correct' => true],
                            ['choice_text' => 'Le découvert est devenu une forme d’épargne disponible', 'is_correct' => false],
                            ['choice_text' => 'Le coût du découvert est fixé une fois pour toutes dans le contrat', 'is_correct' => false],
                            ['choice_text' => 'Sa trésorerie est bien gérée, puisque la banque l’autorise', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Youssef va signer un crédit important. Que doit-il vérifier avant ?',
                        'explanation' => 'Un crédit engage le budget pendant des années. Il faut relier son coût à ce que le ménage peut vraiment rembourser.',
                        'choices' => [
                            ['choice_text' => 'Le coût total, la mensualité, la durée et l’effet sur son budget', 'is_correct' => true],
                            ['choice_text' => 'Que la durée choisie est la plus longue possible, pour baisser la mensualité', 'is_correct' => false],
                            ['choice_text' => 'Que la publicité de la banque est claire et rassurante', 'is_correct' => false],
                            ['choice_text' => 'Le montant maximal que la banque accepte de lui prêter', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Premiers pas dans l\'investissement',
                'description' => 'Risque, rendement, diversification, horizon et choix d\'investissement.',
                'questions' => [
                    [
                        'question' => 'Lina aura besoin de 20 000 MAD pour ses frais d’études dans six mois. Qu’est-ce qui doit peser le plus dans le choix de son placement ?',
                        'explanation' => 'À six mois, il n’y a pas le temps d’attendre un rebond après une baisse. La sécurité et la disponibilité passent avant le rendement.',
                        'choices' => [
                            ['choice_text' => 'Choisir ce qui est populaire sur les réseaux sociaux', 'is_correct' => false],
                            ['choice_text' => 'Viser le rendement le plus élevé du marché, même risqué', 'is_correct' => false],
                            ['choice_text' => 'Garder son argent disponible et à peu près stable', 'is_correct' => true],
                            ['choice_text' => 'Acheter quelques actions très volatiles pour aller plus vite', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Qu’apporte la diversification dans un portefeuille ?',
                        'explanation' => 'En répartissant l’argent sur plusieurs actifs qui ne réagissent pas tous pareil, on évite qu’un seul problème fasse tout plonger. Le risque de marché, lui, reste.',
                        'choices' => [
                            ['choice_text' => 'Elle dispense de définir un objectif d’investissement', 'is_correct' => false],
                            ['choice_text' => 'Elle assure un rendement supérieur à celui du marché', 'is_correct' => false],
                            ['choice_text' => 'Elle élimine le risque de marché', 'is_correct' => false],
                            ['choice_text' => 'Elle limite l’effet d’une mauvaise passe d’un seul actif ou secteur', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Une action passe de 100 MAD à 110 MAD hors dividende. Le rendement en capital est de :',
                        'explanation' => 'Le gain est de 10 MAD sur un investissement initial de 100 MAD. Le rendement en capital est donc 10 / 100 = 10 %.',
                        'choices' => [
                            ['choice_text' => '1 %', 'is_correct' => false],
                            ['choice_text' => '9,09 %', 'is_correct' => false],
                            ['choice_text' => '10 %', 'is_correct' => true],
                            ['choice_text' => '11 %', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Youssef place son épargne dans cinq entreprises de secteurs différents : banque, énergie, santé, télécoms et agroalimentaire. Quel principe applique-t-il ?',
                        'explanation' => 'Répartir l’argent entre plusieurs secteurs évite qu’un seul événement touche tout le portefeuille de la même façon.',
                        'choices' => [
                            ['choice_text' => 'La couverture contre l’inflation', 'is_correct' => false],
                            ['choice_text' => 'La recherche de liquidité', 'is_correct' => false],
                            ['choice_text' => 'L’effet de levier', 'is_correct' => false],
                            ['choice_text' => 'La diversification', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Un fonds a fait +8 % cette année, un autre +5 %. Le premier est-il forcément meilleur pour tout le monde ?',
                        'explanation' => 'Un rendement élevé sur une année ne dit pas tout. Il faut le mettre en regard du risque, des frais et de ce que cherche l’investisseur.',
                        'choices' => [
                            ['choice_text' => 'Non : un rendement de 8 % est trop élevé pour être réel et doit être suspect', 'is_correct' => false],
                            ['choice_text' => 'Non : il faut aussi regarder le risque, les frais et l’horizon de chacun', 'is_correct' => true],
                            ['choice_text' => 'Oui : le rendement passé suffit à classer deux fonds', 'is_correct' => false],
                            ['choice_text' => 'Oui, dès que les deux fonds ont au moins un an d’existence', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Mounir connaît très bien une entreprise et met toutes ses économies dans ses actions. Quel est le problème principal ?',
                        'explanation' => 'Connaître une entreprise ne protège pas de ses mauvaises surprises. Si tout l’argent est au même endroit, un seul problème peut faire très mal.',
                        'choices' => [
                            ['choice_text' => 'Une interdiction de percevoir des dividendes', 'is_correct' => false],
                            ['choice_text' => 'Une diversification trop poussée du portefeuille', 'is_correct' => false],
                            ['choice_text' => 'Une concentration élevée du risque', 'is_correct' => true],
                            ['choice_text' => 'Un rendement qui diminue à chaque achat d’action', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Samira garde une obligation jusqu’à son échéance. Quel risque peut encore la toucher ?',
                        'explanation' => 'Le nominal n’est remboursé que si l’émetteur peut payer. C’est le risque de crédit : il ne disparaît pas parce que l’échéance approche.',
                        'choices' => [
                            ['choice_text' => 'Elle devra payer des frais supplémentaires à l’échéance', 'is_correct' => false],
                            ['choice_text' => 'Le coupon est recalculé chaque jour par la Bourse', 'is_correct' => false],
                            ['choice_text' => 'Le nominal change chaque jour jusqu’à l’échéance', 'is_correct' => false],
                            ['choice_text' => 'L’émetteur peut ne pas être en mesure de payer ce qu’il a promis', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Hamza achète un actif 2 000 MAD et le revend 2 300 MAD, sans dividendes ni frais. Quel est son gain ?',
                        'explanation' => '2 300 - 2 000 = 300 MAD. En pourcentage, cela donne 300 / 2 000 = 15 %.',
                        'choices' => [
                            ['choice_text' => '150 MAD', 'is_correct' => false],
                            ['choice_text' => '300 MAD', 'is_correct' => true],
                            ['choice_text' => '2 300 MAD', 'is_correct' => false],
                            ['choice_text' => '4 600 MAD', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Par quoi un investisseur sérieux commence-t-il ?',
                        'explanation' => 'On part de ses objectifs et de ses contraintes, puis on choisit les produits qui vont avec, et pas l’inverse.',
                        'choices' => [
                            ['choice_text' => 'Réagir à chaque rumeur lue sur les réseaux sociaux', 'is_correct' => false],
                            ['choice_text' => 'Emprunter pour pouvoir investir une somme plus grosse', 'is_correct' => false],
                            ['choice_text' => 'Fixer son objectif, son horizon et son niveau de risque', 'is_correct' => true],
                            ['choice_text' => 'Acheter ce qui a le plus monté ces derniers mois', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Salma reçoit 80 MAD de dividendes sur une action achetée 2 000 MAD, et le cours n’a pas bougé. Son rendement en dividende est de :',
                        'explanation' => '80 / 2 000 = 0,04, soit 4 %. Le cours n’a pas bougé, donc tout le rendement vient du dividende.',
                        'choices' => [
                            ['choice_text' => '0,4 %', 'is_correct' => false],
                            ['choice_text' => '4 %', 'is_correct' => true],
                            ['choice_text' => '8 %', 'is_correct' => false],
                            ['choice_text' => '16 %', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un fonds prélève 2 % de frais chaque année. Sur vingt ans, qu’est-ce que cela change pour l’épargnant ?',
                        'explanation' => 'Chaque année, les frais retirent une part du capital, et cette part ne produira plus de rendement ensuite. Sur vingt ans, l’écart avec un fonds moins cher devient important.',
                        'choices' => [
                            ['choice_text' => 'Ils améliorent la performance du fonds', 'is_correct' => false],
                            ['choice_text' => 'Ils ne pèsent que la première année', 'is_correct' => false],
                            ['choice_text' => 'Ils rongent le capital qui aurait pu continuer à rapporter', 'is_correct' => true],
                            ['choice_text' => 'Ils lui sont rendus à la revente du placement, sans perte pour l’épargnant', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Planifier un projet et son financement',
                'description' => 'Objectifs financiers, horizon, épargne programmée et arbitrages entre projets.',
                'questions' => [
                    [
                        'question' => 'Mouna souhaite constituer 36 000 MAD pour un projet dans 24 mois, sans tenir compte des intérêts. Combien doit-elle épargner en moyenne par mois ?',
                        'explanation' => '36 000 / 24 = 1 500 MAD par mois, en supposant qu’on ne touche aucun intérêt et que l’effort reste le même chaque mois.',
                        'choices' => [
                            ['choice_text' => '1 200 MAD', 'is_correct' => false],
                            ['choice_text' => '1 500 MAD', 'is_correct' => true],
                            ['choice_text' => '1 800 MAD', 'is_correct' => false],
                            ['choice_text' => '18 000 MAD', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une famille prépare des vacances dans quatre mois et un achat immobilier dans trois ans. Qu’est-ce qui justifie deux épargnes séparées ?',
                        'explanation' => 'Les vacances approchent : l’argent doit être stable et disponible. Pour l’achat dans trois ans, on peut accepter un peu plus de variations de valeur.',
                        'choices' => [
                            ['choice_text' => 'Un projet à long terme doit rester bloqué et inaccessible', 'is_correct' => false],
                            ['choice_text' => 'Les vacances sont un investissement et se placent en Bourse', 'is_correct' => false],
                            ['choice_text' => 'Les deux objectifs n’ont pas la même échéance ni le même risque acceptable', 'is_correct' => true],
                            ['choice_text' => 'Les banques interdisent de mélanger deux objectifs sur un même compte', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un ménage augmente ses dépenses de logement de 1 000 MAD par mois sans augmenter ses revenus. Quel sera l’effet immédiat sur sa capacité d’épargne, toutes choses égales par ailleurs ?',
                        'explanation' => 'Le loyer monte de 1 000 MAD et le revenu ne bouge pas : ces 1 000 MAD en moins ne pourront plus partir en épargne.',
                        'choices' => [
                            ['choice_text' => 'Elle restera la même tant que le revenu ne change pas', 'is_correct' => false],
                            ['choice_text' => 'Elle diminuera de 100 MAD par mois', 'is_correct' => false],
                            ['choice_text' => 'Elle diminuera de 1 000 MAD par mois', 'is_correct' => true],
                            ['choice_text' => 'Elle augmentera de 1 000 MAD par mois', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Rachid a une dette à taux élevé et veut aussi financer un voyage dans six mois. Quelle approche est raisonnable ?',
                        'explanation' => 'Ce sont des arbitrages : le coût sûr de la dette, l’importance de l’objectif et un coussin pour les imprévus.',
                        'choices' => [
                            ['choice_text' => 'Peser le taux de la dette, l’urgence du voyage et garder une petite réserve', 'is_correct' => true],
                            ['choice_text' => 'Vider toute l’épargne pour solder la dette d’un coup et repartir de zéro', 'is_correct' => false],
                            ['choice_text' => 'Partir en voyage d’abord, quel que soit le taux de la dette, puisque c’est un plaisir', 'is_correct' => false],
                            ['choice_text' => 'Emprunter pour le voyage et placer l’épargne en Bourse', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Le budget d’un projet prévoit une dépense de 50 000 MAD, mais la personne dispose seulement de 42 000 MAD. Le manque à financer est de :',
                        'explanation' => '50 000 - 42 000 = 8 000 MAD. Il faudra les trouver : épargner plus longtemps, réduire le budget ou emprunter.',
                        'choices' => [
                            ['choice_text' => '7 000 MAD', 'is_correct' => false],
                            ['choice_text' => '8 000 MAD', 'is_correct' => true],
                            ['choice_text' => '9 000 MAD', 'is_correct' => false],
                            ['choice_text' => '12 000 MAD', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Khadija veut réunir 15 000 MAD pour un projet. Elle a déjà mis 4 500 MAD de côté. Quelle part de son objectif a-t-elle atteinte ?',
                        'explanation' => '4 500 / 15 000 = 0,30, soit 30 %. Attention au piège : 70 %, c’est la part qui lui reste à épargner.',
                        'choices' => [
                            ['choice_text' => '3 %', 'is_correct' => false],
                            ['choice_text' => '30 %', 'is_correct' => true],
                            ['choice_text' => '35 %', 'is_correct' => false],
                            ['choice_text' => '70 %', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'À quoi sert un objectif chiffré et daté, du genre « 30 000 MAD d’ici deux ans » ?',
                        'explanation' => 'Un objectif chiffré donne un repère. Il ne garantit pas le coût futur, mais il permet d’ajuster l’épargne quand la situation change.',
                        'choices' => [
                            ['choice_text' => 'À calculer l’effort d’épargne et à vérifier qu’on avance au bon rythme', 'is_correct' => true],
                            ['choice_text' => 'À fixer à l’avance le prix exact du projet', 'is_correct' => false],
                            ['choice_text' => 'À empêcher les revenus de varier pendant la période', 'is_correct' => false],
                            ['choice_text' => 'À éviter de suivre son budget en cours de route', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Karim et Salma gagnent bien leur vie, mais n’arrivent pas à épargner à cause d’achats imprévus. Quelle est la cause la plus probable ?',
                        'explanation' => 'Un bon revenu ne suffit pas : sans visibilité sur les sorties, les petites dépenses dispersées mangent peu à peu la capacité d’épargne.',
                        'choices' => [
                            ['choice_text' => 'Leur revenu est trop élevé pour que l’épargne soit possible', 'is_correct' => false],
                            ['choice_text' => 'Ils ne voient pas où part leur argent chaque mois', 'is_correct' => true],
                            ['choice_text' => 'Un budget ne convient qu’aux ménages modestes', 'is_correct' => false],
                            ['choice_text' => 'Ils devraient emprunter pour ajuster leur trésorerie', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Youssef place 20 000 MAD pour payer des travaux dans six mois. Quel scénario le gênerait le plus ?',
                        'explanation' => 'Quand la date de la dépense est proche, une baisse de valeur ne laisse pas le temps de se rattraper et le budget devient insuffisant.',
                        'choices' => [
                            ['choice_text' => 'Un relevé envoyé chaque mois par la banque', 'is_correct' => false],
                            ['choice_text' => 'Une baisse des frais de gestion', 'is_correct' => false],
                            ['choice_text' => 'Une légère hausse du taux de rémunération du placement en cours d’année', 'is_correct' => false],
                            ['choice_text' => 'Une chute de la valeur du placement en cours d’année juste avant les travaux', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Une épargne mensuelle passe de 750 à 900 MAD. De combien de pour cent a-t-elle augmenté ?',
                        'explanation' => 'La hausse est de 900 - 750 = 150 MAD. On la rapporte au point de départ : 150 / 750 = 0,20, soit 20 %.',
                        'choices' => [
                            ['choice_text' => '15 %', 'is_correct' => false],
                            ['choice_text' => '20 %', 'is_correct' => true],
                            ['choice_text' => '25 %', 'is_correct' => false],
                            ['choice_text' => '150 %', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Protection du patrimoine et assurance',
                'description' => 'Risques personnels, assurance, franchises, couverture et gestion des pertes potentielles.',
                'questions' => [
                    [
                        'question' => 'Que fait une assurance habitation pour son client ?',
                        'explanation' => 'L’assureur prend à sa charge certains risques prévus par le contrat. Cela ne couvre pas tout et ne remplace pas une réserve d’épargne.',
                        'choices' => [
                            ['choice_text' => 'Elle couvre aussi les événements exclus du contrat', 'is_correct' => false],
                            ['choice_text' => 'Elle remplace le fonds d’urgence du ménage et toutes les épargnes de précaution', 'is_correct' => false],
                            ['choice_text' => 'Elle prend en charge certains dégâts prévus au contrat, contre une prime', 'is_correct' => true],
                            ['choice_text' => 'Elle fait monter la valeur du logement quand il est bien entretenu et assuré', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Karim a une franchise de 2 000 MAD sur son assurance auto. Un accident couvert cause 7 000 MAD de dégâts. Combien reste à sa charge ?',
                        'explanation' => 'La franchise est la part qui reste à l’assuré : ici 2 000 MAD. L’assureur paie le reste, soit 5 000 MAD.',
                        'choices' => [
                            ['choice_text' => '2 000 MAD', 'is_correct' => true],
                            ['choice_text' => '5 000 MAD', 'is_correct' => false],
                            ['choice_text' => '7 000 MAD', 'is_correct' => false],
                            ['choice_text' => '14 000 MAD', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pour quelqu’un qui vit uniquement de son travail, quel risque couvre une assurance incapacité-invalidité ?',
                        'explanation' => 'Si une incapacité coupe la seule source de revenu, le ménage se retrouve vite en difficulté. Cette assurance verse un revenu de remplacement.',
                        'choices' => [
                            ['choice_text' => 'La baisse de valeur de son épargne placée en Bourse', 'is_correct' => false],
                            ['choice_text' => 'La perte de revenus si une maladie ou un accident l’empêche de travailler', 'is_correct' => true],
                            ['choice_text' => 'Le vol de ses biens à son domicile', 'is_correct' => false],
                            ['choice_text' => 'Le risque de ne plus pouvoir emprunter', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Tu passes d’une franchise de 500 à 2 500 MAD sur ton assurance auto, le reste ne changeant pas. Que se passe-t-il ?',
                        'explanation' => 'Avec une franchise plus haute, l’assureur ne rembourse plus les petits dégâts. En échange, la prime est souvent moins chère.',
                        'choices' => [
                            ['choice_text' => 'L’assureur paie davantage de petits sinistres, donc la prime baisse', 'is_correct' => false],
                            ['choice_text' => 'Le plafond d’indemnisation augmente en échange', 'is_correct' => false],
                            ['choice_text' => 'La prime augmente, car l’assuré prend moins de risque', 'is_correct' => false],
                            ['choice_text' => 'Tu supportes plus de petits sinistres toi-même, et la prime peut baisser', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Une personne possède un bien de grande valeur mais une assurance avec une couverture très inférieure à la valeur réelle. Quel problème peut se poser ?',
                        'explanation' => 'Si l’assurance couvre bien moins que ce que vaut le bien, l’assureur ne paie que le plafond du contrat. Le propriétaire supporte le reste de la perte.',
                        'choices' => [
                            ['choice_text' => 'La prime serait plus élevée que pour une couverture complète', 'is_correct' => false],
                            ['choice_text' => 'Le bien perdrait de la valeur dès la signature du contrat', 'is_correct' => false],
                            ['choice_text' => 'Une perte importante pourrait ne pas être entièrement indemnisée', 'is_correct' => true],
                            ['choice_text' => 'L’assureur rembourserait quand même la valeur réelle complète du bien', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Dans un contrat d’assurance, que sont les exclusions ?',
                        'explanation' => 'Les exclusions listent ce que l’assureur ne rembourse pas. On les confond avec la franchise (ce que tu paies) ou le plafond (le maximum que l’assureur verse), d’où l’intérêt de les lire avant de signer.',
                        'choices' => [
                            ['choice_text' => 'Les cas où l’assureur ne rembourse pas', 'is_correct' => true],
                            ['choice_text' => 'Le montant maximal que l’assureur peut verser', 'is_correct' => false],
                            ['choice_text' => 'La somme laissée à la charge de l’assuré à chaque sinistre', 'is_correct' => false],
                            ['choice_text' => 'Les réductions de prime accordées aux bons conducteurs', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Lequel de ces risques peut faire l’objet d’une assurance classique ?',
                        'explanation' => 'On assure un événement incertain et subi qui cause une perte : incendie, dégât des eaux, accident. Un pari de Bourse est un risque choisi, pas un risque assurable.',
                        'choices' => [
                            ['choice_text' => 'Un incendie qui abîme un logement', 'is_correct' => true],
                            ['choice_text' => 'Une action qui monte moins que prévu', 'is_correct' => false],
                            ['choice_text' => 'Une baisse du cours d’une action achetée par choix', 'is_correct' => false],
                            ['choice_text' => 'Un changement d’avis sur un achat prévu', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une famille avec trois enfants a très peu d’épargne. Par quels risques doit-elle commencer en matière d’assurance ?',
                        'explanation' => 'On regarde la gravité de l’événement et la capacité de la famille à encaisser la perte. Les gros risques qu’elle ne peut pas financer seule passent en premier.',
                        'choices' => [
                            ['choice_text' => 'Ceux dont les primes sont les plus basses du marché', 'is_correct' => false],
                            ['choice_text' => 'Les biens de petite valeur, faciles à remplacer', 'is_correct' => false],
                            ['choice_text' => 'Aucun : elle empruntera si un coup dur arrive', 'is_correct' => false],
                            ['choice_text' => 'Ceux dont les conséquences seraient trop lourdes à absorber seule', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Deux assurances coûtent le même prix, mais l’une a une franchise de 500 MAD et l’autre de 2 500 MAD. Que peut-on en déduire ?',
                        'explanation' => 'Deux contrats au même prix peuvent différer par la franchise, les plafonds, les exclusions et les garanties. La prime seule ne dit pas le niveau de protection.',
                        'choices' => [
                            ['choice_text' => 'Que celle à 2 500 MAD couvre davantage de risques', 'is_correct' => false],
                            ['choice_text' => 'Qu’elles offrent la même protection, puisque le prix est le même', 'is_correct' => false],
                            ['choice_text' => 'Qu’elles ne protègent pas de la même façon, malgré un prix identique', 'is_correct' => true],
                            ['choice_text' => 'Que la franchise n’a pas d’importance pour comparer deux contrats d’assurance', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une fois par an, que vérifier sur ses contrats d’assurance ?',
                        'explanation' => 'Un déménagement, un changement de revenu ou une naissance modifient les besoins de protection. Une revue annuelle repère les écarts entre les risques actuels et les garanties.',
                        'choices' => [
                            ['choice_text' => 'Quelle assurance a la prime la plus basse, sans regarder les garanties', 'is_correct' => false],
                            ['choice_text' => 'Que les contrats n’ont pas changé depuis l’an dernier', 'is_correct' => false],
                            ['choice_text' => 'Quels contrats sont les moins utilisés, pour les résilier sans les relire', 'is_correct' => false],
                            ['choice_text' => 'Si les montants assurés et les garanties collent encore à sa situation', 'is_correct' => true],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Préparer sa retraite et ses objectifs de long terme',
                'description' => 'Horizon long, effort d\'épargne, inflation, capitalisation et préparation financière.',
                'questions' => [
                    [
                        'question' => 'Karim a 25 ans et prépare sa retraite. Quel est l’avantage de commencer tôt ?',
                        'explanation' => 'Les rendements s’ajoutent au capital et produisent à leur tour des rendements : c’est la capitalisation. Plus on démarre tôt, plus elle a le temps de jouer.',
                        'choices' => [
                            ['choice_text' => 'Les revenus futurs sont garantis dès la première année', 'is_correct' => false],
                            ['choice_text' => 'L’argent reste placé plus longtemps et profite de la capitalisation', 'is_correct' => true],
                            ['choice_text' => 'L’inflation s’arrête quand l’horizon est long', 'is_correct' => false],
                            ['choice_text' => 'Les placements à long terme ne présentent pas de risque', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Hind met 1 500 MAD de côté chaque mois pendant 12 mois, sans rendement. Quel capital aura-t-elle accumulé ?',
                        'explanation' => '1 500 × 12 = 18 000 MAD, sans intérêts ni retraits.',
                        'choices' => [
                            ['choice_text' => '15 000 MAD', 'is_correct' => false],
                            ['choice_text' => '16 500 MAD', 'is_correct' => false],
                            ['choice_text' => '18 000 MAD', 'is_correct' => true],
                            ['choice_text' => '180 000 MAD', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quand on prépare sa retraite, que change une inflation qui dure ?',
                        'explanation' => 'Avec l’inflation, le même montant achète moins de biens et de services au fil des années. Il faut donc penser en pouvoir d’achat futur.',
                        'choices' => [
                            ['choice_text' => 'Les dépenses coûteront plus cher, il faut viser un capital plus élevé', 'is_correct' => true],
                            ['choice_text' => 'Les dépenses de retraite baissent d’elles-mêmes avec le temps', 'is_correct' => false],
                            ['choice_text' => 'L’inflation améliore le rendement réel de l’épargne', 'is_correct' => false],
                            ['choice_text' => 'Les prix baissent, donc il faut épargner moins', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un investisseur de 30 ans et un autre de 62 ans préparent leur retraite avec le même objectif de capital. Leurs placements doivent-ils être les mêmes ?',
                        'explanation' => 'L’allocation dépend de l’horizon, du besoin de revenus et de la capacité à supporter des pertes. L’âge compte, mais ce n’est qu’un élément parmi d’autres.',
                        'choices' => [
                            ['choice_text' => 'Pas forcément : l’horizon et la capacité à encaisser des pertes diffèrent', 'is_correct' => true],
                            ['choice_text' => 'Non : celui de 30 ans doit tout garder sur un compte courant', 'is_correct' => false],
                            ['choice_text' => 'Oui : l’âge n’a pas de lien avec le niveau de risque acceptable', 'is_correct' => false],
                            ['choice_text' => 'Oui : une même retraite suppose les mêmes placements, quel que soit l’âge de chacun', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Karim place son épargne à 6 % par an alors que l’inflation est de 3 %. Son rendement réel est proche de :',
                        'explanation' => 'Approximation simple : 6 % - 3 % = 3 %. Le calcul exact, (1,06 / 1,03) - 1, donne un peu moins : environ 2,9 %.',
                        'choices' => [
                            ['choice_text' => '0,5 %', 'is_correct' => false],
                            ['choice_text' => '3 %', 'is_correct' => true],
                            ['choice_text' => '9 %', 'is_correct' => false],
                            ['choice_text' => '18 %', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Hassan va bientôt commencer à retirer régulièrement de l’argent de son épargne retraite. Que devient important pour lui ?',
                        'explanation' => 'Quand on retire de l’argent chaque mois, il faut une partie du portefeuille facile à vendre. Sinon on risque de vendre en pleine baisse du marché pour payer ses dépenses.',
                        'choices' => [
                            ['choice_text' => 'Placer tout son portefeuille dans l’actif le plus rentable', 'is_correct' => false],
                            ['choice_text' => 'Ne plus détenir aucun actif financier', 'is_correct' => false],
                            ['choice_text' => 'Pouvoir financer ses retraits sans devoir vendre un actif au pire moment', 'is_correct' => true],
                            ['choice_text' => 'Attendre que ses actifs arrivent tous à échéance le même jour, sans rien vendre avant', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'À quoi sert un plan d’épargne à long terme ?',
                        'explanation' => 'Un plan donne un cadre de décision. Il n’élimine pas l’incertitude, mais il permet de suivre ses progrès et d’ajuster la stratégie quand la situation change.',
                        'choices' => [
                            ['choice_text' => 'À garantir le rendement futur de l’épargne', 'is_correct' => false],
                            ['choice_text' => 'À fixer une fois pour toutes les décisions des vingt prochaines années, sans rien changer', 'is_correct' => false],
                            ['choice_text' => 'À relier un objectif à un effort d’épargne, un horizon et une stratégie', 'is_correct' => true],
                            ['choice_text' => 'À mettre le portefeuille à l’abri des variations de marché', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un salarié augmente son épargne mensuelle de 1 000 à 1 200 MAD. Sur une année, l’effort supplémentaire représente :',
                        'explanation' => '200 MAD de plus chaque mois, soit 200 × 12 = 2 400 MAD de plus sur l’année, sans compter le rendement.',
                        'choices' => [
                            ['choice_text' => '1 200 MAD', 'is_correct' => false],
                            ['choice_text' => '2 400 MAD', 'is_correct' => true],
                            ['choice_text' => '3 600 MAD', 'is_correct' => false],
                            ['choice_text' => '12 000 MAD', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Youssef vient d’être augmenté. Que peut-il faire pour mieux préparer sa retraite ?',
                        'explanation' => 'Garder une part de chaque hausse de revenu permet de relever l’effort d’épargne sans que le quotidien en souffre. C’est un arbitrage entre consommer et épargner.',
                        'choices' => [
                            ['choice_text' => 'Augmenter ses dépenses du même montant que sa hausse de salaire, pour en profiter', 'is_correct' => false],
                            ['choice_text' => 'Arrêter d’épargner, puisque son salaire est plus haut', 'is_correct' => false],
                            ['choice_text' => 'Considérer l’épargne comme inutile à cause de l’inflation', 'is_correct' => false],
                            ['choice_text' => 'Mettre de côté une partie de l’augmentation sans toucher à son niveau de vie', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Hind garde 50 000 MAD en billets chez elle pendant vingt ans. Quel risque doit-elle prendre en compte ?',
                        'explanation' => 'Le montant affiché ne bouge pas, mais avec l’inflation il permet d’acheter de moins en moins de choses au fil des années.',
                        'choices' => [
                            ['choice_text' => 'La baisse de valeur des billets quand les taux d’intérêt montent', 'is_correct' => false],
                            ['choice_text' => 'La perte de pouvoir d’achat à cause de l’inflation', 'is_correct' => true],
                            ['choice_text' => 'Le risque de défaut de l’émetteur, comme pour une obligation', 'is_correct' => false],
                            ['choice_text' => 'Le risque de concentration sur un seul secteur d’activité', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quand faut-il revoir son plan de retraite ?',
                        'explanation' => 'Revenu, naissance d’un enfant, nouveau projet : la situation bouge et le plan doit suivre. Pas besoin de tout changer à chaque fluctuation du marché pour autant.',
                        'choices' => [
                            ['choice_text' => 'Le jour du départ en retraite, pas avant', 'is_correct' => false],
                            ['choice_text' => 'Chaque mois, en modifiant le portefeuille à chaque variation du marché, même minime', 'is_correct' => false],
                            ['choice_text' => 'Une seule fois, au moment de la signature du plan', 'is_correct' => false],
                            ['choice_text' => 'Régulièrement, et dès que les revenus, la famille ou les objectifs changent', 'is_correct' => true],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Gérer les décisions financières au quotidien',
                'description' => 'Choix courants, habitudes, trésorerie personnelle et arbitrages entre sécurité et rendement.',
                'questions' => [
                    [
                        'question' => 'Karim reçoit une prime de 20 000 MAD. Il a une dette chère, peu d’épargne de précaution et un projet dans deux ans. Que faire de la prime ?',
                        'explanation' => 'Une rentrée exceptionnelle est l’occasion de renforcer plusieurs points à la fois : sécurité, dette et projet, plutôt que de tout miser sur une seule priorité.',
                        'choices' => [
                            ['choice_text' => 'La répartir entre réserve, dette chère et projet selon les priorités', 'is_correct' => true],
                            ['choice_text' => 'La placer entièrement sur l’actif le plus risqué', 'is_correct' => false],
                            ['choice_text' => 'La dépenser tout de suite, puisqu’elle n’était pas prévue', 'is_correct' => false],
                            ['choice_text' => 'L’utiliser pour relever le plafond de sa carte de crédit', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Hicham dépense 30 MAD chaque jour en cafés et en snacks. Sur un mois de 30 jours, cela représente :',
                        'explanation' => '30 × 30 = 900 MAD par mois, soit plus de 10 000 MAD sur un an. Les petites dépenses répétées pèsent lourd.',
                        'choices' => [
                            ['choice_text' => '300 MAD', 'is_correct' => false],
                            ['choice_text' => '600 MAD', 'is_correct' => false],
                            ['choice_text' => '900 MAD', 'is_correct' => true],
                            ['choice_text' => '1 800 MAD', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Dans la règle 50/30/20, avec 10 000 MAD de revenu net, combien va à l’épargne ?',
                        'explanation' => 'La règle 50/30/20 répartit le revenu net : 50 % pour les besoins, 30 % pour les envies et 20 % pour l’épargne. 20 % de 10 000 MAD font 2 000 MAD.',
                        'choices' => [
                            ['choice_text' => '1 000 MAD', 'is_correct' => false],
                            ['choice_text' => '2 000 MAD', 'is_correct' => true],
                            ['choice_text' => '3 000 MAD', 'is_correct' => false],
                            ['choice_text' => '10 000 MAD', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Youssef voit un téléviseur à 5 000 MAD avec 20 % de remise. Combien paiera-t-il ?',
                        'explanation' => 'Une remise de 20 % veut dire qu’on paie 80 % du prix : 5 000 × 0,80 = 4 000 MAD.',
                        'choices' => [
                            ['choice_text' => '3 800 MAD', 'is_correct' => false],
                            ['choice_text' => '4 000 MAD', 'is_correct' => true],
                            ['choice_text' => '4 200 MAD', 'is_correct' => false],
                            ['choice_text' => '4 500 MAD', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un canapé coûte 6 000 MAD comptant ou 7 200 MAD en plusieurs paiements. Que vérifier avant de choisir le paiement en plusieurs fois ?',
                        'explanation' => 'Une petite mensualité donne l’impression d’un achat moins cher, alors que le total payé est plus élevé ici de 1 200 MAD. Il faut regarder le coût total.',
                        'choices' => [
                            ['choice_text' => 'Le nombre de mensualités : plus il est grand, mieux c’est', 'is_correct' => false],
                            ['choice_text' => 'La mensualité affichée, qui résume bien le prix de l’offre', 'is_correct' => false],
                            ['choice_text' => 'La réputation du magasin sur les réseaux sociaux', 'is_correct' => false],
                            ['choice_text' => 'Le coût total et les conditions de paiement', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Quel signal montre qu’un ménage doit revoir ses habitudes de dépenses ?',
                        'explanation' => 'La réserve est faite pour les imprévus. Si elle sert à payer le quotidien, c’est que le budget est structurellement déséquilibré.',
                        'choices' => [
                            ['choice_text' => 'Il puise souvent dans sa réserve pour payer des dépenses courantes', 'is_correct' => true],
                            ['choice_text' => 'Il garde ses factures pendant plusieurs années', 'is_correct' => false],
                            ['choice_text' => 'Il tient un budget mensuel depuis un an', 'is_correct' => false],
                            ['choice_text' => 'Son épargne augmente en même temps que son revenu', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Samira a 30 000 MAD de trop sur un compte très liquide : elle a déjà une réserve suffisante et aucun besoin immédiat. Que peut-elle faire de cette somme ?',
                        'explanation' => 'Garder plus de liquidités que nécessaire a un coût : l’argent ne travaille pas. Mieux vaut l’affecter à un projet, avec un risque adapté à sa date.',
                        'choices' => [
                            ['choice_text' => 'La laisser sur un compte courant sans intérêt, ce qui est plus pratique au quotidien', 'is_correct' => false],
                            ['choice_text' => 'L’ajouter à son fonds d’urgence déjà suffisant', 'is_correct' => false],
                            ['choice_text' => 'La dépenser en entier avant la fin du mois', 'is_correct' => false],
                            ['choice_text' => 'Lui fixer un objectif et choisir un placement adapté à l’horizon', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Samira est payée le 5, mais son loyer et ses factures tombent le 1er. Même avec un revenu suffisant, quel problème peut-elle rencontrer ?',
                        'explanation' => 'Ce n’est pas le niveau du revenu qui coince, c’est le calendrier des entrées et des sorties. Suivre sa trésorerie permet d’anticiper ces creux.',
                        'choices' => [
                            ['choice_text' => 'Un manque de liquidités pendant quelques jours, à cause du décalage', 'is_correct' => true],
                            ['choice_text' => 'Un salaire trop faible pour couvrir son loyer', 'is_correct' => false],
                            ['choice_text' => 'Une hausse du loyer en cas de paiement tardif', 'is_correct' => false],
                            ['choice_text' => 'Un budget annuel qui supprime les paiements récurrents', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Que veut dire « coût d’opportunité » ?',
                        'explanation' => 'C’est la valeur de la meilleure option qu’on abandonne. Exemple : garder 10 000 MAD sans intérêt alors qu’un placement sûr aurait rapporté 400 MAD, c’est renoncer à ces 400 MAD.',
                        'choices' => [
                            ['choice_text' => 'La différence entre le prix affiché et le prix finalement négocié en magasin', 'is_correct' => false],
                            ['choice_text' => 'Le total des frais bancaires prélevés dans l’année', 'is_correct' => false],
                            ['choice_text' => 'Ce à quoi on renonce en choisissant une option plutôt qu’une autre', 'is_correct' => true],
                            ['choice_text' => 'Le prix payé pour une offre saisie à la dernière minute', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Youssef veut dépenser moins mais ne sait pas par où commencer. Quel premier pas est le plus utile ?',
                        'explanation' => 'Avec des chiffres réels, on voit où une économie a un vrai effet. Couper au hasard donne rarement de bons résultats.',
                        'choices' => [
                            ['choice_text' => 'Passer en revue quelques mois de dépenses pour repérer les gros postes', 'is_correct' => true],
                            ['choice_text' => 'Supprimer d’un coup toutes les petites dépenses', 'is_correct' => false],
                            ['choice_text' => 'Changer ses placements avant d’avoir regardé ses dépenses', 'is_correct' => false],
                            ['choice_text' => 'Emprunter un peu pour souffler le temps de s’organiser', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Cas pratiques de finance personnelle',
                'description' => 'Mises en situation intégrées pour relier budget, dette, épargne, investissement et gestion du risque.',
                'questions' => [
                    [
                        'question' => 'Omar gagne 12 000 MAD nets. Ses dépenses essentielles sont de 7 000 MAD, ses dépenses discrétionnaires de 2 000 MAD et il rembourse 1 500 MAD de dettes. Combien lui reste-t-il avant toute nouvelle épargne ?',
                        'explanation' => 'Les sorties indiquées totalisent 7 000 + 2 000 + 1 500 = 10 500 MAD. Il reste donc 12 000 - 10 500 = 1 500 MAD avant une nouvelle affectation.',
                        'choices' => [
                            ['choice_text' => '1 000 MAD', 'is_correct' => false],
                            ['choice_text' => '1 500 MAD', 'is_correct' => true],
                            ['choice_text' => '2 500 MAD', 'is_correct' => false],
                            ['choice_text' => '10 500 MAD', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Omar a 18 000 MAD d’épargne liquide et 6 000 MAD de dépenses essentielles par mois. Il veut une réserve de cinq mois. Combien lui manque-t-il ?',
                        'explanation' => 'Cinq mois × 6 000 = 30 000 MAD visés. Il a déjà 18 000 MAD, donc il lui manque 12 000 MAD.',
                        'choices' => [
                            ['choice_text' => '6 000 MAD', 'is_correct' => false],
                            ['choice_text' => '12 000 MAD', 'is_correct' => true],
                            ['choice_text' => '18 000 MAD', 'is_correct' => false],
                            ['choice_text' => '30 000 MAD', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Nora rembourse par anticipation 5 000 MAD d’une dette à 11 %. Combien d’intérêts évite-t-elle sur un an ?',
                        'explanation' => '5 000 × 11 % = 550 MAD d’intérêts économisés sur un an, hors pénalités éventuelles.',
                        'choices' => [
                            ['choice_text' => '550 MAD', 'is_correct' => true],
                            ['choice_text' => '1 100 MAD', 'is_correct' => false],
                            ['choice_text' => '5 000 MAD', 'is_correct' => false],
                            ['choice_text' => '5 550 MAD', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Hanane ne paie chaque mois que le minimum demandé sur sa carte de crédit. Que se passe-t-il ?',
                        'explanation' => 'Le minimum est calculé pour que la banque touche ses intérêts, pas pour que tu sortes vite de la dette. Le solde reste dû, produit de nouveaux intérêts et peut traîner des années.',
                        'choices' => [
                            ['choice_text' => 'Les intérêts s’arrêtent dès que le minimum est payé', 'is_correct' => false],
                            ['choice_text' => 'Le taux de la carte baisse à chaque minimum payé', 'is_correct' => false],
                            ['choice_text' => 'Le minimum couvre surtout des intérêts : la dette baisse très lentement', 'is_correct' => true],
                            ['choice_text' => 'La banque annule le reste de la dette au bout d’un an', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Youssef possède un appartement de 900 000 MAD, mais seulement 2 000 MAD sur son compte. Une dépense urgente de 20 000 MAD arrive. Quel est son problème ?',
                        'explanation' => 'Être propriétaire ne met pas d’argent sur le compte : vendre un appartement prend des mois, parfois à perte. D’où l’intérêt de garder une partie de l’épargne disponible.',
                        'choices' => [
                            ['choice_text' => 'Un risque de change sur son appartement', 'is_correct' => false],
                            ['choice_text' => 'Une trop grande diversification de son patrimoine', 'is_correct' => false],
                            ['choice_text' => 'Un patrimoine peu liquide : on ne vend pas un appartement en un jour', 'is_correct' => true],
                            ['choice_text' => 'Un taux d’intérêt trop élevé sur son compte', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un ménage gagne 12 000 MAD et dépense 9 000 MAD par mois. Quel est son taux d’épargne ?',
                        'explanation' => '12 000 - 9 000 = 3 000 MAD de mis de côté. 3 000 / 12 000 = 25 %.',
                        'choices' => [
                            ['choice_text' => '20 %', 'is_correct' => false],
                            ['choice_text' => '25 %', 'is_correct' => true],
                            ['choice_text' => '30 %', 'is_correct' => false],
                            ['choice_text' => '33,3 %', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Salma place 10 000 MAD à 5 % par an et laisse les intérêts sur le compte. Combien aura-t-elle au bout de deux ans ?',
                        'explanation' => 'Première année : 10 000 × 1,05 = 10 500 MAD. Deuxième année, les intérêts rapportent aussi : 10 500 × 1,05 = 11 025 MAD. Sans réinvestir, on aurait 11 000 MAD.',
                        'choices' => [
                            ['choice_text' => '10 500 MAD', 'is_correct' => false],
                            ['choice_text' => '11 000 MAD', 'is_correct' => false],
                            ['choice_text' => '11 025 MAD', 'is_correct' => true],
                            ['choice_text' => '12 500 MAD', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Meryem veut acheter un scooter à 18 000 MAD. Elle a déjà 6 000 MAD de côté et peut mettre 1 500 MAD par mois, hors rendement. Dans combien de mois aura-t-elle la somme ?',
                        'explanation' => 'Il lui manque 18 000 - 6 000 = 12 000 MAD. À 1 500 MAD par mois : 12 000 / 1 500 = 8 mois.',
                        'choices' => [
                            ['choice_text' => '6 mois', 'is_correct' => false],
                            ['choice_text' => '8 mois', 'is_correct' => true],
                            ['choice_text' => '12 mois', 'is_correct' => false],
                            ['choice_text' => '18 mois', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Laquelle de ces habitudes décrit une gestion financière équilibrée ?',
                        'explanation' => 'Une bonne situation combine une réserve pour les imprévus, des dettes maîtrisées et des placements adaptés aux objectifs. Il n’y a pas une règle unique qui convient à tous.',
                        'choices' => [
                            ['choice_text' => 'Chercher le rendement maximal avec toute son épargne', 'is_correct' => false],
                            ['choice_text' => 'Refuser de s’endetter, même pour un projet bien financé', 'is_correct' => false],
                            ['choice_text' => 'Garder une réserve, limiter les dettes chères et investir selon son horizon', 'is_correct' => true],
                            ['choice_text' => 'Changer d’investissement chaque semaine pour suivre les marchés', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Imane a trois mois de réserve, pas de dette chère et quinze ans devant elle avant d’avoir besoin de l’argent. Quelle question compte le plus avant d’investir ?',
                        'explanation' => 'Une fois la sécurité à court terme et les dettes chères réglées, le choix se fait selon l’horizon, le risque acceptable et les objectifs.',
                        'choices' => [
                            ['choice_text' => 'Comment vider sa réserve pour investir davantage ?', 'is_correct' => false],
                            ['choice_text' => 'Quelle action a le plus monté la semaine dernière sur la place de Casablanca ?', 'is_correct' => false],
                            ['choice_text' => 'Quel risque peut-elle accepter, et quelle répartition convient à quinze ans ?', 'is_correct' => true],
                            ['choice_text' => 'Comment éviter toute fluctuation de valeur ?', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Deux collègues gagnent le même salaire. Qu’est-ce qui peut leur imposer des choix financiers différents ?',
                        'explanation' => 'Le revenu compte, mais ne suffit pas. La situation globale et les objectifs de chacun déterminent les bons choix.',
                        'choices' => [
                            ['choice_text' => 'Uniquement le montant de leur épargne actuelle', 'is_correct' => false],
                            ['choice_text' => 'Rien : à salaire égal, la meilleure décision financière est forcément la même', 'is_correct' => false],
                            ['choice_text' => 'Uniquement leur âge, qui décide du bon placement', 'is_correct' => false],
                            ['choice_text' => 'Leurs dettes, charges de famille, objectifs et tolérance au risque', 'is_correct' => true],
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
