<?php

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

        $quizzes = [
            [
                'title' => "Les bases du treasury management",
                'description' => "Comprendre le rôle de la trésorerie, ses objectifs et les décisions quotidiennes qui protègent la liquidité de l'entreprise.",
                'duration' => 20,
                'passing_score' => 55,
                'questions' => [
                    [
                        'question' => "Une entreprise affiche un bénéfice correct, mais son solde bancaire devient très faible à la fin du mois. Quelle situation peut expliquer ce décalage ?",
                        'choices' => [
                            ['choice_text' => "Les bénéfices comptables ne correspondent pas forcément aux encaissements disponibles", 'is_correct' => true],
                            ['choice_text' => "Une entreprise rentable n'a jamais besoin de trésorerie", 'is_correct' => false],
                            ['choice_text' => "Le résultat comptable est toujours égal au solde bancaire", 'is_correct' => false],
                            ['choice_text' => "Le bénéfice est nécessairement encaissé le jour de la vente", 'is_correct' => false],
                        ],
                        'explanation' => "Le résultat comptable intègre des éléments qui ne donnent pas immédiatement lieu à un encaissement. Les délais de paiement, les investissements et le remboursement de dettes peuvent donc réduire la trésorerie malgré un bénéfice positif."
                    ],
                    [
                        'question' => "Le directeur financier demande au trésorier de préparer un suivi quotidien des entrées et sorties de cash. Quel est l'objectif principal ?",
                        'choices' => [
                            ['choice_text' => "Anticiper les besoins et éviter une tension de liquidité", 'is_correct' => true],
                            ['choice_text' => "Remplacer les états financiers annuels", 'is_correct' => false],
                            ['choice_text' => "Calculer uniquement la marge commerciale", 'is_correct' => false],
                            ['choice_text' => "Supprimer toutes les relations avec les banques", 'is_correct' => false],
                        ],
                        'explanation' => "Le suivi de cash sert d'abord à savoir ce qui doit entrer et sortir, quand, et pour quel montant. Cette visibilité permet d'agir avant qu'un manque de liquidité ne devienne urgent."
                    ],
                    [
                        'question' => "Une société conserve 500 000 € sur un compte courant alors qu'elle n'a presque aucun décaissement prévu pendant trois semaines. Quel risque apparaît si elle garde durablement tout ce cash sans l'utiliser ?",
                        'choices' => [
                            ['choice_text' => "Un coût d'opportunité lié à une trésorerie excédentaire", 'is_correct' => true],
                            ['choice_text' => "Une disparition automatique des liquidités", 'is_correct' => false],
                            ['choice_text' => "Une hausse mécanique du chiffre d'affaires", 'is_correct' => false],
                            ['choice_text' => "Une réduction obligatoire de la dette bancaire", 'is_correct' => false],
                        ],
                        'explanation' => "Une trésorerie trop abondante et inactive peut avoir un coût d'opportunité : l'entreprise pourrait placer une partie des fonds à court terme ou réduire une dette coûteuse, sous réserve de conserver un coussin de sécurité suffisant."
                    ],
                    [
                        'question' => "Dans une entreprise, qui utilise généralement le plus directement les informations du cash forecast pour décider d'un besoin de financement à court terme ?",
                        'choices' => [
                            ['choice_text' => "La fonction trésorerie ou le responsable financier", 'is_correct' => true],
                            ['choice_text' => "Le service marketing uniquement", 'is_correct' => false],
                            ['choice_text' => "Le service juridique uniquement", 'is_correct' => false],
                            ['choice_text' => "Le service des ressources humaines uniquement", 'is_correct' => false],
                        ],
                        'explanation' => "La trésorerie exploite le cash forecast pour comparer les encaissements attendus aux décaissements et déterminer s'il faut mobiliser une ligne de crédit, décaler certaines sorties ou placer un excédent."
                    ],
                    [
                        'question' => "Une filiale prévoit un décaissement exceptionnel de 300 000 € vendredi. Quel document est particulièrement utile pour vérifier si le paiement peut être absorbé sans difficulté ?",
                        'choices' => [
                            ['choice_text' => "La prévision de trésorerie à court terme", 'is_correct' => true],
                            ['choice_text' => "Le compte de résultat de l'année précédente uniquement", 'is_correct' => false],
                            ['choice_text' => "Le catalogue commercial", 'is_correct' => false],
                            ['choice_text' => "L'organigramme de l'entreprise", 'is_correct' => false],
                        ],
                        'explanation' => "Pour une sortie précise à une date proche, la prévision de trésorerie à court terme est l'outil le plus pertinent. Elle permet de voir le solde disponible avant et après le paiement."
                    ],
                    [
                        'question' => "Pourquoi une entreprise cherche-t-elle généralement à éviter un découvert bancaire non planifié ?",
                        'choices' => [
                            ['choice_text' => "Parce qu'il peut être plus coûteux et signaler une mauvaise anticipation de liquidité", 'is_correct' => true],
                            ['choice_text' => "Parce qu'un découvert augmente toujours les ventes", 'is_correct' => false],
                            ['choice_text' => "Parce qu'un découvert annule les factures clients", 'is_correct' => false],
                            ['choice_text' => "Parce qu'un découvert réduit automatiquement les impôts", 'is_correct' => false],
                        ],
                        'explanation' => "Un recours imprévu au découvert peut entraîner des coûts financiers et surtout révéler que la liquidité n'a pas été correctement anticipée. La trésorerie cherche à prévoir ces besoins plutôt qu'à les subir."
                    ],
                    [
                        'question' => "Le terme « liquidité » décrit le mieux :",
                        'choices' => [
                            ['choice_text' => "La capacité à disposer rapidement de moyens de paiement pour honorer les échéances", 'is_correct' => true],
                            ['choice_text' => "La capacité à augmenter les prix de vente", 'is_correct' => false],
                            ['choice_text' => "La capacité à produire plus sans investissement", 'is_correct' => false],
                            ['choice_text' => "La capacité à réduire le nombre de clients", 'is_correct' => false],
                        ],
                        'explanation' => "La liquidité concerne la capacité à faire face aux paiements à leur échéance. Une entreprise peut être rentable à long terme tout en connaissant une tension de liquidité à court terme."
                    ],
                    [
                        'question' => "Une société souhaite garder une réserve minimale de cash en permanence. Quel est l'intérêt principal de cette réserve ?",
                        'choices' => [
                            ['choice_text' => "Absorber des imprévus et réduire le risque de rupture de liquidité", 'is_correct' => true],
                            ['choice_text' => "Garantir une hausse automatique du ROE", 'is_correct' => false],
                            ['choice_text' => "Éliminer tous les risques commerciaux", 'is_correct' => false],
                            ['choice_text' => "Éviter de comptabiliser les charges", 'is_correct' => false],
                        ],
                        'explanation' => "Le cash buffer joue un rôle de sécurité. Il permet d'absorber un encaissement retardé, une dépense imprévue ou une variation d'activité sans devoir chercher immédiatement un financement externe."
                    ],
                    [
                        'question' => "Une trésorerie d'entreprise surveille principalement le solde bancaire, les encaissements attendus et les décaissements à venir. Cela correspond à une logique de :",
                        'choices' => [
                            ['choice_text' => "gestion de liquidité", 'is_correct' => true],
                            ['choice_text' => "segmentation marketing", 'is_correct' => false],
                            ['choice_text' => "gestion de production industrielle uniquement", 'is_correct' => false],
                            ['choice_text' => "valorisation boursière uniquement", 'is_correct' => false],
                        ],
                        'explanation' => "La fonction centrale du treasury management est de maîtriser les flux de trésorerie et la liquidité. Les autres fonctions financières peuvent utiliser ces informations, mais la gestion quotidienne du cash est au cœur de la trésorerie."
                    ],
                    [
                        'question' => "Une entreprise prévoit 900 000 € d'encaissements et 780 000 € de décaissements sur la semaine, sans autre variation. Quel est le flux net de trésorerie de la semaine ?",
                        'choices' => [
                            ['choice_text' => "+120 000 €", 'is_correct' => true],
                            ['choice_text' => "+180 000 €", 'is_correct' => false],
                            ['choice_text' => "-120 000 €", 'is_correct' => false],
                            ['choice_text' => "-180 000 €", 'is_correct' => false],
                        ],
                        'explanation' => "Le flux net est égal aux encaissements moins les décaissements : 900 000 € - 780 000 € = +120 000 €. La trésorerie augmente donc de 120 000 € sur la période, toutes choses égales par ailleurs."
                    ],
                ],
            ],
            [
                'title' => "Prévision et pilotage du cash",
                'description' => "S'entraîner à lire un cash forecast, repérer les écarts et prendre des décisions simples de trésorerie.",
                'duration' => 22,
                'passing_score' => 58,
                'questions' => [
                    [
                        'question' => "Un cash forecast annonce un solde de 80 000 € lundi matin, puis -40 000 € vendredi soir. Quelle conclusion est la plus pertinente ?",
                        'choices' => [
                            ['choice_text' => "Un besoin de financement de court terme doit être anticipé si aucun encaissement supplémentaire n'est prévu", 'is_correct' => true],
                            ['choice_text' => "L'entreprise dispose de 40 000 € de trésorerie excédentaire", 'is_correct' => false],
                            ['choice_text' => "Le chiffre d'affaires va automatiquement augmenter", 'is_correct' => false],
                            ['choice_text' => "Le cash forecast ne peut jamais devenir négatif", 'is_correct' => false],
                        ],
                        'explanation' => "Le solde prévu devient négatif. Si aucun autre flux n'est attendu, la trésorerie doit préparer une solution : utiliser une ligne de crédit, accélérer certains encaissements ou décaler un décaissement lorsque cela est possible."
                    ],
                    [
                        'question' => "Pourquoi le trésorier compare-t-il régulièrement les prévisions de cash aux flux réellement observés ?",
                        'choices' => [
                            ['choice_text' => "Pour comprendre les écarts et améliorer les prévisions futures", 'is_correct' => true],
                            ['choice_text' => "Pour transformer chaque écart en profit", 'is_correct' => false],
                            ['choice_text' => "Pour supprimer les créances clients", 'is_correct' => false],
                            ['choice_text' => "Pour éviter tout besoin de budget", 'is_correct' => false],
                        ],
                        'explanation' => "Le rapprochement prévisionnel/réel permet d'identifier les encaissements en retard, les paiements décalés ou les hypothèses trop optimistes. Cela rend les prochains forecasts plus fiables."
                    ],
                    [
                        'question' => "Une entreprise reçoit régulièrement les paiements de certains gros clients dix jours plus tard que prévu. Que faudrait-il faire en priorité dans le cash forecast ?",
                        'choices' => [
                            ['choice_text' => "Recalibrer les dates d'encaissement attendues", 'is_correct' => true],
                            ['choice_text' => "Supprimer les clients du forecast", 'is_correct' => false],
                            ['choice_text' => "Considérer les paiements comme immédiats malgré l'historique", 'is_correct' => false],
                            ['choice_text' => "Augmenter arbitrairement le solde bancaire prévu", 'is_correct' => false],
                        ],
                        'explanation' => "Une prévision utile doit refléter le comportement réel des flux. Si les clients paient systématiquement plus tard, les dates prévisionnelles doivent être décalées pour éviter de surestimer la liquidité disponible."
                    ],
                    [
                        'question' => "Le budget de trésorerie prévoit 250 000 € d'encaissements clients en juin. En pratique, seuls 220 000 € arrivent et le reste est reporté à juillet. De combien juin est-il inférieur à la prévision sur ce flux ?",
                        'choices' => [
                            ['choice_text' => "30 000 €", 'is_correct' => true],
                            ['choice_text' => "20 000 €", 'is_correct' => false],
                            ['choice_text' => "40 000 €", 'is_correct' => false],
                            ['choice_text' => "470 000 €", 'is_correct' => false],
                        ],
                        'explanation' => "L'écart est de 250 000 € - 220 000 € = 30 000 €. Il s'agit d'un encaissement inférieur au montant prévu pour juin, même si une partie arrive ensuite en juillet."
                    ],
                    [
                        'question' => "Dans un cash forecast à 13 semaines, pourquoi séparer les flux certains des flux plus incertains ?",
                        'choices' => [
                            ['choice_text' => "Pour mieux apprécier le risque sur le solde de trésorerie prévu", 'is_correct' => true],
                            ['choice_text' => "Pour rendre tous les flux égaux", 'is_correct' => false],
                            ['choice_text' => "Pour supprimer les dépenses variables", 'is_correct' => false],
                            ['choice_text' => "Pour calculer directement l'EBITDA", 'is_correct' => false],
                        ],
                        'explanation' => "Deux forecasts avec le même montant total ne présentent pas le même risque si l'un repose sur des flux très sécurisés et l'autre sur des encaissements hypothétiques. Cette distinction aide à construire des scénarios de liquidité."
                    ],
                    [
                        'question' => "Le cash forecast d'une filiale montre une baisse importante du cash la semaine précédant le paiement annuel des salaires et primes. Quelle action est la plus logique ?",
                        'choices' => [
                            ['choice_text' => "Vérifier à l'avance les ressources disponibles et les lignes de financement mobilisables", 'is_correct' => true],
                            ['choice_text' => "Attendre le jour du paiement pour analyser la situation", 'is_correct' => false],
                            ['choice_text' => "Ignorer le flux car il est récurrent", 'is_correct' => false],
                            ['choice_text' => "Transformer les salaires en créances clients", 'is_correct' => false],
                        ],
                        'explanation' => "Un décaissement récurrent mais important doit être intégré suffisamment tôt dans la planification. La trésorerie peut ainsi conserver un buffer adéquat ou prévoir un financement temporaire."
                    ],
                    [
                        'question' => "Une entreprise démarre la semaine avec 150 000 € de cash. Elle encaisse 90 000 € et paie 210 000 €. Quel est le solde de fin de semaine avant tout autre mouvement ?",
                        'choices' => [
                            ['choice_text' => "30 000 €", 'is_correct' => true],
                            ['choice_text' => "330 000 €", 'is_correct' => false],
                            ['choice_text' => "150 000 €", 'is_correct' => false],
                            ['choice_text' => "-30 000 €", 'is_correct' => false],
                        ],
                        'explanation' => "Le solde final est 150 000 € + 90 000 € - 210 000 € = 30 000 €. La société termine donc la semaine avec un solde positif, mais relativement faible."
                    ],
                    [
                        'question' => "Quel événement devrait normalement conduire à une mise à jour immédiate du cash forecast ?",
                        'choices' => [
                            ['choice_text' => "Un gros fournisseur annonce une date de paiement plus rapprochée", 'is_correct' => true],
                            ['choice_text' => "Le logo de l'entreprise change", 'is_correct' => false],
                            ['choice_text' => "Un collaborateur change de bureau", 'is_correct' => false],
                            ['choice_text' => "La couleur d'une présentation interne est modifiée", 'is_correct' => false],
                        ],
                        'explanation' => "Une modification de la date d'un décaissement important change directement le profil de liquidité. Le forecast doit donc être actualisé dès qu'une information financière significative devient disponible."
                    ],
                    [
                        'question' => "Une prévision mensuelle indique un excédent de 400 000 €, mais le montant contient 250 000 € de recettes liées à une transaction encore non signée. Que faut-il retenir pour la gestion prudente du cash ?",
                        'choices' => [
                            ['choice_text' => "Le cash disponible à haute confiance est inférieur à 400 000 €", 'is_correct' => true],
                            ['choice_text' => "Les 250 000 € doivent être considérés comme encaissés", 'is_correct' => false],
                            ['choice_text' => "Une transaction non signée est toujours certaine", 'is_correct' => false],
                            ['choice_text' => "Le forecast devient inutile dès qu'un flux est incertain", 'is_correct' => false],
                        ],
                        'explanation' => "Un encaissement non sécurisé ne doit pas être traité comme du cash certain. En pratique, la trésorerie peut distinguer le scénario de base d'un scénario favorable pour mieux mesurer le risque."
                    ],
                    [
                        'question' => "Pourquoi les forecasts de trésorerie à court terme sont-ils souvent construits avec un niveau de détail élevé ?",
                        'choices' => [
                            ['choice_text' => "Parce que quelques jours de décalage peuvent modifier fortement la liquidité disponible", 'is_correct' => true],
                            ['choice_text' => "Parce qu'un forecast détaillé remplace toujours la comptabilité", 'is_correct' => false],
                            ['choice_text' => "Parce que toutes les entreprises paient chaque facture le même jour", 'is_correct' => false],
                            ['choice_text' => "Parce que le court terme est sans incertitude", 'is_correct' => false],
                        ],
                        'explanation' => "À court terme, le calendrier compte autant que le montant. Un paiement important avancé de quelques jours peut créer une tension alors que la situation mensuelle globale semble équilibrée."
                    ],
                ],
            ],
            [
                'title' => "BFR et trésorerie opérationnelle",
                'description' => "Relier créances, stocks, dettes fournisseurs et besoin en fonds de roulement aux besoins de cash.",
                'duration' => 24,
                'passing_score' => 58,
                'questions' => [
                    [
                        'question' => "Une entreprise accorde à ses clients un délai moyen de paiement de 60 jours, alors qu'elle doit payer ses fournisseurs sous 30 jours. Quelle conséquence est la plus probable ?",
                        'choices' => [
                            ['choice_text' => "Elle doit financer un décalage de trésorerie entre les sorties et les entrées", 'is_correct' => true],
                            ['choice_text' => "Elle n'a plus besoin de fonds de roulement", 'is_correct' => false],
                            ['choice_text' => "Ses fournisseurs la paient plus rapidement", 'is_correct' => false],
                            ['choice_text' => "Ses ventes deviennent automatiquement plus rentables", 'is_correct' => false],
                        ],
                        'explanation' => "Lorsque les fournisseurs sont payés avant que les clients ne règlent leurs factures, l'entreprise doit financer le décalage. C'est l'une des principales raisons pour lesquelles le BFR influence directement la trésorerie."
                    ],
                    [
                        'question' => "Un responsable de trésorerie cherche une action qui réduit rapidement le cash immobilisé dans les créances clients. Quelle piste est la plus directe ?",
                        'choices' => [
                            ['choice_text' => "Accélérer les encaissements et réduire les retards de paiement", 'is_correct' => true],
                            ['choice_text' => "Augmenter les stocks sans justification", 'is_correct' => false],
                            ['choice_text' => "Allonger tous les délais de paiement des clients", 'is_correct' => false],
                            ['choice_text' => "Acheter davantage d'immobilisations", 'is_correct' => false],
                        ],
                        'explanation' => "Les créances clients mobilisent du cash tant qu'elles ne sont pas encaissées. Une meilleure relance, une facturation plus rapide ou des modalités de paiement mieux adaptées peuvent améliorer la disponibilité de trésorerie."
                    ],
                    [
                        'question' => "Une société réduit son stock moyen de 1,2 M€ sans diminuer ses ventes ni provoquer de rupture. Quel effet financier peut-on raisonnablement attendre ?",
                        'choices' => [
                            ['choice_text' => "Une libération potentielle de 1,2 M€ de cash auparavant immobilisé dans le stock", 'is_correct' => true],
                            ['choice_text' => "Une augmentation automatique des emprunts", 'is_correct' => false],
                            ['choice_text' => "Une baisse mécanique de 1,2 M€ des ventes", 'is_correct' => false],
                            ['choice_text' => "Aucun effet possible sur la trésorerie", 'is_correct' => false],
                        ],
                        'explanation' => "Le stock représente une immobilisation de ressources. Le réduire de façon maîtrisée peut libérer du cash, à condition de ne pas dégrader le service client ou l'exploitation."
                    ],
                    [
                        'question' => "Une entreprise reçoit 75 % de ses ventes en espèces ou par carte très rapidement, mais laisse le reste à 90 jours. Quelle pratique de trésorerie aide le plus à réduire ce dernier décalage ?",
                        'choices' => [
                            ['choice_text' => "Mettre en place un suivi des créances et des relances ciblées", 'is_correct' => true],
                            ['choice_text' => "Augmenter les stocks de sécurité", 'is_correct' => false],
                            ['choice_text' => "Payer les fournisseurs plus tôt", 'is_correct' => false],
                            ['choice_text' => "Réduire le cash buffer sans analyse", 'is_correct' => false],
                        ],
                        'explanation' => "Le suivi des créances permet d'identifier les factures proches de l'échéance, les retards et les clients qui présentent un comportement particulier. Cela soutient une meilleure conversion des ventes en cash."
                    ],
                    [
                        'question' => "Le BFR est influencé notamment par :",
                        'choices' => [
                            ['choice_text' => "les stocks, les créances clients et les dettes fournisseurs", 'is_correct' => true],
                            ['choice_text' => "uniquement les immobilisations", 'is_correct' => false],
                            ['choice_text' => "uniquement le capital social", 'is_correct' => false],
                            ['choice_text' => "uniquement les intérêts sur emprunts", 'is_correct' => false],
                        ],
                        'explanation' => "Le BFR opérationnel dépend notamment des ressources immobilisées dans les stocks et créances, compensées par les dettes d'exploitation comme les dettes fournisseurs."
                    ],
                    [
                        'question' => "Une entreprise négocie avec un fournisseur fiable un délai de paiement passant de 30 à 45 jours, sans pénalité ni perte de remise importante. Quel effet peut apparaître ?",
                        'choices' => [
                            ['choice_text' => "Un besoin de cash potentiellement réduit, car le décaissement est reporté", 'is_correct' => true],
                            ['choice_text' => "Une hausse automatique du chiffre d'affaires", 'is_correct' => false],
                            ['choice_text' => "Une disparition des créances clients", 'is_correct' => false],
                            ['choice_text' => "Une hausse garantie de la marge brute", 'is_correct' => false],
                        ],
                        'explanation' => "Allonger un délai fournisseur peut réduire temporairement le besoin de financement de l'exploitation, puisque l'entreprise conserve son cash plus longtemps avant le paiement."
                    ],
                    [
                        'question' => "Les ventes progressent fortement, mais les délais d'encaissement des clients et le niveau de stock augmentent aussi. Pourquoi le trésorier doit-il rester vigilant ?",
                        'choices' => [
                            ['choice_text' => "La croissance peut consommer du cash avant de générer les encaissements correspondants", 'is_correct' => true],
                            ['choice_text' => "Une croissance forte garantit toujours un excédent de cash immédiat", 'is_correct' => false],
                            ['choice_text' => "Les stocks n'ont aucun lien avec la trésorerie", 'is_correct' => false],
                            ['choice_text' => "Les créances sont des liquidités disponibles dès la vente", 'is_correct' => false],
                        ],
                        'explanation' => "Une entreprise peut connaître une croissance rentable tout en consommant du cash : elle finance des stocks supplémentaires et attend les règlements de clients. Ce phénomène est fréquent lorsque le BFR augmente avec l'activité."
                    ],
                    [
                        'question' => "Une entreprise possède 400 000 € de créances clients et 250 000 € de dettes fournisseurs, sans tenir compte des autres postes. Le décalage net présenté par ces deux postes est de :",
                        'choices' => [
                            ['choice_text' => "150 000 €", 'is_correct' => true],
                            ['choice_text' => "650 000 €", 'is_correct' => false],
                            ['choice_text' => "250 000 €", 'is_correct' => false],
                            ['choice_text' => "400 000 €", 'is_correct' => false],
                        ],
                        'explanation' => "En ne considérant que ces deux postes, le besoin net associé est 400 000 € - 250 000 € = 150 000 €. Les autres composantes du BFR ne sont pas incluses dans ce calcul simplifié."
                    ],
                    [
                        'question' => "Quel indicateur opérationnel peut aider un trésorier à repérer une dégradation du recouvrement clients ?",
                        'choices' => [
                            ['choice_text' => "Une hausse du DSO", 'is_correct' => true],
                            ['choice_text' => "Une baisse du nombre de fournisseurs", 'is_correct' => false],
                            ['choice_text' => "Une hausse automatique du dividende", 'is_correct' => false],
                            ['choice_text' => "Une baisse du capital social", 'is_correct' => false],
                        ],
                        'explanation' => "Le DSO (Days Sales Outstanding) mesure le nombre moyen de jours nécessaires pour encaisser les créances clients. Sa hausse peut signaler un recouvrement plus lent et une consommation accrue de cash."
                    ],
                    [
                        'question' => "Un directeur commercial veut augmenter les délais accordés aux clients pour gagner des parts de marché. Pourquoi le trésorier doit-il être associé à la décision ?",
                        'choices' => [
                            ['choice_text' => "Parce que des délais plus longs peuvent augmenter le cash immobilisé dans les créances", 'is_correct' => true],
                            ['choice_text' => "Parce que le trésorier fixe toujours les prix de vente", 'is_correct' => false],
                            ['choice_text' => "Parce que tout crédit client réduit immédiatement le chiffre d'affaires", 'is_correct' => false],
                            ['choice_text' => "Parce qu'un délai commercial n'a aucun lien avec la liquidité", 'is_correct' => false],
                        ],
                        'explanation' => "Accorder plus de temps aux clients peut soutenir les ventes, mais cela retarde aussi les encaissements. La décision commerciale a donc une conséquence directe sur le besoin de financement du cycle d'exploitation."
                    ],
                ],
            ],
            [
                'title' => "Gestion de la liquidité et cash buffer",
                'description' => "Évaluer les besoins de liquidité, les réserves de sécurité et les réponses à une tension de cash.",
                'duration' => 21,
                'passing_score' => 56,
                'questions' => [
                    [
                        'question' => "Une entreprise estime que son cash minimum de sécurité doit rester à 100 000 €. Son forecast indique 140 000 € avant un paiement de 70 000 €. Que montre ce scénario ?",
                        'choices' => [
                            ['choice_text' => "Le paiement ferait passer le cash sous le niveau de sécurité de 100 000 €", 'is_correct' => true],
                            ['choice_text' => "Le paiement laisserait 210 000 € disponibles", 'is_correct' => false],
                            ['choice_text' => "Le niveau de sécurité n'est pas concerné", 'is_correct' => false],
                            ['choice_text' => "Le paiement augmenterait le cash", 'is_correct' => false],
                        ],
                        'explanation' => "Après le paiement, le solde serait de 140 000 € - 70 000 € = 70 000 €, soit 30 000 € sous le minimum de sécurité fixé à 100 000 €. Une action de trésorerie doit donc être envisagée."
                    ],
                    [
                        'question' => "Un cash buffer trop élevé peut avoir quelle conséquence économique ?",
                        'choices' => [
                            ['choice_text' => "Une trésorerie sous-utilisée qui pourrait être placée ou affectée à une dette coûteuse", 'is_correct' => true],
                            ['choice_text' => "Une disparition du risque de crédit", 'is_correct' => false],
                            ['choice_text' => "Une augmentation automatique du résultat opérationnel", 'is_correct' => false],
                            ['choice_text' => "Une réduction certaine des ventes", 'is_correct' => false],
                        ],
                        'explanation' => "Conserver de la liquidité protège l'entreprise, mais trop de cash inactif peut avoir un coût d'opportunité. Le bon niveau cherche un équilibre entre sécurité et efficacité financière."
                    ],
                    [
                        'question' => "Un trésorier dispose d'une ligne de crédit confirmée mais non tirée. Quel avantage offre-t-elle par rapport à une recherche de financement au dernier moment ?",
                        'choices' => [
                            ['choice_text' => "Elle constitue une source de liquidité déjà organisée et mobilisable selon les conditions prévues", 'is_correct' => true],
                            ['choice_text' => "Elle garantit des ventes supplémentaires", 'is_correct' => false],
                            ['choice_text' => "Elle annule toutes les charges financières", 'is_correct' => false],
                            ['choice_text' => "Elle transforme les créances en capitaux propres", 'is_correct' => false],
                        ],
                        'explanation' => "Une ligne confirmée apporte une sécurité supplémentaire car la documentation et les conditions ont déjà été négociées. Elle peut être mobilisée lorsque le besoin de cash apparaît, sous réserve des termes du contrat."
                    ],
                    [
                        'question' => "Une entreprise fait face à un retard temporaire d'encaissement de 200 000 €, alors qu'un paiement fournisseur de même montant arrive demain. Quel outil de trésorerie peut servir de pont à court terme ?",
                        'choices' => [
                            ['choice_text' => "Une facilité de caisse ou une ligne de crédit court terme", 'is_correct' => true],
                            ['choice_text' => "Une augmentation du stock", 'is_correct' => false],
                            ['choice_text' => "Une émission d'actions nécessairement immédiate", 'is_correct' => false],
                            ['choice_text' => "Une réduction du chiffre d'affaires", 'is_correct' => false],
                        ],
                        'explanation' => "Lorsque le décalage est temporaire et précisément identifié, un financement court terme peut servir de pont jusqu'à l'encaissement. Le choix dépend ensuite du coût, des garanties et des conditions disponibles."
                    ],
                    [
                        'question' => "Une entreprise réalise un stress test de liquidité en supposant que 20 % des encaissements clients du mois suivant sont retardés. Quel est le but de cet exercice ?",
                        'choices' => [
                            ['choice_text' => "Mesurer si la trésorerie résiste à un scénario défavorable plausible", 'is_correct' => true],
                            ['choice_text' => "Prouver que le scénario réel sera exactement de 20 %", 'is_correct' => false],
                            ['choice_text' => "Éliminer le besoin de cash forecast", 'is_correct' => false],
                            ['choice_text' => "Calculer le taux de croissance annuel", 'is_correct' => false],
                        ],
                        'explanation' => "Le stress test ne prédit pas l'avenir avec certitude. Il cherche à mesurer la robustesse de la liquidité face à un choc hypothétique et à identifier les solutions de secours nécessaires."
                    ],
                    [
                        'question' => "Le solde disponible est de 500 000 € et le minimum de sécurité est fixé à 320 000 €. Quelle marge de liquidité excédentaire existe avant le seuil de sécurité ?",
                        'choices' => [
                            ['choice_text' => "180 000 €", 'is_correct' => true],
                            ['choice_text' => "820 000 €", 'is_correct' => false],
                            ['choice_text' => "320 000 €", 'is_correct' => false],
                            ['choice_text' => "140 000 €", 'is_correct' => false],
                        ],
                        'explanation' => "La marge au-dessus du seuil est 500 000 € - 320 000 € = 180 000 €. C'est la quantité de cash que l'entreprise peut théoriquement consommer avant d'atteindre son niveau de sécurité."
                    ],
                    [
                        'question' => "Pourquoi un trésorier peut-il préférer plusieurs sources de liquidité plutôt qu'une seule banque ?",
                        'choices' => [
                            ['choice_text' => "Pour réduire une dépendance excessive à un seul établissement", 'is_correct' => true],
                            ['choice_text' => "Pour garantir zéro coût bancaire", 'is_correct' => false],
                            ['choice_text' => "Pour éviter toute documentation financière", 'is_correct' => false],
                            ['choice_text' => "Pour empêcher l'entreprise de négocier ses conditions", 'is_correct' => false],
                        ],
                        'explanation' => "Diversifier les sources de liquidité peut limiter le risque de concentration et offrir davantage de flexibilité. Cela ne supprime cependant pas les coûts ni les risques de financement."
                    ],
                    [
                        'question' => "Une entreprise dispose de 90 000 € de cash et de 160 000 € de sorties prévues avant le prochain encaissement certain. Quel montant de financement minimal faut-il trouver pour éviter un solde négatif, en supposant aucun autre flux ?",
                        'choices' => [
                            ['choice_text' => "70 000 €", 'is_correct' => true],
                            ['choice_text' => "90 000 €", 'is_correct' => false],
                            ['choice_text' => "160 000 €", 'is_correct' => false],
                            ['choice_text' => "250 000 €", 'is_correct' => false],
                        ],
                        'explanation' => "Le besoin minimal est 160 000 € - 90 000 € = 70 000 €. Ce montant permet juste d'éviter un solde négatif, sans ajouter de marge de sécurité supplémentaire."
                    ],
                    [
                        'question' => "Une filiale connaît un surplus de cash pendant 48 heures avant un important décaissement déjà planifié. Quelle décision est généralement cohérente avec une bonne gestion de trésorerie ?",
                        'choices' => [
                            ['choice_text' => "Conserver la liquidité disponible tout en évaluant un placement très court terme approprié", 'is_correct' => true],
                            ['choice_text' => "Investir automatiquement le surplus en actions volatiles", 'is_correct' => false],
                            ['choice_text' => "Prêter le cash sans analyse de contrepartie", 'is_correct' => false],
                            ['choice_text' => "Ignorer le décaissement futur", 'is_correct' => false],
                        ],
                        'explanation' => "Un besoin de cash certain à très court terme limite la prise de risque. Si un placement est utilisé, il doit rester très liquide et compatible avec l'échéance du décaissement."
                    ],
                    [
                        'question' => "Quel signal est le plus préoccupant pour la liquidité à court terme ?",
                        'choices' => [
                            ['choice_text' => "Des encaissements devenant plus incertains alors que les décaissements restent fermes", 'is_correct' => true],
                            ['choice_text' => "Une hausse du nombre de factures payées à temps", 'is_correct' => false],
                            ['choice_text' => "Une baisse d'un coût non financier", 'is_correct' => false],
                            ['choice_text' => "Une réduction du temps de traitement des paiements", 'is_correct' => false],
                        ],
                        'explanation' => "Le risque de liquidité augmente lorsqu'une partie importante des entrées de cash devient incertaine alors que les sorties restent difficiles à décaler. C'est le cœur du mismatch de liquidité."
                    ],
                ],
            ],
            [
                'title' => "Financement court terme",
                'description' => "Choisir et comprendre les principaux instruments de financement à court terme utilisés par une entreprise.",
                'duration' => 25,
                'passing_score' => 60,
                'questions' => [
                    [
                        'question' => "Une entreprise connaît un besoin de cash de quinze jours lié au retard ponctuel d'un client important. Quel financement est généralement adapté à une telle durée ?",
                        'choices' => [
                            ['choice_text' => "Une facilité de caisse ou une ligne de crédit court terme", 'is_correct' => true],
                            ['choice_text' => "Une dette à quinze ans", 'is_correct' => false],
                            ['choice_text' => "Une émission d'obligations à très long terme", 'is_correct' => false],
                            ['choice_text' => "Une immobilisation supplémentaire", 'is_correct' => false],
                        ],
                        'explanation' => "Pour un besoin temporaire et court, un outil de financement court terme est généralement plus cohérent qu'une dette longue. Le choix final dépend bien sûr du coût et des conditions négociées."
                    ],
                    [
                        'question' => "Une banque accorde à une entreprise une ligne de crédit de 1 million d'euros qui peut être tirée selon les besoins. Quel avantage principal présente ce mécanisme ?",
                        'choices' => [
                            ['choice_text' => "L'entreprise peut mobiliser le financement seulement lorsqu'elle en a besoin", 'is_correct' => true],
                            ['choice_text' => "L'entreprise paie toujours des intérêts sur 1 million d'euros même sans tirage", 'is_correct' => false],
                            ['choice_text' => "La ligne transforme automatiquement la dette en actions", 'is_correct' => false],
                            ['choice_text' => "La ligne supprime toutes les garanties éventuelles", 'is_correct' => false],
                        ],
                        'explanation' => "Une ligne de crédit apporte de la flexibilité : le tirage peut être adapté au besoin réel, selon les modalités du contrat. Les conditions peuvent toutefois prévoir des commissions d'engagement ou d'autres coûts."
                    ],
                    [
                        'question' => "Une entreprise hésite entre un découvert bancaire à 7 % et un placement très court qui rapporte 4 %. Que compare le trésorier ?",
                        'choices' => [
                            ['choice_text' => "Le coût du financement et le rendement du placement de la trésorerie", 'is_correct' => true],
                            ['choice_text' => "Le chiffre d'affaires et la marge brute", 'is_correct' => false],
                            ['choice_text' => "Le stock et le nombre de salariés", 'is_correct' => false],
                            ['choice_text' => "Le résultat net et la capacité de production uniquement", 'is_correct' => false],
                        ],
                        'explanation' => "Lorsque l'entreprise doit arbitrer entre conserver, placer ou emprunter du cash, elle compare le rendement des excédents et le coût des déficits. Un différentiel significatif peut influencer la décision."
                    ],
                    [
                        'question' => "Le financement d'un besoin saisonnier de trois mois peut être différent d'un financement d'une acquisition sur dix ans. Pourquoi ?",
                        'choices' => [
                            ['choice_text' => "La durée et la nature du besoin doivent correspondre à la durée du financement", 'is_correct' => true],
                            ['choice_text' => "Tous les besoins financiers utilisent nécessairement le même instrument", 'is_correct' => false],
                            ['choice_text' => "Les banques ne proposent jamais de financement court terme", 'is_correct' => false],
                            ['choice_text' => "Les acquisitions n'ont aucun impact sur la dette", 'is_correct' => false],
                        ],
                        'explanation' => "Une règle pratique consiste à adapter la maturité du financement à la durée du besoin. Un besoin saisonnier et un investissement durable n'ont pas le même profil de remboursement ni le même risque de refinancement."
                    ],
                    [
                        'question' => "Une entreprise tire 400 000 € sur une ligne de crédit au taux annuel de 6 % pendant trois mois, en supposant un calcul simple prorata temporis. Quel est l'intérêt approximatif ?",
                        'choices' => [
                            ['choice_text' => "6 000 €", 'is_correct' => true],
                            ['choice_text' => "24 000 €", 'is_correct' => false],
                            ['choice_text' => "12 000 €", 'is_correct' => false],
                            ['choice_text' => "2 000 €", 'is_correct' => false],
                        ],
                        'explanation' => "L'intérêt simple est 400 000 € × 6 % × 3/12 = 6 000 €. Le calcul suppose ici qu'il n'y a pas d'autres commissions ni capitalisation intermédiaire."
                    ],
                    [
                        'question' => "Avant de mobiliser une nouvelle dette court terme, quel élément le trésorier doit-il vérifier en priorité ?",
                        'choices' => [
                            ['choice_text' => "Le besoin réel, la durée du besoin et les conditions de remboursement", 'is_correct' => true],
                            ['choice_text' => "Uniquement le nom de la banque", 'is_correct' => false],
                            ['choice_text' => "Uniquement le montant du capital social", 'is_correct' => false],
                            ['choice_text' => "Uniquement la dernière campagne marketing", 'is_correct' => false],
                        ],
                        'explanation' => "La décision de financement doit partir du besoin : montant, durée, calendrier des flux et capacité de remboursement. Le coût du financement et les clauses bancaires complètent l'analyse."
                    ],
                    [
                        'question' => "Une société finance un besoin de trésorerie permanent avec des tirages très courts renouvelés chaque mois. Quel risque mérite une attention particulière ?",
                        'choices' => [
                            ['choice_text' => "Le risque de refinancement", 'is_correct' => true],
                            ['choice_text' => "Le risque de disparition des créances par définition", 'is_correct' => false],
                            ['choice_text' => "Le risque que le chiffre d'affaires devienne automatiquement nul", 'is_correct' => false],
                            ['choice_text' => "Le risque que toutes les immobilisations deviennent liquides", 'is_correct' => false],
                        ],
                        'explanation' => "Financer un besoin durable avec des échéances très courtes expose l'entreprise au risque de devoir renouveler fréquemment ses financements, éventuellement dans de moins bonnes conditions."
                    ],
                    [
                        'question' => "Une banque propose une commission de 0,5 % sur une ligne de crédit de 2 millions d'euros non tirée. Quel est le montant de la commission annuelle correspondante, si elle s'applique sur la totalité de la ligne ?",
                        'choices' => [
                            ['choice_text' => "10 000 €", 'is_correct' => true],
                            ['choice_text' => "1 000 €", 'is_correct' => false],
                            ['choice_text' => "100 000 €", 'is_correct' => false],
                            ['choice_text' => "5 000 €", 'is_correct' => false],
                        ],
                        'explanation' => "La commission est 2 000 000 € × 0,5 % = 10 000 €. Dans la pratique, le contrat peut prévoir une base différente, mais l'énoncé précise ici que la commission porte sur toute la ligne."
                    ],
                    [
                        'question' => "Une entreprise reçoit une proposition de financement moins chère mais assortie d'une clause qui exige un niveau minimum de cash permanent. Quel point doit être étudié ?",
                        'choices' => [
                            ['choice_text' => "L'effet de la clause sur la flexibilité réelle de la trésorerie", 'is_correct' => true],
                            ['choice_text' => "Uniquement le taux facial", 'is_correct' => false],
                            ['choice_text' => "Uniquement le nom du produit", 'is_correct' => false],
                            ['choice_text' => "La clause n'a aucun impact possible", 'is_correct' => false],
                        ],
                        'explanation' => "Le coût nominal ne suffit pas. Une clause restrictive peut limiter l'usage des liquidités ou imposer certaines conditions. La trésorerie doit donc comparer coût, souplesse et contraintes."
                    ],
                    [
                        'question' => "Une entreprise veut éviter d'emprunter davantage tout en faisant face à un pic de décaissements. Quelle action opérationnelle peut compléter le financement ?",
                        'choices' => [
                            ['choice_text' => "Accélérer certains encaissements et négocier lorsque possible le calendrier de certains paiements", 'is_correct' => true],
                            ['choice_text' => "Augmenter les dépenses non nécessaires", 'is_correct' => false],
                            ['choice_text' => "Réduire volontairement les factures clients encaissées", 'is_correct' => false],
                            ['choice_text' => "Acheter plus de stocks sans besoin", 'is_correct' => false],
                        ],
                        'explanation' => "Le financement n'est qu'un levier parmi d'autres. Une meilleure gestion des dates d'encaissement et de décaissement peut réduire ou repousser le besoin de dette court terme."
                    ],
                ],
            ],
            [
                'title' => "Paiements et relations bancaires",
                'description' => "Maîtriser les opérations bancaires courantes, la sécurité des paiements et le pilotage des comptes.",
                'duration' => 23,
                'passing_score' => 57,
                'questions' => [
                    [
                        'question' => "Une entreprise possède six comptes bancaires mais laisse presque tout son cash sur un seul compte. Quel risque organisationnel peut apparaître ?",
                        'choices' => [
                            ['choice_text' => "Une concentration de liquidité et une visibilité moins équilibrée entre les comptes", 'is_correct' => true],
                            ['choice_text' => "Une disparition du risque de paiement", 'is_correct' => false],
                            ['choice_text' => "Une baisse automatique des coûts bancaires", 'is_correct' => false],
                            ['choice_text' => "Une hausse automatique du rendement", 'is_correct' => false],
                        ],
                        'explanation' => "La concentration des soldes peut compliquer la gestion quotidienne et rendre certaines ressources moins accessibles pour les paiements locaux. Un treasury manager peut organiser des transferts ou une meilleure centralisation du cash."
                    ],
                    [
                        'question' => "Pourquoi les rapprochements bancaires sont-ils importants pour la trésorerie ?",
                        'choices' => [
                            ['choice_text' => "Ils permettent de vérifier que les mouvements enregistrés correspondent aux transactions bancaires réelles", 'is_correct' => true],
                            ['choice_text' => "Ils remplacent la validation des paiements", 'is_correct' => false],
                            ['choice_text' => "Ils servent uniquement à calculer les ventes", 'is_correct' => false],
                            ['choice_text' => "Ils empêchent tous les frais bancaires", 'is_correct' => false],
                        ],
                        'explanation' => "Le rapprochement identifie les écarts, opérations non comptabilisées, erreurs ou transactions inhabituelles. C'est à la fois un outil de fiabilité du cash et de contrôle."
                    ],
                    [
                        'question' => "Un salarié demande de modifier par e-mail un RIB fournisseur quelques heures avant un virement important. Quelle réaction est la plus prudente ?",
                        'choices' => [
                            ['choice_text' => "Vérifier le changement via une procédure indépendante avant tout paiement", 'is_correct' => true],
                            ['choice_text' => "Effectuer immédiatement le virement car l'e-mail semble professionnel", 'is_correct' => false],
                            ['choice_text' => "Envoyer le mot de passe bancaire au fournisseur", 'is_correct' => false],
                            ['choice_text' => "Supprimer le fournisseur du système", 'is_correct' => false],
                        ],
                        'explanation' => "Une demande urgente de changement de coordonnées bancaires présente un risque de fraude. Une vérification indépendante, par exemple auprès d'un contact connu, réduit le risque de paiement vers un compte frauduleux."
                    ],
                    [
                        'question' => "Une entreprise paie 60 % de ses fournisseurs à une seule date mensuelle alors que ses encaissements sont répartis sur tout le mois. Quel effet peut en résulter ?",
                        'choices' => [
                            ['choice_text' => "Un pic prévisible de sorties de cash autour de cette date", 'is_correct' => true],
                            ['choice_text' => "Une suppression des créances", 'is_correct' => false],
                            ['choice_text' => "Une augmentation mécanique du cash disponible le jour du paiement", 'is_correct' => false],
                            ['choice_text' => "Un risque nul de liquidité", 'is_correct' => false],
                        ],
                        'explanation' => "La concentration des décaissements crée un pic de besoin de liquidité. Le trésorier doit intégrer cette saisonnalité intra-mensuelle dans le cash forecast."
                    ],
                    [
                        'question' => "Quel est l'intérêt d'une plateforme centralisée pour visualiser plusieurs comptes bancaires ?",
                        'choices' => [
                            ['choice_text' => "Obtenir une vision plus rapide de la liquidité globale", 'is_correct' => true],
                            ['choice_text' => "Supprimer toutes les dettes", 'is_correct' => false],
                            ['choice_text' => "Éviter toutes les obligations de contrôle", 'is_correct' => false],
                            ['choice_text' => "Garantir un rendement fixe sur tous les placements", 'is_correct' => false],
                        ],
                        'explanation' => "Une vision consolidée aide le trésorier à savoir où se trouvent les liquidités et quels comptes doivent être alimentés ou vidés. Elle améliore la prise de décision et la gestion opérationnelle."
                    ],
                    [
                        'question' => "Une banque facture 0,20 € par virement et 0,50 € par opération de traitement manuel. Pourquoi la trésorerie devrait-elle suivre ces coûts ?",
                        'choices' => [
                            ['choice_text' => "Parce que les volumes de paiements peuvent rendre ces coûts significatifs à l'échelle annuelle", 'is_correct' => true],
                            ['choice_text' => "Parce que les frais bancaires n'ont jamais d'impact financier", 'is_correct' => false],
                            ['choice_text' => "Parce que les coûts bancaires déterminent directement le chiffre d'affaires", 'is_correct' => false],
                            ['choice_text' => "Parce que le tarif rend tous les paiements identiques", 'is_correct' => false],
                        ],
                        'explanation' => "Un petit coût unitaire peut devenir important lorsque le volume de transactions est élevé. Le pilotage des frais fait donc partie d'une bonne relation bancaire et d'une gestion efficace de la trésorerie."
                    ],
                    [
                        'question' => "Une entreprise exécute des paiements dans plusieurs banques. Quel contrôle contribue à réduire le risque qu'un même paiement soit traité deux fois ?",
                        'choices' => [
                            ['choice_text' => "Un contrôle des références et des lots de paiement avant validation", 'is_correct' => true],
                            ['choice_text' => "La suppression de tous les journaux de paiement", 'is_correct' => false],
                            ['choice_text' => "L'augmentation du nombre de bénéficiaires", 'is_correct' => false],
                            ['choice_text' => "L'absence de séparation des tâches", 'is_correct' => false],
                        ],
                        'explanation' => "Les contrôles de doublons, références, montants et lots permettent d'identifier une transaction répétée avant son exécution. La séparation des tâches renforce également la sécurité."
                    ],
                    [
                        'question' => "Un trésorier constate qu'un compte bancaire présente 30 000 € de moins que le montant attendu, alors qu'une commission bancaire inhabituelle apparaît. Quelle première étape est raisonnable ?",
                        'choices' => [
                            ['choice_text' => "Identifier et vérifier la nature de la commission avant de conclure à une erreur", 'is_correct' => true],
                            ['choice_text' => "Ajouter 30 000 € artificiellement dans le système", 'is_correct' => false],
                            ['choice_text' => "Ignorer l'écart s'il est inférieur à un million", 'is_correct' => false],
                            ['choice_text' => "Fermer immédiatement tous les comptes", 'is_correct' => false],
                        ],
                        'explanation' => "Le rapprochement sert justement à expliquer un écart. Une commission, un prélèvement ou une opération en transit peuvent en être la cause. Il faut d'abord identifier le mouvement réel et sa justification."
                    ],
                    [
                        'question' => "Une société centralise les paiements mais laisse chaque filiale gérer ses placements séparément. Quel problème peut surgir ?",
                        'choices' => [
                            ['choice_text' => "Des excédents inutilisés dans certaines filiales alors qu'une autre a besoin de financement", 'is_correct' => true],
                            ['choice_text' => "Une suppression automatique de toute liquidité", 'is_correct' => false],
                            ['choice_text' => "Une hausse garantie des intérêts reçus", 'is_correct' => false],
                            ['choice_text' => "Une baisse obligatoire des ventes du groupe", 'is_correct' => false],
                        ],
                        'explanation' => "Une gestion dispersée peut conduire à la coexistence d'un surplus de cash dans une entité et d'un besoin financé à l'extérieur dans une autre. Le cash pooling ou une coordination centrale peut réduire cette inefficacité, selon le cadre du groupe."
                    ],
                    [
                        'question' => "Lorsqu'une banque et une entreprise négocient une convention de cash management, quel élément est particulièrement pertinent pour le trésorier ?",
                        'choices' => [
                            ['choice_text' => "Les tarifs, les services, les délais d'exécution et les outils de reporting", 'is_correct' => true],
                            ['choice_text' => "Uniquement la décoration des agences", 'is_correct' => false],
                            ['choice_text' => "Uniquement le nombre de salariés de la banque", 'is_correct' => false],
                            ['choice_text' => "Uniquement l'ancienneté du logo bancaire", 'is_correct' => false],
                        ],
                        'explanation' => "La relation bancaire doit être évaluée sur les conditions économiques et opérationnelles : prix, qualité de service, visibilité sur les comptes, systèmes de paiement et support."
                    ],
                ],
            ],
            [
                'title' => "Placements de trésorerie à court terme",
                'description' => "Choisir des solutions prudentes pour les excédents de cash tout en respectant les besoins de liquidité.",
                'duration' => 20,
                'passing_score' => 55,
                'questions' => [
                    [
                        'question' => "Une entreprise sait qu'elle aura besoin de 300 000 € dans cinq jours pour payer un fournisseur. Quel critère doit dominer le choix d'un placement ?",
                        'choices' => [
                            ['choice_text' => "La liquidité et la disponibilité du principal à l'échéance", 'is_correct' => true],
                            ['choice_text' => "La possibilité de doubler le capital", 'is_correct' => false],
                            ['choice_text' => "Une maturité très longue", 'is_correct' => false],
                            ['choice_text' => "Une exposition maximale aux actions", 'is_correct' => false],
                        ],
                        'explanation' => "Le besoin de cash est certain et très proche. La priorité est donc de préserver le capital et de disposer des fonds à temps, plutôt que de rechercher un rendement élevé."
                    ],
                    [
                        'question' => "Pourquoi un placement de trésorerie n'est-il pas analysé uniquement sous l'angle du rendement ?",
                        'choices' => [
                            ['choice_text' => "Parce qu'il faut aussi considérer le risque, la liquidité et l'horizon du besoin de cash", 'is_correct' => true],
                            ['choice_text' => "Parce que le rendement ne peut jamais être calculé", 'is_correct' => false],
                            ['choice_text' => "Parce que tous les placements sont garantis", 'is_correct' => false],
                            ['choice_text' => "Parce que la liquidité n'a aucun intérêt en trésorerie", 'is_correct' => false],
                        ],
                        'explanation' => "La trésorerie a un objectif différent d'un portefeuille de long terme : préserver la disponibilité des fonds et limiter le risque sont essentiels. Le rendement doit être apprécié dans ce cadre."
                    ],
                    [
                        'question' => "Une société place 600 000 € à 3 % annuel pendant six mois, en calcul simple. Quel intérêt brut est approximativement généré ?",
                        'choices' => [
                            ['choice_text' => "9 000 €", 'is_correct' => true],
                            ['choice_text' => "18 000 €", 'is_correct' => false],
                            ['choice_text' => "6 000 €", 'is_correct' => false],
                            ['choice_text' => "1 800 €", 'is_correct' => false],
                        ],
                        'explanation' => "L'intérêt simple est 600 000 € × 3 % × 6/12 = 9 000 €. Le calcul ne tient pas compte ici d'une fiscalité ou de frais éventuels."
                    ],
                    [
                        'question' => "Une entreprise dispose d'un excédent de cash de trois mois mais pourrait avoir besoin d'une partie des fonds plus tôt en cas d'imprévu. Quelle approche est la plus prudente ?",
                        'choices' => [
                            ['choice_text' => "N'investir qu'une partie dans des instruments cohérents avec une sortie rapide", 'is_correct' => true],
                            ['choice_text' => "Bloquer tout le cash sur dix ans", 'is_correct' => false],
                            ['choice_text' => "Investir tout le cash sur un actif très volatil", 'is_correct' => false],
                            ['choice_text' => "Supprimer la réserve de sécurité", 'is_correct' => false],
                        ],
                        'explanation' => "La bonne allocation du cash dépend du besoin attendu et des imprévus possibles. Fractionner les échéances peut permettre de rechercher un certain rendement sans compromettre toute la liquidité."
                    ],
                    [
                        'question' => "Pourquoi une entreprise peut-elle accepter un rendement légèrement inférieur sur un placement si celui-ci est beaucoup plus liquide ?",
                        'choices' => [
                            ['choice_text' => "Parce que la disponibilité des fonds peut avoir plus de valeur que quelques points de rendement supplémentaires", 'is_correct' => true],
                            ['choice_text' => "Parce qu'un placement liquide rapporte toujours plus", 'is_correct' => false],
                            ['choice_text' => "Parce que le risque n'existe jamais sur les placements liquides", 'is_correct' => false],
                            ['choice_text' => "Parce que le rendement est sans importance en Finance", 'is_correct' => false],
                        ],
                        'explanation' => "Le coût d'une indisponibilité peut être élevé si l'entreprise doit emprunter en urgence. La liquidité a donc une valeur économique propre dans le treasury management."
                    ],
                    [
                        'question' => "Un placement A rapporte 2,5 % pendant quatre mois et un placement B 3,0 % sur la même durée, avec un risque et une liquidité similaires. Lequel paraît économiquement plus rémunérateur, toutes choses égales par ailleurs ?",
                        'choices' => [
                            ['choice_text' => "Le placement B", 'is_correct' => true],
                            ['choice_text' => "Le placement A", 'is_correct' => false],
                            ['choice_text' => "Les deux sont nécessairement identiques", 'is_correct' => false],
                            ['choice_text' => "Impossible de comparer deux rendements exprimés en pourcentage", 'is_correct' => false],
                        ],
                        'explanation' => "À durée, risque et liquidité comparables, un rendement supérieur est plus rémunérateur. En pratique, la comparaison doit aussi tenir compte des frais, de la fiscalité et de la convention de calcul."
                    ],
                    [
                        'question' => "Une entreprise reçoit une offre de placement avec un rendement élevé mais le retrait anticipé entraîne une pénalité importante. Que faut-il vérifier ?",
                        'choices' => [
                            ['choice_text' => "Que l'horizon du placement est compatible avec le calendrier réel des besoins de cash", 'is_correct' => true],
                            ['choice_text' => "Que la pénalité n'a aucun impact sur le coût", 'is_correct' => false],
                            ['choice_text' => "Que le trésorier n'aura jamais besoin du cash", 'is_correct' => false],
                            ['choice_text' => "Que le rendement est toujours plus important que la liquidité", 'is_correct' => false],
                        ],
                        'explanation' => "Un rendement élevé peut être trompeur si les fonds doivent être retirés avant l'échéance. Le treasury management cherche à faire correspondre la maturité du placement au besoin de liquidité."
                    ],
                    [
                        'question' => "Quel type de risque concerne principalement la possibilité qu'un émetteur de placement ne rembourse pas les fonds comme prévu ?",
                        'choices' => [
                            ['choice_text' => "Le risque de crédit ou de contrepartie", 'is_correct' => true],
                            ['choice_text' => "Le risque opérationnel uniquement", 'is_correct' => false],
                            ['choice_text' => "Le risque commercial sur le chiffre d'affaires uniquement", 'is_correct' => false],
                            ['choice_text' => "Le risque d'inventaire uniquement", 'is_correct' => false],
                        ],
                        'explanation' => "Le risque de crédit correspond ici au risque que la contrepartie n'honore pas ses obligations financières. Une politique de placement de trésorerie limite généralement les contreparties et instruments admis."
                    ],
                    [
                        'question' => "Une entreprise doit conserver 1 million d'euros disponibles dans six mois, mais estime que seuls 600 000 € seront nécessaires avec certitude. Quelle approche peut être raisonnable pour les 400 000 € restants ?",
                        'choices' => [
                            ['choice_text' => "Les placer prudemment selon plusieurs horizons, sans compromettre la capacité à faire face à un besoin imprévu", 'is_correct' => true],
                            ['choice_text' => "Les investir tous en actions sans aucune analyse", 'is_correct' => false],
                            ['choice_text' => "Les distribuer immédiatement aux associés sans considération de liquidité", 'is_correct' => false],
                            ['choice_text' => "Les immobiliser pour plusieurs années", 'is_correct' => false],
                        ],
                        'explanation' => "Le cash excédentaire peut être géré selon différents horizons. L'objectif est de rémunérer le surplus tout en conservant une marge suffisante pour les besoins moins prévisibles."
                    ],
                    [
                        'question' => "Quel indicateur est le plus directement utile pour comparer des rendements de placements de maturités différentes ?",
                        'choices' => [
                            ['choice_text' => "Un rendement annualisé ou une mesure comparable tenant compte de la durée", 'is_correct' => true],
                            ['choice_text' => "Le nombre de banques de l'entreprise", 'is_correct' => false],
                            ['choice_text' => "Le montant du capital social", 'is_correct' => false],
                            ['choice_text' => "Le nombre de factures fournisseurs", 'is_correct' => false],
                        ],
                        'explanation' => "Comparer directement des pourcentages sur des horizons différents peut être trompeur. Une mesure annualisée ou une convention homogène permet une comparaison plus cohérente, sous réserve des hypothèses utilisées."
                    ],
                ],
            ],
            [
                'title' => "Expositions de taux et de change en trésorerie",
                'description' => "Identifier les risques simples liés aux taux d'intérêt et aux devises et comprendre les premières solutions de couverture.",
                'duration' => 27,
                'passing_score' => 60,
                'questions' => [
                    [
                        'question' => "Une entreprise marocaine doit payer 100 000 USD dans deux mois. Quel risque financier apparaît si elle n'a pas encore acheté les dollars ?",
                        'choices' => [
                            ['choice_text' => "Le coût en dirhams peut augmenter si le dollar s'apprécie", 'is_correct' => true],
                            ['choice_text' => "Le fournisseur doit nécessairement réduire son prix", 'is_correct' => false],
                            ['choice_text' => "Le montant en USD devient automatiquement nul", 'is_correct' => false],
                            ['choice_text' => "Le risque de change disparaît car le paiement est futur", 'is_correct' => false],
                        ],
                        'explanation' => "L'obligation future est libellée en USD alors que les ressources peuvent être en dirhams. Si l'USD devient plus cher en MAD, le montant payé en monnaie domestique augmente."
                    ],
                    [
                        'question' => "Une entreprise emprunte à taux variable. Si le taux de référence augmente, que peut-il se passer toutes choses égales par ailleurs ?",
                        'choices' => [
                            ['choice_text' => "La charge d'intérêts peut augmenter", 'is_correct' => true],
                            ['choice_text' => "La dette disparaît", 'is_correct' => false],
                            ['choice_text' => "Les ventes deviennent automatiquement supérieures", 'is_correct' => false],
                            ['choice_text' => "Le cash augmente nécessairement", 'is_correct' => false],
                        ],
                        'explanation' => "Avec un financement à taux variable, la charge d'intérêts évolue avec le taux de référence selon les modalités contractuelles. Une hausse du taux entraîne généralement une hausse du coût de dette."
                    ],
                    [
                        'question' => "Pour se protéger contre une hausse future du coût d'un financement à taux variable, quelle logique de couverture est pertinente ?",
                        'choices' => [
                            ['choice_text' => "Fixer ou plafonner le taux au moyen d'un instrument de couverture approprié", 'is_correct' => true],
                            ['choice_text' => "Augmenter le volume des créances clients", 'is_correct' => false],
                            ['choice_text' => "Changer de fournisseur sans analyser le financement", 'is_correct' => false],
                            ['choice_text' => "Réduire les stocks uniquement", 'is_correct' => false],
                        ],
                        'explanation' => "Le risque visé est la hausse du coût du financement. Des instruments de taux peuvent permettre de fixer, plafonner ou autrement gérer cette exposition selon les besoins de l'entreprise."
                    ],
                    [
                        'question' => "Une société doit recevoir 200 000 GBP dans trois mois. Si la livre sterling se déprécie face à l'euro, que se passe-t-il pour la valeur en euros de l'encaissement ?",
                        'choices' => [
                            ['choice_text' => "La valeur en euros diminue, toutes choses égales par ailleurs", 'is_correct' => true],
                            ['choice_text' => "La valeur en euros augmente automatiquement", 'is_correct' => false],
                            ['choice_text' => "La devise reçue devient nécessairement l'euro", 'is_correct' => false],
                            ['choice_text' => "Le montant en GBP devient nul", 'is_correct' => false],
                        ],
                        'explanation' => "Une dépréciation de la GBP réduit, à montant nominal inchangé en GBP, sa contre-valeur en euros. L'entreprise porte donc un risque de change sur cet encaissement futur."
                    ],
                    [
                        'question' => "Quel est l'objectif principal d'un hedge de change pour une entreprise qui connaît déjà une future dépense en devise ?",
                        'choices' => [
                            ['choice_text' => "Réduire l'incertitude sur le coût futur de la devise", 'is_correct' => true],
                            ['choice_text' => "Garantir un profit spéculatif", 'is_correct' => false],
                            ['choice_text' => "Augmenter les ventes domestiques", 'is_correct' => false],
                            ['choice_text' => "Supprimer tous les risques opérationnels", 'is_correct' => false],
                        ],
                        'explanation' => "Une couverture vise d'abord à réduire une exposition indésirable et à rendre le coût futur plus prévisible. Elle n'a pas nécessairement pour objectif de générer un gain spéculatif."
                    ],
                    [
                        'question' => "Une entreprise paie 500 000 USD lorsque 1 EUR vaut 1,10 USD. Quelle dépense en euros faut-il environ prévoir, en supposant l'absence de frais ?",
                        'choices' => [
                            ['choice_text' => "454 545 € environ", 'is_correct' => true],
                            ['choice_text' => "550 000 €", 'is_correct' => false],
                            ['choice_text' => "500 000 €", 'is_correct' => false],
                            ['choice_text' => "1 100 000 €", 'is_correct' => false],
                        ],
                        'explanation' => "Si 1 EUR = 1,10 USD, il faut environ 500 000 / 1,10 = 454 545 EUR pour acheter 500 000 USD. Le calcul suppose ici un taux unique sans spread ni frais."
                    ],
                    [
                        'question' => "Pourquoi la trésorerie centralise-t-elle souvent les informations sur les emprunts à taux variable du groupe ?",
                        'choices' => [
                            ['choice_text' => "Pour mesurer l'exposition totale à une hausse des taux et décider d'éventuelles couvertures", 'is_correct' => true],
                            ['choice_text' => "Pour supprimer la dette sans remboursement", 'is_correct' => false],
                            ['choice_text' => "Pour empêcher les banques de facturer des intérêts", 'is_correct' => false],
                            ['choice_text' => "Pour augmenter automatiquement les fonds propres", 'is_correct' => false],
                        ],
                        'explanation' => "La vision consolidée permet de mesurer l'exposition du groupe plutôt que de regarder chaque dette isolément. Cela facilite l'analyse du risque de taux et la mise en place de politiques de couverture."
                    ],
                    [
                        'question' => "Une société a une dette à taux variable mais détient également un placement dont le rendement augmente avec les taux. Quel point le trésorier doit-il considérer ?",
                        'choices' => [
                            ['choice_text' => "L'exposition nette après prise en compte des actifs et passifs sensibles aux taux", 'is_correct' => true],
                            ['choice_text' => "Uniquement la dette, sans tenir compte du placement", 'is_correct' => false],
                            ['choice_text' => "Uniquement le chiffre d'affaires", 'is_correct' => false],
                            ['choice_text' => "Aucun rapprochement n'est possible entre actifs et passifs", 'is_correct' => false],
                        ],
                        'explanation' => "Le risque économique dépend de l'exposition nette. Une hausse des taux peut augmenter à la fois les intérêts payés sur la dette et les revenus du placement. L'effet global doit donc être analysé."
                    ],
                    [
                        'question' => "Une entreprise signe un forward de change pour acheter une devise à une date future. Quel avantage principal obtient-elle ?",
                        'choices' => [
                            ['choice_text' => "Une meilleure visibilité sur le taux auquel la transaction future sera réalisée", 'is_correct' => true],
                            ['choice_text' => "Un droit automatique de ne pas exécuter l'opération", 'is_correct' => false],
                            ['choice_text' => "Une garantie de gain supplémentaire", 'is_correct' => false],
                            ['choice_text' => "La suppression de tous les frais de transaction", 'is_correct' => false],
                        ],
                        'explanation' => "Un forward permet de fixer à l'avance un taux pour une transaction future, ce qui réduit l'incertitude de change. Contrairement à une option, il s'agit normalement d'un engagement ferme selon le contrat."
                    ],
                    [
                        'question' => "Une filiale enregistre une dépense de 1 million USD, mais sa monnaie fonctionnelle est l'euro. Quel premier réflexe de trésorerie est pertinent ?",
                        'choices' => [
                            ['choice_text' => "Quantifier le montant, la date et la sensibilité au taux de change", 'is_correct' => true],
                            ['choice_text' => "Convertir le montant en actions", 'is_correct' => false],
                            ['choice_text' => "Ignorer la date de règlement", 'is_correct' => false],
                            ['choice_text' => "Supposer que le taux restera inchangé sans analyse", 'is_correct' => false],
                        ],
                        'explanation' => "Avant de décider d'une couverture, il faut comprendre l'exposition : montant, devise, échéance et risque de variation. Cette cartographie constitue la base d'une décision de treasury."
                    ],
                ],
            ],
            [
                'title' => "Contrôles et sécurité de la trésorerie",
                'description' => "Identifier les contrôles essentiels qui protègent le cash contre les erreurs, les doublons et les fraudes.",
                'duration' => 19,
                'passing_score' => 56,
                'questions' => [
                    [
                        'question' => "Pourquoi séparer la personne qui prépare un paiement de celle qui l'approuve ?",
                        'choices' => [
                            ['choice_text' => "Pour réduire le risque d'erreur ou de fraude non détectée", 'is_correct' => true],
                            ['choice_text' => "Pour augmenter automatiquement le montant du paiement", 'is_correct' => false],
                            ['choice_text' => "Pour supprimer les relevés bancaires", 'is_correct' => false],
                            ['choice_text' => "Pour éviter toute relation avec les fournisseurs", 'is_correct' => false],
                        ],
                        'explanation' => "La séparation des tâches crée un contrôle croisé. Une même personne ne contrôle ainsi pas tout le cycle de préparation et de validation d'un paiement important."
                    ],
                    [
                        'question' => "Un fichier de paiements contient deux fois le même fournisseur et le même montant avec des références différentes. Quelle action est la plus prudente avant l'envoi à la banque ?",
                        'choices' => [
                            ['choice_text' => "Vérifier s'il s'agit d'un doublon ou de deux factures réellement distinctes", 'is_correct' => true],
                            ['choice_text' => "Envoyer les deux paiements sans vérification", 'is_correct' => false],
                            ['choice_text' => "Supprimer toutes les transactions du fichier", 'is_correct' => false],
                            ['choice_text' => "Modifier au hasard le montant d'un paiement", 'is_correct' => false],
                        ],
                        'explanation' => "Une alerte de doublon ne signifie pas automatiquement qu'une erreur existe, mais elle justifie une vérification avant l'exécution. Une facture peut être légitime, ou correspondre à un paiement répété par erreur."
                    ],
                    [
                        'question' => "Une entreprise rapproche ses soldes bancaires chaque matin. Quel bénéfice opérationnel en retire-t-elle ?",
                        'choices' => [
                            ['choice_text' => "Elle détecte plus rapidement les écarts et connaît mieux sa liquidité réellement disponible", 'is_correct' => true],
                            ['choice_text' => "Elle n'a plus besoin de cash forecast", 'is_correct' => false],
                            ['choice_text' => "Elle élimine les risques de marché", 'is_correct' => false],
                            ['choice_text' => "Elle transforme tous les encaissements en profits", 'is_correct' => false],
                        ],
                        'explanation' => "Une bonne fréquence de rapprochement améliore la qualité de l'information de trésorerie et permet de repérer rapidement une anomalie, un prélèvement ou une opération inattendue."
                    ],
                    [
                        'question' => "Un utilisateur demande des droits pour modifier à la fois les coordonnées fournisseurs et valider les paiements. Pourquoi cela pose-t-il problème ?",
                        'choices' => [
                            ['choice_text' => "Le cumul des droits augmente le risque de fraude ou de modification non détectée", 'is_correct' => true],
                            ['choice_text' => "Parce que toute personne financièrement compétente doit être interdite de paiement", 'is_correct' => false],
                            ['choice_text' => "Parce que les coordonnées fournisseurs ne sont jamais utilisées", 'is_correct' => false],
                            ['choice_text' => "Parce que les paiements bancaires ne nécessitent aucun contrôle", 'is_correct' => false],
                        ],
                        'explanation' => "La combinaison de droits sensibles peut permettre à une même personne de modifier un bénéficiaire puis de valider le paiement. Le principe du moindre privilège et la séparation des fonctions réduisent ce risque."
                    ],
                    [
                        'question' => "Une alerte signale un virement inhabituellement élevé vers un nouveau bénéficiaire. Quelle réponse est la plus appropriée ?",
                        'choices' => [
                            ['choice_text' => "Bloquer ou mettre en attente selon la procédure et effectuer des vérifications indépendantes", 'is_correct' => true],
                            ['choice_text' => "Augmenter automatiquement le montant", 'is_correct' => false],
                            ['choice_text' => "Supprimer toute trace du paiement", 'is_correct' => false],
                            ['choice_text' => "Ignorer l'alerte si le bénéficiaire existe dans un e-mail", 'is_correct' => false],
                        ],
                        'explanation' => "Un paiement atypique vers un nouveau bénéficiaire présente un profil de risque plus élevé. Les procédures de contrôle doivent permettre de vérifier l'origine, la justification et les coordonnées avant exécution."
                    ],
                    [
                        'question' => "Pourquoi les comptes bancaires dormants ou rarement utilisés doivent-ils également être suivis ?",
                        'choices' => [
                            ['choice_text' => "Ils peuvent contenir des soldes, des frais ou présenter des risques de contrôle malgré leur faible activité", 'is_correct' => true],
                            ['choice_text' => "Parce qu'un compte dormant génère toujours des profits", 'is_correct' => false],
                            ['choice_text' => "Parce qu'il faut obligatoirement fermer tous les comptes chaque semaine", 'is_correct' => false],
                            ['choice_text' => "Parce qu'un compte inactif ne peut jamais contenir d'argent", 'is_correct' => false],
                        ],
                        'explanation' => "Un compte peu utilisé n'est pas sans risque. Il peut générer des frais, conserver un solde ou servir de point d'entrée à une opération non surveillée. Un inventaire régulier des comptes améliore la gouvernance."
                    ],
                    [
                        'question' => "Une entreprise conserve une liste des signataires autorisés sur chaque compte bancaire. Quel est l'objectif ?",
                        'choices' => [
                            ['choice_text' => "S'assurer que les paiements et instructions sont validés par des personnes habilitées", 'is_correct' => true],
                            ['choice_text' => "Calculer le chiffre d'affaires mensuel", 'is_correct' => false],
                            ['choice_text' => "Déterminer le cours de change", 'is_correct' => false],
                            ['choice_text' => "Supprimer les frais de tenue de compte", 'is_correct' => false],
                        ],
                        'explanation' => "La liste des signataires est un contrôle de gouvernance. Elle permet à l'entreprise et à la banque de savoir qui peut engager les comptes selon les pouvoirs définis."
                    ],
                    [
                        'question' => "Une fraude est détectée après qu'un employé a utilisé son accès normal pour créer un nouveau bénéficiaire puis approuver le paiement. Quel contrôle aurait pu réduire ce risque ?",
                        'choices' => [
                            ['choice_text' => "Une séparation des tâches avec approbation indépendante du nouveau bénéficiaire", 'is_correct' => true],
                            ['choice_text' => "Un accès plus large pour le même employé", 'is_correct' => false],
                            ['choice_text' => "La suppression de tous les relevés", 'is_correct' => false],
                            ['choice_text' => "L'augmentation du nombre de bénéficiaires autorisés", 'is_correct' => false],
                        ],
                        'explanation' => "Le contrôle le plus pertinent ici est indépendant de la personne qui a créé le bénéficiaire. La séparation réduit la possibilité qu'une seule identité modifie puis valide toute la chaîne."
                    ],
                    [
                        'question' => "Pourquoi conserver une piste d'audit sur les modifications de coordonnées bancaires ?",
                        'choices' => [
                            ['choice_text' => "Pour savoir qui a modifié quoi, quand et avec quelle validation", 'is_correct' => true],
                            ['choice_text' => "Pour accélérer automatiquement tous les paiements", 'is_correct' => false],
                            ['choice_text' => "Pour supprimer les contrôles manuels", 'is_correct' => false],
                            ['choice_text' => "Pour convertir les coordonnées en monnaie locale", 'is_correct' => false],
                        ],
                        'explanation' => "Une piste d'audit facilite la détection et l'analyse des changements sensibles. Elle améliore aussi la capacité à démontrer qu'une procédure de contrôle a été suivie."
                    ],
                    [
                        'question' => "Un trésorier reçoit une demande urgente de paiement « confidentielle » sans bon de commande ni facture. Quelle attitude est la plus professionnelle ?",
                        'choices' => [
                            ['choice_text' => "Appliquer les contrôles prévus avant le paiement, même en présence d'une forte pression temporelle", 'is_correct' => true],
                            ['choice_text' => "Payer immédiatement pour ne pas retarder le projet", 'is_correct' => false],
                            ['choice_text' => "Contourner les approbations habituelles", 'is_correct' => false],
                            ['choice_text' => "Demander au fournisseur de décider lui-même de la validation", 'is_correct' => false],
                        ],
                        'explanation' => "L'urgence est souvent utilisée pour contourner les contrôles. Une bonne gouvernance prévoit des procédures accélérées lorsque cela est nécessaire, mais ne supprime pas les vérifications essentielles."
                    ],
                ],
            ],
            [
                'title' => "Cas pratiques de trésorerie",
                'description' => "Mettre en pratique les réflexes de treasury management à travers des situations courantes d'entreprise.",
                'duration' => 28,
                'passing_score' => 61,
                'questions' => [
                    [
                        'question' => "Une PME termine le mois avec 250 000 € en banque. Pour le mois suivant, elle prévoit 600 000 € d'encaissements et 720 000 € de sorties. Quel solde final prévisionnel obtient-on avant tout financement ?",
                        'choices' => [
                            ['choice_text' => "130 000 €", 'is_correct' => true],
                            ['choice_text' => "370 000 €", 'is_correct' => false],
                            ['choice_text' => "1 070 000 €", 'is_correct' => false],
                            ['choice_text' => "-130 000 €", 'is_correct' => false],
                        ],
                        'explanation' => "Le solde prévisionnel est 250 000 € + 600 000 € - 720 000 € = 130 000 €. Le trésorier doit ensuite comparer ce niveau au cash minimum et aux besoins imprévus."
                    ],
                    [
                        'question' => "Le directeur commercial annonce 2 M€ de nouvelles ventes, mais la moitié sera encaissée dans 90 jours. Pourquoi le trésorier ne doit-il pas considérer les 2 M€ comme du cash immédiatement disponible ?",
                        'choices' => [
                            ['choice_text' => "Parce qu'une vente comptabilisée n'est pas nécessairement un encaissement immédiat", 'is_correct' => true],
                            ['choice_text' => "Parce qu'une vente ne génère jamais de créance", 'is_correct' => false],
                            ['choice_text' => "Parce que les ventes sont toujours payées en liquide", 'is_correct' => false],
                            ['choice_text' => "Parce que le chiffre d'affaires est identique à la trésorerie", 'is_correct' => false],
                        ],
                        'explanation' => "Les ventes peuvent créer des créances clients. La trésorerie s'intéresse à la date réelle des encaissements et non seulement au montant comptabilisé comme chiffre d'affaires."
                    ],
                    [
                        'question' => "Une entreprise doit payer 500 000 € de taxes dans dix jours. Son cash actuel est de 420 000 € et elle attend 200 000 € d'encaissements probables avant cette date. Quelle information doit-elle sécuriser en priorité ?",
                        'choices' => [
                            ['choice_text' => "La date et la probabilité réelle des 200 000 € d'encaissements", 'is_correct' => true],
                            ['choice_text' => "La couleur du relevé bancaire", 'is_correct' => false],
                            ['choice_text' => "Le nombre de factures éditées l'année dernière", 'is_correct' => false],
                            ['choice_text' => "Le nombre de comptes bancaires du fournisseur", 'is_correct' => false],
                        ],
                        'explanation' => "Le besoin de liquidité dépend ici du calendrier. Si les 200 000 € arrivent à temps, le paiement peut être couvert ; s'ils sont retardés, l'entreprise peut avoir un déficit temporaire."
                    ],
                    [
                        'question' => "Une société reçoit une remise de 2 % si elle paie un fournisseur 20 jours plus tôt. Comment la trésorerie doit-elle raisonner ?",
                        'choices' => [
                            ['choice_text' => "Comparer la valeur de la remise au coût d'avancer le paiement et à l'effet sur la liquidité", 'is_correct' => true],
                            ['choice_text' => "Accepter automatiquement toute remise", 'is_correct' => false],
                            ['choice_text' => "Refuser automatiquement toute remise", 'is_correct' => false],
                            ['choice_text' => "Ignorer le coût de financement", 'is_correct' => false],
                        ],
                        'explanation' => "Une remise peut être économiquement attractive, mais avancer le paiement consomme du cash. Le bon arbitrage compare le bénéfice de la remise avec le coût du financement ou le rendement auquel le cash pourrait être employé."
                    ],
                    [
                        'question' => "Une filiale reçoit un encaissement important en USD alors que ses dépenses locales sont en MAD. Que peut faire la trésorerie si elle ne veut pas conserver une exposition USD inutile ?",
                        'choices' => [
                            ['choice_text' => "Convertir la devise ou mettre en place une couverture selon la politique du groupe", 'is_correct' => true],
                            ['choice_text' => "Augmenter les dépenses en MAD sans raison", 'is_correct' => false],
                            ['choice_text' => "Ignore le cours de change jusqu'à la fin de l'année", 'is_correct' => false],
                            ['choice_text' => "Transformer automatiquement le dollar en dette", 'is_correct' => false],
                        ],
                        'explanation' => "Si les dépenses sont en MAD et l'encaissement en USD, la filiale peut supporter une exposition de change. La conversion ou la couverture doit être décidée selon les besoins réels et les règles de gestion du groupe."
                    ],
                    [
                        'question' => "Le trésorier constate que 70 % des sorties du mois sont concentrées entre le 25 et le 30. Quelle conséquence doit-il intégrer dans sa prévision ?",
                        'choices' => [
                            ['choice_text' => "Un besoin de liquidité plus important en fin de mois", 'is_correct' => true],
                            ['choice_text' => "Une hausse automatique des encaissements au même moment", 'is_correct' => false],
                            ['choice_text' => "Une baisse mécanique du BFR", 'is_correct' => false],
                            ['choice_text' => "Aucune conséquence, car le total mensuel ne change pas", 'is_correct' => false],
                        ],
                        'explanation' => "Le timing des flux compte. Deux entreprises ayant le même total mensuel peuvent avoir des risques de liquidité très différents si leurs décaissements sont concentrés sur des dates spécifiques."
                    ],
                    [
                        'question' => "Une banque propose de centraliser les soldes de plusieurs filiales pour utiliser plus efficacement le cash. Quelle logique économique se cache derrière cette proposition ?",
                        'choices' => [
                            ['choice_text' => "Éviter qu'un excédent dans une entité coexiste avec un besoin financé dans une autre", 'is_correct' => true],
                            ['choice_text' => "Supprimer toutes les obligations comptables des filiales", 'is_correct' => false],
                            ['choice_text' => "Garantir que toutes les filiales auront le même chiffre d'affaires", 'is_correct' => false],
                            ['choice_text' => "Interdire toute utilisation locale du cash", 'is_correct' => false],
                        ],
                        'explanation' => "La centralisation ou le cash pooling cherche notamment à améliorer l'utilisation globale de la liquidité du groupe. Des structures adaptées peuvent réduire les besoins de financement externe et limiter les cash traps internes."
                    ],
                    [
                        'question' => "Une entreprise prévoit de doubler sa production le trimestre prochain. Quelle question de treasury doit être posée avant le lancement ?",
                        'choices' => [
                            ['choice_text' => "Quel besoin de cash supplémentaire sera généré par les stocks, les fournisseurs et les délais d'encaissement ?", 'is_correct' => true],
                            ['choice_text' => "Quel sera le nouveau logo de la gamme ?", 'is_correct' => false],
                            ['choice_text' => "Combien de comptes clients seront supprimés ?", 'is_correct' => false],
                            ['choice_text' => "Quelle sera nécessairement la hausse du dividende ?", 'is_correct' => false],
                        ],
                        'explanation' => "Une forte hausse de production peut consommer du cash avant que les ventes correspondantes soient encaissées. Il faut donc estimer l'effet sur le stock, les achats, les créances et le financement à court terme."
                    ],
                    [
                        'question' => "Une société dispose d'une dette bancaire de 3 M€ à taux variable et d'un cash excédentaire de 1 M€. Quel point simple doit être considéré dans la gestion globale du financement ?",
                        'choices' => [
                            ['choice_text' => "Le coût net du financement après prise en compte de la trésorerie disponible", 'is_correct' => true],
                            ['choice_text' => "Uniquement le montant brut de la dette", 'is_correct' => false],
                            ['choice_text' => "Uniquement le chiffre d'affaires", 'is_correct' => false],
                            ['choice_text' => "La dette et le cash n'ont jamais de relation économique", 'is_correct' => false],
                        ],
                        'explanation' => "La situation financière doit être regardée de façon globale. Le cash excédentaire peut avoir un rendement inférieur au coût de la dette, ce qui pose un arbitrage de trésorerie à étudier."
                    ],
                    [
                        'question' => "Une entreprise découvre qu'un fournisseur majeur exige désormais paiement comptant au lieu de 60 jours. Quel impact immédiat doit être étudié ?",
                        'choices' => [
                            ['choice_text' => "Une augmentation du besoin de financement du cycle d'exploitation", 'is_correct' => true],
                            ['choice_text' => "Une réduction automatique du stock", 'is_correct' => false],
                            ['choice_text' => "Une hausse mécanique du cash disponible", 'is_correct' => false],
                            ['choice_text' => "Une disparition des créances clients", 'is_correct' => false],
                        ],
                        'explanation' => "Passer de 60 jours à comptant avance les sorties de cash et augmente potentiellement le besoin de financement. La trésorerie doit mesurer l'effet en montant et en calendrier."
                    ],
                ],
            ],
            [
                'title' => "Tableau de bord du trésorier",
                'description' => "Lire les principaux indicateurs de trésorerie et transformer les données en décisions de pilotage.",
                'duration' => 21,
                'passing_score' => 57,
                'questions' => [
                    [
                        'question' => "Quel indicateur mesure le temps moyen nécessaire pour encaisser les créances clients ?",
                        'choices' => [
                            ['choice_text' => "DSO", 'is_correct' => true],
                            ['choice_text' => "DPO", 'is_correct' => false],
                            ['choice_text' => "ROE", 'is_correct' => false],
                            ['choice_text' => "EBITDA", 'is_correct' => false],
                        ],
                        'explanation' => "Le DSO (Days Sales Outstanding) mesure en jours le délai moyen de recouvrement des créances clients. Une hausse peut peser sur la trésorerie si les conditions commerciales restent inchangées."
                    ],
                    [
                        'question' => "Une hausse du DPO signifie généralement que :",
                        'choices' => [
                            ['choice_text' => "les fournisseurs sont payés en moyenne plus tard", 'is_correct' => true],
                            ['choice_text' => "les clients paient plus rapidement", 'is_correct' => false],
                            ['choice_text' => "les stocks sont nécessairement plus faibles", 'is_correct' => false],
                            ['choice_text' => "le cash disponible disparaît automatiquement", 'is_correct' => false],
                        ],
                        'explanation' => "Le DPO (Days Payables Outstanding) reflète le délai moyen de paiement des fournisseurs. Une hausse peut soutenir la trésorerie, mais elle doit rester compatible avec les relations fournisseurs et les conditions contractuelles."
                    ],
                    [
                        'question' => "Un tableau de bord affiche : cash disponible 800 000 €, lignes confirmées non tirées 500 000 € et cash minimum 600 000 €. Quelle information montre la capacité de sécurité potentielle avant même un nouveau financement ?",
                        'choices' => [
                            ['choice_text' => "La trésorerie disponible et les lignes confirmées fournissent ensemble 1,3 M€ de ressources mobilisables selon les conditions", 'is_correct' => true],
                            ['choice_text' => "Le cash minimum de 600 000 € doit être ajouté au cash disponible", 'is_correct' => false],
                            ['choice_text' => "Les lignes non tirées sont déjà du cash en banque", 'is_correct' => false],
                            ['choice_text' => "La capacité totale est nécessairement de 800 000 € seulement", 'is_correct' => false],
                        ],
                        'explanation' => "Les 800 000 € constituent le cash immédiatement disponible, tandis que les 500 000 € sont une capacité de financement supplémentaire, sous réserve de leurs conditions. On ne doit pas confondre ligne confirmée et cash détenu."
                    ],
                    [
                        'question' => "Le cash conversion cycle se détériore parce que le DSO augmente alors que le DPO et les stocks restent stables. Quelle explication est la plus directe ?",
                        'choices' => [
                            ['choice_text' => "Les créances clients mettent plus de temps à être encaissées", 'is_correct' => true],
                            ['choice_text' => "Les fournisseurs sont payés plus tôt", 'is_correct' => false],
                            ['choice_text' => "Les ventes sont nécessairement en baisse", 'is_correct' => false],
                            ['choice_text' => "La dette long terme augmente forcément", 'is_correct' => false],
                        ],
                        'explanation' => "Le cash conversion cycle dépend notamment du délai d'encaissement clients. Une hausse du DSO allonge le temps pendant lequel le cash reste immobilisé dans le cycle d'exploitation."
                    ],
                    [
                        'question' => "Un indicateur montre que 35 % des décaissements prévus du mois prochain concernent seulement cinq fournisseurs. Quelle information cela apporte-t-il au trésorier ?",
                        'choices' => [
                            ['choice_text' => "Une concentration des sorties à surveiller pour la prévision et la négociation", 'is_correct' => true],
                            ['choice_text' => "Une garantie que les cinq fournisseurs sont les plus rentables", 'is_correct' => false],
                            ['choice_text' => "Une preuve que la société n'a aucun risque fournisseur", 'is_correct' => false],
                            ['choice_text' => "Un calcul direct du ROE", 'is_correct' => false],
                        ],
                        'explanation' => "Une forte concentration sur quelques fournisseurs peut rendre certaines dates critiques pour la trésorerie. Cela peut guider les scénarios de cash et les discussions sur les modalités de paiement."
                    ],
                    [
                        'question' => "Une entreprise suit le pourcentage d'encaissements reçus dans les délais contractuels. Pourquoi cet indicateur est-il utile au treasury ?",
                        'choices' => [
                            ['choice_text' => "Parce qu'il aide à apprécier la fiabilité des encaissements prévus", 'is_correct' => true],
                            ['choice_text' => "Parce qu'il remplace toute analyse du cash", 'is_correct' => false],
                            ['choice_text' => "Parce qu'il mesure directement le rendement des obligations", 'is_correct' => false],
                            ['choice_text' => "Parce qu'il garantit l'absence de défaut client", 'is_correct' => false],
                        ],
                        'explanation' => "Le taux de paiement à l'échéance fournit une information utile pour calibrer les prévisions de cash. Un indicateur qui se dégrade peut annoncer des retards et donc une tension future de liquidité."
                    ],
                    [
                        'question' => "Le trésorier présente deux scénarios : base avec 1,1 M€ de cash fin de mois et stress avec 650 000 €. Le minimum de sécurité est 700 000 €. Quelle conclusion immédiate peut-on tirer ?",
                        'choices' => [
                            ['choice_text' => "Le scénario stress franchit le seuil de sécurité de 50 000 €", 'is_correct' => true],
                            ['choice_text' => "Les deux scénarios sont au-dessus du seuil", 'is_correct' => false],
                            ['choice_text' => "Le scénario de base est en déficit", 'is_correct' => false],
                            ['choice_text' => "Le seuil de sécurité n'a plus d'intérêt", 'is_correct' => false],
                        ],
                        'explanation' => "Dans le scénario stress, 650 000 € est inférieur à 700 000 € de 50 000 €. Cela signale qu'une action de contingence peut être nécessaire si ce scénario devient plausible."
                    ],
                    [
                        'question' => "Un responsable remarque que le cash forecast est précis sur les montants mais souvent en retard sur les dates. Quel axe d'amélioration est prioritaire ?",
                        'choices' => [
                            ['choice_text' => "Améliorer la qualité du calendrier des flux et des données opérationnelles", 'is_correct' => true],
                            ['choice_text' => "Augmenter uniquement le nombre de graphiques", 'is_correct' => false],
                            ['choice_text' => "Supprimer les dates et garder seulement les montants", 'is_correct' => false],
                            ['choice_text' => "Remplacer le forecast par le compte de résultat", 'is_correct' => false],
                        ],
                        'explanation' => "Un forecast de trésorerie peut avoir des montants corrects mais rester peu utile si les dates sont mauvaises. Les données de facturation, achats, paie et paiements doivent être mieux synchronisées."
                    ],
                    [
                        'question' => "Une société constate que son cash minimum réel est régulièrement inférieur au seuil théorique défini dans la politique de trésorerie. Que devrait-elle faire ?",
                        'choices' => [
                            ['choice_text' => "Réexaminer le seuil, les flux et les raisons des écarts avant de modifier la politique", 'is_correct' => true],
                            ['choice_text' => "Supprimer toute politique de liquidité", 'is_correct' => false],
                            ['choice_text' => "Ignorer la situation puisque le seuil est seulement indicatif", 'is_correct' => false],
                            ['choice_text' => "Doubler la dette sans analyser le besoin", 'is_correct' => false],
                        ],
                        'explanation' => "Un écart répété peut signaler un seuil mal calibré, une mauvaise prévision ou un changement du profil de risque. Il faut analyser la cause avant de décider d'un ajustement."
                    ],
                    [
                        'question' => "Quel indicateur est le plus adapté pour suivre directement la variation nette de trésorerie sur une période ?",
                        'choices' => [
                            ['choice_text' => "Le flux net de trésorerie", 'is_correct' => true],
                            ['choice_text' => "Le nombre de contrats fournisseurs", 'is_correct' => false],
                            ['choice_text' => "Le nombre de clients actifs", 'is_correct' => false],
                            ['choice_text' => "La part de marché", 'is_correct' => false],
                        ],
                        'explanation' => "Le flux net de trésorerie mesure la différence entre les entrées et sorties de cash sur la période. Il explique directement comment le solde de trésorerie a évolué."
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
