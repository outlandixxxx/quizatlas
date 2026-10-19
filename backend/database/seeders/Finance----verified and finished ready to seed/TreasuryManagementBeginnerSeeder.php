<?php

namespace Database\Seeders;

use App\Models\Choice;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class TreasuryManagementBeginnerSeeder extends Seeder
{
    public function run(): void
    {
        $subject = Subject::where('slug', 'treasury-management')->firstOrFail();

        $quizSettings = [
            ['duration' => 20, 'passing_score' => 55],
            ['duration' => 22, 'passing_score' => 58],
            ['duration' => 24, 'passing_score' => 58],
            ['duration' => 21, 'passing_score' => 56],
            ['duration' => 25, 'passing_score' => 60],
            ['duration' => 23, 'passing_score' => 57],
            ['duration' => 20, 'passing_score' => 55],
            ['duration' => 27, 'passing_score' => 60],
            ['duration' => 19, 'passing_score' => 56],
            ['duration' => 28, 'passing_score' => 61],
            ['duration' => 21, 'passing_score' => 57],
        ];

        $quizzes = [
            [
                'title' => 'Les bases du treasury management',
                'description' => 'Comprendre le rôle de la trésorerie, ses objectifs et les décisions quotidiennes qui protègent la liquidité de l\'entreprise.',
                'questions' => [
                    [
                        'question' => 'Karim voit un bénéfice correct dans ses comptes, mais son compte bancaire est presque vide en fin de mois. Comment l’expliquer ?',
                        'explanation' => 'Une vente entre dans le résultat dès qu’elle est faite, même si le client paie 60 jours plus tard. En attendant, l’argent n’est pas en banque, alors que les achats, les investissements et les remboursements de dettes continuent de sortir.',
                        'choices' => [
                            ['choice_text' => 'Le bénéfice ne comprend que les ventes déjà encaissées', 'is_correct' => false],
                            ['choice_text' => 'La banque prélève chaque mois le bénéfice de l’entreprise', 'is_correct' => false],
                            ['choice_text' => 'Le bénéfice de l’année n’est versé sur le compte qu’en décembre, à la clôture', 'is_correct' => false],
                            ['choice_text' => 'Le bénéfice compte les ventes même si les clients n’ont pas encore payé', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Le directeur financier demande au trésorier de préparer un suivi quotidien des entrées et sorties de cash. Quel est l’objectif principal ?',
                        'explanation' => 'Le suivi de cash sert d’abord à savoir ce qui doit entrer et sortir, quand, et pour quel montant. Cette visibilité permet d’agir avant qu’un manque de liquidité ne devienne urgent.',
                        'choices' => [
                            ['choice_text' => 'Remplacer le bilan et le compte de résultat annuels', 'is_correct' => false],
                            ['choice_text' => 'Mesurer la marge réalisée sur chaque produit vendu', 'is_correct' => false],
                            ['choice_text' => 'Calculer le bénéfice net de l’exercice en cours', 'is_correct' => false],
                            ['choice_text' => 'Anticiper les besoins et éviter une tension de liquidité', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Une société laisse 500 000 € dormir sur son compte courant pendant des semaines, sans dépense prévue. Que perd-elle ?',
                        'explanation' => 'C’est le coût d’opportunité : cet argent immobile ne rapporte rien alors qu’on pourrait en placer une partie à court terme ou rembourser une dette chère. On garde quand même un coussin de sécurité.',
                        'choices' => [
                            ['choice_text' => 'Les intérêts qu’elle aurait pu gagner en plaçant une partie de cet argent', 'is_correct' => true],
                            ['choice_text' => 'La possibilité de demander un crédit à sa banque en cas de besoin', 'is_correct' => false],
                            ['choice_text' => 'Du chiffre d’affaires, car un solde élevé ralentit les commandes', 'is_correct' => false],
                            ['choice_text' => 'Sa capacité d’emprunt, que la banque réduit quand le compte est bien rempli', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Dans une entreprise, qui se sert le plus du cash forecast pour décider s’il faut emprunter à court terme ?',
                        'explanation' => 'Le trésorier compare les encaissements attendus aux paiements à venir. Il voit ainsi s’il faut utiliser une ligne de crédit, décaler un paiement ou placer un excédent.',
                        'choices' => [
                            ['choice_text' => 'Le directeur commercial, pour fixer les prix de vente', 'is_correct' => false],
                            ['choice_text' => 'Le responsable des ressources humaines, pour le recrutement', 'is_correct' => false],
                            ['choice_text' => 'Le service juridique, pour rédiger les contrats', 'is_correct' => false],
                            ['choice_text' => 'Le trésorier ou le directeur financier', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Une filiale prévoit un décaissement exceptionnel de 300 000 € vendredi. Quel document est particulièrement utile pour vérifier si le paiement peut être absorbé sans difficulté ?',
                        'explanation' => 'Pour une sortie précise à une date proche, la prévision de trésorerie à court terme est l’outil le plus pertinent. Elle permet de voir le solde disponible avant et après le paiement.',
                        'choices' => [
                            ['choice_text' => 'Le bilan de fin d’année de la filiale', 'is_correct' => false],
                            ['choice_text' => 'Le budget annuel des ventes du groupe', 'is_correct' => false],
                            ['choice_text' => 'Le tableau d’amortissement des immobilisations', 'is_correct' => false],
                            ['choice_text' => 'La prévision de trésorerie à court terme', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Un découvert bancaire non planifié est mal vu par le trésorier, car il :',
                        'explanation' => 'Le découvert imprévu coûte souvent plus cher qu’un crédit négocié à l’avance. Il montre surtout qu’on n’a pas vu venir le manque de liquidité, alors que c’est justement le travail du trésorier.',
                        'choices' => [
                            ['choice_text' => 'est interdit par la loi pour une entreprise', 'is_correct' => false],
                            ['choice_text' => 'supprime les frais bancaires du mois suivant', 'is_correct' => false],
                            ['choice_text' => 'coûte cher et montre qu’on a mal anticipé ses besoins', 'is_correct' => true],
                            ['choice_text' => 'empêche les clients de payer leurs factures', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Que veut dire « liquidité » pour une entreprise ?',
                        'explanation' => 'La liquidité, c’est la capacité à régler ses échéances au bon moment. Une entreprise peut être rentable et manquer de liquidité si l’argent arrive trop tard.',
                        'choices' => [
                            ['choice_text' => 'Pouvoir payer ses factures à temps avec l’argent dont elle dispose', 'is_correct' => true],
                            ['choice_text' => 'Avoir un chiffre d’affaires en forte hausse d’une année sur l’autre', 'is_correct' => false],
                            ['choice_text' => 'Posséder beaucoup d’immobilisations, comme des machines et des locaux', 'is_correct' => false],
                            ['choice_text' => 'Réaliser un bénéfice supérieur à celui de ses concurrents', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Youssef garde en permanence une réserve minimale de cash. À quoi lui sert-elle ?',
                        'explanation' => 'Ce coussin de sécurité couvre un encaissement en retard, une dépense imprévue ou une baisse d’activité, sans devoir courir chercher un financement en urgence.',
                        'choices' => [
                            ['choice_text' => 'À augmenter le rendement des capitaux propres (ROE)', 'is_correct' => false],
                            ['choice_text' => 'À réduire l’impôt sur les sociétés', 'is_correct' => false],
                            ['choice_text' => 'À financer les investissements à long terme de l’entreprise', 'is_correct' => false],
                            ['choice_text' => 'À absorber un imprévu, comme un client qui paie en retard', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Le trésorier d’une entreprise suit son solde bancaire, ses encaissements attendus et ses paiements à venir. De quelle gestion s’agit-il ?',
                        'explanation' => 'Suivre les flux d’argent à court terme pour être sûr de pouvoir payer, c’est le cœur du métier de trésorier. Les autres services utilisent ces chiffres, mais c’est lui qui les surveille au quotidien.',
                        'choices' => [
                            ['choice_text' => 'De la gestion des stocks', 'is_correct' => false],
                            ['choice_text' => 'De la gestion de la paie', 'is_correct' => false],
                            ['choice_text' => 'De la gestion de la liquidité', 'is_correct' => true],
                            ['choice_text' => 'De l’analyse boursière de l’entreprise', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise prévoit 900 000 € d’encaissements et 780 000 € de décaissements sur la semaine, sans autre variation. Quel est le flux net de trésorerie de la semaine ?',
                        'explanation' => 'Le flux net est égal aux encaissements moins les décaissements : 900 000 € - 780 000 € = +120 000 €. La trésorerie augmente donc de 120 000 € sur la période, toutes choses égales par ailleurs.',
                        'choices' => [
                            ['choice_text' => '-180 000 €', 'is_correct' => false],
                            ['choice_text' => '-120 000 €', 'is_correct' => false],
                            ['choice_text' => '+120 000 €', 'is_correct' => true],
                            ['choice_text' => '+180 000 €', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Prévision et pilotage du cash',
                'description' => 'S\'entraîner à lire un cash forecast, repérer les écarts et prendre des décisions simples de trésorerie.',
                'questions' => [
                    [
                        'question' => 'Lundi matin, le cash forecast annonce 80 000 € en banque, puis -40 000 € vendredi soir. Que faut-il en conclure ?',
                        'explanation' => 'Le solde prévu passe sous zéro. Sans autre encaissement, le trésorier doit agir avant vendredi : tirer sur une ligne de crédit, accélérer un encaissement ou décaler un paiement.',
                        'choices' => [
                            ['choice_text' => 'L’entreprise a 40 000 € d’excédent à placer cette semaine', 'is_correct' => false],
                            ['choice_text' => 'Le forecast est faux, car un solde ne peut pas être négatif', 'is_correct' => false],
                            ['choice_text' => 'Les ventes de la semaine suivante vont baisser à cause de ce solde négatif prévu', 'is_correct' => false],
                            ['choice_text' => 'Il faudra trouver un financement court terme si aucun encaissement ne s’ajoute', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Que gagne le trésorier à comparer ses prévisions de cash avec ce qui s’est réellement passé ?',
                        'explanation' => 'Cette comparaison montre où l’on s’est trompé : un client en retard, un paiement décalé, une hypothèse trop optimiste. On en tient compte pour le forecast suivant.',
                        'choices' => [
                            ['choice_text' => 'Il repère les écarts et rend ses prochaines prévisions plus fiables', 'is_correct' => true],
                            ['choice_text' => 'Il transforme les écarts constatés en bénéfice comptable', 'is_correct' => false],
                            ['choice_text' => 'Il peut se passer de budget pour les mois suivants', 'is_correct' => false],
                            ['choice_text' => 'Il fait disparaître les créances clients en retard', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Plusieurs gros clients paient régulièrement avec dix jours de retard. Que change le trésorier dans son cash forecast ?',
                        'explanation' => 'Une prévision utile doit refléter la façon dont les clients paient vraiment. S’ils paient toujours plus tard, on décale les dates, sinon on croit avoir plus de liquidité qu’en réalité.',
                        'choices' => [
                            ['choice_text' => 'Il retire ces clients du forecast jusqu’à leur prochain règlement', 'is_correct' => false],
                            ['choice_text' => 'Il garde les dates inscrites dans le contrat, sans tenir compte des retards passés', 'is_correct' => false],
                            ['choice_text' => 'Il décale de dix jours les dates d’encaissement prévues pour ces clients', 'is_correct' => true],
                            ['choice_text' => 'Il ajoute une marge de 10 % sur toutes les ventes prévues', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Le budget de trésorerie prévoit 250 000 € d’encaissements clients en juin. En pratique, seuls 220 000 € arrivent et le reste est reporté à juillet. De combien juin est-il inférieur à la prévision sur ce flux ?',
                        'explanation' => 'L’écart est de 250 000 € - 220 000 € = 30 000 €. Il s’agit d’un encaissement inférieur au montant prévu pour juin, même si une partie arrive ensuite en juillet.',
                        'choices' => [
                            ['choice_text' => '20 000 €', 'is_correct' => false],
                            ['choice_text' => '30 000 €', 'is_correct' => true],
                            ['choice_text' => '40 000 €', 'is_correct' => false],
                            ['choice_text' => '470 000 €', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Dans un forecast à 13 semaines, distinguer les flux sûrs des flux incertains permet surtout de :',
                        'explanation' => 'Deux prévisions de même total ne se valent pas si l’une repose sur des contrats signés et l’autre sur des espoirs. Séparer les deux aide à bâtir des scénarios de liquidité.',
                        'choices' => [
                            ['choice_text' => 'égaliser le montant de tous les flux de la période', 'is_correct' => false],
                            ['choice_text' => 'calculer l’EBITDA de chaque semaine', 'is_correct' => false],
                            ['choice_text' => 'supprimer les dépenses qui varient selon l’activité', 'is_correct' => false],
                            ['choice_text' => 'mesurer le risque qui pèse sur le solde prévu', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Le cash d’une filiale baisse fortement la semaine avant le versement annuel des primes. Que fait le trésorier ?',
                        'explanation' => 'Un paiement important, même annuel, doit entrer tôt dans la prévision. On peut alors garder du cash de côté ou organiser un financement temporaire.',
                        'choices' => [
                            ['choice_text' => 'Il attend le jour du versement pour regarder le solde', 'is_correct' => false],
                            ['choice_text' => 'Il retire ce paiement du forecast, puisqu’il revient chaque année', 'is_correct' => false],
                            ['choice_text' => 'Il vérifie dès maintenant les ressources et les lignes de crédit disponibles', 'is_correct' => true],
                            ['choice_text' => 'Il place l’argent sur un support bloqué pendant un an pour obtenir un meilleur taux', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise démarre la semaine avec 150 000 € de cash. Elle encaisse 90 000 € et paie 210 000 €. Quel est le solde de fin de semaine avant tout autre mouvement ?',
                        'explanation' => 'Le solde final est 150 000 € + 90 000 € - 210 000 € = 30 000 €. La société termine donc la semaine avec un solde positif, mais relativement faible.',
                        'choices' => [
                            ['choice_text' => '-30 000 €', 'is_correct' => false],
                            ['choice_text' => '30 000 €', 'is_correct' => true],
                            ['choice_text' => '150 000 €', 'is_correct' => false],
                            ['choice_text' => '330 000 €', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Lequel de ces événements oblige à mettre à jour le cash forecast tout de suite ?',
                        'explanation' => 'Si une grosse sortie d’argent se rapproche, le profil de liquidité change aussitôt. On met le forecast à jour dès qu’une information financière importante arrive.',
                        'choices' => [
                            ['choice_text' => 'Un gros fournisseur demande à être payé plus tôt que prévu', 'is_correct' => true],
                            ['choice_text' => 'Un client confirme qu’il paiera à la date déjà prévue', 'is_correct' => false],
                            ['choice_text' => 'Le bilan de l’an dernier est validé par les commissaires aux comptes', 'is_correct' => false],
                            ['choice_text' => 'Le directeur commercial présente son plan de ventes à trois ans', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une prévision annonce 400 000 € d’excédent, dont 250 000 € viennent d’une vente pas encore signée. Que retient un trésorier prudent ?',
                        'explanation' => 'Un encaissement qui dépend d’une signature n’est pas du cash certain : 400 000 - 250 000 = 150 000 €. Beaucoup de trésoriers font un scénario de base prudent et un scénario favorable.',
                        'choices' => [
                            ['choice_text' => 'Les 400 000 € sont disponibles, car la vente sera signée', 'is_correct' => false],
                            ['choice_text' => 'Seuls 150 000 € peuvent être comptés comme sûrs', 'is_correct' => true],
                            ['choice_text' => 'Les 250 000 € peuvent être dépensés dès aujourd’hui', 'is_correct' => false],
                            ['choice_text' => 'Il faut jeter la prévision, car elle contient un flux incertain', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'À court terme, un cash forecast est souvent très détaillé, jour par jour. Pour quelle raison ?',
                        'explanation' => 'À court terme, le calendrier compte autant que le montant. Un paiement important avancé de quelques jours peut créer une tension alors que la situation mensuelle globale semble équilibrée.',
                        'choices' => [
                            ['choice_text' => 'Quelques jours de décalage suffisent à créer une tension de liquidité', 'is_correct' => true],
                            ['choice_text' => 'Le court terme est plus simple à prévoir que le long terme', 'is_correct' => false],
                            ['choice_text' => 'La banque exige un forecast jour par jour pour ouvrir un compte', 'is_correct' => false],
                            ['choice_text' => 'Un forecast détaillé tient lieu de comptabilité générale', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'BFR et trésorerie opérationnelle',
                'description' => 'Relier créances, stocks, dettes fournisseurs et besoin en fonds de roulement aux besoins de cash.',
                'questions' => [
                    [
                        'question' => 'Youssef accorde 60 jours à ses clients mais doit payer ses fournisseurs sous 30 jours. Qu’est-ce que cela implique pour lui ?',
                        'explanation' => 'Il paie à J+30 mais n’encaisse qu’à J+60 : pendant 30 jours, c’est lui qui avance l’argent. C’est exactement ce qui fait grimper le BFR.',
                        'choices' => [
                            ['choice_text' => 'Ses clients financent son activité pendant 30 jours', 'is_correct' => false],
                            ['choice_text' => 'Son besoin en fonds de roulement disparaît', 'is_correct' => false],
                            ['choice_text' => 'Il doit financer environ 30 jours entre ses paiements et ses encaissements', 'is_correct' => true],
                            ['choice_text' => 'Il bénéficie de 30 jours de trésorerie d’avance sur le paiement de ses fournisseurs', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pour libérer vite du cash bloqué dans les créances clients, quelle piste est la plus directe ?',
                        'explanation' => 'Tant qu’une créance n’est pas encaissée, elle immobilise du cash. Facturer plus vite, relancer et proposer des modes de paiement plus pratiques accélèrent les rentrées.',
                        'choices' => [
                            ['choice_text' => 'Accorder des délais de paiement plus longs aux clients', 'is_correct' => false],
                            ['choice_text' => 'Constituer davantage de stock de produits finis', 'is_correct' => false],
                            ['choice_text' => 'Acheter du matériel pour produire plus vite', 'is_correct' => false],
                            ['choice_text' => 'Relancer les clients en retard et accélérer la facturation', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Une société réduit son stock moyen de 1,2 M€ sans perdre de ventes. Quel effet peut-on attendre sur sa trésorerie ?',
                        'explanation' => 'Un stock, c’est de l’argent immobilisé. Le réduire sans casser le service client libère du cash.',
                        'choices' => [
                            ['choice_text' => 'Une hausse équivalente de ses dettes bancaires à court terme et de ses intérêts', 'is_correct' => false],
                            ['choice_text' => 'Une baisse de 1,2 M€ de son chiffre d’affaires', 'is_correct' => false],
                            ['choice_text' => 'Jusqu’à 1,2 M€ de cash en plus, qui était bloqué dans le stock', 'is_correct' => true],
                            ['choice_text' => 'Une baisse de 1,2 M€ de ses créances clients', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un commerçant encaisse 75 % de ses ventes tout de suite, mais le reste à 90 jours. Que peut-il faire pour réduire ce décalage ?',
                        'explanation' => 'En suivant les créances, on voit quelles factures arrivent à échéance, lesquelles sont en retard et quels clients paient mal. Les ventes se transforment plus vite en cash.',
                        'choices' => [
                            ['choice_text' => 'Garder un stock de sécurité plus important que d’habitude', 'is_correct' => false],
                            ['choice_text' => 'Suivre ses créances et relancer les clients concernés', 'is_correct' => true],
                            ['choice_text' => 'Régler ses fournisseurs avant leur échéance habituelle', 'is_correct' => false],
                            ['choice_text' => 'Réduire sa réserve de cash pour limiter les frais', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Le BFR dépend surtout de trois éléments. Lesquels ?',
                        'explanation' => 'Le BFR, c’est ce que l’exploitation immobilise dans les stocks et les créances, moins ce que les fournisseurs financent. À retenir : stocks + clients - fournisseurs.',
                        'choices' => [
                            ['choice_text' => 'Les stocks, les créances clients et les dettes fournisseurs', 'is_correct' => true],
                            ['choice_text' => 'Le capital social, les réserves et les dividendes', 'is_correct' => false],
                            ['choice_text' => 'Les immobilisations, les emprunts et les amortissements', 'is_correct' => false],
                            ['choice_text' => 'Le chiffre d’affaires, la marge brute et le résultat net', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise obtient de son fournisseur un délai de paiement de 45 jours au lieu de 30, sans pénalité. Qu’est-ce que ça change ?',
                        'explanation' => 'Payer plus tard, c’est garder l’argent plus longtemps. Le besoin de financement de l’exploitation diminue, au moins pour un temps.',
                        'choices' => [
                            ['choice_text' => 'Ses clients sont obligés de la payer 15 jours plus tôt', 'is_correct' => false],
                            ['choice_text' => 'Sa marge brute augmente d’autant, grâce à la remise obtenue en échange du nouveau délai', 'is_correct' => false],
                            ['choice_text' => 'Son stock diminue de quinze jours de ventes', 'is_correct' => false],
                            ['choice_text' => 'Elle garde son cash 15 jours de plus, donc son besoin de financement baisse', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Les ventes d’une entreprise explosent, mais ses clients paient plus tard et ses stocks gonflent. Que risque-t-il de se passer ?',
                        'explanation' => 'Une entreprise peut croître, être rentable, et pourtant manquer de cash : elle achète du stock et attend les paiements de ses clients. C’est fréquent quand le BFR monte avec l’activité.',
                        'choices' => [
                            ['choice_text' => 'Elle va dégager un excédent de cash dès que les ventes montent, grâce à ce volume', 'is_correct' => false],
                            ['choice_text' => 'Elle n’aura plus besoin de stock puisque les ventes augmentent', 'is_correct' => false],
                            ['choice_text' => 'Elle peut manquer de cash avant d’avoir encaissé les ventes supplémentaires', 'is_correct' => true],
                            ['choice_text' => 'Elle encaissera ses créances le jour même de la vente', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise a 400 000 € de créances clients et 250 000 € de dettes fournisseurs. En ne regardant que ces deux postes, quel besoin net cela représente-t-il ?',
                        'explanation' => 'En ne considérant que ces deux postes, le besoin net associé est 400 000 € - 250 000 € = 150 000 €. Les autres composantes du BFR ne sont pas incluses dans ce calcul simplifié.',
                        'choices' => [
                            ['choice_text' => '150 000 €', 'is_correct' => true],
                            ['choice_text' => '250 000 €', 'is_correct' => false],
                            ['choice_text' => '400 000 €', 'is_correct' => false],
                            ['choice_text' => '650 000 €', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel signal montre à un trésorier que les clients paient de plus en plus lentement ?',
                        'explanation' => 'Le DSO (Days Sales Outstanding) mesure le nombre moyen de jours nécessaires pour encaisser les créances clients. Sa hausse peut signaler un recouvrement plus lent et une consommation accrue de cash.',
                        'choices' => [
                            ['choice_text' => 'Une hausse du DPO', 'is_correct' => false],
                            ['choice_text' => 'Une baisse du stock moyen', 'is_correct' => false],
                            ['choice_text' => 'Une hausse du ROE', 'is_correct' => false],
                            ['choice_text' => 'Une hausse du DSO', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Le directeur commercial veut accorder des délais de paiement plus longs pour gagner des clients. Que doit lui rappeler le trésorier ?',
                        'explanation' => 'Accorder plus de temps aux clients peut aider à vendre, mais les encaissements arrivent plus tard. La décision commerciale pèse donc directement sur le besoin de financement.',
                        'choices' => [
                            ['choice_text' => 'Des délais plus longs immobilisent plus de cash dans les créances', 'is_correct' => true],
                            ['choice_text' => 'Les délais de paiement sont fixés par la banque, pas par l’entreprise', 'is_correct' => false],
                            ['choice_text' => 'Un délai long fait baisser mécaniquement le chiffre d’affaires', 'is_correct' => false],
                            ['choice_text' => 'Les délais accordés n’influencent que le résultat comptable', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Gestion de la liquidité et cash buffer',
                'description' => 'Évaluer les besoins de liquidité, les réserves de sécurité et les réponses à une tension de cash.',
                'questions' => [
                    [
                        'question' => 'Le cash minimum de sécurité d’une entreprise est de 100 000 €. Elle a 140 000 € et doit payer 70 000 €. Que se passe-t-il ?',
                        'explanation' => '140 000 - 70 000 = 70 000 €, soit 30 000 € sous le minimum. Il faut prévoir une solution : ligne de crédit, encaissement accéléré ou paiement décalé.',
                        'choices' => [
                            ['choice_text' => 'Il restera 70 000 €, ce qui reste au-dessus du minimum', 'is_correct' => false],
                            ['choice_text' => 'Il restera 70 000 €, soit 30 000 € de moins que le minimum', 'is_correct' => true],
                            ['choice_text' => 'Il restera 40 000 €, soit 60 000 € sous le minimum', 'is_correct' => false],
                            ['choice_text' => 'Il restera 210 000 €, bien au-dessus du minimum', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Quel est l’inconvénient d’un cash buffer trop élevé ?',
                        'explanation' => 'Garder du cash protège l’entreprise, mais trop de cash inutilisé a un coût d’opportunité. Le bon niveau est un équilibre entre sécurité et efficacité.',
                        'choices' => [
                            ['choice_text' => 'L’argent dort alors qu’il pourrait être placé ou rembourser une dette chère', 'is_correct' => true],
                            ['choice_text' => 'Le risque de crédit des clients augmente avec le niveau de cash', 'is_correct' => false],
                            ['choice_text' => 'Le résultat d’exploitation baisse d’autant, car le cash est comptabilisé en charge', 'is_correct' => false],
                            ['choice_text' => 'Les fournisseurs refusent d’accorder des délais de paiement', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise a une ligne de crédit confirmée qu’elle n’a pas utilisée. Quel est son avantage sur une recherche de financement en urgence ?',
                        'explanation' => 'Une ligne confirmée est déjà négociée et documentée : quand le besoin de cash apparaît, il suffit de tirer, dans les limites du contrat.',
                        'choices' => [
                            ['choice_text' => 'Elle ne coûte rien, même quand on ne l’utilise pas', 'is_correct' => false],
                            ['choice_text' => 'Elle ne coûte rien tant qu’on ne la tire pas, et se renouvelle chaque année sans aucune condition', 'is_correct' => false],
                            ['choice_text' => 'Elle permet de choisir librement un nouveau taux à chaque tirage', 'is_correct' => false],
                            ['choice_text' => 'L’argent est déjà prévu avec la banque et peut être tiré selon les conditions signées', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise fait face à un retard temporaire d’encaissement de 200 000 €, alors qu’un paiement fournisseur de même montant arrive demain. Quel outil de trésorerie peut servir de pont à court terme ?',
                        'explanation' => 'Lorsque le décalage est temporaire et précisément identifié, un financement court terme peut servir de pont jusqu’à l’encaissement. Le choix dépend ensuite du coût, des garanties et des conditions disponibles.',
                        'choices' => [
                            ['choice_text' => 'Une augmentation de capital décidée par les actionnaires', 'is_correct' => false],
                            ['choice_text' => 'Une facilité de caisse ou une ligne de crédit court terme', 'is_correct' => true],
                            ['choice_text' => 'Un emprunt obligataire sur dix ans', 'is_correct' => false],
                            ['choice_text' => 'Un prêt immobilier sur vingt ans', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'À quoi sert un stress test de liquidité, par exemple en supposant que 20 % des paiements clients arrivent en retard ?',
                        'explanation' => 'Un stress test ne prédit pas l’avenir. Il teste la solidité de la liquidité face à un choc possible et montre quelles solutions de secours il faudrait.',
                        'choices' => [
                            ['choice_text' => 'À prédire que 20 % des clients paieront vraiment en retard', 'is_correct' => false],
                            ['choice_text' => 'À remplacer le cash forecast habituel par un unique scénario jugé le plus probable', 'is_correct' => false],
                            ['choice_text' => 'À voir si la trésorerie tient le coup dans un scénario défavorable mais réaliste', 'is_correct' => true],
                            ['choice_text' => 'À calculer la croissance annuelle des encaissements', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise a 500 000 € disponibles et un minimum de sécurité fixé à 320 000 €. Combien peut-elle dépenser avant de passer sous ce seuil ?',
                        'explanation' => 'La marge au-dessus du seuil est 500 000 € - 320 000 € = 180 000 €. C’est la quantité de cash que l’entreprise peut théoriquement consommer avant d’atteindre son niveau de sécurité.',
                        'choices' => [
                            ['choice_text' => '140 000 €', 'is_correct' => false],
                            ['choice_text' => '180 000 €', 'is_correct' => true],
                            ['choice_text' => '320 000 €', 'is_correct' => false],
                            ['choice_text' => '820 000 €', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un trésorier travaille avec plusieurs banques plutôt qu’une seule. Quel est l’intérêt ?',
                        'explanation' => 'Avec une seule banque, tout dépend d’elle : si elle réduit ses lignes ou a un incident, l’entreprise est coincée. Plusieurs sources donnent de la souplesse, mais ne suppriment pas les coûts.',
                        'choices' => [
                            ['choice_text' => 'Ne pas dépendre d’une seule banque si elle réduit ses lignes de crédit', 'is_correct' => true],
                            ['choice_text' => 'Payer zéro frais, puisque les banques se font concurrence', 'is_correct' => false],
                            ['choice_text' => 'Obtenir le même taux de toutes les banques', 'is_correct' => false],
                            ['choice_text' => 'Réduire le nombre de contrôles internes sur les paiements', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise a 90 000 € de cash et doit sortir 160 000 € avant son prochain encaissement certain. Quel financement minimum lui faut-il pour ne pas passer en négatif, sans autre mouvement ?',
                        'explanation' => 'Le besoin minimal est 160 000 € - 90 000 € = 70 000 €. Ce montant permet juste d’éviter un solde négatif, sans ajouter de marge de sécurité supplémentaire.',
                        'choices' => [
                            ['choice_text' => '70 000 €', 'is_correct' => true],
                            ['choice_text' => '90 000 €', 'is_correct' => false],
                            ['choice_text' => '160 000 €', 'is_correct' => false],
                            ['choice_text' => '250 000 €', 'is_correct' => false],
                        ],
                    ],
                   [
    'question' => 'Une filiale a un surplus de cash pendant 48 heures, avant un gros paiement déjà prévu. Que fait le trésorier ?',
    'explanation' => 'Comme le cash sera nécessaire dans deux jours, le trésorier privilégie sa disponibilité et la préservation du capital. Tout placement doit être très liquide, présenter un risque adapté et arriver à échéance avant le paiement.',
    'choices' => [
        ['choice_text' => 'Il investit le surplus en actions pour profiter de la hausse', 'is_correct' => false],
        ['choice_text' => 'Il prête le surplus à une société amie du groupe pendant un mois, contre un meilleur taux', 'is_correct' => false],
        ['choice_text' => 'Il garde l’argent disponible ou choisit un placement très liquide, à faible risque, avec une échéance antérieure au paiement', 'is_correct' => true],
        ['choice_text' => 'Il verse le surplus aux actionnaires avant le décaissement', 'is_correct' => false],
    ],
],
                    [
                        'question' => 'Lequel de ces signaux inquiète le plus le trésorier pour les semaines à venir ?',
                        'explanation' => 'Le danger vient du décalage : on ne sait plus quand l’argent rentre, mais les sorties, elles, ne bougent pas. C’est ce qu’on appelle un déséquilibre de liquidité.',
                        'choices' => [
                            ['choice_text' => 'Des encaissements en légère avance et des paiements flexibles', 'is_correct' => false],
                            ['choice_text' => 'Des encaissements de plus en plus incertains alors que les paiements sont fixés', 'is_correct' => true],
                            ['choice_text' => 'Une hausse des ventes payées comptant par les clients', 'is_correct' => false],
                            ['choice_text' => 'Un cash buffer supérieur au minimum, avec une ligne de crédit non tirée', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Financement court terme',
                'description' => 'Choisir et comprendre les principaux instruments de financement à court terme utilisés par une entreprise.',
                'questions' => [
                    [
                        'question' => 'Une PME veut récupérer vite l’argent de ses factures clients, sans attendre leur échéance. Quelle solution de financement existe ?',
                        'explanation' => 'Avec l’affacturage, une société spécialisée avance une grande partie du montant des factures, contre une commission, puis encaisse elle-même les clients. L’entreprise transforme ainsi ses créances en cash plus vite.',
                        'choices' => [
                            ['choice_text' => 'Un emprunt bancaire sur quinze ans', 'is_correct' => false],
                            ['choice_text' => 'Une levée de fonds auprès de nouveaux associés', 'is_correct' => false],
                            ['choice_text' => 'Un crédit-bail pour acheter du matériel', 'is_correct' => false],
                            ['choice_text' => 'L’affacturage, qui avance une partie du montant des factures', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Une banque ouvre à une PME une ligne de crédit de 1 million d’euros, à tirer selon ses besoins. Quel est le principal avantage ?',
                        'explanation' => 'Une ligne de crédit donne de la souplesse : on tire ce qu’il faut, quand il le faut. Le contrat peut quand même prévoir une commission sur la part non utilisée.',
                        'choices' => [
                            ['choice_text' => 'La PME touche le million tout de suite et paie des intérêts sur la totalité', 'is_correct' => false],
                            ['choice_text' => 'La PME n’emprunte que la somme dont elle a besoin, au moment voulu', 'is_correct' => true],
                            ['choice_text' => 'Les sommes tirées sont converties en capital au bout d’un an', 'is_correct' => false],
                            ['choice_text' => 'Les tirages n’ont pas à être remboursés si la PME fait des bénéfices', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise paie 7 % sur son découvert alors qu’un placement très court lui rapporte 4 %. Que compare le trésorier ?',
                        'explanation' => 'Quand il faut choisir entre garder, placer ou emprunter du cash, on compare ce que rapporte un excédent et ce que coûte un manque. Ici, l’écart est de 3 points.',
                        'choices' => [
                            ['choice_text' => 'Le bénéfice net et le dividende versé', 'is_correct' => false],
                            ['choice_text' => 'Le taux de TVA et le taux d’impôt sur les sociétés', 'is_correct' => false],
                            ['choice_text' => 'Le coût de l’emprunt et le rendement du placement', 'is_correct' => true],
                            ['choice_text' => 'Le BFR et le délai de paiement des clients', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un besoin saisonnier de trois mois et le rachat d’une société sur dix ans ne se financent pas de la même façon. Quelle règle suit-on ?',
                        'explanation' => 'Règle pratique : on adapte l’échéance du financement à la durée du besoin. Un besoin de saison et un investissement durable n’ont pas le même risque de refinancement.',
                        'choices' => [
                            ['choice_text' => 'Le même instrument convient pour tous les besoins, seul le montant change', 'is_correct' => false],
                            ['choice_text' => 'Le besoin saisonnier se finance par une augmentation de capital', 'is_correct' => false],
                            ['choice_text' => 'Une acquisition de dix ans se finance avec des découverts renouvelés', 'is_correct' => false],
                            ['choice_text' => 'La durée du financement doit coller à la durée du besoin', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise tire 400 000 € sur sa ligne de crédit pendant trois mois, au taux de 6 % par an. Quel intérêt doit-elle payer, en intérêts simples ?',
                        'explanation' => 'L’intérêt simple est 400 000 € × 6 % × 3/12 = 6 000 €. Le calcul suppose ici qu’il n’y a pas d’autres commissions ni capitalisation intermédiaire.',
                        'choices' => [
                            ['choice_text' => '2 000 €', 'is_correct' => false],
                            ['choice_text' => '6 000 €', 'is_correct' => true],
                            ['choice_text' => '12 000 €', 'is_correct' => false],
                            ['choice_text' => '24 000 €', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Avant de prendre une nouvelle dette à court terme, que vérifie d’abord le trésorier ?',
                        'explanation' => 'On part du besoin : montant, durée, calendrier des flux et capacité de remboursement. Le coût et les clauses de la banque viennent ensuite compléter l’analyse.',
                        'choices' => [
                            ['choice_text' => 'De combien il a besoin, pour combien de temps et comment il remboursera', 'is_correct' => true],
                            ['choice_text' => 'Le cours de l’action de l’entreprise en bourse', 'is_correct' => false],
                            ['choice_text' => 'Le nombre d’agences que la banque possède dans la région', 'is_correct' => false],
                            ['choice_text' => 'Le montant du capital social et le nombre d’associés', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une société finance un besoin de trésorerie permanent avec des tirages très courts renouvelés chaque mois. Quel risque mérite une attention particulière ?',
                        'explanation' => 'Financer un besoin durable avec des échéances très courtes expose l’entreprise au risque de devoir renouveler fréquemment ses financements, éventuellement dans de moins bonnes conditions.',
                        'choices' => [
                            ['choice_text' => 'Le risque de change', 'is_correct' => false],
                            ['choice_text' => 'Le risque de refinancement', 'is_correct' => true],
                            ['choice_text' => 'Le risque de défaut de ses clients', 'is_correct' => false],
                            ['choice_text' => 'Le risque de perte de ses stocks', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une banque demande 0,5 % par an de commission sur la partie non tirée d’une ligne de crédit de 2 millions d’euros, entièrement inutilisée. Combien cela coûte-t-il par an ?',
                        'explanation' => 'La commission est 2 000 000 € × 0,5 % = 10 000 €. Dans la pratique, le contrat peut prévoir une base différente, mais l’énoncé précise ici que la commission porte sur toute la ligne.',
                        'choices' => [
                            ['choice_text' => '1 000 €', 'is_correct' => false],
                            ['choice_text' => '5 000 €', 'is_correct' => false],
                            ['choice_text' => '10 000 €', 'is_correct' => true],
                            ['choice_text' => '100 000 €', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une banque propose un crédit moins cher, mais exige de garder en permanence un minimum de cash sur le compte. Que faut-il regarder ?',
                        'explanation' => 'Le taux affiché ne dit pas tout. Une clause peut bloquer une partie des liquidités : on compare donc le coût, la souplesse et les contraintes.',
                        'choices' => [
                            ['choice_text' => 'Si le taux affiché est plus bas que celui des concurrents, et rien d’autre', 'is_correct' => false],
                            ['choice_text' => 'Si la banque accepte de signer un contrat de plus de cinq ans', 'is_correct' => false],
                            ['choice_text' => 'Si cette obligation réduit la liberté d’utiliser son cash', 'is_correct' => true],
                            ['choice_text' => 'Si le crédit sera inscrit en capitaux propres au bilan', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Karim veut éviter d’emprunter davantage pour passer un pic de paiements. Que peut-il faire en plus du financement ?',
                        'explanation' => 'Le financement n’est qu’une option parmi d’autres. Mieux gérer les dates d’encaissement et de paiement peut réduire ou repousser le besoin de dette.',
                        'choices' => [
                            ['choice_text' => 'Accélérer des encaissements et négocier le calendrier de certains paiements', 'is_correct' => true],
                            ['choice_text' => 'Augmenter ses stocks avant le pic pour sécuriser la production des commandes attendues', 'is_correct' => false],
                            ['choice_text' => 'Offrir à ses clients des délais plus longs pour les fidéliser', 'is_correct' => false],
                            ['choice_text' => 'Payer d’avance ses fournisseurs pour obtenir une remise', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Paiements et relations bancaires',
                'description' => 'Maîtriser les opérations bancaires courantes, la sécurité des paiements et le pilotage des comptes.',
                'questions' => [
                    [
                        'question' => 'Une entreprise a six comptes bancaires, mais presque tout son cash est sur un seul. Quel problème cela peut-il poser ?',
                        'explanation' => 'Quand le cash est concentré, les comptes qui doivent payer localement peuvent manquer de fonds. Le trésorier fait alors des transferts ou centralise mieux ses soldes.',
                        'choices' => [
                            ['choice_text' => 'Le compte principal ne peut plus recevoir de virements de clients tant que les cinq autres comptes sont peu utilisés', 'is_correct' => false],
                            ['choice_text' => 'Les intérêts du compte principal sont taxés plus lourdement', 'is_correct' => false],
                            ['choice_text' => 'Les autres comptes sont fermés par la banque pour inactivité', 'is_correct' => false],
                            ['choice_text' => 'Des comptes locaux manquent de fonds alors que le cash est concentré ailleurs', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'À quoi sert un rapprochement bancaire ?',
                        'explanation' => 'On compare ses écritures au relevé de la banque pour retrouver les écarts : opérations oubliées, erreurs, mouvements inhabituels. C’est un contrôle autant qu’une vérification du cash.',
                        'choices' => [
                            ['choice_text' => 'À calculer le chiffre d’affaires du mois à partir des relevés envoyés par la banque à l’entreprise', 'is_correct' => false],
                            ['choice_text' => 'À valider les paiements avant leur envoi à la banque', 'is_correct' => false],
                            ['choice_text' => 'À négocier les frais de tenue de compte avec la banque', 'is_correct' => false],
                            ['choice_text' => 'À vérifier que les écritures de l’entreprise correspondent aux mouvements réels de la banque', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Un salarié demande de modifier par e-mail un RIB fournisseur quelques heures avant un virement important. Quelle réaction est la plus prudente ?',
                        'explanation' => 'Une demande urgente de changement de coordonnées bancaires présente un risque de fraude. Une vérification indépendante, par exemple auprès d’un contact connu, réduit le risque de paiement vers un compte frauduleux.',
                        'choices' => [
                            ['choice_text' => 'Vérifier le changement via une procédure indépendante avant tout paiement', 'is_correct' => true],
                            ['choice_text' => 'Faire le virement vers le nouveau RIB, puis prévenir le fournisseur par téléphone', 'is_correct' => false],
                            ['choice_text' => 'Répondre à l’e-mail pour demander si le changement est bien réel', 'is_correct' => false],
                            ['choice_text' => 'Bloquer le fournisseur dans le système et annuler tous ses paiements', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise paie 60 % de ses fournisseurs à une seule date mensuelle alors que ses encaissements sont répartis sur tout le mois. Quel effet peut en résulter ?',
                        'explanation' => 'La concentration des décaissements crée un pic de besoin de liquidité. Le trésorier doit tenir compte de ce rythme dans son cash forecast.',
                        'choices' => [
                            ['choice_text' => 'Une baisse des frais bancaires sur le mois', 'is_correct' => false],
                            ['choice_text' => 'Un besoin de liquidité réparti régulièrement sur tout le mois', 'is_correct' => false],
                            ['choice_text' => 'Un pic prévisible de sorties de cash autour de cette date', 'is_correct' => true],
                            ['choice_text' => 'Une hausse des encaissements au moment du paiement', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une plateforme centralisée affiche tous les comptes bancaires d’un groupe. Quel est son intérêt ?',
                        'explanation' => 'Avec une vue consolidée, le trésorier sait où est l’argent et quels comptes alimenter ou vider. Les décisions se prennent plus vite.',
                        'choices' => [
                            ['choice_text' => 'Faire baisser le montant des dettes bancaires', 'is_correct' => false],
                            ['choice_text' => 'Voir plus vite la liquidité totale et où elle se trouve', 'is_correct' => true],
                            ['choice_text' => 'Fixer le taux de rémunération de chaque compte', 'is_correct' => false],
                            ['choice_text' => 'Remplacer les relevés envoyés par les banques', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une banque facture 0,20 € par virement et une PME en émet 40 000 par an. Quel est le coût annuel de ces virements ?',
                        'explanation' => '0,20 × 40 000 = 8 000 € par an. Un petit prix unitaire pèse vite quand les volumes sont élevés, c’est pourquoi le trésorier suit les frais bancaires.',
                        'choices' => [
                            ['choice_text' => '800 €', 'is_correct' => false],
                            ['choice_text' => '8 000 €', 'is_correct' => true],
                            ['choice_text' => '20 000 €', 'is_correct' => false],
                            ['choice_text' => '80 000 €', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise paie via plusieurs banques. Quel contrôle évite qu’une même facture soit payée deux fois ?',
                        'explanation' => 'Les contrôles sur les références, les montants et les lots repèrent un paiement répété avant son envoi. La séparation des tâches renforce encore la sécurité.',
                        'choices' => [
                            ['choice_text' => 'Faire valider chaque paiement par la banque après son exécution', 'is_correct' => false],
                            ['choice_text' => 'Archiver les fichiers de paiement une fois par an', 'is_correct' => false],
                            ['choice_text' => 'Vérifier les références et les lots de paiement avant de valider', 'is_correct' => true],
                            ['choice_text' => 'Limiter le nombre de bénéficiaires dans chaque fichier', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Le solde d’un compte est inférieur de 30 000 € à ce que le trésorier attendait, et une commission inhabituelle apparaît. Que fait-il d’abord ?',
                        'explanation' => 'Le rapprochement sert justement à expliquer un écart. Une commission, un prélèvement ou une opération en transit peuvent en être la cause : il faut d’abord identifier le mouvement réel.',
                        'choices' => [
                            ['choice_text' => 'Il cherche à quoi correspond cette commission avant de conclure à une erreur', 'is_correct' => true],
                            ['choice_text' => 'Il corrige le solde dans le système pour retrouver 30 000 €', 'is_correct' => false],
                            ['choice_text' => 'Il réclame immédiatement 30 000 € à la banque par courrier recommandé avec accusé', 'is_correct' => false],
                            ['choice_text' => 'Il laisse l’écart de côté tant qu’il n’atteint pas 100 000 €', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un groupe centralise ses paiements, mais chaque filiale place elle-même ses excédents. Quel problème peut en résulter ?',
                        'explanation' => 'Quand chacun gère dans son coin, un surplus dans une entité peut coexister avec un emprunt externe dans une autre. Le cash pooling ou une coordination centrale évite ce gaspillage.',
                        'choices' => [
                            ['choice_text' => 'Les paiements du groupe sont exécutés deux fois', 'is_correct' => false],
                            ['choice_text' => 'Une filiale a du cash qui dort pendant qu’une autre emprunte', 'is_correct' => true],
                            ['choice_text' => 'Les filiales ne peuvent plus payer leurs fournisseurs', 'is_correct' => false],
                            ['choice_text' => 'Les excédents des filiales sont comptés deux fois dans les comptes du groupe', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise et sa banque négocient une convention de cash management. Que regarde surtout le trésorier ?',
                        'explanation' => 'On juge la banque sur ce qui touche le travail quotidien : prix, qualité de service, visibilité sur les comptes, systèmes de paiement et support.',
                        'choices' => [
                            ['choice_text' => 'Le classement de la banque dans la presse économique', 'is_correct' => false],
                            ['choice_text' => 'Le nombre d’agences de la banque dans le pays', 'is_correct' => false],
                            ['choice_text' => 'L’ancienneté de la banque sur la place financière', 'is_correct' => false],
                            ['choice_text' => 'Les tarifs, les délais d’exécution et les outils de reporting', 'is_correct' => true],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Placements de trésorerie à court terme',
                'description' => 'Choisir des solutions prudentes pour les excédents de cash tout en respectant les besoins de liquidité.',
                'questions' => [
                    [
                        'question' => 'Une PME doit payer 300 000 € à un fournisseur dans cinq jours. Quel critère domine le choix d’un placement pour ce cash ?',
                        'explanation' => 'Le besoin est certain et très proche. La priorité est de préserver le capital et de l’avoir sous la main à la date prévue, pas de chercher un gros rendement.',
                        'choices' => [
                            ['choice_text' => 'Obtenir le rendement le plus élevé possible', 'is_correct' => false],
                            ['choice_text' => 'Avoir une échéance lointaine pour bénéficier d’un meilleur taux', 'is_correct' => false],
                            ['choice_text' => 'Pouvoir récupérer les fonds à temps, sans perte', 'is_correct' => true],
                            ['choice_text' => 'Profiter d’une hausse possible du marché des actions', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pour choisir un placement de trésorerie, le rendement ne suffit pas. Que faut-il regarder aussi ?',
                        'explanation' => 'La trésorerie n’a pas le même but qu’un portefeuille long terme : il faut garder les fonds disponibles et limiter le risque. Le rendement vient après.',
                        'choices' => [
                            ['choice_text' => 'Le risque, la liquidité et le moment où l’on aura besoin de l’argent', 'is_correct' => true],
                            ['choice_text' => 'La performance passée du placement sur les dix dernières années, année par année', 'is_correct' => false],
                            ['choice_text' => 'Le prix de l’action de la banque qui le propose', 'is_correct' => false],
                            ['choice_text' => 'La renommée du conseiller qui présente l’offre', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une société place 600 000 € à 3 % par an pendant six mois. Quel intérêt brut touche-t-elle, en intérêts simples ?',
                        'explanation' => 'L’intérêt simple est 600 000 € × 3 % × 6/12 = 9 000 €. Le calcul ne tient pas compte ici d’une fiscalité ou de frais éventuels.',
                        'choices' => [
                            ['choice_text' => '1 800 €', 'is_correct' => false],
                            ['choice_text' => '6 000 €', 'is_correct' => false],
                            ['choice_text' => '9 000 €', 'is_correct' => true],
                            ['choice_text' => '18 000 €', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un excédent de cash de trois mois pourrait servir plus tôt en cas d’imprévu. Quelle approche est la plus prudente ?',
                        'explanation' => 'Le bon placement dépend du besoin et des imprévus possibles. En échelonnant les échéances, on peut chercher un peu de rendement sans bloquer toute la liquidité.',
                        'choices' => [
                            ['choice_text' => 'Tout bloquer sur un dépôt à dix ans pour un meilleur taux', 'is_correct' => false],
                            ['choice_text' => 'Tout placer en actions pour viser un rendement élevé', 'is_correct' => false],
                            ['choice_text' => 'Verser tout l’excédent en dividendes pour alléger le compte', 'is_correct' => false],
                            ['choice_text' => 'Ne placer qu’une partie, sur des supports dont on peut sortir vite', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise peut accepter un rendement un peu plus faible si le placement est liquide. Quelle en est la raison ?',
                        'explanation' => 'Être coincé sans cash peut coûter cher, par exemple si l’on doit emprunter en urgence. La liquidité a donc une vraie valeur pour un trésorier.',
                        'choices' => [
                            ['choice_text' => 'Les placements liquides sont garantis par l’État', 'is_correct' => false],
                            ['choice_text' => 'Pouvoir récupérer son argent vite vaut parfois plus que quelques points de rendement', 'is_correct' => true],
                            ['choice_text' => 'Les placements liquides rapportent plus à long terme que les dépôts bloqués, grâce à leur souplesse', 'is_correct' => false],
                            ['choice_text' => 'Le rendement ne compte pas pour un trésorier', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Deux placements ont le même risque, la même liquidité et la même durée de quatre mois. A rapporte 2,5 % et B 3 %. Lequel choisir ?',
                        'explanation' => 'À durée, risque et liquidité égaux, le meilleur taux gagne. Dans la pratique, on regarde aussi les frais, la fiscalité et la convention de calcul.',
                        'choices' => [
                            ['choice_text' => 'Le placement B, qui rapporte plus', 'is_correct' => true],
                            ['choice_text' => 'Le placement A, car un taux plus bas signifie moins de risque', 'is_correct' => false],
                            ['choice_text' => 'Les deux se valent, car la durée est identique', 'is_correct' => false],
                            ['choice_text' => 'Ni l’un ni l’autre avant d’avoir annualisé les taux', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un placement offre un bon rendement mais une grosse pénalité en cas de retrait avant l’échéance. Que doit vérifier le trésorier ?',
                        'explanation' => 'Un rendement élevé peut piéger si l’on doit retirer l’argent avant l’échéance. On fait correspondre la durée du placement au calendrier des besoins.',
                        'choices' => [
                            ['choice_text' => 'Que le rendement affiché est supérieur au taux du découvert', 'is_correct' => false],
                            ['choice_text' => 'Que la banque accepte de réduire la pénalité après la signature', 'is_correct' => false],
                            ['choice_text' => 'Que le placement est le plus long possible pour toucher plus d’intérêts', 'is_correct' => false],
                            ['choice_text' => 'Que l’échéance correspond au moment où il aura besoin du cash', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise place son cash chez un émetteur qui pourrait ne pas la rembourser. De quel risque s’agit-il ?',
                        'explanation' => 'Le risque de crédit correspond ici au risque que la contrepartie n’honore pas ses obligations financières. Une politique de placement de trésorerie limite généralement les contreparties et instruments admis.',
                        'choices' => [
                            ['choice_text' => 'Le risque de change entre deux monnaies', 'is_correct' => false],
                            ['choice_text' => 'Le risque de variation des taux d’intérêt', 'is_correct' => false],
                            ['choice_text' => 'Le risque de crédit ou de contrepartie', 'is_correct' => true],
                            ['choice_text' => 'Le risque de liquidité sur le marché secondaire', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise doit garder 1 M€ disponible dans six mois, mais 600 000 € seulement sont certains d’être nécessaires. Que faire des 400 000 € restants ?',
                        'explanation' => 'Le surplus peut être rémunéré selon plusieurs horizons, mais il faut garder une marge pour les besoins moins prévisibles.',
                        'choices' => [
                            ['choice_text' => 'Les placer en actions pour viser le meilleur rendement possible', 'is_correct' => false],
                            ['choice_text' => 'Les placer prudemment, sur des durées variées, en gardant une marge pour un imprévu', 'is_correct' => true],
                            ['choice_text' => 'Les distribuer immédiatement aux associés sous forme de dividendes exceptionnels cette année', 'is_correct' => false],
                            ['choice_text' => 'Les immobiliser sur plusieurs années pour un meilleur taux', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Comment comparer le rendement de deux placements qui n’ont pas la même durée ?',
                        'explanation' => 'Un 2 % sur 3 mois et un 3 % sur 12 mois ne se comparent pas tels quels. On ramène tout à l’année : c’est le taux annualisé.',
                        'choices' => [
                            ['choice_text' => 'En comparant directement les pourcentages affichés', 'is_correct' => false],
                            ['choice_text' => 'En retenant celui dont le montant minimum est le plus faible', 'is_correct' => false],
                            ['choice_text' => 'En les ramenant à un taux annualisé', 'is_correct' => true],
                            ['choice_text' => 'En retenant celui qui a la maturité la plus longue', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Expositions de taux et de change en trésorerie',
                'description' => 'Identifier les risques simples liés aux taux d\'intérêt et aux devises et comprendre les premières solutions de couverture.',
                'questions' => [
                    [
                        'question' => 'Une entreprise marocaine doit payer 100 000 USD dans deux mois et n’a pas encore acheté les dollars. De quoi doit-elle se méfier ?',
                        'explanation' => 'La dette est en dollars, alors que les ressources sont en dirhams. Si le dollar devient plus cher, il faut plus de dirhams pour payer la même facture.',
                        'choices' => [
                            ['choice_text' => 'D’une hausse du dollar, qui ferait grimper le coût en dirhams', 'is_correct' => true],
                            ['choice_text' => 'D’une baisse du dollar, qui ferait grimper le coût en dirhams', 'is_correct' => false],
                            ['choice_text' => 'D’une baisse des taux d’intérêt, qui augmenterait le montant en dollars', 'is_correct' => false],
                            ['choice_text' => 'D’une baisse du prix décidée unilatéralement par le fournisseur', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise emprunte à taux variable. Que se passe-t-il pour elle si le taux de référence monte ?',
                        'explanation' => 'Avec un taux variable, la charge d’intérêts suit le taux de référence. Quand il monte, la dette coûte plus cher.',
                        'choices' => [
                            ['choice_text' => 'Ses intérêts à payer diminuent', 'is_correct' => false],
                            ['choice_text' => 'Ses intérêts à payer augmentent', 'is_correct' => true],
                            ['choice_text' => 'Le capital restant dû est réduit d’autant', 'is_correct' => false],
                            ['choice_text' => 'Ses intérêts restent figés jusqu’à la fin du prêt', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Comment se protéger d’une hausse des taux sur un crédit à taux variable ?',
                        'explanation' => 'Le risque, c’est que le crédit coûte plus cher. Des instruments de taux comme le swap ou le cap permettent de fixer ou de plafonner ce coût.',
                        'choices' => [
                            ['choice_text' => 'En remboursant ses fournisseurs plus vite pour réduire ses dettes d’exploitation', 'is_correct' => false],
                            ['choice_text' => 'En empruntant dans une autre devise sans couverture', 'is_correct' => false],
                            ['choice_text' => 'En réduisant ses stocks de sécurité', 'is_correct' => false],
                            ['choice_text' => 'En fixant le taux avec un swap ou en le plafonnant avec un cap', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Une société attend 200 000 GBP dans trois mois. Si la livre baisse face à l’euro, que devient la valeur de cet encaissement en euros ?',
                        'explanation' => 'Le montant reste de 200 000 GBP, mais, en euros, chaque livre vaut moins. L’entreprise porte donc un risque de change sur cet encaissement.',
                        'choices' => [
                            ['choice_text' => 'Elle augmente, car chaque livre pèse plus lourd dans le contrat', 'is_correct' => false],
                            ['choice_text' => 'Elle diminue, car chaque livre vaut moins d’euros', 'is_correct' => true],
                            ['choice_text' => 'Elle reste la même en euros, puisque le montant est fixé en livres', 'is_correct' => false],
                            ['choice_text' => 'Elle devient nulle si la livre perd plus de 10 %', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise sait qu’elle devra payer une facture en devise. À quoi lui sert une couverture de change ?',
                        'explanation' => 'Une couverture sert à réduire une exposition et à rendre le coût futur prévisible. Elle n’est pas faite pour gagner de l’argent.',
                        'choices' => [
                            ['choice_text' => 'À connaître à l’avance le coût de cette facture', 'is_correct' => true],
                            ['choice_text' => 'À spéculer sur la hausse de la devise', 'is_correct' => false],
                            ['choice_text' => 'À augmenter ses ventes sur son marché local', 'is_correct' => false],
                            ['choice_text' => 'À éliminer le risque de défaut du fournisseur', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise doit régler une facture de 500 000 USD alors que 1 EUR vaut 1,10 USD. Combien cela lui coûte-t-il en euros, hors frais ?',
                        'explanation' => 'Si 1 EUR = 1,10 USD, il faut environ 500 000 / 1,10 = 454 545 EUR pour acheter 500 000 USD. Le calcul suppose ici un taux unique sans spread ni frais.',
                        'choices' => [
                            ['choice_text' => '454 545 € environ', 'is_correct' => true],
                            ['choice_text' => '500 000 €', 'is_correct' => false],
                            ['choice_text' => '550 000 €', 'is_correct' => false],
                            ['choice_text' => '1 100 000 €', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Que cherche le trésorier en recensant tous les emprunts à taux variable du groupe ?',
                        'explanation' => 'Une vue d’ensemble montre l’exposition du groupe, au lieu de regarder chaque dette seule. On peut alors décider d’une couverture.',
                        'choices' => [
                            ['choice_text' => 'À fusionner toutes les dettes en un seul contrat', 'is_correct' => false],
                            ['choice_text' => 'À obliger les filiales à rembourser plus vite', 'is_correct' => false],
                            ['choice_text' => 'À mesurer l’effet total d’une hausse des taux sur le groupe', 'is_correct' => true],
                            ['choice_text' => 'À convertir une partie des dettes en capital', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une société a une dette à taux variable et un placement dont le rendement suit aussi les taux. Que doit regarder le trésorier ?',
                        'explanation' => 'Quand les taux montent, la dette coûte plus mais le placement rapporte plus. Ce qui compte, c’est le solde net des deux effets.',
                        'choices' => [
                            ['choice_text' => 'La dette seule, car le placement n’a rien à voir avec les taux', 'is_correct' => false],
                            ['choice_text' => 'Le chiffre d’affaires, qui fixe le risque de taux', 'is_correct' => false],
                            ['choice_text' => 'Le montant du placement, sans tenir compte de la dette', 'is_correct' => false],
                            ['choice_text' => 'Son exposition nette, en compensant la dette par le placement', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise signe un forward de change pour acheter des dollars dans trois mois. Qu’y gagne-t-elle ?',
                        'explanation' => 'Un forward fixe le taux à l’avance, donc l’incertitude disparaît. À la différence d’une option, c’est un engagement ferme : on ne peut pas y renoncer.',
                        'choices' => [
                            ['choice_text' => 'Elle connaît dès aujourd’hui le taux de change qu’elle paiera', 'is_correct' => true],
                            ['choice_text' => 'Elle peut renoncer à l’achat si le dollar baisse', 'is_correct' => false],
                            ['choice_text' => 'Elle est sûre de payer moins cher que le cours du dollar au jour de l’échéance', 'is_correct' => false],
                            ['choice_text' => 'Elle ne paie aucune commission à sa banque', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une filiale dont la monnaie de référence est l’euro doit payer 1 million USD. Que fait d’abord le trésorier ?',
                        'explanation' => 'Avant de choisir une couverture, il faut mesurer l’exposition : montant, devise, échéance, sensibilité au taux de change.',
                        'choices' => [
                            ['choice_text' => 'Il achète immédiatement un million de dollars au cours du jour, sans analyser son exposition', 'is_correct' => false],
                            ['choice_text' => 'Il attend la date de paiement pour acheter au cours du moment', 'is_correct' => false],
                            ['choice_text' => 'Il emprunte 1 million USD pour être sûr d’avoir la somme', 'is_correct' => false],
                            ['choice_text' => 'Il chiffre le montant, la date de paiement et l’effet d’une variation du dollar', 'is_correct' => true],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Contrôles et sécurité de la trésorerie',
                'description' => 'Identifier les contrôles essentiels qui protègent le cash contre les erreurs, les doublons et les fraudes.',
                'questions' => [
                    [
                        'question' => 'Dans une entreprise, celui qui prépare un paiement n’est pas celui qui l’approuve. Quel est l’intérêt ?',
                        'explanation' => 'La séparation des tâches crée un contrôle croisé : personne ne gère seul tout le cycle de préparation et de validation d’un paiement important.',
                        'choices' => [
                            ['choice_text' => 'Les paiements partent plus vite vers la banque', 'is_correct' => false],
                            ['choice_text' => 'Une erreur ou une fraude a plus de chances d’être repérée', 'is_correct' => true],
                            ['choice_text' => 'Le montant du paiement est vérifié par le fournisseur', 'is_correct' => false],
                            ['choice_text' => 'Le trésorier n’a plus besoin des relevés bancaires', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Dans un fichier de paiements, le même fournisseur apparaît deux fois avec le même montant mais des références différentes. Que fait-on avant l’envoi à la banque ?',
                        'explanation' => 'Un doublon apparent n’est pas forcément une erreur : les deux factures peuvent être légitimes. Mais l’alerte oblige à vérifier avant d’envoyer.',
                        'choices' => [
                            ['choice_text' => 'On envoie le fichier et on demande un remboursement au fournisseur si besoin', 'is_correct' => false],
                            ['choice_text' => 'On supprime le deuxième paiement pour être prudent', 'is_correct' => false],
                            ['choice_text' => 'On vérifie s’il s’agit d’un doublon ou de deux factures distinctes', 'is_correct' => true],
                            ['choice_text' => 'On répartit le montant en deux virements de moitié', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Chaque matin, une entreprise rapproche ses soldes bancaires. Qu’est-ce que ça lui apporte ?',
                        'explanation' => 'Un rapprochement fréquent améliore la qualité des chiffres de trésorerie et fait remonter vite une anomalie, un prélèvement ou une opération inattendue.',
                        'choices' => [
                            ['choice_text' => 'Elle n’a plus besoin de faire de prévisions de trésorerie', 'is_correct' => false],
                            ['choice_text' => 'Elle supprime le risque de change sur ses ventes', 'is_correct' => false],
                            ['choice_text' => 'Elle augmente ses encaissements de la journée', 'is_correct' => false],
                            ['choice_text' => 'Elle repère vite les écarts et connaît son cash réellement disponible', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Un employé demande les droits pour modifier les RIB des fournisseurs et valider les paiements. Quel est le risque ?',
                        'explanation' => 'Avec les deux droits, une seule personne peut modifier un bénéficiaire puis valider le paiement. La séparation des fonctions et le moindre privilège réduisent ce risque.',
                        'choices' => [
                            ['choice_text' => 'Il pourrait changer un RIB puis valider le virement, sans que personne le voie', 'is_correct' => true],
                            ['choice_text' => 'Il risque de saisir deux fois les mêmes paiements par manque de temps et de rigueur dans la saisie', 'is_correct' => false],
                            ['choice_text' => 'Il pourrait modifier les prix des fournisseurs dans les contrats', 'is_correct' => false],
                            ['choice_text' => 'Il connaîtrait trop de choses sur les soldes de la banque', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une alerte signale un virement inhabituellement élevé vers un nouveau bénéficiaire. Que fait-on ?',
                        'explanation' => 'Un paiement atypique vers un nouveau bénéficiaire est plus risqué. La procédure doit permettre de vérifier l’origine, la justification et les coordonnées avant de payer.',
                        'choices' => [
                            ['choice_text' => 'On exécute le virement et on vérifie le lendemain', 'is_correct' => false],
                            ['choice_text' => 'On le valide si le bénéficiaire a déjà écrit un e-mail professionnel à l’entreprise', 'is_correct' => false],
                            ['choice_text' => 'On met le virement en attente et on vérifie auprès d’une source indépendante', 'is_correct' => true],
                            ['choice_text' => 'On réduit le montant de moitié pour limiter le risque', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Que peut-il arriver sur un compte bancaire dormant que personne ne surveille ?',
                        'explanation' => 'Un compte peu utilisé n’est pas sans risque : frais, solde oublié, opérations non surveillées. Un inventaire régulier des comptes fait partie d’une bonne gouvernance.',
                        'choices' => [
                            ['choice_text' => 'Il est fermé par la banque au bout de trois mois, sans l’accord du client ni information préalable', 'is_correct' => false],
                            ['choice_text' => 'Il peut garder un solde ou des frais, et servir de porte d’entrée à une fraude', 'is_correct' => true],
                            ['choice_text' => 'Il rapporte des intérêts plus élevés que les comptes actifs', 'is_correct' => false],
                            ['choice_text' => 'Il est compté deux fois dans la trésorerie du groupe', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'À quoi sert la liste des signataires autorisés d’un compte bancaire ?',
                        'explanation' => 'C’est un contrôle de gouvernance : l’entreprise et la banque savent qui peut engager les comptes, selon les pouvoirs définis.',
                        'choices' => [
                            ['choice_text' => 'À calculer les frais de tenue de compte et les commissions de chaque signataire', 'is_correct' => false],
                            ['choice_text' => 'À vérifier que chaque salarié a un compte à son nom', 'is_correct' => false],
                            ['choice_text' => 'À fixer le montant maximal de découvert autorisé', 'is_correct' => false],
                            ['choice_text' => 'À s’assurer que seules les personnes habilitées valident les paiements', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Un employé a créé lui-même un nouveau bénéficiaire, puis approuvé le paiement. Quel contrôle aurait évité la fraude ?',
                        'explanation' => 'Il faut un contrôle indépendant de celui qui crée le bénéficiaire. Ainsi, une seule personne ne peut pas modifier puis valider toute la chaîne.',
                        'choices' => [
                            ['choice_text' => 'Demander à l’employé de signer un engagement de confidentialité', 'is_correct' => false],
                            ['choice_text' => 'Faire un rapprochement bancaire une fois par an', 'is_correct' => false],
                            ['choice_text' => 'Faire approuver le nouveau bénéficiaire par une autre personne', 'is_correct' => true],
                            ['choice_text' => 'Limiter le montant du paiement à celui d’une seule facture', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Que permet une piste d’audit sur les changements de coordonnées bancaires ?',
                        'explanation' => 'La piste d’audit aide à détecter et à analyser les changements sensibles. Elle prouve aussi qu’une procédure de contrôle a bien été suivie.',
                        'choices' => [
                            ['choice_text' => 'Savoir qui a changé quoi, quand, et qui l’a validé', 'is_correct' => true],
                            ['choice_text' => 'Accélérer le traitement des virements en lot', 'is_correct' => false],
                            ['choice_text' => 'Éviter de contrôler les paiements à la main', 'is_correct' => false],
                            ['choice_text' => 'Archiver les factures des fournisseurs', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un trésorier reçoit une demande urgente et « confidentielle » de paiement, sans bon de commande ni facture. Que fait-il ?',
                        'explanation' => 'L’urgence sert souvent à contourner les contrôles. Une bonne organisation prévoit des circuits accélérés, mais pas sans vérification.',
                        'choices' => [
                            ['choice_text' => 'Il paie d’abord et demande les documents après', 'is_correct' => false],
                            ['choice_text' => 'Il applique les contrôles habituels, même si on le presse', 'is_correct' => true],
                            ['choice_text' => 'Il demande l’accord du fournisseur plutôt que celui de sa hiérarchie', 'is_correct' => false],
                            ['choice_text' => 'Il paie en deux fois pour rester sous le seuil de validation', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Cas pratiques de trésorerie',
                'description' => 'Mettre en pratique les réflexes de treasury management à travers des situations courantes d\'entreprise.',
                'questions' => [
                    [
                        'question' => 'Une PME a 250 000 € en banque en fin de mois. Le mois suivant, elle attend 600 000 € d’encaissements et 720 000 € de sorties. Quel solde prévoit-elle avant tout financement ?',
                        'explanation' => 'Le solde prévisionnel est 250 000 € + 600 000 € - 720 000 € = 130 000 €. Le trésorier doit ensuite comparer ce niveau au cash minimum et aux besoins imprévus.',
                        'choices' => [
                            ['choice_text' => '-130 000 €', 'is_correct' => false],
                            ['choice_text' => '130 000 €', 'is_correct' => true],
                            ['choice_text' => '370 000 €', 'is_correct' => false],
                            ['choice_text' => '1 070 000 €', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Le directeur commercial annonce 2 M€ de nouvelles ventes, dont la moitié sera payée dans 90 jours. Que retient le trésorier ?',
                        'explanation' => 'Une vente crée d’abord une créance client. Le trésorier s’intéresse à la date réelle d’encaissement, pas au chiffre d’affaires comptabilisé.',
                        'choices' => [
                            ['choice_text' => 'Les 2 M€ sont disponibles dès la signature des contrats', 'is_correct' => false],
                            ['choice_text' => 'Le chiffre d’affaires du mois est égal à la trésorerie du mois', 'is_correct' => false],
                            ['choice_text' => 'Les ventes payées à 90 jours ne comptent pas dans le chiffre d’affaires du mois', 'is_correct' => false],
                            ['choice_text' => 'Une vente n’est pas du cash : il compte l’argent à la date où il rentre', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise doit payer 500 000 € de taxes dans dix jours. Elle a 420 000 € en banque et attend probablement 200 000 € de clients. Que doit-elle sécuriser en priorité ?',
                        'explanation' => 'Tout dépend du calendrier. Si les 200 000 € arrivent à temps, le paiement passe (420 + 200 = 620 k€) ; s’ils sont en retard, il manque 80 000 €.',
                        'choices' => [
                            ['choice_text' => 'Le chiffre d’affaires total du trimestre', 'is_correct' => false],
                            ['choice_text' => 'La liste de ses fournisseurs réguliers', 'is_correct' => false],
                            ['choice_text' => 'La date et la fiabilité des 200 000 € attendus', 'is_correct' => true],
                            ['choice_text' => 'Le nombre de factures éditées le mois dernier', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un fournisseur propose 2 % de remise si on le paie 20 jours plus tôt. Comment décider ?',
                        'explanation' => 'Une remise peut être intéressante, mais payer plus tôt consomme du cash. On compare le gain de la remise avec le coût du financement ou le rendement que ce cash aurait pu avoir.',
                        'choices' => [
                            ['choice_text' => 'En acceptant, car une remise de 2 % est un gain certain à elle seule', 'is_correct' => false],
                            ['choice_text' => 'En comparant la remise avec le coût de financer ces 20 jours', 'is_correct' => true],
                            ['choice_text' => 'En refusant, car payer avant l’échéance fait perdre de la liquidité', 'is_correct' => false],
                            ['choice_text' => 'En se fiant au taux de la remise, sans regarder le délai', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une filiale encaisse un gros montant en dollars alors que ses dépenses sont en dirhams. Comment éviter un risque de change inutile ?',
                        'explanation' => 'Les recettes sont en USD et les dépenses en MAD : la filiale est exposée au change. Elle convertit ou se couvre, selon les règles du groupe.',
                        'choices' => [
                            ['choice_text' => 'En convertissant les dollars en dirhams ou en se couvrant selon la politique du groupe', 'is_correct' => true],
                            ['choice_text' => 'En gardant les dollars sur le compte en attendant la clôture annuelle des comptes de la filiale', 'is_correct' => false],
                            ['choice_text' => 'En empruntant en dirhams pour racheter des dollars', 'is_correct' => false],
                            ['choice_text' => 'En demandant aux clients de payer plus tard', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Le trésorier voit que 70 % des paiements du mois tombent entre le 25 et le 30. Qu’est-ce que cela change à sa prévision ?',
                        'explanation' => 'Le calendrier compte. Deux entreprises avec le même total mensuel n’ont pas le même risque si l’une paie tout en fin de mois.',
                        'choices' => [
                            ['choice_text' => 'Il faut prévoir un besoin de liquidité plus fort en fin de mois', 'is_correct' => true],
                            ['choice_text' => 'Les encaissements montent aussi à ces dates', 'is_correct' => false],
                            ['choice_text' => 'Le BFR de l’entreprise diminue', 'is_correct' => false],
                            ['choice_text' => 'Rien, puisque le total du mois reste le même', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Pour passer un creux de trois mois, un trésorier hésite entre un crédit à 5 % par an et un report de paiement fournisseur qui coûte 2 % de pénalité sur la période. Quelle option est la moins chère ?',
                        'explanation' => 'Un taux annuel de 5 % se ramène à 5 % × 3/12 = 1,25 % pour trois mois, soit moins que les 2 % de pénalité. Il faut comparer les coûts sur la même période.',
                        'choices' => [
                            ['choice_text' => 'Le report de paiement, car 2 % est plus petit que 5 %', 'is_correct' => false],
                            ['choice_text' => 'Impossible à dire sans connaître le chiffre d’affaires de l’entreprise', 'is_correct' => false],
                            ['choice_text' => 'Les deux coûtent pareil, car 5 % et 2 % sont des taux proches', 'is_correct' => false],
                            ['choice_text' => 'Le crédit : 5 % par an font environ 1,25 % pour trois mois', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise va doubler sa production au prochain trimestre. Quelle question doit se poser le trésorier ?',
                        'explanation' => 'Produire plus consomme du cash avant que les ventes soient encaissées : on estime l’effet sur les stocks, les achats, les créances et le financement court terme.',
                        'choices' => [
                            ['choice_text' => 'Quel sera le résultat net comptable dégagé par la production supplémentaire du trimestre ?', 'is_correct' => false],
                            ['choice_text' => 'Quel est le prix de vente idéal des nouveaux produits ?', 'is_correct' => false],
                            ['choice_text' => 'De combien de cash aura-t-on besoin pour les stocks, les fournisseurs et les clients ?', 'is_correct' => true],
                            ['choice_text' => 'Combien de dividendes pourra-t-on verser l’an prochain ?', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une société doit 3 M€ à taux variable à sa banque et dispose de 1 M€ de cash en excédent. Que doit regarder le trésorier ?',
                        'explanation' => 'On regarde la situation globale : le cash excédentaire rapporte souvent moins que ne coûte la dette, ce qui pose un arbitrage à étudier.',
                        'choices' => [
                            ['choice_text' => 'Le montant brut de 3 M€, sans tenir compte du cash', 'is_correct' => false],
                            ['choice_text' => 'Le coût net de sa dette, une fois le cash disponible pris en compte', 'is_correct' => true],
                            ['choice_text' => 'Le cash et la dette, qui doivent être traités séparément', 'is_correct' => false],
                            ['choice_text' => 'Le taux de la dette, sans le comparer au rendement du cash', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Un fournisseur important exige désormais un paiement comptant au lieu de 60 jours. Quel effet doit-on étudier tout de suite ?',
                        'explanation' => 'Passer de 60 jours à comptant avance les sorties de cash et augmente le besoin de financement. Le trésorier doit chiffrer le montant et le calendrier.',
                        'choices' => [
                            ['choice_text' => 'Le besoin de financement du cycle d’exploitation augmente', 'is_correct' => true],
                            ['choice_text' => 'Le cash disponible augmente de 60 jours de paiements', 'is_correct' => false],
                            ['choice_text' => 'Le délai de paiement accordé aux clients raccourcit de lui-même', 'is_correct' => false],
                            ['choice_text' => 'Le stock baisse de lui-même', 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => 'Tableau de bord du trésorier',
                'description' => 'Lire les principaux indicateurs de trésorerie et transformer les données en décisions de pilotage.',
                'questions' => [
                    [
                        'question' => 'Quel indicateur mesure le temps moyen nécessaire pour encaisser les créances clients ?',
                        'explanation' => 'Le DSO (Days Sales Outstanding) mesure en jours le délai moyen de recouvrement des créances clients. Une hausse peut peser sur la trésorerie si les conditions commerciales restent inchangées.',
                        'choices' => [
                            ['choice_text' => 'DSO', 'is_correct' => true],
                            ['choice_text' => 'DPO', 'is_correct' => false],
                            ['choice_text' => 'ROE', 'is_correct' => false],
                            ['choice_text' => 'EBITDA', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Le DPO d’une entreprise augmente. Que cela signifie-t-il ?',
                        'explanation' => 'Le DPO (Days Payables Outstanding) est le délai moyen de paiement des fournisseurs. Une hausse aide la trésorerie, tant que les fournisseurs l’acceptent.',
                        'choices' => [
                            ['choice_text' => 'Ses clients la paient plus tôt en moyenne', 'is_correct' => false],
                            ['choice_text' => 'Elle paie ses fournisseurs plus tard en moyenne', 'is_correct' => true],
                            ['choice_text' => 'Elle garde ses produits moins longtemps en stock', 'is_correct' => false],
                            ['choice_text' => 'Elle règle ses dettes bancaires plus vite', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Le tableau de bord indique : cash disponible 800 000 €, lignes confirmées non tirées 500 000 €, cash minimum 600 000 €. Quelles ressources peut-on mobiliser au total ?',
                        'explanation' => '800 000 € sont déjà en banque et 500 000 € peuvent être tirés si besoin : 1,3 M€ en tout. Le cash minimum est un seuil à respecter, pas une ressource en plus, et une ligne non tirée n’est pas du cash.',
                        'choices' => [
                            ['choice_text' => '800 000 €, car les lignes non tirées ne comptent pas', 'is_correct' => false],
                            ['choice_text' => '1,3 M€, dont 800 000 € seulement sont déjà en banque', 'is_correct' => true],
                            ['choice_text' => '1,4 M€, en ajoutant le cash minimum au cash disponible', 'is_correct' => false],
                            ['choice_text' => '1,9 M€, en additionnant les trois chiffres du tableau', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Le cycle de conversion du cash s’allonge parce que le DSO augmente, alors que le DPO et les stocks ne bougent pas. Quelle est l’explication ?',
                        'explanation' => 'Le cycle de conversion du cash dépend notamment du délai d’encaissement. Un DSO plus haut allonge le temps pendant lequel le cash reste coincé dans l’exploitation.',
                        'choices' => [
                            ['choice_text' => 'Les fournisseurs sont payés plus tôt qu’avant', 'is_correct' => false],
                            ['choice_text' => 'Les stocks restent plus longtemps en entrepôt', 'is_correct' => false],
                            ['choice_text' => 'Les dettes à long terme ont augmenté', 'is_correct' => false],
                            ['choice_text' => 'Les clients mettent plus de temps à payer', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => '35 % des paiements prévus le mois prochain concernent cinq fournisseurs seulement. Qu’en retire le trésorier ?',
                        'explanation' => 'Quand quelques fournisseurs pèsent lourd, certaines dates deviennent critiques. Cela aide à bâtir des scénarios et à discuter des conditions de paiement.',
                        'choices' => [
                            ['choice_text' => 'Que ces cinq fournisseurs sont ceux qui rapportent le plus de marge à l’entreprise cette année', 'is_correct' => false],
                            ['choice_text' => 'Que ces cinq fournisseurs financent 35 % du stock de l’entreprise', 'is_correct' => false],
                            ['choice_text' => 'Que les sorties de cash dépendent beaucoup de quelques fournisseurs, à suivre de près', 'is_correct' => true],
                            ['choice_text' => 'Que le BFR est réparti également entre tous les fournisseurs', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Une entreprise suit la part de ses encaissements reçus dans les délais prévus au contrat. À quoi cela lui sert-il ?',
                        'explanation' => 'Ce taux de paiement à l’échéance aide à calibrer les prévisions. S’il se dégrade, des retards et une tension de liquidité sont à craindre.',
                        'choices' => [
                            ['choice_text' => 'À mesurer le rendement des placements de trésorerie', 'is_correct' => false],
                            ['choice_text' => 'À fixer le prix de vente des produits', 'is_correct' => false],
                            ['choice_text' => 'À calculer la marge dégagée sur chaque client', 'is_correct' => false],
                            ['choice_text' => 'À juger si les encaissements prévus sont fiables', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Le trésorier présente deux scénarios : base avec 1,1 M€ de cash fin de mois, stress avec 650 000 €. Le minimum de sécurité est de 700 000 €. Que conclure ?',
                        'explanation' => '650 000 € est inférieur de 50 000 € à 700 000 €. Si ce scénario devient plausible, il faut prévoir une action de secours.',
                        'choices' => [
                            ['choice_text' => 'Les deux scénarios restent au-dessus du minimum de sécurité', 'is_correct' => false],
                            ['choice_text' => 'Le scénario stress termine 50 000 € sous le minimum de sécurité', 'is_correct' => true],
                            ['choice_text' => 'Le scénario de base termine sous le minimum de sécurité', 'is_correct' => false],
                            ['choice_text' => 'Le scénario stress termine 50 000 € au-dessus du minimum de sécurité', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Le cash forecast d’un responsable est juste sur les montants mais souvent en retard sur les dates. Que doit-il améliorer ?',
                        'explanation' => 'Un forecast aux bons montants mais aux mauvaises dates reste peu utile. Il faut mieux relier les données de facturation, d’achats, de paie et de paiement.',
                        'choices' => [
                            ['choice_text' => 'La fiabilité du calendrier des flux, à partir des données de facturation et de paiement', 'is_correct' => true],
                            ['choice_text' => 'Le nombre de graphiques et d’indicateurs affichés dans le tableau de bord présenté à la direction', 'is_correct' => false],
                            ['choice_text' => 'La précision des montants au centime près', 'is_correct' => false],
                            ['choice_text' => 'Le niveau de détail des postes du bilan', 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => 'Le cash réel passe régulièrement sous le seuil minimum fixé par la politique de trésorerie. Que faire ?',
                        'explanation' => 'Un écart répété peut venir d’un seuil mal calibré, d’une mauvaise prévision ou d’un nouveau profil de risque. On analyse la cause avant de décider d’ajuster.',
                        'choices' => [
                            ['choice_text' => 'Supprimer la politique de liquidité, qui ne sert à rien', 'is_correct' => false],
                            ['choice_text' => 'Emprunter davantage pour remonter le cash au-dessus du seuil, sans chercher la vraie cause', 'is_correct' => false],
                            ['choice_text' => 'Laisser faire, puisque le seuil est indicatif', 'is_correct' => false],
                            ['choice_text' => 'Chercher pourquoi : seuil mal calibré, prévisions fausses ou activité qui a changé', 'is_correct' => true],
                        ],
                    ],
                    [
                        'question' => 'Quel chiffre montre de combien la trésorerie a augmenté ou baissé sur une période ?',
                        'explanation' => 'Le flux net de trésorerie mesure la différence entre les entrées et sorties de cash sur la période. Il explique directement comment le solde de trésorerie a évolué.',
                        'choices' => [
                            ['choice_text' => 'Le chiffre d’affaires de la période', 'is_correct' => false],
                            ['choice_text' => 'Le flux net de trésorerie', 'is_correct' => true],
                            ['choice_text' => 'Le résultat net comptable de la période', 'is_correct' => false],
                            ['choice_text' => 'Le montant du BFR en fin de période', 'is_correct' => false],
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
