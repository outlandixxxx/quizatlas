<?php

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

        $quizzes = [
            [
                'title' => "Principes fondamentaux de la finance islamique",
                'description' => "Découvrir les grands principes de la finance islamique, la place du commerce, les interdictions de riba, gharar et maysir, et le lien entre finance et activité économique réelle.",
                'duration' => 20,
                'passing_score' => 55,
                'questions' => [
                    [
                        'question' => "Quel principe fondamental distingue la finance islamique du financement fondé sur l'intérêt ?",
                        'explanation' => "La finance islamique interdit le riba et organise les opérations selon des structures compatibles avec les principes de Sharia, notamment à travers le commerce, la location et certains mécanismes de partage des profits et des risques.",
                        'choices' => [
                            ['choice_text' => "L'interdiction du riba et le recours à des contrats conformes à la Sharia", 'is_correct' => true],
                            ['choice_text' => "L'interdiction de toute activité commerciale", 'is_correct' => false],
                            ['choice_text' => "L'obligation de garantir un rendement fixe à chaque investisseur", 'is_correct' => false],
                            ['choice_text' => "L'interdiction de posséder des actifs réels", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Dans le vocabulaire de la finance islamique, que désigne principalement le riba ?",
                        'explanation' => "Le terme riba renvoie à une forme de gain prohibée dans la finance islamique, notamment lorsqu'un intérêt est exigé sur un prêt de manière contraire aux principes applicables.",
                        'choices' => [
                            ['choice_text' => "Un gain financier prohibé par les principes de la Sharia", 'is_correct' => true],
                            ['choice_text' => "Tout bénéfice réalisé sur une vente", 'is_correct' => false],
                            ['choice_text' => "Toute rémunération versée à un salarié", 'is_correct' => false],
                            ['choice_text' => "La commission normale d'un agent commercial", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Pourquoi la finance islamique accorde-t-elle une place importante à l'existence d'une activité ou d'un actif sous-jacent ?",
                        'explanation' => "De nombreuses structures de finance islamique relient la transaction financière à un actif, un service ou une activité économique identifiable afin d'éviter un financement purement déconnecté de l'économie réelle.",
                        'choices' => [
                            ['choice_text' => "Pour relier l'opération financière à une activité, un actif ou un service identifiable", 'is_correct' => true],
                            ['choice_text' => "Pour supprimer toute forme de risque commercial", 'is_correct' => false],
                            ['choice_text' => "Pour garantir automatiquement un bénéfice positif", 'is_correct' => false],
                            ['choice_text' => "Pour empêcher toute transaction entre entreprises", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Une transaction comporte une incertitude excessive sur l'objet vendu, son prix ou ses principales conditions. Quel principe peut être concerné ?",
                        'explanation' => "Le gharar désigne une incertitude ou une ambiguïté excessive dans une transaction. Les contrats islamiques cherchent donc à définir clairement les éléments essentiels de l'opération.",
                        'choices' => [
                            ['choice_text' => "Le principe de gharar", 'is_correct' => true],
                            ['choice_text' => "Le principe de zakat", 'is_correct' => false],
                            ['choice_text' => "Le principe de Murabaha", 'is_correct' => false],
                            ['choice_text' => "Le principe de Ijarah", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quel terme désigne l'interdiction de certaines formes de jeu ou de spéculation assimilable au jeu ?",
                        'explanation' => "Maysir désigne le jeu ou le gain reposant sur le hasard dans une logique assimilable au jeu. Il fait partie des éléments classiquement interdits en finance islamique.",
                        'choices' => [
                            ['choice_text' => "Maysir", 'is_correct' => true],
                            ['choice_text' => "Ijarah", 'is_correct' => false],
                            ['choice_text' => "Mudarabah", 'is_correct' => false],
                            ['choice_text' => "Sukuk", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Une banque finance un commerce de détail licite grâce à un contrat commercial correctement structuré. Quel point est le plus directement cohérent avec la finance islamique ?",
                        'explanation' => "La finance islamique n'interdit pas le commerce licite. Elle cherche à encadrer la transaction pour qu'elle respecte les principes de Sharia et les conditions du contrat utilisé.",
                        'choices' => [
                            ['choice_text' => "Le commerce licite peut être financé lorsqu'un contrat conforme est utilisé", 'is_correct' => true],
                            ['choice_text' => "Toute activité commerciale est interdite", 'is_correct' => false],
                            ['choice_text' => "Toute marge commerciale est assimilée au riba", 'is_correct' => false],
                            ['choice_text' => "Seules les opérations avec des banques centrales sont autorisées", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quel énoncé décrit le mieux le rôle du partage des profits et des risques dans certaines structures islamiques ?",
                        'explanation' => "Certains contrats, notamment Mudarabah et Musharakah, organisent le partage du résultat économique selon des règles contractuelles plutôt que de garantir simplement un intérêt fixe sur un prêt.",
                        'choices' => [
                            ['choice_text' => "Les parties peuvent partager les résultats économiques selon les règles prévues au contrat", 'is_correct' => true],
                            ['choice_text' => "Une partie reçoit toujours un intérêt fixe indépendant du résultat", 'is_correct' => false],
                            ['choice_text' => "Le risque est toujours supprimé", 'is_correct' => false],
                            ['choice_text' => "Le capital ne peut jamais être utilisé dans une activité réelle", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quel objectif correspond le mieux à une finance islamique conforme à la Sharia ?",
                        'explanation' => "Une finance islamique cherche à effectuer des opérations économiquement utiles dans un cadre contractuel compatible avec les principes de Sharia, avec une attention particulière aux activités licites et aux conditions de la transaction.",
                        'choices' => [
                            ['choice_text' => "Financer des activités et contrats licites selon des règles conformes à la Sharia", 'is_correct' => true],
                            ['choice_text' => "Maximiser le rendement sans tenir compte de la nature de l'activité", 'is_correct' => false],
                            ['choice_text' => "Éviter toute forme de propriété d'actif", 'is_correct' => false],
                            ['choice_text' => "Garantir que chaque investissement soit sans risque", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quel élément doit être clairement défini pour réduire le risque de gharar dans un contrat de vente ?",
                        'explanation' => "Les caractéristiques essentielles de la vente, comme l'objet, le prix et les conditions principales, doivent être suffisamment claires pour éviter une incertitude excessive.",
                        'choices' => [
                            ['choice_text' => "Les caractéristiques essentielles du bien, du prix et des conditions de la vente", 'is_correct' => true],
                            ['choice_text' => "La couleur du logo du vendeur", 'is_correct' => false],
                            ['choice_text' => "Le cours futur de toutes les actions du marché", 'is_correct' => false],
                            ['choice_text' => "Le bénéfice exact que réalisera l'acheteur", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quelle affirmation est correcte à propos du rendement en finance islamique ?",
                        'explanation' => "La finance islamique n'interdit pas tout rendement. Elle encadre plutôt la manière dont le rendement est généré, en évitant notamment le riba et les structures interdites.",
                        'choices' => [
                            ['choice_text' => "Un rendement peut être obtenu, mais sa source et son contrat doivent être conformes aux principes applicables", 'is_correct' => true],
                            ['choice_text' => "Aucun investisseur ne peut gagner d'argent", 'is_correct' => false],
                            ['choice_text' => "Tout rendement doit obligatoirement être garanti", 'is_correct' => false],
                            ['choice_text' => "Tout profit commercial est automatiquement interdit", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Une transaction finance une activité clairement interdite dans le cadre de la Sharia. Pourquoi cela pose-t-il problème ?",
                        'explanation' => "La conformité ne dépend pas uniquement de la forme du contrat. L'activité financée elle-même doit également être compatible avec les principes de Sharia.",
                        'choices' => [
                            ['choice_text' => "Parce que l'activité sous-jacente doit elle aussi être licite selon les principes applicables", 'is_correct' => true],
                            ['choice_text' => "Parce que toute activité économique est interdite", 'is_correct' => false],
                            ['choice_text' => "Parce qu'un actif réel suffit toujours à rendre l'opération conforme", 'is_correct' => false],
                            ['choice_text' => "Parce que seule la banque peut décider ce qui est rentable", 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => "Murabaha : achat, marge et revente",
                'description' => "Comprendre la structure de base de la Murabaha et distinguer une vente avec marge d'un prêt conventionnel à intérêt.",
                'duration' => 21,
                'passing_score' => 60,
                'questions' => [
                    [
                        'question' => "Qu'est-ce qu'une Murabaha dans sa forme classique de financement ?",
                        'explanation' => "La Murabaha est une vente dans laquelle le coût d'acquisition du bien et la marge convenue sont connus par l'acheteur. En financement, l'institution acquiert d'abord le bien puis le revend au client selon les conditions prévues.",
                        'choices' => [
                            ['choice_text' => "Une vente avec divulgation du coût d'acquisition et d'une marge convenue", 'is_correct' => true],
                            ['choice_text' => "Un prêt où seul le taux d'intérêt change", 'is_correct' => false],
                            ['choice_text' => "Une assurance contre les pertes commerciales", 'is_correct' => false],
                            ['choice_text' => "Une participation automatique au capital d'une entreprise", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Dans une Murabaha de financement, quelle étape précède normalement la revente du bien au client ?",
                        'explanation' => "La structure implique que l'institution acquière le bien avant de le revendre au client. Cette séquence distingue la vente de l'idée d'un simple prêt d'argent.",
                        'choices' => [
                            ['choice_text' => "L'acquisition du bien par l'institution selon la structure convenue", 'is_correct' => true],
                            ['choice_text' => "Le versement d'un dividende au client", 'is_correct' => false],
                            ['choice_text' => "La fermeture du compte du client", 'is_correct' => false],
                            ['choice_text' => "La conversion automatique du bien en action", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Une banque achète une machine pour 100 000 MAD puis la revend en Murabaha pour 115 000 MAD, avec un paiement différé prévu au contrat. Quelle est la marge annoncée ?",
                        'explanation' => "La marge correspond à la différence entre le prix de revente de 115 000 MAD et le coût d'acquisition de 100 000 MAD, soit 15 000 MAD.",
                        'choices' => [
                            ['choice_text' => "15 000 MAD", 'is_correct' => true],
                            ['choice_text' => "10 000 MAD", 'is_correct' => false],
                            ['choice_text' => "100 000 MAD", 'is_correct' => false],
                            ['choice_text' => "215 000 MAD", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Dans une Murabaha, pourquoi la divulgation du coût et de la marge est-elle importante ?",
                        'explanation' => "La Murabaha repose sur une vente à coût majoré dont les éléments essentiels doivent être connus et convenus. La transparence sur le coût et la marge est donc une caractéristique importante du contrat.",
                        'choices' => [
                            ['choice_text' => "Parce que le prix de vente repose sur un coût connu et une marge convenue", 'is_correct' => true],
                            ['choice_text' => "Parce qu'un vendeur doit toujours garantir le bénéfice futur du client", 'is_correct' => false],
                            ['choice_text' => "Parce qu'aucun contrat écrit n'est nécessaire", 'is_correct' => false],
                            ['choice_text' => "Parce que le prix d'un bien ne peut jamais être négocié", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quel élément distingue le plus clairement une Murabaha d'un prêt conventionnel simple ?",
                        'explanation' => "La Murabaha est structurée comme une vente d'un actif identifié avec une marge, alors qu'un prêt conventionnel simple repose sur le versement d'argent à rembourser selon ses conditions financières.",
                        'choices' => [
                            ['choice_text' => "La présence d'une transaction de vente d'un actif avec une marge déterminée", 'is_correct' => true],
                            ['choice_text' => "Le fait qu'aucune somme ne soit jamais remboursée", 'is_correct' => false],
                            ['choice_text' => "L'absence de toute obligation contractuelle", 'is_correct' => false],
                            ['choice_text' => "L'interdiction de toute échéance de paiement", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Un client souhaite financer une voiture en Murabaha. Quel objet constitue le plus naturellement le sous-jacent de la vente ?",
                        'explanation' => "La voiture constitue le bien identifiable acheté puis revendu dans la structure de Murabaha, sous réserve que les conditions du contrat soient respectées.",
                        'choices' => [
                            ['choice_text' => "La voiture identifiée dans la transaction", 'is_correct' => true],
                            ['choice_text' => "Le salaire futur du client", 'is_correct' => false],
                            ['choice_text' => "Le taux de change d'une devise", 'is_correct' => false],
                            ['choice_text' => "Une action choisie au hasard", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Si le coût d'acquisition d'un bien est de 80 000 MAD et la marge convenue est de 12 000 MAD, quel est le prix de vente en Murabaha ?",
                        'explanation' => "Le prix de vente est égal au coût d'acquisition plus la marge : 80 000 + 12 000 = 92 000 MAD.",
                        'choices' => [
                            ['choice_text' => "92 000 MAD", 'is_correct' => true],
                            ['choice_text' => "68 000 MAD", 'is_correct' => false],
                            ['choice_text' => "80 000 MAD", 'is_correct' => false],
                            ['choice_text' => "104 000 MAD", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Pourquoi la Murabaha ne doit-elle pas être réduite à l'idée de « taux déguisé » sans examiner sa structure ?",
                        'explanation' => "Pour évaluer une opération, il faut regarder les contrats, le bien, l'acquisition, la revente, la marge et les obligations des parties. La qualification dépend de la structure juridique et économique de l'opération.",
                        'choices' => [
                            ['choice_text' => "Parce que la nature de la transaction et les étapes contractuelles comptent dans l'analyse", 'is_correct' => true],
                            ['choice_text' => "Parce qu'aucune marge ne peut être calculée", 'is_correct' => false],
                            ['choice_text' => "Parce qu'une Murabaha n'a jamais de prix déterminé", 'is_correct' => false],
                            ['choice_text' => "Parce que les contrats n'ont aucune importance", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Dans une Murabaha, le client paie finalement 126 000 MAD pour un bien acquis 120 000 MAD. Quelle marge totale a été prévue ?",
                        'explanation' => "La marge totale est égale au prix de revente moins le coût d'acquisition : 126 000 - 120 000 = 6 000 MAD.",
                        'choices' => [
                            ['choice_text' => "6 000 MAD", 'is_correct' => true],
                            ['choice_text' => "4 000 MAD", 'is_correct' => false],
                            ['choice_text' => "120 000 MAD", 'is_correct' => false],
                            ['choice_text' => "246 000 MAD", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quel élément doit être suffisamment clair dans une vente de Murabaha pour éviter une incertitude excessive ?",
                        'explanation' => "Le bien vendu, son prix et les principales conditions de la vente doivent être clairement déterminés afin de limiter le gharar.",
                        'choices' => [
                            ['choice_text' => "Le bien vendu, son prix et les principales conditions contractuelles", 'is_correct' => true],
                            ['choice_text' => "Uniquement la couleur de l'agence bancaire", 'is_correct' => false],
                            ['choice_text' => "La rentabilité future de l'acheteur", 'is_correct' => false],
                            ['choice_text' => "Le prix futur de toutes les matières premières", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Si le client demande à la banque d'acquérir un bien précis pour une Murabaha, quel point doit rester cohérent avec la logique du contrat ?",
                        'explanation' => "La structure doit rester une véritable opération d'acquisition puis de revente du bien, avec des obligations claires pour chaque partie. La banque ne se contente pas simplement de remettre de l'argent sans transaction sur le bien.",
                        'choices' => [
                            ['choice_text' => "L'opération doit conserver sa logique de vente du bien identifié selon le contrat", 'is_correct' => true],
                            ['choice_text' => "Le bien n'a aucune importance", 'is_correct' => false],
                            ['choice_text' => "La banque doit transformer le bien en action immédiatement", 'is_correct' => false],
                            ['choice_text' => "Le prix peut rester totalement indéterminé", 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => "Mudarabah et Musharakah : partage des profits et des risques",
                'description' => "Comparer Mudarabah et Musharakah et comprendre les rôles du capital, du travail, de la gestion et du partage du résultat.",
                'duration' => 23,
                'passing_score' => 60,
                'questions' => [
                    [
                        'question' => "Dans une Mudarabah, quel est le rôle typique du Rabb al-Mal ?",
                        'explanation' => "Le Rabb al-Mal fournit le capital dans une Mudarabah. Le gestionnaire, appelé Mudarib, apporte généralement son travail et son expertise selon les termes du contrat.",
                        'choices' => [
                            ['choice_text' => "Fournir le capital", 'is_correct' => true],
                            ['choice_text' => "Fournir uniquement un bien loué", 'is_correct' => false],
                            ['choice_text' => "Agir obligatoirement comme auditeur externe", 'is_correct' => false],
                            ['choice_text' => "Verser un intérêt fixe au gestionnaire", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Dans une Mudarabah, quel rôle correspond généralement au Mudarib ?",
                        'explanation' => "Le Mudarib gère l'activité selon les conditions du contrat. Il apporte principalement son travail, son expérience ou sa gestion plutôt qu'un apport de capital obligatoire équivalent à celui du Rabb al-Mal.",
                        'choices' => [
                            ['choice_text' => "Gérer l'activité selon les conditions convenues", 'is_correct' => true],
                            ['choice_text' => "Fournir nécessairement tout le capital", 'is_correct' => false],
                            ['choice_text' => "Émettre des Sukuk pour la banque", 'is_correct' => false],
                            ['choice_text' => "Garantir un bénéfice minimum à l'investisseur", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Une Mudarabah réalise un bénéfice de 50 000 MAD et le contrat prévoit 70 % du profit pour l'investisseur et 30 % pour le gestionnaire. Combien revient au gestionnaire ?",
                        'explanation' => "La part du gestionnaire est 30 % de 50 000 MAD, soit 15 000 MAD.",
                        'choices' => [
                            ['choice_text' => "15 000 MAD", 'is_correct' => true],
                            ['choice_text' => "20 000 MAD", 'is_correct' => false],
                            ['choice_text' => "30 000 MAD", 'is_correct' => false],
                            ['choice_text' => "35 000 MAD", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Dans une Musharakah, quelle caractéristique est centrale ?",
                        'explanation' => "La Musharakah repose sur une association dans laquelle plusieurs parties apportent du capital au projet et peuvent participer à sa gestion selon l'accord conclu.",
                        'choices' => [
                            ['choice_text' => "Plusieurs partenaires apportent du capital dans une structure de partenariat", 'is_correct' => true],
                            ['choice_text' => "Une banque verse seulement un prêt à intérêt", 'is_correct' => false],
                            ['choice_text' => "Le client paie uniquement une prime d'assurance", 'is_correct' => false],
                            ['choice_text' => "Le contrat porte obligatoirement sur une location", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Deux partenaires investissent 60 000 MAD et 40 000 MAD dans une Musharakah. Quel est le total du capital apporté ?",
                        'explanation' => "Le capital total est la somme des deux apports : 60 000 + 40 000 = 100 000 MAD.",
                        'choices' => [
                            ['choice_text' => "100 000 MAD", 'is_correct' => true],
                            ['choice_text' => "20 000 MAD", 'is_correct' => false],
                            ['choice_text' => "60 000 MAD", 'is_correct' => false],
                            ['choice_text' => "140 000 MAD", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quel énoncé distingue le mieux Mudarabah et Musharakah ?",
                        'explanation' => "Dans une Mudarabah, l'un des principaux rôles consiste à fournir le capital tandis que l'autre gère. Dans une Musharakah, plusieurs partenaires apportent généralement du capital au partenariat.",
                        'choices' => [
                            ['choice_text' => "Mudarabah sépare généralement apport de capital et gestion, tandis que Musharakah repose sur un partenariat avec apports de capital", 'is_correct' => true],
                            ['choice_text' => "Les deux sont toujours des contrats de location", 'is_correct' => false],
                            ['choice_text' => "Mudarabah est une obligation et Musharakah une assurance", 'is_correct' => false],
                            ['choice_text' => "Musharakah interdit toute gestion par les partenaires", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Dans une Mudarabah, le capital est de 200 000 MAD et le projet subit une perte commerciale réelle sans faute ou négligence du gestionnaire. Quelle logique générale s'applique ?",
                        'explanation' => "Dans une Mudarabah, la perte financière du capital est en principe supportée par le fournisseur du capital, tandis que le gestionnaire perd son effort et son temps, sauf faute, négligence ou manquement aux conditions convenues.",
                        'choices' => [
                            ['choice_text' => "La perte financière du capital revient au fournisseur du capital, sauf faute ou négligence du gestionnaire", 'is_correct' => true],
                            ['choice_text' => "Le gestionnaire doit toujours rembourser intégralement le capital", 'is_correct' => false],
                            ['choice_text' => "La banque centrale rembourse automatiquement la perte", 'is_correct' => false],
                            ['choice_text' => "La perte devient automatiquement un intérêt à payer", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Pourquoi un profit fixe garanti à l'avance peut-il poser problème dans une Mudarabah ?",
                        'explanation' => "La Mudarabah organise le partage du profit réalisé selon un ratio convenu. Garantir un rendement fixe indépendant du résultat peut contredire cette logique de partage du résultat.",
                        'choices' => [
                            ['choice_text' => "Parce que le contrat repose sur le partage du profit réalisé plutôt que sur une rémunération fixe garantie", 'is_correct' => true],
                            ['choice_text' => "Parce qu'un profit ne peut jamais être partagé", 'is_correct' => false],
                            ['choice_text' => "Parce que le gestionnaire ne peut jamais recevoir de rémunération", 'is_correct' => false],
                            ['choice_text' => "Parce que tout investissement islamique doit être gratuit", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Dans une Musharakah, deux partenaires décident que le premier gérera l'activité au quotidien. Que faut-il retenir ?",
                        'explanation' => "Les partenaires peuvent organiser les rôles de gestion selon leur accord. Le fait qu'un partenaire gère davantage ne supprime pas la nature de partenariat du contrat.",
                        'choices' => [
                            ['choice_text' => "Les rôles de gestion peuvent être définis contractuellement entre les partenaires", 'is_correct' => true],
                            ['choice_text' => "Seul un tiers extérieur peut gérer", 'is_correct' => false],
                            ['choice_text' => "La gestion rend automatiquement le contrat conventionnel à intérêt", 'is_correct' => false],
                            ['choice_text' => "Un partenaire ne peut jamais travailler dans le projet", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Un investisseur apporte 70 % du capital d'une Musharakah et un autre 30 %. Quel élément doit être distingué du simple apport en capital ?",
                        'explanation' => "La répartition du capital et les modalités de partage du profit sont deux éléments qui doivent être analysés séparément selon les règles contractuelles applicables.",
                        'choices' => [
                            ['choice_text' => "La manière dont le profit est partagé selon le contrat", 'is_correct' => true],
                            ['choice_text' => "La couleur du siège social", 'is_correct' => false],
                            ['choice_text' => "Le cours futur de toutes les actions", 'is_correct' => false],
                            ['choice_text' => "Le taux de change du lendemain", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quel exemple correspond le mieux à une logique de Mudarabah ?",
                        'explanation' => "Une personne fournit le capital et une autre apporte sa gestion pour exploiter un commerce, avec un partage du profit selon un ratio convenu : c'est une situation typique de Mudarabah.",
                        'choices' => [
                            ['choice_text' => "Un investisseur fournit le capital et un entrepreneur gère l'activité avec partage du profit", 'is_correct' => true],
                            ['choice_text' => "Une banque loue un immeuble contre un loyer fixe", 'is_correct' => false],
                            ['choice_text' => "Une compagnie couvre un risque contre une contribution mutualisée", 'is_correct' => false],
                            ['choice_text' => "Une institution revend une voiture avec une marge annoncée", 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => "Ijarah et financement par la location",
                'description' => "Comprendre la logique d'Ijarah, les rôles du bailleur et du preneur, ainsi que les différences avec une vente financée.",
                'duration' => 19,
                'passing_score' => 50,
                'questions' => [
                    [
                        'question' => "Que désigne principalement le contrat d'Ijarah ?",
                        'explanation' => "Ijarah est un contrat de location par lequel le droit d'utiliser un actif ou un service est accordé pendant une période et selon des conditions définies contre une rémunération convenue.",
                        'choices' => [
                            ['choice_text' => "La mise à disposition de l'usage d'un actif contre un loyer convenu", 'is_correct' => true],
                            ['choice_text' => "Un prêt à intérêt garanti par un actif", 'is_correct' => false],
                            ['choice_text' => "Une vente avec bénéfice obligatoire", 'is_correct' => false],
                            ['choice_text' => "Une participation au capital d'une entreprise", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Dans une Ijarah, qui est généralement le bailleur ?",
                        'explanation' => "Le bailleur est la partie qui met l'actif à disposition du preneur selon les conditions du contrat et perçoit le loyer convenu.",
                        'choices' => [
                            ['choice_text' => "La partie qui détient ou met l'actif à disposition du preneur selon le contrat", 'is_correct' => true],
                            ['choice_text' => "Toujours le preneur lui-même", 'is_correct' => false],
                            ['choice_text' => "La banque centrale uniquement", 'is_correct' => false],
                            ['choice_text' => "Un assureur tiers dans tous les cas", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Une entreprise loue une machine pendant 3 ans pour 8 000 MAD par mois. Quel est le total des loyers sur 36 mois, sans considérer d'autres coûts ?",
                        'explanation' => "36 mois × 8 000 MAD = 288 000 MAD de loyers au total sur la période considérée.",
                        'choices' => [
                            ['choice_text' => "288 000 MAD", 'is_correct' => true],
                            ['choice_text' => "96 000 MAD", 'is_correct' => false],
                            ['choice_text' => "216 000 MAD", 'is_correct' => false],
                            ['choice_text' => "360 000 MAD", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quelle différence fondamentale existe entre Ijarah et une vente de Murabaha ?",
                        'explanation' => "Ijarah porte principalement sur l'usage d'un actif pendant une période, tandis que Murabaha est une vente du bien à un prix connu comprenant une marge convenue.",
                        'choices' => [
                            ['choice_text' => "Ijarah porte sur l'usage loué de l'actif, alors que Murabaha repose sur une vente", 'is_correct' => true],
                            ['choice_text' => "Ijarah est toujours une participation au capital", 'is_correct' => false],
                            ['choice_text' => "Murabaha est uniquement une assurance", 'is_correct' => false],
                            ['choice_text' => "Les deux contrats sont exactement identiques", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Pourquoi l'actif est-il important dans une Ijarah ?",
                        'explanation' => "Le contrat concerne le droit d'utiliser un actif ou un service déterminé. L'actif et les conditions de son usage doivent donc être suffisamment identifiables.",
                        'choices' => [
                            ['choice_text' => "Parce que le contrat porte sur l'usage d'un actif ou d'un service identifié", 'is_correct' => true],
                            ['choice_text' => "Parce que l'actif garantit toujours le bénéfice du preneur", 'is_correct' => false],
                            ['choice_text' => "Parce que le prix de l'actif n'a jamais d'importance", 'is_correct' => false],
                            ['choice_text' => "Parce que la location interdit tout risque commercial", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Un contrat prévoit clairement un loyer mensuel, une durée de 24 mois et l'identification d'un véhicule. Quel principe contribue à réduire le gharar ?",
                        'explanation' => "La clarté du bien, de la durée et du prix permet aux parties de connaître les éléments essentiels du contrat et réduit l'incertitude excessive.",
                        'choices' => [
                            ['choice_text' => "La définition claire des éléments essentiels du contrat", 'is_correct' => true],
                            ['choice_text' => "La garantie d'un bénéfice boursier", 'is_correct' => false],
                            ['choice_text' => "L'absence de tout risque de maintenance", 'is_correct' => false],
                            ['choice_text' => "La conversion du loyer en dividende", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Une société paie 12 500 MAD par mois pour une Ijarah de 2 ans. Quel montant total de loyers est prévu ?",
                        'explanation' => "Deux ans représentent 24 mois. Le total est donc 24 × 12 500 = 300 000 MAD.",
                        'choices' => [
                            ['choice_text' => "300 000 MAD", 'is_correct' => true],
                            ['choice_text' => "150 000 MAD", 'is_correct' => false],
                            ['choice_text' => "275 000 MAD", 'is_correct' => false],
                            ['choice_text' => "312 500 MAD", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quel exemple correspond le mieux à une Ijarah ?",
                        'explanation' => "Louer l'usage d'un véhicule pendant une durée déterminée contre des loyers est un exemple simple de structure de location.",
                        'choices' => [
                            ['choice_text' => "Mettre un véhicule identifié à disposition contre des loyers pendant une durée définie", 'is_correct' => true],
                            ['choice_text' => "Prêter de l'argent avec intérêt", 'is_correct' => false],
                            ['choice_text' => "Partager le capital d'une société entre deux associés", 'is_correct' => false],
                            ['choice_text' => "Émettre une obligation conventionnelle à coupon fixe", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Dans une structure de location, pourquoi les obligations d'entretien et de responsabilité doivent-elles être clairement définies ?",
                        'explanation' => "Les parties doivent savoir qui supporte quelles obligations liées à l'actif. La clarté contractuelle réduit les litiges et l'incertitude.",
                        'choices' => [
                            ['choice_text' => "Pour répartir clairement les responsabilités et réduire les incertitudes contractuelles", 'is_correct' => true],
                            ['choice_text' => "Pour garantir que le bien ne pourra jamais subir de dommage", 'is_correct' => false],
                            ['choice_text' => "Pour convertir automatiquement le contrat en Murabaha", 'is_correct' => false],
                            ['choice_text' => "Pour garantir un profit boursier au preneur", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quel énoncé est le plus juste concernant le loyer en Ijarah ?",
                        'explanation' => "Le loyer rémunère l'usage prévu par le contrat. Les montants et les modalités de paiement doivent être déterminés selon les conditions contractuelles applicables.",
                        'choices' => [
                            ['choice_text' => "Il rémunère l'usage de l'actif selon les conditions prévues au contrat", 'is_correct' => true],
                            ['choice_text' => "Il représente toujours un dividende sur les actions du locataire", 'is_correct' => false],
                            ['choice_text' => "Il doit obligatoirement augmenter chaque mois", 'is_correct' => false],
                            ['choice_text' => "Il correspond toujours au bénéfice du locataire", 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => "Sukuk et financement des actifs",
                'description' => "Découvrir les Sukuk, leur relation avec des actifs ou droits sous-jacents et leurs principales différences avec une obligation conventionnelle.",
                'duration' => 22,
                'passing_score' => 60,
                'questions' => [
                    [
                        'question' => "Que désigne généralement le terme Sukuk ?",
                        'explanation' => "Les Sukuk sont des certificats représentant des droits ou intérêts dans une structure conforme à la Sharia, souvent associés à des actifs, projets ou activités sous-jacentes.",
                        'choices' => [
                            ['choice_text' => "Des certificats représentant des droits liés à une structure d'actifs ou d'activités conforme à la Sharia", 'is_correct' => true],
                            ['choice_text' => "Des actions ordinaires dans toutes les entreprises cotées", 'is_correct' => false],
                            ['choice_text' => "Des contrats d'assurance automobile uniquement", 'is_correct' => false],
                            ['choice_text' => "Des prêts conventionnels à taux variable", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Pourquoi un Sukuk n'est-il pas simplement décrit comme une obligation classique sans autre précision ?",
                        'explanation' => "Une obligation classique représente généralement une créance assortie d'intérêts. Un Sukuk est structuré pour représenter des droits liés à des actifs ou activités selon un contrat conforme à la Sharia.",
                        'choices' => [
                            ['choice_text' => "Parce que sa structure économique et juridique repose sur des droits liés à des actifs ou activités selon la Sharia", 'is_correct' => true],
                            ['choice_text' => "Parce que tous les Sukuk sont des actions ordinaires", 'is_correct' => false],
                            ['choice_text' => "Parce qu'un Sukuk ne peut jamais produire de rendement", 'is_correct' => false],
                            ['choice_text' => "Parce qu'un Sukuk ne peut financer aucun actif réel", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Un Sukuk finance des actifs immobiliers dont les investisseurs reçoivent les revenus selon la structure prévue. Quel élément est central ?",
                        'explanation' => "La relation entre les certificats et les actifs ou droits sous-jacents constitue un élément essentiel de la structure. Les revenus peuvent provenir de l'utilisation ou de l'exploitation de ces actifs selon le contrat.",
                        'choices' => [
                            ['choice_text' => "Le lien entre les certificats, les actifs sous-jacents et les flux générés", 'is_correct' => true],
                            ['choice_text' => "La garantie automatique d'un prix de marché constant", 'is_correct' => false],
                            ['choice_text' => "L'absence de tout actif ou droit sous-jacent", 'is_correct' => false],
                            ['choice_text' => "Le paiement obligatoire d'un intérêt conventionnel", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quel type de flux peut, selon la structure du Sukuk, être distribué aux investisseurs ?",
                        'explanation' => "Selon la structure utilisée, les flux peuvent provenir par exemple des loyers générés par des actifs ou de l'exploitation d'une activité sous-jacente conforme au contrat.",
                        'choices' => [
                            ['choice_text' => "Des revenus générés par les actifs ou activités sous-jacents selon la structure", 'is_correct' => true],
                            ['choice_text' => "Uniquement une loterie organisée par l'émetteur", 'is_correct' => false],
                            ['choice_text' => "Toujours des intérêts sur un prêt sans actif", 'is_correct' => false],
                            ['choice_text' => "Uniquement des dividendes d'une banque centrale", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Un Sukuk a une valeur nominale totale de 1 000 000 MAD et 10 000 certificats égaux sont émis. Quelle valeur nominale correspond à un certificat ?",
                        'explanation' => "La valeur nominale par certificat est 1 000 000 ÷ 10 000 = 100 MAD.",
                        'choices' => [
                            ['choice_text' => "100 MAD", 'is_correct' => true],
                            ['choice_text' => "10 MAD", 'is_correct' => false],
                            ['choice_text' => "1 000 MAD", 'is_correct' => false],
                            ['choice_text' => "10 000 MAD", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Pourquoi l'actif ou le droit sous-jacent doit-il être identifié dans une structure de Sukuk ?",
                        'explanation' => "L'identification du sous-jacent permet de comprendre la nature des droits détenus, les sources de revenus et la logique économique de l'opération.",
                        'choices' => [
                            ['choice_text' => "Pour comprendre les droits représentés et les flux associés à la structure", 'is_correct' => true],
                            ['choice_text' => "Pour garantir que l'actif ne peut jamais perdre de valeur", 'is_correct' => false],
                            ['choice_text' => "Pour empêcher toute revente des certificats", 'is_correct' => false],
                            ['choice_text' => "Pour transformer le Sukuk en compte d'épargne", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quel risque financier peut rester présent pour un investisseur en Sukuk ?",
                        'explanation' => "La conformité à la Sharia ne supprime pas les risques financiers. La valeur des actifs, les flux, le marché et la situation des parties peuvent encore évoluer défavorablement.",
                        'choices' => [
                            ['choice_text' => "Le risque de variation de valeur ou de flux lié à la structure sous-jacente", 'is_correct' => true],
                            ['choice_text' => "Aucun risque financier", 'is_correct' => false],
                            ['choice_text' => "Uniquement un risque de couleur de certificat", 'is_correct' => false],
                            ['choice_text' => "Un rendement automatiquement supérieur au marché", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Un investisseur analyse un Sukuk avant achat. Quelle information est particulièrement importante ?",
                        'explanation' => "L'investisseur doit comprendre les actifs, les contrats utilisés, la source des revenus, les droits représentés et les principaux risques de la structure.",
                        'choices' => [
                            ['choice_text' => "Les actifs sous-jacents, les contrats, les flux de revenus et les risques", 'is_correct' => true],
                            ['choice_text' => "Uniquement le nom commercial du Sukuk", 'is_correct' => false],
                            ['choice_text' => "Uniquement la couleur du certificat", 'is_correct' => false],
                            ['choice_text' => "Seulement le nombre de pages du prospectus", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quel énoncé décrit correctement la logique générale d'un Sukuk ?",
                        'explanation' => "Un Sukuk est structuré autour de droits dans des actifs, services ou projets et de contrats conformes à la Sharia, plutôt que comme une simple créance à intérêt.",
                        'choices' => [
                            ['choice_text' => "Il représente des droits liés à une structure économique sous-jacente conforme à la Sharia", 'is_correct' => true],
                            ['choice_text' => "Il est toujours une action ordinaire", 'is_correct' => false],
                            ['choice_text' => "Il interdit tout revenu aux investisseurs", 'is_correct' => false],
                            ['choice_text' => "Il est toujours un prêt personnel", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Si les revenus d'un actif sous-jacent diminuent fortement, quel effet peut apparaître selon la structure d'un Sukuk ?",
                        'explanation' => "Une baisse des revenus de l'actif peut réduire les flux disponibles pour les investisseurs lorsque leur rendement dépend des performances ou revenus de l'actif sous-jacent.",
                        'choices' => [
                            ['choice_text' => "Une baisse potentielle des flux distribués", 'is_correct' => true],
                            ['choice_text' => "Une hausse automatique des revenus", 'is_correct' => false],
                            ['choice_text' => "Une disparition obligatoire de l'actif", 'is_correct' => false],
                            ['choice_text' => "Un remboursement garanti par la bourse", 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => "Takaful et gestion mutualisée des risques",
                'description' => "Comprendre la logique du Takaful, la mutualisation des risques, les contributions des participants et les différences générales avec l'assurance conventionnelle.",
                'duration' => 20,
                'passing_score' => 55,
                'questions' => [
                    [
                        'question' => "Quel principe décrit le mieux le Takaful ?",
                        'explanation' => "Le Takaful repose sur une logique de mutualisation et d'entraide entre participants, avec une structure conforme aux principes de Sharia.",
                        'choices' => [
                            ['choice_text' => "La mutualisation des risques et l'entraide entre participants dans un cadre conforme à la Sharia", 'is_correct' => true],
                            ['choice_text' => "Une vente d'actions à prix fixe", 'is_correct' => false],
                            ['choice_text' => "Un prêt à intérêt garanti", 'is_correct' => false],
                            ['choice_text' => "Un contrat de spéculation sur les devises", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Pourquoi parle-t-on de mutualisation dans le Takaful ?",
                        'explanation' => "Les participants contribuent à un mécanisme destiné à aider les membres lorsqu'un événement couvert survient, selon les règles du programme.",
                        'choices' => [
                            ['choice_text' => "Parce que les participants contribuent à un mécanisme collectif de couverture des risques", 'is_correct' => true],
                            ['choice_text' => "Parce qu'un participant reçoit toujours un bénéfice certain", 'is_correct' => false],
                            ['choice_text' => "Parce que le risque est supprimé", 'is_correct' => false],
                            ['choice_text' => "Parce que toutes les pertes sont payées par l'État", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Un participant verse 1 200 MAD de contribution annuelle à un programme Takaful. Quel est le rôle général de cette contribution ?",
                        'explanation' => "La contribution alimente le mécanisme prévu par le programme et participe au financement de l'entraide et de la couverture des événements définis au contrat.",
                        'choices' => [
                            ['choice_text' => "Participer au financement du mécanisme collectif prévu par le programme", 'is_correct' => true],
                            ['choice_text' => "Garantir un rendement d'investissement fixe", 'is_correct' => false],
                            ['choice_text' => "Acheter automatiquement une action", 'is_correct' => false],
                            ['choice_text' => "Rembourser un prêt bancaire", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quel risque peut être couvert dans un programme Takaful si le contrat le prévoit ?",
                        'explanation' => "Le Takaful peut couvrir différents risques selon le produit, par exemple certains risques liés à la santé, aux biens ou aux véhicules, sous réserve des conditions du programme.",
                        'choices' => [
                            ['choice_text' => "Un risque défini dans les conditions du programme, comme un dommage à un véhicule", 'is_correct' => true],
                            ['choice_text' => "Toute perte d'investissement sans aucune condition", 'is_correct' => false],
                            ['choice_text' => "Toute dette d'une entreprise mondiale", 'is_correct' => false],
                            ['choice_text' => "Un rendement boursier inférieur au marché", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quel est l'intérêt économique principal de la mutualisation des risques ?",
                        'explanation' => "La mutualisation permet de répartir l'effet financier de certains événements entre un groupe de participants plutôt que de laisser chaque participant supporter seul une perte couverte.",
                        'choices' => [
                            ['choice_text' => "Répartir le coût des événements couverts entre les participants selon les règles du système", 'is_correct' => true],
                            ['choice_text' => "Garantir qu'aucun participant ne subira jamais de perte", 'is_correct' => false],
                            ['choice_text' => "Supprimer tout risque économique", 'is_correct' => false],
                            ['choice_text' => "Créer un rendement boursier automatique", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Pourquoi la structure du Takaful doit-elle être examinée et documentée ?",
                        'explanation' => "Les contributions, les règles de couverture, la gestion du fonds et les responsabilités doivent être clairs afin d'éviter l'incertitude excessive et d'assurer la conformité du mécanisme.",
                        'choices' => [
                            ['choice_text' => "Pour définir clairement les contributions, la couverture et le fonctionnement du mécanisme", 'is_correct' => true],
                            ['choice_text' => "Pour supprimer toute obligation contractuelle", 'is_correct' => false],
                            ['choice_text' => "Pour garantir automatiquement un excédent annuel", 'is_correct' => false],
                            ['choice_text' => "Pour transformer le Takaful en action cotée", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Une communauté verse collectivement des contributions et un fonds indemnise les participants touchés par certains événements couverts. Quelle logique cela illustre-t-il ?",
                        'explanation' => "Cette situation illustre la mutualisation du risque : les participants contribuent à un fonds qui peut être utilisé pour aider ceux qui subissent les événements prévus.",
                        'choices' => [
                            ['choice_text' => "La logique mutualiste du Takaful", 'is_correct' => true],
                            ['choice_text' => "La vente de Murabaha", 'is_correct' => false],
                            ['choice_text' => "La location Ijarah", 'is_correct' => false],
                            ['choice_text' => "Le partage de capital Musharakah", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quel élément distingue conceptuellement le Takaful d'un modèle où une compagnie assume seule le risque en échange d'une prime ?",
                        'explanation' => "Le Takaful met l'accent sur une logique de coopération et de mutualisation entre participants, selon la structure du programme, plutôt que seulement sur un transfert classique du risque vers un assureur.",
                        'choices' => [
                            ['choice_text' => "La logique de coopération et de mutualisation entre participants", 'is_correct' => true],
                            ['choice_text' => "L'interdiction de toute gestion professionnelle", 'is_correct' => false],
                            ['choice_text' => "L'absence totale de fonds", 'is_correct' => false],
                            ['choice_text' => "L'interdiction de définir des risques couverts", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Un programme Takaful dispose de 500 participants qui versent chacun 400 MAD. Quel montant total de contributions est collecté avant autres ajustements ?",
                        'explanation' => "500 × 400 MAD = 200 000 MAD de contributions totales avant les éventuels frais, réserves ou autres éléments prévus par la structure.",
                        'choices' => [
                            ['choice_text' => "200 000 MAD", 'is_correct' => true],
                            ['choice_text' => "20 000 MAD", 'is_correct' => false],
                            ['choice_text' => "100 000 MAD", 'is_correct' => false],
                            ['choice_text' => "500 400 MAD", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quel énoncé est le plus juste concernant la gestion des fonds d'un programme Takaful ?",
                        'explanation' => "La gestion doit suivre les règles prévues par le modèle adopté, notamment pour l'utilisation des contributions, la couverture des sinistres et la gestion des éventuels surplus.",
                        'choices' => [
                            ['choice_text' => "Elle doit respecter les règles contractuelles et le cadre de Sharia prévu par le programme", 'is_correct' => true],
                            ['choice_text' => "Le gestionnaire peut utiliser les fonds pour n'importe quelle activité", 'is_correct' => false],
                            ['choice_text' => "Les fonds doivent toujours être conservés en espèces sans investissement", 'is_correct' => false],
                            ['choice_text' => "Les participants n'ont jamais besoin de connaître les règles de gestion", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Pourquoi le Takaful n'implique-t-il pas que tous les participants recevront plus qu'ils n'ont versé ?",
                        'explanation' => "Le Takaful vise la couverture et la mutualisation des risques, pas un rendement garanti pour chaque participant. Les résultats dépendent des événements couverts et de la structure du fonds.",
                        'choices' => [
                            ['choice_text' => "Parce qu'il s'agit d'un mécanisme de gestion des risques et non d'un rendement garanti", 'is_correct' => true],
                            ['choice_text' => "Parce que les contributions sont toujours perdues", 'is_correct' => false],
                            ['choice_text' => "Parce que les participants ne peuvent jamais être indemnisés", 'is_correct' => false],
                            ['choice_text' => "Parce que tous les fonds sont convertis en actions", 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => "Banque islamique et opérations de financement",
                'description' => "Appliquer les notions de base à des situations bancaires : financement du commerce, partage des risques, contrats et choix d'une structure adaptée.",
                'duration' => 24,
                'passing_score' => 60,
                'questions' => [
                    [
                        'question' => "Une entreprise veut acheter du matériel et demande à une banque islamique une structure de Murabaha. Que fait essentiellement la banque dans cette structure ?",
                        'explanation' => "Dans une Murabaha de financement, la banque acquiert le bien selon la structure prévue puis le revend au client à un prix comprenant une marge connue et convenue.",
                        'choices' => [
                            ['choice_text' => "Elle acquiert le bien puis le revend au client avec une marge convenue", 'is_correct' => true],
                            ['choice_text' => "Elle verse un prêt à intérêt sans acheter le bien", 'is_correct' => false],
                            ['choice_text' => "Elle prend automatiquement 100 % du capital de l'entreprise", 'is_correct' => false],
                            ['choice_text' => "Elle loue toujours le bien sans possibilité de vente", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Une banque islamique veut financer l'utilisation d'un équipement pendant cinq ans sans transférer immédiatement sa propriété au client. Quel contrat est le plus directement adapté à cette logique ?",
                        'explanation' => "Ijarah est fondée sur la mise à disposition de l'usage d'un actif pendant une durée définie contre un loyer.",
                        'choices' => [
                            ['choice_text' => "Ijarah", 'is_correct' => true],
                            ['choice_text' => "Murabaha", 'is_correct' => false],
                            ['choice_text' => "Mudarabah", 'is_correct' => false],
                            ['choice_text' => "Takaful", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Une start-up a besoin de capital et possède une équipe de gestion mais peu de fonds propres. Quelle structure correspond le mieux à une logique où un investisseur fournit le capital et l'entrepreneur gère ?",
                        'explanation' => "Cette situation correspond à la logique de Mudarabah : le fournisseur de capital et le gestionnaire jouent des rôles distincts et partagent le profit selon un ratio convenu.",
                        'choices' => [
                            ['choice_text' => "Mudarabah", 'is_correct' => true],
                            ['choice_text' => "Ijarah", 'is_correct' => false],
                            ['choice_text' => "Murabaha", 'is_correct' => false],
                            ['choice_text' => "Takaful", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Deux entrepreneurs souhaitent apporter tous les deux du capital à un projet immobilier et partager le résultat selon leur accord. Quelle structure est la plus proche ?",
                        'explanation' => "Lorsque plusieurs partenaires apportent du capital dans un projet commun, la logique de Musharakah est particulièrement pertinente.",
                        'choices' => [
                            ['choice_text' => "Musharakah", 'is_correct' => true],
                            ['choice_text' => "Ijarah", 'is_correct' => false],
                            ['choice_text' => "Murabaha", 'is_correct' => false],
                            ['choice_text' => "Takaful", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Une banque islamique examine un client et souhaite vérifier si l'activité financée est compatible avec la Sharia. Pourquoi cette étape est-elle importante ?",
                        'explanation' => "La conformité ne porte pas seulement sur la forme du contrat ; l'activité économique financée doit également être licite selon les principes applicables.",
                        'choices' => [
                            ['choice_text' => "Parce que l'activité sous-jacente doit elle aussi respecter les principes de Sharia", 'is_correct' => true],
                            ['choice_text' => "Parce qu'une activité rentable est automatiquement licite", 'is_correct' => false],
                            ['choice_text' => "Parce que seules les entreprises publiques sont éligibles", 'is_correct' => false],
                            ['choice_text' => "Parce que la conformité dépend uniquement de la durée du financement", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quel document ou élément contractuel est particulièrement important pour analyser une opération de finance islamique ?",
                        'explanation' => "L'analyse porte notamment sur le type de contrat, les obligations des parties, l'actif ou l'activité sous-jacente, les flux et les conditions de l'opération.",
                        'choices' => [
                            ['choice_text' => "Le contrat et la description des actifs, obligations et flux de l'opération", 'is_correct' => true],
                            ['choice_text' => "Uniquement le logo de la banque", 'is_correct' => false],
                            ['choice_text' => "La couleur du relevé bancaire", 'is_correct' => false],
                            ['choice_text' => "Le nombre de succursales de la banque uniquement", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Une banque islamique reçoit 300 000 MAD à investir dans une Mudarabah. Le contrat prévoit 65 % du profit pour l'investisseur et 35 % pour le gestionnaire. Si le profit est de 40 000 MAD, quelle part revient au gestionnaire ?",
                        'explanation' => "35 % de 40 000 MAD = 14 000 MAD. La part du gestionnaire est donc de 14 000 MAD.",
                        'choices' => [
                            ['choice_text' => "14 000 MAD", 'is_correct' => true],
                            ['choice_text' => "12 000 MAD", 'is_correct' => false],
                            ['choice_text' => "20 000 MAD", 'is_correct' => false],
                            ['choice_text' => "26 000 MAD", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quel point distingue le mieux une banque islamique d'une banque conventionnelle dans le choix d'un produit de financement ?",
                        'explanation' => "La banque islamique structure ses opérations selon des contrats et principes compatibles avec la Sharia, ce qui influence la manière dont le financement, le rendement et les risques sont organisés.",
                        'choices' => [
                            ['choice_text' => "Le choix de contrats et de structures conformes à la Sharia", 'is_correct' => true],
                            ['choice_text' => "L'absence totale de risque financier", 'is_correct' => false],
                            ['choice_text' => "L'interdiction de tout rendement", 'is_correct' => false],
                            ['choice_text' => "L'impossibilité de financer des entreprises", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Une banque finance un bien par Murabaha. Le coût est de 150 000 MAD et la marge annoncée est de 18 000 MAD. Quel prix de vente doit être prévu, avant autres coûts éventuels ?",
                        'explanation' => "Le prix de vente est égal au coût plus la marge : 150 000 + 18 000 = 168 000 MAD.",
                        'choices' => [
                            ['choice_text' => "168 000 MAD", 'is_correct' => true],
                            ['choice_text' => "132 000 MAD", 'is_correct' => false],
                            ['choice_text' => "150 000 MAD", 'is_correct' => false],
                            ['choice_text' => "178 000 MAD", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Un client demande à une banque islamique un financement pour une activité dont le principal produit est interdit selon les règles de Sharia. Quelle réponse conceptuelle est cohérente ?",
                        'explanation' => "Un contrat correctement rédigé ne suffit pas si l'activité financée elle-même est incompatible avec les principes de Sharia. L'activité sous-jacente doit donc être examinée.",
                        'choices' => [
                            ['choice_text' => "Le financement doit être examiné au regard de la licéité de l'activité sous-jacente", 'is_correct' => true],
                            ['choice_text' => "Le financement devient automatiquement conforme grâce à un contrat de location", 'is_correct' => false],
                            ['choice_text' => "Toutes les activités sont nécessairement acceptées", 'is_correct' => false],
                            ['choice_text' => "La banque doit financer l'activité si elle est rentable", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quel principe aide une banque islamique à choisir entre Murabaha, Ijarah et Mudarabah ?",
                        'explanation' => "Chaque contrat répond à une logique économique différente : vente avec marge pour Murabaha, location pour Ijarah, partage de profit et rôles différenciés pour Mudarabah.",
                        'choices' => [
                            ['choice_text' => "La nature de l'opération recherchée et les droits et obligations propres à chaque contrat", 'is_correct' => true],
                            ['choice_text' => "Le choix d'un contrat au hasard", 'is_correct' => false],
                            ['choice_text' => "Uniquement la couleur du produit bancaire", 'is_correct' => false],
                            ['choice_text' => "Le principe selon lequel tous les contrats sont identiques", 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => "Repères pratiques : comparer les principaux contrats islamiques",
                'description' => "Réviser les différences entre Murabaha, Mudarabah, Musharakah, Ijarah, Sukuk et Takaful à travers des mini-cas et des comparaisons.",
                'duration' => 25,
                'passing_score' => 55,
                'questions' => [
                    [
                        'question' => "Une institution achète un ordinateur 30 000 MAD et le revend 34 500 MAD au client avec paiement différé. Quel contrat correspond le mieux à cette opération ?",
                        'explanation' => "Il s'agit d'une vente à coût majoré avec un prix de revente déterminé : cette logique correspond à la Murabaha.",
                        'choices' => [
                            ['choice_text' => "Murabaha", 'is_correct' => true],
                            ['choice_text' => "Ijarah", 'is_correct' => false],
                            ['choice_text' => "Mudarabah", 'is_correct' => false],
                            ['choice_text' => "Takaful", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Une société met un local à la disposition d'une autre entreprise pendant 4 ans contre un loyer mensuel défini. Quelle structure est illustrée ?",
                        'explanation' => "La mise à disposition de l'usage d'un actif pendant une durée déterminée contre un loyer correspond à la logique d'Ijarah.",
                        'choices' => [
                            ['choice_text' => "Ijarah", 'is_correct' => true],
                            ['choice_text' => "Musharakah", 'is_correct' => false],
                            ['choice_text' => "Murabaha", 'is_correct' => false],
                            ['choice_text' => "Mudarabah", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Un investisseur fournit tout le capital d'un projet et un entrepreneur fournit la gestion. Les profits sont partagés selon un ratio convenu. Quelle structure est illustrée ?",
                        'explanation' => "La distinction entre fournisseur de capital et gestionnaire avec partage du profit correspond à la Mudarabah.",
                        'choices' => [
                            ['choice_text' => "Mudarabah", 'is_correct' => true],
                            ['choice_text' => "Musharakah", 'is_correct' => false],
                            ['choice_text' => "Ijarah", 'is_correct' => false],
                            ['choice_text' => "Sukuk", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Deux partenaires injectent respectivement 80 000 MAD et 120 000 MAD dans une même activité. Quel contrat correspond à cette logique de partenariat en capital ?",
                        'explanation' => "Plusieurs partenaires qui apportent du capital à un projet commun correspondent à une logique de Musharakah.",
                        'choices' => [
                            ['choice_text' => "Musharakah", 'is_correct' => true],
                            ['choice_text' => "Ijarah", 'is_correct' => false],
                            ['choice_text' => "Murabaha", 'is_correct' => false],
                            ['choice_text' => "Takaful", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Un programme protège les participants grâce à des contributions mutualisées destinées à indemniser certains sinistres. Quel produit reconnaît-on ?",
                        'explanation' => "La mutualisation des contributions pour couvrir des événements définis est une caractéristique essentielle du Takaful.",
                        'choices' => [
                            ['choice_text' => "Takaful", 'is_correct' => true],
                            ['choice_text' => "Murabaha", 'is_correct' => false],
                            ['choice_text' => "Mudarabah", 'is_correct' => false],
                            ['choice_text' => "Ijarah", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Des investisseurs détiennent des certificats liés à un portefeuille d'actifs générant des revenus selon une structure conforme à la Sharia. Quel produit est le plus probable ?",
                        'explanation' => "Des certificats représentant des droits liés à des actifs ou à des flux sous-jacents correspondent à la logique des Sukuk.",
                        'choices' => [
                            ['choice_text' => "Sukuk", 'is_correct' => true],
                            ['choice_text' => "Takaful", 'is_correct' => false],
                            ['choice_text' => "Ijarah uniquement", 'is_correct' => false],
                            ['choice_text' => "Murabaha uniquement", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quel duo associe correctement chaque contrat à sa fonction principale ?",
                        'explanation' => "Murabaha correspond à une vente avec marge, tandis qu'Ijarah correspond à une location de l'usage d'un actif. Cette distinction est fondamentale au niveau débutant.",
                        'choices' => [
                            ['choice_text' => "Murabaha : vente avec marge ; Ijarah : location de l'usage", 'is_correct' => true],
                            ['choice_text' => "Murabaha : assurance ; Ijarah : partenariat en capital", 'is_correct' => false],
                            ['choice_text' => "Murabaha : partage de profit ; Ijarah : émission de certificats", 'is_correct' => false],
                            ['choice_text' => "Murabaha : mutualisation ; Ijarah : don", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quel duo associe correctement Mudarabah et Musharakah ?",
                        'explanation' => "Mudarabah distingue généralement fournisseur de capital et gestionnaire, alors que Musharakah correspond à un partenariat dans lequel plusieurs parties apportent du capital.",
                        'choices' => [
                            ['choice_text' => "Mudarabah : capital + gestion distincts ; Musharakah : partenariat avec apports de capital", 'is_correct' => true],
                            ['choice_text' => "Mudarabah : location ; Musharakah : assurance", 'is_correct' => false],
                            ['choice_text' => "Mudarabah : vente à marge ; Musharakah : location", 'is_correct' => false],
                            ['choice_text' => "Mudarabah : Sukuk ; Musharakah : Takaful", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quel élément est commun à de nombreuses structures de finance islamique ?",
                        'explanation' => "De nombreuses structures islamiques reposent sur des contrats définis, des activités licites et une relation identifiable avec un actif, un service ou une activité économique.",
                        'choices' => [
                            ['choice_text' => "Une attention à la licéité de l'activité, à la structure contractuelle et aux conditions de la transaction", 'is_correct' => true],
                            ['choice_text' => "Une garantie de rendement fixe dans tous les cas", 'is_correct' => false],
                            ['choice_text' => "L'absence de tout risque", 'is_correct' => false],
                            ['choice_text' => "L'interdiction de tous les contrats commerciaux", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Une banque hésite entre Murabaha et Mudarabah pour financer l'achat d'une machine déjà identifiée. Quel raisonnement est le plus approprié ?",
                        'explanation' => "Pour choisir une structure, il faut regarder la réalité économique : une acquisition puis revente d'un actif correspond naturellement à Murabaha, tandis que Mudarabah concerne un apport de capital géré par un partenaire.",
                        'choices' => [
                            ['choice_text' => "La nature de l'opération doit guider le choix : achat-revente d'un actif pour Murabaha, partenariat de gestion et capital pour Mudarabah", 'is_correct' => true],
                            ['choice_text' => "Les deux contrats sont interchangeables dans tous les cas", 'is_correct' => false],
                            ['choice_text' => "Mudarabah doit toujours être utilisé pour les actifs physiques", 'is_correct' => false],
                            ['choice_text' => "Murabaha ne peut jamais financer un bien identifié", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quel risque conceptuel les principes de gharar et maysir cherchent-ils notamment à limiter ?",
                        'explanation' => "Gharar concerne l'incertitude excessive ou l'ambiguïté dans la transaction, tandis que maysir renvoie à certaines formes de jeu ou de gain dépendant du hasard. Les deux contribuent à encadrer la nature des opérations financières.",
                        'choices' => [
                            ['choice_text' => "Des structures trop incertaines, ambiguës ou assimilables au jeu", 'is_correct' => true],
                            ['choice_text' => "Toute variation de prix d'un actif réel", 'is_correct' => false],
                            ['choice_text' => "Tout profit commercial", 'is_correct' => false],
                            ['choice_text' => "Toute activité entrepreneuriale", 'is_correct' => false],
                        ],
                    ],
                ],
            ],
            [
                'title' => "Étude de cas : choisir une structure conforme à la Sharia",
                'description' => "Résoudre des mini-cas de finance islamique en sélectionnant une structure cohérente avec le besoin économique et les principes fondamentaux.",
                'duration' => 27,
                'passing_score' => 60,
                'questions' => [
                    [
                        'question' => "Une PME veut acheter un camion précis. La banque doit acquérir le camion puis le revendre avec une marge connue et un paiement différé. Quel montage correspond le mieux ?",
                        'explanation' => "Le besoin porte sur l'acquisition puis la revente d'un bien précis avec une marge déterminée, ce qui correspond à la logique de Murabaha.",
                        'choices' => [
                            ['choice_text' => "Murabaha", 'is_correct' => true],
                            ['choice_text' => "Mudarabah", 'is_correct' => false],
                            ['choice_text' => "Takaful", 'is_correct' => false],
                            ['choice_text' => "Musharakah", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Une entreprise veut seulement utiliser un équipement pendant quatre ans et ne souhaite pas l'acheter immédiatement. Quel contrat répond le plus naturellement à ce besoin ?",
                        'explanation' => "Le besoin porte sur l'utilisation d'un équipement pendant une période définie. Ijarah correspond à cette logique de location de l'usage.",
                        'choices' => [
                            ['choice_text' => "Ijarah", 'is_correct' => true],
                            ['choice_text' => "Murabaha", 'is_correct' => false],
                            ['choice_text' => "Musharakah", 'is_correct' => false],
                            ['choice_text' => "Sukuk", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Un entrepreneur a une idée rentable et une capacité de gestion, mais peu de capital. Un investisseur accepte de fournir le capital et de partager le profit selon un ratio convenu. Quel contrat est le plus approprié ?",
                        'explanation' => "La situation correspond à la logique de Mudarabah, où le capital est fourni par un partenaire et la gestion par l'autre, avec partage du profit selon le contrat.",
                        'choices' => [
                            ['choice_text' => "Mudarabah", 'is_correct' => true],
                            ['choice_text' => "Ijarah", 'is_correct' => false],
                            ['choice_text' => "Takaful", 'is_correct' => false],
                            ['choice_text' => "Murabaha", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Deux investisseurs veulent chacun apporter du capital à une résidence destinée à la location et partager les résultats. Quelle structure correspond le mieux à leur objectif de partenariat ?",
                        'explanation' => "Plusieurs investisseurs apportant du capital à un même projet correspondent à une logique de Musharakah, sous réserve des conditions et de la structure choisies.",
                        'choices' => [
                            ['choice_text' => "Musharakah", 'is_correct' => true],
                            ['choice_text' => "Mudarabah uniquement", 'is_correct' => false],
                            ['choice_text' => "Ijarah uniquement", 'is_correct' => false],
                            ['choice_text' => "Takaful", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Une association souhaite protéger ses membres contre certains dommages en mettant en commun leurs contributions. Quel concept correspond le mieux ?",
                        'explanation' => "La mutualisation de contributions pour aider les participants en cas d'événement couvert correspond au principe général du Takaful.",
                        'choices' => [
                            ['choice_text' => "Takaful", 'is_correct' => true],
                            ['choice_text' => "Sukuk", 'is_correct' => false],
                            ['choice_text' => "Murabaha", 'is_correct' => false],
                            ['choice_text' => "Ijarah", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Un projet immobilier souhaite lever des fonds en émettant des certificats donnant des droits sur une structure d'actifs générant des revenus. Quelle famille d'instrument est la plus pertinente ?",
                        'explanation' => "Les Sukuk peuvent être structurés autour d'actifs ou de droits liés à un projet immobilier et distribuer des revenus provenant du sous-jacent selon le contrat utilisé.",
                        'choices' => [
                            ['choice_text' => "Sukuk", 'is_correct' => true],
                            ['choice_text' => "Takaful", 'is_correct' => false],
                            ['choice_text' => "Mudarabah uniquement", 'is_correct' => false],
                            ['choice_text' => "Ijarah uniquement", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Une transaction décrit un bien de manière très vague, alors que les parties ne connaissent pas clairement le prix ni les caractéristiques essentielles. Quel problème doit être examiné en priorité ?",
                        'explanation' => "Le manque de précision sur l'objet et les conditions essentielles peut créer une incertitude excessive, ce qui renvoie au principe de gharar.",
                        'choices' => [
                            ['choice_text' => "Le risque de gharar", 'is_correct' => true],
                            ['choice_text' => "Le risque de dividende", 'is_correct' => false],
                            ['choice_text' => "Le principe de Ijarah", 'is_correct' => false],
                            ['choice_text' => "Le principe de Sukuk", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Une entreprise propose un gain qui dépend uniquement du résultat d'un jeu aléatoire sans activité économique sous-jacente identifiable. Quel principe est particulièrement pertinent à examiner ?",
                        'explanation' => "Une opération dont le gain dépend principalement d'un jeu ou d'un hasard assimilable au jeu peut relever du maysir, qui fait partie des éléments interdits en finance islamique.",
                        'choices' => [
                            ['choice_text' => "Le principe de maysir", 'is_correct' => true],
                            ['choice_text' => "Le principe de Murabaha", 'is_correct' => false],
                            ['choice_text' => "Le principe de Takaful", 'is_correct' => false],
                            ['choice_text' => "Le principe de Ijarah", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Un produit promet un rendement fixe simplement parce qu'un investisseur remet de l'argent à une autre partie, sans vente, location ou partenariat prévu. Quel sujet de conformité faut-il examiner en premier ?",
                        'explanation' => "Une rémunération fixe sur un prêt peut soulever une question de riba. Il faut donc examiner la nature juridique et économique de l'opération avant de conclure à sa conformité.",
                        'choices' => [
                            ['choice_text' => "La question du riba et la structure réelle du financement", 'is_correct' => true],
                            ['choice_text' => "La couleur du contrat", 'is_correct' => false],
                            ['choice_text' => "La taille du logo de l'établissement", 'is_correct' => false],
                            ['choice_text' => "Le nombre de salariés de l'entreprise", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Une banque veut analyser un financement islamique avant de le commercialiser. Quelle combinaison d'informations est la plus utile ?",
                        'explanation' => "Une analyse sérieuse doit examiner l'activité financée, le contrat utilisé, les actifs ou services concernés, les flux, les risques et les conditions de conformité à la Sharia.",
                        'choices' => [
                            ['choice_text' => "Activité financée, contrat, actifs ou services, flux, risques et conditions de conformité", 'is_correct' => true],
                            ['choice_text' => "Uniquement le prix du produit", 'is_correct' => false],
                            ['choice_text' => "Uniquement le rendement espéré", 'is_correct' => false],
                            ['choice_text' => "Uniquement la durée du financement", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Un investisseur compare deux opportunités islamiques. La première offre un profit potentiel mais le contrat et les actifs sont mal décrits. La seconde décrit clairement les actifs, les flux et les obligations des parties. Quel point est particulièrement pertinent au niveau débutant ?",
                        'explanation' => "La clarté du contrat et des actifs permet de mieux comprendre les droits et obligations et de limiter l'incertitude excessive. La conformité ne se réduit pas au rendement annoncé.",
                        'choices' => [
                            ['choice_text' => "La qualité et la clarté de la structure contractuelle doivent être examinées avant le rendement annoncé", 'is_correct' => true],
                            ['choice_text' => "Le rendement le plus élevé est toujours le meilleur choix", 'is_correct' => false],
                            ['choice_text' => "Les actifs sous-jacents ne sont jamais importants", 'is_correct' => false],
                            ['choice_text' => "La conformité est garantie par toute publicité portant le mot « islamique »", 'is_correct' => false],
                        ],
                    ],
                    [
                        'question' => "Quel réflexe général est le plus utile lorsqu'un produit financier est présenté comme conforme à la Sharia ?",
                        'explanation' => "L'étiquette seule ne suffit pas. Il faut comprendre l'activité, les contrats, les actifs ou services, les flux et les conditions de conformité appliquées au produit.",
                        'choices' => [
                            ['choice_text' => "Examiner la structure réelle du produit et les conditions de conformité à la Sharia", 'is_correct' => true],
                            ['choice_text' => "Se fier uniquement au nom du produit", 'is_correct' => false],
                            ['choice_text' => "Supposer que tout produit rentable est conforme", 'is_correct' => false],
                            ['choice_text' => "Ignorer les documents contractuels", 'is_correct' => false],
                        ],
                    ],
                ],
            ],
        ];

        foreach ($quizzes as $quizData) {
            $quiz = Quiz::updateOrCreate(
                [
                    'subject_id' => $subject->id,
                    'title' => $quizData['title'],
                ],
                [
                    'owner_id' => null,
                    'description' => $quizData['description'],
                    'duration' => $quizData['duration'],
                    'passing_score' => $quizData['passing_score'],
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
